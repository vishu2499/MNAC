
<!DOCTYPE html>
<html lang="en">
<head>
<title>| MARKETING NETWORK FOR AGRICULTURAL COMMODITIES | Customer Support Page:: </title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Vegetable Farm Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- css links -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/typo.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/hoverex-all.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/inner.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/pogo-slider.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/caption-hover.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/circle-hover.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/slider.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- /css links -->
<!-- font files -->
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<!-- font files -->
<!-- js files  -->
<script src="js/SmoothScroll.min.js"></script>
<script type="text/javascript" src="js/modernizr.custom.js"></script> 
<!-- /js files -->
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">   MNAC  </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
				<li><a href="index.php">HOME</a></li>
				<!--<li><a href="about.html">ABOUT</a></li>-->
				<li><a href="display.php">SHOP</a></li>
				<li><a href="contact.php">CUSTOMER SUPPORT</a></li>
				<!--<li><a href="contact.html">CONTACT US</a></li>-->
				<li><a href="fc.php">FACILITATION CENTRE</a></li>
				<li><a href="checkout.php">CART</a></li>
				<?php
				if(!isset($login_session)){
					echo "<li><a href='login.php'>SIGN IN</a></li>";	
				}else
				{
					echo "<li><a href='c5.php'>SIGN OUT</a></li>";
				}
				
				?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
<!-- /Fixed navbar -->
<!-- banner section -->	
<div class="pogoSlider" id="js-main-slider">
	<div class="pogoSlider-slide" data-transition="barRevealDown" data-duration="1000"  style="background-image:url(images/banner1-1.jpg);">
		<div class="pogoSlider-slide-element">
			<h3>Be In Touch With Us</h3>
		</div>
	</div>
	<div class="pogoSlider-slide" data-transition="blocksReveal" data-duration="1000" style="background-image:url(images/banner2-2.jpg);">
		<div class="pogoSlider-slide-element">
			<h3>We Miss You</h3>
		</div>
	</div>
	<div class="pogoSlider-slide" data-transition="barRevealDown" data-duration="1000" style="background-image:url(images/banner3-3.jpg);">
		<div class="pogoSlider-slide-element">
			<h3>Drop an email</h3>
		</div>
	</div>
	<div class="pogoSlider-slide" data-transition="blocksReveal" data-duration="1000"  style="background-image:url(images/banner4-4.jpg);">
		<div class="pogoSlider-slide-element">
			<h3>Give Us A Missed Call</h3>
		</div>
	</div>
</div>
<!-- /banner section -->
<!-- Contact -->
<section class="contact-us" id="contact">
	<h3 class="text-center slideanim">CONTACT US</h3>
	<p class="text-center slideanim">Provide Us Below With Your Contact Details & Expect A Call From Us.</p>
	<div class="container">
		<div class="row">
            <div class="col-md-8 slideanim">
                  <iframe class="googlemaps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3767.91918999891!2d72.95207131399303!3d19.1987315870176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b90f1eca80b3%3A0x27240a7502415276!2sAshar%20IT%20Park!5e0!3m2!1sen!2sin!4v1572979809120!5m2!1sen!2sin"  style="border:0" allowfullscreen></iframe>
				  
			</div>
            <div class="col-md-4 slideanim">
				<h4>Our Contacts :</h4>
                <p><b>Phone</b> : 8850183735</p>
                <p><b>Email</b> : <a href="mailto:name@example.com">CCABKMS@MNAC.com</a></p>
                <p><b>Address</b> : Ashar IT Park,  
				Road Number 16, 
				Neheru Nagar, 
				Wagle Industrial Estate, 
				Thane West, Thane, Maharashtra</p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</section>
<section class="contact-form">
	<h3 class="text-center slideanim">  CONTACT FORM</h3>
	<p class="text-center slideanim">Please Fill In The Appropriate Details.</p>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 slideanim">
				<form action="#" method="post">
					<div class="row">
						<div class="form-group col-lg-4">
							<label>Name</label>
							<input type="text" name="name" class="form-control" placeholder="" required>
						</div>
						<div class="form-group col-lg-4">
							<label>Email Address</label>
							<input type="email" name="email" class="form-control" placeholder="" required>
						</div>
						<div class="form-group col-lg-4">
							<label>Phone Number</label>
							<input type="tel" name="phone" class="form-control" placeholder="" required>
						</div>
						<div class="clearfix"></div>
						<div class="form-group col-lg-12">
							<label>Message</label>
							<textarea name="message" class="form-control" rows="6" placeholder="" required></textarea>
						</div>
						<div class="form-group col-lg-12">
							<button type="submit" class="btn btn-lg btn-outline">Submit</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>	
<!-- /Contact -->
<!-- Footer -->
<footer class="text-center">
    <div class="footer-above">
        <div class="container">
            <div class="row">
                <div class="footer-col col-md-4">
				<h4>HEAD-QUARTERS</h4>
                    <p>ASHAR IT,THANE WEST,MAHARASHTRA,400615</p>
                    
                </div>
                <div class="footer-col col-md-4">
                    <h4>SOCIAL MEDIA HANDLES</h4>
                    <ul class="list-inline">
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                        </li>
                        <li>
                            <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="footer-col col-md-4">
                 <h4>DISTRIBUTION</h4>
                    <p>ALL OVER MAHARASHTRA</p>
                </div>
            </div>
        </div>
	</div>
    <div class="footer-below">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>© MARKETING NETWORK FOR AGRICULTURAL COMMODITIES PVT. LTD.<a href="" target="_blank"></a></p>
                </div>
            </div>
        </div>
		<a href="#myPage" title="To Top">
			<span class="glyphicon glyphicon-chevron-up"></span>
		</a>
    </div>
</footer>   
<!-- js files -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/classie.js"></script>
<script src="js/TweenMax.min.js"></script>
<script src="js/index2.js"></script>
<script src="js/jquery.pogo-slider.min.js"></script>
<script src="js/main2.js"></script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

  // Store hash
  var hash = this.hash;

  // Using jQuery's animate() method to add smooth page scroll
  // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
  $('html, body').animate({
    scrollTop: $(hash).offset().top
  }, 900, function(){

    // Add hash (#) to URL when done scrolling (default click behavior)
    window.location.hash = hash;
    });
  });
})
</script>
<script>
$(window).scroll(function() {
  $(".slideanim").each(function(){
    var pos = $(this).offset().top;

    var winTop = $(window).scrollTop();
    if (pos < winTop + 600) {
      $(this).addClass("slide");
    }
  });
});
</script>

<script src="js/retina-1.1.0.js"></script>
<script src="js/jquery.hoverex.min.js"></script>
<!-- /js files -->
</body>
</html>
