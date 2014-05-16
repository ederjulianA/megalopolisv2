/*
SQLyog Ultimate v9.02 
MySQL - 5.5.32 : Database - megalopolis
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `almacen` */

CREATE TABLE `almacen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `producto` int(11) NOT NULL,
  `sede` int(11) NOT NULL,
  `precio_detal` int(11) NOT NULL COMMENT 'El precio puede variar de sede a sede. Por ello dejo el precio en la relación.',
  `cantidad` double NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `almacen` */

insert  into `almacen`(`id`,`producto`,`sede`,`precio_detal`,`cantidad`,`created_at`,`updated_at`) values (1,1,1,13500,1,'0000-00-00 00:00:00',NULL);
insert  into `almacen`(`id`,`producto`,`sede`,`precio_detal`,`cantidad`,`created_at`,`updated_at`) values (2,2,1,10500,12,'0000-00-00 00:00:00',NULL);
insert  into `almacen`(`id`,`producto`,`sede`,`precio_detal`,`cantidad`,`created_at`,`updated_at`) values (3,1,3,12500,5,'0000-00-00 00:00:00',NULL);
insert  into `almacen`(`id`,`producto`,`sede`,`precio_detal`,`cantidad`,`created_at`,`updated_at`) values (17,25,7,8500,12,'2014-05-05 23:17:25','2014-05-05 23:17:25');
insert  into `almacen`(`id`,`producto`,`sede`,`precio_detal`,`cantidad`,`created_at`,`updated_at`) values (18,26,7,2500,50,'2014-05-06 03:08:48','2014-05-06 03:08:48');
insert  into `almacen`(`id`,`producto`,`sede`,`precio_detal`,`cantidad`,`created_at`,`updated_at`) values (19,27,8,8500,12,'2014-05-06 11:09:02','2014-05-06 11:09:02');

/*Table structure for table `barrios` */

CREATE TABLE `barrios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ciudad_id` int(11) NOT NULL,
  `barrio` varchar(150) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

/*Data for the table `barrios` */

insert  into `barrios`(`id`,`ciudad_id`,`barrio`,`created_at`,`updated_at`) values (1,1,'bar 1 ciudad 1','0000-00-00','0000-00-00');
insert  into `barrios`(`id`,`ciudad_id`,`barrio`,`created_at`,`updated_at`) values (2,1,'barrio 2 ciudad 1','0000-00-00','0000-00-00');
insert  into `barrios`(`id`,`ciudad_id`,`barrio`,`created_at`,`updated_at`) values (3,2,'Real de minas','0000-00-00','0000-00-00');
insert  into `barrios`(`id`,`ciudad_id`,`barrio`,`created_at`,`updated_at`) values (4,2,'San Francisco','0000-00-00','0000-00-00');
insert  into `barrios`(`id`,`ciudad_id`,`barrio`,`created_at`,`updated_at`) values (5,3,'barrio1 ciudad 3','0000-00-00','0000-00-00');
insert  into `barrios`(`id`,`ciudad_id`,`barrio`,`created_at`,`updated_at`) values (6,3,'barrio2 ciudad 3','0000-00-00','0000-00-00');
insert  into `barrios`(`id`,`ciudad_id`,`barrio`,`created_at`,`updated_at`) values (7,4,'barrio1 ciudad 4','0000-00-00','0000-00-00');
insert  into `barrios`(`id`,`ciudad_id`,`barrio`,`created_at`,`updated_at`) values (8,4,'barrio2 ciudad 4','0000-00-00','0000-00-00');
insert  into `barrios`(`id`,`ciudad_id`,`barrio`,`created_at`,`updated_at`) values (9,2,'Alfonso Lopez','0000-00-00','0000-00-00');
insert  into `barrios`(`id`,`ciudad_id`,`barrio`,`created_at`,`updated_at`) values (10,2,'La flora','0000-00-00','0000-00-00');
insert  into `barrios`(`id`,`ciudad_id`,`barrio`,`created_at`,`updated_at`) values (11,1,'chapinero','0000-00-00','0000-00-00');
insert  into `barrios`(`id`,`ciudad_id`,`barrio`,`created_at`,`updated_at`) values (12,1,'chapinero 2','0000-00-00','0000-00-00');

/*Table structure for table `categorias` */

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `sector` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

/*Data for the table `categorias` */

insert  into `categorias`(`id`,`nombre`,`sector`,`created_at`,`updated_at`) values (1,'Ropa y Accesorios',0,'0000-00-00','0000-00-00');
insert  into `categorias`(`id`,`nombre`,`sector`,`created_at`,`updated_at`) values (2,'Hamburguesas',0,'0000-00-00','0000-00-00');
insert  into `categorias`(`id`,`nombre`,`sector`,`created_at`,`updated_at`) values (3,'Perros calientes',0,'0000-00-00','0000-00-00');
insert  into `categorias`(`id`,`nombre`,`sector`,`created_at`,`updated_at`) values (4,'Tegnologia',0,'0000-00-00','0000-00-00');

/*Table structure for table `ciudades` */

CREATE TABLE `ciudades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ciudad` varchar(80) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

/*Data for the table `ciudades` */

insert  into `ciudades`(`id`,`ciudad`,`created_at`,`updated_at`) values (1,'Bogota','0000-00-00','0000-00-00');
insert  into `ciudades`(`id`,`ciudad`,`created_at`,`updated_at`) values (2,'Bucaramanga','0000-00-00','0000-00-00');
insert  into `ciudades`(`id`,`ciudad`,`created_at`,`updated_at`) values (3,'Medellin','0000-00-00','0000-00-00');
insert  into `ciudades`(`id`,`ciudad`,`created_at`,`updated_at`) values (4,'Cali','0000-00-00','0000-00-00');

/*Table structure for table `empresas` */

CREATE TABLE `empresas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `sector_id` int(11) NOT NULL,
  `ciudad_id` int(11) NOT NULL,
  `barrio` int(11) NOT NULL,
  `razon_social` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nombre_publico` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `desc_breve` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `desc_larga` text COLLATE utf8_unicode_ci,
  `direccion_principal` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `empresas` */

insert  into `empresas`(`id`,`user_id`,`sector_id`,`ciudad_id`,`barrio`,`razon_social`,`nombre_publico`,`desc_breve`,`desc_larga`,`direccion_principal`,`telefono`,`logo`,`created_at`,`updated_at`) values (1,8,1,4,0,'Mercagan ','mercagan','Descripción Breve de la empresa de prueba																																																																																								','Descripción larga  de la empresa Descripción larga  de la empresa Descripción larga  de la empresa Descripción larga  de la empresa Descripción larga  de la empresa Descripción larga  de la empresa Descripción larga  de la empresa																																																																																								','calle 45 # 35-38','76798829','img/empresas/2014-04-23-21-QXHARPcse4Jru-merca.jpg','0000-00-00 00:00:00','2014-05-01 01:15:41');
insert  into `empresas`(`id`,`user_id`,`sector_id`,`ciudad_id`,`barrio`,`razon_social`,`nombre_publico`,`desc_breve`,`desc_larga`,`direccion_principal`,`telefono`,`logo`,`created_at`,`updated_at`) values (2,9,2,2,0,'FC Barcelona','barcelona-fc','MAS QUE UN CLUB																																																																														','Equipo de Fútbol Situado en la ciudad de Barcelona España																																																																													','car 14 # 23-45','6827000','img/empresas/2014-04-12-00-BbUqBWvza5A8o-1080p-barcelona-team-2013-hd-wallpapers-4584.jpg','2014-04-07 19:09:20','2014-04-12 00:08:33');
insert  into `empresas`(`id`,`user_id`,`sector_id`,`ciudad_id`,`barrio`,`razon_social`,`nombre_publico`,`desc_breve`,`desc_larga`,`direccion_principal`,`telefono`,`logo`,`created_at`,`updated_at`) values (15,13,3,3,6,'creaciones maya test','MayaTest','empresa de confecciones maya test','empresa de confecciones maya testempresa de confecciones maya testempresa de confecciones maya testempresa de confecciones maya test','ave. las americas # 113-85 ','2887767','img/empresas/2014-04-30-21-h2yCUjkB7tFiX-maya.JPG','2014-04-30 21:53:58','2014-04-30 21:53:58');
insert  into `empresas`(`id`,`user_id`,`sector_id`,`ciudad_id`,`barrio`,`razon_social`,`nombre_publico`,`desc_breve`,`desc_larga`,`direccion_principal`,`telefono`,`logo`,`created_at`,`updated_at`) values (16,24,1,2,3,'Comida Gratis','comida-gratis','Todo lo que puedas comer.','Todo...','Calle 90 No. 17d-28','3184251825','img/empresas/2014-05-03-09-URJCLkgpA2wWj-DSC00322.JPG','2014-05-03 09:39:24','2014-05-03 09:39:24');
insert  into `empresas`(`id`,`user_id`,`sector_id`,`ciudad_id`,`barrio`,`razon_social`,`nombre_publico`,`desc_breve`,`desc_larga`,`direccion_principal`,`telefono`,`logo`,`created_at`,`updated_at`) values (17,25,3,2,9,'Prueba','prueba','Prueba.','Prueba.','Calle 90 No. 17d-28','188222','img/empresas/2014-05-06-03-dTEqre127fcKz-registrarse.png','2014-05-06 03:52:00','2014-05-06 03:52:00');

/*Table structure for table `migrations` */

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`migration`,`batch`) values ('2014_04_06_213302_create_table_users',1);

/*Table structure for table `preguntas` */

CREATE TABLE `preguntas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `empresa_id` int(11) NOT NULL,
  `pregunta` varchar(250) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `respuesta` varchar(250) COLLATE utf8mb4_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

