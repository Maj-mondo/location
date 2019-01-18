CREATE TABLE `fournisseurs` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(45) NULL,
  `adresse` VARCHAR(45) NULL,
  `ville` VARCHAR(45) NULL,
  `codepostal` VARCHAR(45) NULL,
  `cni` VARCHAR(255),
  `tel` VARCHAR(13) NULL,
  CONSTRAINT `pk_providers` PRIMARY KEY (`id`));
