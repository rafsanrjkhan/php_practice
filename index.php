<?php


echo "<br>"; 
echo "<hr>"; 

echo "Data Type - Associate Array";
echo "<br>"; 
$array["foo"] = "bar";
$array[43] = "hello";
echo $array["foo"];
echo "<br>"; 
echo $array[43];

echo "<br>"; 
echo "<hr>"; 

echo "Data Type - Array";
echo "<br>"; 
$bar = ["A", true, 123=>5];
echo $bar[0];
echo "<br>"; 
echo $bar[1] ;
echo "<br>"; 
echo $bar[123] ;
