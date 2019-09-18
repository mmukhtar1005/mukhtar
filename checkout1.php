<?php
session_start();
echo '<meta name="viewport" content="width=device-width" initial-scale=1.0>';
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
        $itemnp="";
        $count= count($_SESSION["cart"]);
        for($i=0;$i<$count;$i++)
        {
        	$c= $i+1;
        	for($j=0;$j<6;$j++)
        	{
        	   if($j==1)
        	   {
        	     $itemnp.='<input type="hidden" name="item_name_'.$c.'" value="'.$_SESSION["cart"][$i][$j].'">';
        	   }
        	   
        	   if($j==3)
        	   {
        	     $itemnp.='<input type="hidden" name="amount_'.$c.'" value="'.$_SESSION["cart"][$i][$j].'">';
        	   }
        	   if($j==2)
        	   {
        	     $itemnp.='<input type="hidden" name="quantity_'.$c.'" value="'.$_SESSION["cart"][$i][$j].'">';
        	   }
        	}
        }
        
	

echo '<form action="https://www.paypal.com/cgi-bin/webscr" method="post" name="buying" id="buying">';
echo '<input type="hidden" name="cmd" value="_cart">';
echo '<input type="hidden" name="upload" value="1">';
echo '<input type="hidden" name="business" value="gulamsabirrestaurant066@gmail.com">';
echo $itemnp;
echo '<input type="hidden" name="currency_code" value="INR">';
echo '<input type="hidden" name="return" value="http://www.rafisweets.com/success1.php">';
echo '<input type="hidden" name="cancel_return" value="http://www.rafisweets.co.in/cancel.php">';
echo '</form>';
?>
<script type="text/javascript">
document.getElementById("buying").submit();
</script>
<?php
}
else
{
  echo '<h1>Please <a href="logi.php">Login</a> to continue</h1>';
}
?>

