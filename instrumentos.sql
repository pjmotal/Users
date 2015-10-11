-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 16, 2013 at 08:22 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `instrumentos`
--

-- --------------------------------------------------------

--
-- Table structure for table `tipo_pessoa`
--

CREATE TABLE IF NOT EXISTS `tipo_pessoa` (
  `id_tipo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(256) NOT NULL,
  PRIMARY KEY (`id_tipo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tipo_pessoa`
--

INSERT INTO `tipo_pessoa` (`id_tipo`, `nome`) VALUES
(1, 'Visitante'),
(2, 'Comprador'),
(3, 'Vendedor');

-- --------------------------------------------------------

--
-- Table structure for table `utilizadores`
--

CREATE TABLE IF NOT EXISTS `utilizadores` (
  `cc` int(8) NOT NULL,
  `nome` varchar(256) NOT NULL,
  `morada` varchar(256) NOT NULL,
  `localidade` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `id_tipo_pessoa` int(11) NOT NULL,
  PRIMARY KEY (`cc`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utilizadores`
--

INSERT INTO `utilizadores` (`cc`, `nome`, `morada`, `localidade`, `email`, `password`, `id_tipo_pessoa`) VALUES
(11234541, 'Pedro', 'Rua A', 'Figueira da Foz', 'purplesugar12@gmail.com', '11234565', 3),
(11826014, 'Paulo Jorge Mota Lopes', 'Rua Serrado da Cruz', 'Moinho da Mata', 'paulomotalopes@gmail.com', '11826014', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
