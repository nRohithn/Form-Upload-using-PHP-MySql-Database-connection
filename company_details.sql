-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2019 at 07:45 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobile_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `company_details`
--

CREATE TABLE `company_details` (
  `id` int(50) UNSIGNED NOT NULL,
  `serialId` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `uploaded_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `dropdown` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company_details`
--

INSERT INTO `company_details` (`id`, `serialId`, `firstname`, `lastname`, `company_name`, `pincode`, `uploaded_on`, `dropdown`, `email`, `PASSWORD`, `address`) VALUES
(1, '3', 'rohith', 'HD', 'albertsons technologies pvt ltd', '3444', '2019-10-15 17:43:00', 'male', 'nrohithn@gmail.com', '1888-11-11', 'kalasipalya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company_details`
--
ALTER TABLE `company_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company_details`
--
ALTER TABLE `company_details`
  MODIFY `id` int(50) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
