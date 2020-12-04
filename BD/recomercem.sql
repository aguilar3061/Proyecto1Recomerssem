-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Temps de generació: 04-12-2020 a les 13:24:54
-- Versió del servidor: 10.4.14-MariaDB
-- Versió de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de dades: `recomercem`
--

-- --------------------------------------------------------

--
-- Estructura de la taula `infonoticia`
--

CREATE TABLE `infonoticia` (
  `id` int(11) NOT NULL,
  `titulo` varchar(25) NOT NULL,
  `texto` varchar(255) NOT NULL,
  `img` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Bolcament de dades per a la taula `infonoticia`
--

INSERT INTO `infonoticia` (`id`, `titulo`, `texto`, `img`) VALUES
(1, 'Nueva carniceria', 'carniceriacarniceriacarnicericarniceriacarniceriaa', NULL),
(2, 'Nueva fruteria', 'fruteriafruteriafruteriafruteriafruteria', NULL);

-- --------------------------------------------------------

--
-- Estructura de la taula `juego`
--

CREATE TABLE `juego` (
  `idJuego` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `puntos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Bolcament de dades per a la taula `juego`
--

INSERT INTO `juego` (`idJuego`, `nombre`, `puntos`) VALUES
(1, 'juego1', 100),
(2, 'juego2', 100),
(3, 'juego3', 100),
(4, 'juego4', 100);

-- --------------------------------------------------------

--
-- Estructura de la taula `oferta`
--

CREATE TABLE `oferta` (
  `idOferta` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `Tienda_idTienda` int(11) NOT NULL,
  `precioOferta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Bolcament de dades per a la taula `oferta`
--

INSERT INTO `oferta` (`idOferta`, `nombre`, `Tienda_idTienda`, `precioOferta`) VALUES
(1, 'oferta tienda 1', 1, 20),
(2, 'oferta tienda 2', 2, 15);

-- --------------------------------------------------------

--
-- Estructura de la taula `tienda`
--

CREATE TABLE `tienda` (
  `idTienda` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `img` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Bolcament de dades per a la taula `tienda`
--

INSERT INTO `tienda` (`idTienda`, `nombre`, `img`) VALUES
(1, 'tienda1', NULL),
(2, 'tienda2', NULL);

-- --------------------------------------------------------

--
-- Estructura de la taula `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `cognoms` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `contrasenya` varchar(200) NOT NULL,
  `admin` tinyint(4) NOT NULL,
  `puntosObtenidos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Bolcament de dades per a la taula `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nombre`, `cognoms`, `mail`, `contrasenya`, `admin`, `puntosObtenidos`) VALUES
(1, 'Albert', 'Chercoles', 'albert@cep.net', '1234', 0, 0),
(2, 'Arnau', 'Poblador', 'arnau@cep.net', '1234', 0, 0),
(3, 'Carlos', 'Aguilar', 'arnau@cep.net', '1234', 0, 0),
(4, 'Daniel', 'Romero', 'daniel@cep.net', '1234', 0, 0),
(5, 'Admin', 'Admin', 'admin@cep.net', '1234', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de la taula `usuario_has_juego`
--

CREATE TABLE `usuario_has_juego` (
  `Usuario_idUsuario` int(11) NOT NULL,
  `Juego_idJuego` int(11) NOT NULL,
  `juego_pasado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de la taula `usuario_has_oferta`
--

CREATE TABLE `usuario_has_oferta` (
  `Usuario_idUsuario` int(11) NOT NULL,
  `Oferta_idOferta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índexs per a les taules bolcades
--

--
-- Índexs per a la taula `infonoticia`
--
ALTER TABLE `infonoticia`
  ADD PRIMARY KEY (`id`);

--
-- Índexs per a la taula `juego`
--
ALTER TABLE `juego`
  ADD PRIMARY KEY (`idJuego`);

--
-- Índexs per a la taula `oferta`
--
ALTER TABLE `oferta`
  ADD PRIMARY KEY (`idOferta`),
  ADD KEY `fk_Oferta_Tienda1_idx` (`Tienda_idTienda`);

--
-- Índexs per a la taula `tienda`
--
ALTER TABLE `tienda`
  ADD PRIMARY KEY (`idTienda`);

--
-- Índexs per a la taula `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- Índexs per a la taula `usuario_has_juego`
--
ALTER TABLE `usuario_has_juego`
  ADD PRIMARY KEY (`Usuario_idUsuario`,`Juego_idJuego`),
  ADD KEY `fk_Usuario_has_Juego_Juego1_idx` (`Juego_idJuego`),
  ADD KEY `fk_Usuario_has_Juego_Usuario1_idx` (`Usuario_idUsuario`);

--
-- Índexs per a la taula `usuario_has_oferta`
--
ALTER TABLE `usuario_has_oferta`
  ADD PRIMARY KEY (`Usuario_idUsuario`,`Oferta_idOferta`),
  ADD KEY `fk_Usuario_has_Oferta_Oferta1_idx` (`Oferta_idOferta`),
  ADD KEY `fk_Usuario_has_Oferta_Usuario_idx` (`Usuario_idUsuario`);

--
-- AUTO_INCREMENT per les taules bolcades
--

--
-- AUTO_INCREMENT per la taula `infonoticia`
--
ALTER TABLE `infonoticia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT per la taula `juego`
--
ALTER TABLE `juego`
  MODIFY `idJuego` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT per la taula `oferta`
--
ALTER TABLE `oferta`
  MODIFY `idOferta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT per la taula `tienda`
--
ALTER TABLE `tienda`
  MODIFY `idTienda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restriccions per a les taules bolcades
--

--
-- Restriccions per a la taula `oferta`
--
ALTER TABLE `oferta`
  ADD CONSTRAINT `fk_Oferta_Tienda1` FOREIGN KEY (`Tienda_idTienda`) REFERENCES `tienda` (`idTienda`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restriccions per a la taula `usuario_has_juego`
--
ALTER TABLE `usuario_has_juego`
  ADD CONSTRAINT `fk_Usuario_has_Juego_Juego1` FOREIGN KEY (`Juego_idJuego`) REFERENCES `juego` (`idJuego`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Usuario_has_Juego_Usuario1` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restriccions per a la taula `usuario_has_oferta`
--
ALTER TABLE `usuario_has_oferta`
  ADD CONSTRAINT `fk_Usuario_has_Oferta_Oferta1` FOREIGN KEY (`Oferta_idOferta`) REFERENCES `oferta` (`idOferta`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Usuario_has_Oferta_Usuario` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `usuario` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
