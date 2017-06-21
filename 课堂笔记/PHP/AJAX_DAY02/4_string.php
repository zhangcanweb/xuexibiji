<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
	<h3>PHP中的string</h3>
	<?php
	$ename = 'Tom';
	$sex = "Male";
	echo $ename;
	echo $sex;
	?>
	
	<hr>
	<?php
	//$str = $ename.$sex;
	$str = $ename+$sex;		#PHP中的+只用于数字相加
	echo $str;
	?>
	<hr>

	<?php
	//$info = '姓名：'.$ename.' 性别：'.$sex;
	//$info = '姓名：$ename 性别：$sex';
	//$info = "姓名：$ename 性别：$sex";  #双引号字符串
	$info = "姓名：$ename 性别：$sex";  #双引号字符串
	echo $info;
	?>
	</body>
</html>