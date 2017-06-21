SET NAMES UTF8;
DROP DATABASE IF EXISTS xiaomi;
CREATE DATABASE xiaomi CHARSET=UTF8;
USE xiaomi;
CREATE TABLE carousel(
  pid INT PRIMARY KEY AUTO_INCREMENT,
  pic VARCHAR(30)
);
INSERT INTO carousel VALUES(NULL,'img/lunbo-1.jpg'),
                                                 (NULL,'img/lunbo-2.jpg'),
                                                 (NULL,'img/lunbo-3.jpg'),
                                                 (NULL,'img/lunbo-4.jpg'),
                                                 (NULL,'img/lunbo-5.jpg');
CREATE TABLE service(
  sid INT PRIMARY KEY AUTO_INCREMENT,
  sPic VARCHAR(30),
  sName VARCHAR(30)
);
INSERT INTO service VALUES(NULL,'img/gray_1.png','选购手机'),
                                              (NULL,'img/gray_2.png','企业团购'),
                                              (NULL,'img/gray_3.png','官翻产品'),
                                              (NULL,'img/gray_4.png','小米移动'),
                                              (NULL,'img/gray_5.png','以旧换新'),
                                              (NULL,'img/gray_6.png','话费充值');
CREATE TABLE serviceRight(
    pid INT PRIMARY KEY AUTO_INCREMENT,
    pic VARCHAR(30)
);
INSERT INTO serviceRight VALUES(NULL,'img/body-top-1.jpg'),
                                                      (NULL,'img/body-top-2.jpg'),
                                                      (NULL,'img/body-top-3.jpg');
CREATE TABLE starProductOne(
    pid INT PRIMARY KEY AUTO_INCREMENT,
    pic VARCHAR(30),
    pName VARCHAR(30),
    title VARCHAR(100),
    price INT
);
INSERT INTO starProductOne VALUES(NULL,'img/star-1-1.png','小米5s Plus','5.7英寸大屏手机，拍照黑科技',2299),
                                                            (NULL,'img/star-1-2.png','小米Pro 十核双摄','双摄像头手机，像单反一样去拍照',1099),
                                                            (NULL,'img/star-1-3.png','小米MIX','6.44" 大屏、4850mAh 大电量',1799),
                                                            (NULL,'img/star-1-4.png','小米笔记本','独立显卡、超轻薄、金属机身',3499),
                                                            (NULL,'img/star-1-5.png','小米平板2','轻薄全金属，海量内容',999);
CREATE TABLE starProductTwo(
    pid INT PRIMARY KEY AUTO_INCREMENT,
    pic VARCHAR(30),
    pName VARCHAR(30),
    title VARCHAR(100),
    price INT
);
INSERT INTO starProductTwo VALUES(NULL,'img/star-2-1.png','高品质原装液晶屏','超薄金属机身',1799),
                                                            (NULL,'img/star-2-2.png','小米盒子3 增强版','高端 4K 网络机顶盒',399),
                                                            (NULL,'img/star-2-3.png','小米圈铁耳机Pro','独创双动圈+动铁 三单元发声',199),
                                                            (NULL,'img/star-2-4.png','米加压力IH电饭煲','用聪明的锅，做幸福的饭',999),
                                                            (NULL,'img/star-2-5.png','小米手环2','OLED 显示屏幕,升级计步算法',149);
CREATE TABLE product(
     pid INT PRIMARY KEY AUTO_INCREMENT,
     pic VARCHAR(30),
     pName VARCHAR(30),
     title VARCHAR(100),
     price INT,
     comment VARCHAR(100),
     cmtPeople VARCHAR(50)
);
INSERT INTO product VALUES(NULL,'img/hard-1.jpg','小米蓝牙音响','震撼你的心灵',199,'东西很好看','来自jack评价'),
                                                (NULL,'img/hard-2.jpg','小米电源','给你你要的电量',49,'充电五分钟，供电一整天','来自rose的评价'),
                                                (NULL,'img/hard-3.jpg','米家压力IH电饭煲','限量送小米插线板 5孔位',999,'煮饭很好吃','来自飞翔的猪八戒的评价'),
                                                (NULL,'img/hard-4.jpg','小米净水器（厨上式）','12月15日-12月22日送PP棉滤芯',1299,'净水非常好用','来自小小的评价'),
                                                (NULL,'img/hard-5.jpg','iHealth智能血压计（蓝牙版）','送给父母的健康礼物 测血压仅需1步',169,'测量的很准确','来自蓝天的评价'),
                                                (NULL,'img/hard-6.jpg','小米智能家庭礼品装','高清双向通话，五重精准定位',149,'东西很好很实用','来自雪儿的评价'),
                                                (NULL,'img/hard-7.jpg','米兔定位电话','晨间唤醒，夜间睡眠，更幸福的起床',199,'电话真可爱，女儿很喜欢','煮饭阿姨'),
                                                (NULL,'img/hard-8.jpg','米家LED智能台灯','无可视频闪，亮度色温无级调节',159,'光照很好','来自你爸爸的爸爸的评价'),
                                                (NULL,'img/hard-9.jpg','九号平衡车','年轻人的酷玩具，骑行遥控两种玩法',1999,'速度很快，很好玩','来自宝宝的评价'),
                                                (NULL,'img/hard-10.jpg','米家扫地机器人','12月19日-12月22日，送虚拟墙',1699,'打扫很干净，还很好玩','来自苍老师的评价');
                                                            
