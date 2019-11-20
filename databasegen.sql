
use webtech_fall2019_daniel_nettey;

CREATE TABLE `webtech_fall2019_daniel_nettey`.`user` (
  `studentId` INT NOT NULL  AUTO_INCREMENT ,
  `firstname` VARCHAR(45) NOT NULL,
  `lastname` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `phone` VARCHAR(15) NULL,
  `country` VARCHAR(25) NOT NULL,
  `dob` date NOT NULL,
  `gender` VARCHAR(10) NULL,
  `pass` VARCHAR(50) NOT NULL,
  `created` date,
  PRIMARY KEY (`studentId`));


CREATE TABLE `webtech_fall2019_daniel_nettey`.`applicationdata` (
  `applicantId` INT NOT NULL AUTO_INCREMENT,
  `studentId` INT NOT NULL,
  `datecreated` DATE NULL,
  `progress` INT NULL,
  `lastedited` DATETIME NULL,
  `appstatus` VARCHAR(20) NULL,
  PRIMARY KEY (`applicantId`),
  INDEX `studentId_idx` (`studentId` ASC),
  CONSTRAINT `studentId`
    FOREIGN KEY (`studentId`)
    REFERENCES `webtech_fall2019_daniel_nettey`.`user` (`studentId`)
    ON DELETE CASCADE
    ON UPDATE CASCADE);

CREATE TABLE `webtech_fall2019_daniel_nettey`.`personal_information` (
  `studentId` INT NOT NULL,
  `first_name` VARCHAR(45) NULL,
  `last_name` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `Gender` VARCHAR(45) NULL,
  `phone_number1` VARCHAR(20) NULL,
  `phone_number2` VARCHAR(20) NULL,
  `date_of_birth` DATE NULL,
  `citizenship` VARCHAR(45) NULL,
  `city` VARCHAR(45) NULL,
  `address1` VARCHAR(60) NULL,
  `place_of_living` VARCHAR(45) NULL,
  `apply_before` VARCHAR(45) NULL,
  `disability` VARCHAR(45) NULL,
  `Major` VARCHAR(45) NULL,
  `further_info` LONGTEXT NULL,
  PRIMARY KEY (`studentId`),
  CONSTRAINT `studentanswer`
    FOREIGN KEY (`studentId`)
    REFERENCES `webtech_fall2019_daniel_nettey`.`user` (`studentId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);




CREATE TABLE `webtech_fall2019_daniel_nettey`.`sponsor_info` (
  `studentId` INT NOT NULL,
  `name_org` VARCHAR(100) NULL,
  `name_person` VARCHAR(80) NULL,
  `title_person` VARCHAR(45) NULL,
  `email_person` VARCHAR(45) NULL,
  `phone_number_person` VARCHAR(13) NULL,
  PRIMARY KEY (`studentId`),
  CONSTRAINT `studentanswer3`
    FOREIGN KEY (`studentId`)
    REFERENCES `webtech_fall2019_daniel_nettey`.`user` (`studentId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


CREATE TABLE `webtech_fall2019_daniel_nettey`.`academic_hist` (
  `studentId` INT NOT NULL,
  `name_uni` VARCHAR(100) NULL,
  `country_uni` VARCHAR(45) NULL,
  `start_date_uni` DATE NULL,
  `end_date_uni` DATE NULL,
  `name_shs` VARCHAR(45) NULL,
  `start_date_shs` DATE NULL,
  `end_date_shs` DATE NULL,
  `name_principal_shs` VARCHAR(70) NULL,
  `email_principal_shs` VARCHAR(45) NULL,
  PRIMARY KEY (`studentId`),
  CONSTRAINT `studentanswer4`
    FOREIGN KEY (`studentId`)
    REFERENCES `webtech_fall2019_daniel_nettey`.`user` (`studentId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);
    
CREATE TABLE `webtech_fall2019_daniel_nettey`.`exam_results_essay` (
  `studentId` INT NOT NULL,
  `type_exams` VARCHAR(60) NULL,
  `exam_center` VARCHAR(45) NULL,
  `index_number` VARCHAR(45) NULL,
  `exam_date` DATE NULL,
  `essay` longtext NULL,
  PRIMARY KEY (`studentId`),
  CONSTRAINT `studentanswer8`
    FOREIGN KEY (`studentId`)
    REFERENCES `webtech_fall2019_daniel_nettey`.`user` (`studentId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);

#Scholarship tables 
