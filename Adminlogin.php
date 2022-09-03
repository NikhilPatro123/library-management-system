<?php
include('Adminlogincon.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){

header("location: Administrator/CustomerHome.php");
}
?>
<!DOCTYPE html>
<html>
<head>
 <script type="text/javascript">
    
function validateForm() 
{
   
 
   	if((document.f1.username.value=="") )
    {
      alert("Invalid Administrator ID");
      document.f1.username.focus();
      return false;
    }
	if((document.f1.password.value=="") )
    {
      alert("Invalid Password");
      document.f1.password.focus();
      return false;
    }
	
}
</script>
</head>
<style>
body{
background-image:url(images/CVeZM6W.jpg);
background-color:#CCCCCC;
}
/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}
.button1 {
    background-color:#FF0000;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
	font-size:18px;
	
	

}

img.avatar {
    width: 40%;
    border-radius: 5%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 30%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
.dv3{
margin:0 auto;
width:450px;
height:400px;
margin-top:200px;
}
</style>
<body onLoad="document.getElementById('id01').style.display='block'">
<div class="dv3">
<h2 style="color:#FFFFFF">Administrator Login Control Only...</h2>

<p style="color:#FFFFFF">  Your IP Address 

</p>
<button onClick="document.getElementById('id01').style.display='block'" style="width:auto;" class="button1">Proceed Advance</button>
<button  style="width:auto;" onClick="window.location.href='http://www.aceit.in'">Back to Safety</button>
<p style="color:#FFFFFF">Your connection is Secure..</p>
</div>
<div id="id01" class="modal">
  <form  action=""  method="post" class="modal-content animate" onSubmit="return validateForm()">


 
    <div class="imgcontainer">
      <span onClick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    <B> Administrator Control Panel</B>
    </div>

    <div class="container">
      <label><b>Administrator ID</b></label>
      <input id="name" name="username" placeholder="username" type="text"    >

      <label><b>Password</b></label>
      <input id="password" name="password" placeholder="**********" type="password"     >
        
      <button name="submit" type="submit">Login</button>
      <input type="checkbox" checked="checked"> Remember me
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onClick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw"> <a href="#">Admin</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>

