<html>
<head>
<title>Customization</title>

</head><center>
<body>SELECT A CAR :
<form action="get.php" method="POST">
<input type="radio" id="audi" value="bmw" name="car"
onclick="document.getElementById('im').src='cars/audi.jpg'"/>Audi&nbsp

<input type="radio" id="bmw" value="bmw"name="car"
onclick="document.getElementById('im').src='cars/BMW.jpg'"/>BMW
<br>
<input type="submit" value="next" name="next" />
</form>
<img src="cars/audi.jpg" id="im">
</center>
</body>
</html>