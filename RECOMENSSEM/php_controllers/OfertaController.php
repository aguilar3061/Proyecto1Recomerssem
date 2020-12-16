<?php

    require_once("../php_librarys/bd.php");

    if (isset($_POST['insert'])){



        insertarOferta( $_POST['nombre'],$_POST['cbxTienda'],$_POST['puntos']);

        header('Location: \RECOMENSSEM\PAGINAS\OFERTAS\ofertas.php');
        exit();
       
    }
    
    if(isset($_POST['Eliminar'])){


        deleteOferta( $_POST['idOferta'] );
        
        header('Location: \RECOMENSSEM\PAGINAS\OFERTAS\ofertas.php');
        exit();
    }
    
    
?>