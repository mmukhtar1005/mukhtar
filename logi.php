<?php 
session_start();
if(isset($_SESSION["loggedin"]))
{   
  header("Location:index.php");
}
?>
<html>
<head>
<meta name="viewport"
content="width=device-width,initial-scale=1.0">
<title>Login Form</title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Libre+Barcode+39+Extended+Text" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<style>
.logo{
font-family: 'Libre Barcode 39 Extended Text', cursive;
}
</style>
</head>
<body style="background:url(img/sweet_banner.jpg);">


<div class="container">   <!--Login form-->
<div class="col-lg-4"><a href="index.php" style="color:#07DCDF;font-weight:bolder;font-size:16px;">Back to home</a></div>
<div class="col-lg-4">
<div class="jumbotron" style="margin-top:150px;">
<h3 class="logo">The Rafi Sweets</h3><h3>Please Login</h3><br/>

<form action="login.php" method="post" name="login" onsubmit="return validate()">
<div class="form-group">
<input type="email" class="form-control" placeholder="Enter your email" name="email" required id="email">
</div>

<div class="form-group">
<input type="password" class="form-control" placeholder="Enter Password " name="password" required id="password">
</div>

<div class="checkbox"> 
<label>
<input type="checkbox">
Remember Me
</label>
</div>

<div id="progress"><a href="forgot.html">Forgot Password?</a></div>

<button type="submit" class="btn btn-primary form-control" style="margin-top:20px;">Log In</button>

<label>
<a href="sign.php" id="signup">Not a registered user? / click here to signup</a>
</label>
</form>
</div>
</div>


<script type="text/javascript">
function validate()
{
   var name=document.getElementById("uname").value;
   var password=document.getElementById("password").value;
   
   if(name.trim()=="" || password.trim()=="")
   {
   alert("All fields are required");
   return false;
   }
}
</script>
</body>

</html>
