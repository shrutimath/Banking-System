-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2021 at 02:23 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banking system`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction history`
--

CREATE TABLE `transaction history` (
  `From(Sender)` varchar(30) NOT NULL,
  `To(Reciever)` varchar(30) NOT NULL,
  `Amount Transferred` int(11) NOT NULL,
  `Date and Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction history`
--

INSERT INTO `transaction history` (`From(Sender)`, `To(Reciever)`, `Amount Transferred`, `Date and Time`) VALUES
('Shubham Shinge ', 'Raj Verma', 10, '2021-03-15 10:34:37'),
('Raj Verma ', 'Shubham Shinge', 100, '2021-03-15 11:19:06'),
('Shubham Shinge ', 'Raj Verma', 200, '2021-03-20 13:07:16');

-- --------------------------------------------------------

--
-- Table structure for table `view customers`
--

CREATE TABLE `view customers` (
  `Name` varchar(30) NOT NULL,
  `Email-id` varchar(30) NOT NULL,
  `A/c no` int(11) NOT NULL,
  `Balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `view customers`
--

INSERT INTO `view customers` (`Name`, `Email-id`, `A/c no`, `Balance`) VALUES
('Shubham Shinge', 'Shubhamshinge@gmail.com', 1, 1122),
('Raj Verma', 'rajverma@gmail.com', 2, 1468),
('Jai Kishan', 'jaikishan@gmail.com', 3, 1048),
('Soumya Malhotra', 'soumyamalhotra@gmail.com', 4, 2350),
('Rajkumar Santoshi', 'rajsantoshi@gmail.com', 5, 3500),
('Rohini Kulkarni', 'rohinik@gmail.com', 6, 1225),
('Sakshi Kumari', 'sakshikulkarni@gmail.com', 7, 3200),
('Ajay Kedia', 'ajauykedia@gmail.com', 8, 4000),
('Praful Mehta', 'prafulmehta@gmail.com', 9, 1790),
('Saina Banejree', 'sainabanerjee@gmail.com', 10, 2798);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
