<?php
    include "layouts/header.php";
    include "config.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Ingresar</title>
    </head>
    <body>
        <style>
            h2 {
                color: white;
            }

            label {
                color: white;
            }

            .container {
                margin-top: 5%;
                width: 50%;
                background-color: #F3E021;
                padding-top: 5%;
                padding-bottom: 5%;
                padding-right: 10%;
                padding-left: 10%;
            }

            .btn-primary {
                background-color: #673AB7;
            }
        </style>

        <?php
        
            if ($_POST)
            {
                $email = $_POST['email'];
                $password = $_POST['password'];

                $sql = "SELECT * FROM `register` where email = '" . $email . "' and password = '" . $password . "' ";
                $query =  mysqli_query($conn, $sql);
                if (mysqli_num_rows($query) > 0) //si encontró algun dato
                {
                    $row = mysqli_fetch_assoc($query);
                    session_start();
                    $_SESSION['name'] = $row['name'];
                    header('Location: home.php');
                }
                else
                {
                    echo "<script> alert('Correo o contraseña incorrectas. O usuario no registrado.'); </script>";
                }    
            }
        ?>

        <div class="container">
            <center>
                <h2>Login de Chat</h2>
            </center></br>
            <form class="form-horizontal" method="post" action=""> <!--se envía aquí mismo-->
                
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Email:</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" placeholder="Ingresa tu correo" name="email">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Password:</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="pwd" placeholder="Ingresa tu contraseña" name="password">
                    </div>
                </div>


                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Ingresar</button>
                    </div>
                </div>

        </form>
        </div>

    </body>
</html>