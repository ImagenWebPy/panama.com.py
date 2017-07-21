/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : panama

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-07-20 21:25:51
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
-- Table structure for `categoria`
-- ----------------------------
DROP TABLE IF EXISTS `categoria`;
CREATE TABLE `categoria` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_marca` int(11) NOT NULL,
  `descripcion` varchar(60) NOT NULL,
  `imagen` varchar(120) DEFAULT NULL,
  `estado` int(10) unsigned DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of categoria
-- ----------------------------
INSERT INTO `categoria` VALUES ('1', '9', 'Jabón en Barra', 'ype_jabon_en_barra.png', '1');
INSERT INTO `categoria` VALUES ('2', '9', 'Detergente ', 'ype_detergentes.jpg', '1');
INSERT INTO `categoria` VALUES ('3', '9', 'Jabón en Polvo', 'ype_jabon_en_polvo.jpg', '1');
INSERT INTO `categoria` VALUES ('4', '9', 'Agua Sanitária y Alvejante', 'ype_agua_sanitaria.png', '1');
INSERT INTO `categoria` VALUES ('5', '9', 'Desinfectante', 'ype_desinfectante.jpg', '1');
INSERT INTO `categoria` VALUES ('6', '9', 'Jabón Liquido', 'ype_jabon_liquido.jpg', '1');
INSERT INTO `categoria` VALUES ('7', '9', 'Línea Cosmética', 'ype_linea_cosmetica.jpg', '1');
INSERT INTO `categoria` VALUES ('8', '9', 'Lustra Muebles', 'ype_lustra_muebles.jpg', '1');
INSERT INTO `categoria` VALUES ('9', '9', 'Suavizante de ropas', 'ype_suavizante_de_ropa.jpg', '1');
INSERT INTO `categoria` VALUES ('10', '9', 'Assolan', 'ype_assolan.jpg', '1');
INSERT INTO `categoria` VALUES ('11', '9', 'Multi-Uso', 'ype_multi_uso.jpg', '1');
INSERT INTO `categoria` VALUES ('12', '9', 'Perfex - Paños y Esponja Multiuso', 'ype_panos_y_esponjas.jpg', '1');

-- ----------------------------
-- Table structure for `categoria_header`
-- ----------------------------
DROP TABLE IF EXISTS `categoria_header`;
CREATE TABLE `categoria_header` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_categoria` int(11) unsigned NOT NULL,
  `img` varchar(120) DEFAULT NULL,
  `contenido` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of categoria_header
-- ----------------------------
INSERT INTO `categoria_header` VALUES ('1', '1', 'ype_header_jabon_en_barra.jpg', 'Él es el verdadero \"multiusos\", ya que  proporciona la limpieza en diversas situaciones, lava más y gasta menos. Es insustituible en la limpieza de la casa ,la ropa y los platos. Hecho con las materias primas más puras, proporciona firmeza ,rendimiento y alta durabilidad. Además,el jabón Ypê es glicerinado, que garantiza la transparencia y pureza. Probado por dermatólogos, se puede utilizar de muchas maneras diferentes y también asegura la preservación del medio ambiente, ya que es 100% biodegradable.');

