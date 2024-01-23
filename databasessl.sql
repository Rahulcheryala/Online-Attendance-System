-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2022 at 02:22 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `databasessl`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `Name` varchar(255) NOT NULL,
  `Admin Id` varchar(50) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`Name`, `Admin Id`, `Email`) VALUES
('Tamal Das', '123456789', 'tamal@iitdh.ac.in');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `username` varchar(255) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`username`, `password`) VALUES
('123456789', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `Course code` varchar(10) NOT NULL,
  `course` varchar(50) NOT NULL,
  `credits` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`Course code`, `course`, `credits`) VALUES
('cs201', 'Data Structures and algorithms', '6'),
('cs211', 'Software systems', '6'),
('ee103', 'Data analysis', '4'),
('ph105', 'Electricity and magnetism', '4'),
('me101', 'Thermodynamics', '4');

-- --------------------------------------------------------

--
-- Table structure for table `cs201`
--

CREATE TABLE `cs201` (
  `Roll no` varchar(50) NOT NULL,
  `totalclasses` int(50) NOT NULL DEFAULT 0,
  `classesattended` int(50) NOT NULL DEFAULT 0,
  `Attendance Percentage` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cs201`
--

INSERT INTO `cs201` (`Roll no`, `totalclasses`, `classesattended`, `Attendance Percentage`) VALUES
('210010012', 12, 11, 92),
('210010037', 12, 11, 92),
('210010031', 12, 10, 83),
('210010030', 12, 9, 75),
('210010053', 12, 9, 75);

-- --------------------------------------------------------

--
-- Table structure for table `cs211`
--

CREATE TABLE `cs211` (
  `Roll no` varchar(50) NOT NULL,
  `totalclasses` int(11) NOT NULL DEFAULT 0,
  `classesattended` int(11) NOT NULL DEFAULT 0,
  `Attendance Percentage` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cs211`
--

INSERT INTO `cs211` (`Roll no`, `totalclasses`, `classesattended`, `Attendance Percentage`) VALUES
('210010012', 10, 10, 100),
('210010037', 10, 9, 90),
('210010031', 10, 8, 80);

-- --------------------------------------------------------

--
-- Table structure for table `ee103`
--

CREATE TABLE `ee103` (
  `Roll no` varchar(50) NOT NULL,
  `totalclasses` int(11) NOT NULL DEFAULT 0,
  `classesattended` int(11) NOT NULL DEFAULT 0,
  `Attendance Percentage` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ee103`
--

INSERT INTO `ee103` (`Roll no`, `totalclasses`, `classesattended`, `Attendance Percentage`) VALUES
('210010031', 10, 9, 90),
('210010030', 10, 8, 80),
('210010053', 10, 8, 80);

-- --------------------------------------------------------

--
-- Table structure for table `facreq`
--

CREATE TABLE `facreq` (
  `Name` varchar(255) NOT NULL,
  `Faculty id` varchar(50) NOT NULL,
  `Department` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone number` varchar(50) NOT NULL,
  `Course code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facreq`
--

INSERT INTO `facreq` (`Name`, `Faculty id`, `Department`, `Email`, `Phone number`, `Course code`) VALUES
('Manikanta', '1005200350', 'EE', 'kns@iitdh.ac.in', '9134562780', 'ee103');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_info`
--

CREATE TABLE `faculty_info` (
  `Faculty ID` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `Department` varchar(50) NOT NULL,
  `Course code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty_info`
--

INSERT INTO `faculty_info` (`Faculty ID`, `Name`, `email`, `Department`, `Course code`) VALUES
('1005200300', 'Tamal Das', 'tamaldas@iitdh.ac.in', 'CS', 'cs201'),
('1005200301', 'Koteshwararao', 'koteshwararao@iitdh.ac.in', 'CS', 'cs211'),
('1005200302', 'Naveen', 'naveenmb@iitdh.ac.in', 'EE', 'ee103'),
('1005200303', 'Kavitha devi', 'kavithadevi@iitdh.ac.in', 'PH', 'ph105'),
('1005200304', 'Amar', 'amar@iitdh.ac.in', 'ME', 'me101');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_login`
--

CREATE TABLE `faculty_login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty_login`
--

INSERT INTO `faculty_login` (`username`, `password`) VALUES
('1005200300', '300'),
('1005200301', '301'),
('1005200302', '302'),
('1005200303', '303'),
('1005200304', '304');

-- --------------------------------------------------------

--
-- Table structure for table `me101`
--

CREATE TABLE `me101` (
  `Roll no` varchar(50) NOT NULL,
  `totalclasses` int(11) NOT NULL DEFAULT 0,
  `classesattended` int(11) NOT NULL DEFAULT 0,
  `Attendance Percentage` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `me101`
--

INSERT INTO `me101` (`Roll no`, `totalclasses`, `classesattended`, `Attendance Percentage`) VALUES
('210010012', 10, 9, 90),
('210010037', 10, 9, 90),
('210010031', 10, 9, 90);

-- --------------------------------------------------------

--
-- Table structure for table `ph105`
--

CREATE TABLE `ph105` (
  `Roll no` varchar(50) NOT NULL,
  `totalclasses` int(11) NOT NULL DEFAULT 0,
  `classesattended` int(11) NOT NULL DEFAULT 0,
  `Attendance Percentage` int(50) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ph105`
--

INSERT INTO `ph105` (`Roll no`, `totalclasses`, `classesattended`, `Attendance Percentage`) VALUES
('210010012', 10, 9, 90),
('210010037', 10, 9, 90),
('210010031', 10, 9, 90),
('210010030', 10, 9, 90),
('210010053', 10, 9, 90);

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `Roll no` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Branch` varchar(10) NOT NULL,
  `DOB` varchar(50) NOT NULL,
  `Email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`Roll no`, `Name`, `Branch`, `DOB`, `Email`) VALUES
('210010012', 'Rahul Cheryala', 'CS', '27/03/2004', '210010012@iitdh.ac.in'),
('210010037', 'Pranathi Pendota', 'EE', '16/02/2003', '210010037@iitdh.ac.in'),
('210010031', 'Naga Ayushmaan', 'CS', '14/01/2003', '210010031@iitdh.ac.in'),
('210010030', 'Suresh Mundavar', 'CS', '16/12/2003', '210010030@iitdh.ac.in'),
('210010053', 'Nikhil Babu', 'ME', '25/08/2003', '210010053@iitdh.ac.in');

-- --------------------------------------------------------

--
-- Table structure for table `student_login`
--

CREATE TABLE `student_login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_login`
--

INSERT INTO `student_login` (`username`, `password`) VALUES
('210010012', 'cs12'),
('210010037', 'cs37'),
('210010031', 'cs31'),
('210010030', 'cs30'),
('210010053', 'cs53');

-- --------------------------------------------------------

--
-- Table structure for table `stureq`
--

CREATE TABLE `stureq` (
  `Name` varchar(255) NOT NULL,
  `Roll no` varchar(50) NOT NULL,
  `Department` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `DOB` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stureq`
--

INSERT INTO `stureq` (`Name`, `Roll no`, `Department`, `Email`, `DOB`) VALUES
('Ramesh', '210010039', 'CS', '210010039@iitdh.ac.in', '24/12/2003');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
