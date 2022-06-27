-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2022 at 08:30 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoppingcart`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `brandtb`
--

CREATE TABLE `brandtb` (
  `bid` int(11) NOT NULL,
  `bname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brandtb`
--

INSERT INTO `brandtb` (`bid`, `bname`) VALUES
(1, 'Addidas'),
(2, 'Nick'),
(3, 'Bata'),
(4, 'English Boot House'),
(5, 'Outfitter'),
(6, 'Polo'),
(7, 'Livies'),
(8, 'Denim'),
(9, 'Rolex'),
(10, 'Rado'),
(11, 'Zara'),
(12, 'A Store'),
(13, 'Winsilino');

-- --------------------------------------------------------

--
-- Table structure for table `categorytb`
--

CREATE TABLE `categorytb` (
  `cid` int(11) NOT NULL,
  `cname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categorytb`
--

INSERT INTO `categorytb` (`cid`, `cname`) VALUES
(1, 'Pant'),
(2, 'Shirt'),
(3, 'Shoes'),
(4, 'Bags'),
(5, 'Cap'),
(6, 'Watch'),
(7, 'Sun Glasses'),
(8, 'T-shirt');

-- --------------------------------------------------------

--
-- Table structure for table `producttb`
--

CREATE TABLE `producttb` (
  `pid` int(11) NOT NULL,
  `pname` varchar(50) DEFAULT NULL,
  `pprice` int(11) DEFAULT NULL,
  `pdesc` varchar(200) DEFAULT NULL,
  `pCatID` int(11) DEFAULT NULL,
  `PBrandID` int(11) DEFAULT NULL,
  `p_images` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `producttb`
--

INSERT INTO `producttb` (`pid`, `pname`, `pprice`, `pdesc`, `pCatID`, `PBrandID`, `p_images`) VALUES
(1, 'Men T-Shirt ', 800, 'best', 8, 6, 'tshirt.jfif'),
(2, 'Shirt', 1200, 'best', 2, 7, 'shirt.jfif'),
(3, 'Bags For Girls', 3000, 'mochila de couro feminina rosa\r\nFind this Pin and more on School bags for girls by Nivedita.', 4, 13, 'bags.webp'),
(4, 'Shirt For Men', 600, 'mochila de couro feminina rosa\r\nFind this Pin and more on School bags for girls by Nivedita.', 2, 7, 'shirts.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brandtb`
--
ALTER TABLE `brandtb`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `categorytb`
--
ALTER TABLE `categorytb`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `producttb`
--
ALTER TABLE `producttb`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `pCatID` (`pCatID`),
  ADD KEY `PBrandID` (`PBrandID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brandtb`
--
ALTER TABLE `brandtb`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `categorytb`
--
ALTER TABLE `categorytb`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `producttb`
--
ALTER TABLE `producttb`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `producttb`
--
ALTER TABLE `producttb`
  ADD CONSTRAINT `producttb_ibfk_1` FOREIGN KEY (`pCatID`) REFERENCES `categorytb` (`cid`),
  ADD CONSTRAINT `producttb_ibfk_2` FOREIGN KEY (`PBrandID`) REFERENCES `brandtb` (`bid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
