-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2024 at 06:39 AM
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
-- Database: `user_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `sem_1`
--

CREATE TABLE `sem_1` (
  `id` int(11) NOT NULL,
  `ROLL_NO` varchar(15) NOT NULL,
  `NAME` varchar(150) NOT NULL,
  `GPA` float NOT NULL,
  `CGPA` float NOT NULL,
  `STATUS` tinytext NOT NULL,
  `FAIL` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sem_1`
--

INSERT INTO `sem_1` (`id`, `ROLL_NO`, `NAME`, `GPA`, `CGPA`, `STATUS`, `FAIL`) VALUES
(1, 'CPE-23-01', 'AYESHA NOREEN', 3.98, 3.98, 'Pass', 'No Course to Show'),
(2, 'CPE-23-02', 'MUHAMMAD RAZA', 3.91, 3.91, 'Pass', 'No Course to Show'),
(3, 'CPE-23-03', 'ANIQA IMRAN', 3.67, 3.67, 'Pass', 'No Course to Show'),
(4, 'CPE-23-04', 'UQAAB HAIDER', 3.47, 3.47, 'Pass', 'No Course to Show'),
(5, 'CPE-23-05', 'BUSHRA KANOOZ KHAN', 3.9, 3.9, 'Pass', 'No Course to Show'),
(6, 'CPE-23-06', 'MUHAMMAD RIZWAN', 3.84, 3.84, 'Pass', 'No Course to Show'),
(7, 'CPE-23-08', 'ALEENA KHAN', 0, 0, 'Drop', 'CPE-111T, CPE-111P, NAS-114T, NAS-114P, HUM-116T, CPE-112T, CPE-112P, NAS-115T'),
(8, 'CPE-23-09', 'EISHA ARAIN', 3.92, 3.92, 'Pass', 'No Course to Show'),
(9, 'CPE-23-10', 'FAHAD USMAN', 3.99, 3.99, 'Pass', 'No Course to Show'),
(10, 'CPE-23-11', 'MUHAMMAD MEHDI', 3.6, 3.6, 'Pass', 'No Course to Show'),
(11, 'CPE-23-12', 'MUHAMMAD UMER', 3.93, 3.93, 'Pass', 'No Course to Show'),
(12, 'CPE-23-13', 'MUHAMMAD ALI', 3.88, 3.88, 'Pass', 'No Course to Show'),
(13, 'CPE-23-14', 'ALIZA NOREEN', 3.81, 3.81, 'Pass', 'No Course to Show'),
(14, 'CPE-23-15', 'ALI SACHAL ABDULLAH', 3.9, 3.9, 'Pass', 'No Course to Show'),
(15, 'CPE-23-16', 'AQIB HUSSAIN', 2.79, 2.79, 'Pass', 'CPE-112T'),
(16, 'CPE-23-17', 'MUHAMMAD SAMI ULLAH', 3.64, 3.64, 'Pass', 'No Course to Show'),
(17, 'CPE-23-18', 'HAFIZ MUHAMMAD', 3.76, 3.76, 'Pass', 'No Course to Show'),
(18, 'CPE-23-19', 'MUHAMMAD REHAN', 2.99, 2.99, 'Pass', 'CPE-112T'),
(19, 'CPE-23-20', 'ANAM BIBI', 2.39, 2.39, 'Pass', 'CPE-112T'),
(20, 'CPE-23-21', 'ESHA ASLAM', 3.34, 3.34, 'Pass', 'No Course to Show'),
(21, 'CPE-23-22', 'AWAIS ALI', 3.68, 3.68, 'Pass', 'No Course to Show'),
(22, 'CPE-23-23', 'MUHAMMAD SHOAIB', 3.08, 3.08, 'Pass', 'No Course to Show'),
(23, 'CPE-23-24', 'NIDA KANWAL', 3.74, 3.74, 'Pass', 'No Course to Show'),
(24, 'CPE-23-25', 'MUHAMMAD NOUMAN', 3.27, 3.27, 'Pass', 'No Course to Show'),
(25, 'CPE-23-26', 'MUBASHIR HASSAN', 2.84, 2.84, 'Pass', 'NAS-115T'),
(26, 'CPE-23-27', 'MUHAMMAD UMAR', 3.39, 3.39, 'Pass', 'No Course to Show'),
(27, 'CPE-23-28', 'RIZWAN ALI', 2.91, 2.91, 'Pass', 'No Course to Show'),
(28, 'CPE-23-29', 'HANIA KHAN', 3.16, 3.16, 'Pass', 'No Course to Show'),
(29, 'CPE-23-30', 'MUHAMMAD MUJAHID', 2.07, 2.07, 'Pass', 'CPE-111T, NAS-115T, CPE-111P'),
(30, 'CPE-23-31', 'HASSAN GHANI', 3.7, 3.7, 'Pass', 'No Course to Show'),
(31, 'CPE-23-32', 'YUSRA MARYAM', 2.6, 2.6, 'Pass', 'NAS-115T'),
(32, 'CPE-23-33', 'NOOR UL AIN FATIMA', 2.66, 2.66, 'Pass', 'NAS-115T'),
(33, 'CPE-23-34', 'ABID ALI', 3.09, 3.09, 'Pass', 'No Course to Show'),
(34, 'CPE-23-35', 'RIAZ AHMAD', 2.16, 2.16, 'Pass', 'CPE-112T, NAS-115T'),
(35, 'CPE-23-36', 'MUHAMMAD AWAIS', 2.09, 2.09, 'Pass', 'CPE-112T, NAS-115T'),
(36, 'CPE-23-37', 'SAIFULLAH', 3.19, 3.19, 'Pass', 'No Course to Show'),
(37, 'CPE-23-38', 'ALISHBA ARIF', 3.27, 3.27, 'Pass', 'No Course to Show');

