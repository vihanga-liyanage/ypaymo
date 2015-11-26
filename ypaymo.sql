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
('hcm8.jpeg', 'image/jpeg', 'C:/xampp/htdocs/ypaymo/assets/images/products/', 'C:/xampp/htdocs/ypaymo/assets/images/products/hcm8.jpeg', 'hcm8', 'hcm8.jpeg', 'hcm8.jpeg', '.jpeg', 26.64, 1, 604, 453, 'jpeg', 'width="604" height="453"'),
('htc-one-m8.jpg', 'image/jpeg', 'C:/xampp/htdocs/ypaymo/assets/images/products/', 'C:/xampp/htdocs/ypaymo/assets/images/products/htc-one-m8.jpg', 'htc-one-m8', 'htc-one-m8.jpg', 'htc-one-m8.jpg', '.jpg', 12.49, 1, 160, 212, 'jpeg', 'width="160" height="212"'),
('samsung-galaxy-s6-edge-plus.jpg', 'image/jpeg', 'C:/xampp/htdocs/ypaymo/assets/images/products/', 'C:/xampp/htdocs/ypaymo/assets/images/products/samsung-galaxy-s6-edge-plus.jpg', 'samsung-galaxy-s6-edge-plus', 'samsung-galaxy-s6-edge-plus.jpg', 'samsung-galaxy-s6-edge-plus.jpg', '.jpg', 9.66, 1, 160, 212, 'jpeg', 'width="160" height="212"'),
('sony-xperia-m5.jpg', 'image/jpeg', 'C:/xampp/htdocs/ypaymo/assets/images/products/', 'C:/xampp/htdocs/ypaymo/assets/images/products/sony-xperia-m5.jpg', 'sony-xperia-m5', 'sony-xperia-m5.jpg', 'sony-xperia-m5.jpg', '.jpg', 10.78, 1, 160, 212, 'jpeg', 'width="160" height="212"'),
('sony-xperia-tipo-dual1.jpg', 'image/jpeg', 'C:/xampp/htdocs/ypaymo/assets/images/products/', 'C:/xampp/htdocs/ypaymo/assets/images/products/sony-xperia-tipo-dual1.jpg', 'sony-xperia-tipo-dual1', 'sony-xperia-tipo-dual.jpg', 'sony-xperia-tipo-dual.jpg', '.jpg', 8.41, 1, 139, 184, 'jpeg', 'width="139" height="184"');

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `PId` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `availableQuality` int(11) NOT NULL,
  `unitPrice` int(20) NOT NULL,
  `subCategory` int(15) NOT NULL,
  `discount` int(11) DEFAULT '0',
  `brand` varchar(45) NOT NULL,
  `warrantyType` varchar(45) NOT NULL,
  `warrantyPeriod` varchar(45) DEFAULT '0',
  `model` varchar(45) DEFAULT 'N/A',
  `dimension` varchar(45) DEFAULT 'N/A',
  `weight` int(11) DEFAULT '0',
  `dateAdded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fileName` varchar(45) NOT NULL,
  PRIMARY KEY (`PId`),
  KEY `product_ibfk_1` (`fileName`),
  KEY `subCategory` (`subCategory`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

INSERT INTO `product` (`PId`, `name`, `description`, `availableQuality`, `unitPrice`, `subCategory`, `discount`, `brand`, `warrantyType`, `warrantyPeriod`, `model`, `dimension`, `weight`, `dateAdded`, `fileName`) VALUES
(10, 'Sony tipo dual', 'Low cost smart phone', 5, 15500, 4, 0, 'Sony', 'Company', '12', 'ST21i', '', 120, '2015-11-26 08:42:09', 'sony-xperia-tipo-dual1.jpg'),
(11, ' HTC One (M8i)', 'Best htc smart phone', 3, 55000, 5, 0, 'HTC', 'Company', '24', '', '', 0, '2015-11-26 10:01:47', 'hcm8.jpeg'),
(12, 'HTC One (M8)', 'Best htc smart phone', 5, 45000, 5, 0, 'HTC', 'None', '', '', '', 0, '2015-11-26 10:08:03', 'htc-one-m8.jpg'),
(13, ' Sony Xperia M5', 'Sony is the best', 2, 34000, 4, 0, 'Sony', 'Company', '36', '', '', 0, '2015-11-26 10:09:07', 'sony-xperia-m5.jpg'),
(14, 'Samsung Galaxy S6 edge+ Duos', 'Samsung smart phones are cheap', 6, 96000, 1, 0, 'Samsung', 'Software', '24', '', '', 0, '2015-11-26 10:12:16', 'samsung-galaxy-s6-edge-plus.jpg');

DROP TABLE IF EXISTS `subcategory`;
CREATE TABLE IF NOT EXISTS `subcategory` (
  `scatID` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `category` int(5) NOT NULL,
  PRIMARY KEY (`scatID`),
  KEY `category` (`category`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

INSERT INTO `subcategory` (`scatID`, `name`, `category`) VALUES
(1, 'Samsung', 2),
(2, 'T shirts', 5),
(3, 'Television', 3),
(4, 'Sony', 2),
(5, 'HTC', 2);


ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`subCategory`) REFERENCES `subcategory` (`scatID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`fileName`) REFERENCES `image` (`file_name`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `subcategory`
  ADD CONSTRAINT `subcategory_ibfk_1` FOREIGN KEY (`category`) REFERENCES `category` (`catID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
