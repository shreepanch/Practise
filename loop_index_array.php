<!DOCTYPE html>
<html>
<body>
<?php
$cars = array("BWM", "Lembergini", "Toyota");
$arrlenght = count($cars);

for($x = 0; $x < $arrlenght; $x++)
{
    echo $cars[$x];
    echo "<br>";
}
?>
</body>
</html>