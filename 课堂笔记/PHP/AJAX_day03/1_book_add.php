<?php
/**
接收客户端提交的请求数据($_REQUEST[''])，执行INSERT，插入到数据库，返回SUCC/ERR
**/
//die() 终止当前页面的执行，可以输出一个错误消息
//@ 放在一行最前面，用于压制错误消息的输出
//strtotime()  把一个形如'yyyy-MM-dd'格式在日期时间转换为一个表示秒数整数值


//接收客户端提交的数据
//必需的数据
@$pic = $_REQUEST['pic']  or  die('pic required');
@$bname = $_REQUEST['bname']  or  die('bname required');
@$price = $_REQUEST['price']  or  die('price required');
@$pubDate = $_REQUEST['pubDate']  or  die('pubDate required');
$pubDate = strtotime($pubDate)*1000; 
//可选的数据
@$hasStock = $_REQUEST['hasStock'];
if($hasStock===null){
	$hasStock=1;  //为数据提供默认值
}


//连接数据库
$conn = mysqli_connect('127.0.0.1', 'root', '', 'dangdang', 3306);

//提交SQL命令
$sql = "SET NAMES UTF8";
mysqli_query($conn, $sql);

$sql = "INSERT INTO book VALUES(NULL,'$pic','$bname','$price','$pubDate','$hasStock')";
$result = mysqli_query($conn, $sql);

//查看执行结果
if($result===false){
	echo "INSERT ERR: $sql";
}else {
	echo "INSERT SUCC！<br>";
	echo "BOOK ID: ".  mysqli_insert_id($conn);
}

echo "<hr>";
echo "<a href='7_book_select.php'>查看所有书籍</a>";



