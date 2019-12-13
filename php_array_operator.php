<!DOCTYPE html>
<html>
<body>
<?php 
$x = array("a" => "red", "b" => "green");
$y = array("c" => "blue", "d" => "yellow");
// print_r($x + $y);// union of $x and $y
// var_dump($x == $y);// Equality
// var_dump($x === $y);//Identity
// var_dump($x != $y);//Inequality
// var_dump($x <> $y);//Inequality
var_dump($x !== $y);//non-equality


?>
</body>
</html>