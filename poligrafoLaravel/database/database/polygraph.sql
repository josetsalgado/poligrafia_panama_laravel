-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 28-09-2017 a las 20:35:45
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
  `service_id` int(25) UNSIGNED NOT NULL,
  `user_id` int(25) UNSIGNED NOT NULL,
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

INSERT INTO `itcp_appoiments` (`id_appoiment`, `service_id`, `user_id`, `client_id`, `patient_id`, `city_appoiment`, `date_appoiment`, `time_appoiment`, `comentary_appoiment`, `status`) VALUES
(8, 5, 1, 4, 15, 'Ciudad de panama', '2017-09-07', '10:00:00', 'asd', 'Pendiente'),
(9, 5, 2, 2, 16, 'Ciudad de panama', '2017-09-07', '10:00:00', 'asd', 'Pendiente'),
(10, 5, 3, 4, 17, 'Ciudad de panama', '0000-00-00', '01:30:00', 'candidato 1', 'Pendiente'),
(11, 5, 1, 3, 18, 'Ciudad de panama', '2017-09-02', '10:00:00', 'candidato2', 'Aprobado'),
(12, 5, 4, 2, 19, 'Ciudad de panama', '2017-09-09', '07:30:00', 'candidato3', 'Pendiente'),
(13, 5, 2, 2, 20, 'Ciudad de panama', '2017-09-11', '10:00:00', 'empleado5', 'Pendiente'),
(14, 5, 2, 4, 21, 'Ciudad de panama', '2017-09-14', '10:00:00', 'empleado6', 'Aprobado');

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
  `country_id` varchar(45) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `itcp_clients`
--

