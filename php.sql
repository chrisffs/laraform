-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 09, 2024 at 12:35 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `ID` int NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`ID`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `ID` int NOT NULL,
  `userID` int NOT NULL,
  `name` text NOT NULL,
  `specification` text NOT NULL,
  `school` text NOT NULL,
  `status` text NOT NULL,
  `action` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`ID`, `userID`, `name`, `specification`, `school`, `status`, `action`, `time`) VALUES
(18, 39, 'Juan Santos Dela Cruz', 'Web Developer', 'University of the Philippines', 'On time', 'Time in', '2024-03-21 00:06:44'),
(19, 44, 'Mia Tan Lim', 'Graphic Design', 'Ateneo de Manila University', 'On time', 'Time in', '2024-03-21 00:06:59'),
(20, 45, 'Gabriel Reyes Tan', 'Web Developer', 'De La Salle University', 'On time', 'Time in', '2024-03-21 00:07:19'),
(21, 43, 'Jose Cruz Gomez', 'Digital Marketing', 'University of the Philippines', 'On time', 'Time in', '2024-03-21 00:07:27'),
(22, 50, 'Marco Lopez Cruz', 'Graphic Design', 'University of the Philippines', 'On time', 'Time in', '2024-03-21 00:07:46'),
(23, 42, 'Anna Aquino Reyes', 'Web Developer', 'University of Santo Tomas', 'On time', 'Time in', '2024-03-21 00:07:57'),
(24, 49, 'Andrea Gomez Lim', 'Digital Marketing', 'University of Santo Tomas', 'On time', 'Time in', '2024-03-21 00:07:59'),
(25, 41, 'Pedro Garcia Lopez', 'Digital Marketing', 'De La Salle University', 'On time', 'Time in', '2024-03-21 00:08:19'),
(26, 48, 'Luis Chua Aquino', 'Web Developer', 'De La Salle University', 'On time', 'Time in', '2024-03-21 00:08:21'),
(27, 40, 'Maria Gonzales Santos', 'Graphic Design', 'Ateneo de Manila University', 'On time', 'Time in', '2024-03-21 00:08:41'),
(28, 47, 'Diego Gonzales Sy', 'Graphic Design', 'Ateneo de Manila University', 'On time', 'Time in', '2024-03-21 00:08:47'),
(29, 46, 'Sophia Santos Chua', 'Digital Marketing', 'University of Santo Tomas', 'On time', 'Time in', '2024-03-21 00:09:01'),
(30, 39, 'Juan Santos Dela Cruz', 'Web Developer', 'University of the Philippines', 'Timed out', 'Time out', '2024-03-21 10:15:03'),
(31, 44, 'Mia Tan Lim', 'Graphic Design', 'Ateneo de Manila University', 'Timed out', 'Time out', '2024-03-21 10:15:01'),
(32, 45, 'Gabriel Reyes Tan', 'Web Developer', 'De La Salle University', 'Timed out', 'Time out', '2024-03-21 10:20:03'),
(33, 43, 'Jose Cruz Gomez', 'Digital Marketing', 'University of the Philippines', 'Timed out', 'Time out', '2024-03-21 10:20:06'),
(34, 50, 'Marco Lopez Cruz', 'Graphic Design', 'University of the Philippines', 'Timed out', 'Time out', '2024-03-21 10:20:52'),
(35, 42, 'Anna Aquino Reyes', 'Web Developer', 'University of Santo Tomas', 'Timed out', 'Time out', '2024-03-21 10:22:26'),
(36, 49, 'Andrea Gomez Lim', 'Digital Marketing', 'University of Santo Tomas', 'Timed out', 'Time out', '2024-03-21 10:28:41'),
(37, 41, 'Pedro Garcia Lopez', 'Digital Marketing', 'De La Salle University', 'Timed out', 'Time out', '2024-03-21 10:28:52'),
(38, 48, 'Luis Chua Aquino', 'Web Developer', 'De La Salle University', 'Timed out', 'Time out', '2024-03-21 10:32:11'),
(39, 40, 'Maria Gonzales Santos', 'Graphic Design', 'Ateneo de Manila University', 'Timed out', 'Time out', '2024-03-21 10:38:03'),
(40, 47, 'Diego Gonzales Sy', 'Graphic Design', 'Ateneo de Manila University', 'Timed out', 'Time out', '2024-03-21 10:38:41'),
(41, 46, 'Sophia Santos Chua', 'Digital Marketing', 'University of Santo Tomas', 'Timed out', 'Time out', '2024-03-21 10:39:39'),
(42, 39, 'Juan Santos Dela Cruz', 'Web Developer', 'University of the Philippines', 'On time', 'Time in', '2024-03-22 00:47:44'),
(45, 47, 'Diego Gonzales Sy', 'Graphic Design', 'Ateneo de Manila University', 'Late', 'Time in', '2024-03-22 02:03:19'),
(46, 40, 'Maria Gonzales Santos', 'Graphic Design', 'Ateneo de Manila University', 'Late', 'Time in', '2024-03-22 02:05:56'),
(47, 48, 'Luis Chua Aquino', 'Web Developer', 'De La Salle University', 'Late', 'Time in', '2024-03-22 02:08:25'),
(48, 43, 'Jose Cruz Gomez', 'Digital Marketing', 'University of the Philippines', 'Late', 'Time in', '2024-03-22 02:11:56'),
(49, 55, 'Christian Noel Javellana Salvador', 'Game Developer', 'Technological University of the Philippines Visayas', 'Late', 'Time in', '2024-03-22 02:14:37');

