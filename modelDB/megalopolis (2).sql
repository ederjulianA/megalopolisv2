-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 03-05-2014 a las 04:03:18
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`id`, `user_id`, `sector_id`, `ciudad_id`, `barrio`, `razon_social`, `nombre_publico`, `desc_breve`, `desc_larga`, `direccion_principal`, `telefono`, `logo`, `created_at`, `updated_at`) VALUES
(1, 8, 1, 4, 0, 'Mercagan ', 'mercagan', 'Descripción Breve de la empresa de prueba																																																																																								', 'Descripción larga  de la empresa Descripción larga  de la empresa Descripción larga  de la empresa Descripción larga  de la empresa Descripción larga  de la empresa Descripción larga  de la empresa Descripción larga  de la empresa																																																																																								', 'calle 45 # 35-38', '76798829', 'img/empresas/2014-04-23-21-QXHARPcse4Jru-merca.jpg', '0000-00-00 00:00:00', '2014-05-01 06:15:41'),
(2, 9, 2, 2, 0, 'FC Barcelona', 'barcelona-fc', 'MAS QUE UN CLUB																																																																														', 'Equipo de Fútbol Situado en la ciudad de Barcelona España																																																																													', 'car 14 # 23-45', '6827000', 'img/empresas/2014-04-12-00-BbUqBWvza5A8o-1080p-barcelona-team-2013-hd-wallpapers-4584.jpg', '2014-04-08 00:09:20', '2014-04-12 05:08:33'),
(15, 13, 3, 3, 6, 'creaciones maya test', 'MayaTest', 'empresa de confecciones maya test', 'empresa de confecciones maya testempresa de confecciones maya testempresa de confecciones maya testempresa de confecciones maya test', 'ave. las americas # 113-85 ', '2887767', 'img/empresas/2014-04-30-21-h2yCUjkB7tFiX-maya.JPG', '2014-05-01 02:53:58', '2014-05-01 02:53:58');

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
  `pregunta` varchar(250) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `respuesta` varchar(250) COLLATE utf8mb4_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`id`, `empresa_id`, `pregunta`, `respuesta`) VALUES
(1, 1, 'pregunta numero 1 ', 'respuesta de la pregunta 1'),
(2, 1, 'pregunta numero 2', 'respuesta de la pregunta 2');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `promociones`
--

INSERT INTO `promociones` (`id`, `sede_id`, `categoria_id`, `titulo`, `titulo_seo`, `descripcion_corta`, `descripcion_larga`, `estado`, `img`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 'Hamburguesa especial', 'Hamburguesa-especial', 'Promocion especial en nuestra mercagan junior', 'Aqui se espesifican las condiciones y restricciones de la promocion', 1, 'img/promociones/promo1.jpg', '2014-05-02', '2014-05-02'),
(2, 1, 3, 'perro loco', 'perro-loco', 'Promo perro caliente', 'Aqui la descripcion, condiciones y restricciones de la promocion', 1, 'img/promociones/promo2.jpg', '2014-05-02', '2014-05-02'),
(3, 3, 3, 'Pollo barato', 'pollo-barato', 'desc corta del pollo barato', 'desc largadesc largadesc largadesc larga', 0, 'img/promociones/2014-05-02-23-sqqKhk3qI8hip-promo3.jpg', '2014-05-02', '2014-05-02'),
(4, 4, 1, 'Mega Bestido', 'Mega-bestido', 'Ultimas unidades no te los pierdas', 'Esta es la descripcion larga de la promo del bestido', 0, 'img/promociones/2014-05-03-02-N8wRItihaVuhC-ropa.jpg', '2014-05-03', '2014-05-03'),
(5, 6, 1, 'promo1', 'promo1', 'desc breve', 'desc larga', 0, 'img/promociones/2014-05-03-03-8WMxuCma8TUOE-maya.JPG', '2014-05-03', '2014-05-03');

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
  `direccion` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `telefono` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `nombre_publico` varchar(250) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `sedes`
--

