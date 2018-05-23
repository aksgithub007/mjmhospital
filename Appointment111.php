<?php

$EmailFrom = "appointment@mjmhospital.com";
$EmailTo = "appointment@mjmhospital.com";
$Subject = "Appointment Details:-";
$FName = Trim(stripslashes($_POST['f_name'])); 
$LName = Trim(stripslashes($_POST['l_name'])); 
$Email = Trim(stripslashes($_POST['email'])); 
$Mobile = Trim(stripslashes($_POST['Number'])); 
$Date = Trim(stripslashes($_POST['date'])); 
$Dept = Trim(stripslashes($_POST['Department'])); 
$Sex = Trim(stripslashes($_POST['gender'])); 
$Time = Trim(stripslashes($_POST['Time'])); 


// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "First Name: ";
$Body .= $FName;
$Body .= "\n";
$Body .= "Last Name: ";
$Body .= $LName;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Mobile Number: ";
$Body .= $Mobile;
$Body .= "\n";
$Body .= "Date: ";
$Body .= $Date;
$Body .= "\n";
$Body .= "Time: ";
$Body .= $Time;
$Body .= "\n";
$Body .= "Department: ";
$Body .= $Dept;
$Body .= "\n";
$Body .= "Gender: ";
$Body .= $Sex;
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