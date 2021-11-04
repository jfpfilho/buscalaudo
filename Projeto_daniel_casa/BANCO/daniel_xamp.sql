-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Mar-2021 às 02:06
-- Versão do servidor: 10.4.16-MariaDB
-- versão do PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `daniel`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cid`
--

CREATE TABLE `cid` (
  `cod_cid` int(11) NOT NULL,
  `desc_cid` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cid`
--

INSERT INTO `cid` (`cod_cid`, `desc_cid`) VALUES
(1, 'CATARATA / DIFICULDADE DE ENXERGAR '),
(2540, 'Estigmatismo / não enxerga de longe ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estabelecimento`
--

CREATE TABLE `estabelecimento` (
  `id_cnpj` varchar(20) NOT NULL,
  `nome_fantasia` varchar(55) DEFAULT NULL,
  `n_cnes` varchar(15) DEFAULT NULL,
  `nome_estabelecimento` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `estabelecimento`
--

INSERT INTO `estabelecimento` (`id_cnpj`, `nome_fantasia`, `n_cnes`, `nome_estabelecimento`) VALUES
('0201202010', 'bh', '00000', 'bh 12'),
('020200', 'INSTITUTO DE OLHOS ', '0001', 'MAMRIA FUILANA '),
('4134324', 'sdads', '1010', 'ASDDA'),
('532453', 'DFSDF', '1471', 'SDFSDF');

-- --------------------------------------------------------

--
-- Estrutura da tabela `paciente`
--

CREATE TABLE `paciente` (
  `cpf_paciente` varchar(15) NOT NULL,
  `nome_paciente` varchar(55) DEFAULT NULL,
  `mae` varchar(45) DEFAULT NULL,
  `responsavel` varchar(45) DEFAULT NULL,
  `sexo` enum('masculino','feminino') DEFAULT NULL,
  `n_prontuario` varchar(45) DEFAULT NULL,
  `tel_resp` varchar(45) DEFAULT NULL,
  `endereço` varchar(45) DEFAULT NULL,
  `municipio` varchar(45) DEFAULT NULL,
  `cod_ibge_municipio` varchar(45) DEFAULT NULL,
  `uf` varchar(45) DEFAULT NULL,
  `cep` varchar(45) DEFAULT NULL,
  `n_cnes_paciente` varchar(45) DEFAULT NULL,
  `dt_nasc` date DEFAULT NULL,
  `tel_mae` varchar(45) DEFAULT NULL,
  `etnia` varchar(45) DEFAULT NULL,
  `raca_cor` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `paciente`
--

INSERT INTO `paciente` (`cpf_paciente`, `nome_paciente`, `mae`, `responsavel`, `sexo`, `n_prontuario`, `tel_resp`, `endereço`, `municipio`, `cod_ibge_municipio`, `uf`, `cep`, `n_cnes_paciente`, `dt_nasc`, `tel_mae`, `etnia`, `raca_cor`) VALUES
('01168406170', 'EVANILDO ALMEIDA OLIVEIRA FILHO  ', 'WANDERLINA SANTANA DA SILVA  ', 'WANDERLINA SANTANA DA SILVA ', '', '0003', '61 9-9588-8912', 'QD 24 CASA 24 J AGUAS LINDAS II', 'AGUAS LINDAS DE GOIÁS ', '0003', 'GO', '72.015-595', '0004', '1986-04-24', '61 9-9588-8912', 'NEGRO', 'NEGRO '),
('210325615422', 'EVANEIDE OLIVEIRA  ', 'MARIA LUCIA  ', 'MARIA LUCIA ', '', '0002', '61 9-9582-5562', 'MINAS GERAIS ', 'PATOS ', '003', 'MG', '72.000-159', '0003', '1985-04-24', '61 9-9588-8945', 'PARDA ', 'PARDA ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `procedimentos`
--

CREATE TABLE `procedimentos` (
  `id_cod_procedimento` varchar(8) NOT NULL,
  `cod_procedimento` varchar(45) DEFAULT NULL,
  `nome_procedimento` varchar(45) DEFAULT NULL,
  `descricao_do_procediemnto` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `profissional`
--

CREATE TABLE `profissional` (
  `cpf` int(11) NOT NULL,
  `nome_profissional` varchar(45) DEFAULT NULL,
  `sexo` enum('masculino','feminino') DEFAULT NULL,
  `especialidade` varchar(45) DEFAULT NULL,
  `n_conselho` varchar(45) DEFAULT NULL,
  `n_cnes` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `profissional`
--

INSERT INTO `profissional` (`cpf`, `nome_profissional`, `sexo`, `especialidade`, `n_conselho`, `n_cnes`) VALUES
(0, ' ', '', ' ', '', ''),
(1168406170, 'Evanildo', 'masculino', 'medico', '000', '2202');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `cpf_usuario` int(11) NOT NULL,
  `nome_usuario` varchar(60) NOT NULL,
  `login` varchar(45) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  `sexo` enum('masculino','feminino') DEFAULT NULL,
  `nivel_acesso` enum('usuario','administrador') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`cpf_usuario`, `nome_usuario`, `login`, `senha`, `sexo`, `nivel_acesso`) VALUES
(1168406170, 'evanildo', 'efilho', '123', 'masculino', 'usuario');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cid`
--
ALTER TABLE `cid`
  ADD PRIMARY KEY (`cod_cid`);

--
-- Índices para tabela `estabelecimento`
--
ALTER TABLE `estabelecimento`
  ADD PRIMARY KEY (`id_cnpj`);

--
-- Índices para tabela `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`cpf_paciente`);

--
-- Índices para tabela `procedimentos`
--
ALTER TABLE `procedimentos`
  ADD PRIMARY KEY (`id_cod_procedimento`);

--
-- Índices para tabela `profissional`
--
ALTER TABLE `profissional`
  ADD PRIMARY KEY (`cpf`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cpf_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
