-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2020 at 11:00 PM
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
-- Creation: May 11, 2020 at 03:26 PM
-- Last update: May 11, 2020 at 03:30 PM
--

CREATE TABLE `administrator` (
  `adminID` int(11) NOT NULL,
  `adminame` varchar(20) NOT NULL,
  `crsename` varchar(30) NOT NULL,
  `adminEmail` varchar(60) NOT NULL,
  `adminPassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `administrator`:
--

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`adminID`, `adminame`, `crsename`, `adminEmail`, `adminPassword`) VALUES
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
-- Table structure for table `assignments`
--
-- Creation: May 09, 2020 at 04:25 PM
--

CREATE TABLE `assignments` (
  `assignID` int(11) NOT NULL,
  `adminID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `roomID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `assignments`:
--   `adminID`
--       `administrator` -> `adminID`
--   `roomID`
--       `lecturehalls` -> `roomID`
--   `userID`
--       `users` -> `userID`
--

-- --------------------------------------------------------

--
-- Table structure for table `lecturehalls`
--
-- Creation: May 11, 2020 at 06:54 PM
--

CREATE TABLE `lecturehalls` (
  `roomID` int(11) NOT NULL,
  `lecturehall` varchar(50) NOT NULL,
  `roomcapacity` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `lecturehalls`:
--

--
-- Dumping data for table `lecturehalls`
--

INSERT INTO `lecturehalls` (`roomID`, `lecturehall`, `roomcapacity`) VALUES
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
-- Table structure for table `reports`
--
-- Creation: May 09, 2020 at 04:25 PM
--

CREATE TABLE `reports` (
  `uID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `username` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `reports`:
--   `userID`
--       `users` -> `userID`
--

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--
-- Creation: May 11, 2020 at 07:48 PM
-- Last update: May 11, 2020 at 08:56 PM
--

CREATE TABLE `rooms` (
  `roomID` int(11) NOT NULL,
  `adminID` int(11) NOT NULL,
  `roomname` varchar(50) NOT NULL,
  `lecturehall` varchar(50) NOT NULL,
  `roomcapacity` int(255) NOT NULL,
  `roomdate` date NOT NULL,
  `starttime` time NOT NULL,
  `endtime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `rooms`:
--   `adminID`
--       `administrator` -> `adminID`
--

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`roomID`, `adminID`, `roomname`, `lecturehall`, `roomcapacity`, `roomdate`, `starttime`, `endtime`) VALUES
(1, 4, 'Economics BS102 Cohort A', 'Main Hall A101', 12, '2020-05-13', '12:05:00', '14:00:00'),
(2, 1, 'Economics BS102 Cohort A', 'Main Hall A101', 12, '2020-05-22', '22:26:00', '12:26:00'),
(3, 1, 'Multivariable Calculus CS102 Cohort A', 'Enginnering B204', 12, '2020-05-22', '22:26:00', '12:26:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--
-- Creation: May 09, 2020 at 04:25 PM
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `usermail` varchar(30) NOT NULL,
  `upassword` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- RELATIONSHIPS FOR TABLE `users`:
--

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
-- Indexes for table `lecturehalls`
--
ALTER TABLE `lecturehalls`
  ADD PRIMARY KEY (`roomID`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`uID`),
  ADD KEY `fk_user` (`userID`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`roomID`),
  ADD KEY `adminID` (`adminID`);

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
-- AUTO_INCREMENT for table `lecturehalls`
--
ALTER TABLE `lecturehalls`
  MODIFY `roomID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `uID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `roomID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  ADD CONSTRAINT `room` FOREIGN KEY (`roomID`) REFERENCES `lecturehalls` (`roomID`) ON DELETE CASCADE,
  ADD CONSTRAINT `user` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`) ON DELETE CASCADE;

--
-- Constraints for table `reports`
--
ALTER TABLE `reports`
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`) ON DELETE CASCADE;

--
-- Constraints for table `rooms`
--
ALTER TABLE `rooms`
  ADD CONSTRAINT `rooms_ibfk_1` FOREIGN KEY (`adminID`) REFERENCES `administrator` (`adminID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
