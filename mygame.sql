-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2022 at 02:19 PM
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
-- Database: `mygame`
--

-- --------------------------------------------------------

--
-- Table structure for table `history_log`
--

CREATE TABLE `history_log` (
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `q_id` int(11) NOT NULL,
  `uid` varchar(50) NOT NULL,
  `time` int(11) NOT NULL,
  `count_true` int(11) NOT NULL,
  `count_false` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `history_log_detail`
--

CREATE TABLE `history_log_detail` (
  `id` int(11) NOT NULL,
  `log_id` int(11) NOT NULL,
  `qc_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `questions_choice`
--

CREATE TABLE `questions_choice` (
  `qc_id` int(11) NOT NULL,
  `qd_id` int(11) NOT NULL,
  `qc_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `questions_detail`
--

CREATE TABLE `questions_detail` (
  `qd_id` int(11) NOT NULL,
  `qs_id` int(11) NOT NULL,
  `number1` int(11) NOT NULL,
  `number2` int(11) NOT NULL,
  `q_operator` varchar(5) NOT NULL,
  `q_answer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `questions_set`
--

CREATE TABLE `questions_set` (
  `q_id` int(11) NOT NULL,
  `q_create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `q_create_by` int(11) NOT NULL,
  `q_detail` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history_log`
--
ALTER TABLE `history_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `log` (`q_id`);

--
-- Indexes for table `history_log_detail`
--
ALTER TABLE `history_log_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions_choice`
--
ALTER TABLE `questions_choice`
  ADD PRIMARY KEY (`qc_id`),
  ADD KEY `detail` (`qd_id`);

--
-- Indexes for table `questions_detail`
--
ALTER TABLE `questions_detail`
  ADD PRIMARY KEY (`qd_id`),
  ADD KEY `set` (`qs_id`);

--
-- Indexes for table `questions_set`
--
ALTER TABLE `questions_set`
  ADD PRIMARY KEY (`q_id`),
  ADD KEY `user` (`q_create_by`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history_log`
--
ALTER TABLE `history_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `history_log_detail`
--
ALTER TABLE `history_log_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions_choice`
--
ALTER TABLE `questions_choice`
  MODIFY `qc_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions_detail`
--
ALTER TABLE `questions_detail`
  MODIFY `qd_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions_set`
--
ALTER TABLE `questions_set`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `history_log`
--
ALTER TABLE `history_log`
  ADD CONSTRAINT `log` FOREIGN KEY (`q_id`) REFERENCES `questions_set` (`q_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `questions_choice`
--
ALTER TABLE `questions_choice`
  ADD CONSTRAINT `detail` FOREIGN KEY (`qd_id`) REFERENCES `questions_detail` (`qd_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `questions_detail`
--
ALTER TABLE `questions_detail`
  ADD CONSTRAINT `set` FOREIGN KEY (`qs_id`) REFERENCES `questions_set` (`q_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `questions_set`
--
ALTER TABLE `questions_set`
  ADD CONSTRAINT `user` FOREIGN KEY (`q_create_by`) REFERENCES `user` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
