<!DOCTYPE html>
<html lang="es">

<?php include 'components/common_head.php'; ?>

<body>

<?php include 'components/common_nav_menu.php'; ?>

<style>

    .btn-link{
        color: black;
        text-decoration: none;
    }

    .btn-link:hover{
        color: #EFB810;
        text-decoration: none;

    }

    .btn-link:active{
        color: #EFB810;
        text-decoration: none;

    }

    .btn-link:visited{
        color: black;
        text-decoration: none;

    }

    .btn-link:focus{
        color: black;
        text-decoration: none;
    }



</style>
<main class="main">
    <h1 class="text-center">Preguntas frecuentes</h1>
    <hr>
    <div class="container">

        <div id="mensaje">
            <p>En esta sección, responderemos a las preguntas más frecuentes que nos habéis ido realizando estos días.</p>
        </div>

        <div class="accordion" id="accordionExample">

            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapseOne">
                            1. ¿Cuánto va a durar la suspensión?
                        </button>
                    </h2>
                </div>

                <div id="collapse1" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        En principio la suspensión durará hasta el día 29 de marzo, fecha en la que acaba actualmente el estado de alarma decretado por el Gobierno.
                        Podría alargarse en el tiempo si se amplía la duración de este estado de alarma o si las autoridades competentes deciden mantener cerradas las universidades.
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapseTwo">
                            2. ¿Se puede entrar a la Escuela?
                        </button>
                    </h2>
                </div>
                <div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        No. La escuela está cerrada desde el pasado martes 17 de marzo hasta nuevo aviso.
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapseThree">
                            3. ¿Qué va a pasar con las clases hasta que se reanuden?
                        </button>
                    </h2>
                </div>
                <div id="collapse3" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        Habrá docencia telemática. Cada asignatura se reorganizará dentro de lo posible para que se pueda continuar con el temario sin problemas.
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingFour">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapseFour">
                            4. ¿Qué va a pasar con los exámenes?
                        </button>
                    </h2>
                </div>
                <div id="collapse4" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                    <div class="card-body">
                        Durante este periodo no habrá exámenes presenciales. En algunas asignaturas se pospondrán para cuando acabe la suspensión y en otras se estudiarán otras opciones.
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingFive">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="false" aria-controls="collapseFive">
                            5. ¿Qué pasa con la Secretaría puedo seguir haciendo trámites?
                        </button>
                    </h2>
                </div>
                <div id="collapse5" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                    <div class="card-body">
                        Las secretarías están cerradas. En caso de necesitar realizar un trámite debes ponerte en contacto con la Escuela.
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingSix">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse6" aria-expanded="false" aria-controls="collapseSix">
                            6. ¿Qué pasa con mi beca de comedor?
                        </button>
                    </h2>
                </div>
                <div id="collapse6" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                    <div class="card-body">
                        No debes preocuparte por tu beca comedor, dada esta situación están suspendidas hasta nuevo aviso.
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingSeven">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse7" aria-expanded="false" aria-controls="collapseSeven">
                            7. ¿Publicaciones cierra?
                        </button>
                    </h2>
                </div>
                <div id="collapse7" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                    <div class="card-body">
                        Estará cerrado a la par que la Escuela.
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingEight">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse8" aria-expanded="false" aria-controls="collapseEight">
                            8. ¿Qué pasa con las entregas de moodle?
                        </button>
                    </h2>
                </div>
                <div id="collapse8" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
                    <div class="card-body">
                        Las entregas de moodle seguirán siendo parte de las actividades evaluables de la asignatura, no se han producido cambios con ellas.
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingEight">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse9" aria-expanded="false" aria-controls="collapseEight">
                            9. ¿Qué pasa con las tutorías?
                        </button>
                    </h2>
                </div>
                <div id="collapse9" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
                    <div class="card-body">
                        Las tutorías con profesores siguen estando disponibles pero exclusivamente de forma telemática.
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingNine">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse10" aria-expanded="false" aria-controls="collapseNine">
                            10. ¿Qué pasa con las actividades deportivas?
                        </button>
                    </h2>
                </div>
                <div id="collapse10" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
                    <div class="card-body">
                        Cualquier tipo de actividad deportiva tanto en el campus, como a nivel nacional han sido suspendidas.
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingTen">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse11" aria-expanded="false" aria-controls="collapseTen">
                            11. Estoy realizando prácticas externas. ¿Qué puedo hacer?
                        </button>
                    </h2>
                </div>
                <div id="collapse11" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExample">
                    <div class="card-body">
                        La única forma de poder seguir realizando prácticas externas es de manera telemática. La empresa deberá garantizar la integridad del estudiante y la correcta realización de las prácticas.
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingTen">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse12" aria-expanded="false" aria-controls="collapseTen">
                            12. Estoy realizando una beca colaboración. ¿Qué puedo hacer?
                        </button>
                    </h2>
                </div>
                <div id="collapse12" class="collapse" aria-labelledby="headingTen" data-parent="#accordionExample">
                    <div class="card-body">
                        Al igual que las prácticas externas, solo pueden realizarse telemáticamente.
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingEleventh">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse13" aria-expanded="false" aria-controls="collapseEleventh">
                            13. ¿Qué pasa con el calendario académico?¿Vamos a dar más días de clase?
                        </button>
                    </h2>
                </div>
                <div id="collapse13" class="collapse" aria-labelledby="headingEleventh" data-parent="#accordionExample">
                    <div class="card-body">
                        Por el momento no hay ninguna ampliación. En caso de no funcionar la docencia telemática, se podría a llegar a prorrogar el curso a criterio de la Escuela.
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingTwelve">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse14" aria-expanded="false" aria-controls="collapseTwelve">
                            14. ¿Estarán abiertas las Asociaciones?
                        </button>
                    </h2>
                </div>
                <div id="collapse14" class="collapse" aria-labelledby="headingTwelve" data-parent="#accordionExample">
                    <div class="card-body">
                        Los locales de asociaciones también permanecerán cerrados.
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingThirtheen">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse15" aria-expanded="false" aria-controls="collapseThirtheen">
                            15. ¿Qué hago en caso de tener los síntomas?
                        </button>
                    </h2>
                </div>
                <div id="collapse15" class="collapse" aria-labelledby="headingThirtheen" data-parent="#accordionExample">
                    <div class="card-body">
                        Lo primero es no alarmarse, la Comunidad de Madrid ha dejado un número de teléfono para atención de cualquier ciudadano, el teléfono es: 900 102 112
                        <br>
                        Además, han creado una aplicación con el objetivo de diagnosticar y monotorizar todos los casos.
                        <br>
                        <a href=" https://webapp.coronamadrid.com/" target="_blank">Enlace a la Aplicación</a>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header" id="headingFourtheen">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse17" aria-expanded="false" aria-controls="collapseFourtheen">
                            16. Si tu pregunta no es ninguna de las anteriores
                        </button>
                    </h2>
                </div>
                <div id="collapse17" class="collapse" aria-labelledby="headingFourtheen" data-parent="#accordionExample">
                    <div class="card-body">
                        Si tu pregunta no está resuelta, contacta directamente con nosotros enviándonos un correo a dalum.etsisi@gmail.com y te responderemos con la mayor brevedad posible.
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>
<?php include 'components/common_footer.php'; ?>
<?php include 'components/js_scripts.php'; ?>
</body>
</html>