-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Ago-2023 às 16:46
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
-- Banco de dados: `ceudebrigadeiro2`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `email` varchar(100) NOT NULL,
  `senha` varchar(300) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `CEP` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`email`, `senha`, `nome`, `CEP`) VALUES
('andregcmll@gmail.com', 'andre321', 'André', '89208630'),
('batmanomorcego@email.com', 'coringa123', 'robinoaprendiz', '89206400'),
('cleitonhasta@gmail.com', '32100', 'Cleiton Hasta', '85321-76'),
('dudamarmol5@gmail.com', 'dudaestrela123', 'Duda', '89235562'),
('gabrieldal@gmail.com', 'zerma123', 'Gabriel da Luz', '89207629'),
('golromarinho@globo.com', 'mortegalvao', 'Cleber Machado', '97621354'),
('gremio@gmail.com', 'batata', 'Vitor Pedroso', '98654456'),
('jefersonclock@gmail.com', 'pimenta465', 'Jeferson', '89201333'),
('joao_f@gmail.com', 'iagokoqui2', 'João', '89206400'),
('joelintonsavio@gmail.com', '123456', 'Joelinton Silva', '87213302'),
('jonatararfer@gmail.com', 'alvin', 'Alven Esquilo', '45321789'),
('lily243@gmail.com', 'nick123', 'Emily Rebello', '89732490'),
('lionelmessi64@gmail.com', 'barcelona4', 'Lionel Messi', '85321123'),
('maicol@gmail.com', 'tecoteco462', 'Maicol', '89206555'),
('maiquinho123@gmail.com', '12345', 'Maicol Peterson', '87321123'),
('mariajoaquina@email.com', 'cirilo123', 'Maria Joaquina', '89204123'),
('marilialima@gmail.com', 'murilogostoso', 'Maria Lima', '89208355'),
('mbappezin@psg.com.fr', 'neymarfdp', 'Kilian Mbappe', '46654456'),
('njorger@gmail.com', '321', 'jorgindogra', '23698745');

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco_cliente`
--

CREATE TABLE `endereco_cliente` (
  `cep` varchar(20) DEFAULT NULL,
  `num_casa` int(11) DEFAULT NULL,
  `rua` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `bairro` varchar(200) DEFAULT NULL,
  `estado` varchar(200) DEFAULT NULL,
  `nomeendereco` varchar(200) NOT NULL,
  `cidade` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `endereco_cliente`
--

INSERT INTO `endereco_cliente` (`cep`, `num_casa`, `rua`, `email`, `bairro`, `estado`, `nomeendereco`, `cidade`) VALUES
('89208630', 84, 'São Domingos', 'andregcmll@gmail.com', 'Petrópolis', 'Santa Catarina', 'Casa do teu pai', 'Joinville');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`email`);

--
-- Índices para tabela `endereco_cliente`
--
ALTER TABLE `endereco_cliente`
  ADD PRIMARY KEY (`nomeendereco`),
  ADD KEY `email` (`email`);

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `endereco_cliente`
--
ALTER TABLE `endereco_cliente`
  ADD CONSTRAINT `endereco_cliente_ibfk_1` FOREIGN KEY (`email`) REFERENCES `cadastro` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
