-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-08-24 13:26:08
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `photoshow`
--

-- --------------------------------------------------------

--
-- 表的结构 `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `id` int(11) NOT NULL,
  `last_date` date NOT NULL,
  `title` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `main` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `about`
--

INSERT INTO `about` (`id`, `last_date`, `title`, `main`) VALUES
(1, '2016-08-24', '不二公社', '<p>\n	<br />\n</p>\n<p>\n	特是到付时代风景\n是到付打算发士大夫地方<img src="http://localhost/kindeditor/plugins/emoticons/images/13.gif" border="0" alt="" /> \n</p>');

-- --------------------------------------------------------

--
-- 表的结构 `about_img`
--

CREATE TABLE IF NOT EXISTS `about_img` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img_name` varchar(80) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `account` varchar(20) COLLATE utf8_bin NOT NULL,
  `password` varchar(20) COLLATE utf8_bin NOT NULL,
  `name` varchar(40) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`account`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`account`, `password`, `name`) VALUES
('zzy', '1', 'zzy');

-- --------------------------------------------------------

--
-- 表的结构 `dress`
--

CREATE TABLE IF NOT EXISTS `dress` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(40) COLLATE utf8_bin NOT NULL,
  `name` varchar(40) COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL,
  `inf` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(40) COLLATE utf8_bin NOT NULL,
  `name` varchar(40) COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL,
  `inf` varchar(20) COLLATE utf8_bin NOT NULL,
  `family` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `family` (`family`),
  KEY `date` (`date`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=282 ;

--
-- 转存表中的数据 `gallery`
--

INSERT INTO `gallery` (`id`, `path`, `name`, `date`, `inf`, `family`) VALUES
(278, 'upload/image/2016/07/', '1467982736349359.jpeg', '2016-07-08', 'main', 1);

-- --------------------------------------------------------

--
-- 表的结构 `index_gallery`
--

CREATE TABLE IF NOT EXISTS `index_gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(40) COLLATE utf8_bin NOT NULL,
  `name` varchar(40) COLLATE utf8_bin NOT NULL,
  `inf` varchar(20) COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL,
  `family` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=15 ;

--
-- 转存表中的数据 `index_gallery`
--

INSERT INTO `index_gallery` (`id`, `path`, `name`, `inf`, `date`, `family`) VALUES
(9, 'upload/image/2016/07/', '1468464671270790.jpeg', '', '2016-07-14', 1),
(10, 'upload/image/2016/07/', '1468464672297937.jpeg', '', '2016-07-14', 2),
(11, 'upload/image/2016/07/', '1468464672133746.jpeg', '', '2016-07-14', 3),
(12, 'upload/image/2016/07/', '1468464672649047.jpeg', '', '2016-07-14', 4),
(13, 'upload/image/2016/07/', '1468464672374101.jpeg', '', '2016-07-14', 5),
(14, 'upload/image/2016/07/', '1468464672254660.jpeg', '', '2016-07-14', 6);

-- --------------------------------------------------------

--
-- 表的结构 `index_global`
--

CREATE TABLE IF NOT EXISTS `index_global` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(40) COLLATE utf8_bin NOT NULL,
  `name` varchar(40) COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL,
  `inf` varchar(20) COLLATE utf8_bin NOT NULL,
  `family` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `index_head`
--

CREATE TABLE IF NOT EXISTS `index_head` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(40) COLLATE utf8_bin NOT NULL,
  `name` varchar(40) COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL,
  `inf` varchar(20) COLLATE utf8_bin NOT NULL,
  `family` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=21 ;

--
-- 转存表中的数据 `index_head`
--

INSERT INTO `index_head` (`id`, `path`, `name`, `date`, `inf`, `family`) VALUES
(20, 'upload/image/2016/07/', '1468463994577098.jpeg', '2016-07-14', '', 'index_head');

-- --------------------------------------------------------

--
-- 表的结构 `index_logo`
--

CREATE TABLE IF NOT EXISTS `index_logo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(40) COLLATE utf8_bin NOT NULL,
  `name` varchar(40) COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL,
  `inf` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `index_visual`
--

CREATE TABLE IF NOT EXISTS `index_visual` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(40) COLLATE utf8_bin NOT NULL,
  `name` varchar(40) COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL,
  `inf` varchar(20) COLLATE utf8_bin NOT NULL,
  `family` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=15 ;

--
-- 转存表中的数据 `index_visual`
--

INSERT INTO `index_visual` (`id`, `path`, `name`, `date`, `inf`, `family`) VALUES
(8, 'upload/image/2016/07/', '1468465042371430.jpeg', '2016-07-14', '', 1),
(9, 'upload/image/2016/07/', '1468465043235214.jpeg', '2016-07-14', '', 2),
(10, 'upload/image/2016/07/', '1468465043333054.jpeg', '2016-07-14', '', 3),
(11, 'upload/image/2016/07/', '1468465043450501.jpeg', '2016-07-14', '', 4),
(12, 'upload/image/2016/07/', '1468465043354071.jpeg', '2016-07-14', '', 5),
(14, 'upload/image/2016/07/', '1468465043364816.jpeg', '2016-07-14', '', 7);

-- --------------------------------------------------------

--
-- 表的结构 `index_works`
--

CREATE TABLE IF NOT EXISTS `index_works` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(40) COLLATE utf8_bin NOT NULL,
  `name` varchar(40) COLLATE utf8_bin NOT NULL,
  `inf` varchar(20) COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL,
  `family` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `index_works`
--

INSERT INTO `index_works` (`id`, `path`, `name`, `inf`, `date`, `family`) VALUES
(7, 'upload/image/2016/07/', '1468464739398690.jpeg', '', '2016-07-14', 2),
(9, 'upload/image/2016/07/', '1468464739358586.jpeg', '', '2016-07-14', 4),
(10, 'upload/image/2016/07/', '1468464739333054.jpeg', '', '2016-07-14', 5),
(11, 'upload/image/2016/07/', '1468464739374101.jpeg', '', '2016-07-14', 6),
(12, 'upload/image/2016/07/', '1468464756450501.jpeg', '', '2016-07-14', 7);

-- --------------------------------------------------------

--
-- 表的结构 `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) COLLATE utf8_bin NOT NULL,
  `main` text COLLATE utf8_bin NOT NULL,
  `last_date` date NOT NULL,
  `abstract` varchar(40) COLLATE utf8_bin NOT NULL,
  `abs_img` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `news`
--

INSERT INTO `news` (`id`, `title`, `main`, `last_date`, `abstract`, `abs_img`) VALUES
(1, '三亚', '<img src="/kindeditor/attached/image/20160824/20160824131026_91180.jpeg" alt="" />', '2016-08-24', '', '/kindeditor/attached/image/20160824/20160824131021_28753.jpg'),
(2, '巴黎', '<img src="/kindeditor/attached/image/20160824/20160824131038_63154.jpeg" alt="" />', '2016-08-24', '', '/kindeditor/attached/image/20160824/20160824131034_86552.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `news_img`
--

CREATE TABLE IF NOT EXISTS `news_img` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img_family` int(11) NOT NULL,
  `img_name` varchar(80) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `news_img`
--

INSERT INTO `news_img` (`id`, `img_family`, `img_name`) VALUES
(8, 1, '/kindeditor/attached/image/20160824/20160824131026_91180.jpeg'),
(9, 2, '/kindeditor/attached/image/20160824/20160824131038_63154.jpeg');

-- --------------------------------------------------------

--
-- 表的结构 `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(40) COLLATE utf8_bin NOT NULL,
  `name` varchar(40) COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL,
  `inf` varchar(20) COLLATE utf8_bin NOT NULL,
  `family` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `slider`
--

INSERT INTO `slider` (`id`, `path`, `name`, `date`, `inf`, `family`) VALUES
(5, 'upload/image/2016/07/', '1468464109630309.jpeg', '2016-07-14', '', '1'),
(6, 'upload/image/2016/07/', '1468464252219446.jpeg', '2016-07-14', '', '2'),
(7, 'upload/image/2016/07/', '1468464258257422.jpeg', '2016-07-14', '', '3');

-- --------------------------------------------------------

--
-- 表的结构 `team`
--

CREATE TABLE IF NOT EXISTS `team` (
  `id` int(11) NOT NULL,
  `last_date` date NOT NULL,
  `title` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `main` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `team`
--

INSERT INTO `team` (`id`, `last_date`, `title`, `main`) VALUES
(1, '2016-08-24', '不二公社', '<p>\n	<br />\n</p>\n<p>\n	特是到付时代风景\n是到付打算发士大夫地方<img src="http://localhost/kindeditor/plugins/emoticons/images/13.gif" border="0" alt="" /> \n</p>');

-- --------------------------------------------------------

--
-- 表的结构 `team_img`
--

CREATE TABLE IF NOT EXISTS `team_img` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img_name` varchar(80) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

-- --------------------------------------------------------

--
-- 表的结构 `train`
--

CREATE TABLE IF NOT EXISTS `train` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) COLLATE utf8_bin NOT NULL,
  `main` text COLLATE utf8_bin NOT NULL,
  `last_date` date NOT NULL,
  `abstract` varchar(40) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `train`
