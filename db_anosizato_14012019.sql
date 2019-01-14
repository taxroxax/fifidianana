/*
SQLyog Ultimate v9.10 
MySQL - 5.6.17 : Database - db_anosizato
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `bulletin` */

DROP TABLE IF EXISTS `bulletin`;

CREATE TABLE `bulletin` (
  `ID_CANDIDAT` int(11) NOT NULL AUTO_INCREMENT,
  `CODE_BULLETIN` int(11) NOT NULL,
  `STATUS` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`ID_CANDIDAT`,`CODE_BULLETIN`),
  CONSTRAINT `FK_BULLETIN_ID_CANDIDAT` FOREIGN KEY (`ID_CANDIDAT`) REFERENCES `candidat` (`ID_CANDIDAT`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=125 DEFAULT CHARSET=utf8;

/*Data for the table `bulletin` */

insert  into `bulletin`(`ID_CANDIDAT`,`CODE_BULLETIN`,`STATUS`) values (1,3,'1'),(11,0,'1'),(11,1,'1'),(13,0,'1'),(13,1,'1'),(18,3,'1'),(27,0,'1'),(27,1,'1'),(29,0,'1'),(29,1,'1'),(31,3,'1'),(42,0,'1'),(42,1,'1'),(44,0,'1'),(44,1,'1'),(51,3,'1'),(57,0,'1'),(57,1,'1'),(58,0,'1'),(58,1,'1'),(63,3,'1'),(66,0,'1'),(66,1,'1'),(73,3,'1'),(74,0,'1'),(74,1,'1'),(78,3,'1'),(90,3,'1'),(91,3,'1'),(109,3,'1'),(115,3,'1'),(124,3,'1');

/*Table structure for table `candidat` */

DROP TABLE IF EXISTS `candidat`;

CREATE TABLE `candidat` (
  `ID_CANDIDAT` int(11) NOT NULL AUTO_INCREMENT,
  `CODE_QUARTIER` int(11) DEFAULT NULL,
  `GENRE` varchar(1) DEFAULT NULL,
  `RANG` int(11) DEFAULT NULL,
  `NUM_CARTE` int(11) DEFAULT NULL,
  `NOM` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`ID_CANDIDAT`)
) ENGINE=InnoDB AUTO_INCREMENT=125 DEFAULT CHARSET=utf8;

/*Data for the table `candidat` */

