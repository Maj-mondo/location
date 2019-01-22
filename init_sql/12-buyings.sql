CREATE TABLE IF NOT EXISTS `buyings` (
  `libelle` VARCHAR(45) NULL,
  `idTransac` INT NOT NULL,
  CONSTRAINT `pk_buyings` PRIMARY KEY (`idTransac`),
  CONSTRAINT `fk_buyings_transactions` FOREIGN KEY (`idTransac`) REFERENCES `transactions` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;
