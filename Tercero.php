<!DOCTYPE html>
<html>

<?php include 'components/common_head.php'; ?>

<style>
    .row{
        margin-top: 1em;
    }

    .separadores{
        margin-top: 1em;
        border: 1px solid black;
        color: black;
    }
    .separadores a:active, a:link, a:visited{
        color:black;
    }
    .separadores a:hover{
        color:#EFB810 ;
    }

    .btn-primary{
        color: black;
        background-color: transparent !important;
        border: 1px solid white;

    }
    .btn {
        border: 0px;
    }
    .btn:focus{
        outline: 0;
        box-shadow: 0 0 0 0rem rgba(0,0,0,0);
        color:black;
    }

    .card-header{
        text-align:center;
    }



</style>
<body>

<?php include 'components/common_nav_menu.php'; ?>
<h1 class="text-center">Tercero</h1>
<hr>
<main class="main">
    <div class="container">

        <p>
            En esta sección tendréis toda la información relativa a todas las asignaturas del Tercer Curso, por otra
            parte hemos habilitado la posibilidad de votar para que nos déis vuestra opinión de cómo se está llevando
            la docencia. Para poder votar, deberás ser un estudiante de la ETSI Sistemas Informáticos.
        </p>

        <div class ="separadores">
            <a class="card card-body text-center" data-toggle="collapse" href="#collapse" role="button" aria-expanded="false" aria-controls="collapseExample">
                    Grado de Ingeniería del Software
                </a>
            <div class="collapse" id="collapse">
                <div class="card card-body ">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3>Arquitectura y Diseño del Software</h3>
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <p class="card-text">
                                                <b>Docencia Telemática:</b> Lecciones grabadas, foros de discusión abiertos en Moodle. Tutorías online.
                                            <hr>
                                            <b>Actividades Prácticas:</b>
                                            <hr>
                                            <b>Criterios de evaluación:</b>
                                            <ul>
                                                <lh>Convocatoria Ordinaria</lh>
                                                <hr>
                                                <li>Trabajo de grupo: 10%</li>
                                                <li>Práctica 1: 35%</li>
                                                <li>Práctica 2: 25%</li>
                                                <li>Examen: 30%</li>
                                            </ul>
                                            <hr>
                                            <b>Recursos Didácticos:</b> Moodle de la Asignatura. Contenido de Consulta Online.
                                            <hr>
                                            <a class="btn btn-pdf"href="./Documentacion/GuiasAprendizaje/Tercero/ADS-cronograma-no-presencial.pdf" target="_blank">Guía Modificada</a>
                                            <hr>
                                            </p>
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
                    </div>  <!--Arquitectura y Diseño Software -->

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3>Bases de Datos Avanzadas</h3>
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <p class="card-text">
                                                <b>Docencia Telemática:</b> Vídeos grabados de contenidos teóricos. Tutorías virtuales.
                                            <hr>
                                            <b>Actividades Prácticas:</b> Vídeos grabados de contenidos prácticos.
                                            <hr>
                                            <b>Criterios de evaluación:</b>
                                            <ul>
                                                <lh>Convocatoria Ordinaria</lh>
                                                <hr>
                                                <li>Tests Online: 25%</li>
                                                <li>Examen: 40%</li>
                                                <li>Prácticas (1,2,3): 40%</li>
                                                <li>Actividad del Estudiante: 5%</li>
                                            </ul>
                                            <hr>
                                            <b>Recursos Didácticos:</b> Moodle (Recursos web y foro)
                                            <hr>
                                            <a class="btn btn-pdf"href="./Documentacion/GuiasAprendizaje/Tercero/BDA-cronograma-no-presencial.pdf" target="_blank">Guía Modificada</a>
                                            <hr>
                                            </p>
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
                    </div>  <!--Bases de Datos Avanzadas -->

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3>Construcción y Diseño de Interfaces Gráficas de Usuario</h3>
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <p class="card-text">
                                                <b>Docencia Telemática:</b> Vídeos de clases. Tutorías personalizadas por Skype.
                                            <hr>
                                            <b>Actividades Prácticas:</b> Presentaciones online de las prácticas para cada grupo (Videostreaming).
                                            <hr>
                                            <b>Criterios de evaluación:</b>
                                            <ul>
                                                <lh>Convocatoria Ordinaria</lh>
                                                <hr>
                                                <li>Entrega Parcial de la Práctica BloqueI: 15%</li>
                                                <li>Entrega Práctica BloqueI: 35%</li>
                                                <li>Presentación Práctica BloqueI: 15%</li>
                                                <li>Entrega Práctica Bloque II: 35%</li>
                                            </ul>
                                            <hr>
                                            <b>Recursos Didácticos:</b> Moodle Asignatura, tutorías online.
                                            <hr>
                                            <a class="btn btn-pdf"href="./Documentacion/GuiasAprendizaje/Tercero/CDI-cronograma-no-presencial.pdf" target="_blank">Guía Modificada</a>
                                            <hr>
                                            </p>
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
                    </div>  <!--Construcción y Diseño de Interfaces Gráficas de Usuario -->

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3>Evolución y Mantenimiento del Software</h3>
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <p class="card-text">
                                                <b>Docencia Telemática:</b> Clases magistrales grabadas en vídeos. Tutorías grupales por Teams.
                                            <hr>
                                            <b>Actividades Prácticas:</b> Laboratorios guiados paso a paso.
                                            <hr>
                                            <b>Criterios de evaluación:</b>
                                            <ul>
                                                <lh>Convocatoria Ordinaria</lh>
                                                <hr>
                                                <li>Trabajo 1: 10%</li>
                                                <li>Trabajo 2 Test Git/Github : 15%</li>
                                                <li>Trabajo 3 Patrones de mantenibilidad: 15%</li>
                                                <li>Reingeniería de un Sistema Legado: 30%</li>
                                                <li>Test Global de la Asignatura: 30%</li>
                                            </ul>
                                            <hr>
                                            <b>Recursos Didácticos:</b> Moodle (Recursos Web y Chat).
                                            <hr>
                                            <a class="btn btn-pdf"href="./Documentacion/GuiasAprendizaje/Tercero/EMS-cronograma-no-presencial.pdf" target="_blank">Guía Modificada</a>
                                            <hr>
                                            </p>
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
                    </div>  <!--Evolución y Mantenimiento del Software -->

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3>Traductores de Lenguajes de Programación</h3>
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <p class="card-text">
                                                <b>Docencia Telemática:</b>
                                            <hr>
                                            <b>Actividades Prácticas:</b>
                                            <hr>
                                            <b>Criterios de evaluación:</b>
                                            <ul>
                                                <lh>Convocatoria Ordinaria</lh>
                                                <hr>
                                                <li>Examen Temas 1-4: 30%</li>
                                                <li>Examen Temas 5-8: 60%</li>
                                                <li>Proyecto I: 10%</li>
                                            </ul>
                                            <hr>
                                            <b>Recursos Didácticos:</b> Moodle Asignatura. Contenido de Consulta Online.
                                            <hr>
                                            <a class="btn btn-pdf"href="./Documentacion/GuiasAprendizaje/Tercero/TLP-cronograma-no-presencial.pdf" target="_blank">Guía Modificada</a>
                                            <hr>
                                            </p>
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
                    </div>  <!--Traductores de Lenguajes de Programación -->

                </div>
                </div>

        </div>

        <div class ="separadores">
            <a class="card card-body text-center" data-toggle="collapse" href="#collapse2" role="button" aria-expanded="false" aria-controls="collapseExample">
                Grado de Ingeniería de Computadores
            </a>
            <div class="collapse" id="collapse2">
                <div class="card card-body">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3>Arquitecturas Avanzadas</h3>
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <p class="card-text">
                                                <b>Docencia Telemática:</b>
                                            <hr>
                                            <b>Actividades Prácticas:</b> Posibilidad de consulta online a los profesores de la asignatura.
                                            <hr>
                                            <b>Criterios de evaluación:</b>
                                            <ul>
                                                <lh>Convocatoria Ordinaria</lh>
                                                <hr>
                                                <li>Teoría: 50% (Queda por determinar)</li>
                                                <li>Práctica: 50%</li>
                                            </ul>
                                            <hr>
                                            <b>Recursos Didácticos:</b> Documentación con transparencias anotadas de cada tema, ejercicios
                                            propuestos y soluciones.<br> Documentación sobre las prácticas.<br>
                                            Página web de la Asignatura. <br>Recursos Web complementarios.<br> Laboratorios con acceso Remoto.
                                            <hr>
                                            <a class="btn btn-pdf"href="./Documentacion/GuiasAprendizaje/Tercero/AA-cronograma-no-presencial.pdf" target="_blank">Guía Modificada</a>
                                            <hr>
                                            </p>
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
                    </div>   <!--Arquitecturas Avanzadas -->

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3>Programación de HW Reconfigurable</h3>
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <p class="card-text">
                                                <b>Docencia Telemática:</b>
                                            <hr>
                                            <b>Actividades Prácticas:</b> Se retrasa la parte física de las prácticas.
                                            <hr>
                                            <b>Criterios de evaluación:</b>
                                            <ul>
                                                <lh>Convocatoria Ordinaria</lh>
                                                <hr>
                                                <li>Parciales en el Aula: 20%</li>
                                                <li>Prácticas de Laboratorio: 20%</li>
                                                <li>Proyecto Final: 60%</li>
                                            </ul>
                                            <hr>
                                            <b>Recursos Didácticos:</b> Moodle asignatura (Recursos Web). Bibliografía complementaria. Máquina virual con el sw necesario para el desarrollo de las prácticas.
                                            <hr>
                                            <a class="btn btn-pdf"href="./Documentacion/GuiasAprendizaje/Tercero/PHR-cronograma-no-presencial.pdf" target="_blank">Guía Modificada</a>
                                            <hr>
                                            </p>
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
                    </div>  <!--Programación de HW Reconfigurable -->

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3>Seguridad en Sistemas y Redes</h3>
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <p class="card-text">
                                                <b>Docencia Telemática:</b> Clases telemáticas. Vídeos grabados por los profesores. Tutorías Online.
                                            <hr>
                                            <b>Actividades Prácticas:</b> Tutorización del proyecto realizado a distancia (Pedir tutorías online).
                                            <hr>
                                            <b>Criterios de evaluación:</b>
                                            <ul>
                                                <lh>Convocatoria Ordinaria</lh>
                                                <hr>
                                                <li>Cuestionarios y Tareas Moodle: 18%</li>
                                                <li>Práctica de Laboratorio 1: 21.5%</li>
                                                <li>Práctica de Laboratorio 2: 21.5%</li>
                                                <li>Proyecto Realizado a distancia: 35%</li>
                                            </ul>
                                            <hr>
                                            <b>Recursos Didácticos:</b> Moodle asignatura (Recursos Web).
                                            <hr>
                                            <a class="btn btn-pdf"href="./Documentacion/GuiasAprendizaje/Tercero/SSR-cronograma-no-presencial.pdf" target="_blank">Guía Modificada</a>
                                            <hr>
                                            </p>
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
                    </div>   <!--Seguridad en Sistemas y Redes -->

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3>Traductores de Lenguajes de Programación</h3>
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <p class="card-text">
                                                <b>Docencia Telemática:</b>
                                            <hr>
                                            <b>Actividades Prácticas:</b>
                                            <hr>
                                            <b>Criterios de evaluación:</b>
                                            <ul>
                                                <lh>Convocatoria Ordinaria</lh>
                                                <hr>
                                                <li>Examen Temas 1-4: 30%</li>
                                                <li>Examen Temas 5-8: 60%</li>
                                                <li>Proyecto I: 10%</li>
                                            </ul>
                                            <hr>
                                            <b>Recursos Didácticos:</b> Moodle Asignatura. Contenido de Consulta Online.
                                            <hr>
                                            <a class="btn btn-pdf"href="./Documentacion/GuiasAprendizaje/Tercero/TLP-cronograma-no-presencial.pdf" target="_blank">Guía Modificada</a>
                                            <hr>
                                            </p>
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
                    </div>  <!--Traductores de Lenguajes de Programación -->

                </div>
            </div>
        </div>

        <div class ="separadores">
            <a class="card card-body text-center" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                Grado de Sistemas de Información
            </a>
            <div class="collapse" id="collapseExample">
                <div class="card card-body">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3>Mejores Prácticas para Gestión de Servicios</h3>
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <p class="card-text">
                                                <b>Docencia Telemática:</b> Clases telemáticas. (Se tiene en cuenta la asistencia Online)
                                            <hr>
                                            <b>Actividades Prácticas:</b> Se posponen algunas prácticas para la vuelta, en caso de ser necesario se eliminan las presentaciones.
                                            <hr>
                                            <b>Criterios de evaluación:</b>
                                            <ul>
                                                <lh>Convocatoria Ordinaria (Por determinar)</lh>
                                                <hr>
                                                <li>Entrega 1: 5%</li>
                                                <li>Entrega 2: 10%</li>
                                                <li>Entrega 3: 5%</li>
                                                <li>Prueba 1: 20%</li>
                                                <li>Prueba 2: 30%</li>
                                                <li>Prueba 3: 30%</li>

                                            </ul>
                                            <hr>
                                            <b>Recursos Didácticos:</b> Moodle (Recursos web), docencia vía Teams.
                                            <hr>
                                            <a class="btn btn-pdf"href="./Documentacion/GuiasAprendizaje/Tercero/Mejores-Practicas-para-gestion-de-Servicios-cornograma-no-presencial.pdf" target="_blank">Guía Modificada</a>
                                            <hr>
                                            </p>
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
                    </div>  <!--Mejores Prácticas para Gestión de Servicios -->

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3>Bases de Datos Avanzadas</h3>
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <p class="card-text">
                                                <b>Docencia Telemática:</b> Vídeos grabados de contenidos teóricos. Tutorías virtuales.
                                            <hr>
                                            <b>Actividades Prácticas:</b> Vídeos grabados de contenidos prácticos.
                                            <hr>
                                            <b>Criterios de evaluación:</b>
                                            <ul>
                                                <lh>Convocatoria Ordinaria</lh>
                                                <hr>
                                                <li>Tests Online: 25%</li>
                                                <li>Examen: 40%</li>
                                                <li>Prácticas (1,2,3): 40%</li>
                                                <li>Actividad del Estudiante: 5%</li>
                                            </ul>
                                            <hr>
                                            <b>Recursos Didácticos:</b> Moodle (Recursos web y foro)
                                            <hr>
                                            <a class="btn btn-pdf"href="./Documentacion/GuiasAprendizaje/Tercero/BDA-cronograma-no-presencial.pdf" target="_blank">Guía Modificada</a>
                                            <hr>
                                            </p>
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
                    </div>  <!--Bases de Datos Avanzadas -->

                    <div class="row">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3>Minería de Datos</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <p class="card-text">
                                                Docencia Telemática:
                                            <hr>
                                            Material de Estudio:
                                            </p>
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

                    </div>  <!--Minería de Datos FALTA-->

                    <div class="row">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3>Planificación y Organización del Capital Humano</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <p class="card-text">
                                                Docencia Telemática:
                                            <hr>
                                            Material de Estudio:
                                            </p>
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

                    </div>  <!--Planificación y Organización del Capital Humano FALTA-->

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3>Sistemas de Información Geográfica</h3>
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <p class="card-text">
                                                <b>Docencia Telemática:</b> Vídeos sobre la Teoría.
                                            <hr>
                                            <b>Actividades Prácticas:</b> Tutoriales sobre el enfoque para el desarrollo de la práctica. Foro y chat de Moodle.
                                            <hr>
                                            <b>Criterios de evaluación:</b>
                                            <ul>
                                                <lh>Convocatoria Ordinaria</lh>
                                                <hr>
                                                <li>Práctica: 60%</li>
                                                <li>Ejercicios, actividades grupales: 40%</li>

                                            </ul>
                                            <hr>
                                            <b>Recursos Didácticos:</b> Material audiovisual, Moodle de la Asignatura.
                                            <hr>
                                            <a class="btn btn-pdf"href="./Documentacion/GuiasAprendizaje/Tercero/SIG-cronograma-no-presencial.pdf.pdf" target="_blank">Guía Modificada</a>
                                            <hr>
                                            </p>
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
                    </div>  <!--Sistemas de Información Geográfica -->

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3>Traductores de Lenguajes de Programación</h3>
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <p class="card-text">
                                                <b>Docencia Telemática:</b>
                                            <hr>
                                            <b>Actividades Prácticas:</b>
                                            <hr>
                                            <b>Criterios de evaluación:</b>
                                            <ul>
                                                <lh>Convocatoria Ordinaria</lh>
                                                <hr>
                                                <li>Examen Temas 1-4: 30%</li>
                                                <li>Examen Temas 5-8: 60%</li>
                                                <li>Proyecto I: 10%</li>
                                            </ul>
                                            <hr>
                                            <b>Recursos Didácticos:</b> Moodle Asignatura. Contenido de Consulta Online.
                                            <hr>
                                            <a class="btn btn-pdf"href="./Documentacion/GuiasAprendizaje/Tercero/TLP-cronograma-no-presencial.pdf" target="_blank">Guía Modificada</a>
                                            <hr>
                                            </p>
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
                    </div>  <!--Traductores de Lenguajes de Programación -->

                </div>
            </div>
        </div>

        <div class ="separadores">
            <a class="card card-body text-center" data-toggle="collapse" href="#collapse3" role="button" aria-expanded="false" aria-controls="collapseExample">
                Grado de Tecnologías para la Sociedad de la Información
            </a>
            <div class="collapse" id="collapse3">
                <div class="card card-body">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3>Traductores de Lenguajes de Programación</h3>
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <p class="card-text">
                                                <b>Docencia Telemática:</b>
                                            <hr>
                                            <b>Actividades Prácticas:</b>
                                            <hr>
                                            <b>Criterios de evaluación:</b>
                                            <ul>
                                                <lh>Convocatoria Ordinaria</lh>
                                                <hr>
                                                <li>Examen Temas 1-4: 30%</li>
                                                <li>Examen Temas 5-8: 60%</li>
                                                <li>Proyecto I: 10%</li>
                                            </ul>
                                            <hr>
                                            <b>Recursos Didácticos:</b> Moodle Asignatura. Contenido de Consulta Online.
                                            <hr>
                                            <a class="btn btn-pdf"href="./Documentacion/GuiasAprendizaje/Tercero/TLP-cronograma-no-presencial.pdf" target="_blank">Guía Modificada</a>
                                            <hr>
                                            </p>
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
                    </div> <!--Traductores de Lenguajes de Programación -->

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3>Redes Avanzadas</h3>
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <p class="card-text">
                                                <b>Docencia Telemática:</b> Atención, consultas y dudas vía email.
                                            <hr>
                                            <b>Actividades Prácticas:</b> Ejercicios resueltos y prácticas resueltas en Moodle.
                                            <hr>
                                            <b>Criterios de evaluación:</b>
                                            <ul>
                                                <lh>Convocatoria Ordinaria</lh>
                                                <hr>
                                                <li>Cuestionarios Moodle: 10%</li>
                                                <li>Prácticas: 30%</li>
                                                <li>Examen 1: 30%</li>
                                                <li>Examen 2: 30%</li>
                                            </ul>
                                            <hr>
                                            <b>Recursos Didácticos:</b> Moodle (Recursos Web). Apuntes del curso elaborados por los profesores.
                                            <hr>
                                            <a class="btn btn-pdf"href="./Documentacion/GuiasAprendizaje/Tercero/RA-cronograma-no-presencial.pdf" target="_blank">Guía Modificada</a>
                                            <hr>
                                            </p>
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
                    </div>  <!--Redes Avanzadas -->

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3>Computación Ubicua, móvil y en la nube</h3>
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <p class="card-text">
                                                <b>Docencia Telemática:</b> Lecciones magistrales
                                            <hr>
                                            <b>Actividades Prácticas:</b> Prácticas de tipo laboratorio, vía teleconferencia o vídeos.
                                            <hr>
                                            <b>Criterios de evaluación:</b>
                                            <ul>
                                                <lh>Convocatoria Ordinaria</lh>
                                                <hr>
                                                <li>Exposición Oral de la Práctica: 20%</li>
                                                <li>Evaluación Práctica: 20%</li>
                                                <li>Evaluación Ejercicios Cloud: 60%</li>
                                            </ul>
                                            <hr>
                                            <b>Recursos Didácticos:</b> Moodle (Recursos Web). Apuntes del curso elaborados por los profesores.
                                            <hr>
                                            <a class="btn btn-pdf"href="./Documentacion/GuiasAprendizaje/Tercero/Computación-ubicua-cronograma-no-presencial.pdf" target="_blank">Guía Modificada</a>
                                            <hr>
                                            </p>
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
                    </div>   <!--Computación Ubicua, móvil y en la nube -->

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3>Seguridad en Sistemas y Redes</h3>
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <p class="card-text">
                                                <b>Docencia Telemática:</b> Clases telemáticas. Vídeos grabados por los profesores. Tutorías Online.
                                            <hr>
                                            <b>Actividades Prácticas:</b> Tutorización del proyecto realizado a distancia (Pedir tutorías online).
                                            <hr>
                                            <b>Criterios de evaluación:</b>
                                            <ul>
                                                <lh>Convocatoria Ordinaria</lh>
                                                <hr>
                                                <li>Cuestionarios y Tareas Moodle: 18%</li>
                                                <li>Práctica de Laboratorio 1: 21.5%</li>
                                                <li>Práctica de Laboratorio 2: 21.5%</li>
                                                <li>Proyecto Realizado a distancia: 35%</li>
                                            </ul>
                                            <hr>
                                            <b>Recursos Didácticos:</b> Moodle asignatura (Recursos Web).
                                            <hr>
                                            <a class="btn btn-pdf"href="./Documentacion/GuiasAprendizaje/Tercero/SSR-cronograma-no-presencial.pdf" target="_blank">Guía Modificada</a>
                                            <hr>
                                            </p>
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
                    </div>   <!--Seguridad en Sistemas y Redes -->
                    
                </div>
            </div>
        </div>

    </div>
</main>
<?php include 'components/common_footer.php'; ?>
<?php include 'components/js_scripts.php'; ?>
</body>
</html>