/*Data for the table `preguntas` */

insert  into `preguntas`(`id`,`empresa_id`,`pregunta`,`respuesta`) values (1,1,'pregunta numero 1 ','respuesta de la pregunta 1');
insert  into `preguntas`(`id`,`empresa_id`,`pregunta`,`respuesta`) values (2,1,'pregunta numero 2','respuesta de la pregunta 2');

/*Table structure for table `producto` */

CREATE TABLE `producto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` int(11) NOT NULL,
  `nombre` varchar(145) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(145) COLLATE utf8_unicode_ci NOT NULL,
  `imagen` varchar(145) COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `producto` */

insert  into `producto`(`id`,`categoria`,`nombre`,`descripcion`,`imagen`,`updated_at`,`created_at`) values (1,2,'Hamburguesa doble carne','Carne de res, pollo, verduras y papa a la francesa.','img/hamburguer.jpg',NULL,'0000-00-00 00:00:00');
insert  into `producto`(`id`,`categoria`,`nombre`,`descripcion`,`imagen`,`updated_at`,`created_at`) values (2,3,'Perro americano','La especialidad de la casa.','img/hotdog.jpg',NULL,'0000-00-00 00:00:00');
insert  into `producto`(`id`,`categoria`,`nombre`,`descripcion`,`imagen`,`updated_at`,`created_at`) values (25,3,'Perro de prueba','Perro de prueba','img/products/2014-05-05-23-xPMiG628ovFCY-unnamed.png','2014-05-05 23:17:25','2014-05-05 23:17:25');
insert  into `producto`(`id`,`categoria`,`nombre`,`descripcion`,`imagen`,`updated_at`,`created_at`) values (26,1,'Escopolamina 500 gr','Escopolamina 500 gr','img/products/2014-05-06-03-ZhOi1lskAX4m8-10312046_10152375329062509_1212194698_n.jpg','2014-05-06 03:08:48','2014-05-06 03:08:48');
insert  into `producto`(`id`,`categoria`,`nombre`,`descripcion`,`imagen`,`updated_at`,`created_at`) values (27,3,'Perro de prueba','Perro de prueba','img/products/2014-05-06-11-EZbo6Mh6D3XNt-1.jpg','2014-05-06 11:09:01','2014-05-06 11:09:01');

