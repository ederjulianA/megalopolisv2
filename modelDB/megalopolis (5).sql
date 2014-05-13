-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 13-05-2014 a las 20:47:17
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

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
(16, 17, 10, 45500, 8, '2014-05-13', '2014-05-13');

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
(4, 'Tegnologia', '0000-00-00', '0000-00-00');

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
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=20 ;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`id`, `user_id`, `sector_id`, `ciudad_id`, `barrio`, `razon_social`, `nombre_publico`, `desc_breve`, `desc_larga`, `direccion_principal`, `telefono`, `logo`, `created_at`, `updated_at`, `latitude`, `longitude`) VALUES
(1, 8, 1, 4, 0, 'Mercagan ', 'mercagan', 'Descripción Breve de la empresa de prueba																																																																																								', 'Descripción larga  de la empresa Descripción larga  de la empresa Descripción larga  de la empresa Descripción larga  de la empresa Descripción larga  de la empresa Descripción larga  de la empresa Descripción larga  de la empresa																																																																																								', 'calle 45 # 35-38', '76798829', 'img/empresas/2014-04-23-21-QXHARPcse4Jru-merca.jpg', '0000-00-00 00:00:00', '2014-05-12 00:59:36', 3.376421, -76.519048),
(2, 9, 2, 2, 0, 'FC Barcelona', 'barcelona-fc', 'MAS QUE UN CLUB																																																																														', 'Equipo de Fútbol Situado en la ciudad de Barcelona España																																																																													', 'car 14 # 23-45', '6827000', 'img/empresas/2014-04-12-00-BbUqBWvza5A8o-1080p-barcelona-team-2013-hd-wallpapers-4584.jpg', '2014-04-08 00:09:20', '2014-04-12 05:08:33', NULL, NULL),
(15, 13, 3, 3, 6, 'creaciones maya test', 'MayaTest', 'empresa de confecciones maya test', 'empresa de confecciones maya testempresa de confecciones maya testempresa de confecciones maya testempresa de confecciones maya test', 'ave. las americas # 113-85 ', '2887765', 'img/empresas/2014-04-30-21-h2yCUjkB7tFiX-maya.JPG', '2014-05-01 02:53:58', '2014-05-12 08:42:57', NULL, NULL),
(19, 12, 2, 1, 12, 'la empresa 5 limitada', 'la-empresa-5', 'descripcion breve', 'descripcion larga', 'carrera 53 No. 13 -51', '632800900', 'img/empresas/2014-05-11-20-YsLhLwEY9Sv7U-IMG_5610.JPG', '2014-05-12 01:43:31', '2014-05-12 01:43:31', NULL, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`id`, `empresa_id`, `user_id`, `pregunta`, `respuesta`, `estado`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'pregunta numero 1 ', 'respuesta de la pregunta 1', 1, '0000-00-00', '0000-00-00'),
(2, 1, 1, 'pregunta numero 2', 'respuesta de la pregunta 2', 1, '0000-00-00', '0000-00-00'),
(7, 1, 7, 'por que son tan buenas sus hamburguesas', 'xq si', 1, '2014-05-10', '2014-05-12'),
(10, 15, 7, 'Cual es tu vestido mas caro', 'uno azul ', 1, '2014-05-12', '2014-05-12'),
(11, 15, 7, 'cuano valen las gafas negras', NULL, 0, '2014-05-12', '2014-05-12'),
(12, 15, 7, 'cuanto vale la chica de la portada', NULL, 0, '2014-05-12', '2014-05-12'),
(13, 2, 7, 'pregunta x', NULL, 0, '2014-05-13', '2014-05-13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` int(11) NOT NULL,
  `subcat_id` int(11) DEFAULT NULL,
  `nombre` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(145) COLLATE utf8_unicode_ci NOT NULL,
  `imagen` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `categoria`, `subcat_id`, `nombre`, `descripcion`, `imagen`, `created_at`, `updated_at`) VALUES
