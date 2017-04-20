<?php error_reporting(0); ?>
<?php $pageName = "contact"; ?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> 
<html lang="en"><!--<![endif]-->  
<head>
	<title>Contact Us | Avanze Group 1000 N.West Street, Suite 1200, Wilmington Delaware 19801 USA</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
     <link rel="stylesheet" type="text/css" href="css/media.css" />
    <?php include 'template/favicon.php'; ?>
    <?php include 'template/analytics.php'; ?>
    <link href='https://fonts.googleapis.com/css?family=Inder' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-1.11.3.js"></script>
    <script src="js/slider.js"></script>
</head>
<body>


		<?php include 'template/header.php'; ?>

		
		<!-- content Start -->
		<div class="content clearfix">


		<div class="services-header">
			<div class="servies-banner zimg1" style="background-image: url('img/contact-banner.png');"></div>
			<img src="img/gear.png" class="ani ani2">
			<img src="img/gear.png" class="ani">

			<div class="container">
			<h1>CONTACT AVANZE</h1>
			</div>

		</div>


			<!-- container Starts -->
			<div class="container">



				<div class="sec-nav">
					<a href="<?php echo "http://$_SERVER[HTTP_HOST]/"; ?>index.php" title="Business Process Outsourcing Services, IT, Software Development, Mortgage Services | Avanze Group Delaware USA">Home</a> / Contact Avanze
				</div>


				<!-- intro Starts -->
				<div class="ser clearfix">


							<div class="sec-content">

								<!-- sec-container -->
								<div class="sec-container clearfix">


								<div class="sec-content-left">

								<div class="services-description">

								<h2><span>CONTACT US</span></h2>

								</div>

					
								<div class="sec-content-p">

									<p>
									Thank you for showing interest in <a href="<?php echo "http://$_SERVER[HTTP_HOST]/"; ?>" title="Avanze Group">Avanze</a>. Please provide the following information about your business needs to help us serve you better. You should receive a response from us at the earliest.
									</p>

								</div>
								<!-- sec-content-p /-->


								<div class="contact-form">

								<form action="" method="post" id="emailform">
									<input type="text" placeholder="First Name" name="first_name" class="first_name"> 
									<input type="text" placeholder="Last Name" name="last_name" class="last_name">
									<input type="text" placeholder="Company Name" name="company_name" class="company_name">
									<input type="text" placeholder="E-mail" name="email" class="email">
									<input type="text" placeholder="Phone" name="phone" class="phone">
									<textarea placeholder="Message" name="message" class="message"></textarea>
									<input type="submit" value="SEND" class="submit">
								</form>

								</div>
								<!-- contact-form -->




							<div class="services-description-subhead">

							<h2>Avanze Solutions Inc.</h2>

							</div>

								<div class="sec-content-p">

									<p>
									<strong>US Address:</strong><br>
									1000 N.West Street,<br>
									Suite 1200,<br>
									Wilmington<br>
									Delaware 19801<br>
									USA<br>
									Phone : <b>302-319-4848</b><br>
									
									Email : <b><a href="mailto:info@avanzegroup.com" target="_blank" style="color: #404040; text-decoration: none;">info@avanzegroup.com</a></b>

									</p>


								</div>
								<!-- sec-content-p /-->



							<div class="services-description-subhead">

							<h2>Join Us</h2>

							</div>
			



						<div class="sec-content-p" style="text-align: left;">

							<p>We look forward to your talent and passion. Please send your resume to <strong>careers@avanzegroup.com</strong></p>

						</div>
						<!-- sec-content-p /-->



							</div>
							<!-- sec-content-left ends -->


							<?php include 'template/general-sidebar.php'; ?>

							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3067.6651428313726!2d-75.5521786850885!3d39.74717210401161!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c6fd3ff6591da9%3A0x39c6af6966c0c463!2sAvanze+Group!5e0!3m2!1sen!2sin!4v1469549385749" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>



								</div>
								<!-- sec-container /-->
						


							</div>
							<!-- sec-content Ends /-->


				</div>
				<!-- intro Ends -->


				

				
			</div>
			<!-- container Ends -->

			
			<?php include 'template/general-contact.php'; ?>


		</div>
		<!-- content End -->


	<?php include 'template/footer.php'; ?>

<div class='overlay'>
  <div class='panel'>
    <div class='inner'>
				
		<a href="" class="close"><i class="fa fa-times-circle-o" aria-hidden="true"></i></a>
		<h2></h2>
        <h1><i class="fa fa-check" aria-hidden="true"></i> Your message has sent.</h1>
        <p>Thank you for contacting us, we will get back to you soon</p>
      </div>
  </div>
</div>



<a href="#" id="back-to-top" title="Back to top" class="show">
	<i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
</a>
<a href="#" id="back-to-bottom" title="Back to Bottom" class="show">
	<i class="fa fa-arrow-circle-down" aria-hidden="true"></i>
</a>

</body>
<script type="text/javascript">
$(document).ready(function(){

	$('.submit').click(function(e){
		
		var first_name = $('.first_name').val();
		var last_name = $('.last_name').val();
		var company_name = $('.company_name').val();
		var email = $('.email').val();
		var phone = $('.phone').val();
		var message = $('.message').val();


		if(first_name == "")
		{
			$('.first_name').addClass('input-red');
			//alert("ERROR: Please Enter First name");
		}
		else if(email == "")
		{
			$('.email').addClass('input-red');
			//alert("ERROR: Please Enter Email");
		}
		else if(message == "")
		{
			$('.message').addClass('input-red');
			//alert("ERROR: Please Enter Message");
		}
		else
		{
			$('input, textarea').removeClass('input-red');

			$('.submit').val("Sending Mail...");
			$('.submit').attr('disabled','disabled');

			post_data = {

				'first_name' : $('.first_name').val(),
				'last_name' : $('.last_name').val(),
				'company_name' : $('.company_name').val(),
				'email' : $('.email').val(),
				'phone' : $('.phone').val(),
				'message' : $('.message').val()

			};
			

			    $.post("email/email.php", post_data, function(data, status){
			        //alert("Data: " + data.text + "\nStatus: " + status);


			        if(data.type == 'error')
			        {
				        $('.inner').find('h1').text(data.text);
				         $('.inner').find('p').text('');
				         overlay.classList.add('show');
				         $("#emailform")[0].reset();
			        	$('.submit').val("Submit");
						$('.submit').prop('disabled', false); 
			        }
			        else
			        {
			        	$('.inner').find('h2').text(data.text);	
			        	 overlay.classList.add('show');
			        	 $("#emailform")[0].reset();
			        	$('.submit').val("Submit");
						$('.submit').prop('disabled', false); 
			        }



			    }, 'json');

		}




	e.preventDefault();
	});



var doc = document,
    overlay = doc.querySelector('.overlay');
  //overlay.classList.add('show');


// Close the modal
doc.querySelector('.close').addEventListener("click", function(e){
  overlay.classList.remove('show');
  e.preventDefault();
});


});
</script>
</html>