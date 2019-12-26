<!DOCTYPE html>
<html>
<body>
<?php declare(strict_types=1); // strict requirement
function setHeight (int $minheight = 50){
    echo "The height is : $minheight <br>";
}
setHeight("150");
setHeight();  // will use the default value of 50
setHeight("200");
setHeight("300");
?>

</body>
</html>