<!-- <!-- <?php

array_shift
//--deletes 1st element of the array//shift the 2nd element to the 1st and it continues
//--Changes are done in the existing array
//--print_r function is required to print the array
//--only 1 parameter ie. array
// work with index and associative arrays but in associative arry index no(key) will not change whereas in index array the index no will change or we can ssay it will shift
//--array_shift($array);
//--print_r($array);
 //-->?>
 -->

<?php

$array=["tyty","iui","oioi","erer","ggh"];
print_r($array);
echo "<br>";
array_shift($array);
print_r($array);
echo "<br>";

$arry=["A"=>"rty","B"=>"jkl","C"=>"try","asd","sdf","uio","pore"];
echo"<pre>";
print_r($arry);
echo"</pre>";

array_shift($arry);
echo"<pre>";
print_r($arry);
echo"</pre>";
?>

<!-- array_pop
--deletes the last element of array
--Changes are done in the existing array
--print_r function is required to print the array
--work with index array and associative array both
--1 parameter
--array_pop($array)
--print_r($array)
-->
<?php
array_pop($array);
print_r($array);
echo"<br>";
array_pop($arry);
print_r($arry);

?>

<!-- 
array_unshift
--Adds the n no of element to 1st array at the begining.
--it works 1 array but for adding n no of elements has to be added at the end 
--its work print_r function
--changes are done in the exiting array
--works with index array and associative array
--1 parameter and other add the elemdnts parameter
--Adds at the begininhg
-->
<?php
$arrayin=["tyty","iui"];
array_unshift($arrayin,"oioi","erer","ggh");
echo"<pre>";
print_r($arrayin);
echo"</pre>";

$arryin=["A"=>"rty","B"=>"jkl","C"=>"try"];
array_unshift($arryin,"asd","sdf","uio","pore","iopl");
echo"<pre>";
print_r($arryin);
echo"</pre>";
?>




<!-- array_push
--Adds the additional elemnt to the 1st array at the ending.
--it works with 1 paramater and other add the other elements as parameter
--it works with index array and associative array  
--it works with print_r function
-- Changes are done in the same array
--

-->
<?php
$arraying=["tyty","iui"];
array_push($arraying,"ghf","jshddjsh","jsdyus","uyuds","ouiui");
echo"<pre>";
print_r($arraying);
echo"</pre>";


$arryinyu=["A"=>"rty","B"=>"jkl","C"=>"try"];
array_push($arryinyu,"hdghf","hajhsa","hjahsj");
echo"<pre>";
print_r($arryinyu);
echo"</pre>";
?>

<!-- count/sizeof
--Counts the each element of the array
--echo is required to print the output
--3 parameters are used bit mostly with 1 parameters this function works
--it works works with index array and associative array as well
--as no is the output new array or exting array no chnages are done , it just counts the element inside the array
--2 parameter does not work with index array
--2 paremeter with mulitidimensional index/ associative array and output comes inner element+ arrays
--if incase in multidimensional array, we want to get the output of the 1st array then, 
--loops function
--just counting the elements present
 -->

<!-- 1 parameter -->
<?php
$agy=["oio","oioi","ioio"];//index array
echo count($agy);
echo "<br>";
echo sizeof($agy);
echo "<br>";
?>

<?php
$gyu=["A"=>"rty","B"=>"jkl","C"=>"try"];//associative array
echo count($gyu);
echo "<br>";
?>

<!-- 2 parmeter // inside elements + array are counted// output is 5-->
<?php

$gyu=[["A"=>"rty","B"=>"jkl"],
    ["C"=>"try"]];
echo count($gyu,1);
echo "<br>";


//another example with outer keys 

$gyue=[
    "K"=>["A"=>"rty","B"=>"jkl"],
    "M"=>["C"=>"try"]
    ];
echo count($gyue['K'],1);
?>
<br/>

<!-- array_count_values

--new array
--counts the simalar element just like countif in excel works
--1 parameter
--syntax-array_count_values($array);
--changes are done in new array
 -->

<?php

$yui=["hjsh","jshj","jshjhs","ABC","ABC","ABC","XYZ","abc"];

array_count_values($yui);
echo"<pre>";
print_r($yui);
echo"</pre>";
$new1=array_count_values($yui);
echo"<pre>";
print_r($new1);
echo"</pre>";

?>


<!--In_array 
--Works with index array, doesnt woprk with associative array
--Output is 0 or 1
--2 parmeters
--syntax-array_in("hgdh",$array)// what to bhe found, the array himself
--echo fundtion is used for printing the output
--if the output is zero it wont print anything on the output window
--if functions
-->
<?php
$uio=["ioio","uyuy","iuiui"];
echo in_array("uyuy",$uio);
echo "<br>";
echo in_array("sjhd",$uio);//no output    
?>
<br/>

<?php
$gyuer=[["A"=>"rty","B"=>"jkl"],
    ["C"=>"try"]];
echo in_array("rty",$gyuer);//no output
echo "<br>";
?>


<!--array_search
--it work with both index and assoxitive array
--if index array-o/p is 0 or 1 , 0 doesnst appear on the screen
--if associative array then o/p is key 
--prints with echo
--it does nt with multidimennsional index/ asscociative array 
--
-->
<?php

