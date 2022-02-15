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

<?php
function testing(&$string)

{
	$string.="hello";
}
$str="This is a string";
testing($str);
echo $str;

?>


<?php

function first ($num)
{
	$num+=5;
}
function second(&$num)
{
	$num+=10;
}
$num=10;
first($num);

echo "Orginal value is $num <br>";
second($num);
echo "Value is $num <br>";

?>

<?php
function wowwow($name)
{
	echo $name."Hello";
}
$func="wowwow";
$func("Yahhoo Baba");

?>

<?php

$sayHello=function($name)
{
	echo "hello $name <br>";
};
$sayHello("Yahoo Baba");


?>


<?php

$colors=["red","pink","yellow","orange"];
echo "<ul>";
for($i=0;$i<=3;$i++) 
{
	echo "<li> $colors[$i]<br> </li>";
}
echo "</ul>";
echo "<pre>";
print_r($colors);
echo"</pre>";




?>


<?php

$colors=["red","pink","yellow"];
foreach($colors as $value)
{
	echo $value ."<br>";
}
?>

<?php
$age=["bill"=>25,"steve"=>28,"elon"=>45];
echo "<ul>";
foreach($age as $key=>$value)
{
	echo "<li> $key=$value </li><br> ";
}
echo "</ul>";

?>
<?php

$emp=
[
["1","Krishna","Manager",5000],
["2","Salman","SalesManager",6000],
["3","Mohan","Computer Operator",7000],
["4","Amir","Driver",5000]
];
echo "<table border='2px' cellpadding='5px' cellspacing ='0px'>";

echo"<tr>
	
<th>EMP ID</th>
<th>NAME</th>
<th>DESIGNATION</th>
<th>SALARY</th>
</tr>";
foreach($emp as $value1)
{
	echo"<tr>";
	foreach($value1 as $value2)
	{
		echo"<td> $value2 </td>";
	}
	echo"</tr>";
}

echo"</table>";




for($i=0;$i<=3;$i++)
{
	for ($j=0;$j<=3;$j++)
	{
		echo $emp[$i][$j] ." ";
	}
	echo "<br>";
}
echo "<br>";
echo $emp[1][2];
echo "<pre>";
print_r($emp);
echo"</pre>";
?>



<?php
$marks=
[
		"Kia"=>[
				"Phy"=>67,
				"Chem"=>89,
				"Math"=>89
				],
		"Sia"=>[
				"Phy"=>78,
				"Chem"=>67,
				"Math"=>78
				],
		"Pia"=>[
				"Phy"=>62,
				"Chem"=>89,
				"Math"=>98
				]
];
echo"<table border ='2px' cellpadding='2px' cellspacing='0px'>";
echo "<tr>
	<th>Name</th>
	<th>Phy</th>
	<th>Chem</th>
	<th>Math</th>
	</tr>";

foreach($marks as $key=>$val1)
{
	echo "<tr>";
	echo "<td> $key </td>";
	foreach($val1 as $val2)
	{
		echo "<td> $val2 </td>";
	}
	echo"</tr>";
}


echo"</table>";

?>

<?php

$employee=
[
	[1,"A","X",50000],
	[2,"B","Y",20000],
	[3,"C","Z",70000]
];
echo "<table border='1px' cellspacing='0px' cellpadding='2px'>";

echo"<tr>
		<th>Emp ID</th>
		<th>Emp Name</th>
		<th>Emp Designation</th>
		<th>Emp Salary</th>
	</tr>";
foreach($employee as list($p,$r,$s,$t))
{
	
	echo "	
	<tr>
			<td align='center'>$p</td>
			<td align='center'>$r</td>
			<td align='center'>$s</td>
			<td align='center'>$t</td>
	</tr>";
}
echo "</table"
?>
<br/>

<?php
$employees=
[
	//
		[
			"Emp No"=>1,
			"Name"=>"Poonam",
			"Designation"=>"OM",
			"Salary"=>40000
		],
	//"J"=>
		[
			"Emp No"=>2,
			"Name"=>"Archana",
			"Designation"=>"SM",
			"Salary"=>60000
		],
	//"K"=>
		[
			"Emp No"=>3,
			"Name"=>"Keyur",
			"Designation"=>"SSC",
			"Salary"=>45000
		]
];
echo'<table border="2px" cellpadding="2px"cellspacing="0px">';
echo"<tr>
	<th>Emp Id</th>
	<th>Name</th>
	<th>Designation</th>
	<th>salary</th>

</tr>";
foreach($employees as list ("Emp No"=>$w,
							"Name"=>$y,
							"Designation"=>$z,
							"Salary"=>$g))
{
	echo "<tr>
			<td>$w</td>
			<td>$y</td>
			<td>$z</td>
			<td>$g</td>
		</tr>";
}

echo"</table>"
?>
<br/>

<?php

$food=["orange","apple","banana"];
echo count($food);
echo sizeof($food);
echo "<pre>";
print_r(array_count_values($food));
echo "</pre>";
echo"<br>";
$len=count($food);
for($i=0;$i<$len;$i++)
{
	echo "$food[$i] <br>";
}


?>
<br/>

<?php
$foods=[
	'fruits'=>['orange','banana','apple'],
	'veggies'=>['carrot','collard','pea']
];
echo count($foods);
echo sizeof($foods);
echo count($foods,1);//op-8
echo sizeof($foods,1);//op-8

print_r(array_count_values($foods));
?>



<br/>
<?php
$a=["orange","Poonam","Carrot","Sushil"];
echo in_array("orange",$a);
if(in_array("Poona",$a,true))
{
	echo "Find Successfully";	
}
else
{
	echo "Cant find";
}
?>

<?php
$zen=[
	["a","b","c","d"],
	["z"."x","n","m"],
	["s","f","g","h"]
];
echo in_array("a",$zen);
echo in_array(["a","b","c","d"],$zen);
echo array_search("f",$zen);
//if(in_array)
?>

<?php
$den=['a'=>'orange',
	'b'=>'banana',
	'c'=>'origin'	
	];
echo array_search('orange',$den);	



?>


<?php

$fruitella=["zxc","asd","qwe"];
$veggitella=["fgh","hjk","iyiiiu","oklop","opopo"];

$newarray=array_replace($fruitella,$veggitella);
echo "<pre>";
print_r($newarray);
echo"</pre>";

?>

<?php
$tellafruit=["rtr",1=>"yuyu","yuo"];
$tellaveggie=[1=>"gff","hjh","788"];

$new1=array_replace($tellafruit,$tellaveggie);
print_r($new1);

?>

<?php

$tyuty=["sds","rtrtr",1=>"uiuiui"];
$tyte=["sdsa","hjhjhj"];
$new2=array_replace($tyuty, $tyte);
echo"<pre>";
print_r($new2);
echo"</pre>";
?>

<?php

$you=[
		["red"],
		["green","pink"]
	];
$us=[
		["yellow"],
		["black"]
	];

$new3=array_replace($you, $us);
echo"<pre>";
print_r($new3);
echo"</pre>";




?>











