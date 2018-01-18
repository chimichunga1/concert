/*
SQLyog Ultimate - MySQL GUI v8.2 
MySQL - 5.1.42-community : Database - concert
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`concert` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `concert`;

/*Table structure for table `account_tbl` */

DROP TABLE IF EXISTS `account_tbl`;

CREATE TABLE `account_tbl` (
  `user_id` int(255) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `transac_id` int(255) DEFAULT NULL,
  `transac_number` int(255) DEFAULT NULL,
  `contact_number` int(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `accessright` int(255) DEFAULT NULL,
  `isOnline` int(255) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `account_tbl` */

insert  into `account_tbl`(`user_id`,`user_name`,`user_password`,`transac_id`,`transac_number`,`contact_number`,`email`,`accessright`,`isOnline`) values (1,'admin','admin',123,1234,999,'asd',2,NULL),(2,'user','user',132,155,9304,'asdj',2,NULL),(3,'superad','superad',123,123,123,'123',1,NULL);

/*Table structure for table `event_tbl` */

DROP TABLE IF EXISTS `event_tbl`;

CREATE TABLE `event_tbl` (
  `event_id` int(255) NOT NULL AUTO_INCREMENT,
  `event_name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `event_image` varchar(255) DEFAULT NULL,
  `event_time` time DEFAULT NULL,
  `event_date` date DEFAULT NULL,
  `venue_id` int(255) DEFAULT NULL,
  `venue_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

/*Data for the table `event_tbl` */

insert  into `event_tbl`(`event_id`,`event_name`,`description`,`event_image`,`event_time`,`event_date`,`venue_id`,`venue_name`) values (8,'Paramore','paramore mo to','images/P Paramore.jpeg','00:00:00','2018-01-18',NULL,'dito');

/*Table structure for table `transac_tbl` */

DROP TABLE IF EXISTS `transac_tbl`;

CREATE TABLE `transac_tbl` (
  `transac_id` int(255) NOT NULL AUTO_INCREMENT,
  `total_price` int(255) DEFAULT NULL,
  `seat_order` int(255) DEFAULT NULL,
  `transac_number` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `zone_id` int(255) NOT NULL,
  PRIMARY KEY (`transac_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `transac_tbl` */

/*Table structure for table `venue_tbl` */

DROP TABLE IF EXISTS `venue_tbl`;

CREATE TABLE `venue_tbl` (
  `venue_id` int(255) NOT NULL AUTO_INCREMENT,
  `venue_name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`venue_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `venue_tbl` */

insert  into `venue_tbl`(`venue_id`,`venue_name`,`address`) values (1,'MOA','NCR'),(2,'test1','address'),(3,'asd','123123123123123123123'),(4,'a','123123123123'),(5,'a','123123123123123123123'),(6,'11','123123123123123');

/*Table structure for table `zone_tbl` */

DROP TABLE IF EXISTS `zone_tbl`;

CREATE TABLE `zone_tbl` (
  `zone_id` int(255) NOT NULL AUTO_INCREMENT,
  `zone_name` varchar(255) NOT NULL,
  `zone_price` int(255) DEFAULT NULL,
  `seat_quantity` int(255) DEFAULT NULL,
  `event_id` int(255) DEFAULT NULL,
  `venue_id` int(255) DEFAULT NULL,
  PRIMARY KEY (`zone_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

/*Data for the table `zone_tbl` */

insert  into `zone_tbl`(`zone_id`,`zone_name`,`zone_price`,`seat_quantity`,`event_id`,`venue_id`) values (1,'VIP',10,50,1,1),(2,'Upper Box',8,200,1,1),(3,'Lower Box',3,300,1,1),(4,'General Admission',500,800,1,1),(14,' UPPER BOX',3,2,3,NULL),(15,'GENERAL ADMISSION',3,1,3,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
