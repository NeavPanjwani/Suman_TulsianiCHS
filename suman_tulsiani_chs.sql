-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2025 at 08:20 PM
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
  `logout_time` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_logs`
--

INSERT INTO `login_logs` (`id`, `user_id`, `ip_address`, `user_agent`, `login_time`, `logout_time`) VALUES
(63, 1, '::1', 'Chrome on Windows', '2025-08-26 18:18:54', '2025-08-26 18:19:13');

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
(1, 'A101', 'sardesai_A101'),
(2, 'A102', 'tilani_A102'),
(3, 'A103', 'tilani_A103'),
(4, 'A201', 'bajaj_A201'),
(5, 'A202', 'rajadhyaksha_A202'),
(6, 'A203', 'lakhani_A203'),
(7, 'A301', 'mulgaonkar_A301'),
(8, 'A302', 'patel_A302'),
(9, 'A303', 'patel_A303'),
(10, 'A401', 'william_A401'),
(11, 'A402', 'converters_A402'),
(12, 'A403', 'bhatia_A403'),
(13, 'A501', 'pathak_A501'),
(14, 'A502', 'kapur_A502'),
(15, 'A503', 'ahuja_A503'),
(16, 'A601', 'pendharkar_A601'),
(17, 'A602', 'prabhu_A602'),
(18, 'A603', 'prabhu_A603'),
(19, 'A701', 'shaikh_A701'),
(20, 'A702', 'mirchandani_A702'),
(21, 'A703', 'brijkishore_A703'),
(22, 'B101', 'chaudhari_B101'),
(23, 'B102', 'chaudhari_B102'),
(24, 'B103', 'chaudhari_103'),
(25, 'B104', 'samtani_B104'),
(26, 'B201', 'nankani_B201'),
(27, 'B202', 'nankani_B202'),
(28, 'B203', 'bhivagaje_B203'),
(29, 'B204', 'mirani_B204'),
(30, 'B301', 'jhaveri_B301'),
(31, 'B302', 'chaudhary_B302'),
(32, 'B303', 'adnani_B303'),
(33, 'B304', 'bhimani_B304'),
(34, 'B401', 'lokhandwala_B401'),
(35, 'B402', 'mehrotra_B402'),
(36, 'B403', 'asnani_B403'),
(37, 'B404', 'surana_B404'),
(38, 'B501', 'saxena_B501'),
(39, 'B502', 'saxena_B502'),
(40, 'B503', 'sukhwani_B503'),
(41, 'B504', 'opperman_B504'),
(42, 'B601', 'patel_B601'),
(43, 'B602', 'ravariya_B602'),
(44, 'B603', 'ravariya_B603'),
(45, 'B604', 'chaudhary_B604'),
(46, 'B701', 'munot_B701'),
(47, 'B702', 'dhir_B702'),
(48, 'B703', 'munot_B703'),
(49, 'B704', 'munot_B704'),
(50, 'C101', 'melwani_C101'),
(51, 'C102', 'jha_C102'),
(52, 'C103', 'patel_103'),
(53, 'C201', 'chakravorty_C201'),
(54, 'C202', 'kabra_C202'),
(55, 'C203', 'kabra_C203'),
(56, 'C301', 'chari_C301'),
(57, 'C302', 'shaikh_C302'),
(58, 'C303', 'udwadia_c303'),
(59, 'C401', 'sethi_C401'),
(60, 'C402', 'ratadiya_C402'),
(61, 'C403', 'ratadiya_C403'),
(62, 'C501', 'jain_C501'),
(63, 'C503', 'thakur_C503'),
(64, 'C601', 'nagpal_C601'),
(65, 'C602', 'giani_C602'),
(66, 'C603', 'singh_C603'),
(67, 'C701', 'shah_C701'),
(68, 'C702', 'shah_C702'),
(69, 'C703', 'shah_C703'),
(70, 'T101', 'mukaddam_T101'),
(71, 'T102', 'saria_T102'),
(72, 'T103', 'singh_T103'),
(73, 'T104', 'desai_T104'),
(74, 'T201', 'lakhani_T201'),
(75, 'T202', 'mahawla_T202'),
(76, 'T203', 'pendharkar_T203'),
(77, 'T204', 'pendharkar_T204'),
(78, 'T301', 'gujral_T301'),
(79, 'T302', 'gujral_T302'),
(80, 'T303', 'kuwelkar_T303'),
(81, 'T304', 'pawar_T304'),
(82, 'T401', 'laud_T401'),
(83, 'T402', 'aiyer_T402'),
(84, 'T403', 'gulwani_T403'),
(85, 'T404', 'karani_T404'),
(86, 'T501', 'melwani_T501'),
(87, 'T502', 'lahr_T502'),
(88, 'T503', 'advani_T503'),
(89, 'T504', 'advani_T504'),
(90, 'T601', 'mishra_T601'),
(91, 'T602', 'gehani_T602'),
(92, 'T603', 'mohapatra_T603'),
(93, 'T604', 'mohapatra_T604'),
(94, 'T701', 'grover_T701'),
(95, 'T702', 'hingorani_T702'),
(96, 'T703', 'punwani_T703'),
(97, 'T704', 'batliwala_T704'),
(98, 'T801', 'chavan_T801'),
(99, 'T802', 'gera_T802'),
(100, 'T803', 'mehta_T803'),
(101, 'T804', 'mehta_T804'),
(102, 'T901', 'shyamsukha_T901'),
(103, 'T902', 'sachandani_T902'),
(104, 'T903', 'sharma_T903'),
(105, 'T904', 'sharma_T904'),
(106, 'T1001', 'shah_T1001'),
(107, 'T1002', 'patel_T1002'),
(108, 'T1003', 'advani_T1003'),
(109, 'T1004', 'thakur_T1004'),
(110, 'T1101', 'irani_T1101'),
(111, 'T1102', 'hinduja_T1102'),
(112, 'T1103', 'punwani_T1103'),
(113, 'T1104', 'lalwani_T1104'),
(114, 'T1201', 'gehani_T1201'),
(115, 'T1202', 'gupta_T1202'),
(116, 'T1203', 'methil_T1203'),
(117, 'T1204', 'methil_T1204'),
(118, 'T1301', 'kalwani_T1301'),
(119, 'T1302', 'patel_T1302'),
(120, 'T1303', 'eranee_T1303'),
(121, 'T1304', 'eranee_T1304'),
(122, 'T1401', 'mirchandani_T1401'),
(123, 'T1402', 'patel_T1402'),
(124, 'T1403', 'kuwelkar_T1403'),
(125, 'T1404', 'kuwelkar_T1404'),
(126, 'T1501', 'laroya_T1501'),
(127, 'T1502', 'mirchandani_T1502'),
(128, 'T1503', 'bothra_T1503'),
(129, 'T1504', 'bothra_T1504'),
(130, 'T1601', 'hegde_T1601'),
(131, 'T1602', 'arora_T1602'),
(132, 'T1603', 'prajapati_T1603'),
(133, 'T1604', 'mishra_T1604');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

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
