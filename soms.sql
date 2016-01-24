-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2016 at 04:54 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `soms`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_department`
--

CREATE TABLE IF NOT EXISTS `tbl_department` (
  `id` int(11) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_department`
--

INSERT INTO `tbl_department` (`id`, `description`) VALUES
(1, 'Supply Office'),
(2, 'IT Department');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_material_list`
--

CREATE TABLE IF NOT EXISTS `tbl_material_list` (
  `id` int(11) NOT NULL,
  `description` varchar(50) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `quantity` decimal(11,2) NOT NULL,
  `mid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mat_desc`
--

CREATE TABLE IF NOT EXISTS `tbl_mat_desc` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `pid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mat_desc`
--

INSERT INTO `tbl_mat_desc` (`id`, `description`, `pid`) VALUES
(1, '7 Computers', 2),
(2, '7 Tables', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_party`
--

CREATE TABLE IF NOT EXISTS `tbl_party` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `department` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_party`
--

INSERT INTO `tbl_party` (`id`, `firstname`, `middlename`, `lastname`, `address`, `contact`, `email`, `department`) VALUES
(1, 'Admin', 'F', 'Supply', 'Carigara, Leyte', '09172580624', 'sonitgregorio@gmail.com', 1),
(2, 'Gregorio', 'L', 'Sonit', 'Tacloban City', '09172580624', 'sonitgregorio@gmail.com', 2),
(3, 'Ray Genieve Chris', 'P', 'Durano', 'Utap, Tacloban City', '00989809808', 'rgc@yahoo.com', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_unit`
--

CREATE TABLE IF NOT EXISTS `tbl_unit` (
  `id` int(11) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_unit`
--

INSERT INTO `tbl_unit` (`id`, `description`) VALUES
(1, 'kg'),
(2, 'mm');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` longtext NOT NULL,
  `usertype` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `username`, `password`, `usertype`, `pid`, `status`) VALUES
(1, 'admin', '40be4e59b9a2a2b5dffb918c0e86b3d7', 1, 1, 1),
(2, 'sonitgregorio', '40be4e59b9a2a2b5dffb918c0e86b3d7', 2, 2, 1),
(3, 'rgcdurano', '40be4e59b9a2a2b5dffb918c0e86b3d7', 2, 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_usertype`
--

CREATE TABLE IF NOT EXISTS `tbl_usertype` (
  `id` int(11) NOT NULL,
  `description` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_usertype`
--

INSERT INTO `tbl_usertype` (`id`, `description`) VALUES
(1, 'Admin'),
(2, 'Client');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_department`
--
ALTER TABLE `tbl_department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_material_list`
--
ALTER TABLE `tbl_material_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_mat_desc`
--
ALTER TABLE `tbl_mat_desc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_party`
--
ALTER TABLE `tbl_party`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_unit`
--
ALTER TABLE `tbl_unit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_usertype`
--
ALTER TABLE `tbl_usertype`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_department`
--
ALTER TABLE `tbl_department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_material_list`
--
ALTER TABLE `tbl_material_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=100;
--
-- AUTO_INCREMENT for table `tbl_mat_desc`
--
ALTER TABLE `tbl_mat_desc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_party`
--
ALTER TABLE `tbl_party`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_unit`
--
ALTER TABLE `tbl_unit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_usertype`
--
ALTER TABLE `tbl_usertype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
