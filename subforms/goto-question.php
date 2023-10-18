<?php
$lastQuestion=0;
include('../admin/config/sql.php');
session_start();
if($_REQUEST['ftype']=='GotoQuestion')
{
    $nextQno=$_REQUEST['qno'];
    $getUTPQid = mysqli_fetch_object(mysqli_query($dbconn, "select * from utpques where refid='" . $_SESSION['utpid'] . "' and qno='" . $nextQno . "'"));
    $attemptno=$getUTPQid->attemptno+1;
    mysqli_query($dbconn,"update utpques set attemptno='".$attemptno."' where id='".$getUTPQid->id."'");
    mysqli_query($dbconn,"update utestpaper set cqno='".$nextQno."' where id='".$_SESSION['utpid']."'");
}
header('location:../Start-test.php');
?>