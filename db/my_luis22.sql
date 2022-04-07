-- phpMyAdmin SQL Dump
-- version 4.1.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Lug 02, 2018 alle 11:59
-- Versione del server: 5.6.33-log
-- PHP Version: 5.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `my_luis22`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `Clienti`
--

CREATE TABLE IF NOT EXISTS `Clienti` (
  `ID_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(12) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `cognome` varchar(30) NOT NULL,
  `dataNascita` date NOT NULL,
  `nazione` varchar(30) DEFAULT NULL,
  `citta` varchar(30) DEFAULT NULL,
  `indirizzo` varchar(40) DEFAULT NULL,
  `CAP` varchar(5) DEFAULT NULL,
  `email` varchar(40) NOT NULL,
  `cellulare` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`ID_cliente`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dump dei dati per la tabella `Clienti`
--

INSERT INTO `Clienti` (`ID_cliente`, `username`, `password`, `nome`, `cognome`, `dataNascita`, `nazione`, `citta`, `indirizzo`, `CAP`, `email`, `cellulare`) VALUES
(11, 'Luis', '48eea55de44413fcf97ac33a6c6c6dc5', 'Luigi', 'Alonge', '1999-06-16', 'Italia', 'Roma', 'via celso ulpiani', '00156', 'l.alonge@fatainformatica.com', '3313361101'),
(12, 'Alessio', 'dee927e28cc39567b04117d81d3a04c3', 'Alessio', 'Alonge', '1976-07-01', 'Italia ', 'Roma', 'Via ammazzi numero privulazzo', '00156', 'a.alonge@erpware.it', '3456677888'),
(13, 'alonge', '74b87337454200d4d33f80c4663dc5e5', 'Luigi', 'Alonge', '2000-06-29', '', '', '', '', 'l.alonge@fatainformatica.com', '');

-- --------------------------------------------------------

--
-- Struttura della tabella `Ordini`
--

CREATE TABLE IF NOT EXISTS `Ordini` (
  `ID_ordine` int(11) NOT NULL AUTO_INCREMENT,
  `dataOra` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `coin` decimal(10,2) NOT NULL,
  `prezzo_unitario_euro` decimal(10,2) NOT NULL,
  `ID_cliente` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_ordine`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dump dei dati per la tabella `Ordini`
--

INSERT INTO `Ordini` (`ID_ordine`, `dataOra`, `coin`, `prezzo_unitario_euro`, `ID_cliente`) VALUES
(2, '2018-06-29 17:43:17', 50.00, 10.00, 11),
(4, '2018-07-01 15:22:14', 200.00, 10.00, 11),
(5, '2018-07-01 15:23:32', 700.00, 10.00, 11),
(6, '2018-07-01 15:24:04', 550.00, 10.00, 11),
(7, '2018-07-01 15:24:54', 10.00, 10.00, 11),
(8, '2018-07-01 15:52:23', 700.00, 10.00, 11),
(13, '2018-07-01 19:38:21', 22.20, 10.00, 11),
(14, '2018-07-01 19:38:33', 220.10, 10.00, 11),
(15, '2018-07-01 19:40:06', 220.10, 10.00, 11),
(16, '2018-07-01 19:40:16', 1.00, 10.00, 11),
(17, '2018-07-01 20:09:55', 50.00, 10.00, 11),
(18, '2018-07-01 21:41:41', 8500.00, 10.00, 6),
(19, '2018-07-01 21:41:49', 8590.00, 10.00, 6),
(20, '2018-07-01 21:43:09', 50.00, 10.00, 6),
(21, '2018-07-01 21:43:15', 50.00, 10.00, 6),
(22, '2018-07-01 21:43:20', 50.00, 10.00, 6),
(23, '2018-07-01 21:44:01', 200.00, 10.00, 12);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
