CREATE TABLE IF NOT EXISTS `prices` (
  `montant` INT NULL,
  `type_tarif` VARCHAR(45) NULL,
  `id` INT NOT NULL AUTO_INCREMENT,
  CONSTRAINT `pk_prices` PRIMARY KEY (`id`))
ENGINE = InnoDB;
