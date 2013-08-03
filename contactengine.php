<?php

// $EmailFrom = "example@example.com";
$EmailTo = "nancy@chicagotailgators.com";
$Subject = "Contact From Tailgators Web Site";
$Name = Trim(stripslashes($_POST['Name']));
$Phone = Trim(stripslashes($_POST['Phone']));
$Email = Trim(stripslashes($_POST['Email']));
$Message = Trim(stripslashes($_POST['Message']));

// validation
$validationOK = true;
if (!$validationOK) {
    print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
    exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Phone: ";
$Body .= $Phone;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $Message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From: <$Email>");

// redirect to success page
if ($success) {
    print "<meta http-equiv=\"refresh\" content=\"0;URL=contactthanks.php\">";
} else {
    print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}
?>