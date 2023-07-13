-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Jul-2023 às 12:57
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bombeiros-jhom`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario_socorrista`
--

CREATE TABLE `usuario_socorrista` (
  `id_socorrista` int(5) NOT NULL,
  `nome_socorrista` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuario_socorrista`
--

INSERT INTO `usuario_socorrista` (`matricula`, `nome_socorrista`, `senha`) VALUES
(12233, 'Henrique Osmar', '12345'),
(12345, 'Otavio Santana', '12345'),
(13579, 'João Filipi Girardi', '12345'),
(54321, 'Matheus Zuquetti', '12345');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `usuario_socorrista`
--
ALTER TABLE `usuario_socorrista`
  ADD PRIMARY KEY (`matricula`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
