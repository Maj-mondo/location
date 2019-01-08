CREATE TABLE IF NOT EXISTS `bookings` (
  `libelle` VARCHAR(45) NULL,
  `idTransac` INT NOT NULL,
  CONSTRAINT `pk_bookings` PRIMARY KEY (`idTransac`),
  CONSTRAINT `fk_bookings_transactions`
    FOREIGN KEY (`idTransac`)
    REFERENCES `transactions` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;
