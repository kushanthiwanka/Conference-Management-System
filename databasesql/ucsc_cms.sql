-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2015 at 05:22 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ucsc_cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `research_paper`
--

CREATE TABLE IF NOT EXISTS `research_paper` (
  `PaperID` int(5) NOT NULL AUTO_INCREMENT,
  `AuthorMail` varchar(30) NOT NULL,
  `PaperTitle` varchar(50) NOT NULL,
  `KeyWords` varchar(80) NOT NULL,
  `Catagory` varchar(20) NOT NULL,
  `Date` date NOT NULL,
  `PathOfPaper` varchar(50) NOT NULL,
  PRIMARY KEY (`PaperTitle`),
  UNIQUE KEY `PaperID` (`PaperID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `research_paper`
--

INSERT INTO `research_paper` (`PaperID`, `AuthorMail`, `PaperTitle`, `KeyWords`, `Catagory`, `Date`, `PathOfPaper`) VALUES
(41, '', '', '', '', '2014-10-27', '../final/papers/.php'),
(39, 'krishnamala0908@gmail.com', 'hello', 'mala', 'operatingSystem', '2014-10-27', '../final/papers/hello.php');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
