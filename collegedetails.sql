-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2020 at 07:46 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ums`
--

-- --------------------------------------------------------

--
-- Table structure for table `collegedetails`
--

CREATE TABLE `collegedetails` (
  `id` int(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` text NOT NULL,
  `code` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `courses` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `director` text NOT NULL,
  `registrar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collegedetails`
--

INSERT INTO `collegedetails` (`id`, `password`, `name`, `code`, `address`, `courses`, `branch`, `faculty`, `director`, `registrar`) VALUES
(1, '12345', 'TINT', '187', 'KOLKATA', 'BTECH,MBA,BBA,MCA', 'CSE,IT,ECE,ME', '205', 'MR. KUMAR', 'MR. SINGH');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `collegedetails`
--
ALTER TABLE `collegedetails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `collegedetails`
--
ALTER TABLE `collegedetails`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
