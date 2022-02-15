<!-- Example1 -->
<?php
function fullname($firstname="First",$lastname="last")
{
	$name=$firstname ." ".$lastname;
	return $name;
}
$compname=fullname("Poonam");
echo $compname ."<br>";

?>

<!-- example 2 -->

<?php
function sum($E,$M,$U)
{
	$a=$E+$M+$U;
	return $a;
}

$total=sum(60,60,60);

function percentage($p)
{
	$per=$p/3;
	return $per;
}

$z=percentage($total);
echo $z;
//echo $total
;
?>





