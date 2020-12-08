<?php

    function openBD(){
        $servername = "localhost";
        $username = "root";
        $password = "mysql";
        

        $conexion = new PDO("mysql:host=$servername;dbname=db_recomencem", $username, $password);
        // set the PDO error mode to exception
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexion->exec("set names utf8");
    
        return $conexion;
    }


    function closeBD(){
        return null;
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





?>