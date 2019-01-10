CREATE TABLE IF NOT EXISTS `invoices` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `date` DATE NULL,
  `idPayment` INT NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_invoices_payments`
    FOREIGN KEY (`idPayment`)
    REFERENCES `payments` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;
