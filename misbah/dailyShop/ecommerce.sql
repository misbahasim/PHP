-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2019 at 12:19 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblcat`
--

CREATE TABLE `tblcat` (
  `id` int(10) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcat`
--

INSERT INTO `tblcat` (`id`, `category`) VALUES
(1, 'Fashion'),
(2, 'Electronics'),
(3, 'Kids '),
(4, 'Sports'),
(5, 'Skin care'),
(6, 'Men'),
(7, 'Health'),
(8, 'Women'),
(9, 'Furniture');

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `id` int(4) NOT NULL,
  `product code` varchar(12) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `cid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `product code`, `name`, `price`, `quantity`, `image`, `cid`) VALUES
(1, '1001', 'LAPTOP', 25000, 15, NULL, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tblrole`
--

CREATE TABLE `tblrole` (
  `id` int(11) NOT NULL,
  `role_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblrole`
--

INSERT INTO `tblrole` (`id`, `role_name`) VALUES
(1, 'Administrator'),
(2, 'Customer');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `id` int(11) NOT NULL,
  `Name` char(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`id`, `Name`, `email`, `password`, `role`) VALUES
(1, 'misbah', 'mis@mail.com', '123', 1),
(2, 'saim', 'saim@email.com', '456', 2),
(3, 'ahmed', 'ah7@mail.com', '789', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblcat`
--
ALTER TABLE `tblcat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uk_pcode` (`product code`),
  ADD KEY `fk_pro_category` (`cid`);

--
-- Indexes for table `tblrole`
--
ALTER TABLE `tblrole`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblcat`
--
ALTER TABLE `tblcat`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tblrole`
--
ALTER TABLE `tblrole`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD CONSTRAINT `fk_pro_category` FOREIGN KEY (`cid`) REFERENCES `tblcat` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
