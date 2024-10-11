-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2024 at 08:15 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hogheaven`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `mobile` varchar(14) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `mode` enum('Online','In-Person','call','') NOT NULL,
  `reason` enum('Consultation','Follow-up','Other','') NOT NULL,
  `msg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `fname`, `lname`, `mobile`, `email`, `date`, `time`, `mode`, `reason`, `msg`) VALUES
(1, 'bandish', 'basnet', '0452625085', 'bandishbasnet@gmail.com', '2024-10-17', '16:00:00', 'Online', 'Consultation', 'Hello'),
(2, 'Nabin', 'Kumar', '1234567890', 'nabin@kumar', '2024-10-22', '16:05:00', 'In-Person', 'Follow-up', 'I want to visit for follow-up with counsellor'),
(3, 'Cihe', 'College', '0452625085', 'cihe@edu.au', '2024-10-11', '16:30:00', 'Online', 'Follow-up', 'I want to follow up'),
(4, 'bandish', 'basnet', '0452625085', 'bandishbasnet@gmail.com', '2024-10-10', '16:36:00', 'call', 'Follow-up', 'Call counselling');

-- --------------------------------------------------------

--
-- Table structure for table `counsellor`
--

CREATE TABLE `counsellor` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `mobile` varchar(14) NOT NULL,
  `email` varchar(50) NOT NULL,
  `available` enum('Available','Not-Available') NOT NULL,
  `gender` enum('Male','Female','Others') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `counsellor`
--

INSERT INTO `counsellor` (`id`, `fname`, `lname`, `mobile`, `email`, `available`, `gender`) VALUES
(10, 'bandish', 'basnet', '0452625085', 'bandishbasnet@gmail.com', 'Available', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `user_name`, `password`, `date`) VALUES
(1, 836025376, 'bandish', 'bandish', '2024-08-28 03:26:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counsellor`
--
ALTER TABLE `counsellor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `date` (`date`),
  ADD KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `counsellor`
--
ALTER TABLE `counsellor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
