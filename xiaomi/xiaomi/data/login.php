<?php
header('Content-Type:application/json;charset=UTF-8');
@$uname=$_REQUEST['uname'] or die('uname request');
@$pwd=$_REQUEST['pwd'] or die('pwd request');
require('init.php');
$sql="SELECT uid FROM user WHERE uname='$uname' AND pwd='$pwd'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_row($result);
if($row===null){
    echo '{"msg":"err"}';
}else{
    echo '{"msg":"succ"}';
}