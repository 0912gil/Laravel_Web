-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 10-05-2022 a las 02:44:04
-- Versión del servidor: 8.0.27
-- Versión de PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inventario_libros`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `editoriales`
--

DROP TABLE IF EXISTS `editoriales`;
CREATE TABLE IF NOT EXISTS `editoriales` (
  `codigo_editorial` varchar(6) NOT NULL DEFAULT '',
  `nombre_editorial` varchar(30) NOT NULL,
  `contacto` varchar(30) NOT NULL,
  `telefono` varchar(9) NOT NULL,
  PRIMARY KEY (`codigo_editorial`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `editoriales`
--

INSERT INTO `editoriales` (`codigo_editorial`, `nombre_editorial`, `contacto`, `telefono`) VALUES
('EDI001', 'Clasicos Roxsil', 'Francisco Merin', '2333-3333'),
('EDI002', 'Editorial UDB', 'Jose Perez Sosa', '2273-8574'),
('EDI003', 'Alfaguara', 'Santiago Morales', '2285-7485'),
('EDI004', 'Rama Editores', 'Marlon Castro', '2285-7485'),
('EDI005', 'McGraw-Hill', 'Steven Garcia', '2274-8596'),
('EDI006', 'Editorial Santillana', 'Miguel Sanchez', '2274-8574'),
('EDI450', 'Prueba', 'Prueba de PHP', '2245-9089'),
('EDI659', 'Editorial UDB', 'Jose Perez Sosa', '2273-8574');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
