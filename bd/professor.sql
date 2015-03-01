-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 01-Mar-2015 às 14:14
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `guideregister`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE IF NOT EXISTS `professor` (
  `idprofessor` int(20) NOT NULL AUTO_INCREMENT,
  `nomeProfessor` varchar(20) DEFAULT NULL,
  `dtNascimento` varchar(20) DEFAULT NULL,
  `rg` varchar(20) DEFAULT NULL,
  `cpf` decimal(20,0) DEFAULT NULL,
  `dtAdmissao` decimal(20,0) DEFAULT NULL,
  PRIMARY KEY (`idprofessor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`idprofessor`, `nomeProfessor`, `dtNascimento`, `rg`, `cpf`, `dtAdmissao`) VALUES
(1, 'junior', '0000-00-00', 'rua2', '12121', '12123'),
(2, 'junior', '0000-00-00', 'rua2', '12121', '12123'),
(3, 'junior', '0000-00-00', 'rua2', '12121', '12123'),
(4, 'junior', '0000-00-00', 'rua2', '12121', '12123'),
(5, 'junior', '0000-00-00', 'rua2', '12121', '12123'),
(6, 'junior', '0000-00-00', 'rua2', '12121', '12123'),
(7, 'junior', '0000-00-00', 'rua2', '12121', '12123'),
(8, 'junior', '0000-00-00', 'rua2', '12121', '12123'),
(9, 'junior', '0000-00-00', 'rua2', '12121', '12123'),
(10, 'junior', '0000-00-00', 'rua2', '12121', '12123'),
(11, 'junior', '0000-00-00', 'rua2', '12121', '12123'),
(12, 'junior', '0000-00-00', 'rua2', '12121', '12123'),
(13, 'gabriel pessoa', '20/07/1997', '1234578', '12345678910', '20');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
