-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2020 at 05:38 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `Name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `pass`, `Name`) VALUES
(1, '12345', 'Admin'),
(2, '12345', 'Admin2'),
(3, '12345', 'Admin3'),
(4, '12345', 'Admin4'),
(5, '12345', 'Admin5');

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `id` int(10) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`id`, `cname`, `pass`) VALUES
(0, 'tint', 'tint'),
(1, 'tint', 'tint'),
(1234567890, 'tint', 'tint');

-- --------------------------------------------------------

--
-- Table structure for table `collegedetails`
--

CREATE TABLE `collegedetails` (
  `id` int(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Name` text NOT NULL,
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

INSERT INTO `collegedetails` (`id`, `password`, `Name`, `code`, `address`, `courses`, `branch`, `faculty`, `director`, `registrar`) VALUES
(1, '12345', 'ABCD', '187', 'KOLKATA', 'BTECH,MBA,BBA,MCA', 'CSE,IT,ECE,ME', '205', 'MR. KUMAR', 'MR. SINGH'),
(2, '12345', 'XYZ', '178', 'newtown', 'btech', 'case,it,ece', '259', 'ak ', 'ak');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `Message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Name`, `Email`, `Phone`, `Message`) VALUES
('abhishek', '', '7979912122', 'hii my name is abhishek singh\r\n'),
('abhishek singh', 'pintu.rambathini1997@gmail.com', '7979912122', 'hii');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(10) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `phone` int(10) NOT NULL,
  `fname` text NOT NULL,
  `mname` text NOT NULL,
  `address` varchar(40) NOT NULL,
  `degree` varchar(10) NOT NULL,
  `subject` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `Name`, `email`, `password`, `dob`, `phone`, `fname`, `mname`, `address`, `degree`, `subject`) VALUES
(1, 'Faculty1', 'faculty1@gmail.com', '12345', '1986-06-14', 2147483647, 'XYZ', 'ACB', 'KOLKATA,WEST BENGAL', 'M.Tech', 'Chemistry'),
(2, 'faculty2', 'faculty2@gmail.com', '12345', '1987-06-12', 2147483647, 'FGT', 'AZE', 'KOL', 'Phd', 'Physics'),
(5, 'abhi', 'bb@gmail.com', 'admin', '1999-01-10', 2147483647, 'm', 'm', 'bokao', 'mca', ''),
(6, 'yggh', 'a@gmail.com', 'admin', '0777-07-07', 2147483647, 'm', 'm', 'm', 'm', 'math'),
(11, 'faculty', 'faculty@gmail', '12345', '1668-05-12', 684976845, 'srzdtxfycguvhbjaestrdyctuvyibu', 'ztxfcgvh', 'zertxryctuvyibujonkmnpobuviycturxyzetwRz', 'btech', 'math');

-- --------------------------------------------------------

--
-- Table structure for table `math`
--

CREATE TABLE `math` (
  `Roll` int(11) NOT NULL,
  `ca1` int(11) NOT NULL,
  `ca2` int(11) NOT NULL,
  `ca3` int(11) NOT NULL,
  `ca4` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `math`
--

INSERT INTO `math` (`Roll`, `ca1`, `ca2`, `ca3`, `ca4`) VALUES
(90, 23, 24, 67, '25'),
(91, 22, 89, 0, NULL),
(92, 0, 0, 4, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `physics`
--

CREATE TABLE `physics` (
  `Roll` int(11) NOT NULL,
  `ca1` int(11) NOT NULL,
  `ca2` int(11) NOT NULL,
  `ca3` int(11) NOT NULL,
  `ca4` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `physics`
--

INSERT INTO `physics` (`Roll`, `ca1`, `ca2`, `ca3`, `ca4`) VALUES
(90, 20, 698, 46, '18'),
(91, 12, 34, 12, '33');

-- --------------------------------------------------------

--
-- Table structure for table `semester1`
--

CREATE TABLE `semester1` (
  `rollno` int(10) NOT NULL,
  `t1` int(10) NOT NULL,
  `t2` int(10) NOT NULL,
  `t3` int(10) NOT NULL,
  `p1` int(11) NOT NULL,
  `p2` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester1`
--

INSERT INTO `semester1` (`rollno`, `t1`, `t2`, `t3`, `p1`, `p2`) VALUES
(34, 67, 78, 78, 787, 88),
(72, 0, 0, 0, 0, 0),
(78, 78, 79, 90, 99, 99),
(88, 89, 99, 98, 88, 99),
(89, 88, 77, 0, 87, 88),
(90, 80, 90, 92, 25, 29),
(98, 99, 99, 99, 98, 98);

-- --------------------------------------------------------

--
-- Table structure for table `semester2`
--

CREATE TABLE `semester2` (
  `rollno` int(10) NOT NULL,
  `t1` int(10) NOT NULL,
  `t2` int(10) NOT NULL,
  `t3` int(10) NOT NULL,
  `p1` int(10) NOT NULL,
  `p2` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester2`
--

INSERT INTO `semester2` (`rollno`, `t1`, `t2`, `t3`, `p1`, `p2`) VALUES
(67, 66, 66, 66, 66, 66),
(89, 87, 65, 44, 90, 76),
(90, 77, 86, 47, 25, 21);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `phone`, `address`, `dob`) VALUES
(1, 'XYZ', '1980-06-02', '9876543210', '1973-02-01'),
(2, 'ABC', '1990-05-10', '0123456789', '1978-08-09'),
(3, 'QWE', '789465312', 'KOLKATA', '1980-09-16'),
(4, 'a', '7979912122', 'sjhjh', '8989-09-08'),
(5, 'ss', '55', 'rddff`', '2221-02-12');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Roll` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Stream` varchar(50) NOT NULL,
  `Course` varchar(30) NOT NULL,
  `Sem` varchar(20) NOT NULL,
  `Attendance` int(11) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Fees` varchar(30) NOT NULL,
  `Name` varchar(50) DEFAULT NULL
) ENGINE=Aria DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Roll`, `Email`, `Password`, `Stream`, `Course`, `Sem`, `Attendance`, `Address`, `Fees`, `Name`) VALUES
(90, 'NKOM51769@gmail.com', 'admin', 'cse', 'Btech', '7th', 90, 'jharkhand', 'Paid', 'Ankesh Kumar'),
(123, 'as@gmail.com', 'admin', 'cse', 'btech', '7', 90, 'asdfghjkl', 'paid', 'aaa'),
(100, 'student@gmail.com', '12345', 'cse', 'btech', '6', 70, '', 'paid', 'student'),
(76, 'ak@gmail.com', 'admin1', 'cse', 'btech', '7', 90, 'bokaro', 'paid', 'himanshu'),
(102, 'abhay@gmail.com', 'admin', 'cse', 'btech', '4', 90, 'bihar', 'paid', 'abhay'),
(101, 'ABC@gmail.com', '12345', 'CSE', 'BTECH', '7TH', 94, 'KOLKATA,WEST BENGAL', 'PAID', 'ABC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collegedetails`
--
ALTER TABLE `collegedetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semester1`
--
ALTER TABLE `semester1`
  ADD PRIMARY KEY (`rollno`);

--
-- Indexes for table `semester2`
--
ALTER TABLE `semester2`
  ADD PRIMARY KEY (`rollno`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Roll`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `collegedetails`
--
ALTER TABLE `collegedetails`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
