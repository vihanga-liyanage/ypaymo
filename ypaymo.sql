SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `catID` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`catID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

INSERT INTO `category` (`catID`, `name`) VALUES
(13, 'Laptops'),
(14, 'Smart Phones'),
(15, 'Home Appliences'),
(16, 'Electronic Items'),
(20, 'Mens wear'),
(24, 'Ladies ware');

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `file_name` varchar(100) NOT NULL,
  `file_type` varchar(50) NOT NULL,
  `file_path` varchar(100) NOT NULL,
  `full_path` varchar(150) NOT NULL,
  `raw_name` varchar(100) NOT NULL,
  `orig_name` varchar(100) NOT NULL,
  `client_name` varchar(100) NOT NULL,
  `file_ext` varchar(20) NOT NULL,
  `file_size` float NOT NULL,
  `is_image` tinyint(4) NOT NULL,
  `image_width` int(15) NOT NULL,
  `image_height` int(15) NOT NULL,
  `image_type` varchar(50) NOT NULL,
  `image_size_str` varchar(100) NOT NULL,
  PRIMARY KEY (`file_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `pID` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `availableQty` int(5) NOT NULL,
  `discount` decimal(3,0) DEFAULT NULL,
  `brand` varchar(15) DEFAULT NULL,
  `warrantyType` varchar(20) NOT NULL,
  `warrantyPeriod` varchar(15) DEFAULT NULL,
  `model` varchar(15) DEFAULT NULL,
  `dimension` varchar(15) DEFAULT NULL,
  `weight` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`pID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

INSERT INTO `product` (`pID`, `name`, `description`, `price`, `availableQty`, `discount`, `brand`, `warrantyType`, `warrantyPeriod`, `model`, `dimension`, `weight`) VALUES
(10, 'USB Mouse', 'USB 2.0, Plug &amp; Play, 6 months waranty', 790, 5, 5, '', 'Shop warranty', '3', '', '130*90', 100),
(11, 'Toshiba power adaptor', '19v 3.95A', 2500, 5, 5, '', 'Company warranty', '12', '', '30*90', 240),
(12, 'Sony tipo dual', 'Attractive design', 15000, 6, 12, 'Sony', 'Company warranty', '24', 'ST21i', '53*89', 113),
(13, 'Xiaomi Power bank 10400mAh', 'Durable power bank', 5600, 5, 0, 'Xiaomi', 'Company warranty', '12', '', '', 254);

DROP TABLE IF EXISTS `subcategory`;
CREATE TABLE IF NOT EXISTS `subcategory` (
  `scatID` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `category` int(5) NOT NULL,
  PRIMARY KEY (`scatID`),
  KEY `category` (`category`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

INSERT INTO `subcategory` (`scatID`, `name`, `category`) VALUES
(1, 'Samsung 2', 14),
(2, 'T shirts', 20);

ALTER TABLE `subcategory`
  ADD CONSTRAINT `subcategory_ibfk_1` FOREIGN KEY (`category`) REFERENCES `category` (`catID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
