/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 5.7.21 : Database - laravel_windows
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
USE `laravel_windows`;

/*Table structure for table `back_produtos` */

DROP TABLE IF EXISTS `back_produtos`;

CREATE TABLE `back_produtos` (
  `ID` int(11) NOT NULL DEFAULT '0',
  `nome` varchar(255) CHARACTER SET latin1 NOT NULL,
  `valor` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `descricao` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `back_produtos` */

LOCK TABLES `back_produtos` WRITE;

insert  into `back_produtos`(`ID`,`nome`,`valor`,`descricao`,`quantidade`) values (1,'Geladeira','5900.00','Side by Side com gelo na porta',2),(2,'FogÃ£o','950.00','Painel automÃ¡tico e forno elÃ©trico',5),(3,'Microondas','1520.00','Manda SMS quando termina de esquentar',1);

UNLOCK TABLES;

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `migrations` */

LOCK TABLES `migrations` WRITE;

insert  into `migrations`(`migration`,`batch`) values ('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2018_10_10_172647_adiciona_tamanho_no_produto',2);

UNLOCK TABLES;

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `password_resets` */

LOCK TABLES `password_resets` WRITE;

UNLOCK TABLES;

/*Table structure for table `produtos` */

DROP TABLE IF EXISTS `produtos`;

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `valor` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `descricao` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `tamanho` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Sem tamanho',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `produtos` */

LOCK TABLES `produtos` WRITE;

insert  into `produtos`(`id`,`nome`,`valor`,`descricao`,`quantidade`,`tamanho`) values (1,'Geladeira','5900.00','Side by Side com gelo na porta',2,'Sem tamanho'),(2,'Fogão','950.00','Painel automático e forno elétrico',5,'Sem tamanho'),(3,'Microondas','1520.00','Manda SMS quando termina de esquentar',1,'Sem tamanho');

UNLOCK TABLES;

/*Table structure for table `topic_parentings` */

DROP TABLE IF EXISTS `topic_parentings`;

CREATE TABLE `topic_parentings` (
  `id` int(13) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(6) unsigned DEFAULT NULL,
  `child_id` int(6) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `topic_parentings` */

LOCK TABLES `topic_parentings` WRITE;

UNLOCK TABLES;

/*Table structure for table `topics` */

DROP TABLE IF EXISTS `topics`;

CREATE TABLE `topics` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `url` varchar(500) DEFAULT NULL,
  `cover` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

/*Data for the table `topics` */

LOCK TABLES `topics` WRITE;

insert  into `topics`(`id`,`title`,`url`,`cover`) values (1,'Laravel','https://laravel.com/',NULL),(2,'Web Application','https://en.wikipedia.org/wiki/Web_application',NULL),(3,'PHP','https://pt.wikipedia.org/wiki/PHP',NULL),(4,'Framework','https://pt.wikipedia.org/wiki/Framework',NULL),(5,'Data Validation','https://en.wikipedia.org/wiki/Data_validation',NULL),(6,'Authentication','https://en.wikipedia.org/wiki/Authentication',NULL),(7,'Database Connection','https://en.wikipedia.org/wiki/Database_connection',NULL),(8,'WAMP Server','https://pt.wikipedia.org/wiki/WampServer',NULL),(9,'NodeJS','https://nodejs.org/en/',NULL),(10,'Composer','https://getcomposer.org/',NULL),(11,'Artisan','https://laravel.com/docs/5.7/artisan',NULL),(12,'Directory Structure','https://en.wikipedia.org/wiki/Directory_structure',NULL),(13,'Regras de Negócio','https://pt.wikipedia.org/wiki/Regras_de_neg%C3%B3cio',NULL),(14,'Client-Server Model','https://en.wikipedia.org/wiki/Client%E2%80%93server_model',NULL),(15,'Computer Program','https://en.wikipedia.org/wiki/Computer_program',NULL),(16,'Online Shopping','https://en.wikipedia.org/wiki/Online_shopping',NULL),(17,'Webmail','https://en.wikipedia.org/wiki/Webmail',NULL),(18,'Online Auction','https://en.wikipedia.org/wiki/Online_auction',NULL),(19,'Dynamic Web Page','https://en.wikipedia.org/wiki/Dynamic_web_page',NULL),(20,'MVC',NULL,NULL),(21,'MVC Model',NULL,NULL),(22,'MVC View',NULL,NULL),(23,'MVC Controller',NULL,NULL),(24,'Requisição',NULL,NULL),(25,'URL',NULL,NULL),(26,'Artisan Serve',NULL,NULL),(27,'Artisan Make:Controller',NULL,NULL),(28,'Internet Protocol',NULL,NULL),(29,'HTTP Protocol',NULL,NULL),(30,'Rota',NULL,NULL),(31,'HTML',NULL,NULL),(32,'Database',NULL,NULL),(33,'Development Toolchain','https://en.wikipedia.org/wiki/Toolchain',NULL),(34,'Linker','https://en.wikipedia.org/wiki/Linker_(computing)',NULL),(35,'HTTP Request','https://www.tutorialspoint.com/http/http_requests.htm',NULL),(36,'HTTP Method','https://www.tutorialspoint.com/http/http_methods.htm',NULL),(37,'Blade Template','https://laravel.com/docs/5.7/blade',NULL),(38,'Console Program',NULL,NULL),(39,'Keyboard',NULL,NULL),(40,'Integrated Development Environment',NULL,NULL),(41,'Text Editor',NULL,NULL),(42,'C++ 11',NULL,NULL),(43,'Preprocessor',NULL,NULL),(44,'C++ Function',NULL,NULL),(48,'Cross Site Forgery Request',NULL,NULL),(49,'Identation',NULL,NULL),(50,'Computer Hardware','https://en.wikipedia.org/wiki/Computer_hardware',NULL),(51,'Digital Permanence','https://en.wikipedia.org/wiki/Digital_permanence',NULL),(52,'Object Relational Mapping','https://en.wikipedia.org/wiki/Object-relational_mapping',NULL),(53,'Eloquent ORM','https://laravel.com/docs/5.0/eloquent',NULL),(54,'Add Existing Project to Github','https://help.github.com/articles/adding-an-existing-project-to-github-using-the-command-line/',NULL);

UNLOCK TABLES;

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `users` */

LOCK TABLES `users` WRITE;

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
