-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-04-2025 a las 23:40:34
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `x_pruebas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_pass`
--

CREATE TABLE `usuarios_pass` (
  `ID` int(11) NOT NULL,
  `USUARIOS` varchar(20) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `usuarios_pass`
--

INSERT INTO `usuarios_pass` (`ID`, `USUARIOS`, `PASSWORD`) VALUES
(1, 'JUAN', '1234'),
(2, 'MARIA', '1234'),
(5, 'ANTONIO', '$2y$12$SjTPuPCsBNwOaFEkQHa7cuS374sheFKSyZc/r3fCdcU6LH/g1mCH.'),
(6, 'SANDRA', '$2y$12$hX/kF4mPRBcINm2SoX1ZNO8G.Jn7hYAxiDLXkJRoQGcNcZMcJYLvi'),
(7, 'CARMEN', '$2y$12$vkF9LIaIKyMi9b19aZIeueGfMJwfsdQZTkPyCFKB0x2trh7v/ktAe');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios_pass`
--
ALTER TABLE `usuarios_pass`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios_pass`
--
ALTER TABLE `usuarios_pass`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
