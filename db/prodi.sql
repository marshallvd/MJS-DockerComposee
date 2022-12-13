/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.4.24-MariaDB : Database - prodi
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
  `NIM` varchar(10) NOT NULL,
  `Namamhs` varchar(30) DEFAULT NULL,
  `Alamatmhs` varchar(80) DEFAULT NULL,
  `Kontakmhs` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`NIM`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `mahasiswa` */

insert  into `mahasiswa`(`NIM`,`Namamhs`,`Alamatmhs`,`Kontakmhs`) values 
('2105551094','I Kadek Rai Pramana','Jl. Batu Intan 7 B2 No.4','088236053449'),
('2105551095','Joko B','Jl. Batuyang','088811112220'),
('2105551096','Bambang S','Jl. Merdeka','088811112221'),
('2105551097','Badrul G','Jl. Halo','088811112222'),
('2105551098','S Gaga',' Jl. Yes','088811112223'),
('2105551099','Suti G','Jl. Gege','088811112224'),
('2105551100','Wawan M','Jl. Haha','088811112225'),
('2105551101','Kaka H','Jl. Kaka','088811112226'),
('2105551102','Ade H','Jl. Ade','088811112227'),
('2105551103','Jok D','Jl. Hok','088811112228'),
('2105551104','Vita H','Jl. Gugu','088811112229'),
('2105551105','Nini L','Jl. Merdeka','088811112210'),
('2105551106','Jajal V','Jl. Merdeka','088811112211'),
('2105551107','Cris B','Jl. Tete','088811112212'),
('2105551108','Koko P','Jl. Yey','088811112213'),
('2105551109','Lala J','Jl. Yes','088811112214'),
('2105551110','Qiqi K',' Jl. Gugu','088811112215'),
('2105551111','Xero X','Jl. Gugu','088811112216'),
('2105551112','Tytaj N','Jl. Gugu','088811112217'),
('2105551115','Inin C','Jl. Halo','088811112218');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
