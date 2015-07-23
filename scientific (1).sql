-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2015 at 12:34 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `scientific`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrators`
--

CREATE TABLE IF NOT EXISTS `administrators` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `administrators`
--

INSERT INTO `administrators` (`id`, `username`, `password`) VALUES
(1, 'diego_webmaster', 'Nextgen2117'),
(2, 'genodx', 'Nextgen2117');

-- --------------------------------------------------------

--
-- Table structure for table `directory`
--

CREATE TABLE IF NOT EXISTS `directory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `methodology` varchar(255) NOT NULL,
  `performed` varchar(255) NOT NULL,
  `reported` varchar(255) NOT NULL,
  `specimen_req` varchar(255) NOT NULL,
  `cpt_code` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `directory`
--

INSERT INTO `directory` (`id`, `name`, `code`, `methodology`, `performed`, `reported`, `specimen_req`, `cpt_code`) VALUES
(1, 'Test Name', 'Test Code', 'Test methods', 'test performance', 'test reports', 'test specimens', 'test cpt codes'),
(2, 'ihuhuh', 'uhu', 'huh', 'uh', 'uh', 'uh', 'u'),
(3, '08098', '0980', '0', '9809', '8098', '098', '908'),
(4, 'joio', 'iuiu', 'oiu', 'oi', 'uoi', 'oi', 'uuoi'),
(5, 'Another', 'oifoiu', 'iouo', 'iuoi', 'uio', 'uio', 'u'),
(6, 'test name 2', 'iuoi', 'uuo', '0lkn', 'lkn', 'nlk', 'nlk');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
