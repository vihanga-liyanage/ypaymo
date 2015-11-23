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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

INSERT INTO `category` (`catID`, `name`) VALUES
(1, 'Laptops'),
(2, 'Smart Phones'),
(3, 'Home Appliences'),
(4, 'Electronic Items'),
(5, 'Mens wear'),
(6, 'Ladies ware');

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

INSERT INTO `image` (`file_name`, `file_type`, `file_path`, `full_path`, `raw_name`, `orig_name`, `client_name`, `file_ext`, `file_size`, `is_image`, `image_width`, `image_height`, `image_type`, `image_size_str`) VALUES
('cartImage1.jpg', 'image/jpeg', 'C:/xampp/htdocs/ypaymo/assets/images/product/', 'C:/xampp/htdocs/ypaymo/assets/images/product/cartImage1.jpg', 'cartImage1', 'cartImage1.jpg', 'cartImage1.jpg', '.jpg', 8.74, 1, 320, 150, 'jpeg', 'width="320" height="150"');

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `PId` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `availableQuality` int(11) NOT NULL,
  `unitPrice` int(20) NOT NULL,
  `subCategory` varchar(50) NOT NULL,
  `discount` int(11) NOT NULL,
  `brand` varchar(45) NOT NULL,
  `warrantyType` varchar(45) NOT NULL,
  `warrantyPeriod` varchar(45) NOT NULL,
  `model` varchar(45) NOT NULL,
  `dimension` varchar(45) NOT NULL,
  `weight` int(11) NOT NULL,
  `dateAdded` date NOT NULL,
  `fileName` varchar(45) NOT NULL,
  PRIMARY KEY (`PId`),
  KEY `product_ibfk_1` (`fileName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

INSERT INTO `product` (`PId`, `name`, `description`, `availableQuality`, `unitPrice`, `subCategory`, `discount`, `brand`, `warrantyType`, `warrantyPeriod`, `model`, `dimension`, `weight`, `dateAdded`, `fileName`) VALUES
(6, 'test1', 'test', 5, 500, 'category', 5, 'samsung', 'company', '12', 'xxx', '12x35', 100, '2015-11-27', 'cartImage1.jpg');

DROP TABLE IF EXISTS `subcategory`;
CREATE TABLE IF NOT EXISTS `subcategory` (
  `scatID` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `category` int(5) NOT NULL,
  PRIMARY KEY (`scatID`),
  KEY `category` (`category`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

INSERT INTO `subcategory` (`scatID`, `name`, `category`) VALUES
(1, 'Samsung 2', 2),
(2, 'T shirts', 5);


ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`fileName`) REFERENCES `image` (`file_name`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `subcategory`
  ADD CONSTRAINT `subcategory_ibfk_1` FOREIGN KEY (`category`) REFERENCES `category` (`catID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
