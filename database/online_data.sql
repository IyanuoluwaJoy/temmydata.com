-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2023 at 12:19 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `auths`
--

CREATE TABLE `auths` (
  `id` int(11) NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `mobile_no` varchar(150) NOT NULL,
  `username` varchar(150) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `my_referral` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auths`
--

INSERT INTO `auths` (`id`, `first_name`, `last_name`, `mobile_no`, `username`, `email_address`, `user_password`, `my_referral`) VALUES
(1, 'Temitope', 'Orojo', '09035265815', 'michael', 'mhanextee@gmail.com', '$2y$10$w7FrNr7kIMxrNqGrDMrZQ.rM3I8QOVs98.tM2Tztuw4VR9YpInDRC', 'ADMIN'),
(2, 'Temitope', 'King', '09035265815', 'ahdf', 'mhanextee@gmail.com', '$2y$10$uODK9.HKF9I.3.fHY5JkXuSD48MMn5/TEAeWrjHqZF1vGgj72wNLi', 'ADMIN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auths`
--
ALTER TABLE `auths`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auths`
--
ALTER TABLE `auths`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
