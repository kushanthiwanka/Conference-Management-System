-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2014 at 11:29 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ucscconf`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(8) NOT NULL,
  `password` varchar(8) NOT NULL,
  UNIQUE KEY `username` (`username`,`password`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `name` varchar(50) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `postal_address` varchar(50) NOT NULL,
  `date_of_birth` date NOT NULL,
  `phone_number` int(15) NOT NULL,
  `gender` text NOT NULL,
  `username` varchar(8) NOT NULL,
  `password` varchar(8) NOT NULL,
  `confirm_password` varchar(8) NOT NULL,
  `type` text NOT NULL,
  PRIMARY KEY (`email_address`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `email_address`, `postal_address`, `date_of_birth`, `phone_number`, `gender`, `username`, `password`, `confirm_password`, `type`) VALUES
('ghfgflg', 'dfggkdflgk@gmail.com', 'gjdhfkdf', '1990-12-04', 202121545, 'Male', 'jgfdkgds', '123456', '123456', 'Author'),
('kusha', 'kushab@gmail.com', '12', '0000-00-00', 714680797, 'Male', 'kushan', '123', '123', 'Author'),
('thiwanka', 'spkushan90@gmail.com', 'katumuluwa kanaththewewa', '1990-12-04', 714680797, 'Male', 'kushan', '123', '123', 'Author');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
