-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2025 at 08:56 AM
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
(50, 1, '::1', 'Chrome on Windows', '2025-07-26 20:39:42', '2025-07-26 20:39:57', 19.05198250, 72.88698150),
(51, 2, '::1', 'Chrome on Windows', '2025-07-27 03:41:13', NULL, 19.05184770, 72.88698150),
(52, 2, '::1', 'Chrome on Windows', '2025-07-27 03:42:36', NULL, 19.05184770, 72.88698150),
(53, 2, '::1', 'Chrome on Windows', '2025-07-27 03:43:08', '2025-07-27 03:43:29', 19.05184770, 72.88698150),
(54, 2, '::1', 'Chrome on Windows', '2025-07-27 03:44:04', '2025-07-27 03:51:06', 19.05184770, 72.88698150),
(55, 2, '::1', 'Chrome on Windows', '2025-07-27 03:51:45', '2025-07-27 06:03:09', 19.05184770, 72.88698150),
(56, 2, '::1', 'Chrome on Windows', '2025-07-27 06:03:17', '2025-07-27 06:59:05', 19.06495440, 72.89195650),
(57, 2, '::1', 'Chrome on Windows', '2025-07-27 06:59:18', '2025-07-27 07:11:05', 19.05184770, 72.88698150),
(58, 2, '::1', 'Chrome on Windows', '2025-07-27 07:11:12', NULL, 19.05184770, 72.88698150),
(59, 2, '::1', 'Chrome on Windows', '2025-07-27 07:23:26', '2025-07-27 07:32:45', 19.05184770, 72.88698150),
(60, 2, '::1', 'Chrome on Windows', '2025-07-27 07:34:01', NULL, 19.06495550, 72.89195610),
(61, 2, '::1', 'Chrome on Windows', '2025-07-27 07:45:33', '2025-07-27 08:07:57', 19.06495550, 72.89195610),
(62, 2, '::1', 'Chrome on Windows', '2025-07-28 15:16:42', NULL, 19.06494960, 72.89198200);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

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
