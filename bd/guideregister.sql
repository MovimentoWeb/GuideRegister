/*
Navicat MySQL Data Transfer

Source Server         : Minha conexão
Source Server Version : 50617
Source Host           : 127.0.0.1:3306
Source Database       : guideregister

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2015-03-03 15:49:15
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for aluno
-- ----------------------------
DROP TABLE IF EXISTS `aluno`;
CREATE TABLE `aluno` (
  `idAluno` int(11) NOT NULL AUTO_INCREMENT,
  `nomeAluno` varchar(255) NOT NULL,
  `matricula` int(11) NOT NULL,
  `dtNascimento` date DEFAULT NULL,
  `rg` char(10) DEFAULT NULL,
  `cpf` char(11) NOT NULL,
  `dataCadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dataAtualizacao` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `idCurso` int(11) DEFAULT NULL,
  `curso` varchar(100) DEFAULT NULL,
  `PAturma` int(11) DEFAULT NULL,
  `idDisciplina` int(11) DEFAULT NULL,
  `disciplina` varchar(255) DEFAULT NULL,
  `ativo` bit(1) NOT NULL DEFAULT b'1',
  PRIMARY KEY (`idAluno`,`cpf`,`matricula`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of aluno
-- ----------------------------
INSERT INTO `aluno` VALUES ('1', 'Reginaldo', '123456', '0000-00-00', '2147483647', '2147483647', '2015-02-26 08:54:13', '2015-03-01 20:49:27', null, null, null, null, null, '\0');
INSERT INTO `aluno` VALUES ('2', 'Reginaldo', '123456', '0000-00-00', '2147483647', '2147483647', '2015-02-26 08:54:13', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('3', 'Reginaldo', '123456', '0000-00-00', '2147483647', '2147483647', '2015-02-26 08:55:13', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('4', 'Reginaldo', '123456', '0000-00-00', '2147483647', '2147483647', '2015-02-26 08:55:13', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('5', 'Reginaldo', '123456', '0000-00-00', '2147483647', '2147483647', '2015-02-26 08:55:37', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('6', 'Reginaldo', '123456', '0000-00-00', '2147483647', '2147483647', '2015-02-26 08:55:37', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('7', 'Reginaldo', '123456', '0000-00-00', '2147483647', '2147483647', '2015-02-26 08:58:39', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('8', 'Reginaldo', '123456', '0000-00-00', '2147483647', '2147483647', '2015-02-26 08:58:39', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('9', 'Reginaldo', '123456', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:00:02', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('10', 'Reginaldo', '123456', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:00:02', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('11', 'Reginaldo', '123456', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:04:22', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('12', 'Reginaldo', '123456', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:04:22', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('13', 'Reginaldo', '123456', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:08:09', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('14', 'Reginaldo', '123456', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:08:09', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('15', 'Reginaldo', '123456', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:10:12', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('16', 'Reginaldo', '123456', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:10:12', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('17', 'Reginaldo', '123456', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:10:53', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('18', 'Reginaldo', '123456', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:10:53', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('19', 'Reginaldo', '123456', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:11:10', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('20', 'Reginaldo', '123456', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:11:46', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('21', 'Reginaldo', '123456', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:11:46', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('22', 'Reginaldo', '123456', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:14:17', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('23', 'Reginaldo', '123456', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:14:17', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('24', 'Reginaldo', '123456', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:14:46', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('25', 'Reginaldo', '123456', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:14:46', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('26', 'Reginaldo', '123456', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:15:10', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('27', 'Reginaldo', '123456', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:15:10', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('28', 'Reginaldo JosÃ©', '123456', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:17:04', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('29', 'Reginaldo JosÃ©', '123456', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:17:04', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('30', 'Reginaldo JosÃ© de lima', '123456', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:21:18', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('31', 'Reginaldo JosÃ© de lima silva', '123456', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:21:19', '2015-03-01 16:23:59', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('32', 'Fuinha', '123456', '0000-00-00', '55555555', '2147483647', '2015-02-26 09:22:40', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('33', 'Fuinha', '123456', '0000-00-00', '55555555', '2147483647', '2015-02-26 09:22:40', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('34', 'Fuinha', '123456', '0000-00-00', '55555555', '2147483647', '2015-02-26 09:27:25', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('35', 'Fuinha', '123456', '0000-00-00', '55555555', '2147483647', '2015-02-26 09:27:25', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('36', 'Fuinha MendonÃ§a', '123456', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:27:52', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('37', 'Fuinha MendonÃ§a', '123456', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:27:52', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('38', 'Fuinha MendonÃ§a de lima', '123456', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:33:57', '0000-00-00 00:00:00', null, '2', null, null, null, '');
INSERT INTO `aluno` VALUES ('39', 'Fuinha MendonÃ§a de lima', '123456', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:33:57', '0000-00-00 00:00:00', null, '2', null, null, null, '');
INSERT INTO `aluno` VALUES ('40', 'Fuinha MendonÃ§a de lima', '123456', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:42:51', '0000-00-00 00:00:00', '0', '2', null, null, null, '');
INSERT INTO `aluno` VALUES ('41', 'Fuinha MendonÃ§a de lima', '123456', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:42:51', '0000-00-00 00:00:00', '0', '2', null, null, null, '');
INSERT INTO `aluno` VALUES ('42', 'Fuinha MendonÃ§a de lima', '123456', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:54:17', '0000-00-00 00:00:00', '0', '2', null, null, null, '');
INSERT INTO `aluno` VALUES ('43', 'Fuinha MendonÃ§a de lima', '123456', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:54:17', '0000-00-00 00:00:00', '0', '2', null, null, null, '');
INSERT INTO `aluno` VALUES ('44', 'Fuinha MendonÃ§a de lima', '123456', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:55:36', '0000-00-00 00:00:00', '0', '2', null, null, null, '');
INSERT INTO `aluno` VALUES ('45', 'Fuinha MendonÃ§a de lima', '123456', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:55:36', '0000-00-00 00:00:00', '0', '2', null, null, null, '');
INSERT INTO `aluno` VALUES ('46', 'Fuinha MendonÃ§a de lima', '123456', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:56:23', '0000-00-00 00:00:00', '0', '2', null, null, null, '');
INSERT INTO `aluno` VALUES ('47', 'Fuinha MendonÃ§a de lima', '123456', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:56:24', '0000-00-00 00:00:00', '0', '2', null, null, null, '');
INSERT INTO `aluno` VALUES ('48', 'Fuinha MendonÃ§a de lima', '123456', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:56:38', '0000-00-00 00:00:00', '0', '2', null, null, null, '');
INSERT INTO `aluno` VALUES ('49', 'Fuinha MendonÃ§a de lima', '123456', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:56:38', '0000-00-00 00:00:00', '0', '2', null, null, null, '');
INSERT INTO `aluno` VALUES ('50', 'Fuinha MendonÃ§a de lima', '123456', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:56:50', '0000-00-00 00:00:00', '0', '2', null, null, null, '');
INSERT INTO `aluno` VALUES ('51', 'Fuinha MendonÃ§a de lima', '123456', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:56:50', '0000-00-00 00:00:00', '0', '2', null, null, null, '');
INSERT INTO `aluno` VALUES ('52', 'Fuinha MendonÃ§a de lima', '123456', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:57:25', '0000-00-00 00:00:00', '0', '2', null, null, null, '');
INSERT INTO `aluno` VALUES ('53', 'Fuinha MendonÃ§a de lima', '123456', '0000-00-00', '2147483647', '2147483647', '2015-02-26 09:57:25', '0000-00-00 00:00:00', '0', '2', null, null, null, '');
INSERT INTO `aluno` VALUES ('54', '', '0', null, null, '0', '2015-02-26 10:19:29', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('55', 'toshy MendonÃ§a', '123456', '0000-00-00', '55555555', '2147483647', '2015-02-26 10:47:22', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('56', 'toshy MendonÃ§a', '123456', '0000-00-00', '55555555', '2147483647', '2015-02-26 10:49:17', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('57', 'toshy MendonÃ§a de lima', '123456', '0000-00-00', '2147483647', '2147483647', '2015-02-26 10:49:37', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('58', 'toshy MendonÃ§a de lima', '123456', '0000-00-00', '2147483647', '2147483647', '2015-02-26 10:51:45', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('59', 'Fuinha MendonÃ§a', '123456', '0000-00-00', '2147483647', '2147483647', '2015-02-26 10:52:18', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('60', 'Fuinha MendonÃ§a', '123456', '0000-00-00', '2147483647', '2147483647', '2015-02-26 10:52:38', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('61', 'toshy MendonÃ§a', '123456', '0000-00-00', '2147483647', '2147483647', '2015-02-26 10:53:08', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('62', 'toshy MendonÃ§a', '123456', '0000-00-00', '2147483647', '2147483647', '2015-02-26 11:23:36', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('63', 'toshy MendonÃ§a', '123456', '0000-00-00', '2147483647', '2147483647', '2015-02-26 11:39:06', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('64', 'Fuinha MendonÃ§a de lima', '123456', '0000-00-00', '2147483647', '2147483647', '2015-02-26 11:40:11', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('65', 'Taynara', '123456', '0000-00-00', '2147483647', '2147483647', '2015-02-26 17:49:16', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('66', 'toshy MendonÃ§a de lima', '123456', '0000-00-00', '2147483647', '2147483647', '2015-02-27 09:19:15', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('67', 'Fuinha MendonÃ§a de lima', '123456', '0000-00-00', '2147483647', '2147483647', '2015-02-27 09:24:17', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('68', 'Fuinha MendonÃ§a de lima', '123456', '0000-00-00', '2147483647', '2147483647', '2015-02-27 09:26:09', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('69', 'Fuinha MendonÃ§a de lima', '123456', '0000-00-00', '2147483647', '2147483647', '2015-02-27 09:26:57', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('70', 'Fuinha MendonÃ§a de lima', '123456', '0000-00-00', '2147483647', '2147483647', '2015-02-27 09:27:47', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('71', 'Fuinha', '123456', '0000-00-00', '2147483647', '2147483647', '2015-02-27 09:28:14', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('72', 'Fuinha', '123456', '0000-00-00', '2147483647', '2147483647', '2015-02-27 09:29:55', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('73', 'JoÃ£o Victor', '123456', '0000-00-00', '2147483647', '2147483647', '2015-02-27 21:13:02', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('74', 'Gabriel Pessoa', '123456', '0000-00-00', '55555555', '2147483647', '2015-02-28 11:33:19', '0000-00-00 00:00:00', null, null, null, null, null, '');
INSERT INTO `aluno` VALUES ('75', 'Angela', '123456', '0000-00-00', '6056218', '1234567890', '2015-02-28 19:43:14', '2015-03-03 10:39:51', null, null, null, null, null, '\0');
INSERT INTO `aluno` VALUES ('76', 'Teste teste teste teste regi', '654321', '0000-00-00', '1234567', '00000000000', '2015-03-01 16:26:06', '2015-03-01 16:58:49', null, null, null, null, null, '');

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
-- Table structure for curso
-- ----------------------------
DROP TABLE IF EXISTS `curso`;
CREATE TABLE `curso` (
  `idcursos` int(11) NOT NULL AUTO_INCREMENT,
  `nomeCurso` varchar(255) DEFAULT NULL,
  `dataCriacao` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `dataAtualizacao` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `disciplinas` text,
  PRIMARY KEY (`idcursos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of curso
-- ----------------------------

-- ----------------------------
-- Table structure for disciplina
-- ----------------------------
DROP TABLE IF EXISTS `disciplina`;
CREATE TABLE `disciplina` (
  `idDisciplina` int(11) NOT NULL AUTO_INCREMENT,
  `codDisciplina` varchar(60) DEFAULT NULL,
  `nomeDisciplina` varchar(255) DEFAULT NULL,
  `ch` int(10) DEFAULT NULL,
  `dataCad` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `dataAtualizacao` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `idProfessor` int(11) DEFAULT NULL,
  `nomeProfessor` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idDisciplina`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of disciplina
-- ----------------------------
INSERT INTO `disciplina` VALUES ('1', '511', 'conclusao do curso', '1500', '2015-03-02 14:59:09', null, '0', '');

-- ----------------------------
-- Table structure for frequencia
-- ----------------------------
DROP TABLE IF EXISTS `frequencia`;
CREATE TABLE `frequencia` (
  `idFreq` int(11) NOT NULL,
  PRIMARY KEY (`idFreq`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of frequencia
-- ----------------------------

-- ----------------------------
-- Table structure for professor
-- ----------------------------
DROP TABLE IF EXISTS `professor`;
CREATE TABLE `professor` (
  `idprofessor` int(20) NOT NULL AUTO_INCREMENT,
  `nomeProfessor` varchar(20) DEFAULT NULL,
  `dtNascimento` varchar(20) DEFAULT NULL,
  `rg` varchar(20) DEFAULT NULL,
  `cpf` decimal(20,0) DEFAULT NULL,
  `dtAdmissao` decimal(20,0) DEFAULT NULL,
  PRIMARY KEY (`idprofessor`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of professor
-- ----------------------------
INSERT INTO `professor` VALUES ('1', 'junior', '0000-00-00', 'rua2', '12121', '12123');
INSERT INTO `professor` VALUES ('2', 'junior', '0000-00-00', 'rua2', '12121', '12123');
INSERT INTO `professor` VALUES ('3', 'junior', '0000-00-00', 'rua2', '12121', '12123');
INSERT INTO `professor` VALUES ('4', 'junior', '0000-00-00', 'rua2', '12121', '12123');
INSERT INTO `professor` VALUES ('5', 'junior', '0000-00-00', 'rua2', '12121', '12123');
INSERT INTO `professor` VALUES ('6', 'junior', '0000-00-00', 'rua2', '12121', '12123');
INSERT INTO `professor` VALUES ('7', 'junior', '0000-00-00', 'rua2', '12121', '12123');
INSERT INTO `professor` VALUES ('8', 'junior', '0000-00-00', 'rua2', '12121', '12123');
INSERT INTO `professor` VALUES ('9', 'junior', '0000-00-00', 'rua2', '12121', '12123');
INSERT INTO `professor` VALUES ('10', 'junior', '0000-00-00', 'rua2', '12121', '12123');
INSERT INTO `professor` VALUES ('11', 'junior', '0000-00-00', 'rua2', '12121', '12123');
INSERT INTO `professor` VALUES ('12', 'junior', '0000-00-00', 'rua2', '12121', '12123');
INSERT INTO `professor` VALUES ('13', 'gabriel pessoa', '20/07/1997', '1234578', '12345678910', '20');

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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of turma
-- ----------------------------
INSERT INTO `turma` VALUES ('1', '556', '1500', null, '0', 'Redes', '2015-02-28 23:02:30', '2015-02-28 23:56:49', null, '0');
INSERT INTO `turma` VALUES ('2', '254', '1200', null, '0', 'tecnico em informatica', '2015-02-28 23:02:30', '2015-02-28 23:56:51', null, '0');
INSERT INTO `turma` VALUES ('3', '249', '1300', null, '0', 'Redes', '2015-02-28 23:02:30', '2015-02-28 23:56:52', null, '0');
INSERT INTO `turma` VALUES ('4', '689', '600', null, '0', 'Cabelereiro', '2015-02-28 23:02:30', '2015-02-28 23:56:56', null, '0');
INSERT INTO `turma` VALUES ('5', '231', '640', null, '0', 'Garsom', '2015-02-28 23:02:30', '2015-02-28 23:56:57', null, '0');
INSERT INTO `turma` VALUES ('6', '566', '820', null, '0', 'Digitação', '2015-02-28 23:02:30', '2015-02-28 23:56:59', null, '0');
INSERT INTO `turma` VALUES ('7', '458', '730', null, '0', 'Informática Básica', '2015-02-28 23:02:30', '2015-02-28 23:57:01', null, '0');
INSERT INTO `turma` VALUES ('8', '982', '400', null, '0', 'Informática Avançada', '2015-02-28 23:02:30', '2015-02-28 23:57:03', null, '0');
INSERT INTO `turma` VALUES ('9', '314', '340', null, '0', 'Massagem', '2015-02-28 23:02:30', '2015-02-28 23:57:04', null, '0');
INSERT INTO `turma` VALUES ('10', '524', '650', null, '0', 'Estética', '2015-02-28 23:02:30', '2015-02-28 23:57:06', null, '0');
INSERT INTO `turma` VALUES ('11', '511', '1500', '', '0', '', '2015-03-03 11:52:53', '2015-03-03 11:52:53', null, '0');
INSERT INTO `turma` VALUES ('12', '100', '1000', '', '0', '', '2015-03-03 12:41:39', '2015-03-03 12:41:39', null, '0');

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nomeUsuario` varchar(255) NOT NULL,
  `dtNascimento` date NOT NULL,
  `rg` varchar(20) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `dtAdmissao` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `ativo` bit(1) NOT NULL DEFAULT b'1',
  PRIMARY KEY (`idUsuario`,`email`,`senha`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES ('1', 'gabriel pessoa', '1997-07-20', '7654321', '12345678910', '1997-07-20', '', '', '');
INSERT INTO `usuarios` VALUES ('2', 'reginho', '1997-07-20', '9876543', '10265173469', '1997-07-20', '', '', '\0');
INSERT INTO `usuarios` VALUES ('3', 'marcelo', '1997-07-20', '1234567', '12345678910', '1997-07-20', '', '', '');
