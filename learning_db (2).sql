-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2019 at 12:27 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

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
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(100) NOT NULL,
  `token` varchar(1024) NOT NULL,
  `names` varchar(1024) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `message` text NOT NULL,
  `status` varchar(100) NOT NULL,
  `sent_date` varchar(200) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `token`, `names`, `email`, `phone`, `message`, `status`, `sent_date`, `timestamp`) VALUES
(1, '79a80be714a8ef692e875e705eff7757', 'dsds', 'dsdsds@gmail.com', '0124678966', 'dssdsdsdsds', 'READ', '2019/06/10 02:54:56pm', '2019-06-10 12:54:56'),
(2, '0c01e3e0c5d64f43c311a4df3d084452', 'dsds', 'admin@plaza.com', '0454122185445', 'lorem proigfsjfgdafdadjsadhsadksadjsagdhsagdjhsagdhsa', 'READ', '2019/06/10 02:59:12pm', '2019-06-10 12:59:12');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(100) NOT NULL,
  `token` varchar(1024) NOT NULL,
  `title` varchar(1024) NOT NULL,
  `summary` text NOT NULL,
  `course_price` varchar(100) NOT NULL,
  `assigned_teacher` int(100) NOT NULL,
  `path` varchar(1024) NOT NULL,
  `status` varchar(50) NOT NULL,
  `regDate` varchar(200) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `token`, `title`, `summary`, `course_price`, `assigned_teacher`, `path`, `status`, `regDate`, `timestamp`) VALUES
(5, '', 'Java Essential Training', '&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod&lt;br /&gt;tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,&lt;br /&gt;quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo&lt;br /&gt;consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse&lt;br /&gt;cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non&lt;br /&gt;proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&lt;/p&gt;', '5454', 2, 'preview11-1093616141874771770.png', 'ACTIVE', '2019/04/15 09:59:35pm', '2019-04-15 17:59:35'),
(6, '', '0027 - Medical Biorisk Assessment &amp;amp; Management - 8 CPD Credits by Celestin Musabyumuremyi', '&lt;p&gt;Medical Risk Assessment is intended to offer an understanding of the basic theory underlying a safety risk assessment. This course will be help you to have a clear understanding on Managing Biorisk events.&lt;/p&gt;', '3548', 2, '3-1421118071818509497.jpg', 'ACTIVE', '2019/04/15 10:58:16pm', '2019-04-15 18:58:16'),
(7, '', '0026 Diagnostic Approach of acute Leukemias, What you wished to know! by Diogene Rwayitare - 32 CPD Credits', '&lt;p&gt;This course will give you an A to Z approach on the Diagnosis of Acute Leukemias, You will be presented with clinical, morphological features and the management of acute and chronic leukemias. Enroll by calling on 0789044439.&lt;/p&gt;', '20000', 2, '5-10285308511866771868.jpg', 'ACTIVE', '2019/04/15 10:59:43pm', '2019-04-15 18:59:43'),
(8, '', '0024 Customer care in Health setting: Doing more to succeed! By David Gilet - 10 CPD Credits', '&lt;p&gt;This course will inspire Health professionals on the need to increase customer care service in their workplace, Health Setting. Will highlight about patient satisfaction also. It is to be done in 10 Hours.&lt;/p&gt;', '25000', 2, '3-6750510001086887618.jpg', 'ACTIVE', '2019/04/16 12:40:57pm', '2019-04-16 08:40:57');

-- --------------------------------------------------------

--
-- Table structure for table `courses_requesting`
--

