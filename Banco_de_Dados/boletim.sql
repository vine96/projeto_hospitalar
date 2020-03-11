-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 06-Jun-2019 às 03:06
-- Versão do servidor: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `miojo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `boletim`
--

CREATE TABLE `boletim` (
  `ID_BOLETIM` int(11) NOT NULL,
  `PESO` varchar(45) DEFAULT NULL,
  `TEMPERATURA` varchar(45) DEFAULT NULL,
  `FREQUENCIA_CARDIACA` varchar(45) DEFAULT NULL,
  `SINAIS_DOR` varchar(45) DEFAULT NULL,
  `MOTIVO` varchar(45) DEFAULT NULL,
  `SINAIS_VITAIS` varchar(45) DEFAULT NULL,
  `HIPOTESE` varchar(45) DEFAULT NULL,
  `PACIENTE_ID_PACIENTE` int(11) NOT NULL,
  `PRIORIDADE_ID_PRIORIDADE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `boletim`
--

INSERT INTO `boletim` (`ID_BOLETIM`, `PESO`, `TEMPERATURA`, `FREQUENCIA_CARDIACA`, `SINAIS_DOR`, `MOTIVO`, `SINAIS_VITAIS`, `HIPOTESE`, `PACIENTE_ID_PACIENTE`, `PRIORIDADE_ID_PRIORIDADE`) VALUES
(1, '64', '38', '101', 'Não', NULL, '12/8', 'Gripe', 3, 3),
(2, '1', '', '', 'Sim', NULL, '', '', 3, 0),
(3, '100', '38', '100', 'Sim', NULL, '12.8', 'nenhuma', 3, 0),
(4, '1', '1', '1', 'Sim', NULL, '1', '1', 3, 0),
(5, '100kg', '36c', '100bpm', 'Sim', NULL, '12/1000', 'nenhuma', 3, 0),
(6, '10', '10', '10', 'Sim', NULL, '10', '', 5, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `boletim`
--
ALTER TABLE `boletim`
  ADD PRIMARY KEY (`ID_BOLETIM`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `boletim`
--
ALTER TABLE `boletim`
  MODIFY `ID_BOLETIM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
