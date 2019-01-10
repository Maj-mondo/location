CREATE TABLE IF NOT EXISTS `transactions` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `idClient` INT NOT NULL,
  `idAgency` INT NOT NULL,
  CONSTRAINT `pk_transactions` PRIMARY KEY (`id`),
  CONSTRAINT `fk_transactions_clients`
    FOREIGN KEY (`idClient`)
    REFERENCES `clients` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_transactions_agences`
    FOREIGN KEY (`idAgency`)
    REFERENCES `agencies` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;