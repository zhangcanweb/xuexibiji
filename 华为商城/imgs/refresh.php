<?php
 
session_start();
function random($len) {
    $srcstr = "1a2s3d4f5g6hj8k9qwertyupzxcvbnm";
    mt_srand();
    $strs = "";
    for ($i = 0; $i < $len; $i++) {
        $strs .= $srcstr[mt_rand(0, 30)];
    }
    return $strs;
}
 
//随机生成的字符串
$str = random(4); 
 
//验证码图片的宽度
$width  = 50;      
 
//验证码图片的高度
$height = 20;
 
//声明需要创建的图层的图片格式
@ header("Content-Type:image/png");
 
//创建一个图层
$im = imagecreate($width, $height);
 
//背景色
$back = imagecolorallocate($im, rand(150,255), rand(150,255), rand(150,255));
//字体色
$font = imagecolorallocate($im, rand(0,180), rand(0,180), rand(0,180));
//输出字符
imagestring($im, 5, 7, 2.5, $str, $font);
 
//输出矩形
imagerectangle($im, 0, 0, $width -1, $height -1, $font);
 
//输出图片
imagepng($im);
 
imagedestroy($im);
 
$str = md5($str);
 
//选择 Session
$_SESSION["verification"] = $str;
?>