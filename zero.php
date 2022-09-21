<?php
/* This script will define variables, constants, and echo to a web page
 Notice that echo may have one or more arguments, comma separated.
 */
define("school", "Bentley");   //define constant named school

//define some variables:
$x = 5;
$y = 23;
$z = $x + $y;
$b = true;
$s = "Bentley";
$foo = "foobar";
$first = "first";
$date = "09/14/2022";
$foobar = 999;

//echo web page to browser
echo "<!DOCTYPE html>
<html>
    
<head>
   <meta charset='UTF-8'>
   <title>Intro PHP</title>
</head>
<body>";

echo "<h3>the score is ", $z, "</h3>";

echo school, " wins again";

echo "</body>
      </html>";
