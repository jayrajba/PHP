<?php
class demo
{
	function __constructor()
	{
		echo "object os initializing their properties"."<br/>";
	}
	function work()
	{
		echo "Now work is going","<br/>";
	}
	function __destruct()
	{
		echo" After completion the work,object destroyed automatically";
	}
}
$obj=new demo();
$obj->work();
echo is_object($obj);
?>