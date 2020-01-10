-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 10, 2020 at 06:41 PM
-- Server version: 5.7.21-20-beget-5.7.21-20-1-log
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lfatal1_ka_cmf`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogs`
--
-- Creation: Jul 25, 2018 at 07:49 PM
-- Last update: Jan 09, 2020 at 08:08 PM
--

DROP TABLE IF EXISTS `adminlogs`;
CREATE TABLE `adminlogs` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `modul` varchar(500) NOT NULL,
  `text` varchar(2000) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `browser` varchar(500) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `adminlogs`
--

INSERT INTO `adminlogs` (`id`, `id_user`, `modul`, `text`, `ip`, `browser`, `time`) VALUES
(1, 1, 'Logs', 'Cleared Admin Logs', '46.217.151.1', 'Mozilla Firefox, Version: 61.0, Windows', 1532548177),
(2, 1, 'Settings', 'Settings has been Updated', '46.217.151.1', 'Mozilla Firefox, Version: 61.0, Windows', 1532549252),
(3, 1, 'Sitemap', 'Sitemap has been Generated', '77.29.5.31', 'Mozilla Firefox, Version: 72.0, Windows', 1578600483);

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--
-- Creation: Oct 02, 2017 at 08:29 PM
-- Last update: Dec 11, 2017 at 09:44 AM
--

DROP TABLE IF EXISTS `ads`;
CREATE TABLE `ads` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `link` varchar(500) NOT NULL,
  `name` varchar(500) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `type` varchar(15) NOT NULL,
  `style` varchar(3) NOT NULL,
  `count` int(11) NOT NULL,
  `target` int(1) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ads_stat`
--
-- Creation: Mar 22, 2017 at 07:17 AM
-- Last update: Dec 11, 2017 at 09:44 AM
-- Last check: Jul 11, 2017 at 02:14 AM
--

DROP TABLE IF EXISTS `ads_stat`;
CREATE TABLE `ads_stat` (
  `id` int(11) NOT NULL,
  `id_link` int(11) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `country` varchar(64) NOT NULL,
  `city` varchar(64) NOT NULL,
  `browser` varchar(200) NOT NULL,
  `region` varchar(100) NOT NULL,
  `lat` varchar(11) NOT NULL,
  `lng` varchar(11) NOT NULL,
  `referer` varchar(1024) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `antiflood`
--
-- Creation: Mar 22, 2017 at 07:17 AM
-- Last update: Jul 25, 2018 at 08:25 PM
-- Last check: Jul 11, 2017 at 02:14 AM
--

DROP TABLE IF EXISTS `antiflood`;
CREATE TABLE `antiflood` (
  `id` int(11) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `blacklist`
--
-- Creation: Mar 22, 2017 at 07:17 AM
-- Last update: Mar 21, 2018 at 11:27 AM
-- Last check: Jul 11, 2017 at 02:14 AM
--

DROP TABLE IF EXISTS `blacklist`;
CREATE TABLE `blacklist` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `bookmark`
--
-- Creation: Mar 22, 2017 at 07:17 AM
-- Last update: Sep 23, 2017 at 01:50 PM
-- Last check: Jul 11, 2017 at 02:14 AM
--

DROP TABLE IF EXISTS `bookmark`;
CREATE TABLE `bookmark` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `url` varchar(1024) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--
-- Creation: Aug 29, 2017 at 07:29 PM
-- Last update: Aug 04, 2018 at 02:54 PM
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `realid` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `translate` varchar(250) NOT NULL,
  `type` enum('0','1','2') NOT NULL DEFAULT '0',
  `countthread` int(11) NOT NULL DEFAULT '0',
  `countpost` int(11) NOT NULL DEFAULT '0',
  `keywords` varchar(2500) NOT NULL,
  `description` varchar(2500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `realid`, `name`, `translate`, `type`, `countthread`, `countpost`, `keywords`, `description`) VALUES
(2, 2, 'Users', 'users', '1', 1, 1, 'Users', 'Users'),
(3, 31, 'Private', 'private', '2', 0, 0, 'Private', 'Private'),
(1, 1, 'Public', 'public', '0', 1, 3, 'Public', 'Public');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--
-- Creation: Mar 22, 2017 at 07:17 AM
-- Last update: Jan 02, 2018 at 03:05 PM
-- Last check: Jul 11, 2017 at 02:14 AM
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `id_user`, `user_id`, `time`) VALUES
(3, 1, 3, 1514905550);

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--
-- Creation: Mar 22, 2017 at 07:17 AM
-- Last update: Mar 21, 2018 at 11:27 AM
-- Last check: Jul 11, 2017 at 02:14 AM
--

DROP TABLE IF EXISTS `friends`;
CREATE TABLE `friends` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0',
  `time` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `group_access`
--
-- Creation: Mar 22, 2017 at 07:17 AM
-- Last update: Jul 11, 2017 at 02:14 AM
-- Last check: Jul 11, 2017 at 02:14 AM
--

DROP TABLE IF EXISTS `group_access`;
CREATE TABLE `group_access` (
  `id` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--
-- Creation: Mar 22, 2017 at 07:17 AM
-- Last update: Jan 09, 2020 at 08:07 PM
-- Last check: Jul 11, 2017 at 02:14 AM
--

DROP TABLE IF EXISTS `history`;
CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `browser` varchar(500) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `id_user`, `ip`, `browser`, `time`) VALUES
(280, 1, '77.29.5.31', 'Mozilla Firefox, Version: 72.0, Windows', 1578600429),
(278, 1, '77.28.255.219', 'Mozilla Firefox, Version: 64.0, Windows', 1545589735),
(259, 3, '77.28.253.150', 'Mozilla Firefox, Version: 57.0, Windows', 1515695344),
(279, 3, '77.29.84.109', 'Mozilla Firefox, Version: 71.0, Windows', 1578503388),
(277, 1, '77.28.255.154', 'Mozilla Firefox, Version: 62.0, Windows', 1537349882),
(276, 1, '46.217.148.211', 'Mozilla Firefox, Version: 61.0, Windows', 1533187124),
(275, 1, '77.28.86.56', 'Google Chrome, Version: 67.0.3396.99, Windows', 1532775014),
(274, 3, '77.28.19.29', 'Google Chrome, Version: 67.0.3396.99, Windows', 1532622161),
(272, 1, '77.28.18.218', 'Google Chrome, Version: 67.0.3396.99, Windows', 1532527663),
(273, 1, '77.28.19.29', 'Google Chrome, Version: 67.0.3396.99, Windows', 1532622078),
(247, 3, '77.29.0.67', 'Google Chrome, Version: 55.0.2883.91, Linux', 1515307988);

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--
-- Creation: Mar 22, 2017 at 07:17 AM
-- Last update: Dec 06, 2017 at 08:47 PM
-- Last check: Jul 11, 2017 at 02:14 AM
--

DROP TABLE IF EXISTS `mail`;
CREATE TABLE `mail` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `text` varchar(5000) NOT NULL,
  `read` int(1) NOT NULL DEFAULT '0',
  `status` int(1) DEFAULT '1',
  `time` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mail_files`
--
-- Creation: Mar 22, 2017 at 07:17 AM
-- Last update: Jul 11, 2017 at 02:14 AM
-- Last check: Jul 11, 2017 at 02:14 AM
--

DROP TABLE IF EXISTS `mail_files`;
CREATE TABLE `mail_files` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `id_mail` int(11) NOT NULL,
  `file` varchar(500) NOT NULL,
  `type` varchar(11) NOT NULL,
  `size` varchar(11) NOT NULL,
  `timeload` int(11) NOT NULL,
  `loadcounts` int(11) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--
-- Creation: Mar 22, 2017 at 07:17 AM
-- Last update: Jan 20, 2018 at 02:43 AM
-- Last check: Jul 11, 2017 at 02:14 AM
--

DROP TABLE IF EXISTS `notice`;
CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `text` text NOT NULL,
  `url` varchar(1024) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1',
  `time` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `online`
--
-- Creation: Mar 22, 2017 at 07:17 AM
-- Last update: Jan 10, 2020 at 11:03 AM
-- Last check: Mar 12, 2019 at 10:42 AM
--

DROP TABLE IF EXISTS `online`;
CREATE TABLE `online` (
  `id_user` int(11) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `browser` varchar(500) NOT NULL,
  `referer` varchar(2500) NOT NULL,
  `type` enum('1','2') NOT NULL DEFAULT '1',
  `time` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `online`
--

INSERT INTO `online` (`id_user`, `ip`, `browser`, `referer`, `type`, `time`) VALUES
(0, '109.108.35.46', 'Google Chrome, Version: 67.0.3396.99, Windows', 'https://myforo.ru/forums/1.public', '2', 1578654180);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--
-- Creation: Sep 15, 2017 at 05:47 PM
-- Last update: Feb 11, 2018 at 01:06 PM
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `translate` varchar(500) NOT NULL,
  `text` text NOT NULL,
  `keywords` varchar(2500) NOT NULL,
  `description` varchar(2500) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `translate`, `text`, `keywords`, `description`, `time`) VALUES
