-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 年 04 月 25 日 00:48
-- 服务器版本: 5.5.8
-- PHP 版本: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- 数据库: `photoshow`
--

-- --------------------------------------------------------

--
-- 表的结构 `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(40) COLLATE utf8_bin NOT NULL,
  `name` varchar(40) COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL,
  `inf` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `about`
--


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

--
-- 转存表中的数据 `dress`
--


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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=271 ;

--
-- 转存表中的数据 `gallery`
--

INSERT INTO `gallery` (`id`, `path`, `name`, `date`, `inf`, `family`) VALUES
(1, '/upload/image/2016/03/', '1457684093-6542.jpg', '2016-03-22', 'main', 1),
(3, '/upload/image/2016/03/', '1457684109-9663.jpg', '2016-03-22', '', 1),
(4, '/upload/image/2016/03/', '1457684110-3025.jpg', '2016-03-22', '', 1),
(5, '/upload/image/2016/03/', '1457684111-1291.jpg', '2016-03-22', '', 1),
(6, '/upload/image/2016/03/', '1457684113-5956.jpg', '2016-03-22', '', 1),
(7, '/upload/image/2016/03/', '1457684115-7356.jpg', '2016-03-22', '', 1),
(8, '/upload/image/2016/03/', '1457684117-5148.jpg', '2016-03-22', '', 1),
(9, '/upload/image/2016/03/', '1457684037-8662.jpg', '2016-03-22', 'main', 2),
(10, '/upload/image/2016/03/', '1457684049-4938.jpg', '2016-03-22', '', 2),
(11, '/upload/image/2016/03/', '1457684050-6129.jpg', '2016-03-22', '', 2),
(12, '/upload/image/2016/03/', '1457684051-6825.jpg', '2016-03-22', '', 2),
(13, '/upload/image/2016/03/', '1457684052-2851.jpg', '2016-03-22', '', 2),
(15, '/upload/image/2016/03/', '1457684053-6666.jpg', '2016-03-22', '', 2),
(16, '/upload/image/2016/03/', '1457684054-7052.jpg', '2016-03-22', '', 2),
(17, '/upload/image/2016/03/', '1457684055-9782.jpg', '2016-03-22', '', 2),
(18, '/upload/image/2016/03/', '1457683969-5989.jpg', '2016-03-22', 'main', 3),
(19, '/upload/image/2016/03/', '1457683985-236.jpg', '2016-03-22', '', 3),
(20, '/upload/image/2016/03/', '1457683986-3455.jpg', '2016-03-22', '', 3),
(22, '/upload/image/2016/03/', '1457683988-2139.jpg', '2016-03-22', '', 3),
(23, '/upload/image/2016/03/', '1457683989-5688.jpg', '2016-03-22', '', 3),
(24, '/upload/image/2016/03/', '1457683990-3319.jpg', '2016-03-22', '', 3),
(25, '/upload/image/2016/03/', '1457683899-662.jpg', '2016-03-22', 'main', 4),
(26, '/upload/image/2016/03/', '1457683937-9909.jpg', '2016-03-22', '', 4),
(27, '/upload/image/2016/03/', '1457683937-4744.jpg', '2016-03-22', '', 4),
(28, '/upload/image/2016/03/', '1457683938-5955.jpg', '2016-03-22', '', 4),
(29, '/upload/image/2016/03/', '1457683938-1667.jpg', '2016-03-22', '', 4),
(30, '/upload/image/2016/03/', '1457683939-6643.jpg', '2016-03-22', '', 4),
(31, '/upload/image/2016/03/', '1457683939-9297.jpg', '2016-03-22', '', 4),
(32, '/upload/image/2016/03/', '1457683940-8824.jpg', '2016-03-22', '', 4),
(33, '/upload/image/2016/01/', '1454038647-1750.jpg', '2016-03-22', 'main', 5),
(34, '/upload/image/2016/01/', '1454038656-5762.jpg', '2016-03-22', '', 5),
(35, '/upload/image/2016/01/', '1454038656-10000.jpg', '2016-03-22', '', 5),
(36, '/upload/image/2016/01/', '1454038659-5293.jpg', '2016-03-22', '', 5),
(37, '/upload/image/2016/01/', '1454038659-2136.jpg', '2016-03-22', '', 5),
(38, '/upload/image/2016/01/', '1454038660-166.jpg', '2016-03-22', '', 5),
(39, '/upload/image/2016/01/', '1454038661-2959.jpg', '2016-03-22', '', 5),
(94, '/upload/image/2016/01/', '1454036369-7855.jpg', '2016-03-22', 'main', 6),
(95, '/upload/image/2016/01/', '1454036380-3842.jpg', '2016-03-22', '', 6),
(96, '/upload/image/2016/01/', '1454036382-1573.jpg', '2016-03-22', '', 6),
(97, '/upload/image/2016/01/', '1454036385-5145.jpg', '2016-03-22', '', 6),
(98, '/upload/image/2016/01/', '1454036386-8290.jpg', '2016-03-22', '', 6),
(99, '/upload/image/2016/01/', '1454035776-2251-p.jpg', '2016-03-22', 'main', 7),
(100, '/upload/image/2016/01/', '1454035785-3352.jpg', '2016-03-22', '', 7),
(101, '/upload/image/2016/01/', '1454035785-2590.jpg', '2016-03-22', '', 7),
(102, '/upload/image/2016/01/', '1454035786-2310.jpg', '2016-03-22', '', 7),
(103, '/upload/image/2016/01/', '1454035787-5806.jpg', '2016-03-22', '', 7),
(104, '/upload/image/2016/01/', '1454035788-1563.jpg', '2016-03-22', '', 7),
(105, '/upload/image/2016/01/', '1454035789-4546.jpg', '2016-03-22', '', 7),
(106, '/upload/image/2016/01/', '1454035790-8351.jpg', '2016-03-22', '', 7),
(107, '/upload/image/2016/01/', '1454037998-4892.jpg', '2016-03-22', 'main', 8),
(108, '/upload/image/2016/01/', '1454035734-4985.jpg', '2016-03-22', '', 8),
(109, '/upload/image/2016/01/', '1454035735-7663.jpg', '2016-03-22', '', 8),
(110, '/upload/image/2016/01/', '1454035736-5909.jpg', '2016-03-22', '', 8),
(111, '/upload/image/2016/01/', '1454035737-1737.jpg', '2016-03-22', '', 8),
(112, '/upload/image/2016/01/', '1454035739-1733.jpg', '2016-03-22', '', 8),
(113, '/upload/image/2016/01/', '1454035740-4922.jpg', '2016-03-22', '', 8),
(114, '/upload/image/2016/01/', '1454035742-802.jpg', '2016-03-22', '', 8),
(115, '/upload/image/2016/01/', '1454035662-2321.jpg', '2016-03-22', 'main', 9),
(116, '/upload/image/2016/01/', '1454035674-8708.jpg', '2016-03-22', '', 9),
(117, '/upload/image/2016/01/', '1454035675-9718.jpg', '2016-03-22', '', 9),
(118, '/upload/image/2016/01/', '1454035676-2586.jpg', '2016-03-22', '', 9),
(119, '/upload/image/2016/01/', '1454035678-99.jpg', '2016-03-22', '', 9),
(120, '/upload/image/2016/01/', '1454035679-4330.jpg', '2016-03-22', '', 9),
(121, '/upload/image/2016/01/', '1454035681-8971.jpg', '2016-03-22', '', 9),
(122, '/upload/image/2016/01/', '1454035682-728.jpg', '2016-03-22', '', 9),
(123, '/upload/image/2016/01/', '1454035684-9803.jpg', '2016-03-22', '', 9),
(124, '/upload/image/2016/01/', '1454035685-4139.jpg', '2016-03-22', '', 9),
(125, '/upload/image/2016/01/', '1454035686-4420.jpg', '2016-03-22', '', 9),
(126, '/upload/image/2016/01/', '1454035386-6250.jpg', '2016-03-22', 'main', 10),
(127, '/upload/image/2016/01/', '1454035396-1995.jpg', '2016-03-22', '', 10),
(128, '/upload/image/2016/01/', '1454035398-7780.jpg', '2016-03-22', '', 10),
(129, '/upload/image/2016/01/', '1454035399-4425.jpg', '2016-03-22', '', 10),
(130, '/upload/image/2016/01/', '1454035400-271.jpg', '2016-03-22', '', 10),
(131, '/upload/image/2016/01/', '1454035402-3310.jpg', '2016-03-22', '', 10),
(132, '/upload/image/2016/01/', '1454035403-9515.jpg', '2016-03-22', '', 10),
(133, '/upload/image/2016/01/', '1454035405-1035.jpg', '2016-03-22', '', 10),
(134, '/upload/image/2016/01/', '1454035407-3111.jpg', '2016-03-22', '', 10),
(135, '/upload/image/2016/01/', '1454035408-6167.jpg', '2016-03-22', '', 10),
(136, '/upload/image/2016/01/', '1454037661-9460.jpg', '2016-03-22', 'main', 11),
(137, '/upload/image/2016/01/', '1454037342-1820.jpg', '2016-03-22', '', 11),
(138, '/upload/image/2016/01/', '1454037344-794.jpg', '2016-03-22', '', 11),
(139, '/upload/image/2016/01/', '1454037345-6542.jpg', '2016-03-22', '', 11),
(140, '/upload/image/2016/01/', '1454037346-6039.jpg', '2016-03-22', '', 11),
(141, '/upload/image/2016/01/', '1454037348-2921.jpg', '2016-03-22', '', 11),
(142, '/upload/image/2016/01/', '1454037349-9818.jpg', '2016-03-22', '', 11),
(143, '/upload/image/2016/01/', '1454037351-1967.jpg', '2016-03-22', '', 11),
(144, '/upload/image/2016/01/', '1454037352-1306.jpg', '2016-03-22', '', 11),
(145, '/upload/image/2016/01/', '1454037354-1277.jpg', '2016-03-22', '', 11),
(146, '/upload/image/2016/01/', '1454037355-8769.jpg', '2016-03-22', '', 11),
(147, '/upload/image/2016/01/', '1454038412-4255.jpg', '2016-03-22', 'main', 12),
(148, '/upload/image/2016/01/', '1454034947-6542.jpg', '2016-03-22', '', 12),
(149, '/upload/image/2016/01/', '1454034948-596.jpg', '2016-03-22', '', 12),
(150, '/upload/image/2016/01/', '1454034949-637.jpg', '2016-03-22', '', 12),
(151, '/upload/image/2016/01/', '1454034950-5054.jpg', '2016-03-22', '', 12),
(152, '/upload/image/2016/01/', '1454034951-8364.jpg', '2016-03-22', '', 12),
(153, '/upload/image/2016/01/', '1454034952-4553.jpg', '2016-03-22', '', 12),
(154, '/upload/image/2016/01/', '1454038089-185.jpg', '2016-03-22', 'main', 13),
(155, '/upload/image/2016/01/', '1454034868-1359.jpg', '2016-03-22', '', 13),
(156, '/upload/image/2016/01/', '1454034870-7402.jpg', '2016-03-22', '', 13),
(157, '/upload/image/2016/01/', '1454034871-2880.jpg', '2016-03-22', '', 13),
(158, '/upload/image/2016/01/', '1454034874-5663.jpg', '2016-03-22', '', 13),
(159, '/upload/image/2016/01/', '1454034877-9869.jpg', '2016-03-22', '', 13),
(160, '/upload/image/2016/01/', '1454041533-2676.jpg', '2016-03-22', 'main', 14),
(161, '/upload/image/2016/01/', '1454034831-448.jpg', '2016-03-22', '', 14),
(162, '/upload/image/2016/01/', '1454034834-6323.jpg', '2016-03-22', '', 14),
(164, '/upload/image/2016/01/', '1454034837-8459.jpg', '2016-03-22', '', 14),
(166, '/upload/image/2016/01/', '1454034841-7202.jpg', '2016-03-22', '', 14),
(167, '/upload/image/2016/01/', '1454034842-8534.jpg', '2016-03-22', '', 14),
(168, '/upload/image/2016/01/', '1454038301-316.jpg', '2016-03-22', 'main', 15),
(169, '/upload/image/2016/01/', '1454034767-9542.jpg', '2016-03-22', '', 15),
(170, '/upload/image/2016/01/', '1454034768-7126.jpg', '2016-03-22', '', 15),
(171, '/upload/image/2016/01/', '1454034769-6406.jpg', '2016-03-22', '', 15),
(172, '/upload/image/2016/01/', '1454038230-7068.jpg', '2016-03-22', 'main', 16),
(173, '/upload/image/2016/01/', '1454034725-9935.jpg', '2016-03-22', '', 16),
(174, '/upload/image/2016/01/', '1454034727-6169.jpg', '2016-03-22', '', 16),
(175, '/upload/image/2016/01/', '1454034728-2252.jpg', '2016-03-22', '', 16),
(176, '/upload/image/2016/01/', '1454034731-6863.jpg', '2016-03-22', '', 16),
(177, '/upload/image/2016/01/', '1454034732-8856.jpg', '2016-03-22', '', 16),
(179, '/upload/image/2016/01/', '1454034643-2325.jpg', '2016-03-22', '', 17),
(180, '/upload/image/2016/01/', '1454034644-4050.jpg', '2016-03-22', '', 17),
(181, '/upload/image/2016/01/', '1454034646-1124.jpg', '2016-03-22', '', 17),
(182, '/upload/image/2016/01/', '1454034647-5737.jpg', '2016-03-22', '', 17),
(183, '/upload/image/2016/01/', '1454034587-9080.jpg', '2016-03-22', 'main', 18),
(184, '/upload/image/2016/01/', '1454034596-9518.jpg', '2016-03-22', '', 18),
(185, '/upload/image/2016/01/', '1454034597-2405.jpg', '2016-03-22', '', 18),
(186, '/upload/image/2016/01/', '1454034599-610.jpg', '2016-03-22', '', 18),
(187, '/upload/image/2016/01/', '1454034601-337.jpg', '2016-03-22', '', 18),
(188, '/upload/image/2016/01/', '1454034605-5375.jpg', '2016-03-22', '', 18),
(189, '/upload/image/2016/01/', '1454034608-404.jpg', '2016-03-22', '', 18),
(190, '/upload/image/2016/01/', '1454034609-6795.jpg', '2016-03-22', '', 18),
(191, '/upload/image/2016/01/', '1454034612-7691.jpg', '2016-03-22', '', 18),
(192, '/upload/image/2016/01/', '1454034614-763.jpg', '2016-03-22', '', 18),
(193, '/upload/image/2016/01/', '1454034615-5640.jpg', '2016-03-22', '', 18),
(194, '/upload/image/2016/01/', '1454131131-7313.jpg', '2016-03-22', 'main', 19),
(195, '/upload/image/2016/01/', '1454034504-6909.jpg', '2016-03-22', '', 19),
(196, '/upload/image/2016/01/', '1454034504-9868.jpg', '2016-03-22', '', 19),
(197, '/upload/image/2016/01/', '1454034505-9686.jpg', '2016-03-22', '', 19),
(198, '/upload/image/2016/01/', '1454034505-9116.jpg', '2016-03-22', '', 19),
(199, '/upload/image/2016/01/', '1454034506-8815.jpg', '2016-03-22', '', 19),
(200, '/upload/image/2016/01/', '1454034507-7276.jpg', '2016-03-22', '', 19),
(201, '/upload/image/2016/01/', '1454034508-6986.jpg', '2016-03-22', '', 19),
(202, '/upload/image/2016/01/', '1454034509-4173.jpg', '2016-03-22', '', 19),
(204, '/upload/image/2016/01/', '1454034284-5058.jpg', '2016-03-22', 'main', 20),
(205, '/upload/image/2016/01/', '1454034293-7894.jpg', '2016-03-22', '', 20),
(206, '/upload/image/2016/01/', '1454034294-3352.jpg', '2016-03-22', '', 20),
(207, '/upload/image/2016/01/', '1454034294-9580.jpg', '2016-03-22', '', 20),
(208, '/upload/image/2016/01/', '1454034295-6940.jpg', '2016-03-22', '', 20),
(209, '/upload/image/2016/01/', '1454034296-9775.jpg', '2016-03-22', '', 20),
(210, '/upload/image/2016/01/', '1454034299-4707.jpg', '2016-03-22', '', 20),
(211, '/upload/image/2016/01/', '1454034301-7311.jpg', '2016-03-22', '', 20),
(212, '/upload/image/2016/01/', '1454034302-3449.jpg', '2016-03-22', '', 20),
(213, '/upload/image/2016/01/', '1454034302-7258.jpg', '2016-03-22', '', 20),
(214, '/upload/image/2016/01/', '1454034303-1985.jpg', '2016-03-22', '', 20),
(215, '/upload/image/2016/01/', '1454034304-9437.jpg', '2016-03-22', '', 20),
(216, '/upload/image/2016/01/', '1454034304-4249.jpg', '2016-03-22', '', 20),
(217, '/upload/image/2016/01/', '1454034307-9571.jpg', '2016-03-22', '', 20),
(218, '/upload/image/2016/01/', '1454034149-4454.jpg', '2016-03-22', 'main', 21),
(219, '/upload/image/2016/01/', '1454034160-3063.jpg', '2016-03-22', '', 21),
(220, '/upload/image/2016/01/', '1454034163-6240.jpg', '2016-03-22', '', 21),
(221, '/upload/image/2016/01/', '1454034165-6847.jpg', '2016-03-22', '', 21),
(222, '/upload/image/2016/01/', '1454034167-4404.jpg', '2016-03-22', '', 21),
(223, '/upload/image/2016/01/', '1454034168-366.jpg', '2016-03-22', '', 21),
(224, '/upload/image/2016/01/', '1454034169-5009.jpg', '2016-03-22', '', 21),
(225, '/upload/image/2016/01/', '1454034170-1502.jpg', '2016-03-22', '', 21),
(226, '/upload/image/2016/01/', '1454034173-1132.jpg', '2016-03-22', '', 21),
(227, '/upload/image/2016/01/', '1454034174-5721.jpg', '2016-03-22', '', 21),
(228, '/upload/image/2016/01/', '1454034035-1346.jpg', '2016-03-22', 'main', 22),
(229, '/upload/image/2016/01/', '1454034046-582.jpg', '2016-03-22', '', 22),
(230, '/upload/image/2016/01/', '1454034047-2126.jpg', '2016-03-22', '', 22),
(231, '/upload/image/2016/01/', '1454034047-684.jpg', '2016-03-22', '', 22),
(232, '/upload/image/2016/01/', '1454034049-6520.jpg', '2016-03-22', '', 22),
(233, '/upload/image/2016/01/', '1454034050-5607.jpg', '2016-03-22', '', 22),
(234, '/upload/image/2016/01/', '1454034052-5106.jpg', '2016-03-22', '', 22),
(235, '/upload/image/2016/01/', '1454034053-7856.jpg', '2016-03-22', '', 22),
(236, '/upload/image/2016/01/', '1454034055-2863.jpg', '2016-03-22', '', 22),
(237, '/upload/image/2016/01/', '1454034058-7040.jpg', '2016-03-22', '', 22),
(238, '/upload/image/2016/01/', '1454034061-9301.jpg', '2016-03-22', '', 22),
(239, '/upload/image/2016/01/', '1454037791-6108.jpg', '2016-03-22', 'main', 23),
(240, '/upload/image/2016/01/', '1454033947-6811.jpg', '2016-03-22', '', 23),
(241, '/upload/image/2016/01/', '1454033947-3653.jpg', '2016-03-22', '', 23),
(243, '/upload/image/2016/01/', '1454033948-9736.jpg', '2016-03-22', '', 23),
(244, '/upload/image/2016/01/', '1454033950-2270.jpg', '2016-03-22', '', 23),
(245, '/upload/image/2016/01/', '1454033951-7026.jpg', '2016-03-22', '', 23),
(249, '/upload/image/2016/01/', '1454033954-6479.jpg', '2016-03-22', '', 23),
(250, '/upload/image/2016/01/', '1454033954-7812.jpg', '2016-03-22', '', 23),
(263, 'upload/image/2016/04/', '1460624883160194.jpeg', '2016-04-14', '', 19),
(270, 'upload/image/2016/04/', '1460631002398690.jpeg', '2016-04-14', 'main', 17);

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `index_gallery`
--

INSERT INTO `index_gallery` (`id`, `path`, `name`, `inf`, `date`) VALUES
(1, 'upload/image/2016/01/', '1454038649-425.jpg', '夜色', '2016-04-03'),
(2, 'upload/image/2016/01/', '1454036373-9539.jpg', '街拍', '2016-04-03'),
(3, 'upload/image/2016/01/', '1454035779-2035.jpg', '夕阳', '2016-04-03'),
(4, 'upload/image/2016/01/', '1454035388-9503.jpg', '角楼', '2016-04-03'),
(5, 'upload/image/2016/01/', '1454034940-7269.jpg', '天坛', '2016-04-03'),
(6, 'upload/image/2016/01/', '1454131136-9225.jpg', '马路夜景', '2016-04-03');

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `index_global`
--


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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=19 ;

--
-- 转存表中的数据 `index_head`
--

INSERT INTO `index_head` (`id`, `path`, `name`, `date`, `inf`, `family`) VALUES
(18, 'upload/image/2016/04/', '1461510369577098.jpeg', '2016-04-24', '', 'index_head');

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

--
-- 转存表中的数据 `index_logo`
--


-- --------------------------------------------------------

--
-- 表的结构 `index_news`
--

CREATE TABLE IF NOT EXISTS `index_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(40) COLLATE utf8_bin NOT NULL,
  `name` varchar(40) COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL,
  `inf` varchar(20) COLLATE utf8_bin NOT NULL,
  `detail_path` varchar(40) COLLATE utf8_bin NOT NULL,
  `detail_name` varchar(40) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `index_news`
