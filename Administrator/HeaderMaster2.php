<?php
include('../session.php');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <title>Library Management System</title>
	<link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/custom.css" rel="stylesheet" /> 
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>   
          
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                                          
                    <a class="navbar-brand" style="color: white;" href="#">Administrator</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li></li>
 
						<li><a href="#" style="color: white;">ID: Administrator</a></li>
                        <li><a href="../Sessionout.php" style="color: white;">Logout</a></li>
                    </ul>
                </div>

            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li><br />
                        <a href="CustomerHome.php"> Dashboard</a>
                    </li>                    
                                        
                    <li><a href="RegistrationReport.php"> Registration Report </a></li>
                    <li><a href="CreateBookMaster.php"> Create Book Master </a></li>
                    <li><a href="CategoryMaster.php"> Category Master </a></li>
                    <li><a href="UploadBooks.php"> Upload Books </a></li>
                    <li><a href="BookReport.php"> Book Report </a></li>
                    <li><a href="changepassword.php"> SECURITY </a></li>  
					<li><a href="../Sessionout.php"> LOGOUT </a></li>
				
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
     
    
   </div>       

     <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
