-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2017 at 08:37 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gsa_student_is`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(11) NOT NULL,
  `first_name` varchar(55) NOT NULL,
  `middle_name` varchar(20) NOT NULL,
  `last_name` varchar(55) NOT NULL,
  `address` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `email_address` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `first_name`, `middle_name`, `last_name`, `address`, `birthday`, `email_address`) VALUES
(1, 'john', 'stockweister', 'doe', '123 sampleville, sampcity, USA', '1995-10-05', 'tester@gmail.com'),
(2, 'test', 'tm', 'tl', '1 kd', '2002-09-02', 'test@test.com'),
(4, 'Joseph', 'F', 'T', 'Ph', '1989-01-01', 'test@test.com'),
(5, 'Sample', 'Sam', 'Samp', 'Samp', '1990-10-01', 'test@getsmail.com'),
(6, 'A', 'A', 'A', 'A', '1959-12-12', 'test@test.com'),
(8, 'c', 'c', 'c', 'c', '1997-02-14', 'c@c.com'),
(11, 'Ernest', 'Elmers', 'Folgenburg', '23 Jordan St., Detroit', '1959-12-03', 'ernest_f@tester.com'),
(12, 'John', 'Wade', 'Meyers', '123 Jackson Drv', '1995-02-10', 'tester@pstncorp.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
