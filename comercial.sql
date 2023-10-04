-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 22-09-2023 a las 17:17:54
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `ID_categoria` int(11) NOT NULL,
  `TIPO DE PRENDA` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`ID_categoria`, `TIPO DE PRENDA`) VALUES
(1, 'REMERA'),
(11, 'CAMPERA'),
(12, 'PANTALON'),
(13, 'CAMPERA'),
(14, 'CAMPERA'),
(15, 'REMERA'),
(16, 'REMERA'),
(17, 'PANTALON'),
(18, 'PANTALON');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `ID_producto` int(11) NOT NULL,
  `ID_categoria_fk` int(11) NOT NULL,
  `TIPO` varchar(45) NOT NULL,
  `TALLE` char(10) NOT NULL,
  `PRECIO` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`ID_producto`, `ID_categoria_fk`, `TIPO`, `TALLE`, `PRECIO`) VALUES
(1, 14, 'REMERA', 'XS', 1000),
(2, 14, 'REMERA', 'S', 2000),
(3, 14, 'REMERA', 'L', 3000),
(4, 14, 'REMERA', 'XXL', 2000),
(5, 11, 'REMERA', 'XXL', 1000),
(6, 16, 'REMERA', 'XS', 2000),
(7, 17, 'REMERA', 'XL', 3000),
(8, 15, 'REMERA', 'L', 1000),
(9, 15, 'REMERA', 'XXL', 2000),
(10, 1, 'REMERA', 'L', 3000),
(11, 1, 'REMERA', 'XL', 2000),
(12, 12, 'REMERA', 'L', 1000),
(13, 12, 'REMERA', 'S', 1000),
(14, 18, 'REMERA', 'XL', 2000),
(15, 18, 'REMERA', 'XXL', 2000),
(16, 13, 'REMERA', 'XXL', 3000),
(17, 13, 'REMERA', 'XL', 3000),
(18, 1, 'REMERA', 'XS', 1000),
(19, 1, 'REMERA', 'S', 1000),
(20, 17, 'REMERA', 'L', 1000);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`ID_categoria`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`ID_producto`),
  ADD KEY `ID_categoria_fk` (`ID_categoria_fk`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `ID_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `ID_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`ID_categoria_fk`) REFERENCES `categoria` (`ID_categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;