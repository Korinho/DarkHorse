-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 26-06-2018 a las 18:22:16
-- Versión del servidor: 5.6.39-83.1
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Estructura de tabla para la tabla `experience`
--

CREATE TABLE `experience` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
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

INSERT INTO `experience` (`id`, `id_user`, `star`, `end`, `name`, `description`, `qualification`, `type`) VALUES
(1, 6, 2005, 2006, 'Inwave Studio', 'Web Designer ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.', 1),
(2, 6, 2005, 2006, 'X Studio', 'Web Designer ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.', 1),
(3, 6, 2001, 2003, 'ITSA', 'ISC', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.', 2),
(4, 6, 2004, 2006, 'itsa2', 'isc2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.', 2),
(5, 6, 0, 0, 'extra', 'extra extra', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.', 3),
(6, 6, 0, 0, 'extra2', 'extra extra 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.', 3),
(7, 8, 2011, 2012, 'pruebas', 'pruebas', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `job`
--

CREATE TABLE `job` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `country` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `language` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `display` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `job` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `short_description` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `about` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `job_description` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `requirements` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `qualifications` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `start_date` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `salary` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `job`
--

INSERT INTO `job` (`id`, `id_user`, `country`, `language`, `display`, `job`, `short_description`, `about`, `job_description`, `requirements`, `qualifications`, `location`, `start_date`, `salary`, `date`) VALUES
(1, 8, 'Canada', 'en', 'yes', 'Manager for North America', '<p>Our client is currently seeking highly qualified candidates for a Manager from a Top-Tier Strategy Consultancy in North America. Our client is a dynamic and fast-growing company that delivers rapid, sustainable results and builds better businesses for its clients. The Company has a solid reputation for delivering fully implemented, bottom-line improvements to clients across a wide range of sectors and countries. They offer an exceptional career path, a career enhancing environment and excellent benefits. They are absolutely committed to hiring consultants who want to wed themselves to the business and get on the Partner election path.</p>\r\n', '<ul>\r\n	<li>Our client is a dynamic and fast-growing company that delivers rapid, sustainable results and builds better businesses for their clients. As they look to expand into new geographies and industries there are opportunities for motivated individuals to join their team.</li>\r\n	<li>Our client has built a solid reputation for delivering fully implemented, bottom-line improvements to clients across a wide range of sectors and countries. The majority of their work is helping management turn around a business rapidly. This means that they focus on the highest value levers &not;usually around increasing production and revenue and improving cost efficiency.</li>\r\n</ul>\r\n', '<ul>\r\n	<li>Your main role is the overall management of delivering improvements that are measurable within an area of the client&rsquo;s business. You will be the front-line change agent in that area. You will set the standards for the activities required ensuring the client results, sustainability and coaching your team members, the Implementation Facilitator and Senior Managers within your area to do the same.</li>\r\n	<li>You will lead the problem-solving effort and prioritize opportunities ensuring that the team&rsquo;s efforts are always within the highest-value priorities. You will help your Implementation Facilitator and the clients&#39; senior staff drive rapid and sustainable implementation, coaching them to embed continuous improvement into their business practices.</li>\r\n</ul>\r\n', '<ul>\r\n	<li>Looking for ex-strat house people (McKinsey, Bain, BCG/can be a tier 2 like Monitor, ATK, Strategy&amp;, Booz).</li>\r\n	<li>Experience in mining/metals industry is a plus</li>\r\n	<li>You must be focused heavily on implementation of our client&rsquo;s ideas within an organization. Instead of giving a recommendation, you should stick around and help implement our client&rsquo;s strategies into an organization. Therefore, you will spend a lot of time coaching/training the client. You will work with all levels at the client site.</li>\r\n</ul>\r\n', '<ul>\r\n	<li>2-3 years post MBA in consulting (preferably with experience in operations excellence)</li>\r\n	<li>Bachelor&#39;s degree from top universities</li>\r\n	<li>MBA graduate</li>\r\n	<li>Excellent academic background</li>\r\n	<li>Manager level at major strategy consulting firms</li>\r\n	<li>Excellent problem-solving skills, including ability to structure and prioritize effort within an area and ask the right questions to get to root causes</li>\r\n	<li>Well equipped with consulting toolkits in a Manager&#39;s role capacity</li>\r\n	<li>Track record of achieving tough targets under pressure</li>\r\n	<li>Build trust with Senior Managers and achieve results though managing a team, prioritizing the professional development of team members</li>\r\n	<li>Excellent communication skills, including ability to construct compelling arguments supported by the right facts</li>\r\n	<li>Consulting background in a top-tier strategy consulting firm is a plus (eg. Bain, BCG, McKinsey)</li>\r\n	<li>Fluency in English. Spanish is a plus.&nbsp;</li>\r\n	<li>This is open for candidates based anywhere in the US or Canada&nbsp;</li>\r\n	<li>Open for US/Canadian Citizens or Green Card/Canadian PR holder</li>\r\n	<li>Industry background preferred: Metals &amp; Mining and Utilities is a plus.&nbsp;</li>\r\n</ul>\r\n', 'To be based in US or Canada.  ', 'As soon as possible.', '0000', '2018-03-10 00:51:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nota`
--

CREATE TABLE `nota` (
  `id` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `titulo` varchar(256) NOT NULL,
  `descripcion` varchar(256) NOT NULL,
  `contenido` text NOT NULL,
  `estado` int(4) NOT NULL,
  `imagen` varchar(256) NOT NULL,
  `tipo` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `nota`
--

INSERT INTO `nota` (`id`, `fecha`, `titulo`, `descripcion`, `contenido`, `estado`, `imagen`, `tipo`) VALUES
(37, '2018-03-05 11:44:40', 'Social Media For Employer Branding: 7 Tips To Promote Your Employer Brand On LinkedIn', 'So where do you start with your employer brand on LinkedIn? Whether you’re working with little or no budget, or are looking to make a bigger investment this year, here are 7 LinkedIn features and tips you’ll want to know to help you stand out from your tal', '<p>So where do you start with your employer brand on LinkedIn? Whether you&rsquo;re working with little or no budget, or are looking to make a bigger investment this year, here are 7 LinkedIn features and tips you&rsquo;ll want to know to help you stand out from your talent competitors and build your employer brand to attract, reach and hire the top candidates your company needs.</p>\n\n<h2><strong>1. Encourage Employee To Update Their Profiles</strong></h2>\n\n<p>&nbsp;</p>\n\n<p>An employee&rsquo;s LinkedIn profile is a great opportunity to promote your company&rsquo;s employer brand. Just like online shopping, today&rsquo;s job seekers will research your company online before they even consider applying. And one of these places they&rsquo;ll likely look is LinkedIn.</p>\n\n<p>So encourage your employees to update their LinkedIn profiles. Hold lunch n&rsquo; learn sessions or office hours and provide virtual trainings and resources to make it as easy as possible for employees to help amplify your employer brand on LinkedIn.</p>\n\n<p>For example, at GE Digital, many employees were struggling with how to tell the company and culture story externally, so I helped develop employer brand messaging that they can use and add to their Professional Summary and Experience sections to share more about the company&rsquo;s mission, work and teams. This also helps ensure employees are representing and speaking about your company in a consistent manner.</p>\n\n<p>Another best practice I&rsquo;ve seen many companies do is encouraging employees to add links to the company&rsquo;s careers site, employer brand content, such as&nbsp;<a href=\"https://www.proactivetalent.io/recruiting-videos/\" target=\"_blank\">recruiting videos</a>, to their LinkedIn profiles. This is not only a great way to drive traffic to your careers site and employer brand content, but to also invite candidates to learn more about your company culture, people and jobs.</p>', 1, '15202718801461068691x.jpg', 0),
(38, '2018-03-11 00:05:31', 'Gender Balance', 'Gender Balance in recruiting', '<p>http://www.asianinvestor.net/article/jobs-for-boys-only-instos-struggling-with-gender-balance/443149</p>', 1, '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resume`
--

CREATE TABLE `resume` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `lastname` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `country` varchar(100) NOT NULL,
  `language` varchar(100) NOT NULL,
  `resume` varchar(255) NOT NULL,
  `summary` mediumtext NOT NULL,
  `desired` varchar(50) NOT NULL,
  `display` varchar(10) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `resume`
--

INSERT INTO `resume` (`id`, `id_user`, `name`, `lastname`, `email`, `phone`, `country`, `language`, `resume`, `summary`, `desired`, `display`, `date`) VALUES
(1, 6, 'jeyeli', 'tepepa', 'jehieli9@gmail.com', '2441048688', 'Mexico', 'en', 'Management consultant', 'A data-driven & results-oriented professional with a significant experience in driving performance and behavior improvements. \n- Undertaken successful improvement projects in in a wide range of industries. \n- Enthusiastic, dynamic, confident, and committed to excellence \n-Proven results driven consultant who enhances teamwork and team development. ', 'freelancer', 'yes', '2018-02-20 15:52:45'),
(2, 8, 'jehieli', 'garcia', 'jehieli9@hotmail.com', '2441048688', 'Mexico', 'en', 'Manaufacturing Engineering Director', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.', 'freelancer', 'yes', '2018-02-20 19:43:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccion`
--

CREATE TABLE `seccion` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `contenido` text NOT NULL,
  `titulo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `seccion`
--

INSERT INTO `seccion` (`id`, `nombre`, `contenido`, `titulo`) VALUES
(1, 'Home', '<p>Somos una empresa pionera en la prestaci&oacute;n de servicios inform&aacute;ticos PYMES y corporativos, creada para garantizar la seguridad y correcto funcionamiento de sus sistemas, permiti&eacute;ndole a los empresarios y directivos centrarse en sus negocios. Desde hace n a&ntilde;os prestamos servicios a reconocidas empresas</p>', 'Acerca de GigaPyme'),
(2, 'Servicios', '<p>Ofrecemos servicios en forma altamente personalizada, comprendiendo que cada empresa es &uacute;nica, creando una soluci&oacute;n a la medida de cada necesidad. Somos especialistas en identificar y entender las necesidades inform&aacute;ticas de nuestros clientes para ofrecerles la mejor soluci&oacute;n integral</p>', 'Servicios');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `user` varchar(15) DEFAULT NULL,
  `pass` varchar(64) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `domicilio` varchar(100) DEFAULT NULL,
  `colonia` varchar(100) DEFAULT NULL,
  `ciudad` varchar(50) DEFAULT NULL,
  `cp` varchar(5) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `activo` int(11) DEFAULT '1',
  `token` varchar(200) DEFAULT NULL,
  `inicio_sesion` datetime DEFAULT NULL,
  `fin_sesion` datetime DEFAULT NULL,
  `avatar` varchar(50) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `nivel` int(5) DEFAULT NULL,
  `sexo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `user`, `pass`, `nombre`, `email`, `domicilio`, `colonia`, `ciudad`, `cp`, `telefono`, `tipo`, `activo`, `token`, `inicio_sesion`, `fin_sesion`, `avatar`, `fecha`, `nivel`, `sexo`) VALUES
(1, 'admin', 'a2960f70941d29b6123e6ebe493f38d2', 'admin', 'admin@gmail.com', 'av hidalgo 701', '', '', '', '145623', '', 1, 'e4ff38ee351ef12cc43433b7b342d609', '2018-03-21 00:01:21', '2018-03-21 00:01:09', NULL, '2013-12-11 10:30:00', 1, 1),
(2, 'pruebas', 'e10adc3949ba59abbe56e057f20f883e', 'jeyeli', 'jehieli9@gmail.com', 'circunvalacion', '', '', '', '123456', '', 1, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'images/avatar/2.jpg', '2013-12-18 12:14:05', 2, 1),
(3, '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', '', '', '', '', '', 0, '', '0000-00-00 00:00:00', '2018-03-23 15:52:54', '', '2014-02-27 13:06:29', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuarios`
--

CREATE TABLE `Usuarios` (
  `IdUsuario` int(11) NOT NULL,
  `Usuario` varchar(50) NOT NULL,
  `type` int(11) NOT NULL,
  `Estatus` varchar(60) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fist_name` varchar(100) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone` varchar(60) NOT NULL,
  `country` varchar(80) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Usuarios`
--

INSERT INTO `Usuarios` (`IdUsuario`, `Usuario`, `type`, `Estatus`, `Password`, `email`, `fist_name`, `last_name`, `phone`, `country`) VALUES
(1, 'Admin', 0, 'Activo', '21232f297a57a5a743894a0e4a801fc3', '', '', '', '', ''),
(4, 'invitado', 0, 'Activo', 'a6ae8a143d440ab8c006d799f682d48d', '', '', '', '', ''),
(6, 'jeyeli', 0, 'Activo', 'ec1b40998b7335a72cd151f59e8f4bfa', 'jehieli9@gmail.com', '', 'tepepa', '2222233345', 'Mexico'),
(8, 'jehieli2', 1, 'Activo', 'ec1b40998b7335a72cd151f59e8f4bfa', 'jehieli9@hotmail.com', '', 'garcia', '123456789', 'Mexico'),
(9, 'raul', 0, 'Inactivo', '9891ca2d0a3b4db0339330c3a9e96748', 'raulbenavides1973@yahoo.it', '', 'benavides', '5212223078888', 'Mexico'),
(10, 'Raul', 0, 'Activo', 'bbf2dead374654cbb32a917afd236656', 'bpsconsultinginfo@gmail.com', '', 'Benavides', '+5212223078888', 'Mexico');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `resume`
--
ALTER TABLE `resume`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `seccion`
--
ALTER TABLE `seccion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  ADD PRIMARY KEY (`IdUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `job`
--
ALTER TABLE `job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `nota`
--
ALTER TABLE `nota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `resume`
--
ALTER TABLE `resume`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `seccion`
--
ALTER TABLE `seccion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  MODIFY `IdUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
