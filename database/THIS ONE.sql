-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2017 at 12:41 PM
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
-- Table structure for table `apotheek`
--

CREATE TABLE `apotheek` (
  `Apotheekid` int(11) NOT NULL,
  `woonplaats` varchar(45) NOT NULL,
  `Naam` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `wachtwoord` varchar(45) NOT NULL,
  `rol` varchar(40) NOT NULL DEFAULT 'apotheker'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `apotheek`
--

INSERT INTO `apotheek` (`Apotheekid`, `woonplaats`, `Naam`, `email`, `wachtwoord`, `rol`) VALUES
(1, 'Utrecht', 'Apotheek Utrecht', 'Apotheker@gmail.com', 'Apotheker123', 'apotheker'),
(2, '', 'benu', 'benu@gmail.com', 'benu123', 'apotheker');

-- --------------------------------------------------------

--
-- Table structure for table `huisarts`
--

CREATE TABLE `huisarts` (
  `huisartsid` int(11) NOT NULL,
  `naam` varchar(45) NOT NULL,
  `telefoonnummer` varchar(45) NOT NULL,
  `woonplaats` varchar(45) NOT NULL,
  `postcode` varchar(45) NOT NULL,
  `straatnaam` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `wachtwoord` varchar(45) NOT NULL,
  `rol` varchar(40) NOT NULL DEFAULT 'huisarts'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `huisarts`
--

INSERT INTO `huisarts` (`huisartsid`, `naam`, `telefoonnummer`, `woonplaats`, `postcode`, `straatnaam`, `email`, `wachtwoord`, `rol`) VALUES
(1, 'Jaap', '0685967459', 'Utrecht', '2934LP', 'Utrechtlaan 23', 'Jaap@gmail.com', 'Jaapie123', 'huisarts'),
(2, 'Born', '568', '', '', '', 'born@gmail.com', 'born123', 'huisarts');

-- --------------------------------------------------------

--
-- Table structure for table `koerier`
--

CREATE TABLE `koerier` (
  `idKoerier` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `wachtwoord` varchar(45) NOT NULL,
  `rol` varchar(40) NOT NULL DEFAULT 'koerier'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `koerier`
--

INSERT INTO `koerier` (`idKoerier`, `email`, `wachtwoord`, `rol`) VALUES
(1, 'koerier@gmail.com', 'Koerier123', 'koerier');

-- --------------------------------------------------------

--
-- Table structure for table `medicijn`
--

CREATE TABLE `medicijn` (
  `idMedicijn` int(11) NOT NULL,
  `naam` varchar(45) NOT NULL,
  `beschrijving` varchar(999) DEFAULT NULL,
  `maximalevoorraad` int(11) NOT NULL DEFAULT '140',
  `voorraad` int(11) NOT NULL,
  `ophalen` varchar(6) DEFAULT 'nee'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `medicijn`
--

INSERT INTO `medicijn` (`idMedicijn`, `naam`, `beschrijving`, `maximalevoorraad`, `voorraad`, `ophalen`) VALUES
(1, 'Diclofenac', 'werkt als ontstekingsremmende', 100, 100, 'nee'),
(2, 'Amoxicilline', 'antibioticum', 100, 98, 'nee'),
(3, 'Omeprazol', 'Remt productie overvloedig maagzuur', 100, 83, 'nee'),
(4, 'Doxycycline', 'antibioticum', 100, 95, 'nee'),
(5, 'Ibuprofen', 'pijnstiller', 100, 97, 'nee'),
(6, 'Metoprolol', 'bètablokker welke de bloeddruk verlaagt', 100, 94, 'nee'),
(7, 'Augmentin', 'Amoxicilline met enzymremmer clavulaanzuur,', 100, 67, 'nee'),
(8, 'Salbutamol', 'luchtwegverwijders', 100, 77, 'nee'),
(9, 'Simvastatine', 'cholesterolsyntheseremmer (verlaagt het', 100, 88, 'nee'),
(10, 'Oxazepam', 'kalmeringsmiddel', 100, 100, 'nee'),
(11, 'Codeine', 'actief tegen overmatig hoesten', 90, 87, 'nee'),
(12, 'Hydrocortison', 'overige middelen', 90, 90, 'nee'),
(13, 'Acetylsalicylzuur', 'pijnstiller', 90, 90, 'nee'),
(14, 'Overige emollientia en protectiva', NULL, 90, 80, 'nee'),
(15, 'Triamcinolon', 'Remt ontstekingen en overgevoeligheidsreacties.', 90, 90, 'nee'),
(16, 'Nitrofurantoine', 'Nitrofurantoïne is een antibioticum. Het doodt bacteriën.', 90, 90, 'nee'),
(17, 'Fusidinezuur', 'Fusidinezuur bestrijdt bepaalde bacteriën (antibioticum).', 90, 62, 'nee'),
(18, 'Pantoprazo', 'Pantoprazol vermindert de aanmaak van zuur in de maag.', 90, 90, 'nee'),
(19, 'Temazepam', 'Temazepam werkt rustgevend, vermindert angstgevoelens ontspant de spieren en maakt suf.', 90, 90, 'nee'),
(20, 'Carbasalaatcalcium', 'Carbasalaatcalcium zorgt ervoor dat bloed minder makkelijk samenklontert (antistollingsmedicijn). Hierdoor heeft u minder kans op trombose.', 80, 80, 'nee'),
(21, 'Macrogol combinatiepreparaten', 'Macrogol houdt water in de darm vast, waardoor de ontlasting zachter wordt. Dit stimuleert de stoelgang.', 80, 80, 'nee'),
(22, 'Naproxen', 'Naproxen stilt pijn, vermindert ontstekingen en verlaagt koorts.', 80, 80, 'nee'),
(23, 'Hydrochloorthiazide', 'Hydrochloorthiazide is een plastablet dat de bloeddruk verlaagt en de pompkracht van het hart verbetert.', 80, 80, 'nee'),
(24, 'Metformine', 'Metformine verlaagt het bloedglucose. Te veel glucose in bloed maakt ziek en is schadelijk voor hart, bloedvaten, ogen, nieren en zenuwen.', 80, 80, 'nee');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `idOrder` int(11) NOT NULL,
  `huidigedatum` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `leverdatum` date DEFAULT NULL,
  `levertijd` varchar(45) DEFAULT '08:00',
  `huisartsid` int(11) NOT NULL,
  `koerier` int(11) NOT NULL,
  `Patient` int(11) NOT NULL,
  `Apotheek` int(11) NOT NULL,
  `geannuleerd` tinyint(4) NOT NULL DEFAULT '0',
  `commentaar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`idOrder`, `huidigedatum`, `leverdatum`, `levertijd`, `huisartsid`, `koerier`, `Patient`, `Apotheek`, `geannuleerd`, `commentaar`) VALUES
(299, '2017-11-08 13:38:21', '2017-12-26', '16:50:00', 1, 1, 1234, 1, 0, 'dabbing'),
(300, '2017-11-08 13:38:21', '2017-11-20', '17:40:00', 1, 1, 1234, 1, 0, NULL),
(301, '2017-11-09 09:24:05', '2017-11-10', '14:50:00', 2, 1, 1234, 1, 0, NULL),
(302, '2017-11-09 09:24:05', '2017-11-20', '17:50:00', 2, 1, 1234, 1, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orderregel`
--

CREATE TABLE `orderregel` (
  `medicijnid` int(11) NOT NULL,
  `orderid` int(11) NOT NULL,
  `aantal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orderregel`
--

INSERT INTO `orderregel` (`medicijnid`, `orderid`, `aantal`) VALUES
(1, 300, 10),
(1, 302, 5),
(2, 299, 2),
(3, 299, 3),
(3, 301, 10),
(4, 301, 1);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `Verzekeringsnummer` int(11) NOT NULL,
  `geboorteplaats` varchar(45) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Naam` varchar(45) NOT NULL,
  `patientdata` varchar(45) DEFAULT NULL,
  `adres` varchar(45) NOT NULL,
  `postcode` varchar(45) NOT NULL,
  `rol` varchar(40) NOT NULL DEFAULT 'patient'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`Verzekeringsnummer`, `geboorteplaats`, `Email`, `Naam`, `patientdata`, `adres`, `postcode`, `rol`) VALUES
(311, 'Amsterdam', 'peters@gmail.com', 'Peters', NULL, 'Dreef 11', '1123 GH', 'patient'),
(1234, 'Utrecht', 'alex@gmail.com', 'alex', 'deluxe', 'verstrekelaan 245', '2958 XD', 'patient'),
(1491, 'Rotterdam', 'asdkoawd@gajsw.com', 'sadka', NULL, 'Australielaan 540', '1234GH', 'patient'),
(123456, 'Utrecht', 'djlopa1@gmail.com', 'mailo', NULL, 'bloemstede', '3602XD', 'patient'),
(1234567, 'Rotterdam', 'jemx@mboutrecht.nl', 'Jesse Malotaux', '<script>alert', 'Australielaan 540', '1234AB', 'patient'),
(111222333, 'Utrecht', 'Patient@gmail.com', 'Patient', NULL, 'Utrechlaan123', '4214GP', 'patient');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apotheek`
--
ALTER TABLE `apotheek`
  ADD PRIMARY KEY (`Apotheekid`),
  ADD UNIQUE KEY `username_UNIQUE` (`email`);

--
-- Indexes for table `huisarts`
--
ALTER TABLE `huisarts`
  ADD PRIMARY KEY (`huisartsid`);

--
-- Indexes for table `koerier`
--
ALTER TABLE `koerier`
  ADD PRIMARY KEY (`idKoerier`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- Indexes for table `medicijn`
--
ALTER TABLE `medicijn`
  ADD PRIMARY KEY (`idMedicijn`);

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
-- Indexes for table `orderregel`
--
ALTER TABLE `orderregel`
  ADD PRIMARY KEY (`medicijnid`,`orderid`),
  ADD KEY `fk_orderregel_order_idx` (`orderid`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`Verzekeringsnummer`),
  ADD UNIQUE KEY `Email_UNIQUE` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `huisarts`
--
ALTER TABLE `huisarts`
  MODIFY `huisartsid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `medicijn`
--
ALTER TABLE `medicijn`
  MODIFY `idMedicijn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `idOrder` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=306;
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

--
-- Constraints for table `orderregel`
--
ALTER TABLE `orderregel`
  ADD CONSTRAINT `fk_orderrege_medicijn` FOREIGN KEY (`medicijnid`) REFERENCES `medicijn` (`idMedicijn`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_orderregel_order` FOREIGN KEY (`orderid`) REFERENCES `order` (`idOrder`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
