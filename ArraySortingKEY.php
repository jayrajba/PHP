<?php
	$a=array("Meet"=>23,"Chirag"=>30,"Amit"=>25);
	echo"<pre>";
	print_r($a);
	echo "ksort()-sort associative arrays in ascending order,according to the key";
	ksort($a);
	print_r($a);
	echo "krsort()-sort associative arrays in descending order,according to the key";
	krsort($a);
	print_r($a);
	echo"</pre>"
?>