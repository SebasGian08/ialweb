-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 06-12-2024 a las 20:55:46
-- Versión del servidor: 10.6.20-MariaDB
-- Versión de PHP: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `grupocod_ialweb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombres` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `admins`
--

INSERT INTO `admins` (`id`, `nombres`, `email`, `password`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Sebastián Vasquez', 'info@gmail.com', '$2y$10$jpKwlvljMi5FDykuTvxhGOd5trm0IIBVrazsylUhrsJbDgeVzyLvm', NULL, 'lCKckP67MZgEeExxtlesHOrev4ymU1KTUqbPPZgoIFTmre9BuO4QTxHlbeID', NULL, '2024-12-05 16:52:23', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alianzas`
--

CREATE TABLE `alianzas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `imagen_path` varchar(150) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `link` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `alianzas`
--

INSERT INTO `alianzas` (`id`, `imagen_path`, `nombre`, `link`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'public/uploads/images/alianzas/IxhZ0iEIxUA6dBgWz3X51RarPqXOYYIvvc8ufShi.png', 'CLINICA MEGASALUD', NULL, '2024-10-28 01:29:49', '2024-12-02 20:09:03', NULL),
(2, 'public/uploads/images/alianzas/S1Z5LSLBMlswPWQwqzJN8udUMyXcZojzDJpYBxko.png', 'UTP', NULL, '2024-11-12 00:04:25', '2024-12-02 20:24:37', NULL),
(3, 'public/uploads/images/alianzas/B48eYiTzxIuG9jyjvKXQpE0018uvNpGeqavFZndn.png', 'AUTONOMA', NULL, '2024-11-12 00:05:08', '2024-12-02 19:49:15', NULL),
(4, 'public/uploads/images/alianzas/d31JuJnkqOoNVNZQGdEOx8k5RtdPrZqwWqsWpywR.png', 'CLINICA MONTELUZ', NULL, '2024-11-12 00:06:04', '2024-12-02 20:09:24', NULL),
(5, 'public/uploads/images/alianzas/hzgWLMptIY2pManClXQhQwI38ZpdJ68Q1xlTqPO4.png', 'UMA', NULL, '2024-11-12 00:06:44', '2024-12-02 20:09:08', NULL),
(6, 'public/uploads/images/alianzas/cZ3cQeVjQPkqGayPEy6mPV7gFLvpvev94bgMH8SX.png', 'CLINICA SAGRADA FAMILIA', NULL, '2024-12-02 19:50:59', '2024-12-02 20:26:52', NULL),
(7, 'public/uploads/images/alianzas/EzifjjdMQVZhYFPfeYLGcaawwh2BSnksOV26JAlv.png', 'CLINICA SANTA BEATRIZ', NULL, '2024-12-02 19:52:05', '2024-12-02 20:26:57', NULL),
(8, 'public/uploads/images/alianzas/bQwKrWuOKavBzLpCFAfTY3bgV47S7qTi8HIAnVJU.png', 'MUNDO SALUD', NULL, '2024-12-02 19:52:15', '2024-12-02 20:27:02', NULL),
(9, 'public/uploads/images/alianzas/3tJH3hA1pDgG5lS05nJxYTrlDGCVWQyGPqZDblUt.png', 'AVANLAB FARMACIA', NULL, '2024-12-02 19:52:26', '2024-12-02 20:27:07', NULL),
(10, 'public/uploads/images/alianzas/KsIU4cpeZpl1IDZscTeBACbnRC3IiWHmuOPtCs21.png', 'INKAFARMA', NULL, '2024-12-02 19:52:34', '2024-12-02 20:27:11', NULL),
(11, 'public/uploads/images/alianzas/XP59I7kgJZo9jpdeQf52ARHswLFwI486fMAwffj2.png', 'JUDITH BOTICA', NULL, '2024-12-02 19:53:24', '2024-12-02 20:27:17', NULL),
(12, 'public/uploads/images/alianzas/GgnUYT8AcMIisyLin4DRwb8fo3NtLdcQU4hSSUpR.png', 'LUZFARMA', NULL, '2024-12-02 19:53:35', '2024-12-02 20:27:23', NULL),
(13, 'public/uploads/images/alianzas/STA7IkswS6pqNcZknmYJrgElWsEP4J3qhI3kcdks.jpg', 'MEGABOTIKAS', NULL, '2024-12-02 19:54:10', '2024-12-02 20:25:56', NULL),
(14, 'public/uploads/images/alianzas/azfwknp4wmaabQPtOuz1lsjitjjvHsYZI8TQYBDq.png', 'NOVA FARMA', NULL, '2024-12-02 19:54:36', '2024-12-02 20:25:38', NULL),
(15, 'public/uploads/images/alianzas/0a9B4RcxMFpnf9EUuMQuMlNlZKNktuGnIiefcvIE.jpg', 'CLINICA MANCHAY', NULL, '2024-12-02 19:54:47', '2024-12-02 20:25:30', NULL),
(16, 'public/uploads/images/alianzas/AieELm0Q8kd55iI4fueawYuY5OEzLfewrNhAexbY.png', 'EL ROBLE', NULL, '2024-12-02 19:54:59', '2024-12-02 20:25:22', NULL),
(17, 'public/uploads/images/alianzas/DAQDAwt3Sl7W6m4VZPS0AbPoeG7kmm2TjauJYPPR.png', 'EUROFISIO', NULL, '2024-12-02 19:55:11', '2024-12-02 20:25:16', NULL),
(18, 'public/uploads/images/alianzas/xE6n5bsbVGqK4MCJkOack3vcTlMKVJRPnWYcHRtK.png', 'QUIROFISIO', NULL, '2024-12-02 19:55:20', '2024-12-02 20:27:58', NULL),
(19, 'public/uploads/images/alianzas/LeVznNLp4j84f7XrOjzRrtf7bpTkgIJPgB3sKqJR.png', 'SERVAL', NULL, '2024-12-02 20:29:27', '2024-12-02 20:29:27', NULL),
(20, 'public/uploads/images/alianzas/qJb1XRfLdW9PcLk4pGalkt4crjSboQ8aXdlOfzFB.jpg', 'UNIDOS POR UNA SONRISA', NULL, '2024-12-02 20:29:44', '2024-12-02 20:29:44', NULL),
(21, 'public/uploads/images/alianzas/zdBrnejbDnbrFYpV11Si3wbN8h4TjUyjBh9VYwb7.png', 'ADLERLAB', NULL, '2024-12-02 20:30:21', '2024-12-02 20:30:21', NULL),
(22, 'public/uploads/images/alianzas/vFRfkiSTwnVoDu1BYLrR2snEEb1jhruIGOP96B9h.jpg', 'CLINICA SANTA LUZMILA', NULL, '2024-12-02 20:30:33', '2024-12-02 20:30:33', NULL),
(23, 'public/uploads/images/alianzas/BPgHfYcyGebKejmQSIzjQGNZ1qRlKsBgflVJ4jRz.png', 'JEXLABS', NULL, '2024-12-02 20:30:46', '2024-12-02 20:30:46', NULL),
(24, 'public/uploads/images/alianzas/LZ3kiXis7hXrweiTypGiLprot1Us7gwYsUQ9SE1w.jpg', 'KADILAB', NULL, '2024-12-02 20:31:14', '2024-12-02 20:31:14', NULL),
(25, 'public/uploads/images/alianzas/mRCAuI5zfvIY7GMG66TJwRkFT9SfLMSZiSrepo9N.png', 'MEDLAB', NULL, '2024-12-02 20:31:44', '2024-12-02 20:31:44', NULL),
(26, 'public/uploads/images/alianzas/pFlB1bAB3dXQ260ObRE5qprJgs29e0494WUPYtq2.jpg', 'SOMMEDICS', NULL, '2024-12-02 20:32:11', '2024-12-02 20:32:11', NULL),
(27, 'public/uploads/images/alianzas/7ubxH0rYjuKZzg4El1tYjS1PL1q9cY9ST24Bqb0A.jpg', '3D', NULL, '2024-12-02 20:35:31', '2024-12-02 20:35:31', NULL),
(28, 'public/uploads/images/alianzas/7169FUhwHUYK4sTsFH1zENEVAqrzvb6JzoVbrFZn.png', 'LIDERMEDICA', NULL, '2024-12-02 20:35:39', '2024-12-02 20:35:39', NULL),
(29, 'public/uploads/images/alianzas/vtN68lLLpfrVqqg04FQRnEEpl6nlvu8ppkMvFWN6.jpg', 'ESPEJO', NULL, '2024-12-02 20:35:46', '2024-12-02 20:35:46', NULL),
(30, 'public/uploads/images/alianzas/4P8Rf57nsraUslLuTe300oA2WelkQM3EAlh3xJO6.jpg', 'MEDICOSSALUD', NULL, '2024-12-02 20:35:54', '2024-12-02 20:35:54', NULL),
(31, 'public/uploads/images/alianzas/crkiVHyYzf1YA2rVNMTwCisy7cE2kVaLTna3hFJL.png', 'MULTIDENT', NULL, '2024-12-02 20:36:02', '2024-12-02 20:36:02', NULL),
(32, 'public/uploads/images/alianzas/Fv8FPNC9NAjYWMsW3sMiEFD2J9sQRV7m7hmyBO8x.jpg', 'DENTALSTUDIO', NULL, '2024-12-02 20:36:12', '2024-12-02 20:36:12', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras`
--

CREATE TABLE `carreras` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `imagen_path` varchar(150) DEFAULT NULL,
  `portada_path` varchar(250) DEFAULT NULL,
  `nombre` varchar(150) NOT NULL,
  `slug` varchar(250) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `informacion` longtext DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `duracion` varchar(150) DEFAULT NULL,
  `turno` varchar(150) DEFAULT NULL,
  `modalidad` varchar(150) DEFAULT NULL,
  `brochure_path` text DEFAULT NULL,
  `imagen_habilidad_path` text DEFAULT NULL,
  `video_beneficios` text DEFAULT NULL,
  `oportunidades_profesionales` longtext DEFAULT NULL,
  `perfil_egresado` longtext DEFAULT NULL,
  `carrera_id` varchar(250) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `carreras`
--

INSERT INTO `carreras` (`id`, `imagen_path`, `portada_path`, `nombre`, `slug`, `descripcion`, `informacion`, `fecha_inicio`, `duracion`, `turno`, `modalidad`, `brochure_path`, `imagen_habilidad_path`, `video_beneficios`, `oportunidades_profesionales`, `perfil_egresado`, `carrera_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'public/uploads/images/carreras/GwjfjWqs41MHA3ekerGhcavUV9GF5ej1spL0MTGk.png', 'public/uploads/images/carreras/x71oQpNsfrvV9dm2o1bSQQOgRaHwiPe9p11qhKGT.png', 'Enfermeria Técnica', 'enfermeria-tecnica', NULL, '<p>El Profesional Técnico en Enfermería Técnica está formado para realizar actividades de promoción de la salud así como prevención de la salud aplicando&nbsp; el enfoque intercultural y las guías, procedimiento y normativa vigente.&nbsp;<span style=\"color: var(--bs-component-color); font-family: var(--bs-font-sans-serif); font-weight: var(--bs-body-font-weight); letter-spacing: 0px; text-align: var(--bs-body-text-align);\">Asimismo, está capacitado para asistir en la atención de las necesidades básicas y en los cuidados integrales de la salud de la persona en las diferentes etapas de la vida, aplicando el enfoque intercultural en concordancia con la normatividad.&nbsp;</span></p><div><br></div>', '2025-01-10', '6 ciclos', '[\"Ma\\u00f1ana\",\"Tarde\",\"Noche\"]', '[\"Presencial\"]', 'public/uploads/images/carreras/3KqijDkFlxnR3XjBy2BvVSYWOeIPxOw0AKG2NmtQ.pdf', 'public/uploads/images/carreras/cjMwNQuq6Pnzjxrmfkjw4VHyVlwCb3bqJ2xm5eN5.png', 'https://www.youtube.com/watch?v=CMNNvM_gDm4', '[\"Hospitales del MISA y ESSALUD\",\"Cl\\u00ednicas privadas\",\"Casas de Reposo para adultos mayores y albergues para ni\\u00f1os\",\"Centros Comunitarios y ONGS\",\"T\\u00f3pico de instituciones educativas\",\"Centro comerciales\"]', '[\"El profesional tecnico en Enfermeria tecnica desarrolla capacidades y habilidades que le permiten planificar, organizar y realizar servicios tecnicos de enfermeria en el \\u00e1mbito del cuidado y mantenimiento en la salud de forma integral, dirigidos a la persona seg\\u00fan etapas de vida, familia y comunidad.\"]', '1', '2024-10-29 11:33:56', '2024-12-03 19:19:34', NULL),
(3, 'public/uploads/images/carreras/34eRtYn1wfqsM5JOlazIMSzN0QhLYOoYzXPCJeBe.png', 'public/uploads/images/carreras/RYCmLprqxIWbV9rw2XONaKTDo1qXfXIzKJLqllEx.png', 'Farmacia Técnica', 'farmacia-tecnica', NULL, '<p>El Profesional Técnico en Farmacia Técnica está capacitado para realizar actividades de prevención de la salud, aplicando el enfoque intercultural. Así también es capaz de realizar el expendio de productos farmacéuticos, dispositivos médicos, productos sanitarios y afines bajo la supervisión del químico farmacéutico.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>', '2025-01-10', '6 ciclos', '[\"Ma\\u00f1ana\",\"Tarde\",\"Noche\"]', '[\"Presencial\"]', NULL, 'public/uploads/images/carreras/mq8msrJaIYYMi6oI4tYjIxZKHWMbaYWxvi1TDl4a.png', 'https://www.youtube.com/watch?v=tLS36K-dpKY', '[\"Laboratorio de la industria cosm\\u00e9tica y farmac\\u00e9utica\",\"En el laboratorio de preparados magistrales de una farmacia o boticas\",\"En droguer\\u00edas y distribuci\\u00f3n de medicamentos\",\"En el expendio de productos farmac\\u00e9uticos, sanitarios y dispositivos m\\u00e9dicos\",\"En la gesti\\u00f3n y administraci\\u00f3n de boticas y farmacias\",\"En las preparaciones farmac\\u00e9uticas elaboradas con base en productos naturales\"]', '[\"El t\\u00e9cnico profesional en farmacia, es el profesional de la salud con formaci\\u00f3n cient\\u00edfica, tecnol\\u00f3gica y human\\u00edstica. Est\\u00e1 capacitado para asistir al qu\\u00edmico farmac\\u00e9utico y otros integrantes del equipo de salud en las diversas \\u00e1reas de acci\\u00f3n de la farmacia, tanto en el \\u00e1mbito p\\u00fablico como en el privado, desempe\\u00f1\\u00e1ndose activamente en el expendio, almacenamiento y distribuci\\u00f3n de medicamentos, dispositivos m\\u00e9dico y productos sanitarios en las farmacias de cl\\u00ednicas u hospitales del sector p\\u00fablico o privado, as\\u00ed como tambi\\u00e9n trabajar en la elaboraci\\u00f3n de f\\u00f3rmulas magistrales, preparados oficinales y homeop\\u00e1ticos.\"]', '2', '2024-11-05 04:29:40', '2024-12-03 19:20:21', NULL),
(4, 'public/uploads/images/carreras/yWW9h2IaymE5jH8xevs94shRmNDb4t7vl1CRZhpn.png', 'public/uploads/images/carreras/ZBC8l619cgLFGMW2jAsvg7TD2EumODccMAfuMAym.png', 'Fisioterapia y Rehabilitacion', 'fisioterapia-y-rehabilitacion', NULL, '<p>&nbsp;El Profesional Técnico en Fisioterapia y Rehabilitación está formado para realizar acciones de promoción y prevención de la salud física considerando las indicaciones del profesional de salud responsable.&nbsp;&nbsp;<span style=\"color: var(--bs-component-color); font-family: var(--bs-font-sans-serif); font-weight: var(--bs-body-font-weight); letter-spacing: 0px; text-align: var(--bs-body-text-align);\">Asimismo, el profesional técnico está capacitado para asistir en la evaluación fisioterapéutica&nbsp; y del desarrollo psicomotor y en el tratamiento fisioterapéutico, aplicando las técnicas estandarizadas&nbsp; y bajo la supervisión del profesional de salud responsable. Así también, cuenta con la formación para asistir en terapia de rehabilitación neurológica, reumatológica, traumatológica, geriátrica y deportiva, aplicando los diferentes agentes físicos y bajo la supervisión del profesional de salud responsable.&nbsp;</span></p><div><br></div>', '2025-01-10', '06 ciclos', '[\"Ma\\u00f1ana\",\"Tarde\",\"Noche\"]', '[\"Presencial\"]', NULL, 'public/uploads/images/carreras/y0ixyLtDh4aQgPXKkOP7GNskVniQ9YZo52PFnYEe.png', 'https://www.youtube.com/watch?v=Xo5fHIIu5Yw', '[\"Hospitales del sector p\\u00fablico y privadas: En el servicio de Fisioterapia y  Rehabilitaci\\u00f3n\",\"Cl\\u00ednicas: En el servicio de Fisioterapia y Rehabilitaci\\u00f3n\",\"Centros especializados en Fisioterapias y Masoterapia\",\"Spas: En el \\u00e1rea de est\\u00e9tica personal\",\"Entidades deportivas\",\"Casa del adulto mayor\"]', '[\"El Profesional T\\u00e9cnico en Fisioterapia y Rehabilitaci\\u00f3n desarrolla las capacidades y habilidades que le permitan planificar, organizar y realizar servicios t\\u00e9cnicos de su competencia, asistiendo al licenciado de la salud responsable en los procesos de tratamiento y recuperaci\\u00f3n de la paciente o comunidad, participando en los tratamientos de fisioterapia y rehabilitaci\\u00f3n por medios f\\u00edsicos (en complementaci\\u00f3n de electroestimulaci\\u00f3n, ultrasonido terap\\u00e9utico y magnoterapia), ejercicios terap\\u00e9uticos (individuales o grupales) o t\\u00e9cnicas especiales (masoterapia).\"]', '3', '2024-11-05 16:02:27', '2024-12-03 19:20:34', NULL),
(5, 'public/uploads/images/carreras/ePMzkCA4M290rBrtSZeWWsvAU5l9eJKi4Ftv5pxG.png', 'public/uploads/images/carreras/Nmk0uboiNXEzC16SKjGo3UfQRtIoF2xk5yLzzMko.png', 'Laboratorio Clínico', 'laboratorio-clinico', NULL, '<p>El Profesional Técnico en Laboratorio Clínico y Anatomía Patológica está formado para efectuar la extracción y recepción de muestras biológicas humanas, aplicando las normas de bioseguridad y normativa vigente.&nbsp;&nbsp;<span style=\"color: var(--bs-component-color); font-family: var(--bs-font-sans-serif); font-weight: var(--bs-body-font-weight); letter-spacing: 0px; text-align: var(--bs-body-text-align);\">También, está capacitado para asistir en el análisis de muestras biológicas humanas de acuerdo a los procedimientos y aplicando las normas de bioseguridad y normatividad vigente.&nbsp;</span></p><div><br></div>', '2025-01-10', '06 ciclos', '[\"Ma\\u00f1ana\",\"Tarde\",\"Noche\"]', '[\"Presencial\"]', NULL, 'public/uploads/images/carreras/o9rStYeKEijLznOAn56d9kpvKO3Eo1vJUO62900V.png', 'https://www.youtube.com/watch?v=LDruRQ1Ul-I', '[\"En el \\u00c1rea de los Servicios de Laboratorio Cl\\u00ednico de Hospitales P\\u00fablicos y Cl\\u00ednicas Privadas\",\"En el \\u00c1rea de los Servicios de Hemoterapia y Banco de Sangre de los Hospitales P\\u00fablicos y Cl\\u00ednicas Privadas\",\"En el \\u00c1rea de los Servicios de Laboratorio Cl\\u00ednico de los Centros de Salud P\\u00fablicos y Privadas\",\"En el \\u00c1rea de los Servicios de Laboratorio de Anatom\\u00eda Patol\\u00f3gica de Hospitales P\\u00fablicos y Cl\\u00ednicas Privadas\",\"En laboratorios de Bromatolog\\u00eda realizando an\\u00e1lisis microbiol\\u00f3gicos de alimentos y bebidas\",\"En los centros de investigaci\\u00f3n realizando trabajo de campo con la poblaci\\u00f3n objetivo\"]', '[\"El profesional T\\u00e9cnico en Laboratorio Cl\\u00ednico y Anatom\\u00eda Patol\\u00f3gica es un profesional que utiliza las ciencias biol\\u00f3gicas para planificar desarrollar y evaluar an\\u00e1lisis cl\\u00ednicos como apoyo al diagn\\u00f3stico de las enfermedades, efectuando la extracci\\u00f3n y recepci\\u00f3n de muestras biol\\u00f3gicas humanas de acuerdo a la solicitud de an\\u00e1lisis, aplicando normas de bioseguridad y otras normas vigentes; as\\u00ed como asistir en el proceso y an\\u00e1lisis de muestras biol\\u00f3gicas de acuerdo a procedimientos establecidos, desarrollando innovaciones y utilizando m\\u00e9todos, t\\u00e9cnicas y herramientas con habilidad y destreza, conservando y aplicando los diferentes protocolos de calidad.\"]', '4', '2024-11-05 16:03:21', '2024-12-03 19:20:47', NULL),
(6, 'public/uploads/images/carreras/BG7X0DLPMYfdAB0KjoQwBjrbdSXq6XwuTmewzW5M.png', 'public/uploads/images/carreras/A14ZSikrc4OTKm8hXeOE9daqT0VFXiC8ho1V206R.png', 'Prótesis Dental', 'protesis-dental', NULL, '<p>&nbsp;El Profesional Técnico en Prótesis Dental está capacitado para desarrollar el diseño del modelo de dentaduras, aparatos de ortodoncia, ortopedia funcional y protésicos dentales siguiendo las indicaciones del cirujano dentista y de acuerdo a las normas técnicas establecidas en el laboratorio dental.&nbsp;&nbsp;<span style=\"color: var(--bs-component-color); font-family: var(--bs-font-sans-serif); font-weight: var(--bs-body-font-weight); letter-spacing: 0px; text-align: var(--bs-body-text-align);\">Asimismo, está formado para elaborar prótesis dentales, aparatos de ortodoncia, ortopedia funcional y protésicos dentales, según indicaciones del cirujano dentista y las normas técnicas establecidas en el laboratorio dental. Así también podrá reparar las prótesis dentales removibles según las indicaciones del cirujano dentista, cumpliendo las normas técnicas del laboratorio dental.&nbsp;&nbsp;</span></p><div><br></div>', '2025-01-10', '06 ciclos', '[\"Ma\\u00f1ana\",\"Tarde\",\"Noche\"]', '[\"Presencial\"]', NULL, 'public/uploads/images/carreras/AoNFYfpUXEkTqh2X5svi3ykkgDAJOCw2NDSqkRIp.png', 'https://www.youtube.com/watch?v=w5CbxdVC5f0', '[\"Cl\\u00ednicas odontol\\u00f3gicas, consultorios odontol\\u00f3gicos que cuenten con laboratorio dental\",\"Laboratorios Privados\",\"Comercializaci\\u00f3n y distribuci\\u00f3n de los diversos productos dentales\",\"Institutos de Educaci\\u00f3n Superior: Docente de programa de pr\\u00f3tesis dental\",\"Casa del adulto mayor\"]', '[\"El egresado como profesional t\\u00e9cnico en pr\\u00f3tesis dental est\\u00e1 capacitado para aplicar sus conocimientos, habilidades y destrezas, adecuadas para la confecci\\u00f3n, elaboraci\\u00f3n, dise\\u00f1os y reparaci\\u00f3n de las pr\\u00f3tesis dentales, aparatos de ortodoncia y ortopedia funcional, mediante el uso correcto de equipos y materiales e instrumentos dentales aplicando t\\u00e9cnicas modernas para optimizar los procedimientos para la confecci\\u00f3n y elaboraci\\u00f3n de pr\\u00f3tesis dental total, pr\\u00f3tesis parcial removibles, pr\\u00f3tesis dental fija y aparatos de ortodoncia y ortopedia funcional\"]', '5', '2024-11-05 16:04:02', '2024-12-03 19:18:33', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera_beneficios`
--

CREATE TABLE `carrera_beneficios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `carrera_id` bigint(20) UNSIGNED NOT NULL,
  `imagen_path` varchar(150) DEFAULT NULL,
  `nombre` varchar(150) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `carrera_beneficios`
--

INSERT INTO `carrera_beneficios` (`id`, `carrera_id`, `imagen_path`, `nombre`, `descripcion`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, NULL, 'Orientación en la Atención', 'Nuestras instalaciones están equipadas con la última', '2024-10-30 20:15:13', '2024-10-30 20:18:58', '2024-10-30 20:18:58'),
(2, 1, NULL, 'Orientación en la Atención', 'Nuestras instalaciones están equipadas con la última', '2024-10-30 20:19:17', '2024-10-30 20:27:34', '2024-10-30 20:27:34'),
(3, 1, 'public/uploads/images/carreras/aTWRaeZQSLX6r1LMhimXaugeJOtOAoaSAUkvBzkm.png', 'Formación técnica', 'Competencias alineadas al mercado laboral y a estándares reconocidos.', '2024-10-30 20:19:45', '2024-12-02 20:57:42', NULL),
(4, 1, 'public/uploads/images/carreras/Xghk5JI0ljSnUE0SS8oeWrU6XOQU9pfd2ADwMjN6.png', 'Empleabilidad', 'Desarrollo de habilidades clave para su inserción laboral.', '2024-10-30 20:20:07', '2024-12-02 20:57:26', NULL),
(5, 1, 'public/uploads/images/carreras/qCYklZnYcYMZeOfcw1zb34d7dVTy4OgWJfYs9VDX.png', 'Oportunidades laborales', 'Acceso a múltiples campos y áreas profesionales.', '2024-10-30 20:20:24', '2024-12-02 20:57:52', NULL),
(6, 3, 'public/uploads/images/carreras/VRMCsY5RAxDIyq5t4YyYr7NqDVjOzmS6mL2sIGwq.png', 'Versatilidad Laboral', 'Capacitación para desempeñarse en diversas áreas del sector farmacéutico, desde dispensación hasta control de calidad', '2024-11-12 18:23:20', '2024-12-02 21:02:42', NULL),
(7, 3, 'public/uploads/images/carreras/uaP5iAyvdmmMblhVX71pSZnAUorP2zmXgYnaijQT.png', 'Dominio Técnico Especializado', 'Habilidad para manejar procesos clave en la fabricación, almacenamiento y distribución de productos farmacéuticos.', '2024-11-20 21:10:40', '2024-12-02 21:03:13', NULL),
(8, 3, 'public/uploads/images/carreras/q0vxngn5kXbQgeilYlv0Lxda7qFBb4dOmvf3l49S.png', 'Ética Profesional', 'Formación para garantizar un servicio responsable y de calidad en todas sus funciones.', '2024-11-20 21:11:04', '2024-12-02 21:02:59', NULL),
(9, 4, 'public/uploads/images/carreras/BlEBDULRklLqRGwoDphc9KQszjygZ43qIM49gKYn.png', 'Competencias Técnicas o Específicas', 'El egresado será capaz de desempeñarse con altos estándares de calidad en tareas relacionadas con la competencia técnica definida en el programa de estudio.', '2024-11-20 21:11:25', '2024-12-02 21:15:30', NULL),
(10, 4, 'public/uploads/images/carreras/j1R6pA0M9BjrTSjAsE95AEE0QdfX4nH3TAZufYky.png', 'Ámbitos de Desempeño', 'La diversidad de ámbitos laborales ofrece múltiples oportunidades de inserción profesional en sectores específicos que se alinean con el perfil formativo del programa de estudios.', '2024-11-20 21:11:35', '2024-12-02 21:15:48', NULL),
(11, 4, 'public/uploads/images/carreras/JFzuWgo0cMMDSbW3im3Awuj9HNLbxB6F4QJiMk9n.png', 'Desempeño en el Campo Laboral', 'El egresado tendrá la capacidad de aplicar sus conocimientos técnicos en el campo laboral, contribuyendo al desarrollo de proyectos o procesos dentro de su área de especialización.', '2024-11-20 21:11:48', '2024-12-02 21:15:16', NULL),
(12, 5, 'public/uploads/images/carreras/65wofsDXxiMsZZ4gBO63iS8XRdhs1kjVZpAeFh8Y.png', 'Reconocimiento en el campo laboral', 'Su perfil cumple con las demandas actuales del sector salud, lo que aumenta la empleabilidad en hospitales, clínicas, y laboratorios públicos o privados.', '2024-11-20 21:12:39', '2024-12-03 19:25:05', NULL),
(13, 5, 'public/uploads/images/carreras/NYSB2KzJorf9W7jrfEddHnLYqAXFvM9Umt7iGAV0.png', 'Adaptabilidad profesional:', 'Formación orientada a responder a diferentes áreas como microbiología, hematología, parasitología, entre otras, fomentando la versatilidad en el ámbito laboral.', '2024-11-20 21:12:51', '2024-12-03 19:25:29', NULL),
(14, 5, 'public/uploads/images/carreras/o7eFp09ctNwTqsDBiFCqM0IwOjdDK4EYTRBPPGMA.png', 'Capacitación integral', 'Los egresados estarán preparados para realizar tareas específicas y avanzadas en laboratorios clínicos', '2024-11-20 21:13:04', '2024-12-03 19:24:49', NULL),
(15, 6, 'public/uploads/images/carreras/1vbWjJtjEygZDdgcSnU8MqhoFVglEuz83H0xhO8M.png', 'Alineación con estándares del CNOF', 'Formación basada en las necesidades reales del sector económico y dental, garantizando alta empleabilidad', '2024-11-20 21:13:17', '2024-12-03 19:28:44', NULL),
(16, 6, 'public/uploads/images/carreras/YgkhiKGS0IQZ9aky3nQwTJz0kBrZPdlhHx6gWe05.png', 'Alta competitividad laboral', 'Formación alineada con el marco normativo del MINEDU, que asegura preparación técnica y habilidades blandas esenciales', '2024-11-20 21:13:32', '2024-12-03 19:28:57', NULL),
(17, 6, 'public/uploads/images/carreras/vD20j9SpbrQjDIH4Omua8C3sleIaj82XU3MfN6YW.png', 'Formación integral y especializada', 'Los egresados serán capaces de diseñar, confeccionar, reparar y mantener prótesis dentales y aparatos de ortodoncia con alta precisión, cumpliendo estándares internacionales.', '2024-11-20 21:13:47', '2024-12-03 19:28:20', NULL),
(18, 1, 'public/uploads/images/carreras/Jef9SguvU8Ycp10nsAquKdUnIJJoIdn0Z2JG0NQi.png', 'Modalidades flexibles', 'Formación combinada con experiencia laboral (dual o alternancia, si corresponde).', '2024-12-02 20:54:21', '2024-12-02 20:57:47', NULL),
(19, 3, 'public/uploads/images/carreras/SnnyL2kDJMg3C9qavW7yqR0QmbpKQtxzMWMJp8kb.png', 'Amplitud de Opciones Laborales', 'Acceso a oportunidades en farmacias, boticas, hospitales, droguerías y laboratorios.', '2024-12-02 21:03:28', '2024-12-02 21:03:28', NULL),
(20, 4, 'public/uploads/images/carreras/RQIAejTssgy0vYAGnDHMthAgKN1rmwdf9zmmcM0K.png', 'Beneficios Adicionales', 'Gracias a las competencias adquiridas, el egresado estará preparado para proponer soluciones innovadoras y aportar en la mejora continua de los procesos y productos en su área de trabajo.', '2024-12-02 21:16:05', '2024-12-02 21:16:20', '2024-12-02 21:16:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera_habilidads`
--

CREATE TABLE `carrera_habilidads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `carrera_id` bigint(20) UNSIGNED NOT NULL,
  `imagen_path` varchar(150) DEFAULT NULL,
  `nombre` varchar(150) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `carrera_habilidads`
--

INSERT INTO `carrera_habilidads` (`id`, `carrera_id`, `imagen_path`, `nombre`, `descripcion`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'public/uploads/images/carreras/TepFeqeCNfDa404nbz9GO3dOBGnidiAhpkc5spUS.png', 'Ámbito Privado de Salud', 'Participación en clínicas, policlínicos y centros médicos en diversas áreas.', '2024-10-30 20:23:15', '2024-12-02 20:55:22', NULL),
(2, 1, NULL, 'Ámbito Público de Salud', 'Trabajo en hospitales, centros de salud y estrategias sanitarias (CRED, inmunizaciones, tuberculosis).', '2024-10-30 20:25:40', '2024-12-02 20:55:08', NULL),
(3, 1, NULL, 'Atención Especializada', 'En áreas como emergencia, cirugía, pediatría, ginecobstetricia y neonatología.', '2024-10-30 20:25:56', '2024-12-02 20:55:32', NULL),
(4, 1, NULL, 'Competencias Laborales', 'Formación adaptada a las demandas del mercado laboral.', '2024-10-30 20:26:12', '2024-12-02 20:54:59', NULL),
(5, 3, NULL, 'Laboratorio de la industria cosmética y farmacéutica', 'Aplicación de normativas de buenas prácticas de manufactura (BPM)', '2024-11-11 21:56:29', '2024-12-02 21:00:15', NULL),
(6, 3, NULL, 'Farmacias en clínicas u hospitales', 'Preparación y dispensación de dosis unitarias', '2024-11-12 18:18:25', '2024-12-02 21:00:58', NULL),
(7, 3, NULL, 'Droguerías y distribuidoras de medicamentos', 'Gestión y almacenamiento eficiente de medicamentos en condiciones óptimas', '2024-11-12 18:19:00', '2024-12-02 21:00:43', NULL),
(8, 3, NULL, 'Laboratorio de preparados magistrales', 'Dominio en la preparación de fórmulas magistrales bajo supervisión del químico farmacéutico.', '2024-11-12 18:19:13', '2024-12-02 21:00:29', NULL),
(9, 4, NULL, 'Traumatología', 'Identificación y aplicación de técnicas para tratar lesiones musculoesqueléticas, traumáticas y ortopédicas.', '2024-12-02 21:06:19', '2024-12-02 21:06:19', NULL),
(10, 4, NULL, 'Neurología', 'Rehabilitación de hemiplejias, cuadriplejias y secuelas neurológicas mediante ejercicios específicos.', '2024-12-02 21:06:28', '2024-12-02 21:06:28', NULL),
(11, 4, NULL, 'Relajación y masoterapia', 'Aplicación de masajes terapéuticos y de relajación para disminuir el estrés y mejorar la calidad de vida.', '2024-12-02 21:13:51', '2024-12-02 21:13:51', NULL),
(12, 4, NULL, 'Entidades deportivas', 'Prevención de lesiones mediante programas de fortalecimiento muscular y mejora de la biomecánica', '2024-12-02 21:14:02', '2024-12-02 21:14:02', NULL),
(13, 5, NULL, 'Obtención y recepción de muestras', 'Recoger, etiquetar y registrar muestras biológicas siguiendo protocolos de bioseguridad', '2024-12-03 19:23:07', '2024-12-03 19:23:07', NULL),
(14, 5, NULL, 'Servicios de Hemoterapia y Banco de Sangre', 'Extraer sangre y realizar pruebas iniciales para garantizar la seguridad', '2024-12-03 19:23:16', '2024-12-03 19:23:16', NULL),
(15, 5, NULL, 'Microbiología de alimentos y bebidas', 'Identificar microorganismos que puedan contaminar alimentos', '2024-12-03 19:23:33', '2024-12-03 19:23:33', NULL),
(16, 5, NULL, 'Laboratorios de Control de Calidad', 'Realizar análisis para verificar estándares de calidad en productos', '2024-12-03 19:23:47', '2024-12-03 19:23:47', NULL),
(17, 6, NULL, 'Diseño y modelado de prótesis', 'Capacidad para elaborar prótesis dentales personalizadas utilizando técnicas manuales y digitales.', '2024-12-03 19:26:43', '2024-12-03 19:26:43', NULL),
(18, 6, NULL, 'Elaboración de aparatos funcionales', 'Confección de dispositivos correctivos para el tratamiento ortopédico y ortodóncico.', '2024-12-03 19:26:58', '2024-12-03 19:26:58', NULL),
(19, 6, NULL, 'Diagnóstico de reparaciones', 'Identificar y solucionar daños en prótesis dentales existentes', '2024-12-03 19:27:09', '2024-12-03 19:27:09', NULL),
(20, 6, NULL, 'Uso de software CAD/CAM', 'Manejo de herramientas digitales para el diseño de prótesis y estructuras dentales', '2024-12-03 19:27:24', '2024-12-03 19:27:24', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Formación continua', '2024-10-29 00:24:55', '2024-10-29 00:24:55', NULL),
(2, 'Programas', '2024-10-29 00:26:38', '2024-10-29 00:26:38', NULL),
(3, 'Idiomas', '2024-10-29 00:26:48', '2024-10-29 00:26:48', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuracions`
--

CREATE TABLE `configuracions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `imagen_path` varchar(150) DEFAULT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  `celular` varchar(50) DEFAULT NULL,
  `whatsapp` varchar(50) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `facebook` text DEFAULT NULL,
  `instagram` text DEFAULT NULL,
  `tiktok` text DEFAULT NULL,
  `linkedin` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `configuracions`
--

INSERT INTO `configuracions` (`id`, `imagen_path`, `telefono`, `celular`, `whatsapp`, `email`, `facebook`, `instagram`, `tiktok`, `linkedin`) VALUES
(1, 'public/uploads/images/configuraciones/gGp7Uw2hfuINdmjym7odyqXvug5IYbfpOEHBWavR.png', '(01)330-9090', '934-556-901', '934-556-901', 'consultas@ial.pe', 'https://www.facebook.com/ial.oficial', 'https://www.instagram.com/ial.oficial/?hl=es', 'https://www.tiktok.com/@ial.oficial', 'https://www.linkedin.com/company/ial-oficial/');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `imagen_path` varchar(150) DEFAULT NULL,
  `portada_path` varchar(150) DEFAULT NULL,
  `nombre` varchar(150) NOT NULL,
  `slug` varchar(250) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `informacion` longtext DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `duracion` varchar(150) DEFAULT NULL,
  `turno` varchar(150) DEFAULT NULL,
  `modalidad` varchar(150) DEFAULT NULL,
  `brochure_path` text DEFAULT NULL,
  `video_beneficios` text DEFAULT NULL,
  `galeria_path` longtext DEFAULT NULL,
  `categoria` varchar(150) DEFAULT NULL,
  `carrera_id` varchar(250) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id`, `imagen_path`, `portada_path`, `nombre`, `slug`, `descripcion`, `informacion`, `fecha_inicio`, `duracion`, `turno`, `modalidad`, `brochure_path`, `video_beneficios`, `galeria_path`, `categoria`, `carrera_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'public/uploads/images/cursos/hdMv8WPVywA5zunBbcqSnQjmYqINoLcEjsCNyZGO.png', 'public/uploads/images/cursos/3cmM8JNASTQumc5VGB7BUcSwXqE4mzjhYsTMjYYG.jpg', 'Cuidados del adulto mayor', 'cuidados-del-adulto-mayor', NULL, '<p class=\"MsoNormal\"><span style=\"font-family: Arial;\">El programa de cuidados del adulto mayor te permite aprender\r\nsobre los cambios y alteraciones que ocurren con la vejez, así como los&nbsp;</span><span style=\"font-family: Arial;\">cuidados básicos de higiene y alimentación que mejoran la calidad de vida y la salud del adulto mayor. También se abordan los factores que&nbsp;</span><span style=\"font-family: Arial;\">influyen en estas condiciones y las medidas preventivas para la incontinencia y otros problemas relacionados. Además, se estudian las&nbsp;</span><span style=\"font-family: Arial;\">alteraciones frecuentes de la marcha, el Alzheimer y el Parkinson, así como las principales vías de administración de medicamentos.</span><o:p></o:p></p>', NULL, '4 MESES', '[\"Ma\\u00f1ana\",\"Tarde\",\"Noche\"]', '[\"SemiPresencial\"]', 'public/uploads/images/cursos/Yzi3Xz9Uo2KWpxBls8EQV3xwDgwKBBEGeIqf1wsd.pdf', 'https://www.youtube.com/watch?v=OCK5r0S1DEg', '[\"public\\/uploads\\/images\\/cursos\\/yq0PBcSTh1eFqCs5vNF1l7nYSWNXG5CxB6PVWFj3.png\"]', '[\"Programas\"]', '6', '2024-11-13 23:18:48', '2024-11-25 19:32:00', NULL),
(2, 'public/uploads/images/cursos/yfnRgvlEDT7e3ZNcVnMywdo4GmBLLjsKHxgpyUBu.png', 'public/uploads/images/cursos/kopKp6sQ2soCUhn4FB4DLMrdVmX4Q5orujTEtWN0.jpg', 'Cuidados Auxiliares', 'cuidados-auxiliares', NULL, '<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-family: Arial;\">El programa de cuidados\r\nauxiliares de enfermería capacitará al&nbsp;</span><span style=\"font-family: Arial;\">alumno en los procedimientos básicos de enfermería para&nbsp;</span><span style=\"font-family: Arial;\">atender las necesidades de los pacientes, como la alimentación,&nbsp;</span><span style=\"font-family: Arial;\">movilización y monitoreo de funciones vitales, entre otros.&nbsp;</span><span style=\"font-family: Arial;\">También le permitirá brindar atención a adultos mayores,&nbsp;</span><span style=\"font-family: Arial;\">recién nacidos y niños, así como administrar medicamentos en&nbsp;</span><span style=\"font-family: Arial;\">sus distintas formas, complementando su formación con&nbsp;</span><span style=\"font-family: Arial;\">aspectos éticos relacionados con el cuidado de los pacientes.</span><o:p></o:p></p>', NULL, '4 MESES', '[\"Ma\\u00f1ana\",\"Tarde\",\"Noche\"]', '[\"SemiPresencial\"]', 'public/uploads/images/cursos/vJW9G0IfsQmhPk2uiJqN9LstvmacIH5MRWSrPmyw.pdf', NULL, '[\"public\\/uploads\\/images\\/cursos\\/LmKiCB1zWi18vzQU43IVTij3Nq08nvXr1iLsH34A.png\"]', '[\"Programas\"]', '55', '2024-11-18 19:28:19', '2024-11-25 20:06:46', NULL),
(3, 'public/uploads/images/cursos/AaOEKs3uFQXS461YufJGcCuA4xIew6b9J8MSKiZI.png', 'public/uploads/images/cursos/LNhUSw5MzZA2cYYcAf2vY8xKBsRajr2RpqUYOBpD.jpg', 'Paramédico', 'paramedico', NULL, '<p class=\"MsoNormal\">El programa de paramédico es una formación profesional que prepara a los estudiantes para trabajar en el campo de la atención médica de emergencia. Durante el curso, los estudiantes aprenden sobre anatomía y fisiología, farmacología, evaluación de pacientes, técnicas de emergencia y transporte de pacientes. Es una excelente opción para quienes buscan una carrera emocionante y gratificante en este ámbito.<o:p></o:p></p>', NULL, '4 MESES', '[\"Ma\\u00f1ana\",\"Tarde\",\"Noche\"]', '[\"SemiPresencial\"]', 'public/uploads/images/cursos/KAUs4k3v09gsCDM7K0HXRmlM0o6jxqRLwmn4hsyc.pdf', NULL, '[\"public\\/uploads\\/images\\/cursos\\/vXIRAtEjEZCsyc4wXSxhwdAdj9dUit9bCLeNjFpx.png\"]', '[\"Programas\"]', '10', '2024-11-18 19:34:37', '2024-11-25 19:24:29', NULL),
(4, 'public/uploads/images/cursos/BIBBhMLl4axahEhMBItRmzFY1JvjNtqtDzaWbJfq.png', 'public/uploads/images/cursos/2QHl27LuWbqulGUY7dRKjXQuPxJG3m8NhkcRSGr9.jpg', 'Podología Básica', 'podologia-basica', NULL, '<p class=\"MsoNormal\">El programa de podología básica se centra en el estudio y tratamiento de las afecciones y enfermedades de los pies. Los profesionales de la podología, conocidos como podólogos, están capacitados para diagnosticar y tratar una amplia variedad de problemas relacionados con los pies, como callos, uñas encarnadas, deformidades, lesiones y enfermedades de la piel.<o:p></o:p></p>', NULL, '4 MESES', '[\"Ma\\u00f1ana\",\"Tarde\",\"Noche\"]', '[\"Presencial\"]', 'public/uploads/images/cursos/lF7xhZOv0gxTr6dbkmIRa8cLdd3B8njvS25kRQOF.pdf', NULL, '[\"public\\/uploads\\/images\\/cursos\\/ps1vGSiYjdTjvGgLCWJSqzjFNhzjGuQUzBp8W239.png\"]', '[\"Programas\"]', '39', '2024-11-18 19:35:04', '2024-11-25 19:28:34', NULL),
(5, 'public/uploads/images/cursos/fgVuGGr9Ra1tKm6ZqbH5WzfPfWGHBo790UdG7VXz.png', 'public/uploads/images/cursos/wmqmKpkfd8uDgT0XY4wCOGbsKxD4CtOtiIEfKZ6q.jpg', 'Cirugía menor y suturas', 'cirugia-menor-y-suturas', NULL, '<p class=\"MsoNormal\">El curso de cirugía menor y suturas permitirá al estudiante\r\nutilizando las técnicas para intervenir&nbsp; en\r\nsituaciones donde las personas tengan lesiones traumáticas en la piel y puedan realizar procedimientos de manera eficaz y garantizada como la desinfección de herida, hemostasia y el empleo de suturas. Así mismo reconocerá el instrumental empleado para cada situación, la diversidad de nudos que se emplean en las distintas suturas. El alumno conocerá la técnica de retiro de puntos, así mismo los cuidados postcirugía que debe cumplir con el paciente.<o:p></o:p></p>', NULL, '2 MESES', '[\"Ma\\u00f1ana\",\"Noche\"]', '[\"SemiPresencial\"]', 'public/uploads/images/cursos/1blQjtl5LzJ2FiPybnS0PCJ4fznGwlnboDXSosko.pdf', NULL, '[\"public\\/uploads\\/images\\/cursos\\/d0cfITToksPTTI3FCFSPKtT99hiAsBLV86c971CH.png\"]', '[\"Cursos\"]', '26', '2024-11-18 20:31:01', '2024-12-05 12:50:12', NULL),
(6, 'public/uploads/images/cursos/FEingFNyYnJsmqwf4aWwTy8JZxWclaMKep3bkiZR.png', 'public/uploads/images/cursos/hJlJGbGafFwLs7IiJmmDs1KAzyH81g1UtLXNAjNF.jpg', 'Inyectables', 'inyectables', NULL, '<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">El\r\ncurso de inyectables está diseñado para profesionales de la salud, como enfermeros,\r\nmédicos y farmacéuticos, así como para el público general que desee mejorar sus\r\nhabilidades en la administración de inyecciones. El curso de inyectables se\r\nbasa en fundamentos teóricos, como la ubicación de estructuras anatómicas y las\r\ndiversas técnicas de aplicación y administración de medicamentos. Este curso\r\npermitirá que el alumno reconozca cómo preparar, canalizar y administrar un\r\nfármaco, así como la dosificación de acuerdo con lo indicado por el médico\r\ntratante.<o:p></o:p></span></p>', NULL, '1 MES', '[\"Ma\\u00f1ana\",\"Tarde\",\"Noche\"]', '[\"Presencial\"]', 'public/uploads/images/cursos/90sRPokrnrSXNLfGqReSeOjB6DuebUc6IXwpCbIk.pdf', NULL, '[\"public\\/uploads\\/images\\/cursos\\/RoqPuOJVQ9oJXXsjqDbIoQZQjfznhr99lbVfms82.png\"]', '[\"Cursos\"]', '37', '2024-11-18 20:32:19', '2024-11-25 19:32:27', NULL),
(7, 'public/uploads/images/cursos/x4720hXDXxfuiKTzPzjgysmTVr3qIjqG6aMaYSbF.png', 'public/uploads/images/cursos/ZMTBtkegieEdi8kSLzourTmqRg0W6lPtYvUuTJks.jpg', 'Marketing Farmaceútico', 'marketing-farmaceutico', NULL, '<p class=\"MsoNormal\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">El curso de\r\nmarketing farmacéutico permite aprender programas y métodos estratégicos que\r\nayudan a que los productos farmacéuticos lleguen rápidamente a hospitales,\r\nclínicas y usuarios, lo que conlleva un aumento en las ventas. El marketing\r\ndesempeña un papel importante, ya que es la forma en que los productos se\r\nconvierten en preferencia para los especialistas en salud.<o:p></o:p></span></p>', NULL, '1 MES', '[\"Ma\\u00f1ana\",\"Tarde\",\"Noche\"]', '[\"Virtual\"]', 'public/uploads/images/cursos/vMkbdviIzrwqGBfucE9C6iPMTKCmHeBil7CyGBMd.pdf', NULL, '[\"public\\/uploads\\/images\\/cursos\\/NyNzNE11Zv81hgzqgjwfNuyjPBvxwEeLc63zjdok.png\"]', '[\"Cursos\"]', '39', '2024-11-18 20:33:25', '2024-11-25 19:32:36', NULL),
(8, 'public/uploads/images/cursos/cdKbTVFkaMv8DN2YD6iPMEYP9cDlu0izJIPWNUp1.png', 'public/uploads/images/cursos/NO31RWJNEaFHpgj0WNBuM0ImZ9quNUj320yqdv9L.jpg', 'Masoterapia', 'masoterapia', NULL, '<p class=\"MsoNormal\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">La masoterapia\r\nes un curso terapéutico que utiliza diversas manipulaciones y técnicas manuales\r\npara aliviar el estrés, reducir la tensión muscular, promover la relajación y\r\nrehabilitar lesiones musculares. Este curso te proporcionará los conocimientos\r\ny habilidades necesarias para convertirte en un masoterapeuta profesional. Se\r\nrecomienda que el alumno tenga interés en el cuidado del cuerpo y el bienestar\r\ngeneral.</span><o:p></o:p></p>', NULL, '2 MESES', '[\"Ma\\u00f1ana\",\"Tarde\",\"Noche\"]', '[\"Presencial\"]', 'public/uploads/images/cursos/sFFSdlcxDX1iJoA9R1U8EYc65DQtRTc8TCD4a32U.pdf', NULL, '[\"public\\/uploads\\/images\\/cursos\\/cCrpc5xQ7QZ5u5Ml77CT9sCwpc27fFKu2LIO9qQX.png\"]', '[\"Cursos\"]', '51', '2024-11-18 20:34:16', '2024-11-25 19:32:51', NULL),
(9, 'public/uploads/images/cursos/1h4bckUr3S8seiPVyW9kSAqt8DWNWPijmePmDLaf.png', 'public/uploads/images/cursos/eCyqeiNOAyADHZBAKxo4CUlP2Lb8O4sVBbAkZJrf.jpg', 'Nutrición Deportiva', 'nutricion-deportiva', NULL, '<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">La\r\nnutrición deportiva es un curso muy importante para el rendimiento atlético, ya\r\nque una dieta adecuada puede mejorar la fuerza, la velocidad y la resistencia\r\nde los atletas. Una alimentación adecuada también ayuda a los deportistas a\r\nrecuperarse después de los entrenamientos y a reducir el riesgo de lesiones.\r\nUna buena hidratación y nutrición mejoran el rendimiento y proporcionan las calorías\r\nnecesarias para satisfacer sus requerimientos energéticos.</span><o:p></o:p></p>', NULL, '2 MESES', '[\"Ma\\u00f1ana\",\"Tarde\",\"Noche\"]', '[\"Virtual\"]', 'public/uploads/images/cursos/LKnaEsJq3JAtuSnkSJ3mLyHcnVdz6vg4bGtWR9Ig.pdf', NULL, '[\"public\\/uploads\\/images\\/cursos\\/L3dXyT74Hp0qeEugF8ZJfizPPZ9HUCHUu5Lp0nSR.png\"]', '[\"Cursos\"]', '40', '2024-11-18 20:35:04', '2024-11-25 19:32:58', NULL),
(10, 'public/uploads/images/cursos/SJWhr08tY74jVkb8wUax0VsFniM3KOiPp4XejBFn.png', 'public/uploads/images/cursos/NKhOxNIrIlGrIBG9nKF3yXodomIKLTuTBt68Lpef.jpg', 'Primero Auxilios', 'primero-auxilios', NULL, '<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">En\r\nel curso de primeros auxilios aprenderás técnicas básicas, conocimientos y\r\nhabilidades que te permitirán proporcionar ayuda inmediata a una persona que ha\r\nsufrido una lesión o enfermedad repentina. Aprenderás a evaluar la situación, a\r\nllamar a los servicios de emergencia, a tratar heridas y quemaduras, y mucho\r\nmás. Este curso está diseñado para cualquier persona interesada en aprender cómo\r\nresponder y actuar en situaciones de emergencia, ya sea en el hogar, en el\r\ntrabajo o en cualquier otro lugar. No se requiere experiencia previa.<o:p></o:p></span></p>', NULL, '1 MES', '[\"Ma\\u00f1ana\",\"Tarde\",\"Noche\"]', '[\"Presencial\"]', 'public/uploads/images/cursos/exTXitJOvT9nDPhajzqbJRWngHDbFwzxlJDQ4uyo.pdf', NULL, '[\"public\\/uploads\\/images\\/cursos\\/AXaNIL1eJI4sVQibIc5CIWyeWDtKl3iO9bedIGkw.png\"]', '[\"Cursos\"]', '8', '2024-11-18 20:39:15', '2024-11-25 19:28:51', NULL),
(11, 'public/uploads/images/cursos/M9G6pLiKtFo6DGhm9p5POCvnBKPvjwwPf3XSO0eU.png', 'public/uploads/images/cursos/Wz3hVI6YZTKa2QxYx3tKppsafsuzo76F2DcmQ6LW.jpg', 'Tratamiento Facial Básico', 'tratamiento-facial-basico', NULL, '<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">En\r\nel curso de tratamiento facial básico, exploramos todas las facetas del cuidado\r\nde la piel y aprenderemos técnicas esenciales para el tratamiento facial. Desde\r\nel uso de diferentes mascarillas hasta masajes faciales y tratamientos\r\nnutritivos, este curso te proporcionará las habilidades y conocimientos\r\nnecesarios para ofrecer tratamientos faciales de alta calidad.<o:p></o:p></span></p>', NULL, '2 MESES', '[\"Ma\\u00f1ana\",\"Tarde\",\"Noche\"]', '[\"Presencial\"]', 'public/uploads/images/cursos/pU6QUZdmaz2NBj4ZHrwW7Ep7KJ9hxj2AGDFKnZUS.pdf', NULL, '[\"public\\/uploads\\/images\\/cursos\\/Tm0cPxhGUcZHOUhdzhpjeigyaL1wUq0BIpnPDNqE.png\"]', '[\"Cursos\"]', '42', '2024-11-18 20:40:34', '2024-11-25 19:30:51', NULL),
(12, 'public/uploads/images/cursos/KoMneTQNLIQ83XWUF2zteahhhBThKy4ospCezGgj.png', 'public/uploads/images/cursos/YPokBxctvDNXyzFI96D8Uxy1y0oz8oX8OX7g30ob.jpg', 'Cóctel de Vida', 'coctel-de-vida', NULL, '<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">El\r\ntaller de Cóctel de Vida entrega al alumno los conocimientos y la destreza en\r\nsu canalización. Conocerá las distintas propiedades de los componentes del\r\ncóctel de vida como <b>Vitamina C&nbsp;</b>(fortalecimiento del sistema\r\ninmunológico y la capacidad de combatir infecciones),<b>&nbsp;Vitamina B12</b>&nbsp;(ayuda a la formación de glóbulos\r\nrojos, mejora la concentración y la memoria),&nbsp;<b>Cholo 2</b>&nbsp;(ayuda a combatir\r\nproblemas del hígado),&nbsp;<b>Lymphdiaral&nbsp;</b>(utilizado para mejorar la circulación linfática y\r\ncombatir la retención de líquidos),&nbsp; y&nbsp;<b style=\"background-color: rgb(255, 255, 255);\">Pasconal forte</b>&nbsp;(mejora\r\nel estado de ánimo, aumenta la energía, disminuye el estrés).<o:p></o:p></span></p>', NULL, '1 DÍA', '[\"Ma\\u00f1ana\",\"Tarde\",\"Noche\"]', '[\"Presencial\"]', NULL, NULL, '[\"public\\/uploads\\/images\\/cursos\\/2YVrkLwduwrTCni4KthNsvVU5OtD3Z0SktfAaIeZ.png\"]', '[\"Talleres\"]', '68', '2024-11-18 20:57:20', '2024-11-25 19:32:11', NULL),
(13, 'public/uploads/images/cursos/GNt2CoPqdvsf2jbyKGcb82BFR9jn5TyMsMPUQl0R.png', 'public/uploads/images/cursos/k8Gkt6e89I9EnS2IE5vzSydsf8jznFi61f9Ajq1U.jpg', 'Control y monitoreo de signos vitales', 'control-y-monitoreo-de-signos-vitales', NULL, '<p class=\"MsoNormal\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">El curso\r\ncapacita al alumno para tomar decisiones sobre el cuidado del paciente y le\r\nproporciona las habilidades necesarias para reconocer los valores anormales de los\r\nsignos vitales. Es una herramienta innovadora que permite a los profesionales de\r\nla salud llevar un registro preciso y en tiempo real de los signos vitales de\r\nsus pacientes.<o:p></o:p></span></p>', NULL, '2 DÍAS', '[\"Ma\\u00f1ana\",\"Tarde\",\"Noche\"]', '[\"SemiPresencial\"]', 'public/uploads/images/cursos/xuj3HXDpHxP8QJMFO8C8WymfX9mUGXZu1fmp1Tx4.pdf', NULL, '[\"public\\/uploads\\/images\\/cursos\\/V17LohuPxOnbsSXW3ybAgoKmrrjFvnMcXfwKm3RY.png\"]', '[\"Talleres\"]', '35', '2024-11-18 20:58:43', '2024-11-25 19:31:49', NULL),
(14, 'public/uploads/images/cursos/xkD0L8RETRtQrGnIzwlU5wuuym6I6Q1iWqLSvRba.png', 'public/uploads/images/cursos/Psm0cemlJvNNOJHYzggelTRIafKya9EFdT5AZ1pg.jpg', 'Primero auxilios en hemorragias y quemaduras', 'primero-auxilios-en-hemorragias-y-quemaduras', NULL, '<p class=\"MsoNormal\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">El taller de\r\nprimeros auxilios en quemaduras y hemorragias tiene como objetivo proporcionar\r\na los participantes las habilidades y conocimientos necesarios para manejar\r\neficazmente hemorragias y quemaduras en situaciones de emergencia. El alumno\r\nemplea las diferentes técnicas para lograr el control de las quemaduras y las hemorragias.</span><o:p></o:p></p>', NULL, '1 DÍA', '[\"Ma\\u00f1ana\",\"Tarde\",\"Noche\"]', '[\"Presencial\"]', 'public/uploads/images/cursos/qTF5DzzGP9Zu48LF7KwXbxBYQs7MjfvRtG9GTLYf.pdf', NULL, '[\"public\\/uploads\\/images\\/cursos\\/g8wbqzj2fGZ7DlkqTOlrH8Xdq4gYzzqKCcfJXXWZ.png\"]', '[\"Talleres\"]', '41', '2024-11-18 21:00:53', '2024-11-26 16:56:21', NULL),
(15, 'public/uploads/images/cursos/OgxsmwkGrxyUKsMBr2xigrJY2pE5YSx8kGf6oLDi.png', 'public/uploads/images/cursos/kaPkEzy15n05NN48E2ycPrlceoNGRYdv59tefbv4.jpg', 'Soporte vital básico - RCP', 'soporte-vital-basico-rcp', NULL, '<p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">El\r\ntaller de soporte vital básico es un programa de entrenamiento y capacitación\r\nque enseña técnicas de resucitación cardiopulmonar (RCP) y la obstrucción de la\r\nvía aérea por cuerpo extraño (OVACE) a personas que desean estar preparadas\r\npara responder en situaciones de emergencia médica. El curso brinda al alumno\r\nel conocimiento necesario para intervenir en situaciones de riesgo vital, y\r\nestos procedimientos se pueden aplicar tanto en personas &nbsp;&nbsp;&nbsp;gestantes\r\ncomo en neonatos y niños. El material utilizado cumple con los estándares aprobados\r\ny está debidamente certificado para garantizar un amplio conocimiento y aprendizaje.</span><o:p></o:p></p>', NULL, '1 DÍA', '[\"Ma\\u00f1ana\",\"Tarde\",\"Noche\"]', '[\"Presencial\"]', 'public/uploads/images/cursos/FAh4KLZBVbHHGQbYHcRRtm6d4TqYYJnB9oCt3xp2.pdf', NULL, '[\"public\\/uploads\\/images\\/cursos\\/0bR1G3HGJtqVGBvzHdwUMpIcZ2juDGoHPmJY28HF.png\"]', '[\"Talleres\"]', '27', '2024-11-18 21:02:29', '2024-11-25 19:30:43', NULL),
(16, 'public/uploads/images/cursos/qJdyan3f7duvZxssFWcCghwycwDCsEuVlxfvR9MM.png', 'public/uploads/images/cursos/ML3tIDLtZyKAoYr11MEniVgjK7IUSO5hka1xo4hK.jpg', 'Tratamiento Linfático post operatorio', 'tratamiento-linfatico-post-operatorio', NULL, '<p class=\"MsoNormal\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">El curso de\r\nmasaje postoperatorio y linfático es una técnica terapéutica que se utiliza\r\npara estimular el sistema linfático y mejorar la circulación de la linfa en el cuerpo,\r\nasí como para fortalecer el sistema inmunológico. A través de movimientos suaves\r\ny rítmicos, este tipo de masaje puede proporcionar una serie de beneficios para\r\nla salud.</span><o:p></o:p></p>', NULL, '1 DÍA', '[\"Ma\\u00f1ana\",\"Tarde\",\"Noche\"]', '[\"Presencial\"]', 'public/uploads/images/cursos/K3S7N6O0mZyULj1mi3PYXrNDkT4hby4TpxXzPOhT.pdf', NULL, '[\"public\\/uploads\\/images\\/cursos\\/g1OAP4QwNBPzIR0bYReiUS28SVqU5hdhu2Dqdet5.png\"]', '[\"Talleres\"]', '33', '2024-11-18 21:05:18', '2024-11-25 19:31:01', NULL),
(17, 'public/uploads/images/cursos/ERS7YhZZyFoxHcSNLFifvvF9uAJdWqerXdGroh27.png', 'public/uploads/images/cursos/xc7YQSOKNQ0SBTUIGxRdqUpYs0rQEeyIPioPvw5z.jpg', 'Uso de la via endovenosa', 'uso-de-la-via-endovenosa', NULL, '<p class=\"MsoNormal\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">Durante este\r\ntaller el alumno aprenderá todo lo necesario para administrar fármacos y\r\nfluidos por vía endovenosa de la manera más segura, eficaz y responsable. El\r\ncurso está diseñado tanto para el personal de salud que deseen ampliar sus\r\nconocimientos, como para aquellos que se inician por primera vez en esta\r\nfascinante experiencia.</span><o:p></o:p></p>', NULL, '1 DÍA', '[\"Ma\\u00f1ana\",\"Tarde\",\"Noche\"]', '[\"Presencial\"]', 'public/uploads/images/cursos/lxbblbEPBRGyh9RCvAk8PFgAHVkcSJoDYijlm6Po.pdf', NULL, '[\"public\\/uploads\\/images\\/cursos\\/2VX0ArYKGEj5USs2E8jVbZFf3rbH0jlUHLgOpVMe.png\"]', '[\"Talleres\"]', '32', '2024-11-18 21:05:52', '2024-11-25 19:31:09', NULL),
(18, 'public/uploads/images/cursos/QIhBwpxduhJ63TZ06a0JDvtPbWzBpTRELzngVJzQ.png', 'public/uploads/images/cursos/WWhCXl4WYavqRCbbJAy0QLRhokeDr6tOQjxgxhLN.jpg', 'Administración Endovenosa de Vitamina C', 'administracion-endovenosa-de-vitamina-c', NULL, '<p class=\"MsoNormal\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\">El taller de\r\nadministración de vitamina C proporciona los conocimientos y la destreza\r\nnecesarios para la canalización de esta vitamina. &nbsp;El alumno aprenderá sobre los efectos de regeneración,\r\ndesintoxicación y reparación y demás beneficios y aplicaciones de la\r\nsueroterapia con vitamina C, así como las técnicas de administración y sus\r\nconsideraciones clínicas.<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"text-align:justify\"><span style=\"font-family:&quot;Arial&quot;,sans-serif\"><o:p></o:p></span></p>', NULL, '1 DÍA', '[\"Ma\\u00f1ana\"]', '[\"Presencial\"]', 'public/uploads/images/cursos/a14UhYApgJLo8ReQdVNGjSj7mo3QRk9DhjjkjcKD.pdf', 'https://www.youtube.com/watch?v=svSqD1ZBZiY&list=RDZA7ZKB8Mo9k&index=8', '[\"public\\/uploads\\/images\\/cursos\\/Jqud1iM7WZXH8yBj7zqpWpBM8ukg5qEvN1z8jgiL.png\"]', '[\"Talleres\"]', '31', '2024-11-18 21:06:22', '2024-12-05 12:49:20', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso_beneficios`
--

CREATE TABLE `curso_beneficios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `curso_id` bigint(20) UNSIGNED NOT NULL,
  `imagen_path` varchar(150) DEFAULT NULL,
  `nombre` varchar(150) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `curso_beneficios`
--

INSERT INTO `curso_beneficios` (`id`, `curso_id`, `imagen_path`, `nombre`, `descripcion`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'public/uploads/images/cursos/p8zDwePcoTScWw3WTGokSw1HD6oOffOVTmo7Qbwr.png', 'CERTIFICADO GRATUITO', 'Se otorgará un certificado al estudiante por el Instituto Arzobispo Loayza', '2024-11-13 23:35:07', '2024-11-23 14:58:33', NULL),
(2, 1, 'public/uploads/images/cursos/rwsEhkRyRRXPFz3TH8SLPqI2SZJrsy7xNesstFqj.png', 'DOCENTES ALTAMENTE CALIFICADOS', 'Docentes altamente calificados, comprometidos con la excelencia educativa y el desarrollo integral de sus estudiantes.', '2024-11-19 15:08:28', '2024-11-19 15:12:44', NULL),
(3, 1, 'public/uploads/images/cursos/WTI44mmYKHg3sqTXt9Vz55gAxufh4hxvV2TWyZfY.png', 'MÓDULOS Y LABORATORIOS IMPLEMENTADOS', 'Modernos módulos y laboratorios, brindando un entorno práctico y de calidad para su formación académica.', '2024-11-19 15:09:13', '2024-11-19 15:13:52', NULL),
(4, 18, 'public/uploads/images/cursos/p8zDwePcoTScWw3WTGokSw1HD6oOffOVTmo7Qbwr.png', 'CERTIFICADO GRATUITO', 'Se otorgará un certificado al estudiante por el Instituto Arzobispo Loayza', '2024-11-19 16:56:21', '2024-11-23 14:58:11', NULL),
(5, 18, 'public/uploads/images/cursos/rwsEhkRyRRXPFz3TH8SLPqI2SZJrsy7xNesstFqj.png', 'DOCENTES ALTAMENTE CALIFICADOS', 'Docentes altamente calificados, comprometidos con la excelencia educativa y el desarrollo integral de sus estudiantes.', '2024-11-19 16:58:53', '2024-11-19 17:03:12', NULL),
(6, 18, 'public/uploads/images/cursos/WTI44mmYKHg3sqTXt9Vz55gAxufh4hxvV2TWyZfY.png', 'MÓDULOS Y LABORATORIOS IMPLEMENTADOS', 'Modernos módulos y laboratorios, brindando un entorno práctico y de calidad para su formación académica.', '2024-11-19 17:02:31', '2024-11-19 17:02:31', NULL),
(7, 18, 'public/uploads/images/cursos/WlwHj9axV207SCEUZJO3yEAqZydcbGaQUAHv4aJU.png', 'PLAN DE ESTUDIOS ACTUALIZADOS', 'Plan de estudios actualizado, adaptado a las últimas tendencias educativas y las necesidades del mercado.', '2024-11-19 17:08:02', '2024-11-19 17:08:02', NULL),
(8, 1, 'public/uploads/images/cursos/WlwHj9axV207SCEUZJO3yEAqZydcbGaQUAHv4aJU.png', 'PLAN DE ESTUDIOS ACTUALIZADOS', 'Plan de estudios actualizado, adaptado a las últimas tendencias educativas y las necesidades del mercado.', NULL, NULL, NULL),
(9, 2, 'public/uploads/images/cursos/ccAuQ7ZJZ9oXgbhkibqhbhrXyTKWQNQEvUExgBNG.png', 'CERTIFICADO GRATUITO', 'Se otorgará un certificado al estudiante por el Instituto Arzobispo Loayza', '2024-11-19 20:48:31', '2024-11-23 14:58:28', NULL),
(10, 2, 'public/uploads/images/cursos/fHV9lac2rJDF6V0lDSWbPXaJYQjWCbohNLvbjc2N.png', 'DOCENTES ALTAMENTE CALIFICADOS', 'Docentes altamente calificados, comprometidos con la excelencia educativa y el desarrollo integral de sus estudiantes.', '2024-11-19 20:48:57', '2024-11-19 20:48:57', NULL),
(11, 2, 'public/uploads/images/cursos/1LnjBHxqKuasafCX34SxgvdsmStUwaQ1I2qogO8f.png', 'MÓDULOS Y LABORATORIOS IMPLEMENTADOS', 'Modernos módulos y laboratorios, brindando un entorno práctico y de calidad para su formación académica.', '2024-11-19 20:49:12', '2024-11-19 20:49:12', NULL),
(12, 2, 'public/uploads/images/cursos/wrg5ubgk1s98Ic6fgfz8FLgUBV6LmN218NNSkcxc.png', 'PLAN DE ESTUDIOS ACTUALIZADOS', 'Plan de estudios actualizado, adaptado a las últimas tendencias educativas y las necesidades del mercado.', '2024-11-19 20:49:49', '2024-11-19 20:49:49', NULL),
(13, 5, 'public/uploads/images/cursos/CXaHu7mpPXfAZAlLYpWJ5wrYAb9NsLrx1ckKWsJK.png', 'CERTIFICADO GRATUITO', 'Se otorgará un certificado al estudiante por el Instituto Arzobispo Loayza', '2024-11-20 13:20:10', '2024-11-23 14:58:16', NULL),
(14, 5, 'public/uploads/images/cursos/bJyuzi6SQHh9t95PzZDIbqQwi8R8NQVurmcur5M3.png', 'DOCENTES ALTAMENTE CALIFICADOS', 'Docentes altamente calificados, comprometidos con la excelencia educativa y el desarrollo integral de sus estudiantes.', '2024-11-20 13:20:29', '2024-11-20 13:20:29', NULL),
(15, 5, 'public/uploads/images/cursos/dK8FhWZwIjUcZpcXRldMUZoyd3cwGSy37q17UFCc.png', 'MÓDULOS Y LABORATORIOS IMPLEMENTADOS', 'Modernos módulos y laboratorios, brindando un entorno práctico y de calidad para su formación académica.', '2024-11-20 13:20:47', '2024-11-20 13:20:47', NULL),
(16, 5, 'public/uploads/images/cursos/soBMN2pigwojgZX5hOBOwPTAJQC0Weo32o5g0cmX.png', 'PLAN DE ESTUDIOS ACTUALIZADOS', 'Plan de estudios actualizado, adaptado a las últimas tendencias educativas y las necesidades del mercado.', '2024-11-20 13:21:00', '2024-11-20 13:21:00', NULL),
(17, 3, 'public/uploads/images/cursos/TKhALYwG5phavqb6uv9IL5qdzz96vc9CR1b0XMrY.png', 'CERTIFICADO GRATUITO', 'Se otorgará un certificado al estudiante por el Instituto Arzobispo Loayza', '2024-11-20 20:47:04', '2024-11-23 15:00:22', NULL),
(18, 3, 'public/uploads/images/cursos/5LEBznR6HPvNNMwaxhyW5gSdIrEZbe6e3YTjV2ug.png', 'DOCENTES ALTAMENTE CALIFICADOS', 'Docentes altamente calificados, comprometidos con la excelencia educativa y el desarrollo integral de sus estudiantes.', '2024-11-20 20:47:22', '2024-11-20 20:47:22', NULL),
(19, 3, 'public/uploads/images/cursos/jyWit71eZxiw7NazcJdWYwR6AXwxrHNi23vIS8JA.png', 'MÓDULOS Y LABORATORIOS IMPLEMENTADOS', 'Modernos módulos y laboratorios, brindando un entorno práctico y de calidad para su formación académica.', '2024-11-20 20:47:38', '2024-11-20 20:47:38', NULL),
(20, 3, 'public/uploads/images/cursos/3CTiq47m6kQl8ND8ZTLh2PmxvG0WM17kGGZOsRKM.png', 'PLAN DE ESTUDIOS ACTUALIZADOS', 'Plan de estudios actualizado, adaptado a las últimas tendencias educativas y las necesidades del mercado.', '2024-11-20 20:47:52', '2024-11-20 20:47:52', NULL),
(21, 4, 'public/uploads/images/cursos/TXcXq0oPY531V25gyZgVjd2hNW7iKPjq9myhirYL.png', 'CERTIFICADO GRATUITO', 'Se otorgará un certificado al estudiante por el Instituto Arzobispo Loayza', '2024-11-20 20:48:12', '2024-11-23 14:59:37', NULL),
(22, 4, 'public/uploads/images/cursos/yzwmh8Acfnyh389Rkih1iRQCOPoRdaP5unpK3oqP.png', 'DOCENTES ALTAMENTE CALIFICADOS', 'Docentes altamente calificados, comprometidos con la excelencia educativa y el desarrollo integral de sus estudiantes.', '2024-11-20 20:48:24', '2024-11-20 20:48:24', NULL),
(23, 4, 'public/uploads/images/cursos/ZjQ1BtX76Shv2HXpwT7ytG54yUaMTbdm4EakSse1.png', 'MÓDULOS Y LABORATORIOS IMPLEMENTADOS', 'Modernos módulos y laboratorios, brindando un entorno práctico y de calidad para su formación académica.', '2024-11-20 20:48:37', '2024-11-20 20:48:37', NULL),
(24, 4, 'public/uploads/images/cursos/cZ2QzWwkOASYSrT8bY5rf0pCLFZJqgnHpx4ZaEk5.png', 'PLAN DE ESTUDIOS ACTUALIZADOS', 'Plan de estudios actualizado, adaptado a las últimas tendencias educativas y las necesidades del mercado.', '2024-11-20 20:48:48', '2024-11-20 20:48:48', NULL),
(25, 6, 'public/uploads/images/cursos/13twbvwg10TEwCmt5r8zYjYU38pmOZDZ8wlCX1Gp.png', 'CERTIFICADO GRATUITO', 'Se otorgará un certificado al estudiante por el Instituto Arzobispo Loayza', '2024-11-20 20:50:09', '2024-11-23 14:59:06', NULL),
(26, 6, 'public/uploads/images/cursos/e5RdCGq3POECnLX1KFGjMzitA5Z5jmDlZ0d8r7qi.png', 'DOCENTES ALTAMENTE CALIFICADOS', 'Docentes altamente calificados, comprometidos con la excelencia educativa y el desarrollo integral de sus estudiantes.', '2024-11-20 20:50:28', '2024-11-20 20:50:28', NULL),
(27, 6, 'public/uploads/images/cursos/BvPmXe3839Sr5cNq7KhSySoWAEKc98ZR2y9eu40f.png', 'MÓDULOS Y LABORATORIOS IMPLEMENTADOS', 'Modernos módulos y laboratorios, brindando un entorno práctico y de calidad para su formación académica.', '2024-11-20 20:50:40', '2024-11-20 20:50:40', NULL),
(28, 6, 'public/uploads/images/cursos/Qfo2EPJiEVb1b9tMOl0Glis4bX8gkyrz1pZH6lzw.png', 'PLAN DE ESTUDIOS ACTUALIZADOS', 'Plan de estudios actualizado, adaptado a las últimas tendencias educativas y las necesidades del mercado.', '2024-11-20 20:50:55', '2024-11-20 20:50:55', NULL),
(29, 7, 'public/uploads/images/cursos/bQq6Is5gjj4gCUTcmfjM5RkdrXmrvVCTS1seG4eN.png', 'CERTIFICADO GRATUITO', 'Se otorgará un certificado al estudiante por el Instituto Arzobispo Loayza', '2024-11-20 20:51:16', '2024-11-23 14:59:00', NULL),
(30, 7, 'public/uploads/images/cursos/nJHJqGH0N7vQcNnzPLT0RjVFwTaaBYdTsR8i9Glk.png', 'DOCENTES ALTAMENTE CALIFICADOS', 'Docentes altamente calificados, comprometidos con la excelencia educativa y el desarrollo integral de sus estudiantes.', '2024-11-20 20:51:27', '2024-11-20 20:51:27', NULL),
(31, 7, 'public/uploads/images/cursos/rzfhg5dz53pmZhYwKbgj0kmHbnnPNwhu1i559qji.png', 'MÓDULOS Y LABORATORIOS IMPLEMENTADOS', 'Modernos módulos y laboratorios, brindando un entorno práctico y de calidad para su formación académica.', '2024-11-20 20:51:43', '2024-11-20 20:51:43', NULL),
(32, 7, 'public/uploads/images/cursos/EaZNdRxGy2208O6BiqNg7G7C5B95m1lHLECgD11x.png', 'PLAN DE ESTUDIOS ACTUALIZADOS', 'Plan de estudios actualizado, adaptado a las últimas tendencias educativas y las necesidades del mercado.', '2024-11-20 20:51:55', '2024-11-20 20:51:55', NULL),
(33, 8, 'public/uploads/images/cursos/IdgAJ6hIrtda0roPYPirGJ58ay7Dgv277SdpLN6X.png', 'CERTIFICADO GRATUITO', 'Se otorgará un certificado al estudiante por el Instituto Arzobispo Loayza', '2024-11-20 20:52:14', '2024-11-23 14:58:52', NULL),
(34, 8, 'public/uploads/images/cursos/s68qscZwWjzc2raKX159debTVM6gG2yUhucdkLPD.png', 'DOCENTES ALTAMENTE CALIFICADOS', 'Docentes altamente calificados, comprometidos con la excelencia educativa y el desarrollo integral de sus estudiantes.', '2024-11-20 20:52:28', '2024-11-20 20:52:28', NULL),
(35, 8, 'public/uploads/images/cursos/AQceF6xvSKJBhXJaBa0RXsZEJnSAUuXVfOJ7luXm.png', 'MÓDULOS Y LABORATORIOS IMPLEMENTADOS', 'Modernos módulos y laboratorios, brindando un entorno práctico y de calidad para su formación académica.', '2024-11-20 20:52:41', '2024-11-20 20:52:41', NULL),
(36, 8, 'public/uploads/images/cursos/plt7nzS0z0Dl4PLdfkk0VeOL6cmh04o2MHIPKOLL.png', 'PLAN DE ESTUDIOS ACTUALIZADOS', 'Plan de estudios actualizado, adaptado a las últimas tendencias educativas y las necesidades del mercado.', '2024-11-20 20:52:54', '2024-11-20 20:52:54', NULL),
(37, 9, 'public/uploads/images/cursos/vK36JgEJxgPKcGZHUEe3FNdk3CxXjapsUrVibXzX.png', 'CERTIFICADO GRATUITO', 'Se otorgará un certificado al estudiante por el Instituto Arzobispo Loayza', '2024-11-20 20:53:10', '2024-11-23 14:58:46', NULL),
(38, 9, 'public/uploads/images/cursos/w1i03FAggZRwuzEA0clp237OaFLpI3xsXAI3gW4B.png', 'DOCENTES ALTAMENTE CALIFICADOS', 'Docentes altamente calificados, comprometidos con la excelencia educativa y el desarrollo integral de sus estudiantes.', '2024-11-20 20:53:21', '2024-11-20 20:53:21', NULL),
(39, 9, 'public/uploads/images/cursos/y9Wq1Z0bRwtFczDKnSBwly9rDn8Ee80e0GvWQjlL.png', 'MÓDULOS Y LABORATORIOS IMPLEMENTADOS', 'Modernos módulos y laboratorios, brindando un entorno práctico y de calidad para su formación académica.', '2024-11-20 20:53:33', '2024-11-20 20:53:33', NULL),
(40, 9, 'public/uploads/images/cursos/bVLxk688bwRF3pvkBqYWZR5edA3B54pid3KOhn1d.png', 'PLAN DE ESTUDIOS ACTUALIZADOS', 'Plan de estudios actualizado, adaptado a las últimas tendencias educativas y las necesidades del mercado.', '2024-11-20 20:53:44', '2024-11-20 20:53:44', NULL),
(41, 10, 'public/uploads/images/cursos/oi9zANo2FWE2pRR7fd0ZKYxBhFuzdh044TDmUj97.png', 'CERTIFICADO GRATUITO', 'Se otorgará un certificado al estudiante por el Instituto Arzobispo Loayza', '2024-11-20 20:56:55', '2024-11-23 14:59:30', NULL),
(42, 10, 'public/uploads/images/cursos/7rz6p9ZlCgV4cGm8m9lq06HIxZ6yw9jIZiYA9ABY.png', 'DOCENTES ALTAMENTE CALIFICADOS', 'Docentes altamente calificados, comprometidos con la excelencia educativa y el desarrollo integral de sus estudiantes.', '2024-11-20 20:57:12', '2024-11-20 20:57:12', NULL),
(43, 10, 'public/uploads/images/cursos/FSsgRmokLPppyIYg6xvE94kyfbQiNIo2Ei7mIEfK.png', 'MÓDULOS Y LABORATORIOS IMPLEMENTADOS', 'Modernos módulos y laboratorios, brindando un entorno práctico y de calidad para su formación académica.', '2024-11-20 20:57:23', '2024-11-20 20:57:23', NULL),
(44, 10, 'public/uploads/images/cursos/GRXH7V84HYiMVtAJAuBLmxXrsBgutv79zGepK4vQ.png', 'PLAN DE ESTUDIOS ACTUALIZADOS', 'Plan de estudios actualizado, adaptado a las últimas tendencias educativas y las necesidades del mercado.', '2024-11-20 20:57:39', '2024-11-20 20:57:39', NULL),
(45, 11, 'public/uploads/images/cursos/nT3Ls1zL7tN4AFzkhv40GqTM2u6Hvl4fRKvWKm2E.png', 'CERTIFICADO GRATUITO', 'Se otorgará un certificado al estudiante por el Instituto Arzobispo Loayza', '2024-11-20 20:57:55', '2024-11-23 15:00:02', NULL),
(46, 11, 'public/uploads/images/cursos/zCKP7qrgid13wXbHcs4REkPGld0HnY29b1NY9dmI.png', 'DOCENTES ALTAMENTE CALIFICADOS', 'Docentes altamente calificados, comprometidos con la excelencia educativa y el desarrollo integral de sus estudiantes.', '2024-11-20 20:58:06', '2024-11-20 20:58:06', NULL),
(47, 11, 'public/uploads/images/cursos/Tsm02nZAMsgZjVPzaDvCXYdSXpaX1RyRjOaySbii.png', 'MÓDULOS Y LABORATORIOS IMPLEMENTADOS', 'Modernos módulos y laboratorios, brindando un entorno práctico y de calidad para su formación académica.', '2024-11-20 20:58:17', '2024-11-20 20:58:17', NULL),
(48, 11, 'public/uploads/images/cursos/U6ATPQ2LPRn0aNUgovUaJojFS18PcdlwwimnhwKP.png', 'PLAN DE ESTUDIOS ACTUALIZADOS', 'Plan de estudios actualizado, adaptado a las últimas tendencias educativas y las necesidades del mercado.', '2024-11-20 20:58:28', '2024-11-20 20:58:28', NULL),
(49, 12, 'public/uploads/images/cursos/O98JQP1JOgLF5kShW1Cm2VBvG7lnAftwX1toJ0xq.png', 'CERTIFICADO GRATUITO', 'Se otorgará un certificado al estudiante por el Instituto Arzobispo Loayza', '2024-11-20 20:58:44', '2024-11-23 14:58:40', NULL),
(50, 12, 'public/uploads/images/cursos/jOx8UlpT50IUq5LLH5bu7tXkuU5i5HZWDyNVZOCs.png', 'DOCENTES ALTAMENTE CALIFICADOS', 'Docentes altamente calificados, comprometidos con la excelencia educativa y el desarrollo integral de sus estudiantes.', '2024-11-20 20:58:55', '2024-11-20 20:58:55', NULL),
(51, 12, 'public/uploads/images/cursos/smHOBVughtLtjeqInxxss4c7brvHHQ5Ns2oH6o0I.png', 'MÓDULOS Y LABORATORIOS IMPLEMENTADOS', 'Modernos módulos y laboratorios, brindando un entorno práctico y de calidad para su formación académica.', '2024-11-20 20:59:06', '2024-11-20 20:59:06', NULL),
(52, 12, 'public/uploads/images/cursos/qsjTC0CYieWU4iufhTzwdqtGNeG04hTcjcusWfVw.png', 'PLAN DE ESTUDIOS ACTUALIZADOS', 'Plan de estudios actualizado, adaptado a las últimas tendencias educativas y las necesidades del mercado.', '2024-11-20 20:59:16', '2024-11-20 20:59:16', NULL),
(53, 13, 'public/uploads/images/cursos/KNrvxlcgVMV0oBwWa7mr6WlleKTyCUPWXirpYova.png', 'CERTIFICADO GRATUITO', 'Se otorgará un certificado al estudiante por el Instituto Arzobispo Loayza', '2024-11-20 20:59:32', '2024-11-23 14:58:22', NULL),
(54, 13, 'public/uploads/images/cursos/7TL2QpA3gtw8ww0MlzGgmLAGBVwfDmsArfIEWbte.png', 'DOCENTES ALTAMENTE CALIFICADOS', 'Docentes altamente calificados, comprometidos con la excelencia educativa y el desarrollo integral de sus estudiantes.', '2024-11-20 20:59:47', '2024-11-20 20:59:47', NULL),
(55, 13, 'public/uploads/images/cursos/c5AWMQ1cmrgSHD9HsAks4y6DUsk2RlIG5u47o5Nq.png', 'MÓDULOS Y LABORATORIOS IMPLEMENTADOS', 'Modernos módulos y laboratorios, brindando un entorno práctico y de calidad para su formación académica.', '2024-11-20 21:00:00', '2024-11-20 21:00:00', NULL),
(56, 13, 'public/uploads/images/cursos/6jGKnt0Swn5enGFLMfQOYfs2RX0O2yY2bouC6Vui.png', 'PLAN DE ESTUDIOS ACTUALIZADOS', 'Plan de estudios actualizado, adaptado a las últimas tendencias educativas y las necesidades del mercado.', '2024-11-20 21:00:13', '2024-11-20 21:00:13', NULL),
(57, 14, 'public/uploads/images/cursos/jFW6NJcUY8D8NMUKHPASqVeIn7Bztobhu14YBjC5.png', 'CERTIFICADO GRATUITO', 'Se otorgará un certificado al estudiante por el Instituto Arzobispo Loayza', '2024-11-20 21:00:29', '2024-11-23 14:59:24', NULL),
(58, 14, 'public/uploads/images/cursos/xHFQhXM9SWFIptqk6ibmJoTnngGXgEaMAbQ2Z09n.png', 'DOCENTES ALTAMENTE CALIFICADOS', 'Docentes altamente calificados, comprometidos con la excelencia educativa y el desarrollo integral de sus estudiantes.', '2024-11-20 21:00:43', '2024-11-20 21:00:43', NULL),
(59, 14, 'public/uploads/images/cursos/thb1y4esrVyJ0YLIgjifvuqTJjsKMWvVFeg4W85y.png', 'MÓDULOS Y LABORATORIOS IMPLEMENTADOS', 'Modernos módulos y laboratorios, brindando un entorno práctico y de calidad para su formación académica.', '2024-11-20 21:00:58', '2024-11-20 21:00:58', NULL),
(60, 14, 'public/uploads/images/cursos/RAe6eewLIpbyljrH3XxrJpiYCdkDU90jtuXMCqeE.png', 'PLAN DE ESTUDIOS ACTUALIZADOS', 'Plan de estudios actualizado, adaptado a las últimas tendencias educativas y las necesidades del mercado.', '2024-11-20 21:01:08', '2024-11-20 21:01:08', NULL),
(61, 15, 'public/uploads/images/cursos/BkAzQiRauIZi1xXNEjNMxkb7UefrjHPNsU30QEuB.png', 'CERTIFICADO GRATUITO', 'Se otorgará un certificado al estudiante por el Instituto Arzobispo Loayza', '2024-11-20 21:01:22', '2024-11-23 15:00:08', NULL),
(62, 15, 'public/uploads/images/cursos/aps3mNDHNXNvS8ZRihIWZYKqbwx70563dhenXZe7.png', 'DOCENTES ALTAMENTE CALIFICADOS', 'Docentes altamente calificados, comprometidos con la excelencia educativa y el desarrollo integral de sus estudiantes.', '2024-11-20 21:01:34', '2024-11-20 21:01:34', NULL),
(63, 15, 'public/uploads/images/cursos/0vHHl9WnTRZ9s2EHodJYvsgAeTMN6QeBdUdAuF59.png', 'MÓDULOS Y LABORATORIOS IMPLEMENTADOS', 'Modernos módulos y laboratorios, brindando un entorno práctico y de calidad para su formación académica.', '2024-11-20 21:01:45', '2024-11-20 21:01:45', NULL),
(64, 15, 'public/uploads/images/cursos/oZ0M3MdFZw1GuQBmu3R3i8QEKllmN83ribqrXABu.png', 'PLAN DE ESTUDIOS ACTUALIZADOS', 'Plan de estudios actualizado, adaptado a las últimas tendencias educativas y las necesidades del mercado.', '2024-11-20 21:01:57', '2024-11-20 21:01:57', NULL),
(65, 16, 'public/uploads/images/cursos/tmW6sIoVZk9vABevfOCuMvixiteIp0H2lOUadMIz.png', 'CERTIFICADO GRATUITO', 'Se otorgará un certificado al estudiante por el Instituto Arzobispo Loayza', '2024-11-20 21:02:12', '2024-11-23 14:59:57', NULL),
(66, 16, 'public/uploads/images/cursos/pgk1oNQOMY7KqFnl0PHynFXdNJeEmLDTWzAoRWII.png', 'DOCENTES ALTAMENTE CALIFICADOS', 'Docentes altamente calificados, comprometidos con la excelencia educativa y el desarrollo integral de sus estudiantes.', '2024-11-20 21:02:25', '2024-11-20 21:02:25', NULL),
(67, 16, 'public/uploads/images/cursos/lCIBqpLLmgq1zkOQ4fJbBf2S0zSVrVlpc6rOcPzE.png', 'MÓDULOS Y LABORATORIOS IMPLEMENTADOS', 'Modernos módulos y laboratorios, brindando un entorno práctico y de calidad para su formación académica.', '2024-11-20 21:02:35', '2024-11-20 21:02:35', NULL),
(68, 16, 'public/uploads/images/cursos/eXPXUbkhI3P4xoax1mepzSEDpzEazs57SkVO0wJZ.png', 'PLAN DE ESTUDIOS ACTUALIZADOS', 'Plan de estudios actualizado, adaptado a las últimas tendencias educativas y las necesidades del mercado.', '2024-11-20 21:02:46', '2024-11-20 21:02:46', NULL),
(69, 17, 'public/uploads/images/cursos/vPEs7UlVED4A7kWXzfCbAzYsBsXkmRBhcbnMUGBN.png', 'CERTIFICADO GRATUITO', 'Se otorgará un certificado al estudiante por el Instituto Arzobispo Loayza', '2024-11-20 21:03:11', '2024-11-23 14:59:51', NULL),
(70, 17, 'public/uploads/images/cursos/nGHUYvZoOu5cPHWY8whOaGwHkF2iFzVbWYLz3Tai.png', 'DOCENTES ALTAMENTE CALIFICADOS', 'Docentes altamente calificados, comprometidos con la excelencia educativa y el desarrollo integral de sus estudiantes.', '2024-11-20 21:03:23', '2024-11-20 21:03:23', NULL),
(71, 17, 'public/uploads/images/cursos/JLq7DdHEiiOQPLAgUQIDOXG42ZyWbRbh9slpSXvs.png', 'MÓDULOS Y LABORATORIOS IMPLEMENTADOS', 'Modernos módulos y laboratorios, brindando un entorno práctico y de calidad para su formación académica.', '2024-11-20 21:03:37', '2024-11-20 21:03:37', NULL),
(72, 17, 'public/uploads/images/cursos/IFk39QVZv9xdSxYH6AfgJ3CtiffrM3sMlcAe8CRC.png', 'PLAN DE ESTUDIOS ACTUALIZADOS', 'Plan de estudios actualizado, adaptado a las últimas tendencias educativas y las necesidades del mercado.', '2024-11-20 21:03:49', '2024-11-20 21:03:49', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `interesados`
--

CREATE TABLE `interesados` (
  `id` bigint(11) NOT NULL,
  `nom` varchar(250) DEFAULT NULL,
  `ape` varchar(250) DEFAULT NULL,
  `dni` varchar(15) DEFAULT NULL,
  `tel` varchar(21) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `provincia_id` varchar(20) DEFAULT NULL,
  `distrito_id` varchar(20) DEFAULT NULL,
  `modalidad_id` varchar(20) DEFAULT NULL,
  `carrera_id` varchar(20) DEFAULT NULL,
  `fuente_id` varchar(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `interesados`
--

INSERT INTO `interesados` (`id`, `nom`, `ape`, `dni`, `tel`, `email`, `provincia_id`, `distrito_id`, `modalidad_id`, `carrera_id`, `fuente_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'pruebabd', 'pruebabd', '06519889', '987654321', 'aaaa@gmail.com', NULL, '15', '2', '1', '7', '2024-11-26 16:49:33', '2024-11-26 16:49:33', NULL),
(2, 'pruebabd', 'ULLOA', '06519889', '987654321', 'ma@gmail.com', NULL, '15', '2', '3', '7', '2024-11-26 17:46:23', '2024-11-26 17:46:23', NULL),
(3, 'Alejandro', 'david', '06519889', '987654321', 'aaaa@gmail.com', NULL, '15', '2', '6', '7', '2024-11-26 19:05:34', '2024-11-26 19:05:34', NULL),
(4, 'idiomas', 'idiomas2', '06445683', '987654321', 'ma@gmail.com', NULL, '15', '2', '53', '7', '2024-11-27 16:23:33', '2024-11-27 16:23:33', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `malla_curriculars`
--

CREATE TABLE `malla_curriculars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `carrera_id` bigint(20) UNSIGNED NOT NULL,
  `imagen_path` varchar(150) DEFAULT NULL,
  `nombre` varchar(150) NOT NULL,
  `descripcion` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `malla_curriculars`
--

INSERT INTO `malla_curriculars` (`id`, `carrera_id`, `imagen_path`, `nombre`, `descripcion`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, NULL, 'PERÍODO 1', '[\"ESTUDIO ESTRUCTURAL Y FUNCIONAL DEL SER HUMANO\",\"INTRODUCCI\\u00d3N A LA SALUD COMUNITARIA\",\"FUNDAMENTOS BIOL\\u00d3GICOS Y QU\\u00cdMICOS EN EL SER HUMANO\",\"FUNDAMENTOS DE EPIDEMIOLOG\\u00cdA\",\"EDUCACI\\u00d3N Y COMUNICACI\\u00d3N EN SALUD\",\"T\\u00c9CNICAS DE COMUNICACI\\u00d3N\",\"MATEM\\u00c1TICA APLICADA\"]', '2024-10-30 21:41:23', '2024-11-26 19:24:54', NULL),
(2, 1, NULL, 'PERÍODO 2', '[\"ATENCI\\u00d3N B\\u00c1SICA DE URGENCIAS Y EMERGENCIAS\",\"MORFOFISIOLOG\\u00cdA HUMANA\",\"T\\u00c9CNICAS DE ADMINISTRACI\\u00d3N DE MEDICAMENTOS\",\"INTRODUCCI\\u00d3N A LA SALUD P\\u00daBLICA\",\"COMUNICACI\\u00d3N B\\u00c1SICA EN INGL\\u00c9S\",\"HERRAMIENTAS INFORM\\u00c1TICAS\"]', '2024-10-30 21:59:03', '2024-11-26 19:26:11', NULL),
(3, 3, NULL, 'PERIODO 1', '[\"FUNDAMENTOS BIOL\\u00d3GICOS Y QU\\u00cdMICOS EN EL SER HUMANO\",\"ATENCI\\u00d3N B\\u00c1SICA DE URGENCIAS Y EMERGENCIAS\",\"ESTUDIO ESTRUCTURAL Y FUNCIONAL DEL SER HUMANO\",\"FUNDAMENTOS B\\u00c1SICOS DE TOXICOLOG\\u00cdA\",\"INTRODUCCI\\u00d3N A LA SALUD P\\u00daBLICA\",\"T\\u00c9CNICAS DE COMUNICACI\\u00d3N\"]', '2024-11-11 22:02:29', '2024-11-26 19:32:35', NULL),
(4, 3, NULL, 'PERÍODO 2', '[\"T\\u00c9CNICAS DE ADMINISTRACI\\u00d3N DE MEDICAMENTOS\",\"MORFOFISIOLOG\\u00cdA HUMANA\",\"ASISTENCIA EN MEDICINA TRADICIONAL Y ALTERNATIVA\",\"ACTIVIDADES FARMAC\\u00c9UTICAS EN SALUD COMUNITARIA\",\"MATEM\\u00c1TICA APLICADA\",\"HERRAMIENTAS INFORM\\u00c1TICAS\"]', '2024-11-11 22:04:17', '2024-11-26 19:32:57', NULL),
(5, 3, NULL, 'PERÍODO 3', '[\"BASES FARMACOL\\u00d3GICAS DE LOS MEDICAMENTOS\",\"BASES CONCEPTUALES DE LAS ENFERMEDADES\",\"VENTA Y DISPENSACI\\u00d3N DE MEDICAMENTOS Y PRODUCTOS AFINES\",\"ESTUDIO DE ENFERMEDADES Y SU TRATAMIENTO FARMACOL\\u00d3GICO\",\"PETITORIO NACIONAL DE MEDICAMENTOS ESENCIALES\",\"RESOLUCI\\u00d3N DE PROBLEMAS\",\"COMUNICACI\\u00d3N B\\u00c1SICA EN INGL\\u00c9S\"]', '2024-11-11 23:40:08', '2024-11-26 19:33:23', NULL),
(6, 3, NULL, 'PERÍODO 4', '[\"BUENAS PR\\u00c1CTICAS DE ALMACENAMIENTO, DISTRIBUCI\\u00d3N Y TRANSPORTE DE PRODUCTOS FARMAC\\u00c9UTICOS\",\"INFORM\\u00c1TICA FARMAC\\u00c9UTICA\",\"FUNDAMENTOS DE ADMINISTRACI\\u00d3N Y LEGISLACI\\u00d3N FARMAC\\u00c9UTICA\",\"GESTI\\u00d3N DOCUMENTARIA EN ESTABLECIMIENTOS FARMAC\\u00c9UTICOS\",\"HIGIENE Y SANEAMIENTO EN LOS ESTABLECIMIENTOS FARMAC\\u00c9UTICOS\",\"\\u00c9TICA Y CIUDADANIA\",\"INTRODUCCI\\u00d3N AL INGL\\u00c9S T\\u00c9CNICO\"]', '2024-11-11 23:41:21', '2024-11-26 19:34:03', NULL),
(7, 3, NULL, 'PERÍODO 5', '[\"FARMACOTECNIA\",\"BUENAS PR\\u00c1CTICAS DE ELABORACI\\u00d3N Y CONTROL DE F\\u00d3RMULAS MAGISTRALES Y PREPARADOS OFICINALES\",\"ELABORACI\\u00d3N DE FORMAS FARMAC\\u00c9UTICAS\",\"M\\u00c9TODOS DE EXTRACCI\\u00d3N E IDENTIFICACI\\u00d3N DE RECURSOS NATURALES\",\"FUNDAMENTOS DE LOG\\u00cdSTICA FARMAC\\u00c9UTICA\",\"PLAN DE NEGOCIO E INNOVACI\\u00d3N\"]', '2024-11-11 23:43:24', '2024-11-26 19:34:32', NULL),
(8, 4, NULL, 'PERÍODO 1', '[\"INTRODUCCI\\u00d3N A LA FISIOTERAPIA Y REHABILITACI\\u00d3N\",\"ESTUDIO ESTRUCTURAL Y FUNCIONAL DEL SER HUMANO\",\"ATENCI\\u00d3N B\\u00c1SICA DE URGENCIAS Y EMERGENCIAS\",\"FUNDAMENTOS DE EPIDEMIOLOG\\u00cdA\",\"INTRODUCCI\\u00d3N A LA SALUD P\\u00daBLICA\",\"T\\u00c9CNICAS DE COMUNICACI\\u00d3N\",\"MATEM\\u00c1TICA APLICADA\"]', '2024-11-12 15:32:07', '2024-11-26 19:37:11', NULL),
(9, 4, NULL, 'PERÍODO 2', '[\"BIOMEC\\u00c1NICA\",\"MORFOFISIOLOG\\u00cdA HUMANA\",\"DESARROLLO PSICOMOTOR\",\"PRUEBAS DE VALORACI\\u00d3N FUNCIONAL MUSCULAR\",\"HERRAMIENTAS INFORM\\u00c1TICAS\",\"COMUNICACI\\u00d3N B\\u00c1SICA EN INGL\\u00c9S\"]', '2024-11-12 15:35:21', '2024-11-26 19:37:56', NULL),
(10, 4, NULL, 'PERÍODO 3', '[\"MASOTERAPIA\",\"TERAPIA DEL LENGUAJE\",\"ALTERACIONES DEL DESARROLLO PSICOMOTOR\",\"FUNDAMENTOS DE NEUROANATOM\\u00cdA\",\"SEMIOLOG\\u00cdA B\\u00c1SICA\",\"INTRODUCCI\\u00d3N AL INGL\\u00c9S T\\u00c9CNICO\"]', '2024-11-12 15:36:10', '2024-11-26 19:38:20', NULL),
(11, 4, NULL, 'PERÍODO 4', '[\"BASES CONCEPTUALES DE LAS ENFERMEDADES\",\"NEUROFISIOLOG\\u00cdA\",\"EJERCICIOS TERAP\\u00c9UTICOS\",\"AYUDAS BIOM\\u00c9CANICAS\",\"NUTRICI\\u00d3N ESPECIALIZADA\",\"RESOLUCI\\u00d3N DE PROBLEMAS\"]', '2024-11-12 15:37:27', '2024-11-26 19:38:42', NULL),
(12, 4, NULL, 'PERÍODO 5', '[\"FOTOTERAPIA, HIDROTERAPIA Y TERMOTERAPIA\",\"TERAPIA Y PATOLOG\\u00cdA NEUROL\\u00d3GICA\",\"REHABILITACI\\u00d3N INTEGRAL\",\"TERAPIA OCUPACIONAL\",\"FISIOTERAPIA DEPORTIVA\",\"CULTURA AMBIENTAL PARA LOS SERVICIOS DE SALUD\"]', '2024-11-12 15:40:13', '2024-11-26 19:39:07', NULL),
(13, 4, NULL, 'PERÍODO 6', '[\"ELECTROMAGNETOTERAPIA Y ULTRASONIDO\",\"TERAPIA EN TRAUMATOLOG\\u00cdA Y ORTOPEDIA\",\"TERAPIA EN GERIATR\\u00cdA\",\"TERAPIA EN PATOLOG\\u00cdA REUMATOL\\u00d3GICA\",\"\\u00c9TICA Y CIUDADANIA\",\"PLAN DE NEGOCIO E INNOVACI\\u00d3N\"]', '2024-11-12 15:41:05', '2024-11-26 19:39:30', NULL),
(14, 5, NULL, 'PERÍODO 1', '[\"FUNDAMENTOS BIOL\\u00d3GICOS Y QU\\u00cdMICOS EN EL SER HUMANO\",\"ATENCI\\u00d3N B\\u00c1SICA DE URGENCIAS Y EMERGENCIAS\",\"ESTUDIO ESTRUCTURAL Y FUNCIONAL DEL SER HUMANO\",\"GESTI\\u00d3N DE EXISTENCIAS Y OPERACIONES B\\u00c1SICAS EN LABORATORIO\",\"PRINCIPIOS B\\u00c1SICOS DE BIOSEGURIDAD\",\"T\\u00c9CNICAS DE COMUNICACI\\u00d3N\",\"MATEM\\u00c1TICA APLICADA\"]', '2024-11-12 15:52:55', '2024-11-26 19:41:12', NULL),
(15, 5, NULL, 'PERÍODO 2', '[\"T\\u00c9CNICAS DE ADMINISTRACI\\u00d3N DE MEDICAMENTOS\",\"MORFOFISIOLOG\\u00cdA HUMANA\",\"PREANAL\\u00cdTICA E INSTRUMENTACI\\u00d3N EN LABORATORIO CL\\u00cdNICO\",\"EDUCACI\\u00d3N Y COMUNICACI\\u00d3N EN SALUD\",\"HERRAMIENTAS INFORM\\u00c1TICAS\",\"COMUNICACI\\u00d3N B\\u00c1SICA EN INGL\\u00c9S\"]', '2024-11-12 15:53:58', '2024-11-26 19:41:32', NULL),
(16, 5, NULL, 'PERÍODO 3', '[\"BASES CONCEPTUALES DE LAS ENFERMEDADES\",\"PARASITOLOG\\u00cdA DE PROTOZOOS\",\"INMUNOLOG\\u00cdA GENERAL\",\"BACTERIOLOG\\u00cdA GENERAL\",\"INTRODUCCI\\u00d3N AL INGL\\u00c9S T\\u00c9CNICO\"]', '2024-11-12 15:54:44', '2024-11-26 19:41:55', NULL),
(17, 5, NULL, 'PERÍODO 4', '[\"PARASITOLOG\\u00cdA DE METAZOOS\",\"MICOLOG\\u00cdA-VIROLOG\\u00cdA CL\\u00cdNICA\",\"BACTERIOLOG\\u00cdA CL\\u00cdNICA\",\"INMUNODIAGN\\u00d3STICO\",\"CULTURA AMBIENTAL PARA LOS SERVICIOS DE SALUD\",\"RESOLUCI\\u00d3N DE PROBLEMAS\"]', '2024-11-12 15:55:33', '2024-11-26 19:42:20', NULL),
(18, 5, NULL, 'PERÍODO 5', '[\"BIOQU\\u00cdMICA CL\\u00cdNICA B\\u00c1SICA\",\"HEMATOLOG\\u00cdA Y CITOLOG\\u00cdA SANGU\\u00cdNEA\",\"CITOTECNOLOG\\u00cdA EXFOLIATIVA\",\"CONTROL DE CALIDAD EN LABORATORIO CL\\u00cdNICO\",\"LABORATORIO FORENSE\",\"\\u00c9TICA Y CIUDADAN\\u00cdA\"]', '2024-11-12 15:56:30', '2024-11-26 19:42:41', NULL),
(19, 5, NULL, 'PERÍODO 6', '[\"INTERPRETACI\\u00d3N DE PRUEBAS DE LABORATORIO\",\"HEMATOTERAPIA Y BANCO DE SANGRE\",\"UROAN\\u00c1LISIS Y FLUIDOS BIOL\\u00d3GICOS\",\"BIOQU\\u00cdMICA CL\\u00cdNICA ESPECIALIZADA\",\"GESTI\\u00d3N Y AUTOMATIZACI\\u00d3N EN LABORATORIO CL\\u00cdNICO\",\"PLAN DE NEGOCIO E INNOVACI\\u00d3N\"]', '2024-11-12 15:57:41', '2024-11-26 19:43:06', NULL),
(20, 6, NULL, 'PERÍODO 1', '[\"MATERIALES DENTALES\",\"F\\u00cdSICA APLICADA A LA PR\\u00d3TESIS DENTAL\",\"ARTE Y TALLADO DENTARIO\",\"DIBUJO T\\u00c9CNICO DENTARIO\",\"DISE\\u00d1O EN PR\\u00d3TESIS DENTAL\",\"T\\u00c9CNICAS DE COMUNICACI\\u00d3N\",\"MATEM\\u00c1TICA APLICADA\"]', '2024-11-12 16:02:53', '2024-11-26 19:43:45', NULL),
(21, 6, NULL, 'PERÍODO 2', '[\"OCLUSI\\u00d3N DENTARIA\",\"MORFOLOG\\u00cdA DENTAL\",\"PR\\u00d3TESIS DENTAL TOTAL MONOPLANO\",\"PR\\u00d3TESIS DENTAL TOTAL POLIPLANO\",\"COMUNICACI\\u00d3N B\\u00c1SICA EN INGL\\u00c9S\"]', '2024-11-12 16:04:03', '2024-11-26 19:44:01', NULL),
(22, 6, NULL, 'PERÍODO 3', '[\"PR\\u00d3TESIS DENTAL  PARCIAL REMOVIBLE BASE ACR\\u00cdLICA\",\"PR\\u00d3TESIS DENTAL PARCIAL REMOVIBLE DENTOSOPORTADA\",\"PR\\u00d3TESIS DENTAL PARCIAL REMOVIBLE DENTOMUCOSOPORTADA\",\"PR\\u00d3TESIS PARCIAL REMOVIBLE BASE FLEXIBLE\",\"INTRODUCCI\\u00d3N AL INGL\\u00c9S T\\u00c9CNICO\"]', '2024-11-12 16:07:37', '2024-11-26 19:44:19', NULL),
(23, 6, NULL, 'PERÍODO 4', '[\"RETENEDORES INTRARRADICULARES E INTRACORONARIOS\",\"RETENEDORES EXTRACORONARIOS\",\"PUENTES DENTALES\",\"MORFOLOG\\u00cdA DENTARIA EN MICROESTRUCTURAS\",\"PR\\u00d3TESIS DENTAL ADHESIVA\",\"CULTURA AMBIENTAL PARA LOS SERVICIOS DE SALUD\"]', '2024-11-12 16:09:03', '2024-11-26 19:44:44', NULL),
(24, 6, NULL, 'PERÍODO 5', '[\"APARATOLOG\\u00cdA DE ORTODONCIA REMOVIBLE\",\"APARATOLOG\\u00cdA DE ORTOPEDIA FUNCIONAL\",\"APARATOLOG\\u00cdA DE ORTODONCIA FIJA\",\"CER\\u00c1MICA DENTAL\",\"HERRAMIENTAS INFORM\\u00c1TICAS\",\"RESOLUCI\\u00d3N DE PROBLEMAS\"]', '2024-11-12 16:09:58', '2024-11-26 19:45:05', NULL),
(25, 6, NULL, 'PERÍODO 6', '[\"REPARACIONES Y AGREGACI\\u00d3N EN PR\\u00d3TESIS TOTALES\",\"REPARACIONES DE PR\\u00d3TESIS PARCIAL REMOVIBLE\",\"PR\\u00d3TESIS  INTEGRAL ESPECIALIZADA\",\"ORGANIZACI\\u00d3N Y ADMINISTRACI\\u00d3N DEL LABORATORIO DENTAL\",\"\\u00c9TICA Y CIUDADANIA\",\"PLAN DE NEGOCIO E INNOVACI\\u00d3N\"]', '2024-11-12 16:11:00', '2024-11-26 19:45:27', NULL),
(26, 1, NULL, 'PERÍODO 3', '[\"ASISTENCIA B\\u00c1SICA HOSPITALARIA\",\"CRECIMIENTO Y DESARROLLO HUMANO\",\"BASES CONCEPTUALES DE LAS ENFERMEDADES\",\"NUTRICI\\u00d3N Y DIETAS\",\"SEMIOLOG\\u00cdA B\\u00c1SICA\",\"INTRODUCCI\\u00d3N AL INGL\\u00c9S T\\u00c9CNICO\"]', '2024-11-12 18:05:49', '2024-11-26 19:29:01', NULL),
(27, 1, NULL, 'PERÍODO 4', '[\"PROCEDIMIENTOS INVASIVOS Y NO INVASIVOS\",\"PRINCIPIOS B\\u00c1SICOS DE BIOSEGURIDAD\",\"ASISTENCIA AL USUARIO CON PATOLOG\\u00cdA\",\"FARMACOLOG\\u00cdA APLICADA A ENFERMER\\u00cdA\",\"CULTURA AMBIENTAL PARA LOS SERVICIOS DE SALUD\",\"RESOLUCI\\u00d3N DE PROBLEMAS\"]', '2024-11-12 18:06:40', '2024-11-26 19:29:29', NULL),
(28, 1, NULL, 'PERÍODO 5', '[\"ATENCI\\u00d3N EN SALUD MATERNA Y NEONATAL\",\"SALUD DEL NI\\u00d1O Y ADOLESCENTE\",\"ASISTENCIA AL ADULTO MAYOR\",\"ASISTENCIA AL USUARIO ONCOL\\u00d3GICO\",\"\\u00c9TICA Y CIUDADANIA\"]', '2024-11-12 18:09:27', '2024-11-26 19:29:51', NULL),
(29, 1, NULL, 'PERÍODO 6', '[\"ASISTENCIA AL USUARIO QUIR\\u00daRGICO\",\"ASISTENCIA EN FISIOTERAPIA Y REHABILITACI\\u00d3N\",\"ASISTENCIA DE ENFERMER\\u00cdA EN SALUD MENTAL\",\"ASISTENCIA EN SALUD BUCAL\",\"ASISTENCIA EN MEDICINA ALTERNATIVA Y COMPLEMENTARIA\",\"PLAN DE NEGOCIO E INNOVACI\\u00d3N\"]', '2024-11-12 18:10:19', '2024-11-26 19:30:16', NULL),
(30, 3, NULL, 'PERÍODO 6', '[\"BUENAS PR\\u00c1CTICAS DE MANUFACTURA EN EL LABORATORIO FARMAC\\u00c9UTICO\",\"FARMACIA GAL\\u00c9NICA\",\"T\\u00c9CNICAS DE TRANSFORMACI\\u00d3N DE RECURSOS NATURALES\",\"T\\u00c9CNICAS DE CONTROL DE CALIDAD EN LA INDUSTRIA FARMAC\\u00c9UTICA\",\"CULTURA AMBIENTAL PARA LOS SERVICIOS DE SALUD\"]', '2024-11-26 19:34:57', '2024-11-26 19:34:57', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_10_01_162720_create_admins_table', 1),
(6, '2024_10_01_163147_create_portadas_table', 1),
(7, '2024_10_27_182321_create_alianzas_table', 1),
(8, '2024_10_27_182352_create_testimonios_table', 1),
(9, '2024_10_27_182414_create_novedads_table', 1),
(10, '2024_10_27_182449_create_sedes_table', 1),
(11, '2024_10_27_182510_create_configuracions_table', 1),
(12, '2024_10_27_182547_create_carreras_table', 1),
(13, '2024_10_27_182706_create_categorias_table', 1),
(14, '2024_10_27_183749_create_carrera_habilidads_table', 1),
(15, '2024_10_27_183945_create_carrera_beneficios_table', 1),
(16, '2024_10_27_184022_create_malla_curriculars_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `novedads`
--

CREATE TABLE `novedads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `imagen_path` varchar(150) NOT NULL,
  `portada_path` varchar(250) DEFAULT NULL,
  `categoria` varchar(150) DEFAULT NULL,
  `nombre` varchar(150) NOT NULL,
  `slug` varchar(250) NOT NULL,
  `fecha` date NOT NULL,
  `descripcion` text DEFAULT NULL,
  `informacion` longtext DEFAULT NULL,
  `visible` tinyint(1) NOT NULL DEFAULT 1,
  `vista` bigint(20) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `novedads`
--

INSERT INTO `novedads` (`id`, `imagen_path`, `portada_path`, `categoria`, `nombre`, `slug`, `fecha`, `descripcion`, `informacion`, `visible`, `vista`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'public/uploads/images/novedads/GbcsFeqdZGkEswlcx7KXQXR4z7qXxXWGIAS607cD.png', NULL, 'blog', 'Serums 2024-II: esto es lo último que sabe de la evaluación', 'serums-2024-ii-esto-es-lo-ultimo-que-sabe-de-la-evaluacion', '2024-10-28', 'A pocos días para llevarse a cabo el proceso, el Minsa informó que hay más de 13 mil...', '<p><b>A pocos días para llevarse a cabo el proceso, el Minsa informó que hay más de 13 mil...</b></p>', 1, 114, '2024-10-29 01:15:11', '2024-12-03 14:45:50', NULL),
(2, 'public/uploads/images/novedads/8iJUkyNx6LGHu6Q9fPBxDJsC45UMedRiv491Z2Hf.png', NULL, 'blog', 'a', 'a', '2024-11-12', 'a', '<p>aaa</p>', 1, 0, '2024-11-12 18:49:56', '2024-11-12 18:50:30', '2024-11-12 18:50:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `portadas`
--

CREATE TABLE `portadas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `imagen_path` varchar(150) NOT NULL,
  `imagen_mobile_path` varchar(250) DEFAULT NULL,
  `nombre` varchar(150) NOT NULL,
  `link` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `portadas`
--

INSERT INTO `portadas` (`id`, `imagen_path`, `imagen_mobile_path`, `nombre`, `link`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'public/uploads/images/portadas/oAOlzQZ9yevVAJ1u0sDPyWaMSHjin0YrwtuD1tJw.png', 'public/uploads/images/portadas/EnyqHYooM4BFQHllEWnBfpLTEFy5TfkD2Sj1YffT.jpg', 'Banner 1', NULL, '2024-10-29 00:20:54', '2024-11-18 15:48:26', NULL),
(2, 'public/uploads/images/portadas/SgooxvGBDZDm9gRx2Yqhrp6HHuDmSsK0kyVfxdzr.png', NULL, 'Banner 2', NULL, '2024-11-12 21:23:20', '2024-11-18 15:30:51', '2024-11-18 15:30:51'),
(3, 'public/uploads/images/portadas/iuEFs10OCvMlwV7zH7au4v2QLnVsCmkujxKYetvn.png', NULL, 'Banner 2', NULL, '2024-11-12 21:23:25', '2024-11-12 21:23:57', '2024-11-12 21:23:57'),
(4, 'public/uploads/images/portadas/Xi4C7Tps70I5ZjzhekbPch2U1Ga7jkO8IUCy3NFW.png', NULL, 'Banner 2', NULL, '2024-11-18 15:31:50', '2024-11-18 15:50:15', '2024-11-18 15:50:15'),
(5, 'public/uploads/images/portadas/mMnOEA2P9EeHTsNkUWZWm69Pb9DOo82smy09TRJi.png', NULL, 'Banner 2', NULL, '2024-11-26 16:35:42', '2024-11-26 16:35:42', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `id` bigint(20) NOT NULL,
  `pregunta` longtext DEFAULT NULL,
  `respuesta` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`id`, `pregunta`, `respuesta`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '¿Cómo accedo al Entorno Virtual Aprendizaje (E.V.A-LOAYZA)?', '<p>Deberás acceder con la siguiente dirección web&nbsp;<a href=\"https://loayzavirtual.edu.pe/acces/\" target=\"_blank\"><u><font color=\"#3984c6\">https://loayzavirtual.edu.pe/acces/</font></u></a></p><p>* Si eres un estudiante nuevo tu acceso (usuario y contraseña) será con el número de tu DNI.</p><p>* Si eres estudiante que estas en el segundo mes y ciclos superiores, tu acceso (usuario y contraseña)&nbsp; será con tu código de estudiante.</p><p><br></p>', '2024-11-22 17:08:34', '2024-11-25 13:23:45', NULL),
(2, '¿Cómo ingreso a la Bolsa Laboral?', '<blockquote class=\"\"><p><font style=\"vertical-align: inherit;\">Puedes ingresar a través del siguiente enlace:<font color=\"#085294\">&nbsp;</font></font><a href=\"https://bolsadetrabajo.ial.edu.pe/\" target=\"_blank\"><font color=\"#085294\"><u>https://bolsadetrabajo.ial.edu.pe/</u></font></a></p></blockquote>', '2024-11-22 17:12:11', '2024-11-25 13:23:08', NULL),
(3, '¿Cómo puedo acceder a la Intranet?', '<p style=\"text-align: left;\">Se accede mediante la siguiente dirección:&nbsp;<a href=\"https://istalcursos.edu.pe/intranet\" target=\"_blank\" style=\"\"><u style=\"\"><font color=\"#0062ff\">https://istalcursos.edu.pe/intranet</font></u></a><a href=\"https://istalcursos.edu.pe/intranet\" target=\"_blank\" style=\"color: rgb(57, 132, 198);\"><u></u></a><font color=\"#3984c6\">&nbsp;</font>Para iniciar sesión use su código de alumno como usuario.&nbsp;</p>', '2024-11-23 17:35:15', '2024-11-25 13:37:14', NULL),
(4, '¿Cómo puedo actualizar mi información personal en el Intranet?', '<p>Enviar un correo a la dirección: admision@arzobispoloayza.edu.pe&nbsp; &nbsp;Adjuntando una imagen de su documento de identidad e indicando los campos que desea actualizar.</p>', '2024-11-23 17:42:12', '2024-11-23 17:42:12', NULL),
(5, '¿Cómo puedo acceder a la Biblioteca Virtual?', '<p>Para acceder a la Biblioteca Virtual ingrese a la siguiente dirección: <font color=\"#3984c6\"><u><b>http://istalcursos.edu.pe/bibliotecaial</b> </u></font>Para iniciar sesión use su código de alumno como usuario y clave.</p><p>En caso no pueda ingresar se debe comunicar al siguiente correo: <b><u>biblioteca@arzobispoloayza.edu.pe</u></b></p>', '2024-11-23 17:43:03', '2024-11-25 13:37:52', NULL),
(6, '¿Cómo descargo mis certificados digitales de mis capacitaciones?', '<p>Si haz recibido alguna capacitación por zoom o de manera presencial y deseas descargar tu certificado o constancia digital, deberás de acceder con la siguiente dirección: <a href=\"https://centrodecapacitacionaloayza.edu.pe\" target=\"_blank\"><u><font color=\"#085294\">https://centrodecapacitacionaloayza.edu.pe</font></u></a></p><p>* El acceso (usuario y contraseña) será con el número de tu DNI.</p>', '2024-11-23 17:45:42', '2024-11-25 13:23:27', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reclamaciones`
--

CREATE TABLE `reclamaciones` (
  `id` bigint(11) NOT NULL,
  `nom_consu` varchar(250) DEFAULT NULL,
  `ape_consu` varchar(250) DEFAULT NULL,
  `dni` varchar(250) DEFAULT NULL,
  `tel` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `nom_apod` varchar(250) DEFAULT NULL,
  `depa_id` varchar(250) DEFAULT NULL,
  `prov_id` varchar(250) DEFAULT NULL,
  `dist_id` varchar(250) DEFAULT NULL,
  `direccion` varchar(400) DEFAULT NULL,
  `servicio` varchar(250) DEFAULT NULL,
  `monto` varchar(250) DEFAULT NULL,
  `tipo_serv` varchar(250) DEFAULT NULL,
  `tipo_reclamo` varchar(250) DEFAULT NULL,
  `sede_id` int(100) DEFAULT NULL,
  `carrera_id` int(20) DEFAULT NULL,
  `detalle` varchar(500) DEFAULT NULL,
  `pedido` varchar(500) DEFAULT NULL,
  `prueba` varchar(500) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `satisfaccion`
--

CREATE TABLE `satisfaccion` (
  `id` bigint(11) NOT NULL,
  `id_novedad` int(11) DEFAULT NULL,
  `respuesta` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sedes`
--

CREATE TABLE `sedes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `imagen_path` varchar(150) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `link` text DEFAULT NULL,
  `telefono` varchar(50) DEFAULT NULL,
  `direccion` longtext DEFAULT NULL,
  `horarios` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sedes`
--

INSERT INTO `sedes` (`id`, `imagen_path`, `nombre`, `link`, `telefono`, `direccion`, `horarios`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'public/uploads/images/sedes/7z9EZEXlMwcEMFsXj9C8gTfCptkdXhlYkPBLc5Eg.webp', 'Cercado de Lima', NULL, '(01) 6344348', '[{\"texto\":\"Psje Nueva Rosita N\\u00b0 141\",\"link\":\"https:\\/\\/www.google.com\\/maps\\/embed?pb=!1m18!1m12!1m3!1d3901.8703318999715!2d-77.03877059999999!3d-12.0524416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c8c5ffd9bf07%3A0x2be046d3a239270!2sNueva%20Rosita%20140%2C%20Lima%2015001!5e0!3m2!1ses-419!2spe!4v1732206724224!5m2!1ses-419!2spe\"},{\"texto\":\"Av. Alfonso Ugarte N\\u00b01061\",\"link\":\"https:\\/\\/www.google.com\\/maps\\/embed?pb=!1m18!1m12!1m3!1d3901.8643274711962!2d-77.04452102415259!3d-12.05285454201578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c8c5821028c3%3A0xd1f06ffaec3a5368!2sAv.%20Alfonso%20Ugarte%201061%2C%20Lima%2015082!5e0!3m2!1ses-419!2spe!4v1732206981386!5m2!1ses-419!2spe\"},{\"texto\":\"Jr. Chota N\\u00b01080\",\"link\":\"https:\\/\\/www.google.com\\/maps\\/embed?pb=!1m18!1m12!1m3!1d3901.858992794566!2d-77.04569931549683!3d-12.05322141153748!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c8c5925bcf79%3A0x9e1df6748aef96da!2sJir%C3%B3n%20Chota%201080%2C%20Lima%2015001!5e0!3m2!1ses-419!2spe!4v1732207127586!5m2!1ses-419!2spe\"},{\"texto\":\"Av. Arequipa N\\u00b0935\",\"link\":\"https:\\/\\/www.google.com\\/maps\\/embed?pb=!1m18!1m12!1m3!1d3901.5592288846633!2d-77.03836602415214!3d-12.073818742406692!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c8ed7084f53b%3A0x485a9fb709eedb07!2sAv.%20Arequipa%20935%2C%20Lima%2015046!5e0!3m2!1ses-419!2spe!4v1732207273449!5m2!1ses-419!2spe\"},{\"texto\":\"Av. Arequipa N\\u00b01473\",\"link\":\"https:\\/\\/www.google.com\\/maps\\/embed?pb=!1m18!1m12!1m3!1d3901.4807021087768!2d-77.03758392415214!3d-12.079208742507243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c8f369ac2003%3A0x9cabe3d90bc891af!2sAv.%20Arequipa%201473%2C%20Lince%2015046!5e0!3m2!1ses-419!2spe!4v1732207322146!5m2!1ses-419!2spe\"}]', '[\"Lunes a Viernes de 8am a 6pm\",\"S\\u00e1bados de 9am a 1pm\"]', '2024-10-29 00:46:03', '2024-12-05 19:47:47', NULL),
(2, 'public/uploads/images/sedes/LGBSC5McCa6J1Qbc7xOm2UpdOfz0UjnmCeCIyykl.webp', 'Cercado de Lima', NULL, '(01) 6344348', 'Psje Nueva Rosita N° 140  (Altura cdra 10 Av. Inca Garcilaso de la Vega)', '[\"Lunes a Viernes de 8am a 6pm\",\"S\\u00e1bados de 9am a 1pm\"]', '2024-11-12 16:36:25', '2024-11-21 14:39:26', '2024-11-21 14:39:26'),
(3, 'public/uploads/images/sedes/rWbau8xOdwZlGdOwQRzgVhdnV4XeZVGofxnUrMvk.png', 'Los Olivos', NULL, '(01) 6344348', 'Av. Alfredo Mendiola N° 3349 (Frente a Mega Plaza)', '[\"Lunes a Viernes de 8am a 6pm\",\"S\\u00e1bados de 9am a 1pm\"]', '2024-11-12 16:41:23', '2024-11-21 14:39:31', '2024-11-21 14:39:31'),
(4, 'public/uploads/images/sedes/09hvm1f3u4nvOgigs74j2ys1fWt8wn1dHpGegL0t.webp', 'Independencia', NULL, '(01) 6344348', 'Av. Carlos Izaguirre N° 216 esquina con calle Napo N° 368 (C. Comercial San Lázaro)', '[\"Lunes a Viernes de 8am a 6pm\",\"S\\u00e1bados de 9am a 1pm\"]', '2024-11-12 16:43:44', '2024-11-21 14:39:28', '2024-11-21 14:39:28'),
(5, 'public/uploads/images/sedes/j65zYPouRBpy5tyyszwSAT7KpHUDkRP3kx2hO2Os.webp', 'Puente Piedra', NULL, '(01) 6344348', 'Av. Puente Piedra N°712 (A media cuadra paradero Elektra)', '[\"Lunes a Viernes de 8am a 6pm\",\"S\\u00e1bados de 9am a 1pm\"]', '2024-11-12 16:46:28', '2024-11-21 14:39:34', '2024-11-21 14:39:34'),
(6, 'public/uploads/images/sedes/RyisqWHXC4boyFj3m8lpfGloOG7t8kA12Xih6MXj.webp', 'Villa el Salvador', NULL, '(01) 6344348', 'Urb. Parque Industrial Parcela 2 lote 8 (A una cuadra de Juan Velasco)', '[\"Lunes a Viernes de 8am a 6pm\",\"S\\u00e1bados de 9am a 1pm\"]', '2024-11-12 18:28:28', '2024-11-21 14:39:35', '2024-11-21 14:39:35'),
(7, 'public/uploads/images/sedes/HPs5DP7xgUTvjN0mX1SlKml6KZmqc0nykAw5zZuq.webp', 'Villa María del Triunfo', NULL, '(01) 6344348', '[\"Av. Nicol\\u00e1s Ayll\\u00f3n N\\u00b0831\"]', '[\"Lunes a Viernes de 8am a 6pm\",\"S\\u00e1bados de 9am a 1pm\"]', '2024-11-12 18:29:37', '2024-11-21 14:39:37', '2024-11-21 14:39:37'),
(8, 'public/uploads/images/sedes/gbnoGiivfw88ha2feUS4TWr7IPy18JRbn8Z3J3sd.jpg', 'Los Olivos', NULL, '(01) 6344348', '[{\"texto\":\"Av. Alfredo Mendiola N\\u00b0 3349  (Frente a Mega Plaza)\",\"link\":\"https:\\/\\/www.google.com\\/maps\\/embed?pb=!1m18!1m12!1m3!1d487.83576586879974!2d-77.06377686910096!3d-11.996206797132855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105cfbcca8df1ed%3A0x880c8e64091f048d!2sInstituto%20Arzobispo%20Loayza!5e0!3m2!1ses-419!2spe!4v1732208391385!5m2!1ses-419!2spe\"},{\"texto\":\"Av. Carlos Augusto Salaverry N\\u00b0 3624\",\"link\":\"https:\\/\\/www.google.com\\/maps\\/embed?pb=!1m18!1m12!1m3!1d3902.740732226813!2d-77.0673440241536!3d-11.992433440893116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105ce56d775bbfb%3A0x6486eeca5b857a29!2sInstituto%20Arzobispo%20Loayza!5e0!3m2!1ses-419!2spe!4v1732209398382!5m2!1ses-419!2spe\"}]', '[\"Lunes a Viernes de 8am a 6pm\",\"S\\u00e1bados de 9am a 1pm\"]', '2024-11-21 17:01:07', '2024-11-21 17:17:49', NULL),
(9, 'public/uploads/images/sedes/ThrcqW7l31Sz2WnmdwEaeCes1nPDZ3eEhkKv1Hqe.jpg', 'Independencia', NULL, '(01) 6344348', '[{\"texto\":\"Av Carlos Izaguirre N\\u00b0 216 esquina con calle Napo N\\u00b0 368\",\"link\":\"https:\\/\\/www.google.com\\/maps\\/embed?pb=!1m18!1m12!1m3!1d243.92417407073592!2d-77.06079664977509!3d-11.989250164516905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105cf674c83eca1%3A0xe13df501196b1eef!2sAv.%20Carlos%20Izaguirre%20216%2C%20San%20Mart%C3%ADn%20de%20Porres%2015311!5e0!3m2!1ses-419!2spe!4v1732209211930!5m2!1ses-419!2spe\"}]', '[\"Lunes a Viernes de 8am a 6pm\",\"S\\u00e1bados de 9am a 1pm\"]', '2024-11-21 17:13:56', '2024-11-21 17:13:56', NULL),
(10, 'public/uploads/images/sedes/UEYNHCJadqCLiI420uZvIxWMxITuUEPyRGNMCtNS.jpg', 'Puente Piedra', NULL, '(01) 6344348', '[{\"texto\":\"Av. Puente Piedra N\\u00b0712\",\"link\":\"https:\\/\\/www.google.com\\/maps\\/embed?pb=!1m18!1m12!1m3!1d563.9031283489896!2d-77.07901083215775!3d-11.861140296834582!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105d764caaa91b9%3A0xdb8001b28aa5da3e!2sInstituto%20Arzobispo%20Loayza!5e0!3m2!1ses-419!2spe!4v1732545719973!5m2!1ses-419!2spe\"},{\"texto\":\"Av. Miguel Grau N\\u00b0191\",\"link\":\"https:\\/\\/www.google.com\\/maps\\/embed?pb=!1m18!1m12!1m3!1d244.03421559203036!2d-77.07590447675182!3d-11.86691825645262!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105d1351c8ff8ef%3A0x462ad1ed4269442!2sAv.%20Miguel%20Grau%20191%2C%20Puente%20Piedra%2015118!5e0!3m2!1ses-419!2spe!4v1732545881333!5m2!1ses-419!2spe\"}]', '[\"Lunes a Viernes de 8am a 6pm\",\"S\\u00e1bados de 9am a 1pm\"]', '2024-11-25 14:45:03', '2024-11-25 14:45:03', NULL),
(11, 'public/uploads/images/sedes/rrz2jcUwODA0kDMeAZaN5xxCtxyfe31n1FFiKjSF.jpg', 'Villa el Salvador', NULL, '(01) 6344348', '[{\"texto\":\"Urb. Parque Industrial Parcela 2 lote 8\",\"link\":\"https:\\/\\/www.google.com\\/maps\\/embed?pb=!1m14!1m8!1m3!1d16526.259625424682!2d-76.93246050652128!3d-12.202302237275292!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105b944e3f425db%3A0x1738cb874472dd1b!2sInstituto%20Arzobispo%20Loayza!5e0!3m2!1ses-419!2spe!4v1732546041376!5m2!1ses-419!2spe\"}]', '[\"Lunes a Viernes de 8am a 6pm\",\"S\\u00e1bados de 9am a 1pm\"]', '2024-11-25 14:48:21', '2024-11-25 14:48:21', NULL),
(12, 'public/uploads/images/sedes/bzzdD5olSnmdVOYUsxa9shsCRHJGR3fnHurWHpeD.png', 'Villa María del Triunfo', NULL, '(01) 6344348', '[{\"texto\":\"Av. El triunfo N\\u00b0845\",\"link\":\"https:\\/\\/www.google.com\\/maps\\/embed?pb=!1m18!1m12!1m3!1d1228.4025317623602!2d-76.9424266394326!3d-12.184826331329834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105b90060acebf9%3A0x54db85f293d8c46d!2sINSTITUTO%20ARZOBISPO%20LOAYZA!5e0!3m2!1ses-419!2spe!4v1733254311697!5m2!1ses-419!2spe\"}]', '[\"Lunes a Viernes de 8am a 6pm\",\"S\\u00e1bados de 9am a 1pm\"]', '2024-12-03 19:32:07', '2024-12-03 19:32:07', NULL),
(13, 'public/uploads/images/sedes/0qszS0sq3VwF6hWp6AdxMwWLLffAxK8JBCrczHvU.png', 'San Juan de Miraflores', NULL, '(01) 6344348', '[{\"texto\":\"Av. Guillermo Billingurth Mz. F2 Lote 32\",\"link\":\"https:\\/\\/www.google.com\\/maps\\/embed?pb=!1m18!1m12!1m3!1d31198.46265045344!2d-76.97076403930726!3d-12.193475337872135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105b8f9937bdcbf%3A0xc6cf2d651c9f7f8a!2sInstituto%20Arzobispo%20Loayza!5e0!3m2!1ses-419!2spe!4v1733254436618!5m2!1ses-419!2spe\"},{\"texto\":\"Av. Miguel Iglesias Mz. T Lote 9\",\"link\":\"https:\\/\\/www.google.com\\/maps\\/embed?pb=!1m18!1m12!1m3!1d9274.323664867143!2d-76.94211237267224!3d-12.22302065110346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105bb0049575005%3A0x2e9eb6470fdc4031!2sInstituto%20arzobispo%20loayza!5e0!3m2!1ses-419!2spe!4v1733254481223!5m2!1ses-419!2spe\"}]', '[\"Lunes a Viernes de 8am a 6pm\",\"S\\u00e1bados de 9am a 1pm\"]', '2024-12-03 19:34:19', '2024-12-03 19:35:14', NULL),
(14, 'public/uploads/images/sedes/jIyryaWB9K3bpmgHU4iz0IFCvB5uyvPBCyDvVHDQ.png', 'Ate', NULL, '(01) 6344348', '[{\"texto\":\"Av. Nicol\\u00e1s Ayll\\u00f3n N\\u00b0831\",\"link\":\"https:\\/\\/www.google.com\\/maps\\/embed?pb=!1m18!1m12!1m3!1d3902.2947818070506!2d-76.9149811241532!3d-12.023215541464317!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c3f9afb9efad%3A0xd9e22dca033fca18!2sinstituto%20arzobispo%20loayza%20-%20ate!5e0!3m2!1ses-419!2spe!4v1733254625742!5m2!1ses-419!2spe\"}]', '[\"Lunes a Viernes de 8am a 6pm\",\"S\\u00e1bados de 9am a 1pm\"]', '2024-12-03 19:37:53', '2024-12-05 16:51:42', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `testimonios`
--

CREATE TABLE `testimonios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `imagen_path` varchar(150) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `cargo` varchar(150) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `referencia` varchar(150) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `testimonios`
--

INSERT INTO `testimonios` (`id`, `imagen_path`, `nombre`, `cargo`, `descripcion`, `referencia`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'public/uploads/images/testimonios/kSsF0lBDw3lbHjTNAnKXkGVgLQZQH0Q1Gw2HZJAg.png', 'Jessica Luz Yactayo Flores', 'Fisioterapia y Rehabilitación', 'El Instituto Loayza me brindó una gran base para mi crecimiento profesional. Hoy tengo mi propio consultorio, donde puedo atender a más pacientes, con conocimientos actualizados y herramientas para ofrecerles una rehabilitación integral.A quienes estén interesados en esta carrera, les digo: si tienen voluntad y el deseo de ayudar a las personas en su recuperación, estudien Fisioterapia. Es una profesión con mucho futuro y una gran satisfacción personal.', 'Egresada del Instituto Arzobispo Loayza', '2024-10-29 00:18:18', '2024-12-02 19:44:56', NULL),
(2, 'public/uploads/images/testimonios/wAxWgPg0NjqxOgL8Y4YDRZleaBqIRwq3ef02BPlJ.png', 'Dana Garcilazo', 'Farmacia Técnica', 'Loayza me brindó los conocimientos educativos para desempeñarme con éxito en el campo laboral. Destaco los convenios educativos que ofrece el instituto, las oportunidades para realizar prácticas profesionales en distintos hospitales. Mi consejo para quienes desean seguir esta carrera es que sigan adelante con sus sueños y trabajen por alcanzar sus metas y objetivos. El Instituto Loayza les proporcionará todas las herramientas necesarias para convertirse en profesionales de la salud.', 'Egresada del Instituto Arzobispo Loayza', '2024-12-02 19:48:17', '2024-12-02 19:48:17', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombres` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(150) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `alianzas`
--
ALTER TABLE `alianzas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `carrera_beneficios`
--
ALTER TABLE `carrera_beneficios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carrera_beneficios_carrera_id_foreign` (`carrera_id`);

--
-- Indices de la tabla `carrera_habilidads`
--
ALTER TABLE `carrera_habilidads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carrera_habilidads_carrera_id_foreign` (`carrera_id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `configuracions`
--
ALTER TABLE `configuracions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `curso_beneficios`
--
ALTER TABLE `curso_beneficios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `curso_beneficios_curso_id_foreign` (`curso_id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `interesados`
--
ALTER TABLE `interesados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `malla_curriculars`
--
ALTER TABLE `malla_curriculars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `malla_curriculars_carrera_id_foreign` (`carrera_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `novedads`
--
ALTER TABLE `novedads`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `portadas`
--
ALTER TABLE `portadas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reclamaciones`
--
ALTER TABLE `reclamaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `satisfaccion`
--
ALTER TABLE `satisfaccion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sedes`
--
ALTER TABLE `sedes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `testimonios`
--
ALTER TABLE `testimonios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `alianzas`
--
ALTER TABLE `alianzas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `carreras`
--
ALTER TABLE `carreras`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `carrera_beneficios`
--
ALTER TABLE `carrera_beneficios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `carrera_habilidads`
--
ALTER TABLE `carrera_habilidads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `configuracions`
--
ALTER TABLE `configuracions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `curso_beneficios`
--
ALTER TABLE `curso_beneficios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `interesados`
--
ALTER TABLE `interesados`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `malla_curriculars`
--
ALTER TABLE `malla_curriculars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `novedads`
--
ALTER TABLE `novedads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `portadas`
--
ALTER TABLE `portadas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `reclamaciones`
--
ALTER TABLE `reclamaciones`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `satisfaccion`
--
ALTER TABLE `satisfaccion`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sedes`
--
ALTER TABLE `sedes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `testimonios`
--
ALTER TABLE `testimonios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrera_beneficios`
--
ALTER TABLE `carrera_beneficios`
  ADD CONSTRAINT `carrera_beneficios_carrera_id_foreign` FOREIGN KEY (`carrera_id`) REFERENCES `carreras` (`id`);

--
-- Filtros para la tabla `carrera_habilidads`
--
ALTER TABLE `carrera_habilidads`
  ADD CONSTRAINT `carrera_habilidads_carrera_id_foreign` FOREIGN KEY (`carrera_id`) REFERENCES `carreras` (`id`);

--
-- Filtros para la tabla `curso_beneficios`
--
ALTER TABLE `curso_beneficios`
  ADD CONSTRAINT `curso_beneficios_curso_id_foreign` FOREIGN KEY (`curso_id`) REFERENCES `cursos` (`id`);

--
-- Filtros para la tabla `malla_curriculars`
--
ALTER TABLE `malla_curriculars`
  ADD CONSTRAINT `malla_curriculars_carrera_id_foreign` FOREIGN KEY (`carrera_id`) REFERENCES `carreras` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
