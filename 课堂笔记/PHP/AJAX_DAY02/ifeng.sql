#(1)设置SQL语句编码方式				
SET NAMES UTF8;
#(2)试着删除数据库ifeng
DROP DATABASE IF EXISTS ifeng;
#(3)创建数据库ifeng，字符编码UTF8
CREATE DATABASE ifeng CHARSET=UTF8;
#(4)进入数据库ifeng
USE ifeng;


#(5)创建新闻表news(nid, title, content, isOnTop, pubTime, viewCount)
CREATE TABLE news(
  nid INT PRIMARY KEY AUTO_INCREMENT,
  title VARCHAR(32),
  content VARCHAR(4096),
  isOnTop BOOLEAN,
  pubTime BIGINT,
  viewCount INT
);
#(6)插入3条新闻纪录
INSERT INTO news VALUES
(NULL,'新闻标题1','新闻内容1','1','134231634554','230'),
(NULL,'新闻标题2','新闻内容2','0','135231634555','434'),
(NULL,'新闻标题3','新闻内容3','1','136231634556','5477');


#(7)创建新闻评论表comment(cid, content, userName, phone, pubTime)
CREATE TABLE comment(
  cid INT PRIMARY KEY AUTO_INCREMENT,
  content VARCHAR(1024),
  userName VARCHAR(32),
  phone VARCHAR(16),		#电话/密码都是字符串
  headPic VARCHAR(64),		#图片是字符串<img src="">
  pubTime BIGINT,		#日期时间是大整数
  newsId INT			#表间关系列
);
#(8)插入6条新闻评论
INSERT INTO comment VALUES
(NULL,'评论内容1','用户1','13501','img/1.jpg','1348384384334','1'),
(NULL,'评论内容2','用户2','13502','img/2.jpg','1348384384334','1'),
(NULL,'评论内容3','用户3','13502','img/3.jpg','1348384384334','1'),
(NULL,'评论内容4','用户4','13503','img/4.jpg','1348384384334','2'),
(NULL,'评论内容5','用户5','13504','img/5.jpg','1348384384334','2'),
(NULL,'评论内容6','用户6','13505','img/6.jpg','1348384384334','3');

#(9)查询出所有的新闻
SELECT * FROM news;
#(10)查询出所有的评论			
#SELECT * FROM comment;

#(11)查询出1号新闻所有的评论
#SELECT * FROM comment WHERE newsId=1;
