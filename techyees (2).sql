-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2019 at 12:01 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `techyees`
--

-- --------------------------------------------------------

--
-- Table structure for table `build_startup`
--

CREATE TABLE IF NOT EXISTS `build_startup` (
`id` int(11) NOT NULL,
  `title` text NOT NULL,
  `idea` text NOT NULL,
  `image` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'yet to review',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `build_startup`
--

INSERT INTO `build_startup` (`id`, `title`, `idea`, `image`, `user_id`, `status`, `timestamp`) VALUES
(1, 'new title 2', 'asdnakak', '', 1, 'yet to review', '2019-06-16 13:08:11');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
`id` int(11) NOT NULL,
  `title` text NOT NULL,
  `image` text NOT NULL,
  `points` int(20) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `title`, `image`, `points`, `userId`, `timestamp`) VALUES
(1, 'C Programming', '-', 20, 0, '2019-06-18 18:30:30');

-- --------------------------------------------------------

--
-- Table structure for table `course_slots_dates`
--

CREATE TABLE IF NOT EXISTS `course_slots_dates` (
`id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `date` varchar(30) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course_slots_time`
--

CREATE TABLE IF NOT EXISTS `course_slots_time` (
`id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `time` varchar(30) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course_topics`
--

CREATE TABLE IF NOT EXISTS `course_topics` (
`id` int(11) NOT NULL,
  `courseId` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `points` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_topics`
--

INSERT INTO `course_topics` (`id`, `courseId`, `title`, `description`, `points`, `timestamp`) VALUES
(1, 1, 'as', 'adas', 10, '2019-06-18 18:43:30'),
(2, 1, 'as', 'adas', 10, '2019-06-18 18:50:07');

-- --------------------------------------------------------

--
-- Table structure for table `doubts`
--

CREATE TABLE IF NOT EXISTS `doubts` (
`id` int(11) NOT NULL,
  `title` text NOT NULL,
  `idea` text NOT NULL,
  `image` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'yet to review',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doubts`
--

INSERT INTO `doubts` (`id`, `title`, `idea`, `image`, `user_id`, `status`, `timestamp`) VALUES
(1, 'doubt -1.0', 'description edited', '', 1, 'yet to review', '2019-06-14 14:38:03');

-- --------------------------------------------------------

--
-- Table structure for table `internships`
--

CREATE TABLE IF NOT EXISTS `internships` (
`id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'yet to review',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE IF NOT EXISTS `jobs` (
`id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'yet to review',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
`id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'yet to review',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
`id` int(11) NOT NULL,
  `title` text NOT NULL,
  `idea` text NOT NULL,
  `image` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'yet to review',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE IF NOT EXISTS `transactions` (
`id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `transactionMessage` text NOT NULL,
  `amount` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `phone` int(15) NOT NULL,
  `city` text NOT NULL,
  `collegeName` text NOT NULL,
  `passedYear` int(11) NOT NULL,
  `wallet` varchar(100) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `firstName`, `lastName`, `phone`, `city`, `collegeName`, `passedYear`, `wallet`, `timestamp`) VALUES
(1, 'anusha@gmail.com', 'admin', '', '', 0, '', 'lbrce', 2017, '50', '2019-06-14 20:05:53');

-- --------------------------------------------------------

--
-- Table structure for table `workshops`
--

CREATE TABLE IF NOT EXISTS `workshops` (
`id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'yet to review',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `build_startup`
--
ALTER TABLE `build_startup`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_slots_dates`
--
ALTER TABLE `course_slots_dates`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_slots_time`
--
ALTER TABLE `course_slots_time`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_topics`
--
ALTER TABLE `course_topics`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doubts`
--
ALTER TABLE `doubts`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `internships`
--
ALTER TABLE `internships`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `workshops`
--
ALTER TABLE `workshops`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `build_startup`
--
ALTER TABLE `build_startup`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `course_slots_dates`
--
ALTER TABLE `course_slots_dates`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `course_slots_time`
--
ALTER TABLE `course_slots_time`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `course_topics`
--
ALTER TABLE `course_topics`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `doubts`
--
ALTER TABLE `doubts`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `internships`
--
ALTER TABLE `internships`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `workshops`
--
ALTER TABLE `workshops`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
