<?php

$EmailFrom = "appointment@mjmhospital.com";
$EmailTo = "appointment@mjmhospital.com";
$Subject = "Enquiery Details:-";
$Name = Trim(stripslashes($_POST['name'])); 
$Email = Trim(stripslashes($_POST['email'])); 
$Mobile = Trim(stripslashes($_POST['mobile'])); 
$Message = Trim(stripslashes($_POST['message'])); 


// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Mobile Number: ";
$Body .= $Mobile;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";



// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=http://mjmhospital.com\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}
?>