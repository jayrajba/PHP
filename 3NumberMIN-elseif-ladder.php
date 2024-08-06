<?php
	$x=30;
	$y=50;
	$z=60;

	if($x<$y && $x<$z)
	{
		echo "Min:".$x;
	}
	else if ($y<$z)
	{
		echo "Min:".$y;
	}
	else
	{
		echo "Min:".$z;
	}
?>