-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-07-2018 a las 23:07:14
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.0.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `incidencias`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_id` int(10) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`, `project_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Categoria A1', 1, NULL, '2018-07-03 19:34:44', '2018-07-03 19:34:44'),
(2, 'Categoría A2', 1, NULL, '2018-07-03 19:34:44', '2018-07-03 19:34:44'),
(3, 'Categoría B1', 2, NULL, '2018-07-03 19:34:44', '2018-07-03 19:34:44'),
(4, 'Categoría B2', 2, NULL, '2018-07-03 19:34:44', '2018-07-03 19:34:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incidents`
--

CREATE TABLE `incidents` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `severity` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `project_id` int(10) UNSIGNED DEFAULT NULL,
  `level_id` int(10) UNSIGNED DEFAULT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `support_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `incidents`
--

INSERT INTO `incidents` (`id`, `title`, `description`, `severity`, `active`, `category_id`, `project_id`, `level_id`, `client_id`, `support_id`, `created_at`, `updated_at`) VALUES
(4, 'RESPUESTA A TESIS', 'Quisiera conocer la respuesta a la tesis que presenté.\r\nCodigo: 2015-119038', 'A', 1, NULL, 1, 1, 2, 3, '2018-07-17 15:59:08', '2018-07-17 16:06:46'),
(5, 'RESPUESTA A TESINA', 'Quisier pedir la respuesta a la Tesina que expuse\r\nCodigo: 2015-226855', 'N', 1, NULL, 1, 1, 2, NULL, '2018-07-17 16:17:22', '2018-07-17 16:17:22'),
(12, 'SOLICITUD DE TESIS  FORMATO', 'Necesito el formato para poder presentarlo.', 'N', 1, NULL, 1, 2, 10, NULL, '2018-07-19 20:20:41', '2018-07-19 20:23:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `levels`
--

CREATE TABLE `levels` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_id` int(10) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `levels`
--

