<?php

@include 'config.php';



?>

<!DOCTYPE HTML>
<html class="no-js" lang="zxx">
	

<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="keywords" content="HTML, IconiqThemes Themeforest, Best Theme ">
		<!-- title here -->
		<title>Triolift Center </title>
		<!-- Favicon and Touch Icons -->
		<link rel="shortcut icon" href="images/fav.jpg">
		<!-- Place favicon.ico in the root directory -->
		<link rel="apple-touch-icon" href="apple-touch-icon.html">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/flaticon.css">
		<!-- Plugin CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/owl.theme.css">
		<link rel="stylesheet" href="css/owl.transitions.css">
		<link rel="stylesheet" href="css/meanmenu.min.css">
		<link rel="stylesheet" href="css/lightbox.min.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
		<!--Theme custom css -->
		<link rel="stylesheet" href="css/typography.css">
		<link rel="stylesheet" href="css/shortcode.css">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="css/color.css">
		<!--Theme Responsive css-->
		<link rel="stylesheet" href="css/responsive.css" />
		<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
	</head>
	<body>
		<!-- LOADER --> 
        <div id="loader-overflow">
          <div id="loader3" class="loader-cont">Please enable JS</div>
        </div> 
        <!-- Header Start -->
		<header class="header-style1-1">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-3 col-md-3 col-sm-4">
						<!-- Logo Start -->
						<h1 class="logo"><a href="index.html"><img src="images/logo.png" alt="logo"></a></h1>
						<!-- Logo End -->
					</div>
					<div class="col-lg-6 col-md-6 col-sm-8">
						<div class="d-lg-flex justify-content-lg-center">
							<div class="menu-holder">
	                            <div class="mobile-menu"></div>
	                            <div class="main-menu navigation">
	                                <nav>
	                                    <ul>
	                                        <li><a href="index.html">Home</a></li>                                                         
	                                        
	                                        <li class="active"><a href="subject.php">Courses</a>
	                                        	
	                                        </li>
	                                        <li><a href="timetable.html">Timetable</a>
	                                        	
	                                        </li>
	                                        <li><a href="#">Pages</a>
                                            	<ul class="sub-menu">
                                            		<li><a href="teachers.html">Teachers</a>
		                                            	
			                                        </li>
                                            		
	                                               
			                                       
			                                        <li><a href="faq.html">Faqs</a></li>
	                                            </ul>
	                                        </li>
	                                        <li><a href="contact.html">Contact</a></li>
	                                    </ul>
	                                </nav>
	                            </div>
	                        </div>
                        </div> 
					</div>
					<div class="col-lg-3 col-md-3 hidden-xs">
						<div class="helping-box float-lg-right d-flex align-items-center">
							<div class="icon-box">
								<i class="fa fa-play"></i>
							</div>
							<div class="overflow-text">
								<h6 class="title"><a href="login/register.php">Register</a></h6>
								<h6 class="title"><a href="login/login.php">Login</a></h6>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- Header End -->
		
		<!-- Section Start -->
		<section class="pt-130 pb-130 section">
			<div class="container">

				<div class="section-title-2 mb-67 text-left">
					<div class="row d-lg-flex">
						<div class="col-lg-9 col-md-9">
							<h2 class="title m-0">Our Courses </h2>
						</div>
						
					</div>
				</div>

				<div class="row">

					<?php
      
	  $select_products = mysqli_query($conn, "SELECT * FROM `players`");
      if(mysqli_num_rows($select_products) > 0){
         while($fetch_product = mysqli_fetch_assoc($select_products)){
      ?>
			  
					<div class="col-md-6 col-lg-4">
						<!-- Team Thumb Start Here -->
						<div class="team-thumb text-center">

							<form action="" method="post">

							<figure class="blog-img">
								<img src="login/crud/uploads/<?php echo $fetch_product['photo']; ?>" alt="blog">
							</figure>
							<div class="text">
                                <h4 class="title"><a href="blog-detail.html"><?php echo $fetch_product['pname']; ?></a></h4>
								<p class="designation th-cl">Computer Engineering</p>
								<div class="btn-group">
                                	<div class="btn blue-bg">$<?php echo $fetch_product['phone']; ?></div>
                                	<a href="#" class="btn icon-btn th-bg">Enroll Course</a>
                                </div>
							
                            </div>
						</div>
						<!-- Team Thumb End Here -->
					</div>
				</form>

				<?php
				   };
				};
				?>					
					
					

					<div class="col-sm-12">
						<div class="pagination-area mt-30 text-center">
							<ul>
								<li><a href="subject.php"><i class="fa fa-angle-left"></i></a></li>
								<li class="active"><a href="subject.php">1</a></li>
								<li><a href="subject.html">2</a></li>
								
								<li><a href="subject.html"><i class="fa fa-angle-right"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Section End -->
		<!-- Footer Start -->
		<footer class="footer-style-1" title="Footer">
        	<div class="container">
        		<div class="row">
        			<div class="col-lg-4 col-md-6">
        				<!-- Widget Start -->
        				<div class="widget widget-about">
        					<div class="widget-title mb-28">
                                <h5 class="title"><img src="images/logo.png" alt="oscarthemes"></h5>
                            </div><!-- /Widget Title -->
        					<div class="text">
        						<p>Our Social Medias: </p>
        					</div>
        					<ul class="social-meta style-2">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram"></i></a></li>	
								<li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
							</ul>
        				</div>
        				<!-- Widget End -->
        			</div>
        			<div class="col-lg-4 col-md-6">
        				<!-- Widget Start -->
        				<div class="widget widget_nav_menu">
                            <div class="widget-title">
                                <h5 class="title"> Latest Courses</h5>
                            </div><!-- /Widget Title -->
                            <ul>
                                <li><a href="#">Computer Engineering</a></li>
                                <li><a href="#">Web Design & Development</a></li>
                                <li><a href="#">Business Studies</a></li>
                                <li><a href="#">Civil Engineering</a></li>
                            </ul><!-- / Ul -->
                        </div>
        				<!-- Widget End -->
        			</div>
        			<div class="col-lg-4 col-md-6">
        				<!-- Widget Start -->
        				<div class="widget newsletter-widget">
                            <div class="widget-title">
                                <h5 class="title"> Newsletters</h5>
                            </div><!-- /Widget Title -->
                            <div class="text">
                                <p>Subscribe Our Newsletter To Get More Update And Join Our Course Information </p>
                                <!-- Begin Mailchimp Signup Form -->
                                <div id="mc_embed_signup" class="input-field nl-form-container clearfix">
                                    <form action="https://bilalmghl.us19.list-manage.com/subscribe/post-json?u=224c3c7777919c909b29129f9&amp;id=4f4eeeae5b&amp;c=?" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="newsletterform validate" target="_blank" novalidate="">
                                        <input value="" type="email" name="EMAIL" id="mce-EMAIL" maxlength="32" placeholder="Enter Your Email" class="email form-control nl-email-input" required="">
                                        <div style="position: absolute; left: -5000px;">
                                            <input type="text" name="b_224c3c7777919c909b29129f9_4f4eeeae5b" tabindex="-1" value="">
                                        </div>
                                        <label class="submit-btn th-bg th-bdr"><input id="mc-embedded-subscribe" type="submit" name="subscribe" value="Subscribe"></label>
                                    </form>
                                    <div id="notification_container"></div>
                                </div>
                                <!--End mc_embed_signup-->
                            </div>
                        </div>
        				<!-- Widget End -->
        			</div>
        		</div>
        	</div>
        	<div class="copy-right text-center">
        		<div class="container">
        			<div class="row">
        				<div class="col-lg-12">
        					<p>Copyright ©2023 <span class="th-cl">Triolift Center</span>. All Rights Reserved</p>
        				</div>
        			</div>
        		</div>
        	</div>
        </footer>
		<!-- Footer End -->
		<!-- js file start -->
		<script src="js/vendor/jquery-1.12.0.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/Popper.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/isotope.pkgd.min.js"></script>
		<script src="js/imagesloaded.pkgd.min.js"></script>
		<script src="js/scrollup.js"></script>
		<script src="js/jquery.counterup.min.js"></script>
		<script src="js/waypoints.min.js"></script>
		<script src="js/jquery.meanmenu.js"></script>
		<script src="js/lightbox.min.js"></script>
		<script src="js/jquery.magnific-popup.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcvAXp35fi4q7HXm7vcG9JMtzQbMzjRe8"></script>
        <script src="js/gmaps.js"></script>
		<script src="js/main.js"></script>
		<!-- End js file -->
	</body>


</html>