-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2015-11-18 07:29:01
-- 服务器版本： 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rack`
--

-- --------------------------------------------------------

--
-- 表的结构 `intro`
--

CREATE TABLE IF NOT EXISTS `intro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `typeid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='公司简介，企业文化，经营理念等' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `fid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `menu`
--

INSERT INTO `menu` (`id`, `title`, `fid`) VALUES
(1, '关于我们', 0),
(2, '技术支持', 0),
(3, '工程案例', 0),
(4, '公益支持', 0),
(5, '联系我们', 0),
(6, '新闻中心', 0),
(7, '关于我们', 1),
(8, '经营理念', 1);

-- --------------------------------------------------------

--
-- 表的结构 `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `createTime` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `createTime`) VALUES
(0, 'adsafasdfasd', 'sdafasdfasf', '2015-11-17');

-- --------------------------------------------------------

--
-- 表的结构 `rack`
--

CREATE TABLE IF NOT EXISTS `rack` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `createTime` varchar(50) NOT NULL,
  `number` varchar(50) NOT NULL,
  `typeid` int(11) NOT NULL,
  `price` float NOT NULL,
  `size` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- 转存表中的数据 `rack`
--

INSERT INTO `rack` (`id`, `title`, `content`, `createTime`, `number`, `typeid`, `price`, `size`, `image`) VALUES
(1, '中型货架', '中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架', '2015-11-20 12:30:00', 'A-001', 1, 100, '100*100*200', 'http://www.bj-hj.com/images/j2.jpg'),
(2, '中型货架2', '中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架', '2015-11-20 12:30:00', 'A-002', 1, 100, '100*100*200', 'http://www.bj-hj.com/images/j2.jpg'),
(3, '中型货架333', '中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架', '2015-11-20 12:30:00', 'A-001', 2, 100, '100*100*200', 'http://www.bj-hj.com/images/j2.jpg'),
(4, '中型货架33333333', '中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架', '2015-11-20 12:30:00', 'A-001', 2, 100, '100*100*200', 'http://www.bj-hj.com/images/j2.jpg'),
(5, '中型货架', '中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架', '2015-11-20 12:30:00', 'A-001', 1, 100, '100*100*200', 'http://www.bj-hj.com/images/j2.jpg'),
(6, '中型货架', '中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架', '2015-11-20 12:30:00', 'A-001', 1, 100, '100*100*200', 'http://www.bj-hj.com/images/j2.jpg'),
(7, '中型货架1111', '中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架', '2015-11-20 12:30:00', 'A-001', 1, 100, '100*100*200', 'http://www.bj-hj.com/images/j2.jpg'),
(8, '中型货架333332', '中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架', '2015-11-20 12:30:00', 'A-001', 1, 100, '100*100*200', 'http://www.bj-hj.com/images/j2.jpg'),
(9, '中型货架333555', '中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架', '2015-11-20 12:30:00', 'A-001', 1, 100, '100*100*200', 'http://www.bj-hj.com/images/j2.jpg'),
(10, '中型货架', '中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架', '2015-11-20 12:30:00', 'A-001', 1, 100, '100*100*200', 'http://www.bj-hj.com/images/j2.jpg'),
(11, '中型货架', '中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架', '2015-11-20 12:30:00', 'A-001', 1, 100, '100*100*200', 'http://www.bj-hj.com/images/j2.jpg'),
(12, '中型货架', '中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架', '2015-11-20 12:30:00', 'A-001', 1, 100, '100*100*200', 'http://www.bj-hj.com/images/j2.jpg'),
(13, '中型货架', '中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架', '2015-11-20 12:30:00', 'A-001', 1, 100, '100*100*200', 'http://www.bj-hj.com/images/j2.jpg'),
(14, '中型货架', '中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架', '2015-11-20 12:30:00', 'A-001', 1, 100, '100*100*200', 'http://www.bj-hj.com/images/j2.jpg'),
(15, '中型货架', '中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架中型货架', '2015-11-20 12:30:00', 'A-001', 1, 100, '100*100*200', 'http://www.bj-hj.com/images/j2.jpg'),
(16, '产品1', '产品1', '2015-11-17', 'JPHJ-001', 1, 12341200, '1000*100*200', '564ae98da134e.png'),
(17, 'afas', '213411', '2015-11-17', '234124', 1, 234132, '2134124', '564aec3010997.png'),
(18, 'afas231414', '213411', '2015-11-17', '234124', 2, 234132, '2134124', '564aec8bab7ee.png'),
(19, 'afas231414', '213411', '2015-11-17', '234124', 2, 234132, '2134124', '564aeff5881cb.png'),
(20, 'afas231414', '213411', '2015-11-17', '234124', 2, 234132, '2134124', '564b1a3681737.png');

-- --------------------------------------------------------

--
-- 表的结构 `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `fid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `type`
--

INSERT INTO `type` (`id`, `title`, `fid`) VALUES
(1, '精品货架', 0),
(2, '中型货架', 0);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `roleid` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `roleid`, `address`, `phone`, `email`, `status`) VALUES
(1, 'admin', 'admin', 1, '北京', '13683617727', 'xunice@qq.com', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
