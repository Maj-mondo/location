CREATE TABLE IF NOT EXISTS `car-transactions` (
  `date_debut` DATE NOT NULL,
  `date_fin` DATE NOT NULL,
  `idCar` INT NOT NULL,
  `idTransac` INT NOT NULL,
  CONSTRAINT `pk_car_transactions` PRIMARY KEY (`date_debut`, `date_fin`, `idCar`, `idTransac`),
  CONSTRAINT `fk_car_transactions_cars`
    FOREIGN KEY (`idCar`)
    REFERENCES `cars` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_car_transactions_transactions`
    FOREIGN KEY (`idTransac`)
    REFERENCES `transactions` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


