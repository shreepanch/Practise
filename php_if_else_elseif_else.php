<!DOCTYPE html>
<html>
<body>
<?php 
$t = date("H");
if ($t < "20"){
    echo "Have a Good morning";
}elseif($t < "20"){
    echo "Have a Good day";
}else{
    echo "Have a good night";
}


?>
</body>
</html>
