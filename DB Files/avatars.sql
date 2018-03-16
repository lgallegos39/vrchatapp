-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 16, 2018 at 03:51 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vrchat`
--

-- --------------------------------------------------------

--
-- Table structure for table `avatars`
--

DROP TABLE IF EXISTS `avatars`;
CREATE TABLE IF NOT EXISTS `avatars` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `description` text,
  `preview_photo` varchar(255) DEFAULT NULL,
  `file` varchar(50) DEFAULT NULL,
  `tags` varchar(100) DEFAULT NULL,
  `upvotes` int(10) DEFAULT NULL,
  `upload_date` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `avatars`
--

INSERT INTO `avatars` (`id`, `name`, `description`, `preview_photo`, `file`, `tags`, `upvotes`, `upload_date`, `created`, `modified`) VALUES
(1, 'Test', 'This is a test for this database', NULL, NULL, 'test, more test', 500, '2018-03-07 06:34:00', '2018-03-07 06:34:00', '2018-03-07 06:34:00'),
(2, 'Test 2', NULL, NULL, NULL, NULL, NULL, NULL, '2018-03-12 22:05:53', '2018-03-12 22:05:53');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
