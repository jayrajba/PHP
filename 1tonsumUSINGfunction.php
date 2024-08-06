<?php
	function alldigitalsum($n)
	{
		$sum=0;
		for($i=1;$i<=$n;$i++)
		{
			$sum=$sum+$i;
		}
		echo "sum=".$sum;
	}
	alldigitalsum(10);
?>