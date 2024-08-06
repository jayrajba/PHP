<?php
	for($i=1;$i<=10;$i++)
		{
			if($i==5)
			{
				break;
			}
			echo$i."&nbsp&nbsp";
		}
echo"<hr>";
	for($i=1;$i<=10;$i++)
	{
		if($i==5)
		{
			continue;
		}
		echo $i."&nbsp&nbsp";
	}
	echo"<hr>";
		for($i=1;$i<=10;$i++)
		{
			if($i==5)
			{
				goto abc;
			}
			echo $i."&nbsp&nbsp";
		}
	echo"<h1>go to example </h1> ";
	abc:
	echo"loop exit";
?>