over riding method

<?php
	class baseclass
	{
		public $name;
		function calc($a,$b)
		{
			return $a*$b;
		}
	}
	class derived extends baseclass
	{
		function calc($a,$b)
		{
			return $a+$b;
		}
	}

	$test=new derived();
	echo $test->calc(10,5);
	echo "<br>";
	$test=new baseclass();
	echo $test->calc(10,5);

?>
<?php
class parentclass
{
	public $name="Parent Class";
}
class child extends parentclass
{
	public $name="Child class";
}

$test1=new parentclass();
echo $test1->name;

$test1=new child();
echo $test1->name;

?>