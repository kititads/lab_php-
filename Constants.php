!DOCTYPE html>
<html>
<body>

<?php
//Create a PHP Constant
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;
//PHP Constant Arrays
define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);
echo cars[0];
//Constants are Global
define("GREETING", "Welcome to W3Schools.com!");

function myTest() {
  echo GREETING;
}
 
myTest();

?>

</body>
</html>