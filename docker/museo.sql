-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2017 at 05:26 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `museo`
--

-- --------------------------------------------------------

--
-- Table structure for table `colecao`
--

CREATE TABLE `colecao` (
  `id` bigint(11) NOT NULL,
  `idMuseu` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `descricao` text,
  `data` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `endereco`
--

CREATE TABLE `endereco` (
  `id` int(11) NOT NULL,
  `rua` varchar(500) NOT NULL,
  `numero` varchar(30) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `pais` varchar(30) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `titulo` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `museu`
--

CREATE TABLE `museu` (
  `id` int(11) NOT NULL,
  `nome` varchar(300) NOT NULL,
  `site` varchar(200) DEFAULT NULL,
  `data` varchar(20) DEFAULT NULL,
  `telefone` varchar(100) DEFAULT NULL,
  `horaAberto` varchar(11) DEFAULT NULL,
  `horaFechado` varchar(11) DEFAULT NULL,
  `descricao` text,
  `endereco` varchar(200) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `estado` varchar(2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `museu`
--

INSERT INTO `museu` (`id`, `nome`, `site`, `data`, `telefone`, `horaAberto`, `horaFechado`, `descricao`, `endereco`, `cidade`, `estado`) VALUES
(161, 'Museu de Exemplo', 'exemplo.com.br', '22/07/2017', '539998887', '08:00', '18:00', 'Um museu de exemplo qualquer.', 'Endereço X, numero 1', 'Pelotas', 'RS');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `cpf` varchar(14) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `tipo` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`cpf`, `nome`, `email`, `senha`, `tipo`) VALUES
('111.111.111-11', 'Fulano da SIlva', 'fulano@gmail.com', 'museo', 3);

-- --------------------------------------------------------

--
-- Table structure for table `usuario_museu`
--

CREATE TABLE `usuario_museu` (
  `id` bigint(20) NOT NULL,
  `cpfUsuario` varchar(14) NOT NULL,
  `idMuseu` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario_museu`
--

INSERT INTO `usuario_museu` (`id`, `cpfUsuario`, `idMuseu`) VALUES
(41, '111.111.111-11', 161);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `colecao`
--
ALTER TABLE `colecao`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `museu`
--
ALTER TABLE `museu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cpf`);

--
-- Indexes for table `usuario_museu`
--
ALTER TABLE `usuario_museu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `colecao`
--
ALTER TABLE `colecao`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `museu`
--
ALTER TABLE `museu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;
--
-- AUTO_INCREMENT for table `usuario_museu`
--
ALTER TABLE `usuario_museu`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
