<?php
/**
接收客户端提交的修改后的书籍信息，执行UPDATE，更新到数据库，返回SUCC/ERR
**/


//接收客户端提交的数据
@$bid = $_REQUEST['bid']  or  die('bid required');
@$pic = $_REQUEST['pic']  or  die('pic required');
@$bname = $_REQUEST['bname']  or  die('bname required');
@$price = $_REQUEST['price']  or  die('price required');
@$pubDate = $_REQUEST['pubDate']  or  die('pubDate required');
@$hasStock = $_REQUEST['hasStock'];
if($hasStock===null){
	die('hasStock required');
}


//连接数据库
$conn = mysqli_connect('127.0.0.1', 'root', '', 'dangdang', 3306);

//提交SQL命令
$sql = "SET NAMES UTF8";
mysqli_query($conn, $sql);

$sql = "UPDATE book SET pic='$pic',bname='$bname',price='$price',pubDate='$pubDate',hasStock='$hasStock'  WHERE bid='$bid'";
$result = mysqli_query($conn, $sql);

//查看执行结果
if($result===false){
	echo "UPDATE ERR: $sql";	
}else {
	echo "UPDATE SUCC！<br>";
	echo "Affected Rows: ". mysqli_affected_rows($conn);
}

echo "<hr>";
echo "<a href='7_book_select.php'>查看所有书籍</a>";



