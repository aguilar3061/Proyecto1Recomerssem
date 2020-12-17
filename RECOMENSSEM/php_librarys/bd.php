<?php

    function openBD(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        

        $conexion = new PDO("mysql:host=$servername;dbname=db_recomencem", $username, $password);
        // set the PDO error mode to exception
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexion->exec("set names utf8");
    
        return $conexion;
    }


    function closeBD(){
        return null;
    }

    function selectUsuarios(){
        $conexion = openBD();

        $sentenciaText = "
        select * from usuario
        ";
        $sentencia =$conexion->prepare($sentenciaText);
        $sentencia->execute();
        $resultado = $sentencia->fetchAll();

        $conexion = closeBD();

        return $resultado;
    }
    function deleteUser($idUsuario){
        $conexion = openBD();

        $sentenciaText = "
        DELETE FROM usuario WHERE idUsuario=:idUsuario;
        ";
        $sentencia =$conexion->prepare($sentenciaText);
        $sentencia->bindParam(":idUsuario",$idUsuario);
        $sentencia->execute();

        $conexion = closeBD();
    }
    function selectUnUsuario($idUsuario){
        $conexion = openBD();

        $sentenciaText = "select * from usuario where idUsuario=$idUsuario";

        $sentencia =$conexion->prepare($sentenciaText);
        $sentencia->execute();
        $resultado = $sentencia->fetchAll();

        $conexion = closeBD();

        return $resultado;
    }
    function updateUsuario($idUsuario, $nombre, $cognoms, $mail, $contrasenya, $admin, $puntosObtenidos){

        $conexion = openBD();
    
        $sentenciaText = "update usuario  SET nombre = :nombre, cognoms = :cognoms, mail = :mail, contrasenya = :contrasenya, admin = :admin, puntosObtenidos = :puntosObtenidos where idUsuario = $idUsuario";
        $sentencia = $conexion->prepare($sentenciaText);
        $sentencia->bindParam(':nombre',$nombre);
        $sentencia->bindParam(':cognoms',$cognoms);
        $sentencia->bindParam(':mail',$mail);
        $sentencia->bindParam(':contrasenya',$contrasenya);
        $sentencia->bindParam(':admin',$admin);
        $sentencia->bindParam(':puntosObtenidos',$puntosObtenidos);
        

        $sentencia->execute();
    
        $conexion = closeBD();
    }
    function selectOferta(){
        $conexion = openBD();

        $sentenciaText = "
        select * from oferta
        ";
        $sentencia =$conexion->prepare($sentenciaText);
        $sentencia->execute();
        $resultado = $sentencia->fetchAll();

        $conexion = closeBD();

        return $resultado;
    }

    function selectTiendaConID($idTienda){
   
        $conexion = openBD();

        $sentenciaText = 
        "
        SELECT * FROM tienda where idTienda=:idTienda
        ;";

        $sentencia =$conexion->prepare($sentenciaText);
        $sentencia->bindParam(":idTienda",    $idTienda);
        $sentencia->execute();
        $resultado = $sentencia->fetch();

        $conexion = closeBD();

        return $resultado;
    }
    function InsertarUsuarios($nombre,$apellidos,$correo,$contraseña){

        $conexion = openBD();

        $sentenciaText = "insert into usuario (nombre,cognoms,mail,contrasenya,admin,puntosObtenidos) values (:nombre,:cognoms,:mail,:contrasenya,0,0) ";
        $sentencia =$conexion->prepare($sentenciaText);
        $sentencia->bindParam(":nombre",    $nombre);
        $sentencia->bindParam(":cognoms",    $apellidos);
        $sentencia->bindParam(":mail",    $correo);
        $sentencia->bindParam(":contrasenya",    $contraseña);
        $sentencia->execute();

        $conexion = closeBD();

    }

    function SelectInfo(){
        $conexion = openBD();

        $sentenciaText = "
        select * from infonoticia
        ";
        $sentencia =$conexion->prepare($sentenciaText);
        $sentencia->execute();
        $resultado = $sentencia->fetchAll();

        $conexion = closeBD();

        return $resultado;
    }





    function selectTienda(){
        $conexion = openBD();

        $sentenciaText = "
        select * from tienda
        ";
        $sentencia =$conexion->prepare($sentenciaText);
        $sentencia->execute();
        $resultado = $sentencia->fetchAll();

        $conexion = closeBD();

        return $resultado;
    }

    function selectUnaOferta($id){
        $conexion = openBD();

        $sentenciaText = "select * from oferta where idOferta=$id";

        $sentencia =$conexion->prepare($sentenciaText);
        $sentencia->execute();
        $resultado = $sentencia->fetchAll();

        $conexion = closeBD();

        return $resultado;
    }


    function insertarOferta( $nombre, $Tienda_idTienda, $precioOferta){

        $conexion = openBD();


        $sentenciaText = "insert into oferta (nombre, Tienda_idTienda ,precioOferta) values (:nombre, :Tienda_idTienda, :precioOferta ) ";
        $sentencia =$conexion->prepare($sentenciaText);
        $sentencia->bindParam(":nombre",    $nombre);
        $sentencia->bindParam(":Tienda_idTienda",    $Tienda_idTienda);
        $sentencia->bindParam(":precioOferta",    $precioOferta);


        $sentencia->execute();
        $conexion = closeBD();

    }



    function deleteOferta( $idOferta ){

        $conexion = openBD();

        $sentenciaText = "
        DELETE FROM oferta WHERE idOferta=:idOferta;
        ";
        $sentencia =$conexion->prepare($sentenciaText);
        $sentencia->bindParam(":idOferta",    $idOferta);
        $sentencia->execute();

        $conexion = closeBD();

    }


    function updateOferta($idOferta, $nombre, $Tienda_idTienda, $precioOferta){
        
        $conexion = openBD();
    
        $sentenciaText = "update oferta  SET nombre = :nombre, Tienda_idTienda = :Tienda_idTienda, precioOferta = :precioOferta where idOferta = $idOferta";
        $sentencia = $conexion->prepare($sentenciaText);
        $sentencia->bindParam(':nombre',$nombre);
        $sentencia->bindParam(':Tienda_idTienda',$Tienda_idTienda);
        $sentencia->bindParam(':precioOferta', $precioOferta);

        $sentencia->execute();
    
        $conexion = closeBD();
    
    }

    function consultarUsuario($mail,$password){

        $conexion = openBD();

        $sentenciaText = "select * from usuario where mail=:mail AND contrasenya=:contrasenya";

        $sentencia =$conexion->prepare($sentenciaText);
        $sentencia->bindParam(":mail",$mail);
        $sentencia->bindParam(":contrasenya",$password);
        $sentencia->execute();
        $resultado = $sentencia->fetchAll();

        $conexion = closeBD();

        return $resultado;
    }
?>