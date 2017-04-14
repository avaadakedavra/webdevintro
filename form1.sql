-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2017 at 11:43 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `examform`
--

-- --------------------------------------------------------

--
-- Table structure for table `form1`
--

CREATE TABLE `form1` (
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `moname` varchar(20) NOT NULL,
  `divb` varchar(10) NOT NULL,
  `seatno` varchar(7) NOT NULL,
  `centerno` int(4) NOT NULL,
  `dnsno` varchar(10) NOT NULL,
  `emonth` text NOT NULL,
  `srno` int(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form1`
--

INSERT INTO `form1` (`fname`, `mname`, `lname`, `moname`, `divb`, `seatno`, `centerno`, `dnsno`, `emonth`, `srno`) VALUES
('Barry', 'Henry', 'Allen', '', 'mumbai', 'J035162', 1120, '05.01.065', '2017-01', 27866),
('Wally', 'Joe', 'West', '', 'kolhapur', 'J035161', 1120, '05.01.065', '2013-03', 27865),
('Cisco', 'Escobar', 'Ramon', '', 'latur', 'J035160', 1120, '05.01.065', '2010-05', 27864),
('Harrison ', 'A', 'Wells', '', 'mumbai', 'J035159', 1120, '05.01.065', '2013-03', 27863),
('Barry', 'Henry', 'Allen', 'Nora', 'mumbai', 'J035164', 1120, '05.01.065', '2024-01', 27867),
('Eoaboard', 'A', 'Thawne', 'Laura', 'pune', 'J035163', 1120, '05.01.065', '2015-12', 27868),
('Eoaboard', 'A', 'Thawne', 'Laura', 'pune', 'J035165', 1120, '05.01.065', '2015-12', 27868),
('Iris', 'Joe', 'West', 'Miley', 'mumbai', 'J035166', 1120, '05.01.065', '2013-03', 27869),
('Jon', 'Ned', 'Snow', 'Catelyn', 'mumbai', 'J035167', 1120, '05.01.065', '2016-04', 27870);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form1`
--
ALTER TABLE `form1`
  ADD PRIMARY KEY (`seatno`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
