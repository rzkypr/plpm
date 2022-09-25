-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2022 at 10:54 AM
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
-- Database: `plptd3`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `roles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USER'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nim`, `name`, `email`, `phone`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `roles`) VALUES
(1, '192101008', 'Rizky Purnama Ramadhan', 'rzky@mail.com', '08882158789', NULL, '$2y$10$ORe7XkUMFb6bv28dfu0XE.1Jy3YkEnp06f/Z6ED.tocES7c/sFK.6', '4IlWoFIulj9Qwzd84w5ZR1nkxSrSfodpJ2gzZGsqtay5fyQ3zYGGLNSqqfu2', '2022-09-04 19:13:11', '2022-09-04 19:13:11', 'ADMIN'),
(2, '192101009', 'Muhamad Hamdani', 'hmdn@mail.com', '08882158789', NULL, '$2y$10$d1FRyW9K/h8UB8L6zhv2bOPLp8GBf8ZBHBkx39LHzB8.UVtxo8gqK', 'kRKbgsPH4BbreU2EsoJbEpctBh4LnADSJJ9wZFeTagPK4tSrbo1tOC1VgK7S', '2022-09-04 19:13:11', '2022-09-04 19:13:11', 'PETUGAS'),
(3, '192101010', 'Gagan Kargana', 'ggn@mail.com', '08882158789', NULL, '$2y$10$6mAFeqSG0mSefUj2KpZPXu4P8T/XtT5qQKjQzaelwz6v28r8zUN/2', 'ATUsOop8NCCRZe5iiNLFx7NINv1sYGnblfj3krXqbqlE14noDKtmAmxbkv6i', '2022-09-04 19:13:11', '2022-09-04 19:13:11', 'USER'),
(6, '014', 'Rizky Purnama Ramadhan', 'rzkyprnmrmdhn@gmail.com', '08882158789', NULL, '$2y$10$tCgdGCInxeRhB/FIrBj.MuBrtMU/5ufomCqCqk0NQNFDCTikMRLfm', NULL, '2022-09-07 08:28:49', '2022-09-07 08:28:49', 'USER');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_nim_unique` (`nim`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
