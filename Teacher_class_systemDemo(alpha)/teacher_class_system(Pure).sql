-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 11 月 18 日 10:38
-- 服务器版本: 5.5.24-log
-- PHP 版本: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `teacher_class_system`
--

-- --------------------------------------------------------

--
-- 表的结构 `department_head_majors`
--

CREATE TABLE IF NOT EXISTS `department_head_majors` (
  `workNumber` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `major` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`workNumber`,`major`),
  KEY `work_number` (`workNumber`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `task_info`
--

CREATE TABLE IF NOT EXISTS `task_info` (
  `relativeTable` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `year` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `semester` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `departmentDeadline` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `teacherDeadline` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `taskState` int(11) NOT NULL,
  PRIMARY KEY (`relativeTable`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `user_department_head`
--

CREATE TABLE IF NOT EXISTS `user_department_head` (
  `workNumber` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `sex` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `department` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`workNumber`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `user_department_head`
--

INSERT INTO `user_department_head` (`workNumber`, `password`, `name`, `sex`, `birthday`, `department`, `telephone`, `email`) VALUES
('00001', '00001', '张栋', '男', '19931208', '软件', '18110119120', '18110119120@163.com');

-- --------------------------------------------------------

--
-- 表的结构 `user_teacher`
--

CREATE TABLE IF NOT EXISTS `user_teacher` (
  `workNumber` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `sex` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `department` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`workNumber`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `user_teacher`
--

INSERT INTO `user_teacher` (`workNumber`, `password`, `name`, `sex`, `birthday`, `department`, `telephone`, `email`) VALUES
('00001', '00001', '张栋', '男', '18990125', '计算机', '18110119120', '18110119120@163.com');

-- --------------------------------------------------------

--
-- 表的结构 `user_teaching_office`
--

CREATE TABLE IF NOT EXISTS `user_teaching_office` (
  `workNumber` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`workNumber`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `user_teaching_office`
--

INSERT INTO `user_teaching_office` (`workNumber`, `password`, `name`, `telephone`, `email`) VALUES
('00001', '00001', '张栋', '18110119120', '18110119120@163.com');

--
-- 限制导出的表
--

--
-- 限制表 `department_head_majors`
--
ALTER TABLE `department_head_majors`
  ADD CONSTRAINT `department_head_majors_ibfk_1` FOREIGN KEY (`workNumber`) REFERENCES `user_department_head` (`workNumber`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
