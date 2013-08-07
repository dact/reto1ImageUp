-- phpMyAdmin SQL Dump
-- version 3.5.8.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 01, 2013 at 04:52 AM
-- Server version: 5.5.31
-- PHP Version: 5.4.15

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bdimageup`
--

-- --------------------------------------------------------

--
-- Table structure for table `Categorias`
--

CREATE TABLE IF NOT EXISTS `Categorias` (
  `categoria` varchar(50) NOT NULL,
  PRIMARY KEY (`categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Categorias`
--

INSERT INTO `Categorias` (`categoria`) VALUES
('Accion'),
('Amor'),
('Animado'),
('Drama'),
('Terror');

-- --------------------------------------------------------

--
-- Table structure for table `Imagenes`
--

CREATE TABLE IF NOT EXISTS `Imagenes` (
  `src` varchar(50) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `id` int(11) NOT NULL,
  `idimg` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(60) NOT NULL,
  PRIMARY KEY (`idimg`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `Usuarios`
--

CREATE TABLE IF NOT EXISTS `Usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `Usuarios`
--

INSERT INTO `Usuarios` (`id`, `nombre`, `apellido`, `correo`, `password`) VALUES
(1, 'cirilo', 'negro', 'babab', '123'),
(2, 'pepe', 'romero', 'pe', '234'),
(4, 'asdf', 'asdf', 'asdf', 'asdf'),
(5, 'Daimer', 'Ospina', 'dopina9@eafit.edu.co', 'asdf'),
(6, 'ppeep', 'pepe', 'pepe', ''),
(7, 'ppeep', 'pepe', 'pepe1', ''),
(8, 'asdfd', 'fasdf', 'gggg', 'gggg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
