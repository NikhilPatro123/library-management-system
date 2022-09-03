<?php
include('HeaderMaster2.php');
?><head>
<link href="css/formcssfiles.css" type="text/css" rel="stylesheet" />
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<script>

<script type="text/javascript">
function numbersonly(e){
var unicode=e.charCode? e.charCode : e.keyCode
if (unicode!=8){ //if the key isn't the backspace key (which we should allow)
if (unicode<48||unicode>57) //if not a number
return false //disable key press
}
}
</script>
</head>

<div id="page-wrapper" >
    <div id="page-inner">
           <h3>Pin Report</h3>   
            <hr />
             <table  class="table table-striped table-bordered table-hover">
	 
    <tr> 
     <th>Date</th>
     <th>Pin No</th>
	 <th>Comments </th>
	 <th>Status</th>
	 <th>Customer Id </th>
	 <th>Name</th>
     <th>Active</th>
	</tr>

   <?php
               include('../MasterConnection.php');
		$result = mysql_query("SELECT ID,DateofSend,PinNo,Comments1,Activestatus, Customerid,CustomerName  FROM SendPins where RequestCustomerid='$login_session;' and pinactive='No'");
		
		while($row = mysql_fetch_array($result))
		{
			   echo"<tr>";
        	       echo "<td >".$row['DateofSend']." </td>";
            	   echo "<td >".$row['PinNo']." </td>";                      
               	   echo "<td >".$row['Comments1']."</td>";
               	   echo "<td >".$row['Activestatus']."</td>";
                   echo "<td >".$row['Customerid']."</td>";
                   echo "<td >".$row['CustomerName']."</td>";                             	  
		   	       echo "<td ><a href='PinRegister.php?PinNo=".$row['PinNo']."'><img src='images/updaterecord.png'></a></td>";			   
		       echo"</tr>";
}
mysql_close($con);

?> 
                                                  
</table>

    </div>
</div> 	
<?php
include('FooterMaster.php');
?>

