<?php
	$age=[11,22,33,44,55,66,77,88,99];
	echo "foreach loop <br>";
	foreach( $age as $value)
	{
		echo $value." &nbsp&nbsp&nbsp";
	}
	echo "<hr> for loop <br>";

	for($i=0;$i<9;$i++)
	{
		echo $age[$i]."&nbsp&nbsp";
	}
?>