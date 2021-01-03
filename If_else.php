!DOCTYPE html>
<html>
<body>

<?php
//PHP - The if Statement
$t = date("H");

if ($t < "20") {
  echo "Have a good day!";
}

//PHP - The if...else Statement
$t = date("H");

if ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}

//PHP - The if...elseif...else Statement
$t = date("H");

if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
?>

</body>
</html>