-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19-Jun-2019 às 19:27
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
  `HOSPITAL` int(11) NOT NULL,
  `BOLETIM_ID_BOLETIM` int(11) NOT NULL,
  `ALTA` int(11) NOT NULL,
  `OBITO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `atendimento`
--

INSERT INTO `atendimento` (`ID_ATENDIMENTO`, `TIPO`, `TRATAMENTO`, `DATA_HORA_INTERNACAO`, `DATA_HORA_SAIDA`, `HOSPITAL`, `BOLETIM_ID_BOLETIM`, `ALTA`, `OBITO`) VALUES
(1, NULL, 'teste', '0000-00-00 00:00:00', NULL, 0, 1, 0, 0),
(2, NULL, NULL, '0000-00-00 00:00:00', NULL, 0, 7, 0, 1),
(3, NULL, NULL, '0000-00-00 00:00:00', NULL, 1, 4, 0, 0),
(5, NULL, NULL, '0000-00-00 00:00:00', NULL, 0, 3, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `atendimento_has_exame`
--

CREATE TABLE `atendimento_has_exame` (
  `ATENDIMENTO_ID_ATENDIMENTO` int(11) NOT NULL,
  `EXAME_ID_EXAME` int(11) NOT NULL,
  `STATUS` varchar(10) NOT NULL,
  `ID_TECNICO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `atendimento_has_exame`
--

INSERT INTO `atendimento_has_exame` (`ATENDIMENTO_ID_ATENDIMENTO`, `EXAME_ID_EXAME`, `STATUS`, `ID_TECNICO`) VALUES
(2, 21, 'FINALIZADO', 40),
(2, 25, 'AGUARDANDO', 40);

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
  `PRIORIDADE_ID_PRIORIDADE` int(11) NOT NULL,
  `ID_MEDICO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `boletim`
--

INSERT INTO `boletim` (`ID_BOLETIM`, `PESO`, `TEMPERATURA`, `FREQUENCIA_CARDIACA`, `SINAIS_DOR`, `MOTIVO`, `SINAIS_VITAIS`, `HIPOTESE`, `PACIENTE_ID_PACIENTE`, `PRIORIDADE_ID_PRIORIDADE`, `ID_MEDICO`) VALUES
(1, '64', '38', '101', 'Não', NULL, '12/8', 'Gripe', 3, 3, 2),
(2, '1', '', '', 'Sim', NULL, '', '', 4, 1, NULL),
(3, '100', '38', '100', 'Sim', NULL, '12.8', 'nenhuma', 7, 3, 39),
(4, '1', '1', '1', 'Sim', NULL, '1', '1', 8, 2, 39),
(5, '100kg', '36c', '100bpm', 'Sim', NULL, '12/1000', 'nenhuma', 3, 3, NULL),
(6, '10', '10', '10', 'Sim', NULL, '10', '', 5, 2, NULL),
(7, '100', '36º', '100', 'Sim', NULL, 'n sei', 'n sei', 6, 1, 39);

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
(6, '91240010', 'Jardim Leopoldina', '305', 'Rua Jandyr Maya Faillace', '405', 'Porto Alegre', 'RS'),
(7, '91240010', 'Jardim Leopoldina', '305', 'Rua Jandyr Maya Faillace', '405', 'Porto Alegre', 'RS');

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
-- Estrutura da tabela `estoque`
--

CREATE TABLE `estoque` (
  `ID_ESTOQUE` int(11) NOT NULL,
  `REMEDIO_ID_REMEDIO` int(11) NOT NULL,
  `QUANTIDADE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `estoque`
--

