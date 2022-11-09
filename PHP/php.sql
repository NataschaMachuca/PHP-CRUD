-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-11-2022 a las 14:00:26
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `php`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aprendiz`
--

CREATE TABLE `aprendiz` (
  `ID` int(3) NOT NULL,
  `NOMBRE` varchar(30) NOT NULL,
  `APELLIDO` varchar(30) NOT NULL,
  `CORREO` varchar(50) NOT NULL,
  `TELEFONO` int(20) NOT NULL,
  `PROGRAMA` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `aprendiz`
--

INSERT INTO `aprendiz` (`ID`, `NOMBRE`, `APELLIDO`, `CORREO`, `TELEFONO`, `PROGRAMA`) VALUES
(1, 'Alejandro', 'Fierro', 'alejo@gmail.com', 98765432, 'Gestion de mercados'),
(2, 'Andres', 'Silva', 'Andresilva@gmail.com', 345678, 'ADSO'),
(3, 'Samanta', 'Orjuela', 'Samanta@gmail.com', 51093639, 'Restaurante y Bar'),
(4, 'Eduar', 'Machuca', 'David12345@gmail.com', 302456789, 'Atención integral a la primera infancia.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coordinador`
--

CREATE TABLE `coordinador` (
  `ID` int(3) NOT NULL,
  `NOMBRE` varchar(30) NOT NULL,
  `APELLIDO` varchar(30) NOT NULL,
  `CORREO` varchar(50) NOT NULL,
  `PROGRAMA` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `coordinador`
--

INSERT INTO `coordinador` (`ID`, `NOMBRE`, `APELLIDO`, `CORREO`, `PROGRAMA`) VALUES
(2, 'Andres', 'Orjuela', 'Andi@gmail.com', 'ADSI'),
(3, 'Agusto', 'Paredes', 'paredesgarcia@gmail.com', 'Cocina y Bar'),
(4, 'Juan', 'Rojas', 'juan1021@gmail.com', 'Pastelería.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `novedad`
--

CREATE TABLE `novedad` (
  `ID` int(3) NOT NULL,
  `TIPO` text NOT NULL,
  `DESCRPCION` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `novedad`
--

INSERT INTO `novedad` (`ID`, `TIPO`, `DESCRPCION`) VALUES
(1, 'Queja', 'Al ser impactado por la bala, Rodolfo emitió una queja ahogada y se desvaneció[]'),
(2, 'Reclamo', 'La empresa no acepta reclamos una vez que el cliente ha comprobado la calidad del producto'),
(3, 'Queja', 'No ha llegado el pedido desde la semana pasada');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aprendiz`
--
ALTER TABLE `aprendiz`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `coordinador`
--
ALTER TABLE `coordinador`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `novedad`
--
ALTER TABLE `novedad`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aprendiz`
--
ALTER TABLE `aprendiz`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `coordinador`
--
ALTER TABLE `coordinador`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `novedad`
--
ALTER TABLE `novedad`
  MODIFY `ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
