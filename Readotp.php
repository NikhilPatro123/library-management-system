<?php
ob_start();
?>
  <?php
                include('MasterConnection.php');       
                $result1 = mysql_query("SELECT max(ID) as ID FROM StudentRegistration");		
                while($row = mysql_fetch_array($result1))
                {
                    $maxvallue=$row['ID'];
                    if($maxvallue==0)
                    {
                        $maxvallue=100;
                    }
                }
                $maxvallue=$maxvallue+1;     
                mysql_close($con);


               include('MasterConnection.php');
               
                 $Tdate = date("Y-m-d");    
                 $Librarycardno=$maxvallue;

                $sql="INSERT INTO StudentRegistration(sname, mailid, Contno, DateofRegd, Librarycardno,password, Security_fee)
                VALUES ('$_POST[sname]','$_POST[mailid]','$_POST[Contno]','$Tdate','$Librarycardno', '$_POST[password]', '500' )";

                if (!mysql_query($sql,$con))
                {
                        die('Error in Storing : ' . mysql_error());
                }
             
                
                mysql_close($con);
                echo '<script language="javascript">';
                echo 'alert("Your Information Register Successfuly.. \n "); location.href="index.php"';
                echo '</script>';
				
              
?>

<?php
ob_end_flush();
?>
    
 