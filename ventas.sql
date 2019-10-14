-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-09-2019 a las 20:38:49
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ventas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador7`
--

CREATE TABLE `administrador7` (
  `id` int(15) NOT NULL,
  `nombre` varchar(38) NOT NULL,
  `admin` varchar(15) NOT NULL,
  `clave` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administrador7`
--

INSERT INTO `administrador7` (`id`, `nombre`, `admin`, `clave`) VALUES
(3, 'sdsd', 'admin', 'admin'),
(7, 'david', 'jesus', '123'),
(8, 'david', 'jesus99', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categorias` int(20) NOT NULL,
  `categorias` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categorias`, `categorias`) VALUES
(1, 'telefono'),
(2, 'pc'),
(3, 'laptop');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `envios`
--

CREATE TABLE `envios` (
  `id` int(20) NOT NULL,
  `codigo` varchar(38) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `categorias` varchar(20) NOT NULL,
  `promocion` varchar(25) NOT NULL,
  `cantidad` varchar(20) NOT NULL,
  `precio` decimal(5,2) NOT NULL,
  `numeroguia` varchar(25) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gastos`
--

CREATE TABLE `gastos` (
  `id` int(15) NOT NULL,
  `codigo` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `caracteristica` varchar(90) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `estado` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `precio` decimal(5,2) NOT NULL,
  `cantidad` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `gastos`
--

INSERT INTO `gastos` (`id`, `codigo`, `nombre`, `caracteristica`, `estado`, `precio`, `cantidad`) VALUES
(7, '0120', 'cargador', 'cargador lapto', 'usado', '999.99', '5'),
(8, 'sds', 'sds', 'sdsd', 'sds', '50.00', 'sds'),
(10, 'dsds', 'sdsd', 'sdsd', 'sd', '5.00', '5'),
(12, 'dsds', 'sdsd', 'sdsd', 'sd', '5.00', '5'),
(13, '505', 'jesus henriquez', 'sdsd', 'nuevo', '999.99', '5'),
(14, '505', 'jesus henriquez', 'sdsd', 'nuevo', '999.99', '5'),
(15, '505', 'david', 'dfdfd', 'dd', '999.99', '7'),
(16, '88', 'dadadsd', 'ssdsd', 'ssfs', '999.99', '65'),
(17, '505', 'david', 'dfdfd', 'dd', '999.99', '7'),
(18, '88', 'dadadsd', 'ssdsd', 'ssfs', '999.99', '65'),
(20, '505', 'david', 'jhjsnshdhks', 'bien', '999.99', '150322133.'),
(22, 'fdfd', 'dffd', 'dfdfd', 'dfdfdf', '999.99', '8'),
(24, 'fdfd', 'dffd', 'dfdfd', 'dfdfdf', '999.99', '8'),
(25, 'dfdf', 'dfdf', 'dfdf', 'dfdf', '150.00', '54'),
(26, 'sdsd', 'sdsdsdsd', 'sdsd', 'sd', '80.00', '65'),
(27, 'dfdf', 'dfdf', 'dfdf', 'dfdf', '150.00', '54'),
(28, 'sdsd', 'sdsdsdsd', 'sdsd', 'sd', '80.00', '65'),
(31, 'ss', 'cargador', 'estaÃ±o', 'nuevo', '999.99', '25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `codigo` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `caracteristica` varchar(200) NOT NULL,
  `precioVenta` decimal(5,2) NOT NULL,
  `precioCompra` decimal(5,2) NOT NULL,
  `existencia` varchar(50) NOT NULL,
  `categorias` varchar(25) NOT NULL,
  `promocion` varchar(25) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `codigo`, `descripcion`, `caracteristica`, `precioVenta`, `precioCompra`, `existencia`, `categorias`, `promocion`, `foto`) VALUES
(1, '01', 'cargador', 'cargador tablet canaima', '8.00', '8.00', '5', 'laptop', 'promocion activa', 'foto/logo.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_vendidos`
--

CREATE TABLE `productos_vendidos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_producto` bigint(20) UNSIGNED NOT NULL,
  `cantidad` bigint(20) UNSIGNED NOT NULL,
  `id_venta` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos_vendidos`
--

INSERT INTO `productos_vendidos` (`id`, `id_producto`, `cantidad`, `id_venta`) VALUES
(1, 1, 1, 42);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promos`
--

CREATE TABLE `promos` (
  `id` int(20) NOT NULL,
  `codigo` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `caracterristica` varchar(90) NOT NULL,
  `cantidad` varchar(20) NOT NULL,
  `precio` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(15) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `cedula` varchar(20) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `clave` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `cedula`, `usuario`, `clave`) VALUES
(2, 'jesus david', 'henriquez rodriguez', '27820278', 'je.david99', '123'),
(16, 'david', 'henriquez', '27820278', 'david9', '1236');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fecha` datetime NOT NULL,
  `total` decimal(7,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id`, `fecha`, `total`) VALUES
(3, '2019-07-29 14:23:29', '15.00'),
(10, '2019-07-29 15:09:28', '0.00'),
(11, '2019-07-29 15:09:34', '0.00'),
(12, '2019-07-29 15:09:49', '0.00'),
(13, '2019-07-29 15:09:50', '0.00'),
(14, '2019-07-29 15:09:51', '0.00'),
(15, '2019-07-29 15:09:51', '0.00'),
(16, '2019-07-29 15:09:51', '0.00'),
(17, '2019-07-29 15:09:52', '0.00'),
(18, '2019-07-29 15:09:56', '15.00'),
(20, '2019-07-29 15:29:21', '0.00'),
(22, '2019-07-29 16:25:19', '133.00'),
(23, '2019-07-29 16:40:52', '0.00'),
(24, '2019-07-29 16:40:55', '0.00'),
(25, '2019-07-29 16:40:56', '0.00'),
(26, '2019-07-29 16:40:56', '0.00'),
(27, '2019-07-29 16:40:57', '0.00'),
(28, '2019-07-30 14:28:02', '15.00'),
(29, '2019-07-30 18:03:05', '0.00'),
(30, '2019-08-01 16:11:40', '1110.00'),
(31, '2019-08-02 15:07:25', '999.99'),
(32, '2019-08-02 15:40:18', '8.00'),
(33, '2019-08-02 16:03:35', '8.00'),
(34, '2019-08-02 16:07:02', '1007.99'),
(35, '2019-08-02 16:08:24', '1007.99'),
(36, '2019-08-02 16:09:05', '13.00'),
(38, '2019-08-03 03:49:25', '0.00'),
(40, '2019-08-03 18:06:00', '8.00'),
(41, '2019-08-04 19:08:25', '16.00'),
(42, '2019-08-26 17:58:21', '8.00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador7`
--
ALTER TABLE `administrador7`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categorias`);

--
-- Indices de la tabla `envios`
--
ALTER TABLE `envios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `gastos`
--
ALTER TABLE `gastos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos_vendidos`
--
ALTER TABLE `productos_vendidos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_producto` (`id_producto`),
  ADD KEY `id_venta` (`id_venta`);

--
-- Indices de la tabla `promos`
--
ALTER TABLE `promos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador7`
--
ALTER TABLE `administrador7`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categorias` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `envios`
--
ALTER TABLE `envios`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `gastos`
--
ALTER TABLE `gastos`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `productos_vendidos`
--
ALTER TABLE `productos_vendidos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `promos`
--
ALTER TABLE `promos`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos_vendidos`
--
ALTER TABLE `productos_vendidos`
  ADD CONSTRAINT `productos_vendidos_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `productos_vendidos_ibfk_2` FOREIGN KEY (`id_venta`) REFERENCES `ventas` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
