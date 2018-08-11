-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-08-2018 a las 20:17:22
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bps_horse`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `id_blog` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `titulo` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `contenido` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `desc_corta` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `imagen` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `blog`
--

INSERT INTO `blog` (`id_blog`, `id_admin`, `titulo`, `contenido`, `desc_corta`, `imagen`, `fecha`) VALUES
(1, 1, 'prueba', 'oawndoaknwodabwodnaowkdnaokwndawd', 'hola oianwodaniwod', 'asd', '2018-08-11 01:32:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `candidatos`
--

CREATE TABLE IF NOT EXISTS `candidatos` (
  `id_candidato` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `apellido` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `numero` bigint(20) NOT NULL,
  `pais` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `foto` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `titulo` text NOT NULL,
  `resumen` text NOT NULL,
  `idioma` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'idioma',
  `display` int(5) NOT NULL,
  `fecha_nacimiento` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `candidatos`
--

INSERT INTO `candidatos` (`id_candidato`, `id_usuario`, `apellido`, `numero`, `pais`, `foto`, `titulo`, `resumen`, `idioma`, `display`, `fecha_nacimiento`) VALUES
(1, 1, 'Mengelle', 2297714558, 'Mexico', '', 'lic en sistemas computacionales administrativos', 'desarrollador', 'Español', 1, '2018-07-13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE IF NOT EXISTS `comentario` (
  `id_comentario` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `nombre` int(11) NOT NULL,
  `correo` int(11) NOT NULL,
  `contenido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleador`
--

CREATE TABLE IF NOT EXISTS `empleador` (
  `id_empleador` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_vacantes` int(11) NOT NULL,
  `nombre` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `giro` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `lugar` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `logo` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleador`
--

INSERT INTO `empleador` (`id_empleador`, `id_usuario`, `id_vacantes`, `nombre`, `giro`, `descripcion`, `lugar`, `logo`) VALUES
(1, 1, 1, 'KanjiCode', 'comercial', 'empresa dedicada al comercio', 'canada', 'images/resource/l4.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `experience`
--

CREATE TABLE IF NOT EXISTS `experience` (
  `id` int(11) NOT NULL,
  `id_candidato` int(11) NOT NULL,
  `star` int(4) NOT NULL,
  `end` int(4) NOT NULL,
  `name` varchar(150) NOT NULL,
  `description` varchar(255) NOT NULL,
  `qualification` varchar(150) NOT NULL,
  `type` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `experience`
--

INSERT INTO `experience` (`id`, `id_candidato`, `star`, `end`, `name`, `description`, `qualification`, `type`) VALUES
(1, 1, 2005, 2006, 'Inwave Studio', 'Web Designer ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.', 1),
(2, 1, 2005, 2006, 'X Studio', 'Web Designer ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.', 1),
(3, 1, 2001, 2003, 'ITSA', 'ISC', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.', 2),
(4, 1, 2004, 2006, 'itsa2', 'isc2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `job`
--

CREATE TABLE IF NOT EXISTS `job` (
  `id` int(11) NOT NULL,
  `id_employer` int(11) NOT NULL,
  `country` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `language` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `display` tinyint(4) NOT NULL,
  `job` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `short_description` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `about` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `job_description` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `requirements` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `qualifications` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `start_date` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `salary` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `postulaciones` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `job`
--

INSERT INTO `job` (`id`, `id_employer`, `country`, `language`, `display`, `job`, `short_description`, `about`, `job_description`, `requirements`, `category`, `qualifications`, `location`, `start_date`, `salary`, `postulaciones`, `date`) VALUES
(1, 1, 'Canada', 'en', 1, 'Manager for North America', 'Our client is currently seeking highly qualified candidates for a Manager from a Top-Tier Strategy Consultancy in North America. Our client is a dynamic and fast-growing company that delivers rapid, sustainable results and builds better businesses for its clients. The Company has a solid reputation for delivering fully implemented, bottom-line improvements to clients across a wide range of sectors and countries. They offer an exceptional career path, a career enhancing environment and excellent benefits. They are absolutely committed to hiring consultants who want to wed themselves to the business and get on the Partner election path.\n', 'Our client is a dynamic and fast-growing company that delivers rapid, sustainable results and builds better businesses for their clients. As they look to expand into new geographies and industries there are opportunities for motivated individuals to join their team.\nOur client has built a solid reputation for delivering fully implemented, bottom-line improvements to clients across a wide range of sectors and countries. The majority of their work is helping management turn around a business rapidly. This means that they focus on the highest value levers &not;usually around increasing production and revenue and improving cost efficiency.\n', 'Your main role is the overall management of delivering improvements that are measurable within an area of the client&rsquo;s business. You will be the front-line change agent in that area. You will set the standards for the activities required ensuring the client results, sustainability and coaching your team members, the Implementation Facilitator and Senior Managers within your area to do the same.\nYou will lead the problem-solving effort and prioritize opportunities ensuring that the team&rsquo;s efforts are always within the highest-value priorities. You will help your Implementation Facilitator and the clients&#39; senior staff drive rapid and sustainable implementation, coaching them to embed continuous improvement into their business practices.\n', 'Looking for ex-strat house people (McKinsey, Bain, BCG/can be a tier 2 like Monitor, ATK, Strategy&amp;, Booz).\nExperience in mining/metals industry is a plus\nYou must be focused heavily on implementation of our client&rsquo;s ideas within an organization. Instead of giving a recommendation, you should stick around and help implement our client&rsquo;s strategies into an organization. Therefore, you will spend a lot of time coaching/training the client. You will work with all levels at the client site.\n', 'SAP Consulting', '2-3 years post MBA in consulting (preferably with experience in operations excellence)\nBachelor&#39;s degree from top universities\nMBA graduate\nExcellent academic background\nManager level at major strategy consulting firms\nExcellent problem-solving skills, including ability to structure and prioritize effort within an area and ask the right questions to get to root causes\nWell equipped with consulting toolkits in a Manager&#39;s role capacity\nTrack record of achieving tough targets under pressure\nBuild trust with Senior Managers and achieve results though managing a team, prioritizing the professional development of team membersExcellent communication skills, including ability to construct compelling arguments supported by the right facts\nConsulting background in a top-tier strategy consulting firm is a plus (eg. Bain, BCG, McKinsey)\nFluency in English. Spanish is a plus.&nbsp;\n	This is open for candidates based anywhere in the US or Canada&nbsp;\n	Open for US/Canadian Citizens or Green Card/Canadian PR holder\n	Industry background preferred: Metals &amp; Mining and Utilities is a plus.&nbsp;\n', 'US or Canada.  ', 'As soon as possible.', '0000', 3, '2018-08-03 20:47:48'),
(2, 1, 'Bahamas', 'en', 1, 'ASD', 'asddwqqq', 'dqwdvv', 'adwdqwf', 'q3efasdqwe', 'IT Consulting', 'awdqgweq', 'asdqwe', 'asdasd', '1900', 1, '2018-08-03 20:47:55'),
(3, 1, 'Azerbaijan', 'en', 1, 'programador', 'programador backend', 'somos una empresa de desarollo web especializado en el desarollo de sistemas a la medida', 'se necesita programador php poo con conocimientos avanzados de javascript y css ', 'licenciatura o ingenieria en sistemas\r\ningles', 'IT Consulting', 'no se ', 'canada', '15 agosto 2019', '30000', 2, '2018-08-03 20:47:52'),
(4, 1, 'Andorra', 'en', 1, 'prueba 2', 'pnapknpakplknwdawd', 'lknknpbpk´q´fbp´kq´w´nqwd', 'pknobpkbfpqopj q qp qpibd', 'jbpibpiqwdpf  pibqpibqf pibqf', 'SAP Consulting', 'obqwbdpqd pibqowidbf oqbwpoif', 'pibpiqbpqff pibqpifbqf lobi', '20 agosto 2018', '40000', 5, '2018-08-07 04:35:22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notificaciones`
--

