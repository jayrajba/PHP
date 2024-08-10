<?php
	class parents
	{
		public $name="Khushi";
		protected $profile="Devloper";
		private $salary=50000;
		public function show()
		{
			echo "Welcome:".$this->name."<br/>";
			echo "profile:".$this->profile."<br/>";
			echo "salary:".$this->salary."<br/>";
		}
	}
	class child extends parents 
	{
		public function show1()
		{
			echo "Welcome:".$this->name."<br/>";
			echo "profile:".$this->profile."<br/>";
			echo "salary:".$this->salary."<br/>";
		}
	}
$obj=new child;
$obj->show();
?>