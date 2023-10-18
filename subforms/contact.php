<?php
$tname = "uprofile";
$pageid = "User";
include('../admin/config/sql.php');
include('../admin/config/fileupload-class.php');
include '../includes/mail.php';
session_start();

$strTo='info@testsgenie.com';
$strSubject='TestsGenie - Contact Us' ;
$message = '
'.$maila.'
    <table width="100%" cellpadding="10" cellspacing="0">
        <tr>
            <td width="150">First Name</td>
            <td>'.$_REQUEST['fnamecf'].'</td>
        </tr>
        <tr>
            <td width="150">Last Name</td>
            <td>'.$_REQUEST['lnamecf'].'</td>
        </tr>
        <tr>
            <td width="150">Email</td>
            <td>'.$_REQUEST['emailcf'].'</td>
        </tr>
        <tr>
            <td width="150">Phone</td>
            <td>'.$_REQUEST['phonecf'].'</td>
        </tr>
        <tr>
            <td width="150">Message</td>
            <td>'.$_REQUEST['messagecf'].'</td>
        </tr>
    </table>
'.$mailb.'
';
$headers  = "From: info@testsgenie.com \n";
$headers .= "MIME-version: 1.0\n";
$headers .= "Content-type: text/html; charset= iso-8859-1\n";
$headers1=$headers;
$result2 = mail($strTo,$strSubject,$message,$headers1, '-f info@testsgenie.com');

$_SESSION['msgStatus']='1';
$_SESSION['msgText']='Thank you for contacting us, We will get back to you soon ...';
header('location:../'.$_SESSION['crpage'].'');