/*Table structure for table `promociones` */

CREATE TABLE `promociones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sede_id` int(11) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `titulo` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `titulo_seo` varchar(250) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `descripcion_corta` varchar(250) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `descripcion_larga` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `estado` int(11) NOT NULL,
  `img` varchar(250) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

/*Data for the table `promociones` */

insert  into `promociones`(`id`,`sede_id`,`categoria_id`,`titulo`,`titulo_seo`,`descripcion_corta`,`descripcion_larga`,`estado`,`img`,`created_at`,`updated_at`) values (1,1,3,'Hamburguesa especial','Hamburguesa-especial','Promocion especial en nuestra mercagan junior','Aqui se espesifican las condiciones y restricciones de la promocion',1,'img/promociones/promo1.jpg','2014-05-02','2014-05-02');
insert  into `promociones`(`id`,`sede_id`,`categoria_id`,`titulo`,`titulo_seo`,`descripcion_corta`,`descripcion_larga`,`estado`,`img`,`created_at`,`updated_at`) values (2,1,3,'perro loco','perro-loco','Promo perro caliente','Aqui la descripcion, condiciones y restricciones de la promocion',1,'img/promociones/promo2.jpg','2014-05-02','2014-05-02');
insert  into `promociones`(`id`,`sede_id`,`categoria_id`,`titulo`,`titulo_seo`,`descripcion_corta`,`descripcion_larga`,`estado`,`img`,`created_at`,`updated_at`) values (3,3,3,'Pollo barato','pollo-barato','desc corta del pollo barato','desc largadesc largadesc largadesc larga',0,'img/promociones/2014-05-02-23-sqqKhk3qI8hip-promo3.jpg','2014-05-02','2014-05-02');
insert  into `promociones`(`id`,`sede_id`,`categoria_id`,`titulo`,`titulo_seo`,`descripcion_corta`,`descripcion_larga`,`estado`,`img`,`created_at`,`updated_at`) values (4,4,1,'Mega Bestido','Mega-bestido','Ultimas unidades no te los pierdas','Esta es la descripcion larga de la promo del bestido',0,'img/promociones/2014-05-03-02-N8wRItihaVuhC-ropa.jpg','2014-05-03','2014-05-03');
insert  into `promociones`(`id`,`sede_id`,`categoria_id`,`titulo`,`titulo_seo`,`descripcion_corta`,`descripcion_larga`,`estado`,`img`,`created_at`,`updated_at`) values (5,6,1,'promo1','promo1','desc breve','desc larga',0,'img/promociones/2014-05-03-03-8WMxuCma8TUOE-maya.JPG','2014-05-03','2014-05-03');
insert  into `promociones`(`id`,`sede_id`,`categoria_id`,`titulo`,`titulo_seo`,`descripcion_corta`,`descripcion_larga`,`estado`,`img`,`created_at`,`updated_at`) values (6,8,1,'Promoción','promocion-perro','Promoción de perros.','Promoción de perros largos.',0,'img/promociones/2014-05-06-03-raRpT0R7LPWvz-registrarse.png','2014-05-06','2014-05-06');

