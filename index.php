<?php
echo "if";
echo "<br>";

$is_cng_available = false;
if($is_cng_available){
    echo "Let's go by CNG";
}

echo "<br>";
echo "<hr>";

echo "Default values of Uninitialized variables";
echo "<br>"; 

$unset_str = "abc";
$unset_bool = "d";
var_dump($unset_str);
echo "<br>"; 
echo($unset_bool ? "true\n":"false\n");

echo "<br>"; 
echo "<hr>";

echo "Variables for Mapping fuction/method";
echo "<br>"; 

function add ($a, $b){
    return $a+$b;
}
$funcName = "add";
echo $funcName(2,3);

echo "<br>"; 
echo "<hr>"; 

echo "Variable variables";
$variableName = 'foo';
$foo = "bar";
echo "<br>"; 
echo $foo;
echo "<br>"; 
echo $variableName;
echo "<br>"; 
echo $$variableName; 
echo "<br>"; 
echo ${$variableName}; 

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
