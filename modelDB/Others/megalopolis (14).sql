-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 13-08-2014 a las 23:58:18
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=71 ;

--
-- Volcado de datos para la tabla `almacen`
--

INSERT INTO `almacen` (`id`, `producto`, `sede`, `precio_detal`, `cantidad`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 13500, 1, '0000-00-00', '0000-00-00'),
(2, 2, 1, 10500, 12, '0000-00-00', '2014-07-22'),
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
(27, 28, 6, 100000, 4, '2014-05-20', '2014-08-10'),
(28, 29, 6, 159000, 9, '2014-05-20', '2014-07-21'),
(29, 30, 6, 169900, 15, '2014-05-20', '2014-07-21'),
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
(42, 44, 6, 105000, 5, '2014-06-05', '2014-07-26'),
(43, 45, 6, 105000, 5, '2014-06-05', '2014-07-26'),
(44, 46, 6, 99900, 7, '2014-06-05', '2014-07-26'),
(45, 47, 6, 50000, 5, '2014-06-05', '2014-07-26'),
(46, 48, 6, 45000, 9, '2014-06-05', '2014-07-26'),
(47, 49, 6, 99000, 9, '2014-06-05', '2014-07-30'),
(48, 50, 6, 70000, 57, '2014-06-08', '2014-08-10'),
(50, 52, 6, 56000, 5, '2014-06-08', '2014-06-08'),
(51, 53, 10, 150000, 4, '2014-06-10', '2014-06-10'),
(52, 54, 4, 150000, 5, '2014-06-10', '2014-06-10'),
(53, 55, 10, 30000, 3, '2014-06-10', '2014-06-10'),
(54, 56, 4, 40000, 6, '2014-06-10', '2014-06-10'),
(55, 57, 12, 399000, 7, '2014-06-11', '2014-06-11'),
(56, 58, 12, 399000, 5, '2014-06-11', '2014-06-11'),
(57, 59, 12, 89000, 7, '2014-06-11', '2014-06-11'),
(58, 60, 12, 45000, 3, '2014-06-11', '2014-06-11'),
(59, 61, 12, 5500, 4, '2014-06-11', '2014-06-11'),
(60, 62, 12, 45000, 4, '2014-06-11', '2014-06-11'),
(61, 63, 15, 7899, 5, '2014-06-27', '2014-06-27'),
(62, 64, 17, 1600000, 4, '2014-07-24', '2014-07-24'),
(63, 65, 6, 189999, 5, '2014-07-30', '2014-07-30'),
(64, 66, 6, 399000, 6, '2014-08-01', '2014-08-01'),
(65, 67, 19, 78999, 7, '2014-08-04', '2014-08-04'),
(66, 68, 6, 45000, 4, '2014-08-04', '2014-08-04'),
(67, 69, 6, 399000, 0, '2014-08-04', '2014-08-04'),
(68, 70, 6, 25000, 2, '2014-08-04', '2014-08-04'),
(69, 71, 6, 23000, 3, '2014-08-04', '2014-08-04'),
(70, 72, 6, 25000, 1, '2014-08-04', '2014-08-04');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'Ropas y Accesorios', '0000-00-00', '0000-00-00'),
(2, 'Salud Y belleza', '0000-00-00', '0000-00-00'),
(3, 'Restaurantes y comidas', '0000-00-00', '0000-00-00'),
(4, 'Tecnologia', '0000-00-00', '0000-00-00'),
(5, 'Servicios', '2014-08-10', '2014-08-10');

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
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE IF NOT EXISTS `compra` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_empresa` int(11) NOT NULL,
  `id_comprador` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` varchar(250) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `valor_unitario` varchar(250) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `descuento` varchar(250) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `valor_total` varchar(250) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `estado` int(5) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci AUTO_INCREMENT=25 ;

--
-- Volcado de datos para la tabla `compra`
--

INSERT INTO `compra` (`id`, `id_empresa`, `id_comprador`, `id_producto`, `cantidad`, `valor_unitario`, `descuento`, `valor_total`, `estado`, `created_at`, `updated_at`) VALUES
(11, 2, 7, 46, '5', '99900', '0', '499500', 1, '2014-07-30', '2014-08-09'),
(12, 2, 7, 48, '2', '45000', '0', '90000', 1, '2014-07-31', '2014-08-09'),
(13, 30, 7, 64, '5', '1600000', '0', '8000000', 0, '2014-07-31', '2014-07-31'),
(14, 2, 7, 50, '5', '70000', '0', '350000', 1, '2014-08-01', '2014-08-09'),
(15, 2, 7, 48, '5', '45000', '0', '225000', 1, '2014-08-01', '2014-08-09'),
(16, 2, 7, 46, '1', '99900', '0', '99900', 1, '2014-08-08', '2014-08-09'),
(17, 2, 7, 49, '1', '99000', '0', '99000', 1, '2014-08-08', '2014-08-08'),
(18, 30, 7, 64, '2', '1600000', '0', '3200000', 0, '2014-08-11', '2014-08-11'),
(19, 30, 7, 64, '1', '1600000', '0', '1600000', 0, '2014-08-11', '2014-08-11'),
(20, 30, 7, 64, '1', '1600000', '0', '1600000', 0, '2014-08-11', '2014-08-11'),
(21, 30, 7, 64, '1', '1600000', '0', '1600000', 0, '2014-08-11', '2014-08-11'),
(22, 30, 7, 64, '1', '1600000', '0', '1600000', 0, '2014-08-11', '2014-08-11'),
(23, 30, 7, 64, '1', '1600000', '0', '1600000', 0, '2014-08-11', '2014-08-11'),
(24, 30, 7, 64, '1', '1600000', '0', '1600000', 0, '2014-08-11', '2014-08-11');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Volcado de datos para la tabla `cuadricula`
--

