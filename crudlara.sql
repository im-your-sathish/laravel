-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2021 at 06:44 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crudlara`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bauthor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bprice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userid` int(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `bname`, `bauthor`, `bprice`, `userid`, `created_at`, `updated_at`) VALUES
(4, 'Bruno Wright', 'Lorem officia blandi', '739', 1, '2021-09-10 18:53:59', '2021-09-10 18:53:59'),
(5, 'Imani Byers', 'Aperiam sit in susc', '127', 1, '2021-09-10 18:53:52', '2021-09-10 18:53:52'),
(6, 'Kylie Vaughn', 'Rerum rerum duis exp', '70', 1, '2021-09-10 18:53:41', '2021-09-10 18:53:41'),
(7, 'Stacy Nelson', 'Tempora ut sequi non', '591', 1, '2021-09-10 18:53:49', '2021-09-10 18:53:49'),
(13, 'Felix Robles', 'Incididunt Lab', '294', 1, '2021-09-10 18:53:46', '2021-09-10 18:53:46'),
(15, 'Charles Newman', 'Voluptate vel et non', '311', 0, '2021-09-10 18:47:19', '2021-09-10 18:45:39'),
(16, 'Gregory Lane', 'Officiis voluptatem', '994', 0, '2021-09-10 18:47:19', '2021-09-10 18:45:39'),
(20, 'Darrel Mercado', 'Optio velit amet e', '892', 0, '2021-09-10 18:47:19', '2021-09-10 18:45:39'),
(21, 'Xena Steele', 'Asperiores ut quos e', '194', 0, '2021-09-10 18:47:19', '2021-09-10 18:45:39'),
(22, 'Delilah Holland', 'Ut tempore v', '902', 0, '2021-09-10 18:47:19', '2021-09-10 18:45:39'),
(25, 'Mannix Manning', 'Culpa vesssniam moles', '546', 0, '2021-09-10 18:47:19', '2021-09-10 18:45:39'),
(26, 'Rafael Sexton', 'Omnis id optio aper', '339', 0, '2021-09-10 18:47:19', '2021-09-10 18:45:39'),
(27, 'Xaviera Craft', 'Doloribus vero earum', '204', 2, '2021-09-10 18:53:31', '2021-09-10 18:53:31'),
(28, 'Kameko Kirk', 'Nisi et blanditiis a', '429', 2, '2021-09-10 18:53:28', '2021-09-10 18:53:28'),
(29, 'Sydnee Crane', 'Aut fuga Sunt cons', '952', 2, '2021-09-10 18:53:26', '2021-09-10 18:53:26'),
(30, 'Cade Beasley', 'Quis deserunt asperi', '66', 2, '2021-09-10 18:53:23', '2021-09-10 18:53:23'),
(31, 'Quyn Wheeler', 'Natus accusantium vo', '72', 2, '2021-09-10 13:18:34', '2021-09-10 13:18:34'),
(32, 'Talon Forbes', 'Facilis quibusdam qu', '33', 1, '2021-09-10 13:25:22', '2021-09-10 13:25:22'),
(33, 'Nell Brooks', 'Sed porro nesciunt', '236', 1, '2021-09-10 13:35:48', '2021-09-10 13:35:48'),
(34, 'Suki Dunn', 'Quae delectus autem', '833', 2, '2021-09-10 13:36:43', '2021-09-10 13:36:43'),
(35, 'Liberty Howard', 'Distinctio Excepteu', '211', 3, '2021-09-10 13:39:22', '2021-09-10 13:39:22'),
(37, 'Amaya Rollins', 'Ipsam et quaerat non', '233', 2, '2021-09-13 01:44:00', '2021-09-13 01:44:00'),
(38, 'Leigh Lynch', 'Veniam assumenda ab', '648', 12, '2021-09-13 01:45:23', '2021-09-13 01:45:23'),
(39, 'bahubali', 'rajamouli', '980', 16, '2021-09-14 01:00:01', '2021-09-14 01:00:01'),
(40, 'Wyoming Kemp', 'Sequi sequi facere q', '287', 16, '2021-09-14 01:00:10', '2021-09-14 01:00:10'),
(41, 'Eleanor Gordon', 'Facilis dolor duis c', '264', 17, '2021-09-14 01:00:58', '2021-09-14 01:00:58'),
(42, 'bahubali 2', 'rajamoulihhhhh', '5000', 17, '2021-09-14 06:31:25', '2021-09-14 01:01:25'),
(44, 'Zelenia Fleming', 'Exercitation incidun', '704', 18, '2021-09-14 01:02:30', '2021-09-14 01:02:30'),
(45, 'Edan Holcomb', 'Enim optio a dolore', '335', 18, '2021-09-14 01:02:34', '2021-09-14 01:02:34'),
(46, 'Justine Maddox', 'Eum molestiae commod', '664', 1, '2021-09-14 01:03:26', '2021-09-14 01:03:26');

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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2021_09_08_174439_create_books_table', 1),
(3, '2021_09_09_113641_create_user_table', 2);

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
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `mobile`, `role`, `created_at`, `updated_at`) VALUES
(1, 'sathish', 'sathish@gmail.com', '1234', '9876543210', 1, NULL, NULL),
(2, 'Ginger sandeep', 'sandeep@gmail.com', '1234', 'Karly Pearson', 0, '2021-09-10 00:35:03', '2021-09-10 00:35:03'),
(3, 'sai', 'sai@gmail.com', '1234', 'Sebastian Johnson', 0, '2021-09-10 00:35:54', '2021-09-10 00:35:54'),
(4, 'Lacy Giles', 'raqity@mailinator.com', 'Pa$$w0rd!', 'Tara Acevedo', 0, '2021-09-10 00:37:11', '2021-09-10 00:37:11'),
(5, 'Holly Meyers', 'tejuje@mailinator.com', 'Pa$$w0rd!', 'Keane Bray', 0, '2021-09-10 00:40:39', '2021-09-10 00:40:39'),
(6, 'Edan Davenport', 'hyheci@mailinator.com', 'Pa$$w0rd!', 'Briar Decker', 0, '2021-09-10 00:41:48', '2021-09-10 00:41:48'),
(7, 'Shay Curry', 'wadifiriv@mailinator.com', 'Pa$$w0rd!', 'Kiayada Hicks', 0, '2021-09-10 00:42:08', '2021-09-10 00:42:08'),
(8, 'Whitney Gross', 'suhifiqu@mailinator.com', 'Pa$$w0rd!', 'Barrett Jacobs', 0, '2021-09-10 01:31:51', '2021-09-10 01:31:51'),
(9, 'Derek Murray', 'vegupur@mailinator.com', 'Pa$$w0rd!', 'Megan Rice', 0, '2021-09-10 11:00:40', '2021-09-10 11:00:40'),
(10, 'Lenore Wolfe', 'dohugit@mailinator.com', 'Pa$$w0rd!', 'Aidan Brooks', 0, '2021-09-10 12:25:47', '2021-09-10 12:25:47'),
(11, 'Andrew Burns', 'zyno@mailinator.com', 'Pa$$w0rd!', 'Nina Foreman', 0, '2021-09-13 01:42:51', '2021-09-13 01:42:51'),
(12, 'iliyas', 'iliyas@gmail.com', '1234', '9876543210', 0, '2021-09-13 01:45:06', '2021-09-13 01:45:06'),
(13, 'Palmer Miles', 'bona@mailinator.com', 'Pa$$w0rd!', 'Fallon Meadows', 0, '2021-09-13 05:30:43', '2021-09-13 05:30:43'),
(14, 'Alec Suarez', 'movy@mailinator.com', 'Pa$$w0rd!', 'Jonas Mathis', 0, '2021-09-13 05:43:57', '2021-09-13 05:43:57'),
(15, 'Zachary Raymond', 'qipezu@mailinator.com', 'Pa$$w0rd!', 'Maris Wall', 0, '2021-09-14 00:58:24', '2021-09-14 00:58:24'),
(16, 'ganesh', 'ganesh@gmail.com', '1234', '98765431002', 0, '2021-09-14 00:59:22', '2021-09-14 00:59:22'),
(17, 'manikanta', 'mani@gmail.com', '1234', '987654230', 0, '2021-09-14 01:00:37', '2021-09-14 01:00:37'),
(18, 'kishore', 'kishore@gmail.com', '1234', 'lskfjksalfe', 0, '2021-09-14 01:02:05', '2021-09-14 01:02:05'),
(19, 'kishore', 'kishore@gmail.com', '1234', 'lskfjksalfe', 0, '2021-09-14 01:02:05', '2021-09-14 01:02:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
