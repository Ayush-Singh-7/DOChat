-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2018 at 06:54 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `D_id` int(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Consultant Fee` int(5) NOT NULL,
  `Pincode` int(9) NOT NULL,
  `Specialization` varchar(50) NOT NULL,
  `Clinc` varchar(100) NOT NULL,
  `District` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`D_id`, `Name`, `Consultant Fee`, `Pincode`, `Specialization`, `Clinc`, `District`) VALUES
(1, 'Raj Kumar', 500, 110086, 'heart', '12/54 main market gurgaon', 'Gurgaon'),
(2, 'sanju singh', 300, 110067, 'heart', '2395 sector 27 rohini', 'rohini'),
(3, 'richa chadda', 1000, 110086, 'heart', 'street 32 sector 15b Gurgaon', 'gurgaon'),
(4, 'priyanka sinha', 450, 110034, 'heart', '4556 sector 62 noida', 'Noida'),
(5, 'Preeneti chadda', 1500, 110034, 'dentist', '2234 sector 3 noida', 'noida'),
(6, 'veer kapoor', 650, 110067, 'dentist', 'main market sector 15 rohini', 'rohini'),
(7, 'Shruti sinha', 250, 110078, 'dentist', 'A-6 near airport dwarka', 'dwarka'),
(8, 'Leena Parashar', 450, 110007, 'dentist', '886 near mandir sector 15 faridabad', 'faridabad'),
(9, 'sandli singh', 700, 110086, 'child', '2345 sector 56 gurgaon', 'gurgaon'),
(10, 'Pulkit dhingra', 900, 110078, 'child', 'smile clinic', 'dwarka'),
(11, 'Priyanka singh', 2000, 110078, 'child', 'artimis clinic', 'dwarka'),
(13, 'taruna diwan', 3500, 110078, 'muscle pain', 'yes bros', 'gurgaon');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`D_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
