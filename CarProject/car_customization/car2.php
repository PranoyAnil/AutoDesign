<body bgcolor="#cbccc4">
<center>
<font color="white">
<?php

if(!(isset($_POST['change_color'])))
{
echo('<div id="car"><image src="car_images/Swift-1.jpg"></div>');
}

?>

<form action="car2color.php" method="POST"><input type="submit" value="Change Color" name="change_color"></form>


</font>


<h2><a href="../car_customization/car_index.php" target="_parent" > Go back</a></h2>

</center>
</body>