-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2021 at 04:10 PM
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
  `room` int(1) DEFAULT NULL,
  `library` int(1) NOT NULL,
  `gH` int(1) NOT NULL,
  `e3` int(1) NOT NULL,
  `e2` int(1) NOT NULL,
  `bH` int(1) NOT NULL,
  `w3` int(1) NOT NULL,
  `w2` int(1) NOT NULL,
  `da_office` int(1) DEFAULT NULL,
  `chorus_room` int(1) NOT NULL,
  `musicp_rooms` int(1) NOT NULL,
  `art_room` int(1) NOT NULL,
  `clay_room` int(1) NOT NULL,
  `band_room` int(1) NOT NULL,
  `strings_room` int(1) NOT NULL,
  `theater` int(1) NOT NULL,
  `off_campus` int(1) DEFAULT NULL,
  `ECR` int(1) NOT NULL,
  `WCR` int(1) NOT NULL,
  `MH109` int(1) NOT NULL,
  `MH110` int(1) NOT NULL,
  `MH111` int(1) NOT NULL,
  `south_room` int(1) NOT NULL,
  `MH123` int(1) NOT NULL,
  `MH124` int(1) NOT NULL,
  `MH125` int(1) NOT NULL,
  `MH126` int(1) NOT NULL,
  `MH127` int(1) NOT NULL,
  `MH128` int(1) NOT NULL,
  `MH132` int(1) NOT NULL,
  `DSL` int(1) NOT NULL,
  `sci_ctr` int(1) NOT NULL,
  `practice` int(1) DEFAULT NULL,
  `game` int(1) DEFAULT NULL,
  `class` int(1) NOT NULL,
  `health_center` int(1) NOT NULL,
  `other` int(1) DEFAULT NULL,
  `locations_index` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`room`, `library`, `gH`, `e3`, `e2`, `bH`, `w3`, `w2`, `da_office`, `chorus_room`, `musicp_rooms`, `art_room`, `clay_room`, `band_room`, `strings_room`, `theater`, `off_campus`, `ECR`, `WCR`, `MH109`, `MH110`, `MH111`, `south_room`, `MH123`, `MH124`, `MH125`, `MH126`, `MH127`, `MH128`, `MH132`, `DSL`, `sci_ctr`, `practice`, `game`, `class`, `health_center`, `other`, `locations_index`) VALUES
