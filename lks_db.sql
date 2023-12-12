-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2023 at 11:24 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lks_db`
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
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `place_id`, `created_at`, `updated_at`) VALUES
(2, 'Jadi Kawasan Percontohan \r\n', 'Kawasan wisata Desa Ketapang, kata Arief, telah dikunjungi dari berbagai negara seperti Nepal, Bangladesh, Vietnam dan \"Bulan depan datang lagi dari Belanda. Jumat pekan lalu, dikunjung 148 Kabupaten se-Indonesia, kawasan ini sudah menjadi percontohan,\" u', 1, NULL, NULL),
(3, 'Perekonomian Warga Bangkit ', 'Arief mengatakan, Desa Ketapang berbeda dengan desa wisata lainnya, terutama pola penataannya. Pengunjung dari berbagai negara yang datang ke Ketapang untuk belajar perubahan dan pola penataanya. \"Kalo soal wisata banyak yang lebih bagus dan indah. Tapi b', 1, NULL, NULL),
(4, 'Tebing Koja, Tambang Pasir Yang Menjadi Tempat  Destinasi\r\n', 'Saat ini, Tangerang mempunyai tempat destinasi wisata baru. Destinasi tersebut bernama Tebing Koja  atau yang dikenal oleh masyarakat sekitarnya sebagai Tebing Koja Kandang Godzilla\r\n\r\nTebing Koja Kandang Godzilla ini berada di pedesaan yang begitu asri. ', 2, NULL, NULL),
(5, 'Tempat yang Instamabble', 'Tebing Koja ini memberikan sensasi pemandangan layaknya suatu lembah yang dibawahnya terdapat hamparan sawah, danau kecil dan dikelilingi oleh tebing-tebing dan bukit-bukit pasir yang terbentuk secara alami dari sisa-sisa penambangan.\r\nObjek wisata alam T', 2, NULL, NULL),
(6, 'Kenapa Dinamakan Kandang Godzila', 'Menurut penduduk sekitar, sebutan kandang Godzilla sebenarnya hanya sebutan orang-orang yang datang ke tebing ini. Mungkin tempat ini mirip dengan habitat Godzilla yang ada di film film.\r\nDari cerita penduduk sekitar, Tebing Koja merupakan lahan bekas tam', 2, NULL, NULL),
(19, 'Berasal dari Kampung Nelayan Kumuh', 'Kawasan wisata Desa Ketapang dan Ketapang Urban Aqua culture merupakan perpaduan desa wisata dan kawasan wisata hutan bakau yang baru resmi beroperasi Januari lalu. Dulunya, kawasan ini merupakan pemukiman nelayan miskin dan kumuh. \r\n\r\nPada 2018, Pemerint', 1, NULL, NULL);

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
(5, '2023_12_08_021630_create_places_table', 1),
(6, '2023_12_08_021642_create_faqs_table', 1),
(7, '2023_12_08_021652_create_orders_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `date` date NOT NULL,
  `quantity` int(11) NOT NULL,
  `place_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `total`, `date`, `quantity`, `place_id`, `user_id`, `created_at`, `updated_at`, `status`) VALUES
