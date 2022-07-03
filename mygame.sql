-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2022 at 02:32 PM
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
  `uid` varchar(50) NOT NULL
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

--
-- Dumping data for table `questions_choice`
--

INSERT INTO `questions_choice` (`qc_id`, `qd_id`, `qc_number`) VALUES
(1, 1, 841),
(2, 1, 731),
(3, 1, 824),
(4, 1, 744),
(5, 2, 42),
(6, 2, 17),
(7, 2, -56),
(8, 2, 109),
(9, 3, 76),
(10, 3, 101),
(11, 3, 150),
(12, 3, 128),
(13, 4, 459),
(14, 4, 448),
(15, 4, 518),
(16, 4, 351),
(17, 5, 79),
(18, 5, 26),
(19, 5, -52),
(20, 5, 81),
(21, 6, 107),
(22, 6, -63),
(23, 6, 4),
(24, 6, 33),
(25, 7, 148),
(26, 7, 50),
(27, 7, -45),
(28, 7, 72),
(29, 8, 172),
(30, 8, 167),
(31, 8, 169),
(32, 8, 134),
(33, 9, 48),
(34, 9, 132),
(35, 9, 122),
(36, 9, 80),
(37, 10, 51),
(38, 10, 113),
(39, 10, 56),
(40, 10, 82),
(41, 11, 928),
(42, 11, 1014),
(43, 11, 981),
(44, 11, 954),
(45, 12, -171),
(46, 12, -64),
(47, 12, -153),
(48, 12, -174),
(49, 13, -264),
(50, 13, -346),
(51, 13, -202),
(52, 13, -278),
(53, 14, 24180),
(54, 14, 24129),
(55, 14, 24157),
(56, 14, 24152),
(57, 15, 140),
(58, 15, 170),
(59, 15, 88),
(60, 15, 68),
(61, 16, 491),
(62, 16, 672),
(63, 16, 639),
(64, 16, 577),
(65, 17, 18),
(66, 17, 81),
(67, 17, 141),
(68, 17, 40),
(69, 18, 127862),
(70, 18, 127830),
(71, 18, 127800),
(72, 18, 127747),
(73, 19, 64588),
(74, 19, 64538),
(75, 19, 64574),
(76, 19, 64577),
(77, 20, 1110),
(78, 20, 1206),
(79, 20, 1245),
(80, 20, 1149),
(81, 21, 2363),
(82, 21, 2420),
(83, 21, 2449),
(84, 21, 2390),
(85, 22, 1304),
(86, 22, 1249),
(87, 22, 1342),
(88, 22, 1317),
(89, 23, 194),
(90, 23, 186),
(91, 23, 122),
(92, 23, 79),
(93, 24, 36278),
(94, 24, 36371),
(95, 24, 36200),
(96, 24, 36341),
(97, 25, 953),
(98, 25, 1017),
(99, 25, 933),
(100, 25, 1014),
(101, 26, -139),
(102, 26, 13),
(103, 26, -66),
(104, 26, -138),
(105, 27, 45),
(106, 27, 69),
(107, 27, 64),
(108, 27, 116),
(109, 28, 161),
(110, 28, 105),
(111, 28, 104),
(112, 28, 244),
(113, 29, 159833),
(114, 29, 159760),
(115, 29, 159942),
(116, 29, 159854),
(117, 30, 173),
(118, 30, 22),
(119, 30, 48),
(120, 30, 103),
(121, 31, 1559),
(122, 31, 1598),
(123, 31, 1622),
(124, 31, 1677),
(125, 32, 2250),
(126, 32, 2214),
(127, 32, 2268),
(128, 32, 2335),
(129, 33, 584),
(130, 33, 572),
(131, 33, 613),
(132, 33, 612),
(133, 34, 331),
(134, 34, 341),
(135, 34, 257),
(136, 34, 241),
(137, 35, 17257),
(138, 35, 17188),
(139, 35, 17286),
(140, 35, 17319),
(141, 36, 26),
(142, 36, 48),
(143, 36, 60),
(144, 36, 103),
(145, 37, 159),
(146, 37, 239),
(147, 37, 289),
(148, 37, 197),
(149, 38, 1049),
(150, 38, 1030),
(151, 38, 972),
(152, 38, 970),
(153, 39, 26),
(154, 39, -54),
(155, 39, 123),
(156, 39, 38),
(157, 40, 3792),
(158, 40, 3920),
(159, 40, 3864),
(160, 40, 3874),
(161, 41, 650),
(162, 41, 686),
(163, 41, 769),
(164, 41, 723),
(165, 42, 674),
(166, 42, 578),
(167, 42, 676),
(168, 42, 559),
(169, 43, 97),
(170, 43, 118),
(171, 43, 70),
(172, 43, 84),
(173, 44, 233),
(174, 44, 303),
(175, 44, 324),
(176, 44, 321),
(177, 45, 1460),
(178, 45, 1553),
(179, 45, 1523),
(180, 45, 1557),
(181, 46, 1447),
(182, 46, 1351),
(183, 46, 1405),
(184, 46, 1440),
(185, 47, 2360),
(186, 47, 2274),
(187, 47, 2185),
(188, 47, 2244),
(189, 48, 176),
(190, 48, 62),
(191, 48, 144),
(192, 48, 80),
(193, 49, 480),
(194, 49, 503),
(195, 49, 403),
(196, 49, 470),
(197, 50, 1535),
(198, 50, 1381),
(199, 50, 1418),
(200, 50, 1439),
(201, 51, 5566),
(202, 51, 5553),
(203, 51, 5707),
(204, 51, 5625),
(205, 52, 651),
(206, 52, 668),
(207, 52, 607),
(208, 52, 701),
(209, 53, 23310),
(210, 53, 23437),
(211, 53, 23356),
(212, 53, 23384),
(213, 54, 223),
(214, 54, 140),
(215, 54, 195),
(216, 54, 282),
(217, 55, 646),
(218, 55, 587),
(219, 55, 509),
(220, 55, 496),
(221, 56, 19),
(222, 56, 34),
(223, 56, 141),
(224, 56, 67),
(225, 57, 5325),
(226, 57, 5306),
(227, 57, 5292),
(228, 57, 5208),
(229, 58, 153),
(230, 58, 238),
(231, 58, 136),
(232, 58, 209),
(233, 59, 95),
(234, 59, 157),
(235, 59, 76),
(236, 59, 193),
(237, 60, 21),
(238, 60, -12),
(239, 60, 44),
(240, 60, 35),
(241, 61, 1285),
(242, 61, 1364),
(243, 61, 1338),
(244, 61, 1399),
(245, 62, 1503),
(246, 62, 1533),
(247, 62, 1407),
(248, 62, 1438),
(249, 63, 1322),
(250, 63, 1312),
(251, 63, 1347),
(252, 63, 1254),
(253, 64, 614),
(254, 64, 645),
(255, 64, 538),
(256, 64, 528),
(257, 65, 646),
(258, 65, 614),
(259, 65, 595),
(260, 65, 627),
(261, 66, 1792),
(262, 66, 1836),
(263, 66, 1857),
(264, 66, 1844),
(265, 67, 22),
(266, 67, -47),
(267, 67, -62),
(268, 67, 100),
(269, 68, 100),
(270, 68, 77),
(271, 68, 59),
(272, 68, 127),
(273, 69, 181),
(274, 69, 157),
(275, 69, 197),
(276, 69, 132),
(277, 70, 106),
(278, 70, 61),
(279, 70, 92),
(280, 70, 83),
(281, 71, 8955),
(282, 71, 8837),
(283, 71, 8829),
(284, 71, 8855),
(285, 72, 1725),
(286, 72, 1609),
(287, 72, 1628),
(288, 72, 1727),
(289, 73, 947),
(290, 73, 979),
(291, 73, 940),
(292, 73, 896),
(293, 74, 118),
(294, 74, 49),
(295, 74, 29),
(296, 74, 34),
(297, 75, 386),
(298, 75, 489),
(299, 75, 508),
(300, 75, 409),
(301, 76, 1265),
(302, 76, 1174),
(303, 76, 1290),
(304, 76, 1332),
(305, 77, 373),
(306, 77, 236),
(307, 77, 307),
(308, 77, 296),
(309, 78, 120705),
(310, 78, 120815),
(311, 78, 120781),
(312, 78, 120744),
(313, 79, 1913),
(314, 79, 1929),
(315, 79, 1962),
(316, 79, 1939),
(317, 80, 334),
(318, 80, 344),
(319, 80, 188),
(320, 80, 257),
(321, 81, 234),
(322, 81, 146),
(323, 81, 296),
(324, 81, 170),
(325, 82, -24),
(326, 82, 23),
(327, 82, 103),
(328, 82, 46),
(329, 83, 1188),
(330, 83, 1234),
(331, 83, 1224),
(332, 83, 1186),
(333, 84, 1742),
(334, 84, 1850),
(335, 84, 1802),
(336, 84, 1778),
(337, 85, 1804),
(338, 85, 1848),
(339, 85, 1757),
(340, 85, 1792),
(341, 86, 142870),
(342, 86, 142786),
(343, 86, 142843),
(344, 86, 142832),
(345, 87, 1006),
(346, 87, 1074),
(347, 87, 1136),
(348, 87, 1058),
(349, 88, 975),
(350, 88, 899),
(351, 88, 886),
(352, 88, 788),
(353, 89, 1310),
(354, 89, 1259),
(355, 89, 1166),
(356, 89, 1246),
(357, 90, 2085),
(358, 90, 1992),
(359, 90, 2077),
(360, 90, 1928),
(361, 91, 268),
(362, 91, 236),
(363, 91, 154),
(364, 91, 215),
(365, 92, 161),
(366, 92, 193),
(367, 92, 238),
(368, 92, 83),
(369, 93, -11),
(370, 93, -6),
(371, 93, 26),
(372, 93, 16),
(373, 94, 300),
(374, 94, 203),
(375, 94, 233),
(376, 94, 141),
(377, 95, -121),
(378, 95, -171),
(379, 95, -58),
(380, 95, -87),
(381, 96, 130),
(382, 96, 228),
(383, 96, 42),
(384, 96, 64),
(385, 97, 304),
(386, 97, 319),
(387, 97, 289),
(388, 97, 208),
(389, 98, 327),
(390, 98, 368),
(391, 98, 416),
(392, 98, 427),
(393, 99, 242),
(394, 99, 363),
(395, 99, 270),
(396, 99, 238),
(397, 100, 1133),
(398, 100, 1185),
(399, 100, 1285),
(400, 100, 1216),
(401, 101, 22588),
(402, 101, 22680),
(403, 101, 22662),
(404, 101, 22643),
(405, 102, 806),
(406, 102, 896),
(407, 102, 912),
(408, 102, 838),
(409, 103, 916),
(410, 103, 790),
(411, 103, 780),
(412, 103, 826),
(413, 104, 159),
(414, 104, 39),
(415, 104, 84),
(416, 104, 138),
(417, 105, 110),
(418, 105, 268),
(419, 105, 136),
(420, 105, 193),
(421, 106, 11264),
(422, 106, 11352),
(423, 106, 11312),
(424, 106, 11320),
(425, 107, 30607),
(426, 107, 30641),
(427, 107, 30654),
(428, 107, 30637),
(429, 108, 10566),
(430, 108, 10660),
(431, 108, 10603),
(432, 108, 10744),
(433, 109, 797),
(434, 109, 811),
(435, 109, 792),
(436, 109, 874),
(437, 110, -44),
(438, 110, -58),
(439, 110, 17),
(440, 110, -27);

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
(1, 6, 24, 31, '*', 744),
(2, 6, 55, 38, '-', 17),
(3, 6, 181, 53, '-', 128),
(4, 6, 8, 56, '*', 448),
(5, 6, 24, 2, '+', 26),
(6, 6, 99, 66, '-', 33),
(7, 6, 302, 6, '/', 50),
(8, 6, 165, 31, '-', 134),
(9, 6, 491, 4, '/', 122),
(10, 6, 59, 23, '+', 82),
(11, 7, 1171, 243, '-', 928),
(12, 7, 177, 330, '-', -153),
(13, 7, 211, 489, '-', -278),
(14, 7, 78, 310, '*', 24180),
(15, 7, 2479, 28, '/', 88),
(16, 7, 327, 250, '+', 577),
(17, 7, 3166, 39, '/', 81),
(18, 7, 300, 426, '*', 127800),
(19, 7, 241, 268, '*', 64588),
(20, 7, 1270, 64, '-', 1206),
(21, 8, 1180, 1183, '+', 2363),
(22, 8, 1423, 106, '-', 1317),
(23, 8, 3801, 31, '/', 122),
(24, 8, 187, 194, '*', 36278),
(25, 8, 1234, 281, '-', 953),
(26, 8, 481, 547, '-', -66),
(27, 8, 2801, 24, '/', 116),
(28, 8, 1776, 11, '/', 161),
(29, 8, 514, 311, '*', 159854),
(30, 8, 3314, 32, '/', 103),
(31, 9, 937, 685, '+', 1622),
(32, 9, 1030, 1220, '+', 2250),
(33, 9, 2338, 4, '/', 584),
(34, 9, 602, 361, '-', 241),
(35, 9, 129, 134, '*', 17286),
(36, 9, 1083, 18, '/', 60),
(37, 9, 323, 126, '-', 197),
(38, 9, 34, 996, '+', 1030),
(39, 9, 587, 22, '/', 26),
(40, 9, 168, 23, '*', 3864),
(41, 10, 811, 125, '-', 686),
(42, 10, 722, 144, '-', 578),
(43, 10, 2181, 31, '/', 70),
(44, 10, 1212, 4, '/', 303),
(45, 10, 750, 710, '+', 1460),
(46, 10, 292, 1113, '+', 1405),
(47, 10, 1170, 1104, '+', 2274),
(48, 10, 1449, 10, '/', 144),
(49, 10, 308, 195, '+', 503),
(50, 10, 4317, 3, '/', 1439),
(51, 11, 75, 75, '*', 5625),
(52, 11, 865, 258, '-', 607),
(53, 11, 148, 158, '*', 23384),
(54, 11, 2737, 14, '/', 195),
(55, 11, 692, 105, '-', 587),
(56, 11, 153, 86, '-', 67),
(57, 11, 108, 49, '*', 5292),
(58, 11, 445, 236, '-', 209),
(59, 11, 1526, 16, '/', 95),
(60, 11, 521, 24, '/', 21),
(61, 12, 209, 1129, '+', 1338),
(62, 12, 722, 781, '+', 1503),
(63, 12, 1225, 122, '+', 1347),
(64, 12, 679, 65, '-', 614),
(65, 12, 89, 538, '+', 627),
(66, 12, 256, 7, '*', 1792),
(67, 12, 799, 35, '/', 22),
(68, 12, 3343, 43, '/', 77),
(69, 12, 386, 254, '-', 132),
(70, 12, 1163, 19, '/', 61),
(71, 13, 253, 35, '*', 8855),
(72, 13, 278, 1350, '+', 1628),
(73, 13, 4899, 5, '/', 979),
(74, 13, 5090, 43, '/', 118),
(75, 13, 696, 287, '-', 409),
(76, 13, 499, 766, '+', 1265),
(77, 13, 529, 222, '-', 307),
(78, 13, 559, 216, '*', 120744),
(79, 13, 715, 1198, '+', 1913),
(80, 13, 478, 221, '-', 257),
(81, 14, 356, 122, '-', 234),
(82, 14, 1152, 50, '/', 23),
(83, 14, 1469, 235, '-', 1234),
(84, 14, 881, 921, '+', 1802),
(85, 14, 1183, 665, '+', 1848),
(86, 14, 314, 455, '*', 142870),
(87, 14, 1206, 132, '-', 1074),
(88, 14, 1176, 290, '-', 886),
(89, 14, 1439, 180, '-', 1259),
(90, 14, 981, 1011, '+', 1992),
(91, 15, 1180, 5, '/', 236),
(92, 15, 297, 136, '-', 161),
(93, 15, 181, 11, '/', 16),
(94, 15, 205, 28, '+', 233),
(95, 15, 28, 149, '-', -121),
(96, 15, 782, 6, '/', 130),
(97, 15, 198, 91, '+', 289),
(98, 15, 59, 309, '+', 368),
(99, 15, 1350, 5, '/', 270),
(100, 15, 64, 19, '*', 1216),
(101, 16, 189, 120, '*', 22680),
(102, 16, 420, 476, '+', 896),
(103, 16, 515, 311, '+', 826),
(104, 16, 4, 21, '*', 84),
(105, 16, 580, 3, '/', 193),
(106, 16, 128, 88, '*', 11264),
(107, 16, 234, 131, '*', 30654),
(108, 16, 52, 205, '*', 10660),
(109, 16, 388, 423, '+', 811),
(110, 16, 160, 9, '/', 17);

