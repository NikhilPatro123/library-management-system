<?php

        $vcontact=$_POST['vcontact'];
        $otp=$_POST['otp'];
        $Checkotp="0";        
        if($otp=="")
        {
                echo '<script>';
                echo 'alert("Invalid OTP Try Again");';
                echo 'location.href="index.php"';
                echo '</script>';
        }
        else 
        {
            // check otp with database
            include('MasterConnection.php');
            $result = mysql_query("SELECT * FROM OtpMaster where OtpNo='$otp' and  Activestatus='No'");        
            if($row = mysql_fetch_array($result))
            {
                $Checkotp=1;
            }
            mysql_close($con);            
        }
       
        if($Checkotp==1)
        {    
            // update otp no 
            
            include('MasterConnection.php');           
            $sql="UPDATE OtpMaster set Activestatus='Yes', Customerid='$vcontact' where OtpNo='$otp'";
            if (!mysql_query($sql,$con))
            {
                die('Error in otp : ' . mysql_error());
            }
            mysql_close($con);
            
           echo '<script>';          
           echo 'location.href="CustomerLoginBinaryCon.php?vcontact='.$vcontact.' "';
           echo '</script>';
          
      }


?>