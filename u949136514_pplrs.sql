-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2015 at 04:23 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u949136514_pplrs`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE IF NOT EXISTS `administrator` (
  `Administrator_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Administrator_password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Administrator_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`Administrator_id`, `Administrator_password`) VALUES
('mddoron', 'thisisthepasswordfornow'),
('clarice', '1d5b9408250398ef48838319d546eb6f');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `Reserved_guests` int(11) NOT NULL,
  `Cust_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Invited_guests` int(11) NOT NULL,
  `Cust_id` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Cust_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Reserved_guests`, `Cust_name`, `Invited_guests`, `Cust_id`, `Password`) VALUES
(0, 'Chuvakels', 0, 'chuva', '9264ef46e8a9529f6c8daa99b1f741b4'),
(0, 'Bryan Doron', 0, 'achiisan', '9af4b6a27e038b354e536cdb2efcd4a3'),
(0, 'Qyle San Juan', 0, 'qsanjuan', 'b19dea29338102d389fc77162cfea6ab'),
(0, 'Papa Lor', 0, 'papalor', '46fd489e5a66222c54c1230da66b8c52'),
(0, 'Test User', 0, 'testapp', '296724b2b052970bcaf7e3df9e7a3b3f'),
(0, 'Lor Casalme', 0, 'lorenz', '52bde969edbc81193b8d9a80fff86343');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE IF NOT EXISTS `food` (
  `Food_id` int(11) NOT NULL AUTO_INCREMENT,
  `Food_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Food_type` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Price_piece` float NOT NULL,
  `Admin_id` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `image_url` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Food_description` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Food_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`Food_id`, `Food_name`, `Food_type`, `Price_piece`, `Admin_id`, `image_url`, `Food_description`) VALUES
(3, 'Ham & Cheese', '', 50, '', 'images/pizza3.png', ''),
(4, 'Pepperoni ', '', 50, '', 'images/pizza4.png', ''),
(5, 'Simply Cheese', '', 50, '', 'images/pizza5.png', ''),
(6, 'Cheese Omelette', 'Pizza', 52.5, 'achiisan', 'images/pizza6.png', 'Cheese Pizza Topped with Omelette Sprinkles'),
(7, 'Chicken & Ham', 'Pizza', 50, 'achiisan', 'images/pizza7.png', ''),
(8, 'Fire Breather', 'Pizza', 80, 'achiisan', 'images/pizza3.png', ''),
(9, 'Double Bacon Cheeseburger', 'Pizza', 50, 'achiisan', 'images/pizza1.png', ''),
(10, 'Supreme', 'Pizza', 90, 'achiisan', 'images/pizza4.png', ''),
(11, 'Beef Overload', 'Pizza', 45, 'achiisan', 'images/pizza1.png', 'Pizza Topped with Beef Toppings'),
(12, 'Hawaiian', 'Pizza', 50, '', 'images/hawaian.png', 'Hawaiian Special'),
(13, 'Double Bacon Cheeseburger', 'Pizza', 50, '', 'images/dbcheeseburger.png', 'Double Bacon Cheeseburger Inspired Pizza');

-- --------------------------------------------------------

--
-- Table structure for table `food_plan`
--

CREATE TABLE IF NOT EXISTS `food_plan` (
  `Fplan_id` int(1) NOT NULL,
  `Total_Cost` double NOT NULL,
  `Cust_id` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Fplan_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Fplan_date` date NOT NULL,
  `Flag` int(11) NOT NULL,
  `Num_guests` int(11) NOT NULL,
  `Num_reserved` int(11) NOT NULL,
  `Fplan_time` time NOT NULL,
  PRIMARY KEY (`Fplan_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `food_plan`
--

INSERT INTO `food_plan` (`Fplan_id`, `Total_Cost`, `Cust_id`, `Fplan_name`, `Fplan_date`, `Flag`, `Num_guests`, `Num_reserved`, `Fplan_time`) VALUES
(6, 4320, 'achiisan', 'Papa Lor', '2014-11-30', 1, 20, 0, '00:00:00'),
(5, 0, 'achiisan', 'Bryans Party', '2014-11-30', 1, 20, 0, '00:00:00'),
(4, 52.5, 'achiisan', 'John Mayer', '2016-07-18', 1, 10, 0, '00:00:00'),
(3, 0, 'achiisan', 'Birthday ko', '2015-07-18', 1, 18, 0, '00:00:00'),
(2, 7130, 'achiisan', 'The Party Popper', '2014-12-17', 1, 20, 0, '00:00:00'),
(1, 4570, 'achiisan', 'Birthday ni Clarice', '2015-05-29', 1, 20, 0, '00:00:00'),
(7, 4030, 'achiisan', 'Birthday Ni Mommy', '2014-11-30', 1, 20, 0, '01:00:00'),
(8, 2822.5, 'achiisan', 'Kens Birthday Party', '2014-12-25', 1, 25, 0, '10:00:00'),
(9, 52.5, 'achiisan', 'Yehey', '2014-12-12', 1, 15, 0, '09:00:00'),
(10, 610, 'papalor', 'My Party', '2014-11-30', 1, 12, 0, '14:11:00'),
(11, 150, 'papalor', 'Pizza Partey', '2014-12-16', 1, 10, 0, '00:12:00'),
(12, 3385, 'papalor', '22', '2014-12-31', 1, 90, 0, '11:11:00'),
(13, 350, 'papalor', 'My Party', '2015-11-12', 1, 5, 0, '11:11:00'),
(14, 0, 'achiisan', 'My Party', '2014-12-20', 1, 15, 0, '10:11:00'),
(15, 3380, 'achiisan', 'My Party!', '2014-12-27', 1, 12, 0, '11:11:00'),
(16, 4225, 'achiisan', 'The Party Popper', '2014-12-27', 1, 19, 0, '11:11:00'),
(17, 0, 'achiisan', 'The Party@Papalor''s', '2014-12-04', 1, 12, 0, '08:00:00'),
(18, 1450, 'achiisan', 'Bebeq''s Party', '2014-12-02', 1, 20, 18, '22:23:00'),
(19, 2895, 'achiisan', 'Bebeq''s Party2', '2014-12-03', 1, 12, 27, '11:11:00'),
(20, 2400, 'achiisan', 'rehfg', '2014-12-12', 1, 10, 0, '18:00:00'),
(21, 1305, 'achiisan', 'Tarqqq!', '2014-12-02', 1, 10, 0, '23:10:00'),
(22, 4115, 'achiisan', 'The Party', '2014-12-02', 1, 19, 1, '23:10:00'),
(23, 1260, 'achiisan', 'Ttest', '2014-12-03', 1, 5, 10, '10:01:00'),
(24, 302.5, 'achiisan', 'Deo''s Party', '2014-12-02', 1, 5, 1, '11:30:00'),
(25, 512.5, 'achiisan', 'John Mayer', '2014-12-03', 1, 10, 10, '10:11:00'),
(26, 2250, 'achiisan', 'm', '2014-12-27', 1, 5, 1, '11:11:00'),
(27, 275, 'achiisan', 'Bryan''s Party', '2014-12-12', 1, 12, 5, '08:00:00'),
(28, 0, 'achiisan', 'Hello Party', '2014-11-12', 1, 10, 18, '06:24:00'),
(29, 0, 'achiisan', 'Mark''s Party', '2014-12-31', 1, 15, 1, '10:10:00'),
(30, 1522.5, 'achiisan', 'Mark''s Second Party', '2014-12-12', 1, 15, 1, '08:08:00'),
(31, 1300, 'achiisan', 'Le Partey', '2014-11-11', 1, 12, 0, '00:12:00'),
(32, 2340, 'achiisan', 'bebeq', '2014-12-12', 1, 12, 0, '10:10:00'),
(33, 1365, 'achiisan', 'bebeq', '2014-12-12', 1, 12, 12, '11:11:00'),
(34, 3810, 'achiisan', 'My party', '2014-10-10', 1, 10, 25, '09:09:00'),
(35, 2280, 'achiisan', '1', '2103-01-11', 1, 1, 20, '11:11:00'),
(36, 6930, 'testapp', 'Slumber Party', '2015-11-29', 1, 56, 0, '18:00:00'),
(37, 35845, 'lorenz', 'Holiday Special', '2014-12-25', 1, 54, 312, '20:00:00'),
(38, 1300, 'achiisan', 'party', '2014-12-19', 1, 12, 23, '12:12:00'),
(39, 2170, 'achiisan', 'Sir Mark''s Party', '2014-12-19', 1, 12, 15, '01:00:00'),
(40, 1200, 'achiisan', 'Chelsie''s Party', '2014-12-22', 1, 10, 1, '11:11:00'),
(41, 1300, 'achiisan', 'HUHUHU', '2024-01-31', 1, 12, 0, '13:05:00'),
(42, 4630, 'achiisan', 'BRYAN''S CELEBRATION', '2020-05-04', 1, 30, 42, '10:12:00'),
(43, 5990, 'achiisan', 'HGY', '2012-04-12', 1, 12, 38, '20:09:00'),
(44, 3620, 'achiisan', 'My Party', '2015-01-17', 1, 12, 27, '12:12:00'),
(45, 2080, 'achiisan', 'Bryan', '2015-01-16', 1, 12, 12, '00:12:00');

-- --------------------------------------------------------

--
-- Table structure for table `food_plan_food`
--

CREATE TABLE IF NOT EXISTS `food_plan_food` (
  `foodcode` int(11) NOT NULL AUTO_INCREMENT,
  `Fplan_id` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Food_id` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Servings` int(11) NOT NULL,
  PRIMARY KEY (`foodcode`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=215 ;

--
-- Dumping data for table `food_plan_food`
--

INSERT INTO `food_plan_food` (`foodcode`, `Fplan_id`, `Food_id`, `Servings`) VALUES
(167, '27', '15', 5),
(166, '26', '10', 11),
(165, '25', '7', 5),
(164, '25', '6', 5),
(163, '24', '7', 5),
(162, '24', '6', 1),
(161, '23', '6', 10),
(160, '22', '3', 37),
(159, '22', '15', 3),
(158, '21', '12', 11),
(157, '21', '6', 0),
(156, '21', '15', 1),
(155, '20', '3', 20),
(154, '20', '15', 0),
(153, '19', '7', 12),
(152, '19', '15', 15),
(151, '18', '7', 15),
(150, '18', '15', 18),
(149, '17', '13', 0),
(148, '16', '7', 18),
(147, '16', '6', 22),
(146, '15', '8', 12),
(145, '15', '7', 12),
(144, '14', '7', 0),
(143, '14', '3', 0),
(142, '13', '5', 2),
(141, '13', '4', 5),
(140, '12', '14', 12),
(139, '12', '11', 15),
(138, '11', '7', 0),
(137, '11', '3', 1),
(136, '11', '2', 2),
(135, '10', '6', 4),
(134, '10', '4', 4),
(133, '10', '3', 4),
(132, '9', '7', 0),
(131, '9', '6', 1),
(130, '8', '7', 12),
(129, '8', '6', 15),
(128, '7', '7', 12),
(127, '7', '6', 24),
(126, '6', '10', 20),
(125, '5', '6', 0),
(124, '5', '5', 0),
(123, '4', '6', 1),
(122, '3', '10', 0),
(121, '3', '8', 0),
(120, '3', '3', 0),
(119, '3', '2', 0),
(118, '2', '13', 12),
(117, '2', '10', 18),
(116, '2', '4', 16),
(115, '2', '3', 15),
(114, '1', '12', 5),
(113, '1', '8', 10),
(112, '1', '7', 20),
(111, '1', '2', 18),
(110, '1', '1', 16),
(168, '28', '15', 18),
(169, '29', '10', 15),
(170, '30', '6', 15),
(171, '30', '10', 0),
(172, '31', '7', 12),
(173, '31', '10', 0),
(174, '32', '10', 12),
(175, '32', '11', 0),
(176, '33', '6', 12),
(177, '34', '7', 10),
(178, '34', '10', 15),
(179, '35', '7', 10),
(180, '35', '11', 10),
(181, '36', '15', 56),
(182, '36', '5', 0),
(183, '36', '8', 0),
(184, '36', '12', 0),
(185, '37', '5', 4),
(186, '37', '6', 12),
(187, '37', '7', 11),
(188, '37', '9', 98),
(189, '37', '11', 10),
(190, '37', '12', 90),
(191, '37', '13', 87),
(192, '38', '5', 5),
(193, '38', '7', 4),
(194, '38', '8', 5),
(195, '38', '9', 9),
(196, '39', '7', 5),
(197, '39', '8', 10),
(198, '40', '3', 10),
(199, '40', '7', 0),
(200, '41', '3', 12),
(201, '41', '8', 0),
(202, '41', '12', 0),
(203, '42', '3', 8),
(204, '42', '8', 3),
(205, '42', '9', 10),
(206, '42', '10', 12),
(207, '42', '13', 9),
(208, '43', '8', 1),
(209, '43', '9', 12),
(210, '43', '10', 21),
(211, '43', '12', 4),
(212, '44', '3', 12),
(213, '44', '8', 15),
(214, '45', '8', 12);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
