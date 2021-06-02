<?php

	$a=["Sanjay","Aman","Rehman"];
	$b=["Orange","Apple"];

	//4 parameters
	//array_splice($a,1,1,$b);//replaced 1 and shifted
	print_r($a);
echo "<br>";

	//array_splice($a,1,2,$b);// directlyreplaced 2 
	print_r($a);
echo "<br>";

	//array_splice($a,0,1,$b);
	print_r($a);
echo "<br>";

	//array_splice($a,2,2,$b);
	print_r($a);
echo "<br>";

//////2 parameters(array,length)
	//array_splice($a,2);// deleted all after 2(length)
	print_r($a);
echo "<br>";
	array_splice($a,-2);//Delete the value from that parameter
	print_r($a);
echo "<br>";

///3 parameters(deletion)

	//array_splice($a,0,1);//deletes 1st(start and 1 (lenght)records deleted) 
	print_r($a);
echo "<br>";
	$a=["Sanjay","Aman","Rehman"];
	$b=["Orange","Apple"];

	//array_splice($a,1,-1);//between 1 and -1 including 1 its deletes sanjay and rehman//it picks the lengths
	print_r($a);
echo "<br>";
	
	//array_splice($a,1,-2);//  not deleted
	print_r($a);	

echo "<br>";



?>