-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2021 at 03:58 PM
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
-- Database: `final`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `lecturername` varchar(40) NOT NULL,
  `lectureremail` varchar(25) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `groupclass` varchar(2) NOT NULL,
  `matric` varchar(12) NOT NULL,
  `studentname` varchar(40) NOT NULL,
  `studentphone` varchar(12) NOT NULL,
  `studentemail` varchar(25) NOT NULL,
  `date` varchar(15) NOT NULL,
  `time` varchar(30) NOT NULL,
  `reason` varchar(200) NOT NULL,
  `platform` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `lecturername`, `lectureremail`, `subject`, `groupclass`, `matric`, `studentname`, `studentphone`, `studentemail`, `date`, `time`, `reason`, `platform`, `status`) VALUES
(1, 'Fattah Bin Amin', 'fattah@gmail.com', 'MTD3063 (Database Driven Web Programming)', 'A', 'D20181084555', 'Siti Nurhaliza Binti Tajudin', '0193655666', 'siti@gmail.com', '2021-01-07', '12:30', 'Consultation', 'Google Meet', 0),
(2, 'Siti Nordiana Binti Ali', 'diana@gmail.com', 'MME3022 (Integrated Entrepreneurship)', 'C', 'D20191083212', 'Muhammad Nadhir Bin Azhar', '0174325677', 'nadhir@gmail.com', '2021-01-07', '12:30', 'Consultation', 'Google Meet', 0),
(3, 'Fattah Bin Amin', 'fattah@gmail.com', 'MTD3063 (Database Driven Web Programming)', 'C', 'D20191083212', 'Muhammad Nadhir Bin Azhar', '0174325677', 'nadhir@gmail.com', '2021-01-07', '12:30', 'COnsultation', 'Google Meet', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
