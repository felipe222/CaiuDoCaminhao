-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.6.17 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              9.2.0.4947
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Copiando estrutura do banco de dados para caiudocaminhao
CREATE DATABASE IF NOT EXISTS `caiudocaminhao` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;
USE `caiudocaminhao`;


-- Copiando estrutura para tabela caiudocaminhao.categorias
CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela caiudocaminhao.categorias: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` (`id`, `nome`, `descricao`) VALUES
	(1, 'Tv e Vídeo', 'Os melhores produtos para TV e Vídeo você encontra aqui!'),
	(2, 'Eletrodomésticos', 'Os melhores eletrodomésticos estão aqui!'),
	(3, 'Celulares e Telefones', 'Precisando trocar de celular? Aqui você encontra as melhores ofertas!');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;


-- Copiando estrutura para tabela caiudocaminhao.produtos
CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `idCategoria` int(10) DEFAULT '0',
  `nome` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `valor` float DEFAULT '0',
  `dataCadastro` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `Produto Categoria` (`idCategoria`),
  CONSTRAINT `Produto Categoria` FOREIGN KEY (`idCategoria`) REFERENCES `categorias` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela caiudocaminhao.produtos: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `produtos` DISABLE KEYS */;
INSERT INTO `produtos` (`id`, `idCategoria`, `nome`, `foto`, `descricao`, `valor`, `dataCadastro`) VALUES
	(1, 1, 'TV LED 49" LG Full HD com Conversor Digital Integrado, Game TV, Time Machine Ready, Conexoes HDMI e USB - 49LF5500', 'fotos/1/1.jpg', 'Assista a seus programas favoritos com uma imagem em alta definição.', 500, '2015-06-15'),
	(2, 2, 'Fogão 4 Bocas Consul Facilite Inox Bivolt - CF550BR', 'fotos/2/2.jpg', 'Compacto e eficiente.', 250, '2015-06-15'),
	(3, 2, ' Geladeira Electrolux Frost Free 2 Portas 380 Litros Inox - DW42X', 'fotos/2/3.jpg', 'A geladeira ideal para sua cozinha!', 999.99, '2015-06-15'),
	(4, 3, 'Celular Smartphone LG G2 Lite D295 Branco -Dual Chip, 3G, Tela 4.5 IPS, Câmera 8MP +Frontal QUICK SELFIE, Quad Core 1.2Ghz Qualcomm, 4GB, Smart Button', 'fotos/3/4.jpg', '100% tecnologia', 100, '2015-06-15');
/*!40000 ALTER TABLE `produtos` ENABLE KEYS */;


-- Copiando estrutura para tabela caiudocaminhao.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nomeUsuario` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela caiudocaminhao.usuarios: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `nomeUsuario`, `senha`) VALUES
	(1, 'wanderson', 'e10adc3949ba59abbe56e057f20f883e'),
	(2, 'victor', 'e10adc3949ba59abbe56e057f20f883e'),
	(3, 'rogerio', 'e10adc3949ba59abbe56e057f20f883e'),
	(4, 'felipe', 'e10adc3949ba59abbe56e057f20f883e'),
	(5, 'diogo', 'e10adc3949ba59abbe56e057f20f883e');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
