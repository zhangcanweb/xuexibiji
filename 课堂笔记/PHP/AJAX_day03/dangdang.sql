/**
编写SQL：创建数据库dangdang，包含表book(bid, pic, bname, price, pubDate, hasStock-是否有货)，试着插入三行记录，查询出所有记录
**/
SET NAMES UTF8;
DROP DATABASE IF EXISTS dangdang;
CREATE DATABASE dangdang CHARSET=UTF8;
USE dangdang;

CREATE TABLE book(
  bid INT PRIMARY KEY AUTO_INCREMENT,
  pic VARCHAR(64),
  bname VARCHAR(32),
  price FLOAT(8,2),
  pubDate BIGINT,
  hasStock BOOLEAN
);
INSERT INTO book VALUES
(NULL,'img/1.jpg','三国志','35.5','13432434342342','1'),
(NULL,'img/2.jpg','水浒传','45.5','15432434342342','0'),
(NULL,'img/3.jpg','西游记','55.5','16432434342342','1');

SELECT * FROM book;
