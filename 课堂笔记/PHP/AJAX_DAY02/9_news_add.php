<?php

$title = '新闻标题109';
$content = '新闻内容109';
$isOnTop = 1;
$pubTime = time()*1000;  //当前服务器端系统时间
$viewCount = 0;  //新加的新闻浏览次数为0

//1连接到MySQL服务器
$conn = mysqli_connect('127.0.0.1', 'root', '', 'ifeng', 3306);

//2提交SQL命令给MySQL服务器
$sql = "SET NAMES UTF8";
mysqli_query($conn,$sql);  //设置后面的SQL语句的编码方式


$sql = "INSERT INTO news VALUES(NULL,'$title','$content','$isOnTop','$pubTime','$viewCount')";
$result = mysqli_query($conn,$sql);  //把SQL语句提交给指定的数据库连接

//如果是增删改语句，执行失败了返回false，执行成功返回true；
//如果是查询语句，执行失败了返回false，执行成功返回查询得到的结果集

//3查看执行结果
if($result===true){
	echo 'INSERT SUCC!<br>';
	echo 'News ID: '. mysqli_insert_id($conn); //获取刚刚执行的INSERT语句产生的自增编号
}else {
	echo 'INSERT ERR: '.$sql;			  
}


//4关闭数据库连接(可选)
mysqli_close($conn);
