<?php
session_start();
?>
<body bgcolor="#cbccc4">
<center>
<font color="black">
<?php

echo('<h2>Select Color :</h2><br/>');
echo('<table border="0" cellspacing="5"><tr><td>');

if(  (!(isset($_POST['skyblue']))) && (!(isset($_POST['orange']))) )
{
echo('<div id="car"><image src="car_images/Swift-1.jpg"></div></td>');
$_SESSION['color']="skyblue";
}

if(isset($_POST['skyblue']))
{
echo('<div id="car"><image src="car_images/Swift-1.jpg"></div></td>');
$_SESSION['color']="skyblue";
}

if(isset($_POST['orange']))
{
echo('<div id="car"><image src="car_images/Swift-2.jpg"></div></td>');
$_SESSION['color']="orange";
}

echo('<td><form action="car2color.php" method="POST"><input type="image" src="car_images/skyblue.png" name="skyblue" value="black" onclick="submit-form()"/></form>');
echo('<form action="car2color.php" method="POST"><input type="image" src="car_images/orange.png" name="orange" value="orange" onclick="submit-form()"/></form>');
echo('</table><br/>');

?>
<a href="car2rim.php"><img src="car_images/next.png" /></a>
</font>


<h2><a href="../car_customization/car2.php" target="_parent" > Go Back</a></h2>
</center>
</body>