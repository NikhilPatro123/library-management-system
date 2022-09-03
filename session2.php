<?php
$connection = mysql_connect("localhost", "root", "");
$db = mysql_select_db("libmanadisha", $connection);


session_start();// Starting Session
$user_check=$_SESSION['login_user'];
$ses_sql=mysql_query("select mailid from studentregistration where mailid='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['mailid'];
if(!isset($login_session)){
mysql_close($connection); // Closing Connection
header('Location: ../index.php'); // Redirecting To Home Page
}
?>