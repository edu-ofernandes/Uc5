-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15-Out-2019 às 22:35
-- Versão do servidor: 10.1.40-MariaDB
-- versão do PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gamecontroler`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administradores`
--

CREATE TABLE `administradores` (
  `id` int(11) NOT NULL,
  `nome` varchar(95) CHARACTER SET utf8mb4 NOT NULL,
  `email` varchar(95) CHARACTER SET utf8mb4 NOT NULL,
  `senha` varchar(45) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `administradores`
--

INSERT INTO `administradores` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Eduardo', 'edu@gmail.com', 'd0f7db40e698109f62a4de9e7b2b93dd');

-- --------------------------------------------------------

--
-- Estrutura da tabela `atividades`
--
-- Error reading structure for table gamecontroler.atividades: #1932 - Table 'gamecontroler.atividades' doesn't exist in engine
-- Error reading data for table gamecontroler.atividades: #1064 - Você tem um erro de sintaxe no seu SQL próximo a 'FROM `gamecontroler`.`atividades`' na linha 1

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nome` varchar(90) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`) VALUES
(1, 'Corrida'),
(2, 'Luta'),
(3, 'Mundo Aberto'),
(4, 'Rpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogos`
--

CREATE TABLE `jogos` (
  `id` int(11) NOT NULL,
  `nome` varchar(90) CHARACTER SET utf8mb4 DEFAULT NULL,
  `foto` longtext,
  `categorias_id` int(11) NOT NULL,
  `descricao` varchar(200) CHARACTER SET utf8mb4 DEFAULT NULL,
  `link` longtext CHARACTER SET utf8mb4
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `jogos`
--

INSERT INTO `jogos` (`id`, `nome`, `foto`, `categorias_id`, `descricao`, `link`) VALUES
(1, 'Gta V', '04da4fd01cd6d6b3c50b689fd34bfcc2c.jpg', 3, 'Quinto jogo da franquia GTA, produzido pela Rockstar', 'https://www.youtube.com/watch?v=QkkoHAzjnUs');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogosdosusuarios`
--

CREATE TABLE `jogosdosusuarios` (
  `usuarios_id` int(11) NOT NULL,
  `jogos_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(90) CHARACTER SET utf8mb4 DEFAULT NULL,
  `foto` longtext CHARACTER SET utf8mb4,
  `bio` longtext CHARACTER SET utf8mb4,
  `email` varchar(95) CHARACTER SET utf8mb4 DEFAULT NULL,
  `senha` varchar(90) CHARACTER SET utf8mb4 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `foto`, `bio`, `email`, `senha`) VALUES
(1, 'Lionel Messi', '0eb4b5a4a9a83d1c8f3e56c46657f20c7.jpg', 'teste', 'lionel_messi@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jogos`
--
ALTER TABLE `jogos`
  ADD PRIMARY KEY (`id`,`categorias_id`),
  ADD KEY `fk_jogos_categorias1_idx` (`categorias_id`);

--
-- Indexes for table `jogosdosusuarios`
--
ALTER TABLE `jogosdosusuarios`
  ADD PRIMARY KEY (`usuarios_id`,`jogos_id`),
  ADD KEY `fk_usuarios_has_jogos_jogos1_idx` (`jogos_id`),
  ADD KEY `fk_usuarios_has_jogos_usuarios_idx` (`usuarios_id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jogos`
--
ALTER TABLE `jogos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `jogos`
--
ALTER TABLE `jogos`
  ADD CONSTRAINT `fk_jogos_categorias1` FOREIGN KEY (`categorias_id`) REFERENCES `categorias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `jogosdosusuarios`
--
ALTER TABLE `jogosdosusuarios`
  ADD CONSTRAINT `fk_usuarios_has_jogos_jogos1` FOREIGN KEY (`jogos_id`) REFERENCES `jogos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuarios_has_jogos_usuarios` FOREIGN KEY (`usuarios_id`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
