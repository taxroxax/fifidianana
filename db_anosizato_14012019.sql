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
  `CODE_BULLETIN` varchar(11) NOT NULL,
  `STATUS` varchar(1) DEFAULT NULL,
  `SYS_USER_ID` int(11) NOT NULL,
  `SYS_COMPTEUR` int(11) NOT NULL,
  PRIMARY KEY (`ID_CANDIDAT`,`CODE_BULLETIN`),
  CONSTRAINT `FK_BULLETIN_ID_CANDIDAT` FOREIGN KEY (`ID_CANDIDAT`) REFERENCES `candidat` (`ID_CANDIDAT`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `bulletin` */

/*Table structure for table `candidat` */

DROP TABLE IF EXISTS `candidat`;

CREATE TABLE `candidat` (
  `ID_CANDIDAT` int(11) NOT NULL AUTO_INCREMENT,
  `CODE_QUARTIER` int(11) DEFAULT NULL,
  `GENRE` varchar(1) DEFAULT NULL,
  `RANG` int(11) DEFAULT NULL,
  `NUM_CARTE` varchar(11) DEFAULT NULL,
  `NOM` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`ID_CANDIDAT`)
) ENGINE=InnoDB AUTO_INCREMENT=448 DEFAULT CHARSET=utf8;

/*Data for the table `candidat` */

