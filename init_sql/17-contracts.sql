CREATE TABLE IF NOT EXISTS `contracts` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `date` DATE NULL,
  `type` VARCHAR(45) NULL,
  `remise` FLOAT NULL,
  `idRental` INT NOT NULL,
  CONSTRAINT `pk_contracts` PRIMARY KEY (`id`),
  CONSTRAINT `fk_contracts_rentals`
    FOREIGN KEY (`idRental`)
    REFERENCES `rentals` (`idTransac`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;
