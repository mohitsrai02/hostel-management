-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2018 at 05:48 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostel_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_additional_services`
--

CREATE TABLE `tbl_additional_services` (
  `id` int(11) NOT NULL,
  `services` varchar(30) NOT NULL,
  `charges` varchar(30) NOT NULL,
  `regist_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_additional_services`
--

INSERT INTO `tbl_additional_services` (`id`, `services`, `charges`, `regist_id`) VALUES
(1, 'S1', '100', 3),
(2, 's2', '200', 3),
(3, 's3', '300', 3),
(4, 's4', '600', 3),
(5, 's6', '700', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_emp_registration`
--

CREATE TABLE `tbl_emp_registration` (
  `id` int(11) NOT NULL,
  `emp_name` varchar(30) NOT NULL,
  `dept_name` varchar(30) NOT NULL,
  `u_name` varchar(30) NOT NULL,
  `u_pass` varchar(30) NOT NULL,
  `parent_name` varchar(30) NOT NULL,
  `adhaar_no` varchar(30) NOT NULL,
  `bank_acc` varchar(30) NOT NULL,
  `bank_name` varchar(30) NOT NULL,
  `ifsc_code` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `mobile_no` varchar(30) NOT NULL,
  `phone_no` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `birth_date` varchar(30) NOT NULL,
  `joining_date` varchar(30) NOT NULL,
  `relieve_date` varchar(30) NOT NULL,
  `permanent_address` varchar(30) NOT NULL,
  `pf_number` varchar(30) NOT NULL,
  `qualification` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `off_day` varchar(30) NOT NULL,
  `basis` varchar(30) NOT NULL,
  `hra` varchar(30) NOT NULL,
  `net_salary` varchar(30) NOT NULL,
  `pf` varchar(30) NOT NULL,
  `conv` varchar(30) NOT NULL,
  `p_tax` varchar(30) NOT NULL,
  `da` varchar(30) NOT NULL,
  `i_tax` varchar(30) NOT NULL,
  `total` varchar(30) NOT NULL,
  `emp_code` varchar(30) NOT NULL,
  `image` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_emp_registration`
--

INSERT INTO `tbl_emp_registration` (`id`, `emp_name`, `dept_name`, `u_name`, `u_pass`, `parent_name`, `adhaar_no`, `bank_acc`, `bank_name`, `ifsc_code`, `address`, `city`, `mobile_no`, `phone_no`, `email`, `birth_date`, `joining_date`, `relieve_date`, `permanent_address`, `pf_number`, `qualification`, `gender`, `off_day`, `basis`, `hra`, `net_salary`, `pf`, `conv`, `p_tax`, `da`, `i_tax`, `total`, `emp_code`, `image`) VALUES
(1, 'Mr. Shobhit Singh Rajpoot', 'admin', 'sho2306', '12345', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, '', 'select', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'http://localhost/hostel_mngmnt/images/3.jpg'),
(3, 'mohit', 'manager', 'moh', '1234', 'Sumeshwar Rai', 'wwtr', '12345678987654', 'paytm', 'sfghtr42365', 'awestrdtu', '', '', '', '', '1998-08-03', '', '', 'freghrdu6', '', 'graduate', 'male', '', '', '', '', '', '', '', '', '324', '', '007', 'http://localhost/hostel_mngmnt/images/1.jpg'),
(4, '', 'select', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'http://localhost/hostel_mngmnt/assets/img/5.jpg'),
(5, 'shobhit', 'select', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'male', '', '', '', '', '', '', '', '', '', '', '', 'http://localhost/hostel_mngmnt/assets/img/2.jpg'),
(6, 'a', 'admin', 'harshulal101', '1234', 'a', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', '1997-04-01', '2018-06-01', '2018-08-01', 'aa', 'aa', 'aa', 'other', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', '', 'aa', 'http://localhost/hostel_mngmnt/assets/img/');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_floor`
--

CREATE TABLE `tbl_floor` (
  `id` int(11) NOT NULL,
  `floor` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hall_details`
--

CREATE TABLE `tbl_hall_details` (
  `id` int(11) NOT NULL,
  `type` varchar(30) NOT NULL,
  `location` varchar(30) NOT NULL,
  `capacity` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_hall_details`
--

INSERT INTO `tbl_hall_details` (`id`, `type`, `location`, `capacity`) VALUES
(1, 'female', '2', ''),
(2, 'female', '3', ''),
(3, 'female', '3', 'fs'),
(4, 'room', '3', '22'),
(5, 'room', '3', '001'),
(6, 'room', '3', '44'),
(7, 'room', '4', '4'),
(8, 'room', '5', '2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_other_payment`
--

CREATE TABLE `tbl_other_payment` (
  `id` int(11) NOT NULL,
  `source` varchar(30) NOT NULL,
  `amount` varchar(30) NOT NULL,
  `payment_date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_other_payment`
--

INSERT INTO `tbl_other_payment` (`id`, `source`, `amount`, `payment_date`) VALUES
(1, 'bitcoin', '500', '2016-04-05'),
(2, 'pesa', '200', '2017-01-30'),
(3, 'pesa', '500', '2016-11-28');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `id` int(11) NOT NULL,
  `reg_id` int(11) NOT NULL,
  `pdate` varchar(30) NOT NULL,
  `d` varchar(10) NOT NULL,
  `payment_status` varchar(30) NOT NULL,
  `payment_type` varchar(30) NOT NULL,
  `additional_service_payment` varchar(30) NOT NULL,
  `payment` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`id`, `reg_id`, `pdate`, `d`, `payment_status`, `payment_type`, `additional_service_payment`, `payment`) VALUES
(1, 18, '', '', 'pending', 'N/A', 'pending', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registration`
--

CREATE TABLE `tbl_registration` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `bank_ac` varchar(30) NOT NULL,
  `bank_name` varchar(50) NOT NULL,
  `ifsc_code` varchar(50) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `nic` varchar(30) NOT NULL,
  `floor` varchar(30) NOT NULL,
  `room_no` varchar(30) NOT NULL,
  `bed_no` varchar(30) NOT NULL,
  `relieve_date` varchar(30) NOT NULL,
  `mother_name` varchar(30) NOT NULL,
  `mother_education` varchar(30) NOT NULL,
  `mother_profession` varchar(30) NOT NULL,
  `mother_address` varchar(30) NOT NULL,
  `mother_telephone` varchar(30) NOT NULL,
  `mother_phone_no` varchar(13) NOT NULL,
  `mother_email` varchar(30) NOT NULL,
  `mother_designation` varchar(30) NOT NULL,
  `father_name` varchar(30) NOT NULL,
  `father_education` varchar(30) NOT NULL,
  `father_profession` varchar(30) NOT NULL,
  `father_address` varchar(30) NOT NULL,
  `father_telephone` varchar(18) NOT NULL,
  `father_phone` varchar(13) NOT NULL,
  `father_email` varchar(30) NOT NULL,
  `father_designation` varchar(30) NOT NULL,
  `advance_payment` varchar(20) NOT NULL,
  `image_url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_registration`
--

INSERT INTO `tbl_registration` (`id`, `name`, `gender`, `dob`, `bank_ac`, `bank_name`, `ifsc_code`, `qualification`, `mobile_no`, `nic`, `floor`, `room_no`, `bed_no`, `relieve_date`, `mother_name`, `mother_education`, `mother_profession`, `mother_address`, `mother_telephone`, `mother_phone_no`, `mother_email`, `mother_designation`, `father_name`, `father_education`, `father_profession`, `father_address`, `father_telephone`, `father_phone`, `father_email`, `father_designation`, `advance_payment`, `image_url`) VALUES
(1, 'shobhit', 'male', '2014-03-02', 'aDFSDGF', '', '', '', '', '', '1', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'http://localhost/hostel_mngmnt/assets/img/4.jpg'),
(2, 'Shobhit', '', '', '', '', '', '', '', '', '1', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'http://localhost/hostel_mngmnt/assets/img/'),
(3, 'mohit', 'male', '2015-10-02', 'csfdhgj', 'sfgdhfjg', '', '', '', '', '1', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'http://localhost/hostel_mngmnt/assets/img/'),
(10, 'harshal', 'male', '2017-01-02', 'cfgd', '', 'afszgdhff', 'bb', 'asfsgdhf', 'ZXCFHG', '3', '3', '4', '', 'fdsgfh', 'SGDHF', 'fszgdxhf', 'afsrgty', 'sfsgrdh', 'sfdg', 'sfdg', 'safsgdh', 'tgyhuj', 'dftryt', 'bcasd', 'scdvb', 'sdzgfhn', 'fgdh', 'zfgxhfg', 'scdf', 'SAFSGDH', 'http://localhost/hostel_mngmnt/assets/img/'),
(11, 'shobhigt', 'male', '2018-08-23', 'cfgd', 'fsghdf', 'AEWRYTK', 'bb', 'SAFGDHFJ', 'ZXCFHG', '3', '4', '4', '2018-08-18', 'zsdghfg', 'SGDHF', 'fszgdxhf', 'afsrgty', 'sfsgrdh', 'sfdg', 'sfdg', 'ijmk,l', 'tgyhuj', 'tg7yhuj', 'bcasd', 'scdvb', 'Adfghj', 'ADFSGf', 'zfgxhfg', 'scdf', 'SAFSGDH', 'http://localhost/hostel_mngmnt/assets/img/'),
(12, 'ajay', 'male', '2013-04-03', '356475432456', 'sdaesrdhtjfyku', 'dafsdg', 'sfghdfjh', 'fddsgdhj', 'vdsgfdgnhmg', '2', '2', '3', '2013-02-04', 'aefsgrdhf', 'dfsgdhfgm', 'fsgdhfhm', 'aefsgrdhf', 'fesrgdthfg', 'defsgrdthf', 'fgdhfg@gmail.com', 'afgshd', 'dfgdf', 'fgdhf', 'ghfg', 'wfegh', 'dafsgdhfg', 'esrgdthfyjguk', 'asfd@dsfb.com', 'fghf', 'waefsrgdthfgjk', 'http://localhost/hostel_mngmnt/assets/img/'),
(15, 'aadil', 'male', '2018-09-04', 'fdsgdhfj', 'ssrhdtjfyk', '354678', 'sgrdhtf', '4325678', '2435676', '5', '10', '10', '2018-09-05', 'sfadgfhfj', 'dafsgrdhtfj', 'afsgdhfjgkh', '', '', '', '', 'gfdgjfh', '', '', '', '', '', '', '', '', '', 'http://localhost/hostel_mngmnt/assets/img/'),
(18, 'kabir', 'male', '1998-08-07', '1234567', 'qwertyu', 'qw234re', 'sefgrdthf', '23456789', 'fytgyh', '5', '54321', '12345', '', 'zdvn,ncbxcv', 'sadfshgdj', 'trykulijk', 'etrcyvgubhiuji6787gyhkjn', '+465312', '9864561', 'asdfgh@gmail.com', '56dityfugihjk', 'rytcvumk', 'cytvumk', 'ytcvubiunjklm', 'vuybjn', 'iuonklm', 'yubik', 'ytvujkn@gmail.com', 'cyvujhbkn', '2345', 'http://localhost/hostel_mngmnt/assets/img/');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_room_details`
--

CREATE TABLE `tbl_room_details` (
  `id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `hallroom_no` varchar(50) NOT NULL,
  `bed_no` varchar(50) NOT NULL,
  `reg_id` int(11) NOT NULL,
  `rent` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_room_details`
--

INSERT INTO `tbl_room_details` (`id`, `location_id`, `status`, `hallroom_no`, `bed_no`, `reg_id`, `rent`) VALUES
(1, 2, '', '23', '213', 0, '2134'),
(2, 3, '', '007', '700', 0, '3000'),
(3, 4, 'approve', '008', '800', 16, '4000'),
(4, 5, 'approve', '10', '10', 15, '6000'),
(5, 4, 'approve', '1234', '4321', 17, '5000'),
(6, 5, 'approve', '54321', '12345', 18, '4000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_additional_services`
--
ALTER TABLE `tbl_additional_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_emp_registration`
--
ALTER TABLE `tbl_emp_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_floor`
--
ALTER TABLE `tbl_floor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_hall_details`
--
ALTER TABLE `tbl_hall_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_other_payment`
--
ALTER TABLE `tbl_other_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_registration`
--
ALTER TABLE `tbl_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_room_details`
--
ALTER TABLE `tbl_room_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_additional_services`
--
ALTER TABLE `tbl_additional_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_emp_registration`
--
ALTER TABLE `tbl_emp_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_floor`
--
ALTER TABLE `tbl_floor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_hall_details`
--
ALTER TABLE `tbl_hall_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_other_payment`
--
ALTER TABLE `tbl_other_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_registration`
--
ALTER TABLE `tbl_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_room_details`
--
ALTER TABLE `tbl_room_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
