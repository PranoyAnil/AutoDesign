<?php
session_start();
?>
<body bgcolor="#cbccc4">
<center>
<font color="red">
<?php

echo('<h2>Select Color :</h2><br/>');
echo('<table border="0" cellspacing="5"><tr><td>');

if(  (!(isset($_POST['black']))) && (!(isset($_POST['blue']))) && (!(isset($_POST['red']))) )
{
echo('<div id="car"><image src="car_images/honda civic t1-black.jpg"></div></td>');
$_SESSION['color']="black";
}

if(isset($_POST['black']))
{
echo('<div id="car"><image src="car_images/honda civic t1-black.jpg"></div></td>');
$_SESSION['color']="black";
}

if(isset($_POST['blue']))
{
echo('<div id="car"><image src="car_images/honda civic t1-blue.jpg"></div></td>');
$_SESSION['color']="blue";
}

if(isset($_POST['red']))
{
echo('<div id="car"><image src="car_images/honda civic- red.jpg"></div></td>');
$_SESSION['color']="red";
}

echo('<td><form action="car1color.php" method="POST"><input type="image" src="car_images/black.png" name="black" value="black" onclick="submit-form()"/></form>');
echo('<form action="car1color.php" method="POST"><input type="image" src="car_images/blue.png" name="blue" value="blue" onclick="submit-form()"/></form>');
echo('<form action="car1color.php" method="POST"><input type="image" src="car_images/red.png" name="red" value="red" onclick="submit-form()"/></form></td></tr>');
echo('</table><br/>');

?>
<a href="car1rim.php"><img src="car_images/next.png" /></a>
</font>

<h2><a href="../car_customization/car1.php" target="_parent" > Go Back</a></h2>


</center>
</body>