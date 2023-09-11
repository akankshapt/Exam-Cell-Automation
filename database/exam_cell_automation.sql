-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2021 at 04:09 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam_cell_automation`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `fld_admin_id` int(11) NOT NULL,
  `fld_admin_name` varchar(10) NOT NULL,
  `fld_admin_email` varchar(20) NOT NULL,
  `fld_admin_password` varchar(10) NOT NULL,
  `fld_admin_photo` varchar(50) NOT NULL,
  `fld_admin_address` text NOT NULL,
  `fld_admin_mobile` varchar(13) NOT NULL,
  `fld_admin_created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `fld_admin_modified_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`fld_admin_id`, `fld_admin_name`, `fld_admin_email`, `fld_admin_password`, `fld_admin_photo`, `fld_admin_address`, `fld_admin_mobile`, `fld_admin_created_date`, `fld_admin_modified_date`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin', '5c419697e90b3lpPA9Ro.jpg', 'Maharashtra', '9216546454', '2018-12-06 14:35:00', '2021-09-24 16:24:35');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_question`
--

CREATE TABLE `tbl_question` (
  `fld_question_id` int(11) NOT NULL,
  `fld_standard_id` int(11) NOT NULL,
  `fld_subject_id` int(11) NOT NULL,
  `fld_question` text NOT NULL,
  `fld_option1` text NOT NULL,
  `fld_option2` text NOT NULL,
  `fld_option3` text NOT NULL,
  `fld_option4` text NOT NULL,
  `fld_right_answer` text NOT NULL,
  `fld_question_created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `fld_question_modified_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_question`
--

INSERT INTO `tbl_question` (`fld_question_id`, `fld_standard_id`, `fld_subject_id`, `fld_question`, `fld_option1`, `fld_option2`, `fld_option3`, `fld_option4`, `fld_right_answer`, `fld_question_created_date`, `fld_question_modified_date`) VALUES
(80, 16, 12, ' An ________ is a set of entities of the same type that share the same properties, or attributes.', 'Entity set', 'Attribute set', 'Relation set', ' Entity model', '1', '2021-09-26 12:07:54', '2021-09-26 12:07:54'),
(81, 16, 12, 'Entity is a _________', 'Object of relation', 'Present working model', 'Thing in real world', 'Model of relation', '3', '2021-09-26 12:09:41', '2021-09-26 12:09:41'),
(82, 16, 12, 'The descriptive property possessed by each entity set is _________', 'Entity', ' Attribute', 'Relation', 'Model', '2', '2021-09-26 12:10:59', '2021-09-26 12:10:59'),
(83, 16, 12, 'The function that an entity plays in a relationship is called that entitys _____________', 'Participation', 'Position', 'Role', ' Instance', '3', '2021-09-26 12:12:14', '2021-09-26 12:12:14'),
(84, 16, 12, 'A collection of data designed to be used by different people is called a/an', 'Organization', 'Database', 'Relationship', 'Schema', '2', '2021-09-26 12:13:52', '2021-09-26 12:13:52'),
(85, 16, 12, 'Which of the following is the oldest database model?', 'Relational', 'Deductive', 'Physical', ' Network', '4', '2021-09-26 12:15:06', '2021-09-26 12:15:06'),
(86, 16, 12, 'Which of the following schemas does define a view or views of the database for particular users?', 'Internal schema', 'Conceptual schema', 'Physical schema', ' External schema', '4', '2021-09-26 12:16:20', '2021-09-26 12:16:20'),
(87, 16, 12, ' Which of the following is an attribute that can uniquely identify a row in a table?', 'Secondary key', 'Candidate key', 'Foreign key', 'Alternate key', '2', '2021-09-26 12:17:34', '2021-09-26 12:17:34'),
(88, 16, 12, ' Which of the following are the process of selecting the data storage and data access characteristics of the database?', 'Logical database design', 'Physical database design', 'Testing and performance tuning', ' Evaluation and selecting', '2', '2021-09-26 12:18:52', '2021-09-26 12:18:52'),
(89, 16, 12, 'Which of the following terms does refer to the correctness and completeness of the data in a database?', ' Data security', 'Data constraint', ' Data independence', ' Data integrity', '4', '2021-09-26 12:19:53', '2021-09-26 12:19:53'),
(90, 16, 12, ' The relationship between DEPARTMENT and EMPLOYEE is a', 'Onetoone relationship', 'Onetomany relationship', 'Manytomany relationship', 'Manytoone relationship', '2', '2021-09-26 12:21:02', '2021-09-26 12:21:02'),
(91, 16, 12, 'A table can be logically connected to another table by defining a', 'Super key', 'Candidate key', 'Primary key', 'Unique key', '3', '2021-09-26 12:22:20', '2021-09-26 12:22:20'),
(92, 16, 12, ' If the state of the database no longer reflects a real state of the world that the database is supposed to capture, then such a state is called', 'Consistent state', 'Parallel state', 'Durable state', ' Inconsistent state', '4', '2021-09-26 12:23:30', '2021-09-26 12:23:30'),
(93, 16, 12, ' Ensuring isolation property is the responsibility of the', 'Recoverymanagement component of the DBMS', 'Concurrencycontrol component of the DBMS', ' Transactionmanagement component of the DBMS', 'Buffer management component in DBMS', '2', '2021-09-26 12:25:00', '2021-09-26 12:25:00'),
(94, 16, 12, ' A_____ is a query that retrieves rows from more than one table or view', 'Start', ' End', 'Join', ' All of the mentioned', '3', '2021-09-26 12:26:45', '2021-09-26 12:26:45'),
(95, 16, 12, 'A condition is referred to as __________', 'Join in SQL', 'Join condition', ' Join in SQL  Condition', 'None of the mentioned', '2', '2021-09-26 12:27:47', '2021-09-26 12:27:47'),
(96, 16, 12, 'Which oracle is the join condition is specified using the WHERE clause', 'Oracle 9i', 'Oracle 8i', 'Preoracle 9i', 'Preoracle 8i', '3', '2021-09-26 12:28:51', '2021-09-26 12:28:51'),
(97, 16, 12, 'How many join types in join condition', '2', '3', '4', '5', '4', '2021-09-26 12:30:18', '2021-09-26 12:30:18'),
(98, 16, 12, ' Which are the join types in join condition', 'Cross join', 'Natural join', 'Join with USING clause', 'All of the mentioned', '4', '2021-09-26 12:31:35', '2021-09-26 12:31:35'),
(99, 16, 12, 'Which view that contains more than one table in the toplevel FROM clause of the SELECT statement', 'Join view', ' Datable join view', 'Updatable join view', 'All of the mentioned', '3', '2021-09-26 12:41:35', '2021-09-26 12:41:35');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_result`
--

CREATE TABLE `tbl_result` (
  `fld_result_id` int(11) NOT NULL,
  `fld_user_id` int(11) NOT NULL,
  `fld_standard_id` int(11) NOT NULL,
  `fld_subject_id` int(11) NOT NULL,
  `fld_correct_answer` int(11) NOT NULL,
  `fld_wrong_answer` int(11) NOT NULL,
  `fld_total_marks` int(11) NOT NULL,
  `fld_result_created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `fld_result_modified_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_result`
--

INSERT INTO `tbl_result` (`fld_result_id`, `fld_user_id`, `fld_standard_id`, `fld_subject_id`, `fld_correct_answer`, `fld_wrong_answer`, `fld_total_marks`, `fld_result_created_date`, `fld_result_modified_date`) VALUES
(7, 8, 16, 12, 6, 14, 6, '2021-09-26 12:45:56', '2021-09-26 12:46:33'),
(8, 8, 16, 12, 8, 12, 8, '2021-09-26 13:44:18', '2021-09-26 13:45:38');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_result_question`
--

CREATE TABLE `tbl_result_question` (
  `fld_result_question_id` int(11) NOT NULL,
  `fld_result_id` int(11) NOT NULL,
  `fld_question_id` int(11) NOT NULL,
  `fld_user_answer` varchar(20) NOT NULL,
  `fld_result_answer` varchar(20) NOT NULL,
  `fld_result_marks` int(11) NOT NULL,
  `fld_result_created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `fld_result_modified_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_result_question`
--

INSERT INTO `tbl_result_question` (`fld_result_question_id`, `fld_result_id`, `fld_question_id`, `fld_user_answer`, `fld_result_answer`, `fld_result_marks`, `fld_result_created_date`, `fld_result_modified_date`) VALUES
(81, 7, 92, '3', 'Wrong', 0, '2021-09-26 12:46:31', '2021-09-26 12:46:31'),
(82, 7, 98, '3', 'Wrong', 0, '2021-09-26 12:46:32', '2021-09-26 12:46:32'),
(83, 7, 95, '2', 'Correct', 1, '2021-09-26 12:46:32', '2021-09-26 12:46:32'),
(84, 7, 90, '1', 'Wrong', 0, '2021-09-26 12:46:32', '2021-09-26 12:46:32'),
(85, 7, 83, '3', 'Correct', 1, '2021-09-26 12:46:32', '2021-09-26 12:46:32'),
(86, 7, 99, '2', 'Wrong', 0, '2021-09-26 12:46:32', '2021-09-26 12:46:32'),
(87, 7, 89, '4', 'Correct', 1, '2021-09-26 12:46:32', '2021-09-26 12:46:32'),
(88, 7, 93, '1', 'Wrong', 0, '2021-09-26 12:46:32', '2021-09-26 12:46:32'),
(89, 7, 88, '2', 'Correct', 1, '2021-09-26 12:46:32', '2021-09-26 12:46:32'),
(90, 7, 85, '2', 'Wrong', 0, '2021-09-26 12:46:32', '2021-09-26 12:46:32'),
(91, 7, 94, '3', 'Correct', 1, '2021-09-26 12:46:32', '2021-09-26 12:46:32'),
(92, 7, 86, '1', 'Wrong', 0, '2021-09-26 12:46:32', '2021-09-26 12:46:32'),
(93, 7, 84, '1', 'Wrong', 0, '2021-09-26 12:46:32', '2021-09-26 12:46:32'),
(94, 7, 87, '1', 'Wrong', 0, '2021-09-26 12:46:32', '2021-09-26 12:46:32'),
(95, 7, 81, '2', 'Wrong', 0, '2021-09-26 12:46:32', '2021-09-26 12:46:32'),
(96, 7, 97, '3', 'Wrong', 0, '2021-09-26 12:46:32', '2021-09-26 12:46:32'),
(97, 7, 96, '1', 'Wrong', 0, '2021-09-26 12:46:32', '2021-09-26 12:46:32'),
(98, 7, 80, '', 'Wrong', 0, '2021-09-26 12:46:33', '2021-09-26 12:46:33'),
(99, 7, 82, '2', 'Correct', 1, '2021-09-26 12:46:33', '2021-09-26 12:46:33'),
(100, 7, 91, '1', 'Wrong', 0, '2021-09-26 12:46:33', '2021-09-26 12:46:33'),
(101, 8, 84, '4', 'Wrong', 0, '2021-09-26 13:45:37', '2021-09-26 13:45:37'),
(102, 8, 85, '1', 'Wrong', 0, '2021-09-26 13:45:37', '2021-09-26 13:45:37'),
(103, 8, 98, '4', 'Correct', 1, '2021-09-26 13:45:37', '2021-09-26 13:45:37'),
(104, 8, 86, '4', 'Correct', 1, '2021-09-26 13:45:37', '2021-09-26 13:45:37'),
(105, 8, 82, '3', 'Wrong', 0, '2021-09-26 13:45:37', '2021-09-26 13:45:37'),
(106, 8, 92, '1', 'Wrong', 0, '2021-09-26 13:45:37', '2021-09-26 13:45:37'),
(107, 8, 96, '3', 'Correct', 1, '2021-09-26 13:45:37', '2021-09-26 13:45:37'),
(108, 8, 94, '3', 'Correct', 1, '2021-09-26 13:45:38', '2021-09-26 13:45:38'),
(109, 8, 90, '2', 'Correct', 1, '2021-09-26 13:45:38', '2021-09-26 13:45:38'),
(110, 8, 93, '1', 'Wrong', 0, '2021-09-26 13:45:38', '2021-09-26 13:45:38'),
(111, 8, 99, '1', 'Wrong', 0, '2021-09-26 13:45:38', '2021-09-26 13:45:38'),
(112, 8, 80, '3', 'Wrong', 0, '2021-09-26 13:45:38', '2021-09-26 13:45:38'),
(113, 8, 81, '1', 'Wrong', 0, '2021-09-26 13:45:38', '2021-09-26 13:45:38'),
(114, 8, 91, '3', 'Correct', 1, '2021-09-26 13:45:38', '2021-09-26 13:45:38'),
(115, 8, 95, '3', 'Wrong', 0, '2021-09-26 13:45:38', '2021-09-26 13:45:38'),
(116, 8, 83, '3', 'Correct', 1, '2021-09-26 13:45:38', '2021-09-26 13:45:38'),
(117, 8, 89, '1', 'Wrong', 0, '2021-09-26 13:45:38', '2021-09-26 13:45:38'),
(118, 8, 97, '2', 'Wrong', 0, '2021-09-26 13:45:38', '2021-09-26 13:45:38'),
(119, 8, 88, '3', 'Wrong', 0, '2021-09-26 13:45:38', '2021-09-26 13:45:38'),
(120, 8, 87, '2', 'Correct', 1, '2021-09-26 13:45:38', '2021-09-26 13:45:38');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_standard`
--

CREATE TABLE `tbl_standard` (
  `fld_standard_id` int(11) NOT NULL,
  `fld_standard_name` varchar(255) NOT NULL,
  `fld_standard_created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `fld_standard_modified_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_standard`
--

INSERT INTO `tbl_standard` (`fld_standard_id`, `fld_standard_name`, `fld_standard_created_date`, `fld_standard_modified_date`) VALUES
(4, '8', '2021-06-04 15:34:37', '2021-06-04 15:34:37'),
(14, '7', '2021-09-26 10:51:52', '2021-09-26 10:51:52'),
(15, '6', '2021-09-26 10:52:05', '2021-09-26 10:52:05'),
(16, '5', '2021-09-26 10:52:16', '2021-09-26 10:52:16'),
(17, '4', '2021-09-26 10:52:25', '2021-09-26 10:52:25'),
(18, '3', '2021-09-26 10:52:33', '2021-09-26 10:52:33'),
(19, '2', '2021-09-26 10:52:41', '2021-09-26 10:52:41'),
(20, '1', '2021-09-26 10:52:48', '2021-09-26 10:52:48');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subject`
--

CREATE TABLE `tbl_subject` (
  `fld_subject_id` int(11) NOT NULL,
  `fld_standard_id` int(11) NOT NULL,
  `fld_subject_name` varchar(255) NOT NULL,
  `fld_subject_created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `fld_subject_modified_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_subject`
--

INSERT INTO `tbl_subject` (`fld_subject_id`, `fld_standard_id`, `fld_subject_name`, `fld_subject_created_date`, `fld_subject_modified_date`) VALUES
(9, 16, 'Internet Programming', '2021-09-26 11:00:47', '2021-09-26 11:00:47'),
(10, 16, 'Computer Network Security', '2021-09-26 11:01:20', '2021-09-26 11:01:20'),
(11, 16, 'Software Engineering', '2021-09-26 11:01:45', '2021-09-26 11:01:45'),
(12, 16, 'Advanced Data Management Technologies', '2021-09-26 11:02:52', '2021-09-26 11:02:52');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `fld_user_id` int(11) NOT NULL,
  `fld_user_name` varchar(255) NOT NULL,
  `fld_user_email` varchar(255) NOT NULL,
  `fld_user_mobile` varchar(10) NOT NULL,
  `fld_user_address` text NOT NULL,
  `fld_user_photo` varchar(255) NOT NULL,
  `fld_user_password` varchar(50) NOT NULL,
  `fld_standard_id` int(11) NOT NULL,
  `fld_user_status` varchar(20) NOT NULL DEFAULT 'Registered',
  `fld_user_created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `fld_user_modified_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`fld_user_id`, `fld_user_name`, `fld_user_email`, `fld_user_mobile`, `fld_user_address`, `fld_user_photo`, `fld_user_password`, `fld_standard_id`, `fld_user_status`, `fld_user_created_date`, `fld_user_modified_date`) VALUES
(3, 'New', 'new@gmail.com', '8798798798', 'Nashik', '', 'new', 3, 'Registered', '2021-05-12 17:05:08', '2021-05-12 17:05:08'),
(8, 'Akanksha', 'user@gmail.com', '8765467898', 'Ratnagiri', '', 'user', 16, 'Approved', '2021-09-26 12:36:06', '2021-09-26 12:36:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`fld_admin_id`);

--
-- Indexes for table `tbl_question`
--
ALTER TABLE `tbl_question`
  ADD PRIMARY KEY (`fld_question_id`);

--
-- Indexes for table `tbl_result`
--
ALTER TABLE `tbl_result`
  ADD PRIMARY KEY (`fld_result_id`);

--
-- Indexes for table `tbl_result_question`
--
ALTER TABLE `tbl_result_question`
  ADD PRIMARY KEY (`fld_result_question_id`);

--
-- Indexes for table `tbl_standard`
--
ALTER TABLE `tbl_standard`
  ADD PRIMARY KEY (`fld_standard_id`);

--
-- Indexes for table `tbl_subject`
--
ALTER TABLE `tbl_subject`
  ADD PRIMARY KEY (`fld_subject_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`fld_user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `fld_admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_question`
--
ALTER TABLE `tbl_question`
  MODIFY `fld_question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `tbl_result`
--
ALTER TABLE `tbl_result`
  MODIFY `fld_result_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_result_question`
--
ALTER TABLE `tbl_result_question`
  MODIFY `fld_result_question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `tbl_standard`
--
ALTER TABLE `tbl_standard`
  MODIFY `fld_standard_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_subject`
--
ALTER TABLE `tbl_subject`
  MODIFY `fld_subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `fld_user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
