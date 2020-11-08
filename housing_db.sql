CREATE DATABASE housing_db;

CREATE TABLE IF NOT EXISTS `Property` (
  `listing_id` int(11) NOT NULL,
  'realtor' varchar(100) DEFAULT NULL,
  'city' varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `beds` int(11) DEFAULT NULL,
  `baths` int(11) DEFAULT NULL,
  `sqft` int(11) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`listing_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Household`
--

INSERT INTO `Property` (`listing_id`, 'realtor', 'city', 'address', 'price', `beds`, `baths`, `sqft`, 'type') VALUES
('R2515047', 'BRUNO BEZJAK', 'Surrey', '84 - 16336 23A AVE', 832000, 4, 4, 1808, "Townhouse"),
('R2515566', 'GILCO REAL ESTATE SERVICES', 'Surrey', '409 - 13789 107A AVE', 464853, 2, 2, 876, "Condo"),
('R2515580', 'FAITH WILSON GROUP', 'Surrey', '419 - 9979 140 ST', 459000, 4, 4, 1048, "Condo"),
('R2515047', 'BRUNO BEZJAK', 'Vancouver', '84 - 16336 23A AVE', 832000, 4, 4, 1808, "Condo"),
('R2515047', 'BRUNO BEZJAK', 'Vancouver', '84 - 16336 23A AVE', 832000, 4, 4, 1808, "Townhouse"),
('R2515047', 'BRUNO BEZJAK', 'Vancouver', '84 - 16336 23A AVE', 832000, 4, 4, 1808, "House"),
('R2515047', 'BRUNO BEZJAK', 'Vancouver', '84 - 16336 23A AVE', 832000, 4, 4, 1808, "House"),
('R2515047', 'BRUNO BEZJAK', 'Vancouver', '84 - 16336 23A AVE', 832000, 4, 4, 1808, "Manufactured House"),
('R2515047', 'BRUNO BEZJAK', 'Vancouver', '84 - 16336 23A AVE', 832000, 4, 4, 1808, "Condo"),

-- --------------------------------------------------------