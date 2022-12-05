-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2022 at 10:33 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bpptis`
--

-- --------------------------------------------------------

--
-- Table structure for table `residents`
--

CREATE TABLE `residents` (
  `id` int(6) UNSIGNED NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `birthdate` varchar(50) NOT NULL,
  `contactnumber` varchar(11) NOT NULL,
  `religion` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `household` varchar(2) NOT NULL,
  `address` varchar(50) DEFAULT NULL,
  `age` int(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `residents`
--

INSERT INTO `residents` (`id`, `lastname`, `firstname`, `middlename`, `birthdate`, `contactnumber`, `religion`, `city`, `household`, `address`, `age`, `gender`, `status`, `nationality`, `reg_date`) VALUES
(1344, 'Rivera', 'Chrisvie John', 'B.', '12-22-1998', '09486687581', 'born again', 'Polomolok', '', 'Prk. Luwalhati', 23, 'male', 'Single', 'Pilipino', '2022-06-11 07:36:43'),
(1345, 'tediong', 'john', 'N.', '12-22-1998', '12345678912', 'catholic', 'Polomolok', '', 'Prk. Luwalhati', 20, 'male', 'Single', 'Pilipino', '2022-06-12 06:39:14'),
(1346, 'tediong', 'ziljan', 'M.', '12-22-1998', '12345678912', 'born again', 'Polomolok', '', 'Prk. Maligaya 1', 20, 'male', 'Married', 'Pilipino', '2022-06-12 09:14:50'),
(1347, 'sipi', 'arnel', 'B.', '10-11-1985', '09486687581', 'catholic', 'Polomolok', '', 'Prk. Maligaya 2', 21, 'male', 'Single', 'Pilipino', '2022-06-13 06:32:06');

-- --------------------------------------------------------

--
-- Table structure for table `staffdailylogin`
--

CREATE TABLE `staffdailylogin` (
  `id` int(10) NOT NULL,
  `logdate` date NOT NULL DEFAULT current_timestamp(),
  `usertype` varchar(50) NOT NULL,
  `logintime` time NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staffdailylogin`
--

INSERT INTO `staffdailylogin` (`id`, `logdate`, `usertype`, `logintime`) VALUES
(1, '2022-06-11', 'admin', '13:05:15'),
(2, '2022-06-11', 'admin', '13:09:47'),
(3, '2022-06-11', 'admin', '17:11:33'),
(4, '2022-06-12', 'staff', '06:50:56'),
(5, '2022-06-12', 'staff', '17:31:43'),
(6, '2022-06-13', 'staff', '12:02:23'),
(7, '2022-06-13', 'admin', '14:24:28'),
(8, '2022-06-13', 'staff', '14:38:23');

-- --------------------------------------------------------

--
-- Table structure for table `staffmanagement`
--

CREATE TABLE `staffmanagement` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `age` int(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `date_registered` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staffmanagement`
--

INSERT INTO `staffmanagement` (`id`, `name`, `position`, `password`, `age`, `address`, `date_registered`, `num`) VALUES
(19, 'Rivera, Chrisvie John', 'staff', 'staff123', 23, 'prk maunlad, south cotabato, koronadal city', '2022-06-11 09:18:54', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(0, 'admin', 'admin123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `residents`
--
ALTER TABLE `residents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staffdailylogin`
--
ALTER TABLE `staffdailylogin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `logintime` (`logintime`);

--
-- Indexes for table `staffmanagement`
--
ALTER TABLE `staffmanagement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `residents`
--
ALTER TABLE `residents`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1348;

--
-- AUTO_INCREMENT for table `staffdailylogin`
--
ALTER TABLE `staffdailylogin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `staffmanagement`
--
ALTER TABLE `staffmanagement`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
