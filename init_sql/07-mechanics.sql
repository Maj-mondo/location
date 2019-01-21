CREATE TABLE IF NOT EXISTS `mechanics` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `first_name` VARCHAR(45) NULL,
  `last_name` VARCHAR(45) NULL,
  `garage` VARCHAR(255) NULL,
  `phone_number` VARCHAR(255)  NULL,
  `address` VARCHAR(255) NULL,
  `city` VARCHAR(45) NULL,
  CONSTRAINT `pk_mechanics` PRIMARY KEY (`id`))
ENGINE = InnoDB;
