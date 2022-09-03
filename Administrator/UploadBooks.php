<?php
include('HeaderMaster2.php');
?>

<head>
<link href="css/tablecss.css" rel='stylesheet' type='text/css' />
</head>
<div id="page-wrapper" >
    <div id="page-inner">
        <h3>Upload Books</h3>   
        <hr />

 <form action="UploadBooksCon.php" method="post" enctype="multipart/form-data" >

		   
    <table class="tg">
         <tr><th>Book Name</th> <td><input type="text" name="bookname"  required=""/></td></tr>
         <tr> <th>Author Name</th> <td><input type="text" name="AUTHORNAME"  required=""/></td></tr>
         <tr><th>Publisher</th> <td><input type="text" name="PUBLISHER"  required=""/></td></tr>
         <tr><th>Cost</th> <td><input type="text" name="BOOKCOST" required="" /></td></tr>
         <tr> <th>Book Category</th> <td><input type="text" name="categorytype" required="" /></td></tr>
         <tr><th>No of Pages</th> <td><input type="text" name="NUMBEROFPAGES" required="" /></td></tr>
         <tr><th>Upload Pdf</th> <td><input type="file" name="file"  required=""  ></td></tr>
                         
         <tr>
             <th>
                 <input type="hidden" name="sessionvalue" value="<?php echo  $login_session ?>" />
            </th> <td><input type="submit" /></td></tr>
    </table>
    </form>	

    </div>
</div> 	
<?php
include('FooterMaster.php');
?>

