<?php
/**
接收客户端提交的书籍编号bid，执行DELETE，从数据库中删除指定的书籍，返回SUCC/ERR
**/

//接收客户端提交的数据
@$bid = $_REQUEST['bid'] or die('BID REQUIRED');


//连接数据库
$conn = mysqli_connect('127.0.0.1', 'root', '', 'dangdang', 3306);

//提交SQL命令
$sql = "SET NAMES UTF8";
mysqli_query($conn, $sql);

$sql = "DELETE FROM book WHERE bid='$bid'";
$result = mysqli_query($conn, $sql);

//查看执行结果
if($result===false){
	echo "DELETE ERR: $sql";
}else {
	echo "DELETE SUCC！<br>";
	echo "Affected Rows: ".  mysqli_affected_rows($conn); //返回刚刚执行的DML语句影响的行数
}


echo "<hr>";
echo "<a href='7_book_select.php'>查看所有书籍</a>";
