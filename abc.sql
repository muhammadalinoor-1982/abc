-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2021 at 12:57 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abc`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_12_20_115141_create_zzzs_table', 1),
(5, '2021_01_13_160412_modifyzzz_table', 2),
(6, '2021_01_22_055554_create__profile__table', 3),
(7, '2021_01_22_065338_create__profile__table', 4),
(8, '2021_02_07_050153_modify_profile_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `custom_id` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `name`, `phone`, `email`, `email_verified_at`, `address`, `image`, `deleted_at`, `remember_token`, `created_at`, `updated_at`, `custom_id`) VALUES
(1, 'Muhammad', '5735185158', 'muhammadd@gmail.com', NULL, 'Makkah', '26.01.2021_1611629002_7437_L3T_2f9350397cd869a0c411451a3c352fef.jpg', NULL, NULL, '2021-01-22 03:53:45', '2021-01-25 20:43:22', ''),
(9, 'tahsan', '3865639786', 'tahsan@xyz.com', NULL, 'chili', 'tahsan.jpg', NULL, NULL, NULL, '2021-01-25 20:30:51', ''),
(10, 'tania', '9873655352', 'tania@xyz.com', NULL, 'papua', 'tania.jpg', NULL, NULL, NULL, '2021-01-30 00:38:37', ''),
(30, 'sssssss', '3865639', 'sssssss@zzz.com', NULL, 'ggsg', '1.jpg', NULL, NULL, NULL, NULL, ''),
(31, 'tttttttttttt', '987365', 'tttttttt@ttt.com', NULL, 'njgjs', '2.jpg', NULL, NULL, NULL, NULL, ''),
(32, 'vvvv', '564385', 'vvv@vvv.com', NULL, 'xzcbzv', '3.jpg', NULL, NULL, NULL, NULL, ''),
(33, 'fffff', '823926', 'fff@eee.com', NULL, 'qweas', '4.jpg', NULL, NULL, NULL, NULL, ''),
(34, 'ggggg', '91283', 'jjj@xxx.com', NULL, 'kukuj', '5.jpg', NULL, NULL, NULL, NULL, ''),
(35, 'ssssss', '333', 'sssssssss@ccc.com', NULL, '3333333', '07.02.2021_1612678180_196_L3T_4.jpg', NULL, NULL, '2021-02-07 00:09:40', '2021-02-07 00:09:40', NULL),
(36, 'eeeeeee', '43255', 'eeeeeee@eee.com', NULL, 'eeeeeeeee', '07.02.2021_1612679607_5018_L3T_5b5f8fad09b783c3d105a026f848f7cb.jpg', NULL, NULL, '2021-02-07 00:33:27', '2021-02-07 00:33:27', NULL),
(37, 'rrrrrrrrr', '12341414', 'rrrrr@rrr.comm', NULL, 'rrrrrrrrrr', '07.02.2021_1612680224_1255_L3T_d79159a388958b0d171511c34877f6c7.jpg', NULL, NULL, '2021-02-07 00:43:44', '2021-02-07 00:43:44', 'Comp-00001'),
(38, 'xxxxxxxx', '12357715', 'xxx@xxx.com', NULL, 'xxxxxxxxxxxxx', '07.02.2021_1612680308_5617_L3T_33a0b645a4787caea39f9711fea65b77.jpg', NULL, NULL, '2021-02-07 00:45:08', '2021-02-07 00:45:08', 'Comp-00002'),
(39, 'custom ID Creation Done', '471376', 'custom@vvv.com', NULL, 'custom ID Creation Done', '07.02.2021_1612680538_7338_L3T_abc6cc3c73d15587573db08ad5acb03b.jpg', NULL, NULL, '2021-02-07 00:47:33', '2021-02-07 00:48:58', 'Comp-00003');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `zzzs`
--

CREATE TABLE `zzzs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `zzzs`
--

INSERT INTO `zzzs` (`id`, `name`, `phone`, `email`, `email_verified_at`, `address`, `deleted_at`, `remember_token`, `created_at`, `updated_at`, `image`) VALUES
(7, 'dipika', '9873655352', 'dipikaa@xyz.com', NULL, 'India', NULL, NULL, NULL, '2021-01-19 21:05:59', 'images/nasheed/20.01.2021_1611111959_336_L3T_2f9350397cd869a0c411451a3c352fef.jpg'),
(9, 'paika', '4525332825', 'paikas@mmm.com', NULL, 'Chili', NULL, NULL, '2021-01-11 22:49:47', '2021-01-19 21:05:24', 'images/nasheed/20.01.2021_1611111924_4297_L3T_2c670a0189a5e14ab440d5a7e63a8600 (1).jpg'),
(11, 'tahsan', '3865639786', 'tahsan@xyz.com', NULL, 'chili', NULL, NULL, NULL, NULL, 'images/nasheed/tahsan.jpg'),
(12, 'tania', '9873655352', 'tania@xyz.com', NULL, 'papua', NULL, NULL, NULL, NULL, 'images/nasheed/tania.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `profiles_email_unique` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `zzzs`
--
ALTER TABLE `zzzs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `zzzs_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `zzzs`
--
ALTER TABLE `zzzs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
