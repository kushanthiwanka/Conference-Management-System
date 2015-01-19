-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2015 at 12:01 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ucsc_conf`
--
CREATE DATABASE IF NOT EXISTS `ucsc_conf` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ucsc_conf`;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(10) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `middle_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(1) NOT NULL,
  `country` varchar(60) NOT NULL,
  `postal_address` varchar(150) NOT NULL,
  `postal_code` varchar(12) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` tinytext NOT NULL,
  `fax` tinytext NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `confirm_password` varchar(20) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email_address` (`email_address`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`user_id`, `title`, `first_name`, `middle_name`, `last_name`, `date_of_birth`, `gender`, `country`, `postal_address`, `postal_code`, `email_address`, `email`, `phone_number`, `fax`, `username`, `password`, `confirm_password`) VALUES
(2, 'Mr.', 'Menuka', '', 'Ishan ', '1991-03-16', 'M', 'Sri Lanka', '"Meth Niwasa",\r\nGandara', '81000', 'menuka@gmail.com', '', '0712721889', '', 'shadow', 'shadow123', 'shadow123'),
(4, 'Rev.', 'test1', '', 'last1 ', '1991-12-01', 'M', 'Iceland', '"jdksjk", No 2, Gandara, pravda.', '78028922', 'test1@gmail.com', '', '0921892973288', '0913884399002', 'testme', 'password', 'password'),
(6, 'Rev.', 'test2', 'Middle1', 'last2 ', '1992-07-01', 'F', 'Sri Lanka', 'kohuwala, colombo', '01029201', 'test12@gmail.com', '', '0712346789', '0712346789', 'testme2', 'password123', 'password123');

-- --------------------------------------------------------

--
-- Table structure for table `research_paper`
--

CREATE TABLE IF NOT EXISTS `research_paper` (
  `PaperID` int(5) NOT NULL AUTO_INCREMENT,
  `AuthorMail` varchar(30) NOT NULL,
  `PaperTitle` varchar(50) NOT NULL,
  `KeyWords` varchar(80) NOT NULL,
  `Date` date NOT NULL,
  `PathOfPaper` varchar(50) NOT NULL,
  `mark` int(3) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `assignedReveiwer` varchar(5) NOT NULL,
  `firstName` varchar(250) NOT NULL,
  `middleName` varchar(250) NOT NULL,
  `lastName` varchar(250) NOT NULL,
  `organization` varchar(250) NOT NULL,
  `country` varchar(250) NOT NULL,
  `topicAriea` varchar(250) NOT NULL,
  `keyWord` varchar(250) NOT NULL,
  `abstract` varchar(250) NOT NULL,
  `optionalComment` varchar(250) NOT NULL,
  `contactName` varchar(250) NOT NULL,
  `contactEmail` varchar(250) NOT NULL,
  `contactNumber` int(11) NOT NULL,
  PRIMARY KEY (`PaperTitle`),
  UNIQUE KEY `PaperID` (`PaperID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `research_paper`
--

INSERT INTO `research_paper` (`PaperID`, `AuthorMail`, `PaperTitle`, `KeyWords`, `Date`, `PathOfPaper`, `mark`, `comment`, `assignedReveiwer`, `firstName`, `middleName`, `lastName`, `organization`, `country`, `topicAriea`, `keyWord`, `abstract`, `optionalComment`, `contactName`, `contactEmail`, `contactNumber`) VALUES
(41, '', '', '', '2014-10-27', '../final/papers/.php', 70, '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(1, 'krishanlakmla', 'English', '', '2015-01-01', '', 70, 'fuk u man', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(39, 'krishnamala0908@gmail.com', 'hello', 'mala', '2014-10-27', '../final/papers/hello.php', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_level`
--

CREATE TABLE IF NOT EXISTS `user_level` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_level`
--

INSERT INTO `user_level` (`id`, `name`) VALUES
(1, 'manager'),
(2, 'author'),
(3, 'reviewer');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
