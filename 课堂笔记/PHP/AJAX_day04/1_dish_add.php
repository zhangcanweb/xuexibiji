<?php
/*
接收客户端提交的dname, pic, author，插入到数据库中，返回SUCC/ERR
*/
@$dname = $_REQUEST['dname'] or die('DNAME REQUIRED');
@$pic = $_REQUEST['pic'] or die('PIC REQUIRED');
@$author = $_REQUEST['author'] or die('AUTHOR REQUIRED');
$pubTime = time()*1000;  //当前服务器端系统时间

//包含初始化页面——服务器端页面包含
require('0_init.php');

$sql = "INSERT INTO dish VALUES(NULL,'$dname','$pic','$author','$pubTime')";
$result = mysqli_query($conn,$sql);
//查看执行结果：false或者true
if($result===false){
	echo "INSERT ERR: $sql";
}else {
	echo "INSERT SUCC！";
	echo "Dish ID: ".mysqli_insert_id($conn);
}

echo '<hr>';
echo '<a href="3_dish_select.php">查看所有菜谱</a>';