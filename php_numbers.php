<!DOCTYPE html>
<body>
<html>
<?php
// Check if the type of a variable is integer 
$x = 2536;
var_dump(is_int($x));

echo "<br>";

//check again
$x = 25.236;
var_dump(is_int($x));

echo "<br>";
$x = 10.325;
var_dump(is_float($x));
?>
</body>
</html>