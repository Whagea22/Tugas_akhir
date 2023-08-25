-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2023 at 07:37 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sensorkolam`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_sensor`
--

CREATE TABLE `data_sensor` (
  `id` int(50) NOT NULL,
  `suhu_air` double NOT NULL,
  `ph_air` double NOT NULL,
  `status` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `status_ph` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_sensor`
--

INSERT INTO `data_sensor` (`id`, `suhu_air`, `ph_air`, `status`, `time`, `status_ph`, `created_at`, `updated_at`) VALUES
(945, 26.13, 6, 'Suhu Normal', '01:41:15', 'Asam', '2023-08-11 11:41:15', '2023-08-11 18:41:16'),
(946, 26.13, 0, 'Suhu Normal', '01:42:50', 'Asam', '2023-08-11 11:42:50', '2023-08-11 18:42:50'),
(947, 26.13, 0, 'Suhu Normal', '01:43:54', 'Asam', '2023-08-11 11:43:54', '2023-08-11 18:43:54'),
(948, 26.06, 10, 'Suhu Normal', '01:44:58', 'Basa', '2023-08-11 11:44:58', '2023-08-11 18:44:58'),
(949, 26, 0, 'Suhu Normal', '01:46:04', 'Asam', '2023-08-11 11:46:04', '2023-08-11 18:46:04'),
(950, 25.81, 1, 'Suhu Normal', '01:47:59', 'Asam', '2023-08-11 11:47:59', '2023-08-11 18:47:59'),
(951, 16.63, 12, 'Suhu Terlalu Dingin', '01:49:04', 'Basa', '2023-08-11 11:49:04', '2023-08-11 18:49:04'),
(952, 5.5, 7, 'Suhu Terlalu Dingin', '01:50:09', 'Normal', '2023-08-11 11:50:09', '2023-08-11 18:50:09'),
(953, 5.06, 4, 'Suhu Terlalu Dingin', '01:51:15', 'Asam', '2023-08-11 11:51:15', '2023-08-11 18:51:15'),
(954, 5.19, 0, 'Suhu Terlalu Dingin', '01:52:20', 'Asam', '2023-08-11 11:52:20', '2023-08-11 18:52:20'),
(955, 5.56, 5, 'Suhu Terlalu Dingin', '01:53:24', 'Asam', '2023-08-11 11:53:24', '2023-08-11 18:53:24'),
(956, 5.94, 12, 'Suhu Terlalu Dingin', '01:54:30', 'Basa', '2023-08-11 11:54:30', '2023-08-11 18:54:30'),
(957, 6.38, 4, 'Suhu Terlalu Dingin', '01:55:35', 'Asam', '2023-08-11 11:55:35', '2023-08-11 18:55:35'),
(958, 7.25, 12, 'Suhu Terlalu Dingin', '01:57:25', 'Basa', '2023-08-11 11:57:25', '2023-08-11 18:57:25'),
(959, 9.81, 4, 'Suhu Terlalu Dingin', '02:02:30', 'Asam', '2023-08-11 12:02:30', '2023-08-11 19:02:30'),
(960, 10.25, 9, 'Suhu Terlalu Dingin', '02:03:36', 'Basa', '2023-08-11 12:03:36', '2023-08-11 19:03:36'),
(961, 10.31, 10, 'Suhu Terlalu Dingin', '02:03:38', 'Basa', '2023-08-11 12:03:38', '2023-08-11 19:03:38'),
(962, 10.38, 3, 'Suhu Terlalu Dingin', '02:03:39', 'Asam', '2023-08-11 12:03:39', '2023-08-11 19:03:39'),
(963, 10.38, 7, 'Suhu Terlalu Dingin', '02:03:41', 'Normal', '2023-08-11 12:03:41', '2023-08-11 19:03:41'),
(964, 10.44, 6, 'Suhu Terlalu Dingin', '02:03:42', 'Asam', '2023-08-11 12:03:42', '2023-08-11 19:03:42'),
(965, 10.44, 4, 'Suhu Terlalu Dingin', '02:03:44', 'Asam', '2023-08-11 12:03:44', '2023-08-11 19:03:44'),
(966, 10.44, 1, 'Suhu Terlalu Dingin', '02:03:45', 'Asam', '2023-08-11 12:03:45', '2023-08-11 19:03:45'),
(967, 10.44, 0, 'Suhu Terlalu Dingin', '02:03:47', 'Asam', '2023-08-11 12:03:47', '2023-08-11 19:03:47'),
(968, 10.5, 4, 'Suhu Terlalu Dingin', '02:03:50', 'Asam', '2023-08-11 12:03:50', '2023-08-11 19:03:50'),
(969, 10.5, 12, 'Suhu Terlalu Dingin', '02:03:52', 'Basa', '2023-08-11 12:03:52', '2023-08-11 19:03:52'),
(970, 10.5, 10, 'Suhu Terlalu Dingin', '02:03:53', 'Basa', '2023-08-11 12:03:53', '2023-08-11 19:03:53'),
(971, 10.5, 10, 'Suhu Terlalu Dingin', '02:03:55', 'Basa', '2023-08-11 12:03:55', '2023-08-11 19:03:55'),
(972, 10.5, 9, 'Suhu Terlalu Dingin', '02:03:56', 'Basa', '2023-08-11 12:03:56', '2023-08-11 19:03:56'),
(973, 10.56, 1, 'Suhu Terlalu Dingin', '02:03:58', 'Asam', '2023-08-11 12:03:58', '2023-08-11 19:03:58'),
(974, 10.56, 12, 'Suhu Terlalu Dingin', '02:03:59', 'Basa', '2023-08-11 12:03:59', '2023-08-11 19:03:59'),
(975, 10.56, 0, 'Suhu Terlalu Dingin', '02:04:01', 'Asam', '2023-08-11 12:04:01', '2023-08-11 19:04:01'),
(976, 10.5, 7, 'Suhu Terlalu Dingin', '02:04:02', 'Normal', '2023-08-11 12:04:02', '2023-08-11 19:04:02'),
(977, 10.56, 3, 'Suhu Terlalu Dingin', '02:04:05', 'Asam', '2023-08-11 12:04:05', '2023-08-11 19:04:05'),
(978, 10.56, 12, 'Suhu Terlalu Dingin', '02:04:07', 'Basa', '2023-08-11 12:04:07', '2023-08-11 19:04:07'),
(979, 10.56, 4, 'Suhu Terlalu Dingin', '02:04:08', 'Asam', '2023-08-11 12:04:08', '2023-08-11 19:04:08'),
(980, 10.63, 12, 'Suhu Terlalu Dingin', '02:04:10', 'Basa', '2023-08-11 12:04:10', '2023-08-11 19:04:10'),
(981, 10.63, 7, 'Suhu Terlalu Dingin', '02:04:12', 'Normal', '2023-08-11 12:04:12', '2023-08-11 19:04:12'),
(982, 10.63, 6, 'Suhu Terlalu Dingin', '02:04:13', 'Asam', '2023-08-11 12:04:13', '2023-08-11 19:04:13'),
(983, 10.69, 0, 'Suhu Terlalu Dingin', '02:04:15', 'Asam', '2023-08-11 12:04:15', '2023-08-11 19:04:15'),
(984, 10.63, 12, 'Suhu Terlalu Dingin', '02:04:17', 'Basa', '2023-08-11 12:04:17', '2023-08-11 19:04:17'),
(985, 10.63, 2, 'Suhu Terlalu Dingin', '02:04:18', 'Asam', '2023-08-11 12:04:18', '2023-08-11 19:04:18'),
(986, 10.63, 11, 'Suhu Terlalu Dingin', '02:04:22', 'Basa', '2023-08-11 12:04:22', '2023-08-11 19:04:22'),
(987, 10.69, 11, 'Suhu Terlalu Dingin', '02:04:23', 'Basa', '2023-08-11 12:04:23', '2023-08-11 19:04:23'),
(988, 10.69, 12, 'Suhu Terlalu Dingin', '02:04:25', 'Basa', '2023-08-11 12:04:25', '2023-08-11 19:04:25'),
(989, 10.69, 9, 'Suhu Terlalu Dingin', '02:04:27', 'Basa', '2023-08-11 12:04:27', '2023-08-11 19:04:27'),
(990, 10.75, 5, 'Suhu Terlalu Dingin', '02:04:29', 'Asam', '2023-08-11 12:04:29', '2023-08-11 19:04:29'),
(991, 10.75, 3, 'Suhu Terlalu Dingin', '02:04:30', 'Asam', '2023-08-11 12:04:30', '2023-08-11 19:04:30'),
(992, 10.75, 1, 'Suhu Terlalu Dingin', '02:04:32', 'Asam', '2023-08-11 12:04:32', '2023-08-11 19:04:32'),
(993, 10.81, 11, 'Suhu Terlalu Dingin', '02:04:34', 'Basa', '2023-08-11 12:04:34', '2023-08-11 19:04:34'),
(994, 10.81, 11, 'Suhu Terlalu Dingin', '02:04:38', 'Basa', '2023-08-11 12:04:38', '2023-08-11 19:04:38'),
(995, 10.81, 13, 'Suhu Terlalu Dingin', '02:04:40', 'Basa', '2023-08-11 12:04:40', '2023-08-11 19:04:40'),
(996, 10.81, 3, 'Suhu Terlalu Dingin', '02:04:42', 'Asam', '2023-08-11 12:04:42', '2023-08-11 19:04:42'),
(997, 10.88, 1, 'Suhu Terlalu Dingin', '02:04:44', 'Asam', '2023-08-11 12:04:44', '2023-08-11 19:04:44'),
(998, 10.88, 4, 'Suhu Terlalu Dingin', '02:04:46', 'Asam', '2023-08-11 12:04:46', '2023-08-11 19:04:46'),
(999, 10.88, 5, 'Suhu Terlalu Dingin', '02:04:48', 'Asam', '2023-08-11 12:04:48', '2023-08-11 19:04:48'),
(1000, 10.94, 4, 'Suhu Terlalu Dingin', '02:04:49', 'Asam', '2023-08-11 12:04:49', '2023-08-11 19:04:49'),
(1001, 10.94, 12, 'Suhu Terlalu Dingin', '02:04:53', 'Basa', '2023-08-11 12:04:53', '2023-08-11 19:04:53'),
(1002, 10.94, 11, 'Suhu Terlalu Dingin', '02:04:54', 'Basa', '2023-08-11 12:04:54', '2023-08-11 19:04:54'),
(1003, 10.94, 6, 'Suhu Terlalu Dingin', '02:04:56', 'Asam', '2023-08-11 12:04:56', '2023-08-11 19:04:56'),
(1004, 11, 1, 'Suhu Terlalu Dingin', '02:04:57', 'Asam', '2023-08-11 12:04:57', '2023-08-11 19:04:57'),
(1005, 11, 4, 'Suhu Terlalu Dingin', '02:04:59', 'Asam', '2023-08-11 12:04:59', '2023-08-11 19:04:59'),
(1006, 11, 3, 'Suhu Terlalu Dingin', '02:05:00', 'Asam', '2023-08-11 12:05:00', '2023-08-11 19:05:00'),
(1007, 11, 12, 'Suhu Terlalu Dingin', '02:05:02', 'Basa', '2023-08-11 12:05:02', '2023-08-11 19:05:02'),
(1258, 25.5, 9, 'Suhu Normal', '03:05:52', 'Basa', '2023-08-11 13:05:52', '2023-08-11 20:05:52'),
(1259, 25.56, 2, 'Suhu Normal', '03:08:31', 'Asam', '2023-08-11 13:08:31', '2023-08-11 20:08:31'),
(1260, 25.69, 5, 'Suhu Normal', '03:10:31', 'Asam', '2023-08-11 13:10:31', '2023-08-11 20:10:31'),
(1261, 25.69, 7, 'Suhu Normal', '03:12:32', 'Normal', '2023-08-11 13:12:32', '2023-08-11 20:12:32'),
(1262, 25.69, 13, 'Suhu Normal', '03:14:54', 'Basa', '2023-08-11 13:14:54', '2023-08-11 20:14:54'),
(1263, 25.69, 13, 'Suhu Normal', '03:17:02', 'Basa', '2023-08-11 13:17:02', '2023-08-11 20:17:02'),
(1264, 25.69, 12, 'Suhu Normal', '03:18:56', 'Basa', '2023-08-11 13:18:56', '2023-08-11 20:18:56'),
(1265, 25.75, 13, 'Suhu Normal', '03:21:00', 'Basa', '2023-08-11 13:21:00', '2023-08-11 20:21:00'),
(1266, 25.75, 2, 'Suhu Normal', '03:23:03', 'Asam', '2023-08-11 13:23:03', '2023-08-11 20:23:03'),
(1267, 25.81, 4, 'Suhu Normal', '03:25:03', 'Asam', '2023-08-11 13:25:03', '2023-08-11 20:25:03'),
(1268, 25.81, 8, 'Suhu Normal', '03:27:05', 'Normal', '2023-08-11 13:27:05', '2023-08-11 20:27:05'),
(1269, 25.81, 12, 'Suhu Normal', '03:29:07', 'Basa', '2023-08-11 13:29:07', '2023-08-11 20:29:07'),
(1270, 25.75, 12, 'Suhu Normal', '03:30:47', 'Basa', '2023-08-11 13:30:47', '2023-08-11 20:30:47'),
(1271, 25.69, 8, 'Suhu Normal', '03:32:47', 'Normal', '2023-08-11 13:32:47', '2023-08-11 20:32:47'),
(1272, 25.69, 5, 'Suhu Normal', '03:34:48', 'Asam', '2023-08-11 13:34:48', '2023-08-11 20:34:48'),
(1273, 25.69, 7, 'Suhu Normal', '03:36:33', 'Normal', '2023-08-11 13:36:33', '2023-08-11 20:36:33'),
(1274, 25.75, 0, 'Suhu Normal', '03:41:33', 'Asam', '2023-08-11 13:41:33', '2023-08-11 20:41:33'),
(1275, 25.69, 1, 'Suhu Normal', '03:46:34', 'Asam', '2023-08-11 13:46:34', '2023-08-11 20:46:34'),
(1276, 25.75, 9, 'Suhu Normal', '03:51:34', 'Basa', '2023-08-11 13:51:34', '2023-08-11 20:51:34'),
(1277, 25.69, 3, 'Suhu Normal', '03:56:36', 'Asam', '2023-08-11 13:56:36', '2023-08-11 20:56:36'),
(1278, 25.75, 0, 'Suhu Normal', '07:58:23', 'Asam', '2023-08-11 17:58:23', '2023-08-12 00:58:24'),
(1279, 25.81, 10, 'Suhu Normal', '08:02:54', 'Basa', '2023-08-11 18:02:54', '2023-08-12 01:02:54'),
(1280, 25.94, 5, 'Suhu Normal', '08:08:00', 'Asam', '2023-08-11 18:08:00', '2023-08-12 01:08:00'),
(1281, 26, 10, 'Suhu Normal', '08:13:03', 'Basa', '2023-08-11 18:13:03', '2023-08-12 01:13:03'),
(1282, 29.5, 4, 'Suhu Normal', '08:18:02', 'Asam', '2023-08-11 18:18:02', '2023-08-12 01:18:02'),
(1283, 28.31, 5, 'Suhu Normal', '08:23:05', 'Asam', '2023-08-11 18:23:05', '2023-08-12 01:23:05'),
(1284, 28.94, 9, 'Suhu Normal', '08:28:07', 'Basa', '2023-08-11 18:28:07', '2023-08-12 01:28:07'),
(1285, 27.19, 6, 'Suhu Normal', '08:33:10', 'Asam', '2023-08-11 18:33:10', '2023-08-12 01:33:10'),
(1286, 26.69, 3, 'Suhu Normal', '08:38:11', 'Asam', '2023-08-11 18:38:11', '2023-08-12 01:38:11'),
(1287, 26.5, 8, 'Suhu Normal', '08:43:13', 'Normal', '2023-08-11 18:43:13', '2023-08-12 01:43:13'),
(1288, 26.44, 0, 'Suhu Normal', '08:50:38', 'Asam', '2023-08-11 18:50:38', '2023-08-12 01:50:38'),
(1289, 26.38, 5, 'Suhu Normal', '08:56:51', 'Asam', '2023-08-11 18:56:51', '2023-08-12 01:56:51'),
(1290, 26.38, 1, 'Suhu Normal', '08:58:51', 'Asam', '2023-08-11 18:58:51', '2023-08-12 01:58:51'),
(1291, 26.38, 4, 'Suhu Normal', '09:03:52', 'Asam', '2023-08-11 19:03:52', '2023-08-12 02:03:52'),
(1292, 26.81, 0, 'Suhu Normal', '09:12:47', 'Asam', '2023-08-11 19:12:47', '2023-08-12 02:12:47'),
(1293, 26.75, 2, 'Suhu Normal', '09:17:48', 'Asam', '2023-08-11 19:17:48', '2023-08-12 02:17:48'),
(1294, 26.69, 4, 'Suhu Normal', '09:20:33', 'Asam', '2023-08-11 19:20:33', '2023-08-12 02:20:33'),
(1295, 26.69, 4, 'Suhu Normal', '09:24:11', 'Asam', '2023-08-11 19:24:12', '2023-08-12 02:24:12'),
(1296, 26.56, 1, 'Suhu Normal', '09:29:13', 'Asam', '2023-08-11 19:29:13', '2023-08-12 02:29:13'),
(1297, 26.63, 13, 'Suhu Normal', '09:38:39', 'Basa', '2023-08-11 19:38:39', '2023-08-12 02:38:39'),
(1298, 26.56, 10, 'Suhu Normal', '09:43:42', 'Basa', '2023-08-11 19:43:42', '2023-08-12 02:43:42'),
(1299, 26.38, 2, 'Suhu Normal', '09:48:53', 'Asam', '2023-08-11 19:48:54', '2023-08-12 02:48:54'),
(1300, 26.25, 10, 'Suhu Normal', '09:53:41', 'Basa', '2023-08-11 19:53:42', '2023-08-12 02:53:42'),
(1301, 23.31, 2, 'Suhu Terlalu Dingin', '09:59:29', 'Asam', '2023-08-11 19:59:29', '2023-08-12 02:59:29'),
(1302, 25.13, 4, 'Suhu Normal', '10:03:28', 'Asam', '2023-08-11 20:03:28', '2023-08-12 03:03:28'),
(1303, 25.69, 10, 'Suhu Normal', '10:08:29', 'Basa', '2023-08-11 20:08:29', '2023-08-12 03:08:29'),
(1304, 25.75, 1, 'Suhu Normal', '10:13:29', 'Asam', '2023-08-11 20:13:30', '2023-08-12 03:13:30'),
(1305, 25.63, 5, 'Suhu Normal', '10:18:30', 'Asam', '2023-08-11 20:18:30', '2023-08-12 03:18:30'),
(1306, 25.44, 0, 'Suhu Normal', '10:23:31', 'Asam', '2023-08-11 20:23:31', '2023-08-12 03:23:31'),
(1307, 25.44, 5, 'Suhu Normal', '10:28:33', 'Asam', '2023-08-11 20:28:33', '2023-08-12 03:28:33'),
(1308, 25.5, 4, 'Suhu Normal', '10:33:33', 'Asam', '2023-08-11 20:33:33', '2023-08-12 03:33:33'),
(1309, 25.56, 5, 'Suhu Normal', '10:38:34', 'Asam', '2023-08-11 20:38:34', '2023-08-12 03:38:34'),
(1310, 25.63, 6, 'Suhu Normal', '10:43:35', 'Asam', '2023-08-11 20:43:35', '2023-08-12 03:43:35'),
(1311, 25.75, 3, 'Suhu Normal', '10:48:37', 'Asam', '2023-08-11 20:48:37', '2023-08-12 03:48:37'),
(1312, 25.81, 4, 'Suhu Normal', '10:53:37', 'Asam', '2023-08-11 20:53:37', '2023-08-12 03:53:37'),
(1313, 25.81, 13, 'Suhu Normal', '10:58:38', 'Basa', '2023-08-11 20:58:38', '2023-08-12 03:58:38'),
(1314, 25.94, 1, 'Suhu Normal', '11:03:39', 'Asam', '2023-08-11 21:03:39', '2023-08-12 04:03:39'),
(1315, 26.06, 7, 'Suhu Normal', '11:08:39', 'Normal', '2023-08-11 21:08:39', '2023-08-12 04:08:39'),
(1316, 26.13, 3, 'Suhu Normal', '11:13:41', 'Asam', '2023-08-11 21:13:41', '2023-08-12 04:13:41'),
(1317, 26.19, 2, 'Suhu Normal', '11:18:42', 'Asam', '2023-08-11 21:18:42', '2023-08-12 04:18:42'),
(1318, 26.25, 1, 'Suhu Normal', '11:23:43', 'Asam', '2023-08-11 21:23:43', '2023-08-12 04:23:44'),
(1319, 26.19, 8, 'Suhu Normal', '11:26:37', 'Normal', '2023-08-11 21:26:37', '2023-08-12 04:26:37'),
(1320, 26.25, 1, 'Suhu Normal', '11:29:26', 'Asam', '2023-08-11 21:29:26', '2023-08-12 04:29:26'),
(1321, 26.13, 5, 'Suhu Normal', '11:34:28', 'Asam', '2023-08-11 21:34:28', '2023-08-12 04:34:28'),
(1322, 26.13, 7, 'Suhu Normal', '11:39:29', 'Normal', '2023-08-11 21:39:29', '2023-08-12 04:39:29'),
(1323, 26.19, 0, 'Suhu Normal', '11:44:31', 'Asam', '2023-08-11 21:44:31', '2023-08-12 04:44:31'),
(1324, 26.19, 13, 'Suhu Normal', '11:49:32', 'Basa', '2023-08-11 21:49:32', '2023-08-12 04:49:32'),
(1325, 26.19, 9, 'Suhu Normal', '11:54:35', 'Basa', '2023-08-11 21:54:35', '2023-08-12 04:54:35'),
(1326, -127, 12, 'Suhu Terlalu Dingin', '20:30:34', 'Basa', '2023-08-19 06:30:34', '2023-08-19 13:30:34'),
(1327, 29.63, 3, 'Suhu Normal', '20:35:30', 'Asam', '2023-08-19 06:35:30', '2023-08-19 13:35:30'),
(1328, 29.5, 6, 'Suhu Normal', '20:40:03', 'Asam', '2023-08-19 06:40:03', '2023-08-19 13:40:03'),
(1329, 29.44, 0, 'Suhu Normal', '20:45:02', 'Asam', '2023-08-19 06:45:02', '2023-08-19 13:45:02'),
(1330, 29.38, 0, 'Suhu Normal', '20:50:04', 'Asam', '2023-08-19 06:50:04', '2023-08-19 13:50:04'),
(1331, 29.44, 4, 'Suhu Normal', '20:55:05', 'Asam', '2023-08-19 06:55:05', '2023-08-19 13:55:05'),
(1332, 29.31, 6, 'Suhu Normal', '21:00:11', 'Asam', '2023-08-19 07:00:11', '2023-08-19 14:00:11'),
(1333, 29.31, 7, 'Suhu Normal', '21:05:09', 'Normal', '2023-08-19 07:05:09', '2023-08-19 14:05:09'),
(1334, 29.31, 7, 'Suhu Normal', '21:10:09', 'Normal', '2023-08-19 07:10:09', '2023-08-19 14:10:09'),
(1335, 29.25, 7, 'Suhu Normal', '21:15:12', 'Normal', '2023-08-19 07:15:12', '2023-08-19 14:15:12'),
(1336, 29.19, 7, 'Suhu Normal', '21:20:14', 'Normal', '2023-08-19 07:20:14', '2023-08-19 14:20:14'),
(1337, 28.94, 6, 'Suhu Normal', '21:25:22', 'Asam', '2023-08-19 07:25:22', '2023-08-19 14:25:22'),
(1338, 28.81, 7, 'Suhu Normal', '21:30:20', 'Normal', '2023-08-19 07:30:20', '2023-08-19 14:30:20'),
(1339, 28.69, 7, 'Suhu Normal', '21:35:19', 'Normal', '2023-08-19 07:35:19', '2023-08-19 14:35:19'),
(1340, 28.56, 7, 'Suhu Normal', '10:32:13', 'Normal', '2023-08-19 20:32:13', '2023-08-20 03:32:13'),
(1341, 28.5, 7, 'Suhu Normal', '10:37:13', 'Normal', '2023-08-19 20:37:13', '2023-08-20 03:37:13'),
(1342, 28.5, 7, 'Suhu Normal', '10:40:41', 'Normal', '2023-08-19 20:40:41', '2023-08-20 03:40:41'),
(1343, 28.63, 6, 'Suhu Normal', '10:45:40', 'Asam', '2023-08-19 20:45:40', '2023-08-20 03:45:40'),
(1344, 28.5, 7, 'Suhu Normal', '10:49:52', 'Normal', '2023-08-19 20:49:52', '2023-08-20 03:49:52'),
(1345, 28.63, 7, 'Suhu Normal', '10:54:50', 'Normal', '2023-08-19 20:54:51', '2023-08-20 03:54:51'),
(1346, 28.56, 6, 'Suhu Normal', '10:56:10', 'Asam', '2023-08-19 20:56:10', '2023-08-20 03:56:10'),
(1347, 28.5, 8, 'Suhu Normal', '11:01:10', 'Normal', '2023-08-19 21:01:10', '2023-08-20 04:01:10'),
(1348, 28.69, 8, 'Suhu Normal', '11:06:11', 'Normal', '2023-08-19 21:06:11', '2023-08-20 04:06:11');

-- --------------------------------------------------------

--
-- Table structure for table `pakan`
--

CREATE TABLE `pakan` (
  `id` int(36) NOT NULL,
  `waktu` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pakan`
--

INSERT INTO `pakan` (`id`, `waktu`, `created_at`, `updated_at`) VALUES
(1, '07:00', '2023-08-14 16:40:45', '2023-08-14 16:40:45'),
(2, '12:00', '2023-08-14 16:40:45', '2023-08-14 16:40:45'),
(3, '17:00', '2023-08-14 16:41:50', '2023-08-14 16:41:50');

-- --------------------------------------------------------

--
-- Table structure for table `sensor`
--

CREATE TABLE `sensor` (
  `id` int(11) NOT NULL,
  `suhu_air` double NOT NULL,
  `ph_air` double NOT NULL,
  `time` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sensor`
--

INSERT INTO `sensor` (`id`, `suhu_air`, `ph_air`, `time`, `created_at`, `updated_at`) VALUES
(470, 32.88, 8, '23:33:33', '2023-08-03 09:33:33', '2023-08-03 16:33:33'),
(471, 33.06, 2, '23:35:21', '2023-08-03 09:35:21', '2023-08-03 16:35:21'),
(472, 32, 0, '23:36:21', '2023-08-03 09:36:21', '2023-08-03 16:36:21'),
(473, 30.5, 2, '23:37:21', '2023-08-03 09:37:21', '2023-08-03 16:37:21'),
(474, 27.5, 13, '23:43:46', '2023-08-03 09:43:46', '2023-08-03 16:43:46'),
(475, 34.69, 2, '00:07:58', '2023-08-04 10:07:59', '2023-08-04 17:07:59'),
(476, 33.5, 11, '00:09:00', '2023-08-04 10:09:00', '2023-08-04 17:09:00'),
(477, 32.75, 7, '00:10:00', '2023-08-04 10:10:00', '2023-08-04 17:10:00'),
(478, 32.25, 2, '00:11:01', '2023-08-04 10:11:01', '2023-08-04 17:11:01'),
(479, 31.81, 5, '00:13:02', '2023-08-04 10:13:02', '2023-08-04 17:13:02'),
(480, 31.75, 13, '00:14:03', '2023-08-04 10:14:03', '2023-08-04 17:14:03'),
(481, 31.69, 10, '00:15:04', '2023-08-04 10:15:04', '2023-08-04 17:15:04'),
(482, 31.75, 13, '00:16:04', '2023-08-04 10:16:04', '2023-08-04 17:16:04'),
(483, 31.94, 5, '00:17:04', '2023-08-04 10:17:04', '2023-08-04 17:17:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_sensor`
--
ALTER TABLE `data_sensor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pakan`
--
ALTER TABLE `pakan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sensor`
--
ALTER TABLE `sensor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_sensor`
--
ALTER TABLE `data_sensor`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1349;

--
-- AUTO_INCREMENT for table `pakan`
--
ALTER TABLE `pakan`
  MODIFY `id` int(36) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- AUTO_INCREMENT for table `sensor`
--
ALTER TABLE `sensor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=484;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
