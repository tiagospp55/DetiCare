-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 18, 2022 at 06:38 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `peebd2`
--

-- --------------------------------------------------------

--
-- Table structure for table `medicos`
--

CREATE TABLE `medicos` (
  `id` int(11) NOT NULL,
  `nome` text NOT NULL,
  `localTrabalho` text NOT NULL,
  `email` text NOT NULL,
  `pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicos`
--

INSERT INTO `medicos` (`id`, `nome`, `localTrabalho`, `email`, `pass`) VALUES
(2, 'JONQUIM ORTO', 'ORTO', '', ''),
(3, 'JONQUIM ORTO2', 'ORTO2', '', ''),
(4, 'JONQUIM ORTO3', 'ORTO3', '', ''),
(5, 'JONQUIM ORTO4', 'ORTO4', '', ''),
(6, 'JONQUIM ORTO5', 'ORTO5', '', ''),
(8, 'qwer', 'desconhecido', 'qwer@qwer.com', '$2y$10$qdct57OItMTqkPxyy.TTq.zRDczoh20MOJekIpTm0NmhNSY.XOwjm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `medicos`
--
ALTER TABLE `medicos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `medicos`
--
ALTER TABLE `medicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
