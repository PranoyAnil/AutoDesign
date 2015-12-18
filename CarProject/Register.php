
<?php
include 'MasterHeader.php';
?>


<div class="main">
<div class="main1">
				<form class="form-4" method="post">
				    <h1>Register</h1>
				    <p>
				        <label for="login">Username</label>
				        <input type="text" name="uname" placeholder="Username" required>
				    </p>
                    <p>
                        <label for="login">Email ID</label>
                        <input type="text" name="email" placeholder="Email ID" required>
                    </p>
                    <p>
                        <label for="phone">Phone</label>
                        <input type="text" name='phone' placeholder="Phone number" maxlength="10">
                    </p>
				    <p>
				        <label for="password">Password</label>
				        <input name="pass" required="required" placeholder="Password" type="password" id="password" maxlength="15" min="7" />  
				    </p>
                    
                        <label for="Category">Select Category</label>
                    <?php
                       
                    if($_SESSION['user'] == 'Sachet'
                        ){
                             $name = $_SESSION['user'];
                             echo '<select name ="Category">';
                             echo '<option value="user">worked</option>';
                             echo '<option value="modifier">modifier</option>';
                             echo '<option value="modifier">dasd</option>';
                            
			            }
                    ?>
                    <select name ="Category">
                       <option value="user">user</option>
                       <option value="modifier">modifier</option>
                    </select>
                           
                        
                    <p>
				        <label for="password">Confirm Password</label>
				        <input type="password" name='password' placeholder="Confirm Password" id="password_confirm" oninput="check(this)"> 
				    </p>

 

<script language='javascript' type='text/javascript'>
    function check(input) {
        if (input.value != document.getElementById('password').value) {
            input.setCustomValidity('Password Must be Matching.');
        } else {
            // input is valid -- reset the error message
            input.setCustomValidity('');
        }
    }
</script>

				    <p>
				        <input type="submit" name="submit" value="Submit">
				    </p>       
				</form>
    <?php
    include_once 'webconfig.php';

    if(isset($_POST['submit']))
    {
        $uname = mysql_real_escape_string($_POST['uname']);
        $phone = mysql_real_escape_string($_POST['phone']);
        $email = mysql_real_escape_string($_POST['email']);
        //$upass = md5(mysql_real_escape_string($_POST['pass']));
        $Category  =  mysql_real_escape_string($_POST['Category']);
        $upass = mysql_real_escape_string($_POST['pass']);
        if(mysql_query("INSERT INTO user_details(Category,user_name,password,email_id,phone) VALUES('$Category','$uname','$upass','$email','$phone')"))
        {
           
    ?>
        <script>alert('successfully registered.Please login to continue');</script>
        <?php
        }
        else
        {
        ?>
        <script>alert('error while registering you...');</script>
        <?php
        }
    }
        ?>
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
				<p class="w3-link">© 2015 Auto-Design . All rights reserved | Design by Centenniall college group</p>
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

<?php
    
?>