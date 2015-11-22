-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2015 at 05:37 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ypaymo`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
`catID` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
<<<<<<< HEAD
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`catID`, `name`, `image`) VALUES
(11, 'cat1', 'ER(1)6.png'),
(12, 'cat2', 'modulemap3.jpg'),
(13, 'cat4', 't32.jpg'),
(14, 'hjbhnj', 'IMG_20150724_120046.jpg'),
(15, 'hjbhnj', 'IMG_20150724_1200461.jpg'),
(16, 'gbcshdcj', 'IMG_20150724_120058.jpg'),
(17, 'gbcshdcj', 'IMG_20150724_1200581.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--
=======
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
>>>>>>> 8fbcae07af96c101e7a9f047107e2f19e0afb26d

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
  `image_size_str` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`file_name`, `file_type`, `file_path`, `full_path`, `raw_name`, `orig_name`, `client_name`, `file_ext`, `file_size`, `is_image`, `image_width`, `image_height`, `image_type`, `image_size_str`) VALUES
<<<<<<< HEAD
('ER(1)6.png', 'image/png', 'C:/xampp/htdocs/ypaymo/uploads/', 'C:/xampp/htdocs/ypaymo/uploads/ER(1)6.png', 'ER(1)6', 'ER(1).png', 'ER(1).png', '.png', 37.04, 1, 779, 1094, 'png', 'width="779" height="1094"'),
('IMG_20150724_120046.jpg', 'image/jpeg', 'C:/xampp/htdocs/ypaymo/assets/images/category/', 'C:/xampp/htdocs/ypaymo/assets/images/category/IMG_20150724_120046.jpg', 'IMG_20150724_120046', 'IMG_20150724_120046.jpg', 'IMG_20150724_120046.jpg', '.jpg', 926.03, 1, 1944, 2592, 'jpeg', 'width="1944" height="2592"'),
('IMG_20150724_1200461.jpg', 'image/jpeg', 'C:/xampp/htdocs/ypaymo/assets/images/category/', 'C:/xampp/htdocs/ypaymo/assets/images/category/IMG_20150724_1200461.jpg', 'IMG_20150724_1200461', 'IMG_20150724_120046.jpg', 'IMG_20150724_120046.jpg', '.jpg', 926.03, 1, 1944, 2592, 'jpeg', 'width="1944" height="2592"'),
('IMG_20150724_120058.jpg', 'image/jpeg', 'C:/xampp/htdocs/ypaymo/assets/images/category/', 'C:/xampp/htdocs/ypaymo/assets/images/category/IMG_20150724_120058.jpg', 'IMG_20150724_120058', 'IMG_20150724_120058.jpg', 'IMG_20150724_120058.jpg', '.jpg', 931.54, 1, 1944, 2592, 'jpeg', 'width="1944" height="2592"'),
('IMG_20150724_1200581.jpg', 'image/jpeg', 'C:/xampp/htdocs/ypaymo/assets/images/category/', 'C:/xampp/htdocs/ypaymo/assets/images/category/IMG_20150724_1200581.jpg', 'IMG_20150724_1200581', 'IMG_20150724_120058.jpg', 'IMG_20150724_120058.jpg', '.jpg', 931.54, 1, 1944, 2592, 'jpeg', 'width="1944" height="2592"'),
('IMG_20150724_121423.jpg', 'image/jpeg', 'C:/xampp/htdocs/ypaymo/assets/images/product/', 'C:/xampp/htdocs/ypaymo/assets/images/product/IMG_20150724_121423.jpg', 'IMG_20150724_121423', 'IMG_20150724_121423.jpg', 'IMG_20150724_121423.jpg', '.jpg', 972.37, 1, 1944, 2592, 'jpeg', 'width="1944" height="2592"'),
('IMG_20150916_084250.jpg', 'image/jpeg', 'C:/xampp/htdocs/ypaymo/assets/images/product/', 'C:/xampp/htdocs/ypaymo/assets/images/product/IMG_20150916_084250.jpg', 'IMG_20150916_084250', 'IMG_20150916_084250.jpg', 'IMG_20150916_084250.jpg', '.jpg', 1256.83, 1, 1944, 2592, 'jpeg', 'width="1944" height="2592"'),
('IMG_20150916_085011.jpg', 'image/jpeg', 'C:/xampp/htdocs/ypaymo/assets/images/product/', 'C:/xampp/htdocs/ypaymo/assets/images/product/IMG_20150916_085011.jpg', 'IMG_20150916_085011', 'IMG_20150916_085011.jpg', 'IMG_20150916_085011.jpg', '.jpg', 959.44, 1, 2592, 1944, 'jpeg', 'width="2592" height="1944"'),
('IMG_20150916_0850111.jpg', 'image/jpeg', 'C:/xampp/htdocs/ypaymo/assets/images/product/', 'C:/xampp/htdocs/ypaymo/assets/images/product/IMG_20150916_0850111.jpg', 'IMG_20150916_0850111', 'IMG_20150916_085011.jpg', 'IMG_20150916_085011.jpg', '.jpg', 959.44, 1, 2592, 1944, 'jpeg', 'width="2592" height="1944"'),
('modulemap3.jpg', 'image/jpeg', 'C:/xampp/htdocs/ypaymo/assets/images/category/', 'C:/xampp/htdocs/ypaymo/assets/images/category/modulemap3.jpg', 'modulemap3', 'modulemap3.jpg', 'modulemap3.jpg', '.jpg', 340.04, 1, 1179, 1287, 'jpeg', 'width="1179" height="1287"'),
('t32.jpg', 'image/jpeg', 'C:/xampp/htdocs/ypaymo/assets/images/category/', 'C:/xampp/htdocs/ypaymo/assets/images/category/t32.jpg', 't32', 't3.jpg', 't3.jpg', '.jpg', 30.09, 1, 1339, 555, 'jpeg', 'width="1339" height="555"');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--
=======
('10-best-laptops_8z9p_640.jpg', 'image/jpeg', 'C:/xampp/htdocs/ypaymo/assets/images/category/', 'C:/xampp/htdocs/ypaymo/assets/images/category/10-best-laptops_8z9p_640.jpg', '10-best-laptops_8z9p_640', '10-best-laptops_8z9p_640.jpg', '10-best-laptops_8z9p_640.jpg', '.jpg', 29.18, 1, 496, 331, 'jpeg', 'width="496" height="331"'),
('buying-home-appliances.jpg', 'image/jpeg', 'C:/xampp/htdocs/ypaymo/assets/images/category/', 'C:/xampp/htdocs/ypaymo/assets/images/category/buying-home-appliances.jpg', 'buying-home-appliances', 'buying-home-appliances.jpg', 'buying-home-appliances.jpg', '.jpg', 43.88, 1, 655, 400, 'jpeg', 'width="655" height="400"'),
('images.jpg', 'image/jpeg', 'C:/xampp/htdocs/ypaymo/assets/images/category/', 'C:/xampp/htdocs/ypaymo/assets/images/category/images.jpg', 'images', 'images.jpg', 'images.jpg', '.jpg', 5.47, 1, 259, 194, 'jpeg', 'width="259" height="194"'),
('Models-Ladies-Embroidery-Knitted-Wear-jangomart_com_2.jpg', 'image/jpeg', 'C:/xampp/htdocs/ypaymo/assets/images/category/', 'C:/xampp/htdocs/ypaymo/assets/images/category/Models-Ladies-Embroidery-Knitted-Wear-jangomart_com_2.jpg', 'Models-Ladies-Embroidery-Knitted-Wear-jangomart_com_2', 'Models-Ladies-Embroidery-Knitted-Wear-jangomart_com_.jpg', 'Models-Ladies-Embroidery-Knitted-Wear-jangomart_com_.jpg', '.jpg', 65.43, 1, 520, 469, 'jpeg', 'width="520" height="469"'),
('ngrvanguard_com.jpg', 'image/jpeg', 'C:/xampp/htdocs/ypaymo/assets/images/category/', 'C:/xampp/htdocs/ypaymo/assets/images/category/ngrvanguard_com.jpg', 'ngrvanguard_com', 'ngrvanguard_com.jpg', 'ngrvanguard_com.jpg', '.jpg', 164.73, 1, 550, 309, 'jpeg', 'width="550" height="309"'),
('s392843116634006568_p2_i2_w5802.jpeg', 'image/jpeg', 'C:/xampp/htdocs/ypaymo/assets/images/category/', 'C:/xampp/htdocs/ypaymo/assets/images/category/s392843116634006568_p2_i2_w5802.jpeg', 's392843116634006568_p2_i2_w5802', 's392843116634006568_p2_i2_w580.jpeg', 's392843116634006568_p2_i2_w580.jpeg', '.jpeg', 101.07, 1, 580, 374, 'jpeg', 'width="580" height="374"');
>>>>>>> 8fbcae07af96c101e7a9f047107e2f19e0afb26d

CREATE TABLE IF NOT EXISTS `product` (
`PId` int(20) NOT NULL,
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
  `fileName` varchar(45) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`PId`, `name`, `description`, `availableQuality`, `unitPrice`, `subCategory`, `discount`, `brand`, `warrantyType`, `warrantyPeriod`, `model`, `dimension`, `weight`, `dateAdded`, `fileName`) VALUES
(1, 'watch', 'jnjkcd', 22, 23456, 'c1', 25, 'ekmrm', '2 year', '1', 'fefr', '455tg5', 2, '2015-11-06', ''),
(2, 'wegdhge', 'mc ds,c', 32, 366, 'g1', 35, 'try', 'ygyg', '2', 'dfrb', '2143za', 3, '2015-11-12', 'IMG_20150724_121423.jpg'),
(3, 'bcdhcjd', 'ndf vdmf', 56, 788, 'fg', 343, 'scsc', '2wd', '43', 'egrtg', '355', 323, '2015-11-05', 'IMG_20150916_085011.jpg'),
(4, 'bcdhcjd', 'ndf vdmf', 56, 788, 'fg', 343, 'scsc', '2wd', '43', 'egrtg', '355', 323, '2015-11-05', 'IMG_20150916_0850111.jpg'),
(5, 'OIJFOERDIFMRE', 'hcbj', 4, 67, 'r', 44, 'frvr', 'tf', '7', 'btbvr', '56', 23, '2015-11-27', 'IMG_20150916_084250.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE IF NOT EXISTS `subcategory` (
`scatID` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
<<<<<<< HEAD
  `category` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
=======
  `category` int(5) NOT NULL,
  PRIMARY KEY (`scatID`),
  KEY `category` (`category`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

INSERT INTO `subcategory` (`scatID`, `name`, `category`) VALUES
(1, 'Samsung 2', 14),
(2, 'T shirts', 20);
>>>>>>> 8fbcae07af96c101e7a9f047107e2f19e0afb26d

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`catID`), ADD KEY `image` (`image`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
 ADD PRIMARY KEY (`file_name`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
 ADD PRIMARY KEY (`PId`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
 ADD PRIMARY KEY (`scatID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
MODIFY `catID` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
MODIFY `PId` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
MODIFY `scatID` int(5) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `category`
--
ALTER TABLE `category`
ADD CONSTRAINT `category_ibfk_1` FOREIGN KEY (`image`) REFERENCES `image` (`file_name`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `subcategory`
  ADD CONSTRAINT `subcategory_ibfk_1` FOREIGN KEY (`category`) REFERENCES `category` (`catID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
