<!DOCTYPE html>
<html>
<body>
<?php
$x = 100;
$y = 100;
function addition (){
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
addition();
echo $z;
?>
</body>
</html>