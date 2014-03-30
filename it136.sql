-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 30, 2014 at 02:05 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `it136`
--
CREATE DATABASE IF NOT EXISTS `it136` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `it136`;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `cus_id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `cus_contact` varchar(20) NOT NULL,
  `cus_email` varchar(255) NOT NULL,
  `cus_username` varchar(15) NOT NULL,
  `cus_password` varchar(255) NOT NULL,
  `cus_fname` varchar(50) NOT NULL,
  `cus_lname` varchar(50) NOT NULL,
  PRIMARY KEY (`cus_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cus_id`, `cus_contact`, `cus_email`, `cus_username`, `cus_password`, `cus_fname`, `cus_lname`) VALUES
(0000000001, '123', 's@s.com', 's', '03c7c0ace395d80182db07ae2c30f034', 's', 's');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `emp_id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `emp_contact` varchar(20) NOT NULL,
  `emp_email` varchar(255) NOT NULL,
  `emp_username` varchar(15) NOT NULL,
  `emp_password` varchar(255) NOT NULL,
  `emp_fname` varchar(50) NOT NULL,
  `emp_lname` varchar(50) NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `emp_contact`, `emp_email`, `emp_username`, `emp_password`, `emp_fname`, `emp_lname`) VALUES
(0000000002, '+639339202815', 'xanpatan@gmail.com', 'sa', 'c12e01f2a13ff5587e1e9e4aedb8242d', 'Sean Patrick', 'Tan'),
(0000000003, '123', 'sample@sample.com', 'sample', '5e8ff9bf55ba3508199d22e984129be6', 'sample', 'sample'),
(0000000004, '456', 'test@test.com', 'test', '098f6bcd4621d373cade4e832627b4f6', 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE IF NOT EXISTS `invoice` (
  `inv_id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `inv_date` varchar(255) NOT NULL,
  `inv_time` varchar(255) NOT NULL,
  PRIMARY KEY (`inv_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE IF NOT EXISTS `movie` (
  `m_id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `m_title` varchar(255) NOT NULL,
  `m_genre` enum('Action','Animation','Comedy','Fantasy','Horror','Drama') NOT NULL,
  `m_status` enum('Available','Reserved') NOT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`m_id`, `m_title`, `m_genre`, `m_status`) VALUES
(0000000001, 'Insidious 2', 'Horror', 'Available'),
(0000000002, 'Hangover 3', 'Comedy', 'Available'),
(0000000003, 'Man of Taichi', 'Action', 'Reserved'),
(0000000004, 'G.I. Joe Retaliation', 'Action', 'Available'),
(0000000005, 'The Smurfs', 'Animation', 'Available'),
(0000000006, 'World War Z', 'Fantasy', 'Reserved'),
(0000000007, 'After Earth', 'Fantasy', 'Available'),
(0000000008, 'This is the End', 'Comedy', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `rm_no` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `rm_size` enum('Medium','Large','VIP','KTV') NOT NULL,
  `rm_status` enum('Available','Reserved') NOT NULL,
  PRIMARY KEY (`rm_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`rm_no`, `rm_size`, `rm_status`) VALUES
(0000000001, 'Medium', 'Available'),
(0000000002, 'Large', 'Available'),
(0000000003, 'VIP', 'Available'),
(0000000004, 'KTV', 'Reserved');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE IF NOT EXISTS `transaction` (
  `tr_id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `rm_NO` int(10) unsigned zerofill NOT NULL,
  `inv_ID` int(10) unsigned zerofill NOT NULL,
  `cus_ID` int(10) unsigned zerofill NOT NULL,
  `emp_ID` int(10) unsigned zerofill NOT NULL,
  `m_ID` int(10) unsigned zerofill NOT NULL,
  PRIMARY KEY (`tr_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
