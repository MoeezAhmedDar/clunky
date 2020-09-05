-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2020 at 04:34 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contact_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `bussiness_detail`
--

CREATE TABLE `bussiness_detail` (
  `Company` varchar(25) NOT NULL,
  `Company_Details` varchar(50) NOT NULL,
  `current_Bussines` varchar(50) NOT NULL,
  `Experience` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bussiness_detail`
--

INSERT INTO `bussiness_detail` (`Company`, `Company_Details`, `current_Bussines`, `Experience`) VALUES
('Moiz', 'this is my company', 'shop', '1'),
('Mavensol', 'Our comapny', 'software House ', '1');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `Name` varchar(25) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `phone_No` varchar(11) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`Name`, `Email`, `phone_No`, `Message`) VALUES
('Moeez Ahmed Dar', 'zdgwR', 'GSGWRG', 'WGFWGWEG'),
('Moeez Ahmed Dar', 'moeezahmed448@gmail.com', '03325279448', 'This is my post.');

-- --------------------------------------------------------

--
-- Table structure for table `personal_info`
--

CREATE TABLE `personal_info` (
  `Name` varchar(25) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone_No` varchar(11) NOT NULL,
  `country` varchar(11) NOT NULL,
  `city` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personal_info`
--

INSERT INTO `personal_info` (`Name`, `Email`, `Phone_No`, `country`, `city`) VALUES
('Moeez Ahmed Dar', 'zdgwR', '123', 'xyz', 'kiy'),
('Ahmed', '41738@students.buitms.edu.pk', '03325279448', 'pakistan', 'lahore');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
