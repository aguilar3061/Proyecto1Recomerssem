

<?php
	include_once("../../php_partials/menu.php");
    require_once("../../php_librarys/bd.php");
	$listaOfertas = selectOferta();


	//http://localhost:8080/RECOMENSSEM/Paginas/OFERTAS/ofertas.php
	$puntosObtenidos = 200;
	$admin = true;
	
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
					<div id="<?php echo $oferta["idOferta"]?>" class="card h-100 bg-light"  onclick=clickOferta(<?php echo $oferta["idOferta"]?>,<?php echo $oferta["precioOferta"]?>)   style="cursor: pointer;" >
						<center>
							<img src="/RECOMENSSEM/media/IMGoferta.png" width="80%" > 

							<div class="card-body">
								<strong><?php echo $oferta["nombre"]?></strong>  
								<br>    
								<strong><?php $tienda = selectTiendaConID($oferta["Tienda_idTienda"]); echo $tienda["nombre"] ?></strong>   
								<br> 
							</div>
							
						</center> 
						
						<?php
							if($admin == true){
						?>
							<div class="card-footer badge-secondary ">
								<form action="\RECOMENSSEM\PAGINAS\OFERTAS\ofertas.php" method="POST" >
									<input value="<?php echo $oferta["idOferta"]?>" type="hidden" name="idOferta">
									<button class="btn btn-outline-danger" type="submit" name="Eliminar"> <i class="far fa-trash-alt"></i> </button>  
								</form>

								<form action="\RECOMENSSEM\PAGINAS\OFERTAS\ofertas.php" method="POST" >
									<input value="<?php echo $oferta["idOferta"]?>" type="hidden" name="idOferta" >
									<button class="btn btn-outline-primary" type="submit" name="Update"> <i class="far fa-edit"></i> </button>
								</form>  
							</div>
						<?php
							}
						?>
					</div>
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
			}else{
		?>	
			<a class="btn btn-success botonCanjear"  onclick=clickCanjearOferta(<?php echo $puntosObtenidos?>)> Canjear </a>
		<?php	
			}
		?>

   

		
	</body>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>



	<script>

		let ofertaSelecionadas = [];

		function clickOferta(idOferta, precio) {

			var intro = document.getElementById(idOferta);
			if(intro.classList.contains('bg-secondary')){

				//deselecionar
				intro.classList.remove('bg-secondary');
				intro.classList.add('bg-light');

				var ofer = {id: idOferta, precio: precio };
				ofertaSelecionadas.splice( ofertaSelecionadas.indexOf(ofer) ,1);

			}else{

				//selecionar
				intro.classList.remove('bg-light');
				intro.classList.add('bg-secondary');

				var ofer = {id: idOferta, precio: precio };
				ofertaSelecionadas.push(ofer);

			}

		}



		function clickCanjearOferta(puntosObtenidos){

			var puntosActualizados = puntosObtenidos;

			if(ofertaSelecionadas.length != 0 ){

				var sumaPrecioOfertas = 0;
				ofertaSelecionadas.forEach(ofertaa => sumaPrecioOfertas = sumaPrecioOfertas + ofertaa["precio"] );

				if( puntosObtenidos > sumaPrecioOfertas ){

					// CANJEAR OFERTA OK
					puntosActualizados = sumaPrecioOfertas - puntosObtenidos;


					alert("Oferta con numero 945727895285724 adquirida :) ");
				}else{

					alert("NO TE LLEGAN LOS PUNTOS");
				}

			}else{

				alert("NO SE HA SELECIONADO NINGUNA OFERTA");

			}


		}




	</script>
			

</html>



