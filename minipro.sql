-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2020 at 08:25 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minipro`
--

-- --------------------------------------------------------

--
-- Table structure for table `auction_table`
--

CREATE TABLE `auction_table` (
  `auctionID` int(11) NOT NULL,
  `auctionName` char(20) DEFAULT NULL,
  `createDate` date DEFAULT NULL,
  `createdBy` int(11) DEFAULT NULL,
  `auctionStartDT` date DEFAULT NULL,
  `auctionendDT` date DEFAULT NULL,
  `itemID` int(11) DEFAULT NULL,
  `AuctionStatus` char(1) DEFAULT NULL,
  `auctionWinner` int(11) DEFAULT NULL,
  `ShipStatus` char(10) DEFAULT NULL,
  `paymentStatus` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bidtable`
--

CREATE TABLE `bidtable` (
  `bidID` int(11) NOT NULL,
  `bidDT` date DEFAULT NULL,
  `bidUser` int(11) DEFAULT NULL,
  `bidAmount` int(11) DEFAULT NULL,
  `paymentStatus` bit(1) DEFAULT NULL,
  `bidstatus` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `itemID` int(11) NOT NULL,
  `itemName` varchar(20) DEFAULT NULL,
  `color` char(50) DEFAULT NULL,
  `size` varchar(10) DEFAULT NULL,
  `itemyear` int(10) DEFAULT NULL,
  `itempic` varchar(255) DEFAULT NULL,
  `itemDesc` varchar(100) DEFAULT NULL,
  `itemgroup` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`itemID`, `itemName`, `color`, `size`, `itemyear`, `itempic`, `itemDesc`, `itemgroup`) VALUES
(1, 'item1', 'black', '12', 2014, 'DSC_0011.JPG', 'smol boi', 'grp1'),
(2, 'item2', 'black', '12', 2014, 'DSC_0011.JPG', 'smol boi', 'grp1');

-- --------------------------------------------------------

--
-- Table structure for table `regis`
--

CREATE TABLE `regis` (
  `UserID` int(11) NOT NULL,
  `firstname` char(20) DEFAULT NULL,
  `surname` char(20) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `aadhar` int(11) DEFAULT NULL,
  `gender` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auction_table`
--
ALTER TABLE `auction_table`
  ADD PRIMARY KEY (`auctionID`);

--
-- Indexes for table `bidtable`
--
ALTER TABLE `bidtable`
  ADD PRIMARY KEY (`bidID`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`itemID`);

--
-- Indexes for table `regis`
--
ALTER TABLE `regis`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auction_table`
--
ALTER TABLE `auction_table`
  MODIFY `auctionID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bidtable`
--
ALTER TABLE `bidtable`
  MODIFY `bidID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `itemID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `regis`
--
ALTER TABLE `regis`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
