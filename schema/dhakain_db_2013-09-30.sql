# ************************************************************
# Sequel Pro SQL dump
# Version 4004
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.6.10)
# Database: dhakain_db
# Generation Time: 2013-09-30 02:14:07 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table activities
# ------------------------------------------------------------

DROP TABLE IF EXISTS `activities`;

CREATE TABLE `activities` (
  `activities_id` int(10) NOT NULL AUTO_INCREMENT,
  `activities_type` int(10) DEFAULT NULL,
  `activities_title` varchar(250) DEFAULT NULL,
  `venue` text,
  `cheif_guest` varchar(200) DEFAULT NULL,
  `designation` varchar(200) DEFAULT NULL,
  `activities_description` text,
  `start_date` int(11) DEFAULT NULL,
  `end_date` int(11) DEFAULT NULL,
  `image_name` varchar(200) DEFAULT NULL,
  `image_large_path` text,
  `image_thumb_path` text,
  `location_id` int(10) DEFAULT NULL,
  `address` text,
  `organizer_name` varchar(200) DEFAULT NULL,
  `contact_name` varchar(200) DEFAULT NULL,
  `mobile_no` varchar(200) DEFAULT NULL,
  `phone` varchar(200) DEFAULT NULL,
  `email_address` varchar(200) DEFAULT NULL,
  `website` varchar(200) DEFAULT NULL,
  `opening_time` varchar(20) DEFAULT NULL,
  `end_time` varchar(20) DEFAULT NULL,
  `create_date` int(10) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`activities_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



# Dump of table admin_options
# ------------------------------------------------------------

DROP TABLE IF EXISTS `admin_options`;

CREATE TABLE `admin_options` (
  `agent_uid` bigint(20) NOT NULL,
  `publish_main_website` tinyint(1) DEFAULT '0',
  `using_shopping_cart` tinyint(1) DEFAULT '0',
  `choose_transaction` tinyint(1) DEFAULT '2'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `admin_options` WRITE;
/*!40000 ALTER TABLE `admin_options` DISABLE KEYS */;

INSERT INTO `admin_options` (`agent_uid`, `publish_main_website`, `using_shopping_cart`, `choose_transaction`)
VALUES
	(1,1,1,2);

/*!40000 ALTER TABLE `admin_options` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table advertisment
# ------------------------------------------------------------

DROP TABLE IF EXISTS `advertisment`;

CREATE TABLE `advertisment` (
  `advertisment_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `random_id` varchar(20) DEFAULT NULL,
  `agent_uid` bigint(20) NOT NULL,
  `shop_id` bigint(20) DEFAULT NULL,
  `advertisment_image` text,
  `image_path` text,
  `alternative_advertisment` text,
  `advertisment_url` tinytext,
  `position_id` tinyint(4) DEFAULT NULL,
  `created` int(20) NOT NULL,
  `ordering` tinyint(2) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`advertisment_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `advertisment` WRITE;
/*!40000 ALTER TABLE `advertisment` DISABLE KEYS */;

INSERT INTO `advertisment` (`advertisment_id`, `random_id`, `agent_uid`, `shop_id`, `advertisment_image`, `image_path`, `alternative_advertisment`, `advertisment_url`, `position_id`, `created`, `ordering`, `status`)
VALUES
	(2,'6xudshad',32,0,'944a72a594cd99e25c9f27c9cee13e01.jpg','uploads/shop/32/advertisments/944a72a594cd99e25c9f27c9cee13e01.jpg','cvvxcv','ddd',63,1371829785,2,1),
	(7,'oulxq6fd',32,1,'c12538fc4f145bb74f13cf9a516df442.jpg','uploads/shop/32/advertisments/c12538fc4f145bb74f13cf9a516df442.jpg','only add domain name & target page path(ie:domain name/target path)','cfc/fdgdfg/ghfgh',63,1371821702,1,1),
	(21,'4a9w7ifq',32,31,NULL,NULL,'test','testy/test1',63,1373131735,3,0),
	(22,'oecbajwb',32,31,NULL,'uploads/shop/32/advertisments/1b463c9d4f360ff8bca8436dce8009bc.jpg','test','testy/test1',63,1373131859,4,0),
	(23,'xlelifre',32,44,NULL,'uploads/shop/32/advertisments/882cd5587b44a885651e6905acf8e848.jpg','ggfss','testy/test1',64,1373131899,0,0);

/*!40000 ALTER TABLE `advertisment` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table banner_image
# ------------------------------------------------------------

DROP TABLE IF EXISTS `banner_image`;

CREATE TABLE `banner_image` (
  `banner_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `agent_uid` bigint(20) NOT NULL,
  `banner_name` varchar(200) NOT NULL,
  `image_name` text NOT NULL,
  `image_path` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`banner_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `banner_image` WRITE;
/*!40000 ALTER TABLE `banner_image` DISABLE KEYS */;

INSERT INTO `banner_image` (`banner_id`, `agent_uid`, `banner_name`, `image_name`, `image_path`, `status`)
VALUES
	(9,1,'new','9cd78dd72071ce000ded6e8d666cf4b5.jpg','uploads/shop/1/9cd78dd72071ce000ded6e8d666cf4b5.jpg',0),
	(10,1,'ST Victor','2988e22caf5c68a93d3ef09acc885006.JPG','uploads/shop/1/2988e22caf5c68a93d3ef09acc885006.JPG',1),
	(11,1,'slider','deae2e803ee0588c6d02066d666106c9.jpg','uploads/shop/1/deae2e803ee0588c6d02066d666106c9.jpg',1),
	(12,32,'ST Victor','3d4e52ab2d2877f3db9231d61f5758ff.JPG','uploads/shop/estern-plaza/3d4e52ab2d2877f3db9231d61f5758ff.JPG',0),
	(13,32,'slider','318efb604845140167b5123028b4a747.jpg','uploads/shop/32/318efb604845140167b5123028b4a747.jpg',0),
	(16,33,'c cv','bbeadd40f4ebb8928624d79c4e88f6c6.jpg','uploads/shop/33/bbeadd40f4ebb8928624d79c4e88f6c6.jpg',0);

/*!40000 ALTER TABLE `banner_image` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table branch
# ------------------------------------------------------------

DROP TABLE IF EXISTS `branch`;

CREATE TABLE `branch` (
  `branch_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `random_id` varchar(100) DEFAULT NULL,
  `agent_uid` int(10) DEFAULT NULL,
  `location_id` int(10) DEFAULT '0',
  `address` text,
  `contact_person` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `cell_phone` varchar(100) DEFAULT NULL,
  `business_phone` varchar(100) DEFAULT NULL,
  `fax` varchar(100) DEFAULT NULL,
  `city` varchar(200) DEFAULT NULL,
  `district` varchar(200) DEFAULT NULL,
  `postal_code` varchar(20) DEFAULT NULL,
  `google_maps` tinyint(1) DEFAULT '0',
  `ordering` tinyint(2) DEFAULT '0',
  `status` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`branch_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `branch` WRITE;
/*!40000 ALTER TABLE `branch` DISABLE KEYS */;

INSERT INTO `branch` (`branch_id`, `random_id`, `agent_uid`, `location_id`, `address`, `contact_person`, `email`, `cell_phone`, `business_phone`, `fax`, `city`, `district`, `postal_code`, `google_maps`, `ordering`, `status`)
VALUES
	(3,NULL,4,19,'Dhanmondi,Dhaka','Md Shafiqul Islam','shafiqabs@gmail.com','1212','23213','232','sdsd','Dhaka','127',NULL,NULL,0),
	(7,'5kedr09s',3,18,'test islam','shafiq','ummar@gmail.com','0000099999','888880000','4433','dhaka','Dhaka','2233',1,0,0),
	(5,'iovlgifm',3,19,'test','shafiq','ummar@gmail.com','123456','2345678','12345','dhaka','Dhaka','123ed',1,0,0),
	(8,'ohpycbn9',3,19,'test islam','test islam','ummar@gmail.com','0000099999x','888880000x','4433','dhaka','Dhaka','2233',1,0,0),
	(9,'2rgcqz1w',19,17,'Metro Shopping Complex, Dhanmoni ','Arifur Rahman','shafiqabs@gmail.com','12345','234234','123234','dhaka','Dhaka','1209',1,0,0);

/*!40000 ALTER TABLE `branch` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table buyer_orders
# ------------------------------------------------------------

DROP TABLE IF EXISTS `buyer_orders`;

CREATE TABLE `buyer_orders` (
  `buyer_id` int(10) NOT NULL DEFAULT '0',
  `agent_uid` int(10) NOT NULL DEFAULT '0',
  `product_id` int(10) NOT NULL DEFAULT '0',
  `price` double NOT NULL DEFAULT '0',
  `quantity` double NOT NULL DEFAULT '0',
  `sub_total_price` double NOT NULL DEFAULT '0',
  `created_date` int(10) NOT NULL DEFAULT '0',
  `product_status` int(2) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



# Dump of table captcha
# ------------------------------------------------------------

DROP TABLE IF EXISTS `captcha`;

CREATE TABLE `captcha` (
  `captcha_id` bigint(13) unsigned NOT NULL AUTO_INCREMENT,
  `captcha_time` int(10) unsigned NOT NULL,
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `word` varchar(20) NOT NULL,
  PRIMARY KEY (`captcha_id`),
  KEY `word` (`word`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



# Dump of table country
# ------------------------------------------------------------

DROP TABLE IF EXISTS `country`;

CREATE TABLE `country` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `iso` char(2) NOT NULL,
  `name` varchar(80) NOT NULL,
  `printable_name` varchar(80) NOT NULL,
  `iso3` char(3) DEFAULT NULL,
  `numcode` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `country` WRITE;
/*!40000 ALTER TABLE `country` DISABLE KEYS */;

INSERT INTO `country` (`id`, `iso`, `name`, `printable_name`, `iso3`, `numcode`)
VALUES
	(1,'AF','AFGHANISTAN','Afghanistan','AFG',4),
	(2,'AL','ALBANIA','Albania','ALB',8),
	(3,'DZ','ALGERIA','Algeria','DZA',12),
	(4,'AS','AMERICAN SAMOA','American Samoa','ASM',16),
	(5,'AD','ANDORRA','Andorra','AND',20),
	(6,'AO','ANGOLA','Angola','AGO',24),
	(7,'AI','ANGUILLA','Anguilla','AIA',660),
	(8,'AQ','ANTARCTICA','Antarctica',NULL,NULL),
	(9,'AG','ANTIGUA AND BARBUDA','Antigua and Barbuda','ATG',28),
	(10,'AR','ARGENTINA','Argentina','ARG',32),
	(11,'AM','ARMENIA','Armenia','ARM',51),
	(12,'AW','ARUBA','Aruba','ABW',533),
	(13,'AU','AUSTRALIA','Australia','AUS',36),
	(14,'AT','AUSTRIA','Austria','AUT',40),
	(15,'AZ','AZERBAIJAN','Azerbaijan','AZE',31),
	(16,'BS','BAHAMAS','Bahamas','BHS',44),
	(17,'BH','BAHRAIN','Bahrain','BHR',48),
	(18,'BD','BANGLADESH','Bangladesh','BGD',50),
	(19,'BB','BARBADOS','Barbados','BRB',52),
	(20,'BY','BELARUS','Belarus','BLR',112),
	(21,'BE','BELGIUM','Belgium','BEL',56),
	(22,'BZ','BELIZE','Belize','BLZ',84),
	(23,'BJ','BENIN','Benin','BEN',204),
	(24,'BM','BERMUDA','Bermuda','BMU',60),
	(25,'BT','BHUTAN','Bhutan','BTN',64),
	(26,'BO','BOLIVIA','Bolivia','BOL',68),
	(27,'BA','BOSNIA AND HERZEGOVINA','Bosnia and Herzegovina','BIH',70),
	(28,'BW','BOTSWANA','Botswana','BWA',72),
	(29,'BV','BOUVET ISLAND','Bouvet Island',NULL,NULL),
	(30,'BR','BRAZIL','Brazil','BRA',76),
	(31,'IO','BRITISH INDIAN OCEAN TERRITORY','British Indian Ocean Territory',NULL,NULL),
	(32,'BN','BRUNEI DARUSSALAM','Brunei Darussalam','BRN',96),
	(33,'BG','BULGARIA','Bulgaria','BGR',100),
	(34,'BF','BURKINA FASO','Burkina Faso','BFA',854),
	(35,'BI','BURUNDI','Burundi','BDI',108),
	(36,'KH','CAMBODIA','Cambodia','KHM',116),
	(37,'CM','CAMEROON','Cameroon','CMR',120),
	(38,'CA','CANADA','Canada','CAN',124),
	(39,'CV','CAPE VERDE','Cape Verde','CPV',132),
	(40,'KY','CAYMAN ISLANDS','Cayman Islands','CYM',136),
	(41,'CF','CENTRAL AFRICAN REPUBLIC','Central African Republic','CAF',140),
	(42,'TD','CHAD','Chad','TCD',148),
	(43,'CL','CHILE','Chile','CHL',152),
	(44,'CN','CHINA','China','CHN',156),
	(45,'CX','CHRISTMAS ISLAND','Christmas Island',NULL,NULL),
	(46,'CC','COCOS (KEELING) ISLANDS','Cocos (Keeling) Islands',NULL,NULL),
	(47,'CO','COLOMBIA','Colombia','COL',170),
	(48,'KM','COMOROS','Comoros','COM',174),
	(49,'CG','CONGO','Congo','COG',178),
	(50,'CD','CONGO, THE DEMOCRATIC REPUBLIC OF THE','Congo, the Democratic Republic of the','COD',180),
	(51,'CK','COOK ISLANDS','Cook Islands','COK',184),
	(52,'CR','COSTA RICA','Costa Rica','CRI',188),
	(53,'CI','COTE D\'IVOIRE','Cote D\'Ivoire','CIV',384),
	(54,'HR','CROATIA','Croatia','HRV',191),
	(55,'CU','CUBA','Cuba','CUB',192),
	(56,'CY','CYPRUS','Cyprus','CYP',196),
	(57,'CZ','CZECH REPUBLIC','Czech Republic','CZE',203),
	(58,'DK','DENMARK','Denmark','DNK',208),
	(59,'DJ','DJIBOUTI','Djibouti','DJI',262),
	(60,'DM','DOMINICA','Dominica','DMA',212),
	(61,'DO','DOMINICAN REPUBLIC','Dominican Republic','DOM',214),
	(62,'EC','ECUADOR','Ecuador','ECU',218),
	(63,'EG','EGYPT','Egypt','EGY',818),
	(64,'SV','EL SALVADOR','El Salvador','SLV',222),
	(65,'GQ','EQUATORIAL GUINEA','Equatorial Guinea','GNQ',226),
	(66,'ER','ERITREA','Eritrea','ERI',232),
	(67,'EE','ESTONIA','Estonia','EST',233),
	(68,'ET','ETHIOPIA','Ethiopia','ETH',231),
	(69,'FK','FALKLAND ISLANDS (MALVINAS)','Falkland Islands (Malvinas)','FLK',238),
	(70,'FO','FAROE ISLANDS','Faroe Islands','FRO',234),
	(71,'FJ','FIJI','Fiji','FJI',242),
	(72,'FI','FINLAND','Finland','FIN',246),
	(73,'FR','FRANCE','France','FRA',250),
	(74,'GF','FRENCH GUIANA','French Guiana','GUF',254),
	(75,'PF','FRENCH POLYNESIA','French Polynesia','PYF',258),
	(76,'TF','FRENCH SOUTHERN TERRITORIES','French Southern Territories',NULL,NULL),
	(77,'GA','GABON','Gabon','GAB',266),
	(78,'GM','GAMBIA','Gambia','GMB',270),
	(79,'GE','GEORGIA','Georgia','GEO',268),
	(80,'DE','GERMANY','Germany','DEU',276),
	(81,'GH','GHANA','Ghana','GHA',288),
	(82,'GI','GIBRALTAR','Gibraltar','GIB',292),
	(83,'GR','GREECE','Greece','GRC',300),
	(84,'GL','GREENLAND','Greenland','GRL',304),
	(85,'GD','GRENADA','Grenada','GRD',308),
	(86,'GP','GUADELOUPE','Guadeloupe','GLP',312),
	(87,'GU','GUAM','Guam','GUM',316),
	(88,'GT','GUATEMALA','Guatemala','GTM',320),
	(89,'GN','GUINEA','Guinea','GIN',324),
	(90,'GW','GUINEA-BISSAU','Guinea-Bissau','GNB',624),
	(91,'GY','GUYANA','Guyana','GUY',328),
	(92,'HT','HAITI','Haiti','HTI',332),
	(93,'HM','HEARD ISLAND AND MCDONALD ISLANDS','Heard Island and Mcdonald Islands',NULL,NULL),
	(94,'VA','HOLY SEE (VATICAN CITY STATE)','Holy See (Vatican City State)','VAT',336),
	(95,'HN','HONDURAS','Honduras','HND',340),
	(96,'HK','HONG KONG','Hong Kong','HKG',344),
	(97,'HU','HUNGARY','Hungary','HUN',348),
	(98,'IS','ICELAND','Iceland','ISL',352),
	(99,'IN','INDIA','India','IND',356),
	(100,'ID','INDONESIA','Indonesia','IDN',360),
	(101,'IR','IRAN, ISLAMIC REPUBLIC OF','Iran, Islamic Republic of','IRN',364),
	(102,'IQ','IRAQ','Iraq','IRQ',368),
	(103,'IE','IRELAND','Ireland','IRL',372),
	(104,'IL','ISRAEL','Israel','ISR',376),
	(105,'IT','ITALY','Italy','ITA',380),
	(106,'JM','JAMAICA','Jamaica','JAM',388),
	(107,'JP','JAPAN','Japan','JPN',392),
	(108,'JO','JORDAN','Jordan','JOR',400),
	(109,'KZ','KAZAKHSTAN','Kazakhstan','KAZ',398),
	(110,'KE','KENYA','Kenya','KEN',404),
	(111,'KI','KIRIBATI','Kiribati','KIR',296),
	(112,'KP','KOREA, DEMOCRATIC PEOPLE\'S REPUBLIC OF','Korea, Democratic People\'s Republic of','PRK',408),
	(113,'KR','KOREA, REPUBLIC OF','Korea, Republic of','KOR',410),
	(114,'KW','KUWAIT','Kuwait','KWT',414),
	(115,'KG','KYRGYZSTAN','Kyrgyzstan','KGZ',417),
	(116,'LA','LAO PEOPLE\'S DEMOCRATIC REPUBLIC','Lao People\'s Democratic Republic','LAO',418),
	(117,'LV','LATVIA','Latvia','LVA',428),
	(118,'LB','LEBANON','Lebanon','LBN',422),
	(119,'LS','LESOTHO','Lesotho','LSO',426),
	(120,'LR','LIBERIA','Liberia','LBR',430),
	(121,'LY','LIBYAN ARAB JAMAHIRIYA','Libyan Arab Jamahiriya','LBY',434),
	(122,'LI','LIECHTENSTEIN','Liechtenstein','LIE',438),
	(123,'LT','LITHUANIA','Lithuania','LTU',440),
	(124,'LU','LUXEMBOURG','Luxembourg','LUX',442),
	(125,'MO','MACAO','Macao','MAC',446),
	(126,'MK','MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF','Macedonia, the Former Yugoslav Republic of','MKD',807),
	(127,'MG','MADAGASCAR','Madagascar','MDG',450),
	(128,'MW','MALAWI','Malawi','MWI',454),
	(129,'MY','MALAYSIA','Malaysia','MYS',458),
	(130,'MV','MALDIVES','Maldives','MDV',462),
	(131,'ML','MALI','Mali','MLI',466),
	(132,'MT','MALTA','Malta','MLT',470),
	(133,'MH','MARSHALL ISLANDS','Marshall Islands','MHL',584),
	(134,'MQ','MARTINIQUE','Martinique','MTQ',474),
	(135,'MR','MAURITANIA','Mauritania','MRT',478),
	(136,'MU','MAURITIUS','Mauritius','MUS',480),
	(137,'YT','MAYOTTE','Mayotte',NULL,NULL),
	(138,'MX','MEXICO','Mexico','MEX',484),
	(139,'FM','MICRONESIA, FEDERATED STATES OF','Micronesia, Federated States of','FSM',583),
	(140,'MD','MOLDOVA, REPUBLIC OF','Moldova, Republic of','MDA',498),
	(141,'MC','MONACO','Monaco','MCO',492),
	(142,'MN','MONGOLIA','Mongolia','MNG',496),
	(143,'MS','MONTSERRAT','Montserrat','MSR',500),
	(144,'MA','MOROCCO','Morocco','MAR',504),
	(145,'MZ','MOZAMBIQUE','Mozambique','MOZ',508),
	(146,'MM','MYANMAR','Myanmar','MMR',104),
	(147,'NA','NAMIBIA','Namibia','NAM',516),
	(148,'NR','NAURU','Nauru','NRU',520),
	(149,'NP','NEPAL','Nepal','NPL',524),
	(150,'NL','NETHERLANDS','Netherlands','NLD',528),
	(151,'AN','NETHERLANDS ANTILLES','Netherlands Antilles','ANT',530),
	(152,'NC','NEW CALEDONIA','New Caledonia','NCL',540),
	(153,'NZ','NEW ZEALAND','New Zealand','NZL',554),
	(154,'NI','NICARAGUA','Nicaragua','NIC',558),
	(155,'NE','NIGER','Niger','NER',562),
	(156,'NG','NIGERIA','Nigeria','NGA',566),
	(157,'NU','NIUE','Niue','NIU',570),
	(158,'NF','NORFOLK ISLAND','Norfolk Island','NFK',574),
	(159,'MP','NORTHERN MARIANA ISLANDS','Northern Mariana Islands','MNP',580),
	(160,'NO','NORWAY','Norway','NOR',578),
	(161,'OM','OMAN','Oman','OMN',512),
	(162,'PK','PAKISTAN','Pakistan','PAK',586),
	(163,'PW','PALAU','Palau','PLW',585),
	(164,'PS','PALESTINIAN TERRITORY, OCCUPIED','Palestinian Territory, Occupied',NULL,NULL),
	(165,'PA','PANAMA','Panama','PAN',591),
	(166,'PG','PAPUA NEW GUINEA','Papua New Guinea','PNG',598),
	(167,'PY','PARAGUAY','Paraguay','PRY',600),
	(168,'PE','PERU','Peru','PER',604),
	(169,'PH','PHILIPPINES','Philippines','PHL',608),
	(170,'PN','PITCAIRN','Pitcairn','PCN',612),
	(171,'PL','POLAND','Poland','POL',616),
	(172,'PT','PORTUGAL','Portugal','PRT',620),
	(173,'PR','PUERTO RICO','Puerto Rico','PRI',630),
	(174,'QA','QATAR','Qatar','QAT',634),
	(175,'RE','REUNION','Reunion','REU',638),
	(176,'RO','ROMANIA','Romania','ROM',642),
	(177,'RU','RUSSIAN FEDERATION','Russian Federation','RUS',643),
	(178,'RW','RWANDA','Rwanda','RWA',646),
	(179,'SH','SAINT HELENA','Saint Helena','SHN',654),
	(180,'KN','SAINT KITTS AND NEVIS','Saint Kitts and Nevis','KNA',659),
	(181,'LC','SAINT LUCIA','Saint Lucia','LCA',662),
	(182,'PM','SAINT PIERRE AND MIQUELON','Saint Pierre and Miquelon','SPM',666),
	(183,'VC','SAINT VINCENT AND THE GRENADINES','Saint Vincent and the Grenadines','VCT',670),
	(184,'WS','SAMOA','Samoa','WSM',882),
	(185,'SM','SAN MARINO','San Marino','SMR',674),
	(186,'ST','SAO TOME AND PRINCIPE','Sao Tome and Principe','STP',678),
	(187,'SA','SAUDI ARABIA','Saudi Arabia','SAU',682),
	(188,'SN','SENEGAL','Senegal','SEN',686),
	(189,'CS','SERBIA AND MONTENEGRO','Serbia and Montenegro',NULL,NULL),
	(190,'SC','SEYCHELLES','Seychelles','SYC',690),
	(191,'SL','SIERRA LEONE','Sierra Leone','SLE',694),
	(192,'SG','SINGAPORE','Singapore','SGP',702),
	(193,'SK','SLOVAKIA','Slovakia','SVK',703),
	(194,'SI','SLOVENIA','Slovenia','SVN',705),
	(195,'SB','SOLOMON ISLANDS','Solomon Islands','SLB',90),
	(196,'SO','SOMALIA','Somalia','SOM',706),
	(197,'ZA','SOUTH AFRICA','South Africa','ZAF',710),
	(198,'GS','SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS','South Georgia and the South Sandwich Islands',NULL,NULL),
	(199,'ES','SPAIN','Spain','ESP',724),
	(200,'LK','SRI LANKA','Sri Lanka','LKA',144),
	(201,'SD','SUDAN','Sudan','SDN',736),
	(202,'SR','SURINAME','Suriname','SUR',740),
	(203,'SJ','SVALBARD AND JAN MAYEN','Svalbard and Jan Mayen','SJM',744),
	(204,'SZ','SWAZILAND','Swaziland','SWZ',748),
	(205,'SE','SWEDEN','Sweden','SWE',752),
	(206,'CH','SWITZERLAND','Switzerland','CHE',756),
	(207,'SY','SYRIAN ARAB REPUBLIC','Syrian Arab Republic','SYR',760),
	(208,'TW','TAIWAN, PROVINCE OF CHINA','Taiwan, Province of China','TWN',158),
	(209,'TJ','TAJIKISTAN','Tajikistan','TJK',762),
	(210,'TZ','TANZANIA, UNITED REPUBLIC OF','Tanzania, United Republic of','TZA',834),
	(211,'TH','THAILAND','Thailand','THA',764),
	(212,'TL','TIMOR-LESTE','Timor-Leste',NULL,NULL),
	(213,'TG','TOGO','Togo','TGO',768),
	(214,'TK','TOKELAU','Tokelau','TKL',772),
	(215,'TO','TONGA','Tonga','TON',776),
	(216,'TT','TRINIDAD AND TOBAGO','Trinidad and Tobago','TTO',780),
	(217,'TN','TUNISIA','Tunisia','TUN',788),
	(218,'TR','TURKEY','Turkey','TUR',792),
	(219,'TM','TURKMENISTAN','Turkmenistan','TKM',795),
	(220,'TC','TURKS AND CAICOS ISLANDS','Turks and Caicos Islands','TCA',796),
	(221,'TV','TUVALU','Tuvalu','TUV',798),
	(222,'UG','UGANDA','Uganda','UGA',800),
	(223,'UA','UKRAINE','Ukraine','UKR',804),
	(224,'AE','UNITED ARAB EMIRATES','United Arab Emirates','ARE',784),
	(225,'GB','UNITED KINGDOM','United Kingdom','GBR',826),
	(226,'US','UNITED STATES','United States','USA',840),
	(227,'UM','UNITED STATES MINOR OUTLYING ISLANDS','United States Minor Outlying Islands',NULL,NULL),
	(228,'UY','URUGUAY','Uruguay','URY',858),
	(229,'UZ','UZBEKISTAN','Uzbekistan','UZB',860),
	(230,'VU','VANUATU','Vanuatu','VUT',548),
	(231,'VE','VENEZUELA','Venezuela','VEN',862),
	(232,'VN','VIET NAM','Viet Nam','VNM',704),
	(233,'VG','VIRGIN ISLANDS, BRITISH','Virgin Islands, British','VGB',92),
	(234,'VI','VIRGIN ISLANDS, U.S.','Virgin Islands, U.s.','VIR',850),
	(235,'WF','WALLIS AND FUTUNA','Wallis and Futuna','WLF',876),
	(236,'EH','WESTERN SAHARA','Western Sahara','ESH',732),
	(237,'YE','YEMEN','Yemen','YEM',887),
	(238,'ZM','ZAMBIA','Zambia','ZMB',894),
	(239,'ZW','ZIMBABWE','Zimbabwe','ZWE',716);

/*!40000 ALTER TABLE `country` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table custom_menu
# ------------------------------------------------------------

DROP TABLE IF EXISTS `custom_menu`;

CREATE TABLE `custom_menu` (
  `menu_id` int(11) NOT NULL,
  `agent_uid` int(11) NOT NULL,
  `menu_name` varchar(200) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `menu_url` varchar(200) NOT NULL,
  `order` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `custom_menu` WRITE;
/*!40000 ALTER TABLE `custom_menu` DISABLE KEYS */;

INSERT INTO `custom_menu` (`menu_id`, `agent_uid`, `menu_name`, `parent_id`, `menu_url`, `order`, `status`)
VALUES
	(2,31,'About us',0,'about-us',2,1),
	(4,1,'Selling',0,'selling',5,1),
	(5,1,'Buying ',0,'buying',3,1),
	(6,1,'Contact',0,'contact',4,1),
	(7,1,'Home',0,'home',0,1),
	(8,1,'About we dfsdf',4,'about-we-dfsdf-1',1,1),
	(9,1,'Listings',4,'listings',1,0),
	(10,1,'Listings Map',4,'listings-map',1,1),
	(11,1,'Selling Your Home',4,'selling-your-home',0,1),
	(12,1,'Home Evaluation',4,'home-evaluation',1,1),
	(13,1,'Buying a New Home',5,'buying-a-new-home-1',0,1),
	(14,1,'Mortgage & Tax Calculators',5,'mortgage-tax-calculators',1,1),
	(15,1,'Contact',6,'contact-1',1,1),
	(12,35,'Contact',6,'contact-us',1,1),
	(11,35,'Our Services',5,'our-services',1,1),
	(10,35,'Privicy & Policy',4,'privicy-policy',1,1),
	(9,35,'Products',3,'products',1,1),
	(8,35,'About-us',2,'about',1,1),
	(7,35,'Home',1,'home-us',1,1),
	(6,35,'Contact us',0,'contact',6,1),
	(5,35,'Our Services',0,'our-services',5,1),
	(4,35,'Privicy & Policy',0,'privicy-policy',4,1),
	(3,35,'Products',0,'products',3,1),
	(2,35,'About us',0,'about-us',2,1),
	(1,35,'Home',0,'home',1,1),
	(12,33,'Contact',6,'contact-us',1,1),
	(11,33,'Our Services',5,'our-services',1,1),
	(10,33,'Privicy & Policy',4,'privicy-policy',1,1),
	(9,33,'Products',3,'products',1,1),
	(8,33,'About-us',2,'about',1,1),
	(7,33,'Home',1,'home-us',1,1),
	(6,33,'Contact us',0,'contact',6,1),
	(5,33,'Our Services',0,'our-services',5,1),
	(4,33,'Privicy & Policy',0,'privicy-policy',4,1),
	(3,33,'Products',0,'products',3,1),
	(2,33,'About us',0,'about-us',2,1),
	(1,33,'Home',0,'home',1,1),
	(12,32,'Contact',6,'contact-us',1,1),
	(11,32,'Our Services',5,'our-services',1,1),
	(10,32,'Privicy & Policy',4,'privicy-policy',1,1),
	(9,32,'Products',3,'products',1,1),
	(8,32,'About-us',2,'about',1,1),
	(7,32,'Home',1,'home-1',1,1),
	(6,32,'Contact us',0,'contact',6,1),
	(5,32,'Our Services',0,'our-services',5,1),
	(4,32,'Privicy & Policy',0,'privicy-policy',4,1),
	(3,32,'Products',0,'products',3,1),
	(2,32,'About us',0,'about-us',2,1),
	(1,32,'Home',0,'home',1,1),
	(12,31,'Contact',6,'contact-us',1,1),
	(11,31,'Our Services',5,'our-services',1,1),
	(10,31,'Privicy & Policy',4,'privicy-policy',1,1),
	(9,31,'Products',3,'products',1,1),
	(8,31,'About-us',2,'about',1,1),
	(7,31,'Home',1,'home-us',1,1),
	(6,31,'Contact us',0,'contact',6,1),
	(5,31,'Our Services',0,'our-services',5,1),
	(3,31,'Products',0,'products',3,1),
	(4,31,'Privicy & Policy',0,'privicy-policy',4,1),
	(1,31,'Home',0,'home',1,1),
	(1,36,'Home',0,'home',1,1),
	(2,36,'About us',0,'about-us',2,1),
	(3,36,'Products',0,'products',3,1),
	(4,36,'Privicy & Policy',0,'privicy-policy',4,1),
	(5,36,'Our Services',0,'our-services',5,1),
	(6,36,'Contact us',0,'contact',6,1),
	(7,36,'Home',1,'home-us',1,1),
	(8,36,'About-us',2,'about',1,1),
	(9,36,'Products',3,'products',1,1),
	(10,36,'Privicy & Policy',4,'privicy-policy',1,1),
	(11,36,'Our Services',5,'our-services',1,1),
	(12,36,'Contact',6,'contact-us',1,1),
	(1,37,'Home',0,'home',1,1),
	(2,37,'About us',0,'about-us',2,1),
	(3,37,'Products',0,'products',3,1),
	(4,37,'Privicy & Policy',0,'privicy-policy',4,1),
	(5,37,'Our Services',0,'our-services',5,1),
	(6,37,'Contact us',0,'contact',6,1),
	(7,37,'Home',1,'home-us',1,1),
	(8,37,'About-us',2,'about',1,1),
	(9,37,'Products',3,'products',1,1),
	(10,37,'Privicy & Policy',4,'privicy-policy',1,1),
	(11,37,'Our Services',5,'our-services',1,1),
	(12,37,'Contact',6,'contact-us',1,1),
	(1,38,'Home',0,'home',1,1),
	(2,38,'About us',0,'about-us',2,1),
	(3,38,'Products',0,'products',3,1),
	(4,38,'Privicy & Policy',0,'privicy-policy',4,1),
	(5,38,'Our Services',0,'our-services',5,1),
	(6,38,'Contact us',0,'contact',6,1),
	(7,38,'Home',1,'home-us',1,1),
	(8,38,'About-us',2,'about',1,1),
	(9,38,'Products',3,'products',1,1),
	(10,38,'Privicy & Policy',4,'privicy-policy',1,1),
	(11,38,'Our Services',5,'our-services',1,1),
	(12,38,'Contact',6,'contact-us',1,1),
	(1,39,'Home',0,'home',1,1),
	(2,39,'About us',0,'about-us',2,1),
	(3,39,'Products',0,'products',3,1),
	(4,39,'Privicy & Policy',0,'privicy-policy',4,1),
	(5,39,'Our Services',0,'our-services',5,1),
	(6,39,'Contact us',0,'contact',6,1),
	(7,39,'Home',1,'home-us',1,1),
	(8,39,'About-us',2,'about',1,1),
	(9,39,'Products',3,'products',1,1),
	(10,39,'Privicy & Policy',4,'privicy-policy',1,1),
	(11,39,'Our Services',5,'our-services',1,1),
	(12,39,'Contact',6,'contact-us',1,1),
	(1,40,'Home',0,'home',1,1),
	(2,40,'About us',0,'about-us',2,1),
	(3,40,'Products',0,'products',3,1),
	(4,40,'Privicy & Policy',0,'privicy-policy',4,1),
	(5,40,'Our Services',0,'our-services',5,1),
	(6,40,'Contact us',0,'contact',6,1),
	(7,40,'Home',1,'home-us',1,1),
	(8,40,'About-us',2,'about',1,1),
	(9,40,'Products',3,'products',1,1),
	(10,40,'Privicy & Policy',4,'privicy-policy',1,1),
	(11,40,'Our Services',5,'our-services',1,1),
	(12,40,'Contact',6,'contact-us',1,1),
	(1,41,'Home',0,'home',1,1),
	(2,41,'About us',0,'about-us',2,1),
	(3,41,'Products',0,'products',3,1),
	(4,41,'Privicy & Policy',0,'privicy-policy',4,1),
	(5,41,'Our Services',0,'our-services',5,1),
	(6,41,'Contact us',0,'contact',6,1),
	(7,41,'Home',1,'home-us',1,1),
	(8,41,'About-us',2,'about',1,1),
	(9,41,'Products',3,'products',1,1),
	(10,41,'Privicy & Policy',4,'privicy-policy',1,1),
	(11,41,'Our Services',5,'our-services',1,1),
	(12,41,'Contact',6,'contact-us',1,1),
	(1,42,'Home',0,'home',1,1),
	(2,42,'About us',0,'about-us',2,1),
	(3,42,'Products',0,'products',3,1),
	(4,42,'Privicy & Policy',0,'privicy-policy',4,1),
	(5,42,'Our Services',0,'our-services',5,1),
	(6,42,'Contact us',0,'contact',6,1),
	(7,42,'Home',1,'home-us',1,1),
	(8,42,'About-us',2,'about',1,1),
	(9,42,'Products',3,'products',1,1),
	(10,42,'Privicy & Policy',4,'privicy-policy',1,1),
	(11,42,'Our Services',5,'our-services',1,1),
	(12,42,'Contact',6,'contact-us',1,1),
	(1,43,'Home',0,'home',1,1),
	(2,43,'About us',0,'about-us',2,1),
	(3,43,'Products',0,'products',3,1),
	(4,43,'Privicy & Policy',0,'privicy-policy',4,1),
	(5,43,'Our Services',0,'our-services',5,1),
	(6,43,'Contact us',0,'contact',6,1),
	(7,43,'Home',1,'home-us',1,1),
	(8,43,'About-us',2,'about',1,1),
	(9,43,'Products',3,'products',1,1),
	(10,43,'Privicy & Policy',4,'privicy-policy',1,1),
	(11,43,'Our Services',5,'our-services',1,1),
	(12,43,'Contact',6,'contact-us',1,1),
	(1,44,'Home',0,'home',1,1),
	(2,44,'About us',0,'about-us',2,1),
	(3,44,'Products',0,'products',3,1),
	(4,44,'Privicy & Policy',0,'privicy-policy',4,1),
	(5,44,'Our Services',0,'our-services',5,1),
	(6,44,'Contact us',0,'contact',6,1),
	(7,44,'Home',1,'home-us',1,1),
	(8,44,'About-us',2,'about',1,1),
	(9,44,'Products',3,'products',1,1),
	(10,44,'Privicy & Policy',4,'privicy-policy',1,1),
	(11,44,'Our Services',5,'our-services',1,1),
	(12,44,'Contact',6,'contact-us',1,1),
	(1,3,'Home',0,'home',1,1),
	(2,3,'About us',0,'about-us',2,1),
	(3,3,'Products',0,'products',3,1),
	(4,3,'Privicy & Policy',0,'privicy-policy',4,1),
	(5,3,'Our Services',0,'our-services',5,1),
	(6,3,'Contact us',0,'contact',6,1),
	(7,3,'Home',1,'home-us',1,1),
	(8,3,'About-us',4,'about-us-1',1,1),
	(9,3,'Products',3,'products-2',1,1),
	(10,3,'Privicy & Policy',4,'privicy-policy',1,1),
	(11,3,'Our Services',5,'our-services',1,1),
	(12,3,'Contact',6,'contact-us',1,1),
	(1,0,'test',0,'test',1,1),
	(2,0,'test',0,'test-1',2,1),
	(2,73,'About us',0,'about-us',2,1),
	(1,73,'Home',0,'home',1,1),
	(13,3,'Our Policy',3,'our-policy',13,1),
	(3,73,'Products',0,'products',3,1),
	(4,73,'Privicy & Policy',0,'privicy-policy',4,1),
	(5,73,'Our Services',0,'our-services',5,1),
	(6,73,'Contact us',0,'contact',6,1),
	(7,73,'Home',1,'home-us',1,1),
	(8,73,'About-us',2,'about',1,1),
	(9,73,'Products',3,'products',1,1),
	(10,73,'Privicy & Policy',4,'privicy-policy',1,1),
	(11,73,'Our Services',5,'our-services',1,1),
	(12,73,'Contact',6,'contact-us',1,1);

/*!40000 ALTER TABLE `custom_menu` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table evaluation
# ------------------------------------------------------------

DROP TABLE IF EXISTS `evaluation`;

CREATE TABLE `evaluation` (
  `evaluation_id` int(11) NOT NULL AUTO_INCREMENT,
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
  PRIMARY KEY (`evaluation_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



# Dump of table evaluation_status
# ------------------------------------------------------------

DROP TABLE IF EXISTS `evaluation_status`;

CREATE TABLE `evaluation_status` (
  `evaluation_id` int(11) NOT NULL AUTO_INCREMENT,
  `agent_uid` int(11) DEFAULT NULL,
  `custom_title` varchar(200) DEFAULT NULL,
  `custom_details` text,
  `evaluation_status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`evaluation_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `evaluation_status` WRITE;
/*!40000 ALTER TABLE `evaluation_status` DISABLE KEYS */;

INSERT INTO `evaluation_status` (`evaluation_id`, `agent_uid`, `custom_title`, `custom_details`, `evaluation_status`)
VALUES
	(1,1506,NULL,NULL,1),
	(2,1534,NULL,NULL,1),
	(3,1544,NULL,NULL,1),
	(4,1550,NULL,NULL,1),
	(5,1575,NULL,NULL,1),
	(6,1586,NULL,NULL,1),
	(7,1593,NULL,NULL,1),
	(8,1604,NULL,NULL,1),
	(9,1607,NULL,NULL,1),
	(10,1611,NULL,NULL,1),
	(11,1613,NULL,NULL,1),
	(12,1617,NULL,NULL,1),
	(13,1620,NULL,NULL,1),
	(14,1623,NULL,NULL,1),
	(15,1636,NULL,NULL,1),
	(16,1637,NULL,NULL,1),
	(17,1646,NULL,NULL,1),
	(18,1652,NULL,NULL,1),
	(19,1659,NULL,NULL,1),
	(20,1655,NULL,NULL,1),
	(21,1674,NULL,NULL,1),
	(22,1688,NULL,NULL,1),
	(23,1695,NULL,NULL,1),
	(24,1703,NULL,NULL,1),
	(25,1706,NULL,NULL,1),
	(26,1705,NULL,NULL,1),
	(27,1711,NULL,NULL,1),
	(28,1712,NULL,NULL,1),
	(29,1719,NULL,NULL,1),
	(30,1722,NULL,NULL,1),
	(31,1103,NULL,NULL,1),
	(32,1105,NULL,NULL,1),
	(33,1101,NULL,NULL,1),
	(34,1102,NULL,NULL,1),
	(35,1104,NULL,NULL,1),
	(36,1819,NULL,NULL,1),
	(37,1820,NULL,NULL,1),
	(38,1835,NULL,NULL,1),
	(39,1009,NULL,NULL,1),
	(40,1893,NULL,NULL,1),
	(41,1894,NULL,NULL,1),
	(42,1006,NULL,NULL,1),
	(43,1111,NULL,NULL,1),
	(44,1115,NULL,NULL,1),
	(45,1112,NULL,NULL,1),
	(46,1114,NULL,NULL,1),
	(47,1113,NULL,NULL,1),
	(48,1007,NULL,NULL,1),
	(49,1008,NULL,NULL,1),
	(50,1010,NULL,NULL,1),
	(51,1902,NULL,NULL,1),
	(52,1908,NULL,NULL,1),
	(53,1905,NULL,NULL,1),
	(54,1930,NULL,NULL,1),
	(55,1931,NULL,NULL,1),
	(56,1953,NULL,NULL,1),
	(57,1955,NULL,NULL,1),
	(59,2000,NULL,NULL,1),
	(60,2007,NULL,NULL,1),
	(61,2015,NULL,NULL,1),
	(62,2020,NULL,NULL,1),
	(63,1334,NULL,NULL,1),
	(64,1333,NULL,NULL,1),
	(66,2043,NULL,NULL,1),
	(67,2063,NULL,NULL,1),
	(68,2064,NULL,NULL,1),
	(70,2067,NULL,NULL,1),
	(71,2065,NULL,NULL,1),
	(72,2069,NULL,NULL,1),
	(73,2074,NULL,NULL,1),
	(74,2072,NULL,NULL,1),
	(75,2073,NULL,NULL,1),
	(77,2076,NULL,NULL,1),
	(78,2077,NULL,NULL,1),
	(79,2085,NULL,NULL,1),
	(80,2097,NULL,NULL,1),
	(81,2107,NULL,NULL,1),
	(82,2109,NULL,NULL,1),
	(83,1120,NULL,NULL,1),
	(84,1118,NULL,NULL,1),
	(85,1116,NULL,NULL,1),
	(86,1119,NULL,NULL,1),
	(87,2117,NULL,NULL,1),
	(88,2118,NULL,NULL,1),
	(89,1013,NULL,NULL,1),
	(90,1012,NULL,NULL,1),
	(91,1015,NULL,NULL,1),
	(92,1011,NULL,NULL,1),
	(93,1014,NULL,NULL,1),
	(94,2136,NULL,NULL,1),
	(95,2141,NULL,NULL,1),
	(96,2148,NULL,NULL,1),
	(97,2147,NULL,NULL,1),
	(98,2153,NULL,NULL,1),
	(99,2150,NULL,NULL,1),
	(100,2155,NULL,NULL,1),
	(101,2168,NULL,NULL,1),
	(102,2167,NULL,NULL,1),
	(103,2166,NULL,NULL,1),
	(104,1130,NULL,NULL,1),
	(105,1126,NULL,NULL,1),
	(106,1129,NULL,NULL,1),
	(107,1128,NULL,NULL,1),
	(108,1127,NULL,NULL,1),
	(109,2170,NULL,NULL,1),
	(110,2172,NULL,NULL,1),
	(111,1208,NULL,NULL,1),
	(112,1206,NULL,NULL,1),
	(113,1212,NULL,NULL,1),
	(114,1399,NULL,NULL,1),
	(115,1426,NULL,NULL,1),
	(116,1134,NULL,NULL,1),
	(117,1131,NULL,NULL,1),
	(118,1135,NULL,NULL,1),
	(119,1132,NULL,NULL,1),
	(120,1453,NULL,NULL,1),
	(121,1146,NULL,NULL,1),
	(122,1153,NULL,NULL,1),
	(123,1455,NULL,NULL,1),
	(124,1167,NULL,NULL,1),
	(125,1175,NULL,NULL,1),
	(126,1174,NULL,NULL,1),
	(127,1219,NULL,NULL,1),
	(128,1486,NULL,NULL,1),
	(129,1181,NULL,NULL,1),
	(130,1185,NULL,NULL,1),
	(131,1217,NULL,NULL,1),
	(132,1188,NULL,NULL,1),
	(133,1187,NULL,NULL,1),
	(134,1190,NULL,NULL,1),
	(135,1498,NULL,NULL,1),
	(136,1200,NULL,NULL,1),
	(137,1196,NULL,NULL,1),
	(138,1199,NULL,NULL,1),
	(139,1221,NULL,NULL,1),
	(140,1222,NULL,NULL,1),
	(141,1018,NULL,NULL,1),
	(142,1017,NULL,NULL,1),
	(143,1020,NULL,NULL,1),
	(144,1019,'  Fill out this form for your complimentary HOME EVALUATION','',2),
	(145,1230,NULL,NULL,1),
	(146,1227,NULL,NULL,1),
	(147,1016,NULL,NULL,1),
	(148,1234,NULL,NULL,1),
	(149,1235,NULL,NULL,1),
	(150,1233,NULL,NULL,1),
	(151,1239,NULL,NULL,1),
	(152,1238,NULL,NULL,1),
	(153,1237,NULL,NULL,1),
	(154,1236,NULL,NULL,1),
	(155,1246,NULL,NULL,1),
	(156,1249,NULL,NULL,1),
	(157,1253,NULL,NULL,1),
	(158,1255,NULL,NULL,1),
	(159,1256,NULL,NULL,1),
	(160,1260,NULL,NULL,1),
	(161,1261,NULL,NULL,1),
	(162,1265,NULL,NULL,1),
	(163,1263,NULL,NULL,1),
	(164,1262,NULL,NULL,1),
	(165,1264,NULL,NULL,1),
	(166,1266,NULL,NULL,1),
	(167,1267,NULL,NULL,1),
	(168,1023,NULL,NULL,1),
	(169,1024,NULL,NULL,1),
	(170,1025,NULL,NULL,1),
	(171,1022,NULL,NULL,1),
	(172,1021,NULL,NULL,1),
	(173,1029,NULL,NULL,1),
	(174,1026,NULL,NULL,1),
	(175,1028,NULL,NULL,1),
	(176,1030,NULL,NULL,1),
	(177,1027,NULL,NULL,1),
	(178,1035,NULL,NULL,1),
	(179,1034,NULL,NULL,1),
	(180,1032,NULL,NULL,1),
	(181,1033,NULL,NULL,1),
	(182,1031,NULL,NULL,1),
	(183,1040,NULL,NULL,1),
	(184,1036,NULL,NULL,1),
	(185,1038,NULL,NULL,1),
	(186,1037,NULL,NULL,1),
	(187,1039,NULL,NULL,1),
	(188,1043,NULL,NULL,1),
	(189,1045,' ','',2),
	(190,1042,NULL,NULL,1),
	(191,1041,NULL,NULL,1),
	(192,1044,NULL,NULL,1),
	(193,1046,NULL,NULL,1),
	(194,1050,NULL,NULL,1),
	(195,1049,NULL,NULL,1),
	(196,1048,NULL,NULL,1),
	(197,1047,NULL,NULL,1),
	(198,1051,NULL,NULL,1),
	(199,1052,NULL,NULL,1),
	(200,1054,NULL,NULL,1),
	(201,1053,NULL,NULL,1),
	(202,1055,NULL,NULL,1),
	(203,1091,NULL,NULL,1),
	(204,1092,NULL,NULL,1),
	(205,1094,NULL,NULL,1),
	(206,1095,NULL,NULL,1),
	(207,1093,NULL,NULL,1),
	(208,1072,NULL,NULL,1),
	(209,1074,NULL,NULL,1),
	(210,1075,NULL,NULL,1),
	(211,1071,NULL,NULL,1),
	(212,1073,NULL,NULL,1),
	(213,1083,NULL,NULL,1),
	(214,1085,NULL,NULL,1),
	(215,1082,NULL,NULL,1),
	(216,1081,NULL,NULL,1),
	(217,1084,NULL,NULL,1),
	(219,1096,NULL,NULL,1),
	(220,1099,NULL,NULL,1),
	(221,1098,NULL,NULL,1),
	(222,1100,NULL,NULL,1),
	(223,1079,NULL,NULL,1),
	(224,1077,NULL,NULL,1),
	(225,1078,NULL,NULL,1),
	(226,1080,NULL,NULL,1),
	(227,1076,NULL,NULL,1),
	(228,1089,NULL,NULL,1),
	(229,1087,NULL,NULL,1),
	(230,1086,NULL,NULL,1),
	(231,1090,NULL,NULL,1),
	(232,1088,NULL,NULL,1),
	(233,1058,NULL,NULL,1),
	(234,1057,NULL,NULL,1),
	(235,1060,NULL,NULL,1),
	(236,1056,NULL,NULL,1),
	(237,1059,NULL,NULL,1),
	(238,1061,NULL,NULL,1),
	(239,1062,NULL,NULL,1),
	(240,1064,NULL,NULL,1),
	(241,1063,NULL,NULL,1),
	(242,1065,NULL,NULL,1),
	(243,1068,NULL,NULL,1),
	(244,1066,NULL,NULL,1),
	(245,1070,NULL,NULL,1),
	(246,1069,NULL,NULL,1),
	(247,1067,NULL,NULL,1),
	(248,1003,NULL,NULL,1),
	(249,1002,NULL,NULL,1),
	(250,1004,NULL,NULL,1),
	(251,1005,NULL,NULL,1),
	(252,1000,NULL,NULL,1),
	(253,1001,NULL,NULL,1),
	(254,2186,NULL,NULL,1),
	(255,999,NULL,NULL,1),
	(256,1124,NULL,NULL,1),
	(257,1357,NULL,NULL,1),
	(258,1503,NULL,NULL,1),
	(259,1844,NULL,NULL,1),
	(260,2131,NULL,NULL,1),
	(261,1137,NULL,NULL,1),
	(262,1107,NULL,NULL,1),
	(263,1123,NULL,NULL,1),
	(264,2101,NULL,NULL,1),
	(265,1205,NULL,NULL,1),
	(266,2103,NULL,NULL,1),
	(267,1138,NULL,NULL,1),
	(268,1163,NULL,NULL,1),
	(269,1108,NULL,NULL,1),
	(270,1201,NULL,NULL,1),
	(271,1136,NULL,NULL,1),
	(272,2100,NULL,NULL,1),
	(273,1109,NULL,NULL,1),
	(274,1528,NULL,NULL,1),
	(275,1122,NULL,NULL,1),
	(276,1356,NULL,NULL,1),
	(277,1125,NULL,NULL,1),
	(278,1204,NULL,NULL,1),
	(279,1106,NULL,NULL,1),
	(280,1110,NULL,NULL,1),
	(281,1242,NULL,NULL,1),
	(282,2102,NULL,NULL,1),
	(284,2173,NULL,NULL,1),
	(285,2174,NULL,NULL,1),
	(286,2175,NULL,NULL,1),
	(287,2176,NULL,NULL,1),
	(288,2177,NULL,NULL,1),
	(289,2178,NULL,NULL,1),
	(291,2180,NULL,NULL,1),
	(292,2181,NULL,NULL,1),
	(293,2182,NULL,NULL,1),
	(294,2183,NULL,NULL,1),
	(297,2188,NULL,NULL,1);

/*!40000 ALTER TABLE `evaluation_status` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table footercta
# ------------------------------------------------------------

DROP TABLE IF EXISTS `footercta`;

CREATE TABLE `footercta` (
  `footercta_id` int(10) NOT NULL AUTO_INCREMENT,
  `agent_uid` int(11) NOT NULL,
  `footercta_bg_color` varchar(30) DEFAULT NULL,
  `footercta_font_color` varchar(30) DEFAULT NULL,
  `footercta_pipe_color` varchar(30) DEFAULT NULL,
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
  `link_status1` int(2) DEFAULT '1',
  `link_status2` int(2) DEFAULT '1',
  `link_status3` int(2) DEFAULT '1',
  `link_status4` int(2) DEFAULT '1',
  `link_status5` int(2) DEFAULT '1',
  `link_status6` int(2) DEFAULT '1',
  `footercta_status` int(2) DEFAULT '0',
  PRIMARY KEY (`footercta_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `footercta` WRITE;
/*!40000 ALTER TABLE `footercta` DISABLE KEYS */;

INSERT INTO `footercta` (`footercta_id`, `agent_uid`, `footercta_bg_color`, `footercta_font_color`, `footercta_pipe_color`, `image_upload1`, `image_upload1_path`, `image_rollover_upload1`, `image_rollover_upload1_path`, `tag_title1`, `file_upload1`, `file_upload1_path`, `urlpath1`, `image_upload2`, `image_upload2_path`, `image_rollover_upload2`, `image_rollover_upload2_path`, `tag_title2`, `file_upload2`, `file_upload2_path`, `urlpath2`, `image_upload3`, `image_upload3_path`, `image_rollover_upload3`, `image_rollover_upload3_path`, `tag_title3`, `file_upload3`, `file_upload3_path`, `urlpath3`, `image_upload4`, `image_upload4_path`, `image_rollover_upload4`, `image_rollover_upload4_path`, `tag_title4`, `file_upload4`, `file_upload4_path`, `urlpath4`, `image_upload5`, `image_upload5_path`, `image_rollover_upload5`, `image_rollover_upload5_path`, `tag_title5`, `file_upload5`, `file_upload5_path`, `urlpath5`, `image_upload6`, `image_upload6_path`, `image_rollover_upload6`, `image_rollover_upload6_path`, `tag_title6`, `file_upload6`, `file_upload6_path`, `urlpath6`, `link_status1`, `link_status2`, `link_status3`, `link_status4`, `link_status5`, `link_status6`, `footercta_status`)
VALUES
	(1,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,1,1,1,1,1,0);

/*!40000 ALTER TABLE `footercta` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table group_shops
# ------------------------------------------------------------

DROP TABLE IF EXISTS `group_shops`;

CREATE TABLE `group_shops` (
  `group_brokerages_id` int(10) NOT NULL AUTO_INCREMENT,
  `group_title` varchar(200) DEFAULT NULL,
  `group_value` text,
  PRIMARY KEY (`group_brokerages_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `group_shops` WRITE;
/*!40000 ALTER TABLE `group_shops` DISABLE KEYS */;

INSERT INTO `group_shops` (`group_brokerages_id`, `group_title`, `group_value`)
VALUES
	(1,'Test Group','a:3:{i:0;s:4:\"1060\";i:1;s:4:\"1061\";i:2;s:4:\"1058\";}');

/*!40000 ALTER TABLE `group_shops` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table guide_content
# ------------------------------------------------------------

DROP TABLE IF EXISTS `guide_content`;

CREATE TABLE `guide_content` (
  `guide_content_id` int(10) NOT NULL AUTO_INCREMENT,
  `guide_type` int(10) DEFAULT NULL,
  `guide_content_name` varchar(200) DEFAULT NULL,
  `guidecontent` text NOT NULL,
  `status` int(2) DEFAULT '1',
  PRIMARY KEY (`guide_content_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `guide_content` WRITE;
/*!40000 ALTER TABLE `guide_content` DISABLE KEYS */;

INSERT INTO `guide_content` (`guide_content_id`, `guide_type`, `guide_content_name`, `guidecontent`, `status`)
VALUES
	(1,52,'Search Products & Suppliers','search products &amp; suppliers',1),
	(2,52,'Send Inquiry','send inquiry',1),
	(3,52,'Post Buy Offer','post buy offer...',1),
	(4,52,'Trade Safely','trade safely',1),
	(5,52,'Search Audited Suppliers','search audited suppliers...',1),
	(6,51,'Browser & Select','learn everything you need to jump in and start selling right now &mdash; from  setting up an account, to listing your item, getting paid, and shipping.  learn everything you need to jump in and start selling right now &mdash; from  setting up an account, to listing your item, getting paid, and shipping.  learn everything you need to jump in and start selling right now &mdash; from  setting up an account, to listing your item, getting paid, and shipping.  learn everything you need to jump in and start selling right now &mdash; from  setting up an account, to listing your item, getting paid, and shipping.',1),
	(7,51,'Login or Register','',1),
	(8,51,'Review Your Order','if you would like a copy of any of our latest catalogues, please  														tick the appropriate box(es) and fill in your details below. we\'ll post these  														out to you within a few days of the date that they are published. please note,  														we only post out to uk addresses.if you would like a copy of any of our latest catalogues, please  														tick the appropriate box(es) and fill in your details below. we\'ll post these  														out to you within a few days of the date that they are published. please note,  														we only post out to uk addresses.if you would like a copy of any of our latest catalogues, please  														tick the appropriate box(es) and fill in your details below. we\'ll post these  														out to you within a few days of the date that they are published. please note,  														we only post out to uk addresses.',1),
	(9,51,'Payment & Shipment','payment &amp; shipment',1);

/*!40000 ALTER TABLE `guide_content` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table keywords
# ------------------------------------------------------------

DROP TABLE IF EXISTS `keywords`;

CREATE TABLE `keywords` (
  `meta_description` text,
  `keywords_id` int(10) NOT NULL AUTO_INCREMENT,
  `agent_uid` int(10) DEFAULT NULL,
  `title_tag` text,
  `meta_keywords` text,
  `keywords_status` varchar(2) DEFAULT '1',
  PRIMARY KEY (`keywords_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `keywords` WRITE;
/*!40000 ALTER TABLE `keywords` DISABLE KEYS */;

INSERT INTO `keywords` (`meta_description`, `keywords_id`, `agent_uid`, `title_tag`, `meta_keywords`, `keywords_status`)
VALUES
	('Meta tags have never been a guaranteed way to gain a top ranking on crawler-based search engines. Today, the most valuable feature they offer the web site owner is the ability to control to some degree how their web pages are described by some search engines. They also offer the ability to prevent pages from being indexed at all. This page explores these and other meta tag-related features in more depth.',1,2209,'Test-words','Test keywords,Test keywords,Test keywords,Test keywords,Test keywords,Test keywords,Test keywords,Test keywords,Test keywords,Test keywords,Test keywords,Test keywords,Test keywords,Test keywords,Test keywords,Test keywords,','1'),
	('',2,2214,'','','1');

/*!40000 ALTER TABLE `keywords` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table keywords_page
# ------------------------------------------------------------

DROP TABLE IF EXISTS `keywords_page`;

CREATE TABLE `keywords_page` (
  `keywords_page_id` int(10) NOT NULL AUTO_INCREMENT,
  `menu_id` int(10) DEFAULT NULL,
  `agent_uid` int(10) DEFAULT NULL,
  `title_tag` text,
  `meta_description` text,
  `meta_keywords` text,
  `alternate_status` int(2) DEFAULT NULL,
  PRIMARY KEY (`keywords_page_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `keywords_page` WRITE;
/*!40000 ALTER TABLE `keywords_page` DISABLE KEYS */;

INSERT INTO `keywords_page` (`keywords_page_id`, `menu_id`, `agent_uid`, `title_tag`, `meta_description`, `meta_keywords`, `alternate_status`)
VALUES
	(1,7,2209,'Test-Shafiq','Meta tags have never been a guaranteed way to gain a top ranking on crawler-based search engines. Today, the most valuable feature they offer the web site owner is the ability to control to some degree how their web pages are described by some search engines. They also offer the ability to prevent pages from being indexed at all. This page explores these and other meta tag-related features in more depth.','Test-Shafiq,Test-Shafiq,Test-Shafiq,Test-Shafiq,Test-Shafiq,Test-Shafiq,Test-Shafiq',NULL),
	(2,1,2214,'This is a test title','Description','Keywords',NULL),
	(3,7,2214,'This is a title tag for home','This is a description','This,is,a,keywords,tag',NULL),
	(9,8,1,'test new x','test new x','test new x',NULL),
	(8,8,1,'test ','test','test',NULL),
	(10,13,3,'sm','bm','pp',NULL),
	(12,8,3,'fvdfg','dfgdfg','dfgdfg',NULL);

/*!40000 ALTER TABLE `keywords_page` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table listing_meta_value
# ------------------------------------------------------------

DROP TABLE IF EXISTS `listing_meta_value`;

CREATE TABLE `listing_meta_value` (
  `product_template_clothing_id` int(10) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `gender` int(3) DEFAULT '0',
  `material` varchar(250) DEFAULT NULL,
  `technics` varchar(250) DEFAULT NULL,
  `washing_instructions` varchar(250) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `listing_meta_value` WRITE;
/*!40000 ALTER TABLE `listing_meta_value` DISABLE KEYS */;

INSERT INTO `listing_meta_value` (`product_template_clothing_id`, `product_id`, `gender`, `material`, `technics`, `washing_instructions`)
VALUES
	(0,20,0,'','',''),
	(0,21,0,'xxx vv','bbb vv','Machine Wash pp');

/*!40000 ALTER TABLE `listing_meta_value` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table listing_notifications
# ------------------------------------------------------------

DROP TABLE IF EXISTS `listing_notifications`;

CREATE TABLE `listing_notifications` (
  `product_id` int(10) DEFAULT '0',
  `notification_wishlist` tinyint(1) DEFAULT '0',
  `notification_reminder` tinyint(1) DEFAULT '0',
  `notification_region` tinyint(1) DEFAULT '0',
  `notification_pricedrop` tinyint(1) DEFAULT '0',
  `notification_comments` tinyint(1) DEFAULT '0',
  `notification_enough_info` tinyint(1) DEFAULT '0',
  `notification_contactus` tinyint(1) DEFAULT '0',
  `share_facebook` tinyint(1) NOT NULL DEFAULT '0',
  `compare_another` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `listing_notifications` WRITE;
/*!40000 ALTER TABLE `listing_notifications` DISABLE KEYS */;

INSERT INTO `listing_notifications` (`product_id`, `notification_wishlist`, `notification_reminder`, `notification_region`, `notification_pricedrop`, `notification_comments`, `notification_enough_info`, `notification_contactus`, `share_facebook`, `compare_another`)
VALUES
	(30,0,0,0,0,0,0,0,0,0),
	(31,1,1,1,1,1,1,1,0,0),
	(32,1,1,1,1,1,1,1,1,1),
	(33,0,0,0,0,0,0,0,0,0),
	(35,0,1,1,1,1,0,0,1,1),
	(44,1,1,1,1,1,1,1,1,1),
	(41,0,0,0,0,0,0,0,0,0),
	(45,0,0,0,0,0,0,0,0,0),
	(46,0,0,0,0,0,0,0,0,0),
	(47,1,1,1,1,1,1,1,1,1),
	(48,0,0,0,0,1,0,0,1,0),
	(49,0,0,0,0,0,0,0,0,0),
	(50,1,1,1,1,1,1,1,1,1),
	(51,0,0,0,0,0,0,0,0,0),
	(52,0,0,0,0,1,0,0,0,0),
	(53,0,0,0,0,0,0,0,0,0),
	(54,0,0,0,0,0,0,0,0,0),
	(55,0,0,0,0,0,0,0,0,0),
	(56,0,0,0,0,0,0,0,0,0),
	(57,1,0,0,0,1,0,1,1,0),
	(58,0,0,0,0,0,0,0,0,0),
	(59,0,0,0,0,0,0,0,0,0),
	(60,0,0,0,0,0,0,0,0,0),
	(61,0,0,0,0,0,0,0,0,0),
	(62,0,0,0,0,0,0,0,0,0),
	(63,0,0,0,0,0,0,0,0,0),
	(64,0,0,0,0,0,0,0,0,0),
	(68,0,0,0,0,0,0,0,0,0),
	(67,0,0,0,0,0,0,0,0,0),
	(69,0,0,0,0,0,0,0,0,0),
	(70,0,0,0,0,0,0,0,0,0),
	(71,0,0,0,0,0,0,0,0,0),
	(72,0,0,0,0,0,0,0,0,0),
	(73,0,0,0,1,1,0,0,1,0),
	(74,0,0,0,0,0,0,0,0,0),
	(75,0,0,0,0,0,0,0,0,0);

/*!40000 ALTER TABLE `listing_notifications` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table listing_product
# ------------------------------------------------------------

DROP TABLE IF EXISTS `listing_product`;

CREATE TABLE `listing_product` (
  `product_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `archive` tinyint(1) DEFAULT '0',
  `product_code` varchar(100) DEFAULT NULL,
  `agent_uid` int(10) DEFAULT NULL,
  `product_name` varchar(200) DEFAULT NULL,
  `slug` varchar(200) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `discount_price` decimal(10,2) DEFAULT '0.00',
  `quantity` int(10) DEFAULT NULL,
  `quantity_type` tinyint(10) NOT NULL DEFAULT '0',
  `made_in` varchar(100) DEFAULT NULL,
  `color` text,
  `model_no` varchar(20) DEFAULT NULL,
  `brand_name` varchar(200) DEFAULT NULL,
  `sell_offer` tinytext,
  `certification` varchar(200) DEFAULT NULL,
  `description` text,
  `created` int(10) DEFAULT NULL,
  `updated` int(10) DEFAULT NULL,
  `expired` int(10) DEFAULT NULL,
  `ordering` mediumint(5) DEFAULT '0',
  `status` int(3) DEFAULT '1',
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `listing_product` WRITE;
/*!40000 ALTER TABLE `listing_product` DISABLE KEYS */;

INSERT INTO `listing_product` (`product_id`, `archive`, `product_code`, `agent_uid`, `product_name`, `slug`, `price`, `discount_price`, `quantity`, `quantity_type`, `made_in`, `color`, `model_no`, `brand_name`, `sell_offer`, `certification`, `description`, `created`, `updated`, `expired`, `ordering`, `status`)
VALUES
	(30,0,'EP-627399',3,'Atlantic salmon fillets are marinated in','atlantic-salmon-fillets-are-marinated-in',450.00,400.00,100,0,NULL,NULL,NULL,'Chillis',NULL,NULL,'',1315158819,NULL,0,0,0),
	(31,0,'EP-408820',3,'Cantonese Steamed Cod with Ginger and Soy',NULL,520.00,480.00,0,0,NULL,NULL,NULL,'Chillis',NULL,NULL,'LORM is a public association bringing together deafblind people, their families, friends, and others concerned with deafblindness and the problems associated with it. At present, LORM has about 200 members and maintains contact with about 350 deafblind people. It offers help and assistance to deafblind people of all age groups as well as to others who come into contact with them or who take an interest in this disability.',1315159248,NULL,0,0,1),
	(32,0,'EP-334757',3,'Chicken Burger','Chicken-Burger',125.00,100.00,10,68,NULL,NULL,NULL,'Cats Eye',NULL,NULL,'',1315314595,NULL,2012,0,1),
	(35,0,'EP-967870',3,'xx vv','xx',200.00,100.00,2,0,NULL,NULL,NULL,'Cats Eye',NULL,NULL,'Test',1320160340,NULL,0,0,1),
	(44,0,'EP-840332',1,'Arrong Panjabi','arrong-panjabi',0.00,0.00,0,0,NULL,NULL,NULL,'0',NULL,NULL,'test',1360916694,NULL,0,0,1),
	(45,0,'ep-830519',3,'cvxcvxc','cvxcvxc',NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1369374056,NULL,NULL,0,NULL),
	(46,0,'ep-747332',3,'cvxcvxc','cvxcvxc-1',NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1369374116,NULL,NULL,0,NULL),
	(47,0,'ep-994809',3,'asdadasdas','asdadasdas',0.00,0.00,0,0,NULL,NULL,NULL,'0',NULL,NULL,'xvdfsgdfgdfgdfgd',1369374162,NULL,0,0,1),
	(48,0,'ep-575895',3,'xzczxczx','xzczxczx',200.00,0.00,20,68,NULL,NULL,NULL,'',NULL,NULL,'fddfgdfg',1369374262,NULL,15,0,1),
	(49,0,'ep-595488',3,'xzczxczx','xzczxczx-1',NULL,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1369374313,NULL,NULL,0,NULL),
	(50,0,'ep-304341',3,'xzczxczx','xzczxczx-2',0.00,0.00,0,0,NULL,NULL,NULL,'0',NULL,NULL,'DEscription',1369374334,NULL,0,0,NULL),
	(51,0,'ep-582808',3,'Atlantic salmon fillets new','atlantic-salmon-fillets-are',0.00,0.00,0,0,NULL,NULL,NULL,'0',NULL,NULL,'',1369392795,NULL,0,0,NULL),
	(52,0,'ep-995869',3,'Rolex Watch','rolex-watch',0.00,0.00,1,69,NULL,NULL,NULL,'',NULL,NULL,'',1369393985,NULL,0,0,NULL),
	(53,0,'ep-2361',3,NULL,'',0.00,0.00,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1370760347,NULL,NULL,0,NULL),
	(54,0,'ep-6671',3,NULL,'',0.00,0.00,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1370760411,NULL,NULL,0,NULL),
	(55,0,'ep-7087',3,'Test Handicraft','test-handicraft',0.00,0.00,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1370760583,NULL,NULL,0,NULL),
	(56,0,'ep-5609',3,'Test Handicraft','test-handicraft-1',0.00,0.00,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1370760600,NULL,NULL,0,NULL),
	(57,0,'ep-1847',1,'Dental Clinic','dental-clinic',0.00,0.00,0,0,NULL,NULL,NULL,'0',NULL,NULL,'dfsdf sdf sdfsdfsfdsd',1371872041,NULL,0,0,1),
	(58,0,'ep-0025',19,'Lehanga','lehanga',0.00,0.00,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1373460444,NULL,NULL,0,NULL),
	(59,0,'ep-7877',3,'New Jamdani Sharee','new-jamdani-sharee',0.00,0.00,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1373681689,NULL,NULL,0,NULL),
	(60,0,'ep-5504',3,'Muslin Katan','muslin-katan',0.00,0.00,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1373682664,NULL,NULL,0,NULL),
	(61,0,'ep-1256',3,'fbfdgdfgdfg','fbfdgdfgdfg',0.00,0.00,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1373682846,NULL,NULL,0,NULL),
	(62,0,'ep-1841',3,'efdfgdfgfdg','efdfgdfgfdg',0.00,0.00,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1373682908,NULL,NULL,0,NULL),
	(63,0,'ep-1129',3,'New Dahaka','new-dahaka',0.00,0.00,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1373821658,NULL,NULL,0,NULL),
	(64,0,'ep-4531',54,'Neotac','neotac',0.00,0.00,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1373857260,NULL,NULL,0,NULL),
	(67,0,'ep-4991',49,'vcvbcvb','vcvbcvb',0.00,0.00,1,69,NULL,NULL,NULL,'','a:3:{i:0;s:1:\"2\";i:1;s:1:\"3\";i:2;s:1:\"4\";}',NULL,'',1375889473,NULL,0,0,NULL),
	(68,0,'73-6061',73,'sdsdsdss','sdsdsdss',0.00,0.00,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1376707963,NULL,NULL,0,NULL),
	(69,0,'99-7091',99,'Majakcali','majakcali',12000.00,11000.00,10,69,NULL,NULL,NULL,'xyz','',NULL,'',1377855434,NULL,60,0,1),
	(70,0,'60-5700',60,'test new product','test-new-product',0.00,0.00,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1377871931,NULL,NULL,0,NULL),
	(71,0,'19-0217',19,'Ancora dress','ancora-dress',0.00,0.00,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1377872305,NULL,NULL,0,NULL),
	(72,0,'19-4443',19,'Test New Product','test-new-product-1',20.00,18.00,2,68,NULL,NULL,NULL,'','a:4:{i:0;s:1:\"1\";i:1;s:1:\"2\";i:2;s:1:\"3\";i:3;s:1:\"4\";}',NULL,'',1378751092,NULL,30,0,NULL),
	(73,0,'99-5115',99,'New Lehenga','new-lehenga',20.00,10.00,5,69,NULL,NULL,NULL,'','a:4:{i:0;s:1:\"1\";i:1;s:1:\"2\";i:2;s:1:\"3\";i:3;s:1:\"4\";}',NULL,'',1378834930,NULL,30,0,1),
	(74,0,'11-5797',11,'Baby Set Jeans Baby Set Jeans','baby-set-jeans',50.00,40.00,5,69,NULL,NULL,NULL,'','a:4:{i:0;s:1:\"1\";i:1;s:1:\"2\";i:2;s:1:\"3\";i:3;s:1:\"4\";}',NULL,'',1378836021,NULL,30,0,1),
	(75,0,'99-8635',99,'Travell Ladies Bags','travell-ladies-bags',120.00,0.00,5,69,NULL,NULL,NULL,'','a:3:{i:0;s:1:\"1\";i:1;s:1:\"2\";i:2;s:1:\"3\";}',NULL,'',1380350091,NULL,30,0,1);

/*!40000 ALTER TABLE `listing_product` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table listing_product_category
# ------------------------------------------------------------

DROP TABLE IF EXISTS `listing_product_category`;

CREATE TABLE `listing_product_category` (
  `product_id` bigint(20) DEFAULT NULL,
  `agent_uid` int(10) NOT NULL,
  `catid_label_1` int(10) DEFAULT '0',
  `catid_label_2` int(10) DEFAULT '0',
  `catid_label_3` int(10) DEFAULT '0',
  `catid_label_4` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `listing_product_category` WRITE;
/*!40000 ALTER TABLE `listing_product_category` DISABLE KEYS */;

INSERT INTO `listing_product_category` (`product_id`, `agent_uid`, `catid_label_1`, `catid_label_2`, `catid_label_3`, `catid_label_4`)
VALUES
	(35,3,7,11,251,0),
	(45,3,6,9,0,0),
	(46,3,6,9,0,0),
	(47,3,1,120,163,0),
	(48,3,1,4,0,0),
	(49,3,1,4,0,0),
	(50,3,1,4,153,0),
	(51,3,6,5,0,0),
	(52,3,1,120,0,0),
	(30,3,1,4,151,0),
	(53,3,9,NULL,0,NULL),
	(54,3,52,NULL,0,NULL),
	(55,3,6,9,0,NULL),
	(56,3,6,9,0,NULL),
	(44,1,1,3,594,0),
	(57,1,1,0,0,0),
	(58,19,1,2,0,0),
	(59,3,1,120,0,NULL),
	(60,3,1,120,0,NULL),
	(61,3,6,9,0,NULL),
	(62,3,588,589,0,NULL),
	(63,3,74,78,0,0),
	(64,54,74,75,0,NULL),
	(68,73,74,87,603,0),
	(67,49,74,75,0,0),
	(69,99,1,3,0,NULL),
	(70,60,74,79,0,NULL),
	(71,19,1,4,0,NULL),
	(72,19,1,2,0,NULL),
	(73,99,1,3,0,NULL),
	(74,11,1,4,0,NULL),
	(75,99,7,11,256,0);

/*!40000 ALTER TABLE `listing_product_category` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table listing_product_gallery
# ------------------------------------------------------------

DROP TABLE IF EXISTS `listing_product_gallery`;

CREATE TABLE `listing_product_gallery` (
  `product_gallery_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `agent_uid` bigint(20) DEFAULT '0',
  `product_id` bigint(20) NOT NULL,
  `image_large_path` text,
  PRIMARY KEY (`product_gallery_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `listing_product_gallery` WRITE;
/*!40000 ALTER TABLE `listing_product_gallery` DISABLE KEYS */;

INSERT INTO `listing_product_gallery` (`product_gallery_id`, `agent_uid`, `product_id`, `image_large_path`)
VALUES
	(82,3,56,'uploads/shop/3/56/gallery/p17sk7f39v1bd7bnkj20v231n7v7.JPG'),
	(81,3,56,'uploads/shop/3/56/gallery/p17sk7f39v183ihh01hto55vbv36.JPG'),
	(80,3,56,'uploads/shop/3/56/gallery/p17sk7f39u1ccffq0e4sfe29885.JPG'),
	(79,3,56,'uploads/shop/3/56/gallery/p17sk7f39u10b31qei1dv1niv14274.JPG'),
	(99,3,59,'uploads/shop/3/59/gallery/p17vat2scvag61lm1r5u4s2g515.jpg'),
	(98,3,59,'uploads/shop/3/59/gallery/p17vat2scvvede3c1m5lopg3394.jpg'),
	(97,3,30,'uploads/shop/3/30/gallery/p17vasov7t9inf5ttq58nbhi4.jpg'),
	(92,19,58,'uploads/shop/19/58/gallery/p17v9k6a9rral1ekv106h1pld1kdg4.jpg'),
	(105,3,62,'uploads/shop/3/62/gallery/p17vauqiorg5l127916u4ed7e4t6.jpg'),
	(106,3,62,'uploads/shop/3/62/gallery/p17vauqp9l1r641o5r3gjvbl177a7.jpg'),
	(107,3,62,'uploads/shop/3/62/gallery/p17vauqp9l1vhu1g4a1ugkfjkmnq8.jpg'),
	(108,3,62,'uploads/shop/3/62/gallery/p17vaur01ahglojb8lkgfmnp69.jpg'),
	(109,3,62,'uploads/shop/3/62/gallery/p17vaur01bfgc2le188p1qu114tla.jpg'),
	(122,73,68,'uploads/shop/73/68/gallery/p18258m3tsc1kmpg1u71r2b1ckm7.jpg'),
	(121,73,68,'uploads/shop/73/68/gallery/p18258m3ts15l51a4513ke1as21hl86.jpg'),
	(120,73,68,'uploads/shop/73/68/gallery/p18258m3tsqv11soq1b8m52p1mit5.jpg'),
	(119,73,68,'uploads/shop/73/68/gallery/p18258m3tss5o19r11g8ou0q1ksg4.jpg');

/*!40000 ALTER TABLE `listing_product_gallery` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table listing_product_image
# ------------------------------------------------------------

DROP TABLE IF EXISTS `listing_product_image`;

CREATE TABLE `listing_product_image` (
  `product_image_id` int(10) NOT NULL AUTO_INCREMENT,
  `agent_uid` int(10) DEFAULT '0',
  `product_id` int(10) NOT NULL,
  `show_default` int(1) DEFAULT '0',
  `image_name` varchar(200) DEFAULT NULL,
  `image_small_path` text,
  `image_thumb_path` text,
  `image_large_path` text,
  `image_square_path` text,
  `delete_path` text,
  PRIMARY KEY (`product_image_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `listing_product_image` WRITE;
/*!40000 ALTER TABLE `listing_product_image` DISABLE KEYS */;

INSERT INTO `listing_product_image` (`product_image_id`, `agent_uid`, `product_id`, `show_default`, `image_name`, `image_small_path`, `image_thumb_path`, `image_large_path`, `image_square_path`, `delete_path`)
VALUES
	(16,1,44,0,'9f24d64478e5d76110338dc837affdb9.jpg','/uploads/shop/1/products/small/9f24d64478e5d76110338dc837affdb9.jpg','/uploads/shop/1/products/thumb/9f24d64478e5d76110338dc837affdb9.jpg','/uploads/shop/1/products/large/9f24d64478e5d76110338dc837affdb9.jpg','/uploads/shop/1/products/square/9f24d64478e5d76110338dc837affdb9.jpg','uploads/shop/1/products/44'),
	(15,1,44,0,'eac0f09f1a44e6f52158b9b13d308bff.jpg','/uploads/shop/1/products/small/eac0f09f1a44e6f52158b9b13d308bff.jpg','/uploads/shop/1/products/thumb/eac0f09f1a44e6f52158b9b13d308bff.jpg','/uploads/shop/1/products/large/eac0f09f1a44e6f52158b9b13d308bff.jpg','/uploads/shop/1/products/square/eac0f09f1a44e6f52158b9b13d308bff.jpg','uploads/shop/1/products/44'),
	(14,1,44,0,'12df0eed511dad7dcf01a3c0f4419935.jpg','/uploads/shop/1/products/small/12df0eed511dad7dcf01a3c0f4419935.jpg','/uploads/shop/1/products/thumb/12df0eed511dad7dcf01a3c0f4419935.jpg','/uploads/shop/1/products/large/12df0eed511dad7dcf01a3c0f4419935.jpg','/uploads/shop/1/products/square/12df0eed511dad7dcf01a3c0f4419935.jpg','uploads/shop/1/products/44'),
	(13,1,44,1,'1273f37fe59c74ee2d3e05afe2127e15.jpg','/uploads/shop/1/products/small/1273f37fe59c74ee2d3e05afe2127e15.jpg','/uploads/shop/1/products/thumb/1273f37fe59c74ee2d3e05afe2127e15.jpg','/uploads/shop/1/products/large/1273f37fe59c74ee2d3e05afe2127e15.jpg','/uploads/shop/1/products/square/1273f37fe59c74ee2d3e05afe2127e15.jpg','uploads/shop/1/products/44'),
	(17,1,44,0,'b1066c6e1bb4ae0a5b64ea4cf452cc6b.jpg','/uploads/shop/1/products/small/b1066c6e1bb4ae0a5b64ea4cf452cc6b.jpg','/uploads/shop/1/products/thumb/b1066c6e1bb4ae0a5b64ea4cf452cc6b.jpg','/uploads/shop/1/products/large/b1066c6e1bb4ae0a5b64ea4cf452cc6b.jpg','/uploads/shop/1/products/square/b1066c6e1bb4ae0a5b64ea4cf452cc6b.jpg','uploads/shop/1/products/44'),
	(18,1,44,0,'9d8435c403d635634a2b00dee1aed52b.jpg','/uploads/shop/1/products/small/9d8435c403d635634a2b00dee1aed52b.jpg','/uploads/shop/1/products/thumb/9d8435c403d635634a2b00dee1aed52b.jpg','/uploads/shop/1/products/large/9d8435c403d635634a2b00dee1aed52b.jpg','/uploads/shop/1/products/square/9d8435c403d635634a2b00dee1aed52b.jpg','uploads/shop/1/products/44'),
	(39,3,50,1,'6e3c90f08d79110eabd9de00b93b937d.JPG','uploads/shop/3/50/products/thumb/6e3c90f08d79110eabd9de00b93b937d.JPG','uploads/shop/3/50/products/small/6e3c90f08d79110eabd9de00b93b937d.JPG','uploads/shop/3/50/products/large/6e3c90f08d79110eabd9de00b93b937d.JPG','uploads/shop/3/50/products/square/6e3c90f08d79110eabd9de00b93b937d.JPG','uploads/shop/3/50/products'),
	(40,3,50,0,'22fad5a7807948ea6ff90970d153b400.JPG','uploads/shop/3/50/products/thumb/22fad5a7807948ea6ff90970d153b400.JPG','uploads/shop/3/50/products/small/22fad5a7807948ea6ff90970d153b400.JPG','uploads/shop/3/50/products/large/22fad5a7807948ea6ff90970d153b400.JPG','uploads/shop/3/50/products/square/22fad5a7807948ea6ff90970d153b400.JPG','uploads/shop/3/50/products'),
	(53,3,56,0,'d36e4634b60cc8edf58cec6452cfd3b0.JPG','uploads/shop/3/56/products/thumb/d36e4634b60cc8edf58cec6452cfd3b0.JPG','uploads/shop/3/56/products/small/d36e4634b60cc8edf58cec6452cfd3b0.JPG','uploads/shop/3/56/products/large/d36e4634b60cc8edf58cec6452cfd3b0.JPG','uploads/shop/3/56/products/square/d36e4634b60cc8edf58cec6452cfd3b0.JPG','uploads/shop/3/56/products'),
	(57,73,68,1,'09a24ae12de2c3eb1e94a7891f63ac84.jpg','uploads/shop/73/68/products/thumb/09a24ae12de2c3eb1e94a7891f63ac84.jpg','uploads/shop/73/68/products/small/09a24ae12de2c3eb1e94a7891f63ac84.jpg','uploads/shop/73/68/products/large/09a24ae12de2c3eb1e94a7891f63ac84.jpg','uploads/shop/73/68/products/square/09a24ae12de2c3eb1e94a7891f63ac84.jpg','uploads/shop/73/68/products'),
	(56,19,58,0,'b6486581b3018001dc5750695662a5aa.jpg','uploads/shop/19/58/products/thumb/b6486581b3018001dc5750695662a5aa.jpg','uploads/shop/19/58/products/small/b6486581b3018001dc5750695662a5aa.jpg','uploads/shop/19/58/products/large/b6486581b3018001dc5750695662a5aa.jpg','uploads/shop/19/58/products/square/b6486581b3018001dc5750695662a5aa.jpg','uploads/shop/19/58/products'),
	(58,73,68,0,'a0a67d7dfdfaace4088c1fd4c37603b3.jpg','uploads/shop/73/68/products/thumb/a0a67d7dfdfaace4088c1fd4c37603b3.jpg','uploads/shop/73/68/products/small/a0a67d7dfdfaace4088c1fd4c37603b3.jpg','uploads/shop/73/68/products/large/a0a67d7dfdfaace4088c1fd4c37603b3.jpg','uploads/shop/73/68/products/square/a0a67d7dfdfaace4088c1fd4c37603b3.jpg','uploads/shop/73/68/products'),
	(59,73,68,0,'362fd64e8c69f21a9ebcf4f37fca5afa.jpg','uploads/shop/73/68/products/thumb/362fd64e8c69f21a9ebcf4f37fca5afa.jpg','uploads/shop/73/68/products/small/362fd64e8c69f21a9ebcf4f37fca5afa.jpg','uploads/shop/73/68/products/large/362fd64e8c69f21a9ebcf4f37fca5afa.jpg','uploads/shop/73/68/products/square/362fd64e8c69f21a9ebcf4f37fca5afa.jpg','uploads/shop/73/68/products'),
	(69,19,71,1,'55850366549f3d60172a49e9610e62c5.jpg','uploads/shop/19/71/products/thumb/55850366549f3d60172a49e9610e62c5.jpg','uploads/shop/19/71/products/small/55850366549f3d60172a49e9610e62c5.jpg','uploads/shop/19/71/products/large/55850366549f3d60172a49e9610e62c5.jpg','uploads/shop/19/71/products/square/55850366549f3d60172a49e9610e62c5.jpg','uploads/shop/19/71/products'),
	(67,60,70,0,'cb4ce24f7d1ab58a33044e8427170f76.jpg','uploads/shop/60/70/products/thumb/cb4ce24f7d1ab58a33044e8427170f76.jpg','uploads/shop/60/70/products/small/cb4ce24f7d1ab58a33044e8427170f76.jpg','uploads/shop/60/70/products/large/cb4ce24f7d1ab58a33044e8427170f76.jpg','uploads/shop/60/70/products/square/cb4ce24f7d1ab58a33044e8427170f76.jpg','uploads/shop/60/70/products'),
	(65,60,70,1,'15373655a33fe277440cabc28e45e9a2.jpg','uploads/shop/60/70/products/thumb/15373655a33fe277440cabc28e45e9a2.jpg','uploads/shop/60/70/products/small/15373655a33fe277440cabc28e45e9a2.jpg','uploads/shop/60/70/products/large/15373655a33fe277440cabc28e45e9a2.jpg','uploads/shop/60/70/products/square/15373655a33fe277440cabc28e45e9a2.jpg','uploads/shop/60/70/products'),
	(70,19,71,0,'2c5d38da13c85896f6877fc464978ea0.jpg','uploads/shop/19/71/products/thumb/2c5d38da13c85896f6877fc464978ea0.jpg','uploads/shop/19/71/products/small/2c5d38da13c85896f6877fc464978ea0.jpg','uploads/shop/19/71/products/large/2c5d38da13c85896f6877fc464978ea0.jpg','uploads/shop/19/71/products/square/2c5d38da13c85896f6877fc464978ea0.jpg','uploads/shop/19/71/products'),
	(71,99,69,1,'a6b14a0374880b2849c304a2c02c003f.jpg','uploads/shop/99/69/products/thumb/a6b14a0374880b2849c304a2c02c003f.jpg','uploads/shop/99/69/products/small/a6b14a0374880b2849c304a2c02c003f.jpg','uploads/shop/99/69/products/large/a6b14a0374880b2849c304a2c02c003f.jpg','uploads/shop/99/69/products/square/a6b14a0374880b2849c304a2c02c003f.jpg','uploads/shop/99/69/products'),
	(72,19,72,1,'f216576cfc4f04f329fb4905c9fb7a9a.jpg','uploads/shop/19/72/products/thumb/f216576cfc4f04f329fb4905c9fb7a9a.jpg','uploads/shop/19/72/products/small/f216576cfc4f04f329fb4905c9fb7a9a.jpg','uploads/shop/19/72/products/large/f216576cfc4f04f329fb4905c9fb7a9a.jpg','uploads/shop/19/72/products/square/f216576cfc4f04f329fb4905c9fb7a9a.jpg','uploads/shop/19/72/products'),
	(73,99,73,1,'165803ff59407e07f994653636c770a4.jpg','uploads/shop/99/73/products/thumb/165803ff59407e07f994653636c770a4.jpg','uploads/shop/99/73/products/small/165803ff59407e07f994653636c770a4.jpg','uploads/shop/99/73/products/large/165803ff59407e07f994653636c770a4.jpg','uploads/shop/99/73/products/square/165803ff59407e07f994653636c770a4.jpg','uploads/shop/99/73/products'),
	(74,11,74,1,'74da2694c927386c481f9bcd17dd9e5e.jpg','uploads/shop/11/74/products/thumb/74da2694c927386c481f9bcd17dd9e5e.jpg','uploads/shop/11/74/products/small/74da2694c927386c481f9bcd17dd9e5e.jpg','uploads/shop/11/74/products/large/74da2694c927386c481f9bcd17dd9e5e.jpg','uploads/shop/11/74/products/square/74da2694c927386c481f9bcd17dd9e5e.jpg','uploads/shop/11/74/products'),
	(75,99,75,1,'90667ce1141aabafc16919be706a3abb.jpg','uploads/shop/99/75/products/thumb/90667ce1141aabafc16919be706a3abb.jpg','uploads/shop/99/75/products/small/90667ce1141aabafc16919be706a3abb.jpg','uploads/shop/99/75/products/large/90667ce1141aabafc16919be706a3abb.jpg','uploads/shop/99/75/products/square/90667ce1141aabafc16919be706a3abb.jpg','uploads/shop/99/75/products');

/*!40000 ALTER TABLE `listing_product_image` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table listing_selloffer
# ------------------------------------------------------------

DROP TABLE IF EXISTS `listing_selloffer`;

CREATE TABLE `listing_selloffer` (
  `product_id` int(10) DEFAULT NULL,
  `sell_offer_id` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



# Dump of table listing_specific_value
# ------------------------------------------------------------

DROP TABLE IF EXISTS `listing_specific_value`;

CREATE TABLE `listing_specific_value` (
  `additional_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `product_id` int(10) DEFAULT NULL,
  `agent_uid` int(10) DEFAULT NULL,
  `label_name` varchar(250) DEFAULT NULL,
  `meta_value` text,
  `extra_field` tinyint(1) DEFAULT '0',
  `ordering` tinyint(2) DEFAULT '0',
  PRIMARY KEY (`additional_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `listing_specific_value` WRITE;
/*!40000 ALTER TABLE `listing_specific_value` DISABLE KEYS */;

INSERT INTO `listing_specific_value` (`additional_id`, `product_id`, `agent_uid`, `label_name`, `meta_value`, `extra_field`, `ordering`)
VALUES
	(80,1,41,'Texas1 label','Texas1',0,0),
	(81,1,41,'Texas2 label','Texas2',0,0),
	(82,1,41,'Texas3 label','Texas3',0,0),
	(83,1,41,'Product-4','',0,0),
	(84,1,41,'Texas 4 label','Texas4',1,0),
	(85,1,41,'dsasd','sadsadas',1,0),
	(236,50,3,'Product-4','Arizona',0,0),
	(235,50,3,'Product -3','Arkansas',0,0),
	(234,50,3,'Product -2','Delaware',0,0),
	(233,50,3,'Product -1','South Dakota',0,0),
	(237,32,3,'czxc','xzczxc',1,0),
	(238,32,3,'xzczxc','xzczxc',1,0),
	(259,58,19,'my custom label','my custom label',1,0),
	(258,58,19,'Product-4','',0,0),
	(257,58,19,'Product -3','Tennessee',0,0),
	(255,58,19,'Product -1','New Mexico',0,0),
	(256,58,19,'Product -2','New Hampshire',0,0),
	(260,58,19,'werwer','erwer',1,0),
	(261,58,19,'werwer','vbvbb',1,0),
	(262,64,54,'test1','test1',1,0),
	(263,64,54,'test2','test2',1,0);

/*!40000 ALTER TABLE `listing_specific_value` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table listing_status
# ------------------------------------------------------------

DROP TABLE IF EXISTS `listing_status`;

CREATE TABLE `listing_status` (
  `product_id` bigint(20) NOT NULL,
  `special_offer` tinyint(2) DEFAULT '0',
  `feature_list` tinyint(2) DEFAULT '0',
  `show_home` tinyint(2) DEFAULT '0',
  `discount_list` tinyint(2) DEFAULT '0',
  `product_status` tinyint(2) DEFAULT '1',
  `guarantee_id` tinyint(2) DEFAULT '0',
  `warrinty_id` tinyint(2) DEFAULT '0',
  `warrinty_time` tinyint(2) DEFAULT '0',
  `condition_id` tinyint(2) DEFAULT '0',
  `sell_offer_id` tinyint(2) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `listing_status` WRITE;
/*!40000 ALTER TABLE `listing_status` DISABLE KEYS */;

INSERT INTO `listing_status` (`product_id`, `special_offer`, `feature_list`, `show_home`, `discount_list`, `product_status`, `guarantee_id`, `warrinty_id`, `warrinty_time`, `condition_id`, `sell_offer_id`)
VALUES
	(1,1,1,1,1,0,29,24,0,0,NULL),
	(4,1,1,1,1,1,28,24,0,0,NULL),
	(5,0,0,0,0,1,0,0,0,0,NULL),
	(6,1,1,1,1,1,28,24,0,31,NULL),
	(7,0,0,0,0,1,0,0,0,0,NULL),
	(8,0,0,0,0,1,0,0,0,0,NULL),
	(9,0,0,0,0,1,0,0,0,0,NULL),
	(10,0,0,0,0,1,0,0,0,0,NULL),
	(11,0,0,0,0,1,0,0,0,0,NULL),
	(12,0,0,0,0,1,0,0,0,0,NULL),
	(13,0,0,0,0,1,0,0,0,0,NULL),
	(14,0,0,0,0,1,0,0,0,31,NULL),
	(15,0,0,0,0,1,0,0,0,0,NULL),
	(16,0,0,0,0,1,0,0,0,0,NULL),
	(17,0,0,0,0,1,0,0,0,0,NULL),
	(18,0,0,0,0,1,0,0,0,0,NULL),
	(19,0,0,0,0,1,0,0,0,0,NULL),
	(20,0,0,0,0,33,0,0,0,0,NULL),
	(21,1,1,1,1,34,0,0,0,31,NULL),
	(22,0,0,0,0,1,0,0,0,0,NULL),
	(23,0,0,0,0,1,0,0,0,0,NULL),
	(24,0,0,0,0,1,0,0,0,0,NULL),
	(25,0,0,0,0,1,0,0,0,0,NULL),
	(26,0,0,0,0,1,0,0,0,0,NULL),
	(27,0,0,0,0,1,0,0,0,0,NULL),
	(28,1,1,1,1,33,0,0,0,30,NULL),
	(29,0,0,0,0,1,0,0,0,0,NULL),
	(30,0,0,0,0,33,0,0,0,0,NULL),
	(31,1,1,1,1,33,0,0,0,0,1),
	(32,0,0,0,0,34,0,0,0,0,1),
	(33,0,0,0,0,1,0,0,0,0,0),
	(35,1,1,1,1,34,0,0,0,0,1),
	(44,0,0,0,0,0,0,0,0,0,0),
	(41,0,0,0,0,34,0,0,0,0,0),
	(45,0,0,0,0,1,0,0,0,0,0),
	(46,0,0,0,0,1,0,0,0,0,0),
	(47,0,0,0,0,0,0,0,0,0,0),
	(48,1,1,1,1,34,0,0,0,0,1),
	(49,0,0,0,0,1,0,0,0,0,0),
	(50,0,0,0,0,0,0,0,0,NULL,0),
	(51,0,0,0,0,0,0,0,0,0,0),
	(52,0,1,1,0,33,0,0,0,0,0),
	(53,0,0,0,0,1,0,0,0,0,0),
	(54,0,0,0,0,1,0,0,0,0,0),
	(55,0,0,0,0,1,0,0,0,0,0),
	(56,0,0,0,0,1,0,0,0,0,0),
	(57,0,0,0,0,0,0,0,0,0,0),
	(58,0,0,0,0,1,0,0,0,0,0),
	(59,0,0,0,0,1,0,0,0,0,0),
	(60,0,0,0,0,1,0,0,0,0,0),
	(61,0,0,0,0,1,0,0,0,0,0),
	(62,0,0,0,0,1,0,0,0,0,0),
	(63,0,0,0,0,1,0,0,0,0,0),
	(64,0,0,0,0,1,0,0,0,0,0),
	(68,0,0,0,0,1,0,0,0,0,0),
	(67,0,0,0,0,33,0,0,0,0,0),
	(69,0,0,0,0,33,0,0,0,0,0),
	(70,0,0,0,0,1,0,0,0,0,0),
	(71,0,0,0,0,1,0,0,0,0,0),
	(72,1,1,1,1,33,0,0,0,0,0),
	(73,1,1,1,1,33,0,0,0,0,0),
	(74,1,1,1,1,34,0,0,0,0,0),
	(75,1,1,1,1,33,0,0,0,0,0);

/*!40000 ALTER TABLE `listing_status` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table logo_image
# ------------------------------------------------------------

DROP TABLE IF EXISTS `logo_image`;

CREATE TABLE `logo_image` (
  `agent_uid` bigint(20) NOT NULL,
  `logo_height` int(10) NOT NULL,
  `logo_width` int(10) NOT NULL,
  `logo_name` text NOT NULL,
  `logo_path` text NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



# Dump of table mall_advertisment
# ------------------------------------------------------------

DROP TABLE IF EXISTS `mall_advertisment`;

CREATE TABLE `mall_advertisment` (
  `mall_advertisment_id` int(10) NOT NULL AUTO_INCREMENT,
  `mall_id` int(10) DEFAULT NULL,
  `agent_uid` int(10) DEFAULT NULL,
  `position_id` int(10) DEFAULT NULL,
  `website_title` varchar(200) DEFAULT NULL,
  `website` varchar(200) DEFAULT NULL,
  `image_name` varchar(250) DEFAULT NULL,
  `image_path` text,
  `image_crop_path` text,
  `delete_image_crop_path` text,
  `delete_image_path` text,
  `created_date` int(10) DEFAULT NULL,
  `status` int(1) DEFAULT '1',
  PRIMARY KEY (`mall_advertisment_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `mall_advertisment` WRITE;
/*!40000 ALTER TABLE `mall_advertisment` DISABLE KEYS */;

INSERT INTO `mall_advertisment` (`mall_advertisment_id`, `mall_id`, `agent_uid`, `position_id`, `website_title`, `website`, `image_name`, `image_path`, `image_crop_path`, `delete_image_crop_path`, `delete_image_path`, `created_date`, `status`)
VALUES
	(1,5,11,64,'xx pp','xxx','74148370040.jpg','http://localhost/admin-ebdshop/uploads/mall/5/advertisment/74148370040.jpg','http://localhost/admin-ebdshop/uploads/mall/5/advertisment/crop/74148370040.jpg','uploads/mall/5/advertisment/crop/74148370040.jpg','uploads/mall/5/advertisment/74148370040.jpg',1302886527,1),
	(2,5,12,63,'dfd','dfdf','883IGP0477.jpg','http://localhost/admin-ebdshop/uploads/mall/5/advertisment/883IGP0477.jpg','http://localhost/admin-ebdshop/uploads/mall/5/advertisment/crop/883IGP0477.jpg','uploads/mall/5/advertisment/crop/883IGP0477.jpg','uploads/mall/5/advertisment/883IGP0477.jpg',1302890905,1),
	(3,5,12,63,'dfd','dfdf','96913.jpg','http://localhost/admin-ebdshop/uploads/mall/5/advertisment/96913.jpg','http://localhost/admin-ebdshop/uploads/mall/5/advertisment/crop/96913.jpg','uploads/mall/5/advertisment/crop/96913.jpg','uploads/mall/5/advertisment/96913.jpg',1302890874,1);

/*!40000 ALTER TABLE `mall_advertisment` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table mall_advertisment_position
# ------------------------------------------------------------

DROP TABLE IF EXISTS `mall_advertisment_position`;

CREATE TABLE `mall_advertisment_position` (
  `tpp_id` int(11) NOT NULL AUTO_INCREMENT,
  `mall_id` int(10) DEFAULT NULL,
  `mall_advertisment_id` int(11) NOT NULL,
  `x` int(11) DEFAULT '0',
  `y` int(11) NOT NULL DEFAULT '0',
  `w` int(11) NOT NULL DEFAULT '0',
  `h` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`tpp_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `mall_advertisment_position` WRITE;
/*!40000 ALTER TABLE `mall_advertisment_position` DISABLE KEYS */;

INSERT INTO `mall_advertisment_position` (`tpp_id`, `mall_id`, `mall_advertisment_id`, `x`, `y`, `w`, `h`)
VALUES
	(1,5,2,150,0,300,200),
	(3,5,2,150,0,300,200),
	(4,5,2,150,0,300,200),
	(5,5,2,150,0,300,200),
	(6,5,2,150,0,300,200),
	(7,5,2,150,0,300,200);

/*!40000 ALTER TABLE `mall_advertisment_position` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table mall_content
# ------------------------------------------------------------

DROP TABLE IF EXISTS `mall_content`;

CREATE TABLE `mall_content` (
  `mall_content_id` int(10) NOT NULL AUTO_INCREMENT,
  `mall_uid` int(10) NOT NULL,
  `mall_content_name` varchar(200) DEFAULT NULL,
  `mallcontent` text NOT NULL,
  `status` int(2) DEFAULT '1',
  PRIMARY KEY (`mall_content_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `mall_content` WRITE;
/*!40000 ALTER TABLE `mall_content` DISABLE KEYS */;

INSERT INTO `mall_content` (`mall_content_id`, `mall_uid`, `mall_content_name`, `mallcontent`, `status`)
VALUES
	(1,1,'dvsds','sdfsdf',1),
	(2,1,'xxxxx','xxxx',1),
	(3,1,'xxxxx','xxxx',1),
	(4,1,'Test','Test...',1);

/*!40000 ALTER TABLE `mall_content` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table mall_team_photo_position
# ------------------------------------------------------------

DROP TABLE IF EXISTS `mall_team_photo_position`;

CREATE TABLE `mall_team_photo_position` (
  `tpp_id` int(11) NOT NULL AUTO_INCREMENT,
  `mall_team_uid` int(11) NOT NULL,
  `x` int(11) NOT NULL,
  `y` int(11) NOT NULL,
  `w` int(11) NOT NULL,
  `h` int(11) NOT NULL,
  PRIMARY KEY (`tpp_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `mall_team_photo_position` WRITE;
/*!40000 ALTER TABLE `mall_team_photo_position` DISABLE KEYS */;

INSERT INTO `mall_team_photo_position` (`tpp_id`, `mall_team_uid`, `x`, `y`, `w`, `h`)
VALUES
	(1,2,81,1,248,332),
	(2,2,81,1,248,332);

/*!40000 ALTER TABLE `mall_team_photo_position` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table mall_teams_details
# ------------------------------------------------------------

DROP TABLE IF EXISTS `mall_teams_details`;

CREATE TABLE `mall_teams_details` (
  `mall_team_uid` int(10) NOT NULL AUTO_INCREMENT,
  `mall_uid` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `designation` varchar(100) DEFAULT NULL,
  `tag_line` varchar(200) DEFAULT NULL,
  `t_l_footnote` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `website` varchar(200) DEFAULT NULL,
  `cell_phone` varchar(200) DEFAULT NULL,
  `business_phone` varchar(200) DEFAULT NULL,
  `fax` varchar(100) DEFAULT NULL,
  `address1` text,
  `address2` text,
  `city` varchar(100) DEFAULT NULL,
  `postal_code` varchar(100) DEFAULT NULL,
  `province` int(10) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `about` text,
  `past_revisions` text,
  `team_photo` text,
  `team_photo_path` text,
  `team_photo_path_crop` text,
  `status` int(2) DEFAULT '0',
  PRIMARY KEY (`mall_team_uid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `mall_teams_details` WRITE;
/*!40000 ALTER TABLE `mall_teams_details` DISABLE KEYS */;

INSERT INTO `mall_teams_details` (`mall_team_uid`, `mall_uid`, `first_name`, `last_name`, `designation`, `tag_line`, `t_l_footnote`, `email`, `website`, `cell_phone`, `business_phone`, `fax`, `address1`, `address2`, `city`, `postal_code`, `province`, `country`, `about`, `past_revisions`, `team_photo`, `team_photo_path`, `team_photo_path_crop`, `status`)
VALUES
	(1,1,'xx','Ahmed',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'557ayisha1.jpg','http://localhost/admin-ebdshop/uploads/mall/1/team/1/557ayisha1.jpg','http://localhost/admin-ebdshop/uploads/mall/1/team/1/crop/557ayisha1.jpg',0),
	(2,1,'Ayisa','Siddiqa',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'242180_n.jpg','http://localhost/admin-ebdshop/uploads/mall/1/team/2/242180_n.jpg','http://localhost/admin-ebdshop/uploads/mall/1/team/2/crop/242180_n.jpg',0),
	(3,5,'sdasdsd','sdasd',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0);

/*!40000 ALTER TABLE `mall_teams_details` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table months
# ------------------------------------------------------------

DROP TABLE IF EXISTS `months`;

CREATE TABLE `months` (
  `month_id` tinyint(1) NOT NULL AUTO_INCREMENT,
  `month_name` varchar(250) NOT NULL DEFAULT '',
  PRIMARY KEY (`month_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `months` WRITE;
/*!40000 ALTER TABLE `months` DISABLE KEYS */;

INSERT INTO `months` (`month_id`, `month_name`)
VALUES
	(1,'Jan'),
	(2,'Feb'),
	(3,'Mar'),
	(4,'Apr'),
	(5,'May'),
	(6,'Jun'),
	(7,'Jul'),
	(8,'Aug'),
	(9,'Sep'),
	(10,'Oct'),
	(11,'Nov'),
	(12,'Dec');

/*!40000 ALTER TABLE `months` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table newsletter
# ------------------------------------------------------------

DROP TABLE IF EXISTS `newsletter`;

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `agent_uid` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `send_to` int(1) NOT NULL,
  `created` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



# Dump of table newsletter_subscribers
# ------------------------------------------------------------

DROP TABLE IF EXISTS `newsletter_subscribers`;

CREATE TABLE `newsletter_subscribers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `agent_uid` int(10) unsigned NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `xcode` varchar(100) NOT NULL,
  `type` int(1) NOT NULL,
  `created` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



# Dump of table options
# ------------------------------------------------------------

DROP TABLE IF EXISTS `options`;

CREATE TABLE `options` (
  `agent_uid` bigint(20) NOT NULL,
  `publish_main_website` tinyint(1) DEFAULT '0',
  `using_shopping_cart` tinyint(1) DEFAULT '0',
  `choose_transaction` tinyint(1) DEFAULT '2'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `options` WRITE;
/*!40000 ALTER TABLE `options` DISABLE KEYS */;

INSERT INTO `options` (`agent_uid`, `publish_main_website`, `using_shopping_cart`, `choose_transaction`)
VALUES
	(32,1,1,0);

/*!40000 ALTER TABLE `options` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table page_content
# ------------------------------------------------------------

DROP TABLE IF EXISTS `page_content`;

CREATE TABLE `page_content` (
  `page_content_id` int(10) NOT NULL AUTO_INCREMENT,
  `menu_id` int(10) NOT NULL,
  `agent_uid` int(10) NOT NULL,
  `page_content1` text,
  `page_content2` text,
  `page_content3` text,
  `add_date` int(10) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`page_content_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `page_content` WRITE;
/*!40000 ALTER TABLE `page_content` DISABLE KEYS */;

INSERT INTO `page_content` (`page_content_id`, `menu_id`, `agent_uid`, `page_content1`, `page_content2`, `page_content3`, `add_date`, `status`)
VALUES
	(1,13,1,'Demo with jQuery You can put anything youDemo with jQuery You can put anything youDemo with jQuery You can put anything youDemo with jQuery You can put anything youDemo with jQuery You can put anything youDemo with jQuery You can put anything youDemo with jQuery You can put anything youDemo with jQuery You can put anything youDemo with jQuery You can put anything youDemo with jQuery You can put anything youDemo with jQuery You can put anything youDemo with jQuery You can put anything youDemo with jQuery You can put anything youDemo with jQuery You can put anything youDemo with jQuery You can put anything youDemo with jQuery You can put anything youDemo with jQuery You can put anything youDemo with jQuery You can put anything youDemo with jQuery You can put anything youDemo with jQuery You can put anything you',NULL,NULL,NULL,NULL),
	(2,15,1,NULL,NULL,NULL,NULL,NULL),
	(4,1,31,NULL,NULL,NULL,NULL,NULL),
	(5,2,31,NULL,NULL,NULL,NULL,NULL),
	(6,3,31,NULL,NULL,NULL,NULL,NULL),
	(7,4,31,NULL,NULL,NULL,NULL,NULL),
	(8,5,31,NULL,NULL,NULL,NULL,NULL),
	(9,6,31,NULL,NULL,NULL,NULL,NULL),
	(10,7,31,NULL,NULL,NULL,NULL,NULL),
	(11,8,31,NULL,NULL,NULL,NULL,NULL),
	(12,9,31,NULL,NULL,NULL,NULL,NULL),
	(13,10,31,NULL,NULL,NULL,NULL,NULL),
	(14,11,31,NULL,NULL,NULL,NULL,NULL),
	(15,12,31,NULL,NULL,NULL,NULL,NULL),
	(16,1,32,NULL,NULL,NULL,NULL,NULL),
	(17,2,32,NULL,NULL,NULL,NULL,NULL),
	(18,3,32,NULL,NULL,NULL,NULL,NULL),
	(19,4,32,NULL,NULL,NULL,NULL,NULL),
	(20,5,32,NULL,NULL,NULL,NULL,NULL),
	(21,6,32,NULL,NULL,NULL,NULL,NULL),
	(22,7,32,NULL,NULL,NULL,NULL,NULL),
	(23,8,32,NULL,NULL,NULL,NULL,NULL),
	(24,9,32,NULL,NULL,NULL,NULL,NULL),
	(25,10,32,NULL,NULL,NULL,NULL,NULL),
	(26,11,32,NULL,NULL,NULL,NULL,NULL),
	(27,12,32,NULL,NULL,NULL,NULL,NULL),
	(28,1,33,NULL,NULL,NULL,NULL,NULL),
	(29,2,33,NULL,NULL,NULL,NULL,NULL),
	(30,3,33,NULL,NULL,NULL,NULL,NULL),
	(31,4,33,NULL,NULL,NULL,NULL,NULL),
	(32,5,33,NULL,NULL,NULL,NULL,NULL),
	(33,6,33,NULL,NULL,NULL,NULL,NULL),
	(34,7,33,NULL,NULL,NULL,NULL,NULL),
	(35,8,33,NULL,NULL,NULL,NULL,NULL),
	(36,9,33,NULL,NULL,NULL,NULL,NULL),
	(37,10,33,NULL,NULL,NULL,NULL,NULL),
	(38,11,33,NULL,NULL,NULL,NULL,NULL),
	(39,12,33,NULL,NULL,NULL,NULL,NULL),
	(40,1,35,NULL,NULL,NULL,NULL,NULL),
	(41,2,35,NULL,NULL,NULL,NULL,NULL),
	(42,3,35,NULL,NULL,NULL,NULL,NULL),
	(43,4,35,NULL,NULL,NULL,NULL,NULL),
	(44,5,35,NULL,NULL,NULL,NULL,NULL),
	(45,6,35,NULL,NULL,NULL,NULL,NULL),
	(46,7,35,NULL,NULL,NULL,NULL,NULL),
	(47,8,35,NULL,NULL,NULL,NULL,NULL),
	(48,9,35,NULL,NULL,NULL,NULL,NULL),
	(49,10,35,NULL,NULL,NULL,NULL,NULL),
	(50,11,35,NULL,NULL,NULL,NULL,NULL),
	(51,12,35,NULL,NULL,NULL,NULL,NULL),
	(52,1,36,NULL,NULL,NULL,NULL,NULL),
	(53,2,36,NULL,NULL,NULL,NULL,NULL),
	(54,3,36,NULL,NULL,NULL,NULL,NULL),
	(55,4,36,NULL,NULL,NULL,NULL,NULL),
	(56,5,36,NULL,NULL,NULL,NULL,NULL),
	(57,6,36,NULL,NULL,NULL,NULL,NULL),
	(58,7,36,NULL,NULL,NULL,NULL,NULL),
	(59,8,36,NULL,NULL,NULL,NULL,NULL),
	(60,9,36,NULL,NULL,NULL,NULL,NULL),
	(61,10,36,NULL,NULL,NULL,NULL,NULL),
	(62,11,36,NULL,NULL,NULL,NULL,NULL),
	(63,12,36,NULL,NULL,NULL,NULL,NULL),
	(64,1,37,NULL,NULL,NULL,NULL,NULL),
	(65,2,37,NULL,NULL,NULL,NULL,NULL),
	(66,3,37,NULL,NULL,NULL,NULL,NULL),
	(67,4,37,NULL,NULL,NULL,NULL,NULL),
	(68,5,37,NULL,NULL,NULL,NULL,NULL),
	(69,6,37,NULL,NULL,NULL,NULL,NULL),
	(70,7,37,NULL,NULL,NULL,NULL,NULL),
	(71,8,37,NULL,NULL,NULL,NULL,NULL),
	(72,9,37,NULL,NULL,NULL,NULL,NULL),
	(73,10,37,NULL,NULL,NULL,NULL,NULL),
	(74,11,37,NULL,NULL,NULL,NULL,NULL),
	(75,12,37,NULL,NULL,NULL,NULL,NULL),
	(76,1,38,NULL,NULL,NULL,NULL,NULL),
	(77,2,38,NULL,NULL,NULL,NULL,NULL),
	(78,3,38,NULL,NULL,NULL,NULL,NULL),
	(79,4,38,NULL,NULL,NULL,NULL,NULL),
	(80,5,38,NULL,NULL,NULL,NULL,NULL),
	(81,6,38,NULL,NULL,NULL,NULL,NULL),
	(82,7,38,NULL,NULL,NULL,NULL,NULL),
	(83,8,38,NULL,NULL,NULL,NULL,NULL),
	(84,9,38,NULL,NULL,NULL,NULL,NULL),
	(85,10,38,NULL,NULL,NULL,NULL,NULL),
	(86,11,38,NULL,NULL,NULL,NULL,NULL),
	(87,12,38,NULL,NULL,NULL,NULL,NULL),
	(88,1,39,NULL,NULL,NULL,NULL,NULL),
	(89,2,39,NULL,NULL,NULL,NULL,NULL),
	(90,3,39,NULL,NULL,NULL,NULL,NULL),
	(91,4,39,NULL,NULL,NULL,NULL,NULL),
	(92,5,39,NULL,NULL,NULL,NULL,NULL),
	(93,6,39,NULL,NULL,NULL,NULL,NULL),
	(94,7,39,NULL,NULL,NULL,NULL,NULL),
	(95,8,39,NULL,NULL,NULL,NULL,NULL),
	(96,9,39,NULL,NULL,NULL,NULL,NULL),
	(97,10,39,NULL,NULL,NULL,NULL,NULL),
	(98,11,39,NULL,NULL,NULL,NULL,NULL),
	(99,12,39,NULL,NULL,NULL,NULL,NULL),
	(100,1,40,NULL,NULL,NULL,NULL,NULL),
	(101,2,40,NULL,NULL,NULL,NULL,NULL),
	(102,3,40,NULL,NULL,NULL,NULL,NULL),
	(103,4,40,NULL,NULL,NULL,NULL,NULL),
	(104,5,40,NULL,NULL,NULL,NULL,NULL),
	(105,6,40,NULL,NULL,NULL,NULL,NULL),
	(106,7,40,NULL,NULL,NULL,NULL,NULL),
	(107,8,40,NULL,NULL,NULL,NULL,NULL),
	(108,9,40,NULL,NULL,NULL,NULL,NULL),
	(109,10,40,NULL,NULL,NULL,NULL,NULL),
	(110,11,40,NULL,NULL,NULL,NULL,NULL),
	(111,12,40,NULL,NULL,NULL,NULL,NULL),
	(112,1,41,NULL,NULL,NULL,NULL,NULL),
	(113,2,41,NULL,NULL,NULL,NULL,NULL),
	(114,3,41,NULL,NULL,NULL,NULL,NULL),
	(115,4,41,NULL,NULL,NULL,NULL,NULL),
	(116,5,41,NULL,NULL,NULL,NULL,NULL),
	(117,6,41,NULL,NULL,NULL,NULL,NULL),
	(118,7,41,NULL,NULL,NULL,NULL,NULL),
	(119,8,41,NULL,NULL,NULL,NULL,NULL),
	(120,9,41,NULL,NULL,NULL,NULL,NULL),
	(121,10,41,NULL,NULL,NULL,NULL,NULL),
	(122,11,41,NULL,NULL,NULL,NULL,NULL),
	(123,12,41,NULL,NULL,NULL,NULL,NULL),
	(124,1,42,NULL,NULL,NULL,NULL,NULL),
	(125,2,42,NULL,NULL,NULL,NULL,NULL),
	(126,3,42,NULL,NULL,NULL,NULL,NULL),
	(127,4,42,NULL,NULL,NULL,NULL,NULL),
	(128,5,42,NULL,NULL,NULL,NULL,NULL),
	(129,6,42,NULL,NULL,NULL,NULL,NULL),
	(130,7,42,NULL,NULL,NULL,NULL,NULL),
	(131,8,42,NULL,NULL,NULL,NULL,NULL),
	(132,9,42,NULL,NULL,NULL,NULL,NULL),
	(133,10,42,NULL,NULL,NULL,NULL,NULL),
	(134,11,42,NULL,NULL,NULL,NULL,NULL),
	(135,12,42,NULL,NULL,NULL,NULL,NULL),
	(136,1,43,NULL,NULL,NULL,NULL,NULL),
	(137,2,43,NULL,NULL,NULL,NULL,NULL),
	(138,3,43,NULL,NULL,NULL,NULL,NULL),
	(139,4,43,NULL,NULL,NULL,NULL,NULL),
	(140,5,43,NULL,NULL,NULL,NULL,NULL),
	(141,6,43,NULL,NULL,NULL,NULL,NULL),
	(142,7,43,NULL,NULL,NULL,NULL,NULL),
	(143,8,43,NULL,NULL,NULL,NULL,NULL),
	(144,9,43,NULL,NULL,NULL,NULL,NULL),
	(145,10,43,NULL,NULL,NULL,NULL,NULL),
	(146,11,43,NULL,NULL,NULL,NULL,NULL),
	(147,12,43,NULL,NULL,NULL,NULL,NULL),
	(148,1,44,NULL,NULL,NULL,NULL,NULL),
	(149,2,44,NULL,NULL,NULL,NULL,NULL),
	(150,3,44,NULL,NULL,NULL,NULL,NULL),
	(151,4,44,NULL,NULL,NULL,NULL,NULL),
	(152,5,44,NULL,NULL,NULL,NULL,NULL),
	(153,6,44,NULL,NULL,NULL,NULL,NULL),
	(154,7,44,NULL,NULL,NULL,NULL,NULL),
	(155,8,44,NULL,NULL,NULL,NULL,NULL),
	(156,9,44,NULL,NULL,NULL,NULL,NULL),
	(157,10,44,NULL,NULL,NULL,NULL,NULL),
	(158,11,44,NULL,NULL,NULL,NULL,NULL),
	(159,12,44,NULL,NULL,NULL,NULL,NULL),
	(160,1,3,NULL,NULL,NULL,NULL,NULL),
	(161,2,3,NULL,NULL,NULL,NULL,NULL),
	(162,3,3,NULL,NULL,NULL,NULL,NULL),
	(163,4,3,NULL,NULL,NULL,NULL,NULL),
	(164,5,3,NULL,NULL,NULL,NULL,NULL),
	(165,6,3,NULL,NULL,NULL,NULL,NULL),
	(166,7,3,NULL,NULL,NULL,NULL,NULL),
	(167,8,3,'Page content-1 ','Page content-2 ','Page content-3 ',NULL,NULL),
	(168,9,3,'sdasd','sadasda','sadasd',NULL,NULL),
	(169,10,3,NULL,NULL,NULL,NULL,NULL),
	(170,11,3,NULL,NULL,NULL,NULL,NULL),
	(171,12,3,NULL,NULL,NULL,NULL,NULL),
	(172,1,0,NULL,NULL,NULL,NULL,NULL),
	(173,2,0,NULL,NULL,NULL,NULL,NULL),
	(179,13,3,NULL,NULL,NULL,NULL,NULL),
	(180,1,73,NULL,NULL,NULL,NULL,NULL),
	(181,2,73,NULL,NULL,NULL,NULL,NULL),
	(182,3,73,NULL,NULL,NULL,NULL,NULL),
	(183,4,73,NULL,NULL,NULL,NULL,NULL),
	(184,5,73,NULL,NULL,NULL,NULL,NULL),
	(185,6,73,NULL,NULL,NULL,NULL,NULL),
	(186,7,73,NULL,NULL,NULL,NULL,NULL),
	(187,8,73,NULL,NULL,NULL,NULL,NULL),
	(188,9,73,NULL,NULL,NULL,NULL,NULL),
	(189,10,73,NULL,NULL,NULL,NULL,NULL),
	(190,11,73,NULL,NULL,NULL,NULL,NULL),
	(191,12,73,NULL,NULL,NULL,NULL,NULL);

/*!40000 ALTER TABLE `page_content` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table product_category
# ------------------------------------------------------------

DROP TABLE IF EXISTS `product_category`;

CREATE TABLE `product_category` (
  `category_id` int(10) NOT NULL AUTO_INCREMENT,
  `product_group` varchar(30) DEFAULT 'shop',
  `category_name` varchar(200) DEFAULT NULL,
  `slug` varchar(200) DEFAULT '',
  `parent_id` int(10) DEFAULT '0',
  `agent_uid` int(10) DEFAULT '0',
  `ordering` tinyint(2) DEFAULT '0',
  `agent_ordering` tinyint(2) DEFAULT '0',
  `status` int(2) DEFAULT '1',
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `product_category` WRITE;
/*!40000 ALTER TABLE `product_category` DISABLE KEYS */;

INSERT INTO `product_category` (`category_id`, `product_group`, `category_name`, `slug`, `parent_id`, `agent_uid`, `ordering`, `agent_ordering`, `status`)
VALUES
	(1,'shops','Clothing & Accessories','clothing-accessories',0,0,2,0,1),
	(2,'shops','Men\'s Wears','mens-wears',1,0,0,2,1),
	(3,'shops','Women\'s Wears','womens-wears',1,0,1,0,1),
	(4,'shops','Baby & Child Wear\'s','baby-child-wears',1,0,2,1,1),
	(5,'shops','Boutique & Batik','boutique-batik',6,0,7,3,2),
	(6,'shops','Jute & Handicrafts','jute-handicrafts',0,0,12,0,2),
	(7,'shops','Leather & Bags','leather-bags',0,0,1,0,1),
	(8,'shops','Jute Products','jute-products',6,0,3,4,1),
	(9,'shops','Handicrafts','handicrafts',6,0,4,5,1),
	(10,'shops','Foot wears','foot-wears',0,0,21,0,1),
	(11,'shops','Bag & Travelling','bag-travelling',7,0,5,6,1),
	(12,'shops','Leather Goods','leather-goods',7,0,6,7,1),
	(13,'shops','Belts','belts',7,0,8,8,1),
	(14,'shops','Jewelry & Watches','jewelry-watches',0,0,20,0,1),
	(15,'shops','Jewellery','jewellery',14,0,0,0,1),
	(16,'shops','Watch & Sunglass','watch-sunglass',14,0,0,0,1),
	(17,'shops','Optics','optics',14,0,0,0,1),
	(18,'shops','Beauty & Fragrances','beauty-fragrances',0,0,19,0,1),
	(19,'shops','Consumer','consumer',18,0,0,0,1),
	(20,'shops','Cosmetics','cosmetics',18,0,0,0,1),
	(21,'shops','Hair & Skin care','hair-skin-care',18,0,0,0,1),
	(22,'shops','Bath & Body','bath-body',18,0,0,0,1),
	(23,'shops','Dental Care','dental-care',18,0,0,0,1),
	(24,'shops','Foods','foods',0,0,18,0,1),
	(25,'shops','Fast Food','fast-food',24,0,0,9,1),
	(26,'shops','Chinuse','chinuse',24,0,2,0,1),
	(27,'shops','Resturants','resturants',24,0,3,0,1),
	(28,'shops','Coffie House','coffie-house',24,0,4,0,1),
	(29,'shops','Sweets & Confectionary','sweets-confectionary',24,0,5,0,1),
	(30,'shops','Birani & Tehari','birani-tehari',24,0,6,0,1),
	(31,'shops','Stationery & Gifts','stationery-gifts',0,0,16,0,1),
	(32,'shops','Gift Cards','gift-cards',31,0,0,0,1),
	(33,'shops','Cards & Stationery','cards-stationery',31,0,0,0,1),
	(34,'shops','Toys & Games','toys-games',31,0,0,0,1),
	(35,'shops','Flowers & Gifts','flowers-gifts',31,0,0,0,1),
	(36,'shops','Wedding','wedding',31,0,0,0,1),
	(37,'shops','Sports','sports',31,0,0,0,1),
	(38,'shops','Garden','garden',31,0,0,0,1),
	(39,'shops','Computer & Electronics','computer-electronics',0,0,15,0,1),
	(40,'shops','Consumer Electronics','consumer-electronics',39,0,2,0,1),
	(41,'shops','Mobile Phone & Accessories','mobile-phone-accessories',39,0,0,0,1),
	(42,'shops','Computing & Accessories','computing-accessories',39,0,1,0,1),
	(43,'shops','Home Appliances','home-appliances',0,0,8,0,1),
	(44,'shops','Electrical & Lighting','electrical-lighting',0,0,14,0,1),
	(45,'shops','Furnitures','furnitures',0,0,13,0,1),
	(46,'shops','Wood Furniture','wood-furniture',45,0,0,0,1),
	(47,'shops','Kitchen & Gourmet','kitchen-gourmet',43,0,0,0,1),
	(48,'shops','Cookware & Dining','cookware-dining',43,0,0,0,1),
	(49,'shops','Bathroom Fitness','bathroom-fitness',43,0,0,0,1),
	(50,'shops','Decorative Accessories','decorative-accessories',43,0,0,0,1),
	(51,'shops','Bedding','bedding',43,0,0,0,1),
	(52,'shops','Transportation','transportation',0,0,10,0,1),
	(53,'shops','Cars','cars',52,0,0,0,1),
	(54,'shops','Elevator & Funicular Car','elevator-funicular-car',52,0,0,0,1),
	(55,'shops','Bus & Trucs Accessories','bus-trucs-accessories',52,0,0,0,1),
	(56,'shops','Car Accessories','car-accessories',52,0,0,0,1),
	(57,'shops','Bike &  Accessories','bike-accessories',52,0,0,0,1),
	(58,'shops','Cycle','cycle',52,0,0,0,1),
	(59,'shops','Health & Medicine','health-medicine',0,0,9,0,1),
	(60,'shops','Beauty Equipment','beauty-equipment',59,0,0,0,1),
	(61,'shops','Dental Apparatus','dental-apparatus',59,0,0,0,1),
	(62,'shops','Diagnosis Equipment','diagnosis-equipment',59,0,0,0,1),
	(63,'shops','Disposable Medical Supplies','disposable-medical-supplies',59,0,0,0,1),
	(64,'shops','Health Care Appliance','health-care-appliance',59,0,0,0,1),
	(65,'shops','Surgical Equipment','surgical-equipment',59,0,0,0,1),
	(66,'shops','Fitness Equipment','fitness-equipment',59,0,0,0,1),
	(67,'shops','Construction & Decoration','construction-decoration',0,0,3,0,1),
	(68,'shops','Tiles & Ceramics','tiles-ceramics',67,0,0,0,1),
	(69,'shops','Pipe Fittings','pipe-fittings',67,0,0,0,1),
	(70,'shops','Hardware','hardware',67,0,0,0,1),
	(71,'shops','Timber & Plywood','timber-plywood',67,0,0,0,1),
	(72,'shops','Bathroom Furniture','bathroom-furniture',67,0,0,0,1),
	(73,'shops','Sanatary & Bathroom Fitnes','sanatary-bathroom-fitnes',67,0,0,0,1),
	(74,'services','Services','services',0,0,11,0,1),
	(75,'services','Hospital & Diagonistic Center','hospital-diagonistic-center',74,0,1,0,1),
	(76,'services','Doctor Chember','doctor-chember',74,0,11,0,1),
	(77,'services','Dental Chember','dental-chember',74,0,10,0,1),
	(78,'services','Gents & Women Parler','gents-women-parler',74,0,9,0,1),
	(79,'services','Dry Cleanners','dry-cleanners',74,0,8,0,1),
	(80,'services','Advertising','advertising',74,0,7,0,1),
	(81,'services','Express Delivery','express-delivery',74,0,6,0,1),
	(82,'services','Package & Printing','package-printing',74,0,5,0,1),
	(83,'services','Shipment & Storage','shipment-storage',74,0,4,0,1),
	(84,'services','Comunity Center','comunity-center',74,0,3,0,1),
	(85,'services','Conference Center','conference-center',74,0,2,0,1),
	(86,'services','Body Fitness','body-fitness',74,0,0,0,1),
	(87,'services','Event Management','event-management',74,0,12,0,1),
	(88,'services','Hotel & Tours','hotel-tours',0,0,7,0,1),
	(89,'services','International Hotel','international-hotel',88,0,0,0,1),
	(90,'services','Hotel','hotel',88,0,0,0,1),
	(91,'services','Tour & Travels','tour-travels',88,0,0,0,1),
	(92,'services','Resorte','resorte',88,0,0,0,1),
	(93,'shops','Books & Magazines','books-magazines',0,0,6,0,1),
	(94,'shops','Regular Books','regular-books',93,0,0,0,1),
	(95,'shops','Kids','kids',93,0,0,0,1),
	(96,'shops','Magazines','magazines',93,0,0,0,1),
	(97,'shops','Sports','sports',0,0,17,0,1),
	(98,'shops','Indoor Sports','indoor-sports',97,0,0,0,1),
	(99,'shops','Casual Shirts','casual-shirts',2,0,1,0,1),
	(100,'shops','Casual Trousers','casual-trousers',2,0,12,0,1),
	(101,'shops','Cardigans & Jumpers','cardigans-jumpers',2,0,13,0,1),
	(102,'shops','Formal Shirts','formal-shirts',2,0,14,0,1),
	(103,'shops','Formal Pant','formal-pant',2,0,15,0,1),
	(104,'shops','Formal Trousers','formal-trousers',2,0,16,0,1),
	(105,'shops','Jeans','jeans',2,0,17,0,1),
	(106,'shops','Knitwear','knitwear',2,0,18,0,1),
	(107,'shops','Nightwear','nightwear',2,0,19,0,1),
	(108,'shops','Panjabi','panjabi',2,0,11,0,1),
	(109,'shops','Short Panjabi','short-panjabi',2,0,9,0,1),
	(110,'shops','Smart Shirts','smart-shirts',2,0,10,0,1),
	(111,'shops','Shorts & Swimwear','shorts-swimwear',2,0,4,0,1),
	(112,'shops','Socks','socks',2,0,2,0,1),
	(113,'shops','Sportswear','sportswear',2,0,3,0,1),
	(114,'shops','Suits','suits',2,0,5,0,1),
	(115,'shops','T-Shirts','t-shirts',2,0,0,0,1),
	(116,'shops','Ties','ties',2,0,6,0,1),
	(117,'shops','Underwear','underwear',2,0,7,0,1),
	(118,'shops','Waistcoats','waistcoats',2,0,8,0,1),
	(119,'shops','Accessories','mens-wears-accessories',2,0,20,0,1),
	(120,'shops','Sharee','sharee',1,0,10,10,1),
	(121,'shops','Coats & Jackets','coats-jackets',3,0,0,0,1),
	(122,'shops','Dresses','dresses',3,0,0,0,1),
	(123,'shops','Fatua','fatua',3,0,0,0,1),
	(124,'shops','Jeans Laydies','jeans-laydies',3,0,0,0,1),
	(125,'shops','Hijab Niqab Burqa','hijab-niqab-burqa',3,0,0,0,1),
	(126,'shops','Indian Dresses','indian-dresses',3,0,0,0,1),
	(127,'shops','Knitwear','womens-wears-knitwear',3,0,0,0,1),
	(128,'shops','Lehenga','lehenga',3,0,0,0,1),
	(129,'shops','Long Scart','long-scart',3,0,0,0,1),
	(130,'shops','Leggings','leggings',3,0,0,0,1),
	(131,'shops','Ladies Panjabi','ladies-panjabi',3,0,0,0,1),
	(132,'shops','Ladeies Short Panjabi','ladeies-short-panjabi',3,0,0,0,1),
	(133,'shops','Lingerie & Underwear','lingerie-underwear',3,0,0,0,1),
	(134,'shops','Mini Scart','mini-scart',3,0,0,0,1),
	(135,'shops','Maternity','maternity',3,0,0,0,1),
	(136,'shops','Nightwear','womens-wears-nightwear',3,0,0,0,1),
	(137,'shops','Petite','petite',3,0,0,0,1),
	(138,'shops','Short Shirt','short-shirt',3,0,0,0,1),
	(139,'shops','Socks & Tights','socks-tights',3,0,0,0,1),
	(140,'shops','Sportswear','womens-wears-sportswear',3,0,0,0,1),
	(141,'shops','Suits & Tailoring','suits-tailoring',3,0,0,0,1),
	(142,'shops','Swimwear & Beachwear','swimwear-beachwear',3,0,0,0,1),
	(143,'shops','Two piec','two-piec',3,0,0,0,1),
	(144,'shops','Three pice','three-pice',3,0,0,0,1),
	(145,'shops','Three Quater','three-quater',3,0,0,0,1),
	(146,'shops','Tops','tops',3,0,0,0,1),
	(147,'shops','Trousers & Shorts','trousers-shorts',3,0,0,0,1),
	(148,'shops','Accessories','womens-wears-accessories',3,0,0,0,1),
	(149,'shops','Baby & Toddlerwear','baby-toddlerwear',4,0,0,0,1),
	(150,'shops','Boyswear','boyswear',4,0,0,0,1),
	(151,'shops','Fancy Dress','fancy-dress',4,0,0,0,1),
	(152,'shops','Girlswear','girlswear',4,0,0,0,1),
	(153,'shops','Mums & Babies','mums-babies',4,0,0,0,1),
	(154,'shops','Nightwear','baby-child-wears-nightwear',4,0,0,0,1),
	(155,'shops','School Uniform','school-uniform',4,0,0,0,1),
	(156,'shops','Socks & Underwear','socks-underwear',4,0,0,0,1),
	(157,'shops','Accessories','baby-child-wears-accessories',4,0,0,0,1),
	(158,'shops','Cotton Sharee','cotton-sharee',120,0,1,0,1),
	(159,'shops','Benarosi','benarosi',120,0,8,0,1),
	(160,'shops','Bridal Sharee','bridal-sharee',120,0,7,0,1),
	(161,'shops','Jamdani','jamdani',120,0,6,0,1),
	(162,'shops','Jorzet','jorzet',120,0,5,0,1),
	(163,'shops','Katan','katan',120,0,4,0,1),
	(164,'shops','Rajshahi Silk','rajshahi-silk',120,0,0,0,1),
	(165,'shops','Taat','taat',120,0,3,0,1),
	(166,'shops','Tangail','tangail',120,0,2,0,1),
	(167,'shops','Accessories','sharee-accessories',120,0,9,0,1),
	(168,'shops','Boy\'s  Shoes','boys-shoes',10,0,0,0,1),
	(169,'shops','Boys\' Athletic Shoes','boys-athletic-shoes',168,0,0,0,1),
	(170,'shops','Boys\' Skate Shoes','boys-skate-shoes',168,0,0,0,1),
	(171,'shops','Boys\' Sandals','boys-sandals',168,0,0,0,1),
	(172,'shops','Boys\' Dress Shoes','boys-dress-shoes',168,0,0,0,1),
	(173,'shops','Boys\' Grade-School Shoes','boys-grade-school-shoes',168,0,0,0,1),
	(174,'shops','Bridal Shoes','bridal-shoes',275,0,0,0,1),
	(175,'shops','Converse','converse',275,0,0,0,1),
	(176,'shops','Men\'s Sandals','mens-sandals',271,0,0,0,1),
	(177,'shops','Men\'s Dress Shoes','mens-dress-shoes',271,0,0,0,1),
	(178,'shops','Men\'s Casual Shoes','mens-casual-shoes',271,0,0,0,1),
	(179,'shops','Men\'s Work Boots','mens-work-boots',271,0,0,0,1),
	(180,'shops','Men\'s Athletic Shoes','mens-athletic-shoes',271,0,0,0,1),
	(182,'shops','Women\'s Dress Shoes','womens-dress-shoes',274,0,0,0,1),
	(183,'shops','Women\'s Casual Shoes','womens-casual-shoes',274,0,0,0,1),
	(184,'shops','Women\'s Boots','womens-boots',274,0,0,0,1),
	(185,'shops','Women\'s Athletic Shoes','womens-athletic-shoes',274,0,0,0,1),
	(186,'shops','Girls\' Athletic Shoes','girls-athletic-shoes',273,0,0,0,1),
	(187,'shops','Girls\' Sandals','girls-sandals',273,0,0,0,1),
	(188,'shops','Girls\' Dress Shoes','girls-dress-shoes',273,0,0,0,1),
	(189,'shops','Girls\' Grade-School Shoes','girls-grade-school-shoes',273,0,0,0,1),
	(190,'shops','Jute Promotional Bags','jute-promotional-bags',8,0,0,0,1),
	(191,'shops','Jute Shopping Bags','jute-shopping-bags',8,0,0,0,1),
	(192,'shops','Jute Gift Bags','jute-gift-bags',8,0,0,0,1),
	(193,'shops','Jute Beach Bags','jute-beach-bags',8,0,0,0,1),
	(194,'shops','Jute Embroidery Bags','jute-embroidery-bags',8,0,0,0,1),
	(195,'shops','Jute Designer Bags','jute-designer-bags',8,0,0,0,1),
	(196,'shops','Jute Fancy Bags','jute-fancy-bags',8,0,0,0,1),
	(197,'shops','Jute Bottole Bags','jute-bottole-bags',8,0,0,0,1),
	(198,'shops','Jute Colour Shed','jute-colour-shed',8,0,0,0,1),
	(199,'shops','Cotton Bag','cotton-bag',8,0,0,0,1),
	(200,'shops','Cotton Promotional Bags','cotton-promotional-bags',8,0,0,0,1),
	(201,'shops','Canvas Bags','canvas-bags',8,0,0,0,1),
	(202,'shops','Canvas Promotional Bags','canvas-promotional-bags',8,0,0,0,1),
	(203,'shops','Non Woven Bags','non-woven-bags',8,0,0,0,1),
	(204,'shops','Handles','handles',8,0,0,0,1),
	(205,'shops','Wood','wood',9,0,0,0,1),
	(206,'shops','Stone','stone',9,0,0,0,1),
	(207,'shops','Stone','handicrafts-stone',9,0,0,0,1),
	(208,'shops','Glass','glass',9,0,0,0,1),
	(209,'shops','Cane And Bamboo','cane-and-bamboo',9,0,0,0,1),
	(210,'shops','Pottery','pottery',9,0,0,0,1),
	(211,'shops','Home Decorations','home-decorations',9,0,0,0,1),
	(212,'shops','Textile Designer','textile-designer',9,0,0,0,1),
	(213,'shops','Home Furnishing','home-furnishing',9,0,0,0,1),
	(214,'shops','Tribal','tribal',9,0,0,0,1),
	(215,'shops','Beaded','beaded',9,0,0,0,1),
	(216,'shops','Metal','metal',9,0,0,0,1),
	(217,'shops','Silver','silver',9,0,0,0,1),
	(218,'shops','Lacquer','lacquer',9,0,0,0,1),
	(219,'shops','Jewelry Boxes','jewelry-boxes',9,0,0,0,1),
	(220,'shops','Fashion Jewelry','fashion-jewelry',9,0,0,0,1),
	(221,'shops','Apparels & Accessories','apparels-accessories',9,0,0,0,1),
	(222,'shops','Gifts For Her','gifts-for-her',9,0,0,0,1),
	(223,'shops','Fashion Accessory','fashion-accessory',9,0,0,0,1),
	(224,'shops','Folk Art','folk-art',9,0,0,0,1),
	(225,'shops','Miniature Painting','miniature-painting',9,0,0,0,1),
	(226,'shops','Contemporary Artist','contemporary-artist',9,0,0,0,1),
	(227,'shops','Birth Day Gifts','birth-day-gifts',9,0,0,0,1),
	(228,'shops','Marrige Day Gift','marrige-day-gift',9,0,0,0,1),
	(229,'shops','Valentine Day Gifts','valentine-day-gifts',9,0,0,0,1),
	(230,'shops','Mothers Day Gifts','mothers-day-gifts',9,0,0,0,1),
	(231,'shops','Fathers Day Gifts','fathers-day-gifts',9,0,0,0,1),
	(232,'shops','Valentine Day Gifts','handicrafts-valentine-day-gifts',9,0,0,0,1),
	(233,'shops','Christmas Gift','christmas-gift',9,0,0,0,1),
	(234,'shops','Candles','candles',9,0,0,0,1),
	(235,'shops','CraftsCenter','craftscenter',9,0,0,0,1),
	(236,'shops','Affiliates','affiliates',9,0,0,0,1),
	(237,'shops','Picture Gallery','picture-gallery',9,0,0,0,1),
	(238,'shops','Marble Write up','marble-write-up',9,0,0,0,1),
	(239,'shops','Stone Carving','stone-carving',9,0,0,0,1),
	(240,'shops','Stone Write up','stone-write-up',9,0,0,0,1),
	(241,'shops','Marble Sculptures','marble-sculptures',9,0,0,0,1),
	(242,'shops','Kids Crafts','kids-crafts',9,0,0,0,1),
	(243,'shops','Shoulder Bugs','shoulder-bugs',11,0,0,0,1),
	(244,'shops','Across Body','across-body',11,0,0,0,1),
	(245,'shops','Evening & Clutch Bugs','evening-clutch-bugs',11,0,0,0,1),
	(246,'shops','Tote Bags','tote-bags',11,0,0,0,1),
	(247,'shops','School bags','school-bags',11,0,0,0,1),
	(248,'shops','Bowling','bowling',11,0,0,0,1),
	(249,'shops','Backpacks','backpacks',11,0,0,0,1),
	(250,'shops','Workbags','workbags',11,0,0,0,1),
	(251,'shops','Leather Bags','bag-travelling-leather-bags',11,0,0,0,1),
	(252,'shops','Ladies Hand Bags','ladies-hand-bags',11,0,0,0,1),
	(253,'shops','Fancy Hand Bags','fancy-hand-bags',11,0,0,0,1),
	(254,'shops','Purses & Wallets','purses-wallets',11,0,0,0,1),
	(255,'shops','Across Body Bag','across-body-bag',11,0,0,0,1),
	(256,'shops','Shopper Bags','shopper-bags',11,0,0,0,1),
	(257,'shops','Occasion Handbags','occasion-handbags',11,0,0,0,1),
	(258,'shops','Luggage & travel bags','luggage-travel-bags',11,0,0,0,1),
	(259,'shops','Carry-on luggage','carry-on-luggage',11,0,0,0,1),
	(260,'shops','Trolley Cases','trolley-cases',11,0,0,0,1),
	(261,'shops','Wheeled Duffles','wheeled-duffles',11,0,0,0,1),
	(262,'shops','Garment Bags','garment-bags',11,0,0,0,1),
	(265,'shops','Diamonds','diamonds',14,0,0,0,1),
	(266,'shops','Steel Furniture','steel-furniture',45,0,0,0,1),
	(267,'shops','Bamboo Furniture','bamboo-furniture',45,0,0,0,1),
	(268,'shops','Cane Furniture','cane-furniture',45,0,0,0,1),
	(269,'shops','Palywood Furniture','palywood-furniture',45,0,0,0,1),
	(271,'shops','Men\'s Shoes','mens-shoes',10,0,0,0,1),
	(274,'shops','Women\'s Shoes','womens-shoes',10,0,0,0,1),
	(273,'shops','Girl\'s Shoes','girls-shoes',10,0,0,0,1),
	(275,'shops','Other\'s Shoes','others-shoes',10,0,0,0,1),
	(276,'shops','Cake & Pastry','cake-pastry',24,0,1,0,1),
	(277,'shops','Sound & Vision','sound-vision',39,0,3,0,1),
	(278,'shops','Televisions','televisions',277,0,0,0,1),
	(279,'shops','Blu-ray, DVD & Home Cinema','blu-ray-dvd-home-cinema',277,0,0,0,1),
	(280,'shops','Photography & Camcorders','photography-camcorders',277,0,0,0,1),
	(281,'shops','Audio','audio',277,0,0,0,1),
	(282,'shops','iPods & MP3 Players','ipods-mp3-players',277,0,0,0,1),
	(283,'shops','Headphones','headphones',277,0,0,0,1),
	(284,'shops','Gaming','gaming',277,0,0,0,1),
	(285,'shops','Kindle & eReaders','kindle-ereaders',277,0,0,0,1),
	(286,'shops','Stands & Accessories','stands-accessories',277,0,0,0,1),
	(287,'shops','Technology Offers','technology-offers',277,0,0,0,1),
	(288,'shops','iPad & Tablet PCs','ipad-tablet-pcs',42,0,0,0,1),
	(289,'shops','Laptops & Netbooks','laptops-netbooks',42,0,0,0,1),
	(290,'shops','Desktop PCs & Servers','desktop-pcs-servers',42,0,0,0,1),
	(291,'shops','Software','software',42,0,0,0,1),
	(292,'shops','Printing','printing',42,0,0,0,1),
	(293,'shops','Computer Accessories','computer-accessories',42,0,0,0,1),
	(294,'shops','Telephones','telephones',42,0,0,0,1),
	(295,'shops','Express Delivery','consumer-electronics-express-delivery',40,0,0,0,1),
	(296,'shops','Cookers & Ovens','cookers-ovens',40,0,0,0,1),
	(297,'shops','Dishwashers','dishwashers',40,0,0,0,1),
	(298,'shops','Fridges & Freezers','fridges-freezers',40,0,0,0,1),
	(299,'shops','Washing Machines','washing-machines',40,0,0,0,1),
	(300,'shops','Tumble Dryers','tumble-dryers',40,0,0,0,1),
	(301,'shops','Washer Dryers','washer-dryers',40,0,0,0,1),
	(302,'shops','Vacuum Cleaners','vacuum-cleaners',40,0,0,0,1),
	(303,'shops','Fires','fires',40,0,0,0,1),
	(304,'shops','Hostess Trolleys','hostess-trolleys',40,0,0,0,1),
	(305,'shops','Maytag Laundry Solutions','maytag-laundry-solutions',40,0,0,0,1),
	(306,'shops','Cooking Appliances','cooking-appliances',40,0,0,0,1),
	(307,'shops','Food & Drink Preparation','food-drink-preparation',40,0,0,0,1),
	(308,'shops','Tea & Coffee','tea-coffee',40,0,0,0,1),
	(309,'shops','Kettles','kettles',40,0,0,0,1),
	(310,'shops','Toasters','toasters',40,0,0,0,1),
	(311,'shops','Kettle & Toaster Sets','kettle-toaster-sets',40,0,0,0,1),
	(312,'shops','Ironing','ironing',40,0,0,0,1),
	(313,'shops','Security & Monitoring','security-monitoring',40,0,0,0,1),
	(314,'shops','Heating & Cooling','heating-cooling',40,0,0,0,1),
	(315,'shops','Sewing','sewing',40,0,0,0,1),
	(316,'shops','Blackberry Cases','blackberry-cases',41,0,0,0,1),
	(317,'shops','Handsfree Kits','handsfree-kits',41,0,0,0,1),
	(318,'shops','iPhone Cases','iphone-cases',41,0,0,0,1),
	(319,'shops','Chargers','chargers',41,0,0,0,1),
	(320,'shops','Solar System','solar-system',39,0,4,0,1),
	(321,'shops','Solar Street Light','solar-street-light',320,0,0,0,1),
	(322,'shops','Solar Water Heater','solar-water-heater',320,0,0,0,1),
	(323,'shops','Solar Water Pump','solar-water-pump',320,0,0,0,1),
	(324,'shops','Solar Garden Light','solar-garden-light',320,0,0,0,1),
	(325,'shops','Solar Power Packs','solar-power-packs',320,0,0,0,1),
	(326,'shops','Solar Cooking System','solar-cooking-system',320,0,0,0,1),
	(327,'shops','Solar Laptop Charger','solar-laptop-charger',320,0,0,0,1),
	(328,'shops','Solar Mobile Phone Charger','solar-mobile-phone-charger',320,0,0,0,1),
	(329,'shops','Interior Lighting','interior-lighting',44,0,0,0,1),
	(330,'shops','Exterior Lighting','exterior-lighting',44,0,0,0,1),
	(331,'shops','Emergency Lighting','emergency-lighting',44,0,0,0,1),
	(332,'shops','Lamps & Tubes','lamps-tubes',44,0,0,0,1),
	(335,'shops','Wiring Accessories','wiring-accessories',44,0,0,0,1),
	(334,'shops','Transformers & Drivers','transformers-drivers',44,0,0,0,1),
	(336,'shops','Protection Accessories','protection-accessories',44,0,0,0,1),
	(337,'shops','Control Accessories','control-accessories',44,0,0,0,1),
	(338,'shops','Art, Architecture & Photography','art-architecture-photography',94,0,0,0,1),
	(339,'shops','Audiobooks','audiobooks',94,0,0,0,1),
	(340,'shops','Biography','biography',94,0,0,0,1),
	(341,'shops','Books For Study','books-for-study',94,0,0,0,1),
	(342,'shops','Business, Finance & Law','business-finance-law',94,0,0,0,1),
	(343,'shops','Calendars, Diaries, Annuals & More','calendars-diaries-annuals-more',94,0,0,0,1),
	(344,'shops','Children\'s Books','childrens-books',94,0,0,0,1),
	(345,'shops','Comics & Graphic Novels','comics-graphic-novels',94,0,0,0,1),
	(346,'shops','Computing & Internet','computing-internet',94,0,0,0,1),
	(347,'shops','Crime, Thrillers & Mystery','crime-thrillers-mystery',94,0,0,0,1),
	(348,'shops','Fiction','fiction',94,0,0,0,1),
	(349,'shops','Food & Drink','food-drink',94,0,0,0,1),
	(350,'shops','Health, Family & Lifestyle','health-family-lifestyle',94,0,0,0,1),
	(351,'shops','History','history',94,0,0,0,1),
	(352,'shops','Home & Garden','home-garden',94,0,0,0,1),
	(353,'shops','Horror','horror',94,0,0,0,1),
	(354,'shops','Humour','humour',94,0,0,0,1),
	(355,'shops','Languages','languages',94,0,0,0,1),
	(356,'shops','Mind, Body & Spirit','mind-body-spirit',94,0,0,0,1),
	(357,'shops','Music, Stage & Screen','music-stage-screen',94,0,0,0,1),
	(358,'shops','Poetry, Drama & Criticism','poetry-drama-criticism',94,0,0,0,1),
	(359,'shops','Reference','reference',94,0,0,0,1),
	(360,'shops','Religion & Spirituality','religion-spirituality',94,0,0,0,1),
	(361,'shops','Romance','romance',94,0,0,0,1),
	(362,'shops','Science & Nature','science-nature',94,0,0,0,1),
	(363,'shops','Science Fiction & Fantasy','science-fiction-fantasy',94,0,0,0,1),
	(364,'shops','Scientific, Technical & Medical','scientific-technical-medical',94,0,0,0,1),
	(365,'shops','Society, Politics & Philosophy','society-politics-philosophy',94,0,0,0,1),
	(366,'shops','Sports, Hobbies & Games','sports-hobbies-games',94,0,0,0,1),
	(367,'shops','Textbooks For University','textbooks-for-university',94,0,0,0,1),
	(368,'shops','Travel & Holiday','travel-holiday',94,0,0,0,1),
	(369,'shops','Haircare','haircare',60,0,0,0,1),
	(370,'shops','Shaving & Hair Removal','shaving-hair-removal',60,0,0,0,1),
	(371,'shops','Health Monitors','health-monitors',60,0,0,0,1),
	(372,'shops','Personal Care','personal-care',60,0,0,0,1),
	(373,'shops','Breast Care Products','breast-care-products',60,0,0,0,1),
	(374,'shops','Massager','massager',60,0,0,0,1),
	(375,'shops','Fitness Equipment','beauty-equipment-fitness-equipment',60,0,0,0,1),
	(376,'shops','Treadmill','treadmill',60,0,0,0,1),
	(377,'shops','Breast Pump','breast-pump',60,0,0,0,1),
	(378,'shops','Other Beauty Equipment','other-beauty-equipment',60,0,0,0,1),
	(379,'shops','Hair Salon Equipment','hair-salon-equipment',60,0,0,0,1),
	(380,'shops','Make Up','make-up',18,0,0,0,1),
	(381,'shops','Nails','nails',18,0,0,0,1),
	(382,'shops','Slimming','slimming',18,0,0,0,1),
	(383,'shops','Fragrance','fragrance',18,0,0,0,1),
	(384,'shops','Organic & Natural','organic-natural',18,0,0,0,1),
	(385,'shops','Men\'s Shaving','mens-shaving',18,0,0,0,1),
	(386,'shops','Men\'s Skincare','mens-skincare',18,0,0,0,1),
	(387,'shops','Men\'s Bodycare','mens-bodycare',18,0,0,0,1),
	(388,'shops','Men\'s Hair','mens-hair',18,0,0,0,1),
	(389,'shops','Men\'s Fragrance','mens-fragrance',18,0,0,0,1),
	(390,'shops','Gift\'s For Him','gifts-for-him',18,0,0,0,1),
	(391,'shops','Luxury Gifts','luxury-gifts',18,0,0,0,1),
	(392,'shops','Men\'s Toiletry & Wash Bags','mens-toiletry-wash-bags',18,0,0,0,1),
	(393,'shops','Men\'s Tanning & Make-Up','mens-tanning-make-up',18,0,0,0,1),
	(394,'shops','Men\'s Shavers','mens-shavers',18,0,0,0,1),
	(395,'shops','Men\'s Hair Trimmers','mens-hair-trimmers',18,0,0,0,1),
	(396,'shops','Gold Jewellery','gold-jewellery',14,0,0,0,1),
	(397,'shops','Silver Jewellery','silver-jewellery',14,0,0,0,1),
	(398,'shops','Imitation Jewellery','imitation-jewellery',14,0,0,0,1),
	(399,'shops','Gold Ring','gold-ring',396,0,0,0,1),
	(400,'shops','Gold Pendant','gold-pendant',396,0,0,0,1),
	(401,'shops','Gold Bracelet','gold-bracelet',396,0,0,0,1),
	(402,'shops','Gold Earrings','gold-earrings',396,0,0,0,1),
	(403,'shops','Gold Necklace','gold-necklace',396,0,0,0,1),
	(404,'shops','Gold Bangles','gold-bangles',396,0,0,0,1),
	(405,'shops','Silver Earrings','silver-earrings',397,0,0,0,1),
	(406,'shops','Silver Bracelet','silver-bracelet',397,0,0,0,1),
	(407,'shops','Silver Necklace','silver-necklace',397,0,0,0,1),
	(408,'shops','Silver Pendant','silver-pendant',397,0,0,0,1),
	(409,'shops','Diamond Ring','diamond-ring',265,0,0,0,1),
	(410,'shops','Diamond Pendant','diamond-pendant',265,0,0,0,1),
	(411,'shops','Diamond Bracelets','diamond-bracelets',265,0,0,0,1),
	(412,'shops','Diamond Earrings','diamond-earrings',265,0,0,0,1),
	(413,'shops','Diamond Necklace','diamond-necklace',265,0,0,0,1),
	(414,'shops','Diamond Bangles','diamond-bangles',265,0,0,0,1),
	(415,'shops','Imitation Earrings','imitation-earrings',398,0,0,0,1),
	(416,'shops','Imitation Necklace','imitation-necklace',398,0,0,0,1),
	(417,'shops','Imitation Bracelet','imitation-bracelet',398,0,0,0,1),
	(418,'shops','Imitation Pendant','imitation-pendant',398,0,0,0,1),
	(419,'shops','Jewellery sets','jewellery-sets',265,0,0,0,1),
	(420,'shops','Jewellery sets','gold-jewellery-jewellery-sets',396,0,0,0,1),
	(421,'shops','Stainless Jewellery','stainless-jewellery',14,0,0,0,1),
	(422,'shops','Bangles Jewellery','bangles-jewellery',421,0,0,0,1),
	(423,'shops','Charms Jewellery','charms-jewellery',421,0,0,0,1),
	(424,'shops','Necklaces','necklaces',421,0,0,0,1),
	(425,'shops','Bracelets','bracelets',421,0,0,0,1),
	(426,'shops','Earrings','earrings',421,0,0,0,1),
	(427,'shops','Rings','rings',421,0,0,0,1),
	(428,'shops','Men\'s Jewellery','mens-jewellery',14,0,0,0,1),
	(429,'shops','Men\'s Rings','mens-rings',428,0,0,0,1),
	(430,'shops','Men\'s Bracelets','mens-bracelets',428,0,0,0,1),
	(431,'shops','Gold-Tikkas','gold-tikkas',396,0,0,0,1),
	(432,'shops','Gold-Brooches','gold-brooches',396,0,0,0,1),
	(433,'shops','Diamond Watch','diamond-watch',428,0,0,0,1),
	(434,'shops','Pearl Watches','pearl-watches',428,0,0,0,1),
	(435,'shops','Cufflinks','cufflinks',428,0,0,0,1),
	(436,'shops','Tiepin','tiepin',428,0,0,0,1),
	(437,'shops','Solitaire Rings','solitaire-rings',428,0,0,0,1),
	(438,'shops','Special White Gold','special-white-gold',428,0,0,0,1),
	(439,'shops','Baby Jewellery','baby-jewellery',14,0,0,0,1),
	(440,'shops','Baby Bangles','baby-bangles',439,0,0,0,1),
	(441,'shops','Gold Vaddanams','gold-vaddanams',396,0,0,0,1),
	(442,'shops','Men\'s','mens',16,0,0,0,1),
	(443,'shops','Women\'s Watches','womens-watches',16,0,0,0,1),
	(444,'shops','Kid\'s Watches','kids-watches',16,0,0,0,1),
	(445,'shops','Pair Watches','pair-watches',16,0,0,0,1),
	(446,'shops','Sunglass','sunglass',14,0,0,0,1),
	(447,'shops','Mne\'s Sunglass','mnes-sunglass',446,0,0,0,1),
	(448,'shops','Women\'s Sunglass','womens-sunglass',446,0,0,0,1),
	(449,'shops','Kids Sunglass','kids-sunglass',446,0,0,0,1),
	(450,'shops','Contact Lence','contact-lence',446,0,0,0,1),
	(451,'shops','Accessories','accessories',446,0,0,0,1),
	(452,'shops','Optical Lens','optical-lens',446,0,0,0,1),
	(453,'shops','Intraocular Lenses','intraocular-lenses',446,0,0,0,1),
	(454,'shops','Bathroom Furniture','wood-furniture-bathroom-furniture',46,0,0,0,1),
	(455,'shops','Bedroom Furniture','bedroom-furniture',46,0,0,0,1),
	(456,'shops','Dining Room Furniture','dining-room-furniture',46,0,0,0,1),
	(457,'shops','Home Office Furniture','home-office-furniture',46,0,0,0,1),
	(458,'shops','Kids Bedroom Furniture','kids-bedroom-furniture',46,0,0,0,1),
	(459,'shops','Kitchen Furniture','kitchen-furniture',46,0,0,0,1),
	(460,'shops','Living Room Furniture','living-room-furniture',46,0,0,0,1),
	(461,'shops','Beds','beds',455,0,0,0,1),
	(462,'shops','Contemporary Furniture','contemporary-furniture',45,0,0,0,1),
	(463,'shops','Side and dining chairs','side-and-dining-chairs',462,0,0,0,1),
	(464,'shops','Armchairs&lounge chairs','armchairslounge-chairs',462,0,0,0,1),
	(465,'shops','bar&counter stools','barcounter-stools',462,0,0,0,1),
	(466,'shops','low stools','low-stools',462,0,0,0,1),
	(467,'shops','sofas','sofas',462,0,0,0,1),
	(468,'shops','benches','benches',462,0,0,0,1),
	(469,'shops','stacking chairs','stacking-chairs',462,0,0,0,1),
	(470,'shops','task&office chairs','taskoffice-chairs',462,0,0,0,1),
	(471,'shops','outdoor&patio furniture','outdoorpatio-furniture',462,0,0,0,1),
	(472,'shops','dining tables','dining-tables',462,0,0,0,1),
	(473,'shops','coffee&cocktail tables','coffeecocktail-tables',462,0,0,0,1),
	(474,'shops','side&end tables','sideend-tables',462,0,0,0,1),
	(475,'shops','work&office tables','contemporary-furniture-workoffice-tables',462,0,0,0,1),
	(476,'shops','wall mounted shelving','wall-mounted-shelving',462,0,0,0,1),
	(477,'shops','free standing shelving','free-standing-shelving',462,0,0,0,1),
	(478,'shops','storage','storage',462,0,0,0,1),
	(479,'shops','beds','contemporary-furniture-beds',462,0,0,0,1),
	(480,'shops','children\'s furniture','childrens-furniture',462,0,0,0,1),
	(481,'shops','Office Furniture','office-furniture',46,0,0,0,1),
	(482,'shops','Outdoor Furniture','outdoor-furniture',46,0,0,0,1),
	(483,'shops','Bedside Cabinets','bedside-cabinets',455,0,0,0,1),
	(484,'shops','Blanket Boxes','blanket-boxes',455,0,0,0,1),
	(485,'shops','Chest of Drawers','chest-of-drawers',455,0,0,0,1),
	(486,'shops','Dressing Tables','dressing-tables',455,0,0,0,1),
	(487,'shops','Mattresses','mattresses',455,0,0,0,1),
	(488,'shops','Mirrors','mirrors',455,0,0,0,1),
	(489,'shops','Wardrobes','wardrobes',455,0,0,0,1),
	(490,'shops','Bookcases & Cabinets','bookcases-cabinets',456,0,0,0,1),
	(491,'shops','Console Tables & Hall Tables','console-tables-hall-tables',456,0,0,0,1),
	(492,'shops','Dining Chairs','dining-chairs',456,0,0,0,1),
	(493,'shops','Dining Tables','dining-room-furniture-dining-tables',456,0,0,0,1),
	(494,'shops','Dining Tables & Chair Sets','dining-tables-chair-sets',456,0,0,0,1),
	(495,'shops','Dressers','dressers',456,0,0,0,1),
	(496,'shops','Sideboards','sideboards',456,0,0,0,1),
	(497,'shops','Benches','dining-room-furniture-benches',456,0,0,0,1),
	(498,'shops','Stools','stools',456,0,0,0,1),
	(499,'shops','Display Cabinets','display-cabinets',456,0,0,0,1),
	(500,'shops','Mirrors','dining-room-furniture-mirrors',456,0,0,0,1),
	(501,'shops','Shelving Units','shelving-units',456,0,0,0,1),
	(502,'shops','Shelves','shelves',456,0,0,0,1),
	(503,'shops','Dining Furniture Sets','dining-furniture-sets',456,0,0,0,1),
	(504,'shops','Small Tables','small-tables',460,0,0,0,1),
	(505,'shops','Cabinets','cabinets',460,0,0,0,1),
	(506,'shops','Sideboards','living-room-furniture-sideboards',460,0,0,0,1),
	(507,'shops','Display Cabinets','living-room-furniture-display-cabinets',460,0,0,0,1),
	(508,'shops','Drink Cabinets','drink-cabinets',460,0,0,0,1),
	(509,'shops','Bookcases','bookcases',460,0,0,0,1),
	(510,'shops','CD & DVD Unit Storage','cd-dvd-unit-storage',460,0,0,0,1),
	(511,'shops','Television Stands','television-stands',460,0,0,0,1),
	(512,'shops','Hallway Furniture','hallway-furniture',460,0,0,0,1),
	(513,'shops','Shelving Units','living-room-furniture-shelving-units',460,0,0,0,1),
	(514,'shops','Shelves','living-room-furniture-shelves',460,0,0,0,1),
	(515,'shops','Storage Trunks','storage-trunks',460,0,0,0,1),
	(516,'shops','Mirrors','living-room-furniture-mirrors',460,0,0,0,1),
	(517,'shops','Footstools','footstools',460,0,0,0,1),
	(518,'shops','Sofa','sofa',460,0,0,0,1),
	(519,'shops','Armchairs','armchairs',460,0,0,0,1),
	(520,'shops','Snugglers','snugglers',460,0,0,0,1),
	(521,'shops','Chair\'s','chairs',460,0,0,0,1),
	(522,'shops','Chaise Longues','chaise-longues',460,0,0,0,1),
	(523,'shops','Kitchen Trolleys','kitchen-trolleys',459,0,0,0,1),
	(524,'shops','Kitchen Racks & Stands','kitchen-racks-stands',459,0,0,0,1),
	(525,'shops','Tabels','tabels',459,0,0,0,1),
	(526,'shops','Counter Stools','counter-stools',459,0,0,0,1),
	(527,'shops','Childrens Wardrobes','childrens-wardrobes',458,0,0,0,1),
	(528,'shops','Kids Beds','kids-beds',458,0,0,0,1),
	(529,'shops','Toy/Storage Boxes','toystorage-boxes',458,0,0,0,1),
	(530,'shops','Chairs','kids-bedroom-furniture-chairs',458,0,0,0,1),
	(531,'shops','Desks','desks',458,0,0,0,1),
	(532,'shops','Kids Dressers','kids-dressers',458,0,0,0,1),
	(533,'shops','Kids Storage','kids-storage',458,0,0,0,1),
	(534,'shops','Rocking Chairs','rocking-chairs',458,0,0,0,1),
	(535,'shops','Bunk Beds','bunk-beds',458,0,0,0,1),
	(536,'shops','Computer Workstations','computer-workstations',481,0,0,0,1),
	(537,'shops','Conference Tables','conference-tables',481,0,0,0,1),
	(538,'shops','Ergonomic Chairs','ergonomic-chairs',481,0,0,0,1),
	(539,'shops','Executive Desks','executive-desks',481,0,0,0,1),
	(540,'shops','Home Office Furniture','office-furniture-home-office-furniture',481,0,0,0,1),
	(541,'shops','Office Chairs','office-chairs',481,0,0,0,1),
	(542,'shops','Office Desks','office-desks',481,0,0,0,1),
	(543,'shops','Office Reception Seating','office-reception-seating',481,0,0,0,1),
	(544,'shops','Stacking Chairs','office-furniture-stacking-chairs',481,0,0,0,1),
	(545,'shops','Storage File Cabinets','storage-file-cabinets',481,0,0,0,1),
	(546,'shops','Storage File Cabinets','office-furniture-storage-file-cabinets',481,0,0,0,1),
	(547,'shops','Task Chairs','task-chairs',481,0,0,0,1),
	(548,'shops','Hallway','hallway',46,0,0,0,1),
	(549,'shops','Fruits & Vegetables','fruits-vegetables',26,0,0,0,1),
	(550,'shops','Meat','meat',26,0,0,0,1),
	(551,'shops','Sea Food','sea-food',26,0,0,0,1),
	(552,'shops','Entrees','entrees',26,0,0,0,1),
	(553,'shops','Pizza & Pasta','pizza-pasta',25,0,0,0,1),
	(554,'shops','Side Dishes','side-dishes',26,0,0,0,1),
	(555,'shops','Snacks','snacks',25,0,0,0,1),
	(556,'shops','Desserts','desserts',26,0,0,0,1),
	(557,'shops','Pizza & Pasta','foods-pizza-pasta',24,0,7,11,1),
	(561,'shops','Appetisers','foods-pizza-pasta-appetisers',557,0,0,0,1),
	(562,'shops','Salad','salad',557,0,0,0,1),
	(563,'shops','Pasta','pasta',557,0,0,0,1),
	(564,'shops','Toppings','toppings',557,0,0,0,1),
	(565,'shops','Burger','burger',25,0,0,0,1),
	(566,'shops','Bevarage','bevarage',25,0,0,0,1),
	(567,'shops','Buns Item','buns-item',25,0,0,0,1),
	(568,'shops','Bread Item','bread-item',25,0,0,0,1),
	(569,'shops','Pizza Item','pizza-item',25,0,0,0,1),
	(570,'shops','Roll Item','roll-item',25,0,0,0,1),
	(571,'shops','Puff Item','puff-item',25,0,0,0,1),
	(572,'shops','Danish Item','danish-item',25,0,0,0,1),
	(573,'shops','Dount Item','dount-item',25,0,0,0,1),
	(574,'shops','Sandwich Item','sandwich-item',25,0,0,0,1),
	(575,'shops','Pie Item','pie-item',25,0,0,0,1),
	(576,'shops','Toast Item','toast-item',25,0,0,0,1),
	(577,'shops','Cake Item','cake-item',25,0,0,0,1),
	(578,'shops','Patisseries Item','patisseries-item',25,0,0,0,1),
	(579,'shops','Cookies Item','cookies-item',25,0,0,0,1),
	(580,'shops','Fried Chicken','fried-chicken',25,3,0,0,1),
	(581,'shops','Chicken Curry','chicken-curry',557,3,1,0,1),
	(582,'shops','Fried Chicken','foods-pizza-pasta-fried-chicken',557,3,0,0,1),
	(586,'shops','Test Test Test','test-test-test',0,0,0,0,1),
	(587,'shops','Test','test-test-test-test',586,0,0,0,1),
	(588,'shops','Test 1','test-1',0,0,4,0,1),
	(589,'shops','Test','test',588,0,0,0,1),
	(590,'shops','Test','test-test',589,0,0,0,1),
	(591,'shops','New Service test','new-service-test',0,0,5,0,1),
	(592,'shops','agent id 2','mens-wears-agent-id-2',2,1,21,0,0),
	(593,'shops','agent id 3','handicrafts-agent-id-3',9,1,4,0,1),
	(594,'shops','agent id 4','womens-wears-agent-id-4',3,1,0,0,1),
	(595,'shops','sfasfsdsdf','boutique-batik-sfasfsdsdf',5,1,0,0,1),
	(599,'shops','Test Sub','test-sub',589,3,1,0,1),
	(600,'shops','Test Sub1','test-test-sub1',589,3,0,0,1),
	(602,'shop','Test Sub 1','gents-women-parler-test-sub-1',78,73,1,0,1),
	(603,'shop','xcxzcxzczxc','event-management-xcxzcxzczxc',87,73,0,0,1),
	(604,'shop','scxcxcvxzczxc','gents-women-parler-scxcxcvxzczxc',78,73,0,0,1),
	(605,'shop','Mobile Phone','mobile-phone',0,0,0,0,1),
	(606,'shop','Apple','mobile-phone-apple',605,0,0,0,1),
	(607,'shop','Nokia','mobile-phone-nokia',605,0,0,0,1),
	(608,'shop','Sumsung','mobile-phone-sumsung',605,0,0,0,1),
	(609,'shop','Symphoney','mobile-phone-symphoney',605,0,0,0,1),
	(610,'shop','Sony','mobile-phone-sony',605,0,0,0,1),
	(611,'shop','Automibiles','automibiles',0,0,0,0,1),
	(612,'shop','Car','automibiles-car',611,0,0,0,1),
	(613,'shop','Motorcycle','automibiles-motorcycle',611,0,0,0,1),
	(614,'shop','Bycycle','automibiles-bycycle',611,0,0,0,1),
	(615,'shop','Bus','automibiles-bus',611,0,0,0,1),
	(616,'shop','Truck','automibiles-truck',611,0,0,0,1),
	(617,'shop','Pickup','automibiles-pickup',611,0,0,0,1),
	(618,'shop','Bajaj','automibiles-motorcycle-bajaj',613,0,0,0,1),
	(619,'shop','Hero Honda','automibiles-motorcycle-hero-honda',613,0,0,0,1),
	(620,'shop','Yamaha','automibiles-motorcycle-yamaha',613,0,0,0,1),
	(621,'shop','Honda','automibiles-motorcycle-honda',613,0,0,0,1),
	(622,'shop','TVS','automibiles-motorcycle-tvs',613,0,0,0,1),
	(623,'shop','Walton','automibiles-motorcycle-walton',613,0,0,0,1),
	(624,'shop','Runner','automibiles-motorcycle-runner',613,0,0,0,1);

/*!40000 ALTER TABLE `product_category` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table product_category_custom
# ------------------------------------------------------------

DROP TABLE IF EXISTS `product_category_custom`;

CREATE TABLE `product_category_custom` (
  `category_id` int(10) NOT NULL DEFAULT '0',
  `agent_uid` int(10) DEFAULT NULL,
  `category_name` varchar(200) DEFAULT NULL,
  `parent_id` int(10) DEFAULT '0',
  `ordering` tinyint(10) NOT NULL DEFAULT '0',
  `status` int(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `product_category_custom` WRITE;
/*!40000 ALTER TABLE `product_category_custom` DISABLE KEYS */;

INSERT INTO `product_category_custom` (`category_id`, `agent_uid`, `category_name`, `parent_id`, `ordering`, `status`)
VALUES
	(41572,4,'Coffee1',25,1,1),
	(43431,4,'Coffee',25,0,1);

/*!40000 ALTER TABLE `product_category_custom` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table product_category_ordering
# ------------------------------------------------------------

DROP TABLE IF EXISTS `product_category_ordering`;

CREATE TABLE `product_category_ordering` (
  `agent_uid` int(11) DEFAULT NULL,
  `parent_id` int(10) DEFAULT '0',
  `category_id` int(11) DEFAULT NULL,
  `ordering` tinyint(10) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `product_category_ordering` WRITE;
/*!40000 ALTER TABLE `product_category_ordering` DISABLE KEYS */;

INSERT INTO `product_category_ordering` (`agent_uid`, `parent_id`, `category_id`, `ordering`)
VALUES
	(1,0,3,0),
	(1,0,4,1),
	(1,0,2,2),
	(1,0,5,3),
	(1,0,8,4),
	(1,0,9,5),
	(1,0,11,6),
	(1,0,12,7),
	(1,0,13,8),
	(1,0,25,9),
	(1,0,120,10),
	(1,0,557,11);

/*!40000 ALTER TABLE `product_category_ordering` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table product_expired
# ------------------------------------------------------------

DROP TABLE IF EXISTS `product_expired`;

CREATE TABLE `product_expired` (
  `expired_id` tinyint(1) NOT NULL AUTO_INCREMENT,
  `day` tinyint(5) NOT NULL,
  `title` varchar(50) NOT NULL,
  `status` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`expired_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `product_expired` WRITE;
/*!40000 ALTER TABLE `product_expired` DISABLE KEYS */;

INSERT INTO `product_expired` (`expired_id`, `day`, `title`, `status`)
VALUES
	(1,15,'15 Days',1),
	(2,30,'1 Month',1),
	(3,60,'2 Months',1),
	(4,90,'3 Months',1);

/*!40000 ALTER TABLE `product_expired` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table product_template_bags
# ------------------------------------------------------------

DROP TABLE IF EXISTS `product_template_bags`;

CREATE TABLE `product_template_bags` (
  `product_template_id` int(10) NOT NULL,
  `made_in` varchar(200) DEFAULT NULL,
  `size` varchar(200) DEFAULT NULL,
  `color` varchar(200) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `gender` int(3) DEFAULT NULL,
  `material` varchar(250) DEFAULT NULL,
  `technics` varchar(250) DEFAULT NULL,
  `washing_instructions` varchar(250) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `product_template_bags` WRITE;
/*!40000 ALTER TABLE `product_template_bags` DISABLE KEYS */;

INSERT INTO `product_template_bags` (`product_template_id`, `made_in`, `size`, `color`, `product_id`, `gender`, `material`, `technics`, `washing_instructions`)
VALUES
	(1,'Dhaka','34,36,38','Red,Green,Blue,White',NULL,NULL,NULL,NULL,NULL);

/*!40000 ALTER TABLE `product_template_bags` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table product_template_clothing
# ------------------------------------------------------------

DROP TABLE IF EXISTS `product_template_clothing`;

CREATE TABLE `product_template_clothing` (
  `product_template_id` int(10) NOT NULL,
  `product_id` int(10) DEFAULT NULL,
  `made_in` varchar(200) DEFAULT NULL,
  `size` varchar(200) DEFAULT NULL,
  `color` varchar(200) DEFAULT NULL,
  `gender` int(3) DEFAULT NULL,
  `material` varchar(250) DEFAULT NULL,
  `technics` varchar(250) DEFAULT NULL,
  `washing_instructions` varchar(250) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `product_template_clothing` WRITE;
/*!40000 ALTER TABLE `product_template_clothing` DISABLE KEYS */;

INSERT INTO `product_template_clothing` (`product_template_id`, `product_id`, `made_in`, `size`, `color`, `gender`, `material`, `technics`, `washing_instructions`)
VALUES
	(1,NULL,'Dhaka','34,36,38','Red,Green,Blue,White',NULL,NULL,NULL,NULL),
	(0,22,'Dhaka','34,36,38','Red,Green,Blue,White,Grey',NULL,NULL,NULL,NULL);

/*!40000 ALTER TABLE `product_template_clothing` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table product_template_food
# ------------------------------------------------------------

DROP TABLE IF EXISTS `product_template_food`;

CREATE TABLE `product_template_food` (
  `product_template_id` int(10) NOT NULL,
  `made_in` varchar(200) DEFAULT NULL,
  `size` varchar(200) DEFAULT NULL,
  `ingredients` text,
  `product_id` int(11) DEFAULT NULL,
  `material` varchar(250) DEFAULT NULL,
  `technics` varchar(250) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `product_template_food` WRITE;
/*!40000 ALTER TABLE `product_template_food` DISABLE KEYS */;

INSERT INTO `product_template_food` (`product_template_id`, `made_in`, `size`, `ingredients`, `product_id`, `material`, `technics`)
VALUES
	(1,'Dhaka','Familly,Large,Midum,Small','Sugar,Milk, Meat, Salt',NULL,'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec mattis.','Hand made'),
	(0,'Dhaka','Large,Midum,Small','Sugar,Milk, Meat, Salt',31,'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec mattis.','Hand made'),
	(0,'Dhaka','Familly,Large,Midum,Small','Chicken,Bread,Vegatiable',32,'','Hand made'),
	(0,'Dhaka','Familly,Large,Midum,Small','Sugar,Milk, Meat, Salt',35,'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec mattis.','Hand made');

/*!40000 ALTER TABLE `product_template_food` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table product_template_manage
# ------------------------------------------------------------

DROP TABLE IF EXISTS `product_template_manage`;

CREATE TABLE `product_template_manage` (
  `product_template_manage_id` int(10) NOT NULL AUTO_INCREMENT,
  `template_group` int(1) DEFAULT '1',
  `product_template_name` varchar(200) DEFAULT NULL,
  `product_template_type` tinyint(1) DEFAULT '1',
  `product_template_layout` varchar(200) DEFAULT NULL,
  `category_id` text,
  `status` int(1) DEFAULT '1',
  PRIMARY KEY (`product_template_manage_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `product_template_manage` WRITE;
/*!40000 ALTER TABLE `product_template_manage` DISABLE KEYS */;

INSERT INTO `product_template_manage` (`product_template_manage_id`, `template_group`, `product_template_name`, `product_template_type`, `product_template_layout`, `category_id`, `status`)
VALUES
	(1,1,'Clothing & Accessories',1,'product_template_clothing','a:14:{i:0;s:1:\"1\";i:1;s:1:\"2\";i:2;s:1:\"3\";i:3;s:1:\"4\";i:4;s:3:\"120\";i:5;s:2:\"11\";i:6;s:2:\"12\";i:7;s:2:\"46\";i:8;s:3:\"266\";i:9;s:3:\"267\";i:10;s:3:\"268\";i:11;s:3:\"269\";i:12;s:3:\"462\";i:13;s:3:\"587\";}',1),
	(5,1,'Food & Drinks',1,'product_template_food','a:14:{i:0;s:2:\"13\";i:1;s:2:\"10\";i:2;s:3:\"168\";i:3;s:3:\"271\";i:4;s:3:\"274\";i:5;s:3:\"273\";i:6;s:3:\"275\";i:7;s:2:\"25\";i:8;s:2:\"26\";i:9;s:2:\"27\";i:10;s:2:\"28\";i:11;s:2:\"29\";i:12;s:2:\"30\";i:13;s:3:\"276\";}',1),
	(6,1,'Comunity Center',2,'comunity_center','a:1:{i:0;s:3:\"101\";}',1),
	(7,1,'Dental Chember',2,'dental_chember','a:1:{i:0;s:3:\"111\";}',1),
	(11,2,'Test service',1,'czx','a:1:{i:0;s:3:\"591\";}',1);

/*!40000 ALTER TABLE `product_template_manage` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table product_template_metadata
# ------------------------------------------------------------

DROP TABLE IF EXISTS `product_template_metadata`;

CREATE TABLE `product_template_metadata` (
  `product_template_metadata_id` int(10) NOT NULL AUTO_INCREMENT,
  `product_template_id` int(10) NOT NULL,
  `meta_label` varchar(200) DEFAULT NULL,
  `meta_description` text,
  PRIMARY KEY (`product_template_metadata_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `product_template_metadata` WRITE;
/*!40000 ALTER TABLE `product_template_metadata` DISABLE KEYS */;

INSERT INTO `product_template_metadata` (`product_template_metadata_id`, `product_template_id`, `meta_label`, `meta_description`)
VALUES
	(12,1,'Product -1','&quot;Alabama&quot;,&quot;Alaska&quot;,&quot;Arizona&quot;,&quot;Arkansas&quot;,&quot;California&quot;,&quot;Colorado&quot;,&quot;Connecticut&quot;,&quot;Delaware&quot;,&quot;Florida&quot;,&quot;Georgia&quot;,&quot;Hawaii&quot;,&quot;Idaho&quot;,&quot;Illinois&quot;,&quot;Indiana&quot;,&quot;Iowa&quot;,&quot;Kansas&quot;,&quot;Kentucky&quot;,&quot;Louisiana&quot;,&quot;Maine&quot;,&quot;Maryland&quot;,&quot;Massachusetts&quot;,&quot;Michigan&quot;,&quot;Minnesota&quot;,&quot;Mississippi&quot;,&quot;Missouri&quot;,&quot;Montana&quot;,&quot;Nebraska&quot;,&quot;Nevada&quot;,&quot;New Hampshire&quot;,&quot;New Jersey&quot;,&quot;New Mexico&quot;,&quot;New York&quot;,&quot;North Dakota&quot;,&quot;North Carolina&quot;,&quot;Ohio&quot;,&quot;Oklahoma&quot;,&quot;Oregon&quot;,&quot;Pennsylvania&quot;,&quot;Rhode Island&quot;,&quot;South Carolina&quot;,&quot;South Dakota&quot;,&quot;Tennessee&quot;,&quot;Texas&quot;,&quot;Utah&quot;,&quot;Vermont&quot;,&quot;Virginia&quot;,&quot;Washington&quot;,&quot;West Virginia&quot;,&quot;Wisconsin&quot;,&quot;Wyoming&quot;'),
	(10,11,'test','test1'),
	(11,11,'test1','test2'),
	(13,1,'Product -2','&quot;Alabama&quot;,&quot;Alaska&quot;,&quot;Arizona&quot;,&quot;Arkansas&quot;,&quot;California&quot;,&quot;Colorado&quot;,&quot;Connecticut&quot;,&quot;Delaware&quot;,&quot;Florida&quot;,&quot;Georgia&quot;,&quot;Hawaii&quot;,&quot;Idaho&quot;,&quot;Illinois&quot;,&quot;Indiana&quot;,&quot;Iowa&quot;,&quot;Kansas&quot;,&quot;Kentucky&quot;,&quot;Louisiana&quot;,&quot;Maine&quot;,&quot;Maryland&quot;,&quot;Massachusetts&quot;,&quot;Michigan&quot;,&quot;Minnesota&quot;,&quot;Mississippi&quot;,&quot;Missouri&quot;,&quot;Montana&quot;,&quot;Nebraska&quot;,&quot;Nevada&quot;,&quot;New Hampshire&quot;,&quot;New Jersey&quot;,&quot;New Mexico&quot;,&quot;New York&quot;,&quot;North Dakota&quot;,&quot;North Carolina&quot;,&quot;Ohio&quot;,&quot;Oklahoma&quot;,&quot;Oregon&quot;,&quot;Pennsylvania&quot;,&quot;Rhode Island&quot;,&quot;South Carolina&quot;,&quot;South Dakota&quot;,&quot;Tennessee&quot;,&quot;Texas&quot;,&quot;Utah&quot;,&quot;Vermont&quot;,&quot;Virginia&quot;,&quot;Washington&quot;,&quot;West Virginia&quot;,&quot;Wisconsin&quot;,&quot;Wyoming&quot;'),
	(14,1,'Product -3','&quot;Alabama&quot;,&quot;Alaska&quot;,&quot;Arizona&quot;,&quot;Arkansas&quot;,&quot;California&quot;,&quot;Colorado&quot;,&quot;Connecticut&quot;,&quot;Delaware&quot;,&quot;Florida&quot;,&quot;Georgia&quot;,&quot;Hawaii&quot;,&quot;Idaho&quot;,&quot;Illinois&quot;,&quot;Indiana&quot;,&quot;Iowa&quot;,&quot;Kansas&quot;,&quot;Kentucky&quot;,&quot;Louisiana&quot;,&quot;Maine&quot;,&quot;Maryland&quot;,&quot;Massachusetts&quot;,&quot;Michigan&quot;,&quot;Minnesota&quot;,&quot;Mississippi&quot;,&quot;Missouri&quot;,&quot;Montana&quot;,&quot;Nebraska&quot;,&quot;Nevada&quot;,&quot;New Hampshire&quot;,&quot;New Jersey&quot;,&quot;New Mexico&quot;,&quot;New York&quot;,&quot;North Dakota&quot;,&quot;North Carolina&quot;,&quot;Ohio&quot;,&quot;Oklahoma&quot;,&quot;Oregon&quot;,&quot;Pennsylvania&quot;,&quot;Rhode Island&quot;,&quot;South Carolina&quot;,&quot;South Dakota&quot;,&quot;Tennessee&quot;,&quot;Texas&quot;,&quot;Utah&quot;,&quot;Vermont&quot;,&quot;Virginia&quot;,&quot;Washington&quot;,&quot;West Virginia&quot;,&quot;Wisconsin&quot;,&quot;Wyoming&quot;'),
	(15,1,'Product-4','&quot;Alabama&quot;,&quot;Alaska&quot;,&quot;Arizona&quot;,&quot;Arkansas&quot;,&quot;California&quot;,&quot;Colorado&quot;,&quot;Connecticut&quot;,&quot;Delaware&quot;,&quot;Florida&quot;,&quot;Georgia&quot;,&quot;Hawaii&quot;,&quot;Idaho&quot;,&quot;Illinois&quot;,&quot;Indiana&quot;,&quot;Iowa&quot;,&quot;Kansas&quot;,&quot;Kentucky&quot;,&quot;Louisiana&quot;,&quot;Maine&quot;,&quot;Maryland&quot;,&quot;Massachusetts&quot;,&quot;Michigan&quot;,&quot;Minnesota&quot;,&quot;Mississippi&quot;,&quot;Missouri&quot;,&quot;Montana&quot;,&quot;Nebraska&quot;,&quot;Nevada&quot;,&quot;New Hampshire&quot;,&quot;New Jersey&quot;,&quot;New Mexico&quot;,&quot;New York&quot;,&quot;North Dakota&quot;,&quot;North Carolina&quot;,&quot;Ohio&quot;,&quot;Oklahoma&quot;,&quot;Oregon&quot;,&quot;Pennsylvania&quot;,&quot;Rhode Island&quot;,&quot;South Carolina&quot;,&quot;South Dakota&quot;,&quot;Tennessee&quot;,&quot;Texas&quot;,&quot;Utah&quot;,&quot;Vermont&quot;,&quot;Virginia&quot;,&quot;Washington&quot;,&quot;West Virginia&quot;,&quot;Wisconsin&quot;,&quot;Wyoming&quot;');

/*!40000 ALTER TABLE `product_template_metadata` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table sell_offer
# ------------------------------------------------------------

DROP TABLE IF EXISTS `sell_offer`;

CREATE TABLE `sell_offer` (
  `sell_offer_id` tinyint(10) NOT NULL AUTO_INCREMENT,
  `offer_title` varchar(200) DEFAULT NULL,
  `offer_description` text,
  `status` tinyint(1) DEFAULT '0',
  `slug` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`sell_offer_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `sell_offer` WRITE;
/*!40000 ALTER TABLE `sell_offer` DISABLE KEYS */;

INSERT INTO `sell_offer` (`sell_offer_id`, `offer_title`, `offer_description`, `status`, `slug`)
VALUES
	(1,'Eid Offer',NULL,1,'eid-offer'),
	(2,'Summer Offer',NULL,1,'summer-offer'),
	(3,'Wintter',NULL,1,'wintter'),
	(4,'Boishaki',NULL,1,'boishaki'),
	(5,'Independen Day',NULL,1,'independen-day'),
	(6,'International Language Day',NULL,1,'international-Language-day'),
	(7,'Puja Offer',NULL,1,'puja-offer');

/*!40000 ALTER TABLE `sell_offer` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table settings
# ------------------------------------------------------------

DROP TABLE IF EXISTS `settings`;

CREATE TABLE `settings` (
  `settings_id` int(10) NOT NULL AUTO_INCREMENT,
  `settings_name` varchar(200) NOT NULL,
  `settings_slug` varchar(200) DEFAULT NULL,
  `parent_id` int(10) DEFAULT '0',
  `ordering` tinyint(10) DEFAULT '0',
  `status` int(2) DEFAULT '1',
  PRIMARY KEY (`settings_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;

INSERT INTO `settings` (`settings_id`, `settings_name`, `settings_slug`, `parent_id`, `ordering`, `status`)
VALUES
	(1,'Store type','store-type',0,0,2),
	(2,'Location Name','location-name',0,0,1),
	(3,'Brand Shop','brand-shop',0,0,1),
	(4,'Lavel','lavel',0,0,1),
	(5,'Condition','condition',0,0,1),
	(6,'Information Management','information-management',0,0,1),
	(7,'Jewellery Type','jewellery-type',0,0,1),
	(8,'Karate Type','karate-type',0,0,1),
	(9,'Warrinty Type','warrinty-type',0,0,1),
	(10,'Warrinty Time','warrinty-time',0,0,2),
	(11,'Product Status','product-status',0,0,2),
	(13,'Seller','seller',1,0,2),
	(14,'Service','service',1,0,1),
	(15,'Buyer','buyer',1,0,1),
	(16,'Wholesaler','wholesaler',1,0,1),
	(17,'Dhanmondi','dhanmondi',2,0,1),
	(18,'Mohammadpur','mohammadpur',2,0,1),
	(19,'Framgate','framgate',2,0,1),
	(20,'New Market','new-market',0,0,1),
	(21,'Grand Floor','grand-floor',4,0,1),
	(22,'First Floor','first-floor',4,0,1),
	(23,'Second Floor','second-floor',4,0,1),
	(24,'Replacement','replacement',9,0,1),
	(25,'Dealer','dealer',9,0,1),
	(26,'Manufacturer','manufacturer',9,0,1),
	(27,'Guarantee','guarantee',0,0,2),
	(28,'Money-back','money-back',27,0,1),
	(29,'Replacement','guarantee-replacement',27,0,1),
	(30,'New','new',5,0,1),
	(31,'Brand New','brand-new',5,0,1),
	(32,'Used','used',5,0,1),
	(33,'Avaliable1','avaliable1',11,0,1),
	(34,'Under Discuss','under-discuss',11,0,1),
	(35,'Digital compass','digital-compass',6,0,1),
	(36,'SNS integration','sns-integration',6,0,1),
	(37,'Organizer','organizer',6,0,1),
	(38,'Document viewer/editor','document-viewereditor',6,0,1),
	(39,'Image/video editor','imagevideo-editor',6,0,1),
	(40,'Google Search','google-search',6,0,1),
	(41,'Face Book','face-book',6,0,1),
	(42,'Maps','maps',6,0,1),
	(43,'Gmail','gmail',6,0,1),
	(44,'YouTube','youtube',6,0,1),
	(45,'Calendar','calendar',6,0,1),
	(46,'Google Talk','google-talk',6,0,1),
	(47,'Picasa integration','picasa-integration',6,0,1),
	(48,'Voice memo/dial','voice-memodial',6,0,1),
	(49,'Yahoo Mail','yahoo-mail',6,0,1),
	(50,'Sell & Buy Guide','sell-buy-guide',0,0,2),
	(51,'Seller Guide','seller-guide',50,0,1),
	(52,'Buyer Guide','buyer-guide',50,0,1),
	(53,'Our Services','our-services',50,0,1),
	(54,'Buyer Services','buyer-services',50,0,1),
	(55,'Browse and Select','browse-and-select',50,0,1),
	(56,'Login or Register','login-or-register',50,0,1),
	(57,'Review Your Order','review-your-order',50,0,1),
	(58,'Payment & Shipment','payment-shipment',50,0,1),
	(59,'Exibition Type','exibition-type',0,0,1),
	(60,'Trade Show','trade-show',59,0,1),
	(61,'Corporate Activities','corporate-activities',59,0,1),
	(62,'Advertisment Position','advertisment-position',0,0,1),
	(63,'Left position','left-position',62,0,1),
	(64,'Right Position','right-position',62,0,1),
	(65,'Top position','top-position',62,0,1),
	(66,'Bottom Position','bottom-position',62,0,1),
	(67,'Quantity Package','quantity-package',0,0,1),
	(68,'Pics','pics',67,0,1),
	(69,'Sets','sets',67,0,1),
	(70,'Dozons','dozons',67,0,1),
	(71,'Listing sort order','listing-sort-order',0,0,1),
	(72,'Date(old to new)','dateold-to-new',71,0,1),
	(73,'Date(new to old)','datenew-to-old',71,0,1),
	(74,'Price(low to heigh)','pricelow-to-heigh',71,0,1),
	(75,'Price(heigh to low)','priceheigh-to-low',71,0,1),
	(76,'Order Status','order-status',0,0,1),
	(77,'Declined','declined',76,0,1),
	(78,'Failed','failed',76,0,1),
	(79,'Complete','complete',76,0,1),
	(80,'Not finished','not-finished',76,0,1),
	(81,'Queued','queued',76,0,1),
	(82,'Processed','processed',76,0,1),
	(83,'Backordered','backordered',76,0,1),
	(84,'Check Out System','check-out-system',0,0,1),
	(85,'Fast Lane Checkout','fast-lane-checkout',84,0,1),
	(86,'One page AJAX checkout','one-page-ajax-checkout',84,0,1),
	(87,'City','city',0,0,1),
	(88,'Dhaka','dhaka',87,0,1),
	(89,'Barisal','barisal',87,0,1),
	(90,'Khulna','khulna',87,0,1),
	(91,'Currency Format','currency-format',0,0,1),
	(92,'Tk 9.99','tk-9.99',91,0,1),
	(93,'9.99Tk','9.99tk',91,0,1),
	(94,'9.99 Tk','9.99-tk',91,0,1),
	(95,'Tk 9.99','currency-format-tk-9.99',91,0,1),
	(96,'Membership Type','membership-type',0,0,1),
	(97,'Premium','premium',96,0,1),
	(98,'Wholesale','wholesale',96,0,1),
	(99,'General User','general-user',96,0,1),
	(100,'Extra Charge Type','extra-charge-type',0,0,1),
	(101,'%','',100,0,1),
	(102,'Tk','tk',100,0,1),
	(103,'Mall Open Time','mall-open-time',0,0,1),
	(104,'09.00 AM','09.00-am',103,0,1),
	(105,'10.00 AM','10.00-am',103,0,1),
	(106,'Mall Close Time','mall-close-time',0,0,1),
	(107,'07.00 PM','07.00-pm',106,0,1),
	(108,'07.30 PM','07.30-pm',106,0,1),
	(109,'Day name','day-name',0,0,1),
	(110,'Sunday','sunday',109,0,1),
	(111,'Monday','monday',109,0,1),
	(112,'Tuesday','tuesday',109,0,1),
	(113,'Wednesday','wednesday',109,0,1),
	(114,'Thursday','thursday',109,0,1),
	(115,'Friday','friday',109,0,1),
	(116,'Saturday','saturday',109,0,1),
	(117,'Lalmatia','lalmatia',2,0,1),
	(118,'Organization Type','organization-type',0,0,1),
	(119,'Clent','clent',118,0,1),
	(120,'Vendor','vendor',118,0,1),
	(12,'Shopping mall','shopping-mall',1,0,1),
	(121,'Srrvice Type','srrvice-type',0,0,1),
	(122,'Product Base','product-base',121,0,1),
	(123,'Information Base','information-base',121,0,1),
	(124,'Month Name','month-name',0,0,1),
	(125,'Jan','jan',124,0,1),
	(126,'Feb','feb',124,0,1),
	(127,'Mar','mar',124,0,1),
	(128,'Apr','apr',124,0,1),
	(129,'May','may',124,0,1),
	(130,'Jun','jun',124,0,1),
	(131,'Jul','jul',124,0,1),
	(132,'Aug','aug',124,0,1),
	(133,'Sep','sep',124,0,1),
	(134,'Oct','oct',124,0,1),
	(135,'Nov','nov',124,0,1),
	(136,'Dec','dec',124,0,1),
	(137,'Designation','designation',0,0,1),
	(138,'Propitor','propitor',137,0,1),
	(139,'Owner','owner',137,0,1),
	(140,'Fair Type','fair-type',0,0,1),
	(141,'Ongoing','ongoing',140,0,1),
	(142,'Upcoming','upcoming',140,0,1),
	(143,'Pre-planing','pre-planing',140,0,1),
	(144,'Gulshan','gulshan',2,0,1),
	(145,'Banani','banani',2,0,1),
	(146,'Gulistan','gulistan',2,0,1),
	(147,'Palton','palton',0,0,1),
	(148,'Mirpur 1','mirpur-1',2,0,1),
	(149,'Mirpur 10','mirpur-10',2,0,1),
	(150,'Malibagh','malibagh',0,0,1),
	(151,'Motijheel','motijheel',2,0,1),
	(152,'Mohakhali','mohakhali',2,0,1),
	(153,'Shahabagh','shahabagh',2,0,1),
	(154,'Mohammudpur','mohammudpur',2,0,1),
	(155,'Eliphent Road','eliphent-road',2,0,1);

/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table settings_bank
# ------------------------------------------------------------

DROP TABLE IF EXISTS `settings_bank`;

CREATE TABLE `settings_bank` (
  `agent_uid` bigint(20) DEFAULT NULL,
  `bank_name` int(10) DEFAULT NULL,
  `branch_name` varchar(100) DEFAULT NULL,
  `account_name` varchar(100) DEFAULT NULL,
  `account_no` varchar(100) DEFAULT NULL,
  `account_type` int(2) DEFAULT NULL,
  `branch_location` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



# Dump of table settings_common_image_size
# ------------------------------------------------------------

DROP TABLE IF EXISTS `settings_common_image_size`;

CREATE TABLE `settings_common_image_size` (
  `settings_common_image_size_id` int(11) NOT NULL AUTO_INCREMENT,
  `settings_common_image_size_name` varchar(250) DEFAULT NULL,
  `large_image_width` int(11) DEFAULT NULL,
  `large_image_height` int(11) DEFAULT NULL,
  `crop_image_width` int(11) DEFAULT NULL,
  `crop_image_height` int(11) DEFAULT NULL,
  `crop_image_left` int(10) DEFAULT NULL,
  `crop_image_top` int(10) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`settings_common_image_size_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `settings_common_image_size` WRITE;
/*!40000 ALTER TABLE `settings_common_image_size` DISABLE KEYS */;

INSERT INTO `settings_common_image_size` (`settings_common_image_size_id`, `settings_common_image_size_name`, `large_image_width`, `large_image_height`, `crop_image_width`, `crop_image_height`, `crop_image_left`, `crop_image_top`, `status`)
VALUES
	(1,'Mall Advertisment Image Size',450,250,300,200,1,1,0);

/*!40000 ALTER TABLE `settings_common_image_size` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table settings_css_body
# ------------------------------------------------------------

DROP TABLE IF EXISTS `settings_css_body`;

CREATE TABLE `settings_css_body` (
  `table_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `agent_uid` bigint(20) DEFAULT NULL,
  `body_bgcolor` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`table_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `settings_css_body` WRITE;
/*!40000 ALTER TABLE `settings_css_body` DISABLE KEYS */;

INSERT INTO `settings_css_body` (`table_id`, `agent_uid`, `body_bgcolor`)
VALUES
	(1155,2181,''),
	(1156,1,NULL),
	(1157,0,''),
	(1158,5,NULL),
	(1160,11,NULL),
	(1165,16,NULL),
	(1166,17,NULL),
	(1167,18,NULL),
	(1168,19,NULL),
	(1179,30,NULL),
	(1180,31,NULL),
	(1181,32,NULL),
	(1182,33,NULL),
	(1183,35,NULL),
	(1184,36,NULL),
	(1185,37,NULL),
	(1186,38,NULL),
	(1187,39,NULL),
	(1188,40,NULL),
	(1189,41,NULL),
	(1190,42,NULL),
	(1191,43,NULL),
	(1192,44,NULL),
	(1193,3,NULL),
	(1194,73,NULL);

/*!40000 ALTER TABLE `settings_css_body` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table settings_css_footer
# ------------------------------------------------------------

DROP TABLE IF EXISTS `settings_css_footer`;

CREATE TABLE `settings_css_footer` (
  `table_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `agent_uid` bigint(20) DEFAULT NULL,
  `bgcolor_top` varchar(7) DEFAULT NULL,
  `footer_bgcolor` varchar(7) DEFAULT NULL,
  `footer_text_color` varchar(7) DEFAULT NULL,
  `link_color` varchar(7) DEFAULT NULL,
  `footer_link_color_hover` varchar(7) DEFAULT NULL,
  `seperator_line_color` varchar(7) DEFAULT NULL,
  `logos_to_use` varchar(7) DEFAULT NULL,
  `brokarage_logo` varchar(100) DEFAULT NULL,
  `brokarage_logo_path` text,
  `second_logo` varchar(100) DEFAULT NULL,
  `second_logo_path` text,
  `copyright_text_link_color` varchar(7) DEFAULT NULL,
  `copyright_link_color_hover` varchar(7) DEFAULT NULL,
  PRIMARY KEY (`table_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `settings_css_footer` WRITE;
/*!40000 ALTER TABLE `settings_css_footer` DISABLE KEYS */;

INSERT INTO `settings_css_footer` (`table_id`, `agent_uid`, `bgcolor_top`, `footer_bgcolor`, `footer_text_color`, `link_color`, `footer_link_color_hover`, `seperator_line_color`, `logos_to_use`, `brokarage_logo`, `brokarage_logo_path`, `second_logo`, `second_logo_path`, `copyright_text_link_color`, `copyright_link_color_hover`)
VALUES
	(1155,2181,NULL,NULL,NULL,NULL,NULL,NULL,'default',NULL,NULL,NULL,NULL,NULL,NULL),
	(1156,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1157,0,NULL,NULL,NULL,NULL,NULL,NULL,'default',NULL,NULL,NULL,NULL,NULL,NULL),
	(1158,5,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1160,11,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1165,16,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1166,17,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1167,18,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1168,19,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1179,30,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1180,31,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1181,32,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1182,33,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1183,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1184,36,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1185,37,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1186,38,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1187,39,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1188,40,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1189,41,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1190,42,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1191,43,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1192,44,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1193,3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1194,73,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

/*!40000 ALTER TABLE `settings_css_footer` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table settings_css_header
# ------------------------------------------------------------

DROP TABLE IF EXISTS `settings_css_header`;

CREATE TABLE `settings_css_header` (
  `table_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `agent_uid` bigint(20) NOT NULL,
  `header_bgcolor` varchar(7) DEFAULT NULL,
  `img_name` varchar(100) DEFAULT NULL,
  `img_name_path` text,
  `agent_name` varchar(100) DEFAULT NULL,
  `custom_agent_name` varchar(100) DEFAULT NULL,
  `custom_agent_degignation` varchar(100) DEFAULT NULL,
  `agent_name_color` varchar(7) DEFAULT NULL,
  PRIMARY KEY (`table_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `settings_css_header` WRITE;
/*!40000 ALTER TABLE `settings_css_header` DISABLE KEYS */;

INSERT INTO `settings_css_header` (`table_id`, `agent_uid`, `header_bgcolor`, `img_name`, `img_name_path`, `agent_name`, `custom_agent_name`, `custom_agent_degignation`, `agent_name_color`)
VALUES
	(1155,2181,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1156,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1157,0,'',NULL,NULL,'','','',''),
	(1158,5,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1160,11,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1165,16,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1166,17,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1167,18,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1168,19,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1179,30,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1180,31,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1181,32,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1182,33,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1183,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1184,36,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1185,37,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1186,38,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1187,39,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1188,40,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1189,41,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1190,42,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1191,43,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1192,44,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1193,3,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1194,73,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

/*!40000 ALTER TABLE `settings_css_header` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table settings_css_menu
# ------------------------------------------------------------

DROP TABLE IF EXISTS `settings_css_menu`;

CREATE TABLE `settings_css_menu` (
  `table_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `agent_uid` bigint(20) DEFAULT NULL,
  `normal_bgcolor` varchar(7) DEFAULT NULL,
  `menu_normal_text_color` varchar(7) DEFAULT NULL,
  `menu_normal_hover_text_color` varchar(7) DEFAULT NULL,
  `normal_border_color_top` varchar(7) DEFAULT NULL,
  `normal_border_color_bottom` varchar(7) DEFAULT NULL,
  `normal_border_color_left_right` varchar(7) DEFAULT NULL,
  `selected_background_color` varchar(7) DEFAULT NULL,
  `menu_selected_text_color` varchar(7) DEFAULT NULL,
  `menu_selected_hover_text_color` varchar(7) DEFAULT NULL,
  `selected_border_color_top` varchar(7) DEFAULT NULL,
  `selected_border_color_bottom` varchar(7) DEFAULT NULL,
  `selected_border_color_left` varchar(7) DEFAULT NULL,
  `selected_border_color_right` varchar(7) DEFAULT NULL,
  `selected_remove_bottom_border` varchar(7) DEFAULT NULL,
  `remove_edge_borders` varchar(7) DEFAULT NULL,
  `two_line_menu` varchar(7) DEFAULT NULL,
  PRIMARY KEY (`table_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `settings_css_menu` WRITE;
/*!40000 ALTER TABLE `settings_css_menu` DISABLE KEYS */;

INSERT INTO `settings_css_menu` (`table_id`, `agent_uid`, `normal_bgcolor`, `menu_normal_text_color`, `menu_normal_hover_text_color`, `normal_border_color_top`, `normal_border_color_bottom`, `normal_border_color_left_right`, `selected_background_color`, `menu_selected_text_color`, `menu_selected_hover_text_color`, `selected_border_color_top`, `selected_border_color_bottom`, `selected_border_color_left`, `selected_border_color_right`, `selected_remove_bottom_border`, `remove_edge_borders`, `two_line_menu`)
VALUES
	(1155,2181,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'default','default','default'),
	(1156,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1157,0,'','','','','','','','','','','','','','','',''),
	(1158,5,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1160,11,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1165,16,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1166,17,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1167,18,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1168,19,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1179,30,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1180,31,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1181,32,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1182,33,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1183,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1184,36,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1185,37,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1186,38,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1187,39,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1188,40,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1189,41,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1190,42,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1191,43,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1192,44,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1193,3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1194,73,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

/*!40000 ALTER TABLE `settings_css_menu` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table settings_css_page_content
# ------------------------------------------------------------

DROP TABLE IF EXISTS `settings_css_page_content`;

CREATE TABLE `settings_css_page_content` (
  `table_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `agent_uid` bigint(20) DEFAULT NULL,
  `bgcolor` varchar(20) DEFAULT NULL,
  `alt_bgcolor` varchar(7) DEFAULT NULL,
  `bgimg` varchar(100) DEFAULT NULL,
  `bgimg_path` text,
  `text_color` varchar(7) DEFAULT NULL,
  `light_text_color` varchar(7) DEFAULT NULL,
  `link_color_hover` varchar(7) DEFAULT NULL,
  `large_headers_color` varchar(7) DEFAULT NULL,
  `text_color_on_alt_bg` varchar(7) DEFAULT NULL,
  `link_color_on_alt_bg_hover` varchar(7) DEFAULT NULL,
  `large_headers_color_on_alt_bg` varchar(7) DEFAULT NULL,
  `crumb_text` varchar(7) DEFAULT NULL,
  `crumb_text_hover` varchar(7) DEFAULT NULL,
  `crumb_text_on_alt_bg` varchar(7) DEFAULT NULL,
  `crumb_text_on_alt_bg_hover` varchar(7) DEFAULT NULL,
  `logs_to_use` varchar(7) DEFAULT NULL,
  PRIMARY KEY (`table_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `settings_css_page_content` WRITE;
/*!40000 ALTER TABLE `settings_css_page_content` DISABLE KEYS */;

INSERT INTO `settings_css_page_content` (`table_id`, `agent_uid`, `bgcolor`, `alt_bgcolor`, `bgimg`, `bgimg_path`, `text_color`, `light_text_color`, `link_color_hover`, `large_headers_color`, `text_color_on_alt_bg`, `link_color_on_alt_bg_hover`, `large_headers_color_on_alt_bg`, `crumb_text`, `crumb_text_hover`, `crumb_text_on_alt_bg`, `crumb_text_on_alt_bg_hover`, `logs_to_use`)
VALUES
	(1155,2181,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'default'),
	(1156,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1157,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'default'),
	(1158,5,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1160,11,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1165,16,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1166,17,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1167,18,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1168,19,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1179,30,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1180,31,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1181,32,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1182,33,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1183,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1184,36,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1185,37,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1186,38,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1187,39,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1188,40,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1189,41,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1190,42,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1191,43,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1192,44,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1193,3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1194,73,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

/*!40000 ALTER TABLE `settings_css_page_content` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table settings_css_submenu
# ------------------------------------------------------------

DROP TABLE IF EXISTS `settings_css_submenu`;

CREATE TABLE `settings_css_submenu` (
  `table_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `agent_uid` bigint(20) DEFAULT NULL,
  `submenu_bgcolor` varchar(7) DEFAULT NULL,
  `normal_text_color` varchar(7) DEFAULT NULL,
  `normal_hover_bgcolor` varchar(7) DEFAULT NULL,
  `normal_hover_text_color` varchar(7) DEFAULT NULL,
  `selected_text_color` varchar(7) DEFAULT NULL,
  `selected_hover_bgcolor` varchar(7) DEFAULT NULL,
  `selected_hover_text_color` varchar(7) DEFAULT NULL,
  `border_color_top` varchar(7) DEFAULT NULL,
  `border_color_bottom` varchar(7) DEFAULT NULL,
  `show_top_border` varchar(7) DEFAULT NULL,
  `seperator_color` varchar(7) DEFAULT NULL,
  PRIMARY KEY (`table_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `settings_css_submenu` WRITE;
/*!40000 ALTER TABLE `settings_css_submenu` DISABLE KEYS */;

INSERT INTO `settings_css_submenu` (`table_id`, `agent_uid`, `submenu_bgcolor`, `normal_text_color`, `normal_hover_bgcolor`, `normal_hover_text_color`, `selected_text_color`, `selected_hover_bgcolor`, `selected_hover_text_color`, `border_color_top`, `border_color_bottom`, `show_top_border`, `seperator_color`)
VALUES
	(1155,2181,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'default',NULL),
	(1156,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1157,0,'','','','','','','','','','',''),
	(1158,5,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1160,11,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1165,16,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1166,17,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1167,18,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1168,19,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1179,30,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1180,31,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1181,32,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1182,33,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1183,35,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1184,36,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1185,37,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1186,38,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1187,39,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1188,40,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1189,41,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1190,42,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1191,43,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1192,44,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1193,3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),
	(1194,73,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

/*!40000 ALTER TABLE `settings_css_submenu` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table settings_general_options
# ------------------------------------------------------------

DROP TABLE IF EXISTS `settings_general_options`;

CREATE TABLE `settings_general_options` (
  `agent_uid` bigint(20) DEFAULT NULL,
  `allow_change_login` tinyint(1) DEFAULT NULL,
  `default_country` varchar(50) DEFAULT NULL,
  `default_city` tinyint(3) DEFAULT NULL,
  `currency_symbol` tinyint(10) DEFAULT NULL,
  `currency_format` tinyint(3) DEFAULT NULL,
  `alter_currency_rate` double DEFAULT NULL,
  `weight_symbol` varchar(20) DEFAULT NULL,
  `dimensions_symbol` varchar(20) DEFAULT NULL,
  `minimal_order_amount` tinyint(2) DEFAULT NULL,
  `maximum_order_amount` tinyint(2) DEFAULT NULL,
  `maximum_order_items` tinyint(2) DEFAULT NULL,
  `provider_commission` varchar(50) DEFAULT NULL,
  `providers_commission_min` varchar(50) DEFAULT NULL,
  `show_outofstock_products` tinyint(1) DEFAULT NULL,
  `preauth_expired_period_warning` varchar(100) DEFAULT NULL,
  `enable_gift_wrapping` tinyint(1) DEFAULT NULL,
  `enable_greeting_message` tinyint(1) DEFAULT NULL,
  `gift_wrapping_cost` double DEFAULT NULL,
  `provider_register` tinyint(1) DEFAULT NULL,
  `provider_register_moderated` tinyint(1) DEFAULT NULL,
  `provider_display_backoffice_link` tinyint(1) DEFAULT NULL,
  `provider_chat` tinyint(1) DEFAULT NULL,
  `shop_closed` tinyint(1) DEFAULT NULL,
  `membership_signup` tinyint(1) DEFAULT NULL,
  `use_counties` tinyint(1) DEFAULT NULL,
  `redirect_to_cart` tinyint(1) DEFAULT NULL,
  `checkout_module` tinyint(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='settings_general_options';

LOCK TABLES `settings_general_options` WRITE;
/*!40000 ALTER TABLE `settings_general_options` DISABLE KEYS */;

INSERT INTO `settings_general_options` (`agent_uid`, `allow_change_login`, `default_country`, `default_city`, `currency_symbol`, `currency_format`, `alter_currency_rate`, `weight_symbol`, `dimensions_symbol`, `minimal_order_amount`, `maximum_order_amount`, `maximum_order_items`, `provider_commission`, `providers_commission_min`, `show_outofstock_products`, `preauth_expired_period_warning`, `enable_gift_wrapping`, `enable_greeting_message`, `gift_wrapping_cost`, `provider_register`, `provider_register_moderated`, `provider_display_backoffice_link`, `provider_chat`, `shop_closed`, `membership_signup`, `use_counties`, `redirect_to_cart`, `checkout_module`)
VALUES
	(1,1,'Bangladesh',89,12,94,120,'im','lbs',1,1,1,'10','1',1,'1',1,1,1,1,1,1,1,1,1,1,1,86);

/*!40000 ALTER TABLE `settings_general_options` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table settings_image_size
# ------------------------------------------------------------

DROP TABLE IF EXISTS `settings_image_size`;

CREATE TABLE `settings_image_size` (
  `settings_image_size_id` int(11) NOT NULL AUTO_INCREMENT,
  `image_setting_type` int(1) DEFAULT '1',
  `image_size_type` int(1) DEFAULT '1',
  `settings_image_name` varchar(200) DEFAULT NULL,
  `large_image_width` int(11) DEFAULT NULL,
  `large_image_height` int(11) DEFAULT NULL,
  `square_image_width` int(10) DEFAULT NULL,
  `square_image_height` int(10) DEFAULT NULL,
  `thumb_image_width` int(11) DEFAULT NULL,
  `thumb_image_height` int(11) DEFAULT NULL,
  `small_image_width` int(10) DEFAULT NULL,
  `small_image_height` int(10) DEFAULT NULL,
  `category_id` text,
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`settings_image_size_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `settings_image_size` WRITE;
/*!40000 ALTER TABLE `settings_image_size` DISABLE KEYS */;

INSERT INTO `settings_image_size` (`settings_image_size_id`, `image_setting_type`, `image_size_type`, `settings_image_name`, `large_image_width`, `large_image_height`, `square_image_width`, `square_image_height`, `thumb_image_width`, `thumb_image_height`, `small_image_width`, `small_image_height`, `category_id`, `status`)
VALUES
	(2,1,1,'Cloathing & Jute products',500,400,300,300,150,120,80,80,'a:135:{i:0;s:1:\"1\";i:1;s:1:\"2\";i:2;s:1:\"3\";i:3;s:1:\"4\";i:4;s:3:\"120\";i:9;s:1:\"7\";i:10;s:2:\"11\";i:11;s:2:\"12\";i:12;s:2:\"13\";i:13;s:2:\"10\";i:14;s:3:\"168\";i:15;s:3:\"271\";i:16;s:3:\"274\";i:17;s:3:\"273\";i:18;s:3:\"275\";i:19;s:2:\"14\";i:20;s:2:\"15\";i:21;s:3:\"439\";i:22;s:3:\"428\";i:23;s:3:\"421\";i:24;s:3:\"398\";i:25;s:3:\"397\";i:26;s:3:\"396\";i:27;s:3:\"265\";i:28;s:2:\"17\";i:29;s:2:\"16\";i:30;s:3:\"446\";i:31;s:2:\"18\";i:32;s:2:\"19\";i:33;s:3:\"387\";i:34;s:3:\"388\";i:35;s:3:\"389\";i:36;s:3:\"390\";i:37;s:3:\"391\";i:38;s:3:\"392\";i:39;s:3:\"393\";i:40;s:3:\"394\";i:41;s:3:\"386\";i:42;s:3:\"385\";i:43;s:3:\"384\";i:44;s:2:\"20\";i:45;s:2:\"21\";i:46;s:2:\"22\";i:47;s:2:\"23\";i:48;s:3:\"380\";i:49;s:3:\"381\";i:50;s:3:\"382\";i:51;s:3:\"383\";i:52;s:3:\"395\";i:53;s:2:\"24\";i:54;s:2:\"25\";i:55;s:2:\"26\";i:56;s:2:\"27\";i:57;s:2:\"28\";i:58;s:2:\"29\";i:59;s:2:\"30\";i:60;s:3:\"276\";i:61;s:3:\"557\";i:62;s:2:\"31\";i:63;s:2:\"32\";i:64;s:2:\"33\";i:65;s:2:\"34\";i:66;s:2:\"35\";i:67;s:2:\"36\";i:68;s:2:\"37\";i:69;s:2:\"38\";i:70;s:2:\"39\";i:71;s:2:\"40\";i:72;s:2:\"41\";i:73;s:2:\"42\";i:74;s:3:\"277\";i:75;s:3:\"320\";i:76;s:2:\"43\";i:77;s:2:\"47\";i:78;s:2:\"48\";i:79;s:2:\"49\";i:80;s:2:\"50\";i:81;s:2:\"51\";i:82;s:2:\"44\";i:83;s:3:\"329\";i:84;s:3:\"330\";i:85;s:3:\"331\";i:86;s:3:\"332\";i:87;s:3:\"335\";i:88;s:3:\"334\";i:89;s:3:\"336\";i:90;s:3:\"337\";i:91;s:2:\"45\";i:92;s:2:\"46\";i:93;s:3:\"266\";i:94;s:3:\"267\";i:95;s:3:\"268\";i:96;s:3:\"269\";i:97;s:3:\"462\";i:98;s:2:\"52\";i:99;s:2:\"53\";i:100;s:2:\"54\";i:101;s:2:\"55\";i:102;s:2:\"56\";i:103;s:2:\"57\";i:104;s:2:\"58\";i:105;s:2:\"59\";i:106;s:2:\"60\";i:107;s:2:\"61\";i:108;s:2:\"62\";i:109;s:2:\"63\";i:110;s:2:\"64\";i:111;s:2:\"65\";i:112;s:2:\"66\";i:113;s:2:\"67\";i:114;s:2:\"68\";i:115;s:2:\"69\";i:116;s:2:\"70\";i:117;s:2:\"71\";i:118;s:2:\"72\";i:119;s:2:\"73\";i:120;s:2:\"74\";i:121;s:2:\"75\";i:122;s:2:\"86\";i:123;s:2:\"85\";i:124;s:2:\"84\";i:125;s:2:\"83\";i:126;s:2:\"82\";i:127;s:2:\"81\";i:128;s:2:\"80\";i:129;s:2:\"79\";i:130;s:2:\"78\";i:131;s:2:\"77\";i:132;s:2:\"76\";i:133;s:2:\"87\";i:134;s:2:\"88\";i:135;s:2:\"89\";i:136;s:2:\"90\";i:137;s:2:\"91\";i:138;s:2:\"92\";}',1),
	(4,1,2,'Test -image',300,250,300,300,120,120,80,80,'',1),
	(9,1,1,'test...',200,200,200,200,200,200,200,200,'a:4:{i:0;s:1:\"6\";i:1;s:1:\"5\";i:2;s:1:\"8\";i:3;s:1:\"9\";}',1),
	(10,1,1,'dsdfsd',200,200,200,200,200,200,200,200,'',1),
	(11,1,1,'Clothing',600,600,400,400,200,200,100,100,NULL,1),
	(1,1,1,'Default',1024,1024,600,600,320,320,80,80,'',1);

/*!40000 ALTER TABLE `settings_image_size` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table settings_layout
# ------------------------------------------------------------

DROP TABLE IF EXISTS `settings_layout`;

CREATE TABLE `settings_layout` (
  `settings_layout_id` int(10) NOT NULL AUTO_INCREMENT,
  `layout_name` varchar(200) DEFAULT NULL,
  `layout_type` int(10) DEFAULT NULL,
  `column_no` int(10) DEFAULT NULL,
  `layout_divide` varchar(200) DEFAULT NULL,
  `image_name` varchar(200) DEFAULT NULL,
  `layout_image` varchar(200) DEFAULT NULL,
  `status` int(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`settings_layout_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `settings_layout` WRITE;
/*!40000 ALTER TABLE `settings_layout` DISABLE KEYS */;

INSERT INTO `settings_layout` (`settings_layout_id`, `layout_name`, `layout_type`, `column_no`, `layout_divide`, `image_name`, `layout_image`, `status`)
VALUES
	(1,'Default Layout  Cloumn 900',1,1,'900','900.gif','http://agentshow.thegm.us/assets/layout_img/900.gif',1),
	(2,'Left Base Horizontal 600*300',1,2,'600,300','600x300.gif','http://agentshow.thegm.us/assets/layout_img/600x300.gif',1),
	(3,'Right Base Horizontal 300*600',1,2,'300,600','300x600.gif','http://agentshow.thegm.us/assets/layout_img/300x600.gif',1),
	(4,'Same Left/Right Horizontal450*450',1,2,'450,450','133e1da5fa4561322e3c03e58187b6e1.jpg','uploads/files/layouts/133e1da5fa4561322e3c03e58187b6e1.jpg',1),
	(5,'3 Columns Horizontal 250*400*250',1,3,'250,400,250','be8e9613705ea8c326dbf70a84d1d30d.jpg','uploads/files/layouts/be8e9613705ea8c326dbf70a84d1d30d.jpg',1),
	(6,'Equal 3 Column Horizontal 300*300*300',1,3,'300,300,300','300x300x300.gif','http://agentshow.thegm.us/assets/layout_img/300x300x300.gif',1),
	(7,'Evaluation Horizontal(650,250)',1,2,'650,250','650x250.gif','http://agentshow.thegm.us/assets/layout_img/650x250.gif',1),
	(10,'Same Left/Right Horizontal450*450',2,3,'450,450','4f4013674a72e834fa1a0a4619e3e05e.jpg','uploads/files/layouts/4f4013674a72e834fa1a0a4619e3e05e.jpg',0),
	(19,'Bex Business Limited',2,1,'400,300','dbd06be19ca7f34044ae8aed1f06829b.jpg','uploads/files/layouts/dbd06be19ca7f34044ae8aed1f06829b.jpg',1),
	(20,'Custom',1,2,'330.370','7cf7a83e3ef9a6c8a4ed0873faabc173.jpg','uploads/files/layouts/7cf7a83e3ef9a6c8a4ed0873faabc173.jpg',1);

/*!40000 ALTER TABLE `settings_layout` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table settings_menu
# ------------------------------------------------------------

DROP TABLE IF EXISTS `settings_menu`;

CREATE TABLE `settings_menu` (
  `settings_menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_name` varchar(200) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `menu_url` varchar(200) NOT NULL,
  `order` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`settings_menu_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `settings_menu` WRITE;
/*!40000 ALTER TABLE `settings_menu` DISABLE KEYS */;

INSERT INTO `settings_menu` (`settings_menu_id`, `menu_name`, `parent_id`, `menu_url`, `order`, `status`)
VALUES
	(1,'Home',0,'home',1,1),
	(2,'About us',0,'about-us',2,1),
	(3,'Products',0,'products',3,1),
	(4,'Privicy & Policy',0,'privicy-policy',4,1),
	(5,'Our Services',0,'our-services',5,1),
	(6,'Contact us',0,'contact',6,1),
	(7,'Home',1,'home-us',1,1),
	(8,'About-us',2,'about',1,1),
	(9,'Products',3,'products',1,1),
	(10,'Privicy & Policy',4,'privicy-policy',1,1),
	(11,'Our Services',5,'our-services',1,1),
	(12,'Contact',6,'contact-us',1,1);

/*!40000 ALTER TABLE `settings_menu` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table settings_payment_method
# ------------------------------------------------------------

DROP TABLE IF EXISTS `settings_payment_method`;

CREATE TABLE `settings_payment_method` (
  `payment_method_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `agent_uid` bigint(20) NOT NULL,
  `active` tinyint(1) DEFAULT '0',
  `payment_method` varchar(100) DEFAULT NULL,
  `surcharge` varchar(10) DEFAULT NULL,
  `surcharge_type` varchar(1) DEFAULT NULL,
  `payment_details` text,
  `membershipids` tinyint(1) DEFAULT NULL,
  `orderby` tinyint(2) DEFAULT NULL,
  PRIMARY KEY (`payment_method_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `settings_payment_method` WRITE;
/*!40000 ALTER TABLE `settings_payment_method` DISABLE KEYS */;

INSERT INTO `settings_payment_method` (`payment_method_id`, `agent_uid`, `active`, `payment_method`, `surcharge`, `surcharge_type`, `payment_details`, `membershipids`, `orderby`)
VALUES
	(1,1,1,'','','1','',0,0),
	(2,1,1,'','','1','',97,0),
	(3,1,1,'','','1','',98,0),
	(4,1,0,'','','1','',0,0);

/*!40000 ALTER TABLE `settings_payment_method` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table settings_plugin
# ------------------------------------------------------------

DROP TABLE IF EXISTS `settings_plugin`;

CREATE TABLE `settings_plugin` (
  `settings_plugin_id` int(10) NOT NULL AUTO_INCREMENT,
  `plugin_name` varchar(200) DEFAULT NULL,
  `plugin_url` varchar(200) NOT NULL,
  `status` int(2) DEFAULT '1',
  PRIMARY KEY (`settings_plugin_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `settings_plugin` WRITE;
/*!40000 ALTER TABLE `settings_plugin` DISABLE KEYS */;

INSERT INTO `settings_plugin` (`settings_plugin_id`, `plugin_name`, `plugin_url`, `status`)
VALUES
	(2,'Calculator','calculator/calculator_view',1),
	(21,'Test','test/test',1),
	(4,'Evaluation','evaluation/evaluation_view',1),
	(5,'About US','about/about_view',1),
	(6,'Contact us','contact/contact_view',1),
	(7,'Listings Map','listing/listingsmap_view',1),
	(10,'Home Feature','home/home_view',1),
	(11,'Blog','blog/blog_view',0);

/*!40000 ALTER TABLE `settings_plugin` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table settings_services
# ------------------------------------------------------------

DROP TABLE IF EXISTS `settings_services`;

CREATE TABLE `settings_services` (
  `settings_services_id` int(10) NOT NULL AUTO_INCREMENT,
  `services_name` varchar(200) DEFAULT NULL,
  `services_url` varchar(200) NOT NULL,
  `status` int(2) DEFAULT '1',
  PRIMARY KEY (`settings_services_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `settings_services` WRITE;
/*!40000 ALTER TABLE `settings_services` DISABLE KEYS */;

INSERT INTO `settings_services` (`settings_services_id`, `services_name`, `services_url`, `status`)
VALUES
	(1,'Event Management System','event.ebdshop.com',1);

/*!40000 ALTER TABLE `settings_services` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table settings_template
# ------------------------------------------------------------

DROP TABLE IF EXISTS `settings_template`;

CREATE TABLE `settings_template` (
  `settings_template_id` int(10) NOT NULL AUTO_INCREMENT,
  `menu_id` int(10) DEFAULT NULL,
  `agent_uid` int(11) NOT NULL,
  `layout_id` int(10) DEFAULT NULL,
  `plugin_id` int(10) DEFAULT NULL,
  `plugin_show` int(10) DEFAULT NULL,
  `background_color` int(5) DEFAULT '3',
  `image_name` text,
  `image_path` text,
  `plugin_size` int(5) DEFAULT '3',
  `is_home_page` int(2) NOT NULL DEFAULT '2',
  `custom_contact_status` tinyint(1) DEFAULT '0',
  `status` int(2) DEFAULT '1',
  PRIMARY KEY (`settings_template_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `settings_template` WRITE;
/*!40000 ALTER TABLE `settings_template` DISABLE KEYS */;

INSERT INTO `settings_template` (`settings_template_id`, `menu_id`, `agent_uid`, `layout_id`, `plugin_id`, `plugin_show`, `background_color`, `image_name`, `image_path`, `plugin_size`, `is_home_page`, `custom_contact_status`, `status`)
VALUES
	(298,1,31,1,0,0,3,NULL,NULL,3,2,0,1),
	(299,2,31,1,5,1,3,NULL,NULL,3,2,0,1),
	(4,4,1,1,4,1,3,NULL,NULL,3,2,0,1),
	(5,5,1,1,2,1,3,NULL,NULL,3,2,0,1),
	(6,6,1,1,6,1,3,NULL,NULL,3,2,0,1),
	(7,7,1,1,0,0,2,NULL,NULL,0,1,0,1),
	(8,8,1,3,6,1,1,'','',0,1,0,1),
	(9,9,1,1,0,1,2,NULL,NULL,0,0,0,0),
	(10,10,1,2,0,1,2,NULL,NULL,0,1,0,1),
	(11,11,1,1,0,0,3,NULL,NULL,3,2,0,1),
	(12,12,1,1,4,1,3,NULL,NULL,3,2,0,1),
	(13,13,1,7,4,1,0,NULL,NULL,0,2,0,1),
	(14,14,1,1,2,1,3,NULL,NULL,3,2,0,1),
	(15,15,1,1,6,1,0,NULL,NULL,0,2,0,1),
	(16,1,4,1,0,0,3,NULL,NULL,3,2,0,1),
	(17,2,4,1,5,1,3,NULL,NULL,3,2,0,1),
	(18,3,4,1,3,1,3,NULL,NULL,3,2,0,1),
	(19,4,4,1,4,1,3,NULL,NULL,3,2,0,1),
	(20,5,4,1,2,1,3,NULL,NULL,3,2,0,1),
	(21,6,4,1,6,1,3,NULL,NULL,3,2,0,1),
	(22,7,4,1,0,0,3,NULL,NULL,3,1,0,1),
	(23,8,4,1,5,1,3,NULL,NULL,3,2,0,1),
	(24,9,4,1,3,1,3,NULL,NULL,3,2,0,1),
	(25,10,4,1,7,1,3,NULL,NULL,3,2,0,1),
	(26,11,4,1,0,0,3,NULL,NULL,3,2,0,1),
	(27,12,4,1,4,1,3,NULL,NULL,3,2,0,1),
	(28,1,5,1,0,0,3,NULL,NULL,3,2,0,1),
	(29,2,5,1,5,1,3,NULL,NULL,3,2,0,1),
	(30,3,5,1,3,1,3,NULL,NULL,3,2,0,1),
	(31,4,5,1,4,1,3,NULL,NULL,3,2,0,1),
	(32,5,5,1,2,1,3,NULL,NULL,3,2,0,1),
	(33,6,5,1,6,1,3,NULL,NULL,3,2,0,1),
	(34,7,5,1,0,0,3,NULL,NULL,3,1,0,1),
	(35,8,5,1,5,1,3,NULL,NULL,3,2,0,1),
	(36,9,5,1,3,1,3,NULL,NULL,3,2,0,1),
	(37,10,5,1,7,1,3,NULL,NULL,3,2,0,1),
	(38,11,5,1,0,0,3,NULL,NULL,3,2,0,1),
	(39,12,5,1,4,1,3,NULL,NULL,3,2,0,1),
	(52,1,11,1,0,0,3,NULL,NULL,3,2,0,1),
	(53,2,11,1,5,1,3,NULL,NULL,3,2,0,1),
	(54,3,11,1,3,1,3,NULL,NULL,3,2,0,1),
	(55,4,11,1,4,1,3,NULL,NULL,3,2,0,1),
	(56,5,11,1,2,1,3,NULL,NULL,3,2,0,1),
	(57,6,11,1,6,1,3,NULL,NULL,3,2,0,1),
	(58,7,11,1,0,0,3,NULL,NULL,3,1,0,1),
	(59,8,11,1,5,1,3,NULL,NULL,3,2,0,1),
	(60,9,11,1,3,1,3,NULL,NULL,3,2,0,1),
	(61,10,11,1,7,1,3,NULL,NULL,3,2,0,1),
	(62,11,11,1,0,0,3,NULL,NULL,3,2,0,1),
	(63,12,11,1,4,1,3,NULL,NULL,3,2,0,1),
	(112,1,16,1,0,0,3,NULL,NULL,3,2,0,1),
	(113,2,16,1,5,1,3,NULL,NULL,3,2,0,1),
	(114,3,16,1,3,1,3,NULL,NULL,3,2,0,1),
	(115,4,16,1,4,1,3,NULL,NULL,3,2,0,1),
	(116,5,16,1,2,1,3,NULL,NULL,3,2,0,1),
	(117,6,16,1,6,1,3,NULL,NULL,3,2,0,1),
	(118,7,16,1,0,0,3,NULL,NULL,3,1,0,1),
	(119,8,16,1,5,1,3,NULL,NULL,3,2,0,1),
	(120,9,16,1,3,1,3,NULL,NULL,3,2,0,1),
	(121,10,16,1,7,1,3,NULL,NULL,3,2,0,1),
	(122,11,16,1,0,0,3,NULL,NULL,3,2,0,1),
	(123,12,16,1,4,1,3,NULL,NULL,3,2,0,1),
	(124,1,17,1,0,0,3,NULL,NULL,3,2,0,1),
	(125,2,17,1,5,1,3,NULL,NULL,3,2,0,1),
	(126,3,17,1,3,1,3,NULL,NULL,3,2,0,1),
	(127,4,17,1,4,1,3,NULL,NULL,3,2,0,1),
	(128,5,17,1,2,1,3,NULL,NULL,3,2,0,1),
	(129,6,17,1,6,1,3,NULL,NULL,3,2,0,1),
	(130,7,17,1,0,0,3,NULL,NULL,3,1,0,1),
	(131,8,17,1,5,1,3,NULL,NULL,3,2,0,1),
	(132,9,17,1,3,1,3,NULL,NULL,3,2,0,1),
	(133,10,17,1,7,1,3,NULL,NULL,3,2,0,1),
	(134,11,17,1,0,0,3,NULL,NULL,3,2,0,1),
	(135,12,17,1,4,1,3,NULL,NULL,3,2,0,1),
	(136,1,18,1,0,0,3,NULL,NULL,3,2,0,1),
	(137,2,18,1,5,1,3,NULL,NULL,3,2,0,1),
	(138,3,18,1,3,1,3,NULL,NULL,3,2,0,1),
	(139,4,18,1,4,1,3,NULL,NULL,3,2,0,1),
	(140,5,18,1,2,1,3,NULL,NULL,3,2,0,1),
	(141,6,18,1,6,1,3,NULL,NULL,3,2,0,1),
	(142,7,18,1,0,0,3,NULL,NULL,3,1,0,1),
	(143,8,18,1,5,1,3,NULL,NULL,3,2,0,1),
	(144,9,18,1,3,1,3,NULL,NULL,3,2,0,1),
	(145,10,18,1,7,1,3,NULL,NULL,3,2,0,1),
	(146,11,18,1,0,0,3,NULL,NULL,3,2,0,1),
	(147,12,18,1,4,1,3,NULL,NULL,3,2,0,1),
	(148,1,19,1,0,0,3,NULL,NULL,3,2,0,1),
	(149,2,19,1,5,1,3,NULL,NULL,3,2,0,1),
	(150,3,19,1,3,1,3,NULL,NULL,3,2,0,1),
	(151,4,19,1,4,1,3,NULL,NULL,3,2,0,1),
	(152,5,19,1,2,1,3,NULL,NULL,3,2,0,1),
	(153,6,19,1,6,1,3,NULL,NULL,3,2,0,1),
	(154,7,19,1,0,0,3,NULL,NULL,3,1,0,1),
	(155,8,19,1,5,1,3,NULL,NULL,3,2,0,1),
	(156,9,19,1,3,1,3,NULL,NULL,3,2,0,1),
	(157,10,19,1,7,1,3,NULL,NULL,3,2,0,1),
	(158,11,19,1,0,0,3,NULL,NULL,3,2,0,1),
	(159,12,19,1,4,1,3,NULL,NULL,3,2,0,1),
	(280,1,30,1,0,0,3,NULL,NULL,3,2,0,1),
	(281,2,30,1,5,1,3,NULL,NULL,3,2,0,1),
	(282,3,30,1,3,1,3,NULL,NULL,3,2,0,1),
	(283,4,30,1,4,1,3,NULL,NULL,3,2,0,1),
	(284,5,30,1,2,1,3,NULL,NULL,3,2,0,1),
	(285,6,30,1,6,1,3,NULL,NULL,3,2,0,1),
	(286,7,30,1,0,0,3,NULL,NULL,3,1,0,1),
	(287,8,30,1,5,1,3,NULL,NULL,3,2,0,1),
	(288,9,30,1,3,1,3,NULL,NULL,3,2,0,1),
	(289,10,30,1,7,1,3,NULL,NULL,3,2,0,1),
	(290,11,30,1,0,0,3,NULL,NULL,3,2,0,1),
	(291,12,30,1,4,1,3,NULL,NULL,3,2,0,1),
	(300,3,31,1,3,1,3,NULL,NULL,3,2,0,1),
	(301,4,31,1,4,1,3,NULL,NULL,3,2,0,1),
	(302,5,31,1,2,1,3,NULL,NULL,3,2,0,1),
	(303,6,31,1,6,1,3,NULL,NULL,3,2,0,1),
	(304,7,31,1,0,0,3,NULL,NULL,3,1,0,1),
	(305,8,31,1,5,1,3,NULL,NULL,3,2,0,1),
	(306,9,31,1,3,1,3,NULL,NULL,3,2,0,1),
	(307,10,31,1,7,1,3,NULL,NULL,3,2,0,1),
	(308,11,31,1,0,0,3,NULL,NULL,3,2,0,1),
	(309,12,31,1,4,1,3,NULL,NULL,3,2,0,1),
	(310,1,32,1,0,0,3,NULL,NULL,3,2,0,1),
	(311,2,32,1,5,1,3,NULL,NULL,3,2,0,1),
	(312,3,32,1,3,1,3,NULL,NULL,3,2,0,1),
	(313,4,32,1,4,1,3,NULL,NULL,3,2,0,1),
	(314,5,32,1,2,1,3,NULL,NULL,3,2,0,1),
	(315,6,32,1,6,1,3,NULL,NULL,3,2,0,1),
	(316,7,32,6,21,1,0,NULL,NULL,0,1,0,1),
	(317,8,32,1,5,1,3,NULL,NULL,3,2,0,1),
	(318,9,32,1,3,1,3,NULL,NULL,3,2,0,1),
	(319,10,32,1,7,1,3,NULL,NULL,3,2,0,1),
	(320,11,32,1,0,0,3,NULL,NULL,3,2,0,1),
	(321,12,32,1,4,1,3,NULL,NULL,3,2,0,1),
	(322,1,33,1,0,0,3,NULL,NULL,3,2,0,1),
	(323,2,33,1,5,1,3,NULL,NULL,3,2,0,1),
	(324,3,33,1,3,1,3,NULL,NULL,3,2,0,1),
	(325,4,33,1,4,1,3,NULL,NULL,3,2,0,1),
	(326,5,33,1,2,1,3,NULL,NULL,3,2,0,1),
	(327,6,33,1,6,1,3,NULL,NULL,3,2,0,1),
	(328,7,33,1,0,0,3,NULL,NULL,3,1,0,1),
	(329,8,33,1,5,1,3,NULL,NULL,3,2,0,1),
	(330,9,33,1,3,1,3,NULL,NULL,3,2,0,1),
	(331,10,33,1,7,1,3,NULL,NULL,3,2,0,1),
	(332,11,33,1,0,0,3,NULL,NULL,3,2,0,1),
	(333,12,33,1,4,1,3,NULL,NULL,3,2,0,1),
	(334,1,35,1,0,0,3,NULL,NULL,3,2,0,1),
	(335,2,35,1,5,1,3,NULL,NULL,3,2,0,1),
	(336,3,35,1,3,1,3,NULL,NULL,3,2,0,1),
	(337,4,35,1,4,1,3,NULL,NULL,3,2,0,1),
	(338,5,35,1,2,1,3,NULL,NULL,3,2,0,1),
	(339,6,35,1,6,1,3,NULL,NULL,3,2,0,1),
	(340,7,35,1,0,0,3,NULL,NULL,3,1,0,1),
	(341,8,35,1,5,1,3,NULL,NULL,3,2,0,1),
	(342,9,35,1,3,1,3,NULL,NULL,3,2,0,1),
	(343,10,35,1,7,1,3,NULL,NULL,3,2,0,1),
	(344,11,35,1,0,0,3,NULL,NULL,3,2,0,1),
	(345,12,35,1,4,1,3,NULL,NULL,3,2,0,1),
	(346,1,36,1,0,0,3,NULL,NULL,3,2,0,1),
	(347,2,36,1,5,1,3,NULL,NULL,3,2,0,1),
	(348,3,36,1,3,1,3,NULL,NULL,3,2,0,1),
	(349,4,36,1,4,1,3,NULL,NULL,3,2,0,1),
	(350,5,36,1,2,1,3,NULL,NULL,3,2,0,1),
	(351,6,36,1,6,1,3,NULL,NULL,3,2,0,1),
	(352,7,36,1,0,0,3,NULL,NULL,3,1,0,1),
	(353,8,36,1,5,1,3,NULL,NULL,3,2,0,1),
	(354,9,36,1,3,1,3,NULL,NULL,3,2,0,1),
	(355,10,36,1,7,1,3,NULL,NULL,3,2,0,1),
	(356,11,36,1,0,0,3,NULL,NULL,3,2,0,1),
	(357,12,36,1,4,1,3,NULL,NULL,3,2,0,1),
	(358,1,37,1,0,0,3,NULL,NULL,3,2,0,1),
	(359,2,37,1,5,1,3,NULL,NULL,3,2,0,1),
	(360,3,37,1,3,1,3,NULL,NULL,3,2,0,1),
	(361,4,37,1,4,1,3,NULL,NULL,3,2,0,1),
	(362,5,37,1,2,1,3,NULL,NULL,3,2,0,1),
	(363,6,37,1,6,1,3,NULL,NULL,3,2,0,1),
	(364,7,37,1,0,0,3,NULL,NULL,3,1,0,1),
	(365,8,37,1,5,1,3,NULL,NULL,3,2,0,1),
	(366,9,37,1,3,1,3,NULL,NULL,3,2,0,1),
	(367,10,37,1,7,1,3,NULL,NULL,3,2,0,1),
	(368,11,37,1,0,0,3,NULL,NULL,3,2,0,1),
	(369,12,37,1,4,1,3,NULL,NULL,3,2,0,1),
	(370,1,38,1,0,0,3,NULL,NULL,3,2,0,1),
	(371,2,38,1,5,1,3,NULL,NULL,3,2,0,1),
	(372,3,38,1,3,1,3,NULL,NULL,3,2,0,1),
	(373,4,38,1,4,1,3,NULL,NULL,3,2,0,1),
	(374,5,38,1,2,1,3,NULL,NULL,3,2,0,1),
	(375,6,38,1,6,1,3,NULL,NULL,3,2,0,1),
	(376,7,38,1,0,0,3,NULL,NULL,3,1,0,1),
	(377,8,38,1,5,1,3,NULL,NULL,3,2,0,1),
	(378,9,38,1,3,1,3,NULL,NULL,3,2,0,1),
	(379,10,38,1,7,1,3,NULL,NULL,3,2,0,1),
	(380,11,38,1,0,0,3,NULL,NULL,3,2,0,1),
	(381,12,38,1,4,1,3,NULL,NULL,3,2,0,1),
	(382,1,39,1,0,0,3,NULL,NULL,3,2,0,1),
	(383,2,39,1,5,1,3,NULL,NULL,3,2,0,1),
	(384,3,39,1,3,1,3,NULL,NULL,3,2,0,1),
	(385,4,39,1,4,1,3,NULL,NULL,3,2,0,1),
	(386,5,39,1,2,1,3,NULL,NULL,3,2,0,1),
	(387,6,39,1,6,1,3,NULL,NULL,3,2,0,1),
	(388,7,39,1,0,0,3,NULL,NULL,3,1,0,1),
	(389,8,39,1,5,1,3,NULL,NULL,3,2,0,1),
	(390,9,39,1,3,1,3,NULL,NULL,3,2,0,1),
	(391,10,39,1,7,1,3,NULL,NULL,3,2,0,1),
	(392,11,39,1,0,0,3,NULL,NULL,3,2,0,1),
	(393,12,39,1,4,1,3,NULL,NULL,3,2,0,1),
	(394,1,40,1,0,0,3,NULL,NULL,3,2,0,1),
	(395,2,40,1,5,1,3,NULL,NULL,3,2,0,1),
	(396,3,40,1,3,1,3,NULL,NULL,3,2,0,1),
	(397,4,40,1,4,1,3,NULL,NULL,3,2,0,1),
	(398,5,40,1,2,1,3,NULL,NULL,3,2,0,1),
	(399,6,40,1,6,1,3,NULL,NULL,3,2,0,1),
	(400,7,40,1,0,0,3,NULL,NULL,3,1,0,1),
	(401,8,40,1,5,1,3,NULL,NULL,3,2,0,1),
	(402,9,40,1,3,1,3,NULL,NULL,3,2,0,1),
	(403,10,40,1,7,1,3,NULL,NULL,3,2,0,1),
	(404,11,40,1,0,0,3,NULL,NULL,3,2,0,1),
	(405,12,40,1,4,1,3,NULL,NULL,3,2,0,1),
	(406,1,41,1,0,0,3,NULL,NULL,3,2,0,1),
	(407,2,41,1,5,1,3,NULL,NULL,3,2,0,1),
	(408,3,41,1,3,1,3,NULL,NULL,3,2,0,1),
	(409,4,41,1,4,1,3,NULL,NULL,3,2,0,1),
	(410,5,41,1,2,1,3,NULL,NULL,3,2,0,1),
	(411,6,41,1,6,1,3,NULL,NULL,3,2,0,1),
	(412,7,41,1,0,0,3,NULL,NULL,3,1,0,1),
	(413,8,41,1,5,1,3,NULL,NULL,3,2,0,1),
	(414,9,41,1,3,1,3,NULL,NULL,3,2,0,1),
	(415,10,41,1,7,1,3,NULL,NULL,3,2,0,1),
	(416,11,41,1,0,0,3,NULL,NULL,3,2,0,1),
	(417,12,41,1,4,1,3,NULL,NULL,3,2,0,1),
	(418,1,42,1,0,0,3,NULL,NULL,3,2,0,1),
	(419,2,42,1,5,1,3,NULL,NULL,3,2,0,1),
	(420,3,42,1,3,1,3,NULL,NULL,3,2,0,1),
	(421,4,42,1,4,1,3,NULL,NULL,3,2,0,1),
	(422,5,42,1,2,1,3,NULL,NULL,3,2,0,1),
	(423,6,42,1,6,1,3,NULL,NULL,3,2,0,1),
	(424,7,42,1,0,0,3,NULL,NULL,3,1,0,1),
	(425,8,42,1,5,1,3,NULL,NULL,3,2,0,1),
	(426,9,42,1,3,1,3,NULL,NULL,3,2,0,1),
	(427,10,42,1,7,1,3,NULL,NULL,3,2,0,1),
	(428,11,42,1,0,0,3,NULL,NULL,3,2,0,1),
	(429,12,42,1,4,1,3,NULL,NULL,3,2,0,1),
	(430,1,43,1,0,0,3,NULL,NULL,3,2,0,1),
	(431,2,43,1,5,1,3,NULL,NULL,3,2,0,1),
	(432,3,43,1,3,1,3,NULL,NULL,3,2,0,1),
	(433,4,43,1,4,1,3,NULL,NULL,3,2,0,1),
	(434,5,43,1,2,1,3,NULL,NULL,3,2,0,1),
	(435,6,43,1,6,1,3,NULL,NULL,3,2,0,1),
	(436,7,43,1,0,0,3,NULL,NULL,3,1,0,1),
	(437,8,43,1,5,1,3,NULL,NULL,3,2,0,1),
	(438,9,43,1,3,1,3,NULL,NULL,3,2,0,1),
	(439,10,43,1,7,1,3,NULL,NULL,3,2,0,1),
	(440,11,43,1,0,0,3,NULL,NULL,3,2,0,1),
	(441,12,43,1,4,1,3,NULL,NULL,3,2,0,1),
	(442,1,44,1,0,0,3,NULL,NULL,3,2,0,1),
	(443,2,44,1,5,1,3,NULL,NULL,3,2,0,1),
	(444,3,44,1,3,1,3,NULL,NULL,3,2,0,1),
	(445,4,44,1,4,1,3,NULL,NULL,3,2,0,1),
	(446,5,44,1,2,1,3,NULL,NULL,3,2,0,1),
	(447,6,44,1,6,1,3,NULL,NULL,3,2,0,1),
	(448,7,44,1,0,0,3,NULL,NULL,3,1,0,1),
	(449,8,44,1,5,1,3,NULL,NULL,3,2,0,1),
	(450,9,44,1,3,1,3,NULL,NULL,3,2,0,1),
	(451,10,44,1,7,1,3,NULL,NULL,3,2,0,1),
	(452,11,44,1,0,0,3,NULL,NULL,3,2,0,1),
	(453,12,44,1,4,1,3,NULL,NULL,3,2,0,1),
	(454,1,3,1,0,0,3,NULL,NULL,3,2,0,1),
	(455,2,3,1,5,1,3,NULL,NULL,3,2,0,1),
	(456,3,3,1,3,1,3,NULL,NULL,3,2,0,1),
	(457,4,3,1,4,1,3,NULL,NULL,3,2,0,1),
	(458,5,3,1,2,1,3,NULL,NULL,3,2,0,1),
	(459,6,3,1,6,1,3,NULL,NULL,3,2,0,1),
	(460,7,3,1,0,0,3,NULL,NULL,3,1,0,1),
	(461,8,3,6,0,0,0,NULL,NULL,0,2,0,1),
	(462,9,3,2,7,1,0,NULL,NULL,0,2,0,1),
	(463,10,3,1,7,1,3,NULL,NULL,3,2,0,1),
	(464,11,3,1,0,0,3,NULL,NULL,3,2,0,1),
	(465,12,3,1,4,1,3,NULL,NULL,3,2,0,1),
	(466,1,0,1,0,0,3,NULL,NULL,3,2,0,1),
	(467,2,0,1,0,0,3,NULL,NULL,3,2,0,1),
	(476,3,73,1,3,1,3,NULL,NULL,3,2,0,1),
	(475,2,73,1,5,1,3,NULL,NULL,3,2,0,1),
	(473,13,3,2,4,2,1,'','',0,1,0,1),
	(474,1,73,1,0,0,3,NULL,NULL,3,2,0,1),
	(477,4,73,1,4,1,3,NULL,NULL,3,2,0,1),
	(478,5,73,1,2,1,3,NULL,NULL,3,2,0,1),
	(479,6,73,1,6,1,3,NULL,NULL,3,2,0,1),
	(480,7,73,1,0,0,3,NULL,NULL,3,1,0,1),
	(481,8,73,1,5,1,3,NULL,NULL,3,2,0,1),
	(482,9,73,1,3,1,3,NULL,NULL,3,2,0,1),
	(483,10,73,1,7,1,3,NULL,NULL,3,2,0,1),
	(484,11,73,1,0,0,3,NULL,NULL,3,2,0,1),
	(485,12,73,1,4,1,3,NULL,NULL,3,2,0,1);

/*!40000 ALTER TABLE `settings_template` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table settings_website
# ------------------------------------------------------------

DROP TABLE IF EXISTS `settings_website`;

CREATE TABLE `settings_website` (
  `settings_web_id` int(10) NOT NULL AUTO_INCREMENT,
  `custom_title` varchar(200) DEFAULT NULL,
  `template_name` int(10) NOT NULL,
  `breadcrumb` int(2) NOT NULL DEFAULT '1',
  `agent_uid` int(1) NOT NULL,
  `include_page` int(5) DEFAULT '0',
  `listing_order` int(10) DEFAULT '0',
  `user_change_listing` int(5) DEFAULT '0',
  `image_name` varchar(200) DEFAULT NULL,
  `image_path` text,
  `create_date` int(10) NOT NULL,
  `web_status` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`settings_web_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `settings_website` WRITE;
/*!40000 ALTER TABLE `settings_website` DISABLE KEYS */;

INSERT INTO `settings_website` (`settings_web_id`, `custom_title`, `template_name`, `breadcrumb`, `agent_uid`, `include_page`, `listing_order`, `user_change_listing`, `image_name`, `image_path`, `create_date`, `web_status`)
VALUES
	(1,'fdgdf',9,0,1,0,74,1,NULL,NULL,0,0),
	(3,NULL,1,1,31,0,0,0,NULL,NULL,1365040242,0),
	(4,NULL,1,1,32,0,0,0,NULL,NULL,1365132117,0),
	(5,NULL,1,1,33,0,0,0,NULL,NULL,1365133725,0),
	(6,NULL,1,1,35,0,0,0,NULL,NULL,1365150796,0),
	(7,NULL,1,1,36,0,0,0,NULL,NULL,1367732734,0),
	(8,NULL,1,1,37,0,0,0,NULL,NULL,1367733691,0),
	(9,NULL,1,1,38,0,0,0,NULL,NULL,1367734864,0),
	(10,NULL,1,1,39,0,0,0,NULL,NULL,1367734969,0),
	(11,NULL,1,1,40,0,0,0,NULL,NULL,1367771269,0),
	(12,NULL,1,1,41,0,0,0,NULL,NULL,1367944254,0),
	(13,NULL,1,1,42,0,0,0,NULL,NULL,1367944525,0),
	(14,NULL,1,1,43,0,0,0,NULL,NULL,1367944536,0),
	(15,NULL,1,1,44,0,0,0,NULL,NULL,1370156759,0),
	(29,NULL,1,1,73,0,0,0,NULL,NULL,1376667865,0),
	(28,'Please enter only',4,1,3,0,74,1,NULL,NULL,1371133660,1);

/*!40000 ALTER TABLE `settings_website` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table shop_about
# ------------------------------------------------------------

DROP TABLE IF EXISTS `shop_about`;

CREATE TABLE `shop_about` (
  `agent_uid` bigint(20) NOT NULL,
  `open_time` tinyint(1) NOT NULL,
  `close_time` tinyint(1) NOT NULL,
  `weekly_close` tinyint(1) NOT NULL,
  `car_parking` tinyint(1) NOT NULL,
  `parking_capacity` varchar(100) NOT NULL,
  `escalator` varchar(100) NOT NULL,
  `lift` varchar(100) NOT NULL,
  `air_condition` varchar(100) NOT NULL,
  `prayer_place` varchar(200) NOT NULL,
  `security` varchar(200) NOT NULL,
  `other_facalities` text NOT NULL,
  `about_us` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='shop_about';

LOCK TABLES `shop_about` WRITE;
/*!40000 ALTER TABLE `shop_about` DISABLE KEYS */;

INSERT INTO `shop_about` (`agent_uid`, `open_time`, `close_time`, `weekly_close`, `car_parking`, `parking_capacity`, `escalator`, `lift`, `air_condition`, `prayer_place`, `security`, `other_facalities`, `about_us`)
VALUES
	(32,104,107,112,1,'gdfg','2 ','fgdfg','fdgdf','','','','');

/*!40000 ALTER TABLE `shop_about` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table shop_brand
# ------------------------------------------------------------

DROP TABLE IF EXISTS `shop_brand`;

CREATE TABLE `shop_brand` (
  `agent_uid` int(10) DEFAULT NULL,
  `brand_status` int(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `shop_brand` WRITE;
/*!40000 ALTER TABLE `shop_brand` DISABLE KEYS */;

INSERT INTO `shop_brand` (`agent_uid`, `brand_status`)
VALUES
	(1,1),
	(11,0),
	(4,1),
	(3,1),
	(17,0),
	(18,0),
	(19,1),
	(30,0),
	(31,0),
	(36,0),
	(37,0),
	(38,0),
	(39,0),
	(40,0),
	(41,0),
	(42,0),
	(43,0),
	(44,1),
	(77,1);

/*!40000 ALTER TABLE `shop_brand` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table shop_category
# ------------------------------------------------------------

DROP TABLE IF EXISTS `shop_category`;

CREATE TABLE `shop_category` (
  `agent_uid` int(11) DEFAULT NULL,
  `parent_id` int(10) DEFAULT '0',
  `category_id` int(11) DEFAULT NULL,
  `ordering` tinyint(10) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `shop_category` WRITE;
/*!40000 ALTER TABLE `shop_category` DISABLE KEYS */;

INSERT INTO `shop_category` (`agent_uid`, `parent_id`, `category_id`, `ordering`)
VALUES
	(18,1,120,0),
	(18,1,4,0),
	(1,24,557,1),
	(1,24,25,3),
	(1,7,13,0),
	(1,7,12,2),
	(1,7,11,0),
	(1,6,9,1),
	(1,6,8,2),
	(1,6,5,3),
	(1,1,120,2),
	(1,1,4,4),
	(1,1,3,2),
	(1,1,2,1),
	(18,1,3,0),
	(18,1,2,0),
	(3,74,81,0),
	(3,74,82,0),
	(3,74,83,0),
	(3,74,84,0),
	(3,74,85,0),
	(3,74,86,0),
	(3,74,75,0),
	(1,24,25,3),
	(1,24,25,3),
	(33,1,2,0),
	(33,1,3,0),
	(33,1,4,0),
	(33,1,120,0),
	(19,1,2,0),
	(19,1,3,0),
	(19,1,4,0),
	(19,1,120,0),
	(3,74,80,0),
	(3,74,79,0),
	(3,74,78,0),
	(3,74,77,0),
	(3,74,76,0),
	(3,74,87,0),
	(3,7,11,0),
	(3,6,9,0),
	(3,6,9,0),
	(3,1,120,0),
	(3,1,4,0),
	(3,1,4,0),
	(3,1,4,0),
	(3,6,5,0),
	(3,1,120,0),
	(3,1,4,0),
	(3,NULL,NULL,0),
	(3,NULL,NULL,0),
	(3,6,9,0),
	(3,6,9,0),
	(3,1,120,0),
	(3,1,120,0),
	(3,6,9,0),
	(3,588,589,0),
	(54,74,75,0),
	(55,74,83,0),
	(49,88,89,0),
	(49,88,92,0),
	(49,88,89,0),
	(49,74,84,0),
	(49,74,75,0),
	(55,88,90,0),
	(55,74,81,0),
	(56,74,75,0),
	(56,74,84,0),
	(56,74,82,0),
	(56,74,79,0),
	(56,88,89,0),
	(45,74,75,0),
	(45,74,84,0),
	(45,74,81,0),
	(45,74,78,0),
	(45,88,90,0),
	(45,88,91,0),
	(73,74,83,0),
	(73,74,78,0),
	(73,74,87,0),
	(73,88,90,0),
	(73,88,91,0),
	(73,88,92,0),
	(95,1,3,0),
	(95,6,8,0),
	(95,10,274,0),
	(96,1,2,0),
	(96,1,4,0),
	(96,7,11,0),
	(97,1,2,0),
	(97,1,4,0),
	(97,7,11,0),
	(99,6,5,0),
	(99,1,120,0),
	(99,1,4,0),
	(99,1,3,0),
	(60,88,90,0),
	(60,88,89,0),
	(60,74,79,0),
	(60,74,80,0),
	(60,74,83,0),
	(60,74,84,0),
	(60,74,86,0),
	(11,1,2,0),
	(11,1,3,0),
	(11,1,4,0),
	(11,1,120,0),
	(99,7,11,0),
	(99,7,12,0),
	(99,7,13,0),
	(99,1,3,0),
	(99,1,3,0);

/*!40000 ALTER TABLE `shop_category` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table shop_details
# ------------------------------------------------------------

DROP TABLE IF EXISTS `shop_details`;

CREATE TABLE `shop_details` (
  `agent_uid` int(10) NOT NULL AUTO_INCREMENT,
  `shop_name` varchar(200) NOT NULL,
  `shop_group` varchar(50) DEFAULT NULL,
  `location_id` int(10) NOT NULL,
  `shopping_status` tinyint(1) DEFAULT '0',
  `brand_status` tinyint(1) DEFAULT '0',
  `setup_website` tinyint(1) DEFAULT '0',
  `listing_type` tinyint(5) DEFAULT '0',
  `contact_person` varchar(200) DEFAULT NULL,
  `designation_id` int(11) DEFAULT '0',
  `email` varchar(200) DEFAULT NULL,
  `website` varchar(200) DEFAULT NULL,
  `cell_phone` varchar(200) DEFAULT NULL,
  `business_phone` varchar(200) DEFAULT NULL,
  `fax` varchar(100) DEFAULT NULL,
  `address` text,
  `city` varchar(100) DEFAULT NULL,
  `postal_code` varchar(100) DEFAULT NULL,
  `district` varchar(200) DEFAULT '',
  `country` varchar(100) DEFAULT 'Bangladesh',
  `map_lat` double DEFAULT NULL,
  `map_lng` double DEFAULT NULL,
  `disclaimer` text,
  `about` text,
  `logo` text,
  `sponsored` tinyint(1) unsigned zerofill DEFAULT '0',
  `status` int(2) DEFAULT '1',
  PRIMARY KEY (`agent_uid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `shop_details` WRITE;
/*!40000 ALTER TABLE `shop_details` DISABLE KEYS */;

INSERT INTO `shop_details` (`agent_uid`, `shop_name`, `shop_group`, `location_id`, `shopping_status`, `brand_status`, `setup_website`, `listing_type`, `contact_person`, `designation_id`, `email`, `website`, `cell_phone`, `business_phone`, `fax`, `address`, `city`, `postal_code`, `district`, `country`, `map_lat`, `map_lng`, `disclaimer`, `about`, `logo`, `sponsored`, `status`)
VALUES
	(1,'Grammen Phone','services',17,1,1,0,123,'Sazedul Haque vv',0,'shafiqabs@gmail.com','authenticbd.com','01822897060','01822897060','018822897060','House:8,Road 16','Dhaka','1012','','Bangladesh',0,0,'','',NULL,1,0),
	(3,'CFC','services',17,1,1,1,123,'California',138,'california@ebdshop.com','cfsbd.com','1234567','23412312','1000','erwer','Dhaka','1200','dhaka','Bangladesh',NULL,NULL,'klhklklk;lk;l','rgdgdfg  ddgdfh gdf hdhfggfh',NULL,1,1),
	(4,'Xenial','services',17,1,0,0,0,'Md Shafiqul Islam',NULL,'jashimuddin@x-grouprestaurant.com','http://www.x-grouprestaurant.com','8802 8123830, 8802 8150394 & 8802 8150396','8802 8123830, 8802 8150394 & 8802 8150396','8802 8123830','House No 365(old),6 (New), Road No.27,Dhanmondi,Dhaka','Dhaka','1209','Dhaka','Bangladesh',NULL,NULL,'X-Group Chain Restaurant is a pioneer group of restaurants located in some prime areas of Dhaka City. We have started restaurant business since 1992 and one of our groups restaurant named Xiamen was successfully formed at Dhanmondi, Dhaka. It was the first ever restaurant which started a new era for this group. Since then we have successfully established 6 (six) restaurants in different prime locations at Dhaka. We offer lavishly decorated dish and a large space for clients along with multi cuisine menus, especially Thai Cuisine, Chinese Cuisine and Bengali foods. All of our restaurants have homely and a well-secured environment to organize party & programs. Every single restaurant has been designed and supervised by some of the top architects and engineers who has given more priority on local tradition and heritage while designing. Contemporary decor, large car parking, concealed lighting, air conditioning and comfortable seating along with effective and friendly staff make the X-Group Chain Restaurant the perfect menu/venue for lunch & dinner all the year round.\n','',NULL,NULL,1),
	(6,'Test Shop','services',17,NULL,0,0,0,'Test Shop',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','Bangladesh',NULL,NULL,'','',NULL,NULL,1),
	(7,'Test Shop','shops',17,NULL,0,0,0,'Test Shop',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','Bangladesh',NULL,NULL,'','',NULL,NULL,1),
	(11,'Dina','shops',19,1,0,0,122,'xxxvv',138,'','','','123456','','fg','','','','Bangladesh',0,0,'','',NULL,NULL,1),
	(17,'dd','shops',17,0,0,0,0,'dsfsdf',NULL,'s@s.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','Bangladesh',NULL,NULL,'','',NULL,NULL,1),
	(18,'am','shops',19,0,0,0,122,'am',0,'s@s.com',NULL,'s','dfd','dssd','dfdf','dsf','d','d','Bangladesh',NULL,NULL,'d','',NULL,NULL,1),
	(19,'Ummar','shops',18,1,1,0,122,'Umaar',138,'s@s.com',NULL,'','34555','','Dhanmondi','','','','Bangladesh',NULL,NULL,'','cvxcv cvxcvxcvxvxv',NULL,NULL,1),
	(30,'dd dds','shops',17,1,0,0,0,'Sazedul Haque vv',NULL,'shoshiabs@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','Bangladesh',NULL,NULL,'','',NULL,NULL,1),
	(31,'MM shop cccc','services',17,0,0,1,0,'mm',138,'s@s.com',NULL,'','fgdfg','','fdgdfgdf','','','','Bangladesh',NULL,NULL,'','',NULL,NULL,1),
	(32,'Estern plaza','services',17,0,0,1,0,'fdfsdf',138,'shafiqabs@yahoo.com',NULL,'sdf','zXZ','sdf','ZxZx','eefsdf','sdfs','sdsaasf','Bangladesh',NULL,NULL,'vcvxcxxcvxvxcvxcv  dfsdfsdfsd','Test dfjds  sdfsdf sf sdfsd sdf s f sdf sfs',NULL,NULL,1),
	(33,'am','services',17,NULL,0,0,0,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','Bangladesh',NULL,NULL,'','',NULL,NULL,1),
	(34,'amxx','services',17,NULL,0,0,0,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','Bangladesh',NULL,NULL,'','',NULL,NULL,1),
	(35,'amxx','services',17,NULL,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','Bangladesh',NULL,NULL,'','',NULL,NULL,1),
	(40,'am','shops',17,1,0,0,0,'wwwwww',138,'',NULL,'','123456777','','Dhanmondi','','','','Bangladesh',NULL,NULL,'','',NULL,NULL,1),
	(41,'amxx','shops',17,NULL,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','Bangladesh',NULL,NULL,'','',NULL,NULL,1),
	(42,'amxx','services',17,NULL,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','Bangladesh',NULL,NULL,'','',NULL,NULL,1),
	(43,'amxx','services',17,NULL,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','Bangladesh',NULL,NULL,'','',NULL,NULL,1),
	(44,'CFC','services',17,1,1,1,122,'kkkk',NULL,'shafiqabs@yahoo.com',NULL,'667687','hgghhg','1234','hhghgg','Dhaka','1200','dhaka','Bangladesh',NULL,NULL,'','',NULL,NULL,1),
	(45,'Alpona Plaza','services',17,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','Bangladesh',NULL,NULL,'','',NULL,NULL,1),
	(46,'sdddfdf','shopping-mall',19,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','Bangladesh',NULL,NULL,'','',NULL,NULL,1),
	(47,'sdddfdf','shopping-mall',19,0,0,1,0,'asfsdfds',NULL,'shafiqabs@yahoo.com',NULL,'e231231','3423234','12312312','dfdsfgsgdfgd','Dhaka','234123','0','Bangladesh',NULL,NULL,'','',NULL,NULL,1),
	(48,'Metro Shopping Mall','shopping-mall',17,0,0,0,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','Bangladesh',NULL,NULL,'','',NULL,NULL,1),
	(49,'Ummar','services',0,0,0,0,122,'Dhaka',139,'',NULL,'','4567899','','27 Dhanmondi,Dhaka','','','','Bangladesh',NULL,NULL,'','',NULL,NULL,1),
	(53,'Muslim Sweets','services',18,0,0,0,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','Bangladesh',NULL,NULL,NULL,NULL,NULL,NULL,1),
	(54,'Beximco Pharmaticals','services',17,0,0,0,123,'Salman F Rahman',138,'',NULL,'','123456','','House No# 10 , Road N0#7','','','','Bangladesh',NULL,NULL,NULL,NULL,NULL,1,1),
	(55,'zxczxczxc','services',18,0,0,0,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','Bangladesh',NULL,NULL,NULL,NULL,NULL,NULL,1),
	(56,'Square','services',18,0,0,0,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','Bangladesh',NULL,NULL,NULL,NULL,NULL,NULL,1),
	(57,'Inn International','services',17,0,0,0,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','Bangladesh',NULL,NULL,NULL,NULL,NULL,NULL,1),
	(58,'Shapleza','services',18,0,0,0,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','Bangladesh',NULL,NULL,NULL,NULL,NULL,NULL,1),
	(59,'Modina Ator','services',18,0,0,0,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','Bangladesh',NULL,NULL,NULL,NULL,NULL,NULL,1),
	(60,'Azad Products','services',17,0,0,0,122,'xyz',0,'',NULL,'','3456667','','Metro Shopping Complex, Dhanmoni','','','','Bangladesh',NULL,NULL,NULL,NULL,NULL,NULL,1),
	(61,'Beximco Pharmaticals mlm','0',18,0,0,0,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','Bangladesh',NULL,NULL,NULL,NULL,NULL,1,1),
	(62,'Abc Plaza','services',17,0,0,0,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','Bangladesh',NULL,NULL,NULL,NULL,NULL,NULL,1),
	(63,'a1','services',17,0,0,0,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','Bangladesh',NULL,NULL,NULL,NULL,NULL,NULL,1),
	(64,'a1','services',17,0,0,0,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','Bangladesh',NULL,NULL,NULL,NULL,NULL,NULL,1),
	(65,'a1','services',17,0,0,0,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','Bangladesh',NULL,NULL,NULL,NULL,NULL,NULL,1),
	(66,'fdgdfg','services',17,0,0,0,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','Bangladesh',NULL,NULL,NULL,NULL,NULL,NULL,1),
	(67,'fdgdfg','services',17,0,0,0,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','Bangladesh',NULL,NULL,NULL,NULL,NULL,NULL,1),
	(68,'zdfsdfsf','services',17,0,0,0,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','Bangladesh',NULL,NULL,NULL,NULL,NULL,NULL,1),
	(69,'asfdfsdf','services',19,0,0,0,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','Bangladesh',NULL,NULL,NULL,NULL,NULL,NULL,1),
	(70,'1shop','services',17,0,0,0,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','Bangladesh',NULL,NULL,NULL,NULL,NULL,NULL,1),
	(71,'2 shop','services',18,0,0,0,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','Bangladesh',NULL,NULL,NULL,NULL,NULL,NULL,1),
	(72,'2 sfghh','services',17,0,0,0,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','Bangladesh',NULL,NULL,NULL,NULL,NULL,NULL,1),
	(73,'1 sssss','services',17,1,1,1,122,'asasdas',0,'',NULL,'','1212132424','','dfdsfsdf','','','','Bangladesh',NULL,NULL,NULL,NULL,NULL,NULL,1),
	(74,'1shgfd','services',17,0,0,0,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','Bangladesh',NULL,NULL,NULL,NULL,NULL,NULL,1),
	(75,'zzzzzz','services',17,0,0,0,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','Bangladesh',NULL,NULL,NULL,NULL,NULL,NULL,1),
	(76,'pppp','services',17,0,0,0,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','Bangladesh',NULL,NULL,NULL,NULL,NULL,NULL,1),
	(77,'aaaaa','services',17,1,1,0,122,'sdfsdf',0,'',NULL,'','34234234','','sdfsdf','','','','Bangladesh',NULL,NULL,NULL,NULL,NULL,NULL,1),
	(78,'bbb','services',18,0,0,0,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','Bangladesh',NULL,NULL,NULL,NULL,NULL,NULL,1),
	(79,'rrrr','services',18,0,0,0,0,'dsdds',0,'',NULL,'','2323','','sdsd','','','','Bangladesh',NULL,NULL,NULL,NULL,NULL,NULL,1),
	(80,'Beximco Pharmaticals','services',18,0,0,0,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','Bangladesh',NULL,NULL,NULL,NULL,NULL,NULL,1),
	(81,'xzxcxz','services',18,0,0,0,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','Bangladesh',NULL,NULL,NULL,NULL,NULL,NULL,1),
	(82,'sdasdasd','services',18,0,0,0,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','Bangladesh',NULL,NULL,NULL,NULL,NULL,NULL,1),
	(83,'sdasdasd','services',18,0,0,0,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','Bangladesh',NULL,NULL,NULL,NULL,NULL,NULL,1),
	(84,'asaS','services',17,0,0,0,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','Bangladesh',NULL,NULL,NULL,NULL,NULL,NULL,1),
	(85,'zxczxc','services',18,0,0,0,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','Bangladesh',NULL,NULL,NULL,NULL,NULL,NULL,1),
	(86,'sasasss','services',17,0,0,0,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','Bangladesh',NULL,NULL,NULL,NULL,NULL,NULL,1),
	(87,'sdsdasd','services',19,0,0,0,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','Bangladesh',NULL,NULL,NULL,NULL,NULL,NULL,1),
	(88,'xvxcx','services',18,0,0,0,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','Bangladesh',NULL,NULL,NULL,NULL,NULL,NULL,1),
	(89,'dsfsdfsdf','services',17,0,0,0,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','Bangladesh',NULL,NULL,NULL,NULL,NULL,NULL,1),
	(90,'','services',17,0,0,0,0,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','Bangladesh',NULL,NULL,NULL,NULL,NULL,NULL,1),
	(95,'dsfsfsd','shops',17,0,0,0,0,'erwerwer',0,'',NULL,'','3423423','','234234erwer','','','','Bangladesh',NULL,NULL,NULL,NULL,NULL,NULL,1),
	(96,'asssssss','shops',17,0,0,0,122,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','Bangladesh',NULL,NULL,NULL,NULL,NULL,NULL,1),
	(97,'asssssss','shops',17,0,0,0,122,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','Bangladesh',NULL,NULL,NULL,NULL,NULL,NULL,1),
	(98,'sdasd','shopping-mall',18,0,0,0,NULL,NULL,0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','Bangladesh',NULL,NULL,NULL,NULL,NULL,NULL,1),
	(99,'Anchal','shops',17,1,0,0,122,'Md Siraj',139,'',NULL,'123456789','123456789','','7/9 Lalmatia , 3rd Floor, Lalamatia','dhaka','1234567','','Bangladesh',NULL,NULL,NULL,NULL,NULL,NULL,1);

/*!40000 ALTER TABLE `shop_details` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table shop_group
# ------------------------------------------------------------

DROP TABLE IF EXISTS `shop_group`;

CREATE TABLE `shop_group` (
  `group_name` varchar(100) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  KEY `group_name` (`group_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `shop_group` WRITE;
/*!40000 ALTER TABLE `shop_group` DISABLE KEYS */;

INSERT INTO `shop_group` (`group_name`, `title`, `status`)
VALUES
	('shopping-mall','Shopping Mall',1),
	('shops','Shop',1),
	('services','Service',1),
	('buyers','buyer',1),
	('wholesalers','Wholesaler',1);

/*!40000 ALTER TABLE `shop_group` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table shop_image
# ------------------------------------------------------------

DROP TABLE IF EXISTS `shop_image`;

CREATE TABLE `shop_image` (
  `agent_uid` int(10) DEFAULT NULL,
  `image_name` text,
  `image_path` text,
  UNIQUE KEY `agent_uid` (`agent_uid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `shop_image` WRITE;
/*!40000 ALTER TABLE `shop_image` DISABLE KEYS */;

INSERT INTO `shop_image` (`agent_uid`, `image_name`, `image_path`)
VALUES
	(1,'5015703d027d48c6cb90ab02384a4aa7.jpg','uploads/shop/1/5015703d027d48c6cb90ab02384a4aa7.jpg'),
	(4,'bkg3.jpg','uploads/shop/4/bkg3.jpg'),
	(3,'universe_and_planets_digital_art_wallpaper_lux1.jpg','uploads/shop/3/universe_and_planets_digital_art_wallpaper_lux1.jpg'),
	(5,'bkg3.jpg','uploads/mall/5/bkg3.jpg'),
	(18,'d4a0f50ed11551ad4d7d095b822f0f4c.jpg','uploads/shop/18/d4a0f50ed11551ad4d7d095b822f0f4c.jpg');

/*!40000 ALTER TABLE `shop_image` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table shop_shopping_mall
# ------------------------------------------------------------

DROP TABLE IF EXISTS `shop_shopping_mall`;

CREATE TABLE `shop_shopping_mall` (
  `agent_uid` int(10) DEFAULT '0',
  `shopping_mall_id` int(10) DEFAULT '0',
  `level` int(10) DEFAULT '0',
  `shop_no` varchar(100) DEFAULT NULL,
  `status` int(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `shop_shopping_mall` WRITE;
/*!40000 ALTER TABLE `shop_shopping_mall` DISABLE KEYS */;

INSERT INTO `shop_shopping_mall` (`agent_uid`, `shopping_mall_id`, `level`, `shop_no`, `status`)
VALUES
	(3,0,22,'100',1),
	(1,32,23,'2000',1),
	(4,32,21,'120',1),
	(17,0,0,'0',0),
	(18,0,0,'0',0),
	(19,0,0,'0',0),
	(31,32,21,'0',1),
	(36,0,0,NULL,0),
	(37,0,0,NULL,0),
	(38,0,0,NULL,0),
	(39,0,0,NULL,0),
	(40,0,0,NULL,0),
	(41,0,0,NULL,0),
	(42,0,0,NULL,0),
	(43,0,0,NULL,0),
	(44,32,22,'120',1),
	(0,48,21,'220',0),
	(0,48,21,'220',0),
	(11,48,21,'220',1),
	(19,48,22,'10',0),
	(99,48,23,'220',1),
	(40,48,21,'200',0),
	(77,48,22,'320',1);

/*!40000 ALTER TABLE `shop_shopping_mall` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table shop_type
# ------------------------------------------------------------

DROP TABLE IF EXISTS `shop_type`;

CREATE TABLE `shop_type` (
  `agent_uid` int(11) DEFAULT NULL,
  `parent_id` text NOT NULL,
  `category_id` text NOT NULL,
  `ordering` tinyint(10) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `shop_type` WRITE;
/*!40000 ALTER TABLE `shop_type` DISABLE KEYS */;

INSERT INTO `shop_type` (`agent_uid`, `parent_id`, `category_id`, `ordering`)
VALUES
	(1,'a:3:{i:0;s:1:\"1\";i:1;s:1:\"6\";i:2;s:1:\"7\";}','a:14:{i:0;s:1:\"2\";i:1;s:1:\"3\";i:2;s:1:\"4\";i:3;s:3:\"120\";i:4;s:1:\"5\";i:5;s:1:\"8\";i:6;s:1:\"9\";i:7;s:2:\"11\";i:8;s:2:\"12\";i:9;s:2:\"13\";i:10;s:2:\"25\";i:11;s:3:\"557\";i:12;s:2:\"25\";i:13;s:2:\"25\";}',0),
	(18,'a:1:{i:0;s:1:\"1\";}','a:4:{i:0;s:1:\"2\";i:1;s:1:\"3\";i:2;s:1:\"4\";i:3;s:3:\"120\";}',0),
	(3,'a:1:{i:0;s:2:\"74\";}','a:31:{i:0;s:2:\"75\";i:1;s:2:\"86\";i:2;s:2:\"85\";i:3;s:2:\"84\";i:4;s:2:\"83\";i:5;s:2:\"82\";i:6;s:2:\"81\";i:7;s:2:\"80\";i:8;s:2:\"79\";i:9;s:2:\"78\";i:10;s:2:\"77\";i:11;s:2:\"76\";i:12;s:2:\"87\";i:13;s:2:\"11\";i:14;s:1:\"9\";i:15;s:1:\"9\";i:16;s:3:\"120\";i:17;s:1:\"4\";i:18;s:1:\"4\";i:19;s:1:\"4\";i:20;s:1:\"5\";i:21;s:3:\"120\";i:22;s:1:\"4\";i:23;N;i:24;N;i:25;s:1:\"9\";i:26;s:1:\"9\";i:27;s:3:\"120\";i:28;s:3:\"120\";i:29;s:1:\"9\";i:30;s:3:\"589\";}',0),
	(33,'b:0;','b:0;',0),
	(19,'a:1:{i:0;s:1:\"1\";}','a:4:{i:0;s:1:\"2\";i:1;s:1:\"3\";i:2;s:1:\"4\";i:3;s:3:\"120\";}',0),
	(54,'b:0;','a:1:{i:0;s:2:\"75\";}',0),
	(49,'b:0;','a:5:{i:0;s:2:\"75\";i:1;s:2:\"84\";i:2;s:2:\"89\";i:3;s:2:\"92\";i:4;s:2:\"89\";}',0),
	(45,'b:0;','a:6:{i:0;s:2:\"75\";i:1;s:2:\"84\";i:2;s:2:\"81\";i:3;s:2:\"78\";i:4;s:2:\"90\";i:5;s:2:\"91\";}',0),
	(58,'a:3:{i:0;s:2:\"74\";i:1;s:2:\"74\";i:2;s:2:\"88\";}','a:3:{i:0;s:2:\"85\";i:1;s:2:\"83\";i:2;s:2:\"89\";}',0),
	(59,'a:2:{i:0;s:2:\"74\";i:2;s:2:\"88\";}','a:4:{i:0;s:2:\"85\";i:1;s:2:\"81\";i:2;s:2:\"89\";i:3;s:2:\"92\";}',0),
	(60,'a:2:{i:0;s:2:\"74\";i:1;s:2:\"88\";}','a:7:{i:0;s:2:\"86\";i:1;s:2:\"84\";i:2;s:2:\"83\";i:3;s:2:\"80\";i:4;s:2:\"79\";i:5;s:2:\"89\";i:6;s:2:\"90\";}',0),
	(61,'a:2:{i:0;s:2:\"74\";i:1;s:2:\"88\";}','a:2:{i:0;s:2:\"86\";i:1;s:2:\"89\";}',0),
	(62,'a:2:{i:0;s:2:\"74\";i:1;s:2:\"88\";}','a:2:{i:0;s:2:\"85\";i:1;s:2:\"89\";}',0),
	(63,'a:1:{i:0;s:2:\"74\";}','a:1:{i:0;s:2:\"85\";}',0),
	(64,'a:1:{i:0;s:2:\"74\";}','a:1:{i:0;s:2:\"85\";}',0),
	(65,'a:1:{i:0;s:2:\"74\";}','a:1:{i:0;s:2:\"85\";}',0),
	(66,'a:1:{i:0;s:2:\"74\";}','a:1:{i:0;s:2:\"86\";}',0),
	(67,'a:1:{i:0;s:2:\"74\";}','a:1:{i:0;s:2:\"86\";}',0),
	(68,'a:1:{i:0;s:2:\"74\";}','a:1:{i:0;s:2:\"86\";}',0),
	(69,'a:1:{i:0;s:2:\"74\";}','a:2:{i:0;s:2:\"84\";i:1;s:2:\"81\";}',0),
	(70,'a:1:{i:0;s:2:\"74\";}','a:1:{i:0;s:2:\"86\";}',0),
	(71,'a:2:{i:0;s:2:\"74\";i:1;s:2:\"88\";}','a:2:{i:0;s:2:\"85\";i:1;s:2:\"91\";}',0),
	(72,'a:1:{i:0;s:2:\"74\";}','a:1:{i:0;s:2:\"86\";}',0),
	(73,'a:2:{i:0;s:2:\"74\";i:1;s:2:\"88\";}','a:6:{i:0;s:2:\"83\";i:1;s:2:\"78\";i:2;s:2:\"87\";i:3;s:2:\"90\";i:4;s:2:\"91\";i:5;s:2:\"92\";}',0),
	(74,'a:1:{i:0;s:2:\"74\";}','a:1:{i:0;s:2:\"85\";}',0),
	(75,'a:1:{i:0;s:2:\"74\";}','a:1:{i:0;s:2:\"86\";}',0),
	(76,'a:1:{i:0;s:2:\"74\";}','a:1:{i:0;s:2:\"85\";}',0),
	(77,'a:2:{i:0;s:2:\"74\";i:1;s:2:\"88\";}','a:2:{i:0;s:2:\"83\";i:1;s:2:\"91\";}',0),
	(78,'a:1:{i:0;s:2:\"74\";}','a:1:{i:0;s:2:\"85\";}',0),
	(79,'a:1:{i:0;s:2:\"74\";}','a:1:{i:0;s:2:\"86\";}',0),
	(80,'a:1:{i:0;s:2:\"74\";}','a:1:{i:0;s:2:\"85\";}',0),
	(81,'a:1:{i:0;s:2:\"74\";}','a:1:{i:0;s:2:\"86\";}',0),
	(82,'a:1:{i:0;s:2:\"74\";}','a:2:{i:0;s:2:\"84\";i:1;s:2:\"78\";}',0),
	(83,'a:1:{i:0;s:2:\"74\";}','a:2:{i:0;s:2:\"84\";i:1;s:2:\"78\";}',0),
	(84,'a:1:{i:0;s:2:\"74\";}','a:1:{i:0;s:2:\"86\";}',0),
	(85,'a:1:{i:0;s:2:\"74\";}','a:1:{i:0;s:2:\"84\";}',0),
	(86,'a:1:{i:0;s:2:\"74\";}','a:1:{i:0;s:2:\"85\";}',0),
	(87,'a:1:{i:0;s:2:\"74\";}','a:1:{i:0;s:2:\"85\";}',0),
	(88,'a:1:{i:0;s:2:\"74\";}','a:1:{i:0;s:2:\"85\";}',0),
	(89,'a:1:{i:0;s:2:\"74\";}','a:1:{i:0;s:2:\"85\";}',0),
	(90,'N;','b:0;',0),
	(95,'a:3:{i:0;s:1:\"1\";i:1;s:1:\"6\";i:2;s:2:\"10\";}','a:3:{i:0;s:1:\"3\";i:1;s:1:\"8\";i:2;s:3:\"274\";}',0),
	(96,'a:2:{i:0;s:1:\"1\";i:2;s:1:\"7\";}','a:3:{i:0;s:1:\"2\";i:1;s:1:\"4\";i:2;s:2:\"11\";}',0),
	(97,'a:2:{i:0;s:1:\"1\";i:2;s:1:\"7\";}','a:3:{i:0;s:1:\"2\";i:1;s:1:\"4\";i:2;s:2:\"11\";}',0),
	(98,'N;','b:0;',0),
	(99,'a:3:{i:0;s:1:\"1\";i:1;s:1:\"6\";i:2;s:1:\"7\";}','a:9:{i:0;s:1:\"3\";i:1;s:1:\"4\";i:2;s:3:\"120\";i:3;s:1:\"5\";i:4;s:2:\"11\";i:5;s:2:\"12\";i:6;s:2:\"13\";i:7;s:1:\"3\";i:8;s:1:\"3\";}',0),
	(11,'a:1:{i:0;s:1:\"1\";}','a:4:{i:0;s:1:\"2\";i:1;s:1:\"3\";i:2;s:1:\"4\";i:3;s:3:\"120\";}',0);

/*!40000 ALTER TABLE `shop_type` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table shopping_mall
# ------------------------------------------------------------

DROP TABLE IF EXISTS `shopping_mall`;

CREATE TABLE `shopping_mall` (
  `shopping_mall_id` int(10) NOT NULL AUTO_INCREMENT,
  `shopping_mall_name` varchar(200) DEFAULT NULL,
  `address` text,
  `location_id` int(10) DEFAULT NULL,
  `contact_name` varchar(200) DEFAULT NULL,
  `email_address` varchar(200) DEFAULT NULL,
  `website` varchar(100) DEFAULT NULL,
  `business_phone` varchar(100) DEFAULT NULL,
  `mobile_no` varchar(100) DEFAULT NULL,
  `fax` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `postal_code` varchar(100) DEFAULT NULL,
  `disclaimer` text,
  `map_lat` double DEFAULT NULL,
  `map_lng` double DEFAULT NULL,
  `create_date` int(10) DEFAULT NULL,
  PRIMARY KEY (`shopping_mall_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `shopping_mall` WRITE;
/*!40000 ALTER TABLE `shopping_mall` DISABLE KEYS */;

INSERT INTO `shopping_mall` (`shopping_mall_id`, `shopping_mall_name`, `address`, `location_id`, `contact_name`, `email_address`, `website`, `business_phone`, `mobile_no`, `fax`, `city`, `postal_code`, `disclaimer`, `map_lat`, `map_lng`, `create_date`)
VALUES
	(34,'Rapa Plaza','House:8,Road 16',17,'Shafiq','shafiqabs@gmail.com','rapa','1234','123456','123','Dhaka','1209','test',43.8672265,-79.2845982,1316176760),
	(31,'Test Mall','',18,'','','','','','','','','xzvxcvcx',43.8672265,-79.2845982,1316181452),
	(32,'Estern Plaza','H# 7/9, Block -B',19,'sfdasdas','s@s.com','wwww','34234','33123','01822897060','savar','324234','vvvxx new desclamier',0,0,1366095499),
	(33,'Estern Plazax',NULL,19,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1365133725),
	(35,'Bashundhara City','Savar,Dhaka',17,'M Shafiq','s@s.com','authenticbd.com','231200','1234567','1234','Dhaka','1200',NULL,NULL,NULL,1365219636);

/*!40000 ALTER TABLE `shopping_mall` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table site_contents
# ------------------------------------------------------------

DROP TABLE IF EXISTS `site_contents`;

CREATE TABLE `site_contents` (
  `sitecontent_id` mediumint(5) NOT NULL AUTO_INCREMENT,
  `random_id` varchar(20) DEFAULT NULL,
  `parent_id` mediumint(2) DEFAULT '0',
  `menu_name` varchar(200) DEFAULT NULL,
  `menu_slug` varchar(200) DEFAULT NULL,
  `menu_level` varchar(200) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `content` text,
  `excerpt` text,
  `image_path` text,
  `created` int(10) DEFAULT NULL,
  `ordering` tinyint(2) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`sitecontent_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `site_contents` WRITE;
/*!40000 ALTER TABLE `site_contents` DISABLE KEYS */;

INSERT INTO `site_contents` (`sitecontent_id`, `random_id`, `parent_id`, `menu_name`, `menu_slug`, `menu_level`, `title`, `content`, `excerpt`, `image_path`, `created`, `ordering`, `status`)
VALUES
	(59,'970-942-0446',0,'Customer Service','customer-service','sites/customer-service','Customer Service','I see this being possible using either some regex, or a few substr calls\n (assuming the input is always of that format, and doesn\'t change length\n etc.)I see this being possible using either some regex, or a few substr calls\n (assuming the input is always of that format, and doesn\'t change length\n etc.)I see this being possible using either some regex, or a few substr calls\n (assuming the input is always of that format, and doesn\'t change length\n etc.)','I see this being possible using either some regex, or a few substr calls (assuming the input is always of that format, and doesn\'t change length etc.)','uploads/sitecontents/9a157e59ae845c2d8a306c5f989203f6_1.jpg',1374596335,NULL,1),
	(61,'471-664-6664',59,'Contact us','contact-us','sites/contact-us','Contact us','Contact us<br>','Contact us','uploads/sitecontents/53ecf792be2bf3c4cf7122dedece82cf.jpg',1374601770,NULL,1),
	(62,'268-426-2136',59,'Returns policy ','returns-policy-','sites/contact-us/returns-policy-','Returns policy ','<a href=\"http://localhost/onclickbd/\" rel=\"nofollow\" id=\"\">Returns policy </a>','Returns policy ',NULL,1374602570,NULL,1),
	(63,'336-026-5357',59,'Delivery information','delivery-information','sites/customer-service/delivery-information','Delivery information','<a href=\"http://localhost/onclickbd/\" rel=\"nofollow\" id=\"\">Delivery information</a>','Delivery information',NULL,1374602662,NULL,1);

/*!40000 ALTER TABLE `site_contents` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table site_features
# ------------------------------------------------------------

DROP TABLE IF EXISTS `site_features`;

CREATE TABLE `site_features` (
  `feature_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `random_id` varchar(20) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `content` text,
  `excerpt` text,
  `image_path` text,
  `target_url` varchar(200) DEFAULT '',
  `created` int(10) DEFAULT NULL,
  `ordering` tinyint(2) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`feature_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `site_features` WRITE;
/*!40000 ALTER TABLE `site_features` DISABLE KEYS */;

INSERT INTO `site_features` (`feature_id`, `random_id`, `title`, `content`, `excerpt`, `image_path`, `target_url`, `created`, `ordering`, `status`)
VALUES
	(24,'ewetrtr44566','Title name 1','content 1<br>','Excerpt 1','uploads/features/77543528f713ebc614e1ffaf973aafec.jpg','test/test1/test2/test3',123456543,2,1),
	(30,'9jdpqfth','New Feature Add','New Feature Add created by shafiq<br>','New Feature Add created by shafiq','assets/uploads/features//','test/test1/test2/test3',1374425764,0,1),
	(31,'s1ul5qth',' Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes Read more Dolor sit amet Cum sociis natoque penatibus et magnis dis parturient montes Read more ','\n\n				\n\n					<div style=\"margin-left: -225px;\" class=\"detail\">\n							<h2 class=\"Lexia-Bold\"><a href=\"http://localhost/onclickbd/#\">Aenean mass<br>Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes<br>Read more<br>Dolor sit amet Cum sociis natoque penatibus et magnis dis parturient montes<br>Read more&nbsp;</a>\n						</h2></div>','\nAenean massa. Cum sociis natoque penatibus et magnis dis parturient montes\nRead more\nDolor sit amet Cum sociis natoque penatibus et magnis dis parturient montes\nRead more ','assets/uploads/features//','dfsdf',1374426489,1,0),
	(52,'991-562-0465','sdfsaf','dsfsdfs<br>',NULL,NULL,'',1377707271,NULL,1),
	(51,'495-152-8565','cvcvcx',NULL,NULL,'uploads/features/53ecf792be2bf3c4cf7122dedece82cf.jpg','sddd',1375808990,NULL,1),
	(46,'holhm05hpf4qv70grkne','The Cute Kitten - Looking Up...','<div class=\"holder\">\n<div class=\"link11\"><a href=\"http://www.cssplay.co.uk/menus/url1\"><img alt=\"\" src=\"http://localhost/onclickbd//uploads/files/products/pic4.jpg\"></a></div><div class=\"link33\"><p><a href=\"http://localhost/onclickbd/\">The Cute Kitten - Looking Up...</a></p></div>\n</div>','The Cute Kitten - Looking Up...\n','assets/uploads/features/','Using target url',1374428008,3,1);

/*!40000 ALTER TABLE `site_features` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table site_helps
# ------------------------------------------------------------

DROP TABLE IF EXISTS `site_helps`;

CREATE TABLE `site_helps` (
  `help_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `random_id` varchar(20) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `content` text,
  `image_path` text,
  `created` int(10) DEFAULT NULL,
  `ordering` tinyint(2) DEFAULT '0',
  `status` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`help_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `site_helps` WRITE;
/*!40000 ALTER TABLE `site_helps` DISABLE KEYS */;

INSERT INTO `site_helps` (`help_id`, `random_id`, `title`, `content`, `image_path`, `created`, `ordering`, `status`)
VALUES
	(1,'566-281-5204','Be yourself! Be different','Milanoo is a reliable online shopping mall and your personal wardrobe specializing in making of dresses, costumes and apparels in different occasions. With fantastic custom made service to tailor the dress, costumes from a range of amazing options to create something truly unique. Handmade to your precise body shape measurements and shipped worldwide. ',NULL,1377707346,NULL,1),
	(2,'1377707817','Convenient shopping experience','A logical and humanized shopping framework is well designed for your easy item searching; go placing order and payment remittance, even if you are first at Milanoo. ',NULL,1377707817,NULL,1),
	(3,'1377707969','Always Competitive Price','We\'ve been continued cooperating with manufacturers who offered top-quality products and sell Milanoo merchandise at a reasonable profits. We dedicate to low price offering and every move of your merchandise processing to be extremely careful and aim for a 100% satisfaction in every aspects. ',NULL,1377707969,NULL,1),
	(4,'566-281-5205','Be surprised!','You will be frequently invited to join our social network service and in-site promotional activities to get more unexpected surprise, this is not a merely discount offering. ',NULL,NULL,0,1),
	(5,'566-281-5206','Global Shipping','A secured logistics service is well established trough out years of incorporating with well famed international couriers. All Milanoo stuffs can be reached to 170 countries worldwide in a precisely timeframe plus with competitive shipment fare. ',NULL,NULL,0,1),
	(6,'566-281-5207','Friendly Customer Service','Adhering to “Customer Foremost” and bring convenience for your shopping experience, friendly customer support and an effectively speedy reacting to any of your inquiries is established for achieving a satisfied customer. Easy return policy is always available. ',NULL,NULL,0,1);

/*!40000 ALTER TABLE `site_helps` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table site_partners
# ------------------------------------------------------------

DROP TABLE IF EXISTS `site_partners`;

CREATE TABLE `site_partners` (
  `site_partner_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `random_id` int(11) DEFAULT NULL,
  `tradefair_id` int(11) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `web_url` varchar(200) DEFAULT NULL,
  `image_path` tinytext,
  `ordering` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`site_partner_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table site_sliders
# ------------------------------------------------------------

DROP TABLE IF EXISTS `site_sliders`;

CREATE TABLE `site_sliders` (
  `site_slider_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `random_id` int(11) DEFAULT NULL,
  `tradefair_id` int(11) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `excerpt` tinytext,
  `web_url` varchar(200) DEFAULT NULL,
  `image_path` tinytext,
  `ordering` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`site_slider_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table site_sponsors
# ------------------------------------------------------------

DROP TABLE IF EXISTS `site_sponsors`;

CREATE TABLE `site_sponsors` (
  `site_sponsor_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `random_id` int(11) DEFAULT NULL,
  `tradefair_id` int(11) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `target_url` varchar(200) DEFAULT NULL,
  `image_path` tinytext,
  `ordering` tinyint(1) DEFAULT NULL,
  `created` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`site_sponsor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table site_tradefair
# ------------------------------------------------------------

DROP TABLE IF EXISTS `site_tradefair`;

CREATE TABLE `site_tradefair` (
  `tradefair_id` mediumint(5) NOT NULL AUTO_INCREMENT,
  `random_id` varchar(20) DEFAULT NULL,
  `title` varchar(200) DEFAULT NULL,
  `slug` varchar(200) DEFAULT NULL,
  `location_id` mediumint(2) DEFAULT '0',
  `fair_type_id` mediumint(5) DEFAULT NULL,
  `organizer` varchar(200) DEFAULT NULL,
  `organizer_information` tinytext,
  `address` tinytext,
  `phone` int(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `start_date` int(11) DEFAULT NULL,
  `start_time` int(11) DEFAULT NULL,
  `end_date` int(11) DEFAULT NULL,
  `end_time` int(11) DEFAULT NULL,
  `ticket` tinyint(1) DEFAULT NULL,
  `ticket_price` decimal(10,2) DEFAULT NULL,
  `ticket_online` tinytext,
  `content` text,
  `excerpt` tinytext,
  `image_path` text,
  `is_slide_show` tinyint(1) DEFAULT NULL,
  `is_sponsor` tinyint(1) DEFAULT NULL,
  `is_partner` tinyint(1) DEFAULT NULL,
  `web_url` varchar(200) DEFAULT NULL,
  `created` int(11) DEFAULT NULL,
  `ordering` tinyint(2) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`tradefair_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `site_tradefair` WRITE;
/*!40000 ALTER TABLE `site_tradefair` DISABLE KEYS */;

INSERT INTO `site_tradefair` (`tradefair_id`, `random_id`, `title`, `slug`, `location_id`, `fair_type_id`, `organizer`, `organizer_information`, `address`, `phone`, `email`, `start_date`, `start_time`, `end_date`, `end_time`, `ticket`, `ticket_price`, `ticket_online`, `content`, `excerpt`, `image_path`, `is_slide_show`, `is_sponsor`, `is_partner`, `web_url`, `created`, `ordering`, `status`)
VALUES
	(4,'1375797980','New Fair','new-fair',19,142,'sdfsdf','dsfsdf','sdasdas',231231,'shafiqabs@gmail.com',1376935200,1375846200,1380045600,1375878600,1,100.00,'sdasda','dsfsdf<br>','sdfsd','uploads/tradefairs/9a157e59ae845c2d8a306c5f989203f6.jpg',1,1,1,'sdasd',1375887367,0,1);

/*!40000 ALTER TABLE `site_tradefair` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table sponsor
# ------------------------------------------------------------

DROP TABLE IF EXISTS `sponsor`;

CREATE TABLE `sponsor` (
  `sponsor_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `random_id` varchar(20) DEFAULT NULL,
  `agent_uid` bigint(20) DEFAULT NULL,
  `shop_id` bigint(20) DEFAULT NULL,
  `sponsor_image` text,
  `image_path` text,
  `alternative_sponsor` text,
  `sponsor_url` tinytext,
  `position_id` tinyint(4) DEFAULT NULL,
  `created` int(20) NOT NULL,
  `ordering` tinyint(2) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`sponsor_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



# Dump of table sponsor_copy
# ------------------------------------------------------------

DROP TABLE IF EXISTS `sponsor_copy`;

CREATE TABLE `sponsor_copy` (
  `sponsor_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `random_id` varchar(20) DEFAULT NULL,
  `agent_uid` bigint(20) DEFAULT NULL,
  `shop_id` bigint(20) DEFAULT NULL,
  `sponsor_image` text,
  `image_path` text,
  `alternative_sponsor` text,
  `sponsor_url` tinytext,
  `position_id` tinyint(4) DEFAULT NULL,
  `created` int(20) NOT NULL,
  `ordering` tinyint(2) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`sponsor_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



# Dump of table team_details
# ------------------------------------------------------------

DROP TABLE IF EXISTS `team_details`;

CREATE TABLE `team_details` (
  `team_uid` int(10) NOT NULL AUTO_INCREMENT,
  `agent_uid` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `designation` varchar(100) DEFAULT NULL,
  `tag_line` varchar(200) DEFAULT NULL,
  `t_l_footnote` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `website` varchar(200) DEFAULT NULL,
  `cell_phone` varchar(200) DEFAULT NULL,
  `business_phone` varchar(200) DEFAULT NULL,
  `fax` varchar(100) DEFAULT NULL,
  `address1` text,
  `address2` text,
  `city` varchar(100) DEFAULT NULL,
  `postal_code` varchar(100) DEFAULT NULL,
  `province` int(10) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `about` text,
  `past_revisions` text,
  `team_photo` text,
  `team_photo_path` text,
  `team_photo_path_crop` text,
  `status` int(2) DEFAULT '0',
  PRIMARY KEY (`team_uid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `team_details` WRITE;
/*!40000 ALTER TABLE `team_details` DISABLE KEYS */;

INSERT INTO `team_details` (`team_uid`, `agent_uid`, `first_name`, `last_name`, `designation`, `tag_line`, `t_l_footnote`, `email`, `website`, `cell_phone`, `business_phone`, `fax`, `address1`, `address2`, `city`, `postal_code`, `province`, `country`, `about`, `past_revisions`, `team_photo`, `team_photo_path`, `team_photo_path_crop`, `status`)
VALUES
	(1,4,'Md Shafiqul','Md Shafiqul',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','',NULL,0),
	(2,4,'xx','xx',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'7719.jpg','http://localhost/admin-ebdshop/uploads/shop/4/team/2/7719.jpg',NULL,0),
	(3,1,'Ayisha','Siddika','',NULL,NULL,'',NULL,'','','','',NULL,'','',NULL,NULL,'',NULL,'35180_n.jpg','http://localhost/admin-ebdshop/uploads/shop/1/team/3/35180_n.jpg','http://localhost/admin-ebdshop/uploads/shop/1/team/3/crop/35180_n.jpg',0),
	(4,3,'M Shafiqul','Islam',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),
	(6,3,'New','Member','Seals Men',NULL,NULL,'shafiqabs@gmail.com',NULL,'12345565','123456','423424','dhaka',NULL,'Dhaka','1000',NULL,NULL,'TestAbout',NULL,NULL,NULL,NULL,0);

/*!40000 ALTER TABLE `team_details` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table team_photo_position
# ------------------------------------------------------------

DROP TABLE IF EXISTS `team_photo_position`;

CREATE TABLE `team_photo_position` (
  `tpp_id` int(11) NOT NULL AUTO_INCREMENT,
  `team_uid` int(11) NOT NULL,
  `x` int(11) NOT NULL,
  `y` int(11) NOT NULL,
  `w` int(11) NOT NULL,
  `h` int(11) NOT NULL,
  PRIMARY KEY (`tpp_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `team_photo_position` WRITE;
/*!40000 ALTER TABLE `team_photo_position` DISABLE KEYS */;

INSERT INTO `team_photo_position` (`tpp_id`, `team_uid`, `x`, `y`, `w`, `h`)
VALUES
	(1,4,0,0,0,0),
	(2,4,0,0,0,0),
	(3,4,0,0,0,0),
	(4,4,0,0,0,0),
	(5,4,0,0,0,0),
	(6,4,0,0,0,0);

/*!40000 ALTER TABLE `team_photo_position` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table testmonials
# ------------------------------------------------------------

DROP TABLE IF EXISTS `testmonials`;

CREATE TABLE `testmonials` (
  `testmonials_id` int(11) NOT NULL AUTO_INCREMENT,
  `agent_uid` int(11) NOT NULL,
  `testmonials1` text,
  `testmonials2` text,
  `testmonials3` text,
  `testmonials4` text,
  `testmonials5` text,
  `testmonials_font_color` varchar(100) DEFAULT NULL,
  `testmonials_bg_color` varchar(100) DEFAULT NULL,
  `testmonials_pipe_color` varchar(20) DEFAULT NULL,
  `testmonials_status` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`testmonials_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `testmonials` WRITE;
/*!40000 ALTER TABLE `testmonials` DISABLE KEYS */;

INSERT INTO `testmonials` (`testmonials_id`, `agent_uid`, `testmonials1`, `testmonials2`, `testmonials3`, `testmonials4`, `testmonials5`, `testmonials_font_color`, `testmonials_bg_color`, `testmonials_pipe_color`, `testmonials_status`)
VALUES
	(1,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0);

/*!40000 ALTER TABLE `testmonials` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tradeshow
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tradeshow`;

CREATE TABLE `tradeshow` (
  `tradeshow_id` int(10) NOT NULL AUTO_INCREMENT,
  `exibition_type` int(10) DEFAULT NULL,
  `tradeshow_title` varchar(250) DEFAULT NULL,
  `venue` text,
  `description` text,
  `start_date` int(11) DEFAULT NULL,
  `end_date` int(11) DEFAULT NULL,
  `image_banner_name` varchar(200) DEFAULT NULL,
  `image_banner_path` text,
  `logo_name` varchar(200) DEFAULT NULL,
  `image_logo_path` text,
  `location_id` int(10) DEFAULT NULL,
  `address` text,
  `organizer_name` varchar(200) DEFAULT NULL,
  `contact_name` varchar(200) DEFAULT NULL,
  `mobile_no` varchar(200) DEFAULT NULL,
  `phone_no` varchar(200) DEFAULT NULL,
  `email_address` varchar(200) DEFAULT NULL,
  `website_title` varchar(200) DEFAULT NULL,
  `website` varchar(200) DEFAULT NULL,
  `opening_time` varchar(20) DEFAULT NULL,
  `end_time` varchar(20) DEFAULT NULL,
  `create_date` int(10) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`tradeshow_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `tradeshow` WRITE;
/*!40000 ALTER TABLE `tradeshow` DISABLE KEYS */;

INSERT INTO `tradeshow` (`tradeshow_id`, `exibition_type`, `tradeshow_title`, `venue`, `description`, `start_date`, `end_date`, `image_banner_name`, `image_banner_path`, `logo_name`, `image_logo_path`, `location_id`, `address`, `organizer_name`, `contact_name`, `mobile_no`, `phone_no`, `email_address`, `website_title`, `website`, `opening_time`, `end_time`, `create_date`, `status`)
VALUES
	(1,60,'Fashion shanghai 2011-17th Shanghai International Clothing&Textile Expo','Shanghai New International Expo Center','<strong>Introduction</strong><br /> Fashion shanghai is the essential sourcing event in China for apparel fabric buyers, R &amp; D and Product Development Specialists, designers, merchandisers and overseas sourcing professionals. Meet with mills and manufacturers from China and around the world showcasing their collections. The wide range of leading Chinese and international suppliers and the work oriented atmosphere manifest Fashion shanghai one must-attend trade fair in 2011 in Asia. Fashion shanghai is the annual central meeting point of China&rsquo;s textile industry and has become increasingly acknowledged abroad.',1301184000,1301184000,'612ayisha1.jpg','http://localhost/admin-ebdshop/uploads/exibition/1/banner/612ayisha1.jpg','765180_n.jpg','http://localhost/admin-ebdshop/uploads/exibition/1/logo/765180_n.jpg',18,'Dhanmondi,Dhaka','Shanghai Textile Technology Service&Exhibition Center','Mr. Noel Tian','86-21-62775353','86-21-62775353','shafiqabs@gmail.com','Shanghai Textile Technology','sss.com','0-00-pm','0-00-pm',NULL,1),
	(2,60,'xxxx','xxxxx','',1301356800,1301356800,'2228.jpg','http://localhost/admin-ebdshop/uploads/exibition/2/banner/2228.jpg','5918.jpg','http://localhost/admin-ebdshop/uploads/exibition/2/logo/5918.jpg',17,'','','','','','','','','0-00-pm','0-00-pm',NULL,1),
	(3,60,'Fashion shanghai 2011-17th Shanghai International Clothing&Textile ','Fashion shanghai','',1301356800,1301356800,'9775.jpg','http://localhost/admin-ebdshop/uploads/exibition/3/banner/9775.jpg','63D.jpg','http://localhost/admin-ebdshop/uploads/exibition/3/logo/63D.jpg',17,'','','','','','','','','0-00-pm','0-00-pm',NULL,1),
	(4,60,'New trade show','Dhaka','',1301184000,1301529600,'14413.jpg','http://localhost/admin-ebdshop/uploads/exibition/banner/14413.jpg','502010062821422330960.jpg','http://localhost/admin-ebdshop/uploads/exibition/logo/502010062821422330960.jpg',18,'','','','','','','','','0-00-pm','0-00-pm',NULL,1),
	(5,60,'fgdfg','fgfd','',1301356800,1301356800,'132bigimage03.jpg','http://localhost/admin-ebdshop/uploads/exibition/5/banner/132bigimage03.jpg','7942010062821560715030.jpg','http://localhost/admin-ebdshop/uploads/exibition/5/logo/7942010062821560715030.jpg',17,'','','','','','','','','0-00-pm','0-00-pm',NULL,1);

/*!40000 ALTER TABLE `tradeshow` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tradeshow_content
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tradeshow_content`;

CREATE TABLE `tradeshow_content` (
  `tradeshow_content_id` int(10) NOT NULL AUTO_INCREMENT,
  `tradeshow_id` int(10) DEFAULT NULL,
  `tradeshow_content_name` varchar(200) DEFAULT NULL,
  `tradeshowcontent` text NOT NULL,
  `status` int(2) DEFAULT '1',
  PRIMARY KEY (`tradeshow_content_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `tradeshow_content` WRITE;
/*!40000 ALTER TABLE `tradeshow_content` DISABLE KEYS */;

INSERT INTO `tradeshow_content` (`tradeshow_content_id`, `tradeshow_id`, `tradeshow_content_name`, `tradeshowcontent`, `status`)
VALUES
	(1,NULL,'xxx zxcxz','xzczxczxzx',1);

/*!40000 ALTER TABLE `tradeshow_content` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tradeshow_sharing
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tradeshow_sharing`;

CREATE TABLE `tradeshow_sharing` (
  `sharing_id` int(10) NOT NULL AUTO_INCREMENT,
  `tradeshow_id` int(10) DEFAULT NULL,
  `company_name` varchar(250) DEFAULT NULL,
  `website_title` varchar(200) DEFAULT NULL,
  `website` varchar(200) DEFAULT NULL,
  `logo_name` varchar(250) DEFAULT NULL,
  `image_logo_path` text,
  `status` int(1) DEFAULT '1',
  PRIMARY KEY (`sharing_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `tradeshow_sharing` WRITE;
/*!40000 ALTER TABLE `tradeshow_sharing` DISABLE KEYS */;

INSERT INTO `tradeshow_sharing` (`sharing_id`, `tradeshow_id`, `company_name`, `website_title`, `website`, `logo_name`, `image_logo_path`, `status`)
VALUES
	(1,1,'xxx pp','xx pp','xx pp','20912.jpg','http://localhost/admin-ebdshop/uploads/exibition/1/sharing/20912.jpg',1);

/*!40000 ALTER TABLE `tradeshow_sharing` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tradeshow_slide
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tradeshow_slide`;

CREATE TABLE `tradeshow_slide` (
  `tradeshow_slide_id` int(10) NOT NULL AUTO_INCREMENT,
  `tradeshow_id` int(10) DEFAULT NULL,
  `image_name` varchar(200) DEFAULT NULL,
  `image_path` text,
  `delete_path` text,
  `order` int(10) NOT NULL,
  `description` text NOT NULL,
  `slide_status` int(2) NOT NULL,
  PRIMARY KEY (`tradeshow_slide_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `tradeshow_slide` WRITE;
/*!40000 ALTER TABLE `tradeshow_slide` DISABLE KEYS */;

INSERT INTO `tradeshow_slide` (`tradeshow_slide_id`, `tradeshow_id`, `image_name`, `image_path`, `delete_path`, `order`, `description`, `slide_status`)
VALUES
	(4,4,'2829589842.jpg','http://localhost/admin-ebdshop/uploads/exibition/4/slidegallery/2829589842.jpg','uploads/exibition/4/slidegallery/2829589842.jpg',6,'',1),
	(6,4,'5959777834.jpg','http://localhost/admin-ebdshop/uploads/exibition/4/slidegallery/5959777834.jpg','uploads/exibition/4/slidegallery/5959777834.jpg',2,'',1),
	(7,4,'5005798333.jpg','http://localhost/admin-ebdshop/uploads/exibition/4/slidegallery/5005798333.jpg','uploads/exibition/4/slidegallery/5005798333.jpg',3,'',1),
	(8,4,'5180664063D.jpg','http://localhost/admin-ebdshop/uploads/exibition/4/slidegallery/5180664063D.jpg','uploads/exibition/4/slidegallery/5180664063D.jpg',4,'',1),
	(9,4,'8226928715.jpg','http://localhost/admin-ebdshop/uploads/exibition/4/slidegallery/8226928715.jpg','uploads/exibition/4/slidegallery/8226928715.jpg',5,'',1);

/*!40000 ALTER TABLE `tradeshow_slide` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tradeshow_sponser
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tradeshow_sponser`;

CREATE TABLE `tradeshow_sponser` (
  `sponser_id` int(10) NOT NULL AUTO_INCREMENT,
  `tradeshow_id` int(10) DEFAULT NULL,
  `company_name` varchar(250) DEFAULT NULL,
  `website_title` varchar(200) DEFAULT NULL,
  `website` varchar(200) DEFAULT NULL,
  `logo_name` varchar(250) DEFAULT NULL,
  `image_logo_path` text,
  `status` int(1) DEFAULT '1',
  PRIMARY KEY (`sponser_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `tradeshow_sponser` WRITE;
/*!40000 ALTER TABLE `tradeshow_sponser` DISABLE KEYS */;

INSERT INTO `tradeshow_sponser` (`sponser_id`, `tradeshow_id`, `company_name`, `website_title`, `website`, `logo_name`, `image_logo_path`, `status`)
VALUES
	(1,3,'dvgfd','ddfg','fdgfd','951DSC32361.jpg','http://localhost/admin-ebdshop/uploads/exibition/3/sponser/951DSC32361.jpg',1),
	(2,1,'fdgdfg','fdgdf','fdgf','859180_n.jpg','http://localhost/admin-ebdshop/uploads/exibition/1/sponser/859180_n.jpg',1),
	(3,3,'cxvxc','cdvcx','cxvxcv','110m1509158_AN852428_001_248.jpg','http://localhost/admin-ebdshop/uploads/exibition/3/sponser/110m1509158_AN852428_001_248.jpg',1);

/*!40000 ALTER TABLE `tradeshow_sponser` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tradeshow_ticket_class
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tradeshow_ticket_class`;

CREATE TABLE `tradeshow_ticket_class` (
  `ticket_class_id` int(11) NOT NULL AUTO_INCREMENT,
  `tradeshow_id` int(11) DEFAULT NULL,
  `ticket_type_name` varchar(200) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  PRIMARY KEY (`ticket_class_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `tradeshow_ticket_class` WRITE;
/*!40000 ALTER TABLE `tradeshow_ticket_class` DISABLE KEYS */;

INSERT INTO `tradeshow_ticket_class` (`ticket_class_id`, `tradeshow_id`, `ticket_type_name`, `price`, `quantity`)
VALUES
	(1,1,'vvv',11,22),
	(2,1,'zxczx',12,11);

/*!40000 ALTER TABLE `tradeshow_ticket_class` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table user_access_log
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user_access_log`;

CREATE TABLE `user_access_log` (
  `Log_id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(10) DEFAULT NULL,
  `access_date` int(10) DEFAULT NULL,
  PRIMARY KEY (`Log_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `user_access_log` WRITE;
/*!40000 ALTER TABLE `user_access_log` DISABLE KEYS */;

INSERT INTO `user_access_log` (`Log_id`, `uid`, `access_date`)
VALUES
	(1,1,1333840566),
	(2,1,1333850411),
	(3,1,1333850512),
	(4,1,1333850521),
	(5,1,1333850614),
	(6,1,1333850660),
	(7,1,1333853805),
	(8,1,1333894428),
	(9,1,1333895213),
	(10,1,1333895437),
	(11,1,1333937436),
	(12,1,1333937587),
	(13,1,1333939414);

/*!40000 ALTER TABLE `user_access_log` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table user_access_mapping
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user_access_mapping`;

CREATE TABLE `user_access_mapping` (
  `uamid` int(11) NOT NULL AUTO_INCREMENT,
  `access_name` varchar(50) NOT NULL,
  `admin` int(10) DEFAULT NULL,
  `agent` int(1) NOT NULL,
  `brokerage` tinyint(1) NOT NULL,
  `settings` int(1) DEFAULT '0',
  `rank` int(5) DEFAULT NULL,
  PRIMARY KEY (`uamid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `user_access_mapping` WRITE;
/*!40000 ALTER TABLE `user_access_mapping` DISABLE KEYS */;

INSERT INTO `user_access_mapping` (`uamid`, `access_name`, `admin`, `agent`, `brokerage`, `settings`, `rank`)
VALUES
	(1,'Administrator',1,1,1,1,2),
	(2,'Brokerage',0,1,1,0,1),
	(3,'Agent',0,1,0,0,3);

/*!40000 ALTER TABLE `user_access_mapping` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `uid` int(10) NOT NULL AUTO_INCREMENT,
  `access_slug` varchar(200) NOT NULL,
  `domain_name` varchar(200) DEFAULT '',
  `subdomain_name` varchar(100) DEFAULT NULL,
  `access_type` int(10) DEFAULT NULL,
  `user_name` varchar(200) DEFAULT '',
  `user_email` varchar(200) DEFAULT '',
  `password` varchar(200) DEFAULT '',
  `email_notification` int(2) DEFAULT '0',
  `publish_main_website` int(3) DEFAULT '1',
  `add_date` int(10) DEFAULT NULL,
  `update_date` int(20) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`uid`, `access_slug`, `domain_name`, `subdomain_name`, `access_type`, `user_name`, `user_email`, `password`, `email_notification`, `publish_main_website`, `add_date`, `update_date`, `status`)
VALUES
	(1,'abc','','grammen-phone',1,'admin-tt','shafiqabs@gmail.com','d41d8cd98f00b204e9800998ecf8427e',1,1,1365434488,1371866004,0),
	(4,'xenial','xenial',NULL,3,'cats4','','d41d8cd98f00b204e9800998ecf8427e',0,1,1315224163,0,0),
	(3,'california-fried-chiken-pastry-shop','cfc.com','cfc',3,'california','','d41d8cd98f00b204e9800998ecf8427e',1,1,1315313386,1373821706,1),
	(5,'others','',NULL,3,'epcc2mzj','','a4288df85b6f9dda64ad21e57b640bd0',0,1,1301499028,0,0),
	(6,'test-shop','',NULL,3,'quygydhj','','711f21d6a4fe42985f915da5e97217a9',0,1,1301499124,0,0),
	(7,'test-shop1','',NULL,3,'9ixpqdm6','','e0a1aa5435833f515e1b5ecf640a6a00',0,1,1301499133,0,0),
	(11,'dina','','dina',4,'e2sdiix1','','3a4cd063d5c767bdfa1b395906dff5f4',0,1,1301500065,1377621319,1),
	(17,'dd','',NULL,4,'nsystxve','','de792cd74e04e51927cda2536d2f16a0',0,1,1365241935,0,1),
	(18,'am','','am',4,'x4xlirep','','e984ba01c147a524376a4cb1d4e14ceb',0,1,1365241963,1376729748,1),
	(19,'ummar','','ummar',4,'cbma0cpg','','fc573326f1f4092eec39e915931ad63c',0,1,1365241992,1377621286,1),
	(30,'dd-dds','',NULL,4,'sxxgxfso','','21232f297a57a5a743894a0e4a801fc3',0,1,1342936305,0,1),
	(31,'test-mall','',NULL,4,'kzaso1xr','','58e656207bc84b6289c2f92968f99735',0,1,1365242069,1370911835,1),
	(32,'estern-plaza','dss.com',NULL,3,'eastern','','d41d8cd98f00b204e9800998ecf8427e',0,1,1365132117,1371513127,1),
	(33,'estern-plazax','',NULL,3,'azax','','b3be1c6594ceb7a38485f1b0dbf8dc8b',0,1,1365133724,0,0),
	(34,'rapa-plaza','rapa-plaza',NULL,0,'rapaplaza','','',0,1,0,0,1),
	(35,'bashundhara-city','',NULL,3,'bashundh','','9eab1b21a878ee4f6907fedb29a93856',0,1,1365150796,0,1),
	(36,'','',NULL,4,'dmkj97nz','','7067c763126e31147fecff747c356eb3',0,1,1367732734,0,1),
	(37,'','',NULL,4,'kozi884i','','54266d0cd7427b6723da1cc2c6c27f0f',0,1,1367733691,0,1),
	(38,'amxx','',NULL,3,'amxx','','e1739ccd06dfd52b6dcc4ddcfe6d4f2f',0,1,1367734864,0,1),
	(39,'amxx-1','',NULL,3,'amxx-1','','c8f1d2ca45417d4643cf10ffb20c984a',0,1,1367734968,0,1),
	(40,'am-1','',NULL,3,'am','','a5cc33a6d9e41b691c6bcf9e6fcd0928',0,1,1367771269,1378946381,1),
	(41,'amxx-2','',NULL,3,'amxx-1','','32fc4ab6545bdbf02fa949e011ad8ccd',0,1,1367944254,0,1),
	(42,'amxx-3','',NULL,3,'amxx-1','','cd1a7b0f0dc505deb6cea1d075fffd7a',0,1,1367944525,0,1),
	(43,'amxx-4','',NULL,3,'amxx-1','','16da001807d2a6ad4a69c09db06b22cb',0,1,1367944536,0,1),
	(44,'cfc','dsc',NULL,3,'cfc','','46649e68560c5619489442ab602f371b',1,1,1370156759,1370181263,1),
	(45,'alpona-plaza','',NULL,3,'alponapl','','e49953da69301154872bda55e9d82db4',0,1,1370357525,0,1),
	(46,'sdddfdf','',NULL,3,'sdddfdf','','0c5a3fe93c8d11212158518c8d9aa6d4',0,1,1370357667,0,1),
	(47,'sdddfdf-1','abc.com',NULL,3,'sdddfdf-1','','a320056a800cd6cf830f2a8828076f5d',1,1,1370357694,1370359388,1),
	(48,'metro-shopping-mall','',NULL,3,'metrosho','','30069421a28c63801d64cc28891a65b2',0,1,1370359496,0,1),
	(49,'ummar-1','',NULL,3,'ummar','','1c44bb03ba91ff6ab90d571a9b7e6608',0,1,1370884191,1370911495,1),
	(50,'muslim-sweets','muslim-sweets','muslim-sweets',3,'muslimsw','','442f0a0a32d73cfdd5f6b6c497767494',0,1,1373416998,NULL,1),
	(51,'muslim-sweets-1','muslim-sweets-1','muslim-sweets-1',3,'muslimsw-1','','fb9a199ef2bb56a73facc91eedd01d57',0,1,1373417032,NULL,1),
	(52,'muslim-sweets-2','muslim-sweets-2','muslim-sweets-2',3,'muslimsw-1','','a982eac309d8deb0c2d09974d8a4064c',0,1,1373417069,NULL,1),
	(53,'muslim-sweets-3','muslim-sweets-3','muslim-sweets-3',3,'muslimsw-1','','763bc08cb29ba748c7215bd6d6e81156',0,1,1373417481,NULL,1),
	(54,'beximco-pharmaticals','beximco-pharmaticals','beximco-pharmaticals',3,'beximcop','','2a86aa9baeb73ef6d9f7452a86a813f0',0,1,1373856669,1373856811,1),
	(55,'zxczxczxc','zxczxczxc','zxczxczxc',3,'zxczxczx','','9448b25b17a300002bc59a97cd81e690',0,1,1376106854,NULL,1),
	(56,'square','square','square',3,'square','','41861a2c12c7ee89697edd520360d46f',0,1,1376107188,NULL,1),
	(57,'inn-international','inn-international','inn-international',3,'inninter','','a2bfd8342c537a76a01ae25a03823126',0,1,1376107898,NULL,1),
	(58,'shapleza','shapleza','shapleza',3,'shapleza','','d8d5598b20b33e2f20abf33591c56061',0,1,1376108200,NULL,1),
	(59,'modina-ator','modina-ator','modina-ator',3,'modinaat','','b9f403f6bcf3c18a0b70f5dde5ebcee0',0,1,1376108568,NULL,1),
	(60,'azad-products','azad-products','azad-products',3,'azadprod','','b99b982a312d8f582876368442746a12',0,1,1376149381,1376193231,1),
	(61,'beximco-pharmaticals-mlm','beximco-pharmaticals-mlm','beximco-pharmaticals-mlm',3,'beximcop-1','','5a0e8fb4d4cd23e5e34943328a47133b',0,1,1376659531,NULL,1),
	(62,'abc-plaza','abc-plaza','abc-plaza',3,'abcplaza','','16e31705ed732cd2a9523e0f1a3d98d9',0,1,1376661974,NULL,1),
	(63,'a1','a1','a1',3,'a1','','8f606e933e7366458727dbce1862a737',0,1,1376662377,NULL,1),
	(64,'a1-1','a1-1','a1-1',3,'a1-1','','26bf71a1b017c6f63dcec1e57e4c146f',0,1,1376662388,NULL,1),
	(65,'a1-2','a1-2','a1-2',3,'a1-1','','4e7d1e5817ea5b3d805ea6c81d9fb7ff',0,1,1376662470,NULL,1),
	(66,'fdgdfg','fdgdfg','fdgdfg',3,'fdgdfg','','5df0159597ee20fca768957d9d72066a',0,1,1376662524,NULL,1),
	(67,'fdgdfg-1','fdgdfg-1','fdgdfg-1',3,'fdgdfg-1','','d3301e4347d37fed675a80cc3edc7d5a',0,1,1376662529,NULL,1),
	(68,'zdfsdfsf','zdfsdfsf','zdfsdfsf',3,'zdfsdfsf','','d221139e6fc2b19e32de569ab40c7f2b',0,1,1376662591,NULL,1),
	(69,'asfdfsdf','asfdfsdf','asfdfsdf',3,'asfdfsdf','','842d411247af4ded87e8b70f3e6cbd3b',0,1,1376662726,NULL,1),
	(70,'1shop','1shop','1shop',3,'1shop','','9eedeaeb321e3f2ba4a170195746eb9b',0,1,1376662966,NULL,1),
	(71,'2-shop','2-shop','2-shop',3,'2shop','','c7c3c2496bd02e1364e34acdb490154a',0,1,1376663058,NULL,0),
	(72,'2-sfghh','2-sfghh','2-sfghh',3,'2sfghh','','060aad28e38d1c1f591ec552c7ce89eb',0,1,1376663131,NULL,1),
	(73,'1-sssss','1-sssss','1-sssss',3,'1sssss','','9778adf45093ec1d128d952bd693f4b3',0,1,1376663235,1376755645,1),
	(74,'1shgfd','1shgfd','1shgfd',3,'1shgfd','','cac923fdede7ef13d9e71aa277a21ef7',0,1,1376663405,NULL,1),
	(75,'zzzzzz','zzzzzz','zzzzzz',3,'zzzzzz','','fcb17729c6d2097f13c805b7ff312d43',0,1,1376663472,NULL,1),
	(76,'pppp','pppp','pppp',3,'pppp','','2932e8621d113ca0efdb3a7559f8e614',0,1,1376663502,NULL,1),
	(77,'aaaaa','aaaaa','aaaaa',3,'aaaaa','','c0bfac06b410eda139b0d36203e10a03',1,1,1376663715,1380291136,1),
	(78,'bbb','bbb','bbb',3,'bbb','','3002a045a9a3b972edc3d713ea8b77f5',0,1,1376663842,NULL,1),
	(79,'rrrr','rrrr','rrrr',3,'rrrr','','7b21a226ccd8f1dfce989831f505c0b7',0,1,1376663886,1376663911,1),
	(80,'beximco-pharmaticals-1','beximco-pharmaticals-1','beximco-pharmaticals-1',3,'beximcop-1','','5723fd7331d08950e26ebc719f5c225f',0,1,1376663983,NULL,1),
	(81,'xzxcxz','xzxcxz','xzxcxz',3,'xzxcxz','','de9b98680db0302cb4d94e2e44660eeb',0,1,1376664170,NULL,1),
	(82,'sdasdasd','sdasdasd','sdasdasd',3,'sdasdasd','','94dc87d5df77aea6bf47f8a700da77c1',0,1,1376664293,NULL,1),
	(83,'sdasdasd-1','sdasdasd-1','sdasdasd-1',3,'sdasdasd-1','','665d6c7da5ab37ed5c22d3efb540c9f9',0,1,1376664298,NULL,1),
	(84,'asas','asas','asas',3,'asas','','3511f5524f6abcdbbcef9b1c2d0e88d9',0,1,1376664332,NULL,1),
	(85,'zxczxc','zxczxc','zxczxc',3,'zxczxc','','94bf528945c5cdeb9a9e9a702b50b21d',0,1,1376664419,NULL,1),
	(86,'sasasss','sasasss','sasasss',3,'sasasss','','9dee8c50b4854df51ee4de32dc222e81',0,1,1376664704,NULL,1),
	(87,'sdsdasd','sdsdasd','sdsdasd',3,'sdsdasd','','b5076c8672e1705e796085e0c1f333a0',0,1,1376664849,NULL,1),
	(88,'xvxcx','xvxcx','xvxcx',3,'xvxcx','','b27406218b17f7dd60d08d852d20c87d',0,1,1376664941,NULL,1),
	(89,'dsfsdfsdf','dsfsdfsdf','dsfsdfsdf',3,'dsfsdfsd','','54f589c308e8ff444503300c9fe0aff5',0,1,1376665052,NULL,1),
	(90,'','','',3,'-1','','50ffc223ad7bf4d545c330722ac66cae',0,1,1376665092,NULL,1),
	(91,'','','',3,'-1','','7619d0b8c37f42c497e99709c59c3511',0,1,1376665102,NULL,1),
	(92,'','','',3,'-1','','ad2e16b94adf150d7a205f47d1b6a9e6',0,1,1376665150,NULL,1),
	(93,'','','',3,'-1','','8cb4d20a9f9a938dfa02843a8682d166',0,1,1376665166,NULL,1),
	(94,'','','',3,'-1','','b56ea30a5affb2b14cd0a96dac66826b',0,1,1376665265,NULL,1),
	(95,'dsfsfsdffdsfdsfds','dsfsfsdffdsfdsfds','dsfsfsdffdsfdsfds',3,'dsfsfsdf','','b86db68e7dcc7fcf366d634e735ef69b',0,1,1376730206,1376730509,1),
	(96,'asssssss','asssssss','asssssss',3,'asssssss','','8336e09d72cc0c4235817c0ca7938b05',0,1,1376730532,NULL,1),
	(97,'asssssss-1','asssssss-1','asssssss-1',3,'asssssss-1','','803ba144c91310cf9c2c0096b955e094',0,1,1376730533,NULL,1),
	(98,'sdasd','sdasd','sdasd',3,'sdasd','','2bee4bf8b969c9ef06d0e46f4a2b366d',0,1,1376753290,NULL,1),
	(99,'anchal','anchal','anchal',3,'anchal','','58c34ac2e2bdf65e0b38d2c3490b099a',0,1,1377855334,1380349465,1);

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table website_slide
# ------------------------------------------------------------

DROP TABLE IF EXISTS `website_slide`;

CREATE TABLE `website_slide` (
  `website_slide_id` int(10) NOT NULL AUTO_INCREMENT,
  `agent_uid` int(10) DEFAULT NULL,
  `image_name` varchar(200) DEFAULT NULL,
  `image_path` text,
  `image_path_thumb` text NOT NULL,
  `image_path_large` text NOT NULL,
  `order` int(10) NOT NULL,
  `description` text NOT NULL,
  `slide_status` int(2) NOT NULL,
  PRIMARY KEY (`website_slide_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



# Dump of table website_template
# ------------------------------------------------------------

DROP TABLE IF EXISTS `website_template`;

CREATE TABLE `website_template` (
  `website_template_id` int(10) NOT NULL AUTO_INCREMENT,
  `template_name` varchar(200) DEFAULT NULL,
  `dashboard_publish` int(2) NOT NULL DEFAULT '0',
  `status` int(2) DEFAULT '0',
  PRIMARY KEY (`website_template_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `website_template` WRITE;
/*!40000 ALTER TABLE `website_template` DISABLE KEYS */;

INSERT INTO `website_template` (`website_template_id`, `template_name`, `dashboard_publish`, `status`)
VALUES
	(1,'Default Theme',0,1),
	(2,'Castor (Light)',0,1),
	(3,'Bayfield(Blue)',1,1),
	(4,'Bayfield (Beige)',0,1),
	(5,'Ekwan (Dark Grey) Right Menu',1,1),
	(7,'Fenelon( Red)',1,1),
	(6,'Ekwan (Light Grey) Left Menu',1,1),
	(10,'Castor (Dark)',2,1),
	(9,'Detroit (Beige)',0,1),
	(11,'Detroit (Blue)',1,1),
	(12,'Detroit (Charcoal)',0,1),
	(8,'Barry Cohen',1,0),
	(13,'Niels Christensen',1,1),
	(14,'The partnership',1,1),
	(15,'Sharon Bobkin',1,1),
	(16,'Robert Greenberg',1,1),
	(17,'EliseKallas',1,1),
	(18,'Roger Kilgour',1,1),
	(19,'TorontoHomeRelocation',1,1),
	(20,'John Fortney',1,1),
	(21,'Xyz',0,1);

/*!40000 ALTER TABLE `website_template` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table y_search_content
# ------------------------------------------------------------

DROP TABLE IF EXISTS `y_search_content`;

CREATE TABLE `y_search_content` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `content` text NOT NULL,
  `category` int(11) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

LOCK TABLES `y_search_content` WRITE;
/*!40000 ALTER TABLE `y_search_content` DISABLE KEYS */;

INSERT INTO `y_search_content` (`cid`, `title`, `content`, `category`)
VALUES
	(1,'Y-Search sample title for testing_1','Replace what you want to replace, change what you need to change. Child themes allow control over styling, images, and template files, without being stuck with an out of date theme.',1),
	(2,'Y-Search sample title for testing_2','Child themes preserve updates to the parent theme. That means when we add new features to our themes they\'ll automatically be added in your child theme.',1),
	(3,'Y-Search sample title for testing_3','Creating new mobile themes and variations of existing mobile themes is easier than ever in WPtouch Pro. Create a child theme to start customizing in the admin panel in a single click.',1),
	(4,'Y-Search sample title for testing_4','The fly-in comment form makes discussion on iPad fun and easy. The form flies in from the top, and tucks away again when not in use.',1),
	(5,'Y-Search sample title for testing_5','When writing a comment reply, you can easily \'peek\' at the original comment you\'re replying to with a quick tap.',1),
	(6,'Y-Search sample title for testing_6','Comments are posted in real-time, using AJAX technologies, and the page is updated to show the new comment.',1);

/*!40000 ALTER TABLE `y_search_content` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
