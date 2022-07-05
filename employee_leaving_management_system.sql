-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2021 at 06:10 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employee leaving management system`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `Attendance_id` int(10) NOT NULL,
  `Attendance_emp_id` varchar(10) NOT NULL DEFAULT 'not null',
  `Attendance_type` varchar(10) NOT NULL DEFAULT 'not null',
  `Attendance_desc` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `casual_leave`
--

CREATE TABLE `casual_leave` (
  `Leave_count` int(11) NOT NULL,
  `Leave_remain` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Employee_id` varchar(10) NOT NULL DEFAULT 'not null',
  `Employee_name` varchar(15) NOT NULL DEFAULT 'not null',
  `Employee_email` varchar(20) NOT NULL DEFAULT 'not null',
  `Employee_address` varchar(20) NOT NULL DEFAULT 'not null',
  `Employee_branch` varchar(10) NOT NULL DEFAULT 'not null',
  `Employee_username` varchar(10) NOT NULL DEFAULT 'not null',
  `Employee_passwords` varchar(15) NOT NULL DEFAULT 'not null'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `leave`
--

CREATE TABLE `leave` (
  `Leave_id` varchar(10) NOT NULL DEFAULT 'not null',
  `Leave_desc` varchar(10) NOT NULL,
  `Leave_status` varchar(10) NOT NULL,
  `Leave_from` date NOT NULL,
  `Leave_to` date NOT NULL,
  `Leave_emp_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `medical_leave`
--

CREATE TABLE `medical_leave` (
  `Leave_count` int(11) NOT NULL,
  `Leave_remain` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `other_leave`
--

CREATE TABLE `other_leave` (
  `Leave_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `Report_desc` varchar(10) NOT NULL,
  `Report_from` date NOT NULL,
  `Report_to` date NOT NULL,
  `Report_emp_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `Salary_id` varchar(10) NOT NULL DEFAULT 'not null',
  `Salary_desc` varchar(20) NOT NULL,
  `Salary_type` varchar(10) NOT NULL,
  `Salary_amount` int(10) NOT NULL,
  `Salary_total` int(10) NOT NULL,
  `Salary_employee_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
