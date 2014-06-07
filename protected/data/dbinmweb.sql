SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

DROP SCHEMA IF EXISTS `dbinmweb` ;
CREATE SCHEMA IF NOT EXISTS `dbinmweb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `dbinmweb` ;

-- -----------------------------------------------------
-- Table `dbinmweb`.`pais`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `dbinmweb`.`pais` ;

CREATE  TABLE IF NOT EXISTS `dbinmweb`.`pais` (
  `idpais` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`idpais`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbinmweb`.`ciudad`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `dbinmweb`.`ciudad` ;

CREATE  TABLE IF NOT EXISTS `dbinmweb`.`ciudad` (
  `idciudad` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NOT NULL ,
  `paisid` INT NOT NULL ,
  PRIMARY KEY (`idciudad`) ,
  INDEX `fk_pais_ciudad` (`paisid` ASC) ,
  CONSTRAINT `fk_pais_ciudad`
    FOREIGN KEY (`paisid` )
    REFERENCES `dbinmweb`.`pais` (`idpais` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbinmweb`.`barrio`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `dbinmweb`.`barrio` ;

CREATE  TABLE IF NOT EXISTS `dbinmweb`.`barrio` (
  `idbarrio` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NOT NULL ,
  `ciudadid` INT NOT NULL ,
  PRIMARY KEY (`idbarrio`) ,
  INDEX `fk_ciudadid_idx` (`ciudadid` ASC) ,
  CONSTRAINT `fk_ciudadid`
    FOREIGN KEY (`ciudadid` )
    REFERENCES `dbinmweb`.`ciudad` (`idciudad` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbinmweb`.`ubicacion`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `dbinmweb`.`ubicacion` ;

CREATE  TABLE IF NOT EXISTS `dbinmweb`.`ubicacion` (
  `idubicacion` INT NOT NULL AUTO_INCREMENT ,
  `direccion` VARCHAR(100) NOT NULL ,
  `latitudlongitud` VARCHAR(100) NULL ,
  `barrioid` INT NOT NULL ,
  PRIMARY KEY (`idubicacion`) ,
  INDEX `fk_barrio_idx` (`barrioid` ASC) ,
  CONSTRAINT `fk_barrio_ubicacion`
    FOREIGN KEY (`barrioid` )
    REFERENCES `dbinmweb`.`barrio` (`idbarrio` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbinmweb`.`usuario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `dbinmweb`.`usuario` ;

CREATE  TABLE IF NOT EXISTS `dbinmweb`.`usuario` (
  `idusuario` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(60) NOT NULL ,
  `apellido` VARCHAR(60) NOT NULL ,
  `email` VARCHAR(60) NOT NULL ,
  `password` VARCHAR(60) NOT NULL ,
  `telefono` VARCHAR(45) NOT NULL ,
  `celular` VARCHAR(45) NOT NULL ,
  `tipousuario` CHAR NOT NULL ,
  PRIMARY KEY (`idusuario`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbinmweb`.`cliente`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `dbinmweb`.`cliente` ;

CREATE  TABLE IF NOT EXISTS `dbinmweb`.`cliente` (
  `idusuario` INT NOT NULL AUTO_INCREMENT ,
  PRIMARY KEY (`idusuario`) ,
  CONSTRAINT `fk_cliente`
    FOREIGN KEY (`idusuario` )
    REFERENCES `dbinmweb`.`usuario` (`idusuario` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbinmweb`.`empleado`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `dbinmweb`.`empleado` ;

CREATE  TABLE IF NOT EXISTS `dbinmweb`.`empleado` (
  `idusuario` INT NOT NULL AUTO_INCREMENT ,
  `numero` INT NOT NULL ,
  `sueldo` MEDIUMTEXT NOT NULL ,
  PRIMARY KEY (`idusuario`) ,
  CONSTRAINT `fk_empleado`
    FOREIGN KEY (`idusuario` )
    REFERENCES `dbinmweb`.`usuario` (`idusuario` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbinmweb`.`propiedad`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `dbinmweb`.`propiedad` ;

CREATE  TABLE IF NOT EXISTS `dbinmweb`.`propiedad` (
  `idpropiedad` INT NOT NULL AUTO_INCREMENT ,
  `canthab` INT NOT NULL ,
  `cantbano` INT NOT NULL ,
  `terreno` INT NULL ,
  `construido` INT NULL ,
  `precio` FLOAT NOT NULL ,
  `descripcion` VARCHAR(150) NOT NULL ,
  `ingreso` DATE NOT NULL ,
  `egreso` DATE NULL ,
  `clienteid` INT NOT NULL ,
  `empleadoid` INT NOT NULL ,
  PRIMARY KEY (`idpropiedad`) ,
  INDEX `fk_empleado_idx` (`empleadoid` ASC) ,
  INDEX `fk_cliente_idx` (`clienteid` ASC) ,
  CONSTRAINT `fk_agente`
    FOREIGN KEY (`empleadoid` )
    REFERENCES `dbinmweb`.`empleado` (`idusuario` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_dueno`
    FOREIGN KEY (`clienteid` )
    REFERENCES `dbinmweb`.`cliente` (`idusuario` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbinmweb`.`imagen`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `dbinmweb`.`imagen` ;

CREATE  TABLE IF NOT EXISTS `dbinmweb`.`imagen` (
  `idimagen` INT NOT NULL AUTO_INCREMENT ,
  `archivo` VARCHAR(100) NOT NULL ,
  `propiedadid` INT NOT NULL ,
  PRIMARY KEY (`idimagen`) ,
  INDEX `fk_propiedad_idx` (`propiedadid` ASC) ,
  CONSTRAINT `fk_propiedad`
    FOREIGN KEY (`propiedadid` )
    REFERENCES `dbinmweb`.`propiedad` (`idpropiedad` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbinmweb`.`requerida`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `dbinmweb`.`requerida` ;

CREATE  TABLE IF NOT EXISTS `dbinmweb`.`requerida` (
  `idrequerida` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(60) NOT NULL ,
  `apellido` VARCHAR(60) NOT NULL ,
  `email` VARCHAR(60) NOT NULL ,
  `descripcion` VARCHAR(150) NOT NULL ,
  `barrioid` INT NOT NULL ,
  PRIMARY KEY (`idrequerida`) ,
  INDEX `fk_barrio_idx` (`barrioid` ASC) ,
  CONSTRAINT `fk_barrio_requerida`
    FOREIGN KEY (`barrioid` )
    REFERENCES `dbinmweb`.`barrio` (`idbarrio` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbinmweb`.`destacado`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `dbinmweb`.`destacado` ;

CREATE  TABLE IF NOT EXISTS `dbinmweb`.`destacado` (
  `iddestacado` INT NOT NULL AUTO_INCREMENT ,
  `fechainicio` DATETIME NOT NULL ,
  `fechafin` DATETIME NOT NULL ,
  `idpropiedad` INT NOT NULL ,
  PRIMARY KEY (`iddestacado`) ,
  INDEX `id_propiedad_destacado` (`idpropiedad` ASC) ,
  CONSTRAINT `id_propiedad_destacado`
    FOREIGN KEY (`idpropiedad` )
    REFERENCES `dbinmweb`.`propiedad` (`idpropiedad` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dbinmweb`.`visita`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `dbinmweb`.`visita` ;

CREATE  TABLE IF NOT EXISTS `dbinmweb`.`visita` (
  `idvisitas` INT NOT NULL AUTO_INCREMENT ,
  `idpropiedad` INT NOT NULL ,
  `fecha` DATETIME NOT NULL ,
  PRIMARY KEY (`idvisitas`) ,
  INDEX `id_propiedad_visita` (`idpropiedad` ASC) ,
  CONSTRAINT `id_propiedad_visita`
    FOREIGN KEY (`idpropiedad` )
    REFERENCES `dbinmweb`.`propiedad` (`idpropiedad` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
