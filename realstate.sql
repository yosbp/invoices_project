-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 24-04-2023 a las 17:09:17
-- Versión del servidor: 5.7.33
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `realstate`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `user_id` int(10) NOT NULL,
  `user_name` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `user_lastname` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `user_user` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `user_password` varchar(150) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`user_id`, `user_name`, `user_lastname`, `user_user`, `user_password`) VALUES
(1, 'admin', 'admin', 'admin', '1234567');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `city`
--

INSERT INTO `city` (`city_id`, `city_name`) VALUES
(1, 'Charallave'),
(2, 'Cua'),
(3, 'Caracas'),
(4, 'Ocumare'),
(5, 'Santa Teresa'),
(7, 'Maracay');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `config`
--

CREATE TABLE `config` (
  `config_id` int(10) NOT NULL,
  `config_phone` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `config_instagram` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `config_facebook` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `config_twitter` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `config_link_whatsapp` varchar(200) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `config`
--

INSERT INTO `config` (`config_id`, `config_phone`, `config_instagram`, `config_facebook`, `config_twitter`, `config_link_whatsapp`) VALUES
(1, '04241417225', 'https://instagram.com/yosbp', 'https://facebook.com', 'https://twitter.com', 'https://wa.me/+584241417266');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `photos`
--

CREATE TABLE `photos` (
  `photos_id` int(11) NOT NULL,
  `photos_name` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `property_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `photos`
--

INSERT INTO `photos` (`photos_id`, `photos_name`, `property_id`) VALUES
(1, '../img/properties/property_8/Propiedad_8_img2.jpg', 8),
(2, '../img/properties/property_8/Propiedad_8_img2.jpg', 8),
(3, '../img/properties/property_8/Propiedad_8_img2.jpg', 8),
(4, '../img/properties/property_8/Propiedad_8_img2.jpg', 8),
(46, '../img/properties/property_15/Propiedad_15_img2.jpg', 15),
(47, '../img/properties/property_15/Propiedad_15_img3.jpg', 15),
(48, '../img/properties/property_15/Propiedad_15_img4.jpg', 15),
(49, '../img/properties/property_16/Propiedad_16_img2.jpg', 16),
(50, '../img/properties/property_16/Propiedad_16_img3.jpg', 16),
(51, '../img/properties/property_16/Propiedad_16_img4.jpg', 16),
(52, '../img/properties/property_17/Propiedad_17_img2.jpg', 17),
(53, '../img/properties/property_17/Propiedad_17_img3.jpg', 17),
(54, '../img/properties/property_17/Propiedad_17_img4.jpg', 17),
(55, '../img/properties/property_17/Propiedad_17_img5.jpg', 17),
(56, '../img/properties/property_18/Propiedad_18_img2.jpg', 18),
(57, '../img/properties/property_18/Propiedad_18_img3.jpg', 18),
(58, '../img/properties/property_18/Propiedad_18_img4.jpg', 18),
(59, '../img/properties/property_18/Propiedad_18_img5.jpg', 18),
(60, '../img/properties/property_19/Propiedad_19_img2.jpg', 19),
(61, '../img/properties/property_20/Propiedad_20_img2.jpg', 20),
(62, '../img/properties/property_20/Propiedad_20_img3.jpg', 20),
(63, '../img/properties/property_20/Propiedad_20_img4.jpg', 20),
(64, '../img/properties/property_21/Propiedad_21_img2.jpg', 21),
(65, '../img/properties/property_21/Propiedad_21_img3.jpg', 21),
(66, '../img/properties/property_21/Propiedad_21_img4.jpg', 21);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `property`
--

CREATE TABLE `property` (
  `property_id` int(11) NOT NULL,
  `property_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `property_title` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `property_description` text COLLATE utf8_spanish_ci NOT NULL,
  `property_type` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `property_transaction_type` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `property_location` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `property_rooms` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `property_banios` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `property_floors` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `property_garage` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `property_size` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `property_price` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `property_currency` varchar(5) COLLATE utf8_spanish_ci NOT NULL DEFAULT '$',
  `property_url_photo` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `property_city` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `property_owner` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `property_owner_phone` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `property_publicby` varchar(150) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `property`
--

INSERT INTO `property` (`property_id`, `property_date`, `property_title`, `property_description`, `property_type`, `property_transaction_type`, `property_location`, `property_rooms`, `property_banios`, `property_floors`, `property_garage`, `property_size`, `property_price`, `property_currency`, `property_url_photo`, `property_city`, `property_owner`, `property_owner_phone`, `property_publicby`) VALUES
(2, NULL, 'Apartamento en Bosque Real', 'asdashdadhsjkadhskasd', 'Apartamento', 'Compra', 'Urb. Bosque Real', '2', '2', '1', 'Si', '86mts', '11.000', '$', NULL, 'Charallave', 'Yosmar Barco', '04241417266', 'Yosbp'),
(3, NULL, 'sdffsdsfdf', 'sdfsdfsdfsdsfd\r\nasd\r\nads\r\na\r\nds\r\nads\r\nasdd', 'Casa', 'Alquiler', '', '1', '1', '', 'Si', '', '', '', '', 'Charallave', 'Yosmar', '', ''),
(5, NULL, 'asdasdadsadsadsasd', 'asdasdadsasddaadsdsa', 'Casa', 'Alquiler', '', '1', '1', '', 'Si', '', '', '', NULL, 'Charallave', '', '', ''),
(7, NULL, 'asdasddasadsdsds', 'adsasdadsasdasdasd', 'Local', 'Compra', 'asadasdasda', '1', '1', '4', 'Si', '446mts', '6500', '$', '../img/properties/property_7/Propiedad_7_img1.jpg', 'Caracas', 'asdaadsads', 'sadadsasd', 'asdasdasdads'),
(9, NULL, 'a123123asdasd', 'we1231wed123aseqweqwe', 'Apartamento', 'Compra', 'Urb Vista linda', '3', '2', '3', 'No', '60mts', '110.000', '$', '../img/properties/property_8/Propiedad_8_img1.jpg', 'Caracas', 'Yosmar', 'B', 'yosbp'),
(11, '2022-11-01 05:46:30', 'Casa en Caracas', 'asdjlkiasdlkajsdl\r\nklajsdlkjalkds\r\nTiene 2 cuartos', 'Casa', 'Compra', 'La boyera', '2', '3', '3', 'No', '150mts', '40.000', '$', '../img/properties/property_11/Propiedad_11_img1.png', 'Caracas', 'Yosmar B', '04241417266', 'Yosbp'),
(12, '2022-11-02 05:20:42', 'Casa en ocumare', 'asjkdasdlasd\r\nasdlakjsdasd\r\naskdlalsd\r\nasd4asd564\r\nasdasd', 'Casa', 'Compra', 'Sector las acacias', '2', '2', '1', 'No', '120mts', '11.000', '$', '../img/properties/property_12/Propiedad_12_img1.jpg', 'Ocumare', 'Yosmar b', '04241417266', 'Yobp'),
(14, '2022-11-04 05:43:37', 'Casa en Sta teresa', 'asjdlkajsd\r\nasdjklalsdas\r\ndalksjdljasd\r\nljasldkads', 'Casa', 'Compra', 'Urb. La Raiza', '2', '2', '1', 'No', '150mts', '6.000$', '$', '../img/properties/property_14/Propiedad_14_img1.jpg', 'Santa Teresa', 'Ybarcop', '123135646556', 'Yosbp'),
(15, '2022-11-08 06:02:03', 'Casa en Ocumare', 'kjasjdklads\r\naskldjalsjd\r\nlajskdlkasd', 'Casa', 'Compra', 'Centro', '2', '1', '1', 'Si', '130mts', '11.000 $', '$', '../img/properties/property_15/Propiedad_15_img1.jpg', 'Ocumare', 'asdasd', 'asdasdsa', 'dasdads'),
(16, '2022-11-08 06:03:36', 'Casa en Santa Teresa', 'kjasjdklads\r\naskldjalsjd\r\nlajskdlkasd', 'Casa', 'Alquiler', 'Urb. xxxx', '3', '2', '1', 'Si', '160mts', '9.800 $', '$', '../img/properties/property_16/Propiedad_16_img1.jpg', 'Ocumare', 'asdasd', 'asdasdsa', 'dasdads'),
(17, '2022-11-08 06:04:46', 'Apartamento en Charallave', 'Vendo apartamento en La Candelaria, a media cuadra del Sambil La Candelaria y a una cuadra del Metro Bellas Artes. Estas residencias son conocidas por la excelente distribuciÃ³n de sus apartamentos, una gran oportunidad para vivienda familiar. El apartamento posee amplias ventanas, fresco e iluminado con entradas de luz natural. Consta de sala, comedor, cocina, lavadero, 3 habitaciones, 2 baÃ±os, closets, 1 puesto de estacionamiento. Posee lÃ­nea CANTV e internet ABA, tambiÃ©n calentador 100% operativo. Conjunto residencial familiar, ubicado en la mejor zona de La Candelaria, cerca de panaderÃ­as, abastos, bodegones, centros comerciales, farmacias, colegios, clÃ­nicas y bancos. FÃ¡cil acceso a las principales vÃ­as de la ciudad, variadas opciones y paradas de transporte pÃºblico a pocos metros. Abstenerse intermediarios, no insista. Precio: 30.000 (Negociable).', 'Apartamento', 'Compra', 'Urb. Vista Real', '2', '1', '1', 'Si', '74mts', '7.500 $', '$', '../img/properties/property_17/Propiedad_17_img1.jpg', 'Charallave', 'asdasd', 'asdasdsa', 'dasdads'),
(18, '2022-11-08 06:06:01', 'Apartamento en Cua', 'kjasjdklads\r\naskldjalsjd\r\nlajskdlkasd', 'Apartamento', 'Alquiler', 'Residencias Barcelona', '2', '1', '1', 'Si', '85mts', '7.500 $', '$', '../img/properties/property_18/Propiedad_18_img1.jpg', 'Cua', 'asdasd', 'asdasdsa', 'dasdads'),
(19, '2022-11-08 06:07:43', 'Apartamento en Caracas', 'kjasjdklads\r\naskldjalsjd\r\nlajskdlkasd', 'Apartamento', 'Alquiler', 'La Urbina', '3', '2', '1', 'Si', '160mts', '35.000 $', '$', '../img/properties/property_19/Propiedad_19_img1.jpg', 'Caracas', 'asdasd', 'asdasdsa', 'dasdads'),
(20, '2022-11-09 02:21:56', 'Aparatamento en Caracas', 'asdasdasd\r\nas\r\nda\r\nsd\r\nasd\r\nsad\r\nads', 'Apartamento', 'Alquiler', 'Urb. La Boyera', '2', '2', '1', 'No', '140mts', '4.500 $', '$', '../img/properties/property_20/Propiedad_20_img1.jpg', 'Caracas', 'xcsdfsdf', 'sdfsdfsdfsfd', 'sdfsfdsfdsdf'),
(21, '2022-11-09 02:26:29', 'Aparatamento en Caracas', 'asdasdasd\r\nas\r\nda\r\nsd\r\nasd\r\nsad\r\nads', 'Apartamento', 'Alquiler', 'Urb. La Boyera', '3', '1', '1', 'No', '110mts', '2.500 $', '$', '../img/properties/property_21/Propiedad_21_img1.jpg', 'Caracas', 'xcsdfsdf', 'sdfsdfsdfsfd', 'sdfsfdsfdsdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `type`
--

CREATE TABLE `type` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `type`
--

INSERT INTO `type` (`type_id`, `type_name`) VALUES
(3, 'Casa'),
(4, 'Apartamento'),
(5, 'Local'),
(6, 'Terreno'),
(7, 'Mar'),
(9, 'House');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indices de la tabla `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indices de la tabla `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`config_id`);

--
-- Indices de la tabla `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`photos_id`);

--
-- Indices de la tabla `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`property_id`);

--
-- Indices de la tabla `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`type_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `config`
--
ALTER TABLE `config`
  MODIFY `config_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `photos`
--
ALTER TABLE `photos`
  MODIFY `photos_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT de la tabla `property`
--
ALTER TABLE `property`
  MODIFY `property_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `type`
--
ALTER TABLE `type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
