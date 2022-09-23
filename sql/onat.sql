/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : onat

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2022-09-23 10:15:05
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `equiptotal`
-- ----------------------------
DROP TABLE IF EXISTS `equiptotal`;
CREATE TABLE `equiptotal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `municipio` varchar(255) NOT NULL,
  `inventario` int(11) NOT NULL,
  `equipo` varchar(255) NOT NULL,
  `marca` varchar(255) NOT NULL,
  `datos` varchar(255) NOT NULL,
  `antiguedad` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `observacion` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of equiptotal
-- ----------------------------

-- ----------------------------
-- Table structure for `estrabajo`
-- ----------------------------
DROP TABLE IF EXISTS `estrabajo`;
CREATE TABLE `estrabajo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomestacion` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `monitor` varchar(255) NOT NULL,
  `teclado` varchar(255) NOT NULL,
  `mouse` varchar(255) NOT NULL,
  `impresora` varchar(255) NOT NULL,
  `escaner` varchar(255) NOT NULL,
  `bocinas` varchar(255) NOT NULL,
  `cddvdex` varchar(255) NOT NULL,
  `motherboard` varchar(255) NOT NULL,
  `microprocesador` varchar(255) NOT NULL,
  `ram` varchar(255) NOT NULL,
  `fuente` varchar(255) NOT NULL,
  `lectarjetas` varchar(255) NOT NULL,
  `cddvdint` varchar(255) NOT NULL,
  `ups` varchar(255) NOT NULL,
  `chasis` int(11) NOT NULL,
  `area` varchar(255) NOT NULL,
  `trabajadores_id` int(11) NOT NULL,
  `responsable` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `crated_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `estrabajo` (`trabajadores_id`),
  CONSTRAINT `estrabajo` FOREIGN KEY (`trabajadores_id`) REFERENCES `trabajadores` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of estrabajo
-- ----------------------------
INSERT INTO `estrabajo` VALUES ('1', 'asdasd', 'asdasd', 'asdasda', 'sdasdasd', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 'asda', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 'asdasdsd', 'asdasdas', '2147483647', 'asdasda', '1', 'dasdasdasd', '123123123', '12312313', '212312', '2147483647');

-- ----------------------------
-- Table structure for `migration`
-- ----------------------------
DROP TABLE IF EXISTS `migration`;
CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of migration
-- ----------------------------
INSERT INTO `migration` VALUES ('m000000_000000_base', '1662988833');
INSERT INTO `migration` VALUES ('m130524_201442_init', '1662988846');
INSERT INTO `migration` VALUES ('m190124_110200_add_verification_token_column_to_user_table', '1662988847');

-- ----------------------------
-- Table structure for `modentrada`
-- ----------------------------
DROP TABLE IF EXISTS `modentrada`;
CREATE TABLE `modentrada` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fentrada` date NOT NULL,
  `equipo` varchar(255) NOT NULL,
  `marca` varchar(255) NOT NULL,
  `inventario` varchar(255) NOT NULL,
  `procedencia` varchar(255) NOT NULL,
  `diagnostico` varchar(255) NOT NULL,
  `reparado` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of modentrada
-- ----------------------------
INSERT INTO `modentrada` VALUES ('4', '0000-00-00', 'asdasdasd', 'asdasdasd', 'asdasdasda', 'sdasdasda', 'sdasdasd', 'si', '456456', '456456', '456456', '45645645');

-- ----------------------------
-- Table structure for `modsalida`
-- ----------------------------
DROP TABLE IF EXISTS `modsalida`;
CREATE TABLE `modsalida` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fsalida` date NOT NULL,
  `equipo` varchar(255) NOT NULL,
  `marca` varchar(255) NOT NULL,
  `inventario` varchar(255) NOT NULL,
  `destino` varchar(255) NOT NULL,
  `piereparadas` varchar(255) NOT NULL,
  `recibe` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of modsalida
-- ----------------------------
INSERT INTO `modsalida` VALUES ('1', '0000-00-00', 'asdasdasdasd', 'asdasda', 'sdasda', 'sdasdas', 'dasdasd', 'asdasdasda', '158518518', '456', '85185185', '518518518');

-- ----------------------------
-- Table structure for `software`
-- ----------------------------
DROP TABLE IF EXISTS `software`;
CREATE TABLE `software` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `equipo` varchar(255) NOT NULL,
  `responsable` varchar(255) NOT NULL,
  `software` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `fecha` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of software
-- ----------------------------

-- ----------------------------
-- Table structure for `sserviciosxservidor`
-- ----------------------------
DROP TABLE IF EXISTS `sserviciosxservidor`;
CREATE TABLE `sserviciosxservidor` (
  `id` int(11) NOT NULL,
  `municipio` varchar(255) NOT NULL,
  `inventario` varchar(255) NOT NULL,
  `servidor` varchar(255) NOT NULL,
  `so` varchar(255) NOT NULL,
  `virtualizacion` varchar(255) NOT NULL,
  `software` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of sserviciosxservidor
-- ----------------------------

-- ----------------------------
-- Table structure for `trabajadores`
-- ----------------------------
DROP TABLE IF EXISTS `trabajadores`;
CREATE TABLE `trabajadores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `ci` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `nombre` (`nombre`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- ----------------------------
-- Records of trabajadores
-- ----------------------------
INSERT INTO `trabajadores` VALUES ('1', 'asdasd', 'asdasdas', 'dasdasdasdasd');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'Admin', 'aQhNiMMcKCc-3G7_md4OZWze0BLZHfTC', '$2y$13$Qn5y14Vus.k1ia7rSndwFeVsZ/w8X/1bcAQt4jOCLNa/dSlYCn/XC', null, 'admin@gmail.com', '10', '1662988992', '1662988992', 'BlHahjWVVIJOFkMzPapdGUI3Orkoy1xM_1662988992');
