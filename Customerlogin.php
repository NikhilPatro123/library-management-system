<?php
include('CustomerLoginCon.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){

header("location: CustomerControlPael/CustomerHome.php");
}
?>
<!DOCTYPE HTML>
<html>

<head>
    <title>OTP SYSTEM</title>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <!-- //Meta Tags -->
    <!-- font-awesome-stylesheet -->
    <link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
    <!-- //font-awesome-stylesheet -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <!--fonts-->
    <link href="//fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800" rel="stylesheet">
    <!--//fonts-->
</head>

<body>
    <!-- main-content -->
                <h1>E AUTHENTICATION SYSTEM </h1>
    <div class="main-content-agileits">
        <!-- left-content -->
        <div class="left-text-w3ls">
            <img src="images/sub.jpg" alt="er">
            <h3>USING QR CODE AND OTP</h3>
            <p><a class="fas fa-check" aria-hidden="true"></a>Registration With Opt</p>
            <p><a class="fas fa-check" aria-hidden="true"></a>Message Getting after registration</p>
            <p><a class="fas fa-check" aria-hidden="true"></a>Login with System QR Code Number </p>
            <p><a class="fas fa-check" aria-hidden="true"></a>Best Security System with Client Only </p>

        </div>
        <!-- //left-content -->
        <!-- form -->
        <div class="login-w3l">
            <div class="top-img-agileits-w3layouts">
                <div class="w3_pad">

                    <h2 class="sub-head-w3-agileits">Customer Login</h2>
                   

                    <div class="login-form">
                        <form  action=""  method="post">
                           
							<input type="text" name="mailid"  placeholder="Enter Mail ID" required="" />
                            <input type="password" name="password"  placeholder="Enter Password" required="" />
                                               
                           
                            <div class="w3_sub">
                                <input type="submit" value="Submit" name="submit">
                               
                            </div>
                        </form>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="w3_soc">
                    
                    <div class="footer-social">

                        <ul>
                            <li>
                                <a href="Adminlogin.php">Admin Login  </a>
                            </li>
                            <li>
                                
                                <a href="#">Customer Login</a>
							</a>
                            </li>

                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <!-- //form -->



    <!--// main-content -->
    <!--Copyright-->
    <div class="footer-agileits">
        <p>© 2018  All Rights Reserved | Design by <a href="http://www.aceit.in"> ACE IT</a></p>
    </div>
    <!--//Copyright-->

</body>

</html>
