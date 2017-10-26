-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-10-2017 a las 23:43:46
-- Versión del servidor: 5.7.14
-- Versión de PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_tesis1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `body` text COLLATE utf8_spanish_ci NOT NULL,
  `url` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `class` varchar(45) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'event-important',
  `start` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `end` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `inicio_normal` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `final_normal` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id`, `title`, `body`, `url`, `class`, `start`, `end`, `inicio_normal`, `final_normal`) VALUES
(7, 'Prueba 1', 'Evento EventEvento EventEvento EventEvento EventEvento EventEvento EventEvento EventEvento EventEvento Event', 'http://127.0.0.1/Limpio2/descripcion_evento.php?id=7', 'event-success', '1507856040000', '1509238440000', '12/10/2017 21:54', '28/10/2017 21:54'),
(8, 'Prueba 1', 'Evento EventEvento EventEvento EventEvento EventEvento EventEvento EventEvento EventEvento EventEvento Event', 'http://127.0.0.1/Limpio2/descripcion_evento.php?id=8', 'event-success', '1507856040000', '1509238440000', '12/10/2017 21:54', '28/10/2017 21:54'),
(9, 'titulo', 'asdasdasdasd', 'http://127.0.0.1/Limpio2/descripcion_evento.php?id=9', 'event-info', '1507683840000', '1508375040000', '10/10/2017 22:04', '18/10/2017 22:04'),
(10, 'Bayron', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxx', 'http://127.0.0.1/Limpio2/descripcion_evento.php?id=10', 'event-success', '1508419500000', '1509197100000', '19/10/2017 10:25', '28/10/2017 10:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `institucion`
--

CREATE TABLE `institucion` (
  `id_institucion` int(11) NOT NULL,
  `nombre_institucion` varchar(50) NOT NULL,
  `mail_institucion` varchar(50) NOT NULL,
  `pass_institucion` varchar(20) NOT NULL,
  `tipo_institucion` varchar(25) NOT NULL,
  `rut_institucion` varchar(12) DEFAULT NULL,
  `pais_institucion` varchar(4) NOT NULL,
  `perfil_insti` int(11) NOT NULL,
  `avatar` varchar(200) DEFAULT NULL,
  `direccion_insti` varchar(150) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `institucion`
--

INSERT INTO `institucion` (`id_institucion`, `nombre_institucion`, `mail_institucion`, `pass_institucion`, `tipo_institucion`, `rut_institucion`, `pais_institucion`, `perfil_insti`, `avatar`, `direccion_insti`) VALUES
(1, 'Mufasa', 'zimba@mufasa.com', '123', 'no_lucro', '18332260-5', 'MG', 1, 'avatar/65EF220BDB1DE0.jpg', ''),
(2, 'Mufasa', 'Mufasa@simba.com', 'mufasa', 'no_lucro', '18948910-2', 'ZW', 1, 'imagenes/perfildefault.jpg', ''),
(7, 'bayron', 'bayron@bayron.com', '123', 'lucro', NULL, 'BS', 1, 'avatar/65EF220BDB1DE0.jpg', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id_noti` int(11) NOT NULL,
  `id_insti_noti` int(11) NOT NULL,
  `nombre_noti` varchar(150) NOT NULL,
  `fecha_noti` datetime NOT NULL,
  `contenido_noti` text NOT NULL,
  `comentario_not` int(11) NOT NULL,
  `imagen_noti` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id_noti`, `id_insti_noti`, `nombre_noti`, `fecha_noti`, `contenido_noti`, `comentario_not`, `imagen_noti`) VALUES
(1, 1, 'Noticia 1', '2017-10-09 19:27:07', '$publicacion$publicacion$publicacion$publicacion$publicacion', 1, ''),
(2, 1, 'noticia 2', '2017-10-09 19:43:35', 'sdfasfasdfsdfasfasdfsdfasfasdfsdfasfasdfsdfasfasdfsdfasfasdfsdfasfasdfsdfasfasdfsdfasfasdfsdfasfasdfsdfasfasdfsdfasfasdfsdfasfasdfsdfasfasdfsdfasfasdf', 1, ''),
(3, 1, 'noticia 3', '2017-10-09 19:48:02', 'Noticia 3 Noticia 3 Noticia 3 Noticia 3 Noticia 3 Noticia 3 Noticia 3 Noticia 3 Noticia 3 Noticia 3 Noticia 3 Noticia 3 Noticia 3 ', 1, ''),
(9, 1, 'Noticia 4', '2017-10-09 20:36:48', 'Noticia 4 Noticia 4 Noticia 4 Noticia 4 Noticia 4Noticia 4Noticia 4Noticia 4Noticia 4Noticia 4', 1, '9682AD5C6A10E.jpg'),
(10, 7, 'Noticia 15', '2017-10-10 10:24:05', 'afasgSGdfSFasf', 1, '109569E05DFBAE.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usu` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `edad` int(11) NOT NULL,
  `upass` varchar(20) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `rut` varchar(12) NOT NULL,
  `sexo` varchar(12) NOT NULL,
  `avatar` varchar(250) DEFAULT NULL,
  `perfil` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usu`, `nombre`, `apellido`, `edad`, `upass`, `correo`, `rut`, `sexo`, `avatar`, `perfil`) VALUES
(1, 'Manu', 'Riveiro', 23, '123', '123@123.com', '16.803.470-9', 'masculino', 'avatar/665ECC46302D73.jpg', 0),
(2, 'Arminsito', 'Brun RÃ¼th', 25, '123', 'chancho@chancho.cl', '118827472', 'masculino', NULL, 2),
(3, 'Marcelo', 'Osses', 1, '123123', 'marcelo@pene.cl', '18556496-7', 'masculino', NULL, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `institucion`
--
ALTER TABLE `institucion`
  ADD PRIMARY KEY (`id_institucion`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id_noti`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `institucion`
--
ALTER TABLE `institucion`
  MODIFY `id_institucion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id_noti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