-- ----------------------------
-- Table structure for `compromiso_social`
-- ----------------------------
DROP TABLE IF EXISTS `compromiso_social`;
CREATE TABLE `compromiso_social` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img_header` varchar(60) DEFAULT NULL,
  `contenido` text,
  `img_contenido` varchar(60) DEFAULT NULL,
  `mostrar_contratar` int(1) unsigned DEFAULT '1',
  `titulo_contratar` varchar(120) DEFAULT NULL,
  `contenido_contratar` text,
  `boton_contratar` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of compromiso_social
-- ----------------------------
INSERT INTO `compromiso_social` VALUES ('1', '2.jpg', '<p>Trading Company S.A., es una empresa joven que prioriza la calidad en sus servicios en el mercado paraguayo, siguiendo los parámetros internacionales de sus proveedores, asumiendo un rol formador de conciencia, tanto en las personas que conforman nuestro día-a-día como aquellas a quienes apuntamos siempre como la razón del trabajo arduo: el consumidor final. Aportando en la formación profesional de los agentes de transformación que forman la Familia Panamá, es nuestro ideal que esta tendencia de búsqueda del bienestar general de las personas y del cuidado al medio ambiente sea siempre la meta y la prioridad en el desarrollo de nuestras labores.</p>', null, '1', 'Trabajá con Nosotros', '<p>Formá parte de la base de datos de empleos de Panamá</p>', 'Enviá tu CV');

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
  `mostrar_contratar` int(1) unsigned DEFAULT '1',
  `titulo_contratar` varchar(120) DEFAULT NULL,
  `contenido_contratar` text,
  `boton_contratar` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_empresa
-- ----------------------------
INSERT INTO `la_empresa` VALUES ('1', '2.jpg', '<p>Trading Company S.A. Panamá Representaciones, fundada en 1993, Importadora y Exportadora, con sede en la ciudad de Pedro Juan Caballero, está formada por profesionales en diversas áreas que buscan siempre mejorar la calidad de atención y prestación de servicios, así como la expansión de todas sus marcas de alta calidad y excelente aceptación en el mercado. Desde su fundación, la empresa viene aportando a la comunidad fuentes de trabajo, desarrollo profesional y satisfacción personal, tanto a sus colaboradores como a sus asociados.</p>\r\n<p>Representa con exclusividad en el Paraguay la Marca YPÉ, línea completa de productos de higiene y limpieza, que ha alcanzado los primeros lugares en el mercado brasileño y que ahora obtiene el mismo ranking en el mercado paraguayo, logrando conquistar a las amas de casa, cuidando del hogar con cariño y dedicación para el bienestar de todas las familias.</p>', 'mesa.png', '<p>Trading Company S.A. Panamá Representaciones, fundada en 1993, Importadora y Exportadora, con sede en la ciudad de Pedro Juan Caballero, está formada por profesionales en diversas áreas que buscan siempre mejorar la calidad de atención y prestación de servicios, así como la expansión de todas sus marcas de alta calidad y excelente aceptación en el mercado. Desde su fundación, la empresa viene aportando a la comunidad fuentes de trabajo, desarrollo profesional y satisfacción personal, tanto a sus colaboradores como a sus asociados.</p>\r\n<p>Representa con exclusividad en el Paraguay la Marca YPÉ, línea completa de productos de higiene y limpieza, que ha alcanzado los primeros lugares en el mercado brasileño y que ahora obtiene el mismo ranking en el mercado paraguayo, logrando conquistar a las amas de casa, cuidando del hogar con cariño y dedicación para el bienestar de todas las familias.</p>\r\n<p>También somos representante exclusivo en Paraguay de la Marca de golosinas FINI, que es la marca líder en mercado brasileño en caramelo de gelatina, marshmallow, chicles y regaliz.</p>\r\n<p>Distribuimos exclusivamente la Marca Nestlé y la línea de higiene bucal Colgate para todo el norte del país, manteniendo el mismo sistema de distribución mundial, con dinamismo y confiabilidad que caracterizan a la marca.</p>\r\n<p>La empresa tiene el compromiso de ser una referencia entre los distribuidores del país en la calidad de productos, atención al cliente y trabajo en equipo con los Sub-Distribuidores localizados en puntos estratégicos de todo el territorio nacional.</p>\r\n<p>Capacidad de planificación, programa de desarrollo, estructura logística, capacitación constante del personal y compromiso con el medio ambiente, son diferenciales que hacen de Panamá Representaciones una empresa seria, sólida, en constante crecimiento y que logra estar entre las empresas más destacadas y reconocidas, que respeta a las personas y a la naturaleza, ofreciendo satisfacción a las necesidades de los consumidores de una forma cordial, honesta, rápida y responsable.</p>', null, '1', 'Trabajá con Nosotros', '<p>Formá parte de la base de datos de empleos de Panamá</p>', 'Enviá tu CV');

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
-- Table structure for `marca_header`
-- ----------------------------
DROP TABLE IF EXISTS `marca_header`;
CREATE TABLE `marca_header` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_marca` int(11) unsigned NOT NULL,
  `img` varchar(120) DEFAULT NULL,
  `contenido` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of marca_header
