-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-04-2025 a las 01:52:11
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
-- Base de datos: `halodb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `armas`
--

CREATE TABLE `armas` (
  `id` int(11) NOT NULL,
  `nombre_arma` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `armas`
--

INSERT INTO `armas` (`id`, `nombre_arma`) VALUES
(1, 'Assault Rifle'),
(10, 'Battle Rifle'),
(15, 'Beam Rifle'),
(25, 'Binary Rifle'),
(18, 'Brute Shot'),
(16, 'Carbine'),
(21, 'Concussion Rifle'),
(11, 'DMR'),
(2, 'Energy Sword'),
(20, 'Focus Rifle'),
(14, 'Fuel Rod Gun'),
(8, 'Gravity Hammer'),
(24, 'Incineration Cannon'),
(12, 'Magnum'),
(17, 'Mauler'),
(7, 'Needler'),
(22, 'Plasma Launcher'),
(6, 'Plasma Pistol'),
(13, 'Plasma Rifle'),
(3, 'Rocket Launcher'),
(5, 'Shotgun'),
(4, 'Sniper Rifle'),
(9, 'Spartan Laser'),
(19, 'Spiker'),
(23, 'Sticky Detonator');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facciones`
--

CREATE TABLE `facciones` (
  `id` int(11) NOT NULL,
  `nombre_faccion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `facciones`
--

INSERT INTO `facciones` (`id`, `nombre_faccion`) VALUES
(8, 'Banished'),
(11, 'Brutes'),
(2, 'Covenant'),
(22, 'Crawlers'),
(16, 'Drones'),
(12, 'Elites'),
(19, 'Engineers'),
(3, 'Flood'),
(4, 'Forerunner'),
(13, 'Grunts'),
(9, 'Heretics'),
(15, 'Hunters'),
(5, 'Insurrectionists'),
(14, 'Jackals'),
(21, 'Knights'),
(25, 'Phantoms'),
(7, 'Prometheans'),
(17, 'Prophets'),
(10, 'Sentinels'),
(18, 'Skirmishers'),
(23, 'Soldiers'),
(6, 'Spartan Ops'),
(1, 'UNSC'),
(20, 'Watchers'),
(24, 'Wraiths');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ids`
--

CREATE TABLE `ids` (
  `id` int(11) NOT NULL,
  `nombre_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ids`
--

INSERT INTO `ids` (`id`, `nombre_id`) VALUES
(1, 'Spartan-ID-001'),
(2, 'Spartan-ID-002'),
(3, 'Spartan-ID-003'),
(4, 'Spartan-ID-004'),
(5, 'Spartan-ID-005'),
(6, 'Spartan-ID-006'),
(7, 'Spartan-ID-007'),
(8, 'Spartan-ID-008'),
(9, 'Spartan-ID-009'),
(10, 'Spartan-ID-010'),
(11, 'Spartan-ID-011'),
(12, 'Spartan-ID-012'),
(13, 'Spartan-ID-013'),
(14, 'Spartan-ID-014'),
(15, 'Spartan-ID-015'),
(16, 'Spartan-ID-016'),
(17, 'Spartan-ID-017'),
(18, 'Spartan-ID-018'),
(19, 'Spartan-ID-019'),
(20, 'Spartan-ID-020'),
(21, 'Spartan-ID-021'),
(22, 'Spartan-ID-022'),
(23, 'Spartan-ID-023'),
(24, 'Spartan-ID-024'),
(25, 'Spartan-ID-025');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mapas`
--

CREATE TABLE `mapas` (
  `id` int(11) NOT NULL,
  `nombre_mapa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `mapas`
--

INSERT INTO `mapas` (`id`, `nombre_mapa`) VALUES
(16, 'Assembly'),
(21, 'Blackout'),
(1, 'Blood Gulch'),
(24, 'Breakneck'),
(19, 'Citadel'),
(11, 'Construct'),
(14, 'Epitaph'),
(23, 'Forge World'),
(15, 'Ghost Town'),
(5, 'Guardian'),
(18, 'Heretic'),
(8, 'High Ground'),
(25, 'Infinity'),
(12, 'Isolation'),
(10, 'Last Resort'),
(2, 'Lockout'),
(20, 'Longshore'),
(22, 'Midship'),
(7, 'Narrows'),
(17, 'Orbital'),
(4, 'Sandtrap'),
(13, 'Snowbound'),
(6, 'The Pit'),
(3, 'Valhalla'),
(9, 'Zanzibar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rangos`
--

CREATE TABLE `rangos` (
  `id` int(11) NOT NULL,
  `nombre_rango` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rangos`
--

INSERT INTO `rangos` (`id`, `nombre_rango`) VALUES
(10, 'Brigadier'),
(6, 'Captain'),
(9, 'Colonel'),
(3, 'Corporal'),
(24, 'Elite Major'),
(23, 'Elite Minor'),
(25, 'Elite Ultra'),
(12, 'Field Marshall'),
(19, 'Forerunner'),
(11, 'General'),
(13, 'Hero'),
(17, 'Inheritor'),
(14, 'Legend'),
(8, 'Lt. Colonel'),
(7, 'Major'),
(15, 'Mythic'),
(16, 'Noble'),
(2, 'Private'),
(18, 'Reclaimer'),
(1, 'Recruit'),
(4, 'Sergeant'),
(22, 'Spartan-II'),
(21, 'Spartan-III'),
(20, 'Spartan-IV'),
(5, 'Warrant Officer');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `spartans`
--

CREATE TABLE `spartans` (
  `id` int(11) NOT NULL,
  `gamertag` varchar(50) NOT NULL,
  `nivel` int(11) NOT NULL,
  `nombre_personaje` varchar(50) NOT NULL,
  `bando` varchar(50) NOT NULL,
  `id_rango` int(11) NOT NULL,
  `id_mapa` int(11) NOT NULL,
  `id_arma` int(11) NOT NULL,
  `id_faccion` int(11) NOT NULL,
  `id_identificador` int(11) NOT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `fecha_registro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `spartans`
--

INSERT INTO `spartans` (`id`, `gamertag`, `nivel`, `nombre_personaje`, `bando`, `id_rango`, `id_mapa`, `id_arma`, `id_faccion`, `id_identificador`, `correo`, `telefono`, `fecha_registro`) VALUES
(1, 'MasterChief117', 50, 'John-117', 'UNSC', 1, 1, 1, 1, 1, 'masterchief@unsc.com', '1234567890', '2025-04-10'),
(2, 'ArbiterElite', 45, 'Thel Vadam', 'Covenant', 2, 2, 2, 2, 2, 'arbiter@covenant.com', '0987654321', '2025-04-10');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `armas`
--
ALTER TABLE `armas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre_arma` (`nombre_arma`);

--
-- Indices de la tabla `facciones`
--
ALTER TABLE `facciones`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre_faccion` (`nombre_faccion`);

--
-- Indices de la tabla `ids`
--
ALTER TABLE `ids`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre_id` (`nombre_id`);

--
-- Indices de la tabla `mapas`
--
ALTER TABLE `mapas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre_mapa` (`nombre_mapa`);

--
-- Indices de la tabla `rangos`
--
ALTER TABLE `rangos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre_rango` (`nombre_rango`);

--
-- Indices de la tabla `spartans`
--
ALTER TABLE `spartans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `gamertag` (`gamertag`),
  ADD UNIQUE KEY `correo` (`correo`),
  ADD KEY `id_rango` (`id_rango`),
  ADD KEY `id_mapa` (`id_mapa`),
  ADD KEY `id_arma` (`id_arma`),
  ADD KEY `id_faccion` (`id_faccion`),
  ADD KEY `id_identificador` (`id_identificador`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `armas`
--
ALTER TABLE `armas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `facciones`
--
ALTER TABLE `facciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `ids`
--
ALTER TABLE `ids`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `mapas`
--
ALTER TABLE `mapas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `rangos`
--
ALTER TABLE `rangos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `spartans`
--
ALTER TABLE `spartans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `spartans`
--
ALTER TABLE `spartans`
  ADD CONSTRAINT `spartans_ibfk_1` FOREIGN KEY (`id_rango`) REFERENCES `rangos` (`id`),
  ADD CONSTRAINT `spartans_ibfk_2` FOREIGN KEY (`id_mapa`) REFERENCES `mapas` (`id`),
  ADD CONSTRAINT `spartans_ibfk_3` FOREIGN KEY (`id_arma`) REFERENCES `armas` (`id`),
  ADD CONSTRAINT `spartans_ibfk_4` FOREIGN KEY (`id_faccion`) REFERENCES `facciones` (`id`),
  ADD CONSTRAINT `spartans_ibfk_5` FOREIGN KEY (`id_identificador`) REFERENCES `ids` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
