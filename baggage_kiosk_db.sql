-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2024 at 01:21 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

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
  `registration_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registered_users`
--

INSERT INTO `registered_users` (`id`, `rfid`, `tupid`, `name`, `gender`, `course`, `college`, `registration_date`) VALUES
(1, '0576274321', 'TUPM-20-0130', 'Arlyn Seño', 'Female', 'Bachelor of Engineering Technology major in Computer Engineering Technology', 'College of Industrial Technology', '2024-02-17 11:26:25'),
(2, '0413392035', 'TUPM-20-8457', 'Jenny Abellera', 'Female', 'Bachelor of Engineering Technology major in Computer Engineering Technology', 'College of Industrial Technology', '2024-02-17 11:27:37'),
(3, '0413087539', 'TUPM-20-3743', 'Arvie Christian Armenta', 'Male', 'Bachelor of Engineering Technology major in Computer Engineering Technology', 'College of Industrial Technology', '2024-02-17 13:04:36'),
(4, '0413392012', 'TUPM-20-8457', 'Arlyn Seño', 'Male', 'Bachelor of Engineering Technology major in Railway Technology', 'College of Industrial Technology', '2024-03-01 02:36:36');

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
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students_logs`
--

INSERT INTO `students_logs` (`id`, `rfid`, `status`, `tupid`, `name`, `gender`, `course`, `college`, `timestamp`) VALUES
(1, '0413392035', 'in', 'TUPM-20-8457', 'Jenny Abellera', 'Female', 'Bachelor of Engineering Technology major in Computer Engineering Technology', 'College of Engineering', '2024-02-22 04:03:47'),
(2, '0413087539', 'in', 'TUPM-20-3743', 'Arvie Christian Armenta', 'Male', 'Bachelor of Engineering Technology major in Computer Engineering Technology', 'College of Industrial Technology', '2024-02-22 04:03:48'),
(3, '0413392035', 'out', 'TUPM-20-8457', 'Jenny Abellera', 'Female', 'Bachelor of Engineering Technology major in Computer Engineering Technology', 'College of Engineering', '2024-02-22 04:04:32'),
(4, '0413392035', 'in', 'TUPM-20-8457', 'Jenny Abellera', 'Female', 'Bachelor of Engineering Technology major in Computer Engineering Technology', 'College of Engineering', '2024-02-22 04:04:44'),
(5, '0413087539', 'out', 'TUPM-20-3743', 'Arvie Christian Armenta', 'Male', 'Bachelor of Engineering Technology major in Computer Engineering Technology', 'College of Industrial Technology', '2024-02-22 04:04:46'),
(6, '0413087539', 'in', 'TUPM-20-3743', 'Arvie Christian Armenta', 'Male', 'Bachelor of Engineering Technology major in Computer Engineering Technology', 'College of Industrial Education', '2024-02-22 04:04:57'),
(7, '0413392035', 'out', 'TUPM-20-8457', 'Jenny Abellera', 'Female', 'Bachelor of Engineering Technology major in Computer Engineering Technology', 'College of Engineering', '2024-02-22 04:04:58'),
(8, '0413392035', 'in', 'TUPM-20-8457', 'Jenny Abellera', 'Female', 'Bachelor of Engineering Technology major in Computer Engineering Technology', 'College of Industrial Technology', '2024-02-22 05:09:33'),
(9, '0413087539', 'out', 'TUPM-20-3743', 'Arvie Christian Armenta', 'Male', 'Bachelor of Engineering Technology major in Computer Engineering Technology', 'College of Industrial Education', '2024-02-22 06:24:12'),
(10, '0413392035', 'out', 'TUPM-20-8457', 'Jenny Abellera', 'Female', 'Bachelor of Engineering Technology major in Computer Engineering Technology', 'College of Industrial Technology', '2024-02-22 06:24:15'),
(11, '0413087539', 'in', 'TUPM-20-3743', 'Arvie Christian Armenta', 'Male', 'Bachelor of Engineering Technology major in Computer Engineering Technology', 'College of Industrial Technology', '2024-02-22 06:24:27'),
(12, '0413392035', 'in', 'TUPM-20-8457', 'Jenny Abellera', 'Female', 'Bachelor of Engineering Technology major in Computer Engineering Technology', 'College of Engineering', '2024-02-22 06:26:44'),
(13, '0413392035', 'out', 'TUPM-20-8457', 'Jenny Abellera', 'Female', 'Bachelor of Engineering Technology major in Computer Engineering Technology', 'College of Engineering', '2024-02-22 06:32:37'),
(14, '0413392035', 'in', 'TUPM-20-8457', 'Jenny Abellera', 'Female', 'Bachelor of Engineering Technology major in Computer Engineering Technology', 'College of Engineering', '2024-02-22 06:37:31'),
(15, '0413392035', 'out', 'TUPM-20-8457', 'Jenny Abellera', 'Female', 'Bachelor of Engineering Technology major in Computer Engineering Technology', 'College of Engineering', '2024-02-22 06:38:15'),
(16, '0413392035', 'in', 'TUPM-20-8457', 'Jenny Abellera', 'Female', 'Bachelor of Engineering Technology major in Computer Engineering Technology', 'College of Engineering', '2024-02-22 06:44:19'),
(17, '0413087539', 'out', 'TUPM-20-3743', 'Arvie Christian Armenta', 'Male', 'Bachelor of Engineering Technology major in Computer Engineering Technology', 'College of Industrial Technology', '2024-02-22 06:44:23'),
(18, '0413087539', 'in', 'TUPM-20-3743', 'Arvie Christian Armenta', 'Male', 'Bachelor of Engineering Technology major in Computer Engineering Technology', 'College of Industrial Technology', '2024-03-01 04:05:01'),
(19, '0413392035', 'out', 'TUPM-20-8457', 'Jenny Abellera', 'Female', 'Bachelor of Engineering Technology major in Computer Engineering Technology', 'College of Engineering', '2024-03-01 04:05:19'),
(20, '0413087539', 'out', 'TUPM-20-3743', 'Arvie Christian Armenta', 'Male', 'Bachelor of Engineering Technology major in Computer Engineering Technology', 'College of Industrial Technology', '2024-03-01 04:05:30'),
(21, '0413392035', 'in', 'TUPM-20-8457', 'Jenny Abellera', 'Female', 'Bachelor of Engineering Technology major in Computer Engineering Technology', 'College of Engineering', '2024-03-01 04:05:39'),
(22, '0413087539', 'in', 'TUPM-20-3743', 'Arvie Christian Armenta', 'Male', 'Bachelor of Engineering Technology major in Computer Engineering Technology', 'College of Industrial Technology', '2024-03-02 04:49:17'),
(23, '0413392035', 'out', 'TUPM-20-8457', 'Jenny Abellera', 'Female', 'Bachelor of Engineering Technology major in Computer Engineering Technology', 'College of Industrial Technology', '2024-03-02 04:49:22'),
(24, '0413087539', 'out', 'TUPM-20-3743', 'Arvie Christian Armenta', 'Male', 'Bachelor of Engineering Technology major in Computer Engineering Technology', 'College of Industrial Technology', '2024-03-02 04:49:31'),
(25, '0413392035', 'in', 'TUPM-20-8457', 'Jenny Abellera', 'Female', 'Bachelor of Engineering Technology major in Computer Engineering Technology', 'College of Industrial Technology', '2024-03-02 04:49:36'),
(26, '0413087539', 'in', 'TUPM-20-3743', 'Arvie Christian Armenta', 'Male', 'Bachelor of Engineering Technology major in Computer Engineering Technology', 'College of Industrial Technology', '2024-03-02 04:49:41'),
(27, '0413392035', 'out', 'TUPM-20-8457', 'Jenny Abellera', 'Female', 'Bachelor of Engineering Technology major in Computer Engineering Technology', 'College of Industrial Technology', '2024-03-02 04:49:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registered_admin`
--
ALTER TABLE `registered_admin`
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
-- AUTO_INCREMENT for table `registered_admin`
--
ALTER TABLE `registered_admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registered_users`
--
ALTER TABLE `registered_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students_logs`
--
ALTER TABLE `students_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
