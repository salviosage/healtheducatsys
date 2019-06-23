-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2019 at 01:59 PM
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
-- Table structure for table `questions_answers`
--

CREATE TABLE `questions_answers` (
  `id` int(100) NOT NULL,
  `token` varchar(1024) NOT NULL,
  `question_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `answer` varchar(200) NOT NULL,
  `status` varchar(50) NOT NULL,
  `save_date` varchar(200) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions_answers`
--

INSERT INTO `questions_answers` (`id`, `token`, `question_id`, `user_id`, `answer`, `status`, `save_date`, `timestamp`) VALUES
(1, '6fc63da4245bc3e6814e3579fb1665d1', 4, 25, 'answer5', 'ANSWERED', '2019/06/23 01:52:53pm', '2019-06-23 11:52:53'),
(2, 'fcc74a45a2ce70660e259491acd5f56e', 3, 25, 'answer3', 'ANSWERED', '2019/06/23 01:53:00pm', '2019-06-23 11:53:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions_answers`
--
ALTER TABLE `questions_answers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions_answers`
--
ALTER TABLE `questions_answers`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
