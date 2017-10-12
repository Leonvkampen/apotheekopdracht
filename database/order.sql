-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 12 okt 2017 om 09:21
-- Serverversie: 5.6.17-log
-- PHP-versie: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `apotheek`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `idOrder` int(11) NOT NULL AUTO_INCREMENT,
  `huidigedatum` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `leverdatum` datetime DEFAULT NULL,
  `levertijd` varchar(45) DEFAULT NULL,
  `huisartsid` int(11) NOT NULL,
  `koerier` int(11) NOT NULL,
  `Patient` int(11) NOT NULL,
  `Apotheek` int(11) NOT NULL,
  PRIMARY KEY (`idOrder`,`huisartsid`,`koerier`,`Patient`,`Apotheek`),
  KEY `fk_order_patient_idx` (`Patient`),
  KEY `fk_order_apotheek_idx` (`Apotheek`),
  KEY `fk_order_huisarts_idx` (`huisartsid`),
  KEY `fk_order_koerier_idx` (`koerier`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Gegevens worden geëxporteerd voor tabel `order`
--

INSERT INTO `order` (`idOrder`, `huidigedatum`, `leverdatum`, `levertijd`, `huisartsid`, `koerier`, `Patient`, `Apotheek`) VALUES
(1, '2017-10-12 09:16:01', '2017-10-10 00:00:00', '12:45', 1, 1, 111222333, 1),
(3, '2017-10-12 09:16:01', '0000-00-00 00:00:00', '', 111222333, 1, 1, 1),
(7, '2017-10-12 09:16:16', NULL, NULL, 1, 1, 111222333, 1);

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `fk_order_apotheek` FOREIGN KEY (`Apotheek`) REFERENCES `apotheek` (`Apotheekid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_order_huisarts` FOREIGN KEY (`huisartsid`) REFERENCES `huisarts` (`huisartsid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_order_koerier` FOREIGN KEY (`koerier`) REFERENCES `koerier` (`idKoerier`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_order_patient` FOREIGN KEY (`Patient`) REFERENCES `patient` (`Verzekeringsnummer`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
