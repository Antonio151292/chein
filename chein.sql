-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-05-2022 a las 18:37:58
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `chein`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_de_producto`
--

CREATE TABLE `categoria_de_producto` (
  `ID_CategoriaProducto` int(11) NOT NULL,
  `Categoria` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Categoría',
  `Descripcion` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Descripción de categoría'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `ID_Compra` int(11) NOT NULL,
  `ID_Usuario` int(11) NOT NULL COMMENT 'ID de usuario',
  `ID_Producto` int(11) NOT NULL COMMENT 'ID de producto',
  `ID_DatosDeFacturacion` int(11) NOT NULL COMMENT 'ID de datos de factura',
  `ID_DatosDeEnvio` int(11) NOT NULL COMMENT 'ID de datos de envió',
  `Fecha` date NOT NULL COMMENT 'Fecha de compra'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_de_envio`
--

CREATE TABLE `datos_de_envio` (
  `ID_DatosDeEnvio` int(11) NOT NULL,
  `ID_Usuario` int(11) NOT NULL COMMENT 'ID usuario',
  `Direccion1` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Dirección 1',
  `Direccion2` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Dirección 2',
  `Ciudad` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Ciudad',
  `Estado` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Estado',
  `Pais` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Pais',
  `CP` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'CP'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `datos_de_envio`
--

INSERT INTO `datos_de_envio` (`ID_DatosDeEnvio`, `ID_Usuario`, `Direccion1`, `Direccion2`, `Ciudad`, `Estado`, `Pais`, `CP`) VALUES
(1, 1, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_de_facturacion`
--

CREATE TABLE `datos_de_facturacion` (
  `ID_DatosDeFacturacion` int(11) NOT NULL,
  `ID_Usuario` int(11) NOT NULL COMMENT 'ID usuario',
  `Direccion1` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Dirección 1',
  `Direccion2` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Dirección 2',
  `Ciudad` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Ciudad',
  `Estado` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Estado',
  `Pais` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'País',
  `CP` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'CP'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `datos_de_facturacion`
--

INSERT INTO `datos_de_facturacion` (`ID_DatosDeFacturacion`, `ID_Usuario`, `Direccion1`, `Direccion2`, `Ciudad`, `Estado`, `Pais`, `CP`) VALUES
(1, 1, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_de_usuario`
--

CREATE TABLE `datos_de_usuario` (
  `ID_DatosDeUsuario` int(11) NOT NULL,
  `ID_Usuario` int(11) NOT NULL COMMENT 'ID usuario',
  `Nombre` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Nombres',
  `ApellidoP` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Apellido Paterno',
  `ApellidoM` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Apellido Materno',
  `Telefono` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Teléfono'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `datos_de_usuario`
--

INSERT INTO `datos_de_usuario` (`ID_DatosDeUsuario`, `ID_Usuario`, `Nombre`, `ApellidoP`, `ApellidoM`, `Telefono`) VALUES
(1, 1, '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `ID_Marca` int(11) NOT NULL,
  `Marca` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Marca'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `ID_Producto` int(11) NOT NULL,
  `ID_CategoriaProducto` int(11) NOT NULL COMMENT 'ID Categoría de producto',
  `ID_TipoProducto` int(11) NOT NULL COMMENT 'ID Tipo de producto',
  `ID_Talla` int(11) NOT NULL COMMENT 'ID Talla',
  `ID_Marca` int(11) NOT NULL COMMENT 'ID Marca',
  `Nombre` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Nombre producto',
  `Stock` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Stock',
  `Precio` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Precio',
  `Descripcion` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Descripción',
  `Imagen` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Imagen'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `talla`
--

CREATE TABLE `talla` (
  `ID_Talla` int(11) NOT NULL,
  `Talla` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Talla',
  `Descripcion` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Descripción'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_de_producto`
--

CREATE TABLE `tipo_de_producto` (
  `ID_TipoProducto` int(11) NOT NULL,
  `TipoProducto` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Nombre',
  `Descripcion` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Descripción'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_de_usuario`
--

CREATE TABLE `tipo_de_usuario` (
  `ID_TipoUsuario` int(11) NOT NULL,
  `TipoUsuario` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Tipo de usuario',
  `Descripcion` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Descripcion'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tipo_de_usuario`
--

INSERT INTO `tipo_de_usuario` (`ID_TipoUsuario`, `TipoUsuario`, `Descripcion`) VALUES
(1, 'Usuario', 'Usuario del sistema'),
(2, 'Administrador', 'Administrador del sistema');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ID_Usuario` int(11) NOT NULL,
  `ID_TipoUsuario` int(11) NOT NULL COMMENT 'Tipo de usuario',
  `correo` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'correo',
  `password` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'contraseña'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ID_Usuario`, `ID_TipoUsuario`, `correo`, `password`) VALUES
(1, 2, 'admin@mail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria_de_producto`
--
ALTER TABLE `categoria_de_producto`
  ADD PRIMARY KEY (`ID_CategoriaProducto`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`ID_Compra`),
  ADD KEY `ID_Usuario` (`ID_Usuario`,`ID_Producto`,`ID_DatosDeFacturacion`,`ID_DatosDeEnvio`),
  ADD KEY `ID_Usuario_2` (`ID_Usuario`,`ID_Producto`,`ID_DatosDeFacturacion`,`ID_DatosDeEnvio`),
  ADD KEY `ID_Producto` (`ID_Producto`),
  ADD KEY `ID_DatosDeFacturacion` (`ID_DatosDeFacturacion`),
  ADD KEY `ID_DatosDeEnvio` (`ID_DatosDeEnvio`);

--
-- Indices de la tabla `datos_de_envio`
--
ALTER TABLE `datos_de_envio`
  ADD PRIMARY KEY (`ID_DatosDeEnvio`),
  ADD KEY `ID_Usuario` (`ID_Usuario`),
  ADD KEY `ID_Usuario_2` (`ID_Usuario`);

--
-- Indices de la tabla `datos_de_facturacion`
--
ALTER TABLE `datos_de_facturacion`
  ADD PRIMARY KEY (`ID_DatosDeFacturacion`),
  ADD KEY `ID_Usuario` (`ID_Usuario`),
  ADD KEY `ID_Usuario_2` (`ID_Usuario`);

--
-- Indices de la tabla `datos_de_usuario`
--
ALTER TABLE `datos_de_usuario`
  ADD PRIMARY KEY (`ID_DatosDeUsuario`),
  ADD KEY `ID_Usuario` (`ID_Usuario`),
  ADD KEY `ID_Usuario_2` (`ID_Usuario`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`ID_Marca`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`ID_Producto`),
  ADD KEY `ID_CategoriaProducto` (`ID_CategoriaProducto`,`ID_TipoProducto`,`ID_Talla`,`ID_Marca`),
  ADD KEY `ID_CategoriaProducto_2` (`ID_CategoriaProducto`,`ID_TipoProducto`,`ID_Talla`,`ID_Marca`),
  ADD KEY `ID_TipoProducto` (`ID_TipoProducto`),
  ADD KEY `ID_Talla` (`ID_Talla`),
  ADD KEY `ID_Marca` (`ID_Marca`);

--
-- Indices de la tabla `talla`
--
ALTER TABLE `talla`
  ADD PRIMARY KEY (`ID_Talla`);

--
-- Indices de la tabla `tipo_de_producto`
--
ALTER TABLE `tipo_de_producto`
  ADD PRIMARY KEY (`ID_TipoProducto`);

--
-- Indices de la tabla `tipo_de_usuario`
--
ALTER TABLE `tipo_de_usuario`
  ADD PRIMARY KEY (`ID_TipoUsuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID_Usuario`),
  ADD KEY `ID_TipoUsuario` (`ID_TipoUsuario`),
  ADD KEY `ID_TipoUsuario_2` (`ID_TipoUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria_de_producto`
--
ALTER TABLE `categoria_de_producto`
  MODIFY `ID_CategoriaProducto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `compra`
--
ALTER TABLE `compra`
  MODIFY `ID_Compra` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `datos_de_envio`
--
ALTER TABLE `datos_de_envio`
  MODIFY `ID_DatosDeEnvio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `datos_de_facturacion`
--
ALTER TABLE `datos_de_facturacion`
  MODIFY `ID_DatosDeFacturacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `datos_de_usuario`
--
ALTER TABLE `datos_de_usuario`
  MODIFY `ID_DatosDeUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `ID_Marca` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `ID_Producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `talla`
--
ALTER TABLE `talla`
  MODIFY `ID_Talla` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_de_producto`
--
ALTER TABLE `tipo_de_producto`
  MODIFY `ID_TipoProducto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_de_usuario`
--
ALTER TABLE `tipo_de_usuario`
  MODIFY `ID_TipoUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID_Usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `compra_ibfk_1` FOREIGN KEY (`ID_Usuario`) REFERENCES `usuario` (`ID_Usuario`),
  ADD CONSTRAINT `compra_ibfk_2` FOREIGN KEY (`ID_Producto`) REFERENCES `producto` (`ID_Producto`),
  ADD CONSTRAINT `compra_ibfk_3` FOREIGN KEY (`ID_DatosDeFacturacion`) REFERENCES `datos_de_facturacion` (`ID_DatosDeFacturacion`),
  ADD CONSTRAINT `compra_ibfk_4` FOREIGN KEY (`ID_DatosDeEnvio`) REFERENCES `datos_de_envio` (`ID_DatosDeEnvio`);

--
-- Filtros para la tabla `datos_de_envio`
--
ALTER TABLE `datos_de_envio`
  ADD CONSTRAINT `datos_de_envio_ibfk_1` FOREIGN KEY (`ID_Usuario`) REFERENCES `usuario` (`ID_Usuario`);

--
-- Filtros para la tabla `datos_de_facturacion`
--
ALTER TABLE `datos_de_facturacion`
  ADD CONSTRAINT `datos_de_facturacion_ibfk_1` FOREIGN KEY (`ID_Usuario`) REFERENCES `usuario` (`ID_Usuario`);

--
-- Filtros para la tabla `datos_de_usuario`
--
ALTER TABLE `datos_de_usuario`
  ADD CONSTRAINT `datos_de_usuario_ibfk_1` FOREIGN KEY (`ID_Usuario`) REFERENCES `usuario` (`ID_Usuario`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`ID_TipoProducto`) REFERENCES `tipo_de_producto` (`ID_TipoProducto`),
  ADD CONSTRAINT `producto_ibfk_2` FOREIGN KEY (`ID_Talla`) REFERENCES `talla` (`ID_Talla`),
  ADD CONSTRAINT `producto_ibfk_3` FOREIGN KEY (`ID_Marca`) REFERENCES `marca` (`ID_Marca`),
  ADD CONSTRAINT `producto_ibfk_4` FOREIGN KEY (`ID_CategoriaProducto`) REFERENCES `categoria_de_producto` (`ID_CategoriaProducto`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`ID_TipoUsuario`) REFERENCES `tipo_de_usuario` (`ID_TipoUsuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
