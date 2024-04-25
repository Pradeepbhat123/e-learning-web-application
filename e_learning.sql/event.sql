-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 03, 2020 at 03:35 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `student_guidence`
--

-- --------------------------------------------------------

--
-- Table structure for table `course_details`
--

CREATE TABLE `course_details` (
  `course_id` int(11) NOT NULL auto_increment,
  `course_name` varchar(100) NOT NULL,
  `course_discription` varchar(100) NOT NULL,
  `course_fees` int(11) NOT NULL,
  `course_duration` varchar(100) NOT NULL,
  PRIMARY KEY  (`course_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `course_details`
--

INSERT INTO `course_details` (`course_id`, `course_name`, `course_discription`, `course_fees`, `course_duration`) VALUES
(1, 'BCA', 'BCABachelor of Computer', 25000, 'Three'),
(2, 'BBA', 'Bachelor of Business Administration', 2500, 'Three'),
(3, 'BA', 'Bachelor of Arts', 18000, 'Two'),
(4, 'q', 'q', 45, 'One'),
(5, 'q', 'q', 65, 'One'),
(6, 'qq', 'qq', 45, 'One'),
(7, 'w', 'w', 9, 'One');

-- --------------------------------------------------------

--
-- Table structure for table `facalaty_details`
--

CREATE TABLE `facalaty_details` (
  `facalaty_id` int(11) NOT NULL auto_increment,
  `facalaty_fullname` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `qulification` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `contact_no` int(11) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `date_of_joining` date NOT NULL,
  `facalaty_photo` varchar(100) NOT NULL,
  PRIMARY KEY  (`facalaty_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `facalaty_details`
--

INSERT INTO `facalaty_details` (`facalaty_id`, `facalaty_fullname`, `gender`, `qulification`, `address`, `city`, `contact_no`, `email_id`, `date_of_joining`, `facalaty_photo`) VALUES
(3, 'pooja', '', '', 'nipani', 'nipani', 12365478, 'd', '2019-12-10', ''),
(4, 'pooja', 'female', 'bca', 'nipani', 'nipani', 123654, 's', '2019-12-12', ''),
(12, 'gaytri', '', '', 'nipani', 'nipani', 12365478, 'd', '2019-12-10', ''),
(13, 'vinu', 'female', 'bsc', 'nipani', 'nipani', 1654987, 's', '2019-12-31', ''),
(14, 'pooja', 'female', 'bsc', 'nipani', 'nipani', 1654987, 'd', '2019-12-12', ''),
(15, 'san', 'male', 'MBA', 'dharwad', 'dharwad', 2147483647, 'san@gmail.com', '2020-01-21', ''),
(17, 'san', 'male', 'MBA', 's', 'kolhapur', 2147483647, 'vinayak@gmail.com', '2020-01-30', ''),
(18, 'vinod', 'male', 'MBA', 'hubali', 'hubaki', 2147483647, 'vin@gmail.com', '2020-01-16', 'card.png'),
(20, 'tatay', 'male', 'mca', 'HUBALI', 'DHARWAD', 2147483647, 'tatay@gmail.com', '2020-02-06', 'hornbill-river-resort.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL auto_increment,
  `student_id` int(11) NOT NULL,
  `facalaty_id` int(11) NOT NULL,
  `feedback_title` varchar(100) NOT NULL,
  `feedback_discription` varchar(100) NOT NULL,
  `feedback_date` date NOT NULL,
  `feedback_reating` varchar(100) NOT NULL,
  PRIMARY KEY  (`feedback_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `student_id`, `facalaty_id`, `feedback_title`, `feedback_discription`, `feedback_date`, `feedback_reating`) VALUES
(1, 3, 0, 'abc', 'xyz', '2019-12-02', 'active'),
(2, 3, 0, 'abc', 'xyz', '2019-12-10', 'active'),
(3, 1, 0, 's', 'good', '2020-01-02', 'Active'),
(4, 2, 0, 's', 'good', '2020-01-02', 'Active'),
(5, 1, 18, 's', 'good', '2020-01-02', 'Active'),
(6, 1, 18, 's', 'bad this feedback send to vinayak', '2020-01-02', 'Active'),
(7, 2, 3, 'hi', 'demo reating', '2020-02-26', '2'),
(8, 2, 20, 'hi', 'demo reating', '2020-02-26', '4'),
(9, 2, 14, 'hi', 'demo reating su', '2020-02-27', '3');

-- --------------------------------------------------------

--
-- Table structure for table `fees_details`
--

CREATE TABLE `fees_details` (
  `fees_id` int(11) NOT NULL auto_increment,
  `fees_amount` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `f_sem` varchar(11) NOT NULL,
  `recipt_no` varchar(100) NOT NULL,
  `rev_date` date NOT NULL,
  `narration` varchar(100) NOT NULL,
  PRIMARY KEY  (`fees_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `fees_details`
--

INSERT INTO `fees_details` (`fees_id`, `fees_amount`, `student_id`, `f_sem`, `recipt_no`, `rev_date`, `narration`) VALUES
(1, 2500, 1, 'First', '012120', '2020-01-02', ''),
(2, 2500, 1, 'First', '012120', '2019-01-02', 'vgg'),
(3, 2500, 2, 'Second', '012120', '2020-01-02', 'vgg'),
(5, 5000, 2, 'Second', 'KLEBCABBA0004', '2020-02-02', 'fees paid');

-- --------------------------------------------------------

--
-- Table structure for table `internal_exam`
--

CREATE TABLE `internal_exam` (
  `internal_exam_id` int(11) NOT NULL auto_increment,
  `internal_exam_name` varchar(100) NOT NULL,
  `internal_exam_discription` varchar(100) NOT NULL,
  PRIMARY KEY  (`internal_exam_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `internal_exam`
--

INSERT INTO `internal_exam` (`internal_exam_id`, `internal_exam_name`, `internal_exam_discription`) VALUES
(1, '201-2015', 'good'),
(2, '2020-02-26', 'II Internal Exam');

-- --------------------------------------------------------

--
-- Table structure for table `int_marks_details`
--

CREATE TABLE `int_marks_details` (
  `int_marks_details_id` int(11) NOT NULL auto_increment,
  `int_exam_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL,
  `exam_total_marks` int(11) NOT NULL,
  `obtain_marks` int(11) NOT NULL,
  PRIMARY KEY  (`int_marks_details_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `int_marks_details`
--

INSERT INTO `int_marks_details` (`int_marks_details_id`, `int_exam_id`, `student_id`, `sub_id`, `exam_total_marks`, `obtain_marks`) VALUES
(1, 1, 1, 6, 20, 10),
(2, 1, 1, 1, 20, 10),
(3, 1, 2, 1, 20, 15),
(4, 1, 1, 1, 40, 35),
(5, 1, 2, 1, 40, 38),
(6, 1, 1, 1, 100, 65),
(7, 1, 2, 1, 100, 70);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `security_questions` varchar(100) NOT NULL,
  `security_answers` varchar(100) NOT NULL,
  `login_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `type`, `security_questions`, `security_answers`, `login_status`) VALUES
('admin', '123123', 'admin', 'who are you', 'admin', 'active'),
('student', '123123', 'student', 'who are you', 'student', 'active'),
('faculty', '123123', 'faculty', 'who are you', 'faculty', 'active'),
('8105953436', '123123', 'faculty', 'Enter Email-id', 'san@gmail.com', 'Active'),
('san@gmail.com', '123', 'faculty', 'Enter Email-id', 'san@gmail.com', 'Active'),
('vinayak@gmail.com', '123123', 'faculty', 'Enter Email-id', 'vinayak@gmail.com', 'Active'),
('vin@gmail.com', '123456', 'faculty', 'Enter Email-id', 'vin@gmail.com', 'Active'),
('M1512219', 'M1512219', 'student', 'Enter Register Number', 'M1512219', 'Active'),
('M1512218', 'M1512218', 'student', 'Enter Register Number', 'M1512218', 'Active'),
('tatay@gmail.com', '123123', 'faculty', 'Enter Email-id', 'tatay@gmail.com', 'Active'),
('M1215219', 'M1215219', 'student', 'Enter Register Number', 'M1215219', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE `mail` (
  `mail_id` int(11) NOT NULL auto_increment,
  `student_id` int(11) NOT NULL,
  `facalaty_id` int(11) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `discription` varchar(100) NOT NULL,
  `mail_date` date NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY  (`mail_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `mail`
--

INSERT INTO `mail` (`mail_id`, `student_id`, `facalaty_id`, `subject`, `discription`, `mail_date`, `status`) VALUES
(1, 2, 18, 'hi demo', 'send', '2020-01-02', 'Active'),
(2, 1, 18, 'hi demo', '45', '2020-01-02', 'Active'),
(4, 1, 18, 'hi demo', 'vinayak', '2020-01-02', 'Active'),
(5, 2, 18, 'hi demo', 'ragu', '2020-01-02', 'Active'),
(6, 1, 18, 'vinod', 'faculty', '2020-01-02', 'Active'),
(7, 1, 15, 'hi', 'hi', '2020-02-09', 'Active'),
(8, 1, 17, 'hi', 'fe', '2020-02-10', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `notes_id` int(11) NOT NULL auto_increment,
  `sub_id` int(11) NOT NULL,
  `facalaty_id` int(11) NOT NULL,
  `notes_title` varchar(100) NOT NULL,
  `notes_discription` varchar(100) NOT NULL,
  `notes_attached_file` varchar(100) NOT NULL,
  `notes_attached_date` date NOT NULL,
  PRIMARY KEY  (`notes_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`notes_id`, `sub_id`, `facalaty_id`, `notes_title`, `notes_discription`, `notes_attached_file`, `notes_attached_date`) VALUES
(1, 1, 3, 'bca', 'good', '9wHuyp.jpg', '2020-01-01'),
(2, 1, 15, 'java', 'good notes', 'basic.html', '2020-02-06'),
(3, 2, 17, 'm', 'good notes m', 'demo.html', '2020-02-06'),
(4, 1, 20, 'java add', 'good notes', 'Presentationfinal (1).pptx', '2020-02-06');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `notification_id` int(11) NOT NULL auto_increment,
  `notification_title` varchar(100) NOT NULL,
  `notification_discription` varchar(100) NOT NULL,
  `notification_date` date NOT NULL,
  PRIMARY KEY  (`notification_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`notification_id`, `notification_title`, `notification_discription`, `notification_date`) VALUES
(2, 'ppp', 'xyz', '2019-12-03'),
(3, 'abc', 'xyz', '2019-12-25'),
(4, 'gp', 'times of india', '2019-12-04'),
(5, 'gayatri', 'good', '2019-12-11'),
(6, 's', 's', '2020-01-02');

-- --------------------------------------------------------

--
-- Table structure for table `question_paper`
--

CREATE TABLE `question_paper` (
  `question_paper_id` int(11) NOT NULL auto_increment,
  `exam_name` varchar(100) NOT NULL,
  `sub_id` int(11) NOT NULL,
  `question_paper_attached_file` varchar(100) NOT NULL,
  PRIMARY KEY  (`question_paper_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `question_paper`
--

INSERT INTO `question_paper` (`question_paper_id`, `exam_name`, `sub_id`, `question_paper_attached_file`) VALUES
(1, '2019-2020', 1, ''),
(2, '2019-2020', 2, 'card.png');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `student_id` int(11) NOT NULL auto_increment,
  `student_fullname` varchar(100) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `pincode` int(100) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `contact_no` varchar(100) NOT NULL,
  `couse_id` int(11) NOT NULL,
  `student_reg_no` varchar(100) NOT NULL,
  `student_photo` varchar(100) NOT NULL,
  `student_status` varchar(100) NOT NULL,
  PRIMARY KEY  (`student_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`student_id`, `student_fullname`, `date_of_birth`, `gender`, `address`, `city`, `pincode`, `email_id`, `contact_no`, `couse_id`, `student_reg_no`, `student_photo`, `student_status`) VALUES
(1, 'vinayak', '2020-01-23', 'male', 'kolhapur', 'kolhapur', 591215, 'vinayak@gmail.com', '8105953436', 1, 'M1512219', '22959348.jpg', 'Active'),
(2, 'raghu', '2020-01-02', 'male', 'dharwad', 'hubali', 5912152, 'raghu@gmail.com', '9874563210', 1, 'M1512218', 'profile.jpg', 'Active'),
(3, 'Vinayak', '1997-12-04', 'male', 'Opp Suvarna Petrol Bunk ', 'DHARWAD', 580006, 'loharvinayak9119@gmail.com', '09886631818', 2, 'M1215219', 'cover4.jpg', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `subject_details`
--

CREATE TABLE `subject_details` (
  `sub_id` int(11) NOT NULL auto_increment,
  `sub_name` varchar(100) NOT NULL,
  `course_id` int(11) NOT NULL,
  `sem` varchar(100) NOT NULL,
  PRIMARY KEY  (`sub_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `subject_details`
--

INSERT INTO `subject_details` (`sub_id`, `sub_name`, `course_id`, `sem`) VALUES
(1, 'Financial Accounting', 1, 'First'),
(2, 'Mathematics I', 1, 'First'),
(3, 'Managerial Economics', 2, 'First'),
(4, 'Indian Constitution', 2, 'Second');

-- --------------------------------------------------------

--
-- Table structure for table `syllabus_details`
--

CREATE TABLE `syllabus_details` (
  `syllabus_id` int(11) NOT NULL auto_increment,
  `syllabus_name` varchar(100) NOT NULL,
  `sub_id` int(11) NOT NULL,
  `syllabus_copy_attached` varchar(100) NOT NULL,
  PRIMARY KEY  (`syllabus_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `syllabus_details`
--

INSERT INTO `syllabus_details` (`syllabus_id`, `syllabus_name`, `sub_id`, `syllabus_copy_attached`) VALUES
(2, 'cs', 0, ''),
(3, 'pooja', 1234, ''),
(4, 'python', 1234, ''),
(5, 'aa', 1, '22959348.jpg'),
(6, 'BCA', 2, 'card.png'),
(7, 'BCA', 3, '(22) WhatsApp.pdf');
