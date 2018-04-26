-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2017 at 02:05 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `comp`
--

CREATE TABLE `comp` (
  `Roll_num` varchar(15) NOT NULL,
  `First_name` text NOT NULL,
  `Last_name` text NOT NULL,
  `Year` int(100) NOT NULL,
  `Room_num` int(11) NOT NULL,
  `Block_num` int(11) NOT NULL,
  `Complaint` varchar(150) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `First_name` varchar(50) NOT NULL,
  `Last_name` varchar(50) NOT NULL,
  `Roll_num` varchar(15) NOT NULL,
  `Year` int(11) NOT NULL,
  `Block_num` int(11) NOT NULL,
  `Room_num` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `eating_places`
--

CREATE TABLE `eating_places` (
  `Name` varchar(50) NOT NULL,
  `Contact_Number` bigint(20) NOT NULL,
  `Timings` text NOT NULL,
  `Venue` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ecommerce`
--

CREATE TABLE `ecommerce` (
  `Item_number` int(11) NOT NULL,
  `Item_name` varchar(50) NOT NULL,
  `Description` varchar(50) NOT NULL,
  `Price` int(11) NOT NULL,
  `Type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Table structure for table `info_for_warden`
--

CREATE TABLE `info_for_warden` (
  `Student_name` varchar(50) NOT NULL,
  `Student_roll_num` int(11) NOT NULL,
  `WardenID` varchar(20) NOT NULL,
  `Warden_password` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Table structure for table `night_canteen`
--

CREATE TABLE `night_canteen` (
  `Restaurant_name` varchar(20) NOT NULL,
  `Reviews` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `room_allot_2`
--

CREATE TABLE `room_allot_2` (
  `First_name` varchar(50) NOT NULL,
  `Last_name` varchar(50) NOT NULL,
  `Room_num` int(11) NOT NULL,
  `Year` int(11) NOT NULL,
  `Block_num` int(11) NOT NULL,
  `Roll_num` varchar(11) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Table structure for table `room_allot_3`
--

CREATE TABLE `room_allot_3` (
  `First_name` varchar(50) NOT NULL,
  `Last_name` varchar(50) NOT NULL,
  `Room_num` int(11) NOT NULL,
  `Year` int(11) NOT NULL,
  `Block_num` int(11) NOT NULL,
  `Roll_num` varchar(11) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `room_allot_4`
--

CREATE TABLE `room_allot_4` (
  `First_name` varchar(50) NOT NULL,
  `Last_name` varchar(50) NOT NULL,
  `Room_num` int(11) NOT NULL,
  `Year` int(11) NOT NULL,
  `Block_num` int(11) NOT NULL,
  `Roll_num` varchar(11) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users_item`
--

CREATE TABLE `users_item` (
  `Roll_num` varchar(11) NOT NULL,
  `Item_num` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Table structure for table `wardeninfo`
--

CREATE TABLE `wardeninfo` (
  `First_name` text NOT NULL,
  `Last_name` text NOT NULL,
  `Office` text NOT NULL,
  `Timings` text NOT NULL,
  `Block_num` int(11) NOT NULL,
  `Contact_num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`Roll_num`);

--
-- Indexes for table `eating_places`
--
ALTER TABLE `eating_places`
  ADD PRIMARY KEY (`Contact_Number`);

--
-- Indexes for table `ecommerce`
--
ALTER TABLE `ecommerce`
  ADD PRIMARY KEY (`Item_number`);

--
-- Indexes for table `info_for_warden`
--
ALTER TABLE `info_for_warden`
  ADD PRIMARY KEY (`Student_roll_num`);

--
-- Indexes for table `room_allot_1`
--
ALTER TABLE `room_allot_1`
  ADD PRIMARY KEY (`Roll_num`),
  ADD UNIQUE KEY `Room_num` (`Room_num`),
  ADD UNIQUE KEY `Roll_num` (`Roll_num`);

--
-- Indexes for table `room_allot_2`
--
ALTER TABLE `room_allot_2`
  ADD PRIMARY KEY (`Roll_num`),
  ADD UNIQUE KEY `Room_num` (`Room_num`),
  ADD UNIQUE KEY `Roll_num` (`Roll_num`);

--
-- Indexes for table `room_allot_3`
--
ALTER TABLE `room_allot_3`
  ADD PRIMARY KEY (`Roll_num`),
  ADD UNIQUE KEY `Room_num` (`Room_num`),
  ADD UNIQUE KEY `Roll_num` (`Roll_num`);

--
-- Indexes for table `room_allot_4`
--
ALTER TABLE `room_allot_4`
  ADD PRIMARY KEY (`Roll_num`),
  ADD UNIQUE KEY `Room_num` (`Room_num`),
  ADD UNIQUE KEY `Roll_num` (`Roll_num`);

--
-- Indexes for table `wardeninfo`
--
ALTER TABLE `wardeninfo`
  ADD PRIMARY KEY (`Block_num`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `room_allot_1`
--
ALTER TABLE `room_allot_1`
  MODIFY `Room_num` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `room_allot_2`
--
ALTER TABLE `room_allot_2`
  MODIFY `Room_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `room_allot_3`
--
ALTER TABLE `room_allot_3`
  MODIFY `Room_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `room_allot_4`
--
ALTER TABLE `room_allot_4`
  MODIFY `Room_num` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
