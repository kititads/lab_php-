<!DOCTYPE html>
<html>
<body>

<?php
//Integers
$x = 5985;
var_dump(is_int($x));

$x = 59.85;
var_dump(is_int($x));
//Floats
$x = 10.365;
var_dump(is_float($x));
//Infinity
$x = 1.9e411;
var_dump($x);
//NaN
$x = acos(8);
var_dump($x);
//Numerical Strings
$x = 5985;
var_dump(is_numeric($x));

$x = "5985";
var_dump(is_numeric($x));

$x = "59.85" + 100;
var_dump(is_numeric($x));

$x = "Hello";
var_dump(is_numeric($x));

//Casting Strings and Floats to Integers
// Cast float to int
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;

echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;
</body>
</html>
