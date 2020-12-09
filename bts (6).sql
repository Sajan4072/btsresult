-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2020 at 07:22 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bts`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `id` int(11) NOT NULL,
  `username` varchar(266) NOT NULL,
  `password` varchar(266) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`id`, `username`, `password`) VALUES
(1, 'sajan', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `calender`
--

CREATE TABLE `calender` (
  `id` int(11) NOT NULL,
  `event` text NOT NULL,
  `date` date NOT NULL,
  `school` int(11) NOT NULL,
  `plus2` int(11) NOT NULL,
  `engineering` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `calender`
--

INSERT INTO `calender` (`id`, `event`, `date`, `school`, `plus2`, `engineering`) VALUES
(1, 'tihar', '0000-00-00', 1, 0, 1),
(2, 'holi', '0000-00-00', 0, 0, 0),
(3, 'chat', '2020-11-02', 1, 0, 0),
(4, 'fadfdhafd adfafdafdaf dfaoifhdafh', '2020-11-12', 1, 0, 1),
(5, 'gdagafag', '2020-12-04', 1, 0, 0),
(6, 'tihar', '2020-11-06', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `address` varchar(25) NOT NULL,
  `fathername` varchar(25) NOT NULL,
  `phone` int(10) NOT NULL,
  `image` varchar(225) NOT NULL,
  `faculty` varchar(25) NOT NULL,
  `uniquecode` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`firstname`, `lastname`, `address`, `fathername`, `phone`, `image`, `faculty`, `uniquecode`, `password`, `dob`) VALUES
('rabin', 'bsan', 'bdiae', 'Gyan', 2147483647, '2.png', 'management', 'CLS9-9632', 'RABin14785', '2020-11-18'),
('rabin', 'bsasn', 'bode', 'gan', 2147483647, '2.png', 'management', 'CLS9-6325', 'RABin14785', '2020-11-18'),
('s', 's', 's', 's', 2147483647, '2.png', 'computer', 'CLS9-6325', 'NJki14785', '2020-11-17'),
('s', 's', 'd', 'a', 2147483647, '2.png', 'civil', 'CLS9-96325', 'HGij47851', '2020-11-16');

-- --------------------------------------------------------

--
-- Table structure for table `college_teacher`
--

CREATE TABLE `college_teacher` (
  `firstname` varchar(15) NOT NULL,
  `lastname` varchar(15) NOT NULL,
  `address` varchar(25) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `image` varchar(225) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college_teacher`
--

INSERT INTO `college_teacher` (`firstname`, `lastname`, `address`, `phone`, `email`, `image`, `password`) VALUES
('ra', 'aa', 'aa', 2147483647, 'rabin11@gmail.com', '2.png', 'RAbin14785');

-- --------------------------------------------------------

--
-- Table structure for table `engineering`
--

