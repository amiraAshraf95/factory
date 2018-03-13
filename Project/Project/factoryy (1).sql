-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 10, 2018 at 04:38 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `factoryy`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounting`
--

DROP TABLE IF EXISTS `accounting`;
CREATE TABLE IF NOT EXISTS `accounting` (
  `user id` int(10) NOT NULL,
  `order id` int(10) NOT NULL,
  `electricity` varchar(20) NOT NULL,
  `water` varchar(20) NOT NULL,
  `month` varchar(20) NOT NULL,
  `salary id` int(10) NOT NULL,
  PRIMARY KEY (`user id`,`order id`,`salary id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

DROP TABLE IF EXISTS `attendence`;
CREATE TABLE IF NOT EXISTS `attendence` (
  `User ID` int(10) NOT NULL AUTO_INCREMENT,
  `Date` varchar(20) NOT NULL,
  `Time` varchar(20) NOT NULL,
  `Attend` varchar(20) NOT NULL,
  PRIMARY KEY (`User ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `Client Name` varchar(20) NOT NULL,
  `Address` varchar(20) NOT NULL,
  `Mobile` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `holidays method`
--

DROP TABLE IF EXISTS `holidays method`;
CREATE TABLE IF NOT EXISTS `holidays method` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `holidays method options`
--

DROP TABLE IF EXISTS `holidays method options`;
CREATE TABLE IF NOT EXISTS `holidays method options` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `holidays method id` int(10) NOT NULL,
  `holidays options id` int(10) NOT NULL,
  PRIMARY KEY (`ID`,`holidays method id`,`holidays options id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `holidays method values`
--

DROP TABLE IF EXISTS `holidays method values`;
CREATE TABLE IF NOT EXISTS `holidays method values` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `holidays method options id` int(10) NOT NULL,
  `holiday value` varchar(20) NOT NULL,
  `user id` int(10) NOT NULL,
  PRIMARY KEY (`ID`) USING BTREE,
  KEY `holidays method options id` (`holidays method options id`),
  KEY `user id` (`user id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `holidays options`
--

DROP TABLE IF EXISTS `holidays options`;
CREATE TABLE IF NOT EXISTS `holidays options` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) NOT NULL,
  `Holiday Type` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `machine`
--

DROP TABLE IF EXISTS `machine`;
CREATE TABLE IF NOT EXISTS `machine` (
  `ID` int(10) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Maintanance Date` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
CREATE TABLE IF NOT EXISTS `order` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `ClientID` int(10) NOT NULL,
  `Price` varchar(20) NOT NULL,
  `DeliverDate` varchar(20) NOT NULL,
  `PaymentMethodID` int(10) NOT NULL,
  PRIMARY KEY (`ID`) USING BTREE,
  KEY `Client ID` (`ClientID`),
  KEY `Payment Method ID` (`PaymentMethodID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order details`
--

DROP TABLE IF EXISTS `order details`;
CREATE TABLE IF NOT EXISTS `order details` (
  `productID` int(10) NOT NULL,
  `Unit` varchar(20) NOT NULL,
  `quantity` varchar(20) NOT NULL,
  `orderID` int(10) NOT NULL,
  KEY `product ID` (`productID`) USING BTREE,
  KEY `order ID` (`orderID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) NOT NULL,
  `Physical Address` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment method`
--

DROP TABLE IF EXISTS `payment method`;
CREATE TABLE IF NOT EXISTS `payment method` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment method of values`
--

DROP TABLE IF EXISTS `payment method of values`;
CREATE TABLE IF NOT EXISTS `payment method of values` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `payment options id` int(10) NOT NULL,
  `values` varchar(10) NOT NULL,
  `order id` int(10) NOT NULL,
  PRIMARY KEY (`ID`) USING BTREE,
  KEY `payment options id` (`payment options id`),
  KEY `order id` (`order id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment method options`
--

DROP TABLE IF EXISTS `payment method options`;
CREATE TABLE IF NOT EXISTS `payment method options` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `payment method id` int(10) NOT NULL,
  `options id` int(10) NOT NULL,
  PRIMARY KEY (`ID`) USING BTREE,
  KEY `payment method id` (`payment method id`),
  KEY `options id` (`options id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment options`
--

DROP TABLE IF EXISTS `payment options`;
CREATE TABLE IF NOT EXISTS `payment options` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(20) NOT NULL,
  `Type` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `TypeName` int(10) NOT NULL,
  `TypeSize` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

DROP TABLE IF EXISTS `resources`;
CREATE TABLE IF NOT EXISTS `resources` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `Typename` varchar(20) NOT NULL,
  `Quantity` varchar(20) NOT NULL,
  `Unit` varchar(20) NOT NULL,
  `Date` varchar(20) NOT NULL,
  `Price` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

DROP TABLE IF EXISTS `salary`;
CREATE TABLE IF NOT EXISTS `salary` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `Worker ID` int(10) NOT NULL,
  `Salary Details ID` int(10) NOT NULL,
  PRIMARY KEY (`ID`,`Worker ID`,`Salary Details ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `salary details`
--

DROP TABLE IF EXISTS `salary details`;
CREATE TABLE IF NOT EXISTS `salary details` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `Value` varchar(20) NOT NULL,
  `Borrowings` varchar(20) NOT NULL,
  `Deduction Money` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `store room`
--

DROP TABLE IF EXISTS `store room`;
CREATE TABLE IF NOT EXISTS `store room` (
  `resources id` int(10) NOT NULL,
  `order id` int(10) NOT NULL,
  `storing date` varchar(20) NOT NULL,
  KEY `resources id` (`resources id`),
  KEY `order id` (`order id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Mobile` varchar(20) NOT NULL,
  `Age` int(20) NOT NULL,
  `WorkHours` varchar(20) NOT NULL,
  `TypeID` int(10) NOT NULL,
  `Address` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(10) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `Type ID` (`TypeID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `FirstName`, `LastName`, `Mobile`, `Age`, `WorkHours`, `TypeID`, `Address`, `Email`, `Password`) VALUES
(1, 'amira', 'ashraf', '01157245735', 23, '152', 1, 'nasr city', 'amiraashraf@gmail', '1'),
(2, 'Yara', 'Ahmed', '0123456', 22, '7', 2, 'nasr city', 'yara@hotmail.com', '123'),
(4, 'Mayar', 'Ahmed', '01000000', 21, '8', 1, 'New cairo', 'mayar@hotmail.com', '789');

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

DROP TABLE IF EXISTS `usertype`;
CREATE TABLE IF NOT EXISTS `usertype` (
  `ID` int(10) NOT NULL,
  `Name` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`ID`, `Name`) VALUES
(1, 'Admin'),
(2, 'Manager');

-- --------------------------------------------------------

--
-- Table structure for table `usertype-page`
--

DROP TABLE IF EXISTS `usertype-page`;
CREATE TABLE IF NOT EXISTS `usertype-page` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `User ID` int(10) NOT NULL,
  `Page ID` int(10) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `User ID` (`User ID`),
  KEY `Page ID` (`Page ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `holidays method`
--
ALTER TABLE `holidays method`
  ADD CONSTRAINT `holidays method_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `order` (`PaymentMethodID`);

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`ClientID`) REFERENCES `client` (`ID`);

--
-- Constraints for table `order details`
--
ALTER TABLE `order details`
  ADD CONSTRAINT `order details_ibfk_1` FOREIGN KEY (`orderID`) REFERENCES `order` (`ID`),
  ADD CONSTRAINT `order details_ibfk_2` FOREIGN KEY (`productID`) REFERENCES `product` (`ID`);

--
-- Constraints for table `payment method of values`
--
ALTER TABLE `payment method of values`
  ADD CONSTRAINT `payment method of values_ibfk_1` FOREIGN KEY (`payment options id`) REFERENCES `payment method options` (`ID`),
  ADD CONSTRAINT `payment method of values_ibfk_2` FOREIGN KEY (`order id`) REFERENCES `order` (`ID`);

--
-- Constraints for table `payment method options`
--
ALTER TABLE `payment method options`
  ADD CONSTRAINT `payment method options_ibfk_1` FOREIGN KEY (`payment method id`) REFERENCES `payment method` (`ID`),
  ADD CONSTRAINT `payment method options_ibfk_2` FOREIGN KEY (`options id`) REFERENCES `payment options` (`ID`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `order details` (`productID`);

--
-- Constraints for table `resources`
--
ALTER TABLE `resources`
  ADD CONSTRAINT `resources_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `store room` (`resources id`);

--
-- Constraints for table `store room`
--
ALTER TABLE `store room`
  ADD CONSTRAINT `store room_ibfk_1` FOREIGN KEY (`order id`) REFERENCES `order` (`ID`),
  ADD CONSTRAINT `store room_ibfk_2` FOREIGN KEY (`resources id`) REFERENCES `resources` (`ID`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`TypeID`) REFERENCES `usertype` (`ID`);

--
-- Constraints for table `usertype-page`
--
ALTER TABLE `usertype-page`
  ADD CONSTRAINT `usertype-page_ibfk_1` FOREIGN KEY (`User ID`) REFERENCES `usertype` (`ID`),
  ADD CONSTRAINT `usertype-page_ibfk_2` FOREIGN KEY (`Page ID`) REFERENCES `pages` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
