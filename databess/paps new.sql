-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2024 at 05:05 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paps`
--

-- --------------------------------------------------------

--
-- Table structure for table `completed_request`
--

CREATE TABLE `completed_request` (
  `ctrl_num` int(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `student_num` varchar(255) NOT NULL,
  `program` varchar(255) NOT NULL,
  `yr_sec` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `sem` varchar(255) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `reqtype` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `completed_request`
--

INSERT INTO `completed_request` (`ctrl_num`, `fullname`, `student_num`, `program`, `yr_sec`, `dob`, `sem`, `purpose`, `reqtype`) VALUES
(1, 'haha', 'haha', 'haha', 'haha', '', '', '', 'hahha'),
(2, 'haha', 'haha', 'haha', 'haha', '', '', '', ''),
(3, 'wer', '234', 'BS Computer Science', '2-5', '', '', '', 'Transcript of Records'),
(5, 'mrpogi', '202110343', 'BS Computer Science', '3-2', '', '', '', 'Certificate of Enrollment'),
(6, 'Charl C. Cortez', '20212312121', 'BS Information Technology', '3-5', '', '', '', 'Good Moral'),
(7, '1231231', '1231231231', '123', '3-1', '', '', '', 'Good Moral'),
(10000004, 'Janet Bulao', '202400006', 'BS Computer Science', '3-1', '', '', '', 'Certificate of Grade');

-- --------------------------------------------------------

--
-- Table structure for table `enrollees`
--

CREATE TABLE `enrollees` (
  `stud_num` int(255) NOT NULL,
  `year_lvl` varchar(255) NOT NULL,
  `program` varchar(255) NOT NULL,
  `first_n` varchar(255) NOT NULL,
  `mid_n` varchar(255) NOT NULL,
  `last_n` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `bday` varchar(255) NOT NULL,
  `civstatus` varchar(255) NOT NULL,
  `contactno` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `municipality` varchar(255) NOT NULL,
  `barangay` varchar(255) NOT NULL,
  `zip_code` varchar(255) NOT NULL,
  `elem_school` varchar(255) NOT NULL,
  `jh_school` varchar(255) NOT NULL,
  `sh_school` varchar(255) NOT NULL,
  `vocational` varchar(255) NOT NULL,
  `college_trans` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enrollees`
--

