-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30/11/2025 às 01:02
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
-- Banco de dados: `adocao`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `adocao`
--

CREATE TABLE `adocao` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `idade` varchar(50) NOT NULL,
  `sexo` enum('Macho','Fêmea') NOT NULL,
  `descricao` text DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `adocao`
--

INSERT INTO `adocao` (`id`, `nome`, `idade`, `sexo`, `descricao`, `imagem`) VALUES
(9, 'Kiara', '5 meses', 'Fêmea', 'Vermifugada, dócil, tem castração garantida na idade certa', NULL),
(10, 'Nala', '5 meses', 'Fêmea', 'Vermifugada, dócil, tem castração garantida na idade certa\r\n Disponível para casa ou apartamento telado', NULL),
(11, 'Dustin', '3 Anos', 'Macho', 'Castrado, dócil, carinhoso, companheiro\r\nDisponível para casa ou apartamento telado', NULL),
(12, 'Tom', '3 Anos', 'Macho', 'castrado, vermifugado, dócil e companheiro, não é um gatinho de colo pois já sofreu muito, mais é um gato que vai te acompanhar pela casa toda.\r\nDisponível para casa ou apartamento telado', NULL),
(13, 'Oliver e Alícia', '3 Anos', 'Macho', 'Oliver o branco e Alícia a tricolor, disponíveis para adoção conjunta pois os dois foram abandonados juntos, são muito apegados e sofreriam com a separação, os dois estão castrados, vermifugados e estão disponíveis para ambientes telados, casa ou apartamento.', NULL),
(14, 'Amora', '2 Anos', 'Fêmea', 'castrada, dócil, carente, adora sachê, uma gata tranquila e companheira, disponível para ambientes telados casa ou apartamento, vermifugada', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `adocao_fotos`
--

CREATE TABLE `adocao_fotos` (
  `id` int(11) NOT NULL,
  `id_animal` int(11) NOT NULL,
  `caminho_foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `adocao_fotos`
--

INSERT INTO `adocao_fotos` (`id`, `id_animal`, `caminho_foto`) VALUES
(18, 9, 'uploads/img_692b63e51fa2b.jfif'),
(19, 9, 'uploads/img_692b63e520b22.jfif'),
(20, 10, 'uploads/img_692b640fe7d9d.jfif'),
(21, 11, 'uploads/img_692b64376c007.jfif'),
(22, 11, 'uploads/img_692b64376d328.jfif'),
(23, 11, 'uploads/img_692b64376dd7d.jfif'),
(24, 11, 'uploads/img_692b64376ec8a.jfif'),
(25, 12, 'uploads/img_692b647260101.jfif'),
(26, 12, 'uploads/img_692b647260968.jfif'),
(27, 12, 'uploads/img_692b64726193b.jfif'),
(28, 12, 'uploads/img_692b64726290b.jfif'),
(29, 13, 'uploads/img_692b64f01a0f9.jfif'),
(30, 13, 'uploads/img_692b64f01aea3.jfif'),
(31, 14, 'uploads/img_692b6518777fa.jfif'),
(32, 14, 'uploads/img_692b651877eed.jfif');

-- --------------------------------------------------------

--
-- Estrutura para tabela `candidatos_adocao`
--

CREATE TABLE `candidatos_adocao` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `assunto` varchar(255) DEFAULT NULL,
  `mensagem` text NOT NULL,
  `id_animal` int(11) DEFAULT NULL,
  `data_envio` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `candidatos_adocao`
--

INSERT INTO `candidatos_adocao` (`id`, `nome`, `email`, `assunto`, `mensagem`, `id_animal`, `data_envio`) VALUES
(9, 'layssamartins', 'Lalaelanalayssamartins12@gmail.com', 'Adotar olive', 'quero afdotar', NULL, '2025-11-29 12:33:20'),
(10, 'Tainara', 'tainara@gmail.com', 'Quero o Tom', 'quero adotar', NULL, '2025-11-29 19:28:30'),
(11, 'Layssa ', 'layssamartins12@gmail.com', 'Adotar a Kiara', 'Estou disposta a adotar essa gatinha', NULL, '2025-11-29 20:03:45');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `adocao`
--
ALTER TABLE `adocao`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `adocao_fotos`
--
ALTER TABLE `adocao_fotos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_gato` (`id_animal`);

--
-- Índices de tabela `candidatos_adocao`
--
ALTER TABLE `candidatos_adocao`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `adocao`
--
ALTER TABLE `adocao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `adocao_fotos`
--
ALTER TABLE `adocao_fotos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de tabela `candidatos_adocao`
--
ALTER TABLE `candidatos_adocao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `adocao_fotos`
--
ALTER TABLE `adocao_fotos`
  ADD CONSTRAINT `adocao_fotos_ibfk_1` FOREIGN KEY (`id_animal`) REFERENCES `adocao` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
