-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for task
DROP DATABASE IF EXISTS `task`;
CREATE DATABASE IF NOT EXISTS `task` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `task`;

-- Dumping structure for table task.activity_log
DROP TABLE IF EXISTS `activity_log`;
CREATE TABLE IF NOT EXISTS `activity_log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `activity` varchar(50) NOT NULL DEFAULT '',
  `table` varchar(50) NOT NULL DEFAULT '',
  `user_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=415 DEFAULT CHARSET=utf8;

-- Dumping data for table task.activity_log: ~414 rows (approximately)
/*!40000 ALTER TABLE `activity_log` DISABLE KEYS */;
INSERT INTO `activity_log` (`id`, `activity`, `table`, `user_id`) VALUES
	(0, 'add', 'user', 1),
	(2, 'display', 'user', 1),
	(3, 'add', 'user', 1),
	(4, 'display', 'user', 1),
	(5, 'display', 'module', 1),
	(6, 'display', 'module', 1),
	(7, 'login', 'user', 1),
	(8, 'display', 'module', 1),
	(9, 'display', 'user', 1),
	(10, 'display', 'module', 1),
	(11, 'display', 'role', 1),
	(12, 'add', 'role', 1),
	(13, 'display', 'role', 1),
	(14, 'display', 'user', 1),
	(15, 'add', 'user', 1),
	(16, 'display', 'user', 1),
	(17, 'login', 'user', 5),
	(18, 'display', 'user', 5),
	(19, 'display', 'role', 5),
	(20, 'display', 'module', 5),
	(21, 'display', 'user', 5),
	(22, 'add', 'user', 5),
	(23, 'login', 'user', 1),
	(24, 'display', 'user', 1),
	(25, 'delete', 'user', 1),
	(26, 'display', 'user', 1),
	(27, 'add', 'role', 1),
	(28, 'add', 'role', 1),
	(29, 'add', 'role', 1),
	(30, 'add', 'role', 1),
	(31, 'add', 'role', 1),
	(32, 'add', 'role', 1),
	(33, 'add', 'role', 1),
	(34, 'display', 'role', 1),
	(35, 'display', 'role', 1),
	(36, 'display', 'module', 1),
	(37, 'display', 'role', 1),
	(38, 'display', 'module', 1),
	(39, 'add', 'module', 1),
	(40, 'add', 'role', 1),
	(41, 'login', 'user', 1),
	(42, 'login', 'user', 1),
	(43, 'login', 'user', 1),
	(44, 'login', 'user', 1),
	(45, 'login', 'user', 1),
	(46, 'login', 'user', 1),
	(47, 'login', 'user', 1),
	(48, 'display', 'user', 1),
	(49, 'display', 'user', 1),
	(50, 'login', 'user', 1),
	(51, 'login', 'user', 1),
	(52, 'display', 'user', 1),
	(53, 'display', 'role', 1),
	(54, 'display', 'role', 1),
	(55, 'display', 'role', 1),
	(56, 'display', 'module', 1),
	(57, 'display', 'user', 1),
	(58, 'display', 'user', 1),
	(59, 'display', 'user', 1),
	(60, 'display', 'role', 1),
	(61, 'display', 'role', 1),
	(62, 'display', 'role', 1),
	(63, 'display', 'role', 1),
	(64, 'display', 'role', 1),
	(65, 'display', 'role', 1),
	(66, 'display', 'user', 1),
	(67, 'display', 'role', 1),
	(68, 'display', 'module', 1),
	(69, 'display', 'module', 1),
	(70, 'login', 'user', 1),
	(71, 'display', 'user', 1),
	(72, 'display', 'role', 1),
	(73, 'display', 'module', 1),
	(74, 'display', 'user', 1),
	(75, 'login', 'user', 1),
	(76, 'login', 'user', 1),
	(77, 'login', 'user', 1),
	(78, 'login', 'user', 1),
	(79, 'login', 'user', 1),
	(80, 'login', 'user', 1),
	(81, 'login', 'user', 1),
	(82, 'login', 'user', 1),
	(83, 'login', 'user', 1),
	(84, 'display', 'user', 1),
	(85, 'display', 'role', 1),
	(86, 'display', 'module', 1),
	(87, 'display', 'role', 1),
	(88, 'display', 'user', 1),
	(89, 'login', 'user', 4),
	(90, 'login', 'user', 4),
	(91, 'login', 'user', 4),
	(92, 'login', 'user', 4),
	(93, 'login', 'user', 4),
	(94, 'login', 'user', 4),
	(95, 'login', 'user', 4),
	(96, 'login', 'user', 4),
	(97, 'login', 'user', 4),
	(98, 'login', 'user', 4),
	(99, 'login', 'user', 4),
	(100, 'login', 'user', 4),
	(101, 'login', 'user', 4),
	(102, 'login', 'user', 4),
	(103, 'login', 'user', 4),
	(104, 'login', 'user', 4),
	(105, 'login', 'user', 4),
	(106, 'login', 'user', 4),
	(107, 'login', 'user', 4),
	(108, 'login', 'user', 1),
	(109, 'display', 'user', 1),
	(110, 'display', 'role', 1),
	(111, 'display', 'module', 1),
	(112, 'login', 'user', 4),
	(113, 'login', 'user', 1),
	(114, 'login', 'user', 1),
	(115, 'login', 'user', 1),
	(116, 'login', 'user', 1),
	(117, 'login', 'user', 1),
	(118, 'login', 'user', 1),
	(119, 'login', 'user', 1),
	(120, 'login', 'user', 1),
	(121, 'login', 'user', 1),
	(122, 'login', 'user', 1),
	(123, 'login', 'user', 1),
	(124, 'login', 'user', 1),
	(125, 'login', 'user', 1),
	(126, 'login', 'user', 1),
	(127, 'login', 'user', 1),
	(128, 'login', 'user', 1),
	(129, 'display', 'user', 1),
	(130, 'display', 'user', 1),
	(131, 'display', 'role', 1),
	(132, 'display', 'module', 1),
	(133, 'display', 'module', 1),
	(134, 'display', 'module', 1),
	(135, 'display', 'module', 1),
	(136, 'display', 'module', 1),
	(137, 'display', 'user', 1),
	(138, 'display', 'role', 1),
	(139, 'display', 'module', 1),
	(140, 'login', 'user', 4),
	(141, 'login', 'user', 1),
	(142, 'display', 'module', 1),
	(143, 'add', 'module', 1),
	(144, 'display', 'module', 1),
	(145, 'display', 'role', 1),
	(146, 'display', 'user', 1),
	(147, 'display', 'role', 1),
	(148, 'add', 'role', 1),
	(149, 'display', 'role', 1),
	(150, 'display', 'role', 1),
	(151, 'update', 'role', 1),
	(152, 'display', 'role', 1),
	(153, 'display', 'role', 1),
	(154, 'update', 'role', 1),
	(155, 'display', 'role', 1),
	(156, 'update', 'role', 1),
	(157, 'display', 'role', 1),
	(158, 'update', 'role', 1),
	(159, 'display', 'role', 1),
	(160, 'display', 'role', 1),
	(161, 'update', 'role', 1),
	(162, 'display', 'role', 1),
	(163, 'update', 'role', 1),
	(164, 'display', 'role', 1),
	(165, 'update', 'role', 1),
	(166, 'update', 'role', 1),
	(167, 'update', 'role', 1),
	(168, 'update', 'role', 1),
	(169, 'update', 'role', 1),
	(170, 'display', 'role', 1),
	(171, 'display', 'role', 1),
	(172, 'update', 'role', 1),
	(173, 'display', 'role', 1),
	(174, 'display', 'role', 1),
	(175, 'login', 'user', 1),
	(176, 'display', 'role', 1),
	(177, 'display', 'role', 1),
	(178, 'display', 'role', 1),
	(179, 'display', 'role', 1),
	(180, 'update', 'role', 1),
	(181, 'login', 'user', 1),
	(182, 'login', 'user', 1),
	(183, 'login', 'user', 1),
	(184, 'display', 'user', 1),
	(185, 'display', 'user', 1),
	(186, 'display', 'user', 1),
	(187, 'display', 'role', 1),
	(188, 'add', 'role', 1),
	(189, 'display', 'role', 1),
	(190, 'display', 'role', 1),
	(191, 'display', 'module', 1),
	(192, 'add', 'module', 1),
	(193, 'add', 'module', 1),
	(194, 'add', 'module', 1),
	(195, 'display', 'module', 1),
	(196, 'display', 'user', 1),
	(197, 'display', 'user', 1),
	(198, 'login', 'user', 4),
	(199, 'display', 'role', 4),
	(200, 'display', 'module', 4),
	(201, 'add', 'module', 4),
	(202, 'login', 'user', 1),
	(203, 'login', 'user', 1),
	(204, 'login', 'user', 1),
	(205, 'display', 'user', 1),
	(206, 'login', 'user', 4),
	(207, 'display', 'role', 4),
	(208, 'display', 'module', 4),
	(209, 'display', 'role', 4),
	(210, 'display', 'role', 4),
	(211, 'display', 'role', 4),
	(212, 'display', 'role', 4),
	(213, 'display', 'role', 4),
	(214, 'display', 'role', 4),
	(215, 'display', 'role', 4),
	(216, 'login', 'user', 1),
	(217, 'display', 'role', 1),
	(218, 'delete', 'role', 1),
	(219, 'display', 'role', 1),
	(220, 'display', 'role', 1),
	(221, 'display', 'user', 1),
	(222, 'display', 'role', 1),
	(223, 'display', 'role', 1),
	(224, 'display', 'module', 1),
	(225, 'display', 'user', 1),
	(226, 'display', 'module', 1),
	(227, 'add', 'module', 1),
	(228, 'display', 'module', 1),
	(229, 'display', 'role', 1),
	(230, 'display', 'module', 1),
	(231, 'display', 'role', 1),
	(232, 'display', 'module', 1),
	(233, 'update', 'module', 1),
	(234, 'display', 'module', 1),
	(235, 'display', 'role', 1),
	(236, 'update', 'role', 1),
	(237, 'display', 'role', 1),
	(238, 'display', 'role', 1),
	(239, 'login', 'user', 1),
	(240, 'add', 'role', 1),
	(241, 'update', 'role', 1),
	(242, 'update', 'role', 1),
	(243, 'login', 'user', 1),
	(244, 'display', 'role', 1),
	(245, 'display', 'user', 1),
	(246, 'display', 'module', 1),
	(247, 'display', 'role', 1),
	(248, 'update', 'role', 1),
	(249, 'update', 'role', 1),
	(250, 'display', 'role', 1),
	(251, 'display', 'role', 1),
	(252, 'update', 'role', 1),
	(253, 'display', 'role', 1),
	(254, 'display', 'role', 1),
	(255, 'login', 'user', 1),
	(256, 'add', 'role', 1),
	(257, 'add', 'role', 1),
	(258, 'add', 'role', 1),
	(259, 'add', 'role', 1),
	(260, 'add', 'role', 1),
	(261, 'add', 'role', 1),
	(262, 'add', 'role', 1),
	(263, 'add', 'role', 1),
	(264, 'add', 'role', 1),
	(265, 'add', 'role', 1),
	(266, 'add', 'role', 1),
	(267, 'add', 'role', 1),
	(268, 'add', 'role', 1),
	(269, 'add', 'role', 1),
	(270, 'add', 'role', 1),
	(271, 'add', 'role', 1),
	(272, 'display', 'module', 1),
	(273, 'update', 'module', 1),
	(274, 'display', 'module', 1),
	(275, 'update', 'module', 1),
	(276, 'display', 'module', 1),
	(277, 'update', 'module', 1),
	(278, 'display', 'module', 1),
	(279, 'display', 'role', 1),
	(280, 'login', 'user', 1),
	(281, 'display', 'role', 1),
	(282, 'display', 'role', 1),
	(283, 'add', 'role', 1),
	(284, 'add', 'role', 1),
	(285, 'display', 'module', 1),
	(286, 'display', 'role', 1),
	(287, 'display', 'module', 1),
	(288, 'add', 'module', 1),
	(289, 'login', 'user', 1),
	(290, 'display', 'module', 1),
	(291, 'add', 'module', 1),
	(292, 'login', 'user', 1),
	(293, 'display', 'role', 1),
	(294, 'display', 'module', 1),
	(295, 'add', 'module', 1),
	(296, 'display', 'module', 1),
	(297, 'display', 'role', 1),
	(298, 'update', 'role', 1),
	(299, 'display', 'role', 1),
	(300, 'update', 'role', 1),
	(301, 'display', 'role', 1),
	(302, 'display', 'role', 1),
	(303, 'display', 'role', 1),
	(304, 'display', 'user', 1),
	(305, 'display', 'user', 1),
	(306, 'display', 'user', 1),
	(307, 'display', 'role', 1),
	(308, 'display', 'module', 1),
	(309, 'display', 'role', 1),
	(310, 'update', 'role', 1),
	(311, 'display', 'role', 1),
	(312, 'display', 'role', 1),
	(313, 'display', 'role', 1),
	(314, 'display', 'role', 1),
	(315, 'login', 'user', 1),
	(316, 'login', 'user', 1),
	(317, 'login', 'user', 1),
	(318, 'display', 'module', 1),
	(319, 'delete', 'module', 1),
	(320, 'display', 'module', 1),
	(321, 'display', 'module', 1),
	(322, 'display', 'module', 1),
	(323, 'display', 'module', 1),
	(324, 'display', 'module', 1),
	(325, 'delete', 'module', 1),
	(326, 'display', 'module', 1),
	(327, 'display', 'module', 1),
	(328, 'add', 'module', 1),
	(329, 'add', 'module', 1),
	(330, 'display', 'module', 1),
	(331, 'add', 'module', 1),
	(332, 'display', 'module', 1),
	(333, 'display', 'role', 1),
	(334, 'update', 'role', 1),
	(335, 'display', 'role', 1),
	(336, 'display', 'user', 1),
	(337, 'display', 'role', 1),
	(338, 'display', 'module', 1),
	(339, 'display', 'role', 1),
	(340, 'display', 'role', 1),
	(341, 'display', 'role', 1),
	(342, 'display', 'user', 1),
	(343, 'display', 'user', 1),
	(344, 'display', 'user', 1),
	(345, 'display', 'user', 1),
	(346, 'display', 'role', 1),
	(347, 'display', 'module', 1),
	(348, 'display', 'user', 1),
	(349, 'display', 'user', 1),
	(350, 'display', 'role', 1),
	(351, 'add', 'role', 1),
	(352, 'display', 'role', 1),
	(353, 'display', 'user', 1),
	(354, 'display', 'user', 1),
	(355, 'login', 'user', 2),
	(356, 'display', 'user', 2),
	(357, 'display', 'role', 2),
	(358, 'display', 'module', 2),
	(359, 'display', 'user', 2),
	(360, 'login', 'user', 1),
	(361, 'display', 'role', 1),
	(362, 'login', 'user', 1),
	(363, 'display', 'role', 1),
	(364, 'login', 'user', 2),
	(365, 'display', 'role', 2),
	(366, 'display', 'role', 2),
	(367, 'display', 'role', 2),
	(368, 'display', 'role', 2),
	(369, 'display', 'role', 2),
	(370, 'display', 'role', 2),
	(371, 'login', 'user', 1),
	(372, 'update', 'role', 1),
	(373, 'display', 'role', 1),
	(374, 'display', 'role', 1),
	(375, 'display', 'role', 1),
	(376, 'display', 'role', 1),
	(377, 'display', 'role', 1),
	(378, 'display', 'role', 1),
	(379, 'display', 'role', 1),
	(380, 'display', 'role', 1),
	(381, 'display', 'role', 1),
	(382, 'display', 'role', 1),
	(383, 'add', 'role', 1),
	(384, 'add', 'role', 1),
	(385, 'add', 'role', 1),
	(386, 'display', 'role', 1),
	(387, 'display', 'user', 1),
	(388, 'display', 'role', 1),
	(389, 'update', 'role', 1),
	(390, 'display', 'role', 1),
	(391, 'update', 'role', 1),
	(392, 'display', 'role', 1),
	(393, 'display', 'user', 1),
	(394, 'display', 'role', 1),
	(395, 'display', 'role', 1),
	(396, 'update', 'role', 1),
	(397, 'display', 'role', 1),
	(398, 'display', 'role', 1),
	(399, 'display', 'role', 1),
	(400, 'display', 'role', 1),
	(401, 'update', 'role', 1),
	(402, 'display', 'role', 1),
	(403, 'update', 'role', 1),
	(404, 'display', 'role', 1),
	(405, 'update', 'role', 1),
	(406, 'display', 'role', 1),
	(407, 'login', 'user', 2),
	(408, 'display', 'role', 2),
	(409, 'update', 'role', 2),
	(410, 'display', 'role', 2),
	(411, 'login', 'user', 1),
	(412, 'display', 'role', 1),
	(413, 'login', 'user', 1),
	(414, 'display', 'role', 1);
