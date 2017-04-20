<?php
error_reporting(0);

if(isset($_POST['email']) && isset($_POST['subject']))
{

  $to = $_POST['email'];
  $subject = $_POST['subject'];
  
}


$headers = "From: Avanze Group <mailto:advantageit@avanzegroup.com>\r\n";
$headers .= "Reply-To: Avanze Group <advantageit@avanzegroup.com>\r\n";
$headers .= "Return-Path: Avanze Group <advantageit@avanzegroup.com>\r\n"; 
//$headers .= "CC: noreply@avanzegroup.com\r\n";
$headers .= "BCC: noreply@avanzegroup.com\r\n";
$headers .= "Organization: Avanze Group\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
 $headers .= "X-Priority: 3\r\n";
  $headers .= "X-Mailer: PHP". phpversion() ."\r\n"; 


$message = '
<html>
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
                    <td valign="middle" align="left" width="80%"  height="80">
                        <a href="http://avanzegroup.com" target="_blank"><img src="http://www.avanzegroup.com/img/email/logo.png" /></a>
                    </td>
                    <td valign="middle" align="right" width="5%"  height="80">
                      <a href="https://www.facebook.com/avanzegroup/" target="_blank"><img src="http://www.avanzegroup.com/img/facebook.png" width="25" /></a>
                    </td>
                    <td valign="middle" align="right" width="5%"  height="80">
                       <a href="https://twitter.com/avanzegroup" target="_blank"><img src="http://www.avanzegroup.com/img/twitter.png" width="25" /></a>
                    </td>
                    <td valign="middle" align="right" width="5%"  height="80">
                       <a href="https://plus.google.com/+Avanzegroup" target="_blank"><img src="http://www.avanzegroup.com/img/g+.png" width="25" /></a>
                    </td>
                    <td valign="middle" align="right" width="5%"  height="80">
                       <a href="https://www.linkedin.com/company/avanzegroup" target="_blank"><img src="http://www.avanzegroup.com/img/linkedin.png" width="25" /></a>
                    </td>
                </tr>
              </tbody>
            </table>


            <table align="center" border="0" cellspacing="0" cellpadding="0" width="100%" height="40" style="
            border-top: 5px solid #ffffff;
            border-bottom: 5px solid #ffffff;">

              <tbody>
                


                <tr><td align="center" style="border-bottom: #cccccc 1px solid;"><img src="http://www.avanzegroup.com/img/email/technology.jpg" width="640"/></td></tr>

                <tr><td height="25"></td></tr>

                <tr>
                  <td align="left" style="font-size: 0.9em; color: #333333; font-family: Arial, sans-serif; text-align: justify;">
                   <b>Avanze Solutions Inc.</b> is in the business of providing comprehensive, reliable and fast solutions to meet the needs of Technology industry. We offer true “end-to-end” and customized component solutions for virtually any process with analytics and compliance; supported by domestic, offshore or hybrid delivery models. 
                  </td>
                </tr>

                <tr><td height="15"></td></tr>

                <tr>
                  <td align="left" style="font-size: 0.9em; color: #333333; font-family: Arial, sans-serif; text-align: justify;">
                 Our vast IT services portfolio include consulting, systems integration, application development and maintenance, technology infrastructure services, package implementation, testing and research & development among others.
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
        <tr style="font-family:calibri;">

          <td style=" margin:0;">
            <table style="width:100%; text-align:center;" border="0" cellspacing="0">


              <tr>
                <td style="width:50px; font-size: 1.5em; font-weight: bold; color: #3b9044;">&#10003;</td>
                <td style="text-align:left; color: #333333; font-size: 1.1em; font-family: Arial, sans-serif;">
                  <p style="font-weight: 600; ">Experience</p>
                </td>
              </tr>

              <tr>
              <td style="width:50px; font-size: 8em; color: #333333;"></td>
                <td style="text-align: left; font-family: Arial, sans-serif; font-size: 0.9em; text-align: justify;"><span>8 years of experience in Technology industry offering end to end Technology services.</span></td>
              </tr>

              <tr><td height="8"></td></tr>

              <tr>
                 <td style="width:50px; font-size: 1.5em; font-weight: bold; color: #3b9044;">&#10003;</td>
                <td style="text-align:left; color: #333333; font-size: 1.1em; font-family: Arial, sans-serif;">
                  <p style="font-weight: 600;">Expertise</p>
                </td>
              </tr>

              <tr>
              <td style="width:50px; font-size: 8em; color: #333333;"></td>
                <td style="text-align: left; font-family: Arial, sans-serif; font-size: 0.9em; text-align: justify;"><span>Vast Portfolio including consulting, systems integration, application development and maintenance, technology infrastructure services, package implementation, testing and research & development among others.</span></td>
              </tr>

              <tr><td height="8"></td></tr>

                            <tr>
                 <td style="width:50px; font-size: 1.5em; font-weight: bold; color: #3b9044;">&#10003;</td>
                <td style="text-align:left; color: #333333; font-size: 1.1em; font-family: Arial, sans-serif;">
                  <p style="font-weight: 600;">Quality Service</p>
                </td>
              </tr>

              <tr>
              <td style="width:50px; font-size: 8em; color: #333333;"></td>
                <td style="text-align: left; font-family: Arial, sans-serif; font-size: 0.9em; text-align: justify;"><span>Reliable service provided by a team of qualified and experienced staff with round the clock coverage assuring faster project delivery.</span></td>
              </tr>

              <tr><td height="8"></td></tr>

                            <tr>
                 <td style="width:50px; font-size: 1.5em; font-weight: bold; color: #3b9044;">&#10003;</td>
                <td style="text-align:left; color: #333333; font-size: 1.1em; font-family: Arial, sans-serif;">
                  <p style="font-weight: 600;">Competitive Rates</p>
                </td>
              </tr>

              <tr>
              <td style="width:50px; font-size: 8em; color: #333333;"></td>
                <td style="text-align: left; font-family: Arial, sans-serif; font-size: 0.9em; text-align: justify;"><span>You dont have to pay more to get the best; we provide transparent rate card with clear cut rate structure.</span></td>
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
                          <td width="250" style="font-size: 1.6em; color: #333333; font-family:calibri;">
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
                            <td align="center" style="background-color: #00aad1; color: #fff; font-size: 1.2em; font-family:calibri, sans-serif; padding: 5px 0px;">

                              TECHNOLOGY SERVICES

                            </td>
                          </tr>


                            <tr>
                              <td align="center">

                                <table align="center" border="0" cellspacing="0" cellpadding="0" width="100%" style="margin-top: 0.2em;">
                                  <tbody>
                                    <tr>
                                      <td align="center" width="33.3333333333%" style="background-color: #FDC58F; font-size: 1.1em; font-family:calibri, sans-serif;  padding: 5px 0px;">PROFESSIONAL SERVICES</td>
                                      <td align="center" width="33.3333333333%" style="background-color: #FDC58F; font-size: 1.1em; font-family:calibri, sans-serif; ; padding: 5px 0px;">SUPPORT SERVICES</td>
                                      <td align="center" width="33.3333333333%" style="background-color: #FDC58F; font-size: 1.1em; font-family:calibri, sans-serif;  padding: 5px 0px;">OUR AREAS OF SPECIALIZATION</td>
                                    </tr>

                                    <tr>
                                      <td style="border-right: 1px dotted #FDC58F;">
                                          <ul style="font-size: 0.9em; font-family:calibri, sans-serif;  margin-top: 5px; line-height: 20px;">
                                            <li>Application Modernization</li>
                                            <li>Application Development</li>
                                            <li>Business Intelligence</li>
                                            <li>Ecommerce Solutions</li>
                                            <li>Mobile and Web App Development</li>
                                          </ul>
                                      </td>
                                      <td style="border-right: 1px dotted #FDC58F;">
                                          <ul style="font-size: 0.9em; font-family:calibri, sans-serif;  margin-top: 5px; line-height: 20px;">
                                            <li>QA Services</li>
                                            <li>Application Support</li>
                                            <li>Remote Infrastructure Administration</li>
                                            <li>Database Administration</li>
                                            <li>Project Management</li>
                                          </ul>
                                      </td>
                                      <td>
                                          <ul style="font-size: 0.9em; font-family:calibri, sans-serif;  margin-top: 5px; line-height: 20px;">
                                            <li>Enterprise-Level Software</li>
                                            <li>Web Designing & Development</li>
                                            <li>JAVA, J2EE , PHP & MySQL</li>
                                            <li>CRM & CMS Development Services</li>

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
                 <td>
                 <table align="center">
                  <tbody>
                  <tr>
                  <td valign="top" align="left">
                     <a href="http://avanzegroup.com/download/Brochure_Technology.pdf" target="_blank"><img src="http://avanzegroup.com/img/email/download1.png" width="30"/></a>
                  </td>
                  <td valign="middle" align="left">
                    <a href="http://avanzegroup.com/download/Brochure_Technology.pdf" target="_blank" style="font-size: 0.8em; font-family: Roboto Condensed, Helvetica, arial, sans-serif; text-decoration: none; color: #333333; padding: 0.5em; background-color: rgb(255, 202, 40); text-transform: uppercase;"><b>CLICK HERE TO DOWNLOAD </b>OUR TECHNOLOGY SERVICES BROCHURE</a>
                  </td>
                  </tr>
                  </tbody>
                 </table>
                  </td>
                </tr>



                 <tr><td height="40"></td></tr>


                <tr>
                  <td align="left" style="font-size: 1em; color: #333333; font-family:calibri, sans-serif;  text-align: justify;">
                   At Avanze, we value our customers, and truly know how important it is to close each project in a timely manner with assured deliverables. Avanze is the right partner for you. 
                  </td>
                </tr>
           

                <tr><td height="25"></td></tr>


                <tr>
                  <td align="left" style="font-size: 1em; color: #333333; font-family:calibri, sans-serif;  text-align: justify;">
                   
                  Try us out TODAY!  Our expert technology team will offer you a free no obligation consultation on your requirements. 

                  </td>
                </tr>


          
      

                <tr><td height="25"></td></tr>



                 <tr>
                  <td align="left" style="font-size: 1em; color: #333333; font-family:calibri, sans-serif;  text-align: justify;">
                To know more, please email us at <b>advantageit@avanzegroup.com</b> or call us at <b>302 966 9381</b>
                  </td>
                </tr>

                <tr><td height="15"></td></tr>


               

                <tr><td height="25"></td></tr>


                <tr>
                  <td align="left" style="font-size: 1em; font-weight: 600; color: #333333; font-family:calibri, sans-serif;  text-align: justify;">
                    Sincerely,
                  </td>
                </tr>

                <tr><td height="10"></td></tr>

                <tr>
                  <td align="left" style="font-size: 1em; color: #333333; font-family:calibri, sans-serif;  text-align: justify;">
                    Avanze Group
                  </td>
                </tr>

                <tr><td height="25"></td></tr>


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
                               <a href=""><img src="http://www.avanzegroup.com/img/email/globe.png" width="30" /></a>
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
                                <a href="http://www.avanzegroup.com/contact.php" target="_blank" style="color: #333333; text-decoration: none; font-size: 1em; font-family: Roboto Condensed, Helvetica, arial, sans-serif; text-align: center;">1000 N.West Street,<br>Suite 1200,<br>Wilmington<br>Delaware 19801, USA</a>
                            </td>
                            <td valign="top" align="center" width="33.3333333333%">
                              
                                <a href="http://www.avanzegroup.com" target="_blank" style="color: #333333; text-decoration: none; font-size: 1em; font-family: Roboto Condensed, Helvetica, arial, sans-serif; text-align: center;">www.avanzegroup.com</a>
                            </td>
                            <td valign="top" align="center" width="33.3333333333%">
                            <a href="http://www.avanzegroup.com/contact.php" target="_blank" style="color: #333333; text-decoration: none; font-size: 1em; font-family: Roboto Condensed, Helvetica, arial, sans-serif; text-align: center;">302-966-9381</a><br>
                               <a href="http://www.avanzegroup.com/contact.php" target="_blank" style="color: #333333; text-decoration: none; font-size: 1em; font-family: Roboto Condensed, Helvetica, arial, sans-serif; text-align: center;">302-319-4848</a>
                            </td>
                        </tr>
                      </tbody>
                    </table>

                  </td>

                </tr>

                <tr><td height="25"></td></tr>


                <tr>
                  <td align="center" style="color: #7e8890; text-decoration: none; font-size: 0.7em; font-family: Roboto Condensed, Helvetica, arial, sans-serif; text-align: center;">We hope you enjoy receiving our business newsletters,
you may set your communication preference <a href="http://www.avanzegroup.com/unsubscribe.php?email='.$to.'" target="_blank" style="text-decoration: none; color: #333333; font-weight: 600; font-style: italic;">here</a></td>
                </tr>





              </tbody>


            </table>




        </td>


    </tr>
  </tbody>

</table>

</body>
</html>';

echo $message;
mail($to, $subject, $message, $headers);
?>


<br><br><br><br><br><br><br><br>
<form action="" method="post">
  <p><label>To Email</label> <input type="text" name="email" required/></p>
   <p><label>Subject</label> <input type="text" name="subject" required/></p>
    <p><input type="submit" value="SEND EMAIL" /></p>
</form>



