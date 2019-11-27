-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-11-2019 a las 20:57:28
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `istic2019`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrovehiculo`
--

CREATE TABLE `registrovehiculo` (
  `id` int(10) NOT NULL,
  `patente` varchar(8) NOT NULL,
  `horaingreso` int(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registrovehiculo`
--

INSERT INTO `registrovehiculo` (`id`, `patente`, `horaingreso`) VALUES
(1, '', 26),
(2, '', 27),
(3, 'BBB111', 27);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(18) NOT NULL,
  `nombre` varchar(50) COLLATE utf32_spanish2_ci NOT NULL,
  `clave` varchar(50) COLLATE utf32_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `clave`) VALUES
(1, 'usuario', 'usuario'),
(2, 'admin', 'admin'),
(3, 'empleado1', 'empleado1'),
(4, 'empleado2', 'empleado2'),
(5, 'matias', '123'),
(6, 'matias', ''),
(7, 'cristian', '456'),
(8, 'cristian', ''),
(9, 'regelio', 'rogelio'),
(10, 'regelio', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculosfacturados`
--

CREATE TABLE `vehiculosfacturados` (
  `patente` varchar(8) NOT NULL,
  `horaingreso` int(50) NOT NULL,
  `horasalida` int(50) NOT NULL,
  `importe` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `vehiculosfacturados`
--

INSERT INTO `vehiculosfacturados` (`patente`, `horaingreso`, `horasalida`, `importe`) VALUES
('GGG777', 27, 27, 4374675),
('GGG777', 27, 27, 4374676),
('BBB111', 27, 27, 4374679);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registrovehiculo`
--
ALTER TABLE `registrovehiculo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registrovehiculo`
--
ALTER TABLE `registrovehiculo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(18) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
