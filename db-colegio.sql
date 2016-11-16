-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-11-2016 a las 01:33:04
-- Versión del servidor: 5.7.14
-- Versión de PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db-colegio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl-alumnos`
--

CREATE TABLE `tbl-alumnos` (
  `Codigo-Alumnos` int(11) NOT NULL,
  `Extensiones de titulos` char(45) COLLATE latin1_spanish_ci NOT NULL,
  `Codigo-Matricula/traslados` int(11) NOT NULL,
  `Codigo-Reportes/Excusas` int(11) NOT NULL,
  `Codigo-Expulsiones` int(11) NOT NULL,
  `Codigo-ExtensionTitulos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl-aseo`
--

CREATE TABLE `tbl-aseo` (
  `Codigo-Aseo` int(11) NOT NULL,
  `Nombre` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `Identidad` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `Genrro` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `Distribucion de aseo` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `Edificio Asignado` varchar(45) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl-cuentas`
--

CREATE TABLE `tbl-cuentas` (
  `id_cuenta` int(5) NOT NULL,
  `nombre_cuenta` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `tipo_cuenta` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `contraseña_cuenta` varchar(20) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `tbl-cuentas`
--

INSERT INTO `tbl-cuentas` (`id_cuenta`, `nombre_cuenta`, `tipo_cuenta`, `contraseña_cuenta`) VALUES
(1, 'administrador', 'administrador', 'Soy el papá 01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl-datosmedicos`
--

CREATE TABLE `tbl-datosmedicos` (
  `Codigo-DatosMedicos` int(11) NOT NULL,
  `Alergias` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `Enfermedades que padece` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `Tipo Sangre` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `Medicamentos` varchar(45) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl-docentes`
--

CREATE TABLE `tbl-docentes` (
  `Codigo-Docentes` int(11) NOT NULL,
  `Codigo-IngresoCalificaciones` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl-encargado`
--

CREATE TABLE `tbl-encargado` (
  `Codigo-Encargado` int(11) NOT NULL,
  `Nombre Encargado` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `Identidad Encargado` int(11) NOT NULL,
  `Celular` int(11) NOT NULL,
  `Direccion` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `Lugar de trabajo` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `Ocupacion` varchar(45) COLLATE latin1_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl-expulsiones`
--

CREATE TABLE `tbl-expulsiones` (
  `Codigo-Expulsiones` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl-extensiontitulos`
--

CREATE TABLE `tbl-extensiontitulos` (
  `Codigo-ExtensionTitulos` int(11) NOT NULL,
  `Nombre` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `Numero de Titulo` int(11) NOT NULL,
  `Promocion` varchar(45) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl-mantenimiento`
--

CREATE TABLE `tbl-mantenimiento` (
  `Codigo-Mantenimiento` int(11) NOT NULL,
  `Nombre` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `Identidad` int(11) NOT NULL,
  `Genero` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `Turnos` varchar(45) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl-matricula/traslados`
--

CREATE TABLE `tbl-matricula/traslados` (
  `Codigo-Matricula/traslados` int(11) NOT NULL,
  `Codigo-Matriculas` int(11) NOT NULL,
  `Codigo-Encargado` int(11) NOT NULL,
  `Codigo-Traslados` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl-matriculas`
--

CREATE TABLE `tbl-matriculas` (
  `Codigo-Matriculas` int(11) NOT NULL,
  `Nombre del estudiante` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `Apellido` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `Fecha de Nacimiento` datetime NOT NULL,
  `Identidad` int(11) NOT NULL,
  `Genero` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `Direccion` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `Edad` int(11) NOT NULL,
  `Jornada` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `Correo Electronico` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `Telefono` int(11) NOT NULL,
  `Codigo-DatosMedicos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl-reportes/excusas`
--

CREATE TABLE `tbl-reportes/excusas` (
  `Codigo-Reportes/Excusas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl-seguridad`
--

CREATE TABLE `tbl-seguridad` (
  `Codigo-Seguridad` int(11) NOT NULL,
  `Nombre` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `Identidad` int(11) NOT NULL,
  `Genero` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `Area de trabajo` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `Edificio Asignado` varchar(45) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl-transporte`
--

CREATE TABLE `tbl-transporte` (
  `Codigo-Transporte` int(11) NOT NULL,
  `Nombre` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `Identidad` int(11) NOT NULL,
  `Genero` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `Turnos` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `Vehiculo Asignado` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `Ruta` varchar(45) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl-traslados`
--

CREATE TABLE `tbl-traslados` (
  `Codigo-Traslados` int(11) NOT NULL,
  `Nombre del estudiante` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `Nombre del encargado` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `Constancia de conducta` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `Instituto del que se traslada` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `Razon de traslado` varchar(45) COLLATE latin1_spanish_ci NOT NULL,
  `Fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl-alumnos`
--
ALTER TABLE `tbl-alumnos`
  ADD PRIMARY KEY (`Codigo-Alumnos`),
  ADD UNIQUE KEY `idtbl-_UNIQUE` (`Codigo-Alumnos`),
  ADD KEY `fk_tbl-Alumnos_tbl-Matricula/traslados1_idx` (`Codigo-Matricula/traslados`),
  ADD KEY `fk_tbl-Alumnos_tbl-Reportes/Excusas1_idx` (`Codigo-Reportes/Excusas`),
  ADD KEY `fk_tbl-Alumnos_tbl-Expulsiones1_idx` (`Codigo-Expulsiones`),
  ADD KEY `fk_tbl-Alumnos_tbl-ExtensionTitulos1_idx` (`Codigo-ExtensionTitulos`);

--
-- Indices de la tabla `tbl-aseo`
--
ALTER TABLE `tbl-aseo`
  ADD PRIMARY KEY (`Codigo-Aseo`);

--
-- Indices de la tabla `tbl-cuentas`
--
ALTER TABLE `tbl-cuentas`
  ADD PRIMARY KEY (`id_cuenta`);

--
-- Indices de la tabla `tbl-datosmedicos`
--
ALTER TABLE `tbl-datosmedicos`
  ADD PRIMARY KEY (`Codigo-DatosMedicos`),
  ADD UNIQUE KEY `Codigo-DatosMedicos_UNIQUE` (`Codigo-DatosMedicos`);

--
-- Indices de la tabla `tbl-docentes`
--
ALTER TABLE `tbl-docentes`
  ADD PRIMARY KEY (`Codigo-Docentes`),
  ADD KEY `fk_tbl-Docentes_tbl-IngresoCalificaciones1_idx` (`Codigo-IngresoCalificaciones`);

--
-- Indices de la tabla `tbl-encargado`
--
ALTER TABLE `tbl-encargado`
  ADD PRIMARY KEY (`Codigo-Encargado`),
  ADD UNIQUE KEY `Codigo-Encargado_UNIQUE` (`Codigo-Encargado`);

--
-- Indices de la tabla `tbl-expulsiones`
--
ALTER TABLE `tbl-expulsiones`
  ADD PRIMARY KEY (`Codigo-Expulsiones`),
  ADD UNIQUE KEY `Codigo-Expulsiones_UNIQUE` (`Codigo-Expulsiones`);

--
-- Indices de la tabla `tbl-extensiontitulos`
--
ALTER TABLE `tbl-extensiontitulos`
  ADD PRIMARY KEY (`Codigo-ExtensionTitulos`),
  ADD UNIQUE KEY `Codigo-ExtensionTitulos_UNIQUE` (`Codigo-ExtensionTitulos`);

--
-- Indices de la tabla `tbl-mantenimiento`
--
ALTER TABLE `tbl-mantenimiento`
  ADD PRIMARY KEY (`Codigo-Mantenimiento`);

--
-- Indices de la tabla `tbl-matricula/traslados`
--
ALTER TABLE `tbl-matricula/traslados`
  ADD PRIMARY KEY (`Codigo-Matricula/traslados`),
  ADD UNIQUE KEY `Codigo-Matricula/traslados_UNIQUE` (`Codigo-Matricula/traslados`),
  ADD KEY `fk_tbl-Matricula/traslados_tbl-matriculas1_idx` (`Codigo-Matriculas`),
  ADD KEY `fk_tbl-Matricula/traslados_tbl-Encargado1_idx` (`Codigo-Encargado`),
  ADD KEY `fk_tbl-Matricula/traslados_tbl-Traslados1_idx` (`Codigo-Traslados`);

--
-- Indices de la tabla `tbl-matriculas`
--
ALTER TABLE `tbl-matriculas`
  ADD PRIMARY KEY (`Codigo-Matriculas`),
  ADD UNIQUE KEY `Codigo-Matriculas_UNIQUE` (`Codigo-Matriculas`),
  ADD KEY `fk_tbl-matriculas_tbl-DatosMedicos1_idx` (`Codigo-DatosMedicos`);

--
-- Indices de la tabla `tbl-reportes/excusas`
--
ALTER TABLE `tbl-reportes/excusas`
  ADD PRIMARY KEY (`Codigo-Reportes/Excusas`);

--
-- Indices de la tabla `tbl-seguridad`
--
ALTER TABLE `tbl-seguridad`
  ADD PRIMARY KEY (`Codigo-Seguridad`),
  ADD UNIQUE KEY `Codigo-Seguridad_UNIQUE` (`Codigo-Seguridad`);

--
-- Indices de la tabla `tbl-transporte`
--
ALTER TABLE `tbl-transporte`
  ADD PRIMARY KEY (`Codigo-Transporte`);

--
-- Indices de la tabla `tbl-traslados`
--
ALTER TABLE `tbl-traslados`
  ADD PRIMARY KEY (`Codigo-Traslados`),
  ADD UNIQUE KEY `Codigo-Traslado_UNIQUE` (`Codigo-Traslados`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl-alumnos`
--
ALTER TABLE `tbl-alumnos`
  ADD CONSTRAINT `fk_tbl-Alumnos_tbl-Expulsiones1` FOREIGN KEY (`Codigo-Expulsiones`) REFERENCES `tbl-expulsiones` (`Codigo-Expulsiones`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl-Alumnos_tbl-ExtensionTitulos1` FOREIGN KEY (`Codigo-ExtensionTitulos`) REFERENCES `tbl-extensiontitulos` (`Codigo-ExtensionTitulos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl-Alumnos_tbl-Matricula/traslados1` FOREIGN KEY (`Codigo-Matricula/traslados`) REFERENCES `tbl-matricula/traslados` (`Codigo-Matricula/traslados`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl-Alumnos_tbl-Reportes/Excusas1` FOREIGN KEY (`Codigo-Reportes/Excusas`) REFERENCES `tbl-reportes/excusas` (`Codigo-Reportes/Excusas`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl-docentes`
--
ALTER TABLE `tbl-docentes`
  ADD CONSTRAINT `fk_tbl-Docentes_tbl-IngresoCalificaciones1` FOREIGN KEY (`Codigo-IngresoCalificaciones`) REFERENCES `tbl-ingresocalificaciones` (`Codigo-IngresoCalificaciones`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl-matricula/traslados`
--
ALTER TABLE `tbl-matricula/traslados`
  ADD CONSTRAINT `fk_tbl-Matricula/traslados_tbl-Encargado1` FOREIGN KEY (`Codigo-Encargado`) REFERENCES `tbl-encargado` (`Codigo-Encargado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl-Matricula/traslados_tbl-Traslados1` FOREIGN KEY (`Codigo-Traslados`) REFERENCES `tbl-traslados` (`Codigo-Traslados`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl-Matricula/traslados_tbl-matriculas1` FOREIGN KEY (`Codigo-Matriculas`) REFERENCES `tbl-matriculas` (`Codigo-Matriculas`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbl-matriculas`
--
ALTER TABLE `tbl-matriculas`
  ADD CONSTRAINT `fk_tbl-matriculas_tbl-DatosMedicos1` FOREIGN KEY (`Codigo-DatosMedicos`) REFERENCES `tbl-datosmedicos` (`Codigo-DatosMedicos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