(1, 2, NULL, 'Hamburguesa doble carne', 'Carne de res, pollo, verduras y papa a la francesa.', 'img/hamburguer.jpg', '0000-00-00', '0000-00-00'),
(2, 3, NULL, 'Perro americano', 'La especialidad de la casa.', 'img/hotdog.jpg', '0000-00-00', '0000-00-00'),
(3, 2, NULL, 'Vestido cool', 'Nueva colleccion', 'img/productos/vestido.jpg', '0000-00-00', '0000-00-00'),
(4, 2, NULL, 'Zapatos Nuevos', 'Nuevo modelo', 'img/productos/zapatos.jpg', '0000-00-00', '0000-00-00'),
(5, 3, NULL, 'Falda X', 'Nuestra Nueva falda', 'img/productos/falda.jpg', '0000-00-00', '0000-00-00'),
(6, 2, NULL, 'Accesorios', 'Nuevo diseño', 'img/productos/accesorios.jpg', '0000-00-00', '0000-00-00'),
(7, 2, NULL, 'Gafas', 'Unicas', 'img/productos/gafas.jpg', '0000-00-00', '0000-00-00'),
(8, 3, NULL, 'jeans', 'Mejorados', 'img/productos/jeans.jpg', '0000-00-00', '0000-00-00'),
(9, 3, NULL, 'pechuga a la plancha', 'pechuga a la plancha', 'img/products/2014-05-06-14-Uow39zWkl177C-pech', '2014-05-06', '2014-05-06'),
(10, 3, NULL, 'pechuga a la plancha', 'pechuga a la plancha', 'img/products/2014-05-06-14-1lLrrFH9zVx0u-pechuga.jpg', '2014-05-06', '2014-05-06'),
(11, 3, NULL, 'pollo broaster', 'pollo broaster', 'img/products/2014-05-06-14-XbzqoXvOFlgZb-promo3.jpg', '2014-05-06', '2014-05-06'),
(12, 3, NULL, 'hamburguesa 3 carnes', 'hamburguesa 3 carnes', 'img/products/2014-05-07-04-pqKrU5uPFtIWC-ham2.jpg', '2014-05-07', '2014-05-07'),
(13, 3, NULL, 'pehuga especial', 'Esta pechuga es mucho mejor que nuestra anterior publicada', 'img/products/2014-05-07-04-IqMOfxxWfb4GN-pechuga.jpg', '2014-05-07', '2014-05-07'),
(14, 3, NULL, 'carne jugosa', 'Rica y deliciosa carne', 'img/products/2014-05-09-01-BLdemuISg1Ldj-carne.jpg', '2014-05-09', '2014-05-09'),
(15, 3, NULL, 'mega burguer', 'hamburguesa muy grande', 'img/products/2014-05-09-01-WIjBLzdnphRms-burguer2.jpg', '2014-05-09', '2014-05-09'),
(16, 3, NULL, 'torta de jamon', 'rica torta de jamon', 'img/products/2014-05-09-01-zFZlOmT0RtUbv-sandwich.jpg', '2014-05-09', '2014-05-09'),
(17, 1, 2, 'falda roja', 'Esta falda es super genial. Precio muy economico', 'img/products/2014-05-13-20-fsdU3ReT7JZJq-roja.jpg', '2014-05-13', '2014-05-13');

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
  `descripcion_corta` varchar(250) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `descripcion_larga` text COLLATE utf8mb4_spanish2_ci NOT NULL,
  `estado` int(11) NOT NULL,
  `img` varchar(250) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `promociones`
--

INSERT INTO `promociones` (`id`, `sede_id`, `categoria_id`, `titulo`, `titulo_seo`, `descripcion_corta`, `descripcion_larga`, `estado`, `img`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 'Hamburguesa especial', 'Hamburguesa-especial', 'Promocion especial en nuestra mercagan junior', 'Aqui se espesifican las condiciones y restricciones de la promocion', 1, 'img/promociones/promo1.jpg', '2014-05-02', '2014-05-02'),
(2, 1, 3, 'perro loco', 'perro-loco', 'Promo perro caliente', 'Aqui la descripcion, condiciones y restricciones de la promocion', 1, 'img/promociones/promo2.jpg', '2014-05-02', '2014-05-02'),
(3, 3, 3, 'Pollo barato', 'pollo-barato', 'desc corta del pollo barato', 'desc largadesc largadesc largadesc larga', 0, 'img/promociones/2014-05-02-23-sqqKhk3qI8hip-promo3.jpg', '2014-05-02', '2014-05-02'),
(4, 4, 1, 'Mega Bestido', 'Mega-bestido', 'Ultimas unidades no te los pierdas', 'Esta es la descripcion larga de la promo del bestido', 0, 'img/promociones/2014-05-03-02-N8wRItihaVuhC-ropa.jpg', '2014-05-03', '2014-05-03'),
(5, 6, 1, 'promo1', 'promo1', 'desc breve', 'desc larga', 0, 'img/promociones/2014-05-03-03-8WMxuCma8TUOE-maya.JPG', '2014-05-03', '2014-05-03'),
(6, 3, 2, 'collar', 'collar', 'lindo collar ', 'esta en promocion por muy poco tiempo', 0, 'img/promociones/2014-05-03-23-hAn1D92zHOSzH-maya.JPG', '2014-05-03', '2014-05-03'),
(7, 10, 1, 'falta roja -50%', 'falda-roja', 'Para nuestros primeros clientes', 'esta falda estara disponible por poco tiempo', 0, 'img/promociones/2014-05-13-20-J2KEi7Ee9pPD1-roja.jpg', '2014-05-13', '2014-05-13');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `sectores`
--

