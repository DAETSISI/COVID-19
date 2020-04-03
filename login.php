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
    .row1 {
        width: 400px;
    }

    input{
        width: 3.75em 2em;
    }

</style>

<body>
<?php include 'components/common_nav_menu.php'; ?>
<main>
    <h1 class="text-center">Entrar</h1>
    <div class="container">
        <hr>
        <div class="container-flex" id="formcontainer">

            <forms id="loginform" name="loginform" action="https://covid19.daetsisi.es/login.php">

            <div class="row">
                <div class="form-group">
                    <label for="correo">Correo Electrónico:</label>
                    <input type="correo" class="form-control" id="correo" placeholder="Enter Webmail">
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <label for="username">Número de Matrícula:</label>
                    <input type="username" class="form-control" id="username" placeholder="Enter Username">
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <label for="password">Contraseña:</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter Password">
                </div>
            </div>


            <div class="row" id="botones">
                <div class="col-mb-6">
                    <button type="submit-btn" class="btn btn-primary" value="Entrar">Entrar</button>
                </div>
                <a class="col-mb-6">
                    <a href="https://covid19.daetsisi.es/register/"><button type="submit-btn" class="btn btn-primary">Registro</button></a>
            </div>
            </div>

            <div class="row" id="conexion">
                <div class="col-mb-12">
                    <a class="um-link alt" href="https://covid19.daetsisi.es/password-reset/">¿Has olvidado tu contraseña?</a>
                </div>
            </div>
        </forms>
        </div>
    </div>

</main>





<?php include 'components/common_footer.php'; ?>
<?php include 'components/js_scripts.php'; ?>
</body>
</html>
