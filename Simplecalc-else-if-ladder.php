<?php
	$a=10;
	$b=5;
	$OP='*';
	if ($OP=='+')
	{
		echo "sum=" .$a+$b;
	}
	else if($OP=='-')
	{
		echo "sub=" .$a-$b;
	}
	else if($OP=='*')
	{
		echo "mul=" .$a*$b;
	}
	else if($OP=='/')
	{
		echo "div=" .$a/$b;
	}
	else
	{
		echo "Error";
	}
?>