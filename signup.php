<?php
session_start();
include "connect.php";
if(isset($_POST["uname"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["mobile"]) && isset($_POST["address1"]) && 
isset($_POST["city"]) && isset($_POST["pincode"]) && isset($_POST["state"]))
{
   if(!empty($_POST["uname"]) && !empty($_POST["email"]) && !empty($_POST["password"]) && !empty($_POST["mobile"]) && !empty($_POST["address1"]) && !empty($_POST["city"]) &&!empty($_POST["pincode"]) &&!empty($_POST["state"]))
   {
	   $con = mysqli_connect($servername, $username , $password , $databasename);
	    if($con)
		{
			$uname = mysqli_real_escape_string($con , filter_var(($_POST["uname"]), FILTER_SANITIZE_STRING));
			$email = mysqli_real_escape_string($con , filter_var(($_POST["email"]), FILTER_SANITIZE_EMAIL));
			$password = mysqli_real_escape_string($con , filter_var(($_POST["password"]), FILTER_SANITIZE_STRING));
			$mobile = mysqli_real_escape_string($con , filter_var(($_POST["mobile"]), FILTER_SANITIZE_STRING));
			$address1 = mysqli_real_escape_string($con , filter_var(($_POST["address1"]), FILTER_SANITIZE_STRING));
			$address2 =mysqli_real_escape_string($con , filter_var(($_POST["address2"]), FILTER_SANITIZE_STRING));
			$city = mysqli_real_escape_string($con , filter_var(($_POST["city"]), FILTER_SANITIZE_STRING));
			$pincode = mysqli_real_escape_string($con , filter_var(($_POST["pincode"]), FILTER_SANITIZE_STRING));
			$state = mysqli_real_escape_string($con , filter_var(($_POST["state"]), FILTER_SANITIZE_STRING));
			$otp = mt_rand(100,99999);
			$verified = 'f';
			//filter var and mysql_real_escape_string , and html entities for preventing sql injection
			//email must be unique also
			//echo 'connected';
			$query = "insert into user_register(user_name , user_email, user_password, user_mobile, user_address1, user_address2, user_city, user_pincode, user_addr_state, user_otp, user_verified) values('$uname' , '$email', '$password', '$mobile', '$address1', '$address2', '$city', '$pincode' , '$state' , '$otp', '$verified')";
			$query_run = mysqli_query($con,$query);
			if($query_run)
			{
				$to = $email;
				$subject="Verification email from gulamsabirrestaurant.com";
				$message="Dear ".$uname."<br/>
				Welcome to the consumer family of the Gulam Sabir Restaurant <br/>
				Please copy the OTP :- ".$otp."<br/>Click on the link below to complete the registration:- <br/>
				<a href='http://gulamsabirrestaurant.com/verification.php'>Verification Link</a>";
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
				$headers .= 'From: support_rafisweets@rafisweets.com' . "\r\n";			
                if(mail($to,$subject,$message,$headers))
				{					
				  success();
				}
				else{
				echo '<h1>Your Internet connection is very slow, kindly go back and register again</h1>';
				}
				//success();
			}
			else
			{
				echo '<h3>Mobile/email already in use , Please click <a href="signup.html">here</a> to go back and enter new email/mobile</h3>';
			}
		}
		else{
			echo 'connection error '.mysqli_error($con);
		}
   }
}
else 
{
?>
<script type="text/javascript">
window.location.assign("http://www.rafisweets.co.in/index.php");
</script>
<?php
}
?>
<?php
function success()
{
	echo ' <html>
		  <head>
		    <meta name="viewport" content="width=device-width, initial-scale=1.0">

		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		  <link href="js/jquery-ui.min.css" type="text/css" rel="stylesheet">
		  

		  <!-- jQuery library -->
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

		  <!-- Latest compiled JavaScript -->
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		  <script src=" http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js" type="text/javascript"></script>
		  <title>User registration successful</title>
		  </head>
		  <body>
		  <div class="container">
		  <div class="row">
		  <div class="col-md-12"><h4>Thank you for registering, Please check your email inbox/spam folder for completing the verification process.</h4></div>
		  </div>
		  <div class="row">
		  <div id="progress" style="width:100%;"></div>
		  </div>
		  </div>
		  
		  </body>
		  <script type="text/javascript">
			$(document).ready(function(){
			$("#progress").progressbar({value : false});
			setTimeout(function(){
			window.location.assign("http://www.rafisweets.co.in");
			}, 4000);
		   });
</script>
		  </html>';
}
?>
