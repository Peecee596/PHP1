<?php

$fruit=["apple","mango","grapes"];
$veggie=["caroot","brinjal","onion"];

$newarray=array_merge($fruit,$veggie);
print_r($newarray);
echo"<br>";

$fr=["a"=>"orange","b"=>"grapes","c"=>"banana"];///associative array

$ve=["carrot","pea"];//index array

$newarray=array_merge($fr,$ve);
print_r($newarray);
echo"<br>";

$fru=["a"=>"orange","b"=>"banana","c"=>"grapes"];
$veg=["b"=>"carrot","d"=>"pea"];

$newarray=array_merge($fru,$veg);
print_r($newarray);//replaced bananna

echo"<br>";

//dont want to replace banana but didint added carraot as well same index
$newarray=$fru+$veg;
print_r($newarray);

echo"<br>";

//what if i dont want to delete any parameter with same index

$newarray=array_merge_recursive($fru,$veg);
echo"<pre>";
print_r($newarray);
echo"</pre>";
echo"<br>";


$frui=["a"=>"orange","b"=>"bananana","c"=>"grapes"];
$vegg=["b"=>
			["color"=>["red","blure","green"]],"e"=>"pea",55,68];

$newarray=array_merge_recursive($frui,$vegg);
echo"<pre>";
print_r($newarray);
echo"</pre>";
echo"<br>";

$iut=["graoes","cashew","groudnut"];
$ggie=[34,56,78];

$newarray=array_combine($iut,$ggie);
print_r($newarray);



echo"<br>";

?>