INSERT INTO `levels` (`id`, `name`, `project_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Analisis General', 1, NULL, '2018-07-03 19:34:44', '2018-07-03 19:34:44'),
(2, 'Analisis Especifico', 1, NULL, '2018-07-03 19:34:44', '2018-07-03 19:34:44'),
(3, 'Verificacion de existencia', 2, NULL, '2018-07-03 19:34:44', '2018-07-03 19:34:44'),
(4, 'Pedido especializado', 2, NULL, '2018-07-03 19:34:45', '2018-07-03 19:34:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `incident_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(58, '2014_06_02_004335_create_projects_table', 1),
(59, '2014_10_12_000000_create_users_table', 1),
(60, '2014_10_12_100000_create_password_resets_table', 1),
(61, '2018_06_02_004337_create_categories_table', 1),
(62, '2018_06_02_004359_create_levels_table', 1),
(63, '2018_06_02_004422_create_incidents_table', 1),
(64, '2018_06_19_003238_create_project_user_table', 1),
(65, '2018_07_03_125702_create_messages_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `projects`
--

CREATE TABLE `projects` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` date DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `projects`
--

INSERT INTO `projects` (`id`, `name`, `description`, `start`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Grados y Títulos', 'Aqui pueden pedir información acerca de Grados y Títulos:  Formatos, Respuestas de Sustentación.', '2018-07-19', NULL, '2018-07-03 19:34:44', '2018-07-19 20:07:01'),
(2, 'Curricula de Estudios', 'Aqui pueden solicitar la malla curricular actual o antigua.', '2018-07-19', NULL, '2018-07-03 19:34:44', '2018-07-03 19:34:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `project_user`
--

CREATE TABLE `project_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `project_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `level_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `project_user`
--

INSERT INTO `project_user` (`id`, `project_id`, `user_id`, `level_id`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 1, '2018-07-03 19:34:45', '2018-07-03 19:34:45'),
(3, 2, 4, 3, '2018-07-16 07:34:00', '2018-07-16 07:34:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` smallint(6) NOT NULL DEFAULT '2',
  `selected_project_id` int(10) UNSIGNED DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `selected_project_id`, `remember_token`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '$2y$10$7d1T1BcUWRSy3Y/Hcn3TwOkmcIrJsnG55O4CIkxHdAVBqRn6r2tXO', 0, 1, 'SFMVLjdsB8GgCywZWYnAAYzfHs61TQzWrI1cth5lLahaaP0pZWI2gPk1aI74', NULL, '2018-07-03 19:34:43', '2018-07-17 15:27:42'),
(2, 'Rita', 'client@gmail.com', '$2y$10$rAUHP3YOMyapXr4uWFlO7.MXY602J7Vo2Oc6twN4UuAtUNOUetGf6', 2, 1, 'NqOt2V09U0YOtxY3SD5uHx79Z6xOL7N9KTvJP9BKvVRrHaYnn7rz3sgkuu8Q', NULL, '2018-07-03 19:34:44', '2018-07-17 15:59:30'),
(3, 'S_José', 'support1@gmail.com', '$2y$10$BGVq26DBFHudpWBSklXgwe19obEBAhAIo4B.l5V68XbcNSLt2.eCO', 1, 1, 'UMnWRB9zdk4nVSfR7Vgj04WnKy2LlOTo1Dd9BBDlFvVf9bDwaipmvSARC3oB', NULL, '2018-07-03 19:34:45', '2018-07-03 20:59:51'),
(4, 'S_Leonidas', 'support2@gmail.com', '$2y$10$gJb.9XxaAPMIjIyKcpTNceRVBRrWFhKUczOqb3vPBYpMXF3VnkeGq', 1, 2, 'P2xmefV8zDwewDd6sL0yCZ4EIxeaIKbX5OUe9Ta3jqj02mkJsT8Z8CZEyHI2', NULL, '2018-07-03 19:34:45', '2018-07-16 07:33:28'),
(5, 'Alexis C', 'alexis_fral@gmail.com', '$2y$10$kb.3Ng3MUc5Y5bQMKYjVw./Tuh000NP6WXf6EQUnrliMD5Of.j9ea', 2, 1, 'LIzXRLU7Qe5U3yMtiZ4Yh0LVWiiFaNqJ0sUaFXZYU98AJVwyiHg7g7hytoHy', NULL, '2018-07-17 16:18:10', '2018-07-17 17:37:09'),
(9, 'S_Fressia', 'support3@gmail.com', '$2y$10$wY1CBqBXv/uhbPZb/IAPvuvE52jRVnuGPxuGesGMW/9e1W7bM6qqy', 1, NULL, NULL, NULL, '2018-07-19 18:58:23', '2018-07-19 18:58:23'),
(10, 'Alexis', 'alexis666@gmail.com', '$2y$10$pqnHbLu3c9vEgxj1QT5nwuKF87i7AEc6sOERzPofBUwZa6iP48o9u', 2, 1, 'MVLmsqsMcIORvPykev6vKg83yna1rObrh7Oay6ZU7uFWXb85r6YMam45QV65', NULL, '2018-07-19 20:19:12', '2018-07-19 20:20:53');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_project_id_foreign` (`project_id`);

--
-- Indices de la tabla `incidents`
--
ALTER TABLE `incidents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `incidents_category_id_foreign` (`category_id`),
  ADD KEY `incidents_project_id_foreign` (`project_id`),
  ADD KEY `incidents_level_id_foreign` (`level_id`),
  ADD KEY `incidents_client_id_foreign` (`client_id`),
  ADD KEY `incidents_support_id_foreign` (`support_id`);

--
-- Indices de la tabla `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `levels_project_id_foreign` (`project_id`);

--
-- Indices de la tabla `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `messages_incident_id_foreign` (`incident_id`),
  ADD KEY `messages_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `project_user`
--
ALTER TABLE `project_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_user_project_id_foreign` (`project_id`),
  ADD KEY `project_user_user_id_foreign` (`user_id`),
  ADD KEY `project_user_level_id_foreign` (`level_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_selected_project_id_foreign` (`selected_project_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `incidents`
--
ALTER TABLE `incidents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `levels`
--
ALTER TABLE `levels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT de la tabla `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `project_user`
--
ALTER TABLE `project_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`);

--
-- Filtros para la tabla `incidents`
--
ALTER TABLE `incidents`
  ADD CONSTRAINT `incidents_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `incidents_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `incidents_level_id_foreign` FOREIGN KEY (`level_id`) REFERENCES `levels` (`id`),
  ADD CONSTRAINT `incidents_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`),
  ADD CONSTRAINT `incidents_support_id_foreign` FOREIGN KEY (`support_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `levels`
--
ALTER TABLE `levels`
  ADD CONSTRAINT `levels_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`);

--
-- Filtros para la tabla `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_incident_id_foreign` FOREIGN KEY (`incident_id`) REFERENCES `incidents` (`id`),
  ADD CONSTRAINT `messages_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `project_user`
--
ALTER TABLE `project_user`
  ADD CONSTRAINT `project_user_level_id_foreign` FOREIGN KEY (`level_id`) REFERENCES `levels` (`id`),
  ADD CONSTRAINT `project_user_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`),
  ADD CONSTRAINT `project_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_selected_project_id_foreign` FOREIGN KEY (`selected_project_id`) REFERENCES `projects` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
