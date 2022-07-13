-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-07-2022 a las 04:14:13
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inmobiliria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inmueble`
--

CREATE TABLE `inmueble` (
  `ID` int(11) NOT NULL,
  `DIRECCION` varchar(200) NOT NULL,
  `DESCRIPCION` text NOT NULL,
  `PRECIO` int(11) NOT NULL,
  `LOTE` varchar(200) NOT NULL,
  `BARRIO` varchar(200) NOT NULL,
  `ESTRATO` varchar(200) NOT NULL,
  `N_HABIT` int(11) NOT NULL,
  `GARAJE` varchar(10) NOT NULL,
  `N_BAÑOS` int(11) NOT NULL,
  `MEDIDAS` int(11) NOT NULL,
  `CIELO_RAZO` varchar(10) NOT NULL,
  `FOTOS` varchar(550) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `inmueble`
--

INSERT INTO `inmueble` (`ID`, `DIRECCION`, `DESCRIPCION`, `PRECIO`, `LOTE`, `BARRIO`, `ESTRATO`, `N_HABIT`, `GARAJE`, `N_BAÑOS`, `MEDIDAS`, `CIELO_RAZO`, `FOTOS`) VALUES
(19, 'CALLE 22A N5W-21 ', 'Con piscina y excelentes vistas a la ría de Aldán y a escasos metros de la playa de Arneles              \r\n                          \r\n                          \r\n                          \r\n                          \r\n                          \r\n                          \r\n                          \r\n            ', 400, '43', 'EL AMPARO', '3', 4, 'si', 2, 243, 'si', 'foto1.jpg,foto2.jpg,foto3.jpg,foto4.jpg,'),
(20, 'KR 7 # 76 - 35', 'Casa para rehabilitar , con parcela de unos 360 m2', 300, '', 'Villareal', '4', 2, 'si', 5, 127, 'no', '9531777.jpg,9531774.jpg,9531807.jpg,'),
(22, 'N/A', 'Trátase dun inmoble nunha estupenda zona da vila, con moitas posibilidades, dada a súa proximidade ao centro, con espazo para construír ou rehabilitar unha bonita vivenda unifamiliar con xardín, moi asollada, dada a súa orientación.', 150, '', 'Villareal', '2', 2, 'no', 1, 120, 'no', '9531774.jpg,9531807.jpg,');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `ID` int(11) NOT NULL,
  `ROL` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`ID`, `ROL`) VALUES
(1, 'ADMIN'),
(2, 'CLIENTE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ID` int(11) NOT NULL,
  `NOMBRES` varchar(550) NOT NULL,
  `ID_ROL` int(11) NOT NULL,
  `CORREO` varchar(200) NOT NULL,
  `PASSWORD` varchar(550) NOT NULL,
  `FECHA` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ID`, `NOMBRES`, `ID_ROL`, `CORREO`, `PASSWORD`, `FECHA`) VALUES
(2, 'JUAN PEREZ', 1, 'jooge1998@gmail.com', 'qwerty123', '2022-07-12 23:18:06');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `inmueble`
--
ALTER TABLE `inmueble`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_ROL` (`ID_ROL`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `inmueble`
--
ALTER TABLE `inmueble`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`ID_ROL`) REFERENCES `roles` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
