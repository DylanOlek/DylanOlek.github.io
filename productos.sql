-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-02-2023 a las 02:38:28
-- Versión del servidor: 10.1.39-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda_online`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `precio` double NOT NULL,
  `descripcion` varchar(300) COLLATE utf8_spanish_ci NOT NULL,
  `color` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `existencia` int(11) NOT NULL,
  `marca` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `medida` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `precio`, `descripcion`, `color`, `existencia`, `marca`, `medida`) VALUES
(1, 'Asus TUF-RTX4090-O24G-GAMING Tarjeta gráfica TUF Gaming GeForce RTX 4090 OC Edition, Arquitectura Nvidia RTX 4000, PCIe 4.0, 24GB GDDR6X, HDMI/ DP', 53, '0', 'none', 17, 'Asus', '42.67 x 26.67 x 10.06 cm'),
(2, 'MSI Gaming GeForce GTX 1650 128 bits HDMI/DP/DVI 4GB GDRR6 HDCP Compatible con Tarjeta gráfica DirectX 12 VR Ready OC (GTX 1650 D6 Ventus XS OC)', 4, '0', 'none', 200, 'MSI', '17.78 x 3.81 x 11.18 cm'),
(3, 'Logitech G Mouse óptico inalámbrico 502 X Plus Lightspeed con interruptores híbridos LIGHTFORCE, LIGHTSYNC RGB, Sensor de Juego Hero 25K, Compatible con PC - MacOS/Windows - Negro', 4, 'Mouse gamer rgb, con mas de 10,000 de dpi y un sensor de ultima generacion ;)', 'negro', 300, 'Logitech G', '18.03 x 11.68 x 6.86 cm'),
(4, 'Logitech G502 LIGHTSPEED Mouse Gaming Inalámbrico, HERO 25K, 25,600 DPI, RGB, Peso Reducido, 11 Botones Programables, Batería Larga Duración, POWERPLAY-compatibile, PC, Negro', 2, 'Maus gueimer', 'negro', 100, 'Logitech G', '6.8 x 11.5 x 17.2 cm'),
(5, 'Logitech G203 LIGHTSYNC Mouse Gaming con Iluminación RGB Personalizable, 6 Botones Programables Seguimiento de hasta 8,000 DPI, Ultra-ligero - Negro', 599, 'Maus menos gueimer', 'Negro/Blanco', 1000, 'Logitech G', '3.82 x 6.21 x 11.66 cm'),
(6, 'Logitech G213 Prodigy Teclado Gaming en inglés, RGB LIGHTSYNC, Teclas retroiluminadas, Resistente a Salpicaduras, Teclas personalizables, Controles Multimedia Dedicados - Negro', 1, 'teclado gueimer', 'negro', 1000, 'Logitech G', '45 x 21.8 x 1 cm'),
(7, 'Logitech G513 RGB Backlit Mechanical Gaming Keyboard with GX Blue Clicky Key Switches (Carbon)', 2, 'teclado gueimer', 'negro', 1000, 'Logitech G', '44.45 x 12.95 x 3.56 cm'),
(8, 'Razer BlackWidow V3 Mini HyperSpeed StandardWindows Vista;Windows XP;Mac;Linux', 2, 'teclado gueimer', 'negro', 50, 'Razer', '13.06 x 4.09 x 31.88 cm'),
(9, 'Razer Viper 8KHz - Mouse Gamer Ambidiestro Negro con iluminacion Chroma RGB StandardWindows Vista; Windows XP; Mac; Linux', 1, 'mouse gueimer', 'negro', 200, 'Razer', '6.63 x 12.67 x 3.78 cm'),
(10, 'Razer Huntsman Tournament Edition – Optical Gaming Keyboard (87 Key) - US Layout', 3, 'teclado gueimer', 'negro', 100, 'Razer', '14.07 x 36.25 x 3.68 cm');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
