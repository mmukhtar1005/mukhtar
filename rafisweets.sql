-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: April 23, 2019 at 10:50 PM
-- Server version: 5.6.36-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rafisweets`
--

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE IF NOT EXISTS `order_details` (
  `orderid` int(20) NOT NULL AUTO_INCREMENT,
  `uname` varchar(50) NOT NULL,
  `uemail` varchar(50) NOT NULL,
  `umobile` decimal(20,0) NOT NULL,
  `transaction_id` varchar(200) NOT NULL,
  `products_id` varchar(200) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `products_qty` varchar(200) NOT NULL,
  `total_price` varchar(200) NOT NULL,
  `cart_total` decimal(20,0) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `order_status` varchar(100) NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`orderid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`orderid`, `uname`, `uemail`, `umobile`, `transaction_id`, `products_id`, `product_name`, `products_qty`, `total_price`, `cart_total`, `order_date`, `order_status`) VALUES
-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(20) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(100) NOT NULL,
  `product_image` varchar(50) NOT NULL,
  `product_price` decimal(50,0) NOT NULL,
  `product_desc` varchar(200) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_image`, `product_price`, `product_desc`, `product_quantity`) VALUES
(1, 'PLAIN BARFI', 'img/plain_barfi.jpg', '200', 'A rich Indian sweet made from the finest ingredients - MIlk, Khoa and other natural flavouring substances including cardamom.', 0),
(2, 'MOTICHOOR LADOO', 'img/motichoor.jpg', '100', 'A rich Indian sweet made from the finest ingredients - MIlk, khoa, boondi and other natural flavouring substances including cardamom.', 0),
(3, 'SPECIAL LASSI', 'img/lassi.jpg', '20', 'A rich Indian beverage made from the finest ingredients - MIlk, Curd and other natural flavouring substances including cardamom.', 0),
(4, 'GULAB JAMUN', 'img/gulab_jamun.jpg', '200', 'A rich Indian sweet made from the finest ingredients - MIlk, Khoa and other natural flavouring substances including cardamom.', 0),
(5, 'PANEER', 'img/paneer.jpg', '300', 'Cottage cheese.', 0),
(6, 'SPECIAL SOHAN HALWA', 'img/sohan_halwa.jpg', '200', 'A rich Indian sweet made from the finest ingredients - MIlk, Khoa and other natural flavouring substances including cardamom.', 0),
(7, 'SPECIAL SOHAN HALWA', 'img/sohan_halwa.jpg', '200', 'A rich Indian sweet made from the finest ingredients - MIlk, Khoa and other natural flavouring substances including cardamom.', 0),
(8, 'PISTA BARFI', 'img/pista.jpg', '350', 'A rich Indian sweet made from the finest ingredients - MIlk, Khoa and other natural flavouring substances including cardamom.', 0),
(9, 'GAJAR HALWA', 'img/gajar_halwa.jpg', '250', 'A rich Indian sweet made from the finest ingredients - MIlk, Khoa, Carrots and other natural flavouring substances including cardamom.', 0),
(10, 'CHAM CHAM', 'img/chamcham.jpg', '200', 'A rich Indian sweet made from the finest ingredients - MIlk, Khoa and other natural flavouring substances including cardamom.', 0),
(11, 'PLAIN KHOYA', 'img/khoa.jpg', '300', 'A rich Indian sweet made from the finest ingredients - MIlk, Khoa and other natural flavouring substances including cardamom.', 0),
(12, 'PAPDI', 'img/papdi.jpg', '300', 'A rich Indian sweet made from the finest ingredients - MIlk, Khoa, gram flour and other natural flavouring substances including cardamom.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

CREATE TABLE IF NOT EXISTS `user_register` (
  `user_id` int(20) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(25) NOT NULL,
  `user_mobile` decimal(20,0) NOT NULL,
  `user_address1` varchar(100) NOT NULL,
  `user_address2` varchar(50) NOT NULL,
  `user_city` varchar(50) NOT NULL,
  `user_pincode` int(10) NOT NULL,
  `user_addr_state` varchar(50) NOT NULL,
  `user_otp` int(50) NOT NULL,
  `user_verified` varchar(1) NOT NULL DEFAULT 'f',
  `user_date_of_reg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_email` (`user_email`,`user_mobile`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`user_id`, `user_name`, `user_email`, `user_password`, `user_mobile`, `user_address1`, `user_address2`, `user_city`, `user_pincode`, `user_addr_state`, `user_otp`, `user_verified`, `user_date_of_reg`) VALUES
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
