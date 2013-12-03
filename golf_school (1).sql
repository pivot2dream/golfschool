-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 03, 2013 at 06:01 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `golf_school`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts_a`
--

CREATE TABLE IF NOT EXISTS `accounts_a` (
  `ID_auth_a` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Password_auth_a` varchar(25) NOT NULL DEFAULT '',
  `Username_auth_a` varchar(25) NOT NULL DEFAULT '',
  `Date_a` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `full_name_a` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `last_name_a` varchar(50) NOT NULL DEFAULT '',
  `first_name_a` varchar(50) NOT NULL DEFAULT '',
  `email_name_a` varchar(70) NOT NULL DEFAULT '',
  `title_a` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `authority_a` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `paid_a` varchar(100) NOT NULL DEFAULT 'yes',
  `god_paid_a` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'yes',
  `address_shipping_a` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `phone_a` varchar(50) NOT NULL DEFAULT '0',
  `address_billing_a` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `age_a` varchar(50) NOT NULL DEFAULT '97405',
  `gender_a` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `notes_a` varchar(10000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID_auth_a`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=387 ;

--
-- Dumping data for table `accounts_a`
--

INSERT INTO `accounts_a` (`ID_auth_a`, `Password_auth_a`, `Username_auth_a`, `Date_a`, `full_name_a`, `last_name_a`, `first_name_a`, `email_name_a`, `title_a`, `authority_a`, `paid_a`, `god_paid_a`, `address_shipping_a`, `phone_a`, `address_billing_a`, `age_a`, `gender_a`, `notes_a`) VALUES
(364, 'asdf', '', '2012-07-10 01:08:13', 'test admin', 'admin', 'test', 'test@testadmin.com', '2', '364', 'yes', 'yes', '860 Olive st', '5416530973', '0', '', 'male', ''),
(365, 'asdf', '', '2012-07-12 00:21:53', 'Gerald Frampfort', 'Frampfort', 'Gerald', 'asdf@345dd.com', '1', '364', 'yes', 'yes', '860 Olive st', '5416530973', '0', '', 'male', 'ASDF'),
(366, 'x', '', '2012-07-15 19:20:30', 'x x', 'x', 'x', 'x', '2', '366', 'yes', 'yes', 'x', 'x', '0', 'x', 'female', 'x'),
(367, '5rsw', '', '2012-07-16 17:46:39', 'd DuChateau', 'DuChateau', 'd', '5rsw', '2', '367', 'yes', 'yes', '1950 west 28th avenue', '5416530973', '0', '', 'male', 'asdf'),
(373, '', '', '2013-09-06 03:28:29', 'jenkins binnings', '', '', '', '1', '376', 'yes', 'yes', '0', '0', '0', 'adult', 'male', ''),
(374, '', '', '2013-09-25 01:11:46', 'Samantha Bunzer', '', '', '', '1', '377', 'yes', 'yes', '0', '0', '0', 'adult', 'female', ''),
(375, '', '', '2013-09-25 01:11:46', 'Charlie Bunzer', '', '', '', '1', '377', 'yes', 'yes', '0', '0', '0', 'adult', 'male', ''),
(376, '', '', '2013-10-30 03:01:26', 'funky rex', '', '', '', '1', '378', 'yes', 'yes', '0', '0', '0', 'adult', 'male', ''),
(377, '', '', '2013-10-30 03:33:45', 'Daniel McNasher', '', '', '', '1', '377', 'yes', 'yes', '0', '0', '0', 'adult', 'male', ''),
(378, '', '', '2013-11-05 05:03:00', 'Naomi Rhoads', '', '', '', '1', '377', 'yes', 'yes', '0', '0', '0', 'adult', 'female', ''),
(379, '', '', '2013-11-15 20:55:33', 'bevis gandler', '', '', '', '1', '379', 'yes', 'yes', '0', '0', '0', 'adult', 'male', ''),
(380, '', '', '2013-11-15 21:08:51', 'sdsdsd sddsds', '', '', '', '1', '380', 'yes', 'yes', '0', '0', '0', 'adult', 'male', ''),
(381, '', '', '2013-11-15 21:10:40', 'Testy Tester', '', '', '', '1', '381', 'yes', 'yes', '0', '0', '0', 'adult', 'male', ''),
(343, 'washburne', 'christian', '2012-05-17 19:34:38', '', 'Fox', 'Christian', 'christian@pacificrealestateservices.com', '1', '', 'yes', 'no', 'null', '541-953-1887', 'null', 'no', '', ''),
(344, '', '', '2012-05-22 12:10:08', '', '', '', '', '1', '', 'yes', 'no', '', '', '', '', '', ''),
(345, '', '', '2012-05-28 08:36:56', '', '', '', '', '1', '', 'yes', 'no', '', '', '', '', '', ''),
(346, '', '', '2012-05-31 06:58:56', '', '', '', '', '1', '', 'yes', 'no', '', '', '', '', '', ''),
(347, '', '', '2012-06-14 17:47:23', 'j b', 'b', 'j', '', '1', '', 'no', 'no', '', 'w', '0', '', 'male', 't'),
(348, '', '', '2012-06-14 17:49:29', 'j b', 'b', 'j', '', '1', '', 'no', 'no', '', 'w', '0', '', 'male', 't'),
(349, '', '', '2012-06-14 17:49:54', 'j b', 'b', 'j', '', '1', '', 'no', 'no', '', 'w', '0', '', 'male', 't'),
(350, 'q', '', '2012-06-14 18:05:47', 'q q', 'q', 'q', 'q', '1', '', 'no', 'no', 'q', 'q', '0', '', 'male', 'q'),
(351, 'w', '', '2012-06-14 18:16:47', 'w w', 'w', 'w', 'w', '1', '', 'no', 'no', 'w', 'w', '0', '', 'male', 'w'),
(352, 'k', '', '2012-06-14 18:23:39', 'k k', 'k', 'k', 'k', '1', '', 'no', 'no', 'k', 'k', '0', '', 'male', 'k'),
(353, 't', '', '2012-06-14 18:30:50', 't t', 't', 't', 't', '1', '', 'no', 'no', 't', 't', '0', '', 'male', 't'),
(354, 'f', '', '2012-06-14 18:34:21', 'f f', 'f', 'f', 'f', '1', '', 'no', 'no', 'f', 'f', '0', '', 'male', 'f'),
(355, 'd', '', '2012-06-14 18:40:49', 'd d', 'd', 'd', 'g', '1', '', 'no', 'no', 'd', 's', '0', '', 'male', 'd'),
(356, 'r', '', '2012-06-14 18:41:13', 'r r', 'r', 'r', 'r', '1', '', 'no', 'no', 'r', 'r', '0', '', 'male', 'r'),
(357, 'a', '', '2012-06-14 18:43:12', 'g g', 'g', 'g', 'f', '1', '', 'no', 'no', '1111 Van Buren St', '5416530973', '0', '', 'male', 'a'),
(358, 'a', '', '2012-06-14 18:44:47', 'a a', 'a', 'a', 'a', '1', '', 'no', 'no', 'a', 'a', '0', '', 'male', 'a'),
(359, 'asdf', '', '2012-07-06 21:33:05', 'test again', 'again', 'test', 'greg@gregnet.co', '1', '', 'no', 'no', '860 Olive st', '5416530973', '0', '', 'male', ''),
(360, 'asdf', '', '2012-07-06 21:33:17', 'Greg Donahoe', 'Donahoe', 'Greg', 'greg@gregnet.co', '1', '', 'no', 'no', '860 Olive st', '5416530973', '0', '', '', ''),
(361, 'asdf', '', '2012-07-06 21:33:54', 'Bob Sender', 'Sender', 'Bob', 'aarodn@geniusmediasolutions.com', '1', '', 'no', 'no', '1111 Van Buren St', '5416530973', '0', '', 'male', 'asdf'),
(362, 'adf', '', '2012-07-06 21:34:26', 't t', 't', 't', 'aarddson@geniusmediasolutions.com', '1', '', 'no', 'no', '1111 Van Buren St', '5416530973', '0', '', 'male', 'asdf'),
(363, 'z', '', '2012-07-09 20:54:31', 'd d', 'd', 'd', 'zwk', '2', '363', 'no', 'yes', 'z', 'z', '0', '', 'male', 'z'),
(368, '', '', '2012-07-30 23:43:44', ' ', '', '', 'test@testadmin.com', '1', '366', 'yes', 'yes', '', '', '0', '', '', ''),
(369, 'asdfasdf', '', '2012-07-30 23:44:30', 'Asdf asdf', 'asdf', 'Asdf', 'asdf34t5s', '1', '366', 'yes', 'yes', 'asdf', 'asdf', '0', '', 'female', 'asdf'),
(370, 'asdf', '', '2012-07-30 23:45:43', 'dorkety asdf', 'asdf', 'dorkety', '78asdf7890sdfu89', '1', '366', 'yes', 'yes', 'asdf', 'asdf', '0', '', 'female', 'asdf'),
(371, 'asdf', '', '2012-07-30 23:55:43', 'tomsuper user', 'user', 'tomsuper', 'asdf!@asdf.com', '2', '371', 'yes', 'yes', 'asdf', 'asdf', '0', 'asdf', 'male', 'asdf'),
(372, '', '', '2013-09-06 03:17:46', 'who am i ', '', '', '', '1', '375', 'yes', 'yes', '0', '0', '0', 'a', 'male', ''),
(382, '', '', '2013-11-15 21:10:49', 'Testy Tester', '', '', '', '1', '382', 'yes', 'yes', '0', '0', '0', 'adult', 'male', ''),
(383, '', '', '2013-11-15 21:11:19', 'asdf asd', '', '', '', '1', '383', 'yes', 'yes', '0', '0', '0', 'adult', 'male', ''),
(384, '', '', '2013-11-15 21:13:56', 'Another Testname', '', '', '', '1', '384', 'yes', 'yes', '0', '0', '0', 'adult', 'male', ''),
(385, '', '', '2013-11-28 21:28:36', 'Garry Whatever', '', '', '', '1', '377', 'yes', 'yes', '0', '0', '0', 'junior', 'female', ''),
(386, '', '', '2013-11-28 22:50:24', 'Paula DuChateau', '', '', '', '1', '385', 'yes', 'yes', '0', '0', '0', 'adult', 'female', '');

-- --------------------------------------------------------

--
-- Table structure for table `accounts_c`
--

CREATE TABLE IF NOT EXISTS `accounts_c` (
  `ID_auth_c` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Password_auth_c` varchar(25) NOT NULL DEFAULT '',
  `Username_auth_c` varchar(25) NOT NULL DEFAULT '',
  `Date_c` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `full_name_c` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `last_name_c` varchar(50) NOT NULL DEFAULT '',
  `first_name_c` varchar(50) NOT NULL DEFAULT '',
  `email_name_c` varchar(70) NOT NULL DEFAULT '',
  `paid_c` varchar(100) NOT NULL DEFAULT 'yes',
  `god_paid_c` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'yes',
  `address_shipping_c` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `phone_c` varchar(50) NOT NULL DEFAULT '0',
  `address_billing_c` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `zip_c` varchar(50) NOT NULL DEFAULT '97405',
  `gender_c` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `notes_c` varchar(10000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `location_authority_c` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `authority_c` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID_auth_c`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=386 ;

--
-- Dumping data for table `accounts_c`
--

INSERT INTO `accounts_c` (`ID_auth_c`, `Password_auth_c`, `Username_auth_c`, `Date_c`, `full_name_c`, `last_name_c`, `first_name_c`, `email_name_c`, `paid_c`, `god_paid_c`, `address_shipping_c`, `phone_c`, `address_billing_c`, `zip_c`, `gender_c`, `notes_c`, `location_authority_c`, `authority_c`) VALUES
(173, 'gms5150', 'geoff', '2011-09-28 21:10:12', '', 'Miller', 'Geoff', 'geoff@geniusmediasolutions.com', 'yes', 'yes', '1111 van buren st  Eugene OR 97402', '5413579021', '1111 van buren st  Eugene OR 97402', '9', '', '', '', ''),
(171, 'test', 'test', '2011-11-11 23:15:27', '', 'Contact', 'Joe', 'general@test.com', 'yes', 'yes', '1950 west 28th Avenue appt 1 Eugene OR 97405', '555-555-5555', '1950 west 28th Avenue appt 1 Eugene OR 97405', '9', '', '', '', ''),
(172, 'infra1800', 'aaron', '2007-11-22 18:50:22', '', 'DuChateau', 'Aaron', 'aaron@geniusmediasolutions.com', 'yes', 'yes', '1950 west 28th Avenue Eugene OR', '541-653-0973', '1950 west 28th Avenue    Eugene OR 97405', '97405', 'male', 'asf', '', ''),
(174, 'shownuff', 'Quentin', '2011-12-02 00:50:16', '', 'Harley', 'Quentin', 'Quentinharley54@gmail.com', 'yes', 'yes', '950 Clark St Eugene, Or 97402', '5416063698', '950 Clark St Eugene, Or 97402', '8', '', '', '', ''),
(175, 'angelique13', 'Bob', '2011-12-02 01:01:02', '', 'Baggitt', 'Bob', 'Bob@baggitt.com', 'no***2012-05-09 03:46:11', 'yes', '969 Willagilespie Rd,Eugene, OR.', '541-606-4292', '969 Willagilespie Rd,Eugene, OR.', '8', '', '', '', ''),
(230, '4networking', 'SabrinaBlack', '2012-02-29 22:32:35', '', 'Black', 'Sabrina', 'sblack2@uoregon.edu', 'yes', 'yes', 'null', '541-346-1589', 'null', 'no', '', '', '', ''),
(229, 'symphony', 'MaylianPak', '2012-02-29 22:05:28', '', 'Pak', 'Maylian', 'maylian.pak@eugenesymphony.org', 'yes', 'yes', 'null', '541-687-9487 x104', 'null', 'no', '', '', '', ''),
(228, 'fxy123', 'JeffStolle', '2012-02-29 21:49:11', '', 'Stolle', 'Jeff', 'jstolle@uoregon.edu', 'yes', 'yes', 'null', '541-346-1494', 'null', 'no', '', '', '', ''),
(227, '1mamma', 'MSavoian', '2012-02-29 21:09:30', '', 'Savoian', 'Margaret', 'msavoian@uoregon.edu', 'yes', 'yes', 'null', '541-556-7781', 'null', 'no', '', '', '', ''),
(225, 'widgicreek', 'bensappington', '2012-02-29 01:40:32', '', 'Sappington', 'Ben ', 'bens@eugenechamber.com', 'yes', 'yes', 'null', '541-915-5212', 'null', 'no', '', '', '', ''),
(224, 'Oregon93', 'JenniferArteaga', '2012-02-28 22:29:31', '', 'Arteaga', 'Jennifer', 'jarteaga@uoregon.edu', 'yes', 'yes', 'null', '559-799-9352', 'null', 'no', '', '', '', ''),
(223, '311ROCKS', 'CASEY', '2012-02-28 22:03:34', '', 'JORGENSEN', 'CASEY', 'casey@pulpitclothing.com', 'yes', 'yes', 'null', '541-510-9839', 'null', 'no', '', '', '', ''),
(222, 'asdf', 'joecontact', '2012-02-28 21:11:28', '', 'Contact', 'Joe', 'chateauconcept@gmail.com', 'yes', 'yes', 'null', '541-555-5555', 'null', 'no', '', '', '', ''),
(185, 'test', 'scott', '2011-12-30 18:16:39', '', 'McKee', 'Scott', 'scottmckee@ymail.com', 'no***2012-03-03 01:04:30', 'yes', 'Springfield OR 97477', '541-554-9141', '1101 16th Street', '9', '', '', '', ''),
(220, 'hoops715', 'jemimahpanganiban', '2012-02-28 07:31:37', '', 'Panganiban', 'Jemimah', 'JPanganiban15@gmail.com', 'yes', 'yes', 'null', '503-621-6739', 'null', 'no', '', '', '', ''),
(221, 'cronaldo9', 'Onesto', '2012-02-28 08:13:26', '', 'Onesto', 'Arturo', 'tito_onesto@hotmail.com', 'yes', 'yes', 'null', '541-690-4466', 'null', 'no', '', '', '', ''),
(219, 'nicole12,18', 'amandaramirez', '2012-02-28 07:13:41', '', 'Ramirez', 'Amanda', 'amandaxramirez@gmail.com', 'yes', 'yes', 'null', '949-525-8311', 'null', 'no', '', '', '', ''),
(217, 'temp123', 'adam', '2012-02-15 21:16:04', '', 'Lorts', 'Adam', 'adam@developmentnow.com', 'yes', 'yes', 'fake addy  eugene OR 97405', '503-980-8802', 'fake addy  eugene OR 97405', 'no', '', '', '', ''),
(218, 'test123', 'testballs', '2012-02-24 21:49:46', '', 'last', 'first', 'chateauconcept@gmail.com', 'yes', 'yes', 'null', '555-555-555', 'null', 'no', '', '', '', ''),
(215, 'temp123', 'Nita', '2012-02-10 18:30:08', '', 'Dutton', 'Nita', 'jnd66866@aol.com', 'yes', 'yes', 'temp  eugene OR 97405', '555-555-5555', 'temp  Eugene OR 97405', 'no', '', '', '', ''),
(214, 'password', 'chris', '2012-02-10 00:39:37', '', 'cauthon', 'chris', 'ccauthon88@gmail.com', 'yes', 'yes', 'null', '--', 'null', 'no', '', '', '', ''),
(212, 'aoth', 'RachelWilliams', '2012-02-09 21:40:31', '', 'Williams', 'Rachel', 'rwilliams@innat5th.com', 'yes', 'yes', 'null', '415-305-6500', 'null', 'no', '', '', '', ''),
(213, 'pasword123', 'teser1223', '2012-02-10 00:36:20', '', 'miller123', 'geoff123', 'geofftest@tester.com', 'yes', 'yes', 'null', '541-456-4567', 'null', 'no', '', '', '', ''),
(193, 'thomas', 'judithbelford', '2012-01-19 01:06:49', '', 'Belford', 'Judith', 'judithbelford@comcast.net', 'yes', 'yes', '6050 SW 46th Ave  Portland OR 97221', '503-223-0917', '6050 SW 46th Ave  Portland OR 97221', '9', '', '', '', ''),
(194, 'Gemini', 'Tayah', '2012-01-25 06:09:10', '', 'Butler', 'Tayah', 'Tayahbutler@gmail.com', 'yes', 'yes', '961 forrester way  Eugene OR 97401', '541-337-8203', '961 forrester way  Eugene OR 97401', '9', '', '', '', ''),
(195, 'temp123', 'miriam', '2012-01-29 19:55:06', '', 'Bolton', 'Miriam', 'mbolton@uoregon.edu', 'yes', 'yes', '123 st  eugene OR 97405', '555-555-5555', '123 st  eugene OR 97405', 'no', '', '', '', ''),
(196, 'temp123', 'kees', '2012-01-29 20:00:06', '', 'de Kluyver', 'Kees', 'kees@uoregon.edu', 'yes', 'yes', '', '541-346-3300', '1208 University of Oregon, Eugene, OR 97403', 'no', '', '', '', ''),
(197, 'temp123', 'Ron', '2012-01-29 20:03:04', '', 'Gibson', 'Ron', 'athletrack@gmail.com', 'yes', 'yes', '123 st  eugene OR 97405', '541-954-7784', '123 st  eugene OR 97405', 'no', '', '', '', ''),
(198, 'goducks1234', 'mayans', '2012-01-31 23:28:24', '', 'Schexnayder', 'Mayan', 'mayans@uoregon.edu', 'yes', 'yes', '123 any st  eugene OR 97402', '555-555-5555', '123 any st  eugene OR 97042', 'no', '', '', '', ''),
(199, 'BIgice24!!', 'terrelj', '2012-01-31 23:45:04', '', 'Jones', 'Terrel', 'fratbacks@gmail.com', 'yes', 'yes', '123 any st.  EUGENE OR 97402', '951-691-0151', '123 any st  eugene OR 97402', 'no', '', '', '', ''),
(385, '', '', '2013-11-28 22:50:24', '', '', '', 'paula@paula.com', 'yes', 'yes', '0', '0', '0', '97405', '', '', '', ''),
(384, '', '', '2013-11-15 21:13:56', '', '', '', 'gernunder@gernunhjgder.com', 'yes', 'yes', '0', '0', '0', '97405', '', '', '', ''),
(383, '', '', '2013-11-15 21:11:19', '', '', '', 'gernunder@gernunsdader.com', 'yes', 'yes', '0', '0', '0', '97405', '', '', '', ''),
(382, '', '', '2013-11-15 21:10:49', '', '', '', 'gernunder@gerasdfnunder.com', 'yes', 'yes', '0', '0', '0', '97405', '', '', '', ''),
(381, '', '', '2013-11-15 21:10:40', '', '', '', 'gernunder@gerasdfnunder.com', 'yes', 'yes', '0', '0', '0', '97405', '', '', '', ''),
(380, '', '', '2013-11-15 21:08:51', '', '', '', 'gernunder@gernundsdaer.com', 'yes', 'yes', '0', '0', '0', '97405', '', '', '', ''),
(379, '', '', '2013-11-15 20:55:33', '', '', '', 'gernunder@gernunjjder.com', 'yes', 'yes', '0', '0', '0', '97405', '', '', '', ''),
(378, '', '', '2013-10-30 03:01:26', '', '', '', 'test@gesddd.com', 'yes', 'yes', '0', '0', '0', '97405', '', '', '', ''),
(377, '', '', '2013-09-25 01:11:44', '', '', '', 'gernunder@gernunder.com', 'yes', 'yes', '0', '0', '0', '97405', '', '', '', ''),
(376, '', '', '2013-09-06 03:28:29', '', '', '', 'dude@dudue.com', 'yes', 'yes', '0', '0', '0', '97405', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `accounts_t`
--

CREATE TABLE IF NOT EXISTS `accounts_t` (
  `ID_auth_t` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Password_auth_t` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `Username_auth_t` varchar(25) NOT NULL DEFAULT '',
  `Date_t` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `full_name_t` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `last_name_t` varchar(50) NOT NULL DEFAULT '',
  `title_t` varchar(2) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `first_name_t` varchar(50) NOT NULL DEFAULT '',
  `email_name_t` varchar(70) NOT NULL DEFAULT '',
  `paid_t` varchar(100) NOT NULL DEFAULT 'yes',
  `god_paid_t` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'yes',
  `address_shipping_t` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `phone_t` varchar(50) NOT NULL DEFAULT '0',
  `address_billing_t` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `zip_t` varchar(50) NOT NULL DEFAULT '97405',
  `notes_t` varchar(5000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gender_t` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `loc_1_t` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `loc_2_t` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `loc_3_t` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `location_authority_t` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no',
  `authority_t` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no',
  PRIMARY KEY (`ID_auth_t`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=373 ;

--
-- Dumping data for table `accounts_t`
--

INSERT INTO `accounts_t` (`ID_auth_t`, `Password_auth_t`, `Username_auth_t`, `Date_t`, `full_name_t`, `last_name_t`, `title_t`, `first_name_t`, `email_name_t`, `paid_t`, `god_paid_t`, `address_shipping_t`, `phone_t`, `address_billing_t`, `zip_t`, `notes_t`, `gender_t`, `loc_1_t`, `loc_2_t`, `loc_3_t`, `location_authority_t`, `authority_t`) VALUES
(173, '912ec803b2ce49e4a541068d495ab570', 'golf instructor', '2011-09-28 21:10:12', '', 'DuChateau', '', 'Aaron', 'aaron@pivot2dream.com', 'yes', 'yes', '1111 van buren st  Eugene OR 97402', '5413579021', '1111 van buren st  Eugene OR 97402', '9', 'aaron is a total badass and enjoys doing shit in general ', '', '3d81a25ebb38806c249ffde96a00b3e7.png', '', '', '', ''),
(200, 'goducks1234', 'golf instructor', '2012-01-31 23:47:24', '', 'Cordero', '', 'Michele', 'mcordero@uoregon.edu', 'yes', 'yes', '123 any st  eugene OR 97402', '555-555-5555', '123 any st  eugene OR 97402', 'no', '', '', '4d70ca553561b160cced25f411d52acc.png', '', '', '', ''),
(201, 'goducks1234', 'kevinc', '2012-01-31 23:56:14', '', 'Corbin', '', 'Kevin', 'kcorbin@uoregon.edu', 'yes', 'yes', '123 any st.  eugene OR 97402', '555-555-5555', '123 any st  eugene OR 97402', 'no', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `admin_location`
--

CREATE TABLE IF NOT EXISTS `admin_location` (
  `ID_auth_l` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `body_l` varchar(5000) NOT NULL DEFAULT '',
  `zip_l` varchar(100) NOT NULL DEFAULT '',
  `phone_l` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'not available',
  `email_l` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'not available',
  `authority_l` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`ID_auth_l`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=163 ;

--
-- Dumping data for table `admin_location`
--

INSERT INTO `admin_location` (`ID_auth_l`, `body_l`, `zip_l`, `phone_l`, `email_l`, `authority_l`) VALUES
(157, '1852 east place pl, Eugene Or', '97401', 'not available', 'not available', '364'),
(156, '345 West Charnleton Avenue, Eugene Oregon', '97405', 'not available', 'not available', '364'),
(155, '1234 boulavard blvd, Eugene Oregon ', '97405', 'not available', 'not available', '364'),
(154, '1234 fake st, eugene oregon', '97405', 'not available', 'not available', '363'),
(158, '234 fake st eugene oregon', '97405', 'not available', 'not available', '364'),
(159, 'asdf asdf asdf ', '87956', '555-555-5555', 'maingym@maingym.com', '366'),
(160, '33333333333', '98765', 'not available', 'not available', '366'),
(161, '1234 west fairbanks bronks, Eugene Oregon', '97405-98575', 'not available', 'not available', '366'),
(162, '1950 west 28th Avenue, Eugene Oregon', '97405', '5416530973', 'greg@gregnet.co', '366');

-- --------------------------------------------------------

--
-- Table structure for table `booking_master`
--

CREATE TABLE IF NOT EXISTS `booking_master` (
  `ID_auth_bm` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `start_bm` datetime NOT NULL,
  `end_bm` datetime NOT NULL,
  `trainer_id_bm` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no',
  `cust_id_bm` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no',
  `trainer_name_bm` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no',
  `cust_name_bm` varchar(225) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no',
  `notes_bm` varchar(1225) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no notes or details',
  `human_date` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `start_readable` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `end_readable` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `appointment_type_id` varchar(1500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `appointment_type_name` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `appointment_min` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `appointment_price_desc` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `appointment_type_flag` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `paid` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'not paid',
  `appointment_email` varchar(600) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID_auth_bm`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=381 ;

--
-- Dumping data for table `booking_master`
--

INSERT INTO `booking_master` (`ID_auth_bm`, `start_bm`, `end_bm`, `trainer_id_bm`, `cust_id_bm`, `trainer_name_bm`, `cust_name_bm`, `notes_bm`, `human_date`, `start_readable`, `end_readable`, `appointment_type_id`, `appointment_type_name`, `appointment_min`, `appointment_price_desc`, `appointment_type_flag`, `paid`, `appointment_email`) VALUES
(264, '2012-07-23 06:00:00', '2012-07-23 06:14:59', '172', '361', 'Aaron DuChateau', 'Bob Sender', 'asdf', '', '', '', '', '', '', '', '', 'not paid', ''),
(263, '2012-07-23 09:00:00', '2012-07-23 09:14:59', '172', '361', 'Aaron DuChateau', 'Bob Sender', '', '', '', '', '', '', '', '', '', 'not paid', ''),
(261, '2012-07-23 08:15:00', '2012-07-23 08:59:59', '172', '358', 'Aaron DuChateau', 'a a', '', '', '', '', '', '', '', '', '', 'not paid', ''),
(265, '2012-07-24 18:30:00', '2012-07-24 19:29:59', '172', '360', 'Aaron DuChateau', 'Greg Donahoe', 'testing', '', '', '', '', '', '', '', '', 'not paid', ''),
(259, '2012-07-23 07:30:00', '2012-07-23 07:59:59', '172', '358', 'Aaron DuChateau', 'a a', '', '', '', '', '', '', '', '', '', 'not paid', ''),
(260, '2012-07-23 07:00:00', '2012-07-23 07:29:59', '172', '358', 'Aaron DuChateau', 'a a', '', '', '', '', '', '', '', '', '', 'not paid', ''),
(266, '2012-07-24 06:00:00', '2012-07-24 06:44:59', '172', '358', 'Aaron DuChateau', 'a a', '5', '', '', '', '', '', '', '', '', 'not paid', ''),
(267, '2012-07-24 07:15:00', '2012-07-24 11:14:59', '172', '362', 'Aaron DuChateau', 't t', 'sdf', '', '', '', '', '', '', '', '', 'not paid', ''),
(276, '2012-07-27 06:45:00', '2012-07-27 06:59:59', '172', '361', 'Aaron DuChateau', 'Bob Sender', 'asdf', '', '', '', '', '', '', '', '', 'not paid', ''),
(271, '2012-07-25 06:00:00', '2012-07-25 06:59:59', '172', '361', 'Aaron DuChateau', 'Bob Sender', '', '', '', '', '', '', '', '', '', 'not paid', ''),
(283, '2012-07-16 06:15:00', '2012-07-16 06:29:59', '172', '358', 'Aaron DuChateau', 'a a', 'sdf', '', '', '', '', '', '', '', '', 'not paid', ''),
(282, '2012-08-04 07:00:00', '2012-08-04 07:14:59', '172', '358', 'Aaron DuChateau', 'a a', '', '', '', '', '', '', '', '', '', 'not paid', ''),
(278, '2012-07-29 06:30:00', '2012-07-29 07:59:59', '172', '361', 'Aaron DuChateau', 'Bob Sender', '', '', '', '', '', '', '', '', '', 'not paid', ''),
(280, '2012-07-28 08:15:00', '2012-07-28 09:14:59', '172', '358', 'Aaron DuChateau', 'a a', 'dsg', '', '', '', '', '', '', '', '', 'not paid', ''),
(284, '2012-07-26 06:00:00', '2012-07-26 06:14:59', '172', '358', 'Aaron DuChateau', 'a a', 'asdf', '', '', '', '1', '', '', '', '', 'not paid', ''),
(285, '2012-07-27 06:00:00', '2012-07-27 06:14:59', '172', '358', 'Aaron DuChateau', 'a a', '', '', '', '', '2', '', '', '', '', 'not paid', ''),
(286, '2012-07-26 06:15:00', '2012-07-26 06:29:59', '172', '358', 'Aaron DuChateau', 'a a', '', '', '', '', '2264+roosevelt+boulevard+eugene+oregon+97405', '', '', '', '', 'not paid', ''),
(287, '2012-07-26 06:45:00', '2012-07-26 06:59:59', '172', '358', 'Aaron DuChateau', 'a a', 'tattle', '', '', '', '2264+roosevelt+boulevard+eugene+oregon+97405', '', '', '', '', 'not paid', ''),
(288, '2012-07-25 07:00:00', '2012-07-25 07:14:59', '172', '358', 'Aaron DuChateau', 'a a', 'duck', '', '', '', '72+west+broadway+eugene+oregon+97405', '', '', '', '', 'not paid', ''),
(289, '2012-07-30 06:00:00', '2012-07-30 06:14:59', '172', '358', 'Aaron DuChateau', 'a a', 'make sure to bring your tennis shoes, because we will be doing cardio', '', '', '', '2264+roosevelt+boulevard+eugene+oregon+97405', '', '', '', '', 'not paid', ''),
(290, '2012-08-02 06:00:00', '2012-08-02 06:29:59', '172', '358', 'Aaron DuChateau', 'a a', 'make sure to bring your to to because we are going to jam!', '', '', '', '2264+roosevelt+boulevard+eugene+oregon+97405', '', '', '', '', 'not paid', ''),
(292, '2012-07-31 06:30:00', '2012-07-31 08:29:59', '172', '358', 'Aaron DuChateau', 'a a', 'bring shoes', '', '', '', '2264+roosevelt+boulevard+eugene+oregon+97405', '', '', '', '', 'not paid', ''),
(293, '2012-08-02 07:00:00', '2012-08-02 08:44:59', '172', '358', 'Aaron DuChateau', 'a a', 'lhi', '', '', '', '2264+roosevelt+boulevard+eugene+oregon+97405', '', '', '', '', 'not paid', ''),
(294, '2012-08-08 06:00:00', '2012-08-08 07:14:59', '172', '358', 'Aaron DuChateau', 'a a', 'asdf', '', '', '', '2264+roosevelt+boulevard+eugene+oregon+97405', '', '', '', '', 'not paid', ''),
(295, '2012-08-10 07:00:00', '2012-08-10 08:29:59', '172', '358', 'Aaron DuChateau', 'a a', 'bring shoes', '', '', '', '72+west+broadway+eugene+oregon+97405', '', '', '', '', 'not paid', ''),
(296, '2012-08-10 06:45:00', '2012-08-10 06:59:59', '172', '358', 'Aaron DuChateau', 'a a', '', '', '', '', '2264+roosevelt+boulevard+eugene+oregon+97405', '', '', '', '', 'not paid', ''),
(297, '2012-09-05 06:45:00', '2012-09-05 08:29:59', '362', '368', 'Bob Nutritionist', 'Barf barf', 'bring shoes', '', '', '', '', '', '', '', '', 'not paid', ''),
(298, '2012-09-17 06:00:00', '2012-09-17 06:14:59', '353', '366', 'jake Hamilton', 'Gregory Lamento', 'asdf', '', '', '', '', '', '', '', '', 'not paid', ''),
(299, '2012-09-17 07:15:00', '2012-09-17 07:29:59', '353', '366', 'jake Hamilton', 'Gregory Lamento', '', '', '', '', '', '', '', '', '', 'not paid', ''),
(300, '2013-10-04 08:00:00', '2013-10-04 08:14:59', '173', '374', 'Aaron DuChateau', 'Samantha Bunzer', 'no notes or details', '', '8:00 AM', '8:14 AM', '', 'great test1', '15', 'a short price description', 'static', 'not paid', ''),
(301, '2013-10-02 08:30:00', '2013-10-02 09:44:59', '173', '375', 'Aaron DuChateau', 'Charlie Bunzer', 'no notes or details', '', '8:30 AM', '9:44 AM', '', 'great test1', '75', 'a short price description1', 'static', 'not paid', ''),
(302, '2013-10-02 10:00:00', '2013-10-02 10:29:59', '173', '374', 'Aaron DuChateau', 'Samantha Bunzer', 'no notes or details', '', '10:00 AM', '10:29 AM', '', 'another really cool plan3', '30', '25 dollars / set of 3 is 453', 'static', 'not paid', ''),
(303, '2013-10-04 09:00:00', '2013-10-04 09:14:59', '173', '374', 'Aaron DuChateau', 'Samantha Bunzer', 'no notes or details', '', '9:00 AM', '9:15 AM', '16', 'great test1', '15', 'a short price description', 'static', 'not paid', ''),
(304, '2013-10-04 10:00:00', '2013-10-04 10:29:59', '173', '374', 'Aaron DuChateau', 'Samantha Bunzer', 'no notes or details', '', '10:00 AM', '10:30 AM', '17', 'another really cool plan3', '30', '25 dollars / set of 3 is 453', 'static', 'not paid', ''),
(305, '2013-10-03 11:00:00', '2013-10-03 12:14:59', '173', '374', 'Aaron DuChateau', 'Samantha Bunzer', 'no notes or details', '', '11:00 AM', '12:15 PM', '22', 'great test1', '75', 'a short price description1', 'static', 'not paid', ''),
(306, '2013-10-04 12:30:00', '2013-10-04 12:59:59', '173', '375', 'Aaron DuChateau', 'Charlie Bunzer', 'no notes or details', '', '12:30 PM', '1:00 PM', '17', 'another really cool plan3', '30', '25 dollars / set of 3 is 453', 'static', 'not paid', ''),
(307, '2013-10-01 11:30:00', '2013-10-01 11:44:59', '173', '374', 'Aaron DuChateau', 'Samantha Bunzer', 'no notes or details', '', '11:30 AM', '11:45 AM', '16', 'great test1', '15', 'a short price description', 'static', 'not paid', ''),
(308, '2013-10-01 09:30:00', '2013-10-01 09:44:59', '173', '374', 'Aaron DuChateau', 'Samantha Bunzer', 'no notes or details', '', '9:30 AM', '9:45 AM', '16', 'great test1', '15', 'a short price description', 'static', 'not paid', ''),
(309, '2013-10-16 08:00:00', '2013-10-16 08:14:59', '173', '374', 'Aaron DuChateau', 'Samantha Bunzer', 'no notes or details', '', '8:00 AM', '8:15 AM', '16', 'great test1', '15', 'a short price description', 'static', 'not paid', ''),
(311, '2013-10-16 08:30:00', '2013-10-16 08:44:59', '173', '375', 'Aaron DuChateau', 'Charlie Bunzer', 'no notes or details', '', '8:30 AM', '8:45 AM', '16', 'great test1', '15', 'a short price description', 'static', 'not paid', ''),
(313, '2013-09-11 08:00:00', '2013-09-11 08:14:59', '173', '374', 'Aaron DuChateau', 'Samantha Bunzer', 'no notes or details', '', '8:00 AM', '8:15 AM', '16', 'great test1', '15', 'a short price description', 'static', 'not paid', ''),
(314, '2013-10-01 08:00:00', '2013-10-01 08:14:59', '173', '374', 'Aaron DuChateau', 'Samantha Bunzer', 'no notes or details', 'Oct Tue, 2013', '8:00 AM', '8:15 AM', '16', 'great test1', '15', 'a short price description', 'static', 'not paid', ''),
(315, '2013-10-08 08:00:00', '2013-10-08 08:14:59', '173', '374', 'Aaron DuChateau', 'Samantha Bunzer', 'no notes or details', 'Oct Tue, 2013', '8:00 AM', '8:15 AM', '16', 'great test1', '15', 'a short price description', 'static', 'not paid', ''),
(316, '2013-10-26 08:00:00', '2013-10-26 08:14:59', '173', '374', 'Aaron DuChateau', 'Samantha Bunzer', 'no notes or details', 'Oct Sat, 2013', '8:00 AM', '8:15 AM', '16', 'great test1', '15', 'a short price description', 'static', 'not paid', ''),
(318, '2013-11-09 08:00:00', '2013-11-09 08:14:59', '173', '374', 'Aaron DuChateau', 'Samantha Bunzer', 'no notes or details', 'Nov 09, 2013', '8:00 AM', '8:15 AM', '16', 'great test1', '15', 'a short price description', 'static', 'not paid', ''),
(319, '2013-10-21 08:00:00', '2013-10-21 08:14:59', '173', '374', 'Aaron DuChateau', 'Samantha Bunzer', 'no notes or details', 'Oct Mon, 2013', '8:00 AM', '8:15 AM', '16', 'great test1', '15', 'a short price description', 'static', 'not paid', ''),
(320, '2013-10-22 08:30:00', '2013-10-22 08:44:59', '173', '374', 'Aaron DuChateau', 'Samantha Bunzer', 'no notes or details', 'Oct Tue, 2013', '8:30 AM', '8:45 AM', '16', 'great test1', '15', 'a short price description', 'static', 'not paid', ''),
(321, '2013-10-24 08:30:00', '2013-10-24 08:44:59', '173', '374', 'Aaron DuChateau', 'Samantha Bunzer', 'no notes or details', 'Oct Thu, 2013', '8:30 AM', '8:45 AM', '16', 'great test1', '15', 'a short price description', 'static', 'not paid', ''),
(322, '2013-10-25 08:30:00', '2013-10-25 09:44:59', '173', '374', 'Aaron DuChateau', 'Samantha Bunzer', 'no notes or details', 'Oct Fri, 2013', '8:30 AM', '9:45 AM', '22', 'great test1', '75', 'a short price description1', 'static', 'not paid', ''),
(323, '2013-10-27 08:00:00', '2013-10-27 08:29:59', '173', '375', 'Aaron DuChateau', 'Charlie Bunzer', 'no notes or details', 'Oct Sun, 2013', '8:00 AM', '8:30 AM', '17', 'another really cool plan3', '30', '25 dollars / set of 3 is 453', 'static', 'not paid', ''),
(324, '2013-10-22 09:00:00', '2013-10-22 10:14:59', '173', '374', 'Aaron DuChateau', 'Samantha Bunzer', 'no notes or details', 'Oct Tue, 2013', '9:00 AM', '10:15 AM', '22', 'great test1', '75', 'a short price description1', 'static', 'not paid', ''),
(355, '2013-12-11 10:00:00', '2013-12-11 10:14:59', '173', 'na', 'Aaron DuChateau', 'blocked time', 'no notes or details', 'Dec 11, 2013', '10:00 AM', '10:15 AM', '0', 'blocked-time', 'not applicable', 'not applicable', 'blocked', 'not paid', 'not applicable'),
(326, '2013-10-31 08:00:00', '2013-10-31 08:14:59', '173', '377', 'Aaron DuChateau', 'Daniel McNasher', 'no notes or details', 'Oct Thu, 2013', '8:00 AM', '8:15 AM', '16', 'great test1', '15', 'a short price description', 'static', 'not paid', ''),
(327, '2013-11-01 09:30:00', '2013-11-01 09:44:59', '173', '374', 'Aaron DuChateau', 'Samantha Bunzer', 'no notes or details', 'Nov 01, 2013', '9:30 AM', '9:45 AM', '16', 'great test1', '15', 'a short price description', 'static', 'not paid', ''),
(328, '2013-11-15 08:00:00', '2013-11-15 08:14:59', '173', '378', 'Aaron DuChateau', 'Naomi Rhoads', 'no notes or details', 'Nov 15, 2013', '8:00 AM', '8:15 AM', '16', 'great test1', '15', 'a short price description', 'static', 'not paid', ''),
(352, '2013-12-11 08:00:00', '2013-12-11 08:14:59', '173', '374', 'Aaron DuChateau', 'Samantha Bunzer', 'no notes or details', 'Dec 11, 2013', '8:00 AM', '8:15 AM', '16', 'great test1', '15', 'a short price description', 'static', 'not paid', 'gernunder@gernunder.com'),
(330, '2013-11-29 08:00:00', '2013-11-29 08:14:59', '173', '378', 'Aaron DuChateau', 'Naomi Rhoads', 'no notes or details', 'Nov 29, 2013', '8:00 AM', '8:15 AM', '16', 'great test1', '15', 'a short price description', 'static', 'not paid', ''),
(332, '2013-11-14 08:00:00', '2013-11-14 08:14:59', '173', '374', 'Aaron DuChateau', 'Samantha Bunzer', 'no notes or details', 'Nov 14, 2013', '8:00 AM', '8:15 AM', '16', 'great test1', '15', 'a short price description', 'static', 'paid', 'gernunder@gernunder.com'),
(354, '2013-12-11 09:30:00', '2013-12-11 09:44:59', '173', 'na', 'Aaron DuChateau', 'blocked time', 'no notes or details', 'Dec 11, 2013', '9:30 AM', '09:45 AM', '0', 'blocked-time', 'not applicable', 'not applicable', 'blocked', 'not paid', 'not applicable'),
(335, '2013-11-22 09:00:00', '2013-11-22 09:14:59', '173', 'na', 'Aaron DuChateau', 'blocked time', 'no notes or details', 'Nov 22, 2013', '9:00 AM', '09:15 AM', '0', 'blocked off time', 'not applicable', 'not applicable', 'not available', 'paid', 'not applicable'),
(336, '2013-11-19 08:30:00', '2013-11-19 08:44:59', '173', 'na', 'Aaron DuChateau', 'blocked time', 'no notes or details', 'Nov 19, 2013', '8:30 AM', '08:45 AM', '0', 'blocked off time', 'not applicable', 'not applicable', 'not available', 'not paid', 'not applicable'),
(337, '2013-11-19 08:00:00', '2013-11-19 08:14:59', '173', 'na', 'Aaron DuChateau', 'blocked time', 'no notes or details', 'Nov 19, 2013', '8:00 AM', '08:15 AM', '0', 'blocked off time', 'not applicable', 'not applicable', 'not available', 'not paid', 'not applicable'),
(338, '2013-11-20 09:00:00', '2013-11-20 09:14:59', '173', 'na', 'Aaron DuChateau', 'blocked time', 'no notes or details', 'Nov 20, 2013', '9:00 AM', '09:15 AM', '0', 'blocked off time', 'not applicable', 'not applicable', 'not available', 'not paid', 'not applicable'),
(339, '2013-11-20 08:00:00', '2013-11-20 08:14:59', '173', 'na', 'Aaron DuChateau', 'blocked time', 'no notes or details', 'Nov 20, 2013', '8:00 AM', '08:15 AM', '0', 'blocked off time', 'not applicable', 'not applicable', 'not available', 'not paid', 'not applicable'),
(340, '2013-11-19 09:30:00', '2013-11-19 10:44:59', '173', '374', 'Aaron DuChateau', 'Samantha Bunzer', 'no notes or details', 'Nov 19, 2013', '9:30 AM', '10:45 AM', '22', 'great test1', '75', 'a short price description1', 'static', 'not paid', 'gernunder@gernunder.com'),
(341, '2013-11-20 09:30:00', '2013-11-20 09:44:59', '173', '374', 'Aaron DuChateau', 'Samantha Bunzer', 'no notes or details', 'Nov 20, 2013', '9:30 AM', '9:45 AM', '16', 'great test1', '15', 'a short price description', 'static', 'paid', 'gernunder@gernunder.com'),
(342, '2013-11-20 10:00:00', '2013-11-20 10:14:59', '173', 'na', 'Aaron DuChateau', 'blocked time', 'no notes or details', 'Nov 20, 2013', '10:00 AM', '10:15 AM', '0', 'blocked-time', 'not applicable', 'not applicable', 'not available', 'paid', 'not applicable'),
(362, '2013-12-05 07:45:00', '2013-12-05 08:44:59', '173', '374', 'Aaron DuChateau', 'Samantha Bunzer', 'no notes or details', 'Dec 05, 2013', '7:45 AM', '8:45 AM', '23', 'Dougs new plan', '60', 'describe plan', 'static', 'not paid', 'gernunder@gernunder.com'),
(344, '2013-11-27 08:00:00', '2013-11-27 08:14:59', '173', 'na', 'Aaron DuChateau', 'blocked time', 'no notes or details', 'Nov 27, 2013', '8:00 AM', '08:15 AM', '0', 'blocked-time', 'not applicable', 'not applicable', 'not available', 'paid', 'not applicable'),
(345, '2013-12-04 08:00:00', '2013-12-04 08:14:59', '173', 'na', 'Aaron DuChateau', 'blocked time', 'no notes or details', 'Dec 04, 2013', '8:00 AM', '08:15 AM', '0', 'blocked-time', 'not applicable', 'not applicable', 'blocked', 'not paid', 'not applicable'),
(346, '2013-12-06 08:00:00', '2013-12-06 09:14:59', '173', '374', 'Aaron DuChateau', 'Samantha Bunzer', 'no notes or details', 'Dec 06, 2013', '8:00 AM', '9:15 AM', '22', 'great test1', '75', 'a short price description1', 'static', 'not paid', 'gernunder@gernunder.com'),
(347, '2013-12-04 08:30:00', '2013-12-04 08:44:59', '173', '374', 'Aaron DuChateau', 'Samantha Bunzer', 'no notes or details', 'Dec 04, 2013', '8:30 AM', '8:45 AM', '16', 'great test1', '15', 'a short price description', 'static', 'not paid', 'gernunder@gernunder.com'),
(348, '2013-12-04 09:00:00', '2013-12-04 09:14:59', '173', 'na', 'Aaron DuChateau', 'blocked time', 'no notes or details', 'Dec 04, 2013', '9:00 AM', '09:15 AM', '0', 'blocked-time', 'not applicable', 'not applicable', 'blocked', 'not paid', 'not applicable'),
(349, '2013-12-04 09:30:00', '2013-12-04 09:44:59', '173', '374', 'Aaron DuChateau', 'Samantha Bunzer', 'no notes or details', 'Dec 04, 2013', '9:30 AM', '9:45 AM', '16', 'great test1', '15', 'a short price description', 'static', 'not paid', 'gernunder@gernunder.com'),
(353, '2013-12-11 09:00:00', '2013-12-11 09:14:59', '173', 'na', 'Aaron DuChateau', 'blocked time', 'no notes or details', 'Dec 11, 2013', '9:00 AM', '09:15 AM', '0', 'blocked-time', 'not applicable', 'not applicable', 'blocked', 'not paid', 'not applicable'),
(356, '2013-12-11 11:00:00', '2013-12-11 11:14:59', '173', 'na', 'Aaron DuChateau', 'blocked time', 'no notes or details', 'Dec 11, 2013', '11:00 AM', '11:15 AM', '0', 'blocked-time', 'not applicable', 'not applicable', 'blocked', 'not paid', 'not applicable'),
(357, '2013-12-11 08:30:00', '2013-12-11 08:44:59', '173', 'na', 'Aaron DuChateau', 'blocked time', 'no notes or details', 'Dec 11, 2013', '8:30 AM', '08:45 AM', '0', 'blocked-time', 'not applicable', 'not applicable', 'blocked', 'not paid', 'not applicable'),
(358, '2013-12-11 10:30:00', '2013-12-11 10:44:59', '173', 'na', 'Aaron DuChateau', 'blocked time', 'no notes or details', 'Dec 11, 2013', '10:30 AM', '10:45 AM', '0', 'blocked-time', 'not applicable', 'not applicable', 'blocked', 'not paid', 'not applicable'),
(359, '2013-12-11 12:00:00', '2013-12-11 12:14:59', '173', 'na', 'Aaron DuChateau', 'blocked time', 'no notes or details', 'Dec 11, 2013', '12:00 PM', '12:15 PM', '0', 'blocked-time', 'not applicable', 'not applicable', 'blocked', 'not paid', 'not applicable'),
(361, '2013-12-06 07:15:00', '2013-12-06 07:29:59', '173', 'na', 'Aaron DuChateau', 'blocked time', 'no notes or details', 'Dec 06, 2013', '7:15 AM', '07:30 AM', '0', 'blocked-time', 'not applicable', 'not applicable', 'blocked', 'not paid', 'not applicable'),
(363, '2013-12-05 09:00:00', '2013-12-05 10:14:59', '173', '374', 'Aaron DuChateau', 'Samantha Bunzer', 'no notes or details', 'Dec 05, 2013', '9:00 AM', '10:15 AM', '22', 'great test1', '75', 'a short price description1', 'static', 'not paid', 'gernunder@gernunder.com'),
(364, '2013-12-04 10:00:00', '2013-12-04 10:59:59', '173', '374', 'Aaron DuChateau', 'Samantha Bunzer', 'no notes or details', 'Dec 04, 2013', '10:00 AM', '11:00 AM', '23', 'Dougs new plan', '60', 'describe plan', 'static', 'not paid', 'gernunder@gernunder.com'),
(365, '2013-12-04 07:30:00', '2013-12-04 07:59:59', '173', '374', 'Aaron DuChateau', 'Samantha Bunzer', 'no notes or details', 'Dec 04, 2013', '7:30 AM', '8:00 AM', '17', 'another really cool plan3', '30', '25 dollars / set of 3 is 453', 'static', 'not paid', 'gernunder@gernunder.com'),
(366, '2013-12-06 09:30:00', '2013-12-06 10:44:59', '173', '374', 'Aaron DuChateau', 'Samantha Bunzer', 'no notes or details', 'Dec 06, 2013', '9:30 AM', '10:45 AM', '22', 'great test1', '75', 'a short price description1', 'static', 'not paid', 'gernunder@gernunder.com'),
(367, '2013-12-05 10:30:00', '2013-12-05 11:29:59', '173', '374', 'Aaron DuChateau', 'Samantha Bunzer', 'no notes or details', 'Dec 05, 2013', '10:30 AM', '11:30 AM', '23', 'Dougs new plan', '60', 'describe plan', 'static', 'not paid', 'gernunder@gernunder.com'),
(368, '2013-12-07 08:00:00', '2013-12-07 09:14:59', '173', '374', 'Aaron DuChateau', 'Samantha Bunzer', 'no notes or details', 'Dec 07, 2013', '8:00 AM', '9:15 AM', '22', 'great test1', '75', 'a short price description1', 'static', 'not paid', 'gernunder@gernunder.com'),
(369, '2013-12-03 07:30:00', '2013-12-03 07:44:59', '173', '374', 'Aaron DuChateau', 'Samantha Bunzer', 'no notes or details', 'Dec 03, 2013', '7:30 AM', '7:45 AM', '16', 'great test1', '15', 'a short price description', 'static', 'not paid', 'gernunder@gernunder.com'),
(370, '2013-12-03 07:00:00', '2013-12-03 07:14:59', '173', '386', 'Aaron DuChateau', 'Paula DuChateau', 'no notes or details', 'Dec 03, 2013', '7:00 AM', '7:15 AM', '16', 'great test1', '15', 'a short price description', 'static', 'not paid', 'paula@paula.com'),
(371, '2013-12-04 07:00:00', '2013-12-04 07:14:59', '173', 'na', 'Aaron DuChateau', 'blocked time', 'no notes or details', 'Dec 04, 2013', '7:00 AM', '07:15 AM', '0', 'blocked-time', 'not applicable', 'not applicable', 'blocked', 'not paid', 'not applicable'),
(372, '2013-12-11 11:30:00', '2013-12-11 11:44:59', '173', '374', 'Aaron DuChateau', 'Samantha Bunzer', 'no notes or details', 'Dec 11, 2013', '11:30 AM', '11:45 AM', '16', 'great test1', '15', 'a short price description', 'static', 'not paid', 'gernunder@gernunder.com'),
(373, '2013-12-18 11:30:00', '2013-12-18 11:44:59', '173', '374', 'Aaron DuChateau', 'Samantha Bunzer', 'no notes or details', 'Dec 18, 2013', '11:30 AM', '11:45 AM', '16', 'great test1', '15', 'a short price description', 'static', 'not paid', 'gernunder@gernunder.com'),
(374, '2013-12-06 07:30:00', '2013-12-06 07:44:59', '173', 'na', 'Aaron DuChateau', 'blocked time', 'no notes or details', 'Dec 06, 2013', '7:30 AM', '07:45 AM', '0', 'blocked-time', 'not applicable', 'not applicable', 'blocked', 'not paid', 'not applicable'),
(375, '2013-12-11 07:00:00', '2013-12-11 07:14:59', '173', 'na', 'Aaron DuChateau', 'blocked time', 'no notes or details', 'Dec 11, 2013', '7:00 AM', '07:15 AM', '0', 'blocked-time', 'not applicable', 'not applicable', 'blocked', 'not paid', 'not applicable'),
(376, '2013-12-01 07:00:00', '2013-12-01 07:14:59', '173', 'na', 'Aaron DuChateau', 'blocked time', 'no notes or details', 'Dec 01, 2013', '7:00 AM', '07:15 AM', '0', 'blocked-time', 'not applicable', 'not applicable', 'blocked', 'not paid', 'not applicable'),
(377, '2013-12-01 07:30:00', '2013-12-01 07:44:59', '173', 'na', 'Aaron DuChateau', 'blocked time', 'no notes or details', 'Dec 01, 2013', '7:30 AM', '07:45 AM', '0', 'blocked-time', 'not applicable', 'not applicable', 'blocked', 'not paid', 'not applicable'),
(378, '2013-12-01 08:00:00', '2013-12-01 08:59:59', '173', 'na', 'Aaron DuChateau', 'blocked time', 'no notes or details', 'Dec 01, 2013', '8:00 AM', '09:00 AM', '0', 'blocked-time', 'not applicable', 'not applicable', 'blocked', 'not paid', 'not applicable'),
(379, '2013-12-01 09:00:00', '2013-12-01 10:29:59', '173', 'na', 'Aaron DuChateau', 'blocked time', 'no notes or details', 'Dec 01, 2013', '9:00 AM', '10:30 AM', '0', 'blocked-time', 'not applicable', 'not applicable', 'blocked', 'not paid', 'not applicable'),
(380, '2013-12-08 09:00:00', '2013-12-08 10:29:59', '173', 'na', 'Aaron DuChateau', 'blocked time', 'no notes or details', 'Dec 08, 2013', '9:00 AM', '10:30 AM', '0', 'blocked-time', 'not applicable', 'not applicable', 'blocked', 'not paid', 'not applicable');

-- --------------------------------------------------------

--
-- Table structure for table `day_exercise_list_t`
--

CREATE TABLE IF NOT EXISTS `day_exercise_list_t` (
  `ID_auth_delt` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `exercise_id_delt` varchar(25) NOT NULL DEFAULT '',
  `sets_delt` varchar(25) NOT NULL DEFAULT '',
  `repeats_delt` varchar(50) NOT NULL DEFAULT '',
  `weight_delt` varchar(50) NOT NULL DEFAULT '',
  `duration_delt` varchar(70) NOT NULL DEFAULT '',
  `day_delt` varchar(1000) NOT NULL DEFAULT 'no',
  `training_program_delt` varchar(100) NOT NULL DEFAULT 'no',
  PRIMARY KEY (`ID_auth_delt`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=460 ;

--
-- Dumping data for table `day_exercise_list_t`
--

INSERT INTO `day_exercise_list_t` (`ID_auth_delt`, `exercise_id_delt`, `sets_delt`, `repeats_delt`, `weight_delt`, `duration_delt`, `day_delt`, `training_program_delt`) VALUES
(347, '358', '1', '2', '3', '34', '1', '381'),
(348, '357', '44', '55', '-', '-', '2', '381'),
(349, 'b', '1', '1', '1', '1', '3', '381'),
(350, 'b', '23', '23', '23', '23', '3', '381'),
(355, 'b', '-', '-', '-', '-', '3', '381'),
(384, '354', '1', '-', '-', '1', '1', '382'),
(354, 'b', '-', '-', '-', '-', '3', '381'),
(356, 'b', '-', '-', '-', '-', '3', '381'),
(386, '355', '1', '-', '-', '-', '3', '382'),
(387, '356', '-', '1', '1', '1', '4', '382'),
(388, '357', '6', '7', '9', '10', '5', '382'),
(389, '351', '-', '-', '-', '-', '6', '382'),
(383, '357', '5', '6', '6', '6', '1', '380'),
(382, '356', '-', '-', '-', '-', '1', '381'),
(367, '354', '1', '1', '1', '1', '2', '381'),
(385, '354', '1', '-', '-', '-', '2', '382'),
(375, '354', '-', '-', '-', '-', '4', '381'),
(377, '360', '1', '-', '2', '-', '1', '381'),
(380, 'b', '-', '-', '-', '-', '2', '381'),
(390, 'b', '-', '-', '-', '-', '7', '382'),
(391, 'b', '-', '-', '-', '-', '8', '382'),
(392, '361', '5', '5', '5', '5', '9', '382'),
(393, '358', '7', '9', '10', '30', '10', '382'),
(408, '359', '2', '7', '10', '-', '1', '383'),
(395, '357', '-', '-', '1', '1', '1', '382'),
(396, '357', '-', '-', '-', '1', '1', '382'),
(397, '358', '-', '-', '-', '1', '1', '382'),
(398, '358', '-', '-', '-', '-', '9', '382'),
(399, '351', '-', '-', '-', '-', '9', '382'),
(400, '356', '-', '-', '-', '-', '9', '382'),
(401, '351', '-', '5', '-', '-', '1', '383'),
(402, 'b', '-', '-', '-', '-', '2', '383'),
(403, '358', '-', '-', '-', '-', '3', '383'),
(404, '354', '-', '-', '-', '-', '4', '383'),
(405, '355', '-', '-', '-', '-', '5', '383'),
(406, '361', '-', '-', '-', '-', '6', '383'),
(407, '358', '-', '-', '-', '-', '7', '383'),
(409, '357', '-', '-', '6', '-', '1', '383'),
(410, '358', '5', '-', '-', '5', '1', '383'),
(411, '356', '-', '-', '-', '-', '1', '383'),
(413, '358', '6', '-', '-', '-', '1', '383'),
(414, '355', '-', '-', '-', '-', '1', '383'),
(415, '355', '-', '-', '-', '-', '1', '383'),
(416, 'b', '-', '-', '-', '-', '1', '384'),
(417, 'b', '-', '-', '-', '-', '2', '384'),
(418, 'b', '-', '-', '-', '-', '3', '384'),
(419, 'b', '-', '-', '-', '-', '1', '385'),
(420, 'b', '-', '-', '-', '-', '2', '385'),
(421, 'b', '-', '-', '-', '-', '3', '385'),
(422, 'b', '-', '-', '-', '-', '1', '386'),
(423, 'b', '-', '-', '-', '-', '2', '386'),
(424, 'b', '-', '-', '-', '-', '3', '386'),
(425, 'b', '-', '-', '-', '-', '4', '386'),
(426, '358', '2', '2', '12', '-', '1', '387'),
(427, 'b', '-', '-', '-', '-', '2', '387'),
(428, 'b', '-', '-', '-', '-', '3', '387'),
(429, 'b', '-', '-', '-', '-', '4', '387'),
(430, 'b', '-', '-', '-', '-', '5', '387'),
(431, 'b', '-', '-', '-', '-', '6', '387'),
(432, 'b', '-', '-', '-', '-', '7', '387'),
(433, 'b', '-', '-', '-', '-', '8', '387'),
(434, 'b', '-', '-', '-', '-', '9', '387'),
(435, 'b', '-', '-', '-', '-', '10', '387'),
(436, 'b', '-', '-', '-', '-', '11', '387'),
(437, 'b', '-', '-', '-', '-', '12', '387'),
(441, '367', '2', '20', '30', '-', '1', '388'),
(439, '354', '-', '-', '-', '-', '1', '387'),
(440, '359', '-', '-', '-', '-', '1', '387'),
(442, 'b', '-', '-', '-', '-', '2', '388'),
(443, 'b', '-', '-', '-', '-', '3', '388'),
(444, '367', '-', '-', '-', '-', '1', '388'),
(445, '367', '-', '-', '-', '-', '1', '388'),
(446, '367', '-', '-', '-', '-', '1', '388'),
(447, '368', '3', '30', '20', '-', '1', '389'),
(448, '369', '1', '1', '100', '-', '2', '389'),
(449, 'b', '-', '-', '-', '-', '3', '389'),
(450, 'b', '-', '-', '-', '-', '4', '389'),
(451, 'b', '-', '-', '-', '-', '5', '389'),
(452, 'b', '-', '-', '-', '-', '6', '389'),
(453, 'b', '-', '-', '-', '-', '7', '389'),
(454, 'b', '-', '-', '-', '-', '8', '389'),
(455, 'b', '-', '-', '-', '-', '9', '389'),
(456, 'b', '-', '-', '-', '-', '10', '389'),
(457, '368', '2', '3', '4', '-', '2', '389'),
(458, '368', '2', '5', '5', '5', '2', '389'),
(459, '369', '-', '-', '-', '-', '2', '389');

-- --------------------------------------------------------

--
-- Table structure for table `day_food_list_t`
--

CREATE TABLE IF NOT EXISTS `day_food_list_t` (
  `ID_auth_delt` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `food_id_delt` varchar(25) NOT NULL DEFAULT '',
  `amount_delt` varchar(25) NOT NULL DEFAULT '',
  `measurements_delt` varchar(50) NOT NULL DEFAULT '',
  `day_delt` varchar(1000) NOT NULL DEFAULT 'no',
  `training_program_delt` varchar(100) NOT NULL DEFAULT 'no',
  PRIMARY KEY (`ID_auth_delt`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=400 ;

--
-- Dumping data for table `day_food_list_t`
--

INSERT INTO `day_food_list_t` (`ID_auth_delt`, `food_id_delt`, `amount_delt`, `measurements_delt`, `day_delt`, `training_program_delt`) VALUES
(347, 'b', '0', '1', '1', '271'),
(348, 'b', '0', '1', '2', '271'),
(349, 'b', '0', '1', '3', '271'),
(350, 'b', '0', '1', '1', '272'),
(351, 'b', '0', '1', '2', '272'),
(352, 'b', '0', '1', '3', '272'),
(353, 'b', '0', '1', '4', '272'),
(354, 'b', '0', '1', '5', '272'),
(355, 'b', '0', '1', '1', '273'),
(356, 'b', '0', '1', '2', '273'),
(357, 'b', '0', '1', '3', '273'),
(358, 'b', '0', '1', '4', '273'),
(359, 'b', '0', '1', '5', '273'),
(360, 'b', '0', '1', '6', '273'),
(361, 'b', '0', '1', '7', '273'),
(362, 'b', '0', '1', '8', '273'),
(363, 'b', '0', '1', '9', '273'),
(364, 'b', '0', '1', '10', '273'),
(365, 'b', '0', '1', '11', '273'),
(366, '269', '2', '2', '1', '274'),
(367, '267', '1', '1', '2', '274'),
(368, '264', '0', '1', '3', '274'),
(369, '267', '0', '1', '4', '274'),
(370, '269', '0', '1', '5', '274'),
(371, '267', '0', '1', '6', '274'),
(372, '269', '1', '1', '7', '274'),
(373, '268', '2', '1', '8', '274'),
(374, 'b', '0', '1', '9', '274'),
(375, 'b', '0', '1', '10', '274'),
(376, 'b', '0', '1', '11', '274'),
(377, 'b', '0', '1', '12', '274'),
(378, 'b', '0', '1', '13', '274'),
(379, 'b', '0', '1', '14', '274'),
(380, 'b', '0', '1', '15', '274'),
(381, 'b', '0', '1', '16', '274'),
(384, 'b', '0', '1', '1', '274'),
(383, '274', '0', '1', '1', '274'),
(385, '269', '2', '1', '2', '274'),
(386, '271', '3', '1', '2', '274'),
(387, '273', '4', '1', '2', '274'),
(388, '266', '0', '1', '3', '274'),
(389, '267', '0', '1', '3', '274'),
(390, '266', '0', '1', '3', '274'),
(391, '267', '0', '1', '5', '274'),
(392, '269', '0', '1', '5', '274'),
(393, '271', '0', '1', '8', '274'),
(394, '268', '0', '1', '8', '274'),
(395, '270', '0', '2', '1', '274'),
(396, '271', '0', '1', '1', '274'),
(397, 'b', '0', '1', '1', '275'),
(398, 'b', '0', '1', '2', '275'),
(399, 'b', '0', '1', '3', '275');

-- --------------------------------------------------------

--
-- Table structure for table `day_master_food_t`
--

CREATE TABLE IF NOT EXISTS `day_master_food_t` (
  `ID_auth_dmt` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rest_or_active_dmt` varchar(50) NOT NULL DEFAULT '',
  `training_program_link_dmt` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description_dmt` mediumtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `day_assoc_dmt` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID_auth_dmt`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=305 ;

--
-- Dumping data for table `day_master_food_t`
--

INSERT INTO `day_master_food_t` (`ID_auth_dmt`, `rest_or_active_dmt`, `training_program_link_dmt`, `description_dmt`, `day_assoc_dmt`) VALUES
(267, '1', '271', '', '1'),
(268, '1', '271', '', '2'),
(269, '1', '271', '', '3'),
(270, '1', '272', '', '1'),
(271, '1', '272', '', '2'),
(272, '1', '272', '', '3'),
(273, '1', '272', '', '4'),
(274, '1', '272', '', '5'),
(275, '1', '273', '', '1'),
(276, '1', '273', '', '2'),
(277, '1', '273', '', '3'),
(278, '1', '273', '', '4'),
(279, '1', '273', '', '5'),
(280, '1', '273', '', '6'),
(281, '1', '273', '', '7'),
(282, '1', '273', '', '8'),
(283, '1', '273', '', '9'),
(284, '1', '273', '', '10'),
(285, '1', '273', '', '11'),
(286, '1', '274', 'section 1 blah balh balajsd flkj asdlkj falsdfj laksj dfklajs dflakjs dflakj sdf\n\nalsdkjf asdj f\nasdf\nas dfk\najs dfkjas df', '1'),
(287, '1', '274', 'mutu.com', '2'),
(288, '1', '274', '', '3'),
(289, '1', '274', '', '4'),
(290, '1', '274', '', '5'),
(291, '1', '274', '', '6'),
(292, '1', '274', '', '7'),
(293, '1', '274', '', '8'),
(294, '1', '274', '', '9'),
(295, '1', '274', '', '10'),
(296, '1', '274', '', '11'),
(297, '1', '274', '', '12'),
(298, '1', '274', '', '13'),
(299, '1', '274', '', '14'),
(300, '1', '274', '', '15'),
(301, '1', '274', '', '16'),
(302, '1', '275', '', '1'),
(303, '1', '275', '', '2'),
(304, '1', '275', '', '3');

-- --------------------------------------------------------

--
-- Table structure for table `day_master_t`
--

CREATE TABLE IF NOT EXISTS `day_master_t` (
  `ID_auth_dmt` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `aerobic_dmt` varchar(25) NOT NULL DEFAULT '',
  `anaerobic_dmt` varchar(25) NOT NULL DEFAULT '',
  `rest_or_active_dmt` varchar(50) NOT NULL DEFAULT '',
  `training_program_link_dmt` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `day_assoc_dmt` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID_auth_dmt`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=419 ;

--
-- Dumping data for table `day_master_t`
--

INSERT INTO `day_master_t` (`ID_auth_dmt`, `aerobic_dmt`, `anaerobic_dmt`, `rest_or_active_dmt`, `training_program_link_dmt`, `day_assoc_dmt`) VALUES
(347, '0', '0', '1', '375', '1'),
(348, '0', '0', '1', '375', '2'),
(349, '0', '0', '1', '376', '1'),
(350, '0', '0', '1', '376', '2'),
(351, '0', '0', '1', '377', '1'),
(352, '0', '0', '1', '377', '2'),
(353, '0', '0', '1', '377', '3'),
(354, '0', '0', '1', '378', '1'),
(355, '0', '0', '1', '379', '1'),
(356, '0', '0', '1', '380', '1'),
(357, '8', '7', '1', '381', '1'),
(358, '10', '10', '1', '381', '2'),
(359, '0', '10', '1', '381', '3'),
(367, '7', '6', '1', '382', '1'),
(360, '0', '0', '1', '381', '4'),
(361, '8', '0', '1', '381', '5'),
(362, '0', '0', '1', '381', '6'),
(363, '0', '0', '1', '381', '7'),
(364, '0', '0', '1', '381', '8'),
(365, '0', '0', '1', '381', '9'),
(366, '0', '0', '1', '381', '10'),
(368, '5', '10', '1', '382', '2'),
(369, '10', '7', '1', '382', '3'),
(370, '9', '4', '1', '382', '4'),
(371, '9', '5', '1', '382', '5'),
(372, '8', '9', '1', '382', '6'),
(373, '0', '0', '0', '382', '7'),
(374, '0', '0', '0', '382', '8'),
(375, '8', '5', '1', '382', '9'),
(376, '4', '30', '1', '382', '10'),
(377, '10', '7', '1', '383', '1'),
(378, '0', '0', '0', '383', '2'),
(379, '5', '10', '1', '383', '3'),
(380, '11', '7', '1', '383', '4'),
(381, '15', '12', '1', '383', '5'),
(382, '20', '17', '1', '383', '6'),
(383, '11', '10', '1', '383', '7'),
(384, '0', '0', '1', '384', '1'),
(385, '0', '0', '1', '384', '2'),
(386, '0', '0', '1', '384', '3'),
(387, '0', '0', '1', '385', '1'),
(388, '0', '0', '1', '385', '2'),
(389, '0', '0', '1', '385', '3'),
(390, '0', '0', '1', '386', '1'),
(391, '0', '0', '1', '386', '2'),
(392, '0', '0', '1', '386', '3'),
(393, '0', '0', '1', '386', '4'),
(394, '13', '12', '1', '387', '1'),
(395, '0', '0', '0', '387', '2'),
(396, '0', '0', '1', '387', '3'),
(397, '0', '0', '1', '387', '4'),
(398, '0', '0', '1', '387', '5'),
(399, '0', '0', '1', '387', '6'),
(400, '0', '0', '1', '387', '7'),
(401, '0', '0', '1', '387', '8'),
(402, '0', '0', '1', '387', '9'),
(403, '0', '0', '1', '387', '10'),
(404, '0', '0', '1', '387', '11'),
(405, '0', '0', '1', '387', '12'),
(406, '20', '15', '1', '388', '1'),
(407, '0', '0', '1', '388', '2'),
(408, '0', '0', '1', '388', '3'),
(409, '10', '10', '1', '389', '1'),
(410, '10', '10', '1', '389', '2'),
(411, '0', '0', '1', '389', '3'),
(412, '0', '0', '1', '389', '4'),
(413, '0', '0', '1', '389', '5'),
(414, '0', '0', '1', '389', '6'),
(415, '0', '0', '1', '389', '7'),
(416, '0', '0', '1', '389', '8'),
(417, '0', '0', '1', '389', '9'),
(418, '0', '0', '1', '389', '10');

-- --------------------------------------------------------

--
-- Table structure for table `diet_programs_t`
--

CREATE TABLE IF NOT EXISTS `diet_programs_t` (
  `ID_auth_dp` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name_dp` varchar(500) NOT NULL DEFAULT '',
  `days_dp` varchar(25) NOT NULL DEFAULT '',
  `description_dp` varchar(10000) NOT NULL DEFAULT '',
  `owner_dp` varchar(50) NOT NULL DEFAULT '',
  `live_dp` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'yes',
  PRIMARY KEY (`ID_auth_dp`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=276 ;

--
-- Dumping data for table `diet_programs_t`
--

INSERT INTO `diet_programs_t` (`ID_auth_dp`, `name_dp`, `days_dp`, `description_dp`, `owner_dp`, `live_dp`) VALUES
(271, 'loose weight fast and effectively', '3', 'asdf', '172', 'yes'),
(272, 'loose weight slowly and methodically', '5', 'asdf', '172', 'yes'),
(273, 'asdf', '11', 'asdf', '172', 'yes'),
(274, 'tour de low calorie - version 1', '8', '444					', '172', 'yes'),
(275, 'good diet', '3', 'asdf', '359', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `diet_training_dates_master`
--

CREATE TABLE IF NOT EXISTS `diet_training_dates_master` (
  `ID_auth_dtdm` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type_dtdm` varchar(25) NOT NULL DEFAULT '',
  `start_dtdm` datetime NOT NULL,
  `end_dtdm` datetime NOT NULL,
  `tp_ref_dtdm` varchar(25) NOT NULL DEFAULT 'no',
  `cust_ref_dtdm` varchar(25) NOT NULL DEFAULT 'no',
  `trainer_ref_dtdm` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID_auth_dtdm`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=385 ;

--
-- Dumping data for table `diet_training_dates_master`
--

INSERT INTO `diet_training_dates_master` (`ID_auth_dtdm`, `type_dtdm`, `start_dtdm`, `end_dtdm`, `tp_ref_dtdm`, `cust_ref_dtdm`, `trainer_ref_dtdm`) VALUES
(349, 't', '2012-07-10 12:00:00', '2012-07-27 12:00:00', '383', '356', ''),
(369, 'd', '2012-07-04 12:00:00', '2012-07-19 12:00:00', '274', '362', ''),
(323, 't', '2012-06-01 12:00:00', '2012-06-17 12:00:00', '383', '356', ''),
(287, 'd', '2012-06-08 12:00:00', '2012-06-15 12:00:00', '274', '356', ''),
(344, 't', '2012-06-18 12:00:00', '2012-06-30 12:00:00', '382', '356', ''),
(347, 't', '2011-12-08 12:00:00', '2011-12-23 12:00:00', '383', '356', ''),
(348, 't', '2012-12-21 12:00:00', '2013-01-17 12:00:00', '383', '356', ''),
(302, 'd', '2012-06-01 12:00:00', '2012-06-03 12:00:00', '274', '356', ''),
(292, 't', '2012-06-14 12:00:00', '2012-06-22 12:00:00', '381', '357', ''),
(367, 't', '2012-08-13 12:00:00', '2012-08-16 12:00:00', '383', '356', ''),
(366, 'd', '2012-08-01 12:00:00', '2012-08-12 12:00:00', '274', '356', ''),
(368, 't', '2012-07-01 12:00:00', '2012-07-04 12:00:00', '383', '356', ''),
(373, 't', '2012-07-07 12:00:00', '2012-07-25 12:00:00', '383', '362', ''),
(374, 't', '2012-07-04 12:00:00', '2012-07-20 12:00:00', '386', '368', '359'),
(375, 'd', '2012-07-21 12:00:00', '2012-07-26 12:00:00', '275', '368', '359'),
(376, 't', '2012-07-21 12:00:00', '2012-07-26 12:00:00', '386', '368', '359'),
(377, 'd', '2012-07-04 12:00:00', '2012-07-12 12:00:00', '275', '368', '359'),
(378, 't', '2012-07-17 12:00:00', '2012-07-20 12:00:00', '383', '358', '172'),
(379, 'd', '2012-07-17 12:00:00', '2012-07-25 12:00:00', '274', '358', '172'),
(380, 't', '2012-08-01 12:00:00', '2012-08-24 12:00:00', '383', '358', '172'),
(381, 'd', '2012-08-01 12:00:00', '2012-08-30 12:00:00', '274', '358', '172'),
(382, 'd', '2012-08-21 12:00:00', '2012-08-31 12:00:00', '274', '356', '172'),
(383, 't', '2012-09-05 12:00:00', '2012-09-30 12:00:00', '388', '368', '362'),
(384, 't', '2012-09-12 12:00:00', '2012-09-28 12:00:00', '389', '373', '360');

-- --------------------------------------------------------

--
-- Table structure for table `exercises_t`
--

CREATE TABLE IF NOT EXISTS `exercises_t` (
  `ID_auth_e` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `trainer_id_e` int(20) NOT NULL,
  `name_e` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description_e` varchar(10000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `type_e` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `video_url_e` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `live_e` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'yes',
  PRIMARY KEY (`ID_auth_e`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=370 ;

--
-- Dumping data for table `exercises_t`
--

INSERT INTO `exercises_t` (`ID_auth_e`, `trainer_id_e`, `name_e`, `description_e`, `type_e`, `video_url_e`, `live_e`) VALUES
(353, 172, 'over head press - ***hard*** kjh jk', 'place your arms over your head, and press.', '2', 'http://www.youtube.com', 'yes'),
(352, 172, 'Ab Crunch Machine', 'Select a light resistance and sit down on the ab machine placing your feet under the pads provided and grabbing the top handles. Your arms should be bent at a 90 degree angle as you rest the triceps on the pads provided. This will be your starting position.\n\nAt the same time, begin to lift the legs up as you crunch your upper torso. Breathe out as you perform this movement. Tip: Be sure to use a slow and controlled motion. Concentrate on using your abs to move the weight while relaxing your legs and feet.\n\nAfter a second pause, slowly return to the starting position as you breathe in.\nRepeat the movement for the prescribed amount of repetitions.\nCaution:\n\nFor this exercise, always select a weight that you can easily handle as using too much weight can easily lead to injury.', '1', 'http://www.bodybuilding.com/exercises/detail/view/name/ab-crunch-machine', 'yes'),
(351, 172, 'All Fours Quad Stretch', 'Start off on your hands and knees, then lift your leg off the floor and hold the foot with your hand.\n\nUse your hand to hold the foot or ankle, keeping the knee fully flexed, stretching the quadriceps and hip flexors.\n\nFocus on extending your hips, thrusting them towards the floor. Hold for 10-20 seconds and then switch sides.', '1', 'http://www.bodybuilding.com/exercises/detail/view/name/all-fours-quad-stretch', 'yes'),
(354, 172, 'dumbell curls for giant biceps', 'asdfasdf', '1', 'asdf', 'yes'),
(355, 172, 'leg thrusts for lean muscle', 'asdf', '2', 'asdf', 'yes'),
(356, 172, 'arching curl sprawl + lengthy barrel twists', 'asdfasdf asdf asdf asdf', '2', 'asdf asdf asdf asd', 'yes'),
(357, 172, 'military press with incline', 'asdfasdfasdf asdf asdf asdf asdf', '1', 'asdf asdf asdf asd f', 'yes'),
(358, 172, 'inverted space infusion squats', 'for this exercise form is very important, take the time to breath slowly as you move into the squat position. Check behind you to make sure that no one is watching, because chances are their intentions are undesirable.', '1', 'asdf', 'yes'),
(359, 172, 'Atlas Stone Trainer', 'This trainer is effective for developing Atlas Stone strength for those who don''t have access to stones, and are typically made from bar ends or heavy pipe.\nBegin by loading the desired weight onto the bar. Straddle the weight, wrapping your arms around the implement, bending at the hips.\nBegin by pulling the weight up past the knees, extending through the hips. As the weight clears the knees, it can be lapped by resting it on your thighs and sitting back, hugging it tightly to your chest.\nFinish the movement by extending through your hips and knees to raise the weight as high as possible. The weight can be returned to the lap or to the ground for successive repetitions.', '1', 'http://www.bodybuilding.com/exercises/detail/view/name/atlas-stone-trainer', 'yes'),
(360, 172, 'Alternate Heal Touches', 'Lie on the floor with the knees bent and the feet on the floor around 18-24 inches apart. Your arms should be extended by your side. This will be your starting position.\n\nCrunch over your torso forward and up about 3-4 inches to the right side and touch your right heel as you hold the contraction for a second. Exhale while performing this movement.\n\nNow go back slowly to the starting position as you inhale.\n\nNow crunch over your torso forward and up around 3-4 inches to the left side and touch your left heel as you hold the contraction for a second. Exhale while performing this movement and then go back to the starting position as you inhale. \n\nNow that both heels have been touched, that is considered 1 repetition.\nContinue alternating sides in this manner until all prescribed repetitions are done.', '1', 'http://www.bodybuilding.com/exercises/detail/view/name/alternate-heel-touchers', 'yes'),
(361, 172, 'Jogging TreadMill', 'To begin, step onto the treadmill and select the desired option from the menu. Most treadmills have a manual setting, or you can select a program to run. Typically, you can enter your age and weight to estimate the amount of calories burned during exercise. Elevation can be adjusted to change the intensity of the workout.\nTreadmills offer convenience, cardiovascular benefits, and usually have less impact than jogging outside. A 150 lb person will burn almost 250 calories jogging for 30 minutes, compared to more than 450 calories running. Maintain proper posture as you jog, and only hold onto the handles when necessary, such as when dismounting or checking your heart rate.', '2', '', 'yes'),
(362, 172, 'rons new exercise', 'asldkfj;al sdjkfal; skdjfal; skdjf al;skdj fsd', '2', '', 'yes'),
(363, 172, 'zacks squat session', 'asdf', '2', '', 'no'),
(364, 359, 'jogging', 'running on treadmill', '1', '', 'yes'),
(365, 359, 'bench press', 'lifting the bench press weigt', '2', '', 'yes'),
(366, 172, 'baller haller', 'asdfasdf asdf asdf asdf', '2', 'asdf asdf', 'yes'),
(367, 362, 'dumbell press', 'lift the dumball', '1', '', 'yes'),
(368, 360, 'squat press', 'Lift and extend with your lets', '1', '', 'yes'),
(369, 360, 'dumbell curls', 'bring your arm to a 90 degree angle and bring the dumbell towards your body', '1', '', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `foods_t`
--

CREATE TABLE IF NOT EXISTS `foods_t` (
  `ID_auth_f` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `trainer_id_f` int(20) NOT NULL,
  `name_f` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `type_f` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `live_f` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'yes',
  PRIMARY KEY (`ID_auth_f`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=276 ;

--
-- Dumping data for table `foods_t`
--

INSERT INTO `foods_t` (`ID_auth_f`, `trainer_id_f`, `name_f`, `type_f`, `live_f`) VALUES
(264, 172, 'banana', '2', 'yes'),
(265, 172, 'ground steak - beef', '4', 'yes'),
(266, 172, 'bottle nose dolphin', '4', 'yes'),
(267, 172, 'granola', '1', 'yes'),
(268, 172, 'sourdough bread', '1', 'yes'),
(269, 172, 'rasberrys', '2', 'no'),
(270, 172, 'radish', '2', 'yes'),
(271, 172, '2% whole milk', '3', 'yes'),
(272, 172, 'cornbread', '1', 'yes'),
(273, 172, 'tempeh', '4', 'yes'),
(274, 172, 'white chedder cheese snitzel', '1', 'yes'),
(275, 359, 'banana', '2', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `goal`
--

CREATE TABLE IF NOT EXISTS `goal` (
  `ID_auth_g` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title_g` varchar(500) NOT NULL DEFAULT '',
  `desc_g` varchar(1000) NOT NULL DEFAULT '',
  `owner_g` varchar(1000) NOT NULL DEFAULT '',
  `created_by_g` varchar(1000) NOT NULL DEFAULT '',
  `created_by_type_g` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'c',
  `created_by_name_g` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no name',
  `date_by_g` datetime NOT NULL,
  `complete_g` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no',
  PRIMARY KEY (`ID_auth_g`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=252 ;

--
-- Dumping data for table `goal`
--

INSERT INTO `goal` (`ID_auth_g`, `title_g`, `desc_g`, `owner_g`, `created_by_g`, `created_by_type_g`, `created_by_name_g`, `date_by_g`, `complete_g`) VALUES
(147, 'new goal', 'asdf asdf asdf asdf asdf asdf asdf asdf asdf asdfasdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf', '356', '356', 'c', 'no name', '0000-00-00 00:00:00', 'yes'),
(148, 'loose 300 pounds', 'asdfasdf asdf asdf asdf asd fasdf asd fas df asdf asdf asd fa sdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf ', '356', '356', 'c', 'no name', '2012-07-11 12:00:00', 'no'),
(149, 'get really buff and strong quickly', 'i want to get really buff and strong quickly', '356', '356', 'c', 'no name', '2012-08-23 12:00:00', 'yes'),
(150, 'get really sexy and pretty', 'asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf ', '356', '356', 'c', 'no name', '2012-07-19 12:00:00', 'yes'),
(151, 'get really sexy and pretty', 'asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf ', '356', '356', 'c', 'no name', '2012-07-19 12:00:00', 'yes'),
(152, 'get really sexy and pretty', 'asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf ', '356', '356', 'c', 'no name', '2012-07-19 12:00:00', 'yes'),
(153, 'get really sexy and pretty', 'asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf ', '356', '356', 'c', 'no name', '2012-07-19 12:00:00', 'yes'),
(154, 'get really sexy and pretty', 'asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf asdf ', '356', '356', 'c', 'no name', '2012-07-19 12:00:00', 'yes'),
(155, 'testing title', 'asdf', '356', '356', 'c', 'no name', '2012-10-28 12:00:00', 'yes'),
(156, 'testing title', 'asdf', '356', '356', 'c', 'no name', '2012-10-28 12:00:00', 'yes'),
(157, 'testing title', 'asdf', '356', '356', 'c', 'no name', '2012-10-28 12:00:00', 'yes'),
(158, 'testing title', 'asdf', '356', '356', 'c', 'no name', '2012-10-28 12:00:00', 'no'),
(159, 'testing title', 'asdf', '356', '356', 'c', 'no name', '2012-10-28 12:00:00', 'no'),
(162, 'testing title', 'asdf', '356', '356', 'c', 'no name', '2012-10-28 12:00:00', 'yes'),
(168, 'testing title', 'asdf', '356', '356', 'c', 'no name', '2012-10-28 12:00:00', 'no'),
(170, 'testing title', 'asdf', '356', '356', 'c', 'no name', '2012-10-28 12:00:00', 'no'),
(172, 'testing title', 'asdf', '356', '356', 'c', 'no name', '2012-10-28 12:00:00', 'no'),
(174, 'testing title', 'asdf', '356', '356', 'c', 'no name', '2012-10-28 12:00:00', 'no'),
(176, 'testing title', 'asdf', '356', '356', 'c', 'no name', '2012-10-28 12:00:00', 'no'),
(177, 'testing title', 'asdf', '356', '356', 'c', 'no name', '2012-10-28 12:00:00', 'yes'),
(178, 'testing title', 'asdf', '356', '356', 'c', 'no name', '2012-10-28 12:00:00', 'yes'),
(179, 'testing title', 'asdf', '356', '356', 'c', 'no name', '2012-10-28 12:00:00', 'yes'),
(180, 'testing title', 'asdf', '356', '356', 'c', 'no name', '2012-10-28 12:00:00', 'yes'),
(181, 'testing title', 'asdf', '356', '356', 'c', 'no name', '2012-10-28 12:00:00', 'yes'),
(182, 'testing title', 'asdf', '356', '356', 'c', 'no name', '2012-10-28 12:00:00', 'yes'),
(183, 'testing title', 'asdf', '356', '356', 'c', 'no name', '2012-10-28 12:00:00', 'yes'),
(184, 'testing title', 'asdf', '356', '356', 'c', 'no name', '2012-10-28 12:00:00', 'yes'),
(185, 'testing title', 'asdf', '356', '356', 'c', 'no name', '2012-10-28 12:00:00', 'yes'),
(186, 'testing title', 'asdf', '356', '356', 'c', 'no name', '2012-10-28 12:00:00', 'yes'),
(187, 'testing title', 'asdf', '356', '356', 'c', 'no name', '2012-10-28 12:00:00', 'yes'),
(188, 'testing title', 'asdf', '356', '356', 'c', 'no name', '2012-10-28 12:00:00', 'yes'),
(189, 'testing title', 'asdf', '356', '356', 'c', 'no name', '2012-10-28 12:00:00', 'yes'),
(190, 'testing title', 'asdf', '356', '356', 'c', 'no name', '2012-10-28 12:00:00', 'yes'),
(191, '', '', '356', '356', 'c', 'no name', '2012-07-20 12:00:00', 'yes'),
(219, '', '', '356', '356', 'c', 'no name', '2012-07-20 12:00:00', 'no'),
(193, '', '', '356', '356', 'c', 'no name', '2012-07-20 12:00:00', 'yes'),
(194, '', '', '356', '356', 'c', 'no name', '2012-07-20 12:00:00', 'yes'),
(197, '', '', '356', '356', 'c', 'no name', '2012-07-20 12:00:00', 'no'),
(199, '', '', '356', '356', 'c', 'no name', '2012-07-20 12:00:00', 'no'),
(200, '', '', '356', '356', 'c', 'no name', '2012-07-20 12:00:00', 'no'),
(201, '', '', '356', '356', 'c', 'no name', '2012-07-20 12:00:00', 'no'),
(202, '', '', '356', '356', 'c', 'no name', '2012-07-20 12:00:00', 'no'),
(203, '', '', '356', '356', 'c', 'no name', '2012-07-20 12:00:00', 'no'),
(204, '', '', '356', '356', 'c', 'no name', '2012-07-20 12:00:00', 'no'),
(205, '', '', '356', '356', 'c', 'no name', '2012-07-20 12:00:00', 'no'),
(206, '', '', '356', '356', 'c', 'no name', '2012-07-20 12:00:00', 'no'),
(207, '', '', '356', '356', 'c', 'no name', '2012-07-20 12:00:00', 'no'),
(208, '', '', '356', '356', 'c', 'no name', '2012-07-20 12:00:00', 'no'),
(209, '', '', '356', '356', 'c', 'no name', '2012-07-20 12:00:00', 'no'),
(210, '', '', '356', '356', 'c', 'no name', '2012-07-20 12:00:00', 'no'),
(211, '', '', '356', '356', 'c', 'no name', '2012-07-20 12:00:00', 'no'),
(212, '', '', '356', '356', 'c', 'no name', '2012-07-20 12:00:00', 'no'),
(213, '', '', '356', '356', 'c', 'no name', '2012-07-20 12:00:00', 'no'),
(214, '', '', '356', '356', 'c', 'no name', '2012-07-20 12:00:00', 'no'),
(215, '', '', '356', '356', 'c', 'no name', '2012-07-20 12:00:00', 'no'),
(216, '', '', '356', '356', 'c', 'no name', '2012-07-20 12:00:00', 'no'),
(217, '', '', '356', '356', 'c', 'no name', '2012-07-20 12:00:00', 'no'),
(242, 'do this', 'asdf', '369', '359', 't', 'gtgt gtgt', '2012-07-27 12:00:00', 'no'),
(243, 'also do this', 'asdf', '369', '359', 't', 'gtgt gtgt', '2012-08-24 12:00:00', 'no'),
(244, 'and while your at it do this', 'asdf', '369', '359', 't', 'gtgt gtgt', '2016-07-22 12:00:00', 'yes'),
(225, 'ZSDF', 'asg', '356', '356', 'c', 'r r', '2012-07-19 12:00:00', 'no'),
(231, 'asdf', 'asdf', '356', '172', 'c', 'Aaron DuChateau', '2012-07-31 12:00:00', 'no'),
(232, 'asdf', 'asdf', '356', '172', 'c', 'Aaron DuChateau', '2012-07-12 12:00:00', 'no'),
(227, 'new goal 2', 'asdlkfj al;skdj f;alksj df', '356', '172', 'c', 'Aaron DuChateau', '2012-07-02 12:00:00', 'yes'),
(228, 'new goal 2', 'asdlkfj al;skdj f;alksj df', '356', '172', 'c', 'Aaron DuChateau', '2012-07-02 12:00:00', 'yes'),
(230, 'asdf', 'asdf', '356', '172', 'c', 'Aaron DuChateau', '2012-07-06 12:00:00', 'yes'),
(233, 'asdf', 'asdf', '356', '172', 'c', 'Aaron DuChateau', '2012-07-12 12:00:00', 'no'),
(234, 'asdf', 'asdf', '356', '172', 'c', 'Aaron DuChateau', '2012-07-12 12:00:00', 'no'),
(235, 'asdf', 'asdf', '362', '172', 'c', 'Aaron DuChateau', '2012-07-12 12:00:00', 'no'),
(236, '', '', '362', '172', 'c', 'Aaron DuChateau', '2012-07-27 12:00:00', 'no'),
(237, 'loose 300 pounds', 'asdf asdf asdf asdf asd f', '361', '172', 'c', 'Aaron DuChateau', '2012-07-18 12:00:00', 'yes'),
(238, 'aSDF', 'ASDF', '361', '172', 'c', 'Aaron DuChateau', '2012-07-29 12:00:00', 'no'),
(239, 'ASDF', 'ASDF', '361', '172', 'c', 'Aaron DuChateau', '2013-07-19 12:00:00', 'no'),
(240, '', '', '361', '172', 'c', 'Aaron DuChateau', '2012-07-14 12:00:00', 'no'),
(241, 'ZAsdf', 'asdf', '356', '356', 'c', 'r r', '2012-07-20 12:00:00', 'no'),
(245, 'yea', 'asdf', '369', '359', 't', 'gtgt gtgt', '2012-07-11 12:00:00', 'no'),
(246, 'monkey test', 'monkey', '362', '172', 't', 'Aaron DuChateau', '2012-07-31 12:00:00', 'no'),
(247, 'ten thousand', 'ten thousand', '358', '172', 't', 'Aaron DuChateau', '2012-07-30 12:00:00', 'no'),
(248, 'loose ten pounds', 'asdf', '358', '358', 'c', 'a a', '2012-07-31 12:00:00', 'yes'),
(249, 'loose 20 pounds', '', '358', '358', 'c', 'a a', '2012-07-10 12:00:00', 'yes'),
(250, 'new goal', 'goal description can be long long long', '358', '358', 'c', 'a a', '2014-08-22 12:00:00', 'no'),
(251, 'loose 3400 pounds', 'asdf asdf asdf asd f', '358', '358', 'c', 'a a', '2012-08-23 12:00:00', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `golf_programs`
--

CREATE TABLE IF NOT EXISTS `golf_programs` (
  `ID_auth_dp` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `price_description` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `short_desc` varchar(5000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `long_description` varchar(10000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `duration_multiplier` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `live` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'yes',
  PRIMARY KEY (`ID_auth_dp`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `golf_programs`
--

INSERT INTO `golf_programs` (`ID_auth_dp`, `name`, `price_description`, `short_desc`, `long_description`, `duration_multiplier`, `live`) VALUES
(16, 'great test1', 'a short price description', 'short description', 'long description', '1', 'yes'),
(17, 'another really cool plan3', '25 dollars / set of 3 is 453', 'test plan3', 'test plan3', '2', 'yes'),
(18, 'another really cool plan', '25 dollars / set of 3 is 45', 'test plan', 'test plan', '4', 'no'),
(19, 'another really cool plan', '25 dollars / set of 3 is 45', 'test plan', 'test plan', '4', 'no'),
(20, 'another really cool plan', '25 dollars / set of 3 is 45', 'test plan', 'test plan', '4', 'no'),
(21, 'great test2', 'a short price description2', 'short description2', 'long description2', '2', 'yes'),
(22, 'great test1', 'a short price description1', 'short description1', 'long description1', '5', 'yes'),
(23, 'Dougs new plan', 'describe plan', '', '', '4', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `golf_static_assets`
--

CREATE TABLE IF NOT EXISTS `golf_static_assets` (
  `ID_auth_bm` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `default_start_lessons` varchar(25) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `default_end_lessons` varchar(25) CHARACTER SET latin1 NOT NULL DEFAULT 'no',
  `default_incriment` varchar(25) CHARACTER SET latin1 NOT NULL DEFAULT 'no',
  `weight_bm` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID_auth_bm`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=268 ;

--
-- Dumping data for table `golf_static_assets`
--

INSERT INTO `golf_static_assets` (`ID_auth_bm`, `default_start_lessons`, `default_end_lessons`, `default_incriment`, `weight_bm`) VALUES
(250, '07:00', '16:30', '30', '145');

-- --------------------------------------------------------

--
-- Table structure for table `gym_name`
--

CREATE TABLE IF NOT EXISTS `gym_name` (
  `gym_id` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gym_name_g` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gym_name`
--

INSERT INTO `gym_name` (`gym_id`, `gym_name_g`) VALUES
('noValue', ''),
('noValue', ''),
('366', 'abc gymnasium'),
('367', 'asdf'),
('371', 'asdf');

-- --------------------------------------------------------

--
-- Table structure for table `join_customer`
--

CREATE TABLE IF NOT EXISTS `join_customer` (
  `train_nut_val` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cust_val` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `join_customer`
--

INSERT INTO `join_customer` (`train_nut_val`, `cust_val`) VALUES
('12', '355'),
('172', '356'),
('172', '357'),
('172', '358'),
('172', '359'),
('172', '360'),
('172', '361'),
('172', '362'),
('357', '363'),
('', '366'),
('353', '364'),
('357', '365'),
('354', '365'),
('352', '365'),
('354', '366'),
('356', '366'),
('353', '366'),
('359', '368'),
('359', '367'),
('359', '369'),
('359', '370'),
('359', '371'),
('359', '372'),
('361', '368'),
('362', '368'),
('360', '373');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `ID_auth_m` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `message_body_m` varchar(5000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `time_sent_m` datetime NOT NULL,
  `sender_id_m` varchar(15) NOT NULL DEFAULT '',
  `reciever_id_m` varchar(15) NOT NULL DEFAULT '',
  `sender_name_m` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `reciever_name_m` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `sender_type_m` varchar(10) NOT NULL DEFAULT '',
  `read_m` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no',
  PRIMARY KEY (`ID_auth_m`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=218 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`ID_auth_m`, `message_body_m`, `time_sent_m`, `sender_id_m`, `reciever_id_m`, `sender_name_m`, `reciever_name_m`, `sender_type_m`, `read_m`) VALUES
(151, 'asdf aklsdfj akl; sdjfl;kasj dfkl;aj sdl;kfjasl;kdfjal;skdjf aljksdf\r\n\r\n\r\nas;dlfkj a;sdlk dfj\r\nasldfkj a;skldfj \r\n\r\n\r\nasl;dfkj ;lk \r\nasdflk j', '2012-07-07 15:22:00', '172t', '356c', 'Aaron DuChateau', 'r r', 't', ''),
(150, 'asdf', '2012-07-07 15:22:00', '172t', '362c', 'Aaron DuChateau', 't t', 't', 'yes'),
(152, 'hey dude, it was great to meet with you the other day, lets meet up soon and stuff', '2012-07-07 15:23:00', '172t', '356c', 'Aaron DuChateau', 'r r', 't', ''),
(153, 'hey lets talk about my throid', '2012-07-07 15:25:00', '172t', '356c', 'Aaron DuChateau', 'r r', 't', ''),
(154, ' asldkj fal;k asdjkfl;aksj dfl;kaj sd;flkja sd;lkfj a;sldk sdfj;akls asdf', '2012-07-07 15:34:00', '172t', '356c', 'Aaron DuChateau', 'r r', 't', ''),
(155, 'asdfasdf asdf asdf asdf asdf asdfasdf asdf asdf asd ', '2012-07-07 15:34:00', '172t', '358c', 'Aaron DuChateau', 'a a', 't', 'yes'),
(156, 'asdf asdf asdf asd fasd fas df asdf asd fasdf asdf asdf a', '2012-07-07 15:34:00', '172t', '361c', 'Aaron DuChateau', 'Bob Sender', 't', ''),
(157, 'asdf asdf asdf asdf asdf asdf asd f', '2012-07-07 15:34:00', '172t', '360c', 'Aaron DuChateau', 'Greg Donahoe', 't', ''),
(158, 'asdf', '2012-07-07 16:30:00', '172t', '356c', 'Aaron DuChateau', 'r r', 't', ''),
(159, 'asdf', '2012-07-07 16:30:00', '172t', '358c', 'Aaron DuChateau', 'a a', 't', 'yes'),
(160, 'asdf', '2012-07-07 16:30:00', '172t', '362c', 'Aaron DuChateau', 't t', 't', 'yes'),
(161, 'asdf', '2012-07-07 16:30:00', '172t', '362c', 'Aaron DuChateau', 't t', 't', 'yes'),
(162, 'asdf', '2012-07-07 16:30:00', '172t', '362c', 'Aaron DuChateau', 't t', 't', 'yes'),
(163, 'asdf', '2012-07-07 16:30:00', '172t', '362c', 'Aaron DuChateau', 't t', 't', 'yes'),
(164, 'asdf', '2012-07-07 16:30:00', '172t', '362c', 'Aaron DuChateau', 't t', 't', 'yes'),
(165, 'asdf', '2012-07-07 16:30:00', '172t', '361c', 'Aaron DuChateau', 'Bob Sender', 't', ''),
(166, 'asdf', '2012-07-07 16:30:00', '172t', '362c', 'Aaron DuChateau', 't t', 't', 'yes'),
(167, 'asdf bat bat boy boy', '2012-07-07 16:30:00', '362c', '172t', 't t', 'Aaron DuChateau', 'c', 'yes'),
(168, 'asdf bat bat boy boy 2', '2012-07-07 16:30:00', '362c', '172t', 't t', 'Aaron DuChateau', 'c', 'yes'),
(169, 'asdf bat bat boy boy 3', '2012-07-07 16:30:00', '362c', '172t', 't t', 'Aaron DuChateau', 'c', 'yes'),
(170, 'asl;dkgfal;sdkjgs', '2012-07-07 17:24:00', '172t', '362c', 'Aaron DuChateau', 't t', 't', 'yes'),
(171, 'asdf asdf asdf asdf ', '2012-07-08 11:50:00', '172t', '362c', 'Aaron DuChateau', 't t', 't', 'yes'),
(172, 'new message for you!', '2012-07-08 14:40:00', '172t', '362c', 'Aaron DuChateau', 't t', 't', 'yes'),
(173, 'alot of text alot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of text\r\n\r\n\r\nalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of text', '2012-07-08 14:40:00', '172t', '362c', 'Aaron DuChateau', 't t', 't', 'yes'),
(174, 'alot of text alot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of text\r\n\r\n\r\nalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of text', '2012-07-08 14:40:00', '172t', '362c', 'Aaron DuChateau', 't t', 't', 'yes'),
(175, 'this is alot of text this is alot of textthis is alot of textthis is alot of textthis is alot of textthis is alot of textthis is alot of textthis is alot of textthis is alot of textthis is alot of textthis is alot of textthis is alot of textthis is alot of textthis is alot of textthis is alot of textthis is alot of text\r\n\r\nthis is alot of textthis is alot of textthis is alot of textthis is alot of text\r\n\r\n\r\nthis is alot of text\r\n\r\nthis is alot of textthis is alot of textthis is alot of textthis is alot of textthis is alot of textthis is alot of textthis is alot of textthis is alot of text\r\n\r\nthis is alot of text', '2012-07-08 14:56:00', '172t', '362c', 'Aaron DuChateau', 't t', 't', 'yes'),
(176, 't this is alot of textthis is alot of textthis is alot of textthis is alot of textthis is alot of textthis is alot of textthis is alot of textthis is alot of textthis is alot of textthis is alot of textthis is alot of textthis is alot\r\n\r\n\r\n of textthis is alot of textthis is alot of textthis is alot of text this is alot of textthis is \r\n\r\nalot of textthis is alot of textthis is alot of text this is alot of text this is alot of textthis is alot of textthis is alot of textthis is alot of textthis is alot of textthis is \r\n\r\nalot of textthis is alot of textthis is alot of text this is alot of text', '2012-07-08 14:58:00', '172t', '362c', 'Aaron DuChateau', 't t', 't', 'yes'),
(177, 'asdf\r\n\r\n\r\nasdf\r\n\r\nasdf', '2012-07-08 14:58:00', '172t', '362c', 'Aaron DuChateau', 't t', 't', 'yes'),
(178, 'buffalo<br>asdf\r\n\r\nasdf\r\n\r\n\r\nassdf<br>asldkfj<br>akl;sdj<br>fl;aksdj<br>f;alksdjf<br>alskdf<br>asldfhk<br>ahsdf\r\n\r\nasdkjfh<br>', '2012-07-08 15:01:00', '172t', '362c', 'Aaron DuChateau', 't t', 't', 'yes'),
(179, 'asdfka<br>sdkljf<br>alskdj<br>f\r\nasdf\r\n\r\nasdfasdfasdf\r\n\r\nasdfasdf\r\n\r\nasdfasdfasdf', '2012-07-08 15:03:00', '172t', '362c', 'Aaron DuChateau', 't t', 't', 'yes'),
(180, 't<br><br>this<br><br>is<br><br>alot<br><br>of<br><br>textthis<br><br>is<br><br>alot<br><br>of<br><br>textthis<br><br>is<br><br>alot<br><br>of<br><br>textthis<br><br>is<br><br>alot<br><br>of<br><br>textthis<br><br>is<br><br>alot<br><br>of<br><br>textthis<br><br>is<br><br>alot<br><br>of<br><br>textthis<br><br>is<br><br>alot<br><br>of<br><br>textthis<br><br>is<br><br>alot<br><br>of<br><br>textthis<br><br>is<br><br>alot<br><br>of<br><br>textthis<br><br>is<br><br>alot<br><br>of<br><br>textthis<br><br>is<br><br>alot<br><br>of<br><br>textthis<br><br>is<br><br>alot<br><br>of<br><br>textthis<br><br>is<br><br>alot<br><br>of<br><br>textthis<br><br>is<br><br>alot<br><br>of<br><br>textthis<br><br>is<br><br>alot<br><br>of<br><br>text<br><br>this<br><br>is<br><br>alot<br><br>\r\n\r\nof<br><br>textthis<br><br>is<br><br>alot<br><br>of<br><br>textthis<br><br>is<br><br>alot<br><br>of<br><br>textthis<br><br>is<br><br>alot<br><br>of<br><br>text<br><br>this<br><br>is<br><br>alot<br><br>of<br><br>text<br><br>this<br><br>is<br><br>alot<br><br>of<br><br>textthis<br><br>is<br><br>alot<br><br>of<br><br>textthis<br><br>is<br><br>alot<br><br>of<br><br>textthis<br><br>is<br><br>alot<br><br>of<br><br>textthis<br><br>is<br><br>alot<br><br>of<br><br>textthis<br><br>is<br><br>alot<br><br>of<br><br>textthis<br><br>is<br><br>alot<br><br>of<br><br>textthis<br><br>is<br><br>alot<br><br>of<br><br>text<br><br>this<br><br>is<br><br>alot<br><br>of<br><br>text', '2012-07-08 15:04:00', '172t', '362c', 'Aaron DuChateau', 't t', 't', 'yes'),
(181, 'hey<br><br>there<br><br>Aaron!<br><br>very<br><br>nice<br><br>to<br><br>meet<br><br>you\r\n\r\nI<br><br>am<br><br>interested<br><br>in<br><br>etc\r\n\r\ndo<br><br>you<br><br>have<br><br>any<br><br>interste', '2012-07-08 15:05:00', '172t', '362c', 'Aaron DuChateau', 't t', 't', 'yes'),
(182, 'hey<br>there<br>aaron<br>\r\n\r\ndo<br>you<br>ahve<br>any<br>interst<br>in<br>working<br>long<br>shitty<br>hours\r\n\r\ngive<br>me<br>a<br>call<br>if<br>you<br>do', '2012-07-08 15:06:00', '172t', '362c', 'Aaron DuChateau', 't t', 't', 'yes'),
(183, 'hey there aaron do you have\r\n\r\nany inetrest in \r\n\r\nasdf', '2012-07-08 15:08:00', '172t', '362c', 'Aaron DuChateau', 't t', 't', 'yes'),
(184, 'hey there aaron do you\r\n\r\nhave any interest in \r\n\r\nthis', '2012-07-08 15:13:00', '172t', '362c', 'Aaron DuChateau', 't t', 't', 'yes'),
(185, 'hey there\r\n\r\ndo you have\r\n\r\nany', '2012-07-08 15:14:00', '172t', '362c', 'Aaron DuChateau', 't t', 't', 'yes'),
(186, 'asdf<br />\r\n<br />\r\nasdf<br />\r\n<br />\r\nasdf', '2012-07-08 15:14:00', '172t', '362c', 'Aaron DuChateau', 't t', 't', 'yes'),
(187, 'dog dog dog<br />\r\n<br />\r\ndoggy dog dog', '2012-07-08 15:14:00', '172t', '362c', 'Aaron DuChateau', 't t', 't', 'yes'),
(188, 'testing 1testing 1testing 1testing 1testing 1testing 1testing 1testing 1testing 1testing 1testing 1testing 1testing 1testing 1testing 1<br />\r\n<br />\r\n<br />\r\ntesting 1testing 1testing 1testing 1testing 1testing 1testing 1testing 1testing 1testing 1testing 1testing 1', '2012-07-08 15:16:00', '172t', '362c', 'Aaron DuChateau', 't t', 't', 'yes'),
(189, 'testing 2 testing 2testing 2testing 2testing 2testing 2testing 2testing 2testing 2testing 2testing 2testing 2testing 2testing 2<br />\r\ntesting 2testing 2testing 2<br />\r\n<br />\r\n<br />\r\ntesting 2testing 2testing 2testing 2testing 2testing 2testing 2testing 2', '2012-07-08 15:16:47', '172t', '362c', 'Aaron DuChateau', 't t', 't', 'yes'),
(190, 'working', '2012-07-08 15:40:14', '172t', '362c', 'Aaron DuChateau', 't t', 't', 'yes'),
(191, 'i havn''t testted this yet', '2012-07-08 15:57:46', '172t', '362c', 'Aaron DuChateau', 't t', 't', 'yes'),
(192, 'asdasdgags asdf asdf ', '2012-07-12 22:02:03', '172t', '357c', 'Aaron DuChateau', 'g g', 't', 'no'),
(193, 'asfgadfasdf', '2012-07-15 09:38:43', '172t', '362c', 'Aaron DuChateau', 't t', 't', 'yes'),
(194, 'asdf', '2012-07-16 13:21:14', '172t', '362c', 'Aaron DuChateau', 't t', 't', 'yes'),
(195, 'new message', '2012-07-16 14:10:13', '362c', '172t', 't t', 'Aaron DuChateau', 'c', 'yes'),
(196, 'asdf<br />\r\n<br />\r\nasdf', '2012-07-16 14:16:58', '362c', '172t', 't t', 'Aaron DuChateau', 'c', 'yes'),
(197, 'asdf', '2012-07-16 14:18:48', '362c', '172t', 't t', 'Aaron DuChateau', 'c', 'yes'),
(198, 'oh really?', '2012-07-16 17:40:57', '172t', '362c', 'Aaron DuChateau', 't t', 't', 'yes'),
(199, 'are you sure?', '2012-07-16 17:51:19', '362c', '172t', 't t', 'Aaron DuChateau', 'c', 'yes'),
(200, 'yes', '2012-07-16 17:51:52', '172t', '362c', 'Aaron DuChateau', 't t', 't', 'yes'),
(201, 'test', '2012-07-16 18:51:32', '172t', '362c', 'Aaron DuChateau', 't t', 't', 'yes'),
(202, 'bubbles', '2012-07-17 11:13:13', '172t', '362cc', 'Aaron DuChateau', 't t', 't', 'no'),
(203, 'bubbles', '2012-07-17 11:15:01', '172t', '362', 'Aaron DuChateau', 't t', 't', 'no'),
(204, 'bubbles', '2012-07-17 11:15:38', '172t', '362c', 'Aaron DuChateau', 't t', 't', 'yes'),
(205, 'bubbles 2', '2012-07-17 11:15:57', '172t', '362c', 'Aaron DuChateau', 't t', 't', 'yes'),
(206, 'bubbles again', '2012-07-17 11:16:06', '172t', '362c', 'Aaron DuChateau', 't t', 't', 'yes'),
(207, 'heyo badonga', '2012-07-17 12:31:16', '362c', '172t', 't t', 'Aaron DuChateau', 'c', 'yes'),
(208, 'asdf', '2012-07-17 12:37:30', '362c', '172t', 't t', 'Aaron DuChateau', 'c', 'yes'),
(209, 'balls', '2012-07-17 12:50:23', '172t', '362c', 'Aaron DuChateau', 't t', 't', 'no'),
(210, 'hey hey', '2012-07-17 13:35:37', '359t', '368c', 'gtgt gtgt', 'Barf barf', 't', 'yes'),
(211, 'asdf', '2012-07-17 13:38:50', '359t', '368c', 'gtgt gtgt', 'Barf barf', 't', 'yes'),
(212, 'i know i will check it out', '2012-07-29 16:24:17', '358c', '172t', 'a a', 'Aaron DuChateau', 'c', 'yes'),
(213, 'am i doing squats correctlyu?', '2012-08-07 20:37:10', '358c', '172t', 'a a', 'Aaron DuChateau', 'c', 'yes'),
(214, 'hey just checking', '2012-08-26 12:02:12', '362n', '368c', 'Bob Nutritionist', 'Barf barf', 'n', 'yes'),
(215, 'about what?', '2012-08-26 12:07:10', '368c', '362n', 'Barf barf', 'Bob Nutritionist', 'c', 'yes'),
(216, 'ok', '2012-08-26 12:16:07', '368c', '362n', 'Barf barf', 'Bob Nutritionist', 'c', 'yes'),
(217, 'about the thing', '2012-08-26 12:19:19', '362n', '368c', 'Bob Nutritionist', 'Barf barf', 'n', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `report_diet`
--

CREATE TABLE IF NOT EXISTS `report_diet` (
  `ID_auth_rd` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dtdm_link_rd` varchar(25) NOT NULL DEFAULT '',
  `json_goal_rd` varchar(1000) NOT NULL DEFAULT '',
  `json_actual_rd` varchar(1000) NOT NULL DEFAULT '',
  PRIMARY KEY (`ID_auth_rd`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=181 ;

--
-- Dumping data for table `report_diet`
--

INSERT INTO `report_diet` (`ID_auth_rd`, `dtdm_link_rd`, `json_goal_rd`, `json_actual_rd`) VALUES
(173, '365', '[[2,0,0,0,0],[1,2,3,4,0],[0,0,0,0,0],[0,0,0,0,0],[0,0,0,0,0],[0,0,0,0,0],[0,1,0,0,0],[2,0,0,0,0],[2,0,0,0,0],[1,2,3,4,0],[0,0,0,0,0],[0,0,0,0,0],[0,0,0,0,0],[0,0,0,0,0],[0,1,0,0,0],[2,0,0,0,0],[2,0,0,0,0],[1,2,3,4,0],[0,0,0,0,0],[0,0,0,0,0],[0,0,0,0,0],[0,0,0,0,0],[0,1,0,0,0],[2,0,0,0,0]]', '[[0,0,0,0,0,"no"],["5","5","5","5","0","yes"],["5","5","0","10","0","yes"],["9","0","0","0","0","yes"],["0","0","0","0","0","yes"],["0","0","0","0","0","yes"],["0","1","0","0","0","yes"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],["0","0","0","0","0","yes"],["0","0","0","0","0","yes"],["3","0","0","0","0","yes"],["0","1","0","0","0","yes"],["2","0","0","0","0","yes"],[0,0,0,0,0,"no"],["15","20","3","4","0","yes"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"]]'),
(174, '366', '[[2,0,0,0,0],[1,2,3,4,0],[0,0,0,0,0],[0,0,0,0,0],[0,0,0,0,0],[0,0,0,0,0],[0,1,0,0,0],[2,0,0,0,0],[2,0,0,0,0],[1,2,3,4,0],[0,0,0,0,0],[0,0,0,0,0]]', '[["0","5","0","0","0","yes"],["1","2","3","4","0","yes"],[0,0,0,0,0,"no"],["10","0","0","0","0","yes"],["20","8","0","0","0","yes"],["0","0","0","0","0","yes"],[0,0,0,0,0,"no"],["11","0","10","0","0","yes"],["6","5","0","0","0","yes"],[0,0,0,0,0,"no"],["0","0","0","5","0","yes"],["2","0","0","0","0","yes"]]'),
(175, '369', '[[0,2,0,0,0],[1,2,3,4,0],[0,0,0,0,0],[0,0,0,0,0],[0,0,0,0,0],[0,0,0,0,0],[0,1,0,0,0],[2,0,0,0,0],[0,2,0,0,0],[1,2,3,4,0],[0,0,0,0,0],[0,0,0,0,0],[0,0,0,0,0],[0,0,0,0,0],[0,1,0,0,0],[2,0,0,0,0]]', '[[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"]]'),
(176, '375', '[[0,0,0,0,0],[0,0,0,0,0],[0,0,0,0,0],[0,0,0,0,0],[0,0,0,0,0],[0,0,0,0,0]]', '[[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"]]'),
(177, '377', '[[0,0,0,0,0],[0,0,0,0,0],[0,0,0,0,0],[0,0,0,0,0],[0,0,0,0,0],[0,0,0,0,0],[0,0,0,0,0],[0,0,0,0,0],[0,0,0,0,0]]', '[[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"]]'),
(178, '379', '[[0,2,0,0,0],[1,2,3,4,0],[0,0,0,0,0],[0,0,0,0,0],[0,0,0,0,0],[0,0,0,0,0],[0,1,0,0,0],[2,0,0,0,0],[0,2,0,0,0]]', '[[0,0,0,0,0,"no"],["1","2","3","4","0","yes"],["0","0","0","0","0","yes"],["10","0","0","0","0","yes"],["2","4","0","0","0","yes"],["4","0","0","0","0","yes"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],["0","2","0","0","0","yes"]]'),
(179, '381', '[[0,2,0,0,0],[1,2,3,4,0],[0,0,0,0,0],[0,0,0,0,0],[0,0,0,0,0],[0,0,0,0,0],[0,1,0,0,0],[2,0,0,0,0],[0,2,0,0,0],[1,2,3,4,0],[0,0,0,0,0],[0,0,0,0,0],[0,0,0,0,0],[0,0,0,0,0],[0,1,0,0,0],[2,0,0,0,0],[0,2,0,0,0],[1,2,3,4,0],[0,0,0,0,0],[0,0,0,0,0],[0,0,0,0,0],[0,0,0,0,0],[0,1,0,0,0],[2,0,0,0,0],[0,2,0,0,0],[1,2,3,4,0],[0,0,0,0,0],[0,0,0,0,0],[0,0,0,0,0],[0,0,0,0,0]]', '[[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],["0","0","0","0","0","yes"],[0,0,0,0,0,"no"],["0","1","0","0","0","yes"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],["11","22","3","4","0","yes"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"]]'),
(180, '382', '[[0,2,0,0,0],[1,2,3,4,0],[0,0,0,0,0],[0,0,0,0,0],[0,0,0,0,0],[0,0,0,0,0],[0,1,0,0,0],[2,0,0,0,0],[0,2,0,0,0],[1,2,3,4,0],[0,0,0,0,0]]', '[[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"]]');

-- --------------------------------------------------------

--
-- Table structure for table `report_training`
--

CREATE TABLE IF NOT EXISTS `report_training` (
  `ID_auth_rt` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dtdm_link_rt` varchar(25) NOT NULL DEFAULT '',
  `json_goal_rt` varchar(1000) NOT NULL DEFAULT '',
  `json_actual_rt` varchar(1000) NOT NULL DEFAULT '',
  PRIMARY KEY (`ID_auth_rt`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=185 ;

--
-- Dumping data for table `report_training`
--

INSERT INTO `report_training` (`ID_auth_rt`, `dtdm_link_rt`, `json_goal_rt`, `json_actual_rt`) VALUES
(147, '323', '[["10","7"],["0","0"],["5","10"],["11","7"],["15","12"],["20","17"],["11","10"],["10","7"],["0","0"],["5","10"],["11","7"],["15","12"],["20","17"],["11","10"],["10","7"],["0","0"],["5","10"]]', '[["10","7"],["0","0"],["5","10"],["5","3"],["15","12"],["20","17"],["no","no"],["10","7"],["0","0"],["2","5"],["0","0"],["15","12"],["10","8"],["11","10"],["0","0"],["0","0"],["0","0"]]'),
(148, '324', '[["0","0"],["0","0"],["0","0"]]', '[["0","0"],["0","0"],["0","0"]]'),
(149, '325', '[["0","0"],["0","0"],["0","0"]]', '[["0","0"],["0","0"],["0","0"]]'),
(150, '326', '[["0","0","no"],["0","0","no"],["0","0","no"]]', '[["0","0"],["0","0"],["0","0"]]'),
(151, '327', '[["7","6","no"],["0","0","no"],["7","6","no"],["0","0","no"]]', '[["0","0"],["0","0"],["0","0"],["0","0"]]'),
(152, '328', '[["7","6"],["0","0"],["7","6"],["0","0"],["7","6"]]', '[["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"]]'),
(153, '329', '[["7","6"],["0","0"],["7","6"],["0","0"]]', '[["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"]]'),
(154, '330', '[["7","6"],["0","0"],["7","6"],["0","0"]]', '[["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"]]'),
(155, '331', '[["7","6"],["0","0"],["7","6"],["0","0"]]', '[["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"]]'),
(156, '332', '[["7","6"],["0","0"],["7","6"],["0","0"]]', '[["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"]]'),
(157, '333', '[["7","6"],["0","0"],["7","6"],["0","0"],["7","6"]]', '[["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"]]'),
(158, '334', '[["7","6"],["0","0"],["7","6"],["0","0"],["7","6"]]', '[["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"]]'),
(159, '335', '[["7","6"],["0","0"],["5","10"]]', '[["0","0","no"],["0","0","no"],["0","0","no"]]'),
(160, '336', '[["7","6"],["0","0"],["7","6"],["0","0"],["7","6"]]', '[["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"]]'),
(161, '338', '[["7","6"],["0","0"],["5","10"],["10","7"],["9","4"]]', '[["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"]]'),
(162, '339', '[["7","6"],["0","0"],["5","10"],["10","7"],["9","4"],["0","0"],["0","0"]]', '[["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"]]'),
(163, '340', '[["7","6"],["5","10"],["10","7"],["9","4"],["0","0"],["0","0"],["0","0"]]', '[["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"]]'),
(164, '341', '[["7","6"],["5","10"],["10","7"],["9","4"],["0","0"],["0","0"],["0","0"]]', '[["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"]]'),
(165, '342', '[["7","6"],["5","10"],["10","7"],["9","4"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["7","6"]]', '[["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"]]'),
(166, '343', '[["7","6"],["5","10"],["10","7"],["9","4"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"]]', '[["7","6","yes"],["2","5","yes"],["0","0","yes"],["4","2","yes"],["9","5","yes"],["8","9","yes"],["0","0","no"],["0","0","no"],["0","0","no"]]'),
(167, '344', '[["7","6"],["5","10"],["10","7"],["9","4"],["9","5"],["8","9"],["0","0"],["0","0"],["8","5"],["4","30"],["7","6"],["5","10"],["10","7"]]', '[["3","3","yes"],["5","10","yes"],["10","7","yes"],["9","4","yes"],["4","2","yes"],["8","9","yes"],["0","0","no"],["0","0","no"],["8","5","yes"],["4","30","yes"],["7","6","yes"],["0","0","no"],["0","0","no"]]'),
(168, '345', '[["7","6"],["5","10"],["10","7"],["9","4"],["9","5"],["8","9"],["0","0"],["0","0"],["8","5"],["4","30"],["7","6"],["5","10"],["10","7"],["9","4"],["9","5"],["8","9"],["0","0"],["0","0"],["8","5"],["4","30"],["7","6"],["5","10"]]', '[["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"]]'),
(169, '346', '[["7","6"],["5","10"],["10","7"]]', '[["0","0","no"],["0","0","no"],["0","0","no"]]'),
(170, '347', '[["10","7"],["0","0"],["5","10"],["11","7"],["15","12"],["20","17"],["11","10"],["10","7"],["0","0"],["5","10"],["11","7"],["15","12"],["20","17"],["11","10"],["10","7"],["0","0"]]', '[["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"]]'),
(171, '348', '[["10","7"],["0","0"],["5","10"],["11","7"],["15","12"],["20","17"],["11","10"],["10","7"],["0","0"],["5","10"],["11","7"],["15","12"],["20","17"],["11","10"],["10","7"],["0","0"],["5","10"],["11","7"],["15","12"],["20","17"],["11","10"],["10","7"],["0","0"],["5","10"],["11","7"],["15","12"],["20","17"],["11","10"]]', '[["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["7","6","yes"],["0","0","no"],["0","0","no"],["10","7","yes"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["10","8","yes"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["15","12","yes"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"]]'),
(172, '349', '[["10","7"],["0","0"],["5","10"],["11","7"],["15","12"],["20","17"],["11","10"],["10","7"],["0","0"],["5","10"],["11","7"],["15","12"],["20","17"],["11","10"],["10","7"],["0","0"],["5","10"],["11","7"]]', '[["10","7","yes"],["0","0","no"],["5","10","yes"],["11","7","yes"],["7","6","yes"],["20","17","yes"],["11","10","yes"],["10","7","yes"],["0","0","no"],["5","10","yes"],["5","3","yes"],["15","12","yes"],["10","8","yes"],["11","10","yes"],["5","3","yes"],["0","0","no"],["2","5","yes"],["0","0","no"]]'),
(173, '367', '[["10","7"],["0","0"],["5","10"],["11","7"]]', '[["10","7","yes"],["0","0","no"],["2","5","yes"],["11","7","yes"]]'),
(174, '368', '[["10","7"],["0","0"],["5","10"],["11","7"]]', '[["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"]]'),
(175, '370', '[["10","7"],["0","0"],["5","10"],["11","7"],["15","12"],["20","17"],["11","10"],["10","7"],["0","0"]]', '[["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"]]'),
(176, '371', '[["10","7"],["0","0"],["5","10"],["11","7"]]', '[["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"]]'),
(177, '372', '[["10","7"],["0","0"]]', '[["0","0","no"],["0","0","no"]]'),
(178, '373', '[["10","7"],["0","0"],["5","10"],["11","7"],["15","12"],["20","17"],["11","10"],["10","7"],["0","0"],["5","10"],["11","7"],["15","12"],["20","17"],["11","10"],["10","7"],["0","0"],["5","10"],["11","7"],["15","12"]]', '[["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["5","3","yes"],["0","0","no"]]'),
(179, '374', '[["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"]]', '[["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"]]'),
(180, '376', '[["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"]]', '[["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"]]'),
(181, '378', '[["10","7"],["0","0"],["5","10"],["11","7"]]', '[["5","3","yes"],["0","0","no"],["5","10","yes"],["5","3","yes"]]'),
(182, '380', '[["10","7"],["0","0"],["5","10"],["11","7"],["15","12"],["20","17"],["11","10"],["10","7"],["0","0"],["5","10"],["11","7"],["15","12"],["20","17"],["11","10"],["10","7"],["0","0"],["5","10"],["11","7"],["15","12"],["20","17"],["11","10"],["10","7"],["0","0"],["5","10"]]', '[["10","7","yes"],["0","0","no"],["0","0","no"],["0","0","no"],["15","12","yes"],["0","0","no"],["11","10","yes"],["10","7","yes"],["0","0","no"],["0","0","no"],["0","0","no"],["7","6","yes"],["0","0","no"],["11","10","yes"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"]]'),
(183, '383', '[["20","15"],["0","0"],["0","0"],["20","15"],["0","0"],["0","0"],["20","15"],["0","0"],["0","0"],["20","15"],["0","0"],["0","0"],["20","15"],["0","0"],["0","0"],["20","15"],["0","0"],["0","0"],["20","15"],["0","0"],["0","0"],["20","15"],["0","0"],["0","0"],["20","15"],["0","0"]]', '[["20","15","yes"],["0","0","yes"],["0","0","yes"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["20","15","yes"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"]]'),
(184, '384', '[["10","10"],["10","10"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["10","10"],["10","10"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"]]', '[["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"]]');

-- --------------------------------------------------------

--
-- Table structure for table `training_programs_t`
--

CREATE TABLE IF NOT EXISTS `training_programs_t` (
  `ID_auth_tp` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name_tp` varchar(500) NOT NULL DEFAULT '',
  `days_tp` varchar(25) NOT NULL DEFAULT '',
  `description_tp` varchar(10000) NOT NULL DEFAULT '',
  `owner_tp` varchar(50) NOT NULL DEFAULT '',
  `live_tp` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'yes',
  PRIMARY KEY (`ID_auth_tp`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=390 ;

--
-- Dumping data for table `training_programs_t`
--

INSERT INTO `training_programs_t` (`ID_auth_tp`, `name_tp`, `days_tp`, `description_tp`, `owner_tp`, `live_tp`) VALUES
(347, 'loosing weight and kicking ass, and taking names', '7', 'a very long description	 									 									 									 						', '172', 'yes'),
(348, 'Build Muscle in ten days', '10', 'build alot of muscle in a very short amount of time', '172', 'yes'),
(353, 'asd', '1', '', '172', 'yes'),
(370, 'calfs, abs, and neck', '3', ';lkjadsf as;ldkjf a;lksdj f;alkdsj f;laksjd f;alskjd f;laskdj f', '172', 'yes'),
(369, 'Build Biceps, Traps, and Lats', '3', ';alskjdf ;aslkdjf;l akdsjf ;laksdj f;laksjdf;l akjsdf;lkajsd; lfkjds', '172', 'yes'),
(367, ';lk', '9', ';lkj', '172', 'yes'),
(368, 'ultimate muscle mass program', '9', 'kjh', '172', 'yes'),
(371, 'new training program test loop', '4', 'asdf', '172', 'yes'),
(372, 'training program test again', '4', 'asdf', '172', 'yes'),
(373, 'asdf', '3', 'asdf', '172', 'yes'),
(374, 'asdf', '4', 'zsdf', '172', 'yes'),
(375, 'tested', '3', 'asdf', '172', 'yes'),
(376, 'asdf', '3', 'asdf', '172', 'yes'),
(377, 'asdf', '3', 'asdf', '172', 'yes'),
(378, 'accurate test for insert', '3', 'asdf', '172', 'yes'),
(379, 'accurate take 2', '5', 'asdf', '172', 'yes'),
(380, 'accurate take 3', '3', 'asdf', '172', 'no'),
(381, 'accurate take 4', '6', 'asdf			 									 									 									 									 									 									 									 									 									 									 									 									 						', '172', 'yes'),
(382, 'another program to test', '10', 'as a;lskd jfalksdj flksdj falksdjf al;skdj fal;ksdj f;aklsdj f;alskdfj ;alskdj falksdj fal;kdj f;aklsjd fl;aksjd f;laksjd f;lkajs df as a;lskd jfalksdj flksdj falksdjf al;skdj fal;ksdj f;aklsdj f;alskdfj ;alskdj falksdj fal;kdj f;aklsjd fl;aksjd f;laksjd f;lkajs df\nas a;lskd jfalksdj flksdj falksdjf al;skdj fal;ksdj f;aklsdj f;alskdfj ;alskdj falksdj fal;kdj f;aklsjd fl;aksjd f;laksjd f;lkajs dfas a;lskd jfalksdj flksdj falksdjf al;skdj fal;ksdj f;aklsdj f;alskdfj ;alskdj falksdj fal;kdj f;aklsjd fl;aksjd f;laksjd f;lkajs df\n\nas a;lskd jfalksdj flksdj falksdjf al;skdj fal;ksdj f;aklsdj f;alskdfj ;alskdj falksdj fal;kdj f;aklsjd fl;aksjd f;laksjd f;lkajs df', '172', 'yes'),
(383, 'test 7', '7', 'asdfgsdfg sdfg sdfg sdfg sdf gsdf', '172', 'yes'),
(384, 'my new training program', '3', 'asdf', '359', 'yes'),
(385, 'awesome new program', '3', 'asdf', '359', 'yes'),
(386, 'another great program', '4', 'asdf', '359', 'yes'),
(387, 'new training program', '12', 'asdfa sdf asdf asdf asd f', '172', 'yes'),
(388, 'my ne3w trainging program', '3', 'asdfasdf', '362', 'yes'),
(389, 'Squats and Curls', '10', 'asdf', '360', 'yes');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
