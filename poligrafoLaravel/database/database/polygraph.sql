-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 02-11-2017 a las 20:05:26
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `polygraph`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `itcl_rols`
--

CREATE TABLE `itcl_rols` (
  `id_rol` int(25) UNSIGNED NOT NULL,
  `name_rol` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `description_rol` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `itcl_rols`
--

INSERT INTO `itcl_rols` (`id_rol`, `name_rol`, `description_rol`) VALUES
(1, 'Administrador', 'Usuario administrador del sistema'),
(2, 'Poligrafista', 'Usuario con permisos de poligrafista');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `itcp_appoiments`
--

CREATE TABLE `itcp_appoiments` (
  `id_appoiment` int(25) UNSIGNED NOT NULL,
  `user_id` int(25) UNSIGNED DEFAULT NULL,
  `service_id` int(25) UNSIGNED DEFAULT NULL,
  `company_id` int(25) UNSIGNED DEFAULT NULL,
  `client_id` int(25) UNSIGNED DEFAULT NULL,
  `patient_id` int(25) UNSIGNED DEFAULT NULL,
  `city_appoiment` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `date_appoiment` date DEFAULT NULL,
  `time_appoiment` time DEFAULT NULL,
  `comentary_appoiment` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `status` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `time_arrival` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `itcp_appoiments`
--

INSERT INTO `itcp_appoiments` (`id_appoiment`, `user_id`, `service_id`, `company_id`, `client_id`, `patient_id`, `city_appoiment`, `date_appoiment`, `time_appoiment`, `comentary_appoiment`, `status`, `time_arrival`) VALUES
(49, 1, 5, 1, 2, 182, 'PANAMA', '2017-11-02', '07:00:00', 'asd', 'Asistió', ''),
(50, NULL, 5, 1, 2, 183, 'PANAMA', '2017-11-09', '07:00:00', '', 'Pendiente', ''),
(51, NULL, 5, 2, 3, 184, 'PANAMA', '0000-00-00', '07:00:00', '', 'Pendiente', ''),
(52, 1, 5, 1, 2, 185, 'PANAMA', '2017-11-03', '07:00:00', '', 'Pendiente', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `itcp_budgets`
--

CREATE TABLE `itcp_budgets` (
  `id_budget` int(25) UNSIGNED NOT NULL,
  `company_id` int(45) UNSIGNED NOT NULL,
  `client_id` int(45) UNSIGNED DEFAULT NULL,
  `date_init_budget` date DEFAULT NULL,
  `budgets_register_id` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `total_budget` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `observations` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `itcp_budgets`
--

INSERT INTO `itcp_budgets` (`id_budget`, `company_id`, `client_id`, `date_init_budget`, `budgets_register_id`, `total_budget`, `observations`) VALUES
(1, 1, 3, '2017-08-08', 'SbIN9NVJ', '240', ''),
(2, 2, 4, '2017-10-08', 'iuEEukQ7', '210', ''),
(3, 1, 2, '2017-10-09', '447oYruu', '45', ''),
(4, 1, 3, '2017-10-20', 'ZbMyUSSK', '360', ''),
(5, 2, 5, '2017-10-20', 'g3Nm41lQ', '60', ''),
(6, 1, 1, '2017-10-24', 'lg1Q8G3a', '500', 'primer comentario'),
(7, 1, 1, '2017-10-25', '0bjZN4O9', '360', '123'),
(8, 1, 1, '2017-10-25', 'O9fnzwnU', '1870', 'sdas'),
(9, 1, 1, '2017-10-25', 'NmTvWKem', '540', '12'),
(10, 1, 1, '2017-10-25', 'JSkJ5zmm', '540', '12'),
(11, 1, 1, '2017-10-25', 'kJQ4Tj9w', '760', '123'),
(12, 1, 1, '2017-10-25', 'AVsel1f1', '580', '123'),
(13, 1, 1, '2017-10-25', 'FARBiml7', '1870', '12'),
(14, 1, 1, '2017-10-25', '1QkHoU9Z', '360', '12'),
(15, 1, 1, '2017-10-25', 'mbxLryJn', '390', '13'),
(18, 1, 1, '2017-10-25', 'uXlRt3hR', '580', '123'),
(19, 1, 2, '2017-11-01', 'ZhBp7B3w', '3122', ''),
(20, 1, 2, '2017-11-01', 'O9nMWHAw', '1359', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `itcp_budgets_register`
--

CREATE TABLE `itcp_budgets_register` (
  `id_register_budgets` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `quantity_budget` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `total_budget` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `service_id` int(25) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `itcp_budgets_register`
--

INSERT INTO `itcp_budgets_register` (`id_register_budgets`, `quantity_budget`, `total_budget`, `service_id`) VALUES
('SbIN9NVJ', '10', '100', 5),
('SbIN9NVJ', '15', '300', 6),
('iuEEukQ7', '2', '20', 5),
('iuEEukQ7', '10', '200', 6),
('447oYruu', '1', '10', 5),
('447oYruu', '2', '40', 6),
('ZbMyUSSK', '12', '120', 5),
('ZbMyUSSK', '12', '240', 6),
('g3Nm41lQ', '2', '20', 5),
('g3Nm41lQ', '2', '40', 6),
('lg1Q8G3a', '10', '100', 5),
('lg1Q8G3a', '20', '400', 6),
('0bjZN4O9', '12', '120', 5),
('0bjZN4O9', '12', '240', 6),
('O9fnzwnU', '123', '1230', 5),
('O9fnzwnU', '32', '640', 6),
('NmTvWKem', '12', '120', 5),
('NmTvWKem', '21', '420', 6),
('JSkJ5zmm', '12', '120', 5),
('JSkJ5zmm', '21', '420', 6),
('kJQ4Tj9w', '12', '120', 5),
('kJQ4Tj9w', '32', '640', 6),
('AVsel1f1', '12', '120', 5),
('AVsel1f1', '23', '460', 6),
('FARBiml7', '123', '1230', 5),
('FARBiml7', '32', '640', 6),
('1QkHoU9Z', '12', '120', 5),
('1QkHoU9Z', '12', '240', 6),
('mbxLryJn', '13', '130', 5),
('mbxLryJn', '13', '260', 6),
('uXlRt3hR', '12', '120', 5),
('uXlRt3hR', '23', '460', 6),
('ZhBp7B3w', '123', '1230', 5),
('ZhBp7B3w', '32', '640', 6),
('ZhBp7B3w', '12', '516', 7),
('ZhBp7B3w', '32', '736', 8),
('O9nMWHAw', '12', '120', 5),
('O9nMWHAw', '12', '240', 6),
('O9nMWHAw', '12', '516', 7),
('O9nMWHAw', '21', '483', 8);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `itcp_citys`
--

CREATE TABLE `itcp_citys` (
  `id_city` int(25) UNSIGNED NOT NULL,
  `name_city` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `itcp_citys`
--

INSERT INTO `itcp_citys` (`id_city`, `name_city`) VALUES
(1, 'ciudad de Panama'),
(2, 'Santiago'),
(3, 'Colon');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `itcp_clients`
--

CREATE TABLE `itcp_clients` (
  `id_client` int(25) UNSIGNED NOT NULL,
  `name_client` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `tel_client` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `email_client` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `company_id` int(25) UNSIGNED NOT NULL,
  `city` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `position` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `itcp_clients`
--

INSERT INTO `itcp_clients` (`id_client`, `name_client`, `tel_client`, `email_client`, `company_id`, `city`, `position`) VALUES
(1, 'Jose', '123213', 'jose@cocacola.com', 0, 'caracascas', 'Gerente RRHH'),
(2, 'jose', '231', 'das@asd.com', 1, 'caracas', 'Gerente rrhh'),
(3, 'cliente prueba 1', '21', 'sad@gmail.com', 2, 'caracas', 'd'),
(4, 'rafa', '123', 'qd@dasda.com', 1, '123', 'sada'),
(5, 'prueba success', '4564', 'asdasd@asdas.com', 1, 'caracas', 'dasd'),
(6, 'asdas', '', '', 1, '', ''),
(7, 'as', '', '', 1, '', ''),
(8, 'asd', '12', 'das@asda.com', 1, 'sfdsd', 'asd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `itcp_companys`
--

CREATE TABLE `itcp_companys` (
  `id_company` int(25) UNSIGNED NOT NULL,
  `name_company` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `ruc_company` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `tel_company` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `email_compamy` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `address_company` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `cost_test_pre_employment` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `cost_specific_test` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `cost_routine_test` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `reevaluation_test_cost` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `retention_type` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `itcp_companys`
--

INSERT INTO `itcp_companys` (`id_company`, `name_company`, `ruc_company`, `tel_company`, `email_compamy`, `address_company`, `cost_test_pre_employment`, `cost_specific_test`, `cost_routine_test`, `reevaluation_test_cost`, `retention_type`) VALUES
(1, 'coca coola', '234d', '324', 'cocacola@cocacola.com', 'co', '', '', '', '3', '3.4'),
(2, 'pepsi', '213f', '23324', 'pepsi@pepsi.com', 'sadsa a', '', '', '', '', ''),
(3, 'Zomm', '213asd', '123321', 'zoom@zoom.com', 'zona zoom', '', '', '', '', ''),
(7, 'company 1', '11a11 a', '5555', 'aabb@aabb.com', 'caracas', '221', '', '', '', ''),
(11, 'company 2', 'company 2 22', '555666', 'company@2.company', 'caracas company 2', '34', '45', '56', '23', ''),
(13, 'nueva empresa', 'qwe', '123', 'sda@sad.com', '123', '21', '21', '32', '12', '3.4'),
(14, 'asdas', '1231', '12', 'asdasd@gasda.com', 'asdasd', '', '', '', '', 'ninguno'),
(20, 'sfd', '1424', '343423', 'sdfs@assafs.com', 'asdas', '', '', '', '', 'ninguno');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `itcp_patients`
--

CREATE TABLE `itcp_patients` (
  `id_patient` int(25) UNSIGNED NOT NULL,
  `name_patient` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `last_name_patient` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `ci_patient` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `job_patient` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `phone` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `itcp_patients`
--

INSERT INTO `itcp_patients` (`id_patient`, `name_patient`, `last_name_patient`, `ci_patient`, `job_patient`, `phone`) VALUES
(134, '', '', '', '', ''),
(135, '', '', '', '', ''),
(136, '', '', '', '', ''),
(137, 'ds', 'ds', '', 'ds', ''),
(138, '321', '12', '', '', ''),
(139, 'ew', '', '', '', ''),
(140, '21', '', '', '', ''),
(141, '', '', '', '', ''),
(142, '', '', '', '', ''),
(143, '', '', '', '', ''),
(144, '', '', '', '', ''),
(145, '', '', '', '', ''),
(146, '', '', '', '', ''),
(147, '', '', '', '', ''),
(148, '', '', '', '', ''),
(149, '', '', '', '', ''),
(150, '12', '', '', '', ''),
(151, '12', '', '', '', ''),
(152, '', '', '', '', ''),
(153, 'ds', '', '', '', ''),
(154, 'ds', '', '', '', ''),
(155, '', '', '', '', ''),
(156, '', '', '', '', ''),
(157, 'da', '', '', '', ''),
(158, 'da', '', '', '', ''),
(159, 'da', '', '', '', ''),
(160, 'da', '', '', '', ''),
(161, 'da', '', '', '', ''),
(162, 'sa', '', '', '', ''),
(163, 'dsa', '', '', '', ''),
(164, '', '', '', '', ''),
(165, '2', '', '', '', ''),
(166, '21', '', '', '', ''),
(167, 'sds', '', '', '', ''),
(168, '', '', '', '', ''),
(169, 'ds', '', '', '', ''),
(170, '123', '', '', '', ''),
(171, 'd', '', '', '', ''),
(172, 's', '', '', '', ''),
(173, '', '', '', '', ''),
(174, '', '', '', '', ''),
(175, '', '', '', '', ''),
(176, 'dsa', '', '', '', ''),
(177, 'dsa', '', '', '', ''),
(178, 'dsa', '', '', '', ''),
(179, 'dsa', '', '', '', ''),
(180, 's', '', '', '', ''),
(181, '123', '', '', '', ''),
(182, '123', 'a', '2', 'a', '1'),
(183, 'asaaa', '', '', '', ''),
(184, 's', '', '', '', ''),
(185, 'rafa', 'aaaa', '1222', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `itcp_payments`
--

CREATE TABLE `itcp_payments` (
  `id_payment` int(25) UNSIGNED NOT NULL,
  `tax_invoice_number` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `method_of_payment` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `check_number` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `date_ach` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `full_payment` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `amount_payable` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `observations_payment` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `company_id` int(35) NOT NULL,
  `status_payment` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `date_first_appoiment` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `itcp_payments`
--

INSERT INTO `itcp_payments` (`id_payment`, `tax_invoice_number`, `method_of_payment`, `check_number`, `date_ach`, `full_payment`, `amount_payable`, `observations_payment`, `company_id`, `status_payment`, `date_first_appoiment`) VALUES
(24, '', '', '', '', '10', '', '', 1, 'Pendiente por Facturar', NULL),
(25, '', '', '', '', '0', '', '', 2, 'Pendiente por Facturar', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `itcp_service`
--

CREATE TABLE `itcp_service` (
  `id_service` int(25) UNSIGNED NOT NULL,
  `name_service` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `price_service` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `description_service` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `itcp_service`
--

INSERT INTO `itcp_service` (`id_service`, `name_service`, `price_service`, `description_service`) VALUES
(5, 'Pre-empleo', '10', 'prueba preempleo'),
(6, 'Especifica', '20', 'Prueba especifica para usuarios'),
(7, 'Rutina', '43', 'prueba de rutina'),
(8, 'Reevaluación', '23', 'Prueba de reevaluación');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `itcp_status`
--

CREATE TABLE `itcp_status` (
  `id_status` int(25) UNSIGNED NOT NULL,
  `name_status` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `description_status` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `itcp_status`
--

INSERT INTO `itcp_status` (`id_status`, `name_status`, `description_status`) VALUES
(1, 'Activo', 'Usuario activo del sistema'),
(2, 'Inactivo', 'usuario inactivo del sistema');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `payload` text COLLATE utf8_spanish_ci NOT NULL,
  `last_activity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(25) UNSIGNED NOT NULL,
  `name` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `last_name` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `rol_id` int(25) UNSIGNED NOT NULL,
  `tel` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `last_name`, `password`, `remember_token`, `rol_id`, `tel`, `email`) VALUES
(1, 'Poligrafista27', 'Poligrafista2', '$2y$10$0gDy9g8Kfra3nnerx/UWV.BF3xO5.PCMDxtONm5K8g8RZ42n0F1OG', 'QC68gSZbafm4iQLiW0pryOjzxxAenpn41RqmcYYeG3dq7TnTRk6rreCGyxbq', 2, '23', 'a'),
(2, 'Administrador', 'Administrador', '$2y$10$7pG.q39RWhpYEmZ/Y3gF..1CRYApXz8RPx7QrZf1aDQrOEUhQCqAK', 'NZbSeCcq5tfsC3ywcnPDO0jbcohJDDIVsw0of3Urb7Z6Y0ltI7Sj0Lc6p09l', 1, '', 'admin@admin.com'),
(3, 'poligrafista1', 'poligrafista1 apellido', '$2y$10$pe2SXFONUaa2VXy7nR32CuQ43UdHm1agcUW6xI3AvwA1eH./.pdN.', 'rv8bU2hPEvVu0AH67HGJtgEMxq9EclDMadw1LPm8oHFDVXwWhFYEWqa5GBDi', 2, '123', 'poli1@poli1.com'),
(4, 'Jose', 'Salgado', '123', 'Nx9nj6fUF7r5aqkGMfaYh8WMZM90tVTFawzUg6rGdeSJDPfjU8JrMkzRu6CM', 1, '123', 'salgado@salgado.com'),
(5, 'emilyn ', 'Garcia', '$2y$10$IsuuvMh3PXuPjJaLHy.s0eUcgimdwKrcLtTyiBI8e9ffYarVqu/ru', 'bYaDCy4bQg3tiWFfA8uoopAJo2CdDF5Po2RH2j6DXcQogTjyIjwySq56Es0F', 2, '123', 'egarcia@ilernus.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `itcl_rols`
--
ALTER TABLE `itcl_rols`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `itcp_appoiments`
--
ALTER TABLE `itcp_appoiments`
  ADD PRIMARY KEY (`id_appoiment`),
  ADD KEY `patient_id` (`patient_id`),
  ADD KEY `service_id` (`service_id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `company` (`company_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indices de la tabla `itcp_budgets`
--
ALTER TABLE `itcp_budgets`
  ADD PRIMARY KEY (`id_budget`),
  ADD KEY `company_id` (`company_id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `number_budget` (`budgets_register_id`);

--
-- Indices de la tabla `itcp_budgets_register`
--
ALTER TABLE `itcp_budgets_register`
  ADD KEY `id_register_budgets` (`id_register_budgets`),
  ADD KEY `service_id` (`service_id`);

--
-- Indices de la tabla `itcp_citys`
--
ALTER TABLE `itcp_citys`
  ADD PRIMARY KEY (`id_city`);

--
-- Indices de la tabla `itcp_clients`
--
ALTER TABLE `itcp_clients`
  ADD PRIMARY KEY (`id_client`);

--
-- Indices de la tabla `itcp_companys`
--
ALTER TABLE `itcp_companys`
  ADD PRIMARY KEY (`id_company`);

--
-- Indices de la tabla `itcp_patients`
--
ALTER TABLE `itcp_patients`
  ADD PRIMARY KEY (`id_patient`);

--
-- Indices de la tabla `itcp_payments`
--
ALTER TABLE `itcp_payments`
  ADD PRIMARY KEY (`id_payment`);

--
-- Indices de la tabla `itcp_service`
--
ALTER TABLE `itcp_service`
  ADD PRIMARY KEY (`id_service`);

--
-- Indices de la tabla `itcp_status`
--
ALTER TABLE `itcp_status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `itcl_rols`
--
ALTER TABLE `itcl_rols`
  MODIFY `id_rol` int(25) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `itcp_appoiments`
--
ALTER TABLE `itcp_appoiments`
  MODIFY `id_appoiment` int(25) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT de la tabla `itcp_budgets`
--
ALTER TABLE `itcp_budgets`
  MODIFY `id_budget` int(25) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `itcp_citys`
--
ALTER TABLE `itcp_citys`
  MODIFY `id_city` int(25) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `itcp_clients`
--
ALTER TABLE `itcp_clients`
  MODIFY `id_client` int(25) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `itcp_companys`
--
ALTER TABLE `itcp_companys`
  MODIFY `id_company` int(25) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `itcp_patients`
--
ALTER TABLE `itcp_patients`
  MODIFY `id_patient` int(25) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=186;
--
-- AUTO_INCREMENT de la tabla `itcp_payments`
--
ALTER TABLE `itcp_payments`
  MODIFY `id_payment` int(25) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT de la tabla `itcp_service`
--
ALTER TABLE `itcp_service`
  MODIFY `id_service` int(25) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `itcp_status`
--
ALTER TABLE `itcp_status`
  MODIFY `id_status` int(25) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(25) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
