-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-12-2017 a las 17:31:11
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectomultimedia`
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

--
-- Volcado de datos para la tabla `administrador_alumno`
--

INSERT INTO `administrador_alumno` (`id_administradorALU`, `administrador_rut`, `clave_administrador`, `cod_verificador`, `id_superUsuario`) VALUES
(10, 11758861, 'qwer', '0', 1);

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
  `nombre` varchar(100) NOT NULL,
  `tipo_archivo` varchar(70) NOT NULL,
  `id_archivo` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `archivos`
--

INSERT INTO `archivos` (`nombre`, `tipo_archivo`, `id_archivo`) VALUES
('Certificado de estudiante regular', 'Certificados de estudiantes regulares y para egresados', 1),
('Certificado de concentracion de notas para estudiantes regulares', 'Certificados de estudiantes regulares y para egresados', 2),
('Certificado de que fue estudiante regular', 'Certificados de estudiantes regulares y para egresados', 3),
('Inscribir asignaturas sin requisito previo', 'Solicitudes a la directora de Gestion Curricular', 4),
('Retiro de la carrera', 'Solicitudes a la directora de Gestion Curricular', 5),
('Postergacion de pruebas finales', 'Solicitudes a la directora de Gestion Curricular', 6),
('Prorroga de Seminario, Tesis o Proyecto de Titulo', 'Solicitudes a la directora de Gestion Curricular', 7),
('Transferencia interna', 'Solicitudes a la directora de Gestion Curricular', 8),
('Tercera oportunidad de una asignatura', 'Solicitudes a la directora de Gestion Curricular', 9),
('Homologaciones', 'Solicitudes a la directora de Gestion Curricular', 10),
('Suspension del periodo academico', 'Solicitudes a la directora de Gestion Curricular', 11),
('Modificacion de matricula', 'Solicitudes a la directora de Gestion Curricular', 12),
('Inscribir seminario con una asignatura', 'Solicitudes a la directora de Gestion Curricular', 13),
('Matricula fuera de plazo', 'Solicitudes a la directora de Gestion Curricular', 14),
('Inscribir mas creditos de los contemplados en el plan de estudio', 'Solicitudes a la directora de Gestion Curricular', 15),
('Inscribir Memoria', 'Solicitudes a la directora de Gestion Curricular', 16);

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
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `id_estado` int(50) NOT NULL,
  `check_jefcarr` int(1) NOT NULL DEFAULT '0',
  `check_aranceles` int(1) NOT NULL DEFAULT '0',
  `check_dae` int(1) NOT NULL DEFAULT '0',
  `check_bibloteca` int(1) NOT NULL DEFAULT '0',
  `nombre` varchar(100) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `id_usuario` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`id_estado`, `check_jefcarr`, `check_aranceles`, `check_dae`, `check_bibloteca`, `nombre`, `tipo`, `fecha`, `id_usuario`) VALUES
(1, 1, 1, 1, 1, 'Certificado de estudiante regular', 'Certificados de estudiantes regulares y para egresados', '2017-12-14', 1),
(2, 0, 0, 0, 0, 'Tercera oportunidad de una asignatura', 'Solicitudes a la directora de Gestion Curricular', '2017-12-21', 1);

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

--
-- Volcado de datos para la tabla `super_usario`
--

INSERT INTO `super_usario` (`id_superUsuario`, `rut`, `clave`, `codigo_verificador`) VALUES
(1, 19274711, '1234', '2');

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
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `rut_usuario`, `clave_usuario`, `apellido_parterno`, `apellido_materno`, `facultad`, `carrera`, `nume_matricula`, `promocion`, `nombre`, `telefono`, `domicilio`, `fecha`, `id_verificador`, `id_administradorALU`) VALUES
(1, 18784242, 'asd', 'Parada', 'Soto', 'Facultad de ciencias', 'Ingenieria en Informatica', 18784242, 2013, 'Cristobal Sebastian', 515210, 'Calle Siempreviva 742', '2017-12-12', '4', 10);

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
  ADD PRIMARY KEY (`id_archivo`);

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
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id_estado`),
  ADD KEY `FK_estados_usuario` (`id_usuario`);

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
  MODIFY `id_administradorALU` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
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
  MODIFY `id_archivo` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
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
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `id_estado` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `secretaria`
--
ALTER TABLE `secretaria`
  MODIFY `id_secretaria` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
-- Filtros para la tabla `estados`
--
ALTER TABLE `estados`
  ADD CONSTRAINT `FK_estados_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
