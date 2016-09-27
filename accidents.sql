-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2016 at 07:53 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `accidents`
--

-- --------------------------------------------------------

--
-- Table structure for table `prone`
--

CREATE TABLE IF NOT EXISTS `prone` (
`ID` int(12) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `location` varchar(60) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prone`
--

INSERT INTO `prone` (`ID`, `latitude`, `longitude`, `location`) VALUES
(1, 15.0929081, 121.0613609, 'Jason');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE IF NOT EXISTS `report` (
`id` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `latitude` varchar(25) NOT NULL,
  `longitude` varchar(25) NOT NULL,
  `status` varchar(30) NOT NULL,
  `report_date` varchar(20) NOT NULL,
  `report_time` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `message`, `latitude`, `longitude`, `status`, `report_date`, `report_time`) VALUES
(1, 'Awwwwwwwww', '15.0929081', '121.0613609', 'Motor Accident', '2016', '10:34'),
(2, 'Awwwwwwwww', '14.8740942', '121.1427638', 'Car Accident', '2015', '1:25'),
(3, 'Awwwwwwwww', '14.760122', '121.2003971', 'Car Accident', '2012', '9:49'),
(4, 'Awwwwwwwww', '14.5772737', '121.0857342', 'Motor Accident', '2015', '8:52');

-- --------------------------------------------------------

--
-- Table structure for table `temporary`
--

CREATE TABLE IF NOT EXISTS `temporary` (
`id` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `latitude` varchar(30) NOT NULL,
  `longitude` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL,
  `report_date` varchar(20) NOT NULL,
  `report_time` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temporary`
--

INSERT INTO `temporary` (`id`, `message`, `latitude`, `longitude`, `status`, `report_date`, `report_time`) VALUES
(1, 'Awwwwwwwww', '15.0929081', '121.0613609', 'dadsa', '2015', '11:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `prone`
--
ALTER TABLE `prone`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temporary`
--
ALTER TABLE `temporary`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `prone`
--
ALTER TABLE `prone`
MODIFY `ID` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `temporary`
--
ALTER TABLE `temporary`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