--

INSERT INTO `train` (`id`, `title`, `main`, `last_date`, `abstract`) VALUES
(1, '公告', '<p>\n	<img src="http://localhost/kindeditor/plugins/emoticons/images/5.gif" border="0" alt="" /><img src="http://localhost/kindeditor/plugins/emoticons/images/5.gif" border="0" alt="" /><img src="http://localhost/kindeditor/plugins/emoticons/images/5.gif" border="0" alt="" />\n</p>\n<p>\n	<img src="/kindeditor/attached/image/20160824/20160824130946_51404.png" alt="" />\n</p>\n<p>\n	<table style="width:100%;" cellpadding="2" cellspacing="0" border="1" bordercolor="#000000">\n		<tbody>\n			<tr>\n				<td>\n					<br />\n				</td>\n				<td>\n					<br />\n				</td>\n			</tr>\n			<tr>\n				<td>\n					<br />\n				</td>\n				<td>\n					<br />\n				</td>\n			</tr>\n			<tr>\n				<td>\n					<br />\n				</td>\n				<td>\n					<br />\n				</td>\n			</tr>\n		</tbody>\n	</table>\n<br />\n</p>', '2016-08-24', '测试一下呗');

-- --------------------------------------------------------

--
-- 表的结构 `train_img`
--

