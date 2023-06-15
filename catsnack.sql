-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Jun-2023 às 00:45
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `catsnack`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `CD_USUARIO` int(11) NOT NULL,
  `EMAIL_USUARIO` varchar(255) NOT NULL,
  `SENHA` varchar(255) NOT NULL,
  `NM_USUARIO` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`CD_USUARIO`, `EMAIL_USUARIO`, `SENHA`, `NM_USUARIO`) VALUES
(1, 'TESTE@A', '202cb962ac59075b964b07152d234b70', 'TESTE'),
(2, 'Alan_biliski@hotmail.com', '202cb962ac59075b964b07152d234b70', 'Alan'),
(3, 'Heliocosta.joi@gmail.com', '202cb962ac59075b964b07152d234b70', 'Hélio Costa'),
(4, 'hugo.may@gmail.com', '202cb962ac59075b964b07152d234b70', 'Hugo'),
(9, 'Silvamariele797@gmail.com', '7472ecbd23035919ce77c9ea20727d74', 'Mariele');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`CD_USUARIO`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `CD_USUARIO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
