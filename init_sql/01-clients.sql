CREATE TABLE IF NOT EXISTS `clients` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(45) NULL,
  `prenom` VARCHAR(45) NULL,
  `cni` INT NULL,
  `adresse` VARCHAR(45) NULL,
  `ville` VARCHAR(45) NULL,
  `nopermis` INT NULL,
  `type` VARCHAR(200) NULL,
  `datenaiss` DATETIME NULL,
  `genre` VARCHAR(45) NULL,
  `nbr_location` INT NULL,
  `no_permis` INT NULL,
  CONSTRAINT `pk_clients` PRIMARY KEY (id))
ENGINE = InnoDB;

CREATE UNIQUE INDEX `no_permis_UNIQUE` ON `clients` (`no_permis` ASC) VISIBLE;
