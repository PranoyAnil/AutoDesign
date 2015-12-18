<?php
session_start();
?>
<body bgcolor="#cbccc4">
<center>
<font color="white">
<?php


if($_SESSION['color']=="black")
{
echo('<h2>Select Rim :</h2><br/>');
echo('<table border="0" cellspacing="5"><tr><td>');

if(  (!(isset($_POST['rim1']))) && (!(isset($_POST['rim2']))) )
{
echo('<div id="car"><image src="car_images/honda civic t1-black-rim1.jpg"></div></td>');
$_SESSION['rim']="rim1";
}

if(isset($_POST['rim1']))
{
echo('<div id="car"><image src="car_images/honda civic t1-black-rim1.jpg"></div></td>');
$_SESSION['rim']="rim1";
}

if(isset($_POST['rim2']))
{
echo('<div id="car"><image src="car_images/honda civic-black-rim2.jpg"></div></td>');
$_SESSION['rim']="rim2";
}

echo('<td><form action="car1rim.php" method="POST"><input type="image" src="car_images/rim1.png" name="rim1" value="rim1" onclick="submit-form()"/></form>');
echo('<form action="car1rim.php" method="POST"><input type="image" src="car_images/rim2.png" name="rim2" value="rim2" onclick="submit-form()"/></form>');
echo('</table><br/>');
}




if($_SESSION['color']=="blue")
{
echo('<h2>Select Rim :</h2><br/>');
echo('<table border="0" cellspacing="5"><tr><td>');

if(  (!(isset($_POST['rim1']))) && (!(isset($_POST['rim2']))) )
{
echo('<div id="car"><image src="car_images/honda civic-blue-rim1.jpg"></div></td>');
$_SESSION['rim']="rim1";
}

if(isset($_POST['rim1']))
{
echo('<div id="car"><image src="car_images/honda civic-blue-rim1.jpg"></div></td>');
$_SESSION['rim']="rim1";
}

if(isset($_POST['rim2']))
{
echo('<div id="car"><image src="car_images/honda civic-blue-rim2.jpg"></div></td>');
$_SESSION['rim']="rim2";
}

echo('<td><form action="car1rim.php" method="POST"><input type="image" src="car_images/rim1.png" name="rim1" value="rim1" onclick="submit-form()"/></form>');
echo('<form action="car1rim.php" method="POST"><input type="image" src="car_images/rim2.png" name="rim2" value="rim2" onclick="submit-form()"/></form>');
echo('</table><br/>');
}




if($_SESSION['color']=="red")
{
echo('<h2>Select Rim :</h2><br/>');
echo('<table border="0" cellspacing="5"><tr><td>');

if(  (!(isset($_POST['rim1']))) && (!(isset($_POST['rim2']))) )
{
echo('<div id="car"><image src="car_images/honda civic-red-rim1.jpg"></div></td>');
$_SESSION['rim']="rim1";
}

if(isset($_POST['rim1']))
{
echo('<div id="car"><image src="car_images/honda civic-red-rim1.jpg"></div></td>');
$_SESSION['rim']="rim1";
}

if(isset($_POST['rim2']))
{
echo('<div id="car"><image src="car_images/honda civic-red-rim2.jpg"></div></td>');
$_SESSION['rim']="rim2";
}

echo('<td><form action="car1rim.php" method="POST"><input type="image" src="car_images/rim1.png" name="rim1" value="rim1" onclick="submit-form()"/></form>');
echo('<form action="car1rim.php" method="POST"><input type="image" src="car_images/rim2.png" name="rim2" value="rim2" onclick="submit-form()"/></form>');
echo('</table><br/>');
}


?>
<a href="car1final.php"><img border="0" src="car_images/next.png" /></a>
</font>


<h2><a href="../car_customization/car1color.php" target="_parent" > Go Back</a></h2>

</center>
</body>