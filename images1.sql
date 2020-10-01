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
-- Table structure for table `images1`
--

CREATE TABLE `images1` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `uploaded_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `location` varchar(255) NOT NULL,
  `company_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images1`
--

INSERT INTO `images1` (`id`, `file_name`, `uploaded_on`, `location`, `company_id`) VALUES
(1, 'cissp.jpg', '2019-10-15 17:43:01', 'img/cissp.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images1`
--
ALTER TABLE `images1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images1`
--
ALTER TABLE `images1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
