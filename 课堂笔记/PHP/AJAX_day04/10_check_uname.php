<?php
/**
验证客户端提交的用户名是否存在
**/
header('Content-Type: text/plain');

@$uname = $_REQUEST['uname'] or die('UNAME REQUIRED');

$conn = mysqli_connect('127.0.0.1', 'root', '', 'sohu', 3306);

$sql = "SET NAMES UTF8";
mysqli_query($conn,$sql);

$sql = "SELECT * FROM users WHERE uname='$uname'";
$result = mysqli_query($conn,$sql);
if($result===false){
	echo "SQL ERR: $sql";
}else {	//SQL语句语法正确
	//抓取一行，看有没有记录
	$row = mysqli_fetch_assoc($result);
	if($row===null){	//没有任何记录
		echo 'bucunzai';
	}else {
		echo 'cunzai';
	}
}