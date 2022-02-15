<?php

$a=["orange","ginger","garlic","peanuts"];


//3 parameters-values starting with 0 index

//$newarray=array_slice($a,0,2);
print_r($newarray);

echo "<br>";
//$newarray=array_slice($a,1,2);
print_r($newarray);

echo "<br>";
$newarray=array_slice($a,-3,2);
print_r($newarray);
echo "<br>";


// 4 parameters , works same as 3 itself but it returns the old index no.

$newarray=array_slice($a,-4,2,true);
print_r($newarray);
echo "<br>";

//Asscociative array with 3 parameters

$x=[
		"pia"=>100,
		"gia"=>"tyu",
		"love"=>"poiu"
	];

	$newarray=array_slice($x,1,2);
	print_r($newarray);


?>

