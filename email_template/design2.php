<?php
error_reporting(0);

if(isset($_POST['email']) && isset($_POST['subject']))
{
  $to = $_POST['email'];
  $subject = $_POST['subject'];

}


$headers = "From: test@avanzegroup.com \r\n";
$headers .= "Reply-To: test@avanzegroup.com\r\n";
$headers .= "CC: test@avanzegroup.com\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


$message = '
<html>
<head>
  <title></title>
  <style type="text/css">
  @import url(http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800);
  @import url(https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i);  
  @import url(https://fonts.googleapis.com/css?family=Roboto+Condensed);
  </style>
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
                    <td valign="middle" align="left" width="80%"  height="80">
                        <img src="http://www.avanzegroup.com/img/email/logo.png" />
                    </td>
                    <td valign="middle" align="right" width="5%"  height="80">
                      <a href=""><img src="http://www.avanzegroup.com/img/facebook.png" width="25" /></a>
                    </td>
                    <td valign="middle" align="right" width="5%"  height="80">
                       <a href=""><img src="http://www.avanzegroup.com/img/twitter.png" width="25" /></a>
                    </td>
                    <td valign="middle" align="right" width="5%"  height="80">
                       <a href=""><img src="http://www.avanzegroup.com/img/g+.png" width="25" /></a>
                    </td>
                    <td valign="middle" align="right" width="5%"  height="80">
                       <a href=""><img src="http://www.avanzegroup.com/img/linkedin.png" width="25" /></a>
                    </td>
                </tr>
              </tbody>
            </table>


            <table align="center" border="0" cellspacing="0" cellpadding="0" width="100%" height="40" style="
            border-top: 5px solid #ffffff;
            border-bottom: 5px solid #ffffff;">

              <tbody>
                


                <tr><td align="center" style="border-bottom: #cccccc 1px solid;"><img src="http://www.avanzegroup.com/img/email/banner.jpg" width="640"/></td></tr>

                <tr><td height="25"></td></tr>

                <tr>
                  <td align="left" style="font-size: 1em; color: #333333; font-family: Roboto Condensed, Helvetica, arial, sans-serif; text-align: justify;">
                    <b>Avanze Solutions Inc.</b> is in the business of providing comprehensive, reliable and fast solutions to the needs of title industry. 
                  </td>
                </tr>

                <tr><td height="15"></td></tr>

                <tr>
                  <td align="left" style="font-size: 1em; color: #333333; font-family: Roboto Condensed, Helvetica, arial, sans-serif; text-align: justify;">
                    Accuracy is everything in the title search business our team of experienced workforce ensures that each component of client’s requirement is delivered as per their expectations with top quality service and considerable cost savings. 
                  </td>
                </tr>

<tr><td height="35"></td></tr>
  <tr mc:repeatable>
      <td align="center">
        <table border="0" align="center" width="580" cellpadding="0" cellspacing="0" >
          <tr>
            <td>
              <table border="0" align="center" width="100%" cellpadding="0" cellspacing="0" bgcolor="ffffff" class="main-content">     
                
                <tr>
                  <td align="center">
                    <table width="100%" align="center" cellpadding="0" cellspacing="0" border="0" class="container560">
                      <tr>
                            <td align="center" mc:edit="feature-header" style="color: #424345; font-size: 18px; font-weight: bold; font-family: Roboto Slab, Arial, sans-serif;">
                              <multiline>
                                ADVANTAGE AVANZE
                              </multiline>
                            </td> 
                          </tr>
                          <tr><td height="15"></td></tr>

                          <tr>
                            <td align="center" mc:edit="feature-subheader" style="color: #95a0a6; font-size: 12px; font-weight: 300; font-family: Roboto, Arial, sans-serif;">
                              <multiline>
                                Transforming Businesses 
                              </multiline>
                            </td> 
                          </tr>
                          <tr><td height="35"></td></tr>
                      <tr>
                        
                        <td>
                  
                              <table border="0" width="170" align="left" cellpadding="0" cellspacing="0" class="section-item">
                            <tr>
                              <td align="center" class="feature-img">
                                <a href="" style=" border-style: none !important; width: 180px; display: block; border: 0 !important;"><img editable="true" mc:edit="feature-image1" src="http://avanzegroup.com/img/email/1.png" style="display: block; width: 60px; height: 60px;" width="60" height="60" border="0" alt="feature image1" /></a>
                              </td>
                            </tr>
                            
                            <tr><td height="15"></td></tr>
                            
                            <tr>
                                  <td align="center" mc:edit="feature-title1" style="color: #424345; font-size: 15px; font-weight: bold; font-family: Roboto Slab, Arial, sans-serif;">
                                    <multiline>
                                      Considerable Cost Savings
                                    </multiline>
                                  </td> 
                                </tr>
                                
                                <tr><td height="10"></td></tr>
                            
                          </table>
                          
                          <table border="0" width="10" align="left" cellpadding="0" cellspacing="0">
                            <tr><td width="10" height="40"></td></tr>
                          </table>
                          
                          <table border="0" width="170" align="left" cellpadding="0" cellspacing="0" class="section-item">
                            <tr>
                              <td align="center" class="feature-img">
                                <a href="" style=" border-style: none !important; width: 180px; display: block; border: 0 !important;"><img editable="true" mc:edit="feature-image2" src="http://avanzegroup.com/img/email/2.png" style="display: block; width: 60px; height: 60px;" width="60" height="60" border="0" alt="feature image2"/></a>
                              </td>
                            </tr>
                            
                            <tr><td height="15"></td></tr>
                            
                            <tr>
                                  <td align="center" mc:edit="feature-title2" style="color: #424345; font-size: 15px; font-weight: bold; font-family: Roboto Slab, Arial, sans-serif;">
                                    <multiline>
                                      Faster Turnaround Times
                                    </multiline>
                                  </td> 
                                </tr>
                                
                                <tr><td height="10"></td></tr>
                                
                              
                            
                          </table>
                          
                          <table border="0" width="10" align="left" cellpadding="0" cellspacing="0">
                            <tr><td width="10" height="40"></td></tr>
                          </table>
                          
                          <table border="0" width="170" align="left" cellpadding="0" cellspacing="0" class="section-item">
                            <tr>
                              <td align="center" class="feature-img">
                                <a href="" style=" border-style: none !important; width: 180px; display: block; border: 0 !important;"><img editable="true" mc:edit="feature-image3" src="http://avanzegroup.com/img/email/3.png" style="display: block; width: 60px; height: 60px;" width="60" height="60" border="0" alt="feature image3" /></a>
                              </td>
                            </tr>
                            
                            <tr><td height="15"></td></tr>
                            
                            <tr>
                                  <td align="center" mc:edit="feature-title3" style="color: #424345; font-size: 15px; font-weight: bold; font-family: Roboto Slab, Arial, sans-serif;">
                                    <multiline>
                                      Revised Parameters
                                    </multiline>
                                  </td> 
                                </tr>
                                
                                <tr><td height="10"></td></tr>
                                
                                
                            
                          </table>
                          
                            </td>


                          
                      </tr>

                    <tr><td height="35"></td></tr>
                      <tr>
                        
                        <td>
                  
                              <table border="0" width="170" align="left" cellpadding="0" cellspacing="0" class="section-item">
                            <tr>
                              <td align="center" class="feature-img">
                                <a href="" style=" border-style: none !important; width: 180px; display: block; border: 0 !important;"><img editable="true" mc:edit="feature-image1" src="http://avanzegroup.com/img/email/4.png" style="display: block; width: 60px; height: 60px;" width="60" height="60" border="0" alt="feature image1" /></a>
                              </td>
                            </tr>
                            
                            <tr><td height="15"></td></tr>
                            
                            <tr>
                                  <td align="center" mc:edit="feature-title1" style="color: #424345; font-size: 15px; font-weight: bold; font-family: Roboto Slab, Arial, sans-serif;">
                                    <multiline>
                                      Reliable Service
                                    </multiline>
                                  </td> 
                                </tr>
                                
                                <tr><td height="10"></td></tr>
                            
                          </table>
                          
                          <table border="0" width="10" align="left" cellpadding="0" cellspacing="0">
                            <tr><td width="10" height="40"></td></tr>
                          </table>
                          
                          <table border="0" width="170" align="left" cellpadding="0" cellspacing="0" class="section-item">
                            <tr>
                              <td align="center" class="feature-img">
                                <a href="" style=" border-style: none !important; width: 180px; display: block; border: 0 !important;"><img editable="true" mc:edit="feature-image2" src="http://avanzegroup.com/img/email/5.png" style="display: block; width: 60px; height: 60px;" width="60" height="60" border="0" alt="feature image2"/></a>
                              </td>
                            </tr>
                            
                            <tr><td height="15"></td></tr>
                            
                            <tr>
                                  <td align="center" mc:edit="feature-title2" style="color: #424345; font-size: 15px; font-weight: bold; font-family: Roboto Slab, Arial, sans-serif;">
                                    <multiline>
                                      Dependable Services
                                    </multiline>
                                  </td> 
                                </tr>
                                
                                <tr><td height="10"></td></tr>
                                
                              
                            
                          </table>
                          
                          <table border="0" width="10" align="left" cellpadding="0" cellspacing="0">
                            <tr><td width="10" height="40"></td></tr>
                          </table>
                          
                          <table border="0" width="170" align="left" cellpadding="0" cellspacing="0" class="section-item">
                            <tr>
                              <td align="center" class="feature-img">
                                <a href="" style=" border-style: none !important; width: 180px; display: block; border: 0 !important;"><img editable="true" mc:edit="feature-image3" src="http://avanzegroup.com/img/email/6.png" style="display: block; width: 60px; height: 60px;" width="60" height="60" border="0" alt="feature image3" /></a>
                              </td>
                            </tr>
                            
                            <tr><td height="15"></td></tr>
                            
                            <tr>
                                  <td align="center" mc:edit="feature-title3" style="color: #424345; font-size: 15px; font-weight: bold; font-family: Roboto Slab, Arial, sans-serif;">
                                    <multiline>
                                      Experienced, accurate and fast
                                    </multiline>
                                  </td> 
                                </tr>
                                
                                <tr><td height="10"></td></tr>
                                
                                
                            
                          </table>
                          
                            </td>


                          
                      </tr>


                    </table>
                  </td>
                </tr>
                
              </table>
            </td>
          </tr>
        </table>
      </td>
    </tr>




                    <tr><td height="35"></td></tr>


                <tr>
                  <td>
                      <table align="center" border="0" cellspacing="0" cellpadding="0" width="100%">
                        <tbody>
                          <tr>
                          <td width="210" style="font-size: 1.2em; font-weight:600; color: #333333; font-family: Roboto Condensed, Helvetica, arial, sans-serif;">
                            SERVICES OFFERINGS
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

                      <table align="center" border="0" cellspacing="0" cellpadding="0" width="100%" style="border-right: 1px dotted #FDC58F; border-left: 1px dotted #FDC58F; border-bottom: 1px dotted #FDC58F;">
                        <tbody>

                          <tr> 
                            <td align="center" style="background-color: #00aad1; color: #fff; font-size: 1.2em; font-family: Roboto Condensed, Helvetica, arial, sans-serif; padding: 5px 0px;">

                              TITLE & SETTLEMENT SERVICES

                            </td>
                          </tr>


                            <tr>
                              <td align="center">

                                <table align="center" border="0" cellspacing="0" cellpadding="0" width="100%" style="margin-top: 0.2em;">
                                  <tbody>
                                    <tr>
                                      <td align="center" width="33.3333333333%" style="background-color: #FDC58F; font-size: 1.1em; font-family: Roboto Condensed, Helvetica, arial, sans-serif; padding: 5px 0px;">TITLE SEARCH</td>
                                      <td align="center" width="33.3333333333%" style="background-color: #FDC58F; font-size: 1.1em; font-family: Roboto Condensed, Helvetica, arial, sans-serif; padding: 5px 0px;">TITLE PRODUCTION</td>
                                      <td align="center" width="33.3333333333%" style="background-color: #FDC58F; font-size: 1.1em; font-family: Roboto Condensed, Helvetica, arial, sans-serif; padding: 5px 0px;">OTHER TITLE REPORT</td>
                                    </tr>

                                    <tr>
                                      <td style="border-right: 1px dotted #FDC58F;">
                                          <ul style="font-size: 0.9em; font-family: Roboto Condensed, Helvetica, arial, sans-serif; margin-top: 5px; line-height: 20px;">
                                            <li>Current Owner Search</li>
                                            <li>Two Owner & Full Search</li>
                                            <li>Statutory Title Search</li>
                                            <li>Legal & Vesting Search</li>
                                            <li>Update/Bringdown</li>
                                            <li>Judgment & Lien Search</li>
                                            <li>Foreclosure & Preforeclose Search</li>
                                          </ul>
                                      </td>
                                      <td style="border-right: 1px dotted #FDC58F;">
                                          <ul style="font-size: 0.9em; font-family: Roboto Condensed, Helvetica, arial, sans-serif; margin-top: 5px; line-height: 20px;">
                                            <li>Title Commitment Report</li>
                                            <li>Property Report Typing</li>
                                            <li>Legal & Vesting Report</li>
                                            <li>Title Abstract Entry</li>
                                            <li>Legal Typing</li>
                                            <li>Title Policy Production</li>
                                            <li>Property Tax Certificates (Online & Voice)</li>
                                          </ul>
                                      </td>
                                      <td>
                                          <ul style="font-size: 0.9em; font-family: Roboto Condensed, Helvetica, arial, sans-serif; margin-top: 5px; line-height: 20px;">
                                            <li>Pre closing package review</li>
                                            <li>Post closing review</li>
                                            <li>Document Tracking</li>
                                            <li>E-Recording</li>
                                            <li>Title plant Indexing</li>
                                            <li>Deed Preparation</li>
                                            <li>Document Indexing and Auditing</li>
                                          </ul>
                                      </td>
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
                  <td align="center">
                  <a href="" style="font-size: 0.8em; font-family: Roboto Condensed, Helvetica, arial, sans-serif; text-decoration: none; color: #333333; padding: 5px; background-color: rgb(255, 202, 40); text-transform: uppercase;">Read More</a>
                  </td>
                </tr>


                 <tr><td height="25"></td></tr>


                <tr>
                  <td align="left" style="font-size: 1em; color: #333333; font-family: Roboto Condensed, Helvetica, arial, sans-serif; text-align: justify;">
                   At Avanze we provide title search and title report services with highest levels of speed, quality, and cost savings
                  </td>
                </tr>




                 <tr><td height="25"></td></tr>



                <tr>
                  <td align="left" style="font-size: 1em; color: #333333; font-family: Roboto Condensed, Helvetica, arial, sans-serif; text-align: justify;">
                  If you are looking for a reliable, dependable and cost effective partner to perform you title jobs then please consider using our services.
                  </td>
                </tr>

                <tr><td height="15"></td></tr>


                 <tr>
                  <td align="left" style="font-size: 1em; color: #333333; font-family: Roboto Condensed, Helvetica, arial, sans-serif; text-align: justify;">
                  If you are looking for a reliable partner that has maintained EXCELLENT QUALITY and DEPENDABLE SERVICE in Title Industry, then please do consider using our services. 
                  </td>
                </tr>

            

                <tr><td height="15"></td></tr>



                 <tr>
                  <td align="left" style="font-size: 1em; color: #333333; font-family: Roboto Condensed, Helvetica, arial, sans-serif; text-align: justify;">
                  We would wish to provide you with free service for 1 week so that you can understand & experience our personalized service with best quality.
                  </td>
                </tr>

                <tr><td height="15"></td></tr>


                 <tr>
                  <td align="left" style="font-size: 1em; color: #333333; font-family: Roboto Condensed, Helvetica, arial, sans-serif; text-align: justify;">
                  We would like to provide you sample searches at absolutely no charge to you!!! 
                  </td>
                </tr>

                <tr><td height="15"></td></tr>

                 <tr>
                  <td align="left" style="font-size: 1em; color: #333333; font-family: Roboto Condensed, Helvetica, arial, sans-serif; text-align: justify;">
                  To find our more, please reachout to us on 3021234567 or reply to this email with a day and time that works for you to have an exploratory call to discuss on our service offerings\how to save your costs.
                  </td>
                </tr>

                <tr><td height="15"></td></tr>

                 <tr>
                  <td align="left" style="font-size: 1em; color: #333333; font-family: Roboto Condensed, Helvetica, arial, sans-serif; text-align: justify;">
                 Contact us today for a custom solution for your business needs
                  </td>
                </tr>


                <tr><td height="25"></td></tr>


                <tr>
                  <td align="left" style="font-size: 1em; font-weight: 600; color: #333333; font-family: Roboto Condensed, Helvetica, arial, sans-serif; text-align: justify;">
                    Sincerely,
                  </td>
                </tr>

                <tr><td height="10"></td></tr>

                <tr>
                  <td align="left" style="font-size: 1em; color: #333333; font-family: Roboto Condensed, Helvetica, arial, sans-serif; text-align: justify;">
                    John Thompson
                  </td>
                </tr>


                <tr><td height="2"></td></tr>

                <tr>
                  <td align="left" style="font-size: 1em; color: #333333; font-family: Roboto Condensed, Helvetica, arial, sans-serif; text-align: justify;">
                    Sales Executive
                  </td>
                </tr>




                <tr><td height="15"></td></tr>

                      <table align="center" border="0" cellspacing="0" cellpadding="0" width="100%">
                      <tbody>
                        <tr>
                            <td align="center" height="7" style="border-top: 3px solid #ED7624;">
                                  
                            </td>
                        </tr>
                      </tbody>
                    </table>

                     <tr><td height="25"></td></tr>


                <tr>

                  <td>

                    <table align="center" border="0" cellspacing="0" cellpadding="0" width="100%">
                      <tbody>
                        <tr>
                            <td valign="middle" align="center" width="33.3333333333%">
                              <a href=""><img src="http://www.avanzegroup.com/img/email/location.png" width="20" /></a>
                            </td>
                            <td valign="middle" align="center" width="33.3333333333%">
                               <a href=""><img src="http://www.avanzegroup.com/img/email/email.png" width="25" /></a>
                            </td>
                            <td valign="middle" align="center" width="33.3333333333%">
                               <a href=""><img src="http://www.avanzegroup.com/img/email/call.png" width="25" /></a>
                            </td>
                        </tr>
                      </tbody>
                    </table>

                  </td>

                </tr>

                <tr><td height="10"></td></tr>



                <tr>

                  <td>

                    <table align="center" border="0" cellspacing="0" cellpadding="0" width="100%">
                      <tbody>
                        <tr>
                            <td valign="top" align="center" width="33.3333333333%">
                                <a href="" target="_blank" style="color: #333333; text-decoration: none; font-size: 1em; font-family: Roboto Condensed, Helvetica, arial, sans-serif; text-align: center;">1000 N.West Street,<br>Suite 1200,<br>Wilmington<br>Delaware 19801, USA</a>
                            </td>
                            <td valign="top" align="center" width="33.3333333333%">
                               <a href="" target="_blank" style="color: #333333; text-decoration: none; font-size: 1em; font-family: Roboto Condensed, Helvetica, arial, sans-serif; text-align: center;">info@avanzegroup.com</a>
                            </td>
                            <td valign="top" align="center" width="33.3333333333%">
                               <a href="" target="_blank" style="color: #333333; text-decoration: none; font-size: 1em; font-family: Roboto Condensed, Helvetica, arial, sans-serif; text-align: center;">302-319-4848</a>
                            </td>
                        </tr>
                      </tbody>
                    </table>

                  </td>

                </tr>

                <tr><td height="25"></td></tr>


                <tr>
                  <td align="center" style="color: #7e8890; text-decoration: none; font-size: 0.7em; font-family: Roboto Condensed, Helvetica, arial, sans-serif; text-align: center;">We hope you enjoy receiving our news and business newsletters from avanzegroup.com.<br> you may set your communication preference <a href="" style="text-decoration: none; color: #333333; font-weight: 600; font-style: italic;">here</a></td>
                </tr>






              </tbody>


            </table>




        </td>


    </tr>
  </tbody>

</table>

</body>
</html>
    ';

echo $message;
mail($to, $subject, $message, $headers);
?>


<br><br><br><br><br><br><br><br>
<form action="" method="post">
  <p><label>To Email</label> <input type="text" name="email" required/></p>
   <p><label>Subject</label> <input type="text" name="subject" required/></p>
    <p><input type="submit" value="SEND EMAIL" /></p>
</form>



