-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2023 at 03:25 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `j-o-b`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(12) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `uname`, `pass`) VALUES
(1, 'admin', 'Admin'),
(2, 'xyz', 'xyz123'),
(3, 'abc', 'abc12');

-- --------------------------------------------------------

--
-- Table structure for table `cdetails`
--

CREATE TABLE `cdetails` (
  `cid` int(12) NOT NULL,
  `c_uname` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `contperson` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contno` varchar(10) NOT NULL,
  `whatsappno` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cdetails`
--

INSERT INTO `cdetails` (`cid`, `c_uname`, `name`, `contperson`, `address`, `city`, `email`, `contno`, `whatsappno`) VALUES
(1, 'info', 'Infotech', 'krishnan', '22/7 gandhi nagar', 'chennai', 'infotech@gmail.com', '834598762', '834598762'),
(2, 'anuj', 'ABC Tech', 'Anuj kumar', '223/7 golden garden', 'madurai', 'abc_tech@gmail.com', '8234567809', '8234567809');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `c_id` int(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `gname` varchar(30) NOT NULL,
  `msg` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`c_id`, `email`, `gname`, `msg`) VALUES
(1, 'priya@gmail.com', 'Priya', 'Nice web application'),
(2, 'sameena@gmail.com', 'sameena', 'nice application');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_name` varchar(30) NOT NULL,
  `f_msg` varchar(30) NOT NULL,
  `f_usertype` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_name`, `f_msg`, `f_usertype`) VALUES
('info', 'HI ADMIN THIS IS WONDERFUL APP', 'Company'),
('jamuna', 'very useful in getting job', 'JobSeeker'),
('info', 'can select candidate easily', 'Company');

-- --------------------------------------------------------

--
-- Table structure for table `jdetails`
--

CREATE TABLE `jdetails` (
  `jid` int(12) NOT NULL,
  `j_uname` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phno` varchar(10) NOT NULL,
  `whno` varchar(10) NOT NULL,
  `qualification` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `yop` int(12) NOT NULL,
  `exp` varchar(30) NOT NULL,
  `resume` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jdetails`
--

INSERT INTO `jdetails` (`jid`, `j_uname`, `name`, `address`, `city`, `email`, `phno`, `whno`, `qualification`, `gender`, `dob`, `yop`, `exp`, `resume`) VALUES
(1, 'jamuna', 'Jamuna', 'suththananthan arch', 'erode', 'jamu@gmail.com', '6382207511', '6382207511', 'Bsc CT', 'female', '0000-00-00', 2023, 'fresher', 'AOA.pdf'),
(2, 'swetha', 'Swetha', 'Brindavan Mahal', 'erode', 'swethas@gmail.com', '7603701511', '7603701511', 'Mcom CS', 'female', '0000-00-00', 2023, 'fresher', 'Afr.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `j_applied`
--

CREATE TABLE `j_applied` (
  `pj_id` varchar(30) NOT NULL,
  `ap_name` varchar(30) NOT NULL,
  `pj_uname` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `j_applied`
--

INSERT INTO `j_applied` (`pj_id`, `ap_name`, `pj_uname`, `status`) VALUES
('3', 'jamuna', 'info', 'Selected'),
('2', 'jamuna', 'info', 'Rejected'),
('1', 'jamuna', 'info', '');

-- --------------------------------------------------------

--
-- Table structure for table `post_job`
--

CREATE TABLE `post_job` (
  `p_id` int(12) NOT NULL,
  `u_name` varchar(30) NOT NULL,
  `cname` varchar(30) NOT NULL,
  `title` varchar(30) NOT NULL,
  `vacancy` varchar(30) NOT NULL,
  `qualification` varchar(30) NOT NULL,
  `salary` varchar(30) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post_job`
--

INSERT INTO `post_job` (`p_id`, `u_name`, `cname`, `title`, `vacancy`, `qualification`, `salary`, `Description`) VALUES
(1, 'info', 'Infotech', 'software engineer', '10', 'Bsc CS/CT/IT /BCA', '30000', 'who can handle errors well'),
(2, 'info', 'Infotech', 'developer', '6', 'freasher', '15000', 'fresher of cs stream can apply'),
(3, 'info', 'Infotech', 'junior developer', '7', 'freasher', '20000', 'fresher can apply');

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE `signin` (
  `sid` int(12) NOT NULL,
  `sname` varchar(30) NOT NULL,
  `spassword` varchar(30) NOT NULL,
  `susertype` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signin`
--

INSERT INTO `signin` (`sid`, `sname`, `spassword`, `susertype`) VALUES
(3, 'anuj', 'anuj@123', 'c'),
(2, 'info', 'info12', 'c'),
(1, 'jamuna', 'jamu02', 'j'),
(4, 'swetha', 'swe26', 'j');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`),
  ADD UNIQUE KEY `UNIQUE KEY` (`uname`);

--
-- Indexes for table `cdetails`
--
ALTER TABLE `cdetails`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `Foreign` (`c_uname`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `jdetails`
--
ALTER TABLE `jdetails`
  ADD PRIMARY KEY (`jid`),
  ADD KEY `Foreign key` (`j_uname`);

--
-- Indexes for table `post_job`
--
ALTER TABLE `post_job`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `signin`
--
ALTER TABLE `signin`
  ADD PRIMARY KEY (`sname`),
  ADD KEY `INDEX` (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cdetails`
--
ALTER TABLE `cdetails`
  MODIFY `cid` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `c_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jdetails`
--
ALTER TABLE `jdetails`
  MODIFY `jid` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `post_job`
--
ALTER TABLE `post_job`
  MODIFY `p_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `signin`
--
ALTER TABLE `signin`
  MODIFY `sid` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cdetails`
--
ALTER TABLE `cdetails`
  ADD CONSTRAINT `Foreign` FOREIGN KEY (`c_uname`) REFERENCES `signin` (`sname`);

--
-- Constraints for table `jdetails`
--
ALTER TABLE `jdetails`
  ADD CONSTRAINT `Foreign key` FOREIGN KEY (`j_uname`) REFERENCES `signin` (`sname`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
