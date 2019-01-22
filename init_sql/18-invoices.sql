CREATE TABLE IF NOT EXISTS `invoices` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `date` DATE NULL,
  `price` INT NULL,
  CONSTRAINT `pk_invoices` PRIMARY KEY (`id`)
 );
