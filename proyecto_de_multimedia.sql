-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-11-2017 a las 22:04:52
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
-- Estructura de tabla para la tabla `administrador_alumno`
--

CREATE TABLE `administrador_alumno` (
  `id_administradorALU` int(30) NOT NULL,
  `administrador_rut` int(8) NOT NULL,
  `clave_administrador` varchar(40) NOT NULL,
  `rut_super` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador_archivo`
--

CREATE TABLE `administrador_archivo` (
  `id_administradorAR` int(30) NOT NULL,
  `rut_administrador` int(8) NOT NULL,
  `clave_administrador` varchar(30) NOT NULL,
  `rut_super` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivos`
--

CREATE TABLE `archivos` (
  `nombre` varchar(20) NOT NULL,
  `id_archivo` int(30) NOT NULL,
  `id_administradorAR` int(30) NOT NULL,
  `rut_usuario` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contador`
--

CREATE TABLE `contador` (
  `fecha` date NOT NULL,
  `cantidad` int(3) NOT NULL,
  `rut_usuario` int(8) NOT NULL,
  `id_contador` int(25) NOT NULL,
  `id_archivo` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `super_usario`
--

CREATE TABLE `super_usario` (
  `rut` int(8) NOT NULL,
  `clave` varchar(40) NOT NULL,
  `codigo_verificador` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `rut_usuario` int(8) NOT NULL,
  `clave_usuario` varchar(40) NOT NULL,
  `facultad` varchar(60) NOT NULL,
  `carrera` varchar(120) NOT NULL,
  `nume_matricula` int(8) NOT NULL,
  `promocion` int(4) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `telefono` int(7) NOT NULL,
  `domicilio` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `id_administradorALU` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador_alumno`
--
ALTER TABLE `administrador_alumno`
  ADD PRIMARY KEY (`id_administradorALU`),
  ADD KEY `Fk_administrador_alumno_super_usario` (`rut_super`);

--
-- Indices de la tabla `administrador_archivo`
--
ALTER TABLE `administrador_archivo`
  ADD PRIMARY KEY (`id_administradorAR`),
  ADD KEY `FK_administrador_archivo_SUPER_USARIO` (`rut_super`);

--
-- Indices de la tabla `archivos`
--
ALTER TABLE `archivos`
  ADD PRIMARY KEY (`id_archivo`),
  ADD KEY `FK_ARCHIVOS_USUARIO` (`rut_usuario`),
  ADD KEY `FK_ARCHIVOS_ADMINISTRADOR_ARCHIVO` (`id_administradorAR`);

--
-- Indices de la tabla `contador`
--
ALTER TABLE `contador`
  ADD PRIMARY KEY (`id_contador`),
  ADD KEY `fk_contador_usuario` (`rut_usuario`),
  ADD KEY `fk_contador_archivos` (`id_archivo`);

--
-- Indices de la tabla `super_usario`
--
ALTER TABLE `super_usario`
  ADD PRIMARY KEY (`rut`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`rut_usuario`),
  ADD KEY `FK_USUARIO_ADIMISTRADOR_ALUMNO` (`id_administradorALU`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador_alumno`
--
ALTER TABLE `administrador_alumno`
  MODIFY `id_administradorALU` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `administrador_archivo`
--
ALTER TABLE `administrador_archivo`
  MODIFY `id_administradorAR` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `archivos`
--
ALTER TABLE `archivos`
  MODIFY `id_archivo` int(30) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrador_alumno`
--
ALTER TABLE `administrador_alumno`
  ADD CONSTRAINT `Fk_administrador_alumno_super_usario` FOREIGN KEY (`rut_super`) REFERENCES `super_usario` (`rut`);

--
-- Filtros para la tabla `administrador_archivo`
--
ALTER TABLE `administrador_archivo`
  ADD CONSTRAINT `FK_administrador_archivo_SUPER_USARIO` FOREIGN KEY (`rut_super`) REFERENCES `super_usario` (`rut`);

--
-- Filtros para la tabla `archivos`
--
ALTER TABLE `archivos`
  ADD CONSTRAINT `FK_ARCHIVOS_ADMINISTRADOR_ARCHIVO` FOREIGN KEY (`id_administradorAR`) REFERENCES `administrador_archivo` (`id_administradorAR`),
  ADD CONSTRAINT `FK_ARCHIVOS_USARIO` FOREIGN KEY (`rut_usuario`) REFERENCES `usuario` (`rut_usuario`),
  ADD CONSTRAINT `FK_ARCHIVOS_USUARIO` FOREIGN KEY (`rut_usuario`) REFERENCES `usuario` (`rut_usuario`);

--
-- Filtros para la tabla `contador`
--
ALTER TABLE `contador`
  ADD CONSTRAINT `fk_contador_archivos` FOREIGN KEY (`id_archivo`) REFERENCES `archivos` (`id_archivo`),
  ADD CONSTRAINT `fk_contador_usuario` FOREIGN KEY (`rut_usuario`) REFERENCES `usuario` (`rut_usuario`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `FK_USUARIO_ADIMISTRADOR_ALUMNO` FOREIGN KEY (`id_administradorALU`) REFERENCES `administrador_alumno` (`id_administradorALU`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
