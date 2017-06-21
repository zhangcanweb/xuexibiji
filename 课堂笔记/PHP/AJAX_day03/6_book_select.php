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
	echo "<table width='100%' border='1'>";
	echo "  <thead><tr><th>编号</th><th>图片</th><th>书名</th><th>价格</th><th>日期</th><th>是否有库存</th><th>操作</th></tr></thead>";
	echo "  <tbody>";

	while(true){
		$row = mysqli_fetch_assoc($result);
		if($row===null){		//没有更多数据
			break;
		}else {							//有更多数据
			echo "<tr>";
			echo "  <td>$row[bid]</td>";
			echo "  <td>$row[pic]</td>";
			echo "  <td>$row[bname]</td>";
			echo "  <td>$row[price]</td>";
			echo "  <td>$row[pubDate]</td>";
			echo "  <td>$row[hasStock]</td>";
			echo "  <td>删除 修改</td>";
			echo "</tr>";
		}

	}
	echo "  </tbody>";
	echo "</table>";
	
}



