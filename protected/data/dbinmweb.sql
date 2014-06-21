SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `dbinmweb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `dbinmweb` ;

-- -----------------------------------------------------
-- Table `dbinmweb`.`barrio`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbinmweb`.`barrio` (
  `idbarrio` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `created_date` TIMESTAMP NULL,
  `modified_date` TIMESTAMP NULL,
  `created_by` VARCHAR(128) NULL,
  `modified_by` VARCHAR(128) NULL,
  PRIMARY KEY (`idbarrio`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbinmweb`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbinmweb`.`usuario` (
  `idusuario` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(60) NOT NULL,
  `apellido` VARCHAR(60) NOT NULL,
  `email` VARCHAR(60) NOT NULL,
  `password` VARCHAR(60) NOT NULL,
  `telefono` VARCHAR(45) NOT NULL,
  `celular` VARCHAR(45) NOT NULL,
  `rol` VARCHAR(128) NOT NULL,
  PRIMARY KEY (`idusuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbinmweb`.`empleado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbinmweb`.`empleado` (
  `idusuario` INT NOT NULL,
  `numero` INT NOT NULL,
  `sueldo` MEDIUMTEXT NOT NULL,
  `created_date` TIMESTAMP NULL,
  `modified_date` TIMESTAMP NULL,
  `created_by` VARCHAR(128) NULL,
  `modified_by` VARCHAR(128) NULL,
  PRIMARY KEY (`idusuario`),
  CONSTRAINT `fk_empleado`
    FOREIGN KEY (`idusuario`)
    REFERENCES `dbinmweb`.`usuario` (`idusuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbinmweb`.`cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbinmweb`.`cliente` (
  `idusuario` INT NOT NULL,
  `created_date` TIMESTAMP NULL,
  `modified_date` TIMESTAMP NULL DEFAULT NULL,
  `created_by` VARCHAR(128) NULL,
  `modified_by` VARCHAR(128) NULL,
  PRIMARY KEY (`idusuario`),
  CONSTRAINT `fk_cliente`
    FOREIGN KEY (`idusuario`)
    REFERENCES `dbinmweb`.`usuario` (`idusuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbinmweb`.`propiedad`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbinmweb`.`propiedad` (
  `idpropiedad` INT NOT NULL AUTO_INCREMENT,
  `canthab` INT NOT NULL,
  `cantbano` INT NOT NULL,
  `terreno` INT NULL,
  `construido` INT NULL,
  `garage` TINYINT(1) NULL,
  `jardin` TINYINT(1) NULL,
  `fondo` TINYINT(1) NULL,
  `precio` FLOAT NOT NULL,
  `descripcion` VARCHAR(150) NOT NULL,
  `ingreso` DATE NOT NULL,
  `egreso` DATE NULL,
  `clienteid` INT NOT NULL,
  `empleadoid` INT NOT NULL,
  `created_date` TIMESTAMP NULL,
  `modified_date` TIMESTAMP NULL,
  `created_by` VARCHAR(128) NULL,
  `modified_by` VARCHAR(128) NULL,
  PRIMARY KEY (`idpropiedad`),
  INDEX `fk_empleado_idx` (`empleadoid` ASC),
  INDEX `fk_cliente_idx` (`clienteid` ASC),
  CONSTRAINT `fk_agente`
    FOREIGN KEY (`empleadoid`)
    REFERENCES `dbinmweb`.`empleado` (`idusuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_dueno`
    FOREIGN KEY (`clienteid`)
    REFERENCES `dbinmweb`.`cliente` (`idusuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbinmweb`.`ubicacion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbinmweb`.`ubicacion` (
  `idubicacion` INT NOT NULL AUTO_INCREMENT,
  `direccion` VARCHAR(100) NOT NULL,
  `latitudlongitud` VARCHAR(100) NULL,
  `barrioid` INT NOT NULL,
  `propiedadid` INT NOT NULL,
  `created_date` TIMESTAMP NULL,
  `modified_date` TIMESTAMP NULL,
  `created_by` VARCHAR(128) NULL,
  `modified_by` VARCHAR(128) NULL,
  PRIMARY KEY (`idubicacion`),
  INDEX `fk_barrio_idx` (`barrioid` ASC),
  INDEX `fk_propiedad_ubicacion_idx` (`propiedadid` ASC),
  CONSTRAINT `fk_barrio_ubicacion`
    FOREIGN KEY (`barrioid`)
    REFERENCES `dbinmweb`.`barrio` (`idbarrio`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_propiedad_ubicacion`
    FOREIGN KEY (`propiedadid`)
    REFERENCES `dbinmweb`.`propiedad` (`idpropiedad`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbinmweb`.`imagen`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbinmweb`.`imagen` (
  `idimagen` INT NOT NULL AUTO_INCREMENT,
  `archivo` VARCHAR(100) NOT NULL,
  `orden` INT NOT NULL,
  `propiedadid` INT NOT NULL,
  `created_date` TIMESTAMP NULL,
  `modified_date` TIMESTAMP NULL,
  `created_by` VARCHAR(128) NULL,
  `modified_by` VARCHAR(128) NULL,
  PRIMARY KEY (`idimagen`),
  INDEX `fk_propiedad_idx` (`propiedadid` ASC),
  CONSTRAINT `fk_propiedad`
    FOREIGN KEY (`propiedadid`)
    REFERENCES `dbinmweb`.`propiedad` (`idpropiedad`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbinmweb`.`requerida`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbinmweb`.`requerida` (
  `idrequerida` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(60) NOT NULL,
  `apellido` VARCHAR(60) NOT NULL,
  `email` VARCHAR(60) NOT NULL,
  `descripcion` VARCHAR(150) NOT NULL,
  `barrioid` INT NOT NULL,
  PRIMARY KEY (`idrequerida`),
  INDEX `fk_barrio_idx` (`barrioid` ASC),
  CONSTRAINT `fk_barrio_requerida`
    FOREIGN KEY (`barrioid`)
    REFERENCES `dbinmweb`.`barrio` (`idbarrio`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbinmweb`.`destacado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbinmweb`.`destacado` (
  `iddestacado` INT NOT NULL AUTO_INCREMENT,
  `fechainicio` DATETIME NOT NULL,
  `fechafin` DATETIME NOT NULL,
  `idpropiedad` INT NOT NULL,
  `created_date` TIMESTAMP NULL,
  `modified_date` TIMESTAMP NULL,
  `created_by` VARCHAR(128) NULL,
  `modified_by` VARCHAR(128) NULL,
  PRIMARY KEY (`iddestacado`),
  INDEX `id_propiedad_destacado_idx` (`idpropiedad` ASC),
  CONSTRAINT `id_propiedad_destacado`
    FOREIGN KEY (`idpropiedad`)
    REFERENCES `dbinmweb`.`propiedad` (`idpropiedad`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbinmweb`.`visitas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `dbinmweb`.`visitas` (
  `idvisitas` INT NOT NULL AUTO_INCREMENT,
  `idpropiedad` INT NOT NULL,
  `fecha` DATE NOT NULL,
  `hora` TIME NOT NULL,
  `created_date` TIMESTAMP NULL,
  `modified_date` TIMESTAMP NULL,
  `created_by` VARCHAR(128) NULL,
  `modified_by` VARCHAR(128) NULL,
  PRIMARY KEY (`idvisitas`),
  INDEX `id_propiedad_visita_idx` (`idpropiedad` ASC),
  CONSTRAINT `id_propiedad_visita`
    FOREIGN KEY (`idpropiedad`)
    REFERENCES `dbinmweb`.`propiedad` (`idpropiedad`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
