-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Mar-2022 às 16:03
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `peebd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `nome` text NOT NULL,
  `password` text NOT NULL,
  `ConfCodeEmail` text NOT NULL,
  `emailConf` text NOT NULL,
  `Disponivel` text NOT NULL,
  `idMedico` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `email`, `nome`, `password`, `ConfCodeEmail`, `emailConf`, `Disponivel`, `idMedico`) VALUES
(4, 'cona@gmail.com', 'coninha da tua velha', '$2y$10$fRVzO6XRJBZ37rZepTjuqecVNV3S6E1IgwpGhbcL8PtsvbC5V6GzK', 'WYFC5', 'N', 'SIM', 1),
(5, 'a@a.com', 'a123', '$2y$10$0cstlEoBkqOV5oyEMtjVgOD6d60DpqoB41y1LrDRDYBTDcBYw.e5m', 'CY2FW', 'N', 'SIM', 2),
(6, 'qwer@conas.com', 'coninha', '$2y$10$FH/2aKaeXf4QLofThfLdFut7YItnhAxnbappWOZl2FSjyz2mRD0G6', 'RZK6I', 'N', 'SIM', 3),
(7, 'asdasd@cona.com', 'asdasd', '$2y$10$VakQCTgWlDh36SaYi2QrT.ZeFOzNbk5TDm6SL1Reql9AnFuJoJFa2', 'VTL5A', 'N', 'SIM', 4),
(16, '123@123.com', '123', '$2y$10$4WH90Xs9zp8dT8ve0SATqe9al/mZSduSl8pL1t70WOYp0yyySxpFO', 'AGZBX', 'N', 'SIM', -1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
