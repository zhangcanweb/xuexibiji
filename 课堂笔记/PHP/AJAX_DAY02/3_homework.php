<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
	<h3>九九乘法表</h3>
	<table width="100%" border="1">
		<tbody>
		<?php 
			for($i=1; $i<=9; $i++){
				echo '<tr>';
				for($j=1; $j<=$i; $j++){
					echo '<td>';
					echo $i.'*'.$j.'='.($i*$j);
					echo '</td>';
				}
				echo '</tr>';
			}
		?>
		</tbody>
	</table>
	</body>
</html>