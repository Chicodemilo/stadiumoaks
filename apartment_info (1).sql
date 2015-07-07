-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 07, 2015 at 03:18 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `apartment_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `captcha`
--

CREATE TABLE IF NOT EXISTS `captcha` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` int(11) NOT NULL,
  `ip_address` varchar(16) NOT NULL,
  `word` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1174 ;

--
-- Dumping data for table `captcha`
--

INSERT INTO `captcha` (`id`, `time`, `ip_address`, `word`) VALUES
(1172, 1435687261, '::1', '26U98X'),
(1173, 1435687306, '::1', 'S8PG31');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `message` varchar(400) NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `first_name`, `last_name`, `email`, `phone`, `message`, `time`) VALUES
(36, 'Harold', 'Tester', 'asdf@sf.com', '234234', 'sgaergerg greg erg', '2015-04-08 13:47:43'),
(41, 'Test', 'test', 'jsla@jslj.xom', '37927', 'test message', '2015-05-14 11:20:33'),
(42, 'test8b', 'tester', 'sdas@dgsa.com', '23523', 'Moble Contact test', '2015-05-14 11:37:53'),
(43, 'test8b', 'tester', 'jsdj@jsl.com', '3973', 'Test from mobile contact 2', '2015-05-14 11:39:39'),
(44, 'Checking', 'CSS2', 'test8@sjl.comb', '739783927', 'This is a test to see if the sent page works', '2015-06-05 11:41:54'),
(45, 'Test', 'tester', 'test8@sjl.comb', '423432422', 'This is a test to see if the sent page works', '2015-06-05 11:44:36');

-- --------------------------------------------------------

--
-- Table structure for table `floorplans`
--

CREATE TABLE IF NOT EXISTS `floorplans` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `bedroom` int(2) NOT NULL,
  `bathroom` decimal(10,2) NOT NULL,
  `square_footage` int(5) NOT NULL,
  `units_available` int(5) NOT NULL,
  `is_available` varchar(1) NOT NULL,
  `rent` int(6) NOT NULL,
  `deposit` int(6) NOT NULL,
  `description` varchar(400) NOT NULL,
  `floorplan_pic` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `floorplans`
--

INSERT INTO `floorplans` (`id`, `name`, `bedroom`, `bathroom`, `square_footage`, `units_available`, `is_available`, `rent`, `deposit`, `description`, `floorplan_pic`) VALUES
(10, 'The Cosmopolitan', 2, '1.50', 800, 8, 'Y', 950, 550, 'Each of these units features stunning hardwood floors and marble countertops.  Spend the evening on your patio overlooking our beautiful pool or relaxing in your garden tub.', 'stadiumoaks21sm.png'),
(11, 'The Angelo', 1, '1.00', 560, 3, 'Y', 910, 500, 'Small yet filled with the elegance you deserve. Each of these units features stunning hardwood floors and marble countertops. ', 'stadiumoaks11sm.png'),
(12, 'The Hampshire', 2, '2.50', 1080, 2, 'Y', 1230, 600, 'Each of these units features stunning hardwood floors and marble countertops. Spend the evening on your patio overlooking our beautiful pool or relaxing in your garden tub.', 'stadiumoaks21sm.png');

-- --------------------------------------------------------

--
-- Table structure for table `maint_request`
--