(5, '15000.00', '2023-12-08', 1, 1, 2, NULL, NULL, 'Menungggu pembayaran'),
(6, '15000.00', '2023-12-08', 1, 1, 2, NULL, NULL, 'Menungggu pembayaran'),
(7, '45000.00', '2023-12-08', 3, 1, 2, NULL, NULL, 'Menungggu pembayaran'),
(8, '60000.00', '2023-12-08', 4, 1, 2, NULL, NULL, 'Sukses'),
(9, '75000.00', '2023-12-08', 5, 1, 2, NULL, NULL, 'Sukses'),
(10, '15000.00', '2023-12-08', 1, 1, 2, NULL, NULL, 'Sukses');

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

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(6, 'App\\Models\\User', 1, 'token_name', '9cdf220f63710f230ffa4e19be8867005416ee7db80a56e7ed038e000c8bfb12', '[\"*\"]', NULL, '2023-12-07 20:50:27', '2023-12-07 20:50:27'),
(11, 'App\\Models\\User', 1, 'token_name', '8e9867c48a66aa577c77cc5bce633542e8027ffd52b1ef368103d189852a5f2b', '[\"*\"]', NULL, '2023-12-07 23:06:33', '2023-12-07 23:06:33'),
(12, 'App\\Models\\User', 1, 'token_name', '348f4f656ee0d77606de09d77fbe2ee9d668b7fe9a58a077df1165d89919ae53', '[\"*\"]', NULL, '2023-12-07 23:06:48', '2023-12-07 23:06:48'),
(13, 'App\\Models\\User', 2, 'token_name', '794d7a203e303a789ebcfe9f85d143ec78cb45f917bd6db48abf3a4bdc3503bf', '[\"*\"]', NULL, '2023-12-08 00:21:36', '2023-12-08 00:21:36'),
(14, 'App\\Models\\User', 2, 'token_name', '30b230db3854d703c8e5ccb66651f53c2b55ce6c92ebbc778e6afdc3033e8a8c', '[\"*\"]', NULL, '2023-12-08 00:50:36', '2023-12-08 00:50:36'),
(15, 'App\\Models\\User', 2, 'token_name', '181996962d0fefea7c7c949f5fb3a63b84fd7388433d00d370253e16e271f9de', '[\"*\"]', NULL, '2023-12-08 00:51:39', '2023-12-08 00:51:39'),
(16, 'App\\Models\\User', 2, 'token_name', 'd541c42593cfb170d3dc752c4c422c681b08279a35d2f74511fefc6ada3affd4', '[\"*\"]', NULL, '2023-12-08 00:55:20', '2023-12-08 00:55:20'),
(17, 'App\\Models\\User', 2, 'token_name', '0b077c755b4bbc478a6772149a4760436f76a09c7409b80e42cf5f83815a2635', '[\"*\"]', NULL, '2023-12-08 00:58:11', '2023-12-08 00:58:11'),
(18, 'App\\Models\\User', 2, 'token_name', 'e72f711119efe1a1b68a7fd3e55e775cb88629e7575dc19c95b6d07cfa70af1d', '[\"*\"]', NULL, '2023-12-08 00:59:52', '2023-12-08 00:59:52'),
(19, 'App\\Models\\User', 2, 'token_name', '0e03b90de1d445d14bdd5ea681c3ac45d60f20d206fc0a19ebdc37c71ba758ae', '[\"*\"]', NULL, '2023-12-08 01:01:26', '2023-12-08 01:01:26'),
(20, 'App\\Models\\User', 2, 'token_name', 'd59a42cc36d41bd99f7931dd6cb8a8717e80d61d5f50ab8cfc809566e2c699ca', '[\"*\"]', NULL, '2023-12-08 01:01:47', '2023-12-08 01:01:47'),
(21, 'App\\Models\\User', 2, 'token_name', '89f26483aa141c28301fae10fae0cc0bc8bb4608ad1d3ddc3da25ad044b9e4e0', '[\"*\"]', NULL, '2023-12-08 02:00:45', '2023-12-08 02:00:45'),
(22, 'App\\Models\\User', 2, 'token_name', 'c151e4c7e6c69ff48231febb96da5d5c41649c42a95cea9626d8d7bd8acdf25b', '[\"*\"]', NULL, '2023-12-08 02:02:46', '2023-12-08 02:02:46'),
(23, 'App\\Models\\User', 2, 'token_name', '1683cc8fc641dbe2f01e7f188ac35c39e6f38eb9289b0dec3b021bf17757e93b', '[\"*\"]', NULL, '2023-12-08 02:07:20', '2023-12-08 02:07:20'),
(24, 'App\\Models\\User', 2, 'token_name', '4741bf0bbd858114040b21c60bbd46f2d7e1277724cbdfe05affb531aeb52302', '[\"*\"]', NULL, '2023-12-08 03:17:45', '2023-12-08 03:17:45');

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `open_hour` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `open_day` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`id`, `name`, `image`, `description`, `address`, `location`, `type`, `open_hour`, `open_day`, `price`, `stock`, `created_at`, `updated_at`) VALUES
(1, 'Taman Mangrove Ketapang', '/image/taman-mangrove.png', 'Taman Mangrove Ketapang memiliki aneka jenis tanaman mangrove yang tertanam. Total ada 16 spesies mangrove yang ditanam di sini, seperti Rhizopora mucronata, Bruguiera gymnoriza, dan lain-lain. Semuanya tertanam dengan rapi sehingga terlihat indah.\r\nBukan hanya hutan mangrove, tersedia pula fasilitas lain yang memanjakan pengunjung. Salah satunya fasilitas yang bisa dijadikan spot foto, seperti jembatan, bangunan kayu, dan lain-lain. Selain spot foto, fasilitas lain juga tersedia, seperti mushola, lahan parkir yang luas, toilet, dan kantin.\r\nTaman Mangrove Ketapang terletak di Desa Ketapang, Kecamatan Mauk, Kabupaten Tangerang. Harga tiket masuknya Rp 15.000 untuk dewasa, Rp 10.000 untuk anak-anak, serta parkir motor Rp 8.000.\r\n', 'Desa Ketapang, Kecamatan Mauk, Kabupaten Tangerang.', 'KABUPATEN TANGERANG', 'WISATA ALAM', '08:00 - 17:00', 'Senin - Minggu', '15000.00', 2000, NULL, NULL),
(2, 'Tebing Koja', '/image/tebing-koja.png', 'Tebing Kopo Maja atau disingkat Tebing Koja menawarkan wisata alam yang unik. Tebing-tebing yang berpadu dengan alam di sekitarnya bisa menciptakan foto yang memukau. Oleh sebab itu, tempat ini menjadi ramai diperbincangkan di media sosial sehingga menjadi populer.\r\nSaat ke Tebing Koja, carilah spot-spot yang dinilai cocok untuk menghiasi feed Instagrammmu. Kamu bisa berfoto di atas maupun di bawah tebing. Apabila ingin terlihat lebih natural, cobalah berfoto dengan latar danau serta pohon-pohon di sekitar tebing. \r\nUntuk menjajal semua spot foto di sini, kamu hanya perlu membayar Rp 5000 per orang. Jam operasionalnya mulai pukul 05.00 sampai 18.00. Tebing Koja terletak di Desa Cikuya, Kecamatan Solear, Kabupaten Tangerang.\r\n', 'Desa Cikuya, Kecamatan Solear, Kabupaten Tangerang.\r\n', 'KABUPATEN TANGERANG', 'WISATA ALAM', '05:00 - 18:00', 'Senin - Minggu', '5000.00', 1000, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `balance` decimal(8,2) NOT NULL,
  `is_admin` tinyint(1) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone_number`, `balance`, `is_admin`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'reihannudin', 'reedbulls91@gmail.com', '0897388568', '100000.00', 0, NULL, '$2y$10$t6KYbdnlURP180OKqisssOANdDz3TyxHXn6dFOMW9SzsKmte8A9GO', '24|55jf4KIrTip48oIn51eJBjbvM3zg4IP56tQNbsIx', NULL, '2023-12-08 03:17:45');

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
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
