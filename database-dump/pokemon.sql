-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29/05/2023 às 23:27
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `postgrad`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `pokemon`
--

CREATE TABLE `pokemon` (
  `id` int(20) NOT NULL,
  `name` tinytext DEFAULT NULL,
  `power` tinytext DEFAULT NULL,
  `type` text DEFAULT NULL,
  `code` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `pokemon`
--

INSERT INTO `pokemon` (`id`, `name`, `power`, `type`, `code`) VALUES
(1, 'Pichu', '70', 'eletric', '1'),
(2, 'Pikachu', '120', 'eletric', '2'),
(3, 'Raichu', '170', 'eletric', '3'),
(4, 'Charmeleon', '110', 'fire, dragon', '4'),
(5, 'Charizard', '220', 'fire, dragon', '5'),
(6, 'Brunachu', '41', 'fire, grass', '14'),
(7, 'Bulbassaur', '64', 'fire, grass', '115'),
(8, 'Bulbassaur', '64', 'fire, grass', '115'),
(9, 'Bulbassaur', '64', 'fire, grass', '115'),
(10, 'Bulbassaur', '64', 'fire, grass', '115'),
(11, 'Tetste', '44', 'fire, steel', '123'),
(12, 'Tetste', '44', 'fire, steel', '123'),
(13, 'Eeve', '189', 'water', '432'),
(14, 'Mew', '1200', 'psychic', '437'),
(15, 'da', 'fs', 'fire', 'fsa'),
(16, '4314', '52', 'grass', '1413'),
(17, 'Vraum', '665', 'electric', '54'),
(18, 'hue', '635', 'water', '666'),
(19, 'Success', '887', 'dark', '999'),
(20, 'Reload', '144', 'grass, ice', '589'),
(21, 'Hotfix', '87', 'normal, fire, electric', '799'),
(22, 'Final Test', '145', 'fire, electric, ice', '777');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `pokemon`
--
ALTER TABLE `pokemon`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pokemon`
--
ALTER TABLE `pokemon`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
