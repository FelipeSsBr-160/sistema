-- phpMyAdmin SQL Dump
-- version 5.2.1deb1+deb12u1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 11/09/2026 às 00:40
-- Versão do servidor: 10.11.18-MariaDB-0+deb12u1
-- Versão do PHP: 8.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `a8232`
--
CREATE DATABASE IF NOT EXISTS `a8232` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `a8232`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `Contato`
--

CREATE TABLE `Contato` (
  `Id` int(11) NOT NULL,
  `Tipo` varchar(100) NOT NULL,
  `Conteudo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `Contato`
--

INSERT INTO `Contato` (`Id`, `Tipo`, `Conteudo`) VALUES
(1, 'Email:', 'meu_email@univicosa.com.br');

-- --------------------------------------------------------

--
-- Estrutura para tabela `Conteudo`
--

CREATE TABLE `Conteudo` (
  `Id` int(11) NOT NULL,
  `Titulo` varchar(100) NOT NULL,
  `Texto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `Conteudo`
--

INSERT INTO `Conteudo` (`Id`, `Titulo`, `Texto`) VALUES
(1, 'Pagina Inicial', 'Minha Pagina'),
(2, 'Email: ', 'não_sei_o_que_la@naoseioquela.etc'),
(3, 'Produtos', 'Não sei o que lá');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `Contato`
--
ALTER TABLE `Contato`
  ADD PRIMARY KEY (`Id`);

--
-- Índices de tabela `Conteudo`
--
ALTER TABLE `Conteudo`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `Contato`
--
ALTER TABLE `Contato`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `Conteudo`
--
ALTER TABLE `Conteudo`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
