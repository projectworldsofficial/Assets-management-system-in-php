-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2016 at 06:15 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `assets`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Table structure for table `assets`
--

CREATE TABLE IF NOT EXISTS assets (
  id int(11) NOT NULL AUTO_INCREMENT,
  userid int(11) NOT NULL,
  title varchar(32) NOT NULL,
  category varchar(32) NOT NULL,
  quantity int(11) NOT NULL,
  price FLOAT NOT NULL,
  details VARCHAR(1000),
  PRIMARY KEY(id)
);

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`first_name`, `last_name`, `email`, `password`) VALUES
('s', 'ds', 'rajith', 'rajith'),
('rajti', 'da', 'rajith', 'rajith'),
('x', 'x', 'rajith', 'rajith'),
('gd', 'fd', 'rajith', 'rajith'),
('da', 'd', 'rajith', 'rajith'),
('rajith', 'thennakoon', 'rajiththennakoonsahdy@gmail.com', 'rajith'),
('rajith', 'ds', 'rajith', 'rajith');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
