<?php
	echo "Hello Everyone";
?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
</head>
<body>
<?php

	echo"Hello";
	echo"Yahoo Baba";
	echo "<b>Yahoo"."Baba</b>";
	echo "Yahoo","Baba";
	echo 50+25;
	echo 50.25."<br>";

	define("abc",500);
	echo abc."<br>";
	echo abc+50;


?>
</body>
</html>


<br>

<?php
$weekday=25;
switch ($weekday)
{
	case 1:echo"Today is Monday";
	break;
	case 2:echo"Tues";
	break;
	case 3: echo"Wed";
	break;
	default:echo"Enter the correct week";
	break;
}

?>


<?php
$x=10;
$z="Value is:".(($x>10)?"Greater":"Smaller") ;
echo $z;


$a="HI";
$a.="Hello".$a;
echo $a."<br>";


$p=5;
while($p>=1)
{
	echo $p;
	$p--;
	echo "<br>";
}

$t=1;
do{
	echo"Hello <br>";
	$t++;
}
while($t<=10)

?>


<?php

for($i=1;$i<=10;$i++)
{
	echo $i ."<br>";
}

echo"<br>";
?>



<?php

for($i=1;$i<=100;$i+=10)//Column-Prints same
{
	for($j=$i;$j<$i+10;$j++)//Row-Prints Different

	{

		echo $j." ";
	}
	echo"<br>";
}
?>
<br>
<?php

for($i=1;$i<=100;$i+=10)
{
	for($j=$i;$j<$i+10;$j++)
	{
		echo $j." ";
	}
	echo "<br>";
}

?>
<br>
<?php

for($i=1;$i<=10;$i++)
{
	if($i==3)
	{
		//echo"Yes, this is 3 <br>";
		continue;
		//break;
	}
	echo $i."<br>";
}
?>

<br>
<?php
for($i=1;$i<=10;$i++)
{
	if($i==4)
	{
		 goto abc;
		// xyz:
// echo"Hello PHP";
// echo 2+2;
// echo"<br>";
	}
	echo $i."<br>";
	
}
abc:
echo"Hello PHP";
echo 2+2 ."<br>";
?>

<?php

function ABC()
{
	echo"hi hello wonderful";
}
ABC();
ABC();
echo"<br>";
?>

<?php

function sum($a,$b)//functions with arguments
{
	echo $a+$b ."<br>";
}
sum(10,20);
sum(200,200)
?>

<?php
function dam($name)
{
	echo"hello" .$name."its is good <br>";
}
dam("Hi");
dam("Poonam");

?>

<!-- cal per of 3 subject with return values -->
<?php

function add($E,$M,$S)
{
	$a=$E+$M+$S;
	return $a;
}

function percentage($st)
{
	$per=$st/3;
	echo $per;
}

$total=add(50,60,75);

percentage($total);

?>

<?php

function addi($E,$M,$Z,$X)
{
	$h=$E+$M+$Z+$X;
	return $h;
}

$total1=addi(56,67,89,67);

function percentage1($ty)
{
	$perc=$ty/4;
	echo $perc;
}
percentage1($total1);


?>


<?php
function wow($a)
{
	echo "hi";
}



?>












































