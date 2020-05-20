-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2020 at 10:29 PM
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
-- CREATE DATABASE IF NOT EXISTS `youcheckedin` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `webtech_fall2019_`;

-- --------------------------------------------------------

--
-- Table structure for table `administrator_youcheckedin`
--

CREATE TABLE `administrator_youcheckedin` (
  `adminID` int(11) NOT NULL,
  `adminame` varchar(50) NOT NULL,
  `crsename` varchar(30) NOT NULL,
  `adminEmail` varchar(60) NOT NULL,
  `adminPassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `administrator_youcheckedin`:
--

--
-- Dumping data for table `administrator_youcheckedin`
--

INSERT INTO `administrator_youcheckedin` (`adminID`, `adminame`, `crsename`, `adminEmail`, `adminPassword`) VALUES
(1, 'Joseph Fisher', 'Economics 101', 'joseph.fisher@ashesi.edu.gh', 'fisher12345'),
(2, 'Henry Brown', 'Calculus 2', 'henry.brown@ashesi.edu.gh', 'brown12345'),
(3, 'Janet Agyeman', 'Pre-Calculus', 'janet.agyeman', 'janet12345'),
(4, 'Kofi Nimo', 'Financial Accounting 101', 'kofi.nimo@ashesi.edu.gh', 'nimo12345'),
(5, 'Abigail Samson', 'Introduction to Engineering', 'abigail.samson@ashesi.edu.gh', 'abigail12345'),
(6, 'Joe Mensah', 'Multivariable Calculus', 'joe.mensah@ashesi.edu.gh', 'joe12345'),
(7, 'Millicent Asiedu', 'Data Structures ', 'millicent.asiedu@ashesi.edu.gh', 'millicent12345'),
(8, 'Fred Kyei', 'Leadership 1', 'fred.kyei@ashesi.edu.gh', 'fred12345'),
(9, 'James Freeman', 'Computer Organization and Arch', 'james.freeman@ashesi.edu.gh', 'james12345'),
(10, 'Professor Goldman', 'Theory 401', 'professor.goldman@ashesi.edu.gh', 'prof12345');

-- --------------------------------------------------------

--
-- Table structure for table `checkin_youcheckedin`
--

CREATE TABLE `checkin_youcheckedin` (
  `assignID` int(11) NOT NULL,
  `adminID` int(11) NOT NULL,
  `roomID` int(11) NOT NULL,
  `roomname` varchar(50) NOT NULL,
  `userID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `checkin_youcheckedin`:
--   `adminID`
--       `administrator_youcheckedin` -> `adminID`
--   `roomID`
--       `lecturehalls_youcheckedin` -> `roomID`
--   `userID`
--       `users_youcheckedin` -> `userID`
--

--
-- Dumping data for table `checkin_youcheckedin`
--

INSERT INTO `checkin_youcheckedin` (`assignID`, `adminID`, `roomID`, `roomname`, `userID`, `username`, `time`) VALUES
(33, 1, 5, 'Math MTH123 Cohort C', 2, 'kojo.ntim', '838:59:59'),
(36, 1, 3, 'Multivariable Calculus CS102 Cohort A', 2, 'kojo.ntim', '00:00:00'),
(38, 1, 10, 'Pre-Calculus Seminar Revision', 2, 'kojo.ntim', '00:00:00'),
(40, 1, 10, 'Pre-Calculus Seminar Revision', 2, 'kojo.ntim', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `lecturehalls_youcheckedin`
--

CREATE TABLE `lecturehalls_youcheckedin` (
  `roomID` int(11) NOT NULL,
  `lecturehall` varchar(50) NOT NULL,
  `roomcapacity` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `lecturehalls_youcheckedin`:
--

--
-- Dumping data for table `lecturehalls_youcheckedin`
--

INSERT INTO `lecturehalls_youcheckedin` (`roomID`, `lecturehall`, `roomcapacity`) VALUES
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
-- Table structure for table `reports_youcheckedin`
--

CREATE TABLE `reports_youcheckedin` (
  `reportID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `roomname` varchar(50) NOT NULL,
  `adminname` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `reports_youcheckedin`:
--   `userID`
--       `users_youcheckedin` -> `userID`
--

-- --------------------------------------------------------

--
-- Table structure for table `rooms_youcheckedin`
--

CREATE TABLE `rooms_youcheckedin` (
  `roomID` int(11) NOT NULL,
  `adminID` int(11) NOT NULL,
  `adminname` varchar(50) NOT NULL,
  `roomname` varchar(50) NOT NULL,
  `lecturehall` varchar(50) NOT NULL,
  `roomcapacity` int(255) NOT NULL,
  `roomdate` date NOT NULL,
  `starttime` time NOT NULL,
  `endtime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `rooms_youcheckedin`:
--   `adminID`
--       `administrator_youcheckedin` -> `adminID`
--

--
-- Dumping data for table `rooms_youcheckedin`
--

INSERT INTO `rooms_youcheckedin` (`roomID`, `adminID`, `adminname`, `roomname`, `lecturehall`, `roomcapacity`, `roomdate`, `starttime`, `endtime`) VALUES
(1, 4, 'Kofi Nimo', 'Economics BS102 Cohort A', 'Main Hall A101', 12, '2020-05-13', '12:05:00', '14:00:00'),
(3, 1, 'Joseph Fisher', 'Multivariable Calculus CS102 Cohort A', 'Enginnering B204', 12, '2020-05-22', '22:26:00', '12:26:00'),
(5, 1, 'Joseph Fisher', 'Math MTH123 Cohort C', 'Research Blk A103', 20, '2020-05-26', '23:44:00', '13:45:00'),
(13, 4, 'Kofi Nimo', 'Math MTH123 Cohort F', 'Research Blk B301', 60, '2020-05-15', '12:52:00', '13:52:00'),
(14, 2, 'Henry Brown', 'Business BS864 Cohort A', 'Main Hall A205', 45, '2020-05-15', '13:57:00', '14:58:00'),
(16, 1, 'Joseph Fisher', 'Home Econs 123 Cohort A', 'Founders Blk A101', 23, '2020-05-15', '19:02:00', '20:02:00');

-- --------------------------------------------------------

--
-- Table structure for table `users_youcheckedin`
--

CREATE TABLE `users_youcheckedin` (
  `userID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `usermail` varchar(50) NOT NULL,
  `upassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `users_youcheckedin`:
--

--
-- Dumping data for table `users_youcheckedin`
--

INSERT INTO `users_youcheckedin` (`userID`, `username`, `usermail`, `upassword`) VALUES
(1, 'richard.nettey', 'richard.nettey@ashesi.edu.gh', 'richie11112023'),
(2, 'kojo.ntim', 'kojo.ntim@ashesi.edu.gh', 'ntim20222023'),
(3, 'abigail.cole', 'abigail.cole@ashesi.edu.gh', 'cole30012022'),
(4, 'sarah.coffie', 'sarah.coffie@ashesi.edu.gh', 'sarah15152023'),
(5, 'george.kovu', 'george.kovu@ashesi.edu.gh', 'georgy23232021'),
(6, 'nana.poku', 'nana.poku@ashesi.edu.gh', 'nana45762020'),
(7, 'asare.brown', 'asare.brown@ashesi.edu.gh', 'asare40222021'),
(8, 'nadeem.obi', 'nadeem.obi@ashesi.edu.gh', 'nadeem24672022'),
(9, 'sammy.agyei', 'sammy.agyei@ashesi.edu.gh', 'sammy54522021'),
(10, 'elikem.osei', 'elikem.osei@ashesi.edu.gh', 'eli60602021'),
(11, 'jerry.freeman', 'jerry.freeman@ashesi.edu.gh', 'jerry30492023'),
(12, 'sasha.pienim', 'sasha.pienim@ashesi.edu.gh', 'sash29502021'),
(13, 'donald.tumpani', 'donald.tumpani@ashesi.edu.gh', 'donny30562023'),
(14, 'luke.harper', 'luke.harper@ashesi.edu.gh', 'luke54542021'),
(15, 'olivia.coomson', 'olivia.coomsom@ashesi.edu.gh', 'oliv70802021'),
(16, 'robert.newman', 'robert.newman@ashesi.edu.gh', 'robfire87652021'),
(17, 'kwesi.mensah', 'kwesi.mensah@ashesi.edu.gh', 'kwes33332021'),
(18, 'john.bortey', 'john.bortey@ashesi.edu.gh', 'johnb45062020'),
(19, 'michael.lamptey', 'michael.lamptey@ashesi.edu.gh', 'micky33502020'),
(20, 'raphael.sanchez', 'raphael.sanchez@ashesi.edu.gh', 'raph79052021'),
(21, 'yaw.sekyi', 'yaw.sekyi@ashesi.edu.gh', 'yaw76502020');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator_youcheckedin`
--
ALTER TABLE `administrator_youcheckedin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `checkin_youcheckedin`
--
ALTER TABLE `checkin_youcheckedin`
  ADD PRIMARY KEY (`assignID`),
  ADD KEY `room` (`roomID`),
  ADD KEY `user` (`userID`),
  ADD KEY `adminID` (`adminID`);

--
-- Indexes for table `lecturehalls_youcheckedin`
--
ALTER TABLE `lecturehalls_youcheckedin`
  ADD PRIMARY KEY (`roomID`);

--
-- Indexes for table `reports_youcheckedin`
--
ALTER TABLE `reports_youcheckedin`
  ADD PRIMARY KEY (`reportID`),
  ADD KEY `fk_user` (`userID`);

--
-- Indexes for table `rooms_youcheckedin`
--
ALTER TABLE `rooms_youcheckedin`
  ADD PRIMARY KEY (`roomID`),
  ADD KEY `adminID` (`adminID`);

--
-- Indexes for table `users_youcheckedin`
--
ALTER TABLE `users_youcheckedin`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator_youcheckedin`
--
ALTER TABLE `administrator_youcheckedin`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `checkin_youcheckedin`
--
ALTER TABLE `checkin_youcheckedin`
  MODIFY `assignID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `lecturehalls_youcheckedin`
--
ALTER TABLE `lecturehalls_youcheckedin`
  MODIFY `roomID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `reports_youcheckedin`
--
ALTER TABLE `reports_youcheckedin`
  MODIFY `reportID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rooms_youcheckedin`
--
ALTER TABLE `rooms_youcheckedin`
  MODIFY `roomID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users_youcheckedin`
--
ALTER TABLE `users_youcheckedin`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `checkin_youcheckedin`
--
ALTER TABLE `checkin_youcheckedin`
  ADD CONSTRAINT `checkin_youcheckedin_ibfk_1` FOREIGN KEY (`adminID`) REFERENCES `administrator_youcheckedin` (`adminID`),
  ADD CONSTRAINT `room` FOREIGN KEY (`roomID`) REFERENCES `lecturehalls_youcheckedin` (`roomID`) ON DELETE CASCADE,
  ADD CONSTRAINT `user` FOREIGN KEY (`userID`) REFERENCES `users_youcheckedin` (`userID`) ON DELETE CASCADE;

--
-- Constraints for table `reports_youcheckedin`
--
ALTER TABLE `reports_youcheckedin`
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`userID`) REFERENCES `users_youcheckedin` (`userID`) ON DELETE CASCADE;

--
-- Constraints for table `rooms_youcheckedin`
--
ALTER TABLE `rooms_youcheckedin`
  ADD CONSTRAINT `rooms_youcheckedin_ibfk_1` FOREIGN KEY (`adminID`) REFERENCES `administrator_youcheckedin` (`adminID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