CREATE TABLE IF NOT EXISTS `train_img` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img_family` int(11) NOT NULL,
  `img_name` varchar(80) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `train_img`
--

INSERT INTO `train_img` (`id`, `img_family`, `img_name`) VALUES
(10, 1, '/kindeditor/attached/image/20160824/20160824130946_51404.png');

-- --------------------------------------------------------

--
-- 表的结构 `visual`
--

CREATE TABLE IF NOT EXISTS `visual` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(40) COLLATE utf8_bin NOT NULL,
  `name` varchar(40) COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL,
  `inf` varchar(20) COLLATE utf8_bin NOT NULL,
  `family` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `visual`
--

INSERT INTO `visual` (`id`, `path`, `name`, `date`, `inf`, `family`) VALUES
(13, 'upload/image/2016/07/', '1467982498308158.jpeg', '2016-07-08', 'main', 1);

-- --------------------------------------------------------

--
-- 表的结构 `weixin_image`
--

CREATE TABLE IF NOT EXISTS `weixin_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(40) COLLATE utf8_bin NOT NULL,
  `name` varchar(40) COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL,
  `inf` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `works`
--

CREATE TABLE IF NOT EXISTS `works` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(40) COLLATE utf8_bin NOT NULL,
  `name` varchar(40) COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL,
  `inf` varchar(20) COLLATE utf8_bin NOT NULL,
  `family` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `works`
--

INSERT INTO `works` (`id`, `path`, `name`, `date`, `inf`, `family`) VALUES
(2, 'upload/image/2016/07/', '1467982190133746.jpeg', '2016-07-08', 'main', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