CREATE TABLE IF NOT EXISTS `maint_request` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` varchar(400) NOT NULL,
  `time` datetime NOT NULL,
  `unit_number` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `maint_request`
--

INSERT INTO `maint_request` (`id`, `first_name`, `last_name`, `email`, `phone`, `message`, `time`, `unit_number`) VALUES
(1, 'Fred', 'Test', 'fred@test.com', '555.555.5555', 'This isn''t a real request for maintenance.  This is a system test.  Don''t reply or respond.', '2015-04-08 17:19:11', '345'),
(5, 'Test', 'tester', 'sdas@dgsa.com', '234234', '12323232', '2015-05-14 11:30:20', '333'),
(6, 'Test', 'tester', 'sdas@dgsa.com', '232', 'Test from mobile Main Req', '2015-05-14 11:44:28', '321');

-- --------------------------------------------------------

--
-- Table structure for table `main_info`
--

CREATE TABLE IF NOT EXISTS `main_info` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `property_name` varchar(150) NOT NULL,
  `property_phone` varchar(20) NOT NULL,
  `property_address` varchar(70) NOT NULL,
  `property_city` varchar(40) NOT NULL,
  `property_state` varchar(2) NOT NULL,
  `property_zip` int(5) NOT NULL,
  `property_email` varchar(60) NOT NULL,
  `property_website` varchar(50) NOT NULL,
  `property_slogan` varchar(200) NOT NULL,
  `property_description` varchar(400) NOT NULL,
  `property_amenities_text` varchar(400) NOT NULL,
  `property_pictures_text` varchar(400) NOT NULL,
  `property_name_font` varchar(20) NOT NULL,
  `property_name_font_bold` varchar(1) NOT NULL,
  `property_name_font_italic` varchar(1) NOT NULL,
  `property_name_font_space` varchar(20) NOT NULL,
  `property_color_1` varchar(7) NOT NULL,
  `property_color_2` varchar(7) NOT NULL,
  `property_color_3` varchar(7) NOT NULL,
  `property_facebook` varchar(70) NOT NULL,
  `property_twitter` varchar(70) NOT NULL,
  `property_instagram` varchar(70) NOT NULL,
  `property_google_plus` varchar(70) NOT NULL,
  `property_management_name` varchar(35) NOT NULL,
  `property_management_url` varchar(60) NOT NULL,
  `property_emergency_phone` varchar(20) NOT NULL,
  `keyword_one` varchar(25) NOT NULL,
  `keyword_two` varchar(25) NOT NULL,
  `keyword_three` varchar(25) NOT NULL,
  `keyword_four` varchar(25) NOT NULL,
  `keyword_five` varchar(25) NOT NULL,
  `keyword_six` varchar(25) NOT NULL,
  `keyword_seven` varchar(25) NOT NULL,
  `template` int(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `main_info`
--

INSERT INTO `main_info` (`id`, `property_name`, `property_phone`, `property_address`, `property_city`, `property_state`, `property_zip`, `property_email`, `property_website`, `property_slogan`, `property_description`, `property_amenities_text`, `property_pictures_text`, `property_name_font`, `property_name_font_bold`, `property_name_font_italic`, `property_name_font_space`, `property_color_1`, `property_color_2`, `property_color_3`, `property_facebook`, `property_twitter`, `property_instagram`, `property_google_plus`, `property_management_name`, `property_management_url`, `property_emergency_phone`, `keyword_one`, `keyword_two`, `keyword_three`, `keyword_four`, `keyword_five`, `keyword_six`, `keyword_seven`, `template`) VALUES
(1, 'Autumn Willow Apartments', '(866) 800-4727', '3100 Silverleaf Dr', 'Austin', 'TX', 78757, 'info@autumnwillow.com', 'autumnwillow', 'Exquisite Living - Close to Everything', 'Autumn Willow is a beautifully landscaped apartment community close to everything you need. Blocks from great restaurants, shopping and entertainment and minutes from Angelo State.', '', 'Autumn Willow is a beautifully landscaped apartment community close to everything you need. Blocks from great restaurants, shopping and entertainment and minutes from Angelo State.', 'arial', '', '', '', 'fff8ce', 'd17b0f', '669ac4', 'www.facebook.com/autumnwillow', 'www.twitter.com/autumnwillow', 'www.instagram.com/autumnwillow', 'www.plus.google.com/autumnwillow', 'Icann Properties', 'www.icann-properties.com', '5126190380', 'Autumn Willow Apartments', 'Austin', 'TX', 'Apartments', '', '', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE IF NOT EXISTS `membership` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(35) NOT NULL,
  `last_name` varchar(35) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(50) NOT NULL,
  `role` varchar(11) NOT NULL,
  `verified` varchar(3) NOT NULL,
  `last_login` datetime NOT NULL,
  `get_site_notify` varchar(1) NOT NULL,
  `get_messages` varchar(1) NOT NULL,
  `get_maint` varchar(1) NOT NULL,
  `get_pre_ap` varchar(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`id`, `first_name`, `last_name`, `username`, `password`, `email`, `role`, `verified`, `last_login`, `get_site_notify`, `get_messages`, `get_maint`, `get_pre_ap`) VALUES
(4, 'Bay', 'Rum', 'bayrummedia', '49c6eb5bdcb0f884b3bd89194f65929d', 'miles@bayrummedia.com', 'master', 'Y', '2015-06-29 13:36:44', 'Y', 'Y', 'Y', 'Y'),
(6, 'Freddie', 'Tester', 'tester_9', 'ad6bb1fcf3b373073cb78862413d968f', 'mileschick@gmail.com', 'user', 'Y', '0000-00-00 00:00:00', 'Y', 'Y', 'Y', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `office_hours`
--

CREATE TABLE IF NOT EXISTS `office_hours` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `day_type` varchar(100) NOT NULL,
  `open_hour` int(2) NOT NULL,
  `open_min` int(2) NOT NULL,
  `open_am_pm` varchar(2) NOT NULL,
  `close_hour` int(2) NOT NULL,
  `close_min` int(2) NOT NULL,
  `close_am_pm` varchar(2) NOT NULL,
  `day_condition` varchar(50) NOT NULL,
  `hours_order` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `office_hours`
--

INSERT INTO `office_hours` (`id`, `day_type`, `open_hour`, `open_min`, `open_am_pm`, `close_hour`, `close_min`, `close_am_pm`, `day_condition`, `hours_order`) VALUES
(34, 'Monday - Friday', 9, 0, 'am', 5, 0, 'pm', 'Closed For Lunch', 1),
(37, 'Sunday', 9, 0, 'am', 5, 0, 'pm', 'Closed', 9),
(39, 'Saturday', 10, 0, 'am', 3, 0, 'pm', 'Closed For Lunch', 8);

-- --------------------------------------------------------

--
-- Table structure for table `our_amenities_list`
--

CREATE TABLE IF NOT EXISTS `our_amenities_list` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `active` varchar(1) NOT NULL,
  `select_units` varchar(1) NOT NULL,
  `extra_fees` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `our_amenities_list`
--

INSERT INTO `our_amenities_list` (`id`, `name`, `active`, `select_units`, `extra_fees`) VALUES
(2, 'Accepts Electronic Payments', 'N', 'N', 'N'),
(3, 'Affordable Housing', 'N', 'N', 'N'),
(4, 'All Bills Paid', 'N', 'N', 'N'),
(5, 'Balcony', 'Y', 'N', 'N'),
(6, 'Basketball Court', 'N', 'N', 'N'),
(7, 'Business Center', 'N', 'N', 'N'),
(8, 'Cable Ready', 'N', 'N', 'N'),
(9, 'Cable Included', 'N', 'N', 'N'),
(10, 'Ceiling Fan(s)', 'N', 'N', 'N'),
(11, 'Clubhouse', 'Y', 'N', 'N'),
(12, 'Covered Parking', 'Y', 'N', 'N'),
(13, 'Disability Access', 'Y', 'Y', 'N'),
(14, 'Dishwasher', 'Y', 'N', 'N'),
(15, 'Enclosed Yards', 'N', 'N', 'N'),
(16, 'Extra Storage', 'N', 'N', 'N'),
(17, 'Fireplace', 'Y', 'N', 'N'),
(18, 'Fitness Center', 'Y', 'N', 'N'),
(19, 'Furnished Available', 'N', 'N', 'N'),
(20, 'Garage', 'N', 'N', 'N'),
(21, 'Garden Tub', 'N', 'N', 'N'),
(22, 'Gas Range', 'N', 'N', 'N'),
(23, 'Gated Access', 'N', 'N', 'N'),
(24, 'Hardwood Flooring', 'N', 'N', 'N'),
(25, 'High Speed Internet Access', 'Y', 'N', 'N'),
(26, 'Internet Included', 'Y', 'N', 'N'),
(27, 'Laundry Facility', 'Y', 'N', 'N'),
(28, 'Microwaves', 'Y', 'N', 'N'),
(29, 'Oversized Closets', 'Y', 'N', 'N'),
(30, 'Pets', 'Y', 'N', 'N'),
(31, 'Playground', 'N', 'N', 'N'),
(32, 'Se Habla Espanol', 'N', 'N', 'N'),
(33, 'Security Systems', 'N', 'N', 'N'),
(34, 'Short Term Leases Available', 'N', 'N', 'N'),
(35, 'Smoke Free', 'N', 'N', 'N'),
(36, 'Some Paid Utilities', 'N', 'N', 'N'),
(37, 'Stainless Steel Appliances', 'N', 'N', 'N'),
(38, 'Swimming Pool', 'Y', 'N', 'N'),
(39, 'Tennis Court', 'N', 'N', 'N'),
(40, 'Vaulted Ceilings', 'N', 'N', 'N'),
(41, 'Washer & Dryer Connections', 'N', 'N', 'N'),
(42, 'Washer & Dryer In Unit', 'N', 'N', 'N'),
(43, 'Wireless Internet Access', 'N', 'N', 'N'),
(44, 'Yards', 'N', 'N', 'N'),
(45, 'Accepts Credit Card Payments', 'N', 'N', 'N'),
(46, '55+ Community', 'N', 'N', 'N'),
(47, '65+ Community', 'N', 'N', 'N'),
(48, 'Swimming Pools', 'N', 'N', 'N'),
(49, 'Tennis Courts', 'N', 'N', 'N'),
(50, 'Seniors Community', 'N', 'N', 'N'),
(51, 'Dog Park', 'N', 'N', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `pet_policy`
--

CREATE TABLE IF NOT EXISTS `pet_policy` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(100) NOT NULL,
  `pet_deposit` int(6) NOT NULL,
  `pet_deposit_refundable` int(6) NOT NULL,
  `restrictions` varchar(450) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `pet_policy`
--

INSERT INTO `pet_policy` (`id`, `type`, `pet_deposit`, `pet_deposit_refundable`, `restrictions`) VALUES
(13, 'Pets Allowed - Restrictions Apply', 500, 200, 'No aggressive breeds.  35 pound weight limit.');

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE IF NOT EXISTS `pictures` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `caption` varchar(120) NOT NULL,
  `cover_pic` varchar(1) NOT NULL,
  `logo` varchar(1) NOT NULL,
  `management_logo` varchar(1) NOT NULL,
  `amenities_page_main_pic` varchar(1) NOT NULL,
  `picture_page_main_pic` varchar(1) NOT NULL,
  `pic_order` int(3) DEFAULT NULL,
  `active` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `pictures`
--

INSERT INTO `pictures` (`id`, `name`, `caption`, `cover_pic`, `logo`, `management_logo`, `amenities_page_main_pic`, `picture_page_main_pic`, `pic_order`, `active`) VALUES
(13, 'PICT0007.jpg', '', 'Y', 'N', 'N', 'N', 'N', 6, 'Y'),
(14, 'PICT0012.jpg', '', 'N', 'N', 'N', 'N', 'N', 2, 'Y'),
(15, 'PICT0018.jpg', '', 'N', 'N', 'N', 'N', 'N', 3, 'Y'),
(16, 'PICT0020.jpg', '', 'N', 'N', 'N', 'N', 'N', 4, 'Y'),
(17, 'PICT0022.jpg', '', 'N', 'N', 'N', 'N', 'N', 5, 'Y'),
(18, 'PICT0028.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliq', 'N', 'N', 'N', 'N', 'N', 1, 'Y'),
(19, 'PICT0030.jpg', '', 'N', 'N', 'N', 'N', 'N', 7, 'Y'),
(20, 'PICT0042.jpg', '', 'N', 'N', 'N', 'N', 'N', 9, 'Y'),
(21, 'PICT0054.jpg', '', 'N', 'N', 'N', 'N', 'N', 10, 'Y'),
(22, 'PICT0070.jpg', '', 'N', 'N', 'N', 'N', 'N', 11, 'Y'),
(25, 'ICANN.png', '', 'N', 'N', 'Y', 'N', 'N', NULL, 'Y'),
(26, 'PICT0024.jpg', '', 'N', 'N', 'N', 'Y', 'N', 8, 'Y'),
(27, 'logo.png', '', 'N', 'Y', 'N', 'N', 'N', NULL, 'Y'),
(29, 'PICT0400.jpg', '', 'N', 'N', 'N', 'N', 'N', 12, 'N'),
(30, 'PICT0099.jpg', '', 'N', 'N', 'N', 'N', 'N', 13, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `pre_application`
--

CREATE TABLE IF NOT EXISTS `pre_application` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `time` datetime NOT NULL,
  `street_address` varchar(100) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(20) NOT NULL,
  `spouses_first_name` varchar(35) NOT NULL,
  `spouses_last_name` varchar(35) NOT NULL,
  `other_occupant_name_1` varchar(70) NOT NULL,
  `other_occupant_name_2` varchar(70) NOT NULL,
  `other_occupant_name_3` varchar(70) NOT NULL,
  `other_occupant_name_4` varchar(70) NOT NULL,
  `other_occupant_name_5` varchar(70) NOT NULL,
  `other_occupant_name_6` varchar(70) NOT NULL,
  `current_landlord_name` varchar(70) NOT NULL,
  `current_landlord_address` varchar(70) NOT NULL,
  `current_landlord_phone` varchar(20) NOT NULL,
  `current_landlord_years` varchar(70) NOT NULL,
  `previous_landlord_name` varchar(70) NOT NULL,
  `previous_landlord_address` varchar(70) NOT NULL,
  `previous_landlord_phone` varchar(20) NOT NULL,
  `previous_landlord_years` varchar(70) NOT NULL,
  `previous_landlord_name_2` varchar(70) NOT NULL,
  `previous_landlord_address_2` varchar(70) NOT NULL,
  `previous_landlord_phone_2` varchar(20) NOT NULL,
  `previous_landlord_years_2` varchar(70) NOT NULL,
  `estimated_income` int(7) NOT NULL,
  `bedrooms_desired` int(2) NOT NULL,
  `move_in_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `special`
