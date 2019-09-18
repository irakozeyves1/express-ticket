-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 06, 2016 at 07:13 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bus_mngmt`
--

-- --------------------------------------------------------

--
-- Table structure for table `gar`
--

CREATE TABLE IF NOT EXISTS `gar` (
  `cr_id` int(20) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `cr_type` varchar(20) NOT NULL,
  `plac` varchar(20) NOT NULL,
  PRIMARY KEY (`cr_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `gar`
--

INSERT INTO `gar` (`cr_id`, `date`, `cr_type`, `plac`) VALUES
(1, '2016-05-21 20:17:28', 'scania', 'A24');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE IF NOT EXISTS `manager` (
  `manId` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`manId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`manId`, `username`, `password`) VALUES
(1, 'Henriette ', 'Henriette ');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE IF NOT EXISTS `ticket` (
  `t_id` int(20) NOT NULL AUTO_INCREMENT,
  `date` varchar(20) NOT NULL,
  `tr_names` varchar(40) NOT NULL,
  `time` time NOT NULL,
  `destination` varchar(20) NOT NULL,
  `price` int(20) NOT NULL,
  `cr_id` int(20) NOT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`t_id`, `date`, `tr_names`, `time`, `destination`, `price`, `cr_id`) VALUES
(1, '2016-05-21 21:24:10', 'mutara', '10:20:30', 'Kigal-Karongi', 2500, 1);

-- --------------------------------------------------------

--
-- Table structure for table `worker`
--

CREATE TABLE IF NOT EXISTS `worker` (
  `w_id` int(20) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `w_fname` varchar(20) NOT NULL,
  `w_lname` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `salary` int(20) NOT NULL,
  PRIMARY KEY (`w_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `worker`
--

INSERT INTO `worker` (`w_id`, `date`, `w_fname`, `w_lname`, `address`, `gender`, `telephone`, `salary`) VALUES
(1, '2016-05-21', 'muknzi', 'rage', 'rubavu', 'Male', '078356753', 100000);
