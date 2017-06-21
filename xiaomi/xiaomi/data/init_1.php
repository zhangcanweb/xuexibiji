<?php
$result=mysqli_query($conn,$sql);
$list=mysqli_fetch_all($result,1);
$str=json_encode($list);
echo $str;