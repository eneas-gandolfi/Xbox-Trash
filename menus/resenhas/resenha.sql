-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 11-Nov-2021 às 16:18
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `resenha`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `resenhas`
--

DROP TABLE IF EXISTS `resenhas`;
CREATE TABLE IF NOT EXISTS `resenhas` (
  `Codigo` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(50) COLLATE utf16_unicode_ci NOT NULL,
  `Email` varchar(100) COLLATE utf16_unicode_ci NOT NULL,
  `Resenha` varchar(1000) COLLATE utf16_unicode_ci NOT NULL,
  PRIMARY KEY (`Codigo`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Extraindo dados da tabela `resenhas`
--

INSERT INTO `resenhas` (`Codigo`, `Nome`, `Email`, `Resenha`) VALUES
(2, '', '', ''),
(3, 'Eneas Octaviano Gandolfi Neto', 'eneas.gandolfi@gmail.com', ''),
(4, 'Eneas Octaviano Gandolfi Neto', 'eneas.gandolfi@gmail.com', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
