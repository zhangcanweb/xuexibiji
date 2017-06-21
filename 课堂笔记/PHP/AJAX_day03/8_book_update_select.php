<?php
/**根据客户端提交书籍编号查询书籍信息**/
@$bid = $_REQUEST['bid'] or die('BID REQUIRED');

$conn = mysqli_connect('127.0.0.1', 'root', '', 'dangdang', 3306);

$sql = "SET NAMES UTF8";
mysqli_query($conn,$sql);
$sql = "SELECT * FROM book WHERE bid='$bid'";
$result = mysqli_query($conn,$sql);
if($result===false){
	echo "SELECT ERR: $sql";
}else {
	//从查询结果集中抓取数据行
	//根据编号查询，至多只有一行记录，无需循环抓取
	$book = mysqli_fetch_assoc($result);
}
?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
	<h3>修改书籍信息</h3>
	
	<form action="9_book_update.php">
		<input type="hidden" name="bid" value="<?php echo $book['bid']?>">			

		书籍图片: <input name="pic" value="<?php echo $book['pic']; ?>"><br>
		书籍名称: <input name="bname" value="<?php echo $book['bname'];?>"><br>
		书籍价格: <input name="price" value="<?php echo $book['price'];?>"><br>
		出版日期: <input name="pubDate" value="<?php echo $book['pubDate'];?>"><br>
		是否有货: <input name="hasStock" value="<?php echo $book['hasStock'];?>"><br>
		<input type="submit" value="保存书籍信息">
	</form>
	</body>
</html>