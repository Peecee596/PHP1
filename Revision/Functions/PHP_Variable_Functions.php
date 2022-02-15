<!-- example 1 -->
<?php

function wow()
{
	echo "Heeeeelllloooo <br>";
}

$wowie="wow";
$wowie();
?>


<!-- example 2 -->
<?php

function xyz($name)
{
	echo "$name is my nation <br>";
}
$country="xyz";
$country("India");

?>

<!-- Anaoymous function -->
<?php
$sayhello=function($dollar)
{
	echo"Yes $dollar its correct <br>";
};

$sayhello("USA");



?>


