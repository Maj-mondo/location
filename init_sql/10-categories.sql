CREATE TABLE IF NOT EXISTS `categories` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `classe` VARCHAR(45) NULL,
  `libelle` VARCHAR(45) NULL,
  `photo` VARCHAR(255) NULL,
  CONSTRAINT `pk_categories` PRIMARY KEY (`id`))
ENGINE = InnoDB;
