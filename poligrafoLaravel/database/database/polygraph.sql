-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 05-10-2017 a las 21:37:00
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
  `service_id` int(25) UNSIGNED NOT NULL,
  `company_id` int(25) UNSIGNED NOT NULL,
  `client_id` int(25) UNSIGNED NOT NULL,
  `patient_id` int(25) UNSIGNED NOT NULL,
  `city_appoiment` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `date_appoiment` date NOT NULL,
  `time_appoiment` time NOT NULL,
  `comentary_appoiment` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `status` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `itcp_appoiments`
--

INSERT INTO `itcp_appoiments` (`id_appoiment`, `user_id`, `service_id`, `company_id`, `client_id`, `patient_id`, `city_appoiment`, `date_appoiment`, `time_appoiment`, `comentary_appoiment`, `status`) VALUES
(8, NULL, 5, 1, 4, 15, 'Ciudad de panama', '2017-09-07', '10:00:00', 'asd', 'Pendiente'),
(9, 2, 5, 2, 4, 2, '2 ', '2017-09-07', '11:00:00', '22 s', 'Procesada'),
(10, NULL, 5, 1, 4, 17, 'Ciudad de panama', '0000-00-00', '01:30:00', 'candidato 1', 'Pendiente'),
(11, NULL, 5, 1, 3, 18, 'Ciudad de panama', '2017-09-02', '10:00:00', 'candidato2', 'Aprobado'),
(12, NULL, 5, 1, 2, 19, 'Ciudad de panama', '2017-09-09', '07:30:00', 'candidato3', 'Pendiente'),
(13, NULL, 5, 1, 2, 20, 'Ciudad de panama', '2017-09-11', '10:00:00', 'empleado5', 'Pendiente'),
(14, NULL, 5, 1, 4, 21, 'Ciudad de panama', '2017-09-14', '10:00:00', 'empleado6', 'Aprobado'),
(15, NULL, 5, 1, 2, 22, 'Ciudad de panama', '2017-09-17', '08:00:00', '312', 'Pendiente'),
(19, NULL, 5, 2, 5, 26, 'Ciudad de panama', '2017-10-03', '11:30:00', '444', 'Pendiente'),
(20, 3, 5, 2, 5, 27, 'Ciudad de panama', '2017-10-04', '11:00:00', '7', 'Re agendada<'),
(21, 2, 5, 1, 3, 28, 'Ciudad de panama', '2017-10-04', '08:30:00', '123 1', 'Pendiente');

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
  `rif_client` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `city_id` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `country_id` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `company_id` int(25) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `itcp_clients`
--

INSERT INTO `itcp_clients` (`id_client`, `name_client`, `tel_client`, `email_client`, `rif_client`, `city_id`, `country_id`, `company_id`) VALUES
(2, 'a', '3', 'ezebarazarte@gmail.com', '', '1', 'a', 1),
(3, 'cleinte 1', '1', 'josetomassalgado91@gmail.com', '', '2', 'a', 1),
(4, 'BG Consultores', '123123', 'jsalgado@gmail.com', '', '2', 'caracas', 2),
(5, 'Axion ti', '123', 'dsa@hotmail.com', '', '2', 'da', 2),
(6, 'alterity solutions', '876', 'iii@g.com', '', '2', 'dsa', 1);

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
  `address_company` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `itcp_companys`
--

INSERT INTO `itcp_companys` (`id_company`, `name_company`, `ruc_company`, `tel_company`, `email_compamy`, `address_company`) VALUES
(1, 'coca coola', '234d', '324', 'cocacola@cocacola.com', 'co'),
(2, 'pepsi', '213f', '23324', 'pepsi@pepsi.com', 'sadsa a'),
(3, 'Zomm', '213asd', '123321', 'zoom@zoom.com', 'zona zoom');

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
(1, 'sal', 'salgado 11', ' 1231231 1', 'cargo a1', '123123 1'),
(2, '22 s', 'salgado s', '1231231 s', 'dasdas|24234| s', '4213 s'),
(3, 'oscar', 'rojas', '31231', '234', '12'),
(4, 'dasd', 'asd', '123', 'asd', '123'),
(5, 'asd', 'asd', '123', 'asd', '123'),
(6, '11', '11', '11', '11', '11'),
(7, '222', '22', '22', '22', '22'),
(8, '111', '11', '111', '11', '11'),
(9, '111', '111', '1', '111', '1'),
(10, '3123', '1231', '123', '123', '123'),
(11, 'Emilyn ', 'Garcia', '312312', 'Especialista', '776'),
(12, '22', '22', '2', '234', '2'),
(13, 'loco4', 'salgado', '3', '234', '2'),
(14, 'loco4', 'asd', '12312', '234', '123'),
(15, 'Ysrrael', 'Sanchez', '23424', 'Programador', '1234'),
(16, '22', '22', '33', '11', '33'),
(17, 'candidato 1', 'candidato 1', '123', 'candidato1@hotmail.com', '123'),
(18, 'candidato2', 'candidato2', '123', 'candidato2', '234'),
(19, 'candidato3', 'candidato3', '34', 'candidato3', '3'),
(20, 'empleado5', 'empleado5', '123', 'empleado5', '324'),
(21, 'empleado6', 'empleado6', '213', 'empleado5', '56'),
(22, '321', '321', '321', '321', '312'),
(23, 'Jose1 1', 'Salgado 22', '43', '123', '123'),
(24, 'Jose 11', 'Salgado 22', '123', '321', '231'),
(25, 'Jose 11', 'Salgado 22', '111', '222', '333'),
(26, 'Jose 11', 'Salgado 22', '111', '222', '333'),
(27, '2', '3', '4', '5', '6'),
(28, 'jose 1', 'salgado 1', '12311123', '123 1', '123123');

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
(5, 'Prueba pre empleo', '123123', 'prueba preempleo'),
(6, 'Prueba especifica', '20', 'Prueba especifica para usuarios');

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
-- Estructura de tabla para la tabla `itcp_users`
--

