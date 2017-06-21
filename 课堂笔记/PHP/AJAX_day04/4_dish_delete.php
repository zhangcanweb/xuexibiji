<?php
/*
接收客户端提交的did，执行删除，返回SUCC/ERR
*/
@$did = $_REQUEST['did'] or die('DID REQUIRED');

//包含初始化页面——服务器端页面包含
require('0_init.php');

$sql = "DELETE FROM dish WHERE did='$did'";
$result = mysqli_query($conn,$sql);
//查看执行结果：false或者true
if($result===false){
	echo "DELETE ERR: $sql";
}else {
	echo "DELETE SUCC！<br>";
	echo "Affected Rows: " . mysqli_affected_rows($conn);
}

echo '<hr>';
echo '<a href="3_dish_select.php">查看所有菜谱</a>';