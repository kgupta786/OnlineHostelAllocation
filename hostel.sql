-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2017 at 11:08 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`name`, `email`, `mobile`, `password`) VALUES
('hello', 'iitengineer786@gmail.com', '45454545', 'hello'),
('hellog', 'k@gmsil.com', '8556058216', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `block`
--

CREATE TABLE IF NOT EXISTS `block` (
  `blockname` varchar(50) NOT NULL,
  `location` varchar(20) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `block`
--

INSERT INTO `block` (`blockname`, `location`, `type`) VALUES
('A', 'East', 'Male'),
('B', 'West', 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `bookingid` int(11) NOT NULL,
  `rollno` int(11) NOT NULL,
  `block` varchar(100) NOT NULL,
  `roomno` int(11) NOT NULL,
  `bookingdate` varchar(20) NOT NULL,
  `leavedate` varchar(20) DEFAULT NULL,
  `amount` bigint(20) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bookingid`, `rollno`, `block`, `roomno`, `bookingdate`, `leavedate`, `amount`, `status`) VALUES
(1, 1, 'A', 101, '7/17/2017', '', 54000, 'booked'),
(2, 2, 'A', 100, '7/17/2017', '', 60000, 'booked'),
(4, 3, 'A', 102, '7/17/2017', '15/7/2018', 48000, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `dapartements`
--

CREATE TABLE IF NOT EXISTS `dapartements` (
  `department` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `headname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roompackages`
--

CREATE TABLE IF NOT EXISTS `roompackages` (
  `packageid` int(11) NOT NULL,
  `sharingtype` int(11) NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` bigint(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roompackages`
--

INSERT INTO `roompackages` (`packageid`, `sharingtype`, `description`, `price`) VALUES
(4, 1, 'NIce room with better furniture and other facilite', 60000),
(5, 2, 'nice rooms for 2-seaters with study tables and att', 54000),
(6, 3, 'better furniture quality better results,nice beds ', 48000),
(7, 4, 'good  room for four seaters .It does not include attached bathrooms', 40000),
(8, 5, 'better quality of room ,nice air ventilation,best ', 36000),
(9, 6, 'nice quality well maintained', 32000);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE IF NOT EXISTS `rooms` (
  `roomno` int(11) NOT NULL,
  `block` varchar(50) NOT NULL,
  `capacity` int(11) NOT NULL,
  `roomtype` varchar(10) NOT NULL,
  `description` varchar(200) NOT NULL,
  `location` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`roomno`, `block`, `capacity`, `roomtype`, `description`, `location`) VALUES
(100, 'A', 1, 'A.C.', 'nice', '1st Floor'),
(100, 'B', 2, 'A.C.', 'nice', '1st Floor'),
(101, 'A', 2, 'Non A.C.', 'nice', '1st Floor'),
(101, 'B', 1, 'Non A.C.', 'nice', '1st Floor'),
(102, 'A', 3, 'A.C.', 'nice', '1st Floor'),
(102, 'B', 3, 'A.C.', 'nice', '1st Floor'),
(103, 'A', 4, 'Non A.C.', 'nice', '2nd Floor'),
(103, 'B', 1, 'A.C.', 'nice', '1st Floor'),
(104, 'A', 1, 'Non A.C.', 'nice', '2nd Floor'),
(104, 'B', 2, 'A.C.', 'nice', '1st Floor'),
(105, 'A', 3, 'Non A.C.', 'nice', '2nd Floor'),
(105, 'B', 2, 'A.C.', 'nice', '2nd Floor'),
(106, 'B', 3, 'A.C.', 'nice', '1st Floor');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `roll` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `fname` varchar(500) NOT NULL,
  `mname` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `mobile` varchar(500) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `gender` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `dob` varchar(500) NOT NULL,
  `course` varchar(500) NOT NULL,
  `semester` int(11) NOT NULL,
  `departement` varchar(500) NOT NULL,
  `status` varchar(40) NOT NULL DEFAULT 'inactive',
  `passwrd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`roll`, `name`, `fname`, `mname`, `email`, `mobile`, `photo`, `gender`, `address`, `dob`, `course`, `semester`, `departement`, `status`, `passwrd`) VALUES
(1, 'raman', 'Mr. Mangat ram', 'Mrs. Rani', 'raman@gmail.com', '9888888888', 'images/far_cry_22-wallpaper-1920x1080.jpg', 'Male', 'ddddddddd', '2017-11-11', 'B.Tech', 1, 'CSE', 'active', 'aaaaaa'),
(2, 'kamal', 'Mr Sharma', 'Mrs. Rani Sharma', 'kamal@gmail.com', '88888888', 'images/pirates_of_the_caribbean_5_dead_men_tell_no_tales-wallpaper-1920x1080.jpg', 'Male', 'batala road', '1997-11-11', 'B.Tech', 1, 'ECE', 'active', 'aaaaaa'),
(3, 'tarun', 'Mr singh', 'Mrs Kaur', 'tarun@gmail.com', '77888878787', 'images/the_beautifull_view-wallpaper-1920x1080.jpg', 'Male', 'queens road', '1996-12-02', 'B.Tech', 1, 'ME', 'active', 'aaaaaa'),
(4, 'ashima', 'Mr Kapoor', 'Mrs. kapoor', 'ashima@gmail.com', '6767766676', 'images/the_witcher_3_wild_hunt_geralt_of_rivia_2-wallpaper-1920x1080.jpg', 'Female', 'quens road ', '1997-12-03', 'B.Tech', 1, 'CSE', 'active', 'aaaaaa'),
(5, 'arushi', 'Mr gupta', 'Mrs gupta', 'arushi@gmail.com', '98777777777', 'images/red_sky_big_sun_set-wallpaper-1920x1080.jpg', 'Female', 'batala road', '1997-12-22', 'B.Tech', 2, 'ME', 'active', 'aaaaaa'),
(6, 'nitika', 'Mr mahajan', 'Mrs mahajan', 'nitika@gmail.com', '9898989888777', 'images/red_sky_big_sun_set-wallpaper-1920x1080.jpg', 'Female', 'near bus stand', '1997-02-22', 'M.Tech', 1, 'ECE', 'active', 'aaaaaa'),
(12, 'keshav', 'aaaaa', 'aaaaaaaaa', 'iitengineer786@gmail.com', '8555555555555', 'images/the_beautifull_view-wallpaper-1920x1080.jpg', 'Male', 'fffffffff', '2017-02-05', 'B.Tech', 3, 'CSE', 'active', 'aaaaaa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `block`
--
ALTER TABLE `block`
  ADD PRIMARY KEY (`blockname`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bookingid`), ADD KEY `rollno` (`rollno`), ADD KEY `block` (`block`), ADD KEY `roomno` (`roomno`);

--
-- Indexes for table `dapartements`
--
ALTER TABLE `dapartements`
  ADD PRIMARY KEY (`department`);

--
-- Indexes for table `roompackages`
--
ALTER TABLE `roompackages`
  ADD PRIMARY KEY (`packageid`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`roomno`,`block`), ADD KEY `block` (`block`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`roll`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bookingid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `roompackages`
--
ALTER TABLE `roompackages`
  MODIFY `packageid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`rollno`) REFERENCES `signup` (`roll`),
ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`block`) REFERENCES `block` (`blockname`),
ADD CONSTRAINT `booking_ibfk_3` FOREIGN KEY (`roomno`) REFERENCES `rooms` (`roomno`);

--
-- Constraints for table `rooms`
--
ALTER TABLE `rooms`
ADD CONSTRAINT `rooms_ibfk_1` FOREIGN KEY (`block`) REFERENCES `block` (`blockname`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