/*!40000 ALTER TABLE `activity_log` ENABLE KEYS */;

-- Dumping structure for table task.failed_jobs
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table task.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table task.migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table task.migrations: ~8 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(21, '2014_10_12_000000_create_users_table', 1),
	(22, '2014_10_12_100000_create_password_resets_table', 1),
	(23, '2019_08_19_000000_create_failed_jobs_table', 1),
	(24, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(25, '2022_03_10_084132_create_roles_table', 1),
	(26, '2022_03_10_103534_create_modules_table', 2),
	(27, '2022_03_11_063828_create_roles_modules_table', 3),
	(28, '2022_03_11_081527_create_roles_modules_table', 4),
	(29, '2022_03_11_102047_create_roles_modules_table', 5);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table task.modules
DROP TABLE IF EXISTS `modules`;
CREATE TABLE IF NOT EXISTS `modules` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `actions` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table task.modules: ~4 rows (approximately)
/*!40000 ALTER TABLE `modules` DISABLE KEYS */;
INSERT INTO `modules` (`id`, `name`, `route`, `actions`, `created_at`, `updated_at`) VALUES
	(1, 'User', 'user', 'add|view|edit|delete', '2022-03-11 06:11:08', '2022-03-15 14:03:18'),
	(2, 'Role', 'role', 'add|view|edit|delete', '2022-03-11 06:11:24', '2022-03-15 14:03:26'),
	(3, 'Module', 'module', 'add|view|edit|delete', '2022-03-11 06:33:35', '2022-03-15 14:03:37'),
	(8, 'Events', 'event', 'add|view|edit|delete|import|export', '2022-03-16 06:24:12', '2022-03-16 06:24:12');
/*!40000 ALTER TABLE `modules` ENABLE KEYS */;

-- Dumping structure for table task.password_resets
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table task.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table task.personal_access_tokens
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table task.personal_access_tokens: ~0 rows (approximately)
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Dumping structure for table task.roles
DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table task.roles: ~2 rows (approximately)
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`id`, `type`, `created_at`, `updated_at`) VALUES
	(1, 'super-admin', NULL, NULL),
	(2, 'site', '2022-03-16 07:20:03', '2022-03-16 07:20:03');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Dumping structure for table task.roles_modules
