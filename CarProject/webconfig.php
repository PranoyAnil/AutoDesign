<?php


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

//execute the SQL query and return records
$result = mysql_query("SELECT * FROM user_details");


//close the connection
//mysql_close($conn);


?>

