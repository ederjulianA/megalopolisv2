-- phpMyAdmin SQL Dump
-- version 4.1.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 21, 2014 at 01:13 PM
-- Server version: 5.5.40-cll
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tumegalo_datos`
--

-- --------------------------------------------------------

--
-- Table structure for table `almacen`
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=173 ;

--
-- Dumping data for table `almacen`
--

INSERT INTO `almacen` (`id`, `producto`, `sede`, `precio_detal`, `cantidad`, `created_at`, `updated_at`) VALUES
(44, 49, 6, 105000, 10, '2014-06-05', '2014-07-28'),
(45, 50, 6, 89900, 57, '2014-06-05', '2014-06-05'),
(46, 51, 6, 65000, 5, '2014-06-05', '2014-06-05'),
(47, 52, 6, 60000, 8, '2014-06-05', '2014-06-05'),
(48, 53, 6, 70000, 4, '2014-06-05', '2014-06-05'),
(49, 54, 6, 114900, 57, '2014-06-07', '2014-06-07'),
(50, 55, 16, 0, 35000, '2014-06-07', '2014-06-07'),
(51, 56, 16, 100000, 10, '2014-06-07', '2014-06-07'),
(52, 57, 6, 89000, 7, '2014-06-11', '2014-06-11'),
(53, 58, 6, 25000, 5, '2014-06-11', '2014-06-11'),
(55, 60, 17, 399000, 3, '2014-07-24', '2014-07-24'),
(56, 61, 18, 1500, 10, '2014-07-25', '2014-07-25'),
(57, 62, 17, 3000000, 6, '2014-07-28', '2014-07-28'),
(58, 63, 17, 699999, 7, '2014-07-28', '2014-07-28'),
(59, 64, 6, 80, 5, '2014-07-28', '2014-07-28'),
(60, 65, 6, 70000, 4, '2014-07-30', '2014-07-30'),
(61, 66, 19, 12000, 10, '2014-07-30', '2014-09-27'),
(62, 67, 20, 380000, 0, '2014-07-30', '2014-09-22'),
(63, 68, 6, 78999, 8, '2014-07-30', '2014-08-04'),
(64, 69, 6, 15000, 6, '2014-07-30', '2014-07-30'),
(65, 70, 20, 340000, 1, '2014-07-30', '2014-07-30'),
(66, 71, 6, 167000, 3, '2014-07-30', '2014-07-30'),
(67, 72, 22, 0, 3, '2014-07-31', '2014-10-30'),
(68, 73, 23, 198000, 3, '2014-08-01', '2014-08-01'),
(69, 74, 6, 30000, 8, '2014-08-02', '2014-08-02'),
(70, 75, 24, 50000, 1, '2014-08-02', '2014-08-04'),
(71, 76, 24, 50000, 1, '2014-08-04', '2014-08-04'),
(72, 77, 24, 80000, 1, '2014-08-04', '2014-08-04'),
(73, 78, 24, 300000, 6, '2014-08-04', '2014-08-04'),
(74, 79, 24, 80000, 3, '2014-08-04', '2014-08-04'),
(75, 80, 17, 198000, 3, '2014-08-04', '2014-08-04'),
(76, 81, 26, 0, 1, '2014-08-04', '2014-08-04'),
(77, 82, 24, 50000, 1, '2014-08-05', '2014-08-05'),
(78, 83, 24, 50000, 1, '2014-08-05', '2014-08-05'),
(79, 84, 24, 50000, 10, '2014-08-05', '2014-08-05'),
(80, 85, 24, 50000, 10, '2014-08-05', '2014-08-05'),
(81, 86, 24, 50000, 20, '2014-08-05', '2014-08-16'),
(82, 87, 24, 500000, 20, '2014-08-05', '2014-08-05'),
(83, 88, 24, 500000, 20, '2014-08-05', '2014-08-05'),
(84, 89, 28, 79000, 1, '2014-08-05', '2014-09-07'),
(85, 90, 28, 40000, 1, '2014-08-05', '2014-08-05'),
(86, 91, 28, 60000, 1, '2014-08-05', '2014-08-24'),
(87, 92, 28, 55000, -3, '2014-08-05', '2014-09-16'),
(88, 93, 28, 70000, 0, '2014-08-05', '2014-09-18'),
(89, 94, 22, 0, 3, '2014-08-05', '2014-08-05'),
(90, 95, 30, 58800, 1, '2014-08-09', '2014-08-10'),
(91, 96, 30, 14000, 3, '2014-08-10', '2014-08-10'),
(92, 97, 30, 14000, 3, '2014-08-10', '2014-08-10'),
(93, 98, 30, 64000, 3, '2014-08-10', '2014-08-10'),
(94, 99, 30, 64000, 2, '2014-08-10', '2014-08-10'),
(95, 100, 32, 2500, 10, '2014-08-14', '2014-08-14'),
(96, 101, 32, 2500, 100, '2014-08-14', '2014-08-14'),
(97, 102, 31, 15000, 95, '2014-08-14', '2014-11-04'),
(98, 103, 31, 1589990, 9, '2014-08-14', '2014-09-01'),
(99, 104, 33, 380000, 0, '2014-08-14', '2014-09-19'),
(100, 105, 31, 689000, 10, '2014-08-14', '2014-08-14'),
(101, 106, 20, 440000, 0, '2014-08-14', '2014-09-09'),
(102, 107, 20, 420000, 0, '2014-08-14', '2014-09-11'),
(103, 108, 20, 190000, -2, '2014-08-14', '2014-09-16'),
(104, 109, 20, 190000, 1, '2014-08-14', '2014-08-14'),
(105, 110, 20, 190000, 0, '2014-08-14', '2014-10-24'),
(106, 111, 20, 190000, 1, '2014-08-14', '2014-08-14'),
(107, 112, 20, 190000, 1, '2014-08-14', '2014-08-14'),
(108, 113, 20, 190000, 1, '2014-08-14', '2014-08-14'),
(109, 114, 20, 190000, 1, '2014-08-14', '2014-08-14'),
(110, 115, 20, 190000, 1, '2014-08-14', '2014-08-14'),
(111, 116, 20, 190000, 1, '2014-08-14', '2014-08-14'),
(112, 117, 20, 180000, 1, '2014-08-14', '2014-08-14'),
(113, 118, 20, 180000, 1, '2014-08-14', '2014-08-14'),
(114, 119, 20, 180000, 1, '2014-08-14', '2014-08-14'),
(115, 120, 20, 250000, 1, '2014-08-14', '2014-08-14'),
(116, 121, 20, 250000, 1, '2014-08-14', '2014-08-14'),
(117, 122, 20, 250000, 1, '2014-08-14', '2014-08-14'),
(118, 123, 20, 250000, 1, '2014-08-14', '2014-08-14'),
(119, 124, 20, 250000, 1, '2014-08-14', '2014-08-14'),
(120, 125, 20, 260000, 1, '2014-08-14', '2014-08-14'),
(121, 126, 20, 260000, 1, '2014-08-15', '2014-08-15'),
(122, 127, 20, 260000, 1, '2014-08-15', '2014-08-15'),
(123, 128, 20, 250000, 1, '2014-08-15', '2014-08-15'),
(124, 129, 20, 250000, 1, '2014-08-15', '2014-08-15'),
(125, 130, 20, 250000, 1, '2014-08-15', '2014-08-15'),
(126, 131, 20, 250000, 1, '2014-08-15', '2014-08-15'),
(127, 132, 20, 180000, 1, '2014-08-15', '2014-08-15'),
(128, 133, 20, 260000, 1, '2014-08-15', '2014-08-15'),
(129, 134, 20, 260000, 1, '2014-08-15', '2014-08-15'),
(130, 135, 20, 240000, 1, '2014-08-15', '2014-08-15'),
(131, 136, 20, 240000, 1, '2014-08-15', '2014-08-15'),
(132, 137, 20, 180000, 1, '2014-08-15', '2014-08-15'),
(133, 138, 34, 5000, 1, '2014-08-16', '2014-08-19'),
(134, 139, 35, 450000, 3, '2014-08-19', '2014-08-19'),
(135, 140, 34, 140000, 1, '2014-08-19', '2014-08-20'),
(136, 141, 34, 11500, 1, '2014-08-19', '2014-08-19'),
(137, 142, 34, 11500, 1, '2014-08-19', '2014-08-19'),
(138, 143, 34, 10500, 4, '2014-08-19', '2014-08-19'),
(139, 144, 34, 12000, 1, '2014-08-19', '2014-08-19'),
(140, 145, 34, 12000, 1, '2014-08-19', '2014-08-19'),
(141, 146, 34, 11000, 3, '2014-08-19', '2014-08-19'),
(142, 147, 34, 15000, 3, '2014-08-19', '2014-08-19'),
(143, 148, 34, 13500, 2, '2014-08-20', '2014-08-20'),
(144, 149, 34, 11500, 80, '2014-08-20', '2014-08-20'),
(145, 150, 34, 14000, 100, '2014-08-20', '2014-08-20'),
(146, 151, 34, 30000, 4, '2014-08-20', '2014-08-20'),
(147, 152, 34, 30000, 3, '2014-08-22', '2014-08-22'),
(148, 153, 34, 69500, 2, '2014-08-22', '2014-08-22'),
(149, 154, 34, 62900, 2, '2014-08-22', '2014-08-22'),
(150, 155, 34, 30000, 3, '2014-08-22', '2014-08-22'),
(151, 156, 34, 4000, 200, '2014-08-22', '2014-08-22'),
(152, 157, 34, 4000, 200, '2014-08-22', '2014-08-22'),
(153, 158, 35, 450000, 3, '2014-08-23', '2014-08-23'),
(154, 159, 35, 450000, 2, '2014-08-23', '2014-09-19'),
(155, 160, 20, 200000, 1, '2014-08-25', '2014-08-25'),
(156, 161, 20, 230000, 1, '2014-08-25', '2014-08-25'),
(157, 162, 20, 230000, 1, '2014-08-25', '2014-08-25'),
(158, 163, 20, 230000, 1, '2014-08-25', '2014-08-25'),
(159, 164, 20, 200000, 1, '2014-08-25', '2014-08-25'),
(160, 165, 20, 200000, 1, '2014-08-25', '2014-08-25'),
(161, 166, 20, 200000, 1, '2014-08-25', '2014-08-25'),
(162, 167, 20, 230000, 1, '2014-08-25', '2014-08-25'),
(163, 168, 20, 190000, 1, '2014-08-25', '2014-08-25'),
(164, 169, 20, 230000, 1, '2014-08-25', '2014-08-25'),
(165, 170, 20, 230000, 1, '2014-08-25', '2014-08-25'),
(166, 171, 26, 0, 1, '2014-08-25', '2014-08-25'),
(167, 172, 24, 500000, 20, '2014-08-27', '2014-08-27'),
(168, 173, 20, 220000, 1, '2014-09-06', '2014-09-06'),
(169, 174, 20, 290000, 1, '2014-10-22', '2014-10-22'),
(170, 175, 23, 949900, 3, '2014-11-02', '2014-11-02'),
(171, 176, 23, 120000, 2, '2014-11-02', '2014-11-02'),
(172, 177, 36, 8000, 20, '2014-11-05', '2014-11-05');

-- --------------------------------------------------------

--
-- Table structure for table `barrios`
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
-- Dumping data for table `barrios`
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
-- Table structure for table `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slug` varchar(200) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `nombre` varchar(150) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `categorias`
--

INSERT INTO `categorias` (`id`, `slug`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'ropa_y_accesorios', 'Ropa y Accesorios', '0000-00-00', '2014-09-03'),
(2, 'salud_y_belleza', 'Salud Y belleza', '0000-00-00', '2014-09-03'),
(3, 'restaurantes_y_comidas', 'Restaurantes y comidas', '0000-00-00', '2014-09-03'),
(4, 'tecnologia', 'Tecnología', '0000-00-00', '2014-09-03'),
(5, 'servicios', 'Servicios', '2014-08-10', '2014-09-03'),
(6, 'libros_revistas_y_comics', 'Libros, revistas y comics', '2014-08-10', '2014-09-03'),
(7, NULL, 'Regalos', '2014-11-05', '2014-11-05');

-- --------------------------------------------------------

--
-- Table structure for table `ciudades`
--

CREATE TABLE IF NOT EXISTS `ciudades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ciudad` varchar(80) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `ciudades`
--

INSERT INTO `ciudades` (`id`, `ciudad`, `created_at`, `updated_at`) VALUES
(1, 'Bogota', '0000-00-00', '0000-00-00'),
(2, 'Bucaramanga', '0000-00-00', '0000-00-00'),
(3, 'Medellin', '0000-00-00', '0000-00-00'),
(4, 'Cali', '0000-00-00', '0000-00-00'),
(5, 'Piedecuesta', '0000-00-00', '0000-00-00'),
(6, 'Girón', '0000-00-00', '0000-00-00'),
(7, 'Floridablanca', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `compra`
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci AUTO_INCREMENT=49 ;

--
-- Dumping data for table `compra`
--

INSERT INTO `compra` (`id`, `id_empresa`, `id_comprador`, `id_producto`, `cantidad`, `valor_unitario`, `descuento`, `valor_total`, `estado`, `created_at`, `updated_at`) VALUES
(13, 2, 7, 49, '1', '105000', '0', '105000', 0, '2014-07-30', '2014-07-30'),
(14, 2, 7, 51, '8', '65000', '0', '520000', 0, '2014-07-31', '2014-07-31'),
(15, 2, 7, 54, '5', '114900', '0', '574500', 0, '2014-07-31', '2014-07-31'),
(16, 26, 7, 62, '3', '3000000', '0', '9000000', 0, '2014-08-01', '2014-08-01'),
(17, 31, 7, 73, '5', '198000', '0', '990000', 0, '2014-08-01', '2014-08-01'),
(18, 32, 30, 78, '1', '300000', '0', '300000', 0, '2014-08-04', '2014-08-04'),
(19, 26, 33, 62, '3', '3000000', '0', '9000000', 0, '2014-08-04', '2014-08-04'),
(22, 2, 7, 52, '2', '50000', '0', '100000', 0, '0000-00-00', '0000-00-00'),
(23, 36, 33, 90, '3', '40000', '0', '120000', 1, '2014-08-08', '2014-08-09'),
(24, 36, 33, 89, '1', '79000', '0', '79000', 0, '2014-08-09', '2014-08-09'),
(25, 36, 33, 91, '2', '60000', '0', '120000', 0, '2014-08-09', '2014-08-09'),
(26, 29, 30, 106, '1', '440000', '0', '440000', 1, '2014-08-23', '2014-09-11'),
(27, 44, 7, 102, '1', '15000', '0', '15000', 0, '2014-08-24', '2014-08-24'),
(28, 29, 30, 108, '1', '190000', '0', '190000', 1, '2014-08-27', '2014-09-11'),
(29, 44, 30, 103, '1', '1589990', '0', '1589990', 0, '2014-09-01', '2014-09-01'),
(30, 29, 30, 106, '1', '440000', '0', '440000', 1, '2014-09-09', '2014-09-11'),
(31, 29, 7, 107, '1', '420000', '0', '420000', 1, '2014-09-11', '2014-09-11'),
(32, 29, 7, 108, '1', '190000', '0', '190000', 1, '2014-09-15', '2014-10-22'),
(33, 29, 7, 108, '1', '190000', '0', '190000', 1, '2014-09-15', '2014-10-22'),
(34, 29, 7, 108, '1', '190000', '0', '190000', 1, '2014-09-16', '2014-10-22'),
(35, 36, 7, 92, '1', '55000', '0', '55000', 0, '2014-09-16', '2014-09-16'),
(36, 36, 7, 92, '1', '55000', '0', '55000', 0, '2014-09-16', '2014-09-16'),
(37, 36, 7, 92, '1', '55000', '0', '55000', 0, '2014-09-16', '2014-09-16'),
(38, 36, 7, 92, '1', '55000', '0', '55000', 0, '2014-09-16', '2014-09-16'),
(39, 36, 70, 93, '1', '70000', '0', '70000', 0, '2014-09-18', '2014-09-18'),
(40, 46, 30, 104, '1', '380000', '0', '380000', 0, '2014-09-19', '2014-09-19'),
(41, 48, 30, 159, '1', '450000', '0', '450000', 0, '2014-09-19', '2014-09-19'),
(42, 29, 30, 67, '1', '380000', '0', '380000', 1, '2014-09-22', '2014-10-22'),
(43, 29, 30, 110, '1', '190000', '0', '190000', 1, '2014-10-24', '2014-10-24'),
(44, 44, 9, 102, '1', '15000', '0', '15000', 0, '2014-10-30', '2014-10-30'),
(45, 44, 9, 102, '1', '15000', '0', '15000', 0, '2014-10-30', '2014-10-30'),
(46, 44, 9, 102, '1', '15000', '0', '15000', 0, '2014-10-30', '2014-10-30'),
(47, 30, 30, 72, '1', '0', '0', '0', 0, '2014-10-30', '2014-10-30'),
(48, 44, 33, 102, '2', '15000', '0', '30000', 1, '2014-11-04', '2014-11-04');

-- --------------------------------------------------------

--
-- Table structure for table `cuadricula`
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `cuadricula`
--

INSERT INTO `cuadricula` (`id`, `idempresa`, `imagen`, `imagen2`, `imagen3`, `imagen4`, `imagen5`, `imagen6`, `imagen7`, `imagen8`, `imagen9`, `Nombre`, `enlacecatalogo`, `imgsector`, `estado`) VALUES
(1, 24, 'local2.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'culcecitos', NULL, 'copatf.png', 1),
(3, 2, 'local.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'jim-sports', NULL, 'botella.png', 1),
(36, 1, 'local3.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'mercagan', NULL, 'copatf.png', 1),
(45, 28, 'local2.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'rapi-rico', NULL, 'botella.png', 1),
(42, 15, 'local2.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'MayaTest', NULL, 'botella.png', 1),
(46, 25, 'local2.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'TuMegalopolis', NULL, 'botella.png', 1),
(47, 26, 'local2.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'bandslam', NULL, 'botella.png', 1),
(48, 27, 'local2.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'tecladospc', NULL, 'botella.png', 1),
(49, 28, 'local2.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'LIBRERIA-AURA-MARIA-MONCADA', NULL, 'botella.png', 1),
(50, 29, 'local2.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'SPORT-CENTER', NULL, 'botella.png', 1),
(51, 30, 'local2.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'AGROFARBEF', NULL, 'botella.png', 1),
(52, 31, 'local2.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'mundo-xbox', NULL, 'botella.png', 1),
(53, 32, 'local2.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'fon1.png', 'Stetik-Line', NULL, 'botella.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `empresas`
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
  `color_header` varchar(50) COLLATE utf8_unicode_ci DEFAULT '#393E5C',
  `tema` int(3) NOT NULL DEFAULT '1',
  `color_tema` int(5) NOT NULL DEFAULT '3',
  `estado` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=51 ;

--
-- Dumping data for table `empresas`
--

INSERT INTO `empresas` (`id`, `user_id`, `sector_id`, `ciudad_id`, `barrio`, `razon_social`, `nombre_publico`, `desc_breve`, `desc_larga`, `direccion_principal`, `telefono`, `logo`, `banner`, `color_header`, `tema`, `color_tema`, `estado`, `created_at`, `updated_at`, `latitude`, `longitude`) VALUES
(2, 9, 2, 2, 0, 'Jim Sports', 'jim-sports', 'Todo en artículos deportivos 																																																																														', 'Nos encontramos dedicados a la importación y comercialización de artículos deportivos 																																																																													', 'car 14 # 23-45', '6827000', 'img/empresas/2014-06-11-01-4W7nQHrTc170y-logo-jim-sports.jpg', 'img/empresas/banners/default/header.jpg', '#393E5C', 1, 3, 0, '2014-04-08 00:09:20', '2014-06-11 06:12:03', NULL, NULL),
(26, 39, 4, 2, 3, 'bandslam music bucaramanga', 'bandslam', '', 'pendiente', 'call 9 # 23-45', '6808965', 'img/empresas/2014-07-24-21-g5GwYYQm4ZRbF-logo-bandslam.jpg', 'img/empresas/banners2014-07-25-17-Y9qsonJA0xZ56-banner-bandslam.jpg', '#393E5C', 1, 3, 0, '2014-07-25 02:22:42', '2014-08-05 07:26:40', NULL, NULL),
(27, 40, 1, 2, 9, 'Teclados para pc', 'tecladospc', 'mi descripcion brave', 'mi descripcion larga', 'cll 22 n 21-34', '6322005', 'img/empresas/2014-07-25-13-PJQ1faoXMpblW-logo-tecladospc.jpg', 'img/empresas/banners/default/header.jpg', '#393E5C', 1, 3, 0, '2014-07-25 18:47:48', '2014-07-25 18:51:29', NULL, NULL),
(28, 43, 4, 2, 10, 'AURA MARIA MONCADA & CIA', 'LIBRERIA-AURA-MARIA-MONCADA', 'Comercialización y distribución de libros técnicos, de interés general y católicos', 'Comercializamos libros de todas las áreas del saber como administración, psicología, ingenierías, mercadotecnia, idiomas, además de libros de interés general y de autores católicos. Manejamos mas de 40 editoriales tanto en inglés como en español.', 'CL 36 29 - 29', '6454692 - 64554', 'img/empresas/2014-07-30-15-PiExpwV7v8T2d-logo-LIBRERIA-AURA-MARIA-MONCADA.jpg', 'img/empresas/banners2014-07-30-15-SfhJrfZMUteuP-banner-LIBRERIA-AURA-MARIA-MONCADA.jpg', '#393E5C', 1, 3, 1, '2014-07-30 20:32:52', '2014-07-30 20:42:04', NULL, NULL),
(29, 44, 2, 2, 10, 'SPORT CENTER CAB', 'SPORT-CENTER', '', 'MANEJAMOS MAS DE 15 MARCAS 100% ORIGINALES Y EXCLUSIVAS ACCESORIOS COMO GAFAS BOLSOS BILLETERAS GORRAS! OAKLEY, DIESEL,CALVIN KLEIN,HUGO BOSS, SPERRY, LACOSTE, LE COQ SPORTIF, CATERPILLAR Y MUCHAS MAS! \r\n', 'C COMERCIAL CABECERA IV ETAPA LOCAL 301-2', '6960986', 'img/empresas/2014-07-30-16-0dPYzXL0IPIk8-logo-SPORT-CENTER.jpg', 'img/empresas/banners2014-08-15-00-08-25-AWKTl7gNbNera-banner-SPORT-CENTER.jpg', '#393E5C', 1, 3, 1, '2014-07-30 21:52:22', '2014-09-12 03:18:15', NULL, NULL),
(30, 45, 4, 2, 9, 'AGROFARBEF LTDA', 'AGROFARBEF', 'Herramientas y maquinaria para la industria, construcción, metalmecanica, carpinteria y mineria', 'Es una empresa dedicada a la comercialización  de herramientas y maquinarias para la construcción, industria, metalmecanica, carpintería, y minería con un portafolio de productos amplio y con marcas reconocidas  lo cual nos diferencia de nuestros principales competidores, y con instalaciones cómodas que facilita el acceso a parqueadero y ubicado en un prestigioso lugar de la ciudad.', 'carrera 26 # 29-04 Antonia Santos', '6305401', 'img/empresas/2014-07-31-20-1lk5DY7SfhRCQ-logo-AGROFARBEF.jpg', 'img/empresas/banners2014-07-31-20-G6ZHI153Nr8fq-banner-AGROFARBEF.jpg', '#393E5C', 1, 3, 1, '2014-08-01 01:35:05', '2014-08-01 01:55:22', NULL, NULL),
(31, 8, 1, 1, 1, 'mundo xbox', 'mundo-xbox', '', 'Empresa dedicada a la comercializan de videojuegos de ultima generación.', 'pendiente', '6345678', 'img/empresas/2014-11-02-03-11-38-PPxObTA0lXI1n-logo-mundo-xbox.jpg', 'img/empresas/banners2014-11-04-23-11-35-Nuj8bpOxcrawE-banner-mundo-xbox.jpg', '#666', 1, 4, 1, '2014-08-01 13:12:13', '2014-11-19 01:17:31', NULL, NULL),
(32, 47, 4, 2, 4, 'Centro de Estética y Bienestar Stetik- Line', 'Stetik-Line', '', 'Tratamientos de embellecimiento facial, corporal, bienestar, reducción de medidas, asesoramiento nutricional y relajación.', 'CL 20 # 24 - 27 APTO 802', '3178243878 ', 'img/empresas/2014-08-02-02-VIQrrefqlZBh0-logo-Stetik-Line.jpg', 'img/empresas/banners2014-08-02-03-cPrn2gcpbojNK-banner-Stetik-Line.jpg', '#393E5C', 1, 1, 1, '2014-08-02 07:42:11', '2014-08-05 08:23:12', NULL, NULL),
(33, 48, 0, 2, 0, 'Nutritotal Coach', 'Nutritotal-Coach', '', 'Somos un grupo de Profesionales del Sector Salud capacitadas en la ejecución de actividades de prevención, promoción, fomento,protección y recuperación de la salud y de rehabilitación de personas enfermas\r\nEspecialista en Seguridad Alimentaría, Consulta y valoración nutricional personalizada, especificación de régimen dietario, apoyo en selección de alimentos, verificación en compras, técnicas de preparación saludables, plan de acondicionamiento físico todo totalmente personalizado. Tener el estado físico que mereces no es un milagro es un compromiso y una meta', 'Carrera 17 58-15 Barrio Ricaute', '3138380406', 'img/empresas/2014-08-04-16-08-06-I8LKAqaQPgAQG-logo-Nutritotal-Coach.jpg', 'img/empresas/banners/default/header.jpg', '#393E5C', 1, 3, 1, '2014-08-04 21:43:06', '2014-08-04 21:43:06', NULL, NULL),
(34, 49, 0, 2, 0, 'ACADEMIA DE ESTUDIOS TECNICOS EN SEGURIDAD LTDA', 'ACADEMIA-DE-SEGURIDAD-ATS', '', 'Promover la enseñanza de la seguridad integral fundamentada en el concepto actual y aplicable de la vigilancia y seguridad privada, con énfasis en la responsabilidad, equidad, tolerancia y valores éticos como pilares de la formación del hombre de seguridad', 'CRA 30 N 30a-05 barrio La Aurora', '-7- 6350050', 'img/empresas/2014-08-04-20-08-50-Ya7GCDZiOmyU5-logo-ACADEMIA-DE-SEGURIDAD-ATS.jpg', 'img/empresas/banners/default/header.jpg', '#393E5C', 1, 3, 1, '2014-08-05 01:40:50', '2014-08-05 01:40:50', NULL, NULL),
(35, 51, 0, 2, 0, 'Sentio Solvo', 'Senti-Solvo', '', 'Sentio Solvo es el nuevo concepto de moda, originalidad y libertad. Somos distinción y evolución basados en un estilo autónomo y contemporáneo.', 'Carrera 35 # 52-28 ', '6-960305', 'img/empresas/2014-08-05-16-08-03-MJ2riclp6atAL-logo-Senti-Solvo.jpg', 'img/empresas/banners2014-08-05-16-08-33-7cofbyNR3fI13-banner-Senti-Solvo.jpg', '#393E5C', 1, 3, 1, '2014-08-05 21:33:03', '2014-08-05 21:46:33', NULL, NULL),
(36, 52, 0, 2, 0, 'Gorra Ripley LTDA', 'gorras-ripley', '', 'Somos una empresa dedicada a comercializar gorras juveniles de todos los estilos, de diferentes marcas.', 'Carrera 21 # 21-45', '6481166', 'img/empresas/2014-08-05-20-08-22-YP7xLU7KoYEJ1-logo-Gorras-Ripley.jpg', 'img/empresas/banners2014-08-19-22-08-12-Nu98fW34jVG7l-banner-Gorras-Ripley.jpg', '#393E5C', 1, 3, 0, '2014-08-06 01:28:22', '2014-08-20 03:34:12', NULL, NULL),
(37, 53, 0, 2, 0, 'sonata bucaramanga', 'musicales-sonata', '', 'venta  de  instrumentos  musicales   ,  de  primera  y  de   segunda en   buen  estado,,marcas   hohner gibson, yamaha, fender, takamine, mapez, dw, gigraltar ,epiphone , shure, zildjian  y  más.   ademas   relizamos   toda  clase  de  mantenimientos   incluyendo   de    sonido.', 'carrera  23  n   35   66   local   205', '6320192  645891', 'img/empresas/2014-08-06-20-08-01-rVAEDW6fouv7Z-logo-musicales-sonata.jpg', 'img/empresas/banners/default/header.jpg', '#393E5C', 1, 3, 1, '2014-08-07 01:28:01', '2014-08-07 01:28:01', NULL, NULL),
(38, 54, 0, 2, 0, 'Ropa femenina Kiut', 'Ropa-femenina-Kiut', '', 'Somos una empresa dedicada a la venta de ropa del mejor estilo para público femenino. Nos caracterizamos por marcar tendencia y estar a la vanguardia de la moda actual.', 'Calle 20 # 19 - 19', '6481166', 'img/empresas/2014-08-09-17-08-55-TsyjbhBwoFWAJ-logo-Ropa-femenina-Kiut.jpg', 'img/empresas/banners2014-08-10-18-08-02-gdMtzTVD0E4nP-banner-Ropa-femenina-Kiut.jpg', '#393E5C', 1, 3, 1, '2014-08-09 22:10:55', '2014-08-10 23:03:02', NULL, NULL),
(44, 55, 0, 2, 0, 'Tecnópolis', 'Mobile-Shop', '', 'Nos dedicamos a la comercialización de artículos tecnológicos como relojes digitales, smartphones, tablets, etc.', 'Calle 35 # 24-17', '3152175967', 'img/empresas/2014-08-11-17-08-32-GarNobVucQPIk-logo-Mobile-Shop.jpg', 'img/empresas/banners2014-08-11-17-08-04-FDoEbn6Shek1c-banner-Mobile-Shop.jpg', '#393E5C', 1, 3, 1, '2014-08-11 22:04:32', '2014-08-15 02:22:44', NULL, NULL),
(45, 59, 0, 2, 0, 'La Pasteleria', 'La-Pasteleria', '', 'Venta de Cupcakes, Tortas y ponques. Llegamos a la puerta de tu casa con nuestro producto.', 'Calle 61 no 7 w 44', '3163399147', 'img/empresas/2014-08-14-00-08-40-3Nv5Y5Lj9BmQH-logo-La-Pasteleria.jpg', 'img/empresas/banners2014-08-14-00-08-48-QnEaZOBjCwwoq-banner-La-Pasteleria.jpg', '#393E5C', 1, 3, 1, '2014-08-14 05:45:40', '2014-08-14 05:54:48', NULL, NULL),
(46, 60, 0, 2, 0, 'GRUPO TODOOPTICA.', 'Todoptica', '', 'Empresa dedicada a la salud visual, prevención y tratamiento de defectos visuales y patologías oculares, consultoría y asesoría, con productos asequibles de excelente calidad y precios cómodos para todo tipo de clientes.', 'Cra. 33 # 41-24 Cabecera.', '3133251086', 'img/empresas/2014-08-28-16-08-02-Yvnu3Z7tWitPG-logo-Todoptica.jpg', 'img/empresas/banners2014-08-14-21-08-48-ANXekLmpJ3DMe-banner-Todoptica.jpg', '#393E5C', 1, 3, 1, '2014-08-15 02:32:28', '2014-08-28 21:29:06', NULL, NULL),
(47, 61, 0, 2, 0, 'BELCO S.A.S', 'BELCO', '', 'Venta y Distribución de productos de belleza, tales como alfaparf milano, Recamier,Igora Royal , Lemar, Maxibel,Masglo, entre otros ', 'CARRERA 33 # 41-10', '3214286967- 300', 'img/empresas/2014-08-16-20-08-55-HNOJvPCqM7yJF-logo-BELCO.jpg', 'img/empresas/banners2014-08-16-20-08-18-pnJz5KqdQQk6u-banner-BELCO.jpg', '#393E5C', 1, 3, 1, '2014-08-17 01:26:28', '2014-08-17 01:31:18', NULL, NULL),
(48, 62, 0, 2, 0, 'Zona Biker cascos & accesorios', 'Zona-Biker', '', 'Somos una empresa dedicada a la comercializacion de cascos y accesorios para motociclistas.', 'Carrera 21 # 41-39', '6705857', 'img/empresas/2014-08-19-15-08-19-gDlsY5dG6DubE-logo-Zona-Biker.jpg', 'img/empresas/banners2014-08-19-15-08-20-JZteCtwphW0nI-banner-Zona-Biker.jpg', '#393E5C', 1, 3, 1, '2014-08-19 20:13:19', '2014-08-19 20:22:21', NULL, NULL),
(49, 31, 0, 0, 0, 'MiCarrito', 'MiCarrito', '', 'esta es mi empresa', 'cll 22 n 21-37', '6322005', 'img/empresas/2014-09-11-16-09-49-VxMZ10SRQJ4TS-logo-MiCarrito.jpg', 'img/empresas/banners/default/header.jpg', '#393E5C', 1, 3, 0, '2014-09-11 21:13:49', '2014-09-11 21:13:49', NULL, NULL),
(50, 71, 0, 2, 0, 'DaleDetalles', 'DaleDetalles', '', 'Dale detalles a las personas que quieres, vamos hoy es el momento', 'Cll 22 n 21 37', '3015673205', 'img/empresas/2014-11-05-13-11-56-ghARrKp6F0whn-logo-DaleDetalles.jpg', 'img/empresas/banners2014-11-05-13-11-47-CnVSwUFyugqim-banner-DaleDetalles.jpg', '#393E5C', 1, 3, 1, '2014-11-05 18:38:56', '2014-11-05 18:51:47', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `ruta` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `tamano` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `tipo` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `nombre`, `ruta`, `tamano`, `tipo`, `empresa_id`, `created_at`, `updated_at`) VALUES
(5, '2014-11-18-20-11-13-nXfzVT5v6Zn7r.jpg', '/img/filesSlide/', '156.473632812', 'jpeg', 31, '2014-11-18', '2014-11-18'),
(6, '2014-11-18-20-11-13-QvmM0KrBWtAQZ.jpg', '/img/filesSlide/', '180.259765625', 'jpeg', 31, '2014-11-18', '2014-11-18'),
(7, '2014-11-18-20-11-17-KGyo8yw6wMSy3.jpg', '/img/filesSlide/', '152.361328125', 'jpeg', 31, '2014-11-18', '2014-11-18');

-- --------------------------------------------------------

--
-- Table structure for table `FotoFind`
--

CREATE TABLE IF NOT EXISTS `FotoFind` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `foto` varchar(50) DEFAULT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `categoria` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

-- --------------------------------------------------------

--
-- Table structure for table `info_shipping`
--

CREATE TABLE IF NOT EXISTS `info_shipping` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `ciudad` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `apellido` varchar(255) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `notas` varchar(255) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `direccion` varchar(250) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `barrio` varchar(250) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `telefono` varchar(250) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `info_shipping`
--

INSERT INTO `info_shipping` (`id`, `id_user`, `ciudad`, `nombre`, `apellido`, `notas`, `direccion`, `barrio`, `telefono`, `created_at`, `updated_at`) VALUES
(1, 7, 1, NULL, NULL, NULL, 'Carrera 24 # 18-76', 'San francisco', '', '0000-00-00', '0000-00-00'),
(3, 33, 2, 'Isabel', 'Carrero Rodriguez', 'cerca a la iglesia de san francisco ', 'Carrera 24 # 18-76', 'San francisco', '3013119198', '2014-08-22', '2014-08-30'),
(4, 30, 2, 'ivan jose ', 'rrojas cabrales', 'asdjaiosdasdjasd', 'cll 22 # 21 - 37', 'alarcon', '3003815676', '2014-08-23', '2014-08-23'),
(5, 42, 2, 'geovanny', 'valderrama', '', 'cl 20 #24 - 27 ap 802', 'san francisco', '6895807', '2014-08-24', '2014-08-24'),
(6, 52, 2, 'Carlos', 'valderrama', '', 'Carrera 24 # 20-35', 'San francisco', '6543465', '2014-08-24', '2014-08-24'),
(7, 70, 2, 'Camila', 'Diaz', '', 'calle 45 # 35-113', 'La aurora', '3002345432', '2014-09-03', '2014-09-03'),
(8, 9, 5, 'Eder', 'Julian', 'LLegando a tejaditos', 'calle 17 #3w-65 miraflores torre 36 apto 11-37', 'miraflores', '3013119198', '2014-10-30', '2014-10-30');

-- --------------------------------------------------------

--
-- Table structure for table `mails`
--

CREATE TABLE IF NOT EXISTS `mails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(250) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `mails`
--

