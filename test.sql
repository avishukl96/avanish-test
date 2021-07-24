-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2021 at 12:47 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `id` int(11) NOT NULL,
  `due_date` datetime DEFAULT NULL,
  `description` text DEFAULT NULL,
  `assigned_by` varchar(255) DEFAULT NULL,
  `assigned_to` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id`, `due_date`, `description`, `assigned_by`, `assigned_to`, `status`) VALUES
(2, '2021-07-13 16:20:00', 'task111', 'employees', 'himself', 'Pending'),
(3, '0000-00-00 00:00:00', 'task11', 'employees', 'himself', 'success'),
(4, '0000-00-00 00:00:00', 'task11', 'employees', 'himself', 'success'),
(5, '0000-00-00 00:00:00', 'task11', 'employees', 'himself', 'pending'),
(6, '0000-00-00 00:00:00', 'task11', 'employees', 'himself', 'success'),
(7, '0000-00-00 00:00:00', 'task11', 'employees', 'himself', 'success'),
(8, '0000-00-00 00:00:00', 'task11', 'employees', 'himself', 'success'),
(9, '0000-00-00 00:00:00', 'task11', 'employees', 'himself', 'success'),
(10, '2021-07-22 16:21:00', 'task11', 'employees', 'himself', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `user_type` enum('manager','employee') DEFAULT 'employee'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `user_type`) VALUES
(1, 'Avanish Shukla', 'avishukl96@gmail.com', 'Avanish1234', 'manager'),
(2, 'Kunal Mishra', 'kunal@gmail.com', 'Kunal1234', 'employee'),
(3, 'Rajeev Singh', 'ranjeev@gmail.com', 'Rajeev1234', 'employee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
