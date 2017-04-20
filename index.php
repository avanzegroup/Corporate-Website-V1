<?php  error_reporting(1);  ?>
<?php

include 'app1/TweetPHP.php';

$TweetPHP = new TweetPHP(array(
  'consumer_key'              => 'wgB112NXUj9z1MkFrYGR4hdYz',
  'consumer_secret'           => 'NSr7sKoxHjs5PLesUR9IOaVePuPIh5KfuI1D5xQ96ALp40qubM',
  'access_token'              => '738992777925558272-E0R7ZTvFWMko3IdDFzqljNNHHsSQFAu',
  'access_token_secret'       => '7PJB1YGEFKjESs0LiVKvVJ05bJ0FKjttcmnsSszDGHvT5',
  'twitter_screen_name'       => 'avanzegroup'
)); 

$tweet_array = $TweetPHP->get_tweet_array();

$count = count($tweet_array);

?>
<?php $pageName = "Home"; ?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> 
<html lang="en"><!--<![endif]-->  
<head itemscope itemtype="http://schema.org/WebSite">

	<title itemprop='name'>Business Process Outsourcing Services, Bpo Services | Avanze Group Delaware USA</title>

	<meta name="keywords" content="bpo, business process outsourcing, global bpo, bpo services, business process management solutions, global business process outsourcing, business process outsourcing services, bpo solutions, bpo company, business process outsourcing company" />
	<meta name="description" content="Avanze is a leading global provider of consulting, outsourcing and technology services with delivery centers across USA, India" />		
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/media.css" />
   
    <?php include 'template/favicon.php'; ?>
    <?php include 'template/analytics.php'; ?>
    <link href='https://fonts.googleapis.com/css?family=Inder' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-1.11.3.js"></script>
    <script src="js/slider.js"></script>
    <script src="js/lazy.js"></script>
   
    <script type="text/javascript">
	
		$(function() {

		    $("img.lazy").lazyload({
		        event : "sporty"
		    });
	    
		});

		$(window).bind("load", function() {
		    var timeout = setTimeout(function() { $("img.lazy").trigger("sporty") }, 1000);
		});   

	</script>
</head>

<body>

<?php include 'template/header.php'; ?>

<div class="slide-container clearfix" >

	<div class="slider clearfix">

		<div class="sld sldimg" style="display: inline-block;">
			<h2 style="left: 80px;">Welcome to Avanze Group</h2>
			<h4 style="left: 90px;">Transforming Businesses</h4>
			<img class="lazy zimg" src="" data-original="img/slider/1.jpg" alt="Business Process Outsourcing | Avanze Group Delaware USA">
		</div>		


		<div class="sld sldimg">
			<h2>Mortgage Services</h2>
			<h4>Comprehensive end-to-end solutions</h4>			
			<img class="lazy zimg" src="" data-original="img/slider/2.jpg" alt="Mortgage Services">
		</div>


		<div class="sld sldimg">
			<h2>Healthcare Services</h2>
			<h4>Provider, Payer Services & Benefits Administration</h4>
			<img class="lazy zimg" src="" data-original="img/slider/3.jpg" alt="Healthcare Services">
		</div>


		<div class="sld sldimg">
			<h2>Data Management Services</h2>
			<h4>Data Capture, Custom Data Solution</h4>
			<img class="lazy zimg" src="" data-original="img/slider/4.jpg" alt="Data management Services">
		</div>

	
		<div class="sld sldimg">
			<h2>Learning Services</h2>
			<h4>E-Learning, Mobile, Learning Services</h4>
			<img class="lazy zimg" src="" data-original="img/slider/5.jpg" alt="Learning Services">
		</div>


		<div class="sld sldimg">
			<h2>Technology Services</h2>
			<h4>Application Management, System Integration Services</h4>
			<img class="lazy zimg" src="" data-original="img/slider/6.jpg" alt="Technology Services">
		</div>


	</div>


<div class="loader"></div>
		

		<!-- slide-nav Starts -->
		<div class="slide-nav">
			<a href="#" class="prev"></a>
			<a href="#" class="next"></a>
		</div>
		<!-- slide-nav Ends -->

