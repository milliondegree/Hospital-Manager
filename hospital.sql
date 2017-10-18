-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-06-16 15:01:28
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- 表的结构 `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `ID` varchar(5) NOT NULL,
  `password` varchar(5) NOT NULL,
  `subject` varchar(10) NOT NULL,
  `register` varchar(10) NOT NULL,
  `name` varchar(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `doctor`
--

INSERT INTO `doctor` (`ID`, `password`, `subject`, `register`, `name`) VALUES
('00000', '00000', 'surgery', '', 'lisi'),
('00001', '00001', 'neurology', '', 'tom');

-- --------------------------------------------------------

--
-- 表的结构 `medicine`
--

CREATE TABLE IF NOT EXISTS `medicine` (
  `ID` varchar(5) NOT NULL,
  `name` varchar(10) NOT NULL,
  `qulitity` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `medicine`
--

INSERT INTO `medicine` (`ID`, `name`, `qulitity`) VALUES
('00000', 'PAT', 0),
('00001', 'Amoxicilli', 37),
('00002', 'Abc', 50);

-- --------------------------------------------------------

--
-- 表的结构 `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `ID` varchar(5) NOT NULL,
  `password` varchar(5) NOT NULL,
  `name` varchar(10) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `doctor` varchar(10) NOT NULL,
  `medicine` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `patient`
--

INSERT INTO `patient` (`ID`, `password`, `name`, `sex`, `doctor`, `medicine`) VALUES
('00000', '00000', 'zhangsan', 'female', 'lisi', 'Amoxicilli'),
('00001', '00001', 'wangwu', 'female', '', '');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `ID` varchar(5) NOT NULL,
  `password` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`ID`, `password`) VALUES
('root', 'root');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
