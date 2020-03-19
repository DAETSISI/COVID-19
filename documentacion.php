<!DOCTYPE html>
<html>
<head>
    <Title>COVID-19</Title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale = 1">

    <link rel="stylesheet" type="text/css" href="./css/main.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

</head>

<body>

<?php include 'components/common_nav_menu.php'; ?>

<main class="main enlaces">
    <form class="search-form" role="search" method="get" action="">
        <div classs="form-group row">
            <label class="col-sm-1 col-form-label no">
                <span class="screen-reader-text">Búsqueda:</span>
            </label>
            <label class="col-sm-7">
            <input class="search-field form-control" type="search" placeholder="Buscar ..." value="" name="s" title="Buscar:">
            </label>
            <div>
                <select id="category_name" class="form-control no" name="category_name">
                    <option selected="selected" value="posicionamiento">Posicionamiento</option>
                </select>
            </div>
            <div class="col-sm-2">
                <button class="search-submit btn btn-search" type="submit" value="Buscar">Buscar</button>
            </div>
        </div>
    </form>

    <div class="container">

        <div class="row">

            <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <h4>Estado y Comunidad de Madrid</h4>
            </a>

            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    <ul class="list-group list-group-flush" style="overflow: hidden;max-height: fit-content;">

                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-sm-12"><p class="card-title"><b>
                                            <a href="#">Comunicado de la Presidenta de la Comunidad de Madrid</a></b>
                                    </p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="card-text fecha" style="margin-bottom: -0.2rem;">Aprobado el 28/11/2019</p>
                                    <p class="card-text órgano" style="margin-bottom: -0.2rem;">Comunicado de Prensa</p>
                                </div>
                                <div class="col-sm-4" style="text-align: end;">
                                    <div style="margin-top: 0.8rem;display: inline-block;">
                                        <a class="btn btn-pdf" href="#" role="button">Enlace a pdf</a></div>
                                    <div style="display: inline-block;vertical-align: super;"><div class="btn btn-danger" sytle="background-color:red">DEROGADO</div></div>
                                </div>
                            </div>
                        </li>

                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-sm-12"><p class="card-title"><b>
                                            <a href="#">Comunicado Actualizado de Prensa</a></b>
                                    </p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="card-text fecha" style="margin-bottom: -0.2rem;">Aprobado el 28/11/2019</p>
                                    <p class="card-text órgano" style="margin-bottom: -0.2rem;">Comunicado de Prensa</p>
                                </div>
                                <div class="col-sm-4" style="text-align: end;">
                                    <div style="margin-top: 0.8rem;display: inline-block;">
                                        <a class="btn btn-pdf" href="#" role="button">Enlace a pdf</a></div>
                                    <div style="display: inline-block;vertical-align: super;"><div class="btn btn-danger" sytle="background-color:red">DEROGADO</div></div>
                                </div>
                            </div>
                        </li>

                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-sm-12"><p class="card-title"><b>
                                            <a href="#">BOCM 10 de Marzo de 2020</a></b>
                                    </p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="card-text fecha" style="margin-bottom: -0.2rem;">Aprobado el 28/11/2019</p>
                                    <p class="card-text órgano" style="margin-bottom: -0.2rem;">Comunicado de Prensa</p>
                                </div>
                                <div class="col-sm-4" style="text-align: end;">
                                    <div style="margin-top: 0.8rem;display: inline-block;">
                                        <a class="btn btn-pdf" href="#" role="button">Enlace a pdf</a></div>
                                    <div style="display: inline-block;vertical-align: super;"><div class="btn btn-danger" sytle="background-color:red">DEROGADO</div></div>
                                </div>
                            </div>
                        </li>

                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-sm-12"><p class="card-title"><b>
                                            <a href="#">BOCM 11 de Marzo de 2020</a></b>
                                    </p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="card-text fecha" style="margin-bottom: -0.2rem;">Aprobado el 28/11/2019</p>
                                    <p class="card-text órgano" style="margin-bottom: -0.2rem;">Comunicado de Prensa</p>
                                </div>
                                <div class="col-sm-4" style="text-align: end;">
                                    <div style="margin-top: 0.8rem;display: inline-block;">
                                        <a class="btn btn-pdf" href="#" role="button">Enlace a pdf</a></div>
                                    <div style="display: inline-block;vertical-align: super;"><div class="btn btn-danger" sytle="background-color:red">DEROGADO</div></div>
                                </div>
                            </div>
                        </li>

                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-sm-12"><p class="card-title"><b>
                                            <a href="#">Real Decreto por el que se establece el Estado de Alarma</a></b>
                                    </p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="card-text fecha" style="margin-bottom: -0.2rem;">Aprobado el 28/11/2019</p>
                                    <p class="card-text órgano" style="margin-bottom: -0.2rem;">Comunicado de Prensa</p>
                                </div>
                                <div class="col-sm-4" style="text-align: end;">
                                    <div style="margin-top: 0.8rem;display: inline-block;">
                                        <a class="btn btn-pdf" href="#" role="button">Enlace a pdf</a></div>
                                    <div style="display: inline-block;vertical-align:super;">
                                        <div class="btn btn-succes">ACTIVO</div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-sm-12"><p class="card-title"><b>
                                            <a href="#">Real Decreto Medias contra el COVID-19</a></b>
                                    </p>
                                </div>
                                <div class="col-sm-8">
                                    <p class="card-text fecha" style="margin-bottom: -0.2rem;">Aprobado el 28/11/2019</p>
                                    <p class="card-text órgano" style="margin-bottom: -0.2rem;">Comunicado de Prensa</p>
                                </div>
                                <div class="col-sm-4" style="text-align: end;">
                                    <div style="margin-top: 0.8rem;display: inline-block;">
                                        <a class="btn btn-pdf" href="#" role="button">Enlace a pdf</a></div>
                                    <div style="display: inline-block;vertical-align: super;">
                                        <div class="btn btn-succes">ACTIVO</div></div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div class="paginas">
                        <nav aria-label="Pagination">
                            <ul class="pagination">
                                <li><span aria-current="page" class="page-numbers current">1 </span></li>
                                <li><a class="page-numbers" href="#">2 </a></li>
                                <li><a class="next page-numbers" href="#">Siguiente &raquo; </a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <ul class="list-group list-group-flush" style="overflow: hidden;max-height: fit-content;">

                <h4>Universidad Politécnica de Madrid</h4>

                <li class="list-group-item">
                <div class="row">
                    <div class="col-sm-12"><p class="card-title"><b>
                                <a href="#">Primer Comunicado COVID-19</a></b>
                        </p>
                    </div>
                    <div class="col-sm-8">
                        <p class="card-text fecha" style="margin-bottom: -0.2rem;">Aprobado el 28/11/2019</p>
                        <p class="card-text órgano" style="margin-bottom: -0.2rem;">Comunicado de Prensa</p>
                    </div>
                    <div class="col-sm-4" style="text-align: end;">
                        <div style="margin-top: 0.8rem;display: inline-block;">
                            <a class="btn btn-pdf" href="#" role="button">Enlace a pdf</a></div>
                        <div style="display: inline-block;vertical-align: super;"><div class="btn btn-danger" sytle="background-color:red">DEROGADO</div></div>
                    </div>
                </div>
            </li>

                <li class="list-group-item">
                    <div class="row">
                        <div class="col-sm-12"><p class="card-title"><b>
                                    <a href="#">Segundo Comunicado COVID-19</a></b>
                            </p>
                        </div>
                        <div class="col-sm-8">
                            <p class="card-text fecha" style="margin-bottom: -0.2rem;">Aprobado el 28/11/2019</p>
                            <p class="card-text órgano" style="margin-bottom: -0.2rem;">Comunicado de Prensa</p>
                        </div>
                        <div class="col-sm-4" style="text-align: end;">
                            <div style="margin-top: 0.8rem;display: inline-block;">
                                <a class="btn btn-pdf" href="#" role="button">Enlace a pdf</a></div>
                            <div style="display: inline-block;vertical-align: super;"><div class="btn btn-danger" sytle="background-color:red">DEROGADO</div></div>
                        </div>
                    </div>
                </li>

                <li class="list-group-item">
                    <div class="row">
                        <div class="col-sm-12"><p class="card-title"><b>
                                    <a href="#">Medidas concretas para las Bibliotecas UPM</a></b>
                            </p>
                        </div>
                        <div class="col-sm-8">
                            <p class="card-text fecha" style="margin-bottom: -0.2rem;">Aprobado el 28/11/2019</p>
                            <p class="card-text órgano" style="margin-bottom: -0.2rem;">Comunicado de Prensa</p>
                        </div>
                        <div class="col-sm-4" style="text-align: end;">
                            <div style="margin-top: 0.8rem;display: inline-block;">
                                <a class="btn btn-pdf" href="#" role="button">Enlace a pdf</a></div>
                            <div style="display: inline-block;vertical-align: super;"><div class="btn btn-danger" sytle="background-color:red">DEROGADO</div></div>
                        </div>
                    </div>
                </li>

                <li class="list-group-item">
                    <div class="row">
                        <div class="col-sm-12"><p class="card-title"><b>
                                    <a href="#">Medidas concretas de la UPM</a></b>
                            </p>
                        </div>
                        <div class="col-sm-8">
                            <p class="card-text fecha" style="margin-bottom: -0.2rem;">Aprobado el 28/11/2019</p>
                            <p class="card-text órgano" style="margin-bottom: -0.2rem;">Comunicado de Prensa</p>
                        </div>
                        <div class="col-sm-4" style="text-align: end;">
                            <div style="margin-top: 0.8rem;display: inline-block;">
                                <a class="btn btn-pdf" href="#" role="button">Enlace a pdf</a></div>
                            <div style="display: inline-block;vertical-align: super;"><div class="btn btn-danger" sytle="background-color:red">DEROGADO</div></div>
                        </div>
                    </div>
                </li>

                <li class="list-group-item">
                    <div class="row">
                        <div class="col-sm-12"><p class="card-title"><b>
                                    <a href="#">Medidas concretas referentes a la movilidad (ERASMUS)</a></b>
                            </p>
                        </div>
                        <div class="col-sm-8">
                            <p class="card-text fecha" style="margin-bottom: -0.2rem;">Aprobado el 28/11/2019</p>
                            <p class="card-text órgano" style="margin-bottom: -0.2rem;">Comunicado de Prensa</p>
                        </div>
                        <div class="col-sm-4" style="text-align: end;">
                            <div style="margin-top: 0.8rem;display: inline-block;">
                                <a class="btn btn-pdf" href="#" role="button">Enlace a pdf</a></div>
                            <div style="display: inline-block;vertical-align:super;">
                                <div class="btn btn-succes">ACTIVO</div>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="list-group-item">
                    <div class="row">
                        <div class="col-sm-12"><p class="card-title"><b>
                                    <a href="#">Noticias sobre el correo de prácticas curriculares y extracurriculares</a></b>
                            </p>
                        </div>
                        <div class="col-sm-8">
                            <p class="card-text fecha" style="margin-bottom: -0.2rem;">Aprobado el 28/11/2019</p>
                            <p class="card-text órgano" style="margin-bottom: -0.2rem;">Vicerrectorado de Alumnos</p>
                        </div>
                        <div class="col-sm-4" style="text-align: end;">
                            <div style="margin-top: 0.8rem;display: inline-block;">
                                <a class="btn btn-pdf" href="#" role="button">Enlace a pdf</a></div>
                            <div style="display: inline-block;vertical-align: super;">
                                <div class="btn btn-succes">ACTIVO</div></div>
                        </div>
                    </div>
                </li>

                <li class="list-group-item">
                    <div class="row">
                        <div class="col-sm-12"><p class="card-title"><b>
                                    <a href="#">Medidas concretas sobre las actividades deportivas y las asociaciones de alumnos</a></b>
                            </p>
                        </div>
                        <div class="col-sm-8">
                            <p class="card-text fecha" style="margin-bottom: -0.2rem;">Aprobado el 28/11/2019</p>
                            <p class="card-text órgano" style="margin-bottom: -0.2rem;">Comunicado de Prensa</p>
                        </div>
                        <div class="col-sm-4" style="text-align: end;">
                            <div style="margin-top: 0.8rem;display: inline-block;">
                                <a class="btn btn-pdf" href="#" role="button">Enlace a pdf</a></div>
                            <div style="display: inline-block;vertical-align:super;">
                                <div class="btn btn-succes">ACTIVO</div>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="list-group-item">
                    <div class="row">
                        <div class="col-sm-12"><p class="card-title"><b>
                                    <a href="#">Comunicado Rectoral por el que se suspende temporalmente el Proceso Electoral</a></b>
                            </p>
                        </div>
                        <div class="col-sm-8">
                            <p class="card-text fecha" style="margin-bottom: -0.2rem;">Aprobado el 28/11/2019</p>
                            <p class="card-text órgano" style="margin-bottom: -0.2rem;">Comunicado de Prensa</p>
                        </div>
                        <div class="col-sm-4" style="text-align: end;">
                            <div style="margin-top: 0.8rem;display: inline-block;">
                                <a class="btn btn-pdf" href="#" role="button">Enlace a pdf</a></div>
                            <div style="display: inline-block;vertical-align:super;">
                                <div class="btn btn-succes">ACTIVO</div>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="list-group-item">
                    <div class="row">
                        <div class="col-sm-12"><p class="card-title"><b>
                                    <a href="#">Comunicado Rectoral sobre la situación del COVID-19</a></b>
                            </p>
                        </div>
                        <div class="col-sm-8">
                            <p class="card-text fecha" style="margin-bottom: -0.2rem;">Aprobado el 28/11/2019</p>
                            <p class="card-text órgano" style="margin-bottom: -0.2rem;">Comunicado de Prensa</p>
                        </div>
                        <div class="col-sm-4" style="text-align: end;">
                            <div style="margin-top: 0.8rem;display: inline-block;">
                                <a class="btn btn-pdf" href="#" role="button">Enlace a pdf</a></div>
                            <div style="display: inline-block;vertical-align:super;">
                                <div class="btn btn-succes">ACTIVO</div>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="list-group-item">
                    <div class="row">
                        <div class="col-sm-12"><p class="card-title"><b>
                                    <a href="#">Resolución Rectoral del 15 de Marzo</a></b>
                            </p>
                        </div>
                        <div class="col-sm-8">
                            <p class="card-text fecha" style="margin-bottom: -0.2rem;">Aprobado el 28/11/2019</p>
                            <p class="card-text órgano" style="margin-bottom: -0.2rem;">Comunicado de Prensa</p>
                        </div>
                        <div class="col-sm-4" style="text-align: end;">
                            <div style="margin-top: 0.8rem;display: inline-block;">
                                <a class="btn btn-pdf" href="#" role="button">Enlace a pdf</a></div>
                            <div style="display: inline-block;vertical-align:super;">
                                <div class="btn btn-succes">ACTIVO</div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="paginas">
                <nav aria-label="Pagination">
                    <ul class="pagination">
                        <li><span aria-current="page" class="page-numbers current">1 </span></li>
                        <li><a class="page-numbers" href="#">2 </a></li>
                        <li><a class="next page-numbers" href="#">Siguiente &raquo; </a></li>
                    </ul>
                </nav>
            </div>
        </div>

        <div class="row">
            <ul class="list-group list-group-flush" style="overflow: hidden;max-height: fit-content;">

                <h4>Delegación de Alumnos</h4>

                <li class="list-group-item">
                    <div class="row">
                        <div class="col-sm-12"><p class="card-title"><b>
                                    <a href="#">Comunicado Oficial de la Delegación de Alumnos de la UPM</a></b>
                            </p>
                        </div>
                        <div class="col-sm-8">
                            <p class="card-text fecha" style="margin-bottom: -0.2rem;">Aprobado el 28/11/2019</p>
                            <p class="card-text órgano" style="margin-bottom: -0.2rem;">Comunicado de Prensa</p>
                        </div>
                        <div class="col-sm-4" style="text-align: end;">
                            <div style="margin-top: 0.8rem;display: inline-block;">
                                <a class="btn btn-pdf" href="#" role="button">Enlace a pdf</a></div>
                            <div style="display: inline-block;vertical-align: super;"><div class="btn btn-danger" sytle="background-color:red">DEROGADO</div></div>
                        </div>
                    </div>
                </li>

                <li class="list-group-item">
                    <div class="row">
                        <div class="col-sm-12"><p class="card-title"><b>
                                    <a href="#">Comunicado oficial de la Delegación de Alumnos de la ETSI Sistemas Informáticos</a></b>
                            </p>
                        </div>
                        <div class="col-sm-8">
                            <p class="card-text fecha" style="margin-bottom: -0.2rem;">Aprobado el 28/11/2019</p>
                            <p class="card-text órgano" style="margin-bottom: -0.2rem;">Comunicado de Prensa</p>
                        </div>
                        <div class="col-sm-4" style="text-align: end;">
                            <div style="margin-top: 0.8rem;display: inline-block;">
                                <a class="btn btn-pdf" href="#" role="button">Enlace a pdf</a></div>
                            <div style="display: inline-block;vertical-align: super;"><div class="btn btn-danger" sytle="background-color:red">DEROGADO</div></div>
                        </div>
                    </div>
                </li>

                <li class="list-group-item">
                    <div class="row">
                        <div class="col-sm-12"><p class="card-title"><b>
                                    <a href="#">Información relevante sobre Estudiantes en Erasmus</a></b>
                            </p>
                        </div>
                        <div class="col-sm-8">
                            <p class="card-text fecha" style="margin-bottom: -0.2rem;">Aprobado el 28/11/2019</p>
                            <p class="card-text órgano" style="margin-bottom: -0.2rem;">Comunicado de Prensa</p>
                        </div>
                        <div class="col-sm-4" style="text-align: end;">
                            <div style="margin-top: 0.8rem;display: inline-block;">
                                <a class="btn btn-pdf" href="#" role="button">Enlace a pdf</a></div>
                            <div style="display: inline-block;vertical-align: super;"><div class="btn btn-danger" sytle="background-color:red">DEROGADO</div></div>
                        </div>
                    </div>
                </li>

                <li class="list-group-item">
                    <div class="row">
                        <div class="col-sm-12"><p class="card-title"><b>
                                    <a href="#">Recomendaciones Psicóloga de la ETSIAAB</a></b>
                            </p>
                        </div>
                        <div class="col-sm-8">
                            <p class="card-text fecha" style="margin-bottom: -0.2rem;">Aprobado el 28/11/2019</p>
                            <p class="card-text órgano" style="margin-bottom: -0.2rem;">Comunicado de Prensa</p>
                        </div>
                        <div class="col-sm-4" style="text-align: end;">
                            <div style="margin-top: 0.8rem;display: inline-block;">
                                <a class="btn btn-pdf" href="#" role="button">Enlace a pdf</a></div>
                            <div style="display: inline-block;vertical-align: super;"><div class="btn btn-danger" sytle="background-color:red">DEROGADO</div></div>
                        </div>
                    </div>
                </li>

            </ul>
            <div class="paginas">
                <nav aria-label="Pagination">
                    <ul class="pagination">
                        <li><span aria-current="page" class="page-numbers current">1 </span></li>
                        <li><a class="page-numbers" href="#">2 </a></li>
                        <li><a class="next page-numbers" href="#">Siguiente &raquo; </a></li>
                    </ul>
                </nav>
            </div>
        </div>

    </div>
</main>
<?php include 'components/common_footer.php'; ?>
<div id="scripts">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</div>
</body>
</html>