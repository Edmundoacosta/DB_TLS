/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 100121
Source Host           : localhost:3306
Source Database       : bd_bodega

Target Server Type    : MYSQL
Target Server Version : 100121
File Encoding         : 65001

Date: 2017-05-26 17:46:57
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for articulo
-- ----------------------------
DROP TABLE IF EXISTS `articulo`;
CREATE TABLE `articulo` (
  `idarticulo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `id` varchar(45) DEFAULT NULL,
  `precio_compra` varchar(45) DEFAULT NULL,
  `precio_venta` varchar(45) DEFAULT NULL,
  `cantidad` varchar(45) DEFAULT NULL,
  `marcas_idmarcas` int(11) NOT NULL,
  `categoria_idcategoria` int(11) NOT NULL,
  `cliente_idCliente` int(11) NOT NULL,
  PRIMARY KEY (`idarticulo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of articulo
-- ----------------------------

-- ----------------------------
-- Table structure for categoria
-- ----------------------------
DROP TABLE IF EXISTS `categoria`;
CREATE TABLE `categoria` (
  `idcategoria` int(11) NOT NULL AUTO_INCREMENT,
  `libros` varchar(45) DEFAULT NULL,
  `lapiceros` varchar(45) DEFAULT NULL,
  `cuadernos` varchar(45) DEFAULT NULL,
  `fotocopias` varchar(45) DEFAULT NULL,
  `laminas` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idcategoria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of categoria
-- ----------------------------

-- ----------------------------
-- Table structure for cliente
-- ----------------------------
DROP TABLE IF EXISTS `cliente`;
CREATE TABLE `cliente` (
  `idCliente` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `edad` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idCliente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of cliente
-- ----------------------------

-- ----------------------------
-- Table structure for marcas
-- ----------------------------
DROP TABLE IF EXISTS `marcas`;
CREATE TABLE `marcas` (
  `idmarcas` int(11) NOT NULL AUTO_INCREMENT,
  `desconocidas` varchar(45) DEFAULT NULL,
  `standfor` varchar(45) DEFAULT NULL,
  `norma` varchar(45) DEFAULT NULL,
  `classic` varchar(45) DEFAULT NULL,
  `minerva` varchar(45) DEFAULT NULL,
  `bic` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idmarcas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of marcas
-- ----------------------------

-- ----------------------------
-- Table structure for proovedores
-- ----------------------------
DROP TABLE IF EXISTS `proovedores`;
CREATE TABLE `proovedores` (
  `idproovedores` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `cantidad` varchar(45) DEFAULT NULL,
  `costo` varchar(45) DEFAULT NULL,
  `user_iduser` int(11) NOT NULL,
  PRIMARY KEY (`idproovedores`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of proovedores
-- ----------------------------

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_usu` varchar(45) DEFAULT NULL,
  `password_usu` varchar(45) DEFAULT NULL,
  `email_usu` varchar(45) DEFAULT NULL,
  `telefono_usu` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'vicky', 'e10adc3949ba59abbe56e057f20f883e', 'vickychalam@yahoo.es', '991821846');
SET FOREIGN_KEY_CHECKS=1;
