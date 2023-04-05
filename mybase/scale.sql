-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2023 at 07:11 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scale`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `product_id`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 5, 5, 1, '2023-04-05 04:17:32', '2023-04-05 04:17:32'),
(2, 5, 5, 4, '2023-04-05 04:18:11', '2023-04-05 04:18:11'),
(3, 5, 2, 1, '2023-04-05 04:22:07', '2023-04-05 04:22:07'),
(4, 5, 2, 1, '2023-04-05 04:23:42', '2023-04-05 04:23:42'),
(5, 5, 2, 1, '2023-04-05 04:25:22', '2023-04-05 04:25:22'),
(6, 5, 2, 1, '2023-04-05 04:26:03', '2023-04-05 04:26:03'),
(7, 5, 2, 1, '2023-04-05 04:27:12', '2023-04-05 04:27:12'),
(8, 5, 2, 1, '2023-04-05 04:27:24', '2023-04-05 04:27:24'),
(9, 5, 2, 1, '2023-04-05 04:27:33', '2023-04-05 04:27:33'),
(10, 5, 2, 1, '2023-04-05 04:27:36', '2023-04-05 04:27:36'),
(11, 5, 2, 1, '2023-04-05 04:27:42', '2023-04-05 04:27:42'),
(12, 5, 2, 1, '2023-04-05 04:27:57', '2023-04-05 04:27:57'),
(13, 5, 2, 1, '2023-04-05 04:28:09', '2023-04-05 04:28:09'),
(14, 5, 2, 1, '2023-04-05 04:28:18', '2023-04-05 04:28:18'),
(15, 5, 2, 1, '2023-04-05 04:28:29', '2023-04-05 04:28:29');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_04_04_232136_create_products_table', 1),
(6, '2023_04_05_012330_create_carts_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mainImage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `price`, `quantity`, `brand`, `mainImage`, `image1`, `image2`, `image3`, `created_at`, `updated_at`) VALUES
(1, 'shoes', 'A product description is the marketing copy that explains what a product is and why it\'s worth purchasing. The purpose of a product description is to supply customers with important information about the features and key benefits of the product so they\'re compelled to buy.', 14.00, 14, 'pull&bear', 'images/WjO8TYLc4qAVhWkyvuPNwW6aMpfWNoHIvhcwrFgv.jpg', 'images/y21i9B4wTxwgqOmY2UqmYI82FtUgOmuVY2rpHKmN.jpg', 'images/fXP77JIdjjxuUUWDB7gsf05nkQhZGkwdgQMW6Jyw.jpg', 'images/lSLfKiHjahoDYvjNU8SwTVe5De77ZrWfQkTHYa5F.jpg', '2023-04-05 02:52:38', '2023-04-05 02:52:38'),
(2, 'slippers', 'A product description is the marketing copy that explains what a product is and why it\'s worth purchasing. The purpose of a product description is to supply customers with important information about the features and key benefits of the product so they\'re compelled to buy.', 92.00, 12, 'h&m', 'images/mVseHGCtEwOdP56vHfclVvmkirCQL8233lizvrv4.jpg', 'images/ZnDo9GWgz4I0AFf6uomovXiLGRClU1N7GOQIsTGs.jpg', 'images/H2PYXXaOIrczVn6477v3L8yORZbv9m1Y87QDpPzJ.jpg', 'images/bTioEof5v72yGhqgieDNOKxiNazd8gUjsS4XNNEM.jpg', '2023-04-05 02:53:57', '2023-04-05 02:53:57'),
(3, 'shoes', 'A product description is the marketing copy that explains what a product is and why it\'s worth purchasing. The purpose of a product description is to supply customers with important information about the features and key benefits of the product so they\'re compelled to buy.', 225.00, 3, 'h&m', 'images/UkGb905M7NxfiCzyTKpOmdb60RnBwMejJLSrwmJo.jpg', 'images/NpaJnpnBPf7INpMlWh5DFNkk5mwCjioKiyLN9Zss.jpg', 'images/cOIdLCHLViG2VmZLL2MznelilmA3Fvxy2y0LJfwe.jpg', 'images/M6eUmeLrd698EMQJxfhOR4GjBX4l9VRwOrAXkWoh.jpg', '2023-04-05 02:54:23', '2023-04-05 02:54:23'),
(4, 'sac', 'A product description is the marketing copy that explains what a product is and why it\'s worth purchasing. The purpose of a product description is to supply customers with important information about the features and key benefits of the product so they\'re compelled to buy.', 265.00, 177, 'zara', 'images/jAJ9xVOKLpEcN7IwsoiCgL9yXRumuCzLFW7Oql9b.jpg', 'images/SMI7jNxXlEn650nWp0SdTs5bOWvKcinto6tqdnmi.jpg', 'images/1lvCheWpo9bBOppbKqE2UYSc12fb4wUK6s2IzOZq.jpg', 'images/1MaoUhu0bHvZJYo1YAeApHXESS2st7SY9NkIQvgk.jpg', '2023-04-05 02:55:59', '2023-04-05 02:55:59'),
(5, 'sac vip', 'A product description is the marketing copy that explains what a product is and why it\'s worth purchasing. The purpose of a product description is to supply customers with important information about the features and key benefits of the product so they\'re compelled to buy.', 300.00, 4, 'jack&jones', 'images/J69yxIoHMAGl5QESV0as8N2XZ0PPLyEWTiRgL46I.jpg', 'images/DGNQCYkJuMcr7jYfSWFqxOxJlGISjRqxn6vK34CG.jpg', 'images/sZaulrcAHXBCxN5MozNz9U4fdjUkEWw8A8leJb62.jpg', 'images/TlkGRx3o3j7CvqecZ0Sr6cxu5eHug0LJUI7q2FgZ.jpg', '2023-04-05 02:56:54', '2023-04-05 02:56:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'othman', 'othman@gmail.com', '123456\r\n', NULL, NULL),
(3, 'aymen', 'aymen@gmail.com', '123456', NULL, NULL),
(5, 'Test User', 'test@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '2023-04-05 04:03:34', '2023-04-05 04:03:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
