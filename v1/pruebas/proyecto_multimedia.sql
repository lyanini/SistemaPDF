-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-12-2017 a las 11:52:38
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
-- Base de datos: `proyecto_multimedia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador_alumno`
--

CREATE TABLE `administrador_alumno` (
  `id_administradorALU` int(30) NOT NULL,
  `administrador_rut` int(8) NOT NULL,
  `clave_administrador` varchar(40) NOT NULL,
  `cod_verificador` char(1) NOT NULL,
  `id_superUsuario` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador_archivo`
--

CREATE TABLE `administrador_archivo` (
  `id_administradorAR` int(30) NOT NULL,
  `rut_administrador` int(8) NOT NULL,
  `clave_administrador` varchar(30) NOT NULL,
  `id_verificador` char(1) NOT NULL,
  `id_aranceles` int(30) NOT NULL,
  `id_bibloteca` int(30) NOT NULL,
  `id_dae` int(30) NOT NULL,
  `id_superUsuario` int(50) NOT NULL,
  `id_coordinador` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aranceles`
--

CREATE TABLE `aranceles` (
  `id_aranceles` int(30) NOT NULL,
  `rut_aranceles` int(9) NOT NULL,
  `clave_aranceles` varchar(30) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `numero` int(9) NOT NULL,
  `apellido_materno` varchar(30) NOT NULL,
  `apellido_paterno` varchar(30) NOT NULL,
  `id_verificador` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivos`
--

CREATE TABLE `archivos` (
  `nombre` varchar(20) NOT NULL,
  `id_archivo` int(30) NOT NULL,
  `id_administradorAR` int(30) NOT NULL,
  `id_usuario` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bibloteca`
--

CREATE TABLE `bibloteca` (
  `id_bibloteca` int(30) NOT NULL,
  `rut_bibloteca` int(9) NOT NULL,
  `clave_bibloteca` varchar(30) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `numero` int(9) NOT NULL,
  `apellido_materno` varchar(30) NOT NULL,
  `apellido_paterno` varchar(30) NOT NULL,
  `id_verificador` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contador`
--

CREATE TABLE `contador` (
  `id_contador` int(25) NOT NULL,
  `fecha` date NOT NULL,
  `cantidad` int(3) NOT NULL,
  `id_archivo` int(30) NOT NULL,
  `id_usuario` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `coordinador`
--

CREATE TABLE `coordinador` (
  `rut_coordinador` int(9) NOT NULL,
  `clave` varchar(30) NOT NULL,
  `telefono` int(8) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `id_secretaria` int(50) NOT NULL,
  `id_coordinador` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dae`
--

CREATE TABLE `dae` (
  `id_dae` int(10) NOT NULL,
  `rut_dae` int(9) NOT NULL,
  `clave_dae` varchar(30) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `numero` int(8) NOT NULL,
  `apellido_materno` varchar(30) NOT NULL,
  `apellido_paterno` varchar(30) NOT NULL,
  `id_verificador` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secretaria`
--

CREATE TABLE `secretaria` (
  `rut_secretaria` int(9) NOT NULL,
  `clave` varchar(30) NOT NULL,
  `telefono` int(8) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `id_verificador` char(1) NOT NULL,
  `id_administradorAR` int(30) NOT NULL,
  `id_secretaria` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `super_usario`
--

CREATE TABLE `super_usario` (
  `id_superUsuario` int(50) NOT NULL,
  `rut` int(8) NOT NULL,
  `clave` varchar(40) NOT NULL,
  `codigo_verificador` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(50) NOT NULL,
  `rut_usuario` int(8) NOT NULL,
  `clave_usuario` varchar(40) NOT NULL,
  `apellido_parterno` varchar(40) NOT NULL,
  `apellido_materno` varchar(40) NOT NULL,
  `facultad` varchar(60) NOT NULL,
  `carrera` varchar(120) NOT NULL,
  `nume_matricula` int(8) NOT NULL,
  `promocion` int(4) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `telefono` int(7) NOT NULL,
  `domicilio` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `id_verificador` char(1) NOT NULL,
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
  ADD KEY `fk_administrador_alumno_super_usuario` (`id_superUsuario`);

--
-- Indices de la tabla `administrador_archivo`
--
ALTER TABLE `administrador_archivo`
  ADD PRIMARY KEY (`id_administradorAR`),
  ADD KEY `fk_administrdor_archivo_aranceles` (`id_aranceles`),
  ADD KEY `fk_administrdor_archivo_dae` (`id_dae`),
  ADD KEY `fk_administrdor_archivo_bibloteca` (`id_bibloteca`),
  ADD KEY `fk_administrador_archivo_super_usuario` (`id_superUsuario`),
  ADD KEY `FK_administrador_archivo_COORDINADOR` (`id_coordinador`);

--
-- Indices de la tabla `aranceles`
--
ALTER TABLE `aranceles`
  ADD PRIMARY KEY (`id_aranceles`);

--
-- Indices de la tabla `archivos`
--
ALTER TABLE `archivos`
  ADD PRIMARY KEY (`id_archivo`),
  ADD KEY `FK_ARCHIVOS_ADMINISTRADOR_ARCHIVO` (`id_administradorAR`),
  ADD KEY `fk_archivos_usuario` (`id_usuario`);

--
-- Indices de la tabla `bibloteca`
--
ALTER TABLE `bibloteca`
  ADD PRIMARY KEY (`id_bibloteca`);

--
-- Indices de la tabla `contador`
--
ALTER TABLE `contador`
  ADD PRIMARY KEY (`id_contador`),
  ADD KEY `fk_contador_archivos` (`id_archivo`),
  ADD KEY `fk_contador_usuario` (`id_usuario`);

--
-- Indices de la tabla `coordinador`
--
ALTER TABLE `coordinador`
  ADD PRIMARY KEY (`id_coordinador`),
  ADD KEY `fk_coordinador_secretaria` (`id_secretaria`);

--
-- Indices de la tabla `dae`
--
ALTER TABLE `dae`
  ADD PRIMARY KEY (`id_dae`);

--
-- Indices de la tabla `secretaria`
--
ALTER TABLE `secretaria`
  ADD PRIMARY KEY (`id_secretaria`),
  ADD KEY `fk_secretaria_adminstrador_archivo` (`id_administradorAR`);

--
-- Indices de la tabla `super_usario`
--
ALTER TABLE `super_usario`
  ADD PRIMARY KEY (`id_superUsuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
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
-- AUTO_INCREMENT de la tabla `aranceles`
--
ALTER TABLE `aranceles`
  MODIFY `id_aranceles` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `archivos`
--
ALTER TABLE `archivos`
  MODIFY `id_archivo` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `bibloteca`
--
ALTER TABLE `bibloteca`
  MODIFY `id_bibloteca` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `coordinador`
--
ALTER TABLE `coordinador`
  MODIFY `id_coordinador` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `dae`
--
ALTER TABLE `dae`
  MODIFY `id_dae` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `secretaria`
--
ALTER TABLE `secretaria`
  MODIFY `id_secretaria` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(50) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administrador_alumno`
--
ALTER TABLE `administrador_alumno`
  ADD CONSTRAINT `fk_administrador_alumno_super_usuario` FOREIGN KEY (`id_superUsuario`) REFERENCES `super_usario` (`id_superUsuario`);

--
-- Filtros para la tabla `administrador_archivo`
--
ALTER TABLE `administrador_archivo`
  ADD CONSTRAINT `FK_administrador_archivo_COORDINADOR` FOREIGN KEY (`id_coordinador`) REFERENCES `coordinador` (`id_coordinador`),
  ADD CONSTRAINT `fk_administrador_archivo_super_usuario` FOREIGN KEY (`id_superUsuario`) REFERENCES `super_usario` (`id_superUsuario`),
  ADD CONSTRAINT `fk_administrdor_archivo_aranceles` FOREIGN KEY (`id_aranceles`) REFERENCES `aranceles` (`id_aranceles`),
  ADD CONSTRAINT `fk_administrdor_archivo_bibloteca` FOREIGN KEY (`id_bibloteca`) REFERENCES `bibloteca` (`id_bibloteca`),
  ADD CONSTRAINT `fk_administrdor_archivo_dae` FOREIGN KEY (`id_dae`) REFERENCES `dae` (`id_dae`);

--
-- Filtros para la tabla `archivos`
--
ALTER TABLE `archivos`
  ADD CONSTRAINT `FK_ARCHIVOS_ADMINISTRADOR_ARCHIVO` FOREIGN KEY (`id_administradorAR`) REFERENCES `administrador_archivo` (`id_administradorAR`),
  ADD CONSTRAINT `fk_archivos_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `contador`
--
ALTER TABLE `contador`
  ADD CONSTRAINT `fk_contador_archivos` FOREIGN KEY (`id_archivo`) REFERENCES `archivos` (`id_archivo`),
  ADD CONSTRAINT `fk_contador_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `coordinador`
--
ALTER TABLE `coordinador`
  ADD CONSTRAINT `fk_coordinador_secretaria` FOREIGN KEY (`id_secretaria`) REFERENCES `secretaria` (`id_secretaria`);

--
-- Filtros para la tabla `secretaria`
--
ALTER TABLE `secretaria`
  ADD CONSTRAINT `fk_secretaria_adminstrador_archivo` FOREIGN KEY (`id_administradorAR`) REFERENCES `administrador_archivo` (`id_administradorAR`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `FK_USUARIO_ADIMISTRADOR_ALUMNO` FOREIGN KEY (`id_administradorALU`) REFERENCES `administrador_alumno` (`id_administradorALU`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
