Step 1: First Create a database named as 'forms'

Step 2: creating table for entryslip 

CREATE TABLE `entryslip` (
  `es` int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `reason` varchar(1000) NOT NULL,
  `entryTime` varchar(10) NOT NULL,
  `exitTime` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1


Step 3: creating table for outdoorduty 

CREATE TABLE `outdoorduty` (
  `od` int(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `reason` varchar(1000) NOT NULL,
  `date` varchar(10) NOT NULL,
  `entryTime` varchar(10) NOT NULL,
  `exitTime` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1