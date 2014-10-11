SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

CREATE DATABASE IF NOT EXISTS TechnologyProblem;
USE TechnologyProblem;

# Problem categories
/*
CREATE TABLE ProblemCategories (
	   problemCategoryID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	   categoryName VARCHAR(100) NOT NULL
);
*/
# Technoly problem table definition
CREATE TABLE Problem (
       pID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,	   
       eName VARCHAR(100) DEFAULT NULL,
       eCategory VARCHAR(100) DEFAULT NULL,
       eAddress VARCHAR(100) DEFAULT NULL,
       ePostCode VARCHAR(20) DEFAULT NULL,
       contact VARCHAR(100) DEFAULT NULL,
       mobilePhone VARCHAR(20) DEFAULT NULL,
       telePhone VARCHAR(20) DEFAULT NULL,
       faxNumber VARCHAR(20) DEFAULT NULL, 
       eMail VARCHAR(100) DEFAULT NULL,
       qq VARCHAR(20) DEFAULT NULL,
       mainProducts VARCHAR(200) DEFAULT NULL,  
       pName VARCHAR(100) DEFAULT NULL,
       pCategory VARCHAR(100) DEFAULT NULL,
       cName VARCHAR(100) DEFAULT NULL,
       cTelePhone VARCHAR(20) DEFAULT NULL,
       pFaxNumber VARCHAR(20) DEFAULT NULL,
       bgDescription VARCHAR(100) DEFAULT NULL,
       pDescription VARCHAR(100) DEFAULT NULL
       #FOREIGN KEY (enterpriseID) REFERENCES EnterpriseInformation(enterpriseID)
/*	   FOREIGN KEY (problemCategoryID) REFERENCES ProblemCategories(categoryName) */
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE ICase(
       cID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
       department VARCHAR(100) DEFAULT NULL,
       sector VARCHAR(100) DEFAULT NULL,
       category VARCHAR(100) DEFAULT NULL,
       mobilePhone VARCHAR(20) DEFAULT NULL,
       faxNumber VARCHAR(20) DEFAULT NULL, 
       eMail VARCHAR(100) DEFAULT NULL,
       qq VARCHAR(20) DEFAULT NULL,

       title VARCHAR(100)  DEFAULT NULL,
       abstract VARCHAR(100) DEFAULT NULL,
       description VARCHAR(100) DEFAULT NULL,
       course VARCHAR(100) DEFAULT NULL,
       cSolution VARCHAR(100) DEFAULT NULL,
       sEmployed VARCHAR(100) DEFAULT NULL,
       sImplementation VARCHAR(100) DEFAULT NULL
       #FOREIGN KEY (providerID) REFERENCES ProviderInformation(providerID)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


# Studetn inforamtion
CREATE TABLE Student (
       sID INT PRIMARY KEY AUTO_INCREMENT,
       pPath VARCHAR(100) DEFAULT NULL,
       sName VARCHAR(100) DEFAULT NULL,
       sSex VARCHAR(20) DEFAULT NULL,
       startWorkTime VARCHAR(20) DEFAULT NULL,
       birthday VARCHAR(20) DEFAULT NULL,
       cMajor VARCHAR(100) DEFAULT NULL,
       eTitle VARCHAR(100) DEFAULT NULL,
       company VARCHAR(100) DEFAULT NULL,
       department VARCHAR(100) DEFAULT NULL,
       telePhone VARCHAR(20) DEFAULT NULL,
       mobilePhone VARCHAR(20) DEFAULT NULL,
       eMail_qq VARCHAR(100) DEFAULT NULL,
       address VARCHAR(100) DEFAULT NULL,
       ePostCode CHAR(6) DEFAULT NULL,
       degree1 VARCHAR(100) DEFAULT NULL,
       gTime1 VARCHAR(100) DEFAULT NULL,
       gSchool1 VARCHAR(100) DEFAULT NULL,
       lMajor1 VARCHAR(100) DEFAULT NULL,
       degree2 VARCHAR(100) DEFAULT NULL,
       gTime2 VARCHAR(100) DEFAULT NULL,
       gSchool2 VARCHAR(100) DEFAULT NULL,
       lMajor2 VARCHAR(100) DEFAULT NULL,
       lTime1 VARCHAR(100) DEFAULT NULL,
       lPlace1 VARCHAR(100) DEFAULT NULL,
       lContent1 VARCHAR(100) DEFAULT NULL,
       lTime2 VARCHAR(100) DEFAULT NULL,
       lPlace2 VARCHAR(100) DEFAULT NULL,
       lContent2 VARCHAR(100) DEFAULT NULL,
       tTime1 VARCHAR(100) DEFAULT NULL,
       tPlace1 VARCHAR(100) DEFAULT NULL,
       tContent1 VARCHAR(100) DEFAULT NULL,
       tTime2 VARCHAR(100) DEFAULT NULL,
       tPlace2 VARCHAR(100) DEFAULT NULL,
       tContent2 VARCHAR(100) DEFAULT NULL,
       rBooks VARCHAR(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE Administrator (
       aName VARCHAR(50) DEFAULT NULL,
       aPassword VARCHAR(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO Adminstrator(aName, aPassword) VALUES (
       ('root', '1234')
);
