-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-03-2023 a las 03:54:53
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `evaluación`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carros`
--

CREATE TABLE `carros` (
  `id` int(11) NOT NULL,
  `marca` text NOT NULL,
  `modelo` text NOT NULL,
  `motor` text NOT NULL,
  `transmision` text NOT NULL,
  `grupo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `carros`
--

INSERT INTO `carros` (`id`, `marca`, `modelo`, `motor`, `transmision`, `grupo`) VALUES
(1, 'Lamborghini', 'Aventador', 'v12', 'Trasera', 'Hypercar'),
(2, 'Lamborghini', 'Huracan', 'v10', 'Trasera', 'Supercar'),
(3, 'Lamborghini', 'Sesto Elemento', 'v10', 'Trasera', 'Supercar'),
(4, 'Lamborghini', 'Veneno', 'v12', 'Trasera', 'Hypercar'),
(5, 'Lamborghini', 'Centenario', 'v12', 'Trasera', 'Hypercar'),
(6, 'Ferrari', '458', 'v8', 'Trasera', 'Supercar'),
(7, 'Ferrari', '488', 'v8', 'Trasera', 'Supercar'),
(8, 'Ferrari', 'f40', 'v8', 'Trasera', 'Classic'),
(9, 'Ferrari', 'f50', 'v12', 'Trasera', 'Classic'),
(10, 'Ferrari', 'FXX-K', 'v12', 'Trasera', 'Hypercar'),
(11, 'Ferrari ', 'FXX-K Evo', 'v12', 'Trasera', 'Hypercar'),
(12, 'Bugatti', 'Chiron', 'w16', 'Trasera', 'Hypercar'),
(13, 'Bugatti', 'Chiron', 'w16', 'Trasera', 'Hypercar'),
(14, 'Bugatti ', 'Centodieci', 'w16', 'Trasera', 'Hypercar'),
(15, 'Bugatti', 'Divo', 'w16', 'Trasera', 'Hypercar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiendita`
--

CREATE TABLE `tiendita` (
  `id` int(11) NOT NULL,
  `producto` varchar(1000) NOT NULL,
  `descripcion` varchar(1000) NOT NULL,
  `precio` double NOT NULL,
  `categoria` varchar(1000) NOT NULL,
  `marca` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `tiendita`
--

INSERT INTO `tiendita` (`id`, `producto`, `descripcion`, `precio`, `categoria`, `marca`) VALUES
(1, 'HyperX Alloy Origins 60', 'Teclado gamer para jugar', 2000, 'Teclado', 'HyperX'),
(2, 'HyperX Cloud 2', 'Audifonos gamer para jugar y escuchar musica', 2100, 'Audifonos', 'HyperX'),
(3, 'Logitech g502 Lightspeed', 'Mouse gamer escencial para aquellos que se adentran en el mundo de los videjuegos competitivos.', 3000, 'Mouse', 'Logitech'),
(4, 'Logitech g203', 'Mouse gamer de gama baja, muy bueno para las personas que adquieren su primer mouse gamer.', 400, 'Mouse', 'Logitech'),
(5, 'Logitech g213', 'Teclado gamer de membrana con sensacion mecanica, es bueno para las personas que usen la computadora seguido pero de forma moderada.', 1200, 'Teclado', 'Logitech '),
(6, 'Logitech G512', 'Teclado gamer mecanico muy bueno con iluminacion RGB de la marca logitech', 2300, 'Teclado ', 'Logitech'),
(7, 'Logitech g502x', 'Mouse gamer de gama alta, el actual exponente numero uno de la marca logitech ', 8000, 'Mouse', 'Logitech '),
(8, 'Razer Viper Mini', 'Mouse gamer gama baja, cuenta con iluminacion RGB y clicks de buena calidad', 500, 'Mouse', 'Razer'),
(9, 'Razer Huntsman Mini', 'Teclado gamer de buena calidad, teclado del estilo sesenta porciento, iluminacion rgb, switches opticos cherry mx y una pcb de nueva generacion con retroceso de 1ms', 3200, 'Teclado', 'Razer'),
(10, 'Razer Black Widow', 'Teclado gamer de tipo completo, teclado de ultima generacion con iluminacion rgb, mecanico con switches red y una pcb con muy poco retroceso ', 2000, 'Teclado ', 'Razer'),
(11, 'Razer Huntsman Tournament Edition V2', 'Teclado gamer tipo completo, mecanico y cuenta con iluminacion rgb.', 2000, 'Teclado ', 'Razer'),
(12, 'Razer Kraken', 'Audifonos gamer de alta calidad que vienen con microfono, compatibles con consola, pc y celulares.', 1000, 'Audifonos', 'Razer'),
(13, 'Razer Hammerhead', 'Audifonos gamer inalambricos de alta calidad, compatibles con celular, consola y computadora.', 1000, 'Audifonos', 'Razer'),
(14, 'Razer DeathAdder Essential', 'Mouse gamer alambrico con sensor de gama baja e iluminacion rgb ', 500, 'Mouse', 'Razer'),
(15, 'Razer Basilisk', 'Mouse gamer de gama alta escencial para los jugadores competitivos.', 1400, 'Mouse', 'Razer'),

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carros`
--
ALTER TABLE `carros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tiendita`
--
ALTER TABLE `tiendita`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carros`
--
ALTER TABLE `carros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `tiendita`
--
ALTER TABLE `tiendita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
