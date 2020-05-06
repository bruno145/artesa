-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 24-08-2017 a las 05:50:10
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `artesa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `mensaje` varchar(255) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_user` int(11) NOT NULL,
  `id_ar` int(11) NOT NULL,
  `visto` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `nombre` (`nombre`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=78 ;

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
(77, 'Bruno845', 'Holi', '2017-08-20 18:54:06', 5, 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE IF NOT EXISTS `comentarios` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `comentario` longtext NOT NULL,
  `producto` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=70 ;

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
(67, 'andrea94', 'Se los recomiendo, Comprelo!!!', 11),
(68, 'andrea94', 'Buen Producto!!', 16),
(69, 'andrea94', 'Buen Producto!!', 16);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `id_imagen` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_imagen` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `imagen` longblob NOT NULL,
  PRIMARY KEY (`id_imagen`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `id_pro` int(50) NOT NULL AUTO_INCREMENT,
  `nombre_pro` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `image_pro` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `precio` decimal(4,0) NOT NULL,
  `departamento` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `id_user` int(11) NOT NULL,
  `categoria` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_pro`),
  KEY `id_user` (`id_user`),
  KEY `image_pro` (`image_pro`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=18 ;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_pro`, `nombre_pro`, `image_pro`, `descripcion`, `precio`, `departamento`, `id_user`, `categoria`) VALUES
(3, 'cuchara pingÃ¼ino', 'images/', 'una rica cuchara con sabor a pingÃ¼ino para sus comidas', '1', '    			Cuscatlan', 1, 'Cucharas'),
(4, 'Olla de Barro', 'images/Koala.jpg', 'Olla de Barro', '2', 'Cuscatlan', 1, 'Ollas'),
(5, 'Pumba de barro', 'images/Chrysanthemum.jpg', 'Una bonita olla', '11', 'Cuscatlan', 1, 'Comal'),
(6, 'Ezequiel', 'images/99177d513c662961aca42870c8a10cae.jpg', 'Un ezequiel fragil', '42', 'Cuscatlan', 5, 'Ceramica'),
(7, 'Camisa Azul', 'images/image.jpg', 'Una excelente camisa  de la mejor calidad hecha de tela alv', '5', 'Cuscatlan', 6, 'Tela'),
(10, 'Cuchara de Madera', 'images/artesanias-rusas-jojloma-cuchara-rusa-pintada-a-mano-D_NQ_NP_4170-MLA2548175178_032012-F.jpg', 'La madera es un material ortÃ³tropo, con distinta elasticidad segÃºn la direcciÃ³n de deformaciÃ³n, encontrado como principal contenido del tronco de un Ã¡rbol. Los Ã¡rboles se caracterizan por tener troncos que crecen aÃ±o tras aÃ±o, formando anillo', '6', 'San Miguel', 7, 'Cucharas'),
(11, 'Cuchara de Madera', 'images/cuchara-chica-de-jojloma-artesania-rusa-D_NQ_NP_932-MLC19307204_1604-O.jpg', 'La madera es un material ortÃ³tropo, con distinta elasticidad segÃºn la direcciÃ³n de deformaciÃ³n, encontrado como principal contenido del tronco de un Ã¡rbol. Los Ã¡rboles se caracterizan por tener troncos que crecen aÃ±o tras aÃ±o, formando anillo', '4', 'San Miguel', 7, 'Cucharas'),
(12, 'Cuchara de Madera', 'images/cuchara-chica-de-jojloma-artesania-rusa-D_NQ_NP_941-MLC19307204_5965-O.jpg', 'La madera es un material ortÃ³tropo, con distinta elasticidad segÃºn la direcciÃ³n de deformaciÃ³n, encontrado como principal contenido del tronco de un Ã¡rbol. Los Ã¡rboles se caracterizan por tener troncos que crecen aÃ±o tras aÃ±o, formando anillo', '11', 'San Miguel', 7, 'Cucharas'),
(14, 'Cuchara de Madera', 'images/3c8002717b2d073f0d28e4a3e0033951--coco.jpg', '', '2', 'San Miguel', 7, 'Cucharas'),
(15, 'Cuchara de Madera', 'images/bd512b49719c0b9729cddc8cd77e322b--wood-burning-projects-wood-burning-patterns.jpg', '', '2', 'San Miguel', 7, 'Cucharas'),
(16, 'Alcancilla de CerÃ¡mica', 'images/artesanias-30.jpg', 'Una bonita alcancilla', '6', 'San Miguel', 7, 'Ceramica'),
(17, 'Ropa Bruno', 'images/21.jpg', '...', '11', 'San Miguel', 7, 'Ropa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_user` int(50) NOT NULL AUTO_INCREMENT,
  `password` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `username` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `dui` int(8) NOT NULL,
  `email` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` int(8) NOT NULL,
  `fecha_nac` date NOT NULL,
  `tipo` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `departamento` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_user`),
  KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_user`, `password`, `username`, `nombre`, `dui`, `email`, `telefono`, `fecha_nac`, `tipo`, `departamento`, `image`) VALUES
(1, '123456', 'luisferive', 'Luis Rivera', 12345678, 'luisferive@yahoo.com', 12345678, '1994-09-22', 'Ar', 'Cuscatlan', 'images/Penguins.jpg'),
(2, '123456', 'floale', 'Alejandra Romero', 54485484, 'ale_romero@cdb.edu.sv', 12345678, '1984-11-13', 'Cl', 'Cabanas', 'images/414433.png'),
(4, 'qwerty', 'Dam', 'Danilo Armando Morales', 12345678, 'gg@gmail.com', 22760598, '2000-05-05', 'Ar', 'Santa Ana', 'images/5e3b0946c2851ebf25ff111bde63809c.jpg'),
(5, 'heyezequiel', 'Bruno845', 'Pablo', 15454885, 'quelemele@gmail.com', 74851296, '1998-02-11', 'Ar', 'Cuscatlan', 'images/banner.png'),
(6, '123456', 'Pablo', 'Bruno Daniel Pablo Segura', 1452789641, 'bruno2001daniel.pablo@gmail.com', 74125895, '1996-01-31', 'Ar', 'Cuscatlan', 'images/99177d513c662961aca42870c8a10cae.jpg'),
(7, '12345678', 'andrea94', 'Andrea Zabaleta', 545454545, 'andrea94@gmail.com', 73523636, '1998-02-11', 'Ar', 'San Miguel', 'images/44692767.jpg'),
(8, '12345678', 'rober69', 'Roberto', 456464646, 'rober69@gmail.com', 63139205, '1997-07-15', 'Cl', 'La Libertad', 'images/21.jpg');

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
