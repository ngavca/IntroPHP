<?php
#Notice 3 scripts on this page.
// This script will define variables, constants, and place them on a webpage.


define("school", "Bentley");   //define constant named school

$x = 5;
$y = 23;
$z = $x + $y;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Intro PHP</title>
</head>
<body>

<h3>the score is <?php echo $z; ?> </h3>

<h3> <?php echo school; ?> wins again! </h3>

</body>
</html>

