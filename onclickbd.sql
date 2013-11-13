-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 15, 2013 at 02:21 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `onclickbd`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE IF NOT EXISTS `activities` (
  `activities_id` int(10) NOT NULL auto_increment,
  `activities_type` int(10) default NULL,
  `activities_title` varchar(250) default NULL,
  `venue` text,
  `cheif_guest` varchar(200) default NULL,
  `designation` varchar(200) default NULL,
  `activities_description` text,
  `start_date` int(11) default NULL,
  `end_date` int(11) default NULL,
  `image_name` varchar(200) default NULL,
  `image_large_path` text,
  `image_thumb_path` text,
  `location_id` int(10) default NULL,
  `address` text,
  `organizer_name` varchar(200) default NULL,
  `contact_name` varchar(200) default NULL,
  `mobile_no` varchar(200) default NULL,
  `phone` varchar(200) default NULL,
  `email_address` varchar(200) default NULL,
  `website` varchar(200) default NULL,
  `opening_time` varchar(20) default NULL,
  `end_time` varchar(20) default NULL,
  `create_date` int(10) default NULL,
  `status` int(1) NOT NULL default '1',
  PRIMARY KEY  (`activities_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `activities`
--


-- --------------------------------------------------------

--
-- Table structure for table `agent_revision`
--

CREATE TABLE IF NOT EXISTS `agent_revision` (
  `agent_uid` int(11) default NULL,
  `revision_date` int(11) default NULL,
  `about_revision` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agent_revision`
--

INSERT INTO `agent_revision` (`agent_uid`, `revision_date`, `about_revision`) VALUES
(2209, 1300579200, '<h3>1914 translation by H. Rackham</h3>\n<p>"On the other hand, we denounce with righteous indignation and  dislike men who are so beguiled and demoralized by the charms of  pleasure of the moment, so blinded by desire, that they cannot foresee  the pain and trouble that are bound to ensue; and equal blame belongs to  those who fail in their duty through weakness of will, which is the  same as saying through shrinking from toil and pain. These cases are  perfectly simple and easy to distinguish. In a free hour, when our power  of choice is untrammelled and when nothing prevents our being able to  do what we like best, every pleasure is to be welcomed and every pain  avoided. But in certain circumstances and owing to the claims of duty or  the obligations of business it will frequently occur that pleasures  have to be repudiated and annoyances accepted. The wise man therefore  always holds in these matters to this principle of selection: he rejects  pleasures to secure other greater pleasures, or else he endures pains  to avoid worse pains."</p>\n<br /><br />'),
(2209, 1300665600, '<p><strong>Lorem Ipsum</strong> is simply dummy  text of the printing and typesetting industry. Lorem Ipsum has been the  industry''s standard dummy text ever since the 1500s, when an unknown  printer took a galley of type and scrambled it to make a type specimen  book. It has survived not only five centuries, but also the leap into  electronic typesetting, remaining essentially unchanged. It was  popularised in the 1960s with the release of Letraset sheets containing  Lorem Ipsum passages, and more recently with desktop publishing software  like Aldus PageMaker including versions of Lorem Ipsum.</p>\n<div class="rc">\n<h2 class="why"><span>Why do we use it?</span></h2>\n<p>It  is a long established fact that a reader will be distracted by the  readable content of a page when looking at its layout. The point of  using Lorem Ipsum is that it has a more-or-less normal distribution of  letters, as opposed to using ''Content here, content here'', making it  look like readable English. Many desktop publishing packages and web  page editors now use Lorem Ipsum as their default model text, and a  search for ''lorem ipsum'' will uncover many web sites still in their  infancy. Various versions have evolved over the years, sometimes by  accident, sometimes on purpose (injected humour and the like).</p>\n<p>&nbsp;</p>\n<p>test test</p>\n</div>'),
(2391, 1300852800, ''),
(2209, 1300852800, '<p><strong>Lorem Ipsum</strong> is simply dummy  text of the printing and typesetting industry. Lorem Ipsum has been the  industry''s standard dummy text ever since the 1500s, when an unknown  printer took a galley of type and scrambled it to make a type specimen  book. It has survived not only five centuries, but also the leap into  electronic typesetting, remaining essentially unchanged. It was  popularised in the 1960s with the release of Letraset sheets containing  Lorem Ipsum passages, and more recently with desktop publishing software  like Aldus PageMaker including versions of Lorem Ipsum.</p>\n<div class="rc">\n<h2 class="why"><span>Why do we use it?</span></h2>\n<p>It  is a long established fact that a reader will be distracted by the  readable content of a page when looking at its layout. The point of  using Lorem Ipsum is that it has a more-or-less normal distribution of  letters, as opposed to using ''Content here, content here'', making it  look like readable English. Many desktop publishing packages and web  page editors now use Lorem Ipsum as their default model text, and a  search for ''lorem ipsum'' will uncover many web sites still in their  infancy. Various versions have evolved over the years, sometimes by  accident, sometimes on purpose (injected humour and the like).</p>\n<p>&nbsp;</p>\n<p>test test</p>\n<p>&nbsp;</p>\n<p>test test</p>\n</div>'),
(2209, 1300960987, '<p><strong>Lorem Ipsum</strong> is simply dummy  text of the printing and typesetting industry. Lorem Ipsum has been the  industry''s standard dummy text ever since the 1500s, when an unknown  printer took a galley of type and scrambled it to make a type specimen  book. It has survived not only five centuries, but also the leap into  electronic typesetting, remaining essentially unchanged. It was  popularised in the 1960s with the release of Letraset sheets containing  Lorem Ipsum passages, and more recently with desktop publishing software  like Aldus PageMaker including versions of Lorem Ipsum.</p>\n<div class="rc">\n<h2 class="why"><span>Why do we use it?</span></h2>\n<p>It  is a long established fact that a reader will be distracted by the  readable content of a page when looking at its layout. The point of  using Lorem Ipsum is that it has a more-or-less normal distribution of  letters, as opposed to using ''Content here, content here'', making it  look like readable English. Many desktop publishing packages and web  page editors now use Lorem Ipsum as their default model text, and a  search for ''lorem ipsum'' will uncover many web sites still in their  infancy. Various versions have evolved over the years, sometimes by  accident, sometimes on purpose (injected humour and the like).</p>\n<p>&nbsp;</p>\n<p>test test</p>\n<p>&nbsp;</p>\n<p>test test</p>\n</div>'),
(2209, 1300961007, '<p><strong>Lorem Ipsum</strong> is simply dummy  text of the printing and typesetting industry. Lorem Ipsum has been the  industry''s standard dummy text ever since the 1500s, when an unknown  printer took a galley of type and scrambled it to make a type specimen  book. It has survived not only five centuries, but also the leap into  electronic typesetting, remaining essentially unchanged. It was  popularised in the 1960s with the release of Letraset sheets containing  Lorem Ipsum passages, and more recently with desktop publishing software  like Aldus PageMaker including versions of Lorem Ipsum.</p>\n<div class="rc">\n<h2 class="why"><span>Why do we use it?</span></h2>\n<p>It  is a long established fact that a reader will be distracted by the  readable content of a page when looking at its layout. The point of  using Lorem Ipsum is that it has a more-or-less normal distribution of  letters, as opposed to using ''Content here, content here'', making it  look like readable English. Many desktop publishing packages and web  page editors now use Lorem Ipsum as their default model text, and a  search for ''lorem ipsum'' will uncover many web sites still in their  infancy. Various versions have evolved over the years, sometimes by  accident, sometimes on purpose (injected humour and the like).</p>\n<p>&nbsp;</p>\n<p>test test</p>\n<p>&nbsp;</p>\n<p>test test</p>\n</div>'),
(2209, 1300961021, '<p><strong>Lorem Ipsum</strong> is simply dummy  text of the printing and typesetting industry. Lorem Ipsum has been the  industry''s standard dummy text ever since the 1500s, when an unknown  printer took a galley of type and scrambled it to make a type specimen  book. It has survived not only five centuries, but also the leap into  electronic typesetting, remaining essentially unchanged. It was  popularised in the 1960s with the release of Letraset sheets containing  Lorem Ipsum passages, and more recently with desktop publishing software  like Aldus PageMaker including versions of Lorem Ipsum.</p>\n<div class="rc">\n<h2 class="why"><span>Why do we use it?</span></h2>\n<p>It  is a long established fact that a reader will be distracted by the  readable content of a page when looking at its layout. The point of  using Lorem Ipsum is that it has a more-or-less normal distribution of  letters, as opposed to using ''Content here, content here'', making it  look like readable English. Many desktop publishing packages and web  page editors now use Lorem Ipsum as their default model text, and a  search for ''lorem ipsum'' will uncover many web sites still in their  infancy. Various versions have evolved over the years, sometimes by  accident, sometimes on purpose (injected humour and the like).</p>\n<p>&nbsp;</p>\n<p>test test</p>\n<p>&nbsp;</p>\n<p>test test</p>\n</div>');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE IF NOT EXISTS `branch` (
  `branch_id` int(10) NOT NULL auto_increment,
  `agent_uid` int(10) default NULL,
  `location_id` int(10) default '0',
  `address` text,
  `contact_person` varchar(200) default NULL,
  `email` varchar(200) default NULL,
  `cell_phone` varchar(100) default NULL,
  `business_phone` varchar(100) default NULL,
  `fax` varchar(100) default NULL,
  `city` varchar(200) default NULL,
  `district` varchar(200) default NULL,
  `postal_code` tinyint(10) default NULL,
  `status` int(1) NOT NULL default '0',
  PRIMARY KEY  (`branch_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branch_id`, `agent_uid`, `location_id`, `address`, `contact_person`, `email`, `cell_phone`, `business_phone`, `fax`, `city`, `district`, `postal_code`, `status`) VALUES
(3, 4, 19, 'Dhanmondi,Dhaka', 'Md Shafiqul Islam', 'shafiqabs@gmail.com', '1212', '23213', '232', 'sdsd', 'Dhaka', 127, 0);

-- --------------------------------------------------------

--
-- Table structure for table `buyer_orders`
--

CREATE TABLE IF NOT EXISTS `buyer_orders` (
  `buyer_id` int(10) NOT NULL default '0',
  `agent_uid` int(10) NOT NULL default '0',
  `product_id` int(10) NOT NULL default '0',
  `price` double NOT NULL default '0',
  `quantity` double NOT NULL default '0',
  `sub_total_price` double NOT NULL default '0',
  `created_date` int(10) NOT NULL default '0',
  `product_status` int(2) NOT NULL default '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyer_orders`
--


-- --------------------------------------------------------

--
-- Table structure for table `captcha`
--

CREATE TABLE IF NOT EXISTS `captcha` (
  `captcha_id` bigint(13) unsigned NOT NULL auto_increment,
  `captcha_time` int(10) unsigned NOT NULL,
  `ip_address` varchar(16) NOT NULL default '0',
  `word` varchar(20) NOT NULL,
  PRIMARY KEY  (`captcha_id`),
  KEY `word` (`word`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `captcha`
--


-- --------------------------------------------------------

--
-- Table structure for table `custom_menu`
--

CREATE TABLE IF NOT EXISTS `custom_menu` (
  `menu_id` int(11) NOT NULL,
  `agent_uid` int(11) NOT NULL,
  `menu_name` varchar(200) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `menu_url` varchar(200) NOT NULL,
  `order` int(11) NOT NULL,
  `status` int(11) NOT NULL default '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `custom_menu`
--

INSERT INTO `custom_menu` (`menu_id`, `agent_uid`, `menu_name`, `parent_id`, `menu_url`, `order`, `status`) VALUES
(1, 1, 'Home', 0, 'home', 1, 1),
(2, 1, 'About', 0, 'about', 2, 1),
(3, 1, 'Properties', 0, 'listings', 3, 1),
(4, 1, 'Selling', 0, 'selling', 4, 1),
(5, 1, 'Buying ', 0, 'buying', 5, 1),
(6, 1, 'Contact', 0, 'contact', 6, 1),
(7, 1, 'Home', 1, 'home-us', 1, 1),
(8, 1, 'About-us', 2, 'about', 1, 1),
(9, 1, 'Listings', 3, 'listings-1', 1, 1),
(10, 1, 'Listings Map', 3, 'listings-map', 1, 1),
(11, 1, 'Selling Your Home', 4, 'selling-your-home', 1, 1),
(12, 1, 'Home Evaluation', 4, 'home-evaluation', 2, 1),
(13, 1, 'Buying a New Home', 5, 'buying-a-new-home', 1, 1),
(14, 1, 'Mortgage & Tax Calculators', 5, 'mortgage-tax-calculators', 2, 1),
(15, 1, 'Contact', 6, 'contact-us', 1, 1),
(1, 4, 'Home', 0, 'home', 1, 1),
(2, 4, 'About us', 0, 'about-us', 2, 1),
(3, 4, 'Products', 0, 'products', 3, 1),
(4, 4, 'Privicy & Policy', 0, 'privicy-policy', 4, 1),
(5, 4, 'Our Services', 0, 'our-services', 5, 1),
(6, 4, 'Contact us', 0, 'contact', 6, 1),
(7, 4, 'Home', 1, 'home-us', 1, 1),
(8, 4, 'About-us', 2, 'about', 1, 1),
(9, 4, 'Products', 3, 'products', 1, 1),
(10, 4, 'Privicy & Policy', 4, 'privicy-policy', 1, 1),
(11, 4, 'Our Services', 5, 'our-services', 1, 1),
(12, 4, 'Contact', 6, 'contact-us', 1, 1),
(1, 5, 'Home', 0, 'home', 1, 1),
(2, 5, 'About us', 0, 'about-us', 2, 1),
(3, 5, 'Products', 0, 'products', 3, 1),
(4, 5, 'Privicy & Policy', 0, 'privicy-policy', 4, 1),
(5, 5, 'Our Services', 0, 'our-services', 5, 1),
(6, 5, 'Contact us', 0, 'contact', 6, 1),
(7, 5, 'Home', 1, 'home-us', 1, 1),
(8, 5, 'About-us', 2, 'about', 1, 1),
(9, 5, 'Products', 3, 'products', 1, 1),
(10, 5, 'Privicy & Policy', 4, 'privicy-policy', 1, 1),
(11, 5, 'Our Services', 5, 'our-services', 1, 1),
(12, 5, 'Contact', 6, 'contact-us', 1, 1),
(1, 11, 'Home', 0, 'home', 1, 1),
(2, 11, 'About us', 0, 'about-us', 2, 1),
(3, 11, 'Products', 0, 'products', 3, 1),
(4, 11, 'Privicy & Policy', 0, 'privicy-policy', 4, 1),
(5, 11, 'Our Services', 0, 'our-services', 5, 1),
(6, 11, 'Contact us', 0, 'contact', 6, 1),
(7, 11, 'Home', 1, 'home-us', 1, 1),
(8, 11, 'About-us', 2, 'about', 1, 1),
(9, 11, 'Products', 3, 'products', 1, 1),
(10, 11, 'Privicy & Policy', 4, 'privicy-policy', 1, 1),
(11, 11, 'Our Services', 5, 'our-services', 1, 1),
(12, 11, 'Contact', 6, 'contact-us', 1, 1),
(1, 16, 'Home', 0, 'home', 1, 1),
(2, 16, 'About us', 0, 'about-us', 2, 1),
(3, 16, 'Products', 0, 'products', 3, 1),
(4, 16, 'Privicy & Policy', 0, 'privicy-policy', 4, 1),
(5, 16, 'Our Services', 0, 'our-services', 5, 1),
(6, 16, 'Contact us', 0, 'contact', 6, 1),
(7, 16, 'Home', 1, 'home-us', 1, 1),
(8, 16, 'About-us', 2, 'about', 1, 1),
(9, 16, 'Products', 3, 'products', 1, 1),
(10, 16, 'Privicy & Policy', 4, 'privicy-policy', 1, 1),
(11, 16, 'Our Services', 5, 'our-services', 1, 1),
(12, 16, 'Contact', 6, 'contact-us', 1, 1),
(1, 17, 'Home', 0, 'home', 1, 1),
(2, 17, 'About us', 0, 'about-us', 2, 1),
(3, 17, 'Products', 0, 'products', 3, 1),
(4, 17, 'Privicy & Policy', 0, 'privicy-policy', 4, 1),
(5, 17, 'Our Services', 0, 'our-services', 5, 1),
(6, 17, 'Contact us', 0, 'contact', 6, 1),
(7, 17, 'Home', 1, 'home-us', 1, 1),
(8, 17, 'About-us', 2, 'about', 1, 1),
(9, 17, 'Products', 3, 'products', 1, 1),
(10, 17, 'Privicy & Policy', 4, 'privicy-policy', 1, 1),
(11, 17, 'Our Services', 5, 'our-services', 1, 1),
(12, 17, 'Contact', 6, 'contact-us', 1, 1),
(1, 18, 'Home', 0, 'home', 1, 1),
(2, 18, 'About us', 0, 'about-us', 2, 1),
(3, 18, 'Products', 0, 'products', 3, 1),
(4, 18, 'Privicy & Policy', 0, 'privicy-policy', 4, 1),
(5, 18, 'Our Services', 0, 'our-services', 5, 1),
(6, 18, 'Contact us', 0, 'contact', 6, 1),
(7, 18, 'Home', 1, 'home-us', 1, 1),
(8, 18, 'About-us', 2, 'about', 1, 1),
(9, 18, 'Products', 3, 'products', 1, 1),
(10, 18, 'Privicy & Policy', 4, 'privicy-policy', 1, 1),
(11, 18, 'Our Services', 5, 'our-services', 1, 1),
(12, 18, 'Contact', 6, 'contact-us', 1, 1),
(1, 19, 'Home', 0, 'home', 1, 1),
(2, 19, 'About us', 0, 'about-us', 2, 1),
(3, 19, 'Products', 0, 'products', 3, 1),
(4, 19, 'Privicy & Policy', 0, 'privicy-policy', 4, 1),
(5, 19, 'Our Services', 0, 'our-services', 5, 1),
(6, 19, 'Contact us', 0, 'contact', 6, 1),
(7, 19, 'Home', 1, 'home-us', 1, 1),
(8, 19, 'About-us', 2, 'about', 1, 1),
(9, 19, 'Products', 3, 'products', 1, 1),
(10, 19, 'Privicy & Policy', 4, 'privicy-policy', 1, 1),
(11, 19, 'Our Services', 5, 'our-services', 1, 1),
(12, 19, 'Contact', 6, 'contact-us', 1, 1),
(1, 30, 'Home', 0, 'home', 1, 1),
(2, 30, 'About us', 0, 'about-us', 2, 1),
(3, 30, 'Products', 0, 'products', 3, 1),
(4, 30, 'Privicy & Policy', 0, 'privicy-policy', 4, 1),
(5, 30, 'Our Services', 0, 'our-services', 5, 1),
(6, 30, 'Contact us', 0, 'contact', 6, 1),
(7, 30, 'Home', 1, 'home-us', 1, 1),
(8, 30, 'About-us', 2, 'about', 1, 1),
(9, 30, 'Products', 3, 'products', 1, 1),
(10, 30, 'Privicy & Policy', 4, 'privicy-policy', 1, 1),
(11, 30, 'Our Services', 5, 'our-services', 1, 1),
(12, 30, 'Contact', 6, 'contact-us', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `evaluation`
--

CREATE TABLE IF NOT EXISTS `evaluation` (
  `evaluation_id` int(11) NOT NULL auto_increment,
  `agent_uid` int(11) NOT NULL,
  `home_style` varchar(30) NOT NULL,
  `bedrooms` int(11) NOT NULL,
  `bath` int(11) NOT NULL,
  `home_size` varchar(30) NOT NULL,
  `home_age` varchar(30) NOT NULL,
  `last_renovation` varchar(30) NOT NULL,
  `home_address` varchar(250) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `additional_comments` varchar(250) NOT NULL,
  `activity` int(2) NOT NULL,
  PRIMARY KEY  (`evaluation_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `evaluation`
--


-- --------------------------------------------------------

--
-- Table structure for table `evaluation_status`
--

CREATE TABLE IF NOT EXISTS `evaluation_status` (
  `evaluation_id` int(11) NOT NULL auto_increment,
  `agent_uid` int(11) default NULL,
  `custom_title` varchar(200) default NULL,
  `custom_details` text,
  `evaluation_status` int(11) NOT NULL default '1',
  PRIMARY KEY  (`evaluation_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=298 ;

--
-- Dumping data for table `evaluation_status`
--

INSERT INTO `evaluation_status` (`evaluation_id`, `agent_uid`, `custom_title`, `custom_details`, `evaluation_status`) VALUES
(1, 1506, NULL, NULL, 1),
(2, 1534, NULL, NULL, 1),
(3, 1544, NULL, NULL, 1),
(4, 1550, NULL, NULL, 1),
(5, 1575, NULL, NULL, 1),
(6, 1586, NULL, NULL, 1),
(7, 1593, NULL, NULL, 1),
(8, 1604, NULL, NULL, 1),
(9, 1607, NULL, NULL, 1),
(10, 1611, NULL, NULL, 1),
(11, 1613, NULL, NULL, 1),
(12, 1617, NULL, NULL, 1),
(13, 1620, NULL, NULL, 1),
(14, 1623, NULL, NULL, 1),
(15, 1636, NULL, NULL, 1),
(16, 1637, NULL, NULL, 1),
(17, 1646, NULL, NULL, 1),
(18, 1652, NULL, NULL, 1),
(19, 1659, NULL, NULL, 1),
(20, 1655, NULL, NULL, 1),
(21, 1674, NULL, NULL, 1),
(22, 1688, NULL, NULL, 1),
(23, 1695, NULL, NULL, 1),
(24, 1703, NULL, NULL, 1),
(25, 1706, NULL, NULL, 1),
(26, 1705, NULL, NULL, 1),
(27, 1711, NULL, NULL, 1),
(28, 1712, NULL, NULL, 1),
(29, 1719, NULL, NULL, 1),
(30, 1722, NULL, NULL, 1),
(31, 1103, NULL, NULL, 1),
(32, 1105, NULL, NULL, 1),
(33, 1101, NULL, NULL, 1),
(34, 1102, NULL, NULL, 1),
(35, 1104, NULL, NULL, 1),
(36, 1819, NULL, NULL, 1),
(37, 1820, NULL, NULL, 1),
(38, 1835, NULL, NULL, 1),
(39, 1009, NULL, NULL, 1),
(40, 1893, NULL, NULL, 1),
(41, 1894, NULL, NULL, 1),
(42, 1006, NULL, NULL, 1),
(43, 1111, NULL, NULL, 1),
(44, 1115, NULL, NULL, 1),
(45, 1112, NULL, NULL, 1),
(46, 1114, NULL, NULL, 1),
(47, 1113, NULL, NULL, 1),
(48, 1007, NULL, NULL, 1),
(49, 1008, NULL, NULL, 1),
(50, 1010, NULL, NULL, 1),
(51, 1902, NULL, NULL, 1),
(52, 1908, NULL, NULL, 1),
(53, 1905, NULL, NULL, 1),
(54, 1930, NULL, NULL, 1),
(55, 1931, NULL, NULL, 1),
(56, 1953, NULL, NULL, 1),
(57, 1955, NULL, NULL, 1),
(59, 2000, NULL, NULL, 1),
(60, 2007, NULL, NULL, 1),
(61, 2015, NULL, NULL, 1),
(62, 2020, NULL, NULL, 1),
(63, 1334, NULL, NULL, 1),
(64, 1333, NULL, NULL, 1),
(66, 2043, NULL, NULL, 1),
(67, 2063, NULL, NULL, 1),
(68, 2064, NULL, NULL, 1),
(70, 2067, NULL, NULL, 1),
(71, 2065, NULL, NULL, 1),
(72, 2069, NULL, NULL, 1),
(73, 2074, NULL, NULL, 1),
(74, 2072, NULL, NULL, 1),
(75, 2073, NULL, NULL, 1),
(77, 2076, NULL, NULL, 1),
(78, 2077, NULL, NULL, 1),
(79, 2085, NULL, NULL, 1),
(80, 2097, NULL, NULL, 1),
(81, 2107, NULL, NULL, 1),
(82, 2109, NULL, NULL, 1),
(83, 1120, NULL, NULL, 1),
(84, 1118, NULL, NULL, 1),
(85, 1116, NULL, NULL, 1),
(86, 1119, NULL, NULL, 1),
(87, 2117, NULL, NULL, 1),
(88, 2118, NULL, NULL, 1),
(89, 1013, NULL, NULL, 1),
(90, 1012, NULL, NULL, 1),
(91, 1015, NULL, NULL, 1),
(92, 1011, NULL, NULL, 1),
(93, 1014, NULL, NULL, 1),
(94, 2136, NULL, NULL, 1),
(95, 2141, NULL, NULL, 1),
(96, 2148, NULL, NULL, 1),
(97, 2147, NULL, NULL, 1),
(98, 2153, NULL, NULL, 1),
(99, 2150, NULL, NULL, 1),
(100, 2155, NULL, NULL, 1),
(101, 2168, NULL, NULL, 1),
(102, 2167, NULL, NULL, 1),
(103, 2166, NULL, NULL, 1),
(104, 1130, NULL, NULL, 1),
(105, 1126, NULL, NULL, 1),
(106, 1129, NULL, NULL, 1),
(107, 1128, NULL, NULL, 1),
(108, 1127, NULL, NULL, 1),
(109, 2170, NULL, NULL, 1),
(110, 2172, NULL, NULL, 1),
(111, 1208, NULL, NULL, 1),
(112, 1206, NULL, NULL, 1),
(113, 1212, NULL, NULL, 1),
(114, 1399, NULL, NULL, 1),
(115, 1426, NULL, NULL, 1),
(116, 1134, NULL, NULL, 1),
(117, 1131, NULL, NULL, 1),
(118, 1135, NULL, NULL, 1),
(119, 1132, NULL, NULL, 1),
(120, 1453, NULL, NULL, 1),
(121, 1146, NULL, NULL, 1),
(122, 1153, NULL, NULL, 1),
(123, 1455, NULL, NULL, 1),
(124, 1167, NULL, NULL, 1),
(125, 1175, NULL, NULL, 1),
(126, 1174, NULL, NULL, 1),
(127, 1219, NULL, NULL, 1),
(128, 1486, NULL, NULL, 1),
(129, 1181, NULL, NULL, 1),
(130, 1185, NULL, NULL, 1),
(131, 1217, NULL, NULL, 1),
(132, 1188, NULL, NULL, 1),
(133, 1187, NULL, NULL, 1),
(134, 1190, NULL, NULL, 1),
(135, 1498, NULL, NULL, 1),
(136, 1200, NULL, NULL, 1),
(137, 1196, NULL, NULL, 1),
(138, 1199, NULL, NULL, 1),
(139, 1221, NULL, NULL, 1),
(140, 1222, NULL, NULL, 1),
(141, 1018, NULL, NULL, 1),
(142, 1017, NULL, NULL, 1),
(143, 1020, NULL, NULL, 1),
(144, 1019, '  Fill out this form for your complimentary HOME EVALUATION', '', 2),
(145, 1230, NULL, NULL, 1),
(146, 1227, NULL, NULL, 1),
(147, 1016, NULL, NULL, 1),
(148, 1234, NULL, NULL, 1),
(149, 1235, NULL, NULL, 1),
(150, 1233, NULL, NULL, 1),
(151, 1239, NULL, NULL, 1),
(152, 1238, NULL, NULL, 1),
(153, 1237, NULL, NULL, 1),
(154, 1236, NULL, NULL, 1),
(155, 1246, NULL, NULL, 1),
(156, 1249, NULL, NULL, 1),
(157, 1253, NULL, NULL, 1),
(158, 1255, NULL, NULL, 1),
(159, 1256, NULL, NULL, 1),
(160, 1260, NULL, NULL, 1),
(161, 1261, NULL, NULL, 1),
(162, 1265, NULL, NULL, 1),
(163, 1263, NULL, NULL, 1),
(164, 1262, NULL, NULL, 1),
(165, 1264, NULL, NULL, 1),
(166, 1266, NULL, NULL, 1),
(167, 1267, NULL, NULL, 1),
(168, 1023, NULL, NULL, 1),
(169, 1024, NULL, NULL, 1),
(170, 1025, NULL, NULL, 1),
(171, 1022, NULL, NULL, 1),
(172, 1021, NULL, NULL, 1),
(173, 1029, NULL, NULL, 1),
(174, 1026, NULL, NULL, 1),
(175, 1028, NULL, NULL, 1),
(176, 1030, NULL, NULL, 1),
(177, 1027, NULL, NULL, 1),
(178, 1035, NULL, NULL, 1),
(179, 1034, NULL, NULL, 1),
(180, 1032, NULL, NULL, 1),
(181, 1033, NULL, NULL, 1),
(182, 1031, NULL, NULL, 1),
(183, 1040, NULL, NULL, 1),
(184, 1036, NULL, NULL, 1),
(185, 1038, NULL, NULL, 1),
(186, 1037, NULL, NULL, 1),
(187, 1039, NULL, NULL, 1),
(188, 1043, NULL, NULL, 1),
(189, 1045, ' ', '', 2),
(190, 1042, NULL, NULL, 1),
(191, 1041, NULL, NULL, 1),
(192, 1044, NULL, NULL, 1),
(193, 1046, NULL, NULL, 1),
(194, 1050, NULL, NULL, 1),
(195, 1049, NULL, NULL, 1),
(196, 1048, NULL, NULL, 1),
(197, 1047, NULL, NULL, 1),
(198, 1051, NULL, NULL, 1),
(199, 1052, NULL, NULL, 1),
(200, 1054, NULL, NULL, 1),
(201, 1053, NULL, NULL, 1),
(202, 1055, NULL, NULL, 1),
(203, 1091, NULL, NULL, 1),
(204, 1092, NULL, NULL, 1),
(205, 1094, NULL, NULL, 1),
(206, 1095, NULL, NULL, 1),
(207, 1093, NULL, NULL, 1),
(208, 1072, NULL, NULL, 1),
(209, 1074, NULL, NULL, 1),
(210, 1075, NULL, NULL, 1),
(211, 1071, NULL, NULL, 1),
(212, 1073, NULL, NULL, 1),
(213, 1083, NULL, NULL, 1),
(214, 1085, NULL, NULL, 1),
(215, 1082, NULL, NULL, 1),
(216, 1081, NULL, NULL, 1),
(217, 1084, NULL, NULL, 1),
(219, 1096, NULL, NULL, 1),
(220, 1099, NULL, NULL, 1),
(221, 1098, NULL, NULL, 1),
(222, 1100, NULL, NULL, 1),
(223, 1079, NULL, NULL, 1),
(224, 1077, NULL, NULL, 1),
(225, 1078, NULL, NULL, 1),
(226, 1080, NULL, NULL, 1),
(227, 1076, NULL, NULL, 1),
(228, 1089, NULL, NULL, 1),
(229, 1087, NULL, NULL, 1),
(230, 1086, NULL, NULL, 1),
(231, 1090, NULL, NULL, 1),
(232, 1088, NULL, NULL, 1),
(233, 1058, NULL, NULL, 1),
(234, 1057, NULL, NULL, 1),
(235, 1060, NULL, NULL, 1),
(236, 1056, NULL, NULL, 1),
(237, 1059, NULL, NULL, 1),
(238, 1061, NULL, NULL, 1),
(239, 1062, NULL, NULL, 1),
(240, 1064, NULL, NULL, 1),
(241, 1063, NULL, NULL, 1),
(242, 1065, NULL, NULL, 1),
(243, 1068, NULL, NULL, 1),
(244, 1066, NULL, NULL, 1),
(245, 1070, NULL, NULL, 1),
(246, 1069, NULL, NULL, 1),
(247, 1067, NULL, NULL, 1),
(248, 1003, NULL, NULL, 1),
(249, 1002, NULL, NULL, 1),
(250, 1004, NULL, NULL, 1),
(251, 1005, NULL, NULL, 1),
(252, 1000, NULL, NULL, 1),
(253, 1001, NULL, NULL, 1),
(254, 2186, NULL, NULL, 1),
(255, 999, NULL, NULL, 1),
(256, 1124, NULL, NULL, 1),
(257, 1357, NULL, NULL, 1),
(258, 1503, NULL, NULL, 1),
(259, 1844, NULL, NULL, 1),
(260, 2131, NULL, NULL, 1),
(261, 1137, NULL, NULL, 1),
(262, 1107, NULL, NULL, 1),
(263, 1123, NULL, NULL, 1),
(264, 2101, NULL, NULL, 1),
(265, 1205, NULL, NULL, 1),
(266, 2103, NULL, NULL, 1),
(267, 1138, NULL, NULL, 1),
(268, 1163, NULL, NULL, 1),
(269, 1108, NULL, NULL, 1),
(270, 1201, NULL, NULL, 1),
(271, 1136, NULL, NULL, 1),
(272, 2100, NULL, NULL, 1),
(273, 1109, NULL, NULL, 1),
(274, 1528, NULL, NULL, 1),
(275, 1122, NULL, NULL, 1),
(276, 1356, NULL, NULL, 1),
(277, 1125, NULL, NULL, 1),
(278, 1204, NULL, NULL, 1),
(279, 1106, NULL, NULL, 1),
(280, 1110, NULL, NULL, 1),
(281, 1242, NULL, NULL, 1),
(282, 2102, NULL, NULL, 1),
(284, 2173, NULL, NULL, 1),
(285, 2174, NULL, NULL, 1),
(286, 2175, NULL, NULL, 1),
(287, 2176, NULL, NULL, 1),
(288, 2177, NULL, NULL, 1),
(289, 2178, NULL, NULL, 1),
(291, 2180, NULL, NULL, 1),
(292, 2181, NULL, NULL, 1),
(293, 2182, NULL, NULL, 1),
(294, 2183, NULL, NULL, 1),
(297, 2188, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `footercta`
--

CREATE TABLE IF NOT EXISTS `footercta` (
  `footercta_id` int(10) NOT NULL auto_increment,
  `agent_uid` int(11) NOT NULL,
  `footercta_bg_color` varchar(30) default NULL,
  `footercta_font_color` varchar(30) default NULL,
  `footercta_pipe_color` varchar(30) default NULL,
  `image_upload1` text,
  `image_upload1_path` text,
  `image_rollover_upload1` text,
  `image_rollover_upload1_path` text,
  `tag_title1` text,
  `file_upload1` text,
  `file_upload1_path` text,
  `urlpath1` text,
  `image_upload2` text,
  `image_upload2_path` text,
  `image_rollover_upload2` text,
  `image_rollover_upload2_path` text,
  `tag_title2` text,
  `file_upload2` text,
  `file_upload2_path` text,
  `urlpath2` text,
  `image_upload3` text,
  `image_upload3_path` text,
  `image_rollover_upload3` text,
  `image_rollover_upload3_path` text,
  `tag_title3` text,
  `file_upload3` text,
  `file_upload3_path` text,
  `urlpath3` text,
  `image_upload4` text,
  `image_upload4_path` text,
  `image_rollover_upload4` text,
  `image_rollover_upload4_path` text,
  `tag_title4` text,
  `file_upload4` text,
  `file_upload4_path` text,
  `urlpath4` text,
  `image_upload5` text,
  `image_upload5_path` text,
  `image_rollover_upload5` text,
  `image_rollover_upload5_path` text,
  `tag_title5` text,
  `file_upload5` text,
  `file_upload5_path` text,
  `urlpath5` text,
  `image_upload6` text,
  `image_upload6_path` text,
  `image_rollover_upload6` text,
  `image_rollover_upload6_path` text,
  `tag_title6` text,
  `file_upload6` text,
  `file_upload6_path` text,
  `urlpath6` text,
  `link_status1` int(2) default '1',
  `link_status2` int(2) default '1',
  `link_status3` int(2) default '1',
  `link_status4` int(2) default '1',
  `link_status5` int(2) default '1',
  `link_status6` int(2) default '1',
  `footercta_status` int(2) default '0',
  PRIMARY KEY  (`footercta_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `footercta`
--

INSERT INTO `footercta` (`footercta_id`, `agent_uid`, `footercta_bg_color`, `footercta_font_color`, `footercta_pipe_color`, `image_upload1`, `image_upload1_path`, `image_rollover_upload1`, `image_rollover_upload1_path`, `tag_title1`, `file_upload1`, `file_upload1_path`, `urlpath1`, `image_upload2`, `image_upload2_path`, `image_rollover_upload2`, `image_rollover_upload2_path`, `tag_title2`, `file_upload2`, `file_upload2_path`, `urlpath2`, `image_upload3`, `image_upload3_path`, `image_rollover_upload3`, `image_rollover_upload3_path`, `tag_title3`, `file_upload3`, `file_upload3_path`, `urlpath3`, `image_upload4`, `image_upload4_path`, `image_rollover_upload4`, `image_rollover_upload4_path`, `tag_title4`, `file_upload4`, `file_upload4_path`, `urlpath4`, `image_upload5`, `image_upload5_path`, `image_rollover_upload5`, `image_rollover_upload5_path`, `tag_title5`, `file_upload5`, `file_upload5_path`, `urlpath5`, `image_upload6`, `image_upload6_path`, `image_rollover_upload6`, `image_rollover_upload6_path`, `tag_title6`, `file_upload6`, `file_upload6_path`, `urlpath6`, `link_status1`, `link_status2`, `link_status3`, `link_status4`, `link_status5`, `link_status6`, `footercta_status`) VALUES
(1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `group_shops`
--

CREATE TABLE IF NOT EXISTS `group_shops` (
  `group_brokerages_id` int(10) NOT NULL auto_increment,
  `group_title` varchar(200) default NULL,
  `group_value` text,
  PRIMARY KEY  (`group_brokerages_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `group_shops`
--

INSERT INTO `group_shops` (`group_brokerages_id`, `group_title`, `group_value`) VALUES
(1, 'Test Group', 'a:3:{i:0;s:4:"1060";i:1;s:4:"1061";i:2;s:4:"1058";}');

-- --------------------------------------------------------

--
-- Table structure for table `guide_content`
--

CREATE TABLE IF NOT EXISTS `guide_content` (
  `guide_content_id` int(10) NOT NULL auto_increment,
  `guide_type` int(10) default NULL,
  `guide_content_name` varchar(200) default NULL,
  `guidecontent` text NOT NULL,
  `status` int(2) default '1',
  PRIMARY KEY  (`guide_content_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `guide_content`
--

INSERT INTO `guide_content` (`guide_content_id`, `guide_type`, `guide_content_name`, `guidecontent`, `status`) VALUES
(1, 52, 'Search Products & Suppliers', 'search products &amp; suppliers', 1),
(2, 52, 'Send Inquiry', 'send inquiry', 1),
(3, 52, 'Post Buy Offer', 'post buy offer...', 1),
(4, 52, 'Trade Safely', 'trade safely', 1),
(5, 52, 'Search Audited Suppliers', 'search audited suppliers...', 1),
(6, 51, 'Browser & Select', 'learn everything you need to jump in and start selling right now &mdash; from  setting up an account, to listing your item, getting paid, and shipping.  learn everything you need to jump in and start selling right now &mdash; from  setting up an account, to listing your item, getting paid, and shipping.  learn everything you need to jump in and start selling right now &mdash; from  setting up an account, to listing your item, getting paid, and shipping.  learn everything you need to jump in and start selling right now &mdash; from  setting up an account, to listing your item, getting paid, and shipping.', 1),
(7, 51, 'Login or Register', '', 1),
(8, 51, 'Review Your Order', 'if you would like a copy of any of our latest catalogues, please  														tick the appropriate box(es) and fill in your details below. we''ll post these  														out to you within a few days of the date that they are published. please note,  														we only post out to uk addresses.if you would like a copy of any of our latest catalogues, please  														tick the appropriate box(es) and fill in your details below. we''ll post these  														out to you within a few days of the date that they are published. please note,  														we only post out to uk addresses.if you would like a copy of any of our latest catalogues, please  														tick the appropriate box(es) and fill in your details below. we''ll post these  														out to you within a few days of the date that they are published. please note,  														we only post out to uk addresses.', 1),
(9, 51, 'Payment & Shipment', 'payment &amp; shipment', 1);

-- --------------------------------------------------------

--
-- Table structure for table `keywords`
--

CREATE TABLE IF NOT EXISTS `keywords` (
  `keywords_id` int(10) NOT NULL auto_increment,
  `agent_uid` int(10) default NULL,
  `title_tag` text,
  `meta_description` text,
  `meta_keywords` text,
  `keywords_status` varchar(2) default '1',
  PRIMARY KEY  (`keywords_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `keywords`
--

INSERT INTO `keywords` (`keywords_id`, `agent_uid`, `title_tag`, `meta_description`, `meta_keywords`, `keywords_status`) VALUES
(1, 2209, 'Test-words', 'Meta tags have never been a guaranteed way to gain a top ranking on crawler-based search engines. Today, the most valuable feature they offer the web site owner is the ability to control to some degree how their web pages are described by some search engines. They also offer the ability to prevent pages from being indexed at all. This page explores these and other meta tag-related features in more depth.', 'Test keywords,Test keywords,Test keywords,Test keywords,Test keywords,Test keywords,Test keywords,Test keywords,Test keywords,Test keywords,Test keywords,Test keywords,Test keywords,Test keywords,Test keywords,Test keywords,', '1'),
(2, 2214, '', '', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `keywords_page`
--

CREATE TABLE IF NOT EXISTS `keywords_page` (
  `keywords_page_id` int(10) NOT NULL auto_increment,
  `menu_id` int(10) default NULL,
  `agent_uid` int(10) default NULL,
  `title_tag` text,
  `meta_description` text,
  `meta_keywords` text,
  `alternate_status` int(2) default NULL,
  PRIMARY KEY  (`keywords_page_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `keywords_page`
--

INSERT INTO `keywords_page` (`keywords_page_id`, `menu_id`, `agent_uid`, `title_tag`, `meta_description`, `meta_keywords`, `alternate_status`) VALUES
(1, 7, 2209, 'Test-Shafiq', 'Meta tags have never been a guaranteed way to gain a top ranking on crawler-based search engines. Today, the most valuable feature they offer the web site owner is the ability to control to some degree how their web pages are described by some search engines. They also offer the ability to prevent pages from being indexed at all. This page explores these and other meta tag-related features in more depth.', 'Test-Shafiq,Test-Shafiq,Test-Shafiq,Test-Shafiq,Test-Shafiq,Test-Shafiq,Test-Shafiq', NULL),
(2, 1, 2214, 'This is a test title', 'Description', 'Keywords', NULL),
(3, 7, 2214, 'This is a title tag for home', 'This is a description', 'This,is,a,keywords,tag', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `listing_electronics`
--

CREATE TABLE IF NOT EXISTS `listing_electronics` (
  `product_id` int(10) NOT NULL,
  `technical_description` text NOT NULL,
  `guarantee_id` int(10) default NULL,
  `warrinty_id` int(10) default NULL,
  `warrinty_time` int(10) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `listing_electronics`
--

INSERT INTO `listing_electronics` (`product_id`, `technical_description`, `guarantee_id`, `warrinty_id`, `warrinty_time`) VALUES
(1, 'Test...........', NULL, 24, 0),
(4, '', NULL, 24, 0),
(5, '', NULL, NULL, NULL),
(6, '', NULL, 24, 0),
(7, '', NULL, NULL, NULL),
(8, '', NULL, NULL, NULL),
(9, '', NULL, NULL, NULL),
(10, '', NULL, NULL, NULL),
(11, '', NULL, NULL, NULL),
(12, '', NULL, NULL, NULL),
(13, '', NULL, NULL, NULL),
(14, '0', NULL, 0, 0),
(15, '', NULL, NULL, NULL),
(16, '', NULL, NULL, NULL),
(17, '', NULL, NULL, NULL),
(18, '', NULL, NULL, NULL),
(19, '', NULL, NULL, NULL),
(20, '', NULL, NULL, NULL),
(21, '', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `listing_jewellery`
--

CREATE TABLE IF NOT EXISTS `listing_jewellery` (
  `product_id` int(10) default NULL,
  `jewellery_id` int(10) default NULL,
  `karate_id` int(10) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `listing_jewellery`
--

INSERT INTO `listing_jewellery` (`product_id`, `jewellery_id`, `karate_id`) VALUES
(1, 0, 0),
(4, 0, 0),
(5, NULL, NULL),
(6, 0, 0),
(7, NULL, NULL),
(8, NULL, NULL),
(9, NULL, NULL),
(10, NULL, NULL),
(11, NULL, NULL),
(12, NULL, NULL),
(13, NULL, NULL),
(14, 0, 0),
(15, NULL, NULL),
(16, NULL, NULL),
(17, NULL, NULL),
(18, NULL, NULL),
(19, NULL, NULL),
(20, NULL, NULL),
(21, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `listing_meta_value`
--

CREATE TABLE IF NOT EXISTS `listing_meta_value` (
  `product_template_clothing_id` int(10) NOT NULL,
  `product_id` int(11) default NULL,
  `gender` int(3) default '0',
  `material` varchar(250) default NULL,
  `technics` varchar(250) default NULL,
  `washing_instructions` varchar(250) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `listing_meta_value`
--

INSERT INTO `listing_meta_value` (`product_template_clothing_id`, `product_id`, `gender`, `material`, `technics`, `washing_instructions`) VALUES
(0, 20, 0, '', '', ''),
(0, 21, 0, 'xxx vv', 'bbb vv', 'Machine Wash pp');

-- --------------------------------------------------------

--
-- Table structure for table `listing_notifications`
--

CREATE TABLE IF NOT EXISTS `listing_notifications` (
  `product_id` int(10) default '0',
  `notification_wishlist` tinyint(1) default '0',
  `notification_reminder` tinyint(1) default '0',
  `notification_region` tinyint(1) default '0',
  `notification_pricedrop` tinyint(1) default '0',
  `notification_comments` tinyint(1) default '0',
  `notification_enough_info` tinyint(1) default '0',
  `notification_contactus` tinyint(1) default '0',
  `share_facebook` tinyint(1) NOT NULL default '0',
  `compare_another` tinyint(1) NOT NULL default '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `listing_notifications`
--

INSERT INTO `listing_notifications` (`product_id`, `notification_wishlist`, `notification_reminder`, `notification_region`, `notification_pricedrop`, `notification_comments`, `notification_enough_info`, `notification_contactus`, `share_facebook`, `compare_another`) VALUES
(30, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(31, 1, 1, 1, 1, 1, 1, 1, 0, 0),
(32, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(33, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(35, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(36, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(39, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(40, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(41, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `listing_product`
--

CREATE TABLE IF NOT EXISTS `listing_product` (
  `product_id` int(10) NOT NULL auto_increment,
  `product_code` varchar(100) default NULL,
  `category_id` int(10) default NULL,
  `agent_uid` int(10) default NULL,
  `product_name` varchar(200) default NULL,
  `product_name_url` varchar(200) default NULL,
  `price` varchar(20) default NULL,
  `discount_price` varchar(20) default NULL,
  `expired_date` int(10) default NULL,
  `quantity` int(10) default NULL,
  `quantity_type` tinyint(10) NOT NULL default '0',
  `made_in` varchar(100) default NULL,
  `size` varchar(200) default NULL,
  `color` text,
  `model_no` varchar(20) default NULL,
  `brand_name` varchar(200) NOT NULL,
  `weight` varchar(100) default NULL,
  `dimensions_w` varchar(100) default NULL,
  `dimensions_h` varchar(100) NOT NULL,
  `dimensions_type` varchar(100) NOT NULL,
  `certification` varchar(200) default NULL,
  `car_model` varchar(100) default NULL,
  `jewellery_type` int(10) default NULL,
  `karate` int(10) default NULL,
  `description` text,
  `additional_photo` int(3) default NULL,
  `image_name` text,
  `image_thumb_path` text,
  `image_large_path` text,
  `product_status` int(2) NOT NULL default '1',
  `created_date` int(10) default NULL,
  `status` int(3) default NULL,
  PRIMARY KEY  (`product_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `listing_product`
--

INSERT INTO `listing_product` (`product_id`, `product_code`, `category_id`, `agent_uid`, `product_name`, `product_name_url`, `price`, `discount_price`, `expired_date`, `quantity`, `quantity_type`, `made_in`, `size`, `color`, `model_no`, `brand_name`, `weight`, `dimensions_w`, `dimensions_h`, `dimensions_type`, `certification`, `car_model`, `jewellery_type`, `karate`, `description`, `additional_photo`, `image_name`, `image_thumb_path`, `image_large_path`, `product_status`, `created_date`, `status`) VALUES
(30, 'EP-627399', NULL, 4, 'Atlantic salmon fillets are marinated in', 'atlantic-salmon-fillets-are-marinated-in', '450', '400', 0, 100, 0, NULL, NULL, NULL, NULL, 'Chillis', NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, 1, 1315158819, NULL),
(31, 'EP-408820', NULL, 4, 'Cantonese Steamed Cod with Ginger and Soy', NULL, '520', '480', 0, 0, 0, NULL, NULL, NULL, NULL, 'Chillis', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 'LORM is a public association bringing together deafblind people, their families, friends, and others concerned with deafblindness and the problems associated with it. At present, LORM has about 200 members and maintains contact with about 350 deafblind people. It offers help and assistance to deafblind people of all age groups as well as to others who come into contact with them or who take an interest in this disability.', NULL, NULL, NULL, NULL, 1, 1315159248, NULL),
(32, 'EP-334757', NULL, 3, 'Chicken Burger', 'Chicken-Burger', '125', '100', 2012, 10, 68, NULL, NULL, NULL, NULL, 'Cats Eye', NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, 1, 1315314595, NULL),
(35, 'EP-967870', NULL, 3, 'xx', 'xx', '200', '100', 2012, 2, 68, NULL, NULL, NULL, NULL, 'Cats Eye', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 'Test', NULL, NULL, NULL, NULL, 1, 1320160340, NULL),
(36, 'EP-425365', NULL, 1, 'Test new product', 'Test-new-product', '3432', '', 2012, 10, 68, NULL, NULL, NULL, NULL, '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, 1, 1333856079, NULL),
(38, 'EP-854600', NULL, 1, 'hjghj', 'hjghj', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 2012, NULL),
(39, 'EP-864575', NULL, 1, 'hjghj', 'hjghj', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 2012, NULL),
(40, 'EP-593195', NULL, 1, 'Panjabi Long', 'Panjabi-Long', '1200', '1100', 2012, 10, 68, NULL, NULL, NULL, NULL, 'Cats Eye', NULL, NULL, '', '', NULL, NULL, NULL, NULL, 'Panjabi Long 100% cotton', NULL, NULL, NULL, NULL, 1, 2012, NULL),
(41, 'EP-225973', NULL, 1, 'Panjabi Long', 'Panjabi-Long', '2000', '', 1386748800, 10, 68, NULL, NULL, NULL, NULL, '', NULL, NULL, '', '', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, 1, 1352509764, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `listing_product_category`
--

CREATE TABLE IF NOT EXISTS `listing_product_category` (
  `product_id` int(10) default NULL,
  `agent_uid` int(10) NOT NULL,
  `catid_label_1` int(10) default '0',
  `catid_label_2` int(10) default '0',
  `catid_label_3` int(10) default '0',
  `catid_label_4` int(10) default '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `listing_product_category`
--

INSERT INTO `listing_product_category` (`product_id`, `agent_uid`, `catid_label_1`, `catid_label_2`, `catid_label_3`, `catid_label_4`) VALUES
(30, 4, 24, 25, 551, 0),
(31, 1, 24, 25, 564, 0),
(32, 3, 7, 11, 260, 0),
(35, 1, 24, 25, 572, 0),
(36, 3, 1, 4, 151, 0),
(38, 1, 1, 2, 0, 0),
(39, 1, 1, 2, 0, 0),
(40, 1, 1, 2, 108, 0),
(41, 1, 1, 2, 111, 0);

-- --------------------------------------------------------

--
-- Table structure for table `listing_product_image`
--

CREATE TABLE IF NOT EXISTS `listing_product_image` (
  `product_image_id` int(10) NOT NULL auto_increment,
  `agent_uid` int(10) default '0',
  `product_id` int(10) NOT NULL,
  `show_default` int(1) default '0',
  `image_name` varchar(200) default NULL,
  `image_small_path` text,
  `image_thumb_path` text,
  `image_large_path` text,
  `image_square_path` text,
  `delete_path` text,
  PRIMARY KEY  (`product_image_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=112 ;

--
-- Dumping data for table `listing_product_image`
--

INSERT INTO `listing_product_image` (`product_image_id`, `agent_uid`, `product_id`, `show_default`, `image_name`, `image_small_path`, `image_thumb_path`, `image_large_path`, `image_square_path`, `delete_path`) VALUES
(11, 0, 4, 1, '4997.jpg', NULL, 'http://localhost/admin-ebdshop/uploads/shop/1/products/4/thumb/4997.jpg', 'http://localhost/admin-ebdshop/uploads/shop/1/products/4/large/4997.jpg', NULL, NULL),
(12, 0, 4, 0, '467180_n.jpg', NULL, 'http://localhost/admin-ebdshop/uploads/shop/1/products/4/thumb/467180_n.jpg', 'http://localhost/admin-ebdshop/uploads/shop/1/products/4/large/467180_n.jpg', NULL, NULL),
(13, 1, 21, 0, '9541soq1eB.jpg', NULL, 'http://localhost/admin-ebdshop/uploads/shop/1/products/21/thumb/9541soq1eB.jpg', 'http://localhost/admin-ebdshop/uploads/shop/1/products/21/large/9541soq1eB.jpg', NULL, NULL),
(14, 1, 21, 0, '104168zPk0.jpg', NULL, 'http://localhost/admin-ebdshop/uploads/shop/1/products/21/thumb/104168zPk0.jpg', 'http://localhost/admin-ebdshop/uploads/shop/1/products/21/large/104168zPk0.jpg', NULL, NULL),
(15, 1, 21, 1, '15051PMh6Td.jpg', NULL, 'http://localhost/admin-ebdshop/uploads/shop/1/products/21/thumb/15051PMh6Td.jpg', 'http://localhost/admin-ebdshop/uploads/shop/1/products/21/large/15051PMh6Td.jpg', NULL, NULL),
(25, 1, 20, 0, '4000001986012.jpg', 'http://localhost/admin-ebdshop/uploads/shop/1/products/20/small/4000001986012.jpg', 'http://localhost/admin-ebdshop/uploads/shop/1/products/20/thumb/4000001986012.jpg', 'http://localhost/admin-ebdshop/uploads/shop/1/products/20/large/4000001986012.jpg', NULL, NULL),
(32, 1, 22, 0, '2010-Lexus-RX.jpg', 'http://localhost/admin-ebdshop//uploads/shop/1/products/22/small/2010-Lexus-RX.jpg', 'http://localhost/admin-ebdshop//uploads/shop/1/products/22/thumb/2010-Lexus-RX.jpg', 'http://localhost/admin-ebdshop//uploads/shop/1/products/22/large/2010-Lexus-RX.jpg', 'http://localhost/admin-ebdshop//uploads/shop/1/products/22/square/2010-Lexus-RX.jpg', 'uploads/shop/1/products/22'),
(93, 4, 30, 1, 'banner30.jpg', 'http://localhost/admin-ebdshop//uploads/shop/4/products/30/small/banner30.jpg', 'http://localhost/admin-ebdshop//uploads/shop/4/products/30/thumb/banner30.jpg', 'http://localhost/admin-ebdshop//uploads/shop/4/products/30/large/banner30.jpg', 'http://localhost/admin-ebdshop//uploads/shop/4/products/30/square/banner30.jpg', 'uploads/shop/4/products/30'),
(24, 1, 20, 0, '289bdayek.jpg', 'http://localhost/admin-ebdshop/uploads/shop/1/products/20/small/289bdayek.jpg', 'http://localhost/admin-ebdshop/uploads/shop/1/products/20/thumb/289bdayek.jpg', 'http://localhost/admin-ebdshop/uploads/shop/1/products/20/large/289bdayek.jpg', NULL, NULL),
(90, 1, 22, 0, '3_b.jpg', 'http://localhost/admin-ebdshop//uploads/shop/1/products/22/small/3_b.jpg', 'http://localhost/admin-ebdshop//uploads/shop/1/products/22/thumb/3_b.jpg', 'http://localhost/admin-ebdshop//uploads/shop/1/products/22/large/3_b.jpg', 'http://localhost/admin-ebdshop//uploads/shop/1/products/22/square/3_b.jpg', 'uploads/shop/1/products/22'),
(92, 1, 22, 0, '2_b.jpg', 'http://localhost/admin-ebdshop//uploads/shop/1/products/22/small/2_b.jpg', 'http://localhost/admin-ebdshop//uploads/shop/1/products/22/thumb/2_b.jpg', 'http://localhost/admin-ebdshop//uploads/shop/1/products/22/large/2_b.jpg', 'http://localhost/admin-ebdshop//uploads/shop/1/products/22/square/2_b.jpg', 'uploads/shop/1/products/22'),
(91, 1, 22, 0, '1_8_r1200c_81.jpg', 'http://localhost/admin-ebdshop//uploads/shop/1/products/22/small/1_8_r1200c_81.jpg', 'http://localhost/admin-ebdshop//uploads/shop/1/products/22/thumb/1_8_r1200c_81.jpg', 'http://localhost/admin-ebdshop//uploads/shop/1/products/22/large/1_8_r1200c_81.jpg', 'http://localhost/admin-ebdshop//uploads/shop/1/products/22/square/1_8_r1200c_81.jpg', 'uploads/shop/1/products/22'),
(97, 4, 31, 1, 'collage0c.jpg', 'http://localhost/admin-ebdshop//uploads/shop/4/products/31/small/collage0c.jpg', 'http://localhost/admin-ebdshop//uploads/shop/4/products/31/thumb/collage0c.jpg', 'http://localhost/admin-ebdshop//uploads/shop/4/products/31/large/collage0c.jpg', 'http://localhost/admin-ebdshop//uploads/shop/4/products/31/square/collage0c.jpg', 'uploads/shop/4/products/31'),
(98, 3, 32, 1, '09000000.jpg', 'http://localhost/admin-ebdshop//uploads/shop/3/products/32/small/09000000.jpg', 'http://localhost/admin-ebdshop//uploads/shop/3/products/32/thumb/09000000.jpg', 'http://localhost/admin-ebdshop//uploads/shop/3/products/32/large/09000000.jpg', 'http://localhost/admin-ebdshop//uploads/shop/3/products/32/square/09000000.jpg', 'uploads/shop/3/products/32'),
(108, 3, 35, 0, 'dsc04718.jpg', '/uploads/shop/3/products/35/small/dsc04718.jpg', '/uploads/shop/3/products/35/thumb/dsc04718.jpg', '/uploads/shop/3/products/35/large/dsc04718.jpg', '/uploads/shop/3/products/35/square/dsc04718.jpg', 'uploads/shop/3/products/35'),
(100, 3, 33, 1, '42000000.jpg', 'http://localhost/admin-ebdshop//uploads/shop/3/products/33/small/42000000.jpg', 'http://localhost/admin-ebdshop//uploads/shop/3/products/33/thumb/42000000.jpg', 'http://localhost/admin-ebdshop//uploads/shop/3/products/33/large/42000000.jpg', 'http://localhost/admin-ebdshop//uploads/shop/3/products/33/square/42000000.jpg', 'uploads/shop/3/products/33'),
(110, 3, 35, 0, 'dsc04721.jpg', '/uploads/shop/3/products/35/small/dsc04721.jpg', '/uploads/shop/3/products/35/thumb/dsc04721.jpg', '/uploads/shop/3/products/35/large/dsc04721.jpg', '/uploads/shop/3/products/35/square/dsc04721.jpg', 'uploads/shop/3/products/35'),
(109, 3, 35, 0, 'dsc04737.jpg', '/uploads/shop/3/products/35/small/dsc04737.jpg', '/uploads/shop/3/products/35/thumb/dsc04737.jpg', '/uploads/shop/3/products/35/large/dsc04737.jpg', '/uploads/shop/3/products/35/square/dsc04737.jpg', 'uploads/shop/3/products/35'),
(107, 3, 32, 0, 'dsc04702.jpg', '/uploads/shop/3/products/32/small/dsc04702.jpg', '/uploads/shop/3/products/32/thumb/dsc04702.jpg', '/uploads/shop/3/products/32/large/dsc04702.jpg', '/uploads/shop/3/products/32/square/dsc04702.jpg', 'uploads/shop/3/products/32'),
(111, 0, 1, 1, '8868f4a9817ab3b3e0e227391f26402f.JPG', '/uploads/shop/product_image_upload/products/1/small/8868f4a9817ab3b3e0e227391f26402f.JPG', '/uploads/shop/product_image_upload/products/1/thumb/8868f4a9817ab3b3e0e227391f26402f.JPG', '/uploads/shop/product_image_upload/products/1/large/8868f4a9817ab3b3e0e227391f26402f.JPG', '/uploads/shop/product_image_upload/products/1/square/8868f4a9817ab3b3e0e227391f26402f.JPG', 'uploads/shop/product_image_upload/products/1');

-- --------------------------------------------------------

--
-- Table structure for table `listing_selloffer`
--

CREATE TABLE IF NOT EXISTS `listing_selloffer` (
  `product_id` int(10) default NULL,
  `sell_offer_id` int(10) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `listing_selloffer`
--


-- --------------------------------------------------------

--
-- Table structure for table `listing_specific_value`
--

CREATE TABLE IF NOT EXISTS `listing_specific_value` (
  `additional_id` bigint(20) NOT NULL auto_increment,
  `product_id` int(10) default NULL,
  `agent_uid` int(10) default NULL,
  `label_name` varchar(250) default NULL,
  `meta_value` text,
  `extra_field` tinyint(1) default '0',
  `ordering` tinyint(2) default '0',
  PRIMARY KEY  (`additional_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=220 ;

--
-- Dumping data for table `listing_specific_value`
--

INSERT INTO `listing_specific_value` (`additional_id`, `product_id`, `agent_uid`, `label_name`, `meta_value`, `extra_field`, `ordering`) VALUES
(80, 1, 41, 'Texas1 label', 'Texas1', 0, 0),
(81, 1, 41, 'Texas2 label', 'Texas2', 0, 0),
(82, 1, 41, 'Texas3 label', 'Texas3', 0, 0),
(83, 1, 41, 'Product-4', '', 0, 0),
(84, 1, 41, 'Texas 4 label', 'Texas4', 1, 0),
(85, 1, 41, 'dsasd', 'sadsadas', 1, 0),
(92, 40, 1, 'Product -1', 'Nebraska', 0, 0),
(93, 40, 1, 'Product -2', 'Arkansas', 0, 0),
(94, 40, 1, 'Product -3', 'Nebraska', 0, 0),
(95, 40, 1, 'Product-4', 'Connecticut', 0, 0),
(96, 40, 1, 'Extra Label', 'Connecticut 1', 1, 0),
(97, 40, 1, 'Extra Label', 'Connecticut 2', 1, 0),
(98, 40, 1, 'Extra Label', 'Connecticut 3', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `listing_status`
--

CREATE TABLE IF NOT EXISTS `listing_status` (
  `product_id` int(10) NOT NULL,
  `special_offer` int(2) NOT NULL default '0',
  `feature_list` int(2) NOT NULL default '0',
  `show_home` int(2) NOT NULL default '0',
  `discount_list` int(2) default '0',
  `product_status` int(2) NOT NULL default '1',
  `guarantee_id` int(10) default '0',
  `warrinty_id` int(10) default '0',
  `warrinty_time` int(10) default '0',
  `condition_id` int(11) NOT NULL default '0',
  `sell_offer_id` int(10) default '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `listing_status`
--

INSERT INTO `listing_status` (`product_id`, `special_offer`, `feature_list`, `show_home`, `discount_list`, `product_status`, `guarantee_id`, `warrinty_id`, `warrinty_time`, `condition_id`, `sell_offer_id`) VALUES
(1, 1, 1, 1, 1, 0, 29, 24, 0, 0, NULL),
(4, 1, 1, 1, 1, 1, 28, 24, 0, 0, NULL),
(5, 0, 0, 0, 0, 1, 0, 0, 0, 0, NULL),
(6, 1, 1, 1, 1, 1, 28, 24, 0, 31, NULL),
(7, 0, 0, 0, 0, 1, 0, 0, 0, 0, NULL),
(8, 0, 0, 0, 0, 1, 0, 0, 0, 0, NULL),
(9, 0, 0, 0, 0, 1, 0, 0, 0, 0, NULL),
(10, 0, 0, 0, 0, 1, 0, 0, 0, 0, NULL),
(11, 0, 0, 0, 0, 1, 0, 0, 0, 0, NULL),
(12, 0, 0, 0, 0, 1, 0, 0, 0, 0, NULL),
(13, 0, 0, 0, 0, 1, 0, 0, 0, 0, NULL),
(14, 0, 0, 0, 0, 1, 0, 0, 0, 31, NULL),
(15, 0, 0, 0, 0, 1, 0, 0, 0, 0, NULL),
(16, 0, 0, 0, 0, 1, 0, 0, 0, 0, NULL),
(17, 0, 0, 0, 0, 1, 0, 0, 0, 0, NULL),
(18, 0, 0, 0, 0, 1, 0, 0, 0, 0, NULL),
(19, 0, 0, 0, 0, 1, 0, 0, 0, 0, NULL),
(20, 0, 0, 0, 0, 33, 0, 0, 0, 0, NULL),
(21, 1, 1, 1, 1, 34, 0, 0, 0, 31, NULL),
(22, 0, 0, 0, 0, 1, 0, 0, 0, 0, NULL),
(23, 0, 0, 0, 0, 1, 0, 0, 0, 0, NULL),
(24, 0, 0, 0, 0, 1, 0, 0, 0, 0, NULL),
(25, 0, 0, 0, 0, 1, 0, 0, 0, 0, NULL),
(26, 0, 0, 0, 0, 1, 0, 0, 0, 0, NULL),
(27, 0, 0, 0, 0, 1, 0, 0, 0, 0, NULL),
(28, 1, 1, 1, 1, 33, 0, 0, 0, 30, NULL),
(29, 0, 0, 0, 0, 1, 0, 0, 0, 0, NULL),
(30, 0, 0, 0, 0, 33, 0, 0, 0, 0, NULL),
(31, 1, 1, 1, 1, 33, 0, 0, 0, 0, 1),
(32, 0, 0, 0, 0, 34, 0, 0, 0, 0, 1),
(33, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0),
(35, 1, 1, 1, 1, 33, 0, 0, 0, 0, 2),
(36, 0, 0, 0, 0, 34, 0, 0, 0, 0, 0),
(38, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0),
(39, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0),
(40, 1, 1, 1, 1, 33, 0, 0, 0, 0, 2),
(41, 0, 0, 0, 0, 34, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `listing_vehicle`
--

CREATE TABLE IF NOT EXISTS `listing_vehicle` (
  `product_id` int(10) default NULL,
  `vehicle_id` int(10) default '0',
  `car_model` varchar(100) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `listing_vehicle`
--

INSERT INTO `listing_vehicle` (`product_id`, `vehicle_id`, `car_model`) VALUES
(1, 0, 'c-12300'),
(4, 0, ''),
(5, NULL, NULL),
(6, 0, ''),
(7, NULL, NULL),
(8, NULL, NULL),
(9, 0, NULL),
(10, 0, NULL),
(11, 0, NULL),
(12, 0, NULL),
(13, 0, NULL),
(14, 0, '0'),
(15, 0, NULL),
(16, 0, NULL),
(17, 0, NULL),
(18, 0, NULL),
(19, 0, NULL),
(20, 0, NULL),
(21, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mall_advertisment`
--

CREATE TABLE IF NOT EXISTS `mall_advertisment` (
  `mall_advertisment_id` int(10) NOT NULL auto_increment,
  `mall_id` int(10) default NULL,
  `agent_uid` int(10) default NULL,
  `position_id` int(10) default NULL,
  `website_title` varchar(200) default NULL,
  `website` varchar(200) default NULL,
  `image_name` varchar(250) default NULL,
  `image_path` text,
  `image_crop_path` text,
  `delete_image_crop_path` text,
  `delete_image_path` text,
  `created_date` int(10) default NULL,
  `status` int(1) default '1',
  PRIMARY KEY  (`mall_advertisment_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `mall_advertisment`
--

INSERT INTO `mall_advertisment` (`mall_advertisment_id`, `mall_id`, `agent_uid`, `position_id`, `website_title`, `website`, `image_name`, `image_path`, `image_crop_path`, `delete_image_crop_path`, `delete_image_path`, `created_date`, `status`) VALUES
(1, 5, 11, 64, 'xx pp', 'xxx', '74148370040.jpg', 'http://localhost/admin-ebdshop/uploads/mall/5/advertisment/74148370040.jpg', 'http://localhost/admin-ebdshop/uploads/mall/5/advertisment/crop/74148370040.jpg', 'uploads/mall/5/advertisment/crop/74148370040.jpg', 'uploads/mall/5/advertisment/74148370040.jpg', 1302886527, 1),
(2, 5, 12, 63, 'dfd', 'dfdf', '883IGP0477.jpg', 'http://localhost/admin-ebdshop/uploads/mall/5/advertisment/883IGP0477.jpg', 'http://localhost/admin-ebdshop/uploads/mall/5/advertisment/crop/883IGP0477.jpg', 'uploads/mall/5/advertisment/crop/883IGP0477.jpg', 'uploads/mall/5/advertisment/883IGP0477.jpg', 1302890905, 1),
(3, 5, 12, 63, 'dfd', 'dfdf', '96913.jpg', 'http://localhost/admin-ebdshop/uploads/mall/5/advertisment/96913.jpg', 'http://localhost/admin-ebdshop/uploads/mall/5/advertisment/crop/96913.jpg', 'uploads/mall/5/advertisment/crop/96913.jpg', 'uploads/mall/5/advertisment/96913.jpg', 1302890874, 1);

-- --------------------------------------------------------

--
-- Table structure for table `mall_advertisment_position`
--

CREATE TABLE IF NOT EXISTS `mall_advertisment_position` (
  `tpp_id` int(11) NOT NULL auto_increment,
  `mall_id` int(10) default NULL,
  `mall_advertisment_id` int(11) NOT NULL,
  `x` int(11) default '0',
  `y` int(11) NOT NULL default '0',
  `w` int(11) NOT NULL default '0',
  `h` int(11) NOT NULL default '0',
  PRIMARY KEY  (`tpp_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `mall_advertisment_position`
--

INSERT INTO `mall_advertisment_position` (`tpp_id`, `mall_id`, `mall_advertisment_id`, `x`, `y`, `w`, `h`) VALUES
(1, 5, 2, 150, 0, 300, 200),
(3, 5, 2, 150, 0, 300, 200),
(4, 5, 2, 150, 0, 300, 200),
(5, 5, 2, 150, 0, 300, 200),
(6, 5, 2, 150, 0, 300, 200),
(7, 5, 2, 150, 0, 300, 200);

-- --------------------------------------------------------

--
-- Table structure for table `mall_content`
--

CREATE TABLE IF NOT EXISTS `mall_content` (
  `mall_content_id` int(10) NOT NULL auto_increment,
  `mall_uid` int(10) NOT NULL,
  `mall_content_name` varchar(200) default NULL,
  `mallcontent` text NOT NULL,
  `status` int(2) default '1',
  PRIMARY KEY  (`mall_content_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `mall_content`
--

INSERT INTO `mall_content` (`mall_content_id`, `mall_uid`, `mall_content_name`, `mallcontent`, `status`) VALUES
(1, 1, 'dvsds', 'sdfsdf', 1),
(2, 1, 'xxxxx', 'xxxx', 1),
(3, 1, 'xxxxx', 'xxxx', 1),
(4, 1, 'Test', 'Test...', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mall_teams_details`
--

CREATE TABLE IF NOT EXISTS `mall_teams_details` (
  `mall_team_uid` int(10) NOT NULL auto_increment,
  `mall_uid` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) default NULL,
  `designation` varchar(100) default NULL,
  `tag_line` varchar(200) default NULL,
  `t_l_footnote` varchar(200) default NULL,
  `email` varchar(200) default NULL,
  `website` varchar(200) default NULL,
  `cell_phone` varchar(200) default NULL,
  `business_phone` varchar(200) default NULL,
  `fax` varchar(100) default NULL,
  `address1` text,
  `address2` text,
  `city` varchar(100) default NULL,
  `postal_code` varchar(100) default NULL,
  `province` int(10) default NULL,
  `country` varchar(100) default NULL,
  `about` text,
  `past_revisions` text,
  `team_photo` text,
  `team_photo_path` text,
  `team_photo_path_crop` text,
  `status` int(2) default '0',
  PRIMARY KEY  (`mall_team_uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `mall_teams_details`
--

INSERT INTO `mall_teams_details` (`mall_team_uid`, `mall_uid`, `first_name`, `last_name`, `designation`, `tag_line`, `t_l_footnote`, `email`, `website`, `cell_phone`, `business_phone`, `fax`, `address1`, `address2`, `city`, `postal_code`, `province`, `country`, `about`, `past_revisions`, `team_photo`, `team_photo_path`, `team_photo_path_crop`, `status`) VALUES
(1, 1, 'xx', 'Ahmed', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '557ayisha1.jpg', 'http://localhost/admin-ebdshop/uploads/mall/1/team/1/557ayisha1.jpg', 'http://localhost/admin-ebdshop/uploads/mall/1/team/1/crop/557ayisha1.jpg', 0),
(2, 1, 'Ayisa', 'Siddiqa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '242180_n.jpg', 'http://localhost/admin-ebdshop/uploads/mall/1/team/2/242180_n.jpg', 'http://localhost/admin-ebdshop/uploads/mall/1/team/2/crop/242180_n.jpg', 0),
(3, 5, 'sdasdsd', 'sdasd', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mall_team_photo_position`
--

CREATE TABLE IF NOT EXISTS `mall_team_photo_position` (
  `tpp_id` int(11) NOT NULL auto_increment,
  `mall_team_uid` int(11) NOT NULL,
  `x` int(11) NOT NULL,
  `y` int(11) NOT NULL,
  `w` int(11) NOT NULL,
  `h` int(11) NOT NULL,
  PRIMARY KEY  (`tpp_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `mall_team_photo_position`
--

INSERT INTO `mall_team_photo_position` (`tpp_id`, `mall_team_uid`, `x`, `y`, `w`, `h`) VALUES
(1, 2, 81, 1, 248, 332),
(2, 2, 81, 1, 248, 332);

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE IF NOT EXISTS `newsletter` (
  `id` int(11) NOT NULL auto_increment,
  `agent_uid` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `send_to` int(1) NOT NULL,
  `created` int(10) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `newsletter`
--


-- --------------------------------------------------------

--
-- Table structure for table `newsletter_subscribers`
--

CREATE TABLE IF NOT EXISTS `newsletter_subscribers` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `agent_uid` int(10) unsigned NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `xcode` varchar(100) NOT NULL,
  `type` int(1) NOT NULL,
  `created` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `newsletter_subscribers`
--


-- --------------------------------------------------------

--
-- Table structure for table `page_content`
--

CREATE TABLE IF NOT EXISTS `page_content` (
  `page_content_id` int(10) NOT NULL auto_increment,
  `menu_id` int(10) NOT NULL,
  `agent_uid` int(10) NOT NULL,
  `page_content1` text,
  `page_content2` text,
  `page_content3` text,
  `add_date` int(10) default NULL,
  `status` int(2) default NULL,
  PRIMARY KEY  (`page_content_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=292 ;

--
-- Dumping data for table `page_content`
--

INSERT INTO `page_content` (`page_content_id`, `menu_id`, `agent_uid`, `page_content1`, `page_content2`, `page_content3`, `add_date`, `status`) VALUES
(1, 1, 1, NULL, NULL, NULL, NULL, NULL),
(2, 2, 1, NULL, NULL, NULL, NULL, NULL),
(3, 3, 1, NULL, NULL, NULL, NULL, NULL),
(4, 4, 1, NULL, NULL, NULL, NULL, NULL),
(5, 5, 1, NULL, NULL, NULL, NULL, NULL),
(6, 6, 1, NULL, NULL, NULL, NULL, NULL),
(7, 7, 1, NULL, NULL, NULL, NULL, NULL),
(8, 8, 1, NULL, NULL, NULL, NULL, NULL),
(9, 9, 1, NULL, NULL, NULL, NULL, NULL),
(10, 10, 1, NULL, NULL, NULL, NULL, NULL),
(11, 11, 1, NULL, NULL, NULL, NULL, NULL),
(12, 12, 1, NULL, NULL, NULL, NULL, NULL),
(13, 13, 1, NULL, NULL, NULL, NULL, NULL),
(14, 14, 1, NULL, NULL, NULL, NULL, NULL),
(15, 15, 1, NULL, NULL, NULL, NULL, NULL),
(16, 1, 4, NULL, NULL, NULL, NULL, NULL),
(17, 2, 4, NULL, NULL, NULL, NULL, NULL),
(18, 3, 4, NULL, NULL, NULL, NULL, NULL),
(19, 4, 4, NULL, NULL, NULL, NULL, NULL),
(20, 5, 4, NULL, NULL, NULL, NULL, NULL),
(21, 6, 4, NULL, NULL, NULL, NULL, NULL),
(22, 7, 4, NULL, NULL, NULL, NULL, NULL),
(23, 8, 4, NULL, NULL, NULL, NULL, NULL),
(24, 9, 4, NULL, NULL, NULL, NULL, NULL),
(25, 10, 4, NULL, NULL, NULL, NULL, NULL),
(26, 11, 4, NULL, NULL, NULL, NULL, NULL),
(27, 12, 4, NULL, NULL, NULL, NULL, NULL),
(28, 1, 5, NULL, NULL, NULL, NULL, NULL),
(29, 2, 5, NULL, NULL, NULL, NULL, NULL),
(30, 3, 5, NULL, NULL, NULL, NULL, NULL),
(31, 4, 5, NULL, NULL, NULL, NULL, NULL),
(32, 5, 5, NULL, NULL, NULL, NULL, NULL),
(33, 6, 5, NULL, NULL, NULL, NULL, NULL),
(34, 7, 5, NULL, NULL, NULL, NULL, NULL),
(35, 8, 5, NULL, NULL, NULL, NULL, NULL),
(36, 9, 5, NULL, NULL, NULL, NULL, NULL),
(37, 10, 5, NULL, NULL, NULL, NULL, NULL),
(38, 11, 5, NULL, NULL, NULL, NULL, NULL),
(39, 12, 5, NULL, NULL, NULL, NULL, NULL),
(52, 1, 11, NULL, NULL, NULL, NULL, NULL),
(53, 2, 11, NULL, NULL, NULL, NULL, NULL),
(54, 3, 11, NULL, NULL, NULL, NULL, NULL),
(55, 4, 11, NULL, NULL, NULL, NULL, NULL),
(56, 5, 11, NULL, NULL, NULL, NULL, NULL),
(57, 6, 11, NULL, NULL, NULL, NULL, NULL),
(58, 7, 11, NULL, NULL, NULL, NULL, NULL),
(59, 8, 11, NULL, NULL, NULL, NULL, NULL),
(60, 9, 11, NULL, NULL, NULL, NULL, NULL),
(61, 10, 11, NULL, NULL, NULL, NULL, NULL),
(62, 11, 11, NULL, NULL, NULL, NULL, NULL),
(63, 12, 11, NULL, NULL, NULL, NULL, NULL),
(112, 1, 16, NULL, NULL, NULL, NULL, NULL),
(113, 2, 16, NULL, NULL, NULL, NULL, NULL),
(114, 3, 16, NULL, NULL, NULL, NULL, NULL),
(115, 4, 16, NULL, NULL, NULL, NULL, NULL),
(116, 5, 16, NULL, NULL, NULL, NULL, NULL),
(117, 6, 16, NULL, NULL, NULL, NULL, NULL),
(118, 7, 16, NULL, NULL, NULL, NULL, NULL),
(119, 8, 16, NULL, NULL, NULL, NULL, NULL),
(120, 9, 16, NULL, NULL, NULL, NULL, NULL),
(121, 10, 16, NULL, NULL, NULL, NULL, NULL),
(122, 11, 16, NULL, NULL, NULL, NULL, NULL),
(123, 12, 16, NULL, NULL, NULL, NULL, NULL),
(124, 1, 17, NULL, NULL, NULL, NULL, NULL),
(125, 2, 17, NULL, NULL, NULL, NULL, NULL),
(126, 3, 17, NULL, NULL, NULL, NULL, NULL),
(127, 4, 17, NULL, NULL, NULL, NULL, NULL),
(128, 5, 17, NULL, NULL, NULL, NULL, NULL),
(129, 6, 17, NULL, NULL, NULL, NULL, NULL),
(130, 7, 17, NULL, NULL, NULL, NULL, NULL),
(131, 8, 17, NULL, NULL, NULL, NULL, NULL),
(132, 9, 17, NULL, NULL, NULL, NULL, NULL),
(133, 10, 17, NULL, NULL, NULL, NULL, NULL),
(134, 11, 17, NULL, NULL, NULL, NULL, NULL),
(135, 12, 17, NULL, NULL, NULL, NULL, NULL),
(136, 1, 18, NULL, NULL, NULL, NULL, NULL),
(137, 2, 18, NULL, NULL, NULL, NULL, NULL),
(138, 3, 18, NULL, NULL, NULL, NULL, NULL),
(139, 4, 18, NULL, NULL, NULL, NULL, NULL),
(140, 5, 18, NULL, NULL, NULL, NULL, NULL),
(141, 6, 18, NULL, NULL, NULL, NULL, NULL),
(142, 7, 18, NULL, NULL, NULL, NULL, NULL),
(143, 8, 18, NULL, NULL, NULL, NULL, NULL),
(144, 9, 18, NULL, NULL, NULL, NULL, NULL),
(145, 10, 18, NULL, NULL, NULL, NULL, NULL),
(146, 11, 18, NULL, NULL, NULL, NULL, NULL),
(147, 12, 18, NULL, NULL, NULL, NULL, NULL),
(148, 1, 19, NULL, NULL, NULL, NULL, NULL),
(149, 2, 19, NULL, NULL, NULL, NULL, NULL),
(150, 3, 19, NULL, NULL, NULL, NULL, NULL),
(151, 4, 19, NULL, NULL, NULL, NULL, NULL),
(152, 5, 19, NULL, NULL, NULL, NULL, NULL),
(153, 6, 19, NULL, NULL, NULL, NULL, NULL),
(154, 7, 19, NULL, NULL, NULL, NULL, NULL),
(155, 8, 19, NULL, NULL, NULL, NULL, NULL),
(156, 9, 19, NULL, NULL, NULL, NULL, NULL),
(157, 10, 19, NULL, NULL, NULL, NULL, NULL),
(158, 11, 19, NULL, NULL, NULL, NULL, NULL),
(159, 12, 19, NULL, NULL, NULL, NULL, NULL),
(280, 1, 30, NULL, NULL, NULL, NULL, NULL),
(281, 2, 30, NULL, NULL, NULL, NULL, NULL),
(282, 3, 30, NULL, NULL, NULL, NULL, NULL),
(283, 4, 30, NULL, NULL, NULL, NULL, NULL),
(284, 5, 30, NULL, NULL, NULL, NULL, NULL),
(285, 6, 30, NULL, NULL, NULL, NULL, NULL),
(286, 7, 30, NULL, NULL, NULL, NULL, NULL),
(287, 8, 30, NULL, NULL, NULL, NULL, NULL),
(288, 9, 30, NULL, NULL, NULL, NULL, NULL),
(289, 10, 30, NULL, NULL, NULL, NULL, NULL),
(290, 11, 30, NULL, NULL, NULL, NULL, NULL),
(291, 12, 30, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE IF NOT EXISTS `product_category` (
  `category_id` int(10) NOT NULL auto_increment,
  `category_type` tinyint(1) NOT NULL default '1',
  `category_name` varchar(200) default NULL,
  `product_category_url` varchar(200) NOT NULL,
  `parent_id` int(10) default '0',
  `agent_uid` int(10) default '0',
  `ordering` tinyint(2) NOT NULL default '0',
  `agent_ordering` tinyint(2) NOT NULL default '0',
  `status` int(2) NOT NULL default '1',
  PRIMARY KEY  (`category_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=592 ;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`category_id`, `category_type`, `category_name`, `product_category_url`, `parent_id`, `agent_uid`, `ordering`, `agent_ordering`, `status`) VALUES
(1, 1, 'Clothing & Accessories', '', 0, 0, 3, 0, 1),
(2, 1, 'Men''s Wears', '', 1, 0, 2, 0, 1),
(3, 1, 'Women''s Wears', '', 1, 0, 1, 0, 1),
(4, 1, 'Baby & Child Wear''s', '', 1, 0, 0, 0, 1),
(5, 1, 'Boutique & Batik', '', 6, 0, 0, 0, 1),
(6, 1, 'Jute & Handicrafts', '', 0, 0, 11, 0, 1),
(7, 1, 'Leather & Bags', '', 0, 0, 2, 0, 1),
(8, 1, 'Jute Products', '', 6, 0, 0, 0, 1),
(9, 1, 'Handicrafts', '', 6, 0, 0, 0, 1),
(10, 1, 'Foot wears', '', 0, 0, 20, 0, 1),
(11, 1, 'Bag & Travelling', '', 7, 0, 0, 0, 1),
(12, 1, 'Leather Goods', '', 7, 0, 0, 0, 1),
(13, 1, 'Belts', '', 7, 0, 0, 0, 1),
(14, 1, 'Jewelry & Watches', '', 0, 0, 19, 0, 1),
(15, 1, 'Jewellery', '', 14, 0, 0, 0, 1),
(16, 1, 'Watch & Sunglass', '', 14, 0, 0, 0, 1),
(17, 1, 'Optics', '', 14, 0, 0, 0, 1),
(18, 1, 'Beauty & Fragrances', '', 0, 0, 18, 0, 1),
(19, 1, 'Consumer', '', 18, 0, 0, 0, 1),
(20, 1, 'Cosmetics', '', 18, 0, 0, 0, 1),
(21, 1, 'Hair & Skin care', '', 18, 0, 0, 0, 1),
(22, 1, 'Bath & Body', '', 18, 0, 0, 0, 1),
(23, 1, 'Dental Care', '', 18, 0, 0, 0, 1),
(24, 1, 'Foods', '', 0, 0, 17, 0, 1),
(25, 1, 'Fast Food', '', 24, 0, 0, 0, 1),
(26, 1, 'Chinuse', '', 24, 0, 0, 0, 1),
(27, 1, 'Resturants', '', 24, 0, 0, 0, 1),
(28, 1, 'Coffie House', '', 24, 0, 0, 0, 1),
(29, 1, 'Sweets & Confectionary', '', 24, 0, 0, 0, 1),
(30, 1, 'Birani & Tehari', '', 24, 0, 0, 0, 1),
(31, 1, 'Stationery & Gifts', '', 0, 0, 15, 0, 1),
(32, 1, 'Gift Cards', '', 31, 0, 0, 0, 1),
(33, 1, 'Cards & Stationery', '', 31, 0, 0, 0, 1),
(34, 1, 'Toys & Games', '', 31, 0, 0, 0, 1),
(35, 1, 'Flowers & Gifts', '', 31, 0, 0, 0, 1),
(36, 1, 'Wedding', '', 31, 0, 0, 0, 1),
(37, 1, 'Sports', '', 31, 0, 0, 0, 1),
(38, 1, 'Garden', '', 31, 0, 0, 0, 1),
(39, 1, 'Electricals', '', 0, 0, 14, 0, 1),
(40, 1, 'Consumer Electronics', '', 39, 0, 0, 0, 1),
(41, 1, 'Mobile Phone & Accessories', '', 39, 0, 0, 0, 1),
(42, 1, 'Computing & Accessories', '', 39, 0, 0, 0, 1),
(43, 1, 'Home Appliances', '', 0, 0, 7, 0, 1),
(44, 1, 'Electrical & Lighting', '', 0, 0, 13, 0, 1),
(45, 1, 'Furnitures', '', 0, 0, 12, 0, 1),
(46, 1, 'Wood Furniture', '', 45, 0, 0, 0, 1),
(47, 1, 'Kitchen & Gourmet', '', 43, 0, 0, 0, 1),
(48, 1, 'Cookware & Dining', '', 43, 0, 0, 0, 1),
(49, 1, 'Bathroom Fitness', '', 43, 0, 0, 0, 1),
(50, 1, 'Decorative Accessories', '', 43, 0, 0, 0, 1),
(51, 1, 'Bedding', '', 43, 0, 0, 0, 1),
(52, 1, 'Transportation', '', 0, 0, 9, 0, 1),
(53, 1, 'Cars', '', 52, 0, 0, 0, 1),
(54, 1, 'Elevator & Funicular Car', '', 52, 0, 0, 0, 1),
(55, 1, 'Bus & Trucs Accessories', '', 52, 0, 0, 0, 1),
(56, 1, 'Car Accessories', '', 52, 0, 0, 0, 1),
(57, 1, 'Bike &  Accessories', '', 52, 0, 0, 0, 1),
(58, 1, 'Cycle', '', 52, 0, 0, 0, 1),
(59, 1, 'Health & Medicine', '', 0, 0, 8, 0, 1),
(60, 1, 'Beauty Equipment', '', 59, 0, 0, 0, 1),
(61, 1, 'Dental Apparatus', '', 59, 0, 0, 0, 1),
(62, 1, 'Diagnosis Equipment', '', 59, 0, 0, 0, 1),
(63, 1, 'Disposable Medical Supplies', '', 59, 0, 0, 0, 1),
(64, 1, 'Health Care Appliance', '', 59, 0, 0, 0, 1),
(65, 1, 'Surgical Equipment', '', 59, 0, 0, 0, 1),
(66, 1, 'Fitness Equipment', '', 59, 0, 0, 0, 1),
(67, 1, 'Construction & Decoration', '', 0, 0, 4, 0, 1),
(68, 1, 'Tiles & Ceramics', '', 67, 0, 0, 0, 1),
(69, 1, 'Pipe Fittings', '', 67, 0, 0, 0, 1),
(70, 1, 'Hardware', '', 67, 0, 0, 0, 1),
(71, 1, 'Timber & Plywood', '', 67, 0, 0, 0, 1),
(72, 1, 'Bathroom Furniture', '', 67, 0, 0, 0, 1),
(73, 1, 'Sanatary & Bathroom Fitnes', '', 67, 0, 0, 0, 1),
(74, 1, 'Services', '', 0, 0, 10, 0, 1),
(75, 1, 'Hospital & Diagonistic Center', '', 74, 0, 0, 0, 1),
(76, 1, 'Doctor Chember', '', 74, 0, 0, 0, 1),
(77, 1, 'Dental Chember', '', 74, 0, 0, 0, 1),
(78, 1, 'Gents & Women Parler', '', 74, 0, 0, 0, 1),
(79, 1, 'Dry Cleanners', '', 74, 0, 0, 0, 1),
(80, 1, 'Advertising', '', 74, 0, 0, 0, 1),
(81, 1, 'Express Delivery', '', 74, 0, 0, 0, 1),
(82, 1, 'Package & Printing', '', 74, 0, 0, 0, 1),
(83, 1, 'Shipment & Storage', '', 74, 0, 0, 0, 1),
(84, 1, 'Comunity Center', '', 74, 0, 0, 0, 1),
(85, 1, 'Conference Center', '', 74, 0, 0, 0, 1),
(86, 1, 'Body Fitness', '', 74, 0, 0, 0, 1),
(87, 1, 'Event Management', '', 74, 0, 0, 0, 1),
(88, 1, 'Hotel & Tours', '', 0, 0, 6, 0, 1),
(89, 1, 'International Hotel', '', 88, 0, 0, 0, 1),
(90, 1, 'Hotel', '', 88, 0, 0, 0, 1),
(91, 1, 'Tour & Travels', '', 88, 0, 0, 0, 1),
(92, 1, 'Resorte', '', 88, 0, 0, 0, 1),
(93, 1, 'Books & Magazines', '', 0, 0, 5, 0, 1),
(94, 1, 'Regular Books', '', 93, 0, 0, 0, 1),
(95, 1, 'Kids', '', 93, 0, 0, 0, 1),
(96, 1, 'Magazines', '', 93, 0, 0, 0, 1),
(97, 1, 'Sports', '', 0, 0, 16, 0, 1),
(98, 1, 'Indoor Sports', '', 97, 0, 0, 0, 1),
(99, 1, 'Casual Shirts', '', 2, 0, 0, 0, 1),
(100, 1, 'Casual Trousers', '', 2, 0, 12, 0, 1),
(101, 1, 'Cardigans & Jumpers', '', 2, 0, 13, 0, 1),
(102, 1, 'Formal Shirts', '', 2, 0, 14, 0, 1),
(103, 1, 'Formal Pant', '', 2, 0, 15, 0, 1),
(104, 1, 'Formal Trousers', '', 2, 0, 16, 0, 1),
(105, 1, 'Jeans', '', 2, 0, 17, 0, 1),
(106, 1, 'Knitwear', '', 2, 0, 18, 0, 1),
(107, 1, 'Nightwear', '', 2, 0, 19, 0, 1),
(108, 1, 'Panjabi', '', 2, 0, 11, 0, 1),
(109, 1, 'Short Panjabi', '', 2, 0, 9, 0, 1),
(110, 1, 'Smart Shirts', '', 2, 0, 10, 0, 1),
(111, 1, 'Shorts & Swimwear', '', 2, 0, 4, 0, 1),
(112, 1, 'Socks', '', 2, 0, 2, 0, 1),
(113, 1, 'Sportswear', '', 2, 0, 3, 0, 1),
(114, 1, 'Suits', '', 2, 0, 5, 0, 1),
(115, 1, 'T-Shirts', '', 2, 0, 1, 0, 1),
(116, 1, 'Ties', '', 2, 0, 6, 0, 1),
(117, 1, 'Underwear', '', 2, 0, 7, 0, 1),
(118, 1, 'Waistcoats', '', 2, 0, 8, 0, 1),
(119, 1, 'Accessories', '', 2, 0, 20, 0, 1),
(120, 1, 'Sharee', '', 1, 0, 3, 0, 1),
(121, 1, 'Coats & Jackets', '', 3, 0, 0, 0, 1),
(122, 1, 'Dresses', '', 3, 0, 0, 0, 1),
(123, 1, 'Fatua', '', 3, 0, 0, 0, 1),
(124, 1, 'Jeans Laydies', '', 3, 0, 0, 0, 1),
(125, 1, 'Hijab Niqab Burqa', '', 3, 0, 0, 0, 1),
(126, 1, 'Indian Dresses', '', 3, 0, 0, 0, 1),
(127, 1, 'Knitwear', '', 3, 0, 0, 0, 1),
(128, 1, 'Lehenga', '', 3, 0, 0, 0, 1),
(129, 1, 'Long Scart', '', 3, 0, 0, 0, 1),
(130, 1, 'Leggings', '', 3, 0, 0, 0, 1),
(131, 1, 'Ladies Panjabi', '', 3, 0, 0, 0, 1),
(132, 1, 'Ladeies Short Panjabi', '', 3, 0, 0, 0, 1),
(133, 1, 'Lingerie & Underwear', '', 3, 0, 0, 0, 1),
(134, 1, 'Mini Scart', '', 3, 0, 0, 0, 1),
(135, 1, 'Maternity', '', 3, 0, 0, 0, 1),
(136, 1, 'Nightwear', '', 3, 0, 0, 0, 1),
(137, 1, 'Petite', '', 3, 0, 0, 0, 1),
(138, 1, 'Short Shirt', '', 3, 0, 0, 0, 1),
(139, 1, 'Socks & Tights', '', 3, 0, 0, 0, 1),
(140, 1, 'Sportswear', '', 3, 0, 0, 0, 1),
(141, 1, 'Suits & Tailoring', '', 3, 0, 0, 0, 1),
(142, 1, 'Swimwear & Beachwear', '', 3, 0, 0, 0, 1),
(143, 1, 'Two piec', '', 3, 0, 0, 0, 1),
(144, 1, 'Three pice', '', 3, 0, 0, 0, 1),
(145, 1, 'Three Quater', '', 3, 0, 0, 0, 1),
(146, 1, 'Tops', '', 3, 0, 0, 0, 1),
(147, 1, 'Trousers & Shorts', '', 3, 0, 0, 0, 1),
(148, 1, 'Accessories', '', 3, 0, 0, 0, 1),
(149, 1, 'Baby & Toddlerwear', '', 4, 0, 0, 0, 1),
(150, 1, 'Boyswear', '', 4, 0, 0, 0, 1),
(151, 1, 'Fancy Dress', '', 4, 0, 0, 0, 1),
(152, 1, 'Girlswear', '', 4, 0, 0, 0, 1),
(153, 1, 'Mums & Babies', '', 4, 0, 0, 0, 1),
(154, 1, 'Nightwear', '', 4, 0, 0, 0, 1),
(155, 1, 'School Uniform', '', 4, 0, 0, 0, 1),
(156, 1, 'Socks & Underwear', '', 4, 0, 0, 0, 1),
(157, 1, 'Accessories', '', 4, 0, 0, 0, 1),
(158, 1, 'Cotton Sharee', '', 120, 0, 1, 0, 1),
(159, 1, 'Benarosi', '', 120, 0, 8, 0, 1),
(160, 1, 'Bridal Sharee', '', 120, 0, 7, 0, 1),
(161, 1, 'Jamdani', '', 120, 0, 6, 0, 1),
(162, 1, 'Jorzet', '', 120, 0, 5, 0, 1),
(163, 1, 'Katan', '', 120, 0, 4, 0, 1),
(164, 1, 'Rajshahi Silk', '', 120, 0, 0, 0, 1),
(165, 1, 'Taat', '', 120, 0, 3, 0, 1),
(166, 1, 'Tangail', '', 120, 0, 2, 0, 1),
(167, 1, 'Accessories', 'accessories', 120, 0, 9, 0, 1),
(168, 1, 'Boy''s  Shoes', '', 10, 0, 0, 0, 1),
(169, 1, 'Boys'' Athletic Shoes', '', 168, 0, 0, 0, 1),
(170, 1, 'Boys'' Skate Shoes', '', 168, 0, 0, 0, 1),
(171, 1, 'Boys'' Sandals', '', 168, 0, 0, 0, 1),
(172, 1, 'Boys'' Dress Shoes', '', 168, 0, 0, 0, 1),
(173, 1, 'Boys'' Grade-School Shoes', '', 168, 0, 0, 0, 1),
(174, 1, 'Bridal Shoes', '', 275, 0, 0, 0, 1),
(175, 1, 'Converse', '', 275, 0, 0, 0, 1),
(176, 1, 'Men''s Sandals', '', 271, 0, 0, 0, 1),
(177, 1, 'Men''s Dress Shoes', '', 271, 0, 0, 0, 1),
(178, 1, 'Men''s Casual Shoes', '', 271, 0, 0, 0, 1),
(179, 1, 'Men''s Work Boots', '', 271, 0, 0, 0, 1),
(180, 1, 'Men''s Athletic Shoes', '', 271, 0, 0, 0, 1),
(182, 1, 'Women''s Dress Shoes', '', 274, 0, 0, 0, 1),
(183, 1, 'Women''s Casual Shoes', '', 274, 0, 0, 0, 1),
(184, 1, 'Women''s Boots', '', 274, 0, 0, 0, 1),
(185, 1, 'Women''s Athletic Shoes', '', 274, 0, 0, 0, 1),
(186, 1, 'Girls'' Athletic Shoes', '', 273, 0, 0, 0, 1),
(187, 1, 'Girls'' Sandals', '', 273, 0, 0, 0, 1),
(188, 1, 'Girls'' Dress Shoes', '', 273, 0, 0, 0, 1),
(189, 1, 'Girls'' Grade-School Shoes', '', 273, 0, 0, 0, 1),
(190, 1, 'Jute Promotional Bags', '', 8, 0, 0, 0, 1),
(191, 1, 'Jute Shopping Bags', '', 8, 0, 0, 0, 1),
(192, 1, 'Jute Gift Bags', '', 8, 0, 0, 0, 1),
(193, 1, 'Jute Beach Bags', '', 8, 0, 0, 0, 1),
(194, 1, 'Jute Embroidery Bags', '', 8, 0, 0, 0, 1),
(195, 1, 'Jute Designer Bags', '', 8, 0, 0, 0, 1),
(196, 1, 'Jute Fancy Bags', '', 8, 0, 0, 0, 1),
(197, 1, 'Jute Bottole Bags', '', 8, 0, 0, 0, 1),
(198, 1, 'Jute Colour Shed', '', 8, 0, 0, 0, 1),
(199, 1, 'Cotton Bag', '', 8, 0, 0, 0, 1),
(200, 1, 'Cotton Promotional Bags', '', 8, 0, 0, 0, 1),
(201, 1, 'Canvas Bags', '', 8, 0, 0, 0, 1),
(202, 1, 'Canvas Promotional Bags', '', 8, 0, 0, 0, 1),
(203, 1, 'Non Woven Bags', '', 8, 0, 0, 0, 1),
(204, 1, 'Handles', '', 8, 0, 0, 0, 1),
(205, 1, 'Wood', '', 9, 0, 0, 0, 1),
(206, 1, 'Stone', '', 9, 0, 0, 0, 1),
(207, 1, 'Stone', '', 9, 0, 0, 0, 1),
(208, 1, 'Glass', '', 9, 0, 0, 0, 1),
(209, 1, 'Cane And Bamboo', '', 9, 0, 0, 0, 1),
(210, 1, 'Pottery', '', 9, 0, 0, 0, 1),
(211, 1, 'Home Decorations', '', 9, 0, 0, 0, 1),
(212, 1, 'Textile Designer', '', 9, 0, 0, 0, 1),
(213, 1, 'Home Furnishing', '', 9, 0, 0, 0, 1),
(214, 1, 'Tribal', '', 9, 0, 0, 0, 1),
(215, 1, 'Beaded', '', 9, 0, 0, 0, 1),
(216, 1, 'Metal', '', 9, 0, 0, 0, 1),
(217, 1, 'Silver', '', 9, 0, 0, 0, 1),
(218, 1, 'Lacquer', '', 9, 0, 0, 0, 1),
(219, 1, 'Jewelry Boxes', '', 9, 0, 0, 0, 1),
(220, 1, 'Fashion Jewelry', '', 9, 0, 0, 0, 1),
(221, 1, 'Apparels & Accessories', '', 9, 0, 0, 0, 1),
(222, 1, 'Gifts For Her', '', 9, 0, 0, 0, 1),
(223, 1, 'Fashion Accessory', '', 9, 0, 0, 0, 1),
(224, 1, 'Folk Art', '', 9, 0, 0, 0, 1),
(225, 1, 'Miniature Painting', '', 9, 0, 0, 0, 1),
(226, 1, 'Contemporary Artist', '', 9, 0, 0, 0, 1),
(227, 1, 'Birth Day Gifts', '', 9, 0, 0, 0, 1),
(228, 1, 'Marrige Day Gift', '', 9, 0, 0, 0, 1),
(229, 1, 'Valentine Day Gifts', '', 9, 0, 0, 0, 1),
(230, 1, 'Mothers Day Gifts', '', 9, 0, 0, 0, 1),
(231, 1, 'Fathers Day Gifts', '', 9, 0, 0, 0, 1),
(232, 1, 'Valentine Day Gifts', '', 9, 0, 0, 0, 1),
(233, 1, 'Christmas Gift', '', 9, 0, 0, 0, 1),
(234, 1, 'Candles', '', 9, 0, 0, 0, 1),
(235, 1, 'CraftsCenter', '', 9, 0, 0, 0, 1),
(236, 1, 'Affiliates', '', 9, 0, 0, 0, 1),
(237, 1, 'Picture Gallery', '', 9, 0, 0, 0, 1),
(238, 1, 'Marble Write up', '', 9, 0, 0, 0, 1),
(239, 1, 'Stone Carving', '', 9, 0, 0, 0, 1),
(240, 1, 'Stone Write up', '', 9, 0, 0, 0, 1),
(241, 1, 'Marble Sculptures', '', 9, 0, 0, 0, 1),
(242, 1, 'Kids Crafts', '', 9, 0, 0, 0, 1),
(243, 1, 'Shoulder Bugs', '', 11, 0, 0, 0, 1),
(244, 1, 'Across Body', '', 11, 0, 0, 0, 1),
(245, 1, 'Evening & Clutch Bugs', '', 11, 0, 0, 0, 1),
(246, 1, 'Tote Bags', '', 11, 0, 0, 0, 1),
(247, 1, 'School bags', '', 11, 0, 0, 0, 1),
(248, 1, 'Bowling', '', 11, 0, 0, 0, 1),
(249, 1, 'Backpacks', '', 11, 0, 0, 0, 1),
(250, 1, 'Workbags', '', 11, 0, 0, 0, 1),
(251, 1, 'Leather Bags', '', 11, 0, 0, 0, 1),
(252, 1, 'Ladies Hand Bags', '', 11, 0, 0, 0, 1),
(253, 1, 'Fancy Hand Bags', '', 11, 0, 0, 0, 1),
(254, 1, 'Purses & Wallets', '', 11, 0, 0, 0, 1),
(255, 1, 'Across Body Bag', '', 11, 0, 0, 0, 1),
(256, 1, 'Shopper Bags', '', 11, 0, 0, 0, 1),
(257, 1, 'Occasion Handbags', '', 11, 0, 0, 0, 1),
(258, 1, 'Luggage & travel bags', '', 11, 0, 0, 0, 1),
(259, 1, 'Carry-on luggage', '', 11, 0, 0, 0, 1),
(260, 1, 'Trolley Cases', '', 11, 0, 0, 0, 1),
(261, 1, 'Wheeled Duffles', '', 11, 0, 0, 0, 1),
(262, 1, 'Garment Bags', '', 11, 0, 0, 0, 1),
(265, 1, 'Diamonds', '', 14, 0, 0, 0, 1),
(266, 1, 'Steel Furniture', '', 45, 0, 0, 0, 1),
(267, 1, 'Bamboo Furniture', '', 45, 0, 0, 0, 1),
(268, 1, 'Cane Furniture', '', 45, 0, 0, 0, 1),
(269, 1, 'Palywood Furniture', '', 45, 0, 0, 0, 1),
(271, 1, 'Men''s Shoes', '', 10, 0, 0, 0, 1),
(274, 1, 'Women''s Shoes', '', 10, 0, 0, 0, 1),
(273, 1, 'Girl''s Shoes', '', 10, 0, 0, 0, 1),
(275, 1, 'Other''s Shoes', '', 10, 0, 0, 0, 1),
(276, 1, 'Cake & Pastry', '', 24, 0, 0, 0, 1),
(277, 1, 'Sound & Vision', '', 39, 0, 0, 0, 1),
(278, 1, 'Televisions', '', 277, 0, 0, 0, 1),
(279, 1, 'Blu-ray, DVD & Home Cinema', '', 277, 0, 0, 0, 1),
(280, 1, 'Photography & Camcorders', '', 277, 0, 0, 0, 1),
(281, 1, 'Audio', '', 277, 0, 0, 0, 1),
(282, 1, 'iPods & MP3 Players', '', 277, 0, 0, 0, 1),
(283, 1, 'Headphones', '', 277, 0, 0, 0, 1),
(284, 1, 'Gaming', '', 277, 0, 0, 0, 1),
(285, 1, 'Kindle & eReaders', '', 277, 0, 0, 0, 1),
(286, 1, 'Stands & Accessories', '', 277, 0, 0, 0, 1),
(287, 1, 'Technology Offers', '', 277, 0, 0, 0, 1),
(288, 1, 'iPad & Tablet PCs', '', 42, 0, 0, 0, 1),
(289, 1, 'Laptops & Netbooks', '', 42, 0, 0, 0, 1),
(290, 1, 'Desktop PCs & Servers', '', 42, 0, 0, 0, 1),
(291, 1, 'Software', '', 42, 0, 0, 0, 1),
(292, 1, 'Printing', '', 42, 0, 0, 0, 1),
(293, 1, 'Computer Accessories', '', 42, 0, 0, 0, 1),
(294, 1, 'Telephones', '', 42, 0, 0, 0, 1),
(295, 1, 'Express Delivery', '', 40, 0, 0, 0, 1),
(296, 1, 'Cookers & Ovens', '', 40, 0, 0, 0, 1),
(297, 1, 'Dishwashers', '', 40, 0, 0, 0, 1),
(298, 1, 'Fridges & Freezers', '', 40, 0, 0, 0, 1),
(299, 1, 'Washing Machines', '', 40, 0, 0, 0, 1),
(300, 1, 'Tumble Dryers', '', 40, 0, 0, 0, 1),
(301, 1, 'Washer Dryers', '', 40, 0, 0, 0, 1),
(302, 1, 'Vacuum Cleaners', '', 40, 0, 0, 0, 1),
(303, 1, 'Fires', '', 40, 0, 0, 0, 1),
(304, 1, 'Hostess Trolleys', '', 40, 0, 0, 0, 1),
(305, 1, 'Maytag Laundry Solutions', '', 40, 0, 0, 0, 1),
(306, 1, 'Cooking Appliances', '', 40, 0, 0, 0, 1),
(307, 1, 'Food & Drink Preparation', '', 40, 0, 0, 0, 1),
(308, 1, 'Tea & Coffee', '', 40, 0, 0, 0, 1),
(309, 1, 'Kettles', '', 40, 0, 0, 0, 1),
(310, 1, 'Toasters', '', 40, 0, 0, 0, 1),
(311, 1, 'Kettle & Toaster Sets', '', 40, 0, 0, 0, 1),
(312, 1, 'Ironing', '', 40, 0, 0, 0, 1),
(313, 1, 'Security & Monitoring', '', 40, 0, 0, 0, 1),
(314, 1, 'Heating & Cooling', '', 40, 0, 0, 0, 1),
(315, 1, 'Sewing', '', 40, 0, 0, 0, 1),
(316, 1, 'Blackberry Cases', '', 41, 0, 0, 0, 1),
(317, 1, 'Handsfree Kits', '', 41, 0, 0, 0, 1),
(318, 1, 'iPhone Cases', '', 41, 0, 0, 0, 1),
(319, 1, 'Chargers', '', 41, 0, 0, 0, 1),
(320, 1, 'Solar System', '', 39, 0, 0, 0, 1),
(321, 1, 'Solar Street Light', '', 320, 0, 0, 0, 1),
(322, 1, 'Solar Water Heater', '', 320, 0, 0, 0, 1),
(323, 1, 'Solar Water Pump', '', 320, 0, 0, 0, 1),
(324, 1, 'Solar Garden Light', '', 320, 0, 0, 0, 1),
(325, 1, 'Solar Power Packs', '', 320, 0, 0, 0, 1),
(326, 1, 'Solar Cooking System', '', 320, 0, 0, 0, 1),
(327, 1, 'Solar Laptop Charger', '', 320, 0, 0, 0, 1),
(328, 1, 'Solar Mobile Phone Charger', '', 320, 0, 0, 0, 1),
(329, 1, 'Interior Lighting', '', 44, 0, 0, 0, 1),
(330, 1, 'Exterior Lighting', '', 44, 0, 0, 0, 1),
(331, 1, 'Emergency Lighting', '', 44, 0, 0, 0, 1),
(332, 1, 'Lamps & Tubes', '', 44, 0, 0, 0, 1),
(335, 1, 'Wiring Accessories', '', 44, 0, 0, 0, 1),
(334, 1, 'Transformers & Drivers', '', 44, 0, 0, 0, 1),
(336, 1, 'Protection Accessories', '', 44, 0, 0, 0, 1),
(337, 1, 'Control Accessories', '', 44, 0, 0, 0, 1),
(338, 1, 'Art, Architecture & Photography', '', 94, 0, 0, 0, 1),
(339, 1, 'Audiobooks', '', 94, 0, 0, 0, 1),
(340, 1, 'Biography', '', 94, 0, 0, 0, 1),
(341, 1, 'Books For Study', '', 94, 0, 0, 0, 1),
(342, 1, 'Business, Finance & Law', '', 94, 0, 0, 0, 1),
(343, 1, 'Calendars, Diaries, Annuals & More', '', 94, 0, 0, 0, 1),
(344, 1, 'Children''s Books', '', 94, 0, 0, 0, 1),
(345, 1, 'Comics & Graphic Novels', '', 94, 0, 0, 0, 1),
(346, 1, 'Computing & Internet', '', 94, 0, 0, 0, 1),
(347, 1, 'Crime, Thrillers & Mystery', '', 94, 0, 0, 0, 1),
(348, 1, 'Fiction', '', 94, 0, 0, 0, 1),
(349, 1, 'Food & Drink', '', 94, 0, 0, 0, 1),
(350, 1, 'Health, Family & Lifestyle', '', 94, 0, 0, 0, 1),
(351, 1, 'History', '', 94, 0, 0, 0, 1),
(352, 1, 'Home & Garden', '', 94, 0, 0, 0, 1),
(353, 1, 'Horror', '', 94, 0, 0, 0, 1),
(354, 1, 'Humour', '', 94, 0, 0, 0, 1),
(355, 1, 'Languages', '', 94, 0, 0, 0, 1),
(356, 1, 'Mind, Body & Spirit', '', 94, 0, 0, 0, 1),
(357, 1, 'Music, Stage & Screen', '', 94, 0, 0, 0, 1),
(358, 1, 'Poetry, Drama & Criticism', '', 94, 0, 0, 0, 1),
(359, 1, 'Reference', '', 94, 0, 0, 0, 1),
(360, 1, 'Religion & Spirituality', '', 94, 0, 0, 0, 1),
(361, 1, 'Romance', '', 94, 0, 0, 0, 1),
(362, 1, 'Science & Nature', '', 94, 0, 0, 0, 1),
(363, 1, 'Science Fiction & Fantasy', '', 94, 0, 0, 0, 1),
(364, 1, 'Scientific, Technical & Medical', '', 94, 0, 0, 0, 1),
(365, 1, 'Society, Politics & Philosophy', '', 94, 0, 0, 0, 1),
(366, 1, 'Sports, Hobbies & Games', '', 94, 0, 0, 0, 1),
(367, 1, 'Textbooks For University', '', 94, 0, 0, 0, 1),
(368, 1, 'Travel & Holiday', '', 94, 0, 0, 0, 1),
(369, 1, 'Haircare', '', 60, 0, 0, 0, 1),
(370, 1, 'Shaving & Hair Removal', '', 60, 0, 0, 0, 1),
(371, 1, 'Health Monitors', '', 60, 0, 0, 0, 1),
(372, 1, 'Personal Care', '', 60, 0, 0, 0, 1),
(373, 1, 'Breast Care Products', '', 60, 0, 0, 0, 1),
(374, 1, 'Massager', '', 60, 0, 0, 0, 1),
(375, 1, 'Fitness Equipment', '', 60, 0, 0, 0, 1),
(376, 1, 'Treadmill', '', 60, 0, 0, 0, 1),
(377, 1, 'Breast Pump', '', 60, 0, 0, 0, 1),
(378, 1, 'Other Beauty Equipment', '', 60, 0, 0, 0, 1),
(379, 1, 'Hair Salon Equipment', '', 60, 0, 0, 0, 1),
(380, 1, 'Make Up', '', 18, 0, 0, 0, 1),
(381, 1, 'Nails', '', 18, 0, 0, 0, 1),
(382, 1, 'Slimming', '', 18, 0, 0, 0, 1),
(383, 1, 'Fragrance', '', 18, 0, 0, 0, 1),
(384, 1, 'Organic & Natural', '', 18, 0, 0, 0, 1),
(385, 1, 'Men''s Shaving', '', 18, 0, 0, 0, 1),
(386, 1, 'Men''s Skincare', '', 18, 0, 0, 0, 1),
(387, 1, 'Men''s Bodycare', '', 18, 0, 0, 0, 1),
(388, 1, 'Men''s Hair', '', 18, 0, 0, 0, 1),
(389, 1, 'Men''s Fragrance', '', 18, 0, 0, 0, 1),
(390, 1, 'Gift''s For Him', '', 18, 0, 0, 0, 1),
(391, 1, 'Luxury Gifts', '', 18, 0, 0, 0, 1),
(392, 1, 'Men''s Toiletry & Wash Bags', '', 18, 0, 0, 0, 1),
(393, 1, 'Men''s Tanning & Make-Up', '', 18, 0, 0, 0, 1),
(394, 1, 'Men''s Shavers', '', 18, 0, 0, 0, 1),
(395, 1, 'Men''s Hair Trimmers', '', 18, 0, 0, 0, 1),
(396, 1, 'Gold Jewellery', '', 14, 0, 0, 0, 1),
(397, 1, 'Silver Jewellery', '', 14, 0, 0, 0, 1),
(398, 1, 'Imitation Jewellery', '', 14, 0, 0, 0, 1),
(399, 1, 'Gold Ring', '', 396, 0, 0, 0, 1),
(400, 1, 'Gold Pendant', '', 396, 0, 0, 0, 1),
(401, 1, 'Gold Bracelet', '', 396, 0, 0, 0, 1),
(402, 1, 'Gold Earrings', '', 396, 0, 0, 0, 1),
(403, 1, 'Gold Necklace', '', 396, 0, 0, 0, 1),
(404, 1, 'Gold Bangles', '', 396, 0, 0, 0, 1),
(405, 1, 'Silver Earrings', '', 397, 0, 0, 0, 1),
(406, 1, 'Silver Bracelet', '', 397, 0, 0, 0, 1),
(407, 1, 'Silver Necklace', '', 397, 0, 0, 0, 1),
(408, 1, 'Silver Pendant', '', 397, 0, 0, 0, 1),
(409, 1, 'Diamond Ring', '', 265, 0, 0, 0, 1),
(410, 1, 'Diamond Pendant', '', 265, 0, 0, 0, 1),
(411, 1, 'Diamond Bracelets', '', 265, 0, 0, 0, 1),
(412, 1, 'Diamond Earrings', '', 265, 0, 0, 0, 1),
(413, 1, 'Diamond Necklace', '', 265, 0, 0, 0, 1),
(414, 1, 'Diamond Bangles', '', 265, 0, 0, 0, 1),
(415, 1, 'Imitation Earrings', '', 398, 0, 0, 0, 1),
(416, 1, 'Imitation Necklace', '', 398, 0, 0, 0, 1),
(417, 1, 'Imitation Bracelet', '', 398, 0, 0, 0, 1),
(418, 1, 'Imitation Pendant', '', 398, 0, 0, 0, 1),
(419, 1, 'Jewellery sets', '', 265, 0, 0, 0, 1),
(420, 1, 'Jewellery sets', '', 396, 0, 0, 0, 1),
(421, 1, 'Stainless Jewellery', '', 14, 0, 0, 0, 1),
(422, 1, 'Bangles Jewellery', '', 421, 0, 0, 0, 1),
(423, 1, 'Charms Jewellery', '', 421, 0, 0, 0, 1),
(424, 1, 'Necklaces', '', 421, 0, 0, 0, 1),
(425, 1, 'Bracelets', '', 421, 0, 0, 0, 1),
(426, 1, 'Earrings', '', 421, 0, 0, 0, 1),
(427, 1, 'Rings', '', 421, 0, 0, 0, 1),
(428, 1, 'Men''s Jewellery', '', 14, 0, 0, 0, 1),
(429, 1, 'Men''s Rings', '', 428, 0, 0, 0, 1),
(430, 1, 'Men''s Bracelets', '', 428, 0, 0, 0, 1),
(431, 1, 'Gold-Tikkas', '', 396, 0, 0, 0, 1),
(432, 1, 'Gold-Brooches', '', 396, 0, 0, 0, 1),
(433, 1, 'Diamond Watch', '', 428, 0, 0, 0, 1),
(434, 1, 'Pearl Watches', '', 428, 0, 0, 0, 1),
(435, 1, 'Cufflinks', '', 428, 0, 0, 0, 1),
(436, 1, 'Tiepin', '', 428, 0, 0, 0, 1),
(437, 1, 'Solitaire Rings', '', 428, 0, 0, 0, 1),
(438, 1, 'Special White Gold', '', 428, 0, 0, 0, 1),
(439, 1, 'Baby Jewellery', '', 14, 0, 0, 0, 1),
(440, 1, 'Baby Bangles', '', 439, 0, 0, 0, 1),
(441, 1, 'Gold Vaddanams', '', 396, 0, 0, 0, 1),
(442, 1, 'Men''s', '', 16, 0, 0, 0, 1),
(443, 1, 'Women''s Watches', '', 16, 0, 0, 0, 1),
(444, 1, 'Kid''s Watches', '', 16, 0, 0, 0, 1),
(445, 1, 'Pair Watches', '', 16, 0, 0, 0, 1),
(446, 1, 'Sunglass', '', 14, 0, 0, 0, 1),
(447, 1, 'Mne''s Sunglass', '', 446, 0, 0, 0, 1),
(448, 1, 'Women''s Sunglass', '', 446, 0, 0, 0, 1),
(449, 1, 'Kids Sunglass', '', 446, 0, 0, 0, 1),
(450, 1, 'Contact Lence', '', 446, 0, 0, 0, 1),
(451, 1, 'Accessories', '', 446, 0, 0, 0, 1),
(452, 1, 'Optical Lens', '', 446, 0, 0, 0, 1),
(453, 1, 'Intraocular Lenses', '', 446, 0, 0, 0, 1),
(454, 1, 'Bathroom Furniture', '', 46, 0, 0, 0, 1),
(455, 1, 'Bedroom Furniture', '', 46, 0, 0, 0, 1),
(456, 1, 'Dining Room Furniture', '', 46, 0, 0, 0, 1),
(457, 1, 'Home Office Furniture', '', 46, 0, 0, 0, 1),
(458, 1, 'Kids Bedroom Furniture', '', 46, 0, 0, 0, 1),
(459, 1, 'Kitchen Furniture', '', 46, 0, 0, 0, 1),
(460, 1, 'Living Room Furniture', '', 46, 0, 0, 0, 1),
(461, 1, 'Beds', '', 455, 0, 0, 0, 1),
(462, 1, 'Contemporary Furniture', '', 45, 0, 0, 0, 1),
(463, 1, 'Side and dining chairs', '', 462, 0, 0, 0, 1),
(464, 1, 'Armchairs&lounge chairs', '', 462, 0, 0, 0, 1),
(465, 1, 'bar&counter stools', '', 462, 0, 0, 0, 1),
(466, 1, 'low stools', '', 462, 0, 0, 0, 1),
(467, 1, 'sofas', '', 462, 0, 0, 0, 1),
(468, 1, 'benches', '', 462, 0, 0, 0, 1),
(469, 1, 'stacking chairs', '', 462, 0, 0, 0, 1),
(470, 1, 'task&office chairs', '', 462, 0, 0, 0, 1),
(471, 1, 'outdoor&patio furniture', '', 462, 0, 0, 0, 1),
(472, 1, 'dining tables', '', 462, 0, 0, 0, 1),
(473, 1, 'coffee&cocktail tables', '', 462, 0, 0, 0, 1),
(474, 1, 'side&end tables', '', 462, 0, 0, 0, 1),
(475, 1, 'work&office tables', 'workoffice-tables', 462, 0, 0, 0, 1),
(476, 1, 'wall mounted shelving', '', 462, 0, 0, 0, 1),
(477, 1, 'free standing shelving', '', 462, 0, 0, 0, 1),
(478, 1, 'storage', '', 462, 0, 0, 0, 1),
(479, 1, 'beds', '', 462, 0, 0, 0, 1),
(480, 1, 'children''s furniture', '', 462, 0, 0, 0, 1),
(481, 1, 'Office Furniture', '', 46, 0, 0, 0, 1),
(482, 1, 'Outdoor Furniture', '', 46, 0, 0, 0, 1),
(483, 1, 'Bedside Cabinets', '', 455, 0, 0, 0, 1),
(484, 1, 'Blanket Boxes', '', 455, 0, 0, 0, 1),
(485, 1, 'Chest of Drawers', '', 455, 0, 0, 0, 1),
(486, 1, 'Dressing Tables', '', 455, 0, 0, 0, 1),
(487, 1, 'Mattresses', '', 455, 0, 0, 0, 1),
(488, 1, 'Mirrors', '', 455, 0, 0, 0, 1),
(489, 1, 'Wardrobes', '', 455, 0, 0, 0, 1),
(490, 1, 'Bookcases & Cabinets', '', 456, 0, 0, 0, 1),
(491, 1, 'Console Tables & Hall Tables', '', 456, 0, 0, 0, 1),
(492, 1, 'Dining Chairs', '', 456, 0, 0, 0, 1),
(493, 1, 'Dining Tables', '', 456, 0, 0, 0, 1),
(494, 1, 'Dining Tables & Chair Sets', '', 456, 0, 0, 0, 1),
(495, 1, 'Dressers', '', 456, 0, 0, 0, 1),
(496, 1, 'Sideboards', '', 456, 0, 0, 0, 1),
(497, 1, 'Benches', '', 456, 0, 0, 0, 1),
(498, 1, 'Stools', '', 456, 0, 0, 0, 1),
(499, 1, 'Display Cabinets', '', 456, 0, 0, 0, 1),
(500, 1, 'Mirrors', '', 456, 0, 0, 0, 1),
(501, 1, 'Shelving Units', '', 456, 0, 0, 0, 1),
(502, 1, 'Shelves', '', 456, 0, 0, 0, 1),
(503, 1, 'Dining Furniture Sets', '', 456, 0, 0, 0, 1),
(504, 1, 'Small Tables', '', 460, 0, 0, 0, 1),
(505, 1, 'Cabinets', '', 460, 0, 0, 0, 1),
(506, 1, 'Sideboards', '', 460, 0, 0, 0, 1),
(507, 1, 'Display Cabinets', '', 460, 0, 0, 0, 1),
(508, 1, 'Drink Cabinets', '', 460, 0, 0, 0, 1),
(509, 1, 'Bookcases', '', 460, 0, 0, 0, 1),
(510, 1, 'CD & DVD Unit Storage', '', 460, 0, 0, 0, 1),
(511, 1, 'Television Stands', '', 460, 0, 0, 0, 1),
(512, 1, 'Hallway Furniture', '', 460, 0, 0, 0, 1),
(513, 1, 'Shelving Units', '', 460, 0, 0, 0, 1),
(514, 1, 'Shelves', '', 460, 0, 0, 0, 1),
(515, 1, 'Storage Trunks', '', 460, 0, 0, 0, 1),
(516, 1, 'Mirrors', '', 460, 0, 0, 0, 1),
(517, 1, 'Footstools', '', 460, 0, 0, 0, 1),
(518, 1, 'Sofa', '', 460, 0, 0, 0, 1),
(519, 1, 'Armchairs', '', 460, 0, 0, 0, 1),
(520, 1, 'Snugglers', '', 460, 0, 0, 0, 1),
(521, 1, 'Chair''s', '', 460, 0, 0, 0, 1),
(522, 1, 'Chaise Longues', '', 460, 0, 0, 0, 1),
(523, 1, 'Kitchen Trolleys', '', 459, 0, 0, 0, 1),
(524, 1, 'Kitchen Racks & Stands', '', 459, 0, 0, 0, 1),
(525, 1, 'Tabels', '', 459, 0, 0, 0, 1),
(526, 1, 'Counter Stools', '', 459, 0, 0, 0, 1),
(527, 1, 'Childrens Wardrobes', '', 458, 0, 0, 0, 1),
(528, 1, 'Kids Beds', '', 458, 0, 0, 0, 1),
(529, 1, 'Toy/Storage Boxes', '', 458, 0, 0, 0, 1),
(530, 1, 'Chairs', '', 458, 0, 0, 0, 1),
(531, 1, 'Desks', '', 458, 0, 0, 0, 1),
(532, 1, 'Kids Dressers', '', 458, 0, 0, 0, 1),
(533, 1, 'Kids Storage', '', 458, 0, 0, 0, 1),
(534, 1, 'Rocking Chairs', '', 458, 0, 0, 0, 1),
(535, 1, 'Bunk Beds', '', 458, 0, 0, 0, 1),
(536, 1, 'Computer Workstations', '', 481, 0, 0, 0, 1),
(537, 1, 'Conference Tables', '', 481, 0, 0, 0, 1),
(538, 1, 'Ergonomic Chairs', '', 481, 0, 0, 0, 1),
(539, 1, 'Executive Desks', '', 481, 0, 0, 0, 1),
(540, 1, 'Home Office Furniture', '', 481, 0, 0, 0, 1),
(541, 1, 'Office Chairs', '', 481, 0, 0, 0, 1),
(542, 1, 'Office Desks', '', 481, 0, 0, 0, 1),
(543, 1, 'Office Reception Seating', '', 481, 0, 0, 0, 1),
(544, 1, 'Stacking Chairs', '', 481, 0, 0, 0, 1),
(545, 1, 'Storage File Cabinets', '', 481, 0, 0, 0, 1),
(546, 1, 'Storage File Cabinets', '', 481, 0, 0, 0, 1),
(547, 1, 'Task Chairs', '', 481, 0, 0, 0, 1),
(548, 1, 'Hallway', '', 46, 0, 0, 0, 1),
(549, 1, 'Fruits & Vegetables', '', 26, 0, 0, 0, 1),
(550, 1, 'Meat', '', 26, 0, 0, 0, 1),
(551, 1, 'Sea Food', '', 26, 0, 0, 0, 1),
(552, 1, 'Entrees', '', 26, 0, 0, 0, 1),
(553, 1, 'Pizza & Pasta', '', 25, 0, 0, 0, 1),
(554, 1, 'Side Dishes', '', 26, 0, 0, 0, 1),
(555, 1, 'Snacks', '', 25, 0, 0, 0, 1),
(556, 1, 'Desserts', '', 26, 0, 0, 0, 1),
(557, 1, 'Pizza & Pasta', '', 24, 0, 0, 0, 1),
(561, 1, 'Appetisers', 'appetisers', 557, 0, 0, 0, 1),
(562, 1, 'Salad', '', 557, 0, 0, 0, 1),
(563, 1, 'Pasta', '', 557, 0, 0, 0, 1),
(564, 1, 'Toppings', '', 557, 0, 0, 0, 1),
(565, 1, 'Burger', '', 25, 0, 0, 0, 1),
(566, 1, 'Bevarage', '', 25, 0, 0, 0, 1),
(567, 1, 'Buns Item', '', 25, 0, 0, 0, 1),
(568, 1, 'Bread Item', '', 25, 0, 0, 0, 1),
(569, 1, 'Pizza Item', '', 25, 0, 0, 0, 1),
(570, 1, 'Roll Item', '', 25, 0, 0, 0, 1),
(571, 1, 'Puff Item', '', 25, 0, 0, 0, 1),
(572, 1, 'Danish Item', '', 25, 0, 0, 0, 1),
(573, 1, 'Dount Item', '', 25, 0, 0, 0, 1),
(574, 1, 'Sandwich Item', '', 25, 0, 0, 0, 1),
(575, 1, 'Pie Item', '', 25, 0, 0, 0, 1),
(576, 1, 'Toast Item', '', 25, 0, 0, 0, 1),
(577, 1, 'Cake Item', '', 25, 0, 0, 0, 1),
(578, 1, 'Patisseries Item', '', 25, 0, 0, 0, 1),
(579, 1, 'Cookies Item', '', 25, 0, 0, 0, 1),
(580, 1, 'Fried Chicken', '', 25, 3, 0, 0, 1),
(581, 1, 'Chicken Curry', '', 557, 3, 1, 0, 1),
(582, 1, 'Fried Chicken', '', 557, 3, 0, 0, 1),
(586, 1, 'Test Test Test', 'test-test-test', 0, 0, 0, 0, 1),
(587, 1, 'Test', 'test', 586, 0, 0, 0, 1),
(588, 1, 'Test 1', 'test-1', 0, 0, 1, 0, 1),
(589, 1, 'Test', 'test-1-test', 588, 0, 0, 0, 1),
(590, 1, 'Test', 'test-1-test-test', 589, 0, 0, 0, 1),
(591, 1, 'New Service test', 'new-service-test', 0, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_category_custom`
--

CREATE TABLE IF NOT EXISTS `product_category_custom` (
  `category_id` int(10) NOT NULL default '0',
  `agent_uid` int(10) default NULL,
  `category_name` varchar(200) default NULL,
  `parent_id` int(10) default '0',
  `ordering` tinyint(10) NOT NULL default '0',
  `status` int(2) NOT NULL default '1',
  PRIMARY KEY  (`category_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_category_custom`
--

INSERT INTO `product_category_custom` (`category_id`, `agent_uid`, `category_name`, `parent_id`, `ordering`, `status`) VALUES
(41572, 4, 'Coffee1', 25, 1, 1),
(43431, 4, 'Coffee', 25, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_template_bags`
--

CREATE TABLE IF NOT EXISTS `product_template_bags` (
  `product_template_id` int(10) NOT NULL,
  `made_in` varchar(200) default NULL,
  `size` varchar(200) default NULL,
  `color` varchar(200) default NULL,
  `product_id` int(11) default NULL,
  `gender` int(3) default NULL,
  `material` varchar(250) default NULL,
  `technics` varchar(250) default NULL,
  `washing_instructions` varchar(250) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_template_bags`
--

INSERT INTO `product_template_bags` (`product_template_id`, `made_in`, `size`, `color`, `product_id`, `gender`, `material`, `technics`, `washing_instructions`) VALUES
(1, 'Dhaka', '34,36,38', 'Red,Green,Blue,White', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_template_clothing`
--

CREATE TABLE IF NOT EXISTS `product_template_clothing` (
  `product_template_id` int(10) NOT NULL,
  `product_id` int(10) default NULL,
  `made_in` varchar(200) default NULL,
  `size` varchar(200) default NULL,
  `color` varchar(200) default NULL,
  `gender` int(3) default NULL,
  `material` varchar(250) default NULL,
  `technics` varchar(250) default NULL,
  `washing_instructions` varchar(250) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_template_clothing`
--

INSERT INTO `product_template_clothing` (`product_template_id`, `product_id`, `made_in`, `size`, `color`, `gender`, `material`, `technics`, `washing_instructions`) VALUES
(1, NULL, 'Dhaka', '34,36,38', 'Red,Green,Blue,White', NULL, NULL, NULL, NULL),
(0, 22, 'Dhaka', '34,36,38', 'Red,Green,Blue,White,Grey', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_template_food`
--

CREATE TABLE IF NOT EXISTS `product_template_food` (
  `product_template_id` int(10) NOT NULL,
  `made_in` varchar(200) default NULL,
  `size` varchar(200) default NULL,
  `ingredients` text,
  `product_id` int(11) default NULL,
  `material` varchar(250) default NULL,
  `technics` varchar(250) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_template_food`
--

INSERT INTO `product_template_food` (`product_template_id`, `made_in`, `size`, `ingredients`, `product_id`, `material`, `technics`) VALUES
(1, 'Dhaka', 'Familly,Large,Midum,Small', 'Sugar,Milk, Meat, Salt', NULL, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec mattis.', 'Hand made'),
(0, 'Dhaka', 'Large,Midum,Small', 'Sugar,Milk, Meat, Salt', 31, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec mattis.', 'Hand made'),
(0, 'Dhaka', 'Familly,Large,Midum,Small', 'Chicken,Bread,Vegatiable', 32, '', 'Hand made'),
(0, 'Dhaka', 'Familly,Large,Midum,Small', 'Sugar,Milk, Meat, Salt', 35, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec mattis.', 'Hand made');

-- --------------------------------------------------------

--
-- Table structure for table `product_template_manage`
--

CREATE TABLE IF NOT EXISTS `product_template_manage` (
  `product_template_manage_id` int(10) NOT NULL auto_increment,
  `template_group` int(1) default '1',
  `product_template_name` varchar(200) default NULL,
  `product_template_type` tinyint(1) default '1',
  `product_template_layout` varchar(200) default NULL,
  `category_id` text,
  `status` int(1) default '1',
  PRIMARY KEY  (`product_template_manage_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `product_template_manage`
--

INSERT INTO `product_template_manage` (`product_template_manage_id`, `template_group`, `product_template_name`, `product_template_type`, `product_template_layout`, `category_id`, `status`) VALUES
(1, 1, 'Clothing & Accessories', 1, 'product_template_clothing', 'a:12:{i:0;s:1:"1";i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:3:"120";i:5;s:2:"46";i:6;s:3:"266";i:7;s:3:"267";i:8;s:3:"268";i:9;s:3:"269";i:10;s:3:"462";i:11;s:3:"587";}', 1),
(5, 1, 'Food & Drinks', 1, 'product_template_food', 'a:14:{i:0;s:2:"13";i:1;s:2:"10";i:2;s:3:"168";i:3;s:3:"271";i:4;s:3:"274";i:5;s:3:"273";i:6;s:3:"275";i:7;s:2:"25";i:8;s:2:"26";i:9;s:2:"27";i:10;s:2:"28";i:11;s:2:"29";i:12;s:2:"30";i:13;s:3:"276";}', 1),
(6, 1, 'Comunity Center', 2, 'comunity_center', 'a:1:{i:0;s:3:"101";}', 1),
(7, 1, 'Dental Chember', 2, 'dental_chember', 'a:1:{i:0;s:3:"111";}', 1),
(11, 2, 'Test service', 1, 'czx', 'a:1:{i:0;s:3:"591";}', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_template_metadata`
--

CREATE TABLE IF NOT EXISTS `product_template_metadata` (
  `product_template_metadata_id` int(10) NOT NULL auto_increment,
  `product_template_id` int(10) NOT NULL,
  `meta_label` varchar(200) default NULL,
  `meta_description` text,
  PRIMARY KEY  (`product_template_metadata_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `product_template_metadata`
--

INSERT INTO `product_template_metadata` (`product_template_metadata_id`, `product_template_id`, `meta_label`, `meta_description`) VALUES
(12, 1, 'Product -1', '&quot;Alabama&quot;,&quot;Alaska&quot;,&quot;Arizona&quot;,&quot;Arkansas&quot;,&quot;California&quot;,&quot;Colorado&quot;,&quot;Connecticut&quot;,&quot;Delaware&quot;,&quot;Florida&quot;,&quot;Georgia&quot;,&quot;Hawaii&quot;,&quot;Idaho&quot;,&quot;Illinois&quot;,&quot;Indiana&quot;,&quot;Iowa&quot;,&quot;Kansas&quot;,&quot;Kentucky&quot;,&quot;Louisiana&quot;,&quot;Maine&quot;,&quot;Maryland&quot;,&quot;Massachusetts&quot;,&quot;Michigan&quot;,&quot;Minnesota&quot;,&quot;Mississippi&quot;,&quot;Missouri&quot;,&quot;Montana&quot;,&quot;Nebraska&quot;,&quot;Nevada&quot;,&quot;New Hampshire&quot;,&quot;New Jersey&quot;,&quot;New Mexico&quot;,&quot;New York&quot;,&quot;North Dakota&quot;,&quot;North Carolina&quot;,&quot;Ohio&quot;,&quot;Oklahoma&quot;,&quot;Oregon&quot;,&quot;Pennsylvania&quot;,&quot;Rhode Island&quot;,&quot;South Carolina&quot;,&quot;South Dakota&quot;,&quot;Tennessee&quot;,&quot;Texas&quot;,&quot;Utah&quot;,&quot;Vermont&quot;,&quot;Virginia&quot;,&quot;Washington&quot;,&quot;West Virginia&quot;,&quot;Wisconsin&quot;,&quot;Wyoming&quot;'),
(10, 11, 'test', 'test1'),
(11, 11, 'test1', 'test2'),
(13, 1, 'Product -2', '&quot;Alabama&quot;,&quot;Alaska&quot;,&quot;Arizona&quot;,&quot;Arkansas&quot;,&quot;California&quot;,&quot;Colorado&quot;,&quot;Connecticut&quot;,&quot;Delaware&quot;,&quot;Florida&quot;,&quot;Georgia&quot;,&quot;Hawaii&quot;,&quot;Idaho&quot;,&quot;Illinois&quot;,&quot;Indiana&quot;,&quot;Iowa&quot;,&quot;Kansas&quot;,&quot;Kentucky&quot;,&quot;Louisiana&quot;,&quot;Maine&quot;,&quot;Maryland&quot;,&quot;Massachusetts&quot;,&quot;Michigan&quot;,&quot;Minnesota&quot;,&quot;Mississippi&quot;,&quot;Missouri&quot;,&quot;Montana&quot;,&quot;Nebraska&quot;,&quot;Nevada&quot;,&quot;New Hampshire&quot;,&quot;New Jersey&quot;,&quot;New Mexico&quot;,&quot;New York&quot;,&quot;North Dakota&quot;,&quot;North Carolina&quot;,&quot;Ohio&quot;,&quot;Oklahoma&quot;,&quot;Oregon&quot;,&quot;Pennsylvania&quot;,&quot;Rhode Island&quot;,&quot;South Carolina&quot;,&quot;South Dakota&quot;,&quot;Tennessee&quot;,&quot;Texas&quot;,&quot;Utah&quot;,&quot;Vermont&quot;,&quot;Virginia&quot;,&quot;Washington&quot;,&quot;West Virginia&quot;,&quot;Wisconsin&quot;,&quot;Wyoming&quot;'),
(14, 1, 'Product -3', '&quot;Alabama&quot;,&quot;Alaska&quot;,&quot;Arizona&quot;,&quot;Arkansas&quot;,&quot;California&quot;,&quot;Colorado&quot;,&quot;Connecticut&quot;,&quot;Delaware&quot;,&quot;Florida&quot;,&quot;Georgia&quot;,&quot;Hawaii&quot;,&quot;Idaho&quot;,&quot;Illinois&quot;,&quot;Indiana&quot;,&quot;Iowa&quot;,&quot;Kansas&quot;,&quot;Kentucky&quot;,&quot;Louisiana&quot;,&quot;Maine&quot;,&quot;Maryland&quot;,&quot;Massachusetts&quot;,&quot;Michigan&quot;,&quot;Minnesota&quot;,&quot;Mississippi&quot;,&quot;Missouri&quot;,&quot;Montana&quot;,&quot;Nebraska&quot;,&quot;Nevada&quot;,&quot;New Hampshire&quot;,&quot;New Jersey&quot;,&quot;New Mexico&quot;,&quot;New York&quot;,&quot;North Dakota&quot;,&quot;North Carolina&quot;,&quot;Ohio&quot;,&quot;Oklahoma&quot;,&quot;Oregon&quot;,&quot;Pennsylvania&quot;,&quot;Rhode Island&quot;,&quot;South Carolina&quot;,&quot;South Dakota&quot;,&quot;Tennessee&quot;,&quot;Texas&quot;,&quot;Utah&quot;,&quot;Vermont&quot;,&quot;Virginia&quot;,&quot;Washington&quot;,&quot;West Virginia&quot;,&quot;Wisconsin&quot;,&quot;Wyoming&quot;'),
(15, 1, 'Product-4', '&quot;Alabama&quot;,&quot;Alaska&quot;,&quot;Arizona&quot;,&quot;Arkansas&quot;,&quot;California&quot;,&quot;Colorado&quot;,&quot;Connecticut&quot;,&quot;Delaware&quot;,&quot;Florida&quot;,&quot;Georgia&quot;,&quot;Hawaii&quot;,&quot;Idaho&quot;,&quot;Illinois&quot;,&quot;Indiana&quot;,&quot;Iowa&quot;,&quot;Kansas&quot;,&quot;Kentucky&quot;,&quot;Louisiana&quot;,&quot;Maine&quot;,&quot;Maryland&quot;,&quot;Massachusetts&quot;,&quot;Michigan&quot;,&quot;Minnesota&quot;,&quot;Mississippi&quot;,&quot;Missouri&quot;,&quot;Montana&quot;,&quot;Nebraska&quot;,&quot;Nevada&quot;,&quot;New Hampshire&quot;,&quot;New Jersey&quot;,&quot;New Mexico&quot;,&quot;New York&quot;,&quot;North Dakota&quot;,&quot;North Carolina&quot;,&quot;Ohio&quot;,&quot;Oklahoma&quot;,&quot;Oregon&quot;,&quot;Pennsylvania&quot;,&quot;Rhode Island&quot;,&quot;South Carolina&quot;,&quot;South Dakota&quot;,&quot;Tennessee&quot;,&quot;Texas&quot;,&quot;Utah&quot;,&quot;Vermont&quot;,&quot;Virginia&quot;,&quot;Washington&quot;,&quot;West Virginia&quot;,&quot;Wisconsin&quot;,&quot;Wyoming&quot;');

-- --------------------------------------------------------

--
-- Table structure for table `sell_offer`
--

CREATE TABLE IF NOT EXISTS `sell_offer` (
  `sell_offer_id` tinyint(10) NOT NULL auto_increment,
  `offer_title` varchar(200) default NULL,
  `offer_description` text,
  `status` tinyint(1) default '0',
  PRIMARY KEY  (`sell_offer_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `sell_offer`
--

INSERT INTO `sell_offer` (`sell_offer_id`, `offer_title`, `offer_description`, `status`) VALUES
(1, 'Eid Offer', NULL, 1),
(2, 'Summer Offer', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `settings_id` int(10) NOT NULL auto_increment,
  `settings_name` varchar(200) NOT NULL,
  `parent_id` int(10) default '0',
  `ordering` tinyint(10) default '0',
  `status` int(2) default '1',
  PRIMARY KEY  (`settings_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=71 ;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`settings_id`, `settings_name`, `parent_id`, `ordering`, `status`) VALUES
(1, 'Shop type', 0, 0, 2),
(2, 'Location Name', 0, 0, 1),
(3, 'Brand Shop', 0, 0, 1),
(4, 'Lavel', 0, 0, 1),
(5, 'Condition', 0, 0, 1),
(6, 'Information Management', 0, 0, 1),
(7, 'Jewellery Type', 0, 0, 1),
(8, 'Karate Type', 0, 0, 1),
(9, 'Warrinty Type', 0, 0, 1),
(10, 'Warrinty Time', 0, 0, 2),
(11, 'Product Status', 0, 0, 2),
(13, 'Womens Wear', 1, 0, 2),
(14, 'Kids Wear', 1, 0, 1),
(15, 'Foot  Wear', 1, 0, 1),
(16, 'Jewellery', 1, 0, 1),
(17, 'Dhanmondi', 2, 0, 1),
(18, 'Mohammadpur', 2, 0, 1),
(19, 'Framgate', 2, 0, 1),
(20, 'New Market', 0, 0, 1),
(21, 'Grand Floor', 4, 0, 1),
(22, 'First Floor', 4, 0, 1),
(23, 'Second Floor', 4, 0, 1),
(24, 'Replacement', 9, 0, 1),
(25, 'Dealer', 9, 0, 1),
(26, 'Manufacturer', 9, 0, 1),
(27, 'Guarantee', 0, 0, 2),
(28, 'Money-back', 27, 0, 1),
(29, 'Replacement', 27, 0, 1),
(30, 'New', 5, 0, 1),
(31, 'Brand New', 5, 0, 1),
(32, 'Used', 5, 0, 1),
(33, 'Avaliable1', 11, 0, 1),
(34, 'Under Discuss', 11, 0, 1),
(35, 'Digital compass', 6, 0, 1),
(36, 'SNS integration', 6, 0, 1),
(37, 'Organizer', 6, 0, 1),
(38, 'Document viewer/editor', 6, 0, 1),
(39, 'Image/video editor', 6, 0, 1),
(40, 'Google Search', 6, 0, 1),
(41, 'Face Book', 6, 0, 1),
(42, 'Maps', 6, 0, 1),
(43, 'Gmail', 6, 0, 1),
(44, 'YouTube', 6, 0, 1),
(45, 'Calendar', 6, 0, 1),
(46, 'Google Talk', 6, 0, 1),
(47, 'Picasa integration', 6, 0, 1),
(48, 'Voice memo/dial', 6, 0, 1),
(49, 'Yahoo Mail', 6, 0, 1),
(50, 'Sell & Buy Guide', 0, 0, 2),
(51, 'Seller Guide', 50, 0, 1),
(52, 'Buyer Guide', 50, 0, 1),
(53, 'Our Services', 50, 0, 1),
(54, 'Buyer Services', 50, 0, 1),
(55, 'Browse and Select', 50, 0, 1),
(56, 'Login or Register', 50, 0, 1),
(57, 'Review Your Order', 50, 0, 1),
(58, 'Payment & Shipment', 50, 0, 1),
(59, 'Exibition Type', 0, 0, 1),
(60, 'Trade Show', 59, 0, 1),
(61, 'Corporate Activities', 59, 0, 1),
(62, 'Advertisment Position', 0, 0, 1),
(63, 'Left position', 62, 0, 1),
(64, 'Right Position', 62, 0, 1),
(65, 'Top position', 62, 0, 1),
(66, 'Bottom Position', 62, 0, 1),
(67, 'Quantity Package', 0, 0, 1),
(68, 'Pics', 67, 0, 1),
(69, 'Sets', 67, 0, 1),
(70, 'Dozons', 67, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `settings_common_image_size`
--

CREATE TABLE IF NOT EXISTS `settings_common_image_size` (
  `settings_common_image_size_id` int(11) NOT NULL auto_increment,
  `settings_common_image_size_name` varchar(250) default NULL,
  `large_image_width` int(11) default NULL,
  `large_image_height` int(11) default NULL,
  `crop_image_width` int(11) default NULL,
  `crop_image_height` int(11) default NULL,
  `crop_image_left` int(10) default NULL,
  `crop_image_top` int(10) default NULL,
  `status` int(1) NOT NULL default '1',
  PRIMARY KEY  (`settings_common_image_size_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `settings_common_image_size`
--

INSERT INTO `settings_common_image_size` (`settings_common_image_size_id`, `settings_common_image_size_name`, `large_image_width`, `large_image_height`, `crop_image_width`, `crop_image_height`, `crop_image_left`, `crop_image_top`, `status`) VALUES
(4, 'Mall Advertisment Image Size', 450, 250, 300, 200, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `settings_css_body`
--

CREATE TABLE IF NOT EXISTS `settings_css_body` (
  `table_id` int(11) NOT NULL auto_increment,
  `agent_uid` int(11) default NULL,
  `body_bgcolor` varchar(10) default NULL,
  PRIMARY KEY  (`table_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1180 ;

--
-- Dumping data for table `settings_css_body`
--

INSERT INTO `settings_css_body` (`table_id`, `agent_uid`, `body_bgcolor`) VALUES
(1155, 2181, ''),
(1156, 1, NULL),
(1157, 0, ''),
(1158, 5, NULL),
(1160, 11, NULL),
(1165, 16, NULL),
(1166, 17, NULL),
(1167, 18, NULL),
(1168, 19, NULL),
(1179, 30, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings_css_footer`
--

CREATE TABLE IF NOT EXISTS `settings_css_footer` (
  `table_id` int(11) NOT NULL auto_increment,
  `agent_uid` int(11) default NULL,
  `bgcolor_top` varchar(7) default NULL,
  `footer_bgcolor` varchar(7) default NULL,
  `footer_text_color` varchar(7) default NULL,
  `link_color` varchar(7) default NULL,
  `footer_link_color_hover` varchar(7) default NULL,
  `seperator_line_color` varchar(7) default NULL,
  `logos_to_use` varchar(7) default NULL,
  `brokarage_logo` varchar(100) default NULL,
  `brokarage_logo_path` text,
  `second_logo` varchar(100) default NULL,
  `second_logo_path` text,
  `copyright_text_link_color` varchar(7) default NULL,
  `copyright_link_color_hover` varchar(7) default NULL,
  PRIMARY KEY  (`table_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1180 ;

--
-- Dumping data for table `settings_css_footer`
--

INSERT INTO `settings_css_footer` (`table_id`, `agent_uid`, `bgcolor_top`, `footer_bgcolor`, `footer_text_color`, `link_color`, `footer_link_color_hover`, `seperator_line_color`, `logos_to_use`, `brokarage_logo`, `brokarage_logo_path`, `second_logo`, `second_logo_path`, `copyright_text_link_color`, `copyright_link_color_hover`) VALUES
(1155, 2181, NULL, NULL, NULL, NULL, NULL, NULL, 'default', NULL, NULL, NULL, NULL, NULL, NULL),
(1156, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1157, 0, NULL, NULL, NULL, NULL, NULL, NULL, 'default', NULL, NULL, NULL, NULL, NULL, NULL),
(1158, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1160, 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1165, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1166, 17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1167, 18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1168, 19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1179, 30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings_css_header`
--

CREATE TABLE IF NOT EXISTS `settings_css_header` (
  `table_id` int(11) NOT NULL auto_increment,
  `agent_uid` int(11) NOT NULL,
  `header_bgcolor` varchar(7) default NULL,
  `img_name` varchar(100) default NULL,
  `img_name_path` text,
  `agent_name` varchar(100) default NULL,
  `custom_agent_name` varchar(100) default NULL,
  `custom_agent_degignation` varchar(100) default NULL,
  `agent_name_color` varchar(7) default NULL,
  PRIMARY KEY  (`table_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1180 ;

--
-- Dumping data for table `settings_css_header`
--

INSERT INTO `settings_css_header` (`table_id`, `agent_uid`, `header_bgcolor`, `img_name`, `img_name_path`, `agent_name`, `custom_agent_name`, `custom_agent_degignation`, `agent_name_color`) VALUES
(1155, 2181, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1156, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1157, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1158, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1160, 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1165, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1166, 17, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1167, 18, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1168, 19, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1179, 30, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings_css_menu`
--

CREATE TABLE IF NOT EXISTS `settings_css_menu` (
  `table_id` int(11) NOT NULL auto_increment,
  `agent_uid` int(11) default NULL,
  `normal_bgcolor` varchar(7) default NULL,
  `menu_normal_text_color` varchar(7) default NULL,
  `menu_normal_hover_text_color` varchar(7) default NULL,
  `normal_border_color_top` varchar(7) default NULL,
  `normal_border_color_bottom` varchar(7) default NULL,
  `normal_border_color_left_right` varchar(7) default NULL,
  `selected_background_color` varchar(7) default NULL,
  `menu_selected_text_color` varchar(7) default NULL,
  `menu_selected_hover_text_color` varchar(7) default NULL,
  `selected_border_color_top` varchar(7) default NULL,
  `selected_border_color_bottom` varchar(7) default NULL,
  `selected_border_color_left` varchar(7) default NULL,
  `selected_border_color_right` varchar(7) default NULL,
  `selected_remove_bottom_border` varchar(7) default NULL,
  `remove_edge_borders` varchar(7) default NULL,
  `two_line_menu` varchar(7) default NULL,
  PRIMARY KEY  (`table_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1180 ;

--
-- Dumping data for table `settings_css_menu`
--

INSERT INTO `settings_css_menu` (`table_id`, `agent_uid`, `normal_bgcolor`, `menu_normal_text_color`, `menu_normal_hover_text_color`, `normal_border_color_top`, `normal_border_color_bottom`, `normal_border_color_left_right`, `selected_background_color`, `menu_selected_text_color`, `menu_selected_hover_text_color`, `selected_border_color_top`, `selected_border_color_bottom`, `selected_border_color_left`, `selected_border_color_right`, `selected_remove_bottom_border`, `remove_edge_borders`, `two_line_menu`) VALUES
(1155, 2181, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'default', 'default', 'default'),
(1156, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1157, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'default', 'default', 'default'),
(1158, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1160, 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1165, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1166, 17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1167, 18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1168, 19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1179, 30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings_css_page_content`
--

CREATE TABLE IF NOT EXISTS `settings_css_page_content` (
  `table_id` int(11) NOT NULL auto_increment,
  `agent_uid` int(11) default NULL,
  `bgcolor` varchar(20) default NULL,
  `alt_bgcolor` varchar(7) default NULL,
  `bgimg` varchar(100) default NULL,
  `bgimg_path` text,
  `text_color` varchar(7) default NULL,
  `light_text_color` varchar(7) default NULL,
  `link_color_hover` varchar(7) default NULL,
  `large_headers_color` varchar(7) default NULL,
  `text_color_on_alt_bg` varchar(7) default NULL,
  `link_color_on_alt_bg_hover` varchar(7) default NULL,
  `large_headers_color_on_alt_bg` varchar(7) default NULL,
  `crumb_text` varchar(7) default NULL,
  `crumb_text_hover` varchar(7) default NULL,
  `crumb_text_on_alt_bg` varchar(7) default NULL,
  `crumb_text_on_alt_bg_hover` varchar(7) default NULL,
  `logs_to_use` varchar(7) default NULL,
  PRIMARY KEY  (`table_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1180 ;

--
-- Dumping data for table `settings_css_page_content`
--

INSERT INTO `settings_css_page_content` (`table_id`, `agent_uid`, `bgcolor`, `alt_bgcolor`, `bgimg`, `bgimg_path`, `text_color`, `light_text_color`, `link_color_hover`, `large_headers_color`, `text_color_on_alt_bg`, `link_color_on_alt_bg_hover`, `large_headers_color_on_alt_bg`, `crumb_text`, `crumb_text_hover`, `crumb_text_on_alt_bg`, `crumb_text_on_alt_bg_hover`, `logs_to_use`) VALUES
(1155, 2181, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'default'),
(1156, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1157, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'default'),
(1158, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1160, 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1165, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1166, 17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1167, 18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1168, 19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1179, 30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings_css_submenu`
--

CREATE TABLE IF NOT EXISTS `settings_css_submenu` (
  `table_id` int(11) NOT NULL auto_increment,
  `agent_uid` int(11) default NULL,
  `submenu_bgcolor` varchar(7) default NULL,
  `normal_text_color` varchar(7) default NULL,
  `normal_hover_bgcolor` varchar(7) default NULL,
  `normal_hover_text_color` varchar(7) default NULL,
  `selected_text_color` varchar(7) default NULL,
  `selected_hover_bgcolor` varchar(7) default NULL,
  `selected_hover_text_color` varchar(7) default NULL,
  `border_color_top` varchar(7) default NULL,
  `border_color_bottom` varchar(7) default NULL,
  `show_top_border` varchar(7) default NULL,
  `seperator_color` varchar(7) default NULL,
  PRIMARY KEY  (`table_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1180 ;

--
-- Dumping data for table `settings_css_submenu`
--

INSERT INTO `settings_css_submenu` (`table_id`, `agent_uid`, `submenu_bgcolor`, `normal_text_color`, `normal_hover_bgcolor`, `normal_hover_text_color`, `selected_text_color`, `selected_hover_bgcolor`, `selected_hover_text_color`, `border_color_top`, `border_color_bottom`, `show_top_border`, `seperator_color`) VALUES
(1155, 2181, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'default', NULL),
(1156, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1157, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'default', NULL),
(1158, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1160, 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1165, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1166, 17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1167, 18, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1168, 19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(1179, 30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings_image_size`
--

CREATE TABLE IF NOT EXISTS `settings_image_size` (
  `settings_image_size_id` int(11) NOT NULL auto_increment,
  `image_setting_type` int(1) default '1',
  `image_size_type` int(1) default '1',
  `settings_image_name` varchar(200) default NULL,
  `large_image_width` int(11) default NULL,
  `large_image_height` int(11) default NULL,
  `square_image_width` int(10) default NULL,
  `square_image_height` int(10) default NULL,
  `thumb_image_width` int(11) default NULL,
  `thumb_image_height` int(11) default NULL,
  `small_image_width` int(10) default NULL,
  `small_image_height` int(10) default NULL,
  `category_id` text,
  `status` int(1) NOT NULL default '1',
  PRIMARY KEY  (`settings_image_size_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `settings_image_size`
--

INSERT INTO `settings_image_size` (`settings_image_size_id`, `image_setting_type`, `image_size_type`, `settings_image_name`, `large_image_width`, `large_image_height`, `square_image_width`, `square_image_height`, `thumb_image_width`, `thumb_image_height`, `small_image_width`, `small_image_height`, `category_id`, `status`) VALUES
(2, 1, 1, 'Cloathing & Jute products', 300, 400, 300, 300, 150, 120, 80, 80, 'a:5:{i:0;s:1:"1";i:1;s:1:"2";i:2;s:1:"3";i:3;s:1:"4";i:4;s:3:"120";}', 1),
(4, 1, 2, 'Test -image', 300, 250, 300, 300, 120, 120, 80, 80, '', 1),
(9, 2, 1, 'test...', 2, 2, 2, 2, 2, 2, 2, 2, 'a:4:{i:0;s:1:"6";i:1;s:1:"5";i:2;s:1:"8";i:3;s:1:"9";}', 1),
(10, 2, 1, 'dsdfsd', 2, 2, 2, 2, 2, 2, 2, 2, '', 1),
(8, 1, 0, 'Jewellery', 400, 400, 400, 400, 400, 400, 400, 400, NULL, 1),
(1, 1, 1, 'Default', 1024, 1024, 600, 600, 320, 320, 80, 80, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `settings_layout`
--

CREATE TABLE IF NOT EXISTS `settings_layout` (
  `settings_layout_id` int(10) NOT NULL auto_increment,
  `layout_name` varchar(200) default NULL,
  `layout_type` int(10) default NULL,
  `column_no` int(10) default NULL,
  `layout_divide` varchar(200) default NULL,
  `image_name` varchar(200) default NULL,
  `layout_image` varchar(200) default NULL,
  `status` int(2) NOT NULL default '1',
  PRIMARY KEY  (`settings_layout_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `settings_layout`
--

INSERT INTO `settings_layout` (`settings_layout_id`, `layout_name`, `layout_type`, `column_no`, `layout_divide`, `image_name`, `layout_image`, `status`) VALUES
(1, 'Default Layout  Cloumn 900', 1, 1, '900', '900.gif', 'http://agentshow.thegm.us/assets/layout_img/900.gif', 1),
(2, 'Left Base Horizontal 600*300', 1, 2, '600,300', '600x300.gif', 'http://agentshow.thegm.us/assets/layout_img/600x300.gif', 1),
(3, 'Right Base Horizontal 300*600', 1, 2, '300,600', '300x600.gif', 'http://agentshow.thegm.us/assets/layout_img/300x600.gif', 1),
(4, 'Same Left/Right Horizontal450*450', 1, 2, '450,450', '133e1da5fa4561322e3c03e58187b6e1.jpg', 'uploads/files/layouts/133e1da5fa4561322e3c03e58187b6e1.jpg', 1),
(5, '3 Columns Horizontal 250*400*250', 1, 3, '250,400,250', '250x400x250.gif', 'http://agentshow.thegm.us/assets/layout_img/250x400x250.gif', 1),
(6, 'Equal 3 Column Horizontal 300*300*300', 1, 3, '300,300,300', '300x300x300.gif', 'http://agentshow.thegm.us/assets/layout_img/300x300x300.gif', 1),
(7, 'Evaluation Horizontal(650,250)', 1, 2, '650,250', '650x250.gif', 'http://agentshow.thegm.us/assets/layout_img/650x250.gif', 1),
(10, 'Same Left/Right Horizontal450*450', 2, 3, '450,450', '4f4013674a72e834fa1a0a4619e3e05e.jpg', 'uploads/files/layouts/4f4013674a72e834fa1a0a4619e3e05e.jpg', 0),
(14, 'xcxz', 1, 1, '400,400', '19278e1999933f6d570283df0908358b.jpg', 'uploads/files/layouts/19278e1999933f6d570283df0908358b.jpg', 1),
(16, 'sfasf', 1, 1, '400,300', NULL, NULL, 1),
(17, 'sfasf', 1, 1, '400,300', '633985c5bab634455d711bae260d7cbf.jpg', 'uploads/files/layouts/633985c5bab634455d711bae260d7cbf.jpg', 1),
(18, 'fsdfs', 2, 3, '400,400', '617bac9ce3afa0bac189c1621d2065be.jpg', 'uploads/files/layouts/617bac9ce3afa0bac189c1621d2065be.jpg', 1),
(19, 'Bex Business Limited', 2, 1, '400,300', 'dbd06be19ca7f34044ae8aed1f06829b.jpg', 'uploads/files/layouts/dbd06be19ca7f34044ae8aed1f06829b.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `settings_menu`
--

CREATE TABLE IF NOT EXISTS `settings_menu` (
  `settings_menu_id` int(11) NOT NULL auto_increment,
  `menu_name` varchar(200) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `menu_url` varchar(200) NOT NULL,
  `order` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY  (`settings_menu_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `settings_menu`
--

INSERT INTO `settings_menu` (`settings_menu_id`, `menu_name`, `parent_id`, `menu_url`, `order`, `status`) VALUES
(1, 'Home', 0, 'home', 1, 1),
(2, 'About us', 0, 'about-us', 2, 1),
(3, 'Products', 0, 'products', 3, 1),
(4, 'Privicy & Policy', 0, 'privicy-policy', 4, 1),
(5, 'Our Services', 0, 'our-services', 5, 1),
(6, 'Contact us', 0, 'contact', 6, 1),
(7, 'Home', 1, 'home-us', 1, 1),
(8, 'About-us', 2, 'about', 1, 1),
(9, 'Products', 3, 'products', 1, 1),
(10, 'Privicy & Policy', 4, 'privicy-policy', 1, 1),
(11, 'Our Services', 5, 'our-services', 1, 1),
(12, 'Contact', 6, 'contact-us', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `settings_plugin`
--

CREATE TABLE IF NOT EXISTS `settings_plugin` (
  `settings_plugin_id` int(10) NOT NULL auto_increment,
  `plugin_name` varchar(200) default NULL,
  `plugin_url` varchar(200) NOT NULL,
  `status` int(2) default '1',
  PRIMARY KEY  (`settings_plugin_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `settings_plugin`
--

INSERT INTO `settings_plugin` (`settings_plugin_id`, `plugin_name`, `plugin_url`, `status`) VALUES
(2, 'Calculator', 'calculator/calculator_view', 1),
(21, 'Test', 'test/test', 1),
(4, 'Evaluation', 'evaluation/evaluation_view', 1),
(5, 'About US', 'about/about_view', 1),
(6, 'Contact us', 'contact/contact_view', 1),
(7, 'Listings Map', 'listing/listingsmap_view', 1),
(10, 'Home Feature', 'home/home_view', 1),
(11, 'Blog', 'blog/blog_view', 0);

-- --------------------------------------------------------

--
-- Table structure for table `settings_services`
--

CREATE TABLE IF NOT EXISTS `settings_services` (
  `settings_services_id` int(10) NOT NULL auto_increment,
  `services_name` varchar(200) default NULL,
  `services_url` varchar(200) NOT NULL,
  `status` int(2) default '1',
  PRIMARY KEY  (`settings_services_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `settings_services`
--

INSERT INTO `settings_services` (`settings_services_id`, `services_name`, `services_url`, `status`) VALUES
(1, 'Event Management System', 'event.ebdshop.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `settings_template`
--

CREATE TABLE IF NOT EXISTS `settings_template` (
  `settings_template_id` int(10) NOT NULL auto_increment,
  `menu_id` int(10) default NULL,
  `agent_uid` int(11) NOT NULL,
  `layout_id` int(10) default NULL,
  `plugin_id` int(10) default NULL,
  `plugin_show` int(10) default NULL,
  `background_color` int(5) default '3',
  `page_background_image` text,
  `page_background_image_path` text,
  `plugin_size` int(5) default '3',
  `is_home_page` int(2) NOT NULL default '2',
  `status` int(2) default '1',
  PRIMARY KEY  (`settings_template_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=292 ;

--
-- Dumping data for table `settings_template`
--

INSERT INTO `settings_template` (`settings_template_id`, `menu_id`, `agent_uid`, `layout_id`, `plugin_id`, `plugin_show`, `background_color`, `page_background_image`, `page_background_image_path`, `plugin_size`, `is_home_page`, `status`) VALUES
(1, 1, 1, 1, 0, 0, 3, NULL, NULL, 3, 2, 1),
(2, 2, 1, 1, 5, 1, 3, NULL, NULL, 3, 2, 1),
(3, 3, 1, 1, 3, 1, 3, NULL, NULL, 3, 2, 1),
(4, 4, 1, 1, 4, 1, 3, NULL, NULL, 3, 2, 1),
(5, 5, 1, 1, 2, 1, 3, NULL, NULL, 3, 2, 1),
(6, 6, 1, 1, 6, 1, 3, NULL, NULL, 3, 2, 1),
(7, 7, 1, 1, 0, 0, 3, NULL, NULL, 3, 1, 1),
(8, 8, 1, 1, 5, 1, 3, NULL, NULL, 3, 2, 1),
(9, 9, 1, 1, 3, 1, 3, NULL, NULL, 3, 2, 1),
(10, 10, 1, 1, 7, 1, 3, NULL, NULL, 3, 2, 1),
(11, 11, 1, 1, 0, 0, 3, NULL, NULL, 3, 2, 1),
(12, 12, 1, 1, 4, 1, 3, NULL, NULL, 3, 2, 1),
(13, 13, 1, 1, 0, 0, 3, NULL, NULL, 3, 2, 1),
(14, 14, 1, 1, 2, 1, 3, NULL, NULL, 3, 2, 1),
(15, 15, 1, 1, 6, 1, 3, NULL, NULL, 3, 2, 1),
(16, 1, 4, 1, 0, 0, 3, NULL, NULL, 3, 2, 1),
(17, 2, 4, 1, 5, 1, 3, NULL, NULL, 3, 2, 1),
(18, 3, 4, 1, 3, 1, 3, NULL, NULL, 3, 2, 1),
(19, 4, 4, 1, 4, 1, 3, NULL, NULL, 3, 2, 1),
(20, 5, 4, 1, 2, 1, 3, NULL, NULL, 3, 2, 1),
(21, 6, 4, 1, 6, 1, 3, NULL, NULL, 3, 2, 1),
(22, 7, 4, 1, 0, 0, 3, NULL, NULL, 3, 1, 1),
(23, 8, 4, 1, 5, 1, 3, NULL, NULL, 3, 2, 1),
(24, 9, 4, 1, 3, 1, 3, NULL, NULL, 3, 2, 1),
(25, 10, 4, 1, 7, 1, 3, NULL, NULL, 3, 2, 1),
(26, 11, 4, 1, 0, 0, 3, NULL, NULL, 3, 2, 1),
(27, 12, 4, 1, 4, 1, 3, NULL, NULL, 3, 2, 1),
(28, 1, 5, 1, 0, 0, 3, NULL, NULL, 3, 2, 1),
(29, 2, 5, 1, 5, 1, 3, NULL, NULL, 3, 2, 1),
(30, 3, 5, 1, 3, 1, 3, NULL, NULL, 3, 2, 1),
(31, 4, 5, 1, 4, 1, 3, NULL, NULL, 3, 2, 1),
(32, 5, 5, 1, 2, 1, 3, NULL, NULL, 3, 2, 1),
(33, 6, 5, 1, 6, 1, 3, NULL, NULL, 3, 2, 1),
(34, 7, 5, 1, 0, 0, 3, NULL, NULL, 3, 1, 1),
(35, 8, 5, 1, 5, 1, 3, NULL, NULL, 3, 2, 1),
(36, 9, 5, 1, 3, 1, 3, NULL, NULL, 3, 2, 1),
(37, 10, 5, 1, 7, 1, 3, NULL, NULL, 3, 2, 1),
(38, 11, 5, 1, 0, 0, 3, NULL, NULL, 3, 2, 1),
(39, 12, 5, 1, 4, 1, 3, NULL, NULL, 3, 2, 1),
(52, 1, 11, 1, 0, 0, 3, NULL, NULL, 3, 2, 1),
(53, 2, 11, 1, 5, 1, 3, NULL, NULL, 3, 2, 1),
(54, 3, 11, 1, 3, 1, 3, NULL, NULL, 3, 2, 1),
(55, 4, 11, 1, 4, 1, 3, NULL, NULL, 3, 2, 1),
(56, 5, 11, 1, 2, 1, 3, NULL, NULL, 3, 2, 1),
(57, 6, 11, 1, 6, 1, 3, NULL, NULL, 3, 2, 1),
(58, 7, 11, 1, 0, 0, 3, NULL, NULL, 3, 1, 1),
(59, 8, 11, 1, 5, 1, 3, NULL, NULL, 3, 2, 1),
(60, 9, 11, 1, 3, 1, 3, NULL, NULL, 3, 2, 1),
(61, 10, 11, 1, 7, 1, 3, NULL, NULL, 3, 2, 1),
(62, 11, 11, 1, 0, 0, 3, NULL, NULL, 3, 2, 1),
(63, 12, 11, 1, 4, 1, 3, NULL, NULL, 3, 2, 1),
(112, 1, 16, 1, 0, 0, 3, NULL, NULL, 3, 2, 1),
(113, 2, 16, 1, 5, 1, 3, NULL, NULL, 3, 2, 1),
(114, 3, 16, 1, 3, 1, 3, NULL, NULL, 3, 2, 1),
(115, 4, 16, 1, 4, 1, 3, NULL, NULL, 3, 2, 1),
(116, 5, 16, 1, 2, 1, 3, NULL, NULL, 3, 2, 1),
(117, 6, 16, 1, 6, 1, 3, NULL, NULL, 3, 2, 1),
(118, 7, 16, 1, 0, 0, 3, NULL, NULL, 3, 1, 1),
(119, 8, 16, 1, 5, 1, 3, NULL, NULL, 3, 2, 1),
(120, 9, 16, 1, 3, 1, 3, NULL, NULL, 3, 2, 1),
(121, 10, 16, 1, 7, 1, 3, NULL, NULL, 3, 2, 1),
(122, 11, 16, 1, 0, 0, 3, NULL, NULL, 3, 2, 1),
(123, 12, 16, 1, 4, 1, 3, NULL, NULL, 3, 2, 1),
(124, 1, 17, 1, 0, 0, 3, NULL, NULL, 3, 2, 1),
(125, 2, 17, 1, 5, 1, 3, NULL, NULL, 3, 2, 1),
(126, 3, 17, 1, 3, 1, 3, NULL, NULL, 3, 2, 1),
(127, 4, 17, 1, 4, 1, 3, NULL, NULL, 3, 2, 1),
(128, 5, 17, 1, 2, 1, 3, NULL, NULL, 3, 2, 1),
(129, 6, 17, 1, 6, 1, 3, NULL, NULL, 3, 2, 1),
(130, 7, 17, 1, 0, 0, 3, NULL, NULL, 3, 1, 1),
(131, 8, 17, 1, 5, 1, 3, NULL, NULL, 3, 2, 1),
(132, 9, 17, 1, 3, 1, 3, NULL, NULL, 3, 2, 1),
(133, 10, 17, 1, 7, 1, 3, NULL, NULL, 3, 2, 1),
(134, 11, 17, 1, 0, 0, 3, NULL, NULL, 3, 2, 1),
(135, 12, 17, 1, 4, 1, 3, NULL, NULL, 3, 2, 1),
(136, 1, 18, 1, 0, 0, 3, NULL, NULL, 3, 2, 1),
(137, 2, 18, 1, 5, 1, 3, NULL, NULL, 3, 2, 1),
(138, 3, 18, 1, 3, 1, 3, NULL, NULL, 3, 2, 1),
(139, 4, 18, 1, 4, 1, 3, NULL, NULL, 3, 2, 1),
(140, 5, 18, 1, 2, 1, 3, NULL, NULL, 3, 2, 1),
(141, 6, 18, 1, 6, 1, 3, NULL, NULL, 3, 2, 1),
(142, 7, 18, 1, 0, 0, 3, NULL, NULL, 3, 1, 1),
(143, 8, 18, 1, 5, 1, 3, NULL, NULL, 3, 2, 1),
(144, 9, 18, 1, 3, 1, 3, NULL, NULL, 3, 2, 1),
(145, 10, 18, 1, 7, 1, 3, NULL, NULL, 3, 2, 1),
(146, 11, 18, 1, 0, 0, 3, NULL, NULL, 3, 2, 1),
(147, 12, 18, 1, 4, 1, 3, NULL, NULL, 3, 2, 1),
(148, 1, 19, 1, 0, 0, 3, NULL, NULL, 3, 2, 1),
(149, 2, 19, 1, 5, 1, 3, NULL, NULL, 3, 2, 1),
(150, 3, 19, 1, 3, 1, 3, NULL, NULL, 3, 2, 1),
(151, 4, 19, 1, 4, 1, 3, NULL, NULL, 3, 2, 1),
(152, 5, 19, 1, 2, 1, 3, NULL, NULL, 3, 2, 1),
(153, 6, 19, 1, 6, 1, 3, NULL, NULL, 3, 2, 1),
(154, 7, 19, 1, 0, 0, 3, NULL, NULL, 3, 1, 1),
(155, 8, 19, 1, 5, 1, 3, NULL, NULL, 3, 2, 1),
(156, 9, 19, 1, 3, 1, 3, NULL, NULL, 3, 2, 1),
(157, 10, 19, 1, 7, 1, 3, NULL, NULL, 3, 2, 1),
(158, 11, 19, 1, 0, 0, 3, NULL, NULL, 3, 2, 1),
(159, 12, 19, 1, 4, 1, 3, NULL, NULL, 3, 2, 1),
(280, 1, 30, 1, 0, 0, 3, NULL, NULL, 3, 2, 1),
(281, 2, 30, 1, 5, 1, 3, NULL, NULL, 3, 2, 1),
(282, 3, 30, 1, 3, 1, 3, NULL, NULL, 3, 2, 1),
(283, 4, 30, 1, 4, 1, 3, NULL, NULL, 3, 2, 1),
(284, 5, 30, 1, 2, 1, 3, NULL, NULL, 3, 2, 1),
(285, 6, 30, 1, 6, 1, 3, NULL, NULL, 3, 2, 1),
(286, 7, 30, 1, 0, 0, 3, NULL, NULL, 3, 1, 1),
(287, 8, 30, 1, 5, 1, 3, NULL, NULL, 3, 2, 1),
(288, 9, 30, 1, 3, 1, 3, NULL, NULL, 3, 2, 1),
(289, 10, 30, 1, 7, 1, 3, NULL, NULL, 3, 2, 1),
(290, 11, 30, 1, 0, 0, 3, NULL, NULL, 3, 2, 1),
(291, 12, 30, 1, 4, 1, 3, NULL, NULL, 3, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `settings_website`
--

CREATE TABLE IF NOT EXISTS `settings_website` (
  `settings_web_id` int(10) NOT NULL auto_increment,
  `domain_name` varchar(200) default NULL,
  `subdomain_name` varchar(100) default NULL,
  `custom_title` varchar(200) default NULL,
  `template_name` int(10) NOT NULL,
  `breadcrumb` int(2) NOT NULL default '1',
  `agent_uid` int(1) NOT NULL,
  `include_page` int(5) default '0',
  `listing_order` int(10) default '0',
  `user_change_listing` int(5) default '0',
  `image_name` varchar(200) default NULL,
  `image_path` text,
  `create_date` int(10) NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY  (`settings_web_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `settings_website`
--

INSERT INTO `settings_website` (`settings_web_id`, `domain_name`, `subdomain_name`, `custom_title`, `template_name`, `breadcrumb`, `agent_uid`, `include_page`, `listing_order`, `user_change_listing`, `image_name`, `image_path`, `create_date`, `status`) VALUES
(1, NULL, 'x1', NULL, 1, 1, 1, 0, 87, 0, NULL, NULL, 1299602847, 1),
(2, NULL, 'x2', NULL, 1, 1, 4, 0, 0, 0, NULL, NULL, 1299683140, 1),
(3, 'testmall', 'x3', NULL, 1, 1, 5, 0, 0, 0, NULL, NULL, 1301499028, 1),
(5, 'xxvv', 'x5', NULL, 1, 1, 11, 0, 0, 0, NULL, NULL, 1301500065, 1),
(7, 'california.com', 'x7', NULL, 1, 1, 3, 0, 0, 0, NULL, NULL, 1302335182, 1),
(10, '', NULL, NULL, 1, 1, 16, 0, 0, 0, NULL, NULL, 1342821165, 1),
(11, 'dd', NULL, NULL, 1, 1, 17, 0, 0, 0, NULL, NULL, 1342840367, 1),
(12, 'ghg.com', NULL, NULL, 1, 1, 18, 0, 0, 0, NULL, NULL, 1342840636, 1),
(13, 'ummar', NULL, NULL, 1, 1, 19, 0, 0, 0, NULL, NULL, 1342840720, 1),
(24, 'dddds', NULL, NULL, 1, 1, 30, 0, 0, 0, NULL, NULL, 1342926390, 1);

-- --------------------------------------------------------

--
-- Table structure for table `shopping_mall`
--

CREATE TABLE IF NOT EXISTS `shopping_mall` (
  `shopping_mall_id` int(10) NOT NULL auto_increment,
  `shopping_mall_name` varchar(200) default NULL,
  `address` text,
  `location_id` int(10) default NULL,
  `contact_name` varchar(200) default NULL,
  `email_address` varchar(200) default NULL,
  `website` varchar(100) default NULL,
  `business_phone` varchar(100) default NULL,
  `mobile_no` varchar(100) default NULL,
  `fax` varchar(100) default NULL,
  `city` varchar(100) default NULL,
  `postal_code` varchar(100) default NULL,
  `disclaimer` text,
  `map_lat` double default NULL,
  `map_lng` double default NULL,
  `create_date` int(10) default NULL,
  `status` int(2) default NULL,
  PRIMARY KEY  (`shopping_mall_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `shopping_mall`
--

INSERT INTO `shopping_mall` (`shopping_mall_id`, `shopping_mall_name`, `address`, `location_id`, `contact_name`, `email_address`, `website`, `business_phone`, `mobile_no`, `fax`, `city`, `postal_code`, `disclaimer`, `map_lat`, `map_lng`, `create_date`, `status`) VALUES
(1, 'Rapa Plaza', 'House:8,Road 16', 17, 'Shafiq', 'shafiqabs@gmail.com', 'rapa', '1234', '123456', '123', 'Dhaka', '1209', 'test', 43.8672265, -79.2845982, 1316176760, 1),
(5, 'Test Mall', '', 18, '', '', '', '', '', '', '', '', 'xzvxcvcx', 43.8672265, -79.2845982, 1316181452, 1);

-- --------------------------------------------------------

--
-- Table structure for table `shop_brand`
--

CREATE TABLE IF NOT EXISTS `shop_brand` (
  `agent_uid` int(10) default NULL,
  `brand_status` int(1) default '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop_brand`
--

INSERT INTO `shop_brand` (`agent_uid`, `brand_status`) VALUES
(1, 1),
(11, 0),
(4, 1),
(3, 1),
(17, 0),
(18, 0),
(19, 0),
(30, 0);

-- --------------------------------------------------------

--
-- Table structure for table `shop_category`
--

CREATE TABLE IF NOT EXISTS `shop_category` (
  `agent_uid` int(11) default NULL,
  `parent_id` int(10) default '0',
  `category_id` int(11) default NULL,
  `ordering` tinyint(10) default '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop_category`
--

INSERT INTO `shop_category` (`agent_uid`, `parent_id`, `category_id`, `ordering`) VALUES
(18, 1, 120, 0),
(18, 1, 4, 0),
(1, 24, 557, 0),
(1, 24, 25, 0),
(1, 7, 13, 0),
(1, 7, 12, 0),
(1, 7, 11, 0),
(1, 6, 9, 0),
(1, 6, 8, 0),
(1, 6, 5, 0),
(1, 1, 120, 0),
(1, 1, 4, 0),
(1, 1, 3, 0),
(1, 1, 2, 0),
(18, 1, 3, 0),
(18, 1, 2, 0),
(3, 10, 275, 0),
(3, 10, 273, 0),
(3, 10, 274, 0),
(3, 10, 271, 0),
(3, 10, 168, 0),
(3, 7, 13, 0),
(3, 7, 12, 0),
(3, 7, 11, 0),
(3, 6, 9, 0),
(3, 6, 8, 0),
(3, 6, 5, 0),
(3, 1, 120, 0),
(3, 1, 4, 0),
(3, 1, 3, 0),
(3, 1, 2, 0),
(3, 14, 15, 0),
(3, 14, 439, 0),
(3, 14, 428, 0),
(3, 14, 421, 0),
(3, 14, 398, 0),
(3, 14, 397, 0),
(3, 14, 396, 0),
(3, 14, 265, 0),
(3, 14, 17, 0),
(3, 14, 16, 0),
(3, 14, 446, 0),
(1, 24, 25, 0),
(1, 24, 25, 0);

-- --------------------------------------------------------

--
-- Table structure for table `shop_details`
--

CREATE TABLE IF NOT EXISTS `shop_details` (
  `agent_uid` int(10) NOT NULL auto_increment,
  `shop_name` varchar(200) NOT NULL,
  `shop_url` varchar(200) default NULL,
  `location_id` int(10) NOT NULL,
  `shopping_status` int(2) default NULL,
  `brand_status` int(1) NOT NULL default '0',
  `contact_person` varchar(200) default NULL,
  `designation` varchar(100) default NULL,
  `email` varchar(200) default NULL,
  `website` varchar(200) default NULL,
  `cell_phone` varchar(200) default NULL,
  `business_phone` varchar(200) default NULL,
  `fax` varchar(100) default NULL,
  `address` text,
  `city` varchar(100) default NULL,
  `postal_code` varchar(100) default NULL,
  `district` varchar(200) NOT NULL,
  `country` varchar(100) NOT NULL default 'Bangladesh',
  `map_lat` double default NULL,
  `map_lng` double default NULL,
  `disclaimer` text NOT NULL,
  `status` int(2) default '1',
  PRIMARY KEY  (`agent_uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `shop_details`
--

INSERT INTO `shop_details` (`agent_uid`, `shop_name`, `shop_url`, `location_id`, `shopping_status`, `brand_status`, `contact_person`, `designation`, `email`, `website`, `cell_phone`, `business_phone`, `fax`, `address`, `city`, `postal_code`, `district`, `country`, `map_lat`, `map_lng`, `disclaimer`, `status`) VALUES
(1, 'Abc', NULL, 17, 1, 0, 'Sazedul Haque vv', NULL, 'shafiqabs@gmail.com', 'authenticbd.com', '01822897060', '01822897060', '018822897060', 'House:8,Road 16', 'Dhaka', '1012', '', 'Bangladesh', 0, 0, '', 0),
(3, 'California Fried Chiken & Pastry Shop', NULL, 17, 0, 0, 'California', NULL, 'california@ebdshop.com', 'cfsbd.com', '', '', '', '', '', '', '', 'Bangladesh', NULL, NULL, '0', 1),
(4, 'Xenial', NULL, 17, 1, 0, 'Md Shafiqul Islam', NULL, 'jashimuddin@x-grouprestaurant.com', 'http://www.x-grouprestaurant.com', '8802 8123830, 8802 8150394 & 8802 8150396', '8802 8123830, 8802 8150394 & 8802 8150396', '8802 8123830', 'House No 365(old),6 (New), Road No.27,Dhanmondi,Dhaka', 'Dhaka', '1209', 'Dhaka', 'Bangladesh', NULL, NULL, 'X-Group Chain Restaurant is a pioneer group of restaurants located in some prime areas of Dhaka City. We have started restaurant business since 1992 and one of our groups restaurant named Xiamen was successfully formed at Dhanmondi, Dhaka. It was the first ever restaurant which started a new era for this group. Since then we have successfully established 6 (six) restaurants in different prime locations at Dhaka. We offer lavishly decorated dish and a large space for clients along with multi cuisine menus, especially Thai Cuisine, Chinese Cuisine and Bengali foods. All of our restaurants have homely and a well-secured environment to organize party & programs. Every single restaurant has been designed and supervised by some of the top architects and engineers who has given more priority on local tradition and heritage while designing. Contemporary decor, large car parking, concealed lighting, air conditioning and comfortable seating along with effective and friendly staff make the X-Group Chain Restaurant the perfect menu/venue for lunch & dinner all the year round.\n', 1),
(6, 'Test Shop', NULL, 17, NULL, 0, 'Test Shop', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'Bangladesh', NULL, NULL, '', 1),
(7, 'Test Shop', NULL, 17, NULL, 0, 'Test Shop', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'Bangladesh', NULL, NULL, '', 1),
(11, 'Dina', NULL, 19, 0, 0, 'xxxvv', NULL, '', '', '', '', '', '', '', '', '', 'Bangladesh', 0, 0, '', 1),
(17, 'dd', NULL, 0, NULL, 0, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'Bangladesh', NULL, NULL, '', 1),
(18, 'am', NULL, 0, NULL, 0, '', NULL, NULL, NULL, 's', 'dfd', 'dssd', 'dfdf', 'dsf', 'd', 'd', 'Bangladesh', NULL, NULL, 'd', 1),
(19, 'Ummar', NULL, 0, NULL, 0, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'Bangladesh', NULL, NULL, '', 1),
(30, 'dd dds', NULL, 17, 1, 0, 'Sazedul Haque vv', NULL, 'shoshiabs@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', 'Bangladesh', NULL, NULL, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `shop_image`
--

CREATE TABLE IF NOT EXISTS `shop_image` (
  `agent_uid` int(10) default NULL,
  `image_name` text,
  `image_path` text,
  UNIQUE KEY `agent_uid` (`agent_uid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop_image`
--

INSERT INTO `shop_image` (`agent_uid`, `image_name`, `image_path`) VALUES
(1, '40c14ebc2a2711ee0165f3ac358ef828.jpg', 'uploads/shop/1/40c14ebc2a2711ee0165f3ac358ef828.jpg'),
(4, 'bkg3.jpg', 'uploads/shop/4/bkg3.jpg'),
(3, 'universe_and_planets_digital_art_wallpaper_lux1.jpg', 'uploads/shop/3/universe_and_planets_digital_art_wallpaper_lux1.jpg'),
(5, 'bkg3.jpg', 'uploads/mall/5/bkg3.jpg'),
(18, 'd4a0f50ed11551ad4d7d095b822f0f4c.jpg', 'uploads/shop/18/d4a0f50ed11551ad4d7d095b822f0f4c.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `shop_shopping_mall`
--

CREATE TABLE IF NOT EXISTS `shop_shopping_mall` (
  `agent_uid` int(10) default '0',
  `shopping_mall_id` int(10) default '0',
  `lavel` int(10) default '0',
  `shop_no` varchar(100) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop_shopping_mall`
--

INSERT INTO `shop_shopping_mall` (`agent_uid`, `shopping_mall_id`, `lavel`, `shop_no`) VALUES
(3, 0, 0, '0'),
(1, 1, 22, '2000'),
(4, 1, 21, '120'),
(11, 5, 0, '0'),
(17, 0, 0, NULL),
(18, 0, 0, NULL),
(19, 0, 0, NULL),
(30, 5, 23, '220');

-- --------------------------------------------------------

--
-- Table structure for table `shop_type`
--

CREATE TABLE IF NOT EXISTS `shop_type` (
  `agent_uid` int(11) default NULL,
  `parent_id` text NOT NULL,
  `category_id` text NOT NULL,
  `ordering` tinyint(10) default '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shop_type`
--

INSERT INTO `shop_type` (`agent_uid`, `parent_id`, `category_id`, `ordering`) VALUES
(1, 'a:3:{i:0;s:1:"1";i:1;s:1:"6";i:2;s:1:"7";}', 'a:14:{i:0;s:1:"2";i:1;s:1:"3";i:2;s:1:"4";i:3;s:3:"120";i:4;s:1:"5";i:5;s:1:"8";i:6;s:1:"9";i:7;s:2:"11";i:8;s:2:"12";i:9;s:2:"13";i:10;s:2:"25";i:11;s:3:"557";i:12;s:2:"25";i:13;s:2:"25";}', 0),
(18, 'a:1:{i:0;s:1:"1";}', 'a:4:{i:0;s:1:"2";i:1;s:1:"3";i:2;s:1:"4";i:3;s:3:"120";}', 0),
(3, 'a:5:{i:0;s:1:"1";i:1;s:1:"6";i:2;s:1:"7";i:3;s:2:"10";i:4;s:2:"14";}', 'a:26:{i:0;s:1:"2";i:1;s:1:"3";i:2;s:1:"4";i:3;s:3:"120";i:4;s:1:"5";i:5;s:1:"8";i:6;s:1:"9";i:7;s:2:"11";i:8;s:2:"12";i:9;s:2:"13";i:10;s:3:"168";i:11;s:3:"271";i:12;s:3:"274";i:13;s:3:"273";i:14;s:3:"275";i:15;s:2:"15";i:16;s:3:"439";i:17;s:3:"428";i:18;s:3:"421";i:19;s:3:"398";i:20;s:3:"397";i:21;s:3:"396";i:22;s:3:"265";i:23;s:2:"17";i:24;s:2:"16";i:25;s:3:"446";}', 0);

-- --------------------------------------------------------

--
-- Table structure for table `site_content`
--

CREATE TABLE IF NOT EXISTS `site_content` (
  `site_content_id` int(10) NOT NULL auto_increment,
  `site_content_name` varchar(200) default NULL,
  `sitecontent` text NOT NULL,
  `status` int(2) default '1',
  PRIMARY KEY  (`site_content_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `site_content`
--

INSERT INTO `site_content` (`site_content_id`, `site_content_name`, `sitecontent`, `status`) VALUES
(1, 'dsdfs', 'dfsd', 1),
(2, 'xxx pp', 'xxxxxx mm<br />', 1);

-- --------------------------------------------------------

--
-- Table structure for table `team_details`
--

CREATE TABLE IF NOT EXISTS `team_details` (
  `team_uid` int(10) NOT NULL auto_increment,
  `agent_uid` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) default NULL,
  `designation` varchar(100) default NULL,
  `tag_line` varchar(200) default NULL,
  `t_l_footnote` varchar(200) default NULL,
  `email` varchar(200) default NULL,
  `website` varchar(200) default NULL,
  `cell_phone` varchar(200) default NULL,
  `business_phone` varchar(200) default NULL,
  `fax` varchar(100) default NULL,
  `address1` text,
  `address2` text,
  `city` varchar(100) default NULL,
  `postal_code` varchar(100) default NULL,
  `province` int(10) default NULL,
  `country` varchar(100) default NULL,
  `about` text,
  `past_revisions` text,
  `team_photo` text,
  `team_photo_path` text,
  `team_photo_path_crop` text,
  `status` int(2) default '0',
  PRIMARY KEY  (`team_uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `team_details`
--

INSERT INTO `team_details` (`team_uid`, `agent_uid`, `first_name`, `last_name`, `designation`, `tag_line`, `t_l_footnote`, `email`, `website`, `cell_phone`, `business_phone`, `fax`, `address1`, `address2`, `city`, `postal_code`, `province`, `country`, `about`, `past_revisions`, `team_photo`, `team_photo_path`, `team_photo_path_crop`, `status`) VALUES
(1, 4, 'Md Shafiqul', 'Md Shafiqul', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, 0),
(2, 4, 'xx', 'xx', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '7719.jpg', 'http://localhost/admin-ebdshop/uploads/shop/4/team/2/7719.jpg', NULL, 0),
(3, 1, 'Ayisha', 'Siddika', '', NULL, NULL, '', NULL, '', '', '', '', NULL, '', '', NULL, NULL, '', NULL, '35180_n.jpg', 'http://localhost/admin-ebdshop/uploads/shop/1/team/3/35180_n.jpg', 'http://localhost/admin-ebdshop/uploads/shop/1/team/3/crop/35180_n.jpg', 0),
(4, 3, 'M Shafiqul', 'Islam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(6, 3, 'New', 'Member', 'Seals Men', NULL, NULL, 'shafiqabs@gmail.com', NULL, '12345565', '123456', '423424', 'dhaka', NULL, 'Dhaka', '1000', NULL, NULL, 'TestAbout', NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `team_photo_position`
--

CREATE TABLE IF NOT EXISTS `team_photo_position` (
  `tpp_id` int(11) NOT NULL auto_increment,
  `team_uid` int(11) NOT NULL,
  `x` int(11) NOT NULL,
  `y` int(11) NOT NULL,
  `w` int(11) NOT NULL,
  `h` int(11) NOT NULL,
  PRIMARY KEY  (`tpp_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `team_photo_position`
--

INSERT INTO `team_photo_position` (`tpp_id`, `team_uid`, `x`, `y`, `w`, `h`) VALUES
(1, 4, 0, 0, 0, 0),
(2, 4, 0, 0, 0, 0),
(3, 4, 0, 0, 0, 0),
(4, 4, 0, 0, 0, 0),
(5, 4, 0, 0, 0, 0),
(6, 4, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `testmonials`
--

CREATE TABLE IF NOT EXISTS `testmonials` (
  `testmonials_id` int(11) NOT NULL auto_increment,
  `agent_uid` int(11) NOT NULL,
  `testmonials1` text,
  `testmonials2` text,
  `testmonials3` text,
  `testmonials4` text,
  `testmonials5` text,
  `testmonials_font_color` varchar(100) default NULL,
  `testmonials_bg_color` varchar(100) default NULL,
  `testmonials_pipe_color` varchar(20) default NULL,
  `testmonials_status` int(2) NOT NULL default '0',
  PRIMARY KEY  (`testmonials_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `testmonials`
--

INSERT INTO `testmonials` (`testmonials_id`, `agent_uid`, `testmonials1`, `testmonials2`, `testmonials3`, `testmonials4`, `testmonials5`, `testmonials_font_color`, `testmonials_bg_color`, `testmonials_pipe_color`, `testmonials_status`) VALUES
(1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tradeshow`
--

CREATE TABLE IF NOT EXISTS `tradeshow` (
  `tradeshow_id` int(10) NOT NULL auto_increment,
  `exibition_type` int(10) default NULL,
  `tradeshow_title` varchar(250) default NULL,
  `venue` text,
  `description` text,
  `start_date` int(11) default NULL,
  `end_date` int(11) default NULL,
  `image_banner_name` varchar(200) default NULL,
  `image_banner_path` text,
  `logo_name` varchar(200) default NULL,
  `image_logo_path` text,
  `location_id` int(10) default NULL,
  `address` text,
  `organizer_name` varchar(200) default NULL,
  `contact_name` varchar(200) default NULL,
  `mobile_no` varchar(200) default NULL,
  `phone_no` varchar(200) default NULL,
  `email_address` varchar(200) default NULL,
  `website_title` varchar(200) default NULL,
  `website` varchar(200) default NULL,
  `opening_time` varchar(20) default NULL,
  `end_time` varchar(20) default NULL,
  `create_date` int(10) default NULL,
  `status` int(1) NOT NULL default '1',
  PRIMARY KEY  (`tradeshow_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tradeshow`
--

INSERT INTO `tradeshow` (`tradeshow_id`, `exibition_type`, `tradeshow_title`, `venue`, `description`, `start_date`, `end_date`, `image_banner_name`, `image_banner_path`, `logo_name`, `image_logo_path`, `location_id`, `address`, `organizer_name`, `contact_name`, `mobile_no`, `phone_no`, `email_address`, `website_title`, `website`, `opening_time`, `end_time`, `create_date`, `status`) VALUES
(1, 60, 'Fashion shanghai 2011-17th Shanghai International Clothing&Textile Expo', 'Shanghai New International Expo Center', '<strong>Introduction</strong><br /> Fashion shanghai is the essential sourcing event in China for apparel fabric buyers, R &amp; D and Product Development Specialists, designers, merchandisers and overseas sourcing professionals. Meet with mills and manufacturers from China and around the world showcasing their collections. The wide range of leading Chinese and international suppliers and the work oriented atmosphere manifest Fashion shanghai one must-attend trade fair in 2011 in Asia. Fashion shanghai is the annual central meeting point of China&rsquo;s textile industry and has become increasingly acknowledged abroad.', 1301184000, 1301184000, '612ayisha1.jpg', 'http://localhost/admin-ebdshop/uploads/exibition/1/banner/612ayisha1.jpg', '765180_n.jpg', 'http://localhost/admin-ebdshop/uploads/exibition/1/logo/765180_n.jpg', 18, 'Dhanmondi,Dhaka', 'Shanghai Textile Technology Service&Exhibition Center', 'Mr. Noel Tian', '86-21-62775353', '86-21-62775353', 'shafiqabs@gmail.com', 'Shanghai Textile Technology', 'sss.com', '0-00-pm', '0-00-pm', NULL, 1),
(2, 60, 'xxxx', 'xxxxx', '', 1301356800, 1301356800, '2228.jpg', 'http://localhost/admin-ebdshop/uploads/exibition/2/banner/2228.jpg', '5918.jpg', 'http://localhost/admin-ebdshop/uploads/exibition/2/logo/5918.jpg', 17, '', '', '', '', '', '', '', '', '0-00-pm', '0-00-pm', NULL, 1),
(3, 60, 'Fashion shanghai 2011-17th Shanghai International Clothing&Textile ', 'Fashion shanghai', '', 1301356800, 1301356800, '9775.jpg', 'http://localhost/admin-ebdshop/uploads/exibition/3/banner/9775.jpg', '63D.jpg', 'http://localhost/admin-ebdshop/uploads/exibition/3/logo/63D.jpg', 17, '', '', '', '', '', '', '', '', '0-00-pm', '0-00-pm', NULL, 1),
(4, 60, 'New trade show', 'Dhaka', '', 1301184000, 1301529600, '14413.jpg', 'http://localhost/admin-ebdshop/uploads/exibition/banner/14413.jpg', '502010062821422330960.jpg', 'http://localhost/admin-ebdshop/uploads/exibition/logo/502010062821422330960.jpg', 18, '', '', '', '', '', '', '', '', '0-00-pm', '0-00-pm', NULL, 1),
(5, 60, 'fgdfg', 'fgfd', '', 1301356800, 1301356800, '132bigimage03.jpg', 'http://localhost/admin-ebdshop/uploads/exibition/5/banner/132bigimage03.jpg', '7942010062821560715030.jpg', 'http://localhost/admin-ebdshop/uploads/exibition/5/logo/7942010062821560715030.jpg', 17, '', '', '', '', '', '', '', '', '0-00-pm', '0-00-pm', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tradeshow_content`
--

CREATE TABLE IF NOT EXISTS `tradeshow_content` (
  `tradeshow_content_id` int(10) NOT NULL auto_increment,
  `tradeshow_id` int(10) default NULL,
  `tradeshow_content_name` varchar(200) default NULL,
  `tradeshowcontent` text NOT NULL,
  `status` int(2) default '1',
  PRIMARY KEY  (`tradeshow_content_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tradeshow_content`
--

INSERT INTO `tradeshow_content` (`tradeshow_content_id`, `tradeshow_id`, `tradeshow_content_name`, `tradeshowcontent`, `status`) VALUES
(1, NULL, 'xxx zxcxz', 'xzczxczxzx', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tradeshow_sharing`
--

CREATE TABLE IF NOT EXISTS `tradeshow_sharing` (
  `sharing_id` int(10) NOT NULL auto_increment,
  `tradeshow_id` int(10) default NULL,
  `company_name` varchar(250) default NULL,
  `website_title` varchar(200) default NULL,
  `website` varchar(200) default NULL,
  `logo_name` varchar(250) default NULL,
  `image_logo_path` text,
  `status` int(1) default '1',
  PRIMARY KEY  (`sharing_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tradeshow_sharing`
--

INSERT INTO `tradeshow_sharing` (`sharing_id`, `tradeshow_id`, `company_name`, `website_title`, `website`, `logo_name`, `image_logo_path`, `status`) VALUES
(1, 1, 'xxx pp', 'xx pp', 'xx pp', '20912.jpg', 'http://localhost/admin-ebdshop/uploads/exibition/1/sharing/20912.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tradeshow_slide`
--

CREATE TABLE IF NOT EXISTS `tradeshow_slide` (
  `tradeshow_slide_id` int(10) NOT NULL auto_increment,
  `tradeshow_id` int(10) default NULL,
  `image_name` varchar(200) default NULL,
  `image_path` text,
  `delete_path` text,
  `order` int(10) NOT NULL,
  `description` text NOT NULL,
  `slide_status` int(2) NOT NULL,
  PRIMARY KEY  (`tradeshow_slide_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `tradeshow_slide`
--

INSERT INTO `tradeshow_slide` (`tradeshow_slide_id`, `tradeshow_id`, `image_name`, `image_path`, `delete_path`, `order`, `description`, `slide_status`) VALUES
(4, 4, '2829589842.jpg', 'http://localhost/admin-ebdshop/uploads/exibition/4/slidegallery/2829589842.jpg', 'uploads/exibition/4/slidegallery/2829589842.jpg', 6, '', 1),
(6, 4, '5959777834.jpg', 'http://localhost/admin-ebdshop/uploads/exibition/4/slidegallery/5959777834.jpg', 'uploads/exibition/4/slidegallery/5959777834.jpg', 2, '', 1),
(7, 4, '5005798333.jpg', 'http://localhost/admin-ebdshop/uploads/exibition/4/slidegallery/5005798333.jpg', 'uploads/exibition/4/slidegallery/5005798333.jpg', 3, '', 1),
(8, 4, '5180664063D.jpg', 'http://localhost/admin-ebdshop/uploads/exibition/4/slidegallery/5180664063D.jpg', 'uploads/exibition/4/slidegallery/5180664063D.jpg', 4, '', 1),
(9, 4, '8226928715.jpg', 'http://localhost/admin-ebdshop/uploads/exibition/4/slidegallery/8226928715.jpg', 'uploads/exibition/4/slidegallery/8226928715.jpg', 5, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tradeshow_sponser`
--

CREATE TABLE IF NOT EXISTS `tradeshow_sponser` (
  `sponser_id` int(10) NOT NULL auto_increment,
  `tradeshow_id` int(10) default NULL,
  `company_name` varchar(250) default NULL,
  `website_title` varchar(200) default NULL,
  `website` varchar(200) default NULL,
  `logo_name` varchar(250) default NULL,
  `image_logo_path` text,
  `status` int(1) default '1',
  PRIMARY KEY  (`sponser_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tradeshow_sponser`
--

INSERT INTO `tradeshow_sponser` (`sponser_id`, `tradeshow_id`, `company_name`, `website_title`, `website`, `logo_name`, `image_logo_path`, `status`) VALUES
(1, 3, 'dvgfd', 'ddfg', 'fdgfd', '951DSC32361.jpg', 'http://localhost/admin-ebdshop/uploads/exibition/3/sponser/951DSC32361.jpg', 1),
(2, 1, 'fdgdfg', 'fdgdf', 'fdgf', '859180_n.jpg', 'http://localhost/admin-ebdshop/uploads/exibition/1/sponser/859180_n.jpg', 1),
(3, 3, 'cxvxc', 'cdvcx', 'cxvxcv', '110m1509158_AN852428_001_248.jpg', 'http://localhost/admin-ebdshop/uploads/exibition/3/sponser/110m1509158_AN852428_001_248.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tradeshow_ticket_class`
--

CREATE TABLE IF NOT EXISTS `tradeshow_ticket_class` (
  `ticket_class_id` int(11) NOT NULL auto_increment,
  `tradeshow_id` int(11) default NULL,
  `ticket_type_name` varchar(200) default NULL,
  `price` double default NULL,
  `quantity` int(11) default NULL,
  PRIMARY KEY  (`ticket_class_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tradeshow_ticket_class`
--

INSERT INTO `tradeshow_ticket_class` (`ticket_class_id`, `tradeshow_id`, `ticket_type_name`, `price`, `quantity`) VALUES
(1, 1, 'vvv', 11, 22),
(2, 1, 'zxczx', 12, 11);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `uid` int(10) NOT NULL auto_increment,
  `access_type` int(10) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email_notification` int(2) NOT NULL default '0',
  `publish_main_website` int(3) default '1',
  `add_date` int(10) NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY  (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `access_type`, `user_name`, `user_email`, `password`, `email_notification`, `publish_main_website`, `add_date`, `status`) VALUES
(1, 1, 'admin-tt-dsdf', 'shafiqabs@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 0, 1, 1342920061, 1),
(4, 3, 'cats4', '', 'd41d8cd98f00b204e9800998ecf8427e', 0, 1, 1315224163, 0),
(3, 3, 'california', '', 'd41d8cd98f00b204e9800998ecf8427e', 1, 1, 1315313386, 0),
(5, 3, 'epcc2mzj', '', 'a4288df85b6f9dda64ad21e57b640bd0', 0, 1, 1301499028, 0),
(6, 3, 'quygydhj', '', '711f21d6a4fe42985f915da5e97217a9', 0, 1, 1301499124, 0),
(7, 3, '9ixpqdm6', '', 'e0a1aa5435833f515e1b5ecf640a6a00', 0, 1, 1301499133, 0),
(11, 4, 'e2sdiix1', '', '3a4cd063d5c767bdfa1b395906dff5f4', 0, 1, 1301500065, 1),
(17, 4, 'nsystxve', '', 'de792cd74e04e51927cda2536d2f16a0', 0, 1, 1342840367, 1),
(18, 4, 'x4xlirep', '', 'e984ba01c147a524376a4cb1d4e14ceb', 0, 1, 1342840636, 1),
(19, 4, 'cbma0cpg', '', 'fc573326f1f4092eec39e915931ad63c', 0, 1, 1342840720, 1),
(30, 4, 'sxxgxfso', '', '21232f297a57a5a743894a0e4a801fc3', 0, 1, 1342936305, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_log`
--

CREATE TABLE IF NOT EXISTS `user_access_log` (
  `Log_id` int(11) NOT NULL auto_increment,
  `uid` int(10) default NULL,
  `access_date` int(10) default NULL,
  PRIMARY KEY  (`Log_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `user_access_log`
--

INSERT INTO `user_access_log` (`Log_id`, `uid`, `access_date`) VALUES
(1, 1, 1333840566),
(2, 1, 1333850411),
(3, 1, 1333850512),
(4, 1, 1333850521),
(5, 1, 1333850614),
(6, 1, 1333850660),
(7, 1, 1333853805),
(8, 1, 1333894428),
(9, 1, 1333895213),
(10, 1, 1333895437),
(11, 1, 1333937436),
(12, 1, 1333937587),
(13, 1, 1333939414);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_mapping`
--

CREATE TABLE IF NOT EXISTS `user_access_mapping` (
  `uamid` int(11) NOT NULL auto_increment,
  `access_name` varchar(50) NOT NULL,
  `admin` int(10) default NULL,
  `agent` int(1) NOT NULL,
  `brokerage` tinyint(1) NOT NULL,
  `settings` int(1) default '0',
  `rank` int(5) default NULL,
  PRIMARY KEY  (`uamid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user_access_mapping`
--

INSERT INTO `user_access_mapping` (`uamid`, `access_name`, `admin`, `agent`, `brokerage`, `settings`, `rank`) VALUES
(1, 'Administrator', 1, 1, 1, 1, 2),
(2, 'Brokerage', 0, 1, 1, 0, 1),
(3, 'Agent', 0, 1, 0, 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `website_slide`
--

CREATE TABLE IF NOT EXISTS `website_slide` (
  `website_slide_id` int(10) NOT NULL auto_increment,
  `agent_uid` int(10) default NULL,
  `image_name` varchar(200) default NULL,
  `image_path` text,
  `image_path_thumb` text NOT NULL,
  `image_path_large` text NOT NULL,
  `order` int(10) NOT NULL,
  `description` text NOT NULL,
  `slide_status` int(2) NOT NULL,
  PRIMARY KEY  (`website_slide_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `website_slide`
--


-- --------------------------------------------------------

--
-- Table structure for table `website_template`
--

CREATE TABLE IF NOT EXISTS `website_template` (
  `website_template_id` int(10) NOT NULL auto_increment,
  `template_name` varchar(200) default NULL,
  `dashboard_publish` int(2) NOT NULL default '0',
  `status` int(2) default '0',
  PRIMARY KEY  (`website_template_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `website_template`
--

INSERT INTO `website_template` (`website_template_id`, `template_name`, `dashboard_publish`, `status`) VALUES
(1, 'Default Theme', 0, 1),
(2, 'Castor (Light)', 0, 1),
(3, 'Bayfield(Blue)', 1, 1),
(4, 'Bayfield (Beige)', 0, 1),
(5, 'Ekwan (Dark Grey) Right Menu', 1, 1),
(7, 'Fenelon( Red)', 1, 1),
(6, 'Ekwan (Light Grey) Left Menu', 1, 1),
(10, 'Castor (Dark)', 2, 1),
(9, 'Detroit (Beige)', 0, 1),
(11, 'Detroit (Blue)', 1, 1),
(12, 'Detroit (Charcoal)', 0, 1),
(8, 'Barry Cohen', 1, 1),
(13, 'Niels Christensen', 1, 1),
(14, 'The partnership', 1, 1),
(15, 'Sharon Bobkin', 1, 1),
(16, 'Robert Greenberg', 1, 1),
(17, 'EliseKallas', 1, 1),
(18, 'Roger Kilgour', 1, 1),
(19, 'TorontoHomeRelocation', 1, 1),
(20, 'John Fortney', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `y_search_content`
--

CREATE TABLE IF NOT EXISTS `y_search_content` (
  `cid` int(11) NOT NULL auto_increment,
  `title` varchar(250) NOT NULL,
  `content` text NOT NULL,
  `category` int(11) NOT NULL,
  PRIMARY KEY  (`cid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `y_search_content`
--

INSERT INTO `y_search_content` (`cid`, `title`, `content`, `category`) VALUES
(1, 'Y-Search sample title for testing_1', 'Replace what you want to replace, change what you need to change. Child themes allow control over styling, images, and template files, without being stuck with an out of date theme.', 1),
(2, 'Y-Search sample title for testing_2', 'Child themes preserve updates to the parent theme. That means when we add new features to our themes they''ll automatically be added in your child theme.', 1),
(3, 'Y-Search sample title for testing_3', 'Creating new mobile themes and variations of existing mobile themes is easier than ever in WPtouch Pro. Create a child theme to start customizing in the admin panel in a single click.', 1),
(4, 'Y-Search sample title for testing_4', 'The fly-in comment form makes discussion on iPad fun and easy. The form flies in from the top, and tucks away again when not in use.', 1),
(5, 'Y-Search sample title for testing_5', 'When writing a comment reply, you can easily ''peek'' at the original comment you''re replying to with a quick tap.', 1),
(6, 'Y-Search sample title for testing_6', 'Comments are posted in real-time, using AJAX technologies, and the page is updated to show the new comment.', 1);
