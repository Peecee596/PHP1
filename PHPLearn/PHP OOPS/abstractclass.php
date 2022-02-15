<?php
	abstract class A
	{
		protected $name;

		// protected function __construct($n)
		// {
		// 	echo "Name is:".$this->name=$n;
		// }
		abstract function calc($a,$b);
	}
	class B extends A
	{
		function calc($d,$b)
		{
			echo $d+$b;
		}

	}

	$test1=new B();
	echo $test1->calc(50,10);

?>