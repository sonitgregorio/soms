-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2016 at 03:25 AM
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
  `description` varchar(50) NOT NULL,
  `code` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_department`
--

INSERT INTO `tbl_department` (`id`, `description`, `code`) VALUES
(1, 'Supply Office', 'SO '),
(2, 'Information Technology Department', 'IT, Department');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_director`
--

CREATE TABLE IF NOT EXISTS `tbl_director` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `title` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_director`
--

INSERT INTO `tbl_director` (`id`, `name`, `position`, `title`) VALUES
(1, 'Ma. SOCORRO C. GICAIN, Ph.D.', 'Campus Director', 'Ma''am');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_iar`
--

CREATE TABLE IF NOT EXISTS `tbl_iar` (
  `id` int(11) NOT NULL,
  `invoice_no` varchar(50) NOT NULL,
  `iar_date` date NOT NULL,
  `ar_no` varchar(50) NOT NULL,
  `mid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_iar`
--

INSERT INTO `tbl_iar` (`id`, `invoice_no`, `iar_date`, `ar_no`, `mid`) VALUES
(1, '20015', '2016-02-29', '2016 - 0001', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_material_list`
--

CREATE TABLE IF NOT EXISTS `tbl_material_list` (
  `id` int(11) NOT NULL,
  `description` varchar(50) NOT NULL,
  `unit` varchar(50) NOT NULL,
  `quantity` decimal(11,2) NOT NULL,
  `unitcost` decimal(11,2) NOT NULL,
  `mid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_material_list`
--

INSERT INTO `tbl_material_list` (`id`, `description`, `unit`, `quantity`, `unitcost`, `mid`) VALUES
(4, 'Laptop', 'pc/s', '13.00', '18000.00', 2),
(5, 'Table', 'sheet', '1.00', '15000.00', 2),
(6, 'Laptop', 'pc/s', '15.00', '20000.00', 3),
(7, 'Bag', 'pc/s', '15.00', '300.00', 3),
(8, 'Monitor', 'pc/s', '3.00', '100.00', 4),
(9, 'Keypad', 'pc/s', '300.00', '20.00', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mat_desc`
--

CREATE TABLE IF NOT EXISTS `tbl_mat_desc` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `pid` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `date_request` date NOT NULL,
  `prno` varchar(20) NOT NULL,
  `section` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mat_desc`
--

INSERT INTO `tbl_mat_desc` (`id`, `description`, `pid`, `status`, `date_request`, `prno`, `section`) VALUES
(2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 2, 3, '2016-01-29', '2016 - 0002', 'Head Department'),
(3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 2, 4, '2016-02-06', '2016 - 0003', 'Head Department'),
(4, 'Loerem ', 2, 2, '2016-02-27', '2016 - 0004', 'Sectors');

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
  `department` int(11) NOT NULL,
  `position` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_party`
--

INSERT INTO `tbl_party` (`id`, `firstname`, `middlename`, `lastname`, `address`, `contact`, `email`, `department`, `position`) VALUES
(1, 'Admin', 'F', 'Supply', 'Carigara, Leyte', '09172580624', 'sonitgregorio@gmail.com', 1, 0),
(2, 'Gregorio', 'L', 'Sonit', 'Tacloban City', '09172580624', 'sonitgregorio@gmail.com', 2, 1),
(3, 'Ray Genieve Chris', 'P', 'Durano', 'Utap, Tacloban City', '00989809808', 'rgc@yahoo.com', 2, 1),
(4, 'dp', 'b', 'dp', 'Tacloban City', '09090909090', 'dp@gmail.com', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_po`
--

CREATE TABLE IF NOT EXISTS `tbl_po` (
  `id` int(11) NOT NULL,
  `mid` int(11) NOT NULL,
  `supplier` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `tin` varchar(60) NOT NULL,
  `po_date` date NOT NULL,
  `pono` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_po`
--

INSERT INTO `tbl_po` (`id`, `mid`, `supplier`, `address`, `tin`, `po_date`, `pono`) VALUES
(1, 2, 'J and G', 'Tacloban City', '23456789', '2016-02-04', '2016 - 0001'),
(2, 3, 'EDS', 'Tacloban City', '234567890', '2016-02-06', '2016-02-06-0002');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_position`
--

CREATE TABLE IF NOT EXISTS `tbl_position` (
  `id` int(11) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_position`
--

INSERT INTO `tbl_position` (`id`, `description`) VALUES
(1, 'I.T. Department Coordinator');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_po_prices`
--

CREATE TABLE IF NOT EXISTS `tbl_po_prices` (
  `id` int(11) NOT NULL,
  `mid` int(11) NOT NULL,
  `poid` int(11) NOT NULL,
  `matlistid` int(11) NOT NULL,
  `unitprice` decimal(11,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_po_prices`
--

INSERT INTO `tbl_po_prices` (`id`, `mid`, `poid`, `matlistid`, `unitprice`) VALUES
(1, 2, 1, 4, '14.00'),
(2, 2, 1, 5, '15.00'),
(3, 3, 2, 6, '18000.00'),
(4, 3, 2, 7, '20.00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rfq`
--

CREATE TABLE IF NOT EXISTS `tbl_rfq` (
  `id` int(11) NOT NULL,
  `mid` int(11) NOT NULL,
  `rfq_no` varchar(30) NOT NULL,
  `delivery` varchar(60) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_rfq`
--

INSERT INTO `tbl_rfq` (`id`, `mid`, `rfq_no`, `delivery`) VALUES
(4, 2, '2015 - 0004', 'EVSU - Carigara Campus'),
(5, 3, '0005', ''),
(6, 3, '2016 - 0006', 'EVSU - Carigara Campus'),
(7, 4, '0007', ''),
(8, 4, '2016 - 0008', 'Carigara Leyte');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sig_po`
--

CREATE TABLE IF NOT EXISTS `tbl_sig_po` (
  `id` int(11) NOT NULL,
  `names` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sig_po`
--

INSERT INTO `tbl_sig_po` (`id`, `names`, `position`) VALUES
(1, 'LENIE F. LLANETA', 'Administrative Aide IV/Bookkeeper Desig.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status`
--

CREATE TABLE IF NOT EXISTS `tbl_status` (
  `id` int(11) NOT NULL,
  `description` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_status`
--

INSERT INTO `tbl_status` (`id`, `description`) VALUES
(1, 'Approved'),
(2, 'RFQ'),
(3, 'PO'),
(4, 'IAR');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_unit`
--

CREATE TABLE IF NOT EXISTS `tbl_unit` (
  `id` int(11) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_unit`
--

INSERT INTO `tbl_unit` (`id`, `description`) VALUES
(1, 'kg'),
(2, 'mm'),
(3, 'pc/s'),
(4, 'sheet'),
(5, 'rem');

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `username`, `password`, `usertype`, `pid`, `status`) VALUES
(1, 'admin', '40be4e59b9a2a2b5dffb918c0e86b3d7', 1, 1, 1),
(2, 'sonitgregorio', '40be4e59b9a2a2b5dffb918c0e86b3d7', 2, 2, 1),
(3, 'rgcdurano', '40be4e59b9a2a2b5dffb918c0e86b3d7', 2, 3, 0),
(4, 'dp', '95687afb5d9a2a9fa39038f991640b0c', 2, 4, 0);

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
-- Indexes for table `tbl_director`
--
ALTER TABLE `tbl_director`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_iar`
--
ALTER TABLE `tbl_iar`
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
-- Indexes for table `tbl_po`
--
ALTER TABLE `tbl_po`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_position`
--
ALTER TABLE `tbl_position`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_po_prices`
--
ALTER TABLE `tbl_po_prices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_rfq`
--
ALTER TABLE `tbl_rfq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sig_po`
--
ALTER TABLE `tbl_sig_po`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_status`
--
ALTER TABLE `tbl_status`
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
-- AUTO_INCREMENT for table `tbl_director`
--
ALTER TABLE `tbl_director`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_iar`
--
ALTER TABLE `tbl_iar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_material_list`
--
ALTER TABLE `tbl_material_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_mat_desc`
--
ALTER TABLE `tbl_mat_desc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_party`
--
ALTER TABLE `tbl_party`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_po`
--
ALTER TABLE `tbl_po`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_position`
--
ALTER TABLE `tbl_position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_po_prices`
--
ALTER TABLE `tbl_po_prices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_rfq`
--
ALTER TABLE `tbl_rfq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_sig_po`
--
ALTER TABLE `tbl_sig_po`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_status`
--
ALTER TABLE `tbl_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_unit`
--
ALTER TABLE `tbl_unit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_usertype`
--
ALTER TABLE `tbl_usertype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
