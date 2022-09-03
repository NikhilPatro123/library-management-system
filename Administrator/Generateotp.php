<?php
include('HeaderMaster2.php');
?>
<div id="page-wrapper" >
    <div id="page-inner">
        <h3>Generate OTP</h3>   
        <hr />
<P><font color="red">Note :</font>Be Sure before Create OTP , One Time Pins can generate <b>100</b><br />
               after use all pins to create new pins.</p>
               <p>Wait while Generate pins , This process take some Time , Depends on your Internet Speed : <img src='images/synchronized1.gif' height="70" width="70"></p>
            <form action="Generateotp.php" class="login" name="f1" method="post" onSubmit="return validateForm()">
                <div class="col-3">
                   
                    <label>
                    <input type="submit" value="Submit" name="submit"  class="btn btn-success"/> 
                    </label>
                </div>          
            </form>


    </div>
</div> 	
<?php
include('FooterMaster.php');
?>

<?php

if(isset($_POST['submit']))
{
    
    
    $characters = array(
    "A","B","C","D","E","F","G","H","J","K","L","M",
    "N","P","Q","R","S","T","U","V","W","X","Y","Z",
    "1","2","3","4","5","6","7","8","9");
    $keys = array();
    $random_chars="";
    $u=0;
    $c=1;
    while($u<=100)
    {
        
        // read  max slno from pin table.................................................
        include('../MasterConnection.php');
        $result = mysql_query("SELECT max(slno) as maxid FROM PinMaster ");    
        while($row = mysql_fetch_array($result))
        {    
            $maxvallue=$row['maxid'];
            if($maxvallue==0)
            {
                $maxvallue=0;
            }
        }
        $maxvallue=$maxvallue+1;
        mysql_close($con);        
       //........................................................ 
        
        
        while(count($keys) < 4) 
        {    
            $x = mt_rand(0, count($characters)-1);
            if(!in_array($x, $keys))
            {
                $keys[] = $x;
            }
            $x="";
        }
        foreach($keys as $key)
        {    
            $random_chars .= $characters[$key];    
        }
        $PinNo=$random_chars.$maxvallue;
        $Activestatus="No";
        $Customerid="";
        $mobileip="";
        // store pin master....................................
        include('../MasterConnection.php');        
        $sql="INSERT INTO OtpMaster(slno, OtpNo,  Activestatus,Customerid)
        VALUES ('$maxvallue','$PinNo','$Activestatus','$Customerid')";
        if (!mysql_query($sql,$con))
        {
            die('Error in Storing (PinMaster): ' . mysql_error());
        }
        mysql_close($con);
                
        //-------------------------------------------------------
        
        
        $c=$c+1;
        $u=$u+1;
        $random_chars="";
        foreach ($keys as $i => $value)
        {
            unset($keys[$i]);
        }
    }
    
    
    echo '<script language="javascript">';
    echo 'alert("OTP Create successfully"); location.href="Generateotp.php"';
    echo '</script>';
    
     
    
    
}

?>