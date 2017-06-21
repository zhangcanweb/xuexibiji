<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<h1>我的一个动态网页</h1>
		<?php  
		for($i=0; $i<10; $i++){
			$msg = 'hello';
			echo($i.$msg.'<br>');  //PHP中.表字符串拼接
			echo('<hr>');
		}	
		?>
	</body>
</html>