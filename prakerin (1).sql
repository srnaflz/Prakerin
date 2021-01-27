-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2021 at 12:33 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prakerin`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kasuse2s`
--

CREATE TABLE `kasuse2s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_negara` bigint(20) UNSIGNED NOT NULL,
  `jumlah_positif` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_meninggal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_sembuh` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kasuses`
--

CREATE TABLE `kasuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_rw` bigint(20) UNSIGNED NOT NULL,
  `positif` int(11) NOT NULL,
  `sembuh` int(11) NOT NULL,
  `meninggal` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kasuses`
--

INSERT INTO `kasuses` (`id`, `id_rw`, `positif`, `sembuh`, `meninggal`, `tanggal`, `created_at`, `updated_at`) VALUES
(5, 6, 4, -2, 3, '2021-01-28', '2021-01-27 02:38:35', '2021-01-27 02:38:35');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatans`
--

CREATE TABLE `kecamatans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kota` bigint(20) UNSIGNED NOT NULL,
  `kode_kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kecamatans`
--

INSERT INTO `kecamatans` (`id`, `id_kota`, `kode_kecamatan`, `nama_kecamatan`, `created_at`, `updated_at`) VALUES
(1, 1, '111', 'Bojong Loa Kidul', NULL, NULL),
(3, 1, '8906', 'Dayeuh Kolot', '2021-01-20 21:33:38', '2021-01-20 21:33:38'),
(4, 2, '1001', 'Gondokusuman', '2021-01-20 22:17:05', '2021-01-21 03:24:34'),
(5, 2, '1234', 'Gatau Namanya', '2021-01-26 23:31:38', '2021-01-26 23:31:38');

-- --------------------------------------------------------

--
-- Table structure for table `kelurahans`
--

CREATE TABLE `kelurahans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kecamatan` bigint(20) UNSIGNED NOT NULL,
  `nama_kelurahan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelurahans`
--

INSERT INTO `kelurahans` (`id`, `id_kecamatan`, `nama_kelurahan`, `created_at`, `updated_at`) VALUES
(2, 1, 'Dayeuh Kolot', '2021-01-21 03:59:23', '2021-01-21 04:17:56'),
(3, 5, 'Sama Juga Gatau', '2021-01-26 23:32:11', '2021-01-26 23:32:11');

-- --------------------------------------------------------

--
-- Table structure for table `kotas`
--

CREATE TABLE `kotas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_provinsi` bigint(20) UNSIGNED NOT NULL,
  `kode_kota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kotas`
--

