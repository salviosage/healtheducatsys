-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2019 at 02:00 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `learning_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users_quiz`
--

CREATE TABLE `users_quiz` (
  `id` int(100) NOT NULL,
  `token` varchar(1024) NOT NULL,
  `quiz_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `status` varchar(200) NOT NULL,
  `save_date` varchar(200) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_quiz`
--

INSERT INTO `users_quiz` (`id`, `token`, `quiz_id`, `user_id`, `status`, `save_date`, `timestamp`) VALUES
(1, '322b96f9dfd466176a5d6d3d1c191e43', 5, 25, 'FINISHED', '2019/06/23 01:53:05pm', '2019-06-23 11:53:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users_quiz`
--
ALTER TABLE `users_quiz`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users_quiz`
--
ALTER TABLE `users_quiz`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
