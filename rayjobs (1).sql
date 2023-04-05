-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 14-Fev-2020 às 22:58
-- Versão do servidor: 10.4.10-MariaDB
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `rayjobs`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `candidato`
--

DROP TABLE IF EXISTS `candidato`;
CREATE TABLE IF NOT EXISTS `candidato` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `senha` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `data_nascimento` varchar(100) NOT NULL,
  `telefone` char(17) NOT NULL,
  `endereco` varchar(150) NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `disponibilidade` varchar(5) NOT NULL,
  `experiencias` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `candidato`
--

INSERT INTO `candidato` (`id`, `nome`, `cpf`, `senha`, `email`, `data_nascimento`, `telefone`, `endereco`, `sexo`, `disponibilidade`, `experiencias`) VALUES
(1, 'Raylik', '123.456.789-01', '', 'oraylik@gmail.com', '1990-02-12', '(12)22333-3333', 'rua 1', 'masculino', 'Noite', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

DROP TABLE IF EXISTS `contato`;
CREATE TABLE IF NOT EXISTS `contato` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `assunto` varchar(150) NOT NULL,
  `mensagem` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`id`, `nome`, `email`, `assunto`, `mensagem`) VALUES
(1, 'Raylik', 'oraylik@gmail.com', 'teste', 'adaljvnds nvfsçiu viv');

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

DROP TABLE IF EXISTS `empresa`;
CREATE TABLE IF NOT EXISTS `empresa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `cnpj` char(18) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cnpj` (`cnpj`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`id`, `nome`, `cnpj`, `email`, `senha`) VALUES
(1, 'Supermercado Rondon', '10.515.703/0001-06', 'oraylik@gmail.com', '123456'),
(2, 'Lojas Americanas', '33.014.556/1053-70', 'email@email.com.br', '123456'),
(3, 'Arthur e Julia Adega Ltda', '13.388.459/0001-56', 'financeiro@arthurejuliaadegaltda.com.br', '147852'),
(4, 'Josefa e Julia Contábil Ltda', '61.498.522/0001-50', 'fiscal@josefaejuliacontabilltda.com.br', '123456');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vaga`
--

DROP TABLE IF EXISTS `vaga`;
CREATE TABLE IF NOT EXISTS `vaga` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cargo` varchar(100) NOT NULL,
  `nome_empresa` varchar(100) NOT NULL,
  `tipo_vaga` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `descricao` varchar(500) NOT NULL,
  `requisitos` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `vaga`
--

INSERT INTO `vaga` (`id`, `cargo`, `nome_empresa`, `tipo_vaga`, `cidade`, `descricao`, `requisitos`) VALUES
(3, 'Estagiário', 'Supermercados Rondon', 'Estágio', 'Birigui', 'Estagiário', 'Cursando TI'),
(5, 'Desenvolvedor', 'Supermercados Rondon', 'Meio período', 'Araçatuba', 'Desenvolvedor ', 'Curso TI'),
(6, 'Programador', 'Supermercados Rondon', 'Estágio', 'Araçatuba', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
