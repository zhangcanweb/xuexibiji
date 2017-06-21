<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<style>
		.product {
			border: 1px solid #aaa;
			padding: 10px;
			border-radius: 4px;
			margin-bottom: 10px;
		}
		.product:after {
			content: ' ';
			display: table;
			clear: both;
		}
		.product > img ,
		.product > div {
			float: left;
		}

		</style>
	</head>
	<body>

	<?php
	$productList = [
		['pid'=>101,'pname'=>'世界名画-1','price'=>666666, 'pic'=>'img/1.jpg'],
		['pid'=>102,'pname'=>'世界名画-2','price'=>777777, 'pic'=>'img/2.jpg']
	];
	$productList[] = ['pid'=>103,'pname'=>'世界名画-3','price'=>888888, 'pic'=>'img/3.jpg'];
	$productList[] = ['pid'=>104,'pname'=>'世界名画-4','price'=>999999, 'pic'=>'img/4.jpg'];

	foreach($productList as $p){
		echo "<div class='product'>";
		echo "	<img src='$p[pic]'>";
		echo "  <div>";
		echo "	  <h3>$p[pname]</h3>";
		echo "	  <p>价格：￥$p[price]</p>";
		echo "  </div>";
		echo "</div>";
	}
	?>
	</body>
</html>