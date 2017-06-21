<?php
$nid = $_REQUEST['nid'];  //读取一个请求数据

//1连接到MySQL服务器
$conn = mysqli_connect('127.0.0.1', 'root', '', 'ifeng', 3306);

//2提交SQL命令给MySQL服务器
$sql = "SET NAMES UTF8";
mysqli_query($conn,$sql);  

$sql = "DELETE FROM news WHERE nid=$nid";
$result = mysqli_query($conn,$sql);  

//3查看执行结果
if($result===true){
	echo 'DELETE SUCC!<br>';
}else {
	echo 'DELETE ERR: '.$sql;			  
}

