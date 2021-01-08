<?php

    require_once("../php_librarys/bd.php");



        if (isset($_POST['insert'])){

                insertarNoticia( $_POST['nombre'],$_POST['desc']);

                header('Location: \RECOMENSSEM\PAGINAS\INFO_NOTICIAS\infonoti.php');
                exit();

        }elseif(isset($_POST['Eliminar'])){

                deleteNoticia( $_POST['id'] );

                header('Location: \RECOMENSSEM\PAGINAS\INFO_NOTICIAS\infonoti.php');
                exit();

        }elseif(isset($_POST['update'])){

                updateNoticia($_POST['id'], $_POST['nombre'],  $_POST['desc']);

                header('Location: \RECOMENSSEM\PAGINAS\INFO_NOTICIAS\infonoti.php');
                exit();
        }elseif(isset($_POST['nada'])){

                header('Location: \RECOMENSSEM\PAGINAS\INFO_NOTICIAS\infonoti.php');
                exit();
        }


?>