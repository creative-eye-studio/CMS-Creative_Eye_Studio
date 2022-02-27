-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 14, 2021 at 07:18 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `cms-projects`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_desc` longtext COLLATE utf8mb4_unicode_ci,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20210413102550', '2021-04-13 10:49:51', 50),
('DoctrineMigrations\\Version20210413104933', '2021-04-13 10:51:41', 53),
('DoctrineMigrations\\Version20210413111327', '2021-04-13 11:13:37', 57),
('DoctrineMigrations\\Version20210413155502', '2021-04-13 15:55:11', 125),
('DoctrineMigrations\\Version20210414081038', '2021-04-14 08:10:47', 89),
('DoctrineMigrations\\Version20210414182732', '2021-04-14 18:27:41', 80),
('DoctrineMigrations\\Version20210416164256', '2021-04-16 16:43:06', 167),
('DoctrineMigrations\\Version20210416205847', '2021-04-16 20:58:55', 135),
('DoctrineMigrations\\Version20210417071815', '2021-04-17 07:18:23', 141),
('DoctrineMigrations\\Version20210418113655', '2021-05-13 10:06:05', 252),
('DoctrineMigrations\\Version20210513080552', '2021-05-13 10:06:58', 120),
('DoctrineMigrations\\Version20210515094519', '2021-05-15 11:45:39', 131),
('DoctrineMigrations\\Version20210715203800', '2021-07-15 22:38:11', 150),
('DoctrineMigrations\\Version20210716044626', '2021-07-16 06:46:56', 79),
('DoctrineMigrations\\Version20210716083156', '2021-07-16 10:32:05', 354),
('DoctrineMigrations\\Version20210716083433', '2021-07-16 10:34:42', 180),
('DoctrineMigrations\\Version20210716084038', '2021-07-16 10:41:03', 184),
('DoctrineMigrations\\Version20210716084407', '2021-07-16 10:44:17', 196),
('DoctrineMigrations\\Version20210716084551', '2021-07-16 10:46:00', 105),
('DoctrineMigrations\\Version20210716084733', '2021-07-16 10:47:43', 89),
('DoctrineMigrations\\Version20210716092046', '2021-07-16 11:20:56', 145),
('DoctrineMigrations\\Version20210716092426', '2021-07-16 11:24:42', 240),
('DoctrineMigrations\\Version20210911114649', '2021-09-11 13:48:01', 258),
('DoctrineMigrations\\Version20210913132126', '2021-09-13 15:21:41', 150);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` longtext COLLATE utf8mb4_unicode_ci,
  `blocked_page` tinyint(1) NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `slug`, `meta_title`, `meta_description`, `blocked_page`, `file_name`) VALUES
(1, 'Accueil', 'index', 'Accueil du site', 'Description', 1, 'index'),
(3, 'Mentions légales', 'mentions-legales', 'Mentions légales du site', NULL, 1, 'mentions-legales'),
(4, 'Politique de confidentialité', 'politique-de-confidentialite', 'Politique de confidentialité', NULL, 1, 'politique-de-confidentialite');

-- --------------------------------------------------------

--
-- Table structure for table `reset_password_request`
--

CREATE TABLE `reset_password_request` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_verified` tinyint(1) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `roles`, `password`, `is_verified`, `name`, `firstname`) VALUES
(1, 'contact@creative-eye.fr', '[\"ROLE_ADMIN\"]', '$2y$13$rECqk3C0kY80Ax9sYlEbxOLImvAMemZpng.Z7t62NPc9xqRxWlY4m', 1, 'Kévin', 'Rifa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reset_password_request`
--
ALTER TABLE `reset_password_request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_7CE748AA76ED395` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_1483A5E9E7927C74` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `reset_password_request`
--
ALTER TABLE `reset_password_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reset_password_request`
--
ALTER TABLE `reset_password_request`
  ADD CONSTRAINT `FK_7CE748AA76ED395` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
