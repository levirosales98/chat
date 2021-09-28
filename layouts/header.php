<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Chat</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/js/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <style>
            body{
                background-image:url('images/home.jpg');
                background-repeat: repeat-y;
                width:100%;
            }
            .navbar-inverse{
                background-color: #F3E021;
                border-color: #ffff;
                font-weight: 600;
                font-size: 22px;
            }
            .navbar-inserse .navbar-brand{
                color:white;
            }
            a:hover{
                color: #50546d;
            }
            .navbar-inverse .navbar-nav>li>a{
                color:white
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavBar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Chat 4to. BACO</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavBar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Registro</a></li>
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Ingreso</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </body>
</html>