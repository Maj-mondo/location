CREATE TABLE IF NOT EXISTS `sales` (
  `libelle` VARCHAR(45) NULL,
  `idTransac` INT NOT NULL,
  CONSTRAINT `pk_sales` PRIMARY KEY (`idTransac`),
  CONSTRAINT `fk_sales_transactions`
    FOREIGN KEY (`idTransac`)
    REFERENCES `transactions` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;
