<?php
session_start();
?>
<body bgcolor="#cbccc4">
<center>
<font color="red">
<?php

echo('<h2>Select Color :</h2><br/>');
echo('<table border="0" cellspacing="5"><tr><td>');

if(  (!(isset($_POST['blue']))) && (!(isset($_POST['green']))) )
{
echo('<div id="car"><image src="car_images/Lancer-Side-View blue.jpg"></div></td>');
$_SESSION['color']="blue";
}


if(isset($_POST['blue']))
{
echo('<div id="car"><image src="car_images/Lancer-Side-View blue.jpg"></div></td>');
$_SESSION['color']="blue";
}

if(isset($_POST['green']))
{
echo('<div id="car"><image src="car_images/Lancer-Side-View green.jpg"></div></td>');
$_SESSION['color']="green";
}

echo('<td><form action="car3color.php" method="POST"><input type="image" src="car_images/blue.png" name="blue" value="blue" onclick="submit-form()"/></form>');
echo('<form action="car3color.php" method="POST"><input type="image" src="car_images/green.png" name="green" value="green" onclick="submit-form()"/></form>');
echo('</table><br/>');

?>
<a href="car3rim.php"><img src="car_images/next.png" /></a>
</font>

<h2><a href="../car_customization/car3.php" target="_parent" > Go Back</a></h2>


</center>
</body>