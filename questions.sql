-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2018 at 09:38 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

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
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `Q_NO` int(255) NOT NULL,
  `Question` varchar(255) NOT NULL,
  `Option_1` varchar(255) NOT NULL,
  `Option_2` varchar(255) NOT NULL,
  `Option_3` varchar(255) NOT NULL,
  `Option_4` varchar(255) NOT NULL,
  `Answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`Q_NO`, `Question`, `Option_1`, `Option_2`, `Option_3`, `Option_4`, `Answer`) VALUES
(1, 'Forms that are used to organize business data into rows and coloumns are called ', 'transaction sheets', 'registers', 'business forms ', 'spread sheets ', '4'),
(2, 'A USB communication device that supports data encryption for secure wireless communication for notebook users is called a', 'USB wireless network adapter', 'wireless switch', 'wireless hub ', 'router', '1'),
(3, 'A(n)_____ language reflects the way people think mathematically. ', 'cross-platform programming', '3GL business programming', 'event driven programming ', 'functional', '4'),
(4, 'When a real time telephone call between people is made over the Internet using computers, it is called', 'a chat session ', 'an e-mail', 'an instant message ', 'internet telephony', '4'),
(5, 'What refers to a set of characters of a particular design?', 'Keyface', 'Formation', 'Calligraph', 'Stencil', '3'),
(6, 'A(n) _______ allows you to access your e-mail from anywhere', 'forum', 'webmail interface', 'message board', 'weblog', '2'),
(7, 'Which of the following cannot be part of an e-mail address?', 'Period', 'At sign', 'Space', 'Underscore', '3'),
(8, 'A mistake in an algorithm that causes incorrect results is called a ', 'logical error', 'syntax error', 'procedural error ', 'compiler error', '2'),
(9, 'The process of a computer receiving information form a server on the Internet is known as', 'Pulling', 'Pushing', 'Transfering', 'Downloading', '4'),
(10, 'A website address is a unique name that identifies a specific ____ on the web', 'Web browser', 'Website', 'PDA ', 'Link', '1'),
(11, 'Look at this series: 2, 1, (1/2), (1/4), ... What number should come next? ', '(1/3)', '(1/8)', '(2/8)', '(1/16)', '2'),
(12, 'Look at this series: 7, 10, 8, 11, 9, 12, ... What number should come next? ', '7', '10', '12', '13', '2'),
(13, 'Look at this series: 53, 53, 40, 40, 27, 27, ... What number should come next? ', '12 ', ' 27', '14 ', '53 ', '3 '),
(14, 'Look at this series: 58, 52, 46, 40, 34, ... What number should come next? ', '32 ', '30 ', '28 ', '26 ', '3 '),
(15, 'Look at this series: 8, 22, 8, 28, 8, ... What number should come next? ', '9 ', '29 ', '32 ', '34 ', '4 '),
(16, 'Look at this series: 31, 29, 24, 22, 17, ... What number should come next? ', '15 ', '14 ', '13 ', '12 ', '1 '),
(17, 'Look at this series: 2, 4, 6, 8, 10, ... What number should come next? ', ' 11', '12 ', '13 ', '14 ', '2 '),
(18, 'Look at this series: 201, 202, 204, 207, ... What number should come next? ', ' 205', '208 ', '210 ', '211 ', '4 '),
(19, 'Look at this series: 2, 6, 18, 54, ... What number should come next? ', '108 ', '148 ', '162 ', '216 ', '3 '),
(20, 'Hitler party which came into power in 1933 is known as ', ' Labour Party', 'Nazi Party ', 'Ku-Klux-Klan ', 'Democratic Party ', ' 2'),
(21, 'Golf player Vijay Singh belongs to which country? ', 'USA ', 'Fijji ', 'India ', 'UK ', ' 2'),
(22, 'For the Olympics and World Tournaments, the dimensions of basketball court are ', '26 m x 14 m ', ' 28 m x 15 m', '27 m x 16 m ', '28 m x 16 m ', '2 '),
(23, 'The ozone layer restricts ', 'Visible light ', 'Infrared radiation ', 'X-rays and gamma rays ', 'Ultraviolet radiation ', '4 '),
(24, 'Ecology deals with ', 'Birds ', 'Cell formation ', 'Relation between organisms and their environment ', ' Tissues', '3 '),
(25, ' In DBMS Row is synonymous with the term', 'record ', ' relation', 'column ', 'field ', ' 1'),
(26, 'You can add a row using SQL in a database with which of the following? ', ' ADD', 'CREATE ', 'INSERT ', ' MAKE', '3 '),
(27, 'The part of machine level instruction, which tells the central processor what has to be done, is ', 'Operation code ', ' Address', ' Locator', 'Flip-Flop ', '1 '),
(28, 'Which of the following computer language is used for artificial intelligence? ', ' FORTRAN', ' PROLOG', 'C ', 'COBOL ', '2 '),
(29, 'A program component that allows structuring of a program in an unusual way is known as ', ' Correlation', ' Coroutine', ' Diagonalization', ' Quene', '2 '),
(30, 'Which part interprets program instructions and initiate control operations.', 'Input', 'Storage unit', 'Logic unit', 'Control unit', '4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`Q_NO`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
