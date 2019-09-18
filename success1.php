<?php
session_start();
include 'connect.php';
if(isset($_GET["st"]) && isset($_GET["tx"]) && isset($_GET["amt"]) && $_GET["st"]=="Completed")
{
   $payment_id=$_GET["tx"];
   $status= $_GET["st"];
   $uname = $_SESSION["loggedin"];
   $mobile = $_SESSION["mobileno"];
  /* $productid="";
   $productname="";
   $productqty="";
   $totalprice=0;
   $carttotal=0;*/
echo '<h1>Payment successful , please wait we will redirect you in a moment. Please do not close this window until you are redirected</h1>';
$con=mysqli_connect($servername,$username,$password,$databasename);
if($con)
{
   $query = "select * from user_register where user_name='$uname' and user_mobile='$mobile'";
   $query_run= mysqli_query($con,$query);
   if($query_run)
   {
       while($rows= mysqli_fetch_assoc($query_run))
       {
          $email = $rows["user_email"];
       }

           $count = count($_SESSION["cart"]);
           for($x=0;$x<$count;$x++)
           {
              for($y=0;$y<6;$y++)
              { 
                 if($y==0)
                 {
                  $productid.=$_SESSION["cart"][$x][$y].'-';
                 }
                 if($y==1)
                 {
                   $productname.= $_SESSION["cart"][$x][$y].'-';
                 }
                 if($y==2)
                 {
                    $productqty.=$_SESSION["cart"][$x][$y].'-';
                 }
                 if($y==5)
                 {
                   $totalprice.=$_SESSION["cart"][$x][$y].'-';
                 }          
              }
           }
           $carttotal=$_SESSION["total"];
           //validation of complete status before insertion
           
           $query1 = 'select * from order_details where transaction_id="$payment_id"';
           $query1_run = mysqli_query($con,$query1);
           if($query1_run)
           {
              if(mysqli_num_rows($query1_run)<1)
              {
           
$query2 = "insert into order_details(uname,uemail,umobile,transaction_id,products_id,product_name,products_qty,total_price,cart_total,order_status)". "values('$uname','$email','$mobile','$payment_id','$productid','$productname','$productqty','$totalprice','$carttotal','$status')";            

	$query2_run= mysqli_query($con,$query2);
           if($query2_run)
           {
           
           $to = $email.',support_rafisweets@rafisweets.com';
           $subject = "New order placed";
           $message = 'Thank you '.$uname.' for placing your order<br/>
           
           Please keep a note of the following details for future reference:-<br/>
           Transaction Id:- '.$payment_id.'<br/>';
	   $headers = "MIME-Version: 1.0" . "\r\n";
           $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	   $headers .= 'From: support_rafisweets@rafisweets.com' . "\r\n";

          mail($to,$subject,$message,$headers);
?>
<script type="text/javascript">
alert("payment successful");
setTimeout(function(){window.location.assign("index.php");},3000);
</script>

<?php
        }
        else
        {
          echo mysqli_error($con);
        }
        }
        else
        {
        ?>
        <script type="text/javascript">
        alert("query1_p");
        window.location.assign("http://www.rafisweets.co.in");
        </script>
        <?php
        }
        }
      else
      {
         echo mysqli_error($con);
         }
      
   }
}
}
else
{
echo 'Payment unsuccessful please try again later';
}
?>
<html>
<head>
<meta name="viewport"
content="width=device-width,initial-scale=1.0">
<title>Payment Status</title>
</head>
</body>
</html>