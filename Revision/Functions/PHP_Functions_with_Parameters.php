<!--Example:1  -->

<?php
function param($name)
{
	echo "hello, i am $name <br>";
}
param("Poonam");

?>

<!-- Example 2 Search for putting 1st name as Default First-->
<?php
function fullname($firstname="First",$lastname=
"Last")
{
	echo "hi, $firstname $lastname, Welcome to our university <br>";
}

fullname("Poonam");
fullname("Poonam","Chauhan");
fullname("","Chauhan");


?>
<!-- Example 3 -->
<?php
function sum($a,$b)
{
	echo $a+$b."<br>";
}

sum(10,20);
sum(50,80);
$one=2;
$two=3;
sum($one,$two);
?>