<?php
session_start();
include 'webconfig.php';
?>

<!DOCTYPE HTML>
<html>
<head>
<title>The Auto-Tuning Website Template | Repair :: w3layouts</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='//fonts.googleapis.com/css?family=Anaheim' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<div class="wrap">
<div class="header">
	<div class="logo">
		<h1><a href="index.html"><img src="images/adlogo.png" alt=""></a></h1>
	</div>
	<div class="h_right">
	
	<div class="header_top_right">
	   <div class="LoginSection">
			   	   <?php
				   if(isset($_SESSION['user'])){
					echo '<a href="logout.php"><img src="images/logout.png"  alt="" title="logout" /></a>';
					}else{
					echo '<a href="login.php"><img src="images/loginbtn.png"  alt="" title="login" /></a>';
					}
				   ?>
			   </div>
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
<div class="main">
<div class="main1">
<div class="boxes">
		<h2>List Of parts to checkout for your car.</h2>
		<div class="repair">
		     <section>
				<ul class="lb-album">
				<?php
					$res = mysql_query("SELECT * FROM car_parts");
					$num = 1;
					while($row = mysql_fetch_array($res)){
						echo('<li>');
						echo('<a href="#image-'.$num.'">');
						echo('<img src="images/'.$row['image'].'" alt="">');
						echo('<span> </span>');
						echo('</a>');
						
						echo('<div class="lb-overlay" id="image-'.$num.'">');
						echo('<img src="images/'.$row['image'].'" alt="">');
						echo('<a href="#page" class="lb-close"> </a>');
						echo('</div>');
						
						echo('<p><b style="font-weight:bold">'.$row['name'].'</b></br>'.$row['description'].'</p><p>Price: '.$row['price'].'</p>');
						$num++;
					}
				?>	
				<div class="clear"></div>
				</ul>
			</section>
    </div>
  </div>
</div>
</div>
<div class="footer">
	<div class="f_left">
		<div class="f_nav">
			<ul>
				<li><a href="">site map</a></li>
				<li><a href="">customer Service</a></li>
				<li><a href="">search terms</a></li>
				<li><a href="">contact us</a></li>
		     </ul>
		</div>
		<div class="copy">
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