(10, 'Contact', 'contact', '&amp;lt;p&amp;gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus diam erat, ultricies sed quam vel, lobortis ullamcorper dui. Integer purus purus, imperdiet in eleifend sed, gravida eget lorem. Sed aliquet sodales quam, eu consectetur sapien blandit eu. Integer elementum libero massa, sed tempus tellus euismod sed. Duis eu tortor tellus. Phasellus id enim sit amet nulla volutpat accumsan. Sed eget nisi aliquam, rutrum lectus a, pharetra libero. Cras dui lacus, fringilla id odio sed, placerat scelerisque mi. Suspendisse ultricies lacus at erat hendrerit mattis. Nunc ut urna vitae magna luctus sodales. Integer quis felis volutpat, facilisis quam at, condimentum eros. Sed scelerisque metus sed dapibus mattis. Aliquam venenatis vitae turpis ut scelerisque. Donec pellentesque, magna eu imperdiet tristique, tellus justo ullamcorper mauris, eu placerat augue sapien maximus neque.&amp;lt;/p&amp;gt;\r\n\r\n&amp;lt;p&amp;gt;Phasellus vel metus iaculis, rhoncus nibh ut, sollicitudin lectus. Nam malesuada blandit est, ut lacinia nibh. Maecenas finibus diam et dolor ornare rhoncus. Morbi molestie felis ut quam maximus iaculis. Integer pretium neque et lectus suscipit, quis vehicula odio imperdiet. Maecenas tincidunt neque lobortis ultricies mollis. Nulla sit amet purus nec leo gravida auctor.&amp;lt;/p&amp;gt;\r\n\r\n&amp;lt;p&amp;gt;Proin at auctor erat. Cras lobortis ligula massa, vel sollicitudin lacus iaculis quis. Mauris eget tristique velit. Nulla sed mollis quam. Nam metus turpis, tincidunt id faucibus pretium, sollicitudin ut nibh. Quisque volutpat metus sed volutpat facilisis. Morbi posuere sollicitudin neque a egestas. Suspendisse luctus sed orci et laoreet. Cras vel turpis imperdiet, scelerisque risus quis, laoreet lacus. Fusce nunc justo, pretium in feugiat non, facilisis in mauris. Cras venenatis tempus erat eget consequat.&amp;lt;/p&amp;gt;\r\n\r\n&amp;lt;p&amp;gt;Integer sagittis congue est, ut molestie lectus semper sed. Duis dolor arcu, malesuada sit amet cursus id, mattis sit amet orci. Etiam placerat ex a eros euismod, in condimentum enim euismod. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum efficitur, sapien ultrices lobortis pharetra, ante augue sagittis dolor, ut blandit velit lectus et eros. Sed dignissim porta neque, in auctor felis aliquam vel. Nam vitae sapien velit. Integer dignissim elit turpis, quis faucibus felis scelerisque sit amet. Nam est ex, eleifend eu scelerisque vel, rutrum eu urna. Maecenas et purus pellentesque, hendrerit nunc et, tincidunt nulla. Duis rhoncus congue ex, non euismod diam blandit eu. Nam in consectetur risus. Etiam velit justo, consectetur a ex ut, dictum maximus ligula. Etiam elementum quam in nulla fermentum tincidunt. Sed a fringilla erat. Phasellus at libero eros.&amp;lt;/p&amp;gt;\r\n\r\n&amp;lt;p&amp;gt;Etiam erat mauris, finibus commodo ex sit amet, scelerisque bibendum justo. Ut efficitur ultrices vulputate. Duis non dui non eros elementum varius. Aliquam convallis, quam vel consequat posuere, tortor augue luctus mauris, sit amet gravida urna diam a elit. Donec orci orci, tempus nec mattis tincidunt, porta non neque. Mauris fermentum, odio et tincidunt malesuada, mi justo tincidunt dolor, eget vehicula felis leo sed sapien. Pellentesque porttitor est nec mauris lacinia, at cursus sapien mollis. Praesent eget augue faucibus, rhoncus purus a, finibus metus. Aliquam lacus dolor, cursus vitae quam vel, fermentum consectetur mi. Morbi vel tortor sed lorem scelerisque tincidunt vel eget ipsum. Nulla lacinia sagittis lectus et bibendum. Nullam consectetur egestas leo id congue.&amp;lt;/p&amp;gt;', '', '', 1506174375),
(11, 'Terms', 'terms', '&amp;lt;p&amp;gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus diam erat, ultricies sed quam vel, lobortis ullamcorper dui. Integer purus purus, imperdiet in eleifend sed, gravida eget lorem. Sed aliquet sodales quam, eu consectetur sapien blandit eu. Integer elementum libero massa, sed tempus tellus euismod sed. Duis eu tortor tellus. Phasellus id enim sit amet nulla volutpat accumsan. Sed eget nisi aliquam, rutrum lectus a, pharetra libero. Cras dui lacus, fringilla id odio sed, placerat scelerisque mi. Suspendisse ultricies lacus at erat hendrerit mattis. Nunc ut urna vitae magna luctus sodales. Integer quis felis volutpat, facilisis quam at, condimentum eros. Sed scelerisque metus sed dapibus mattis. Aliquam venenatis vitae turpis ut scelerisque. Donec pellentesque, magna eu imperdiet tristique, tellus justo ullamcorper mauris, eu placerat augue sapien maximus neque.&amp;lt;/p&amp;gt;&amp;lt;p&amp;gt;Phasellus vel metus iaculis, rhoncus nibh ut, sollicitudin lectus. Nam malesuada blandit est, ut lacinia nibh. Maecenas finibus diam et dolor ornare rhoncus. Morbi molestie felis ut quam maximus iaculis. Integer pretium neque et lectus suscipit, quis vehicula odio imperdiet. Maecenas tincidunt neque lobortis ultricies mollis. Nulla sit amet purus nec leo gravida auctor.&amp;lt;/p&amp;gt;&amp;lt;p&amp;gt;Proin at auctor erat. Cras lobortis ligula massa, vel sollicitudin lacus iaculis quis. Mauris eget tristique velit. Nulla sed mollis quam. Nam metus turpis, tincidunt id faucibus pretium, sollicitudin ut nibh. Quisque volutpat metus sed volutpat facilisis. Morbi posuere sollicitudin neque a egestas. Suspendisse luctus sed orci et laoreet. Cras vel turpis imperdiet, scelerisque risus quis, laoreet lacus. Fusce nunc justo, pretium in feugiat non, facilisis in mauris. Cras venenatis tempus erat eget consequat.&amp;lt;/p&amp;gt;&amp;lt;p&amp;gt;Integer sagittis congue est, ut molestie lectus semper sed. Duis dolor arcu, malesuada sit amet cursus id, mattis sit amet orci. Etiam placerat ex a eros euismod, in condimentum enim euismod. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum efficitur, sapien ultrices lobortis pharetra, ante augue sagittis dolor, ut blandit velit lectus et eros. Sed dignissim porta neque, in auctor felis aliquam vel. Nam vitae sapien velit. Integer dignissim elit turpis, quis faucibus felis scelerisque sit amet. Nam est ex, eleifend eu scelerisque vel, rutrum eu urna. Maecenas et purus pellentesque, hendrerit nunc et, tincidunt nulla. Duis rhoncus congue ex, non euismod diam blandit eu. Nam in consectetur risus. Etiam velit justo, consectetur a ex ut, dictum maximus ligula. Etiam elementum quam in nulla fermentum tincidunt. Sed a fringilla erat. Phasellus at libero eros.&amp;lt;/p&amp;gt;&amp;lt;p&amp;gt;Etiam erat mauris, finibus commodo ex sit amet, scelerisque bibendum justo. Ut efficitur ultrices vulputate. Duis non dui non eros elementum varius. Aliquam convallis, quam vel consequat posuere, tortor augue luctus mauris, sit amet gravida urna diam a elit. Donec orci orci, tempus nec mattis tincidunt, porta non neque. Mauris fermentum, odio et tincidunt malesuada, mi justo tincidunt dolor, eget vehicula felis leo sed sapien. Pellentesque porttitor est nec mauris lacinia, at cursus sapien mollis. Praesent eget augue faucibus, rhoncus purus a, finibus metus. Aliquam lacus dolor, cursus vitae quam vel, fermentum consectetur mi. Morbi vel tortor sed lorem scelerisque tincidunt vel eget ipsum. Nulla lacinia sagittis lectus et bibendum. Nullam consectetur egestas leo id congue.&amp;lt;/p&amp;gt;', '', '', 1518349456),
(12, 'About us', 'about-us', '&amp;lt;p&amp;gt;&amp;lt;strong&amp;gt;Lorem&amp;lt;/strong&amp;gt; &amp;lt;em&amp;gt;ipsum&amp;lt;/em&amp;gt;&amp;lt;u&amp;gt; dolor&amp;lt;/u&amp;gt; sit amet, :admin: consectetur adipiscing elit. Phasellus diam erat, ultricies sed quam vel, lobortis ullamcorper dui. Integer purus purus, imperdiet in eleifend sed, gravida eget lorem. Sed aliquet sodales quam, eu consectetur sapien blandit eu. Integer elementum libero massa, sed tempus tellus euismod sed. Duis eu tortor tellus. Phasellus id enim sit amet nulla volutpat accumsan. Sed eget nisi aliquam, rutrum lectus a, pharetra libero. Cras dui lacus, fringilla id odio sed, placerat scelerisque mi. Suspendisse ultricies lacus at erat hendrerit mattis. Nunc ut urna vitae magna luctus sodales. Integer quis felis volutpat, facilisis quam at, condimentum eros. Sed scelerisque metus sed dapibus mattis. Aliquam venenatis vitae turpis ut scelerisque. Donec pellentesque, magna eu imperdiet tristique, tellus justo ullamcorper mauris, eu placerat augue sapien maximus neque.&amp;lt;/p&amp;gt;&amp;lt;p&amp;gt;Phasellus vel metus iaculis, rhoncus nibh ut, sollicitudin lectus. Nam malesuada blandit est, ut lacinia nibh. Maecenas finibus diam et dolor ornare rhoncus. Morbi molestie felis ut quam maximus iaculis. Integer pretium neque et lectus suscipit, quis vehicula odio imperdiet. Maecenas tincidunt neque lobortis ultricies mollis. Nulla sit amet purus nec leo gravida auctor.&amp;lt;/p&amp;gt;&amp;lt;p&amp;gt;Proin at auctor erat. Cras lobortis ligula massa, vel sollicitudin lacus iaculis quis. Mauris eget tristique velit. Nulla sed mollis quam. Nam metus turpis, tincidunt id faucibus pretium, sollicitudin ut nibh. Quisque volutpat metus sed volutpat facilisis. Morbi posuere sollicitudin neque a egestas. Suspendisse luctus sed orci et laoreet. Cras vel turpis imperdiet, scelerisque risus quis, laoreet lacus. Fusce nunc justo, pretium in feugiat non, facilisis in mauris. Cras venenatis tempus erat eget consequat.&amp;lt;/p&amp;gt;&amp;lt;p&amp;gt;Integer sagittis congue est, ut molestie lectus semper sed. Duis dolor arcu, malesuada sit amet cursus id, mattis sit amet orci. Etiam placerat ex a eros euismod, in condimentum enim euismod. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum efficitur, sapien ultrices lobortis pharetra, ante augue sagittis dolor, ut blandit velit lectus et eros. Sed dignissim porta neque, in auctor felis aliquam vel. Nam vitae sapien velit. Integer dignissim elit turpis, quis faucibus felis scelerisque sit amet. Nam est ex, eleifend eu scelerisque vel, rutrum eu urna. Maecenas et purus pellentesque, hendrerit nunc et, tincidunt nulla. Duis rhoncus congue ex, non euismod diam blandit eu. Nam in consectetur risus. Etiam velit justo, consectetur a ex ut, dictum maximus ligula. Etiam elementum quam in nulla fermentum tincidunt. Sed a fringilla erat. Phasellus at libero eros.&amp;lt;/p&amp;gt;&amp;lt;p&amp;gt;Etiam erat mauris, finibus commodo ex sit amet, scelerisque bibendum justo. Ut efficitur ultrices vulputate. Duis non dui non eros elementum varius. Aliquam convallis, quam vel consequat posuere, tortor augue luctus mauris, sit amet gravida urna diam a elit. Donec orci orci, tempus nec mattis tincidunt, porta non neque. Mauris fermentum, odio et tincidunt malesuada, mi justo tincidunt dolor, eget vehicula felis leo sed sapien. Pellentesque porttitor est nec mauris lacinia, at cursus sapien mollis. Praesent eget augue faucibus, rhoncus purus a, finibus metus. Aliquam lacus dolor, cursus vitae quam vel, fermentum consectetur mi. Morbi vel tortor sed lorem scelerisque tincidunt vel eget ipsum. Nulla lacinia sagittis lectus et bibendum. Nullam consectetur egestas leo id congue.&amp;lt;/p&amp;gt;', '', '', 1518354394);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--
-- Creation: Jul 25, 2018 at 07:00 AM
-- Last update: Jul 25, 2018 at 08:19 PM
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `id_razdel` int(11) NOT NULL,
  `realid` int(11) NOT NULL DEFAULT '0',
  `id_tema` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `text` text NOT NULL,
  `cit` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `timeedit` int(11) NOT NULL,
  `kedit` int(11) NOT NULL,
  `id_user_edit` int(11) NOT NULL,
  `vote` varchar(11) NOT NULL,
  `type` enum('0','1','2') NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `id_razdel`, `realid`, `id_tema`, `id_user`, `text`, `cit`, `time`, `timeedit`, `kedit`, `id_user_edit`, `vote`, `type`) VALUES
