-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 30-Maio-2019 às 02:22
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
(2, 'Médico', NULL),
(5, 'Enfermeiro', 'cadastros'),
(6, 'Administrador', 'total'),
(8, 'Técnico de Exame', NULL);

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
  `CIDADE` varchar(80) NOT NULL,
  `ESTADO` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `endereco`
--

INSERT INTO `endereco` (`ID_ENDERECO`, `CEP`, `BAIRRO`, `NUMERO`, `RUA`, `COMPLEMENTO`, `CIDADE`, `ESTADO`) VALUES
(1, '91240010', 'Jardim Leopoldina', '305', 'Jandyr', '505', '', ''),
(2, '91240015', 'Jardim Carvalho', '4687', 'não sei o nome', '5050', '', ''),
(3, '', '', '', '', '', '', ''),
(4, '94858450', 'Jardim Leopoldina', '', 'Rua Jandyr Maya Faillace', '', '', ''),
(5, '91240010', 'Jardim Leopoldina', '305', 'Rua Jandyr Maya Faillace', '', '', ''),
(6, '91240010', 'Jardim Leopoldina', '305', 'Rua Jandyr Maya Faillace', '405', 'Porto Alegre', 'RS');

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
(1, 'login', 'd41d8cd98f00b204e9800998ecf8427e', 'salkdçal@hotmail.com', 'ativo', 0, 6),
(2, 'ruhan', 'd41d8cd98f00b204e9800998ecf8427e', 'ruhan', NULL, 0, 2),
(30, 'enfermeiro', 'd41d8cd98f00b204e9800998ecf8427e', 'douglas@email.com', NULL, 19, 5),
(31, 'farmaceutico', 'd41d8cd98f00b204e9800998ecf8427e', 'farm@lalal.com', NULL, 22, 1),
(32, 'teste', 'd41d8cd98f00b204e9800998ecf8427e', 'douglas@email.com', NULL, 23, 8),
(33, 'douglas', 'd41d8cd98f00b204e9800998ecf8427e', 'douglas@lalala.com', NULL, 25, 1),
(34, 'jose', 'd41d8cd98f00b204e9800998ecf8427e', '', NULL, 29, 8),
(35, 'maria', 'd41d8cd98f00b204e9800998ecf8427e', 'maria@maria.com', NULL, 30, 8),
(36, 'aaaa', 'd41d8cd98f00b204e9800998ecf8427e', 'joao.machado@laureate.com.br', NULL, 31, 8);

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
  `RESPONSAVEL_ID_RESPONSAVEL` int(11) NOT NULL,
  `PESSOA_ID_PESSOA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `paciente`
--

INSERT INTO `paciente` (`ID_PACIENTE`, `PROFISSAO`, `RESPONSAVEL_ID_RESPONSAVEL`, `PESSOA_ID_PESSOA`) VALUES
(1, '', 0, 0),
(2, '', 0, 0),
(3, 'Pedreiro', 1, 20);

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
  `NOME` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `DATA_NASCIMENTO` date DEFAULT NULL,
  `CPF` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `RG` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `ESTADO_CIVIL` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `SEXO` varchar(1) CHARACTER SET utf8 DEFAULT NULL,
  `ENDERECO_ID_ENDERECO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`ID_PESSOA`, `NOME`, `DATA_NASCIMENTO`, `CPF`, `RG`, `ESTADO_CIVIL`, `SEXO`, `ENDERECO_ID_ENDERECO`) VALUES
(13, 'VinÃ­cius Furtado Pecci de Lima', '1996-10-11', '03552134000', '64564646465', 'solteiro', 'm', 0),
(19, 'Douglas Garcia', '1997-07-01', '86846558001', '0000000000', 'solteiro', 'm', 0),
(20, 'Ruhan', '1990-01-01', '11111111111', '111111111111', 'viúvo', 'm', 0),
(21, 'Eduardo', '1999-01-01', '222222222', '22222222', 'casado', 'm', 0),
(22, 'Gabriel', '2000-02-02', '22222222222', '22222222', 'separado', 'm', 0),
(23, 'Vinícius Furtado Pecci Lima', '1996-10-11', '86846558001', '22222222', 'solteiro', 'm', 0),
(24, 'Alana', '1990-01-01', '12334545', '23423423', 'solteiro', 'f', 0),
(25, 'Douglas Garcia', '2016-01-01', '86846558001', '0000000000', 'solteiro', 'm', 0),
(26, 'Ruhan', '1900-08-08', '111111111', '11111111', 'solteiro', 'm', 0),
(27, 'fdgdfgd', '0000-00-00', 'fgdfgdf', 'gdfgdfgdf', 'solteiro', 'm', 0),
(28, 'fdgdfgd', '0000-00-00', 'fgdfgdf', 'gdfgdfgdf', 'solteiro', 'm', 0),
(29, 'José Eduardo', '0000-00-00', '035.521.340-00', '446464654654654', 'solteiro', 'm', 0),
(30, 'Douglas', '0000-00-00', '654.654.654-65', '654654646565', 'solteiro', 'm', 0),
(31, 'fsdfsdf', '0000-00-00', '654.654.654-65', '654646546546', 'solteiro', 'm', 0),
(32, 'José Eduardo', '0000-00-00', '56465465465465', '6546465465', 'solteiro', 'm', 0),
(33, 'José Eduardo', '0000-00-00', '56465465465465', '6546465465', 'solteiro', 'm', 0),
(34, 'José Eduardo', '0000-00-00', '035.521.340-00', '446465464654', 'solteiro', 'm', 0),
(35, 'José Eduardo', '0000-00-00', '035.521.340-00', '446465464654', 'solteiro', 'm', 0);

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

--
-- Extraindo dados da tabela `remedio`
--

INSERT INTO `remedio` (`ID_REMEDIO`, `FABRICANTE`, `SERIE`, `DATA_VALIDADE`, `DATA_FABRICACAO`, `CONTRAINDICACAO`, `NOME`, `POSOLOGIA`) VALUES
(1, 'tester', '', '0000-00-00', '0000-00-00', '', '', 'não tem'),
(2, 'tester', '', '0000-00-00', '0000-00-00', '', 'lozatro', 'teste'),
(3, 'tester', '', '0000-00-00', '0000-00-00', 'tester', 'lozatro', 'mt teste'),
(4, '', '1', '0000-00-00', '0000-00-00', '', '', '');

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

--
-- Extraindo dados da tabela `responsavel`
--

INSERT INTO `responsavel` (`ID_RESPONSAVEL`, `PESSOA_ID_PESSOA`) VALUES
(0, 21),
(1, 13);

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
  MODIFY `ID_CARGO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cidade`
--
ALTER TABLE `cidade`
  MODIFY `ID_CIDADE` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `endereco`
--
ALTER TABLE `endereco`
  MODIFY `ID_ENDERECO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `ID_FUNCIONARIO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `paciente`
--
ALTER TABLE `paciente`
  MODIFY `ID_PACIENTE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pessoa`
--
ALTER TABLE `pessoa`
  MODIFY `ID_PESSOA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `prioridade`
--
ALTER TABLE `prioridade`
  MODIFY `ID_PRIORIDADE` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `remedio`
--
ALTER TABLE `remedio`
  MODIFY `ID_REMEDIO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
