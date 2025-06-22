-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 22, 2025 at 10:16 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci4`
--

-- --------------------------------------------------------

--
-- Table structure for table `jobentries`
--

CREATE TABLE `jobentries` (
  `id` int(11) NOT NULL,
  `job_no` varchar(50) DEFAULT NULL,
  `design_no` varchar(50) DEFAULT NULL,
  `fabric` varchar(100) DEFAULT NULL,
  `pcs` int(11) DEFAULT NULL,
  `top` varchar(100) DEFAULT NULL,
  `sleeve` varchar(100) DEFAULT NULL,
  `colors` varchar(100) DEFAULT NULL,
  `panna` varchar(100) DEFAULT NULL,
  `consumption` varchar(100) DEFAULT NULL,
  `bottom` varchar(100) DEFAULT NULL,
  `dupatta` varchar(100) DEFAULT NULL,
  `less` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `total_mtr` varchar(100) DEFAULT NULL,
  `pn_km` varchar(100) DEFAULT NULL,
  `set_copy` varchar(100) DEFAULT NULL,
  `allover` varchar(100) DEFAULT NULL,
  `lot` varchar(100) DEFAULT NULL,
  `roll` varchar(100) DEFAULT NULL,
  `print` varchar(100) DEFAULT NULL,
  `wastage` varchar(100) DEFAULT NULL,
  `images` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jobentries`
--

