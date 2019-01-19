CREATE TABLE `cars` (
  `serial_number` VARCHAR(255) NOT NULL,
  `price` INT NOT NULL,
  `currency` VARCHAR(5) NOT NULL,
  `type` VARCHAR(45) NULL,
  `version` VARCHAR(45) NULL,
  `color` VARCHAR(45) NULL,
  `transmission` VARCHAR(45) NULL,
  `gas_type` VARCHAR(45) NULL,
  `sits` INT DEFAULT 0 NULL,
  `child_sit` INT NULL DEFAULT 0,
  `miles` INT NULL DEFAULT 0,
  `doors` INT DEFAULT 0 NULL,
  `airbag` INT NULL DEFAULT 0,
    `gps` TINYINT DEFAULT 0 DEFAULT 0,
    `ac` TINYINT DEFAULT 0 NULL,
  `released_at` DATE NULL,
  `provider_id` INT DEFAULT 0,
  `model_id` INT DEFAULT 0,
  CONSTRAINT `pk_cars` PRIMARY KEY (`serial_number`),
  CONSTRAINT `fk_cars_models`
    FOREIGN KEY (`model_id`)
    REFERENCES `car_models` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_cars_providers`
    FOREIGN KEY (`provider_id`)
    REFERENCES `providers` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE
);
