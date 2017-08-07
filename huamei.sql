/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 5.6.17 : Database - huamei
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`huamei` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;

USE `huamei`;

/*Table structure for table `adminers` */

DROP TABLE IF EXISTS `adminers`;

CREATE TABLE `adminers` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sex` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pwd` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `time` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `describe` char(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `adminers` */

insert  into `adminers`(`id`,`user`,`sex`,`pwd`,`phone`,`email`,`role`,`time`,`state`,`describe`) values (1,'admin',NULL,'123456','183333333','784563552@qq.com','超级管理员',NULL,NULL,NULL),(4,'123',NULL,NULL,'18492606277','784563552@qq.com','超级管理员','17-08-02',NULL,NULL);

/*Table structure for table `case` */

DROP TABLE IF EXISTS `case`;

CREATE TABLE `case` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `zl` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `school` varchar(255) NOT NULL,
  `describe` char(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

/*Data for the table `case` */

insert  into `case`(`id`,`name`,`age`,`zl`,`time`,`pic`,`school`,`describe`) values (25,'王怡然',6,'','1501857177','/Uploads/2017-08-04/5984859907400.jpg','刘砦小学','发现弱视2年余，08年在市二院就诊，戴镜一年多后视力由0.3提到0.4'),(26,'王怡然',6,'','1501857194','/Uploads/2017-08-04/598485aa6710c.jpg','刘砦小学','发现弱视2年余，08年在市二院就诊，戴镜一年多后视力由0.3提到0.4'),(27,'王怡然',6,'','1501857210','/Uploads/2017-08-04/598485ba31a72.jpg','刘砦小学','发现弱视2年余，08年在市二院就诊，戴镜一年多后视力由0.3提到0.4'),(28,'王怡然',6,'','1501857230','/Uploads/2017-08-04/598485ce34a5e.jpg','刘砦小学','发现弱视2年余，08年在市二院就诊，戴镜一年多后视力由0.3提到0.4'),(29,'王怡然',6,'','1501857259','/Uploads/2017-08-04/598485eb1f28b.jpg','刘砦小学','发现弱视2年余，08年在市二院就诊，戴镜一年多后视力由0.3提到0.4');

/*Table structure for table `friendlink` */

DROP TABLE IF EXISTS `friendlink`;

CREATE TABLE `friendlink` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `picUrl` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `describe` char(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `friendlink` */

insert  into `friendlink`(`id`,`name`,`link`,`picUrl`,`describe`) values (1,'百度','http://www.baidu.com',NULL,''),(4,'搜狐','http://www.souhu.com',NULL,NULL);

/*Table structure for table `gyhm` */

DROP TABLE IF EXISTS `gyhm`;

CREATE TABLE `gyhm` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `type` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `picurl` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `gyhm` */

insert  into `gyhm`(`id`,`type`,`picurl`) values (32,'ryzz','http://localhost/HuaMei/Application/Home/Image/2017-08-04/598489c8158ed.jpg'),(33,'ryzz','http://localhost/HuaMei/Application/Home/Image/2017-08-04/598489d7d911b.jpg'),(34,'ryzz','http://localhost/HuaMei/Application/Home/Image/2017-08-04/598489e71973a.jpg'),(35,'ryzz','http://localhost/HuaMei/Application/Home/Image/2017-08-04/598489fa6525a.jpg'),(36,'hjsb','http://localhost/HuaMei/Application/Home/Image/2017-08-05/5984ab1f42bb9.jpg'),(37,'hjsb','http://localhost/HuaMei/Application/Home/Image/2017-08-05/5984ab2bec347.jpg'),(38,'hjsb','http://localhost/HuaMei/Application/Home/Image/2017-08-05/5984ab3d7f449.jpg'),(39,'hjsb','http://localhost/HuaMei/Application/Home/Image/2017-08-05/5984ab47c41a4.jpg'),(40,'hjsb','http://localhost/HuaMei/Application/Home/Image/2017-08-05/5984ab5196c4f.jpg'),(41,'hjsb','http://localhost/HuaMei/Application/Home/Image/2017-08-05/5984ab5bb40ae.jpg'),(42,'hjsb','http://localhost/HuaMei/Application/Home/Image/2017-08-05/5984ab6712014.jpg'),(43,'hjsb','http://localhost/HuaMei/Application/Home/Image/2017-08-05/5984ab72d189b.jpg'),(44,'hjsb','http://localhost/HuaMei/Application/Home/Image/2017-08-05/5984ab7f012e0.jpg'),(45,'hjsb','http://localhost/HuaMei/Application/Home/Image/2017-08-05/5984ab8bf0dee.jpg');

/*Table structure for table `news` */

DROP TABLE IF EXISTS `news`;

CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

/*Data for the table `news` */

insert  into `news`(`id`,`title`,`content`,`pic`,`time`) values (18,'新闻动态','新闻动态','/Uploads/2017-08-04/59848923a53ee.png','1501858083'),(19,'新闻动态','新闻动态','/Uploads/2017-08-04/59848939145a8.png','1501858105'),(20,'新闻动态','新闻动态','/Uploads/2017-08-04/598489579c644.png','1501858135'),(21,'vv热v人 ','额个人个人','/Uploads/2017-08-05/59857cb4da0c1.jpg','1501920436');

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `picurl` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `describe` char(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `products` */

insert  into `products`(`id`,`type`,`name`,`picurl`,`describe`) values (24,'全进口角膜塑形镜','全进口角膜塑形镜','http://localhost/HuaMei/Application/Home/Image/2017-08-04/5984841d18c75.jpg',''),(25,'超声波清洗器','超声波清洗器','http://localhost/HuaMei/Application/Home/Image/2017-08-04/598484327ee16.jpg',''),(26,'日本进口目立康护理液','日本进口目立康护理液','http://localhost/HuaMei/Application/Home/Image/2017-08-04/59848443c5c98.jpg',''),(27,'美国进口博视顿护理液','美国进口博视顿护理液','http://localhost/HuaMei/Application/Home/Image/2017-08-05/5984afe8aba42.jpg',''),(28,'框架眼镜','框架眼镜','http://localhost/HuaMei/Application/Home/Image/2017-08-04/5984847a612c5.jpg',''),(29,'太阳镜','太阳镜','http://localhost/HuaMei/Application/Home/Image/2017-08-04/5984852db4dba.jpg',''),(30,'隐形眼镜','隐形眼镜','http://localhost/HuaMei/Application/Home/Image/2017-08-04/598484c2a690f.jpg',''),(31,'叶黄素','叶黄素','http://localhost/HuaMei/Application/Home/Image/2017-08-04/598484dc9a6a8.jpg',''),(32,'弱视治疗仪','弱视治疗仪','http://localhost/HuaMei/Application/Home/Image/2017-08-04/598484fd01db0.jpg','');

/*Table structure for table `tame` */

DROP TABLE IF EXISTS `tame`;

CREATE TABLE `tame` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `introduce` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `fl` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

/*Data for the table `tame` */

insert  into `tame`(`id`,`name`,`position`,`introduce`,`time`,`pic`,`fl`) values (17,'王紫龙','技术总监','毕业于天津医学院眼视光专业，曾就职于陕西武警医院眼视光门诊部门','1501857494','/Uploads/2017-08-04/598486d6a1ae6.jpg','角膜塑形，RPG验配，视功能分析和视觉训练'),(18,'韩毅','验配师','毕业于西安医学院眼视光专业，曾在西京医院眼科部门实习','1501857677','/Uploads/2017-08-04/5984878db271c.jpg','角膜塑形，RPG验配，屈光不正，近视，弱视，视功能检查'),(19,'刘帆','摘戴师','毕业于天津医学院眼视光专业，曾就职于西安麦迪格','1501857777','/Uploads/2017-08-04/598487f1cdce0.jpg','角膜塑形，RPG验配，摘戴与复查'),(20,'郑娅莉','','专注华美眼视光服务试戴体验，为客户提供百分百满意服务','1501857924','/Uploads/2017-08-04/59848884efa6e.jpg',''),(21,'沈少敏','','专注华美眼视光服务试戴体验，为客户提供百分百满意服务','1501858004','/Uploads/2017-08-04/598488d4795bf.jpg','');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
