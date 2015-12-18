<body bgcolor="#cbccc4">
<center>
<font color="white">
<?php
$car_name="Honda Civic";

if(!(isset($_POST['change_color'])))
{
echo('<div id="car"><image src="car_images/honda-civic-hybrid-2008.jpg"></div>');
}

/*if(isset($_POST['change_color']))
{
echo('<h2>Select Color :</h2><br/>');
echo('<table border="1"><tr><td>');
echo('<div id="car"><image src="car_images/honda-civic-hybrid-2008.jpg"></div></td>');

echo('<td><form action="car1color.php" method="POST"><input type="image" src="car_images/black.png" name="black" value="black" onclick="submit-form()"/></form>');
echo('<form action="car1color.php" method="POST"><input type="image" src="car_images/blue.png" name="blue" value="blue" onclick="submit-form()"/></form>');
echo('<form action="car1color.php" method="POST"><input type="image" src="car_images/red.png" name="red" value="red" onclick="submit-form()"/></form></td></tr>');
echo('</table>');
exit();
}*/

?>

<form action="car1color.php" method="POST"><input type="submit" value="Change Color" name="change_color"></form>
</font>
<h2><a href="../car_customization/car_index.php" target="_parent" > Go Back</a></h2>
</center>
</body>