<?php

include '../controllers/subjects_controller.php';

?>
<!DOCTYPE html>
<html>

<?php include '../components/common_head.php'; ?>

<body>

<?php include '../components/common_nav_menu.php'; ?>

<h1 class="text-center">Segundo curso</h1>
<hr>
<main class="main">
    <div class="container">
        <div class="row" style="text-align: center; margin-bottom: 30px">
            <div class="col-md-3">
                <a class="btn btn-dark" href="/etsisi/primero" style="text-decoration: none">Primero</a>
            </div>
            <div class="col-md-3">
                <button class="btn btn-warning">Segundo</button>
            </div>
            <div class="col-md-3">
                <a class="btn btn-dark" href="/etsisi/tercero" style="text-decoration: none">Tercero</a>
            </div>
            <div class="col-md-3">
                <a class="btn btn-dark" href="/etsisi/cuarto" style="text-decoration: none">Cuarto</a>
            </div>
        </div>

        <p style="text-align: justify">
            En esta sección tenéis toda la información relativa a las asignaturas del <b>segundo curso</b>
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

		<?= prepare_html_for_year( 2 ) ?>

    </div>
</main>
<?php include '../components/common_footer.php'; ?>
<?php include '../components/js_scripts.php'; ?>
<?php include '../components/common_subjects_votes_js.php'; ?>
</body>
</html>