CREATE TABLE IF NOT EXISTS `notificaciones` (
  `id` int(11) NOT NULL,
  `nuevosUsuarios` int(11) NOT NULL,
  `nuevasVacantes` int(11) NOT NULL,
  `nuevosEmpleadores` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `soporte`
--

CREATE TABLE IF NOT EXISTS `soporte` (
  `id_soporte` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `titulo` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ticket` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `respuesta` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL COMMENT 'id de usuario',
  `nombre` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL COMMENT 'nombre del usuario',
  `apellido` text NOT NULL COMMENT 'apellido del usuario',
  `password` varchar(50) NOT NULL COMMENT 'contraseña',
  `email` varchar(50) NOT NULL COMMENT 'correo electronico',
  `modo` varchar(20) NOT NULL COMMENT 'modo de registro',
  `verificacion` int(5) NOT NULL COMMENT 'verificacion de correo',
  `emailencriptado` varchar(100) NOT NULL COMMENT 'correo encriptado',
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'fecha de registro',
  `tipo` int(5) NOT NULL COMMENT 'tipo de cuenta'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellido`, `password`, `email`, `modo`, `verificacion`, `emailencriptado`, `fecha`, `tipo`) VALUES
(1, 'Alberto', '', '12345', 'mengelle10@hotmail.com', 'directo', 1, 'prueba', '2018-08-04 21:54:45', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacante_candidato`
--

CREATE TABLE IF NOT EXISTS `vacante_candidato` (
  `id_cand_vacante` int(11) NOT NULL COMMENT 'id',
  `id_candidato` int(11) NOT NULL COMMENT 'id de candidato',
  `id_vacante` int(11) NOT NULL COMMENT 'id de vacante'
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `vacante_candidato`
--

INSERT INTO `vacante_candidato` (`id_cand_vacante`, `id_candidato`, `id_vacante`) VALUES
(1, 1, 1),
(2, 1, 3),
(13, 1, 2),
(17, 1, 4);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indices de la tabla `candidatos`
--
ALTER TABLE `candidatos`
  ADD PRIMARY KEY (`id_candidato`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id_comentario`);

--
-- Indices de la tabla `empleador`
--
ALTER TABLE `empleador`
  ADD PRIMARY KEY (`id_empleador`),
  ADD UNIQUE KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_employer` (`id_employer`);

--
-- Indices de la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `soporte`
--
ALTER TABLE `soporte`
  ADD PRIMARY KEY (`id_soporte`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `vacante_candidato`
--
ALTER TABLE `vacante_candidato`
  ADD PRIMARY KEY (`id_cand_vacante`),
  ADD KEY `id_vacante` (`id_vacante`),
  ADD KEY `id_candidato` (`id_candidato`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `candidatos`
--
ALTER TABLE `candidatos`
  MODIFY `id_candidato` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `empleador`
--
ALTER TABLE `empleador`
  MODIFY `id_empleador` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `job`
--
ALTER TABLE `job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `soporte`
--
ALTER TABLE `soporte`
  MODIFY `id_soporte` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id de usuario',AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `vacante_candidato`
--
ALTER TABLE `vacante_candidato`
  MODIFY `id_cand_vacante` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',AUTO_INCREMENT=18;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `candidatos`
--
ALTER TABLE `candidatos`
  ADD CONSTRAINT `candidatos_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `empleador` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `vacante_candidato`
--
ALTER TABLE `vacante_candidato`
  ADD CONSTRAINT `vacante_candidato_ibfk_1` FOREIGN KEY (`id_candidato`) REFERENCES `candidatos` (`id_candidato`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
