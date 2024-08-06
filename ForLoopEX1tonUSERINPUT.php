<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewpoint"content="width=device=width.initial-scale=1">
	<title>example</title>
<head>
<body>
</head>
<body>
<form action="ForLoopEX1tonUSERINPUT.php"method="get">
	<table>
		<tr>
			<th>Enter any No</th>
			<th><input type="text"name="no1"/></td>
			</tr>
			<tr>
				<th><input type="submit" name="submit" value="submit"/></th>
				<td><input type="Reset" name="Reset" value="RESET"/></td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php
	if($_GET['submit'])
	{

		$n=$_GET['no1'];
		for($i=1;$i<=$n;$i++)
		{
			echo $i."&nbsp&nbsp";
		}
	}
?>