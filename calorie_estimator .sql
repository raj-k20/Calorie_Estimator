-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2017 at 12:46 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `calorie_estimator`
--

-- --------------------------------------------------------

--
-- Table structure for table `calorie_content_history`
--

CREATE TABLE `calorie_content_history` (
  `username` varchar(30) NOT NULL,
  `date` varchar(15) NOT NULL,
  `calorie` decimal(10,2) NOT NULL,
  `filename` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calorie_content_history`
--

INSERT INTO `calorie_content_history` (`username`, `date`, `calorie`, `filename`) VALUES
('aacharyadeepak100', '13/03/2017', '1522.32', 'WIN_20151201_131736.JPG'),
('ssk', '28/03/2017', '0.00', 'zzbbd.jpg'),
('ssk', '28/03/2017', '521.00', 'zzbbd.jpg'),
('raashid', '28/03/2017', '521.00', 'zzimg_1857.jpg'),
('ssk', '28/03/2017', '521.00', 'zzimg_1857.jpg'),
('raashid', '28/03/2017', '521.00', 'zzbbd.jpg'),
('raashid', '28/03/2017', '787.00', 'zzimg_2656.jpg'),
('raashid', '28/03/2017', '0.00', ''),
('raashid', '28/03/2017', '510.00', 'zzfew.jpg'),
('raashid', '28/03/2017', '787.00', 'unnamed.png'),
('raashid', '28/03/2017', '787.00', 'zzft.jpg'),
('raashid', '28/03/2017', '510.00', 'zzimg_1862.jpg'),
('raashid', '28/03/2017', '0.00', ''),
('raashid', '28/03/2017', '0.00', ''),
('raashid', '28/03/2017', '521.00', 'zzimg_1855.jpg'),
('raashid', '29/03/2017', '510.00', 'zzgh.jpg'),
('ssk', '29/03/2017', '510.00', 'zzfew.jpg'),
('ssk', '29/03/2017', '510.00', 'zzimg_1865.jpg'),
('ads123', '29/03/2017', '425.00', 'zzery.jpg'),
('raashid', '29/03/2017', '510.00', 'zzimg_1862.jpg'),
('raashid', '29/03/2017', '425.00', 'zzery.jpg'),
('raashid', '30/03/2017', '425.00', 'zziu.jpg'),
('raashid', '30/03/2017', '787.00', 'zzimg_1818.jpg'),
('raashid', '31/03/2017', '521.00', 'zzimg_1859.jpg'),
('ssk', '31/03/2017', '521.00', 'zzimg_1857.jpg'),
('ssk', '31/03/2017', '787.00', 'zzimg_2657.jpg'),
('raashid', '01/04/2017', '510.00', 'zzimg_1867.jpg'),
('raashid', '01/04/2017', '425.00', 'zziop.jpg'),
('raashid', '02/04/2017', '425.00', 'zzpoi.jpg'),
('raashid', '02/04/2017', '510.00', 'zzimg_1863.jpg'),
('raashid', '02/04/2017', '787.00', 'zzimg_1818.jpg'),
('raashid', '03/04/2017', '0.00', ''),
('raashid', '03/04/2017', '510.00', 'zzimg_2645.jpg'),
('raashid', '03/04/2017', '510.00', 'zzimg_1863.jpg'),
('raashid', '06/04/2017', '510.00', 'zzimg_2645.jpg'),
('ssk', '06/04/2017', '0.00', 'zzgh.jpg'),
('ssk', '06/04/2017', '510.00', 'zzgh.jpg'),
('ssk', '06/04/2017', '510.00', 'zzimg_1864.jpg'),
('ssk', '06/04/2017', '510.00', 'zzimg_2645.jpg'),
('ssk', '06/04/2017', '510.00', 'zzimg_1865.jpg'),
('ssk', '06/04/2017', '510.00', 'zzimg_2646.jpg'),
('ssk', '06/04/2017', '521.00', 'zzimg_1856.jpg'),
('ssk', '06/04/2017', '510.00', 'circuitLogo_nitk_1449464434.jpg'),
('ssk', '06/04/2017', '510.00', 'zzimg_1863.jpg'),
('ssk', '06/04/2017', '510.00', 'zzimg_2646.jpg'),
('ssk', '06/04/2017', '787.00', 'zzft.jpg'),
('ssk', '06/04/2017', '787.00', 'zzimg_2657.jpg'),
('ssk', '06/04/2017', '787.00', 'zzimg_2657.jpg'),
('ssk', '06/04/2017', '510.00', 'zzfew.jpg'),
('ssk', '06/04/2017', '510.00', 'zzgttg.jpg'),
('ssk', '06/04/2017', '787.00', 'zzimg_1818.jpg'),
('ssk', '06/04/2017', '510.00', 'zzgh.jpg'),
('ssk', '06/04/2017', '510.00', 'zzimg_2646.jpg'),
('ssk', '06/04/2017', '510.00', 'zzimg_2646.jpg'),
('ssk', '07/04/2017', '425.00', 'zziu.jpg'),
('ssk', '07/04/2017', '425.00', 'zzrotated_1ery.jpg'),
('ssk', '07/04/2017', '787.00', 'zzft.jpg'),
('ssk', '07/04/2017', '787.00', 'zzimg_2657.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `dailytable`
--

CREATE TABLE `dailytable` (
  `ddate` varchar(30) DEFAULT NULL,
  `dcl` varchar(50) DEFAULT NULL,
  `userid` varchar(59) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dailytable`
--

INSERT INTO `dailytable` (`ddate`, `dcl`, `userid`) VALUES
('06/04/2017', 'Chicken_fillet_crispy_\n', 'ssk'),
('06/04/2017', 'Chicken_fillet_crispy_\n', 'ssk'),
('06/04/2017', 'Classic_italian_toasted_sub_\n', 'ssk'),
('06/04/2017', 'Classic_italian_toasted_sub_\n', 'ssk'),
('06/04/2017', 'Classic_italian_toasted_sub_\n', 'ssk'),
('06/04/2017', 'Chicken_fillet_crispy_\n', 'ssk'),
('06/04/2017', 'Chicken_fillet_crispy_\n', 'ssk'),
('06/04/2017', 'Classic_italian_toasted_sub_\n', 'ssk'),
('06/04/2017', 'Chicken_fillet_crispy_\n', 'ssk'),
('06/04/2017', 'Chicken_fillet_crispy_\n', 'ssk'),
('06/04/2017', 'Chicken_fillet_crispy_\n', 'ssk'),
('07/04/2017', 'Chicken_club_\n', 'ssk'),
('07/04/2017', 'Chicken_club_\n', 'ssk'),
('07/04/2017', 'Classic_italian_toasted_sub_\n', 'ssk'),
('07/04/2017', 'Classic_italian_toasted_sub_\n', 'ssk');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `name` varchar(25) NOT NULL,
  `calorie` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`name`, `calorie`) VALUES
