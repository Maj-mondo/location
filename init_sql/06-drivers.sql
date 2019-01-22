CREATE TABLE IF NOT EXISTS `drivers` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `first_name` VARCHAR(45) NULL,
  `last_name` VARCHAR(45) NULL,
  `cni` VARCHAR(255) NULL,
  `address` VARCHAR(255) NULL,
  `city` VARCHAR(45) NULL,
  `license_number` VARCHAR(255) NULL,
  `birthdate` DATE NULL,
  `gender` VARCHAR(45) NULL,
  `phone_number` VARCHAR(255) NOT NULL,
  CONSTRAINT `pk_drivers` PRIMARY KEY (id));

CREATE UNIQUE INDEX `no_permis_UNIQUE` ON `drivers` (`license_number` ASC) VISIBLE;

CREATE UNIQUE INDEX `cni_UNIQUE` ON `drivers` (`cni` ASC) VISIBLE;
