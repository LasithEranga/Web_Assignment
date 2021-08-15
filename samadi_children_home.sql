-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2021 at 05:20 PM
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
(5, 'jkndf', 'jknfd', 'Male', '2021-07-26'),
(6, 'L E Handapangoda', 'Lasith Eranda', 'Male', '2021-08-02'),
(7, 'E L Eranda', 'Eranda Lasith', 'Male', '2021-08-09');

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
(33, 'Lasith', '0770542432', '200D, Thibbotugoda', 'Cash', '2021-08-15 13:29:47');

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
(4, 'desk', 5, 758, '3');

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
('990811130V', 'lasith', '0770543422', '200D, Thibbotugoda, Pokunuwita', 'lasith@gmail.com', '456'),
('990851130V', 'hjbhjvb', '0770542432', 'jhbjhb', 'las@gmail.com', 'kdnckjsdn'),
('990855562V', 'Lasith Eranda', '0770542432', '200D, Thibbotugoda', 'lasitheranga1@gmail.com', 'hjsdbjk');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `donars`
--
ALTER TABLE `donars`
  MODIFY `donar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
