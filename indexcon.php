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
            
            // Register Customer 
         
            include('MasterConnection.php');           
            $Tdate = date("Y-m-d");
            $Active="Yes";                        
            $sql="INSERT INTO CustomerReg(CustomerName, vmailid, vcontact, Dateofreg, Active)
            VALUES ('$_POST[CustomerName]', '$_POST[vmailid]', '$_POST[vcontact]', '$Tdate', '$Active')";
            
            if (!mysql_query($sql,$con))
            {
                die('Error in Storing  CustomerRegistration : ' . mysql_error());
            }
            mysql_close($con);
             
             
           echo '<script>';
           echo 'alert("Successfully Registered \n Welcome  Customer ID is your Phone Number");';
           echo 'location.href="Customerlogin.php"';
           echo '</script>';
          
      }


?>