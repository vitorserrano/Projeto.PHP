-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 05-Set-2019 às 01:36
-- Versão do servidor: 5.7.24
-- versão do PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projeto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `postagem`
--

DROP TABLE IF EXISTS `postagem`;
CREATE TABLE IF NOT EXISTS `postagem` (
  `id_postagem` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_postagem` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `resumo_postagem` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `conteudo_postagem` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `url_postagem` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `data_postagem` date NOT NULL,
  `autor_postagem` int(11) NOT NULL,
  PRIMARY KEY (`id_postagem`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome_usuario` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email_usuario` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `senha_usuario` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dt_registro` date DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome_usuario`, `email_usuario`, `senha_usuario`, `dt_registro`) VALUES
(15, 'vitor', 'spsoadsaopk321213123@gmail.com', '1232131', NULL),
(14, '2132123123123123', 'tarefadeingles@gmail.com', '1232113', NULL),
(20, 'luiz', 'luiz@gmail.com', '123', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
