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
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`catID`),
  KEY `image` (`image`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

INSERT INTO `category` (`catID`, `name`, `image`) VALUES
(13, 'Laptops', '10-best-laptops_8z9p_640.jpg'),
(14, 'Smart Phones', 'ngrvanguard_com.jpg'),
(15, 'Home Appliences', 'buying-home-appliances.jpg'),
(16, 'Electronic Items', 'images.jpg'),
(20, 'Mens wear', 's392843116634006568_p2_i2_w5802.jpeg'),
(24, 'Ladies ware', 'Models-Ladies-Embroidery-Knitted-Wear-jangomart_com_2.jpg');

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
('10-best-laptops_8z9p_640.jpg', 'image/jpeg', 'C:/xampp/htdocs/ypaymo/assets/images/category/', 'C:/xampp/htdocs/ypaymo/assets/images/category/10-best-laptops_8z9p_640.jpg', '10-best-laptops_8z9p_640', '10-best-laptops_8z9p_640.jpg', '10-best-laptops_8z9p_640.jpg', '.jpg', 29.18, 1, 496, 331, 'jpeg', 'width="496" height="331"'),
('buying-home-appliances.jpg', 'image/jpeg', 'C:/xampp/htdocs/ypaymo/assets/images/category/', 'C:/xampp/htdocs/ypaymo/assets/images/category/buying-home-appliances.jpg', 'buying-home-appliances', 'buying-home-appliances.jpg', 'buying-home-appliances.jpg', '.jpg', 43.88, 1, 655, 400, 'jpeg', 'width="655" height="400"'),
('images.jpg', 'image/jpeg', 'C:/xampp/htdocs/ypaymo/assets/images/category/', 'C:/xampp/htdocs/ypaymo/assets/images/category/images.jpg', 'images', 'images.jpg', 'images.jpg', '.jpg', 5.47, 1, 259, 194, 'jpeg', 'width="259" height="194"'),
('Models-Ladies-Embroidery-Knitted-Wear-jangomart_com_2.jpg', 'image/jpeg', 'C:/xampp/htdocs/ypaymo/assets/images/category/', 'C:/xampp/htdocs/ypaymo/assets/images/category/Models-Ladies-Embroidery-Knitted-Wear-jangomart_com_2.jpg', 'Models-Ladies-Embroidery-Knitted-Wear-jangomart_com_2', 'Models-Ladies-Embroidery-Knitted-Wear-jangomart_com_.jpg', 'Models-Ladies-Embroidery-Knitted-Wear-jangomart_com_.jpg', '.jpg', 65.43, 1, 520, 469, 'jpeg', 'width="520" height="469"'),
('ngrvanguard_com.jpg', 'image/jpeg', 'C:/xampp/htdocs/ypaymo/assets/images/category/', 'C:/xampp/htdocs/ypaymo/assets/images/category/ngrvanguard_com.jpg', 'ngrvanguard_com', 'ngrvanguard_com.jpg', 'ngrvanguard_com.jpg', '.jpg', 164.73, 1, 550, 309, 'jpeg', 'width="550" height="309"'),
('s392843116634006568_p2_i2_w5802.jpeg', 'image/jpeg', 'C:/xampp/htdocs/ypaymo/assets/images/category/', 'C:/xampp/htdocs/ypaymo/assets/images/category/s392843116634006568_p2_i2_w5802.jpeg', 's392843116634006568_p2_i2_w5802', 's392843116634006568_p2_i2_w580.jpeg', 's392843116634006568_p2_i2_w580.jpeg', '.jpeg', 101.07, 1, 580, 374, 'jpeg', 'width="580" height="374"');

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


ALTER TABLE `category`
  ADD CONSTRAINT `category_ibfk_1` FOREIGN KEY (`image`) REFERENCES `image` (`file_name`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `subcategory`
  ADD CONSTRAINT `subcategory_ibfk_1` FOREIGN KEY (`category`) REFERENCES `category` (`catID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
