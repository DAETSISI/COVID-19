<?php

include '../controllers/subjects_controller.php';

?>
<!DOCTYPE html>
<html>

<?php include '../components/common_head.php'; ?>

<style>
    .separadores {
        margin-top: 1em;
        border: 1px solid black;
        color: black;
    }
</style>
<body>

<?php include '../components/common_nav_menu.php'; ?>
<h1 class="text-center">Tercer curso</h1>
<hr>
<main class="main">
    <div class="container">
        <p style="text-align: justify">
            En esta sección tenéis toda la información relativa a las asignaturas del <b>tercer curso</b>
            que hemos recopilado hasta el momento. Además, hemos habilitado la posibilidad de valorar,
            para que nos déis vuestra opinión de cómo se están llevando los cambios en la docencia en las
            diferentes asignaturas.
            <br>
            <br>
            Tened en cuenta que toda esta información, especialmente la relativa a los criterios de evaluación,
            <b>no es definitiva y puede ir variando</b> en base tanto a como se desenvuelva la situación en
            las próximas semanas, como a las decisiones que tome el equipo rectoral para la UPM en su conjunto.
            <br>
            <br>
            ¡Consultad regularmente esta web y nuestras redes sociales para estar al día de todo!
            <br>
            <br>
        </p>

        <div class="separadores">
            <a class="card card-body text-center" data-toggle="collapse" href="#collapse" role="button" aria-expanded="false" aria-controls="collapseExample">
                Grado en Ingeniería del Software
            </a>
            <div class="collapse" id="collapse">
                <div class="card card-body ">
					<?= prepare_html_for_year( 3, 1 ) ?>
                </div>
            </div>

        </div>

        <div class="separadores">
            <a class="card card-body text-center" data-toggle="collapse" href="#collapse2" role="button" aria-expanded="false" aria-controls="collapseExample">
                Grado en Ingeniería de Computadores
            </a>
            <div class="collapse" id="collapse2">
                <div class="card card-body">
					<?= prepare_html_for_year( 3, 2 ) ?>
                </div>
            </div>
        </div>

        <div class="separadores">
            <a class="card card-body text-center" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                Grado en Sistemas de Información
            </a>
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
					<?= prepare_html_for_year( 3, 3 ) ?>
                </div>
            </div>
        </div>

        <div class="separadores">
            <a class="card card-body text-center" data-toggle="collapse" href="#collapse3" role="button" aria-expanded="false" aria-controls="collapseExample">
                Grado en Tecnologías para la Sociedad de la Información
            </a>
            <div class="collapse" id="collapse3">
                <div class="card card-body">
					<?= prepare_html_for_year( 3, 4 ) ?>
                </div>
            </div>
        </div>

    </div>
</main>
<?php include '../components/common_footer.php'; ?>
<?php include '../components/js_scripts.php'; ?>
<?php include '../components/common_subjects_votes_js.php'; ?>
</body>
</html>