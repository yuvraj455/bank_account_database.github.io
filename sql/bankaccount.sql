-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 26, 2023 at 09:40 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment1`
--

-- --------------------------------------------------------

--
-- Table structure for table `bankaccount`
--

DROP TABLE IF EXISTS `bankaccount`;
CREATE TABLE IF NOT EXISTS `bankaccount` (
  `Title` varchar(10) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Government_ID` varchar(100) NOT NULL,
  `Phone_Number` varchar(15) NOT NULL,
  `Employment_Status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Account_Type` varchar(30) NOT NULL,
  `Purpose` varchar(255) NOT NULL,
  `Annual_Income` varchar(50) NOT NULL,
  `Mailing_Address` varchar(255) NOT NULL,
  PRIMARY KEY (`Government_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `bankaccount`
--

INSERT INTO `bankaccount` (`Title`, `fname`, `lname`, `Email`, `Government_ID`, `Phone_Number`, `Employment_Status`, `Account_Type`, `Purpose`, `Annual_Income`, `Mailing_Address`) VALUES
('Mr.', 'Yuvraj', 'Jindal', 'yuvrajjindal455@gmail.com', 'J4466-79000-41018', '905-537-0601', 'Student', 'Savings', 'Daily Banking', '$22000', '49 SELKIRK AVE, Hamilton, ON'),
('Ms.', 'Payal', 'Aggarwal', 'paggarwal17155@gmail.com', 'J4578-83749-11001', '236-513-0121', 'Self-Employed', 'Current', 'Savings/Investment', '$60000', '146 Sheridan Street, Brantford, ON'),
('Mr.', 'Puneet', 'Gupta', 'puneet5455@gmail.com', 'J8763-54838-10615', '984-210-0455', 'Government Official', 'Savings', 'Emergency Fund', '$120000', '47 Fleetwood Crescent, Brampton, ON'),
('Ms.', 'Krishna', 'Singla', 'krishna56@gmail.com', 'J9469-58483-65328', '814-635-7555', 'Employed', 'Current', 'Daily Banking', '$65000', '425 Bloor St. E, Toronto, ON'),
('Mrs.', 'Monika', 'Jindal', 'monika12@gmail.com', 'Q6547-78348-77227', '700-981-7155', 'Self-Employed', 'Savings', 'Savings/Investment', '$89000', '50 Woodward Ave, Hamilton, ON'),
('Mr.', 'Arun', 'Bansal', 'bansal67@gmail.com', 'R7848-82433-30602', '941-764-7455', 'Government Official', 'Savings', 'Emergency Fund', '$65000', '10 Hillyard St, Milton, ON'),
('Ms.', 'Malaika', 'Garg', 'garg783@gmail.com', 'D7347-98353-87113', '987-201-8291', 'Student', 'Current', 'Daily Banking', '$25000', '11 Queenston Rd, Windsor, ON'),
('Mrs.', 'Rajshree', 'Khanna', 'khanna@gmail.com', 'T8933-84975-85228', '987-262-1913', 'Self-Employed', 'Current', 'Daily Banking', '$56000', '78 Earsdale Ave, North York, ON');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
