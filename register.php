<!DOCTYPE html>
<html>

<?php include 'components/common_head.php'; ?>

<style>
    .btn{
        background-color: #17a2b8;
        margin-left: 0.5em;
        width: 105px;
    }
    #conexion{
        justify-content: center;
        padding-top: 0.5em;
    }

    #formcontainer{
        display: flex;
        justify-content: center;
        margin-top: 2em;

    }

    #botones{
        justify-content: center;
        margin-top:0.5em;
        margin-bottom: 0.5em;
    }

    #loginform{
        background: white;

    }

    .cuadro{
        display:flex;
        justify-content: center;
        height: 12.5em;
        width: 12.5em;
        background-repeat: no-repeat;

    }

    .container2{
        width: 50%;
        display:flex;
        justify-content: center;
    }


</style>

<body>
<?php include 'components/common_nav_menu.php'; ?>
<main>



    <div class="container">
        <div class="container-flex" id="formcontainer">
            <div class="cuadro row row-cols-1">
                <img src="img/Logo%20DA-ETSISI.jpg" />
            </div>
        </div>
        <hr>
        <div class="container-flex" id="formcontainer">
            <div class="container2">
                <forms id="loginform" name="loginform" action="https://covid19.daetsisi.es/login.php">


                    <div class="row">
                        <div class="form-group">
                            <label for="username">Número de Matrícula:</label>
                            <input type="username" class="form-control" id="username" placeholder="Enter Username">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group">
                            <label for="correo">Correo Electrónico:</label>
                            <input type="correo" class="form-control" id="correo" placeholder="Enter Webmail">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group">
                            <label for="password">Contraseña:</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter Password">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group">
                            <label for="password">Confirmar Contraseña:</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter Password">
                        </div>
                    </div>



                    <div class="row" id="botones">
                        <div class="col-mb-12">
                            <button type="submit-btn" class="btn btn-primary" value="Entrar">Registro</button>
                        </div>
                    </div>

                </forms>
            </div>



        </div>
    </div>

</main>





<?php include 'components/common_footer.php'; ?>
<?php include 'components/js_scripts.php'; ?>
</body>
</html>
