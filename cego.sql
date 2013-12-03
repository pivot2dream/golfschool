-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 10, 2012 at 09:52 PM
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
  `god_paid_a` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'yes',
  `address_shipping_a` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `phone_a` varchar(50) NOT NULL DEFAULT '0',
  `address_billing_a` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `zip_a` varchar(50) NOT NULL DEFAULT '97405',
  `gender_a` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `notes_a` varchar(10000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID_auth_a`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=377 ;

--
-- Dumping data for table `accounts_a`
--

INSERT INTO `accounts_a` (`ID_auth_a`, `Password_auth_a`, `Username_auth_a`, `Date_a`, `full_name_a`, `last_name_a`, `first_name_a`, `email_name_a`, `title_a`, `authority_a`, `paid_a`, `god_paid_a`, `address_shipping_a`, `phone_a`, `address_billing_a`, `zip_a`, `gender_a`, `notes_a`) VALUES
(376, 'rong', '', '2012-07-23 20:19:14', 'ron gibson', 'gibson', 'ron', 'ronandshellyann@gmail.com', '2', '376', 'yes', 'yes', '123 address', '555-555-5555', '0', '97405', 'male', 'asdf');

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
  `god_paid_c` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'yes',
  `address_shipping_c` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `phone_c` varchar(50) NOT NULL DEFAULT '0',
  `address_billing_c` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `zip_c` varchar(50) NOT NULL DEFAULT '97405',
  `gender_c` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `notes_c` varchar(10000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `location_authority_c` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `authority_c` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID_auth_c`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=388 ;

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
(200, 'goducks1234', 'michelec', '2012-01-31 23:47:24', '', 'Cordero', 'Michele', 'mcordero@uoregon.edu', 'yes', 'yes', '123 any st  eugene OR 97402', '555-555-5555', '123 any st  eugene OR 97402', 'no', '', '', '', ''),
(201, 'goducks1234', 'kevinc', '2012-01-31 23:56:14', '', 'Corbin', 'Kevin', 'kcorbin@uoregon.edu', 'yes', 'yes', '123 any st.  eugene OR 97402', '555-555-5555', '123 any st  eugene OR 97402', 'no', '', '', '', ''),
(202, 'jcwsfw2012', 'joewalterbach', '2012-02-04 16:35:37', '', 'Walterbach', 'Joseph', 'jwalterbach@yahoo.com', 'no***2012-04-04 07:36:11', 'yes', '8 Bartok Place  Lake Oswego OR 97035', '503-636-0586', '8 Bartok Place  Lake Oswego OR 97035', '9', '', '', '', ''),
(203, 'bilbobaggins', 'bill', '2012-02-07 00:31:04', '', 'Boyington', 'Bill', 'billboyington@gmail.com', 'yes', 'yes', '123 any st  EUGENE OR 97401', '555-555-5555', '123 any st  eugene OR 97401', 'no', '', '', '', ''),
(204, 'test123', 'jamesmckee', '2012-02-07 21:58:34', '', 'McKee', 'James', 'scottmckee@ymail.com', 'yes', 'yes', '1101 16th Street  Springfield AK 97477', '541-554-9141', '1101 16th Street  Springfield AK 97477', 'no', '', '', '', ''),
(205, 'infra1800', 'testaoth', '2012-02-07 22:36:44', '', 'Affairlast', 'Affairfirst', 'aaron@geniusmediasolutions.com', 'yes', 'yes', 'null', '888-555-5555', 'null', 'no', '', '', '', ''),
(206, 'testst', 'affaitester3', '2012-02-07 23:04:36', '', 'test', 'test', 'aaron@geniusmediasolutions.com', 'yes', 'yes', 'null', '555-555-5555', 'null', 'no', '', '', '', ''),
(207, 'asdf', 'affairtest', '2012-02-07 23:05:32', '', 'asdf', 'aasdf', 'aaron@geniusmediasolutions.com', 'yes', 'yes', 'null', '555-555-5555', 'null', 'no', '', '', '', ''),
(208, 'asdf', 'affairtest', '2012-02-07 23:05:49', '', 'asdf', 'aasdf', 'aaron@geniusmediasolutions.com', 'yes', 'yes', 'null', '555-555-5555', 'null', 'no', '', '', '', ''),
(209, 'asdf', 'testaoth', '2012-02-07 23:08:07', '', 'asdf', 'asdf', 'aaron@geniusmediasolutions.com', 'yes', 'yes', 'null', '555-555-5555', 'null', 'no', '', '', '', ''),
(210, 'barf54', 'testaoth555', '2012-02-07 23:19:28', '', 'Miller', 'Geoff', 'chateauconcept@gmail.com', 'yes', 'yes', 'asdf asdf asdf AK asdf', '555-555-5555', 'asdf asdf asdf AK asdf', '9', '', '', '', ''),
(211, 'nuff', 'stephen', '2012-02-08 07:30:55', '', 'Alison', 'Stephen', 'sdalison@me.com', 'no***2012-02-09 11:57:31', 'yes', '450 County Club Rd Suite 200 Eugene OR 97401', '541-225-5441', '450 country club rd  euegne OR 97401', '108', '', '', '', ''),
(231, 'lei7lan7', 'NancyGolden', '2012-03-01 00:32:42', '', 'Golden', 'Nancy', 'nancy.golden@springfield.k12.or.us', 'yes', 'yes', 'null', '541-914-0686', 'null', 'no', '', '', '', ''),
(232, 'Puddles2015', 'LauraRamirez', '2012-03-01 01:24:19', '', 'Ramirez', 'Laura', 'lyr@uoregon.edu', 'yes', 'yes', 'null', '503-400-9968', 'null', 'no', '', '', '', ''),
(233, 'Senior@12', 'Teniola', '2012-03-01 03:26:40', '', 'Komolafe', 'Teniola', 'Teniolak_91@yahoo.com', 'yes', 'yes', 'null', '503-853-6431', 'null', 'no', '', '', '', ''),
(234, 'westview23', 'gabekrebs', '2012-03-01 03:33:31', '', 'Krebs', 'Gabe', 'gabekrebs@gmail.com', 'yes', 'yes', 'null', '503-737-5487', 'null', 'no', '', '', '', ''),
(235, 'itisjuan213', 'JohnSchultz', '2012-03-01 16:09:02', '', 'Schultz', 'John', 'j.cameron.schultz@gmail.com', 'yes', 'yes', 'null', '303-854-7479', 'null', 'no', '', '', '', ''),
(236, 'cricket', 'strent', '2012-03-01 16:29:59', '', 'trent', 'scott', 'scott@obbsystems.com', 'yes', 'yes', '3025 Gloryview Road, Frisco, Texas  75033', '214-202-7325', 'null', 'no', '', '', '', ''),
(237, 'sisa_achik06', 'ErikaLincango', '2012-03-01 16:33:49', '', 'Lincango', 'Erika', 'erika_lincango@yahoo.es', 'yes', 'yes', 'null', '541-543-1206', 'null', 'no', '', '', '', ''),
(238, 'usda-fs-marge', 'Marge', '2012-03-01 17:25:12', '', 'Gonzales', 'Margaret', 'marge98387@hotmail.com', 'yes', 'yes', 'null', '253-640-0836', 'null', 'no', '', '', '', ''),
(239, 'Economic01', 'Myersoregon', '2012-03-01 17:44:28', '', 'Myers', 'Cheryl', 'Cheryl.L.myers@state.or.us', 'yes', 'yes', 'null', '5039866522', 'Director, Economic & Business Equity, Governor\\''s Office, 255 Capitol Street, NE ~ Suite 126, Salem, OR  97301', 'no', '', '', '', ''),
(240, 'rr123456', 'RyanRamirez', '2012-03-01 18:46:39', '', 'Ramirez', 'Ryan', 'ryanjramirez@gmail.com', 'yes', 'yes', 'null', '916-521-4646', 'null', 'no', '', '', '', ''),
(241, 'shicheii1', 'TylerJackson', '2012-03-01 19:11:28', '', 'Jackson', 'Tyler', 'tyjacks12@gmail.com', 'yes', 'yes', 'null', '928-814-6238', 'null', 'no', '', '', '', ''),
(242, '4t33l3r4', 'aledesma', '2012-03-01 19:25:24', '', 'Ledesma', 'Alfonso', 'aledesma@uoregon.edu', 'yes', 'yes', 'null', '541-490-1536', 'null', 'no', '', '', '', ''),
(243, '204517', 'AnkitPalan', '2012-03-01 19:57:45', '', 'Palan', 'Ankit', 'palananks@gmail.com', 'yes', 'yes', 'null', '973-452-1150', 'null', 'no', '', '', '', ''),
(328, '', '', '2012-04-18 11:04:30', '', '', '', '', 'yes', 'yes', '', '', '', '', '', '', '', ''),
(329, 'blue123', 'blue', '2012-04-25 20:39:12', '', 'Protandim', 'Blue', 'blue@elamenterprises.com', 'yes', 'yes', 'null', '555-555-5555', 'null', 'no', '', '', '', ''),
(245, 'Caligirl6', 'AlexHanson', '2012-03-01 20:05:38', '', 'Hanson', 'Alex', 'al.hanson.15@gmail.com', 'yes', 'yes', 'null', '503-764-8576', 'null', 'no', '', '', '', ''),
(246, 'rs7795', 'ryanswift', '2012-03-01 20:13:05', '', 'Swift ', 'Ryan ', 'ryans@uoregon.edu', 'yes', 'yes', 'null', '503-860-9839', 'null', 'no', '', '', '', ''),
(247, 'stealth', 'AndrewCantarero', '2012-03-01 20:14:05', '', 'Cantarero', 'Andrew', 'Cantarer@uoregon.edu', 'yes', 'yes', 'null', '909-261-2491', 'null', 'no', '', '', '', ''),
(248, 'BIgice24!!', 'TerrelJones', '2012-03-01 20:16:51', '', 'Jones', 'Terrel', 'terreljonesjr@me.com', 'yes', 'yes', 'null', '951-691-0151', 'null', 'no', '', '', '', ''),
(249, '623262sc.', 'sergiocamposramirez', '2012-03-01 21:06:10', '', 'Campos Ramirez', 'Sergio', 'sergiocamposramirez@gmail.com', 'yes', 'yes', 'null', '503-580-0665', 'null', 'no', '', '', '', ''),
(250, 'nohomo32', 'mtyner503', '2012-03-01 23:18:40', '', 'Tyner', 'Matthew', 'mtyner@uoregon.edu', 'yes', 'yes', 'null', '503-810-2897', 'null', 'no', '', '', '', ''),
(251, 'Edward1991', 'Baniyomansaray', '2012-03-01 23:19:29', '', 'Mansaray', 'Baniyo', 'Baniyomansaray1@hotmail.com', 'yes', 'yes', 'null', '971-344-9790', 'null', 'no', '', '', '', ''),
(252, 'senior14', 'mjohnson', '2012-03-01 23:19:44', '', 'johnson', 'marco', 'marco.q.johnson@gmail.com', 'yes', 'yes', 'null', '214-682-7635', 'null', 'no', '', '', '', ''),
(253, 'Flowers33.', 'Flowers33.', '2012-03-01 23:22:08', '', 'Buckley', 'Rachel', 'Rpb@uoregon.edu', 'yes', 'yes', 'null', '503-984-3538', 'null', 'no', '', '', '', ''),
(254, 'Marshall82', 'ChristianLopez', '2012-03-01 23:42:32', '', 'Lopez', 'Christian', 'clopez@uoregon.edu', 'yes', 'yes', 'null', '503-327-1834', 'null', 'no', '', '', '', ''),
(255, '013256Lb', 'LauraBrunner', '2012-03-01 23:48:28', '', 'Brunner', 'Laura', 'laura.brunner@ey.com', 'yes', 'yes', 'null', '206-654-7647', 'null', 'no', '', '', '', ''),
(256, 'smoothies33', 'alyssarod58', '2012-03-02 00:18:54', '', 'Rodriguez', 'Alyssa', 'alyssa.mrod58@gmail.com', 'yes', 'yes', 'null', '530-383-5936', 'null', 'no', '', '', '', ''),
(257, 'kisa1027', 'CrystalZhao', '2012-03-02 00:44:50', '', 'Zhao', 'Yue', 'crystalyuezhao@gmail.com', 'yes', 'yes', '1665E 27th Ave Eugene, OR, 97403', '541-743-3539', '1665E 27th Ave Eugene, OR, 97403', 'no', '', '', '', ''),
(258, 'meliskoo.', 'dsuh', '2012-03-02 01:01:14', '', 'Suh', 'Daniel', 'dsuh@uoregon.edu', 'yes', 'yes', 'null', '--', 'null', 'no', '', '', '', ''),
(259, '972291992', 'armon', '2012-03-02 01:10:35', '', 'Petrossian', 'Armon', 'armon@uoregon.edu', 'yes', 'yes', 'null', '503-754-1919', 'null', 'no', '', '', '', ''),
(260, 'bankai1214', 'kjing', '2012-03-02 01:58:23', '', 'Jing', 'Keith', 'kjing@uoregon.edu', 'yes', 'yes', 'null', '503-913-4081', 'null', 'no', '', '', '', ''),
(261, 'Eazlife101', 'MervynGarcia', '2012-03-02 02:07:46', '', 'Garcia', 'Mervyn', 'mervyn@uoregon.edu', 'yes', 'yes', 'null', '--', 'null', 'no', '', '', '', ''),
(262, 'Wasntme1969', 'Jeanna', '2012-03-02 03:21:35', '', 'Ramos', 'Jeanna', 'Jeanna.Ramos@gmail.com', 'yes', 'yes', 'null', '503-881-4984', 'null', 'no', '', '', '', ''),
(263, 'bjM1ej19', 'MarinaHansen', '2012-03-02 03:38:45', '', 'Hansen', 'Marina', 'hansenm19@gmail.com', 'yes', 'yes', 'null', '916-521-0496', 'null', 'no', '', '', '', ''),
(264, 'bjM1ej19', 'HansenMarina', '2012-03-02 03:42:55', '', 'Hansen', 'Marina', 'hansenm19@gmail.com', 'yes', 'yes', 'null', '916-521-0496', 'null', 'no', '', '', '', ''),
(265, 'salut2591', 'camposchris', '2012-03-02 03:58:52', '', 'Campos', 'Christian ', 'elmoreno.91@hotmail.com', 'yes', 'yes', 'null', '503-717-2490', 'null', 'no', '', '', '', ''),
(266, 'mikejones1', 'ryanmendoza', '2012-03-02 04:01:03', '', 'Mendoza', 'Ryan', 'ryanmendoza23@yahoo.com', 'yes', 'yes', 'null', '619-228-3132', 'null', 'no', '', '', '', ''),
(267, 'airjays23', 'dominicmanyrath', '2012-03-02 06:26:07', '', 'manyrath', 'dominic', 'Dominicmanyrath@yahoo.com', 'yes', 'yes', 'null', '971-221-6793', 'null', 'no', '', '', '', ''),
(268, 'pokemon', 'jarrodmcclung', '2012-03-02 06:39:19', '', 'McClung', 'Jarrod', 'jmcclung@uoregon.edu', 'yes', 'yes', 'null', '509-846-3252', 'null', 'no', '', '', '', ''),
(269, 'jonathanthomas8', 'jonathanthomas', '2012-03-02 07:09:26', '', 'Thomas', 'Jonathan', 'thomas8@uoregon.edu', 'yes', 'yes', 'null', '541-517-4125', 'null', 'no', '', '', '', ''),
(270, 'soccer1', 'JoeJackson', '2012-03-02 07:52:15', '', 'Jackson', 'Joe', 'jcj@uoregon.edu', 'yes', 'yes', 'null', '510-478-7212', 'null', 'no', '', '', '', ''),
(271, 'boaz357', 'KennyBranch', '2012-03-02 14:49:04', '', 'Branch', 'Kenny', 'kbranch75@gmail.com', 'yes', 'yes', 'null', '503-269-2524', 'null', 'no', '', '', '', ''),
(272, 'CVALCO', 'SueHarshbarger', '2012-03-02 16:50:10', '', 'Harshbarger', 'Sue', 'Sue@EugeneCascadesCoast.org', 'yes', 'yes', 'null', '541-743-8755', 'null', 'no', '', '', '', ''),
(273, 'Cltzy123', 'CiarraBolden', '2012-03-02 17:07:19', '', 'Bolden', 'Ciarra', 'Cbolden@uoregon.edu', 'yes', 'yes', 'null', '541-485-0945', 'null', 'no', '', '', '', ''),
(274, 'jiling12', 'ksrice', '2012-03-02 18:27:16', '', 'Rice', 'Kevin', 'ricesteeler@yahoo.com', 'yes', 'yes', 'null', '541-513-1315', 'null', 'no', '', '', '', ''),
(275, '1mwahahah', 'jesiwu', '2012-03-02 18:39:55', '', 'Wu', 'Jesi', 'jesiwu@uoregon.edu', 'yes', 'yes', 'null', '503-679-9769', 'null', 'no', '', '', '', ''),
(276, 'bd051392', 'LaurenWilson', '2012-03-02 19:22:00', '', 'Wilson', 'Lauren', 'lwilson@uoregon.edu', 'yes', 'yes', 'null', '623-703-8912', 'null', 'no', '', '', '', ''),
(277, 'blackdog512', 'afrench', '2012-03-02 19:24:33', '', 'French', 'Aaron', 'aaron.french512@gmail.com', 'yes', 'yes', 'null', '714-351-7416', 'null', 'no', '', '', '', ''),
(278, 'woohoo1', 'NickBarton', '2012-03-02 19:28:03', '', 'Barton', 'Nicholas', 'nicholasbarton5@aim.com', 'yes', 'yes', 'null', '562-237-1584', 'null', 'no', '', '', '', ''),
(279, 'gatekeeper', 'gatekeeper', '2012-03-02 19:49:42', '', 'Vashaw', 'Rick', 'workwithrickvasha@gmail.com', 'yes', 'yes', 'null', '971-506-7000', 'null', 'no', '', '', '', ''),
(280, 'julius1121', 'NickWinkleblack', '2012-03-02 19:58:59', '', 'Winkleblack', 'Nick', 'nick@outoftheboxonline.com', 'yes', 'yes', 'null', '503-347-9207', 'null', 'no', '', '', '', ''),
(281, 'garbage', 'KimSchultz', '2012-03-02 22:30:37', '', 'Schultz', 'Kim', 'schultz@uoregon.edu', 'yes', 'yes', 'null', '503-708-8778', 'null', 'no', '', '', '', ''),
(282, 'xavi666', 'chriswillgray', '2012-03-03 05:43:44', '', 'Gray', 'Christopher', 'chriswillgray@gmail.com', 'yes', 'yes', 'null', '630-301-4241', 'null', 'no', '', '', '', ''),
(283, 'mitzi13', 'Mitzi_Ing', '2012-03-03 08:31:48', '', 'Ing', 'Mitzi', 'ing@uoregon.edu', 'yes', 'yes', 'null', '808-284-1927', 'null', 'no', '', '', '', ''),
(284, 'Elt#3r', 'JosephHill', '2012-03-03 10:46:23', '', 'Hill', 'Joseph', 'jrodhill25@yahoo.com', 'yes', 'yes', 'null', '916-687-8145', 'null', 'no', '', '', '', ''),
(285, 'rcb081066', 'RonBramhall', '2012-03-03 15:36:19', '', 'Bramhall', 'Ron', 'rcbramhall@gmail.com', 'yes', 'yes', 'null', '541-953-4973', 'null', 'no', '', '', '', ''),
(286, 'paris95', 'dmboush', '2012-03-03 16:41:47', '', 'Boush', 'David', 'dmboush@uoregon.edu', 'yes', 'yes', 'null', '541-913-8637', 'null', 'no', '', '', '', ''),
(287, 'Realtv01', 'Sadie', '2012-03-03 16:57:28', '', 'Dressekie', 'Sadie', 'sadie_dressekie@comcast.net', 'yes', 'yes', 'null', '541-434-7028', 'null', 'no', '', '', '', ''),
(288, 'alaniz11', 'RolandoRodriguez', '2012-03-03 17:01:05', '', 'Rodriguez', 'Rolando', 'rorodrig@aerotek.com', 'yes', 'yes', 'null', '509-989-3247', 'null', 'no', '', '', '', ''),
(289, 'safec010', 'LennyPichette', '2012-03-03 17:02:39', '', 'Pichette', 'Lenny', 'lpichett@aerotek.com', 'yes', 'yes', 'null', '503-737-5841', 'null', 'no', '', '', '', ''),
(290, 'nedco345', 'AbigailOA', '2012-03-03 17:10:27', '', 'Ofori-Amoah', 'Abigail', 'abigail@nedcocdc.org', 'yes', 'yes', 'null', '715-497-3109', 'null', 'no', '', '', '', ''),
(291, 'elect2012', 'JIManningJr', '2012-03-03 17:10:39', '', 'Manning Jr', 'James I', 'manningstl@gmail.com', 'yes', 'yes', 'null', '541-653-8604', 'null', 'no', '', '', '', ''),
(292, 'ducks2343', 'salihwaritu', '2012-03-03 17:11:24', '', 'waritu', 'salih', 'swaritu@uoregon.edu', 'yes', 'yes', 'null', '503-415-1415', 'null', 'no', '', '', '', ''),
(293, 'ilovejunebug', 'Lawanda', '2012-03-03 17:12:55', '', 'Manning', 'Lawanda J.', 'obba.ljmanningkc@gmail.com', 'yes', 'yes', 'null', '541-653-8604', 'null', 'no', '', '', '', ''),
(294, 'clawww12', 'clarence', '2012-03-03 18:12:35', '', 'williams', 'clarence', 'clarencewj2000@gmail.com', 'yes', 'yes', 'null', '541-954-8423', 'null', 'no', '', '', '', ''),
(295, 'rob', 'yvonne', '2012-03-03 18:15:16', '', 'Stubbs', 'Yvonne', 'yvonnestubbs@comcast.net', 'yes', 'yes', 'null', '541-461-2080', 'null', 'no', '', '', '', ''),
(296, 'greg', 'Merelle', '2012-03-03 19:39:24', '', 'Rodrigo', 'Merelle ', 'merelle.rodrigo@sympatico.ca', 'yes', 'yes', 'null', '519-883-1663', 'null', 'no', '', '', '', ''),
(297, 'eugene', 'Janis', '2012-03-03 19:45:17', '', 'Ross', 'Janis', 'janis@eugenecascadescoast.org', 'yes', 'yes', 'null', '541-743-8753', 'null', 'no', '', '', '', ''),
(298, 'bearcat', 'bearcat', '2012-03-03 19:50:39', '', 'Hale', 'Donnie', 'dhale@uoregon.edu', 'yes', 'yes', 'null', '541-346-8186', 'null', 'no', '', '', '', ''),
(299, '102012', 'kluv', '2012-03-03 23:00:27', '', 'Luvert', 'Kenya', 'kenya.n.luvert@ci.eugene.or.us', 'yes', 'yes', 'null', '720-323-7283', 'null', 'no', '', '', '', ''),
(330, 'colt123', 'colt', '2012-04-25 20:40:09', '', '...', 'Colt', 'colt@elamenterprises.com', 'yes', 'yes', 'null', '555-555-5555', 'null', 'no', '', '', '', ''),
(301, 'shownuff', 'alison', '2012-03-04 13:21:07', '', 'alison', 'stephen', 'sdalison@me.com', 'yes', 'yes', 'null', '541-342-3433', 'null', 'no', '', '', '', ''),
(302, 'temp123', 'matt', '2012-03-07 19:54:18', '', 'Powell', 'Matt', 'mattpowell@windermere.com', 'yes', 'yes', 'null', '541-484-2022', 'null', 'no', '', '', '', ''),
(303, '', '', '2012-03-08 05:43:38', '', '', '', '', 'yes', 'yes', '', '', '', '', '', '', '', ''),
(304, 'espana0322', 'mariahscreations', '2012-03-09 01:05:22', '', 'Richards', 'Mariah', 'mariah.richards@yahoo.com', 'yes', 'yes', '3930 Accent Dr  2427 Dallas TX 75287', '503-484-5466', '3930 Accent Dr  2427 Dallas TX 75287', '108', '', '', '', ''),
(305, 'javadog', 'todd', '2012-03-12 21:48:21', '', 'Wylie', 'Todd', 'tgwylie@gmail.com', 'yes', 'yes', 'null', '541-554-2504', 'null', 'no', '', '', '', ''),
(306, 'skibummer', 'kevin', '2012-03-12 22:17:05', '', 'Pickett', 'Kevin', 'oregonskibum@gmail.com', 'yes', 'yes', 'null', '541-654-3339', 'null', 'no', '', '', '', ''),
(309, 'nirajhsneha', 'Sneha', '2012-03-21 14:04:07', '', 'Sneha', 'Gookool', 'snipspinks@gmail.com', 'yes', 'yes', 'null', '230-744-6438', 'null', 'no', '', '', '', ''),
(312, 'Kmqkmq12', 'KristinQuick', '2012-04-03 16:18:23', '', 'Quick', 'Kristin', 'kquick@westerntitle.com', 'yes', 'yes', 'null', '541-731-7939', 'null', 'no', '', '', '', ''),
(313, 'tonito833', 'atlas', '2012-04-03 16:24:17', '', 'pena', 'marco ', 'info@eugenecleaningservice.com', 'yes', 'yes', 'null', '541-514-5754', 'null', 'no', '', '', '', ''),
(314, 'RickS', 'RickScarbrough', '2012-04-03 16:25:43', '', 'Scarbrough', 'Rick', 'Rick@evergreenlandtitle.com', 'yes', 'yes', 'null', '541-968-1522', 'null', 'no', '', '', '', ''),
(315, 'groupmation', 'mwalston', '2012-04-03 16:28:39', '', 'Walston', 'Mary', 'mwalston2012@gmail.com', 'yes', 'yes', 'null', '541-912-5260', 'null', 'no', '', '', '', ''),
(316, 'Surfing222', 'ChrisN', '2012-04-03 16:29:38', '', 'Nystrom', 'Chris', 'Cnystrom@kernuttstokes.com', 'yes', 'yes', 'null', '541-321-9060', 'null', 'no', '', '', '', ''),
(317, 'Row2Seat', 'StephanieB', '2012-04-03 16:31:29', '', 'Brathwaite', 'Stephanie', 'Stephanieb@eugenechamber.com', 'yes', 'yes', 'null', '541-515-9800', 'null', 'no', '', '', '', ''),
(318, 'asdf', 'deleteme', '2012-04-03 17:43:00', '', 'DuChateau', 'Aaron', 'godsendgeoff@gmail.com', 'yes', 'yes', 'null', '541-653-0973', 'null', 'no', '', '', '', ''),
(319, 'test', 'test1234', '2012-04-03 17:58:38', '', 'test', 'tst', 'test@gmmtest.com', 'yes', 'yes', 'null', '987-987-9870', 'null', 'no', '', '', '', ''),
(320, 'Welcome1', 'Heather', '2012-04-03 20:13:33', '', 'McGuire', 'Heather', 'hmcguire@hgispringfield.com', 'yes', 'yes', 'null', '541-515-9913', 'null', 'no', '', '', '', ''),
(321, 'carson', 'timhill', '2012-04-03 20:29:06', '', 'Hill', 'Tim', 'hillta@wcb.com', 'yes', 'yes', 'null', '541-953-4117', 'null', 'no', '', '', '', ''),
(386, 'jordang', '', '2012-08-06 05:20:36', 'Jordan Gibson', 'Gibson', 'Jordan', 'jgibson@gmail.com', 'yes', 'yes', '', '', '0', '', '', '', '164', '376'),
(385, 'shellyanng', '', '2012-07-30 22:22:13', 'Shellyann Gibson', 'Gibson', 'Shellyann', 'sgibson@gmail.com', 'yes', 'yes', '', '5551212', '0', '', 'female', '', '164', '376'),
(384, 'rong', '', '2012-07-27 23:10:41', 'Ron G', 'G', 'Ron', 'rgibson@gmail.com', 'yes', 'yes', '', '5551212', '0', '', '', '', '164', '376'),
(387, 'kamf', '', '2012-08-10 22:16:27', 'Kam Cheong Fung', 'Fung', 'Kam Cheong', 'cheong21789@hotmail.com', 'yes', 'yes', '1150 Darlene Lane, #131', '', '0', '', '', '', '164', '376');

-- --------------------------------------------------------

--
-- Table structure for table `accounts_o`
--

CREATE TABLE IF NOT EXISTS `accounts_o` (
  `ID_auth_o` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Password_auth_o` varchar(25) NOT NULL DEFAULT '',
  `Username_auth_o` varchar(25) NOT NULL DEFAULT '',
  `Date_o` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `full_name_o` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `last_name_o` varchar(50) NOT NULL DEFAULT '',
  `title_o` varchar(2) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `first_name_o` varchar(50) NOT NULL DEFAULT '',
  `email_name_o` varchar(70) NOT NULL DEFAULT '',
  `paid_o` varchar(100) NOT NULL DEFAULT 'yes',
  `god_paid_o` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'yes',
  `address_shipping_o` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `phone_o` varchar(50) NOT NULL DEFAULT '0',
  `address_billing_o` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `zip_o` varchar(50) NOT NULL DEFAULT '97405',
  `notes_o` varchar(5000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `gender_o` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `loc_1_t` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `loc_2_t` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `loc_3_t` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `location_authority_t` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `company_o_id` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID_auth_o`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=374 ;

--
-- Dumping data for table `accounts_o`
--

INSERT INTO `accounts_o` (`ID_auth_o`, `Password_auth_o`, `Username_auth_o`, `Date_o`, `full_name_o`, `last_name_o`, `title_o`, `first_name_o`, `email_name_o`, `paid_o`, `god_paid_o`, `address_shipping_o`, `phone_o`, `address_billing_o`, `zip_o`, `notes_o`, `gender_o`, `loc_1_t`, `loc_2_t`, `loc_3_t`, `location_authority_t`, `company_o_id`) VALUES
(173, 'gms51502', 'geoff', '2011-09-28 21:10:12', '', 'O''brien', '', 'Aaron', 'geoff@geniusmediasolutions.com', 'yes', 'yes', '1111 van buren st  Eugene OR ', '5413579021', '1111 van buren st  Eugene OR 97402', '97402', '', '', '', '', '', '', '164'),
(171, 'test', 'test', '2011-11-11 23:15:27', '', 'Contact', '', 'Joe', 'general@test.com', 'yes', 'yes', '1950 west 28th Avenue appt 1 Eugene OR 97405', '555-555-5555', '1950 west 28th Avenue appt 1 Eugene OR 97405', '9', '', '', '', '', '', '', ''),
(172, 'infra1800', 'aaron', '2007-11-22 18:50:22', '', 'DuChateau', '1', 'Aaron', 'aaron@geniusmediasolutions.com', 'yes', 'yes', '1950 west 28th Avenue Eugene OR 97405', '541-653-0973a', '1950 west 28th Avenue    Eugene OR 97405', '97405', 'sd', 'male', 'west broadway location***4*2264 roosevelt boulevard eugene oregon 97405', 'asdf***4*72 west broadway eugene oregon 97405', 'asdf***4*sdfg', '', ''),
(174, 'shownuff', 'Quentin', '2011-12-02 00:50:16', '', 'Harley', '', 'Quentin', 'Quentinharley54@gmail.com', 'yes', 'yes', '950 Clark St Eugene, Or 97402', '5416063698', '950 Clark St Eugene, Or 97402', '8', '', '', '', '', '', '', ''),
(175, 'angelique13', 'Bob', '2011-12-02 01:01:02', '', 'Baggitt', '', 'Bob', 'Bob@baggitt.com', 'no***2012-05-09 03:46:11', 'yes', '969 Willagilespie Rd,Eugene, OR.', '541-606-4292', '969 Willagilespie Rd,Eugene, OR.', '8', '', '', '', '', '', '', ''),
(230, '4networking', 'SabrinaBlack', '2012-02-29 22:32:35', '', 'Black', '', 'Sabrina', 'sblack2@uoregon.edu', 'yes', 'yes', 'null', '541-346-1589', 'null', 'no', '', '', '', '', '', '', ''),
(229, 'symphony', 'MaylianPak', '2012-02-29 22:05:28', '', 'Pak', '', 'Maylian', 'maylian.pak@eugenesymphony.org', 'yes', 'yes', 'null', '541-687-9487 x104', 'null', 'no', '', '', '', '', '', '', ''),
(228, 'fxy123', 'JeffStolle', '2012-02-29 21:49:11', '', 'Stolle', '', 'Jeff', 'jstolle@uoregon.edu', 'yes', 'yes', 'null', '541-346-1494', 'null', 'no', '', '', '', '', '', '', ''),
(227, '1mamma', 'MSavoian', '2012-02-29 21:09:30', '', 'Savoian', '', 'Margaret', 'msavoian@uoregon.edu', 'yes', 'yes', 'null', '541-556-7781', 'null', 'no', '', '', '', '', '', '', ''),
(225, 'widgicreek', 'bensappington', '2012-02-29 01:40:32', '', 'Sappington', '', 'Ben ', 'bens@eugenechamber.com', 'yes', 'yes', 'null', '541-915-5212', 'null', 'no', '', '', '', '', '', '', ''),
(224, 'Oregon93', 'JenniferArteaga', '2012-02-28 22:29:31', '', 'Arteaga', '', 'Jennifer', 'jarteaga@uoregon.edu', 'yes', 'yes', 'null', '559-799-9352', 'null', 'no', '', '', '', '', '', '', ''),
(223, '311ROCKS', 'CASEY', '2012-02-28 22:03:34', '', 'JORGENSEN', '', 'CASEY', 'casey@pulpitclothing.com', 'yes', 'yes', 'null', '541-510-9839', 'null', 'no', '', '', '', '', '', '', ''),
(222, 'asdf', 'joecontact', '2012-02-28 21:11:28', '', 'Contact', '', 'Joe', 'chateauconcept@gmail.com', 'yes', 'yes', 'null', '541-555-5555', 'null', 'no', '', '', '', '', '', '', ''),
(185, 'test', 'scott', '2011-12-30 18:16:39', '', 'McKee', '', 'Scott', 'scottmckee@ymail.com', 'no***2012-03-03 01:04:30', 'yes', 'Springfield OR 97477', '541-554-9141', '1101 16th Street', '9', '', '', '', '', '', '', ''),
(220, 'hoops715', 'jemimahpanganiban', '2012-02-28 07:31:37', '', 'Panganiban', '', 'Jemimah', 'JPanganiban15@gmail.com', 'yes', 'yes', 'null', '503-621-6739', 'null', 'no', '', '', '', '', '', '', ''),
(221, 'cronaldo9', 'Onesto', '2012-02-28 08:13:26', '', 'Onesto', '', 'Arturo', 'tito_onesto@hotmail.com', 'yes', 'yes', 'null', '541-690-4466', 'null', 'no', '', '', '', '', '', '', ''),
(219, 'nicole12,18', 'amandaramirez', '2012-02-28 07:13:41', '', 'Ramirez', '', 'Amanda', 'amandaxramirez@gmail.com', 'yes', 'yes', 'null', '949-525-8311', 'null', 'no', '', '', '', '', '', '', ''),
(217, 'temp123', 'adam', '2012-02-15 21:16:04', '', 'Lorts', '', 'Adam', 'adam@developmentnow.com', 'yes', 'yes', 'fake addy  eugene OR 97405', '503-980-8802', 'fake addy  eugene OR 97405', 'no', '', '', '', '', '', '', ''),
(218, 'test123', 'testballs', '2012-02-24 21:49:46', '', 'last', '', 'first', 'chateauconcept@gmail.com', 'yes', 'yes', 'null', '555-555-555', 'null', 'no', '', '', '', '', '', '', ''),
(215, 'temp123', 'Nita', '2012-02-10 18:30:08', '', 'Dutton', '', 'Nita', 'jnd66866@aol.com', 'yes', 'yes', 'temp  eugene OR 97405', '555-555-5555', 'temp  Eugene OR 97405', 'no', '', '', '', '', '', '', ''),
(214, 'password', 'chris', '2012-02-10 00:39:37', '', 'cauthon', '', 'chris', 'ccauthon88@gmail.com', 'yes', 'yes', 'null', '--', 'null', 'no', '', '', '', '', '', '', ''),
(212, 'aoth', 'RachelWilliams', '2012-02-09 21:40:31', '', 'Williams', '', 'Rachel', 'rwilliams@innat5th.com', 'yes', 'yes', 'null', '415-305-6500', 'null', 'no', '', '', '', '', '', '', ''),
(213, 'pasword123', 'teser1223', '2012-02-10 00:36:20', '', 'miller123', '', 'geoff123', 'geofftest@tester.com', 'yes', 'yes', 'null', '541-456-4567', 'null', 'no', '', '', '', '', '', '', ''),
(193, 'thomas', 'judithbelford', '2012-01-19 01:06:49', '', 'Belford', '', 'Judith', 'judithbelford@comcast.net', 'yes', 'yes', '6050 SW 46th Ave  Portland OR 97221', '503-223-0917', '6050 SW 46th Ave  Portland OR 97221', '9', '', '', '', '', '', '', ''),
(194, 'Gemini', 'Tayah', '2012-01-25 06:09:10', '', 'Butler', '', 'Tayah', 'Tayahbutler@gmail.com', 'yes', 'yes', '961 forrester way  Eugene OR 97401', '541-337-8203', '961 forrester way  Eugene OR 97401', '9', '', '', '', '', '', '', ''),
(195, 'temp123', 'miriam', '2012-01-29 19:55:06', '', 'Bolton', '', 'Miriam', 'mbolton@uoregon.edu', 'yes', 'yes', '123 st  eugene OR 97405', '555-555-5555', '123 st  eugene OR 97405', 'no', '', '', '', '', '', '', ''),
(196, 'temp123', 'kees', '2012-01-29 20:00:06', '', 'de Kluyver', '', 'Kees', 'kees@uoregon.edu', 'yes', 'yes', '', '541-346-3300', '1208 University of Oregon, Eugene, OR 97403', 'no', '', '', '', '', '', '', ''),
(197, 'temp123', 'Ron', '2012-01-29 20:03:04', '', 'Gibson', '', 'Ron', 'athletrack@gmail.com', 'yes', 'yes', '123 st  eugene OR 97405', '541-954-7784', '123 st  eugene OR 97405', 'no', '', '', '', '', '', '', ''),
(198, 'goducks1234', 'mayans', '2012-01-31 23:28:24', '', 'Schexnayder', '', 'Mayan', 'mayans@uoregon.edu', 'yes', 'yes', '123 any st  eugene OR 97402', '555-555-5555', '123 any st  eugene OR 97042', 'no', '', '', '', '', '', '', ''),
(199, 'BIgice24!!', 'terrelj', '2012-01-31 23:45:04', '', 'Jones', '', 'Terrel', 'fratbacks@gmail.com', 'yes', 'yes', '123 any st.  EUGENE OR 97402', '951-691-0151', '123 any st  eugene OR 97402', 'no', '', '', '', '', '', '', ''),
(373, 'shellyanng', '', '2012-08-06 05:19:55', 'Shellyann Gibson', 'Gibson', '1', 'Shellyann', 'sgibson@gmail.com', 'yes', 'yes', '', '', '0', '', '', 'male', '', '', '', '164', '376'),
(372, 'darrellw', '', '2012-08-04 02:02:05', 'Darrell Wright', 'Wright', '1', 'Darrell', 'dwright@gmail.com', 'yes', 'yes', '', '5555551212', '0', '', '', 'male', '', '', '', '164', '376'),
(370, '', '', '2012-07-27 23:08:33', 'Jan Dewerd', 'Dewerd', '1', 'Jan', '', 'yes', 'yes', '', '', '0', '', '', 'male', '', '', '', '164', '376'),
(371, 'jand', '', '2012-07-27 23:09:23', 'Jan de Werd', 'de Werd', '1', 'Jan', 'jandewerd@yahoo.com', 'yes', 'yes', '', '5551212', '0', '', '', 'male', '', '', '', '164', '376');

-- --------------------------------------------------------

--
-- Table structure for table `actions_log`
--

CREATE TABLE IF NOT EXISTS `actions_log` (
  `ID_auth_delt` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `company_id_delt` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `author_delt` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `user_id_delt` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `name_and_comapny_name_delt` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'error',
  `action_delt` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'error',
  `thing_delt` varchar(2000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'error',
  `link_delt` varchar(3000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no link',
  `time_delt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID_auth_delt`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=439 ;

--
-- Dumping data for table `actions_log`
--

INSERT INTO `actions_log` (`ID_auth_delt`, `company_id_delt`, `author_delt`, `user_id_delt`, `name_and_comapny_name_delt`, `action_delt`, `thing_delt`, `link_delt`, `time_delt`) VALUES
(347, 'b', '1', '0', '1', '1', '271', 'no link', '0000-00-00 00:00:00'),
(348, 'b', '1', '0', '1', '2', '271', 'no link', '0000-00-00 00:00:00'),
(349, 'b', '1', '0', '1', '3', '271', 'no link', '0000-00-00 00:00:00'),
(350, 'b', '1', '0', '1', '1', '272', 'no link', '0000-00-00 00:00:00'),
(351, 'b', '1', '0', '1', '2', '272', 'no link', '0000-00-00 00:00:00'),
(352, 'b', '1', '0', '1', '3', '272', 'no link', '0000-00-00 00:00:00'),
(353, 'b', '1', '0', '1', '4', '272', 'no link', '0000-00-00 00:00:00'),
(354, 'b', '1', '0', '1', '5', '272', 'no link', '0000-00-00 00:00:00'),
(355, 'b', '1', '0', '1', '1', '273', 'no link', '0000-00-00 00:00:00'),
(356, 'b', '1', '0', '1', '2', '273', 'no link', '0000-00-00 00:00:00'),
(357, 'b', '1', '0', '1', '3', '273', 'no link', '0000-00-00 00:00:00'),
(358, 'b', '1', '0', '1', '4', '273', 'no link', '0000-00-00 00:00:00'),
(359, 'b', '1', '0', '1', '5', '273', 'no link', '0000-00-00 00:00:00'),
(360, 'b', '1', '0', '1', '6', '273', 'no link', '0000-00-00 00:00:00'),
(361, 'b', '1', '0', '1', '7', '273', 'no link', '0000-00-00 00:00:00'),
(362, 'b', '1', '0', '1', '8', '273', 'no link', '0000-00-00 00:00:00'),
(363, 'b', '1', '0', '1', '9', '273', 'no link', '0000-00-00 00:00:00'),
(364, 'b', '1', '0', '1', '10', '273', 'no link', '0000-00-00 00:00:00'),
(365, 'b', '1', '0', '1', '11', '273', 'no link', '0000-00-00 00:00:00'),
(366, '269', '1', '2', '2', '1', '274', 'no link', '0000-00-00 00:00:00'),
(367, '267', '1', '1', '1', '2', '274', 'no link', '0000-00-00 00:00:00'),
(368, '264', '1', '0', '1', '3', '274', 'no link', '0000-00-00 00:00:00'),
(369, '267', '1', '0', '1', '4', '274', 'no link', '0000-00-00 00:00:00'),
(370, '269', '1', '0', '1', '5', '274', 'no link', '0000-00-00 00:00:00'),
(371, '267', '1', '0', '1', '6', '274', 'no link', '0000-00-00 00:00:00'),
(372, '269', '1', '1', '1', '7', '274', 'no link', '0000-00-00 00:00:00'),
(373, '268', '1', '2', '1', '8', '274', 'no link', '0000-00-00 00:00:00'),
(374, 'b', '1', '0', '1', '9', '274', 'no link', '0000-00-00 00:00:00'),
(375, 'b', '1', '0', '1', '10', '274', 'no link', '0000-00-00 00:00:00'),
(376, 'b', '1', '0', '1', '11', '274', 'no link', '0000-00-00 00:00:00'),
(429, '164', '1', '173', 'Aaron O''brien with Aaron Company LLC', 'added a <i>learning objective</i> to ', '<b>session:</b> Sauls Class in <b>event:</b> Use Me with <b>Learning Objective ID of #LSES438</b>. This learning objective must be approved by a CE-Go staff member.', 'learning_obj/members_area/LkBsK955dWphgKLmDUN7I~z16Hf+Fbz4RXjUX7P+8CoR1GYM+DSuEHVb7GkscoC~09MwN~QUuT36qf4d3GqaUg==/ce470dx5', '2012-10-09 00:24:08'),
(428, '164', '1', '173', 'Aaron O''brien with Aaron Company LLC', 'added a <i>learning objective</i> to ', '<b>session:</b> Sauls Class in <b>event:</b> Use Me with <b>Learning Objective ID of #LSES437</b>', 'learning_obj/members_area/slwxtm8aGIsfRkQ9GtE7UXfp5hkHDxix~BevzTjkaO9v7mhyhMejjpa6q+1T+XJaSr~+4tmuyYOHCpnjSVhKBg==/ce470dx5', '2012-10-09 00:22:20'),
(427, '164', '1', '173', 'Aaron O''brien with Aaron Company LLC', 'added a learning objective to', 'session: title in event: Use Me with Learning Objective ID of # LSES436', 'learning_obj/members_area/mzVbMEAm9YUFF255ntiqcIF69Z~jWoP+Uy+NJBS7NHKVzrORgh609DZbGXLNa6NKKhiWMDag9Iit7SaUbrsN~A==/ce461dx5', '2012-10-08 23:56:28'),
(426, '164', '1', '173', 'Aaron O''brien with Aaron Company LLC', 'added a learning objective to', 'session: title in event: Use Me with Learning Objective ID of # LSES435', 'learning_obj/members_area/mzVbMEAm9YUFF255ntiqcIF69Z~jWoP+Uy+NJBS7NHKVzrORgh609DZbGXLNa6NKKhiWMDag9Iit7SaUbrsN~A==/ce461dx5', '2012-10-08 23:56:26'),
(425, '164', '1', '173', 'Aaron O''brien with Aaron Company LLC', 'added a learning objective to', 'session: title in event: Use Me with Learning Objective ID of # LSES434', 'learning_obj/members_area/mzVbMEAm9YUFF255ntiqcIF69Z~jWoP+Uy+NJBS7NHKVzrORgh609DZbGXLNa6NKKhiWMDag9Iit7SaUbrsN~A==/ce461dx5', '2012-10-08 23:56:23'),
(424, '164', '1', '173', 'Aaron O''brien with Aaron Company LLC', 'added a learning objective to', 'session: title in event: Use Me with Learning Objective ID of # LSES433', 'learning_obj/members_area/mzVbMEAm9YUFF255ntiqcIF69Z~jWoP+Uy+NJBS7NHKVzrORgh609DZbGXLNa6NKKhiWMDag9Iit7SaUbrsN~A==/ce461dx5', '2012-10-08 23:56:20'),
(423, '164', '1', '173', 'Aaron O''brien with Aaron Company LLC', 'added a learning objective to', 'session: Sauls Class in event: Use Me with Learning Objective ID of # LSES432', 'learning_obj/members_area/PJeWGCbIjlUtL7P2JT0LAaehAEkFWuRp774Tlcguz84LoOPN4CKz4+I6T~7WvKjitFfFiv7zcd7y~C0xjW1xNg==/ce470dx5', '2012-10-08 23:32:46'),
(430, '164', '1', '173', 'Aaron O''brien with Aaron Company LLC', 'added a <i>learning objective</i> to ', '<b>session:</b> Sauls Class in <b>event:</b> Use Me with <b>Learning Objective ID of #LSES439</b>. This learning objective must be approved by a CE-Go staff member.', 'learning_obj/members_area/LkBsK955dWphgKLmDUN7I~z16Hf+Fbz4RXjUX7P+8CoR1GYM+DSuEHVb7GkscoC~09MwN~QUuT36qf4d3GqaUg==/ce470dx5', '2012-10-09 00:24:28'),
(431, '164', '1', '173', 'Aaron O''brien with Aaron Company LLC', 'added a <i>learning objective</i> to ', '<b>session:</b> Sauls Class in <b>event:</b> Use Me with <b>Learning Objective ID of #LSES440</b>. <b>Note:</b>This learning objective must be approved by a CE-Go staff member before it can be used in a live event', 'learning_obj/members_area/CB3SzOLgkzWii7vnfm2vxG0XO4Eiag6WrpnoGdLmaOxWLJCn8bBFWBLOzpvqT2gPZIqE1IeRjJPqhp9w6oNypA==/ce470dx5', '2012-10-09 00:26:04'),
(432, '164', '1', '173', 'Aaron O''brien with Aaron Company LLC', 'added a <i>learning objective</i> to ', '<b>session:</b> Sauls Class in <b>event:</b> Use Me with <b>Learning Objective ID of #LSES441</b>. Note: This learning objective must be approved by a CE-Go staff member before it can be used in a live event.', 'learning_obj/members_area/zsFSq4I4yZV1Tz+~W9abjazdIzGdxA6nuj+Xg0oR3SasRL2CR5WkSiiiNspsExHPIwd1FeUBjinub41YpnWcGg==/ce470dx5', '2012-10-09 00:55:17'),
(433, '164', '1', '173', 'Aaron O''brien with Aaron Company LLC', 'added a <i>learning objective</i> to ', '<b>session:</b> Sauls Class in <b>event:</b> Use Me with <b>Learning Objective ID of #LSES442</b>. Note: This learning objective must be approved by a CE-Go staff member before it can be used in a live event.', 'learning_obj/members_area/zsFSq4I4yZV1Tz+~W9abjazdIzGdxA6nuj+Xg0oR3SasRL2CR5WkSiiiNspsExHPIwd1FeUBjinub41YpnWcGg==/ce470dx5', '2012-10-09 00:55:26'),
(434, '164', '1', '173', 'Aaron O''brien with Aaron Company LLC', 'added a <i>learning objective</i> to ', '<b>session:</b> Sauls Class in <b>event:</b> Use Me with <b>Learning Objective ID of #LSES443</b>. Note: This learning objective must be approved by a CE-Go staff member before it can be used in a live event.', 'learning_obj/members_area/zsFSq4I4yZV1Tz+~W9abjazdIzGdxA6nuj+Xg0oR3SasRL2CR5WkSiiiNspsExHPIwd1FeUBjinub41YpnWcGg==/ce470dx5', '2012-10-09 00:56:10'),
(435, '164', '1', '173', 'Aaron O''brien with Aaron Company LLC', 'edited a <i>learning objective</i> from ', '<b>session:</b> Sauls Class in <b>event:</b> Use Me with <b>Learning Objective ID of #LSES421</b>. Note: When someone in your company edits a learning objective, the status will automatically be reset to <i>pending approval</i> status, and will need to be reviewed.', 'learning_obj/members_area/', '2012-10-09 18:30:59'),
(436, '164', '1', '173', 'Aaron O''brien with Aaron Company LLC', 'edited a <i>learning objective</i> from ', '<b>session:</b> Sauls Class in <b>event:</b> Use Me with <b>Learning Objective ID of #LSES421</b>. Note: When someone in your company edits a learning objective, the status will automatically be reset to <i>pending approval</i> status, and will need to be reviewed.', 'learning_obj/members_area/HrFm0BKPp5PIIcuKtvZ42BPgt3LU~nsQRcTBCGy0aX29hWwlqbfqiYgkvlcEacxwXRP2Q1U8OsvYIJSQA8SnqQ==/ce470dx5', '2012-10-09 18:31:36'),
(437, '164', '1', '173', 'Aaron O''brien with Aaron Company LLC', 'created a <i>new event</i> entitled ', '<b>testing another event</b> starting on 10/27/2012', 'calendar_view/members_area/6CZ16lkuIL45xnxBPL5s19omO7VIXhrUEhpIyX8d4~XSAxQZyxThLTje+dRsULg+yrsI38cyS3hpjrJWX~o~uA==', '2012-10-09 19:45:15'),
(438, '164', '1', '173', 'Aaron O''brien with Aaron Company LLC', 'added a <i>learning objective</i> to ', '<b>session:</b> Sauls Class in <b>event:</b> Use Me with <b>Learning Objective ID of #LSES444</b>. Note: This learning objective must be approved by a CE-Go staff member before it can be used in a live event.', 'learning_obj/members_area/uypwTfExSY0Amq1+~RXfZb+SilTZUEEmPOaeUonzIxZ+eB0+ce5~b8iqrxmz4iAX4ukEOtIXOF09UhUes2UKpA==/ce470dx5', '2012-10-10 00:15:55');

-- --------------------------------------------------------

--
-- Table structure for table `booking_master`
--

CREATE TABLE IF NOT EXISTS `booking_master` (
  `event_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `start_event` datetime NOT NULL,
  `end_event` datetime NOT NULL,
  `staff_member_id` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no',
  `company_id` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no',
  `event_name` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no',
  `event_zip` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no',
  `event_notes` varchar(1225) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no notes or details',
  `address_event` varchar(1500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=320 ;

--
-- Dumping data for table `booking_master`
--

INSERT INTO `booking_master` (`event_id`, `start_event`, `end_event`, `staff_member_id`, `company_id`, `event_name`, `event_zip`, `event_notes`, `address_event`) VALUES
(312, '2012-09-22 00:00:00', '2012-09-28 00:00:00', '173', '164', 'Use Me', 'ZIP', 'Event Description', 'Address, City, State'),
(313, '2012-09-30 00:00:00', '2012-10-05 00:00:00', '173', '164', 'New Event', 'ZIP', 'Event Description', 'Address, City, State'),
(314, '2012-10-01 00:00:00', '2012-10-06 00:00:00', '173', '164', 'New Event', 'ZIP', 'Event Description', 'Address, City, State'),
(315, '2012-10-08 00:00:00', '2012-10-17 00:00:00', '173', '164', 'XXXXXX', 'ZIP', 'Event Description', 'Address, City, State'),
(316, '2012-10-16 00:00:00', '2012-10-17 00:00:00', '173', '164', 'monkey bones', 'ZIP', 'Event Description', 'Address, City, State'),
(317, '2012-10-10 00:00:00', '2012-10-11 00:00:00', '173', '164', 'sometimes you get a feeling', 'ZIP', 'Event Description', 'Address, City, State'),
(318, '2012-10-10 00:00:00', '2012-10-11 00:00:00', '173', '164', 'sometimes you get a feeling again', 'ZIP', 'Event Description', 'Address, City, State'),
(319, '2012-10-27 00:00:00', '2012-10-28 00:00:00', '173', '164', 'testing another event', 'ZIP', 'Event Description', 'Address, City, State');

-- --------------------------------------------------------

--
-- Table structure for table `company_o`
--

CREATE TABLE IF NOT EXISTS `company_o` (
  `ID_auth_l` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `addy_l` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `zip_l` varchar(100) NOT NULL DEFAULT '',
  `phone_l` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'not available',
  `email_l` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'not available',
  `company_name_l` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`ID_auth_l`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=165 ;

--
-- Dumping data for table `company_o`
--

INSERT INTO `company_o` (`ID_auth_l`, `addy_l`, `zip_l`, `phone_l`, `email_l`, `company_name_l`) VALUES
(157, '1852 east place pl, Eugene Or', '97401', 'not available', 'not available', '364'),
(156, '345 West Charnleton Avenue, Eugene Oregon', '97405', 'not available', 'not available', '364'),
(155, '1234 boulavard blvd, Eugene Oregon ', '97405', 'not available', 'not available', '364'),
(154, '1234 fake st, eugene oregon', '97405', 'not available', 'not available', '363'),
(158, '234 fake st eugene oregon', '97405', 'not available', 'not available', '364'),
(159, '1344 Napa Valley lane', '97404', 'not available', 'not available', '372'),
(160, '1344 Napa Valley Lane', '97404', 'not available', 'not available', '373'),
(161, '761 West N st', '97477', 'not available', 'not available', '373'),
(162, '1234 terrance blvd. Eugene, Or', '97405', 'not available', 'not available', '375'),
(163, '1344 Napa Valley lane Eugene, Eugene Or ', '97404', 'not available', 'not available', '375'),
(164, '72 West Street  Eugene OR ', '97407', '555555555', 'not available', 'Aaron Company LLC');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=314 ;

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
(304, '1', '275', '', '3'),
(305, '1', '275', '', '4'),
(306, '1', '275', '', '5'),
(307, '1', '275', '', '6'),
(308, '1', '275', '', '7'),
(309, '1', '275', '', '8'),
(310, '1', '275', '', '9'),
(311, '1', '275', '', '10'),
(312, '1', '275', '', '11'),
(313, '1', '275', '', '12');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=568 ;

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
(387, '0', '0', '1', '384', '4'),
(388, '0', '0', '1', '384', '5'),
(389, '0', '0', '1', '384', '6'),
(390, '0', '0', '1', '384', '7'),
(391, '0', '5', '1', '385', '1'),
(392, '0', '0', '1', '386', '1'),
(393, '0', '0', '1', '386', '2'),
(394, '0', '0', '1', '386', '3'),
(395, '0', '0', '1', '386', '4'),
(396, '0', '0', '1', '386', '5'),
(397, '0', '0', '1', '386', '6'),
(398, '0', '0', '1', '386', '7'),
(399, '0', '0', '1', '386', '8'),
(400, '0', '0', '1', '386', '9'),
(401, '0', '0', '1', '386', '10'),
(402, '0', '0', '1', '386', '11'),
(403, '0', '0', '1', '386', '12'),
(404, '0', '0', '1', '386', '13'),
(405, '0', '0', '1', '386', '14'),
(406, '0', '0', '1', '386', '15'),
(407, '0', '0', '1', '386', '16'),
(408, '0', '0', '1', '386', '17'),
(409, '0', '0', '1', '386', '18'),
(410, '0', '0', '1', '386', '19'),
(411, '0', '0', '1', '386', '20'),
(412, '0', '0', '1', '386', '21'),
(413, '0', '0', '1', '386', '22'),
(414, '0', '0', '1', '386', '23'),
(415, '0', '0', '1', '386', '24'),
(416, '0', '0', '1', '386', '25'),
(417, '0', '0', '1', '386', '26'),
(418, '0', '0', '1', '386', '27'),
(419, '0', '0', '1', '386', '28'),
(420, '0', '0', '1', '387', '1'),
(421, '0', '0', '1', '387', '2'),
(422, '0', '0', '1', '387', '3'),
(423, '0', '0', '1', '387', '4'),
(424, '0', '0', '1', '387', '5'),
(425, '0', '0', '1', '387', '6'),
(426, '0', '0', '1', '387', '7'),
(427, '0', '0', '1', '387', '8'),
(428, '0', '0', '1', '387', '9'),
(429, '0', '0', '1', '387', '10'),
(430, '0', '0', '1', '387', '11'),
(431, '0', '0', '1', '387', '12'),
(432, '0', '0', '1', '387', '13'),
(433, '0', '0', '1', '387', '14'),
(434, '0', '0', '1', '387', '15'),
(435, '0', '0', '1', '387', '16'),
(436, '0', '0', '1', '387', '17'),
(437, '0', '0', '1', '387', '18'),
(438, '0', '0', '1', '387', '19'),
(439, '0', '0', '1', '387', '20'),
(440, '0', '0', '1', '387', '21'),
(441, '0', '0', '1', '387', '22'),
(442, '0', '0', '1', '387', '23'),
(443, '0', '0', '1', '387', '24'),
(444, '0', '0', '1', '387', '25'),
(445, '0', '0', '1', '387', '26'),
(446, '0', '0', '1', '387', '27'),
(447, '0', '0', '1', '387', '28'),
(448, '0', '0', '1', '388', '1'),
(449, '0', '0', '1', '388', '2'),
(450, '0', '0', '1', '388', '3'),
(451, '0', '0', '1', '388', '4'),
(452, '0', '0', '1', '388', '5'),
(453, '0', '0', '1', '388', '6'),
(454, '0', '0', '1', '388', '7'),
(455, '0', '0', '1', '388', '8'),
(456, '0', '0', '1', '388', '9'),
(457, '0', '0', '1', '388', '10'),
(458, '0', '0', '1', '388', '11'),
(459, '0', '0', '1', '388', '12'),
(460, '0', '0', '1', '388', '13'),
(461, '0', '0', '1', '388', '14'),
(462, '0', '0', '1', '388', '15'),
(463, '0', '0', '1', '388', '16'),
(464, '0', '0', '1', '388', '17'),
(465, '0', '0', '1', '388', '18'),
(466, '0', '0', '1', '388', '19'),
(467, '0', '0', '1', '388', '20'),
(468, '0', '0', '1', '388', '21'),
(469, '0', '0', '1', '388', '22'),
(470, '0', '0', '1', '388', '23'),
(471, '0', '0', '1', '388', '24'),
(472, '0', '0', '1', '388', '25'),
(473, '0', '0', '1', '388', '26'),
(474, '0', '0', '1', '388', '27'),
(475, '0', '0', '1', '388', '28'),
(476, '0', '0', '1', '389', '1'),
(477, '0', '0', '1', '389', '2'),
(478, '0', '0', '1', '389', '3'),
(479, '0', '0', '1', '389', '4'),
(480, '0', '0', '1', '389', '5'),
(481, '0', '0', '1', '389', '6'),
(482, '0', '0', '1', '389', '7'),
(483, '0', '0', '1', '389', '8'),
(484, '0', '0', '1', '389', '9'),
(485, '0', '0', '1', '389', '10'),
(486, '0', '0', '1', '389', '11'),
(487, '0', '0', '1', '389', '12'),
(488, '0', '0', '1', '389', '13'),
(489, '0', '0', '1', '389', '14'),
(490, '0', '0', '1', '389', '15'),
(491, '0', '0', '1', '389', '16'),
(492, '0', '0', '1', '389', '17'),
(493, '0', '0', '1', '389', '18'),
(494, '0', '0', '1', '389', '19'),
(495, '0', '0', '1', '389', '20'),
(496, '0', '0', '1', '389', '21'),
(497, '0', '0', '1', '389', '22'),
(498, '0', '0', '1', '389', '23'),
(499, '0', '0', '1', '389', '24'),
(500, '0', '0', '1', '389', '25'),
(501, '0', '0', '1', '389', '26'),
(502, '0', '0', '1', '389', '27'),
(503, '0', '0', '1', '389', '28'),
(504, '0', '0', '1', '390', '1'),
(505, '0', '0', '1', '390', '2'),
(506, '0', '0', '1', '390', '3'),
(507, '0', '0', '1', '390', '4'),
(508, '0', '0', '1', '390', '5'),
(509, '0', '0', '1', '390', '6'),
(510, '0', '0', '1', '390', '7'),
(511, '0', '0', '1', '390', '8'),
(512, '0', '0', '1', '390', '9'),
(513, '0', '0', '1', '390', '10'),
(514, '0', '0', '1', '390', '11'),
(515, '0', '0', '1', '390', '12'),
(516, '0', '0', '1', '390', '13'),
(517, '0', '0', '1', '390', '14'),
(518, '0', '0', '1', '390', '15'),
(519, '0', '0', '1', '390', '16'),
(520, '0', '0', '1', '390', '17'),
(521, '0', '0', '1', '390', '18'),
(522, '0', '0', '1', '390', '19'),
(523, '0', '0', '1', '390', '20'),
(524, '0', '0', '1', '390', '21'),
(525, '0', '0', '1', '390', '22'),
(526, '0', '0', '1', '390', '23'),
(527, '0', '0', '1', '390', '24'),
(528, '0', '0', '1', '390', '25'),
(529, '0', '0', '1', '390', '26'),
(530, '0', '0', '1', '390', '27'),
(531, '0', '0', '1', '390', '28'),
(532, '0', '0', '1', '390', '29'),
(533, '0', '0', '1', '390', '30'),
(534, '0', '0', '1', '391', '1'),
(535, '0', '0', '1', '391', '2'),
(536, '0', '0', '1', '391', '3'),
(537, '0', '0', '1', '391', '4'),
(538, '0', '0', '1', '391', '5'),
(539, '0', '0', '1', '391', '6'),
(540, '0', '0', '1', '391', '7'),
(541, '0', '0', '1', '391', '8'),
(542, '0', '0', '1', '391', '9'),
(543, '0', '0', '1', '391', '10'),
(544, '0', '0', '1', '391', '11'),
(545, '0', '0', '1', '391', '12'),
(546, '0', '0', '1', '391', '13'),
(547, '0', '0', '1', '391', '14'),
(548, '0', '0', '1', '391', '15'),
(549, '0', '0', '1', '391', '16'),
(550, '0', '0', '1', '391', '17'),
(551, '0', '0', '1', '391', '18'),
(552, '0', '0', '1', '391', '19'),
(553, '0', '0', '1', '391', '20'),
(554, '0', '0', '1', '391', '21'),
(555, '0', '0', '1', '391', '22'),
(556, '0', '0', '1', '391', '23'),
(557, '0', '0', '1', '391', '24'),
(558, '0', '0', '1', '391', '25'),
(559, '0', '0', '1', '391', '26'),
(560, '0', '0', '1', '391', '27'),
(561, '0', '0', '1', '391', '28'),
(562, '0', '0', '1', '393', '1'),
(563, '0', '0', '1', '394', '1'),
(564, '5', '5', '1', '392', '1'),
(565, '0', '5', '1', '395', '1'),
(566, '5', '0', '1', '398', '1'),
(567, '0', '5', '1', '396', '1');

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
(275, 'test diet', '12', 'this is a test diet, longer instructions about the diet go here, and are a reference point for the client', '373', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `event_link_day`
--

CREATE TABLE IF NOT EXISTS `event_link_day` (
  `number_of_tracks_delt` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `ID_auth_delt` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `day_delt` varchar(1000) NOT NULL DEFAULT 'no',
  `booking_id_delt` varchar(100) NOT NULL DEFAULT 'no',
  `track_names_delt` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '{ "1":"Track 1" , "2":"Track 2" ,"3":"Track 3" ,"4":"Track 4" ,"5":"Track 5" }',
  PRIMARY KEY (`ID_auth_delt`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=662 ;

--
-- Dumping data for table `event_link_day`
--

INSERT INTO `event_link_day` (`number_of_tracks_delt`, `ID_auth_delt`, `day_delt`, `booking_id_delt`, `track_names_delt`) VALUES
('1', 631, '6', '312', '{ "1":"Track 1" , "2":"Track 2" ,"3":"Track 3" ,"4":"Track 4" ,"5":"Track 5" }'),
('5', 630, '5', '312', '{ "1":"Track 1" , "2":"Track 2" ,"3":"Track 3" ,"4":"Track 4" ,"5":"Track 5" }'),
('3', 629, '4', '312', '{ "1":"Track 1" , "2":"Track 2" ,"3":"Track 3" ,"4":"Track 4" ,"5":"Track 5" }'),
('5', 628, '3', '312', '{ "1":"Track 1" , "2":"Track 2" ,"3":"Track 3" ,"4":"Track 4" ,"5":"Track 5" }'),
('2', 627, '2', '312', '{ "1":"Track 1" , "2":"Track 2" ,"3":"Track 3" ,"4":"Track 4" ,"5":"Track 5" }'),
('5', 626, '1', '312', '{"1":"newest track","2":"no abuse track","3":"track name examp","4":"Track 4","5":"Track 5"}'),
('1', 625, '2', '311', '{ "1":"Track 1" , "2":"Track 2" ,"3":"Track 3" ,"4":"Track 4" ,"5":"Track 5" }'),
('1', 624, '1', '311', '{ "1":"Track 1" , "2":"Track 2" ,"3":"Track 3" ,"4":"Track 4" ,"5":"Track 5" }'),
('1', 623, '1', '307', '{ "1":"Track 1" , "2":"Track 2" ,"3":"Track 3" ,"4":"Track 4" ,"5":"Track 5" }'),
('5', 632, '1', '313', '{ "1":"Track 1" , "2":"Track 2" ,"3":"Track 3" ,"4":"Track 4" ,"5":"Track 5" }'),
('1', 633, '2', '313', '{ "1":"Track 1" , "2":"Track 2" ,"3":"Track 3" ,"4":"Track 4" ,"5":"Track 5" }'),
('1', 634, '3', '313', '{ "1":"Track 1" , "2":"Track 2" ,"3":"Track 3" ,"4":"Track 4" ,"5":"Track 5" }'),
('1', 635, '4', '313', '{ "1":"Track 1" , "2":"Track 2" ,"3":"Track 3" ,"4":"Track 4" ,"5":"Track 5" }'),
('1', 636, '5', '313', '{ "1":"Track 1" , "2":"Track 2" ,"3":"Track 3" ,"4":"Track 4" ,"5":"Track 5" }'),
('1', 637, '6', '313', '{ "1":"Track 1" , "2":"Track 2" ,"3":"Track 3" ,"4":"Track 4" ,"5":"Track 5" }'),
('3', 638, '1', '314', '{ "1":"Track 1" , "2":"Track 2" ,"3":"Track 3" ,"4":"Track 4" ,"5":"Track 5" }'),
('1', 639, '2', '314', '{ "1":"Track 1" , "2":"Track 2" ,"3":"Track 3" ,"4":"Track 4" ,"5":"Track 5" }'),
('1', 640, '3', '314', '{ "1":"Track 1" , "2":"Track 2" ,"3":"Track 3" ,"4":"Track 4" ,"5":"Track 5" }'),
('1', 641, '4', '314', '{ "1":"Track 1" , "2":"Track 2" ,"3":"Track 3" ,"4":"Track 4" ,"5":"Track 5" }'),
('1', 642, '5', '314', '{ "1":"Track 1" , "2":"Track 2" ,"3":"Track 3" ,"4":"Track 4" ,"5":"Track 5" }'),
('1', 643, '6', '314', '{ "1":"Track 1" , "2":"Track 2" ,"3":"Track 3" ,"4":"Track 4" ,"5":"Track 5" }'),
('1', 644, '1', '315', '{ "1":"Track 1" , "2":"Track 2" ,"3":"Track 3" ,"4":"Track 4" ,"5":"Track 5" }'),
('1', 645, '2', '315', '{ "1":"Track 1" , "2":"Track 2" ,"3":"Track 3" ,"4":"Track 4" ,"5":"Track 5" }'),
('1', 646, '3', '315', '{ "1":"Track 1" , "2":"Track 2" ,"3":"Track 3" ,"4":"Track 4" ,"5":"Track 5" }'),
('1', 647, '4', '315', '{ "1":"Track 1" , "2":"Track 2" ,"3":"Track 3" ,"4":"Track 4" ,"5":"Track 5" }'),
('1', 648, '5', '315', '{ "1":"Track 1" , "2":"Track 2" ,"3":"Track 3" ,"4":"Track 4" ,"5":"Track 5" }'),
('1', 649, '6', '315', '{ "1":"Track 1" , "2":"Track 2" ,"3":"Track 3" ,"4":"Track 4" ,"5":"Track 5" }'),
('1', 650, '7', '315', '{ "1":"Track 1" , "2":"Track 2" ,"3":"Track 3" ,"4":"Track 4" ,"5":"Track 5" }'),
('1', 651, '8', '315', '{ "1":"Track 1" , "2":"Track 2" ,"3":"Track 3" ,"4":"Track 4" ,"5":"Track 5" }'),
('1', 652, '9', '315', '{ "1":"Track 1" , "2":"Track 2" ,"3":"Track 3" ,"4":"Track 4" ,"5":"Track 5" }'),
('1', 653, '10', '315', '{ "1":"Track 1" , "2":"Track 2" ,"3":"Track 3" ,"4":"Track 4" ,"5":"Track 5" }'),
('1', 654, '1', '316', '{ "1":"Track 1" , "2":"Track 2" ,"3":"Track 3" ,"4":"Track 4" ,"5":"Track 5" }'),
('1', 655, '2', '316', '{ "1":"Track 1" , "2":"Track 2" ,"3":"Track 3" ,"4":"Track 4" ,"5":"Track 5" }'),
('1', 656, '1', '317', '{ "1":"Track 1" , "2":"Track 2" ,"3":"Track 3" ,"4":"Track 4" ,"5":"Track 5" }'),
('1', 657, '2', '317', '{ "1":"Track 1" , "2":"Track 2" ,"3":"Track 3" ,"4":"Track 4" ,"5":"Track 5" }'),
('1', 658, '1', '318', '{ "1":"Track 1" , "2":"Track 2" ,"3":"Track 3" ,"4":"Track 4" ,"5":"Track 5" }'),
('1', 659, '2', '318', '{ "1":"Track 1" , "2":"Track 2" ,"3":"Track 3" ,"4":"Track 4" ,"5":"Track 5" }'),
('1', 660, '1', '319', '{ "1":"Track 1" , "2":"Track 2" ,"3":"Track 3" ,"4":"Track 4" ,"5":"Track 5" }'),
('1', 661, '2', '319', '{ "1":"Track 1" , "2":"Track 2" ,"3":"Track 3" ,"4":"Track 4" ,"5":"Track 5" }');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=283 ;

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
(275, 373, 'Bananna', '2', 'yes'),
(276, 373, 'Oat Meal', '1', 'yes'),
(277, 373, 'Almonds', '1', 'yes'),
(278, 373, 'Milk', '3', 'yes'),
(279, 373, 'Steak', '4', 'yes'),
(280, 373, 'Turkey', '4', 'yes'),
(281, 373, 'Chicken', '4', 'yes'),
(282, 373, 'Pork', '4', 'yes');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=245 ;

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
(242, 'WEIGHT LOSS', 'lose 2 pounds', '', '371', 't', 'Jan de Werd', '2012-08-13 12:00:00', 'no'),
(243, 'get thicker', 'asdf', '386', '386', 'c', 'Jordan Jordan', '2012-08-31 12:00:00', 'yes'),
(244, 'get stronger', 'asdf', '386', '386', 'c', 'Jordan Jordan', '2012-08-09 12:00:00', 'yes');

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
('360', '367'),
('358', '368'),
('360', '369'),
('360', '370'),
('361', '371'),
('361', '372'),
('363', '373'),
('363', '375'),
('363', '377'),
('363', '376'),
('364', '373'),
('366', '378'),
('367', '379'),
('366', '379'),
('366', '380'),
('366', '381'),
('368', '382'),
('368', '383'),
('371', '384'),
('371', '385'),
('373', '386'),
('373', '387');

-- --------------------------------------------------------

--
-- Table structure for table `learning_obj`
--

CREATE TABLE IF NOT EXISTS `learning_obj` (
  `ID_auth_e` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `company_id_e` varchar(200) NOT NULL,
  `name_e` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description_e` varchar(10000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `sender_type_e` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `author_id_e` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `seen_org_e` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'yes',
  `seen_cego_e` varchar(10) NOT NULL DEFAULT 'no',
  `status_e` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'pending',
  `session_id_e` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID_auth_e`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=445 ;

--
-- Dumping data for table `learning_obj`
--

INSERT INTO `learning_obj` (`ID_auth_e`, `company_id_e`, `name_e`, `description_e`, `sender_type_e`, `author_id_e`, `seen_org_e`, `seen_cego_e`, `status_e`, `session_id_e`) VALUES
(442, '164', 'Aaron O''brien with Aaron Company LLC', 'tiger prawn cat', '1', '173', 'yes', 'no', 'pending', '470'),
(421, '164', 'Aaron O''brien with Aaron Company LLC', 'aaasdf', '1', '173', 'yes', 'no', 'pending', '470'),
(443, '164', 'Aaron O''brien with Aaron Company LLC', 'asdfassdf ', '1', '173', 'yes', 'no', 'pending', '470'),
(438, '164', 'Aaron O''brien with Aaron Company LLC', 'asdf', '1', '173', 'yes', 'no', 'pending', '470'),
(444, '164', 'Aaron O''brien with Aaron Company LLC', 'asdfasdf', '1', '173', 'yes', 'no', 'pending', '470'),
(436, '164', 'Aaron O''brien with Aaron Company LLC', 'asdf asdf ', '1', '173', 'yes', 'no', 'pending', '461'),
(426, '164', 'Aaron O''brien with Aaron Company LLC', 'test 10', '1', '173', 'yes', 'no', 'pending', '470'),
(427, '164', 'Aaron O''brien with Aaron Company LLC', 'testing another', '1', '173', 'yes', 'no', 'pending', '470'),
(435, '164', 'Aaron O''brien with Aaron Company LLC', 'asdf asdf ', '1', '173', 'yes', 'no', 'pending', '461'),
(428, '164', 'Aaron O''brien with Aaron Company LLC', 'asdf asdf asdf asdf ', '1', '173', 'yes', 'no', 'pending', '470'),
(429, '164', 'Aaron O''brien with Aaron Company LLC', 'asdf asdf asdf asdf ', '1', '173', 'yes', 'no', 'pending', '470'),
(430, '164', 'Aaron O''brien with Aaron Company LLC', ' testing antoher one', '1', '173', 'yes', 'no', 'pending', '470'),
(431, '164', 'Aaron O''brien with Aaron Company LLC', 'testing again', '1', '173', 'yes', 'no', 'pending', '470'),
(432, '164', 'Aaron O''brien with Aaron Company LLC', 'asdf', '1', '173', 'yes', 'no', 'pending', '470'),
(433, '164', 'Aaron O''brien with Aaron Company LLC', 'asdf asdf ', '1', '173', 'yes', 'no', 'pending', '461'),
(434, '164', 'Aaron O''brien with Aaron Company LLC', 'asdf asdf ', '1', '173', 'yes', 'no', 'pending', '461'),
(418, '164', 'Aaron O''brien with Aaron Company LLC', 'is this working?', '1', '173', 'yes', 'no', 'pending', '470'),
(417, '0', 'Aaron O''brien with Aaron Company LLC', 'whats up with this one?', '1', '173', 'yes', 'no', 'pending', '470'),
(440, '164', 'Aaron O''brien with Aaron Company LLC', 'asdf', '1', '173', 'yes', 'no', 'pending', '470');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=206 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`ID_auth_m`, `message_body_m`, `time_sent_m`, `sender_id_m`, `reciever_id_m`, `sender_name_m`, `reciever_name_m`, `sender_type_m`, `read_m`) VALUES
(151, 'asdf aklsdfj akl; sdjfl;kasj dfkl;aj sdl;kfjasl;kdfjal;skdjf aljksdf\r\n\r\n\r\nas;dlfkj a;sdlk dfj\r\nasldfkj a;skldfj \r\n\r\n\r\nasl;dfkj ;lk \r\nasdflk j', '2012-07-07 15:22:00', '172t', '356c', 'Aaron DuChateau', 'r r', 't', 'yes'),
(150, 'asdf', '2012-07-07 15:22:00', '172t', '362c', 'Aaron DuChateau', 't t', 't', ''),
(152, 'hey dude, it was great to meet with you the other day, lets meet up soon and stuff', '2012-07-07 15:23:00', '172t', '356c', 'Aaron DuChateau', 'r r', 't', 'yes'),
(153, 'hey lets talk about my throid', '2012-07-07 15:25:00', '172t', '356c', 'Aaron DuChateau', 'r r', 't', 'yes'),
(154, ' asldkj fal;k asdjkfl;aksj dfl;kaj sd;flkja sd;lkfj a;sldk sdfj;akls asdf', '2012-07-07 15:34:00', '172t', '356c', 'Aaron DuChateau', 'r r', 't', 'yes'),
(155, 'asdfasdf asdf asdf asdf asdf asdfasdf asdf asdf asd ', '2012-07-07 15:34:00', '172t', '358c', 'Aaron DuChateau', 'a a', 't', ''),
(156, 'asdf asdf asdf asd fasd fas df asdf asd fasdf asdf asdf a', '2012-07-07 15:34:00', '172t', '361c', 'Aaron DuChateau', 'Bob Sender', 't', ''),
(157, 'asdf asdf asdf asdf asdf asdf asd f', '2012-07-07 15:34:00', '172t', '360c', 'Aaron DuChateau', 'Greg Donahoe', 't', ''),
(158, 'asdf', '2012-07-07 16:30:00', '172t', '356c', 'Aaron DuChateau', 'r r', 't', 'yes'),
(159, 'asdf', '2012-07-07 16:30:00', '172t', '358c', 'Aaron DuChateau', 'a a', 't', ''),
(160, 'asdf', '2012-07-07 16:30:00', '172t', '362c', 'Aaron DuChateau', 't t', 't', ''),
(161, 'asdf', '2012-07-07 16:30:00', '172t', '362c', 'Aaron DuChateau', 't t', 't', ''),
(162, 'asdf', '2012-07-07 16:30:00', '172t', '362c', 'Aaron DuChateau', 't t', 't', ''),
(163, 'asdf', '2012-07-07 16:30:00', '172t', '362c', 'Aaron DuChateau', 't t', 't', ''),
(164, 'asdf', '2012-07-07 16:30:00', '172t', '362c', 'Aaron DuChateau', 't t', 't', ''),
(165, 'asdf', '2012-07-07 16:30:00', '172t', '361c', 'Aaron DuChateau', 'Bob Sender', 't', ''),
(166, 'asdf', '2012-07-07 16:30:00', '172t', '362c', 'Aaron DuChateau', 't t', 't', ''),
(167, 'asdf bat bat boy boy', '2012-07-07 16:30:00', '362c', '172t', 't t', 'Aaron DuChateau', 'c', ''),
(168, 'asdf bat bat boy boy 2', '2012-07-07 16:30:00', '362c', '172t', 't t', 'Aaron DuChateau', 'c', ''),
(169, 'asdf bat bat boy boy 3', '2012-07-07 16:30:00', '362c', '172t', 't t', 'Aaron DuChateau', 'c', ''),
(170, 'asl;dkgfal;sdkjgs', '2012-07-07 17:24:00', '172t', '362c', 'Aaron DuChateau', 't t', 't', ''),
(171, 'asdf asdf asdf asdf ', '2012-07-08 11:50:00', '172t', '362c', 'Aaron DuChateau', 't t', 't', ''),
(172, 'new message for you!', '2012-07-08 14:40:00', '172t', '362c', 'Aaron DuChateau', 't t', 't', 'no'),
(173, 'alot of text alot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of text\r\n\r\n\r\nalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of text', '2012-07-08 14:40:00', '172t', '362c', 'Aaron DuChateau', 't t', 't', 'no'),
(174, 'alot of text alot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of text\r\n\r\n\r\nalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of textalot of text', '2012-07-08 14:40:00', '172t', '362c', 'Aaron DuChateau', 't t', 't', 'no'),
(175, 'this is alot of text this is alot of textthis is alot of textthis is alot of textthis is alot of textthis is alot of textthis is alot of textthis is alot of textthis is alot of textthis is alot of textthis is alot of textthis is alot of textthis is alot of textthis is alot of textthis is alot of textthis is alot of text\r\n\r\nthis is alot of textthis is alot of textthis is alot of textthis is alot of text\r\n\r\n\r\nthis is alot of text\r\n\r\nthis is alot of textthis is alot of textthis is alot of textthis is alot of textthis is alot of textthis is alot of textthis is alot of textthis is alot of text\r\n\r\nthis is alot of text', '2012-07-08 14:56:00', '172t', '362c', 'Aaron DuChateau', 't t', 't', 'no'),
(176, 't this is alot of textthis is alot of textthis is alot of textthis is alot of textthis is alot of textthis is alot of textthis is alot of textthis is alot of textthis is alot of textthis is alot of textthis is alot of textthis is alot\r\n\r\n\r\n of textthis is alot of textthis is alot of textthis is alot of text this is alot of textthis is \r\n\r\nalot of textthis is alot of textthis is alot of text this is alot of text this is alot of textthis is alot of textthis is alot of textthis is alot of textthis is alot of textthis is \r\n\r\nalot of textthis is alot of textthis is alot of text this is alot of text', '2012-07-08 14:58:00', '172t', '362c', 'Aaron DuChateau', 't t', 't', 'no'),
(177, 'asdf\r\n\r\n\r\nasdf\r\n\r\nasdf', '2012-07-08 14:58:00', '172t', '362c', 'Aaron DuChateau', 't t', 't', 'no'),
(178, 'buffalo<br>asdf\r\n\r\nasdf\r\n\r\n\r\nassdf<br>asldkfj<br>akl;sdj<br>fl;aksdj<br>f;alksdjf<br>alskdf<br>asldfhk<br>ahsdf\r\n\r\nasdkjfh<br>', '2012-07-08 15:01:00', '172t', '362c', 'Aaron DuChateau', 't t', 't', 'no'),
(179, 'asdfka<br>sdkljf<br>alskdj<br>f\r\nasdf\r\n\r\nasdfasdfasdf\r\n\r\nasdfasdf\r\n\r\nasdfasdfasdf', '2012-07-08 15:03:00', '172t', '362c', 'Aaron DuChateau', 't t', 't', 'no'),
(180, 't<br><br>this<br><br>is<br><br>alot<br><br>of<br><br>textthis<br><br>is<br><br>alot<br><br>of<br><br>textthis<br><br>is<br><br>alot<br><br>of<br><br>textthis<br><br>is<br><br>alot<br><br>of<br><br>textthis<br><br>is<br><br>alot<br><br>of<br><br>textthis<br><br>is<br><br>alot<br><br>of<br><br>textthis<br><br>is<br><br>alot<br><br>of<br><br>textthis<br><br>is<br><br>alot<br><br>of<br><br>textthis<br><br>is<br><br>alot<br><br>of<br><br>textthis<br><br>is<br><br>alot<br><br>of<br><br>textthis<br><br>is<br><br>alot<br><br>of<br><br>textthis<br><br>is<br><br>alot<br><br>of<br><br>textthis<br><br>is<br><br>alot<br><br>of<br><br>textthis<br><br>is<br><br>alot<br><br>of<br><br>textthis<br><br>is<br><br>alot<br><br>of<br><br>text<br><br>this<br><br>is<br><br>alot<br><br>\r\n\r\nof<br><br>textthis<br><br>is<br><br>alot<br><br>of<br><br>textthis<br><br>is<br><br>alot<br><br>of<br><br>textthis<br><br>is<br><br>alot<br><br>of<br><br>text<br><br>this<br><br>is<br><br>alot<br><br>of<br><br>text<br><br>this<br><br>is<br><br>alot<br><br>of<br><br>textthis<br><br>is<br><br>alot<br><br>of<br><br>textthis<br><br>is<br><br>alot<br><br>of<br><br>textthis<br><br>is<br><br>alot<br><br>of<br><br>textthis<br><br>is<br><br>alot<br><br>of<br><br>textthis<br><br>is<br><br>alot<br><br>of<br><br>textthis<br><br>is<br><br>alot<br><br>of<br><br>textthis<br><br>is<br><br>alot<br><br>of<br><br>text<br><br>this<br><br>is<br><br>alot<br><br>of<br><br>text', '2012-07-08 15:04:00', '172t', '362c', 'Aaron DuChateau', 't t', 't', 'no'),
(181, 'hey<br><br>there<br><br>Aaron!<br><br>very<br><br>nice<br><br>to<br><br>meet<br><br>you\r\n\r\nI<br><br>am<br><br>interested<br><br>in<br><br>etc\r\n\r\ndo<br><br>you<br><br>have<br><br>any<br><br>interste', '2012-07-08 15:05:00', '172t', '362c', 'Aaron DuChateau', 't t', 't', 'no'),
(182, 'hey<br>there<br>aaron<br>\r\n\r\ndo<br>you<br>ahve<br>any<br>interst<br>in<br>working<br>long<br>shitty<br>hours\r\n\r\ngive<br>me<br>a<br>call<br>if<br>you<br>do', '2012-07-08 15:06:00', '172t', '362c', 'Aaron DuChateau', 't t', 't', 'no'),
(183, 'hey there aaron do you have\r\n\r\nany inetrest in \r\n\r\nasdf', '2012-07-08 15:08:00', '172t', '362c', 'Aaron DuChateau', 't t', 't', 'no'),
(184, 'hey there aaron do you\r\n\r\nhave any interest in \r\n\r\nthis', '2012-07-08 15:13:00', '172t', '362c', 'Aaron DuChateau', 't t', 't', 'no'),
(185, 'hey there\r\n\r\ndo you have\r\n\r\nany', '2012-07-08 15:14:00', '172t', '362c', 'Aaron DuChateau', 't t', 't', 'no'),
(186, 'asdf<br />\r\n<br />\r\nasdf<br />\r\n<br />\r\nasdf', '2012-07-08 15:14:00', '172t', '362c', 'Aaron DuChateau', 't t', 't', 'no'),
(187, 'dog dog dog<br />\r\n<br />\r\ndoggy dog dog', '2012-07-08 15:14:00', '172t', '362c', 'Aaron DuChateau', 't t', 't', 'no'),
(188, 'testing 1testing 1testing 1testing 1testing 1testing 1testing 1testing 1testing 1testing 1testing 1testing 1testing 1testing 1testing 1<br />\r\n<br />\r\n<br />\r\ntesting 1testing 1testing 1testing 1testing 1testing 1testing 1testing 1testing 1testing 1testing 1testing 1', '2012-07-08 15:16:00', '172t', '362c', 'Aaron DuChateau', 't t', 't', 'no'),
(189, 'testing 2 testing 2testing 2testing 2testing 2testing 2testing 2testing 2testing 2testing 2testing 2testing 2testing 2testing 2<br />\r\ntesting 2testing 2testing 2<br />\r\n<br />\r\n<br />\r\ntesting 2testing 2testing 2testing 2testing 2testing 2testing 2testing 2', '2012-07-08 15:16:47', '172t', '362c', 'Aaron DuChateau', 't t', 't', 'no'),
(190, 'working', '2012-07-08 15:40:14', '172t', '362c', 'Aaron DuChateau', 't t', 't', 'no'),
(191, 'i havn''t testted this yet', '2012-07-08 15:57:46', '172t', '362c', 'Aaron DuChateau', 't t', 't', 'no'),
(192, 'asdasdgags asdf asdf ', '2012-07-12 22:02:03', '172t', '357c', 'Aaron DuChateau', 'g g', 't', 'no'),
(193, 'asfgadfasdf', '2012-07-15 09:38:43', '172t', '362c', 'Aaron DuChateau', 't t', 't', 'no'),
(194, 'Whats up Jordan!!!<br />\r\n', '2012-07-16 20:54:02', '360t', '369c', 'Jan T De Werd', 'Kaden Gibson', 't', 'no'),
(195, 'What up Jordan', '2012-07-16 21:03:50', '360t', '367c', 'Jan T De Werd', 'Jordan Gibson', 't', 'no'),
(196, 'what up!!! I want yinjan', '2012-07-20 13:44:13', '366t', '379c', 'tommy trainer', 'sarah client', 't', 'yes'),
(197, 'yuck!!!!!!', '2012-07-20 13:48:59', '379c', '366t', 'sarah client', 'tommy trainer', 'c', 'yes'),
(198, 'Just do it!!!', '2012-07-30 15:19:07', '371t', '384c', 'Jan de Werd', 'Ron G', 't', 'yes'),
(199, 'Go Ducks!!!', '2012-07-30 15:20:43', '384c', '371t', 'Ron G', 'Jan de Werd', 'c', 'no'),
(200, 'What up J man', '2012-08-05 23:39:36', '373t', '386c', 'Shellyann Gibson', 'Jordan Gibson', 't', 'yes'),
(201, 'Not Much', '2012-08-05 23:40:20', '386c', '373t', 'Jordan Gibson', 'Shellyann Gibson', 'c', 'yes'),
(202, 'How the workouts going and do you have any questions.', '2012-08-05 23:41:47', '373t', '386c', 'Shellyann Gibson', 'Jordan Gibson', 't', 'yes'),
(203, 'On the next weigh in and weigh out, I do have some.', '2012-08-05 23:41:58', '386c', '373t', 'Jordan Gibson', 'Shellyann Gibson', 'c', 'yes'),
(204, 'Sounds good see you then', '2012-08-05 23:42:43', '373t', '386c', 'Shellyann Gibson', 'Jordan Gibson', 't', 'yes'),
(205, 'k', '2012-08-05 23:44:33', '386c', '373t', 'Jordan Gibson', 'Shellyann Gibson', 'c', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `presenters`
--

CREATE TABLE IF NOT EXISTS `presenters` (
  `presenter_id_pp` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `presenter_name_pp` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no name provided',
  `presenter_title_pp` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no title provided',
  `presenter_bio_pp` varchar(5000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no bio provided',
  `company_id_pp` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`presenter_id_pp`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `presenters`
--

INSERT INTO `presenters` (`presenter_id_pp`, `presenter_name_pp`, `presenter_title_pp`, `presenter_bio_pp`, `company_id_pp`) VALUES
(1, 'noValue', '', 'no bio provided', ''),
(2, 'noValue', '', 'no bio provided', ''),
(3, '366', 'abc gymnasium', 'no bio provided', ''),
(4, '373', 'ABC Fitness', 'no bio provided', ''),
(5, '375', 'abcd fitness', 'no bio provided', ''),
(6, '376', 'CE Company', 'no bio provided', ''),
(7, 'Jane Presenter', 'Certified Presenter', 'Bio information blah blah bloh', ''),
(8, 'John Presenter', 'Presnet titel', 'asdf asdf asdfasdfasdf', '164'),
(16, 'asdf', 'asdf', 'asdf', '164'),
(17, 'Amy Scontish', 'Professor loriete', 'Amy has worked extensively with people. ', '164'),
(21, 'Saul', 'badass', 'he''s good at shit', '164'),
(22, 'burger', 'no title provided', 'no bio provided', '164'),
(23, 'baby boy', 'no title provided', 'no bio provided', '164');

-- --------------------------------------------------------

--
-- Table structure for table `presenter_session_join`
--

CREATE TABLE IF NOT EXISTS `presenter_session_join` (
  `presenter_id_jp` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `session_id_jp` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `presenter_session_join`
--

INSERT INTO `presenter_session_join` (`presenter_id_jp`, `session_id_jp`) VALUES
('23', '477'),
('17', '478'),
('16', '478'),
('16', '473'),
('17', '473'),
('21', '470'),
('20', '469'),
('20', '468'),
('17', '465'),
('16', '465'),
('17', '468');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=178 ;

--
-- Dumping data for table `report_diet`
--

INSERT INTO `report_diet` (`ID_auth_rd`, `dtdm_link_rd`, `json_goal_rd`, `json_actual_rd`) VALUES
(173, '365', '[[2,0,0,0,0],[1,2,3,4,0],[0,0,0,0,0],[0,0,0,0,0],[0,0,0,0,0],[0,0,0,0,0],[0,1,0,0,0],[2,0,0,0,0],[2,0,0,0,0],[1,2,3,4,0],[0,0,0,0,0],[0,0,0,0,0],[0,0,0,0,0],[0,0,0,0,0],[0,1,0,0,0],[2,0,0,0,0],[2,0,0,0,0],[1,2,3,4,0],[0,0,0,0,0],[0,0,0,0,0],[0,0,0,0,0],[0,0,0,0,0],[0,1,0,0,0],[2,0,0,0,0]]', '[[0,0,0,0,0,"no"],["5","5","5","5","0","yes"],["5","5","0","10","0","yes"],["9","0","0","0","0","yes"],["0","0","0","0","0","yes"],["0","0","0","0","0","yes"],["0","1","0","0","0","yes"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],["0","0","0","0","0","yes"],["0","0","0","0","0","yes"],["3","0","0","0","0","yes"],["0","1","0","0","0","yes"],["2","0","0","0","0","yes"],[0,0,0,0,0,"no"],["15","20","3","4","0","yes"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"]]'),
(174, '366', '[[2,0,0,0,0],[1,2,3,4,0],[0,0,0,0,0],[0,0,0,0,0],[0,0,0,0,0],[0,0,0,0,0],[0,1,0,0,0],[2,0,0,0,0],[2,0,0,0,0],[1,2,3,4,0],[0,0,0,0,0],[0,0,0,0,0]]', '[["0","5","0","0","0","yes"],["1","2","3","4","0","yes"],[0,0,0,0,0,"no"],["10","0","0","0","0","yes"],["20","8","0","0","0","yes"],["0","0","0","0","0","yes"],[0,0,0,0,0,"no"],["11","0","10","0","0","yes"],["6","5","0","0","0","yes"],[0,0,0,0,0,"no"],["0","0","0","5","0","yes"],["2","0","0","0","0","yes"]]'),
(175, '369', '[[0,2,0,0,0],[1,2,3,4,0],[0,0,0,0,0],[0,0,0,0,0],[0,0,0,0,0],[0,0,0,0,0],[0,1,0,0,0],[2,0,0,0,0],[0,2,0,0,0],[1,2,3,4,0],[0,0,0,0,0],[0,0,0,0,0],[0,0,0,0,0],[0,0,0,0,0],[0,1,0,0,0],[2,0,0,0,0]]', '[[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"]]'),
(176, '393', '[[0,0,0,0,0],[0,0,0,0,0],[0,0,0,0,0],[0,0,0,0,0]]', '[[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"]]'),
(177, '394', '[[6,0,0,2,0],[2,0,0,0,0],[0,1,2,0,0],[0,0,0,0,0],[0,0,0,0,0],[0,0,0,0,0],[1,0,0,0,0],[0,0,0,0,0],[2,0,0,0,0],[6,0,0,0,0],[12,0,0,0,0],[0,0,0,12,0],[6,0,0,2,0],[2,0,0,0,0],[0,1,2,0,0],[0,0,0,0,0],[0,0,0,0,0],[0,0,0,0,0],[1,0,0,0,0],[0,0,0,0,0],[2,0,0,0,0],[6,0,0,0,0],[12,0,0,0,0],[0,0,0,12,0],[6,0,0,2,0]]', '[[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"],[0,0,0,0,0,"no"]]');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=205 ;

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
(171, '348', '[["10","7"],["0","0"],["5","10"],["11","7"],["15","12"],["20","17"],["11","10"],["10","7"],["0","0"],["5","10"],["11","7"],["15","12"],["20","17"],["11","10"],["10","7"],["0","0"],["5","10"],["11","7"],["15","12"],["20","17"],["11","10"],["10","7"],["0","0"],["5","10"],["11","7"],["15","12"],["20","17"],["11","10"]]', '[["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["7","6","yes"],["0","0","no"],["0","0","no"],["10","7","yes"],["0","0","no"],["0","0","no"],["5","3","yes"],["15","12","yes"],["10","8","yes"],["0","0","no"],["10","7","yes"],["0","0","no"],["0","0","no"],["0","0","no"],["15","12","yes"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"]]'),
(172, '349', '[["10","7"],["0","0"],["5","10"],["11","7"],["15","12"],["20","17"],["11","10"],["10","7"],["0","0"],["5","10"],["11","7"],["15","12"],["20","17"],["11","10"],["10","7"],["0","0"],["5","10"],["11","7"]]', '[["10","7","yes"],["0","0","no"],["5","10","yes"],["11","7","yes"],["7","6","yes"],["20","17","yes"],["11","10","yes"],["10","7","yes"],["0","0","no"],["5","10","yes"],["5","3","yes"],["15","12","yes"],["10","8","yes"],["11","10","yes"],["5","3","yes"],["0","0","no"],["2","5","yes"],["0","0","no"]]'),
(173, '367', '[["10","7"],["0","0"],["5","10"],["11","7"]]', '[["10","7","yes"],["0","0","no"],["2","5","yes"],["11","7","yes"]]'),
(174, '368', '[["10","7"],["0","0"],["5","10"],["11","7"]]', '[["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"]]'),
(175, '370', '[["10","7"],["0","0"],["5","10"],["11","7"],["15","12"],["20","17"],["11","10"],["10","7"],["0","0"]]', '[["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"]]'),
(176, '371', '[["10","7"],["0","0"],["5","10"],["11","7"]]', '[["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"]]'),
(177, '372', '[["10","7"],["0","0"]]', '[["0","0","no"],["0","0","no"]]'),
(178, '373', '[["10","7"],["0","0"],["5","10"],["11","7"],["15","12"],["20","17"],["11","10"],["10","7"],["0","0"],["5","10"],["11","7"],["15","12"],["20","17"],["11","10"],["10","7"],["0","0"],["5","10"],["11","7"],["15","12"]]', '[["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"]]'),
(179, '374', '[["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"]]', '[["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"]]'),
(180, '375', '[["0","5"],["0","5"],["0","5"],["0","5"],["0","5"],["0","5"]]', '[["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"]]'),
(181, '376', '[["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"]]', '[["0","0","yes"],["0","0","yes"],["0","0","yes"],["0","0","yes"],["0","0","yes"],["0","0","no"],["0","0","no"],["0","0","no"]]'),
(182, '377', '[["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"]]', '[["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"]]'),
(183, '378', '[["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"]]', '[["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","yes"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"]]'),
(184, '379', '[["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"]]', '[["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","yes"],["0","0","no"],["0","0","yes"],["0","0","no"],["0","0","no"],["0","0","yes"],["0","0","yes"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"]]'),
(185, '380', '[["5","5"]]', '[["5","5","yes"]]'),
(186, '381', '[["0","0"],["0","0"]]', '[["0","0","no"],["0","0","no"]]'),
(187, '382', '[["0","0"]]', '[["0","0","no"]]'),
(188, '383', '[["0","0"]]', '[["0","0","no"]]'),
(189, '384', '[["0","5"]]', '[["0","0","no"]]'),
(190, '385', '[["0","0"]]', '[["0","0","no"]]'),
(191, '386', '[["0","0"]]', '[["0","0","no"]]'),
(192, '387', '[["0","0"]]', '[["0","0","no"]]'),
(193, '388', '[["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"],["0","0"]]', '[["0","0","yes"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"],["0","0","no"]]'),
(194, '395', '[["0","0"]]', '[["0","0","yes"]]'),
(195, '396', '[["0","0"]]', '[["0","0","yes"]]'),
(196, '397', '[["0","0"]]', '[["0","0","yes"]]'),
(197, '398', '[["5","0"]]', '[["0","0","no"]]'),
(198, '399', '[["0","5"]]', '[["0","5","yes"]]'),
(199, '400', '[["0","5"]]', '[["0","5","yes"]]'),
(200, '401', '[["5","0"]]', '[["5","0","yes"]]'),
(201, '402', '[["5","5"]]', '[["0","0","no"]]'),
(202, '403', '[["5","5"]]', '[["0","0","no"]]'),
(203, '404', '[["5","0"]]', '[["0","0","no"]]'),
(204, '405', '[["0","0"],["0","0"]]', '[["0","0","no"],["0","0","no"]]');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE IF NOT EXISTS `sessions` (
  `ID_auth_sess` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `track_sess` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `start_sess` datetime NOT NULL,
  `end_sess` datetime NOT NULL,
  `booking_id_sess` varchar(25) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL DEFAULT 'no',
  `company_id_sess` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no',
  `user_created_id_sess` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name_sess` varchar(900) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no name',
  `type_sbl_sess` varchar(25) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=399 ;

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
(384, '2 mile Run', '7', '', '360', 'yes'),
(385, 'Chest', '1', 'Flate Bench press\r\n3 set \r\n12 reps\r\n\r\nIncline Bench press\r\n3 sets\r\n12 reps\r\n				 						', '368', 'yes'),
(386, 'Vigorous Walking 30\\'' TO 60\\''', '30', 'Maintain heart- rate/exertion level at and above (self assessed) 50% of your maximum after 10\\'' warm-up. DAILY', '371', 'yes'),
(387, 'Bench/Triceps', '30', 'Monday/Thursday\n5 sets bench press up to 12 reps sets 2 thru 4\nincrease weight sets 2 thru 4\nwarm-up and cool down with light weight try to do 20 reps (just the bar) (sets 1 and 5)\n\n3 sets incline press (try to increase weight each set)\n\n3 sets triceps presses\n-one press down\n-one press parallel to floor\n-one press vertical', '371', 'yes'),
(388, 'Back?Biceps', '30', 'Tuesdy/Friday \n\n5 sets Pulldowns warmup and cool down set 1 and 5\nincrease weight set 2 thru 4\n\n3 sets per side one arm side pulls w/dumbells\n\n5 sets curls 2 with barbells and 3 with with dumbells', '371', 'yes'),
(389, 'legs', '30', 'Wed/Sat\n\n5 sets squats\n5 sets leg extension\n5 sets leg curls', '371', 'yes'),
(390, 'Chest/Triceps', '30', '3 sets bench press\r\n3 sets incline bench\r\n3 sets triceps press downs			 									 						', '371', 'yes'),
(391, 'Tabata', '30', '', '371', 'yes'),
(392, 'Chest', '1', '			 									 						', '373', 'yes'),
(393, 'Back', '1', '', '373', 'yes'),
(394, 'Legs', '1', '', '373', 'yes'),
(395, 'Tri', '1', '			 						', '373', 'yes'),
(396, 'Bi', '1', '			 						', '373', 'yes'),
(397, 'Abs', '', '', '373', 'yes'),
(398, 'Tabat', '1', '', '373', 'yes');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
