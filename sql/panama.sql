/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : panama

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-06-29 21:10:12
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `la_empresa`
-- ----------------------------
DROP TABLE IF EXISTS `la_empresa`;
CREATE TABLE `la_empresa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img_header` varchar(60) DEFAULT NULL,
  `contenido_portada` text,
  `img_portada` varchar(60) DEFAULT NULL,
  `contenido` text,
  `img_contenido` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_empresa
-- ----------------------------
INSERT INTO `la_empresa` VALUES ('1', null, '<p>Trading Company S.A. Panamá Representaciones, fundada en 1993, Importadora y Exportadora, con sede en la ciudad de Pedro Juan Caballero, está formada por profesionales en diversas áreas que buscan siempre mejorar la calidad de atención y prestación de servicios, así como la expansión de todas sus marcas de alta calidad y excelente aceptación en el mercado. Desde su fundación, la empresa viene aportando a la comunidad fuentes de trabajo, desarrollo profesional y satisfacción personal, tanto a sus colaboradores como a sus asociados.</p>', 'mesa.png', '<p>Trading Company S.A. Panamá Representaciones, fundada en 1993, Importadora y Exportadora, con sede en la ciudad de Pedro Juan Caballero, está formada por profesionales en diversas áreas que buscan siempre mejorar la calidad de atención y prestación de servicios, así como la expansión de todas sus marcas de alta calidad y excelente aceptación en el mercado. Desde su fundación, la empresa viene aportando a la comunidad fuentes de trabajo, desarrollo profesional y satisfacción personal, tanto a sus colaboradores como a sus asociados.</p>\r\n<p>Representa con exclusividad en el Paraguay la Marca YPÉ, línea completa de productos de higiene y limpieza, que ha alcanzado los primeros lugares en el mercado brasileño y que ahora obtiene el mismo ranking en el mercado paraguayo, logrando conquistar a las amas de casa, cuidando del hogar con cariño y dedicación para el bienestar de todas las familias.</p>\r\n<p>También somos representante exclusivo en Paraguay de la Marca de golosinas FINI, que es la marca líder en mercado brasileño en caramelo de gelatina, marshmallow, chicles y regaliz.</p>\r\n<p>Distribuimos exclusivamente la Marca Nestlé y la línea de higiene bucal Colgate para todo el norte del país, manteniendo el mismo sistema de distribución mundial, con dinamismo y confiabilidad que caracterizan a la marca.</p>\r\n<p>La empresa tiene el compromiso de ser una referencia entre los distribuidores del país en la calidad de productos, atención al cliente y trabajo en equipo con los Sub-Distribuidores localizados en puntos estratégicos de todo el territorio nacional.</p>\r\n<p>Capacidad de planificación, programa de desarrollo, estructura logística, capacitación constante del personal y compromiso con el medio ambiente, son diferenciales que hacen de Panamá Representaciones una empresa seria, sólida, en constante crecimiento y que logra estar entre las empresas más destacadas y reconocidas, que respeta a las personas y a la naturaleza, ofreciendo satisfacción a las necesidades de los consumidores de una forma cordial, honesta, rápida y responsable.</p>', null);

-- ----------------------------
-- Table structure for `marca`
-- ----------------------------
DROP TABLE IF EXISTS `marca`;
CREATE TABLE `marca` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(60) NOT NULL,
  `img` varchar(60) NOT NULL,
  `estado` int(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of marca
-- ----------------------------
INSERT INTO `marca` VALUES ('1', 'Brahma', 'brahma.jpg', '1');
INSERT INTO `marca` VALUES ('2', 'Budweiser', 'budweiser.jpg', '1');
INSERT INTO `marca` VALUES ('3', 'Colgate', 'colgate.jpg', '1');
INSERT INTO `marca` VALUES ('4', 'Fini', 'fini.jpg', '1');
INSERT INTO `marca` VALUES ('5', 'Nestle', 'nestle.jpg', '1');
INSERT INTO `marca` VALUES ('6', 'Ouro Fino', 'ourofino.jpg', '1');
INSERT INTO `marca` VALUES ('7', 'Palmolive', 'palmolive.jpg', '1');
INSERT INTO `marca` VALUES ('8', 'Protex', 'protex.jpg', '1');
INSERT INTO `marca` VALUES ('9', 'Ype', 'ype.jpg', '1');

-- ----------------------------
-- Table structure for `slider`
-- ----------------------------
DROP TABLE IF EXISTS `slider`;
CREATE TABLE `slider` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(60) NOT NULL,
  `url` varchar(120) DEFAULT NULL,
  `texto_enlace` varchar(45) DEFAULT NULL,
  `orden` int(10) unsigned DEFAULT NULL,
  `estado` int(1) unsigned DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of slider
-- ----------------------------
INSERT INTO `slider` VALUES ('1', 'banner-fidi_1367.jpg', '#', 'Descubre más', '1', '1');
INSERT INTO `slider` VALUES ('2', 'banner_ype_1367.jpg', '#', 'Descubre más', '2', '1');
INSERT INTO `slider` VALUES ('3', 'banner_variados_1367.jpg', '#', 'Descubre más', '3', '1');
