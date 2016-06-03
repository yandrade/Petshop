-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.6.22-log - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              9.1.0.4867
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Copiando estrutura do banco de dados para petshop
DROP DATABASE IF EXISTS `petshop`;
CREATE DATABASE IF NOT EXISTS `petshop` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `petshop`;


-- Copiando estrutura para tabela petshop.animal
DROP TABLE IF EXISTS `animal`;
CREATE TABLE IF NOT EXISTS `animal` (
  `AnimalCodigo` int(11) NOT NULL,
  `AnimalIdade` int(11) NOT NULL,
  `AnimalObservacao` varchar(50) NOT NULL,
  `ClienteCodigo` int(11) NOT NULL,
  `RacaCodigo` int(11) NOT NULL,
  `PorteCodigo` int(11) NOT NULL,
  `PeloCodigo` int(11) NOT NULL,
  PRIMARY KEY (`AnimalCodigo`),
  KEY `FKraca` (`RacaCodigo`),
  KEY `FKporte` (`PorteCodigo`),
  KEY `FKPelo` (`PeloCodigo`),
  KEY `FKCliente` (`ClienteCodigo`),
  CONSTRAINT `FKCliente` FOREIGN KEY (`ClienteCodigo`) REFERENCES `cliente` (`ClienteCodigo`),
  CONSTRAINT `FKPelo` FOREIGN KEY (`PeloCodigo`) REFERENCES `pelo` (`PeloCodigo`),
  CONSTRAINT `FKporte` FOREIGN KEY (`PorteCodigo`) REFERENCES `porte` (`PorteCodigo`),
  CONSTRAINT `FKraca` FOREIGN KEY (`RacaCodigo`) REFERENCES `raca` (`RacaCodigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela petshop.cliente
DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `ClienteCodigo` int(11) NOT NULL,
  `ClienteTelefone` int(11) NOT NULL,
  `ClienteCpf` int(11) NOT NULL,
  `ClienteMidiaSocial` varchar(50) DEFAULT NULL,
  `ClienteEndereco` varchar(50) NOT NULL,
  `ClienteNome` varchar(50) NOT NULL,
  PRIMARY KEY (`ClienteCodigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela petshop.funcionário
DROP TABLE IF EXISTS `funcionário`;
CREATE TABLE IF NOT EXISTS `funcionário` (
  `Funcionariocodigo` int(11) NOT NULL,
  `FuncionarioNome` varchar(50) NOT NULL,
  `FuncionarioFuncao` varchar(50) NOT NULL,
  `FuncionarioEmail` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Funcionariocodigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela petshop.pelo
DROP TABLE IF EXISTS `pelo`;
CREATE TABLE IF NOT EXISTS `pelo` (
  `PeloCodigo` int(11) NOT NULL,
  `PeloTipo` varchar(50) NOT NULL,
  `PeloValor` double NOT NULL,
  PRIMARY KEY (`PeloCodigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela petshop.porte
DROP TABLE IF EXISTS `porte`;
CREATE TABLE IF NOT EXISTS `porte` (
  `PorteCodigo` int(11) NOT NULL,
  `PorteDescricao` varchar(30) NOT NULL,
  `PorteValor` double NOT NULL DEFAULT '0',
  PRIMARY KEY (`PorteCodigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela petshop.produto
DROP TABLE IF EXISTS `produto`;
CREATE TABLE IF NOT EXISTS `produto` (
  `ProdutoCodigo` int(11) NOT NULL,
  `ProdutoTipo` varchar(50) NOT NULL,
  `ProdutoValidade` date NOT NULL,
  `ProdutoQtdEstoque` int(11) NOT NULL,
  PRIMARY KEY (`ProdutoCodigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.


-- Copiando estrutura para tabela petshop.raca
DROP TABLE IF EXISTS `raca`;
CREATE TABLE IF NOT EXISTS `raca` (
  `RacaCodigo` int(11) NOT NULL,
  `RacaTipo` varchar(50) NOT NULL,
  `RacaValor` double NOT NULL DEFAULT '0',
  PRIMARY KEY (`RacaCodigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
