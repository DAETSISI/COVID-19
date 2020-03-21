<!DOCTYPE html>
<html>

<?php include 'components/common_head.php'; ?>

<body>

<?php include 'components/common_nav_menu.php'; ?>
<style>
    .col a:link,a:visited, a:active{
        text-decoration: none;
        align-items: center;
        color:black;
        text-align: center;
    }

    .col a:hover{
        text-decoration: none;
        align-items: center;
        color:#EFB810;
        text-align: center;
    }


</style>
<main class="main">
    <h1 class="text-center">Medidas de la ETSI Sistemas Informáticos</h1>
    <hr>
    <div class="container">


        <p>Desde la Dirección de la Escuela se ha pedido que cada asignatura remita un cronograma en el que se incluya las acciones que se van a tomar. En cada una de las secciones
            que hemos habilitado para los distintos cursos, podréis encontrar toda la información correspondiente que hemos recopilado hasta ahora.<br></p>
        <h4 style="padding-top:1em">Información de Asignaturas</h4>
        <hr>

        <div class="row row-cols-1 row-cols-md-2">
            <div class="col mb-4">
                <a href="./Primero.php" target="_blank">
                <div class="card">
                    <img src="./img/1.png" class="card-img-top" alt="Logo de la Escuela para Primero">
                </div>
                </a>

            </div>

            <div class="col mb-4">
                <a href="./Segundo.php" target="_blank">
                <div class="card">
                    <img src="./img/2.png" class="card-img-top" alt="Logo de la Escuela para Segundo">
                </div>
                </a>
            </div>

            <div class="col mb-4">
                <a href="./Tercero.php" target="_blank">
                <div class="card">
                    <img src="./img/3.png" class="card-img-top" alt="Logo de la Escuela para Tercero">
                </div>
                </a>
            </div>

            <div class="col mb-4">
                <a href="./Cuarto.php" target="_blank">
                <div class="card">
                    <img src="./img/4.png" class="card-img-top" alt="Logo de la Escuela para Cuarto">
                </div>
                </a>
            </div>
        </div>




    </div>
</main>
<?php include 'components/common_footer.php'; ?>
<?php include 'components/js_scripts.php'; ?>
</body>
</html>