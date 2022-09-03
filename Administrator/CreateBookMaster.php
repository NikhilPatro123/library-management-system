<?php
include('HeaderMaster2.php');
?>

<head>
<link href="css/tablecss.css" rel='stylesheet' type='text/css' />
</head>
<div id="page-wrapper" >
    <div id="page-inner">
        <h3>Create Book Master</h3>   
        <hr />

 <form action="CreateBookMaster.php" method="post" >

		   
    <table class="tg">
         <tr><th>Enter Book Name</th> <td><input type="text" name="bookname" /></td></tr>
         
         <tr><th><input type="hidden" name="sessionvalue" value="<?php echo  $login_session ?>" /></th>
          <td><input type="submit" name="submit" /></td></tr>
    </table>
    </form>	

    </div>
</div> 	
<?php
include('FooterMaster.php');
?>
<?php
    if(isset($_POST['submit']))
    {
        include('../MasterConnection.php');
               
        $Tdate = date("Y-m-d");    
        $Librarycardno=$maxvallue;

       $sql="INSERT INTO BookMaster(bookname)
       VALUES ('$_POST[bookname]' )";

       if (!mysql_query($sql,$con))
       {
               die('Error in Storing : ' . mysql_error());
       }
    
       
       mysql_close($con);
       echo '<script language="javascript">';
       echo 'alert("Your Information Register Successfuly.. \n "); location.href="CreateBookMaster.php"';
       echo '</script>';
       
    }

?>

