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

                if($usuario[0]['admin'] === true){
                    $_SESSION['admin'] = true;
                }
                header('Location: \RECOMENSSEM\index.php');
                exit();
            }
}
?>