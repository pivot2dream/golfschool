-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 10, 2012 at 09:57 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cego`
--

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE IF NOT EXISTS `sessions` (
  `ID_auth_sess` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `track_sess` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `start_sess` datetime NOT NULL,
  `end_sess` datetime NOT NULL,
  `booking_id_sess` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no',
  `company_id_sess` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no',
  `user_created_id_sess` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name_sess` varchar(900) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no name',
  `type_sbl_sess` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `location_sess` varchar(900) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `presenter_sess` varchar(900) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `desc_sess` varchar(1500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID_auth_sess`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=479 ;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`ID_auth_sess`, `track_sess`, `start_sess`, `end_sess`, `booking_id_sess`, `company_id_sess`, `user_created_id_sess`, `name_sess`, `type_sbl_sess`, `location_sess`, `presenter_sess`, `desc_sess`) VALUES
(464, '3', '2012-09-22 06:30:00', '2012-09-22 06:59:59', '312', '164', '173', 'just checking', 'L', 'asdf', '', 'asdf'),
(465, '3', '2012-09-22 06:00:00', '2012-09-22 06:29:59', '312', '164', '173', 'just checking', 'L', 'asdf', '', 'asdf'),
(470, '3', '2012-09-22 07:30:00', '2012-09-22 10:29:59', '312', '164', '173', 'Sauls Class', 'S', '', '', ''),
(471, '1', '2012-09-22 06:30:00', '2012-09-22 06:59:59', '312', '164', '173', 'ASDFASD', 'S', '', '', ''),
(472, '5', '2012-09-22 06:00:00', '2012-09-22 06:29:59', '312', '164', '173', '', 'S', '', '', ''),
(473, '5', '2012-09-22 07:00:00', '2012-09-22 07:59:59', '312', '164', '173', 'asdf', 'S', 'asdf', '', 'asdf'),
(474, '5', '2012-09-22 08:00:00', '2012-09-22 08:29:59', '312', '164', '173', '', 'S', '', '', ''),
(475, '5', '2012-09-22 08:00:00', '2012-09-22 08:29:59', '312', '164', '173', '', 'S', '', '', ''),
(476, '5', '2012-09-22 08:00:00', '2012-09-22 08:29:59', '312', '164', '173', '', 'S', '', '', ''),
(477, '5', '2012-09-22 06:30:00', '2012-09-22 06:59:59', '312', '164', '173', '', 'S', '', '', ''),
(478, '2', '2012-09-23 07:00:00', '2012-09-23 08:29:59', '312', '164', '173', 'asdf', 'S', 'sdf', '', ''),
(461, '4', '2012-09-22 07:00:00', '2012-09-22 09:59:59', '312', '164', '173', 'title', 'S', 'asdf', '1,2,3', 'asdf'),
(462, '2', '2012-09-22 08:30:00', '2012-09-22 09:59:59', '312', '164', '173', 'session title', 'S', 'plc 1490', '1,2,3', 'ASDFASDF'),
(468, '4', '2012-09-22 06:00:00', '2012-09-22 06:59:59', '312', '164', '173', 'new event', 'S', 'asdf', '', 'asdf'),
(460, '4', '2012-09-23 07:30:00', '2012-09-23 08:59:59', '312', '164', '173', 'asdfasdf444', 'S', 'asdf', '1,2,3', 'asdf'),
(469, '5', '2012-09-24 07:30:00', '2012-09-24 07:59:59', '312', '164', '173', 'saul shininfosdf', 'S', '', '', 'asdf'),
(458, '1', '2012-09-23 08:30:00', '2012-09-23 08:59:59', '312', '164', '173', 'ztrac1', 'S', 'asdf', '1,2,3', 'asdf'),
(459, '1', '2012-09-23 09:30:00', '2012-09-23 11:29:59', '312', '164', '173', 'zzzzzzz4', 'S', 'asdf', '1,2,3', 'asdf'),
(456, '1', '2012-09-23 06:00:00', '2012-09-23 07:29:59', '312', '164', '173', 'asdf', 'S', 'asdf', '1,2,3', 'asdf'),
(454, '2', '2012-09-22 06:30:00', '2012-09-22 07:59:59', '312', '164', '173', 'dddd', 'S', '', '1,2,3', ''),
(455, '1', '2012-09-22 07:00:00', '2012-09-22 08:29:59', '312', '164', '173', 'xxxx', 'S', 'asdf', '1,2,3', 'asdf');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
