<?php
include('../admin/config/sql.php');
session_start();
// header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
// header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
// header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
// header("Cache-Control: post-check=0, pre-check=0", false);
// header("Pragma: no-cache");
$_SESSION['crpage3'] = basename($_SERVER['PHP_SELF']);
$_SESSION['webURL']='https://www.testsgenie.com/testgenie-latest';
if($_SERVER['SERVER_NAME']=='localhost')
{
    $_SESSION['fullurl']='http://'.$_SERVER['SERVER_NAME'].substr($_SERVER['PHP_SELF'], 0, strrpos($_SERVER['PHP_SELF'], '/'));
}
else
{
    $_SESSION['fullurl']='http://'.$_SERVER['SERVER_NAME'].substr($_SERVER['PHP_SELF'], 0, strrpos($_SERVER['PHP_SELF'], '/'));
}
$_SESSION['pageFolder']='User Dashboard';
include('../essentials/cookies.php');
if($_SESSION['uid']=='')
{
    header('location:../login.php?redirectPage=user-dashboard/'.$_SESSION['crpage3'].'');
}
else
{
    $uProfileDet=mysqli_fetch_object(mysqli_query($dbconn,"select * from uprofile where id='".$_SESSION['uid']."'"));
    $uProfileDetSub=mysqli_fetch_object(mysqli_query($dbconn,"select * from uprsub where uid='".$_SESSION['uid']."' and isprimary='Yes'"));
    $chkLastLogin=mysqli_num_rows(mysqli_query($dbconn,"select * from ulastlogin where uid='".$_SESSION['uid']."' and adate LIKE '%".date('Y-m-d')."%'"));
    //echo $uProfileDet->exprofileid;
    if($uProfileDet->exprofileid!='' || $uProfileDet->exprofileid!='0' )
    {
        //echo $uProfileDet->exprofileid;
        $_SESSION['uExPrfID']=$uProfileDet->exprofileid;
        $uExProfileDet=mysqli_fetch_object(mysqli_query($dbconn,"select * from examprofile where eid='".$uProfileDet->exprofileid."'"));
    }
    else
    {
        $_SESSION['uExPrfID']='';
    }
    if($chkLastLogin<=0)
    {
        mysqli_query($dbconn,"update ulastlogin set clogin='0' where uid='".$_SESSION['uid']."'");
        mysqli_query($dbconn,"insert into ulastlogin(uid,clogin)values('".$_SESSION['uid']."','1')");
    }
    $gLastLoginDet=mysqli_fetch_object(mysqli_query($dbconn,"select * from ulastlogin where uid='".$_SESSION['uid']."' and clogin='0' order by adate desc"));
}
?>