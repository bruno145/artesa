-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-08-2017 a las 06:51:12
-- Versión del servidor: 5.7.14
-- Versión de PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `artesa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `mensaje` varchar(255) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_user` int(11) NOT NULL,
  `id_ar` int(11) NOT NULL,
  `visto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `chat`
--

INSERT INTO `chat` (`id`, `nombre`, `mensaje`, `fecha`, `id_user`, `id_ar`, `visto`) VALUES
(57, 'Pablo', 'Hola', '2017-08-20 02:01:01', 6, 1, 0),
(65, 'luisferive', 'Holi', '2017-08-20 16:58:29', 0, 1, 1),
(66, 'luisferive', 'Holi', '2017-08-20 16:59:19', 0, 1, 1),
(67, 'luisferive', 'xd', '2017-08-20 17:00:39', 6, 1, 0),
(68, 'Pablo', 'holi', '2017-08-20 17:01:41', 6, 1, 0),
(69, 'Pablo', 'ste men', '2017-08-20 17:09:49', 6, 1, 0),
(70, 'luisferive', 'vendeme un dolar de pan :v', '2017-08-20 17:09:58', 6, 1, 0),
(71, 'luisferive', 'vendeme un dolar de pan :v', '2017-08-20 17:20:21', 6, 1, 0),
(72, 'Bruno845', 'Men', '2017-08-20 18:13:15', 5, 1, 0),
(73, 'Bruno845', 'Holi', '2017-08-20 18:13:17', 5, 1, 0),
(74, 'Bruno845', 'Holi', '2017-08-20 18:13:17', 5, 1, 0),
(75, 'luisferive', 'Que tal men', '2017-08-20 18:13:52', 5, 1, 0),
(76, 'luisferive', 'xd', '2017-08-20 18:14:00', 5, 1, 0),
(77, 'Bruno845', 'Holi', '2017-08-20 18:54:06', 5, 1, 0),
(78, 'floale', 'Su cuchara es llamativa', '2017-08-24 06:42:10', 2, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `ID` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `comentario` longtext NOT NULL,
  `producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`ID`, `nombre`, `comentario`, `producto`) VALUES
(37, 'luisferive', 'hola a todos', 3),
(38, 'luisferive', 'este es un ezequiel loquin', 6),
(39, 'Pablo', 'Callate hey', 3),
(40, 'Pablo', 'bien loquin', 6),
(41, 'Pablo', 'No le lo puedo creer es una camisa bien rikolina', 7),
(51, 'Pablo', 'Hola cracks', 6),
(55, 'Pablo', 'primer comentario perros', 4),
(60, 'Pablo', 'hola', 3),
(65, 'luisferive', 'Hola amigos', 5),
(66, 'Dam', 'Hola', 6),
(67, 'luisferive', 'Me agrada, muy buen trabajo', 19),
(68, 'floale', 'Me gusta la tienen en otro estilo?', 22);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `image`
--

CREATE TABLE `image` (
  `id_imagen` int(11) NOT NULL,
  `nombre_imagen` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `imagen` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_pro` int(50) NOT NULL,
  `nombre_pro` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `image_pro` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `precio` decimal(4,0) NOT NULL,
  `departamento` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `id_user` int(11) NOT NULL,
  `categoria` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_pro`, `nombre_pro`, `image_pro`, `descripcion`, `precio`, `departamento`, `id_user`, `categoria`) VALUES
