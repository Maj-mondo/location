CREATE TABLE IF NOT EXISTS `agencies` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(45) NOT NULL,
  `adresse` VARCHAR(45) NULL,
  `codepostal` VARCHAR(45) NULL,
  `h_ouverture` DATETIME NULL,
  `joursdetravail` TEXT(100) NULL,
  `ville` VARCHAR(45) NULL,
  `tel` INT NULL,
  `h_fermeture` DATETIME NULL,
  `logo` VARCHAR(255) NULL,
  CONSTRAINT `pk_agencies` PRIMARY KEY (`id`))

ENGINE = InnoDB;
