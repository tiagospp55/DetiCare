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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `nome` text NOT NULL,
  `password` text NOT NULL,
  `ConfCodeEmail` text NOT NULL,
  `emailConf` text NOT NULL,
  `Disponivel` text NOT NULL,
  `idMedico` int(11) NOT NULL,
  `peso` text NOT NULL,
  `idade` text NOT NULL,
  `altura` text NOT NULL,
  `DataNascimento` date NOT NULL,
  `Telemovel` text NOT NULL,
  `Localidade` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `nome`, `password`, `ConfCodeEmail`, `emailConf`, `Disponivel`, `idMedico`, `peso`, `idade`, `altura`, `DataNascimento`, `Telemovel`, `Localidade`) VALUES
(4, 'cona@gmail.com', 'coninha da tua velha', '$2y$10$fRVzO6XRJBZ37rZepTjuqecVNV3S6E1IgwpGhbcL8PtsvbC5V6GzK', 'WYFC5', 'N', 'SIM', 1, '', '', '', '0000-00-00', '', ''),
(5, 'a@a.com', 'a123', '$2y$10$0cstlEoBkqOV5oyEMtjVgOD6d60DpqoB41y1LrDRDYBTDcBYw.e5m', 'CY2FW', 'N', 'SIM', 8, '', '', '', '0000-00-00', '', ''),
(6, 'qwer@conas.com', 'coninha', '$2y$10$FH/2aKaeXf4QLofThfLdFut7YItnhAxnbappWOZl2FSjyz2mRD0G6', 'RZK6I', 'N', 'SIM', 8, '', '', '', '0000-00-00', '', ''),
(7, 'asdasd@cona.com', 'asdasd', '$2y$10$VakQCTgWlDh36SaYi2QrT.ZeFOzNbk5TDm6SL1Reql9AnFuJoJFa2', 'VTL5A', 'N', 'SIM', 4, '', '', '', '0000-00-00', '', ''),
(16, '123@123.com', '123', '$2y$10$4WH90Xs9zp8dT8ve0SATqe9al/mZSduSl8pL1t70WOYp0yyySxpFO', 'AGZBX', 'N', 'SIM', 8, '', '', '', '0000-00-00', '', ''),
(17, 'qwer@qwer.com', 'qwer', '$2y$10$G838GawWCrcjA5MX.Czx6e7X5OoDLolmWUOsEiPK1bwEQhFM/zsj6', '9N25C', 'N', 'SIM', 8, '12', '12334', '1234', '2012-12-12', '98282828', '1324'),
(18, '12341234@1234.com', '12341234', '$2y$10$ZyGdwDF2BBQkJrXOAnRrUujB2Hm.jxnloiClKU/3brHLPYtR2epU2', 'QFT49', 'N', 'SIM', -1, '', '', '', '0000-00-00', '98282828', ''),
(20, 'qwerq@qwer.com', 'qwer', '$2y$10$adl6OC4vuJVXeA36D/gZSOVFBg0/qvB7LGlZr11W066NfW0nWqin.', 'TRHCI', 'N', 'SIM', 4, '', '2009', '', '0012-12-12', '', ''),
(21, 'qwerqwer@qwer.com', 'qwerqwer', '$2y$10$K/rvA4/YMojXD9YuWp0lfe0GOz6Vr6jTwhfjbe6Bdat92DFjSYTIO', 'C4ETX', 'N', 'SIM', 8, '', '2009', '', '0012-12-12', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
