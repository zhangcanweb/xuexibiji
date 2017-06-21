<?php
/*
此页面不应该被客户端直接请求，
应该被其它的PHP页面包含进去
*/
$conn = mysqli_connect('127.0.0.1', 'root', '', 'meishichina', 3306);

$sql = "SET NAMES UTF8";
mysqli_query($conn,$sql);