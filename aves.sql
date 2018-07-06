
CREATE SCHEMA IF NOT EXISTS `Aves` DEFAULT CHARACTER SET utf8 ;
USE `Aves` ;

-- -----------------------------------------------------
-- Table `Aves`.`Aves`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Aves`.`Aves` (
  `idAves` INT NOT NULL AUTO_INCREMENT,
  `nombreCom` VARCHAR(45) NULL,
  `nombreCient` VARCHAR(45) NULL,
  `caracteristicas` VARCHAR(45) NULL,
  `img` LONGBLOB NULL,
  `sonido` MEDIUMBLOB NULL,
  PRIMARY KEY (`idAves`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Aves`.`Ingreso`
-- -----------------------------------------------------



-- -----------------------------------------------------
-- Table `Aves`.`Usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Aves`.`Usuario` (
  `idUsuario` INT NOT NULL AUTO_INCREMENT,
  `nombreUs` VARCHAR(45) NULL,
  `apellidoUs` VARCHAR(45) NULL,
  `fotosUs` LONGBLOB NULL,
  `Ingreso_idIngreso` INT NOT NULL,
  PRIMARY KEY (`idUsuario`)
  
   
    )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Aves`.`Administrador`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Aves`.`Administrador` (
  `idAdministrador` INT NOT NULL AUTO_INCREMENT,
  `nombreAd` VARCHAR(45) NULL,
  `contraseÃ±aAd` VARCHAR(45) NULL,
  `Ingreso_idIngreso` INT NOT NULL,
  PRIMARY KEY (`idAdministrador`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Aves`.`Ubicacion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Aves`.`Ubicacion` (
  `idUbicacion` INT NOT NULL AUTO_INCREMENT,
  `direccion` VARCHAR(100) NULL,
  `Aves_idAves` INT NOT NULL,
  PRIMARY KEY (`idUbicacion`),
  INDEX `fk_Ubicacion_Aves_idx` (`Aves_idAves` ASC),
  CONSTRAINT `fk_Ubicacion_Aves`
    FOREIGN KEY (`Aves_idAves`)
    REFERENCES `Aves`.`Aves` (`idAves`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



