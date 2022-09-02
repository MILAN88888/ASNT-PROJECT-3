-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2022 at 07:38 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asnt_pro3`
--

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `document_id` int(10) NOT NULL,
  `document_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `document`
--

INSERT INTO `document` (`document_id`, `document_name`) VALUES
(1, 'data.pdf'),
(9, 'Be mausami Chhati  Final.pdf'),
(10, 'balinali 2.pdf'),
(16, 'bita.pdf'),
(17, 'HTML.pdf'),
(18, 'data -1.pdf'),
(19, 'data - 2.pdf'),
(20, 'data - 3.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `user_name` varchar(80) NOT NULL,
  `user_email` varchar(60) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_company` varchar(80) NOT NULL,
  `user_phone_no` bigint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_password`, `user_company`, `user_phone_no`) VALUES
(1, 'Milan chaudhary', 'Milan@gmail.com', 'milan123', 'iTech', 9807445408),
(5, 'saloni chaudhary', 'saloni@gmail.com', 'saloni123', 'iTech', 9807514100),
(8, 'admin', 'admin@gmail.com', 'admin123', 'boss', 9807445408),
(9, 'Hari Chaudhary', 'hari@gmail.com', 'hari123', 'iTech', 9807445409),
(10, 'bishal', 'bishal@gmail.com', 'bishal123', 'iTech', 9807445409),
(11, 'Krishana chaudhary', 'krishana@gmail.com', 'krishana123', 'iTech', 9807445409);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`document_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `document`
--
ALTER TABLE `document`
  MODIFY `document_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
