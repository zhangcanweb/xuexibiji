<?php 

/**如何遍历数组**/
//索引数组
$arr = [10,30,50];
/*
for($i=0; $i<count($arr); $i++){
	echo "$arr[$i]<br>";
}
*/
foreach($arr as $i=>$n){
	echo "$i-$n <br>";
}

echo '<hr>';

//关联数组
$arr = ['ename'=>'Tom','age'=>20,'salary'=>5000];
//echo $arr['ename'];
//echo count($arr);   //3
//echo $arr[1];  没有下标1！！
/*
foreach($arr  as  $v){    //遍历每一个值
	echo "$v<br>";
}
*/
foreach($arr as  $k=>$v){
	echo "$k-$v<br>";
}



