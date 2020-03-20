<!DOCTYPE html>
<html>
<body>
<?php
// date_default_timezone_set("Asia/Kathmandu");
// echo "The time is " . date("h:i:sa");


//Create a Date With mktime()

// $d = mktime(11, 14, 54, 8, 12, 2020);
// echo "Created date is " . date("Y-m-d h:i:sa", $d);


// Create a Date From a String With strtotime()

// $d = strtotime("3:22pm March 20 2020");
// echo "Created date is " . date("Y-m-d h:i:sa", $d);


// converting a string to a date
// $d = strtotime("3:35pm March 20 2020");
// echo date("Y-m-d h:i:sa", $d) . "<br>";

// $d = strtotime("Next Saturday");
// echo date("Y-m-d h:i:sa", $d) . "<br>";

// $d = strtotime("+2 months");
// echo date("Y-m-d h:i:sa", $d) . "<br>";

// $d = strtotime("+3 months");
// echo date("Y-m-d h:i:sa", $d) . "<br>";


// the dates for the next six Saturdays
// $startdate = strtotime("Saturday");
// $enddate = strtotime("+6 weeks", $startdate);

// while ($startdate < $enddate){
//     echo date("M d", $startdate) . "<br>";
//     $startdate = strtotime("+1 week", $startdate);
// }


// the number of days until 4th of July
$d1 = strtotime("July 04");
$d2 = ceil(($d1-time())/60/60/24);

echo "There are " . $d2 ." days until 4th of July.";

?>
</body>
<html>