insert  into `candidat`(`ID_CANDIDAT`,`CODE_QUARTIER`,`GENRE`,`RANG`,`NUM_CARTE`,`NOM`) values (1,1,'L',1,1053,'RAHAJANIRINA Yves'),(2,1,'L',2,1110,'RAKOTOSON Rolland Tour'),(3,1,'L',3,1444,'RALAIARILIVA Jasnot Friedopher'),(4,1,'L',4,1001,'RANDRIAMAHAZO Jean'),(5,1,'L',5,1030,'RASOLOARIJAONA Simon'),(6,1,'L',6,1276,'ANDRIAMIRIJA Jacob'),(7,1,'L',7,1163,'ANDRIANANTENAINA Nirina'),(8,1,'L',8,1194,'ANDRIATSITRATRINIHAFA Jean Luc Nantenaina'),(9,1,'L',9,1082,'RADOMANANA Arinoely'),(10,1,'L',10,1107,'RAFALIMANANA Marka Jean'),(11,1,'L',11,1069,'RAHERINJATOVO Hasindray Jaona'),(12,1,'L',12,1020,'RAKOTONDRAFARA David'),(13,1,'L',13,1011,'RAKOTOZAFY Henri'),(14,1,'L',14,1487,'ANDRIAMIHANTA Tsimbason Tantely'),(15,1,'L',15,1267,'RAHOLIARISOA Heritiana Mamisoa'),(16,1,'L',16,1127,'RASOLOARINAIVO Fredo Dayan'),(17,1,'V',1,1238,'ANDRIAMBALA Enintsoa'),(18,1,'V',2,1341,'MIANDRISOA Odette'),(19,1,'V',3,1120,'RAHARINIRINA Hantamalala Jeanine'),(20,1,'V',4,1332,'RALALAMANANA Liliane'),(21,1,'V',5,1506,'RAMANGALAHY Hanitrasoa Hoby'),(22,1,'V',6,1449,'RASOARIVAO H?l?ne'),(23,1,'V',7,2048,'RAVAOARIVELO Oliva'),(24,1,'V',8,2172,'RAZAFINDRAZAKA Soloarinosy'),(25,1,'V',9,2115,'RAVOLOLONIRINAHARISOA Evelyne '),(26,1,'V',10,2364,'RAKOTONIAINA Felasoa Alpha Romy'),(27,1,'V',11,2196,'RATSITRATRINIHAFA Jimminette Narisoa'),(28,1,'V',12,2215,'RATSITRATRINIHAFA Narisoa Claudette'),(29,1,'V',13,2260,'RAZAFINTSOA Gis?le Lucie'),(30,2,'L',1,2150,'RAHAINGOARISON Hery Nirina'),(31,2,'L',2,2458,'RAHARISON Solofoniaina Vonjisoa'),(32,2,'L',3,2288,'RAKOTO ANDRIAMAVO'),(33,2,'L',4,2311,'RAKOTOSON Haja Eric'),(34,2,'L',5,2619,'RAKOTONDRAZAFY Andritiana'),(35,2,'L',6,2044,'RAMAROLAHY Laurent'),(36,2,'L',7,2200,'RANDRIANARIVO James'),(37,2,'L',8,2631,'RAZAFINDRAIBE Christian Bien Aim'),(38,2,'L',9,2613,'RAZANAKOTO Andrianantenaina'),(39,2,'L',10,2999,'TRIMOFOLOALINA RAKOTO Mahefa'),(40,2,'L',11,3249,'ANDRIAMAVO Fanilo Ranjanirina'),(41,2,'L',12,3137,'ANDRIAMIADANARIVO Mamitahiry'),(42,2,'L',13,3089,'RAFANOMEZANTSOA Alexandre'),(43,2,'L',14,3001,'RAMIHARISON Charles'),(44,2,'L',15,3040,'RANDRIANIRINA Liva Herisolo'),(45,2,'L',16,3245,'ANDRIANIRIMBAHOAKA Anjaratiana'),(46,2,'L',17,3222,'HERIFANOMEZANA Lovasoa'),(47,2,'L',18,3018,'RAMIARASON Livarizaka'),(48,2,'V',1,3004,'ANDRIAMAVO Meva Tsimialonarivo'),(49,2,'V',2,3263,'RAMAROSON Voahangy Lucie'),(50,2,'V',3,3085,'RAMBELOSON Sahondra Vololona'),(51,2,'V',4,3233,'RANDRIANANDRASANA Fanjamalala'),(52,2,'V',5,3005,'RAZAFIARISOA Appoline'),(53,2,'V',6,4068,'RAZANAJATOVO Volana'),(54,2,'V',7,4221,'RAKOTOMANANTSOA Verotiana'),(55,2,'V',8,4125,'RANDRIANANDRASANA Noeline Aim'),(56,2,'V',9,4110,'RASAMOELINA Holinirina'),(57,2,'V',10,4112,'RASOAZANAMANANA Perline'),(58,2,'V',11,4024,'RAVAOSOLONIAINA Esther'),(59,3,'L',1,4627,'RABEARIMANANA Jean Gilbert'),(60,3,'L',2,4338,'RANDRIAMANANA Joseph'),(61,3,'L',3,5168,'RANDRIANARIJAONA Livaharilanto'),(62,3,'L',4,5115,'RANDRIANJAFY Jean Paul'),(63,3,'L',5,5095,'RAZAFINDRAIBE Zo'),(64,3,'L',6,5112,'RAZAFINJATOVO Daniel'),(65,3,'L',7,5332,'RABARISON Rodin'),(66,3,'L',8,5075,'RAKOTONDRAMANANA Jean Elis'),(67,3,'V',1,5107,'RAHARIMALALA Christine'),(68,3,'V',2,5084,'RAMANGALAHY Harisoa Michelle'),(69,3,'V',3,5164,'RANOROARIVELO Vololomboahangy'),(70,3,'V',4,5302,'RAVOAJANAHARY Rinah'),(71,3,'V',5,5304,'RAVONIARIMANANA Lantosoa Mamy'),(72,3,'V',6,5018,'RAVAOARINELINA Angeline'),(73,3,'V',7,5316,'RAVAOHELIVONY Fanja Liliane'),(74,3,'V',8,5999,'RAVAOARIMANGA Fanja Noely'),(75,4,'L',1,6094,'RAJOELISON Justin'),(76,4,'L',2,6289,'RAJOELISON Nantenaina Zo'),(77,4,'L',3,6080,'RAKOTOMANIRAKA Andriamamenosoa'),(78,4,'L',4,6028,'RAMAHENINTSOA Lovasoa William'),(79,4,'L',5,6059,'RANAIVO Norbert Justin'),(80,4,'L',6,6046,'MAMINIRINA Jean Claude'),(81,4,'L',7,6239,'RAKOTONDRAZAKA Rivo Philibert'),(82,4,'L',8,6167,'RANDRIAMIHARISOA Mamitiana Belzard'),(83,4,'V',1,1039,'RADAFIARIVONINOMENJANAHARY Misaeline'),(84,4,'V',2,1370,'RAJAOBELISON Rivo Herilanto'),(85,4,'V',3,1108,'RAKOTOSON Gis?le'),(86,4,'V',4,1012,'RANOROVOLOLONA Sahondra'),(87,4,'V',5,1031,'RASOANIRINA Josephine Odette'),(88,4,'V',6,1021,'RAHARISOA Lalaonirina Julie Jo?lle'),(89,4,'V',7,1375,'NIVOHANITRARIMISA Fanjanirina'),(90,4,'V',8,1362,'RAHARINIRINA Lucky Odette '),(91,5,'L',1,1467,'MAMINIAINA Fifaliana Jo?l Nirina'),(92,5,'L',2,1246,'RABESON Janvier'),(93,5,'L',3,1164,'RAKOTOARIMANANA Th?ophile'),(94,5,'L',4,1290,'RAKOTONANAHARY Emile'),(95,5,'L',5,1268,'RADIMBISON Falimanana'),(96,5,'L',6,2049,'RASOLOFONIRINA Tantely Thierry'),(97,5,'L',7,2173,'RAVOATRA Jean de Dieu'),(98,5,'L',8,2365,'RAVOATRANIRINA Fetraniaina'),(99,5,'L',9,2219,'RAJAONARISOA Donn'),(100,5,'L',10,2028,'RAMAHATANA Fenomanantsoa'),(101,5,'V',1,2152,'RAHARIMALALA Marie Justine Yvonne'),(102,5,'V',2,2197,'RANAIVOZANANY Yollandine Bien Aim'),(103,5,'V',3,2373,'RAOBELISON Vololona'),(104,5,'V',4,2514,'RASOANIRINA Julie Suzanne Hermeline'),(105,5,'V',5,2045,'RAZAFINDRAKETAKA Ernestine'),(106,5,'V',6,2340,'RAZANADRAMANGA'),(107,5,'V',7,2216,'RAZANAJAZA Anne Marie Alice Sissi'),(108,5,'V',8,2005,'NASOLOANTRA Lalao Hasina'),(109,5,'V',9,2498,'RAKOTONIAINA Miandrisoa Haingonirina'),(110,5,'V',10,3002,'RAZAFINIRINA Voahirana Claudia'),(111,6,'L',1,3041,'ANDRIAMITANDRINA Naivosoa Voninjaka'),(112,6,'L',2,3250,'RALAIARILIVA Ndriana Mamy'),(113,6,'L',3,3246,'RATSITOARIMAHEFA Lalatiana'),(114,6,'L',4,3086,'RATSITRATRINIHAFA Andry Jaona'),(115,6,'L',5,3232,'RASOLOARINAIVO Rennel Antonny'),(116,6,'L',6,3223,'RAHARIVELOTANDRAMAHEFA Rivoary Niaina'),(117,6,'L',7,3297,'RAJAONARIVELO ANDRIANARISOA Allain Olivier'),(118,6,'L',8,4240,'RAKOTONIAINA Radosolo Mickael'),(119,6,'V',1,4314,'RAHARIMANANA Suzette Honorine'),(120,6,'V',2,4222,'RALAIARILIVA Mamie Jeanne'),(121,6,'V',3,4069,'RAMANANTENASOA Sabine'),(122,6,'V',4,4252,'RASOARIVONY Solomalala Robine'),(123,6,'V',5,4334,'RAVAOARIMANGA Marie Melanie'),(124,6,'V',6,4234,'RAVALOSON Minorila');