INSERT INTO `estoque` (`ID_ESTOQUE`, `REMEDIO_ID_REMEDIO`, `QUANTIDADE`) VALUES
(2, 20, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `exame`
--

CREATE TABLE `exame` (
  `ID_EXAME` int(11) NOT NULL,
  `DESCRICAO_EXAME` varchar(45) DEFAULT NULL,
  `ID_TIPO` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `exame`
--

INSERT INTO `exame` (`ID_EXAME`, `DESCRICAO_EXAME`, `ID_TIPO`) VALUES
(20, 'raio x de ombro', 2),
(21, 'holter', 1),
(25, 'teste', 0);

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
(37, 'adm', 'e8d95a51f3af4a3b134bf6bb680a213a', 'viniciuspecci@hotmail.com', NULL, 37, 6),
(38, 'enf', 'e8d95a51f3af4a3b134bf6bb680a213a', 'enfermeiro@enf.com', NULL, 38, 5),
(39, 'med', 'e8d95a51f3af4a3b134bf6bb680a213a', 'med@medico.com', NULL, 39, 2),
(40, 'tec', 'e8d95a51f3af4a3b134bf6bb680a213a', 'tecnico@exames.com', NULL, 40, 8),
(41, 'far', 'e8d95a51f3af4a3b134bf6bb680a213a', 'far@ceutico.com', NULL, 41, 1);

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
  `RESPONSAVEL_ID_RESPONSAVEL` int(11) NOT NULL,
  `PESSOA_ID_PESSOA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `paciente`
--

INSERT INTO `paciente` (`ID_PACIENTE`, `RESPONSAVEL_ID_RESPONSAVEL`, `PESSOA_ID_PESSOA`) VALUES
(3, 1, 20),
(4, 0, 36),
(5, 3, 44),
(6, 3, 45),
(7, 3, 46),
(8, 3, 47);

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
  `CPF` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `RG` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `ESTADO_CIVIL` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `SEXO` varchar(1) CHARACTER SET utf8 DEFAULT NULL,
  `ENDERECO_ID_ENDERECO` int(11) NOT NULL,
  `DATA_NASCIMENTO` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`ID_PESSOA`, `NOME`, `CPF`, `RG`, `ESTADO_CIVIL`, `SEXO`, `ENDERECO_ID_ENDERECO`, `DATA_NASCIMENTO`) VALUES
(37, 'Vinicius Furtado Pecci de Lima', '035.500.001-00', '546444564544', 'solteiro', 'm', 0, ''),
(38, 'Enfermeiro Teste', '654.644.466-56', '464464654654', 'solteiro', 'm', 0, ''),
(39, 'med', '546.546.456-45', '564645465456', 'solteiro', 'm', 0, ''),
(40, 'Técnico de Exames', '654.646.446-46', '546464646546', 'solteiro', 'm', 0, ''),
(41, 'Farmacêutico', '654.646.465-46', '546546546545', 'solteiro', 'm', 0, ''),
(42, 'Vinícius Furtado Pecci de Lima', '035.521.340-00', '545646546546', 'solteiro', 'm', 0, ''),
(43, 'TESTE', '654.654.564-65', '654564564564', 'solteiro', 'm', 0, ''),
(45, 'Vinícius', '546.545.646-55', '646456465456', 'solteiro', 'm', 0, ''),
(46, 'MC Don Juan', '564.646.456-54', '564564646456', 'solteiro', 'm', 0, ''),
(47, 'Paula Guilherme', '564.646.546-54', '645646545645', 'solteiro', 'm', 0, ''),
(48, 'VINICIUS FURTADO PECCI DE LIMA', '035.521.340-00', '564445656456', 'solteiro', 'm', 0, ''),
(49, 'Vinicius Furtado Pecci de Lima', '546.464.646-54', '564646445454', 'solteiro', 'm', 0, '11/10/1999'),
(50, 'TESTE', '564.656.544-65', '654646565456', 'solteiro', 'm', 0, '11/10/1996'),
(51, 'SUPER TESTE 2000', '654.654.564-56', '654654565645', 'solteiro', 'm', 0, '11/10/1995'),
(52, 'Vinícius Furtado Pecci de Lima', '654.654.646-54', '546454655545', 'solteiro', 'm', 0, '10/11/1966');

-- --------------------------------------------------------

--
-- Estrutura da tabela `prioridade`
--

CREATE TABLE `prioridade` (
  `ID_PRIORIDADE` int(11) NOT NULL,
  `DESCRICAO` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `prioridade`
--

INSERT INTO `prioridade` (`ID_PRIORIDADE`, `DESCRICAO`) VALUES
(1, 'Alta'),
(2, 'Média'),
(3, 'Baixa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `remedio`
--

CREATE TABLE `remedio` (
  `ID_REMEDIO` int(11) NOT NULL,
  `FABRICANTE` varchar(45) DEFAULT NULL,
  `SERIE` varchar(45) DEFAULT NULL,
  `CONTRAINDICACAO` varchar(45) DEFAULT NULL,
  `NOME` varchar(45) DEFAULT NULL,
  `POSOLOGIA` varchar(45) DEFAULT NULL,
  `DATA_VALIDADE` varchar(20) NOT NULL,
  `DATA_FABRICACAO` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `remedio`
--

INSERT INTO `remedio` (`ID_REMEDIO`, `FABRICANTE`, `SERIE`, `CONTRAINDICACAO`, `NOME`, `POSOLOGIA`, `DATA_VALIDADE`, `DATA_FABRICACAO`) VALUES
(20, 'fab', '456', 'dengue', 'captopril', 'teste', '2020-01-01', '2018-12-31');

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
  `PESSOA_ID_PESSOA` int(11) NOT NULL,
  `ID_RESPONSAVEL` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `responsavel`
--

INSERT INTO `responsavel` (`PESSOA_ID_PESSOA`, `ID_RESPONSAVEL`) VALUES
(21, 1),
(13, 2),
(42, 3),
(50, 4),
(52, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_exame`
--

CREATE TABLE `tipo_exame` (
  `ID_TIPO_EXAME` int(11) NOT NULL,
  `DESCRICAO` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tipo_exame`
--

INSERT INTO `tipo_exame` (`ID_TIPO_EXAME`, `DESCRICAO`) VALUES
(1, 'eletrocardiograma'),
(2, 'raio-x');

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
-- Indexes for table `estoque`
--
ALTER TABLE `estoque`
  ADD PRIMARY KEY (`ID_ESTOQUE`);

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
  MODIFY `ID_ATENDIMENTO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `boletim`
--
ALTER TABLE `boletim`
  MODIFY `ID_BOLETIM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cargo`
--
ALTER TABLE `cargo`
  MODIFY `ID_CARGO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cidade`
--
ALTER TABLE `cidade`
  MODIFY `ID_CIDADE` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `endereco`
--
ALTER TABLE `endereco`
  MODIFY `ID_ENDERECO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `estado`
--
ALTER TABLE `estado`
  MODIFY `ID_ESTADO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `estoque`
--
ALTER TABLE `estoque`
  MODIFY `ID_ESTOQUE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `exame`
--
ALTER TABLE `exame`
  MODIFY `ID_EXAME` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `ID_FUNCIONARIO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `paciente`
--
ALTER TABLE `paciente`
  MODIFY `ID_PACIENTE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pessoa`
--
ALTER TABLE `pessoa`
  MODIFY `ID_PESSOA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `prioridade`
--
ALTER TABLE `prioridade`
  MODIFY `ID_PRIORIDADE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `remedio`
--
ALTER TABLE `remedio`
  MODIFY `ID_REMEDIO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `responsavel`
--
ALTER TABLE `responsavel`
  MODIFY `ID_RESPONSAVEL` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tipo_exame`
--
ALTER TABLE `tipo_exame`
  MODIFY `ID_TIPO_EXAME` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `exame`
--
ALTER TABLE `exame`
  ADD CONSTRAINT `exame_ibfk_1` FOREIGN KEY (`ID_TIPO`) REFERENCES `tipo_exame` (`ID_TIPO_EXAME`);

--
-- Limitadores para a tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD CONSTRAINT `funcionario_ibfk_1` FOREIGN KEY (`CARGO_ID_CARGO`) REFERENCES `cargo` (`ID_CARGO`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
