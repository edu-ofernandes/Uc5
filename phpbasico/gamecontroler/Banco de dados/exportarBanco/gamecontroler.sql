-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema gamecontroler
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Table `usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(90) NULL,
  `foto` LONGTEXT NULL,
  `bio` LONGTEXT NULL,
  `email` VARCHAR(95) NULL,
  `senha` VARCHAR(90) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `categorias`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `categorias` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(90) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `jogos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `jogos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(90) NULL,
  `categorias_id` INT NOT NULL,
  `foto` LONGTEXT NULL,
  `descricao` VARCHAR(200) NULL,
  `link` LONGTEXT NULL,
  PRIMARY KEY (`id`, `categorias_id`),
  INDEX `fk_jogos_categorias1_idx` (`categorias_id` ASC) ,
  CONSTRAINT `fk_jogos_categorias1`
    FOREIGN KEY (`categorias_id`)
    REFERENCES `categorias` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `jogosdosusuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `jogosdosusuarios` (
  `usuarios_id` INT NOT NULL,
  `jogos_id` INT NOT NULL,
  PRIMARY KEY (`usuarios_id`, `jogos_id`),
  INDEX `fk_usuarios_has_jogos_jogos1_idx` (`jogos_id` ASC) ,
  INDEX `fk_usuarios_has_jogos_usuarios_idx` (`usuarios_id` ASC) ,
  CONSTRAINT `fk_usuarios_has_jogos_usuarios`
    FOREIGN KEY (`usuarios_id`)
    REFERENCES `usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuarios_has_jogos_jogos1`
    FOREIGN KEY (`jogos_id`)
    REFERENCES `jogos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `atividades`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `atividades` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `usuarios_id` INT NOT NULL,
  `jogos_id` INT NOT NULL,
  `data` DATE NULL,
  `pontuacao` DOUBLE NULL,
  `tempo` TIME NULL,
  PRIMARY KEY (`id`, `usuarios_id`, `jogos_id`),
  CONSTRAINT `fk_atividades_jogosdosusuarios1`
    FOREIGN KEY (`usuarios_id` , `jogos_id`)
    REFERENCES `jogosdosusuarios` (`usuarios_id` , `jogos_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `administradores`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `administradores` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(95) NOT NULL,
  `email` VARCHAR(95) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