/*Table structure for table `evenement` */

DROP TABLE IF EXISTS `evenement`;

CREATE TABLE `evenement` (
  `IdEvent` int(11) NOT NULL AUTO_INCREMENT,
  `DateEvenement` datetime DEFAULT NULL,
  `DateFiance` date DEFAULT NULL,
  `PlaceEvenement` varchar(50) DEFAULT NULL,
  `NumeroMembre1` varchar(10) DEFAULT NULL,
  `NumeroMembre2` varchar(10) DEFAULT NULL,
  `DescriptionEvenement` varchar(240) DEFAULT NULL,
  `IdEventCateg` int(11) NOT NULL,
  PRIMARY KEY (`IdEvent`),
  KEY `FK_EVENEMENT_IdEventCateg` (`IdEventCateg`),
  CONSTRAINT `FK_EVENEMENT_IdEventCateg` FOREIGN KEY (`IdEventCateg`) REFERENCES `event_categorie` (`IdEventCateg`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8;

/*Data for the table `evenement` */

insert  into `evenement`(`IdEvent`,`DateEvenement`,`DateFiance`,`PlaceEvenement`,`NumeroMembre1`,`NumeroMembre2`,`DescriptionEvenement`,`IdEventCateg`) values (31,'2018-09-09 00:00:00','0000-00-00','ANOSIZATO','66','1','TESTE',1),(32,'2018-09-08 00:00:00','0000-00-00','teste','66','1','',1),(33,'2018-09-07 00:00:00','0000-00-00','teste','66','1','',1),(34,'2018-09-08 00:00:00','0000-00-00','teste','66','1','',1),(35,'2018-09-08 00:00:00','0000-00-00','gchgfc','66','1','',1),(36,'2018-09-07 00:00:00','0000-00-00','teste','68','1','',1),(37,'2018-09-08 00:00:00','0000-00-00','teste','66','1','',2),(38,'2018-09-07 00:00:00','0000-00-00','d','68','1','',2),(39,'2018-09-08 00:00:00','0000-00-00','xsvd','66','1','',1),(40,'2018-09-14 00:00:00','0000-00-00','sd','66','1','',1),(41,'2018-09-15 00:00:00','0000-00-00','e','66','1','',1),(42,'2018-09-08 00:00:00','0000-00-00','d','66','1','',1),(43,'2018-09-08 00:00:00','0000-00-00','dcdwx','66','1','',1),(44,'2018-09-08 00:00:00','0000-00-00','mm','66','1','',1),(45,'2018-09-08 00:00:00','2018-09-08','ankadimbahoaka','66','68','teste',3),(46,'2018-09-08 00:00:00','0000-00-00','teste','66','1','',2),(47,'2018-12-02 00:00:00','0000-00-00','anosizato','73','1','natao batsisa tamin\'izany fotoana izany',1);

/*Table structure for table `event_categorie` */

DROP TABLE IF EXISTS `event_categorie`;

CREATE TABLE `event_categorie` (
  `IdEventCateg` int(11) NOT NULL AUTO_INCREMENT,
  `LibelleEventCategorie` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`IdEventCateg`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

/*Data for the table `event_categorie` */

insert  into `event_categorie`(`IdEventCateg`,`LibelleEventCategorie`) values (1,'Batisa'),(2,'Fanasan\'ny Tompo'),(3,'Mariazy'),(4,'Fivoriana'),(13,'Taranaka'),(14,'hetsika vaovao'),(15,''),(16,''),(17,'z'),(18,''),(19,'s'),(20,'s'),(21,'sdf');

/*Table structure for table `famille` */

DROP TABLE IF EXISTS `famille`;

CREATE TABLE `famille` (
  `IdFamille` int(11) NOT NULL AUTO_INCREMENT,
  `IdChefFamille` varchar(10) DEFAULT NULL,
  `AdresseFamille` varchar(50) DEFAULT NULL,
  `CodePostal` varchar(10) DEFAULT NULL,
  `Ville` varchar(50) DEFAULT NULL,
  `CodePays` varchar(10) DEFAULT NULL,
  `Telephone` varchar(15) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `IdQuartier` int(11) DEFAULT NULL,
  PRIMARY KEY (`IdFamille`),
  KEY `FK_FAMILLE_IdQuartier` (`IdQuartier`),
  CONSTRAINT `FK_FAMILLE_IdQuartier` FOREIGN KEY (`IdQuartier`) REFERENCES `quartier` (`IdQuartier`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

/*Data for the table `famille` */

insert  into `famille`(`IdFamille`,`IdChefFamille`,`AdresseFamille`,`CodePostal`,`Ville`,`CodePays`,`Telephone`,`Email`,`IdQuartier`) values (33,'(2018)6858',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(34,'(2018)5542','Fenomanana','101','Mahazoarivo','120','0324545654','jul@jul.mg',2);

/*Table structure for table `membre` */

DROP TABLE IF EXISTS `membre`;

CREATE TABLE `membre` (
  `IdMembre` int(11) NOT NULL AUTO_INCREMENT,
  `NumeroMembre` varchar(11) DEFAULT NULL,
  `NomMembre` varchar(50) DEFAULT NULL,
  `PrenomMembre` varchar(100) DEFAULT NULL,
  `DateNaissance` datetime DEFAULT NULL,
  `LieuNaissance` varchar(100) DEFAULT NULL,
  `GenderMembre` int(1) DEFAULT NULL,
  `StatusMembre` int(2) DEFAULT NULL,
  `IdFamille` int(11) DEFAULT NULL,
  `Marie` char(1) DEFAULT 'N',
  PRIMARY KEY (`IdMembre`),
  KEY `FK_MEMBRE_IdFamille` (`IdFamille`),
  CONSTRAINT `FK_MEMBRE_IdFamille` FOREIGN KEY (`IdFamille`) REFERENCES `famille` (`IdFamille`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=utf8;

/*Data for the table `membre` */

insert  into `membre`(`IdMembre`,`NumeroMembre`,`NomMembre`,`PrenomMembre`,`DateNaissance`,`LieuNaissance`,`GenderMembre`,`StatusMembre`,`IdFamille`,`Marie`) values (72,'(2018)5542','NIVOARILANTO','Julien Inov','2014-02-04 00:00:00','Antananarivo 67ha',1,1,34,'N'),(73,'(2018)3256','RAJAONARILALA','Tahinasoa Roméo Aymard','1991-05-31 00:00:00','Ambohitrarahaba',1,NULL,NULL,'N');

/*Table structure for table `participer` */

DROP TABLE IF EXISTS `participer`;

CREATE TABLE `participer` (
  `IdParticiper` int(11) NOT NULL AUTO_INCREMENT,
  `IdMembre` int(11) NOT NULL,
  `IdCategEvent` int(11) NOT NULL,
  `DateCreated` datetime DEFAULT NULL,
  PRIMARY KEY (`IdParticiper`,`IdMembre`,`IdCategEvent`),
  UNIQUE KEY `IdParticiper` (`IdParticiper`),
  KEY `FK_PARTICIPER_IdMembre` (`IdMembre`),
  KEY `FK_PARTICIPER_IdEventCateg` (`IdCategEvent`),
  CONSTRAINT `FK_PARTICIPER_IdEventCateg` FOREIGN KEY (`IdCategEvent`) REFERENCES `event_categorie` (`IdEventCateg`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_PARTICIPER_IdMembre` FOREIGN KEY (`IdMembre`) REFERENCES `membre` (`IdMembre`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `participer` */

insert  into `participer`(`IdParticiper`,`IdMembre`,`IdCategEvent`,`DateCreated`) values (1,73,1,'2018-12-09 00:00:00');

/*Table structure for table `quartier` */

DROP TABLE IF EXISTS `quartier`;

CREATE TABLE `quartier` (
  `IdQuartier` int(11) NOT NULL AUTO_INCREMENT,
  `LibelleQuartier` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`IdQuartier`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

/*Data for the table `quartier` */

insert  into `quartier`(`IdQuartier`,`LibelleQuartier`) values (1,'FARITRA 1'),(2,'FARITRA 2'),(3,'FARITRA 3'),(4,'FARITRA 4'),(5,'FARITRA 5'),(6,'FARITRA 6'),(7,'ZANAKA AM-PIELEZANA');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
