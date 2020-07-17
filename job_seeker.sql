-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2020 at 01:59 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job_seeker`
--

-- --------------------------------------------------------

--
-- Table structure for table `c.v`
--

CREATE TABLE `c.v` (
  `cv_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `co_id` int(10) NOT NULL,
  `co_name` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `co_mail` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `co_phone` int(15) NOT NULL,
  `co_address` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `co_password` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `co_c_password` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`co_id`, `co_name`, `co_mail`, `co_phone`, `co_address`, `co_password`, `co_c_password`) VALUES
(0, 'apple', 'apple@gmail.com', 102973541, 'dokki', 'asd', 'asdf');

-- --------------------------------------------------------

--
-- Table structure for table `interview`
--

CREATE TABLE `interview` (
  `int_id` int(10) NOT NULL,
  `int_date` date NOT NULL,
  `int_place` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `job_id` int(10) NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `co_id` int(10) NOT NULL,
  `job_address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_exprince` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_email` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_qualifications` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`job_id`, `title`, `description`, `location`, `salary`, `co_id`, `job_address`, `job_exprince`, `job_email`, `job_qualifications`) VALUES
(1, 'MANGER', 'NETWORK ADMINSTRATOR', 'dokki', '8000', 1, '8 dokki street', '5 years', 'network@gmail.com', 'ccna ,mcsa , msce ,ccnp');

-- --------------------------------------------------------

--
-- Table structure for table `job_seeker`
--

CREATE TABLE `job_seeker` (
  `id` int(11) NOT NULL,
  `f_name` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l_name` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `confirm_password` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_seeker`
--

INSERT INTO `job_seeker` (`id`, `f_name`, `l_name`, `username`, `password`, `confirm_password`, `phone`, `email`, `address`, `city`) VALUES
(3, 'Michael Joseph', 'joseph', 'mmika', 'asdf', 'asdf', '01017056361', 'nfesaaa@gmail.com', 'Ein Shams', 'Cairo'),
(9, 'Amr Hamed', '', '', '', '', '01121902991', 'hamed@gmail.com', 'sharbia , cairo', ''),
(10, 'Khaled zaki', '', '', '', '', '01154686911', 'khaled@yahoo.com', 'dokki ', ''),
(11, 'Adham', '', '', '', '', '01125170427', 'Adham@yahoo.com', 'Manil', ''),
(12, 'Ahmed Osama', '', '', '', '', '0110664250', 'ahmed_osama@hotmail.com', 'ghamra', ''),
(13, 'Omar Adel', '', '', '', '', '0101136798', 'Omar_adel@gmail.com', 'shobra', ''),
(14, 'Hesham Hussam', '', '', '', '', '01013686664', 'hesham202@yahoo.com', 'nasr city', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(10) NOT NULL,
  `u_name` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `u_phone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `u_addrress` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `c.v`
--
ALTER TABLE `c.v`
  ADD PRIMARY KEY (`cv_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`co_id`);

--
-- Indexes for table `interview`
--
ALTER TABLE `interview`
  ADD PRIMARY KEY (`int_id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `job_seeker`
--
ALTER TABLE `job_seeker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `interview`
--
ALTER TABLE `interview`
  MODIFY `int_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `job_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- AUTO_INCREMENT for table `job_seeker`
--
ALTER TABLE `job_seeker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
