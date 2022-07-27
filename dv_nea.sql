-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 05, 2022 at 05:59 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dv_nea`
--

-- --------------------------------------------------------

--
-- Table structure for table `payment_method`
--

CREATE TABLE IF NOT EXISTS `payment_method` (
  `payment_id` int(11) NOT NULL,
  `Payment_Name` varchar(100) NOT NULL,
  `Status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_method`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_branch`
--

CREATE TABLE IF NOT EXISTS `tbl_branch` (
  `branch_id` int(100) NOT NULL AUTO_INCREMENT,
  `branch_name` varchar(100) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  PRIMARY KEY (`branch_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_branch`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE IF NOT EXISTS `tbl_customer` (
  `SC_No` varchar(100) NOT NULL,
  `Customer_id` int(100) NOT NULL,
  `Customer_ fullname` varchar(100) NOT NULL,
  `Demand_type` int(100) NOT NULL,
  `Branch_ID` int(100) NOT NULL,
  `Mobile_no` varchar(100) NOT NULL,
  PRIMARY KEY (`SC_No`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_customer`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_customerbill`
--

CREATE TABLE IF NOT EXISTS `tbl_customerbill` (
  `Bill_id` int(11) NOT NULL AUTO_INCREMENT,
  `SC_no` int(11) NOT NULL,
  `Date_of_reading` date NOT NULL,
  `curr_reading` date NOT NULL,
  `Prev_Month` date NOT NULL,
  `bill_month` varchar(100) NOT NULL,
  `bill_year` varchar(100) NOT NULL,
  `bill_amount` decimal(10,0) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  PRIMARY KEY (`Bill_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_customerbill`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer_payment`
--

CREATE TABLE IF NOT EXISTS `tbl_customer_payment` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `Sc_no` varchar(100) NOT NULL,
  `bill_id` int(11) NOT NULL,
  `bill_amt` decimal(10,0) NOT NULL,
  `rebate` decimal(10,0) NOT NULL,
  `penalty` decimal(10,0) NOT NULL,
  `payment_method_id` int(11) NOT NULL,
  `payment_amount` decimal(10,0) NOT NULL,
  `payment_date` date NOT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_customer_payment`
--


-- --------------------------------------------------------

--
-- Table structure for table `tbl_demandtype`
--

CREATE TABLE IF NOT EXISTS `tbl_demandtype` (
  `Demand_id` int(11) NOT NULL AUTO_INCREMENT,
  `Demand_name` varchar(100) NOT NULL,
  PRIMARY KEY (`Demand_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tbl_demandtype`
--

