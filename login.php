<?php
session_start();
include "connect.php";
if(isset($_POST["email"])&& isset($_POST["password"]))
{
   if(!empty($_POST["email"]) && !empty($_POST["password"]))
   {
	   $con = mysqli_connect($servername, $username , $password , $databasename);
	    if($con)
		{
			$email = mysqli_real_escape_string($con , filter_var(($_POST["email"]), FILTER_SANITIZE_STRING));
			$password = mysqli_real_escape_string($con , filter_var(($_POST["password"]), FILTER_SANITIZE_STRING));
			//filter var and mysql_real_escape_string , and html entities for preventing sql injection
			//email must be unique also
			//echo 'connected';
			$query = "select * from user_register where user_email='$email' and user_password='$password' and user_verified='t'";
			$query_run = mysqli_query($con,$query);
			if($query_run)
			{
			   if(mysqli_num_rows($query_run)>=1)
			   {
				   while($rows= mysqli_fetch_assoc($query_run))
				   {
					   $uname = $rows["user_name"];  
					   $mobile= $rows["user_mobile"]; 
				   }
				   $_SESSION["loggedin"] = $uname;
				   $_SESSION["mobileno"]=  $mobile;
				  ?>
				  
				  <script	 type="text/javascript">
				  
				  window.location.assign("index.php");
				  </script>
				  
				  <?php
			   }
              else
			  {
               echo '<h3>Warning ! Invalid username/password, Please click <a href="sign.php">here</a> to go back and register</h3>';
			  }				  
			}
			else
			{
				echo '<h3>Invalid username/password, Please click <a href="sign.php">here</a> to go back and register</h3>';
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
window.location.assign("http://www.rafisweets.com");
</script>
<?php
}