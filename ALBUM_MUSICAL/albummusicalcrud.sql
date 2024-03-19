-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 19-03-2024 a las 17:58:57
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `albummusicalcrud`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artistas`
--

DROP TABLE IF EXISTS `artistas`;
CREATE TABLE IF NOT EXISTS `artistas` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(255) DEFAULT NULL,
  `PaisOrigen` varchar(255) DEFAULT NULL,
  `EstiloMusical` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `artistas`
--

INSERT INTO `artistas` (`ID`, `Nombre`, `PaisOrigen`, `EstiloMusical`) VALUES
(1, 'Michael Jackson', 'Gary, Indiana, Estados Unidos', 'Rock, Pop, R&B, Soul'),
(1946, 'Freddie Mercury', 'Stone Town, Tanzania', 'Rock, Opera'),
(22, 'Eminem', 'Estados Unidos', 'Rap, Hip Hop'),
(99, 'Ariana Grande', 'Florida, Estados Unidos', 'pop r&b, dance pop,Â houseÂ pop');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cdsindividuales`
--

DROP TABLE IF EXISTS `cdsindividuales`;
CREATE TABLE IF NOT EXISTS `cdsindividuales` (
  `ID` int(11) NOT NULL,
  `Titulo` varchar(255) DEFAULT NULL,
  `Artista` varchar(255) DEFAULT NULL,
  `Genero` varchar(255) DEFAULT NULL,
  `Duracion` int(11) DEFAULT NULL,
  `Precio` float DEFAULT NULL,
  `ColeccionID` int(11) DEFAULT NULL,
  `CompaniaDiscograficaID` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `ColeccionID` (`ColeccionID`),
  KEY `CompaniaDiscograficaID` (`CompaniaDiscograficaID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cdsindividuales`
--

INSERT INTO `cdsindividuales` (`ID`, `Titulo`, `Artista`, `Genero`, `Duracion`, `Precio`, `ColeccionID`, `CompaniaDiscograficaID`) VALUES
(1122, 'HYStory', 'Michael Jackson', 'Rock, Soul, R&B', 42, 500, 1, 107),
(1133, 'Dawn FM', 'The Weeknd', 'Dance-Pop y Synth-Pop', 51, 180, 2, 102),
(7755, 'Dangerous', 'Michael Jackson', 'Rock, Soul, Rap', 77, 250, 3, 103);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colecciones`
--

DROP TABLE IF EXISTS `colecciones`;
CREATE TABLE IF NOT EXISTS `colecciones` (
  `ID` int(11) NOT NULL,
  `Titulo` varchar(255) DEFAULT NULL,
  `Artistas` varchar(255) DEFAULT NULL,
  `Genero` varchar(255) DEFAULT NULL,
  `PrecioTotal` float DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `colecciones`
--

INSERT INTO `colecciones` (`ID`, `Titulo`, `Artistas`, `Genero`, `PrecioTotal`) VALUES
(1, 'Coleccion de Bandas de Rock', 'Guns N\' Roses, Queen, Bon Jovi', 'Rock', 800),
(2, 'Coleccion de Artistas de Reggaeton', 'Daddy Yankee, Don Omar, Arcangel', 'Reggaeton', 270),
(4, 'Coleccion de Grupos de Kpop', 'Bts, Blackpink, Twice', 'Kpop', 500);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `companiasdiscograficas`
--

DROP TABLE IF EXISTS `companiasdiscograficas`;
CREATE TABLE IF NOT EXISTS `companiasdiscograficas` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(255) DEFAULT NULL,
  `Pais` varchar(255) DEFAULT NULL,
  `Ciudad` varchar(255) DEFAULT NULL,
  `Direccion` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `companiasdiscograficas`
--

INSERT INTO `companiasdiscograficas` (`ID`, `Nombre`, `Pais`, `Ciudad`, `Direccion`) VALUES
(33, 'Universal Music', 'Reino Unido', 'Londres', '4 Pancras Square, Kings Cross, London N1C 4AG'),
(44, 'Sony Music', 'Estados Unidos', 'Nueva York', '25 Madison Ave, New York, NY 10010'),
(12, 'HYBE Corporation', 'Corea del Sur', 'Seul', '30, Jangchungdan-ro 60-gil, Jung-gu, Seoul');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
