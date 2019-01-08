CREATE TABLE IF NOT EXISTS `mechanics` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(45) NULL,
  `prenom` VARCHAR(45) NULL,
  `cni` INT NULL,
  `garage` VARCHAR(45) NULL,
  `tel` INT NULL,
  `adresse` VARCHAR(45) NULL,
  CONSTRAINT `pk_mechanics` PRIMARY KEY (`id`))
ENGINE = InnoDB;
