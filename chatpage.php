<!DOCTYPE html>
<html>
    <head>
        <title>Chat</title>
    </head>
    <body>
        <?php
            session_start();
            if(isset($_SESSION['name']))
            {
                include "layouts/header2.php";
                include "config.php";
                $sql = "SELECT * FROM `chat`";
                $query = mysqli_query($conn, $sql);
            // llave de cierre en la parte inferior
        ?>

    <style>
		h2 {
			color: white;
		}

		label {
			color: white;
		}

		span {
			color: #673ab7;
			font-weight: bold;
		}

		.container {
			margin-top: 3%;
			width: 60%;
			background-color: #2C80BE;
			padding-right: 10%;
			padding-left: 10%;
			border: #120633 5px solid;
			border-radius: 5%;
		}

		.btn-primary {
			background-color: #673AB7;
		}

		.display-chat {
			height: 300px;
			background-color: #a5d1f5;
			margin-bottom: 4%;
			overflow: auto;
			padding: 15px;
		}

		.message {
			background-color: #56abf1;
			color: white;
			border-radius: 5px;
			padding: 5px;
			margin-bottom: 3%;
			border: 2px ridge #000;
		}
	</style>

    <meta http-equiv="refresh" content="20"> <!-- para refrescar la pagina-->

	<script>
		$(document).ready(function() {
			// Set trigger and container variables
			var trigger = $('.container .display-chat '),
				container = $('#content');

			// Fire on click
			trigger.on('click', function() {
				// Set $this for re-use. Set target from data attribute
				var $this = $(this),
					target = $this.data('target');

				// Load target page into container
				container.load(target + '.php');

				// Stop normal link behavior
				return false;
			});
		});
	</script>

    <div class="container">
		<center>
			<h2>Bienvenido <span style="color:#120633; font-weight: 600;"><?php echo $_SESSION['name']; ?> </span> a nuestro chat</h2>
			<label>Chat UMG &copy; OS1</label>
		</center></br>
		<div class="display-chat" id="display-chat">

			<?php
                if (mysqli_num_rows($query) > 0) //si alguien ya escribió
                {
                    while ($row = mysqli_fetch_assoc($query))
                    {
			?>

                <div class="message">
                    <p>
                        <span><?php echo $row['name'];?>: </span>
						<?php echo $row['message'];?>
                    </p>
                </div>

            <?php
				    } //cierre del bucle while
			    } //cierre del iterador for
                else
                {
            ?>
				<div class="message">
					<p>
						No hay ninguna conversación previa.
					</p>
				</div>
			<?php
			    } //cierre del else
			?>

		</div>

        <form class="form-horizontal" method="post" action="sendmessage.php"> <!--formulario para enviar mensajes-->
			<div class="form-group">
				<div class="col-sm-10">
					<textarea name="msg" class="form-control" style="border: ridge 2px #56abf1;color: #000;" placeholder="Ingresa tu mensaje"></textarea>
				</div>
				<div class="col-sm-2">
					<button type="submit" class="btn btn-success" style="font-size: 22px;">Enviar</button>
				</div>
			</div>
		</form>
	</div>



        <?php
            }
            else
            {
                header('location:index.php');
            }
        ?>
    </body>
</html>