<?php
session_start();
include "connect.php";
$output="";
if(isset($_POST["otp"]))
{
$con = mysqli_connect($servername,$username,$password,$databasename);
if($con)
{
	$otp = mysqli_real_escape_string($con , htmlentities($_POST["otp"]));
	$query="select * from user_register where user_otp='$otp' and user_verified='f'";
	$query_run = mysqli_query($con,$query);
	if($query_run)
	{
		if(mysqli_num_rows($query_run)>=1)
		{
			//echo 'verified';
			$query2 = "update user_register set user_verified='t' where user_otp = '$otp'";
			$query2_run = mysqli_query($con,$query2);
			if($query2_run)
			{
				$output= '<h1>User verification Successful</h1>';
			}
		}
		else{
		$output = '<h1>Wrong otp</h1>';
	}
	}
}
else{
	echo 'Some error occurred please refresh the page';
}
}
?>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>The Rafi Sweets and Restaurant </title>
  <meta name="description" content="The Rafi Sweets  shop is an online sweet shop established in 1995 in Sirsi, Sambhal,  Uttar Pradesh. It is the only online sweet shop in the town.">
  <meta name="keywords" content="Online sweet shop, Online Restaurant, Online tea shop, Rafi Bhai, rafi sweet , rafisweets.com, online sweet shop sirsi ,Online sweet shop in Sambhal">
  <meta name="author" content="Mohd Faisal">
  <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  
</head>

<body>
  <!--banner-->
  <section id="banner">
    <div class="bg-color">
      <header id="header">
        <div class="container">
		<span><a href="products.php" style="color:#059FBD;">Shop Now</a></span>
		<span style="margin-left:20px;"><a href="cart.php" style="color:#F9D626"><i class="fa fa-shopping-cart" style="font-size:36px"></i>Cart</a></span>
          <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#about">About</a>
            <a href="#event">Today's Special</a>
            <a href="#menu-list">Menu</a>
            <a href="#contact">Book a table</a>
			<a href="products.php">Browse Products</a>
			<a href="products.php">Shop Now !</a>
          </div>
          <!-- Use any element to open the sidenav -->
          <span onclick="openNav()" class="pull-right menu-icon">☰</span>
        </div>
      </header>
      <div class="container">
        <div class="row">
          <div class="inner text-center">
            <h1 class="logo-name">The Rafi Sweets And Restaurant </h1>
            <h3 style="color:white;">The best place to buy sweets.</h3>
            <p>Specialized in aroma & Sweetness!!</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="container">
  <div class="row">
  <div class="col-md-12" style="text-align:center;margin-top:-100px;margin-bottom:50px;"><h2 class='logo-name'>Verify your Account</h2></div>
  <div class="col-md-12"></div>
  </div>
  </div>
  <form action="verification.php" method="post" name="otp">
  <div class="container">    
  <div class="row">
  <div class="col-sm-4"></div>
    <div class="col-sm-4">
      <div class="panel panel-info">
        <div class="panel-heading"><?php echo $output;?></div>
        <div class="panel-body"><label>Enter the otp in the box below:-</label><br/>
		<input type="text" name="otp" id="otp" placeholder="Enter your otp">
		</div>
        <div class="panel-footer"><button type="submit" class="btn btn-default btn-sm">
          <span class="fa fa-paper-plane btn btn-primary"> Submit</span></div></form>
      </div>
    </div>
	   
    </div>
	  <br><br><br><br><br>
   <br><br>
  <!-- contact -->
  <section id="contact" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class="header-h">Book Your table</h1>
          <p class="header-p">Visit us at the Rafi sweets, pre-book your table now.</p>
        </div>
      </div>
      <div class="row msg-row">
        <div class="col-md-4 col-sm-4 mr-15">
          <div class="media-2">
            <div class="media-left">
              <div class="contact-phone bg-1 text-center"><span class="phone-in-talk fa fa-phone"></span></div>
            </div>
            <div class="media-body">
              <h4 class="dark-blue regular">Phone Numbers</h4>
              <p class="light-blue regular alt-p">+91 9837715576 - <span class="contacts-sp">Phone Booking</span></p>
            </div>
          </div>
          <div class="media-2">
            <div class="media-left">
              <div class="contact-email bg-14 text-center"><span class="hour-icon fa fa-clock-o"></span></div>
            </div>
            <div class="media-body">
              <h4 class="dark-blue regular">Opening Hours</h4>
              <p class="light-blue regular alt-p"> Monday to Friday 09.00 - 24:00</p>
              <p class="light-blue regular alt-p">
                Friday and Sunday 08:00 - 03.00
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-8 col-sm-8">
          <form action="" method="post" role="form" class="contactForm">
            <div id="sendmessage">Your booking request has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <div class="col-md-6 col-sm-6 contact-form pad-form">
              <div class="form-group label-floating is-empty">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>

            </div>
            <div class="col-md-6 col-sm-6 contact-form">
              <div class="form-group">
                <input type="date" class="form-control label-floating is-empty" name="date" id="date" placeholder="Date" data-rule="required" data-msg="This field is required" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 contact-form pad-form">
              <div class="form-group">
                <input type="email" class="form-control label-floating is-empty" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 contact-form">
              <div class="form-group">
                <input type="time" class="form-control label-floating is-empty" name="time" id="time" placeholder="Time" data-rule="required" data-msg="This field is required" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 contact-form">
              <div class="form-group">
                <input type="text" class="form-control label-floating is-empty" name="phone" id="phone" placeholder="Phone" data-rule="required" data-msg="This field is required" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 contact-form">
              <div class="form-group">
                <input type="text" class="form-control label-floating is-empty" name="people" id="people" placeholder="People" data-rule="required" data-msg="This field is required" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="col-md-12 contact-form">
              <div class="form-group label-floating is-empty">
                <textarea class="form-control" name="message" rows="5" rows="3" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>

            </div>
            <div class="col-md-12 btnpad">
              <div class="contacts-btn-pad">
                <button class="contacts-btn">Book Table</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- / contact -->
  <!-- footer -->
  <footer class="footer text-center">
    <div class="footer-top">
      <div class="row">
        <div class="col-md-offset-3 col-md-6 text-center">
          <div class="widget">
            <h4 class="widget-title">The Rafi Sweets And Restaurant</h4>
            <address>Sirsi Sambhal<br>Uttar Pradesh, </address>
            <div class="social-list">
              <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            </div>
            <p class="copyright clear-float">
              &copy; Rafi Sweets & Restaurant. All Rights Reserved
              <div class="credits">
                This Site Designed and Maintained by <a href="http://www.mohdmukhtar.co.in/">Mohd Mukhtar & Mohd Faisal</a href="tel:+917895891699"><a> +91-7895891699</a>
                              </div>
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- / footer -->
   <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>
  </body>
  </html>
