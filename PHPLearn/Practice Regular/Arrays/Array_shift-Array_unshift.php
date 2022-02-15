--array_shift
--deletes the 1st element from the begining
--1 parameter
--index array-index no will chnage
--assciative array-key wont change
--existing array

<?php

$fruit=["orange","banana","guava","orange"];

array_shift($fruit);
echo "<pre>";
print_r($fruit);
echo"</pre>";

$frui=[
	"A"=>"hjshjs",
	"B"=>"jhss",
	"C"=>"jasjh"

];
array_shift($frui);
echo"<pre>";
print_r($frui);
echo"</pre>";

?>
