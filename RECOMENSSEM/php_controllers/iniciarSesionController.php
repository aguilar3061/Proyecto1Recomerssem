<?php

    require_once("../php_librarys/bd.php");
    if (isset($_POST['get'])){

        
        $usuario = consultarUsuario($_POST['Correo'],$_POST['Contraseña']);

        if (isset($usuario)) {
            session_start();
            $_SESSION['user'] = $usuario['nombre'];
            header('Location: \RECOMENSSEM\index.php');
            exit();
        }
        
    }
    else{
        ?>
        <script>
            location.href = "../PAGINAS/REGISTRO/registro.php";
            alert('Las contraseñas no coinciden');			
        </script>



        <?php
    }

?>