-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2019 at 11:55 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hd`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `un` varchar(20) DEFAULT NULL,
  `ps` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`un`, `ps`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `f1`
--

CREATE TABLE `f1` (
  `id` int(11) NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  `city` varchar(40) DEFAULT NULL,
  `dis` varchar(40) DEFAULT NULL,
  `state` varchar(40) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `cidate` varchar(40) DEFAULT NULL,
  `codate` varchar(40) DEFAULT NULL,
  `m` varchar(40) DEFAULT NULL,
  `idno` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `f1`
--

INSERT INTO `f1` (`id`, `name`, `city`, `dis`, `state`, `email`, `cidate`, `codate`, `m`, `idno`) VALUES
(6, 'vinu', 'Mumbai', 'Mumbai', 'Maharashtra', 'vin@gmail.com', '12/11/2017', '15/11/2017', '3', '1020'),
(8, 'Kam', 'Delhi', 'Delhi', 'Delhi', 'kam@gmail.com', '2017-10-05', '2017-10-07', '3', '1120'),
(9, 'Rupu', 'Delhi', 'Delhi', 'Delhi', 'rupu5@gmail.com', '2017-10-05', '2017-10-07', '3', '1220');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `rno` varchar(20) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'unbook'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `rno`, `type`, `price`, `status`) VALUES
(10, '123', 'AC', 700, 'unbook'),
(11, '13', 'AC', 800, 'unbook'),
(12, '33', 'AC', 400, 'unbook'),
(13, '63', 'AC', 1100, 'unbook'),
(14, '83', 'AC', 1000, 'unbook'),
(15, '12', 'AC', 1700, 'unbook'),
(16, '231', 'AC', 1600, 'unbook'),
(17, '111', 'Non AC', 1289, 'unbook');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `f1`
--
ALTER TABLE `f1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `f1`
--
ALTER TABLE `f1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
