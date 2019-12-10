<!DOCTYPE html>
<html>
<body>
<?php

//php infinity
$x = 1.5e411;
var_dump($x);
//php NaN(not a number)
$x = acos (8);
var_dump($x);

// Check if the variable is numeric   
$x = 5985;
var_dump(is_numeric($x));

echo "<br>";

$x = "5985";
var_dump(is_numeric($x));

echo "<br>";

$x = "59.85" + 100;
var_dump(is_numeric($x));

echo "<br>";

$x = "Hello";
var_dump(is_numeric($x));


//PHP Casting Strings and Floats to Integers //Sometimes you need to cast a numerical value into another data type.

//The (int), (integer), or intval() function are often used to convert a value to an integer.
// Cast float to int 
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;
  
echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;
?>
</body>
</html>
