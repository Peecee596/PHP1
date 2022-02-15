--array_intersect
--new array
--compare the arrays and gives the o/p as the value if the value matches and keys will be given of the 1st array
<?php

$fruit=[
	"A"=>"kjaksj",
	"B"=>"hggash",
	"C"=>"ghgh",
	"D"=>"asds"
];
$veggie=[
	"A"=>"kjaksj",
	"X"=>"ghgh",
	"C"=>"asds"
];
$new45=array_intersect($fruit,$veggie);
echo"<pre>";
print_r($new45);
echo"</pre>";
	
?>


--array_intersect_key
--match the key and o/p will be given from the 1st array
<?php
$new78=array_intersect_key($fruit,$veggie);
echo"<pre>";
print_r($new78);
echo"</pre>";
?>


--array_intersesct_assoc
--match the key and values together
--new array
<?php
$new90=array_intersect_assoc($fruit,$veggie);
echo"<pre>";
print_r($new90);
echo"</pre>";

?>

--array_uintersect-6
<?php
function compare($a,$b)
{
	if($a===$b)
	{
		return 0;
	}
	return ($a>$b)?1:-1;
}

$new98=array_uintersect($fruit, $veggie,"compare");
echo"<pre>";
print_r($new98);
echo"</pre>";


?>
--array_intersect_ukey-5

--array_uintersect_key-no

--array_intersect_uassoc-4

--array_uintersect_assoc-7

--array_uintersect_uassoc-8



