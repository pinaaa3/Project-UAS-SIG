-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Jan 2025 pada 08.55
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sig_fina`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3', 'i:1;', 1737655493),
('livewire-rate-limiter:a17961fa74e9275d529f489537f179c05d50c2f3:timer', 'i:1737655493;', 1737655493);

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(7, '2025_01_23_123932_create_provinces_table', 2),
(8, '2025_01_23_124332_create_regencies_table', 2),
(9, '2025_01_23_124356_create_thematic_data_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinces`
--

CREATE TABLE `provinces` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `alt_name` varchar(255) NOT NULL DEFAULT '',
  `latitude` double NOT NULL DEFAULT 0,
  `longitude` double NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `provinces`
--

INSERT INTO `provinces` (`id`, `name`, `alt_name`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
(1, 'SULAWESI TENGAH', 'SULAWESI TENGAH', -1.69378, 120.80886, '2025-01-23 13:22:35', '2025-01-23 13:22:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `regencies`
--

CREATE TABLE `regencies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `province_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `alt_name` varchar(255) NOT NULL DEFAULT '',
  `latitude` double NOT NULL DEFAULT 0,
  `longitude` double NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `regencies`
--

INSERT INTO `regencies` (`id`, `province_id`, `name`, `alt_name`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
(14, 1, 'KABUPATEN BANGGAI KEPULAUAN', 'KABUPATEN BANGGAI KEPULAUAN', -1.6424, 123.54881, '2025-01-23 13:22:24', '2025-01-23 13:22:24'),
(15, 1, 'KABUPATEN BANGGAI', 'KABUPATEN BANGGAI', -1.2835, 122.8892, '2025-01-23 13:22:24', '2025-01-23 13:22:24'),
(16, 1, 'KABUPATEN MOROWALI', 'KABUPATEN MOROWALI', -1.89342, 121.25473, '2025-01-23 13:22:24', '2025-01-23 13:22:24'),
(17, 1, 'KABUPATEN POSO', 'KABUPATEN POSO', -1.65, 120.5, '2025-01-23 13:22:24', '2025-01-23 13:22:24'),
(18, 1, 'KABUPATEN DONGGALA', 'KABUPATEN DONGGALA', -0.58333, 119.85, '2025-01-23 13:22:24', '2025-01-23 13:22:24'),
(19, 1, 'KABUPATEN TOLI-TOLI', 'KABUPATEN TOLI-TOLI', 1.30862, 120.88643, '2025-01-23 13:22:24', '2025-01-23 13:22:24'),
(20, 1, 'KABUPATEN BUOL', 'KABUPATEN BUOL', 0.75, 120.75, '2025-01-23 13:22:24', '2025-01-23 13:22:24'),
(21, 1, 'KABUPATEN PARIGI MOUTONG', 'KABUPATEN PARIGI MOUTONG', 0.3368, 120.17841, '2025-01-23 13:22:24', '2025-01-23 13:22:24'),
(22, 1, 'KABUPATEN TOJO UNA-UNA', 'KABUPATEN TOJO UNA-UNA', -1.2036, 121.48201, '2025-01-23 13:22:24', '2025-01-23 13:22:24'),
(23, 1, 'KABUPATEN SIGI', 'KABUPATEN SIGI', -1.385, 119.96694, '2025-01-23 13:22:24', '2025-01-23 13:22:24'),
(24, 1, 'KABUPATEN BANGGAI LAUT', 'KABUPATEN BANGGAI LAUT', -1.61841, 123.49388, '2025-01-23 13:22:24', '2025-01-23 13:22:24'),
(25, 1, 'KABUPATEN MOROWALI UTARA', 'KABUPATEN MOROWALI UTARA', -1.7207, 121.24649, '2025-01-23 13:22:24', '2025-01-23 13:22:24'),
(26, 1, 'KOTA PALU', 'KOTA PALU', -0.86972, 119.9, '2025-01-23 13:22:24', '2025-01-23 13:22:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('bwe8pJgc3TT3sOl2bB6stXXp3sUqK37NaJdFZm2Z', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiMFB0YXQxTzByWWZQd2JYV3ZLdFFKRUk2ME5VS29YQzduM0tFWmk3ZyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjE6e3M6ODoiaW50ZW5kZWQiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbiI7fX0=', 1737702229),
('n0yXjebUUJpxMpXMR3C5NBgdmJUP2uYojATVV0Jo', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWjQ3ZnhzVUZRcVJRTHU1WXdIaUpqVXo5MFdlMGswMWs1V3FNb3BCbSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1737658186);

-- --------------------------------------------------------

--
-- Struktur dari tabel `thematic_data`
--

CREATE TABLE `thematic_data` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `regency_id` bigint(20) UNSIGNED NOT NULL,
  `population` int(11) NOT NULL DEFAULT 0,
  `poverty_rate` int(11) NOT NULL DEFAULT 0,
  `unemployment_rate` int(11) NOT NULL DEFAULT 0,
  `parks` int(11) NOT NULL DEFAULT 0,
  `schools` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `thematic_data`
--

INSERT INTO `thematic_data` (`id`, `regency_id`, `population`, `poverty_rate`, `unemployment_rate`, `parks`, `schools`, `created_at`, `updated_at`) VALUES
(14, 14, 69514, 12, 2, 13, 154, '2025-01-23 15:16:50', '2025-01-23 15:16:50'),
(15, 15, 354402, 7, 3, 26, 338, '2025-01-23 15:16:50', '2025-01-23 15:16:50'),
(16, 16, 113132, 12, 3, 9, 146, '2025-01-23 15:16:50', '2025-01-23 15:16:50'),
(17, 17, 235567, 14, 2, 24, 198, '2025-01-23 15:16:50', '2025-01-23 15:16:50'),
(18, 18, 293742, 15, 3, 17, 333, '2025-01-23 15:16:50', '2025-01-23 15:16:50'),
(19, 19, 225875, 12, 3, 14, 219, '2025-01-23 15:16:50', '2025-01-23 15:16:50'),
(20, 20, 149004, 13, 3, 11, 156, '2025-01-23 15:16:50', '2025-01-23 15:16:50'),
(21, 21, 457707, 14, 2, 23, 395, '2025-01-23 15:16:50', '2025-01-23 15:16:50'),
(22, 22, 149004, 16, 2, 13, 182, '2025-01-23 15:16:50', '2025-01-23 15:16:50'),
(23, 23, 229474, 12, 3, 19, 211, '2025-01-23 15:16:50', '2025-01-23 15:16:50'),
(24, 24, 11498, 14, 4, 8, 79, '2025-01-23 15:16:50', '2025-01-23 15:16:50'),
(25, 25, 11767, 12, 2, 12, 133, '2025-01-23 15:16:50', '2025-01-23 15:16:50'),
(26, 26, 368086, 6, 6, 13, 131, '2025-01-23 15:16:50', '2025-01-23 15:16:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin FIna SIG', 'admin@gmail.com', NULL, '$2y$12$NklMueuGhMud1Fe6Dvr28ePWcZY5Ool5HsXJbipxM2LjjqNTab70.', NULL, '2025-01-23 05:29:26', '2025-01-23 05:29:26');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `regencies`
--
ALTER TABLE `regencies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `regencies_province_id_foreign` (`province_id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `thematic_data`
--
ALTER TABLE `thematic_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `thematic_data_regency_id_foreign` (`regency_id`);

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
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `provinces`
--
ALTER TABLE `provinces`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `regencies`
--
ALTER TABLE `regencies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `thematic_data`
--
ALTER TABLE `thematic_data`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `regencies`
--
ALTER TABLE `regencies`
  ADD CONSTRAINT `regencies_province_id_foreign` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `thematic_data`
--
ALTER TABLE `thematic_data`
  ADD CONSTRAINT `thematic_data_regency_id_foreign` FOREIGN KEY (`regency_id`) REFERENCES `regencies` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
