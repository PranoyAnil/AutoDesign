<?php
session_start();

?>


<body bgcolor="#cbccc4">
<center>
<font color="white">
<h2>Your Final Customized Car </h2></br>
<?php
if($_SESSION['color']=="black" && $_SESSION['rim']=="rim1")
{
echo('<image src="car_images/honda civic t1-black-rim1.jpg">');
$url="honda civic t1-black-rim1.jpg";
}

if($_SESSION['color']=="black" && $_SESSION['rim']=="rim2")
{
echo('<image src="car_images/honda civic-black-rim2.jpg">');
$url="car_images/honda civic-black-rim2.jpg";
}

if($_SESSION['color']=="blue" && $_SESSION['rim']=="rim1")
{
echo('<image src="car_images/honda civic-blue-rim1.jpg">');
$url="car_images/honda civic-blue-rim1.jpg";
}

if($_SESSION['color']=="blue" && $_SESSION['rim']=="rim2")
{
echo('<image src="car_images/honda civic-blue-rim2.jpg">');
$url="car_images/honda civic-blue-rim2.jpg";
}

if($_SESSION['color']=="red" && $_SESSION['rim']=="rim1")
{
echo('<image src="car_images/honda civic-red-rim1.jpg">');
$url="car_images/honda civic-red-rim1.jpg";
}

if($_SESSION['color']=="red" && $_SESSION['rim']=="rim2")
{
echo('<image src="car_images/honda civic-red-rim2.jpg">');
$url="car_images/honda civic-red-rim2.jpg";
}

?>

    <?php

    if(isset($_POST['submit']))
    {
        $servername = "localhost";
        $username = "root";
        $password = "";

        // Create connection
        $conn = mysql_connect($servername, $username, $password);

        if (!$link = mysql_connect($servername,$username, $password)) {
            echo 'Could not connect to mysql';
            exit;
        }

        if (!mysql_select_db('autodesign', $link)) {
            echo 'Could not select database';
            exit;
        }



        $selected = mysql_select_db("autodesign",$conn) 
          or die("Could not select examples");


        $user = $_SESSION['user']; 
        $userid = $_SESSION['user_id'];
        $sql1 = "Insert into customized_images(user_id,image) VALUES ('".$userid."','".$url."')";
        $query1 = mysql_query($sql1) or die(mysql_error());
        echo '<script language="javascript">';
        echo 'alert("Car has been saved to your profile. Modifier will contact you for further details")';
        echo '</script>';

    }

        ?>


</font>



<h2><a href="../car_customization/car1rim.php" target="_parent" > Go Back</a></h2>

<h2><a href="../car_customization/car_index.php" target="_parent" >Select other car</a></h2>



<form action="car1final.php" method="POST">
    <h2><input type="submit" name="submit" value="Add modified car" /></h2>

</form>

<h2><a href="../index.php" target="_parent" >Go to HOME</a></h2>



</center>
</body>