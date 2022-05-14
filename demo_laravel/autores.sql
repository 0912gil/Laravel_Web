-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 10-05-2022 a las 02:50:41
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
-- Estructura de tabla para la tabla `autores`
--

DROP TABLE IF EXISTS `autores`;
CREATE TABLE IF NOT EXISTS `autores` (
  `codigo_autor` varchar(6) NOT NULL,
  `nombre_autor` varchar(50) NOT NULL,
  `nacionalidad` varchar(50) NOT NULL,
  PRIMARY KEY (`codigo_autor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `autores`
--

INSERT INTO `autores` (`codigo_autor`, `nombre_autor`, `nacionalidad`) VALUES
('AUT001', 'Julio Cortazar', 'Argentinoo'),
('AUT002', 'Roque Dalton', 'Salvadoreño'),
('AUT003', 'Miguel de Cervantes', 'Español'),
('AUT004', 'Oscar Wilde', 'Irlandes'),
('AUT006', 'Luis Alonso Arenivar', 'Salvadoreño'),
('AUT007', 'Eugenia Perez Martinez', 'Española'),
('AUT008', 'Aurelio Baldor', 'Cubano'),
('AUT009', 'Gabriel Garcia Marquez', 'Colombiano'),
('AUT010', 'Victor Lopez Castellanos', 'Salvadoreño'),
('AUT011', 'Mario Vargas Llosa', 'Peruano'),
('AUT012', 'Doris Lessing', 'Britanica'),
('AUT091', 'Julio Cortazar', 'Argentinoo'),
('AUT220', 'Carlos Portillo', 'Salvadoreña'),
('AUT222', 'Luis Ponce', 'Peruana'),
('AUT545', 'Karina García', 'Nicaraguense');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
