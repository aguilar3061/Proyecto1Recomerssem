-- MariaDB dump 10.17  Distrib 10.4.14-MariaDB, for Win64 (AMD64)

DROP DATABASE if exists DB_recomencem;
CREATE DATABASE DB_recomencem;
USE DB_recomencem;


-- Host: 127.0.0.1    Database: db_recomencem
-- ------------------------------------------------------
-- Server version	10.4.14-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `infonoticia`
--

DROP TABLE IF EXISTS `infonoticia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `infonoticia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(25) NOT NULL,
  `texto` varchar(255) NOT NULL,
  `img` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `infonoticia`
--

LOCK TABLES `infonoticia` WRITE;
/*!40000 ALTER TABLE `infonoticia` DISABLE KEYS */;
INSERT INTO `infonoticia` VALUES (2,'Nueva web','Nueva web hecha por los alumnos del Politecnics  07/01/21','noticia1.png');
/*!40000 ALTER TABLE `infonoticia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `juego`
--

DROP TABLE IF EXISTS `juego`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `juego` (
  `idJuego` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) NOT NULL,
  `puntos` int(11) NOT NULL,
  PRIMARY KEY (`idJuego`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `juego`
--

LOCK TABLES `juego` WRITE;
/*!40000 ALTER TABLE `juego` DISABLE KEYS */;
INSERT INTO `juego` VALUES (1,'juego1',100),(2,'juego2',100),(3,'juego3',100),(4,'juego4',100);
/*!40000 ALTER TABLE `juego` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `oferta`
--

DROP TABLE IF EXISTS `oferta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `oferta` (
  `idOferta` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `Tienda_idTienda` int(11) NOT NULL,
  `precioOferta` int(11) NOT NULL,
  PRIMARY KEY (`idOferta`),
  KEY `fk_Oferta_Tienda1_idx` (`Tienda_idTienda`),
  CONSTRAINT `fk_Oferta_Tienda1` FOREIGN KEY (`Tienda_idTienda`) REFERENCES `tienda` (`idTienda`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `oferta`
--

LOCK TABLES `oferta` WRITE;
/*!40000 ALTER TABLE `oferta` DISABLE KEYS */;
INSERT INTO `oferta` VALUES (1,'2x1 en fruta',2,15),(2,'15 % de descuento libro de ciencia',2,15);
/*!40000 ALTER TABLE `oferta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tienda`
--

DROP TABLE IF EXISTS `tienda`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tienda` (
  `idTienda` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `img` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idTienda`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tienda`
--

LOCK TABLES `tienda` WRITE;
/*!40000 ALTER TABLE `tienda` DISABLE KEYS */;
INSERT INTO `tienda` VALUES 
(1,'FRUITES ANTOLÍN',NULL),
(2,'LLIBRERIA DEL NINOT',NULL),
(3,'ELS NOIS DE LA PLAÇA',NULL),
(4,'YOLANDA',NULL),
(5,'MB’S DEGUSTACIÓ',NULL),
(6,'PEIXATERIA RIBERA',NULL);

/*!40000 ALTER TABLE `tienda` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) NOT NULL,
  `cognoms` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `contrasenya` varchar(200) NOT NULL,
  `admin` tinyint(4) NOT NULL,
  `puntosObtenidos` int(11) NOT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;
 
--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (11,'carlos','no va','carlos@nova.es','dedb257f406239a5286026fdac2e3d9338a8bc763e9f826f30eba498530e14c82c946de14f498d9ace941eeebe02b906ef3831f633601e594a5dd8fe66ce1bb4',0,285),(12,'arnau','f','arnau@cep.com','dedb257f406239a5286026fdac2e3d9338a8bc763e9f826f30eba498530e14c82c946de14f498d9ace941eeebe02b906ef3831f633601e594a5dd8fe66ce1bb4',0,0),(13,'Admin','Admin','admin@admin.com','dedb257f406239a5286026fdac2e3d9338a8bc763e9f826f30eba498530e14c82c946de14f498d9ace941eeebe02b906ef3831f633601e594a5dd8fe66ce1bb4',1,0),(15,'Hola','apelido','correo@correo.com','dedb257f406239a5286026fdac2e3d9338a8bc763e9f826f30eba498530e14c82c946de14f498d9ace941eeebe02b906ef3831f633601e594a5dd8fe66ce1bb4',0,0),(17,'Eric','Kramer','eric@cep.net','dedb257f406239a5286026fdac2e3d9338a8bc763e9f826f30eba498530e14c82c946de14f498d9ace941eeebe02b906ef3831f633601e594a5dd8fe66ce1bb4',0,85);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario_has_juego`
--

DROP TABLE IF EXISTS `usuario_has_juego`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario_has_juego` (
  `Usuario_idUsuario` int(11) NOT NULL,
  `Juego_idJuego` int(11) NOT NULL,
  `juego_pasado` tinyint(4) NOT NULL,
  PRIMARY KEY (`Usuario_idUsuario`,`Juego_idJuego`),
  KEY `fk_Usuario_has_Juego_Juego1_idx` (`Juego_idJuego`),
  KEY `fk_Usuario_has_Juego_Usuario1_idx` (`Usuario_idUsuario`),
  CONSTRAINT `fk_Usuario_has_Juego_Juego1` FOREIGN KEY (`Juego_idJuego`) REFERENCES `juego` (`idJuego`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Usuario_has_Juego_Usuario1` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario_has_juego`
--

LOCK TABLES `usuario_has_juego` WRITE;
/*!40000 ALTER TABLE `usuario_has_juego` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuario_has_juego` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario_has_oferta`
--

DROP TABLE IF EXISTS `usuario_has_oferta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario_has_oferta` (
  `Usuario_idUsuario` int(11) NOT NULL,
  `Oferta_idOferta` int(11) NOT NULL,
  PRIMARY KEY (`Usuario_idUsuario`,`Oferta_idOferta`),
  KEY `fk_Usuario_has_Oferta_Oferta1_idx` (`Oferta_idOferta`),
  KEY `fk_Usuario_has_Oferta_Usuario_idx` (`Usuario_idUsuario`),
  CONSTRAINT `fk_Usuario_has_Oferta_Oferta1` FOREIGN KEY (`Oferta_idOferta`) REFERENCES `oferta` (`idOferta`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Usuario_has_Oferta_Usuario` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario_has_oferta`
--

LOCK TABLES `usuario_has_oferta` WRITE;
/*!40000 ALTER TABLE `usuario_has_oferta` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuario_has_oferta` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-01-18 12:47:40
