<?php

	error_reporting(0);
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$company_name = $_POST['company_name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];


	//check if its an ajax request, exit if not
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        
        $output = json_encode(array( //create JSON data
            'type'=>'error', 
            'text' => 'Sorry Request must be Ajax POST'
        ));
        die($output); //exit script outputting json data
    } 


    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){ //email validation
        $output = json_encode(array('type'=>'error', 'text' => 'Please enter a valid email!'));
        die($output);
    }


     if(!filter_var($phone, FILTER_SANITIZE_NUMBER_FLOAT)){ //check for valid numbers in phone number field
        $output = json_encode(array('type'=>'error', 'text' => 'Enter only digits in phone number'));
        die($output);
    }


    $ToEmail = 'avanzegroup@gmail.com'; 
	$EmailSubject = 'Avanze Group Website: Enquiry contact form details'; 
	$mailheader = "From: ".$email."\r\n"; 
	$mailheader .= "Reply-To: ".$email."\r\n"; 
	$mailheader .= "MIME-Version: 1.0" . "\r\n";
	$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

    $MESSAGE_BODY = '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/htm=
l4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, minimum-scale=1.=
0, maximum-scale=1.0, user-scalable=0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<style type="text/css">

@media only screen and (max-width: 320px) {
table[class="edu-module"]{
border-radius: 0px !important;
-webkit-border-radius: 0px !important;
-moz-border-radius: 0px !important;
}
td[class="edu-margins"]{
background-color: #f5f8fa;
}
td[class="edu-collapse"]{
width: 0px !important;
}
td[class="edu-space"]{
height: 10px !important;
background-color: #f5f8fa;
}
td[class="mobile-height"]{
height: 30px !important;
}
}

@media only screen and (max-width: 420px) {

span[class="address"] a {
line-height:18px !important;
}
td[class="margins"]{
width:18px !important;
}
td[class="edu-margins"]{
width:18px !important;
}
td[class="logo_space"]{
height:12px !important;
}
}

