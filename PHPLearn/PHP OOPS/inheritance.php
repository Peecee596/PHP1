<?php

class employee{
	public $name;
	public $age;
	public $salary;
	function __construct($n,$a,$s)
	{
		$this->name=$n;
		$this->age=$a;
		$this->salary=$s;
	}
	function info()
	{
		echo"<h3>Employee Profile</h3>";
		echo"Employee name:". $this->name ."<br>";
		echo"Employee age:".$this->age."<br>";
		echo"Employee salary:".$this->salary."<br>";

	}
}
class manager extends employee
{
	public $ta=1000;
	public $pe=300;
	public $totalsalary;
	function info()
	{
		$this->totalsalary=$this->salary+$this->ta+$this->pe;
		echo"<h3>Manager Profile</h3>";
		echo"Employee name:". $this->name ."<br>";
		echo"Employee age:".$this->age."<br>";
		echo"Employee salary:".$this->salary."<br>";
		echo"Employee totalsalary:".$this->totalsalary."<br>";

	}
}

class seniormanager extends manager
{
	public $misexp=1000;
	public $fuel=300;
	public $ctc;
	function info()
	{
		$this->CTC=$this->salary+$this->ta+$this->pe+$this->misexp+$this->fuel;
		echo"<h3>Senior Manager Profile</h3>";
		echo"Employee name:". $this->name ."<br>";
		echo"Employee age:".$this->age."<br>";
		echo"Employee salary:".$this->salary."<br>";
		echo"Employee totalsalary:".$this->totalsalary."<br>";
		echo"Employee CTC:".$this->ctc."<br>";

	}
}
$e1=new employee("Ram",20,2500);
$e1->info();
$e2=new manager("krishna",40,3457);
$e2->info();
$e3=new seniormanager("Shyam",56,2000);
$e3->info();





?>