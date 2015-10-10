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

//$email=$_POST['email'];

//$country=$_POST['country'];
//$address=$_POST['address'];

$pwd=$_POST['pwd'];

// Insert data into mysql
$sql="SELECT * FROM $tbl_name WHERE username='$uname' and password='$pwd'";

//$sql = "SELECT password FROM signup WHERE username='$uname'";
//$sql="INSERT INTO $tbl_name(username, email,password)VALUES('$uname','$email','$pwd')";
$result=mysql_query($sql);
//echo $result;
//echo "<br>";
}

// if successfully insert data into database, displays message "Successful".
//if($result){
//echo "you are logged in";
//echo "<BR>";
//echo "<a href='page8.html'>Back to main page</a>";
//}

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"
//session_register("myusername");
//session_register("mypassword"); 
//header("location:login_success.php");
echo "you are logged in";
echo "<BR>";
echo "<a href='Main.html'>Back to main page</a>";

}
else {
echo "ERROR";

echo "Wrong Username or Password";
}
?>

<?php
// close connection
mysql_close();
?>