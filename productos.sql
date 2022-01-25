-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-01-2022 a las 01:02:16
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `productos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idProducto` int(100) NOT NULL,
  `nombreProducto` varchar(200) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precioUnitario` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProducto`, `nombreProducto`, `cantidad`, `precioUnitario`) VALUES
(18, 'CABLE USB IMPRESORA', 200, 35200);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usertbl`
--

CREATE TABLE `usertbl` (
  `id` int(100) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `proceso` varchar(100) NOT NULL,
  `sede` varchar(100) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `tipo` varchar(2) NOT NULL,
  `documento` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usertbl`
--

INSERT INTO `usertbl` (`id`, `full_name`, `proceso`, `sede`, `username`, `password`, `tipo`, `documento`) VALUES
(1, 'Administrador', 'Sistemas', '11007', 'Administrador', 'Colombia1+*', '1', '123456789'),
(0, 'santiago ', 'Auditoría', '11007', 'savalenciasa', 'Colombia1+*', '5', '1425369');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usertype`
--

CREATE TABLE `usertype` (
  `idTipo` int(11) NOT NULL,
  `nomTipo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usertype`
--

INSERT INTO `usertype` (`idTipo`, `nomTipo`) VALUES
(1, 'SUPERADMIN'),
(2, 'TENDERO'),
(3, 'CLIENTE');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProducto`);

--
-- Indices de la tabla `usertbl`
--
ALTER TABLE `usertbl`
  ADD PRIMARY KEY (`username`);

--
-- Indices de la tabla `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`idTipo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idProducto` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `usertype`
--
ALTER TABLE `usertype`
  MODIFY `idTipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
