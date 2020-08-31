-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 31, 2020 at 12:14 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `passcode` varchar(200) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `passcode`, `active`) VALUES
(1, 'ponmile', 'adefuwa', 1);

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `address` varchar(500) NOT NULL,
  `state` varchar(50) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `nok` varchar(200) NOT NULL,
  `noka` varchar(300) NOT NULL,
  `nokp` varchar(110) NOT NULL,
  `email` varchar(100) NOT NULL,
  `accttype` varchar(100) NOT NULL,
  `alerttype` varchar(100) NOT NULL,
  `deposit` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `fullname`, `firstname`, `middlename`, `lastname`, `dob`, `address`, `state`, `nationality`, `nok`, `noka`, `nokp`, `email`, `accttype`, `alerttype`, `deposit`) VALUES
(1, 'Adefuwa Ponmile Hussein', 'Oluwaponmile', 'Hussein', 'Adefuwa', '10/17/1995', 'No 8, Hon ballo street', 'Ogun State', 'Nigerian', 'Olaitan', 'Surulere', '9091', 'supersondultimate@gmail.com', 'Savings', 'Email', 1000),
(2, 'Adefuwa Ponmile Hussein', 'Oluwaponmile', 'Hussein', 'Adefuwa', '10/17/1995', 'No 8, Hon ballo street', 'Ogun State', 'Nigerian', 'Olaitan', 'Surulere', '9091', 'supersondultimate@gmail.com', 'Savings', 'Email', 1000),
(3, 'Adefuwa Ponmile Hussein', 'Oluwaponmile', 'Hussein', 'Adefuwa', '10/17/1995', 'No 8, Hon ballo street', 'Ogun State', 'Nigerian', 'Olaitan', 'Surulere', '9091', 'supersondultimate@gmail.com', 'Savings', 'Email', 1000),
(4, 'Adefuwa Ponmile Hussein', 'Oluwaponmile', 'Hussein', 'Adefuwa', '10/17/1995', 'No 8, Hon ballo street', 'Ogun State', 'Nigerian', 'Olaitan', 'Surulere', '9091', 'supersondultimate@gmail.com', 'Savings', 'Email', 1000),
(5, 'Adefuwa Ponmile Hussein', 'Oluwaponmile', 'Hussein', 'Adefuwa', '10/17/1995', 'No 8, Hon ballo street', 'Ogun State', 'Nigerian', 'Olaitan', 'Surulere', '9091', 'supersondultimate@gmail.com', 'Savings', 'Email', 1000),
(6, 'Adefuwa Ponmile Hussein', 'Oluwaponmile', 'Hussein', 'Adefuwa', '10/17/1995', 'No 8, Hon ballo street', 'Ogun State', 'Nigerian', 'Olaitan', 'Surulere', '9091', 'supersondultimate@gmail.com', 'Savings', 'Email', 1000),
(7, 'Adefuwa Ponmile Hussein', 'Oluwaponmile', 'Hussein', 'Adefuwa', '10/17/1995', 'No 8, Hon ballo street', 'Ogun State', 'Nigerian', 'Olaitan', 'Surulere', '9091', 'supersondultimate@gmail.com', 'Savings', 'Email', 1000),
(8, 'Adefuwa Ponmile', 'Oluwaponmile', 'Hussein', 'Adefuwa', '2020-08-30', 'No 8, Hon ballo Street', 'Ogun', 'Nigerian', 'Olaitan', 'Lagos, Nigeria', '08030438175', 'supersondultimate@gmail.com', 'Savings', 'PhoneNumber', 34090),
(9, 'Adefuwa Ponmile', 'Oluwaponmile', 'Hussein', 'Adefuwa', '2020-08-30', 'No 8, Hon ballo Street', 'Ogun', 'Nigerian', 'Olaitan', 'Lagos, Nigeria', '08030438175', 'supersondultimate@gmail.com', 'Savings', 'PhoneNumber', 34090),
(10, 'Adefuwa Ponmile', 'q', 'q', 'q', '2021-09-16', 'eff', 'efg', 'geg', 'vd', 'fgvfb', 'fbf', 'supersondultimate@gmail.com', 'Savings', 'PhoneNumber', 6543);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
