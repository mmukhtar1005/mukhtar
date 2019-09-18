<?php
session_start();
if(isset($_SESSION["loggedin"]))
{
   $loginsignup = $_SESSION["loggedin"].' '.'<a href="logout.php">Log out</a>';
}
else
$loginsignup = "Login / Signup";
$j=0;
include "connect.php";
$con = mysqli_connect($servername,$username,$password,$databasename);
if($con)
{
	$product_id=array();
	$product_name= array();
	$product_image=array();
	$product_price=array();
	$product_desc=array();
	
	$i=0;
	$query="select * from products";
	$query_run = mysqli_query($con,$query);
	if($query_run)
	{
		while($rows=mysqli_fetch_assoc($query_run))
		{
			$product_id[$i] = $rows["product_id"];
			$product_name[$i] = $rows["product_name"];
			$product_image[$i] = $rows["product_image"];
			$product_price[$i] = $rows["product_price"];
			$product_desc[$i] = $rows["product_desc"];
			$i= $i+1;
		}
			
	}
	else{
		echo '<h1>Go back and refresh again</h1>';
	}
}
else{
	echo 'Some error occurred please refresh the page';
}
?>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>The Gulam Sabir Restaurant and Sweets Shop </title>
  <meta name="description" content="The Gulam Sabir restaurant and sweet shop is an online sweet shop established in 1995 in Sirsi, Sambhal, Moradabad, Uttar Pradesh. It is the only online sweet shop in the town.">
  <meta name="keywords" content="Online sweet shop, Online Restaurant, Online tea shop, Gulam Sabir, Gulam Sabir Restaurant, gulamsabirrestaurant.com, online sweet shop sersee ,Online sweet shop in Moradabad">
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
		<span><a href="login.html" style="color:#059FBD;"><?php echo $loginsignup;?></a></span>
		<span style="margin-left:20px;"><a href="cart.php" style="color:#F9D626"><i class="fa fa-shopping-cart" style="font-size:36px"></i>Cart</a></span>
          <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="index.php">Home</a>
            <a href="products.php">Browse Products</a>
	    <a href="products.php">Shop Now !</a>
	    <a href="cart.php">View cart</a>
          </div>
          <!-- Use any element to open the sidenav -->
          <span onclick="openNav()" class="pull-right menu-icon">☰</span>
        </div>
      </header>
      <div class="container">
        <div class="row">
          <div class="inner text-center">
            <h1 class="logo-name">The Gulam Sabir Restaurant And Sweets Shop</h1>
            <h3 style="color:white;">The best place to buy sweets.</h3>
            <p>Specialized in aroma & Sweetness!!</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="container">
  <div class="row">
  <div class="col-md-12" style="text-align:center;margin-top:-100px;margin-bottom:50px;"><h2 class='logo-name'>Our Products</h2></div>
  <div class="col-md-12"></div>
  </div>
  </div>
  <div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading"><?php echo $product_id[$j].")  ".$product_name[$j]; ?></div>
        <div class="panel-body"><a href="product_details.php?id=<?php echo $product_id[$j];?>"><img src="<?php echo $product_image[$j]; ?>" class="img-responsive" style="width:100%;height:150px;" alt="Image"></a></div>
        <div class="panel-footer"><a href="cart.php?id=<?php echo $product_id[$j];?>"><button type="button" class="btn btn-default btn-sm">
          <span class="fa fa-cart-plus btn btn-primary"></span> Add to Cart   <?php echo "Rs ".$product_price[$j]; $j++;?></div></a>
      </div>
    </div>
       <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading"><?php echo $product_id[$j].")  ".$product_name[$j]; ?></div>
        <div class="panel-body"><a href="product_details.php?id=<?php echo $product_id[$j];?>"><img src="<?php echo $product_image[$j]; ?>" class="img-responsive" style="width:100%;height:150px;" alt="Image"></a></div>
        <div class="panel-footer"><a href="cart.php?id=<?php echo $product_id[$j];?>"><button type="button" class="btn btn-default btn-sm">
          <span class="fa fa-cart-plus btn btn-primary"></span> Add to Cart  <?php echo "Rs ".$product_price[$j]; $j++;?></div></a>
      </div>
    </div>
   <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading"><?php echo $product_id[$j].")  ".$product_name[$j]; ?></div>
        <div class="panel-body"><a href="product_details.php?id=<?php echo $product_id[$j];?>"><img src="<?php echo $product_image[$j]; ?>" class="img-responsive" style="width:100%;height:150px;" alt="Image"></a></div>
        <div class="panel-footer"><a href="cart.php?id=<?php echo $product_id[$j];?>"><button type="button" class="btn btn-default btn-sm">
          <span class="fa fa-cart-plus btn btn-primary"></span> Add to Cart   <?php echo "Rs ".$product_price[$j]; $j++;?></div></a>
      </div>
    </div>
  </div>
