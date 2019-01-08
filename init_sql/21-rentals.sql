CREATE TABLE IF NOT EXISTS `rentals` (
  `idTransac` INT NOT NULL,
  `idTarif` INT NOT NULL,
  `date_debut` DATE NULL,
  `date_fin` DATE NULL,
  `date_retour_prevue` DATE NULL,
  CONSTRAINT `pk_rentals` PRIMARY KEY (`idTransac`),
  CONSTRAINT `fk_rentals_transactions` FOREIGN KEY (`idTransac`) REFERENCES `transactions` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_rentals_prices` FOREIGN KEY (`idTarif`) REFERENCES `prices` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;
