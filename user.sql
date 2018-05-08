-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2018 at 04:59 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(9) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `score` int(250) NOT NULL,
  `course` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `email`, `score`, `course`) VALUES
(700657837, 'sai', 'krishna', 'saisun', 86, 'course3'),
(700700100, 'course', 'nocourse', 'whatifemptys@gmail.com', 207, ''),
(700700700, 'sai', 'mudhiganti', 'ss@gmail.com', 257, 'course2'),
(700700701, 'chai', 'mudh', 'sas@gmail.com', 250, 'course3'),
(700700702, 'star', 'super', 'sts@gmail.com', 220, 'course2'),
(700700704, 'gsaint', 'kimmudh', 'less@gmail.com', 219, 'course2'),
(700700708, 'thai', 'ganthai', 'shanthais@gmail.com', 227, 'course3'),
(700700709, 'laai', 'inchow', 'sopes@gmail.com', 251, 'course2'),
(700700710, 'nwsai', 'munsti', 'sents@gmail.com', 217, 'course2'),
(700700711, 'lazi', 'guaanti', 'quess@gmail.com', 207, 'course3'),
(700700712, 'sbai', 'kingti', 'enross@gmail.com', 217, 'course1'),
(700700713, 'ontsai', 'lepamudhiganti', 'starswar@gmail.com', 209, 'course2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
