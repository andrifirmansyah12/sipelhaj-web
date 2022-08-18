-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Agu 2022 pada 19.13
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sipelhaj`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berkas`
--

CREATE TABLE `berkas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `kk` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `akta_kelahiran` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `ktp` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `foto_a` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `foto_b` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `foto_c` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `btl_norek` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `btl_nominal` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `domisili` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `berkas`
--

INSERT INTO `berkas` (`id`, `nama_lengkap`, `kk`, `akta_kelahiran`, `ktp`, `foto_a`, `foto_b`, `foto_c`, `btl_norek`, `btl_nominal`, `domisili`, `created_at`, `updated_at`) VALUES
(2, 'Purwa Hadinegara', 'g.jpg', 'g.jpg', 'g.jpg', 'g.jpg', 'g.jpg', 'g.jpg', 'g.jpg', 'g.jpg', 'g.jpg', '2022-08-03 13:16:04', '2022-08-03 13:16:04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwals`
--

CREATE TABLE `jadwals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tgl_miladiyah` date NOT NULL,
  `tgl_huriyah` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `kegiatan` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `waktu` time NOT NULL,
  `tempat` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `jadwals`
--

INSERT INTO `jadwals` (`id`, `tgl_miladiyah`, `tgl_huriyah`, `kegiatan`, `waktu`, `tempat`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, '2022-07-26', '12 Dzulhijah 1345', 'Briefing', '12:50:00', 'Aula', 'Haji', '2022-07-27 12:50:57', '2022-07-27 12:50:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jamaahs`
--

CREATE TABLE `jamaahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tgl_daftar` datetime NOT NULL,
  `nama_lengkap` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `tgl_lahir` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8_unicode_ci NOT NULL,
  `no_telp` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_07_26_052800_create_jamaahs_table', 1),
(6, '2022_07_27_033122_create_berkas_table', 1),
(7, '2022_07_27_044732_create_jadwals_table', 1),
(8, '2022_07_27_052654_create_transaksis_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksis`
--

CREATE TABLE `transaksis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `nama_lengkap` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `debet` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `transaksis`
--

INSERT INTO `transaksis` (`id`, `tgl_transaksi`, `nama_lengkap`, `debet`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, '2022-07-14', 'Majid Alwi', 'Rp. 2.000.000', 'Haji', '2022-07-27 12:45:30', '2022-07-27 12:50:05'),
(5, '2022-07-15', 'Purwa Hadinegara', 'Rp. 30.000.000', 'Haji', '2022-07-29 03:30:51', '2022-07-29 03:30:51'),
(6, '2022-07-25', 'Ahmad Susanto', 'Rp. 2.000.000', 'Haji', '2022-08-01 12:53:56', '2022-08-01 12:53:56'),
(7, '2022-07-30', 'Muhamed Fiqh Sahd', 'Rp. 30.000.000', 'Haji', '2022-08-01 12:54:15', '2022-08-01 12:54:15'),
(8, '2022-07-31', 'Ahmad Susanto', 'Rp. 2.000.000', 'Umroh', '2022-08-01 12:54:35', '2022-08-01 12:54:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `password` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `is_admin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, 1, '$2y$10$PSdowL6d13tVtMP55d2Gtujzu9LSDacA.aH6WsCiLnd6iTFzXlJsa', NULL, '2022-07-27 12:31:00', '2022-07-27 12:31:00'),
(2, 'User', 'user@gmail.com', NULL, 0, '$2y$10$33UhLjUZV1NwrcC4zuVCi.GWf.rvg.RgFopN1tlxzWpVJ/ffolaY2', NULL, '2022-07-27 12:31:00', '2022-07-27 12:31:00'),
(3, 'Muhidin', 'muhidin@gmail.com', NULL, NULL, '$2y$10$qOWG7PBIemzNPKYOm0oRhe4bKnKMcv8vZeG9JvISOdkp4JEBGBnNW', NULL, '2022-08-02 11:14:28', '2022-08-02 11:14:28');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berkas`
--
ALTER TABLE `berkas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jadwals`
--
ALTER TABLE `jadwals`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jamaahs`
--
ALTER TABLE `jamaahs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `transaksis`
--
ALTER TABLE `transaksis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berkas`
--
ALTER TABLE `berkas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jadwals`
--
ALTER TABLE `jadwals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `jamaahs`
--
ALTER TABLE `jamaahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transaksis`
--
ALTER TABLE `transaksis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
