
Drop database if exists ppit_test;
CREATE DATABASE ppit_test CHARACTER SET utf8 COLLATE UTF8_GENERAL_CI ;

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `customer_id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `service`;
CREATE TABLE IF NOT EXISTS `service` (
  `service_id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT,
    `type` varchar(20) NOT NULL,
    `customer_id` tinyint(3) UNSIGNED NOT NULL, 
    `date` DATE NOT NULL,
  PRIMARY KEY (`service_id`),
  KEY `idx_customer` (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

ALTER TABLE `service`
  ADD CONSTRAINT `idx_customer`FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `customer`
  ADD CONSTRAINT `idx_service`FOREIGN KEY (`service_id`) REFERENCES `service` (`service_id`) ON DELETE CASCADE ON UPDATE CASCADE;



  