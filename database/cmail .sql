-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2021 at 06:46 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cmail`
--

-- --------------------------------------------------------

--
-- Table structure for table `compose`
--

CREATE TABLE `compose` (
  `message_ID` int(11) NOT NULL,
  `sender` varchar(50) NOT NULL,
  `receiver` varchar(50) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `data` varchar(50) NOT NULL,
  `dataType` varchar(20) NOT NULL,
  `trash` int(11) NOT NULL DEFAULT '0',
  `dateSent` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `compose`
--

INSERT INTO `compose` (`message_ID`, `sender`, `receiver`, `subject`, `message`, `data`, `dataType`, `trash`, `dateSent`) VALUES
(3, '', '', 'fgf', '', '', '', 0, '2021-03-16 17:44:25');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_ID` int(11) NOT NULL,
  `cmail` varchar(50) NOT NULL,
  `firstName` varchar(25) NOT NULL,
  `lastName` varchar(25) NOT NULL,
  `phoneNo` bigint(15) NOT NULL,
  `date_of_birth` date NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `dateCreate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `blocked` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_ID`, `cmail`, `firstName`, `lastName`, `phoneNo`, `date_of_birth`, `password`, `image`, `dateCreate`, `blocked`) VALUES
(3, '', '', 'cg', 0, '0000-00-00', '', '', '2021-03-16 17:44:39', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `compose`
--
ALTER TABLE `compose`
  ADD PRIMARY KEY (`message_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `compose`
--
ALTER TABLE `compose`
  MODIFY `message_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
