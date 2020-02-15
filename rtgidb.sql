-- phpMyAdmin SQL Dump
-- version 2.11.11.3
-- http://www.phpmyadmin.net
--
-- Host: 45.40.164.87
-- Generation Time: Feb 15, 2020 at 04:42 AM
-- Server version: 5.5.51
-- PHP Version: 5.1.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `rtgidb`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `cand_id` int(11) NOT NULL AUTO_INCREMENT,
  `cand_name` varchar(255) NOT NULL,
  `cand_mobile` varchar(255) NOT NULL,
  `cand_email` varchar(255) NOT NULL,
  `cand_pos` varchar(255) NOT NULL,
  `appl_date` date NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_type` varchar(255) NOT NULL,
  `file_size` double NOT NULL,
  `file_content` longblob NOT NULL,
  PRIMARY KEY (`cand_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10576 ;

-- --------------------------------------------------------

--
-- Table structure for table `online_payment`
--

CREATE TABLE `online_payment` (
  `pay_id` int(10) NOT NULL AUTO_INCREMENT,
  `vendor` varchar(255) NOT NULL,
  `curr_bal` double NOT NULL,
  `pay_amt` double NOT NULL,
  `pay_ref` varchar(50) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `post_by` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `verify_by` varchar(255) NOT NULL,
  `verify_date` date NOT NULL,
  `appr_by` varchar(255) NOT NULL,
  `appr_date` date NOT NULL,
  `process_by` varchar(255) NOT NULL,
  `process_date` date NOT NULL,
  `reject_by` varchar(255) NOT NULL,
  `reject_date` date NOT NULL,
  `reject_msg` varchar(255) NOT NULL,
  PRIMARY KEY (`pay_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(3) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `otp` varchar(6) NOT NULL,
  `access_level` varchar(6) NOT NULL,
  `action_level` varchar(255) NOT NULL,
  `user_status` varchar(20) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=175 ;