-- --------------------------------------------------------

--
-- Table structure for table `internship`
--

CREATE TABLE `internship` (
  `ID` int NOT NULL,
  `program` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `internship`
--

INSERT INTO `internship` (`ID`, `program`) VALUES
(1, 'Web Developer'),
(2, 'Graphic Design'),
(3, 'Digital Marketing'),
(8, 'Game Developer');

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `ID` int NOT NULL,
  `schoolName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`ID`, `schoolName`) VALUES
(1, 'University of the Philippines'),
(2, 'Ateneo de Manila University'),
(3, 'De La Salle University'),
(4, 'University of Santo Tomas'),
(14, 'Technological University of the Philippines Visayas');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int NOT NULL,
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `midName` text NOT NULL,
  `internCategory` text NOT NULL,
  `school` text NOT NULL,
  `onboardingDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `firstName`, `lastName`, `midName`, `internCategory`, `school`, `onboardingDate`) VALUES
(39, 'Juan', 'Dela Cruz', 'Santos', 'Web Developer', 'University of the Philippines', '2024-01-29'),
(40, 'Maria', 'Santos', 'Gonzales', 'Graphic Design', 'Ateneo de Manila University', '2024-02-05'),
(41, 'Pedro', 'Lopez', 'Garcia', 'Digital Marketing', 'De La Salle University', '2024-02-05'),
(42, 'Anna', 'Reyes', 'Aquino', 'Web Developer', 'University of Santo Tomas', '2024-02-05'),
(43, 'Jose', 'Gomez', 'Cruz', 'Digital Marketing', 'University of the Philippines', '2024-01-29'),
(44, 'Mia', 'Lim', 'Tan', 'Graphic Design', 'Ateneo de Manila University', '2024-01-29'),
(45, 'Gabriel', 'Tan', 'Reyes', 'Web Developer', 'De La Salle University', '2024-01-29'),
(46, 'Sophia', 'Chua', 'Santos', 'Digital Marketing', 'University of Santo Tomas', '2024-01-29'),
(47, 'Diego', 'Sy', 'Gonzales', 'Graphic Design', 'Ateneo de Manila University', '2024-02-14'),
(48, 'Luis', 'Aquino', 'Chua', 'Web Developer', 'De La Salle University', '2024-02-14'),
(49, 'Andrea', 'Lim', 'Gomez', 'Digital Marketing', 'University of Santo Tomas', '2024-02-14'),
(55, 'Christian Noel', 'Salvador', 'Javellana', 'Game Developer', 'Technological University of the Philippines Visayas', '2024-04-29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `internship`
--
ALTER TABLE `internship`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `internship`
--
ALTER TABLE `internship`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
