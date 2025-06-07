-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-02-2025 a las 19:25:15
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sapos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salazar`
--

CREATE TABLE `salazar` (
  `id` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `poder` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `salazar`
--

INSERT INTO `salazar` (`id`, `nombre`, `apellido`, `poder`) VALUES
(1, 'we', 'qwer', 78658),
(2, 'wer', 'qwer', 78658),
(3, 'wer', 'qwer', 78658),
(4, 'wer', 'qwer', 78658),
(5, 'ery', 'eryy', 576389),
(6, 'ery', 'eryy', 576389),
(7, 'ery', 'eryy', 576389),
(8, 'ery', 'eryy', 576389),
(9, 'ery', 'eryy', 576389),
(10, 'ery', 'eryy', 576389);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `salazar`
--
ALTER TABLE `salazar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `salazar`
--
ALTER TABLE `salazar`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
