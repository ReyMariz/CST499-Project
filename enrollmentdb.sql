-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2023 at 07:28 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `enrollmentdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `enrolled_students`
--

CREATE TABLE `enrolled_students` (
  `student_id` bigint(20) NOT NULL,
  `chosen_courseName` varchar(100) NOT NULL,
  `chosen_courseID` int(20) NOT NULL,
  `chosen_courseSubject` varchar(100) NOT NULL,
  `chosen_courseProfessor` varchar(100) NOT NULL,
  `chosen_courseLevel` varchar(100) NOT NULL,
  `chosen_courseCost` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enrolled_students`
--

INSERT INTO `enrolled_students` (`student_id`, `chosen_courseName`, `chosen_courseID`, `chosen_courseSubject`, `chosen_courseProfessor`, `chosen_courseLevel`, `chosen_courseCost`) VALUES
(12345, '3D Art', 777000, 'Elective', 'Kansas', 'Beginner', 105);

-- --------------------------------------------------------

--
-- Table structure for table `online_course_list`
--

CREATE TABLE `online_course_list` (
  `courseName` text NOT NULL,
  `courseID` bigint(20) NOT NULL,
  `courseSubject` text NOT NULL,
  `courseAvailability` text NOT NULL,
  `courseProfessor` text NOT NULL,
  `courseLevel` varchar(50) NOT NULL,
  `courseCost` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `online_course_list`
--

INSERT INTO `online_course_list` (`courseName`, `courseID`, `courseSubject`, `courseAvailability`, `courseProfessor`, `courseLevel`, `courseCost`) VALUES
('Introduction to Food Science', 111000, 'Science', 'Open', 'Gonzalez', 'Beginner', 100),
('Introduction to Biology', 222000, 'Science', 'Open', 'Kim', 'Beginner', 100),
('Introduction to Algebra', 333000, 'Math', 'Open', 'Stanton', 'Beginner', 100),
('Introduction to World History', 444000, 'History', 'Open', 'Clark', 'Beginner', 100),
('Introduction to College English', 555000, 'English', 'Open', 'Thomas', 'Beginner', 100),
('Yoga', 66600, 'Physical Education', 'Open Limited Spots', 'Nyguen', 'Beginner', 100),
('3D Art', 777000, 'Elective', 'Open', 'Kansas', 'Beginner', 105),
('Food Science II', 111001, 'Science', 'Open ', 'Chance', 'Intermediate', 120),
('Biology II', 222001, 'Science', 'Open', 'Kim', 'Intermediate', 120),
('Algebra II', 333001, 'Math', 'Open', 'Stevenson', 'Intermediate', 120),
('World History II', 444001, 'History', 'Open', 'Lopez', 'Intermediate', 120),
('Yoga II', 66601, 'Physical Education', 'Open Limited Spots', 'Nyguen', 'Intermediate', 100),
('3D Art II', 777001, 'Elective', 'Open', 'Kansas', 'Intermediate', 125),
('English II', 555001, 'English', 'Open', 'Roi', 'Intermediate', 120);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` bigint(75) NOT NULL,
  `student_fname` varchar(20) NOT NULL,
  `student_lname` varchar(30) NOT NULL,
  `DOB` date NOT NULL,
  `phone_number` bigint(20) NOT NULL,
  `email_address` varchar(70) NOT NULL,
  `student_password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_fname`, `student_lname`, `DOB`, `phone_number`, `email_address`, `student_password`) VALUES
(12345, 'Jim', 'Smith', '1995-02-01', 1112223333, 'jimsmith@gmail.com', '98765');

-- --------------------------------------------------------

--
-- Table structure for table `waiting_list`
--

CREATE TABLE `waiting_list` (
  `studentsTotal` int(200) DEFAULT NULL,
  `studentsAdded` int(200) DEFAULT NULL,
  `studentsRemoved` int(200) DEFAULT NULL,
  `recentRegisters` int(200) DEFAULT NULL,
  `nextInLine` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enrolled_students`
--
ALTER TABLE `enrolled_students`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
