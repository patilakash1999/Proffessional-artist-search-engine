-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2022 at 09:54 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `artists`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `AdminName` varchar(200) NOT NULL,
  `EmailId` varchar(150) NOT NULL,
  `ContactNumber` bigint(12) NOT NULL,
  `password` varchar(250) NOT NULL,
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `AdminName`, `EmailId`, `ContactNumber`, `password`, `updationDate`) VALUES
(1, 'admin', 'Vinay', 'admin@gmail.com', 1234567890, 'e10adc3949ba59abbe56e057f20f883e', '31-05-2022 06:48:12 PM');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `categoryName` varchar(255) DEFAULT NULL,
  `categoryDescription` longtext DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `categoryName`, `categoryDescription`, `creationDate`, `updationDate`) VALUES
(1, 'Photographer', 'Photographer', '2022-05-31 13:25:57', NULL),
(2, 'Singer', 'Singer', '2022-06-01 13:13:52', NULL),
(3, 'Software Engineer', 'Software Engineer', '2022-06-01 14:44:45', NULL),
(4, 'Yoga Trainers', 'Yoga Trainers', '2022-06-02 06:13:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(11) NOT NULL,
  `stateName` varchar(255) DEFAULT NULL,
  `stateDescription` tinytext DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `stateName`, `stateDescription`, `postingDate`, `updationDate`) VALUES
(1, 'Karnataka', 'Karnataka', '2022-05-31 13:29:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(11) NOT NULL,
  `categoryid` int(11) DEFAULT NULL,
  `subcategory` varchar(255) DEFAULT NULL,
  `creationDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `userip` binary(16) NOT NULL,
  `loginTime` timestamp NOT NULL DEFAULT current_timestamp(),
  `logout` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `uid`, `username`, `userip`, `loginTime`, `logout`, `status`) VALUES
(1, 1, 'xyz@gmail.com', 0x3a3a3100000000000000000000000000, '2022-06-01 11:13:29', '', 1),
(2, 2, 'omkar@gmail.com', 0x3a3a3100000000000000000000000000, '2022-06-01 12:20:40', '01-06-2022 05:53:15 PM', 1),
(3, 2, 'omkar@gmail.com', 0x3a3a3100000000000000000000000000, '2022-06-01 13:36:11', '', 1),
(4, 2, 'omkar@gmail.com', 0x3a3a3100000000000000000000000000, '2022-06-01 14:36:00', '01-06-2022 08:06:32 PM', 1),
(5, 0, 'vinay@gmail.com', 0x3a3a3100000000000000000000000000, '2022-06-01 14:44:01', '', 0),
(6, 3, 'vinay@gmail.com', 0x3a3a3100000000000000000000000000, '2022-06-01 14:44:56', '01-06-2022 08:16:33 PM', 1),
(7, 2, 'omkar@gmail.com', 0x3a3a3100000000000000000000000000, '2022-06-01 16:40:10', '01-06-2022 10:24:12 PM', 1),
(8, 4, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2022-06-02 06:15:35', '02-06-2022 11:53:37 AM', 1),
(9, 4, 'test@gmail.com', 0x3a3a3100000000000000000000000000, '2022-06-04 08:33:57', '04-06-2022 02:04:21 PM', 1),
(10, 3, 'vinay@gmail.com', 0x3a3a3100000000000000000000000000, '2022-06-04 08:46:13', '04-06-2022 02:17:31 PM', 1),
(11, 5, 'monalisamarx@gmail.com', 0x3a3a3100000000000000000000000000, '2022-06-06 06:16:41', '06-06-2022 11:49:12 AM', 1),
(12, 5, 'monalisamarx@gmail.com', 0x3a3a3100000000000000000000000000, '2022-06-06 06:22:53', '06-06-2022 11:53:44 AM', 1),
(13, 1, 'xyz@gmail.com', 0x3a3a3100000000000000000000000000, '2022-06-06 07:03:01', '06-06-2022 12:34:51 PM', 1),
(14, 0, 'xyz', 0x3a3a3100000000000000000000000000, '2022-06-17 09:24:55', '', 0),
(15, 1, 'xyz@gmail.com', 0x3a3a3100000000000000000000000000, '2022-06-17 09:25:03', '17-06-2022 02:55:29 PM', 1),
(16, 1, 'xyz@gmail.com', 0x3a3a3100000000000000000000000000, '2022-06-25 07:26:31', '25-06-2022 12:57:23 PM', 1),
(17, 1, 'k.vinay1620@gmail.com', 0x3a3a3100000000000000000000000000, '2022-06-27 07:42:52', '27-06-2022 01:17:29 PM', 1),
(18, 1, 'k.vinay1620@gmail.com', 0x3a3a3100000000000000000000000000, '2022-06-27 07:47:48', '27-06-2022 01:18:24 PM', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullName` varchar(255) DEFAULT NULL,
  `userEmail` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `contactNo` bigint(11) DEFAULT NULL,
  `address` tinytext DEFAULT NULL,
  `State` varchar(255) DEFAULT NULL,
  `categoryName` varchar(255) DEFAULT NULL,
  `pincode` int(6) DEFAULT NULL,
  `servicedetails` tinytext NOT NULL,
  `facebook` varchar(25) NOT NULL,
  `instagram` varchar(25) NOT NULL,
  `twitter` varchar(25) NOT NULL,
  `linkedin` varchar(25) NOT NULL,
  `userImage` varchar(255) DEFAULT NULL,
  `regDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL,
  `status` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullName`, `userEmail`, `password`, `contactNo`, `address`, `State`, `categoryName`, `pincode`, `servicedetails`, `facebook`, `instagram`, `twitter`, `linkedin`, `userImage`, `regDate`, `updationDate`, `status`) VALUES
(2, 'Omkar', 'omkar@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 123456789, 'Belgaum', 'Karnataka', 'Singer', 590001, 'Singing is my hobby ', 'https://www.facebook.com/', 'https://www.instagram.com', 'https://twitter.com/', 'https://in.linkedin.com/', '03716a2becd369fc30f98e426ac4e61b.png', '2022-06-01 12:20:31', NULL, 1),
(3, 'Vinay', 'vinay@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 123456789, 'BGM', 'Karnataka', 'Software Engineer', 590001, 'Website Design', 'https://www.facebook.com/', 'https://www.instagram.com', 'https://twitter.com/', 'https://in.linkedin.com/', '03716a2becd369fc30f98e426ac4e61b.png', '2022-06-01 14:44:15', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` int(11) NOT NULL,
  `fullName` varchar(255) DEFAULT NULL,
  `userEmail` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `contactNo` bigint(11) DEFAULT NULL,
  `address` tinytext DEFAULT NULL,
  `State` varchar(255) DEFAULT NULL,
  `pincode` int(6) DEFAULT NULL,
  `userImage` varchar(255) DEFAULT NULL,
  `regDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` timestamp NULL DEFAULT NULL,
  `status` int(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `fullName`, `userEmail`, `password`, `contactNo`, `address`, `State`, `pincode`, `userImage`, `regDate`, `updationDate`, `status`) VALUES
(1, 'vinay', 'k.vinay1620@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 7259588979, '#1 BGM', 'Karnataka', 590006, NULL, '2022-06-27 07:42:35', NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userEmail` (`userEmail`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userEmail` (`userEmail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
