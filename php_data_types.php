<!DOCTYPE html>
<html>
<body>
<?php
//PHP String
$x = "Hello World!!!";
$y = 'Hello World!!!';

echo "$x";
echo "<br>";
echo "$y";

//php integer
$x = 5985;//$x is an integer.
echo "<br>";
var_dump($x);//The PHP var_dump() function returns the data type and value:
echo "<br>";
$x = 10.365;// $x is a float
var_dump($x);

//php boolean 
$x = "True";
$y = "false";
echo "$x";
echo "<br>";
echo "$y";

//PHP Array
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
//PHP Object

class Car {
    function Car() {
        $this->model = "VW";
    }
}
// create an object
$motorola = new Car();

// show object properties
echo $motorola->model;

//PHP NULL Value
$x = "Hello World!!";
$x = null;
var_dump($x);
?>
<body>
<html>
