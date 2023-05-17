-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-05-2023 a las 01:36:05
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
-- Base de datos: `mvc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tlfn` varchar(255) NOT NULL,
  `PrfC` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `apellido`, `email`, `tlfn`, `PrfC`) VALUES
(2, 'Alejandro Jose', 'Chacin Rodriguez', 'aadrix0601@gmail.com', '0255-7624153', 'Telefono'),
(4, 'Juan', 'Pérez', 'juan.perez@example.com', '+34 123 456 789', 'email'),
(5, 'María', 'García', 'maria.garcia@example.com', '+34 987 654 321', 'telefono'),
(6, 'Pedro', 'Martínez', 'pedro.martinez@example.com', '+34 555 555 555', 'email'),
(7, 'Ana', 'Sánchez', 'ana.sanchez@example.com', '+34 111 111 111', 'telefono'),
(8, 'Carlos', 'Fernández', 'carlos.fernandez@example.com', '+34 222 222 222', 'email'),
(9, 'Laura', 'Rodríguez', 'laura.rodriguez@example.com', '+34 333 333 333', 'telefono'),
(10, 'David', 'González', 'david.gonzalez@example.com', '+34 444 444 444', 'email'),
(11, 'Carmen', 'López', 'carmen.lopez@example.com', '+34 555 555 555', 'telefono'),
(12, 'Javier', 'Gómez', 'javier.gomez@example.com', '+34 666 666 666', 'email'),
(13, 'Marta', 'Fernández', 'marta.fernandez@example.com', '+34 777 777 777', 'telefono');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `idEmpleado` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `tlfn` varchar(255) NOT NULL,
  `idm` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `fecha` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`idEmpleado`, `nombre`, `apellido`, `tlfn`, `idm`, `salary`, `fecha`) VALUES
(1, 'Juan', 'Pérez', '555-1234', '3', '2500.00', '2020-01-01'),
(2, 'María', 'González', '1555-5678', '1', '3000.00', '2019-05-15'),
(3, 'Carlos', 'Sánchez', '555-9012', '1', '3500.00', '2021-02-10'),
(4, 'Ana', 'Martínez', '555-3456', '3', '4000.00', '2018-09-30'),
(5, 'Luis', 'García', '555-7890', '2', '2800.00', '2022-01-01'),
(6, 'Laura', 'Sánchez', '555-2345', '3', '3200.00', '2021-06-15'),
(7, 'Pedro', 'Ramírez', '555-6789', '4', '4100.00', '2020-03-10'),
(8, 'Marta', 'López', '555-0123', '1', '3800.00', '2019-10-30'),
(9, 'Sofía', 'Hernández', '555-4567', '2', '2900.00', '2022-02-15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--

CREATE TABLE `paises` (
  `idPais` int(11) NOT NULL,
  `iso` varchar(255) NOT NULL,
  `iso3` varchar(255) NOT NULL,
  `isonumeric` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `capital` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `currency` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `paises`
--

INSERT INTO `paises` (`idPais`, `iso`, `iso3`, `isonumeric`, `nombre`, `capital`, `code`, `currency`) VALUES
(1, 'US', 'USA', '840', 'Estados Unidos', 'Washington, D.C.', 'USD', 'United States dollar'),
(2, 'MX', 'MEX', '484', 'Mexico', 'Mexico City', 'MXN', 'Mexican peso'),
(3, 'CA', 'CAN', '124', 'Canadá', 'Ottawa', '+1', 'CAD'),
(4, 'GB', 'GBR', '826', 'Reino Unido', 'London', 'GBP', 'Pound sterling'),
(5, 'JP', 'JPN', '392', 'Japon', 'Tokyo', 'JPY', 'Japanese yen'),
(6, 'FR', 'FRA', '250', 'Francia', 'París', '+33', 'EUR'),
(7, 'DE', 'DEU', '276', 'Alemania', 'Berlín', '+49', 'EUR'),
(8, 'ES', 'ESP', '724', 'España', 'Madrid', '+34', 'EUR'),
(9, 'IT', 'ITA', '380', 'Italia', 'Roma', '+39', 'EUR'),
(10, 'CN', 'CHN', '156', 'China', 'Pekín', '+86', 'CNY'),
(11, 'BR', 'BRA', '076', 'Brasil', 'Brasilia', '+55', 'BRL'),
(12, 'AR', 'ARG', '032', 'Argentina', 'Buenos Aires', '+54', 'ARS');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`idEmpleado`);

--
-- Indices de la tabla `paises`
--
ALTER TABLE `paises`
  ADD PRIMARY KEY (`idPais`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `idEmpleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `paises`
--
ALTER TABLE `paises`
  MODIFY `idPais` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
