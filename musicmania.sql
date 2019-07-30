-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2019 at 09:07 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `musicmania`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `regid` int(11) NOT NULL,
  `regname` varchar(100) NOT NULL,
  `regemail` varchar(100) NOT NULL,
  `regpass` varchar(100) NOT NULL,
  `regmob` bigint(20) NOT NULL,
  `regtype` varchar(50) NOT NULL,
  `regstatus` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`regid`, `regname`, `regemail`, `regpass`, `regmob`, `regtype`, `regstatus`) VALUES
(10, 'navneet kaur sekhon', 'nsekhon123@gmail.com', 'a3c3ea130645811d164be96573d66c15', 2898892311, 'moderator', 'Active'),
(11, 'twinkle  arora', 'twinklearora@gmail.com', 'a3c3ea130645811d164be96573d66c15', 6478929101, 'user', 'Active'),
(9, 'navneet kaur', 'navneetkaur9@gmail.com', 'a3c3ea130645811d164be96573d66c15', 8796541231, 'admin', 'Approve');

-- --------------------------------------------------------

--
-- Table structure for table `tbsongs`
--

CREATE TABLE `tbsongs` (
  `song_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `song_title` varchar(100) NOT NULL,
  `song_image` varchar(500) NOT NULL,
  `song` varchar(500) NOT NULL,
  `song_type` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbsongs`
--

INSERT INTO `tbsongs` (`song_id`, `email`, `song_title`, `song_image`, `song`, `song_type`, `status`) VALUES
(2, '', 'Breakup', 'insta.jpg', 'Breakup_1.mp3', 'mp3', 'Active'),
(7, '', 'Valentines_Special', '2.jpeg', 'Breakup_2.mp3', 'mp3', 'Active'),
(15, 'nsekhon123@gmail.com', 'Sihne lagde', 'maxresdefault.jpg', 'Sohne Lagde - Sidhu Moose Wala.mp3', 'mp3', 'Active'),
(16, 'nsekhon123@gmail.com', 'Johncena entry music', 'John-Cena-The-Time-is-Now-300x300.jpg', 'John-Cena-The-Time-is-Now-WWE.mp3', 'mp3', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`regid`),
  ADD UNIQUE KEY `email` (`regemail`);

--
-- Indexes for table `tbsongs`
--
ALTER TABLE `tbsongs`
  ADD PRIMARY KEY (`song_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `regid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbsongs`
--
ALTER TABLE `tbsongs`
  MODIFY `song_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
