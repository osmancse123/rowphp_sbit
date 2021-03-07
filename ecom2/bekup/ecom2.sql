/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.3.16-MariaDB : Database - ecom2
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`ecom2` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `ecom2`;

/*Table structure for table `about_us` */

DROP TABLE IF EXISTS `about_us`;

CREATE TABLE `about_us` (
  `id` int(20) NOT NULL,
  `Details` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `about_us` */

insert  into `about_us`(`id`,`Details`) values (1,'to see ljdosfjoj');

/*Table structure for table `category_info` */

DROP TABLE IF EXISTS `category_info`;

CREATE TABLE `category_info` (
  `item_name` varchar(15) DEFAULT NULL,
  `category_id` int(15) NOT NULL,
  `category_name` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `category_info` */

insert  into `category_info`(`item_name`,`category_id`,`category_name`) values ('laptop',1,'hp'),('compuer',2,'lenovo'),('laptop',3,'dell'),('laptop',5,'asus'),('compuer',6,'asus');

/*Table structure for table `contact_us` */

DROP TABLE IF EXISTS `contact_us`;

CREATE TABLE `contact_us` (
  `id` int(15) NOT NULL,
  `Details` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `contact_us` */

insert  into `contact_us`(`id`,`Details`) values (1,' uisd jfsdjfisd ');

/*Table structure for table `creat_user` */

DROP TABLE IF EXISTS `creat_user`;

CREATE TABLE `creat_user` (
  `Name` varchar(20) DEFAULT NULL,
  `Email` varchar(20) NOT NULL,
  `Password` varchar(20) DEFAULT NULL,
  `ConfirmPassword` varchar(20) DEFAULT NULL,
  `AdminType` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `creat_user` */

insert  into `creat_user`(`Name`,`Email`,`Password`,`ConfirmPassword`,`AdminType`) values ('tanjil','osman@gmail.com','p@$$','p@$$','Main Admin'),('tarek','tarek@gmail.com','123','123','Sub Admin');

/*Table structure for table `customer_info` */

DROP TABLE IF EXISTS `customer_info`;

CREATE TABLE `customer_info` (
  `customerID` int(30) NOT NULL,
  `ProductName` varchar(30) DEFAULT NULL,
  `ProductDetails` varchar(200) DEFAULT NULL,
  `ProductContact` varchar(30) DEFAULT NULL,
  `ProductPicture` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`customerID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `customer_info` */

insert  into `customer_info`(`customerID`,`ProductName`,`ProductDetails`,`ProductContact`,`ProductPicture`) values (1,'compuer','<p>fdfd</p>','dfdf',NULL);

/*Table structure for table `item_info` */

DROP TABLE IF EXISTS `item_info`;

CREATE TABLE `item_info` (
  `Item_ID` int(30) NOT NULL,
  `Item_Name` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`Item_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `item_info` */

insert  into `item_info`(`Item_ID`,`Item_Name`) values (5,'laptop'),(222,'asus'),(333,'laptop'),(34343,'4343');

/*Table structure for table `product_info` */

DROP TABLE IF EXISTS `product_info`;

CREATE TABLE `product_info` (
  `ItemName` varchar(20) DEFAULT NULL,
  `CatName` varchar(20) DEFAULT NULL,
  `ProductID` int(30) NOT NULL,
  `ProductName` varchar(20) DEFAULT NULL,
  `ProductPrice` varchar(20) DEFAULT NULL,
  `ProductDetails` varchar(200) DEFAULT NULL,
  `ProductStock` varchar(50) DEFAULT NULL,
  `ProductPicture` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ProductID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `product_info` */

insert  into `product_info`(`ItemName`,`CatName`,`ProductID`,`ProductName`,`ProductPrice`,`ProductDetails`,`ProductStock`,`ProductPicture`) values ('asus','lenovo',3,'core i 7','78000 tk','<p>fd</p>','90',NULL),('laptop','asus',43,'core i 3','78000 tk','<p>3rwer</p>','77',NULL),('laptop','asus',344,'core i 3','40000 tk','<p>sssss</p>','34355',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
