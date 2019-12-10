<!DOCTYPE html>
<body>
<html>
<?php

//Create a constant with a case-sensitive name
define("pcpc", "www.praveenpcpc.com", true);
echo pcpc;


//Create an Array constant:
define("cars", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
]);
echo cars[0];


//Constants are Global
define("PCPC", "Welcome to pcpc.com!");

function myTest() {
    echo PCPC;
}
 
myTest();
?> 


</body>
</html>