$tyu=["t"=>"hhdjhjs","u"=>"uwyeuwy"];
echo array_search("uwyeuwy",$tyu);
echo"<br>";
$jkl=["hsghd","yuwye","gsfdgs","uqwuqy"];
echo array_search("gsfdgs",$jkl);
echo "<br>";
?>

<!-- array_replace 
--works with index array and associative array
--changes are done in the new array
--2 parameters or more 2 , min 2 parameter
--array_replace($array1,$array2)

 -->

<?php
//index array example
$hshd=["hhj","hjj","kjkj","jkk"];
$lkl=["p","i","y","u","q","g"];

$newarray1=array_replace($hshd,$lkl);
echo"<pre>";
print_r($newarray1);//all are replaced
echo"</pre>";

$hd=["hhj","hjj","kjkj","jkk"];
$ll=["p","i"];
$iuio=["kjk"];
$newarray2=array_replace($hd,$ll,$iuio);
echo"<pre>";
print_r($newarray2);
echo"</pre>";

// associative array


$hjko=["jhjkj","g"=>"iuiu","op"=>"klkl"];
$lpl=["p","i","y","u","q","g"=>"hjhj"];
$newarray3=array_replace($hjko,$lpl);
echo"<pre>";
print_r($newarray3);
echo"</pre>";

?>
<!-- array_replace_recursive
--Multidimesional array
--new array
print_function

 -->
 yuyuyuyu
<?php
$ghgh=[
        "A"=>["kajksj"],
        "B"=>["hjhj","kjkj","yjyu"],
        "C"=>["ioio"] 
    ];

$klh=[
        "A"=>["kjjkj"],
        "B"=>["hkjk"]
    ];

$newarray4=array_replace_recursive($ghgh,$klh);
echo"<pre>";
print_r($newarray4);
echo"</pre>";


// Array
(
    [A] => Array
        (
            [0] => kjjkj
        )

    [B] => Array
        (
            [0] => hkjk
            [1] => kjkj
            [2] => yjyu
        )

    [C] => Array
        (
            [0] => ioio
        )

)
?>

<!-- Array_Merge
--Works with both index and Associtive array
--N of no of arrays can be merged
--output is reflected in the new array
--print_r function is used
--Syntax-array_merge($a1,$a2,$a3)
--clubing both the arrays
--array_merge has problem with same keys , its replaces and merge hence array_merge_recursive into picture
-->
<?php
$a1=["mhs","hjsaj","kjjaksj","kjkjs"];
$a2=["hjjs","jhs","jkas","jahsj"];
$a3=["A"=>["hgsg","has","jahsj"],
    "B"=>["jhas","jsa","jajsh"],
    ];
$nwarr=array_merge($a1,$a2,$a3);
echo"<pre>";
print_r($nwarr);
echo "</pre>"
?>

<!-- array_merge_recursive
-- multidimension arrays 
--new array
--print_r function
--

 -->kjkjk
<?php
$a1=["A"=>"mhs","B"=>"hjsaj","C"=>"kjjaksj","D"=>"kjkjs"];
$a3=["A"=>["hgsg","has","jahsj"],
    "B"=>["jhas","jsa","jajsh"],
    ];
$nwarray=array_merge_recursive($a1,$a3);
echo"<pre>";
print_r($nwarray);
echo "</pre>"
?>


<!--array_combine
--2 arrays are manadatory out of while 1 becomes the key and other becomes the value
--Assignment of 1 array elements  to the other 
--new array is formed
--print_r function is to be used
--syntax-array_combine($array1,$array2)
--there must be an equal number of elements in both the arrays
-->
<?php

$array1=["hjhs","hsjhdj","jshd","jahgsh"];
$array2=["ksj","sjh","sah","ysa"];

$newarray45=array_combine($array1,$array2);
echo"<pre>";
print_r($newarray45);
echo"</pre>";
?>


<!-- array_slice
-- its just like picking up the cake slice
--o/p comes under new array
--3 parameters r reuired||array,start,length
--4th parameter is true....then the index number will not change
--works with index array and associtive array
--positive number index, it just picks the elements as per the length and share us the same.
---ve number index,it pickups the elements as per the length 
--in +ve and -ve index both start elements is also inculded in the new array ie. in the output
--if its with 2 parameter, then the new array start with the 0 index
--if is an asscoitive array then, 4th pararameter can be ignored because nyways the o/p will be with key=>value
-->

2 parameter/+ve num as Index no
<?php
$a4=["jhdh","hjh","jk","fhhj"];
$new89=array_slice($a4,1,2);
print_r($new89);
echo"<br>";
$new78=array_slice($a4,1,2,true);
print_r($new78);
echo"<br>";
?>

2 parameter/-ve num as Index no
<?php
$new90=array_slice($a4,-2,2);
print_r($new90);

?>

//Asscociative array with 3 parameters


<?php
$x=[
        "pia"=>100,
        "gia"=>"tyu",
        "love"=>"poiu"
    ];

    $newarray=array_slice($x,1,2);
    echo"<pre>";
    print_r($newarray);
    echo"</pre>";

?>

<!-- arry_splice



 -->


















