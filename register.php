<?php
    include "layouts/header.php";
?>

<style>
    h2{
        color:white;
    }
    label{
        color:white;
    }
    .container{
        margin-top: 5%;
        width: 50%;
        background-color: #F3E021;
        padding-top: 2%;
        padding-bottom: 2%;
    }
</style>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Registro</title>
    </head>
    <body>
        <div class="container">
            <center><h2>Formulario de registro</h2></center><br>
            <form class="form-horizontal" method="post" action="#">
                <div class="form-group">
                    <label class="control-label col-sm-2 col-smoffset-2" for="name">Nombre:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="name" placeholder="Ingresa tu nombre" name="name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2 col-smoffset-2" for="email">Correo:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="email" placeholder="Ingresa tu correo" name="email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2 col-smoffset-2" for="pwd">Clave:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="pwd" placeholder="Ingresa tu clave" name="password" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2 col-smoffset-2" for="number">Teléfono:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="number" placeholder="Ingresa tu telefono" name="number" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2 col-smoffset-2" for="address">Dirección:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="address" placeholder="Ingresa tu direccion" name="address" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-8">
                        <buttom type="submit" class="btn btn-primary">Registrate aquí</buttom>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>