INSERT INTO `mails` (`id`, `email`, `created_at`, `updated_at`) VALUES
(3, 'ederalvarez2009@hotmail.com', '2014-07-12', '2014-07-12'),
(4, 'cvcarlosandres39@gmail.com', '2014-07-12', '2014-07-12'),
(5, 'SOMICLTDA@GMAIL.COM', '2014-07-12', '2014-07-12'),
(6, 'cristh_181@hotmail.com', '2014-07-21', '2014-07-21'),
(7, 'toal_1@hotmail.com', '2014-07-22', '2014-07-22');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_04_06_213302_create_table_users', 1);

-- --------------------------------------------------------

--
-- Table structure for table `preguntas`
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci AUTO_INCREMENT=72 ;

--
-- Dumping data for table `preguntas`
--

INSERT INTO `preguntas` (`id`, `empresa_id`, `user_id`, `id_producto`, `pregunta`, `respuesta`, `estado`, `created_at`, `updated_at`) VALUES
(39, 26, 46, NULL, 'Cuanto con el envio\n', 'depende del destino ', 0, '2014-08-01', '2014-08-01'),
(40, 27, 7, NULL, 'Hola cómo se haría el pago? Consignación por Efecty?\n', NULL, 0, '2014-08-01', '2014-08-01'),
(41, 26, 7, NULL, 'Si es la ciudad de Cali ¿por cuánto sale?', NULL, 0, '2014-08-01', '2014-08-01'),
(42, 32, 42, NULL, '¿Cuántas sesiones se necesitan?\n', '6', 0, '2014-08-04', '2014-08-04'),
(45, 34, 7, NULL, '¿Qué duración tiene el curso y cuánto cuesta', NULL, 0, '2014-08-04', '2014-08-04'),
(46, 32, 50, NULL, '¿Ese es el precio mínimo?', 'El precio depende de cuantas sesiones se vaya a realizar', 0, '2014-08-05', '2014-08-05'),
(48, 30, 42, NULL, '¿que precio tiene la mezcladora de 1 bulto?', 'Buenas tardes, la mezcladora de 1 bulto, varia su precio de acuerdo a su motor, si lo necesita Diesel, o a Gasolina... Agradezco me especifique y asi proceder a darle precio.', 0, '2014-08-05', '2014-08-05'),
(49, 29, 42, NULL, 'tiene las gafas OAKLEY en mas colores?', 'si hay en mas colores las mismas holbrook sta en negra con lente morado y toda negra', 0, '2014-08-05', '2014-08-14'),
(50, 28, 42, NULL, 'Me gustaría saber que otros títulos religiosos tienen?', 'Dígame cuál necesita y nosotros se lo conseguimos si no lo tenemos. Solo nos da el nombre del libro autor y editorial .Gracias por comunicarse con nosotros', 0, '2014-08-05', '2014-08-05'),
(51, 36, 33, NULL, 'Hace algún tipo de descuento por cantidad', 'NO, gracias por tu pregunta. Si tienes más dudas llámanos al 6481166. Saludos ', 0, '2014-08-05', '2014-08-05'),
(53, 36, 33, 91, 'Se pueden recoger personalmente', 'Por supuesto! Saludos', 0, '2014-08-07', '2014-08-07'),
(54, 45, 30, 100, 'hacen algun descuento por cantidad?', 'Si  claro tenemos un descuento del 20% a partir de 50 cupcakes.', 0, '2014-08-15', '2014-08-15'),
(55, 45, 30, 100, 'haces envios a domicilio  ?\n', 'Claro hago domicilios en bucaramanga y su area metropolitana.', 0, '2014-08-15', '2014-08-15'),
(56, 48, 42, 139, 'Buenos dias, que otros estilos de cascos tienen disponibles?', 'de agv, wake up, dream time, the donkey, rossi icon, 5 continentes, chicken, italy flag, black math', 0, '2014-08-19', '2014-08-19'),
(57, 36, 33, 93, 'Como se que es la original', NULL, 0, '2014-08-19', '2014-08-19'),
(58, 48, 42, 139, 'como puedo hacer la compra? tengo q ir hasta el local?\n', 'claro si sr es mejor recogerlo personalmente aca se te da factura legal y garantia de 3 meses por carcasa y pintura.', 0, '2014-08-21', '2014-08-21'),
(59, 29, 30, 106, 'asdnkjansddf', 'que necesita saber de esas gafas? si esta interesado puede acercarse directamente al almacen centro comercial cabecera IV etapa local 301-2!', 0, '2014-08-23', '2014-08-25'),
(60, 29, 30, 67, 'esta disponible en talla 20', 'no viene por tallas', 0, '2014-08-23', '2014-09-06'),
(61, 47, 42, 140, 'buen dia, tienen keratina MUSS?\n', 'Buena tarde\r\nEn el momento no manejamos esa linea.\r\n\r\ngracias\r\n', 0, '2014-08-24', '2014-09-10'),
(62, 38, 33, 96, 'Buen día. En que tallas las tiene disponible. gracias', NULL, 0, '2014-08-30', '2014-08-30'),
(63, 2, 70, 51, 'la camiseta es la original', 'NO, esta es una replica. Gracias por preguntar', 0, '2014-09-03', '2014-09-03'),
(64, 2, 70, 51, 'En cuanto tiempo la entregas una vez hecho el pago?', 'de 1 a 2 dias habiles dependiendo de la ciudad. O  lo puedes recoger personalmente si estas en bucaramanga', 0, '2014-09-03', '2014-09-05'),
(65, 2, 70, 51, 'En cuanto tiempo la entregas una vez hecho el pago?', 'Igual que la anterior :)', 0, '2014-09-03', '2014-09-05'),
(66, 2, 70, 53, 'En que tallas la tienes disponible', 'hola M,S,L. Cualquier duda solo dinos... saludos ', 0, '2014-09-05', '2014-09-05'),
(67, 47, 70, 153, 'Para la cuestión del pago como seria, tienes local para poder pasar personalmente? Gracias', 'buenas tarde\r\nclaro que si estamos ubicados en la Cra 33 No 41-10 cerca a Jumbo de Cabecera.\r\n\r\ngracias ', 0, '2014-09-05', '2014-09-08'),
(68, 36, 7, 92, 'Le doy 45.000', 'Ese es el precio final', 0, '2014-09-16', '2014-09-16'),
(69, 36, 70, 89, 'son originales', 'Si lo son. Gracias por preguntar', 0, '2014-09-18', '2014-09-18'),
(70, 45, 42, 101, 'Hay algun tipo de rebaja de precio por cantidad de cupcakes?', 'Buenos dias por compras superiores a 48 cupcakes existe un descuento del 20%', 0, '2014-09-23', '2014-09-25'),
(71, 44, 33, 102, 'En que colores los tienes disponibles ', 'Hola, están disponibles los colores que están en la foto, anímate a comprar. Saludos.', 0, '2014-11-04', '2014-11-04');

-- --------------------------------------------------------