</div><br>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading"><?php echo $product_id[$j].")  ".$product_name[$j]; ?></div>
        <div class="panel-body"><a href="product_details.php?id=<?php echo $product_id[$j];?>"><img src="<?php echo $product_image[$j]; ?>" class="img-responsive" style="width:100%;height:150px;" alt="Image"></a></div>
        <div class="panel-footer"><a href="cart.php?id=<?php echo $product_id[$j];?>"><button type="button" class="btn btn-default btn-sm">
          <span class="fa fa-cart-plus btn btn-primary"></span>  Add to Cart   <?php echo "Rs ".$product_price[$j]; $j++;?></div></a>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading"><?php echo $product_id[$j].")  ".$product_name[$j]; ?></div>
        <div class="panel-body"><a href="product_details.php?id=<?php echo $product_id[$j];?>"><img src="<?php echo $product_image[$j]; ?>" class="img-responsive" style="width:100%;height:150px;" alt="Image"></a></div>
        <div class="panel-footer"><a href="cart.php?id=<?php echo $product_id[$j];?>"><button type="button" class="btn btn-default btn-sm">
          <span class="fa fa-cart-plus btn btn-primary"></span>  Add to cart   <?php echo "Rs ".$product_price[$j]; $j++;?></div></a>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading"><?php echo $product_id[$j].")  ".$product_name[$j]; ?></div>
        <div class="panel-body"><a href="product_details.php?id=<?php echo $product_id[$j];?>"><img src="<?php echo $product_image[$j]; ?>" class="img-responsive" style="width:100%;height:150px;" alt="Image"></a></div>
        <div class="panel-footer"><a href="cart.php?id=<?php echo $product_id[$j];?>"><button type="button" class="btn btn-default btn-sm">
          <span class="fa fa-cart-plus btn btn-primary"></span> Add to cart <?php echo "Rs ".$product_price[$j]; $j++;?></div></a>
      </div>
    </div>
  </div>
</div><br><br>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading"><?php echo $product_id[$j].")  ".$product_name[$j]; ?></div>
        <div class="panel-body"><a href="product_details.php?id=<?php echo $product_id[$j];?>"><img src="<?php echo $product_image[$j]; ?>" class="img-responsive" style="width:100%;height:150px;" alt="Image"></a></div>
        <div class="panel-footer"><a href="cart.php?id=<?php echo $product_id[$j];?>"><button type="button" class="btn btn-default btn-sm">
          <span class="fa fa-cart-plus btn btn-primary"></span>  Add to Cart   <?php echo "Rs ".$product_price[$j]; $j++;?></div></a>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading"><?php echo $product_id[$j].")  ".$product_name[$j]; ?></div>
        <div class="panel-body"><a href="product_details.php?id=<?php echo $product_id[$j];?>"><img src="<?php echo $product_image[$j]; ?>" class="img-responsive" style="width:100%;height:150px;" alt="Image"></a></div>
        <div class="panel-footer"><a href="cart.php?id=<?php echo $product_id[$j];?>"><button type="button" class="btn btn-default btn-sm">
          <span class="fa fa-cart-plus btn btn-primary"></span>  Add to cart   <?php echo "Rs ".$product_price[$j]; $j++;?></div></a>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading"><?php echo $product_id[$j].")  ".$product_name[$j]; ?></div>
        <div class="panel-body"><a href="product_details.php?id=<?php echo $product_id[$j];?>"><img src="<?php echo $product_image[$j]; ?>" class="img-responsive" style="width:100%;height:150px;" alt="Image"></a></div>
        <div class="panel-footer"><a href="cart.php?id=<?php echo $product_id[$j];?>"><button type="button" class="btn btn-default btn-sm">
          <span class="fa fa-cart-plus btn btn-primary"></span> Add to cart <?php echo "Rs ".$product_price[$j]; $j++;?></div></a>
      </div>
    </div>
  </div>
</div><br><br>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading"><?php echo $product_id[$j].")  ".$product_name[$j]; ?></div>
        <div class="panel-body"><a href="product_details.php?id=<?php echo $product_id[$j];?>"><img src="<?php echo $product_image[$j]; ?>" class="img-responsive" style="width:100%;height:150px;" alt="Image"></a></div>
        <div class="panel-footer"><a href="cart.php?id=<?php echo $product_id[$j];?>"><button type="button" class="btn btn-default btn-sm">
          <span class="fa fa-cart-plus btn btn-primary"></span>  Add to Cart   <?php echo "Rs ".$product_price[$j]; $j++;?></div></a>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading"><?php echo $product_id[$j].")  ".$product_name[$j]; ?></div>
        <div class="panel-body"><a href="product_details.php?id=<?php echo $product_id[$j];?>"><img src="<?php echo $product_image[$j]; ?>" class="img-responsive" style="width:100%;height:150px;" alt="Image"></a></div>
        <div class="panel-footer"><a href="cart.php?id=<?php echo $product_id[$j];?>"><button type="button" class="btn btn-default btn-sm">
          <span class="fa fa-cart-plus btn btn-primary"></span>  Add to cart   <?php echo "Rs ".$product_price[$j]; $j++;?></div></a>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading"><?php echo $product_id[$j].")  ".$product_name[$j]; ?></div>
        <div class="panel-body"><a href="product_details.php?id=<?php echo $product_id[$j];?>"><img src="<?php echo $product_image[$j]; ?>" class="img-responsive" style="width:100%;height:150px;" alt="Image"></a></div>
        <div class="panel-footer"><a href="cart.php?id=<?php echo $product_id[$j];?>"><button type="button" class="btn btn-default btn-sm">
          <span class="fa fa-cart-plus btn btn-primary"></span> Add to cart <?php echo "Rs ".$product_price[$j]; $j++;?></div></a>
      </div>
    </div>
  </div>
</div><br><br>

  
  
  
  
  
  
  
  <!-- contact -->
  <section id="contact" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class="header-h">Book Your table</h1>
          <p class="header-p">Visit us at the Gulam Sabir Restaurant, pre-book your table now.</p>
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
            <h4 class="widget-title">The Rafi Sweets </h4>
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
