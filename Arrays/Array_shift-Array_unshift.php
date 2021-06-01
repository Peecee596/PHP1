//replaces in existing array

<?php

$fruit=["orange","banana","guava","orange"];

//array_shift($fruit);
print_r($fruit);//deleted 1st element

echo"<br>";

array_unshift($fruit,"app","bui","crtr","drtrt");
print_r($fruit);//added the new element at the first and then the old array

?>