--
-- Table structure for table `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` int(11) NOT NULL,
  `subcat_id` int(11) DEFAULT NULL,
  `nombre` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `imagen` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `img1` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img2` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img3` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imgSmall` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `estado` int(11) NOT NULL DEFAULT '1',
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=178 ;

--
-- Dumping data for table `producto`
--

INSERT INTO `producto` (`id`, `categoria`, `subcat_id`, `nombre`, `slug`, `descripcion`, `imagen`, `img1`, `img2`, `img3`, `imgSmall`, `estado`, `created_at`, `updated_at`) VALUES
(49, 1, 11, 'Segunda equipación camiseta selección Colombia', 'segunda_equipacion_camiseta_seleccion_colombia', 'Camiseta de la segunda equipación de la selección Colombia original Adidas', 'img/products/2014-06-05-21-w3hlsQ4qH1h9M-colombia-roja.jpg', NULL, NULL, NULL, 'img/products/img-lista/2014-06-05-21-w3hlsQ4qH1h9M-colombia-roja.jpg', 1, '2014-06-05', '2014-08-24'),
(50, 1, 11, 'CAMISETAS ORIGINALES ITALIA MUNDIAL 2014', 'camisetas_originales_italia_mundial_2014', 'DISPONIBLE LAS TALLAS S, M, L Y XL - MANGA CORTA TODAS LAS CAMISETAS VIENE EN SU RESPECTIVA BOLSA ORIGINAL', 'img/products/2014-06-05-21-8eK8kq1410kax-italia2014.jpg', NULL, NULL, NULL, 'img/products/img-lista/2014-06-05-21-8eK8kq1410kax-italia2014.jpg', 1, '2014-06-05', '2014-08-24'),
(51, 1, 11, 'Camiseta Del Real Madrid 2014, Marcadas', 'camiseta_del_real_madrid_2014_marcadas', 'Camiseta del Real, local y Visitante\r\nTallas de la S a la XL Y tallas para niños.\r\nExcelente calidad\r\nConjuntos para niños\r\nEl conjunto con camiseta y pantaloneta Vale:75000\r\nEscudos y logos cocidos Y Bordados.Fotos Reales', 'img/products/2014-06-05-21-ifdx4UqYQD7Ms-madrid.jpg', 'img/products/img-lista/madrid-back.jpg', 'img/products/img-lista/madrid-front.jpg', 'img/products/img-lista/madird-sola.jpg', 'img/products/img-lista/2014-06-05-21-ifdx4UqYQD7Ms-madrid.jpg', 1, '2014-06-05', '2014-08-24'),
(52, 1, 11, 'Camisetas Hombre, Mujer Y Niño Selección Colombia', 'camisetas_hombre_mujer_y_nino_seleccion_colombia', 'camiseta de la seleccion colombia manga larga', 'img/products/2014-06-05-22-1ppmrLORGCvHx-colombia-larga.jpg', NULL, NULL, NULL, 'img/products/img-lista/2014-06-05-22-1ppmrLORGCvHx-colombia-larga.jpg', 1, '2014-06-05', '2014-08-24'),
(53, 1, 2, 'camiseta Colombia para mujer Brasil 2014 ', 'camiseta_colombia_para_mujer_brasil_2014_', 'camiseta de la seleccion colombia para mujer', 'img/products/2014-06-05-22-tTiYCrf5NKrqx-dep2.jpg', NULL, NULL, NULL, 'img/products/img-lista/2014-06-05-22-tTiYCrf5NKrqx-dep2.jpg', 1, '2014-06-05', '2014-08-24'),
(54, 1, 2, 'Tenis Zapatillas Adidas Fashion Speed Cross Envio + Medias', 'tenis_zapatillas_adidas_fashion_speed_cross_envio__medias', 'Un zapato con mucho agarre, tanto en senderos de tierra  sueltas como en rocas', 'img/products/2014-06-07-04-pKLxkallcopD0-zapatos.jpg', NULL, NULL, NULL, 'img/products/img-lista/2014-06-07-04-pKLxkallcopD0-zapatos.jpg', 1, '2014-06-07', '2014-08-24'),
(55, 4, 7, 'Servicio De Catalogos Digitales', 'servicio_de_catalogos_digitales', 'este servicio permite q tengas tus productos en un mundo virtual', 'img/products/2014-06-07-16-n60HtXCMpZe5a-mega.png', NULL, NULL, NULL, 'img/products/img-lista/2014-06-07-16-n60HtXCMpZe5a-mega.png', 1, '2014-06-07', '2014-08-24'),
(56, 4, 7, 'COMPUTADORES', 'computadores', 'SUPERCOMPUTADOR', 'img/products/2014-06-07-22-XB7Mu5jtSp133-COMPU.jpeg', NULL, NULL, NULL, 'img/products/img-lista/2014-06-07-22-XB7Mu5jtSp133-COMPU.jpeg', 1, '2014-06-07', '2014-08-24'),
(57, 1, 11, 'Camiseta Barcelona 2014 Talla S Para Niño', 'camiseta_barcelona_2014_talla_s_para_nino', 'Camiseta 100 % Original del Barcelona 2014 Importada de Europa, Garantizada.\r\nTalla S, Sirve para un niño entre 6 y 10 años. Mirar el Tallaje Nike para Niño.', 'img/products/2014-06-11-01-LMnMCYz5ihFDV-barsa2.jpg', 'img/products/img-lista/2014-06-11-01-6TVWQLbC0axxm-barca.jpg', 'img/products/img-lista/2014-06-11-01-pCyqLZFgMrQ7s-barcaLogo.jpg', NULL, NULL, 1, '2014-06-11', '2014-08-24'),
(58, 1, 11, 'Camisetas Adidas Y Nike Deportivas Para Hombre', 'camisetas_adidas_y_nike_deportivas_para_hombre', 'camisatas para hombres ', 'img/products/2014-06-11-16-hQWr4kttZOf6M-camisaDEP.jpg', 'img/products/img-lista/2014-06-11-16-NrVjY700B0IVg-camisaDEP2.jpg', 'img/products/img-lista/2014-06-11-16-zWXyMLgclQ3bX-camisaDEP3.jpg', NULL, NULL, 1, '2014-06-11', '2014-08-24'),
(60, 1, 2, 'guitarra 2', 'guitarra_2', 'pendiente...', 'img/products/2014-07-24-21-UUVtQuXnoWh7u-guitarra1.jpg', NULL, NULL, NULL, NULL, 0, '2014-07-24', '2014-08-24'),
(61, 4, 7, 'TecladoParaPc', 'teclado_para_pc', 'teclado para pc', 'img/products/2014-07-25-13-sgWG4bdoIljdn-teclado_968019_3104Classic200.jpg', NULL, NULL, NULL, NULL, 1, '2014-07-25', '2014-08-24'),
(62, 4, 7, 'Apple Imac Md096e/a 27 Pulgadas 8gb Core I5 Quad Core', 'apple_imac_md096ea_27_pulgadas_8gb_core_i5_quad_core', 'Intel Core i5 quad core de 3.2 GHz (Turbo Boost de hasta 3.6 GHz) con 6 MB de caché L3\r\nMemoria de 8 GB (dos de 4 GB) DDR3 de 1600 MHz; cuatro ranuras SO-DIMM accesibles para el usuario\r\nCámara FaceTime HD Es compatible tanto con la resolución nativa de la pantalla integrada como con una pantalla externa de hasta 30 pulgadas (2560 x 1600 pixeles) Soporte para modos de video en espejo y escritorio extendido\r\nRanura para tarjeta SDXC\r\nCuatro puertos USB 3\r\nDos puertos Thunderbolt\r\nSalida mini DisplayPort compatible con DVI, VGA y DVI de doble enlace (adaptadores se venden por separado)\r\nGigabit Ethernet 10/100/1000BASE-T (conector RJ-45)\r\nWi-Fi\r\nRed wireless Wi-Fi 802.11n,2 compatible con IEEE 802.11a/b/g\r\nBluetooth\r\nTecnología wireless Bluetooth 4.0\r\nTeclado wireless Apple Teclado de tamaño completo con 78 (EE.UU.) o 79 (ISO) teclas, incluyendo 12 teclas de función y 4 teclas de dirección (en forma de ?T? invertida)\r\nMagic Mouse Superficie suave y uniforme Multi-Touch con soporte para gestos simples (desplazamiento y roce), haz clic o doble clic en cualquier parte. Además, la construcción ambidiestra se adapta a usuarios diestros y zurdos.\r\nMagic Trackpad Trackpad Multi-Touch de cristal para un control preciso del cursor; soporta desplazamiento por inercia, pellizco, rotación, deslizamiento con tres dedos, deslizamiento con cuatro dedos, toque, doble toque, rotación, zoom de pantalla, desplazamiento, hacer clic y arrastrar; hacer clic/arrastrar y bloquear; clic secundario A y B.', 'img/products/2014-07-28-01-1uD5VgCDVB6d8-imac1.jpg', 'img/products/img-lista/2014-07-28-01-iwoaKWLoEgEL3-imac2.jpg', NULL, NULL, NULL, 1, '2014-07-28', '2014-08-24'),
(64, 1, 1, 'Camiseta Real Madrid 14-15', 'camiseta_real_madrid_14-15', 'Camiseta de la primera equipación del Real MAd', 'img/products/2014-07-28-14-tgAR2jsl5yaSb-pruebaCamiseta.jpg', NULL, NULL, NULL, NULL, 1, '2014-07-28', '2014-08-24'),
(65, 1, 11, 'Camiseta PSG', 'camiseta_psg', 'Camiseta PSG temporada 14-15 todas tallas', 'img/products/2014-07-30-20-nzjwuMwHOCx32-psg2.jpg', NULL, NULL, NULL, NULL, 1, '2014-07-30', '2014-08-24'),
(66, 6, 22, 'Una oración para cada ocasión', 'una_oracion_para_cada_ocasion', 'Más de 100 oraciones para todos los momentos', 'img/products/2014-09-20-21-09-52-S7J5o1NgXXLxY.jpg', NULL, NULL, NULL, NULL, 1, '2014-07-30', '2014-09-27'),
(67, 1, 11, 'GAFAS OAKLEY', 'gafas_oakley', 'GAFAS OAKLEY HOLBROOK 15733', 'img/products/2014-07-30-16-3ATHOR2jdYsLb-15733.jpg', NULL, NULL, NULL, NULL, 1, '2014-07-30', '2014-08-24'),
(68, 1, 11, 'real madrid', 'real_madrid', 'camiseta real madrid', 'img/products/2014-08-04-05-08-36-7b8lKNzfWErXD-', NULL, NULL, NULL, NULL, 1, '2014-07-30', '2014-08-24'),
(69, 4, 7, 'Saga Percy Jackson Y Los Dioses Del Olimpo - Rick Riordan', 'saga_percy_jackson_y_los_dioses_del_olimpo_-_rick_riordan', 'Seis (6) Libros en Pdf. Sobre Mitología Griega y Novelas de Aventura. Saga Percy Jackson y los Dioses del Olimpo - Rick Riordan', 'img/products/2014-07-30-20-IBHJTkT4c3ukh-libro1.jpg', NULL, NULL, NULL, NULL, 0, '2014-07-30', '2014-08-24'),
(70, 1, 7, 'GAFAS OAKLEY', 'gafas_oakley', 'GAFAS OAKLEY FROGSKINS VALENTINO ROSSI', 'img/products/2014-07-30-20-KRdDxyBfzeXMu-13772.JPG', NULL, NULL, NULL, NULL, 0, '2014-07-30', '2014-08-24'),
(71, 1, 2, 'Gafas Oakley Radar 5 Lentes Intercambiables 100% Originales', 'gafas_oakley_radar_5_lentes_intercambiables_100_originales', 'gafas oakley 5', 'img/products/2014-07-30-22-intuU787hZfiD-gafas.jpg', 'img/products/2014-07-30-22-ovAooheGVgG9w-gafas2.jpg', NULL, NULL, NULL, 0, '2014-07-30', '2014-08-24'),
(72, 4, 8, 'MEZCLADORA DE CONCRETO DE 1 BULTO', 'mezcladora_de_concreto_de_1_bulto', 'Ofrecemos todos los equipos relacionados para la construcción, a los mejores precios marcas nacionales e importadas.', 'img/products/2014-07-31-20-chPQOGhiCfucz-MEZCLADORA.jpg', 'img/products/img-lista/2014-07-31-20-33lBWxxYe1dUv-RANA.jpg', 'img/products/img-lista/2014-07-31-20-A3eBTE1J2jZlw-SALTARIN KING.jpg', NULL, NULL, 1, '2014-07-31', '2014-08-24'),
(73, 4, 7, 'Watch Dogs Ps4 Español. Nuevo Y Sellado. Entrega Hoy Mismo!!', 'watch_dogs_ps4_espanol_nuevo_y_sellado_entrega_hoy_mismo', '* REALIZAMOS ENVÍOS A TODO EL PAÍS! ENVIAMOS EL MISMO DÍA DEL PAGO Y TARDA 1 DÍA HÁBIL EN LLEGAR A CIUDADES PRINCIPALES!!!\r\n* ESTE PRODUCTO ESTÁ TOTALMENTE NUEVO Y SELLADO DE FÁBRICA. LO TENEMOS PARA ENTREGA INMEDIATA', 'img/products/2014-08-01-08-bIDeANqBZzRVK-w1.jpg', NULL, NULL, NULL, NULL, 1, '2014-08-01', '2014-08-24'),
(74, 1, 11, 'Camisetas Abercrombie Hollister Originales Por Mayor Unidad', 'camisetas_abercrombie_hollister_originales_por_mayor_unidad', 'pendiente', 'img/products/2014-08-02-01-eDpCCMIDZmFmX-ropa1.jpg', NULL, NULL, NULL, NULL, 1, '2014-08-02', '2014-08-24'),
(75, 2, 4, 'TRATAMIENTOS FACIALES SESION', 'tratamientos_faciales_sesion', 'Estudio de necesidades cutáneas, limpieza según tipo de piel, alta frecuencia, mascarillas según la necesidad cutánea, ionización de producto, pantalla solar, asesoramiento profesional.', 'img/products/2014-08-02-02-dmon3JrLwWlBI-FACIAL.png', NULL, NULL, NULL, NULL, 1, '2014-08-02', '2014-08-24'),
(76, 2, 4, 'LIMPIEZA FACIAL PROFUNDA', 'limpieza_facial_profunda', 'Análisis de las necesidades cutáneas, desmaquillado, exfoliación, tónico, pre-extracción, peeling enzimático, masaje, vapor-ozono, ventosas, alta frecuencia, mascarilla, hidratante, asesoramiento para tratamiento de refuerzo en casa.', 'img/products/2014-08-04-00-B4Qw4lYZ4tvIw-limpieza facial profunda.png', NULL, NULL, NULL, NULL, 1, '2014-08-04', '2014-08-24'),
(77, 2, 4, 'TRATAMIENTO ANTI-AGE', 'tratamiento_anti-age', 'Desmaquillado según tipo de piel, peeling, tónico, vapor-ozono, ionización de producto, mascarilla, maniobras con hidratante, pantalla solar, asesoramiento profesional.', 'img/products/2014-08-04-01-voMUurcjvDM85-tratamiento anti age.png', NULL, NULL, NULL, NULL, 1, '2014-08-04', '2014-08-24'),
(78, 2, 4, 'Despigmentación cutánea', 'despigmentacion_cutanea', 'Desmaquillado, peeling, tónico, aplicación de Alfahidroxiácidos, mascarilla calmante, maniobras con hidratante, pantalla solar y asesoramiento para tratamiento de refuerzo en casa.  6 sesiones', 'img/products/2014-08-04-01-nQKXC9RiF2JwH-despigmentacion cutanea.png', NULL, NULL, NULL, NULL, 1, '2014-08-04', '2014-08-24'),
(79, 2, 4, 'PLASMA RICO EN PLAQUETAS', 'plasma_rico_en_plaquetas', 'Extracción del plasma, separación y enriquecimiento de las plaquetas, limpieza y esterilización del rostro o área a tratar, aplicación del plasma enriquecido mediante procedimiento de mesoterápia, aplicación de mascarilla, aplicación de frio calmante, hidroreparadora, pantalla solar', 'img/products/2014-08-04-01-t7rGm3aKEPfs9-plasma rico en plaquetas.png', NULL, NULL, NULL, NULL, 1, '2014-08-04', '2014-08-24'),
(80, 1, 1, 'zapatos', 'zapatos', 'pendiente jjj', 'img/products/2014-08-04-16-08-48-zLprd9s7nFYoZ-', NULL, NULL, NULL, NULL, 0, '2014-08-04', '2014-08-24'),
(81, 4, 8, 'FUNDAMENTACION EN VIGILANCIA', 'fundamentacion_en_vigilancia', 'Capacitar al  Vigilante en procedimientos, conocimientos y destrezas necesarios para desempeñarse con eficiencia en las diferentes responsabilidades y tareas propias de la Vigilancia  y Seguridad Privada, con acatamiento a las normas legales vigentes hacia el marco de la empresa, la familia y la sociedad. 100 Horas.', 'img/products/2014-08-04-20-08-14-8vG6dKdIvxsdx-', NULL, NULL, NULL, NULL, 1, '2014-08-04', '2014-08-24'),
(82, 2, 4, 'MICRODERMOABRASION CON PUNTAS DE DIAMANTE', 'microdermoabrasion_con_puntas_de_diamante', 'Desmaquillado según tipo de piel, peeling, tónico, vapor-ozono, exfoliación con las puntas de diamante, mascarilla calmante, maniobras con hidro-reparadora, pantalla solar.', 'img/products/2014-08-05-02-08-58-qtySL1m1gC0j4-', NULL, NULL, NULL, NULL, 1, '2014-08-05', '2014-08-24'),
(83, 2, 4, 'MÁXIMA HIDRATACIÓN', 'maxima_hidratacion', 'Desmaquillado, análisis de piel, peeling, tónico, Alta frecuencia, ionizamos mascarilla hidratante, mascarilla de colágeno, o parafina, hidratante y protector solar.', 'img/products/2014-08-05-02-08-03-3jwHkAjofdh0A-', NULL, NULL, NULL, NULL, 1, '2014-08-05', '2014-08-24'),
(84, 2, 4, 'TRATAMIENTO ANTI-ACNE', 'tratamiento_anti-acne', 'Desmaquillado, análisis de piel, peeling, tónico astringente, mascarilla desincrustante, vapor-ozono, extracción o saponificación, ampolla para piel grasa, alta frecuencia, mascarilla para piel grasa, drenaje y protector solar.', 'img/products/2014-08-05-02-08-43-2u6eYNUpYhgnX-', NULL, NULL, NULL, NULL, 1, '2014-08-05', '2014-08-24'),
(85, 2, 4, 'TRATAMIENTO TONIFICANTE', 'tratamiento_tonificante', 'Desmaquillado, analisis de piel, peeling, tónico, vapor, ionizamos producto reafirmante, gimnasia pasiva, o vacum, o masaje tonificante, mascarilla, hidratante, y protector solar.', 'img/products/2014-08-05-02-08-07-pwuqrh6x83qLj-', NULL, NULL, NULL, NULL, 1, '2014-08-05', '2014-08-24'),
(86, 2, 4, 'TRATAMIENTO DE REDUCCIÓN DE MEDIDAS', 'tratamiento_de_reduccion_de_medidas', 'Limpieza y exfoliación del area a tratar, aplicación de producto reductor, manta térmica, masaje, vacumterápia,, o gimnasia pasiva, o cavitación,, o mesoterápia con ultrasonido. asesoramiento para reforzar en casa, asesoramiento nutricional.', 'img/products/2014-08-05-02-08-41-YtCkgVUnfX0Vy-', NULL, NULL, NULL, NULL, 0, '2014-08-05', '2014-08-24'),
(87, 2, 4, 'TRATAMIENTO ANTICELULÍTICO', 'tratamiento_anticelulitico', 'Limpieza y exfoliación del area a tratar, aplicación de producto anticelulítico, masaje, manta térmica, vacumterápia o cavitación, drenaje linfático, otra sesión ultrasonido y otras técnicas variadas. asesoramiento de refuerzo en casa, y guia nutricional.', 'img/products/2014-08-05-03-08-40-VpI8lnjK9rDZU-', NULL, NULL, NULL, NULL, 1, '2014-08-05', '2014-08-24'),
(88, 2, 4, 'TRATAMIENTO DE GLUTEOS', 'tratamiento_de_gluteos', 'Limpieza y exfoliación del area, aplicación de producto estimulante y masaje, aplicación de vacumterápia, copas delfín, crio-terápia, o mascarilla feafirmante, o ultrasonido, o gimnasia pasiva, aplicación de vitamina C , mesoterápia con productos estimulantes y tonificantes. Asesoramiento nutricional.', 'img/products/2014-08-05-03-08-52-V6wIdAk97Yvdp-', NULL, NULL, NULL, NULL, 1, '2014-08-05', '2014-08-24'),
(89, 1, 1, 'Gorra Valentino Rossi', 'gorra_valentino_rossi', 'Gorras Valentino Rossi súper baratas en malla.', 'img/products/2014-09-07-02-09-21-DQz7SgaK1K8P7.jpg', 'img/products/img-lista/2014-08-05-20-08-15-OwWo3Ew9kqN6m-', 'img/products/img-lista/2014-08-05-20-08-15-M2lBUzPI1WO9w-', NULL, NULL, 1, '2014-08-05', '2014-09-07'),
(90, 1, 11, 'Gorra Plana Scuderia Ferrari - Puma', 'gorra_plana_scuderia_ferrari_-_puma', 'Te gusta la FORMULA 1 y los deportes de motor?\r\n\r\nAdquiere yaaaaa! la GORRA PLANA Oficial de FERRARI!\r\nProducto importado 100% original PUMA licenciado por la ESCUDERIA FERRARI FORMULA 1  para su distribución.', 'img/products/2014-08-05-20-08-48-CvSt9mfaAZyOI-', 'img/products/img-lista/2014-08-05-20-08-48-w7snZKOzjj4sM-', 'img/products/img-lista/2014-08-05-20-08-48-nkrpO96LzBd3Q-', NULL, NULL, 1, '2014-08-05', '2014-08-24'),
(91, 1, 11, 'Gorras Tommy Hilfiger 100% Originales', 'gorras_tommy_hilfiger_100_originales', 'SI ESTAS EN BUCARAMANGA PUEDES RECOJERLAS PERSONALMENTE', 'img/products/2014-08-05-20-08-47-KcofDY5FfqQTs-', NULL, NULL, NULL, NULL, 1, '2014-08-05', '2014-08-24'),
(92, 1, 11, 'Oakley Gorra', 'oakley_gorra', 'Gorra Oakley  classic MID FLEX. Comprada directamente de la tienda OAKLEY de USA.', 'img/products/2014-08-05-20-08-40-zf0PIp3PXQtBD-', 'img/products/img-lista/2014-08-05-20-08-39-ue4qAsEkmb4Yc-', 'img/products/img-lista/2014-08-05-20-08-40-RzxVNPnDN1kKH-', NULL, NULL, 1, '2014-08-05', '2014-08-24'),
(93, 1, 11, 'Gorra New Era Nfl Seattle', 'gorra_new_era_nfl_seattle', 'Gorras importadas NFL Seattle', 'img/products/2014-08-05-20-08-47-JaM80KQw00qJG-', 'img/products/img-lista/2014-08-05-20-08-47-aCGSMfBFxfC9X-', 'img/products/img-lista/2014-08-05-20-08-47-eqCFMhRCrtP3B-', NULL, NULL, 1, '2014-08-05', '2014-08-24'),
(94, 4, 8, 'HERRAMIENTAS MANUALES Y ELECTRICAS', 'herramientas_manuales_y_electricas', 'AGROFARBEF TE OFRECE LINEA COMPLETA DE HERRAMIENTAS MANUALES Y ELÉCTRICAS PARA LA INDUSTRIA, CARPINTERÍA, MECÁNICA, CONSTRUCCIÓN Y MINERÍA CON MARCAS RECONOCIDAS COMO DEWALT, BOSCH, MAKITA, BLACK DECKER', 'img/products/2014-08-05-23-08-58-JxSbr9U8tHvcf-', 'img/products/img-lista/2014-08-05-23-08-58-oWxXZkNmadV0u-', 'img/products/img-lista/2014-08-05-23-08-58-gi9XnZpKPzDW0-', NULL, NULL, 1, '2014-08-05', '2014-08-24'),
(95, 1, 2, 'Vestido Importado Uv Glow Brillan Luz Uv Moda Fashion', 'vestido_importado_uv_glow_brillan_luz_uv_moda_fashion', 'Vestidos UV Glow brillan con la luz UV ideal para discoteca presentaciones y eventos.', 'img/products/2014-08-10-17-08-29-kbzGxHY9075MH-', 'img/products/2014-08-10-17-08-29-2XfOkvyrf5npW-', 'img/products/2014-08-10-17-08-30-KvMLGxe7F8cGd-', NULL, NULL, 1, '2014-08-09', '2014-08-24'),
(96, 1, 2, 'Blusas Aeropostale, Hollister, Ralph Lauren', 'blusas_aeropostale_hollister_ralph_lauren', 'Blusas de diferentes marcas, para dama', 'img/products/2014-08-10-17-08-46-EbyfjcjH4xvw4-', 'img/products/img-lista/2014-08-10-17-08-45-VSI1McssAqWPo-', 'img/products/img-lista/2014-08-10-17-08-45-HLyZAZu2If4EA-', NULL, NULL, 1, '2014-08-10', '2014-08-24'),
(97, 1, 2, 'Blusas Studio F, Levis, Abrecrombie', 'blusas_studio_f_levis_abrecrombie', 'Camisetas para dama de diferentes marcas', 'img/products/2014-08-10-17-08-19-x9Sg7MYQMWEzh-', 'img/products/img-lista/2014-08-10-17-08-19-Y03VWwhQoOIX4-', 'img/products/img-lista/2014-08-10-17-08-19-LijF0lfgeCzZG-', NULL, NULL, 1, '2014-08-10', '2014-08-24'),
(98, 1, 2, 'Pantalones jean, blusas', 'pantalones_jean_blusas', 'Pantalon jean leventa cola, blusas y sacos, anímate a comprar', 'img/products/2014-08-10-17-08-16-Yt8iI7HveLv5y-', NULL, NULL, NULL, NULL, 1, '2014-08-10', '2014-08-24'),
(99, 1, 2, 'Conjuntos, pantalon jean y blusa', 'conjuntos_pantalon_jean_y_blusa', 'Pantalones Jean Levantacola Dama Mujer Blusas Sacos Braga', 'img/products/2014-08-10-17-08-43-Ak7wkh3S8BxcI-', NULL, NULL, NULL, NULL, 1, '2014-08-10', '2014-08-24'),
(100, 3, 9, 'Cupcake de Chocolate', 'cupcake_de_chocolate', 'Cupcake de chocolate cubierto con ganache', 'img/products/2014-08-14-00-08-31-UlVVQTVt0m8d0-', NULL, NULL, NULL, NULL, 1, '2014-08-14', '2014-08-24'),
(101, 3, 9, 'Cupcake', 'cupcake', 'Cupcake ', 'img/products/2014-08-14-03-08-05-DglMJtZzoTIkF-', 'img/products/img-lista/2014-08-14-03-08-04-GtrVdqlvpXJYl-', 'img/products/img-lista/2014-08-14-03-08-04-mFMDNQtGthV82-', NULL, NULL, 1, '2014-08-14', '2014-08-24'),
(102, 4, 19, 'Relojes LED Watch', 'relojes_led_watch', 'Relojes digitales, estilo casual y deportivo de diferentes colores para hombres y para mujer.', 'img/products/2014-08-14-21-08-00-Az7FJlmis4ftN-', 'img/products/img-lista/2014-08-14-21-08-59-kZnw5SlILyZWC-', 'img/products/img-lista/2014-08-14-21-08-00-2HmRTHzG5uixj-', NULL, NULL, 1, '2014-08-14', '2014-08-24'),
(103, 4, 8, 'Samsung Galaxy S5 LTE 16 GB', 'samsung_galaxy_s5_lte_16_gb', 'Teléfono Android KitKat Samsung Galaxy S5 de 16 GB ', 'img/products/2014-08-14-21-08-47-PDu9yWNOG9BEf-', 'img/products/img-lista/2014-08-14-21-08-46-tibkWBiSpiN8g-', 'img/products/img-lista/2014-08-14-21-08-46-izPG2pYaezr02-', NULL, NULL, 1, '2014-08-14', '2014-08-24'),
(104, 1, 11, 'Monturas Sport de marcas reconocidas', 'monturas_sport_de_marcas_reconocidas', 'Marcas reeconocids como Ray Ban, lacoste, Polo Ralph Lauren, entre otras.', 'img/products/2014-08-14-21-08-15-6YAdhJIPjIgF9-', NULL, NULL, NULL, NULL, 1, '2014-08-14', '2014-08-24'),
(105, 4, 12, 'Samsung Galaxy Tab Pro 8.4 Rapidisima, Retina Snapdragon 800', 'samsung_galaxy_tab_pro_84_rapidisima_retina_snapdragon_800', 'VENDO ESPECTACULAR TABLET SAMSUNG GALAXY TAB PRO 8.4 (MODELO 2014) CON PROCESADOR SNAPDRAGON 800 , EL MISMO QUE TIENE LA NOTE 3, DA MAS DE 36.000 PUNTOS EN ANTUTU ES RAPIDISIMA Y TIENE UNA ESPECTACULAR PANTALLA CON UNA RESOLUCION DE 2560x1600, SE ENTREGA EN SU CAJA SELLADA, LA TABLET ES DE COLOR BLANCO Y TIENE GARANTIA. ', 'img/products/2014-08-14-21-08-57-fZbKbCgJYRwjc-', 'img/products/img-lista/2014-08-14-21-08-57-2tlZjyXP6uM3V-', 'img/products/img-lista/2014-08-14-21-08-57-QFIv3wGrZoVYF-', NULL, NULL, 1, '2014-08-14', '2014-08-24'),
(106, 1, 11, 'Gafas Oakley', 'gafas_oakley', 'Garage Rock Ferrari 16014', 'img/products/2014-08-14-22-08-19-bqLWM2peG3w99-', NULL, NULL, NULL, NULL, 1, '2014-08-14', '2014-08-24'),
(107, 1, 11, 'Gafas Oakley', 'gafas_oakley', 'Gafas Caveat Para Mujer 15949', 'img/products/2014-08-14-22-08-28-vh44sH5JYmYUJ-', NULL, NULL, NULL, NULL, 1, '2014-08-14', '2014-08-24'),
(108, 1, 11, 'Zapatos Polo Ralhp Lauren', 'zapatos_polo_ralhp_lauren', 'Zapatos Polo Faxon Low 16032', 'img/products/2014-08-14-22-08-35-FsJsyM7prN8Qe-', NULL, NULL, NULL, NULL, 1, '2014-08-14', '2014-08-24'),
(109, 1, 11, 'Zapatos Polo Ralhp Lauren', 'zapatos_polo_ralhp_lauren', 'Zapatos Polo En Tela Faxon Low Azul 16033', 'img/products/2014-08-14-22-08-36-sUUZMQqgIR4hX-', NULL, NULL, NULL, NULL, 1, '2014-08-14', '2014-08-24'),
(110, 1, 11, 'Zapatos Polo Ralhp Lauren', 'zapatos_polo_ralhp_lauren', 'Zapatos Polo En Tela Faxon Low Negro Por Gris 16034', 'img/products/2014-08-14-22-08-07-8o6ZjuX6x7yBg-', NULL, NULL, NULL, NULL, 1, '2014-08-14', '2014-08-24'),
(111, 1, 11, 'Zapatos Polo Ralhp Lauren', 'zapatos_polo_ralhp_lauren', 'Zapatos Polo En Tela Faxon Low Rojo 16035', 'img/products/2014-08-14-22-08-20-BPE6NCJ5QvA1O-', NULL, NULL, NULL, NULL, 1, '2014-08-14', '2014-08-24'),
(112, 1, 11, 'Zapatos Polo Ralhp Lauren', 'zapatos_polo_ralhp_lauren', 'Zapatos Polo En Tela Faxon Low Azul 16043', 'img/products/2014-08-14-22-08-33-tLuFfoIhVy2cW-', NULL, NULL, NULL, NULL, 1, '2014-08-14', '2014-08-24'),
(113, 1, 11, 'Zapatos Polo Ralhp Lauren', 'zapatos_polo_ralhp_lauren', 'Zapatos Polo En Tela Faxon Low Gris 16041', 'img/products/2014-08-14-23-08-09-BuUeluF8LCSgv-', NULL, NULL, NULL, NULL, 1, '2014-08-14', '2014-08-24'),
(114, 1, 11, 'Zapatos Polo Ralhp Lauren', 'zapatos_polo_ralhp_lauren', 'Zapatos Polo Ref Fernando Cafe 16044', 'img/products/2014-08-14-23-08-05-0050Zx27lEaMY-', NULL, NULL, NULL, NULL, 1, '2014-08-14', '2014-08-24'),
(115, 1, 11, 'Zapatos Polo Ralhp Lauren', 'zapatos_polo_ralhp_lauren', 'Zapatos Polo Ref Fernando Naranja 16047', 'img/products/2014-08-14-23-08-31-sG3HbM2d8hSLC-', NULL, NULL, NULL, NULL, 1, '2014-08-14', '2014-08-24'),
(116, 1, 11, 'Zapatos Polo Ralhp Lauren', 'zapatos_polo_ralph_lauren', 'Zaapatos Polo Ref Fernando Verde 16048', 'img/products/2014-08-14-23-08-00-Bz6CwBrNs6nQg-', NULL, NULL, NULL, NULL, 1, '2014-08-14', '2014-08-24'),
(117, 1, 11, 'Zapatos Polo Ralhp Lauren', 'zapatos_polo_ralhp_lauren', 'Zapatos Polo Ref Fakenham Negro 16038', 'img/products/2014-08-14-23-08-25-g0ven26oNOsLw-', NULL, NULL, NULL, NULL, 1, '2014-08-14', '2014-08-24'),
(118, 1, 11, 'Zapatos Polo Ralhp Lauren', 'zapatos_polo_ralhp_lauren', 'Zapatos Polo Fakenham Azul', 'img/products/2014-08-14-23-08-56-CN9fPS9wtJ7Qt-', NULL, NULL, NULL, NULL, 1, '2014-08-14', '2014-08-24'),
(119, 1, 11, 'Zapatos Polo Ralhp Lauren', 'zapatos_polo_ralhp_lauren', 'Zapatos Polo Fakenham Rojo 16040', 'img/products/2014-08-14-23-08-35-AuulFXK5jMxVC-', NULL, NULL, NULL, NULL, 1, '2014-08-14', '2014-08-24'),
(120, 1, 11, 'Zapatos Calvin Klein', 'zapatos_calvin_klein', 'Zapatos Calvin Klein Negro 14601', 'img/products/2014-08-14-23-08-25-zUWwUIbRUGlsl-', NULL, NULL, NULL, NULL, 1, '2014-08-14', '2014-08-24'),
(121, 1, 11, 'Zapatos Calvin Klein', 'zapatos_calvin_klein', 'Zapatos Calvin Klein Azul 14602', 'img/products/2014-08-14-23-08-37-HqnvA3B48aLz5-', NULL, NULL, NULL, NULL, 1, '2014-08-14', '2014-08-24'),
(122, 1, 11, 'Zapatos Calvin Klein', 'zapatos_calvin_klein', 'Zapatos Calvin Klein Blanco 14603', 'img/products/2014-08-14-23-08-43-DHWrgthq66eFE-', NULL, NULL, NULL, NULL, 1, '2014-08-14', '2014-08-24'),
(123, 1, 11, 'Zapatos Calvin Klein', 'zapatos_calvin_klein', 'Zapatos Calvin Klein Gris 14604', 'img/products/2014-08-14-23-08-55-w0jMIchismhEX-', NULL, NULL, NULL, NULL, 1, '2014-08-14', '2014-08-24'),
(124, 1, 11, 'Zapatos Calvin Klein', 'zapatos_calvin_klein', 'Zapatos Calvin Klein Gris Naranja 14605', 'img/products/2014-08-14-23-08-57-4f4uDBjocGKkJ-', NULL, NULL, NULL, NULL, 1, '2014-08-14', '2014-08-24'),
(125, 1, 11, 'Zapatos Diesel', 'zapatos_diesel', 'Zapatos Diesel Azul 15969', 'img/products/2014-08-14-23-08-16-reLQVZc16jgxp-', NULL, NULL, NULL, NULL, 1, '2014-08-14', '2014-08-24'),
(126, 1, 11, 'Zapatos Diesel', 'zapatos_diesel', 'Zapatos Diesel 15968', 'img/products/2014-08-15-00-08-13-aLTH1bRioqNy0-', NULL, NULL, NULL, NULL, 1, '2014-08-15', '2014-08-24'),
(127, 1, 11, 'Zapatos Diesel', 'zapatos_diesel', 'Zapatos Diesel 15972', 'img/products/2014-08-15-00-08-41-2cNBOMu8O70Xh-', NULL, NULL, NULL, NULL, 1, '2014-08-15', '2014-08-24'),
(128, 1, 11, 'Zapatos Diesel', 'zapatos_diesel', 'Zapatos Diesel 15967', 'img/products/2014-08-15-00-08-19-67MVbylqD1Rjr-', NULL, NULL, NULL, NULL, 1, '2014-08-15', '2014-08-24'),
(129, 1, 11, 'Zapatos Diesel', 'zapatos_diesel', 'Zapatos Diesel 15937', 'img/products/2014-08-15-00-08-13-h5OsghVwvMEEn-', NULL, NULL, NULL, NULL, 1, '2014-08-15', '2014-08-24'),
(130, 1, 11, 'Zapatos Diesel', 'zapatos_diesel', 'Zapatos Diesel 15936', 'img/products/2014-08-15-00-08-06-TQgP7Bozv5Az9-', NULL, NULL, NULL, NULL, 1, '2014-08-15', '2014-08-24'),
(131, 1, 11, 'Zapatos Diesel', 'zapatos_diesel', 'Zapatos Diesel 15938', 'img/products/2014-08-15-00-08-54-zQDo75M6Wcw2g-', NULL, NULL, NULL, NULL, 1, '2014-08-15', '2014-08-24'),
(132, 1, 11, 'Zapatos Diesel', 'zapatos_diesel', 'Zapatos Diesel 13183', 'img/products/2014-08-15-00-08-31-wVKI6sxIXg9pt-', NULL, NULL, NULL, NULL, 1, '2014-08-15', '2014-08-24'),
(133, 1, 11, 'Zapatos Diesel', 'zapatos_diesel', 'Zapatos Diesel 15976', 'img/products/2014-08-15-00-08-29-36BuCUOJTI8j5-', NULL, NULL, NULL, NULL, 1, '2014-08-15', '2014-08-24'),
(134, 1, 11, 'Zapatos Diesel', 'zapatos_diesel', 'Zapatos Diesel  15966', 'img/products/2014-08-15-00-08-05-excBjFneBICBu-', NULL, NULL, NULL, NULL, 1, '2014-08-15', '2014-08-24'),
(135, 1, 11, 'Zapatos Diesel', 'zapatos_diesel', 'Zapatos Diesel 15965\r\n', 'img/products/2014-08-15-00-08-02-k0NfQdv6DI79C-', NULL, NULL, NULL, NULL, 1, '2014-08-15', '2014-08-24'),
(136, 1, 11, 'Zapatos Diesel', 'zapatos_diesel', 'Zapatos Diesel 15971', 'img/products/2014-08-15-00-08-54-EAZ5clr3yM1zE-', NULL, NULL, NULL, NULL, 1, '2014-08-15', '2014-08-24'),
(137, 1, 11, 'Zapatos Diesel', 'zapatos_diesel', 'Zapatos Diesel 14619', 'img/products/2014-08-15-00-08-57-3g3P8Cw0BzYUt-', NULL, NULL, NULL, NULL, 1, '2014-08-15', '2014-08-24'),
(138, 2, 4, 'ESMALTE MASGLO', 'esmalte_masglo', 'Esmaltes de una excelente calidad con diversas tonalidades. ', 'img/products/2014-08-16-20-08-01-TrtJ3LBIOGb0y-', NULL, NULL, NULL, NULL, 1, '2014-08-16', '2014-08-24'),
(139, 1, 11, 'AGV K3 46 LG', 'agv_k3_46_lg', 'El K-3 es uno de los clásicos más vendidos cascos de AGV. Su diseño deriva de la parte superior de la gama GP-Tech cascos, con lo que la mayoría de las últimas características avanzadas para este producto con un precio razonable. El casco de inspiración-line carrera maximiza el flujo de aire minimizando los niveles de ruido, mientras que el alerón de nuevo asegura la estabilidad a altas velocidades. El sistema de ventilación dispone de tres tomas frontales, y seis extractores posteriores y laterales, mientras que un protector de viento barbilla evitar turbulencias en el interior del casco.\r\n\r\nEl K-3 está disponible en una increíble gama de colores , incluyendo los gráficos oficiales Valentino Rossi réplica , que se pueden personalizar con adicionales Viseras , en Polarizados , Iridium y arco iris de colores.\r\n\r\nSi usted desea actualizar a una más ligera y más resistente de fibra de vidrio cubierta exterior del K-4 EVO sería el yelmo de la elección.', 'img/products/2014-08-19-15-08-31-LWB8lsoWvqyZV-', 'img/products/img-lista/2014-08-19-15-08-31-HiChFVsnx3XSw-', 'img/products/img-lista/2014-08-19-15-08-31-rmPeh9utP6i0i-', NULL, NULL, 1, '2014-08-19', '2014-08-24'),
(140, 2, 3, 'KERATINA LISSTYLE ', 'keratina_lisstyle_', 'KIT LISSTYLE   Tratamiento alisador progresivo sin formol a base de KERATINA y CARBOCISTEINA, conocida por mantener la producción del colágeno. Actúa en la superficie de la cutícula capilar ELIMINANDO EL FRIZZ Y EL VOLUMEN.\r\n           ', 'img/products/2014-08-19-20-08-37-Pwn4R3uCFXnO3-', 'img/products/img-lista/2014-08-19-20-08-37-HPZGoIDbczg2p-', NULL, NULL, NULL, 1, '2014-08-19', '2014-08-24'),
(141, 2, 3, 'MASCARILLA CAPILAR INTENSIVA ARGAN', 'mascarilla_capilar_intensiva_argan', 'La Mascarilla Hidratante Intensiva de L´mar es un Tratamiento EXTRA ACONDICIONADOR enriquecido con ARGAN EXTRA VIRGEN que hidrata, acondiciona profundamente y repara el cabello seco, maltratado y dañado inclusive por procesos químicos.', 'img/products/2014-08-19-21-08-45-vg6fMS59LvU1Q-', 'img/products/img-lista/2014-08-19-21-08-45-TY3gH0M4jC662-', NULL, NULL, NULL, 1, '2014-08-19', '2014-08-24'),
(142, 2, 3, 'CREMA PARA PEINAR ARGAN', 'crema_para_peinar_argan', 'CREMA PARA PEINAR TRATAMIENTO CAPILAR RESTRUCTURANTE ARGAN', 'img/products/2014-08-19-21-08-20-MhQJfCa8uQFxJ-', 'img/products/img-lista/2014-08-19-21-08-20-oOtW13XgIsuGU-', NULL, NULL, NULL, 1, '2014-08-19', '2014-08-24'),
(143, 2, 3, 'SHAMPOO CON CERAMIDAS Y EXTRACTOS NATURALES', 'shampoo_con_ceramidas_y_extractos_naturales', ' Shampoos con Extractos Naturales de L´mar con PH balanceado, acondicionan y son ideales para el cuidado diario del cabello pues contienen la riqueza nutritiva de las plantas que ayudan a recuperar las propiedades naturales del cabello.', 'img/products/2014-08-19-22-08-14-oZ2ZvlIwc1kHL-', NULL, NULL, NULL, NULL, 1, '2014-08-19', '2014-08-24'),
(144, 2, 3, 'KERATIN REPAIR PLUS', 'keratin_repair_plus', 'Tratamiento capilar reestructuraste con keratina y arginina proporcionando Nutrición,reparación,fortaleza y brillo  ', 'img/products/2014-08-19-22-08-00-wtnkW8h76VmI4-', NULL, NULL, NULL, NULL, 1, '2014-08-19', '2014-08-24'),
(145, 2, 3, 'KERATIN REPAIR PLUS', 'keratin_repair_plus', 'Tratamiento capilar reestructuraste con keratina y arginina proporcionando Nutrición,reparación,fortaleza y brillo  ', 'img/products/2014-08-19-22-08-08-vjzO7CdXCIiNu-', NULL, NULL, NULL, NULL, 1, '2014-08-19', '2014-08-24'),
(146, 2, 3, 'KERATIN REPAIR', 'keratin_repair', 'Activa la producción de keratina, conservando la hidratación interna del cabello, desenredándolo fácilmente y recuperando el cuerpo, la suavidad, el brillo y la vitalidad. NO NECESITA ENJUAGUE, ÚNICA CON PROTECCIÓN SOLAR (FILTRO UV)\r\n', 'img/products/2014-08-19-22-08-16-pl8IAfO0FX3i3-', NULL, NULL, NULL, NULL, 1, '2014-08-19', '2014-08-24'),
(147, 2, 3, 'COCKTAIL REPOLARIZADORA', 'cocktail_repolarizadora', 'Tratamiento capilar intensivo, reparador y reestructurado ', 'img/products/2014-08-19-22-08-21-hxJ2yiLwGrG9v-', NULL, NULL, NULL, NULL, 1, '2014-08-19', '2014-08-24'),
(148, 2, 3, 'TRATAMIENTO SEMILLAS DE LINO', 'tratamiento_semillas_de_lino', 'El Tratamiento Capilar Texturizante con Semillas de Lino L´MAR Nutre, Hidrata, Restaura y Revitaliza el cabello.  contienen Ácido Linoleico y Vitamina E que devuelven la belleza al cabello tinturado y frágil.', 'img/products/2014-08-20-00-08-00-rgM8eeTz5iJri-', NULL, NULL, NULL, NULL, 1, '2014-08-20', '2014-08-24'),
(149, 2, 3, 'TINTE ALFAPARF MILANO', 'tinte_alfaparf_milano', 'MÁXIMA COBERTURA Y MÁXIMO PODER ACLARANTE\r\nreflejos del siempre Más Luminosos, brillantes, Fieles y Naturales\r\n', 'img/products/2014-08-20-22-08-55-oUdmFizVpOqLI-', 'img/products/img-lista/2014-08-20-22-08-54-SMIj1eubTMvag-', 'img/products/img-lista/2014-08-20-22-08-55-NOZfPNbicpD6n-', NULL, NULL, 1, '2014-08-20', '2014-08-24'),
(150, 2, 3, 'TINTE ALFAPARF  COLOR WEAR', 'tinte_alfaparf_color_wear', '(tinte) Coloracion tono sobre tono sin Amoniaco', 'img/products/2014-08-20-22-08-35-jPHAyqIJvlsAW-', 'img/products/img-lista/2014-08-20-22-08-35-BzqLHxM99ktbL-', NULL, NULL, NULL, 1, '2014-08-20', '2014-08-24'),
(151, 2, 3, 'SHAMPOO SEMI DI LINO DIAMANTE ILLUMINATING', 'shampoo_semi_di_lino_diamante_illuminating', 'Las texturas multisensoriales, a base de Extracto de Semillas de Lino, Vitamina E, Omega-3 y Omega-6, favorecen la cohesión de las cutículas, aportando al cabello una suavidad y brillo únicos.', 'img/products/2014-08-20-22-08-56-ASW2X3qwY5ybl-', 'img/products/img-lista/2014-08-20-22-08-56-MCHAU5B2SAT1b-', NULL, NULL, NULL, 1, '2014-08-20', '2014-08-24'),
(152, 2, 3, 'SHAMPOO MIDOLLO DI BAMBOO', 'shampoo_midollo_di_bamboo', 'repara los daños más profundos regenerando la materia interna del cabello  devolviendo su  vigor, vitalidad y flexibilidad.', 'img/products/2014-08-22-20-08-42-WWITtPuT6iuZY-', NULL, NULL, NULL, NULL, 1, '2014-08-22', '2014-08-24'),
(153, 2, 3, 'KIT MIDOLLO DI BAMBOO ', 'kit_midollo_di_bamboo_', 'Tratamiento Reestructurar para cabellos demasiado maltratado ', 'img/products/2014-08-22-20-08-08-kXsaFKwITBsyb-', 'img/products/img-lista/2014-08-22-20-08-08-CAlF39vUkuIAc-', NULL, NULL, NULL, 1, '2014-08-22', '2014-08-24'),
(154, 2, 3, 'KIT CIOCCOLATO', 'kit_cioccolato', 'Cioccolato es la nutrición esencial para el cabello muy seco y quebradizo. Un tratamiento completo a base de los beneficios del chocolate que recupera la salud del cabello con una deliciosa fragancia, extremamente hidratante, luminoso y suave', 'img/products/2014-08-22-20-08-10-j6SEUQiho9EHQ-', NULL, NULL, NULL, NULL, 1, '2014-08-22', '2014-08-24'),
(155, 2, 3, 'SHAMPOO CIOCCOLATO', 'shampoo_cioccolato', 'Shampoo suave de limpieza profunda. Ideal para recuperar la salud y el brillo de los cabellos quebradizos.', 'img/products/2014-08-22-21-08-59-qwQtBuuTCFLUn-', NULL, NULL, NULL, NULL, 1, '2014-08-22', '2014-08-24'),
(156, 2, 3, 'AMPOLLAS DIAMANTE SEMI DÍ LINO ALFAPARF AZUL Y ROSADA', 'ampollas_diamante_semi_di_lino_alfaparf_azul_y_rosada', 'Tratamiento intensivo cierra la cutícula dando al cabello luminosidad y suavidad, aporta al cabello cuerpo, elasticidad y un gran brillo', 'img/products/2014-08-22-21-08-22-5LGRaCIzzgXQq-', 'img/products/img-lista/2014-08-22-21-08-22-jaSuDnhji0LMG-', 'img/products/img-lista/2014-08-22-21-08-22-NQDT6YcNGxveP-', NULL, NULL, 1, '2014-08-22', '2014-08-24'),
(157, 2, 3, 'AMPOLLAS DIAMANTE SEMI DÍ LINO ALFAPARF AZUL Y ROSADA', 'ampollas_diamante_semi_di_lino_alfaparf_azul_y_rosada', 'Tratamiento intensivo cierra la cutícula dando al cabello luminosidad y suavidad, aporta al cabello cuerpo, elasticidad y un gran brillo', 'img/products/2014-08-22-21-08-15-aPVHdhlZsPB7z-', 'img/products/img-lista/2014-08-22-21-08-15-vMw5vqyTq4jhg-', 'img/products/img-lista/2014-08-22-21-08-15-TyCShrRwc0Oh3-', NULL, NULL, 1, '2014-08-22', '2014-08-24'),
(158, 1, 11, 'AGV K3 THE DONKEY', 'agv_k3_the_donkey', 'El K-3 es uno de los clásicos más vendidos cascos de AGV. Su diseño deriva de la parte superior de la gama GP-Tech cascos, con lo que la mayoría de las últimas características avanzadas para este producto con un precio razonable. El casco de inspiración-line carrera maximiza el flujo de aire minimizando los niveles de ruido, mientras que el alerón de nuevo asegura la estabilidad a altas velocidades. El sistema de ventilación dispone de tres tomas frontales, y seis extractores posteriores y laterales, mientras que un protector de viento barbilla evitar turbulencias en el interior del casco. El K-3 está disponible en una increíble gama de colores , incluyendo los gráficos oficiales Valentino Rossi réplica , que se pueden personalizar con adicionales Viseras , en Polarizados , Iridium y arco iris de colores. Si usted desea actualizar a una más ligera y más resistente de fibra de vidrio cubierta exterior del K-4 EVO sería el yelmo de la elección.', 'img/products/2014-08-23-15-08-32-UNa97RbHXiWHK-', 'img/products/img-lista/2014-08-23-15-08-32-tFyki0XAyd8eF-', 'img/products/img-lista/2014-08-23-15-08-32-6ftxl0hj7MbiR-', NULL, NULL, 1, '2014-08-23', '2014-08-24'),
(159, 1, 11, 'AGV K3 ROSSI ICON', 'agv_k3_rossi_icon', 'El K-3 es uno de los clásicos más vendidos cascos de AGV. Su diseño deriva de la parte superior de la gama GP-Tech cascos, con lo que la mayoría de las últimas características avanzadas para este producto con un precio razonable. El casco de inspiración-line carrera maximiza el flujo de aire minimizando los niveles de ruido, mientras que el alerón de nuevo asegura la estabilidad a altas velocidades. El sistema de ventilación dispone de tres tomas frontales, y seis extractores posteriores y laterales, mientras que un protector de viento barbilla evitar turbulencias en el interior del casco.\r\n\r\nEl K-3 está disponible en una increíble gama de colores , incluyendo los gráficos oficiales Valentino Rossi réplica , que se pueden personalizar con adicionales Viseras , en Polarizados , Iridium y arco iris de colores.\r\n\r\nCon el fin de actualizar a una más ligera y más resistente compuesto de fibra de cáscara externa puede buscar la AGV K-4 EVO ', 'img/products/2014-08-23-15-08-07-9gP63UfOLKZ6m-', 'img/products/img-lista/2014-08-23-15-08-07-0XbpDF6JDilsu-', 'img/products/img-lista/2014-08-23-15-08-07-WxgubQHDXGbZ1-', NULL, NULL, 1, '2014-08-23', '2014-08-24'),
(160, 1, 11, 'Botas Cartepillar', 'botas_cartepillar', 'Botas Cartepillar Cafe 15933', 'img/products/2014-08-25-16-08-34-nlR2vW0S2AYZT-', NULL, NULL, NULL, NULL, 1, '2014-08-25', '2014-08-25'),
(161, 1, 11, 'Botas Caterpillar', 'botas_caterpillar', 'Bota Caterpillar Amarilla 15830', 'img/products/2014-08-25-16-08-22-Q5ucb1G6h5ROA-', NULL, NULL, NULL, NULL, 1, '2014-08-25', '2014-08-25'),
(162, 1, 11, 'Botas Caterpillar', 'botas_caterpillar', 'Bota Caterpillar Vast Mid 15832', 'img/products/2014-08-25-16-08-16-XHgEb0QYxjigS-', NULL, NULL, NULL, NULL, 1, '2014-08-25', '2014-08-25'),
(163, 1, 11, 'Botas Caterpillar', 'botas_caterpillar', 'Bota Caterpillar Vast Mid 15833', 'img/products/2014-08-25-16-08-30-yd2vO4CxmFxLJ-', NULL, NULL, NULL, NULL, 1, '2014-08-25', '2014-08-25'),
(164, 1, 11, 'Botas Caterpillar', 'botas_caterpillar', 'Bota Caterpillar 15932', 'img/products/2014-08-25-16-08-33-NRI1dI2kkX49l-', NULL, NULL, NULL, NULL, 1, '2014-08-25', '2014-08-25'),
(165, 1, 11, 'Botas Caterpillar', 'botas_caterpillar', 'Bota Caterpillar 15553', 'img/products/2014-08-25-16-08-40-voVPeObaKh5NN-', NULL, NULL, NULL, NULL, 1, '2014-08-25', '2014-08-25'),
(166, 1, 11, 'Botas Caterpillar', 'botas_caterpillar', 'Bota Caterpillar 15565', 'img/products/2014-08-25-16-08-53-Xc2gbjDlFpCGH-', NULL, NULL, NULL, NULL, 1, '2014-08-25', '2014-08-25'),
(167, 1, 11, 'Botas Caterpillar', 'botas_caterpillar', 'Bota Caterpillar 15562', 'img/products/2014-08-25-16-08-49-eFIHoQzEpVChq-', NULL, NULL, NULL, NULL, 1, '2014-08-25', '2014-08-25'),
(168, 1, 11, 'Botas Caterpillar', 'botas_caterpillar', 'Bota Caterpillar Lona Cafe 15571', 'img/products/2014-08-25-16-08-44-ekjDEZ1IG7DOB-', NULL, NULL, NULL, NULL, 1, '2014-08-25', '2014-08-25'),
(169, 1, 11, 'Botas Caterpillar', 'botas_caterpillar', 'Bota Caterpillar 15561', 'img/products/2014-08-25-16-08-46-rlke71TBUgC0e-', NULL, NULL, NULL, NULL, 1, '2014-08-25', '2014-08-25'),
(170, 1, 11, 'Botas Caterpillar', 'botas_caterpillar', 'Bota Caterpillar 15495', 'img/products/2014-08-25-16-08-08-QaNmv4vB1vS5B-', NULL, NULL, NULL, NULL, 1, '2014-08-25', '2014-08-25'),
(171, 5, 17, 'FUNDAMENTACION  MEDIOS TECNOLOGICOS', 'fundamentacion_medios_tecnologicos', 'Proporcionar los conceptos básicos indispensables para desempeñar las funciones de un operador de medios Tecnológicos en las áreas de seguridad electrónica de acuerdo a los adelantos tecnológicos del área. 100 Horas ', 'img/products/2014-08-25-21-08-26-9TNgxFckoaT73-', NULL, NULL, NULL, NULL, 1, '2014-08-25', '2014-08-25'),
(172, 2, 4, 'REDUCCION DE MEDIDAS', 'reduccion_de_medidas', 'Cavitación, Vacumterápia, Mesoterápia, termoterapia, crioterapia, masajes reductores, gimnasia pasiva, ultra sonido, auriculoterapia, asesoria nutricional, recomendaciones en casa.', 'img/products/2014-08-27-21-08-22-vWRPsNVccoxTr-', NULL, NULL, NULL, NULL, 1, '2014-08-27', '2014-08-27'),
(173, 1, 11, 'Zapatos Nike', 'zapatos_nike', 'Zapato Nike Running Fitsole Negro Verde 16165', 'img/products/2014-09-06-22-09-07-9QJ7bFKLqBdq2-', NULL, NULL, NULL, NULL, 1, '2014-09-06', '2014-09-06'),
(174, 1, 11, 'Zapatos Sperry Top Sider', 'zapatos_sperry_top_sider', 'Zapato Casual Cyclone Cafe', 'img/products/2014-10-22-22-10-57-H4JNIFd3MFCCb.jpg', NULL, NULL, NULL, NULL, 1, '2014-10-22', '2014-10-22'),
(175, 4, 23, 'Consola Playstation 4 500gb + 1 Control Dualshock 4 Original', 'consola_playstation_4_500gb__1_control_dualshock_4_original', 'Playstation 4 original sellado de fabrica', 'img/products/2014-11-02-03-11-41-V29EbXfFhnMy1.jpg', 'img/products/img-lista/2014-11-02-03-11-41-TcpZaMtfCSvCA.jpg', NULL, NULL, NULL, 1, '2014-11-02', '2014-11-02'),
(176, 4, 23, 'Fifa 15 Ps4 Multilenguaje Español Latino Formato Físico', 'fifa_15_ps4_multilenguaje_espanol_latino_formato_fisico', 'FIFA 15 para play 4 original', 'img/products/2014-11-02-03-11-00-81fC01V5QWF14.jpg', NULL, NULL, NULL, NULL, 1, '2014-11-02', '2014-11-02'),
(177, 7, 24, 'Chocolatina hershey', 'chocolatina_hershey', 'deliciosa chocolatina blanca ', 'img/products/2014-11-05-14-11-17-1M9A3mxvtz7DK.jpg', NULL, NULL, NULL, NULL, 1, '2014-11-05', '2014-11-05');

-- --------------------------------------------------------

--
-- Table structure for table `promociones`
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci AUTO_INCREMENT=16 ;

--
-- Dumping data for table `promociones`
--

INSERT INTO `promociones` (`id`, `sede_id`, `categoria_id`, `titulo`, `titulo_seo`, `sin_descuento`, `con_descuento`, `porcentaje`, `descripcion_corta`, `descripcion_larga`, `img`, `estado`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 'Hamburguesa especial', 'Hamburguesa-especial', 18000, 14000, 22, 'Promocion especial en nuestra mercagan junior', 'Aqui se espesifican las condiciones y restricciones de la promocion', 'img/promociones/promo1.jpg', 1, '2014-05-02', '2014-06-15'),
(2, 1, 3, 'perro loco ', 'perro-loco', 14000, 7000, 50, 'esta es la descripción corta', 'esta es la descripcion larga', 'img/promociones/promo2.jpg', 1, '2014-05-02', '2014-06-30'),
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
(14, 1, 3, 'hamburguesa junior', 'hamburguesa-junior', 16900, 12000, 29, 'promo especial de nuestra mercagan junior', 'no te la pierdas', 'img/promociones/2014-06-03-01-LU0ISRddHKUGZ-blog-item-2.png', 1, '2014-06-03', '2014-06-03'),
(15, 16, 4, 'COMPUTADOR SUPER ECONO', 'MIPRIMERAPROMO', 100000, 50000, 50, 'COMPUTADOR ECO', 'COMPRALO YA', 'img/promociones/2014-06-07-22-38eHDuhsjD7wf-COMPU.jpeg', 1, '2014-06-07', '2014-06-07');

-- --------------------------------------------------------

--
-- Table structure for table `sectores`
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
-- Dumping data for table `sectores`
--

INSERT INTO `sectores` (`id`, `nom_sector`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Comidas', 'img/sectores/comidas.jpg', '0000-00-00', '0000-00-00'),
(2, 'Ropa', 'img/sectores/ropa.jpg', '0000-00-00', '0000-00-00'),
(3, 'Confecciones', 'img/sectores/confecciones.jpg', '0000-00-00', '0000-00-00'),
(4, 'Tecnologia', 'img/sectores/tecno.jpg', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `sedes`
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci AUTO_INCREMENT=37 ;

--
-- Dumping data for table `sedes`
--

INSERT INTO `sedes` (`id`, `empresa_id`, `ciudad_id`, `direccion`, `telefono`, `nombre_publico`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'calle 45 # 27-38', '6542020', 'mercagan-cabecera', 7.118037, -73.114677, '2014-04-30', '2014-06-15'),
(3, 1, 2, 'calle 54 # 33-45', '6827000', 'mercagan-centro', 7.111098, -73.109782, '0000-00-00', '2014-05-12'),
(4, 15, 1, 'ave. las americas # 113-85 ', '2887767', 'MayaTest777', 4.630623, -74.1427, '2014-05-01', '2014-05-15'),
(6, 2, 1, 'car 14 # 23-45', '6827000', 'jim-sports', 4.698643, -74.030029, '2014-05-03', '2014-05-20'),
(8, 1, 2, 'carrera 22 # 13-45', '6345372', 'mercagan-lagos', 7.134273, -73.124725, '2014-05-11', '2014-05-12'),
(10, 15, 2, 'carrera 24 # 19-76', '2887765', 'maya-bucaramanga', 7.130135, -73.121561, '2014-05-12', '2014-05-12'),
(12, 21, 2, 'carrera 27 # 41-45', '6998765', 'tecnologia', 7.11881, -73.115484, '2014-05-16', '2014-05-16'),
(13, 22, 2, 'carrera 24 # 20-35', '3130828036', 'dulcecitos', 7.128869, -73.121896, '2014-05-20', '2014-05-20'),
(14, 23, 2, 'carrera 24 # 18-76', '2887766', 'todo-cels', 7.13022, -73.122221, '2014-05-23', '2014-05-23'),
(15, 1, 2, 'calle 9 # 23-38', '76798827', 'sede4', 7.138017, -73.124326, '2014-06-07', '2014-06-07'),
(16, 25, 2, 'cll 22 n 21-37', '6322005', 'MegalopolisCompany', 7.127544, -73.121339, '2014-06-07', '2014-06-07'),
(17, 26, 2, 'calle 9 # 23-45', '6808965', 'bandslam-Store', 7.138066, -73.124265, '2014-07-24', '2014-07-24'),
(18, 27, 2, 'cll 22 n 21-34', '6322005', 'tecladospc-sede1', 7.127848, -73.119705, '2014-07-25', '2014-07-25'),
(19, 28, 2, 'CL 36 29 - 29', '6454692 - 6455450', 'LIBRERIA-AURA-MARIA-MONCADA', 7.122744, -73.114248, '2014-07-30', '2014-07-30'),
(20, 29, 2, 'C COMERCIAL CABECERA IV ETAPA LOCAL 301-2', '6960986', 'SPORT-CENTER', 7.115056, -73.108941, '2014-07-30', '2014-07-30'),
(21, 29, 2, 'C COMERCIAL EL PUENTE LOCAL 155', '7243588', 'SPORT-CENTER', 6.559167, -73.135, '2014-07-30', '2014-07-30'),
(22, 30, 2, 'carrera 26 # 29-04 Antonia Santos', '6305401', 'AGROFARBEF-BUCARAMANGA', 7.125947, -73.120295, '2014-07-31', '2014-07-31'),
(23, 31, 2, 'carrera 24 # 18-76', '6345674', 'mundo-xbox', 7.13022, -73.122221, '2014-08-01', '2014-08-01'),
(24, 32, 2, 'CL 20 # 24 - 27 APTO 802', '6895807 - 3178243878', 'Stetik-Line-San-Francisco', 7.129224, -73.12175, '2014-08-02', '2014-08-02'),
(25, 33, 2, 'Carrera 17 58-15 Barrio Ricaute', '3138380406', 'Nutritotal-Coach', 7.11331, -73.120468, '2014-08-04', '2014-08-04'),
(26, 34, 2, 'CRA 30 N 30a-05 barrio La Aurora', '-7- 6350050', 'ACADEMIA-DE-SEGURIDAD-ATS', 7.127057, -73.116272, '2014-08-04', '2014-08-04'),
(27, 35, 2, 'Carrera 35 # 52-28 ', '6-960305', 'Sentio-Solvo-Bucaramanga', 7.112938, -73.109143, '2014-08-05', '2014-08-05'),
(28, 36, 2, 'Carrera 21 # 21-45', '6481166', 'San-Francisco', 7.127438, -73.124241, '2014-08-05', '2014-08-05'),
(29, 37, 2, 'carrera  23  n   35   66   local   205', '6320192  645891', 'SONATA-BUCARAMANGA', 7.11331, -73.120468, '2014-08-06', '2014-08-06'),
(30, 38, 2, 'Calle 20 # 19 - 19', '6481166', 'San-Francisco', 7.128397, -73.126034, '2014-08-09', '2014-08-09'),
(31, 44, 2, 'Calle 35 # 24-17', '3152175967', 'Central', 7.121248, -73.119263, '2014-08-11', '2014-08-11'),
(32, 45, 2, 'Calle 61 no 7 w 44', '3163399147', 'La-Pasteleria-Bucaramanga', 7.102926, -73.124226, '2014-08-14', '2014-08-14'),
(33, 46, 2, 'cr 33 41 - 24', '313325186', 'Todooptica-Bucaramanga', 7.127601, -73.109131, '2014-08-14', '2014-08-14'),
(34, 47, 2, 'CARRERA 33 # 41-10', '3214286967- 3004042100', 'BELCO-CABECERA', 7.121766, -73.111985, '2014-08-16', '2014-08-16'),
(35, 48, 2, 'Carrera 21 # 41-39', '6705857', 'Zona-Biker-Bucaramanga', 7.133427, -73.125491, '2014-08-19', '2014-08-19'),
(36, 50, 2, 'Cll 22 n 21 37', '3015673205', 'DaleDetalles', 7.127544, -73.121339, '2014-11-05', '2014-11-05');

-- --------------------------------------------------------

--
-- Table structure for table `subcategorias`
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci AUTO_INCREMENT=25 ;

--
-- Dumping data for table `subcategorias`
--

INSERT INTO `subcategorias` (`id`, `categoria_id`, `nombre_sub`, `created_at`, `updated_at`) VALUES
(1, 1, 'Bolsos y carteras', '0000-00-00', '2014-09-25'),
(2, 1, 'Ropa femenina', '0000-00-00', '0000-00-00'),
(3, 2, 'Cuidado del cabello', '0000-00-00', '0000-00-00'),
(4, 2, 'Cuidado del cuerpo', '0000-00-00', '2014-08-24'),
(5, 3, 'Comidas rapidas', '0000-00-00', '0000-00-00'),
(6, 3, 'Restaurantes gourmet', '0000-00-00', '0000-00-00'),
(7, 4, 'Computadores', '0000-00-00', '0000-00-00'),
(8, 4, 'Celulares', '0000-00-00', '0000-00-00'),
(9, 3, 'Pasteleria', '0000-00-00', '2014-08-19'),
(10, 0, '', '0000-00-00', '0000-00-00'),
(11, 1, 'Ropa y articulos deportivos ', '0000-00-00', '2014-09-25'),
(12, 4, 'Tablets', '2014-08-10', '2014-08-10'),
(13, 1, 'Ropa masculina', '2014-08-10', '2014-08-10'),
(14, 1, 'Ropa para niños', '2014-08-10', '2014-08-10'),
(15, 6, 'Libros', '2014-08-10', '2014-08-10'),
(16, 6, 'Revistas', '2014-08-10', '2014-08-10'),
(17, 5, 'Seguridad', '2014-08-11', '2014-08-11'),
(18, 6, 'Manga', '2014-08-11', '2014-08-11'),
(19, 4, 'Relojes Digitales', '2014-08-14', '2014-08-14'),
(20, 5, 'Escolta', '2014-08-20', '2014-08-20'),
(21, 2, 'Ocular', '2014-09-25', '2014-09-25'),
(22, 6, 'Libros religiosos', '2014-09-25', '2014-09-25'),
(23, 4, 'Videojuegos', '2014-09-25', '2014-09-25'),
(24, 7, 'Regalos', '2014-11-05', '2014-11-05');

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE IF NOT EXISTS `tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `producto` int(11) NOT NULL,
  `etiqueta` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=476 ;

