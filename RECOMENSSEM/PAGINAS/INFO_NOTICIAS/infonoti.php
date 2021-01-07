<?php
require_once("../../php_librarys/bd.php");
$ListaInfo = SelectInfo();
include_once("../../php_partials/menu.php");
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
    
       <!-- ICONOS -->
	   <link href="../../FONTAWESOME/fontawesome-free-5.15.1-web/css/all.css" rel="stylesheet"> <!--load all styles -->
    <title>INFORMACIÓN</title>
</head>
<body>
<div style="height: 90vh;">
<div class="row justify-content-center" style="margin: 10px; ">
            <?php
				foreach ($ListaInfo as $Info){
			?>
				<div class="card col-8" style="margin: 10px;">
					<div class="row no-gutters">
						<div class="col-md-4">
						<img src="/RECOMENSSEM/media/<?php echo $Info["img"]?>" class="card-img" height="150px" width="100px">
						</div>
						<div class="col-md-8">
						<div class="card-body">
							<h5 class="card-title"><?php echo $Info["titulo"]?></h5>
							<p class="card-text"><?php echo $Info["texto"]?></p>
							
						</div>
						</div>
					</div>
				</div>
			<?php
				}
			?>
</div>
</div>
<footer class="bg-primary" >
    <?php
		include_once("../../php_partials/footer.php");
	?>
</footer>   
</body>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>       
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="../../js/script.js" charset="utf-8"></script>
</html>