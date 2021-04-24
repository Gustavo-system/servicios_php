-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-04-2021 a las 22:37:22
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `servicios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_new_service`
--

CREATE TABLE `registro_new_service` (
  `id` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `genero` varchar(20) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `numero_celular` varchar(10) DEFAULT NULL,
  `correo` varchar(50) NOT NULL,
  `servicio` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `img_foto` varchar(100) NOT NULL,
  `img_identificacion` varchar(100) NOT NULL,
  `img_comprobante` varchar(100) NOT NULL,
  `sobre_el` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro_new_service`
--

INSERT INTO `registro_new_service` (`id`, `nombre`, `genero`, `fecha_nacimiento`, `numero_celular`, `correo`, `servicio`, `estado`, `img_foto`, `img_identificacion`, `img_comprobante`, `sobre_el`) VALUES
(8, 'ana maria flores jimenes', 'femenino', '1974-10-12', '2225176558', 'flor@flor.com', 'Estilista', 'Puebla', 'dibujos-de-tatuajes-4.jpg', 'flecha.png', 'searchSpotify.PNG', 'soy estilista desde hace 10 años y me gusta mi trabajo'),
(9, 'ana maria flores jimenes', 'femenino', '1974-10-12', '2225176558', 'flor@flor.com', 'Estilista', 'Puebla', 'dibujos-de-tatuajes-4.jpg', 'flecha.png', 'searchSpotify.PNG', 'soy estilista desde hace 10 años y me gusta mi trabajo'),
(10, 'gustavo solar gaona', 'masculino', '1999-07-12', '', 'solar@solar.com', 'BarberShop', 'Campeche', 'chale.PNG', 'artistaSpotify.PNG', 'chale.PNG', 'soy un barbero chingon');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registro_new_service`
--
ALTER TABLE `registro_new_service`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registro_new_service`
--
ALTER TABLE `registro_new_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
