-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2020 at 06:11 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `accountdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `passwordAgain` varchar(155) NOT NULL,
  `email` varchar(155) NOT NULL,
  `gender` varchar(155) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`, `passwordAgain`, `email`, `gender`) VALUES
(1, 'Doe', 'PasswordTest', '', '', ''),
(2, 'Doe2', 'PasswordTest2', '', '', ''),
(8, 'Doe3', 'PasswordTest2', 'PasswordTest3', 'email@doe.com', 'male'),
(16, '123', '123', '123', '', ''),
(18, '444', '444', '444', '', ''),
(19, '444', '444', '444', '', ''),
(29, 'gvdsgds', 'gdsg', 'dsgdsg', '', ''),
(32, 'andrei', 'andrei', 'andrei', '', ''),
(85, '132', '132', '132', '', ''),
(88, 'gdsdgsd', 'gdgdgdgd', 'dgdgdgdg', '', ''),
(97, '999', '999', '999', '', ''),
(98, '111', '111', '111', '', ''),
(99, 'bast', 'bast', 'bast', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
