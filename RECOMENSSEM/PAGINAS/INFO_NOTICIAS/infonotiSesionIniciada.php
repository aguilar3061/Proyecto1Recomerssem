<?php
require_once("../../php_librarys/bd.php");
$ListaInfo = SelectInfo();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- <link rel="stylesheet" href="style/stilos.css"> -->
		<!-- <script src="js/script.js"></script> -->
        <link rel="stylesheet" href="../../style/bootstrap.min.css">
        <link rel="stylesheet" href="../../style/registro.css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        


       <!-- ICONOS -->
	   <link href="../../FONTAWESOME/fontawesome-free-5.15.1-web/css/all.css" rel="stylesheet"> <!--load all styles -->
    <title>INFORMACIÓN</title>
</head>
<body>
<nav class="navbar navbar-expand-lg  navbar-dark bg-primary">
    <img src="/RECOMENSSEM/media/logo-ninot-small.png" alt="logo" width="100" height="45">

 
  <div class="collapse navbar-collapse" id="navbarSupportedContent" 
  >
    <ul class="navbar-nav mr-auto">
    </ul>

    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="navbar-brand"  href="">Mercat del ninot</a>
      </li>
    </ul>
   
    <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="" id="iniciarSesion">Cerrar Sesion</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<div class="mr-1 row row-cols-2 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5" style="margin: 10px;">
            <?php
				foreach ($ListaInfo as $Info){
			?>
				<div class="col mb-4 "  onclick="" style="cursor: pointer;">
					<div class="card h-100 bg-light" >
						<center>
							<img src="/RECOMENSSEM/media/IMGinfo.png" width="80%" > 
							<div class="card-body">   
								<strong><?php echo $Info["titulo"]?></strong>  
                                <br> 
                                <strong><?php echo $Info["texto"]?></strong>  
							</div>							
						</center> 
					</div>
				</div>
			<?php
				}
			?>
</div>   
</body>
</html>