-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3308
-- Tiempo de generación: 30-11-2023 a las 09:37:34
-- Versión del servidor: 5.7.23
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dcarnet`
--
CREATE DATABASE IF NOT EXISTS `dcarnet` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `dcarnet`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cana`
--

DROP TABLE IF EXISTS `cana`;
CREATE TABLE IF NOT EXISTS `cana` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `nomb` varchar(60) NOT NULL,
  `no` varchar(9) NOT NULL,
  `depa` varchar(60) NOT NULL,
  `observacion` varchar(100) NOT NULL,
  `fecha_sol` date NOT NULL,
  `fecha_att` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cana`
--

INSERT INTO `cana` (`id`, `nomb`, `no`, `depa`, `observacion`, `fecha_sol`, `fecha_att`) VALUES
(1, 'Alan David Guerrero Rangel', '20030131', 'Control escolar', 'Muy atento', '2023-11-29', '2023-12-30'),
(2, 'Alejandro Coria Soria', '20030182', 'Control escolar', 'Muy listo', '2023-11-29', '2023-11-29'),
(7, 'Christian Ulises Gonzales Patino', '20030158', 'Control escolar', 'ninguna', '2023-11-30', '2023-12-01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cana_aca`
--

DROP TABLE IF EXISTS `cana_aca`;
CREATE TABLE IF NOT EXISTS `cana_aca` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `nombr` varchar(60) NOT NULL,
  `noc` varchar(9) NOT NULL,
  `asesor` varchar(60) NOT NULL,
  `asignatura` varchar(100) NOT NULL,
  `fecha_s` date NOT NULL,
  `fecha_a` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cana_aca`
--

INSERT INTO `cana_aca` (`id`, `nombr`, `noc`, `asesor`, `asignatura`, `fecha_s`, `fecha_a`) VALUES
(1, 'Alan David Guerrero Rangel', '20030131', 'Mariela Chavez Marcial', 'Gestion de Proyectos de Software', '2023-11-29', '2023-12-31'),
(2, 'Alejandro Coria Soria', '20030182', 'Cesar Esuardo Mora Hernandez', 'Lenguajes y Automatas', '2023-11-29', '2023-12-01'),
(5, 'Christian Ulises Gonzales Patino', '20030158', 'Juan Carlos Madrigal Perez', 'Programacion de Moviles', '2023-11-30', '2023-12-07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

DROP TABLE IF EXISTS `profesores`;
CREATE TABLE IF NOT EXISTS `profesores` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(60) NOT NULL,
  `grupo` varchar(5) NOT NULL,
  `carrera` varchar(50) NOT NULL,
  `Correo` varchar(35) NOT NULL,
  `Contra` varchar(20) NOT NULL,
  `foto` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`id`, `Nom`, `grupo`, `carrera`, `Correo`, `Contra`, `foto`) VALUES
(1, 'Juan Carlos Madrigal Perez', '077CA', 'Sistemas Computacionales', 'TutorM@itsch.edu.mx', '123', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutorias`
--

DROP TABLE IF EXISTS `tutorias`;
CREATE TABLE IF NOT EXISTS `tutorias` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) NOT NULL,
  `noctrl` varchar(9) NOT NULL,
  `instructor` varchar(60) NOT NULL,
  `tema` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tutorias`
--

INSERT INTO `tutorias` (`id`, `nombre`, `noctrl`, `instructor`, `tema`, `fecha`) VALUES
(1, 'Alan David Guerrero Rangel', '20030131', 'Dr. Nosborn', 'La importancia de la identidad propia', '2023-11-29'),
(2, 'Alejandro Coria Soria', '20030182', 'Dr. Nosborn', 'La importancia de la identidad propia', '2023-11-29'),
(6, 'Christian Ulises Gonzales Patino', '20030158', 'Dr. Nosborn', 'La importancia del buen dormir', '2023-12-02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(60) NOT NULL,
  `edad` varchar(10) NOT NULL,
  `grupo` varchar(5) NOT NULL,
  `carrera` varchar(50) NOT NULL,
  `tutor` varchar(35) NOT NULL,
  `Correo` varchar(35) NOT NULL,
  `Contra` varchar(20) NOT NULL,
  `foto` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20030161 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `Nom`, `edad`, `grupo`, `carrera`, `tutor`, `Correo`, `Contra`, `foto`) VALUES
(20030131, 'Alan David Guerrero Rangel', '21', '077CA', 'Sistemas computacionales', 'Juan Carlos Madrigal Perez', 'S20030131@itsch.edu.mx', '123', ''),
(20030158, 'Christian Ulises Gonzales Patino', '21', '077CA', 'Sistemas Computacionales', 'Juan Carlos Madrigal Perez', '20030158@itsch.edu.mx', '123', 'NULL'),
(20030182, 'Alejandro Coria Soria', '23', '077CA', 'Sistemas computacionales', 'Juan Carlos Madrigal Perez', 'S20030182@itsch.edu.mx', '123', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
