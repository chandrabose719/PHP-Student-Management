-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2017 at 11:19 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_fees`
--

CREATE TABLE `student_fees` (
  `year` varchar(40) NOT NULL,
  `student_name` varchar(40) NOT NULL,
  `exam_fees` float NOT NULL,
  `tution_fees` float NOT NULL,
  `lab_fees` float NOT NULL,
  `fees_total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_fees`
--

INSERT INTO `student_fees` (`year`, `student_name`, `exam_fees`, `tution_fees`, `lab_fees`, `fees_total`) VALUES
('mar-2017', 'Bose', 3000, 5000, 2500, 10500);

-- --------------------------------------------------------

--
-- Table structure for table `student_login`
--

CREATE TABLE `student_login` (
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `fullname` varchar(40) NOT NULL,
  `address` varchar(40) NOT NULL,
  `mobile` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_login`
--

INSERT INTO `student_login` (`username`, `password`, `fullname`, `address`, `mobile`) VALUES
('Bose', '223', 'Chandrabose K V', 'Kodihalli, Bangalore.', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `student_mark`
--

CREATE TABLE `student_mark` (
  `student_name` varchar(40) NOT NULL,
  `exam_type` varchar(40) NOT NULL,
  `sub_1` int(3) NOT NULL,
  `sub_2` int(3) NOT NULL,
  `sub_3` int(3) NOT NULL,
  `sub_4` int(3) NOT NULL,
  `sub_5` int(3) NOT NULL,
  `total` int(3) NOT NULL,
  `percentage` float NOT NULL,
  `year` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_mark`
--

INSERT INTO `student_mark` (`student_name`, `exam_type`, `sub_1`, `sub_2`, `sub_3`, `sub_4`, `sub_5`, `total`, `percentage`, `year`) VALUES
('Bose', 'exam -1', 50, 50, 50, 50, 50, 250, 50, '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_login`
--
ALTER TABLE `student_login`
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `password` (`password`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
