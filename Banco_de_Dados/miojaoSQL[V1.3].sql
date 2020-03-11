-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09-Maio-2019 às 02:33
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
-- Estrutura da tabela `alergia`
--

CREATE TABLE `alergia` (
  `ID_ALERGIA` int(11) NOT NULL,
  `DESCRICAO` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `anexo`
--

CREATE TABLE `anexo` (
  `ID_ANEXO` int(11) NOT NULL,
  `ANEXO` varchar(45) DEFAULT NULL,
  `ATENDIMENTO_ID_ATENDIMENTO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `atendimento`
--

CREATE TABLE `atendimento` (
  `ID_ATENDIMENTO` int(11) NOT NULL,
  `TIPO` varchar(45) DEFAULT NULL,
  `TRATAMENTO` varchar(45) DEFAULT NULL,
  `DATA_HORA_INTERNACAO` timestamp NULL DEFAULT NULL,
  `DATA_HORA_SAIDA` timestamp NULL DEFAULT NULL,
  `HOSPITAL` int(11) DEFAULT NULL,
  `BOLETIM_ID_BOLETIM` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `atendimento_has_exame`
--

CREATE TABLE `atendimento_has_exame` (
  `ATENDIMENTO_ID_ATENDIMENTO` int(11) NOT NULL,
  `EXAME_ID_EXAME` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `cargo`
--

CREATE TABLE `cargo` (
  `ID_CARGO` int(11) NOT NULL,
  `DESCRICAO` varchar(45) DEFAULT NULL,
  `PERMISSAO` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cargo`
--

INSERT INTO `cargo` (`ID_CARGO`, `DESCRICAO`, `PERMISSAO`) VALUES
(1, 'Farmacêutico', NULL),
(2, 'Médico', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidade`
--

CREATE TABLE `cidade` (
  `ID_CIDADE` int(11) NOT NULL,
  `NOME_CIDADE` varchar(45) DEFAULT NULL,
  `ESTADO_ID_ESTADO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `compra`
--

CREATE TABLE `compra` (
  `ID_COMPRA` int(11) NOT NULL,
  `FUNCIONARIO_ID_FUNCIONARIO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE `endereco` (
  `ID_ENDERECO` int(11) NOT NULL,
  `CEP` varchar(45) DEFAULT NULL,
  `BAIRRO` varchar(45) DEFAULT NULL,
  `NUMERO` varchar(10) DEFAULT NULL,
  `RUA` varchar(45) DEFAULT NULL,
  `COMPLEMENTO` varchar(100) DEFAULT NULL,
  `CIDADE_ID_CIDADE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `estado`
--

CREATE TABLE `estado` (
  `ID_ESTADO` int(11) NOT NULL,
  `NOME_ESTADO` varchar(45) DEFAULT NULL,
  `UF` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `exame`
--

CREATE TABLE `exame` (
  `ID_EXAME` int(11) NOT NULL,
  `DESCRICAO` varchar(45) DEFAULT NULL,
  `TIPO_EXAME_ID_TIPO_EXAME` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `ID_FUNCIONARIO` int(11) NOT NULL,
  `LOGIN` varchar(45) DEFAULT NULL,
  `SENHA` varchar(45) DEFAULT NULL,
  `EMAIL` varchar(45) DEFAULT NULL,
  `STATUS` varchar(45) DEFAULT NULL,
  `PESSOA_ID_PESSOA` int(11) NOT NULL,
  `CARGO_ID_CARGO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`ID_FUNCIONARIO`, `LOGIN`, `SENHA`, `EMAIL`, `STATUS`, `PESSOA_ID_PESSOA`, `CARGO_ID_CARGO`) VALUES
(1, 'login', 'senha', 'salkdçal@hotmail.com', 'ativo', 0, 1),
(2, 'ruhan', 'senha', 'ruhan', NULL, 0, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario_has_atendimento`
--

CREATE TABLE `funcionario_has_atendimento` (
  `FUNCIONARIO_ID_FUNCIONARIO` int(11) NOT NULL,
  `ATENDIMENTO_ID_ATENDIMENTO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `paciente`
--

CREATE TABLE `paciente` (
  `ID_PACIENTE` int(11) NOT NULL,
  `PROFISSAO` varchar(45) DEFAULT NULL,
  `RESPONSAVEL_ID_RESPONSAVEL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `paciente_has_alergia`
--

CREATE TABLE `paciente_has_alergia` (
  `PACIENTE_ID_PACIENTE` int(11) NOT NULL,
  `ALERGIA_ID_ALERGIA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE `pessoa` (
  `ID_PESSOA` int(11) NOT NULL,
  `NOME` varchar(45) DEFAULT NULL,
  `DATA_NASCIMENTO` date DEFAULT NULL,
  `CPF` varchar(45) DEFAULT NULL,
  `RG` varchar(45) DEFAULT NULL,
  `ESTADO_CIVIL` varchar(45) DEFAULT NULL,
  `SEXO` varchar(1) DEFAULT NULL,
  `ENDERECO_ID_ENDERECO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `prioridade`
--

CREATE TABLE `prioridade` (
  `ID_PRIORIDADE` int(11) NOT NULL,
  `DESCRICAO` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `remedio`
--

CREATE TABLE `remedio` (
  `ID_REMEDIO` int(11) NOT NULL,
  `FABRICANTE` varchar(45) DEFAULT NULL,
  `SERIE` varchar(45) DEFAULT NULL,
  `DATA_VALIDADE` date DEFAULT NULL,
  `DATA_FABRICACAO` date DEFAULT NULL,
  `CONTRAINDICACAO` varchar(45) DEFAULT NULL,
  `NOME` varchar(45) DEFAULT NULL,
  `POSOLOGIA` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `remedio_has_atendimento`
--

CREATE TABLE `remedio_has_atendimento` (
  `REMEDIO_ID_REMEDIO` int(11) NOT NULL,
  `ATENDIMENTO_ID_ATENDIMENTO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `remedio_has_compra`
--

CREATE TABLE `remedio_has_compra` (
  `REMEDIO_ID_REMEDIO` int(11) NOT NULL,
  `COMPRA_ID_COMPRA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `responsavel`
--

CREATE TABLE `responsavel` (
  `ID_RESPONSAVEL` int(11) NOT NULL,
  `PESSOA_ID_PESSOA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_exame`
--

CREATE TABLE `tipo_exame` (
  `ID_TIPO_EXAME` int(11) NOT NULL,
  `DESCRICAO` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alergia`
--
ALTER TABLE `alergia`
  ADD PRIMARY KEY (`ID_ALERGIA`);

--
-- Indexes for table `anexo`
--
ALTER TABLE `anexo`
  ADD PRIMARY KEY (`ID_ANEXO`,`ATENDIMENTO_ID_ATENDIMENTO`);

--
-- Indexes for table `atendimento`
--
ALTER TABLE `atendimento`
  ADD PRIMARY KEY (`ID_ATENDIMENTO`);

--
-- Indexes for table `atendimento_has_exame`
--
ALTER TABLE `atendimento_has_exame`
  ADD PRIMARY KEY (`ATENDIMENTO_ID_ATENDIMENTO`,`EXAME_ID_EXAME`);

--
-- Indexes for table `boletim`
--
ALTER TABLE `boletim`
  ADD PRIMARY KEY (`ID_BOLETIM`);

--
-- Indexes for table `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`ID_CARGO`);

--
-- Indexes for table `cidade`
--
ALTER TABLE `cidade`
  ADD PRIMARY KEY (`ID_CIDADE`);

--
-- Indexes for table `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`ID_COMPRA`);

--
-- Indexes for table `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`ID_ENDERECO`);

--
-- Indexes for table `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`ID_ESTADO`);

--
-- Indexes for table `exame`
--
ALTER TABLE `exame`
  ADD PRIMARY KEY (`ID_EXAME`);

--
-- Indexes for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`ID_FUNCIONARIO`),
  ADD KEY `CARGO_ID_CARGO` (`CARGO_ID_CARGO`);

--
-- Indexes for table `funcionario_has_atendimento`
--
ALTER TABLE `funcionario_has_atendimento`
  ADD PRIMARY KEY (`FUNCIONARIO_ID_FUNCIONARIO`,`ATENDIMENTO_ID_ATENDIMENTO`);

--
-- Indexes for table `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`ID_PACIENTE`);

--
-- Indexes for table `paciente_has_alergia`
--
ALTER TABLE `paciente_has_alergia`
  ADD PRIMARY KEY (`PACIENTE_ID_PACIENTE`,`ALERGIA_ID_ALERGIA`);

--
-- Indexes for table `pessoa`
--
ALTER TABLE `pessoa`
  ADD PRIMARY KEY (`ID_PESSOA`);

--
-- Indexes for table `prioridade`
--
ALTER TABLE `prioridade`
  ADD PRIMARY KEY (`ID_PRIORIDADE`);

--
-- Indexes for table `remedio`
--
ALTER TABLE `remedio`
  ADD PRIMARY KEY (`ID_REMEDIO`);

--
-- Indexes for table `remedio_has_atendimento`
--
ALTER TABLE `remedio_has_atendimento`
  ADD PRIMARY KEY (`REMEDIO_ID_REMEDIO`,`ATENDIMENTO_ID_ATENDIMENTO`);

--
-- Indexes for table `remedio_has_compra`
--
ALTER TABLE `remedio_has_compra`
  ADD PRIMARY KEY (`REMEDIO_ID_REMEDIO`,`COMPRA_ID_COMPRA`);

--
-- Indexes for table `responsavel`
--
ALTER TABLE `responsavel`
  ADD PRIMARY KEY (`ID_RESPONSAVEL`);

--
-- Indexes for table `tipo_exame`
--
ALTER TABLE `tipo_exame`
  ADD PRIMARY KEY (`ID_TIPO_EXAME`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alergia`
--
ALTER TABLE `alergia`
  MODIFY `ID_ALERGIA` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `anexo`
--
ALTER TABLE `anexo`
  MODIFY `ID_ANEXO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `atendimento`
--
ALTER TABLE `atendimento`
  MODIFY `ID_ATENDIMENTO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `boletim`
--
ALTER TABLE `boletim`
  MODIFY `ID_BOLETIM` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cargo`
--
ALTER TABLE `cargo`
  MODIFY `ID_CARGO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cidade`
--
ALTER TABLE `cidade`
  MODIFY `ID_CIDADE` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `endereco`
--
ALTER TABLE `endereco`
  MODIFY `ID_ENDERECO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `estado`
--
ALTER TABLE `estado`
  MODIFY `ID_ESTADO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exame`
--
ALTER TABLE `exame`
  MODIFY `ID_EXAME` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `ID_FUNCIONARIO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `paciente`
--
ALTER TABLE `paciente`
  MODIFY `ID_PACIENTE` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pessoa`
--
ALTER TABLE `pessoa`
  MODIFY `ID_PESSOA` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prioridade`
--
ALTER TABLE `prioridade`
  MODIFY `ID_PRIORIDADE` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `remedio`
--
ALTER TABLE `remedio`
  MODIFY `ID_REMEDIO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tipo_exame`
--
ALTER TABLE `tipo_exame`
  MODIFY `ID_TIPO_EXAME` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD CONSTRAINT `funcionario_ibfk_1` FOREIGN KEY (`CARGO_ID_CARGO`) REFERENCES `cargo` (`ID_CARGO`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
