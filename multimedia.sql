-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-11-2017 a las 09:59:51
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `multimedia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador alumno`
--

CREATE TABLE IF NOT EXISTS `administrador alumno` (
  `id administradorALU` int(30) NOT NULL,
  `administrador rut` int(8) NOT NULL,
  `clave administrador` varchar(40) NOT NULL,
  `rut super` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador archivo`
--

CREATE TABLE IF NOT EXISTS `administrador archivo` (
  `id administrador archivo` int(30) NOT NULL,
  `rut administrador` int(8) NOT NULL,
  `clave administrador` varchar(30) NOT NULL,
  `rut super` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivos`
--

CREATE TABLE IF NOT EXISTS `archivos` (
  `nombre` varchar(20) NOT NULL,
  `id archivo` int(30) NOT NULL,
  `id administradorAR` int(30) NOT NULL,
  `rut usuario` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contador`
--

CREATE TABLE IF NOT EXISTS `contador` (
  `fecha` date NOT NULL,
  `cantidad` int(3) NOT NULL,
  `rut usuario` int(8) NOT NULL,
  `id` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `super usario`
--

CREATE TABLE IF NOT EXISTS `super usario` (
  `rut` int(8) NOT NULL,
  `clave` varchar(40) NOT NULL,
  `codigo_verificador` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `rut usuario` int(8) NOT NULL,
  `clave usuario` varchar(40) NOT NULL,
  `facultad` varchar(60) NOT NULL,
  `carrera` varchar(120) NOT NULL,
  `nume_matricula` int(8) NOT NULL,
  `promocion` int(4) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `telefono` int(7) NOT NULL,
  `domicilio` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `id administradorALU` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador alumno`
--
ALTER TABLE `administrador alumno`
  ADD PRIMARY KEY (`id administradorALU`);

--
-- Indices de la tabla `administrador archivo`
--
ALTER TABLE `administrador archivo`
  ADD PRIMARY KEY (`id administrador archivo`);

--
-- Indices de la tabla `archivos`
--
ALTER TABLE `archivos`
  ADD PRIMARY KEY (`id archivo`);

--
-- Indices de la tabla `contador`
--
ALTER TABLE `contador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `super usario`
--
ALTER TABLE `super usario`
  ADD PRIMARY KEY (`rut`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`rut usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador alumno`
--
ALTER TABLE `administrador alumno`
  MODIFY `id administradorALU` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `administrador archivo`
--
ALTER TABLE `administrador archivo`
  MODIFY `id administrador archivo` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `archivos`
--
ALTER TABLE `archivos`
  MODIFY `id archivo` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `contador`
--
ALTER TABLE `contador`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
