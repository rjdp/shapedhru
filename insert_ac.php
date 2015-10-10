<?php

$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="letshelpher"; // Database name
$tbl_name="signup"; // Table name

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// Get values from form
if(isset($_POST)){
$uname=$_POST['uname'];

//$lastname=$_POST['lastname'];

$email=$_POST['email'];

//$country=$_POST['country'];
//$address=$_POST['address'];

$pwd=$_POST['pwd'];

// Insert data into mysql
$sql="INSERT INTO $tbl_name(username, email,password)VALUES('$uname','$email','$pwd')";
$result=mysql_query($sql);
}
// if successfully insert data into database, displays message "Successful".
if($result){
echo "Successful";
echo "<BR>";
echo "<a href='Login.html'>Back to Login page</a>";
}

else {
echo "ERROR";
}
?>

<?php
// close connection
mysql_close();
?>