-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 04, 2021 at 08:17 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salontakip`
--

-- --------------------------------------------------------

--
-- Table structure for table `rezervasyonlar`
--

DROP TABLE IF EXISTS `rezervasyonlar`;
CREATE TABLE IF NOT EXISTS `rezervasyonlar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Rezervler` varchar(1000) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `Kaydeden` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `rezervasyonlar`
--

INSERT INTO `rezervasyonlar` (`id`, `Rezervler`, `tarih`, `Kaydeden`) VALUES
(47, '[0,1,10,15]', '2021-05-04 07:28:32', 'john@example.com'),
(45, 'null', '2021-05-04 07:22:44', 'john@example.com'),
(46, '[10,15]', '2021-05-04 07:28:26', 'john@example.com'),
(43, 'null', '2021-05-04 07:22:42', 'john@example.com'),
(44, 'null', '2021-05-04 07:22:42', 'john@example.com'),
(42, '[0,1,2,3,4,5,6,7,9,17,19,22,23,24,25,26,32,34]', '2021-05-04 07:00:27', 'john@example.com'),
(41, '[0,1,2,3,4,5,6,7,9,17,19,24,25,26,32,34]', '2021-05-03 23:37:30', 'john@example.com'),
(40, '[0,1,2,3,4,5,6,7,9,17,19,24,25,26,32,34]', '2021-05-03 23:37:29', 'john@example.com'),
(39, '[0,1,2,3,4,5,6,7,9,17,19,32]', '2021-05-03 23:37:24', 'john@example.com'),
(37, '[7,9,17,19,32]', '2021-05-03 23:30:13', 'john@example.com'),
(38, '[0,1,6,7,9,17,19,32]', '2021-05-03 23:37:19', 'john@example.com'),
(36, '[7,19,32]', '2021-05-03 23:29:48', 'john@example.com'),
(48, '[0,1,8,9,10,15]', '2021-05-04 07:28:39', 'john@example.com'),
(49, '[0,1,2,3,4,5,8,9,10,15]', '2021-05-04 07:29:40', 'john@example.com'),
(50, '[0,1,2,3,4,5,8,9,10,15,26,27,28]', '2021-05-04 07:42:23', 'john@example.com'),
(51, '[0,1,2,3,4,5,8,9,10,11,12,15,26,27,28]', '2021-05-04 07:42:28', 'john@example.com'),
(52, '[0,1,2,3,4,5,8,9,10,11,12,15,26,27,28]', '2021-05-04 07:42:29', 'john@example.com'),
(53, '[0,1,2,3,4,5,8,9,10,11,12,15,22,23,26,27,28]', '2021-05-04 07:42:33', 'john@example.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