(0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 3, 0, 1, 1, 0, 1, 1, 1, 2, 3, 1, 2, 3, 1, 1, 1, 1, 1, 1, 0, 0, 1, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `roster`
--

CREATE TABLE `roster` (
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `grade` int(4) NOT NULL,
  `student_type` int(1) NOT NULL,
  `Dorm_ID` int(4) NOT NULL,
  `cocurricular` int(6) NOT NULL,
  `index_roster` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roster`
--

INSERT INTO `roster` (`first_name`, `last_name`, `grade`, `student_type`, `Dorm_ID`, `cocurricular`, `index_roster`) VALUES
('Christina', 'Wilson', 2022, 1, 3229, 542801, 1),
('Larry', 'Dech', 9999, 3, 7000, 0, 2),
('Nate', 'Venditta', 9999, 4, 7000, 0, 3),
('Cindy', 'Zhang', 2022, 2, 3243, 0, 4),
('Noah', 'Fisher', 2023, 0, 0, 22750, 5),
('Kapom', 'Vettayawaikoon', 2023, 1, 3208, 130001, 6),
('Jimmy', 'Qin', 2023, 5, 2210, 0, 7);

-- --------------------------------------------------------

--
-- Table structure for table `sh_data`
--

CREATE TABLE `sh_data` (
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `room` int(4) NOT NULL,
  `location` int(2) NOT NULL,
  `period` varchar(3) NOT NULL,
  `wday` varchar(20) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `sh_index` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sh_data`
--

INSERT INTO `sh_data` (`firstname`, `lastname`, `room`, `location`, `period`, `wday`, `time`, `sh_index`) VALUES
('Christina', 'Wilson', 3229, 0, '1st', 'Monday', '2021-11-05 13:52:09', 1),
('Christina', 'Wilson', 3229, 12, '2nd', 'Monday', '2021-11-05 13:52:07', 2),
('Cindy', 'Zhang', 3243, 7, '1st', 'Monday', '2021-11-05 13:52:03', 3),
('Cindy', 'Zhang', 3243, 7, '2nd', 'Monday', '2021-11-05 13:50:55', 4),
('Kapom', 'Vettayawaikoon', 3208, 1, '1st', 'Monday', '2021-11-05 13:51:48', 5),
('Kapom', 'Vettayawaikoon', 3208, 17, '2nd', 'Monday', '2021-11-05 13:51:53', 6),
('testfirstname', 'testlastname', 1234, 5, '1st', 'Tuesday', '2021-11-09 15:29:44', 11),
('testfirstname', 'testlastname', 1234, 1, '2st', 'Tuesday', '2021-11-09 15:29:44', 12),
('testfirstname', 'testlastname', 1234, 0, '1st', 'Tuesday', '2021-11-09 15:44:36', 13),
('testfirstname', 'testlastname', 1234, 0, '2st', 'Tuesday', '2021-11-09 15:44:36', 14),
('testfirstname', 'testlastname', 1234, 0, '1st', 'Tuesday', '2021-11-10 01:08:10', 15),
('testfirstname', 'testlastname', 1234, 0, '2st', 'Tuesday', '2021-11-10 01:08:10', 16),
('', '', 0, 0, '1st', 'Wednesday', '2021-11-10 20:55:13', 17),
('', '', 0, 1, '2st', 'Wednesday', '2021-11-10 20:55:13', 18),
('Christina', 'Qin', 0, 0, '1st', 'Wednesday', '2021-11-10 20:56:20', 19),
('Christina', 'Qin', 0, 1, '2st', 'Wednesday', '2021-11-10 20:56:20', 20),
('Christina', 'Qin', 0, 0, '1st', 'Wednesday', '2021-11-10 20:58:50', 21),
('Christina', 'Qin', 0, 1, '2st', 'Wednesday', '2021-11-10 20:58:50', 22),
('Christina', 'Wilson', 0, 0, '1st', 'Wednesday', '2021-11-10 21:53:45', 23),
('Christina', 'Wilson', 0, 1, '2st', 'Wednesday', '2021-11-10 21:53:45', 24),
('Christina', 'Wilson', 0, 0, '1st', 'Wednesday', '2021-11-10 21:58:54', 25),
('Christina', 'Wilson', 0, 1, '2st', 'Wednesday', '2021-11-10 21:58:54', 26),
('Christina', 'Wilson', 0, 1, '1st', 'Wednesday', '2021-11-10 22:14:52', 27),
('Christina', 'Wilson', 0, 14, '2st', 'Wednesday', '2021-11-10 22:14:52', 28),
('Christina', 'Wilson', 3229, 0, '1st', 'Thursday', '2021-11-11 14:17:55', 29),
('Christina', 'Wilson', 3229, 1, '2st', 'Thursday', '2021-11-11 14:17:55', 30),
('Christina', 'Wilson', 3229, 0, '1st', 'Thursday', '2021-11-11 14:24:32', 31),
('Christina', 'Wilson', 3229, 0, '2st', 'Thursday', '2021-11-11 14:24:32', 32),
('Christina', 'Wilson', 3229, 0, '1st', 'Thursday', '2021-11-11 14:33:38', 33),
('Christina', 'Wilson', 3229, 35, '2st', 'Thursday', '2021-11-11 14:33:38', 34),
('Christina', 'Wilson', 3229, 0, '1st', 'Thursday', '2021-11-11 14:34:32', 35),
('Christina', 'Wilson', 3229, 1, '2st', 'Thursday', '2021-11-11 14:34:32', 36),
('Christina', 'Wilson', 3229, 0, '1st', 'Thursday', '2021-11-11 14:35:22', 37),
('Christina', 'Wilson', 3229, 1, '2st', 'Thursday', '2021-11-11 14:35:22', 38);

-- --------------------------------------------------------

--
-- Table structure for table `sign_in`
--

CREATE TABLE `sign_in` (
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `passwords` varchar(50) NOT NULL,
  `credential` int(32) NOT NULL,
  `signin_index` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sign_in`
--

INSERT INTO `sign_in` (`first_name`, `last_name`, `email`, `passwords`, `credential`, `signin_index`) VALUES
('Christina', 'Wilson', 'christina.wilson@westtown.edu', '1234', 128049360, 1),
('Jimmy', 'Qin', 'jimmy.qin@westtown.edu', '123456', 222722681, 2),
('Nate', 'Venditta', 'nate.venditta@westtown.edu', '4321', 409809263, 5);

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE `sports` (
  `none` int(2) NOT NULL,
  `indepen` int(2) NOT NULL,
  `bVXC` int(2) NOT NULL,
  `gVXC` int(2) NOT NULL,
  `bJVXC` int(2) NOT NULL,
  `gJVXC` int(2) NOT NULL,
  `gVFieldH` int(2) NOT NULL,
  `gJVFieldH` int(2) NOT NULL,
  `bVSoccer` int(2) NOT NULL,
  `gVSoccer` int(2) NOT NULL,
  `bJVSoccer` int(2) NOT NULL,
  `gJVSoccer` int(2) NOT NULL,
  `bJVCSoccer` int(2) NOT NULL,
  `gVTennis` int(2) NOT NULL,
  `gJVTennis` int(2) NOT NULL,
  `gJVCTennis` int(2) NOT NULL,
  `bVBBall` int(2) NOT NULL,
  `gVBBall` int(2) NOT NULL,
  `bJVBBall` int(2) NOT NULL,
  `gJVBBall` int(2) NOT NULL,
  `bJVCBBall` int(2) NOT NULL,
  `gJVCBBall` int(2) NOT NULL,
  `gVInTrack` int(2) NOT NULL,
  `bVInTrack` int(2) NOT NULL,
  `gJVInTrack` int(2) NOT NULL,
  `bJVInTrack` int(2) NOT NULL,
  `robotics` int(2) NOT NULL,
  `gVSwim` int(2) NOT NULL,
  `bVSwim` int(2) NOT NULL,
  `gJVSwim` int(2) NOT NULL,
  `bJVSwim` int(2) NOT NULL,
  `bVWrestling` int(2) NOT NULL,
  `bJVWrestling` int(2) NOT NULL,
  `bJBaseB` int(2) NOT NULL,
  `bJVBaseB` int(2) NOT NULL,
  `gVSolfB` int(2) NOT NULL,
  `bVLax` int(2) NOT NULL,
  `gVLax` int(2) NOT NULL,
  `bJVLax` int(2) NOT NULL,
  `gJVLax` int(2) NOT NULL,
  `bJVCLax` int(2) NOT NULL,
  `gJVCLax` int(2) NOT NULL,
  `golf` int(2) NOT NULL,
  `bVTennis` int(2) NOT NULL,
  `bJVTennis` int(2) NOT NULL,
  `bJVCTennis` int(2) NOT NULL,
  `bVTrack` int(2) NOT NULL,
  `gVTrack` int(2) NOT NULL,
  `bJVTrack` int(2) NOT NULL,
  `gJVTrack` int(2) NOT NULL,
  `dance` int(2) NOT NULL,
  `sad` int(2) NOT NULL,
  `theater` int(2) NOT NULL,
  `outdoorL` int(2) NOT NULL,
  `service` int(2) NOT NULL,
  `other` int(2) NOT NULL,
  `sports_index` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`locations_index`);

--
-- Indexes for table `roster`
--
ALTER TABLE `roster`
  ADD PRIMARY KEY (`index_roster`);

--
-- Indexes for table `sh_data`
--
ALTER TABLE `sh_data`
  ADD PRIMARY KEY (`sh_index`);

--
-- Indexes for table `sign_in`
--
ALTER TABLE `sign_in`
  ADD PRIMARY KEY (`signin_index`);

--
-- Indexes for table `sports`
--
ALTER TABLE `sports`
  ADD PRIMARY KEY (`sports_index`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `locations_index` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roster`
--
ALTER TABLE `roster`
  MODIFY `index_roster` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `sh_data`
--
ALTER TABLE `sh_data`
  MODIFY `sh_index` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `sign_in`
--
ALTER TABLE `sign_in`
  MODIFY `signin_index` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sports`
--
ALTER TABLE `sports`
  MODIFY `sports_index` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
