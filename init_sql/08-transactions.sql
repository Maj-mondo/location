CREATE TABLE IF NOT EXISTS `transactions` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `transac_type` VARCHAR(255) NOT NULL,
  `start` date  NULL,
  `end` date  NULL,
  `idClient` INT NOT NULL,
  `idAgency` INT NOT  NULL,
  `serial_number` VARCHAR(255) NOT  NULL,
  `idPayment` INT NOT  NULL,
  `idTarif` INT NOT  NULL,
  CONSTRAINT `pk_transactions` PRIMARY KEY (`id`),
  CONSTRAINT `fk_transactions_client` FOREIGN KEY (`idClient`) REFERENCES `clients` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_transactions_agencie` FOREIGN KEY (`idAgency`) REFERENCES `agencies` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_transactions_car` FOREIGN KEY (`serial_number`) REFERENCES `cars` (`serial_number`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_transactions_payment` FOREIGN KEY (`idPayment`) REFERENCES `payments` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_transactions_tarif` FOREIGN KEY (`idTarif`) REFERENCES `tarifs` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE
)
ENGINE = InnoDB;