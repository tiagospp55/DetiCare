-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 31-Mar-2022 às 19:06
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.1

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
  `idMedico` int(11) NOT NULL,
  `peso` text NOT NULL,
  `idade` text NOT NULL,
  `altura` text NOT NULL,
  `DataNascimento` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `email`, `nome`, `password`, `ConfCodeEmail`, `emailConf`, `Disponivel`, `idMedico`, `peso`, `idade`, `altura`, `DataNascimento`) VALUES
(5, 'a@a.com', 'a123', '$2y$10$0cstlEoBkqOV5oyEMtjVgOD6d60DpqoB41y1LrDRDYBTDcBYw.e5m', 'CY2FW', 'N', 'SIM', 2, '', '0', '', '0'),
(6, 'qwer@conas.com', 'coninha', '$2y$10$FH/2aKaeXf4QLofThfLdFut7YItnhAxnbappWOZl2FSjyz2mRD0G6', 'RZK6I', 'N', 'SIM', 3, '', '0', '', '0'),
(7, 'asdasd@cona.com', 'asdasd', '$2y$10$VakQCTgWlDh36SaYi2QrT.ZeFOzNbk5TDm6SL1Reql9AnFuJoJFa2', 'VTL5A', 'N', 'SIM', 4, '', '0', '', '0'),
(16, '123@123.com', '123', '$2y$10$4WH90Xs9zp8dT8ve0SATqe9al/mZSduSl8pL1t70WOYp0yyySxpFO', 'AGZBX', 'N', 'SIM', -1, '', '0', '', '0'),
(17, 'qwer@qwer.com', 'qwer', '$2y$10$G838GawWCrcjA5MX.Czx6e7X5OoDLolmWUOsEiPK1bwEQhFM/zsj6', '9N25C', 'N', 'SIM', -1, '', '0', '', '0'),
(18, 'asdasdasd@asd.com', 'asd', '$2y$10$ZgVrnkTf/zzgCIAulF92SOajXU1Ztlq7psEpFGB1nq.JQkzy/9Axq', 'T70BU', 'N', 'SIM', -1, '', '', '', ''),
(19, 'asd@asdasd.com', 'Tiago ', '$2y$10$nDvjgRBMBWV23VzwjEt5LON2y4091oJBk52EoOKTodsxTQqvZsIde', 'LVQ7A', 'N', 'SIM', -1, '', '', '', ''),
(20, 'asdff@asd.com', 'Tiago Pereira', '$2y$10$UcvAai.prT3IyTMY1cUPzu5G/1RlBdQ8wDmc9WAbD0D9pL5EyZaxu', '3ZRFK', 'N', 'SIM', -1, '', '', '', ''),
(21, 'asdasdasd@asdasd.com', 'asd', '$2y$10$p1FBXp5NjsVY8bVjy6wcSuQTZS6.nMlDdAreQPmO6LLwmHi4biuFW', 'W9XVE', 'N', 'SIM', -1, '', '', '', '');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
