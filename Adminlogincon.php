<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "******_Username or Password is invalid";
}
else
{
include('MasterConnection.php');
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];

$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
// Selecting Database
$db = mysql_select_db("libmanadisha", $con);
// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("select * from admintab where password='$password' AND username='$username'", $con);
$rows = mysql_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session
header("location: Administrator/CustomerHome.php"); // Redirecting To Other Page
} else {
echo '<script language="javascript"> alert("Invalid Administrator Id Or Password"); </script> ';
echo $error;

}
mysql_close($con); // Closing Connection
}
}
?>