CREATE TABLE `itcp_users` (
  `id_user` int(25) UNSIGNED NOT NULL,
  `name` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `last_name_user` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_spanish_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `rol_id` int(25) UNSIGNED NOT NULL,
  `tel_user` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `itcp_users`
--

INSERT INTO `itcp_users` (`id_user`, `name`, `last_name_user`, `password`, `remember_token`, `rol_id`, `tel_user`, `email`) VALUES
(1, 'juan', 'hca', '333', NULL, 1, '333', '333@333.com'),
(2, 'pedro', 'picapiedra', 'jose', NULL, 1, 'jose', 'jose'),
(3, 'jesus', 'jose', '222', NULL, 1, '123', 'josepp@h.com'),
(4, 'jose', 'antonia', '$2y$10$ChssUbg80qaHuHkTTGX0HusFHPGxQe3YfDH.mV', NULL, 1, '333', 'jose@jose.com');

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
(1, 'Poligrafista2', 'Poligrafista2', '$2y$10$H0iX9rZ0Pj823fc2Ci5Ddufx4R8oh.5WtWZJUCuTocPLcYcWt5oB6', 'QC68gSZbafm4iQLiW0pryOjzxxAenpn41RqmcYYeG3dq7TnTRk6rreCGyxbq', 2, '', ''),
(2, 'Administrador', 'Administrador', '$2y$10$7pG.q39RWhpYEmZ/Y3gF..1CRYApXz8RPx7QrZf1aDQrOEUhQCqAK', 'gAvStXFdtDl4vN6HJJKp5IgxISYwVnufuEszF2esOxzL3voevZ6oIfWCNAbl', 1, '', 'admin@admin.com'),
(3, 'poligrafista1', 'poligrafista1 apellido', '$2y$10$g.VpFj8K/CZSE27XWh7jp.on5EO4IdAOUn57oDIlUCI2gG/Jsp1Cq', 'IntsDke8GEZcD9VatH9fVaUmiZFjPxcEIx66KfmOqngxBT9fg3lSICnMLJTV', 2, '123', 'poli1@poli1.com');

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
-- Indices de la tabla `itcp_citys`
--
ALTER TABLE `itcp_citys`
  ADD PRIMARY KEY (`id_city`);

--
-- Indices de la tabla `itcp_clients`
--
ALTER TABLE `itcp_clients`
  ADD PRIMARY KEY (`id_client`),
  ADD KEY `city_id` (`city_id`);

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
-- Indices de la tabla `itcp_users`
--
ALTER TABLE `itcp_users`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `rol_id` (`rol_id`);

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
  MODIFY `id_appoiment` int(25) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT de la tabla `itcp_citys`
--
ALTER TABLE `itcp_citys`
  MODIFY `id_city` int(25) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `itcp_clients`
--
ALTER TABLE `itcp_clients`
  MODIFY `id_client` int(25) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `itcp_companys`
--
ALTER TABLE `itcp_companys`
  MODIFY `id_company` int(25) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `itcp_patients`
--
ALTER TABLE `itcp_patients`
  MODIFY `id_patient` int(25) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT de la tabla `itcp_service`
--
ALTER TABLE `itcp_service`
  MODIFY `id_service` int(25) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `itcp_status`
--
ALTER TABLE `itcp_status`
  MODIFY `id_status` int(25) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `itcp_users`
--
ALTER TABLE `itcp_users`
  MODIFY `id_user` int(25) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(25) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `itcp_appoiments`
--
ALTER TABLE `itcp_appoiments`
  ADD CONSTRAINT `itcp_appoiments_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `itcp_patients` (`id_patient`),
  ADD CONSTRAINT `itcp_appoiments_ibfk_2` FOREIGN KEY (`service_id`) REFERENCES `itcp_service` (`id_service`),
  ADD CONSTRAINT `itcp_appoiments_ibfk_4` FOREIGN KEY (`client_id`) REFERENCES `itcp_clients` (`id_client`),
  ADD CONSTRAINT `itcp_appoiments_ibfk_5` FOREIGN KEY (`company_id`) REFERENCES `itcp_companys` (`id_company`),
  ADD CONSTRAINT `itcp_appoiments_ibfk_6` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `itcp_users`
--
ALTER TABLE `itcp_users`
  ADD CONSTRAINT `itcp_users_ibfk_1` FOREIGN KEY (`rol_id`) REFERENCES `itcl_rols` (`id_rol`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
