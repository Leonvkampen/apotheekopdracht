-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2017 at 07:00 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apotheek`
--

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `idOrder` int(11) NOT NULL,
  `leverdatum` date NOT NULL,
  `levertijd` varchar(45) NOT NULL,
  `huisartsid` int(11) NOT NULL,
  `koerier` int(11) NOT NULL,
  `Patient` int(11) NOT NULL,
  `Apotheek` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`idOrder`, `leverdatum`, `levertijd`, `huisartsid`, `koerier`, `Patient`, `Apotheek`) VALUES
(1, '2017-10-10', '12:45', 1, 1, 111222333, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`idOrder`,`huisartsid`,`koerier`,`Patient`,`Apotheek`),
  ADD KEY `fk_order_patient_idx` (`Patient`),
  ADD KEY `fk_order_apotheek_idx` (`Apotheek`),
  ADD KEY `fk_order_huisarts_idx` (`huisartsid`),
  ADD KEY `fk_order_koerier_idx` (`koerier`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `idOrder` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `fk_order_apotheek` FOREIGN KEY (`Apotheek`) REFERENCES `apotheek` (`Apotheekid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_order_huisarts` FOREIGN KEY (`huisartsid`) REFERENCES `huisarts` (`huisartsid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_order_koerier` FOREIGN KEY (`koerier`) REFERENCES `koerier` (`idKoerier`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_order_patient` FOREIGN KEY (`Patient`) REFERENCES `patient` (`Verzekeringsnummer`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
