<?php

include '../controllers/subjects_controller.php';

?>
<!DOCTYPE html>
<html>

<?php include '../components/common_head.php'; ?>

<body>

<?php include '../components/common_nav_menu.php'; ?>

<h1 class="text-center">Primero</h1>
<hr>
<main class="main">
    <div class="container">

        <p>
            En esta sección tendréis toda la información relativa a las asignaturas del Primer Curso, por otra
            parte hemos habilitado la posibilidad de votar para que nos déis vuestra opinión de cómo se está llevando
            la docencia. Para poder votar, deberás ser un estudiante de la ETSI Sistemas Informáticos.
        </p>

        <p> Las columnas de actividades de evaluación, actividades y criterios de evaluación tienen un contenido que dependerá
            de la decisión rectoral de prorrogar el calendario académico, es por ello que no son definitivas quedando supeditadas
            a como se desenvuelve al situación.
        </p>

		<?= prepare_html_for_year( 1 ) ?>
    </div>
</main>

<?php include '../components/common_footer.php'; ?>
<?php include '../components/js_scripts.php'; ?>
<?php include '../components/common_subjects_votes_js.php'; ?>
</body>
</html>