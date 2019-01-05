-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 05, 2019 at 07:08 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `missu books`
--

-- --------------------------------------------------------

--
-- Table structure for table `additem`
--

CREATE TABLE IF NOT EXISTS `additem` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ITEMNAME` varchar(100) NOT NULL,
  `PRICE` int(11) NOT NULL,
  `IMG` varchar(200) NOT NULL,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `itmid` int(11) NOT NULL,
  `itname` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE IF NOT EXISTS `checkout` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `pincode` varchar(50) NOT NULL,
  `city` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `landmark` varchar(100) NOT NULL,
  `userid` varchar(100) NOT NULL,
  `pid` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`id`, `name`, `mobile`, `pincode`, `city`, `address`, `landmark`, `userid`, `pid`, `status`) VALUES
(1, 'Deepak lodhi', '9754551185', '475005', 'Gwalior', 'Tekanpur Gwalior M.P. Gurunanak colony ', 'tekanpur  dabra', 'deepak@gmail.com', 290, 'cod'),
(2, 'Deepak lodhi', '', '475005', 'Select city', '', '', 'deepak@gmail.com', 919, 'cod'),
(3, 'Deepak lodhi', '', '475005', 'Select city', '', '', 'deepak@gmail.com', 763, 'cod'),
(4, 'Deepak lodhi', '', '475005', 'Select city', '', '', 'deepak@gmail.com', 489, 'cod'),
(5, 'Deepak lodhi', '', '475005', 'Select city', '', '', 'deepak@gmail.com', 218, 'cod'),
(6, 'Deepak lodhi', '', '475005', 'Select City', '', '', 'deepak@gmail.com', 158, 'cod'),
(7, 'Deepak lodhi', '9754551185', '475005', 'Gwalior', '', '', 'deepak@gmail.com', 520, 'cod'),
(8, 'Deepak lodhi', '9754551185', '475005', 'Gwalior', '', '', 'deepak@gmail.com', 842, 'cod'),
(9, '', '', '475005', 'Select City', '', '', '', 188, 'unpaid'),
(10, 'Deepak lodhi', '', '47500', 'Select City', '', '', 'deepak@gmail.com', 743, 'cod'),
(11, 'Deepak lodhi', '', '5555555555', 'Select City', '', '', 'deepak@gmail.com', 605, 'cod'),
(12, 'arun', '', '123456789', 'Select City', '', '', 'a@gmail.com', 696, 'cod'),
(13, 'arun', '', '2134567890', 'Select City', '', '', 'a@gmail.com', 665, 'cod'),
(14, 'arun', '', '112345678', 'Select City', '', '', 'a@gmail.com', 174, 'cod'),
(15, 'Deepak lodhi', '', 'ASDFG', 'Select City', '', '', 'deepak@gmail.com', 504, 'cod'),
(16, 'Deepak lodhi', '', '45', 'Select City', '', '', 'deepak@gmail.com', 340, 'cod'),
(17, 'Deepak lodhi', '', '2345678', 'Select City', '', '', 'deepaklodhi1703@gmail.com', 256, 'cod'),
(18, 'Deepak lodhi', '', '234567', 'Select City', '', '', 'deepaklodhi1703@gmail.com', 30, 'cod'),
(19, 'Deepak lodhi', '', '23456789', 'Select City', '', '', 'deepaklodhi1703@gmail.com', 825, 'cod'),
(20, 'Deepak lodhi', '', '789', 'Select City', '', '', 'deepaklodhi1703@gmail.com', 391, 'cod'),
(21, 'Deepak lodhi', '', 'erty', 'Select City', '', '', 'deepaklodhi1703@gmail.com', 916, 'cod'),
(22, 'Deepak lodhi', '', '546423', 'Select City', '', '', 'deepaklodhi1703@gmail.com', 523, 'cod'),
(23, 'harpal', '163', '466', 'Gwalior', 'uiheeu  f 3i ifuuef ', 'tekanpur  dabra', '$em', 743, 'cod'),
(24, 'Deepak lodhi', '', 'rtytuiop[', 'Select City', '', '', 'deepaklodhi1703@gmail.com', 287, 'cod'),
(25, 'arun', '', 'ertyui', 'Select City', '', '', 'a@gmail.com', 574, 'cod'),
(26, 'amaan', '', '123', 'Select City', 'fghjkl', '', 'amaan@gmail.com', 879, 'cod'),
(27, 'Deepak lodhi', '01234567890', '123456', 'Gwalior', 'Tekanpur Gwalior M.P. Gurunanak colony', 'tekanpur  dabra', 'deepaklodhi1703@gmail.com', 370, 'cod'),
(28, 'Deepak lodhi', '01234567890', '123456', 'Gwalior', 'Tekanpur Gwalior M.P. Gurunanak colony', 'tekanpur  dabra', 'deepaklodhi1703@gmail.com', 187, 'cod'),
(29, 'Deepak lodhi', '9754551185', '78945', 'Gwalior', 'Tekanpur Gwalior M.P. Gurunanak colony', 'tekanpur  dabra', 'deepaklodhi1703@gmail.com', 357, 'cod'),
(30, 'Deepak Lodhi', '08962008479', '475005', 'Gwalior', 'Tekanpur', 'Mp', 'a@gmail.com', 974, 'cod'),
(31, 'amaan', '', '1234567', 'Select City', '', '', 'amaan@gmail.com', 15, 'cod'),
(32, 'risab', '', '123456', 'Select City', '', '', 'risab@gmail.com', 829, 'cod'),
(33, 'amaan', '', '123456', 'Select City', '', '', 'amaan@gmail.com', 225, 'cod'),
(34, 'amaan', '', '12345', 'Select City', '', '', 'amaan@gmail.com', 430, 'cod'),
(35, 'amaan', '', '2345', 'Select City', '', '', 'amaan@gmail.com', 51, 'unpaid');

-- --------------------------------------------------------

--
-- Table structure for table `order1`
--

CREATE TABLE IF NOT EXISTS `order1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `itnm` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` varchar(50) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `transid` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `order1`
--

INSERT INTO `order1` (`id`, `itnm`, `price`, `quantity`, `total`, `userid`, `transid`, `status`, `date`) VALUES
(1, ' Mrs. HEMINGWAY', '499', 1, '4', 'deepak@gmail.com', '158', 'cod', '25/01/18'),
(2, ' Mrs. HEMINGWAY', '499', 1, '4', 'deepak@gmail.com', '520', 'cod', '25/01/18'),
(3, ' Mrs. HEMINGWAY', '499', 1, '4', 'deepak@gmail.com', '842', 'cod', '25/01/18'),
(4, ' KITE RUNNER', '600', 1, '6', 'deepak@gmail.com', '605', 'cod', '26/01/18'),
(5, ' harry potter', '500', 1, '1', 'a@gmail.com', '696', 'cod', '26/01/18'),
(6, ' KITE RUNNER', '600', 1, '1', 'a@gmail.com', '696', 'cod', '26/01/18'),
(7, ' harry potter', '500', 1, '1', 'a@gmail.com', '665', 'cod', '26/01/18'),
(8, ' KITE RUNNER', '600', 1, '1', 'a@gmail.com', '665', 'cod', '26/01/18'),
(9, ' KITE RUNNER', '600', 1, '6', 'a@gmail.com', '174', 'cod', '26/01/18'),
(10, ' KITE RUNNER', '600', 1, '6', 'deepak@gmail.com', '504', 'cod', '26/01/18'),
(11, ' KITE RUNNER', '600', 1, '600 /-', 'deepak@gmail.com', '340', 'cod', '26/01/18'),
(12, ' KITE RUNNER', '600', 1, '1599 /-', 'deepaklodhi1703@gmail.com', '256', 'cod', '26/01/18'),
(13, ' Mrs. HEMINGWAY', '499', 1, '1599 /-', 'deepaklodhi1703@gmail.com', '256', 'cod', '26/01/18'),
(14, ' harry potter', '500', 1, '1599 /-', 'deepaklodhi1703@gmail.com', '256', 'cod', '26/01/18'),
(15, ' DESSEN', '250', 1, '250 /-', 'deepaklodhi1703@gmail.com', '30', 'cod', '26/01/18'),
(16, ' Mrs. HEMINGWAY', '499', 1, '499 /-', 'deepaklodhi1703@gmail.com', '825', 'cod', '26/01/18'),
(17, ' KITE RUNNER', '600', 1, '1699 /-', 'deepaklodhi1703@gmail.com', '391', 'cod', '26/01/18'),
(18, ' KITE RUNNER', '600', 1, '1699 /-', 'deepaklodhi1703@gmail.com', '391', 'cod', '26/01/18'),
(19, ' Mrs. HEMINGWAY', '499', 1, '1699 /-', 'deepaklodhi1703@gmail.com', '391', 'cod', '26/01/18'),
(20, ' DESSEN', '250', 1, '250 /-', 'deepaklodhi1703@gmail.com', '916', 'cod', '06/03/18'),
(21, ' DESSEN', '250', 1, '250 /-', 'deepaklodhi1703@gmail.com', '523', 'cod', '08/03/18'),
(22, ' DESSEN', '250', 1, '250 /-', '$em', '743', 'cod', '13/03/18'),
(23, ' PRIDE', '600', 1, '600 /-', 'deepaklodhi1703@gmail.com', '287', 'cod', '14/03/18'),
(24, ' 2 STATES', '400', 1, '400 /-', 'a@gmail.com', '574', 'cod', '13/04/18'),
(25, ' DESSEN', '250', 1, '250 /-', 'amaan@gmail.com', '879', 'cod', '22/05/18'),
(26, ' 2 STATES', '400', 1, '400 /-', 'deepaklodhi1703@gmail.com', '370', 'cod', '29/05/18'),
(27, ' 2 STATES', '400', 1, '400 /-', 'deepaklodhi1703@gmail.com', '187', 'cod', '29/05/18'),
(28, ' 2 STATES', '400', 1, '650 /-', 'deepaklodhi1703@gmail.com', '357', 'cod', '27/06/18'),
(29, ' DESSEN', '250', 1, '650 /-', 'deepaklodhi1703@gmail.com', '357', 'cod', '27/06/18'),
(30, ' DESSEN', '250', 1, '750 /-', 'a@gmail.com', '974', 'cod', '22/07/18'),
(31, ' 2 states', '500', 1, '750 /-', 'a@gmail.com', '974', 'cod', '22/07/18'),
(32, ' PRIDE', '600', 1, '1000 /-', 'amaan@gmail.com', '15', 'cod', '30/07/18'),
(33, ' 2 STATES', '400', 1, '1000 /-', 'amaan@gmail.com', '15', 'cod', '30/07/18'),
(34, ' DESSEN', '250', 1, '1250 /-', 'risab@gmail.com', '829', 'cod', '19/10/18'),
(35, ' PRIDE', '600', 1, '1250 /-', 'risab@gmail.com', '829', 'cod', '19/10/18'),
(36, ' 2 STATES', '400', 1, '1250 /-', 'risab@gmail.com', '829', 'cod', '19/10/18'),
(37, ' patanjali', '45', 1, '45 /-', 'amaan@gmail.com', '225', 'cod', '04/01/19'),
(38, ' hello', '120', 1, '120 /-', 'amaan@gmail.com', '430', 'cod', '04/01/19'),
(39, ' hell000', '120', 3, '405 /-', 'amaan@gmail.com', '51', 'unpaid', '05/01/19'),
(40, ' patanjali', '45', 1, '405 /-', 'amaan@gmail.com', '51', 'unpaid', '05/01/19');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE IF NOT EXISTS `reg` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `emai` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`Id`, `emai`, `password`) VALUES
(1, 'admin@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`Id`, `Name`, `email`, `password`) VALUES
(29, 'user', 'user@gmail.com', '123456'),
(30, 'user1', 'user1@gmail.com', '1234567');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