INSERT INTO `itcp_clients` (`id_client`, `name_client`, `tel_client`, `email_client`, `rif_client`, `city_id`, `country_id`) VALUES
(2, 'a', '3', 'ezebarazarte@gmail.com', '', '1', 'a'),
(3, 'cleinte 1', '1', 'josetomassalgado91@gmail.com', '', '2', 'a'),
(4, 'BG Consultores', '123123', 'jsalgado@gmail.com', '', '2', 'caracas'),
(5, 'Axion ti', '123', 'dsa@hotmail.com', '', '2', 'da'),
(6, 'alterity solutions', '876', 'iii@g.com', '', '2', 'dsa');

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
(1, 'bernardo', 'salgado', '123123', 'cargo a', '123123'),
(2, 'cenen', 'salgado', '1231231', 'dasdas|24234|', '4213'),
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
(16, 'asd', 'asd', '123', 'das', '123'),
(17, 'candidato 1', 'candidato 1', '123', 'candidato1@hotmail.com', '123'),
(18, 'candidato2', 'candidato2', '123', 'candidato2', '234'),
(19, 'candidato3', 'candidato3', '34', 'candidato3', '3'),
(20, 'empleado5', 'empleado5', '123', 'empleado5', '324'),
(21, 'empleado6', 'empleado6', '213', 'empleado5', '56');

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
(5, 'Prueba pre empleo', '123123', 'prueba preempleo');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `last_name`, `password`, `remember_token`, `rol_id`, `tel`, `email`) VALUES
(1, 'jose salgado', 'salgado', '$2y$10$H0iX9rZ0Pj823fc2Ci5Ddufx4R8oh.5WtWZJUCuTocPLcYcWt5oB6', 'QC68gSZbafm4iQLiW0pryOjzxxAenpn41RqmcYYeG3dq7TnTRk6rreCGyxbq', 2, '', '1122jose@jose.com'),
(2, 'jose salgado', 'velasquez', '$2y$10$7pG.q39RWhpYEmZ/Y3gF..1CRYApXz8RPx7QrZf1aDQrOEUhQCqAK', '6PGwhKJJGa0PQRiqyFYIk4Z3BYMycmbb07NEb7cJtTLabFNErAkxq0N4ot1f', 2, '', '1jose@jose.com'),
(3, '123', '123', '$2y$10$YSvfDbJ.aSZpySAYiThrS.fqFABsr9SQCccIZ9.q/dVRaBqpaNip6', 'VO0I7K8VpwYzoRwhqE99pUInml0hPIaspEYk3VsLSDixwC2Lt3t5Agp85fW2', 2, '', '123@123.com'),
(4, 'jose salgado', 'salgado', '$2y$10$UiBIJ/jI6KUk15/JpHf.A.YXOG95sqJJ5dP7.kPpwU1r.xvCWMUv2', 'YWbm23KeVixvg2iQZvSLPcjPuPd36J3ln8sGKYe2MTf8tGmGHQqzII1uRxXi', 1, '', 'josetomassalgado91@gmail.com'),
(5, 'jose', 'salga', '$2y$10$HVuy3HmAEqPkGmTKcJ3wuu7eHfivYmenPaSdXqt/MKDLbcAvOXhym', 'kyBRhCC5sxfxeO0LcBn0nMdKFH0UxhrIHkx8OELcNxkGF1LIRfApMhzM3556', 2, '', 'salgado@salgado.com'),
(6, 'salgado', 'salgado', '$2y$10$fT35BEVAnKOdmYiJjzMvT.FAtrYG2Rye0csuCu9rd6DvH1h5kGBUm', '5FqKodvaT8x8L0eIgKDi1bn0MAfoibnZmT6MsTbgKo8PBeCybdM4yoBjjZka', 2, '', 'salgado1@salgado.com'),
(7, '123123', '123', '123', NULL, 2, '123', '12233@123.com'),
(8, '123', '123', '123', 'vsLDe6O2OnJPkNphprMQw5Qu0MfQ4lx1DS4Oz8y5EnQXIF9aNG6NKoYhiDmO', 2, '123', '23112232@123.com'),
(9, 'jose salgado', 'salgado', '123', 'I022tY8ULLMOkvErmgpKX6IHhLFq32h8BSDDZewn36pZYDFB3WfSr0pVo31o', 2, '123', 'jsalgado@ilernus.com'),
(10, 'jose salgado', 'salgado', '123', 'nDSV6LcLDiMvI3tmh01KQclmkk0EYqT7rl07EQN3UbfIWVLQPd9456w1kR2Q', 2, '123', 'jsalgado2@ilernus.com'),
(11, 'sa', 'sa', '$2y$10$qhmuF1qgzWgswY29IEWm3et7cOqCcNPrVdRN9ltImWhGZ1Ab.Drxm', 'U1RLgupD1SzcxQYgQ4K5BvtkZd3iW6XluSHscUq2JuYh1oa3IidCSnDQQRrO', 2, '123', 'jsalgado3@ilernus.com');

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
  ADD KEY `user_id` (`user_id`),
  ADD KEY `client_id` (`client_id`);

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
  MODIFY `id_appoiment` int(25) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
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
-- AUTO_INCREMENT de la tabla `itcp_patients`
--
ALTER TABLE `itcp_patients`
  MODIFY `id_patient` int(25) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT de la tabla `itcp_service`
--
ALTER TABLE `itcp_service`
  MODIFY `id_service` int(25) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `itcp_status`
--
ALTER TABLE `itcp_status`
  MODIFY `id_status` int(25) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `itcp_users`
--
ALTER TABLE `itcp_users`
  MODIFY `id_user` int(25) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(25) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `itcp_appoiments`
--
ALTER TABLE `itcp_appoiments`
  ADD CONSTRAINT `itcp_appoiments_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `itcp_patients` (`id_patient`),
  ADD CONSTRAINT `itcp_appoiments_ibfk_2` FOREIGN KEY (`service_id`) REFERENCES `itcp_service` (`id_service`),
  ADD CONSTRAINT `itcp_appoiments_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `itcp_users` (`id_user`),
  ADD CONSTRAINT `itcp_appoiments_ibfk_4` FOREIGN KEY (`client_id`) REFERENCES `itcp_clients` (`id_client`);

--
-- Filtros para la tabla `itcp_users`
--
ALTER TABLE `itcp_users`
  ADD CONSTRAINT `itcp_users_ibfk_1` FOREIGN KEY (`rol_id`) REFERENCES `itcl_rols` (`id_rol`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
