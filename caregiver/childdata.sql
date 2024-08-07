-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2024 at 05:30 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `childdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `adopt`
--

CREATE TABLE `adopt` (
  `id` int(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `number` varchar(200) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adopt`
--

INSERT INTO `adopt` (`id`, `name`, `address`, `number`, `date`) VALUES
(1, 'Dhiraj', 'pune', '7852863145', '2024-01-02'),
(2, 'dev', 'nashik', '8574123688', '2024-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `care`
--

CREATE TABLE `care` (
  `id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `address` varchar(300) NOT NULL,
  `number` varchar(200) NOT NULL,
  `gender` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `care`
--

INSERT INTO `care` (`id`, `name`, `email`, `password`, `address`, `number`, `gender`) VALUES
(1, 'neha', 'neha@gmail.com', 'neha', 'pavan nagar,nashik', '2147483647', 'Female'),
(2, 'prisha', 'prisha@gmail.com', '92cc96352cced5ef91021b4c3266b54c1babb7a48b7222e1e3706329d70a10ef', 'shivaji nagar,nashik', '8574123688', 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `child`
--

CREATE TABLE `child` (
  `id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `age` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `hstatus` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `child`
--

INSERT INTO `child` (`id`, `name`, `age`, `gender`, `hstatus`) VALUES
(1, 'ram', '9', 'male', 'good'),
(2, 'siya', '10', 'female', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `id` int(100) NOT NULL,
  `etype` varchar(200) NOT NULL,
  `amount` int(200) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`id`, `etype`, `amount`, `date`) VALUES
(1, 'books', 10000, '2024-01-03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adopt`
--
ALTER TABLE `adopt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `care`
--
ALTER TABLE `care`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `child`
--
ALTER TABLE `child`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adopt`
--
ALTER TABLE `adopt`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `care`
--
ALTER TABLE `care`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `child`
--
ALTER TABLE `child`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