@media only screen and (max-width: 480px) {

table[class="collapse"]{
width:100% !important;
}

table[class="edu-module"]{
width:100% !important;
}

span[class="address"]{
display:block !important;
width:240px !important;
}
td[class="cut"]{
display:none !important;
}

}
</style>
</head>
<body bgcolor="#244160" style="margin:0; padding:0; -webkit-text-size-adj=
ust:100%; -ms-text-size-adjust:100%;">

    <table cellpadding="0" cellspacing="0" border="0" width="100%" style="background-color:#244160;padding:0;margin:0;line-height:1px;font-size:1px">
        <tbody>
            <tr>
                <td align="center" style="padding:0;margin:0;line-height:1px;font-size:1px">
                    <table align="center" width="500" style="width:500px;background-color:#ffffff;padding:0;margin:0;line-height:1px;font-size:1px" bgcolor="#ffffff" cellpadding="0" cellspacing="0" border="0">
                        <tbody>

                            <tr>
                            <td height="15" style="height:15px;padding:0;margin:0;line-height:1px;font-size:1px"> &nbsp; </td>
                            </tr>
                                <tr>
                                    <td style="padding:0;margin:0;line-height:1px;font-size:1px;">
                                        <table cellpadding="0" cellspacing="0" border="0" align="center" style="padding:0;margin:0;line-height:1px;font-size:1px">
                                        <tbody>
                                            <tr align="center">
                                                <td align="center" width="15" style="width:15px;padding:0;margin:0;line-height:1px;font-size:1px"></td>
                                                <td align="center" width="28" style="padding:0;margin:0;line-height:1px;font-size:1px">
                                                 <a href="" style="text-decoration:none;border-style:none;border:0;padding:0;margin:0 text-align: center;" target="_blank" >
                                                    <img align="center" src="http://www.avanzegroup.com/img/final1.png" style="width:250px;padding-bottom:15px; margin: 0 auto;display:block;border:none;outline:none"></a> 
                                                </td>
                                                <td align="center" width="10" style="width:10px;padding:0;margin:0;line-height:1px;font-size:1px"></td>
                                                <td width="50" style="width:50px;padding:0;margin:0;line-height:1px;font-size:1px" align="left"></td>
                                            </tr>
                                        </tbody>
                                        </table> 


                                        <table align="center" width="500" style="width:500px;background-color:#ffffff;padding:0;margin:0;line-height:1px;font-size:1px" cellpadding="0" cellspacing="0" border="0">
                                            <tbody>
                                            <tr>
                                            <td colspan="2" height="1" style="line-height:1px;display:block;height:1px;background-color:#d4dfea;padding:0;margin:0;line-height:1px;font-size:1px"></td>
                                            </tr>
                                            </tbody>
                                        </table>



                                        <table align="center" width="500" style="width:500px;background-color:#ffffff;padding:0;margin:0;line-height:1px;font-size:1px" cellpadding="0" cellspacing="0" border="0">
                                            <tbody>
                                                <tr>
                                                    <td width="50" style="width:50px;padding:0;margin:0;line-height:1px;font-size:1px"></td>
                                                    <td align="center" style="padding:0;margin:0;line-height:1px;font-size:1px">
                                                        <table width="100%" align="center" cellpadding="0" cellspacing="0" border="0" style="padding:0;margin:0;line-height:1px;font-size:1px">
                                                            <tbody>
                                                                <tr>
                                                                    <td height="30" style="height:45px;padding:0;margin:0;line-height:1px;font-size:1px"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td align="left" style="padding:0;margin:0;line-height:1px;font-size:1px;font-family:Helvetica Neue,Helvetica,Arial,sans-serif;font-size:21px;line-height:30px;font-weight:300;text-align:left;color:#292f33">First Name : '.$first_name.'</td>
                                                                </tr>
                                                                <tr>
                                                                    <td height="20" style="height:20px;padding:0;margin:0;line-height:1px;font-size:1px"></td>
                                                                </tr>
                                                                <tr>
                                                                <td align="left" style="padding:0;margin:0;line-height:1px;font-size:1px;font-family:Helvetica Neue,Helvetica,Arial,sans-serif;font-size:21px;line-height:30px;font-weight:300;text-align:left;color:#292f33">Last Name : '.$last_name.'</td>
                                                                </tr>
                                                                                                                                <tr>
                                                                    <td height="20" style="height:20px;padding:0;margin:0;line-height:1px;font-size:1px"></td>
                                                                </tr>
                                                                <tr>
                                                                <td align="left" style="padding:0;margin:0;line-height:1px;font-size:1px;font-family:Helvetica Neue,Helvetica,Arial,sans-serif;font-size:21px;line-height:30px;font-weight:300;text-align:left;color:#292f33">Company Name : '.$company_name.'</td>
                                                                </tr>
                                                                                                                                <tr>
                                                                    <td height="20" style="height:20px;padding:0;margin:0;line-height:1px;font-size:1px"></td>
                                                                </tr>
                                                                <tr>
                                                                <td align="left" style="padding:0;margin:0;line-height:1px;font-size:1px;font-family:Helvetica Neue,Helvetica,Arial,sans-serif;font-size:21px;line-height:30px;font-weight:300;text-align:left;color:#292f33">Email : '.$email.'</td>
                                                                </tr>
                                                                                                                                <tr>
                                                                    <td height="20" style="height:20px;padding:0;margin:0;line-height:1px;font-size:1px"></td>
                                                                </tr>
                                                                <tr>
                                                                <td align="left" style="padding:0;margin:0;line-height:1px;font-size:1px;font-family:Helvetica Neue,Helvetica,Arial,sans-serif;font-size:21px;line-height:30px;font-weight:300;text-align:left;color:#292f33">Phone : '.$phone.'</td>
                                                                </tr>
                                                                                                                                <tr>
                                                                    <td height="20" style="height:20px;padding:0;margin:0;line-height:1px;font-size:1px"></td>
                                                                </tr>
                                                                <tr>
                                                                <td align="left" style="padding:0;margin:0;line-height:1px;font-size:1px;font-family:Helvetica Neue,Helvetica,Arial,sans-serif;font-size:21px;line-height:30px;font-weight:300;text-align:left;color:#292f33">Message : '.nl2br($message).'</td>
                                                                </tr>


                                                                <tr>
                                                                    <td height="20" style="height:20px;padding:0;margin:0;line-height:1px;font-size:1px"></td>
                                                                </tr>
                                                               
                                            
                                                                <tr>
                                                                    <td height="35" style="height:35px;padding:0;margin:0;line-height:1px;font-size:1px"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table> 
                                                    </td>
                                                    <td width="50" style="width:50px;padding:0;margin:0;line-height:1px;font-size:1px"></td>
                                                </tr>


                                            <tr>

                                            <td width="50" style="width:50px;padding:0;margin:0;line-height:1px;font-size:1px"></td>
                                            
                                            <td width="35" style="padding:0;margin:0;line-height:1px;font-size:1px"></td>
                                            </tr>
                                            </tbody>
                                            </table> </td>
                                            <td width="50" style="width:50px;padding:0;margin:0;line-height:1px;font-size:1px"></td>
                                            </tr>
                                            <tr>
                                            <td colspan="3" height="50" style="padding:0;margin:0;line-height:1px;font-size:1px"></td>
                                            </tr>
                                            </tbody>
                                        </table>


                                        <table align="center" width="500" style="width:500px;background-color:#ffffff;padding:0;margin:0;line-height:1px;font-size:1px" cellpadding="0" cellspacing="0" border="0">
                                            <tbody>
                                            <tr>
                                            <td height="1" style="line-height:1px;display:block;height:1px;background-color:#d4dfda;padding:0;margin:0;line-height:1px;font-size:1px"></td>
                                            </tr>
                                            <tr>
                                            <td height="20" style="height:20;padding:0;margin:0;line-height:1px;font-size:1px"></td>
                                            </tr>
                                            <tr>
                                                <td align="center" style="padding:0;margin:0;line-height:1px;font-size:1px"> 
                                                    <span style="font-family:Helvetica Neue Light,Helvetica,Arial,sans-serif;color:#8899a6;font-size:12px;padding:0px;margin:0px;font-weight:normal;line-height:12px"> 
                                                        <a href="https://www.facebook.com/avanzegroup/" style="text-decoration:none;border-style:none;border:0;padding:0;margin:0;font-family:Helvetica Neue Light,Helvetica,Arial,sans-serif;color:#55acee;font-size:12px;padding:0px;margin:0px;font-weight:600;line-height:12px" target="_blank" ><img src="http://www.avanzegroup.com/img/facebook.png" style="width: 20px;"/></a> &nbsp;&nbsp; 
                                                        <a href="https://twitter.com/avanzegroup" style="text-decoration:none;border-style:none;border:0;padding:0;margin:0;font-family:Helvetica Neue Light,Helvetica,Arial,sans-serif;color:#55acee;font-size:12px;padding:0px;margin:0px;font-weight:600;line-height:12px" target="_blank"><img src="http://www.avanzegroup.com/img/twitter.png" style="width: 20px;"/></a> &nbsp;&nbsp; 
                                                        <a href="https://plus.google.com/+Avanzegroup" style="text-decoration:none;border-style:none;border:0;padding:0;margin:0;font-family:Helvetica Neue Light,Helvetica,Arial,sans-serif;color:#55acee;font-size:12px;padding:0px;margin:0px;font-weight:600;line-height:12px" target="_blank"><img src="http://www.avanzegroup.com/img/g+.png" style="width: 20px;"/></a> &nbsp;&nbsp;
                                                        <a href="https://www.linkedin.com/company/avanzegroup" style="text-decoration:none;border-style:none;border:0;padding:0;margin:0;font-family:Helvetica Neue Light,Helvetica,Arial,sans-serif;color:#55acee;font-size:12px;padding:0px;margin:0px;font-weight:600;line-height:12px" target="_blank"><img src="http://www.avanzegroup.com/img/linkedin.png" style="width: 20px;"/></a>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height="10" style="height:10px;line-height:1px;font-size:1px;padding:0;margin:0;line-height:1px;font-size:1px"></td>
                                            </tr>
                                            <tr>
                                                <td align="center" style="padding:0;margin:0;line-height:1px;font-size:1px"> <span> <a style="text-decoration:none;border-style:none;border:0;padding:0;margin:0;font-family:Helvetica Neue Light,Helvetica,Arial,sans-serif;color:#8899a6;font-size:12px;padding:0px;margin:0px;font-weight:normal;line-height:12px">Avanze Solutions Inc. <br><br>1000 N.West Street,<br> Suite 1200 Wilmington, Delaware 19801, USA</a> </span> </td>
                                            </tr>
                                        <tr>
                                            <td height="20" style="height:20;padding:0;margin:0;line-height:1px;font-size:1px"></td>
                                            </tr>
                                            <tr>
                                                <td align="center" style="padding:0;margin:0;line-height:1px;font-size:1px"> 
                                                    <span style="font-family:Helvetica Neue Light,Helvetica,Arial,sans-serif;color:#8899a6;font-size:12px;padding:0px;margin:0px;font-weight:normal;line-height:12px"> 
                                                        <a href="http://www.avanzegroup.com/contact.php" style="text-decoration:none;border-style:none;border:0;padding:0;margin:0;font-family:Helvetica Neue Light,Helvetica,Arial,sans-serif;color:#74a7dc;font-size:12px;padding:0px;margin:0px;font-weight:600;line-height:12px" target="_blank" >Phone: 302-966-9195</a> &nbsp;&nbsp; 
                                                        <a href="http://www.avanzegroup.com/contact.php" style="text-decoration:none;border-style:none;border:0;padding:0;margin:0;font-family:Helvetica Neue Light,Helvetica,Arial,sans-serif;color:#74a7dc;font-size:12px;padding:0px;margin:0px;font-weight:600;line-height:12px" target="_blank">Email: info@avanzegroup.com</a> &nbsp;&nbsp; 
                    
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height="26" style="height:26;padding:0;margin:0;line-height:1px;font-size:1px"></td>
                                            </tr>
                                            </tbody>
                                        </table>


                                    </td>
                                </tr>
                            <tr>

                            <td height="14" style="height:14px;padding:0;margin:0;line-height:1px;font-size:1px"> &nbsp; </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>

