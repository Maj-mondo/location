CREATE TABLE IF NOT EXISTS `client-agencies` (
  `date` DATE NOT NULL,
  `idClient` INT NOT NULL,
  `idAgency` INT NOT NULL,
  CONSTRAINT `pk_clients_agencies` PRIMARY KEY (`date`, `idClient`, `idAgency`),
  CONSTRAINT `fk_clients_agencies_clients`
    FOREIGN KEY (`idClient`)
    REFERENCES `clients` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_clients_agencies_agencies`
    FOREIGN KEY (`idAgency`)
    REFERENCES `agencies` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;
