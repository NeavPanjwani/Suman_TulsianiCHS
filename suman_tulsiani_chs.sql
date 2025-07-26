-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2025 at 10:55 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `suman_tulsiani_chs`
--

-- --------------------------------------------------------

--
-- Table structure for table `active_sessions`
--

CREATE TABLE `active_sessions` (
  `user_id` int(11) NOT NULL,
  `session_id` varchar(255) DEFAULT NULL,
  `last_active` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `last_seen` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login_logs`
--

CREATE TABLE `login_logs` (
  `id` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `login_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `logout_time` timestamp NULL DEFAULT NULL,
  `latitude` decimal(10,8) DEFAULT NULL,
  `longitude` decimal(11,8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_logs`
--

INSERT INTO `login_logs` (`id`, `user_id`, `ip_address`, `user_agent`, `login_time`, `logout_time`, `latitude`, `longitude`) VALUES
(19, 2, '::1', 'Chrome on Windows', '2025-07-26 16:13:50', '2025-07-26 16:45:17', 19.05198250, 72.88698150),
(20, 2, '::1', 'Chrome on Windows', '2025-07-26 16:45:38', NULL, 19.05198250, 72.88698150),
(21, 2, '::1', 'Chrome on Windows', '2025-07-26 18:10:16', NULL, 19.03493120, 72.87275520),
(22, 1, '::1', 'Chrome on Windows', '2025-07-26 18:19:35', NULL, 19.03493120, 72.87275520),
(23, 1, '::1', 'Chrome on Windows', '2025-07-26 18:34:34', '2025-07-26 18:42:52', 19.03493120, 72.87275520),
(24, 1, '::1', 'Chrome on Windows', '2025-07-26 18:48:53', '2025-07-26 18:54:25', 19.03493120, 72.87275520),
(25, 1, '::1', 'Chrome on Windows', '2025-07-26 18:56:49', NULL, 19.03493120, 72.87275520),
(26, 1, '::1', 'Chrome on Windows', '2025-07-26 19:14:12', '2025-07-26 19:19:40', 19.03493120, 72.87275520),
(27, 1, '::1', 'Chrome on Windows', '2025-07-26 19:23:21', '2025-07-26 19:29:01', 19.03493120, 72.87275520),
(28, 2, '::1', 'Chrome on Windows', '2025-07-26 19:28:22', '2025-07-26 19:29:22', 19.06495290, 72.89195770),
(29, 2, '::1', 'Chrome on Windows', '2025-07-26 19:42:14', NULL, 19.05198250, 72.88698150),
(30, 2, '::1', 'Chrome on Windows', '2025-07-26 19:45:41', NULL, 19.06495510, 72.89195550),
(31, 2, '::1', 'Chrome on Windows', '2025-07-26 19:53:43', NULL, 19.05198250, 72.88698150),
(32, 1, '::1', 'Chrome on Windows', '2025-07-26 20:01:13', NULL, 19.05198250, 72.88698150),
(33, 1, '::1', 'Chrome on Windows', '2025-07-26 20:02:14', '2025-07-26 20:08:40', 19.05198250, 72.88698150),
(34, 2, '::1', 'Chrome on Windows', '2025-07-26 20:08:56', '2025-07-26 20:08:59', 19.05198250, 72.88698150),
(35, 2, '::1', 'Chrome on Windows', '2025-07-26 20:11:00', '2025-07-26 20:12:37', 19.06495370, 72.89195720),
(36, 2, '::1', 'Chrome on Windows', '2025-07-26 20:13:13', '2025-07-26 20:13:45', 19.05198250, 72.88698150),
(37, 2, '::1', 'Chrome on Windows', '2025-07-26 20:16:43', NULL, 19.06495730, 72.89195540),
(38, 2, '::1', 'Chrome on Windows', '2025-07-26 20:20:45', '2025-07-26 20:21:08', 19.05198250, 72.88698150),
(39, 1, '127.0.0.1', 'TestDevice', '2025-07-26 20:27:30', NULL, 19.12345678, 72.98765432),
(40, 1, '::1', 'Chrome on Windows', '2025-07-26 20:28:50', '2025-07-26 20:30:11', 19.05198250, 72.88698150),
(41, 2, '::1', 'Chrome on Windows', '2025-07-26 20:31:41', NULL, 19.05198250, 72.88698150),
(42, 2, '::1', 'Chrome on Windows', '2025-07-26 20:32:37', '2025-07-26 20:32:45', 19.05198250, 72.88698150),
(43, 1, '::1', 'Chrome on Windows', '2025-07-26 20:33:38', NULL, 19.05198250, 72.88698150),
(44, 1, '::1', 'Chrome on Windows', '2025-07-26 20:34:27', NULL, 19.05198250, 72.88698150),
(45, 1, '::1', 'Chrome on Windows', '2025-07-26 20:35:17', NULL, 19.05198250, 72.88698150),
(46, 1, '::1', 'Chrome on Windows', '2025-07-26 20:35:55', '2025-07-26 20:36:05', 19.05198250, 72.88698150),
(47, 2, '::1', 'Chrome on Windows', '2025-07-26 20:36:43', NULL, 19.05198250, 72.88698150),
(48, 2, '::1', 'Chrome on Windows', '2025-07-26 20:37:20', '2025-07-26 20:37:33', 19.05198250, 72.88698150),
(49, 1, '::1', 'Chrome on Windows', '2025-07-26 20:38:29', NULL, 19.05198250, 72.88698150),
(50, 1, '::1', 'Chrome on Windows', '2025-07-26 20:39:42', '2025-07-26 20:39:57', 19.05198250, 72.88698150);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `flat_no` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `flat_no`, `password`) VALUES
(1, 'A101', 'mypass101'),
(2, 'A102', 'mypass102');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `active_sessions`
--
ALTER TABLE `active_sessions`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `login_logs`
--
ALTER TABLE `login_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login_logs`
--
ALTER TABLE `login_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `active_sessions`
--
ALTER TABLE `active_sessions`
  ADD CONSTRAINT `active_sessions_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
