CREATE TABLE IF NOT EXISTS `payments` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `date` INT NOT NULL,
  `type` INT NOT NULL,
  `idAgency` INT NOT NULL,
  `idInvoice` INT NOT NULL,
  CONSTRAINT `pk_payments` PRIMARY KEY (`id`),
  CONSTRAINT `fk_transactions_agences`
    FOREIGN KEY (`idAgency`)
    REFERENCES `agencies` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_transactions_invoices`
    FOREIGN KEY (`idInvoice`)
    REFERENCES `invoices` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;
