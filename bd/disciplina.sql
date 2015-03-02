-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02-Mar-2015 às 19:01
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
-- Estrutura da tabela `disciplina`
--

CREATE TABLE IF NOT EXISTS `disciplina` (
  `idDisciplina` int(11) NOT NULL AUTO_INCREMENT,
  `codDisciplina` varchar(60) DEFAULT NULL,
  `nomeDisciplina` varchar(255) DEFAULT NULL,
  `ch` int(10) DEFAULT NULL,
  `dataCad` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `dataAtualizacao` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `idProfessor` int(11) DEFAULT NULL,
  `nomeProfessor` varchar(255) DEFAULT NULL,
  `idCurso` int(11) DEFAULT NULL,
  `nomeCurso` varchar(60) DEFAULT NULL,
  `idTurma` int(11) DEFAULT NULL,
  `PAturma` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idDisciplina`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `disciplina`
--

INSERT INTO `disciplina` (`idDisciplina`, `codDisciplina`, `nomeDisciplina`, `ch`, `dataCad`, `dataAtualizacao`, `idProfessor`, `nomeProfessor`, `idCurso`, `nomeCurso`, `idTurma`, `PAturma`) VALUES
(1, '511', 'conclusao do curso', 1500, '2015-03-02 17:59:09', NULL, 0, '', 0, '', 0, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
