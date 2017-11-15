-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-11-2017 a las 21:03:58
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto de multimedia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador alumno`
--

CREATE TABLE `administrador alumno` (
  `id administradorALU` int(30) NOT NULL,
  `administrador rut` int(8) NOT NULL,
  `clave administrador` varchar(40) NOT NULL,
  `rut super` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador archivo`
--

CREATE TABLE `administrador archivo` (
  `id administrador archivo` int(30) NOT NULL,
  `rut administrador` int(8) NOT NULL,
  `clave administrador` varchar(30) NOT NULL,
  `rut super` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivos`
--

CREATE TABLE `archivos` (
  `nombre` varchar(20) NOT NULL,
  `id archivo` int(30) NOT NULL,
  `id administradorAR` int(30) NOT NULL,
  `rut usuario` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `super usario`
--

CREATE TABLE `super usario` (
  `rut` int(8) NOT NULL,
  `clave` varchar(40) NOT NULL,
  `codigo_verificador` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
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
  MODIFY `id archivo` int(30) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
