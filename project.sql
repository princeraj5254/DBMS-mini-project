-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 01, 2017 at 03:17 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

DELIMITER $$
--
-- Procedures
--
DROP PROCEDURE IF EXISTS `proc1`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `proc1` ()  NO SQL
SELECT count(*)
from tw_customer$$

DROP PROCEDURE IF EXISTS `proc2`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `proc2` ()  NO SQL
SELECT count(*)
from fw_customer$$

DROP PROCEDURE IF EXISTS `proc3`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `proc3` ()  NO SQL
SELECT count(*)
from tw_insurance$$

DROP PROCEDURE IF EXISTS `proc4`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `proc4` ()  NO SQL
SELECT count(*)
from fw_insurance$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `mem_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`mem_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`mem_id`, `username`, `password`) VALUES
(1, 'insurance', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `fw_customer`
--

DROP TABLE IF EXISTS `fw_customer`;
CREATE TABLE IF NOT EXISTS `fw_customer` (
  `TITLE` varchar(255) DEFAULT NULL,
  `FIRSTNAME` varchar(255) DEFAULT NULL,
  `LASTNAME` varchar(255) DEFAULT NULL,
  `AGE` varchar(255) DEFAULT NULL,
  `REG_NO` varchar(255) NOT NULL,
  `REGIS_DATE` varchar(255) DEFAULT NULL,
  `CHASSIS_NUM` varchar(255) DEFAULT NULL,
  `ENGINE_NUMB` varchar(255) DEFAULT NULL,
  `MANF_NAME` varchar(255) DEFAULT NULL,
  `MODEL` varchar(255) DEFAULT NULL,
  `MANFT_YEAR` varchar(255) DEFAULT NULL,
  `MOBILE_NUMBER` varchar(255) DEFAULT NULL,
  `EMAIL` varchar(255) DEFAULT NULL,
  `ADDRESS` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`REG_NO`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fw_customer`
--

INSERT INTO `fw_customer` (`TITLE`, `FIRSTNAME`, `LASTNAME`, `AGE`, `REG_NO`, `REGIS_DATE`, `CHASSIS_NUM`, `ENGINE_NUMB`, `MANF_NAME`, `MODEL`, `MANFT_YEAR`, `MOBILE_NUMBER`, `EMAIL`, `ADDRESS`) VALUES
('p', 'p', 'p', 'p', 'ka56', '2017-11-01', 'i', 'i', 'ICML', 'i', 'i', '98', 'rajprince5254@gmail.com', 'mei'),
('mr', 'shekhar', 'bharti', '25', 'ka01ab5575', '2017-11-11', 'abc', 'bbggf', 'MARUTI', 'ciaz', '2017', '95', 'hubjob96@gmail.com', 'agb');

-- --------------------------------------------------------

--
-- Table structure for table `fw_insurance`
--

DROP TABLE IF EXISTS `fw_insurance`;
CREATE TABLE IF NOT EXISTS `fw_insurance` (
  `REQUEST_FOR` varchar(255) DEFAULT NULL,
  `POLICY` varchar(255) DEFAULT NULL,
  `TITLE` varchar(255) DEFAULT NULL,
  `FIRSTNAME` varchar(255) DEFAULT NULL,
  `LASTNAME` varchar(255) DEFAULT NULL,
  `AGE` varchar(255) DEFAULT NULL,
  `REG_NO` varchar(255) NOT NULL,
  `REGIS_DATE` varchar(255) DEFAULT NULL,
  `CHASSIS_NUM` varchar(255) DEFAULT NULL,
  `ENGINE_NUMB` varchar(255) DEFAULT NULL,
  `MANF_NAME` varchar(255) DEFAULT NULL,
  `MODEL` varchar(255) DEFAULT NULL,
  `MANFT_YEAR` varchar(255) DEFAULT NULL,
  `VECHILE_TYPE` varchar(255) DEFAULT NULL,
  `MOBILE_NUMBER` varchar(255) DEFAULT NULL,
  `EMAIL` varchar(255) DEFAULT NULL,
  `ADDRESS` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`REG_NO`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fw_insurance`
--

INSERT INTO `fw_insurance` (`REQUEST_FOR`, `POLICY`, `TITLE`, `FIRSTNAME`, `LASTNAME`, `AGE`, `REG_NO`, `REGIS_DATE`, `CHASSIS_NUM`, `ENGINE_NUMB`, `MANF_NAME`, `MODEL`, `MANFT_YEAR`, `VECHILE_TYPE`, `MOBILE_NUMBER`, `EMAIL`, `ADDRESS`) VALUES
('renwel', 'comprehensive', 'mr', 'r', 'r', 'r', 'xyz', '2017-11-07', 'p', 'p', 'PIAGGIO', 'p', 'p', 'petrol', '09066393213', 'princeraj5254@gmail.com', 'sbi'),
('renwel', 'comprehensive', 'j', 'j', 'j', 'j', 'j', '2017-11-01', 'j', 'j', 'JAWA', 'h', 'kj', 'diesel', '8852', 'princeraj5254@gmail.com', 'jk'),
('renwel', 'comprehensive', 'P', 'P', 'P', 'PP', 'KLMN', '2017-11-24', 'KSK', 'JDJKD', 'HONDA.', 'DSDB', 'DNMND', 'diesel', '99', 'raj@gmail.com', 'COLLEGE'),
('new vechile', 'comprehensive', 'p', 'p', 'p', 'p', 'ka05', '2017-11-02', 'u', 'u', 'UM GLOBAL MOTORCYCLES', 'u', 'h', 'petrol', '98', 'princeraj5254@gmail.com', 'agb'),
('renwel', 'comprehensive', 'mr', 'shekhar', 'bhart', '25', 'ka01ab5575', '2017-11-11', 'abc', 'hah', 'MAHINDRA', 'ndn', '2017', 'petrol', '95', 'hubjob96@gmail.com', 'agb');

--
-- Triggers `fw_insurance`
--
DROP TRIGGER IF EXISTS `fw_upd`;
DELIMITER $$
CREATE TRIGGER `fw_upd` AFTER INSERT ON `fw_insurance` FOR EACH ROW UPDATE fw_customer
    SET ADDRESS = new.ADDRESS,MOBILE_NUMBER=new.MOBILE_NUMBER,EMAIL=new.EMAIL
    WHERE REG_NO = new.REG_NO
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
CREATE TABLE IF NOT EXISTS `member` (
  `mem_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`mem_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`mem_id`, `username`, `password`) VALUES
(3, 'rto', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `tw_customer`
--

DROP TABLE IF EXISTS `tw_customer`;
CREATE TABLE IF NOT EXISTS `tw_customer` (
  `TITLE` varchar(255) DEFAULT NULL,
  `FIRSTNAME` varchar(255) DEFAULT NULL,
  `LASTNAME` varchar(255) DEFAULT NULL,
  `AGE` varchar(255) DEFAULT NULL,
  `REG_NO` varchar(255) NOT NULL,
  `REGIS_DATE` varchar(255) DEFAULT NULL,
  `CHASSIS_NUM` varchar(255) DEFAULT NULL,
  `ENGINE_NUMB` varchar(255) DEFAULT NULL,
  `MANF_NAME` varchar(255) DEFAULT NULL,
  `MODEL` varchar(255) DEFAULT NULL,
  `MANFT_YEAR` varchar(255) DEFAULT NULL,
  `MOBILE_NUMBER` varchar(255) DEFAULT NULL,
  `EMAIL` varchar(255) DEFAULT NULL,
  `ADDRESS` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`REG_NO`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tw_customer`
--

INSERT INTO `tw_customer` (`TITLE`, `FIRSTNAME`, `LASTNAME`, `AGE`, `REG_NO`, `REGIS_DATE`, `CHASSIS_NUM`, `ENGINE_NUMB`, `MANF_NAME`, `MODEL`, `MANFT_YEAR`, `MOBILE_NUMBER`, `EMAIL`, `ADDRESS`) VALUES
('mr', 'abc', 'efg', '15', 'ka04jn1187', '2017-11-24', 'hddgghsj', 'djskdhgjg', 'HERO ELECTRIC', 'activa', '2017', '9066', 'princeraj5254@gmail.com', 'mei'),
('mr', 'mehul', 'pr', '20', 'ka01ab7777', '2017-11-09', 'abc', 'dfg', 'BAJAJ AUTO.', 'pulsar', '2017', '92', 'prajapati.beis.15@acharya.ac.in', 'agb layout'),
('mr', 'prince', 'raj', '20', 'ka04jn1127', '2017-11-01', 'mayz', 'engine', 'HONDA.', 'activa 4g', '2017', '09066393213', 'princeraj5254@gmail.com', 'agb'),
('mr', 'manish', 'kr', '25', 'ka8111', '2017-11-08', 'ii', 'i', 'HONDA.', 'pulsar', '2017', '998', 'manishto1989@yahoo.com', 'agb'),
('mr', 'shekhar', 'bharti', '25', 'ka01ab5575', '2017-11-11', 'shah', 'hb', 'BMW', 'gfg', '2017', '9887', 'hrmncs96@gmail.com', 'agb layout'),
('mr', 'raj', 'prince', '21', 'ka04jn5062', '2017-11-23', 'k', 'k', 'HYOSUNG', 'k', 'k', '9066393214', 'rajprince5254@gmail.com', 'k'),
('ms', 'tan', 'tan', '19', 'ka01ab5126', '2017-11-10', 'fgfh', 'fggf', 'HONDA.', 'ghfg', '2017', '98', 'tanviya1226@gamil.com', 'def');

-- --------------------------------------------------------

--
-- Table structure for table `tw_insurance`
--

DROP TABLE IF EXISTS `tw_insurance`;
CREATE TABLE IF NOT EXISTS `tw_insurance` (
  `REQUEST_FOR` varchar(255) DEFAULT NULL,
  `POLICY` varchar(255) DEFAULT NULL,
  `TITLE` varchar(255) DEFAULT NULL,
  `FIRSTNAME` varchar(255) DEFAULT NULL,
  `LASTNAME` varchar(255) DEFAULT NULL,
  `AGE` varchar(255) DEFAULT NULL,
  `REG_NO` varchar(255) NOT NULL,
  `REGIS_DATE` varchar(255) DEFAULT NULL,
  `CHASSIS_NUM` varchar(255) DEFAULT NULL,
  `ENGINE_NUMB` varchar(255) DEFAULT NULL,
  `MANF_NAME` varchar(255) DEFAULT NULL,
  `MODEL` varchar(255) DEFAULT NULL,
  `MANFT_YEAR` varchar(255) DEFAULT NULL,
  `VECHILE_TYPE` varchar(255) DEFAULT NULL,
  `MOBILE_NUMBER` varchar(255) DEFAULT NULL,
  `EMAIL` varchar(255) DEFAULT NULL,
  `ADDRESS` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`REG_NO`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tw_insurance`
--

INSERT INTO `tw_insurance` (`REQUEST_FOR`, `POLICY`, `TITLE`, `FIRSTNAME`, `LASTNAME`, `AGE`, `REG_NO`, `REGIS_DATE`, `CHASSIS_NUM`, `ENGINE_NUMB`, `MANF_NAME`, `MODEL`, `MANFT_YEAR`, `VECHILE_TYPE`, `MOBILE_NUMBER`, `EMAIL`, `ADDRESS`) VALUES
('renwel', 'comprehensive', 'mr', 'mehul', 'pr', '20', 'ka01ab7777', '2017-11-15', 'CHAS', 'fdhsgf', 'HERO MOTOCORP', 'piulsar', '2017', 'petrol', '92', 'prajapati.beis.15@acharya.ac.in', 'agb layout'),
('new vechile', 'comprehensive', 'p', 'p', 'p', 'p', 'abc', '2017-11-08', 'p', 'p', 'PIAGGIO', 'p', 'p', 'petrol', '09066393213', 'princeraj5254@gmail.com', '98'),
('renwel', 'comprehensive', 'MR', 'prince', 'raj', '20', 'ka04jn1127', '2017-11-09', 'CHAS', 'engine', 'HONDA.', 'activa 4g', '2017', 'petrol', '09066393213', 'princeraj5254@gmail.com', 'agb'),
('renwel', 'comprehensive', 'mr', 'manish', 'kr', '25', 'ka8111', '2017-11-02', 'uu', 'hu', 'UM GLOBAL MOTORCYCLES', 'pulsar', '2017', 'petrol', '998', 'manishto1989@yahoo.com', 'agb'),
('renwel', 'comprehensive', 'ms', 'tan', 'tan', '19', 'ka01ab5126', '2017-11-01', 'shh', 'gjhhj', 'GLOBAL', 'sjg', '2017', 'petrol', '98', 'tanviya1226@gamil.com', 'def');

--
-- Triggers `tw_insurance`
--
DROP TRIGGER IF EXISTS `tr_update`;
DELIMITER $$
CREATE TRIGGER `tr_update` AFTER INSERT ON `tw_insurance` FOR EACH ROW UPDATE tw_customer
    SET ADDRESS = new.ADDRESS,MOBILE_NUMBER=new.MOBILE_NUMBER,EMAIL=new.EMAIL
    WHERE REG_NO = new.REG_NO
$$
DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
