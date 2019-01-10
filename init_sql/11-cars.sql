CREATE TABLE IF NOT EXISTS `cars` (
  `id` INT NOT NULL,
  `no_immatr` INT NULL,
  `datecirculation` DATE NULL,
  `idModel` INT NOT NULL,
  `idProvider` INT NULL,
  `idAgency` INT NOT NULL,
  `photo` VARCHAR(255) NULL,
  `idCategorie` INT NOT NULL,
  CONSTRAINT `pk_cars` PRIMARY KEY (`id`),
  CONSTRAINT `fk_cars_models`
    FOREIGN KEY (`idModel`)
    REFERENCES `models` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_cars_providers`
    FOREIGN KEY (`idProvider`)
    REFERENCES `providers` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_cars_agencies`
    FOREIGN KEY (`idAgency`)
    REFERENCES `agencies` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_cars_categories`
    FOREIGN KEY (`idCategorie`)
    REFERENCES `categories` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;
