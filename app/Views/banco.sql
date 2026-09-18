-- phpMyAdmin SQL Dump
-- version 5.2.1deb1+deb12u1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 11/09/2026 às 00:39
-- Versão do servidor: 10.11.18-MariaDB-0+deb12u1
-- Versão do PHP: 8.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `a28692`
--
CREATE DATABASE IF NOT EXISTS `a28692` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `a28692`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `Conteudo`
--

CREATE TABLE `Conteudo` (
  `Id` int(11) NOT NULL,
  `Titulo` varchar(100) NOT NULL,
  `Texto` text DEFAULT NULL,
  `Contato` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `Conteudo`
--

INSERT INTO `Conteudo` (`Id`, `Titulo`, `Texto`, `Contato`) VALUES
(1, 'Pagina de contato', 'Essa é a página de contato!', 0),
(7, 'Página Inicial', 'Bem-Vindo a minha página!', NULL),
(8, 'Quem Sou?', 'Olá! Meu nome é Rayanne Fernandes Fideles, tenho 19 anos e moro na cidade de Presidenete Bernardes.', NULL),
(9, 'Planos Futuros!!', 'Você irá saber só quando eu realizar hahahaha', NULL),
(10, 'Minhas habilidades', 'sou muito comunicativa, feliz, risonha, me enturmo fácil com as pessoas, estudo, trabalho, tenho familia, namorado, estagio e dou conta de tudo.', NULL),
(11, 'Fale Comigo!!!', 'Me chame no zap hein galera', NULL),
(12, 'Fale Comigo', 'Me chamem no whatsapp e me siga no Instagram\r\nray_fernnds', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `Conteudo`
--
ALTER TABLE `Conteudo`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `Conteudo`
--
ALTER TABLE `Conteudo`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
