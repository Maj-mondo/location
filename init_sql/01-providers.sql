CREATE TABLE `providers` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `address` VARCHAR(45) NULL,
  `city` VARCHAR(45) NULL,
  `postal_code` VARCHAR(45) NULL,
  `cni` VARCHAR(255),
  `phone` VARCHAR(20) NULL,
  CONSTRAINT `pk_providers` PRIMARY KEY (`id`));
