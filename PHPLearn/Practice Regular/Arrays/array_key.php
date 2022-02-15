<!-- array key
--array_keys()--gives the keys as o/p with index no,o/p in new array,print_r function
--array_key_first()--gives the first key without the array , only key , o/p in new array, print_r function
--array_key_last()--gives the last key without the array , only key , o/p in new array, print_r function
--array_key_exists()--2 para("key",$array),o/p 1 or 0-works with if condition
-->

<?php
$array1=["A"=>"hjjk","B"=>"uio","C"=>"tyu","D"=>"rtyu","E"=>"rety"];
$new78=array_keys($array1);
echo"<pre>";
print_r($new78);
echo"</pre>";

$new89=array_key_first($array1);
echo"<pre>";
print_r($new89);
echo"</pre>";

$new90=array_key_last($array1);
echo"<pre>";
print_r($new90);
echo"</pre>";

$new91=array_key_exists("D",$array1);
echo"<pre>";
print_r($new91);
echo"</pre>";
?>