(3, 'cuchara pingÃ¼ino', 'images/', 'una rica cuchara con sabor a pingÃ¼ino para sus comidas', '1', '    			Cuscatlan', 1, 'Cucharas'),
(4, 'Olla de Barro', 'images/Koala.jpg', 'Olla de Barro', '2', 'Cuscatlan', 1, 'Ollas'),
(5, 'Pumba de barro', 'images/Chrysanthemum.jpg', 'Una bonita olla', '11', 'Cuscatlan', 1, 'Comal'),
(6, 'Ezequiel', 'images/99177d513c662961aca42870c8a10cae.jpg', 'Un ezequiel fragil', '42', 'Cuscatlan', 5, 'Ceramica'),
(7, 'Camisa Azul', 'images/image.jpg', 'Una excelente camisa  de la mejor calidad hecha de tela alv', '5', 'Cuscatlan', 6, 'Tela'),
(9, 'Cremera de cerÃ¡mica', 'images/cremera_hecha_en_ceramica_de-506968.jpg', 'Una cremera de color azul echa', '10', 'Cuscatlan', 1, 'Ceramica'),
(10, 'Galletero', 'images/Chinese-Blue-White-Ceramic-Porcelain-Young-Elephant.jpg', 'Un hermoso recipiente para colocar la especialidad de la casa, unas ricas galletas hechas por mami.', '12', 'Cuscatlan', 1, 'Ceramica'),
(11, 'Jarron', 'images/503555.jpg', 'Los jarrones son esenciales en una casa elegante', '10', 'Cuscatlan', 1, 'Ceramica'),
(12, 'Florero', 'images/guan6485MDD.jpg', 'Las hermosas flores brillan cuando las coloca en este florero', '10', 'Cuscatlan', 1, 'Ceramica'),
(13, 'Platos', 'images/25004.jpg', 'Los artesanales platos no deben faltar en su hogar', '5', 'Cuscatlan', 1, 'Ceramica'),
(14, 'Jarra', 'images/Ceramica3.jpg', 'Las bebidas saben a tu paÃ­s cuando las sirves en esta jarra', '7', 'Cuscatlan', 1, 'Ceramica'),
(15, 'olla', 'images/b11a5918abd4af4073c710dac1a1aa6d.jpg', 'Los frijoles como los hacia mi abuela', '15', 'Cuscatlan', 6, 'Ollas'),
(16, 'olla', 'images/00953-curar-olla-barro_l.jpg', 'Las verdaderas ollas "santanecas"', '15', 'Cuscatlan', 6, 'Ollas'),
(17, 'Olla', 'images/pasted image 0.png', 'El barro  convierte al cocinero en un autentico salvadoreÃ±o', '15', 'Cuscatlan', 6, 'Ollas'),
(18, 'Taza personalizada', 'images/Tazas-artesanales-de-ceramica_2.jpg', 'Contactenos para diseÃ±os personalizados', '7', '    			Chalatenango', 7, 'Ceramica'),
(19, 'Comal', 'images/Bodegon navideno.JPG', 'El arte no tiene limites', '5', '    			Chalatenango', 7, 'Comal'),
(22, 'Cuchara', 'images/4-salsera-c-cuchara-y-tapa-chica-3596703-640x640.jpg', 'una buena cuchara', '1', 'Cuscatlan', 1, 'Cucharas'),
(23, 'cuchara', 'images/bd512b49719c0b9729cddc8cd77e322b--wood-burning-projects-wood-burning-patterns.jpg', 'la mejor', '1', 'Cuscatlan', 1, 'Cucharas'),
(24, 'Cucharas', 'images/3c8002717b2d073f0d28e4a3e0033951--coco.jpg', 'diferentes estilos de cucharas por favor contactarnos', '2', 'Cuscatlan', 1, 'Cucharas'),
(25, 'Carreton', 'images/maxresdefault.jpg', 'carreton de madera a escala', '4', '    			Cuscatlan', 1, 'Madera'),
(26, 'Pecesito ', 'images/Artesanias-en-madera.jpg', 'un hermoso  pez tallado en madera', '14', 'Cuscatlan', 1, 'Madera'),
(27, 'Carreta de bueyes ', 'images/0b41e0f2f091cf1be73755e13300d3d4.jpg', 'una hermosa descripciÃ³n de nuestros trabajadores', '10', 'Cuscatlan', 1, 'Madera'),
(28, 'DecoraciÃ³n ', 'images/artesanias-en-madera-13.jpg', '', '14', 'Cuscatlan', 1, 'Madera'),
(29, 'Tuga', 'images/tortugas-talladas-en-madera-fina-D_NQ_NP_2906-MLM3729619578_012013-F.jpg', 'Tuga la tortuga de Go Diego', '20', 'Cuscatlan', 1, 'Madera'),
(30, 'Bolso', 'images/artesanias-en-telas.jpg', 'un bolso hermoso', '12', 'Cuscatlan', 1, 'Tela'),
(31, 'SueÃ±os', 'images/cintas4.jpg', 'atrapa sueÃ±os', '2', 'Cuscatlan', 1, 'Tela'),
(32, 'Bolsos', 'images/IMGP1660.jpg', 'estampados', '5', 'Cuscatlan', 1, 'Tela'),
(33, 'MuÃ±eca', 'images/b4482fd7d7aee0914bd0f910fca1d12b.jpg', 'una muÃ±eca de trapo coqueta', '6', 'Cuscatlan', 1, 'Figuras'),
(34, 'BÃºho', 'images/figura_buho_inciensario-263741.jpg', 'Los bÃºhos son muy atentos en las noches', '15', 'Cuscatlan', 1, 'Figuras'),
(35, 'Adan y Eva', 'images/55029014.jpg', 'Adan y Eva de Artesanias de Mi Pueblo(Precio unitario)', '1', 'Cuscatlan', 1, 'Figuras'),
(36, 'Nacimiento', 'images/BbLvm2UIUAAXWjt.jpg', 'La navidad esta presente', '30', 'Cuscatlan', 1, 'Figuras'),
(37, 'Dinosaurio', 'images/figura_dragon-261345.jpg', 'La bestia esta a tu alcance', '5', 'Cuscatlan', 1, 'Figuras'),
(38, 'camisas', 'images/image.jpg', 'camisa', '5', 'Cuscatlan', 6, 'Ropa'),
(39, 'Vestido', 'images/20.jpg', 'vestido', '4', 'Cuscatlan', 6, 'Ropa'),
(40, 'Tarjetas de amor', 'images/tarjetas-navidad-artesanales.jpg', '', '4', 'Cuscatlan', 6, 'Tarjetas'),
(41, 'tarjetas', 'images/176d623015bea66703056a74e17caa4d--gallerie-stamping.jpg', '', '1', 'Cuscatlan', 6, 'Tarjetas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_user` int(50) NOT NULL,
  `password` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `username` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `dui` int(8) NOT NULL,
  `email` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` int(8) NOT NULL,
  `fecha_nac` date NOT NULL,
  `tipo` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `departamento` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_user`, `password`, `username`, `nombre`, `dui`, `email`, `telefono`, `fecha_nac`, `tipo`, `departamento`, `image`) VALUES
