-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2020 at 12:25 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wemsdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `ac_id` int(11) NOT NULL,
  `ac_email` varchar(50) NOT NULL,
  `ac_password` varchar(50) NOT NULL,
  `ac_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`ac_id`, `ac_email`, `ac_password`, `ac_type`) VALUES
(4, 'yinchi16@gmail.com', '1234', 'user'),
(5, 'khoo_ahwei@hotmail.com', '2345', 'weddingconsultant'),
(6, 'todev616@gmail.com', '3456', 'weddingconsultant');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `b_id` int(11) NOT NULL,
  `b_time` time NOT NULL,
  `b_date` date NOT NULL,
  `b_detail` varchar(255) NOT NULL,
  `c_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`b_id`, `b_time`, `b_date`, `b_detail`, `c_id`) VALUES
(1, '15:19:28', '2020-07-09', 'this', 1);

-- --------------------------------------------------------

--
-- Table structure for table `consultation`
--

CREATE TABLE `consultation` (
  `c_id` int(11) NOT NULL,
  `c_type` varchar(50) NOT NULL,
  `c_price` decimal(10,2) NOT NULL,
  `c_description` varchar(255) NOT NULL,
  `wc_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `consultation`
--

INSERT INTO `consultation` (`c_id`, `c_type`, `c_price`, `c_description`, `wc_id`) VALUES
(1, 'Online', '26.50', 'This is a wedding consultant.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `e_id` int(11) NOT NULL,
  `e_title` varchar(255) NOT NULL,
  `e_type` varchar(255) NOT NULL,
  `e_date` date NOT NULL,
  `e_time_start` time NOT NULL,
  `e_time_end` time NOT NULL,
  `e_venue` varchar(255) NOT NULL,
  `e_description` varchar(255) NOT NULL,
  `u_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`e_id`, `e_title`, `e_type`, `e_date`, `e_time_start`, `e_time_end`, `e_venue`, `e_description`, `u_id`) VALUES
(2, 'Tom & Jerry Wedding', 'garden', '2020-07-23', '10:00:00', '17:00:00', 'some beautiful garden...', 'This is a meaningful wedding.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `u_gender` varchar(50) NOT NULL,
  `u_ic` varchar(50) NOT NULL,
  `u_address` varchar(255) NOT NULL,
  `u_phone` varchar(255) NOT NULL,
  `ac_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_name`, `u_gender`, `u_ic`, `u_address`, `u_phone`, `ac_id`) VALUES
(1, 'Yan', 'female', '1234', 'NO.7 LORONG AIR PUTIH 65\r\nOFF JALAN AIR PUTIH 3', '0199740620', 4);

-- --------------------------------------------------------

--
-- Table structure for table `weddingconsult`
--

CREATE TABLE `weddingconsult` (
  `wc_id` int(11) NOT NULL,
  `wc_name` varchar(50) NOT NULL,
  `wc_gender` varchar(50) NOT NULL,
  `wc_phone` varchar(50) NOT NULL,
  `wc_experience` varchar(355) DEFAULT NULL,
  `ac_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `weddingconsult`
--

INSERT INTO `weddingconsult` (`wc_id`, `wc_name`, `wc_gender`, `wc_phone`, `wc_experience`, `ac_id`) VALUES
(1, 'Wyrus', 'male', '020202', 'I am good in planning', 5),
(3, 'Dev', 'female', '2345688', 'Just about to start.', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`ac_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`b_id`),
  ADD KEY `fk_c` (`c_id`);

--
-- Indexes for table `consultation`
--
ALTER TABLE `consultation`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `fk_wc` (`wc_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`e_id`),
  ADD KEY `fk_user` (`u_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`),
  ADD KEY `fk_ac` (`ac_id`);

--
-- Indexes for table `weddingconsult`
--
ALTER TABLE `weddingconsult`
  ADD PRIMARY KEY (`wc_id`),
  ADD KEY `fk_account` (`ac_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `ac_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `consultation`
--
ALTER TABLE `consultation`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `weddingconsult`
--
ALTER TABLE `weddingconsult`
  MODIFY `wc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `fk_c` FOREIGN KEY (`c_id`) REFERENCES `consultation` (`c_id`) ON UPDATE CASCADE;

--
-- Constraints for table `consultation`
--
ALTER TABLE `consultation`
  ADD CONSTRAINT `fk_wc` FOREIGN KEY (`wc_id`) REFERENCES `weddingconsult` (`wc_id`) ON UPDATE CASCADE;

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`u_id`) REFERENCES `user` (`u_id`) ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_ac` FOREIGN KEY (`ac_id`) REFERENCES `account` (`ac_id`) ON UPDATE CASCADE;

--
-- Constraints for table `weddingconsult`
--
ALTER TABLE `weddingconsult`
  ADD CONSTRAINT `fk_account` FOREIGN KEY (`ac_id`) REFERENCES `account` (`ac_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
