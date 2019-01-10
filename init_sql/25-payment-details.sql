CREATE TABLE IF NOT EXISTS `payment-details` (
  `datePayment` DATE NOT NULL,
  `idTransact` INT NOT NULL,
  `idPayment` INT NOT NULL,
  `typePayment` VARCHAR(45) NULL,
  `noCarteCredit` INT NULL,
  `noCheque` INT NULL,
  CONSTRAINT `pk_payment_details` PRIMARY KEY (`datePayment`, `idPayment`, `idTransact`),
  CONSTRAINT `fk_payment_details_transactions`
    FOREIGN KEY (`idTransact`)
    REFERENCES `transactions` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_payment_details_payments`
    FOREIGN KEY (`idPayment`)
    REFERENCES `payments` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;
