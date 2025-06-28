-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2023 at 06:45 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mastermind`
--

-- --------------------------------------------------------

--
-- Table structure for table `level1`
--

CREATE TABLE `level1` (
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `level1`
--

INSERT INTO `level1` (`user_name`, `password`) VALUES
('level_1', 'qwErty*434');

-- --------------------------------------------------------

--
-- Table structure for table `level2`
--

CREATE TABLE `level2` (
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `level2`
--

INSERT INTO `level2` (`user_name`, `password`) VALUES
('level_2', 'qaZplm(673');

-- --------------------------------------------------------

--
-- Table structure for table `level3`
--

CREATE TABLE `level3` (
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `level3`
--

INSERT INTO `level3` (`user_name`, `password`) VALUES
('level_3', 'bcRash*738');

-- --------------------------------------------------------

--
-- Table structure for table `level4`
--

CREATE TABLE `level4` (
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `level4`
--

INSERT INTO `level4` (`user_name`, `password`) VALUES
('level_4', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `level5`
--

CREATE TABLE `level5` (
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `level5`
--

INSERT INTO `level5` (`user_name`, `password`) VALUES
('level_5', 'okIhgc%910');

-- --------------------------------------------------------

--
-- Table structure for table `level6`
--

CREATE TABLE `level6` (
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `level6`
--

INSERT INTO `level6` (`user_name`, `password`) VALUES
('level_6', 'roesh');

-- --------------------------------------------------------

--
-- Table structure for table `level7`
--

CREATE TABLE `level7` (
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `level7`
--

INSERT INTO `level7` (`user_name`, `password`) VALUES
('level_7', 'mnBvgf@103');

-- --------------------------------------------------------

--
-- Table structure for table `level8`
--

CREATE TABLE `level8` (
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `level8`
--

INSERT INTO `level8` (`user_name`, `password`) VALUES
('level_8', 'kiQfgd!342');

-- --------------------------------------------------------

--
-- Table structure for table `level9`
--

CREATE TABLE `level9` (
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `level9`
--

INSERT INTO `level9` (`user_name`, `password`) VALUES
('level_9', 'bcZxvs*182');

-- --------------------------------------------------------

--
-- Table structure for table `level10`
--

CREATE TABLE `level10` (
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `level10`
--

INSERT INTO `level10` (`user_name`, `password`) VALUES
('level_10', 'zxSqpl$912');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(100) NOT NULL,
  `emails` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `emails`) VALUES
(1, 'Ravindu@gmail.com'),
(2, 'Denuwan@gmail.com'),
(3, 'Sasindu@gmail.com'),
(4, 'Tharushi@gmail.com'),
(5, 'Nilash@gmail.com'),
(6, 'Test@gmail.com'),
(7, 'test2@gmail.com'),
(8, 'Test3@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `sqlinjection`
--

CREATE TABLE `sqlinjection` (
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sqlinjection`
--

INSERT INTO `sqlinjection` (`firstname`, `lastname`) VALUES
('Nadeesha', 'Sewminda'),
('Nethmi', 'Hansika'),
('QZoIAsDWfE', 'SQL Injection is succeeded! Level 9 flag is bcZxvs*182'),
('Ravindu', 'Denuwan'),
('Sandaru', 'Kavishka'),
('Tharushi', 'Sathsarani');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `level1`
--
ALTER TABLE `level1`
  ADD PRIMARY KEY (`user_name`);

--
-- Indexes for table `level2`
--
ALTER TABLE `level2`
  ADD PRIMARY KEY (`user_name`);

--
-- Indexes for table `level3`
--
ALTER TABLE `level3`
  ADD PRIMARY KEY (`user_name`);

--
-- Indexes for table `level4`
--
ALTER TABLE `level4`
  ADD PRIMARY KEY (`user_name`);

--
-- Indexes for table `level5`
--
ALTER TABLE `level5`
  ADD PRIMARY KEY (`user_name`);

--
-- Indexes for table `level6`
--
ALTER TABLE `level6`
  ADD PRIMARY KEY (`user_name`);

--
-- Indexes for table `level7`
--
ALTER TABLE `level7`
  ADD PRIMARY KEY (`user_name`);

--
-- Indexes for table `level8`
--
ALTER TABLE `level8`
  ADD PRIMARY KEY (`user_name`);

--
-- Indexes for table `level9`
--
ALTER TABLE `level9`
  ADD PRIMARY KEY (`user_name`);

--
-- Indexes for table `level10`
--
ALTER TABLE `level10`
  ADD PRIMARY KEY (`user_name`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sqlinjection`
--
ALTER TABLE `sqlinjection`
  ADD PRIMARY KEY (`firstname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
