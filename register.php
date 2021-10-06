<?php
    include "layouts/header.php";
?>

<!DOCTYPE html>
<html lang="es">
  <head>
      <title>Registro</title>
  </head>
  <body>
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
          background-color: #2C80BE;
          padding-top: 2%;
          padding-bottom: 2%;
      }
    </style>
    <div class="container">

      <center><h2>Formulario de registro</h2></center></br>
      <form class="form-horizontal" method="post" action="add_user.php">
      
        <div class="form-group">
          <label class="control-label col-sm-2 col-sm-offset-2" for="name">Nombre:</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="name" placeholder="Ingresa tu nombre" name="name" required>
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2 col-sm-offset-2" for="email">Correo:</label>
          <div class="col-sm-5">
            <input type="email" class="form-control" id="email" placeholder="Ingresa un correo" name="email" required>
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2 col-sm-offset-2" for="pwd">Clave:</label>
          <div class="col-sm-5">
            <input type="password" class="form-control" id="pwd" placeholder="Ingresa una contraseña" name="password" required>
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2 col-sm-offset-2" for="number">Teléfono:</label>
          <div class="col-sm-5">
            <input type="text" class="form-control" id="number" placeholder="Ingresa un número celular" name="number" required>
          </div>
        </div>

        <div class="form-group">
          <label class="control-label col-sm-2 col-sm-offset-2" for="address">Dirección:</label>
          <div class="col-sm-5">
            <textarea class="form-control" id="address" placeholder="Ingresa tu dirección" name="address" required></textarea>
          </div>
        </div>
      
        <div class="form-group">        
          <div class="col-sm-offset-4 col-sm-8">
            <button type="submit" class="btn btn-warning">Regístrate aquí</button>
          </div>
        </div>
      
      </form>
    </div>
  </body>
</html>