-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2021 at 09:58 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `abulance`
--

CREATE TABLE IF NOT EXISTS `abulance` (
  `hospital_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `emergency` varchar(255) DEFAULT NULL,
  `fax` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 AVG_ROW_LENGTH=8192;

--
-- Dumping data for table `abulance`
--

INSERT INTO `abulance` (`hospital_id`, `id`, `admin_id`, `name`, `address`, `phone`, `emergency`, `fax`) VALUES
(5, 3, 0, 'Trishal', 'Dania', '01914184312', '5', '0');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `passwd` varchar(60) NOT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `owner` varchar(30) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 AVG_ROW_LENGTH=4096;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `email`, `passwd`, `phone`, `owner`) VALUES
(4, 'Admin', 'b@live.com', '123', '01941141414', 'admin'),
(7, 'Saleh Ahmed', 'hos@pital.com', '123', '01914184312', 'hospital');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE IF NOT EXISTS `appointment` (
  `appoint_id` bigint(20) NOT NULL,
  `schedule_id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `patient_name` varchar(30) DEFAULT NULL,
  `day_of_appointment` date DEFAULT NULL,
  `time_of_creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dob` date DEFAULT NULL,
  `contact` varchar(20) DEFAULT NULL,
  `asthma` varchar(10) DEFAULT NULL,
  `cardiac_failure` varchar(10) DEFAULT NULL,
  `kidney_disease` varchar(10) DEFAULT NULL,
  `diabetes` varchar(10) DEFAULT NULL,
  `hyperlipidaemia` varchar(10) DEFAULT NULL,
  `hypertension` varchar(10) DEFAULT NULL,
  `serial` smallint(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AVG_ROW_LENGTH=1820;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appoint_id`, `schedule_id`, `userid`, `patient_name`, `day_of_appointment`, `time_of_creation`, `dob`, `contact`, `asthma`, `cardiac_failure`, `kidney_disease`, `diabetes`, `hyperlipidaemia`, `hypertension`, `serial`) VALUES
(17122091, 9, 31, 'Jamal', '2017-12-20', '2017-12-03 19:13:09', '2012-08-16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(17122491, 9, 29, 'Kamal', '2017-12-24', '2017-12-02 20:12:57', '1996-01-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(17122492, 9, 31, 'salman', '2017-12-24', '2017-12-02 20:14:53', '2014-12-25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2),
(17122493, 9, 34, 'tom', '2017-12-24', '2017-12-02 20:17:06', '2011-09-15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3),
(17122494, 9, 30, 'ABC ABC', '2017-12-24', '2017-12-04 20:27:20', '2017-08-16', '12345678901', 'yes', 'yes', 'yes', 'yes', 'no', 'no', 4),
(17122691, 9, 34, 'leo', '2017-12-26', '2017-12-03 19:43:27', '2002-03-21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(17122791, 9, 30, 'ABC ABC', '2017-12-27', '2017-12-18 17:38:28', '1990-12-31', '12345678901', 'no', 'no', 'no', 'no', 'no', 'no', 1),
(171216211, 21, 30, 'ABC ABC', '2017-12-16', '2017-12-10 09:35:47', '2015-09-16', '12345678901', 'no', 'yes', 'no', 'yes', 'no', 'no', 1),
(171227161, 16, 34, 'akib', '2017-12-27', '2017-12-05 08:01:26', '2012-09-26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(210417211, 21, 30, 'ABC ABC', '2021-04-17', '2021-04-17 17:59:15', '2017-06-17', '12345678901', 'yes', 'yes', 'no', 'no', 'no', 'no', 1),
(210423211, 21, 29, 'Gazi Fakhrul', '2021-04-23', '2021-04-17 19:53:25', '1990-04-05', '01234567890', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 1),
(210515241, 24, 41, 'Saleh Ahmed', '2021-05-15', '2021-05-14 20:08:48', '2021-05-14', '01914184312', 'yes', 'yes', 'no', 'no', 'no', 'no', 1),
(210515242, 24, 41, 'Saleh Ahmed', '2021-05-15', '2021-05-14 20:13:56', '2021-05-14', '01914184312', 'yes', 'yes', 'no', 'no', 'no', 'no', 2),
(210515291, 29, 30, 'ABC ABC', '2021-05-15', '2021-05-10 19:54:49', '2017-02-10', '12345678901', 'yes', 'yes', 'no', 'no', 'no', 'no', 1),
(210529321, 32, 42, 'Saleh Ahmed', '2021-05-29', '2021-05-28 18:02:42', '2017-01-28', '01717356993', 'yes', 'yes', 'yes', 'yes', 'yes', 'yes', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blood_bank`
--

CREATE TABLE IF NOT EXISTS `blood_bank` (
  `blood_bank_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `A+` smallint(6) DEFAULT NULL,
  `B+` smallint(6) DEFAULT NULL,
  `AB+` smallint(6) DEFAULT NULL,
  `O+` smallint(6) DEFAULT NULL,
  `A-` smallint(6) DEFAULT NULL,
  `B-` smallint(6) DEFAULT NULL,
  `AB-` smallint(6) DEFAULT NULL,
  `O-` smallint(6) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 AVG_ROW_LENGTH=8192;

--
-- Dumping data for table `blood_bank`
--

INSERT INTO `blood_bank` (`blood_bank_id`, `admin_id`, `name`, `address`, `phone`, `email`, `A+`, `B+`, `AB+`, `O+`, `A-`, `B-`, `AB-`, `O-`) VALUES
(1, 2, 'Quantum Blood Bank', 'Farmgate,Dhaka', '02-9XXXXXXX, Fax-0120XXXXX', 'q@yahoo.com', 1, 1, 1, 1, 1, 1, 1, 1),
(2, 4, 'Trishal blood Bank', 'farmgate', 'abc@gmail.com', '02-9XXXXXXX, Fax-0160XXXXX', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `booking_id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `hospital_id` int(11) NOT NULL,
  `patient_name` varchar(50) DEFAULT NULL,
  `age` varchar(20) DEFAULT NULL,
  `category` varchar(50) NOT NULL,
  `contact` varchar(20) DEFAULT NULL,
  `time_of_booking` timestamp NULL DEFAULT NULL,
  `reason_of_booking` varchar(255) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 AVG_ROW_LENGTH=4096;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `userid`, `hospital_id`, `patient_name`, `age`, `category`, `contact`, `time_of_booking`, `reason_of_booking`, `status`) VALUES
(13, 42, 5, 'Jani na ', '25', 'Emergency ward', '01914184312', '2021-05-28 19:53:07', 'opoipo', 'Booked'),
(14, 42, 5, 'fdgdgdfg', 'sdfsd', 'ICU', '01914184312', '2021-05-28 19:55:26', 'jkhk', 'New Request');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL,
  `Name` varchar(150) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `Subject` varchar(150) NOT NULL,
  `Message` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `Name`, `Email`, `Subject`, `Message`) VALUES
(13, 'Saleh Ahmed', 'hos@pital.com', 'hjgjg', 'fsdfsdf');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE IF NOT EXISTS `district` (
  `id` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AVG_ROW_LENGTH=4096;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `name`) VALUES
(1, 'Barishal'),
(2, 'Chittagong'),
(3, 'Dhaka'),
(4, 'Mymensingh'),
(5, 'Khulna'),
(6, 'Rajshahi'),
(7, 'Rangpur'),
(8, 'Sylhet');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `hospital_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `speciality` varchar(255) NOT NULL,
  `qualification` text NOT NULL,
  `pic` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `fee` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 AVG_ROW_LENGTH=1260;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`hospital_id`, `doctor_id`, `name`, `speciality`, `qualification`, `pic`, `gender`, `contact`, `fee`) VALUES
(0, 16, 'Saleh Ahmed', 'Cardiology', 'Mymensingh Hospital', '16.png', 'Male', '12345678901', '1800');

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE IF NOT EXISTS `donor` (
  `donor_id` int(11) NOT NULL,
  `name` varchar(11) NOT NULL,
  `blood` varchar(10) NOT NULL,
  `district` varchar(50) DEFAULT NULL,
  `last_donated` varchar(300) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 AVG_ROW_LENGTH=2730;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`donor_id`, `name`, `blood`, `district`, `last_donated`, `city`, `phone`, `user_id`) VALUES
(14, 'ABC ABC', 'O+', 'Chittagong', '1990-10-16', 'Chandpur', '12345678901', 30),
(15, 'Saleh Ahmed', 'AB+', 'Barishal', '2021-05-17', 'Jhalokathi', '01914184312', 41),
(16, 'Saleh Ahmed', 'O+', 'Mymensingh', '2021-05-17', 'Trishal', '01717356993', 42);

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE IF NOT EXISTS `hospital` (
  `hospital_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `map` mediumtext NOT NULL,
  `speciality` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `emergency` varchar(255) DEFAULT NULL,
  `fax` varchar(255) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `lat` float(10,6) DEFAULT NULL,
  `lng` float(10,6) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 AVG_ROW_LENGTH=8192;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`hospital_id`, `admin_id`, `name`, `address`, `map`, `speciality`, `description`, `phone`, `emergency`, `fax`, `email`, `lat`, `lng`) VALUES
