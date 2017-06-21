<?php

/**索引数组**/
$arr = [10,30,50,70];
/*
$arr = 10;
$arr = '10';
$arr = true;
$arr = TRUE;
$arr = null;
$arr = NULL;
*/
//echo $arr;   #Array to string conversion
//var_dump($arr);		//查看一个变量的类型和值

for($i=0; $i<count($arr); $i++){
	echo "$arr[$i]<br>";
}
?>

<hr>

<?php 
/**关联数组：下标是字符串  k=>v **/
$arr = ['ename'=>'Tom', "age"=>20, 'isMarried'=>true];

echo '姓名:'.$arr['ename'];
echo '年龄:'.$arr['age'];

echo "姓名：$arr[ename]";  #双引号中的下标不用单引号
?>