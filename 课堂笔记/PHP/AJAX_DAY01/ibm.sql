#(1)设置编码方式
SET NAMES UTF8;
#(2)试着删除数据库
DROP DATABASE IF EXISTS ibm;
#(3)创建数据库-ibm，指定保存数据所用编码方式
CREATE DATABASE ibm CHARSET=UTF8;
#(4)开始使用数据库-ibm
USE ibm;

#(5)创建一个部门表-dept(did,dname,location)
CREATE TABLE dept(
  did INT PRIMARY KEY,
  dname VARCHAR(32),
  location VARCHAR(8)
);
#(6)插入三个部门记录行，10-....   20-....   30-....
INSERT INTO dept VALUES('10','市场部','北京');
INSERT INTO dept VALUES('20','运营部','青岛');
INSERT INTO dept VALUES('30','市场部','青岛');

#(7)创建一个员工表-emp(eid,ename,salary,hireDate,isOnDuty,deptId )
CREATE TABLE emp(
  eid INT PRIMARY KEY AUTO_INCREMENT,
  ename VARCHAR(32),
  salary FLOAT(8,2),			#999999.99
  hireDate DATE,
  isOnDuty BOOLEAN,
  deptId INT
);
#(8)为每个部门插入两个员工记录
INSERT INTO emp VALUES(
  NULL,'Tom','5000','2010-5-1','1','30'
);
INSERT INTO emp VALUES(
  NULL,'Mary','5500','2010-5-2','1','30'
);
INSERT INTO emp VALUES(
  NULL,'Joe','6000','2010-5-3','0','10'
);
INSERT INTO emp VALUES(
  NULL,'King','8000','2010-5-10','1','10'
);
INSERT INTO emp VALUES(
  NULL,'Scott','7000','2009-1-1','0','20'
);
INSERT INTO emp VALUES(
  NULL,'Kate','7500','2009-1-2','0','20'
);


#删除10号部门及其下的所有员工
DELETE FROM dept WHERE did=10;
DELETE FROM emp WHERE deptId=10;

#把30号部门编号改为300号，记得修改员工表
UPDATE dept SET did=300 WHERE did=30;
UPDATE emp SET deptId=300 WHERE deptId=30;


#(9)查询出所有的部门信息
SELECT did,dname,location FROM dept;
#(10)查询出运营部的编号
#SELECT did FROM dept WHERE dname='运营部';
#(11)查询出所有的员工信息
SELECT * FROM emp;
#(12)查询出20号部门的所有的员工信息
#SELECT * FROM emp WHERE deptId=20;
#(12)查询出运营部的所有员工信息——查询嵌套
/*SELECT * 
FROM emp 
WHERE deptId=(
	SELECT did 
	FROM dept 
	WHERE dname='运营部'
);*/
