/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : panama

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-06-30 22:39:50
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `blog`
-- ----------------------------
DROP TABLE IF EXISTS `blog`;
CREATE TABLE `blog` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(120) DEFAULT NULL,
  `contenido` text,
  `imagen` varchar(80) DEFAULT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `estado` int(1) unsigned DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of blog
-- ----------------------------
INSERT INTO `blog` VALUES ('1', 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porta metus at mauris iaculis ultrices. Aenean tincidunt ligula sapien, dapibus finibus lorem fermentum id. Sed libero quam, pharetra at blandit nec, congue nec eros. Praesent in libero ante. Nullam justo erat, volutpat ut dignissim eu, ullamcorper sed lectus. Fusce vulputate lacinia tempus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut finibus pharetra pulvinar. Praesent nisi dui, sollicitudin vitae justo nec, rutrum ornare libero. Suspendisse suscipit ex orci, vel lacinia urna mollis vel. Vivamus condimentum ex et nunc feugiat faucibus.</p>\r\n<p>Duis nec dignissim libero. Duis enim odio, tempus quis congue et, luctus ac sem. Aliquam at augue vitae enim rhoncus auctor. Nullam vitae purus lacus. Cras accumsan, sem eget pellentesque tempor, libero odio tristique est, id aliquet elit massa ut ex. Nam semper, velit et blandit pulvinar, odio dolor placerat enim, vitae ullamcorper tellus dolor in turpis. Suspendisse erat dui, eleifend sed urna sed, condimentum sodales arcu.</p>\r\n<p>In vitae libero ornare, pulvinar odio a, ultrices quam. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec velit augue, scelerisque placerat semper sit amet, faucibus sed erat. Aenean scelerisque diam massa, a porttitor diam dictum nec. Nullam sapien leo, semper sed convallis sit amet, dapibus ut diam. Aenean vestibulum mattis ipsum, sed tincidunt diam tincidunt non. Mauris ac turpis vel ante vehicula ultricies ut non nibh. Morbi aliquet nunc at risus efficitur fermentum. Aenean facilisis purus id erat dictum, ut cursus purus euismod. Quisque commodo nibh quis diam sollicitudin, vel congue eros efficitur. Fusce pharetra leo id sapien porttitor hendrerit. Sed justo mauris, imperdiet ac felis id, mattis semper ante. Donec eget dapibus sem, quis lacinia purus. In ut leo ipsum. Cras ut consequat sem, sed varius libero.</p>\r\n<p>Integer nec tempor dui. Aenean tempus ligula et dui ullamcorper, nec tempor lectus tincidunt. Ut dolor orci, aliquam eu pulvinar eu, mattis eget leo. Integer at nisl quis lorem mattis tincidunt. Curabitur massa massa, mattis non sapien a, interdum lacinia urna. Donec eget dapibus elit. Suspendisse placerat odio sit amet quam malesuada, sit amet dignissim mi commodo. Morbi sed tempus magna, id consectetur velit. Nunc placerat, tellus ac porta sollicitudin, lectus justo ultrices urna, non accumsan ligula sem at elit. Sed a auctor felis. Aliquam efficitur pellentesque ante at tristique. Suspendisse in ultrices lacus. Pellentesque suscipit porta semper. Proin pellentesque, sem eget tristique dapibus, dolor odio rutrum libero, semper tincidunt erat libero at dolor. Etiam tincidunt id lorem sed sollicitudin.</p>\r\n<p>Donec fringilla iaculis porta. Nam non dolor eget ipsum placerat porttitor et quis elit. Maecenas risus ligula, posuere a nibh non, lobortis euismod quam. Sed sed metus rhoncus, aliquet ligula at, pulvinar lorem. Ut quam nunc, posuere et porttitor ut, ultrices et justo. Pellentesque at augue a nulla hendrerit luctus eget a neque. Vestibulum a orci ut quam faucibus ullamcorper a sed lacus. Praesent ac augue felis. Maecenas ornare consectetur ipsum, non tempor neque tempor ac. Suspendisse efficitur nec enim ut vehicula. Etiam gravida porttitor leo, sed varius turpis eleifend sit amet.</p>', '1.jpg', 'post,contenido,blog,panama', '2017-06-30 20:54:14', '1');
INSERT INTO `blog` VALUES ('2', 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porta metus at mauris iaculis ultrices. Aenean tincidunt ligula sapien, dapibus finibus lorem fermentum id. Sed libero quam, pharetra at blandit nec, congue nec eros. Praesent in libero ante. Nullam justo erat, volutpat ut dignissim eu, ullamcorper sed lectus. Fusce vulputate lacinia tempus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut finibus pharetra pulvinar. Praesent nisi dui, sollicitudin vitae justo nec, rutrum ornare libero. Suspendisse suscipit ex orci, vel lacinia urna mollis vel. Vivamus condimentum ex et nunc feugiat faucibus.</p>', '2.jpg', 'post,contenido,blog,panama', '2017-06-30 20:54:14', '1');
INSERT INTO `blog` VALUES ('3', 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porta metus at mauris iaculis ultrices. Aenean tincidunt ligula sapien, dapibus finibus lorem fermentum id. Sed libero quam, pharetra at blandit nec, congue nec eros. Praesent in libero ante. Nullam justo erat, volutpat ut dignissim eu, ullamcorper sed lectus. Fusce vulputate lacinia tempus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut finibus pharetra pulvinar. Praesent nisi dui, sollicitudin vitae justo nec, rutrum ornare libero. Suspendisse suscipit ex orci, vel lacinia urna mollis vel. Vivamus condimentum ex et nunc feugiat faucibus.</p>', '3.jpg', 'post,contenido,blog,panama', '2017-06-30 20:54:14', '1');
INSERT INTO `blog` VALUES ('4', 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus porta metus at mauris iaculis ultrices. Aenean tincidunt ligula sapien, dapibus finibus lorem fermentum id. Sed libero quam, pharetra at blandit nec, congue nec eros. Praesent in libero ante. Nullam justo erat, volutpat ut dignissim eu, ullamcorper sed lectus. Fusce vulputate lacinia tempus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut finibus pharetra pulvinar. Praesent nisi dui, sollicitudin vitae justo nec, rutrum ornare libero. Suspendisse suscipit ex orci, vel lacinia urna mollis vel. Vivamus condimentum ex et nunc feugiat faucibus.</p>', '4.jpg', 'post,contenido,blog,panama', '2017-06-30 20:54:14', '1');

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
INSERT INTO `la_empresa` VALUES ('1', null, '<p>Trading Company S.A. Panamá Representaciones, fundada en 1993, Importadora y Exportadora, con sede en la ciudad de Pedro Juan Caballero, está formada por profesionales en diversas áreas que buscan siempre mejorar la calidad de atención y prestación de servicios, así como la expansión de todas sus marcas de alta calidad y excelente aceptación en el mercado. Desde su fundación, la empresa viene aportando a la comunidad fuentes de trabajo, desarrollo profesional y satisfacción personal, tanto a sus colaboradores como a sus asociados.</p>\r\n<p>Representa con exclusividad en el Paraguay la Marca YPÉ, línea completa de productos de higiene y limpieza, que ha alcanzado los primeros lugares en el mercado brasileño y que ahora obtiene el mismo ranking en el mercado paraguayo, logrando conquistar a las amas de casa, cuidando del hogar con cariño y dedicación para el bienestar de todas las familias.</p>', 'mesa.png', '<p>Trading Company S.A. Panamá Representaciones, fundada en 1993, Importadora y Exportadora, con sede en la ciudad de Pedro Juan Caballero, está formada por profesionales en diversas áreas que buscan siempre mejorar la calidad de atención y prestación de servicios, así como la expansión de todas sus marcas de alta calidad y excelente aceptación en el mercado. Desde su fundación, la empresa viene aportando a la comunidad fuentes de trabajo, desarrollo profesional y satisfacción personal, tanto a sus colaboradores como a sus asociados.</p>\r\n<p>Representa con exclusividad en el Paraguay la Marca YPÉ, línea completa de productos de higiene y limpieza, que ha alcanzado los primeros lugares en el mercado brasileño y que ahora obtiene el mismo ranking en el mercado paraguayo, logrando conquistar a las amas de casa, cuidando del hogar con cariño y dedicación para el bienestar de todas las familias.</p>\r\n<p>También somos representante exclusivo en Paraguay de la Marca de golosinas FINI, que es la marca líder en mercado brasileño en caramelo de gelatina, marshmallow, chicles y regaliz.</p>\r\n<p>Distribuimos exclusivamente la Marca Nestlé y la línea de higiene bucal Colgate para todo el norte del país, manteniendo el mismo sistema de distribución mundial, con dinamismo y confiabilidad que caracterizan a la marca.</p>\r\n<p>La empresa tiene el compromiso de ser una referencia entre los distribuidores del país en la calidad de productos, atención al cliente y trabajo en equipo con los Sub-Distribuidores localizados en puntos estratégicos de todo el territorio nacional.</p>\r\n<p>Capacidad de planificación, programa de desarrollo, estructura logística, capacitación constante del personal y compromiso con el medio ambiente, son diferenciales que hacen de Panamá Representaciones una empresa seria, sólida, en constante crecimiento y que logra estar entre las empresas más destacadas y reconocidas, que respeta a las personas y a la naturaleza, ofreciendo satisfacción a las necesidades de los consumidores de una forma cordial, honesta, rápida y responsable.</p>', null);

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
-- Table structure for `site_config`
-- ----------------------------
DROP TABLE IF EXISTS `site_config`;
CREATE TABLE `site_config` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `direccion` varchar(255) DEFAULT NULL,
  `telefono_header` varchar(45) DEFAULT NULL,
  `telefono_footer` varchar(60) DEFAULT NULL,
  `email_footer` varchar(60) DEFAULT NULL,
  `email_contacto` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of site_config
-- ----------------------------

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
