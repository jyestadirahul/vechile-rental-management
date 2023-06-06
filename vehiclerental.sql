-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2022 at 07:01 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `a049`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `cname` varchar(55) DEFAULT NULL,
  `car` varchar(55) DEFAULT NULL,
  `v1` varchar(55) DEFAULT NULL,
  `sdate` varchar(55) DEFAULT NULL,
  `edate` varchar(55) DEFAULT NULL,
  `fare` varchar(55) DEFAULT NULL,
  `dist` varchar(55) DEFAULT NULL,
  `d1` varchar(55) DEFAULT NULL,
  `amt` varchar(55) DEFAULT NULL,
  `dname` varchar(55) DEFAULT NULL,
  `rdate` varchar(30) DEFAULT NULL,
  `st` int(11) DEFAULT NULL,
  `bid` int(11) NOT NULL,
  `cid` varchar(44) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`cname`, `car`, `v1`, `sdate`, `edate`, `fare`, `dist`, `d1`, `amt`, `dname`, `rdate`, `st`, `bid`, `cid`) VALUES
('admin', 'goog', 'tn09678', '2022-10-28', '2022-10-29', '500', '-', '1', '300', 'praneeth', '2022-10-27', 0, 11, '5'),
('admin', 'goog', 'tn09678', '2022-11-02', '2022-11-04', '500', '-', '2', '1000', 'praneeth', NULL, 0, 12, '5'),
('admin', 'MG HECTOR', 'TN 02 BA 5861', '2022-11-05', '2022-11-06', '2500', '-', '1', '2000', 'praneeth', NULL, 0, 13, '6');

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `cid` int(11) NOT NULL,
  `cname` varchar(55) DEFAULT NULL,
  `v1` varchar(66) DEFAULT NULL,
  `v2` varchar(77) DEFAULT NULL,
  `v3` varchar(86) DEFAULT NULL,
  `v4` varchar(55) DEFAULT NULL,
  `v5` varchar(55) DEFAULT NULL,
  `v6` varchar(100) DEFAULT NULL,
  `st` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`cid`, `cname`, `v1`, `v2`, `v3`, `v4`, `v5`, `v6`, `st`) VALUES
(6, 'MG HECTOR', 'TN 02 BA 5861', '13', '9', '2500', '2000', 'uploads/mghector.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cname` varchar(55) DEFAULT NULL,
  `place` varchar(55) DEFAULT NULL,
  `street` varchar(55) DEFAULT NULL,
  `pcode` varchar(55) DEFAULT NULL,
  `cno` varchar(55) DEFAULT NULL,
  `uname` varchar(55) DEFAULT NULL,
  `pass` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cname`, `place`, `street`, `pcode`, `cno`, `uname`, `pass`) VALUES
('P.Suresh', 'yrtytr', 'yryrt7', '435344', '35345', '', 'aaa'),
('P.Suresh', 'yrtytr', 'yryrt7', '534534', '534534', 'aaa', 'aaa'),
('praneeth', 'chennai', 'village high road', '515870', '25468975232', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `ename` varchar(55) DEFAULT NULL,
  `dob` varchar(55) DEFAULT NULL,
  `addr` varchar(55) DEFAULT NULL,
  `cno` varchar(55) DEFAULT NULL,
  `email` varchar(55) DEFAULT NULL,
  `lic` varchar(55) DEFAULT NULL,
  `ano` varchar(55) DEFAULT NULL,
  `uname` varchar(55) DEFAULT NULL,
  `pass` varchar(55) DEFAULT NULL,
  `eid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`ename`, `dob`, `addr`, `cno`, `email`, `lic`, `ano`, `uname`, `pass`, `eid`) VALUES
('praneeth', '2003-06-18', '2/41 oc colony', '5645652546', 'jdjdsbfabfba@gmail.com', '5462485215', '605555703022', 'admin', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `review` varchar(555) DEFAULT NULL,
  `uname` varchar(77) DEFAULT NULL,
  `rid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`review`, `uname`, `rid`) VALUES
('fdfsfsd', 'aaa', 1),
('good car', 'admin', 2),
('', 'admin', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`rid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
