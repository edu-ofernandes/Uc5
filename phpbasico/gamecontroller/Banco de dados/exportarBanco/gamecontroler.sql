-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 30-Set-2019 às 21:41
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
  `nome` varchar(95) NOT NULL,
  `email` varchar(95) NOT NULL,
  `senha` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `administradores`
--

INSERT INTO `administradores` (`id`, `nome`, `email`, `senha`) VALUES
(41, 'Eduardo', 'edu@gmail.com', '202cb962ac59075b964b07152d234b70');

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
  `nome` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`) VALUES
(1, 'Corrida'),
(6, 'Fps'),
(8, 'AÃ§ao'),
(9, 'Luta'),
(10, 'Rpg'),
(11, 'Mundo aberto');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogos`
--

CREATE TABLE `jogos` (
  `id` int(11) NOT NULL,
  `nome` varchar(90) DEFAULT NULL,
  `categorias_id` int(11) NOT NULL,
  `foto` longtext,
  `descricao` varchar(200) DEFAULT NULL,
  `link` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `jogos`
--

INSERT INTO `jogos` (`id`, `nome`, `categorias_id`, `foto`, `descricao`, `link`) VALUES
(18, 'Gta V', 11, '01c699a7b3b75fcb366fcba7c8977ec61.jpg', NULL, NULL),
(19, 'Midnight Club 3: DUB Edition', 1, '0c6ba2f769df316c392a732dcc688162e.jpg', NULL, NULL),
(20, 'Need For Speed Payback', 1, '05ba573546572f714df14aa1c3b583dc2.jpg', NULL, NULL),
(21, 'Dark Soul ', 10, '0042a2dc3c6f3f59889954c831e12209a.jpg', NULL, NULL),
(22, 'Pubg', 6, '06e68f31c5fd98d1730492e5373cc7ccf.jpg', NULL, NULL),
(23, 'Mortal Kombat X', 9, '050da5aa46d8b88740e7f8b8bc409f6b8.jpg', NULL, NULL);

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
  `nome` varchar(90) DEFAULT NULL,
  `foto` longtext,
  `bio` longtext,
  `email` varchar(95) DEFAULT NULL,
  `senha` varchar(90) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `foto`, `bio`, `email`, `senha`) VALUES
(2, 'Eduardo-Teste2', '049e77a316b9bbed3e6b910b7ab9f1e14.jpg', 'teste2', 'edu2@gmail.com', 'b8020e8e15c5362a7ac49800e3e86e99');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `jogos`
--
ALTER TABLE `jogos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
