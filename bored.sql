-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2014 at 03:14 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bored`
--

-- --------------------------------------------------------

--
-- Table structure for table `bored`
--

CREATE TABLE IF NOT EXISTS `bored` (
  `total` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bored`
--

INSERT INTO `bored` (`total`) VALUES
(200);

-- --------------------------------------------------------

--
-- Table structure for table `clicktimes`
--

CREATE TABLE IF NOT EXISTS `clicktimes` (
  `timestamp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clicktimes`
--

INSERT INTO `clicktimes` (`timestamp`) VALUES
('Sun, 29 Jun 2014 16:13:38 GMT'),
('Sun, 29 Jun 2014 16:27:13 GMT'),
('Sun, 29 Jun 2014 16:32:23 GMT'),
('Sun, 29 Jun 2014 16:34:50 GMT'),
('Sun, 29 Jun 2014 16:36:03 GMT'),
('Sun, 29 Jun 2014 16:36:42 GMT'),
('Sun, 29 Jun 2014 16:37:17 GMT'),
('Sun, 29 Jun 2014 16:38:14 GMT'),
('Sun, 29 Jun 2014 16:57:18 GMT'),
('Sun, 29 Jun 2014 17:22:30 GMT');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
