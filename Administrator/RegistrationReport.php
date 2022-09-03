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
           <h3>Registration Report</h3>   
            <hr />
             <table  class="table table-striped table-bordered table-hover">
	 
    <tr> 
     <th>Name</th>
     <th>Mail ID</th>
	 <th>Contact No </th>
	 <th>Date</th>
	 <th>Library Card </th>
	</tr>

   <?php
               include('../MasterConnection.php');
		$result = mysql_query("SELECT *   FROM studentregistration ");
		
		while($row = mysql_fetch_array($result))
		{
			   echo"<tr>";
        	       echo "<td >".$row['sname']." </td>";
            	   echo "<td >".$row['mailid']." </td>";                      
               	   echo "<td >".$row['Contno']."</td>";
               	   echo "<td >".$row['DateofRegd']."</td>";
                   echo "<td >".$row['Librarycardno']."</td>";
                 
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