--

CREATE TABLE IF NOT EXISTS `special` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `description` varchar(150) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `condition_1` varchar(70) NOT NULL,
  `condition_2` varchar(70) NOT NULL,
  `condition_3` varchar(70) NOT NULL,
  `condition_4` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `template`
--

CREATE TABLE IF NOT EXISTS `template` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `description` varchar(500) NOT NULL,
  `example_link` varchar(60) NOT NULL,
  `image` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `template`
--

INSERT INTO `template` (`id`, `name`, `description`, `example_link`, `image`) VALUES
(1, 'Classic', 'A fantastic classic look for your property. This template exemplifies the sophistication of your community.  This template looks best if you have a great logo. ', '', ''),
(2, 'Modernica', 'A modern clean look for your community.  This template looks great if you have a exceptional picture to use as your background.', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `their_amenities_list`
--

CREATE TABLE IF NOT EXISTS `their_amenities_list` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `active` varchar(1) NOT NULL,
  `select_units` varchar(1) NOT NULL,
  `extra_fees` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_todo`
--

CREATE TABLE IF NOT EXISTS `user_todo` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `todo_name` varchar(1) NOT NULL,
  `todo_phone` varchar(1) NOT NULL,
  `todo_address` varchar(1) NOT NULL,
  `todo_email` varchar(1) NOT NULL,
  `todo_description` varchar(1) NOT NULL,
  `todo_pictures` varchar(1) NOT NULL,
  `todo_amenities` varchar(1) NOT NULL,
  `todo_office_hours` varchar(1) NOT NULL,
  `todo_floorplans` varchar(1) NOT NULL,
  `todo_pet_policy` varchar(1) NOT NULL,
  `todo_special` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
