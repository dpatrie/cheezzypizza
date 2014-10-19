-- phpMyAdmin SQL Dump
-- version 4.0.10.2
-- http://www.phpmyadmin.net
--
-- Host: 127.8.87.2:3306
-- Generation Time: Oct 18, 2014 at 03:01 AM
-- Server version: 5.5.37
-- PHP Version: 5.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `chezzypizza`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `id_customer` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id_customer`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pizzas`
--

CREATE TABLE IF NOT EXISTS `pizzas` (
  `id_pizza` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_customer` int(10) unsigned NOT NULL,
  `has_tomato_sauce` tinyint(1) NOT NULL DEFAULT 0,
  `has_cheese` tinyint(1) NOT NULL DEFAULT 0,
  `has_pepperoni` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_pizza`),
  KEY `id_customer` (`id_customer`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pizzas`
--
ALTER TABLE `pizzas` ADD CONSTRAINT `pizzas_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customers` (`id_customer`) ON DELETE CASCADE ON UPDATE CASCADE;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
