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

	while(($row=mysqli_fetch_assoc($result))!==null){
		echo "<tr>";
		echo "  <td>$row[bid]</td>";
		echo "  <td>$row[pic]</td>";
		echo "  <td>$row[bname]</td>";
		echo "  <td>$row[price]</td>";
		echo "  <td>$row[pubDate]</td>";
		echo "  <td>$row[hasStock]</td>";
		echo "  <td>";
		echo "		<a href='3_book_delete.php?bid=$row[bid]'>删除</a>";
		echo "		<a href='8_book_update_select.php?bid=$row[bid]'>修改</a>";
		echo "	</td>";
		echo "</tr>";

	}
	echo "  </tbody>";
	echo "</table>";
	
}

echo "<hr>";
echo "<a href='0_index.html'>返回首页</a>";

