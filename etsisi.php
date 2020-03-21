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
                    <img src="" class="card-img-top" alt="Logo de la Escuela para Primero">
                    <div class="card-body">
                        <h5 class="card-title text-center">Primero</h5>
                        <p class="card-text">Todas las asignaturas de primero, las guías modificadas y los medios que se van a emplear.</p>
                    </div>
                </div>
                </a>

            </div>

            <div class="col mb-4">
                <a href="./Segundo.php" target="_blank">
                <div class="card">
                    <img src="" class="card-img-top" alt="Logo de la Escuela para Segundo">
                    <div class="card-body">
                        <h5 class="card-title text-center">Segundo</h5>
                        <p class="card-text">Todas las asignaturas de segundo, las guías modificadas y los medios que se van a emplear.</p>
                    </div>
                </div>
                </a>
            </div>

            <div class="col mb-4">
                <a href="./Tercero.php" target="_blank">
                <div class="card">
                    <img src="" class="card-img-top" alt="Logo de la Escuela para Tercero">
                    <div class="card-body">
                        <h5 class="card-title text-center">Tercero</h5>
                        <p class="card-text">Todas las asignaturas de tercero, las guías modificadas y los medios que se van a emplear.</p>
                    </div>
                </div>
                </a>
            </div>

            <div class="col mb-4">
                <a href="./Cuarto.php" target="_blank">
                <div class="card">
                    <img src="" class="card-img-top" alt="Logo de la Escuela para Cuarto">
                    <div class="card-body">
                        <h5 class="card-title text-center" >Cuarto</h5>
                        <p class="card-text">Todas las asignaturas de cuarto, las guías modificadas y los medios que se van a emplear.</p>
                    </div>
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