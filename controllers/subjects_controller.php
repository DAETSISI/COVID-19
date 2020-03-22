<?php

include 'db_controller.php';

function prepare_html_for_year( $year, $study = 0 ) {
	$subjects = get_subjects( $year, $study );

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

                            <div class="col-md-5">
                                <h5 class="card-title">¡Dános tu Opión!</h5>
                                <p class="card-text">
                                    Docencia Telemática:<br>
                                <hr>
                                Material de Estudio:
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
EOL;
	}

	return $html;
}