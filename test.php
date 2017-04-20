<?php

$email = 'boopathiug@gmail.com';
$to = 'avanzegroup@gmail.com';

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

mail($to, $subject, $message, $headers);



?>