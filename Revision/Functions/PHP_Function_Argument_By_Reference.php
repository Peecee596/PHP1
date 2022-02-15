<!-- Example 1 By Value -->

<?php
function wow($stg)
{
	$stg.= "Hello everyone";
}

$string="How are you <br>";
wow($string);
echo $string;

?>

<!-- example 2 -->
<?php
function test($a)
{
	$a.= "Hope Everyone is Good";
}

$b="Please take care of urself <br>";

test($b);
echo $b."<br>";
?>



<!-- xample 3 by reference -->

<?php
function usage(&$x)
{
	$x.=", Hello hi kasakai mazamaa";
}

$y="Good Morning Mumbai";
usage($y);
echo $y."<br>";
?>

<!-- xample 4 both together -->

<?php

function first($h)
{
	$h+=5;
}

function second(&$k)
{
	$k+=5;
}
$num=5;
first($num);
echo $num."<br>";
second($num);
echo $num."<br>";

?>

<!-- xample 4 sum both together -->

Not possible