<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Intro PHP</title>
</head>
<body>

<?php

//some built in functions are very useful
$a = 44;
$b = -99.77;
$z = 324.8;
$w = "5" + 5;  //eyes open here!

//find out data type of variable.
echo gettype($b) . "<br>";
echo gettype($w) . "<br>";

//print location and value of variables
//very useful for debugging
var_dump($w, $a);

?>

</body>
</html>