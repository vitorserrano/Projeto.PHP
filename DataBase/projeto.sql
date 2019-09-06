-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Set-2019 às 05:25
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `postagem`
--

CREATE TABLE `postagem` (
  `id_postagem` int(11) NOT NULL,
  `titulo_postagem` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `resumo_postagem` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `conteudo_postagem` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `url_postagem` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `data_postagem` date NOT NULL,
  `autor_postagem` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `postagem`
--

INSERT INTO `postagem` (`id_postagem`, `titulo_postagem`, `resumo_postagem`, `conteudo_postagem`, `url_postagem`, `data_postagem`, `autor_postagem`) VALUES
(23, 'Exemplo Front-End', 'Realização do teste para a vaga de Desenvolvedor Web Júnior', 'O projeto contém CRUD de postagens, acesso ao sistema via login e recuperação de senha.', 'https://github.com/vitorserrano', '2019-09-06', 25);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome_usuario` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email_usuario` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `senha_usuario` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dt_registro` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome_usuario`, `email_usuario`, `senha_usuario`, `dt_registro`) VALUES
(26, 'Exemplo', 'exemplo@gmail.com', '202cb962ac59075b964b07152d234b70', '2019-09-06');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `postagem`
--
ALTER TABLE `postagem`
  ADD PRIMARY KEY (`id_postagem`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `postagem`
--
ALTER TABLE `postagem`
  MODIFY `id_postagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
