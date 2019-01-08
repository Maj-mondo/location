CREATE TABLE IF NOT EXISTS `car-retuns` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `idAgence` INT NULL,
  `dateRetour` DATE NULL,
  `idRental` INT NOT NULL,
  CONSTRAINT `pk_car_retuns` PRIMARY KEY (`id`),
  CONSTRAINT `fk_car_retuns_rentals`
    FOREIGN KEY (`idRental`)
    REFERENCES `rentals` (`idTransac`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;
