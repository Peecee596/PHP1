<?php
class person//class
{
	public $name,$age;//properties+acces modifier

	function __construct($n,$a)	
	{
		$this->name=$n;
		$this->age=$a;
	}
	function show()
	{
		echo "Your details:".$this->name.'-'.$this->age;
	}
}
$p1=new person("Yahoo Baba",20);
$p1->show();


?>