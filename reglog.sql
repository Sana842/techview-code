-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 21, 2023 at 05:10 AM
-- Server version: 5.7.36
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reglog`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
CREATE TABLE IF NOT EXISTS `registration` (
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `rollno` int(56) NOT NULL,
  `addr` varchar(60) NOT NULL,
  `contact` int(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `regid` int(4) NOT NULL AUTO_INCREMENT,
  `password` varchar(122) NOT NULL,
  PRIMARY KEY (`regid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`firstname`, `lastname`, `rollno`, `addr`, `contact`, `email`, `regid`, `password`) VALUES
('sana', 'shaikh', 32, 'pune', 234243453, 'abc@gmail.com', 1, '123345'),
('Rehana', 'Shaikh', 3, 'pune', 35434323, 'abc@gmail.com', 2, '1234'),
('Rehana', 'Shaikh', 21, 'pune', 35434323, 'mus123@gmail.com', 3, '12347'),
('Jyoti ', 'Yadav', 44, 'pune', 35434323, 'kh123@gmail.com', 4, '7865');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