(84, 0, 0, 50, 1, 'das d sa dsadgfhgf hjnk&amp;amp;nbsp;', 0, 1515250971, 1515253360, 1, 1, '', ''),
(83, 2, 1, 50, 1, '&amp;lt;p&amp;gt;sadsa d sad sad sad asd&amp;amp;amp;nbsp; &amp;lt;a href=&amp;quot;javascript:void(0);&amp;quot; title=&amp;quot;:punk:&amp;quot;&amp;gt;&amp;lt;img src=&amp;quot;https://myforo.ru/files/smiles/punk.gif&amp;quot;&amp;gt;&amp;lt;img src=&amp;quot;https://myforo.ru/files/smiles/bounceball.gif&amp;quot;&amp;gt;&amp;lt;/a&amp;gt;&amp;lt;/p&amp;gt;', 0, 1515250935, 1518355157, 1, 1, '', '1'),
(85, 0, 0, 50, 3, 'Kiss', 0, 1515255101, 0, 0, 0, '', ''),
(94, 1, 1, 52, 1, '&amp;lt;p&amp;gt;This is public test tralala&amp;lt;/p&amp;gt;', 0, 1532549976, 0, 0, 0, '', '0'),
(88, 0, 0, 50, 3, ':admin:', 0, 1515275637, 0, 0, 0, '', ''),
(89, 0, 0, 50, 16, 'Test post #1', 0, 1515609638, 0, 0, 0, '', ''),
(90, 0, 0, 50, 1, ':admin:', 0, 1518354418, 0, 0, 0, '', ''),
(92, 0, 0, 50, 1, '&amp;lt;p&amp;gt;&amp;lt;strong&amp;gt;&amp;amp;lt;p&amp;amp;gt;&amp;amp;amp;lt;p&amp;amp;amp;gt;te&amp;lt;em&amp;gt;st&amp;amp;amp;lt;strong&amp;amp;amp;gt;e&amp;lt;/em&amp;gt;sts erf :admin:&amp;amp;amp;lt;/strong&amp;amp;amp;gt;&amp;amp;amp;lt;/p&amp;amp;amp;gt;&amp;amp;lt;/p&amp;amp;gt;&amp;lt;/strong&amp;gt;&amp;lt;/p&amp;gt;', 0, 1518354874, 1532503972, 2, 1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `post_files`
--
-- Creation: Jan 03, 2018 at 09:41 AM
-- Last update: Jan 03, 2018 at 09:41 AM
-- Last check: Jan 03, 2018 at 09:41 AM
--

DROP TABLE IF EXISTS `post_files`;
CREATE TABLE `post_files` (
  `id` int(11) NOT NULL,
  `id_razdel` int(11) NOT NULL,
  `id_tema` int(11) NOT NULL,
  `id_post` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `file` varchar(500) NOT NULL,
  `type` varchar(11) NOT NULL,
  `size` varchar(11) NOT NULL,
  `timeload` int(11) NOT NULL,
  `loadcounts` int(11) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `post_likes`
--
-- Creation: Jul 25, 2018 at 07:03 AM
--

DROP TABLE IF EXISTS `post_likes`;
CREATE TABLE `post_likes` (
  `id` int(11) NOT NULL,
  `id_post` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post_likes`
--

INSERT INTO `post_likes` (`id`, `id_post`, `id_user`) VALUES
(1, 84, 3);

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--
-- Creation: Apr 03, 2017 at 08:21 AM
-- Last update: Jul 25, 2018 at 08:09 PM
-- Last check: Jul 11, 2017 at 02:14 AM
--

DROP TABLE IF EXISTS `setting`;
CREATE TABLE `setting` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `value` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `name`, `value`) VALUES
(1, 'home', 'https://myforo.ru'),
(2, 'skin', 'default'),
(3, 'copy', 'Roka Engine'),
(4, 'namesite', 'myForo'),
(5, 'message', '25'),
(6, 'antiflood', '30'),
(7, 'adminpanel', '/adminka'),
(8, 'timezone', 'Europe/Skopje'),
(9, 'emailadmin', 'kalco@it.com.mk'),
(10, 'keywords', 'Testisi'),
(11, 'description', 'sadsaddasdasd'),
(12, 'filesize_photo', '5'),
(13, 'gzip', '1'),
(14, 'output_compression_level', '3'),
(15, 'compress', '3'),
(16, 'adminlogs', '1'),
(17, 'userlogs', '1'),
(18, 'version', '1.0'),
(19, 'copyright', '1'),
(20, 'copyright_photo', ''),
(21, 'copyright_txt', 'https://roka.ru'),
(22, 'copyright_type', 'bottom right'),
(23, 'copyright_txt_font', 'Slants_Regular.ttf'),
(26, 'sendmail', 'mail'),
(27, 'smtpport', ''),
(28, 'smtphost', ''),
(29, 'smtpusername', ''),
(30, 'smtppassword', ''),
(31, 'sitemap_changefreq', 'never'),
(32, 'sitemap_priority', '0.5'),
(33, 'sitemap_index', '2'),
(34, 'sitemap_txt', '2'),
(35, 'debugging_smarty', '0'),
(36, 'registration', ''),
(37, 'activation', '1'),
(38, 'login_edit', '10'),
(39, 'captcha_width', '100'),
(40, 'captcha_height', '40'),
(41, 'captcha_font_size', '14'),
(42, 'captcha_let_amount', '4'),
(43, 'captcha_let_amount_fon', '10'),
(44, 'highlight', '1'),
(45, 'captcha_signup', ''),
(46, 'captcha_add_thread', ''),
(47, 'captcha_add_post', ''),
(48, 'filetype_forum', 'jpg, png, gif, bmp, ico, zip, rar, doc, docx, txt, mp4, avi, mkv, mpg, wmv, flv, mp3, wav, pdf, psd, mov, divx, flv, m4v, swf, ogg, rtf, xls, xlsx, ppt, pptx'),
(49, 'filesize_forum', '5'),
(50, 'filecount_forum', '3'),
(51, 'time_forum', '86400'),
(52, 'vote_forum', '5'),
(53, 'autoclear_guest', ''),
(54, 'captcha_signup', ''),
(55, 'counters', 'UA-46407540-1'),
(56, 'count_smiles', '15'),
(57, 'lastthread', '4'),
(60, 'ads_size', '250'),
(59, 'adslimit', '3'),
(61, 'balls_add_thread', '1'),
(62, 'balls_add_post', '1'),
(63, 'forum_time_edit_post', '30'),
(64, 'lang', 'english'),
(65, 'lastposts', '4'),
(66, 'adminskin', 'flat');

-- --------------------------------------------------------

--
-- Table structure for table `smiles`
--
-- Creation: Jul 25, 2018 at 07:09 AM
-- Last update: Jul 25, 2018 at 07:09 AM
--

DROP TABLE IF EXISTS `smiles`;
CREATE TABLE `smiles` (
  `id` int(11) NOT NULL,
  `code` varchar(20) NOT NULL,
  `photo` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `smiles`
--

INSERT INTO `smiles` (`id`, `code`, `photo`) VALUES
(1, ':1eye:', '1eye.gif'),
(2, ':admin:', 'admin.gif'),
(3, ':aeris:', 'aeris.gif'),
(4, ':afro:', 'afro.gif'),
(5, ':afro1:', 'afro1.gif'),
(6, ':afro2:', 'afro2.gif'),
(7, ':akuma:', 'akuma.gif'),
(8, ':ala:', 'ala.gif'),
(9, ':alien:', 'alien.gif'),
(10, ':alien1:', 'alien1.gif'),
(11, ':alien2:', 'alien2.gif'),
(12, ':alucard:', 'alucard.gif'),
(13, ':angel:', 'angel.gif'),
(14, ':angel1:', 'angel1.gif'),
(15, ':angel2:', 'angel2.gif'),
(16, ':angel3:', 'angel3.gif'),
(17, ':angry:', 'angry.gif'),
(18, ':angry1:', 'angry1.gif'),
(19, ':angry2:', 'angry2.gif'),
(20, ':angry3:', 'angry3.gif'),
(21, ':arabic:', 'arabic.gif'),
(22, ':argue1:', 'argue1.gif'),
(23, ':arrow:', 'arrow.gif'),
(24, ':arrow1:', 'arrow1.gif'),
(25, ':arrow2:', 'arrow2.gif'),
(26, ':arrow3:', 'arrow3.gif'),
(27, ':arrow4:', 'arrow4.gif'),
(28, ':arrow5:', 'arrow5.gif'),
(29, ':asian:', 'asian.gif'),
(30, ':baaa:', 'baaa.gif'),
(31, ':badmood:', 'badmood.gif'),
(32, ':bag:', 'bag.gif'),
(33, ':bag1:', 'bag1.gif'),
(34, ':bag2:', 'bag2.gif'),
(35, ':ban:', 'ban.gif'),
(36, ':banana:', 'banana.gif'),
(37, ':band:', 'band.gif'),
(38, ':bandana:', 'bandana.gif'),
(39, ':bandana1:', 'bandana1.gif'),
(40, ':banned:', 'banned.gif'),
(41, ':banned1:', 'banned1.gif'),
(42, ':barret:', 'barret.gif'),
(43, ':bart:', 'bart.gif'),
(44, ':basketball:', 'basketball.gif'),
(45, ':batman:', 'batman.gif'),
(46, ':beta:', 'beta.gif'),
(47, ':bicycle:', 'bicycle.gif'),
(48, ':biggrin:', 'biggrin.gif'),
(49, ':bigsmile:', 'bigsmile.gif'),
(50, ':blackeye:', 'blackeye.gif'),
(51, ':blink:', 'blink.gif'),
(52, ':blow:', 'blow.gif'),
(53, ':blowup:', 'blowup.gif'),
(54, ':bluesguy:', 'bluesguy.gif'),
(55, ':blush:', 'blush.gif'),
(56, ':blush1:', 'blush1.gif'),
(57, ':blush2:', 'blush2.gif'),
(58, ':boff:', 'boff.gif'),
(59, ':boff1:', 'boff1.gif'),
(60, ':bomb:', 'bomb.gif'),
(61, ':boonehat:', 'boonehat.gif'),
(62, ':bop:', 'bop.gif'),
(63, ':bop1:', 'bop1.gif'),
(64, ':bored:', 'bored.gif'),
(65, ':borg:', 'borg.gif'),
(66, ':bounce:', 'bounce.gif'),
(67, ':bounce1:', 'bounce1.gif'),
(68, ':bounceball:', 'bounceball.gif'),
(69, ':bow:', 'bow.gif'),
(70, ':box:', 'box.gif'),
(71, ':boxing:', 'boxing.gif'),
(72, ':brizdidit:', 'brizdidit.gif'),
(73, ':bunny:', 'bunny.gif'),
(74, ':bunny1:', 'bunny1.gif'),
(75, ':busted_red:', 'busted_red.gif'),
(76, ':buu:', 'buu.gif'),
(77, ':calich-s:', 'calich-s.gif'),
(78, ':calich:', 'calich.gif'),
(79, ':cap:', 'cap.gif'),
(80, ':cap1:', 'cap1.gif'),
(81, ':cap2:', 'cap2.gif'),
(82, ':cat:', 'cat.gif'),
(83, ':cellphone:', 'cellphone.gif'),
(84, ':cellphone1:', 'cellphone1.gif'),
(85, ':cellphone2:', 'cellphone2.gif'),
(86, ':censored:', 'censored.gif'),
(87, ':censored1:', 'censored1.gif'),
(88, ':chair:', 'chair.gif'),
(89, ':cheezy:', 'cheezy.gif'),
(90, ':chef:', 'chef.gif'),
(91, ':chop:', 'chop.gif'),
(92, ':claire:', 'claire.gif'),
(93, ':clap:', 'clap.gif'),
(94, ':clap1:', 'clap1.gif'),
(95, ':cloud:', 'cloud.gif'),
(96, ':cloud9:', 'cloud9.gif'),
(97, ':clover:', 'clover.gif'),
(98, ':cold:', 'cold.gif'),
(99, ':cold1:', 'cold1.gif'),
(100, ':confused:', 'confused.gif'),
(101, ':confused1:', 'confused1.gif'),
(102, ':confuzzled:', 'confuzzled.gif'),
(103, ':console:', 'console.gif'),
(104, ':cool:', 'cool.gif'),
(105, ':cool1:', 'cool1.gif'),
(106, ':cool2:', 'cool2.gif'),
(107, ':cool3:', 'cool3.gif'),
(108, ':cool4:', 'cool4.gif'),
(109, ':cool5:', 'cool5.gif'),
(110, ':curlers:', 'curlers.gif'),
(111, ':dance:', 'dance.gif'),
(112, ':dance1:', 'dance1.gif'),
(113, ':dance2:', 'dance2.gif'),
(114, ':darthvader:', 'darthvader.gif'),
(115, ':dead:', 'dead.gif'),
(116, ':detective:', 'detective.gif'),
(117, ':dev:', 'dev.gif'),
(118, ':devil:', 'devil.gif'),
(119, ':devil1:', 'devil1.gif'),
(120, ':devil2:', 'devil2.gif'),
(121, ':diespam:', 'diespam.gif'),
(122, ':disguise:', 'disguise.gif'),
(123, ':disgust:', 'disgust.gif'),
(124, ':disgust1:', 'disgust1.gif'),
(125, ':dog:', 'dog.gif'),
(126, ':doh:', 'doh.gif'),
(127, ':doh1:', 'doh1.gif'),
(128, ':donatello:', 'donatello.gif'),
(129, ':dots:', 'dots.gif'),
(130, ':dr_evil:', 'dr_evil.gif'),
(131, ':dragon:', 'dragon.gif'),
(132, ':drool:', 'drool.gif'),
(133, ':dry:', 'dry.gif'),
(134, ':dunno:', 'dunno.gif'),
(135, ':eh:', 'eh.gif'),
(136, ':ermm:', 'ermm.gif'),
(137, ':evil:', 'evil.gif'),
(138, ':evil1:', 'evil1.gif'),
(139, ':evil2:', 'evil2.gif'),
(140, ':evil3:', 'evil3.gif'),
(141, ':evil4:', 'evil4.gif'),
(142, ':excl:', 'excl.gif'),
(143, ':fear:', 'fear.gif'),
(144, ':fear1:', 'fear1.gif'),
(145, ':fez:', 'fez.gif'),
(146, ':fish:', 'fish.gif'),
(147, ':flowers:', 'flowers.gif'),
(148, ':flowers1:', 'flowers1.gif'),
(149, ':football:', 'football.gif'),
(150, ':footinmouth:', 'footinmouth.gif'),
(151, ':fox:', 'fox.gif'),
(152, ':fox1:', 'fox1.gif'),
(153, ':fox3:', 'fox3.gif'),
(154, ':fox4:', 'fox4.gif'),
(155, ':frustrated:', 'frustrated.gif'),
(156, ':frustrated1:', 'frustrated1.gif'),
(157, ':fu:', 'fu.gif'),
(158, ':fu1:', 'fu1.gif'),
(159, ':fu2:', 'fu2.gif'),
(160, ':furious:', 'furious.gif'),
(161, ':gandalf:', 'gandalf.gif'),
(162, ':gentleman:', 'gentleman.gif'),
(163, ':gentleman1:', 'gentleman1.gif'),
(164, ':ghost:', 'ghost.gif'),
(165, ':ghost1:', 'ghost1.gif'),
(166, ':giggle:', 'giggle.gif'),
(167, ':goatee:', 'goatee.gif'),
(168, ':goatee1:', 'goatee1.gif'),
(169, ':gohan:', 'gohan.gif'),
(170, ':goku-s:', 'goku-s.gif'),
(171, ':goku:', 'goku.gif'),
(172, ':google:', 'google.gif'),
(173, ':greennuke:', 'greennuke.gif'),
(174, ':grenade:', 'grenade.gif'),
(175, ':grin:', 'grin.gif'),
(176, ':grin1:', 'grin1.gif'),
(177, ':grin2:', 'grin2.gif'),
(178, ':grin3:', 'grin3.gif'),
(179, ':grouplove:', 'grouplove.gif'),
(180, ':groupwave:', 'groupwave.gif'),
(181, ':groupwave1:', 'groupwave1.gif'),
(182, ':guitar:', 'guitar.gif'),
(183, ':hammer:', 'hammer.gif'),
(184, ':hammer1:', 'hammer1.gif'),
(185, ':hammer2:', 'hammer2.gif'),
(186, ':hammer3:', 'hammer3.gif'),
(187, ':hangman:', 'hangman.gif'),
(188, ':happy:', 'happy.gif'),
(189, ':happybday:', 'happybday.gif'),
(190, ':hat:', 'hat.gif'),
(191, ':hat1:', 'hat1.gif'),
(192, ':headphones:', 'headphones.gif'),
(193, ':headphones1:', 'headphones1.gif'),
(194, ':heart:', 'heart.gif'),
(195, ':hearye:', 'hearye.gif'),
(196, ':hehe:', 'hehe.gif'),
(197, ':help:', 'help.gif'),
(198, ':hide:', 'hide.gif'),
(199, ':hippi:', 'hippi.gif'),
(200, ':hmm:', 'hmm.gif'),
(201, ':hmm1:', 'hmm1.gif'),
(202, ':hockey:', 'hockey.gif'),
(203, ':hockey1:', 'hockey1.gif'),
(204, ':holiday:', 'holiday.gif'),
(205, ':homestar:', 'homestar.gif'),
(206, ':horse:', 'horse.gif'),
(207, ':hubba:', 'hubba.gif'),
(208, ':hubba1:', 'hubba1.gif'),
(209, ':hubba2:', 'hubba2.gif'),
(210, ':hubba3:', 'hubba3.gif'),
(211, ':hubba4:', 'hubba4.gif'),
(212, ':huh:', 'huh.gif'),
(213, ':huh1:', 'huh1.gif'),
(214, ':huh2:', 'huh2.gif'),
(215, ':icq_offline:', 'icq_offline.gif'),
(216, ':icq_online:', 'icq_online.gif'),
(217, ':indian:', 'indian.gif'),
(218, ':injured:', 'injured.gif'),
(219, ':irvine:', 'irvine.gif'),
(220, ':jap:', 'jap.gif'),
(221, ':jason:', 'jason.gif'),
(222, ':jawdrop:', 'jawdrop.gif'),
(223, ':jawdrop1:', 'jawdrop1.gif'),
(224, ':jawdrop2:', 'jawdrop2.gif'),
(225, ':jerry:', 'jerry.gif'),
(226, ':joystick:', 'joystick.gif'),
(227, ':juggle:', 'juggle.gif'),
(228, ':jump:', 'jump.gif'),
(229, ':jump1:', 'jump1.gif'),
(230, ':jumpon:', 'jumpon.gif'),
(231, ':kamikaze:', 'kamikaze.gif'),
(232, ':kenshin2:', 'kenshin2.gif'),
(233, ':kewlpics:', 'kewlpics.gif'),
(234, ':kiss:', 'kiss.gif'),
(235, ':kiss1:', 'kiss1.gif'),
(236, ':kiss2:', 'kiss2.gif'),
(237, ':kiss3:', 'kiss3.gif'),
(238, ':krider:', 'krider.gif'),
(239, ':krilin:', 'krilin.gif'),
(240, ':kwasny:', 'kwasny.gif'),
(241, ':kwasny2:', 'kwasny2.gif'),
(242, ':lady:', 'lady.gif'),
(243, ':lame:', 'lame.gif'),
(244, ':laugh:', 'laugh.gif'),
(245, ':laugh1:', 'laugh1.gif'),
(246, ':laugh2:', 'laugh2.gif'),
(247, ':licklips:', 'licklips.gif'),
(248, ':linux:', 'linux.gif'),
(249, ':lips:', 'lips.gif'),
(250, ':lol1:', 'lol1.gif'),
(251, ':lol2:', 'lol2.gif'),
(252, ':lookaround:', 'lookaround.gif'),
(253, ':love:', 'love.gif'),
(254, ':love1:', 'love1.gif'),
(255, ':love2:', 'love2.gif'),
(256, ':mad:', 'mad.gif'),
(257, ':mad2:', 'mad2.gif'),
(258, ':mad3:', 'mad3.gif'),
(259, ':mallet:', 'mallet.gif'),
(260, ':man:', 'man.gif'),
(261, ':matrix:', 'matrix.gif'),
(262, ':mellow:', 'mellow.gif'),
(263, ':mop:', 'mop.gif'),
(264, ':mop1:', 'mop1.gif'),
(265, ':muscles:', 'muscles.gif'),
(266, ':muscles1:', 'muscles1.gif'),
(267, ':muscles2:', 'muscles2.gif'),
(268, ':muscles3:', 'muscles3.gif'),
(269, ':mushy:', 'mushy.gif'),
(270, ':mushy1:', 'mushy1.gif'),
(271, ':mysql:', 'mysql.gif'),
(272, ':native:', 'native.gif'),
(273, ':neo:', 'neo.gif'),
(274, ':nerd:', 'nerd.gif'),
(275, ':no:', 'no.gif'),
(276, ':noexpression:', 'noexpression.gif'),
(277, ':nono:', 'nono.gif'),
(278, ':nopity:', 'nopity.gif'),
(279, ':nospam:', 'nospam.gif'),
(280, ':nosweat:', 'nosweat.gif'),
(281, ':notworthy:', 'notworthy.gif'),
(282, ':notworthy1:', 'notworthy1.gif'),
(283, ':nuke:', 'nuke.gif'),
(284, ':offtopic:', 'offtopic.gif'),
(285, ':ohmy:', 'ohmy.gif'),
(286, ':oops:', 'oops.gif'),
(287, ':osx:', 'osx.gif'),
(288, ':ouch:', 'ouch.gif'),
(289, ':pacifier:', 'pacifier.gif'),
(290, ':palm:', 'palm.gif'),
(291, ':partytime:', 'partytime.gif'),
(292, ':pash:', 'pash.gif'),
(293, ':pash1:', 'pash1.gif'),
(294, ':peace:', 'peace.gif'),
(295, ':peace1:', 'peace1.gif'),
(296, ':phone:', 'phone.gif'),
(297, ':photo:', 'photo.gif'),
(298, ':piccolo:', 'piccolo.gif'),
(299, ':pig:', 'pig.gif'),
(300, ':pile:', 'pile.gif'),
(301, ':poke:', 'poke.gif'),
(302, ':pop:', 'pop.gif'),
(303, ':popeye:', 'popeye.gif'),
(304, ':pray:', 'pray.gif'),
(305, ':prop:', 'prop.gif'),
(306, ':protest:', 'protest.gif'),
(307, ':puke:', 'puke.gif'),
(308, ':puke1:', 'puke1.gif'),
(309, ':pullup:', 'pullup.gif'),
(310, ':punch:', 'punch.gif'),
(311, ':punch1:', 'punch1.gif'),
(312, ':punk:', 'punk.gif'),
(313, ':question1:', 'question1.gif'),
(314, ':quistis:', 'quistis.gif'),
(315, ':quylao:', 'quylao.gif'),
(316, ':rant:', 'rant.gif'),
(317, ':rant1:', 'rant1.gif'),
(318, ':rant2:', 'rant2.gif'),
(319, ':rasta2:', 'rasta2.gif'),
(320, ':read:', 'read.gif'),
(321, ':read1:', 'read1.gif'),
(322, ':respekt:', 'respekt.gif'),
(323, ':respekt1:', 'respekt1.gif'),
(324, ':rinoa:', 'rinoa.gif'),
(325, ':rip:', 'rip.gif'),
(326, ':rip1:', 'rip1.gif'),
(327, ':robot:', 'robot.gif'),
(328, ':rockon:', 'rockon.gif'),
(329, ':rofl:', 'rofl.gif'),
(330, ':rofl1:', 'rofl1.gif'),
(331, ':rofl2:', 'rofl2.gif'),
(332, ':roller:', 'roller.gif'),
(333, ':roller1:', 'roller1.gif'),
(334, ':roller2:', 'roller2.gif'),
(335, ':rolleyes:', 'rolleyes.gif'),
(336, ':rooster:', 'rooster.gif'),
(337, ':rudolph:', 'rudolph.gif'),
(338, ':rule:', 'rule.gif'),
(339, ':salute:', 'salute.gif'),
(340, ':scream:', 'scream.gif'),
(341, ':scruff:', 'scruff.gif'),
(342, ':seifer:', 'seifer.gif'),
(343, ':selphie:', 'selphie.gif'),
(344, ':serenade:', 'serenade.gif'),
(345, ':shakehead:', 'shakehead.gif'),
(346, ':shifty:', 'shifty.gif'),
(347, ':shock:', 'shock.gif'),
(348, ':shock1:', 'shock1.gif'),
(349, ':shrug:', 'shrug.gif'),
(350, ':shutup:', 'shutup.gif'),
(351, ':sick:', 'sick.gif'),
(352, ':sick1:', 'sick1.gif'),
(353, ':slap:', 'slap.gif'),
(354, ':sly:', 'sly.gif'),
(355, ':smartass:', 'smartass.gif'),
(356, ':smile:', 'smile.gif'),
(357, ':smile1:', 'smile1.gif'),
(358, ':smilie2:', 'smilie2.gif'),
(359, ':smilie3:', 'smilie3.gif'),
(360, ':smurf:', 'smurf.gif'),
(361, ':sneaky:', 'sneaky.gif'),
(362, ':snorkel:', 'snorkel.gif'),
(363, ':soccer:', 'soccer.gif'),
(364, ':sombrero:', 'sombrero.gif'),
(365, ':sorry:', 'sorry.gif'),
(366, ':spam:', 'spam.gif'),
(367, ':spidy:', 'spidy.gif'),
(368, ':sq_angry:', 'sq_angry.gif'),
(369, ':sq_biggrin:', 'sq_biggrin.gif'),
(370, ':sq_blink:', 'sq_blink.gif'),
(371, ':sq_closedeyes:', 'sq_closedeyes.gif'),
(372, ':sq_cool:', 'sq_cool.gif'),
(373, ':sq_dry:', 'sq_dry.gif'),
(374, ':sq_glare:', 'sq_glare.gif'),
(375, ':sq_goodmood:', 'sq_goodmood.gif'),
(376, ':sq_happy:', 'sq_happy.gif'),
(377, ':sq_hehe1:', 'sq_hehe1.gif'),
(378, ':sq_hubba:', 'sq_hubba.gif'),
(379, ':sq_huh:', 'sq_huh.gif'),
(380, ':sq_laugh:', 'sq_laugh.gif'),
(381, ':sq_mellow:', 'sq_mellow.gif'),
(382, ':sq_ohmy:', 'sq_ohmy.gif'),
(383, ':sq_ouch:', 'sq_ouch.gif'),
(384, ':sq_sick:', 'sq_sick.gif'),
(385, ':sq_smile:', 'sq_smile.gif'),
(386, ':sq_smile1:', 'sq_smile1.gif'),
(387, ':sq_turned:', 'sq_turned.gif'),
(388, ':sq_unsure:', 'sq_unsure.gif'),
(389, ':squall:', 'squall.gif'),
(390, ':sss:', 'sss.gif'),
(391, ':stab:', 'stab.gif'),
(392, ':stache:', 'stache.gif'),
(393, ':starwars:', 'starwars.gif'),
(394, ':stretcher:', 'stretcher.gif'),
(395, ':stupid:', 'stupid.gif'),
(396, ':stupid1:', 'stupid1.gif'),
(397, ':sun:', 'sun.gif'),
(398, ':surrender:', 'surrender.gif'),
(399, ':suspicious:', 'suspicious.gif'),
(400, ':taz:', 'taz.gif'),
(401, ':throb:', 'throb.gif'),
(402, ':throw:', 'throw.gif'),
(403, ':tifa:', 'tifa.gif'),
(404, ':tomato:', 'tomato.gif'),
(405, ':tongue:', 'tongue.gif'),
(406, ':toot:', 'toot.gif'),
(407, ':tooth:', 'tooth.gif'),
(408, ':toothbrush:', 'toothbrush.gif'),
(409, ':trampoline:', 'trampoline.gif'),
(410, ':trumpet:', 'trumpet.gif'),
(411, ':turned:', 'turned.gif'),
(412, ':unsure:', 'unsure.gif'),
(413, ':vampire:', 'vampire.gif'),
(414, ':vegeta-s:', 'vegeta-s.gif'),
(415, ':vegeta:', 'vegeta.gif'),
(416, ':vincent:', 'vincent.gif'),
(417, ':wallbash:', 'wallbash.gif'),
(418, ':war:', 'war.gif'),
(419, ':wave:', 'wave.gif'),
(420, ':wave1:', 'wave1.gif'),
(421, ':wavetowel:', 'wavetowel.gif'),
(422, ':wavetowel1:', 'wavetowel1.gif'),
(423, ':wavetowel2:', 'wavetowel2.gif'),
(424, ':welcome1:', 'welcome1.gif'),
(425, ':whaa:', 'whaa.gif'),
(426, ':whaa1:', 'whaa1.gif'),
(427, ':whaa2:', 'whaa2.gif'),
(428, ':wheelchair:', 'wheelchair.gif'),
(429, ':whip:', 'whip.gif'),
(430, ':whistling:', 'whistling.gif'),
(431, ':whistling1:', 'whistling1.gif'),
(432, ':whistling2:', 'whistling2.gif'),
(433, ':wiggle:', 'wiggle.gif'),
(434, ':wolfwood:', 'wolfwood.gif'),
(435, ':wolverine:', 'wolverine.gif'),
(436, ':wolverine1:', 'wolverine1.gif'),
(437, ':wounded:', 'wounded.gif'),
(438, ':wounded1:', 'wounded1.gif'),
(439, ':wub:', 'wub.gif'),
(440, ':wub1:', 'wub1.gif'),
(441, ':wub2:', 'wub2.gif'),
(442, ':xen:', 'xen.gif'),
(443, ':xp:', 'xp.gif'),
(444, ':yak:', 'yak.gif'),
(445, ':yay:', 'yay.gif'),
(446, ':yeahright:', 'yeahright.gif'),
(447, ':yes:', 'yes.gif'),
(448, ':yikes:', 'yikes.gif'),
(449, ':yinyang:', 'yinyang.gif'),
(450, ':ymca:', 'ymca.gif'),
(451, ':yuffie:', 'yuffie.gif'),
(452, ':yuk:', 'yuk.gif'),
(453, ':yuk1:', 'yuk1.gif'),
(454, ':yuk2:', 'yuk2.gif'),
(455, ':zell:', 'zell.gif'),
(456, ':zorro:', 'zorro.gif');

-- --------------------------------------------------------

--
-- Table structure for table `tema`
--
-- Creation: Sep 22, 2017 at 07:09 AM
-- Last update: Jan 08, 2020 at 05:09 PM
-- Last check: Sep 22, 2017 at 07:09 AM
--

DROP TABLE IF EXISTS `tema`;
CREATE TABLE `tema` (
  `id` int(11) NOT NULL,
  `id_razdel` int(11) NOT NULL,
  `realid` int(11) NOT NULL DEFAULT '0',
  `id_user` int(11) NOT NULL,
  `id_user_last` int(11) NOT NULL,
  `id_post_last` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `translate` varchar(500) NOT NULL,
  `text` text NOT NULL,
  `time` int(11) NOT NULL,
  `up` enum('0','1') NOT NULL DEFAULT '0',
  `closed` enum('0','1') NOT NULL DEFAULT '0',
  `views` int(11) NOT NULL DEFAULT '0',
  `countpost` int(11) NOT NULL DEFAULT '0',
  `type` enum('0','1','2') NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tema`
--

INSERT INTO `tema` (`id`, `id_razdel`, `realid`, `id_user`, `id_user_last`, `id_post_last`, `name`, `translate`, `text`, `time`, `up`, `closed`, `views`, `countpost`, `type`) VALUES
(50, 2, 1, 1, 1, 92, 'Test Thread', 'test-thread', 'sadsa d sad sad sad asd&amp;amp;nbsp;', 1532504090, '0', '0', 137952, 7, '1'),
(52, 1, 1, 1, 1, 94, 'Test public', 'test-public', '&amp;lt;p&amp;gt;This is public test tralala&amp;lt;/p&amp;gt;', 1532549976, '0', '0', 527, 1, '0');

-- --------------------------------------------------------

--
-- Table structure for table `tema_vote`
--
-- Creation: Jan 03, 2018 at 09:39 AM
-- Last update: Jan 03, 2018 at 09:39 AM
-- Last check: Jan 03, 2018 at 09:39 AM
--

DROP TABLE IF EXISTS `tema_vote`;
CREATE TABLE `tema_vote` (
  `id` int(11) NOT NULL,
  `id_razdel` int(11) NOT NULL,
  `id_tema` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `count` int(11) NOT NULL,
  `type` enum('1','2') NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tema_vote_us`
--
-- Creation: Jan 03, 2018 at 09:40 AM
-- Last update: Jan 03, 2018 at 09:40 AM
-- Last check: Jan 03, 2018 at 09:40 AM
--

DROP TABLE IF EXISTS `tema_vote_us`;
CREATE TABLE `tema_vote_us` (
  `id` int(11) NOT NULL,
  `id_razdel` int(11) NOT NULL,
  `id_tema` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `vote` int(11) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `userlogs`
--
-- Creation: Mar 22, 2017 at 07:17 AM
-- Last update: Jul 11, 2017 at 02:14 AM
-- Last check: Jul 11, 2017 at 02:14 AM
--

DROP TABLE IF EXISTS `userlogs`;
CREATE TABLE `userlogs` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `modul` varchar(500) NOT NULL,
  `text` varchar(2000) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `browser` varchar(500) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--
-- Creation: Jan 28, 2018 at 04:04 PM
-- Last update: Jan 09, 2020 at 08:28 PM
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(32) NOT NULL,
  `pass` varchar(150) NOT NULL,
  `hashcode` varchar(150) NOT NULL,
  `uLoginHash` varchar(150) NOT NULL,
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `d` int(2) NOT NULL DEFAULT '0',
  `m` int(2) NOT NULL DEFAULT '0',
  `o` int(4) NOT NULL DEFAULT '0',
  `avatar` varchar(50) NOT NULL,
  `balls` varchar(11) DEFAULT '0',
  `phone` varchar(20) NOT NULL,
  `email` varchar(32) NOT NULL,
  `skype` varchar(32) NOT NULL,
  `icq` int(10) NOT NULL,
  `adress` varchar(250) NOT NULL,
  `city` varchar(32) NOT NULL,
  `level` int(3) NOT NULL DEFAULT '1',
  `date_reg` int(11) NOT NULL,
  `date_last` int(11) NOT NULL,
  `rest_code` varchar(32) NOT NULL,
  `rest_time` int(11) NOT NULL,
  `activation` varchar(32) NOT NULL,
  `ban` enum('0','1') NOT NULL DEFAULT '0',
  `bantime` int(11) NOT NULL,
  `banprichina` varchar(1000) NOT NULL,
  `about` varchar(500) NOT NULL,
  `referer` varchar(1024) NOT NULL,
  `mail` enum('0','1') NOT NULL DEFAULT '1',
  `wall` enum('0','1') NOT NULL DEFAULT '1',
  `lang` varchar(100) NOT NULL DEFAULT 'en_EN',
  `skin` varchar(100) NOT NULL DEFAULT 'default',
  `message` int(3) NOT NULL DEFAULT '20',
  `timezone` varchar(100) NOT NULL DEFAULT 'Europe/Moscow',
  `counttema` int(11) NOT NULL DEFAULT '0',
  `countpost` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `hashcode`, `uLoginHash`, `firstname`, `lastname`, `d`, `m`, `o`, `avatar`, `balls`, `phone`, `email`, `skype`, `icq`, `adress`, `city`, `level`, `date_reg`, `date_last`, `rest_code`, `rest_time`, `activation`, `ban`, `bantime`, `banprichina`, `about`, `referer`, `mail`, `wall`, `lang`, `skin`, `message`, `timezone`, `counttema`, `countpost`) VALUES
(1, 'kalco', '$6$rounds=5000$usesomesillystri$uD2obbVzyjlAQuzcWHu.5q1ob3WLAYHektqo01i0GlKuvjLmj6oKrWBp4PILBE1pvMdpnALOlV0ER578hPjZq1', '$6$rounds=5000$usesomesillystri$qiEeGuK0Sr3XMFGYh6BMWyVZHrzEWCmnPjrTXBfC7FptQNM/1oWziEtqFT7zog6zezvifPX.eJcoLo8qjGHUv1', '', 'Martin', 'Rayovski', 0, 0, 0, 'ox7Ak5s8OeLvVxEgmXJold2P9.jpg', '16', '9875456445654', 'kalco@mail.ru', '', 121212, '', 'Skopje', 100, 1490220154, 1578601715, '', 0, '', '0', 0, '', 'Ninja', '', '1', '1', 'english', 'default', 10, 'Europe/Skopje', 2, 5),
(3, 'Martin', '$6$rounds=5000$usesomesillystri$uD2obbVzyjlAQuzcWHu.5q1ob3WLAYHektqo01i0GlKuvjLmj6oKrWBp4PILBE1pvMdpnALOlV0ER578hPjZq1', '$6$rounds=5000$usesomesillystri$qiEeGuK0Sr3XMFGYh6BMWyVZHrzEWCmnPjrTXBfC7FptQNM/1oWziEtqFT7zog6zezvifPX.eJcoLo8qjGHUv1', '', '', '', 0, 0, 0, 'X7XFbIol1q57pYq5XD0KbWt06.jpg', '14', '', 'martinrajovski@mail.ru', '', 121212, '', '', 1, 1490220154, 1578600426, '', 0, '', '0', 0, '', '', '', '1', '1', 'english', 'default', 20, 'Europe/Moscow', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `zone`
--
-- Creation: Mar 22, 2017 at 07:17 AM
-- Last update: Jul 11, 2017 at 02:14 AM
-- Last check: Jul 11, 2017 at 02:14 AM
--

DROP TABLE IF EXISTS `zone`;
CREATE TABLE `zone` (
  `zone_id` int(10) NOT NULL,
  `country_code` char(2) COLLATE utf8_bin NOT NULL,
  `zone_name` varchar(35) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `zone`
--

INSERT INTO `zone` (`zone_id`, `country_code`, `zone_name`) VALUES
(1, 'AD', 'Europe/Andorra'),
(2, 'AE', 'Asia/Dubai'),
(3, 'AF', 'Asia/Kabul'),
(4, 'AG', 'America/Antigua'),
(5, 'AI', 'America/Anguilla'),
(6, 'AL', 'Europe/Tirane'),
(7, 'AM', 'Asia/Yerevan'),
(8, 'AO', 'Africa/Luanda'),
(9, 'AQ', 'Antarctica/McMurdo'),
(10, 'AQ', 'Antarctica/Casey'),
(11, 'AQ', 'Antarctica/Davis'),
(12, 'AQ', 'Antarctica/DumontDUrville'),
(13, 'AQ', 'Antarctica/Mawson'),
(14, 'AQ', 'Antarctica/Palmer'),
(15, 'AQ', 'Antarctica/Rothera'),
(16, 'AQ', 'Antarctica/Syowa'),
(17, 'AQ', 'Antarctica/Troll'),
(18, 'AQ', 'Antarctica/Vostok'),
(19, 'AR', 'America/Argentina/Buenos_Aires'),
(20, 'AR', 'America/Argentina/Cordoba'),
(21, 'AR', 'America/Argentina/Salta'),
(22, 'AR', 'America/Argentina/Jujuy'),
(23, 'AR', 'America/Argentina/Tucuman'),
(24, 'AR', 'America/Argentina/Catamarca'),
(25, 'AR', 'America/Argentina/La_Rioja'),
(26, 'AR', 'America/Argentina/San_Juan'),
(27, 'AR', 'America/Argentina/Mendoza'),
(28, 'AR', 'America/Argentina/San_Luis'),
(29, 'AR', 'America/Argentina/Rio_Gallegos'),
(30, 'AR', 'America/Argentina/Ushuaia'),
(31, 'AS', 'Pacific/Pago_Pago'),
(32, 'AT', 'Europe/Vienna'),
(33, 'AU', 'Australia/Lord_Howe'),
(34, 'AU', 'Antarctica/Macquarie'),
(35, 'AU', 'Australia/Hobart'),
(36, 'AU', 'Australia/Currie'),
(37, 'AU', 'Australia/Melbourne'),
(38, 'AU', 'Australia/Sydney'),
(39, 'AU', 'Australia/Broken_Hill'),
(40, 'AU', 'Australia/Brisbane'),
(41, 'AU', 'Australia/Lindeman'),
(42, 'AU', 'Australia/Adelaide'),
(43, 'AU', 'Australia/Darwin'),
(44, 'AU', 'Australia/Perth'),
(45, 'AU', 'Australia/Eucla'),
(46, 'AW', 'America/Aruba'),
(47, 'AX', 'Europe/Mariehamn'),
(48, 'AZ', 'Asia/Baku'),
(49, 'BA', 'Europe/Sarajevo'),
(50, 'BB', 'America/Barbados'),
(51, 'BD', 'Asia/Dhaka'),
(52, 'BE', 'Europe/Brussels'),
(53, 'BF', 'Africa/Ouagadougou'),
(54, 'BG', 'Europe/Sofia'),
(55, 'BH', 'Asia/Bahrain'),
(56, 'BI', 'Africa/Bujumbura'),
(57, 'BJ', 'Africa/Porto-Novo'),
(58, 'BL', 'America/St_Barthelemy'),
(59, 'BM', 'Atlantic/Bermuda'),
(60, 'BN', 'Asia/Brunei'),
(61, 'BO', 'America/La_Paz'),
(62, 'BQ', 'America/Kralendijk'),
(63, 'BR', 'America/Noronha'),
(64, 'BR', 'America/Belem'),
(65, 'BR', 'America/Fortaleza'),
(66, 'BR', 'America/Recife'),
(67, 'BR', 'America/Araguaina'),
(68, 'BR', 'America/Maceio'),
(69, 'BR', 'America/Bahia'),
(70, 'BR', 'America/Sao_Paulo'),
(71, 'BR', 'America/Campo_Grande'),
(72, 'BR', 'America/Cuiaba'),
(73, 'BR', 'America/Santarem'),
(74, 'BR', 'America/Porto_Velho'),
(75, 'BR', 'America/Boa_Vista'),
(76, 'BR', 'America/Manaus'),
(77, 'BR', 'America/Eirunepe'),
(78, 'BR', 'America/Rio_Branco'),
(79, 'BS', 'America/Nassau'),
(80, 'BT', 'Asia/Thimphu'),
(81, 'BW', 'Africa/Gaborone'),
(82, 'BY', 'Europe/Minsk'),
(83, 'BZ', 'America/Belize'),
(84, 'CA', 'America/St_Johns'),
(85, 'CA', 'America/Halifax'),
(86, 'CA', 'America/Glace_Bay'),
(87, 'CA', 'America/Moncton'),
(88, 'CA', 'America/Goose_Bay'),
(89, 'CA', 'America/Blanc-Sablon'),
(90, 'CA', 'America/Toronto'),
(91, 'CA', 'America/Nipigon'),
(92, 'CA', 'America/Thunder_Bay'),
(93, 'CA', 'America/Iqaluit'),
(94, 'CA', 'America/Pangnirtung'),
(95, 'CA', 'America/Atikokan'),
(96, 'CA', 'America/Winnipeg'),
(97, 'CA', 'America/Rainy_River'),
(98, 'CA', 'America/Resolute'),
(99, 'CA', 'America/Rankin_Inlet'),
(100, 'CA', 'America/Regina'),
(101, 'CA', 'America/Swift_Current'),
(102, 'CA', 'America/Edmonton'),
(103, 'CA', 'America/Cambridge_Bay'),
(104, 'CA', 'America/Yellowknife'),
(105, 'CA', 'America/Inuvik'),
(106, 'CA', 'America/Creston'),
(107, 'CA', 'America/Dawson_Creek'),
(108, 'CA', 'America/Fort_Nelson'),
(109, 'CA', 'America/Vancouver'),
(110, 'CA', 'America/Whitehorse'),
(111, 'CA', 'America/Dawson'),
(112, 'CC', 'Indian/Cocos'),
(113, 'CD', 'Africa/Kinshasa'),
(114, 'CD', 'Africa/Lubumbashi'),
(115, 'CF', 'Africa/Bangui'),
(116, 'CG', 'Africa/Brazzaville'),
(117, 'CH', 'Europe/Zurich'),
(118, 'CI', 'Africa/Abidjan'),
(119, 'CK', 'Pacific/Rarotonga'),
(120, 'CL', 'America/Santiago'),
(121, 'CL', 'Pacific/Easter'),
(122, 'CM', 'Africa/Douala'),
(123, 'CN', 'Asia/Shanghai'),
(124, 'CN', 'Asia/Urumqi'),
(125, 'CO', 'America/Bogota'),
(126, 'CR', 'America/Costa_Rica'),
(127, 'CU', 'America/Havana'),
(128, 'CV', 'Atlantic/Cape_Verde'),
(129, 'CW', 'America/Curacao'),
(130, 'CX', 'Indian/Christmas'),
(131, 'CY', 'Asia/Nicosia'),
(132, 'CY', 'Asia/Famagusta'),
(133, 'CZ', 'Europe/Prague'),
(134, 'DE', 'Europe/Berlin'),
(135, 'DE', 'Europe/Busingen'),
(136, 'DJ', 'Africa/Djibouti'),
(137, 'DK', 'Europe/Copenhagen'),
(138, 'DM', 'America/Dominica'),
(139, 'DO', 'America/Santo_Domingo'),
(140, 'DZ', 'Africa/Algiers'),
(141, 'EC', 'America/Guayaquil'),
(142, 'EC', 'Pacific/Galapagos'),
(143, 'EE', 'Europe/Tallinn'),
(144, 'EG', 'Africa/Cairo'),
(145, 'EH', 'Africa/El_Aaiun'),
(146, 'ER', 'Africa/Asmara'),
(147, 'ES', 'Europe/Madrid'),
(148, 'ES', 'Africa/Ceuta'),
(149, 'ES', 'Atlantic/Canary'),
(150, 'ET', 'Africa/Addis_Ababa'),
(151, 'FI', 'Europe/Helsinki'),
(152, 'FJ', 'Pacific/Fiji'),
(153, 'FK', 'Atlantic/Stanley'),
(154, 'FM', 'Pacific/Chuuk'),
(155, 'FM', 'Pacific/Pohnpei'),
(156, 'FM', 'Pacific/Kosrae'),
(157, 'FO', 'Atlantic/Faroe'),
(158, 'FR', 'Europe/Paris'),
(159, 'GA', 'Africa/Libreville'),
(160, 'GB', 'Europe/London'),
(161, 'GD', 'America/Grenada'),
(162, 'GE', 'Asia/Tbilisi'),
(163, 'GF', 'America/Cayenne'),
(164, 'GG', 'Europe/Guernsey'),
(165, 'GH', 'Africa/Accra'),
(166, 'GI', 'Europe/Gibraltar'),
(167, 'GL', 'America/Godthab'),
(168, 'GL', 'America/Danmarkshavn'),
(169, 'GL', 'America/Scoresbysund'),
(170, 'GL', 'America/Thule'),
(171, 'GM', 'Africa/Banjul'),
(172, 'GN', 'Africa/Conakry'),
(173, 'GP', 'America/Guadeloupe'),
(174, 'GQ', 'Africa/Malabo'),
(175, 'GR', 'Europe/Athens'),
(176, 'GS', 'Atlantic/South_Georgia'),
(177, 'GT', 'America/Guatemala'),
(178, 'GU', 'Pacific/Guam'),
(179, 'GW', 'Africa/Bissau'),
(180, 'GY', 'America/Guyana'),
(181, 'HK', 'Asia/Hong_Kong'),
(182, 'HN', 'America/Tegucigalpa'),
(183, 'HR', 'Europe/Zagreb'),
(184, 'HT', 'America/Port-au-Prince'),
(185, 'HU', 'Europe/Budapest'),
(186, 'ID', 'Asia/Jakarta'),
(187, 'ID', 'Asia/Pontianak'),
(188, 'ID', 'Asia/Makassar'),
(189, 'ID', 'Asia/Jayapura'),
(190, 'IE', 'Europe/Dublin'),
(191, 'IL', 'Asia/Jerusalem'),
(192, 'IM', 'Europe/Isle_of_Man'),
(193, 'IN', 'Asia/Kolkata'),
(194, 'IO', 'Indian/Chagos'),
(195, 'IQ', 'Asia/Baghdad'),
(196, 'IR', 'Asia/Tehran'),
(197, 'IS', 'Atlantic/Reykjavik'),
(198, 'IT', 'Europe/Rome'),
(199, 'JE', 'Europe/Jersey'),
(200, 'JM', 'America/Jamaica'),
(201, 'JO', 'Asia/Amman'),
(202, 'JP', 'Asia/Tokyo'),
(203, 'KE', 'Africa/Nairobi'),
(204, 'KG', 'Asia/Bishkek'),
(205, 'KH', 'Asia/Phnom_Penh'),
(206, 'KI', 'Pacific/Tarawa'),
(207, 'KI', 'Pacific/Enderbury'),
(208, 'KI', 'Pacific/Kiritimati'),
(209, 'KM', 'Indian/Comoro'),
(210, 'KN', 'America/St_Kitts'),
(211, 'KP', 'Asia/Pyongyang'),
(212, 'KR', 'Asia/Seoul'),
(213, 'KW', 'Asia/Kuwait'),
(214, 'KY', 'America/Cayman'),
(215, 'KZ', 'Asia/Almaty'),
(216, 'KZ', 'Asia/Qyzylorda'),
(217, 'KZ', 'Asia/Aqtobe'),
(218, 'KZ', 'Asia/Aqtau'),
(219, 'KZ', 'Asia/Atyrau'),
(220, 'KZ', 'Asia/Oral'),
(221, 'LA', 'Asia/Vientiane'),
(222, 'LB', 'Asia/Beirut'),
(223, 'LC', 'America/St_Lucia'),
(224, 'LI', 'Europe/Vaduz'),
(225, 'LK', 'Asia/Colombo'),
(226, 'LR', 'Africa/Monrovia'),
(227, 'LS', 'Africa/Maseru'),
(228, 'LT', 'Europe/Vilnius'),
(229, 'LU', 'Europe/Luxembourg'),
(230, 'LV', 'Europe/Riga'),
(231, 'LY', 'Africa/Tripoli'),
(232, 'MA', 'Africa/Casablanca'),
(233, 'MC', 'Europe/Monaco'),
(234, 'MD', 'Europe/Chisinau'),
(235, 'ME', 'Europe/Podgorica'),
(236, 'MF', 'America/Marigot'),
(237, 'MG', 'Indian/Antananarivo'),
(238, 'MH', 'Pacific/Majuro'),
(239, 'MH', 'Pacific/Kwajalein'),
(240, 'MK', 'Europe/Skopje'),
(241, 'ML', 'Africa/Bamako'),
(242, 'MM', 'Asia/Yangon'),
(243, 'MN', 'Asia/Ulaanbaatar'),
(244, 'MN', 'Asia/Hovd'),
(245, 'MN', 'Asia/Choibalsan'),
(246, 'MO', 'Asia/Macau'),
(247, 'MP', 'Pacific/Saipan'),
(248, 'MQ', 'America/Martinique'),
(249, 'MR', 'Africa/Nouakchott'),
(250, 'MS', 'America/Montserrat'),
(251, 'MT', 'Europe/Malta'),
(252, 'MU', 'Indian/Mauritius'),
(253, 'MV', 'Indian/Maldives'),
(254, 'MW', 'Africa/Blantyre'),
(255, 'MX', 'America/Mexico_City'),
(256, 'MX', 'America/Cancun'),
(257, 'MX', 'America/Merida'),
(258, 'MX', 'America/Monterrey'),
(259, 'MX', 'America/Matamoros'),
(260, 'MX', 'America/Mazatlan'),
(261, 'MX', 'America/Chihuahua'),
(262, 'MX', 'America/Ojinaga'),
(263, 'MX', 'America/Hermosillo'),
(264, 'MX', 'America/Tijuana'),
(265, 'MX', 'America/Bahia_Banderas'),
(266, 'MY', 'Asia/Kuala_Lumpur'),
(267, 'MY', 'Asia/Kuching'),
(268, 'MZ', 'Africa/Maputo'),
(269, 'NA', 'Africa/Windhoek'),
(270, 'NC', 'Pacific/Noumea'),
(271, 'NE', 'Africa/Niamey'),
(272, 'NF', 'Pacific/Norfolk'),
(273, 'NG', 'Africa/Lagos'),
(274, 'NI', 'America/Managua'),
(275, 'NL', 'Europe/Amsterdam'),
(276, 'NO', 'Europe/Oslo'),
(277, 'NP', 'Asia/Kathmandu'),
(278, 'NR', 'Pacific/Nauru'),
(279, 'NU', 'Pacific/Niue'),
(280, 'NZ', 'Pacific/Auckland'),
(281, 'NZ', 'Pacific/Chatham'),
(282, 'OM', 'Asia/Muscat'),
(283, 'PA', 'America/Panama'),
(284, 'PE', 'America/Lima'),
(285, 'PF', 'Pacific/Tahiti'),
(286, 'PF', 'Pacific/Marquesas'),
(287, 'PF', 'Pacific/Gambier'),
(288, 'PG', 'Pacific/Port_Moresby'),
(289, 'PG', 'Pacific/Bougainville'),
(290, 'PH', 'Asia/Manila'),
(291, 'PK', 'Asia/Karachi'),
(292, 'PL', 'Europe/Warsaw'),
(293, 'PM', 'America/Miquelon'),
(294, 'PN', 'Pacific/Pitcairn'),
(295, 'PR', 'America/Puerto_Rico'),
(296, 'PS', 'Asia/Gaza'),
(297, 'PS', 'Asia/Hebron'),
(298, 'PT', 'Europe/Lisbon'),
(299, 'PT', 'Atlantic/Madeira'),
(300, 'PT', 'Atlantic/Azores'),
(301, 'PW', 'Pacific/Palau'),
(302, 'PY', 'America/Asuncion'),
(303, 'QA', 'Asia/Qatar'),
(304, 'RE', 'Indian/Reunion'),
(305, 'RO', 'Europe/Bucharest'),
(306, 'RS', 'Europe/Belgrade'),
(307, 'RU', 'Europe/Kaliningrad'),
(308, 'RU', 'Europe/Moscow'),
(309, 'RU', 'Europe/Simferopol'),
(310, 'RU', 'Europe/Volgograd'),
(311, 'RU', 'Europe/Kirov'),
(312, 'RU', 'Europe/Astrakhan'),
(313, 'RU', 'Europe/Saratov'),
(314, 'RU', 'Europe/Ulyanovsk'),
(315, 'RU', 'Europe/Samara'),
(316, 'RU', 'Asia/Yekaterinburg'),
(317, 'RU', 'Asia/Omsk'),
(318, 'RU', 'Asia/Novosibirsk'),
(319, 'RU', 'Asia/Barnaul'),
(320, 'RU', 'Asia/Tomsk'),
(321, 'RU', 'Asia/Novokuznetsk'),
(322, 'RU', 'Asia/Krasnoyarsk'),
(323, 'RU', 'Asia/Irkutsk'),
(324, 'RU', 'Asia/Chita'),
(325, 'RU', 'Asia/Yakutsk'),
(326, 'RU', 'Asia/Khandyga'),
(327, 'RU', 'Asia/Vladivostok'),
(328, 'RU', 'Asia/Ust-Nera'),
(329, 'RU', 'Asia/Magadan'),
(330, 'RU', 'Asia/Sakhalin'),
(331, 'RU', 'Asia/Srednekolymsk'),
(332, 'RU', 'Asia/Kamchatka'),
(333, 'RU', 'Asia/Anadyr'),
(334, 'RW', 'Africa/Kigali'),
(335, 'SA', 'Asia/Riyadh'),
(336, 'SB', 'Pacific/Guadalcanal'),
(337, 'SC', 'Indian/Mahe'),
(338, 'SD', 'Africa/Khartoum'),
(339, 'SE', 'Europe/Stockholm'),
(340, 'SG', 'Asia/Singapore'),
(341, 'SH', 'Atlantic/St_Helena'),
(342, 'SI', 'Europe/Ljubljana'),
(343, 'SJ', 'Arctic/Longyearbyen'),
(344, 'SK', 'Europe/Bratislava'),
(345, 'SL', 'Africa/Freetown'),
(346, 'SM', 'Europe/San_Marino'),
(347, 'SN', 'Africa/Dakar'),
(348, 'SO', 'Africa/Mogadishu'),
(349, 'SR', 'America/Paramaribo'),
(350, 'SS', 'Africa/Juba'),
(351, 'ST', 'Africa/Sao_Tome'),
(352, 'SV', 'America/El_Salvador'),
(353, 'SX', 'America/Lower_Princes'),
(354, 'SY', 'Asia/Damascus'),
(355, 'SZ', 'Africa/Mbabane'),
(356, 'TC', 'America/Grand_Turk'),
(357, 'TD', 'Africa/Ndjamena'),
(358, 'TF', 'Indian/Kerguelen'),
(359, 'TG', 'Africa/Lome'),
(360, 'TH', 'Asia/Bangkok'),
(361, 'TJ', 'Asia/Dushanbe'),
(362, 'TK', 'Pacific/Fakaofo'),
(363, 'TL', 'Asia/Dili'),
(364, 'TM', 'Asia/Ashgabat'),
(365, 'TN', 'Africa/Tunis'),
(366, 'TO', 'Pacific/Tongatapu'),
(367, 'TR', 'Europe/Istanbul'),
(368, 'TT', 'America/Port_of_Spain'),
(369, 'TV', 'Pacific/Funafuti'),
(370, 'TW', 'Asia/Taipei'),
(371, 'TZ', 'Africa/Dar_es_Salaam'),
(372, 'UA', 'Europe/Kiev'),
(373, 'UA', 'Europe/Uzhgorod'),
(374, 'UA', 'Europe/Zaporozhye'),
(375, 'UG', 'Africa/Kampala'),
(376, 'UM', 'Pacific/Johnston'),
(377, 'UM', 'Pacific/Midway'),
(378, 'UM', 'Pacific/Wake'),
(379, 'US', 'America/New_York'),
(380, 'US', 'America/Detroit'),
(381, 'US', 'America/Kentucky/Louisville'),
(382, 'US', 'America/Kentucky/Monticello'),
(383, 'US', 'America/Indiana/Indianapolis'),
(384, 'US', 'America/Indiana/Vincennes'),
(385, 'US', 'America/Indiana/Winamac'),
(386, 'US', 'America/Indiana/Marengo'),
(387, 'US', 'America/Indiana/Petersburg'),
(388, 'US', 'America/Indiana/Vevay'),
(389, 'US', 'America/Chicago'),
(390, 'US', 'America/Indiana/Tell_City'),
(391, 'US', 'America/Indiana/Knox'),
(392, 'US', 'America/Menominee'),
(393, 'US', 'America/North_Dakota/Center'),
(394, 'US', 'America/North_Dakota/New_Salem'),
(395, 'US', 'America/North_Dakota/Beulah'),
(396, 'US', 'America/Denver'),
(397, 'US', 'America/Boise'),
(398, 'US', 'America/Phoenix'),
(399, 'US', 'America/Los_Angeles'),
(400, 'US', 'America/Anchorage'),
(401, 'US', 'America/Juneau'),
(402, 'US', 'America/Sitka'),
(403, 'US', 'America/Metlakatla'),
(404, 'US', 'America/Yakutat'),
(405, 'US', 'America/Nome'),
(406, 'US', 'America/Adak'),
(407, 'US', 'Pacific/Honolulu'),
(408, 'UY', 'America/Montevideo'),
(409, 'UZ', 'Asia/Samarkand'),
(410, 'UZ', 'Asia/Tashkent'),
(411, 'VA', 'Europe/Vatican'),
(412, 'VC', 'America/St_Vincent'),
(413, 'VE', 'America/Caracas'),
(414, 'VG', 'America/Tortola'),
(415, 'VI', 'America/St_Thomas'),
(416, 'VN', 'Asia/Ho_Chi_Minh'),
(417, 'VU', 'Pacific/Efate'),
(418, 'WF', 'Pacific/Wallis'),
(419, 'WS', 'Pacific/Apia'),
(420, 'YE', 'Asia/Aden'),
(421, 'YT', 'Indian/Mayotte'),
(422, 'ZA', 'Africa/Johannesburg'),
(423, 'ZM', 'Africa/Lusaka'),
(424, 'ZW', 'Africa/Harare');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogs`
--
ALTER TABLE `adminlogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `ads_stat`
--
ALTER TABLE `ads_stat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_link` (`id_link`);

--
-- Indexes for table `antiflood`
--
ALTER TABLE `antiflood`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blacklist`
--
ALTER TABLE `blacklist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `bookmark`
--
ALTER TABLE `bookmark`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);
ALTER TABLE `bookmark` ADD FULLTEXT KEY `url` (`url`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `group_access`
--
ALTER TABLE `group_access`
  ADD PRIMARY KEY (`id`),
  ADD KEY `level` (`level`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `mail_files`
--
ALTER TABLE `mail_files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `id_mail` (`id_mail`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_razdel` (`id_razdel`),
  ADD KEY `id_tema` (`id_tema`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `time` (`time`),
  ADD KEY `type` (`type`);
ALTER TABLE `post` ADD FULLTEXT KEY `text` (`text`);

--
-- Indexes for table `post_files`
--
ALTER TABLE `post_files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_razdel` (`id_razdel`),
  ADD KEY `id_tema` (`id_tema`),
  ADD KEY `id_post` (`id_post`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `post_likes`
--
ALTER TABLE `post_likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smiles`
--
ALTER TABLE `smiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `code` (`code`);

--
-- Indexes for table `tema`
--
ALTER TABLE `tema`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_razdel` (`id_razdel`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_user_last` (`id_user_last`),
  ADD KEY `time` (`time`),
  ADD KEY `up` (`up`),
  ADD KEY `type` (`type`);
ALTER TABLE `tema` ADD FULLTEXT KEY `name` (`name`);

--
-- Indexes for table `tema_vote`
--
ALTER TABLE `tema_vote`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_razdel` (`id_razdel`),
  ADD KEY `id_tema` (`id_tema`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tema_vote_us`
--
ALTER TABLE `tema_vote_us`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_razdel` (`id_razdel`),
  ADD KEY `id_tema` (`id_tema`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `userlogs`
--
ALTER TABLE `userlogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogs`
--
ALTER TABLE `adminlogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `ads_stat`
--
ALTER TABLE `ads_stat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=415;

--
-- AUTO_INCREMENT for table `antiflood`
--
ALTER TABLE `antiflood`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `blacklist`
--
ALTER TABLE `blacklist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bookmark`
--
ALTER TABLE `bookmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `group_access`
--
ALTER TABLE `group_access`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=281;

--
-- AUTO_INCREMENT for table `mail`
--
ALTER TABLE `mail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mail_files`
--
ALTER TABLE `mail_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `post_files`
--
ALTER TABLE `post_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_likes`
--
ALTER TABLE `post_likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `smiles`
--
ALTER TABLE `smiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=457;

--
-- AUTO_INCREMENT for table `tema`
--
ALTER TABLE `tema`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `tema_vote`
--
ALTER TABLE `tema_vote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tema_vote_us`
--
ALTER TABLE `tema_vote_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `userlogs`
--
ALTER TABLE `userlogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
