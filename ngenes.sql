-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 12, 2012 at 09:58 PM
-- Server version: 5.5.22
-- PHP Version: 5.3.10-1ubuntu3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ngenes`
--

-- --------------------------------------------------------

--
-- Table structure for table `attachment`
--

CREATE TABLE IF NOT EXISTS `attachment` (
  `id_attach` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `file` varchar(100) DEFAULT NULL,
  `type` varchar(10) DEFAULT NULL,
  `caption` varchar(255) DEFAULT NULL,
  `description` text,
  `alternate` varchar(255) DEFAULT NULL,
  `date` date NOT NULL,
  `status` enum('published','deleted') NOT NULL DEFAULT 'published',
  PRIMARY KEY (`id_attach`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=55 ;

--
-- Dumping data for table `attachment`
--

INSERT INTO `attachment` (`id_attach`, `name`, `file`, `type`, `caption`, `description`, `alternate`, `date`, `status`) VALUES
(54, 'Screenshot_from_2012-05-08_20:08:24.png', '03a3f82831eeee22a88050d39a8786a7.png', 'image/png', NULL, NULL, NULL, '2012-05-12', 'published');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
