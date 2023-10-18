<?php
include('admin/config/sql.php');
session_start();
// header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
// header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
// header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
// header("Cache-Control: post-check=0, pre-check=0", false);
// header("Pragma: no-cache");
$_SESSION['crpage'] = basename($_SERVER['PHP_SELF']);
$_SESSION['webURL']='https://www.testsgenie.com';
$NonLogInPages=array('login.php','signup.php','forgot-password.php','forgot-password1.php');
if($_SESSION['trialTest']=='Yes')
{
    $logInPages=array('pause.php');
}
else
{
    $logInPages=array('anwersReview.php','pause.php','quespaper.php','result.php','score.php','specific_instruction.php','Start-test.php','submitConfirmation.php','test_instruction.php');
}
if($_SERVER['SERVER_NAME']=='localhost')
{
    $_SESSION['fullurl']='http://'.$_SERVER['SERVER_NAME'].substr($_SERVER['PHP_SELF'], 0, strrpos($_SERVER['PHP_SELF'], '/'));
}
else
{
    $_SESSION['fullurl']='http://'.$_SERVER['SERVER_NAME'].substr($_SERVER['PHP_SELF'], 0, strrpos($_SERVER['PHP_SELF'], '/'));
}
$_SESSION['pageFolder']='Root Folder';
include('essentials/cookies.php');
if($_SESSION['uid']!='')
{
    if (in_array($_SESSION['crpage'],$NonLogInPages))
    {
        header('location:index.php');
    }
    $uProfileDet=mysqli_fetch_object(mysqli_query($dbconn,"select * from uprofile where id='".$_SESSION['uid']."'"));
    $uProfileDetSub=mysqli_fetch_object(mysqli_query($dbconn,"select * from uprsub where uid='".$_SESSION['uid']."' and isprimary='Yes'"));
    $chkLastLogin=mysqli_num_rows(mysqli_query($dbconn,"select * from ulastlogin where uid='".$_SESSION['uid']."' and adate LIKE '%".date('Y-m-d')."%'"));
    if($chkLastLogin<=0)
    {
        mysqli_query($dbconn,"update ulastlogin set clogin='0' where uid='".$_SESSION['uid']."'");
        mysqli_query($dbconn,"insert into ulastlogin(uid,clogin)values('".$_SESSION['uid']."','1')");
    }
    if (in_array($_SESSION['crpage'],$logInPages) && $_SESSION['seltpid']=='')
    {
        header('location:index.php');
    }
}
if($_SESSION['uid']!='' || $_SESSION['trialTest']=='Yes')
{
    if($_SESSION['seltpid']!='')
    {
        $selTestPaper=mysqli_fetch_object(mysqli_query($dbconn,"select * from testpaper where id='".$_SESSION['seltpid']."'"));
        $selTestTypeDet=mysqli_fetch_object(mysqli_query($dbconn,"select * from testtype where name='".$selTestPaper->testtype."'"));
        $selTpExam=mysqli_fetch_object(mysqli_query($dbconn,"select * from exam where id='".$selTestPaper->examid."'"));
        $testPaperNameHeader=$selTestPaper->name;
    }
}
else
{
    if (in_array($_SESSION['crpage'],$logInPages))
    {
        $_SESSION['crpage1']=$_SESSION['crpage'];
        header('location:login.php');
    }
}
?>