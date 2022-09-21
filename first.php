<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Intro PHP</title>
</head>
<body>


<?php
/* This script will define variables, constants, and echo to a web page
    Notice that echo may have one or more arguments, comma separated.
 */

define("school", "Bentley");   //define constant named school

//define some variables
$x = 5;
$y = 23;
$z = $x + $y;
$b = true;
$s = "Bentley";

echo "Note how true is represented: " . (int)$b . "<br>";
echo "Note how false is represented: " . (int)false . "<br>";


echo '<h3>The score is ', $z, '</h3>';

echo school, ' wins again';


?>

</body>
</html>
