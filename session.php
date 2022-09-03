<?php
include('MasterConnection.php');

session_start();// Starting Session
$user_check=$_SESSION['login_user'];
$ses_sql=mysql_query("select username from admintab where username='$user_check'", $con);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['username'];
if(!isset($login_session)){
mysql_close($con); // Closing Connection
header('Location: ../index.php'); // Redirecting To Home Page
}
?>