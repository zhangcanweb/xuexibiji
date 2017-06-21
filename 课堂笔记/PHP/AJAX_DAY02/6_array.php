<?php
/*使用PHP创建一个数组，保存５个员工的信息（ename / sex / salary / birthday / pic），把这五个员工数据输出在一个TABLE中*/

$empList = [
	['ename'=>'Tom','sex'=>'男','salary'=>5000,'birthday'=>123434343323, 'pic'=>'img/1.jpg'],
	['ename'=>'Mary','sex'=>'女','salary'=>6000,'birthday'=>133534343323, 'pic'=>'img/2.jpg'],
	['ename'=>'John','sex'=>'男','salary'=>7000,'birthday'=>1543734343323, 'pic'=>'img/3.jpg']
];

//向数组中添加新元素
$empList[3] = ['ename'=>'King','sex'=>'男','salary'=>9000,'birthday'=>13734343323, 'pic'=>'img/4.jpg'];
$empList[count($empList)] = ['ename'=>'Scott','sex'=>'男','salary'=>9000,'birthday'=>13734343323, 'pic'=>'img/4.jpg'];
$empList[] = ['ename'=>'Smith5','sex'=>'男','salary'=>9000,'birthday'=>13734343323, 'pic'=>'img/4.jpg'];
$empList[] = ['ename'=>'Smith6','sex'=>'男','salary'=>9000,'birthday'=>13734343323, 'pic'=>'img/4.jpg'];
$empList[] = ['ename'=>'Smith7','sex'=>'男','salary'=>9000,'birthday'=>13734343323, 'pic'=>'img/4.jpg'];
$empList[] = ['ename'=>'Smith8','sex'=>'男','salary'=>9000,'birthday'=>13734343323, 'pic'=>'img/4.jpg'];

//echo $empList;
//var_dump($empList);
?>

<table width="100%" border="1">
  <tbody>
	<?php
	for($i=0; $i<count($empList); $i++){
		$e = $empList[$i];
		echo "<tr>";
		//echo $e['ename'];
		echo "	<td>$e[ename]</td>";
		echo "	<td>$e[sex]</td>";
		echo "	<td>$$e[salary]</td>";
		echo "	<td>$e[birthday]</td>";
		echo "	<td><img src='$e[pic]'></td>";
		echo "</tr>";
	}
	?>
	</tbody>
</table>
<script>
	var td3List = document.querySelectorAll('td:nth-child(4)');
	for(var i=0; i<td3List.length; i++){
		var td = td3List[i];
		var num = parseInt(td.innerHTML);
		var d = new Date(num);
		td.innerHTML = d.getFullYear()+'-'+(d.getMonth()+1)+'-'+d.getDate();
	}
</script>