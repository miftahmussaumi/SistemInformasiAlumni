-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2022 at 12:09 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tb_ppsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thn_lulus` int(11) NOT NULL,
  `jk` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tempat_lahir` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `about` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `organisasi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prestasi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_hp` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foto` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ipk` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tpt_kerja` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pekerjaan` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jurusan` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`id`, `email`, `password`, `nama`, `nim`, `thn_lulus`, `jk`, `tempat_lahir`, `tgl_lahir`, `about`, `organisasi`, `prestasi`, `no_hp`, `instagram`, `linkedin`, `foto`, `alamat`, `ipk`, `tpt_kerja`, `pekerjaan`, `jurusan`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', '12345', 'Admin', '123456', 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'miftah@gmail.com', '$2y$10$NBWDANR2RcL/fnvVa6GcSum0.vFhkK3Okguhv.ka/uWA76jly/jwO', 'Miftah Mussaumi', '1911522009', 2022, 'Perempuan', 'Padang', '1999-10-30', '<p>halooo</p>', '<p>1. Staff dinas</p><p>2. Iyain aja</p>', '<p>1. sdndfsd</p><p>2. dfgfd</p><p>3. skjdfskdj</p>', '082387887559', '@hayoloo', '@hmmm', '1640862154.png', 'Wisma Pondok Indah Blok c4, Korong Gadang Kuranji', '4.00', 'PT . Asia', 'Sistem Analyst', NULL, '2021-12-19 02:14:15', '2021-12-30 06:08:09'),
(10, 'dhiya@gmail.com', '$2y$10$I0Q8pYKPcU9IO8K2dnuDTeJBRJyor6mrIxt1bfWBePjhUlX6am4gq', 'Dhiya Nabila Denta', '1911523021', 2022, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1641077305.jpg', NULL, NULL, NULL, NULL, NULL, '2021-12-30 03:40:14', '2021-12-30 03:40:14'),
(11, 'pertama@gmailcom', '$2y$10$FErbNEdO/dHaFQd4lGCZNuAKdizLd1LTd3guoUDsinL2zWBAUZeH.', 'Pertama Edit', '1911522091', 2031, 'Laki-Laki', 'Padang', '2021-12-01', '<p>ini tentang saya edit</p>', '<p>1. org 1</p><p>2. org 2</p>', '<p>1. prestasi 1</p><p>2. prestasi 2</p>', '082563453455', '@pertama', '@pertama_linkedin', '1640876746.png', 'Padang', '4.00', 'Pt.Gudang', 'Sistem Analyst', NULL, '2021-12-30 07:57:54', '2021-12-30 08:06:37');

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
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_penulis` bigint(20) UNSIGNED DEFAULT NULL,
  `id_kategori` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_up` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id`, `id_penulis`, `id_kategori`, `judul`, `gambar`, `isi`, `tgl_up`, `created_at`, `updated_at`) VALUES
(2, 4, 3, 'dua test', '1640866160.gif', 'dua test', '2021-12-30', '2021-12-26 04:33:58', '2021-12-30 02:27:55'),
(7, 1, 3, 'Admin input', NULL, 'asdsada', '2021-12-29', '2021-12-28 17:22:07', '2021-12-28 17:22:07'),
(10, 11, 3, 'Testing up Gambar Edit', '1640858256.PNG', 'Testing up Gambar Edit<br>', '2021-12-30', '2021-12-30 02:57:36', '2021-12-30 02:57:36'),
(13, 4, 3, 'Informasi saya', '1640864975.gif', '<p>Ini Beasiswa</p>', '2021-12-30', '2021-12-30 04:49:35', '2021-12-30 04:49:35'),
(21, 1, 2, 'Admin Informasi', '1640877056.gif', '<p>Informasi admin<br></p>', '2021-12-30', '2021-12-30 08:10:56', '2021-12-30 08:10:56');

-- --------------------------------------------------------

--
-- Table structure for table `kat_info`
--

CREATE TABLE `kat_info` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kat_info`
--

INSERT INTO `kat_info` (`id`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(1, 'Umum', '2021-12-26 08:48:54', '2021-12-26 08:48:54'),
(2, 'Magang', '2021-12-26 08:48:54', '2021-12-26 08:48:54'),
(3, 'Beasiswa', '2021-12-26 08:49:48', '2021-12-26 08:49:48'),
(4, ' Pelatihan', '2021-12-26 08:50:45', '2021-12-26 08:50:45'),
(5, 'Loker', '2021-12-26 08:51:25', '2021-12-26 08:51:25');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_12_13_131755_create_pengajuan_akun_tables', 1),
(6, '2021_12_13_131856_create_alumni_tables', 1),
(7, '2021_12_13_132038_create_kat_info_tables', 1),
(8, '2021_12_13_141329_create_informasi_tables', 1),
(9, '2021_12_30_102418_add_foto_field_to_pengajuan_akun_table', 2);

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
-- Table structure for table `pengajuan_akun`
--

CREATE TABLE `pengajuan_akun` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thn_lulus` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$IBr3D2EQnkizZ7qNFDDY2Ozu.AS/OBfTKbwKYDRJqbAA7nBPShUyq', 'PIxMGl4EPStjt4OjhmnkBX38GoeU1KKHAIcvBV9bm7gTMgvYu9arB5lQ4yue', '2021-12-13 11:53:05', '2021-12-13 11:53:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `alumni_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `informasi_id_penulis_foreign` (`id_penulis`),
  ADD KEY `informasi_id_kategori_foreign` (`id_kategori`);

--
-- Indexes for table `kat_info`
--
ALTER TABLE `kat_info`
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
-- Indexes for table `pengajuan_akun`
--
ALTER TABLE `pengajuan_akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `kat_info`
--
ALTER TABLE `kat_info`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pengajuan_akun`
--
ALTER TABLE `pengajuan_akun`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `informasi`
--
ALTER TABLE `informasi`
  ADD CONSTRAINT `informasi_id_kategori_foreign` FOREIGN KEY (`id_kategori`) REFERENCES `kat_info` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `informasi_id_penulis_foreign` FOREIGN KEY (`id_penulis`) REFERENCES `alumni` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