DROP TABLE IF EXISTS `roles_modules`;
CREATE TABLE IF NOT EXISTS `roles_modules` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `module_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `module_permission` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_modules_role_id_unique` (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table task.roles_modules: ~1 rows (approximately)
/*!40000 ALTER TABLE `roles_modules` DISABLE KEYS */;
INSERT INTO `roles_modules` (`id`, `role_id`, `module_id`, `module_permission`, `created_at`, `updated_at`) VALUES
	(1, 1, '1,2,3', '{"1":["add","view","edit","delete"],"2":["add","view","edit","delete"],"3":["add","view","edit","delete"]}', '2022-03-14 08:35:58', '2022-03-21 09:40:09'),
	(2, 2, '1,2,3,8', '{"1":["add","view","edit","delete"],"2":["add","view","edit","delete"],"3":["add","view","edit","delete"],"8":["add","view","edit","delete","import","export"]}', '2022-03-16 07:20:03', '2022-03-21 09:39:22');
/*!40000 ALTER TABLE `roles_modules` ENABLE KEYS */;

-- Dumping structure for table task.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table task.users: ~2 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `role_id`, `username`, `first_name`, `last_name`, `email`, `address`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 1, 'naufilkhan', NULL, NULL, NULL, NULL, NULL, 'asdf', NULL, NULL, NULL),
	(2, 2, 'siteone', 'site', 'one', 'siteone@gmail.com', 'karachi', NULL, 'asdf', NULL, '2022-03-16 07:20:51', '2022-03-16 07:20:51');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
