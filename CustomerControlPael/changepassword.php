<?php
include('HeaderMaster2.php');
?>

<head>
<link href="css/tablecss.css" rel='stylesheet' type='text/css' />
</head>
<div id="page-wrapper" >
    <div id="page-inner">
        <h3>Change Password</h3>   
        <hr />

 <form action="PasswordCon.php" method="post" >

		   
    <table class="tg">
         <tr><th>Enter Old Password</th> <td><input type="password" name="oldPassword" /></td></tr>
         <tr> <th>Enter New Password</th> <td><input type="password" name="Password" /></td></tr>
         <tr><th>Enter Re- Password</th> <td><input type="password" name="rePassword" /></td></tr>
         <tr><th><input type="hidden" name="sessionvalue" value="<?php echo  $login_session ?>" /></th> <td><input type="submit" /></td></tr>
    </table>
    </form>	

    </div>
</div> 	
<?php
include('FooterMaster.php');
?>