</body>
</html>';



$send_mail = mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader);

    $acemail = $email; 
    $acemailsub = 'Avanze Group Sales Team'; 
    $acmailheader = "From: ".'avanzegroup.com'."\r\n"; 
    $acmailheader .= "Reply-To: ".'info@avanzegroup.com'."\r\n"; 
    $acmailheader .= "MIME-Version: 1.0" . "\r\n";
    $acmailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

    $ACMESSAGE_BODY = '<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/htm=
l4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, minimum-scale=1.=
0, maximum-scale=1.0, user-scalable=0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<style type="text/css">

@media only screen and (max-width: 320px) {
table[class="edu-module"]{
border-radius: 0px !important;
-webkit-border-radius: 0px !important;
-moz-border-radius: 0px !important;
}
td[class="edu-margins"]{
background-color: #f5f8fa;
}
td[class="edu-collapse"]{
width: 0px !important;
}
td[class="edu-space"]{
height: 10px !important;
background-color: #f5f8fa;
}
td[class="mobile-height"]{
height: 30px !important;
}
}

@media only screen and (max-width: 420px) {

span[class="address"] a {
line-height:18px !important;
}
td[class="margins"]{
width:18px !important;
}
td[class="edu-margins"]{
width:18px !important;
}
td[class="logo_space"]{
height:12px !important;
}
}

