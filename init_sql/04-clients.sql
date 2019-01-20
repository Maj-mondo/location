CREATE TABLE IF NOT EXISTS `clients` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `first_name` VARCHAR(45) NULL,
  `last_name` VARCHAR(45) NULL,
  `cni` VARCHAR(255) NULL,
  `address` VARCHAR(255) NULL,
  `city` VARCHAR(45) NULL,
  `license_number` VARCHAR(255) NULL,
  `role` INT DEFAULT 0,
  `birthdate` DATETIME NULL,
  `gender` VARCHAR(45) NULL,
  -- computed variable`nbr_location` INT NULL,
  `phone_number` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `create_at` DATETIME NULL DEFAULT CURRENT_TIMESTAMP,
  CONSTRAINT `pk_clients` PRIMARY KEY (id));