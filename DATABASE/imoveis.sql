-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 19, 2022 at 08:16 PM
-- Server version: 8.0.27
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `faiimoveis`
--

-- --------------------------------------------------------

--
-- Table structure for table `imoveis`
--

DROP TABLE IF EXISTS `imoveis`;
CREATE TABLE IF NOT EXISTS `imoveis` (
  `ID` int NOT NULL,
  `nreg` varchar(20) NOT NULL,
  `tipo` varchar(10) NOT NULL,
  `imvTp` varchar(20) CHARACTER SET utf16 COLLATE utf16_bin NOT NULL,
  `subTp` varchar(10) NOT NULL,
  `end` varchar(50) NOT NULL,
  `numero` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `bairro` varchar(20) NOT NULL,
  `imediacoes` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `descricao` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `comp` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `cep` int NOT NULL,
  `quartos` int NOT NULL,
  `sala` varchar(40) NOT NULL,
  `cozinha` varchar(40) NOT NULL,
  `wc` varchar(40) NOT NULL,
  `vagas` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `adicionais` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `chaves` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `garantias` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `condicoes` varchar(100) DEFAULT NULL,
  `autil` int DEFAULT NULL,
  `atotal` int DEFAULT NULL,
  `excl` varchar(5) NOT NULL,
  `iptu` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `casasquant` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `accanim` varchar(5) NOT NULL,
  `aguaind` varchar(5) NOT NULL,
  `luzind` varchar(5) NOT NULL,
  `placa` varchar(5) NOT NULL,
  `fotos` varchar(5) NOT NULL,
  `prop` varchar(50) NOT NULL,
  `propT` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `propE` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `obs` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `captador` varchar(15) NOT NULL,
  `corretor` varchar(15) NOT NULL,
  `preenchpor` varchar(15) NOT NULL,
  `valor` varchar(50) NOT NULL,
  `insDate` varchar(10) NOT NULL,
  `lastEdit` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `imoveis`
--

INSERT INTO `imoveis` (`ID`, `nreg`, `tipo`, `imvTp`, `subTp`, `end`, `numero`, `bairro`, `imediacoes`, `descricao`, `comp`, `cep`, `quartos`, `sala`, `cozinha`, `wc`, `vagas`, `adicionais`, `chaves`, `garantias`, `condicoes`, `autil`, `atotal`, `excl`, `iptu`, `casasquant`, `accanim`, `aguaind`, `luzind`, `placa`, `fotos`, `prop`, `propT`, `propE`, `obs`, `captador`, `corretor`, `preenchpor`, `valor`, `insDate`, `lastEdit`) VALUES
(1, '54122002', 'venda', 'Casa', 'Térreo', 'Rua Augusta', '554', 'sao paulo', 'Av. paulista', 'legal', 'nao', 55412602, 3, 'sim', 'sim', '3', '3', 'nao', 'imobiliaria', 'seguro fiança', 'varias', 110, 120, 'false', '0', '0', 'false', 'false', 'false', 'false', 'false', 'Joao', NULL, NULL, 'sim', 'Alvaro', 'f. Alves', 'Alvaro', '550.000', '19/04/22', '19/04/22'),
(2, '54122002', 'venda', 'Casa', 'Térreo', 'Rua Augusta', '554', 'sao paulo', 'Av. paulista', 'legal', 'nao', 55412602, 3, 'sim', 'sim', '3', '3', 'nao', 'imobiliaria', 'seguro fiança', 'varias', 110, 120, 'false', '0', '0', 'false', 'false', 'false', 'false', 'false', 'Joao', NULL, NULL, 'sim', 'Alvaro', 'f. Alves', 'Alvaro', '550.000', '19/04/22', '19/04/22');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
