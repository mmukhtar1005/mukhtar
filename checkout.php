<?php
session_start();
if(isset($_SESSION["loggedin"]) && isset($_SESSION["mobileno"]))
{
	$email="";
	$phone=$_SESSION["mobileno"];
	$user_name = $_SESSION["loggedin"];
	//payment gateway information.
	include 'connect.php';
	$amount = $_POST["carttotal"];
	$_SESSION["total"]=$amount;
	echo '<h1>Please wait we are processing your transaction do not refresh the page.</h1>';
	$con = mysqli_connect($servername,$username,$password,$databasename);
	
	if($con)
	{
		$query ="select * from user_register where user_name='$user_name' and user_mobile='$phone'";
		$query_run = mysqli_query($con , $query);
		if($query_run)
		{
			if(mysqli_num_rows($query_run)>=1)
			{
				while($rows= mysqli_fetch_assoc($query_run))
				{
					$email = $rows["user_email"];
					//$phone = $rows["user_mobile"];
				}
				//payment gateway inegration
				
				$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://test.instamojo.com/api/1.1/payment-requests/');
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER,
            array("X-Api-Key:test_270b86675cf1ce660ec7c85e4ad",
                  "X-Auth-Token:test_c5c206041419531ec77f7a4a1d2"));
$payload = Array(
    'purpose' => 'Online Sweets shopping',
    'amount' => $amount,
    'phone' => $phone,
    'buyer_name' => $user_name,
    'redirect_url' => 'http://www.Rafisweets.com/success.php',
    'send_email' => true,
    'webhook' => '',
    'send_sms' => true,
    'email' => $email,
    'allow_repeated_payments' => false
);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($payload));
$response = curl_exec($ch);
curl_close($ch); 

$json_decode = json_decode($response,true);
$long_url = $json_decode['payment_request']['longurl'];

//echo $response;
//echo $long_url;
header("Location:".$long_url);


			}
		}
	}
}
else
{
	echo '<h1>Please <a href="logi.php">login</a> to coninue</h1>';
}
?>