</div>
<!-- slider-container -->


		<!-- content Start -->
		<div class="content clearfix"  id="whatwedo">
		
			<!-- container Starts -->
			<div class="container">

				<!-- intro Starts -->
				<div class="intro clearfix" >

					<div class="sec-header">
						<h1>ABOUT <a href="<?php echo "http://$_SERVER[HTTP_HOST]/"; ?>" class="sec-header-a">AVANZE GROUP</a></h1>
						<div class="intro_separator">
							<span class="separator"></span>
						</div>
					</div>

					<p>
						Avanze is a leading global provider of consulting, <a href="<?php echo "http://$_SERVER[HTTP_HOST]/about.php"; ?>">outsourcing</a> and technology services. We offer true “end-to-end” and customized component solutions for virtually any process with analytics and compliance; supported by domestic, offshore or hybrid delivery models.
					</p>
					
					<a href="about.php">READ MORE</a>
				

				</div>
				<!-- intro Ends -->


				<div class="sep"></div>






					<!-- sec-services Starts -->
					<div class="sec-services clearfix">

						<!-- sec-header Starts -->
						<div class="sec-header">
							<h2>WHAT WE DO?</h2>
							<div class="intro_separator">
							<span class="separator"></span>
							</div>
						</div>
						<!-- sec-header Ends -->

						<!-- row Starts -->
						<div class="row">

							
							<div class="col-2 services">

								<div id="circle1" class="progress">
									<span></span>
									<a href="<?php echo "http://$_SERVER[HTTP_HOST]/"; ?>mortgage-outsourcing-title-and-settlement-services.php" title="Mortgage Services"><i class="fa fa-home" aria-hidden="true"></i></a>
								</div>

								<a href="<?php echo "http://$_SERVER[HTTP_HOST]/"; ?>mortgage-outsourcing-title-and-settlement-services.php" title="Mortgage Services"><h1 class="red-border">MORTGAGE<br>SERVICES</h1></a>

								<p>Avanze provides comprehensive solutions tailored to the needs of mortgage – title industry. We have over 8 years of experience in title insurance back-office processing, providing high quality output at quick turnaround times.</p>


							</div>
							<!-- col-3 End -->

							<div class="col-2 services">

								<div id="circle2" class="progress">

									<a href="<?php echo "http://$_SERVER[HTTP_HOST]/"; ?>data-capture-services.php" title="Data Management Services"><i class="fa fa-database" aria-hidden="true"></i></a>
								</div>

								<a href="<?php echo "http://$_SERVER[HTTP_HOST]/"; ?>data-capture-services.php" title="Data Management Services"><h1 class="red-border">DATA MANAGEMENT<br> SERVICES</h1></a>

								<p>
								Avanze is a leading provider of data capture and document management services. We analyze your business needs and provide you with customized document life cycle management solutions.
								</p>


							</div>
							<!-- col-3 End -->

							<div class="col-2 services">

								<div id="circle3" class="progress">
									<a href="<?php echo "http://$_SERVER[HTTP_HOST]/"; ?>provider-services.php" title="Health Care Services"><i class="fa fa-medkit" aria-hidden="true"></i></a>
								</div>

								<a href="<?php echo "http://$_SERVER[HTTP_HOST]/"; ?>provider-services.php" title="Health Care Services"><h1 class="red-border">HEALTH CARE<br> SERVICES</h1></a>

							    <p>
								Avanze provides comprehensive healthcare business services to our global clients. We manage complete revenue cycle, provide medical billing, medical coding, and adjudication services.
								</p>


							</div>
							<!-- col-3 End -->


							<div class="col-2 services">

								<div id="circle4" class="progress">
									<a href="<?php echo "http://$_SERVER[HTTP_HOST]/"; ?>e-learning.php" title="Learning Services"><i class="fa fa-graduation-cap" aria-hidden="true"></i></a>
								</div>

								<a href="<?php echo "http://$_SERVER[HTTP_HOST]/"; ?>e-learning.php" title="Learning Services"><h1 class="red-border">LEARNING<br>SERVICES</h1></a>

								<p>
								Avanze is an inclusive learning solutions company having strong expertise in delivering innovative, engaging and effective Learning solutions. We leverage our extensive experience over the years to address the growing needs of the learning industry.
								</p>


							</div>
							<!-- col-3 End -->

							<div class="col-2 services">

								<div id="circle5" class="progress">
									<a href="<?php echo "http://$_SERVER[HTTP_HOST]/"; ?>technology-services.php" title="Technology Services"><i class="fa fa-cogs" aria-hidden="true"></i></a>
								</div>

								<a href="<?php echo "http://$_SERVER[HTTP_HOST]/"; ?>technology-services.php" title="Technology Services"><h1 class="red-border">TECHNOLOGY SERVICES</h1></a>

								<p>
								Avanze delivers effective technology solutions which are aligned with the business objectives of our clients. We provide wide range of technology solutions to individuals, small size companies as well as to large corporations. 
								</p>


							</div>
							<!-- col-3 End -->


						</div>
						<!-- row End -->
			

					</div>
					<!-- sec-services Ends -->
					<div class="sep"></div>





			</div>
			<!-- container Ends -->



			<!-- testimonials Starts -->
			<div class="testimonials clearfix" id="testimonials">
				<div class="container" id="whatwedo1">

						<!-- sec-header Starts -->
						<div class="sec-header">
							<h2>CLIENT TESTIMONIALS</h2>
							<div class="intro_separator">
							<span class="separator"></span>
							</div>
						</div>
						<!-- sec-header Ends -->

						<!-- testimonials-content Starts -->

						<div class="testimonials-content clearfix">

							<!-- testimonials-arrow Starts -->
							<!--<div class="testimonials-arrow">
								<i class="fa fa-chevron-left" aria-hidden="true"></i>
								<i class="fa fa-chevron-right" aria-hidden="true"></i>
							</div>
							<!-- testimonials-arrow Ends -->

							<!-- col-4 Starts -->
							<div class="col-4 row">
								<div class="testimonials-item">
								<p>
									"We have worked with Avanze on over 20+ projects and we are impressed with their speed, commitment, quality & simplicity, We value their relationship and appreciate their efforts and continuous support"
								</p>
									<div class="testimonials-stars">
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i>
									</div>

									<div class="testimonials-details">
									<span>Vice President</span>
										<strong>A leading Title & Settlement Services Company</strong>
										
									</div>

								</div>
							</div>
							<!-- col-4 Ends -->

							<!-- col-4 Starts -->
							<div class="col-4 row">
								<div class="testimonials-item">
								<p>"I have been very impressed with Avanze Group. They went that extra mile to take care of our orders and made sure that everything was handled properly, right from on-time deliveries to extended support timings. They did a great job !!!"</p>
									<div class="testimonials-stars">
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i>
									</div>

									<div class="testimonials-details">
									<span>Senior Manager (Operations & Vendor Management)</span>
										<strong>A Top Bank in US</strong>
									</div>

								</div>
							</div>
							<!-- col-4 Ends -->

							<!-- col-4 Starts -->
							<div class="col-4 row">
								<div class="testimonials-item">
								<p>"Thank you team for providing my clients with Highest quality of service, it has been a pleasure to work with such an knowledgeable and incredibly accommodative team"</p>
									<div class="testimonials-stars">
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i>
									</div>


									<div class="testimonials-details">
										
										<span>COO</span>
										<strong>Large US Payer Company</strong>
									</div>

								</div>
							</div>
							<!-- col-4 Ends -->

											

						</div>
						<!-- testimonials-content ends -->

				</div>
				<!-- container Ends -->
			</div>
			<!-- testimonials Ends -->

			

			<!-- count Starts -->
			<div class="count" >

				<div class="container">
					<!-- row Starts -->
					<div class="row">
						

						<div class="col-4 services">
							<div class="stat">
								<div class="stat-count">
								77
								</div>
								<div class="line"></div>
								<div class="stat-icon">
									<i class="fa fa-black-tie" aria-hidden="true"></i>
									CLIENTS
								</div>
							</div>
						</div>
						<!-- col-3 End -->


						<!-- col-3 End -->
						<div class="col-4 services">
							<div class="stat">
								<div class="stat-count">
								5
								</div>
								<div class="line"></div>
								<div class="stat-icon">
									<i class="fa fa-rocket" aria-hidden="true"></i>
									SERVICE LINES
								</div>
							</div>
						</div>
						<!-- col-3 End -->



						<!-- col-3 End -->
						<div class="col-4 services">
							<div class="stat">
								<div class="stat-count">
								3
								</div>
								<div class="line"></div>
								<div class="stat-icon">
									<i class="fa fa-thumbs-up" aria-hidden="true"></i>
									LOCATIONS
								</div>
							</div>
						</div>
						<!-- col-3 End -->


						<!-- col-3 End -->


					</div>
					<!-- row End -->
				</div>
			</div>
			<!-- count Ends -->


			<!-- clients Starts -->
			<div class="clients clearfix" >

				<div class="container">

				<div class="row">
					<!-- sec-header Starts -->
					<div class="sec-header">
						<h2>APPLICATION EXPERTISE</h2>
						<div class="intro_separator">
							<span class="separator"></span>
						</div>
					</div>
					<!-- sec-header Ends -->


				<!-- Elastislide Carousel -->

				<div class="carousel">

					<div class="carousel-holder">
						<img src="img/client/client1.png" alt="Title Point - Avanze Group" />
						<img src="img/client/client2.png" alt="Resware - Avanze Group" />
						<img src="img/client/client3.png" alt="Data Trace - Avanze Group" />
						<img src="img/client/client4.gif" alt="Netro online - Avanze Group" />
						<img src="img/client/client5.jpg" alt="Ram Quest - Avanze Group" />
						<img src="img/client/client6.jpg" alt="Soft Pro - Avanze Group" />
						<img src="img/client/client7.jpg" alt="Closing Title - Avanze Group" />
						<img src="img/client/client8.gif" alt="Medisoft Clinical - Avanze Group" />
						<img src="img/client/client9.gif" alt="Optium 360 encoder pro - Avanze Group" />
						<img src="img/client/client10.jpg" alt="Surgisource - Avanze Group" />
					</div>

				</div>


				</div>
				<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- clients Ends -->




			<!-- twitter Starts -->
			<div class="twitter clearfix">

				<div class="container">

				<div class="row">


						<div class="twitter-scroll">
		  
							  <div class="dap-tw-logo">
							   <div class="twitter-bird"></div>
							  </div>

							  <?php

							  for ($i=0; $i < $count; $i++) { 
	

								$tweet = $tweet_array[$i];

							

								?>

							  <a class="dap-tw-item" href="<?php echo $tweet['entities']['urls'][0]['url']; ?>" target="_blank">
							    <span class="dap-tw-name">@<?php echo $tweet['user']['name']; ?>:</span>
							    <span class="dap-tw-text"><?php echo $tweet['text'];  ?></span>
							  </a>


								<?php } ?>
							  


						  
						</div>




				</div>
				<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- twitter Ends -->
			


		</div>
		<!-- content End -->



		<?php include 'template/footer.php'; ?>



<a href="#" id="back-to-top" title="Back to top" class="show">
	<i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
</a>


<a href="#" id="back-to-bottom" title="Back to Bottom" class="show">
	<i class="fa fa-arrow-circle-down" aria-hidden="true"></i>
</a>


</body>

<script src="js/jquery.marquee.min.js"></script>
<script src="js/jquery.counterup.js"></script>
<script src="js/waypoints.js"></script>
<script src="js/progress.js"></script>
<script src="js/avanzegroup.js"></script>

<script type="text/javascript">
$(function(){

	$('.twitter-scroll').marquee({
	  duration: 15000,
	  pauseOnHover: true
	});


});	
</script>


</html>