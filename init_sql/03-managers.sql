CREATE TABLE IF NOT EXISTS `managers` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(45) NULL,
  `prenom` VARCHAR(45) NULL,
  `datenaiss` DATE NULL,
  `adresse` VARCHAR(45) NULL,
  `ville` VARCHAR(45) NULL,
  `cni` INT NULL,
  `genre` VARCHAR(45) NULL,
  `fonction` VARCHAR(45) NULL,
  `tel` INT NULL,
  `salaire` INT NULL,
  `startdate` DATE NULL,
  `idAgency` INT NOT NULL,
  CONSTRAINT `pk_managers` PRIMARY KEY (`id`),
  CONSTRAINT `fk_managers_agencies` FOREIGN KEY (`idAgency`)
  REFERENCES `agencies` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;
