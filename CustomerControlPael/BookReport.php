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
           <h3>Report</h3>   
            <hr />
             <table  class="table table-striped table-bordered table-hover">
	 
    <tr>  <table  class="table table-striped table-bordered table-hover">
	 
	 <tr> 
	  <th>Book Code</th>
	  <th>NAME</th>
	  <th>AUTHOR</th>
	  <th>PUBLISHER</th>
	  <th>COST</th>
	  <th>CATEGORY</th>
	  <th>PAGES</th>
	  <th>DATE</th>
	 </tr>
 
	<?php
				include('../MasterConnection.php');
		 $result = mysql_query("SELECT *   FROM BookEntry ");
		 
		 while($row = mysql_fetch_array($result))
		 {
				echo"<tr>";
					echo "<td >".$row['BOOKCODE']." </td>";
					echo "<td >".$row['bookname']." </td>";                      
					   echo "<td >".$row['AUTHORNAME']."</td>";
					   echo "<td >".$row['PUBLISHER']."</td>";
					echo "<td >".$row['BOOKCOST']."</td>";
					echo "<td >".$row['categorytype']."</td>";
					echo "<td >".$row['NUMBEROFPAGES']."</td>";
					echo "<td >".$row['DATEOFENTRY']."</td>";
				  
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

