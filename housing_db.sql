-- CREATE DATABASE JUSTIN_LAU;

DROP TABLE IF EXISTS `Property`;
CREATE TABLE IF NOT EXISTS `Property` (
  `listing_id` varchar(100) DEFAULT NULL,
  `realtor` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `beds` float DEFAULT NULL,
  `baths` float DEFAULT NULL,
  `sqft` float DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`listing_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `Property` (`listing_id`, `realtor`, `city`, `address`, `price`, `beds`, `baths`, `sqft`, `type`) VALUES
('R2515047', 'BRUNO BEZJAK', 'Surrey', '84 - 16336 23A AVE', 832000, 4, 4, 1808, "Townhouse"),
('R2515566', 'GILCO REAL ESTATE SERVICES', 'Surrey', '409 - 13789 107A AVE', 464853, 2, 2, 876, "Condo"),
('R2515580', 'FAITH WILSON GROUP', 'Surrey', '419 - 9979 140 ST', 459000, 4, 4, 1048, "Condo"),
('R2515645', 'SUTTON GROUP - 1ST WEST REALTY', 'Surrey', '317 - 13918 72 AVE', 499000, 3, 2, 1656, "Condo"),
('R2515498', 'CENTURY 21 COASTAL REALTY LTD', 'Surrey', '24 - 6383 140 ST', 599000, 4, 4, 1718, "Townhouse"),
('R2515690', 'HARVY JAWANDA', 'Surrey', '15094 84 AVE', 1788800, 9, 8, 6135, "House"),
('R2515103', 'SUTTON GROUP-WEST COAST REALTY', 'Surrey', '16230 90 AVE', 2688000, 6, 10, 8503, "House"),
('R2511070', 'ROYAL LEPAGE WEST REAL ESTATE SERVICES', 'Surrey', '31 - 8266 KING GEORGE BLVD', 68800, 2, 1, 744, "Manufactured House"),
('R2514986', 'REGENT PARK REALTY INC.', 'Surrey', '307 - 10581 140 ST', 620000, 2, 2, 1152, "Condo");



DROP TABLE IF EXISTS `Members`;
CREATE TABLE IF NOT EXISTS `Members` (
  `email` varchar(100) DEFAULT NULL,
  `realtor` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `beds` float DEFAULT NULL,
  `baths` float DEFAULT NULL,
  `sqft` float DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;