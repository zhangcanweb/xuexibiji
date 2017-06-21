SET NAMES UTF8;
DROP DATABASE IF EXISTS meishichina;
CREATE DATABASE meishichina CHARSET=UTF8;
USE meishichina;

CREATE TABLE dish(
  did INT PRIMARY KEY AUTO_INCREMENT,
  dname VARCHAR(32),
  pic VARCHAR(64),
  author VARCHAR(32),
  pubTime BIGINT
);
INSERT INTO dish VALUES
(NULL,'菜谱1','img/1.jpg','作者1','1473123456789'),
(NULL,'菜谱2','img/2.jpg','作者2','1474123456789'),
(NULL,'菜谱3','img/3.jpg','作者3','1475123456789'),
(NULL,'菜谱4','img/4.jpg','作者4','1476123456789');

SELECT * FROM dish;