@media only screen and (max-width: 480px) {

table[class="collapse"]{
width:100% !important;
}

table[class="edu-module"]{
width:100% !important;
}

span[class="address"]{
display:block !important;
width:240px !important;
}
td[class="cut"]{
display:none !important;
}

}
</style>
</head>
<body bgcolor="#244160" style="margin:0; padding:0; -webkit-text-size-adj=
ust:100%; -ms-text-size-adjust:100%;">

    <table cellpadding="0" cellspacing="0" border="0" width="100%" style="background-color:#244160;padding:0;margin:0;line-height:1px;font-size:1px">
        <tbody>
            <tr>
                <td align="center" style="padding:0;margin:0;line-height:1px;font-size:1px">
                    <table align="center" width="500" style="width:500px;background-color:#ffffff;padding:0;margin:0;line-height:1px;font-size:1px" bgcolor="#ffffff" cellpadding="0" cellspacing="0" border="0">
                        <tbody>

                            <tr>
                            <td height="15" style="height:15px;padding:0;margin:0;line-height:1px;font-size:1px"> &nbsp; </td>
                            </tr>
                                <tr>
                                    <td style="padding:0;margin:0;line-height:1px;font-size:1px;">
                                        <table cellpadding="0" cellspacing="0" border="0" align="center" style="padding:0;margin:0;line-height:1px;font-size:1px">
                                        <tbody>
                                            <tr align="center">
                                                <td align="center" width="15" style="width:15px;padding:0;margin:0;line-height:1px;font-size:1px"></td>
                                                <td align="center" width="28" style="padding:0;margin:0;line-height:1px;font-size:1px">
                                                 <a href="" style="text-decoration:none;border-style:none;border:0;padding:0;margin:0 text-align: center;" target="_blank" >
                                                    <img align="center" src="http://www.avanzegroup.com/img/final1.png" width="200" style="padding-bottom:15px; margin: 0 auto;display:block;border:none;outline:none"></a> 
                                                </td>
                                                <td align="center" width="10" style="width:10px;padding:0;margin:0;line-height:1px;font-size:1px"></td>
                                                <td width="50" style="width:50px;padding:0;margin:0;line-height:1px;font-size:1px" align="left"></td>
                                            </tr>
                                        </tbody>
                                        </table> 


                                        <table align="center" width="500" style="width:500px;background-color:#ffffff;padding:0;margin:0;line-height:1px;font-size:1px" cellpadding="0" cellspacing="0" border="0">
                                            <tbody>
                                            <tr>
                                            <td colspan="2" height="1" style="line-height:1px;display:block;height:1px;background-color:#d4dfea;padding:0;margin:0;line-height:1px;font-size:1px"></td>
                                            </tr>
                                            </tbody>
                                        </table>



                                        <table align="center" width="500" style="width:500px;background-color:#ffffff;padding:0;margin:0;line-height:1px;font-size:1px" cellpadding="0" cellspacing="0" border="0">
                                            <tbody>
                                                <tr>
                                                    <td width="50" style="width:50px;padding:0;margin:0;line-height:1px;font-size:1px"></td>
                                                    <td align="center" style="padding:0;margin:0;line-height:1px;font-size:1px">
                                                        <table width="100%" align="center" cellpadding="0" cellspacing="0" border="0" style="padding:0;margin:0;line-height:1px;font-size:1px">
                                                            <tbody>
                                                                <tr>
                                                                    <td height="30" style="height:45px;padding:0;margin:0;line-height:1px;font-size:1px"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td align="left" style="padding:0;margin:0;line-height:1px;font-size:1px;font-family:Helvetica Neue,Helvetica,Arial,sans-serif;font-size:21px;line-height:30px;font-weight:300;text-align:left;color:#292f33">Hi '.$first_name.',</td>
                                                                </tr>                                                                                                                            

                                                                <tr>
                                                                    <td height="20" style="height:20px;padding:0;margin:0;line-height:1px;font-size:1px"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td align="left" style="padding:0;margin:0;line-height:1px;font-size:1px;font-family:Helvetica Neue,Helvetica,Arial,sans-serif;font-size:21px;line-height:30px;font-weight:300;text-align:left;color:#292f33"> Thank you for contacting us, we will get back to you soon </td>
                                                                </tr>
                                           
                                                                <tr>
                                                                    <td height="35" style="height:35px;padding:0;margin:0;line-height:1px;font-size:1px"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table> 
                                                    </td>
                                                    <td width="50" style="width:50px;padding:0;margin:0;line-height:1px;font-size:1px"></td>
                                                </tr>


                                            <tr>

                                            <td width="50" style="width:50px;padding:0;margin:0;line-height:1px;font-size:1px"></td>
                                            
                                            <td width="35" style="padding:0;margin:0;line-height:1px;font-size:1px"></td>
                                            </tr>
                                            </tbody>
                                            </table> </td>
                                            <td width="50" style="width:50px;padding:0;margin:0;line-height:1px;font-size:1px"></td>
                                            </tr>
                                            <tr>
                                            <td colspan="3" height="50" style="padding:0;margin:0;line-height:1px;font-size:1px"></td>
                                            </tr>
                                            </tbody>
                                        </table>


                                        <table align="center" width="500" style="width:500px;background-color:#ffffff;padding:0;margin:0;line-height:1px;font-size:1px" cellpadding="0" cellspacing="0" border="0">
                                            <tbody>
                                            <tr>
                                            <td height="1" style="line-height:1px;display:block;height:1px;background-color:#d4dfda;padding:0;margin:0;line-height:1px;font-size:1px"></td>
                                            </tr>
                                            <tr>
                                            <td height="20" style="height:20;padding:0;margin:0;line-height:1px;font-size:1px"></td>
                                            </tr>
                                            <tr>
                                                <td align="center" style="padding:0;margin:0;line-height:1px;font-size:1px"> 
                                                    <span style="font-family:Helvetica Neue Light,Helvetica,Arial,sans-serif;color:#8899a6;font-size:12px;padding:0px;margin:0px;font-weight:normal;line-height:12px"> 
                                                        <a href="https://www.facebook.com/avanzegroup/" style="text-decoration:none;border-style:none;border:0;padding:0;margin:0;font-family:Helvetica Neue Light,Helvetica,Arial,sans-serif;color:#55acee;font-size:12px;padding:0px;margin:0px;font-weight:600;line-height:12px" target="_blank" ><img src="http://www.avanzegroup.com/img/facebook.png" width="20"/></a> &nbsp;&nbsp; 
                                                        <a href="https://twitter.com/avanzegroup" style="text-decoration:none;border-style:none;border:0;padding:0;margin:0;font-family:Helvetica Neue Light,Helvetica,Arial,sans-serif;color:#55acee;font-size:12px;padding:0px;margin:0px;font-weight:600;line-height:12px" target="_blank"><img src="http://www.avanzegroup.com/img/twitter.png" width="20"/></a> &nbsp;&nbsp; 
                                                        <a href="https://plus.google.com/+Avanzegroup" style="text-decoration:none;border-style:none;border:0;padding:0;margin:0;font-family:Helvetica Neue Light,Helvetica,Arial,sans-serif;color:#55acee;font-size:12px;padding:0px;margin:0px;font-weight:600;line-height:12px" target="_blank"><img src="http://www.avanzegroup.com/img/g+.png" width="20"/></a> &nbsp;&nbsp;
                                                        <a href="https://www.linkedin.com/company/avanzegroup" style="text-decoration:none;border-style:none;border:0;padding:0;margin:0;font-family:Helvetica Neue Light,Helvetica,Arial,sans-serif;color:#55acee;font-size:12px;padding:0px;margin:0px;font-weight:600;line-height:12px" target="_blank"><img src="http://www.avanzegroup.com/img/linkedin.png" width="20"/></a>
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height="10" style="height:10px;line-height:1px;font-size:1px;padding:0;margin:0;line-height:1px;font-size:1px"></td>
                                            </tr>

                                        <tr>
                                            <td height="20" style="height:20;padding:0;margin:0;line-height:1px;font-size:1px"></td>
                                            </tr>
                                            
                                            <tr>
                                                <td align="center" style="padding:0;margin:0;line-height:1px;font-size:1px"> 
                                                    <span style="font-family:Helvetica Neue Light,Helvetica,Arial,sans-serif;color:#8899a6;font-size:12px;padding:0px;margin:0px;font-weight:normal;line-height:12px"> 
                                                        <a href="http://www.avanzegroup.com/contact.php" style="text-decoration:none;border-style:none;border:0;padding:0;margin:0;font-family:Helvetica Neue Light,Helvetica,Arial,sans-serif;color:#74a7dc;font-size:12px;padding:0px;margin:0px;font-weight:600;line-height:12px" target="_blank" >Avanze Solutions Inc. <br><br>1000 N.West Street,<br> Suite 1200 Wilmington, Delaware 19801, USA</a> &nbsp;&nbsp; 
                                                        
                    
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td align="center" style="padding:0;margin:0;line-height:1px;font-size:1px"> 
                                                    <span style="font-family:Helvetica Neue Light,Helvetica,Arial,sans-serif;color:#8899a6;font-size:12px;padding:0px;margin:0px;font-weight:normal;line-height:12px"> 
                                                        <a href="http://www.avanzegroup.com/contact.php" style="text-decoration:none;border-style:none;border:0;padding:0;margin:0;font-family:Helvetica Neue Light,Helvetica,Arial,sans-serif;color:#74a7dc;font-size:12px;padding:0px;margin:0px;font-weight:600;line-height:12px" target="_blank" >Phone: 302-966-9195</a> &nbsp;&nbsp; 
                                                        <a href="http://www.avanzegroup.com/contact.php" style="text-decoration:none;border-style:none;border:0;padding:0;margin:0;font-family:Helvetica Neue Light,Helvetica,Arial,sans-serif;color:#74a7dc;font-size:12px;padding:0px;margin:0px;font-weight:600;line-height:12px" target="_blank">Email: info@avanzegroup.com </a> &nbsp;&nbsp; 
                    
                                                    </span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height="26" style="height:26;padding:0;margin:0;line-height:1px;font-size:1px"></td>
                                            </tr>
                                            </tbody>
                                        </table>


                                    </td>
                                </tr>
                            <tr>

                            <td height="14" style="height:14px;padding:0;margin:0;line-height:1px;font-size:1px"> &nbsp; </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>

</body>
</html>';


    $send_mail = mail($acemail, $acemailsub, $ACMESSAGE_BODY, $acmailheader);

	if(!$send_mail)
    {
        //If mail couldn't be sent output error. Check your PHP email configuration (if it ever happens)
        echo $output = json_encode(array('type'=>'error', 'text' => 'Could not send mail! Please check your PHP mail configuration.'));
       
    }else{
        echo  $output = json_encode(array('type'=>'message', 'text' => 'Hi '.$first_name.'...'));
        
    }


?>