-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-06-2021 a las 03:52:40
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectomon`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etiquetas`
--

CREATE TABLE `etiquetas` (
  `idEt` int(11) NOT NULL,
  `id_not` int(11) NOT NULL,
  `nomEt` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `est` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `etiquetas`
--

INSERT INTO `etiquetas` (`idEt`, `id_not`, `nomEt`, `est`) VALUES
(1, 1, 'Universidad', 1),
(2, 1, 'Monitoria', 1),
(3, 2, 'BD', 1),
(4, 3, 'Universidad', 1),
(5, 3, 'Monitoria', 1),
(6, 9, 'Proyecto', 1),
(7, 5, 'Monitoria', 1),
(8, 5, 'Programacion', 1),
(9, 6, 'Universidad', 1),
(10, 7, 'Monitoria', 1),
(11, 7, 'Base de datos', 1),
(12, 8, 'Repositorio', 1),
(13, 8, 'Control', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_aprendizaje`
--

CREATE TABLE `tm_aprendizaje` (
  `Ap_id` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `url_in` varchar(150) COLLATE utf8mb4_spanish_ci NOT NULL,
  `est` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tm_aprendizaje`
--

INSERT INTO `tm_aprendizaje` (`Ap_id`, `nombre`, `url_in`, `est`) VALUES
(1, 'Consultas', 'https://hopelchen.tecnm.mx/principal/sylabus/fpdb/recursos/r131620.PDF', 1),
(2, 'MySQL', 'https://dev.mysql.com/doc/', 1),
(3, 'MongoDB', 'https://docs.mongodb.com/', 1),
(4, 'Php', 'https://www.php.net/manual/es/', 0),
(5, 'postgreSQL', 'https://www.postgresql.org/docs/current/', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_noticias`
--

CREATE TABLE `tm_noticias` (
  `id_not` int(11) NOT NULL,
  `titulo` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `img_noti` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `url_noti` varchar(150) COLLATE utf8mb4_spanish_ci NOT NULL,
  `noti_Import` int(11) NOT NULL,
  `Autor` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `Tema` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha` date DEFAULT NULL,
  `est` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tm_noticias`
--

INSERT INTO `tm_noticias` (`id_not`, `titulo`, `img_noti`, `url_noti`, `noti_Import`, `Autor`, `Tema`, `fecha`, `est`) VALUES
(1, 'Monitorias Academicas', '1.jpg', 'https://www.ucundinamarca.edu.co/index.php/noticias-ucundinamarca/84-institucional/2514-convocatoria-monitorias-ipa-2021', 1, 'Sergio', 'Monitorias', '2021-05-19', 1),
(2, 'Guía Base de Datos', '2.jpg', 'https://www.uoc.edu/pdf/masters/oficiales/img/913.pdf', 1, 'Uni Oberta de Catalunya', 'BD', '2021-04-11', 1),
(5, 'Reconocimiento a Monitorias', '4.png', 'http://www.ucundinamarca.edu.co/gaceta/phocadownload/rectoria_resoluciones/2020/069.pdf', 0, 'Sergio', 'Monitorias', '2021-03-21', 1),
(6, 'Bienvenidos a la U', '3.jpg', 'https://www.ucundinamarca.edu.co/index.php/bienestar-universitario', 1, 'udec', 'Bienestar', '2021-02-07', 1),
(7, 'Reconocimiento a Monitorias 2021', '5.jpg', 'http://www.ucundinamarca.edu.co/gaceta/phocadownload/rectoria_resoluciones/2021/RESOLUCION_025.pdf', 0, 'Apoyo Academico', 'Monitorias', '2021-03-21', 1),
(8, 'GitHub monitor', '6.jpg', 'https://github.com/Enrique213-VP', 0, 'Sergio', 'Programacion', '2021-05-20', 1),
(9, 'Proyecto monitor', '7.png', 'https://github.com/Enrique213-VP/Recursos-Humanos', 1, 'Sergio', 'Angular', '2021-05-04', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_socialmedia`
--

CREATE TABLE `tm_socialmedia` (
  `sm_id` int(11) NOT NULL,
  `sm_nom` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `sm_icon` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `sm_icon2` varchar(45) COLLATE utf8mb4_spanish_ci NOT NULL,
  `sm_rutaW` varchar(150) COLLATE utf8mb4_spanish_ci NOT NULL,
  `est` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tm_socialmedia`
--

INSERT INTO `tm_socialmedia` (`sm_id`, `sm_nom`, `sm_icon`, `sm_icon2`, `sm_rutaW`, `est`) VALUES
(1, 'facebook', 'fb', 'social_facebook', 'https://www.facebook.com/sergioenrique.vargaspedraza/', 1),
(2, 'twitter', 'tw', 'social_twitter', '#', 0),
(3, 'youtube', 'pt', 'social_youtube', 'https://www.youtube.com/channel/UCboflaSQt7bDGp9dzw_eSow', 1),
(5, 'linkedin', 'in', 'social_linkedin', 'https://www.linkedin.com/in/sergio-vargas-pedraza-a86b24209/', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `etiquetas`
--
ALTER TABLE `etiquetas`
  ADD PRIMARY KEY (`idEt`);

--
-- Indices de la tabla `tm_aprendizaje`
--
ALTER TABLE `tm_aprendizaje`
  ADD PRIMARY KEY (`Ap_id`);

--
-- Indices de la tabla `tm_noticias`
--
ALTER TABLE `tm_noticias`
  ADD PRIMARY KEY (`id_not`);

--
-- Indices de la tabla `tm_socialmedia`
--
ALTER TABLE `tm_socialmedia`
  ADD PRIMARY KEY (`sm_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `etiquetas`
--
ALTER TABLE `etiquetas`
  MODIFY `idEt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `tm_aprendizaje`
--
ALTER TABLE `tm_aprendizaje`
  MODIFY `Ap_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tm_noticias`
--
ALTER TABLE `tm_noticias`
  MODIFY `id_not` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tm_socialmedia`
--
ALTER TABLE `tm_socialmedia`
  MODIFY `sm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
