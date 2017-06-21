<?php
//修改响应消息头
header('Cache-Control: no-cache');  
header('Content-Type: image/png');  

/**
使用php向客户端输出验证码图片
提示：下面的新函数仅做了解
**/
$w = 100;		//图片的宽
$h = 30;		//图片的高
$img = imagecreatetruecolor($w, $h); //在服务器的内存中创建一副图片
$c = imagecolorallocate($img,rand(150,230),rand(150,230),rand(150,230));//创建一个颜色
imagefilledrectangle($img, 0,0, $w, $h, $c);//在图片上绘制一个矩形

///绘制五个随机的文字
$src = "ABCEFGHJKMNPQRSTWXY3456789";
for( $i=0; $i<5; $i++){
	$s = $src[rand(0,strlen($src)-1)]; //获取一个随机字符
	$c = imagecolorallocate($img,rand(50,150),rand(50,150),rand(50,150));//创建一个颜色
	imagettftext($img, rand(10,30), rand(-45,45), 20*$i+5, rand(10,30), $c, 'arial.ttf', $s);//在图片上绘制一个文字
}

imagepng($img); //以PNG格式将服务器内存里的图片输出给客户端
imagedestroy($img); //在服务器内存里销毁该图片



