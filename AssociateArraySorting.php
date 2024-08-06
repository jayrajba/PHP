<?php
	$a=array("Meet"=>23,"Chirag"=>30,"Amit"=>25);
	echo "<pre>";
	print_r($a);
	echo "asort()-sort associative arrays in ascending order,according to the value";
	asort($a);
	print_r($a);
	echo "asort()-sort associative arrays in ascending order,according to the value" ;
	arsort ($a);
	print_r($a);
	echo "</pre>";

?>
