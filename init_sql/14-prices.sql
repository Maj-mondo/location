CREATE TABLE IF NOT EXISTS `tarifs` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `price` INT NULL,
  `type_tarif` VARCHAR(45) NULL,
  CONSTRAINT `pk_tarifs` PRIMARY KEY (`id`))
ENGINE = InnoDB;