/*Table structure for table `sectores` */

CREATE TABLE `sectores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_sector` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `img` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

/*Data for the table `sectores` */

insert  into `sectores`(`id`,`nom_sector`,`img`,`created_at`,`updated_at`) values (1,'Comidas','img/sectores/comidas.jpg','0000-00-00','0000-00-00');
insert  into `sectores`(`id`,`nom_sector`,`img`,`created_at`,`updated_at`) values (2,'Ropa','img/sectores/ropa.jpg','0000-00-00','0000-00-00');
insert  into `sectores`(`id`,`nom_sector`,`img`,`created_at`,`updated_at`) values (3,'Confecciones','img/sectores/confecciones.jpg','0000-00-00','0000-00-00');

/*Table structure for table `sedes` */

CREATE TABLE `sedes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `empresa_id` int(11) NOT NULL,
  `direccion` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `telefono` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `nombre_publico` varchar(250) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

/*Data for the table `sedes` */

insert  into `sedes`(`id`,`empresa_id`,`direccion`,`telefono`,`nombre_publico`,`created_at`,`updated_at`) values (1,1,'calle 45 # 35-38','6542020','mercagan-cabecera','2014-04-30','2014-05-02');
insert  into `sedes`(`id`,`empresa_id`,`direccion`,`telefono`,`nombre_publico`,`created_at`,`updated_at`) values (3,1,'cabecera 5ta etapa','6827000','mercagan-centro','0000-00-00','2014-05-01');
insert  into `sedes`(`id`,`empresa_id`,`direccion`,`telefono`,`nombre_publico`,`created_at`,`updated_at`) values (4,15,'ave. las americas # 113-85 ','2887767','MayaTest777','2014-05-01','2014-05-03');
insert  into `sedes`(`id`,`empresa_id`,`direccion`,`telefono`,`nombre_publico`,`created_at`,`updated_at`) values (6,2,'car 14 # 23-45','6827000','barcelona-fc','2014-05-03','2014-05-03');
insert  into `sedes`(`id`,`empresa_id`,`direccion`,`telefono`,`nombre_publico`,`created_at`,`updated_at`) values (7,16,'Calle 90 No. 17d-28','3184251825','san-luis','2014-05-03','2014-05-03');
insert  into `sedes`(`id`,`empresa_id`,`direccion`,`telefono`,`nombre_publico`,`created_at`,`updated_at`) values (8,17,'Calle 90 No. 17d-28','188222','perroscalientes','2014-05-06','2014-05-06');

/*Table structure for table `subcategorias` */

CREATE TABLE `subcategorias` (
  `id` int(11) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `nombre_sub` varchar(150) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

/*Data for the table `subcategorias` */

insert  into `subcategorias`(`id`,`categoria_id`,`nombre_sub`,`created_at`,`updated_at`) values (0,1,'bolsos y carteras','0000-00-00','0000-00-00');
insert  into `subcategorias`(`id`,`categoria_id`,`nombre_sub`,`created_at`,`updated_at`) values (0,1,'Ropa femenina','0000-00-00','0000-00-00');
insert  into `subcategorias`(`id`,`categoria_id`,`nombre_sub`,`created_at`,`updated_at`) values (0,2,'Cuidado del cabello','0000-00-00','0000-00-00');
insert  into `subcategorias`(`id`,`categoria_id`,`nombre_sub`,`created_at`,`updated_at`) values (0,2,'cuidado del cuerpo','0000-00-00','0000-00-00');
insert  into `subcategorias`(`id`,`categoria_id`,`nombre_sub`,`created_at`,`updated_at`) values (0,3,'Comidas rapidas','0000-00-00','0000-00-00');
insert  into `subcategorias`(`id`,`categoria_id`,`nombre_sub`,`created_at`,`updated_at`) values (0,3,'Restaurantes gourmet','0000-00-00','0000-00-00');

/*Table structure for table `users` */

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_temp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`email`,`img`,`password`,`password_temp`,`code`,`tipo`,`active`,`remember_token`,`created_at`,`updated_at`) values (7,'demi','demi@gmail.com','img/users/2014-04-06-22-380534.png','$2y$10$WAPGZxCNYEQYI0oPnnty5OzIEYLe8b0uwN8iH0pjOU4uhHKDd9k8W','','',1,1,'','2014-04-06 22:47:18','2014-04-06 22:47:18');
insert  into `users`(`id`,`username`,`email`,`img`,`password`,`password_temp`,`code`,`tipo`,`active`,`remember_token`,`created_at`,`updated_at`) values (8,'ederjulianA','ederalvarez2009@hotmail.com','img/users/2014-04-06-22-1080p-barcelona-team-2013-hd-wallpapers-4584.jpg','$2y$10$93p2BXJXzCqpk/Vnr9EJNOlsYAIceWStRRRRnbD6ghwx0gW3.64D6','','',2,1,'5i2i80B0iAaMXnEnsD2bXyeq3PRCvS2qwhAbwottmx4WtPhS8x1t8FzJmRlH','2014-04-06 22:52:10','2014-05-03 02:39:19');
insert  into `users`(`id`,`username`,`email`,`img`,`password`,`password_temp`,`code`,`tipo`,`active`,`remember_token`,`created_at`,`updated_at`) values (9,'empresa1','empresa1@gmail.com','img/users/2014-04-07-16-falcao.jpg','$2y$10$ZAVBQVPLMsyqEMKqfpaFWeRbwpMMUk2nuWjJ4LW7id09taURy7Ckq','','',2,1,'iUvk8Vo0RaFQSvrGAA9N8EEqEIulrLRG9lQpSu8Pm0mSjd5cN8kZ1c8sdV1u','2014-04-07 16:56:35','2014-05-03 03:55:20');
insert  into `users`(`id`,`username`,`email`,`img`,`password`,`password_temp`,`code`,`tipo`,`active`,`remember_token`,`created_at`,`updated_at`) values (10,'empresa2','empresa2@gmail.com','img/users/2014-04-11-16-GHWT.jpg','$2y$10$lEmS7rSeYmbIOyJlknUZCuGb6KDKS6mTCrA2M.xR61faI/Qn2p4v.','','',2,1,'','2014-04-11 16:47:15','2014-04-11 16:47:15');
insert  into `users`(`id`,`username`,`email`,`img`,`password`,`password_temp`,`code`,`tipo`,`active`,`remember_token`,`created_at`,`updated_at`) values (11,'empresa4','empresa4@gmail.com','img/users/2014-04-11-18-380534.png','$2y$10$KJhgXGRBH7XcwktADxGJNuoo.0oFZrPUEdhoFosPqLtZhKtiJlKKC','','',2,1,'','2014-04-11 18:02:28','2014-04-11 18:02:28');
insert  into `users`(`id`,`username`,`email`,`img`,`password`,`password_temp`,`code`,`tipo`,`active`,`remember_token`,`created_at`,`updated_at`) values (12,'empresa5','empresa5@gmail.com','img/users/2014-04-12-14-kitty.png','$2y$10$7ojXGoUnvMecvJUGloQ5zuHAN461H4SoWIVfghov76fN9InSWFjYa','','',2,1,'','2014-04-12 14:23:27','2014-04-12 14:23:27');
insert  into `users`(`id`,`username`,`email`,`img`,`password`,`password_temp`,`code`,`tipo`,`active`,`remember_token`,`created_at`,`updated_at`) values (13,'empresa10','empresa10@gmail.com','img/users/2014-04-12-19-falcao.jpg','$2y$10$osBVhbOwncnR.3eScu1mk.iI642YkFDh0seOrFh21SKNAkf4B072C','','',2,1,'wMNXignVxRpA7Cm4zFOG9M71NlGMkhZFR0GVlQZbZOSF9o7mxLvz1wq0rkFe','2014-04-12 19:01:01','2014-05-03 02:48:17');
insert  into `users`(`id`,`username`,`email`,`img`,`password`,`password_temp`,`code`,`tipo`,`active`,`remember_token`,`created_at`,`updated_at`) values (18,'ederjulianA','ederalvarez2091057@gmail.com','img/users/2014-04-14-23-IMG_4615.JPG','$2y$10$J2TXJ4eiDO13u5l47KWfaevibm3inW5K5iDs9pChA//U1gznMJ0oC','','',1,1,'7a9A0CjVwftCtvW28qvRvRsqEDA0XtRNTumFOZPnp7oWg17vwtuoONxuiIHI','2014-04-14 23:35:09','2014-05-02 23:42:25');
insert  into `users`(`id`,`username`,`email`,`img`,`password`,`password_temp`,`code`,`tipo`,`active`,`remember_token`,`created_at`,`updated_at`) values (19,'laura','pecas654@hotmail.com','img/users/2014-04-14-23-IMG_5517.JPG','$2y$10$cubXsvfLeNSeLEteodmfVe0H1G5hxxjVB1gyKORXHsZbro.ZjMRLO','','',1,1,'','2014-04-14 23:40:47','2014-04-14 23:41:56');
insert  into `users`(`id`,`username`,`email`,`img`,`password`,`password_temp`,`code`,`tipo`,`active`,`remember_token`,`created_at`,`updated_at`) values (21,'ederjulianA','prueba12345678eder@gmail.com','img/users/2014-04-23-03-549310_553591994662751_250484142_n.jpg','$2y$10$1DL/c0jv8SWWS2BhCl6s/OIFEIUsWv.Vf8H0Tulx9zIBOEadgfRTK','','o0hEiT8Uw5faBlBKaD5VK1tlzWNXU9gsUEduN7bthKv2SgFfG9fbRiykiClo',1,0,'','2014-04-23 03:57:16','2014-04-23 03:57:16');
insert  into `users`(`id`,`username`,`email`,`img`,`password`,`password_temp`,`code`,`tipo`,`active`,`remember_token`,`created_at`,`updated_at`) values (22,'carlos','cvcarlosandres39@gmail.com','img/users/2014-04-23-16-call-of-duty-modern-warfare-3-mw3-xbox-360-disponible-ya-_MCO-F-19658871_2299.jpg','$2y$10$gXM9yQhroIEp1IZ8Fa5jWOkG.whJ8tv5/7eak8evl3kw5PVDsOYqu','','',2,1,'','2014-04-23 16:00:56','2014-04-23 16:03:25');
insert  into `users`(`id`,`username`,`email`,`img`,`password`,`password_temp`,`code`,`tipo`,`active`,`remember_token`,`created_at`,`updated_at`) values (23,'waking','thewalkingdead2091057@gmail.com','img/users/2014-04-23-21-primas.jpg','$2y$10$8d763ULyYvztaaLdyJ8Qb.b5gPp7OInJJ3lIABQ6UeyhOtyXXZI2m','','3iChvPW1ilfqOiryCWNntD0w6QvWXyZHXVPSjwlYtjhIl40vesD9HI4kP9qd',2,0,'','2014-04-23 21:32:58','2014-04-23 21:32:58');
insert  into `users`(`id`,`username`,`email`,`img`,`password`,`password_temp`,`code`,`tipo`,`active`,`remember_token`,`created_at`,`updated_at`) values (24,'lizcanojair','lizcanojair@gmail.com','img/users/2014-05-03-06-NBjy3H0hEbg53-1.jpg','$2y$10$yICl./1rYln.R4sUsMVFAeCLVQAMNu9dcx2jEcs0JYmuMXm2y9ALa','','',2,1,'85itkkHrgaN0YpyngTV0G4MoMG1PEdYOWXAN9Bhm8Uxfs5KwefuZlHuUIafq','2014-05-03 06:27:07','2014-05-06 11:04:40');
insert  into `users`(`id`,`username`,`email`,`img`,`password`,`password_temp`,`code`,`tipo`,`active`,`remember_token`,`created_at`,`updated_at`) values (25,'Marisola Rueda','lizcanojair@gmaily.com','img/users/2014-05-06-03-c5MtlU2hIGvON-1.jpg','$2y$10$k4dg2a1OFPwE7RukwgL5suP2Hoc2pLBhDOK5i8wd8x34fjjO6/aTW','','',2,1,'fJioxDVt2Yey3GDepG2ybHr7UBimzM9j0rTuN3fvH7LqJbkNqwMZeGyNoBoH','2014-05-06 03:45:55','2014-05-06 04:16:20');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
