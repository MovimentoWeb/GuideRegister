-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 03-Mar-2015 às 19:29
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
-- Estrutura da tabela `turma`
--

CREATE TABLE IF NOT EXISTS `turma` (
  `idTurma` int(11) NOT NULL AUTO_INCREMENT,
  `paTurma` varchar(20) NOT NULL,
  `chTotal` int(5) DEFAULT NULL,
  `turno` char(255) DEFAULT NULL,
  `idCurso` int(11) NOT NULL,
  `nomeCurso` varchar(100) DEFAULT NULL,
  `dataCriacao` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `dataAlteracao` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nomePessoaAlteracao` varchar(255) DEFAULT NULL,
  `disciplinas` text NOT NULL,
  PRIMARY KEY (`idTurma`,`paTurma`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Extraindo dados da tabela `turma`
--

INSERT INTO `turma` (`idTurma`, `paTurma`, `chTotal`, `turno`, `idCurso`, `nomeCurso`, `dataCriacao`, `dataAlteracao`, `nomePessoaAlteracao`, `disciplinas`) VALUES
(1, '556', 1500, NULL, 0, 'Redes', '2015-03-01 02:02:30', '2015-03-01 02:56:49', NULL, '0'),
(2, '254', 1200, NULL, 0, 'tecnico em informatica', '2015-03-01 02:02:30', '2015-03-01 02:56:51', NULL, '0'),
(3, '249', 1300, NULL, 0, 'Redes', '2015-03-01 02:02:30', '2015-03-01 02:56:52', NULL, '0'),
(4, '689', 600, NULL, 0, 'Cabelereiro', '2015-03-01 02:02:30', '2015-03-01 02:56:56', NULL, '0'),
(5, '231', 640, NULL, 0, 'Garsom', '2015-03-01 02:02:30', '2015-03-01 02:56:57', NULL, '0'),
(6, '566', 820, NULL, 0, 'Digitação', '2015-03-01 02:02:30', '2015-03-01 02:56:59', NULL, '0'),
(7, '458', 730, NULL, 0, 'Informática Básica', '2015-03-01 02:02:30', '2015-03-01 02:57:01', NULL, '0'),
(8, '982', 400, NULL, 0, 'Informática Avançada', '2015-03-01 02:02:30', '2015-03-01 02:57:03', NULL, '0'),
(9, '314', 340, NULL, 0, 'Massagem', '2015-03-01 02:02:30', '2015-03-01 02:57:04', NULL, '0'),
(10, '524', 650, NULL, 0, 'Estética', '2015-03-01 02:02:30', '2015-03-01 02:57:06', NULL, '0'),
(11, '511', 1500, '', 0, '', '2015-03-03 14:52:53', '2015-03-03 14:52:53', NULL, '0'),
(12, '100', 1000, '', 0, '', '2015-03-03 15:41:39', '2015-03-03 15:41:39', NULL, '0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