INSERT INTO `jobentries` (`id`, `job_no`, `design_no`, `fabric`, `pcs`, `top`, `sleeve`, `colors`, `panna`, `consumption`, `bottom`, `dupatta`, `less`, `date`, `pass`, `total_mtr`, `pn_km`, `set_copy`, `allover`, `lot`, `roll`, `print`, `wastage`, `images`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 'Hic quibusdam labori', 'Cum ex rerum ex nemo', 'Sint autem ut et no', 0, 'Dolor placeat sed m', 'Fugiat voluptatem ', 'Occaecat consequatur', 'Aliquip optio modi ', 'Assumenda at reprehe', 'Voluptates omnis num', 'Voluptatem Quia qui', 'Sit est aliqua Sap', '2003-12-08', 'Qui magnam necessita', 'Illo consectetur ist', 'Esse est elit sed ', 'Mollit quis do maior', 'Voluptas sunt debiti', 'Vero corrupti velit', 'Ea exercitationem iu', 'Cupidatat pariatur ', 'Maxime nesciunt dui', '10834363_1.jpg', '2025-06-22 08:49:15', '2025-06-22 08:49:15', 0),
(2, '38', '82', 'Voluptate ipsa sint', 32, '15', '99', 'Consectetur cum est ', '49', '11', '24', 'Sunt laboriosam au', '75', '1995-03-23', '96', '73', '81', '10', 'Est est nisi vitae', '93', '18', '33', '35', '1.jpeg', '2025-06-22 12:07:18', '2025-06-22 12:07:18', 0),
(3, '27', '39', 'Ipsa sed in explica', 0, '53', '43', 'Vitae elit aliquid ', '79', '81', '88', 'Deserunt eos aute cu', '67', '2002-11-01', '1', '31', '58', '55', 'Veritatis pariatur ', '80', '82', '18', '81', '1_1.jpeg,2.jpeg,3.jpeg,4.jpeg,5.jpeg,WhatsApp Image 2025-03-23 at 12.11.54 PM.jpeg', '2025-06-22 14:42:31', '2025-06-22 14:42:31', 0),
(4, '20', '65', 'work', 0, '59', '60', 'workwq', '33', '28', '78', 'Sunt amet velit in', '81', '1990-08-09', '8', '100', '51', '14', 'Consequatur eum mag', '42', '77', '75', '56', '', '2025-06-22 17:51:21', '2025-06-22 17:56:06', 0),
(6, '48', '65', 'Et fugiat sit eaque', 0, '23', '1', 'Consequatur eaque t', '38', '12', '25', 'Mollitia do sunt ver', '9', '2000-08-24', '66', '55', '18', '6', 'Rem sint vel molesti', '98', '25', '9', '79', '1_3.jpeg,2_2.jpeg,3_2.jpeg,4_2.jpeg,5_2.jpeg', '2025-06-22 18:45:28', '2025-06-22 18:46:23', 1),
(7, '75', '27', 'Ipsam reprehenderit', 0, '14', '79', 'Aliquid accusantium ', '36', '66', '81', 'Voluptas velit volu', '99', '2008-01-03', '53', '58', '8', '12', 'Aperiam fugiat ab of', '35', '84', '60', '1', '3_3.jpeg', '2025-06-22 18:47:08', '2025-06-22 18:47:08', 1),
(8, '28', '48', 'Dolorem debitis cons', 0, '14', '40', 'Laboris pariatur Nu', '94', '39', '61', 'Vero molestias offic', '75', '1990-02-02', '49', '38', '23', '87', 'Veritatis possimus ', '7', '11', '19', '30', '', '2025-06-22 19:18:13', '2025-06-22 19:18:13', 1),
(9, '89', '36', 'Qui culpa eius in di', 0, '64', '61', 'Adipisci cupidatat v', '6', '71', '25', 'Labore nesciunt con', '82', '2019-03-29', '48', '65', '89', '9', 'Inventore irure corp', '78', '77', '9', '45', '', '2025-06-22 19:18:20', '2025-06-22 19:18:20', 1),
(10, '89', '36', 'Qui culpa eius in di', 0, '64', '61', 'Adipisci cupidatat v', '6', '71', '25', 'Labore nesciunt con', '82', '2019-03-29', '48', '65', '89', '9', 'Inventore irure corp', '78', '77', '9', '45', '', '2025-06-22 19:18:25', '2025-06-22 19:18:25', 1),
(11, '89', '36', 'Qui culpa eius in di', 0, '64', '61', 'Adipisci cupidatat v', '6', '71', '25', 'Labore nesciunt con', '82', '2019-03-29', '48', '65', '89', '9', 'Inventore irure corp', '78', '77', '9', '45', '', '2025-06-22 19:18:27', '2025-06-22 19:18:27', 1),
(12, '89', '36', 'Qui culpa eius in di', 0, '64', '61', 'Adipisci cupidatat v', '6', '71', '25', 'Labore nesciunt con', '82', '2019-03-29', '48', '65', '89', '9', 'Inventore irure corp', '78', '77', '9', '45', '', '2025-06-22 19:18:29', '2025-06-22 19:18:29', 1),
(13, '89', '36', 'Qui culpa eius in di', 0, '64', '61', 'Adipisci cupidatat v', '6', '71', '25', 'Labore nesciunt con', '82', '2019-03-29', '48', '65', '89', '9', 'Inventore irure corp', '78', '77', '9', '45', '', '2025-06-22 19:18:31', '2025-06-22 19:18:31', 1),
(14, '89', '36', 'Qui culpa eius in di', 0, '64', '61', 'Adipisci cupidatat v', '6', '71', '25', 'Labore nesciunt con', '82', '2019-03-29', '48', '65', '89', '9', 'Inventore irure corp', '78', '77', '9', '45', '', '2025-06-22 19:18:33', '2025-06-22 19:18:33', 1),
(15, '89', '36', 'Qui culpa eius in di', 0, '64', '61', 'Adipisci cupidatat v', '6', '71', '25', 'Labore nesciunt con', '82', '2019-03-29', '48', '65', '89', '9', 'Inventore irure corp', '78', '77', '9', '45', '', '2025-06-22 19:18:35', '2025-06-22 19:18:35', 1),
(16, '89', '36', 'Qui culpa eius in di', 0, '64', '61', 'Adipisci cupidatat v', '6', '71', '25', 'Labore nesciunt con', '82', '2019-03-29', '48', '65', '89', '9', 'Inventore irure corp', '78', '77', '9', '45', '', '2025-06-22 19:18:37', '2025-06-22 19:18:37', 1),
(17, '89', '36', 'Qui culpa eius in di', 0, '64', '61', 'Adipisci cupidatat v', '6', '71', '25', 'Labore nesciunt con', '82', '2019-03-29', '48', '65', '89', '9', 'Inventore irure corp', '78', '77', '9', '45', '', '2025-06-22 19:18:38', '2025-06-22 19:18:38', 1),
(18, '89', '36', 'Qui culpa eius in di', 0, '64', '61', 'Adipisci cupidatat v', '6', '71', '25', 'Labore nesciunt con', '82', '2019-03-29', '48', '65', '89', '9', 'Inventore irure corp', '78', '77', '9', '45', '', '2025-06-22 19:18:41', '2025-06-22 19:18:41', 1),
(19, '89', '36', 'Qui culpa eius in di', 0, '64', '61', 'Adipisci cupidatat v', '6', '71', '25', 'Labore nesciunt con', '82', '2019-03-29', '48', '65', '89', '9', 'Inventore irure corp', '78', '77', '9', '45', '', '2025-06-22 19:18:42', '2025-06-22 19:18:42', 1),
(20, '89', '36', 'Qui culpa eius in di', 0, '64', '61', 'Adipisci cupidatat v', '6', '71', '25', 'Labore nesciunt con', '82', '2019-03-29', '48', '65', '89', '9', 'Inventore irure corp', '78', '77', '9', '45', '', '2025-06-22 19:18:44', '2025-06-22 19:18:44', 1),
(21, '89', '36', 'Qui culpa eius in di', 0, '64', '61', 'Adipisci cupidatat v', '6', '71', '25', 'Labore nesciunt con', '82', '2019-03-29', '48', '65', '89', '9', 'Inventore irure corp', '78', '77', '9', '45', '', '2025-06-22 19:18:46', '2025-06-22 19:18:46', 1),
(22, '89', '36', 'Qui culpa eius in di', 0, '64', '61', 'Adipisci cupidatat v', '6', '71', '25', 'Labore nesciunt con', '82', '2019-03-29', '48', '65', '89', '9', 'Inventore irure corp', '78', '77', '9', '45', '', '2025-06-22 19:18:48', '2025-06-22 19:18:48', 1),
(23, '89', '36', 'Qui culpa eius in di', 0, '64', '61', 'Adipisci cupidatat v', '6', '71', '25', 'Labore nesciunt con', '82', '2019-03-29', '48', '65', '89', '9', 'Inventore irure corp', '78', '77', '9', '45', '', '2025-06-22 19:18:49', '2025-06-22 19:18:49', 1),
(24, '89', '36', 'Qui culpa eius in di', 0, '64', '61', 'Adipisci cupidatat v', '6', '71', '25', 'Labore nesciunt con', '82', '2019-03-29', '48', '65', '89', '9', 'Inventore irure corp', '78', '77', '9', '45', '', '2025-06-22 19:18:51', '2025-06-22 19:18:51', 1),
(25, '89', '36', 'Qui culpa eius in di', 0, '64', '61', 'Adipisci cupidatat v', '6', '71', '25', 'Labore nesciunt con', '82', '2019-03-29', '48', '65', '89', '9', 'Inventore irure corp', '78', '77', '9', '45', '', '2025-06-22 19:18:53', '2025-06-22 19:18:53', 1),
(26, '89', '36', 'Qui culpa eius in di', 0, '64', '61', 'Adipisci cupidatat v', '6', '71', '25', 'Labore nesciunt con', '82', '2019-03-29', '48', '65', '89', '9', 'Inventore irure corp', '78', '77', '9', '45', '', '2025-06-22 19:18:55', '2025-06-22 19:18:55', 1),
(27, '89', '36', 'Qui culpa eius in di', 0, '64', '61', 'Adipisci cupidatat v', '6', '71', '25', 'Labore nesciunt con', '82', '2019-03-29', '48', '65', '89', '9', 'Inventore irure corp', '78', '77', '9', '45', '', '2025-06-22 19:18:56', '2025-06-22 19:18:56', 1),
(28, '89', '36', 'Qui culpa eius in di', 0, '64', '61', 'Adipisci cupidatat v', '6', '71', '25', 'Labore nesciunt con', '82', '2019-03-29', '48', '65', '89', '9', 'Inventore irure corp', '78', '77', '9', '45', '', '2025-06-22 19:18:58', '2025-06-22 19:18:58', 1),
(29, '89435', '36', 'Qui culpa eius in di', 0, '64', '61', 'Adipisci cupidatat v', '6', '71', '25', 'Labore nesciunt con', '82', '2019-03-29', '48', '65', '89', '9', 'Inventore irure corp', '78', '77', '9', '45', '', '2025-06-22 19:19:00', '2025-06-22 19:19:41', 1),
(30, '89', '36', 'Qui culpa eius in di', 0, '64', '61', 'Adipisci cupidatat v', '6', '71', '25', 'Labore nesciunt con', '82', '2019-03-29', '48', '65', '89', '9', 'Inventore irure corp', '78', '77', '9', '45', '', '2025-06-22 19:19:02', '2025-06-22 19:19:02', 1),
(31, '89', '36', 'Qui culpa eius in di', 0, '64', '61', 'Adipisci cupidatat v', '6', '71', '25', 'Labore nesciunt con', '82', '2019-03-29', '48', '65', '89', '9', 'Inventore irure corp', '78', '77', '9', '45', '', '2025-06-22 19:19:04', '2025-06-22 19:19:04', 1),
(32, 'JOB0001', 'D570', 'temporibus', 42, 'accusamus', 'inventore', '3', '45', '1', 'quasi', 'nostrum', '3', '1973-02-04', '0', '21', '1', '2', 'vitae', '69', '10', 'qui', '0', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(33, 'JOB0002', 'D260', 'sapiente', 14, 'atque', 'et', '2', '51', '4', 'ut', 'ducimus', '5', '1971-04-23', '0', '58', '8', '3', 'excepturi', '57', '20', 'totam', '2', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(34, 'JOB0003', 'D768', 'fugiat', 6, 'deleniti', 'qui', '5', '51', '3', 'suscipit', 'et', '3', '1971-01-02', '0', '64', '1', '3', 'aut', '45', '11', 'molestiae', '1', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(35, 'JOB0004', 'D699', 'deserunt', 34, 'aspernatur', 'quo', '5', '36', '9', 'aliquam', 'voluptatibus', '1', '2016-06-14', '1', '86', '1', '3', 'earum', '26', '8', 'qui', '3', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(36, 'JOB0005', 'D524', 'nemo', 46, 'enim', 'voluptatibus', '2', '40', '1', 'ex', 'ea', '0', '1975-07-21', '0', '35', '4', '1', 'ipsum', '95', '13', 'debitis', '1', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(37, 'JOB0006', 'D425', 'quia', 31, 'accusantium', 'vero', '3', '44', '6', 'excepturi', 'molestiae', '5', '1991-02-01', '1', '89', '3', '1', 'et', '100', '18', 'tempore', '1', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(38, 'JOB0007', 'D365', 'voluptatum', 26, 'pariatur', 'reprehenderit', '5', '49', '3', 'laborum', 'voluptas', '5', '2003-08-23', '1', '34', '10', '1', 'et', '92', '19', 'rerum', '1', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(39, 'JOB0008', 'D950', 'perspiciatis', 10, 'molestiae', 'qui', '3', '58', '6', 'ut', 'totam', '0', '2012-07-31', '0', '88', '7', '2', 'sequi', '12', '10', 'maxime', '5', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(40, 'JOB0009', 'D885', 'accusantium', 28, 'pariatur', 'ea', '5', '49', '2', 'aspernatur', 'perspiciatis', '4', '2017-01-08', '1', '89', '7', '3', 'id', '15', '17', 'iste', '2', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(41, 'JOB0010', 'D527', 'exercitationem', 24, 'incidunt', 'voluptate', '4', '49', '10', 'facilis', 'delectus', '3', '1996-07-19', '1', '22', '9', '1', 'debitis', '7', '18', 'et', '3', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(42, 'JOB0011', 'D339', 'amet', 20, 'sint', 'et', '1', '48', '9', 'et', 'culpa', '5', '1984-05-28', '0', '10', '7', '2', 'possimus', '44', '19', 'nostrum', '5', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(43, 'JOB0012', 'D453', 'eligendi', 28, 'omnis', 'quaerat', '1', '60', '1', 'commodi', 'nobis', '5', '1984-04-18', '0', '26', '8', '3', 'et', '66', '17', 'nulla', '0', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(44, 'JOB0013', 'D787', 'est', 14, 'amet', 'eos', '4', '30', '1', 'quas', 'ad', '1', '1999-10-26', '0', '37', '7', '3', 'repudiandae', '50', '4', 'sed', '2', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(45, 'JOB0014', 'D625', 'dolores', 49, 'atque', 'ad', '4', '51', '5', 'sapiente', 'nihil', '2', '2015-10-20', '0', '25', '8', '3', 'sint', '76', '15', 'culpa', '1', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(46, 'JOB0015', 'D527', 'qui', 20, 'sed', 'rerum', '4', '46', '3', 'explicabo', 'iure', '2', '1984-02-22', '1', '58', '2', '2', 'est', '75', '8', 'voluptate', '5', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(47, 'JOB0016', 'D379', 'libero', 7, 'sit', 'ipsa', '2', '54', '7', 'maxime', 'vitae', '4', '1988-06-03', '1', '36', '6', '1', 'qui', '92', '12', 'magnam', '4', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(48, 'JOB0017', 'D394', 'corrupti', 43, 'dignissimos', 'neque', '1', '54', '3', 'deserunt', 'velit', '3', '2010-06-06', '0', '77', '2', '2', 'debitis', '34', '18', 'sit', '5', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(49, 'JOB0018', 'D102', 'qui', 30, 'dolores', 'itaque', '4', '51', '9', 'aut', 'omnis', '1', '2018-06-15', '1', '19', '8', '2', 'sed', '98', '19', 'atque', '1', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(50, 'JOB0019', 'D675', 'libero', 45, 'officiis', 'laudantium', '5', '38', '4', 'et', 'fugiat', '4', '1997-06-27', '0', '77', '5', '1', 'adipisci', '38', '14', 'porro', '5', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(51, 'JOB0020', 'D421', 'vel', 22, 'sunt', 'facilis', '2', '42', '8', 'consequuntur', 'ratione', '1', '1981-02-21', '0', '12', '3', '1', 'laborum', '2', '16', 'aut', '5', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(52, 'JOB0021', 'D298', 'minima', 31, 'velit', 'autem', '4', '44', '1', 'quas', 'animi', '1', '2012-10-06', '1', '57', '8', '3', 'beatae', '89', '9', 'sit', '0', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(53, 'JOB0022', 'D111', 'quia', 30, 'soluta', 'occaecati', '5', '30', '5', 'esse', 'voluptates', '4', '2016-01-23', '0', '75', '10', '1', 'unde', '79', '11', 'omnis', '2', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(54, 'JOB0023', 'D111', 'est', 11, 'vitae', 'hic', '5', '38', '10', 'vel', 'aut', '5', '1998-02-27', '1', '29', '7', '1', 'illum', '21', '18', 'error', '5', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(55, 'JOB0024', 'D974', 'praesentium', 33, 'omnis', 'nesciunt', '4', '54', '9', 'eum', 'recusandae', '5', '1995-11-11', '0', '30', '7', '2', 'consequatur', '70', '18', 'et', '4', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(56, 'JOB0025', 'D288', 'praesentium', 40, 'consequatur', 'magnam', '3', '39', '8', 'optio', 'corporis', '4', '1976-09-07', '1', '68', '4', '3', 'impedit', '24', '1', 'minus', '1', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(57, 'JOB0026', 'D178', 'in', 19, 'quidem', 'architecto', '2', '41', '7', 'officia', 'tempore', '4', '2019-10-23', '0', '24', '3', '1', 'quis', '22', '18', 'dolore', '0', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(58, 'JOB0027', 'D482', 'nam', 18, 'vel', 'veniam', '5', '42', '3', 'officiis', 'delectus', '5', '2007-07-06', '0', '78', '6', '1', 'mollitia', '61', '6', 'ullam', '1', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(59, 'JOB0028', 'D902', 'corporis', 44, 'voluptatem', 'temporibus', '4', '54', '4', 'qui', 'voluptatem', '0', '2011-06-07', '1', '49', '1', '2', 'magnam', '94', '1', 'rem', '2', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(60, 'JOB0029', 'D296', 'eius', 16, 'eveniet', 'consequatur', '2', '51', '10', 'quos', 'eligendi', '0', '1982-08-08', '1', '33', '4', '2', 'voluptatem', '21', '12', 'velit', '3', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(61, 'JOB0030', 'D892', 'et', 6, 'quam', 'neque', '1', '59', '9', 'atque', 'ipsam', '4', '2021-11-20', '0', '46', '8', '1', 'sunt', '57', '11', 'facere', '1', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(62, 'JOB0031', 'D687', 'atque', 49, 'earum', 'eveniet', '4', '37', '8', 'consequatur', 'corporis', '5', '2009-11-26', '0', '70', '8', '2', 'in', '24', '18', 'aut', '2', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(63, 'JOB0032', 'D206', 'cum', 45, 'ea', 'sapiente', '2', '36', '7', 'possimus', 'expedita', '2', '2011-12-20', '0', '85', '6', '1', 'atque', '59', '2', 'occaecati', '3', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(64, 'JOB0033', 'D814', 'quas', 47, 'consequatur', 'nihil', '2', '35', '6', 'reiciendis', 'voluptates', '4', '2000-11-17', '1', '38', '4', '3', 'animi', '51', '18', 'praesentium', '0', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(65, 'JOB0034', 'D189', 'omnis', 4, 'repellat', 'aut', '3', '39', '8', 'provident', 'et', '0', '1984-04-17', '1', '35', '10', '2', 'odit', '2', '4', 'quia', '1', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(66, 'JOB0035', 'D488', 'nemo', 17, 'iure', 'cumque', '5', '60', '4', 'similique', 'odit', '2', '2016-10-21', '1', '14', '8', '1', 'omnis', '6', '4', 'et', '2', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(67, 'JOB0036', 'D424', 'quo', 50, 'voluptatem', 'quasi', '3', '50', '1', 'eaque', 'earum', '5', '2017-10-30', '0', '95', '8', '2', 'sit', '29', '6', 'nemo', '4', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(68, 'JOB0037', 'D277', 'accusamus', 50, 'facilis', 'adipisci', '5', '50', '6', 'commodi', 'praesentium', '0', '1976-02-13', '1', '37', '7', '1', 'adipisci', '46', '11', 'ducimus', '4', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(69, 'JOB0038', 'D551', 'ratione', 42, 'excepturi', 'consequatur', '1', '55', '5', 'et', 'aut', '0', '1999-04-20', '1', '79', '8', '3', 'aut', '34', '20', 'fugit', '2', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(70, 'JOB0039', 'D287', 'est', 38, 'quod', 'debitis', '2', '60', '8', 'optio', 'odit', '3', '1993-06-29', '1', '16', '2', '1', 'qui', '50', '16', 'et', '4', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(71, 'JOB0040', 'D636', 'pariatur', 25, 'repellat', 'aliquid', '4', '54', '1', 'voluptatibus', 'cupiditate', '0', '2020-12-30', '1', '20', '7', '1', 'reiciendis', '100', '1', 'iure', '3', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(72, 'JOB0041', 'D591', 'ducimus', 34, 'quis', 'sit', '1', '38', '5', 'eaque', 'veritatis', '1', '1977-09-19', '1', '60', '3', '3', 'omnis', '76', '9', 'dignissimos', '1', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(73, 'JOB0042', 'D672', 'hic', 20, 'blanditiis', 'et', '3', '51', '3', 'velit', 'beatae', '2', '2014-03-18', '1', '66', '5', '1', 'odio', '63', '3', 'ea', '2', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(74, 'JOB0043', 'D744', 'quidem', 16, 'atque', 'rerum', '5', '40', '1', 'placeat', 'dolorem', '1', '1984-11-02', '1', '66', '3', '2', 'labore', '7', '9', 'debitis', '0', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(75, 'JOB0044', 'D406', 'magni', 37, 'ducimus', 'autem', '5', '56', '7', 'eos', 'amet', '5', '2019-05-22', '0', '90', '3', '1', 'sit', '8', '1', 'consequatur', '2', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(76, 'JOB0045', 'D516', 'ut', 9, 'sint', 'est', '5', '50', '6', 'molestias', 'et', '5', '1991-05-13', '0', '52', '2', '1', 'et', '37', '18', 'odit', '5', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(77, 'JOB0046', 'D110', 'mollitia', 39, 'nam', 'consequuntur', '5', '47', '10', 'ab', 'ad', '4', '1976-06-15', '1', '67', '2', '2', 'ipsa', '42', '20', 'libero', '2', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(78, 'JOB0047', 'D981', 'vitae', 49, 'fugiat', 'maxime', '3', '33', '3', 'eum', 'pariatur', '5', '1991-10-25', '0', '39', '1', '1', 'consequuntur', '42', '1', 'numquam', '5', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(79, 'JOB0048', 'D501', 'aut', 15, 'quo', 'consequatur', '4', '58', '4', 'mollitia', 'amet', '5', '2007-03-22', '0', '54', '5', '1', 'tenetur', '40', '17', 'enim', '4', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(80, 'JOB0049', 'D888', 'culpa', 21, 'velit', 'ipsam', '5', '50', '10', 'veniam', 'non', '2', '2008-09-26', '0', '48', '2', '2', 'enim', '2', '13', 'voluptas', '2', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(81, 'JOB0050', 'D998', 'quaerat', 4, 'expedita', 'voluptates', '3', '58', '9', 'est', 'et', '2', '2023-11-17', '1', '89', '6', '1', 'cupiditate', '28', '1', 'id', '0', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(82, 'JOB0051', 'D189', 'est', 16, 'est', 'quaerat', '2', '37', '2', 'mollitia', 'quia', '3', '1996-03-11', '1', '54', '1', '3', 'atque', '72', '13', 'corporis', '4', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(83, 'JOB0052', 'D400', 'error', 15, 'nesciunt', 'deleniti', '3', '32', '3', 'voluptates', 'dicta', '3', '1981-07-05', '1', '20', '1', '3', 'sit', '24', '16', 'aut', '1', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(84, 'JOB0053', 'D864', 'nobis', 37, 'nobis', 'soluta', '5', '36', '9', 'alias', 'odio', '5', '2015-07-22', '1', '71', '7', '1', 'voluptatum', '53', '2', 'soluta', '1', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(85, 'JOB0054', 'D321', 'minus', 28, 'vel', 'maiores', '1', '60', '8', 'quaerat', 'quia', '1', '1980-08-21', '1', '53', '9', '1', 'tempora', '45', '12', 'quia', '1', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(86, 'JOB0055', 'D948', 'laboriosam', 9, 'temporibus', 'commodi', '5', '55', '6', 'occaecati', 'et', '3', '2018-06-17', '1', '85', '10', '2', 'exercitationem', '18', '16', 'aperiam', '2', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(87, 'JOB0056', 'D451', 'consequatur', 2, 'ipsam', 'amet', '5', '33', '2', 'deserunt', 'numquam', '2', '2022-11-22', '1', '66', '3', '1', 'quidem', '13', '9', 'quaerat', '0', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(88, 'JOB0057', 'D714', 'et', 20, 'non', 'voluptas', '4', '35', '3', 'consequatur', 'nesciunt', '2', '1991-01-11', '0', '91', '8', '3', 'expedita', '60', '2', 'quo', '4', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(89, 'JOB0058', 'D756', 'itaque', 48, 'sed', 'odit', '2', '30', '6', 'ut', 'repellendus', '5', '2009-09-15', '0', '38', '7', '2', 'illum', '6', '15', 'commodi', '0', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(90, 'JOB0059', 'D674', 'necessitatibus', 16, 'inventore', 'eum', '5', '34', '10', 'reiciendis', 'nihil', '3', '2003-08-15', '1', '49', '4', '1', 'aut', '30', '20', 'natus', '2', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(91, 'JOB0060', 'D454', 'sit', 48, 'fugit', 'corporis', '1', '56', '9', 'et', 'ad', '4', '1980-05-01', '1', '31', '4', '1', 'deleniti', '60', '16', 'et', '2', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(92, 'JOB0061', 'D124', 'animi', 5, 'tempore', 'quibusdam', '4', '59', '9', 'qui', 'id', '2', '2005-07-19', '0', '45', '1', '1', 'autem', '74', '10', 'impedit', '3', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(93, 'JOB0062', 'D323', 'voluptas', 1, 'rerum', 'rem', '5', '36', '7', 'ratione', 'porro', '3', '2012-10-15', '0', '31', '6', '3', 'nemo', '18', '1', 'nesciunt', '0', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(94, 'JOB0063', 'D250', 'debitis', 14, 'dignissimos', 'qui', '4', '53', '9', 'ex', 'provident', '2', '1970-07-10', '0', '49', '10', '2', 'tempore', '26', '16', 'sapiente', '2', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(95, 'JOB0064', 'D937', 'mollitia', 46, 'vel', 'et', '5', '53', '6', 'dignissimos', 'architecto', '1', '1991-05-25', '1', '51', '3', '2', 'veritatis', '74', '14', 'vitae', '0', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(96, 'JOB0065', 'D979', 'totam', 5, 'quasi', 'aut', '4', '51', '6', 'ut', 'quidem', '4', '1983-10-04', '1', '99', '2', '1', 'quam', '20', '2', 'minus', '0', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(97, 'JOB0066', 'D276', 'laborum', 29, 'quia', 'necessitatibus', '3', '60', '3', 'nesciunt', 'aspernatur', '2', '1992-10-14', '0', '75', '3', '2', 'eius', '7', '18', 'sapiente', '1', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(98, 'JOB0067', 'D408', 'laboriosam', 50, 'corrupti', 'deserunt', '2', '50', '9', 'et', 'vero', '1', '2000-06-01', '1', '46', '4', '1', 'omnis', '30', '7', 'harum', '1', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(99, 'JOB0068', 'D421', 'perferendis', 5, 'aut', 'ut', '1', '54', '5', 'occaecati', 'reprehenderit', '1', '2006-06-21', '1', '58', '8', '2', 'delectus', '17', '15', 'quae', '1', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(100, 'JOB0069', 'D931', 'nesciunt', 43, 'tempora', 'sequi', '5', '58', '6', 'illo', 'quo', '1', '2018-01-28', '1', '82', '5', '1', 'repellendus', '38', '10', 'temporibus', '3', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(101, 'JOB0070', 'D656', 'in', 47, 'accusamus', 'aut', '3', '52', '6', 'rerum', 'ut', '3', '1974-09-27', '0', '100', '8', '3', 'molestias', '36', '18', 'dolores', '1', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(102, 'JOB0071', 'D788', 'et', 50, 'quia', 'perferendis', '2', '54', '9', 'et', 'qui', '4', '1976-07-23', '1', '33', '3', '1', 'magni', '33', '20', 'sit', '3', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(103, 'JOB0072', 'D102', 'dolorum', 30, 'molestiae', 'voluptate', '2', '46', '2', 'et', 'quos', '0', '1976-05-24', '0', '47', '7', '1', 'beatae', '66', '7', 'dolores', '2', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(104, 'JOB0073', 'D824', 'ut', 2, 'et', 'voluptas', '2', '52', '9', 'aspernatur', 'nostrum', '1', '2012-09-04', '1', '41', '9', '2', 'aperiam', '42', '9', 'fugiat', '1', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(105, 'JOB0074', 'D874', 'facilis', 21, 'soluta', 'expedita', '3', '47', '6', 'sunt', 'non', '1', '2013-06-19', '0', '30', '3', '2', 'explicabo', '57', '11', 'neque', '3', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(106, 'JOB0075', 'D706', 'rerum', 41, 'dignissimos', 'est', '5', '30', '10', 'qui', 'ut', '3', '2012-06-25', '1', '40', '9', '2', 'harum', '17', '3', 'aspernatur', '4', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(107, 'JOB0076', 'D759', 'eum', 14, 'enim', 'animi', '2', '49', '1', 'distinctio', 'sed', '5', '1971-12-28', '1', '49', '3', '2', 'dolorem', '58', '12', 'voluptatum', '2', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(108, 'JOB0077', 'D316', 'nihil', 25, 'ratione', 'sunt', '5', '42', '7', 'occaecati', 'nihil', '5', '2010-04-02', '0', '80', '10', '2', 'sint', '97', '4', 'sit', '1', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(109, 'JOB0078', 'D938', 'sit', 48, 'nihil', 'laboriosam', '4', '32', '8', 'nihil', 'quasi', '4', '2002-03-29', '1', '22', '4', '1', 'recusandae', '76', '2', 'aliquid', '2', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(110, 'JOB0079', 'D684', 'aspernatur', 32, 'aliquid', 'et', '4', '54', '5', 'praesentium', 'cum', '3', '1998-11-13', '1', '32', '5', '2', 'saepe', '56', '18', 'est', '2', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(111, 'JOB0080', 'D411', 'nemo', 1, 'distinctio', 'dolore', '3', '45', '2', 'quis', 'voluptatibus', '1', '2003-07-22', '1', '73', '3', '3', 'laborum', '11', '8', 'ut', '0', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(112, 'JOB0081', 'D827', 'blanditiis', 44, 'dolore', 'odio', '2', '58', '5', 'et', 'placeat', '0', '2014-04-13', '1', '80', '2', '1', 'occaecati', '90', '18', 'quae', '0', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(113, 'JOB0082', 'D579', 'velit', 32, 'asperiores', 'ut', '1', '49', '8', 'aut', 'quia', '1', '1990-01-14', '1', '97', '7', '1', 'et', '4', '15', 'et', '3', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(114, 'JOB0083', 'D719', 'saepe', 11, 'repellat', 'dicta', '1', '40', '10', 'id', 'corrupti', '1', '2009-05-23', '1', '98', '10', '3', 'eos', '33', '10', 'qui', '1', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(115, 'JOB0084', 'D856', 'exercitationem', 15, 'voluptas', 'soluta', '4', '43', '3', 'alias', 'atque', '0', '1973-10-18', '0', '46', '2', '3', 'numquam', '88', '17', 'minus', '1', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(116, 'JOB0085', 'D973', 'et', 21, 'a', 'velit', '5', '39', '10', 'rerum', 'quae', '3', '2005-08-19', '1', '87', '5', '2', 'animi', '11', '12', 'voluptatem', '5', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(117, 'JOB0086', 'D963', 'nemo', 37, 'adipisci', 'debitis', '4', '36', '1', 'et', 'et', '1', '1989-07-08', '0', '21', '7', '2', 'omnis', '84', '19', 'suscipit', '2', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(118, 'JOB0087', 'D386', 'placeat', 3, 'harum', 'doloribus', '3', '40', '9', 'ex', 'deserunt', '5', '2017-09-08', '0', '37', '7', '3', 'dicta', '43', '7', 'necessitatibus', '3', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(119, 'JOB0088', 'D578', 'illo', 7, 'id', 'provident', '3', '41', '2', 'voluptas', 'et', '4', '2020-12-19', '1', '58', '3', '2', 'repellendus', '20', '5', 'impedit', '1', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(120, 'JOB0089', 'D517', 'nemo', 50, 'similique', 'ea', '1', '32', '3', 'officia', 'labore', '2', '2012-03-31', '1', '44', '7', '2', 'aliquid', '84', '2', 'vel', '4', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(121, 'JOB0090', 'D718', 'consequatur', 14, 'corporis', 'ratione', '4', '52', '10', 'eos', 'quis', '0', '1979-09-10', '1', '99', '1', '2', 'fuga', '60', '4', 'consectetur', '0', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(122, 'JOB0091', 'D117', 'et', 44, 'asperiores', 'ipsum', '4', '55', '8', 'officia', 'ut', '0', '2008-09-04', '0', '73', '7', '1', 'nisi', '21', '6', 'dolores', '3', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(123, 'JOB0092', 'D840', 'facere', 29, 'eveniet', 'tenetur', '5', '43', '5', 'amet', 'dolor', '1', '2012-12-19', '0', '39', '3', '3', 'commodi', '34', '17', 'earum', '4', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(124, 'JOB0093', 'D335', 'quos', 21, 'ut', 'odit', '1', '43', '2', 'quibusdam', 'ut', '5', '1992-04-01', '0', '43', '4', '2', 'amet', '18', '19', 'fugit', '4', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(125, 'JOB0094', 'D738', 'dolor', 28, 'repudiandae', 'numquam', '4', '56', '2', 'pariatur', 'laboriosam', '5', '1976-01-20', '1', '94', '7', '3', 'quae', '64', '10', 'placeat', '2', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(126, 'JOB0095', 'D921', 'et', 19, 'quo', 'dolor', '2', '35', '6', 'non', 'et', '1', '1978-12-13', '1', '59', '7', '2', 'mollitia', '96', '12', 'qui', '3', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(127, 'JOB0096', 'D491', 'dolorem', 17, 'velit', 'deleniti', '1', '41', '5', 'minus', 'distinctio', '2', '1997-07-27', '1', '27', '9', '2', 'dolore', '64', '11', 'delectus', '1', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(128, 'JOB0097', 'D545', 'quisquam', 22, 'sunt', 'rem', '5', '40', '2', 'nobis', 'ipsum', '0', '2021-12-06', '1', '26', '4', '1', 'quia', '61', '10', 'qui', '4', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(129, 'JOB0098', 'D856', 'qui', 4, 'voluptatem', 'laboriosam', '5', '30', '4', 'eum', 'qui', '0', '2011-10-05', '1', '70', '7', '2', 'quis', '88', '19', 'dolorem', '0', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(130, 'JOB0099', 'D446', 'sequi', 30, 'tenetur', 'eaque', '4', '59', '3', 'reprehenderit', 'sed', '3', '1992-09-06', '0', '36', '7', '1', 'minima', '37', '17', 'laborum', '1', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1),
(131, 'JOB0100', 'D101', 'asperiores', 30, 'culpa', 'omnis', '3', '35', '6', 'excepturi', 'necessitatibus', '3', '2010-04-02', '0', '30', '5', '3', 'cumque', '11', '20', 'reiciendis', '5', '', '2025-06-22 19:54:24', '2025-06-22 19:54:24', 1);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$liEMaBLtZmp854me5qHfgOq/KPBsyV8yMT.EdyVFyOjT9I9Lx.q5i', '2025-06-22 07:50:37', '2025-06-22 07:50:37'),
(2, 'admin2', 'admin2@gmail.com', '$2y$10$MHryMBM0L7Ay1QgLvYSNYOR/s.aWMVON3KbyWAPDGrhhcQy.5YR5.', '2025-06-22 18:32:16', '2025-06-22 18:32:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobentries`
--
ALTER TABLE `jobentries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jobentries`
--
ALTER TABLE `jobentries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
