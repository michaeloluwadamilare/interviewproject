-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2021 at 02:08 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contonso`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `studentNo` varchar(50) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `class` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`studentNo`, `fname`, `lname`, `class`) VALUES
('Stud001', 'Saheed', 'Ojo', 'JSS 1'),
('Stud002', 'Micheal	', 'Adeola	', 'JSS 2'),
('Stud003', 'Sola', 'Sade', 'SSS 1'),
('Stud004	', 'Abd-Rahmon', 'Salah', 'JSS 1'),
('Stud005', 'Gbenga	', 'Akin', 'SSS 1'),
('Stud006', 'Folu	', 'Funke', 'SSS 2'),
('Stud007	', 'Queenet	', 'Sunday', 'JSS 2'),
('Stud008', 'Oganga	', 'Prince', 'JSS 3'),
('Stud009		', 'Samuel', 'Alade', 'SSS 1'),
('Stud010', 'Micheal', 'Omowon', 'SSS 2'),
('Stud011', 'Samuel', 'Akinsola', 'JSS 3'),
('Stud012', 'John', 'Laureta', 'SSS 3'),
('Stud013', 'Sunday', 'Smart', 'JSS 1'),
('Stud014', 'Abiodun', 'Salaudeen', 'SSS 1'),
('Stud015', 'Akeem ', 'Adekola', 'JSS 2'),
('Stud016', 'Alarape', 'Adebayo', 'SSS 3'),
('Stud017', 'Yusuf', 'Ashir', 'SSS 3'),
('Stud018', 'Sheriff ', 'Adesola', 'JSS 2'),
('Stud019', 'Roqeeb', 'Idayat', 'JSS 3'),
('Stud020', 'Isiaq', 'Kayode', 'JSS 1');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `staffNo` varchar(50) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `level` text NOT NULL,
  `classHeld` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`staffNo`, `fname`, `lname`, `level`, `classHeld`) VALUES
('Staff001', 'Micheal', 'Oyinye', 'Level 7', 'JSS 1'),
('Staff002', 'Emmanuel', 'Joseph', 'Level 6', 'JSS 2'),
('Staff003', 'Tunde', 'Akinola', 'Level 7', 'JSS 3'),
('Staff004', 'Ali', 'Hakeem	', 'Level 8', 'SSS 3'),
('Staff005', 'Sunday', 'Favour', 'Level 9', 'SSS 2'),
('Staff006', 'Lukman', 'Abdullah', 'Level 10', ''),
('Staff007', 'Folahan', 'Hameed', 'Level 11', ''),
('Staff008', 'Ridwan', 'Adisa', 'Level 12', ''),
('Staff009', 'Monday', 'Joseph', 'Level 8', 'SSS 1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`studentNo`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`staffNo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
