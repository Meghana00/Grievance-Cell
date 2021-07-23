-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2021 at 06:37 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grievance`
--

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `slno` int(11) NOT NULL,
  `Fullname` varchar(256) NOT NULL,
  `Rollno` varchar(256) NOT NULL,
  `Gender` varchar(256) NOT NULL,
  `Email` varchar(256) NOT NULL,
  `grievance` varchar(1000) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `verification_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`slno`, `Fullname`, `Rollno`, `Gender`, `Email`, `grievance`, `status`, `verification_id`) VALUES
(1, 'Ashok Varma', '123', 'Male', 'mrfailure1026@gmail.com', 'awfgciywgf', 0, 725634037),
(2, 'Ashok Varma', '123', 'Male', 'mrfailure1026@gmail.com', 'avbuvbaui', 0, 916593000),
(3, 'Ashok Varma', '510', 'Male', 'mrfailure1026@gmail.com', 'uavcivaywdcyvwdiyvcidyvcuiwdavci \r\nwcvuwcwdc\r\ncuwd7cfw7cw\r\ncyuqwcvyuwc\r\ngyuadgdaLDHAHDHF;SDHAFAHF;ahffv\r\n', 0, 632140510),
(4, 'Ashok Varma', '123', 'Male', 'varma99@gmail.com', 'ytctf', 0, 185038207),
(5, 'Ashok Varma', '123', 'Male', 'mrfailure1026@gmail.com', 'adadad', 1, 550419148),
(6, 'Ashok Varma', '123', 'Male', 'varma99@gmail.com', 'zsfgvsfdbgdb', 0, 205221518),
(7, 'Ashok Varma', '123', 'Male', 'varma99@gmail.com', 'SGVCKAWDVCYUDVCAKVWCKDVCU', 0, 453328117),
(8, 'Ashok Varma', '510', 'Male', 'mrfailure1026@gmail.com', 'bicdwbwqdycvuicyw', 1, 819738946),
(9, 'Ashok Varma', '510', 'Male', 'mrfailure1026@gmail.com', 'ashfdciuawgfw', 1, 238160493),
(10, 'Ashok Varma', '510', 'Male', 'mrfailure1026@gmail.com', 'sbalibliugbliuf', 1, 631166169),
(11, 'Ashok Varma', '123', 'Male', 'mrfailure1026@gmail.com', 'erabiabs', 0, 624347302),
(12, 'Ashok Varma', '123', 'Male', 'mrfailure1026@gmail.com', 'avyas', 1, 910819191);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`slno`),
  ADD UNIQUE KEY `verification_id` (`verification_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
