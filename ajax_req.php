<?php
include 'connect.php';
$con = mysqli_connect($servername, $username, $password, $databasename);
if($con)
{
	if(isset($_POST["mobile"]))
	{
	$mobile = mysqli_real_escape_string($con , htmlentities($_POST["mobile"]));
	//echo $mobile;
	$query_run = mysqli_query($con, "select * from user_register where user_mobile = '$mobile'");
	if($query_run)
	{
		if(mysqli_num_rows($query_run)>=1)
		{
			echo true;
		}
                else
                {
                  echo false;
                }
	}
	}
	
}
?>