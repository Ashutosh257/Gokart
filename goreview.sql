-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2017 at 10:22 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `review`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE IF NOT EXISTS `admin_info` (
`aid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`aid`, `name`, `password`) VALUES
(1, 'jayesh', 'jayesh'),
(2, 'ashay', 'ashay');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `email` varchar(20) NOT NULL,
  `feed` varchar(150) NOT NULL,
`id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`email`, `feed`, `id`) VALUES
('cj@jc.com', 'nice website!!', 1);

-- --------------------------------------------------------

--
-- Table structure for table `p_info`
--

CREATE TABLE IF NOT EXISTS `p_info` (
`pid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `descr` varchar(20) NOT NULL,
  `cost` int(10) NOT NULL,
  `image` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_info`
--

INSERT INTO `p_info` (`pid`, `name`, `type`, `brand`, `descr`, `cost`, `image`) VALUES
(1, 'ceos700d', 'camera', 'canon', 'dslr camera', 20000, 'ceos700d.jpg'),
(2, 'ces800d', 'camera', 'canon', 'dlsr camera', 21000, 'ceos800d.jpg'),
(3, 'ces1300d', 'camera', 'canon', 'dslr camera', 22000, 'ceos1300d.jpg'),
(4, 'cg7', 'camera', 'canon', 'dslr camera', 23000, 'cg7.jpg'),
(5, 'galaxyS8', 'mobile', 'samsung', 'infinity display', 55000, 'galaxys8.jpg'),
(6, 'le1', 'mobile', 'le eco', 'chinese', 10000, 'le1.jpg'),
(7, 'LGK10', 'mobile', 'LG', 'mobile phone', 15000, 'lgk10.jpg'),
(8, 'LGV20', 'mobile', 'LG', 'mobile phone', 25000, 'lgv20.jpg'),
(9, 'honor8', 'mobile', 'honor', 'honor dual cam phone', 28000, 'honor8.jpg'),
(10, 'np900', 'camera', 'nikon', 'very good camera\r\nmu', 55000, 'np900.jpg'),
(11, 'iPhone 7', 'mobile', 'iphone', 'Best iOS experience!', 40000, 'iphone7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `p_review`
--

CREATE TABLE IF NOT EXISTS `p_review` (
`rid` int(11) NOT NULL,
  `pid` varchar(20) NOT NULL,
  `uid` varchar(20) NOT NULL,
  `review` varchar(152) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_review`
--

INSERT INTO `p_review` (`rid`, `pid`, `uid`, `review`) VALUES
(1, '5', '1', 'asdfghjkl'),
(2, '2', '1', '12121'),
(3, '2', '1', '123221'),
(4, '5', '1', 'ho gaya'),
(5, '5', '1', 'ghar jau kya'),
(6, '5', '1', 'mast hai'),
(7, '2', '1', 'nice product'),
(10, '4', '1', 'must buy'),
(11, '4', '1', 'vry good'),
(12, '5', '1', 'csi'),
(14, '1', '1', 'kay mast ahe'),
(15, '1', '1', 'awesome!!!!!!!!1'),
(16, '1', '1', 'lihaycha kam tuza'),
(18, '6', '1', 'awusum'),
(19, '11', '1', 'dont buy'),
(20, '7', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE IF NOT EXISTS `subscribe` (
`id` int(11) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`id`, `email`) VALUES
(1, 'cj@jc.com');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
`uid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`uid`, `name`, `email`, `password`) VALUES
(1, 'Jayesh', 'cj@jc.com', 'cj'),
(2, 'Ashay', 'ash@ash.com', 'ash'),
(3, 'snehal', 'snehal@rait.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
 ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p_info`
--
ALTER TABLE `p_info`
 ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `p_review`
--
ALTER TABLE `p_review`
 ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
 ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `p_info`
--
ALTER TABLE `p_info`
MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `p_review`
--
ALTER TABLE `p_review`
MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
