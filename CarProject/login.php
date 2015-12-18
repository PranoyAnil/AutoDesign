<?php
session_start();
include 'webconfig.php';
?>

<!DOCTYPE HTML>
<html>
<head>
<title>The Auto-Tuning Website Template | Home :: w3layouts</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='//fonts.googleapis.com/css?family=Anaheim' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--slider-->
<script type="text/javascript" src="js/modernizr.custom.53451.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.gallery.js"></script>
<script type="text/javascript">
		$(function() {
		$('#dg-container').gallery({
		autoplay	:	true
	});
});
</script>
</head>
<body>
<div class="wrap">
<div class="header">
	<div class="logo">
		<h1><a href="index.php"><img src="images/adlogo.png" alt=""></a></h1>
	</div>
	<div class="h_right">
        
	<div class="header_top_right">
	   <div class="LoginSection">
	   </div>

        <!-- Shopping cart -->
			   			 <!--   <div class="shopping_cart">
				    		<div class="cart_img">
				    	<img src="images/header_cart.png">
				    	</div>
						<div class="cart">
							<a href="#" title="View my shopping cart" rel="nofollow">
								<span class="cart_title">Cart</span>
								<span class="no_product">(empty)</span>
							</a>
						</div>
				     </div> -->
			 <div class="clear"></div>
         <div class="clear"></div>
		 </div>
	</div>
	<div class="clear"></div>
	<div class="h_main">
		<ul class="nav">
		<?php
		//if the user is logged in and is a normal user
		if(isset($_SESSION['user']) && $_SESSION['utype'] == "user"){
	        echo('<li class="active"><a href="index.php">Home</a></li>');
			echo('<li><a href="./car_customization/car_index.php">Customize</a></li>');
	        echo('<li><a href="purchase.php">Purchase</a></li>');
	        echo('<li><a href="contact.php">Contact</a></li>');
		}//if the user is logged in and is a modifier
		else if(isset($_SESSION['user']) && $_SESSION['utype'] == "modifier"){
	        echo('<li class="active"><a href="index.php">Home</a></li>');
			echo('<li><a href="modifier.php">See Modification Requests</a></li>');
	        echo('<li><a href="purchase.php">Purchase</a></li>');
	        echo('<li><a href="contact.php">Contact</a></li>');
		}//if the user is logged in and is an admin
		else if(isset($_SESSION['user']) && $_SESSION['utype'] == "admin"){
	        echo('<li class="active"><a href="index.php">Home</a></li>');
			echo('<li><a href="./car_customization/car_index.php">Customize</a></li>');
			echo('<li><a href="modifier.php">See Modification Requests</a></li>');
	        echo('<li><a href="purchase.php">Purchase</a></li>');
	        echo('<li><a href="contact.php">Contact</a></li>');
			echo('<li><a href="adminPanel.php">Edit Purchase Data</a></li>');
		}//if the user is not logged in at all
		else{
	        echo('<li class="active"><a href="index.php">Home</a></li>');
	        echo('<li><a href="purchase.php">Purchase</a></li>');
	        echo('<li><a href="contact.php">Contact</a></li>');
		}
		
		?>
	     </ul>
	<div class="clear"></div>       
	</div>




</div>



<?php

/* if(isset($_SESSION['user'])!="")
{
    header("Location: index.php");
} */
if(isset($_POST['submit']))
{
    $username = mysql_real_escape_string($_POST['username']);
    $password = mysql_real_escape_string($_POST['pass']);
    $res=mysql_query("SELECT * FROM user_details WHERE user_name='$username'");
    $row=mysql_fetch_array($res);
    if($row['user_name'] == $username && $row['password'] == $password )
    {
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['user'] = $row['user_name'];
		$_SESSION['utype'] = $row['Category'];
		header("Location: index.php");
    }
    else
    {
		
    }
}
?>

<div class="main">
<div class="main1">
				<form class="form-4" method="post">
				    <h1>Login</h1>
				    <p>
				        <label for="login">Username or email</label>
				        <input type="text" name="username" placeholder="Username or email" required>
				    </p>
				    <p>
				        <label for="password">Password</label>
				        <input type="password" name='pass' placeholder="Password" required> 
				    </p>

				    <p>
				        <input type="submit" name="submit" value="Submit">
                        
                        <a href="Register.php" name="register" value="Register">Register</a>

				    </p>       
				</form>
</div>
</div>
<div class="footer">
	<div class="f_left">
		<div class="f_nav">
			<ul>
		        <li><a href="">about us</a></li>
				<li><a href="">site map</a></li>
				<li><a href="">customer Service</a></li>
				<li><a href="">search terms</a></li>
				<li><a href="">contact us</a></li>
		     </ul>
		</div>
		<div class="copy">
				<p class="w3-link">© 2015 Auto-Design . All rights reserved | Design by Centennial college group</p>
			</div>
		</div>
	<div class="social-icons">
	   		  	<ul>
	 			  <li class="icon1"><a href="#" target="_blank"> </a></li>
			      <li class="icon2"><a href="#" target="_blank"> </a></li>
			      <li class="icon3"><a href="#" target="_blank"> </a></li>
			      <li class="icon4"><a href="#" target="_blank"> </a></li>
			      <div class="clear"></div>
		     </ul>
	 </div>
	 <div class="clear"></div>
</div>
</div>
</body>
</html>
