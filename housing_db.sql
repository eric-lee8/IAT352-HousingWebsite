CREATE DATABASE JUSTIN_LAU;
USE JUSTIN_LAU;

/*Table structure for table `agents` */
DROP TABLE IF EXISTS `agents`;
CREATE TABLE IF NOT EXISTS `agents` (
  `agent_ID` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `ph_no` varchar(100) NOT NULL,
  PRIMARY KEY (`agent_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `agents` WRITE;

/*Data for the table `agents` */
INSERT INTO `agents` (`agent_ID`, `email`, `name`, `ph_no`) VALUES
(3738, 'bruno_bezjak@remax.ca', 'BRUNO BEZJAK', '(604) 567-2191'),
(5641, 'gilco@remax.ca', 'GILCO REAL ESTATE SERVICES', '(604) 468-5361'),
(7927, 'faith_wilson@remax.ca', 'FAITH WILSON GROUP', '(604) 328-5580'),
(3679, 'sutton_group@remax.ca', 'SUTTON GROUP - 1ST WEST REALTY', '(604) 522-7054'),
(6859, 'century21@remax.ca', 'CENTURY 21 COASTAL REALTY LTD', '(604) 998-9008'),
(3041, 'harvy_jawanda@remax.ca', 'HARVY JAWANDA', '(604) 460-4254'),
(8749, 'sutton_group@remax.ca', 'SUTTON GROUP-WEST COAST REALTY', '(604) 522-7054'),
(5216, 'royal_lepage@remax.ca', 'ROYAL LEPAGE WEST REAL ESTATE SERVICES', '(604) 305-5148'),
(4725, 'regent_park@remax.ca', 'REGENT PARK REALTY INC.', '(604) 801-6338');

UNLOCK TABLES;

/*Table structure for table `property` */
DROP TABLE IF EXISTS `property`;
CREATE TABLE `property` (
  `listing_id` varchar(100) NOT NULL,
  `beds` int (11) NOT NULL,
  `baths` int (11) NOT NULL,
  `sqft` int (11) NOT NULL,
  `date_listed` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `price` double NOT NULL,
  `type` varchar(100) NOT NULL,
  `property_agent_ID` int(11) NOT NULL,
  PRIMARY KEY (`listing_id`),
  KEY `property_agent_ID` (`property_agent_ID`),
  CONSTRAINT `property_ibfk_1` FOREIGN KEY (`property_agent_ID`) REFERENCES `agents` (`agent_ID`)

) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `property` WRITE;

-- /*Data for the table `property` */
INSERT INTO `property` (`listing_id`, `beds`, `baths`, `sqft`, `date_listed`, `city`, `address`, `price`, `type`, `property_agent_ID`) VALUES
('R2515047', 4, 4, 1808, 'Nov 03, 2020', 'Surrey', '84 - 16336 23A AVE', 832000, 'Townhouse', 3738),
('R2515566', 2, 2, 876, 'Nov 05 2020', 'Surrey', '409 - 13789 107A AVE', 464853,  'Condo', 5641),
('R2515580', 4, 4, 1048, 'Nov 05 2020', 'Surrey', '419 - 9979 140 ST', 459000, 'Condo', 7927),
('R2515645', 3, 2, 1656, 'Nov 05 2020', 'Surrey', '317 - 13918 72 AVE', 499000, 'Condo', 3679),
('R2515498', 4, 4, 1718, 'Nov 05 2020', 'Surrey', '24 - 6383 140 ST', 599000,  'Townhouse', 6859),
('R2515690', 9, 8, 6135, 'Nov 07 2020', 'Surrey', '15094 84 AVE', 1788800, 'House', 3041),
('R2515103', 6, 10, 8503, 'Nov 06 2020', 'Surrey', '16230 90 AVE', 2688000, 'House', 8749),
('R2511070', 2, 1, 744, 'Oct 21 2020', 'Surrey', '31 - 8266 KING GEORGE BLVD', 68800,  'House', 5216),
('R2514986', 2, 2, 1152, 'Nov 03 2020', 'Surrey', '307 - 10581 140 ST', 620000, 'Condo', 4725),
('R2521510', 2, 2, 1084, 'Dec 02 2020', 'Surrey', '15895 84 AVENUE', 425000, 'Condo', 5216),

('R2517336', 2, 2, 908, 'Nov 12 2020', 'Vancouver', '1802 - 188 KEEFER PL', 849000, 'Condo', 5216),
('R2517245', 3, 2, 2496, 'Nov 12 2020', 'Vancouver', 'TH20 1281 W CORDOVA STREET', 3799000, 'Townhouse', 4725),
('R2517407', 2, 2, 1136, 'Nov 12 2020', 'Vancouver', '308 - 7580 COLUMBIA ST', 888000, 'Condo', 4725),
('R2215124', 5, 3, 2510, 'Oct 15 2017', 'Vancouver', '1335 E 12 AVE', 3999000, 'House', 4725),
('R2279530', 4, 3, 2450, 'Jun 12 2018', 'Vancouver', '5334 CECIL ST', 2199999, 'House', 4725),
('R2335531', 1, 1, 901, 'Jan 24 2019', 'Vancouver', '205 - 3440 BROADWAY W', 650000, 'Condo', 4725),
('R2352810', 8, 7, 3408, 'Mar 26 2018', 'Vancouver', '2248 GALT ST', 3000000, 'House', 4725),
('R2388956', 4, 2, 1914, 'Jun 14 2019', 'Vancouver', '1502 - 2628 ASH ST', 2500000, 'Condo', 4725),
('R2401535', 5, 3, 2055, 'Sep 02 2019', 'Vancouver', '5329 WALES ST', 2650000, 'House', 4725),
('R2425177', 6, 1, 3335, 'Dec 16 2019', 'Vancouver', '1842 E 64 AVE', 2380000, 'House', 4725),

('R2423442', 7, 4, 2557, 'Dec 02 2019', 'Burnaby', '4670 CANADA WAY', 1589000, 'House', 5216),
('R2521496', 2, 1, 976, 'Dec 02 2020', 'Burnaby', '119 - 9101 HORNE ST', 458000, 'Condo', 5216),
('R2521512', 2, 2, 1191, 'Dec 02 2020', 'Burnaby', '415 - 6707 SOUTHPOINT DR', 649900, 'Condo', 5216),
('R2521376', 1, 1, 765, 'Dec 01 2020', 'Burnaby', '403 - 4181 NORFOLK ST', 458000, 'Condo', 5216),
('R2521404', 1, 1, 2342, 'Dec 01 2020', 'Burnaby', '2505 LARKIN CRT', 999000, 'House', 5216),
('R2521056', 2, 2, 1173, 'Nov 30 2020', 'Burnaby', '602 - 6240 MCKAY AVE', 698000, 'Condo', 5216),
('R2521109', 1, 1, 1860, 'Nov 30 2020', 'Burnaby', '3047 CARINA PLACE', 649000, 'Townhouse', 5216),
('R2520995', 2, 2, 926, 'Nov 30 2020', 'Burnaby', '104 - 6939 GILLEY AVE', 499000, 'Condo', 5216),


('R2521364', 1, 1, 737, 'Dec 01 2020', 'New Westminster', '808 - 1 RENAISSANCE SQ', 399900, 'Condo', 8749),
('R2521266', 1, 1, 767, 'Dec 01 2020', 'New Westminster', '202 - 410 AGNES ST', 358900, 'Condo', 8749),
('R2521350', 2, 1, 949, 'Dec 01 2020', 'New Westminster', '303 - 550 8 ST', 350000, 'Condo', 8749),
('R2521182', 4, 3, 4634, 'Nov 30 2020', 'New Westminster', '105 3 AVE', 1998000, 'House', 8749),
('R2521046', 2, 2, 1115, 'Nov 30 2020', 'New Westminster', '1204 - 1135 QUAYSIDE DR', 628900, 'Condo', 8749),
('R2521169', 2, 1, 756, 'Nov 30 2020', 'New Westminster', '802 - 988 QUAYSIDE DR', 608000, 'Condo', 8749),
('R2521070', 2, 2, 1245, 'Nov 30 2020', 'New Westminster', '1104 - 98 10 ST', 639000, 'Condo', 8749),

('R2517245', 1, 1, 607, 'Nov 12 2020', 'North Vancouver', '101 - 210 W 13 ST', 530000, 'Condo', 3041),
('R2521467', 2, 2, 849, 'Dec 02 2020', 'North Vancouver', '301 - 177 3 ST W', 849900, 'Condo', 3041),
('R2521157', 2, 2, 1205, 'Nov 30 2020', 'North Vancouver', 'TH4 1288 CHESTERFIELD AVENUE', 869000, 'Townhouse', 3041),
('R2521018', 3, 2, 1378, 'Nov 30 2020', 'North Vancouver', '2005 - 188 ESPLANADE E', 2199000, 'Condo', 3041),
('R2520868', 5, 2, 2536, 'Nov 29 2020', 'North Vancouver', '726 E 17 ST', 1748000, 'House', 3041),
('R2520040', 3, 2, 1914, 'Nov 23 2020', 'North Vancouver', '726 E 17 ST', 1329800, 'House', 3041);

UNLOCK TABLES;

/*Table structure for table `members` */
DROP TABLE IF EXISTS `members`;
CREATE TABLE IF NOT EXISTS `members` (
 
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,

  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



/*Table structure for table `favorited_properties` */
DROP TABLE IF EXISTS `favorited_properties`;
CREATE TABLE IF NOT EXISTS `favorited_properties` (

  `email` varchar(255) NOT NULL,
  `property_listing_id` varchar(100) NOT NULL,

  KEY `email` (`email`),
  CONSTRAINT `email_ibfk_1` FOREIGN KEY (`email`) REFERENCES `members` (`email`),

  KEY `property_listing_id` (`property_listing_id`),
  CONSTRAINT `property_listing_ibfk_1` FOREIGN KEY (`property_listing_id`) REFERENCES `property` (`listing_id`)

) ENGINE=InnoDB DEFAULT CHARSET=latin1;