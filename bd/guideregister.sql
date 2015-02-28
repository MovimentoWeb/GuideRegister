/*
Navicat MySQL Data Transfer

Source Server         : Minha conexão
Source Server Version : 50617
Source Host           : 127.0.0.1:3306
Source Database       : guideregister

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2015-02-28 11:22:13
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
  `dtNascimento` date DEFAULT NULL,
  `rg` int(20) DEFAULT NULL,
  `cpf` int(11) NOT NULL,
  `dataCadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dataAtualizacao` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `idCurso` int(11) DEFAULT NULL,
  `curso` varchar(100) DEFAULT NULL,
  `PA-Turma` int(11) DEFAULT NULL,
  `idDisciplina` int(11) DEFAULT NULL,
  `disciplina` varchar(255) DEFAULT NULL,
  `ativo` bit(1) NOT NULL DEFAULT b'1',
  PRIMARY KEY (`idAluno`,`cpf`,`matricula`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of aluno
-- ----------------------------
INSERT INTO `aluno` VALUES ('1', '123456', 'Reginaldo', '0000-00-00', '2147483647', '2147483647', '2015-02-26 08:54:13', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('2', '123456', 'Reginaldo', '0000-00-00', '2147483647', '2147483647', '2015-02-26 08:54:13', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('3', '123456', 'Reginaldo', '0000-00-00', '2147483647', '2147483647', '2015-02-26 08:55:13', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('4', '123456', 'Reginaldo', '0000-00-00', '2147483647', '2147483647', '2015-02-26 08:55:13', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('5', '123456', 'Reginaldo', '0000-00-00', '2147483647', '2147483647', '2015-02-26 08:55:37', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('6', '123456', 'Reginaldo', '0000-00-00', '2147483647', '2147483647', '2015-02-26 08:55:37', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('7', '123456', 'Reginaldo', '0000-00-00', '2147483647', '2147483647', '2015-02-26 08:58:39', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('8', '123456', 'Reginaldo', '0000-00-00', '2147483647', '2147483647', '2015-02-26 08:58:39', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('9', '123456', 'Reginaldo', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:00:02', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('10', '123456', 'Reginaldo', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:00:02', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('11', '123456', 'Reginaldo', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:04:22', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('12', '123456', 'Reginaldo', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:04:22', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('13', '123456', 'Reginaldo', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:08:09', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('14', '123456', 'Reginaldo', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:08:09', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('15', '123456', 'Reginaldo', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:10:12', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('16', '123456', 'Reginaldo', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:10:12', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('17', '123456', 'Reginaldo', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:10:53', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('18', '123456', 'Reginaldo', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:10:53', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('19', '123456', 'Reginaldo', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:11:10', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('20', '123456', 'Reginaldo', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:11:46', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('21', '123456', 'Reginaldo', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:11:46', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('22', '123456', 'Reginaldo', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:14:17', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('23', '123456', 'Reginaldo', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:14:17', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('24', '123456', 'Reginaldo', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:14:46', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('25', '123456', 'Reginaldo', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:14:46', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('26', '123456', 'Reginaldo', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:15:10', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('27', '123456', 'Reginaldo', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:15:10', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('28', '123456', 'Reginaldo JosÃ©', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:17:04', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('29', '123456', 'Reginaldo JosÃ©', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:17:04', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('30', '123456', 'Reginaldo JosÃ© de lima', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:21:18', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('31', '123456', 'Reginaldo JosÃ© de lima', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:21:19', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('32', '123456', 'Fuinha', '0000-00-00', '55555555', '2147483647', '2015-02-26 09:22:40', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('33', '123456', 'Fuinha', '0000-00-00', '55555555', '2147483647', '2015-02-26 09:22:40', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('34', '123456', 'Fuinha', '0000-00-00', '55555555', '2147483647', '2015-02-26 09:27:25', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('35', '123456', 'Fuinha', '0000-00-00', '55555555', '2147483647', '2015-02-26 09:27:25', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('36', '123456', 'Fuinha MendonÃ§a', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:27:52', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('37', '123456', 'Fuinha MendonÃ§a', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:27:52', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('38', '123456', 'Fuinha MendonÃ§a de lima', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:33:57', '0000-00-00 00:00:00', null, '2', null, null, null, '');
INSERT INTO `aluno` VALUES ('39', '123456', 'Fuinha MendonÃ§a de lima', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:33:57', '0000-00-00 00:00:00', null, '2', null, null, null, '');
INSERT INTO `aluno` VALUES ('40', '123456', 'Fuinha MendonÃ§a de lima', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:42:51', '0000-00-00 00:00:00', '0', '2', null, null, null, '');
INSERT INTO `aluno` VALUES ('41', '123456', 'Fuinha MendonÃ§a de lima', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:42:51', '0000-00-00 00:00:00', '0', '2', null, null, null, '');
INSERT INTO `aluno` VALUES ('42', '123456', 'Fuinha MendonÃ§a de lima', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:54:17', '0000-00-00 00:00:00', '0', '2', null, null, null, '');
INSERT INTO `aluno` VALUES ('43', '123456', 'Fuinha MendonÃ§a de lima', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:54:17', '0000-00-00 00:00:00', '0', '2', null, null, null, '');
INSERT INTO `aluno` VALUES ('44', '123456', 'Fuinha MendonÃ§a de lima', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:55:36', '0000-00-00 00:00:00', '0', '2', null, null, null, '');
INSERT INTO `aluno` VALUES ('45', '123456', 'Fuinha MendonÃ§a de lima', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:55:36', '0000-00-00 00:00:00', '0', '2', null, null, null, '');
INSERT INTO `aluno` VALUES ('46', '123456', 'Fuinha MendonÃ§a de lima', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:56:23', '0000-00-00 00:00:00', '0', '2', null, null, null, '');
INSERT INTO `aluno` VALUES ('47', '123456', 'Fuinha MendonÃ§a de lima', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:56:24', '0000-00-00 00:00:00', '0', '2', null, null, null, '');
INSERT INTO `aluno` VALUES ('48', '123456', 'Fuinha MendonÃ§a de lima', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:56:38', '0000-00-00 00:00:00', '0', '2', null, null, null, '');
INSERT INTO `aluno` VALUES ('49', '123456', 'Fuinha MendonÃ§a de lima', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:56:38', '0000-00-00 00:00:00', '0', '2', null, null, null, '');
INSERT INTO `aluno` VALUES ('50', '123456', 'Fuinha MendonÃ§a de lima', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:56:50', '0000-00-00 00:00:00', '0', '2', null, null, null, '');
INSERT INTO `aluno` VALUES ('51', '123456', 'Fuinha MendonÃ§a de lima', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:56:50', '0000-00-00 00:00:00', '0', '2', null, null, null, '');
INSERT INTO `aluno` VALUES ('52', '123456', 'Fuinha MendonÃ§a de lima', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:57:25', '0000-00-00 00:00:00', '0', '2', null, null, null, '');
INSERT INTO `aluno` VALUES ('53', '123456', 'Fuinha MendonÃ§a de lima', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:57:25', '0000-00-00 00:00:00', '0', '2', null, null, null, '');
INSERT INTO `aluno` VALUES ('54', '0', '', null, null, '0', '2015-02-26 10:19:29', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('55', '123456', 'toshy MendonÃ§a', '0000-00-00', '55555555', '2147483647', '2015-02-26 10:47:22', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('56', '123456', 'toshy MendonÃ§a', '0000-00-00', '55555555', '2147483647', '2015-02-26 10:49:17', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('57', '123456', 'toshy MendonÃ§a de lima', '0000-00-00', '2147483647', '2147483647', '2015-02-26 10:49:37', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('58', '123456', 'toshy MendonÃ§a de lima', '0000-00-00', '2147483647', '2147483647', '2015-02-26 10:51:45', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('59', '123456', 'Fuinha MendonÃ§a', '0000-00-00', '2147483647', '2147483647', '2015-02-26 10:52:18', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('60', '123456', 'Fuinha MendonÃ§a', '0000-00-00', '2147483647', '2147483647', '2015-02-26 10:52:38', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('61', '123456', 'toshy MendonÃ§a', '0000-00-00', '2147483647', '2147483647', '2015-02-26 10:53:08', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('62', '123456', 'toshy MendonÃ§a', '0000-00-00', '2147483647', '2147483647', '2015-02-26 11:23:36', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('63', '123456', 'toshy MendonÃ§a', '0000-00-00', '2147483647', '2147483647', '2015-02-26 11:39:06', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('64', '123456', 'Fuinha MendonÃ§a de lima', '0000-00-00', '2147483647', '2147483647', '2015-02-26 11:40:11', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('65', '123456', 'Taynara', '0000-00-00', '2147483647', '2147483647', '2015-02-26 17:49:16', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('66', '123456', 'toshy MendonÃ§a de lima', '0000-00-00', '2147483647', '2147483647', '2015-02-27 09:19:15', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('67', '123456', 'Fuinha MendonÃ§a de lima', '0000-00-00', '2147483647', '2147483647', '2015-02-27 09:24:17', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('68', '123456', 'Fuinha MendonÃ§a de lima', '0000-00-00', '2147483647', '2147483647', '2015-02-27 09:26:09', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('69', '123456', 'Fuinha MendonÃ§a de lima', '0000-00-00', '2147483647', '2147483647', '2015-02-27 09:26:57', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('70', '123456', 'Fuinha MendonÃ§a de lima', '0000-00-00', '2147483647', '2147483647', '2015-02-27 09:27:47', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('71', '123456', 'Fuinha', '0000-00-00', '2147483647', '2147483647', '2015-02-27 09:28:14', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('72', '123456', 'Fuinha', '0000-00-00', '2147483647', '2147483647', '2015-02-27 09:29:55', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('73', '123456', 'JoÃ£o Victor', '0000-00-00', '2147483647', '2147483647', '2015-02-27 21:13:02', '0000-00-00 00:00:00', null, null, null, null, null, '');

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
-- Table structure for professor
-- ----------------------------
DROP TABLE IF EXISTS `professor`;
CREATE TABLE `professor` (
  `idprofessor` int(20) NOT NULL AUTO_INCREMENT,
  `nome` varchar(20) DEFAULT NULL,
  `telefone` decimal(20,0) DEFAULT NULL,
  `endereco` varchar(20) DEFAULT NULL,
  `rg` decimal(20,0) DEFAULT NULL,
  `cpf` decimal(20,0) DEFAULT NULL,
  PRIMARY KEY (`idprofessor`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of professor
-- ----------------------------
INSERT INTO `professor` VALUES ('1', 'junior', '23342', 'rua2', '12121', '12123');
INSERT INTO `professor` VALUES ('2', 'junior', '23342', 'rua2', '12121', '12123');
INSERT INTO `professor` VALUES ('3', 'junior', '23342', 'rua2', '12121', '12123');
INSERT INTO `professor` VALUES ('4', 'junior', '23342', 'rua2', '12121', '12123');
INSERT INTO `professor` VALUES ('5', 'junior', '23342', 'rua2', '12121', '12123');
INSERT INTO `professor` VALUES ('6', 'junior', '23342', 'rua2', '12121', '12123');
INSERT INTO `professor` VALUES ('7', 'junior', '23342', 'rua2', '12121', '12123');
INSERT INTO `professor` VALUES ('8', 'junior', '23342', 'rua2', '12121', '12123');
INSERT INTO `professor` VALUES ('9', 'junior', '23342', 'rua2', '12121', '12123');
INSERT INTO `professor` VALUES ('10', 'junior', '23342', 'rua2', '12121', '12123');
INSERT INTO `professor` VALUES ('11', 'junior', '23342', 'rua2', '12121', '12123');
INSERT INTO `professor` VALUES ('12', 'junior', '23342', 'rua2', '12121', '12123');

-- ----------------------------
-- Table structure for relatorio
-- ----------------------------
DROP TABLE IF EXISTS `relatorio`;
CREATE TABLE `relatorio` (
  `idrelatorio` int(20) NOT NULL AUTO_INCREMENT,
  `nomerelatorio` varchar(20) NOT NULL,
  `tiporelatorio` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idrelatorio`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of relatorio
-- ----------------------------
INSERT INTO `relatorio` VALUES ('1', 'casa', 'casa');
INSERT INTO `relatorio` VALUES ('2', 'casa', 'casa');
INSERT INTO `relatorio` VALUES ('3', 'casa', 'casa');
INSERT INTO `relatorio` VALUES ('4', 'casa', 'casa');
INSERT INTO `relatorio` VALUES ('5', 'casa', 'casa');

-- ----------------------------
-- Table structure for turma
-- ----------------------------
DROP TABLE IF EXISTS `turma`;
CREATE TABLE `turma` (
  `idturma` int(11) NOT NULL AUTO_INCREMENT,
  `idaluno` int(11) NOT NULL,
  `idprofessor` int(11) NOT NULL,
  PRIMARY KEY (`idturma`,`idaluno`,`idprofessor`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of turma
-- ----------------------------
INSERT INTO `turma` VALUES ('1', '3216', '23121');
INSERT INTO `turma` VALUES ('2', '3216', '23121');
INSERT INTO `turma` VALUES ('3', '3216', '23121');
INSERT INTO `turma` VALUES ('4', '3216', '23121');
INSERT INTO `turma` VALUES ('5', '3216', '23121');
INSERT INTO `turma` VALUES ('6', '3216', '23121');
INSERT INTO `turma` VALUES ('7', '3216', '23121');
INSERT INTO `turma` VALUES ('8', '3216', '23121');
INSERT INTO `turma` VALUES ('9', '3216', '23121');
INSERT INTO `turma` VALUES ('10', '3216', '23121');

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `nomeUsuario` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  PRIMARY KEY (`idUsuario`,`email`,`senha`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
