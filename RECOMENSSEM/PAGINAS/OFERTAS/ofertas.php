

<?php
	include_once("../../php_partials/menu.php");
	require_once("../../php_librarys/bd.php");
	
	//http://localhost:8080/RECOMENSSEM/Paginas/OFERTAS/ofertas.php

	$listaOfertas = selectOferta();
	$_SESSION['points'] = selectPuntosUsuario($_SESSION['userID']);
	$puntosObtenidos = $_SESSION['points'];

	$listaOfertasYaCopradas = selectIdOfertaYaAdquiridas($_SESSION['userID']);


	$ofertaSelecionID = 0;
	$ofertaSelecionPrecio = 0;

	if( isset($_SESSION['admin']) ){
		$admin = true;
	}else{
		$admin = false;

		if( isset($_POST['vengoDeAKI']) ){

			if( $_POST['idOfertaSelecionada'].EXTR_IF_EXISTS ){
				$ofertaSelecionID = $_POST['idOfertaSelecionada'];
				$ofertaSelecionPrecio = $_POST['precioOferta'];
			}
		}
	}





?>



<html >
	<head>
	
		<!-- <link rel="stylesheet" href="style/stilos.css"> -->
		<!-- <script src="js/script.js"></script> -->
		<link rel="stylesheet" href="../../style/bootstrap.min.css">
		<link rel="stylesheet" href="../../style/ofertas.css">


       <!-- ICONOS -->
	   <link href="../../FONTAWESOME/fontawesome-free-5.15.1-web/css/all.css" rel="stylesheet"> <!--load all styles -->
	   


	</head>
	<body>

				  
		<br>
		<div class="mr-1 row row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5" style="margin: 10px;">
			
			<?php
				foreach ($listaOfertas as $oferta){
			?>

				<div class="col mb-4" >


					<form action="\RECOMENSSEM\PAGINAS\OFERTAS\Ofertas.php" method="POST" >




						<div id="<?php echo $oferta["idOferta"]?>" class="card h-100 bg-light" style="cursor: pointer;" >
							<center>
								<img src="/RECOMENSSEM/media/IMGoferta.png" width="80%" > 

								<div class="card-body">
									<strong><?php echo $oferta["nombre"]?></strong>  
									<br>    
									<strong><?php $tienda = selectTiendaConID($oferta["Tienda_idTienda"]); echo $tienda["nombre"] ?></strong>   
									<br> 
								</div>
								
							</center> 

							<div class="card-footer badge-secondary ">
								<label for="puntos"><p class="lang" key="Coste">Coste: </p> <?php echo $oferta['precioOferta'] ?></label>
								<?php
									if($admin == true){
								?>
									
								
									<form action="../../php_controllers/OfertaController.php" method="POST" >
										<input value="<?php echo $oferta["idOferta"]?>" type="hidden" name="idOferta">
										<button class="btn btn-outline-danger" type="submit" name="Eliminar"> <i class="far fa-trash-alt"></i> </button>  
									</form>

									<form action="crearYmodificarOferta.php" method="POST" >
										<input value="<?php echo $oferta["idOferta"]?>" type="hidden" name="idOferta" >
										<button class="btn btn-outline-primary" type="submit" name="Update"> <i class="far fa-edit"></i> </button>
									</form>  
									


								<?php
									}else{
								?>

									<button class="btn btn-outline-primary lang" key="Adquirir" type="submit" name="vengoDeAKI" style="float: right;" > Adquirir </i> </button>

								<?php
									}
								?>

							</div>
						</div>

						<input type="hidden" id="idOfertaSelecionada" name="idOfertaSelecionada" value=<?php echo $oferta["idOferta"]?> >
						<input type="hidden" id="precioOferta" name="precioOferta" value=<?php echo $oferta["precioOferta"]?> >

					</form>
				</div>

			<?php
				}
			?>





		</div>



		<?php
			if($admin == true){
		?>
			<a href="crearYmodificarOferta.php" class="btn btn-success boton"> + </a>
		<?php
			}
		?>

   

		
	</body>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="\RECOMENSSEM\js\script.js" charset="utf-8"></script>




	<script>


		if(<?php echo $ofertaSelecionID ?> !== 0){

	
			if(<?php echo $puntosObtenidos ?> > <?php echo $ofertaSelecionPrecio ?>){

				// CANJEAR OFERTA OK
				<?php
					$SePuedeComprar=true;
					foreach($listaOfertasYaCopradas as $ofertaaa){
						if($ofertaaa['Oferta_idOferta'] == $ofertaSelecionID){
							$SePuedeComprar=false;
						}
					}
				?>


				<?php
					if($SePuedeComprar){
						updatePuntosUsuario($_SESSION['userID'], $puntosObtenidos - $ofertaSelecionPrecio);
						insertUsuarioOferta( $_SESSION['userID'], $ofertaSelecionID ); 
				?>
						alert(" Oferta adquirida correctamente, se le enviara una copia al correo, id oferta: " + <?php echo $ofertaSelecionID ?> );
				<?php
					}else{
				?>
						alert(" Esta oferta ya ha sido adquirida anteriormente" );
				<?php
					}
				?>
				
			}else{
				alert(" Lamentablemente no le llegan los puntos para adquirir esta oferta ): ");
			}


		}
		




	</script>
		
</html>