('Medium curly fries ', 397),
('Classic italian toasted ', 787),
('Beef n cheddar   ', 445),
('Bacon Beef cheddar ', 521),
('Chicken club ', 425),
('Roasted Turkey', 708),
('Bavarian kreme', 250),
('Philly Beef sub', 739);

-- --------------------------------------------------------

--
-- Table structure for table `perday`
--

CREATE TABLE `perday` (
  `username` varchar(50) NOT NULL,
  `date` varchar(15) NOT NULL,
  `calorie` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perday`
--

INSERT INTO `perday` (`username`, `date`, `calorie`) VALUES
('raashid', '29/03/2017', 935),
('raashid', '30/03/2017', 1212),
('raashid', '31/03/2017', 1100),
('ssk', '31/03/2017', 1100),
('raashid', '01/04/2017', 935),
('raashid', '02/04/2017', 1722),
('raashid', '03/04/2017', 1020),
('raashid', '04/04/2017', 1200),
('raashid', '05/04/2017', 1300),
('raashid', '06/04/2017', 510),
('ssk', '06/04/2017', 10299),
('ssk', '07/04/2017', 2424);

-- --------------------------------------------------------

--
-- Table structure for table `registration_details`
--

CREATE TABLE `registration_details` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `height` decimal(10,2) NOT NULL,
  `weight` decimal(10,2) NOT NULL,
  `age` int(11) NOT NULL,
  `location` varchar(30) NOT NULL,
  `bmr` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration_details`
--

INSERT INTO `registration_details` (`name`, `email`, `username`, `password`, `height`, `weight`, `age`, `location`, `bmr`) VALUES
('Deepak Acharya', '14it210.deepak@nitk.edu.in', 'aacharyadeepak100', 'redminote3', '186.00', '73.00', 19, 'Hebri', 0),
('Adithya Bhat', 'dth.bht@gmail.com', 'adithyabhatkajake', 'dellip', '169.00', '68.00', 20, 'Yerlapady, Karkala', 0),
('S S Karan', 'amrithaskaran@gmail.com', 'ssk', 'hpsony', '180.00', '77.00', 20, 'Mangaluru', 1892.6),
('Raashid Alum', 'rashid.sts1@gmail.com', 'raashid', '123456', '154.00', '49.00', 20, 'Bihar', 1376.2),
('Rajesh ', 'rajeshkarunanidhi12@gmail.com', 'rajesh', '123456', '180.00', '71.00', 21, 'Mumbai', 0),
('Aditya kumar', 'ads@gmail.com', 'ads123', '123456', '165.00', '50.00', 21, 'Mangalore', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
