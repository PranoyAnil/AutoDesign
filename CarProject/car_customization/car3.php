<body bgcolor="#cbccc4">
<center>
<font color="white">
<?php
$car_name="Mitsubishi Lancer";

if(!(isset($_POST['change_color'])))
{
echo('<div id="car"><image src="car_images/lancer1.jpg"></div>');
}


?>

<form action="car3color.php" method="POST"><input type="submit" value="Change Color" name="change_color"></form>
</font>
<h2><a href="../car_customization/car_index.php" target="_parent" > Go Back</a></h2>
</center>
</body>