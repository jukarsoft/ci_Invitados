-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-04-2017 a las 17:51:46
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `invitados`
--
CREATE DATABASE IF NOT EXISTS `invitados` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `invitados`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `invitados`
--

DROP TABLE IF EXISTS `invitados`;
CREATE TABLE IF NOT EXISTS `invitados` (
  `idinvitado` int(11) NOT NULL AUTO_INCREMENT,
  `nif` char(9) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `apellidos` varchar(80) NOT NULL,
  PRIMARY KEY (`idinvitado`),
  UNIQUE KEY `nif` (`nif`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `invitados`
--

INSERT INTO `invitados` (`idinvitado`, `nif`, `nombre`, `apellidos`) VALUES
(1, '43000000L', 'Adolf', 'Suarezneggger'),
(3, '43000002L', 'Doctor ', 'Maligno'),
(4, '43000003L', 'Faemino', 'y Cansado'),
(5, '43000004L', 'Fina', 'Gramenower'),
(6, '43000005L', 'Igor', 'Fronkonstin'),
(7, '50000003h', 'Jonhy', 'Mentero'),
(8, '43000007L', 'José Luis', 'Torrente'),
(9, '43000008L', 'Mariana', 'Cuchufleta');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
