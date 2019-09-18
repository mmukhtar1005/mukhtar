<!DOCTYPE html>
<?php 
session_start();
if(isset($_SESSION["loggedin"]))
{   
  header("Location:index.html");
}
?>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>The Rafi Sweets and Restaurant </title>
  <meta name="description" content="The Rafi Sweets  shop is an online sweet shop established in 1995 in Sirsi, Sambhal, Moradabad, Uttar Pradesh. It is the only online sweet shop in the town.">
  <meta name="keywords" content="Online sweet shop, Online Restaurant,Signup, for a new account,Online tea shop, Gulam Sabir, Gulam Sabir Restaurant, gulamsabirrestaurant.com, online sweet shop sersee ,Online sweet shop in Moradabad">
  <meta name="author" content="Mohd Mukhtar">

<title>Sign Up Form</title>
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
<body style="background:url(img/sweet_banner.jpg) no-repeat";>

<div class="container">   <!--Sign up form Validate forms-->
<div class="col-lg-2"><a href="index.php" style="color:#07DCDF;font-weight:bolder;font-size:16px;">Back to home</a></div>
<div class="col-lg-8">
<div class="jumbotron" style="margin-top:10px;">
<h3 class="logo">The Rafi Sweets </h3><h3>Please Enter your details</h3><br/>

<form action="signup.php" name="form1" id="form1" method="post">
<div class="form-group">
<input type="text" class="form-control" placeholder="Enter your name" required id="uname" name="uname" maxlength="50">
</div>

<div class="form-group">
<input type="email" class="form-control" placeholder="Enter your email " required id="email" name="email" maxlength="50">
</div>

<div class="form-group">
<input type="password" class="form-control" placeholder="Enter Password " required id="password" name="password" maxlength="50">
</div>

<div class="form-group">
<input type="password" class="form-control" placeholder="Re-type Password " required id="repassword" name="repassword" maxlength="50">
</div>

<div class="form-group">
<input type="text" class="form-control" placeholder="Enter mobile number " required id="mobile" name="mobile" maxlength="10">
</div>

<div class="form-group">
<input type="text" class="form-control" placeholder="Enter Address" ="true" required id="address1" name="address1">
</div>

<div class="form-group">
<input type="text" class="form-control" placeholder="Address Line 2(optional) " id="address2" name="address2">
</div>

<div class="form-group">
<input type="text" class="form-control" placeholder="Enter City "  id="city" required name="city" maxlength="50">
</div>

<div class="form-group">
<input type="number" class="form-control" placeholder="Enter Pincode "  id="pincode" required name="pincode" maxlength="50">
</div>

<div class="form-group">
<input type="text" class="form-control" placeholder="Enter State "  id="state" required name="state" maxlength="50">
</div>

<div class="checkbox"> 
<label>
<input type="checkbox"  id="check" name="check" required>
I'm not a robot
</label>
</div>

<div class="checkbox">
<label>
<input type="checkbox"  id="condition" name="condition" required>
I agree to all the terms and conditions.
</label>
</div>


<button type="submit" class="btn btn-primary form-control">Sign Up</button>

<label>
<a href="login.php" id="signup">Already registered? / click here to login</a>
</label>
</form>
</div>
</div>

  <!-- footer -->
  <footer class="footer text-center">
    <div class="footer-top">
      <div class="row">
        <div class="col-md-offset-3 col-md-6 text-center">
          <div class="widget">
            <h4 class="widget-title" style="color:#030144;margin-top:30px;"><a href="index.php">The Rafi Sweets and Restaurant</a></h4>
            <address>Sirsi Sambhal<br>Uttar Pradesh, </address>
            <div class="social-list">
              <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            </div>
            <p class="copyright clear-float">
              &copy; Rafi Sweets & Restaurant. All Rights Reserved
              <div class="credits">
                This Site Designed and Maintained by <a href="http://www.mohdmukhtar.co.in/">Mohd Mukhtar & Mohd Mukhtar</a href="tel:+917895891699"><a> +91-7895891699</a>
              </div>
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- / footer -->	



<script src="js/signup_validation.js" type="text/css">
</script>
<script type="text/javascript">
$(document).ready(function(){
$(":submit").attr('disabled', true);
$(":submit").css({"color" : "black"});

  $("#condition").change(function() {
        if($(this).is(":checked") && $("#check").is(":checked"))
        $(":submit").attr("disabled",false);
		else
		$(":submit").attr("disabled",true);
    }); 
	
	$("#check").change(function(){
	   if($(this).is(":checked") && $("#condition").is(":checked"))
	    $(":submit").attr("disabled", false);
		else
		$(":submit").attr("disabled", true);
	});

	$("#mobile").focusout(function(){
	  var mob= $("#mobile").val();
     $.post('ajax_req.php',{'mobile' : mob},function(data, status){
	   if(data == 1)
	   {
	     $(":submit").hide();
		 alert("Mobile number is already in use");
	   }
	   else{
		   $(":submit").show();
	   }
	 });
	
   });
   
  /* 	$("#email").focusout(function(){
	  var email= $("#email").val();
     $.post('ajax_req.php',{'email' : email},function(data, status){
	   if(data == 1)
	   {
	     $(":submit").attr("disabled","disabled");
		 alert("Email Id is already in use");
	   }
	 });
	
   });
   */
	
});
</script>

<script type="text/javascript">

function validate()
{
   var name=document.getElementById("uname").value;
   var password=document.getElementById("password").value;
   var repassword=document.getElementById("repassword").value;
   var email=document.getElementById("email").value;
   var mobile=document.getElementById("mobile").value;
   var address1=document.getElementById("address1").value;
   var address2=document.getElementById("address2").value;
   var city=document.getElementById("city").value;
   var pincode=document.getElementById("pincode").value;
   var state=document.getElementById("state").value;
   
   if(password!=repassword)
   {
      alert("Password and confirm password must match!!");
	  $(":submit").attr('disabled','disabled');
	  return false;
   }
   
   //length of name
   if(name.trim()!="")
   {
     var f = validatetext(name);
	 return f;
   }
   
   if(city.trim()!="")
   {
     var f = validatetext(city);
	 return f;
   }
   
   
   if(name.trim()=="" || password.trim()=="" || repassword.trim()=="" || email.trim()=="" || mobile.trim()=="" || address1.trim()=="" || city.trim()=="" || pincode.trim()=="" || state.trim()=="")
   {
   alert("All fields are required");
   return false;
   }
   
  if(mobile.trim()!="")
   {
       var f = true;
       var l = mobile.length;
	   for(var i=0;i<l;i++)
	   {
	      if(mobile.charCodeAt(i)>=48 && mobile.charCodeAt(i)<=57 && l==10)
		  continue;
		  else
		  f = false;
	   }
	   
	   if(f==false)
	   {
	     alert("Enter a valid mobile number");
	   }
	   return f;
   }
}


function validatetext(name)
{

       var f = true;
       var l = name.length;
	   for(var i=0;i<l;i++)
	   {
	      if(name.charCodeAt(i)>=65 && name.charCodeAt(i)<=90 || name.charCodeAt(i)>=97 && name.charCodeAt(i)<=122 || name.charCodeAt(i)==32)
		  continue;
		  else
		  f = false;
	   }
	   
	   if(f==false)
	   {
	     alert("Enter a valid name");
	   }
	   return f;
}
</script>


</body>

</html>