--
-- Dumping data for table `tag`
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
(31, 31, 'prueba', '2014-05-22 04:54:53', '2014-05-22 04:54:53'),
(32, 31, 'producto', '2014-05-22 04:54:53', '2014-05-22 04:54:53'),
(33, 31, '3', '2014-05-22 04:54:53', '2014-05-22 04:54:53'),
(34, 32, 'commida rapida', '2014-05-22 22:15:51', '2014-05-22 22:15:51'),
(35, 32, 'perro americano', '2014-05-22 22:15:51', '2014-05-22 22:15:51'),
(36, 33, 'ios7', '2014-05-23 21:08:57', '2014-05-23 21:08:57'),
(37, 34, 'ios7', '2014-05-23 21:08:57', '2014-05-23 21:08:57'),
(38, 33, 'ipone', '2014-05-23 21:09:38', '2014-05-23 21:09:38'),
(39, 34, 'ipone', '2014-05-23 21:09:38', '2014-05-23 21:09:38'),
(40, 34, '5c', '2014-05-23 21:09:43', '2014-05-23 21:09:43'),
(41, 35, 'iphone', '2014-05-23 21:10:14', '2014-05-23 21:10:14'),
(42, 35, 'ios', '2014-05-23 21:10:14', '2014-05-23 21:10:14'),
(43, 35, 'apple', '2014-05-23 21:10:14', '2014-05-23 21:10:14'),
(44, 36, 'samsung', '2014-05-23 21:14:51', '2014-05-23 21:14:51'),
(45, 36, 'galaxy', '2014-05-23 21:14:51', '2014-05-23 21:14:51'),
(46, 36, 's4', '2014-05-23 21:14:51', '2014-05-23 21:14:51'),
(47, 37, 'carne', '2014-05-29 03:14:56', '2014-05-29 03:14:56'),
(48, 37, 'parrilla', '2014-05-29 03:14:56', '2014-05-29 03:14:56'),
(49, 40, 'hamburguesas', '2014-06-03 01:29:40', '2014-06-03 01:29:40'),
(50, 41, 'hamburguesas', '2014-06-03 01:35:17', '2014-06-03 01:35:17'),
(51, 42, 'hamburguesas', '2014-06-03 01:45:31', '2014-06-03 01:45:31'),
(52, 42, 'carnes', '2014-06-03 01:45:31', '2014-06-03 01:45:31'),
(53, 43, 'TORTAS', '2014-06-04 03:41:47', '2014-06-04 03:41:47'),
(54, 43, 'OREO', '2014-06-04 03:41:47', '2014-06-04 03:41:47'),
(55, 43, 'POSTRE', '2014-06-04 03:41:47', '2014-06-04 03:41:47'),
(56, 44, 'postre', '2014-06-04 03:44:49', '2014-06-04 03:44:49'),
(57, 44, 'fresa', '2014-06-04 03:44:49', '2014-06-04 03:44:49'),
(58, 44, 'cremas', '2014-06-04 03:44:49', '2014-06-04 03:44:49'),
(59, 45, 'postres', '2014-06-04 03:47:47', '2014-06-04 03:47:47'),
(60, 45, '3 leches', '2014-06-04 03:47:47', '2014-06-04 03:47:47'),
(61, 45, 'cremas', '2014-06-04 03:47:47', '2014-06-04 03:47:47'),
(62, 46, 'box', '2014-06-04 03:55:33', '2014-06-04 03:55:33'),
(63, 46, 'deporte', '2014-06-04 03:55:33', '2014-06-04 03:55:33'),
(64, 47, 'camiseta', '2014-06-04 04:00:57', '2014-06-04 04:00:57'),
(65, 47, 'colombia', '2014-06-04 04:00:57', '2014-06-04 04:00:57'),
(66, 47, 'mujer', '2014-06-04 04:00:57', '2014-06-04 04:00:57'),
(67, 48, 'cristiano ronaldo', '2014-06-04 04:05:32', '2014-06-04 04:05:32'),
(68, 48, 'real madrid', '2014-06-04 04:05:32', '2014-06-04 04:05:32'),
(69, 48, 'futbol', '2014-06-04 04:05:32', '2014-06-04 04:05:32'),
(70, 49, 'camiseta', '2014-06-05 21:46:43', '2014-06-05 21:46:43'),
(71, 49, 'colombia', '2014-06-05 21:46:43', '2014-06-05 21:46:43'),
(72, 49, 'mundial', '2014-06-05 21:46:43', '2014-06-05 21:46:43'),
(73, 50, 'camiseta', '2014-06-05 21:50:12', '2014-06-05 21:50:12'),
(74, 50, 'mundial', '2014-06-05 21:50:12', '2014-06-05 21:50:12'),
(75, 50, 'italai', '2014-06-05 21:50:12', '2014-06-05 21:50:12'),
(76, 51, 'real madrid', '2014-06-05 21:53:19', '2014-06-05 21:53:19'),
(77, 51, 'furbol', '2014-06-05 21:53:19', '2014-06-05 21:53:19'),
(78, 51, '5 minutos', '2014-06-05 21:53:19', '2014-06-05 21:53:19'),
(79, 52, 'camiseta', '2014-06-05 22:01:05', '2014-06-05 22:01:05'),
(80, 52, 'colombia', '2014-06-05 22:01:05', '2014-06-05 22:01:05'),
(81, 52, 'larga', '2014-06-05 22:01:05', '2014-06-05 22:01:05'),
(82, 53, 'colombia', '2014-06-05 22:03:22', '2014-06-05 22:03:22'),
(83, 53, '2014', '2014-06-05 22:03:22', '2014-06-05 22:03:22'),
(84, 53, 'mujer', '2014-06-05 22:03:22', '2014-06-05 22:03:22'),
(85, 54, 'zapatos', '2014-06-07 04:34:26', '2014-06-07 04:34:26'),
(86, 54, 'deportes', '2014-06-07 04:34:26', '2014-06-07 04:34:26'),
(87, 55, 'Catalogos', '2014-06-07 16:23:25', '2014-06-07 16:23:25'),
(88, 56, 'PORTATIL', '2014-06-07 22:33:34', '2014-06-07 22:33:34'),
(89, 56, 'NEGRO', '2014-06-07 22:33:34', '2014-06-07 22:33:34'),
(90, 56, 'PC', '2014-06-07 22:33:34', '2014-06-07 22:33:34'),
(91, 56, 'COMPUTADOR', '2014-06-07 22:33:34', '2014-06-07 22:33:34'),
(92, 57, 'barsa', '2014-06-11 01:17:55', '2014-06-11 01:17:55'),
(93, 57, 'camiseta', '2014-06-11 01:17:55', '2014-06-11 01:17:55'),
(94, 58, 'camisetas', '2014-06-11 16:10:24', '2014-06-11 16:10:24'),
(95, 58, 'deporte', '2014-06-11 16:10:24', '2014-06-11 16:10:24'),
(96, 59, 'musica', '2014-07-24 21:27:16', '2014-07-24 21:27:16'),
(97, 59, 'guitarras', '2014-07-24 21:27:16', '2014-07-24 21:27:16'),
(98, 60, '', '2014-07-24 21:43:13', '2014-07-24 21:43:13'),
(99, 61, 'teclado', '2014-07-25 13:50:50', '2014-07-25 13:50:50'),
(100, 61, 'electronico', '2014-07-25 13:50:50', '2014-07-25 13:50:50'),
(101, 62, 'apple', '2014-07-28 01:22:15', '2014-07-28 01:22:15'),
(102, 62, 'imac', '2014-07-28 01:22:15', '2014-07-28 01:22:15'),
(103, 62, 'computadores', '2014-07-28 01:22:15', '2014-07-28 01:22:15'),
(104, 63, 'apple', '2014-07-28 01:26:23', '2014-07-28 01:26:23'),
(105, 63, 'ipad', '2014-07-28 01:26:23', '2014-07-28 01:26:23'),
(106, 63, '4g', '2014-07-28 01:26:23', '2014-07-28 01:26:23'),
(107, 64, 'equipaciones', '2014-07-28 14:54:40', '2014-07-28 14:54:40'),
(108, 64, 'realmadrid', '2014-07-28 14:54:40', '2014-07-28 14:54:40'),
(109, 64, 'deportes', '2014-07-28 14:54:40', '2014-07-28 14:54:40'),
(110, 65, 'deportivo', '2014-07-30 13:58:59', '2014-07-30 13:58:59'),
(111, 65, 'ropa', '2014-07-30 13:58:59', '2014-07-30 13:58:59'),
(112, 65, 'fútbol', '2014-07-30 13:58:59', '2014-07-30 13:58:59'),
(113, 66, 'libros', '2014-07-30 15:46:55', '2014-07-30 15:46:55'),
(114, 66, 'oración', '2014-07-30 15:46:55', '2014-07-30 15:46:55'),
(115, 66, 'Echeverry', '2014-07-30 15:46:55', '2014-07-30 15:46:55'),
(116, 66, 'católico', '2014-07-30 15:46:55', '2014-07-30 15:46:55'),
(117, 66, 'ocasión', '2014-07-30 15:46:55', '2014-07-30 15:46:55'),
(118, 67, '', '2014-07-30 16:59:53', '2014-07-30 16:59:53'),
(119, 68, 'real madrid', '2014-07-30 19:57:17', '2014-07-30 19:57:17'),
(120, 69, 'libros', '2014-07-30 20:49:13', '2014-07-30 20:49:13'),
(121, 70, 'FROGSKINS', '2014-07-30 20:54:00', '2014-07-30 20:54:00'),
(122, 70, 'VALENTINO ROSSI', '2014-07-30 20:54:00', '2014-07-30 20:54:00'),
(123, 71, 'gafas', '2014-07-30 22:31:15', '2014-07-30 22:31:15'),
(124, 72, 'MEZCLADORA', '2014-07-31 20:52:57', '2014-07-31 20:52:57'),
(125, 72, 'RANA', '2014-07-31 20:52:57', '2014-07-31 20:52:57'),
(126, 72, 'APISONADOR', '2014-07-31 20:52:57', '2014-07-31 20:52:57'),
(127, 72, 'SALTARIN', '2014-07-31 20:52:57', '2014-07-31 20:52:57'),
(128, 72, 'CORTADORA DE CONCRETO', '2014-07-31 20:52:57', '2014-07-31 20:52:57'),
(129, 72, 'TROMPO', '2014-07-31 20:52:57', '2014-07-31 20:52:57'),
(130, 72, 'PLACA VIBROCOMPACTADORA', '2014-07-31 20:52:57', '2014-07-31 20:52:57'),
(131, 72, 'VIBRADOR DE CONCRETO', '2014-07-31 20:52:57', '2014-07-31 20:52:57'),
(132, 72, 'ALLANADORAS', '2014-07-31 20:52:57', '2014-07-31 20:52:57'),
(133, 72, 'REGLA VIBRATORIA', '2014-07-31 20:52:57', '2014-07-31 20:52:57'),
(134, 72, 'VIBRADOR ELECTRICO', '2014-07-31 20:52:57', '2014-07-31 20:52:57'),
(135, 72, 'CORTADORA DE PISO', '2014-07-31 20:52:57', '2014-07-31 20:52:57'),
(136, 73, 'ps4', '2014-08-01 08:18:34', '2014-08-01 08:18:34'),
(137, 73, 'juegos', '2014-08-01 08:18:34', '2014-08-01 08:18:34'),
(138, 74, 'ropa', '2014-08-02 01:23:52', '2014-08-02 01:23:52'),
(139, 75, 'facial', '2014-08-02 02:57:18', '2014-08-02 02:57:18'),
(140, 75, 'mascarilla', '2014-08-02 02:57:18', '2014-08-02 02:57:18'),
(141, 75, 'rostro', '2014-08-02 02:57:18', '2014-08-02 02:57:18'),
(142, 75, 'piel', '2014-08-02 02:57:18', '2014-08-02 02:57:18'),
(143, 75, 'cutanea', '2014-08-02 02:57:18', '2014-08-02 02:57:18'),
(144, 76, 'exfoliación', '2014-08-04 00:53:45', '2014-08-04 00:53:45'),
(145, 76, 'extracción', '2014-08-04 00:53:45', '2014-08-04 00:53:45'),
(146, 76, 'vapor', '2014-08-04 00:53:45', '2014-08-04 00:53:45'),
(147, 76, 'ozono', '2014-08-04 00:53:45', '2014-08-04 00:53:45'),
(148, 76, 'mascarilla', '2014-08-04 00:53:45', '2014-08-04 00:53:45'),
(149, 76, 'cutis', '2014-08-04 00:53:45', '2014-08-04 00:53:45'),
(150, 76, 'acne', '2014-08-04 00:53:45', '2014-08-04 00:53:45'),
(151, 76, 'alta frecuencia', '2014-08-04 00:53:45', '2014-08-04 00:53:45'),
(152, 77, 'piel', '2014-08-04 01:05:17', '2014-08-04 01:05:17'),
(153, 77, 'antiage', '2014-08-04 01:05:17', '2014-08-04 01:05:17'),
(154, 77, 'peeling', '2014-08-04 01:05:17', '2014-08-04 01:05:17'),
(155, 77, 'ionización', '2014-08-04 01:05:17', '2014-08-04 01:05:17'),
(156, 77, 'nu-skin', '2014-08-04 01:05:17', '2014-08-04 01:05:17'),
(157, 77, 'mascarilla', '2014-08-04 01:05:17', '2014-08-04 01:05:17'),
(158, 77, 'hidratante.', '2014-08-04 01:05:17', '2014-08-04 01:05:17'),
(159, 78, 'peeling', '2014-08-04 01:14:03', '2014-08-04 01:14:03'),
(160, 78, 'sesion', '2014-08-04 01:14:03', '2014-08-04 01:14:03'),
(161, 78, 'AHAS', '2014-08-04 01:14:03', '2014-08-04 01:14:03'),
(162, 78, 'alfahidroxiacidos', '2014-08-04 01:14:03', '2014-08-04 01:14:03'),
(163, 78, 'pantalla solar', '2014-08-04 01:14:03', '2014-08-04 01:14:03'),
(164, 78, 'mascarilla', '2014-08-04 01:14:03', '2014-08-04 01:14:03'),
(165, 78, 'calmante', '2014-08-04 01:14:03', '2014-08-04 01:14:03'),
(166, 79, 'plasma', '2014-08-04 01:23:58', '2014-08-04 01:23:58'),
(167, 79, 'plaquetas', '2014-08-04 01:23:58', '2014-08-04 01:23:58'),
(168, 79, 'enriquecido', '2014-08-04 01:23:58', '2014-08-04 01:23:58'),
(169, 79, 'esterilización', '2014-08-04 01:23:58', '2014-08-04 01:23:58'),
(170, 79, 'colágeno', '2014-08-04 01:23:58', '2014-08-04 01:23:58'),
(171, 79, 'estimulación', '2014-08-04 01:23:58', '2014-08-04 01:23:58'),
(172, 79, 'mesoterápia', '2014-08-04 01:23:58', '2014-08-04 01:23:58'),
(173, 79, 'calmante', '2014-08-04 01:23:58', '2014-08-04 01:23:58'),
(174, 79, 'hhidroreparadoraa', '2014-08-04 01:23:58', '2014-08-04 01:23:58'),
(175, 80, '', '2014-08-04 16:46:49', '2014-08-04 16:46:49'),
(176, 81, 'seguridad', '2014-08-04 20:56:14', '2014-08-04 20:56:14'),
(177, 81, 'capacitación', '2014-08-04 20:56:14', '2014-08-04 20:56:14'),
(178, 81, 'vigilancia', '2014-08-04 20:56:14', '2014-08-04 20:56:14'),
(179, 82, 'peeling', '2014-08-05 02:31:58', '2014-08-05 02:31:58'),
(180, 82, 'dermoabrasion', '2014-08-05 02:31:58', '2014-08-05 02:31:58'),
(181, 82, 'microdermoabrasion', '2014-08-05 02:31:58', '2014-08-05 02:31:58'),
(182, 82, 'calmante', '2014-08-05 02:31:58', '2014-08-05 02:31:58'),
(183, 82, 'hidroreparadora', '2014-08-05 02:31:58', '2014-08-05 02:31:58'),
(184, 82, 'pantalla solar', '2014-08-05 02:31:58', '2014-08-05 02:31:58'),
(185, 83, 'tónico', '2014-08-05 02:37:03', '2014-08-05 02:37:03'),
(186, 83, 'altafrecuencia', '2014-08-05 02:37:03', '2014-08-05 02:37:03'),
(187, 83, 'mascarilla hidratante', '2014-08-05 02:37:03', '2014-08-05 02:37:03'),
(188, 83, 'colágeno', '2014-08-05 02:37:03', '2014-08-05 02:37:03'),
(189, 83, 'parafina', '2014-08-05 02:37:03', '2014-08-05 02:37:03'),
(190, 83, 'hidratante', '2014-08-05 02:37:03', '2014-08-05 02:37:03'),
(191, 83, 'protector solar', '2014-08-05 02:37:03', '2014-08-05 02:37:03'),
(192, 84, 'peeling', '2014-08-05 02:42:43', '2014-08-05 02:42:43'),
(193, 84, 'astringente', '2014-08-05 02:42:43', '2014-08-05 02:42:43'),
(194, 84, 'desincrustante', '2014-08-05 02:42:43', '2014-08-05 02:42:43'),
(195, 84, 'vapor-ozono', '2014-08-05 02:42:43', '2014-08-05 02:42:43'),
(196, 84, 'extracción', '2014-08-05 02:42:43', '2014-08-05 02:42:43'),
(197, 84, 'saponificación', '2014-08-05 02:42:43', '2014-08-05 02:42:43'),
(198, 84, 'ampolla', '2014-08-05 02:42:43', '2014-08-05 02:42:43'),
(199, 84, 'piel grasa', '2014-08-05 02:42:43', '2014-08-05 02:42:43'),
(200, 84, 'barritos', '2014-08-05 02:42:43', '2014-08-05 02:42:43'),
(201, 84, 'comedones', '2014-08-05 02:42:43', '2014-08-05 02:42:43'),
(202, 84, 'alta frecuencia', '2014-08-05 02:42:43', '2014-08-05 02:42:43'),
(203, 84, 'drenaje', '2014-08-05 02:42:43', '2014-08-05 02:42:43'),
(204, 85, 'ionizar', '2014-08-05 02:48:07', '2014-08-05 02:48:07'),
(205, 85, 'reafirmante', '2014-08-05 02:48:07', '2014-08-05 02:48:07'),
(206, 85, 'gimnasia pasiva', '2014-08-05 02:48:07', '2014-08-05 02:48:07'),
(207, 85, 'vacun', '2014-08-05 02:48:07', '2014-08-05 02:48:07'),
(208, 85, 'masaje tonificante', '2014-08-05 02:48:07', '2014-08-05 02:48:07'),
(209, 85, 'mascarilla', '2014-08-05 02:48:07', '2014-08-05 02:48:07'),
(210, 86, 'reducción', '2014-08-05 02:58:41', '2014-08-05 02:58:41'),
(211, 86, 'masaje reductor', '2014-08-05 02:58:41', '2014-08-05 02:58:41'),
(212, 86, 'manta térmica', '2014-08-05 02:58:41', '2014-08-05 02:58:41'),
(213, 86, 'vacumterápia', '2014-08-05 02:58:41', '2014-08-05 02:58:41'),
(214, 86, 'gimnasia pasiva', '2014-08-05 02:58:41', '2014-08-05 02:58:41'),
(215, 86, 'cavitación', '2014-08-05 02:58:41', '2014-08-05 02:58:41'),
(216, 86, 'mesoterápia', '2014-08-05 02:58:41', '2014-08-05 02:58:41'),
(217, 86, 'ultrasonido', '2014-08-05 02:58:41', '2014-08-05 02:58:41'),
(218, 86, 'obesidad', '2014-08-05 02:58:41', '2014-08-05 02:58:41'),
(219, 86, 'sobrepeso', '2014-08-05 02:58:41', '2014-08-05 02:58:41'),
(220, 86, 'nutrición', '2014-08-05 02:58:41', '2014-08-05 02:58:41'),
(221, 86, 'dieta', '2014-08-05 02:58:41', '2014-08-05 02:58:41'),
(222, 86, 'reductor', '2014-08-05 02:58:41', '2014-08-05 02:58:41'),
(223, 87, 'anticelulítico', '2014-08-05 03:04:40', '2014-08-05 03:04:40'),
(224, 87, 'vacum', '2014-08-05 03:04:40', '2014-08-05 03:04:40'),
(225, 87, 'cavitación', '2014-08-05 03:04:40', '2014-08-05 03:04:40'),
(226, 87, 'drenaje linfático', '2014-08-05 03:04:40', '2014-08-05 03:04:40'),
(227, 87, 'ultrasonido', '2014-08-05 03:04:40', '2014-08-05 03:04:40'),
(228, 87, 'asesoramieasesoramiento nutricional.', '2014-08-05 03:04:40', '2014-08-05 03:04:40'),
(229, 88, 'tonificación', '2014-08-05 03:18:52', '2014-08-05 03:18:52'),
(230, 88, 'aumento de gluteos', '2014-08-05 03:18:52', '2014-08-05 03:18:52'),
(231, 88, 'vacumterápia', '2014-08-05 03:18:52', '2014-08-05 03:18:52'),
(232, 88, 'ultrasonido', '2014-08-05 03:18:52', '2014-08-05 03:18:52'),
(233, 88, 'vit c', '2014-08-05 03:18:52', '2014-08-05 03:18:52'),
(234, 88, 'mesoterápia', '2014-08-05 03:18:52', '2014-08-05 03:18:52'),
(235, 88, 'copas delfin', '2014-08-05 03:18:52', '2014-08-05 03:18:52'),
(236, 88, 'gimnasia pasiva', '2014-08-05 03:18:52', '2014-08-05 03:18:52'),
(237, 89, 'gorras', '2014-08-05 20:35:16', '2014-08-05 20:35:16'),
(238, 90, 'accesorios', '2014-08-05 20:38:48', '2014-08-05 20:38:48'),
(239, 90, 'gorras', '2014-08-05 20:38:48', '2014-08-05 20:38:48'),
(240, 90, 'hombres', '2014-08-05 20:38:48', '2014-08-05 20:38:48'),
(241, 90, 'masculino', '2014-08-05 20:38:48', '2014-08-05 20:38:48'),
(242, 91, 'ropadeportiva', '2014-08-05 20:43:47', '2014-08-05 20:43:47'),
(243, 91, 'gorras', '2014-08-05 20:43:47', '2014-08-05 20:43:47'),
(244, 91, 'gorros', '2014-08-05 20:43:47', '2014-08-05 20:43:47'),
(245, 92, 'gorras', '2014-08-05 20:54:40', '2014-08-05 20:54:40'),
(246, 92, 'cachuchas', '2014-08-05 20:54:40', '2014-08-05 20:54:40'),
(247, 93, 'gorras', '2014-08-05 20:58:47', '2014-08-05 20:58:47'),
(248, 93, 'accesorios', '2014-08-05 20:58:47', '2014-08-05 20:58:47'),
(249, 94, '', '2014-08-05 23:26:59', '2014-08-05 23:26:59'),
(250, 95, 'modafemenina', '2014-08-09 17:17:19', '2014-08-09 17:17:19'),
(251, 95, 'vestido', '2014-08-09 17:17:19', '2014-08-09 17:17:19'),
(252, 96, 'blusas', '2014-08-10 17:31:46', '2014-08-10 17:31:46'),
(253, 96, 'ropafemenina', '2014-08-10 17:31:46', '2014-08-10 17:31:46'),
(254, 97, 'blusas', '2014-08-10 17:35:19', '2014-08-10 17:35:19'),
(255, 97, 'camisetas', '2014-08-10 17:35:19', '2014-08-10 17:35:19'),
(256, 97, 'ropaparamujer', '2014-08-10 17:35:19', '2014-08-10 17:35:19'),
(257, 98, 'ropafemenina', '2014-08-10 17:50:16', '2014-08-10 17:50:16'),
(258, 99, '', '2014-08-10 17:51:43', '2014-08-10 17:51:43'),
(259, 100, 'pasteleria', '2014-08-14 00:53:31', '2014-08-14 00:53:31'),
(260, 100, 'cupcakes', '2014-08-14 00:53:31', '2014-08-14 00:53:31'),
(261, 100, 'ponques', '2014-08-14 00:53:31', '2014-08-14 00:53:31'),
(262, 100, 'tortas', '2014-08-14 00:53:31', '2014-08-14 00:53:31'),
(263, 101, 'cupcake', '2014-08-14 03:56:05', '2014-08-14 03:56:05'),
(264, 101, 'tortas', '2014-08-14 03:56:05', '2014-08-14 03:56:05'),
(265, 101, 'ponque', '2014-08-14 03:56:05', '2014-08-14 03:56:05'),
(266, 101, 'pasteleria', '2014-08-14 03:56:05', '2014-08-14 03:56:05'),
(267, 102, 'reloj', '2014-08-14 21:17:01', '2014-08-14 21:17:01'),
(268, 102, 'moda', '2014-08-14 21:17:01', '2014-08-14 21:17:01'),
(269, 102, 'digital', '2014-08-14 21:17:01', '2014-08-14 21:17:01'),
(270, 103, '', '2014-08-14 21:44:47', '2014-08-14 21:44:47'),
(271, 104, 'gafas', '2014-08-14 21:48:16', '2014-08-14 21:48:16'),
(272, 104, 'polarizado', '2014-08-14 21:48:16', '2014-08-14 21:48:16'),
(273, 104, 'lentes', '2014-08-14 21:48:16', '2014-08-14 21:48:16'),
(274, 104, 'opica', '2014-08-14 21:48:16', '2014-08-14 21:48:16'),
(275, 104, 'ray ban', '2014-08-14 21:48:16', '2014-08-14 21:48:16'),
(276, 104, 'lacoste', '2014-08-14 21:48:16', '2014-08-14 21:48:16'),
(277, 104, 'examen', '2014-08-14 21:48:16', '2014-08-14 21:48:16'),
(278, 104, 'transitions', '2014-08-14 21:48:16', '2014-08-14 21:48:16'),
(279, 105, 'tecnologia', '2014-08-14 21:53:57', '2014-08-14 21:53:57'),
(280, 106, 'Oakley', '2014-08-14 22:32:19', '2014-08-14 22:32:19'),
(281, 106, 'Gafas', '2014-08-14 22:32:19', '2014-08-14 22:32:19'),
(282, 106, 'Garage Rock Ferrari', '2014-08-14 22:32:19', '2014-08-14 22:32:19'),
(283, 107, 'Gafas', '2014-08-14 22:35:29', '2014-08-14 22:35:29'),
(284, 107, 'Oakley', '2014-08-14 22:35:29', '2014-08-14 22:35:29'),
(285, 107, 'Caveat', '2014-08-14 22:35:29', '2014-08-14 22:35:29'),
(286, 108, 'Zapatos', '2014-08-14 22:39:35', '2014-08-14 22:39:35'),
(287, 108, 'Polo', '2014-08-14 22:39:35', '2014-08-14 22:39:35'),
(288, 108, 'Faxon Low', '2014-08-14 22:39:35', '2014-08-14 22:39:35'),
(289, 109, 'Zapatos', '2014-08-14 22:42:36', '2014-08-14 22:42:36'),
(290, 109, 'Polo', '2014-08-14 22:42:36', '2014-08-14 22:42:36'),
(291, 109, 'Faxon Low Azul', '2014-08-14 22:42:36', '2014-08-14 22:42:36'),
(292, 110, 'Zapatos', '2014-08-14 22:49:07', '2014-08-14 22:49:07'),
(293, 110, 'Polo', '2014-08-14 22:49:07', '2014-08-14 22:49:07'),
(294, 110, 'Faxon Low Negro Gris', '2014-08-14 22:49:07', '2014-08-14 22:49:07'),
(295, 111, 'Zapatos', '2014-08-14 22:51:20', '2014-08-14 22:51:20'),
(296, 111, 'Polo', '2014-08-14 22:51:20', '2014-08-14 22:51:20'),
(297, 111, 'Faxon Low Rojo', '2014-08-14 22:51:20', '2014-08-14 22:51:20'),
(298, 112, 'Zapatos', '2014-08-14 22:58:33', '2014-08-14 22:58:33'),
(299, 112, 'Polo', '2014-08-14 22:58:33', '2014-08-14 22:58:33'),
(300, 112, 'Faxon Low Azul', '2014-08-14 22:58:33', '2014-08-14 22:58:33'),
(301, 113, 'Zapatos', '2014-08-14 23:00:09', '2014-08-14 23:00:09'),
(302, 113, 'Polo', '2014-08-14 23:00:09', '2014-08-14 23:00:09'),
(303, 113, 'Faxon Low Gris', '2014-08-14 23:00:09', '2014-08-14 23:00:09'),
(304, 114, 'Zapatos', '2014-08-14 23:03:06', '2014-08-14 23:03:06'),
(305, 114, 'Polo', '2014-08-14 23:03:06', '2014-08-14 23:03:06'),
(306, 114, 'Fernando Cafe', '2014-08-14 23:03:06', '2014-08-14 23:03:06'),
(307, 115, 'Zapatos', '2014-08-14 23:04:31', '2014-08-14 23:04:31'),
(308, 115, 'Polo', '2014-08-14 23:04:31', '2014-08-14 23:04:31'),
(309, 115, 'Fernando Naranja', '2014-08-14 23:04:31', '2014-08-14 23:04:31'),
(310, 116, 'Zapatos', '2014-08-14 23:06:00', '2014-08-14 23:06:00'),
(311, 116, 'Polo', '2014-08-14 23:06:00', '2014-08-14 23:06:00'),
(312, 116, 'Fernando Verde', '2014-08-14 23:06:00', '2014-08-14 23:06:00'),
(313, 117, 'Zapatos', '2014-08-14 23:15:26', '2014-08-14 23:15:26'),
(314, 117, 'Polo', '2014-08-14 23:15:26', '2014-08-14 23:15:26'),
(315, 117, 'Fakenham Negro', '2014-08-14 23:15:26', '2014-08-14 23:15:26'),
(316, 118, 'Zapatos', '2014-08-14 23:19:56', '2014-08-14 23:19:56'),
(317, 118, 'Polo', '2014-08-14 23:19:56', '2014-08-14 23:19:56'),
(318, 118, 'Fakenham Azul', '2014-08-14 23:19:56', '2014-08-14 23:19:56'),
(319, 119, 'Zapatos Polo', '2014-08-14 23:40:35', '2014-08-14 23:40:35'),
(320, 119, 'Fakenham Rojo', '2014-08-14 23:40:35', '2014-08-14 23:40:35'),
(321, 120, 'Calvin Klein', '2014-08-14 23:49:26', '2014-08-14 23:49:26'),
(322, 121, 'Calvin Klein', '2014-08-14 23:50:37', '2014-08-14 23:50:37'),
(323, 122, 'Calvin Klein', '2014-08-14 23:52:44', '2014-08-14 23:52:44'),
(324, 123, 'Calvin Klein', '2014-08-14 23:53:56', '2014-08-14 23:53:56'),
(325, 124, 'Calvin Klein', '2014-08-14 23:54:58', '2014-08-14 23:54:58'),
(326, 125, 'Diesel', '2014-08-14 23:59:17', '2014-08-14 23:59:17'),
(327, 126, 'Diesel', '2014-08-15 00:00:14', '2014-08-15 00:00:14'),
(328, 127, 'Diesel', '2014-08-15 00:01:41', '2014-08-15 00:01:41'),
(329, 128, 'Diesel', '2014-08-15 00:03:20', '2014-08-15 00:03:20'),
(330, 129, 'Diesel', '2014-08-15 00:05:14', '2014-08-15 00:05:14'),
(331, 130, 'Diesel', '2014-08-15 00:06:06', '2014-08-15 00:06:06'),
(332, 131, 'Diesel', '2014-08-15 00:07:54', '2014-08-15 00:07:54'),
(333, 132, 'Diesel', '2014-08-15 00:10:31', '2014-08-15 00:10:31'),
(334, 133, 'Diesel', '2014-08-15 00:11:29', '2014-08-15 00:11:29'),
(335, 134, 'Diesel', '2014-08-15 00:15:05', '2014-08-15 00:15:05'),
(336, 135, 'Diesel', '2014-08-15 00:16:02', '2014-08-15 00:16:02'),
(337, 136, 'Diesel', '2014-08-15 00:16:54', '2014-08-15 00:16:54'),
(338, 137, 'Diesel', '2014-08-15 00:17:58', '2014-08-15 00:17:58'),
(339, 138, 'esmalte', '2014-08-16 20:43:02', '2014-08-16 20:43:02'),
(340, 138, 'masglo', '2014-08-16 20:43:02', '2014-08-16 20:43:02'),
(341, 138, 'uñas', '2014-08-16 20:43:02', '2014-08-16 20:43:02'),
(342, 138, 'calidad', '2014-08-16 20:43:02', '2014-08-16 20:43:02'),
(343, 138, 'belleza', '2014-08-16 20:43:02', '2014-08-16 20:43:02'),
(344, 138, 'mano', '2014-08-16 20:43:02', '2014-08-16 20:43:02'),
(345, 138, 'tono', '2014-08-16 20:43:02', '2014-08-16 20:43:02'),
(346, 138, 'colores', '2014-08-16 20:43:02', '2014-08-16 20:43:02'),
(347, 139, 'agv', '2014-08-19 15:19:31', '2014-08-19 15:19:31'),
(348, 139, 'k3', '2014-08-19 15:19:31', '2014-08-19 15:19:31'),
(349, 139, 'helmet', '2014-08-19 15:19:31', '2014-08-19 15:19:31'),
(350, 139, 'casco', '2014-08-19 15:19:31', '2014-08-19 15:19:31'),
(351, 139, 'usa', '2014-08-19 15:19:31', '2014-08-19 15:19:31'),
(352, 139, 'valentino rosi', '2014-08-19 15:19:31', '2014-08-19 15:19:31'),
(353, 139, '46lg', '2014-08-19 15:19:31', '2014-08-19 15:19:31'),
(354, 139, '46', '2014-08-19 15:19:31', '2014-08-19 15:19:31'),
(355, 139, 'italia', '2014-08-19 15:19:31', '2014-08-19 15:19:31'),
(356, 139, 'italy', '2014-08-19 15:19:31', '2014-08-19 15:19:31'),
(357, 140, '', '2014-08-19 20:44:37', '2014-08-19 20:44:37'),
(358, 141, '', '2014-08-19 21:28:45', '2014-08-19 21:28:45'),
(359, 142, '', '2014-08-19 21:39:20', '2014-08-19 21:39:20'),
(360, 143, '', '2014-08-19 22:00:14', '2014-08-19 22:00:14'),
(361, 144, '', '2014-08-19 22:18:00', '2014-08-19 22:18:00'),
(362, 145, '', '2014-08-19 22:18:08', '2014-08-19 22:18:08'),
(363, 146, '', '2014-08-19 22:27:16', '2014-08-19 22:27:16'),
(364, 147, '', '2014-08-19 22:48:21', '2014-08-19 22:48:21'),
(365, 148, '', '2014-08-20 00:21:00', '2014-08-20 00:21:00'),
(366, 149, 'tinte', '2014-08-20 22:34:56', '2014-08-20 22:34:56'),
(367, 149, 'color', '2014-08-20 22:34:56', '2014-08-20 22:34:56'),
(368, 149, 'matizante', '2014-08-20 22:34:56', '2014-08-20 22:34:56'),
(369, 149, 'natural', '2014-08-20 22:34:56', '2014-08-20 22:34:56'),
(370, 149, 'decoloracion', '2014-08-20 22:34:56', '2014-08-20 22:34:56'),
(371, 149, 'cobertura', '2014-08-20 22:34:56', '2014-08-20 22:34:56'),
(372, 149, 'tono', '2014-08-20 22:34:56', '2014-08-20 22:34:56'),
(373, 150, 'tinte', '2014-08-20 22:40:36', '2014-08-20 22:40:36'),
(374, 150, 'sin amoniaco', '2014-08-20 22:40:36', '2014-08-20 22:40:36'),
(375, 150, 'color', '2014-08-20 22:40:36', '2014-08-20 22:40:36'),
(376, 150, 'canas', '2014-08-20 22:40:36', '2014-08-20 22:40:36'),
(377, 150, 'matizante', '2014-08-20 22:40:36', '2014-08-20 22:40:36'),
(378, 150, 'cobertura de canas', '2014-08-20 22:40:36', '2014-08-20 22:40:36'),
(379, 151, 'shammpo', '2014-08-20 22:55:56', '2014-08-20 22:55:56'),
(380, 151, 'semilla de lino', '2014-08-20 22:55:56', '2014-08-20 22:55:56'),
(381, 151, 'sin sal', '2014-08-20 22:55:56', '2014-08-20 22:55:56'),
(382, 151, 'alfaparf', '2014-08-20 22:55:56', '2014-08-20 22:55:56'),
(383, 151, 'suavidad', '2014-08-20 22:55:56', '2014-08-20 22:55:56'),
(384, 152, 'shampoo', '2014-08-22 20:36:42', '2014-08-22 20:36:42'),
(385, 152, 'cabello maltratado', '2014-08-22 20:36:42', '2014-08-22 20:36:42'),
(386, 152, 'tratamiento', '2014-08-22 20:36:42', '2014-08-22 20:36:42'),
(387, 152, 'capilar', '2014-08-22 20:36:42', '2014-08-22 20:36:42'),
(388, 152, 'alfaparf', '2014-08-22 20:36:42', '2014-08-22 20:36:42'),
(389, 152, 'dañado', '2014-08-22 20:36:42', '2014-08-22 20:36:42'),
(390, 153, 'kit', '2014-08-22 20:42:08', '2014-08-22 20:42:08'),
(391, 153, 'tratamiento', '2014-08-22 20:42:08', '2014-08-22 20:42:08'),
(392, 153, 'shampoo', '2014-08-22 20:42:08', '2014-08-22 20:42:08'),
(393, 153, 'cabello', '2014-08-22 20:42:08', '2014-08-22 20:42:08'),
(394, 153, 'capilar', '2014-08-22 20:42:08', '2014-08-22 20:42:08'),
(395, 153, 'cabello dañado', '2014-08-22 20:42:08', '2014-08-22 20:42:08'),
(396, 154, 'TRATAMIENTO', '2014-08-22 20:48:11', '2014-08-22 20:48:11'),
(397, 154, 'SHAMPOO', '2014-08-22 20:48:11', '2014-08-22 20:48:11'),
(398, 154, 'mascarilla', '2014-08-22 20:48:11', '2014-08-22 20:48:11'),
(399, 154, 'cabellos dañados', '2014-08-22 20:48:11', '2014-08-22 20:48:11'),
(400, 154, 'capilar', '2014-08-22 20:48:11', '2014-08-22 20:48:11'),
(401, 154, 'tintura', '2014-08-22 20:48:11', '2014-08-22 20:48:11'),
(402, 154, 'alfaparf', '2014-08-22 20:48:11', '2014-08-22 20:48:11'),
(403, 154, 'chocolate', '2014-08-22 20:48:11', '2014-08-22 20:48:11'),
(404, 155, 'shampoo', '2014-08-22 21:01:00', '2014-08-22 21:01:00'),
(405, 155, 'cabello', '2014-08-22 21:01:00', '2014-08-22 21:01:00'),
(406, 155, 'cabello maltratado', '2014-08-22 21:01:00', '2014-08-22 21:01:00'),
(407, 155, 'capilar', '2014-08-22 21:01:00', '2014-08-22 21:01:00'),
(408, 155, 'chocolate', '2014-08-22 21:01:00', '2014-08-22 21:01:00'),
(409, 155, 'alfaparf', '2014-08-22 21:01:00', '2014-08-22 21:01:00'),
(410, 156, 'AMPOLLETA', '2014-08-22 21:27:22', '2014-08-22 21:27:22'),
(411, 156, 'ROSADA.', '2014-08-22 21:27:22', '2014-08-22 21:27:22'),
(412, 156, 'AZUL', '2014-08-22 21:27:22', '2014-08-22 21:27:22'),
(413, 156, 'BRILLO', '2014-08-22 21:27:22', '2014-08-22 21:27:22'),
(414, 156, 'TRATAMIENTO', '2014-08-22 21:27:22', '2014-08-22 21:27:22'),
(415, 156, 'CAPILAR', '2014-08-22 21:27:22', '2014-08-22 21:27:22'),
(416, 156, 'SUAVIDAD', '2014-08-22 21:27:22', '2014-08-22 21:27:22'),
(417, 156, 'CEPILLADO', '2014-08-22 21:27:22', '2014-08-22 21:27:22'),
(418, 156, 'CUIDADO CAPILAR', '2014-08-22 21:27:22', '2014-08-22 21:27:22'),
(419, 157, 'AMPOLLETA', '2014-08-22 21:28:15', '2014-08-22 21:28:15'),
(420, 157, 'ROSADA.', '2014-08-22 21:28:15', '2014-08-22 21:28:15'),
(421, 157, 'AZUL', '2014-08-22 21:28:15', '2014-08-22 21:28:15'),
(422, 157, 'BRILLO', '2014-08-22 21:28:15', '2014-08-22 21:28:15'),
(423, 157, 'TRATAMIENTO', '2014-08-22 21:28:15', '2014-08-22 21:28:15'),
(424, 157, 'CAPILAR', '2014-08-22 21:28:15', '2014-08-22 21:28:15'),
(425, 157, 'SUAVIDAD', '2014-08-22 21:28:15', '2014-08-22 21:28:15'),
(426, 157, 'CEPILLADO', '2014-08-22 21:28:15', '2014-08-22 21:28:15'),
(427, 157, 'CUIDADO CAPILAR', '2014-08-22 21:28:15', '2014-08-22 21:28:15'),
(428, 158, 'helmet', '2014-08-23 15:05:33', '2014-08-23 15:05:33'),
(429, 158, 'usa', '2014-08-23 15:05:33', '2014-08-23 15:05:33'),
(430, 158, 'casco', '2014-08-23 15:05:33', '2014-08-23 15:05:33'),
(431, 158, 'agv', '2014-08-23 15:05:33', '2014-08-23 15:05:33'),
(432, 158, 'k3', '2014-08-23 15:05:33', '2014-08-23 15:05:33'),
(433, 158, 'k-3', '2014-08-23 15:05:33', '2014-08-23 15:05:33'),
(434, 158, 'italia', '2014-08-23 15:05:33', '2014-08-23 15:05:33'),
(435, 158, 'italy', '2014-08-23 15:05:33', '2014-08-23 15:05:33'),
(436, 158, 'burro', '2014-08-23 15:05:33', '2014-08-23 15:05:33'),
(437, 158, 'the donkey', '2014-08-23 15:05:33', '2014-08-23 15:05:33'),
(438, 158, 'sol y luna', '2014-08-23 15:05:33', '2014-08-23 15:05:33'),
(439, 159, 'AGV', '2014-08-23 15:18:07', '2014-08-23 15:18:07'),
(440, 159, 'K3', '2014-08-23 15:18:07', '2014-08-23 15:18:07'),
(441, 159, 'HELMET', '2014-08-23 15:18:07', '2014-08-23 15:18:07'),
(442, 159, 'USA', '2014-08-23 15:18:07', '2014-08-23 15:18:07'),
(443, 159, 'CASCO', '2014-08-23 15:18:07', '2014-08-23 15:18:07'),
(444, 159, 'CASCOS', '2014-08-23 15:18:07', '2014-08-23 15:18:07'),
(445, 159, 'ITALIA', '2014-08-23 15:18:07', '2014-08-23 15:18:07'),
(446, 159, 'ITALY', '2014-08-23 15:18:07', '2014-08-23 15:18:07'),
(447, 159, 'ROSSI ICON', '2014-08-23 15:18:07', '2014-08-23 15:18:07'),
(448, 159, 'VALENTINO ROSSI', '2014-08-23 15:18:07', '2014-08-23 15:18:07'),
(449, 159, '46', '2014-08-23 15:18:07', '2014-08-23 15:18:07'),
(450, 160, '', '2014-08-25 16:15:35', '2014-08-25 16:15:35'),
(451, 161, '', '2014-08-25 16:23:23', '2014-08-25 16:23:23'),
(452, 162, '', '2014-08-25 16:25:17', '2014-08-25 16:25:17'),
(453, 163, '', '2014-08-25 16:26:30', '2014-08-25 16:26:30'),
(454, 164, '', '2014-08-25 16:28:33', '2014-08-25 16:28:33'),
(455, 165, '', '2014-08-25 16:30:40', '2014-08-25 16:30:40'),
(456, 166, '', '2014-08-25 16:31:54', '2014-08-25 16:31:54'),
(457, 167, '', '2014-08-25 16:33:50', '2014-08-25 16:33:50'),
(458, 168, '', '2014-08-25 16:35:44', '2014-08-25 16:35:44'),
(459, 169, '', '2014-08-25 16:36:46', '2014-08-25 16:36:46'),
(460, 170, '', '2014-08-25 16:40:09', '2014-08-25 16:40:09'),
(461, 171, 'vigilancia', '2014-08-25 21:22:27', '2014-08-25 21:22:27'),
(462, 171, 'seguridad', '2014-08-25 21:22:27', '2014-08-25 21:22:27'),
(463, 172, 'cavitacion', '2014-08-27 21:51:23', '2014-08-27 21:51:23'),
(464, 172, 'reduccion', '2014-08-27 21:51:23', '2014-08-27 21:51:23'),
(465, 172, 'gimnasia pasiva', '2014-08-27 21:51:23', '2014-08-27 21:51:23'),
(466, 172, 'medidas', '2014-08-27 21:51:23', '2014-08-27 21:51:23'),
(467, 173, '', '2014-09-06 22:50:07', '2014-09-06 22:50:07'),
(468, 174, '', '2014-10-22 22:19:57', '2014-10-22 22:19:57'),
(469, 175, 'play4', '2014-11-02 03:32:41', '2014-11-02 03:32:41'),
(470, 175, 'sony', '2014-11-02 03:32:41', '2014-11-02 03:32:41'),
(471, 176, 'fifa 15', '2014-11-02 03:36:00', '2014-11-02 03:36:00'),
(472, 176, 'play4', '2014-11-02 03:36:00', '2014-11-02 03:36:00'),
(473, 177, 'chocolatina', '2014-11-05 14:08:17', '2014-11-05 14:08:17'),
(474, 177, 'blanca', '2014-11-05 14:08:17', '2014-11-05 14:08:17'),
(475, 177, 'dulce', '2014-11-05 14:08:17', '2014-11-05 14:08:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=72 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `img`, `password`, `password_temp`, `code`, `tipo`, `isadmin`, `active`, `remember_token`, `created_at`, `updated_at`) VALUES
(7, 'demi', 'demi@gmail.com', 'img/users/2014-04-06-22-380534.png', '$2y$10$NqWTZAY5XY0AxvpyzL9KHucrGBSV9TNkFjz94em6ZNTAZHJ5dlu02', '$2y$10$m1t1Cw4dJqgJOPTrIYrDyO7fqehZ5JWiLrFIrgHCRoXOR1M08Os0O', 'EO0GQuUUNzMFAEZT0iqjlTvNbJpHMQgl2cw8ZFCOjocSOtLyjf4a2AP8pTsY', 1, 0, 1, 'YmeZODalksC0W64Mg7HH2T1Ydho8zeqfsVbalHPpEyEWnzfW3mrhY2940tut', '2014-04-07 03:47:18', '2014-10-31 00:41:27'),
(8, 'ederjulianA', 'ederalvarez2009@hotmail.com', 'img/users/2014-04-06-22-1080p-barcelona-team-2013-hd-wallpapers-4584.jpg', '$2y$10$HKvlxMt8eH9IiV18SqEJJOhC/bQcqM8LEg6xX.fvRHNWOrEwiF/Ve', '', '', 2, 0, 1, 'lrNjN3x8cUxh4PnkDvWp1w7tbAShlqzUJLzrJ0RZCetzgaWoAAjSdnTQx9ZD', '2014-04-07 03:52:10', '2014-11-18 05:24:18'),
(9, 'empresa1', 'ederalvarez2091057@gmail.com', 'img/users/2014-04-07-16-falcao.jpg', '$2y$10$ZAVBQVPLMsyqEMKqfpaFWeRbwpMMUk2nuWjJ4LW7id09taURy7Ckq', '', '', 2, 0, 1, 'ex09MJBt0yAwoMDGl64PlKGGgMyRtpLv65ouIBPDT9elHjGkQ8EsaTqrKgzw', '2014-04-07 21:56:35', '2014-11-17 10:33:33'),
(10, 'empresa2', 'empresa2@gmail.com', 'img/users/2014-04-11-16-GHWT.jpg', '$2y$10$lEmS7rSeYmbIOyJlknUZCuGb6KDKS6mTCrA2M.xR61faI/Qn2p4v.', '', '', 2, 0, 1, 'v6HG0wSgHilzQlRKKpCHYli0N99uy6bvPObYxx1SVOI0cedOt3qsxsGFMMIL', '2014-04-11 21:47:15', '2014-08-05 07:22:32'),
(11, 'empresa4', 'empresa4@gmail.com', 'img/users/2014-04-11-18-380534.png', '$2y$10$KJhgXGRBH7XcwktADxGJNuoo.0oFZrPUEdhoFosPqLtZhKtiJlKKC', '', '', 2, 0, 1, 'S4asZvzfDTZILueEzaBwosDlMJeVQRLdVFKX73Pm10h5wekroT9QdEslAvVF', '2014-04-11 23:02:28', '2014-05-27 00:48:07'),
(12, 'empresa5', 'empresa5@gmail.com', 'img/users/2014-04-12-14-kitty.png', '$2y$10$7ojXGoUnvMecvJUGloQ5zuHAN461H4SoWIVfghov76fN9InSWFjYa', '', '', 2, 0, 1, '4La3oljOsnsnJJ992ty8Q4Q1NBsTAcvyedwWQMWAugO3CruOFmrxpu2MeFiL', '2014-04-12 19:23:27', '2014-08-11 03:06:12'),
(13, 'empresa10', 'empresa10@gmail.com', 'img/users/2014-04-12-19-falcao.jpg', '$2y$10$HKvlxMt8eH9IiV18SqEJJOhC/bQcqM8LEg6xX.fvRHNWOrEwiF/Ve', '', '', 2, 0, 1, 'cMX4rcgs44VocM6SixUPz1ybAbnQcAKry1Zhut3yrKjr8Nk0e55QsSTVnwiQ', '2014-04-13 00:01:01', '2014-05-21 21:26:36'),
(19, 'laura', 'pecas654@hotmail.com', 'img/users/2014-04-14-23-IMG_5517.JPG', '$2y$10$cubXsvfLeNSeLEteodmfVe0H1G5hxxjVB1gyKORXHsZbro.ZjMRLO', '', '', 1, 0, 1, 'RXBWmL2pVUFE6VTWZ5WXGp56HGTOgu6NWTUEFoRbJdMeMSm1JCxXGUqgwga2', '2014-04-15 04:40:47', '2014-05-09 07:01:15'),
(21, 'ederjulianA', 'prueba12345678eder@gmail.com', 'img/users/2014-04-23-03-549310_553591994662751_250484142_n.jpg', '$2y$10$1DL/c0jv8SWWS2BhCl6s/OIFEIUsWv.Vf8H0Tulx9zIBOEadgfRTK', '', 'o0hEiT8Uw5faBlBKaD5VK1tlzWNXU9gsUEduN7bthKv2SgFfG9fbRiykiClo', 1, 0, 0, '', '2014-04-23 08:57:16', '2014-04-23 08:57:16'),
(27, 'dulces', 'lizcanojair@gmail.com', 'img/users/2014-05-20-02-k1GVinvnsst3t-LOGO.JPG', '$2y$10$Z4wtGfQh2FtLKxCf3brPYuOQgeFzcRZR1lyjnJlYr/hJkJIC1jNGu', '$2y$10$DV2aXa6LmEz11bUSnZHDxekOAhJW1StW5F80KvomtXP2bDiIamism', 'UQHWY9Xj7HAYjQA5iHyBbsXPC7xKw6w7G16v3rHJgtNhVynVRn9VJGJXtvzZ', 2, 0, 1, 'E5EsnbMoLTqtv9YDGBhjvMYZtTFRMrCxKgsblCIbqdN6FbhocaEwe3bnQxPf', '2014-05-20 07:31:24', '2014-06-04 08:48:52'),
(28, 'natalia', 'nataliaelvira2091057@gmail.com', 'img/users/2014-05-21-16-ZM3Nof4TQKMAw-demigame.png', '$2y$10$5IxAjjk39hkvuxSI6IqPEOoYLLW0Oyo8u7kF/yrOqJv1dXK0xsMo6', '', '', 1, 0, 1, '', '2014-05-21 21:36:38', '2014-05-21 21:36:38'),
(30, 'ivan rojas', 'ivan.rojas.sis@gmail.com', 'img/users/2014-05-23-05-lCBXHrcboGl6p-rep4.jpg', '$2y$10$q/SAQlr3aao5ZOx8W4PNTOSeSaatTsC1HPga2moQPRD8tcbrB/2wa', '', '', 1, 0, 1, '6S4jNlMcnvXXC2ShjlN1TqU8JL4WXkKhBJbaINBVXCPOYBXI04gmjh69Kx4S', '2014-05-23 10:01:36', '2014-09-03 22:13:51'),
(31, 'ivan empresa', 'ilichs35@gmail.com', 'img/users/2014-05-24-02-Goi3yfQga9ylN-Foto del día 4-01-13 a la(s) 22.58 #2.jpg', '$2y$10$nOIkTylSyGF2fZhcM78hW.WzgLZtt3887aGti6thZe97xr/3kAWWa', '', '', 2, 0, 1, 'JV772kPz2RDFuUfgQCXm4xwD9bKTJUIdnAZmBVU48ZRyWCWR0bSoY9MzVK0O', '2014-05-24 07:30:37', '2014-09-11 22:00:08'),
(32, 'ivan jose rojas cabrales', 'ilichs_35@gmail.com', 'img/users/2014-06-07-15-5mxWPiyj0Goos-logomega.PNG', '$2y$10$mfUQ87UhX6kNkDHPlvyYpeSUfu.IhL3HTtfv.0fbDCQdVLAmCqlda', '', 'mW5Jjmu8lxCch45l3oSazJrAUEdbH15fwiqt19NQ8RQbBNUOroM4UvMXkRKF', 2, 0, 0, '', '2014-06-07 20:15:18', '2014-06-07 20:15:18'),
(33, 'soni', 'soni325@hotmail.com', 'img/users/2014-06-07-15-JRvXZ9p71npOi-barca.jpg', '$2y$10$hPMxpwQ9pQAMZyTnvrYs3.qG64p98/gJsQassMUrjaz5BFy2PmOoO', '', '', 1, 1, 1, 'sXUEEg7ae7HWDCP41bH1iJdsYoELac47wRyxH97OcTCWsMV4s0LGjpOHLycS', '2014-06-07 20:27:05', '2014-11-05 04:42:14'),
(34, 'ivan jose rojas', 'ivan_rojas_sis@hotmail.com', 'img/users/2014-06-07-15-HaUxZ65OUIg1e-logomega (1).png', '$2y$10$Gg3JsxsavHdVoCP5.Ne6YO58EZsJd3LW4mym/eOLGDg6rgwwzxkFi', '', '', 2, 0, 1, '4LhindOnrpTm2ZXWNaWMHUkRxDVCrEKOdZezt1VfAagh3y1r5Q5sIh1piw4l', '2014-06-07 20:43:45', '2014-06-08 03:45:55'),
(35, 'sagir', 'eder2091057@hotmail.com', 'img/users/2014-06-07-20-mQzp4gVEhSqhQ-barca.jpg', '$2y$10$dTfaL3jH9OSmWgYmTc57EOmioQIrvmj1Dn3Wp/fz4stlLHnPjXp3a', '', '', 2, 0, 1, '8IJzZkzb87KNpWioIIlXkpKQ1uj7XnxD6qM9B7I15ht4QZwT4pXTLT4sozkA', '2014-06-08 01:02:52', '2014-08-06 00:51:58'),
(37, 'Angie', 'angiers643@gmail.com', 'img/users/2014-06-19-15-qOUf4Ezih6Lc8-Koala.jpg', '$2y$10$7H2qm.0AJa38R.2gWbA3xukz9qHCb1S2mP9Mp4/wUJi//wqhWJy/6', '', '', 1, 0, 1, '', '2014-06-19 20:47:45', '2014-06-19 20:48:21'),
(38, 'Andres', 'valpibe_123@hotmail.com', 'img/users/2014-07-23-23-lkER4Ox617CY5-AdamLevine.jpg', '$2y$10$THJ6TV5kv6YrDjTA/rx8w.OxASFuQfsbBcAs8TZcRdVASU2GrPkmy', '', 'wwqnzSYGo4nU5cTzxGlKuiDPWztyCwjgViwk9ynzVsRRL1z6HVI4yhkmkqVg', 1, 0, 0, '', '2014-07-24 04:58:51', '2014-07-24 04:58:51'),
(40, 'ivan jose roja ', 'megalopolis.web@gmail.com', 'img/users/', '$2y$10$wH/8oJSod2LHjxjFj6M8oOe998Hc1bx.5RfnH4QdjjNUPoWe08yTu', '', '', 2, 0, 1, '', '2014-07-25 18:44:47', '2014-07-25 18:45:54'),
(41, 'SigoDeportes', 'sigo@gmail.com', 'img/users/', '$2y$10$EL9VHUs6hijx3E9yGQugm.06.T5Y8Z9FwbNEEMzMjsi9fozZ6e12q', '', 'PMK6Y98rrhCi2a6JAfogW430OwbNESpvPiZP4z9Qstn58CpCRkcEHkHS2WRC', 2, 0, 0, '', '2014-07-28 19:47:09', '2014-07-28 19:47:09'),
(42, 'gio921', 'geoval-123@hotmail.com', 'img/users/', '$2y$10$tKrnoMKwyAGkHMx0z3UctOyaB7z558islKL2AFywY45Z6Di5V72lS', '', '', 1, 0, 1, 'g5moMDqOkyhofYXHJWRpm3MPqknyeo5Er1B5sRmineASCFecHfIRneDlhKBy', '2014-07-30 10:53:32', '2014-09-25 23:01:40'),
(43, 'AURA MARIA MONCADA & CIA', 'auramariamoncadalibreria@gmail.com', 'img/users/', '$2y$10$MpvlUf0GJSUOYDhvkPJUp.mAJxjlQ9tPZOeo8RagVXu4I9SsnUwZC', '', '', 2, 0, 1, 'RJ2FcrK1pmiyfUvm6eYmEasAO6mmNwCRmYz5oXDVXmjwm92Z7FjerTD1N7YY', '2014-07-30 20:07:28', '2014-07-30 20:59:51'),
(44, 'SPORT CENTER', 'julicitalizarazo@hotmail.com', 'img/users/', '$2y$10$3yzGuMDjuOeheeLohbDoduEZa0t/ww1NxWqOy8cKKHYbqwrI2rD5u', '', '', 2, 0, 1, '', '2014-07-30 21:24:53', '2014-07-30 21:28:55'),
(45, 'agrofarbef ltda', 'agrofarbef@gmail.com', 'img/users/', '$2y$10$7X1QKPov5nvgbnNng0Z3UeUVBVUp41WLT34qPrGz.c3oZZsE8kGw.', '', '', 2, 0, 1, '', '2014-08-01 01:24:18', '2014-08-01 01:24:40'),
(46, 'soni', 'soni325.ba@gmail.com', 'img/users/', '$2y$10$D9AaSI.7BQNpqWToFXx02.KmhxWfuDQStAX8EX3Y6zuKHduJnu1Oa', '', '', 1, 0, 1, '', '2014-08-02 01:52:02', '2014-08-02 01:52:45'),
(47, 'STETIK LINE', 'lucipab_927@hotmail.com', 'img/users/', '$2y$10$7Beoz3a4Qnzw1BBHOWIyLuFcbhVHEg4XgMte7R54uKlDqaz45/CPG', '', '', 2, 0, 1, 'ycH2FXfxouoRCg9QJVNUywr5wmFRj69ldfSUoHh2IBvLNvaq47Oh9aayCkca', '2014-08-02 07:26:23', '2014-10-13 20:41:37'),
(48, 'NutritotalCoach', 'lilianaleonpabon@gmail.com', 'img/users/', '$2y$10$h6E5SdwlPi2bvgg8Z3zJ0e4UK21.vOWn2cAzDXY/35gbv3nc4LsIq', '', '', 2, 0, 1, 'dHvbyOhccngQvwybABAHEYpSfJ5rgHWneLXFbLjtkOQ5SD3Lsq48JB7ZIb9p', '2014-08-04 21:30:50', '2014-11-06 04:06:27'),
(49, 'Academia de seguridad ATS', 'ats@colombia.com', 'img/users/', '$2y$10$FTJwPVR.ki7Dbkpf9uuGtuYj3Q4UPOnBuukifwjm9pBU4tYabN6mC', '', '', 2, 0, 1, 'hogZbKWfxA7JSAecLqYTNrJnv0rixNiCmTZXee6Xa8pgjfm0fMzvRzU6LHpa', '2014-08-05 01:29:18', '2014-08-05 01:57:31'),
(50, 'Carlos', 'cvcarlosandres39@gmail.com', 'img/users/', '$2y$10$TIZ9xoBWnErgNnUA3Upd2u.KHLS1eh5XKSpaVehzYXwp1QoE4p6Vy', '', '', 1, 0, 1, '3rpHH64mOa7YnGzaFhg7vHhexOhd4RVsVaTJVag8XdFaCPwAgPvlr0gYd5Dz', '2014-08-05 05:47:30', '2014-08-05 07:12:43'),
(51, 'sentio solvo', 'sentiosolvo13@gmail.com', 'img/users/', '$2y$10$drz/p5HAXNxz33Mf/TSO0OkhcPMLL7tWeMzsUIfz2D6KhPkCVfeWC', '', '', 2, 0, 1, '', '2014-08-05 21:27:36', '2014-08-05 21:28:10'),
(52, 'moda-hombres', 'modahombres72@gmail.com', 'img/users/', '$2y$10$7mRfHfglMhAyBafe.Dvx7eKU41G.z4w5WOtmfAK.DkthSqhyvn.om', '', '', 2, 1, 1, 'gYfz9QRqozGSndgycPdkyx1GpO5Ag3ROdYSc7KZJAZenO00BaF0yvcdQ5kBR', '2014-08-06 01:10:50', '2014-09-02 03:52:41'),
(53, 'sonata bucaramanga', 'sonatabucaramanga@hotmail.com', 'img/users/', '$2y$10$0KUKfd1BFSoUYg3f2G.ftOLFBkXx11gnVLwNl4Sikn1Xte6YxWlsK', '', '', 2, 0, 1, '', '2014-08-07 01:17:22', '2014-08-07 01:18:19'),
(54, 'Moda femenina Kitty', 'empresaropamujeres@gmail.com', 'img/users/', '$2y$10$o06V/Ja8X7zyVDYs4QRTPeTzsp0yalPhbpqRmcQACi6RuLQvPDi0S', '', '', 2, 0, 1, '', '2014-08-09 22:04:57', '2014-08-09 22:05:09'),
(55, 'Mega tecno', 'tecnomegalopolis@gmail.com', 'img/users/', '$2y$10$3x7c8sWGKFzu3AZz3eMYU.zoB4yegxIi8rR0YFvd.sHUN.X6WEaNm', '', '', 2, 0, 1, 'n4M0Yn8f9d38v2p6VelgFSYHBEG5D0JSHHRwCcIA4aWCCPocERmsmHyJBBML', '2014-08-11 02:17:48', '2014-11-05 02:02:14'),
(56, 'Todo cells', 'thewalkingdead2091057@gmail.com', 'img/users/', '$2y$10$RwrM4x8QUV905yv6cBDONeQV7JGmKAiPDCK61XY9UOGwsGbX/cboO', '', '', 2, 0, 1, '8422PwFLS60CVBD5W6Fag1vdvQmyAxRGY9WeURKMfsf02T281MX507MeujLp', '2014-08-11 03:22:09', '2014-08-11 22:08:33'),
(57, 'distriarte', 'distriarte33@hotmail.com', 'img/users/', '$2y$10$f86l6qEtgoDoTlLK1FVEDewupAKix3O.D0veeB2ExUGGBQLa9LB8G', '', 'cT3DpHfumSjDNwAilFcQXMRMjDifUJMtW6WW8u1A6hZlXKy2BKvVljl4AOaj', 2, 0, 0, '', '2014-08-12 01:28:08', '2014-08-12 01:28:08'),
(58, 'distriarte', 'distriarte33@gmail.com', 'img/users/', '$2y$10$ziTNhH6Uo3UNAYK2dxx.BOjlhnilEapWSX5s2HQXsnGhC9i/j2lBS', '$2y$10$Uq1McibWBbf1mcdkoi92EubC.ajJsk0RdFEflOByRtewn8IMf7V4S', '5PZubObMBPNZ9HrJSCv22tKIasi1izJCLkRREZjiXHP8cu5zaWEAHj2Mrgj9', 2, 0, 1, '', '2014-08-12 03:24:34', '2014-08-15 01:18:13'),
(59, 'la pasteleria ', 'sjcelis19@gmail.com', 'img/users/', '$2y$10$F3zagncH0.LutjOOi5erB.cV/bVh9rWpv2dIPxqiqT4JttTTslw6m', '', '', 2, 0, 1, 'IOJjJhNfsbrI7pNVsLdGIDOAM2uHcu1Qc1jIId2KYXWqhsKYHu00WFuTSjTN', '2014-08-14 05:37:11', '2014-09-23 17:39:44'),
(60, 'grupotodoptica', 'lilicarda@gmail.com', 'img/users/', '$2y$10$f6r6s/JoCumTDOZ82rmXW.hiVfzawl.CW2cE0Qu26a74Zu07SVKSe', '', '', 2, 0, 1, 'FYXUazoaB0agPXDMUelw6PDGQlXHFBL5hjgHIauBWZWRb8zJwFPbsmu6FM0n', '2014-08-15 02:23:22', '2014-08-15 02:57:47'),
(61, 'viviana', 'viviqui85@hotmail.com', 'img/users/', '$2y$10$AdARVLYAviHuXwdadfig8u24mMV1x5Kcq/giKGjrD9VkwmJ2ab7/O', '', '', 2, 0, 1, 'MEYfOPLlM8lmBDuGT9WSgow7HbE48FCbPy2KZTU9M94tHIQ87MlBz6qrAlEf', '2014-08-17 01:17:47', '2014-08-20 05:22:25'),
(62, 'zonabikerb', 'zonabikerb@hotmail.com', 'img/users/', '$2y$10$ikXKp6PVAljdufWoHoVJJu1IAQ45BUsUHKYTJKG0zgQEamsU.NGSK', '', '', 2, 0, 1, '', '2014-08-19 20:10:54', '2014-08-19 20:11:29'),
(63, 'karlatcm10', 'karlatcm10@gmail.com', 'img/users/', '$2y$10$MEJXFJr6NJ.Typ97G1bhbeGGmnx2txl98trLbsp67NhXZyR1ejNde', '', '', 1, 0, 1, '', '2014-08-21 05:46:38', '2014-08-21 17:58:56'),
(70, 'camila95', 'camiladiaz1255@outlook.com', 'img/users/', '$2y$10$VbaTJ4.vvMqNyuivFD.I3OtZO6zJtIhmarJ1KMW/Vzelj.T4gXvT2', '', '', 1, 0, 1, '0wqpNQiYjzx9tLlEGpDrwF9ImP2dwO1iHWGazGkvFtDDwkJtrg3I1OBgorux', '2014-09-01 08:37:26', '2014-11-17 10:32:46'),
(71, 'daledetalles', 'informawikip@gmail.com', 'img/users/', '$2y$10$vRqjoS7/PsEOBTsnMrffyuz09gKkl0cTcIlDGPyyiy7S6OvHZGotu', '', '', 2, 0, 1, '', '2014-11-05 18:03:28', '2014-11-05 18:05:07');

-- --------------------------------------------------------

--
-- Table structure for table `user_favoritos`
--

CREATE TABLE IF NOT EXISTS `user_favoritos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `producto_id` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci AUTO_INCREMENT=206 ;

--
-- Dumping data for table `user_favoritos`
--

INSERT INTO `user_favoritos` (`id`, `user_id`, `producto_id`, `created_at`, `updated_at`) VALUES
(162, 30, 49, '2014-06-07', '2014-06-07'),
(163, 30, 50, '2014-06-07', '2014-06-07'),
(165, 30, 57, '2014-06-14', '2014-06-14'),
(166, 30, 57, '2014-06-14', '2014-06-14'),
(172, 30, 51, '2014-06-27', '2014-06-27'),
(173, 30, 52, '2014-06-27', '2014-06-27'),
(177, 42, 67, '2014-08-01', '2014-08-01'),
(179, 7, 70, '2014-08-01', '2014-08-01'),
(182, 7, 73, '2014-08-01', '2014-08-01'),
(183, 46, 62, '2014-08-01', '2014-08-01'),
(185, 50, 76, '2014-08-05', '2014-08-05'),
(187, 33, 89, '2014-08-05', '2014-08-05'),
(188, 33, 90, '2014-08-05', '2014-08-05'),
(189, 33, 91, '2014-08-07', '2014-08-07'),
(191, 33, 96, '2014-08-11', '2014-08-11'),
(192, 33, 100, '2014-08-14', '2014-08-14'),
(193, 30, 106, '2014-08-23', '2014-08-23'),
(194, 42, 139, '2014-08-23', '2014-08-23'),
(195, 33, 157, '2014-08-24', '2014-08-24'),
(196, 52, 132, '2014-08-24', '2014-08-24'),
(197, 52, 89, '2014-08-24', '2014-08-24'),
(202, 70, 107, '2014-09-08', '2014-09-08'),
(203, 7, 115, '2014-09-11', '2014-09-11'),
(204, 7, 115, '2014-09-11', '2014-09-11'),
(205, 33, 102, '2014-11-04', '2014-11-04');

-- --------------------------------------------------------

--
-- Table structure for table `user_subs`
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci AUTO_INCREMENT=87 ;

--
-- Dumping data for table `user_subs`
--

INSERT INTO `user_subs` (`id`, `user`, `empresa`, `pro_id`, `pro_name`, `created_at`, `updated_at`) VALUES
(45, 36, 2, 74, 'Camisetas Abercrombie Hollister Originales Por Mayor Unidad', '2014-06-11', '2014-08-02'),
(49, 8, 2, 74, 'Camisetas Abercrombie Hollister Originales Por Mayor Unidad', '2014-06-17', '2014-08-02'),
(51, 9, 2, 74, 'Camisetas Abercrombie Hollister Originales Por Mayor Unidad', '2014-07-12', '2014-08-02'),
(52, 30, 2, 74, 'Camisetas Abercrombie Hollister Originales Por Mayor Unidad', '2014-07-24', '2014-08-02'),
(53, 39, 26, 80, 'zapatos', '2014-07-24', '2014-08-04'),
(55, 30, 1, NULL, NULL, '2014-07-24', '2014-07-24'),
(57, 7, 2, 74, 'Camisetas Abercrombie Hollister Originales Por Mayor Unidad', '2014-07-28', '2014-08-02'),
(58, 7, 22, NULL, NULL, '2014-07-29', '2014-07-29'),
(59, 42, 28, NULL, NULL, '2014-08-01', '2014-08-01'),
(60, 42, 29, 174, 'Zapatos Sperry Top Sider', '2014-08-01', '2014-10-22'),
(61, 42, 30, 94, 'HERRAMIENTAS MANUALES Y ELECTRICAS', '2014-08-01', '2014-08-05'),
(63, 8, 31, 176, 'Fifa 15 Ps4 Multilenguaje Español Latino Formato Físico', '2014-08-01', '2014-11-02'),
(64, 42, 32, 172, 'REDUCCION DE MEDIDAS', '2014-08-04', '2014-08-27'),
(65, 50, 32, 172, 'REDUCCION DE MEDIDAS', '2014-08-05', '2014-08-27'),
(66, 51, 35, NULL, NULL, '2014-08-05', '2014-08-05'),
(67, 42, 35, NULL, NULL, '2014-08-05', '2014-08-05'),
(68, 42, 36, NULL, NULL, '2014-08-06', '2014-08-06'),
(69, 33, 36, NULL, NULL, '2014-08-07', '2014-08-07'),
(70, 52, 37, NULL, NULL, '2014-08-09', '2014-08-09'),
(71, 12, 39, NULL, NULL, '2014-08-10', '2014-08-10'),
(72, 30, 45, NULL, NULL, '2014-08-15', '2014-08-15'),
(73, 42, 48, 159, 'AGV K3 ROSSI ICON', '2014-08-19', '2014-08-23'),
(74, 33, 48, 159, 'AGV K3 ROSSI ICON', '2014-08-19', '2014-08-23'),
(76, 33, 47, NULL, NULL, '2014-08-24', '2014-08-24'),
(77, 42, 47, NULL, NULL, '2014-08-24', '2014-08-24'),
(78, 52, 36, NULL, NULL, '2014-08-24', '2014-08-24'),
(79, 47, 32, 172, 'REDUCCION DE MEDIDAS', '2014-08-25', '2014-08-27'),
(82, 70, 36, NULL, NULL, '2014-09-10', '2014-09-10'),
(84, 70, 35, NULL, NULL, '2014-09-10', '2014-09-10'),
(85, 70, 38, NULL, NULL, '2014-09-10', '2014-09-10'),
(86, 70, 37, NULL, NULL, '2014-09-10', '2014-09-10');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
