-- phpMyAdmin SQL Dump
-- version 3.2.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 01, 2011 at 04:49 PM
-- Server version: 5.1.44
-- PHP Version: 5.2.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `osis`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission_requirement`
--

DROP TABLE IF EXISTS `admission_requirement`;
CREATE TABLE `admission_requirement` (
  `student_id` varchar(12) NOT NULL,
  `entrance_exam_result` varchar(50) NOT NULL,
  `admission_test_ranking` varchar(10) NOT NULL,
  `enlishplus_ exam_result` varchar(10) NOT NULL,
  `medical_exam_results` varchar(500) NOT NULL,
  `interview_assesment` varchar(500) NOT NULL,
  `form138` tinyint(1) NOT NULL,
  `pept` tinyint(1) NOT NULL,
  `form137` tinyint(1) NOT NULL,
  `true_copy_of_grades` tinyint(1) NOT NULL,
  `transcript_of_records` tinyint(1) NOT NULL,
  `certificate_of_good_moral_character` tinyint(1) NOT NULL,
  `study_permit` tinyint(1) NOT NULL,
  `copy_of_birth_certificate` tinyint(1) NOT NULL,
  `marriage_contract` tinyint(1) NOT NULL,
  `others` varchar(500) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admission_requirement`
--


-- --------------------------------------------------------

--
-- Table structure for table `class`
--

