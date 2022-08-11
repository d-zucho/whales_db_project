-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2017 at 08:31 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `whales_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `whales`
--

CREATE TABLE `whales` (
  `whale_id` int(11) NOT NULL,
  `whale_name` char(30) NOT NULL,
  `type` char(10) NOT NULL,
  `length` int(11) NOT NULL,
  `status` char(15) NOT NULL,
  `location_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `whales`
--

INSERT INTO `whales` (`whale_id`, `whale_name`, `type`, `length`, `status`, `location_id`) VALUES
(1, 'Blue Whale', 'Baleen', 105, 'Endangered', 3),
(2, 'Right Whale', 'Baleen', 49, 'Endangered', 1),
(3, 'Bowhead Whale', 'Baleen', 59, 'Least Concern', 1),
(4, 'Sei Whale', 'Baleen', 64, 'Endangered', 3),
(5, 'Gray Whale', 'Baleen', 49, 'Least Concern', 2),
(6, 'Beluga Whale', 'Toothed', 18, 'Near Threatened', 1),
(7, 'Sperm Whale', 'Toothed', 40, 'Vulnerable', 4),
(8, 'Fin Whale', 'Baleen', 85, 'Endangered', 3),
(9, 'Humpback Whale', 'Baleen', 50, 'Least Concern', 4),
(10, 'Orca (Killer Whale)', 'Toothed', 26, 'Data Deficient', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `whales`
--
ALTER TABLE `whales`
  ADD PRIMARY KEY (`whale_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `whales`
--
ALTER TABLE `whales`
  MODIFY `whale_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
