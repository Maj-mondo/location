CREATE TABLE IF NOT EXISTS `car-conditions` (
  `state` VARCHAR(45) NOT NULL,
  `idCatalog` INT NOT NULL,
  `idCar` INT NOT NULL,
  CONSTRAINT `pk_car_conditions` PRIMARY KEY (`idCatalog`, `idCar`, `state`),
  CONSTRAINT `fk_car_conditions_catalogues`
    FOREIGN KEY (`idCatalog`)
    REFERENCES `catalogs` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_car_conditions_cars`
    FOREIGN KEY (`idCar`)
    REFERENCES `cars` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;
