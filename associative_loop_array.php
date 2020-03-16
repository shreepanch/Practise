<!DOCTYPE html>
<html>
<body>
<?php
$age = array("Golu" => "20" , "Vai" => "21" , "Dipesh" => "22");


foreach($age as $x => $x_value)
{
    echo "Key=" . $x . ", Value =" . $x_value;
    echo "<br>";
}
?>
</body>
</html>