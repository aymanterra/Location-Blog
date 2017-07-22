-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2017 at 08:04 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `location-blog`
--
CREATE DATABASE IF NOT EXISTS `location-blog` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `location-blog`;

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
(7, '2017_07_19_085705_create_posts_table', 2);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `lat` decimal(23,18) NOT NULL,
  `lng` decimal(23,18) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `subtitle`, `body`, `user_id`, `lat`, `lng`, `created_at`, `updated_at`) VALUES
(1, 'My first post here', '1st post', ' I created an isset function to check if a variable is defined and not null. ... You are trying to check property of an undefined object. It doesn\'t make', 2, '29.958586242980360000', '30.933219399999984000', '2017-07-20 01:19:04', '2017-07-20 01:19:04'),
(2, 'My second Post here', '2nd Post', 'I generally use the typeof operator: if (typeof obj.foo !== \'undefined\') { // your code ... What is the perfect equivalent of PHP\'s isset in JavaScript? In a broader sense, a general, complete guide on JavaScript\'s handling of', 1, '29.958798730425425000', '30.932950894442683000', '2017-07-20 19:55:32', '2017-07-20 19:55:32'),
(3, 'My third post here', '3rd post', 'You can use conditional statements in your code to do this. ... Use if to specify a block of code to be executed, if a specified condition is true. Use else to specify a block of code to be executed, if the same condition is false. Use else if to specify a new condition to test, if the first condition is false.', 1, '29.960574599999998000', '30.935987399999930000', '2017-07-21 12:49:13', '2017-07-21 12:49:13'),
(4, 'My fourth post here', '4th post', 'The if/else statement executes a block of code if a specified condition is true. ... In JavaScript we have the following conditional statements: Use if to specify a block of code to be executed, if a specified condition is true. Use else to specify a block of code to be executed, if the same condition is false.', 1, '29.963250298028374000', '30.926746711856140000', '2017-07-21 23:05:45', '2017-07-21 23:05:45'),
(5, 'Kazyon Supermarket', 'Market', 'Buy everything you need.', 2, '29.961167812982370000', '30.935605115097020000', '2017-07-21 23:41:46', '2017-07-21 23:41:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ayman Terra', 'aymanterra@yahoo.com', '$2y$10$Tc6ugcwh/uXRa7kLTAYdIOYvr6wrymC3182kHCvbeJi04Eh6ZIZRC', 'Ab75D0a2sV42HEdAHn1uuFcZbfYSHlhZJ1LwPtNn2mNkF1xRFD4h4YilfclE', '2017-07-19 07:01:42', '2017-07-19 07:01:42'),
(2, 'Ehab Terra', 'ehabterra@yahoo.com', '$2y$10$2BGDdXOKaK41RdVycRIr/ulrM/MEgE4kHHD0NkfqzyKqMWEKRov/G', 'RWf6J92cEh1El8fnTCWYqHdzMsWIWOmimEgh2b7AndtkIiaSy2OjYmvcKRQq', '2017-07-19 08:57:14', '2017-07-19 08:57:14');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
