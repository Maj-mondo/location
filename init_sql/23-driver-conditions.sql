CREATE TABLE IF NOT EXISTS `driver-conditions` (
  `date_debut` DATE NOT NULL,
  `date_fin` DATE NOT NULL,
  `idDriver` INT NOT NULL,
  `idRental` INT NOT NULL,
  CONSTRAINT `pk_driver_conditions` PRIMARY KEY (`date_debut`, `date_fin`, `idDriver`, `idRental`),
  CONSTRAINT `fk_driver_conditions_drivers`
    FOREIGN KEY (`idDriver`)
    REFERENCES `drivers` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_driver_conditions_rentals`
    FOREIGN KEY (`idRental`)
    REFERENCES `rentals` (`idTransac`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;
