drop database admissionsdatabase;
CREATE DATABASE `admissionsdatabase` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */;
use admissionsdatabase;

CREATE TABLE `admissionsdatabase`.`user` (
  `studentId` INT NOT NULL  AUTO_INCREMENT ,
  `fullname` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `phone` VARCHAR(15) NULL,
  `country` VARCHAR(25) NOT NULL,
 # `gender` VARCHAR(10) NULL,
  `pass` VARCHAR(50) NOT NULL,
  `created` date,
  PRIMARY KEY (`studentId`));


CREATE TABLE `admissionsdatabase`.`application` (
  `applicantId` INT NOT NULL,
  `studentId` INT NOT NULL,
  `datecreated` DATE NULL,
  `progress` INT NULL,
  `lastedited` DATETIME NULL,
  `status` VARCHAR(20) NULL,
  PRIMARY KEY (`applicantId`),
  INDEX `studentId_idx` (`studentId` ASC),
  CONSTRAINT `studentId`
    FOREIGN KEY (`studentId`)
    REFERENCES `admissionsdatabase`.`user` (`studentId`)
    ON DELETE CASCADE
    ON UPDATE CASCADE);


CREATE TABLE `admissionsdatabase`.`sections` (
  `sectionId` INT NOT NULL,
  `section_name` VARCHAR(45) NOT NULL,
  `description` LONGTEXT NULL,
  PRIMARY KEY (`sectionId`));
  
  
  CREATE TABLE `admissionsdatabase`.`questions` (
  `questionId` INT NOT NULL,
  `section` INT NULL,
  `question` VARCHAR(45) NULL,
  PRIMARY KEY (`questionId`),
  INDEX `questionsection_idx` (`section` ASC),
  CONSTRAINT `questionsection`
    FOREIGN KEY (`section`)
    REFERENCES `admissionsdatabase`.`sections` (`sectionId`)
    ON DELETE CASCADE
    ON UPDATE CASCADE);
    
    
CREATE TABLE `admissionsdatabase`.`answers` (
  `answerId` INT NOT NULL,
  `applicantId` INT NOT NULL,
  `answer` VARCHAR(45) NULL,
  `comment` VARCHAR(45) NULL,
  `grade` INT NULL,
  PRIMARY KEY (`applicantId`),
  INDEX `applicantanswer_idx` (`applicantId` ASC),
  CONSTRAINT `questionanswer`
    FOREIGN KEY (`answerId`)
    REFERENCES `admissionsdatabase`.`questions` (`questionId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `applicantanswer`
    FOREIGN KEY (`applicantId`)
    REFERENCES `admissionsdatabase`.`application` (`applicantId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