-- ----------------------------
INSERT INTO `marca_header` VALUES ('1', '9', 'ype_header.jpg', '<p>Nuestros productos son desarrollados para  contribuir con el movimiento diario, facilitar y  proporcionar  comodidad  en  la realización  de diversas tareas.  Al  crearlos,  nuestro objetivo es  satisfacer  las necesidades  de las personas que  conocen  el  valor de  una  casa  bien cuidada, de una ropa limpia y suave.Para corresponder a la confianza depositada por usted, privilegiamos  procesos que utilizan materia prima seleccionada y dan como resultado una excelente relación costo-beneficio, que sólo aquellos que utilizan Ypê saben.</p>');

-- ----------------------------
-- Table structure for `mision`
-- ----------------------------
DROP TABLE IF EXISTS `mision`;
CREATE TABLE `mision` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img_header` varchar(60) DEFAULT NULL,
  `contenido` text,
  `img_contenido` varchar(60) DEFAULT NULL,
  `mostrar_contratar` int(1) unsigned DEFAULT '1',
  `titulo_contratar` varchar(120) DEFAULT NULL,
  `contenido_contratar` text,
  `boton_contratar` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of mision
-- ----------------------------
INSERT INTO `mision` VALUES ('1', '2.jpg', '<p>La Misión de Panamá Representaciones, es poner a disposición de los consumidores de la comunidad y del país, productos de consumo masivo que, por su calidad, garantía de presencia permanente y respaldo de sus marcas, puedan satisfacer plenamente todas sus necesidades. Por esto, la empresa comercializa productos acabados y servicios que le permitan crear, desarrollar y mejorar los servicios y atención ya conocidos, buscando el permanente liderazgo a través de la conquista del gusto y preferencia de los consumidores. Construyendo una imagen de confiabilidad y afianzando los valores morales, éticos, de honestidad y seriedad en la relación con los proveedores, socios y funcionarios dependientes, trabajando con profesionalismo y desarrollando vínculos sostenibles con clientes en la búsqueda constante del progreso. Con el ideal de acompañar la evolución del mercado y aprovechar las oportunidades, movidos por una constante vocación de crecimiento, la empresa se desarrolla en base a la capitalización de las habilidades distintivas de sus colaboradores. Se propone a seguir creciendo en los negocios actuales y enaltecer las marcas que representa, diversificando las estrategias de trabajo, con el afán de lograr mayores dividendos a sus accionistas, mejorar la calidad de vida de sus colabores y sus familiar y contribuir al progreso del país.</p>', null, '1', 'Trabajá con Nosotros', '<p>Formá parte de la base de datos de empleos de Panamá</p>', 'Enviá tu CV');

-- ----------------------------
-- Table structure for `producto`
-- ----------------------------
DROP TABLE IF EXISTS `producto`;
CREATE TABLE `producto` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_categoria` int(11) unsigned NOT NULL,
  `nombre` varchar(120) DEFAULT NULL,
  `codigo` varchar(120) DEFAULT NULL,
  `contenido` text,
  `estado` int(1) unsigned DEFAULT NULL,
  `contenido_largo` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of producto
