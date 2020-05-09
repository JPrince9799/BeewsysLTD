-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 09, 2020 at 04:55 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `youcheckedin`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `adminID` int(11) NOT NULL,
  `adminame` varchar(20) NOT NULL,
  `crsename` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`adminID`, `adminame`, `crsename`) VALUES
(1, 'Joseph Fisher', 'Economics 101'),
(2, 'Henry Brown', 'Calculus 2'),
(3, 'Janet Agyeman', 'Pre-Calculus'),
(4, 'Kofi Nimo', 'Financial Accounting 101'),
(5, 'Abigail Samson', 'Introduction to Engineering'),
(6, 'Joe Mensah', 'Multivariable Calculus'),
(7, 'Millicent Asiedu', 'Data Structures '),
(8, 'Fred Kyei', 'Leadership 1'),
(9, 'James Freeman', 'Computer Organization and Arch'),
(10, 'Professor Goldman', 'Theory 401');

-- --------------------------------------------------------

--
-- Table structure for table `assignments`
--

CREATE TABLE `assignments` (
  `assignID` int(11) NOT NULL,
  `adminID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `roomID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `uID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `username` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `roomID` int(11) NOT NULL,
  `roomname` varchar(50) NOT NULL,
  `roomcapacity` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`roomID`, `roomname`, `roomcapacity`) VALUES
(2, 'Founders Blk A101', 20),
(3, 'Engineering R401', 30),
(4, 'Research Blk B301', 50),
(5, 'Main Hall A205', 50),
(6, 'Main Hall A101', 50),
(7, 'Research Blk A105', 50),
(8, 'Founders Blk A202', 30),
(9, 'Enginnering B204', 20),
(10, 'Research Blk B301', 22),
(11, 'Research Blk A103', 19);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `usermail` varchar(30) NOT NULL,
  `upassword` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `usermail`, `upassword`) VALUES
(1, 'richard.nettey', 'richard.nettey@ashesi.edu.gh', 'richie11112023'),
(2, 'kojo.ntim', 'kojo.ntim@ashesi.edu.gh', 'ntim20222023'),
(3, 'abigail.cole', 'abigail.cole@ashesi.edu.gh', 'cole30012022'),
(4, 'sarah.coffie', 'sarah.coffie@ashesi.edu.gh', 'sarah15152023'),
(5, 'george.kovu', 'george.kovu@ashesi.edu.gh', 'georgy23232021'),
(6, 'nana.poku', 'nana.poku@ashesi.edu.gh', 'nana45762020'),
(7, 'asare.brown', 'asare.brown@ashesi.edu.gh', 'asare40222021'),
(8, 'nadeem.obi', 'nadeem.obi', 'nadeem24672022'),
(9, 'sammy.agyei', 'sammy.agyei@ashesi.edu.gh', 'sammy54522021'),
(10, 'elikem.osei', 'elikem.osei@ashesi.edu.gh', 'eli60602021'),
(11, 'jerry.freeman', 'jerry.freeman@ashesi.edu.gh', 'jerry30492023'),
(12, 'sasha.pienim', 'sasha.pienim@ashesi.edu.gh', 'sash29502021'),
(13, 'donald.tumpani', 'donald.tumpani@ashesi.edu.gh', 'donny30562023'),
(14, 'luke.harper', 'luke.harper@ashesi.edu.gh', 'luke54542021'),
(15, 'olivia.coomson', 'olivia.coomsom@ashesi.edu.gh', 'oliv70802021'),
(16, 'robert.newman@ashesi.edu.gh', 'robert.newman', 'robfire87652021'),
(17, 'kwesi.mensah', 'kwesi.mensah@ashesi.edu.gh', 'kwes33332021'),
(18, 'john.bortey', 'john.bortey@ashesi.edu.gh', 'johnb45062020'),
(19, 'michael.lamptey', 'michael.lamptey@ashesi.edu.gh', 'micky33502020'),
(20, 'raphael.sanchez', 'raphael.sanchez@ashesi.edu.gh', 'raph79052021'),
(21, 'yaw.sekyi', 'yaw.sekyi@ashesi.edu.gh', 'yaw76502020');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `assignments`
--
ALTER TABLE `assignments`
  ADD PRIMARY KEY (`assignID`),
  ADD KEY `room` (`roomID`),
  ADD KEY `user` (`userID`),
  ADD KEY `admin` (`adminID`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`uID`),
  ADD KEY `fk_user` (`userID`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`roomID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `assignments`
--
ALTER TABLE `assignments`
  MODIFY `assignID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `uID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `roomID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assignments`
--
ALTER TABLE `assignments`
  ADD CONSTRAINT `admin` FOREIGN KEY (`adminID`) REFERENCES `administrator` (`adminID`),
  ADD CONSTRAINT `room` FOREIGN KEY (`roomID`) REFERENCES `room` (`roomID`) ON DELETE CASCADE,
  ADD CONSTRAINT `user` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`) ON DELETE CASCADE;

--
-- Constraints for table `reports`
--
ALTER TABLE `reports`
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
