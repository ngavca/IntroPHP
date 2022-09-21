<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Intro PHP</title>
</head>
<body>

<?php
//relational operators  

if (5 == 7) echo "5==7 true"; else echo "5==7 false";

echo "<br>";

//beware data type conversion
if (5 == "5") echo "5=='5' true"; else echo "5=='5' false";

echo "<br>";

if ("5" == 5) echo "'5'==5 true"; else echo "'5'==5 false";

echo "<br>";

//no data type conversion
if (5 === "5") echo "5==='5' true"; else echo "5==='5' false";

?>

</body>
</html>

