<?php
//1 parameter by default zero 
$arr=["asd","sdf","uio","pore","asd"];//index array
echo count($arr);
echo "<br>";

echo sizeof($arr);
echo "<br>";

$array=["A"=>"rty","B"=>"jkl","C"=>"try"];//associative array
echo count($array);
echo "<br>";
echo sizeof($array);
echo "<br>";


$arry=["A"=>"rty","B"=>"jkl","C"=>"try","asd","sdf","uio","pore"];
echo count($arry);
echo "<br>";

$arra=[
	"BI"=>["A"=>"rty"],
	["B"=>"jkl","C"=>"try"],
	"asd","sdf","uio","pore"
];
echo count($arra);
echo "<br>";
echo sizeof($arra);
echo "<br>";

for($i=0;$i<=count($arra);$i++)
{
	echo "$i <br>";
}


//2 parameters 
echo "<br>";
echo count($arra,1);
echo "<br>";
echo count($arra['BI'],1);
echo "<br>";
$newarray=(array_count_values($arr));//proper inder array
echo "<br>";
print_r($newarray);

?>