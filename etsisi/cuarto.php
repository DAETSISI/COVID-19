<?php

include '../controllers/subjects_controller.php';

?>
<!DOCTYPE html>
<html>

<?php include '../components/common_head.php'; ?>

<body>

<?php include '../components/common_nav_menu.php'; ?>

<h1 class="text-center">Cuarto</h1>
<hr>
<main class="main">
    <div class="container">

        <p>
            En esta sección tendréis toda la información relativa a todas las asignaturas de Cuarto Curso, por otra
            parte hemos habilitado la posibilidad de votar para que nos déis vuestra opinión de cómo se está llevando
            la docencia. Para poder votar, deberás ser un estudiante de la ETSI Sistemas Informáticos.
        </p>

		<?= prepare_html_for_year( 4 ) ?>
    </div>
</main>
<?php include '../components/common_footer.php'; ?>
<?php include '../components/js_scripts.php'; ?>
</body>
</html>