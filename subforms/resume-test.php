<?php
include('../admin/config/sql.php');
session_start();
$_SESSION['utpid']=$_REQUEST['testid'];
$_SESSION['seltpid']=$_REQUEST['seltpid'];
// echo '1: '.$_REQUEST['testid'].'<br/>';
// echo '2: '.$_SESSION['utpid'].'<br/>';
header('location:../Start-test.php');
?>