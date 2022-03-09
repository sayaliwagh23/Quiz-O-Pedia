-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 17, 2020 at 10:21 AM
-- Server version: 5.7.19
-- PHP Version: 7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gatetest`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emailId` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `fullName` varchar(40) NOT NULL,
  `collegeName` varchar(100) NOT NULL,
  `Branch` varchar(20) DEFAULT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `dob` date DEFAULT NULL,
  `gender` varchar(6) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `emailId` (`emailId`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `emailId`, `password`, `fullName`, `collegeName`, `Branch`, `datetime`, `dob`, `gender`) VALUES
(1, 'abc@gmail.com', '12345', 'Steave Jobs', 'MGM Polytechnic', 'CSE', '2020-01-27 22:39:49', '2000-12-03', 'male'),
(2, 'xyz@gmail.com', '55555', 'Bill Gates', 'MGM Polytechnic', 'CSE', '2020-01-27 23:34:11', '2000-01-01', 'male'),
(3, 'qwert@gmail.com', '00000', 'Barak Obama', 'MGM Plytechnic ', 'CSE', '2020-01-28 00:57:04', '2000-03-01', 'male'),
(4, 'super@gmail.com', '12345', 'Super Man', 'MGM Ploytechnic', 'CSE', '2020-01-28 14:29:15', '2020-01-17', 'male'),
(5, 'iron@gmail.com', '98765', 'Iron Man', 'JNEC', 'CSE', '2020-01-28 14:58:54', '2020-01-06', 'male'),
(6, 'SGirl@gmail.com', '5656', 'Super Girl', 'JNEC', 'IT', '2020-01-28 15:05:07', '2020-02-01', 'female');

-- --------------------------------------------------------

--
-- Table structure for table `student_result`
--

DROP TABLE IF EXISTS `student_result`;
CREATE TABLE IF NOT EXISTS `student_result` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `test_id` int(11) NOT NULL,
  `student_marks` int(11) NOT NULL,
  `total_time_taken` time DEFAULT NULL,
  `student_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_test`
--

DROP TABLE IF EXISTS `student_test`;
CREATE TABLE IF NOT EXISTS `student_test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `test_id` int(11) NOT NULL,
  `test_question_id` int(11) NOT NULL,
  `answer` varchar(100) NOT NULL,
  `student_id` int(11) NOT NULL,
  `timetaken` time DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

DROP TABLE IF EXISTS `subjects`;
CREATE TABLE IF NOT EXISTS `subjects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sub_name` varchar(20) NOT NULL,
  `subject_type` varchar(20) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

DROP TABLE IF EXISTS `tests`;
CREATE TABLE IF NOT EXISTS `tests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `test_name` varchar(30) NOT NULL,
  `sub_id` int(11) NOT NULL,
  `type` varchar(20) DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `test_marks` int(11) NOT NULL,
  `test_total_time` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `test_questions`
--

DROP TABLE IF EXISTS `test_questions`;
CREATE TABLE IF NOT EXISTS `test_questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `test_id` int(11) NOT NULL,
  `question_type` int(1) NOT NULL,
  `question_text` varchar(300) NOT NULL,
  `question_image` varchar(100) DEFAULT NULL,
  `option_a` varchar(100) DEFAULT NULL,
  `option_b` varchar(100) DEFAULT NULL,
  `option_c` varchar(100) DEFAULT NULL,
  `option_d` varchar(100) DEFAULT NULL,
  `correct_answer` varchar(100) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