INSERT INTO `sectores` (`id`, `nom_sector`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Comidas', 'img/sectores/comidas.jpg', '0000-00-00', '0000-00-00'),
(2, 'Ropa', 'img/sectores/ropa.jpg', '0000-00-00', '0000-00-00'),
(3, 'Confecciones', 'img/sectores/confecciones.jpg', '0000-00-00', '0000-00-00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `sedes`
--

INSERT INTO `sedes` (`id`, `empresa_id`, `ciudad_id`, `direccion`, `telefono`, `nombre_publico`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'calle 45 # 35-38', '6542020', 'mercagan-cabecera', 7.119137, -73.109396, '2014-04-30', '2014-05-12'),
(3, 1, 2, 'calle 54 # 33-45', '6827000', 'mercagan-centro', 7.111098, -73.109782, '0000-00-00', '2014-05-12'),
(4, 15, NULL, 'ave. las americas # 113-85 ', '2887767', 'MayaTest777', NULL, NULL, '2014-05-01', '2014-05-03'),
(6, 2, NULL, 'car 14 # 23-45', '6827000', 'barcelona-fc', NULL, NULL, '2014-05-03', '2014-05-03'),
(8, 1, 2, 'carrera 22 # 13-45', '6345372', 'mercagan-lagos', 7.134273, -73.124725, '2014-05-11', '2014-05-12'),
(10, 15, 2, 'carrera 24 # 19-76', '2887765', 'maya-bucaramanga', 7.130135, -73.121561, '2014-05-12', '2014-05-12');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `subcategorias`
--

INSERT INTO `subcategorias` (`id`, `categoria_id`, `nombre_sub`, `created_at`, `updated_at`) VALUES
(1, 1, 'bolsos y carteras', '0000-00-00', '0000-00-00'),
(2, 1, 'Ropa femenina', '0000-00-00', '0000-00-00'),
(3, 2, 'Cuidado del cabello', '0000-00-00', '0000-00-00'),
(4, 2, 'cuidado del cuerpo', '0000-00-00', '0000-00-00'),
(5, 3, 'Comidas rapidas', '0000-00-00', '0000-00-00'),
(6, 3, 'Restaurantes gourmet', '0000-00-00', '0000-00-00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=25 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `img`, `password`, `password_temp`, `code`, `tipo`, `active`, `remember_token`, `created_at`, `updated_at`) VALUES
(7, 'demi', 'demi@gmail.com', 'img/users/2014-04-06-22-380534.png', '$2y$10$1K/W2KH0YotORBMXB8Cwc.RUIFQQibDDH93fwzC6xDfYSFjnfBEX2', '$2y$10$m1t1Cw4dJqgJOPTrIYrDyO7fqehZ5JWiLrFIrgHCRoXOR1M08Os0O', 'EO0GQuUUNzMFAEZT0iqjlTvNbJpHMQgl2cw8ZFCOjocSOtLyjf4a2AP8pTsY', 1, 1, 'UnKpM9KwaSLRgFv4jQp2VQUEcNzLHRsBQoROUhk8UXAXhZvc150vHjYE4cUC', '2014-04-07 03:47:18', '2014-05-13 23:02:55'),
(8, 'ederjulianA', 'ederalvarez2009@hotmail.com', 'img/users/2014-04-06-22-1080p-barcelona-team-2013-hd-wallpapers-4584.jpg', '$2y$10$93p2BXJXzCqpk/Vnr9EJNOlsYAIceWStRRRRnbD6ghwx0gW3.64D6', '', '', 2, 1, '0WRbGQi8iRkQCYgUR1v68ndJq9Ctwi0VYbrP7s3lSwMcdwuoVMaTlz9zh8ml', '2014-04-07 03:52:10', '2014-05-13 01:25:01'),
(9, 'empresa1', 'empresa1@gmail.com', 'img/users/2014-04-07-16-falcao.jpg', '$2y$10$ZAVBQVPLMsyqEMKqfpaFWeRbwpMMUk2nuWjJ4LW7id09taURy7Ckq', '', '', 2, 1, 'JwDCh1fmXYyEE7KGvMxo7XNR61bc2oLwNaBZ5SWD8KG4Rj9GW190zUr3uWVW', '2014-04-07 21:56:35', '2014-05-14 01:35:13'),
(10, 'empresa2', 'empresa2@gmail.com', 'img/users/2014-04-11-16-GHWT.jpg', '$2y$10$lEmS7rSeYmbIOyJlknUZCuGb6KDKS6mTCrA2M.xR61faI/Qn2p4v.', '', '', 2, 1, '', '2014-04-11 21:47:15', '2014-04-11 21:47:15'),
(11, 'empresa4', 'empresa4@gmail.com', 'img/users/2014-04-11-18-380534.png', '$2y$10$KJhgXGRBH7XcwktADxGJNuoo.0oFZrPUEdhoFosPqLtZhKtiJlKKC', '', '', 2, 1, 'PHqV33t4MTcwfsW55WDvHspKrDelg05P3Jm8vTas0t43KTNfH7gPMna6noXo', '2014-04-11 23:02:28', '2014-05-12 01:24:26'),
(12, 'empresa5', 'empresa5@gmail.com', 'img/users/2014-04-12-14-kitty.png', '$2y$10$7ojXGoUnvMecvJUGloQ5zuHAN461H4SoWIVfghov76fN9InSWFjYa', '', '', 2, 1, 'SmaAepndeZEQdYMAUSLyHbuia1cvQoDgbPaQE9wtEQ2rzIvkGCV3UG76wG7M', '2014-04-12 19:23:27', '2014-05-13 23:32:15'),
(13, 'empresa10', 'empresa10@gmail.com', 'img/users/2014-04-12-19-falcao.jpg', '$2y$10$osBVhbOwncnR.3eScu1mk.iI642YkFDh0seOrFh21SKNAkf4B072C', '', '', 2, 1, 'jnhNPkvX3qaT1tZ2ZpRMeeQXqCACVfK0lJSvp09c1Z1T4bhg5nW4ZDoY1Tsh', '2014-04-13 00:01:01', '2014-05-12 11:43:26'),
(18, 'ederjulianA', 'ederalvarez2091057@gmail.com', 'img/users/2014-04-14-23-IMG_4615.JPG', '$2y$10$J2TXJ4eiDO13u5l47KWfaevibm3inW5K5iDs9pChA//U1gznMJ0oC', '', '', 1, 1, '7a9A0CjVwftCtvW28qvRvRsqEDA0XtRNTumFOZPnp7oWg17vwtuoONxuiIHI', '2014-04-15 04:35:09', '2014-05-03 04:42:25'),
(19, 'laura', 'pecas654@hotmail.com', 'img/users/2014-04-14-23-IMG_5517.JPG', '$2y$10$cubXsvfLeNSeLEteodmfVe0H1G5hxxjVB1gyKORXHsZbro.ZjMRLO', '', '', 1, 1, 'RXBWmL2pVUFE6VTWZ5WXGp56HGTOgu6NWTUEFoRbJdMeMSm1JCxXGUqgwga2', '2014-04-15 04:40:47', '2014-05-09 07:01:15'),
(21, 'ederjulianA', 'prueba12345678eder@gmail.com', 'img/users/2014-04-23-03-549310_553591994662751_250484142_n.jpg', '$2y$10$1DL/c0jv8SWWS2BhCl6s/OIFEIUsWv.Vf8H0Tulx9zIBOEadgfRTK', '', 'o0hEiT8Uw5faBlBKaD5VK1tlzWNXU9gsUEduN7bthKv2SgFfG9fbRiykiClo', 1, 0, '', '2014-04-23 08:57:16', '2014-04-23 08:57:16'),
(22, 'carlos', 'cvcarlosandres39@gmail.com', 'img/users/2014-04-23-16-call-of-duty-modern-warfare-3-mw3-xbox-360-disponible-ya-_MCO-F-19658871_2299.jpg', '$2y$10$gXM9yQhroIEp1IZ8Fa5jWOkG.whJ8tv5/7eak8evl3kw5PVDsOYqu', '', '', 2, 1, '', '2014-04-23 21:00:56', '2014-04-23 21:03:25'),
(23, 'waking', 'thewalkingdead2091057@gmail.com', 'img/users/2014-04-23-21-primas.jpg', '$2y$10$8d763ULyYvztaaLdyJ8Qb.b5gPp7OInJJ3lIABQ6UeyhOtyXXZI2m', '', '3iChvPW1ilfqOiryCWNntD0w6QvWXyZHXVPSjwlYtjhIl40vesD9HI4kP9qd', 2, 0, '', '2014-04-24 02:32:58', '2014-04-24 02:32:58'),
(24, 'soni', 'soni325@hotmail.com', 'img/users/2014-05-04-22-tEG8NinXGeFv3-promo3.jpg', '$2y$10$dOOHi8zjy3tEtjn6iaz47erSL7IJn26H1hltWileJziz9mLu4gBhS', '', '', 2, 1, '', '2014-05-05 03:53:47', '2014-05-05 03:54:46');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci AUTO_INCREMENT=120 ;

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
(105, 7, 2, '2014-05-09', '2014-05-09'),
(112, 7, 7, '2014-05-09', '2014-05-09'),
(117, 7, 14, '2014-05-12', '2014-05-12'),
(118, 7, 4, '2014-05-13', '2014-05-13');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
