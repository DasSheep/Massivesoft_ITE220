-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2017 at 03:06 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `massivesoft`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `memberID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `active` varchar(255) NOT NULL,
  `resetToken` varchar(255) DEFAULT NULL,
  `resetComplete` varchar(3) DEFAULT 'No'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`memberID`, `username`, `password`, `email`, `active`, `resetToken`, `resetComplete`) VALUES
(6, 'test', '$2y$10$jPnuY7YFQ9bWXXAEglslL.Slh.0g643nVCibuaGv8bsM25ztnzM9K', 'test@mail.com', 'Yes', NULL, 'No'),
(7, 'Trin', '$2y$10$DM9jfSqM/woLVXKb1F7mP./7HNHhtDAx4ETRNK36aB08B1G1FwEae', 'trin@mail.com', 'Yes', NULL, 'No'),
(8, 'Del', '$2y$10$/x5xSu9qqXL9K70KfYuW0utEQ/641YRuR0lhkixQZYEV5g56BxyZy', 'del@mail.com', 'Yes', NULL, 'No'),
(9, 'margaux', '$2y$10$jzGpnf313wHvB1xDhFc/cemCoz1r4Wl2ypW3Yaldqfsx.aNhkC5fi', 'margaux@mail.com', 'Yes', NULL, 'No'),
(10, 'picky', '$2y$10$TJ/mBSiOlmYXvKBpOVBoz.j9tUmhhfWlU2MNQm59yJO7mdKZbqHOK', 'picky@mail.com', 'Yes', NULL, 'No');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`memberID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `memberID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
