

use dbphp7;


INSERT INTO tb_visitors (desip) 
VALUES("127.0.0.1");

SELECT * FROM dbphp7.tb_visitors;


DROP TABLE IF EXISTS `dbphp7`.`tb_visitors`;
CREATE TABLE `dbphp7`.`tb_visitors` (
  `idvisitor` int(11) NOT NULL AUTO_INCREMENT,
  `desip` varchar(11) NOT NULL,
  `dessystem` varchar(128) NOT NULL,
  `dtaccess` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idvisitor`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- INSERT INTO `db_ecommerce`.`tb_persons` VALUES (1,'JoÃ£o Rangel','admin@hcode.com.br',2147483647,'2017-03-01 03:00:00'),(7,'Suporte','suporte@hcode.com.br',1112345678,'2017-03-15 16:10:27');