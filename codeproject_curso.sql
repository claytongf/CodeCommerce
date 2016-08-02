-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04-Jul-2016 às 22:47
-- Versão do servidor: 10.1.10-MariaDB
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeproject_curso`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clients`
--

CREATE TABLE `clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `responsible` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `obs` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `clients`
--

INSERT INTO `clients` (`id`, `name`, `responsible`, `email`, `phone`, `address`, `obs`, `created_at`, `updated_at`) VALUES
(1, 'Darius Wyman', 'Ms. Elise Schmitt', 'imueller@grady.com', '05510394189', '941 Stroman Plaza Apt. 799\nBartellside, MS 92856-9267', 'Rem minima iusto omnis sit et.', '2015-12-14 22:39:24', '2015-12-14 22:39:24'),
(2, 'Dr. Hugh Lockman', 'Dr. Maxime Lemke V', 'cummings.delpha@yahoo.com', '1-649-867-4443x089', '425 Rice Loop\nNew Buddyview, WV 24176-8578', 'Molestias quidem voluptas omnis mollitia doloremque sit.', '2015-12-14 22:39:24', '2015-12-14 22:39:24'),
(4, 'Dashawn Russel', 'Elna Schuster', 'blick.scarlett@yahoo.com', '(584)021-1157x0396', '011 Lynch Ridge Apt. 870\nKuhnbury, WI 92365', 'Tempore soluta minima molestiae.', '2015-12-14 22:39:24', '2015-12-14 22:39:24'),
(5, 'Clay Bechtelar', 'Kevon Barton', 'powlowski.johnson@gmail.com', '871-695-7921x4069', '272 West Burgs\nWest Carolannestad, AZ 38127', 'Sequi dolor quisquam quas sapiente quam.', '2015-12-14 22:39:24', '2015-12-14 22:39:24'),
(6, 'Denis Corwin', 'Jakob Padberg', 'xreynolds@prohaska.info', '+08(9)1040790997', '6519 Americo Highway\nJaceberg, FL 00776-6463', 'Sapiente quia quia fugit aut.', '2015-12-14 22:39:24', '2015-12-14 22:39:24'),
(7, 'Mackenzie Ebert', 'Allison Turner', 'easton.kovacek@marquardt.com', '1-335-312-9058', '03971 Theresa Port Suite 271\nAugustafurt, CA 08075-1902', 'Nulla rem nesciunt assumenda praesentium quaerat dolores possimus molestiae.', '2015-12-14 22:39:24', '2015-12-14 22:39:24'),
(8, 'Amani Kertzmann', 'Genoveva Huels', 'krista94@yahoo.com', '386-522-0434x723', '64683 Lebsack Run Suite 905\nMoenfurt, KS 89358-0851', 'Ea autem occaecati temporibus quis modi sit.', '2015-12-14 22:39:24', '2015-12-14 22:39:24'),
(9, 'Armand Turcotte', 'Eleonore Frami V', 'sawayn.nestor@watsica.org', '1-445-950-9724x6392', '11765 Ford Trail\nZiemeview, KS 58099', 'Voluptatem omnis excepturi illo est harum sed omnis.', '2015-12-14 22:39:24', '2015-12-14 22:39:24'),
(10, 'Erin Bergnaum', 'Corrine Welch', 'cathryn42@gmail.com', '904.630.7673x3746', '1076 Geoffrey Expressway Apt. 171\nEast Hiramberg, AR 83656-6223', 'Doloribus ut et ullam itaque pariatur.', '2015-12-14 22:39:24', '2015-12-14 22:39:24'),
(11, 'Empresa X', 'Clayton', 'x@x.com', '42325522', 'endereço qualquer', 'qualquer obs', '2015-12-14 23:03:07', '2015-12-14 23:03:07');

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_12_14_195555_create_clients_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
