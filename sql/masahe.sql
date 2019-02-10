-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2018 at 11:07 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `masahe`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `gender` enum('Male','Female','','') NOT NULL,
  `mobile_no` bigint(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` enum('client','admin','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `firstname`, `lastname`, `address`, `dob`, `gender`, `mobile_no`, `email`, `photo`, `password`, `user_type`) VALUES
(0, 'admin', 'admin', 'admin', 'admin', '2018-03-09', 'Female', 11111111111, 'admin@admin.com', '0_admin.JPG', 'admin', 'admin'),
(16, 'faye', 'Faye', 'Centillas', 'Cortes', '2018-03-23', 'Female', 91678909889, 'faye@yahoo.com', '16_faye.jpg', '123', 'client'),
(17, 'lloydcole', 'Lloyd', 'Damulo', 'Lapu-lapu', '1998-09-19', 'Male', 9876765432, 'lloyd@yahoo.com', '17_lloyd.jpg', '123', 'client'),
(19, 'jeo', 'Jeo', 'Avelino', 'Dampas', '1997-11-30', 'Male', 9999987654, 'jeo@gmail.com', '19_jeo.jpg', '123', 'client'),
(20, 'daniela', 'Daniela', 'Echavez', 'Mandaue, Cebu', '1998-02-26', 'Female', 9998122221, 'daniela@butter.com', '20_daniela.jpg', '123', 'client'),
(21, 'jude', 'Jude', 'Canete', 'Mabolo', '1998-01-23', 'Male', 9111111111, 'jude@yahoo.com', '21_jude.jpg', '123', 'client'),
(22, 'chester', 'Chester', 'Barajan', 'Lapaz', '1992-01-16', 'Male', 9222222212, 'chester@yahoo.com', '', '123', 'client'),
(23, 'taylor', 'Taylor', 'Swift', 'Pennsylvania', '1989-12-13', 'Female', 9999999999, 'taylor@swift.com', '23_kisil.PNG', '123', 'client'),
(24, 'selena', 'Selena', 'Gomez', 'Texas', '1983-12-28', 'Female', 99999999999, 'selena@yahoo.com', '', '123', 'client'),
(26, 'stiff', 'Stiffani', 'Centillas', 'Bohol', '1998-03-03', 'Female', 9075097139, 'stiffanitambiscentillas@gmail.com', '', 'xiao', 'client');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
