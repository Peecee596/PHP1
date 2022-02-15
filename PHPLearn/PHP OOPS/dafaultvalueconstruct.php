<?php
class person
{
	public $name,$age;
	function __construct($n="No Name",$a=0)
	{
		$this->name=$n;
		$this->age=$a;
	}
	function show()
	{
		echo"My details:".$this->name.'-'.$this->age;
	}
}
$p1=new person();
$p1->show();
$p1=new person("Poonam",90);
$p1->show();

?>