--

INSERT INTO `index_news` (`id`, `path`, `name`, `date`, `inf`, `detail_path`, `detail_name`) VALUES
(1, '/upload/image/2016/01/', '1454046220-4845.jpg', '2016-03-20', '巴厘岛', '/upload/image/', '1454049294-2929.png'),
(2, '/upload/image/2016/01/', '1454046163-3638.jpg', '2016-03-20', '三亚', '/upload/image/', '1454049314-8232.png'),
(3, '/upload/image/2016/01/', '1454046129-2766.jpg', '2016-03-20', '北京', '/upload/image/', '1454049337-4572.png');

-- --------------------------------------------------------

--
-- 表的结构 `index_news_detail`
--

CREATE TABLE IF NOT EXISTS `index_news_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(40) COLLATE utf8_bin NOT NULL,
  `name` varchar(40) COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL,
  `inf` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `index_news_detail`
--


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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `index_visual`
--

INSERT INTO `index_visual` (`id`, `path`, `name`, `date`, `inf`) VALUES
(1, 'upload/image/2016/03/', '1457687667-42.jpg', '2016-03-20', ''),
(2, 'upload/image/2016/03/', '1457687610-6974.jpg', '2016-03-20', ''),
(3, 'upload/image/2016/03/', '1457687549-2097.jpg', '2016-03-20', ''),
(4, 'upload/image/2016/03/', '1457687363-3728.jpg', '2016-03-20', ''),
(5, 'upload/image/2016/03/', '1457687147-4897.jpg', '2016-03-20', ''),
(6, 'upload/image/2016/03/', '1457686961-8413.jpg', '2016-03-20', '');

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `index_works`
--

INSERT INTO `index_works` (`id`, `path`, `name`, `inf`, `date`) VALUES
(1, 'upload/image/2016/01/', '1454042726-9901.jpg', '张赛夫妇', '2016-04-03'),
(2, 'upload/image/2016/01/', '1453885055-36.jpg', '米苏', '2016-04-03'),
(3, 'upload/image/2016/01/', '1453885039-5158.jpg', '李佳琪夫妇(2)', '2016-04-03'),
(4, 'upload/image/2016/01/', '1453884534-9148.jpg', '朱雷夫妇', '2016-04-03'),
(5, 'upload/image/2016/01/', '1453885473-697.jpg', '米苏', '2016-04-03');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `slider`
--

INSERT INTO `slider` (`id`, `path`, `name`, `date`, `inf`, `family`) VALUES
(1, 'upload/image/2016/03/', '1457680533-3800.jpg', '2016-04-03', '', 'index_slider'),
(2, 'upload/image/2016/03/', '1457680510-5926.jpg', '2016-04-03', '', 'index_slider'),
(3, 'upload/image/2016/03/', '1457680372-7286.jpg', '2016-04-03', '', 'index_slider');

-- --------------------------------------------------------

--
-- 表的结构 `team`
--

CREATE TABLE IF NOT EXISTS `team` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(40) COLLATE utf8_bin NOT NULL,
  `name` varchar(40) COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL,
  `inf` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `team`
--


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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=12 ;

--
-- 转存表中的数据 `visual`
--

INSERT INTO `visual` (`id`, `path`, `name`, `date`, `inf`, `family`) VALUES
(1, 'upload/image/2016/04/', '1461500144160137.jpeg', '2016-04-24', '', 1),
(2, 'upload/image/2016/04/', '1461500144424045.jpeg', '2016-04-24', '', 1),
(3, 'upload/image/2016/04/', '14615001448181.jpeg', '2016-04-24', '', 1),
(4, 'upload/image/2016/04/', '1461500144286035.jpeg', '2016-04-24', '', 1),
(5, 'upload/image/2016/04/', '1461500144297327.jpeg', '2016-04-24', '', 1),
(7, 'upload/image/2016/04/', '1461500145216075.jpeg', '2016-04-24', '', 1),
(8, 'upload/image/2016/04/', '1461500145295940.jpeg', '2016-04-24', 'main', 1);

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

--
-- 转存表中的数据 `weixin_image`
--


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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- 转存表中的数据 `works`
--

