/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.4.21-MariaDB : Database - prodi
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`prodi` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `prodi`;

/*Table structure for table `mahasiswa` */

DROP TABLE IF EXISTS `mahasiswa`;

CREATE TABLE `mahasiswa` (
  `NIM` int(12) NOT NULL,
  `Namamhs` varchar(255) DEFAULT NULL,
  `Alamatmhs` varchar(255) DEFAULT NULL,
  `Kontakmhs` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`NIM`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `mahasiswa` */

LOCK TABLES `mahasiswa` WRITE;

insert  into `mahasiswa`(`NIM`,`Namamhs`,`Alamatmhs`,`Kontakmhs`) values 
(2105551090,'I Komang Cleon Kalea','Ubud','089605055955'),
(2105551092,'Made Wahyu Adwitya Pramana','Jimbaran','081246437828'),
(2105551093,'Made Marshall Vira Deva',' Denpasar','085155426099'),
(2105551094,'I Kadek Rai Pramana','Batu Bulan','08823053449'),
(2105551095,'I Nengah Radityana','Bangli','081238465833'),
(2105551097,'I Gusti Ngurah Bagus Picessa Kresna Mandala','Denpasar','081339501944');

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
