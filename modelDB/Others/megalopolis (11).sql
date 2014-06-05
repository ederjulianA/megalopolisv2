-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 05-06-2014 a las 17:50:20
-- Versión del servidor: 5.6.12-log
-- Versión de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `megalopolis`
--
CREATE DATABASE IF NOT EXISTS `megalopolis` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci;
USE `megalopolis`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `almacen`
--

CREATE TABLE IF NOT EXISTS `almacen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `producto` int(11) NOT NULL,
  `sede` int(11) NOT NULL,
  `precio_detal` int(11) NOT NULL COMMENT 'El precio puede variar de sede a sede. Por ello dejo el precio en la relaciÃ³n.',
  `cantidad` double NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=48 ;

--
-- Volcado de datos para la tabla `almacen`
--

INSERT INTO `almacen` (`id`, `producto`, `sede`, `precio_detal`, `cantidad`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 13500, 1, '0000-00-00', '0000-00-00'),
(2, 2, 1, 10500, 12, '0000-00-00', '0000-00-00'),
(3, 3, 4, 22000, 7, '0000-00-00', '0000-00-00'),
(4, 4, 4, 15000, 5, '0000-00-00', '0000-00-00'),
(5, 5, 4, 12000, 25, '0000-00-00', '0000-00-00'),
(6, 6, 4, 18000, 5, '0000-00-00', '0000-00-00'),
(7, 7, 4, 30000, 7, '0000-00-00', '0000-00-00'),
(8, 8, 4, 58000, 3, '0000-00-00', '0000-00-00'),
(9, 10, 1, 12500, 10, '2014-05-06', '2014-05-06'),
(10, 11, 3, 18000, 8, '2014-05-06', '2014-05-06'),
(11, 12, 1, 12500, 99, '2014-05-07', '2014-05-07'),
(12, 13, 1, 20500, 99, '2014-05-07', '2014-05-07'),
(13, 14, 3, 27900, 99, '2014-05-09', '2014-05-09'),
(14, 15, 3, 20000, 5, '2014-05-09', '2014-05-09'),
(15, 16, 3, 7000, 99, '2014-05-09', '2014-05-09'),
(16, 17, 10, 45500, 8, '2014-05-13', '2014-05-13'),
(17, 18, 3, 18000, 8, '2014-05-14', '2014-05-14'),
(18, 19, 11, 950000, 9, '2014-05-16', '2014-05-16'),
(19, 20, 11, 3450000, 9, '2014-05-16', '2014-05-16'),
(20, 21, 8, 34000, 34, '2014-05-16', '2014-05-16'),
(21, 22, 12, 3200000, 20, '2014-05-16', '2014-05-16'),
(22, 23, 13, 7800, 20, '2014-05-20', '2014-05-20'),
(23, 24, 13, 8000, 20, '2014-05-20', '2014-05-20'),
(24, 25, 13, 4500, 10, '2014-05-20', '2014-05-20'),
(25, 26, 13, 18900, 7, '2014-05-20', '2014-05-20'),
(26, 27, 13, 11200, 5, '2014-05-20', '2014-05-20'),
(27, 28, 6, 150000, 8, '2014-05-20', '2014-05-20'),
(28, 29, 6, 159000, 9, '2014-05-20', '2014-05-20'),
(29, 30, 6, 169900, 15, '2014-05-20', '2014-05-20'),
(30, 31, 12, 769000, 87, '2014-05-23', '2014-05-23'),
(31, 32, 14, 5500, 8, '2014-05-24', '2014-05-24'),
(32, 33, 3, 18000, 89, '2014-05-24', '2014-05-24'),
(33, 34, 15, 7500, 9, '2014-05-24', '2014-05-24'),
(34, 35, 15, 8900, 9, '2014-05-24', '2014-05-24'),
(35, 36, 15, 12000, 10, '2014-05-24', '2014-05-24'),
(36, 38, 1, 56000, 5, '2014-06-01', '2014-06-01'),
(37, 39, 8, 78999, 7, '2014-06-01', '2014-06-01'),
(38, 40, 3, 16900, 4, '2014-06-03', '2014-06-03'),
(39, 41, 8, 40000, 4, '2014-06-05', '2014-06-05'),
(40, 42, 8, 5500, 5, '2014-06-05', '2014-06-05'),
(41, 43, 8, 90000, 4, '2014-06-05', '2014-06-05'),
(42, 44, 6, 105000, 5, '2014-06-05', '2014-06-05'),
(43, 45, 6, 105000, 5, '2014-06-05', '2014-06-05'),
(44, 46, 6, 99900, 7, '2014-06-05', '2014-06-05'),
(45, 47, 6, 50000, 5, '2014-06-05', '2014-06-05'),
(46, 48, 6, 45000, 9, '2014-06-05', '2014-06-05'),
(47, 49, 6, 99000, 9, '2014-06-05', '2014-06-05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `barrios`
--

CREATE TABLE IF NOT EXISTS `barrios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ciudad_id` int(11) NOT NULL,
  `barrio` varchar(150) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `barrios`
--

INSERT INTO `barrios` (`id`, `ciudad_id`, `barrio`, `created_at`, `updated_at`) VALUES
(1, 1, 'bar 1 ciudad 1', '0000-00-00', '0000-00-00'),
(2, 1, 'barrio 2 ciudad 1', '0000-00-00', '0000-00-00'),
(3, 2, 'Real de minas', '0000-00-00', '0000-00-00'),
(4, 2, 'San Francisco', '0000-00-00', '0000-00-00'),
(5, 3, 'barrio1 ciudad 3', '0000-00-00', '0000-00-00'),
(6, 3, 'barrio2 ciudad 3', '0000-00-00', '0000-00-00'),
(7, 4, 'barrio1 ciudad 4', '0000-00-00', '0000-00-00'),
(8, 4, 'barrio2 ciudad 4', '0000-00-00', '0000-00-00'),
(9, 2, 'Alfonso Lopez', '0000-00-00', '0000-00-00'),
(10, 2, 'La flora', '0000-00-00', '0000-00-00'),
(11, 1, 'chapinero', '0000-00-00', '0000-00-00'),
(12, 1, 'chapinero 2', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Ropas y Accesorios', '0000-00-00', '0000-00-00'),
(2, 'Salud Y belleza', '0000-00-00', '0000-00-00'),
(3, 'Restaurantes y comidas', '0000-00-00', '0000-00-00'),
(4, 'Tecnologia', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudades`
--

CREATE TABLE IF NOT EXISTS `ciudades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ciudad` varchar(80) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `ciudades`
--

