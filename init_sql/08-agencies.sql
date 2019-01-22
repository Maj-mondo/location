CREATE TABLE IF NOT EXISTS `agencies` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `address` VARCHAR(45) NULL,
  `postal_code` VARCHAR(45) NULL,
  `opening`  time  NULL default '07:00',
  `closing` time  NULL default '20:00',
  `working_days` VARCHAR(100) NULL,
  `city` VARCHAR(45) NULL,
  `phone` INT NULL,
  CONSTRAINT `pk_agencies` PRIMARY KEY (`id`)
);
