CREATE TABLE IF NOT EXISTS `car-reviews` (
  `date_debut` DATE NOT NULL,
  `date_fin` DATE NOT NULL,
  `cout` INT NOT NULL,
  `type_revision` VARCHAR(45) NULL,
  `objet` VARCHAR(45) NULL,
  `description` VARCHAR(45) NULL,
  `kilometrage` INT NULL,
  `verification` VARCHAR(255) NULL,
  `constat` VARCHAR(255) NULL,
  `idCar` INT NOT NULL,
  `idMechanic` INT NOT NULL,
  CONSTRAINT `pk_car_reviews` PRIMARY KEY (`date_debut`, `date_fin`, `idCar`, `idMechanic`, `cout`),
  CONSTRAINT `fk_car_reviews_cars`
    FOREIGN KEY (`idCar`)
    REFERENCES `cars` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_car_reviews_mechanics`
    FOREIGN KEY (`idMechanic`)
    REFERENCES `mechanics` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;
