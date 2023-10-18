<?php
$strTo = 'fadil@dotlinedesigns.com';
$strSubject = "Advance Booking Payment";
$message = "\n" .
    $message = '
<p>Hi Fadil,</p>
<p>The repair for your Laptop - advance payment is pending.</p>
';
//echo $message;
$headers = "From: info@testsgenie.com  \n";
$headers .= "MIME-version: 1.0\n";
$headers .= "Content-type: text/html; charset= iso-8859-1\n";
$result2 = mail($strTo, $strSubject, $message, $headers, "-f info@testsgenie.com");
if ($result2) {
    echo 'Success';
} else {

    echo 'Fail';
}
?>