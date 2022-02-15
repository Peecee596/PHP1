<?php
class calculation{//class
	public $a,$b,$c;//properties

	function sum()//methods
	{
		$this->c=$this->a+$this->b;
		return $this->c;
	}
	function sub()//methods
	{
		$this->c=$this->a-$this->b;
		return $this->c;
	}
}
	$c1=new calculation();//object
	$c1->a=20;
	$c1->b=10;

	echo "sum:".$c1->sum()."<br>";
	echo"sub:".$c1->sub()."<br>";

	$c2=new calculation();
	$c2->a=30;
	$c2->b=40;
	echo"sum:".$c2->sum()."<br>";
	echo "sub:".$c2->sub()."<br>";

	$c3=new calculation();
	$c3->a=60;
	$c3->b=80;
	echo "sum:".$c3->sum()."<br>";
	echo "sum:".$c3->sub()."<br>";



?>