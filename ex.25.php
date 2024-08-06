<?php

$date=date_create("2013-03-15");
echo date_format($date,"d/m/y")."<br><hr>";
var_dump(checkdate(12,31,-400));
echo "<br>";
var_dump(checkdate(12,31,-400));
echo"<br>";
var_dump(checkdate(2,29,2004));

echo"<hr>";
$date1=date_create("2002-06-28");
$date2=date_create("2024-08-05");
$diff=date_diff($date,$date2);
echo$diff->format("%R%a days");

echo"<pre>";
	print_r($diff);
echo"</pre>";
?>