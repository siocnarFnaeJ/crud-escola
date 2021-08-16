-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 02-Ago-2021 às 14:05
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ceep`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

DROP TABLE IF EXISTS `aluno`;
CREATE TABLE IF NOT EXISTS `aluno` (
  `id_aluno` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) COLLATE utf8_bin NOT NULL,
  `cpf` varchar(20) COLLATE utf8_bin NOT NULL,
  `cgm` varchar(20) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_aluno`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`id_aluno`, `nome`, `cpf`, `cgm`) VALUES
(1, 'WALKER ANDRE SCHWARTZ', '43543564', '3242342'),
(7, 'PABLO ESTEBAN', '857895487567', '4578436'),
(3, 'WALKER ANDRE SCHWARTZ', '2323', '23234'),
(6, '', '', ''),
(5, 'Tadeu', '843757', '48634');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livro`
--

DROP TABLE IF EXISTS `livro`;
CREATE TABLE IF NOT EXISTS `livro` (
  `id_livro` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(60) COLLATE utf8_bin NOT NULL,
  `autor` varchar(60) COLLATE utf8_bin NOT NULL,
  `genero` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id_livro`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `livro`
--

INSERT INTO `livro` (`id_livro`, `titulo`, `autor`, `genero`) VALUES
(1, 'Guia do mochileiro da Galaxia', 'nao lembro', 'Romance'),
(2, 'Guia de PHP', 'Walker', 'Infantil');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
