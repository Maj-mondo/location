CREATE TABLE IF NOT EXISTS `providers` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(45) NULL,
  `adresse` VARCHAR(45) NULL,
  `ville` VARCHAR(45) NULL,
  `codepostal` VARCHAR(45) NULL,
  `cni` INT NULL,
  `tel` INT NULL,
  CONSTRAINT `pk_providers` PRIMARY KEY (`id`))
ENGINE = InnoDB;
