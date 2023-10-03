# TPE---WEB2-
Intregrantes: Agustina Fennema (agusfennema@gmail.com) y Marcos Lorenzo (jmlorenzo1993@gmail.com)
Temática: Tienda de indumentaria
Descripción: Nuestra página web es una tienda de indumentaria unisex, la cual incluye por el momento remeras de distintos colores, talles y precios.

Diagrama DER: https://raw.githubusercontent.com/agusfennema/TPE---WEB2-/main/DiagramaDER-Web2.png

Código SQL: https://raw.githubusercontent.com/agusfennema/TPE---WEB2-/main/comercial.sql





////// SQL CATEGORIA
-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2023 at 04:05 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comercial`
--

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

CREATE TABLE `categoria` (
  `ID_categoria` int(11) NOT NULL,
  `TIPO_DE_PRENDA` varchar(45) NOT NULL,
  `DESCRIPCION` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categoria`
--

INSERT INTO `categoria` (`ID_categoria`, `TIPO_DE_PRENDA`, `DESCRIPCION`) VALUES
(1, 'REMERA', ''),
(11, 'CAMPERA', ''),
(12, 'PANTALON', ''),
(13, 'CAMPERA', ''),
(14, 'CAMPERA', ''),
(15, 'REMERA', ''),
(16, 'REMERA', ''),
(17, 'PANTALON', ''),
(18, 'PANTALON', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`ID_categoria`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria`
--
ALTER TABLE `categoria`
  MODIFY `ID_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



///// SQL PRODUCTO

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2023 at 04:06 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comercial`
--

-- --------------------------------------------------------

--
-- Table structure for table `producto`
--

CREATE TABLE `producto` (
  `ID_producto` int(11) NOT NULL,
  `ID_categoria_fk` int(11) NOT NULL,
  `TIPO` varchar(45) NOT NULL,
  `TALLE` char(10) NOT NULL,
  `PRECIO` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `producto`
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
(20, 17, 'REMERA', 'L', 1000),
(21, 11, 'CAMPERA', 'S', 8500),
(22, 11, 'CAMPERA', 'M', 8500),
(23, 11, 'CAMPERA', 'L', 8500),
(24, 11, 'CAMPERA', 'S', 8500),
(25, 11, 'CAMPERA', 'L', 8500),
(26, 11, 'CAMPERA', 'XL', 8500),
(27, 11, 'CAMPERA', 'M', 8500),
(28, 11, 'CAMPERA', 'XL', 8500),
(29, 11, 'CAMPERA', 'S', 8500),
(30, 11, 'CAMPERA', 'M', 8500),
(31, 11, 'CAMPERA', 'L', 8500),
(32, 11, 'CAMPERA', 'XL', 8500),
(33, 12, 'PANTALON', 'S', 9900),
(34, 12, 'PANTALON', 'M', 9900),
(35, 12, 'PANTALON', 'L', 9900),
(36, 12, 'PANTALON', 'XL', 9900),
(37, 12, 'PANTALON', 'S', 9900),
(38, 12, 'PANTALON', 'M', 9900),
(39, 12, 'PANTALON', 'L', 9900),
(40, 12, 'PANTALON', 'XL', 9900);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`ID_producto`),
  ADD KEY `ID_categoria_fk` (`ID_categoria_fk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `producto`
--
ALTER TABLE `producto`
  MODIFY `ID_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`ID_categoria_fk`) REFERENCES `categoria` (`ID_categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
