-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2022 at 05:20 PM
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

--
-- Dumping data for table `history_log`
--

INSERT INTO `history_log` (`id`, `date`, `q_id`, `uid`, `time`, `count_true`, `count_false`) VALUES
(3, '2022-07-03 14:47:25', 50, '1', 5, 3, 7),
(4, '2022-07-03 15:07:58', 51, '1', 4, 0, 10),
(5, '2022-07-03 15:08:13', 52, '1', 3, 2, 8);

-- --------------------------------------------------------

--
-- Table structure for table `questions_choice`
--

CREATE TABLE `questions_choice` (
  `qc_id` int(11) NOT NULL,
  `qd_id` int(11) NOT NULL,
  `qc_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions_choice`
--

INSERT INTO `questions_choice` (`qc_id`, `qd_id`, `qc_number`) VALUES
(1, 421, -19),
(2, 421, -76),
(3, 421, 98),
(4, 421, 1),
(5, 422, 59),
(6, 422, 13),
(7, 422, 57),
(8, 422, 1),
(9, 423, 45),
(10, 423, 33),
(11, 423, 1),
(12, 423, 27),
(13, 424, 1),
(14, 424, 71),
(15, 424, 23),
(16, 424, 91),
(17, 425, 70),
(18, 425, 46),
(19, 425, -38),
(20, 425, 1),
(21, 426, 31),
(22, 426, 1),
(23, 426, -85),
(24, 426, -27),
(25, 427, -57),
(26, 427, 15),
(27, 427, 1),
(28, 427, 53),
(29, 428, 68),
(30, 428, 1),
(31, 428, -83),
(32, 428, 77),
(33, 429, 83),
(34, 429, -25),
(35, 429, 1),
(36, 429, -57),
(37, 430, 55),
(38, 430, 20),
(39, 430, 1),
(40, 430, -89),
(41, 431, 115),
(42, 431, -11),
(43, 431, -62),
(44, 431, 16),
(45, 432, 239),
(46, 432, 124),
(47, 432, 203),
(48, 432, 249),
(49, 433, 319),
(50, 433, 359),
(51, 433, 281),
(52, 433, 241),
(53, 434, 2308),
(54, 434, 2276),
(55, 434, 2228),
(56, 434, 2209),
(57, 435, 896),
(58, 435, 1005),
(59, 435, 939),
(60, 435, 899),
(61, 436, 1223),
(62, 436, 1196),
(63, 436, 1136),
(64, 436, 1279),
(65, 437, 627),
(66, 437, 546),
(67, 437, 524),
(68, 437, 494),
(69, 438, 11),
(70, 438, -26),
(71, 438, -11),
(72, 438, -1),
(73, 439, 2330),
(74, 439, 2303),
(75, 439, 2293),
(76, 439, 2276),
(77, 440, 80),
(78, 440, -3),
(79, 440, 100),
(80, 440, 42),
(81, 441, 71),
(82, 441, 12),
(83, 441, -33),
(84, 441, -68),
(85, 442, -61),
(86, 442, 30),
(87, 442, -13),
(88, 442, -46),
(89, 443, -20),
(90, 443, 48),
(91, 443, 33),
(92, 443, 25),
(93, 444, 35),
(94, 444, -72),
(95, 444, 97),
(96, 444, 8),
(97, 445, -92),
(98, 445, 2),
(99, 445, -91),
(100, 445, -88),
(101, 446, 44),
(102, 446, -10),
(103, 446, 8),
(104, 446, 14),
(105, 447, 40),
(106, 447, 101),
(107, 447, -36),
(108, 447, 109),
(109, 448, -69),
(110, 448, 82),
(111, 448, -79),
(112, 448, 11),
(113, 449, 79),
(114, 449, 111),
(115, 449, 24),
(116, 449, 51),
(117, 450, 106),
(118, 450, 124),
(119, 450, -44),
(120, 450, 36),
(121, 451, 864),
(122, 451, 781),
(123, 451, 958),
(124, 451, 884),
(125, 452, 450),
(126, 452, 516),
(127, 452, 388),
(128, 452, 388),
(129, 453, 162),
(130, 453, 224),
(131, 453, 309),
(132, 453, 195),
(133, 454, 232),
(134, 454, 144),
(135, 454, 114),
(136, 454, 219),
(137, 455, 190),
(138, 455, 208),
(139, 455, 252),
(140, 455, 120),
(141, 456, 151),
(142, 456, -44),
(143, 456, -12),
(144, 456, 51),
(145, 457, 256),
(146, 457, 161),
(147, 457, 242),
(148, 457, 189),
(149, 458, 1562),
(150, 458, 1521),
(151, 458, 1497),
(152, 458, 1422),
(153, 459, 591),
(154, 459, 630),
(155, 459, 570),
(156, 459, 557),
(157, 460, 590),
(158, 460, 560),
(159, 460, 590),
(160, 460, 493),
(161, 461, 107),
(162, 461, 163),
(163, 461, 221),
(164, 461, 122),
(165, 462, 74),
(166, 462, -56),
(167, 462, -21),
(168, 462, -88),
(169, 463, 404),
(170, 463, 332),
(171, 463, 297),
(172, 463, 392),
(173, 464, 153),
(174, 464, 99),
(175, 464, 163),
(176, 464, 71),
(177, 465, 306),
(178, 465, 370),
(179, 465, 288),
(180, 465, 356),
(181, 466, 235),
(182, 466, 333),
(183, 466, 152),
(184, 466, 210),
(185, 467, 298),
(186, 467, 338),
(187, 467, 308),
(188, 467, 254),
(189, 468, 114),
(190, 468, 120),
(191, 468, 129),
(192, 468, 38),
(193, 469, 17),
(194, 469, -72),
(195, 469, -4),
(196, 469, 95),
(197, 470, 426),
(198, 470, 235),
(199, 470, 334),
(200, 470, 398);

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

--
-- Dumping data for table `questions_detail`
--

INSERT INTO `questions_detail` (`qd_id`, `qs_id`, `number1`, `number2`, `q_operator`, `q_answer`) VALUES
(421, 48, 1, 1, '*', 1),
(422, 48, 1, 1, '*', 1),
(423, 48, 1, 1, '*', 1),
(424, 48, 1, 1, '*', 1),
(425, 48, 1, 1, '*', 1),
(426, 48, 1, 1, '*', 1),
(427, 48, 1, 1, '*', 1),
(428, 48, 1, 1, '*', 1),
(429, 48, 1, 1, '*', 1),
(430, 48, 1, 1, '*', 1),
(431, 49, 452, 27, '/', 16),
(432, 49, 284, 81, '-', 203),
(433, 49, 367, 86, '-', 281),
(434, 49, 1210, 1098, '+', 2308),
(435, 49, 1006, 67, '-', 939),
(436, 49, 46, 26, '*', 1196),
(437, 49, 13, 42, '*', 546),
(438, 49, 456, 41, '/', 11),
(439, 49, 47, 49, '*', 2303),
(440, 49, 10, 8, '*', 80),
(441, 50, 2, 6, '*', 12),
(442, 50, 5, 6, '*', 30),
(443, 50, 8, 6, '*', 48),
(444, 50, 8, 1, '*', 8),
(445, 50, 1, 2, '*', 2),
(446, 50, 11, 4, '*', 44),
(447, 50, 10, 4, '*', 40),
(448, 50, 11, 1, '*', 11),
(449, 50, 12, 2, '*', 24),
(450, 50, 6, 6, '*', 36),
(451, 51, 16, 54, '*', 864),
(452, 51, 30, 15, '*', 450),
(453, 51, 8, 28, '*', 224),
(454, 51, 48, 3, '*', 144),
(455, 51, 10, 19, '*', 190),
(456, 51, 1, 51, '*', 51),
(457, 51, 11, 22, '*', 242),
(458, 51, 39, 39, '*', 1521),
(459, 51, 14, 45, '*', 630),
(460, 51, 29, 17, '*', 493),
(461, 52, 210, 47, '-', 163),
(462, 52, 20, 41, '-', -21),
(463, 52, 227, 165, '+', 392),
(464, 52, 209, 46, '-', 163),
(465, 52, 123, 183, '+', 306),
(466, 52, 217, 18, '+', 235),
(467, 52, 196, 142, '+', 338),
(468, 52, 71, 33, '-', 38),
(469, 52, 73, 77, '-', -4),
(470, 52, 210, 124, '+', 334);

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

--
-- Dumping data for table `questions_set`
--

INSERT INTO `questions_set` (`q_id`, `q_create_at`, `q_create_by`, `q_detail`) VALUES
(48, '2022-07-03 14:34:00', 1, 'multi'),
(49, '2022-07-03 14:40:51', 1, 'all'),
(50, '2022-07-03 14:46:11', 1, 'multi'),
(51, '2022-07-03 15:07:53', 1, 'multi'),
(52, '2022-07-03 15:08:08', 1, 'basic');

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
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `email`, `password`, `name`) VALUES
(1, 'test@test.com', '$2y$10$TTp6NslTtFPU87yszl39F.dlqqqHtS84EK3l6p/8IPelegO7eYACW', 'test'),
(2, 'boon14872@gmail.com', '$2y$10$EEvj2N8z8re2fXJuPcHEDue3i8RqVjDgNvoLqKgdJQQb2HGctOeQW', 'registime'),
(3, 'boon13357@gmail.com', '$2y$10$VZ4LcPqJwYa.eW5WBdQDwO/3iyGELsTDExkqcVIhc5gdlZzJNoI5m', 'registime');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `questions_choice`
--
ALTER TABLE `questions_choice`
  MODIFY `qc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT for table `questions_detail`
--
ALTER TABLE `questions_detail`
  MODIFY `qd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=471;

--
-- AUTO_INCREMENT for table `questions_set`
--
ALTER TABLE `questions_set`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
