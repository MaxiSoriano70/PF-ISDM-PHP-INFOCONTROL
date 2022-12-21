-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-04-2022 a las 10:51:01
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `infocontrol`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias`
--

CREATE TABLE `provincias` (
  `idProvincia` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `provincias`
--

INSERT INTO `provincias` (`idProvincia`, `Nombre`) VALUES
(1, 'Buenos Aires'),
(2, 'Catamarca'),
(3, 'Chaco'),
(4, 'Chubut'),
(5, 'Córdoba'),
(6, 'Corrientes'),
(7, 'Entre Ríos'),
(8, 'Formosa'),
(9, 'Jujuy'),
(10, 'La Pampa'),
(11, 'La Rioja'),
(12, 'Mendoza'),
(13, 'Misiones'),
(14, 'Neuquén'),
(15, 'Río Negro'),
(16, 'Salta'),
(17, 'San Juan'),
(18, 'San Luis'),
(19, 'Santa Cruz'),
(20, 'Santa Fe'),
(21, 'Santiago del Estero'),
(22, 'Tierra del Fuego'),
(23, 'Tucumán');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Apellido` varchar(45) NOT NULL,
  `Correo` varchar(45) NOT NULL,
  `Clave` varchar(45) NOT NULL,
  `FechaDeAlta` datetime NOT NULL,
  `Numero` int(11) DEFAULT NULL,
  `idProvincia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `Nombre`, `Apellido`, `Correo`, `Clave`, `FechaDeAlta`, `Numero`, `idProvincia`) VALUES
(1, 'Celeste', 'Severich', 'Celeste@gmail.com', 'Cele12345678', '2022-04-23 04:58:10', 42, 23),
(3, 'Nadia', 'Sosa', 'Sosa@gmail.com', 'Nadia12345678', '2022-04-23 04:58:10', 16, 23),
(4, 'Kevin', 'Gaspar', 'Gaspar@gmail.com', 'Kevin12345678', '2022-04-23 04:58:10', NULL, 9),
(5, 'Vanesa', 'Torres', 'Torres@gmail.com', 'c83643ccde5c32e9a7634315c2353b0513b5e73dbd181', '2022-04-23 04:58:10', NULL, 16),
(6, 'Carlos', 'Benitez', 'Benitez@gmail.com', 'aef117ba0e6da0226c562de9587aed4d1ef2db7c92770', '2022-04-27 00:00:00', 6, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `provincias`
--
ALTER TABLE `provincias`
  ADD PRIMARY KEY (`idProvincia`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `fk_Usuarios_Provincias_idx` (`idProvincia`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_Usuarios_Provincias` FOREIGN KEY (`idProvincia`) REFERENCES `provincias` (`idProvincia`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
