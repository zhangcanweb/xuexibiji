<?php
header('Content-Type:application/json;charset=UTF-8');
@$uname=$_REQUEST['name'] or die('name request');
@$pwd=$_REQUEST['upwd'] or die('pwd request');
require('init.php');
$sql="INSERT INTO user VALUES(NULL,'$uname','$pwd')";
$result=mysqli_query($conn,$sql);
if($result===true){
    echo '{"msg":"SUCC"}';
}else{
    echo '{"msg":"ERR"}';
}