INSERT INTO `cuadricula` (`id`, `idempresa`, `imagen`, `imagen2`, `imagen3`, `imagen4`, `imagen5`, `imagen6`, `imagen7`, `imagen8`, `imagen9`, `Nombre`, `enlacecatalogo`, `imgsector`, `estado`) VALUES
(1, 24, 'local2.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'culcecitos', NULL, 'copatf.png', 1),
(3, 2, 'local.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'jim-sports', NULL, 'botella.png', 1),
(36, 1, 'local3.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'mercagan', NULL, 'copatf.png', 1),
(46, 29, 'local2.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'nueva-rapi-rico', NULL, 'botella.png', 1),
(47, 30, 'local2.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'bandslam', NULL, 'botella.png', 1),
(48, 31, 'local2.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'mundo-360', NULL, 'botella.png', 1),
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
  `banner` varchar(250) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'img/empresas/banners/default/header.jpg',
  `estado` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=34 ;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`id`, `user_id`, `sector_id`, `ciudad_id`, `barrio`, `razon_social`, `nombre_publico`, `desc_breve`, `desc_larga`, `direccion_principal`, `telefono`, `logo`, `banner`, `estado`, `created_at`, `updated_at`, `latitude`, `longitude`) VALUES
(1, 8, 1, 4, 0, 'Mercagan ', 'mercagan', 'Galaxy S4 captura todos tus momentos estés donde estés. Ahora, no sólo mirarás tus fotos, también podrás escucharlas y revivir tus recuerdos. Podrás hacer varias tomas de la misma escena.', 'tiene como visión consolidarnos como la mejor empresa a nivel nacional, en cuanto a la producción y venta de comidas rápidas, apoyándonos en instalaciones con la más alta tecnología para el manejo de nuestros productos.																																																																																							', 'calle 45 # 35-38', '1002999', 'img/empresas/2014-07-26-04-IOoNStGUd6aaN-logo-mercagan.jpg', 'img/empresas/banners2014-07-25-16-wect6fDbzoGEf-banner-mercagan.jpg', 0, '0000-00-00 00:00:00', '2014-07-26 09:53:42', 3.376421, -76.519048),
(2, 9, 2, 2, 0, 'Jim Sports', 'jim-sports', '', 'Nos encontramos dedicados a la importación y comercialización de artículos deportivos ltda																																																																												', 'car 14 # 23-45', '6827111', 'img/empresas/2014-04-12-00-BbUqBWvza5A8o-1080p-barcelona-team-2013-hd-wallpapers-4584.jpg', 'img/empresas/banners2014-08-12-16-08-03-f4pdvI2w5UpsH-banner-jim-sports.jpg', 1, '2014-04-08 00:09:20', '2014-08-12 21:38:04', NULL, NULL),
(15, 13, 3, 3, 6, 'creaciones maya test', 'MayaTest', 'empresa de confecciones maya test', 'empresa de confecciones maya testempresa de confecciones maya testempresa de confecciones maya testempresa de confecciones maya test and bla', 'ave. las americas # 113-85 ', '2887765', 'img/empresas/2014-07-26-04-IbFwhh9a6t50w-logo-MayaTest.jpg', 'img/empresas/banners/default/header.jpg', 1, '2014-05-01 02:53:58', '2014-07-26 09:56:54', NULL, NULL),
(21, 26, 4, 2, 9, 'empresa de tecnologia', 'empresa-de-tecnologia', 'descripcion de la empresa de tecnologia', 'descripcion de la empresa de tecnologiadescripcion de la empresa de tecnologiadescripcion de la empresa de tecnologiadescripcion de la empresa de tecnologia', 'Cll 9 # 23-55 ', '6998765', 'img/empresas/2014-05-16-23-9U9gARreyZhOI-imac.jpg', 'img/empresas/banners/default/header.jpg', 1, '2014-05-17 04:38:28', '2014-05-17 04:38:28', NULL, NULL),
(24, 31, 1, 2, 3, 'dulcecitos', 'culcecitos', 'Dulcecitos es una empresa santandereana ubicada en la ciudad de Bucaramanga dedicada a la producción y comercialización mas cosas', 'Dulcecitos es una empresa santandereana ubicada en la ciudad de Bucaramanga dedicada a la producción y comercialización de dulces y postres en distintas presentaciones para todo tipo de ocasiones', 'calle 9 # 23-55', '6345372', 'img/empresas/2014-05-24-14-tkqmIc1CSHpUx-LOGO.JPG', 'img/empresas/banners/default/header.jpg', 1, '2014-05-24 19:21:28', '2014-05-24 19:21:59', NULL, NULL),
(30, 33, 4, 2, 3, 'bandslam music', 'bandslam', 'bandslam music  articulos musicales', 'artículos musicales', 'calle 9 No 23-45', '6656060', 'img/empresas/2014-07-24-20-hbs7HuaJ8FVXS-logo-bandslam.jpg', 'img/empresas/banners/default/header.jpg', 1, '2014-07-25 01:38:18', '2014-07-25 01:38:18', NULL, NULL),
(31, 10, 3, 2, 9, 'mindo 360', 'mundo-360', 'mi descripcion breve', 'mi descripcion larga', 'carrera 24 # 18-76', '65432134', 'img/empresas/2014-08-01-06-dleWzZFvsptUt-logo-mundo-360.jpg', 'img/empresas/banners2014-08-01-06-rcEyXdrMvHKMi-banner-mundo-360.jpg', 1, '2014-08-01 11:40:44', '2014-08-01 11:51:47', NULL, NULL),
(32, 12, 0, 2, 0, 'mi empresa ltda', 'mi-empresa', '', 'descripcion de mi empresa', 'carrera 24 # 18-76', '65432123', 'img/empresas/2014-08-04-02-08-03-x27cDorE95EN4-logo-mi-empresa.jpg', 'img/empresas/banners2014-08-04-03-08-08-xtjyzkXEu6aAw-banner-mi-empresa.jpg', 1, '2014-08-04 07:15:40', '2014-08-04 08:07:08', NULL, NULL),
(33, 11, 0, 2, 0, 'prueba', 'prueba', '', 'mi descripcion', 'Calle 9 # 23-45', '6543456', 'img/empresas/2014-08-11-17-08-55-Bfu8SiuOoJIr0-logo-prueba.jpg', 'img/empresas/banners/default/header.jpg', 1, '2014-08-11 22:01:55', '2014-08-11 22:01:55', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `img_productos`
--

CREATE TABLE IF NOT EXISTS `img_productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `producto_id` int(11) NOT NULL,
  `img1` varchar(250) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `img2` varchar(250) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `img3` varchar(250) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `img_productos`
--

INSERT INTO `img_productos` (`id`, `producto_id`, `img1`, `img2`, `img3`) VALUES
(1, 50, 'img/products/img-lista/madrid-back.jpg', 'img/products/img-lista/madrid-front.jpg', 'img/products/img-lista/madrid-sola.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `info_shipping`
--

CREATE TABLE IF NOT EXISTS `info_shipping` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `ciudad` int(11) NOT NULL,
  `direccion` varchar(250) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `barrio` varchar(250) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `telefono` varchar(250) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `info_shipping`
--

INSERT INTO `info_shipping` (`id`, `id_user`, `ciudad`, `direccion`, `barrio`, `telefono`, `created_at`, `updated_at`) VALUES
(1, 7, 1, 'Carrera 24 # 18-76', 'San francisco', '', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mails`
--

CREATE TABLE IF NOT EXISTS `mails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(250) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `mails`
--

INSERT INTO `mails` (`id`, `email`, `created_at`, `updated_at`) VALUES
(2, 'ederalvarez2009@hotmail.com', '2014-07-11', '2014-07-11'),
(3, 'ederalvarez2091057@gmail.com', '2014-07-12', '2014-07-12');

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
  `id_producto` int(11) DEFAULT NULL,
  `pregunta` varchar(250) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `respuesta` varchar(250) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `estado` int(11) NOT NULL DEFAULT '0',
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci AUTO_INCREMENT=51 ;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`id`, `empresa_id`, `user_id`, `id_producto`, `pregunta`, `respuesta`, `estado`, `created_at`, `updated_at`) VALUES
(10, 15, 7, NULL, 'Cual es tu vestido mas caro', 'uno azul ', 1, '2014-05-12', '2014-05-12'),
(11, 15, 7, NULL, 'cuano valen las gafas negras', NULL, 0, '2014-05-12', '2014-05-12'),
(12, 15, 7, NULL, 'cuanto vale la chica de la portada', NULL, 0, '2014-05-12', '2014-05-12'),
(13, 2, 7, NULL, 'pregunta x', 'respuesta x', 0, '2014-05-13', '2014-08-01'),
(18, 19, 7, NULL, 'esta es la primer pregunta para la empresa 5', 'ok, aqui estoy respondiendo la primer pregunta que se hizo a esta empresa.', 0, '2014-05-16', '2014-05-16'),
(19, 19, 7, NULL, 'otra pregunta', NULL, 0, '2014-05-16', '2014-05-16'),
(20, 19, 7, NULL, 'pregunta larga pregunta larga pregunta larga pregunta larga pregunta larga pregunta larga', NULL, 0, '2014-05-16', '2014-05-16'),
(21, 20, 7, NULL, 'Hola buen día; quiero saber si venden el iphone 6 Gracias', NULL, 0, '2014-05-16', '2014-05-16'),
(23, 21, 7, NULL, 'primer pregunta', 'esta es la respuesta', 0, '2014-05-16', '2014-05-16'),
(24, 22, 7, NULL, 'Buenas quisiera saber si hacen envíos a domicilio. Gracias', 'Hola buen dia. si te encuentras en la ciudad de bucaramanga el envio es gratis.', 0, '2014-05-20', '2014-05-20'),
(37, 30, 7, NULL, 'hola', 'hola', 0, '2014-08-01', '2014-08-06'),
(38, 30, 7, 64, 'otra pregunta', 'Otra que ???', 0, '2014-08-01', '2014-08-07'),
(39, 30, 7, 64, 'cuanto con el envio', 'En que ciudad', 0, '2014-08-01', '2014-08-07'),
(40, 30, 7, NULL, 'ggg', 'Gracias por preguntar', 0, '2014-08-01', '2014-08-01'),
(46, 24, 7, NULL, 'Hacen algun tipo de descuento por compras al por mayor', NULL, 0, '2014-08-01', '2014-08-01'),
(47, 30, 7, 64, 'pregunta', NULL, 0, '2014-08-04', '2014-08-04'),
(48, 2, 7, NULL, 'pregunta 2', 'mi respuesta', 1, '0000-00-00', '2014-08-04'),
(49, 24, 7, NULL, 'my question', 'MY ANSWER', 0, '2014-08-05', '2014-08-05'),
(50, 1, 7, NULL, 'Cuando sube articulos', 'pronto', 0, '0000-00-00', '2014-08-05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` int(11) NOT NULL,
  `subcat_id` int(11) DEFAULT NULL,
  `nombre` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `imagen` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `img1` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img2` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img3` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imgSmall` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `estado` int(11) NOT NULL DEFAULT '1',
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`),
  FULLTEXT KEY `imagen` (`imagen`),
  FULLTEXT KEY `imagen_2` (`imagen`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=73 ;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `categoria`, `subcat_id`, `nombre`, `descripcion`, `imagen`, `img1`, `img2`, `img3`, `imgSmall`, `estado`, `created_at`, `updated_at`) VALUES
(1, 2, NULL, 'Hamburguesa doble carne', 'Carne de res, pollo, verduras y papa a la francesa.', 'img/hamburguer.jpg', NULL, NULL, NULL, NULL, 1, '0000-00-00', '0000-00-00'),
(2, 3, 0, 'Perro americano', 'La especialidad de la casa.', 'img/products/2014-07-22-22-DPaQi9Umk11L8-perro.jpg', NULL, NULL, NULL, NULL, 1, '0000-00-00', '2014-07-22'),
(3, 2, NULL, 'Vestido cool', 'Nueva colleccion', 'img/productos/vestido.jpg', NULL, NULL, NULL, NULL, 1, '0000-00-00', '0000-00-00'),
(4, 2, NULL, 'Zapatos Nuevos', 'Nuevo modelo', 'img/productos/zapatos.jpg', NULL, NULL, NULL, NULL, 1, '0000-00-00', '0000-00-00'),
(5, 3, NULL, 'Falda X', 'Nuestra Nueva falda', 'img/productos/falda.jpg', NULL, NULL, NULL, NULL, 1, '0000-00-00', '0000-00-00'),
(6, 2, NULL, 'Accesorios', 'Nuevo diseño', 'img/productos/accesorios.jpg', NULL, NULL, NULL, NULL, 1, '0000-00-00', '0000-00-00'),
(7, 2, NULL, 'Gafas', 'Unicas', 'img/productos/gafas.jpg', NULL, NULL, NULL, NULL, 1, '0000-00-00', '0000-00-00'),
(8, 3, NULL, 'jeans', 'Mejorados', 'img/productos/jeans.jpg', NULL, NULL, NULL, NULL, 1, '0000-00-00', '0000-00-00'),
(11, 3, NULL, 'pollo broaster', 'pollo broaster', 'img/products/2014-05-06-14-XbzqoXvOFlgZb-promo3.jpg', NULL, NULL, NULL, NULL, 1, '2014-05-06', '2014-05-06'),
(12, 3, NULL, 'hamburguesa 3 carnes', 'hamburguesa 3 carnes', 'img/products/2014-05-07-04-pqKrU5uPFtIWC-ham2.jpg', NULL, NULL, NULL, NULL, 1, '2014-05-07', '2014-05-07'),
(13, 3, NULL, 'pehuga especial', 'Esta pechuga es mucho mejor que nuestra anterior publicada', 'img/products/2014-05-07-04-IqMOfxxWfb4GN-pechuga.jpg', NULL, NULL, NULL, NULL, 1, '2014-05-07', '2014-05-07'),
(14, 3, NULL, 'carne jugosa', 'Rica y deliciosa carne', 'img/products/2014-05-09-01-BLdemuISg1Ldj-carne.jpg', NULL, NULL, NULL, NULL, 1, '2014-05-09', '2014-05-09'),
(15, 3, NULL, 'mega burguer', 'hamburguesa muy grande', 'img/products/2014-05-09-01-WIjBLzdnphRms-burguer2.jpg', NULL, NULL, NULL, NULL, 1, '2014-05-09', '2014-05-09'),
(16, 3, NULL, 'torta de jamon', 'rica torta de jamon', 'img/products/2014-05-09-01-zFZlOmT0RtUbv-sandwich.jpg', NULL, NULL, NULL, NULL, 1, '2014-05-09', '2014-05-09'),
(17, 1, 2, 'falda roja', 'Esta falda es super genial. Precio muy economico', 'img/products/2014-05-13-20-fsdU3ReT7JZJq-roja.jpg', NULL, NULL, NULL, NULL, 1, '2014-05-13', '2014-05-13'),
(18, 3, 5, 'Especial', 'Plato muy especiall para ocasiones unicas', 'img/products/2014-05-14-15-QJEYDwniJIekZ-demiValentine.jpg', NULL, NULL, NULL, NULL, 1, '2014-05-14', '2014-05-14'),
(19, 4, 8, 'iphone 5s', 'Este es la ultima version del telefono de apple con grandes novedades en su sistema.', 'img/products/2014-05-16-20-BfBmH5KNzwBhJ-iphone.jpg', NULL, NULL, NULL, NULL, 1, '2014-05-16', '2014-05-16'),
(20, 4, 7, 'Imac retina', 'Presentación de la nueva MacBook Pro de 13 pulgadas. El procesador Intel Core i5 de doble núcleo del estado-of-the-art Entrega hasta 2 veces el rendimiento más rápido (más de la anterior generación de MacBook Pro). La nueva tecnología Thunderbolt permite conectar periféricos de alto rendimiento y pantallas de alta resolución a un solo puerto, y transferir archivos a una velocidad de un rayo. Y con la nueva cámara integrada FaceTime HD, usted puede hacer asombrosamente nítidas llamadas de vídeo de alta definición.', 'img/products/2014-05-16-20-4r6Zp9pbzChaA-imac.jpg', NULL, NULL, NULL, NULL, 1, '2014-05-16', '2014-05-16'),
(21, 3, 6, 'producto de prueba tags', 'espe producto es de prueba', 'img/products/2014-05-16-23-dEDDdsWgJbGWd-iphone.jpg', NULL, NULL, NULL, NULL, 1, '2014-05-16', '2014-05-16'),
(22, 4, 7, 'Imac retina', 'Presentación de la nueva MacBook Pro de 13 pulgadas. El procesador Intel Core i5 de doble núcleo del estado-of-the-art Entrega hasta 2 veces el rendimiento más rápido (más de la anterior generación de MacBook Pro). La nueva tecnología Thunderbolt permite conectar periféricos de alto rendimiento y pantallas de alta resolución a un solo puerto, y transferir archivos a una velocidad de un rayo. Y con la nueva cámara integrada FaceTime HD, usted puede hacer asombrosamente nítidas llamadas de vídeo de alta definición.', 'img/products/2014-05-16-23-PE49sUMR9wtJl-imac.jpg', NULL, NULL, NULL, NULL, 1, '2014-05-16', '2014-05-16'),
(23, 3, 9, 'postre de browney', 'Postre de browney y oreo', 'img/products/2014-05-20-02-rEl2mWlqRpEM6-browney.JPG', NULL, NULL, NULL, NULL, 1, '2014-05-20', '2014-05-20'),
(24, 3, 6, 'arequipe', 'Rico postre de arequipe con chispas de chocolate', 'img/products/2014-05-20-02-2PLlXV1aDxAGu-arequipe.JPG', NULL, NULL, NULL, NULL, 1, '2014-05-20', '2014-05-20'),
(25, 3, 9, 'Postre de Oreo', 'postre de galletas de oreo, pequeño', 'img/products/2014-05-20-02-3whWp3q4pz2DI-oreo.jpg', NULL, NULL, NULL, NULL, 1, '2014-05-20', '2014-05-20'),
(26, 3, 9, 'torta 3 leches', 'torta 3 leches para 7 personas ', 'img/products/2014-05-20-02-SHOdJHnNylPr5-torta-grande.jpg', NULL, NULL, NULL, NULL, 1, '2014-05-20', '2014-05-20'),
(27, 3, 9, 'Flan de leche', 'flan de leche para 4 personas', 'img/products/2014-05-20-03-ELA5z9G7H6x0v-flan.jpg', NULL, NULL, NULL, NULL, 1, '2014-05-20', '2014-05-20'),
(28, 1, 11, 'camiseta colombia', 'Adidas  traen para ti la nueva camiseta de la Selección Colombia De Futbol para que vivas la pasión de este deporte con orgullo. Pronto llegará e', 'img/products/2014-07-26-05-r0Da6lTbukRjj-colombia-larga.jpg', NULL, NULL, NULL, NULL, 1, '2014-05-20', '2014-08-10'),
(29, 1, 11, 'camiseta alemania', 'Adidas es una compañía que se dedica a desarrollar, fabricar y comercializar artículos deportivos,accesorios y servicios, los cuales cuentan con ', 'img/products/2014-07-21-02-OkGMwUQFe8sXK-alemania.jpg', NULL, NULL, NULL, NULL, 1, '2014-05-20', '2014-07-21'),
(30, 1, 11, '¡CHAQUETA DE PRESENTACIÓN ARGENTINA!', 'para ti esta espectacular Chaqueta de Presentación de Argentina Adidas, cuando el conjunto Albiceleste entra al campo de juego en el protocolo an', 'img/products/2014-07-21-02-Xzrb9PCISENfy-argentina.jpg', NULL, NULL, NULL, 'img/products/img-lista/2014-05-20-17-F5tUcLSmPZ1QO-chaqueta.jpg', 1, '2014-05-20', '2014-07-21'),
(31, 4, 8, 'Galaxy S4', 'precio espectacular y entrega inmediata', 'img/products/2014-05-23-23-yZtQGitr3Snlc-s4.jpg', NULL, NULL, NULL, NULL, 1, '2014-05-23', '2014-05-23'),
(32, 3, 9, 'postre de oreo', 'postre de oreo con chispas de chocolate', 'img/products/2014-05-24-00-MF36MNl9rn2RF-oreo.jpg', NULL, NULL, NULL, NULL, 1, '2014-05-24', '2014-05-24'),
(33, 3, 6, 'Costilla de cerdo', 'Espectaculares costillas de cerdo que puedes acompañar con mas de nuestros productos', 'img/products/2014-05-24-04-q2Bnm8KNc1h1y-mercagan_varios4.jpg', NULL, NULL, NULL, NULL, 1, '2014-05-24', '2014-05-24'),
(34, 3, 9, 'TORTA OREO', 'Descripcion del pstre de oreo', 'img/products/2014-05-24-14-Ge4b9lQdhp0dR-oreo.jpg', NULL, NULL, NULL, NULL, 1, '2014-05-24', '2014-05-24'),
(35, 3, 9, 'POSTRE FRESA', 'postre de fresa', 'img/products/2014-05-24-14-5qqiZHiokX9go-postre-fresa.jpg', NULL, NULL, NULL, NULL, 1, '2014-05-24', '2014-05-24'),
(36, 3, 9, 'TORTA CHOCOLATE', 'torta grande de chocolate', 'img/products/2014-05-24-14-Yk9k9qkEG9vre-torta-grande.jpg', NULL, NULL, NULL, NULL, 1, '2014-05-24', '2014-05-24'),
(40, 3, 5, 'mercagan junior', 'mercagan junior', 'img/products/2014-06-03-01-W4pHrvbkU7FrF-blog-item-2.png', NULL, NULL, NULL, NULL, 1, '2014-06-03', '2014-06-03'),
(41, 3, 6, 'otro plato', 'otro tipo de platillo', 'img/products/2014-06-05-11-0EqZy1wodXS1D-postre-fresa.jpg', NULL, NULL, NULL, NULL, 1, '2014-06-05', '2014-06-05'),
(42, 3, 9, 'otro plato 3', 'otro plato 3', 'img/products/2014-06-05-11-N5cBj3kGbkzkR-torta-grande.jpg', NULL, NULL, NULL, NULL, 1, '2014-06-05', '2014-06-05'),
(43, 1, 11, 'camiseta colombia', 'camiseta de la seleccion colombia', 'img/products/2014-06-05-11-svbbkHgYGG1Pa-dep2.jpg', NULL, NULL, NULL, NULL, 1, '2014-06-05', '2014-06-05'),
(44, 1, 11, 'Camiseta Mujer De La Selección Colombia Roja', 'camiseta de la seleccion colombia roja', 'img/products/2014-07-26-05-tDZw1OShJOMAn-dep2.jpg', NULL, NULL, NULL, 'img/products/img-lista/2014-06-05-12-kyL5X6rsW0iPE-colombia-roja.jpg', 1, '2014-06-05', '2014-07-26'),
(45, 1, 11, 'CAMISETAS ORIGINALES ITALIA MUNDIAL 2014', 'DISPONIBLE LAS TALLAS  S, M, L Y XL -  MANGA CORTA  \r\nTODAS LAS CAMISETAS VIENE EN SU RESPECTIVA BOLSA ORIGINAL', 'img/products/2014-07-26-05-wtMTSWYjz80S5-italia2014.jpg', NULL, NULL, NULL, 'img/products/img-lista/2014-06-05-12-x1cmXWkGK6P9I-italia2014.jpg', 1, '2014-06-05', '2014-07-26'),
(46, 1, 11, 'Camiseta Del Barcelona Messi, Parches Champio', 'Última en inventario\r\nTALLA M CON PARCHES DE LA CHAMPIONS OFICIALES\r\nVERSIÓN JUGADOR, ESTAMPADO DE MESSI \r\nMANGA CORTA ', 'img/products/2014-07-26-05-b5ee38kCa7ih5-barca.jpg', NULL, NULL, NULL, 'img/products/img-lista/2014-06-05-12-FGi8CkQwA2mGb-barca.jpg', 1, '2014-06-05', '2014-07-26'),
(47, 1, 11, 'Camiseta De La Selección Brasileña Y Francesa', 'camiseta de la seleccion  de brasil', 'img/products/2014-07-26-16-6M6jieKS4TWz8-brasil.jpg', NULL, NULL, NULL, 'img/products/img-lista/2014-06-05-17-0R8FQLNmyaxkC-brasil.jpg', 1, '2014-06-05', '2014-07-26'),
(48, 1, 11, 'Camisetas Hombre, Mujer Y Niño Selección Colombia ', 'camiseta de la seleccion colombia manga larga ', 'img/products/2014-07-26-05-Fe5E2z6c6Wdw9-colombia-larga.jpg', 'img/products/2014-07-05-02-OLCojGmUDvFW8-brasil.jpg', 'img/products/2014-07-05-03-WKVr5kI60hKTy-colombia-larga.jpg', NULL, 'img/products/img-lista/2014-06-05-17-X2ERF5LPHMMn7-colombia-larga.jpg', 1, '2014-06-05', '2014-07-26'),
(49, 1, 11, 'Pantalon Licra, Running, Ciclismo, Atletismo,', 'Pantalón unisex, esta diseñado para que te sientas cómodo mientras entrenas. Y su diseño que proporciona un rango de movimiento óptimos, QUE NO QUERRAS DETENERTE... ', 'img/products/2014-07-30-20-qHGZWFlSE5NSY-book1.jpg', NULL, NULL, NULL, 'img/products/img-lista/2014-06-05-17-1i4mGFCO7PvL1-pantalon.jpg', 1, '2014-06-05', '2014-07-30'),
(50, 4, 8, 'Camiseta Del Real Madrid 2014 Con Nombre, Marcadas', 'Sistema ClimaCool.\r\nTodas las tallas disponibles.\r\nCamiseta marcada o no, como la desee.', 'img/products/2014-08-10-03-08-30-ZHBKeSiA8GDsV-', 'img/products/img-lista/madrid-back.jpg', 'img/products/img-lista/madrid-front.jpg', 'img/products/img-lista/madird-sola.jpg', 'img/products/img-lista/2014-06-08-22-KRJVDmT1xWgiq-madrid2.jpg', 1, '2014-06-08', '2014-08-10'),
(52, 1, 11, 'Prueba resize', 'prueba resize', 'img/products/2014-06-08-23-bOUxUIeapjiKd-dep2.jpg', NULL, NULL, NULL, 'img/products/img-lista/2014-06-08-23-bOUxUIeapjiKd-dep2.jpg', 0, '2014-06-08', '2014-07-05'),
(53, 1, 11, 'Chaquetas Hombre, Ropa Hombre + Obsequio', 'linda chaqueta', 'img/products/2014-06-10-22-PwH3tavdraEzz-chaqueta.jpg', NULL, NULL, NULL, NULL, 1, '2014-06-10', '2014-06-10'),
(54, 1, 11, 'Chaquetas Hombre, Ropa Hombre + Obsequio', 'linda chaqueta', 'img/products/2014-06-10-22-u0GxwqfHmoUey-chaqueta.jpg', 'img/products/img-lista/2014-06-10-22-Po1dPf45gI2lg-chaqueta2.jpg', NULL, NULL, NULL, 1, '2014-06-10', '2014-06-10'),
(55, 1, 2, 'Chaquetas Hombre, Ropa Hombre + Obsequio2', 'chaqueta linda 2', 'img/products/2014-06-10-22-qc0q93Pdge3b4-chaqueta.jpg', 'img/products/img-lista/2014-06-10-22-tg9ozdH0Ti1iD-chaqueta2.jpg', NULL, NULL, NULL, 1, '2014-06-10', '2014-06-10'),
(56, 1, 11, 'Camisetas Polo Nautica,tommy,hugo Boss,tecnomarine Importada', 'camiseta polo ', 'img/products/2014-06-10-22-SrELMEeyYPeYQ-camiseta.jpg', 'img/products/img-lista/2014-06-10-22-zWyBz18smuwtO-camiseta2.jpg', NULL, NULL, NULL, 1, '2014-06-10', '2014-06-10'),
(57, 4, 8, 'Samsung Galaxy Tab3 8gb Android 4.0 Wifi 1gb Ram + Men 16gb', '  Samsung Galaxy Tab3  7" (Wi-Fi) 8GB Modelo SM210R + Memoria MicroSD 16GB\r\nEste Modelo No Recibi SimCard y Solo Esta Disponible En Color Blanco ', 'img/products/2014-06-11-00-mv5BSvLXRuMr7-tablet.jpg', 'img/products/img-lista/2014-06-11-00-5wJuQ29Ew46Kj-tablet2.jpg', NULL, NULL, NULL, 1, '2014-06-11', '2014-06-11'),
(58, 4, 8, 'Samsung Galaxy Tab3 8gb Android 4.0 Wifi 1gb Ram + Men 16gb', '  Samsung Galaxy Tab3  7" (Wi-Fi) 8GB Modelo SM210R + Memoria MicroSD 16GB\r\nEste Modelo No Recibi SimCard y Solo Esta Disponible En Color Blanco', 'img/products/2014-06-11-00-qh9ShafQf86Um-tablet.jpg', 'img/products/img-lista/2014-06-11-00-k12lxocQyfRIy-tablet2.jpg', NULL, NULL, NULL, 1, '2014-06-11', '2014-06-11'),
(59, 1, 11, 'Camiseta Del Barcelona Messi, Parches Champio', 'Camiseta 100 % Original del Barcelona 2014 Importada de Europa, Garantizada.\r\nTalla S, Sirve para un niño entre 6 y 10 años. Mirar el Tallaje Nike para Niño.', 'img/products/2014-06-11-00-o2YZL0M0hRTZI-barca.jpg', 'img/products/img-lista/2014-06-11-00-D54b18ybMTd7Z-barsa2.jpg', NULL, NULL, NULL, 1, '2014-06-11', '2014-06-11'),
(60, 2, 4, 'prueba de producto', 'prueba de producto con imagen 3 basia', 'img/products/2014-06-11-00-hzURrmvOvlQoN-barsa2.jpg', 'img/products/img-lista/2014-06-11-00-IJyLV9kI0pHJt-dep3.jpg', NULL, NULL, NULL, 1, '2014-06-11', '2014-06-11'),
(61, 1, 11, 'Prueba con 3 imagenes', 'prueba con 3 iagenes', 'img/products/2014-06-11-00-7OQ8qUy21Qej4-madrid.jpg', 'img/products/img-lista/2014-06-11-00-gpJN7U4Ps0Pb4-dep3.jpg', NULL, NULL, NULL, 1, '2014-06-11', '2014-06-11'),
(62, 2, 4, 'prueba 3 img again', 'prueba', 'img/products/2014-06-11-00-woFBo1kvivEPk-barsa2.jpg', 'img/products/img-lista/2014-06-11-00-oXqzLbmRZoAJC-brasil.jpg', 'img/products/img-lista/2014-06-11-00-uqb5k1E46nvxK-madrid2.jpg', NULL, NULL, 1, '2014-06-11', '2014-06-11'),
(63, 3, 9, 'otra torta Grande', 'torta de oreo acompañada de ricas cremas', 'img/products/2014-06-27-15-toE0rWwXKvVsX-oreo.jpg', 'img/products/img-lista/2014-06-27-15-iEEAp3T7QCKW7-torta-cremas.jpg', NULL, NULL, NULL, 1, '2014-06-27', '2014-06-27'),
(64, 4, 7, 'Guitarra Electrica + Cable + Tremolo! Ultimas En Promocion!', 'Guitarra eléctrica muy potente ', 'img/products/2014-07-24-20-yD6nax1u5SFJM-guitarra1.jpg', NULL, NULL, NULL, NULL, 1, '2014-07-24', '2014-07-24'),
(65, 1, 11, 'Gafas Oakley Radar 5 Lentes Intercambiables 100% Originales', 'gafas', 'img/products/2014-07-30-22-6NJNCCBkD9pxU-gafas.jpg', NULL, NULL, NULL, NULL, 0, '2014-07-30', '2014-07-30'),
(66, 1, NULL, 'otro', 'otro', 'img/products/2014-08-01-06-w4lbl4u3NucOu-head.jpg', NULL, NULL, NULL, NULL, 0, '2014-08-01', '2014-08-02'),
(67, 1, 2, 'Camiseta Del Real Madrid 2014 Con Nombre, Marcadas', 'camiseta cristiano', 'img/products/2014-08-04-05-08-50-Z95bvoGyDM6wi-', NULL, NULL, NULL, NULL, 1, '2014-08-04', '2014-08-04'),
(68, 1, 1, 'Tenis Zapatillas Adidas Fashion Speed Cross Envio + Medias', 'pendiente', 'img/products/2014-08-04-15-08-42-qdjYQGK3b9BjA-', NULL, NULL, NULL, NULL, 1, '2014-08-04', '2014-08-04'),
(69, 1, 0, '', '', 'img/products/2014-08-04-16-08-02-yUhRjd5NdI5zO-', NULL, NULL, NULL, NULL, 1, '2014-08-04', '2014-08-04'),
(70, 1, 1, 'ede', '222222', 'img/products/2014-08-04-16-08-37-RbKxwtdS3UQWn-', NULL, NULL, NULL, NULL, 1, '2014-08-04', '2014-08-04'),
(71, 1, 1, 'zapatos', '3333', 'img/products/2014-08-04-16-08-20-0SwymYCcFBDEE-', NULL, NULL, NULL, NULL, 1, '2014-08-04', '2014-08-04'),
(72, 1, 11, 'zapatos', 'pendiente', 'img/products/2014-08-04-16-08-23-WlF6yMQYxMNXG-', NULL, NULL, NULL, NULL, 1, '2014-08-04', '2014-08-04');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci AUTO_INCREMENT=15 ;

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
(13, 15, 1, 'torta leche', 'torta-leche', 25000, 12000, 52, 'descripcion de la promo', 'descripcion de la promo de la torta', 'img/promociones/2014-05-24-14-2jMed1XzB6Qz1-torta-cremas.jpg', 1, '2014-05-24', '2014-05-24'),
(14, 18, 3, 'prueba', 'prueba', 23000, 10000, 57, 'mi descripcion', 'mi descripcion', 'img/promociones/2014-08-01-06-K9Wobscas6soU-simbolo.png', 1, '2014-08-01', '2014-08-01');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci AUTO_INCREMENT=20 ;

--
-- Volcado de datos para la tabla `sedes`
--

INSERT INTO `sedes` (`id`, `empresa_id`, `ciudad_id`, `direccion`, `telefono`, `nombre_publico`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'cll 9 # 23-55', '6542020', 'mercagan-cabecera', 7.138065, -73.124203, '2014-04-30', '2014-05-23'),
(3, 1, 2, 'cra 27 # 32', '6827000', 'mercagan-centro', 7.124584, -73.118091, '0000-00-00', '2014-05-23'),
(4, 15, 1, 'ave. las americas # 113-85 ', '2887767', 'MayaTest777', 4.630623, -74.1427, '2014-05-01', '2014-05-15'),
(6, 2, 2, 'calle 9 # 23-45', '6827000', 'jim-sports', 7.138066, -73.124265, '2014-05-03', '2014-07-23'),
(8, 1, 2, 'Carrera 28 # 47-31', '6345362', 'mercagan-lagos', 7.117109, -73.113189, '2014-05-11', '2014-05-29'),
(10, 15, 2, 'carrera 24 # 19-76', '2887765', 'maya-bucaramanga', 7.130135, -73.121561, '2014-05-12', '2014-05-12'),
(12, 21, 2, 'carrera 27 # 41-45', '6998765', 'tecnologia', 7.11881, -73.115484, '2014-05-16', '2014-05-16'),
(13, 22, 2, 'carrera 24 # 20-35', '3130828036', 'dulcecitos', 7.128869, -73.121896, '2014-05-20', '2014-05-20'),
(14, 23, 2, 'calle 9 # 23-55', '6352525', 'dulcecitos-2', 7.138081, -73.124181, '2014-05-23', '2014-05-23'),
(15, 24, 2, 'calle 9 # 23-55', '6345372', 'dulcecitos-1', 7.138027, -73.124353, '2014-05-24', '2014-05-24'),
(16, 24, 2, 'calle 9 # 27-55', '6345372', 'dulcecitos-cabecera', 7.137071, -73.129181, '2014-05-24', '2014-05-24'),
(17, 30, 2, 'calle 9 No 23-45', '6656060', 'bandslam-bucara', 7.137056, -73.129265, '2014-07-24', '2014-07-24'),
(18, 31, 2, 'carrera 24 # 18-76', '65432134', 'mundo-360', 7.13022, -73.122221, '2014-08-01', '2014-08-01'),
(19, 32, 2, 'carrera 24 # 18-76', '65432123', 'mi-empresa', 7.13022, -73.122221, '2014-08-04', '2014-08-04');

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
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_2` (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci AUTO_INCREMENT=15 ;

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
(11, 1, 'ropa deportiva ', '0000-00-00', '0000-00-00'),
(12, 1, 'Ropa masculina', '2014-08-10', '2014-08-10'),
(13, 4, 'Tablets', '2014-08-10', '2014-08-10'),
(14, 5, 'Seguridad', '2014-08-10', '2014-08-10');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=105 ;

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
(70, 49, 'gym', '2014-06-05 17:31:31', '2014-06-05 17:31:31'),
(71, 50, 'real madrid', '2014-06-08 22:32:48', '2014-06-08 22:32:48'),
(72, 50, 'cr7', '2014-06-08 22:32:49', '2014-06-08 22:32:49'),
(73, 51, 'prueba', '2014-06-08 23:25:05', '2014-06-08 23:25:05'),
(74, 52, 'prueba', '2014-06-08 23:29:56', '2014-06-08 23:29:56'),
(75, 52, 'resize', '2014-06-08 23:29:56', '2014-06-08 23:29:56'),
(76, 53, '', '2014-06-10 22:05:40', '2014-06-10 22:05:40'),
(77, 54, 'chaqueta', '2014-06-10 22:29:22', '2014-06-10 22:29:22'),
(78, 54, 'cuero', '2014-06-10 22:29:22', '2014-06-10 22:29:22'),
(79, 55, 'chaqueta', '2014-06-10 22:56:32', '2014-06-10 22:56:32'),
(80, 55, 'linda', '2014-06-10 22:56:32', '2014-06-10 22:56:32'),
(81, 56, 'camiseta', '2014-06-10 22:59:52', '2014-06-10 22:59:52'),
(82, 57, 'samsung', '2014-06-11 00:25:06', '2014-06-11 00:25:06'),
(83, 57, 'android', '2014-06-11 00:25:06', '2014-06-11 00:25:06'),
(84, 58, 'samsung', '2014-06-11 00:30:50', '2014-06-11 00:30:50'),
(85, 58, 'andorid', '2014-06-11 00:30:51', '2014-06-11 00:30:51'),
(86, 59, 'barcelona', '2014-06-11 00:34:44', '2014-06-11 00:34:44'),
(87, 59, 'camiseta', '2014-06-11 00:34:44', '2014-06-11 00:34:44'),
(88, 60, 'prueba', '2014-06-11 00:37:50', '2014-06-11 00:37:50'),
(89, 61, 'prueba', '2014-06-11 00:42:30', '2014-06-11 00:42:30'),
(90, 61, '3imagens', '2014-06-11 00:42:30', '2014-06-11 00:42:30'),
(91, 62, '', '2014-06-11 00:59:36', '2014-06-11 00:59:36'),
(92, 63, 'torta', '2014-06-27 15:44:41', '2014-06-27 15:44:41'),
(93, 63, 'oreo', '2014-06-27 15:44:41', '2014-06-27 15:44:41'),
(94, 63, 'postres', '2014-06-27 15:44:41', '2014-06-27 15:44:41'),
(95, 64, 'musica', '2014-07-24 20:46:43', '2014-07-24 20:46:43'),
(96, 64, 'guitarra', '2014-07-24 20:46:43', '2014-07-24 20:46:43'),
(97, 65, '', '2014-07-30 22:26:53', '2014-07-30 22:26:53'),
(98, 66, 'otro', '2014-08-01 06:10:29', '2014-08-01 06:10:29'),
(99, 67, '', '2014-08-04 05:15:35', '2014-08-04 05:15:35'),
(100, 68, 'eder', '2014-08-04 15:37:42', '2014-08-04 15:37:42'),
(101, 69, '', '2014-08-04 16:10:03', '2014-08-04 16:10:03'),
(102, 70, '', '2014-08-04 16:22:38', '2014-08-04 16:22:38'),
(103, 71, '', '2014-08-04 16:24:21', '2014-08-04 16:24:21'),
(104, 72, '', '2014-08-04 16:42:24', '2014-08-04 16:42:24');

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
  `isadmin` int(5) NOT NULL DEFAULT '0',
  `active` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=34 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `img`, `password`, `password_temp`, `code`, `tipo`, `isadmin`, `active`, `remember_token`, `created_at`, `updated_at`) VALUES
(7, 'demi2', 'soni325@hotmail.com', 'img/users/2014-04-06-22-380534.png', '$2y$10$I/.opsoIcVtZNlWybnzwVeA8WROQv8uRCoTdSria3Ft.oEMCqIgqS', '$2y$10$m1t1Cw4dJqgJOPTrIYrDyO7fqehZ5JWiLrFIrgHCRoXOR1M08Os0O', 'EO0GQuUUNzMFAEZT0iqjlTvNbJpHMQgl2cw8ZFCOjocSOtLyjf4a2AP8pTsY', 1, 0, 1, 'H3HdXxksCOWathzVeOHNPsFkiUUI1QZj1oPAqTrQEVAFQcYXScOnt8qASMY3', '2014-04-07 03:47:18', '2014-08-05 06:49:40'),
(8, 'ederjulianA', 'ederalvarez2009@hotmail.com', 'img/users/2014-04-06-22-1080p-barcelona-team-2013-hd-wallpapers-4584.jpg', '$2y$10$PB8ik3xZiITRms4VeoFR4.TJ5K83.qRtGkSjDP1IUbCHqBMIV.Leu', '$2y$10$/.bOHO4x1z8A4H3gTzsTp.HS4MI9mjMvbFYDvpUg2j6X98nPcARpe', '8A0jWS8RfYqilRHJAQELeT6erdi4zvqOm7DED1wa0ObpHYqKWDdOFtheBntf', 2, 0, 1, 'WuzTAxfvJ1P5Bjgfg3xkZ1HNMfil8Y19qSlMIlAfqQmLyxROQJWdjTkTqmnw', '2014-04-07 03:52:10', '2014-08-05 05:40:30'),
(9, 'empresa1', 'empresa1@gmail.com', 'img/users/2014-04-07-16-falcao.jpg', '$2y$10$ZAVBQVPLMsyqEMKqfpaFWeRbwpMMUk2nuWjJ4LW7id09taURy7Ckq', '', '', 2, 0, 1, 'iwyctlcRTJHuaLern3BPz0kyZiqwiVlPaICULvov0KorgN8il4NrNtQuvydc', '2014-04-07 21:56:35', '2014-08-10 09:08:16'),
(10, 'empresa2', 'empresa2@gmail.com', 'img/users/2014-04-11-16-GHWT.jpg', '$2y$10$lEmS7rSeYmbIOyJlknUZCuGb6KDKS6mTCrA2M.xR61faI/Qn2p4v.', '', '', 2, 0, 1, '3ac4sd7Coo3RrhcZSpFhJvsHPjHlXiCOoaggQltubOSfll7nxPrtvRduEXOE', '2014-04-11 21:47:15', '2014-05-31 05:26:58'),
(11, 'empresa4', 'empresa4@gmail.com', 'img/users/2014-04-11-18-380534.png', '$2y$10$KJhgXGRBH7XcwktADxGJNuoo.0oFZrPUEdhoFosPqLtZhKtiJlKKC', '', '', 2, 0, 1, 'Lodkzl7QkFx6zc2V8Ea1OV5kAXzbqUCyNaYWpi9CAoX93xscGQ4Qi0VsnQl5', '2014-04-11 23:02:28', '2014-05-26 03:18:57'),
(12, 'empresa5', 'empresa5@gmail.com', 'img/users/2014-04-12-14-kitty.png', '$2y$10$7ojXGoUnvMecvJUGloQ5zuHAN461H4SoWIVfghov76fN9InSWFjYa', '', '', 2, 0, 1, 'Jn1lehn07Q0vXA9lxhzSXnAiW3Y9Kw0OLx17nGSsaxtE6XeGVEamNBmiO8Ry', '2014-04-12 19:23:27', '2014-08-11 21:58:41'),
(13, 'empresa10', 'empresa10@gmail.com', 'img/users/2014-04-12-19-falcao.jpg', '$2y$10$HKvlxMt8eH9IiV18SqEJJOhC/bQcqM8LEg6xX.fvRHNWOrEwiF/Ve', '', '', 2, 0, 1, 'dUrNMTDhVWzjSSHZJOXkNhHBbmwpi9tL9AqmMvYu64i3WHJcT0kGdw8TKApi', '2014-04-13 00:01:01', '2014-07-26 10:07:27'),
(19, 'laura', 'pecas654@hotmail.com', 'img/users/2014-04-14-23-IMG_5517.JPG', '$2y$10$cubXsvfLeNSeLEteodmfVe0H1G5hxxjVB1gyKORXHsZbro.ZjMRLO', '', '', 1, 0, 1, 'RXBWmL2pVUFE6VTWZ5WXGp56HGTOgu6NWTUEFoRbJdMeMSm1JCxXGUqgwga2', '2014-04-15 04:40:47', '2014-05-09 07:01:15'),
(21, 'ederjulianA', 'prueba12345678eder@gmail.com', 'img/users/2014-04-23-03-549310_553591994662751_250484142_n.jpg', '$2y$10$1DL/c0jv8SWWS2BhCl6s/OIFEIUsWv.Vf8H0Tulx9zIBOEadgfRTK', '', 'o0hEiT8Uw5faBlBKaD5VK1tlzWNXU9gsUEduN7bthKv2SgFfG9fbRiykiClo', 1, 0, 0, '', '2014-04-23 08:57:16', '2014-04-23 08:57:16'),
(23, 'waking', 'thewalkingdead2091057@gmail.com', 'img/users/2014-04-23-21-primas.jpg', '$2y$10$8d763ULyYvztaaLdyJ8Qb.b5gPp7OInJJ3lIABQ6UeyhOtyXXZI2m', '', '3iChvPW1ilfqOiryCWNntD0w6QvWXyZHXVPSjwlYtjhIl40vesD9HI4kP9qd', 2, 0, 0, '', '2014-04-24 02:32:58', '2014-04-24 02:32:58'),
(24, 'soni', 'demi@gmail.com', 'img/users/2014-05-04-22-tEG8NinXGeFv3-promo3.jpg', '$2y$10$dOOHi8zjy3tEtjn6iaz47erSL7IJn26H1hltWileJziz9mLu4gBhS', '', '', 2, 0, 1, 'X5grjDwbWHR7CsSNIkAgrhrbC2atQ50aQrCwMqS5MuazHP5h9zf6AxiuRKgh', '2014-05-05 03:53:47', '2014-08-08 09:00:43'),
(27, 'dulces', 'dulces2091057@gmail.com', 'img/users/2014-05-20-02-k1GVinvnsst3t-LOGO.JPG', '$2y$10$Z4wtGfQh2FtLKxCf3brPYuOQgeFzcRZR1lyjnJlYr/hJkJIC1jNGu', '', '', 2, 0, 1, '', '2014-05-20 07:31:24', '2014-05-20 07:31:24'),
(28, 'natalia', 'nataliaelvira2091057@gmail.com', 'img/users/2014-05-21-16-ZM3Nof4TQKMAw-demigame.png', '$2y$10$5IxAjjk39hkvuxSI6IqPEOoYLLW0Oyo8u7kF/yrOqJv1dXK0xsMo6', '', '', 1, 0, 1, 'gey9RSiZ423nxDyka2g2d14P3Yf5jD4qk9hWWxOzgXOXkbVM4jvMB2hrF2Q8', '2014-05-21 21:36:38', '2014-06-12 01:48:54'),
(31, 'dulcecitos', 'eder2091057@hotmail.com', 'img/users/2014-05-24-14-yH2PvaDDzIrtO-LOGO.JPG', '$2y$10$6/NnOgwIhmYgL9w02qjqVu.OY6rf..9z/Q4grg4LjFp8rhQrpDWVy', '', '', 2, 0, 1, '', '2014-05-24 19:14:14', '2014-06-27 20:47:28'),
(32, 'carlos', 'cvcarlosandres39@gmail.com', 'img/users/2014-06-07-19-0KVPIEjVepVcC-barca.jpg', '$2y$10$7uFbNv9Nyy5DLmyDkr16qeA.x6bL5CY2fc8eB5EmzK8xTMowMW/lO', '', 'flTGclPR0TM8t5ONIFs3qs2NdYwG6A0EoY5zFSg3VYW9u5LtLzk4obYnWxIh', 2, 0, 0, '', '2014-06-08 00:55:43', '2014-06-08 00:55:43'),
(33, 'bandslam', 'ederalvarez2091057@gmail.com', 'img/users/', '$2y$10$SzN7mCqpifVxpLANcIIok.4HgPX6NJGLT3/3fLymKDo7/cls7PEV6', '', '', 2, 1, 1, 'pNSuCHdsYv4CsbK75HnUuZTYR5ITL1U91DZFRKnNj5FoNbRGEQCOWzn95e3u', '2014-07-25 01:32:42', '2014-08-07 07:57:09');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci AUTO_INCREMENT=162 ;

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
(121, 7, 20, '2014-05-16', '2014-05-16'),
(151, 7, 38, '2014-06-01', '2014-06-01'),
(154, 28, 55, '2014-06-11', '2014-06-11'),
(160, 7, 50, '2014-08-01', '2014-08-01'),
(161, 7, 63, '2014-08-01', '2014-08-01');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci AUTO_INCREMENT=46 ;

--
-- Volcado de datos para la tabla `user_subs`
--

INSERT INTO `user_subs` (`id`, `user`, `empresa`, `pro_id`, `pro_name`, `created_at`, `updated_at`) VALUES
(14, 7, 22, NULL, NULL, '2014-05-21', '2014-05-21'),
(19, 28, 1, 43, 'camiseta colombia', '2014-05-21', '2014-06-05'),
(23, 7, 19, NULL, NULL, '2014-05-22', '2014-05-22'),
(26, 30, 23, NULL, NULL, '2014-05-24', '2014-05-24'),
(27, 7, 23, NULL, NULL, '2014-05-24', '2014-05-24'),
(29, 7, 24, 63, 'otra torta Grande', '2014-05-24', '2014-06-27'),
(37, 28, 15, NULL, NULL, '2014-06-11', '2014-06-11'),
(40, 33, 30, 64, 'Guitarra Electrica + Cable + Tremolo! Ultimas En Promocion!', '2014-07-24', '2014-07-24'),
(41, 9, 2, 72, 'zapatos', '2014-08-01', '2014-08-04'),
(43, 7, 30, NULL, NULL, '2014-08-01', '2014-08-01'),
(44, 10, 2, 72, 'zapatos', '2014-08-01', '2014-08-04'),
(45, 12, 32, 67, 'Camiseta Del Real Madrid 2014 Con Nombre, Marcadas', '2014-08-04', '2014-08-04');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
