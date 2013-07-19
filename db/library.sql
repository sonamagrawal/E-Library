-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 14, 2013 at 01:41 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `USER_ID` bigint(50) NOT NULL AUTO_INCREMENT,
  `PWD` varchar(50) NOT NULL,
  PRIMARY KEY (`USER_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `admin_login`
--


-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `BOOK_ID_NO` bigint(50) NOT NULL AUTO_INCREMENT,
  `TITLE` varchar(100) NOT NULL,
  `AUTHOR` varchar(50) NOT NULL,
  `COMPANY` varchar(60) DEFAULT NULL,
  `PUBLISHED_YEAR` year(4) NOT NULL,
  `COPIES` int(11) NOT NULL,
  `IN_RACK` int(11) NOT NULL,
  `POPULARITY` int(11) NOT NULL DEFAULT '0',
  `CATEGORY_ID` int(11) NOT NULL,
  PRIMARY KEY (`BOOK_ID_NO`),
  KEY `CATEGORY_ID` (`CATEGORY_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`BOOK_ID_NO`, `TITLE`, `AUTHOR`, `COMPANY`, `PUBLISHED_YEAR`, `COPIES`, `IN_RACK`, `POPULARITY`, `CATEGORY_ID`) VALUES
(1, 'C++', 'BALAGURUSWAMY', NULL, 2012, 3, 3, 0, 1),
(2, 'PROGRAMMING IN C', 'BALGURUSAMY', NULL, 2012, 8, 8, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `card_detail`
--

CREATE TABLE IF NOT EXISTS `card_detail` (
  `USER_ID` bigint(50) NOT NULL,
  `CARD_ID` int(11) NOT NULL,
  `ISSUED` char(1) NOT NULL DEFAULT 'N',
  `BLOCKED` char(1) NOT NULL DEFAULT 'N',
  PRIMARY KEY (`CARD_ID`),
  KEY `USER_ID` (`USER_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `card_detail`
--


-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `CATEGORY_ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(50) NOT NULL,
  PRIMARY KEY (`CATEGORY_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`CATEGORY_ID`, `NAME`) VALUES
(1, 'COMPUTER SCIENCE');

-- --------------------------------------------------------

--
-- Table structure for table `fine_detail`
--

CREATE TABLE IF NOT EXISTS `fine_detail` (
  `ANONYMOUS` int(11) NOT NULL,
  `ISSUE_CODE` bigint(50) NOT NULL,
  `PAID` char(1) NOT NULL,
  `FINE` int(11) NOT NULL,
  KEY `ISSUE_CODE` (`ISSUE_CODE`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fine_detail`
--


-- --------------------------------------------------------

--
-- Table structure for table `issued_books`
--

CREATE TABLE IF NOT EXISTS `issued_books` (
  `ISSUE_CODE` bigint(50) NOT NULL AUTO_INCREMENT,
  `BOOK_ID_NO` bigint(50) NOT NULL,
  `USER_ID` varchar(50) NOT NULL,
  `CARD_ID` varchar(50) NOT NULL,
  `ISSUED_DATE` datetime NOT NULL,
  `RETURN_DATE` datetime NOT NULL,
  PRIMARY KEY (`ISSUE_CODE`),
  KEY `BOOK_ID_NO` (`BOOK_ID_NO`),
  KEY `USER_ID` (`USER_ID`),
  KEY `CARD_ID` (`CARD_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `issued_books`
--


-- --------------------------------------------------------

--
-- Table structure for table `student_login`
--

CREATE TABLE IF NOT EXISTS `student_login` (
  `USER_ID` bigint(50) NOT NULL AUTO_INCREMENT,
  `PWD` varchar(50) NOT NULL,
  PRIMARY KEY (`USER_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `student_login`
--


-- --------------------------------------------------------

--
-- Table structure for table `student_record`
--

CREATE TABLE IF NOT EXISTS `student_record` (
  `USER_ID` bigint(50) NOT NULL AUTO_INCREMENT,
  `FIRST_NAME` varchar(50) NOT NULL,
  `LAST_NAME` varchar(50) NOT NULL,
  `ENROLLMENT_NO` varchar(50) NOT NULL,
  `ROLL_NO` varchar(50) NOT NULL,
  `BRANCH` varchar(50) NOT NULL,
  `SEMESTER` int(2) NOT NULL,
  KEY `USER_ID` (`USER_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `student_record`
--


-- --------------------------------------------------------

--
-- Table structure for table `teacher_login`
--

CREATE TABLE IF NOT EXISTS `teacher_login` (
  `USER_ID` bigint(50) NOT NULL AUTO_INCREMENT,
  `PWD` varchar(50) NOT NULL,
  PRIMARY KEY (`USER_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `teacher_login`
--

