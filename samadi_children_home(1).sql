-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2021 at 07:57 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `samadi_children_home`
--

-- --------------------------------------------------------

--
-- Table structure for table `child_details`
--

CREATE TABLE `child_details` (
  `id` int(11) NOT NULL,
  `name_initials` varchar(50) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `child_details`
--

INSERT INTO `child_details` (`id`, `name_initials`, `full_name`, `gender`, `dob`) VALUES
(1, 'L E Handapangoda', 'lasith eranda', 'Male', '2021-08-09'),
(3, 'L E Han', 'KJSDN', 'Female', '2021-07-26'),
(4, 'JKDN', 'KJSDN', 'Male', '2021-07-26'),
(5, 'jkndf', 'jknfd', 'Male', '2021-07-26');

-- --------------------------------------------------------

--
-- Table structure for table `donars`
--

CREATE TABLE `donars` (
  `donar_id` int(11) NOT NULL,
  `donarName` varchar(50) NOT NULL,
  `contactNo` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `donationType` varchar(50) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donars`
--

INSERT INTO `donars` (`donar_id`, `donarName`, `contactNo`, `Address`, `donationType`, `date`) VALUES
(1, 'Rajitha', '713965510', 'veyangoda', 'cash', '2020-01-02 00:00:00'),
(2, 'text1', '0718213505', 'no.15 gampaha', 'Cash', '2020-02-04 11:05:28'),
(3, 'test2', '071852456', 'no 10 veyangoda', 'Items', '2020-03-04 11:06:15'),
(4, 'test3', '07145678912', 'No 463/4, Y-Estate,, Naiwala, Veyangoda', 'Both', '2020-04-04 11:07:44'),
(5, 'sadani', '0713965510', 'No 463/4, Y-Estate,, Naiwala, Veyangoda', 'Cash', '2020-01-04 13:16:47'),
(6, 'test5', '0713965510', 'No 463/4, Y-Estate,, Naiwala, Veyangoda', 'Cash', '2020-01-04 13:18:15'),
(7, 'test6', '0713965510', 'No 463/4, Y-Estate,, Naiwala, Veyangoda', 'Cash', '2020-01-04 13:19:30'),
(8, 'testcase5', '0713965510', 'No 463/4, Y-Estate,, Naiwala, Veyangoda', 'Both', '2020-05-04 13:20:43'),
(9, 'test7', '0713965510', 'No 463/4, Y-Estate,, Naiwala, Veyangoda', 'Both', '2020-06-04 13:22:40'),
(10, 'test8', '0713965510', 'No 463/4, Y-Estate,, Naiwala, Veyangoda', 'Cash', '2020-01-04 13:26:08'),
(11, 'ffff', '0713965510', 'No 463/4, Y-Estate,, Naiwala, Veyangoda', 'Cash', '2020-01-04 13:28:59'),
(12, 'test9', '0713965510', 'No 463/4, Y-Estate,, Naiwala, Veyangoda', 'Cash', '2020-01-04 13:32:23'),
(13, 'jagath', '0713965510', 'No 463/4, Y-Estate,, Naiwala, Veyangoda', 'Cash', '2020-01-04 13:35:35'),
(14, 'test10', '071', 'dddd', 'Cash', '2020-01-04 13:39:56'),
(15, 'test11', '071852456', 'dddd', 'Both', '2020-01-04 14:01:20'),
(16, 'last check', '0713965510', 'No 463/4, Y-Estate,, Naiwala, Veyangoda', 'Cash', '2020-01-04 22:50:49'),
(17, 'sadani', '071285456', 'gampaha', 'Cash', '2020-01-04 23:01:40'),
(18, 'test45', '0147', 'veyangoda', 'Items', '2020-01-04 23:02:33'),
(19, 'test45', '0147', 'veyangoda', 'Items', '2020-01-04 23:02:47'),
(20, 'test85', '0111', 'naiwala', 'Both', '2020-01-04 23:04:18'),
(21, 'hhhh', '017', 'veyangoda', 'Both', '2020-01-05 00:30:18'),
(22, 'rohan', '0713965510', 'No 463/4, Y-Estate,, Naiwala, Veyangoda', 'Cash', '2020-01-27 14:18:55'),
(23, 'rohan2', '0713965510', 'No 463/4, Y-Estate,, Naiwala, Veyangoda', 'Items', '2020-01-27 14:19:25'),
(24, 'rohan3', '0713965510', 'No 463/4, Y-Estate,, Naiwala, Veyangoda', 'Both', '2020-01-27 14:20:29'),
(25, 'Rajitha Lakshan', '0713965510', 'No. 463/4, y-Estate, Naiwala, Veyangoda', 'Items', '2021-06-30 10:39:30'),
(26, 'Rajitha Lakshan', '0713965510', 'No. 463/4, y-Estate, Naiwala, Veyangoda', 'Both', '2021-06-30 10:40:28'),
(27, 'test', '0413955510', 'veyangoda', 'Cash', '2021-06-30 17:44:11'),
(28, 'test2', '071', 'ddd', 'Both', '2021-06-30 17:45:27'),
(29, 'ss', 's', 'ss', 'Items', '2021-06-30 19:21:58'),
(30, 'test', '071', 'address1', 'Both', '2021-08-05 16:48:50'),
(31, 'jbgut67', 'bhjgbhj', 'hjghj', 'Cash', '2021-08-12 23:18:10'),
(32, 'jdsnfjk', '0770542432', 'ksjdnj', 'Item', '2021-08-15 03:25:40');

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `qty` int(11) NOT NULL,
  `amount` double NOT NULL,
  `donar_id` varchar(12) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`id`, `name`, `qty`, `amount`, `donar_id`) VALUES
(1, 'Table', 2, 658.23, '2'),
(2, 'Chair', 5, 655.25, '2'),
(4, 'Lasith', 5, 758, '3');

-- --------------------------------------------------------

--
-- Table structure for table `labour_details`
--

CREATE TABLE `labour_details` (
  `nic` varchar(12) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `name_initals` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `contact_number` char(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `post` varchar(10) NOT NULL,
  `salary` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `labour_details`
--

INSERT INTO `labour_details` (`nic`, `fname`, `lname`, `name_initals`, `dob`, `gender`, `contact_number`, `address`, `email`, `post`, `salary`) VALUES
('990811130V', 'Lasith', 'Eranda', 'L E Handapangoda', '2021-08-09', 'Male', '0770543422', '200D, Thibbotugoda', 'lasitheranga1@gmail.com', 'Admin', 0),
('990811130V', 'Lasith', 'Eranda', 'L E Handapangoda', '2021-08-09', 'Male', '0770543422', '200D, Thibbotugoda', 'lasitheranga1@gmail.com', 'Admin', 0),
('990811930V', 'sdkn', 'JKDNS', 'Lasith', '2021-08-08', 'Male', '0770542432', 'JSNDCKJ', 'lasitheranga1@gmail.com', 'Admin', 556.25);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `nic` varchar(12) CHARACTER SET latin1 NOT NULL,
  `name` varchar(20) NOT NULL,
  `contact_num` char(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`nic`, `name`, `contact_num`, `address`, `email`, `password`) VALUES
('990811130V', 'Lasith', '0770543422', '200D, Thibbotugoda, Pokunuwita', 'lasith@gmail.com', 'helloAll1@'),
('990851130V', 'hjbhjvb', '0770542432', 'jhbjhb', 'las@gmail.com', 'helloAll1@');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `child_details`
--
ALTER TABLE `child_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donars`
--
ALTER TABLE `donars`
  ADD PRIMARY KEY (`donar_id`);

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `donar_id` (`donar_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`nic`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `child_details`
--
ALTER TABLE `child_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `donars`
--
ALTER TABLE `donars`
  MODIFY `donar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
