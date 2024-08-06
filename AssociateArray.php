<?php
	$age = array("Raj"=>26,"Meet"=>32,"Amit"=>23 );
	echo "Raj:".$age["Raj"]."<br>";
	echo "Meet:".$age["Meet"]."<br>";
	echo "Amit:".$age["Amit"]."<hr>";

	foreach ($age as $key=>$value)
	{
		echo $key."=>".$value."<br>";
	}
?>