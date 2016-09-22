-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema addressbook
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema addressbook
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `addressbook` DEFAULT CHARACTER SET utf8 ;
USE `addressbook` ;

-- -----------------------------------------------------
-- Table `addressbook`.`addresses`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `addressbook`.`addresses` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `first_name` VARCHAR(45) NOT NULL,
  `last_name` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `phone` VARCHAR(45) NOT NULL,
  `address_1` VARCHAR(45) NOT NULL,
  `address_2` VARCHAR(45) NULL,
  `city` VARCHAR(45) NOT NULL,
  `state` VARCHAR(45) NOT NULL,
  `zipcode` VARCHAR(45) NOT NULL,
  `notes` TEXT NULL,
  `contact_group` VARCHAR(45) NOT NULL,
  `date_added` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `addressbook`.`addresses`
-- -----------------------------------------------------
START TRANSACTION;
USE `addressbook`;
INSERT INTO `addressbook`.`addresses` (`id`, `first_name`, `last_name`, `email`, `phone`, `address_1`, `address_2`, `city`, `state`, `zipcode`, `notes`, `contact_group`, `date_added`) VALUES (DEFAULT, 'Alexandre', 'Martins', 'martinso.alex@gmail.com', '(61) 9 8194-6374', 'sqs 214 bloco c apto 305', 'ouro vermelho I, v1 q5 c19', 'Brasília', 'DF', '12345', NULL, 'Business', DEFAULT);
INSERT INTO `addressbook`.`addresses` (`id`, `first_name`, `last_name`, `email`, `phone`, `address_1`, `address_2`, `city`, `state`, `zipcode`, `notes`, `contact_group`, `date_added`) VALUES (DEFAULT, 'Esteban', 'Morales', 'esteban@morales.com', '(61) 9 9999-9999', 'sqs241 bloco 305 apto c', NULL, 'Gama', 'DF', '12345', NULL, 'Family', DEFAULT);
INSERT INTO `addressbook`.`addresses` (`id`, `first_name`, `last_name`, `email`, `phone`, `address_1`, `address_2`, `city`, `state`, `zipcode`, `notes`, `contact_group`, `date_added`) VALUES (DEFAULT, 'Lucia', DEFAULT, 'lucia@costa.com', '(61) 9 9999-9998', 'sqs124 bloco 30c apto 5', 'belzonte, quadra 4 casa 2', 'Pindamonhanguaba', 'SP', '12344', NULL, 'Business', DEFAULT);

COMMIT;

