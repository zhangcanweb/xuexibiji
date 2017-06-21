<?php
/**查询出所有的菜谱**/
require('0_init.php');

$sql = "SELECT * FROM dish";
$result = mysqli_query($conn,$sql);

//一次性的抓取查询到的所有的记录行  PHP>=5.4
$list = mysqli_fetch_all($result, MYSQLI_ASSOC);
//var_dump($list);  [[],[],[],[],[],[]]
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<style>
			.dish {
				border: 1px solid #aaa;
				border-radius: 3px;
				padding: 5px;
				margin: 5px;
				float: left;
				width: 300px;
				text-align: center;
				position: relative;
			}
			.dish img {
				width: 288px;
				width: 260px;
			}
			.dish .close {
				position: absolute;
				right: 25px;
				top: 5px;
				font-size: 2em;
				font-weight: bold;
				background: rgba(255,255,255,.8);
				padding: 5px;
				border-radius: 50%;
			}
			.dish a {
				text-decoration: none;
				color: #333;
			}
		</style>
	</head>
	<body>
<!--  -->
<!-- 	<div class="dish"> -->
<!-- 		<a class="close" href="#">&times;</a> -->
<!-- 		<img src="img/1.jpg"> -->
<!-- 		<h4>菜谱名称1</h4> -->
<!-- 		<p>作者1</p> -->
<!-- 	</div> -->
<!-- 	 -->
	<h3>菜谱列表</h3>
	<?php
	foreach($list as $dish){
		echo "<div class='dish'>";
		echo "  <a class='close' href='$dish[did]'>&times;</a>";
		echo "  <img src='$dish[pic]'>";
		echo "  <h4>$dish[dname]</h4>";
		echo "  <p>$dish[author]<p>";
		echo "</div>";
	}
	?>
	<script>
	var linkList = document.querySelectorAll('.close');
	for(var i=0; i<linkList.length; i++){
		var link = linkList[i];
		link.onclick =function(e){
			e.preventDefault();	//阻止超链接的页面跳转
			var choice = confirm('您确定要删除吗？此操作不可恢复！');
			if(choice ){	//用户选择了确定删除，跳转到删除页面
				//var did = this.href; //HTMLDOM
				var did = this.getAttribute('href'); //核心DOM
				location.href="4_dish_delete.php?did="+did;
			}
		}					
	}
	</script>
	</body>
</html>