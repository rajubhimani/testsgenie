<?php
$tname = "uprofile";
$pageid = "User";
include('../../admin/config/sql.php');
include('../../admin/config/fileupload-class.php');
include '../../includes/mail.php';
session_start();

$strTo='info@testsgenie.com';
$strSubject='Ask Genie' ;
$message = '
    '.$maila.'
        <table width="100%" cellpadding="10" cellspacing="0" border="1">
            <tr>
                <td width="150">Name</td>
                <td>'.$_REQUEST['fname'].'</td>
            </tr>
            <tr>
                <td width="150">Email</td>
                <td>'.$_REQUEST['email'].'</td>
            </tr>
            <tr>
                <td width="150">Phone</td>
                <td>'.$_REQUEST['phone'].'</td>
            </tr>
            <tr>
                <td width="150">Message</td>
                <td>'.$_REQUEST['message'].'</td>
            </tr>
        </table>
    '.$mailb.'
';
$headers  = "From: info@testsgenie.com \n";
$headers .= "MIME-version: 1.0\n";
$headers .= "Content-type: text/html; charset= iso-8859-1\n";
$headers1=$headers;
$result2 = mail($strTo,$strSubject,$message,$headers1);
$_SESSION['msgStatus']='1';
$_SESSION['msgText']='Thank you for contacting us, We will get back to you soon...';

if($rdPage!=''){
    $_SESSION['crpage1']='';
    header('location:../'.$rdPage.'');
}
else{
    header('location:../'.$_SESSION['crpage3'].'');
}
?>