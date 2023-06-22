-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-06-2023 a las 11:03:43
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `serv_dj`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `serv_dj`
--

CREATE TABLE `serv_dj` (
  `Folio` text NOT NULL,
  `Nombre` text NOT NULL,
  `Apellido Paterno` text NOT NULL,
  `Apellido Materno` text NOT NULL,
  `Correo` text NOT NULL,
  `CURP` text NOT NULL,
  `Telefono` int(15) NOT NULL,
  `EntidadFederativa` text NOT NULL,
  `Alcaldia` text NOT NULL,
  `Evento` text NOT NULL,
  `FechaEvento` text NOT NULL,
  `HoraEvento` text NOT NULL,
  `NumeroInvitados` int(4) NOT NULL,
  `DJ` text NOT NULL,
  `Lugar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `admin_dj` (
  `User` text NOT NULL,
  `Pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `serv_dj`
--
ALTER TABLE `serv_dj`
  ADD PRIMARY KEY (`Folio`(20));


ALTER TABLE `admin_dj`
  ADD PRIMARY KEY (`User`(5));


INSERT INTO `admin_dj`
  VALUES ('admin','admin');
COMMIT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
