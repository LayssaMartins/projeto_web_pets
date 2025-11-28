-- --------------------------------------------------------
-- Estrutura da tabela `adocao`
-- Armazena os dados principais dos animais para adoção.
-- --------------------------------------------------------
CREATE TABLE IF NOT EXISTS `adocao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `idade` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `sexo` enum('Macho','Fêmea') COLLATE utf8mb4_general_ci NOT NULL,
  `descricao` text COLLATE utf8mb4_general_ci DEFAULT NULL,
  `imagem` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------
-- Estrutura da tabela `adocao_fotos`
-- Armazena o caminho das fotos dos animais.
-- --------------------------------------------------------
CREATE TABLE IF NOT EXISTS `adocao_fotos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_animal` int(11) NOT NULL,
  `caminho_foto` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_adocao_animal_idx` (`id_animal`) -- Cria um índice na coluna para a chave estrangeira
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------
-- Adiciona a Chave Estrangeira
-- Vincula `id_animal` em `adocao_fotos` ao `id` em `adocao`.
-- --------------------------------------------------------
ALTER TABLE `adocao_fotos`
ADD CONSTRAINT `fk_adocao_animal`
FOREIGN KEY (`id_animal`) REFERENCES `adocao`(`id`)
ON DELETE CASCADE ON UPDATE CASCADE;

-- FIM DO ARQUIVO