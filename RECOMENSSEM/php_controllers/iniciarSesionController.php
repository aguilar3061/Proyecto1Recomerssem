<?php
// Starting session
session_start();
?>
<?php

    require_once("../php_librarys/bd.php");
    if (isset($_POST['get'])){

        
        $usuario = consultarUsuario($_POST['Correo'],$_POST['Contraseña']);
        

        if ($usuario[0]['nombre'] === null){
            ?>
                <script>
                    location.href = "../PAGINAS/INICIAR_SESION/iniciarSesion.php";
                    alert('Inicio de sesion incorrecto');			
                </script>
            <?php    
          } else{
                $_SESSION['user'] = $usuario[0]['nombre'];
                $_SESSION['points'] = $usuario[0]['puntosObtenidos'];
                if($usuario[0]['admin']){
                    $_SESSION['admin'] = "es admin";
                }
                header('Location: \RECOMENSSEM\index.php');
                exit();
            }
}
?>