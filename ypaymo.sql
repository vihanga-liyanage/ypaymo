DROP DATABASE IF EXISTS `ypaymo`;

CREATE DATABASE `ypaymo`;

USE `ypaymo`;

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `catID` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `image` int(15) DEFAULT NULL,
  PRIMARY KEY (`catID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

INSERT INTO `category` (`catID`, `name`, `image`) VALUES
(1, 'cat1', 0),
(2, 'cat2', 2),
(3, 'Furniture', 12);

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
  PRIMARY KEY (`scatID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
