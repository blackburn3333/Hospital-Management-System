-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2017 at 07:34 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospitol`
--

-- --------------------------------------------------------

--
-- Table structure for table `admit_invo_db`
--

CREATE TABLE `admit_invo_db` (
  `Invo_no` int(11) NOT NULL,
  `pet_no` int(11) NOT NULL,
  `pet_name` varchar(100) NOT NULL,
  `p_age` int(3) NOT NULL,
  `price_of_med` int(11) NOT NULL,
  `price_of_doc` int(11) NOT NULL,
  `day_count` int(11) NOT NULL,
  `price_of_room` int(11) NOT NULL,
  `ser_char` int(11) NOT NULL,
  `totl` int(11) NOT NULL,
  `invo_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admit_pet`
--

CREATE TABLE `admit_pet` (
  `admit_petid` int(11) NOT NULL,
  `admit_name` varchar(500) NOT NULL,
  `admit_age` int(3) NOT NULL,
  `admit_con` varchar(15) NOT NULL,
  `admit_bg` varchar(3) NOT NULL,
  `admit_rn` varchar(10) NOT NULL,
  `pet_id` int(11) NOT NULL,
  `admit_date` date NOT NULL,
  `pet_des` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hospi_room`
--

CREATE TABLE `hospi_room` (
  `room_id` int(11) NOT NULL,
  `room_name` varchar(100) NOT NULL,
  `room_avilabl` varchar(20) DEFAULT NULL,
  `rc_time_mo` varchar(10) NOT NULL DEFAULT '11.30 AM',
  `rc_time_ev` varchar(10) DEFAULT '06.30 PM',
  `room_drid` int(11) DEFAULT NULL,
  `eroom_drid` int(11) DEFAULT NULL,
  `room_petID` varchar(11) DEFAULT 'No Patient'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospi_room`
--

INSERT INTO `hospi_room` (`room_id`, `room_name`, `room_avilabl`, `rc_time_mo`, `rc_time_ev`, `room_drid`, `eroom_drid`, `room_petID`) VALUES
(1, 'Room No: 1', 'AV', '11.30 AM', '06.30 PM', NULL, NULL, 'No Patient'),
(2, 'Room No: 2', 'AV', '11.30 AM', '06.30 PM', NULL, NULL, 'No Patient'),
(3, 'Room No: 3', 'AV', '11.30 AM', '06.30 PM', NULL, NULL, 'No Patient'),
(4, 'Room No: 4', 'AV', '11.30 AM', '06.30 PM', NULL, NULL, 'No Patient'),
(5, 'Room No: 5', 'AV', '11.30 AM', '06.30 PM', NULL, NULL, 'No Patient'),
(6, 'Room No: 6', 'AV', '11.30 AM', '06.30 PM', NULL, NULL, 'No Patient'),
(7, 'Room No: 7', 'AV', '11.30 AM', '06.30 PM', NULL, NULL, 'No Patient'),
(8, 'Room No: 8', 'AV', '11.30 AM', '06.30 PM', NULL, NULL, 'No Patient'),
(9, 'Room No: 9', 'AV', '11.30 AM', '06.30 PM', NULL, NULL, 'No Patient'),
(10, 'Room No: 10', 'AV', '11.30 AM', '06.30 PM', NULL, NULL, 'No Patient');

-- --------------------------------------------------------

--
-- Table structure for table `lvl2_admin`
--

CREATE TABLE `lvl2_admin` (
  `lvtwname` varchar(100) NOT NULL,
  `lvtwusern` varchar(100) NOT NULL,
  `lvtwemail` varchar(200) NOT NULL,
  `lvtwpass` varchar(50) NOT NULL,
  `lvtwid` int(11) NOT NULL,
  `lvtwcdate` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lvl2_admin`
--

INSERT INTO `lvl2_admin` (`lvtwname`, `lvtwusern`, `lvtwemail`, `lvtwpass`, `lvtwid`, `lvtwcdate`) VALUES
('Jayendra', 'BasicAdmin', 'test@gmail.com', '202cb962ac59075b964b07152d234b70', 1, '2017-10-04');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `pet_id` int(11) NOT NULL,
  `pet_reg_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `pet_fn` varchar(100) DEFAULT NULL,
  `pet_sn` varchar(100) DEFAULT NULL,
  `pet_addr` varchar(500) DEFAULT NULL,
  `pet_ac` varchar(3) DEFAULT '+94',
  `pet_con` int(10) DEFAULT NULL,
  `pet_em` varchar(1000) DEFAULT NULL,
  `pet_gen` varchar(10) DEFAULT NULL,
  `pet_bd` date DEFAULT NULL,
  `pet_age` int(3) DEFAULT NULL,
  `pet_bg` varchar(3) DEFAULT NULL,
  `Pet_opdid` int(11) DEFAULT NULL,
  `Insert_admunname` varchar(100) DEFAULT NULL,
  `Update_sadmunname` varchar(100) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pet_invo`
--

CREATE TABLE `pet_invo` (
  `invo_id` int(11) NOT NULL,
  `invo_Pet_name` varchar(500) NOT NULL,
  `invo_pet_id` int(100) NOT NULL DEFAULT '1',
  `invo_pet_age` int(3) NOT NULL,
  `invo_date` date NOT NULL,
  `medi_charge` int(10) NOT NULL,
  `doc_charge` int(10) NOT NULL,
  `hos_charge` int(10) NOT NULL DEFAULT '1500',
  `total_charge` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staffID` int(11) NOT NULL,
  `smfname` varchar(50) NOT NULL,
  `smlname` varchar(50) NOT NULL,
  `smtype` varchar(20) NOT NULL,
  `smbd` date NOT NULL,
  `telcode` varchar(3) NOT NULL DEFAULT '+94',
  `smtel` varchar(15) NOT NULL,
  `smemail` varchar(200) NOT NULL,
  `smgender` varchar(6) NOT NULL,
  `smwoti` varchar(10) NOT NULL,
  `smaddr` varchar(600) NOT NULL,
  `instetd_by` varchar(100) DEFAULT NULL,
  `insterted_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_by` varchar(100) DEFAULT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sup_admin`
--

CREATE TABLE `sup_admin` (
  `sadid` int(11) NOT NULL,
  `sadiun` varchar(20) NOT NULL,
  `sadipw` varchar(500) NOT NULL,
  `sadem` varchar(50) NOT NULL,
  `saname` varchar(100) DEFAULT NULL,
  `cret_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sup_admin`
--

INSERT INTO `sup_admin` (`sadid`, `sadiun`, `sadipw`, `sadem`, `saname`, `cret_date`) VALUES
(1, 'superAdmin', '202cb962ac59075b964b07152d234b70', 'jayendramatarage@gmail.com', 'Jayendra', '2017-10-04 22:49:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admit_invo_db`
--
ALTER TABLE `admit_invo_db`
  ADD PRIMARY KEY (`Invo_no`),
  ADD KEY `pet_no` (`pet_no`);

--
-- Indexes for table `admit_pet`
--
ALTER TABLE `admit_pet`
  ADD PRIMARY KEY (`admit_petid`),
  ADD KEY `pet_id` (`pet_id`);

--
-- Indexes for table `hospi_room`
--
ALTER TABLE `hospi_room`
  ADD PRIMARY KEY (`room_id`),
  ADD KEY `room_drid` (`room_drid`),
  ADD KEY `eroom_id` (`eroom_drid`),
  ADD KEY `room_petID` (`room_petID`);

--
-- Indexes for table `lvl2_admin`
--
ALTER TABLE `lvl2_admin`
  ADD PRIMARY KEY (`lvtwid`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`pet_id`),
  ADD KEY `Pet_opdid` (`Pet_opdid`);

--
-- Indexes for table `pet_invo`
--
ALTER TABLE `pet_invo`
  ADD PRIMARY KEY (`invo_id`),
  ADD KEY `invo_pet_id` (`invo_pet_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staffID`);

--
-- Indexes for table `sup_admin`
--
ALTER TABLE `sup_admin`
  ADD PRIMARY KEY (`sadid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admit_invo_db`
--
ALTER TABLE `admit_invo_db`
  MODIFY `Invo_no` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `admit_pet`
--
ALTER TABLE `admit_pet`
  MODIFY `admit_petid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hospi_room`
--
ALTER TABLE `hospi_room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `lvl2_admin`
--
ALTER TABLE `lvl2_admin`
  MODIFY `lvtwid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `pet_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pet_invo`
--
ALTER TABLE `pet_invo`
  MODIFY `invo_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staffID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sup_admin`
--
ALTER TABLE `sup_admin`
  MODIFY `sadid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
