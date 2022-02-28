-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2022 at 02:52 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Username` varchar(100) NOT NULL,
  `Pwd` varchar(100) NOT NULL,
  `Typeofuser` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Username`, `Pwd`, `Typeofuser`) VALUES
('sachin', 'sachin', 'Admin'),
('sagyan', 'sagyan', 'Admin'),
('lakpa', 'lakpa', 'Admin'),
('ram', 'ram', 'General');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Cat_id` int(100) NOT NULL,
  `Cat_name` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Cat_id`, `Cat_name`) VALUES
(8, 'Family'),
(9, 'New');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `contactid` int(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Phno` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Message` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `Enquiryid` int(50) NOT NULL,
  `Packageid` int(50) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Mobileno` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `NoofDays` int(50) NOT NULL,
  `Child` int(50) NOT NULL,
  `Adults` int(50) NOT NULL,
  `Message` varchar(900) NOT NULL,
  `Statusfield` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`Enquiryid`, `Packageid`, `Name`, `Gender`, `Mobileno`, `Email`, `NoofDays`, `Child`, `Adults`, `Message`, `Statusfield`) VALUES
(13, 28, 'Good', 'Male', '9861902463', 'lakpasherpa@gmail.com', 6, 2, 6, 'WHat is the price', 'Confirm'),
(14, 28, 'adsfa', 'Male', '9812457898', 'lakpasherpa@gmail.com', 23, 2, 12, 'adsfaga', 'Confirm'),
(15, 28, 'adsfa', 'Male', '9812457898', 'lakpasherpa@gmail.com', 23, 2, 12, 'adsfaga', 'Confirm'),
(16, 28, 'adsfadf', 'Male', '9861902463', 'lakpasherpa@gmail.com', 12, 3, 5, 'Pasia kati lagxa', 'Confirm');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `regtime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `address`, `message`, `regtime`) VALUES
(1, 'Shubham', 'shubham@gmail.com', 'Butwal', 'Awesome', '2022-02-22 02:58:06'),
(2, ' Lakpa', 'lakpa@gmail.com ', 'Talinchowk ', 'OHh', '2022-02-22 03:02:03'),
(3, ' Lakpa', 'lakpa@gmail.com ', 'Talinchowk ', 'Ok', '2022-02-22 05:11:44');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `Packid` int(200) NOT NULL,
  `Packname` varchar(1000) NOT NULL,
  `Category` int(200) NOT NULL,
  `Packprice` int(200) NOT NULL,
  `Pic1` varchar(8000) NOT NULL,
  `Pic2` varchar(8000) NOT NULL,
  `Pic3` varchar(8000) NOT NULL,
  `Detail` varchar(8000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`Packid`, `Packname`, `Category`, `Packprice`, `Pic1`, `Pic2`, `Pic3`, `Detail`) VALUES
(28, 'Kalinchowk', 8, 1200, 'Screenshot (7).png', 'Screenshot (7).png', 'Screenshot (8).png', 'asdf'),
(29, 'view', 9, 30000, 'Screenshot (8).png', 'Screenshot (8).png', 'Screenshot (7).png', 'This is a good time to asdkfjladshb faklsdjfasdfasdf asdf ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `regtime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `email`, `address`, `phone`, `password`, `cpassword`, `regtime`) VALUES
(1, ' Lakpa', 'Sherpa ', 'lakpa@gmail.com ', 'Talinchowk ', '9861902469 ', 'lakpa', 'lakpa', '2022-01-28 09:09:11'),
(2, ' Sachin', 'shrestha ', 'sachin@gmail.com ', 'Banepa ', '985468435 ', 'sachin', 'sachin', '2022-01-28 09:18:37'),
(4, 'Sagyan', 'Shrestha', 'sagyan@gmail.com', 'sankhu', '12546859', 'sagyan', 'sagyan', '2022-01-28 09:20:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Cat_id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`contactid`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`Enquiryid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`Packid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `Cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `contactid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `Enquiryid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `Packid` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
