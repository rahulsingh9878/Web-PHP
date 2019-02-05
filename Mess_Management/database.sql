-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2018 at 06:59 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ip`
--

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(200) NOT NULL,
  `user` varchar(200) NOT NULL,
  `item` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL DEFAULT '0',
  `type` varchar(200) NOT NULL,
  `datee` date NOT NULL,
  `day` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `user`, `item`, `price`, `type`, `datee`, `day`) VALUES
(39, 'Sam', 'dal pratha', '', 'hosteller', '2018-05-09', 'tuesday'),
(40, 'Sam', 'curd', '', 'hosteller', '2018-05-09', 'tuesday'),
(41, 'Sam', 'tea', '', 'hosteller', '2018-05-09', 'tuesday'),
(42, 'Sam', 'veg sandwich', '', 'hosteller', '2018-05-09', 'wednesday'),
(43, 'Sam', 'tea', '', 'hosteller', '2018-05-09', 'wednesday'),
(44, 'Sam', 'black channa', '', 'hosteller', '2018-05-09', 'wednesday'),
(45, 'Sam', 'jeera rice', '', 'hosteller', '2018-05-09', 'wednesday'),
(46, 'Sam', 'muffin', '', 'hosteller', '2018-05-09', 'wednesday'),
(47, 'Sam', 'chilli vegetable', '', 'hosteller', '2018-05-09', 'wednesday'),
(48, 'Sam', 'rice', '', 'hosteller', '2018-05-09', 'wednesday'),
(49, 'Sam', 'butter', '', 'hosteller', '2018-05-09', 'monday'),
(50, 'Sam', 'pickle', '', 'hosteller', '2018-05-09', 'monday'),
(51, 'Sam', 'aloo jeera', '', 'hosteller', '2018-05-09', 'monday'),
(52, 'Sam', 'rice', '', 'hosteller', '2018-05-09', 'monday'),
(53, 'vivek', 'aloo pratha', '', 'hosteller', '2018-05-09', 'monday'),
(54, 'vivek', 'butter', '', 'hosteller', '2018-05-09', 'monday'),
(55, 'vivek', 'pickle', '', 'hosteller', '2018-05-09', 'monday');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `branch` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `number` int(200) NOT NULL,
  `pass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user`, `name`, `branch`, `type`, `number`, `pass`) VALUES
(8, 12345, 'admin', 'college', 'college', 12345678, 'admin'),
(10, 1610991323, 'Sam', 'CSE', 'hosteller', 1610991323, 'asdf'),
(11, 1610991977, 'vivek', 'cse', 'hosteller', 2147483647, 'vds');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
