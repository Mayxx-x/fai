-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Nov-2022 às 19:33
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `faiimoveis`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `add_info`
--

CREATE TABLE `add_info` (
  `ID` int(11) NOT NULL,
  `quartos` varchar(255) NOT NULL,
  `wc` varchar(255) NOT NULL,
  `vagas` varchar(255) NOT NULL,
  `autil` varchar(255) NOT NULL,
  `atotal` varchar(255) NOT NULL,
  `casasquant` varchar(255) NOT NULL,
  `regdate` varchar(255) NOT NULL,
  `lasedit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `add_info`
--

INSERT INTO `add_info` (`ID`, `quartos`, `wc`, `vagas`, `autil`, `atotal`, `casasquant`, `regdate`, `lasedit`) VALUES
(2, '3', '3', '1', '45', '55', '3', '', ''),
(3, '3', '3', '1', '45', '55', '3', '', ''),
(4, '3', '3', '1', '45', '55', '3', '', ''),
(5, '3', '3', '1', '45', '55', '3', '', ''),
(6, '3', '3', '1', '45', '55', '3', '', ''),
(7, '3', '3', '1', '45', '55', '3', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `back_info`
--

CREATE TABLE `back_info` (
  `nreg` varchar(255) NOT NULL,
  `corretor` varchar(255) NOT NULL,
  `captador` varchar(255) NOT NULL,
  `preenchpor` varchar(255) NOT NULL,
  `garantias` varchar(255) NOT NULL,
  `condicoes` varchar(255) NOT NULL,
  `chaves` varchar(255) NOT NULL,
  `obs` varchar(255) NOT NULL,
  `excl` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `bool_info`
--

CREATE TABLE `bool_info` (
  `ID` int(11) NOT NULL,
  `accanim` tinyint(1) NOT NULL,
  `aguaind` tinyint(1) NOT NULL,
  `luzind` tinyint(1) NOT NULL,
  `placa` tinyint(1) NOT NULL,
  `fotos` tinyint(1) NOT NULL,
  `sala` tinyint(1) NOT NULL,
  `cozinha` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `imv_abt`
--

CREATE TABLE `imv_abt` (
  `ID` int(11) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `imvtp` varchar(255) NOT NULL,
  `subtp` varchar(255) NOT NULL,
  `desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `imv_loc`
--

CREATE TABLE `imv_loc` (
  `ID` int(11) NOT NULL,
  `end` varchar(255) NOT NULL,
  `numero` varchar(255) NOT NULL,
  `bairro` varchar(255) NOT NULL,
  `imed` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `prop_data`
--

CREATE TABLE `prop_data` (
  `ID` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `numero` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `rent`
--

CREATE TABLE `rent` (
  `ID` int(11) NOT NULL,
  `valor_v` varchar(255) NOT NULL,
  `valor_a` varchar(255) NOT NULL,
  `iptu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `add_info`
--
ALTER TABLE `add_info`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `bool_info`
--
ALTER TABLE `bool_info`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `imv_abt`
--
ALTER TABLE `imv_abt`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `imv_loc`
--
ALTER TABLE `imv_loc`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `prop_data`
--
ALTER TABLE `prop_data`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `rent`
--
ALTER TABLE `rent`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `add_info`
--
ALTER TABLE `add_info`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `bool_info`
--
ALTER TABLE `bool_info`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `imv_abt`
--
ALTER TABLE `imv_abt`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `imv_loc`
--
ALTER TABLE `imv_loc`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `prop_data`
--
ALTER TABLE `prop_data`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `rent`
--
ALTER TABLE `rent`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
