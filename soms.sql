-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2016 at 06:34 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `soms`
--

-- --------------------------------------------------------

--
-- Table structure for table `material_type`
--

CREATE TABLE IF NOT EXISTS `material_type` (
`id` int(11) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `material_type`
--

INSERT INTO `material_type` (`id`, `description`) VALUES
(1, 'IT Equipment'),
(2, 'Wire Equipment');

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_iar`
--

INSERT INTO `tbl_iar` (`id`, `invoice_no`, `iar_date`, `ar_no`, `mid`) VALUES
(1, '20015', '2016-02-29', '2016 - 0001', 3),
(2, '90090909', '2016-06-11', '2016 - 0002', 2),
(3, '112121', '2016-07-21', '2016 - 0003', 10),
(4, '2345678', '2016-09-14', '2016 - 0004', 6),
(5, '0990999', '2016-12-06', '2016 - 0005', 11),
(6, '989868456', '2016-12-07', '2016 - 0006', 12),
(7, '12345678', '2016-12-10', '2016 - 0007', 13);

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
  `mid` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `mat_type` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_material_list`
--

INSERT INTO `tbl_material_list` (`id`, `description`, `unit`, `quantity`, `unitcost`, `mid`, `status`, `mat_type`) VALUES
(4, 'Laptop', 'pc/s', '13.00', '18000.00', 2, 0, 0),
(5, 'Table', 'sheet', '1.00', '15000.00', 2, 0, 0),
(6, 'Laptop', 'pc/s', '15.00', '20000.00', 3, 0, 0),
(7, 'Bag', 'pc/s', '15.00', '300.00', 3, 0, 0),
(8, 'Monitor', 'pc/s', '3.00', '100.00', 4, 0, 0),
(9, 'Keypad', 'pc/s', '300.00', '20.00', 4, 0, 0),
(10, 'gabas', 'pc/s', '5000.00', '10000.00', 5, 0, 0),
(11, 'DATA STRUCTURE and ALGORITHM', 'kg', '12121.00', '2121.00', 6, 0, 0),
(12, 'DATA STRUCTURE and ALGORITHM', 'kg', '12121.00', '2121.00', 6, 0, 0),
(13, 'sjakdklas', 'kg', '2312.00', '21321312.00', 8, 0, 0),
(14, 'sdsa', 'kg', '11.00', '1000.00', 10, 0, 0),
(15, 'Monitor Asus', 'pc/s', '1.00', '20000.00', 11, 1, 0),
(16, 'Laptop', 'pc/s', '1.00', '20000.00', 12, 1, 0),
(17, 'Laptop', 'IT Equipment', '3.00', '200.00', 13, 1, 1),
(18, 'Connector', 'Wire Equipment', '30.00', '20.00', 13, 1, 2);

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
  `section` varchar(50) NOT NULL,
  `disapprove` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mat_desc`
--

INSERT INTO `tbl_mat_desc` (`id`, `description`, `pid`, `status`, `date_request`, `prno`, `section`, `disapprove`) VALUES
(2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 2, 4, '2016-01-29', '2016 - 0002', 'Head Department', ''),
(3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 2, 4, '2016-02-06', '2016 - 0003', 'Head Department', ''),
(4, 'Loerem ', 2, 3, '2016-02-27', '2016 - 0004', 'Sectors', ''),
(5, 'palihug kog kuha sa papel naa sa akong office kanang naay color green nga bas', 6, 3, '2016-07-19', '2016 - 0005', 'IT Department', ''),
(6, 'boanag', 6, 4, '2016-07-19', '2016 - 0006', 'BULLSHIT COMPANY', ''),
(7, 'saeas', 6, 2, '2016-07-19', '2016 - 0007', 'aea', ''),
(8, 'PORA', 6, 6, '2016-07-19', '2016 - 0008', 'A4', ''),
(9, 'Janggoo', 6, 6, '2016-07-19', '2016 - 0009', 'Aquamarine', ''),
(10, 'dali kirk', 6, 4, '2016-07-21', '2016 - 0010', '1', ''),
(11, 'This is to certify that i am eligible for this.', 9, 4, '2016-12-01', '2016 - 0011', 'For Desktop', ''),
(12, 'Test Materials', 9, 4, '2016-12-07', '2016 - 0012', 'Test Material', ''),
(13, 'this is a sample request', 9, 4, '2016-12-10', '2016 - 0013', 'sample request', '');

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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_party`
--

INSERT INTO `tbl_party` (`id`, `firstname`, `middlename`, `lastname`, `address`, `contact`, `email`, `department`, `position`) VALUES
(1, 'Admin', 'F', 'Supply', 'Carigara, Leyte', '09172580624', 'sonitgregorio@gmail.com', 1, 0),
(2, 'Gregorio', 'L', 'Sonit', 'Tacloban City', '09172580624', 'sonitgregorio@gmail.com', 2, 1),
(3, 'Ray Genieve Chris', 'P', 'Durano', 'Utap, Tacloban City', '00989809808', 'rgc@yahoo.com', 2, 1),
(4, 'dp', 'b', 'dp', 'Tacloban City', '09090909090', 'dp@gmail.com', 2, 0),
(5, 'Gregorio', 'L', 'Sonit', '1002 Real Street', '09172580624', 'sonitgregorio@gmail.com', 1, 0),
(6, 'gerald', 'magno', 'serenio', 'sambag I ', '090813201', 'gea@hyea.com', 1, 0),
(7, 'juan', 'dp', 'dp', 'Tacloban City', '09172580624', 'sonitgregorio@gmail.com', 1, 0),
(8, 'Gregorio', 'L', 'Sonit', '1002 Real Street Sagkahan Tacloban City', '09172580624', 'sonitgregorio@gmail.com', 1, 0),
(9, 'Sample', 'S', 'Data', 'sampledata@gmail.com', '09172580624', 'sampledata@gmail.com', 2, 0);

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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_po`
--

INSERT INTO `tbl_po` (`id`, `mid`, `supplier`, `address`, `tin`, `po_date`, `pono`) VALUES
(1, 2, 'J and G', 'Tacloban City', '23456789', '2016-02-04', '2016 - 0001'),
(2, 3, 'EDS', 'Tacloban City', '234567890', '2016-02-06', '2016-02-06-0002'),
(3, 4, 'Tacloban CIty Cnstruction', 'Tacloban City', '876890098', '2016-06-11', '2016-06-11-0003'),
(4, 5, 'jaguar', 'duljo', '0931-3131', '2016-07-19', '2016-07-19-0004'),
(5, 10, 'roshan', 'mambaling', '01219131', '2016-07-21', '2016-07-21-0005'),
(6, 6, 'Tacloban CIty Cnstruction', 'Tacloban City', '7765654', '2016-09-14', '2016-09-14-0006'),
(7, 11, 'Tacloban', 'City', '999900', '2016-12-06', '2016-12-06-0007'),
(8, 12, 'Blabla', '099999', '09090950588', '2016-12-07', '2016-12-07-0008'),
(9, 13, 'Tacloban', 'Sagkahan Tacloban City', '09090950588', '2016-12-10', '2016-12-10-0009');

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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_po_prices`
--

INSERT INTO `tbl_po_prices` (`id`, `mid`, `poid`, `matlistid`, `unitprice`) VALUES
(1, 2, 1, 4, '14.00'),
(2, 2, 1, 5, '15.00'),
(3, 3, 2, 6, '18000.00'),
(4, 3, 2, 7, '20.00'),
(5, 4, 3, 8, '50.00'),
(6, 4, 3, 9, '400.00'),
(7, 5, 4, 10, '100.00'),
(8, 10, 5, 14, '11.00'),
(9, 6, 6, 11, '400.00'),
(10, 6, 6, 12, '89.00'),
(11, 11, 7, 15, '700.00'),
(12, 12, 8, 16, '15000.00'),
(13, 13, 9, 17, '30.00'),
(14, 13, 9, 18, '50.00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_remarks`
--

CREATE TABLE IF NOT EXISTS `tbl_remarks` (
`rid` int(11) NOT NULL,
  `mid` int(11) NOT NULL,
  `remarks` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_remarks`
--

INSERT INTO `tbl_remarks` (`rid`, `mid`, `remarks`) VALUES
(5, 7, 'sfdfdf'),
(6, 7, 'sdsfdf'),
(7, 6, 'sdsfdf'),
(8, 6, ''),
(9, 6, 'hello'),
(12, 15, 'test data'),
(13, 16, 'sduahsujdhkas'),
(14, 17, 'Ok Good'),
(15, 18, 'Ok Good');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rfq`
--

CREATE TABLE IF NOT EXISTS `tbl_rfq` (
`id` int(11) NOT NULL,
  `mid` int(11) NOT NULL,
  `rfq_no` varchar(30) NOT NULL,
  `delivery` varchar(60) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_rfq`
--

INSERT INTO `tbl_rfq` (`id`, `mid`, `rfq_no`, `delivery`) VALUES
(20, 11, '2016 - 0001', 'Evsu Carigara'),
(21, 12, '0021', ''),
(22, 12, '2016 - 0022', 'Carigara'),
(23, 13, '0023', ''),
(24, 13, '2016 - 0024', 'Carigara');

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_status`
--

INSERT INTO `tbl_status` (`id`, `description`) VALUES
(1, 'Approved'),
(2, 'RFQ'),
(3, 'PO'),
(4, 'IAR'),
(5, 'Report');

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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `username`, `password`, `usertype`, `pid`, `status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 1, 1),
(2, 'sonitgregorio', '21232f297a57a5a743894a0e4a801fc3', 2, 2, 1),
(3, 'rgcdurano', '21232f297a57a5a743894a0e4a801fc3', 2, 3, 1),
(4, 'dp', '21232f297a57a5a743894a0e4a801fc3', 2, 4, 1),
(5, 'sonit', '21232f297a57a5a743894a0e4a801fc3', 2, 5, 1),
(6, 'iyoy', '81dc9bdb52d04dc20036dbd8313ed055', 2, 6, 1),
(7, 'juan', '95687afb5d9a2a9fa39038f991640b0c', 2, 7, 1),
(8, 'welcome', '40be4e59b9a2a2b5dffb918c0e86b3d7', 3, 8, 1),
(9, 'sample', '40be4e59b9a2a2b5dffb918c0e86b3d7', 2, 9, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_usertype`
--

CREATE TABLE IF NOT EXISTS `tbl_usertype` (
`id` int(11) NOT NULL,
  `description` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_usertype`
--

INSERT INTO `tbl_usertype` (`id`, `description`) VALUES
(1, 'Admin'),
(2, 'Client'),
(3, 'OIC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `material_type`
--
ALTER TABLE `material_type`
 ADD PRIMARY KEY (`id`);

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
-- Indexes for table `tbl_remarks`
--
ALTER TABLE `tbl_remarks`
 ADD PRIMARY KEY (`rid`);

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
-- AUTO_INCREMENT for table `material_type`
--
ALTER TABLE `material_type`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_material_list`
--
ALTER TABLE `tbl_material_list`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tbl_mat_desc`
--
ALTER TABLE `tbl_mat_desc`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbl_party`
--
ALTER TABLE `tbl_party`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_po`
--
ALTER TABLE `tbl_po`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_position`
--
ALTER TABLE `tbl_position`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_po_prices`
--
ALTER TABLE `tbl_po_prices`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tbl_remarks`
--
ALTER TABLE `tbl_remarks`
MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tbl_rfq`
--
ALTER TABLE `tbl_rfq`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `tbl_sig_po`
--
ALTER TABLE `tbl_sig_po`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_status`
--
ALTER TABLE `tbl_status`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_unit`
--
ALTER TABLE `tbl_unit`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_usertype`
--
ALTER TABLE `tbl_usertype`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