-- ----------------------------
INSERT INTO `producto` VALUES ('1', '1', 'Jabón en Barra NEUTRO', null, null, '1', null);
INSERT INTO `producto` VALUES ('2', '1', 'Jabón en Barra NEUTRO 200 g', null, null, '1', null);
INSERT INTO `producto` VALUES ('3', '1', 'Jabón en Barra Glicerinado Perfumado MULTIACTIVO', null, null, '1', null);
INSERT INTO `producto` VALUES ('4', '1', 'Jabón en Barra MULTIACTIVO 200 g', null, null, '1', null);
INSERT INTO `producto` VALUES ('5', '1', 'Jabón en Barra Glicerinado Perfumado FLORES Y FRUTAS', null, null, '1', null);
INSERT INTO `producto` VALUES ('6', '1', 'Jabón en Barra Glicerinado Perfumado FLORES Y FRUTAS 200 g', null, null, '1', null);
INSERT INTO `producto` VALUES ('7', '1', 'Jabón en Barra Glicerinado Perfumado FRESH', null, null, '1', null);
INSERT INTO `producto` VALUES ('8', '1', 'Jabón en Barra Glicerinado Perfumado FRESH 200 g', null, null, '1', null);
INSERT INTO `producto` VALUES ('9', '1', 'Jabón en Barra COCO con toque de avena', null, null, '1', null);

-- ----------------------------
-- Table structure for `producto_imagen`
-- ----------------------------
DROP TABLE IF EXISTS `producto_imagen`;
CREATE TABLE `producto_imagen` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_producto` int(11) NOT NULL,
  `imagen` varchar(120) DEFAULT NULL,
  `principal` int(11) DEFAULT '0',
  `estado` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of producto_imagen
-- ----------------------------
INSERT INTO `producto_imagen` VALUES ('1', '1', 'ype_producto_jabon_en_barra_neutro.jpg', '1', '1');
INSERT INTO `producto_imagen` VALUES ('2', '2', 'ype_jabon_en_barra_neutro_200g.jpg', '1', '1');
INSERT INTO `producto_imagen` VALUES ('3', '3', 'ype_jabon_en_barra_glicerinado_perfumado_multiactivo.jpg', '1', '1');
INSERT INTO `producto_imagen` VALUES ('4', '4', 'ype_jabon_en_barra_multiactivo_200g.jpg', '1', '1');
INSERT INTO `producto_imagen` VALUES ('5', '5', 'ype_jabon_en_barra_glicerinado_perfumado_flores_y_frutas.jpg', '1', '1');
INSERT INTO `producto_imagen` VALUES ('6', '6', 'ype_jabon_en_barra_glicerinado_perfumado_flores_y_frutas_200g.jpg', '1', '1');
INSERT INTO `producto_imagen` VALUES ('7', '7', 'ype_jabon_en_barra_glicerinado_perfumado_fresh.jpg', '1', '1');
INSERT INTO `producto_imagen` VALUES ('8', '8', 'ype_jabon_en_barra_glicerinado_perfumado_fresh_200g.jpg', '1', '1');
INSERT INTO `producto_imagen` VALUES ('9', '9', 'ype_jabon_en_barra_coco_con_toque_de_avena.jpg', '1', '1');

-- ----------------------------
-- Table structure for `site_config`
-- ----------------------------
DROP TABLE IF EXISTS `site_config`;
CREATE TABLE `site_config` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `direccion` varchar(255) DEFAULT NULL,
  `telefono_header` varchar(60) DEFAULT NULL,
  `telefono_footer` varchar(60) DEFAULT NULL,
  `email_footer` varchar(60) DEFAULT NULL,
  `email_contacto` varchar(60) DEFAULT NULL,
  `lunes_viernes` varchar(30) DEFAULT NULL,
  `sabado` varchar(30) DEFAULT NULL,
  `domingo` varchar(30) DEFAULT NULL,
  `mostrar_horario` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of site_config
-- ----------------------------
INSERT INTO `site_config` VALUES ('1', 'Ruta Eusebio Filemón Valdez, Km 2,5 camino a Capitán Bado - PJC', '+595 336 274238/9', '+595 336 274239 / +595 336 274738', 'contacto@panama.com.py', 'contacto@panama.com.py', '08:00 a 18:00', '08:00 a 12:00', 'Cerrado', '1');

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