CREATE TABLE `courses_requesting` (
  `id` int(100) NOT NULL,
  `token` varchar(1024) NOT NULL,
  `course_id` int(100) NOT NULL,
  `student_id` int(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `request_date` varchar(200) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses_requesting`
--

INSERT INTO `courses_requesting` (`id`, `token`, `course_id`, `student_id`, `status`, `request_date`, `timestamp`) VALUES
(1, 'f44538610793a686122da9bfbc98fcf9', 7, 4, 'APPROVED', '2019/06/08 07:24:30pm', '2019-06-08 17:24:30');

-- --------------------------------------------------------

--
-- Table structure for table `course_credits`
--

CREATE TABLE `course_credits` (
  `id` int(11) NOT NULL,
  `course_id` int(100) NOT NULL,
  `teacher_id` int(100) NOT NULL,
  `credit` varchar(1024) NOT NULL,
  `summary` text NOT NULL,
  `credit_type` varchar(1024) DEFAULT NULL,
  `video_url` varchar(1024) DEFAULT NULL,
  `attachment` varchar(1024) NOT NULL,
  `status` varchar(50) NOT NULL,
  `save_date` varchar(200) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_credits`
--

INSERT INTO `course_credits` (`id`, `course_id`, `teacher_id`, `credit`, `summary`, `credit_type`, `video_url`, `attachment`, `status`, `save_date`, `timestamp`) VALUES
(1, 0, 2, 'Welcome to my homeland of technology', '&lt;p&gt;&lt;em&gt;&lt;strong&gt;Welcome to my homeland of technologyWelcome to my&lt;/strong&gt; &lt;/em&gt;homeland of technologyWelcome to my homeland of technologyWelcome to my homeland of technology&lt;/p&gt;', NULL, NULL, 'C:/xampp/htdocs/learn/Uploads/12-775057870319791161.PNG', 'ACTIVE', '2019/04/13 08:14:26am', '2019-04-13 06:14:26'),
(2, 1, 0, 'Welcome to my homeland of technology', '&lt;p&gt;Software Engineering:Introduction to COmputing Eras.&lt;/p&gt;', NULL, NULL, '122121-6548822882050345270.PNG', 'ACTIVE', '2019/04/13 08:22:03am', '2019-04-13 06:22:03'),
(3, 1, 2, 'Welcome to my homeland of technology', '&lt;p&gt;Welcome to my homeland of technologyWelcome to my homeland of technologyWelcome to my homeland of technologyWelcome to my homeland of technology&lt;/p&gt;', NULL, NULL, 'andela_proficiency_certificate-8044823061943953113.pdf', 'ACTIVE', '2019/04/13 08:24:20am', '2019-04-13 06:24:20'),
(4, 1, 2, 'Welcome to my homeland of technology', '&lt;p&gt;Software Engineering:Introduction to COmputing Eras.&lt;/p&gt;', 'WRITTEN', '', 'search_done-1902251871146891194.PNG', 'ACTIVE', '2019/05/27 03:11:03pm', '2019-05-27 13:11:03'),
(5, 1, 2, 'Welcome to my homeland of technology', '&lt;p&gt;video_urlvideo_urlvideo_urlvideo_urlvideo_urlvideo_urlvideo_urlvideo_urlvideo_urlvideo_urlvideo_url&lt;/p&gt;', 'VIDEO', 'video_url', 'search_done-15021253431437999173.PNG', 'ACTIVE', '2019/05/27 03:13:48pm', '2019-05-27 13:13:48');

-- --------------------------------------------------------

--
-- Table structure for table `credits_attachments`
--

CREATE TABLE `credits_attachments` (
  `id` int(100) NOT NULL,
  `credit_id` int(100) NOT NULL,
  `file_path` varchar(1024) NOT NULL,
  `status` varchar(50) NOT NULL,
  `upload_date` varchar(200) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `credit_quiz`
--

CREATE TABLE `credit_quiz` (
  `id` int(100) NOT NULL,
  `credit_id` int(100) NOT NULL,
  `title` varchar(1024) NOT NULL,
  `summary` text NOT NULL,
  `duration` varchar(200) NOT NULL,
  `status` varchar(50) NOT NULL,
  `save_date` varchar(200) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `credit_quiz`
--

INSERT INTO `credit_quiz` (`id`, `credit_id`, `title`, `summary`, `duration`, `status`, `save_date`, `timestamp`) VALUES
(2, 3, 'Learning the Basics of Computing Era', '&lt;p&gt;&lt;strong&gt;Lorem ipsum&lt;/strong&gt;&amp;nbsp;dolor sit ame&lt;em&gt;t, consectetur adipisicing elit, sed do&lt;/em&gt;&amp;nbsp;eiusmod&lt;br /&gt;tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,&lt;br /&gt;quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo&lt;br /&gt;consequat. Duis aute irure dolor in r&lt;strong&gt;eprehenderit i&lt;/strong&gt;n voluptate velit esse&lt;br /&gt;cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non&lt;br /&gt;proident, sunt in culpa qui officia deserunt mollit anim id est laborum.&lt;/p&gt;', '', '', '2019/04/13 12:32:43pm', '2019-04-13 10:32:43');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(100) NOT NULL,
  `quiz_id` int(100) NOT NULL,
  `question` text NOT NULL,
  `answer1` varchar(1024) NOT NULL,
  `answer2` varchar(1024) NOT NULL,
  `answer3` varchar(1024) NOT NULL,
  `answer4` varchar(1024) NOT NULL,
  `answer5` varchar(1024) NOT NULL,
  `correct` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `save_date` varchar(200) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `quiz_id`, `question`, `answer1`, `answer2`, `answer3`, `answer4`, `answer5`, `correct`, `status`, `save_date`, `timestamp`) VALUES
(1, 2, 'When the first Computer was invented?', 'In 1960', 'In 1962', 'In 1964', 'In 1950', 'In 1980', 'answer3', 'ACTIVE', '2019/04/13 01:23:33pm', '2019-04-13 11:23:33'),
(2, 2, 'Who was the Inventor of C Programming Language?', 'Dennis Ritchies', 'Mark Zuckerburg', 'Bill Gates', 'Bjarne Straustop', 'No Correct Answer', 'answer1', 'ACTIVE', '2019/04/13 01:35:44pm', '2019-04-13 11:35:44');

-- --------------------------------------------------------

--
-- Table structure for table `system_users`
--

CREATE TABLE `system_users` (
  `id` int(100) NOT NULL,
  `token` varchar(1024) NOT NULL,
  `names` varchar(1024) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `degree` int(50) DEFAULT NULL,
  `profession` int(50) DEFAULT NULL,
  `user_type` int(2) NOT NULL,
  `address` text NOT NULL,
  `profile_image` varchar(1024) NOT NULL,
  `verified` int(2) NOT NULL,
  `verification_code` varchar(100) NOT NULL,
  `status` int(2) NOT NULL,
  `save_date` varchar(1024) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `system_users`
--

INSERT INTO `system_users` (`id`, `token`, `names`, `email`, `password`, `phone`, `degree`, `profession`, `user_type`, `address`, `profile_image`, `verified`, `verification_code`, `status`, `save_date`, `reg_date`) VALUES
(1, '', 'Sugira Samuel', 'sam@gmail.com', '123456', '', NULL, NULL, 1, '', '', 1, '4545341415', 1, '', '2019-04-12 10:04:11'),
(2, '', 'Teacher Mpamire', 'teacher@top.rw', '123456', '', NULL, NULL, 2, '', '', 1, '4545648', 1, '', '2019-04-12 11:37:16'),
(3, '', 'Sugira samuel', 'sugira@top.rw', '123456', '0784512565', NULL, NULL, 2, '', '', 1, '1387', 1, '', '2019-05-27 12:22:29'),
(5, '', 'salvi', 'salvi@gmail.com', '123456', '078451256', NULL, NULL, 2, '', '', 1, '5395', 1, '', '2019-05-28 08:28:04'),
(23, '29cbe205b695a02fbf70d328a8ba0100', 'Names', 'Email', '123456', 'phone', 0, 0, 3, '', '', 1, '4429', 1, '', '2019-06-10 14:12:51'),
(24, '964fcff5d066a8efcc38c1188e876cd8', 'Elise gakuba', 'elise@health.com', '123456', '7451211212', 0, 0, 3, '', '', 1, '4625', 1, '', '2019-06-10 14:12:51'),
(25, '01454aec46aecad310b19df603c19284', 'Elise gakuba', 'elise@health.com', '123456', '7451211213', 0, 0, 3, '', '', 1, '7195', 1, '', '2019-06-10 14:12:51');

-- --------------------------------------------------------

--
-- Table structure for table `users_degree`
--

CREATE TABLE `users_degree` (
  `id` int(100) NOT NULL,
  `name` varchar(1024) NOT NULL,
  `status` varchar(50) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_degree`
--

INSERT INTO `users_degree` (`id`, `name`, `status`, `timestamp`) VALUES
(1, 'Master\'s Degree', 'ACTIVE', '2019-05-27 22:08:01'),
(2, 'PhD', 'ACTIVE', '2019-05-27 22:08:01'),
(3, 'Bachelor\'s', 'ACTIVE', '2019-05-27 22:09:17'),
(4, 'Advanced Diploma', 'ACTIVE', '2019-05-27 22:09:17'),
(5, 'Certificate (A2)', 'ACTIVE', '2019-05-27 22:09:17'),
(6, 'Others', 'ACTIVE', '2019-05-27 22:09:35');

-- --------------------------------------------------------

--
-- Table structure for table `users_info`
--

CREATE TABLE `users_info` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `initial_amount` varchar(100) NOT NULL,
  `country` varchar(50) NOT NULL,
  `province` varchar(200) NOT NULL,
  `district` varchar(200) NOT NULL,
  `sector` varchar(200) NOT NULL,
  `cell` varchar(200) NOT NULL,
  `village` varchar(200) NOT NULL,
  `status` varchar(50) NOT NULL,
  `save_date` varchar(1024) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users_profession`
--

CREATE TABLE `users_profession` (
  `id` int(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `status` varchar(50) NOT NULL,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_profession`
--

INSERT INTO `users_profession` (`id`, `name`, `status`, `timestamp`) VALUES
(1, 'Allied Health Professional', 'ACTIVE', '2019-05-27 22:01:59'),
(2, 'Medical Practitioner', 'ACTIVE', '2019-05-27 22:01:59'),
(3, 'Pharmacist', 'ACTIVE', '2019-05-27 22:02:15'),
(4, 'Nurse', 'ACTIVE', '2019-05-27 22:02:50'),
(5, 'Midwife', 'ACTIVE', '2019-05-27 22:02:50'),
(6, 'Other', 'ACTIVE', '2019-05-27 22:03:07');

-- --------------------------------------------------------

--
-- Table structure for table `what_to_learn`
--

CREATE TABLE `what_to_learn` (
  `id` int(100) NOT NULL,
  `token` varchar(1024) NOT NULL,
  `course_id` int(100) NOT NULL,
  `to_learn` text NOT NULL,
  `status` varchar(50) NOT NULL,
  `save_date` varchar(200) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `what_to_learn`
--

INSERT INTO `what_to_learn` (`id`, `token`, `course_id`, `to_learn`, `status`, `save_date`, `timestamp`) VALUES
(1, '340ff915457531e98d066f85c184690d', 5, 'dsdsdsdsdsdsd', 'DELETED', '2019/06/08 09:01:31pm', '2019-06-08 19:01:31'),
(2, '38f607c6cf5aa7f44f7e9dc4f08c74b9', 5, 'Welcome to homeland of technology', 'ACTIVE', '2019/06/08 09:06:18pm', '2019-06-08 19:06:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses_requesting`
--
ALTER TABLE `courses_requesting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_credits`
--
ALTER TABLE `course_credits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `credits_attachments`
--
ALTER TABLE `credits_attachments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `credit_quiz`
--
ALTER TABLE `credit_quiz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_users`
--
ALTER TABLE `system_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_info`
--
ALTER TABLE `users_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_profession`
--
ALTER TABLE `users_profession`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `what_to_learn`
--
ALTER TABLE `what_to_learn`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `courses_requesting`
--
ALTER TABLE `courses_requesting`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course_credits`
--
ALTER TABLE `course_credits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `credits_attachments`
--
ALTER TABLE `credits_attachments`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `credit_quiz`
--
ALTER TABLE `credit_quiz`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `system_users`
--
ALTER TABLE `system_users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users_info`
--
ALTER TABLE `users_info`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users_profession`
--
ALTER TABLE `users_profession`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `what_to_learn`
--
ALTER TABLE `what_to_learn`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
