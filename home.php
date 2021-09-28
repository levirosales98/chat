<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Inicio</title>
	</head>
	<body>

		<?php 
			session_start();
			if(isset($_SESSION['name'])) //si se recupera el nombre
			{
				include "layouts/header2.php"; 
				include "config.php"; 
				$sql="SELECT * FROM `chat`";
				$query = mysqli_query($conn,$sql);
				
				//cierre de la condición al final del html
		?>

			<style>
				h2{
					color:white;
				}
				label{
					color:white;
				}
				span{
					color:#673ab7;
					font-weight:bold;
				}
				.container{
					margin-top: 3%;
					width: 60%;
					background-color: #F3E021;
					padding-right:10%;
					padding-left:10%;
					font-size: 20px;
					font-weight: 600;
				}
				.btn-primary {
					background-color: #673AB7;
				}
				.display-chat{
					height:300px;
					background-color:#d69de0;
					margin-bottom:4%;
					overflow:auto;
					padding:15px;
				}
				.message{
					background-color: #c616e469;
					color: white;
					border-radius: 5px;
					padding: 5px;
					margin-bottom: 3%;
				}
			</style>

			<div class="container">
			<center><h2>Bienvenido <span style="color:#dd7ff3;"><?php echo $_SESSION['name']; ?> </span></h2>
			<br><br>
				<label>Ingresa a nuestro chat</label><br>
				<br><br>
				<a href="chatpage.php" class="btn btn-primary" style="font-size: 20px;">Ir al chat</a>
			</div>

		<?php
			} //cierre del if superior
			else
			{
				header('location:index.php'); //si no se recuperó el nombre del usuario vuelve al index
			}
		?>

	</body>
</html>