<?php error_reporting(0); ob_start(); ?>
<?php

if(isset($_POST['yes']))
{
	$email = $_POST['email'];


$to = 'avanzegroup@gmail.com';
$subject = 'Avanze Group Website: Unsubcriber Details'; 
$headers = "From: advantage@avanzegroup.com \r\n";
$headers .= "Reply-To: advantage@avanzegroup.com\r\n";
//$headers .= "CC: noreply@avanzegroup.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


$message = '<html>
<head>
  <title></title>

</head>
<body style="margin: 0;">

<table align="center" border="0" cellspacing="0" cellpadding="0" style="width: 600px;">

  <tbody>
    <tr>

        <td align="center" valign="top">

            <table align="center" border="0" cellspacing="0" cellpadding="0" width="100%">
              <tbody>
                <tr>
                    <td align="center" height="7" style="border-top: 3px solid #ED7624;">
                        
                    </td>
                </tr>
              </tbody>
            </table>


            <table align="center" border="0" cellspacing="0" cellpadding="0" width="100%">
              <tbody>
                <tr>
                    <td valign="middle" align="center" width="100%"  height="80">
                        <a href="http://avanzegroup.com" target="_blank"><img src="http://www.avanzegroup.com/img/email/logo.png" /></a>
                    </td>
                    
                </tr>
              </tbody>
            </table>


            <table align="center" border="0" cellspacing="0" cellpadding="0" width="100%" height="40" style="
            border-top: 5px solid #ffffff;
            border-bottom: 5px solid #ffffff;">

              <tbody>


                 <tr><td height="30"></td></tr>

                <tr>
                  <td>
                      <table align="center" border="0" cellspacing="0" cellpadding="0" width="100%">
                        <tbody>
                          <tr>
                          <td width="250" style="font-size: 1.6em; color: #333333; font-family:calibri;">
                            UNSUBCRIBER DETAILS
                          </td>
                          <td valign="middle">
                            <table align="center" border="0" cellspacing="0" cellpadding="0" width="100%">
                              <tbody>
                                <tr>
                                  <td height="10" width="100%" background="http://www.inman.com/wp-content/themes/inman/images/newsletter/Line-Pattern2.png" style="background-size: 100%; height: 10px;">&nbsp;</td>
                                </tr>
                              </tbody>
                            </table>
                          </td>
                        </tr>
                        </tbody>
                      </table>
                  </td>
                </tr>



                <tr><td height="25"></td></tr>



                <tr>
                 <td>
                 <table align="center">
                  <tbody>
                  <tr>
                  <td valign="middle" align="left">
                    <b>'.$email.'</b> - want to unsubscribe
                  </td>
                  </tr>
                  </tbody>
                 </table>
                  </td>
                </tr>

                 <tr><td height="40"></td></tr>


                      <table align="center" border="0" cellspacing="0" cellpadding="0" width="100%">
                      <tbody>
                        <tr>
                            <td align="center" height="7" style="border-top: 3px solid #ED7624;">
                                  
                            </td>
                        </tr>
                      </tbody>
                    </table>

                     <tr><td height="25"></td></tr>


              </tbody>


            </table>




        </td>


    </tr>
  </tbody>

</table>

</body>
</html>';

$mail = mail($to, $subject, $message, $headers);


header('location: unsubscribed.php');

}



if(isset($_POST['no']))
{
	
	header('location: index.php');
}

?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> 
<html lang="en"><!--<![endif]-->  
<head>
	<title>Avanze Unsubscribe | Avanze Group Delaware USA</title>
	<meta name="description" content="Our deep domain expertise combined with experienced workforce and application of innovative technology equips us to deliver best-in-class business solutions to our clients." />
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/media.css" />
    <?php include 'template/favicon.php'; ?>
    <?php include 'template/analytics.php'; ?>


</head>
<body>


		<!-- content Start -->
		<div class="content clearfix">


			<!-- container Starts -->
			<div class="container">


			<div class="unsub-logo">		
				<div class="logo" style="float: none; margin: 0 auto;">
					<a href="http://localhost/" title="Business Process Outsourcing Services, IT, Software Development, Mortgage Services | Avanze Group Delaware USA"><img src="img/final1.png" alt="Avanze Group"/></a>
				</div>
			</div>
			<!-- unsub-logo -->


			<div class="unsub-banner">
				<img src="img/unsubemail.jpg" />
			</div>


			<div class="unsub-para">
				Do you want to unsubscribe?
			</div>


			<div class="unsub-button">

				<ul>
					<li>
						<form action="" method="POST">
							<input type="hidden" name="email" value="<?php echo $_GET['email']; ?>"/>
							<input type="submit" name="yes" value="YES" class="unsub-button1"/>
						</form>
					</li>
					<li>
						<form action="" method="POST">
							<input type="submit" name="no" value="NO" class="unsub-button2"/>
						</form>
					</li>
				</ul>

			</div>
			<!-- unsub-button -->
			

			</div>
			<!-- container Ends -->

			
		

		</div>
		<!-- content End -->



</body>


</html>