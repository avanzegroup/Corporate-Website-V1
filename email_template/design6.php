<?php
error_reporting(0);

if(isset($_POST['email']) && isset($_POST['subject']))
{
  $to = $_POST['email'];
  $subject = $_POST['subject'];
  
}


$headers = "From: sai.kumar@avanzegroup.com \r\n";
$headers .= "Reply-To: noreply@avanzegroup.com\r\n";
$headers .= "CC: noreply@avanzegroup.com\r\n";
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
                


                <tr><td align="center" style="border-bottom: #cccccc 1px solid;"><img src="http://www.avanzegroup.com/img/email/banner5.jpg" width="640"/></td></tr>

                <tr><td height="25"></td></tr>

                <tr>
                  <td align="left" style="font-size: 1em; color: #333333; font-family: Roboto Condensed, Helvetica, arial, sans-serif; text-align: justify;">
                    <b>Avanze Solutions Inc.</b> is in the business of providing comprehensive, reliable and fast solutions to meet the needs of title industry 
                  </td>
                </tr>

                <tr><td height="15"></td></tr>

                <tr>
                  <td align="left" style="font-size: 1em; color: #333333; font-family: Roboto Condensed, Helvetica, arial, sans-serif; text-align: justify;">
                    Accuracy is everything in the title search business; our team of experienced workforce ensures that each component of our clients requirement is delivered as per their expectations with top quality service and considerable cost savings. 
                  </td>
                </tr>



                    <tr><td height="40"></td></tr>


                <tr> 
                <td style="text-align: left; font-size:1.8em; font-family:calibri; color: #333333;">

                <span style="font-size: 1.3em;">T</span>OP <span style="font-size: 1.3em;">R</span>EASONS TO <span style="font-size: 1.3em;">U</span>SE <span style="font-size: 1.3em;">A</span>VANZE <span style="font-size: 1.3em;">S</span>ERVICES
                </td>
                </tr>

                <tr><td height="20"></td></tr>


                <!-- Colorful Steps Data -->
        <tr style="font-family:calibri; color: #ffffff;">

          <td style=" margin:0; color: #ffffff;">
            <table style="width:100%; text-align:center;" border="0" cellspacing="0">


              <tr>
                <td style="width:50px; font-size: 8em; color: #333333;"><img src="http://avanzegroup.com/img/email/tick.png" width="30"/></td>
                <td style="text-align:left; color: #333333; font-size: 1.2em;">
                  <p style="font-weight: 600;">Experience</p>
                </td>
              </tr>

              <tr>
              <td style="width:50px; font-size: 8em; color: #333333;"></td>
                <td style="text-align: left;"><span>8+ years of experience in title industry offering end to end Title and Closing services.</span></td>
              </tr>

              <tr><td height="8"></td></tr>

              <tr>
                <td style="width:80px;font-size: 2.5em; color: #333333;"><img src="http://avanzegroup.com/img/email/tick.png" width="30"/></td>
                <td style="text-align:left; color: #333333; font-size: 1.2em;">
                  <p style="font-weight: 600;">Expertise</p>
                </td>
              </tr>

              <tr>
              <td style="width:50px; font-size: 8em; color: #333333;"></td>
                <td style="text-align: left;"><span>Hands on experience in using major title processing platforms, millions of title search and tax certs delivered till date.</span></td>
              </tr>

              <tr><td height="8"></td></tr>

                            <tr>
                <td style="width:80px;font-size: 2.5em; color: #333333;"><img src="http://avanzegroup.com/img/email/tick.png" width="30"/></td>
                <td style="text-align:left; color: #333333; font-size: 1.2em;">
                  <p style="font-weight: 600;">Quality Service</p>
                </td>
              </tr>

              <tr>
              <td style="width:50px; font-size: 8em; color: #333333;"></td>
                <td style="text-align: left;"><span>Reliable service provided by a team of qualified and experienced staff with round the clock coverage assuring faster turn-times.</span></td>
              </tr>

              <tr><td height="8"></td></tr>

                            <tr>
                <td style="width:80px;font-size: 2.5em; color: #333333;"><img src="http://avanzegroup.com/img/email/tick.png" width="30"/></td>
                <td style="text-align:left; color: #333333; font-size: 1.2em;">
                  <p style="font-weight: 600;">Competitive Rates</p>
                </td>
              </tr>

              <tr>
              <td style="width:50px; font-size: 8em; color: #333333;"></td>
                <td style="text-align: left;"><span>You dont have to pay more to get the best; we provide transparent rate card with clear cut rate structure.</span></td>
              </tr>

              <tr><td height="8"></td></tr>


             
            </table>
          </td>
        </tr>
                 <tr><td height="40"></td></tr>

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


                 <tr><td height="40"></td></tr>


                <tr>
                  <td align="left" style="font-size: 1em; color: #333333; font-family: Roboto Condensed, Helvetica, arial, sans-serif; text-align: justify;">
                   At Avanze we value your customers and members, and know how it important it is to close a transaction timely. With the highest levels of quality and quick turn-times, avanze is the right partner for you.
                  </td>
                </tr>
           

                <tr><td height="25"></td></tr>


                <tr>
                  <td align="left" style="font-size: 1em; color: #333333; font-family: Roboto Condensed, Helvetica, arial, sans-serif; text-align: justify;">
                   
                    Try us out TODAY! we offer a free trial period of 10 transactions at no cost to you. 

                  </td>
                </tr>


          
      

                <tr><td height="25"></td></tr>



                 <tr>
                  <td align="left" style="font-size: 1em; color: #333333; font-family: Roboto Condensed, Helvetica, arial, sans-serif; text-align: justify;">
                  To learn more, please email us at advantage@avanzegroup.com or call us at 302 319 4848 
                  </td>
                </tr>

                <tr><td height="15"></td></tr>


               

                <tr><td height="25"></td></tr>


                <tr>
                  <td align="left" style="font-size: 1em; font-weight: 600; color: #333333; font-family: Roboto Condensed, Helvetica, arial, sans-serif; text-align: justify;">
                    Sincerely,
                  </td>
                </tr>

                <tr><td height="10"></td></tr>

                <tr>
                  <td align="left" style="font-size: 1em; color: #333333; font-family: Roboto Condensed, Helvetica, arial, sans-serif; text-align: justify;">
                    Avanze Group
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



