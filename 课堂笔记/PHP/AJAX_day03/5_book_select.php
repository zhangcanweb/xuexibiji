<?php
/**
查询出数据库中的所有书籍
**/

//连接数据库
$conn = mysqli_connect('127.0.0.1', 'root', '', 'dangdang', 3306);

//提交SQL命令
$sql = "SET NAMES UTF8";
mysqli_query($conn, $sql);

$sql = "SELECT * FROM book"; //DQL
$result = mysqli_query($conn, $sql);

//查看执行结果
if($result===false){
	echo "SELECT ERR: $sql";
}else {
	//从查询结果集中读取数据
	//var_dump($result);  //只是查询结果的描述对象
	
	/**从数据库中读取数据**/
	//一行一行的抓取
	//$row = mysqli_fetch_row($result);  //把一行记录返回为一个索引数组
	
	$row = mysqli_fetch_assoc($result);  //把一行记录返回为一个关联数组
	var_dump($row);
	$row = mysqli_fetch_assoc($result);  //把一行记录返回为一个关联数组
	var_dump($row);
	$row = mysqli_fetch_assoc($result);  //把一行记录返回为一个关联数组
	var_dump($row);
	$row = mysqli_fetch_assoc($result);  //把一行记录返回为一个关联数组
	var_dump($row);			//没有更多数据了，就返回null
	
}



