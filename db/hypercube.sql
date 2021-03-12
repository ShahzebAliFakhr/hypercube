-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2020 at 08:40 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hypercube`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminusers`
--

CREATE TABLE `adminusers` (
  `u_id` int(11) NOT NULL,
  `u_username` varchar(100) NOT NULL,
  `u_password` varchar(100) NOT NULL,
  `u_created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminusers`
--

INSERT INTO `adminusers` (`u_id`, `u_username`, `u_password`, `u_created_at`) VALUES
(1, 'shahzaibalifakhr', '$2y$10$UAFRnpcFTCR5RhhyUiyCY.uE.iSkNIRNgeB1rvXpxOyeMAdn9maWq', '2019-10-22 10:52:40'),
(2, 'admin', '$2y$10$UAFRnpcFTCR5RhhyUiyCY.uE.iSkNIRNgeB1rvXpxOyeMAdn9maWq', '2019-10-23 19:50:39');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptionusers`
--

CREATE TABLE `subscriptionusers` (
  `u_id` int(11) NOT NULL,
  `u_email` varchar(255) NOT NULL,
  `u_subscribed_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userregister`
--

CREATE TABLE `userregister` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(255) DEFAULT NULL,
  `u_email` varchar(255) DEFAULT NULL,
  `u_phone` varchar(255) DEFAULT NULL,
  `u_2p` varchar(255) DEFAULT NULL,
  `u_2p_phone` varchar(255) DEFAULT NULL,
  `u_3p` varchar(255) DEFAULT NULL,
  `u_3p_phone` varchar(255) DEFAULT NULL,
  `u_4p` varchar(255) DEFAULT NULL,
  `u_4p_phone` varchar(255) DEFAULT NULL,
  `u_5p` varchar(255) DEFAULT NULL,
  `u_5p_phone` varchar(255) DEFAULT NULL,
  `u_6p` varchar(255) DEFAULT NULL,
  `u_6p_phone` varchar(255) DEFAULT NULL,
  `u_module` varchar(1000) DEFAULT NULL,
  `u_schoolname` varchar(255) DEFAULT NULL,
  `u_created_at` datetime DEFAULT current_timestamp(),
  `u_paymentoption` varchar(255) NOT NULL,
  `u_cnic` varchar(256) DEFAULT NULL,
  `u_image` text DEFAULT NULL,
  `u_p2cnic` varchar(256) DEFAULT NULL,
  `u_p2image` text DEFAULT NULL,
  `u_p3cnic` varchar(256) DEFAULT NULL,
  `u_p3image` text DEFAULT NULL,
  `u_p4cnic` varchar(256) DEFAULT NULL,
  `u_p4image` text DEFAULT NULL,
  `u_p5cnic` varchar(256) DEFAULT NULL,
  `u_p5image` text DEFAULT NULL,
  `u_p6cnic` varchar(256) DEFAULT NULL,
  `u_p6image` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminusers`
--
ALTER TABLE `adminusers`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `subscriptionusers`
--
ALTER TABLE `subscriptionusers`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `userregister`
--
ALTER TABLE `userregister`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminusers`
--
ALTER TABLE `adminusers`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subscriptionusers`
--
ALTER TABLE `subscriptionusers`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userregister`
--
ALTER TABLE `userregister`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