insert  into `candidat`(`ID_CANDIDAT`,`CODE_QUARTIER`,`GENRE`,`RANG`,`NUM_CARTE`,`NOM`) values (302,1,'V',1,'1043','MIANDRISOA Odette'),(303,1,'V',2,'1329','NIVOHANITRARIMISA Fanjanirina'),(304,1,'V',3,'1134','RAHARINIRINA Hantamalala Jeanine'),(305,1,'V',4,'1138','RAHOLISOA Berthine'),(306,1,'V',5,'1490','RAKOTONDRAZAFY Rina Lalaina'),(307,1,'V',6,'1373','RALISOA  Honorine'),(308,1,'V',7,'1010','RAMANGALAHY Hanitrasoa Hoby'),(309,1,'V',8,'1545','RANDRIANARIVO  Onintsoa '),(310,1,'V',9,'1498','RANDRIANARIVONY Bodoarivelo Farasoa'),(311,1,'V',10,'1249','RASOAMAMPIANINA Marie Viviane'),(312,1,'V',11,'1081','RASOARIVAO Hélène'),(313,1,'V',12,'1423','RASOAZANANY Fitahiana'),(314,1,'V',13,'1218','RAZA FINDRAZAKA Soloarinosy'),(315,1,'V',14,'1271','RAZAFIARISOA Hanitriniaina N.'),(316,1,'V',15,'1770','RAZAFINTSOA Gisèle Lucie'),(317,1,'L',1,'1328','MAMINIRINA Jean Claude'),(318,1,'L',2,'1075','RAHAJAMANANA Onjaniaina'),(319,1,'L',3,'1019','RAHERINJATOVO Hasindray Jaona'),(320,1,'L',4,'1005','RAHOLIARISOA Heritiana Mamisoa'),(321,1,'L',5,'1137','RAKOTONDRAFARA David'),(322,1,'L',6,'1248','RAKOTONDRAZAFY  Landiniaina'),(323,1,'L',7,'1009','RAKOTOSON Roland Touré'),(324,1,'L',8,'1246','RALAIARITERA Solonirina Nomena'),(325,1,'L',9,'1001','RANDRIAMAHAZO Jean'),(326,1,'L',10,'1489','RANDRIANASOLO Mahaleo Harijao'),(327,1,'L',11,'1544','RASOLOARINAIVO Herisoa Fredo Dayan'),(328,1,'L',12,'1148','RASOLONIAINA Adrien'),(329,1,'L',13,'1065','RATSIFERA RAKOTOMALALA Jean Henri'),(330,2,'V',1,'2652','ANDRIAMAVO Meva Tsimialonarivo'),(331,2,'V',2,'2048','ANDRIANJAKANOMENJANAHARY Hary '),(332,2,'V',3,'2540','MINONTSOA Nivosambatra'),(333,2,'V',4,'2254','RAKOTOMANANTSOA Verotiana'),(334,2,'V',5,'2417','RAMAROSON Lucie'),(335,2,'V',6,'2149','RAMBELOSON Sahondra Vololona'),(336,2,'V',7,'2106','RANDRIANANDRASANA Fanjamalala'),(337,2,'V',8,'2487','RASAMOELINA Holinirina'),(338,2,'V',9,'2213','RASOAHANITRINIALA Volatiana'),(339,2,'V',10,'2293','RASOANOMENJANAHARY Lisy'),(340,2,'V',11,'2268','RASOAZANAKOLONA Lily'),(341,2,'V',12,'2265','RASOAZANAMANANA Perline'),(342,2,'V',13,'2444','RAVAO Madeleine'),(343,2,'V',14,'2056','RAVAOSOLONIAINA Esther'),(344,2,'V',15,'2041','RAZAFIARISOA Andoniaina'),(345,2,'V',16,'2314','RAZAFIARISOA Julienne'),(346,2,'V',17,'2590','RAZANAJATOVO Volana Hasina'),(347,2,'L',1,'6206','ANDRIAMIADANARIVO Mamitahiry'),(348,2,'L',2,'2569','RAHAINGOARISON Hery Nirina'),(349,2,'L',3,'2292','RAHARISON Solofoniaina Vonjisoa'),(350,2,'L',4,'2010','RAHERY FANOMEZANA Lovasoa'),(351,2,'L',5,'2090','RAJAOBELINA Christian'),(352,2,'L',6,'2326','RAKOTONDRAZAFY Andritiana'),(353,2,'L',7,'2589*','RAKOTOSON Haja Eric'),(354,2,'L',8,'2055','RAMAROLAHY Laurent'),(355,2,'L',9,'2045','RAMIARASON Livaharizaka'),(356,2,'L',10,'2015','RANDRIAMIARANA Fidimanantsoa'),(357,2,'L',11,'2105','RANDRIANARIVO James'),(358,2,'L',12,'2486','RANDRIANIRINA Liva Herisolo'),(359,2,'L',13,'2201','RANDRIANTSEHENO Harinaivo F. H.'),(360,2,'L',14,'2058','RAVELONJANAHARY Gaston Laurent'),(361,2,'L',15,'2148','RAZAFINDRAIBE Christian Bien Aimé'),(362,2,'L',16,'2212','RAZAFINIMANANA Mamy Fils Herman'),(363,2,'L',17,'2416','RAZANAKOTO Andrianantenaina'),(364,2,'L',18,'2253','TRIMOFOLOALINA Rakotomahefa'),(365,3,'V',1,'3098','ANDRIAMIHAJA Jeanne Christine David'),(366,3,'V',2,'3086','RAHARIMALALA Christine'),(367,3,'V',3,'3045','RAHELIARISOA Mariette'),(368,3,'V',4,'3137','RAMALALATIANA Hortense'),(369,3,'V',5,'3105','RAMANGALAHY Harisoa Michèle'),(370,3,'V',6,'3002','RANOROARIVELO Vololomboahangy'),(371,3,'V',7,'3172','RAVAOARIMANGA Fanja Noely'),(372,3,'V',8,'3145','RAVAOARINELINA Angeline'),(373,3,'V',9,'3229','RAVAOHELIVONY Liliane Fanjaniaina'),(374,3,'V',10,'3015','RAVONIARIMANANA Lantosoa Mamy'),(375,3,'V',11,'3314','RAZAFIMBELO Josée Safidy Sambatra'),(376,3,'V',12,'3332','RAZAKANAIVO Liva Nirina'),(377,3,'L',1,'3014','RABEARIMANANA Jean Gilbert'),(378,3,'L',2,'3039','RAKOTOARIMALALA David '),(379,3,'L',3,'3136','RAKOTOARIMANANA Eugène'),(380,3,'L',4,'3044','RAKOTOARINISA Clovis Eugène'),(381,3,'L',5,'3063','RAKOTONDRAMANANA Jean Elisé'),(382,3,'L',6,'3097','RAKOTONIRINA Jean Noel'),(383,3,'L',7,'3083','RALALAMANANA Tahinasoa'),(384,3,'L',8,'3246','RANDRIANAIVOJAONA  Andrianantenaina'),(385,3,'L',9,'3081','RAZAFINDRAIBE Zo'),(386,3,'L',10,'3104','RAZAFINJATOVO Daniel'),(387,4,'V',1,'4250','FANJANIRINA Lanto Claudine'),(388,4,'V',2,'4006','RADAFIARIVONY N. Misaelina'),(389,4,'V',3,'4055','RAHARINANTENAINA Vola'),(390,4,'V',4,'4088','RAHARINIRNA Lucky Odette'),(391,4,'V',5,'4078','RAHARISOA Lalao Nirina Julie Joelle'),(392,4,'V',6,'4082','RAHOLIARINIRINA Vero Hasina'),(393,4,'V',7,'4285','RAJAOBELISON Rivo Herilantosoa'),(394,4,'V',8,'4002','RAKOTOSON Gisèle'),(395,4,'V',9,'4360','RANOROVOLOLONA Sahondra'),(396,4,'V',10,'4314','RAZANARINOLY Soanihoavy'),(397,5,'V',1,'1125','RAFARASOANIAINA Lantomalala Saholy'),(398,5,'V',2,'5411','RANAIVOSON Andriambala Niry Hasina'),(399,5,'V',3,'5290','RANAIVOZANANY Yolandine Bien Aimée'),(400,5,'V',4,'2021','RANDRIANANDRASANA Noeline Aimée'),(401,5,'V',5,'5346','RAOBELISON Vololona'),(402,5,'V',6,'5362','RASOLOHANTA Heriniaina Evelina'),(403,5,'V',7,'5070','RAZAFINDRAKETAKA Ernestine'),(404,5,'V',8,'5044','RAZAFINDRASOLO Juliette'),(405,5,'V',9,'5350','RAZAFINIMARO Viviane Rosette'),(406,5,'V',10,'5382','RAZAFINIRINA Voahirana Claudia'),(407,5,'V',11,'5398','RAZANAJAZA Anne Marie Alice Sissi'),(408,5,'L',1,'1124','ANDRIANANTENAINA Nirina Andry'),(409,5,'L',2,'5363','MAMINIAINA Joel Fifaliana'),(410,5,'L',3,'5043','RABESON Janvier'),(411,5,'L',4,'5339*','RAJAONARISON Donné'),(412,5,'L',5,'5361','RAKOTOARIMANANA Théophile'),(413,5,'L',6,'5174','RAKOTONIAINA Fanomezantsoa Philibert'),(414,5,'L',7,'5144','RAMARSON Andriamanana Fitahiana'),(415,5,'L',8,'5315','RANDIMBISON Falimanana'),(416,5,'L',9,'5410','RANDRIANARIJAONA Dina Nambinintsoa'),(417,5,'L',10,'5067','RASOLOFONIRINA Tantely Thierry'),(418,6,'V',1,'6051','RAFANJARISOA Emelie'),(419,6,'V',2,'6035','RAHANTAVELONANTENAINA Lalao'),(420,6,'V',3,'6002','RAHARIMANANA Suzette'),(421,6,'V',4,'6183','RAHARIVELONTANDRAMAHEFA Mboahangy '),(422,6,'V',5,'6105','RAKOTOARISOA Nivohanta Harilala Mialy'),(423,6,'V',6,'6196*','RAKOTONIRINA Heinz Anita'),(424,6,'V',7,'6085','RANAIVOSON Ny Domoina '),(425,6,'V',8,'6010','RATOMPOZANAKA Mbolatiana'),(426,6,'V',9,'6144','RAVALOSON Minorila'),(427,6,'V',10,'1213','RAVAOARIVELO Oliva'),(428,6,'V',11,'6245','RAZANAJAO Andoniaina Domoina'),(429,6,'L',1,'6197','ANDRIAMIARY Harrison Daniel'),(430,6,'L',2,'6004','ANDRIAMITANDRINA Hariniavo Fanevasoa'),(431,6,'L',3,'6001','ANDRIAMITANDRINA Naivosoa'),(432,6,'L',4,'6145','ANDRIANJAKATOMPOMAENINA Herinandrasana'),(433,6,'L',5,'6104','RAHARIVELOTANDRAMAHEFA Rivoary'),(434,6,'L',6,'6143','RAJAONARIVELO A. Allain Olivier'),(435,6,'L',7,'6195*','RAKOTONDRAZAKA Fabien'),(436,6,'L',8,'6182','RAKOTONIAINA Radoharimisa Michel'),(437,6,'L',9,'6244','RASOLOARINAIVO Andrintsoa Rennel Antonny'),(438,6,'L',10,'6195','RATSITOARIMAHEFA Lalatiana'),(439,6,'L',11,'6247','RATSITRATRINIHAFA Andry Jaona'),(440,4,'L',1,'4181','RAJOELISON Justin'),(441,4,'L',2,'4081','RAJOELISON Nantenaina Zo'),(442,4,'L',3,'4001','RAKOTOMANIRAKA Andriamamenosoa'),(443,4,'L',4,'4087','RAKOTONDRAZAKA Rivo Philibert'),(444,4,'L',5,'4108','RAMAHENINTSOA Lovasoa William'),(445,4,'L',6,'4094','RANDRIAMANANTENA Franck Elizard'),(446,4,'L',7,'4077','RANDRIAMIHARISOA Mamitiana Belzard'),(447,4,'L',8,'4054','RAZANAJATOVO Jean Michel');

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

