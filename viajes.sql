/*
SQLyog Trial v13.1.8 (64 bit)
MySQL - 10.4.22-MariaDB : Database - viajes
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`viajes` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `viajes`;

/*Table structure for table `alquiler` */

DROP TABLE IF EXISTS `alquiler`;

CREATE TABLE `alquiler` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `donde` varchar(50) DEFAULT NULL,
  `fechadeinicio` varchar(50) DEFAULT NULL,
  `fechaderegreso` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `alquiler` */

insert  into `alquiler`(`id`,`donde`,`fechadeinicio`,`fechaderegreso`,`created_at`,`updated_at`) values 
(1,'Cancun','2021-12-25','2021-12-31','2021-12-26 04:49:08','2021-12-26 04:49:08');

/*Table structure for table `clientes` */

DROP TABLE IF EXISTS `clientes`;

CREATE TABLE `clientes` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `app` varchar(50) DEFAULT NULL,
  `apm` varchar(50) DEFAULT NULL,
  `fn` varchar(50) DEFAULT NULL,
  `genero` varchar(20) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `clientes` */

insert  into `clientes`(`id`,`nombre`,`app`,`apm`,`fn`,`genero`,`telefono`,`created_at`,`updated_at`) values 
(1,'Alexis','Morales','Gomez','2000-05-20','Masculino','1234567890','2021-12-26 04:50:23','2021-12-26 04:50:23');

/*Table structure for table `cruceros` */

DROP TABLE IF EXISTS `cruceros`;

CREATE TABLE `cruceros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `donde` varchar(50) DEFAULT NULL,
  `fechadeinicio` varchar(50) DEFAULT NULL,
  `categorias` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `cruceros` */

insert  into `cruceros`(`id`,`donde`,`fechadeinicio`,`categorias`,`created_at`,`updated_at`) values 
(1,'Oaxaca','2021-12-25','Economía','2021-12-26 04:51:15','2021-12-26 04:51:15');

/*Table structure for table `hotel` */

DROP TABLE IF EXISTS `hotel`;

CREATE TABLE `hotel` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `registro` varchar(50) DEFAULT NULL,
  `revisa` varchar(50) DEFAULT NULL,
  `invitado` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `hotel` */

insert  into `hotel`(`id`,`registro`,`revisa`,`invitado`,`created_at`,`updated_at`) values 
(1,'2021-12-25','2022-01-01','4','2021-12-26 04:51:51','2021-12-26 04:51:51');

/*Table structure for table `usuario` */

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `usuario` */

insert  into `usuario`(`id`,`nombre`,`correo`,`password`,`created_at`,`updated_at`) values 
(1,'Alexis','al221811729@gmail.com','12345','2021-12-26 04:48:05','2021-12-26 04:48:05');

/*Table structure for table `vuelo` */

DROP TABLE IF EXISTS `vuelo`;

CREATE TABLE `vuelo` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `donde` varchar(50) DEFAULT NULL,
  `registro` varchar(50) DEFAULT NULL,
  `revisar` varchar(50) DEFAULT NULL,
  `invitado` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `vuelo` */

insert  into `vuelo`(`id`,`donde`,`registro`,`revisar`,`invitado`,`created_at`,`updated_at`) values 
(1,'Destino','2021-12-25','2021-12-30','5+','2021-12-26 04:52:47','2021-12-26 04:52:47');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
