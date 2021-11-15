-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2021 at 08:58 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sh_signin`
--

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `da_office` int(2) DEFAULT NULL,
  `chorus_room` int(2) NOT NULL,
  `musicp_rooms` int(2) NOT NULL,
  `art_room` int(2) NOT NULL,
  `clay_room` int(2) NOT NULL,
  `band_room` int(2) NOT NULL,
  `strings_room` int(2) NOT NULL,
  `theater` int(2) NOT NULL,
  `off_campus` int(2) DEFAULT NULL,
  `ECR` int(2) NOT NULL,
  `WCR` int(2) NOT NULL,
  `MH109` int(2) NOT NULL,
  `MH110` int(2) NOT NULL,
  `MH111` int(2) NOT NULL,
  `south_room` int(2) NOT NULL,
  `MH123` int(2) NOT NULL,
  `MH124` int(2) NOT NULL,
  `MH125` int(2) NOT NULL,
  `MH126` int(2) NOT NULL,
  `MH127` int(2) NOT NULL,
  `MH128` int(2) NOT NULL,
  `MH132` int(2) NOT NULL,
  `DSL` int(2) NOT NULL,
  `sci_ctr` int(2) NOT NULL,
  `practice` int(2) DEFAULT NULL,
  `game` int(2) DEFAULT NULL,
  `class` int(2) NOT NULL,
  `health_center` int(2) NOT NULL,
  `other` int(2) DEFAULT NULL,
  `locations_index` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`da_office`, `chorus_room`, `musicp_rooms`, `art_room`, `clay_room`, `band_room`, `strings_room`, `theater`, `off_campus`, `ECR`, `WCR`, `MH109`, `MH110`, `MH111`, `south_room`, `MH123`, `MH124`, `MH125`, `MH126`, `MH127`, `MH128`, `MH132`, `DSL`, `sci_ctr`, `practice`, `game`, `class`, `health_center`, `other`, `locations_index`) VALUES
(0, 2, 0, 0, 3, 0, 1, 1, 0, 1, 1, 1, 2, 3, 1, 2, 3, 1, 1, 1, 1, 1, 1, 0, 0, 1, 0, 0, 0, 1),
(8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`locations_index`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `locations_index` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
