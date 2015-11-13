-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 11 月 13 日 07:43
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
-- 表的结构 `cb_tc_com_exc`
--

CREATE TABLE IF NOT EXISTS `cb_tc_com_exc` (
  `insertTime` int(10) NOT NULL,
  `workNumber` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `grade` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `major` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `people` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `courseName` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `courseType` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `courseCredit` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `courseHour` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `practiceHour` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `onMachineHour` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `timePeriod` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `teacherName` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `remark` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`workNumber`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `cb_tc_com_nor`
--

CREATE TABLE IF NOT EXISTS `cb_tc_com_nor` (
  `insertTime` int(10) NOT NULL,
  `workNumber` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `grade` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `major` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `people` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `courseName` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `courseType` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `courseCredit` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `courseHour` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `practiceHour` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `onMachineHour` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `timePeriod` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `teacherName` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `remark` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`workNumber`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `cb_tc_com_ope`
--

CREATE TABLE IF NOT EXISTS `cb_tc_com_ope` (
  `insertTime` int(10) NOT NULL,
  `workNumber` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `grade` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `major` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `people` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `courseName` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `courseType` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `courseCredit` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `courseHour` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `practiceHour` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `onMachineHour` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `timePeriod` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `teacherName` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `remark` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`workNumber`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `cb_tc_inf_sec`
--

CREATE TABLE IF NOT EXISTS `cb_tc_inf_sec` (
  `insertTime` int(10) NOT NULL,
  `workNumber` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `grade` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `major` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `people` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `courseName` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `courseType` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `courseCredit` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `courseHour` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `practiceHour` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `onMachineHour` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `timePeriod` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `teacherName` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `remark` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`workNumber`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `cb_tc_math_nor`
--

CREATE TABLE IF NOT EXISTS `cb_tc_math_nor` (
  `insertTime` int(10) NOT NULL,
  `workNumber` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `grade` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `major` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `people` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `courseName` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `courseType` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `courseCredit` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `courseHour` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `practiceHour` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `onMachineHour` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `timePeriod` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `teacherName` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `remark` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`workNumber`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `cb_tc_math_ope`
--

CREATE TABLE IF NOT EXISTS `cb_tc_math_ope` (
  `insertTime` int(10) NOT NULL,
  `workNumber` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `grade` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `major` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `people` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `courseName` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `courseType` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `courseCredit` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `courseHour` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `practiceHour` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `onMachineHour` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `timePeriod` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `teacherName` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `remark` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`workNumber`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `cb_tc_net_pro`
--

CREATE TABLE IF NOT EXISTS `cb_tc_net_pro` (
  `insertTime` int(10) NOT NULL,
  `workNumber` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `grade` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `major` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `people` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `courseName` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `courseType` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `courseCredit` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `courseHour` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `practiceHour` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `onMachineHour` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `timePeriod` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `teacherName` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `remark` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`workNumber`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `cb_tc_soft_pro`
--

CREATE TABLE IF NOT EXISTS `cb_tc_soft_pro` (
  `insertTime` int(10) NOT NULL,
  `workNumber` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `grade` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `major` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `people` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `courseName` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `courseType` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `courseCredit` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `courseHour` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `practiceHour` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `onMachineHour` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `timePeriod` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `teacherName` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `remark` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`workNumber`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `department_head_majors`
--

CREATE TABLE IF NOT EXISTS `department_head_majors` (
  `workNumber` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `major` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  KEY `work_number` (`workNumber`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `table_info`
--

CREATE TABLE IF NOT EXISTS `table_info` (
  `tableName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `major` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `state1` tinyint(1) NOT NULL,
  `state2` tinyint(1) NOT NULL,
  PRIMARY KEY (`tableName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `task_info`
--

CREATE TABLE IF NOT EXISTS `task_info` (
  `relativeTable` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `year` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `departmentDeadline` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `teacherDeadline` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `remark` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `taskState` int(11) NOT NULL,
  PRIMARY KEY (`relativeTable`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `tc_com_exc`
--

CREATE TABLE IF NOT EXISTS `tc_com_exc` (
  `insertTime` int(10) NOT NULL,
  `grade` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '年级',
  `major` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `people` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `courseName` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `courseType` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `courseCredit` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `courseHour` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `practiceHour` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `onMachineHour` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `timePeriod` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `teacherName` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `remark` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`grade`,`major`,`people`,`courseName`,`courseType`,`courseCredit`,`courseHour`,`practiceHour`,`onMachineHour`,`timePeriod`,`teacherName`,`remark`),
  KEY `insert_time` (`insertTime`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `tc_com_nor`
--

CREATE TABLE IF NOT EXISTS `tc_com_nor` (
  `insertTime` int(10) NOT NULL,
  `grade` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '年级',
  `major` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `people` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `courseName` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `courseType` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `courseCredit` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `courseHour` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `practiceHour` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `onMachineHour` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `timePeriod` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `teacherName` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `remark` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`grade`,`major`,`people`,`courseName`,`courseType`,`courseCredit`,`courseHour`,`practiceHour`,`onMachineHour`,`timePeriod`,`teacherName`,`remark`),
  KEY `insert_time` (`insertTime`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `tc_com_ope`
--

CREATE TABLE IF NOT EXISTS `tc_com_ope` (
  `insertTime` int(10) NOT NULL,
  `grade` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '年级',
  `major` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `people` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `courseName` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `courseType` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `courseCredit` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `courseHour` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `practiceHour` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `onMachineHour` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `timePeriod` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `teacherName` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `ramark` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`grade`,`major`,`people`,`courseName`,`courseType`,`courseCredit`,`courseHour`,`practiceHour`,`onMachineHour`,`timePeriod`,`teacherName`,`ramark`),
  KEY `insert_time` (`insertTime`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `tc_inf_sec`
--

CREATE TABLE IF NOT EXISTS `tc_inf_sec` (
  `insertTime` int(10) NOT NULL,
  `grade` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '年级',
  `major` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `people` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `courseName` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `courseType` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `courseCredit` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `courseHour` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `practiceHour` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `onMachineHour` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `timePeriod` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `teacherName` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `remark` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`grade`,`major`,`people`,`courseName`,`courseType`,`courseCredit`,`courseHour`,`practiceHour`,`onMachineHour`,`timePeriod`,`teacherName`,`remark`),
  KEY `insert_time` (`insertTime`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `tc_math_nor`
--

CREATE TABLE IF NOT EXISTS `tc_math_nor` (
  `insertTime` int(10) NOT NULL,
  `grade` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '年级',
  `major` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `people` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `courseName` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `courseType` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `courseCredit` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `courseHour` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `practiceHour` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `onMachineHour` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `timePeriod` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `teacherName` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `remark` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`grade`,`major`,`people`,`courseName`,`courseType`,`courseCredit`,`courseHour`,`practiceHour`,`onMachineHour`,`timePeriod`,`teacherName`,`remark`),
  KEY `insert_time` (`insertTime`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `tc_math_ope`
--

CREATE TABLE IF NOT EXISTS `tc_math_ope` (
  `insertTime` int(10) NOT NULL,
  `grade` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '年级',
  `major` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `people` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `courseName` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `courseType` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `courseCredit` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `courseHour` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `practiceHour` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `onMachineHour` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `timePeriod` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `teacherName` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `remark` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`grade`,`major`,`people`,`courseName`,`courseType`,`courseCredit`,`courseHour`,`practiceHour`,`onMachineHour`,`timePeriod`,`teacherName`,`remark`),
  KEY `insert_time` (`insertTime`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `tc_net_pro`
--

CREATE TABLE IF NOT EXISTS `tc_net_pro` (
  `insertTime` int(10) NOT NULL,
  `grade` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '年级',
  `major` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `people` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `courseName` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `courseType` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `courseCredit` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `courseHour` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `practiceHour` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `onMachineHour` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `timePeriod` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `teacherName` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `remark` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`grade`,`major`,`people`,`courseName`,`courseType`,`courseCredit`,`courseHour`,`practiceHour`,`onMachineHour`,`timePeriod`,`teacherName`,`remark`),
  KEY `insert_time` (`insertTime`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `tc_soft_pro`
--

CREATE TABLE IF NOT EXISTS `tc_soft_pro` (
  `insertTime` int(10) NOT NULL,
  `grade` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '年级',
  `major` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `people` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `courseName` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `courseType` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `courseCredit` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `courseHour` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `practiceHour` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `onMachineHour` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `timePeriod` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `teacherName` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `remark` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`grade`,`major`,`people`,`courseName`,`courseType`,`courseCredit`,`courseHour`,`practiceHour`,`onMachineHour`,`timePeriod`,`teacherName`,`remark`),
  KEY `insert_time` (`insertTime`)
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
  `managedMajor` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`workNumber`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
