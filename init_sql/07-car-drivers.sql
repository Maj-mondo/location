CREATE TABLE IF NOT EXISTS `drivers` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(45) NULL,
  `prenom` VARCHAR(45) NULL,
  `cni` INT NOT NULL,
  `datenaiss` DATE NULL,
  `adresse` VARCHAR(45) NULL,
  `ville` VARCHAR(45) NULL,
  `genre` VARCHAR(45) NULL,
  `tel` INT NULL,
  `no_permis` INT NOT NULL,
  CONSTRAINT `pk_drivers` PRIMARY KEY (`id`))
ENGINE = InnoDB;

CREATE UNIQUE INDEX `no_permis_UNIQUE` ON `drivers` (`no_permis` ASC) VISIBLE;

CREATE UNIQUE INDEX `cni_UNIQUE` ON `drivers` (`cni` ASC) VISIBLE;
