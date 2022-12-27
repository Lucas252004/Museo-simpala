-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-09-2022 a las 16:40:31
-- Versión del servidor: 8.0.26
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `museo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora`
--

CREATE TABLE `bitacora` (
  `idBitacora` int NOT NULL,
  `evento` varchar(45) NOT NULL,
  `fecha` date NOT NULL,
  `Usuario_idUsuario` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `guia`
--

CREATE TABLE `guia` (
  `id_guia` int NOT NULL,
  `nombre_guia` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `guia`
--

INSERT INTO `guia` (`id_guia`, `nombre_guia`) VALUES
(13, 'Bermu'),
(15, 'Leo'),
(16, 'guia_testy');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE `horario` (
  `idhorario` int NOT NULL,
  `hora` time DEFAULT NULL,
  `cupos` int DEFAULT NULL,
  `dia` date DEFAULT NULL,
  `nombre_guia` varchar(45) NOT NULL,
  `idioma_guia` varchar(45) NOT NULL,
  `recorrido_idRecorrido` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `horario`
--

INSERT INTO `horario` (`idhorario`, `hora`, `cupos`, `dia`, `nombre_guia`, `idioma_guia`, `recorrido_idRecorrido`) VALUES
(7, '17:31:00', 9, '2022-09-15', 'Alan', 'ingles', 4),
(8, '17:51:00', 321, '2022-08-31', 'Alan', 'ingles', 4),
(9, '19:03:00', 123, '2022-09-01', 'Alan', 'ingles', 5),
(10, '19:05:00', 11, '2022-09-23', 'Alan', 'ingles', 5),
(11, '15:52:00', 5000, '2000-01-13', 'Bermu', 'espanol', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recorrido`
--

CREATE TABLE `recorrido` (
  `idRecorrido` int NOT NULL,
  `descripcion_recorrido` varchar(5000) NOT NULL,
  `totems` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `recorrido`
--

INSERT INTO `recorrido` (`idRecorrido`, `descripcion_recorrido`, `totems`) VALUES
(4, 'hola', '11'),
(5, '1122121', '12'),
(6, 'raaaaaaaaaaadasss', 'assasaassasa'),
(7, 'recorrido_test', ' assasa asdasd'),
(8, 'recorrido_test_2', '; asdasd; assasa'),
(9, 'recorrido_test_3', ''),
(10, 'recorrido_test_3', ''),
(11, 'recorrido_test_5', 'assasa; asdasd; ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `totem`
--

CREATE TABLE `totem` (
  `idTotem` int NOT NULL,
  `nombre_totem` varchar(45) NOT NULL,
  `imagen` varchar(45) NOT NULL,
  `descripcion_español` varchar(5000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `descripcion_ingles` varchar(5000) NOT NULL,
  `descripcion_portugues` varchar(5000) NOT NULL,
  `ubicacion_totem` varchar(45) NOT NULL,
  `autor_totem` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `totem`
--

INSERT INTO `totem` (`idTotem`, `nombre_totem`, `imagen`, `descripcion_español`, `descripcion_ingles`, `descripcion_portugues`, `ubicacion_totem`, `autor_totem`) VALUES
(19, 'assasa', '../../assets/images/20220914030135.jpg', 'asd', 'daasdasdasd', 'asasdd', 'asdsda', 'sdasdasad'),
(20, 'asdasd', '../../assets/images/20220914030135.jpg', '123', '321', '1111111', 'asdasddsa', 'ssdasdsda');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turno`
--

CREATE TABLE `turno` (
  `idTurno` int NOT NULL,
  `horario` varchar(45) NOT NULL,
  `Usuario_idUsuario` int NOT NULL,
  `Horario_idhorario` int NOT NULL,
  `id_recorrido` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `turno`
--

INSERT INTO `turno` (`idTurno`, `horario`, `Usuario_idUsuario`, `Horario_idhorario`, `id_recorrido`) VALUES
(30, '2022-09-15 17:31:00', 4, 7, 4),
(31, '2022-09-23 19:05:00', 4, 10, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int NOT NULL,
  `nombre_usuario` varchar(50) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nombre_usuario`, `correo`, `password`) VALUES
(3, 'admin', 'admin@gmail.com', 'admin'),
(4, 'usuario', 'usuario@gmail.com', 'usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_admin`
--

CREATE TABLE `usuario_admin` (
  `idUsuario_admin` int NOT NULL,
  `nombre_usuario` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  ADD PRIMARY KEY (`idBitacora`,`Usuario_idUsuario`),
  ADD KEY `fk_Bitacora_Usuario_idx` (`Usuario_idUsuario`);

--
-- Indices de la tabla `guia`
--
ALTER TABLE `guia`
  ADD PRIMARY KEY (`id_guia`);

--
-- Indices de la tabla `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`idhorario`,`recorrido_idRecorrido`),
  ADD KEY `fk_horario_recorrido1_idx` (`recorrido_idRecorrido`);

--
-- Indices de la tabla `recorrido`
--
ALTER TABLE `recorrido`
  ADD PRIMARY KEY (`idRecorrido`);

--
-- Indices de la tabla `totem`
--
ALTER TABLE `totem`
  ADD PRIMARY KEY (`idTotem`);

--
-- Indices de la tabla `turno`
--
ALTER TABLE `turno`
  ADD PRIMARY KEY (`idTurno`,`Usuario_idUsuario`),
  ADD KEY `fk_Turnos_Usuario1_idx` (`Usuario_idUsuario`),
  ADD KEY `fk_Turno_Horario1_idx` (`Horario_idhorario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- Indices de la tabla `usuario_admin`
--
ALTER TABLE `usuario_admin`
  ADD PRIMARY KEY (`idUsuario_admin`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  MODIFY `idBitacora` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `guia`
--
ALTER TABLE `guia`
  MODIFY `id_guia` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `horario`
--
ALTER TABLE `horario`
  MODIFY `idhorario` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `recorrido`
--
ALTER TABLE `recorrido`
  MODIFY `idRecorrido` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `totem`
--
ALTER TABLE `totem`
  MODIFY `idTotem` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `turno`
--
ALTER TABLE `turno`
  MODIFY `idTurno` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuario_admin`
--
ALTER TABLE `usuario_admin`
  MODIFY `idUsuario_admin` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `bitacora`
--
ALTER TABLE `bitacora`
  ADD CONSTRAINT `fk_Bitacora_Usuario` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `usuario` (`idUsuario`);

--
-- Filtros para la tabla `horario`
--
ALTER TABLE `horario`
  ADD CONSTRAINT `fk_horario_recorrido1` FOREIGN KEY (`recorrido_idRecorrido`) REFERENCES `recorrido` (`idRecorrido`);

--
-- Filtros para la tabla `turno`
--
ALTER TABLE `turno`
  ADD CONSTRAINT `fk_Turno_Horario1` FOREIGN KEY (`Horario_idhorario`) REFERENCES `horario` (`idhorario`),
  ADD CONSTRAINT `fk_Turnos_Usuario1` FOREIGN KEY (`Usuario_idUsuario`) REFERENCES `usuario` (`idUsuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
