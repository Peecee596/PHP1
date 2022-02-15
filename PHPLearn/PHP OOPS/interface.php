<?php
	interface parent1
	{
		function calc($a,$b);
	}
	interface parent2
	{
		function sub($c,$d);
	}
	class childclass implements parent1,parent2
	{
		public function calc($p,$q)
		{
			echo $p+$q;
		}
		public function sub($z,$g)
		{
			echo $z-$g;
		}

	}
	$test=new childclass();
	$test->calc(40,60);

	$test->sub(100,60);




?>