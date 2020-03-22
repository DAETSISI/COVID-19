<?php

include 'db_controller.php';

function prepare_html_for_year( $year, $study = 0 ) {
	$subjects   = get_subjects( $year, $study );
	$user_votes = get_user_votes( getUserIpAddr() );

	$html = "";
	foreach ( $subjects as $subject ) {
		$html_docencia   = $subject->html_docencia();
		$html_practicas  = $subject->html_practicas();
		$html_evaluacion = $subject->html_evaluacion();
		$html_recursos   = $subject->html_recursos();

		if ( $subject->url_guia !== "" ) {
			$html_url_guia = <<<EOL
                                        <a class="btn btn-info" style="text-decoration: none;" href="$subject->url_guia" target="_blank">Guía modificada</a>
EOL;
		} else {
			$html_url_guia = "";
		}

		$votes_html = prepare_subject_votes_html( $subject->id, $user_votes );

		$html .= <<<EOL
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="text-align: center;">
                        <h3>$subject->name</h3>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="card-text">
                                    <span><b>Docencia telemática</b></span><br>
									$html_docencia
                                    <hr>
                                    <span><b>Actividades prácticas</b></span><br>
									$html_practicas
                                    <hr>
                                    <span><b>Criterios de evaluación</b></span><br>
									$html_evaluacion
                                    <hr>
                                    <span><b>Recursos didácticos</b></span><br>
									$html_recursos
                                    <hr>
                                   	$html_url_guia
                                </div>
                            </div>

						$votes_html
                            
                        </div>
                    </div>
                </div>
            </div>

        </div>
EOL;
	}

	return $html;
}

function prepare_subject_votes_html( $subject_id, $user_votes ) {
	$subject_votes = $user_votes[$subject_id];
	$first_topic_html = prepare_topic_vote_html($subject_id, $subject_votes[0], 0);
	$second_topic_html = prepare_topic_vote_html($subject_id, $subject_votes[1], 1);
	$third_topic_html = prepare_topic_vote_html($subject_id, $subject_votes[2], 2);
	$fourth_topic_html = prepare_topic_vote_html($subject_id, $subject_votes[3], 3);

	$html = <<<EOL
		<div class="col-md-5">
			<h4 class="card-title">¡Danos tu opinión!</h4>
			<div class="card-text">
				<span>Docencia telemática</span><br>
				$first_topic_html
				<hr>
				<span>Actividades prácticas</span><br>
				$second_topic_html
				<hr>
				<span>Criterios de evaluación</span><br>
				$third_topic_html
				<hr>
				<span>Recursos didácticos</span><br>
				$fourth_topic_html
				<hr>
			</div>
		</div>
EOL;

	return $html;
}

function prepare_topic_vote_html($subject_id, $topic_votes, $topic_index) {
	if($topic_votes == null || $topic_votes === 0) {
		return <<<EOL
				<button id="vote_button-$subject_id-$topic_index-up" class="btn btn-outline-success subject_vote_button" value="1">👍</button>
				<button id="vote_button-$subject_id-$topic_index-down" class="btn btn-outline-danger subject_vote_button" value="-1">👎</button> 
EOL;

	} else if ($topic_votes === 1) {
		return <<<EOL
				<button id="vote_button-$subject_id-$topic_index-up" class="btn btn-success subject_vote_button" value="1">👍</button>
				<button id="vote_button-$subject_id-$topic_index-down" class="btn btn-outline-danger subject_vote_button" value="-1">👎</button> 
EOL;
	} else {
		return <<<EOL
				<button id="vote_button-$subject_id-$topic_index-up" class="btn btn-outline-success subject_vote_button" value="1">👍</button>
				<button id="vote_button-$subject_id-$topic_index-down" class="btn btn-danger subject_vote_button" value="-1">👎</button> 
EOL;
	}
}

function getUserIpAddr() {
	if ( ! empty( $_SERVER['HTTP_CLIENT_IP'] ) ) {
		//ip from share internet
		$ip = $_SERVER['HTTP_CLIENT_IP'];
	} elseif ( ! empty( $_SERVER['HTTP_X_FORWARDED_FOR'] ) ) {
		//ip pass from proxy
		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	} else {
		$ip = $_SERVER['REMOTE_ADDR'];
	}

	return $ip;
}
