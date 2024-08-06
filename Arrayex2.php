<?php
	$a=array(11,22,33,44,55,66);
	$b=[23,43.50,34,"IANT",3123];
	echo "<pre>";
	print_r($a);
	echo "</pre>for loop woith array:<br>";
		for($i=0;$i<5;$i++)
		{
			echo "[".$i."]=>".$b[$i]."<br>";
		}
		echo "<hr><pre>";
		var_dump($b);
		echo "</pre>";
?>