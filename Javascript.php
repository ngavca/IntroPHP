<?php
/* This is an example using Javascript. 
 Notice the two scripts.
 */

$color = "gainsboro";
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Buttons and Colors</title>
</head>
<body style="background-color:yellow;color:green">


<h2 style="text-align:center">Pick a Background Color</h2>

<form name="example" id="example">
<table style="margin-right: auto; margin-left: auto;">
<tr>
<td><br></td>
</tr>
<tr>
<td><input type="button" value="LIGHT BLUE" onclick="document.body.style.backgroundColor='lightblue';">
</td>
</tr>
<tr>
<td><input type="button" value="LIGHT GREEN" onclick="document.body.style.backgroundColor='lightgreen';">
</td>
</tr>
<tr>
<td><input type="button" value="PINK" onclick="document.body.style.backgroundColor='pink';">
</td>
</tr>
<tr>
<td><input type="button" value="Default" onclick="document.body.style.backgroundColor='<?php echo $color?>';">
</td>
</tr>

<tr>
<td>Pick Your Own Color<br>and Click Anywhere<br>
<input type="text" name="yourcolor"
		onfocus="document.body.style.backgroundColor='orange';"
				onchange="document.body.style.color=yourcolor.value";>
				</td>
				</tr>   
				</table>
				</form>
				</body>
				</html>
		

