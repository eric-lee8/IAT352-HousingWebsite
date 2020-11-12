-- CREATE DATABASE JUSTIN_LAU;

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
  -- KEY `agent_ID` (`agent_ID`),
  -- CONSTRAINT `FK_PropertyAgent` FOREIGN KEY (`agent_ID`) REFERENCES `agents` (`agent_ID`)
  -- CONSTRAINT `FK_PropertyAgent` FOREIGN KEY (`agent_ID`) REFERENCES `agents` (`agent_ID`)

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
('R2514986', 2, 2, 1152, 'Nov 03 2020', 'Surrey', '307 - 10581 140 ST', 620000, 'Condo', 4725);

UNLOCK TABLES;

/*Table structure for table `members` */
DROP TABLE IF EXISTS `members`;
CREATE TABLE IF NOT EXISTS `members` (
  `email` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `ph_no` varchar(100) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






