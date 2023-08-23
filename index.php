<?php
echo "if -- else";
echo "<br>";



echo "<br>";
echo "<hr>";

echo "Ternary operator - shortend if else";
echo "<br>";

$a = 10;
$b = 2;
echo ($a > $b) ? "a is greater than b" : "a is not greater than b";

echo "<br>";

$is_cng_available = true;
$has_cng_fare = false;
echo ($is_cng_available && $has_cng_fare) ? "Lets go by cng" : "Lets walk";

echo "<br>";
echo "<hr>";

echo "Double if condition";
echo "<br>";

$name = "Rafsan";
$age = 21;

if($age >=18){
    echo "$name are eligible for vote";
    // 2nd condition
    if($age >=21){
        echo "You can marry";
    }else {
        echo "You can't marry";
    }
}else {
    echo "$name are not eligible for vote. <br>";
} 

echo "<br>";
echo "<hr>";

echo "if -- else";
echo "<br>";

$is_cng_available = true;
$has_cng_fare = false;

if($is_cng_available && $has_cng_fare){
    echo "Let's go by CNG";
}else {
    echo "Let's walk";
}

echo "<br>";
echo "<hr>";

echo "if";
echo "<br>";

$is_cng_available = true;
$has_cng_fare = true;

if($is_cng_available && $has_cng_fare){
    echo "Let's go by CNG";
}else {
    echo "Let's walk";
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
