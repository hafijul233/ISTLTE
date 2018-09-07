-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2018 at 11:45 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `istlte`
--

-- --------------------------------------------------------

--
-- Table structure for table `coursesinfo`
--

CREATE TABLE `coursesinfo` (
  `id` int(10) UNSIGNED NOT NULL,
  `coursename` varchar(255) NOT NULL DEFAULT '',
  `coursetype` varchar(255) NOT NULL DEFAULT '',
  `departmentid` int(10) UNSIGNED DEFAULT '0',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `createdby` varchar(255) NOT NULL DEFAULT '',
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modifiedby` varchar(255) NOT NULL DEFAULT '',
  `Comments` varchar(45) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `departmentsinfo`
--

CREATE TABLE `departmentsinfo` (
  `id` int(10) UNSIGNED NOT NULL,
  `departmentname` varchar(255) NOT NULL DEFAULT '',
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `createdby` varchar(255) NOT NULL DEFAULT '',
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modifiedby` varchar(255) NOT NULL DEFAULT '',
  `Comments` varchar(45) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studenteducationinfo`
--

CREATE TABLE `studenteducationinfo` (
  `id` int(10) UNSIGNED NOT NULL,
  `studentid` int(10) UNSIGNED NOT NULL,
  `admissiondate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `batchno` varchar(45) NOT NULL,
  `department` varchar(10) NOT NULL,
  `course` varchar(10) NOT NULL,
  `session` varchar(20) NOT NULL,
  `semseter` varchar(3) NOT NULL,
  `classroll` varchar(45) NOT NULL,
  `registrationno` varchar(45) NOT NULL,
  `status` tinyint(1) UNSIGNED DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `comments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studentparentsinfo`
--

CREATE TABLE `studentparentsinfo` (
  `id` int(10) UNSIGNED NOT NULL,
  `studentid` int(10) UNSIGNED NOT NULL,
  `fathername` varchar(255) NOT NULL,
  `fatherprofession` varchar(45) NOT NULL,
  `fatherspicture` text,
  `mothername` varchar(255) NOT NULL,
  `motherprofession` varchar(45) NOT NULL,
  `motherpicture` text,
  `postaddress` text,
  `phoneno` varchar(20) NOT NULL,
  `emailaddress` varchar(45) NOT NULL,
  `gurdianname` varchar(255) NOT NULL,
  `relationwithstudent` varchar(45) NOT NULL,
  `gurdianphoneno` varchar(20) NOT NULL,
  `gurdianpicture` text,
  `status` tinyint(1) UNSIGNED DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `comments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studentprofileinfo`
--

CREATE TABLE `studentprofileinfo` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `middlename` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `profilepicture` varchar(255) NOT NULL,
  `emailaddress` varchar(255) NOT NULL,
  `contactNo` varchar(20) NOT NULL,
  `bloodgroup` varchar(4) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` varchar(7) NOT NULL,
  `presentaddress` text,
  `presentphoneno` varchar(20) NOT NULL,
  `permanentaddress` text,
  `permanentphoneno` varchar(20) NOT NULL,
  `status` tinyint(1) UNSIGNED DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `comments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `userauthenticationinfo`
--

CREATE TABLE `userauthenticationinfo` (
  `id` int(10) UNSIGNED NOT NULL,
  `emailaddress` varchar(255) NOT NULL,
  `passwords` varchar(255) NOT NULL,
  `categories` varchar(45) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `comments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userauthenticationinfo`
--

INSERT INTO `userauthenticationinfo` (`id`, `emailaddress`, `passwords`, `categories`, `status`, `created`, `modified`, `comments`) VALUES
(1, 'admin@ist.com', 'admin', 'admin', 1, '2018-08-08 02:21:43', '2018-08-08 02:21:44', 'System Administration / Creator'),
(2, 'student@ist.com', 'student', 'student', 1, '2018-08-10 02:21:20', '2018-08-10 05:23:53', 'user name hafiz');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coursesinfo`
--
ALTER TABLE `coursesinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departmentsinfo`
--
ALTER TABLE `departmentsinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studenteducationinfo`
--
ALTER TABLE `studenteducationinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentparentsinfo`
--
ALTER TABLE `studentparentsinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentprofileinfo`
--
ALTER TABLE `studentprofileinfo`
  ADD PRIMARY KEY (`id`,`emailaddress`);

--
-- Indexes for table `userauthenticationinfo`
--
ALTER TABLE `userauthenticationinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coursesinfo`
--
ALTER TABLE `coursesinfo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `departmentsinfo`
--
ALTER TABLE `departmentsinfo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `studenteducationinfo`
--
ALTER TABLE `studenteducationinfo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `studentparentsinfo`
--
ALTER TABLE `studentparentsinfo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `studentprofileinfo`
--
ALTER TABLE `studentprofileinfo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userauthenticationinfo`
--
ALTER TABLE `userauthenticationinfo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `studenteducationinfo`
--
ALTER TABLE `studenteducationinfo`
  ADD CONSTRAINT `FK_studenteducationinfo_studentprofileid` FOREIGN KEY (`id`) REFERENCES `studentprofileinfo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `studentparentsinfo`
--
ALTER TABLE `studentparentsinfo`
  ADD CONSTRAINT `FK_studentparentsinfo_studentid` FOREIGN KEY (`id`) REFERENCES `studentprofileinfo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
