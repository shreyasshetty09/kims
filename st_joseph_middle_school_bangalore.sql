-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2021 at 01:26 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `st_joseph_middle_school_bangalore`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_website_announcement`
--

CREATE TABLE `tbl_website_announcement` (
  `row_id` int(55) NOT NULL,
  `date` date NOT NULL,
  `message` varchar(5000) NOT NULL,
  `link` varchar(1000) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_by` varchar(128) NOT NULL,
  `created_date_time` datetime NOT NULL,
  `updated_by` varchar(128) NOT NULL,
  `updated_date_time` datetime NOT NULL,
  `is_deleted` int(55) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_website_news`
--

CREATE TABLE `tbl_website_news` (
  `row_id` int(55) NOT NULL,
  `date` date DEFAULT NULL,
  `subject` varchar(3000) NOT NULL,
  `description` text NOT NULL,
  `image_path` varchar(5000) NOT NULL,
  `image_sub1` varchar(5000) NOT NULL,
  `image_sub2` varchar(5000) NOT NULL,
  `image_sub3` varchar(5000) NOT NULL,
  `image_sub4` varchar(5000) NOT NULL,
  `location` varchar(300) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_by` varchar(55) NOT NULL,
  `created_date_time` datetime NOT NULL,
  `updated_by` varchar(55) NOT NULL,
  `updated_date_time` datetime NOT NULL,
  `is_deleted` int(55) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_website_news`
--

INSERT INTO `tbl_website_news` (`row_id`, `date`, `subject`, `description`, `image_path`, `image_sub1`, `image_sub2`, `image_sub3`, `image_sub4`, `location`, `status`, `created_by`, `created_date_time`, `updated_by`, `updated_date_time`, `is_deleted`) VALUES
(1, '2020-08-15', 'Independence Day Celebration -2021', 'Independence Day 2021, was held at St. Vincent Pallotti College, Bangalore in the presence of Dr. M. Prakash, who inspired the students to work towards excellence. The occasion was graced by the Rector of Assumption House - Fr. Alex Crasta, the Director - Fr. Gilbert Mascarenhas, Principal - Dr. E Jerome Xavier, Vice-Principals, Head of the Departments, Teaching and Non-Teaching Staff, and Students.', 'vincent_site/news/1.jpg', 'vincent_site/news/2.jpg', 'vincent_site/news/3.jpg', 'vincent_site/news/4.jpg', 'vincent_site/news/5.jpg', 'ST. VINCENT PALLOTTI DEGREE COLLEGE', 0, '123456', '2021-09-13 17:04:45', '123456', '2021-09-13 17:49:40', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_website_announcement`
--
ALTER TABLE `tbl_website_announcement`
  ADD PRIMARY KEY (`row_id`);

--
-- Indexes for table `tbl_website_news`
--
ALTER TABLE `tbl_website_news`
  ADD PRIMARY KEY (`row_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_website_news`
--
ALTER TABLE `tbl_website_news`
  MODIFY `row_id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
