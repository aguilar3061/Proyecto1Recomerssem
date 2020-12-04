

<html>
	<head>
	
		<!-- <link rel="stylesheet" href="style/stilos.css"> -->
		<!-- <script src="js/script.js"></script> -->

		<link rel="stylesheet" href="/BOOTSTRAP/style/bootstrap.min.css">


       <!-- ICONOS -->
	   <link href="../fontawesome-free-5.15.1-web/fontawesome-free-5.15.1-web/css/all.css" rel="stylesheet"> <!--load all styles -->


	</head>
	<body>

				  
		
	<?php include "../php_partrials/menu.php"; ?>  
      
	  <br>
	  <div class="mr-1 row row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5" style="margin: 2px;">
		  
		  <?php
			  foreach ($pokemons as $poke){
		  ?>

			  <div class="col mb-4">
				  <div class="card h-100">
					  <img src="<?php echo $poke["imagen"]?>" >
					  <div class="card-body">
				  
						  <strong><?php echo $poke["numero"]?> - <?php echo $poke["nombre"]?></strong>   
						  <br>    
						  <?php 
							  $listaTipos = selectTipusDePk($poke["id"]);
							  foreach ($listaTipos as $tipo){
						  ?>
							  <span class="badge badge-primary"><?php echo $tipo["nombre"]?> </span>
						  <?php
							  }
						  ?>

					  <br> 
					  </div>
					  <div class="card-footer badge-secondary ">

						  <form  action="../php_controllers/pokemonController.php" method="POST">

							  <input value="<?php echo $poke["imagen"]?>" type="hidden" name="rutaIMG">
							  <input value="<?php echo $poke["id"]?>" type="hidden" name="IDpokemon">
							  <button class="btn btn-outline-danger" type="submit" name="Eliminar"> <i class="far fa-trash-alt"></i> </button>  
						  </form>

						  <form action="../pokemon.php" method="POST" >


							  <input value="<?php echo $poke["id"]?>" type="hidden" name="IDpokemon" >
							  <button class="btn btn-outline-primary" type="submit" name="Update"> <i class="far fa-edit"></i> </button>
								
						  </form>  
						  
					  </div>

				  </div>
			  </div>
				
		  <?php
			  }
		  ?>
	  </div>




  <a href="../pokemon.php" class="btn btn-success boton"> + </a>
			   





		
	</body>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</html>