INSERT INTO `sedes` (`id`, `empresa_id`, `direccion`, `telefono`, `nombre_publico`, `created_at`, `updated_at`) VALUES
(1, 1, 'calle 45 # 35-38', '6542020', 'mercagan-cabecera', '2014-04-30', '2014-05-02'),
(3, 1, 'cabecera 5ta etapa', '6827000', 'mercagan-centro', '0000-00-00', '2014-05-01'),
(4, 15, 'ave. las americas # 113-85 ', '2887767', 'MayaTest777', '2014-05-01', '2014-05-03'),
(6, 2, 'car 14 # 23-45', '6827000', 'barcelona-fc', '2014-05-03', '2014-05-03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subcategorias`
--

CREATE TABLE IF NOT EXISTS `subcategorias` (
  `id` int(11) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `nombre_sub` varchar(150) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `subcategorias`
--

INSERT INTO `subcategorias` (`id`, `categoria_id`, `nombre_sub`, `created_at`, `updated_at`) VALUES
(0, 1, 'bolsos y carteras', '0000-00-00', '0000-00-00'),
(0, 1, 'Ropa femenina', '0000-00-00', '0000-00-00'),
(0, 2, 'Cuidado del cabello', '0000-00-00', '0000-00-00'),
(0, 2, 'cuidado del cuerpo', '0000-00-00', '0000-00-00'),
(0, 3, 'Comidas rapidas', '0000-00-00', '0000-00-00'),
(0, 3, 'Restaurantes gourmet', '0000-00-00', '0000-00-00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=24 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `img`, `password`, `password_temp`, `code`, `tipo`, `active`, `remember_token`, `created_at`, `updated_at`) VALUES
(7, 'demi', 'demi@gmail.com', 'img/users/2014-04-06-22-380534.png', '$2y$10$WAPGZxCNYEQYI0oPnnty5OzIEYLe8b0uwN8iH0pjOU4uhHKDd9k8W', '', '', 1, 1, '', '2014-04-07 03:47:18', '2014-04-07 03:47:18'),
(8, 'ederjulianA', 'ederalvarez2009@hotmail.com', 'img/users/2014-04-06-22-1080p-barcelona-team-2013-hd-wallpapers-4584.jpg', '$2y$10$93p2BXJXzCqpk/Vnr9EJNOlsYAIceWStRRRRnbD6ghwx0gW3.64D6', '', '', 2, 1, '5i2i80B0iAaMXnEnsD2bXyeq3PRCvS2qwhAbwottmx4WtPhS8x1t8FzJmRlH', '2014-04-07 03:52:10', '2014-05-03 07:39:19'),
(9, 'empresa1', 'empresa1@gmail.com', 'img/users/2014-04-07-16-falcao.jpg', '$2y$10$ZAVBQVPLMsyqEMKqfpaFWeRbwpMMUk2nuWjJ4LW7id09taURy7Ckq', '', '', 2, 1, 'iUvk8Vo0RaFQSvrGAA9N8EEqEIulrLRG9lQpSu8Pm0mSjd5cN8kZ1c8sdV1u', '2014-04-07 21:56:35', '2014-05-03 08:55:20'),
(10, 'empresa2', 'empresa2@gmail.com', 'img/users/2014-04-11-16-GHWT.jpg', '$2y$10$lEmS7rSeYmbIOyJlknUZCuGb6KDKS6mTCrA2M.xR61faI/Qn2p4v.', '', '', 2, 1, '', '2014-04-11 21:47:15', '2014-04-11 21:47:15'),
(11, 'empresa4', 'empresa4@gmail.com', 'img/users/2014-04-11-18-380534.png', '$2y$10$KJhgXGRBH7XcwktADxGJNuoo.0oFZrPUEdhoFosPqLtZhKtiJlKKC', '', '', 2, 1, '', '2014-04-11 23:02:28', '2014-04-11 23:02:28'),
(12, 'empresa5', 'empresa5@gmail.com', 'img/users/2014-04-12-14-kitty.png', '$2y$10$7ojXGoUnvMecvJUGloQ5zuHAN461H4SoWIVfghov76fN9InSWFjYa', '', '', 2, 1, '', '2014-04-12 19:23:27', '2014-04-12 19:23:27'),
(13, 'empresa10', 'empresa10@gmail.com', 'img/users/2014-04-12-19-falcao.jpg', '$2y$10$osBVhbOwncnR.3eScu1mk.iI642YkFDh0seOrFh21SKNAkf4B072C', '', '', 2, 1, 'wMNXignVxRpA7Cm4zFOG9M71NlGMkhZFR0GVlQZbZOSF9o7mxLvz1wq0rkFe', '2014-04-13 00:01:01', '2014-05-03 07:48:17'),
(18, 'ederjulianA', 'ederalvarez2091057@gmail.com', 'img/users/2014-04-14-23-IMG_4615.JPG', '$2y$10$J2TXJ4eiDO13u5l47KWfaevibm3inW5K5iDs9pChA//U1gznMJ0oC', '', '', 1, 1, '7a9A0CjVwftCtvW28qvRvRsqEDA0XtRNTumFOZPnp7oWg17vwtuoONxuiIHI', '2014-04-15 04:35:09', '2014-05-03 04:42:25'),
(19, 'laura', 'pecas654@hotmail.com', 'img/users/2014-04-14-23-IMG_5517.JPG', '$2y$10$cubXsvfLeNSeLEteodmfVe0H1G5hxxjVB1gyKORXHsZbro.ZjMRLO', '', '', 1, 1, '', '2014-04-15 04:40:47', '2014-04-15 04:41:56'),
(21, 'ederjulianA', 'prueba12345678eder@gmail.com', 'img/users/2014-04-23-03-549310_553591994662751_250484142_n.jpg', '$2y$10$1DL/c0jv8SWWS2BhCl6s/OIFEIUsWv.Vf8H0Tulx9zIBOEadgfRTK', '', 'o0hEiT8Uw5faBlBKaD5VK1tlzWNXU9gsUEduN7bthKv2SgFfG9fbRiykiClo', 1, 0, '', '2014-04-23 08:57:16', '2014-04-23 08:57:16'),
(22, 'carlos', 'cvcarlosandres39@gmail.com', 'img/users/2014-04-23-16-call-of-duty-modern-warfare-3-mw3-xbox-360-disponible-ya-_MCO-F-19658871_2299.jpg', '$2y$10$gXM9yQhroIEp1IZ8Fa5jWOkG.whJ8tv5/7eak8evl3kw5PVDsOYqu', '', '', 2, 1, '', '2014-04-23 21:00:56', '2014-04-23 21:03:25'),
(23, 'waking', 'thewalkingdead2091057@gmail.com', 'img/users/2014-04-23-21-primas.jpg', '$2y$10$8d763ULyYvztaaLdyJ8Qb.b5gPp7OInJJ3lIABQ6UeyhOtyXXZI2m', '', '3iChvPW1ilfqOiryCWNntD0w6QvWXyZHXVPSjwlYtjhIl40vesD9HI4kP9qd', 2, 0, '', '2014-04-24 02:32:58', '2014-04-24 02:32:58');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
