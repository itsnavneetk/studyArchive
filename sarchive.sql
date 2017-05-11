-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2017 at 03:44 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sarchive`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `cID` int(11) NOT NULL,
  `dID` int(11) NOT NULL,
  `cname` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`cID`, `dID`, `cname`) VALUES
(1, 1, 'DS'),
(2, 1, 'OOP'),
(3, 2, 'Cloud'),
(4, 1, 'JAVA'),
(5, 2, 'IR'),
(6, 3, 'BE'),
(7, 1, 'AI');

-- --------------------------------------------------------

--
-- Table structure for table `coursedetails`
--

CREATE TABLE `coursedetails` (
  `cID` int(11) NOT NULL,
  `cname` varchar(10) COLLATE utf8_bin NOT NULL,
  `text` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `coursedetails`
--

INSERT INTO `coursedetails` (`cID`, `cname`, `text`) VALUES
(1, 'DS', 'In computer science, a data structure is a particular way of organizing data in a computer so that it can be used efficiently.'),
(2, 'OOP', 'Object-oriented programming (OOP) is a programming language model organized around objects rather than "actions" and data rather than logic. Historically, a program has been viewed as a logical procedure that takes input data, processes it, and produces output data.'),
(3, 'Cloud', 'Cloud computing is a type of Internet-based computing that provides shared computer processing resources and data to computers and other devices on ...'),
(4, 'JAVA', 'Java is a general-purpose computer programming language that is concurrent, class-based, object-oriented, and specifically designed to have as few ...'),
(5, 'IR', 'Information retrieval (IR) is the activity of obtaining information resources relevant to an information need from a collection of information resources. Searches can be based on full-text or other content-based indexing.'),
(6, 'BE', 'Electronics is the science of controlling electrical energy electrically, in which the electrons .... 2, DC Circuits, Batteries, Generators, Motors · Vol. 3, Basic AC Theory, Basic AC Reactive Components, Basic AC Power, Basic AC Generators '),
(7, 'AI', 'Artificial intelligence (AI) is intelligence exhibited by machines. In computer science, the field of AI research defines itself as the study of "intelligent agents": ');

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE `dept` (
  `dID` int(11) NOT NULL,
  `dname` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`dID`, `dname`) VALUES
(1, 'CS'),
(2, 'IT'),
(3, 'ECE');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `pID` int(11) NOT NULL,
  `email` varchar(40) COLLATE utf8_bin NOT NULL,
  `password` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`pID`, `email`, `password`) VALUES
(1, 'navneetchm@gmail.com', 'qwerty'),
(2, 'neha@gmail.com', 'qwerty'),
(8, 't@g.com', '123123'),
(9, 'neeharikasah3@gmail.com', '1234'),
(11, 'tt@g.com', 'qweqwe'),
(12, 'trr@gm.com', 'nono'),
(19, 'navneetchm@gmail.', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `ID` int(11) NOT NULL,
  `fname` varchar(10) COLLATE utf8_bin NOT NULL,
  `lname` varchar(10) COLLATE utf8_bin NOT NULL,
  `email` varchar(40) COLLATE utf8_bin NOT NULL,
  `password` varchar(10) COLLATE utf8_bin NOT NULL,
  `university` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`ID`, `fname`, `lname`, `email`, `password`, `university`) VALUES
(1, 'navneet', 'kishan', 'navneetchm@gmail.com', 'qwerty', 'manipal'),
(2, 'neeharika', 'sah', 'neha@gmail.com', 'qwerty', 'manipal'),
(9, 'test', 'test', 't@g.com', '123123', 'iit'),
(11, 'dr neeha', 'sah', 'neeharikasah3@gmail.com', '1234', 'iit'),
(15, 'testtt', 'ttt', 'tt@g.com', 'qweqwe', 'du'),
(17, 'test', 'test', 'trr@gm.com', 'nono', 'du'),
(19, 'navneet', 'kishan', 'navneetchm@gmail.', '123456', 'manipal');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(111) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `university` varchar(255) NOT NULL,
  `password` varchar(225) NOT NULL,
  `salt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `fname`, `lname`, `email`, `university`, `password`, `salt`) VALUES
(7, '', '', '', '', '42fc30d6fd9fce2e2f4f42b3fc0ba900597d37d1a809375e016b159a3cc99146', 'ed6f2393f6b25bdc37107244439533728426bd3c34841b120a96431be8041640'),
(8, 'test', 'test', 'trr@gm.com', 'du', 'de68cb2da50661cc5a7f93eea5cb808b7f56c15596dd5e77a2236a631f47897c', 'fd6b4924b6199a56fed7a506344c09adb84d781c97bd82855dd45fd07875bbd7'),
(9, 'teest', 'teest', 'pp@gmai', 'manipal', 'c529224ae28829e0ffbd6ad84f3fb756627a619f1c89f55f284eb232d38fc5a5', 'c5d2d720887f3017356a859e8566479a47d3d9c09a4e65c7ce14590374262036'),
(10, 'navneet', 'kishan', 'navneetchm@gmail.', 'manipal', '301b1d2d92e17661346e0a25d9bef20f5c5f8a93badee7572fda32c98fdf2a21', '2baec6392ab2e122a69dc8ac6c32acd0ea5fb6eab2dd690f3522da805e75e846'),
(11, '', '', '', '', 'c37b27bdc42b0fb03fde217b66983db2a036c986e80f5ff55d2c53052b1ca4d3', '41cb5307a8fc20bfe10e844af6400d74eb97e597696b5f9513c2c02ef60e7568'),
(12, 'navneet', 'kishan', 'navneetchm.com', 'du', '2acb2952fe5f88bb0212d43e51bf7569653dd52f432560e8ff9f5ff3f444ebff', '2004f9598ae6b93ef4dcff88b3c4d9c875a0f74c936cc6891f222f21c499bff8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`cID`);

--
-- Indexes for table `coursedetails`
--
ALTER TABLE `coursedetails`
  ADD PRIMARY KEY (`cID`);

--
-- Indexes for table `dept`
--
ALTER TABLE `dept`
  ADD PRIMARY KEY (`dID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`pID`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `cID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `coursedetails`
--
ALTER TABLE `coursedetails`
  MODIFY `cID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `dept`
--
ALTER TABLE `dept`
  MODIFY `dID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `pID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
