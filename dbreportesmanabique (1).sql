-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3307
-- Tiempo de generación: 06-02-2023 a las 17:40:41
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbreportesmanabique`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `buque`
--

CREATE TABLE `buque` (
  `idreportes_buque` int(11) NOT NULL,
  `Nombre` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `buque`
--

INSERT INTO `buque` (`idreportes_buque`, `Nombre`) VALUES
(1, 'Chiquita Dream'),
(2, 'Okke Henrri'),
(3, 'Garwood'),
(4, 'MSC Celine'),
(5, 'Galloway'),
(6, 'Callao'),
(7, 'As Sara'),
(8, 'Dole Aztec'),
(9, 'Okee Gustav'),
(10, 'Chiquita Passion'),
(11, 'Seaspan Calicanto'),
(12, 'Dole Maya'),
(13, 'As Fiorella'),
(14, 'Hansa Salzburg'),
(15, 'Galani'),
(16, 'Corona J'),
(17, 'San Alberto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `buque_naviera`
--

CREATE TABLE `buque_naviera` (
  `idreportes_buque_naviera` int(11) NOT NULL,
  `idreportes_buque` int(11) NOT NULL,
  `idreportes_naviera` int(11) NOT NULL,
  `no_viaje` int(11) NOT NULL,
  `fecha_atraque` date DEFAULT NULL,
  `atracadero` varchar(5) NOT NULL,
  `proa_vita` varchar(20) DEFAULT NULL,
  `popa_vita` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `buque_naviera`
--

INSERT INTO `buque_naviera` (`idreportes_buque_naviera`, `idreportes_buque`, `idreportes_naviera`, `no_viaje`, `fecha_atraque`, `atracadero`, `proa_vita`, `popa_vita`) VALUES
(193, 2, 2, 1, '2023-01-26', '<scri', '1', '1'),
(194, 5, 2, 1, '2023-01-26', '<scri', '1', '1'),
(302, 5, 2, 1, '2023-01-26', 'Norte', 'aa', 'bb'),
(310, 5, 2, 1, '2023-01-26', 'Norte', 'aa', 'bb'),
(311, 5, 2, 1, '2023-01-26', 'Norte', 'aa', 'bb'),
(312, 5, 2, 1, '2023-01-03', 'sur', 'saf', 'fsa'),
(315, 5, 2, 1, '2023-01-03', 'sur', 'saf', 'fsa'),
(316, 5, 2, 1, '2023-01-03', 'sur', 'saf', 'fsa'),
(317, 5, 2, 1, '2023-01-03', 'sur', 'saf', 'fsa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `linea_naviera`
--

CREATE TABLE `linea_naviera` (
  `idreportes_linea_naviera` int(11) NOT NULL,
  `orden` varchar(50) NOT NULL,
  `hora` time NOT NULL,
  `prefijo` varchar(50) NOT NULL,
  `numero` int(11) NOT NULL,
  `medida` int(11) NOT NULL,
  `posicion` varchar(50) NOT NULL,
  `estado` varchar(10) NOT NULL,
  `observaciones` varchar(50) NOT NULL,
  `otros_movimientos` varchar(20) NOT NULL,
  `id_linea_naviera` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `manabique_usuario`
--

CREATE TABLE `manabique_usuario` (
  `idmanabique_usuario` int(11) NOT NULL,
  `Usuario` varchar(45) DEFAULT NULL,
  `Contraseña` varchar(45) DEFAULT NULL,
  `Estado` int(11) DEFAULT NULL,
  `FechaCreacion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `manabique_usuario`
--

INSERT INTO `manabique_usuario` (`idmanabique_usuario`, `Usuario`, `Contraseña`, `Estado`, `FechaCreacion`) VALUES
(2, 'prueba', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1, '2022-12-08'),
(3, 'prueba2', '111111', 1, '2023-01-13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `naviera`
--

CREATE TABLE `naviera` (
  `idreportes_naviera` int(11) NOT NULL,
  `Nombre` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `naviera`
--

INSERT INTO `naviera` (`idreportes_naviera`, `Nombre`) VALUES
(1, 'Chiquita Logistics'),
(2, 'Agunsa'),
(3, 'Comar'),
(4, 'Omarsa');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `buque`
--
ALTER TABLE `buque`
  ADD PRIMARY KEY (`idreportes_buque`);

--
-- Indices de la tabla `buque_naviera`
--
ALTER TABLE `buque_naviera`
  ADD PRIMARY KEY (`idreportes_buque_naviera`),
  ADD KEY `idreportes_buque` (`idreportes_buque`),
  ADD KEY `idreportes_naviera` (`idreportes_naviera`);

--
-- Indices de la tabla `linea_naviera`
--
ALTER TABLE `linea_naviera`
  ADD PRIMARY KEY (`idreportes_linea_naviera`);

--
-- Indices de la tabla `manabique_usuario`
--
ALTER TABLE `manabique_usuario`
  ADD PRIMARY KEY (`idmanabique_usuario`);

--
-- Indices de la tabla `naviera`
--
ALTER TABLE `naviera`
  ADD PRIMARY KEY (`idreportes_naviera`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `buque`
--
ALTER TABLE `buque`
  MODIFY `idreportes_buque` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `buque_naviera`
--
ALTER TABLE `buque_naviera`
  MODIFY `idreportes_buque_naviera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=318;

--
-- AUTO_INCREMENT de la tabla `linea_naviera`
--
ALTER TABLE `linea_naviera`
  MODIFY `idreportes_linea_naviera` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `manabique_usuario`
--
ALTER TABLE `manabique_usuario`
  MODIFY `idmanabique_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `naviera`
--
ALTER TABLE `naviera`
  MODIFY `idreportes_naviera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `buque_naviera`
--
ALTER TABLE `buque_naviera`
  ADD CONSTRAINT `buque_naviera_ibfk_1` FOREIGN KEY (`idreportes_buque`) REFERENCES `buque` (`idreportes_buque`),
  ADD CONSTRAINT `buque_naviera_ibfk_2` FOREIGN KEY (`idreportes_naviera`) REFERENCES `naviera` (`idreportes_naviera`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
