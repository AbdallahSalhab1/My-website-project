-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2023 at 12:12 PM
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
-- Database: `webairport`
--

-- --------------------------------------------------------

--
-- Table structure for table `bag`
--

CREATE TABLE `bag` (
  `id` int(11) NOT NULL,
  `weight` double DEFAULT NULL,
  `color` varchar(15) DEFAULT NULL,
  `brand` varchar(15) DEFAULT NULL,
  `fragile` enum('yes','no') DEFAULT NULL,
  `regesterid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE `flight` (
  `id` int(11) NOT NULL,
  `destination` varchar(15) DEFAULT NULL,
  `startingdate` varchar(15) DEFAULT NULL,
  `num_of_days` int(11) DEFAULT NULL,
  `regesterid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `flight`
--

INSERT INTO `flight` (`id`, `destination`, `startingdate`, `num_of_days`, `regesterid`) VALUES
(3, 'DZ', '2023-10-07', 13, NULL),
(8, 'AX', '2023-09-27', 9, NULL),
(9, 'BG', '2023-09-26', 7, NULL),
(10, 'BG', '2023-09-26', 1, NULL),
(11, 'AF', '2023-09-30', 6, NULL),
(12, 'AF', '2023-10-06', 4, NULL),
(13, 'DZ', '2023-09-27', 4, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `regester`
--

CREATE TABLE `regester` (
  `id` int(11) NOT NULL,
  `username` varchar(15) DEFAULT NULL,
  `gender` enum('M','F') DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(15) DEFAULT NULL,
  `password` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `regester`
--

INSERT INTO `regester` (`id`, `username`, `gender`, `phone`, `email`, `password`) VALUES
(1, 'asd', '', 'asd', 'asd@gmail.com', 'asd'),
(2, 'ali', '', '', '', '12'),
(14, 'ht', NULL, 'ht', 'asdsda@fd.com', 'ht'),
(16, 'sara', NULL, '0793627583', 'sara@dsf.com', 'sara');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bag`
--
ALTER TABLE `bag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bag_fk` (`regesterid`);

--
-- Indexes for table `flight`
--
ALTER TABLE `flight`
  ADD PRIMARY KEY (`id`),
  ADD KEY `f_fk` (`regesterid`);

--
-- Indexes for table `regester`
--
ALTER TABLE `regester`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password` (`password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bag`
--
ALTER TABLE `bag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `flight`
--
ALTER TABLE `flight`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `regester`
--
ALTER TABLE `regester`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bag`
--
ALTER TABLE `bag`
  ADD CONSTRAINT `bag_fk` FOREIGN KEY (`regesterid`) REFERENCES `regester` (`id`);

--
-- Constraints for table `flight`
--
ALTER TABLE `flight`
  ADD CONSTRAINT `f_fk` FOREIGN KEY (`regesterid`) REFERENCES `regester` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