INSERT INTO `kotas` (`id`, `id_provinsi`, `kode_kota`, `nama_kota`, `created_at`, `updated_at`) VALUES
(1, 1, '4089', 'Bandung', '2021-01-20 21:13:19', '2021-01-20 21:13:19'),
(2, 2, '4034', 'Yogyakarta', '2021-01-20 21:13:43', '2021-01-20 21:13:43');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(12, '2014_10_12_000000_create_users_table', 1),
(13, '2014_10_12_100000_create_password_resets_table', 1),
(14, '2019_08_19_000000_create_failed_jobs_table', 1),
(15, '2021_01_14_221023_create_provinsis_table', 1),
(16, '2021_01_14_221417_create_kotas_table', 1),
(17, '2021_01_14_221443_create_kecamatans_table', 1),
(18, '2021_01_14_221523_create_kelurahans_table', 1),
(19, '2021_01_14_222942_create_r_w_s_table', 1),
(20, '2021_01_14_223422_create_kasuses_table', 1),
(21, '2021_01_15_124454_create_negaras_table', 1),
(22, '2021_01_15_125022_create_kasuse2s_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `negaras`
--

CREATE TABLE `negaras` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_negara` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_negara` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `provinsis`
--

CREATE TABLE `provinsis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_provinsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_provinsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `provinsis`
--

INSERT INTO `provinsis` (`id`, `kode_provinsi`, `nama_provinsi`, `created_at`, `updated_at`) VALUES
(1, '1001', 'Jawa Barat', '2021-01-20 21:12:20', '2021-01-20 21:12:20'),
(2, '1002', 'Jawa Tengah', '2021-01-20 21:12:36', '2021-01-20 21:12:36'),
(4, '1003', 'Jawa Timur', '2021-01-21 04:45:11', '2021-01-21 04:45:11'),
(7, '1004', 'Aceh', '2021-01-24 17:13:38', '2021-01-24 17:13:38'),
(8, '1008', 'Sulawesi Utara', '2021-01-26 23:10:49', '2021-01-26 23:10:49'),
(9, '1006', 'Jakardah', '2021-01-26 23:27:01', '2021-01-26 23:27:01');

-- --------------------------------------------------------

--
-- Table structure for table `r_w_s`
--

CREATE TABLE `r_w_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kelurahan` bigint(20) UNSIGNED NOT NULL,
  `nama_rw` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `r_w_s`
--

INSERT INTO `r_w_s` (`id`, `id_kelurahan`, `nama_rw`, `created_at`, `updated_at`) VALUES
(5, 2, '3', '2021-01-27 01:32:45', '2021-01-27 01:33:01'),
(6, 3, '01', '2021-01-27 02:19:29', '2021-01-27 02:19:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'zulfaaa', 'zulfa@gmail.com', NULL, '$2y$10$uE8LoWAlP6HafGQxGZoBFeobUQeAAxjR3p9b4ew17wiFNSsPigxYa', NULL, '2021-01-20 20:54:40', '2021-01-20 20:54:40'),
(2, 'User', 'user@gmail.com', NULL, '$2y$10$FJhyrda9Bytnh.XvkcbJn.xBoKZSFhVU7Tl4Z/e2Mr6s1D4z7NLM6', NULL, '2021-01-23 01:27:39', '2021-01-23 01:27:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kasuse2s`
--
ALTER TABLE `kasuse2s`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kasuse2s_id_negara_foreign` (`id_negara`);

--
-- Indexes for table `kasuses`
--
ALTER TABLE `kasuses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kasuses_id_rw_foreign` (`id_rw`);

--
-- Indexes for table `kecamatans`
--
ALTER TABLE `kecamatans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kecamatans_id_kota_foreign` (`id_kota`);

--
-- Indexes for table `kelurahans`
--
ALTER TABLE `kelurahans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kelurahans_id_kecamatan_foreign` (`id_kecamatan`);

--
-- Indexes for table `kotas`
--
ALTER TABLE `kotas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kotas_id_provinsi_foreign` (`id_provinsi`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `negaras`
--
ALTER TABLE `negaras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `provinsis`
--
ALTER TABLE `provinsis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `r_w_s`
--
ALTER TABLE `r_w_s`
  ADD PRIMARY KEY (`id`),
  ADD KEY `r_w_s_id_kelurahan_foreign` (`id_kelurahan`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kasuse2s`
--
ALTER TABLE `kasuse2s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kasuses`
--
ALTER TABLE `kasuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kecamatans`
--
ALTER TABLE `kecamatans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kelurahans`
--
ALTER TABLE `kelurahans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kotas`
--
ALTER TABLE `kotas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `negaras`
--
ALTER TABLE `negaras`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `provinsis`
--
ALTER TABLE `provinsis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `r_w_s`
--
ALTER TABLE `r_w_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kasuse2s`
--
ALTER TABLE `kasuse2s`
  ADD CONSTRAINT `kasuse2s_id_negara_foreign` FOREIGN KEY (`id_negara`) REFERENCES `negaras` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `kasuses`
--
ALTER TABLE `kasuses`
  ADD CONSTRAINT `kasuses_id_rw_foreign` FOREIGN KEY (`id_rw`) REFERENCES `r_w_s` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `kecamatans`
--
ALTER TABLE `kecamatans`
  ADD CONSTRAINT `kecamatans_id_kota_foreign` FOREIGN KEY (`id_kota`) REFERENCES `kotas` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `kelurahans`
--
ALTER TABLE `kelurahans`
  ADD CONSTRAINT `kelurahans_id_kecamatan_foreign` FOREIGN KEY (`id_kecamatan`) REFERENCES `kecamatans` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `kotas`
--
ALTER TABLE `kotas`
  ADD CONSTRAINT `kotas_id_provinsi_foreign` FOREIGN KEY (`id_provinsi`) REFERENCES `provinsis` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `r_w_s`
--
ALTER TABLE `r_w_s`
  ADD CONSTRAINT `r_w_s_id_kelurahan_foreign` FOREIGN KEY (`id_kelurahan`) REFERENCES `kelurahans` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
