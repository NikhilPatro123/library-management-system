<?php
ob_start();
?>
  <?php
               include('../MasterConnection.php');

                
                $sql="update admintab set password='$_POST[Password]' where username='$_POST[sessionvalue]'";

                if (!mysql_query($sql,$con))
                {
                        die('Error in Storing : ' . mysql_error());
                }
             
                
                mysql_close($con);
                echo '<script language="javascript">';
                echo 'alert("Securit Update Successfully..."); location.href="CustomerHome.php"';
                echo '</script>';
				 
              
?>

<?php
ob_end_flush();
?>
