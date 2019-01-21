CREATE TABLE IF NOT EXISTS `transactions` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `idClient` INT NOT NULL,
  `idAgency` INT NOT NULL,
  `serial_number` INT NOT NULL,
  `idPayment` INT NOT NULL,
  `idTarif` INT NOT NULL,
  CONSTRAINT `pk_transactions` PRIMARY KEY (`id`),
  CONSTRAINT `fk_transactions_clients`
    FOREIGN KEY (`idClient`)
    REFERENCES `clients` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_transactions_agenciess`
    FOREIGN KEY (`idAgency`)
    REFERENCES `agencies` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_transactions_cars`
    FOREIGN KEY (`serial_number`)
    REFERENCES `cars` (`serial_number`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_transactions_payments`
    FOREIGN KEY (`idPayment`)
    REFERENCES `payments` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_transactions_tarifs`
    FOREIGN KEY (`idTarif`)
    REFERENCES `tarifs` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE
)
ENGINE = InnoDB;