-- --------------------------------------------------------

--
-- Table structure for table `sem_2`
--

CREATE TABLE `sem_2` (
  `id` int(11) NOT NULL,
  `ROLL_NO` varchar(15) NOT NULL,
  `NAME` varchar(150) NOT NULL,
  `GPA` float NOT NULL,
  `CGPA` float NOT NULL,
  `STATUS` tinytext NOT NULL,
  `FAIL` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sem_2`
--

INSERT INTO `sem_2` (`id`, `ROLL_NO`, `NAME`, `GPA`, `CGPA`, `STATUS`, `FAIL`) VALUES
(1, 'CPE-23-01', 'AYESHA NOREEN', 4, 3.99, 'Pass', 'No Course to Show'),
(2, 'CPE-23-02', 'MUHAMMAD RAZA', 3.91, 3.91, 'Pass', 'No Course to Show'),
(3, 'CPE-23-03', 'ANIQA IMRAN', 3.53, 3.6, 'Pass', 'No Course to Show'),
(4, 'CPE-23-04', 'UQAAB HAIDER', 3.68, 3.58, 'Pass', 'No Course to Show'),
(5, 'CPE-23-05', 'BUSHRA KANOOZ KHAN', 3.99, 3.94, 'Pass', 'No Course to Show'),
(6, 'CPE-23-06', 'MUHAMMAD RIZWAN', 3.64, 3.74, 'Pass', 'No Course to Show'),
(7, 'CPE-23-08', 'ALEENA KHAN', 3.79, 3.86, 'Pass', 'No Course to Show'),
(8, 'CPE-23-09', 'EISHA ARAIN', 3.79, 3.89, 'Pass', 'No Course to Show'),
(9, 'CPE-23-10', 'FAHAD USMAN', 3.43, 3.51, 'Pass', 'No Course to Show'),
(10, 'CPE-23-11', 'MUHAMMAD MEHDI', 3.95, 3.94, 'Pass', 'No Course to Show'),
(11, 'CPE-23-12', 'MUHAMMAD UMER', 3.59, 3.74, 'Pass', 'ARAB152'),
(12, 'CPE-23-13', 'MUHAMMAD ALI', 3.37, 3.59, 'Pass', 'No Course to Show'),
(13, 'CPE-23-14', 'ALIZA NOREEN', 3.89, 3.9, 'Pass', 'No Course to Show'),
(14, 'CPE-23-15', 'ALI SACHAL ABDULLAH', 3.24, 3.02, 'Pass', 'CPE-112T'),
(15, 'CPE-23-16', 'AQIB HUSSAIN', 3.55, 3.6, 'Pass', 'No Course to Show'),
(16, 'CPE-23-17', 'MUHAMMAD SAMI ULLAH', 3.58, 3.67, 'Pass', 'No Course to Show'),
(17, 'CPE-23-18', 'HAFIZ MUHAMMAD', 3.17, 3.08, 'Pass', 'CPE-112T'),
(18, 'CPE-23-19', 'MUHAMMAD REHAN', 2.82, 2.6, 'Pass', 'CPE-112T, CPE-122T'),
(19, 'CPE-23-20', 'ANAM BIBI', 0, 1.67, 'Drop', 'CPE-121T, CPE-121P, CPE-122T, CPE-122P, CPE-123T, CPE-123P, CPE-124T, NAS-125T, HUM-126T, ARAB-152'),
(20, 'CPE-23-21', 'ESHA ASLAM', 3.77, 3.73, 'Pass', 'No Course to Show'),
(21, 'CPE-23-22', 'AWAIS ALI', 2.57, 2.82, 'Pass', 'CPL-122T'),
(22, 'CPE-23-23', 'MUHAMMAD SHOAIB', 3.23, 3.48, 'Pass', 'No Course to Show'),
(23, 'CPE-23-24', 'NIDA KANWAL', 3.42, 3.34, 'Pass', 'No Course to Show'),
(24, 'CPE-23-25', 'MUHAMMAD NOUMAN', 3.39, 3.12, 'Pass', 'NAS-115T'),
(25, 'CPE-23-26', 'MUBASHIR HASSAN', 3.19, 3.29, 'Pass', 'No Course to Show'),
(26, 'CPE-23-27', 'MUHAMMAD UMAR', 2.83, 2.87, 'Pass', 'ARAB152'),
(27, 'CPE-23-28', 'RIZWAN ALI', 3.36, 3.26, 'Pass', 'No Course to Show'),
(28, 'CPE-23-29', 'HANIA KHAN', 3.17, 2.62, 'Pass', 'CPE-111T, NAS-115T, CPE-111P'),
(29, 'CPE-23-30', 'MUHAMMAD MUJAHID', 3.64, 3.67, 'Pass', 'No Course to Show'),
(30, 'CPE-23-31', 'HASSAN GHANI', 3.05, 2.83, 'Pass', 'NAS-115T'),
(31, 'CPE-23-32', 'YUSRA MARYAM', 2.71, 2.68, 'Pass', 'NAS-115T, NAS-125T'),
(32, 'CPE-23-33', 'NOOR UL AIN FATIMA', 2.71, 2.9, 'Pass', 'CPE-122T'),
(33, 'CPE-23-34', 'ABID ALI', 2.35, 2.26, 'Pass', 'CPE-IZZT CPE-112T, NAS-115T, NAS-125T'),
(34, 'CPE-23-35', 'RIAZ AHMAD', 1.83, 1.96, 'Drop', 'CPE-112T NAS-115T, CPE-122T,NAS-125T'),
(35, 'CPE-23-36', 'MUHAMMAD AWAIS', 3.35, 3.27, 'Pass', 'No Course to Show'),
(36, 'CPE-23-37', 'SAIFULLAH', 3.28, 3.27, 'Pass', 'No Course to Show'),
(37, 'CPE-23-38', 'ALISHBA ARIF', 3.2, 3.24, 'Pass', 'No Course to Show');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`) VALUES
(3, 'Aiman', 'aiman@gmail.com', '$2y$10$j5AEjLsRLt527mSDD/6U2OyKnmALQil13YLHkeeKIs65dgPtxtPCG'),
(4, 'Samiya', 'samiya@gmail.com', '$2y$10$GVmRIwUHbsDCZ7P01TghFe2BHS0M3Kf7VajN/NgrybVeuaq1xRy1i'),
(5, 'Esha Aslam', 'esha@gmail.com', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sem_1`
--
ALTER TABLE `sem_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sem_2`
--
ALTER TABLE `sem_2`
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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
