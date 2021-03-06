-- MySQL Script generated by MySQL Workbench
-- 10/09/17 10:59:37
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema Apotheek
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema Apotheek
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `Apotheek` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `Apotheek` ;

-- -----------------------------------------------------
-- Table `Apotheek`.`Huisarts`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Apotheek`.`Huisarts` ;

CREATE TABLE IF NOT EXISTS `Apotheek`.`Huisarts` (
  `huisartsid` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `naam` VARCHAR(45) NOT NULL COMMENT '',
  `telefoonnummer` VARCHAR(45) NOT NULL COMMENT '',
  `woonplaats` VARCHAR(45) NOT NULL COMMENT '',
  `postcode` VARCHAR(45) NOT NULL COMMENT '',
  `straatnaam` VARCHAR(45) NOT NULL COMMENT '',
  `email` VARCHAR(45) NOT NULL COMMENT '',
  `wachtwoord` VARCHAR(45) NOT NULL COMMENT '',
  PRIMARY KEY (`huisartsid`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Apotheek`.`Apotheek`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Apotheek`.`Apotheek` ;

CREATE TABLE IF NOT EXISTS `Apotheek`.`Apotheek` (
  `Apotheekid` INT NOT NULL COMMENT '',
  `woonplaats` VARCHAR(45) NOT NULL COMMENT '',
  `Naam` VARCHAR(45) NOT NULL COMMENT '',
  `email` VARCHAR(45) NOT NULL COMMENT '',
  `wachtwoord` VARCHAR(45) NOT NULL COMMENT '',
  PRIMARY KEY (`Apotheekid`)  COMMENT '',
  UNIQUE INDEX `username_UNIQUE` (`email` ASC)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Apotheek`.`Koerier`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Apotheek`.`Koerier` ;

CREATE TABLE IF NOT EXISTS `Apotheek`.`Koerier` (
  `idKoerier` INT NOT NULL COMMENT '',
  `email` VARCHAR(45) NOT NULL COMMENT '',
  `wachtwoord` VARCHAR(45) NOT NULL COMMENT '',
  PRIMARY KEY (`idKoerier`)  COMMENT '',
  UNIQUE INDEX `email_UNIQUE` (`email` ASC)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Apotheek`.`Patient`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Apotheek`.`Patient` ;

CREATE TABLE IF NOT EXISTS `Apotheek`.`Patient` (
  `Verzekeringsnummer` INT NOT NULL COMMENT '',
  `huisartsid` INT NOT NULL COMMENT '',
  `apotheekid` INT NOT NULL COMMENT '',
  `geboorteplaats` VARCHAR(45) NOT NULL COMMENT '',
  `Email` VARCHAR(45) NOT NULL COMMENT '',
  `Naam` VARCHAR(45) NOT NULL COMMENT '',
  `patientdata` VARCHAR(45) NULL COMMENT '',
  `adres` VARCHAR(45) NOT NULL COMMENT '',
  `postcode` VARCHAR(45) NOT NULL COMMENT '',
  PRIMARY KEY (`Verzekeringsnummer`, `huisartsid`, `apotheekid`)  COMMENT '',
  UNIQUE INDEX `Email_UNIQUE` (`Email` ASC)  COMMENT '',
  INDEX `fk_patient_huisarts_idx` (`huisartsid` ASC)  COMMENT '',
  INDEX `fk_patient_apotheek_idx` (`apotheekid` ASC)  COMMENT '',
  CONSTRAINT `fk_patient_huisarts`
    FOREIGN KEY (`huisartsid`)
    REFERENCES `Apotheek`.`Huisarts` (`huisartsid`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_patient_apotheek`
    FOREIGN KEY (`apotheekid`)
    REFERENCES `Apotheek`.`Apotheek` (`Apotheekid`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Apotheek`.`Order`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Apotheek`.`Order` ;

CREATE TABLE IF NOT EXISTS `Apotheek`.`Order` (
  `idOrder` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `leverdatum` DATE NOT NULL COMMENT '',
  `levertijd` VARCHAR(45) NOT NULL COMMENT '',
  `huisartsid` INT NOT NULL COMMENT '',
  `koerier` INT NOT NULL COMMENT '',
  `Patient` INT NOT NULL COMMENT '',
  `Apotheek` INT NOT NULL COMMENT '',
  PRIMARY KEY (`idOrder`, `huisartsid`, `koerier`, `Patient`, `Apotheek`)  COMMENT '',
  INDEX `fk_order_patient_idx` (`Patient` ASC)  COMMENT '',
  INDEX `fk_order_apotheek_idx` (`Apotheek` ASC)  COMMENT '',
  INDEX `fk_order_huisarts_idx` (`huisartsid` ASC)  COMMENT '',
  INDEX `fk_order_koerier_idx` (`koerier` ASC)  COMMENT '',
  CONSTRAINT `fk_order_patient`
    FOREIGN KEY (`Patient`)
    REFERENCES `Apotheek`.`Patient` (`Verzekeringsnummer`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_order_apotheek`
    FOREIGN KEY (`Apotheek`)
    REFERENCES `Apotheek`.`Apotheek` (`Apotheekid`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_order_huisarts`
    FOREIGN KEY (`huisartsid`)
    REFERENCES `Apotheek`.`Huisarts` (`huisartsid`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_order_koerier`
    FOREIGN KEY (`koerier`)
    REFERENCES `Apotheek`.`Koerier` (`idKoerier`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Apotheek`.`Medicijn`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Apotheek`.`Medicijn` ;

CREATE TABLE IF NOT EXISTS `Apotheek`.`Medicijn` (
  `idMedicijn` INT NOT NULL COMMENT '',
  `naam` VARCHAR(45) NOT NULL COMMENT '',
  `beschrijving` VARCHAR(999) NULL COMMENT '',
  `maximale voorraad` INT NOT NULL DEFAULT 140 COMMENT '',
  `voorraad` INT NOT NULL COMMENT '',
  PRIMARY KEY (`idMedicijn`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Apotheek`.`orderregel`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Apotheek`.`orderregel` ;

CREATE TABLE IF NOT EXISTS `Apotheek`.`orderregel` (
  `medicijnid` INT NOT NULL COMMENT '',
  `orderid` INT NOT NULL COMMENT '',
  `aantal` INT NOT NULL COMMENT '',
  PRIMARY KEY (`medicijnid`, `orderid`)  COMMENT '',
  INDEX `fk_orderregel_order_idx` (`orderid` ASC)  COMMENT '',
  CONSTRAINT `fk_orderregel_medicijn`
    FOREIGN KEY (`medicijnid`)
    REFERENCES `Apotheek`.`Medicijn` (`idMedicijn`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_orderregel_order`
    FOREIGN KEY (`orderid`)
    REFERENCES `Apotheek`.`Order` (`idOrder`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `Apotheek`.`Huisarts`
-- -----------------------------------------------------
START TRANSACTION;
USE `Apotheek`;
INSERT INTO `Apotheek`.`Huisarts` (`huisartsid`, `naam`, `telefoonnummer`, `woonplaats`, `postcode`, `straatnaam`, `email`, `wachtwoord`) VALUES (1, 'Jaap', '0685967459', 'Utrecht', '2934LP', 'Utrechtlaan 23', 'Jaap@gmail.com', 'Jaapie123');

COMMIT;


-- -----------------------------------------------------
-- Data for table `Apotheek`.`Apotheek`
-- -----------------------------------------------------
START TRANSACTION;
USE `Apotheek`;
INSERT INTO `Apotheek`.`Apotheek` (`Apotheekid`, `woonplaats`, `Naam`, `email`, `wachtwoord`) VALUES (1, 'Utrecht', 'Apotheek Utrecht', 'Apotheker@gmail.com', 'Apotheker123');

COMMIT;


-- -----------------------------------------------------
-- Data for table `Apotheek`.`Koerier`
-- -----------------------------------------------------
START TRANSACTION;
USE `Apotheek`;
INSERT INTO `Apotheek`.`Koerier` (`idKoerier`, `email`, `wachtwoord`) VALUES (1, 'koerier@gmail.com', 'Koerier123');

COMMIT;


-- -----------------------------------------------------
-- Data for table `Apotheek`.`Patient`
-- -----------------------------------------------------
START TRANSACTION;
USE `Apotheek`;
INSERT INTO `Apotheek`.`Patient` (`Verzekeringsnummer`, `huisartsid`, `apotheekid`, `geboorteplaats`, `Email`, `Naam`, `patientdata`, `adres`, `postcode`) VALUES (111222333, 1, 1, 'Utrecht', 'Patient@gmail.com', 'Patient', NULL, 'Utrechlaan123', '4214GP');

COMMIT;


-- -----------------------------------------------------
-- Data for table `Apotheek`.`Order`
-- -----------------------------------------------------
START TRANSACTION;
USE `Apotheek`;
INSERT INTO `Apotheek`.`Order` (`idOrder`, `leverdatum`, `levertijd`, `huisartsid`, `koerier`, `Patient`, `Apotheek`) VALUES (DEFAULT, '2017-10-10', '12:45', 1, 1, 111222333, 1);

COMMIT;


-- -----------------------------------------------------
-- Data for table `Apotheek`.`Medicijn`
-- -----------------------------------------------------
START TRANSACTION;
USE `Apotheek`;
INSERT INTO `Apotheek`.`Medicijn` (`idMedicijn`, `naam`, `beschrijving`, `maximale voorraad`, `voorraad`) VALUES (1, 'Diclofenac', 'werkt als ontstekingsremmende', 100, 100);
INSERT INTO `Apotheek`.`Medicijn` (`idMedicijn`, `naam`, `beschrijving`, `maximale voorraad`, `voorraad`) VALUES (2, 'Amoxicilline', 'antibioticum', 100, 100);
INSERT INTO `Apotheek`.`Medicijn` (`idMedicijn`, `naam`, `beschrijving`, `maximale voorraad`, `voorraad`) VALUES (3, 'Omeprazol', 'Remt productie overvloedig maagzuur', 100, 100);
INSERT INTO `Apotheek`.`Medicijn` (`idMedicijn`, `naam`, `beschrijving`, `maximale voorraad`, `voorraad`) VALUES (4, 'Doxycycline', 'antibioticum', 100, 100);
INSERT INTO `Apotheek`.`Medicijn` (`idMedicijn`, `naam`, `beschrijving`, `maximale voorraad`, `voorraad`) VALUES (5, 'Ibuprofen', 'pijnstiller', 100, 100);
INSERT INTO `Apotheek`.`Medicijn` (`idMedicijn`, `naam`, `beschrijving`, `maximale voorraad`, `voorraad`) VALUES (6, 'Metoprolol', 'bètablokker welke de bloeddruk verlaagt', 100, 100);
INSERT INTO `Apotheek`.`Medicijn` (`idMedicijn`, `naam`, `beschrijving`, `maximale voorraad`, `voorraad`) VALUES (7, 'Augmentin', 'Amoxicilline met enzymremmer clavulaanzuur,', 100, 100);
INSERT INTO `Apotheek`.`Medicijn` (`idMedicijn`, `naam`, `beschrijving`, `maximale voorraad`, `voorraad`) VALUES (8, 'Salbutamol', 'luchtwegverwijders', 100, 100);
INSERT INTO `Apotheek`.`Medicijn` (`idMedicijn`, `naam`, `beschrijving`, `maximale voorraad`, `voorraad`) VALUES (9, 'Simvastatine', 'cholesterolsyntheseremmer (verlaagt het', 100, 100);
INSERT INTO `Apotheek`.`Medicijn` (`idMedicijn`, `naam`, `beschrijving`, `maximale voorraad`, `voorraad`) VALUES (10, 'Oxazepam', 'kalmeringsmiddel', 100, 100);
INSERT INTO `Apotheek`.`Medicijn` (`idMedicijn`, `naam`, `beschrijving`, `maximale voorraad`, `voorraad`) VALUES (11, 'Codeine', 'actief tegen overmatig hoesten', 90, 90);
INSERT INTO `Apotheek`.`Medicijn` (`idMedicijn`, `naam`, `beschrijving`, `maximale voorraad`, `voorraad`) VALUES (12, 'Hydrocortison', 'overige middelen', 90, 90);
INSERT INTO `Apotheek`.`Medicijn` (`idMedicijn`, `naam`, `beschrijving`, `maximale voorraad`, `voorraad`) VALUES (13, 'Acetylsalicylzuur', 'pijnstiller', 90, 90);
INSERT INTO `Apotheek`.`Medicijn` (`idMedicijn`, `naam`, `beschrijving`, `maximale voorraad`, `voorraad`) VALUES (14, 'Overige emollientia en protectiva', NULL, 90, 90);
INSERT INTO `Apotheek`.`Medicijn` (`idMedicijn`, `naam`, `beschrijving`, `maximale voorraad`, `voorraad`) VALUES (15, 'Triamcinolon', 'Remt ontstekingen en overgevoeligheidsreacties.', 90, 90);
INSERT INTO `Apotheek`.`Medicijn` (`idMedicijn`, `naam`, `beschrijving`, `maximale voorraad`, `voorraad`) VALUES (16, 'Nitrofurantoine', 'Nitrofurantoïne is een antibioticum. Het doodt bacteriën.', 90, 90);
INSERT INTO `Apotheek`.`Medicijn` (`idMedicijn`, `naam`, `beschrijving`, `maximale voorraad`, `voorraad`) VALUES (17, 'Fusidinezuur', 'Fusidinezuur bestrijdt bepaalde bacteriën (antibioticum).', 90, 90);
INSERT INTO `Apotheek`.`Medicijn` (`idMedicijn`, `naam`, `beschrijving`, `maximale voorraad`, `voorraad`) VALUES (18, 'Pantoprazo', 'Pantoprazol vermindert de aanmaak van zuur in de maag.', 90, 90);
INSERT INTO `Apotheek`.`Medicijn` (`idMedicijn`, `naam`, `beschrijving`, `maximale voorraad`, `voorraad`) VALUES (19, 'Temazepam', 'Temazepam werkt rustgevend, vermindert angstgevoelens ontspant de spieren en maakt suf.', 90, 90);
INSERT INTO `Apotheek`.`Medicijn` (`idMedicijn`, `naam`, `beschrijving`, `maximale voorraad`, `voorraad`) VALUES (20, 'Carbasalaatcalcium', 'Carbasalaatcalcium zorgt ervoor dat bloed minder makkelijk samenklontert (antistollingsmedicijn). Hierdoor heeft u minder kans op trombose.', 80, 80);
INSERT INTO `Apotheek`.`Medicijn` (`idMedicijn`, `naam`, `beschrijving`, `maximale voorraad`, `voorraad`) VALUES (21, 'Macrogol combinatiepreparaten', 'Macrogol houdt water in de darm vast, waardoor de ontlasting zachter wordt. Dit stimuleert de stoelgang.', 80, 80);
INSERT INTO `Apotheek`.`Medicijn` (`idMedicijn`, `naam`, `beschrijving`, `maximale voorraad`, `voorraad`) VALUES (22, 'Naproxen', 'Naproxen stilt pijn, vermindert ontstekingen en verlaagt koorts.', 80, 80);
INSERT INTO `Apotheek`.`Medicijn` (`idMedicijn`, `naam`, `beschrijving`, `maximale voorraad`, `voorraad`) VALUES (23, 'Hydrochloorthiazide', 'Hydrochloorthiazide is een plastablet dat de bloeddruk verlaagt en de pompkracht van het hart verbetert.', 80, 80);
INSERT INTO `Apotheek`.`Medicijn` (`idMedicijn`, `naam`, `beschrijving`, `maximale voorraad`, `voorraad`) VALUES (24, 'Metformine', 'Metformine verlaagt het bloedglucose. Te veel glucose in bloed maakt ziek en is schadelijk voor hart, bloedvaten, ogen, nieren en zenuwen.', 80, 80);
INSERT INTO `Apotheek`.`Medicijn` (`idMedicijn`, `naam`, `beschrijving`, `maximale voorraad`, `voorraad`) VALUES (25, 'Atorvastatine', 'Atorvastatine verlaagt een aantal bloedvetten, zoals cholesterol, en vermindert aderverkalking.', 80, 80);

COMMIT;


-- -----------------------------------------------------
-- Data for table `Apotheek`.`orderregel`
-- -----------------------------------------------------
START TRANSACTION;
USE `Apotheek`;
INSERT INTO `Apotheek`.`orderregel` (`medicijnid`, `orderid`, `aantal`) VALUES (1, 1, 3);
INSERT INTO `Apotheek`.`orderregel` (`medicijnid`, `orderid`, `aantal`) VALUES (2, 1, 4);
INSERT INTO `Apotheek`.`orderregel` (`medicijnid`, `orderid`, `aantal`) VALUES (15, 1, 1);

COMMIT;

