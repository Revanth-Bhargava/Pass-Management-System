-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 27, 2020 at 04:54 AM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int NOT NULL AUTO_INCREMENT,
  `password` varchar(25) NOT NULL,
  `name` text NOT NULL,
  `username` varchar(25) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=102 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `password`, `name`, `username`) VALUES
(100, 'shelly1144', 'sheldon cooper', 'sheldon@1144'),
(101, 'lenny1989', 'lenord hofstader', 'lenord@1989');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

DROP TABLE IF EXISTS `attendance`;
CREATE TABLE IF NOT EXISTS `attendance` (
  `date` date NOT NULL,
  `labour` int NOT NULL,
  `technician` int NOT NULL,
  `electrician` int NOT NULL,
  `engineer` int NOT NULL,
  `total` int NOT NULL,
  PRIMARY KEY (`date`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`date`, `labour`, `technician`, `electrician`, `engineer`, `total`) VALUES
('2020-10-16', 3, 3, 4, 3, 13),
('2020-10-17', 4, 4, 4, 2, 14),
('2020-10-18', 4, 4, 5, 4, 17),
('2020-10-13', 3, 5, 2, 2, 12);

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

DROP TABLE IF EXISTS `details`;
CREATE TABLE IF NOT EXISTS `details` (
  `worker_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `post` varchar(15) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(15) NOT NULL,
  `address` text NOT NULL,
  PRIMARY KEY (`worker_id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`worker_id`, `name`, `username`, `password`, `post`, `dob`, `gender`, `address`) VALUES
(1, 'Albralelie', 'albra@123', 'albra123', 'Engineer', '1995-08-02', 'male', '95 Logan Road\r\nStillwater, MN 55082'),
(2, 'Divya', 'divya@1431', 'divya1431', 'Engineer', '1995-10-02', 'female', '71 Summerhouse Road\r\nBay Shore, NY 11706'),
(3, 'Prabu', 'prabu@1194', 'prabu1194', 'Engineer', '1993-11-02', 'male', '81 Kent St.\r\nEuless, TX 76039'),
(4, 'Imperialhal', 'imperial@1177', 'imperial1177', 'Engineer', '1995-08-10', 'male', '29 Spring Street\r\nGroton, CT 06340'),
(5, 'Brandon will', 'brandon@1243', 'brandon1243', 'Engineer', '1993-12-02', 'male', '920 Poplar St.\r\nGulfport, MS 39503'),
(6, 'Lindsey leila', 'lindsey@6969', 'lindsey6969', 'Electrician', '1993-09-02', 'female', '80 Creekside Dr.\r\nPickerington, OH 43147'),
(7, 'Michael paul', 'michael@3344', 'michael3344', 'Electrician', '1995-08-10', 'male', '379 E. Park Dr.\r\nPearl, MS 39208\r\n'),
(8, 'Jackson dave', 'jackson@7765', 'jackson@7765', 'Electrician', '1990-11-02', 'male', '14 East Primrose St.\r\nAtwater, CA 95301'),
(9, 'Marcques', 'marcques@6565', 'marcques@6565', 'Electrician', '1995-10-13', 'male', '5 Valley Dr.\r\nHelena, MT 59601'),
(10, 'Paul sami', 'paul@1009', 'paul1009', 'Electrician', '1993-07-02', 'male', '724 Illinois Ave.\r\nTualatin, OR 97062'),
(11, 'Marzia pie', 'marzia@3869', 'marzia@3869', 'Technician', '1993-01-02', 'female', '4 Wellington Ave.\r\nBarberton, OH 44203'),
(12, 'Preethi suresh', 'preethi@5123', 'preethi5123', 'Technician', '1995-04-02', 'female', '992 Baker St.\r\nStaunton, VA 24401'),
(13, 'Sasikala murthy', 'sasikala@9696', 'sasi9696', 'Labour', '1995-07-10', 'female', '79 Lancaster Rd.\r\nSomerset, NJ 08873'),
(14, 'Selena pandy', 'selena@4413', 'selena4413', 'Technician', '1993-03-02', 'female', '65 Hill St.\r\nMableton, GA 30126'),
(15, 'Ishwarya velu', 'ishwarya@3982', 'ishu@3982', 'Technician', '1995-12-10', 'female', '5 Strawberry St.\r\nAnnapolis, MD 21401'),
(16, 'Murugan frexs', 'murugan@2312', 'muru2312', 'Labour', '1993-03-02', 'male', '45 Saxton Road\r\nEaston, PA 18042'),
(17, 'Daniel davis', 'daniel@3957', 'daniel3957', 'Technician', '1990-08-10', 'male', '7161 Albany St.\r\nBiloxi, MS 39532'),
(18, 'Jessica jones', 'jessica@4090', 'jess4090', 'Labour', '1989-08-10', 'female', '7995 Orange St.\r\nParkersburg, WV 26101'),
(19, 'Bryce walker', 'bryce@2233', 'bryce2233', 'Labour', '1987-11-10', 'male', '308 3rd Avenue\r\nAmes, IA 50010'),
(20, 'Tony padilla', 'tony@5115', 'tony5115', 'Labour', '1985-03-10', 'male', '9491 Bradford St.\r\nNew Windsor, NY 12553');

-- --------------------------------------------------------

--
-- Table structure for table `guard`
--

DROP TABLE IF EXISTS `guard`;
CREATE TABLE IF NOT EXISTS `guard` (
  `guard_id` int NOT NULL AUTO_INCREMENT,
  `password` varchar(25) NOT NULL,
  `name` text NOT NULL,
  `username` varchar(25) NOT NULL,
  PRIMARY KEY (`guard_id`)
) ENGINE=MyISAM AUTO_INCREMENT=202 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guard`
--

INSERT INTO `guard` (`guard_id`, `password`, `name`, `username`) VALUES
(200, 'mike1342', 'mike john', 'mike@1342'),
(201, 'kelvin9900', 'kelvin james', 'kelvin@9900');

-- --------------------------------------------------------

--
-- Table structure for table `pay`
--

DROP TABLE IF EXISTS `pay`;
CREATE TABLE IF NOT EXISTS `pay` (
  `role` varchar(20) NOT NULL,
  `pay` int NOT NULL,
  PRIMARY KEY (`role`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pay`
--

INSERT INTO `pay` (`role`, `pay`) VALUES
('Engineer', 2000),
('Electrician', 1500),
('Technician', 1750),
('Labour', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `renewal`
--

DROP TABLE IF EXISTS `renewal`;
CREATE TABLE IF NOT EXISTS `renewal` (
  `worker_id` int NOT NULL,
  `name` varchar(30) NOT NULL,
  `post` varchar(20) NOT NULL,
  PRIMARY KEY (`worker_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `working_days`
--

DROP TABLE IF EXISTS `working_days`;
CREATE TABLE IF NOT EXISTS `working_days` (
  `worker_id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `days worked` int NOT NULL,
  PRIMARY KEY (`worker_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `working_days`
--

INSERT INTO `working_days` (`worker_id`, `name`, `days worked`) VALUES
(1, 'Albralelie', 29),
(2, 'Divya', 27),
(3, 'Prabu', 25),
(4, 'Imperialhal', 29),
(5, 'Brandon will', 29),
(6, 'Lindsey leila', 28),
(7, 'Michael paul', 27),
(8, 'Jackson dave', 28),
(9, 'Marcques', 24),
(10, 'Paul sami', 26),
(11, 'Marzia pie', 26),
(12, 'Preethi suresh', 29),
(13, 'Sasikala murthy', 29),
(14, 'Selena pandy', 28),
(15, 'Ishwarya velu', 27),
(16, 'Murugan frexs', 23),
(17, 'Daniel davis', 28),
(18, 'Jessica jones', 29),
(19, 'Bryce walker', 28),
(20, 'Tony padilla', 27);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
