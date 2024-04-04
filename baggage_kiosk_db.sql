-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2024 at 12:42 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baggage_kiosk_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bag_tag_number`
--

CREATE TABLE `bag_tag_number` (
  `id_number` int(200) NOT NULL,
  `bag_tag_id` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bag_tag_number`
--

INSERT INTO `bag_tag_number` (`id_number`, `bag_tag_id`, `status`) VALUES
(1, '01230407462E5E1234\r\n', 'ACTIVE'),
(2, '0123040746225E1234\r\n', 'ACTIVE'),
(3, '0123040746165E1234\r\n', 'ACTIVE'),
(4, '0123000D770BC61234\r\n', 'ACTIVE'),
(5, '0123040746325E1234\r\n', 'ACTIVE'),
(6, '01230407463A5E1234\r\n', 'ACTIVE'),
(7, '01230407461A5E1234\r\n', 'ACTIVE'),
(8, '0123000D7721B41234\r\n', 'ACTIVE'),
(9, '0123040742C65E1234\r\n', 'ACTIVE'),
(10, '0123040742E25E1234\r\n', 'ACTIVE'),
(11, '0123040742765E1234\r\n', 'ACTIVE'),
(12, '01230407427E5E1234\r\n', 'ACTIVE'),
(13, '0123040742B65E1234\r\n', 'ACTIVE'),
(14, '0123040742B25E1234\r\n', 'ACTIVE'),
(15, '01230407427A5E1234\r\n', 'ACTIVE'),
(16, '0123040742925E1234\r\n', 'ACTIVE'),
(17, '0123040742A25E1234\r\n', 'ACTIVE'),
(18, '0123040742F25E1234\r\n', 'ACTIVE'),
(19, '01230407428E5E1234\r\n', 'ACTIVE'),
(20, '0123040742AE5E1234\r\n', 'ACTIVE'),
(21, '0123040742ee5e1234\r\n', 'ACTIVE'),
(22, '0123040742be5e1234\r\n', 'ACTIVE'),
(23, '0123040742ce5e1234\r\n', 'ACTIVE'),
(24, '0123040742da5e1234\r\n', 'ACTIVE'),
(25, '0123040742ea5e1234\r\n', 'ACTIVE'),
(26, '01230407429a5e1234\r\n', 'ACTIVE'),
(27, '0123040742e65e1234\r\n', 'ACTIVE'),
(28, '0123040746265e1234\r\n', 'ACTIVE'),
(29, '0123040742aa5e1234\r\n', 'ACTIVE'),
(30, '0123040742725e1234\r\n', 'ACTIVE'),
(31, '0123000d7729891234\r\n', 'ACTIVE'),
(32, '01230407462a5e1234\r\n', 'ACTIVE'),
(33, '0123040746365e1234\r\n', 'ACTIVE'),
(34, '0123000d77359d1234\r\n', 'ACTIVE'),
(35, '0123000d771b701234\r\n', 'ACTIVE'),
(36, '0123000d773efe1234\r\n', 'ACTIVE'),
(37, '0123040742a65e1234\r\n', 'ACTIVE'),
(38, '01230407422a5e1234\r\n', 'ACTIVE'),
(39, '01230407426e5e1234\r\n', 'ACTIVE'),
(40, '01230407429e5e1234\r\n', 'ACTIVE'),
(41, '0123040742c25e1234\r\n', 'ACTIVE'),
(42, '0123040742965e1234\r\n', 'ACTIVE'),
(43, '0123040742de5e1234\r\n', 'ACTIVE'),
(44, '0123040742ca5e1234\r\n', 'ACTIVE'),
(45, '0123040742865e1234\r\n', 'ACTIVE'),
(46, '0123040741e25e1234\r\n', 'ACTIVE'),
(47, '0123040741de5e1234\r\n', 'ACTIVE'),
(48, '0123040742065e1234\r\n', 'ACTIVE'),
(49, '0123040741d25e1234\r\n', 'ACTIVE'),
(50, '0123040741f65e1234\r\n', 'ACTIVE'),
(51, '0123040741f25e1234\r\n', 'ACTIVE'),
(52, '0123040741e65e1234\r\n', 'ACTIVE'),
(53, '0123040741fa5e1234\r\n', 'ACTIVE'),
(54, '01230407420a5e1234\r\n', 'ACTIVE'),
(55, '0123040742265e1234\r\n', 'ACTIVE'),
(56, '0123040742125e1234\r\n', 'ACTIVE'),
(57, '01230407421e5e1234\r\n', 'ACTIVE'),
(58, '01230407421a5e1234\r\n', 'ACTIVE'),
(59, '01230407423e5e1234\r\n', 'ACTIVE'),
(60, '01230407422e5e1234\r\n', 'ACTIVE'),
(61, '0123040741da5e1234\r\n', 'ACTIVE'),
(62, '0123040742625e1234\r\n', 'ACTIVE'),
(63, '0123040742465e1234\r\n', 'ACTIVE'),
(64, '0123040742425e1234\r\n', 'ACTIVE'),
(65, '0123040741ea5e1234\r\n', 'ACTIVE'),
(66, '0123040742025e1234\r\n', 'ACTIVE'),
(67, '01230407420e5e1234\r\n', 'ACTIVE'),
(68, '0123040741d65e1234\r\n', 'ACTIVE'),
(69, '0123040741ee5e1234\r\n', 'ACTIVE'),
(70, '0123040741ca5e1234\r\n', 'ACTIVE'),
(71, '0123040741be5e1234\r\n', 'ACTIVE'),
(72, '0123040741c25e1234\r\n', 'ACTIVE'),
(73, '0123040742365e1234\r\n', 'ACTIVE'),
(74, '0123040742325e1234\r\n', 'ACTIVE'),
(75, '0123040742525e1234\r\n', 'ACTIVE'),
(76, '0123040742665e1234\r\n', 'ACTIVE'),
(77, '01230407423a5e1234\r\n', 'ACTIVE'),
(78, '01230407426a5e1234\r\n', 'ACTIVE'),
(79, '0123040742565e1234\r\n', 'ACTIVE'),
(80, '01230407425e5e1234\r\n', 'ACTIVE'),
(81, '01230407424a5e1234\r\n', 'ACTIVE'),
(82, '0123040742165e1234\r\n', 'ACTIVE'),
(83, '0123040741fe5e1234\r\n', 'ACTIVE'),
(84, '01230407425a5e1234\r\n', 'ACTIVE'),
(85, '01230407424e5e1234\r\n', 'ACTIVE'),
(86, '0123040742225e1234\r\n', 'ACTIVE'),
(87, '0123040741ba5e1234\r\n', 'ACTIVE'),
(88, '0123040741c65e1234\r\n', 'ACTIVE'),
(89, '0123040742f65e1234\r\n', 'ACTIVE'),
(90, '0123040741ce5e1234\r\n', 'ACTIVE'),
(91, '01230407461e5e1234\r\n', 'ACTIVE'),
(92, '0123000d7705821234\r\n', 'ACTIVE'),
(93, '0123000d77139b1234\r\n', 'ACTIVE'),
(94, '0123040742825e1234\r\n', 'ACTIVE'),
(95, '01230407428a5e1234\r\n', 'ACTIVE'),
(96, '0123040742d25e1234\r\n', 'ACTIVE'),
(97, '0123040742ba5e1234\r\n', 'ACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `face_recognition`
--

CREATE TABLE `face_recognition` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `face_recognition`
--

INSERT INTO `face_recognition` (`id`, `name`) VALUES
(1, 'Arlyn Seno'),
(2, 'Arlyn Seno'),
(3, 'Arlyn Seno'),
(4, 'Arlyn Seno'),
(5, 'Arlyn Seno'),
(6, 'Arlyn Seno'),
(7, 'Arlyn Seno'),
(8, 'Arlyn Seno'),
(9, 'Arlyn Seno'),
(10, 'Arlyn Seno'),
(11, 'Arlyn Seno'),
(12, 'Arlyn Seno'),
(13, 'Arlyn Seno'),
(14, 'Arlyn Seno'),
(15, 'Arlyn Seno'),
(16, 'Arlyn Seno'),
(17, 'Arlyn Seno'),
(18, 'Arlyn Seno'),
(19, 'Arlyn Seno'),
(20, 'Arlyn Seno'),
(21, 'Arlyn Seno'),
(22, 'Arlyn Seno'),
(23, 'Arlyn Seno'),
(24, 'Arlyn Seno'),
(25, 'Arlyn Seno'),
(26, 'Arlyn Seno'),
(27, 'Arlyn Seno'),
(28, 'Arlyn Seno'),
(29, 'Arlyn Seno'),
(30, 'Arlyn Seno'),
(31, 'Arlyn Seno'),
(32, 'Arlyn Seno'),
(33, 'Arlyn Seno'),
(34, 'Arlyn Seno'),
(35, 'Arlyn Seno'),
(36, 'Arlyn Seno'),
(37, 'Arlyn Seno'),
(38, 'Arlyn Seno'),
(39, 'Jenny Abellera'),
(40, 'Arlyn Seno'),
(41, 'Arlyn Seno'),
(42, 'Arlyn Seno'),
(43, 'Arlyn Seno'),
(44, 'unknown'),
(45, ''),
(46, '');

-- --------------------------------------------------------

--
-- Table structure for table `registered_admin`
--

CREATE TABLE `registered_admin` (
  `id` int(255) NOT NULL,
  `card_id` int(255) NOT NULL,
  `tup_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` text NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registered_admin`
--

INSERT INTO `registered_admin` (`id`, `card_id`, `tup_id`, `name`, `gender`, `username`, `password`) VALUES
(1, 413392035, 'TUPM-20-8457', 'Arlyn', 'Male', 'Arlyn Seno', 'arlyn'),
(2, 413392035, 'TUPM-20-8457', 'Apple', 'Male', 'Admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `registered_tags`
--

CREATE TABLE `registered_tags` (
  `id` int(20) NOT NULL,
  `bag_tag_id` varchar(255) NOT NULL,
  `id_number` int(50) NOT NULL,
  `status` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registered_tags`
--

INSERT INTO `registered_tags` (`id`, `bag_tag_id`, `id_number`, `status`, `timestamp`) VALUES
(1, '123040742', 3, 'in', '2024-04-01 08:08:36'),
(2, '2147483647', 4, 'in', '2024-04-01 08:09:17'),
(3, '1230407428', 2, 'in', '2024-04-01 08:09:25'),
(4, '01230407428A5E1234', 2, 'in', '2024-04-01 08:11:11'),
(5, '0123040742BA5E1234', 3, 'in', '2024-04-01 08:11:30'),
(6, '0123040742825E1234', 4, 'in', '2024-04-01 08:14:03'),
(7, '0123040742BA5E1234', 3, 'out', '2024-04-01 08:17:18'),
(8, '0123040742825E1234', 4, 'out', '2024-04-01 08:17:59'),
(9, '0123040742825E1234', 4, 'in', '2024-04-01 08:18:06'),
(10, '0123040742825E1234', 4, 'out', '2024-04-01 08:19:12'),
(11, '0123040742BA5E1234', 3, 'in', '2024-04-01 08:19:19'),
(12, '0123040742BA5E1234', 3, 'out', '2024-04-01 08:23:01'),
(13, '0123040742825E1234', 4, 'in', '2024-04-01 08:27:31'),
(14, '0123040742BA5E1234', 3, 'in', '2024-04-01 08:30:01'),
(15, '0123040742BA5E1234', 3, 'out', '2024-04-01 08:33:24'),
(16, '0123040742825E1234', 4, 'out', '2024-04-01 08:33:28'),
(17, '0123040742BA5E1234', 3, 'in', '2024-04-01 08:42:55'),
(18, '01230407428A5E1234', 2, 'out', '2024-04-01 08:43:00'),
(19, '0123040742825E1234', 4, 'in', '2024-04-01 08:43:26'),
(20, '01230407428A5E1234', 2, 'in', '2024-04-01 08:45:00');

-- --------------------------------------------------------

--
-- Table structure for table `registered_users`
--

CREATE TABLE `registered_users` (
  `id` int(11) NOT NULL,
  `rfid` varchar(255) DEFAULT NULL,
  `tupid` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `course` varchar(255) DEFAULT NULL,
  `college` varchar(255) DEFAULT NULL,
  `number` varchar(13) NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registered_users`
--

INSERT INTO `registered_users` (`id`, `rfid`, `tupid`, `name`, `gender`, `course`, `college`, `number`, `registration_date`) VALUES
(1, '0413461507', 'TUPM-20-0130', 'Arlyn Seno', 'Female', 'Bachelor of Engineering Technology major in Computer Engineering Technology', 'College of Industrial Technology', '+639394188314', '2024-03-22 12:48:08'),
(2, '0413087539', 'TUPM-20-0122', 'Arlyn Seno', 'Female', 'Bachelor of Engineering Technology major in Computer Engineering Technology', 'College of Industrial Technology', '+639394188314', '2024-03-22 14:04:33'),
(3, '0576274321', 'TUPM-20-0131', 'Arlyn Seno', 'Female', 'Bachelor of Engineering Technology major in Computer Engineering Technology', 'College of Industrial Technology', '+639394188314', '2024-03-22 14:13:13'),
(4, '1234567891', 'TUPM-20-0011', 'Arlyn Seno', 'Male', 'Doctor of Education major in Career Guidance', 'College of Industrial Education', '+639394188314', '2024-03-25 00:56:51');

-- --------------------------------------------------------

--
-- Table structure for table `students_logs`
--

CREATE TABLE `students_logs` (
  `id` int(11) NOT NULL,
  `rfid` varchar(255) DEFAULT NULL,
  `status` enum('in','out') DEFAULT NULL,
  `tupid` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `course` varchar(255) DEFAULT NULL,
  `college` varchar(255) DEFAULT NULL,
  `number` varchar(13) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students_logs`
--

INSERT INTO `students_logs` (`id`, `rfid`, `status`, `tupid`, `name`, `gender`, `course`, `college`, `number`, `timestamp`) VALUES
(1, '0413461507', 'in', 'TUPM-20-0130', 'Arlyn Seno', 'Female', 'Bachelor of Engineering Technology major in Computer Engineering Technology', 'College of Industrial Technology', '+639394188314', '2024-03-22 12:48:16'),
(2, '0413461507', 'out', 'TUPM-20-0130', 'Arlyn Seno', 'Female', 'Bachelor of Engineering Technology major in Computer Engineering Technology', 'College of Industrial Technology', '+639394188314', '2024-03-22 12:50:51'),
(3, '0413461507', 'in', 'TUPM-20-0130', 'Arlyn Seno', 'Female', 'Bachelor of Engineering Technology major in Computer Engineering Technology', 'College of Industrial Technology', '+639394188314', '2024-03-22 13:26:48'),
(4, '0413461507', 'out', 'TUPM-20-0130', 'Arlyn Seno', 'Female', 'Bachelor of Engineering Technology major in Computer Engineering Technology', 'College of Industrial Technology', '+639394188314', '2024-03-22 13:27:17'),
(5, '0413461507', 'in', 'TUPM-20-0130', 'Arlyn Seno', 'Female', 'Bachelor of Engineering Technology major in Computer Engineering Technology', 'College of Industrial Technology', '+639394188314', '2024-03-22 13:27:57'),
(6, '0413461507', 'out', 'TUPM-20-0130', 'Arlyn Seno', 'Female', 'Bachelor of Engineering Technology major in Computer Engineering Technology', 'College of Industrial Technology', '+639394188314', '2024-03-22 13:31:27'),
(7, '0413461507', 'in', 'TUPM-20-0130', 'Arlyn Seno', 'Female', 'Bachelor of Engineering Technology major in Computer Engineering Technology', 'College of Industrial Technology', '+639394188314', '2024-03-22 13:35:49'),
(8, '0413461507', 'out', 'TUPM-20-0130', 'Arlyn Seno', 'Female', 'Bachelor of Engineering Technology major in Computer Engineering Technology', 'College of Industrial Technology', '+639394188314', '2024-03-22 13:37:28'),
(9, '0413461507', 'in', 'TUPM-20-0130', 'Arlyn Seno', 'Female', 'Bachelor of Engineering Technology major in Computer Engineering Technology', 'College of Industrial Technology', '+639394188314', '2024-03-22 13:37:49'),
(10, '0413461507', 'out', 'TUPM-20-0130', 'Arlyn Seno', 'Female', 'Bachelor of Engineering Technology major in Computer Engineering Technology', 'College of Industrial Technology', '+639394188314', '2024-03-22 13:38:44'),
(11, '0413461507', 'in', 'TUPM-20-0130', 'Arlyn Seno', 'Female', 'Bachelor of Engineering Technology major in Computer Engineering Technology', 'College of Industrial Technology', '+639394188314', '2024-03-22 13:39:26'),
(12, '0413461507', 'out', 'TUPM-20-0130', 'Arlyn Seno', 'Female', 'Bachelor of Engineering Technology major in Computer Engineering Technology', 'College of Industrial Technology', '+639394188314', '2024-03-22 13:42:10'),
(13, '0413461507', 'in', 'TUPM-20-0130', 'Arlyn Seno', 'Female', 'Bachelor of Engineering Technology major in Computer Engineering Technology', 'College of Industrial Technology', '+639394188314', '2024-03-22 13:48:54'),
(14, '0413461507', 'out', 'TUPM-20-0130', 'Arlyn Seno', 'Female', 'Bachelor of Engineering Technology major in Computer Engineering Technology', 'College of Industrial Technology', '+639394188314', '2024-03-22 13:54:37'),
(15, '0413461507', 'in', 'TUPM-20-0130', 'Arlyn Seno', 'Female', 'Bachelor of Engineering Technology major in Computer Engineering Technology', 'College of Industrial Technology', '+639394188314', '2024-03-22 13:54:55'),
(16, '0413461507', 'out', 'TUPM-20-0130', 'Arlyn Seno', 'Female', 'Bachelor of Engineering Technology major in Computer Engineering Technology', 'College of Industrial Technology', '+639394188314', '2024-03-22 13:55:32'),
(17, '0413461507', 'in', 'TUPM-20-0130', 'Arlyn Seno', 'Female', 'Bachelor of Engineering Technology major in Computer Engineering Technology', 'College of Industrial Technology', '+639394188314', '2024-03-22 14:03:42'),
(18, '0413087539', 'in', 'TUPM-20-0122', 'Arlyn Seno', 'Female', 'Bachelor of Engineering Technology major in Computer Engineering Technology', 'College of Industrial Technology', '+639394188314', '2024-03-22 14:06:25'),
(19, '0413461507', 'out', 'TUPM-20-0130', 'Arlyn Seno', 'Female', 'Bachelor of Engineering Technology major in Computer Engineering Technology', 'College of Industrial Technology', '+639394188314', '2024-03-22 14:06:28'),
(20, '0413461507', 'in', 'TUPM-20-0130', 'Arlyn Seno', 'Female', 'Bachelor of Engineering Technology major in Computer Engineering Technology', 'College of Industrial Technology', '+639394188314', '2024-03-22 14:07:43'),
(21, '0413087539', 'out', 'TUPM-20-0122', 'Arlyn Seno', 'Female', 'Bachelor of Engineering Technology major in Computer Engineering Technology', 'College of Industrial Technology', '+639394188314', '2024-03-22 14:07:49'),
(22, '0576274321', 'in', 'TUPM-20-0131', 'Arlyn Seno', 'Female', 'Bachelor of Engineering Technology major in Computer Engineering Technology', 'College of Industrial Technology', '+639394188314', '2024-03-22 14:13:18'),
(23, '0413087539', 'in', 'TUPM-20-0122', 'Arlyn Seno', 'Female', 'Bachelor of Engineering Technology major in Computer Engineering Technology', 'College of Industrial Technology', '+639394188314', '2024-03-24 07:11:51'),
(24, '0413087539', 'out', 'TUPM-20-0122', 'Arlyn Seno', 'Female', 'Bachelor of Engineering Technology major in Computer Engineering Technology', 'College of Industrial Technology', '+639394188314', '2024-03-24 08:50:45'),
(25, '0413461507', 'out', 'TUPM-20-0130', 'Arlyn Seno', 'Female', 'Bachelor of Engineering Technology major in Computer Engineering Technology', 'College of Industrial Technology', '+639394188314', '2024-03-24 08:56:17'),
(26, '0413087539', 'in', 'TUPM-20-0122', 'Arlyn Seno', 'Female', 'Bachelor of Engineering Technology major in Computer Engineering Technology', 'College of Industrial Technology', '+639394188314', '2024-03-24 08:57:21'),
(27, '0413087539', 'out', 'TUPM-20-0122', 'Arlyn Seno', 'Female', 'Bachelor of Engineering Technology major in Computer Engineering Technology', 'College of Industrial Technology', '+639394188314', '2024-03-24 08:58:15'),
(28, '0413087539', 'in', 'TUPM-20-0122', 'Arlyn Seno', 'Female', 'Bachelor of Engineering Technology major in Computer Engineering Technology', 'College of Industrial Technology', '+639394188314', '2024-03-24 08:58:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bag_tag_number`
--
ALTER TABLE `bag_tag_number`
  ADD PRIMARY KEY (`id_number`),
  ADD UNIQUE KEY `bag_tag_id` (`bag_tag_id`);

--
-- Indexes for table `face_recognition`
--
ALTER TABLE `face_recognition`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registered_admin`
--
ALTER TABLE `registered_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registered_tags`
--
ALTER TABLE `registered_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registered_users`
--
ALTER TABLE `registered_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students_logs`
--
ALTER TABLE `students_logs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bag_tag_number`
--
ALTER TABLE `bag_tag_number`
  MODIFY `id_number` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `face_recognition`
--
ALTER TABLE `face_recognition`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `registered_admin`
--
ALTER TABLE `registered_admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registered_tags`
--
ALTER TABLE `registered_tags`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `registered_users`
--
ALTER TABLE `registered_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students_logs`
--
ALTER TABLE `students_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
