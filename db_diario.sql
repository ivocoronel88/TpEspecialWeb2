-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-10-2021 a las 02:23:09
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_diario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia`
--

CREATE TABLE `noticia` (
  `id_noticia` int(9) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `Subtitulo` varchar(255) NOT NULL,
  `cuerponoticia` mediumtext NOT NULL,
  `id_secciones` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `noticia`
--

INSERT INTO `noticia` (`id_noticia`, `titulo`, `Subtitulo`, `cuerponoticia`, `id_secciones`) VALUES
(18, 'TituloPolíticaasdasddsaddd', 'SubTituloPolíticadasadsdas', 'CuerPolíticaadsdsadsadsa', 13),
(19, 'TituloPolítica', 'SubTituloPolítica', 'CuerPolítica', 13),
(24, 'EL DIEGO ES EL 1', 'LA CLAUDIA MENTIA', 'EL 86', 22),
(28, 'DIEGO TEAMO', 'DIEGO EL 1', 'DIEGO SIssss', 17),
(30, 'asdasddsa', 'asdasdsad', 'adsasdsda', 29);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secciones`
--

CREATE TABLE `secciones` (
  `id_secciones` int(9) NOT NULL,
  `nombre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `secciones`
--

INSERT INTO `secciones` (`id_secciones`, `nombre`) VALUES
(13, 'Politica'),
(15, 'Cultura'),
(17, 'economia'),
(20, 'La Prueba '),
(22, 'roberto'),
(29, 'PEPITO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(9) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `email`, `password`) VALUES
(5, 'admin', '$2y$10$7I2xQyAvmuYidOaSoHDSXOpDHKck4zMtq6sZTyXs5jqGIy6trOyE6'),
(6, 'user', '$2y$10$vZDgkm8Sl4Pz8qhSyaCcpeDNJNIUxNnRa9yXs.4jB3fdN0Tb.rNLq'),
(7, '123', '$2y$10$1IJyEmSLaxZ76xl1xnKFHu5pL.ibn5NDlwPS5byMO0VI/e2ewVPL2'),
(8, 'test', '$2y$10$Qfzq27mNGfm/swBV5Ga5d.WFOsXNb7MJ4Sm1aANP21IwYXN/jTFFG');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`id_noticia`),
  ADD KEY `id_secciones` (`id_secciones`);

--
-- Indices de la tabla `secciones`
--
ALTER TABLE `secciones`
  ADD PRIMARY KEY (`id_secciones`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `noticia`
--
ALTER TABLE `noticia`
  MODIFY `id_noticia` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `secciones`
--
ALTER TABLE `secciones`
  MODIFY `id_secciones` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `noticia`
--
ALTER TABLE `noticia`
  ADD CONSTRAINT `noticia_ibfk_1` FOREIGN KEY (`id_secciones`) REFERENCES `secciones` (`id_secciones`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