INSERT INTO `enrollees` (`stud_num`, `year_lvl`, `program`, `first_n`, `mid_n`, `last_n`, `sex`, `bday`, `civstatus`, `contactno`, `email`, `religion`, `street`, `country`, `province`, `municipality`, `barangay`, `zip_code`, `elem_school`, `jh_school`, `sh_school`, `vocational`, `college_trans`) VALUES
(100000004, '3', 'BS Computer Science', 'Karl Louie', 'Arce', 'Daño', 'Male', '2003-09-19', 'single', '09950281560', 'karllouie919@gmail.com', 'Roman Catholic', 'latero', 'Philippines', 'cavite', 'Bacoor city', 'San Nicolas III', '4102', 'SHIVES', 'GANHS', 'SFAC', 'wala', 'wala'),
(100000005, '3', 'BS Computer Science', 'Janet', 'Mendoza', 'Bulao', 'Female', '2001-07-31', 'single', '+639556183132', 'janetbulao07@gmail.com', 'Church of Christ', '122 Josefa', 'Philippines', 'Metro Manila', 'Las Piñas City', 'Pilar Village', '1740', 'Nangalisan Elementary School', 'Tuba National High School', 'Baguio College of Technology', 'n/a', 'n/a'),
(100000009, '3', 'BS Computer Science', 'Jacqueline', 'Te', 'Avendaño', 'Female', '2002-12-04', 'single', '09275991810', 'jackieavendano32@gmail.com', 'Saksi ni Jehova', 'St. Anne ', 'Philippines', 'Cavite', 'Bacoor', 'Molino 2', '4102', 'Camella School Inc.', 'Las Piñas City National Science High School', 'Las Piñas City National Science Senior High School', 'N/A', ''),
(100000010, '3', 'BS Computer Science', 'Alhaitham', 'aveh', 'Kamisato', 'Male', '2024-02-11', 'byuda', '09098768765', 'alhaithamya@gmail.com', 'Muslim', 'Beside the Akademiya', 'Teyvat', 'Sumeru', 'Sumeru City', 'Akads', '1928', 'Akedmiya', 'Aademiya', 'Akademiya', '', ''),
(100000011, '2', 'BS MultiMedia Arts', 'Furina', 'Fkarus', 'Focalors', 'Female', '1524-10-12', 'married', '09876543212', 'Hydroarchon3rd@gmail.com', 'own religion', 'nHA', 'na', 'nah', 'nah', 'nah', 'nh', 'nah', 'nah', 'nah', '', ''),
(100000012, '3', 'BS Computer Science', 'Navia ', '', 'Caspar', 'Female', '2001-08-16', 'single', '09876543212', 'Spinaderosula@gmail.com', 'secret', 'Poisson', 'Fontaine', 'nah', 'nah', 'nah', '1234', 'nah', 'nah', 'nah', 'nah', 'nah'),
(100000013, '4', 'BS Hotel and Restaurant Management', 'Yelan', 'Valley', 'Orchid', 'Female', '0001-04-20', 'single', '09872345676', 'yelan@gmail.com', 'Christian', 'Chasm', 'Teyvat', 'Liyue', 'Liyue', 'Underground', '1984', 'nope', 'nope', 'nah', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `missed_request`
--

CREATE TABLE `missed_request` (
  `ctrl_num` int(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `student_num` varchar(255) NOT NULL,
  `program` varchar(255) NOT NULL,
  `yr_sec` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `sem` varchar(255) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `reqtype` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `missed_request`
--

INSERT INTO `missed_request` (`ctrl_num`, `fullname`, `student_num`, `program`, `yr_sec`, `dob`, `sem`, `purpose`, `reqtype`) VALUES
(4, 'wet', '234', 'BS Computer Science', '3-1', '', '', '', 'Good Moral'),
(8, 'ahhh', '@0210299', 'BS Computer Science', '4-3', '', '', '', 'Transcript of Records'),
(9, 'ytds', '6543', 'nbc', '4-4', '', '', '', 'Certificate of Enrollment'),
(10000000, 'yiieeee', '202400054', 'bs', '1-2', '', '', '', 'hmm'),
(10000001, '', '', '', '', '', '', '', ''),
(10000002, '', '', '', '', '', '', '', ''),
(10000003, '', '', '', '', '', '', '', ''),
(10000004, '', '', '', '', '', '', '', ''),
(10000005, '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `ctrl_num` int(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `student_num` varchar(255) NOT NULL,
  `program` varchar(255) NOT NULL,
  `yr_sec` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `sem` varchar(255) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `reqtype` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`ctrl_num`, `fullname`, `student_num`, `program`, `yr_sec`, `dob`, `sem`, `purpose`, `reqtype`) VALUES
(10000001, 'karl', '20211039', 'BS Computer Science', '3-1', '2024-01-25', '1', '2', 'Good Moral'),
(10000002, 'Janet M. Bulao', '202400005', 'BS Computer Science', '3-1', '2001-07-31', 'First Semester', 'Graduating Student', 'Transcript of Records'),
(10000003, 'Juan Dela Cruz', '202400012', 'BS Computer Science', '3-1', '2003-09-19', '1st Semester', 'Scholarship', 'Certificate of Enrollment'),
(10000005, 'Ayato Kamisato', '202410982', 'BS Computer Science', '3-1', '2024-02-03', '9th', 'pang commission', 'Good Moral'),
(10000006, 'as', 'as', 'BS Computer Science', '3-1', '2024-02-02', '123', 'qweqwe', 'Transcript of Records'),
(10000007, 'Ayaka Kamisato', '2081237123', 'BS Civil Engineering', '1-1', '2021-09-28', '1st', 'Gusto niya si traveler', 'Certificate of Grade'),
(10000008, 'Eula Lawrence', '20928183', 'BS Business Administration', '4-1', '1998-10-25', '2nd', 'Wanna diz dat', 'Certificate of Enrollment'),
(10000009, 'Cyno', '2024827196', 'BS Physical Therapy', '2-4', '1995-06-23', '1st', 'Makasaket', 'Transcript of Records'),
(10000010, 'Kujou Sara Encampment', '2024523525', 'BS Mechanical Engineering', '3-2', '2003-07-14', '2nd', 'raiden shogun', 'Certificate of Grade'),
(10000011, 'Diluc Ragnvindr', '2024857411', 'BS Entrepreneurship', '4-2', '1989-04-30', '2nd', 'Dawn Winery', 'Certificate of Enrollment'),
(10000012, 'Lisa Minci', '0246837490', 'BS Physics', '4-1', '1994-06-09', '2nd', 'Dottore', 'Certificate of Enrollment'),
(10000013, 'Yoimiya Naganohara', '298342734', 'BS Chemistry', '1-5', '1998-06-21', '2nd', 'Ayaka', 'Good Moral'),
(10000014, 'Hat Guy Kusanali', '202400098', 'BS Psychology', '1-4', '2023-01-03', '1st', 'Mami', 'Transcript of Records'),
(10000015, 'Morax Zhongli', '2024873049', 'BS Architecture', '4-1', '0001-12-31', '1st', 'to die', 'Certificate of Enrollment'),
(10000016, 'Kaeya Alberich', '202454111', 'BS Financial Management', '3-3', '1992-11-30', '2nd', 'to be captain', 'Certificate of Grade'),
(10000017, 'Mona Megistus', '202321342', 'BS Astrology', '3-3', '2001-08-31', '1st', 'to be great', 'Transcript of Records'),
(10000018, 'Xiao Alatus', '202459311', 'BS Physics', '3-1', '0002-04-17', '1st', 'to be an adeptus', 'Certificate of Grade'),
(10000019, 'Kokomi Sangonomiya', '202412345', 'BS Political Science', '3-1', '1999-02-22', '2nd', 'world peace', 'Certificate of Enrollment'),
(10000020, 'Nilou No', '20240591113', 'BS Physical Therapy', '2-3', '2003-12-03', '2nd', 'water show', 'Good Moral');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `stud_num` int(255) NOT NULL,
  `year_lvl` varchar(255) NOT NULL,
  `program` varchar(255) NOT NULL,
  `first_n` varchar(255) NOT NULL,
  `mid_n` varchar(255) NOT NULL,
  `last_n` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `bday` varchar(255) NOT NULL,
  `civstatus` varchar(255) NOT NULL,
  `contactno` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `municipality` varchar(255) NOT NULL,
  `barangay` varchar(255) NOT NULL,
  `zip_code` varchar(255) NOT NULL,
  `elem_school` varchar(255) NOT NULL,
  `jh_school` varchar(255) NOT NULL,
  `sh_school` varchar(255) NOT NULL,
  `vocational` varchar(255) NOT NULL,
  `college_trans` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`stud_num`, `year_lvl`, `program`, `first_n`, `mid_n`, `last_n`, `sex`, `bday`, `civstatus`, `contactno`, `email`, `religion`, `street`, `country`, `province`, `municipality`, `barangay`, `zip_code`, `elem_school`, `jh_school`, `sh_school`, `vocational`, `college_trans`) VALUES
(202400001, '1', 'BS Information Technology', 'sd', 'sd', 'sd', 'Male', '2024-01-12', 'inayawan', '09999876542', 'sady', 'sd', '1', 're', 're', 'er', 're', 'er', 're', 'e', '1', '1', '1'),
(202400002, '3', 'BS Computer Science', 'Elida Veronica', 'Abendan', 'Medalla', 'Female', '1999-11-17', 'single', '09772609433', 'nicka@gmail.com', 'Roman Catholic', 'Princess Plum St.', 'Philippines', 'Metro Manila', 'Las Piñas City', 'Talon Kuatro', '1747', 'Talon Elementary School', 'Las Pinas East National High School', 'DFCAITTI', 'N/A', 'Lyceum of Alabang'),
(202400003, '3', 'BS Computer Science', 'Johanna Marie', '', 'Dino', 'Female', '2001-08-11', 'single', '+63 915 488 7256', 'jmarie.dino@gmail.com', 'Roman Catholic', 'Block 235 Lot 21 Phase 2', 'Philippines', 'Cavite', 'Dasmariñas', 'Paliparan 3', '4114', 'Southfort Academy ', 'Metanoiah Academy', 'Philippine Christian University', 'N/A', 'N/A'),
(202400004, '3', 'BS Computer Science', 'Mica', 'Arisgado', 'Lingan', 'Female', '2001-02-09', 'single', '09123456789', 'micalingan2@gmail.com', 'Roman catholic', 'Mangga', 'philippines', 'Cavite', 'Bacoor', 'Molino ', '4107', 'gwaran annex', 'BNHS gawaran', 'AMA ', 'N/A', 'MAMS ACADEMY'),
(202400005, '3', 'BS Computer Science', 'Charles', 'Cortez', 'Camino', 'Male', '2002-12-19', 'single', '09272454881', 'charlescamino@gmail.com', 'Roman Catholic', 'Block 6 Lot 36 Green Valley', 'Philippines', 'Cavite', 'Bacoor City', 'San Nicholas III', '4102', 'Soldier Hills IV Elementary School', 'Golden Acres National High School', 'Saint Francis of Assissi College', '', ''),
(202400006, '3', 'BS Computer Science', 'Charl', 'Cortez', 'Cortez', 'Male', '2002-12-19', 'single', '09272454881', 'charlcrtz@gmail.com', 'Roman Catholic', '20 Golden Side', 'Philippines', 'Cavite', 'Bacoor City', 'San Nicholas III', '4107', 'Moonwalk Elementary School', 'Las Pinas City National Science High School', 'Las Pinas City National Science High School', 'N/A', 'N/A');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_students`
--

CREATE TABLE `tbl_students` (
  `studentID` int(255) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `program` varchar(255) NOT NULL,
  `yearsection` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_students`
--

INSERT INTO `tbl_students` (`studentID`, `fullName`, `email`, `program`, `yearsection`) VALUES
(1, 'HAHA', 'HAH', 'AHH', 'AH'),
(202400000, 'Karl', 'oo', 'bs', '2'),
(202400001, 'HAHA HA HAAHAHA', 'AH', 'HAAHA', 'haha'),
(202400002, 'HAHA HA HAAHAHA', 'AH', 'HAAHA', 'haha');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `completed_request`
--
ALTER TABLE `completed_request`
  ADD PRIMARY KEY (`ctrl_num`);

--
-- Indexes for table `enrollees`
--
ALTER TABLE `enrollees`
  ADD PRIMARY KEY (`stud_num`);

--
-- Indexes for table `missed_request`
--
ALTER TABLE `missed_request`
  ADD PRIMARY KEY (`ctrl_num`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`ctrl_num`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`stud_num`);

--
-- Indexes for table `tbl_students`
--
ALTER TABLE `tbl_students`
  ADD PRIMARY KEY (`studentID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `completed_request`
--
ALTER TABLE `completed_request`
  MODIFY `ctrl_num` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10000005;

--
-- AUTO_INCREMENT for table `enrollees`
--
ALTER TABLE `enrollees`
  MODIFY `stud_num` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100000014;

--
-- AUTO_INCREMENT for table `missed_request`
--
ALTER TABLE `missed_request`
  MODIFY `ctrl_num` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10000006;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `ctrl_num` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10000021;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `stud_num` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202400007;

--
-- AUTO_INCREMENT for table `tbl_students`
--
ALTER TABLE `tbl_students`
  MODIFY `studentID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202400003;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