-- --------------------------------------------------------

--
-- Table structure for table `questions_set`
--

CREATE TABLE `questions_set` (
  `q_id` int(11) NOT NULL,
  `q_create_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `q_create_by` varchar(10) NOT NULL,
  `q_detail` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions_set`
--

INSERT INTO `questions_set` (`q_id`, `q_create_at`, `q_create_by`, `q_detail`) VALUES
(6, '2022-07-02 08:50:06', '1', 'all'),
(7, '2022-07-02 08:50:48', '1', 'all'),
(8, '2022-07-02 09:05:54', '1', 'all'),
(9, '2022-07-02 09:07:40', '1', 'all'),
(10, '2022-07-02 09:07:43', '1', 'all'),
(11, '2022-07-02 09:08:28', '1', 'all'),
(12, '2022-07-02 09:08:42', '1', 'all'),
(13, '2022-07-02 09:08:56', '1', 'all'),
(14, '2022-07-02 09:09:53', '1', 'all'),
(15, '2022-07-02 09:10:15', '1', 'all'),
(16, '2022-07-02 09:10:23', '1', 'all');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
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
-- Indexes for table `questions_choice`
--
ALTER TABLE `questions_choice`
  ADD PRIMARY KEY (`qc_id`),
  ADD KEY `question` (`qd_id`);

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
  ADD PRIMARY KEY (`q_id`);

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
-- AUTO_INCREMENT for table `questions_choice`
--
ALTER TABLE `questions_choice`
  MODIFY `qc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=441;

--
-- AUTO_INCREMENT for table `questions_detail`
--
ALTER TABLE `questions_detail`
  MODIFY `qd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `questions_set`
--
ALTER TABLE `questions_set`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
  ADD CONSTRAINT `question` FOREIGN KEY (`qd_id`) REFERENCES `questions_detail` (`qd_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `questions_detail`
--
ALTER TABLE `questions_detail`
  ADD CONSTRAINT `set` FOREIGN KEY (`qs_id`) REFERENCES `questions_set` (`q_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;