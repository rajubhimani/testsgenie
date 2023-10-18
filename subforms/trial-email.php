<?php
$tname = "uprofile";
$pageid = "User";
include('../admin/config/sql.php');
include('../admin/config/fileupload-class.php');
include '../includes/mail.php';
session_start();

if($_REQUEST['ftype']=='SendEmail')
{
    $randno123=rand(100000,999999);
    mysqli_query($dbconn,"insert into utrialemail(tpid,randno,email)
    values('".$_REQUEST['tpid']."','".$randno123."','".$_REQUEST['trailemail']."')");
    $strTo=$_REQUEST['trailemail'];
    $strSubject='TestsGenie - Detailed Results' ;
    $message = '
        '.$maila.'
        <p>You have successfully completed your test.</p>
        <p><a href="https://testsgenie.com/user-dashboard/score-detailed-trial.php?email='.$_REQUEST['trailemail'].'&randno='.$randno123.'">Click here to view detailed result</a></p>
        '.$mailb.'
    ';
    $headers  = "From: info@testsgenie.com \n";
    $headers .= "MIME-version: 1.0\n";
    $headers .= "Content-type: text/html; charset= iso-8859-1\n";
    $headers1=$headers;
    $result2 = mail($strTo,$strSubject,$message,$headers1);
    if($result2)
    {
        $_SESSION['msgStatus']='1';
        $_SESSION['msgText']='Email has been sent successfully';
    }
    else
    {
        $_SESSION['msgStatus']='0';
        $_SESSION['msgText']='Failed, Something went wrong';
    }
}
if($rdPage!=''){
    $_SESSION['crpage1']='';
    header('location:../'.$rdPage.'');
}
else{
    header('location:../'.$_SESSION['crpage'].'');
}
?>