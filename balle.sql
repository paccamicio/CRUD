-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14-Set-2020 às 22:24
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `balle`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastroagenda6`
--

CREATE TABLE `cadastroagenda6` (
  `codigo` int(11) NOT NULL,
  `nome` text NOT NULL,
  `email` text NOT NULL,
  `cidade` text NOT NULL,
  `estado` text NOT NULL,
  `cep` text NOT NULL,
  `sexo` text NOT NULL,
  `cartao_credito` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastroagenda6`
--

INSERT INTO `cadastroagenda6` (`codigo`, `nome`, `email`, `cidade`, `estado`, `cep`, `sexo`, `cartao_credito`) VALUES
(5, 'sdfsdfsdf', 'rafaella_ballerini@hotmail.com', 'werwerwe', 'SC', '22323-232', 'feminino', 'elo');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastroagenda6`
--
ALTER TABLE `cadastroagenda6`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastroagenda6`
--
ALTER TABLE `cadastroagenda6`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
