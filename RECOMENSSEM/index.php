<?php
include_once('php_partials/menu.php');
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style/bootstrap.min.css">

    <!-- ICONOS -->
    <link href="FONTAWESOME/fontawesome-free-5.15.1-web/css/all.css" rel="stylesheet">
</head>

<body>
    <!-- Contenedor principal -->
    <div class="container mt-3 border border-secondary" style="height: 80vh; min-height:600px;">
        <div style="position: relative;
                    top:50%;
                    left: 50%;
                    transform: translate(-50%,-50%);
                    text-align: center;">
                    
            <div class="row w-100 align-items-center">
                <div class="col text-center">
                    <a href="PAGINAS/INFO_NOTICIAS/infonoti.php" class="btn btn-danger regular-button w-50" style="height: 100px; font-size: 30px; line-height:85px;"> Información </a>
                </div>
            </div>

            <div class="row w-100 align-items-center mt-4">
                <div class="col text-center">
                    <a href="PAGINAS/JUEGOS/juegos.php" class="btn btn-danger regular-button w-50" style="height: 100px; font-size: 30px; line-height:85px;"> Juegos </a>
                </div>
            </div>

            <div class="row w-100 align-items-center mt-4" style="display: none">
                <div class="col text-center">
                    <a href="PAGINAS/OFERTAS/ofertas.php" class="btn btn-danger regular-button w-50" style="height: 100px; font-size: 30px; line-height:85px;"> Ofertas </a>
                </div>
            </div>

            <div class="row mt-4">
                <div class="" style="width: 71%; text-align:right; font-size:20px;">
                    <a href="#">Ayuda</a>
                </div>
            </div>

        </div>
    </div>


</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</html>