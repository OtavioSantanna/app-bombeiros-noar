-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Nov-2023 às 02:40
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bombeiros-johm`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cargo`
--

CREATE TABLE `cargo` (
  `id_cargo` int(11) NOT NULL,
  `nome_cargo` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cargo`
--

INSERT INTO `cargo` (`id_cargo`, `nome_cargo`) VALUES
(1, 'motorista'),
(2, 'socorrista');

-- --------------------------------------------------------

--
-- Estrutura da tabela `info_ocorrencia`
--

CREATE TABLE `info_ocorrencia` (
  `id_ocorrencia` int(11) NOT NULL,
  `cabecalho` varchar(200) NOT NULL,
  `pre_hospitalar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `info_ocorrencia`
--

INSERT INTO `info_ocorrencia` (`id_ocorrencia`, `cabecalho`, `pre_hospitalar`) VALUES
(1, '[\"2023-10-19\",\"masculino\",\"Albert Einstein\",\"Leoncio \",\"58\",\"14415987412\",\"47988447755\",\"Pica Pau\",\"25\",\"Getulio Vargas\"]', ''),
(2, '[\"2023-10-10\",\"feminino\",\"Albert Einstein\",\"Nicolau Flamel\",\"150\",\"47895147850\",\"47666554488\",\"Harry Potter\",\"18\",\"Beco Horizontal\"]', ''),
(4, '[\"2023-11-22\",\"feminino\",\"Algusto Coelho\",\"Nicolas Maduro\",\"23\",\"04508798560\",\"47944556655\",\"Luiz Inacio Lula\",\"18\",\"Guiana\"]', ''),
(5, '[\"2023-11-15\", \"feminino\", \"Albert Einstein\", \"Igor\", \"15\", \"12345678912\", \"47955446655\", \"Lucas\", \"18\", \"maceio\"]', ''),
(6, '[\"2023-11-16\",\"feminino\",\"Darci Vargas\",\"Marcela\",\"22\",\"65820792041\",\"37045176\",\"Inacio\",\"25\",\"Vitorino\"]', ''),
(7, '[\"2023-11-23\",\"masculino\",\"Sirio Libanes\",\"Habib Osborn\",\"34\",\"85333936013\",\"32515547\",\"Umberto\",\"67\",\"Sao Paulo\"]', '[\"Queda Moto\", \"tiro\", \"teste\", \"\"]');

-- --------------------------------------------------------

--
-- Estrutura da tabela `info_usuario`
--

CREATE TABLE `info_usuario` (
  `matricula` int(11) DEFAULT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `telefone` varchar(11) DEFAULT NULL,
  `cep` int(8) DEFAULT NULL,
  `cargo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `matricula` int(5) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`matricula`, `nome`, `senha`, `admin`) VALUES
(12345, 'Otávio', '1234', 0),
(54321, 'Paulo Cezar', '827ccb0eea8a706c4c34a16891f84e7b', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id_cargo`);

--
-- Índices para tabela `info_ocorrencia`
--
ALTER TABLE `info_ocorrencia`
  ADD PRIMARY KEY (`id_ocorrencia`);

--
-- Índices para tabela `info_usuario`
--
ALTER TABLE `info_usuario`
  ADD UNIQUE KEY `matricula` (`matricula`),
  ADD KEY `cargo` (`cargo`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`matricula`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id_cargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `info_ocorrencia`
--
ALTER TABLE `info_ocorrencia`
  MODIFY `id_ocorrencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `info_usuario`
--
ALTER TABLE `info_usuario`
  ADD CONSTRAINT `info_usuario_ibfk_1` FOREIGN KEY (`matricula`) REFERENCES `usuario` (`matricula`),
  ADD CONSTRAINT `info_usuario_ibfk_2` FOREIGN KEY (`cargo`) REFERENCES `cargo` (`id_cargo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
