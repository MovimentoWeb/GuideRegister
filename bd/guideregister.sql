/*
Navicat MySQL Data Transfer

Source Server         : Minha conexão
Source Server Version : 50617
Source Host           : 127.0.0.1:3306
Source Database       : guideregister

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2015-02-24 17:50:53
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for aluno
-- ----------------------------
DROP TABLE IF EXISTS `aluno`;
CREATE TABLE `aluno` (
  `idAluno` int(11) NOT NULL AUTO_INCREMENT,
  `matricula` int(11) NOT NULL,
  `nomeAluno` varchar(255) NOT NULL,
  `dataNascimento` date DEFAULT NULL,
  `rg` int(20) DEFAULT NULL,
  `cpf` int(11) NOT NULL,
  `dataCadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dataAtualizacao` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `idCurso` int(11) DEFAULT NULL,
  `nomeCurso` varchar(100) DEFAULT NULL,
  `idDisciplina` int(11) DEFAULT NULL,
  `ativo` bit(1) NOT NULL DEFAULT b'1',
  PRIMARY KEY (`idAluno`,`cpf`,`matricula`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of aluno
-- ----------------------------

-- ----------------------------
-- Table structure for avisoejustificativa
-- ----------------------------
DROP TABLE IF EXISTS `avisoejustificativa`;
CREATE TABLE `avisoejustificativa` (
  `idAviso` int(11) NOT NULL AUTO_INCREMENT,
  `tituloAviso` varchar(255) DEFAULT NULL,
  `visualizado` bit(1) NOT NULL DEFAULT b'0',
  `idUsuario` varchar(11) NOT NULL,
  `nomeUsuario` varchar(255) NOT NULL DEFAULT '',
  `dataCriacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dataVisualizacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `DataAtualizacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`idAviso`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of avisoejustificativa
-- ----------------------------

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `nomeUsuario` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `rg` varchar(7) NOT NULL,
  `CPF` varchar(11) NOT NULL,
  `dtAdmissao` varchar(15) NOT NULL,
  `dtNascimeto` varchar(15) NOT NULL,
  PRIMARY KEY (`idUsuario`,`email`,`senha`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
