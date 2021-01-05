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
							<p class="lang" key="alertSuperado"> Superado, enhorabuena! </p>
						</div>
						
					<?php

				}else{
					?>
						<div class="alert alert-danger" role="alert">
						<p class="lang" key="alertNoSuperado"> Juego no superado, a seguirlo intentando! </p>
						</div>

					<?php
				}

			}else{

				?>
					<div class="alert alert-info" role="alert">
					<p class="lang" key="alertYaSuperado"> Juego ya superado anteriormente, enhorabuena! </p>
					</div>

				<?php
			
			}

		}

	?>






		<br>

		<div class="container">
			<div class="row">
				<div class="col-sm-6" onclick="window.location.href='ARNAU/proyecto/index.html'" style="cursor: pointer;">
					<div class="card mb-3 bg-success"  >
							
									
							<img src="/RECOMENSSEM/media/Captura.PNG" class="card-img-top" alt="Enviar formulario"> 
							<div class="card-body">
								<strong class="lang" key="Juego1"> Juego 1</strong>   
								<br>    
							</div>
						
						
					</div>
				</div>			
				<div class="col-sm-6 mb-3" onclick="window.location.href='ALBERT/juego-proyecto/index.php'" style="cursor: pointer;">
					<div class="card bg-success"  >
							
							
								
					<img src="/RECOMENSSEM/media/Captura.PNG" class="card-img-top" alt="Enviar formulario"> 

							<div class="card-body">
								<strong class="lang" key="Juego2"> Juego 2</strong>   
								<br>    
							</div>
						
						
					</div>
				</div>	
			
	
				<div class="col-sm-6 mb-3" onclick="window.location.href='Dani/Inicio.html'" style="cursor: pointer;">
					<div class="card bg-success"  >
							
									
							<img src="/RECOMENSSEM/media/Captura.PNG" class="card-img-top" alt="Enviar formulario"> 
							<div class="card-body">
								<strong class="lang" key="Juego3"> Juego 3</strong>   
								<br>    
							</div>
						
						
					</div>
				</div>	
				<div class="col-sm-6 mb-3" onclick="window.location.href='CARLOS/index.php'" style="cursor: pointer;">
					<div class="card bg-success"  >

						
							<img src="/RECOMENSSEM/media/Captura.PNG" class="card-img-top" alt="Enviar formulario"> 
							<div class="card-body">
								<strong class="lang" key="Juego4"> Juego 4</strong>   
								<br>    
							</div>
						
						
					</div>
				</div>	

			</div>	

			<div id="puntos">
				<h3> <p class="lang" key="Puntos">Puntos: </p> <?php echo $_SESSION['points']?>  </h3>
			</div>

		</div>



			
		


	
	</body>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="\RECOMENSSEM\js\script.js" charset="utf-8"></script>
</html>