(5, 7, 'Mymensingh Hospital', 'Mymensingh', 'https://maps.google.com/maps?q=Trishal&t=&z=13&ie=UTF8&iwloc=&output=embed', 'Big hospital', 'Nice Hospital', '01914184312', '01717356993', 'Mymensingh Sodor', 'hos@pital.com', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hospitals_room`
--

CREATE TABLE IF NOT EXISTS `hospitals_room` (
  `hospital_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `icu_aval` varchar(10) DEFAULT 'no',
  `icu_quantity` smallint(6) DEFAULT '0',
  `icu_rate` smallint(6) DEFAULT NULL,
  `ccu_aval` varchar(10) DEFAULT 'no',
  `ccu_quantity` smallint(6) DEFAULT '0',
  `ccu_rate` smallint(6) DEFAULT NULL,
  `single_aval` varchar(10) DEFAULT 'no',
  `single_quantity` smallint(6) DEFAULT '0',
  `single_rate` smallint(6) DEFAULT NULL,
  `share_aval` varchar(10) DEFAULT 'no',
  `share_quantity` smallint(6) DEFAULT '0',
  `share_rate` smallint(6) DEFAULT NULL,
  `male_ward_aval` varchar(10) DEFAULT 'no',
  `male_ward_quantity` smallint(6) DEFAULT '0',
  `male_ward_rate` smallint(6) DEFAULT NULL,
  `female_ward_aval` varchar(10) DEFAULT 'no',
  `female_ward_quantity` smallint(6) DEFAULT '0',
  `female_ward_rate` smallint(6) DEFAULT NULL,
  `icu_remaining` smallint(6) DEFAULT '0',
  `ccu_remaining` smallint(6) DEFAULT '0',
  `single_remaining` smallint(6) DEFAULT '0',
  `share_remaining` smallint(6) DEFAULT '0',
  `male_ward_remaining` smallint(6) DEFAULT '0',
  `female_ward_remaining` smallint(6) DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 AVG_ROW_LENGTH=16384;

--
-- Dumping data for table `hospitals_room`
--

INSERT INTO `hospitals_room` (`hospital_id`, `id`, `icu_aval`, `icu_quantity`, `icu_rate`, `ccu_aval`, `ccu_quantity`, `ccu_rate`, `single_aval`, `single_quantity`, `single_rate`, `share_aval`, `share_quantity`, `share_rate`, `male_ward_aval`, `male_ward_quantity`, `male_ward_rate`, `female_ward_aval`, `female_ward_quantity`, `female_ward_rate`, `icu_remaining`, `ccu_remaining`, `single_remaining`, `share_remaining`, `male_ward_remaining`, `female_ward_remaining`) VALUES
(1, 1, 'yes', 0, 0, 'yes', 1, 0, 'yes', 0, 0, 'yes', 0, 0, 'yes', 0, 0, 'yes', 0, 0, 0, 0, 0, 6, 0, 0),
(2, 2, 'yes', 15, 0, 'yes', 0, 0, 'yes', 0, 0, 'yes', 0, 0, 'no', 0, 0, 'no', 0, 0, 0, 0, 0, 0, 0, 0),
(3, 3, 'yes', 4, 0, 'yes', 4, 0, 'yes', 4, 0, 'no', 0, NULL, 'no', 0, NULL, 'no', 0, NULL, 0, 0, 0, 0, 0, 0),
(4, 4, 'yes', 0, 0, 'yes', 0, 0, 'yes', 0, 0, 'no', 0, NULL, 'no', 0, NULL, 'no', 0, NULL, 0, 0, 0, 0, 0, 0),
(5, 5, 'yes', 4, 1250, 'yes', 4, 1000, 'yes', 4, 250, 'no', 0, NULL, 'no', 0, NULL, 'no', 0, NULL, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE IF NOT EXISTS `rating` (
  `rating_id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `hospital_id` int(11) NOT NULL,
  `text` text,
  `stars` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
  `schedule_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `hospital_id` int(11) NOT NULL,
  `doctor_contact` varchar(25) DEFAULT NULL,
  `doctor_asst_contact` varchar(25) DEFAULT NULL,
  `fee` varchar(25) DEFAULT NULL,
  `will_join` varchar(50) DEFAULT NULL,
  `room` varchar(50) DEFAULT NULL,
  `availability` varchar(25) DEFAULT 'yes',
  `sat_aval` varchar(25) DEFAULT NULL,
  `sat_from` varchar(25) DEFAULT NULL,
  `sat_to` varchar(25) DEFAULT NULL,
  `sat_max` int(11) DEFAULT NULL,
  `sun_aval` varchar(25) DEFAULT NULL,
  `sun_from` varchar(25) DEFAULT NULL,
  `sun_to` varchar(25) DEFAULT NULL,
  `sun_max` int(11) DEFAULT NULL,
  `mon_aval` varchar(25) DEFAULT NULL,
  `mon_from` varchar(25) DEFAULT NULL,
  `mon_to` varchar(25) DEFAULT NULL,
  `mon_max` int(11) DEFAULT NULL,
  `tues_aval` varchar(25) DEFAULT NULL,
  `tues_from` varchar(25) DEFAULT NULL,
  `tues_to` varchar(25) DEFAULT NULL,
  `tues_max` int(11) DEFAULT NULL,
  `wed_aval` varchar(25) DEFAULT NULL,
  `wed_from` varchar(25) DEFAULT NULL,
  `wed_to` varchar(25) DEFAULT NULL,
  `wed_max` int(11) DEFAULT NULL,
  `thur_aval` varchar(25) DEFAULT NULL,
  `thur_from` varchar(25) DEFAULT NULL,
  `thur_to` varchar(25) DEFAULT NULL,
  `thur_max` int(11) DEFAULT NULL,
  `fri_aval` varchar(25) DEFAULT NULL,
  `fri_from` varchar(25) DEFAULT NULL,
  `fri_to` varchar(25) DEFAULT NULL,
  `fri_max` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 AVG_ROW_LENGTH=1260;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`schedule_id`, `doctor_id`, `hospital_id`, `doctor_contact`, `doctor_asst_contact`, `fee`, `will_join`, `room`, `availability`, `sat_aval`, `sat_from`, `sat_to`, `sat_max`, `sun_aval`, `sun_from`, `sun_to`, `sun_max`, `mon_aval`, `mon_from`, `mon_to`, `mon_max`, `tues_aval`, `tues_from`, `tues_to`, `tues_max`, `wed_aval`, `wed_from`, `wed_to`, `wed_max`, `thur_aval`, `thur_from`, `thur_to`, `thur_max`, `fri_aval`, `fri_from`, `fri_to`, `fri_max`) VALUES
(9, 1, 1, '019XXXX', '018XXXX', '500', NULL, NULL, 'yes', 'yes', '19:00', '21:00', 30, 'yes', '19:00', '21:00', 5, 'yes', '20:00', '21:00', 15, 'yes', '12:30', '15:00', 30, 'yes', '19:00', '21:00', 30, 'no', '', '', 0, 'no', '', '', 0),
(27, 1, 3, '018XXXXX', NULL, NULL, NULL, NULL, 'yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 2, 1, '019XXXXX', '017XXXX', '400', NULL, '205', 'yes', 'yes', '19:00', '22:00', 40, 'no', '', '', 0, 'yes', '20:00', '22:00', 25, 'no', '', '', 0, 'no', '', '', 0, 'no', '', '', 0, 'no', '', '', 0),
(11, 3, 1, '017XXXXX', '01914184312', '600', '', '2014', 'yes', 'yes', '12:00', '14:00', 20, 'no', '', '', 0, 'no', '', '', 0, 'no', '', '', 0, 'no', '', '', 0, 'no', '', '', 0, 'no', '', '', 0),
(16, 4, 1, '018XXXXXXXX', '019XXXXXX', '500', '', '2005', 'yes', 'yes', '20:00', '22:00', 25, 'no', '', '', 0, 'no', '', '', 0, 'no', '', '', 0, 'yes', '18:00', '21:00', 40, 'no', '', '', 0, 'no', '', '', 0),
(3, 5, 1, '018XXXXXXXX', '019XXXXXXXX', '1211', '', '5001', 'no', 'no', '', '', 0, 'no', '', '', 0, 'no', '', '', 0, 'no', '', '', 0, 'no', '', '', 0, 'no', '', '', 0, 'no', '', '', 0),
(8, 6, 1, '0181111', '018121', '800', NULL, '1001', 'yes', 'yes', '12:00', '14:00', 20, 'no', '', '', 0, 'no', '', '', 0, 'no', '', '', 0, 'no', '', '', 0, 'no', '', '', 0, 'no', '', '', 0),
(31, 6, 2, '', NULL, NULL, NULL, NULL, 'yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 7, 1, '01914184312', NULL, NULL, NULL, NULL, 'yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 8, 1, '019XXXXX', '019XXXXXX', '800', '', '2A70', 'no', 'no', '', '', 0, 'no', '', '', 0, 'no', '', '', 0, 'no', '', '', 0, 'no', '', '', 0, 'no', '', '', 0, 'no', '', '', 0),
(4, 8, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 9, 1, '018XXXXXX', '01988888', '1000', NULL, '3001', 'yes', 'yes', '20:00', '22:00', 15, 'no', '', '', 0, 'no', '', '', 0, 'yes', '18:00', '21:00', 25, 'no', '', '', 0, 'no', '', '', 0, 'no', '', '', 0),
(17, 10, 1, '018XXXXXXXX', '018121', '500', '', '1006', 'yes', 'yes', '18:00', '20:00', 30, 'no', '', '', 0, 'no', '', '', 0, 'no', '', '', 0, 'no', '', '', 0, 'no', '', '', 0, 'no', '', '', 0),
(19, 12, 1, '019XXXXXXXX', '019XXXXX', '800', '', '', 'no', 'no', '', '', 0, 'no', '', '', 0, 'no', '', '', 0, 'no', '', '', 0, 'no', '', '', 0, 'no', '', '', 0, 'no', '', '', 0),
(20, 13, 1, '019XXXXXXXX', '018XXXXXX', '800', NULL, '3001', 'yes', 'yes', '18:00', '20:00', 25, 'no', '', '', 0, 'no', '', '', 0, 'no', '', '', 0, 'no', '', '', 0, 'no', '', '', 0, 'no', '', '', 0),
(21, 14, 1, '01234567890', '019XXXXXXXX', '1000', NULL, '2A05', 'yes', 'yes', '23:55', '05:59', 10, 'no', '', '', 0, 'no', '', '', 0, 'no', '', '', 0, 'no', '', '', 0, 'no', '', '', 0, 'yes', '19:00', '22:00', 35),
(24, 15, 1, '01914184312', '01914184312', '1500', NULL, '150', 'yes', 'yes', '02:04', '03:04', 5, 'no', '', '', 0, 'no', '', '', 0, 'no', '', '', 0, 'no', '', '', 0, 'no', '', '', 0, 'no', '', '', 0),
(30, 15, 2, '01914184312', NULL, NULL, NULL, NULL, 'yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 15, 3, '01914184312', NULL, NULL, NULL, NULL, 'yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, 15, 4, '01914184312', '01914184312', '1500', NULL, '20', 'yes', 'yes', '02:52', '05:53', 5, 'no', '', '', 0, 'no', '', '', 0, 'no', '', '', 0, 'no', '', '', 0, 'no', '', '', 0, 'no', '', '', 0),
(32, 16, 5, '12345678901', '01717356993', '1800', NULL, '102', 'yes', 'yes', '18:28', '21:30', 10, 'no', '', '', 0, 'no', '', '', 0, 'no', '', '', 0, 'no', '', '', 0, 'no', '', '', 0, 'no', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `subdistrict_thana`
--

CREATE TABLE IF NOT EXISTS `subdistrict_thana` (
  `sub_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `sub_thana` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subdistrict_thana`
--

INSERT INTO `subdistrict_thana` (`sub_id`, `id`, `sub_thana`) VALUES
(1, 1, 'Barguna'),
(2, 1, 'Barishal'),
(3, 1, 'Bhola'),
(4, 1, 'Jhalokathi'),
(5, 1, 'Patuakhali'),
(6, 1, 'Pirojpur'),
(8, 2, 'Bandarban'),
(9, 2, 'Brahmanbaria'),
(10, 2, 'Chandpur'),
(11, 2, 'Chittagong'),
(12, 2, 'Comilla'),
(13, 2, 'Cox’s Bazar'),
(14, 2, 'Feni'),
(15, 2, 'Khagrachari'),
(16, 2, 'Lakshmipur'),
(17, 2, 'Noakhali'),
(18, 2, 'Rangamati'),
(19, 3, 'Dhaka'),
(20, 3, 'Faridpur'),
(21, 3, 'Gazipur'),
(22, 3, 'Gopalganj'),
(23, 3, 'Kishoreganj'),
(24, 3, 'Madaripur'),
(25, 3, 'Manikganj'),
(26, 3, 'Munshiganj'),
(27, 3, 'Narayanganj'),
(28, 3, 'Narsingdi'),
(29, 3, 'Rajbari'),
(30, 3, 'Shariatpur'),
(31, 3, 'Tangail'),
(32, 4, 'Bhaluka'),
(33, 4, 'Trishal'),
(34, 4, 'Haluaghat'),
(35, 4, 'Muktagacha'),
(36, 4, 'Dhobaura'),
(37, 4, 'Fulbaria'),
(38, 4, 'Gaffargaon'),
(39, 4, 'Gauripur'),
(40, 4, 'Ishwarganj'),
(41, 4, 'Mymensingh Sadar'),
(42, 4, 'Nandail'),
(43, 4, 'Phulpur'),
(44, 4, 'Tara Khanda'),
(45, 5, 'Bagherhat'),
(46, 5, 'Chuadanga'),
(47, 5, 'Jessore'),
(48, 5, 'Jinaidaha'),
(49, 5, 'Khulna'),
(50, 5, 'Magura'),
(51, 5, 'Meherpur'),
(52, 5, 'Narail'),
(53, 5, 'Satkhira'),
(54, 6, 'Bogra'),
(55, 6, 'Chapinawabganj'),
(56, 6, 'Joypurhat'),
(57, 6, 'Naogaon'),
(58, 6, 'Natore'),
(59, 6, 'Pabna'),
(60, 6, 'Rajshahi'),
(61, 6, 'Sirajganj'),
(62, 7, 'Dinajpur'),
(63, 7, 'Gaibandha'),
(64, 7, 'Kurigram'),
(65, 7, 'Lalmonirhat'),
(66, 7, 'Nilphamari'),
(67, 7, 'Panchagarh'),
(68, 7, 'Rangpur'),
(69, 7, 'Thakurgaon'),
(70, 8, 'Hobiganj'),
(71, 8, 'Moulvibazar'),
(72, 8, 'Sunamganj'),
(73, 8, 'Sylhet');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userid` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `cell` varchar(30) NOT NULL,
  `passwd` varchar(250) NOT NULL,
  `pic` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8 AVG_ROW_LENGTH=1820;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `first_name`, `last_name`, `email`, `cell`, `passwd`, `pic`) VALUES
(42, 'Saleh', 'Ahmed', 'abc@gmail.com', '01717356993', '$2y$10$K7t3z3dqyjPP2lIzaFxvT.qSFOdzHGSDqnJxFkHkE6X1.5aESizyO', '42.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abulance`
--
ALTER TABLE `abulance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`appoint_id`), ADD KEY `FK_appointment_schedule_schedule_id` (`schedule_id`), ADD KEY `FK_appointment_user_userid` (`userid`);

--
-- Indexes for table `blood_bank`
--
ALTER TABLE `blood_bank`
  ADD PRIMARY KEY (`blood_bank_id`), ADD KEY `FK_blood_bank_admin_admin_id` (`admin_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`), ADD KEY `FK_booking_hospitals_room_room_id` (`category`), ADD KEY `FK_booking_hospital_hospital_id` (`hospital_id`), ADD KEY `FK_booking_user_userid` (`userid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD UNIQUE KEY `UK_district_id` (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doctor_id`), ADD UNIQUE KEY `UK_doctor_doctor_id` (`doctor_id`);

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`donor_id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`hospital_id`), ADD KEY `FK_hospital_admin_admin_id` (`admin_id`);

--
-- Indexes for table `hospitals_room`
--
ALTER TABLE `hospitals_room`
  ADD PRIMARY KEY (`id`), ADD KEY `FK_hospitals_room_hospital_hospital_id` (`hospital_id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`rating_id`,`userid`,`hospital_id`), ADD KEY `FK_Rating_hospital_hospital_id` (`hospital_id`), ADD KEY `FK_Rating_user_userid` (`userid`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`doctor_id`,`hospital_id`), ADD UNIQUE KEY `UK_schedule_schedule_id` (`schedule_id`), ADD KEY `FK_schedule_hospital_hospital_id` (`hospital_id`);

--
-- Indexes for table `subdistrict_thana`
--
ALTER TABLE `subdistrict_thana`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abulance`
--
ALTER TABLE `abulance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `blood_bank`
--
ALTER TABLE `blood_bank`
  MODIFY `blood_bank_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `doctor_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `donor_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `hospital_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `hospitals_room`
--
ALTER TABLE `hospitals_room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `subdistrict_thana`
--
ALTER TABLE `subdistrict_thana`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=74;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=49;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
