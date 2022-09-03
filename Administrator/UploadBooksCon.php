<?php
ob_start();
?>
<?php
 

 include('../MasterConnection.php');       
 $result1 = mysql_query("SELECT max(BOOKCODE) as BOOKCODE FROM BookEntry");		
 while($row = mysql_fetch_array($result1))
 {
     $maxvallue=$row['BOOKCODE'];
     if($maxvallue==0)
     {
         $maxvallue=100;
     }
 }
 $maxvallue=$maxvallue+1;     
 mysql_close($con);



$targetfolder = "../Pdffiles/"; 
$dirPath = "../Pdffiles/";


$targetfolder = $targetfolder . basename( $_FILES['file']['name']) ;
$ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION); 
$xmlFile=basename( $_FILES['file']['name']);

$pdfpath="Pdffiles/".$xmlFile;
if(move_uploaded_file($_FILES['file']['tmp_name'], $targetfolder))
{
    $Tdate = date("Y-m-d");    
    include('../MasterConnection.php');
    $sql="INSERT INTO BookEntry(BOOKCODE, bookname, AUTHORNAME, PUBLISHER, BOOKCOST,
     categorytype, NUMBEROFPAGES, bookpdf, DATEOFENTRY)
    VALUES ('$maxvallue','$_POST[bookname]', '$_POST[AUTHORNAME]', '$_POST[PUBLISHER]', '$_POST[BOOKCOST]',
     '$_POST[categorytype]', '$_POST[NUMBEROFPAGES]',  '$pdfpath', '$Tdate')";    
    if (!mysql_query($sql,$con))
    {
        die('Error in Storing : ' . mysql_error());
    } 
    mysql_close($con);
    echo '<script language="javascript">';
    echo 'alert("Upload successfully"); location.href="UploadBooks.php"';
    echo '</script>'; 
}
else
{
    echo '<script language="javascript">';
    echo 'alert("Unable to Upload File \n Select Proper extension file or File Size Larger"); location.href="UploadBooks.php"';
    echo '</script>'; 
}
 
 ?>
<?php
ob_end_flush();
?>
