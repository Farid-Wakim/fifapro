-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 16, 2025 at 03:50 PM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fifaprodb`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts_list`
--

DROP TABLE IF EXISTS `accounts_list`;
CREATE TABLE IF NOT EXISTS `accounts_list` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Email_Address` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `Phone_Number` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `Full_Name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `Password` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `Account_Type_ID` int NOT NULL,
  `Status_ID` int NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `accounts_list`
--

INSERT INTO `accounts_list` (`ID`, `Email_Address`, `Phone_Number`, `Full_Name`, `Password`, `Account_Type_ID`, `Status_ID`) VALUES
(1, 'Farid@zabre.com', '12234', 'Farid', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 3, 1),
(2, 'Farid@admin.com', '123', 'Farid Admin', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `account_types_list`
--

DROP TABLE IF EXISTS `account_types_list`;
CREATE TABLE IF NOT EXISTS `account_types_list` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account_types_list`
--

INSERT INTO `account_types_list` (`ID`, `Name`) VALUES
(1, 'Admin'),
(2, 'Coach'),
(3, 'Viewer');

-- --------------------------------------------------------

--
-- Table structure for table `status_list`
--

DROP TABLE IF EXISTS `status_list`;
CREATE TABLE IF NOT EXISTS `status_list` (
  `ID` int NOT NULL,
  `Name` varchar(10) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `status_list`
--

INSERT INTO `status_list` (`ID`, `Name`) VALUES
(0, 'Inactive'),
(1, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `teams_list`
--

DROP TABLE IF EXISTS `teams_list`;
CREATE TABLE IF NOT EXISTS `teams_list` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `Image_Path` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teams_list`
--

INSERT INTO `teams_list` (`ID`, `Name`, `Image_Path`) VALUES
(1, 'F.C. Barcelona', 'images/1.png'),
(2, 'A.C. Milan', 'images/2.png');

-- --------------------------------------------------------

--
-- Table structure for table `teams_members_matrix`
--

DROP TABLE IF EXISTS `teams_members_matrix`;
CREATE TABLE IF NOT EXISTS `teams_members_matrix` (
  `Team_ID` int NOT NULL,
  `Account_ID` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teams_members_matrix`
--

INSERT INTO `teams_members_matrix` (`Team_ID`, `Account_ID`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tournaments_list`
--

DROP TABLE IF EXISTS `tournaments_list`;
CREATE TABLE IF NOT EXISTS `tournaments_list` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `Name` int NOT NULL,
  `Status_ID` int NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tournaments_teams_matrix`
--

DROP TABLE IF EXISTS `tournaments_teams_matrix`;
CREATE TABLE IF NOT EXISTS `tournaments_teams_matrix` (
  `Tournament_ID` int NOT NULL,
  `Team_ID` int NOT NULL,
  `Status_ID` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
