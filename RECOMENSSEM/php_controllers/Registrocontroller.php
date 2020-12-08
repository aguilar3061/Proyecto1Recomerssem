<?php

    require_once("../php_librarys/bd.php");
    if (isset($_POST['insert'])){

        if($_POST['Contraseña']==$_POST['Contraseña2']){
        InsertarUsuarios($_POST['Nombre'],$_POST['Apellidos'],$_POST['Correo'],$_POST['Contraseña']);
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
?>