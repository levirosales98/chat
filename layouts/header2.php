<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Chat 4to. BACO</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width-device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <script scr="bootstrap/js/jquery.min.js"></script>
        <script scr="bootstrap/js/boostrap.min.js"></script>

        <style>
            body{
                background-image: url('images/home.jpg');
                background-repeat: repeat-y;
                width: 100%;
            }
            .navbar-inverse{
                background-color: #F3E021;
                border-color: #fff;
                font-size: 22px;
                font-weight: 600;
            }
            .navbar-inverse .navbar.brand{
                color: white;
            }
            a:hover{
                color: #50546d;
            }
            .navbar-inverse .navbar-nav>li>a{
                color: withe;
            }
        </style>

    </head>
    <body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Chat 4to. BACO</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Cerrar sesión</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </body>
</html>