<?php
echo "for loop";
echo "<br>";

for ($i = 1; $i < 10; $i++) {
    echo $i;
}

echo "<br>";
echo "<hr>";

echo "php switch";
echo "<br>";

$a = 33; $b = 56; $c = 45;  
if ($a < $b) {  
    if ($a < $c) {  
        echo "$a is smaller than $b and $c";  
    }  
} 

echo "<br>";

$colour = "black";
switch ($colour){
    case "red";
        echo "the colour is red";
        break;
    case "blue";
        echo "the colour is blue";
        break;
    case "yellow";
        echo "the colour is yellow";
        break;
    case "black";
        echo "the colour is black";
        break;       
}

echo "<br>";
echo "<hr>";

echo "nested if";
echo "<br>";

$age = 18;  
$nationality = "Indian";  
//applying conditions on nationality and age  
if ($nationality == "Indian")  
{  
    if ($age >= 18) {  
        echo "Eligible to give vote";  
    }  
    else {    
        echo "Not eligible to give vote";  
    }  
}  

echo "<br>";
echo "<hr>";

echo "mutiple if - else if";
echo "<br>";

  $marks=90;      
    if ($marks<33){    
        echo "fail";    
    } else if ($marks>=34 && $marks<50) {    
        echo "D grade";    
    } else if ($marks>=50 && $marks<65) {    
    echo "C grade";   
    } else if ($marks>=65 && $marks<80) {    
        echo "B grade";   
    } else if ($marks>=80 && $marks<90) {    
        echo "A grade";    
    } else if ($marks>=90 && $marks<100) {    
        echo "A+ grade";   
    } else {    
        echo "Invalid input";    
    }  

echo "<br>";
echo "<hr>";

echo "if -- else if";
echo "<br>";

$a = 2;
$b = 2;

if ($a > $b){
    echo "a is bigger than b";
} else if ($a == $b){
    echo "a is equal to b";
} else {
    echo "a is smaller than b";
}

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

$num=12;  
if($num%2==0){  
echo "$num is even number";  
}else{  
echo "$num is odd number";  
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
