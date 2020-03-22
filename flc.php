<!DOCTYPE html>
<html>

<?php include 'components/common_head.php'; ?>

<style>

    .btn:focus {
        outline: 0;
        box-shadow: 0 0 0 0rem rgba(0, 0, 0, 0);
    }
    .btn-pdf {
        background-color: #17a2b8;
        color: white !important;
        margin-bottom: 0.8rem;
    }
    a {
        color: #000000;
        text-decoration: none;
    }
</style>
<body>

<?php include 'components/common_nav_menu.php'; ?>
<h1 class="text-center">Frena la Curva</h1>
<hr>
<main class="main">

    <div class="container">

        <p>Frena la Curva es un movimiento</p>
        <div class="row">


            <div class="col-md-7">

            </div>
            <div class="col-md-5">
                <iframe width="444" height="162" src="https://www.youtube.com/embed/P3e_MR4bCSQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            </iframe>
            </div>
        </div>

        <p>Cupidatat familiaritatem ita consequat et aliquip ex amet senserit. Malis hic
            arbitror de legam. Irure nescius reprehenderit, aut est cillum mentitum et legam
            offendit ea adipisicing, do senserit consectetur. Aliquip quae fugiat qui culpa
            an mentitum imitarentur non nostrud et labore ita senserit non ad fugiat
            cohaerescant. Multos nostrud ex voluptatibus, quem iudicem qui reprehenderit ita
            quamquam eram duis et minim, nam an fugiat labore enim, singulis do eiusmod aut
            hic illum incurreret concursionibus, culpa occaecat ea arbitror nam minim
            quamquam iis philosophari. Quorum qui ab anim admodum. Lorem est te eram
            laborum, qui excepteur est occaecat.</p>

        <li class="list-group-item">
            <div class="row">
                <div class="col-sm-12"><p class="card-title"><b>
                            <a href="https://covid19.daetsisi.es/documentacion/DAUPM-DAETSISI/El_Arte_de_Vivir_y_Estudiar_en_Tiempos_del_COVID-19.pdf" target="_blank" alt="Recomendaciones Psicóloga">El arte de Vivir y Estudiar en Tiempos del COVID-19</a></b>
                </div>
                <div class="col-sm-8">
                    <p class="card-text fecha" style="margin-bottom: -0.2rem;">13/03/2020</p>
                    <p class="card-text órgano" style="margin-bottom: -0.2rem;">Recomendaciones Psicóloga ETSIAAB</p>   <!--Quedaría mejor poner Gabinete Psicológico ETSIAAB -->
                    <p class="card-text Persona" style="margin-bottom: -0.2rem;">Luz Rodríguez</p>
                </div>
                <div class="col-sm-4" style="text-align: end;">
                    <div style="margin-top: 0.8rem;display: inline-block;">
                        <a class="btn btn-pdf" href="https://covid19.daetsisi.es/documentacion/DAUPM-DAETSISI/El_Arte_de_Vivir_y_Estudiar_en_Tiempos_del_COVID-19.pdf" role="button" target="_blank" alt="Recomendaciones Psicóloga ETSIAAB">Enlace a pdf</a>
                    </div>
                </div>
            </div>
        </li>  <!--Recomendaciones Psicóloga ETSIAAB -->

    </div>
</main>
<?php include 'components/common_footer.php'; ?>
<?php include 'components/js_scripts.php'; ?>
</body>
</html>