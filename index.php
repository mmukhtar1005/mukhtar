<?php
session_start();
if(isset($_SESSION["loggedin"]))
{
   $loginsignup = $_SESSION["loggedin"].' '.'<a href="logout.php">Log out</a>';
}
else
$loginsignup = "Login / Signup";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>The Rafi Sweets and Restaurant Shop </title>
  <meta name="description" content="The Rafi Sweets and restaurant  is an online sweet shop established in 1995 in Sirsi, Sambhal,Uttar Pradesh. It is the only online sweet shop in the town.">
  <meta name="keywords" content="Online sweet shop, Online Restaurant, Online tea shop, Rafi Sweets, Rafi  Restaurant, alamsweets.co.in, online sweet shop In Sirsi ,Online sweet shop in Sirsi,Online sweet shop in sambhal moradabad">
  <meta name="author" content="Mohd Mukhtar">
  <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="shortcut icon" type="image/ico" href="img/favicon.ico">
</head>

<body>
  <!--banner-->
  <section id="banner">
    <div class="bg-color">
      <header id="header">
        <div class="container">
		<span><a href="logi.php" style="color:#059FBD;"><?php echo $loginsignup; ?></a></span>
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
            <h1 class="logo-name">The Rafi Sweets and Restaurant </h1>
            <h3 style="color:white;">The best place to buy sweets.</h3>
            <p>Specialized in aroma & Sweetness!!</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / banner -->
  <!--about-->
  <section id="about" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center marb-35">
          <h1 class="header-h" id="glow">The first Online Sweet shop in the town.</h1>
          <p class="header-p">The Rafi Sweets and restaurant  is an online sweet shop established in 1995 in Sirsi, Sambhal, Uttar Pradesh. It is the first online sweet shop in the town.
		  The quality of products delivered by the shop are of great quality and at a very compettive price. The Rafi sweets shop is not only famous for its sweets but also
		  for the snacks and elegant refreshments.
		  </p>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-10">
          <div class="col-md-6 col-sm-6">
            <div class="about-info">
              <h2 class="heading">Our Specialities</h2>
              <p>We always try to give our 100% while carrying out the manufacturing process.</p>
              <div class="details-list">
                <ul>
                  <li><i class="fa fa-check"></i>Usage of best quality raw material.</li>
                  <li><i class="fa fa-check"></i>Manfacturing and Expiration date on each product.</li>
                  <li><i class="fa fa-check"></i>Quality assurance performed before showcasing the products.</li>
                  <li><i class="fa fa-check"></i/>24/7 Customer <a href="#contact" id="hpl">Helpline.</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6">
            <img src="img/gulab.jpg" alt="" class="img-responsive" id="spec">
          </div>
        </div>
        <div class="col-md-1"></div>
      </div>
    </div>
  </section>
  <!--/about-->
  <!-- event -->
  <section id="event">
    <div class="bg-color" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 text-center" style="padding:60px;">
            <h1 class="header-h">Today's Special</h1>
          </div>
          <div class="col-md-12" style="padding-bottom:60px;">
            <div class="item active left">
              <div class="col-md-6 col-sm-6 left-images">
                <img src="img/pista2.jpg" class="img-responsive">
              </div>
              <div class="col-md-6 col-sm-6 details-text">
                <div class="content-holder">
                  <h2>Pista Barfi</h2>
                  <p>The pista barfi is filled with goodness of milk and pistachios. The green colour of this barfi comes from the natural colour of pistachios.
				  No artificial colours or esssence is added. The Rafi Sweet house Pista Barfi has it's own unique taste and mouth watering flavour.
				  </p>
              
                  <a class="btn btn-imfo btn-read-more" href="events-details.html">Read more</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ event -->
  <!-- menu -->
  <section id="menu-list" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center marb-35">
          <h1 class="header-h">Menu List</h1>
          <p class="header-p">The Alam Sweets and Retaurant shop has a wide variety of mouth watering products as listed below.. You may order any product from below and we will delive the same as soon as possible.*All prices given below are per <b>Kg</b> of the product</p>
        </div>

        <div class="col-md-12  text-center" id="menu-flters">
          <ul>
            <li><a class="filter active" data-filter=".menu-restaurant">Show All</a></li>
            <li><a class="filter" data-filter=".breakfast">Breakfast</a></li>
            <li><a class="filter" data-filter=".lunch">Lunch</a></li>
            <li><a class="filter" data-filter=".dinner">Dinner</a></li>
          </ul>
        </div>

        <div id="menu-wrapper">

          <div class="breakfast menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Plain Barfi</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">Rs 300 / Kg</span>
            </span>
            <span class="menu-subtitle">Sweet made from pure khoya and milk.</span>
          </div>

          <div class="breakfast menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Pista Barfi</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">Rs 350 / Kg</span>
            </span>
            <span class="menu-subtitle">Sweet made from pure khoya, milkand pistachios.</span>
          </div>

          <div class="breakfast menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Motichoor Laddoo</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">Rs 100 / Kg</span>
            </span>
            <span class="menu-subtitle">Sweet made from pure khoya and milk.</span>
          </div>

          <div class="breakfast menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Special peda</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">Rs 350 / Kg</span>
            </span>
            <span class="menu-subtitle">Sweet made from pure khoya and milk.</span>
          </div>

          <div class="lunch menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Special Lassi</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">Rs 20 / 300ml</span>
            </span>
            <span class="menu-subtitle">Beverage made from milk and curd.</span>
          </div>

          <div class="lunch menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Gajar Halwa</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">Rs 250 / Kg</span>
            </span>
            <span class="menu-subtitle">Sweet made from pure khoya , carrots and milk.</span>
          </div>

          <div class="lunch menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Gulab Jamun</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">Rs 200 / Kg</span>
            </span>
            <span class="menu-subtitle">Sweet made from pure khoya and milk.</span>
          </div>

          <div class="lunch menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Cham-Cham</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">Rs 200 / Kg</span>
            </span>
            <span class="menu-subtitle">Sweet made from pure Chhena and milk.</span>
          </div>

          <div class="lunch menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Paneer</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">Rs 300 / kg</span>
            </span>
            <span class="menu-subtitle">A milk product.</span>
          </div>

          <div class="dinner menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Plain Khoya</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">Rs 300 / Kg</span>
            </span>
            <span class="menu-subtitle">A milk product</span>
          </div>

          <div class="dinner menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Special Sohan Halwa</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">Rs 200 / Kg</span>
            </span>
            <span class="menu-subtitle">Sweet made from pure khoya and milk.</span>
          </div>

          <div class="dinner menu-restaurant">
            <span class="clearfix">
              <a class="menu-title" href="#" data-meal-img="assets/img/restaurant/rib.jpg">Special Papdi</a>
              <span style="left: 166px; right: 44px;" class="menu-line"></span>
              <span class="menu-price">Rs 300 / Kg</span>
            </span>
            <span class="menu-subtitle">Sweet made from pure khoya and milk.</span>
			<br><a href="products.php"><span>More Products ..</span></a>
          </div>
        </div>
          
      </div>
    </div>
  </section>
  <!--/ menu -->
  <!-- contact -->
  <section id="contact" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class="header-h">Book Your table</h1>
          <p class="header-p">Visit us at the Rafi Sweets Restaurant, pre-book your table now.</p>
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
            <h4 class="widget-title">The Rafi Sweets and Restaurant</h4>
            <address>Karbala Road Sirsi<br>Sambhal, (U.P) </address>
            <div class="social-list">
              <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
              <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            </div>
            <p class="copyright clear-float">
              &copy; Rafi Sweets & Restaurant . All Rights Reserved
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
  <script type="text/javascript">
  $(document).ready(function(){
  setInterval(function(){$("#glow").fadeOut(1000).fadeIn(1000);},3000); //heading animation
  
  var a=['img/gulab.jpg','img/mix.jpg','img/besan.jpg']; //image animation
  var i=0;
  $("#spec").fadeOut(1000);
  setInterval(function(){
  if(i<=2){
  $("#spec").attr("src",a[i]).fadeIn(2000).fadeOut(2000);
  i++;
  }
  else{
     i=0;
	 $("#spec").attr("href",a[i]).fadeIn(2000).fadeOut(2000);
  }
  },3000);
  
  
  
  $("#hpl").click(function(){
   var off= $("#contact").offset(); //helpline scroll
   $("html,body").animate({scrollTop : off.top},2000);});
   
  });
  </script>

</body>

</html>
