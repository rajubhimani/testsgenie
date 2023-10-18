<?php
include('../admin/config/sql.php');
session_start();
$updet=mysqli_query($dbconn,"update uprofile set everify='Yes' where id='".$_REQUEST['tuid']."'");
if($updet)
{
	$_SESSION['msgText'] = 'Your Email ID has been successfully verified';
    $_SESSION['msgStatus']='1';
}
else
{
	$_SESSION['msgText'] = 'Your Email ID verification failed, Try again';
    $_SESSION['msgStatus']='0';
}
header('location:../index.php?shwlog=Yes');
?>