DROP TABLE IF EXISTS `class`;
CREATE TABLE `class` (
  `class_code` bigint(20) NOT NULL,
  `student_id` varchar(12) NOT NULL,
  `grade` varchar(5) NOT NULL,
  `dropped` tinyint(1) NOT NULL,
  PRIMARY KEY (`class_code`),
  KEY `class_code` (`class_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_code`, `student_id`, `grade`, `dropped`) VALUES(4, '12006464', '', 0);
INSERT INTO `class` (`class_code`, `student_id`, `grade`, `dropped`) VALUES(67, '12006464', '', 0);
INSERT INTO `class` (`class_code`, `student_id`, `grade`, `dropped`) VALUES(87, '12006464', '', 0);
INSERT INTO `class` (`class_code`, `student_id`, `grade`, `dropped`) VALUES(911, '12006464', '', 0);
INSERT INTO `class` (`class_code`, `student_id`, `grade`, `dropped`) VALUES(14123, '12006464', '', 0);
INSERT INTO `class` (`class_code`, `student_id`, `grade`, `dropped`) VALUES(14124, '12006464', '', 0);
INSERT INTO `class` (`class_code`, `student_id`, `grade`, `dropped`) VALUES(14125, '12006464', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `class_info`
--

DROP TABLE IF EXISTS `class_info`;
CREATE TABLE `class_info` (
  `class_code` bigint(20) NOT NULL AUTO_INCREMENT,
  `faculty_id` varchar(12) NOT NULL,
  `subject_code` varchar(12) NOT NULL,
  `section` varchar(3) NOT NULL,
  `time` varchar(50) NOT NULL,
  `room_id` varchar(6) NOT NULL,
  `term_code` varchar(6) NOT NULL,
  PRIMARY KEY (`class_code`),
  KEY `class_code` (`class_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14127 ;

--
-- Dumping data for table `class_info`
--

INSERT INTO `class_info` (`class_code`, `faculty_id`, `subject_code`, `section`, `time`, `room_id`, `term_code`) VALUES(4, '12004885', 'CS15', 'B', '4-5MWF', '2', '202');
INSERT INTO `class_info` (`class_code`, `faculty_id`, `subject_code`, `section`, `time`, `room_id`, `term_code`) VALUES(11, '12006885', 'Comp24', 'B', '2:00pm', '1', '202');
INSERT INTO `class_info` (`class_code`, `faculty_id`, `subject_code`, `section`, `time`, `room_id`, `term_code`) VALUES(13, '12006885', 'CS15', 'C', '4-5MWF', '3', '203');
INSERT INTO `class_info` (`class_code`, `faculty_id`, `subject_code`, `section`, `time`, `room_id`, `term_code`) VALUES(14, '120000053253', 's133', 'A', '1:00pm', '1', '203');
INSERT INTO `class_info` (`class_code`, `faculty_id`, `subject_code`, `section`, `time`, `room_id`, `term_code`) VALUES(23, '12005885', '17', 'A', '5:00pm', '1', '203');
INSERT INTO `class_info` (`class_code`, `faculty_id`, `subject_code`, `section`, `time`, `room_id`, `term_code`) VALUES(67, '12006885', 'Comp24', 'D', '2:00pm', '2', '111');
INSERT INTO `class_info` (`class_code`, `faculty_id`, `subject_code`, `section`, `time`, `room_id`, `term_code`) VALUES(87, '12008885', 'NetProg', 'A', '1:00pm', '1', '202');
INSERT INTO `class_info` (`class_code`, `faculty_id`, `subject_code`, `section`, `time`, `room_id`, `term_code`) VALUES(911, '12006885', '21', 'A', '3:00pm', '2', '202');
INSERT INTO `class_info` (`class_code`, `faculty_id`, `subject_code`, `section`, `time`, `room_id`, `term_code`) VALUES(14122, '12005885', 'CS15', 'D', '3:00pm', '1', '202');
INSERT INTO `class_info` (`class_code`, `faculty_id`, `subject_code`, `section`, `time`, `room_id`, `term_code`) VALUES(14123, '12007885', '21', 'C', '1:00pm', '2', '111');
INSERT INTO `class_info` (`class_code`, `faculty_id`, `subject_code`, `section`, `time`, `room_id`, `term_code`) VALUES(14124, '120000053253', 'CS15', 'C', '2:00pm', '1', '111');
INSERT INTO `class_info` (`class_code`, `faculty_id`, `subject_code`, `section`, `time`, `room_id`, `term_code`) VALUES(14125, '120000053253', 's133', 'A', '1:00pm', '1', '111');
INSERT INTO `class_info` (`class_code`, `faculty_id`, `subject_code`, `section`, `time`, `room_id`, `term_code`) VALUES(14126, '12004885', 's133', 'B', '2:00pm', '2', '111');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE `course` (
  `course_id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`course_id`),
  KEY `description` (`description`),
  KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `name`, `description`) VALUES(1, 'BSIT', 'Bachelor of Science in Information Technology');
INSERT INTO `course` (`course_id`, `name`, `description`) VALUES(2, 'BSCS', 'Bachelor of Science in Computer Science');
INSERT INTO `course` (`course_id`, `name`, `description`) VALUES(3, 'BSCoE', 'Bachelor of Science in Computer Engineering');
INSERT INTO `course` (`course_id`, `name`, `description`) VALUES(4, 'BSECE', 'Bachelor of Science in Electronics and Communication Engineering');
INSERT INTO `course` (`course_id`, `name`, `description`) VALUES(5, 'BSN', 'Bachelor of Science in Nursing');
INSERT INTO `course` (`course_id`, `name`, `description`) VALUES(6, 'BSCrim', 'Bachelor of Science in Criminology');
INSERT INTO `course` (`course_id`, `name`, `description`) VALUES(7, 'CompProg', 'Computer Programming');
INSERT INTO `course` (`course_id`, `name`, `description`) VALUES(8, 'BEEd', 'Bachelor of Elementary Education');
INSERT INTO `course` (`course_id`, `name`, `description`) VALUES(9, 'BSEd', 'Bachelor of Secondary Education');
INSERT INTO `course` (`course_id`, `name`, `description`) VALUES(10, 'BSBA', 'Bachelor of Science in Business Administration');
INSERT INTO `course` (`course_id`, `name`, `description`) VALUES(11, 'BSHRM', 'Bachelor of Science in Hotel and Restaurant Management');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
CREATE TABLE `department` (
  `department_code` varchar(5) NOT NULL,
  `name` varchar(25) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--


-- --------------------------------------------------------

--
-- Table structure for table `faculty_info`
--

DROP TABLE IF EXISTS `faculty_info`;
CREATE TABLE `faculty_info` (
  `faculty_id` varchar(12) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `middlename` varchar(35) NOT NULL,
  `surname` varchar(35) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `course` varchar(255) NOT NULL,
  `date_of_birth` varchar(15) NOT NULL,
  `date_of_entry` varchar(25) NOT NULL,
  `teaching` varchar(5) NOT NULL,
  `prof` varchar(5) NOT NULL,
  `admin` varchar(5) NOT NULL,
  `status` varchar(50) NOT NULL,
  `position` varchar(100) NOT NULL,
  `department` varchar(50) NOT NULL,
  PRIMARY KEY (`faculty_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_info`
--

INSERT INTO `faculty_info` (`faculty_id`, `firstname`, `middlename`, `surname`, `address`, `contact`, `course`, `date_of_birth`, `date_of_entry`, `teaching`, `prof`, `admin`, `status`, `position`, `department`) VALUES('120000053253', 'ito teacher', 'kho', 'pati', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `faculty_info` (`faculty_id`, `firstname`, `middlename`, `surname`, `address`, `contact`, `course`, `date_of_birth`, `date_of_entry`, `teaching`, `prof`, `admin`, `status`, `position`, `department`) VALUES('12004885', 'Dario', 'Humiwat', 'Galeon', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `faculty_info` (`faculty_id`, `firstname`, `middlename`, `surname`, `address`, `contact`, `course`, `date_of_birth`, `date_of_entry`, `teaching`, `prof`, `admin`, `status`, `position`, `department`) VALUES('12005885', 'Gerry', 'P', 'Lopez', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `faculty_info` (`faculty_id`, `firstname`, `middlename`, `surname`, `address`, `contact`, `course`, `date_of_birth`, `date_of_entry`, `teaching`, `prof`, `admin`, `status`, `position`, `department`) VALUES('12006885', 'John Lauren', 'E', 'angelina', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `faculty_info` (`faculty_id`, `firstname`, `middlename`, `surname`, `address`, `contact`, `course`, `date_of_birth`, `date_of_entry`, `teaching`, `prof`, `admin`, `status`, `position`, `department`) VALUES('12007885', 'Richard', 'E', 'Dilan', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `faculty_info` (`faculty_id`, `firstname`, `middlename`, `surname`, `address`, `contact`, `course`, `date_of_birth`, `date_of_entry`, `teaching`, `prof`, `admin`, `status`, `position`, `department`) VALUES('12008885', 'Ronalyn', 'A', 'Guttieres', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `faculty_info` (`faculty_id`, `firstname`, `middlename`, `surname`, `address`, `contact`, `course`, `date_of_birth`, `date_of_entry`, `teaching`, `prof`, `admin`, `status`, `position`, `department`) VALUES('120098456945', 'ko ito', 'sa ollcf', 'teacher', '', '', '', '', '', '', '', '', '', '', '');
INSERT INTO `faculty_info` (`faculty_id`, `firstname`, `middlename`, `surname`, `address`, `contact`, `course`, `date_of_birth`, `date_of_entry`, `teaching`, `prof`, `admin`, `status`, `position`, `department`) VALUES('123', 'firstname', 'nim', 'somethin', '21asdad', '12312sdad', '1231asd', '66888', '1', 'wad', 'awd', 'awd', 'qwdw', 'awdw', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

DROP TABLE IF EXISTS `province`;
CREATE TABLE `province` (
  `province_name` varchar(55) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`province_name`) VALUES('Abra	');
INSERT INTO `province` (`province_name`) VALUES('Agusan ');
INSERT INTO `province` (`province_name`) VALUES('Agusan ');
INSERT INTO `province` (`province_name`) VALUES('Aklan	');
INSERT INTO `province` (`province_name`) VALUES('Albay	');
INSERT INTO `province` (`province_name`) VALUES('Antique	');
INSERT INTO `province` (`province_name`) VALUES('Apayao	');
INSERT INTO `province` (`province_name`) VALUES('Aurora	');
INSERT INTO `province` (`province_name`) VALUES('Basilan	');
INSERT INTO `province` (`province_name`) VALUES('Bataan	');
INSERT INTO `province` (`province_name`) VALUES('Batanes	');
INSERT INTO `province` (`province_name`) VALUES('Batangas');
INSERT INTO `province` (`province_name`) VALUES('Benguet	');
INSERT INTO `province` (`province_name`) VALUES('Biliran	');
INSERT INTO `province` (`province_name`) VALUES('Bohol	');
INSERT INTO `province` (`province_name`) VALUES('Bukidnon');
INSERT INTO `province` (`province_name`) VALUES('Bulacan');
INSERT INTO `province` (`province_name`) VALUES('Cagayan');
INSERT INTO `province` (`province_name`) VALUES('Camarines Norte	');
INSERT INTO `province` (`province_name`) VALUES('Camarines Sur');
INSERT INTO `province` (`province_name`) VALUES('Camiguin');
INSERT INTO `province` (`province_name`) VALUES('Capiz');
INSERT INTO `province` (`province_name`) VALUES('Catanduanes	');
INSERT INTO `province` (`province_name`) VALUES('Cavite');
INSERT INTO `province` (`province_name`) VALUES('Cebu	');
INSERT INTO `province` (`province_name`) VALUES('Compostela Valley');
INSERT INTO `province` (`province_name`) VALUES('Cotabato');
INSERT INTO `province` (`province_name`) VALUES('Davao del Norte	');
INSERT INTO `province` (`province_name`) VALUES('Davao del Sur	');
INSERT INTO `province` (`province_name`) VALUES('Davao Oriental	');
INSERT INTO `province` (`province_name`) VALUES('Dinagat Islands	');
INSERT INTO `province` (`province_name`) VALUES('Eastern Samar	');
INSERT INTO `province` (`province_name`) VALUES('Guimaras	');
INSERT INTO `province` (`province_name`) VALUES('Ifugao	');
INSERT INTO `province` (`province_name`) VALUES('Ilocos Norte');
INSERT INTO `province` (`province_name`) VALUES('Ilocos Sur');
INSERT INTO `province` (`province_name`) VALUES('Iloilo		');
INSERT INTO `province` (`province_name`) VALUES('Isabela	');
INSERT INTO `province` (`province_name`) VALUES('Kalinga	');
INSERT INTO `province` (`province_name`) VALUES('Laguna	');
INSERT INTO `province` (`province_name`) VALUES('Lanao del Norte	');
INSERT INTO `province` (`province_name`) VALUES('Lanao del Sur	');
INSERT INTO `province` (`province_name`) VALUES('La Union');
INSERT INTO `province` (`province_name`) VALUES('Leyte');
INSERT INTO `province` (`province_name`) VALUES('Maguindanao	');
INSERT INTO `province` (`province_name`) VALUES('Marinduque	');
INSERT INTO `province` (`province_name`) VALUES('Masbate	');
INSERT INTO `province` (`province_name`) VALUES('Manila	');
INSERT INTO `province` (`province_name`) VALUES('Misamis Occidental');
INSERT INTO `province` (`province_name`) VALUES('Misamis Oriental');
INSERT INTO `province` (`province_name`) VALUES('Mountain	');
INSERT INTO `province` (`province_name`) VALUES('Negros Occidental');
INSERT INTO `province` (`province_name`) VALUES('Negros Oriental	');
INSERT INTO `province` (`province_name`) VALUES('Northern Samar');
INSERT INTO `province` (`province_name`) VALUES('Nueva Ecija	');
INSERT INTO `province` (`province_name`) VALUES('Nueva Vizcaya');
INSERT INTO `province` (`province_name`) VALUES('Occidental Mindoro');
INSERT INTO `province` (`province_name`) VALUES('Oriental Mindoro');
INSERT INTO `province` (`province_name`) VALUES('Palawan	');
INSERT INTO `province` (`province_name`) VALUES('Pampanga	');
INSERT INTO `province` (`province_name`) VALUES('Pangasinan	');
INSERT INTO `province` (`province_name`) VALUES('Quezon	');
INSERT INTO `province` (`province_name`) VALUES('Quirino	');
INSERT INTO `province` (`province_name`) VALUES('Rizal	');
INSERT INTO `province` (`province_name`) VALUES('Romblon	');
INSERT INTO `province` (`province_name`) VALUES('Samar	');
INSERT INTO `province` (`province_name`) VALUES('Sarangani	');
INSERT INTO `province` (`province_name`) VALUES('Siquijor');
INSERT INTO `province` (`province_name`) VALUES('Sorsogon	');
INSERT INTO `province` (`province_name`) VALUES('South Cotabato');
INSERT INTO `province` (`province_name`) VALUES('Southern Leyte	');
INSERT INTO `province` (`province_name`) VALUES('Sultan Kudarat');
INSERT INTO `province` (`province_name`) VALUES('Sulu	');
INSERT INTO `province` (`province_name`) VALUES('Surigao del Norte');
INSERT INTO `province` (`province_name`) VALUES('Surigao del Sur	');
INSERT INTO `province` (`province_name`) VALUES('Tarlac	');
INSERT INTO `province` (`province_name`) VALUES('Tawi-Tawi	');
INSERT INTO `province` (`province_name`) VALUES('Zambales	');
INSERT INTO `province` (`province_name`) VALUES('Zamboanga del Norte	');
INSERT INTO `province` (`province_name`) VALUES('Zamboanga del Sur	');
INSERT INTO `province` (`province_name`) VALUES('Zamboanga-Sibugay');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

DROP TABLE IF EXISTS `room`;
CREATE TABLE `room` (
  `room_id` bigint(12) NOT NULL AUTO_INCREMENT,
  `location` varchar(20) NOT NULL,
  PRIMARY KEY (`room_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `location`) VALUES(1, '307');
INSERT INTO `room` (`room_id`, `location`) VALUES(2, '304');
INSERT INTO `room` (`room_id`, `location`) VALUES(3, '305');

-- --------------------------------------------------------

--
-- Table structure for table `scholarship`
--

DROP TABLE IF EXISTS `scholarship`;
CREATE TABLE `scholarship` (
  `scholarship_id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `description` varchar(500) NOT NULL,
  PRIMARY KEY (`scholarship_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `scholarship`
--

INSERT INTO `scholarship` (`scholarship_id`, `name`, `description`) VALUES(1, 'DAPS', 'Dr. Abundio P. Palencia Scholarship');
INSERT INTO `scholarship` (`scholarship_id`, `name`, `description`) VALUES(2, 'CPS', 'Congressman Panotes Scholarship');
INSERT INTO `scholarship` (`scholarship_id`, `name`, `description`) VALUES(3, 'CHED', 'Commision on Hieher Education Scholarship');
INSERT INTO `scholarship` (`scholarship_id`, `name`, `description`) VALUES(4, 'EGPS', 'Emilia G. Palencia Scholarship');

-- --------------------------------------------------------

--
-- Table structure for table `schoolterm`
--

DROP TABLE IF EXISTS `schoolterm`;
CREATE TABLE `schoolterm` (
  `term_code` bigint(20) NOT NULL AUTO_INCREMENT,
  `semester` varchar(2) NOT NULL,
  `date_start` varchar(25) NOT NULL,
  `date_end` date NOT NULL,
  `open` tinyint(1) NOT NULL,
  PRIMARY KEY (`term_code`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=205 ;

--
-- Dumping data for table `schoolterm`
--

INSERT INTO `schoolterm` (`term_code`, `semester`, `date_start`, `date_end`, `open`) VALUES(111, '1', '2011-01-01', '2012-01-02', 1);
INSERT INTO `schoolterm` (`term_code`, `semester`, `date_start`, `date_end`, `open`) VALUES(202, '2', '2010-01-01', '2011-01-06', 0);
INSERT INTO `schoolterm` (`term_code`, `semester`, `date_start`, `date_end`, `open`) VALUES(203, '1', '2007-01-08', '2008-01-01', 0);
INSERT INTO `schoolterm` (`term_code`, `semester`, `date_start`, `date_end`, `open`) VALUES(204, '1', '2008-01-01', '2009-03-03', 0);

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

DROP TABLE IF EXISTS `student_info`;
CREATE TABLE `student_info` (
  `student_id` varchar(12) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `middlename` varchar(35) NOT NULL,
  `surname` varchar(35) NOT NULL,
  `name_extension` varchar(3) NOT NULL,
  `birthday` varchar(10) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `course_id` int(3) NOT NULL,
  `year_level` varchar(3) NOT NULL DEFAULT 'I',
  `scholarship_id` varchar(3) NOT NULL,
  `entrance_exam_result` varchar(10) NOT NULL,
  `admission_test_ranking` varchar(10) NOT NULL,
  `englishplus_exam_result` varchar(10) NOT NULL,
  `medical_exam_result` varchar(500) NOT NULL,
  `interview_assesment` varchar(500) NOT NULL,
  `form138` tinyint(1) NOT NULL,
  `pept` tinyint(1) NOT NULL,
  `form137` tinyint(1) NOT NULL,
  `true_copy_of_grades` tinyint(1) NOT NULL,
  `transcript_of_records` tinyint(1) NOT NULL,
  `certificate_of_good_moral_character` tinyint(1) NOT NULL,
  `study_permit` tinyint(1) NOT NULL,
  `copy_of_birth_certificate` tinyint(1) NOT NULL,
  `marriage_contract` tinyint(1) NOT NULL,
  `others` varchar(500) NOT NULL,
  `place_of_birth` varchar(55) NOT NULL,
  `civil_status` tinyint(1) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `street` varchar(50) NOT NULL,
  `brgy` varchar(50) NOT NULL,
  `town` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `doctor` varchar(25) NOT NULL,
  `elementary` varchar(50) NOT NULL,
  `secondary` varchar(50) NOT NULL,
  `college` varchar(50) NOT NULL,
  `transferee` tinyint(1) NOT NULL,
  PRIMARY KEY (`student_id`),
  KEY `student_id` (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`student_id`, `firstname`, `middlename`, `surname`, `name_extension`, `birthday`, `gender`, `course_id`, `year_level`, `scholarship_id`, `entrance_exam_result`, `admission_test_ranking`, `englishplus_exam_result`, `medical_exam_result`, `interview_assesment`, `form138`, `pept`, `form137`, `true_copy_of_grades`, `transcript_of_records`, `certificate_of_good_moral_character`, `study_permit`, `copy_of_birth_certificate`, `marriage_contract`, `others`, `place_of_birth`, `civil_status`, `phone`, `street`, `brgy`, `town`, `province`, `doctor`, `elementary`, `secondary`, `college`, `transferee`) VALUES('1200', 'joe don', 'adad', 'dulnuan', '', '12-12-12', 1, 7, 'IV', '', '', '', 'passed', '', '', 1, 0, 0, 0, 0, 0, 0, 1, 0, '', '', 0, '', '', '', '', '', '', '', '', '', 0);
INSERT INTO `student_info` (`student_id`, `firstname`, `middlename`, `surname`, `name_extension`, `birthday`, `gender`, `course_id`, `year_level`, `scholarship_id`, `entrance_exam_result`, `admission_test_ranking`, `englishplus_exam_result`, `medical_exam_result`, `interview_assesment`, `form138`, `pept`, `form137`, `true_copy_of_grades`, `transcript_of_records`, `certificate_of_good_moral_character`, `study_permit`, `copy_of_birth_certificate`, `marriage_contract`, `others`, `place_of_birth`, `civil_status`, `phone`, `street`, `brgy`, `town`, `province`, `doctor`, `elementary`, `secondary`, `college`, `transferee`) VALUES('12004444', 'lester kim', 'a', 'shindo', '', '0000-00-00', 1, 2, 'IV', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, '', '', '', '', '', '', '', '', '', 0);
INSERT INTO `student_info` (`student_id`, `firstname`, `middlename`, `surname`, `name_extension`, `birthday`, `gender`, `course_id`, `year_level`, `scholarship_id`, `entrance_exam_result`, `admission_test_ranking`, `englishplus_exam_result`, `medical_exam_result`, `interview_assesment`, `form138`, `pept`, `form137`, `true_copy_of_grades`, `transcript_of_records`, `certificate_of_good_moral_character`, `study_permit`, `copy_of_birth_certificate`, `marriage_contract`, `others`, `place_of_birth`, `civil_status`, `phone`, `street`, `brgy`, `town`, `province`, `doctor`, `elementary`, `secondary`, `college`, `transferee`) VALUES('12004809', 'Von Floyd', 'Aywan', 'Asiao', 'Sr', '12-12-2012', 1, 11, 'III', '2', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, '', '', '', '', '', '', '', '', '', 0);
INSERT INTO `student_info` (`student_id`, `firstname`, `middlename`, `surname`, `name_extension`, `birthday`, `gender`, `course_id`, `year_level`, `scholarship_id`, `entrance_exam_result`, `admission_test_ranking`, `englishplus_exam_result`, `medical_exam_result`, `interview_assesment`, `form138`, `pept`, `form137`, `true_copy_of_grades`, `transcript_of_records`, `certificate_of_good_moral_character`, `study_permit`, `copy_of_birth_certificate`, `marriage_contract`, `others`, `place_of_birth`, `civil_status`, `phone`, `street`, `brgy`, `town`, `province`, `doctor`, `elementary`, `secondary`, `college`, `transferee`) VALUES('12004812', 'fs', 'bvxsd', 'blah blah', '', '0000-00-00', 1, 3, 'II', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, '', '', '', '', '', '', '', '', '', 0);
INSERT INTO `student_info` (`student_id`, `firstname`, `middlename`, `surname`, `name_extension`, `birthday`, `gender`, `course_id`, `year_level`, `scholarship_id`, `entrance_exam_result`, `admission_test_ranking`, `englishplus_exam_result`, `medical_exam_result`, `interview_assesment`, `form138`, `pept`, `form137`, `true_copy_of_grades`, `transcript_of_records`, `certificate_of_good_moral_character`, `study_permit`, `copy_of_birth_certificate`, `marriage_contract`, `others`, `place_of_birth`, `civil_status`, `phone`, `street`, `brgy`, `town`, `province`, `doctor`, `elementary`, `secondary`, `college`, `transferee`) VALUES('12004813', 'marvin', 'm', 'dias', '', '8-8-1988', 1, 2, 'IV', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, '', '', '', '', '', '', '', '', '', 0);
INSERT INTO `student_info` (`student_id`, `firstname`, `middlename`, `surname`, `name_extension`, `birthday`, `gender`, `course_id`, `year_level`, `scholarship_id`, `entrance_exam_result`, `admission_test_ranking`, `englishplus_exam_result`, `medical_exam_result`, `interview_assesment`, `form138`, `pept`, `form137`, `true_copy_of_grades`, `transcript_of_records`, `certificate_of_good_moral_character`, `study_permit`, `copy_of_birth_certificate`, `marriage_contract`, `others`, `place_of_birth`, `civil_status`, `phone`, `street`, `brgy`, `town`, `province`, `doctor`, `elementary`, `secondary`, `college`, `transferee`) VALUES('12004814', 'bxcddsfs', 'cvbcxdfgs', 'xcvbcnvccv', '', '0000-00-00', 0, 3, 'IV', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, '', '', '', '', '', '', '', '', '', 0);
INSERT INTO `student_info` (`student_id`, `firstname`, `middlename`, `surname`, `name_extension`, `birthday`, `gender`, `course_id`, `year_level`, `scholarship_id`, `entrance_exam_result`, `admission_test_ranking`, `englishplus_exam_result`, `medical_exam_result`, `interview_assesment`, `form138`, `pept`, `form137`, `true_copy_of_grades`, `transcript_of_records`, `certificate_of_good_moral_character`, `study_permit`, `copy_of_birth_certificate`, `marriage_contract`, `others`, `place_of_birth`, `civil_status`, `phone`, `street`, `brgy`, `town`, `province`, `doctor`, `elementary`, `secondary`, `college`, `transferee`) VALUES('12004815', 'niel francis', 'Mc Donald', 'janda', '', '2-2-1989', 1, 2, 'IV', '', 'Failed', '6th', 'Passed', 'liver is firmly attached\r\nhearth beat is normal', 'with phsycological disorder', 1, 0, 0, 0, 1, 0, 0, 1, 0, '1 piece 2X2 picture\r\n1 envelope', '', 0, '', '', '', '', '', '', '', '', '', 0);
INSERT INTO `student_info` (`student_id`, `firstname`, `middlename`, `surname`, `name_extension`, `birthday`, `gender`, `course_id`, `year_level`, `scholarship_id`, `entrance_exam_result`, `admission_test_ranking`, `englishplus_exam_result`, `medical_exam_result`, `interview_assesment`, `form138`, `pept`, `form137`, `true_copy_of_grades`, `transcript_of_records`, `certificate_of_good_moral_character`, `study_permit`, `copy_of_birth_certificate`, `marriage_contract`, `others`, `place_of_birth`, `civil_status`, `phone`, `street`, `brgy`, `town`, `province`, `doctor`, `elementary`, `secondary`, `college`, `transferee`) VALUES('12004817', 'ivie', 'l', 'obmania', '', '0000-00-00', 0, 1, 'II', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, '', '', '', '', '', '', '', '', '', 0);
INSERT INTO `student_info` (`student_id`, `firstname`, `middlename`, `surname`, `name_extension`, `birthday`, `gender`, `course_id`, `year_level`, `scholarship_id`, `entrance_exam_result`, `admission_test_ranking`, `englishplus_exam_result`, `medical_exam_result`, `interview_assesment`, `form138`, `pept`, `form137`, `true_copy_of_grades`, `transcript_of_records`, `certificate_of_good_moral_character`, `study_permit`, `copy_of_birth_certificate`, `marriage_contract`, `others`, `place_of_birth`, `civil_status`, `phone`, `street`, `brgy`, `town`, `province`, `doctor`, `elementary`, `secondary`, `college`, `transferee`) VALUES('12004818', 'ronald', 'd', 'rasonable', '', '0000-00-00', 1, 2, 'IV', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, '', '', '', '', '', '', '', '', '', 0);
INSERT INTO `student_info` (`student_id`, `firstname`, `middlename`, `surname`, `name_extension`, `birthday`, `gender`, `course_id`, `year_level`, `scholarship_id`, `entrance_exam_result`, `admission_test_ranking`, `englishplus_exam_result`, `medical_exam_result`, `interview_assesment`, `form138`, `pept`, `form137`, `true_copy_of_grades`, `transcript_of_records`, `certificate_of_good_moral_character`, `study_permit`, `copy_of_birth_certificate`, `marriage_contract`, `others`, `place_of_birth`, `civil_status`, `phone`, `street`, `brgy`, `town`, `province`, `doctor`, `elementary`, `secondary`, `college`, `transferee`) VALUES('12004819', 'dan', 'castro', 'del rosario', '', '1-1-1945', 1, 10, 'IV', '', 'passed', '98th/900', 'passed', '', '', 0, 0, 0, 0, 1, 0, 0, 1, 1, '', '', 0, '', '', '', '', '', '', '', '', '', 0);
INSERT INTO `student_info` (`student_id`, `firstname`, `middlename`, `surname`, `name_extension`, `birthday`, `gender`, `course_id`, `year_level`, `scholarship_id`, `entrance_exam_result`, `admission_test_ranking`, `englishplus_exam_result`, `medical_exam_result`, `interview_assesment`, `form138`, `pept`, `form137`, `true_copy_of_grades`, `transcript_of_records`, `certificate_of_good_moral_character`, `study_permit`, `copy_of_birth_certificate`, `marriage_contract`, `others`, `place_of_birth`, `civil_status`, `phone`, `street`, `brgy`, `town`, `province`, `doctor`, `elementary`, `secondary`, `college`, `transferee`) VALUES('12004820', 'Majaleah', 'N', 'CARINO', '', '9-9-19999', 0, 2, 'III', '3', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, '', '', '', '', '', '', '', '', '', 0);
INSERT INTO `student_info` (`student_id`, `firstname`, `middlename`, `surname`, `name_extension`, `birthday`, `gender`, `course_id`, `year_level`, `scholarship_id`, `entrance_exam_result`, `admission_test_ranking`, `englishplus_exam_result`, `medical_exam_result`, `interview_assesment`, `form138`, `pept`, `form137`, `true_copy_of_grades`, `transcript_of_records`, `certificate_of_good_moral_character`, `study_permit`, `copy_of_birth_certificate`, `marriage_contract`, `others`, `place_of_birth`, `civil_status`, `phone`, `street`, `brgy`, `town`, `province`, `doctor`, `elementary`, `secondary`, `college`, `transferee`) VALUES('12004821', 'first name', 'middle name', 'surname', '', '0000-00-00', 0, 7, 'I', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, '', '', '', '', '', '', '', '', '', 0);
INSERT INTO `student_info` (`student_id`, `firstname`, `middlename`, `surname`, `name_extension`, `birthday`, `gender`, `course_id`, `year_level`, `scholarship_id`, `entrance_exam_result`, `admission_test_ranking`, `englishplus_exam_result`, `medical_exam_result`, `interview_assesment`, `form138`, `pept`, `form137`, `true_copy_of_grades`, `transcript_of_records`, `certificate_of_good_moral_character`, `study_permit`, `copy_of_birth_certificate`, `marriage_contract`, `others`, `place_of_birth`, `civil_status`, `phone`, `street`, `brgy`, `town`, `province`, `doctor`, `elementary`, `secondary`, `college`, `transferee`) VALUES('12004822', 'johnalou', 'v', 'timola', '', '0000-00-00', 0, 1, 'IV', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, '', '', '', '', '', '', '', '', '', 0);
INSERT INTO `student_info` (`student_id`, `firstname`, `middlename`, `surname`, `name_extension`, `birthday`, `gender`, `course_id`, `year_level`, `scholarship_id`, `entrance_exam_result`, `admission_test_ranking`, `englishplus_exam_result`, `medical_exam_result`, `interview_assesment`, `form138`, `pept`, `form137`, `true_copy_of_grades`, `transcript_of_records`, `certificate_of_good_moral_character`, `study_permit`, `copy_of_birth_certificate`, `marriage_contract`, `others`, `place_of_birth`, `civil_status`, `phone`, `street`, `brgy`, `town`, `province`, `doctor`, `elementary`, `secondary`, `college`, `transferee`) VALUES('12004844', 'mearl brean', 'h', 'rawat', '', '12-28-1985', 0, 2, 'IV', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, '', '', '', '', '', '', '', '', '', 0);
INSERT INTO `student_info` (`student_id`, `firstname`, `middlename`, `surname`, `name_extension`, `birthday`, `gender`, `course_id`, `year_level`, `scholarship_id`, `entrance_exam_result`, `admission_test_ranking`, `englishplus_exam_result`, `medical_exam_result`, `interview_assesment`, `form138`, `pept`, `form137`, `true_copy_of_grades`, `transcript_of_records`, `certificate_of_good_moral_character`, `study_permit`, `copy_of_birth_certificate`, `marriage_contract`, `others`, `place_of_birth`, `civil_status`, `phone`, `street`, `brgy`, `town`, `province`, `doctor`, `elementary`, `secondary`, `college`, `transferee`) VALUES('12004885', 'dario', 'humiwat', 'galeon', '', '1-1-1986', 1, 1, 'IV', '3', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, '', '', '', '', '', '', '', '', '', 0);
INSERT INTO `student_info` (`student_id`, `firstname`, `middlename`, `surname`, `name_extension`, `birthday`, `gender`, `course_id`, `year_level`, `scholarship_id`, `entrance_exam_result`, `admission_test_ranking`, `englishplus_exam_result`, `medical_exam_result`, `interview_assesment`, `form138`, `pept`, `form137`, `true_copy_of_grades`, `transcript_of_records`, `certificate_of_good_moral_character`, `study_permit`, `copy_of_birth_certificate`, `marriage_contract`, `others`, `place_of_birth`, `civil_status`, `phone`, `street`, `brgy`, `town`, `province`, `doctor`, `elementary`, `secondary`, `college`, `transferee`) VALUES('12004886', 'von', 'toan', 'pugong', '', '0000-00-00', 0, 8, 'III', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, '', '', '', '', '', '', '', '', '', 0);
INSERT INTO `student_info` (`student_id`, `firstname`, `middlename`, `surname`, `name_extension`, `birthday`, `gender`, `course_id`, `year_level`, `scholarship_id`, `entrance_exam_result`, `admission_test_ranking`, `englishplus_exam_result`, `medical_exam_result`, `interview_assesment`, `form138`, `pept`, `form137`, `true_copy_of_grades`, `transcript_of_records`, `certificate_of_good_moral_character`, `study_permit`, `copy_of_birth_certificate`, `marriage_contract`, `others`, `place_of_birth`, `civil_status`, `phone`, `street`, `brgy`, `town`, `province`, `doctor`, `elementary`, `secondary`, `college`, `transferee`) VALUES('12004887', 'vermon', 'nomrev', 'linubhot', '', '0000-00-00', 0, 9, 'V', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, '', '', '', '', '', '', '', '', '', 0);
INSERT INTO `student_info` (`student_id`, `firstname`, `middlename`, `surname`, `name_extension`, `birthday`, `gender`, `course_id`, `year_level`, `scholarship_id`, `entrance_exam_result`, `admission_test_ranking`, `englishplus_exam_result`, `medical_exam_result`, `interview_assesment`, `form138`, `pept`, `form137`, `true_copy_of_grades`, `transcript_of_records`, `certificate_of_good_moral_character`, `study_permit`, `copy_of_birth_certificate`, `marriage_contract`, `others`, `place_of_birth`, `civil_status`, `phone`, `street`, `brgy`, `town`, `province`, `doctor`, `elementary`, `secondary`, `college`, `transferee`) VALUES('1200535', 'sdfs', 'fsf', 'vdsf', 'sf', '0000-00-00', 0, 7, 'II', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, '', '', '', '', '', '', '', '', '', 0);
INSERT INTO `student_info` (`student_id`, `firstname`, `middlename`, `surname`, `name_extension`, `birthday`, `gender`, `course_id`, `year_level`, `scholarship_id`, `entrance_exam_result`, `admission_test_ranking`, `englishplus_exam_result`, `medical_exam_result`, `interview_assesment`, `form138`, `pept`, `form137`, `true_copy_of_grades`, `transcript_of_records`, `certificate_of_good_moral_character`, `study_permit`, `copy_of_birth_certificate`, `marriage_contract`, `others`, `place_of_birth`, `civil_status`, `phone`, `street`, `brgy`, `town`, `province`, `doctor`, `elementary`, `secondary`, `college`, `transferee`) VALUES('120059837598', 'raoul', 'sfs', 'simpson', '', '11-11-1921', 1, 6, 'III', '3', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, '', '', '', '', '', '', '', '', '', 0);
INSERT INTO `student_info` (`student_id`, `firstname`, `middlename`, `surname`, `name_extension`, `birthday`, `gender`, `course_id`, `year_level`, `scholarship_id`, `entrance_exam_result`, `admission_test_ranking`, `englishplus_exam_result`, `medical_exam_result`, `interview_assesment`, `form138`, `pept`, `form137`, `true_copy_of_grades`, `transcript_of_records`, `certificate_of_good_moral_character`, `study_permit`, `copy_of_birth_certificate`, `marriage_contract`, `others`, `place_of_birth`, `civil_status`, `phone`, `street`, `brgy`, `town`, `province`, `doctor`, `elementary`, `secondary`, `college`, `transferee`) VALUES('12006464', 'melisaroooo', 'gacer', 'acosta', '', '12-03-1988', 0, 11, 'IV', '2', '', '', '', '', '', 1, 0, 0, 0, 0, 0, 0, 0, 1, '', '', 0, '', '', '', '', '', '', '', '', '', 0);
INSERT INTO `student_info` (`student_id`, `firstname`, `middlename`, `surname`, `name_extension`, `birthday`, `gender`, `course_id`, `year_level`, `scholarship_id`, `entrance_exam_result`, `admission_test_ranking`, `englishplus_exam_result`, `medical_exam_result`, `interview_assesment`, `form138`, `pept`, `form137`, `true_copy_of_grades`, `transcript_of_records`, `certificate_of_good_moral_character`, `study_permit`, `copy_of_birth_certificate`, `marriage_contract`, `others`, `place_of_birth`, `civil_status`, `phone`, `street`, `brgy`, `town`, `province`, `doctor`, `elementary`, `secondary`, `college`, `transferee`) VALUES('120068979347', 'poly', 'pogi', 'banagan', '', '5-5-1986', 1, 6, 'IV', '', 'passed', '5th/400', 'passed', '', '', 1, 0, 1, 0, 0, 1, 1, 0, 1, '', '', 0, '', '', '', '', '', '', '', '', '', 0);
INSERT INTO `student_info` (`student_id`, `firstname`, `middlename`, `surname`, `name_extension`, `birthday`, `gender`, `course_id`, `year_level`, `scholarship_id`, `entrance_exam_result`, `admission_test_ranking`, `englishplus_exam_result`, `medical_exam_result`, `interview_assesment`, `form138`, `pept`, `form137`, `true_copy_of_grades`, `transcript_of_records`, `certificate_of_good_moral_character`, `study_permit`, `copy_of_birth_certificate`, `marriage_contract`, `others`, `place_of_birth`, `civil_status`, `phone`, `street`, `brgy`, `town`, `province`, `doctor`, `elementary`, `secondary`, `college`, `transferee`) VALUES('12008945', 'shiela', 'b', 'tabanao', '', '0000-00-00', 0, 2, 'IV', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, '', '', '', '', '', '', '', '', '', 0);
INSERT INTO `student_info` (`student_id`, `firstname`, `middlename`, `surname`, `name_extension`, `birthday`, `gender`, `course_id`, `year_level`, `scholarship_id`, `entrance_exam_result`, `admission_test_ranking`, `englishplus_exam_result`, `medical_exam_result`, `interview_assesment`, `form138`, `pept`, `form137`, `true_copy_of_grades`, `transcript_of_records`, `certificate_of_good_moral_character`, `study_permit`, `copy_of_birth_certificate`, `marriage_contract`, `others`, `place_of_birth`, `civil_status`, `phone`, `street`, `brgy`, `town`, `province`, `doctor`, `elementary`, `secondary`, `college`, `transferee`) VALUES('12009999', 'jeremy', 'cohen', 'hoffing', '', '6-6-1988', 1, 11, 'IV', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, '', '', '', '', '', '', '', '', '', 0);
INSERT INTO `student_info` (`student_id`, `firstname`, `middlename`, `surname`, `name_extension`, `birthday`, `gender`, `course_id`, `year_level`, `scholarship_id`, `entrance_exam_result`, `admission_test_ranking`, `englishplus_exam_result`, `medical_exam_result`, `interview_assesment`, `form138`, `pept`, `form137`, `true_copy_of_grades`, `transcript_of_records`, `certificate_of_good_moral_character`, `study_permit`, `copy_of_birth_certificate`, `marriage_contract`, `others`, `place_of_birth`, `civil_status`, `phone`, `street`, `brgy`, `town`, `province`, `doctor`, `elementary`, `secondary`, `college`, `transferee`) VALUES('1200o5793847', 'manage', 'settings', 'home', 'plu', '12-18-1988', 1, 1, 'II', '4', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, '', '', '', '', '', '', '', '', '', 0);
INSERT INTO `student_info` (`student_id`, `firstname`, `middlename`, `surname`, `name_extension`, `birthday`, `gender`, `course_id`, `year_level`, `scholarship_id`, `entrance_exam_result`, `admission_test_ranking`, `englishplus_exam_result`, `medical_exam_result`, `interview_assesment`, `form138`, `pept`, `form137`, `true_copy_of_grades`, `transcript_of_records`, `certificate_of_good_moral_character`, `study_permit`, `copy_of_birth_certificate`, `marriage_contract`, `others`, `place_of_birth`, `civil_status`, `phone`, `street`, `brgy`, `town`, `province`, `doctor`, `elementary`, `secondary`, `college`, `transferee`) VALUES('120342432432', 'ax av', 'fsfs', 'ax', '', '12-14-1978', 1, 9, 'III', '', 'passed', '76th', 'passed', 'fit', 'good', 0, 0, 0, 1, 0, 0, 0, 1, 1, '', '', 0, '', '', '', '', '', '', '', '', '', 0);
INSERT INTO `student_info` (`student_id`, `firstname`, `middlename`, `surname`, `name_extension`, `birthday`, `gender`, `course_id`, `year_level`, `scholarship_id`, `entrance_exam_result`, `admission_test_ranking`, `englishplus_exam_result`, `medical_exam_result`, `interview_assesment`, `form138`, `pept`, `form137`, `true_copy_of_grades`, `transcript_of_records`, `certificate_of_good_moral_character`, `study_permit`, `copy_of_birth_certificate`, `marriage_contract`, `others`, `place_of_birth`, `civil_status`, `phone`, `street`, `brgy`, `town`, `province`, `doctor`, `elementary`, `secondary`, `college`, `transferee`) VALUES('120487272489', 'alpha kappa rho', 'control panel', 'wamp hompage', 'Sr', '12-2-1973', 0, 8, 'IV', '3', 'passed', '12th/500', 'passed', 'kidney still attached\r\nhaha...', 'maganda', 1, 0, 0, 0, 1, 0, 0, 0, 1, '', '', 0, '', '', '', '', '', '', '', '', '', 0);
INSERT INTO `student_info` (`student_id`, `firstname`, `middlename`, `surname`, `name_extension`, `birthday`, `gender`, `course_id`, `year_level`, `scholarship_id`, `entrance_exam_result`, `admission_test_ranking`, `englishplus_exam_result`, `medical_exam_result`, `interview_assesment`, `form138`, `pept`, `form137`, `true_copy_of_grades`, `transcript_of_records`, `certificate_of_good_moral_character`, `study_permit`, `copy_of_birth_certificate`, `marriage_contract`, `others`, `place_of_birth`, `civil_status`, `phone`, `street`, `brgy`, `town`, `province`, `doctor`, `elementary`, `secondary`, `college`, `transferee`) VALUES('9123412', 'Jermo', 'Noah', 'Cohenhoffing', 'jer', '06-06-1988', 1, 6, 'III', '2', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'Pasadena', 1, '13107956369', '2607 34th St.', 'Lag-on', 'Daet', 'Camarines Norte	', 'yes i am ', 'alice harte', 'lusher', 'CMU', 0);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

DROP TABLE IF EXISTS `subject`;
CREATE TABLE `subject` (
  `subject_code` varchar(12) NOT NULL,
  `description` varchar(45) NOT NULL,
  `units` varchar(12) NOT NULL,
  PRIMARY KEY (`subject_code`),
  KEY `subject_code` (`subject_code`),
  KEY `subject_code_2` (`subject_code`),
  KEY `description` (`description`),
  KEY `units` (`units`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_code`, `description`, `units`) VALUES('17', 'Management Information System', '3');
INSERT INTO `subject` (`subject_code`, `description`, `units`) VALUES('21', 'Java Programming', '3');
INSERT INTO `subject` (`subject_code`, `description`, `units`) VALUES('Comp24', 'Database Management System', '3');
INSERT INTO `subject` (`subject_code`, `description`, `units`) VALUES('CS15', 'Digital Circuits', '3');
INSERT INTO `subject` (`subject_code`, `description`, `units`) VALUES('NetProg', 'Networking Principles and Programming', '3');
INSERT INTO `subject` (`subject_code`, `description`, `units`) VALUES('s133', 'Carabao Ridingo', '4');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `user_id` varchar(12) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `type_id` tinyint(2) NOT NULL,
  `firstname` varchar(35) NOT NULL,
  `middlename` varchar(25) NOT NULL,
  `surname` varchar(25) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `type_id`, `firstname`, `middlename`, `surname`) VALUES('1', 'admin', 'admin', 1, 'Jeremy', 'N', 'Cohenoco');
INSERT INTO `users` (`user_id`, `username`, `password`, `type_id`, `firstname`, `middlename`, `surname`) VALUES('2', 'dariog', 'dariog', 2, 'dario', 'g', 'galeon');
INSERT INTO `users` (`user_id`, `username`, `password`, `type_id`, `firstname`, `middlename`, `surname`) VALUES('3', 'melaco', 'melaco', 3, 'melissa', 'n', 'acosta');
INSERT INTO `users` (`user_id`, `username`, `password`, `type_id`, `firstname`, `middlename`, `surname`) VALUES('4', 'jcohenho', 'jcohenho', 4, 'jerm', 'l', 'nohec');
INSERT INTO `users` (`user_id`, `username`, `password`, `type_id`, `firstname`, `middlename`, `surname`) VALUES('5', 'jsurf', 'jsurf', 5, 'jero', 'jero', 'jero');

-- --------------------------------------------------------

--
-- Table structure for table `user_types`
--

DROP TABLE IF EXISTS `user_types`;
CREATE TABLE `user_types` (
  `type_id` varchar(12) NOT NULL,
  `description` varchar(25) NOT NULL,
  KEY `type_id` (`type_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_types`
--

INSERT INTO `user_types` (`type_id`, `description`) VALUES('1', 'admin');
INSERT INTO `user_types` (`type_id`, `description`) VALUES('2', 'registrar');
INSERT INTO `user_types` (`type_id`, `description`) VALUES('3', 'accounting');
INSERT INTO `user_types` (`type_id`, `description`) VALUES('4', 'dean');
INSERT INTO `user_types` (`type_id`, `description`) VALUES('5', 'teacher');
INSERT INTO `user_types` (`type_id`, `description`) VALUES('6', 'student assistant');
