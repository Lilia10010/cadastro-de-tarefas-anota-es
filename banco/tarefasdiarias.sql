-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 22-Jul-2020 às 01:10
-- Versão do servidor: 10.4.10-MariaDB
-- versão do PHP: 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `tarefasdiarias`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil_usuario`
--

DROP TABLE IF EXISTS `perfil_usuario`;
CREATE TABLE IF NOT EXISTS `perfil_usuario` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `perfil_usuario`
--

INSERT INTO `perfil_usuario` (`cod`, `nome`) VALUES
(1, 'administrador'),
(2, 'Usuário');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tarefas`
--

DROP TABLE IF EXISTS `tarefas`;
CREATE TABLE IF NOT EXISTS `tarefas` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `data` varchar(255) DEFAULT NULL,
  `hora` varchar(255) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `usuario_cod` int(11) DEFAULT NULL,
  `categoria` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tarefas`
--

INSERT INTO `tarefas` (`cod`, `titulo`, `data`, `hora`, `descricao`, `usuario_cod`, `categoria`) VALUES
(19, 'evento online', '20/11/2020', '20:00', 'evento online de tecnologia', 10, 'tec'),
(20, 'pós evento', '21/11/2020', '20:00', 'bate papo ao vivo', 10, 'tec'),
(11, 'dar entrada nas notas', '17/06/2019', '', '', 13, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `cod` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `senha` varchar(150) NOT NULL,
  `perfil_cod` int(11) NOT NULL,
  PRIMARY KEY (`cod`),
  KEY `fk_usuario_perfil1_idx` (`perfil_cod`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`cod`, `nome`, `email`, `senha`, `perfil_cod`) VALUES
(10, 'Lilia', 'lilia@lilia.com', '202cb962ac59075b964b07152d234b70', 2),
(11, 'Admin', 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', 1),
(12, 'lp', 'lilia01@lilia.com', '202cb962ac59075b964b07152d234b70', 2),
(13, '', 'lilia1@lilia.com', '202cb962ac59075b964b07152d234b70', 2),
(14, '', 'liliaxtz2@gmail.com', '202cb962ac59075b964b07152d234b70', 2),
(15, '', 'liliaxtz2@gmail.com', '202cb962ac59075b964b07152d234b70', 2),
(16, '', 'liliaxtz2@gmail.com', '202cb962ac59075b964b07152d234b70', 2),
(17, '', 'liliaxtz2@gmail.com', '202cb962ac59075b964b07152d234b70', 2),
(18, '', 'liliaxtz2@gmail.com', '202cb962ac59075b964b07152d234b70', 2),
(19, '', 'liliaxtz2@gmail.com', '202cb962ac59075b964b07152d234b70', 2);

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_usuario_perfil1` FOREIGN KEY (`perfil_cod`) REFERENCES `perfil_usuario` (`cod`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