/*Table structure for table `sys_contrainte` */

DROP TABLE IF EXISTS `sys_contrainte`;

CREATE TABLE `sys_contrainte` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `GENRE` varchar(2) DEFAULT NULL,
  `QUARTIER` int(11) DEFAULT NULL,
  `NOMBRE_MAX` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

/*Data for the table `sys_contrainte` */

insert  into `sys_contrainte`(`ID`,`GENRE`,`QUARTIER`,`NOMBRE_MAX`) values (1,'L',1,12),(2,'V',1,12),(3,'L',2,12),(4,'V',2,12),(5,'L',3,8),(6,'V',3,8),(7,'L',4,10),(8,'V',4,10),(9,'L',5,7),(10,'V',5,7),(11,'L',6,6),(12,'V',6,6);

/*Table structure for table `sys_user` */

DROP TABLE IF EXISTS `sys_user`;

CREATE TABLE `sys_user` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(50) DEFAULT NULL,
  `LOGIN` varchar(100) DEFAULT NULL,
  `PASSWORD` varchar(100) DEFAULT NULL,
  `INPUT_NUMBER` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `sys_user` */

insert  into `sys_user`(`ID`,`NAME`,`LOGIN`,`PASSWORD`,`INPUT_NUMBER`) values (1,'Ekipa01','Equipe01','nrz',5),(2,'Ekipa02','Equipe02','nrz2',2),(3,'Ekipa03','Equipe03','nrz3',4),(4,'Komity','Komity','Komity',9999);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
