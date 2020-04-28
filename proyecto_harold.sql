-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-04-2020 a las 01:36:15
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_harold`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entradas`
--

CREATE TABLE `entradas` (
  `id` int(9) NOT NULL,
  `usuario_id` int(9) NOT NULL,
  `fecha` date NOT NULL,
  `descripcion` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `entradas`
--

INSERT INTO `entradas` (`id`, `usuario_id`, `fecha`, `descripcion`) VALUES
(1, 1, '2020-03-15', 'Hoy estoy practicando mi conocimiento, espero que todo me salga bien, les mando un fuerte saludo y cuídense del coronavirus por favor.'),
(2, 7, '2020-03-17', 'Esto es una confesion de prueba y la verdad me aburre esta mrd del coronavirus.'),
(3, 1, '2020-03-18', 'esto es una prueba'),
(4, 1, '2020-03-18', 'Dia 3 sobreviviendo al estado de emergencia que decreto el presidente por la culpa del coronavirus :/'),
(5, 1, '2020-03-18', 'ME ABURRO MUCHO NO SE QUE HACE!!!\r\n'),
(6, 1, '2020-03-18', 'TENGO HAMBRE!!!'),
(7, 1, '2020-03-18', 'Toda mi familia está en casa y esta bien aburrida la cosa'),
(8, 1, '2020-03-18', 'KLK es palabra me da mucha risa jajajaa'),
(9, 1, '2020-03-18', 'Me gusta un chingo el album de BAD BUNNY'),
(10, 1, '2020-03-18', 'Esto sigue siendo una prueba xddddddd'),
(11, 1, '2020-03-18', 'mi mama me mima');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(9) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellidos` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contraseña` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `email`, `contraseña`) VALUES
(1, 'harold', 'alfaro', 'harold13_98@hotmail.com', 'harold'),
(2, 'nancy', 'chacon', 'nancy@gmail.com', ''),
(3, 'crisa', 'alfaro', 'crisa@gmail.com', 'crisalida'),
(7, 'Fidelia', 'Torobeo', 'fidelia@gmail.com', 'fidelia'),
(8, 'fiorella', 'panta', 'fiorella@gmail.com', 'fiorella'),
(9, 'diego', 'chacon', 'diego@gmail.com', 'diegogo'),
(10, 'diegoasdaasd', 'chaco123', 'diegos@gmail.com', 'diegoooooo'),
(11, 'fred12', 'chacon', 'nancy13@hotmail.com', 'dasdasdasdsad'),
(12, 'Harold', 'Steven', 'haritol@gmail.com', 'haroldddd');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `entradas`
--
ALTER TABLE `entradas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_entradas_usuarios` (`usuario_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uq_email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `entradas`
--
ALTER TABLE `entradas`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `entradas`
--
ALTER TABLE `entradas`
  ADD CONSTRAINT `fk_entradas_usuarios` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