CREATE TABLE navList(
    lid INT PRIMARY KEY AUTO_INCREMENT,
    lName VARCHAR(30)
);
INSERT INTO navList VALUES(NULL,'选购手机&平板'),
                                              (NULL,'小米MIX'),
                                              (NULL,'小米Note2'),
                                              (NULL,'小米5s'),
                                              (NULL,'小米5s Plus'),
                                              (NULL,'小米手机5'),
                                              (NULL,'小米Max'),
                                              (NULL,'手机对比'),
                                              (NULL,'查看全部');
CREATE TABLE productList(
    pid INT PRIMARY KEY AUTO_INCREMENT,
    pic VARCHAR(30),
    pName VARCHAR (30),
    title VARCHAR(100),
    price INT
);
INSERT INTO productList VALUES(NULL,'img/body-1.jpg','小米Note','5.7"双曲面柔性屏，正反面3D曲面玻璃，2256万超高像素相机，骁龙821性能版',2799),
                                                     (NULL,'img/body-2.jpg','小米MIX','.4“全面屏，全陶瓷机身，骁龙821性能版，4400mAh大电量，可选128GB/256GB版',3499),
                                                     (NULL,'img/body-3.jpg','小米5s','“暗夜之眼”超感光相机，无孔式超声波指纹识别，骁龙821旗舰处理器，全金属一体化机身',1899),
                                                     (NULL,'img/body-4.jpg','小米手机5','骁龙820处理器，最大可选4GB内存+128GB闪存，4轴防抖相机，3D陶瓷，玻璃机身',1599),
                                                     (NULL,'img/body-5.jpg','小米5s Plus','5.7“全高清大屏，1300万后置摄像头，骁龙821旗舰处理器，轻薄金属机身',2299),
                                                     (NULL,'img/body-6.jpg','小米Max','6.44”大屏黄金尺寸，看什么都震撼，4850mAh（typ）/4760Ah（min）长续航',1299),
                                                     (NULL,'img/body-7.jpg','红米Note4','elio x20 十核旗舰处理器，全金属一体化机身，4100mAh大电量，全网通',999),
                                                     (NULL,'img/body-8.jpg','红米手机3s','指纹识别，金属机身，4100Ah大电池，性能再升级',699),
                                                     (NULL,'img/body-9.jpg','红米Pro','后置双摄像头，Helio X25 / X20 十核旗舰处理器5.5英寸 OLED 超鲜艳屏幕，拉丝全金属机身',1099),
                                                     (NULL,'img/body-10.jpg','小米平板 2','轻薄全金属，图书视频游戏，应有尽有。',999);
 CREATE TABLE productPicture(
    pid INT PRIMARY KEY AUTO_INCREMENT,
    pic VARCHAR(30)
 );
 INSERT INTO productPicture VALUES(NULL,'img/body-protect.png'),
                                                            (NULL,'img/body-phone-card.jpg'),
                                                            (NULL,'img/phone-section-02.png'),
                                                            (NULL,'img/phone-section-04.jpg');
CREATE TABLE hardProduct(
    hid INT PRIMARY KEY AUTO_INCREMENT,
    pic VARCHAR(30),
    hName VARCHAR(30),
    title VARCHAR(50),
    price INT
);
INSERT INTO hardProduct VALUES(NULL,'img/hard-list-1.jpg','小米圈铁耳机','动圈+动铁，双发声单元',99),
                                                       (NULL,'img/hard-list-2.jpg','小米活塞耳机  基础版','新鲜绽放，5色可选',29),
                                                       (NULL,'img/hard-list-3.jpg','小米蓝牙耳机','6.5克轻巧，蓝牙4.1高清通话音质',79),
                                                       (NULL,'img/hard-list-4.jpg','小钢炮蓝牙音箱2','极简设计，生生动听的桌上艺术品',129),
                                                       (NULL,'img/hard-list-5.jpg','小米USB充电器（4口）','4个USB接口。2A快充，轻巧便携',69),
                                                       (NULL,'img/hard-list-6.jpg','小米移动电源10000mAh','高密度进口电芯，仅名片大小',69);
CREATE TABLE user(
    uid INT PRIMARY KEY AUTO_INCREMENT,
    uname VARCHAR(50),
    pwd VARCHAR(50)
);