CREATE TABLE `engineering` (
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `address` varchar(25) NOT NULL,
  `fathername` varchar(25) NOT NULL,
  `phone` int(10) NOT NULL,
  `uniquecode` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `image` varchar(225) NOT NULL,
  `faculty` varchar(12) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `engineering`
--

INSERT INTO `engineering` (`firstname`, `lastname`, `address`, `fathername`, `phone`, `uniquecode`, `password`, `image`, `faculty`, `dob`) VALUES
('rabin', 'bassan', 'bode', 'gyan', 2147483647, 'CLS10-21463', 'RAbin1478', '92516506_2556377781301493_159646111940739072_o.jpg', 'computer', '2020-11-25');

-- --------------------------------------------------------

--
-- Table structure for table `engineering_teacher`
--

CREATE TABLE `engineering_teacher` (
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `address` varchar(25) NOT NULL,
  `contact` int(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `image` varchar(225) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `engineering_teacher`
--

INSERT INTO `engineering_teacher` (`firstname`, `lastname`, `address`, `contact`, `email`, `image`, `password`) VALUES
('aad', 'dd', 'asd', 2147483647, 'as@gmail.com', '', 'ASdf147852');

-- --------------------------------------------------------

--
-- Table structure for table `news_and_event`
--

CREATE TABLE `news_and_event` (
  `id` int(11) NOT NULL,
  `post` text NOT NULL,
  `description` varchar(1025) NOT NULL,
  `date` date NOT NULL,
  `school` int(11) NOT NULL,
  `plus2` int(11) NOT NULL,
  `engineering` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news_and_event`
--

INSERT INTO `news_and_event` (`id`, `post`, `description`, `date`, `school`, `plus2`, `engineering`) VALUES
(1, ' farewell\r\n\r\n             ', '', '0000-00-00', 1, 1, 1),
(2, ' exam\r\n\r\n             ', '', '0000-00-00', 1, 0, 0),
(3, ' mid term\r\n\r\n             ', '', '0000-00-00', 0, 1, 1),
(4, ' result\r\n\r\n             ', '', '0000-00-00', 1, 0, 0),
(5, ' sports week\r\n\r\n             ', '', '0000-00-00', 0, 1, 1),
(6, 'picnic', '', '0000-00-00', 1, 1, 1),
(7, ' tour\r\n\r\n             ', '', '0000-00-00', 1, 1, 1),
(8, ' music event\r\n\r\n             ', '', '0000-00-00', 1, 1, 1),
(9, ' rock climbing \r\n\r\n             ', '', '0000-00-00', 0, 0, 0),
(10, ' rock climbing\r\n             ', '', '0000-00-00', 1, 0, 0),
(11, ' college chuti\r\n\r\n             ', '', '0000-00-00', 1, 1, 1),
(12, ' no holiday\r\n\r\n             ', '', '0000-00-00', 1, 1, 0),
(13, ' notice 1\r\n\r\n             ', '', '0000-00-00', 1, 1, 1),
(14, ' \r\nnotice 2\r\n             ', '', '0000-00-00', 1, 1, 1),
(15, '', ' \r\n\r\n             holiday on the occasion of holi in 11/02/2077. school will remain closed', '0000-00-00', 1, 0, 0),
(16, '2020-11-11', ' \r\n\r\n             holiday on the occasions of student day ', '0000-00-00', 1, 0, 0),
(17, 'asdsa', ' \r\n\r\n             adasdadasd', '2020-11-04', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `notice` text NOT NULL,
  `school` int(11) NOT NULL,
  `plus2` int(11) NOT NULL,
  `engineering` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `notice`, `school`, `plus2`, `engineering`) VALUES
(3, ' \r\nnotice 1\r\n             ', 1, 1, 1),
(4, ' yeah\r\n\r\n             ', 1, 0, 1),
(5, ' holi\r\n\r\n             ', 1, 0, 0),
(6, '', 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `caption` text NOT NULL,
  `photo` varchar(4000) NOT NULL,
  `school` int(11) NOT NULL,
  `plus2` int(11) NOT NULL,
  `engineering` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `caption`, `photo`, `school`, `plus2`, `engineering`) VALUES
(1, 'hello', 'nar.jpg', 1, 0, 1),
(2, '', 'tm7.PNG', 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `firstname` varchar(12) NOT NULL,
  `lastname` varchar(12) NOT NULL,
  `address` varchar(25) NOT NULL,
  `fathername` varchar(15) NOT NULL,
  `contact` int(10) NOT NULL,
  `password` varchar(15) NOT NULL,
  `image` varchar(225) NOT NULL,
  `uniquecode` varchar(15) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`firstname`, `lastname`, `address`, `fathername`, `contact`, `password`, `image`, `uniquecode`, `dob`) VALUES
('rabin', 'basan', 'bode,bkt', 'gyan', 2147483647, 'RAbin1478', '92516506_2556377781301493_159646111940739072_o.jpg', 'CLS9-1478', '2020-11-11'),
('a', 'd', 'a', 'a', 2147483647, 'SFRgs4785', '106260846_168440161354929_3013438027343079164_n.jpg', 'CLS9-8745', '2020-11-10'),
('a', 'a', 'a', 'a', 2147483647, 'GHJki14785', '2.png', 'CLS1-521463', '2020-11-16');

-- --------------------------------------------------------

--
-- Table structure for table `school_resource`
--

CREATE TABLE `school_resource` (
  `id` int(11) NOT NULL,
  `pdf` varchar(4000) NOT NULL,
  `image` varchar(4000) NOT NULL,
  `subject` varchar(25) NOT NULL,
  `class` int(11) NOT NULL,
  `caption` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `school_resource`
--

INSERT INTO `school_resource` (`id`, `pdf`, `image`, `subject`, `class`, `caption`) VALUES
(1, 'Rule for Time-bound_4107.pdf', 'nar.jpg', '', 5, 'dgadga'),
(2, 'rabincitizen.pdf', '2.png', '', 3, ''),
(3, 'sabinacitizen.pdf', '2.png', 'science', 5, '');

-- --------------------------------------------------------

--
-- Table structure for table `school_result`
--

CREATE TABLE `school_result` (
  `uniquecode` mediumtext NOT NULL,
  `class` varchar(255) NOT NULL,
  `roll` varchar(255) NOT NULL,
  `term` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `marks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `school_result`
--

INSERT INTO `school_result` (`uniquecode`, `class`, `roll`, `term`, `subject`, `marks`) VALUES
('CLS9-1478', '9', '1', '1', 'english', '10'),
('CLS9-1478', '9', '1', '1', 'math', '10'),
('CLS9-1478', '9', '1', '1', 'nepali', '20'),
('CLS9-1478', '9', '1', '1', 'social', '3'),
('CLS9-1478', '9', '1', '1', 'science', '28'),
('CLS9-1478', '9', '1', '1', 'computer', '28'),
('CLS9-1478', '9', '1', '1', 'eph', '28'),
('CLS9-1478', '9', '1', '1', 'opt math', '28'),
('CLS9-8745', '9', '2', '1', 'engligh', '12'),
('CLS9-8745', '9', '2', '1', 'math', '16'),
('CLS9-8745', '9', '2', '1', 'nepali', '13'),
('CLS9-8745', '9', '2', '1', 'social', '12'),
('CLS9-8745', '9', '2', '1', 'science', '50'),
('CLS9-8745', '9', '2', '1', 'computer', '12'),
('CLS9-8745', '9', '2', '1', 'eph', '19'),
('CLS9-8745', '9', '2', '1', 'opt math', '12'),
('', '', '', '', '', ''),
('CLS9-8745', '10', '2', '1', 'engligh', '12'),
('CLS9-8745', '10', '2', '1', 'math', '16'),
('CLS9-8745', '10', '2', '1', 'nepali', '13'),
('CLS9-8745', '10', '2', '1', 'social', '12'),
('CLS9-8745', '10', '2', '1', 'science', '50'),
('CLS9-8745', '10', '2', '1', 'computer', '12'),
('CLS9-8745', '10', '2', '1', 'eph', '19'),
('CLS9-8745', '10', '2', '1', 'opt math', '12');

-- --------------------------------------------------------

--
-- Table structure for table `school_teacher`
--

CREATE TABLE `school_teacher` (
  `firstname` varchar(12) NOT NULL,
  `lastname` varchar(12) NOT NULL,
  `phone` int(10) NOT NULL,
  `address` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `image` varchar(225) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_teacher`
--

INSERT INTO `school_teacher` (`firstname`, `lastname`, `phone`, `address`, `email`, `image`, `password`) VALUES
('radad', 'adsasd', 2147483647, 'asdas', 'rabin11@gmail.com', '2.png', 'RAbin1478');

-- --------------------------------------------------------

--
-- Table structure for table `user_message`
--

CREATE TABLE `user_message` (
  `name` varchar(25) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(25) NOT NULL,
  `message` varchar(1025) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_message`
--

INSERT INTO `user_message` (`name`, `phone`, `email`, `message`) VALUES
('rabin', 2147483647, 'rabinbasansth@gmail.com', 'dsasdadada'),
('rr', 2147483647, 'r@gmail.com', 'asdad'),
('rr', 2147483647, 'rabin@gmail.com', 'asdasd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calender`
--
ALTER TABLE `calender`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_and_event`
--
ALTER TABLE `news_and_event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_resource`
--
ALTER TABLE `school_resource`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `calender`
--
ALTER TABLE `calender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `news_and_event`
--
ALTER TABLE `news_and_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `school_resource`
--
ALTER TABLE `school_resource`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
