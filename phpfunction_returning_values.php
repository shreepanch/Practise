<!DOCTYPE html>
<html>
<body>
<?php 
function sum(int $x, int $y){
    $z = $x + $y;
    return $z;
}
echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "5 + 17 = " . sum(5, 17) . "<br>";
echo "5 + 5 = " . sum(5, 5) . "<br>";  
 

?>
</body>
</html>