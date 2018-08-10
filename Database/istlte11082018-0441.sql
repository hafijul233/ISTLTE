-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2018 at 12:40 AM
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
CREATE DATABASE IF NOT EXISTS `istlte` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `istlte`;

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
-- Indexes for table `userauthenticationinfo`
--
ALTER TABLE `userauthenticationinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userauthenticationinfo`
--
ALTER TABLE `userauthenticationinfo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
