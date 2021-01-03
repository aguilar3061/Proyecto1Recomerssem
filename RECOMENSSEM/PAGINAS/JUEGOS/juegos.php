<?php

	include_once("../../php_partials/menu.php");
	require_once("../../php_librarys/bd.php");
	
	$_SESSION['points'] = selectPuntosUsuario($_SESSION['userID']);
	

?>


<html>
	<head>
	
		<!-- <link rel="stylesheet" href="style/stilos.css"> -->
		<!-- <script src="js/script.js"></script> -->
		<link rel="stylesheet" href="../../style/bootstrap.min.css">
		<link rel="stylesheet" href="../../style/juegos.css"> 

		<!-- ICONOS -->
		<link href="../../FONTAWESOME/fontawesome-free-5.15.1-web/css/all.css" rel="stylesheet"> <!--load all styles -->
      

	</head>
	<body>

	<?php

		if (isset($_POST['vengoJUEGO'])){

			$haJugado = consultaJuegoUsuario($_SESSION['userID'], $_POST['idJuego']);

			if(!$haJugado){
				$checkWin = $_POST['infoGanador'];
				if($checkWin == "GANADOR"){

					insertJuegoUsuario($_SESSION['userID'],$_POST['idJuego'],true);
					updatePuntosUsuario( $_SESSION['userID'], 100 + $_SESSION['points'] );

					?>
						<div class="alert alert-info" role="alert">
							Juego superado, enhorabuena!
						</div>
						
					<?php

				}else{
					?>
						<div class="alert alert-danger" role="alert">
							Juego no superado, a seguirlo intentando!
						</div>

					<?php
				}

			}else{

				?>
					<div class="alert alert-info" role="alert">
						Juego ya superado anteriormente, enhorabuena!
					</div>

				<?php
			
			}

		}

	?>






		<br>
		<div class="mr-1 row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2 row-cols-xl-2" style="margin: 10px; text-align: center;">


				<div class="col mb-2 " onclick="window.location.href='ARNAU/proyecto/index.html'" style="cursor: pointer;">
					<div class="card  bg-success"  >
							
							<img src="/RECOMENSSEM/media/IMGjuego.svg" alt="Enviar formulario" width="20%" height="40%" style=" display:block; margin:auto;">
					
							<div class="card-body">
								<strong> Juego 1</strong>   
								<br>    
							</div>
						
						
					</div>
				</div>			
				<div class="col mb-2 " onclick="window.location.href='ALBERT/juego-proyecto/index.php'" style="cursor: pointer;">
					<div class="card  bg-success"  >
							
							<img src="/RECOMENSSEM/media/IMGjuego.svg" alt="Enviar formulario" width="20%" height="40%" style=" display:block; margin:auto;">
					
							<div class="card-body">
								<strong> Juego 2</strong>   
								<br>    
							</div>
						
						
					</div>
				</div>	
				<div class="col mb-2 " onclick="window.location.href='Dani/Inicio.html'" style="cursor: pointer;">
					<div class="card  bg-success"  >
							
							<img src="/RECOMENSSEM/media/IMGjuego.svg" alt="Enviar formulario" width="20%" height="40%" style=" display:block; margin:auto;">
					
							<div class="card-body">
								<strong> Juego 3</strong>   
								<br>    
							</div>
						
						
					</div>
				</div>	
				<div class="col mb-2 " onclick="window.location.href='CARLOS/index.php'" style="cursor: pointer;">
					<div class="card  bg-success"  >
							
							<img src="/RECOMENSSEM/media/IMGjuego.svg" alt="Enviar formulario" width="20%" height="40%" style=" display:block; margin:auto;">
					
							<div class="card-body">
								<strong> Juego 4</strong>   
								<br>    
							</div>
						
						
					</div>
				</div>	
			<?php
				
			?>

		


		</div>


		<div id="puntos">
			<h3> Puntos: <?php echo $_SESSION['points']?>  </h3>
		</div>

	

		


	
	</body>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</html>
