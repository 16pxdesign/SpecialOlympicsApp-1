CREATE TABLE `ArticleSO` (
	`ID` int(8) NOT NULL AUTO_INCREMENT,
	`Title` varchar(64) NOT NULL,
	`Body` blob NOT NULL,
	`CategoryID` int(8) NOT NULL,
	PRIMARY KEY (`ID`)
);

CREATE TABLE `ImageSO` (
	`ID` int(8) NOT NULL AUTO_INCREMENT,
	`Image` varchar(128) NOT NULL,
	`ArticleID` varchar(255) NOT NULL,
	`msgID` int(8) NOT NULL,
	PRIMARY KEY (`ID`)
);

CREATE TABLE `Athlete` (
	`ID` int(8) NOT NULL AUTO_INCREMENT,
	`fname` varchar(255) NOT NULL,
	`lname` varchar(255) NOT NULL,
	`DoB` DATETIME NOT NULL,
	`SportID` varchar(255) NOT NULL,
	PRIMARY KEY (`ID`)
);

CREATE TABLE `Sport` (
	`ID` int(8) NOT NULL AUTO_INCREMENT,
	`Name` varchar(64) NOT NULL,
	`Gender` varchar(16) NOT NULL,
	PRIMARY KEY (`ID`)
);

CREATE TABLE `AmbassadorMSG` (
	`ID` int(8) NOT NULL AUTO_INCREMENT,
	`message` varchar(255) NOT NULL,
	`AmbassadorID` int(8) NOT NULL,
	PRIMARY KEY (`ID`)
);

CREATE TABLE `Ambassador` (
	`ID` int(8) NOT NULL AUTO_INCREMENT,
	`fname` varchar(64) NOT NULL,
	`lname` varchar(64) NOT NULL,
	PRIMARY KEY (`ID`)
);

CREATE TABLE `Category` (
	`ID` int(8) NOT NULL AUTO_INCREMENT,
	`Name` varchar(64) NOT NULL,
	PRIMARY KEY (`ID`)
);

ALTER TABLE `ArticleSO` ADD CONSTRAINT `ArticleSO_fk0` FOREIGN KEY (`CategoryID`) REFERENCES `Category`(`ID`);

ALTER TABLE `ImageSO` ADD CONSTRAINT `ImageSO_fk0` FOREIGN KEY (`ArticleID`) REFERENCES `ArticleSO`(`ID`);

ALTER TABLE `ImageSO` ADD CONSTRAINT `ImageSO_fk1` FOREIGN KEY (`msgID`) REFERENCES `AmbassadorMSG`(`ID`);

ALTER TABLE `Athlete` ADD CONSTRAINT `Athlete_fk0` FOREIGN KEY (`SportID`) REFERENCES `Sport`(`ID`);

ALTER TABLE `AmbassadorMSG` ADD CONSTRAINT `AmbassadorMSG_fk0` FOREIGN KEY (`AmbassadorID`) REFERENCES `Ambassador`(`ID`);

