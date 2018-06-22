-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 22-Jun-2018 às 01:38
-- Versão do servidor: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `libby`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `AUTOR`
--

CREATE TABLE `AUTOR` (
  `autCod` int(11) NOT NULL,
  `autNome` varchar(45) DEFAULT NULL,
  `autBio` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `CARTAO`
--

CREATE TABLE `CARTAO` (
  `cardCod` int(11) NOT NULL,
  `contaCod` int(11) NOT NULL,
  `cardNum` varchar(16) NOT NULL,
  `cardVal` varchar(20) NOT NULL COMMENT 'EXEMPLO: 05/20',
  `cardCVV` varchar(3) NOT NULL,
  `cardNomeImpresso` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `CARTAO`
--

INSERT INTO `CARTAO` (`cardCod`, `contaCod`, `cardNum`, `cardVal`, `cardCVV`, `cardNomeImpresso`) VALUES
(1, 1, 'teste cartao2', '10/10', '123', 'teste cartao'),
(5, 1, 'q', '10/10', 'q', 'q'),
(6, 1, 'qq', '10/10', 'q', 'qq'),
(8, 1, 'qqqqqq', '04/04', '123', 'qqqqqq'),
(9, 1, 'q1', '04/04', 'q11', 'q'),
(11, 1, 're', '01/01', '123', 're'),
(12, 1, 'yu', '10/10', 'yuy', 'yu'),
(13, 1, 'yuuu', '10/10', 'yuu', 'yuuu'),
(14, 30, 'n11 cartao', '11/11', 'n11', 'n11 nome'),
(15, 31, 'yu novo cartao', '12/12', 'yun', 'yu novo nome');

-- --------------------------------------------------------

--
-- Estrutura da tabela `CONTA`
--

CREATE TABLE `CONTA` (
  `contaCod` int(11) NOT NULL,
  `contaNome` varchar(200) NOT NULL,
  `contaCPF` varchar(12) NOT NULL,
  `contaSenha` varchar(15) NOT NULL,
  `contaEmail` varchar(200) NOT NULL,
  `contaPlano` int(11) NOT NULL COMMENT '1 = PLANO BASICO\n2 = PLANO PADRÃO\n3 = PLANO PREMIUM'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `CONTA`
--

INSERT INTO `CONTA` (`contaCod`, `contaNome`, `contaCPF`, `contaSenha`, `contaEmail`, `contaPlano`) VALUES
(1, 'jj', 'jj', 'jj', 'jj', 1),
(2, 'jj5', 'jj5', 'jj', 'jj5', 1),
(6, 'kk', 'kk', 'jj', 'jj', 1),
(7, 'ww', 'ww', 'ww', 'ww', 1),
(8, '1', '1', '', '1@1', 1),
(9, 'joao', '123', '', 'joao@joao', 1),
(10, 'pedro', '456', 'pedro', 'pedro@pedro', 1),
(11, '', '', '', '', 1),
(13, 'bruno', '123456789', 'nruno', 'bruno@bruno', 1),
(14, 'w', 'w', 'e', 'e@e', 1),
(15, 'wjoao', '13', '', 'joapo@aoas', 1),
(17, 'er', 'fd', 'erer', 'df@e', 1),
(18, 'teste', '3', 'teste', 'teste@teste.com', 1),
(19, 'nome', 'cpf', 'senha', 'email', 1),
(20, 'qwqw', 'qw', 'crypt( wq )', 'w@w.comqwwq', 1),
(25, 'teste1', '123teste1', 'teste1', 'teste1@teste1.com', 1),
(26, 'teste2', 'teste2', 'crypt(teste2)', 'teste2@teste2.com', 1),
(27, 'teste3', 'teste3', 'teste3', 'teste3@teste3.com', 1),
(28, 'teste4', 'teste4', 'teste4', 'teste4@teste4', 1),
(29, 'n1', 'n1', 'n1', 'n1@n1', 1),
(30, 'n11', 'n11', 'n1', 'n11@n11', 1),
(31, 'yu', 'yu', 'yu', 'yu@yu', 1),
(32, 'yuuu', 'yuuu', 'yuuu', 'yuuu@yuuu', 1),
(33, 'yu novo', 'yu novo', 'yunovo', 'yunovo@yunovo', 1),
(34, 'us3', 'us3', 'us3', 'us3@us3', 1),
(35, 'us3us3', 'us3us3', 'us3us3', 'us3us3@us3us3', 1),
(36, 'ty', 'ty', 'ty', 'ty@ty', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `EDITORA`
--

CREATE TABLE `EDITORA` (
  `editCod` int(11) NOT NULL,
  `editNome` varchar(45) NOT NULL,
  `editLocalizacao` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `GENERO`
--

CREATE TABLE `GENERO` (
  `genCod` int(11) NOT NULL,
  `genNome` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `LENDO`
--

CREATE TABLE `LENDO` (
  `contaCod` int(11) NOT NULL,
  `userNome` varchar(45) NOT NULL,
  `livCod` int(11) NOT NULL,
  `lendoUltimaPagina` int(11) DEFAULT NULL,
  `lendoAvaliacao` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `LIVRO`
--

CREATE TABLE `LIVRO` (
  `livCod` int(11) NOT NULL,
  `livTitulo` varchar(45) NOT NULL,
  `livISBN` int(11) NOT NULL COMMENT '13 digitos\ne precedida de 978',
  `livANO` int(11) NOT NULL,
  `livNPag` int(11) NOT NULL,
  `livTags` varchar(1000) NOT NULL,
  `autCod` int(11) NOT NULL,
  `editCod` int(11) NOT NULL,
  `GENERO_genCod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `USUARIO`
--

CREATE TABLE `USUARIO` (
  `contaCod` int(11) NOT NULL,
  `userNome` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `AUTOR`
--
ALTER TABLE `AUTOR`
  ADD PRIMARY KEY (`autCod`);

--
-- Indexes for table `CARTAO`
--
ALTER TABLE `CARTAO`
  ADD PRIMARY KEY (`cardCod`),
  ADD UNIQUE KEY `cardNum_UNIQUE` (`cardNum`),
  ADD KEY `fk_CARTAO_CONTA1_idx` (`contaCod`);

--
-- Indexes for table `CONTA`
--
ALTER TABLE `CONTA`
  ADD PRIMARY KEY (`contaCod`),
  ADD UNIQUE KEY `userNome_UNIQUE` (`contaNome`),
  ADD UNIQUE KEY `userCPF_UNIQUE` (`contaCPF`);

--
-- Indexes for table `EDITORA`
--
ALTER TABLE `EDITORA`
  ADD PRIMARY KEY (`editCod`);

--
-- Indexes for table `GENERO`
--
ALTER TABLE `GENERO`
  ADD PRIMARY KEY (`genCod`);

--
-- Indexes for table `LENDO`
--
ALTER TABLE `LENDO`
  ADD PRIMARY KEY (`contaCod`,`userNome`,`livCod`),
  ADD KEY `fk_USUARIO_has_LIVRO_LIVRO1_idx` (`livCod`),
  ADD KEY `fk_USUARIO_has_LIVRO_USUARIO1_idx` (`contaCod`,`userNome`);

--
-- Indexes for table `LIVRO`
--
ALTER TABLE `LIVRO`
  ADD PRIMARY KEY (`livCod`),
  ADD UNIQUE KEY `livISBN_UNIQUE` (`livISBN`),
  ADD UNIQUE KEY `livCod_UNIQUE` (`livCod`),
  ADD KEY `fk_LIVRO_AUTOR1_idx` (`autCod`),
  ADD KEY `fk_LIVRO_EDITORA1_idx` (`editCod`),
  ADD KEY `fk_LIVRO_GENERO1_idx` (`GENERO_genCod`);

--
-- Indexes for table `USUARIO`
--
ALTER TABLE `USUARIO`
  ADD PRIMARY KEY (`contaCod`,`userNome`),
  ADD KEY `fk_USUARIO_CONTA1_idx` (`contaCod`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `CARTAO`
--
ALTER TABLE `CARTAO`
  MODIFY `cardCod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `CONTA`
--
ALTER TABLE `CONTA`
  MODIFY `contaCod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `CARTAO`
--
ALTER TABLE `CARTAO`
  ADD CONSTRAINT `fk_CARTAO_CONTA1` FOREIGN KEY (`contaCod`) REFERENCES `CONTA` (`contaCod`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `LENDO`
--
ALTER TABLE `LENDO`
  ADD CONSTRAINT `fk_USUARIO_has_LIVRO_LIVRO1` FOREIGN KEY (`livCod`) REFERENCES `LIVRO` (`livCod`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_USUARIO_has_LIVRO_USUARIO1` FOREIGN KEY (`contaCod`,`userNome`) REFERENCES `USUARIO` (`contaCod`, `userNome`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `LIVRO`
--
ALTER TABLE `LIVRO`
  ADD CONSTRAINT `fk_LIVRO_AUTOR1` FOREIGN KEY (`autCod`) REFERENCES `AUTOR` (`autCod`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_LIVRO_EDITORA1` FOREIGN KEY (`editCod`) REFERENCES `EDITORA` (`editCod`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_LIVRO_GENERO1` FOREIGN KEY (`GENERO_genCod`) REFERENCES `GENERO` (`genCod`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `USUARIO`
--
ALTER TABLE `USUARIO`
  ADD CONSTRAINT `fk_USUARIO_CONTA1` FOREIGN KEY (`contaCod`) REFERENCES `CONTA` (`contaCod`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