INSERT INTO `ciudades` (`id`, `ciudad`, `created_at`, `updated_at`) VALUES
(1, 'Bogota', '0000-00-00', '0000-00-00'),
(2, 'Bucaramanga', '0000-00-00', '0000-00-00'),
(3, 'Medellin', '0000-00-00', '0000-00-00'),
(4, 'Cali', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuadricula`
--

CREATE TABLE IF NOT EXISTS `cuadricula` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `idempresa` int(10) DEFAULT NULL,
  `imagen` varchar(20) DEFAULT NULL,
  `imagen2` varchar(20) DEFAULT NULL,
  `imagen3` varchar(20) DEFAULT NULL,
  `imagen4` varchar(20) DEFAULT NULL,
  `imagen5` varchar(20) DEFAULT NULL,
  `imagen6` varchar(20) DEFAULT NULL,
  `imagen7` varchar(20) DEFAULT NULL,
  `imagen8` varchar(20) DEFAULT NULL,
  `imagen9` varchar(20) DEFAULT NULL,
  `Nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `enlacecatalogo` varchar(20) DEFAULT NULL,
  `imgsector` varchar(20) DEFAULT NULL,
  `estado` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Volcado de datos para la tabla `cuadricula`
--

INSERT INTO `cuadricula` (`id`, `idempresa`, `imagen`, `imagen2`, `imagen3`, `imagen4`, `imagen5`, `imagen6`, `imagen7`, `imagen8`, `imagen9`, `Nombre`, `enlacecatalogo`, `imgsector`, `estado`) VALUES
(1, 24, 'local2.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'culcecitos', NULL, 'copatf.png', 1),
(3, 2, 'local.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'jim-sports', NULL, 'botella.png', 1),
(36, 1, 'local3.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'mercagan', NULL, 'copatf.png', 1),
(45, 28, 'local2.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'rapi-rico', NULL, 'botella.png', 1),
(42, 15, 'local2.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'MayaTest', NULL, 'botella.png', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE IF NOT EXISTS `empresas` (
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
  `estado` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=29 ;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`id`, `user_id`, `sector_id`, `ciudad_id`, `barrio`, `razon_social`, `nombre_publico`, `desc_breve`, `desc_larga`, `direccion_principal`, `telefono`, `logo`, `estado`, `created_at`, `updated_at`, `latitude`, `longitude`) VALUES
(1, 8, 1, 4, 0, 'Mercagan ', 'mercagan', 'Galaxy S4 captura todos tus momentos estés donde estés. Ahora, no sólo mirarás tus fotos, también podrás escucharlas y revivir tus recuerdos. Podrás hacer varias tomas de la misma escena.', 'tiene como visión consolidarnos como la mejor empresa a nivel nacional, en cuanto a la producción y venta de comidas rápidas, apoyándonos en instalaciones con la más alta tecnología para el manejo de nuestros productos.																																																																																							', 'calle 45 # 35-38', '1002999', 'img/empresas/2014-06-05-11-mdgWtyij36LH9-logo-mercagan.jpg', 1, '0000-00-00 00:00:00', '2014-06-05 16:45:23', 3.376421, -76.519048),
(2, 9, 2, 2, 0, 'Jim Sports', 'jim-sports', 'Todo en artículos deportivos 																																																																														', 'Nos encontramos dedicados a la importación y comercialización de artículos deportivos 																																																																													', 'car 14 # 23-45', '6827000', 'img/empresas/2014-04-12-00-BbUqBWvza5A8o-1080p-barcelona-team-2013-hd-wallpapers-4584.jpg', 1, '2014-04-08 00:09:20', '2014-05-28 10:32:44', NULL, NULL),
(15, 13, 3, 3, 6, 'creaciones maya test', 'MayaTest', 'empresa de confecciones maya test', 'empresa de confecciones maya testempresa de confecciones maya testempresa de confecciones maya testempresa de confecciones maya test and bla', 'ave. las americas # 113-85 ', '2887765', 'img/empresas/2014-05-21-16-BdS69NTpe6uh8-logo.jpg', 1, '2014-05-01 02:53:58', '2014-05-21 21:26:26', NULL, NULL),
(21, 26, 4, 2, 9, 'empresa de tecnologia', 'empresa-de-tecnologia', 'descripcion de la empresa de tecnologia', 'descripcion de la empresa de tecnologiadescripcion de la empresa de tecnologiadescripcion de la empresa de tecnologiadescripcion de la empresa de tecnologia', 'Cll 9 # 23-55 ', '6998765', 'img/empresas/2014-05-16-23-9U9gARreyZhOI-imac.jpg', 1, '2014-05-17 04:38:28', '2014-05-17 04:38:28', NULL, NULL),
(24, 31, 1, 2, 3, 'dulcecitos', 'culcecitos', 'Dulcecitos es una empresa santandereana ubicada en la ciudad de Bucaramanga dedicada a la producción y comercialización mas cosas', 'Dulcecitos es una empresa santandereana ubicada en la ciudad de Bucaramanga dedicada a la producción y comercialización de dulces y postres en distintas presentaciones para todo tipo de ocasiones', 'calle 9 # 23-55', '6345372', 'img/empresas/2014-05-24-14-tkqmIc1CSHpUx-LOGO.JPG', 1, '2014-05-24 19:21:28', '2014-05-24 19:21:59', NULL, NULL),
(28, 10, 1, 2, 9, 'rapi rico bucaramanga', 'rapi-rico', 'prueba mapa ', 'prueba mapa', 'cll 90 # 17t-25', '6545454', 'img/empresas/2014-05-30-23-9j31Et77eYJ8U-logo-rapi-rico.jpg', 1, '2014-05-31 04:08:13', '2014-05-31 04:08:13', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_04_06_213302_create_table_users', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE IF NOT EXISTS `preguntas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `empresa_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pregunta` varchar(250) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `respuesta` varchar(250) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `estado` int(11) NOT NULL DEFAULT '0',
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci AUTO_INCREMENT=31 ;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`id`, `empresa_id`, `user_id`, `pregunta`, `respuesta`, `estado`, `created_at`, `updated_at`) VALUES
(10, 15, 7, 'Cual es tu vestido mas caro', 'uno azul ', 1, '2014-05-12', '2014-05-12'),
(11, 15, 7, 'cuano valen las gafas negras', NULL, 0, '2014-05-12', '2014-05-12'),
(12, 15, 7, 'cuanto vale la chica de la portada', NULL, 0, '2014-05-12', '2014-05-12'),
(13, 2, 7, 'pregunta x', NULL, 0, '2014-05-13', '2014-05-13'),
(18, 19, 7, 'esta es la primer pregunta para la empresa 5', 'ok, aqui estoy respondiendo la primer pregunta que se hizo a esta empresa.', 0, '2014-05-16', '2014-05-16'),
(19, 19, 7, 'otra pregunta', NULL, 0, '2014-05-16', '2014-05-16'),
(20, 19, 7, 'pregunta larga pregunta larga pregunta larga pregunta larga pregunta larga pregunta larga', NULL, 0, '2014-05-16', '2014-05-16'),
(21, 20, 7, 'Hola buen día; quiero saber si venden el iphone 6 Gracias', NULL, 0, '2014-05-16', '2014-05-16'),
(23, 21, 7, 'primer pregunta', 'esta es la respuesta', 0, '2014-05-16', '2014-05-16'),
(24, 22, 7, 'Buenas quisiera saber si hacen envíos a domicilio. Gracias', 'Hola buen dia. si te encuentras en la ciudad de bucaramanga el envio es gratis.', 0, '2014-05-20', '2014-05-20'),
(25, 21, 7, 'Que precio tiene el Imac', NULL, 0, '2014-05-23', '2014-05-23'),
(26, 1, 7, 'hasta que hora atienden los festivos', 'de 11am - 10pm', 0, '2014-05-23', '2014-05-24'),
(27, 23, 30, 'tienen tortas de chocolate', 'claro que si, hay de 7700 y 12000', 0, '2014-05-24', '2014-05-24'),
(28, 1, 7, 'atienden eventos coorporativos ', 'si', 0, '2014-05-24', '2014-06-03'),
(29, 24, 7, 'valor del postre', 'el postre vale $5500', 0, '2014-05-24', '2014-05-24'),
(30, 2, 7, 'otra', 'bien', 0, '2014-05-28', '2014-05-28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` int(11) NOT NULL,
  `subcat_id` int(11) DEFAULT NULL,
  `nombre` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `imagen` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `imgSmall` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `estado` int(11) NOT NULL DEFAULT '1',
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`),
  FULLTEXT KEY `imagen` (`imagen`),
  FULLTEXT KEY `imagen_2` (`imagen`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=50 ;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `categoria`, `subcat_id`, `nombre`, `descripcion`, `imagen`, `imgSmall`, `estado`, `created_at`, `updated_at`) VALUES
(1, 2, NULL, 'Hamburguesa doble carne', 'Carne de res, pollo, verduras y papa a la francesa.', 'img/hamburguer.jpg', NULL, 1, '0000-00-00', '0000-00-00'),
(2, 3, NULL, 'Perro americano', 'La especialidad de la casa.', 'img/hotdog.jpg', NULL, 1, '0000-00-00', '0000-00-00'),
(3, 2, NULL, 'Vestido cool', 'Nueva colleccion', 'img/productos/vestido.jpg', NULL, 1, '0000-00-00', '0000-00-00'),
(4, 2, NULL, 'Zapatos Nuevos', 'Nuevo modelo', 'img/productos/zapatos.jpg', NULL, 1, '0000-00-00', '0000-00-00'),
(5, 3, NULL, 'Falda X', 'Nuestra Nueva falda', 'img/productos/falda.jpg', NULL, 1, '0000-00-00', '0000-00-00'),
(6, 2, NULL, 'Accesorios', 'Nuevo diseño', 'img/productos/accesorios.jpg', NULL, 1, '0000-00-00', '0000-00-00'),
(7, 2, NULL, 'Gafas', 'Unicas', 'img/productos/gafas.jpg', NULL, 1, '0000-00-00', '0000-00-00'),
(8, 3, NULL, 'jeans', 'Mejorados', 'img/productos/jeans.jpg', NULL, 1, '0000-00-00', '0000-00-00'),
(9, 3, NULL, 'pechuga a la plancha', 'pechuga a la plancha', 'img/products/2014-05-06-14-Uow39zWkl177C-pech', NULL, 1, '2014-05-06', '2014-05-06'),
(10, 3, NULL, 'pechuga a la plancha', 'pechuga a la plancha', 'img/products/2014-05-06-14-1lLrrFH9zVx0u-pechuga.jpg', NULL, 1, '2014-05-06', '2014-05-06'),
(11, 3, NULL, 'pollo broaster', 'pollo broaster', 'img/products/2014-05-06-14-XbzqoXvOFlgZb-promo3.jpg', NULL, 1, '2014-05-06', '2014-05-06'),
(12, 3, NULL, 'hamburguesa 3 carnes', 'hamburguesa 3 carnes', 'img/products/2014-05-07-04-pqKrU5uPFtIWC-ham2.jpg', NULL, 1, '2014-05-07', '2014-05-07'),
(13, 3, NULL, 'pehuga especial', 'Esta pechuga es mucho mejor que nuestra anterior publicada', 'img/products/2014-05-07-04-IqMOfxxWfb4GN-pechuga.jpg', NULL, 1, '2014-05-07', '2014-05-07'),
(14, 3, NULL, 'carne jugosa', 'Rica y deliciosa carne', 'img/products/2014-05-09-01-BLdemuISg1Ldj-carne.jpg', NULL, 1, '2014-05-09', '2014-05-09'),
(15, 3, NULL, 'mega burguer', 'hamburguesa muy grande', 'img/products/2014-05-09-01-WIjBLzdnphRms-burguer2.jpg', NULL, 1, '2014-05-09', '2014-05-09'),
(16, 3, NULL, 'torta de jamon', 'rica torta de jamon', 'img/products/2014-05-09-01-zFZlOmT0RtUbv-sandwich.jpg', NULL, 1, '2014-05-09', '2014-05-09'),
(17, 1, 2, 'falda roja', 'Esta falda es super genial. Precio muy economico', 'img/products/2014-05-13-20-fsdU3ReT7JZJq-roja.jpg', NULL, 1, '2014-05-13', '2014-05-13'),
(18, 3, 5, 'Especial', 'Plato muy especiall para ocasiones unicas', 'img/products/2014-05-14-15-QJEYDwniJIekZ-demiValentine.jpg', NULL, 1, '2014-05-14', '2014-05-14'),
(19, 4, 8, 'iphone 5s', 'Este es la ultima version del telefono de apple con grandes novedades en su sistema.', 'img/products/2014-05-16-20-BfBmH5KNzwBhJ-iphone.jpg', NULL, 1, '2014-05-16', '2014-05-16'),
(20, 4, 7, 'Imac retina', 'Presentación de la nueva MacBook Pro de 13 pulgadas. El procesador Intel Core i5 de doble núcleo del estado-of-the-art Entrega hasta 2 veces el rendimiento más rápido (más de la anterior generación de MacBook Pro). La nueva tecnología Thunderbolt permite conectar periféricos de alto rendimiento y pantallas de alta resolución a un solo puerto, y transferir archivos a una velocidad de un rayo. Y con la nueva cámara integrada FaceTime HD, usted puede hacer asombrosamente nítidas llamadas de vídeo de alta definición.', 'img/products/2014-05-16-20-4r6Zp9pbzChaA-imac.jpg', NULL, 1, '2014-05-16', '2014-05-16'),
(21, 3, 6, 'producto de prueba tags', 'espe producto es de prueba', 'img/products/2014-05-16-23-dEDDdsWgJbGWd-iphone.jpg', NULL, 1, '2014-05-16', '2014-05-16'),
(22, 4, 7, 'Imac retina', 'Presentación de la nueva MacBook Pro de 13 pulgadas. El procesador Intel Core i5 de doble núcleo del estado-of-the-art Entrega hasta 2 veces el rendimiento más rápido (más de la anterior generación de MacBook Pro). La nueva tecnología Thunderbolt permite conectar periféricos de alto rendimiento y pantallas de alta resolución a un solo puerto, y transferir archivos a una velocidad de un rayo. Y con la nueva cámara integrada FaceTime HD, usted puede hacer asombrosamente nítidas llamadas de vídeo de alta definición.', 'img/products/2014-05-16-23-PE49sUMR9wtJl-imac.jpg', NULL, 1, '2014-05-16', '2014-05-16'),
(23, 3, 9, 'postre de browney', 'Postre de browney y oreo', 'img/products/2014-05-20-02-rEl2mWlqRpEM6-browney.JPG', NULL, 1, '2014-05-20', '2014-05-20'),
(24, 3, 6, 'arequipe', 'Rico postre de arequipe con chispas de chocolate', 'img/products/2014-05-20-02-2PLlXV1aDxAGu-arequipe.JPG', NULL, 1, '2014-05-20', '2014-05-20'),
(25, 3, 9, 'Postre de Oreo', 'postre de galletas de oreo, pequeño', 'img/products/2014-05-20-02-3whWp3q4pz2DI-oreo.jpg', NULL, 1, '2014-05-20', '2014-05-20'),
(26, 3, 9, 'torta 3 leches', 'torta 3 leches para 7 personas ', 'img/products/2014-05-20-02-SHOdJHnNylPr5-torta-grande.jpg', NULL, 1, '2014-05-20', '2014-05-20'),
(27, 3, 9, 'Flan de leche', 'flan de leche para 4 personas', 'img/products/2014-05-20-03-ELA5z9G7H6x0v-flan.jpg', NULL, 1, '2014-05-20', '2014-05-20'),
(28, 1, 11, 'camiseta colombia', 'Adidas  traen para ti la nueva camiseta de la Selección Colombia De Futbol para que vivas la pasión de este deporte con orgullo. Pronto llegará e', 'img/products/2014-05-20-17-WAaJ4zGeajj0W-colombia.jpg', NULL, 1, '2014-05-20', '2014-05-20'),
(29, 1, 11, 'camiseta alemania', 'Adidas es una compañía que se dedica a desarrollar, fabricar y comercializar artículos deportivos,accesorios y servicios, los cuales cuentan con ', 'img/products/2014-05-20-17-yd5iHUzC45jLU-alemania.jpg', NULL, 1, '2014-05-20', '2014-05-20'),
(30, 1, 11, '¡CHAQUETA DE PRESENTACIÓN ARGENTINA!', 'para ti esta espectacular Chaqueta de Presentación de Argentina Adidas, cuando el conjunto Albiceleste entra al campo de juego en el protocolo an', 'img/products/2014-05-20-17-F5tUcLSmPZ1QO-chaqueta.jpg', 'img/products/img-lista/2014-05-20-17-F5tUcLSmPZ1QO-chaqueta.jpg', 1, '2014-05-20', '2014-05-20'),
(31, 4, 8, 'Galaxy S4', 'precio espectacular y entrega inmediata', 'img/products/2014-05-23-23-yZtQGitr3Snlc-s4.jpg', NULL, 1, '2014-05-23', '2014-05-23'),
(32, 3, 9, 'postre de oreo', 'postre de oreo con chispas de chocolate', 'img/products/2014-05-24-00-MF36MNl9rn2RF-oreo.jpg', NULL, 1, '2014-05-24', '2014-05-24'),
(33, 3, 6, 'Costilla de cerdo', 'Espectaculares costillas de cerdo que puedes acompañar con mas de nuestros productos', 'img/products/2014-05-24-04-q2Bnm8KNc1h1y-mercagan_varios4.jpg', NULL, 1, '2014-05-24', '2014-05-24'),
(34, 3, 9, 'TORTA OREO', 'Descripcion del pstre de oreo', 'img/products/2014-05-24-14-Ge4b9lQdhp0dR-oreo.jpg', NULL, 1, '2014-05-24', '2014-05-24'),
(35, 3, 9, 'POSTRE FRESA', 'postre de fresa', 'img/products/2014-05-24-14-5qqiZHiokX9go-postre-fresa.jpg', NULL, 1, '2014-05-24', '2014-05-24'),
(36, 3, 9, 'TORTA CHOCOLATE', 'torta grande de chocolate', 'img/products/2014-05-24-14-Yk9k9qkEG9vre-torta-grande.jpg', NULL, 1, '2014-05-24', '2014-05-24'),
(40, 3, 5, 'mercagan junior', 'mercagan junior', 'img/products/2014-06-03-01-W4pHrvbkU7FrF-blog-item-2.png', NULL, 1, '2014-06-03', '2014-06-03'),
(41, 3, 6, 'otro plato', 'otro tipo de platillo', 'img/products/2014-06-05-11-0EqZy1wodXS1D-postre-fresa.jpg', NULL, 1, '2014-06-05', '2014-06-05'),
(42, 3, 9, 'otro plato 3', 'otro plato 3', 'img/products/2014-06-05-11-N5cBj3kGbkzkR-torta-grande.jpg', NULL, 1, '2014-06-05', '2014-06-05'),
(43, 1, 11, 'camiseta colombia', 'camiseta de la seleccion colombia', 'img/products/2014-06-05-11-svbbkHgYGG1Pa-dep2.jpg', NULL, 1, '2014-06-05', '2014-06-05'),
(44, 1, 11, 'Camiseta Mujer De La Selección Colombia Roja', 'camiseta de la seleccion colombia roja', 'img/products/2014-06-05-12-kyL5X6rsW0iPE-colombia-roja.jpg', 'img/products/img-lista/2014-06-05-12-kyL5X6rsW0iPE-colombia-roja.jpg', 1, '2014-06-05', '2014-06-05'),
(45, 1, 11, 'CAMISETAS ORIGINALES ITALIA MUNDIAL 2014', 'DISPONIBLE LAS TALLAS  S, M, L Y XL -  MANGA CORTA  \r\nTODAS LAS CAMISETAS VIENE EN SU RESPECTIVA BOLSA ORIGINAL', 'img/products/2014-06-05-12-x1cmXWkGK6P9I-italia2014.jpg', 'img/products/img-lista/2014-06-05-12-x1cmXWkGK6P9I-italia2014.jpg', 1, '2014-06-05', '2014-06-05'),
(46, 1, 11, 'Camiseta Del Barcelona Messi, Parches Champio', 'Última en inventario\r\nTALLA M CON PARCHES DE LA CHAMPIONS OFICIALES\r\nVERSIÓN JUGADOR, ESTAMPADO DE MESSI \r\nMANGA CORTA ', 'img/products/2014-06-05-12-FGi8CkQwA2mGb-barca.jpg', 'img/products/img-lista/2014-06-05-12-FGi8CkQwA2mGb-barca.jpg', 1, '2014-06-05', '2014-06-05'),
(47, 1, 11, 'Camiseta De La Selección Brasileña Y Francesa', 'camiseta de la seleccion  de brasil', 'img/products/2014-06-05-17-0R8FQLNmyaxkC-brasil.jpg', 'img/products/img-lista/2014-06-05-17-0R8FQLNmyaxkC-brasil.jpg', 1, '2014-06-05', '2014-06-05'),
(48, 1, 11, 'Camisetas Hombre, Mujer Y Niño Selección Colo', 'camiseta de la seleccion colombia manga larga ', 'img/products/2014-06-05-17-X2ERF5LPHMMn7-colombia-larga.jpg', 'img/products/img-lista/2014-06-05-17-X2ERF5LPHMMn7-colombia-larga.jpg', 1, '2014-06-05', '2014-06-05'),
(49, 1, 11, 'Pantalon Licra, Running, Ciclismo, Atletismo,', 'Pantalón unisex, esta diseñado para que te sientas cómodo mientras entrenas. Y su diseño que proporciona un rango de movimiento óptimos, QUE NO QUERRAS DETENERTE... ', 'img/products/2014-06-05-17-1i4mGFCO7PvL1-pantalon.jpg', 'img/products/img-lista/2014-06-05-17-1i4mGFCO7PvL1-pantalon.jpg', 1, '2014-06-05', '2014-06-05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promociones`
--

CREATE TABLE IF NOT EXISTS `promociones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sede_id` int(11) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `titulo` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `titulo_seo` varchar(250) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `sin_descuento` double DEFAULT NULL,
  `con_descuento` double DEFAULT NULL,
  `porcentaje` double DEFAULT NULL,
  `descripcion_corta` varchar(250) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `descripcion_larga` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `img` varchar(250) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '1',
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `promociones`
--

INSERT INTO `promociones` (`id`, `sede_id`, `categoria_id`, `titulo`, `titulo_seo`, `sin_descuento`, `con_descuento`, `porcentaje`, `descripcion_corta`, `descripcion_larga`, `img`, `estado`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 'Hamburguesa especial', 'Hamburguesa-especial', 18000, 14000, 22, 'Promocion especial en nuestra mercagan junior', 'Aqui se espesifican las condiciones y restricciones de la promocion', 'img/promociones/promo1.jpg', 1, '2014-05-02', '2014-05-29'),
(2, 1, 3, 'perro loco ', 'perro-loco', 14000, 7000, 50, 'esta es la descripción corta', 'esta es la descripcion larga', 'img/promociones/promo2.jpg', 1, '2014-05-02', '2014-06-05'),
(3, 3, 3, 'Pollo barato', 'pollo-barato', 8000, 4000, 50, 'desc corta del pollo barato', 'desc largadesc largadesc largadesc larga', 'img/promociones/2014-05-02-23-sqqKhk3qI8hip-promo3.jpg', 1, '2014-05-02', '2014-05-29'),
(4, 4, 1, 'Mega Bestido', 'Mega-bestido', 50000, 25000, 50, 'Ultimas unidades no te los pierdas', 'Esta es la descripcion larga de la promo del bestido', 'img/promociones/2014-05-03-02-N8wRItihaVuhC-ropa.jpg', 1, '2014-05-03', '2014-05-03'),
(5, 6, 1, 'promo1', 'promo1', 100000, 75000, 25, 'desc breve', 'desc larga', 'img/promociones/2014-05-03-03-8WMxuCma8TUOE-maya.JPG', 1, '2014-05-03', '2014-05-03'),
(6, 3, 2, 'Carne especial', 'carne-especial', 100000, 10000, 90, 'lindo collar para adorno', 'esta en promocion por muy poco tiempo', 'img/promociones/2014-05-29-21-8Qk7H8QjM5ciL-promo-collar.jpg', 1, '2014-05-03', '2014-05-29'),
(7, 10, 1, 'falta roja -50%', 'falda-roja', 12000, 6000, 50, 'Para nuestros primeros clientes', 'esta falda estara disponible por poco tiempo', 'img/promociones/2014-05-13-20-J2KEi7Ee9pPD1-roja.jpg', 1, '2014-05-13', '2014-05-13'),
(8, 8, 3, 'pizza buena', 'piza-buena', 34900, 26000, 26, 'esta pizza es de calidad muy buena', 'para acceder a la promocion el usuario debe cumplir lo siguiente.', 'img/promociones/2014-05-15-18-wzQPsp4AhFdXH-pizza.jpg', 1, '2014-05-15', '2014-05-15'),
(9, 11, 4, 'Protector Iphone 5', 'protector-iphone-5', 58900, 25000, 58, 'Protege tu iphone de golpes', 'Este lindo y muy util protector de iphone cuidara tu celular de golpes y posibles daños', 'img/promociones/2014-05-16-20-gMD2B1Oe1Bitx-protector.jpg', 1, '2014-05-16', '2014-05-16'),
(10, 12, 3, 'promo 1', 'promo-1', 50000, 20000, 60, 'descripcion de la promo', 'descripcion de la promodescripcion de la promodescripcion de la promo', 'img/promociones/2014-05-16-23-Hy37wpCXYvRio-iphone.jpg', 1, '2014-05-16', '2014-05-16'),
(11, 13, 3, 'torta de cremas', 'torta-de-cremas', 7500, 4000, 47, 'disfruta nuestra torta de cremas', 'esta torta estara disponible para nuestros clientes por poco tiempo', 'img/promociones/2014-05-20-02-YN9AYgYNofDa3-torta-cremas.jpg', 1, '2014-05-20', '2014-05-20'),
(12, 14, 3, 'postre de leche', 'postre-de-leche', 9500, 5000, 47, 'Postre de leche en distintas presentaciones', 'Postre de leche en distintas presentacionesPostre de leche en distintas presentaciones', 'img/promociones/2014-05-24-00-kpNMjoYOda3oA-postre-fresa.jpg', 1, '2014-05-24', '2014-05-24'),
(13, 15, 1, 'torta leche', 'torta-leche', 25000, 12000, 52, 'descripcion de la promo', 'descripcion de la promo de la torta', 'img/promociones/2014-05-24-14-2jMed1XzB6Qz1-torta-cremas.jpg', 1, '2014-05-24', '2014-05-24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sectores`
--

CREATE TABLE IF NOT EXISTS `sectores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_sector` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `img` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `sectores`
--

INSERT INTO `sectores` (`id`, `nom_sector`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Comidas', 'img/sectores/comidas.jpg', '0000-00-00', '0000-00-00'),
(2, 'Ropa', 'img/sectores/ropa.jpg', '0000-00-00', '0000-00-00'),
(3, 'Confecciones', 'img/sectores/confecciones.jpg', '0000-00-00', '0000-00-00'),
(4, 'Tecnologia', 'img/sectores/tecno.jpg', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sedes`
--

CREATE TABLE IF NOT EXISTS `sedes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `empresa_id` int(11) NOT NULL,
  `ciudad_id` int(11) DEFAULT NULL,
  `direccion` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `telefono` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `nombre_publico` varchar(250) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci AUTO_INCREMENT=17 ;

--
-- Volcado de datos para la tabla `sedes`
--

INSERT INTO `sedes` (`id`, `empresa_id`, `ciudad_id`, `direccion`, `telefono`, `nombre_publico`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'cll 9 # 23-55', '6542020', 'mercagan-cabecera', 7.138065, -73.124203, '2014-04-30', '2014-05-23'),
(3, 1, 2, 'cra 27 # 32', '6827000', 'mercagan-centro', 7.124584, -73.118091, '0000-00-00', '2014-05-23'),
(4, 15, 1, 'ave. las americas # 113-85 ', '2887767', 'MayaTest777', 4.630623, -74.1427, '2014-05-01', '2014-05-15'),
(6, 2, 2, 'car 14 # 23-45', '6827000', 'jim-sports', 7.121333, -73.109516, '2014-05-03', '2014-05-28'),
(8, 1, 2, 'Carrera 28 # 47-31', '6345362', 'mercagan-lagos', 7.117109, -73.113189, '2014-05-11', '2014-05-29'),
(10, 15, 2, 'carrera 24 # 19-76', '2887765', 'maya-bucaramanga', 7.130135, -73.121561, '2014-05-12', '2014-05-12'),
(12, 21, 2, 'carrera 27 # 41-45', '6998765', 'tecnologia', 7.11881, -73.115484, '2014-05-16', '2014-05-16'),
(13, 22, 2, 'carrera 24 # 20-35', '3130828036', 'dulcecitos', 7.128869, -73.121896, '2014-05-20', '2014-05-20'),
(14, 23, 2, 'calle 9 # 23-55', '6352525', 'dulcecitos-2', 7.138081, -73.124181, '2014-05-23', '2014-05-23'),
(15, 24, 2, 'calle 9 # 23-55', '6345372', 'dulcecitos-1', 7.138027, -73.124353, '2014-05-24', '2014-05-24'),
(16, 24, 2, 'calle 9 # 27-55', '6345372', 'dulcecitos-cabecera', 7.137071, -73.129181, '2014-05-24', '2014-05-24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategorias`
--

CREATE TABLE IF NOT EXISTS `subcategorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria_id` int(11) NOT NULL,
  `nombre_sub` varchar(150) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `subcategorias`
--

INSERT INTO `subcategorias` (`id`, `categoria_id`, `nombre_sub`, `created_at`, `updated_at`) VALUES
(1, 1, 'bolsos y carteras', '0000-00-00', '0000-00-00'),
(2, 1, 'Ropa femenina', '0000-00-00', '0000-00-00'),
(3, 2, 'Cuidado del cabello', '0000-00-00', '0000-00-00'),
(4, 2, 'cuidado del cuerpo', '0000-00-00', '0000-00-00'),
(5, 3, 'Comidas rapidas', '0000-00-00', '0000-00-00'),
(6, 3, 'Restaurantes gourmet', '0000-00-00', '0000-00-00'),
(7, 4, 'Computadores', '0000-00-00', '0000-00-00'),
(8, 4, 'Celulares', '0000-00-00', '0000-00-00'),
(9, 3, 'pasteleria', '0000-00-00', '0000-00-00'),
(10, 0, '', '0000-00-00', '0000-00-00'),
(11, 1, 'ropa deportiva ', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tag`
--

CREATE TABLE IF NOT EXISTS `tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `producto` int(11) NOT NULL,
  `etiqueta` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=71 ;

--
-- Volcado de datos para la tabla `tag`
--

INSERT INTO `tag` (`id`, `producto`, `etiqueta`, `created_at`, `updated_at`) VALUES
(1, 21, 'apple', '2014-05-16 23:16:49', '2014-05-16 23:16:49'),
(2, 21, 'iphone', '2014-05-16 23:16:49', '2014-05-16 23:16:49'),
(3, 21, 'ios', '2014-05-16 23:16:49', '2014-05-16 23:16:49'),
(4, 22, 'apple', '2014-05-16 23:49:51', '2014-05-16 23:49:51'),
(5, 22, 'imac', '2014-05-16 23:49:51', '2014-05-16 23:49:51'),
(6, 22, 'barato', '2014-05-16 23:49:51', '2014-05-16 23:49:51'),
(7, 23, 'postre', '2014-05-20 02:46:22', '2014-05-20 02:46:22'),
(8, 23, 'oreo', '2014-05-20 02:46:22', '2014-05-20 02:46:22'),
(9, 23, 'browney', '2014-05-20 02:46:22', '2014-05-20 02:46:22'),
(10, 24, 'postre', '2014-05-20 02:47:52', '2014-05-20 02:47:52'),
(11, 24, 'arequipe', '2014-05-20 02:47:52', '2014-05-20 02:47:52'),
(12, 24, 'dulces', '2014-05-20 02:47:52', '2014-05-20 02:47:52'),
(13, 25, 'postre', '2014-05-20 02:49:21', '2014-05-20 02:49:21'),
(14, 25, 'oreo', '2014-05-20 02:49:21', '2014-05-20 02:49:21'),
(15, 25, 'helado', '2014-05-20 02:49:21', '2014-05-20 02:49:21'),
(16, 26, 'torta', '2014-05-20 02:54:39', '2014-05-20 02:54:39'),
(17, 26, '3 leches', '2014-05-20 02:54:39', '2014-05-20 02:54:39'),
(18, 26, 'postres', '2014-05-20 02:54:39', '2014-05-20 02:54:39'),
(19, 27, 'flan', '2014-05-20 03:37:02', '2014-05-20 03:37:02'),
(20, 27, 'leche', '2014-05-20 03:37:02', '2014-05-20 03:37:02'),
(21, 27, 'tortas', '2014-05-20 03:37:02', '2014-05-20 03:37:02'),
(22, 28, 'colombia', '2014-05-20 17:01:47', '2014-05-20 17:01:47'),
(23, 28, 'tricolor', '2014-05-20 17:01:47', '2014-05-20 17:01:47'),
(24, 28, 'economico', '2014-05-20 17:01:47', '2014-05-20 17:01:47'),
(25, 29, 'camiseta', '2014-05-20 17:12:03', '2014-05-20 17:12:03'),
(26, 29, 'mundial', '2014-05-20 17:12:03', '2014-05-20 17:12:03'),
(27, 29, 'deporte', '2014-05-20 17:12:03', '2014-05-20 17:12:03'),
(28, 30, 'ropa', '2014-05-20 17:19:45', '2014-05-20 17:19:45'),
(29, 30, 'deporte', '2014-05-20 17:19:45', '2014-05-20 17:19:45'),
(30, 30, 'argentina', '2014-05-20 17:19:45', '2014-05-20 17:19:45'),
(31, 31, 'android', '2014-05-23 23:42:16', '2014-05-23 23:42:16'),
(32, 31, 's4', '2014-05-23 23:42:17', '2014-05-23 23:42:17'),
(33, 31, 'samsung', '2014-05-23 23:42:17', '2014-05-23 23:42:17'),
(34, 32, 'postre', '2014-05-24 00:05:34', '2014-05-24 00:05:34'),
(35, 32, 'oreo', '2014-05-24 00:05:35', '2014-05-24 00:05:35'),
(36, 32, 'galletas', '2014-05-24 00:05:35', '2014-05-24 00:05:35'),
(37, 33, 'carnes', '2014-05-24 04:44:24', '2014-05-24 04:44:24'),
(38, 33, 'costillas', '2014-05-24 04:44:24', '2014-05-24 04:44:24'),
(39, 34, 'ore', '2014-05-24 14:27:22', '2014-05-24 14:27:22'),
(40, 34, 'torta', '2014-05-24 14:27:23', '2014-05-24 14:27:23'),
(41, 34, 'barato', '2014-05-24 14:27:23', '2014-05-24 14:27:23'),
(42, 35, 'postre', '2014-05-24 14:32:08', '2014-05-24 14:32:08'),
(43, 35, 'fresa', '2014-05-24 14:32:08', '2014-05-24 14:32:08'),
(44, 36, 'torta', '2014-05-24 14:33:03', '2014-05-24 14:33:03'),
(45, 36, 'choccolate', '2014-05-24 14:33:03', '2014-05-24 14:33:03'),
(46, 37, 'prueba noti', '2014-06-01 21:56:00', '2014-06-01 21:56:00'),
(47, 38, 'prueba noti', '2014-06-01 21:59:10', '2014-06-01 21:59:10'),
(48, 39, '', '2014-06-01 22:41:35', '2014-06-01 22:41:35'),
(49, 40, 'hamburguesas', '2014-06-03 01:32:30', '2014-06-03 01:32:30'),
(50, 41, 'otro', '2014-06-05 11:10:36', '2014-06-05 11:10:36'),
(51, 42, 'plato 3', '2014-06-05 11:51:16', '2014-06-05 11:51:16'),
(52, 43, 'colombia', '2014-06-05 11:54:40', '2014-06-05 11:54:40'),
(53, 43, 'camiseta', '2014-06-05 11:54:40', '2014-06-05 11:54:40'),
(54, 44, 'mundial', '2014-06-05 12:10:16', '2014-06-05 12:10:16'),
(55, 44, 'brasil', '2014-06-05 12:10:16', '2014-06-05 12:10:16'),
(56, 44, '2014', '2014-06-05 12:10:16', '2014-06-05 12:10:16'),
(57, 45, 'camiseta', '2014-06-05 12:12:39', '2014-06-05 12:12:39'),
(58, 45, 'italia', '2014-06-05 12:12:40', '2014-06-05 12:12:40'),
(59, 45, 'mundial', '2014-06-05 12:12:40', '2014-06-05 12:12:40'),
(60, 46, 'camiseta', '2014-06-05 12:33:58', '2014-06-05 12:33:58'),
(61, 46, 'barca', '2014-06-05 12:33:58', '2014-06-05 12:33:58'),
(62, 46, 'champions', '2014-06-05 12:33:58', '2014-06-05 12:33:58'),
(63, 47, 'brasil', '2014-06-05 17:06:39', '2014-06-05 17:06:39'),
(64, 47, 'mundial', '2014-06-05 17:06:39', '2014-06-05 17:06:39'),
(65, 48, 'camiseta', '2014-06-05 17:11:45', '2014-06-05 17:11:45'),
(66, 48, 'colombia', '2014-06-05 17:11:45', '2014-06-05 17:11:45'),
(67, 48, 'manga larga', '2014-06-05 17:11:45', '2014-06-05 17:11:45'),
(68, 49, 'pantalon', '2014-06-05 17:31:31', '2014-06-05 17:31:31'),
(69, 49, 'hombre', '2014-06-05 17:31:31', '2014-06-05 17:31:31'),
(70, 49, 'gym', '2014-06-05 17:31:31', '2014-06-05 17:31:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=32 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `img`, `password`, `password_temp`, `code`, `tipo`, `active`, `remember_token`, `created_at`, `updated_at`) VALUES
(7, 'demi', 'demi@gmail.com', 'img/users/2014-04-06-22-380534.png', '$2y$10$1K/W2KH0YotORBMXB8Cwc.RUIFQQibDDH93fwzC6xDfYSFjnfBEX2', '$2y$10$m1t1Cw4dJqgJOPTrIYrDyO7fqehZ5JWiLrFIrgHCRoXOR1M08Os0O', 'EO0GQuUUNzMFAEZT0iqjlTvNbJpHMQgl2cw8ZFCOjocSOtLyjf4a2AP8pTsY', 1, 1, 'ct0xa2LQZWfuGoqgxWQCUu8RH4IHLkWw4eNBNK8RUrVN35dsAwdmgihY1kkx', '2014-04-07 03:47:18', '2014-06-02 03:39:39'),
(8, 'ederjulianA', 'ederalvarez2009@hotmail.com', 'img/users/2014-04-06-22-1080p-barcelona-team-2013-hd-wallpapers-4584.jpg', '$2y$10$NOSkf5TcdWlv8WnfJuULbu.iIoR8A4ygo1i/s8qGyKjPFb859b0QK', '', '', 2, 1, '3CMpqdCzPiyik4Qyw2oxZHZaOsXEEqc9kUETHgx33OKsvlj27OmOZ3xiW9wW', '2014-04-07 03:52:10', '2014-06-05 17:07:00'),
(9, 'empresa1', 'empresa1@gmail.com', 'img/users/2014-04-07-16-falcao.jpg', '$2y$10$ZAVBQVPLMsyqEMKqfpaFWeRbwpMMUk2nuWjJ4LW7id09taURy7Ckq', '', '', 2, 1, 'RIfiCGib62lZQPVJNm24KwdeSnA6QLcYdYqilZ3MIfsH9W3p0PTMdgIHygPA', '2014-04-07 21:56:35', '2014-05-26 02:53:11'),
(10, 'empresa2', 'empresa2@gmail.com', 'img/users/2014-04-11-16-GHWT.jpg', '$2y$10$lEmS7rSeYmbIOyJlknUZCuGb6KDKS6mTCrA2M.xR61faI/Qn2p4v.', '', '', 2, 1, '3ac4sd7Coo3RrhcZSpFhJvsHPjHlXiCOoaggQltubOSfll7nxPrtvRduEXOE', '2014-04-11 21:47:15', '2014-05-31 05:26:58'),
(11, 'empresa4', 'empresa4@gmail.com', 'img/users/2014-04-11-18-380534.png', '$2y$10$KJhgXGRBH7XcwktADxGJNuoo.0oFZrPUEdhoFosPqLtZhKtiJlKKC', '', '', 2, 1, 'Lodkzl7QkFx6zc2V8Ea1OV5kAXzbqUCyNaYWpi9CAoX93xscGQ4Qi0VsnQl5', '2014-04-11 23:02:28', '2014-05-26 03:18:57'),
(12, 'empresa5', 'empresa5@gmail.com', 'img/users/2014-04-12-14-kitty.png', '$2y$10$7ojXGoUnvMecvJUGloQ5zuHAN461H4SoWIVfghov76fN9InSWFjYa', '', '', 2, 1, 'B6Ed8OC0zYIXdxTQeEf0NKZsgKfI7zGrDRL3FhqBGW4QpLDACPBIFaeL1fs1', '2014-04-12 19:23:27', '2014-05-24 00:57:04'),
(13, 'empresa10', 'empresa10@gmail.com', 'img/users/2014-04-12-19-falcao.jpg', '$2y$10$HKvlxMt8eH9IiV18SqEJJOhC/bQcqM8LEg6xX.fvRHNWOrEwiF/Ve', '', '', 2, 1, 'cMX4rcgs44VocM6SixUPz1ybAbnQcAKry1Zhut3yrKjr8Nk0e55QsSTVnwiQ', '2014-04-13 00:01:01', '2014-05-21 21:26:36'),
(19, 'laura', 'pecas654@hotmail.com', 'img/users/2014-04-14-23-IMG_5517.JPG', '$2y$10$cubXsvfLeNSeLEteodmfVe0H1G5hxxjVB1gyKORXHsZbro.ZjMRLO', '', '', 1, 1, 'RXBWmL2pVUFE6VTWZ5WXGp56HGTOgu6NWTUEFoRbJdMeMSm1JCxXGUqgwga2', '2014-04-15 04:40:47', '2014-05-09 07:01:15'),
(21, 'ederjulianA', 'prueba12345678eder@gmail.com', 'img/users/2014-04-23-03-549310_553591994662751_250484142_n.jpg', '$2y$10$1DL/c0jv8SWWS2BhCl6s/OIFEIUsWv.Vf8H0Tulx9zIBOEadgfRTK', '', 'o0hEiT8Uw5faBlBKaD5VK1tlzWNXU9gsUEduN7bthKv2SgFfG9fbRiykiClo', 1, 0, '', '2014-04-23 08:57:16', '2014-04-23 08:57:16'),
(22, 'carlos', 'cvcarlosandres39@gmail.com', 'img/users/2014-04-23-16-call-of-duty-modern-warfare-3-mw3-xbox-360-disponible-ya-_MCO-F-19658871_2299.jpg', '$2y$10$gXM9yQhroIEp1IZ8Fa5jWOkG.whJ8tv5/7eak8evl3kw5PVDsOYqu', '', '', 2, 1, '', '2014-04-23 21:00:56', '2014-04-23 21:03:25'),
(23, 'waking', 'thewalkingdead2091057@gmail.com', 'img/users/2014-04-23-21-primas.jpg', '$2y$10$8d763ULyYvztaaLdyJ8Qb.b5gPp7OInJJ3lIABQ6UeyhOtyXXZI2m', '', '3iChvPW1ilfqOiryCWNntD0w6QvWXyZHXVPSjwlYtjhIl40vesD9HI4kP9qd', 2, 0, '', '2014-04-24 02:32:58', '2014-04-24 02:32:58'),
(24, 'soni', 'soni325@hotmail.com', 'img/users/2014-05-04-22-tEG8NinXGeFv3-promo3.jpg', '$2y$10$dOOHi8zjy3tEtjn6iaz47erSL7IJn26H1hltWileJziz9mLu4gBhS', '', '', 2, 1, '', '2014-05-05 03:53:47', '2014-05-05 03:54:46'),
(26, 'eder', 'ederalvarez2091057@gmail.com', 'img/users/2014-05-16-23-qkZNbPGUPdhxN-logo.jpg', '$2y$10$Qj3TGYstLCVX01oSjM8lv.NZthlLRgCMqMRR.58IZxP5taPbsV3uW', '', '', 2, 1, '5vIhJOa5dwSZlfLuUHb8X7y7RgUypHY59KAEDc5WWSZJbNH59Z3OepUZW8Rw', '2014-05-17 04:32:43', '2014-05-24 04:44:43'),
(27, 'dulces', 'dulces2091057@gmail.com', 'img/users/2014-05-20-02-k1GVinvnsst3t-LOGO.JPG', '$2y$10$Z4wtGfQh2FtLKxCf3brPYuOQgeFzcRZR1lyjnJlYr/hJkJIC1jNGu', '', '', 2, 1, '', '2014-05-20 07:31:24', '2014-05-20 07:31:24'),
(28, 'natalia', 'nataliaelvira2091057@gmail.com', 'img/users/2014-05-21-16-ZM3Nof4TQKMAw-demigame.png', '$2y$10$5IxAjjk39hkvuxSI6IqPEOoYLLW0Oyo8u7kF/yrOqJv1dXK0xsMo6', '', '', 1, 1, '', '2014-05-21 21:36:38', '2014-05-21 21:36:38'),
(31, 'dulcecitos', 'eder2091057@hotmail.com', 'img/users/2014-05-24-14-yH2PvaDDzIrtO-LOGO.JPG', '$2y$10$bsfwXxMwxmJlCf./h.wlFuRB16jixMHxkzGKQr6rFhp4.yH1JcC1W', '', '', 2, 1, '', '2014-05-24 19:14:14', '2014-05-24 19:15:21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_favoritos`
--

CREATE TABLE IF NOT EXISTS `user_favoritos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `producto_id` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci AUTO_INCREMENT=152 ;

--
-- Volcado de datos para la tabla `user_favoritos`
--

INSERT INTO `user_favoritos` (`id`, `user_id`, `producto_id`, `created_at`, `updated_at`) VALUES
(93, 19, 4, '2014-05-09', '2014-05-09'),
(94, 19, 12, '2014-05-09', '2014-05-09'),
(95, 19, 2, '2014-05-09', '2014-05-09'),
(96, 19, 10, '2014-05-09', '2014-05-09'),
(98, 19, 16, '2014-05-09', '2014-05-09'),
(99, 19, 14, '2014-05-09', '2014-05-09'),
(118, 7, 4, '2014-05-13', '2014-05-13'),
(121, 7, 20, '2014-05-16', '2014-05-16'),
(123, 7, 1, '2014-05-16', '2014-05-16'),
(134, 28, 21, '2014-05-21', '2014-05-21'),
(135, 28, 17, '2014-05-21', '2014-05-21'),
(140, 7, 7, '2014-05-23', '2014-05-23'),
(142, 7, 16, '2014-05-23', '2014-05-23'),
(146, 7, 36, '2014-05-24', '2014-05-24'),
(147, 7, 30, '2014-05-29', '2014-05-29'),
(148, 7, 29, '2014-05-29', '2014-05-29'),
(149, 7, 28, '2014-05-29', '2014-05-29'),
(150, 7, 15, '2014-05-29', '2014-05-29'),
(151, 7, 38, '2014-06-01', '2014-06-01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_subs`
--

CREATE TABLE IF NOT EXISTS `user_subs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` int(11) NOT NULL,
  `empresa` int(11) NOT NULL,
  `pro_id` int(11) DEFAULT NULL,
  `pro_name` varchar(200) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci AUTO_INCREMENT=36 ;

--
-- Volcado de datos para la tabla `user_subs`
--

INSERT INTO `user_subs` (`id`, `user`, `empresa`, `pro_id`, `pro_name`, `created_at`, `updated_at`) VALUES
(14, 7, 22, NULL, NULL, '2014-05-21', '2014-05-21'),
(19, 28, 1, 43, 'camiseta colombia', '2014-05-21', '2014-06-05'),
(23, 7, 19, NULL, NULL, '2014-05-22', '2014-05-22'),
(26, 30, 23, NULL, NULL, '2014-05-24', '2014-05-24'),
(27, 7, 23, NULL, NULL, '2014-05-24', '2014-05-24'),
(29, 7, 24, NULL, NULL, '2014-05-24', '2014-05-24'),
(31, 7, 2, 49, 'Pantalon Licra, Running, Ciclismo, Atletismo, Gimnasio', '2014-05-28', '2014-06-05'),
(35, 7, 1, 43, 'camiseta colombia', '2014-06-01', '2014-06-05');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
