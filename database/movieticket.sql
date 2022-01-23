-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 19, 2018 at 03:47 PM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `movietickect`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE IF NOT EXISTS `adminlogin` (
  `adminid` int(5) NOT NULL AUTO_INCREMENT,
  `adminemail` varchar(50) NOT NULL,
  `adminpassword` varchar(50) NOT NULL,
  PRIMARY KEY (`adminid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`adminid`, `adminemail`, `adminpassword`) VALUES
(6, 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `contid` int(5) NOT NULL AUTO_INCREMENT,
  `contname` varchar(50) NOT NULL,
  `contemail` varchar(50) NOT NULL,
  `contmobile` varchar(20) NOT NULL,
  `contaddress` varchar(50) NOT NULL,
  `contmassage` varchar(200) NOT NULL,
  `contdatetime` varchar(20) NOT NULL,
  PRIMARY KEY (`contid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contid`, `contname`, `contemail`, `contmobile`, `contaddress`, `contmassage`, `contdatetime`) VALUES
(1, 'sadhwi mishra', 'sadhwimishra30@gmail.com', '12345678', 'ballia', 'asdfghjk', '03/08/18 04:09:43pm'),
(2, 'Aditya Sharma', 'Adit@gmail.com', '9453817014', 'ballia', 'this website is best website', '28/08/18 03:59:13pm');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `logid` int(5) NOT NULL AUTO_INCREMENT,
  `logemail` varchar(50) NOT NULL,
  `logpassword` varchar(50) NOT NULL,
  `logdatetime` varchar(20) NOT NULL,
  `logoutdatetime` varchar(20) NOT NULL,
  `logstatus` varchar(10) NOT NULL,
  PRIMARY KEY (`logid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`logid`, `logemail`, `logpassword`, `logdatetime`, `logoutdatetime`, `logstatus`) VALUES
(11, 'Adit@gmail.com', '12345', '20/10/18 11:36:45am', '20/10/18 11:36:24am', 'true'),
(10, 'gs1234@gmail.com', '12345', '03/08/18 04:59:43pm', '03/08/18 04:12:31pm', 'true'),
(9, 'gs', '', '', '', ''),
(8, 'gopal@gmail.com', '12345', '03/08/18 03:48:28pm', '03/08/18 03:48:48pm', 'false'),
(12, 'sh1234@gmaio.com', '12345', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `movieticket`
--

CREATE TABLE IF NOT EXISTS `movieticket` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `city` varchar(50) NOT NULL,
  `theatername` varchar(50) NOT NULL,
  `theatertype` varchar(30) NOT NULL,
  `moviename` varchar(100) NOT NULL,
  `movietype` varchar(50) NOT NULL,
  `timings` varchar(20) NOT NULL,
  `datetime` varchar(20) NOT NULL,
  `shows` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `movieticket`
--

INSERT INTO `movieticket` (`id`, `city`, `theatername`, `theatertype`, `moviename`, `movietype`, `timings`, `datetime`, `shows`) VALUES
(2, '', '', '', '', '', '', '03/08/18 07:11:18pm', ''),
(3, 'kanpur', 'kanpur theater:kanpur', 'upperclass', '2D', 'gold', '2:30am to 4:30am', '03/08/18 07:11:40pm', 'afternoon');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `regid` int(5) NOT NULL AUTO_INCREMENT,
  `regname` varchar(50) NOT NULL,
  `regemail` varchar(50) NOT NULL,
  `regpassword` varchar(50) NOT NULL,
  `regmobile` varchar(15) NOT NULL,
  `reggender` varchar(20) NOT NULL,
  `regcity` varchar(20) NOT NULL,
  `regaddress` varchar(50) NOT NULL,
  `regdatetime` varchar(20) NOT NULL,
  PRIMARY KEY (`regid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`regid`, `regname`, `regemail`, `regpassword`, `regmobile`, `reggender`, `regcity`, `regaddress`, `regdatetime`) VALUES
(1, 'sadhwi mishra', 'sadhwimishra30@gmail.com', '12345', '1234567', 'female', 'Lucknow', 'ballia', '11:15:28am'),
(2, 'sadhwi mishra', 'js5161940@gmail.com', '123', '09098989', 'female', 'Lucknow', 'kjj', '29/07/18 03:26:09am'),
(3, 'sadhwi mishra', 'js5161940@gmail.com', '7777', '09098989', 'female', 'Lucknow', 'kjj', '29/07/18 03:26:22am'),
(4, '', '', '', '', '', 'city', '', '31/07/18 02:12:55pm'),
(5, 'sadhwi mishra', 'sadhwimishra30@gmail.com', '123456', '1234567890', 'female', 'Lucknow', 'ballia', '01/08/18 11:06:02pm'),
(6, 'Abhishek sharma', 'abhi43@gmail.com', '1234', '1234567890', 'male', 'Lucknow', 'ballia', '01/08/18 11:07:45pm'),
(7, 'jyoti sharma', 'js5161940@gmail.com', '1234', '1234567890', 'female', 'Ballia', 'ballia', '02/08/18 07:35:15pm'),
(8, 'gopal singh', 'gopal@gmail.com', '12345', '987654321', 'male', 'Lucknow', 'kapoorthala', '02/08/18 08:03:54pm'),
(10, 'Gauri soni', 'gs1234@gmail.com', '12345', '1234567890', 'female', 'Ballia', 'ballia', '03/08/18 04:11:42pm'),
(11, 'Aditya Sharma', 'Adit@gmail.com', '12345', '123456789', 'male', 'Ballia', 'Ballia ', '28/08/18 03:53:25pm'),
(12, 'shreya pandy', 'sh1234@gmaio.com', '12345', '1234567890', 'female', 'Ballia', 'rampur ballia', '20/10/18 11:22:46am');
