/*
SQL命令不区分大小写,
习惯上关键字都大写，非关键字都小写；
但必须以分号结尾
*/

/*SQL中的多行注释*/
#单行注释

#指定后面的SQL语句所用的字符编码方式
SET NAMES UTF8;   #SQL中UTF-8必须写作UTF8！

#数据库的数据结构：服务器 > 库 > 表 > 行 > 列

#删除指定的数据库，如果存在的话
DROP DATABASE IF EXISTS tedu;
#创建新的数据库，并指定存储数据所用的字符编码
CREATE DATABASE tedu CHARSET=UTF8;
#开始使用指定的数据库
USE tedu;

#创建保存学生信息的表
CREATE TABLE student(
  sid INT PRIMARY KEY AUTO_INCREMENT,	  #主键列，数据是唯一的;自增列
  stuName VARCHAR(4),	  #variable characters
  sex VARCHAR(1), 
  score FLOAT(4,1),       #999.9 
  birthday DATE
);

#向表中插入记录行,SQL中的字符串/日期必须使用单引号；数字可用单引号也可以不用
INSERT INTO student VALUES(1,'大旭','男','490','1991-10-1');
INSERT INTO student VALUES(2,'东东','男','690','1990-11-2');
INSERT INTO student VALUES(NULL,'梅梅','女','700','1989-12-3');   
INSERT INTO student VALUES(NULL,'丁丁','女','500','1989-1-1');   

#修改指定的记录行——最难记忆的语句
UPDATE student 
SET stuName='大东',score='710',birthday='1999-9-9'  
WHERE sid=2;  #SQL中判断相等只用一个等号

#删除指定的记录行——比较难记忆的语句
#DELETE FROM student ;	#删除所有的行
DELETE FROM student 
WHERE sid=1;	#删除满足条件的行


#查询出学生表中所有的记录行
SELECT sid,stuName,sex,score,birthday FROM student;

/*
SELECT sid,stuName,sex,score,birthday 
FROM student
WHERE sid=2;   #判定条件> <  >=  <=  !=
*/



