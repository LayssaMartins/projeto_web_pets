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
-- Armazena o caminho das fotos extras dos animais.
-- --------------------------------------------------------
CREATE TABLE IF NOT EXISTS `adocao_fotos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_animal` int(11) NOT NULL,
  `caminho_foto` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_adocao_animal_idx` (`id_animal`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------
-- Chave Estrangeira da tabela `adocao_fotos`
-- --------------------------------------------------------
ALTER TABLE `adocao_fotos`
ADD CONSTRAINT `fk_adocao_animal`
FOREIGN KEY (`id_animal`) REFERENCES `adocao`(`id`)
ON DELETE CASCADE ON UPDATE CASCADE;

-- --------------------------------------------------------
-- Estrutura da tabela `candidatos_adocao`
-- Armazena dados de interessados em adotar um animal.
-- --------------------------------------------------------
CREATE TABLE IF NOT EXISTS candidatos_adocao (
  id INT(11) NOT NULL AUTO_INCREMENT,
  nome VARCHAR(150) NOT NULL,
  email VARCHAR(150) NOT NULL,
  assunto VARCHAR(255) DEFAULT NULL,
  mensagem TEXT NOT NULL,

  -- ID do animal desejado
  id_animal INT(11) DEFAULT NULL,

  -- Status da candidatura
  status ENUM('Pendente','Em Análise','Aprovado','Rejeitado') 
      NOT NULL DEFAULT 'Pendente',

  data_envio TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

  PRIMARY KEY (id),
  KEY fk_candidato_animal_idx (id_animal)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------
-- Chave Estrangeira da tabela candidatos_adocao
-- --------------------------------------------------------
ALTER TABLE candidatos_adocao
ADD CONSTRAINT fk_candidato_animal
FOREIGN KEY (id_animal) REFERENCES adocao(id)
ON DELETE SET NULL ON UPDATE CASCADE;