(1, '123456', 'luisferive', 'Luis Rivera', 12345678, 'luisferive@yahoo.com', 12345678, '1994-09-22', 'Ar', 'Cuscatlan', 'images/Penguins.jpg'),
(2, '123456', 'floale', 'Alejandra Romero', 54485484, 'ale_romero@cdb.edu.sv', 12345678, '1984-11-13', 'Cl', 'Cabanas', 'images/414433.png'),
(4, 'qwerty', 'Dam', 'Danilo Armando Morales', 12345678, 'gg@gmail.com', 22760598, '2000-05-05', 'Ar', 'Santa Ana', 'images/5e3b0946c2851ebf25ff111bde63809c.jpg'),
(5, 'heyezequiel', 'Bruno845', 'Pablo', 15454885, 'quelemele@gmail.com', 74851296, '1998-02-11', 'Ar', 'Cuscatlan', 'images/banner.png'),
(6, '123456', 'Pablo', 'Bruno Daniel Pablo Segura', 1452789641, 'bruno2001daniel.pablo@gmail.com', 74125895, '1996-01-31', 'Ar', 'Cuscatlan', 'images/99177d513c662961aca42870c8a10cae.jpg'),
(7, 'hey123456', 'ChalateArte', 'Jorge Icaza', 124545444, 'chalatearte@gmail.com', 74128564, '1985-02-06', 'Ar', 'Chalatenango', 'images/81dxvOIA0NL._SL1500_.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nombre` (`nombre`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id_imagen`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_pro`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `image_pro` (`image_pro`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT de la tabla `image`
--
ALTER TABLE `image`
  MODIFY `id_imagen` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_pro` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_user` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `usuarios` (`id_user`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
