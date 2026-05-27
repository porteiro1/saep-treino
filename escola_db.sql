-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 27/05/2026 às 22:01
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `escola_db`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `history`
--

CREATE TABLE `history` (
  `idProduct` int(11) NOT NULL,
  `idManager` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `idLending` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `history`
--

INSERT INTO `history` (`idProduct`, `idManager`, `id`, `idLending`) VALUES
(3, 8, 1, 7);

-- --------------------------------------------------------

--
-- Estrutura para tabela `lending`
--

CREATE TABLE `lending` (
  `id` int(11) NOT NULL,
  `dataEmprestimo` date DEFAULT NULL,
  `dataDevolucao` date DEFAULT NULL,
  `idProduct` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `lending`
--

INSERT INTO `lending` (`id`, `dataEmprestimo`, `dataDevolucao`, `idProduct`) VALUES
(4, '2025-10-15', '2025-10-16', 3),
(5, '2025-10-15', NULL, 3),
(6, '2025-10-15', NULL, 3),
(7, '2025-10-15', NULL, 3);

-- --------------------------------------------------------

--
-- Estrutura para tabela `managers`
--

CREATE TABLE `managers` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `managers`
--

INSERT INTO `managers` (`id`, `name`, `password`, `email`) VALUES
(1, 'roberto', 'roberto', 'roberto@gmail.com'),
(5, 'maua', '123', 'maua@gmail.com'),
(8, 'mermao', '123', 'mermao@silva.com'),
(9, 'matheus', '123', 'matheus2@gmail.com'),
(10, 'matheus', '123', 'matheus2@gmail.com'),
(11, '', '', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `idManager` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `products`
--

INSERT INTO `products` (`id`, `product`, `quantity`, `idManager`) VALUES
(3, 'lapis', 10002, 2),
(4, 'canetao', 24524, 1),
(5, 'jaleco', 4, 5),
(6, 'apagador', 4, 5),
(7, 'mouse', 4, 5),
(10, 'roberto', 5324, 9),
(11, 'dfsdf', 3413, 5);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `lending`
--
ALTER TABLE `lending`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `managers`
--
ALTER TABLE `managers`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `lending`
--
ALTER TABLE `lending`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `managers`
--
ALTER TABLE `managers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
