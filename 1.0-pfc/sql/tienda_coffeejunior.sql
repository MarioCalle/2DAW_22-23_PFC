-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-05-2023 a las 00:09:21
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda_coffeejunior`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nombre` varchar(355) NOT NULL,
  `apellidos` varchar(355) NOT NULL,
  `correo` varchar(355) NOT NULL,
  `contrasenia` varchar(16) NOT NULL,
  `telefono` int(11) NOT NULL,
  `puntos_totales` int(11) NOT NULL,
  `productos_canjeados_totales` int(11) NOT NULL,
  `codigo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nombre`, `apellidos`, `correo`, `contrasenia`, `telefono`, `puntos_totales`, `productos_canjeados_totales`, `codigo`) VALUES
(1, 'Pablo', 'Serna Sanchez', 'pablo.serna@gmail.com', '12345', 675490432, 200, 15, 'DK4FSC2Q7P'),
(2, 'Alberto', 'Cantero Escribano', 'alberto.cantero@gmail.com', '12345', 654123209, 110, 0, 'L21P76DM3B'),
(3, 'Nuria', 'Martin Perez', 'nuria.martin@gmail.com', '12345', 675497865, 220, 13, '93BGTLA94B'),
(4, 'Ruben', 'Sobrino Curiel', 'ruben.sobrino@gmail.com', '12345', 654861098, 110, 0, 'JDWMD82LS0'),
(5, 'Pedro', 'Sanchez Rodriguez', 'pedro.sanchez@gmail.com', '12345', 675439008, 0, 0, '5TYUQN5PSJ'),
(6, 'Marta', 'Alonso Berna', 'marta.alonso@gmail.com', 'Marta823', 627878990, 30, 0, 'UB9S40LH2V'),
(7, 'Kala', 'itos Javier', 'kala.itos@gmail.com', 'Kala1234', 658439099, 0, 0, 'T1WXHHFYY0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `nombre_producto` varchar(355) NOT NULL,
  `puntos_producto` varchar(355) NOT NULL,
  `ruta_producto` text NOT NULL,
  `descripcion_producto` varchar(355) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `nombre_producto`, `puntos_producto`, `ruta_producto`, `descripcion_producto`) VALUES
(1, 'Helado sabor cafe', '120', 'heladoCafe.jfif', 'Helado con sabor a cafe casero, comprometidos con nuestros agricultores para darte el sabor que te mereces\r\n'),
(2, 'Cafe sabor almendra', '80', 'cafeAlmendras.jfif', 'Cafe con un sabor rico a almendras tostadas bajo el sol'),
(3, 'patatas sabor campesinas', '120', 'campesinas.jpg', 'Patatas de la marca Lays con un sabor a las campesinas de toda la vida'),
(4, 'refresco 330ml', '80', 'refresco.jpg', 'Refresco de unos 330ml sabor Coca-cola (Edicion Rosalia)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajador`
--

CREATE TABLE `trabajador` (
  `id_trabajador` int(11) NOT NULL,
  `nombre` varchar(355) NOT NULL,
  `apellidos` varchar(355) NOT NULL,
  `correo` varchar(355) NOT NULL,
  `contrasenia` varchar(16) NOT NULL,
  `telefono` int(11) NOT NULL,
  `cargo` varchar(355) NOT NULL,
  `administrador` varchar(355) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `trabajador`
--

INSERT INTO `trabajador` (`id_trabajador`, `nombre`, `apellidos`, `correo`, `contrasenia`, `telefono`, `cargo`, `administrador`) VALUES
(1, 'Mario', 'de la Calle Munguia', 'mario.delacalle@gmail.com', '12345', 43432321, 'Jefe de la tienda', 'si'),
(2, 'Alfonso', 'Ravero Gil', 'alfonso.ravero@gmail.com', '12345', 32133232, 'Tecnico en sistemas & Backend', 'si'),
(3, 'Diana', 'Rodriguez Gonzalez', 'diana.rodriguez@gmail.com', '12345', 43432321, 'contabilidad de la tienda', 'no'),
(4, 'Francisco', 'Juesas Franco', 'francisco.juesas@gmail.com', '12345', 32133232, 'Cocinero', 'no'),
(5, 'Luis', 'Sanchez', 'luis.sanchez@gmail.com', '12345', 622456677, 'trabajador', 'si'),
(6, 'Josefa', 'Gimenez', 'josefa.gimenez@gmai.com', '12345', 699887766, 'limipadora', 'no'),
(7, 'Lisa', 'Simpson Simpsons', 'lisa.simpson@gmail.com', '12345', 722354677, 'Reponedora', 'si'),
(8, 'Pablo', 'Sebatic Vass', 'pablo.serbatic@gmail.com', '12345', 654789032, 'marketing y publicidad', 'no'),
(9, 'Aitor', 'Diez Gomez', 'aitor.diez@gmail.com', '12345', 654789330, 'Programador Senior', 'si'),
(10, 'Lucia', 'Carretas Suarez', 'lucia.carretas@gmail.com', '12345', 678024561, 'Limpiadora', 'no');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `trabajador`
--
ALTER TABLE `trabajador`
  ADD PRIMARY KEY (`id_trabajador`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `trabajador`
--
ALTER TABLE `trabajador`
  MODIFY `id_trabajador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
