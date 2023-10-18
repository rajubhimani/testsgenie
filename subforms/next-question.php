<?php
$lastQuestion=0;
include('../admin/config/sql.php');
session_start();
//echo ''.$_REQUEST['lastqid'].' - '.$_REQUEST['lastqno'].' - '.$_REQUEST['qopradio'].'';
if($_REQUEST['ftype']=='markquestion')
{
    if($_REQUEST['qopradio']!='')
    {
        $qstatus=3;
    }
    else
    {
        $qstatus=2;
    }
}
if($_REQUEST['ftype']=='nextquestion')
{
    if($_REQUEST['qopradio']!='')
    {
        $qstatus=1;
    }
    else
    {
        $qstatus=4;
    }
}
if($_REQUEST['ftype']=='markquestion' || $_REQUEST['ftype']=='nextquestion')
{
    mysqli_query($dbconn,"update utpques set qstatus='".$qstatus."' where id='".$_REQUEST['lastqid']."'");
    if($_REQUEST['qopradio']!='')
    {
        mysqli_query($dbconn,"update utpques set uans='".$_REQUEST['qopradio']."' where id='".$_REQUEST['lastqid']."'");
    }
    mysqli_fetch_object(mysqli_query($dbconn, "update utestpaper set submitted='1' where id='" . $_SESSION['utpid'] . "'"));
}
header('location:../score.php');
?>