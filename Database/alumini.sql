-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2022 at 06:51 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumini`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `lid` varchar(100) NOT NULL,
  `lpass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`lid`, `lpass`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `eid` int(100) NOT NULL,
  `sid` varchar(100) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `etype` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `msg` varchar(1024) NOT NULL,
  `image` blob NOT NULL,
  `file` blob NOT NULL,
  `pdate` varchar(100) NOT NULL,
  `gname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`eid`, `sid`, `sname`, `etype`, `title`, `msg`, `image`, `file`, `pdate`, `gname`) VALUES
(1, '1', 'Selva.K', 'Job', '2022-Developer TCS', 'Walk Interview,\r\nFresher Candidate,\r\n2021-2022 Batch,\r\nMSc', 0x45696d6167652f6a6f622e706e67, 0x4566696c652f6a6f622e706e67, '05/10/2022', ''),
(2, '2', 'Priya P', 'Meeting', '2022 Alumni', 'Alumni meet is a gathering of passed out students of an institution and it is a place where the institution feels proud on seeing its successful alumni. ', 0x45696d6167652f416c756d6e695f53747564656e74732e6a7067, 0x4566696c652f416c756d6e695f53747564656e74732e646f6378, '13/10/2022', '');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `sid` int(100) NOT NULL,
  `lid` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `age` varchar(250) NOT NULL,
  `destin` varchar(250) NOT NULL,
  `mstatus` varchar(250) NOT NULL,
  `course` varchar(250) NOT NULL,
  `year` varchar(250) NOT NULL,
  `depart` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `pno` varchar(250) NOT NULL,
  `address` varchar(500) NOT NULL,
  `photos` longblob NOT NULL,
  `rdate` varchar(250) NOT NULL,
  `gname` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`sid`, `lid`, `password`, `name`, `gender`, `age`, `destin`, `mstatus`, `course`, `year`, `depart`, `email`, `pno`, `address`, `photos`, `rdate`, `gname`) VALUES
(2, 'SID001', '123', 'Rani.G', 'Female', '28', 'Staff', 'Married', 'M.Sc', '2021', 'Computer Science', 'immaslmmail@gmail.com', '9994246152', 'Kamaraj Nagar,\r\nJunction Road,\r\nSalem-9.', 0x53746166662f46312e6a7067, '05/10/2022', 'Group'),
(3, 'SID002', '321', 'Raja G', 'Male', '31', 'Staff', 'Unmarried', 'M.Sc', '2021', 'Computer Science', 'immaslmmail@gmail.com', '9790269325', 'Salem', 0x53746166662f4d342e6a7067, '12/10/2022', 'Group');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `sid` int(100) NOT NULL,
  `rno` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `destin` varchar(100) NOT NULL,
  `mstatus` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `depart` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pno` varchar(100) NOT NULL,
  `address` varchar(250) NOT NULL,
  `photos` blob NOT NULL,
  `rdate` varchar(100) NOT NULL,
  `gname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`sid`, `rno`, `password`, `name`, `gender`, `age`, `destin`, `mstatus`, `course`, `year`, `depart`, `email`, `pno`, `address`, `photos`, `rdate`, `gname`) VALUES
(1, '22PG001', '12345', 'Selva.K', 'Male', '27', 'Salem', 'Unmarried', 'M.Sc', '2013', 'Computer Science', 'selvairt@gmail.com', '9994746203', 'Murugan Street,\r\nSalem.', 0x53747564656e74732f4d312e6a7067, '05/10/2022', 'Group'),
(2, '22PG002', '54321', 'Priya P', 'Female', '22', 'Salem', 'Unmarried', 'M.Sc', '2021', 'Computer Science', 'priyap@gmail.com', '9790269326', 'Salem', 0x53747564656e74732f46382e706e67, '12/10/2022', 'Group');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `eid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `sid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `sid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
