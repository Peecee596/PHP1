<?php
	//class
	class calculation
	{
		//access modifier
		public $a=20;
		public $b=40;	
		public $c;
		function sum()//method 1
		{
			$this->c=$this->a+$this->b;
			return $this->c;
		}
		function sub()//method 2
		{
			$this->c=$this->a-$this->b;
			return $this->c;
		}

	}
	$c5=new calculation();
	echo $c5->sum();
	echo"<br>";

	$c1=new calculation();//object1
	$c1->a=20;
	$c1->b=30;
	echo $c1->sum();//1
	echo"<br>";
	echo $c1->sub();//2
	echo"<br>";
	$c2=new calculation();//object2
	$c1->a=30;
	$c2->b=40;
	echo $c2->sub();//3
	echo"<br>";
	$c3=new calculation();//object3
	$c3->a=20;
	$c3->b=67;
	echo $c3->sub();//4
	echo"<br>";
	echo $c3->sum();//5
	echo"<br>";

?>