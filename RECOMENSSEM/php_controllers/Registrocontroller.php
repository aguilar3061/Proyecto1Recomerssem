<?php

    require_once("../php_librarys/bd.php");
    if (isset($_POST['insert'])){

        if($_POST['Contraseña']==$_POST['Contraseña2']){


            $hash = Password::hash($_POST['Contraseña']);
           



            InsertarUsuarios($_POST['Nombre'],$_POST['Apellidos'],$_POST['Correo'],$hash);

            header('Location: \RECOMENSSEM\index.php');
            exit();
        }
        else{
            ?>
            <script>
                location.href = "../PAGINAS/REGISTRO/registro.php";
                alert('Las contraseñas no coinciden');			
            </script>

            <?php
        }


    }




    class Password {
        const SALT = 'EstoEsUnSalt';
        public static function hash($password) {
            return hash('sha512', self::SALT . $password);
        }
        public static function verify($password, $hash) {
            return ($hash == self::hash($password));
        }
    }






?>