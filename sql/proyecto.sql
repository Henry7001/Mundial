-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-09-2022 a las 18:56:19
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `camisas`
--

CREATE TABLE `camisas` (
  `id` int(11) NOT NULL,
  `modelo` varchar(20) NOT NULL,
  `tela` varchar(50) NOT NULL,
  `talla` varchar(10) NOT NULL,
  `precio` double NOT NULL,
  `cantidad` int(11) NOT NULL,
  `fecha_actualizacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `camisas`
--

INSERT INTO `camisas` (`id`, `modelo`, `tela`, `talla`, `precio`, `cantidad`, `fecha_actualizacion`) VALUES
(3, 'Modelo-1', 'Poliester', 'S', 10, 20, '2022-09-06 06:23:54'),
(6, 'Modelo-2', 'Algodon', 'XS', 12000, 1, '2022-09-06 06:45:51'),
(7, 'Modelo-1', 'Algodon', 'XS', 1, 23, '2022-09-06 06:50:47'),
(8, 'Modelo-2', 'Franela', 'L', 1, 2, '2022-09-06 06:50:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gorras`
--

CREATE TABLE `gorras` (
  `id` int(12) NOT NULL,
  `Nombre` text DEFAULT NULL,
  `Talla` char(1) DEFAULT NULL,
  `Descripcion` text DEFAULT NULL,
  `Precio` decimal(10,2) DEFAULT NULL,
  `Cantidad` int(11) DEFAULT NULL,
  `imagen_url` varchar(150) DEFAULT NULL,
  `fechaactualizacion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `gorras`
--

INSERT INTO `gorras` (`id`, `Nombre`, `Talla`, `Descripcion`, `Precio`, `Cantidad`, `imagen_url`, `fechaactualizacion`) VALUES
(20, 'Gorra Rick y Morty', 'L', 'Gorra con estampado de Morty', '17.00', 4, 'https://www.tophats-shop.com/61741-full_default/gorra-morty-rick-and-morty-negro-capslab.jpg', '2022-09-18'),
(21, 'Gorra Metallica', 'S', 'Gorra con estampado de Metallica', '14.00', 3, 'https://www.tivicr.com/24380/gorra-de-metallica.jpg','2022-09-16'),
(22, 'Gorra Guns and roses', 'L', 'Gorra con estampado de Guns&roses', '20.00', 5,'https://http2.mlstatic.com/D_NQ_NP_940721-MPE31501391984_072019-O.webp', '2022-09-16'),
(23, 'Gorra Pokemon', 'M', 'Gorra con estampado de Pokemon', '24.00', 6, 'https://amosdelretro.com/wp-content/uploads/2021/05/Gorra-Pokemon.jpg','2022-09-16'),
(24, 'Gorra Nike SB', 'M', 'Gorra con estampado de Nike SB', '10.00', 2,'https://http2.mlstatic.com/D_NQ_NP_740127-MLA40028942745_122019-O.webp', '2022-09-16'),
(25, 'Gorra Avengers', 'L', 'Gorra con estampado de guante del infinito', '10.00', 2,'https://vasari.vteximg.com.br/arquivos/ids/202209-500-500/DGI173706-NG-T8.jpg?v=637758935624370000', '2022-09-18'),
(27, 'Gorra Supremme', 'L', 'Gorra con estampado de Supremme', '10.00', 2,'https://images.stockx.com/images/Supreme-World-Famous-Box-Logo-New-Era-Red.jpg?fit=fill&bg=FFFFFF&w=700&h=500&fm=webp&auto=compress&q=90&dpr=2&trim=co', '2022-09-16'),
(28, 'Gorra de Peaky blinders', 'S', 'Gorra con estampado de Peaky blinders', '10.00', 2,'https://http2.mlstatic.com/D_NQ_NP_746852-MLA49853273684_052022-O.jpg', '2022-09-16'),
(30, 'Gorra Dragon Ball', 'L', 'Gorra de Dragon Ball con estampado de goku', '20.00', 5,'https://www.tradeinn.com/f/13820/138203776/toei-animation-gorra-dragon-ball-z-goku-vegeta.jpg', '2022-09-18');


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `tiempoContrato` int(11) DEFAULT NULL,
  `tipoContrato` char(1) DEFAULT NULL,
  `anioInicioContrato` int(11) DEFAULT NULL,
  `anioFinContrato` int(11) DEFAULT NULL,
  `fechaIngreso` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'ADMIN'),
(2, 'USER');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `shirt`
--

CREATE TABLE `shirt` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `price` double NOT NULL,
  `img_url` varchar(255) NOT NULL,
  `description` varchar(200) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `shirt`
--

INSERT INTO `shirt` (`id`, `name`, `price`, `img_url`, `description`, `stock`) VALUES
(1, 'Camisa', 10, 'https://m.media-amazon.com/images/I/A13usaonutL._CLa%7C2140%2C2000%7C91qnPViWCwL.png%7C0%2C0%2C2140%2C2000%2B0.0%2C0.0%2C2140.0%2C2000.0_AC_UL1500_.png', 'Camisa de Rick and Morty estampada color negro', 10),
(2, 'Camisa', 10, 'https://i.pinimg.com/originals/3d/35/d5/3d35d5e266e3b474269d203eb6088dce.jpg', 'Camisa de Rick and Morty estampada color Azul y Rojo', 12),
(4, 'Camisa', 10.3, 'https://image.shutterstock.com/image-photo/beautiful-yellow-woman-blouse-isolated-260nw-2053801058.jpg', 'Blusa croptop de color caqui, de mangas cortas', 24);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tazas`
--

CREATE TABLE `tazas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `tamaño` varchar(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `img_url` varchar(150) DEFAULT NULL,
  `fechaactualizacion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tazas`
--

INSERT INTO `tazas` (`id`, `nombre`, `tamaño`, `descripcion`, `valor`, `cantidad`, `img_url`, `fechaactualizacion`) VALUES
(1, 'Taza Avengers', '240 - 300 ml', 'Taza con estampado de Avengers (2012)', '10.00', 500, 'https://m.media-amazon.com/images/I/61P8xtYczeL._AC_SX466_.jpg', '2022-09-15'),
(2, 'Taza Avengers EndGame', '240 - 300 ml', 'Taza grande de estampado de Avengers (2018)', '5.50', 99, 'https://d3ugyf2ht6aenh.cloudfront.net/stores/608/580/products/avengers-endgame-frente1-a4b098514cb7b99d4d15737533473375-1024-1024.png', '2022-09-15'),
(3, 'Taza Doraemon', '100 - 220 ml', 'Taza decorado con acabados del anime Doraemon (2020)', '10.00', 10, 'https://m.media-amazon.com/images/I/41OcCBhugkL._SL500_.jpg', '2022-09-15'),
(4, 'Taza Justice League', '300 - 500 ml', 'Taza decorada con tema de Justice League (2017)', '5.00', 10, 'https://www.copiacopia.es/wp-content/uploads/2019/02/taza-3.jpg', '2022-09-06'),
(5, 'Taza Justice League Zack Snyde', '300 - 500 ml', 'Taza con decoración del corte de Snyder (2021)', '20.00', 5, 'https://http2.mlstatic.com/D_NQ_NP_620340-MLM49353477161_032022-W.jpg', '2022-09-06'),
(6, 'Taza de Shakira', '100 - 220 ml', 'Taza oficial de Shakira', '12.00', 123, 'https://http2.mlstatic.com/D_NQ_NP_911731-MLM48005149428_102021-O.webp', '2022-09-15'),
(7, 'Taza para caf&eacute;', '60 - 80ml', 'Taza peque&ntilde;a para caf&eacute;', '5.00', 100, 'https://st.depositphotos.com/1020804/1263/i/450/depositphotos_12638853-stock-photo-coffee-cup-and-beans.jpg', '2022-09-15'),
(8, 'Taza de ScarFace', '300 - 500 ml', 'Taza de ScarFace mediana', '12.00', 100, 'https://m.media-amazon.com/images/I/61I9sSPH55L._AC_SX466_.jpg', '2022-09-07'),
(9, 'Taza de la luna', '240 - 300 ml', 'Taza con estampado lunar.', '15.00', 2, 'https://cihuiestrada.mx/wp-content/uploads/2021/12/SAM_3836.jpg', '2022-09-15'),
(16, 'Taza de Disney', '100 - 220 ml', 'Taza con Dise&ntilde;o de Disney', '12.00', 99, 'https://mundo-manga.com/wp-content/uploads/2020/05/disney-mug-3d-la-belle-et-la-bete-zip-x2-600x600.jpg', '2022-09-17'),
(17, 'Taza de Bendy', '240 - 300 ml', 'Taza de Bendy&#039;s and the Ink Machine', '10.00', 89, 'https://http2.mlstatic.com/D_NQ_NP_873995-MLM44369281902_122020-W.jpg', '2022-09-17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `id_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `firstname`, `lastname`, `password`, `email`, `enabled`, `id_role`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 'admin@admin.com', 1, 1),
(2, 'user', 'Usuario', 'Usuario', 'user', 'user@user.com', 1, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `camisas`
--
ALTER TABLE `camisas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `gorras`
--
ALTER TABLE `gorras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `shirt`
--
ALTER TABLE `shirt`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tazas`
--
ALTER TABLE `tazas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `roles_fk` (`id_role`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `camisas`
--
ALTER TABLE `camisas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `gorras`
--
ALTER TABLE `gorras`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `shirt`
--
ALTER TABLE `shirt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tazas`
--
ALTER TABLE `tazas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `roles_fk` FOREIGN KEY (`id_role`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
